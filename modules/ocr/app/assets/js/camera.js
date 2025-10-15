/**
 * Camera capture functionality with debugging
 */

class CameraHandler {
    constructor() {
        this.video = document.getElementById('cameraPreview');
        this.canvas = document.getElementById('cameraCanvas');
        this.startButton = document.getElementById('startCamera');
        this.captureButton = document.getElementById('captureImage');
        this.cameraForm = document.getElementById('cameraForm');
        this.cameraImageData = document.getElementById('cameraImageData');
        this.cameraLanguage = document.getElementById('cameraLanguage');
        this.cameraPlaceholder = document.getElementById('cameraPlaceholder');

        this.stream = null;
        this.isCameraActive = false;

        this.init();
    }

    init() {
        this.bindEvents();
        this.checkCameraSupport();
    }

    bindEvents() {
        if (this.startButton) {
            this.startButton.addEventListener('click', () => this.toggleCamera());
        }

        if (this.captureButton) {
            this.captureButton.addEventListener('click', () => this.captureImage());
        }

        // Stop camera when leaving page
        window.addEventListener('beforeunload', () => this.stopCamera());

        // Stop camera when form submits
        const forms = document.querySelectorAll('form');
        forms.forEach(form => {
            form.addEventListener('submit', () => this.stopCamera());
        });
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

            if (window.debugConsole) {
                window.debugConsole.log(`Found ${videoDevices.length} camera(s)`, 'INFO');
            }
        } catch (error) {
            console.error('Camera enumeration failed:', error);
            this.disableCamera('Unable to access camera. Please check permissions.');
            CameraEvents.error(error.message);
        }
    }

    disableCamera(message) {
        if (this.startButton) {
            this.startButton.disabled = true;
            this.startButton.innerHTML = '<span class="btn-icon">❌</span>Camera Unavailable';
        }

        if (this.captureButton) {
            this.captureButton.disabled = true;
        }

        this.showCameraMessage(message);
        CameraEvents.error(message);
    }

    showCameraMessage(message) {
        if (window.debugConsole) {
            window.debugConsole.log(message, 'WARNING');
        }
    }

    async toggleCamera() {
        if (this.isCameraActive) {
            await this.stopCamera();
        } else {
            await this.startCamera();
        }
    }

    async startCamera() {
        try {
            CameraEvents.start();

            if (window.debugConsole) {
                window.debugConsole.log('Starting camera...', 'INFO');
            }

            this.stream = await navigator.mediaDevices.getUserMedia({
                video: {
                    width: { ideal: 1280 },
                    height: { ideal: 720 },
                    facingMode: 'environment'
                },
                audio: false
            });

            this.video.srcObject = this.stream;
            this.isCameraActive = true;

            // Update UI
            this.startButton.innerHTML = '<span class="btn-icon">📷</span>Stop Camera';
            this.captureButton.disabled = false;
            this.video.style.display = 'block';

            // Hide placeholder
            if (this.cameraPlaceholder) {
                this.cameraPlaceholder.style.display = 'none';
            }

            // Hide canvas
            this.canvas.style.display = 'none';

            await this.video.play();

            if (window.debugConsole) {
                window.debugConsole.log('Camera started successfully', 'SUCCESS');
            }

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
            this.startButton.innerHTML = '<span class="btn-icon">📷</span>Start Camera';
        }

        if (this.captureButton) {
            this.captureButton.disabled = true;
        }

        this.video.style.display = 'none';
        this.canvas.style.display = 'none';

        // Show placeholder
        if (this.cameraPlaceholder) {
            this.cameraPlaceholder.style.display = 'block';
        }

        if (window.debugConsole) {
            window.debugConsole.log('Camera stopped', 'INFO');
        }
    }

    captureImage() {
        if (!this.isCameraActive || !this.stream) {
            this.showToast('Camera is not active', 'error');
            return;
        }

        try {
            if (window.debugConsole) {
                window.debugConsole.log('Capturing image from camera...', 'INFO');
            }

            const context = this.canvas.getContext('2d');

            // Set canvas dimensions to match video
            this.canvas.width = this.video.videoWidth;
            this.canvas.height = this.video.videoHeight;

            // Draw current video frame to canvas
            context.drawImage(this.video, 0, 0, this.canvas.width, this.canvas.height);

            // Show canvas, hide video
            this.video.style.display = 'none';
            this.canvas.style.display = 'block';

            // Convert to data URL and set in form
            const imageData = this.canvas.toDataURL('image/png');
            this.cameraImageData.value = imageData;

            // Copy language from main form
            const mainLanguage = document.getElementById('language');
            if (mainLanguage && this.cameraLanguage) {
                this.cameraLanguage.value = mainLanguage.value;
            }

            CameraEvents.capture();

            if (window.debugConsole) {
                window.debugConsole.log('Image captured successfully', 'SUCCESS');
                window.debugConsole.log('Image data size: ' + Math.round(imageData.length / 1024) + 'KB', 'INFO');
            }

            // Auto-submit after short delay
            setTimeout(() => {
                this.submitCameraForm();
            }, 500);

        } catch (error) {
            console.error('Image capture failed:', error);
            this.showToast('Failed to capture image', 'error');
            CameraEvents.error(error.message);
        }
    }

    submitCameraForm() {
        if (this.cameraForm) {
            if (window.debugConsole) {
                window.debugConsole.log('Submitting camera form for OCR processing...', 'INFO');
            }

            this.showToast('Processing captured image...', 'info');
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
        if (window.ocrApp) {
            window.ocrApp.showToast(message, type);
        } else {
            alert(message);
        }
    }

    destroy() {
        this.stopCamera();
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    window.cameraHandler = new CameraHandler();
});