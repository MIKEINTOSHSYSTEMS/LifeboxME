/**
 * Enhanced File upload handling with drag & drop and preview
 */

class FileUploadHandler {
    constructor() {
        this.dropZone = document.getElementById('dropZone');
        this.fileInput = document.getElementById('imageFile');
        this.previewImage = document.getElementById('previewImage');
        this.previewContainer = document.querySelector('.preview-container');
        this.uploadPreview = document.getElementById('uploadPreview');
        this.uploadPlaceholder = document.querySelector('.upload-placeholder');

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
        this.initDragAndDrop();
    }

    bindEvents() {
        if (this.dropZone && this.fileInput) {
            // Click to browse
            this.dropZone.addEventListener('click', (e) => {
                if (!e.target.closest('.preview-remove')) {
                    this.fileInput.click();
                }
            });

            // File input change
            this.fileInput.addEventListener('change', (e) => this.handleFileSelect(e));
        }
    }

    initDragAndDrop() {
        if (!this.dropZone) return;

        // Prevent default drag behaviors
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            this.dropZone.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        // Highlight drop zone
        ['dragenter', 'dragover'].forEach(eventName => {
            this.dropZone.addEventListener(eventName, () => this.highlightDropZone(), false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            this.dropZone.addEventListener(eventName, () => this.unhighlightDropZone(), false);
        });

        // Handle drop
        this.dropZone.addEventListener('drop', (e) => this.handleDrop(e), false);
    }

    handleDragOver(e) {
        e.preventDefault();
        e.stopPropagation();
        this.highlightDropZone();
    }

    handleDragLeave(e) {
        e.preventDefault();
        e.stopPropagation();

        // Only remove styles if not dragging over child elements
        if (!this.dropZone.contains(e.relatedTarget)) {
            this.unhighlightDropZone();
        }
    }

    handleDrop(e) {
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            this.processFile(files[0]);
        }
    }

    handleFileSelect(e) {
        const files = e.target.files;
        if (files.length > 0) {
            this.processFile(files[0]);
        }
    }

    processFile(file) {
        // Validate file
        if (!this.validateFile(file)) {
            return;
        }

        // Update file input (for form submission)
        const dataTransfer = new DataTransfer();
        dataTransfer.items.add(file);
        this.fileInput.files = dataTransfer.files;

        // Show preview
        this.showPreview(file);

        // Log file info
        this.safeLog(`File selected: ${file.name} (${this.formatFileSize(file.size)})`, 'SUCCESS');
        UploadEvents.success(file.name);
    }

    validateFile(file) {
        const maxSize = 10 * 1024 * 1024; // 10MB
        const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];

        // Check file type
        if (!allowedTypes.includes(file.type)) {
            this.showError('Please select a JPG, JPEG, or PNG image file.');
            UploadEvents.error('Invalid file type');
            return false;
        }

        // Check file size
        if (file.size > maxSize) {
            this.showError('File size must be less than 10MB.');
            UploadEvents.error('File too large');
            return false;
        }

        return true;
    }

    showPreview(file) {
        const reader = new FileReader();

        reader.onload = (e) => {
            // Update upload area preview
            this.updateUploadPreview(file, e.target.result);

            // Update main preview
            this.updateMainPreview(e.target.result);
        };

        reader.onerror = () => {
            this.showError('Failed to read the image file.');
            UploadEvents.error('File read error');
        };

        reader.readAsDataURL(file);
    }

    updateUploadPreview(file, dataUrl) {
        if (this.uploadPreview && this.uploadPlaceholder) {
            const previewThumbnail = this.uploadPreview.querySelector('.preview-thumbnail') || document.createElement('img');
            const previewFileName = this.uploadPreview.querySelector('.file-name') || document.createElement('span');
            const previewFileSize = this.uploadPreview.querySelector('.file-size') || document.createElement('span');

            // Set elements
            previewThumbnail.className = 'preview-thumbnail';
            previewThumbnail.src = dataUrl;

            previewFileName.className = 'file-name';
            previewFileName.textContent = this.truncateFilename(file.name);

            previewFileSize.className = 'file-size';
            previewFileSize.textContent = this.formatFileSize(file.size);

            // Create remove button if it doesn't exist
            let previewRemove = this.uploadPreview.querySelector('.preview-remove');
            if (!previewRemove) {
                previewRemove = document.createElement('button');
                previewRemove.className = 'preview-remove';
                previewRemove.innerHTML = '<i class="fas fa-times"></i>';
                previewRemove.type = 'button';
                previewRemove.addEventListener('click', (e) => {
                    e.stopPropagation();
                    this.clearFileInput();
                });
            }

            // Update preview container
            this.uploadPreview.innerHTML = '';
            this.uploadPreview.appendChild(previewThumbnail);

            const previewInfo = document.createElement('div');
            previewInfo.className = 'preview-info';
            previewInfo.appendChild(previewFileName);
            previewInfo.appendChild(previewFileSize);
            this.uploadPreview.appendChild(previewInfo);
            this.uploadPreview.appendChild(previewRemove);

            // Show preview, hide placeholder
            this.uploadPlaceholder.style.display = 'none';
            this.uploadPreview.style.display = 'flex';
        }
    }

    updateMainPreview(dataUrl) {
        if (this.previewImage) {
            // Update existing image
            this.previewImage.src = dataUrl;
            this.previewImage.style.display = 'block';
        } else {
            // Create new image
            const img = document.createElement('img');
            img.id = 'previewImage';
            img.className = 'preview-image';
            img.src = dataUrl;
            img.alt = 'Uploaded image preview';

            // Clear placeholder and add image
            this.previewContainer.innerHTML = '';
            this.previewContainer.appendChild(img);
            this.previewImage = img;
        }

        // Remove placeholder styles
        const placeholder = this.previewContainer.querySelector('.preview-placeholder');
        if (placeholder) {
            placeholder.style.display = 'none';
        }

        // Reset zoom if ocrApp exists
        if (window.ocrApp && window.ocrApp.resetZoom) {
            window.ocrApp.resetZoom();
        }
    }

    highlightDropZone() {
        if (this.dropZone) {
            this.dropZone.classList.add('dragover');
        }
    }

    unhighlightDropZone() {
        if (this.dropZone) {
            this.dropZone.classList.remove('dragover');
        }
    }

    clearFileInput() {
        if (this.fileInput) {
            this.fileInput.value = '';
        }

        if (this.uploadPreview) {
            this.uploadPreview.style.display = 'none';
        }

        if (this.uploadPlaceholder) {
            this.uploadPlaceholder.style.display = 'block';
        }

        // Clear main preview
        if (this.previewContainer) {
            const previewPlaceholder = this.previewContainer.querySelector('.preview-placeholder');
            const previewImage = this.previewContainer.querySelector('.preview-image');

            if (previewImage) {
                previewImage.style.display = 'none';
            }
            if (previewPlaceholder) {
                previewPlaceholder.style.display = 'flex';
            }
        }

        this.safeLog('File input cleared', 'INFO');
    }

    truncateFilename(filename, maxLength = 30) {
        if (filename.length <= maxLength) {
            return filename;
        }

        const extension = filename.split('.').pop();
        const nameWithoutExt = filename.slice(0, -(extension.length + 1));
        const truncateLength = maxLength - extension.length - 4; // Account for "..." and "."

        return nameWithoutExt.slice(0, truncateLength) + '...' + extension;
    }

    formatFileSize(bytes) {
        if (bytes === 0) return '0 Bytes';

        const k = 1024;
        const sizes = ['Bytes', 'KB', 'MB', 'GB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));

        return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
    }

    showError(message) {
        if (window.ocrApp && window.ocrApp.showToast) {
            window.ocrApp.showToast(message, 'error');
        } else {
            // Fallback alert
            alert('Error: ' + message);
        }
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    try {
        window.uploadHandler = new FileUploadHandler();
    } catch (error) {
        console.error('Failed to initialize upload handler:', error);
    }
});