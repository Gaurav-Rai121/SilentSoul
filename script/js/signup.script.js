  function nextStep() {
      document.getElementById('step-1').classList.add('hidden');
      document.getElementById('step-2').classList.remove('hidden');
    }
    
    function prevStep() {
      document.getElementById('step-2').classList.add('hidden');
      document.getElementById('step-1').classList.remove('hidden');
    }
    
    function createAccount() {
      // Validate passwords match
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('confirm-password').value;
      
      if (password !== confirmPassword) {
        document.getElementById('password-match-error').classList.remove('hidden');
        return;
      }
      
      // In a real application, this would submit the form data to a server
      document.getElementById('step-2').classList.add('hidden');
      document.getElementById('step-3').classList.remove('hidden');
    }
    
    // Toggle password visibility
    function togglePassword(inputId) {
      const input = document.getElementById(inputId);
      const icon = input.nextElementSibling.querySelector('i');
      
      if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
      } else {
        input.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
      }
    }
    
    // Copy to clipboard function
    function copyToClipboard(text) {
      navigator.clipboard.writeText(text).then(() => {
        alert('Copied to clipboard!');
      });
    }
    
    // Password strength meter
    document.getElementById('password').addEventListener('input', function() {
      const password = this.value;
      const meter = document.getElementById('strength-meter-fill');
      const strengthText = document.getElementById('password-strength-text');
      
      // Simple password strength logic
      let strength = 0;
      
      // Length check
      if (password.length >= 8) strength += 1;
      
      // Contains uppercase
      if (/[A-Z]/.test(password)) strength += 1;
      
      // Contains number
      if (/[0-9]/.test(password)) strength += 1;
      
      // Contains special character
      if (/[^A-Za-z0-9]/.test(password)) strength += 1;
      
      // Update the meter
      meter.className = 'strength-meter-fill';
      
      if (strength === 0) {
        meter.classList.add('strength-weak');
        strengthText.textContent = 'Password strength: Too weak';
      } else if (strength === 1) {
        meter.classList.add('strength-weak');
        strengthText.textContent = 'Password strength: Weak';
      } else if (strength === 2) {
        meter.classList.add('strength-medium');
        strengthText.textContent = 'Password strength: Medium';
      } else if (strength === 3) {
        meter.classList.add('strength-good');
        strengthText.textContent = 'Password strength: Good';
      } else {
        meter.classList.add('strength-strong');
        strengthText.textContent = 'Password strength: Strong';
      }
    });
    
    // Password match validation
    document.getElementById('confirm-password').addEventListener('input', function() {
      const password = document.getElementById('password').value;
      const confirmPassword = this.value;
      const errorMessage = document.getElementById('password-match-error');
      
      if (password !== confirmPassword) {
        errorMessage.classList.remove('hidden');
      } else {
        errorMessage.classList.add('hidden');
      }
    });
    
    // Animation on load
    document.addEventListener('DOMContentLoaded', function() {
      gsap.from('.blur-card', {
        y: 30,
        opacity: 0,
        duration: 1,
        ease: 'power3.out'
      });
    });