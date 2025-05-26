  function handleConfessionClick(event) {
        // Create ripple effect
        const button = event.currentTarget.querySelector('.confession-orb');
        const ripple = document.createElement('span');
        const rect = button.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = event.clientX - rect.left - size / 2;
        const y = event.clientY - rect.top - size / 2;

        ripple.style.width = ripple.style.height = size + 'px';
        ripple.style.left = x + 'px';
        ripple.style.top = y + 'px';
        ripple.classList.add('ripple');

        button.appendChild(ripple);

        setTimeout(() => {
            ripple.remove();
        }, 600);

        // Add a subtle shake animation
        button.style.animation = 'none';
        setTimeout(() => {
            button.style.animation = 'float 3s ease-in-out infinite, pulse 2s infinite';
        }, 100);

        // Here you would typically open a confession modal or navigate to confession page
        console.log('Opening confession modal...');

        // Example: You could dispatch a custom event or call a function
        // window.openConfessionModal();
        // or redirect to confession page
        // window.location.href = '/new-confession';
    }

    // Add some random sparkle timing variation
    document.querySelectorAll('.sparkle').forEach((sparkle, index) => {
        sparkle.style.animationDelay = (Math.random() * 2) + 's';
    });

    // Add mouse tracking for subtle movement
    document.addEventListener('mousemove', (e) => {
        const button = document.querySelector('.floating-confession-btn');
        const rect = button.getBoundingClientRect();
        const centerX = rect.left + rect.width / 2;
        const centerY = rect.top + rect.height / 2;

        const deltaX = (e.clientX - centerX) * 0.01;
        const deltaY = (e.clientY - centerY) * 0.01;

        button.style.transform = `translate(${deltaX}px, ${deltaY}px)`;
    });