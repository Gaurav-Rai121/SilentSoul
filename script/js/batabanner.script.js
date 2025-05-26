 // Show banner on page load
    window.addEventListener('load', function() {
        setTimeout(() => {
            document.getElementById('betaBanner').classList.add('show');
        }, 500);
    });

    function hideBanner() {
        document.getElementById('betaBanner').classList.remove('show');
    }

    function openFeedbackForm() {
        const modal = document.getElementById('feedbackModal');
        const content = document.getElementById('modalContent');

        modal.classList.remove('hidden');
        modal.classList.add('flex');

        // Animate modal appearance
        setTimeout(() => {
            content.classList.remove('scale-95');
            content.classList.add('scale-100');
        }, 10);
    }

    function closeFeedbackModal() {
        const modal = document.getElementById('feedbackModal');
        const content = document.getElementById('modalContent');

        content.classList.remove('scale-100');
        content.classList.add('scale-95');

        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }, 300);
    }

    // Close modal when clicking outside
    document.getElementById('feedbackModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeFeedbackModal();
        }
    });

    // Auto-hide banner after 15 seconds
    setTimeout(() => {
        hideBanner();
    }, 15000000);