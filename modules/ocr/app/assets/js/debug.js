/**
 * Enhanced Debug console functionality with modern features
 */

class DebugConsole {
    constructor() {
        this.console = document.getElementById('debugConsole');
        this.messagesContainer = this.console?.querySelector('.debug-messages');
        this.clearButton = document.getElementById('clearDebug');
        this.toggleButton = document.getElementById('toggleDebug');
        this.exportButton = document.getElementById('exportDebug');
        this.debugStatus = document.getElementById('debugStatus');
        this.isCollapsed = false;
        this.messageCount = 0;
        this.maxMessages = 1000;
        this.isInitialized = false;

        // Initialize immediately
        this.init();
    }

    init() {
        try {
            console.log('DebugConsole: Starting initialization...');

            // First, set up a basic log method that works immediately
            this._setupImmediateLogging();

            // Then bind events
            this.bindEvents();

            // Load any existing logs
            this.loadSessionLogs();

            // Update status
            this.updateStatus('ready');

            // Mark as initialized
            this.isInitialized = true;

            // Now use the proper log method
            this._log('Debug console initialized', 'INFO');

            console.log('DebugConsole: Initialization completed successfully');

        } catch (error) {
            console.error('DebugConsole: Initialization failed:', error);
            this.isInitialized = false;
            // Ensure we have at least basic logging
            this._setupImmediateLogging();
        }
    }

    _setupImmediateLogging() {
        // Create a basic log method that works even if full initialization fails
        this._log = (message, level = 'INFO') => {
            try {
                if (!this.messagesContainer) {
                    // Fallback to console if messages container isn't available
                    const consoleMethod = level === 'ERROR' ? 'error' :
                        level === 'WARNING' ? 'warn' : 'log';
                    console[consoleMethod](`[OCR-DEBUG] ${message}`);
                    return;
                }

                const timestamp = new Date().toLocaleTimeString('en-US', {
                    hour12: false,
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit'
                });

                const messageElement = this.createMessageElement(message, level, timestamp);
                this.messagesContainer.appendChild(messageElement);

                // Update message count and trim if needed
                this.messageCount++;
                if (this.messageCount > this.maxMessages) {
                    this.trimOldMessages();
                }

                // Auto-scroll to bottom
                this.scrollToBottom();

                // Store in session storage
                this.storeMessage(message, level, timestamp);

                // Also log to browser console
                const consoleMethod = level === 'ERROR' ? 'error' :
                    level === 'WARNING' ? 'warn' : 'log';
                console[consoleMethod](`[OCR] ${message}`);
            } catch (error) {
                console.error('Error in _log:', error);
            }
        };
    }

    bindEvents() {
        try {
            console.log('DebugConsole: Binding events...');

            if (this.clearButton) {
                this.clearButton.addEventListener('click', () => this.clear());
            }

            if (this.toggleButton) {
                this.toggleButton.addEventListener('click', () => this.toggle());
            }

            if (this.exportButton) {
                this.exportButton.addEventListener('click', () => this.exportLogs());
            }

            // Listen for OCR events
            document.addEventListener('ocrStart', (e) => {
                this.log('OCR process started', 'INFO');
                this.updateStatus('processing');
            });

            document.addEventListener('ocrProgress', (e) => {
                this.log(e.detail.message, 'INFO');
            });

            document.addEventListener('ocrComplete', (e) => {
                this.log(`OCR completed: ${e.detail.textLength} characters extracted`, 'SUCCESS');
                this.updateStatus('ready');
            });

            document.addEventListener('ocrError', (e) => {
                this.log(`OCR error: ${e.detail.message}`, 'ERROR');
                this.updateStatus('error');
            });

            // Listen for camera events
            document.addEventListener('cameraStart', (e) => {
                this.log('Camera started', 'INFO');
            });

            document.addEventListener('cameraCapture', (e) => {
                this.log('Image captured from camera', 'SUCCESS');
            });

            document.addEventListener('cameraError', (e) => {
                this.log(`Camera error: ${e.detail.message}`, 'ERROR');
            });

            // Listen for upload events
            document.addEventListener('fileUpload', (e) => {
                this.log(`File uploaded: ${e.detail.filename}`, 'SUCCESS');
            });

            document.addEventListener('uploadError', (e) => {
                this.log(`Upload error: ${e.detail.message}`, 'ERROR');
            });

            // Auto-scroll observer
            if (this.messagesContainer) {
                this.observer = new MutationObserver(() => {
                    this.scrollToBottom();
                });
                this.observer.observe(this.messagesContainer, { childList: true });
            }

            console.log('DebugConsole: Events bound successfully');
        } catch (error) {
            console.error('DebugConsole: Error binding events:', error);
        }
    }

    // Public log method that checks initialization status
    log(message, level = 'INFO') {
        if (!this.isInitialized) {
            // If not initialized yet, use the immediate logging
            if (this._log) {
                this._log(message, level);
            } else {
                // Ultimate fallback
                console.log(`[OCR-DEBUG-FALLBACK] ${message}`);
            }
            return;
        }

        // Use the proper logging method
        this._log(message, level);
    }

    createMessageElement(message, level, timestamp) {
        const messageElement = document.createElement('div');
        messageElement.className = `debug-message debug-${level.toLowerCase()}`;

        const icon = this.getMessageIcon(level);
        const timestampSpan = document.createElement('span');
        timestampSpan.className = 'debug-timestamp';
        timestampSpan.textContent = `[${timestamp}]`;

        const contentSpan = document.createElement('span');
        contentSpan.className = 'debug-content';
        contentSpan.textContent = message;

        if (icon) {
            const iconSpan = document.createElement('span');
            iconSpan.className = 'debug-icon';
            iconSpan.innerHTML = icon;
            messageElement.appendChild(iconSpan);
        }

        messageElement.appendChild(timestampSpan);
        messageElement.appendChild(contentSpan);

        return messageElement;
    }

    getMessageIcon(level) {
        const icons = {
            'SUCCESS': '<i class="fas fa-check-circle"></i>',
            'ERROR': '<i class="fas fa-exclamation-circle"></i>',
            'WARNING': '<i class="fas fa-exclamation-triangle"></i>',
            'INFO': '<i class="fas fa-info-circle"></i>'
        };
        return icons[level] || '';
    }

    clear() {
        try {
            if (this.messagesContainer) {
                this.messagesContainer.innerHTML = '';
                this.messageCount = 0;

                // Clear session storage
                sessionStorage.removeItem('debugLog');

                this.log('Debug console cleared', 'INFO');

                // Show toast notification
                if (window.ocrApp && window.ocrApp.showToast) {
                    window.ocrApp.showToast('Debug console cleared', 'info');
                }
            }
        } catch (error) {
            console.error('Error clearing debug console:', error);
        }
    }

    toggle() {
        try {
            this.isCollapsed = !this.isCollapsed;

            if (this.isCollapsed) {
                this.console.classList.add('collapsed');
                if (this.toggleButton) {
                    const toggleText = this.toggleButton.querySelector('.toggle-text');
                    const toggleIcon = this.toggleButton.querySelector('.btn-icon i');
                    if (toggleText) toggleText.textContent = 'Expand';
                    if (toggleIcon) toggleIcon.className = 'fas fa-chevron-up';
                }
            } else {
                this.console.classList.remove('collapsed');
                if (this.toggleButton) {
                    const toggleText = this.toggleButton.querySelector('.toggle-text');
                    const toggleIcon = this.toggleButton.querySelector('.btn-icon i');
                    if (toggleText) toggleText.textContent = 'Collapse';
                    if (toggleIcon) toggleIcon.className = 'fas fa-chevron-down';
                }

                // Scroll to bottom when expanding
                setTimeout(() => this.scrollToBottom(), 100);
            }
        } catch (error) {
            console.error('Error toggling debug console:', error);
        }
    }

    async exportLogs() {
        try {
            if (!this.messagesContainer) {
                throw new Error('No debug messages found');
            }

            const messages = Array.from(this.messagesContainer.children).map(msg => {
                const timestamp = msg.querySelector('.debug-timestamp')?.textContent || '';
                const content = msg.querySelector('.debug-content')?.textContent || '';
                return `${timestamp} ${content}`;
            }).join('\n');

            const blob = new Blob([messages], { type: 'text/plain' });
            const url = URL.createObjectURL(blob);

            const a = document.createElement('a');
            a.href = url;
            a.download = `ocr-debug-log-${new Date().toISOString().slice(0, 19).replace(/:/g, '-')}.txt`;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(url);

            this.log('Debug logs exported', 'SUCCESS');

            if (window.ocrApp && window.ocrApp.showToast) {
                window.ocrApp.showToast('Debug logs exported', 'success');
            }

        } catch (error) {
            console.error('Error exporting logs:', error);
            this.log(`Export failed: ${error.message}`, 'ERROR');

            if (window.ocrApp && window.ocrApp.showToast) {
                window.ocrApp.showToast('Error exporting logs', 'error');
            }
        }
    }

    scrollToBottom() {
        try {
            if (this.console && !this.isCollapsed) {
                this.console.scrollTop = this.console.scrollHeight;
            }
        } catch (error) {
            console.error('Error scrolling debug console:', error);
        }
    }

    storeMessage(message, level, timestamp) {
        try {
            const logEntry = { message, level, timestamp };
            const currentLogs = this.getStoredLogs();
            currentLogs.push(logEntry);

            // Keep only last 500 messages in storage
            if (currentLogs.length > 500) {
                currentLogs.splice(0, currentLogs.length - 500);
            }

            sessionStorage.setItem('debugLog', JSON.stringify(currentLogs));
        } catch (error) {
            console.warn('Failed to store debug message:', error);
        }
    }

    getStoredLogs() {
        try {
            const stored = sessionStorage.getItem('debugLog');
            return stored ? JSON.parse(stored) : [];
        } catch (error) {
            console.warn('Failed to retrieve stored logs:', error);
            return [];
        }
    }

    loadSessionLogs() {
        try {
            const storedLogs = this.getStoredLogs();
            storedLogs.forEach(log => {
                const messageElement = this.createMessageElement(log.message, log.level, log.timestamp);
                if (this.messagesContainer) {
                    this.messagesContainer.appendChild(messageElement);
                }
                this.messageCount++;
            });

            if (storedLogs.length > 0) {
                this.log(`Loaded ${storedLogs.length} previous log entries`, 'INFO');
            }
        } catch (error) {
            console.warn('Failed to load session logs:', error);
        }
    }

    trimOldMessages() {
        try {
            if (this.messagesContainer && this.messagesContainer.children.length > this.maxMessages) {
                const excess = this.messagesContainer.children.length - this.maxMessages;
                for (let i = 0; i < excess; i++) {
                    this.messagesContainer.removeChild(this.messagesContainer.firstChild);
                }
                this.messageCount = this.maxMessages;
                this.log(`Trimmed ${excess} old messages`, 'INFO');
            }
        } catch (error) {
            console.error('Error trimming old messages:', error);
        }
    }

    updateStatus(status) {
        try {
            if (!this.debugStatus) return;

            const statusConfig = {
                'ready': { text: 'Ready', color: 'success', icon: 'check-circle' },
                'processing': { text: 'Processing', color: 'warning', icon: 'sync fa-spin' },
                'error': { text: 'Error', color: 'error', icon: 'exclamation-circle' },
                'warning': { text: 'Warning', color: 'warning', icon: 'exclamation-triangle' }
            };

            const config = statusConfig[status] || statusConfig.ready;

            this.debugStatus.innerHTML = `
                <i class="fas fa-${config.icon}" style="color: var(--${config.color}-color)"></i>
                ${config.text}
            `;
        } catch (error) {
            console.error('Error updating debug status:', error);
        }
    }

    updateLoadingDetails(details) {
        try {
            const loadingDetails = document.getElementById('loadingDetails');
            if (loadingDetails) {
                loadingDetails.textContent = details;
            }
        } catch (error) {
            console.error('Error updating loading details:', error);
        }
    }

    // Safe wrapper for performance monitoring
    startTimer(label) {
        try {
            if (console.time) {
                console.time(label);
            }
            this.log(`Started: ${label}`, 'INFO');
            return performance.now();
        } catch (error) {
            console.error('Error starting timer:', error);
            return performance.now();
        }
    }

    endTimer(label, startTime) {
        try {
            if (console.timeEnd) {
                console.timeEnd(label);
            }
            const duration = performance.now() - startTime;
            this.log(`Completed: ${label} (${duration.toFixed(2)}ms)`, 'SUCCESS');
            return duration;
        } catch (error) {
            console.error('Error ending timer:', error);
            return 0;
        }
    }
}

// Global debug function with multiple fallbacks
window.debug = function (message, level = 'INFO') {
    // Check if debugConsole exists and has log method
    if (window.debugConsole && typeof window.debugConsole.log === 'function') {
        try {
            window.debugConsole.log(message, level);
        } catch (error) {
            // If debugConsole.log fails, fall back to console
            const consoleMethod = level === 'ERROR' ? 'error' :
                level === 'WARNING' ? 'warn' : 'log';
            console[consoleMethod](`[OCR-DEBUG-FALLBACK] ${message}`);
        }
    } else {
        // If debugConsole doesn't exist yet, use console directly
        const consoleMethod = level === 'ERROR' ? 'error' :
            level === 'WARNING' ? 'warn' : 'log';
        console[consoleMethod](`[OCR-DEBUG] ${message}`);
    }
};

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

// Safe initialization with proper ordering
function initializeDebugConsole() {
    try {
        console.log('Initializing Debug Console...');

        // Create the debug console instance immediately
        window.debugConsole = new DebugConsole();

        // Set up global error handlers AFTER debug console is created
        setTimeout(() => {
            // Global error handler
            window.addEventListener('error', (e) => {
                if (window.debugConsole && window.debugConsole.isInitialized) {
                    window.debugConsole.log(`Unhandled Error: ${e.message}`, 'ERROR');
                } else {
                    console.error('Unhandled Error (pre-init):', e.message);
                }
            });

            // Promise rejection handler
            window.addEventListener('unhandledrejection', (e) => {
                if (window.debugConsole && window.debugConsole.isInitialized) {
                    window.debugConsole.log(`Unhandled Promise Rejection: ${e.reason}`, 'ERROR');
                } else {
                    console.error('Unhandled Promise Rejection (pre-init):', e.reason);
                }
            });
        }, 100);

        console.log('Debug Console initialization completed');
        return true;

    } catch (error) {
        console.error('Failed to initialize debug console:', error);

        // Create an ultra-simple fallback that won't break
        window.debugConsole = {
            isInitialized: false,
            log: function (message, level = 'INFO') {
                try {
                    const consoleMethod = level === 'ERROR' ? 'error' :
                        level === 'WARNING' ? 'warn' : 'log';
                    console[consoleMethod](`[OCR-FALLBACK] ${message}`);
                } catch (e) {
                    // Ultimate fallback - just use console.log
                    console.log(`[OCR-ULTIMATE] ${message}`);
                }
            },
            updateStatus: function () {
                try {
                    // This might fail but that's ok
                } catch (e) { }
            },
            updateLoadingDetails: function () {
                try {
                    // This might fail but that's ok
                } catch (e) { }
            },
            startTimer: function (label) {
                return performance.now();
            },
            endTimer: function (label, startTime) {
                return performance.now() - startTime;
            }
        };

        return false;
    }
}

// Initialize immediately when script loads (not waiting for DOMContentLoaded)
// This ensures debug console is available as early as possible
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initializeDebugConsole);
} else {
    // DOM is already ready, initialize immediately
    initializeDebugConsole();
}