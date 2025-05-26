        // Scroll Animation
        const animateElements = document.querySelectorAll('.animate-on-scroll');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        animateElements.forEach(el => observer.observe(el));

        // Form handling
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('contactForm');
            const successMessage = document.getElementById('successMessage');

            form.addEventListener('submit', async function(e) {
                e.preventDefault();
                
                const submitBtn = document.querySelector('.submit-btn');
                const originalText = submitBtn.textContent;
                
                // Show loading state
                submitBtn.textContent = 'Sending...';
                submitBtn.classList.add('loading');
                submitBtn.disabled = true;

                // Get form data
                const formData = new FormData(form);
                const data = Object.fromEntries(formData);

                // Simulate API call
                await new Promise(resolve => setTimeout(resolve, 2000));

                // Show success
                successMessage.style.display = 'block';
                successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                
                // Reset form
                form.reset();
                
                // Reset button
                submitBtn.textContent = originalText;
                submitBtn.classList.remove('loading');
                submitBtn.disabled = false;

                // Hide success message after 6 seconds
                setTimeout(() => {
                    successMessage.style.display = 'none';
                }, 6000);

                console.log('Form submitted:', data);
            });

            // Enhanced input interactions
            const inputs = document.querySelectorAll('.form-control');
            
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.closest('.form-group').style.transform = 'translateY(-2px)';
                });
                
                input.addEventListener('blur', function() {
                    this.closest('.form-group').style.transform = 'translateY(0)';
                });

                // Real-time email validation
                if (input.type === 'email') {
                    input.addEventListener('input', function() {
                        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        
                        if (this.value && !emailRegex.test(this.value)) {
                            this.style.borderColor = '#ff4757';
                            this.style.boxShadow = '0 0 0 4px rgba(255, 71, 87, 0.1)';
                        } else {
                            this.style.borderColor = 'rgba(255, 255, 255, 0.1)';
                            this.style.boxShadow = 'none';
                        }
                    });
                }
            });

            // Parallax effect for floating shapes
            document.addEventListener('mousemove', function(e) {
                const shapes = document.querySelectorAll('.floating-shape');
                const x = e.clientX / window.innerWidth;
                const y = e.clientY / window.innerHeight;

                shapes.forEach((shape, index) => {
                    const speed = (index + 1) * 0.5;
                    const xPos = (x - 0.5) * speed * 50;
                    const yPos = (y - 0.5) * speed * 50;
                    
                    shape.style.transform = `translate(${xPos}px, ${yPos}px)`;
                });
            });
        });