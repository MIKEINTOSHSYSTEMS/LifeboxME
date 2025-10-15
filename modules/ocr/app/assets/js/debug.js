/**
 * Debug console functionality
 */

class DebugConsole {
    constructor() {
        this.console = document.getElementById('debugConsole');
        this.messagesContainer = this.console?.querySelector('.debug-messages');
        this.clearButton = document.getElementById('clearDebug');
        this.toggleButton = document.getElementById('toggleDebug');
        this.isCollapsed = false;

        this.init();
    }

    init() {
        this.bindEvents();
        this.log('Debug console initialized', 'INFO');
    }

    bindEvents() {
        if (this.clearButton) {
            this.clearButton.addEventListener('click', () => this.clear());
        }

        if (this.toggleButton) {
            this.toggleButton.addEventListener('click', () => this.toggle());
        }

        // Listen for OCR events
        document.addEventListener('ocrStart', (e) => {
            this.log('OCR process started', 'INFO');
        });

        document.addEventListener('ocrProgress', (e) => {
            this.log(e.detail.message, 'INFO');
        });

        document.addEventListener('ocrComplete', (e) => {
            this.log(`OCR completed: ${e.detail.textLength} characters extracted`, 'SUCCESS');
        });

        document.addEventListener('ocrError', (e) => {
            this.log(`OCR error: ${e.detail.message}`, 'ERROR');
        });

        // Listen for camera events
        document.addEventListener('cameraStart', (e) => {
            this.log('Camera started', 'INFO');
        });

        document.addEventListener('cameraCapture', (e) => {
            this.log('Image captured from camera', 'INFO');
        });

        document.addEventListener('cameraError', (e) => {
            this.log(`Camera error: ${e.detail.message}`, 'ERROR');
        });

        // Listen for upload events
        document.addEventListener('fileUpload', (e) => {
            this.log(`File uploaded: ${e.detail.filename}`, 'INFO');
        });

        document.addEventListener('uploadError', (e) => {
            this.log(`Upload error: ${e.detail.message}`, 'ERROR');
        });
    }

    // Updated the log method to use local time
    log(message, level = 'INFO') {
        if (!this.messagesContainer) return;

        // Use server time (already in Addis Ababa timezone) or local time
        const timestamp = new Date().toLocaleTimeString('en-US', {
            timeZone: 'Africa/Addis_Ababa',
            hour12: false
        });

        const messageElement = document.createElement('div');
        messageElement.className = `debug-message debug-${level.toLowerCase()}`;
        messageElement.innerHTML = `
        <span class="debug-timestamp">[${timestamp}]</span>
        ${this.escapeHtml(message)}
    `;

        this.messagesContainer.appendChild(messageElement);

        // Auto-scroll to bottom
        this.console.scrollTop = this.console.scrollHeight;

        // Also log to browser console
        const consoleMethod = level === 'ERROR' ? 'error' :
            level === 'WARNING' ? 'warn' : 'log';
        console[consoleMethod](`[OCR] ${message}`);
    }

    clear() {
        if (this.messagesContainer) {
            this.messagesContainer.innerHTML = '';
            this.log('Debug console cleared', 'INFO');
        }
    }

    toggle() {
        this.isCollapsed = !this.isCollapsed;

        if (this.isCollapsed) {
            this.console.classList.add('collapsed');
            this.toggleButton.innerHTML = '<span class="btn-icon">🔍</span>Show Console';
        } else {
            this.console.classList.remove('collapsed');
            this.toggleButton.innerHTML = '<span class="btn-icon">🔍</span>Hide Console';
        }
    }

    escapeHtml(unsafe) {
        return unsafe
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");
    }

    // Public method to add loading details
    updateLoadingDetails(details) {
        const loadingDetails = document.getElementById('loadingDetails');
        if (loadingDetails) {
            loadingDetails.textContent = details;
        }
    }
}

// Initialize debug console
document.addEventListener('DOMContentLoaded', () => {
    window.debugConsole = new DebugConsole();
});

// Custom events for OCR process
class OCREvents {
    static start() {
        document.dispatchEvent(new CustomEvent('ocrStart'));
    }

    static progress(message) {
        document.dispatchEvent(new CustomEvent('ocrProgress', {
            detail: { message }
        }));
    }

    static complete(textLength) {
        document.dispatchEvent(new CustomEvent('ocrComplete', {
            detail: { textLength }
        }));
    }

    static error(message) {
        document.dispatchEvent(new CustomEvent('ocrError', {
            detail: { message }
        }));
    }
}

// Custom events for camera
class CameraEvents {
    static start() {
        document.dispatchEvent(new CustomEvent('cameraStart'));
    }

    static capture() {
        document.dispatchEvent(new CustomEvent('cameraCapture'));
    }

    static error(message) {
        document.dispatchEvent(new CustomEvent('cameraError', {
            detail: { message }
        }));
    }
}

// Custom events for file upload
class UploadEvents {
    static success(filename) {
        document.dispatchEvent(new CustomEvent('fileUpload', {
            detail: { filename }
        }));
    }

    static error(message) {
        document.dispatchEvent(new CustomEvent('uploadError', {
            detail: { message }
        }));
    }
}