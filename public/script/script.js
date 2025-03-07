
// function showImageModal(image) {
//     const modal = document.getElementById('image-modal');
//     const modalImage = document.getElementById('modal-image');

//     modalImage.src = image.src; // Set clicked image as modal image
//     modal.classList.remove('hidden'); // Show modal
// }

// function closeModal() {
//     document.getElementById('image-modal').classList.add('hidden'); // Hide modal
// }

// // Close modal when clicking outside the image
// document.getElementById('image-modal').addEventListener('click', function(event) {
//     if (event.target === this) {
//         closeModal();
//     }
// });

function moveSlider(industry, direction) {
    const slider = document.getElementById(`slider-${industry}`);
    const images = slider.getElementsByClassName('slider-image');
    if (images.length === 0) return; // Prevent errors if no images

    const slideWidth = images[0].offsetWidth + 10; // Considering gap
    const slidesToShow = window.innerWidth >= 1024 ? 2 : 1; // 2 slides for desktop, 1 for mobile
    const totalSlides = images.length;
    const maxScroll = Math.max((totalSlides - slidesToShow) * slideWidth, 0); // Prevent negative values

    let currentScroll = parseInt(slider.getAttribute('data-scroll') || '0', 10);

    if (direction === 'left') {
        currentScroll = Math.max(currentScroll - slideWidth * slidesToShow, 0);
    } else {
        currentScroll = Math.min(currentScroll + slideWidth * slidesToShow, maxScroll);
    }

    slider.style.transform = `translateX(-${currentScroll}px)`;
    slider.setAttribute('data-scroll', currentScroll);
}

function showTab(tabId, button) {
    // Hide all tabs
    document.querySelectorAll('.tab-pane').forEach(tab => tab.classList.add('hidden'));

    // Show selected tab
    document.getElementById(tabId).classList.remove('hidden');

    // Remove active class from all buttons
    document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));

    // Add active class to the clicked button
    button.classList.add('active');
}


// Adjust slider position on window resize
window.addEventListener('resize', () => {
    document.querySelectorAll('.slider-wrapper').forEach(slider => {
        slider.setAttribute('data-scroll', '0');
        slider.style.transform = 'translateX(0)';
    });
});

// Auto-slide function with pause on hover
function autoSlide(industry) {
    const slider = document.getElementById(`slider-${industry}`);
    let interval = setInterval(() => {
        moveSlider(industry, 'right');
    }, 3000); // Adjust time interval as needed (3000ms = 3s)

    slider.addEventListener('mouseenter', () => clearInterval(interval));
    slider.addEventListener('mouseleave', () => {
        interval = setInterval(() => {
            moveSlider(industry, 'right');
        }, 3000);
    });
}

// Start auto-slide for each slider
document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll('.slider-wrapper').forEach(slider => {
        const industry = slider.id.replace('slider-', '');
        autoSlide(industry);
    });

    // Open "menu" and "cakes" tabs by default
    setTimeout(() => {
        showTab('menu', document.querySelector('[data-tab="menu"]'));
        showTab('cakes', document.querySelector('[data-tab="cakes"]'));
    }, 100);
});
