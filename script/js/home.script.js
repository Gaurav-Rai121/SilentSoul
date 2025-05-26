// Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
      document.getElementById('mobile-menu').classList.remove('translate-x-full');
    });
    
    document.getElementById('close-mobile-menu').addEventListener('click', function() {
      document.getElementById('mobile-menu').classList.add('translate-x-full');
    });
    
    // FAQ toggle
    function toggleFAQ(button) {
      const item = button.closest('.faq-item');
      item.classList.toggle('faq-active');
    }
    
    // Scroll animations
    document.addEventListener('DOMContentLoaded', function() {
      gsap.registerPlugin(ScrollTrigger);
      
      // Animate blur cards on scroll
      gsap.utils.toArray('.blur-card').forEach(card => {
        gsap.from(card, {
          y: 50,
          opacity: 0,
          duration: 1,
          scrollTrigger: {
            trigger: card,
            start: "top bottom-=100",
            toggleActions: "play none none none"
          }
        });
      });
      
      // Animate counters
      const counterElements = document.querySelectorAll('.counter-value');
      counterElements.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-count'));
        
        ScrollTrigger.create({
          trigger: counter,
          start: "top bottom-=100",
          onEnter: () => {
            let count = 0;
            const duration = 2000; // 2 seconds
            const interval = 50; // update every 50ms
            const increment = Math.ceil(target / (duration / interval));
            
            const timer = setInterval(() => {
              count += increment;
              if (count >= target) {
                count = target;
                clearInterval(timer);
              }
              counter.textContent = count.toLocaleString() + '+';
            }, interval);
          },
          once: true
        });
      });
    });