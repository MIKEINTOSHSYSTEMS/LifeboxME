/**
 * File upload handling with drag & drop
 */

class FileUploadHandler {
    constructor() {
        this.dropZone = document.getElementById('dropZone');
        this.fileInput = document.getElementById('imageFile');
        this.previewImage = document.getElementById('previewImage');
        this.previewContainer = document.querySelector('.preview-container');

        this.init();
    }

    init() {
        this.bindEvents();
    }

    bindEvents() {
        if (this.dropZone && this.fileInput) {
            // Click to browse
            this.dropZone.addEventListener('click', () => {
                this.fileInput.click();
            });

            // Drag and drop events
            this.dropZone.addEventListener('dragover', (e) => this.handleDragOver(e));
            this.dropZone.addEventListener('dragleave', (e) => this.handleDragLeave(e));
            this.dropZone.addEventListener('drop', (e) => this.handleDrop(e));

            // File input change
            this.fileInput.addEventListener('change', (e) => this.handleFileSelect(e));
        }
    }

    handleDragOver(e) {
        e.preventDefault();
        e.stopPropagation();
        this.dropZone.classList.add('dragover');
        this.dropZone.style.borderColor = 'var(--primary-color)';
        this.dropZone.style.backgroundColor = 'var(--primary-color)';
        this.dropZone.style.color = 'white';
    }

    handleDragLeave(e) {
        e.preventDefault();
        e.stopPropagation();

        // Only remove styles if not dragging over child elements
        if (!this.dropZone.contains(e.relatedTarget)) {
            this.resetDropZoneStyles();
        }
    }

    handleDrop(e) {
        e.preventDefault();
        e.stopPropagation();
        this.resetDropZoneStyles();

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

        // Update upload area text
        this.updateUploadArea(file.name);
    }

    validateFile(file) {
        const maxSize = 10 * 1024 * 1024; // 10MB
        const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];

        // Check file type
        if (!allowedTypes.includes(file.type)) {
            this.showError('Please select a JPG, JPEG, or PNG image file.');
            return false;
        }

        // Check file size
        if (file.size > maxSize) {
            this.showError('File size must be less than 10MB.');
            return false;
        }

        return true;
    }

    showPreview(file) {
        const reader = new FileReader();

        reader.onload = (e) => {
            if (this.previewImage) {
                // Update existing image
                this.previewImage.src = e.target.result;
                this.previewImage.style.display = 'block';
            } else {
                // Create new image
                const img = document.createElement('img');
                img.id = 'previewImage';
                img.className = 'preview-image';
                img.src = e.target.result;
                img.alt = 'Uploaded image preview';

                // Clear placeholder and add image
                this.previewContainer.innerHTML = '';
                this.previewContainer.appendChild(img);
                this.previewImage = img;
            }

            // Remove placeholder styles
            const placeholder = this.previewContainer.querySelector('.preview-placeholder');
            if (placeholder) {
                placeholder.remove();
            }
        };

        reader.onerror = () => {
            this.showError('Failed to read the image file.');
        };

        reader.readAsDataURL(file);
    }

    updateUploadArea(filename) {
        const placeholder = this.dropZone.querySelector('.upload-placeholder');
        if (placeholder) {
            placeholder.innerHTML = `
                <span class="upload-icon">✅</span>
                <p><strong>${this.truncateFilename(filename)}</strong></p>
                <p class="upload-hint">Click or drag to change file</p>
            `;
        }
    }

    resetDropZoneStyles() {
        this.dropZone.classList.remove('dragover');
        this.dropZone.style.borderColor = '';
        this.dropZone.style.backgroundColor = '';
        this.dropZone.style.color = '';
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

    showError(message) {
        // Use the main app's toast system if available
        if (window.ocrApp) {
            window.ocrApp.showToast(message, 'error');
        } else {
            // Fallback alert
            alert('Error: ' + message);
        }
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new FileUploadHandler();
});