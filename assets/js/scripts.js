// Preloader
/*
window.addEventListener('load', function() {
    setTimeout(function() {
        document.getElementById('preloader').style.opacity = '0';
        setTimeout(function() {
            document.getElementById('preloader').style.display = 'none';
        }, 500);
    }, 1500);
});

*/

// Preloader
window.addEventListener('load', function () {
    // Animate the logo and text first
    setTimeout(function () {
        // After animations complete, fade out
        setTimeout(function () {
            document.getElementById('preloader').style.opacity = '0';
            setTimeout(function () {
                document.getElementById('preloader').style.display = 'none';
            }, 500);
        }, 1000); // Additional time to see the complete animation
    }, 1800); // Total animation duration (1.8s)
});



// Navbar scroll effect
window.addEventListener('scroll', function () {
    if (window.scrollY > 50) {
        document.querySelector('.navbar').classList.add('scrolled');
    } else {
        document.querySelector('.navbar').classList.remove('scrolled');
    }
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        if (targetId === '#') return;

        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 70,
                behavior: 'smooth'
            });
        }
    });
});

// Initialize Swiper
var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 2,
        slideShadows: true,
    },
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

// Countdown Timer
function updateCountdown() {
    const launchDate = new Date('April 1, 2026 00:00:00').getTime();
    const now = new Date().getTime();
    const distance = launchDate - now;

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById('days').textContent = days.toString().padStart(2, '0');
    document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
    document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
    document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
}

setInterval(updateCountdown, 1000);
updateCountdown();

// Set footer year
document.getElementById('year').textContent = new Date().getFullYear();

// Show notice modal after page loads
window.addEventListener('load', function () {
    setTimeout(function () {
        // Only show if cookies are accepted
        if (!localStorage.getItem('cookiesDeclined')) {
            var noticeModal = new bootstrap.Modal(document.getElementById('noticeModal'));
            noticeModal.show();
        }
    }, 2000);
});

// Cookie consent
if (!localStorage.getItem('cookiesAccepted') && !localStorage.getItem('cookiesDeclined')) {
    setTimeout(function () {
        document.getElementById('cookieConsent').classList.add('show');
    }, 3000);
}

document.getElementById('acceptCookies').addEventListener('click', function () {
    localStorage.setItem('cookiesAccepted', 'true');
    document.getElementById('cookieConsent').classList.remove('show');
});

document.getElementById('declineCookies').addEventListener('click', function () {
    localStorage.setItem('cookiesDeclined', 'true');
    document.getElementById('cookieConsent').classList.remove('show');
});

// Animate elements on scroll
function animateOnScroll() {
    const elements = document.querySelectorAll('.feature-card, .about-img, .component-item, .countdown-item');

    elements.forEach(element => {
        const elementPosition = element.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.2;

        if (elementPosition < screenPosition) {
            element.style.opacity = '1';
            element.style.transform = 'translateY(0)';
        }
    });
}

// Set initial styles for animated elements
document.querySelectorAll('.feature-card, .about-img, .component-item, .countdown-item').forEach(element => {
    element.style.opacity = '0';
    element.style.transform = 'translateY(20px)';
    element.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
});

window.addEventListener('scroll', animateOnScroll);
window.addEventListener('load', animateOnScroll);

// Scroll to Top Button
const scrollToTopBtn = document.getElementById('scrollToTopBtn');
window.addEventListener('scroll', function () {
    // Show button after passing half the page
    const halfPage = document.body.scrollHeight / 2;
    if (window.scrollY > halfPage) {
        scrollToTopBtn.style.display = 'block';
    } else {
        scrollToTopBtn.style.display = 'none';
    }
});
scrollToTopBtn.addEventListener('click', function () {
    // Scroll to #home section smoothly
    const homeSection = document.getElementById('home');
    if (homeSection) {
        window.scrollTo({
            top: homeSection.offsetTop - 70, // adjust for navbar height if needed
            behavior: 'smooth'
        });
    } else {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
});

// Add to existing scripts
$(document).ready(function () {
    // Login form submission
    $('#loginSubmit').click(function () {
        const username = $('#loginUsername').val();
        const password = $('#loginPassword').val();

        $.ajax({
            type: 'POST',
            url: '/login_handler.php',
            data: { username, password },
            success: function (response) {
                if (response.success) {
                    location.reload(); // Reload page on success
                } else {
                    $('#loginError').text(response.error || 'Login failed').removeClass('d-none');
                }
            },
            error: function () {
                $('#loginError').text('Server error').removeClass('d-none');
            }
        });
    });

    // Notification AJAX calls (existing but updated)
    const notificationBell = document.getElementById('notificationDropdown');
    if (notificationBell) {
        notificationBell.addEventListener('shown.bs.dropdown', loadNotifications);
    }

    // ... rest of existing notification code ...
});

// Add to existing scripts
$(document).ready(function () {
    // Login form submission
    $('#loginSubmit').click(function () {
        const username = $('#loginUsername').val();
        const password = $('#loginPassword').val();

        $.ajax({
            type: 'POST',
            url: '/login_handler.php',
            data: { username, password },
            success: function (response) {
                if (response.success) {
                    location.reload(); // Reload page on success
                } else {
                    $('#loginError').text(response.error || 'Login failed').removeClass('d-none');
                }
            },
            error: function () {
                $('#loginError').text('Server error').removeClass('d-none');
            }
        });
    });

    // Notification AJAX calls (existing but updated)
    const notificationBell = document.getElementById('notificationDropdown');
    if (notificationBell) {
        notificationBell.addEventListener('shown.bs.dropdown', loadNotifications);
    }});