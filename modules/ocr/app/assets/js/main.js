/**
 * Enhanced Main application JavaScript with modern features
 */

class OCRApp {
    constructor() {
        this.isProcessing = false;
        this.currentZoom = 1;
        this.init();
    }

    init() {
        this.bindEvents();
        this.initTextArea();
        this.checkRequirements();
        this.fixDownloadLink();
        this.initTheme();
        this.initProgressTracking();

        // Safe logging initialization
        this.safeLog('OCR Application initialized successfully', 'SUCCESS');
        this.safeLog(`Viewport: ${window.innerWidth}x${window.innerHeight}`, 'INFO');
        this.safeLog(`User Agent: ${navigator.userAgent}`, 'INFO');
    }

    // Safe logging method that won't break if debugConsole fails
    safeLog(message, level = 'INFO') {
        try {
            if (window.debugConsole && typeof window.debugConsole.log === 'function') {
                window.debugConsole.log(message, level);
            } else {
                console.log(`[APP] ${message}`);
            }
        } catch (error) {
            console.log(`[APP-FALLBACK] ${message}`);
        }
    }

    bindEvents() {
        try {
            // Copy text functionality
            const copyButton = document.getElementById('copyText');
            if (copyButton) {
                copyButton.addEventListener('click', () => this.copyText());
            }

            // Clear text functionality
            const clearButton = document.getElementById('clearText');
            if (clearButton) {
                clearButton.addEventListener('click', () => this.clearText());
            }

            // Text area auto-resize
            const textArea = document.getElementById('extractedText');
            if (textArea) {
                textArea.addEventListener('input', () => this.autoResizeTextArea(textArea));
                textArea.addEventListener('focus', () => this.highlightTextArea(textArea));
                textArea.addEventListener('blur', () => this.unhighlightTextArea(textArea));
            }

            // Form submission handling
            const forms = document.querySelectorAll('form');
            forms.forEach(form => {
                form.addEventListener('submit', (e) => this.handleFormSubmit(e));
            });

            // Keyboard shortcuts
            document.addEventListener('keydown', (e) => this.handleKeyboardShortcuts(e));

            // Window resize handling
            window.addEventListener('resize', () => this.handleResize());

            // Page visibility handling
            document.addEventListener('visibilitychange', () => this.handleVisibilityChange());
        } catch (error) {
            console.error('Error binding events:', error);
            this.safeLog(`Error binding events: ${error.message}`, 'ERROR');
        }
    }

    initTheme() {
        try {
            // Check for saved theme or prefer color scheme
            const prefersDark = window.matchMedia('(prefers-color-scheme: light)').matches;
            const savedTheme = localStorage.getItem('ocr-theme') || (prefersDark ? 'dark' : 'light');

            // Apply theme
            document.documentElement.setAttribute('data-theme', savedTheme);

            // Update theme toggle button
            this.updateThemeToggle(savedTheme);

            this.safeLog(`Theme initialized: ${savedTheme}`, 'INFO');
        } catch (error) {
            console.error('Error initializing theme:', error);
        }
    }

    updateThemeToggle(theme) {
        try {
            const themeToggle = document.querySelector('.theme-toggle');
            if (themeToggle) {
                const icon = themeToggle.querySelector('.theme-icon i');
                const text = themeToggle.querySelector('.theme-text');

                if (theme === 'light') {
                    icon.className = 'fas fa-moon';
                    text.textContent = 'Dark Mode';
                } else {
                    icon.className = 'fas fa-sun';
                    text.textContent = 'Light Mode';
                }
            }
        } catch (error) {
            console.error('Error updating theme toggle:', error);
        }
    }

    initProgressTracking() {
        try {
            // Initialize progress tracking for long operations
            this.progressSteps = [
                'Uploading image...',
                'Preprocessing image...',
                'Detecting text regions...',
                'Extracting text lines...',
                'Processing characters...',
                'Analyzing font patterns...',
                'Finalizing results...'
            ];

            this.currentProgress = 0;
        } catch (error) {
            console.error('Error initializing progress tracking:', error);
        }
    }

    async copyText() {
        const textArea = document.getElementById('extractedText');
        if (!textArea || !textArea.value.trim()) {
            this.showToast('No text to copy', 'warning');
            return;
        }

        try {
            await navigator.clipboard.writeText(textArea.value);
            this.showToast('Text copied to clipboard!', 'success');

            // Visual feedback
            const copyButton = document.getElementById('copyText');
            if (copyButton) {
                const originalHTML = copyButton.innerHTML;
                copyButton.innerHTML = '<i class="fas fa-check"></i> Copied!';
                copyButton.disabled = true;

                setTimeout(() => {
                    copyButton.innerHTML = originalHTML;
                    copyButton.disabled = false;
                }, 2000);
            }

            this.safeLog(`Text copied to clipboard: ${textArea.value.length} characters`, 'SUCCESS');
        } catch (err) {
            // Fallback for older browsers
            try {
                textArea.select();
                textArea.setSelectionRange(0, 99999);
                document.execCommand('copy');
                this.showToast('Text copied to clipboard!', 'success');
                this.safeLog('Text copied to clipboard (fallback method)', 'SUCCESS');
            } catch (fallbackErr) {
                this.showToast('Failed to copy text', 'error');
                this.safeLog('Copy to clipboard failed', 'ERROR');
            }
        }
    }

    clearText() {
        try {
            const textArea = document.getElementById('extractedText');
            if (textArea) {
                textArea.value = '';
                this.autoResizeTextArea(textArea);
                this.updateTextStats('');
                this.showToast('Text cleared', 'info');
                this.safeLog('Text area cleared', 'INFO');
            }
        } catch (error) {
            console.error('Error clearing text:', error);
        }
    }

    autoResizeTextArea(textArea) {
        try {
            // Reset height to auto to get proper scrollHeight
            textArea.style.height = 'auto';

            // Calculate new height (with max limit)
            const newHeight = Math.min(textArea.scrollHeight, 400);
            textArea.style.height = newHeight + 'px';

            // Update statistics
            this.updateTextStats(textArea.value);
        } catch (error) {
            console.error('Error auto-resizing text area:', error);
        }
    }

    highlightTextArea(textArea) {
        try {
            textArea.parentElement.classList.add('focused');
        } catch (error) {
            console.error('Error highlighting text area:', error);
        }
    }

    unhighlightTextArea(textArea) {
        try {
            textArea.parentElement.classList.remove('focused');
        } catch (error) {
            console.error('Error unhighlighting text area:', error);
        }
    }

    updateTextStats(text) {
        try {
            const charCount = document.getElementById('charCount');
            const wordCount = document.getElementById('wordCount');
            const lineCount = document.getElementById('lineCount');

            if (charCount) {
                charCount.textContent = text.length.toLocaleString();
            }

            if (wordCount) {
                const words = text.trim() ? text.trim().split(/\s+/).length : 0;
                wordCount.textContent = words.toLocaleString();
            }

            if (lineCount) {
                const lines = text ? text.split('\n').length : 0;
                lineCount.textContent = lines.toLocaleString();
            }
        } catch (error) {
            console.error('Error updating text stats:', error);
        }
    }

    async handleFormSubmit(e) {
        if (this.isProcessing) {
            e.preventDefault();
            this.showToast('Please wait for current processing to complete', 'warning');
            return;
        }

        const form = e.target;
        const submitButton = form.querySelector('button[type="submit"]');
        const originalText = submitButton ? submitButton.innerHTML : '';

        // Show loading state
        this.isProcessing = true;
        if (submitButton) {
            submitButton.disabled = true;
            const btnText = submitButton.querySelector('.btn-text');
            const btnLoading = submitButton.querySelector('.btn-loading');

            if (btnText) btnText.style.display = 'none';
            if (btnLoading) btnLoading.style.display = 'flex';
        }

        this.showLoading();

        // Update debug status
        this.safeUpdateStatus('processing');
        this.safeLog('Starting form submission...', 'INFO');

        try {
            // Simulate progress updates for better UX
            this.simulateProgress();

            // Let the form submit naturally
            // The loading state will continue until page reloads

        } catch (error) {
            console.error('Form submission error:', error);
            this.hideLoading();
            this.isProcessing = false;

            if (submitButton) {
                submitButton.disabled = false;
                const btnText = submitButton.querySelector('.btn-text');
                const btnLoading = submitButton.querySelector('.btn-loading');

                if (btnText) btnText.style.display = 'block';
                if (btnLoading) btnLoading.style.display = 'none';
            }

            this.showToast('An error occurred during processing', 'error');
            this.safeUpdateStatus('error');
            this.safeLog(`Form submission error: ${error.message}`, 'ERROR');
        }
    }

    simulateProgress() {
        try {
            let progress = 0;
            const progressFill = document.getElementById('progressFill');
            const progressText = document.getElementById('progressText');

            const interval = setInterval(() => {
                if (progress >= 100) {
                    clearInterval(interval);
                    return;
                }

                progress += Math.random() * 15;
                progress = Math.min(progress, 90); // Cap at 90% until actual completion

                if (progressFill) {
                    progressFill.style.width = `${progress}%`;
                }

                if (progressText) {
                    const stepIndex = Math.floor((progress / 100) * this.progressSteps.length);
                    const step = this.progressSteps[Math.min(stepIndex, this.progressSteps.length - 1)];
                    progressText.textContent = step;
                }
            }, 800);
        } catch (error) {
            console.error('Error simulating progress:', error);
        }
    }

    safeUpdateStatus(status) {
        try {
            if (window.debugConsole && window.debugConsole.updateStatus) {
                window.debugConsole.updateStatus(status);
            }
        } catch (error) {
            console.error('Error updating status:', error);
        }
    }

    showLoading() {
        try {
            const overlay = document.getElementById('loadingOverlay');
            if (overlay) {
                overlay.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        } catch (error) {
            console.error('Error showing loading overlay:', error);
        }
    }

    hideLoading() {
        try {
            const overlay = document.getElementById('loadingOverlay');
            if (overlay) {
                overlay.classList.add('hidden');
                document.body.style.overflow = '';
            }

            // Reset progress
            const progressFill = document.getElementById('progressFill');
            const progressText = document.getElementById('progressText');
            if (progressFill) progressFill.style.width = '0%';
            if (progressText) progressText.textContent = 'Initializing...';
        } catch (error) {
            console.error('Error hiding loading overlay:', error);
        }
    }

    showToast(message, type = 'info', duration = 5000) {
        try {
            const toastContainer = document.getElementById('toastContainer') || this.createToastContainer();

            const toast = document.createElement('div');
            toast.className = `toast toast-${type}`;
            toast.innerHTML = `
                <div class="toast-icon">
                    <i class="fas fa-${this.getToastIcon(type)}"></i>
                </div>
                <div class="toast-content">
                    <div class="toast-message">${message}</div>
                </div>
                <button class="toast-close" onclick="this.parentElement.remove()">
                    <i class="fas fa-times"></i>
                </button>
            `;

            toastContainer.appendChild(toast);

            // Auto remove after duration
            setTimeout(() => {
                if (toast.parentElement) {
                    toast.style.animation = 'slideOutRight 0.3s ease';
                    setTimeout(() => toast.remove(), 300);
                }
            }, duration);

            return toast;
        } catch (error) {
            console.error('Error showing toast:', error);
            // Fallback to alert for critical errors
            if (type === 'error') {
                alert(`Error: ${message}`);
            }
        }
    }

    createToastContainer() {
        try {
            const container = document.createElement('div');
            container.id = 'toastContainer';
            container.className = 'toast-container';
            document.body.appendChild(container);
            return container;
        } catch (error) {
            console.error('Error creating toast container:', error);
            return document.body;
        }
    }

    getToastIcon(type) {
        const icons = {
            success: 'check-circle',
            error: 'exclamation-circle',
            warning: 'exclamation-triangle',
            info: 'info-circle'
        };
        return icons[type] || 'info-circle';
    }

    handleKeyboardShortcuts(e) {
        try {
            // Ctrl/Cmd + C to copy text
            if ((e.ctrlKey || e.metaKey) && e.key === 'c') {
                const activeElement = document.activeElement;
                if (activeElement.id === 'extractedText' && activeElement.value) {
                    e.preventDefault();
                    this.copyText();
                }
            }

            // Ctrl/Cmd + Enter to submit form
            if ((e.ctrlKey || e.metaKey) && e.key === 'Enter') {
                const activeForm = document.activeElement.closest('form');
                if (activeForm && !this.isProcessing) {
                    e.preventDefault();
                    activeForm.requestSubmit();
                }
            }

            // Escape to close loading overlay
            if (e.key === 'Escape') {
                const overlay = document.getElementById('loadingOverlay');
                if (overlay && !overlay.classList.contains('hidden')) {
                    this.showToast('Processing cannot be cancelled once started', 'info', 3000);
                }
            }
        } catch (error) {
            console.error('Error handling keyboard shortcut:', error);
        }
    }

    handleResize() {
        try {
            // Update any responsive elements
            const textArea = document.getElementById('extractedText');
            if (textArea) {
                this.autoResizeTextArea(textArea);
            }

            this.safeLog(`Viewport resized to: ${window.innerWidth}x${window.innerHeight}`, 'INFO');
        } catch (error) {
            console.error('Error handling resize:', error);
        }
    }

    handleVisibilityChange() {
        try {
            if (document.hidden) {
                this.safeLog('Page became hidden', 'INFO');
            } else {
                this.safeLog('Page became visible', 'INFO');
            }
        } catch (error) {
            console.error('Error handling visibility change:', error);
        }
    }

    async checkRequirements() {
        try {
            const requirements = {
                clipboard: !!navigator.clipboard,
                camera: !!navigator.mediaDevices?.getUserMedia,
                fileReader: !!window.FileReader,
                webWorker: !!window.Worker,
                serviceWorker: !!navigator.serviceWorker,
                storage: !!window.localStorage
            };

            this.safeLog('Browser capabilities check:', 'INFO');
            Object.entries(requirements).forEach(([feature, available]) => {
                this.safeLog(`- ${feature}: ${available ? '✅ Available' : '❌ Not available'}`, 'INFO');
            });

            // Show warnings for missing features
            if (!requirements.camera) {
                this.showToast('Camera access not available in your browser', 'warning', 6000);
            }

            if (!requirements.clipboard) {
                this.showToast('Clipboard API not available - copy feature limited', 'warning', 4000);
            }

            return requirements;
        } catch (error) {
            console.error('Error checking requirements:', error);
            return {};
        }
    }

    initTextArea() {
        try {
            const textArea = document.getElementById('extractedText');
            if (textArea && textArea.value) {
                this.autoResizeTextArea(textArea);
                this.updateTextStats(textArea.value);

                if (textArea.value.trim()) {
                    this.safeLog(`Text area initialized with ${textArea.value.length} characters`, 'INFO');
                }
            }
        } catch (error) {
            console.error('Error initializing text area:', error);
        }
    }

    fixDownloadLink() {
        try {
            const downloadLink = document.getElementById('downloadLink');
            if (downloadLink) {
                downloadLink.addEventListener('click', (e) => {
                    this.safeLog('Initiating download...', 'INFO');
                    this.trackDownload();
                });
            }
        } catch (error) {
            console.error('Error fixing download link:', error);
        }
    }

    trackDownload() {
        try {
            this.safeLog('Download tracked', 'INFO');
        } catch (error) {
            console.error('Error tracking download:', error);
        }
    }

    // Image zoom functionality
    zoomIn() {
        try {
            this.currentZoom = Math.min(this.currentZoom + 0.25, 3);
            this.applyZoom();
            this.showToast(`Zoom: ${Math.round(this.currentZoom * 100)}%`, 'info', 2000);
        } catch (error) {
            console.error('Error zooming in:', error);
        }
    }

    zoomOut() {
        try {
            this.currentZoom = Math.max(this.currentZoom - 0.25, 0.5);
            this.applyZoom();
            this.showToast(`Zoom: ${Math.round(this.currentZoom * 100)}%`, 'info', 2000);
        } catch (error) {
            console.error('Error zooming out:', error);
        }
    }

    resetZoom() {
        try {
            this.currentZoom = 1;
            this.applyZoom();
            this.showToast('Zoom reset', 'info', 2000);
        } catch (error) {
            console.error('Error resetting zoom:', error);
        }
    }

    applyZoom() {
        try {
            const previewImage = document.getElementById('previewImage');
            if (previewImage) {
                previewImage.style.transform = `scale(${this.currentZoom})`;
            }
        } catch (error) {
            console.error('Error applying zoom:', error);
        }
    }
}

// Safe initialization
function initializeOCRApp() {
    try {
        window.ocrApp = new OCRApp();

        // Add CSS for text area focus state
        const style = document.createElement('style');
        style.textContent = `
            .text-area-container.focused {
                box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
                border-radius: var(--border-radius);
            }
            
            @keyframes slideInRight {
                from {
                    transform: translateX(100%);
                    opacity: 0;
                }
                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }
            
            @keyframes slideOutRight {
                from {
                    transform: translateX(0);
                    opacity: 1;
                }
                to {
                    transform: translateX(100%);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);

        return true;
    } catch (error) {
        console.error('Failed to initialize OCR App:', error);
        return false;
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    initializeOCRApp();
});

// Export for global access
window.OCRApp = OCRApp;