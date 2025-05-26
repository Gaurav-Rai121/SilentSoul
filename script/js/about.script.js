   // Particle System
    function createParticles() {
        const particleContainer = document.getElementById('particles');
        const particleCount = 50;

        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.animationDelay = Math.random() * 15 + 's';
            particle.style.animationDuration = (Math.random() * 10 + 10) + 's';

            // Random colors
            const colors = ['rgba(102, 126, 234, 0.8)', 'rgba(118, 75, 162, 0.8)', 'rgba(240, 147, 251, 0.8)',
                'rgba(245, 87, 108, 0.8)'
            ];
            particle.style.background = colors[Math.floor(Math.random() * colors.length)];

            particleContainer.appendChild(particle);
        }
    }

    // Scroll Reveal Animation
    function handleScrollReveal() {
        const elements = document.querySelectorAll('.scroll-reveal');
        const windowHeight = window.innerHeight;

        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;

            if (elementTop < windowHeight - elementVisible) {
                element.classList.add('revealed');
            }
        });
    }

    // Counter Animation
    function animateCounters() {
        const counters = document.querySelectorAll('.counter');

        counters.forEach(counter => {
            const target = counter.textContent.includes('K') ?
                parseInt(counter.textContent) * 1000 :
                counter.textContent === '∞' ? '∞' :
                parseInt(counter.textContent);

            if (target === '∞') return;

            let current = 0;
            const increment = target / 100;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    counter.textContent = target >= 1000 ?
                        Math.floor(target / 1000) + 'K+' :
                        Math.floor(target) + '+';
                    clearInterval(timer);
                } else {
                    counter.textContent = current >= 1000 ?
                        Math.floor(current / 1000) + 'K+' :
                        Math.floor(current) + '+';
                }
            }, 50);
        });
    }

    // Text Scramble Effect
    function scrambleText(element) {
        const text = element.textContent;
        const chars = '!<>-_\\/[]{}—=+*^?#________';
        let iterations = 0;

        const interval = setInterval(() => {
            element.textContent = text
                .split('')
                .map((char, index) => {
                    if (index < iterations) {
                        return text[index];
                    }
                    return chars[Math.floor(Math.random() * chars.length)];
                })
                .join('');

            if (iterations >= text.length) {
                clearInterval(interval);
            }

            iterations += 1 / 3;
        }, 30);
    }

    // Magnetic Button Effect
    function addMagneticEffect() {
        const magneticElements = document.querySelectorAll('.magnetic');

        magneticElements.forEach(element => {
            element.addEventListener('mousemove', (e) => {
                const rect = element.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;

                element.style.transform = `translate(${x * 0.1}px, ${y * 0.1}px) scale(1.05)`;
            });

            element.addEventListener('mouseleave', () => {
                element.style.transform = 'translate(0px, 0px) scale(1)';
            });
        });
    }

    // Advanced 3D Card Effects
    function add3DEffects() {
        const cards = document.querySelectorAll('.card-3d');

        cards.forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                const centerX = rect.width / 2;
                const centerY = rect.height / 2;

                const rotateX = (y - centerY) / 10;
                const rotateY = (centerX - x) / 10;

                card.style.transform =
                    `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(10px)`;
            });

            card.addEventListener('mouseleave', () => {
                card.style.transform =
                'perspective(1000px) rotateX(0deg) rotateY(0deg) translateZ(0px)';
            });
        });
    }

    // Smooth Parallax Effect
    function handleParallax() {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.floating');

        parallaxElements.forEach((element, index) => {
            const speed = (index + 1) * 0.1;
            element.style.transform += ` translateY(${scrolled * speed}px)`;
        });
    }

    // Initialize everything
    document.addEventListener('DOMContentLoaded', () => {
        createParticles();
        addMagneticEffect();
        add3DEffects();

        // Scramble effect on load
        const scrambleElement = document.querySelector('.scramble');
        if (scrambleElement) {
            setTimeout(() => scrambleText(scrambleElement), 1000);
        }

        // Initial scroll reveal check
        handleScrollReveal();

        // Counter animation trigger
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !entry.target.dataset.animated) {
                    animateCounters();
                    entry.target.dataset.animated = 'true';
                }
            });
        });

        const statsSection = document.querySelector('.glass-dark');
        if (statsSection) observer.observe(statsSection);
    });

    // Event Listeners
    window.addEventListener('scroll', () => {
        handleScrollReveal();
        handleParallax();
    });

    // Advanced button interactions
    document.querySelectorAll('.btn-futuristic').forEach(btn => {
        btn.addEventListener('click', (e) => {
            // Create ripple effect
            const rect = btn.getBoundingClientRect();
            const ripple = document.createElement('span');
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;

            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.style.position = 'absolute';
            ripple.style.borderRadius = '50%';
            ripple.style.background = 'rgba(255, 255, 255, 0.3)';
            ripple.style.transform = 'scale(0)';
            ripple.style.animation = 'ripple 0.6s linear';
            ripple.style.pointerEvents = 'none';

            btn.appendChild(ripple);

            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });

    // Add ripple animation CSS
    const style = document.createElement('style');
    style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
    document.head.appendChild(style);