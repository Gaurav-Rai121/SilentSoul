
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




    // Animation on load
    document.addEventListener('DOMContentLoaded', function() {
        gsap.from('.blur-card', {
            y: 30,
            opacity: 0,
            duration: 1,
            ease: 'power3.out'
        });
    });