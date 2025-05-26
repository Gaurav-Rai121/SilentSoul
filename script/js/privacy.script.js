  // Progress indicator
        function updateProgressBar() {
            const scrollTop = window.pageYOffset;
            const docHeight = document.body.scrollHeight - window.innerHeight;
            const scrollPercent = (scrollTop / docHeight) * 100;
            document.getElementById('progressBar').style.width = scrollPercent + '%';
        }

        // Smooth scrolling for navigation
        function smoothScroll(target) {
            const element = document.querySelector(target);
            if (element) {
                element.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }

        // Highlight active navigation item
        function highlightActiveSection() {
            const sections = document.querySelectorAll('.section');
            const navItems = document.querySelectorAll('.nav-item');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (window.scrollY >= sectionTop - 200) {
                    current = section.getAttribute('id');
                }
            });

            navItems.forEach(item => {
                item.classList.remove('active');
                if (item.getAttribute('href') === '#' + current) {
                    item.classList.add('active');
                }
            });
        }

        // Enhanced navigation styles
        const style = document.createElement('style');
        style.textContent = `
            .nav-item.active {
                background: var(--accent-color) !important;
                color: white !important;
                transform: translateY(-2px);
                box-shadow: var(--shadow-light);
            }
            
            .section {
                scroll-margin-top: 100px;
            }
        `;
        document.head.appendChild(style);

        // Add click handlers to navigation items
        document.querySelectorAll('.nav-item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                const target = this.getAttribute('href');
                smoothScroll(target);
            });
        });

        // Scroll event listeners
        window.addEventListener('scroll', function() {
            updateProgressBar();
            highlightActiveSection();
        });

        // Initial setup
        document.addEventListener('DOMContentLoaded', function() {
            updateProgressBar();
            highlightActiveSection();
        });

        // Add floating action button for quick contact
        const fab = document.createElement('div');
        fab.innerHTML = `
            <div class="floating-action-btn" onclick="location.href='mailto:privacy@silentsoul.com'">
                <i class="fas fa-envelope"></i>
            </div>
        `;
        
        const fabStyles = document.createElement('style');
        fabStyles.textContent = `
            .floating-action-btn {
                position: fixed;
                bottom: 30px;
                right: 30px;
                width: 60px;
                height: 60px;
                background: var(--primary-gradient);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-size: 1.5rem;
                cursor: pointer;
                box-shadow: var(--shadow-heavy);
                transition: all 0.3s ease;
                z-index: 1000;
            }
            
            .floating-action-btn:hover {
                transform: scale(1.1);
                box-shadow: 0 8px 25px rgba(139, 92, 246, 0.3);
            }
            
            @media (max-width: 768px) {
                .floating-action-btn {
                    bottom: 20px;
                    right: 20px;
                    width: 50px;
                    height: 50px;
                    font-size: 1.2rem;
                }
            }
        `;
        document.head.appendChild(fabStyles);
        document.body.appendChild(fab);

        // Add loading animation
        window.addEventListener('load', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease-in-out';
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });

        // Add intersection observer for section animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all sections for scroll animations
        document.querySelectorAll('.section').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'all 0.6s ease-out';
            observer.observe(section);
        });