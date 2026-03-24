// Mobile menu toggle
document.getElementById('mobileMenuBtn').addEventListener('click', function () {
    document.getElementById('mainMenu').classList.toggle('show');
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            window.scrollTo({
                top: target.offsetTop - 80,
                behavior: 'smooth'
            });

            // Close mobile menu if open
            document.getElementById('mainMenu').classList.remove('show');
        }
    });
});

// Animation on scroll
function animateOnScroll() {
    const cards = document.querySelectorAll('.doc-card');

    cards.forEach(card => {
        const cardPosition = card.getBoundingClientRect().top;
        const screenPosition = window.innerHeight * 0.8;

        if (cardPosition < screenPosition) {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }
    });
}

// Initialize card animations
document.querySelectorAll('.doc-card').forEach(card => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(30px)';
    card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
});

// Listen for scroll events
window.addEventListener('scroll', animateOnScroll);
// Trigger on load in case elements are already in view
window.addEventListener('load', animateOnScroll);