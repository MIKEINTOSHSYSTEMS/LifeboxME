/**
 * Main application JavaScript with enhanced error handling
 */

class OCRApp {
    constructor() {
        this.init();
    }

    init() {
        this.bindEvents();
        this.initTextArea();
        this.checkRequirements();
        this.fixDownloadLink();
    }

    bindEvents() {
        // Copy text functionality
        const copyButton = document.getElementById('copyText');
        if (copyButton) {
            copyButton.addEventListener('click', () => this.copyText());
        }

        // Text area auto-resize
        const textArea = document.getElementById('extractedText');
        if (textArea) {
            textArea.addEventListener('input', () => this.autoResizeTextArea(textArea));
        }

        // Form submission handling
        const forms = document.querySelectorAll('form');
        forms.forEach(form => {
            form.addEventListener('submit', (e) => this.handleFormSubmit(e));
        });

        // Theme persistence
        this.initializeTheme();
    }

    initializeTheme() {
        const savedTheme = localStorage.getItem('ocr-theme') ||
            (window.matchMedia('(prefers-color-scheme: light)').matches ? 'dark' : 'light');

        document.documentElement.setAttribute('data-theme', savedTheme);

        // Update theme toggle button
        const themeToggle = document.querySelector('.theme-toggle');
        if (themeToggle) {
            const icon = themeToggle.querySelector('.theme-icon');
            const text = themeToggle.querySelector('span:last-child');

            if (savedTheme === 'light') {
                icon.textContent = '🌙';
                text.textContent = 'Dark Mode';
            } else {
                icon.textContent = '☀️';
                text.textContent = 'Light Mode';
            }
        }
    }

    async copyText() {
        const textArea = document.getElementById('extractedText');
        if (!textArea) return;

        try {
            await navigator.clipboard.writeText(textArea.value);
            this.showToast('Text copied to clipboard!', 'success');

            if (window.debugConsole) {
                window.debugConsole.log('Text copied to clipboard: ' + textArea.value.length + ' characters', 'SUCCESS');
            }
        } catch (err) {
            // Fallback for older browsers
            textArea.select();
            document.execCommand('copy');
            this.showToast('Text copied to clipboard!', 'success');

            if (window.debugConsole) {
                window.debugConsole.log('Text copied to clipboard (fallback method)', 'SUCCESS');
            }
        }
    }

    autoResizeTextArea(textArea) {
        textArea.style.height = 'auto';
        const newHeight = Math.min(textArea.scrollHeight, 400);
        textArea.style.height = newHeight + 'px';
        this.updateTextStats(textArea.value);
    }

    updateTextStats(text) {
        const charCount = document.getElementById('charCount');
        const wordCount = document.getElementById('wordCount');
        const lineCount = document.getElementById('lineCount');

        if (charCount) {
            charCount.textContent = text.length;
        }

        if (wordCount) {
            const words = text.trim() ? text.trim().split(/\s+/).length : 0;
            wordCount.textContent = words;
        }

        if (lineCount) {
            const lines = text ? text.split('\n').length : 0;
            lineCount.textContent = lines;
        }
    }

    async handleFormSubmit(e) {
        const form = e.target;
        const submitButton = form.querySelector('button[type="submit"]');
        const originalText = submitButton ? submitButton.innerHTML : '';

        // Show loading state
        if (submitButton) {
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class="btn-icon">⏳</span>Processing...';
        }

        this.showLoading();
        OCREvents.start();

        try {
            // Add loading progress updates
            const steps = [
                'Uploading image...',
                'Preprocessing image...',
                'Extracting text lines...',
                'Processing characters...',
                'Finalizing results...'
            ];

            let step = 0;
            const progressInterval = setInterval(() => {
                if (step < steps.length) {
                    if (window.debugConsole) {
                        window.debugConsole.updateLoadingDetails(steps[step]);
                    }
                    OCREvents.progress(steps[step]);
                    step++;
                } else {
                    clearInterval(progressInterval);
                }
            }, 800);

            // Let the form submit naturally
            // The loading state will continue until page reloads

        } catch (error) {
            console.error('Form submission error:', error);
            this.hideLoading();

            if (submitButton) {
                submitButton.disabled = false;
                submitButton.innerHTML = originalText;
            }

            this.showToast('An error occurred during processing', 'error');
            OCREvents.error(error.message);
        }
    }

    showLoading() {
        const overlay = document.getElementById('loadingOverlay');
        if (overlay) {
            overlay.classList.remove('hidden');
        }
    }

    hideLoading() {
        const overlay = document.getElementById('loadingOverlay');
        if (overlay) {
            overlay.classList.add('hidden');
        }
    }

    showToast(message, type = 'info') {
        // Remove existing toasts
        const existingToasts = document.querySelectorAll('.toast');
        existingToasts.forEach(toast => toast.remove());

        // Create new toast
        const toast = document.createElement('div');
        toast.className = `toast toast-${type}`;
        toast.innerHTML = `
            <div class="toast-content">
                <span class="toast-icon">${this.getToastIcon(type)}</span>
                <span class="toast-message">${message}</span>
            </div>
        `;

        Object.assign(toast.style, {
            position: 'fixed',
            top: '20px',
            right: '20px',
            background: this.getToastColor(type),
            color: 'white',
            padding: '12px 16px',
            borderRadius: '8px',
            boxShadow: '0 4px 12px rgba(0, 0, 0, 0.15)',
            zIndex: '10000',
            maxWidth: '300px',
            animation: 'slideIn 0.3s ease'
        });

        document.body.appendChild(toast);

        setTimeout(() => {
            toast.style.animation = 'slideOut 0.3s ease';
            setTimeout(() => toast.remove(), 300);
        }, 5000);
    }

    getToastIcon(type) {
        const icons = {
            success: '✅',
            error: '❌',
            warning: '⚠️',
            info: 'ℹ️'
        };
        return icons[type] || icons.info;
    }

    getToastColor(type) {
        const colors = {
            success: '#10b981',
            error: '#ef4444',
            warning: '#f59e0b',
            info: '#3b82f6'
        };
        return colors[type] || colors.info;
    }

    async checkRequirements() {
        const requirements = {
            clipboard: !!navigator.clipboard,
            camera: !!navigator.mediaDevices?.getUserMedia,
            fileReader: !!window.FileReader
        };

        if (window.debugConsole) {
            window.debugConsole.log('Browser capabilities check:', 'INFO');
            window.debugConsole.log(`- Clipboard API: ${requirements.clipboard ? 'Available' : 'Not available'}`, 'INFO');
            window.debugConsole.log(`- Camera API: ${requirements.camera ? 'Available' : 'Not available'}`, 'INFO');
            window.debugConsole.log(`- FileReader API: ${requirements.fileReader ? 'Available' : 'Not available'}`, 'INFO');
        }

        if (!requirements.camera) {
            const cameraSection = document.querySelector('.camera-section');
            if (cameraSection) {
                cameraSection.innerHTML += `
                    <div class="alert alert-warning">
                        <span class="alert-icon">⚠️</span>
                        Camera access is not supported in your browser. Please use a modern browser like Chrome, Firefox, or Edge.
                    </div>
                `;
            }
        }
    }

    initTextArea() {
        const textArea = document.getElementById('extractedText');
        if (textArea && textArea.value) {
            this.autoResizeTextArea(textArea);
            this.updateTextStats(textArea.value);

            if (window.debugConsole && textArea.value.trim()) {
                window.debugConsole.log('Text area initialized with ' + textArea.value.length + ' characters', 'INFO');
            }
        }
    }

    fixDownloadLink() {
        // Ensure download link works properly
        const downloadLink = document.getElementById('downloadLink');
        if (downloadLink) {
            downloadLink.addEventListener('click', (e) => {
                if (window.debugConsole) {
                    window.debugConsole.log('Initiating download...', 'INFO');
                }
            });
        }
    }
}

// Initialize the application when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    window.ocrApp = new OCRApp();

    // Log initial debug information
    if (window.debugConsole) {
        window.debugConsole.log('OCR Application initialized', 'SUCCESS');
        window.debugConsole.log('User agent: ' + navigator.userAgent, 'INFO');
        window.debugConsole.log('Viewport: ' + window.innerWidth + 'x' + window.innerHeight, 'INFO');
    }
});

// Add CSS animations for toasts
const style = document.createElement('style');
style.textContent = `
    @keyframes slideIn {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    @keyframes slideOut {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(100%);
            opacity: 0;
        }
    }
    
    .toast-warning {
        background: #f59e0b !important;
    }
`;
document.head.appendChild(style);