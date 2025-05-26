    // Sample user data - this would come from your backend
        const userData = {
            username: "MidnightWhisperer",
            email: "user@example.com",
            profileImage: "https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?w=300&h=300&fit=crop&crop=face",
            totalLikes: 1247,
            totalDislikes: 89,
            totalConfessions: 24,

        };

        // Populate user data
        document.getElementById('username').textContent = userData.username;
        document.getElementById('userEmail').textContent = userData.email;
        document.getElementById('profileImage').src = userData.profileImage;
        document.getElementById('totalLikes').textContent = userData.totalLikes.toLocaleString();
        document.getElementById('totalDislikes').textContent = userData.totalDislikes.toLocaleString();
        document.getElementById('totalConfessions').textContent = userData.totalConfessions;


        // Animate numbers on page load
        window.addEventListener('load', function() {
            animateNumber('totalLikes', userData.totalLikes);
            animateNumber('totalDislikes', userData.totalDislikes);
            animateNumber('totalConfessions', userData.totalConfessions);
        });

        function animateNumber(elementId, targetNumber) {
            const element = document.getElementById(elementId);
            const duration = 2000;
            const steps = 60;
            const increment = targetNumber / steps;
            let current = 0;
            
            const timer = setInterval(() => {
                current += increment;
                if (current >= targetNumber) {
                    current = targetNumber;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current).toLocaleString();
            }, duration / steps);
        }

        // Random profile images array for demonstration
        const randomImages = [
            "https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?w=300&h=300&fit=crop&crop=face",
            "https://images.unsplash.com/photo-1494790108755-2616b612c69?w=300&h=300&fit=crop&crop=face",
            "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=300&fit=crop&crop=face",
            "https://images.unsplash.com/photo-1517841905240-472988babdf9?w=300&h=300&fit=crop&crop=face"
        ];

