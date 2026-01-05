// Global variables
let currentEndpoint = '';
let requestHistory = JSON.parse(localStorage.getItem('lifebox_request_history') || '[]');
let darkMode = localStorage.getItem('darkMode') === 'true';
let mobileMenuOpen = false;

// Initialize the application
document.addEventListener('DOMContentLoaded', function () {
    // Initialize theme
    initTheme();

    // Set current year in footer
    document.getElementById('current-year').textContent = new Date().getFullYear();

    // Set up navigation
    document.querySelectorAll('.nav-item').forEach(item => {
        item.addEventListener('click', function (e) {
            e.preventDefault();
            const section = this.getAttribute('data-section');
            showSection(section);
            if (window.innerWidth <= 768) {
                closeMobileMenu();
            }
        });
    });

    // Set base URL
    document.getElementById('config-base-url').value = window.location.href.replace(/\/[^\/]*$/, '/');

    // Load dashboard stats
    loadDashboardStats();

    // Check environment
    checkEnvironment();

    // Setup mobile menu toggle
    setupMobileMenu();

    // Setup theme toggle
    setupThemeToggle();

    // Add keyboard shortcuts help
    setupKeyboardShortcuts();
});

// Initialize theme
function initTheme() {
    const savedTheme = localStorage.getItem('theme') || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
    setTheme(savedTheme);
}

// Set theme
function setTheme(theme) {
    document.documentElement.setAttribute('data-theme', theme);
    darkMode = theme === 'dark';
    localStorage.setItem('theme', theme);
    localStorage.setItem('darkMode', darkMode);

    // Update toggle state
    const toggle = document.getElementById('theme-toggle');
    if (toggle) {
        toggle.checked = darkMode;
    }
}

// Toggle theme
function toggleTheme() {
    const currentTheme = document.documentElement.getAttribute('data-theme');
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
    setTheme(newTheme);
    showToast(`${newTheme.charAt(0).toUpperCase() + newTheme.slice(1)} mode enabled`);
}

// Setup theme toggle
function setupThemeToggle() {
    const toggle = document.getElementById('theme-toggle');
    if (toggle) {
        toggle.checked = darkMode;
        toggle.addEventListener('change', toggleTheme);
    }
}

// Setup mobile menu
function setupMobileMenu() {
    const toggleBtn = document.querySelector('.mobile-menu-toggle');
    if (toggleBtn) {
        toggleBtn.addEventListener('click', toggleMobileMenu);
    }

    // Close menu when clicking outside
    document.addEventListener('click', function (e) {
        const sidebar = document.querySelector('.sidebar');
        const toggleBtn = document.querySelector('.mobile-menu-toggle');

        if (mobileMenuOpen &&
            !sidebar.contains(e.target) &&
            !toggleBtn.contains(e.target)) {
            closeMobileMenu();
        }
    });
}

// Toggle mobile menu
function toggleMobileMenu() {
    const sidebar = document.querySelector('.sidebar');
    mobileMenuOpen = !mobileMenuOpen;

    if (mobileMenuOpen) {
        sidebar.classList.add('mobile-open');
        document.body.style.overflow = 'hidden';
    } else {
        closeMobileMenu();
    }
}

// Close mobile menu
function closeMobileMenu() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.remove('mobile-open');
    mobileMenuOpen = false;
    document.body.style.overflow = '';
}

// Setup keyboard shortcuts
function setupKeyboardShortcuts() {
    document.addEventListener('keydown', function (e) {
        // Ctrl/Cmd + T to toggle theme
        if ((e.ctrlKey || e.metaKey) && e.key === 't') {
            e.preventDefault();
            toggleTheme();
        }

        // Ctrl/Cmd + Enter to submit form
        if ((e.ctrlKey || e.metaKey) && e.key === 'Enter') {
            const activeSection = document.querySelector('.content-section.active');
            if (activeSection) {
                const testButton = activeSection.querySelector('.btn-primary');
                if (testButton) testButton.click();
            }
        }

        // Escape to close modals and mobile menu
        if (e.key === 'Escape') {
            document.querySelectorAll('.modal.active').forEach(modal => {
                modal.classList.remove('active');
            });
            if (mobileMenuOpen) {
                closeMobileMenu();
            }
        }

        // Ctrl/Cmd + H to show history (if you add history section)
        if ((e.ctrlKey || e.metaKey) && e.key === 'h') {
            e.preventDefault();
            showSection('history');
        }

        // Ctrl/Cmd + / to show help
        if ((e.ctrlKey || e.metaKey) && e.key === '/') {
            e.preventDefault();
            showToast('Keyboard shortcuts: Ctrl+T (Theme), Ctrl+Enter (Submit), Esc (Close)', 'info');
        }
    });
}

// Show a specific section
function showSection(sectionId) {
    // Update navigation
    document.querySelectorAll('.nav-item').forEach(item => {
        item.classList.remove('active');
        if (item.getAttribute('data-section') === sectionId) {
            item.classList.add('active');
        }
    });

    // Show section content
    document.querySelectorAll('.content-section').forEach(section => {
        section.classList.remove('active');
    });

    const targetSection = document.getElementById(sectionId);
    if (targetSection) {
        targetSection.classList.add('active');

        // Scroll to top of the section
        targetSection.scrollIntoView({ behavior: 'smooth' });
    }

    // Update page title
    const titles = {
        'dashboard': 'API Testing Dashboard',
        'courses': 'Courses API Testing',
        'users': 'Users API Testing',
        'forms': 'Forms API Testing',
        'assessments': 'Assessments API Testing',
        'history': 'Request History',
        'settings': 'Settings'
    };

    const descriptions = {
        'dashboard': 'Interactive interface to test all Lifebox API endpoints',
        'courses': 'Test and explore the Courses API endpoints',
        'users': 'Test and explore the Users API endpoints',
        'forms': 'Test and explore the Forms API endpoints',
        'assessments': 'Test and explore the Assessments API endpoints',
        'history': 'View your recent API requests and responses',
        'settings': 'Configure your API testing environment'
    };

    document.getElementById('page-title').textContent = titles[sectionId] || 'API Testing';
    document.getElementById('page-description').textContent = descriptions[sectionId] || '';

    // Store last visited section
    localStorage.setItem('lastSection', sectionId);
}

// Test Courses API endpoints
async function testCoursesEndpoint(action) {
    const params = {};

    switch (action) {
        case 'getAllCourses':
            params.access = document.getElementById('courses-access').value;
            params.categories = document.getElementById('courses-categories').value;
            params.single_page = document.getElementById('courses-single-page').checked;
            params.page = document.getElementById('courses-page').value;
            params.max_pages = document.getElementById('courses-max-pages').value || null;
            params.limit = document.getElementById('courses-limit').value || null;
            break;

        case 'getCourse':
            params.id = document.getElementById('course-id').value;
            break;

        case 'getCourseAnalytics':
            params.id = document.getElementById('course-analytics-id').value;
            params.action = 'analytics';
            break;

        case 'getCourseUsers':
            params.id = document.getElementById('course-users-id').value;
            params.action = 'users';
            params.single_page = document.getElementById('course-users-single-page').checked;
            params.page = document.getElementById('course-users-page').value;
            params.max_pages = document.getElementById('course-users-max-pages').value || null;
            break;

        case 'getUnitAnalytics':
            params.id = document.getElementById('unit-course-id').value;
            params.unit_id = document.getElementById('unit-id').value;
            params.action = 'unit_analytics';
            break;
    }

    await makeApiRequest(action, params);
}

// Test Users API endpoints
async function testUsersEndpoint(action) {
    const params = {};

    switch (action) {
        case 'getAllUsers':
            const emailContains = document.getElementById('users-email').value;
            const nameContains = document.getElementById('users-name').value;
            const singlePage = document.getElementById('users-single-page').checked;
            const page = document.getElementById('users-page').value;
            const maxPages = document.getElementById('users-max-pages').value || null;
            const limit = document.getElementById('users-limit').value || null;

            // Only add parameters if they have values
            if (emailContains) params.email_contains = emailContains;
            if (nameContains) params.name_contains = nameContains;

            // Handle boolean parameters
            params.single_page = singlePage;
            if (singlePage && page) {
                params.page = page;
            }

            // Add limits to prevent timeout
            if (limit) {
                params.limit = limit;
            } else if (maxPages) {
                params.max_pages = maxPages;
            } else {
                // Default limit for user searches
                params.limit = 50;
            }
            break;

        case 'getUser':
            const userId = document.getElementById('user-id').value;
            if (userId) params.id = userId;
            break;

        case 'getUserCourses':
            const userCoursesId = document.getElementById('user-courses-id').value;
            if (userCoursesId) {
                params.id = userCoursesId;
                params.action = 'courses';
                params.single_page = document.getElementById('user-courses-single-page').checked;
                params.page = document.getElementById('user-courses-page').value;
                params.max_pages = document.getElementById('user-courses-max-pages').value || null;
            }
            break;

        case 'getUserProgress':
            const userProgressId = document.getElementById('user-progress-id').value;
            if (userProgressId) {
                params.id = userProgressId;
                params.action = 'progress';
                params.single_page = document.getElementById('user-progress-single-page').checked;
                params.page = document.getElementById('user-progress-page').value;
                if (document.getElementById('user-progress-min').value) {
                    params.min_progress = document.getElementById('user-progress-min').value;
                }
                if (document.getElementById('user-progress-status').value) {
                    params.progress_status = document.getElementById('user-progress-status').value;
                }
            }
            break;
    }

    // Validate required parameters
    if ((action === 'getUser' || action === 'getUserCourses' || action === 'getUserProgress') && !params.id) {
        showToast('Please enter a User ID or Email', 'warning');
        return;
    }

    await makeApiRequest(action, params);
}

// Test Forms API endpoints
async function testFormsEndpoint(action) {
    const params = {
        id: document.getElementById('form-id').value
    };

    if (document.getElementById('forms-single-page').checked) {
        params.single_page = true;
        params.page = document.getElementById('forms-page').value;
    }

    if (document.getElementById('forms-items-per-page').value) {
        params.items_per_page = document.getElementById('forms-items-per-page').value;
    }

    if (document.getElementById('forms-user-id').value) {
        params.user_id = document.getElementById('forms-user-id').value;
    }

    if (document.getElementById('forms-email').value) {
        params.email_contains = document.getElementById('forms-email').value;
    }

    await makeApiRequest(action, params);
}

// Test Assessments API endpoints
async function testAssessmentsEndpoint(action) {
    const params = {
        id: document.getElementById('assessment-id').value
    };

    if (document.getElementById('assessments-single-page').checked) {
        params.single_page = true;
        params.page = document.getElementById('assessments-page').value;
    }

    if (document.getElementById('assessments-items-per-page').value) {
        params.items_per_page = document.getElementById('assessments-items-per-page').value;
    }

    if (document.getElementById('assessments-users').value) {
        params.users = document.getElementById('assessments-users').value;
    }

    if (document.getElementById('assessments-passed').value) {
        params.passed = document.getElementById('assessments-passed').value;
    }

    await makeApiRequest(action, params);
}

// Make API request
async function makeApiRequest(action, params) {
    // Show loading state
    document.getElementById('loading').style.display = 'block';
    document.getElementById('response-json').textContent = '';

    // Add to request counter (for analytics)
    incrementRequestCounter();

    try {
        // Add abort controller for timeout
        const controller = new AbortController();
        const timeoutId = setTimeout(() => controller.abort(), 300000); // 60 second timeout

        const response = await fetch('', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams({
                action: action,
                params: JSON.stringify(params)
            }),
            signal: controller.signal
        });

        clearTimeout(timeoutId);

        const data = await response.json();

        // Store in history
        const historyItem = {
            action: action,
            params: params,
            response: data,
            timestamp: new Date().toISOString(),
            duration: Date.now() - performance.now()
        };

        requestHistory.unshift(historyItem);
        if (requestHistory.length > 50) {
            requestHistory = requestHistory.slice(0, 50);
        }
        localStorage.setItem('lifebox_request_history', JSON.stringify(requestHistory));

        // Display response
        displayResponse(data);

        // Update dashboard stats if needed
        if (action === 'getAllCourses' && data.success && data.data) {
            document.getElementById('courses-count').textContent = data.meta?.totalItems || data.data.length || '100+';
        }

        if (action === 'getAllUsers' && data.success && data.data) {
            document.getElementById('users-count').textContent = data.meta?.totalItems || data.data.length || '500+';
        }

    } catch (error) {
        if (error.name === 'AbortError') {
            displayResponse({
                success: false,
                error: 'Request timeout: The operation took too long',
                suggestion: 'Try adding more filters or reducing the number of results',
                timestamp: new Date().toISOString()
            });
            showToast('Request timed out. Try adding filters or limiting results.', 'warning');
        } else {
            displayResponse({
                success: false,
                error: 'Network error: ' + error.message,
                timestamp: new Date().toISOString()
            });
        }
    } finally {
        document.getElementById('loading').style.display = 'none';
    }
}

// Increment request counter
function incrementRequestCounter() {
    let counter = parseInt(localStorage.getItem('request_counter') || '0');
    counter++;
    localStorage.setItem('request_counter', counter.toString());

    // Update stats every 10 requests
    if (counter % 10 === 0) {
        loadDashboardStats();
    }
}

// Display API response
function displayResponse(data) {
    const responseJson = document.getElementById('response-json');
    const responseUrl = document.getElementById('response-url');
    const responseStatus = document.getElementById('response-status');

    // Display URL
    responseUrl.textContent = data.request_url || 'Request URL not available';

    // Display status
    const status = data.http_status || (data.success ? 200 : 400);
    responseStatus.textContent = status;
    responseStatus.className = 'status-badge status-' + status;

    // Format and display JSON with syntax highlighting
    const formattedJson = JSON.stringify(data, null, 2);
    const highlightedJson = syntaxHighlight(formattedJson);
    responseJson.innerHTML = highlightedJson;

    // Scroll to response
    document.querySelector('.response-section').scrollIntoView({
        behavior: 'smooth'
    });

    // Show success/error toast
    if (data.success) {
        showToast('API request successful!', 'success');
    } else {
        showToast(data.error || 'API request failed', 'error');
    }
}

// Syntax highlighting for JSON
function syntaxHighlight(json) {
    json = json.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
    return json.replace(/("(\\u[a-zA-Z0-9]{4}|\\[^u]|[^\\"])*"(\s*:)?|\b(true|false|null)\b|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)/g, function (match) {
        let cls = 'json-number';
        if (/^"/.test(match)) {
            if (/:$/.test(match)) {
                cls = 'json-key';
            } else {
                cls = 'json-string';
            }
        } else if (/true|false/.test(match)) {
            cls = 'json-boolean';
        } else if (/null/.test(match)) {
            cls = 'json-null';
        }
        return '<span class="' + cls + '">' + match + '</span>';
    });
}

// Copy response to clipboard
function copyResponse() {
    const responseText = document.getElementById('response-json').textContent;
    navigator.clipboard.writeText(responseText).then(() => {
        showToast('Response copied to clipboard!');
    });
}

// Clear response
function clearResponse() {
    document.getElementById('response-json').textContent = '';
    document.getElementById('response-url').textContent = 'No request made yet';
    document.getElementById('response-status').textContent = '--';
    document.getElementById('response-status').className = 'status-badge';
    showToast('Response cleared');
}

// Toggle response fullscreen
function toggleResponseFullscreen() {
    const responseSection = document.querySelector('.response-section');
    if (!document.fullscreenElement) {
        responseSection.requestFullscreen().catch(err => {
            console.error(`Error attempting to enable fullscreen: ${err.message}`);
            showToast('Fullscreen mode not supported', 'warning');
        });
    } else {
        document.exitFullscreen();
    }
}

// Show toast notification
function showToast(message, type = 'success') {
    const toast = document.getElementById('toast');
    const toastMessage = document.getElementById('toast-message');

    toastMessage.textContent = message;
    toast.className = `toast ${type}`;
    toast.classList.add('show');

    // Remove any existing timeout
    if (toast.timeoutId) {
        clearTimeout(toast.timeoutId);
    }

    toast.timeoutId = setTimeout(() => {
        toast.classList.remove('show');
    }, 3000);
}

// Fill example data for Courses
function fillCoursesExample(example) {
    switch (example) {
        case 'getAllCourses':
            document.getElementById('courses-access').value = '';
            document.getElementById('courses-categories').value = '';
            document.getElementById('courses-single-page').checked = false;
            document.getElementById('courses-page').value = '1';
            document.getElementById('courses-max-pages').value = '';
            document.getElementById('courses-limit').value = '10';
            showToast('Example filled: Get first 10 courses');
            break;

        case 'getFreeCourses':
            document.getElementById('courses-access').value = 'free';
            document.getElementById('courses-categories').value = '';
            document.getElementById('courses-single-page').checked = false;
            showToast('Example filled: Get all free courses');
            break;

        case 'getCourseAnalytics':
            document.getElementById('course-analytics-id').value = 'oxygen-transport';
            showToast('Example filled: Test course analytics');
            break;

        case 'getCourseUsers':
            document.getElementById('course-users-id').value = 'oxygen-transport';
            document.getElementById('course-users-single-page').checked = true;
            document.getElementById('course-users-page').value = '1';
            showToast('Example filled: Get course users (page 1)');
            break;
    }
}

// Fill example data for Users
function fillUsersExample(example) {
    switch (example) {
        case 'getAllUsers':
            document.getElementById('users-email').value = '';
            document.getElementById('users-name').value = '';
            document.getElementById('users-single-page').checked = true;
            document.getElementById('users-page').value = '1';
            document.getElementById('users-max-pages').value = '';
            document.getElementById('users-limit').value = '20';
            showToast('Example filled: Get first 20 users (single page)');
            break;

        case 'getSingleUser':
            document.getElementById('user-id').value = '6942675c002c836fb30d1c9d';
            showToast('Example filled: Get single user by ID');
            break;

        case 'getUserCourses':
            document.getElementById('user-courses-id').value = '6942675c002c836fb30d1c9d';
            document.getElementById('user-courses-single-page').checked = false;
            showToast('Example filled: Get all courses for user');
            break;

        case 'getUserProgress':
            document.getElementById('user-progress-id').value = '6942675c002c836fb30d1c9d';
            document.getElementById('user-progress-single-page').checked = false;
            document.getElementById('user-progress-min').value = '50';
            document.getElementById('user-progress-status').value = 'in_progress';
            showToast('Example filled: Get user progress with filters');
            break;
    }
}

// Fill example data for Forms
function fillFormsExample(example) {
    if (example === 'getResponses') {
        document.getElementById('form-id').value = '';
        document.getElementById('forms-single-page').checked = true;
        document.getElementById('forms-page').value = '1';
        document.getElementById('forms-items-per-page').value = '20';
        showToast('Please enter a Form ID and adjust filters as needed');
    }
}

// Fill example data for Assessments
function fillAssessmentsExample(example) {
    if (example === 'getResponses') {
        document.getElementById('assessment-id').value = '';
        document.getElementById('assessments-single-page').checked = true;
        document.getElementById('assessments-page').value = '1';
        document.getElementById('assessments-items-per-page').value = '20';
        document.getElementById('assessments-passed').value = 'true';
        showToast('Please enter an Assessment ID and adjust filters as needed');
    }
}

// Reset courses form
function resetCoursesForm() {
    document.getElementById('courses-access').value = '';
    document.getElementById('courses-categories').value = '';
    document.getElementById('courses-single-page').checked = false;
    document.getElementById('courses-page').value = '1';
    document.getElementById('courses-max-pages').value = '';
    document.getElementById('courses-limit').value = '';
    showToast('Form reset');
}

// Check environment configuration
async function checkEnvironment() {
    const envStatus = document.getElementById('env-status');
    envStatus.innerHTML = '<i class="fas fa-sync fa-spin"></i> <span>Checking environment...</span>';

    try {
        // Test each endpoint file
        const endpoints = [
            { file: 'courses.php', name: 'Courses' },
            { file: 'users.php', name: 'Users' },
            { file: 'forms.php', name: 'Forms' },
            { file: 'assessments.php', name: 'Assessments' }
        ];

        let allGood = true;
        let message = '';

        for (const endpoint of endpoints) {
            try {
                const response = await fetch(endpoint.file + '?test=true');
                const data = await response.json();

                // Check for test mode response - handle different formats
                // courses.php returns: {"success": true, "data": {"test": true, ...}}
                // Others return: {"test": true, ...}
                if (data.test || (data.success && data.data && data.data.test)) {
                    message += endpoint.name + ': ✓ ';
                } else {
                    message += endpoint.name + ': ✗ ';
                    allGood = false;
                }
            } catch (error) {
                message += endpoint.name + ': ✗ ';
                allGood = false;
            }
        }

        if (allGood) {
            envStatus.innerHTML = '<i class="fas fa-check-circle"></i> <span>All endpoints ready</span>';
            showToast('Environment check passed! All endpoints are ready.', 'success');
        } else {
            envStatus.innerHTML = '<i class="fas fa-exclamation-triangle error"></i> <span>Some issues detected</span>';
            envStatus.classList.add('error');
            showToast('Some endpoints may have issues. Check the console for details.', 'warning');
        }

    } catch (error) {
        envStatus.innerHTML = '<i class="fas fa-exclamation-circle error"></i> <span>Check failed: ' + error.message + '</span>';
        envStatus.classList.add('error');
        showToast('Environment check failed: ' + error.message, 'error');
    }
}

// Load dashboard statistics
async function loadDashboardStats() {
    // Get request counter
    const requestCount = parseInt(localStorage.getItem('request_counter') || '0');

    // Try to get some sample data
    try {
        // Test courses endpoint with limit to prevent timeout
        const coursesResponse = await fetch('courses.php?limit=1');
        const coursesData = await coursesResponse.json();
        if (coursesData.success) {
            const count = coursesData.meta?.totalItems || coursesData.data?.length || 0;
            document.getElementById('courses-count').textContent = count > 0 ? count : '125';
        } else {
            document.getElementById('courses-count').textContent = '125';
        }

        // Test users endpoint with limit
        const usersResponse = await fetch('users.php?limit=1');
        const usersData = await usersResponse.json();
        if (usersData.success) {
            const count = usersData.meta?.totalItems || usersData.data?.length || 0;
            document.getElementById('users-count').textContent = count > 0 ? count : '542';
        } else {
            document.getElementById('users-count').textContent = '542';
        }

        // Set forms and assessments counts
        document.getElementById('forms-count').textContent = '89';
        document.getElementById('assessments-count').textContent = '156';

    } catch (error) {
        // Fallback to sample data
        document.getElementById('courses-count').textContent = '125';
        document.getElementById('users-count').textContent = '542';
        document.getElementById('forms-count').textContent = '89';
        document.getElementById('assessments-count').textContent = '156';
    }
}

// Check all endpoints
async function checkAllEndpoints() {
    showToast('Testing all API endpoints...', 'warning');

    const endpoints = [
        {
            name: 'Courses',
            file: 'courses.php'
        },
        {
            name: 'Users',
            file: 'users.php'
        },
        {
            name: 'Forms',
            file: 'forms.php'
        },
        {
            name: 'Assessments',
            file: 'assessments.php'
        }
    ];

    let allWorking = true;

    for (const endpoint of endpoints) {
        try {
            const response = await fetch(`${endpoint.file}?test=true`);
            const data = await response.json();

            // FIX: Handle different response formats
            // courses.php returns: {"success": true, "data": {"test": true, ...}}
            // Others return: {"test": true, ...}
            if (data.test || (data.success && data.data && data.data.test)) {
                console.log(`${endpoint.name} API: ✓ Working`);
            } else {
                console.log(`${endpoint.name} API: ✗ Not working`);
                allWorking = false;
            }
        } catch (error) {
            console.log(`${endpoint.name} API: ✗ Error - ${error.message}`);
            allWorking = false;
        }
    }

    if (allWorking) {
        showToast('All API endpoints are working correctly!', 'success');
    } else {
        showToast('Some API endpoints have issues. Check console for details.', 'error');
    }
}

// Load sample data
function loadSampleData() {
    showToast('Loading sample data for testing...');

    // Fill courses form with sample data
    document.getElementById('course-id').value = 'oxygen-transport';
    document.getElementById('course-analytics-id').value = 'oxygen-transport';
    document.getElementById('course-users-id').value = 'oxygen-transport';
    document.getElementById('unit-course-id').value = 'oxygen-transport';
    document.getElementById('unit-id').value = '5f05ffd08d353f09493a1a91';

    // Fill users form with sample data
    document.getElementById('user-id').value = '6942675c002c836fb30d1c9d';
    document.getElementById('user-courses-id').value = '6942675c002c836fb30d1c9d';
    document.getElementById('user-progress-id').value = '6942675c002c836fb30d1c9d';

    showToast('Sample data loaded. You can now test the endpoints.');
}

// Test all endpoints
async function testAllEndpoints() {
    showToast('Testing all endpoints with sample data...', 'warning');

    // Test a sample from each category
    const tests = [
        {
            section: 'courses',
            action: 'getCourse',
            params: {
                id: 'oxygen-transport'
            }
        },
        {
            section: 'users',
            action: 'getUser',
            params: {
                id: '6942675c002c836fb30d1c9d'
            }
        }
    ];

    for (const test of tests) {
        await makeApiRequest(test.action, test.params);
        await new Promise(resolve => setTimeout(resolve, 1000)); // Delay between tests
    }

    showToast('All sample tests completed!', 'success');
}

// Show modal
function showModal(modalId) {
    document.getElementById(modalId + '-modal').classList.add('active');
}

// Hide modal
function hideModal(modalId) {
    document.getElementById(modalId + '-modal').classList.remove('active');
}

// Add event listeners for modals
document.addEventListener('click', function (e) {
    if (e.target.classList.contains('modal')) {
        e.target.classList.remove('active');
    }
});

// Handle window resize
window.addEventListener('resize', function () {
    if (window.innerWidth > 768 && mobileMenuOpen) {
        closeMobileMenu();
    }
});

// Handle page load - restore last section
window.addEventListener('load', function () {
    const lastSection = localStorage.getItem('lastSection');
    if (lastSection && document.getElementById(lastSection)) {
        showSection(lastSection);
    }
});

// Export functionality (for future use)
function exportResponse() {
    const responseText = document.getElementById('response-json').textContent;
    const blob = new Blob([responseText], { type: 'application/json' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = `api-response-${new Date().toISOString().slice(0, 19).replace(/:/g, '-')}.json`;
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
    URL.revokeObjectURL(url);
    showToast('Response exported as JSON file');
}