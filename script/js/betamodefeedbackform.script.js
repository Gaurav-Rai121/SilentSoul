       function createStars() {
            const starsContainer = document.getElementById('stars');
            const numStars = 100;
            
            for (let i = 0; i < numStars; i++) {
                const star = document.createElement('div');
                star.className = 'star';
                star.style.left = Math.random() * 100 + '%';
                star.style.top = Math.random() * 100 + '%';
                star.style.width = Math.random() * 3 + 1 + 'px';
                star.style.height = star.style.width;
                star.style.animationDelay = Math.random() * 3 + 's';
                starsContainer.appendChild(star);
            }
        }

        // Create floating elements
        function createFloatingElements() {
            const container = document.getElementById('floatingElements');
            const numElements = 20;
            
            for (let i = 0; i < numElements; i++) {
                const element = document.createElement('div');
                element.className = 'floating-element';
                element.style.left = Math.random() * 100 + '%';
                element.style.width = Math.random() * 50 + 20 + 'px';
                element.style.height = element.style.width;
                element.style.animationDelay = Math.random() * 20 + 's';
                element.style.animationDuration = (Math.random() * 10 + 15) + 's';
                container.appendChild(element);
            }
        }

        // Rating system
        const stars = document.querySelectorAll('.star-rating');
        const ratingText = document.getElementById('ratingText');
        const ratingInput = document.getElementById('rating');
        let currentRating = 0;

        const ratingTexts = {
            1: 'Poor',
            2: 'Fair', 
            3: 'Good',
            4: 'Very Good',
            5: 'Excellent'
        };

        stars.forEach(star => {
            star.addEventListener('click', () => {
                currentRating = parseInt(star.dataset.rating);
                ratingInput.value = currentRating;
                updateStars();
                ratingText.textContent = ratingTexts[currentRating];
                ratingText.style.color = '#feca57';
            });

            star.addEventListener('mouseenter', () => {
                const hoverRating = parseInt(star.dataset.rating);
                highlightStars(hoverRating);
            });
        });

        document.getElementById('ratingStars').addEventListener('mouseleave', () => {
            updateStars();
        });

        function highlightStars(rating) {
            stars.forEach((star, index) => {
                if (index < rating) {
                    star.classList.add('active');
                } else {
                    star.classList.remove('active');
                }
            });
        }

        function updateStars() {
            highlightStars(currentRating);
        }

        // Form submission
        document.getElementById('feedbackForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulate form submission
            const submitBtn = document.querySelector('.submit-btn');
            submitBtn.textContent = 'Sending...';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                document.getElementById('feedbackForm').style.display = 'none';
                document.getElementById('successMessage').classList.add('show');
            }, 2000);
        });

        // Add input focus effects
        const inputs = document.querySelectorAll('input, textarea, select');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'translateX(5px)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'translateX(0)';
            });
        });

        // Initialize animations
        createStars();
        createFloatingElements();

        // Add smooth scrolling for mobile
        if (window.innerWidth <= 768) {
            document.body.style.overflowX = 'hidden';
        }