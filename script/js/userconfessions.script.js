 let currentCard = null;
        const modal = document.getElementById('passwordModal');
        const passwordInput = document.getElementById('passwordInput');
        const errorMessage = document.getElementById('errorMessage');

        // Add event listeners to unlock buttons
        document.querySelectorAll('.unlock-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                currentCard = this.closest('.confession-card');
                modal.classList.add('show');
                passwordInput.focus();
                errorMessage.classList.remove('show');
                passwordInput.value = '';
            });
        });

        // Handle password submission
        document.getElementById('unlockBtn').addEventListener('click', function() {
            const enteredPassword = passwordInput.value;
            const correctPassword = currentCard.dataset.password;
            
            if (enteredPassword === correctPassword) {
                // Unlock the confession
                const fullConfession = currentCard.querySelector('.confession-full');
                fullConfession.classList.add('show');
                
                // Update the card appearance
                currentCard.querySelector('.lock-icon').innerHTML = '🔓';
                currentCard.querySelector('.lock-icon').style.background = 'linear-gradient(45deg, #4ecdc4, #44a08d)';
                currentCard.querySelector('.confession-preview').style.filter = 'none';
                currentCard.querySelector('.unlock-btn').textContent = 'Unlocked';
                currentCard.querySelector('.unlock-btn').style.background = 'linear-gradient(45deg, #4ecdc4, #44a08d)';
                
                modal.classList.remove('show');
                
                // Scroll to the full confession
                setTimeout(() => {
                    fullConfession.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }, 300);
            } else {
                errorMessage.classList.add('show');
                passwordInput.value = '';
                passwordInput.focus();
                
                // Add shake animation to modal
                const modalContent = document.querySelector('.modal-content');
                modalContent.style.animation = 'none';
                setTimeout(() => {
                    modalContent.style.animation = 'shake 0.5s ease-in-out';
                }, 10);
            }
        });

        // Handle cancel button
        document.getElementById('cancelBtn').addEventListener('click', function() {
            modal.classList.remove('show');
            passwordInput.value = '';
            errorMessage.classList.remove('show');
        });

        // Handle Enter key in password input
        passwordInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                document.getElementById('unlockBtn').click();
            }
        });

        // Handle Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && modal.classList.contains('show')) {
                modal.classList.remove('show');
                passwordInput.value = '';
                errorMessage.classList.remove('show');
            }
        });

        // Close modal when clicking outside
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.classList.remove('show');
                passwordInput.value = '';
                errorMessage.classList.remove('show');
            }
        });

        // Handle close buttons for full confessions
        document.querySelectorAll('.close-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                this.closest('.confession-full').classList.remove('show');
            });
        });

        // Add shake animation style
        const style = document.createElement('style');
        style.textContent = `
            @keyframes shake {
                0%, 100% { transform: translateX(0); }
                25% { transform: translateX(-10px); }
                75% { transform: translateX(10px); }
            }
        `;
        document.head.appendChild(style);

        // Add some interactive hover effects
        document.querySelectorAll('.confession-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px) rotateX(5deg)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) rotateX(0)';
            });
        });