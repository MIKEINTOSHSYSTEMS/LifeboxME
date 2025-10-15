/**
 * Enhanced Camera capture functionality with modern features
 */

class CameraHandler {
    constructor() {
        this.video = document.getElementById('cameraPreview');
        this.canvas = document.getElementById('cameraCanvas');
        this.startButton = document.getElementById('startCamera');
        this.captureButton = document.getElementById('captureImage');
        this.stopButton = document.getElementById('stopCamera');
        this.cameraForm = document.getElementById('cameraForm');
        this.cameraImageData = document.getElementById('cameraImageData');
        this.cameraLanguage = document.getElementById('cameraLanguage');
        this.cameraPlaceholder = document.getElementById('cameraPlaceholder');
        this.cameraWrapper = document.querySelector('.camera-wrapper');

        this.stream = null;
        this.isCameraActive = false;
        this.facingMode = 'environment'; // Prefer rear camera

        this.init();
    }

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

    init() {
        this.bindEvents();
        this.checkCameraSupport();
    }

    bindEvents() {
        try {
            if (this.startButton) {
                this.startButton.addEventListener('click', () => this.startCamera());
            }

            if (this.captureButton) {
                this.captureButton.addEventListener('click', () => this.captureImage());
            }

            if (this.stopButton) {
                this.stopButton.addEventListener('click', () => this.stopCamera());
            }

            // Stop camera when leaving page
            window.addEventListener('beforeunload', () => this.stopCamera());

            // Handle page visibility changes
            document.addEventListener('visibilitychange', () => {
                if (document.hidden && this.isCameraActive) {
                    this.stopCamera();
                }
            });
        } catch (error) {
            console.error('Error binding camera events:', error);
        }
    }

    async checkCameraSupport() {
        if (!navigator.mediaDevices || !navigator.mediaDevices.getUserMedia) {
            this.disableCamera('Camera access is not supported in your browser.');
            return;
        }

        try {
            const devices = await navigator.mediaDevices.enumerateDevices();
            const videoDevices = devices.filter(device => device.kind === 'videoinput');

            if (videoDevices.length === 0) {
                this.disableCamera('No camera found on your device.');
                return;
            }

            this.safeLog(`Found ${videoDevices.length} camera(s)`, 'INFO');
        } catch (error) {
            console.error('Camera enumeration failed:', error);
            this.disableCamera('Unable to access camera. Please check permissions.');
            CameraEvents.error(error.message);
        }
    }

    disableCamera(message) {
        if (this.startButton) {
            this.startButton.disabled = true;
            this.startButton.innerHTML = '<span class="btn-icon"><i class="fas fa-video-slash"></i></span>Camera Unavailable';
        }

        if (this.captureButton) {
            this.captureButton.disabled = true;
        }

        this.showCameraMessage(message);
        CameraEvents.error(message);

        // Update placeholder with error state
        if (this.cameraPlaceholder) {
            this.cameraPlaceholder.innerHTML = `
                <div class="camera-icon">
                    <i class="fas fa-video-slash"></i>
                </div>
                <h3>Camera Unavailable</h3>
                <p>${message}</p>
            `;
        }
    }

    showCameraMessage(message) {
        this.safeLog(message, 'WARNING');
    }

    async startCamera() {
        if (this.isCameraActive) {
            return;
        }

        try {
            CameraEvents.start();

            this.safeLog('Starting camera...', 'INFO');

            this.stream = await navigator.mediaDevices.getUserMedia({
                video: {
                    width: { ideal: 1920 },
                    height: { ideal: 1080 },
                    facingMode: this.facingMode
                },
                audio: false
            });

            this.video.srcObject = this.stream;
            this.isCameraActive = true;

            // Update UI
            this.startButton.style.display = 'none';
            this.captureButton.disabled = false;
            this.stopButton.style.display = 'inline-flex';
            this.video.style.display = 'block';

            // Hide placeholder
            if (this.cameraPlaceholder) {
                this.cameraPlaceholder.style.display = 'none';
            }

            // Hide canvas
            this.canvas.style.display = 'none';

            // Add camera frame overlay
            if (this.cameraWrapper) {
                this.cameraWrapper.classList.add('camera-active');
            }

            await this.video.play();

            this.safeLog('Camera started successfully', 'SUCCESS');

        } catch (error) {
            console.error('Camera access failed:', error);
            this.handleCameraError(error);
            CameraEvents.error(error.message);
        }
    }

    async stopCamera() {
        if (this.stream) {
            this.stream.getTracks().forEach(track => track.stop());
            this.stream = null;
        }

        this.isCameraActive = false;

        // Update UI
        if (this.startButton) {
            this.startButton.style.display = 'inline-flex';
        }

        if (this.captureButton) {
            this.captureButton.disabled = true;
        }

        if (this.stopButton) {
            this.stopButton.style.display = 'none';
        }

        this.video.style.display = 'none';
        this.canvas.style.display = 'none';

        // Remove camera frame overlay
        if (this.cameraWrapper) {
            this.cameraWrapper.classList.remove('camera-active');
        }

        // Show placeholder
        if (this.cameraPlaceholder) {
            this.cameraPlaceholder.style.display = 'block';
        }

        this.safeLog('Camera stopped', 'INFO');
    }

    captureImage() {
        if (!this.isCameraActive || !this.stream) {
            this.showToast('Camera is not active', 'error');
            return;
        }

        try {
            this.safeLog('Capturing image from camera...', 'INFO');

            const context = this.canvas.getContext('2d');

            // Set canvas dimensions to match video
            this.canvas.width = this.video.videoWidth;
            this.canvas.height = this.video.videoHeight;

            // Draw current video frame to canvas
            context.drawImage(this.video, 0, 0, this.canvas.width, this.canvas.height);

            // Show canvas, hide video temporarily for feedback
            this.video.style.display = 'none';
            this.canvas.style.display = 'block';

            // Add capture animation
            this.cameraWrapper.classList.add('capture-flash');
            setTimeout(() => {
                this.cameraWrapper.classList.remove('capture-flash');
            }, 300);

            // Convert to data URL and set in form
            const imageData = this.canvas.toDataURL('image/jpeg', 0.8);
            this.cameraImageData.value = imageData;

            // Copy language from main form
            const mainLanguage = document.getElementById('language');
            if (mainLanguage && this.cameraLanguage) {
                this.cameraLanguage.value = mainLanguage.value;
            }

            // Update main preview
            this.updateMainPreview(imageData);

            CameraEvents.capture();

            this.safeLog('Image captured successfully', 'SUCCESS');
            this.safeLog('Image data size: ' + Math.round(imageData.length / 1024) + 'KB', 'INFO');

            // Auto-submit after short delay
            setTimeout(() => {
                this.submitCameraForm();
            }, 800);

        } catch (error) {
            console.error('Image capture failed:', error);
            this.showToast('Failed to capture image', 'error');
            CameraEvents.error(error.message);
        }
    }

    updateMainPreview(imageData) {
        const previewImage = document.getElementById('previewImage');
        const previewPlaceholder = document.querySelector('.preview-placeholder');

        if (previewImage && previewPlaceholder) {
            previewImage.src = imageData;
            previewPlaceholder.style.display = 'none';
            previewImage.style.display = 'block';

            // Reset zoom if ocrApp exists
            if (window.ocrApp && window.ocrApp.resetZoom) {
                window.ocrApp.resetZoom();
            }
        }
    }

    submitCameraForm() {
        if (this.cameraForm) {
            this.safeLog('Submitting camera form for OCR processing...', 'INFO');

            this.showToast('Processing captured image...', 'info');

            // Show loading overlay
            if (window.ocrApp && window.ocrApp.showLoading) {
                window.ocrApp.showLoading();
            }

            this.cameraForm.submit();
        }
    }

    handleCameraError(error) {
        let message = 'Camera access failed. ';

        switch (error.name) {
            case 'NotAllowedError':
                message += 'Please allow camera access in your browser settings.';
                break;
            case 'NotFoundError':
                message += 'No camera found on your device.';
                break;
            case 'NotSupportedError':
                message += 'Camera access is not supported in your browser.';
                break;
            case 'NotReadableError':
                message += 'Camera is already in use by another application.';
                break;
            default:
                message += 'Please try again or use file upload instead.';
        }

        this.disableCamera(message);
        this.showToast(message, 'error');
    }

    showToast(message, type = 'info') {
        if (window.ocrApp && window.ocrApp.showToast) {
            window.ocrApp.showToast(message, type);
        } else {
            // Fallback to simple alert
            alert(message);
        }
    }

    // Switch between front and rear cameras
    async switchCamera() {
        if (!this.isCameraActive) {
            return;
        }

        this.stopCamera();
        this.facingMode = this.facingMode === 'user' ? 'environment' : 'user';

        // Small delay before starting new camera
        setTimeout(() => {
            this.startCamera();
        }, 500);
    }

    destroy() {
        this.stopCamera();
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    try {
        window.cameraHandler = new CameraHandler();
    } catch (error) {
        console.error('Failed to initialize camera handler:', error);
    }
});

// Add CSS for camera animations
const cameraStyles = `
    .camera-wrapper {
        position: relative;
        transition: all 0.3s ease;
    }
    
    .camera-wrapper.camera-active {
        border: 2px solid var(--primary-color);
    }
    
    .camera-wrapper.capture-flash {
        animation: flash 0.3s ease;
    }
    
    @keyframes flash {
        0% { opacity: 1; }
        50% { opacity: 0.7; }
        100% { opacity: 1; }
    }
    
    .camera-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        pointer-events: none;
        display: none;
    }
    
    .camera-wrapper.camera-active .camera-overlay {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .camera-frame {
        width: 80%;
        height: 60%;
        border: 2px solid var(--primary-color);
        border-radius: 12px;
        box-shadow: 0 0 0 9999px rgba(0, 0, 0, 0.3);
    }
`;

// Inject styles
const styleSheet = document.createElement('style');
styleSheet.textContent = cameraStyles;
document.head.appendChild(styleSheet);