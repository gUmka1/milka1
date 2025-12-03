// Mobile Menu Toggle
const menuBtn = document.getElementById('open-menu');
const closeBtn = document.getElementById('close-menu');
const menu = document.getElementById('mobile-menu');
const mobileLinks = document.querySelectorAll('.mobile-link');

function toggleMenu() {
    if (menu) {
        const isClosed = menu.classList.contains('translate-x-full') || (menu.style.transform === 'translateX(100%)');
        if (isClosed) {
            menu.classList.remove('translate-x-full');
            menu.style.transform = 'translateX(0)';
            document.body.style.overflow = 'hidden';
        } else {
            menu.classList.add('translate-x-full');
            menu.style.transform = 'translateX(100%)';
            document.body.style.overflow = 'auto';
        }
    }
}

if (menuBtn) menuBtn.addEventListener('click', toggleMenu);
if (closeBtn) closeBtn.addEventListener('click', toggleMenu);

if (mobileLinks) {
    mobileLinks.forEach(link => {
        link.addEventListener('click', toggleMenu);
    });
}

// Modal functions
const modal = document.getElementById('booking-modal');
const modalBackdrop = document.getElementById('modal-backdrop');
const modalCloseBtn = document.getElementById('modal-close-btn');

// Booking buttons
const headerBookBtn = document.getElementById('header-book-btn');
const heroBookBtn = document.getElementById('hero-book-btn');
const mobileMenuBookBtn = document.getElementById('mobile-menu-book-btn');
const servicesBookBtn = document.getElementById('services-book-btn');

function openModal() {
    if (modal) {
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }
}

function closeModal() {
    if (modal) {
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }
}

// Attach event listeners to modal elements
if (modalBackdrop) modalBackdrop.addEventListener('click', closeModal);
if (modalCloseBtn) modalCloseBtn.addEventListener('click', closeModal);

// Attach event listeners to booking buttons
if (headerBookBtn) headerBookBtn.addEventListener('click', openModal);
if (heroBookBtn) heroBookBtn.addEventListener('click', openModal);
if (mobileMenuBookBtn) mobileMenuBookBtn.addEventListener('click', openModal);
if (servicesBookBtn) servicesBookBtn.addEventListener('click', openModal);

// Handle form submission
const bookingForm = document.getElementById('booking-form');
if (bookingForm) {
    bookingForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Show success message
        const originalContent = bookingForm.innerHTML;
        bookingForm.innerHTML = `
            <div class="text-center py-8">
                <div class="text-5xl text-green-500 mb-4">✓</div>
                <h3 class="text-2xl font-serif text-stone-900 mb-2">Спасибо!</h3>
                <p class="text-stone-600">Ваша заявка отправлена. Мы свяжемся с вами в ближайшее время.</p>
            </div>
        `;
        
        // Reset form after 2 seconds and close modal
        setTimeout(() => {
            bookingForm.innerHTML = originalContent;
            bookingForm.reset();
            closeModal();
        }, 2000);
    });
}

// Sticky Navbar effect with Blur background
const navbar = document.getElementById('navbar');
const navbarBg = document.getElementById('navbar-bg');

window.addEventListener('scroll', () => {
    if (navbar && navbarBg) {
        if (window.scrollY > 50) {
            navbar.classList.add('py-4');
            navbar.classList.remove('py-6');
            navbarBg.classList.remove('opacity-0');
        } else {
            navbar.classList.add('py-6');
            navbar.classList.remove('py-4');
            navbarBg.classList.add('opacity-0');
        }
    }
});

// Intersection Observer for Reveal Animation
const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.15
};

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('active');
            observer.unobserve(entry.target); // Only animate once
        }
    });
}, observerOptions);

document.querySelectorAll('.reveal').forEach(el => {
    observer.observe(el);
});