// Global variables
let currentFetch = null;
let eventSource = null;
let isFetching = false;

// Show modal
function showModal(modalId) {
    document.getElementById(modalId).classList.add('active');
    document.body.style.overflow = 'hidden';
}

// Hide modal
function hideModal(modalId) {
    document.getElementById(modalId).classList.remove('active');
    document.body.style.overflow = '';
}

// Switch tabs
function switchTab(tabId) {
    // Hide all tabs
    document.querySelectorAll('.tab-content').forEach(tab => {
        tab.classList.remove('active');
    });

    // Show selected tab
    document.getElementById(tabId).classList.add('active');

    // Update tab buttons
    const parent = document.getElementById(tabId).closest('.modal-body');
    parent.querySelectorAll('.tab').forEach(tab => {
        tab.classList.remove('active');
    });
    parent.querySelector(`.tab[onclick="switchTab('${tabId}')"]`).classList.add('active');
}

// Refresh statistics
function refreshStats() {
    showAlert('info', 'Refreshing statistics...', 'courses-status');

    fetch('', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'action=get_stats'
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Update courses stats
                document.getElementById('courses-count').textContent = data.stats.lbln_courses.count;
                document.getElementById('courses-last').textContent = data.stats.lbln_courses.last_fetch
                    ? new Date(data.stats.lbln_courses.last_fetch).toLocaleString()
                    : 'Never';

                // Update analytics stats
                document.getElementById('analytics-count').textContent = data.stats.lbln_course_analytics.count;
                document.getElementById('analytics-last').textContent = data.stats.lbln_course_analytics.last_fetch
                    ? new Date(data.stats.lbln_course_analytics.last_fetch).toLocaleString()
                    : 'Never';

                // Update users stats
                document.getElementById('users-count').textContent = data.stats.lbln_course_users.count;
                document.getElementById('users-last').textContent = data.stats.lbln_course_users.last_fetch
                    ? new Date(data.stats.lbln_course_users.last_fetch).toLocaleString()
                    : 'Never';

                showAlert('success', 'Statistics refreshed successfully!', 'courses-status');
            } else {
                showAlert('error', 'Failed to refresh statistics: ' + data.error, 'courses-status');
            }
        })
        .catch(error => {
            showAlert('error', 'Error refreshing statistics: ' + error.message, 'courses-status');
        });
}

// Start fetch operation
function startFetch(type) {
    if (isFetching) {
        showAlert('warning', 'Another fetch operation is already in progress.', type + '-status');
        return;
    }

    isFetching = true;
    const modalId = type + '-modal';
    const logId = type + '-fetch-log';

    showModal(modalId);
    document.getElementById(logId).innerHTML = '<div class="log-line">Starting fetch operation...</div>';

    fetch('', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'action=fetch_' + type
    })
        .then(response => response.json())
        .then(data => {
            const logDiv = document.getElementById(logId);

            if (data.success) {
                let message = `${type.charAt(0).toUpperCase() + type.slice(1)} fetch completed! `;

                if (type === 'courses') {
                    message += `Total: ${data.total}, Inserted: ${data.inserted}, Updated: ${data.updated}, Skipped: ${data.skipped}`;
                } else if (type === 'analytics') {
                    message += `Courses processed: ${data.total}, Inserted: ${data.inserted}, Skipped: ${data.skipped}`;
                } else if (type === 'users') {
                    message += `Courses processed: ${data.courses_processed}, Total users: ${data.total_users}, Inserted: ${data.inserted}, Updated: ${data.updated}, Skipped: ${data.skipped}`;
                }

                logDiv.innerHTML += `<div class="log-line success">${message}</div>`;
                showAlert('success', message, type + '-status');

                // Update statistics
                refreshStats();
            } else {
                logDiv.innerHTML += `<div class="log-line error">Error: ${data.error}</div>`;
                showAlert('error', 'Fetch failed: ' + data.error, type + '-status');
            }

            if (data.errors && data.errors.length > 0) {
                logDiv.innerHTML += `<div class="log-line warning">Errors (${data.errors.length}):</div>`;
                data.errors.forEach(error => {
                    logDiv.innerHTML += `<div class="log-line warning">- ${error}</div>`;
                });
            }

            logDiv.scrollTop = logDiv.scrollHeight;
        })
        .catch(error => {
            const logDiv = document.getElementById(logId);
            logDiv.innerHTML += `<div class="log-line error">Network error: ${error.message}</div>`;
            showAlert('error', 'Network error: ' + error.message, type + '-status');
            logDiv.scrollTop = logDiv.scrollHeight;
        })
        .finally(() => {
            isFetching = false;
        });
}

// Start fetch all operation
function startFetchAll() {
    if (isFetching) {
        alert('Another fetch operation is already in progress.');
        return;
    }

    isFetching = true;
    const progressBar = document.getElementById('fetch-all-progress');
    const progressPercent = document.getElementById('fetch-all-percent');
    const progressStep = document.getElementById('fetch-all-step');
    const logDiv = document.getElementById('fetch-all-log');

    progressBar.style.width = '0%';
    progressPercent.textContent = '0%';
    progressStep.textContent = 'Not started';
    logDiv.innerHTML = '<div class="log-line">Starting fetch all operation...</div>';

    // Define the steps
    const steps = [
        { name: 'courses', label: 'Fetching Courses', percent: 33 },
        { name: 'analytics', label: 'Fetching Analytics', percent: 66 },
        { name: 'users', label: 'Fetching Users', percent: 100 }
    ];

    let currentStep = 0;

    function executeStep(stepIndex) {
        if (stepIndex >= steps.length) {
            // All steps completed
            progressBar.style.width = '100%';
            progressPercent.textContent = '100%';
            progressStep.textContent = 'All steps completed';
            logDiv.innerHTML += '<div class="log-line success">All fetch operations completed successfully!</div>';
            logDiv.scrollTop = logDiv.scrollHeight;
            isFetching = false;

            // Update statistics
            refreshStats();
            return;
        }

        const step = steps[stepIndex];
        progressStep.textContent = step.label;
        logDiv.innerHTML += `<div class="log-line info">${step.label}...</div>`;
        logDiv.scrollTop = logDiv.scrollHeight;

        fetch('', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'action=fetch_' + step.name
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    progressBar.style.width = step.percent + '%';
                    progressPercent.textContent = step.percent + '%';

                    let message = `${step.label} completed: `;
                    if (step.name === 'courses') {
                        message += `${data.total} courses processed (${data.inserted} inserted, ${data.updated} updated)`;
                    } else if (step.name === 'analytics') {
                        message += `${data.total} analytics records inserted`;
                    } else if (step.name === 'users') {
                        message += `${data.courses_processed} courses, ${data.total_users} users processed`;
                    }

                    logDiv.innerHTML += `<div class="log-line success">${message}</div>`;

                    if (data.errors && data.errors.length > 0) {
                        logDiv.innerHTML += `<div class="log-line warning">Errors (${data.errors.length}):</div>`;
                        data.errors.forEach(error => {
                            logDiv.innerHTML += `<div class="log-line warning">- ${error}</div>`;
                        });
                    }

                    logDiv.scrollTop = logDiv.scrollHeight;

                    // Execute next step
                    setTimeout(() => executeStep(stepIndex + 1), 1000);
                } else {
                    logDiv.innerHTML += `<div class="log-line error">${step.label} failed: ${data.error}</div>`;
                    logDiv.scrollTop = logDiv.scrollHeight;
                    isFetching = false;
                }
            })
            .catch(error => {
                logDiv.innerHTML += `<div class="log-line error">${step.label} network error: ${error.message}</div>`;
                logDiv.scrollTop = logDiv.scrollHeight;
                isFetching = false;
            });
    }

    // Start with first step
    executeStep(0);
}

// Clear table data
function clearTable(tableName) {
    if (!confirm(`Are you sure you want to clear all data from ${tableName}? This action cannot be undone.`)) {
        return;
    }

    const tableLabel = tableName.replace('lbln_', '').replace(/_/g, ' ');
    showAlert('warning', `Clearing ${tableLabel}...`, 'courses-status');

    fetch('', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'action=clear_table&table=' + tableName
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showAlert('success', data.message, 'courses-status');
                refreshStats();
            } else {
                showAlert('error', 'Failed to clear table: ' + data.error, 'courses-status');
            }
        })
        .catch(error => {
            showAlert('error', 'Error clearing table: ' + error.message, 'courses-status');
        });
}

// Preview table data
function previewTable(tableName) {
    const modalId = tableName.replace('lbln_', '') + '-modal';
    showModal(modalId);
    switchTab(tableName.replace('lbln_', '') + '-preview');
    loadPreview(tableName, tableName.replace('lbln_', '') + '-preview-data');
}

// Load preview data
function loadPreview(tableName, containerId) {
    const container = document.getElementById(containerId);
    container.innerHTML = '<p>Loading data...</p>';

    fetch('', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'action=preview_data&table=' + tableName + '&limit=10'
    })
        .then(response => response.json())
        .then(data => {
            if (data.success && data.data.length > 0) {
                // Create table
                let html = '<table class="preview-table">';

                // Headers
                html += '<tr>';
                Object.keys(data.data[0]).forEach(key => {
                    html += `<th>${key}</th>`;
                });
                html += '</tr>';

                // Rows
                data.data.forEach(row => {
                    html += '<tr>';
                    Object.values(row).forEach(value => {
                        if (value === null || value === undefined) {
                            html += '<td><em>null</em></td>';
                        } else if (typeof value === 'object') {
                            html += '<td><code>JSON</code></td>';
                        } else if (typeof value === 'boolean') {
                            html += `<td>${value ? '✓' : '✗'}</td>`;
                        } else {
                            html += `<td>${String(value).substring(0, 50)}${String(value).length > 50 ? '...' : ''}</td>`;
                        }
                    });
                    html += '</tr>';
                });

                html += '</table>';
                container.innerHTML = html;
            } else if (data.success) {
                container.innerHTML = '<p>No data found in the table.</p>';
            } else {
                container.innerHTML = `<p class="error">Error: ${data.error}</p>`;
            }
        })
        .catch(error => {
            container.innerHTML = `<p class="error">Error loading data: ${error.message}</p>`;
        });
}

// Load all logs
function loadAllLogs() {
    const container = document.getElementById('all-logs');
    container.innerHTML = '<p>Loading logs...</p>';

    fetch('', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'action=get_logs&limit=50'
    })
        .then(response => response.json())
        .then(data => {
            if (data.success && data.logs.length > 0) {
                let html = '';
                data.logs.forEach(log => {
                    html += `<div class="log-entry ${log.status}">
                            <div class="log-time">
                                ${new Date(log.start_time).toLocaleString()}
                                ${log.end_time ? `(Duration: ${log.duration})` : ''}
                            </div>
                            <div class="log-message">
                                <strong>${log.operation_type}</strong> - 
                                ${log.table_name}: 
                                ${log.message || 'Completed'}
                                ${log.items_processed > 0 ? `(Processed: ${log.items_processed}, Inserted: ${log.items_inserted}, Updated: ${log.items_updated})` : ''}
                            </div>
                        </div>`;
                });
                container.innerHTML = html;
            } else if (data.success) {
                container.innerHTML = '<div class="log-entry info"><div class="log-message">No logs found.</div></div>';
            } else {
                container.innerHTML = `<div class="log-entry error"><div class="log-message">Error: ${data.error}</div></div>`;
            }
        })
        .catch(error => {
            container.innerHTML = `<div class="log-entry error"><div class="log-message">Error loading logs: ${error.message}</div></div>`;
        });
}

// Show alert
function showAlert(type, message, containerId = null) {
    const alertClass = {
        'success': 'alert-success',
        'error': 'alert-error',
        'warning': 'alert-warning',
        'info': 'alert-info'
    }[type] || 'alert-info';

    const alertHtml = `<div class="alert ${alertClass}">${message}</div>`;

    if (containerId) {
        const container = document.getElementById(containerId);
        if (container) {
            container.innerHTML = alertHtml;

            // Auto-remove after 5 seconds
            setTimeout(() => {
                if (container.innerHTML === alertHtml) {
                    container.innerHTML = '';
                }
            }, 5000);
        }
    }

    return alertHtml;
}

// Initialize
document.addEventListener('DOMContentLoaded', function () {
    // Close modals when clicking outside
    document.querySelectorAll('.modal').forEach(modal => {
        modal.addEventListener('click', function (e) {
            if (e.target === this) {
                hideModal(this.id);
            }
        });
    });

    // Close modals with Escape key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            document.querySelectorAll('.modal.active').forEach(modal => {
                hideModal(modal.id);
            });
        }
    });

    // Load all logs when logs modal is opened
    document.getElementById('logs-modal').addEventListener('click', function (e) {
        if (e.target === this) {
            loadAllLogs();
        }
    });
});