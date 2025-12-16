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

// Booking buttons - use querySelectorAll to get all buttons with similar functionality
const headerBookBtn = document.getElementById('header-book-btn');
const heroBookBtn = document.getElementById('hero-book-btn');
const mobileMenuBookBtn = document.getElementById('mobile-menu-book-btn');
const servicesBookBtn = document.getElementById('services-book-btn');
const serviceBookBtn = document.getElementById('service-book-btn');
const specialistBookBtns = document.querySelectorAll('[id="specialist-book-btn"]'); // Use attribute selector

function openModal(serviceName = '') {
    if (modal) {
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
        
        // If a service name is provided, set it in the form
        if (serviceName) {
            const serviceSelect = document.getElementById('service');
            if (serviceSelect) {
                // Find matching option
                let optionFound = false;
                for (let i = 0; i < serviceSelect.options.length; i++) {
                    if (serviceSelect.options[i].text.includes(serviceName) || 
                        serviceSelect.options[i].value.includes(serviceName)) {
                        serviceSelect.selectedIndex = i;
                        optionFound = true;
                        break;
                    }
                }
                
                // If no exact match, try partial match
                if (!optionFound) {
                    for (let i = 0; i < serviceSelect.options.length; i++) {
                        if (serviceSelect.options[i].text.toLowerCase().includes(serviceName.toLowerCase()) || 
                            serviceSelect.options[i].value.toLowerCase().includes(serviceName.toLowerCase())) {
                            serviceSelect.selectedIndex = i;
                            break;
                        }
                    }
                }
            }
        }
    }
}

function closeModal() {
    if (modal) {
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }
}

// Attach event listeners to modal elements (check if they exist first)
if (modalBackdrop) modalBackdrop.addEventListener('click', closeModal);
if (modalCloseBtn) modalCloseBtn.addEventListener('click', closeModal);

// Attach event listeners to booking buttons (check if they exist first)
if (headerBookBtn) headerBookBtn.addEventListener('click', () => openModal());
if (heroBookBtn) heroBookBtn.addEventListener('click', () => openModal());
if (mobileMenuBookBtn) mobileMenuBookBtn.addEventListener('click', () => openModal());
if (servicesBookBtn) servicesBookBtn.addEventListener('click', () => openModal());
if (serviceBookBtn) serviceBookBtn.addEventListener('click', () => openModal());

// Handle specialist booking buttons
if (specialistBookBtns) {
    specialistBookBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Get specialist name from the closest container
            const specialistContainer = this.closest('.p-8') || this.closest('.specialist-container') || this.parentElement;
            let specialistName = '';
            
            if (specialistContainer) {
                const nameElement = specialistContainer.querySelector('h3');
                if (nameElement) {
                    specialistName = nameElement.textContent.trim();
                }
            }
            
            // Get service name from the section title
            const section = this.closest('section');
            let serviceName = 'Услуга';
            
            if (section) {
                const titleElement = section.querySelector('h2') || section.querySelector('h1');
                if (titleElement) {
                    serviceName = titleElement.textContent.trim();
                }
            }
            
            // Combine service and specialist name
            const fullServiceName = specialistName ? `${serviceName} - ${specialistName}` : serviceName;
            openModal(fullServiceName);
        });
    });
}

// Handle form submission (check if form exists first)
const bookingForm = document.getElementById('booking-form');
if (bookingForm) {
    bookingForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(this);
        
        // Send AJAX request to PHP processor
        fetch('process_booking.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Show success message
                const originalContent = bookingForm.innerHTML;
                bookingForm.innerHTML = `
                    <div class="text-center py-8">
                        <div class="text-5xl text-green-500 mb-4">✓</div>
                        <h3 class="text-2xl font-serif text-stone-900 mb-2">Спасибо!</h3>
                        <p class="text-stone-600">${data.message}</p>
                    </div>
                `;
                
                // Reset form after 2 seconds and close modal
                setTimeout(() => {
                    bookingForm.innerHTML = originalContent;
                    bookingForm.reset();
                    closeModal();
                }, 2000);
            } else {
                // Show error message
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Произошла ошибка при отправке заявки. Пожалуйста, попробуйте еще раз.');
        });
    });
}

// Sticky Navbar with Solid Background
const navbar = document.getElementById('navbar');
const navbarBg = document.getElementById('navbar-bg');

// Set solid background from start (no scroll effect)
if (navbar && navbarBg) {
    navbar.classList.remove('bg-transparent');
    navbar.classList.add('bg-[#faf9f6]');
    navbarBg.classList.remove('opacity-0');
    navbarBg.classList.add('opacity-100');
}

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