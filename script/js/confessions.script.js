 function toggleDropdown(button) {
      const dropdown = button.nextElementSibling;
      dropdown.classList.toggle('hidden');
      
      // Close other dropdowns
      document.querySelectorAll('.dropdown-menu').forEach(menu => {
        if (menu !== dropdown) {
          menu.classList.add('hidden');
        }
      });
    }

    function toggleComments(button) {
      const confessionCard = button.closest('.confession-card');
      const commentSection = confessionCard.querySelector('.comment-section');
      commentSection.classList.toggle('open');
      
      const icon = button.querySelector('i');
      if (commentSection.classList.contains('open')) {
        icon.classList.remove('fa-comment');
        icon.classList.add('fa-comment-slash');
      } else {
        icon.classList.remove('fa-comment-slash');
        icon.classList.add('fa-comment');
      }
    }

    // Close dropdowns when clicking outside
    document.addEventListener('click', function(event) {
      if (!event.target.closest('.relative')) {
        document.querySelectorAll('.dropdown-menu').forEach(menu => {
          menu.classList.add('hidden');
        });
      }
    });

    // Animate cards on scroll
    gsap.registerPlugin(ScrollTrigger);
    
    gsap.from('.confession-card', {
      scrollTrigger: {
        trigger: '.confession-card',
        start: 'top 80%',
      },
      y: 50,
      opacity: 0,
      duration: 0.8,
      stagger: 0.2,
      ease: 'power2.out'
    });

    // Reaction button interactions
    document.querySelectorAll('.reaction-btn').forEach(btn => {
      btn.addEventListener('click', function(e) {
        if (this.querySelector('.fa-heart') && !this.classList.contains('active')) {
          this.classList.add('active');
          const count = this.querySelector('span');
          if (count) {
            count.textContent = parseInt(count.textContent) + 1;
          }
        }
      });
    });