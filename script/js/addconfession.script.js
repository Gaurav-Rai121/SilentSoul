   let tags = [];
    const maxTags = 8;

    // Character counter functionality
    const confessionText = document.getElementById('confessionText');
    const charCounter = document.getElementById('charCounter');
    
    confessionText.addEventListener('input', function() {
      const length = this.value.length;
      charCounter.textContent = `${length} / 2000`;
      
      charCounter.className = 'absolute bottom-3 right-3 text-sm char-counter';
      if (length > 1600) {
        charCounter.classList.add('warning');
      }
      if (length > 1800) {
        charCounter.classList.remove('warning');
        charCounter.classList.add('danger');
      }
      
      updatePreview();
      checkFormValidity();
    });

    // Tag functionality
    const tagInput = document.getElementById('tagInput');
    const activeTags = document.getElementById('activeTags');
    const tagsHidden = document.getElementById('tagsInput');

    tagInput.addEventListener('keypress', function(e) {
      if (e.key === 'Enter') {
        e.preventDefault();
        addTag(this.value.trim());
        this.value = '';
      }
    });

    // Suggested tags functionality
    document.querySelectorAll('.suggested-tag').forEach(btn => {
      btn.addEventListener('click', function() {
        addTag(this.dataset.tag);
      });
    });

    function addTag(tagText) {
      if (!tagText || tags.includes(tagText.toLowerCase()) || tags.length >= maxTags) {
        return;
      }
      
      if (tagText.length > 20) {
        tagText = tagText.substring(0, 20);
      }
      
      tags.push(tagText.toLowerCase());
      updateTagsDisplay();
      updateTagsInput();
      updatePreview();
      checkFormValidity();
    }

    function removeTag(tagText) {
      tags = tags.filter(tag => tag !== tagText);
      updateTagsDisplay();
      updateTagsInput();
      updatePreview();
      checkFormValidity();
    }

    function updateTagsDisplay() {
      activeTags.innerHTML = '';
      tags.forEach(tag => {
        const tagElement = document.createElement('div');
        tagElement.className = 'tag flex items-center px-3 py-2 rounded-full text-sm font-medium text-white';
        tagElement.innerHTML = `
          <span>#${tag}</span>
          <button type="button" class="ml-2 text-gray-300 hover:text-white" onclick="removeTag('${tag}')">
            <i class="fas fa-times"></i>
          </button>
        `;
        activeTags.appendChild(tagElement);
      });
    }

    function updateTagsInput() {
      tagsHidden.value = tags.join(',');
    }

    // Password visibility toggle
    function togglePasswordVisibility() {
      const passwordInput = document.getElementById('confessionPassword');
      const toggleIcon = document.getElementById('passwordToggleIcon');
      
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
      } else {
        passwordInput.type = 'password';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
      }
    }

    // Preview functionality
    const previewBtn = document.getElementById('previewBtn');
    const previewSection = document.getElementById('previewSection');
    const previewText = document.getElementById('previewText');
    const previewTags = document.getElementById('previewTags');

    previewBtn.addEventListener('click', function() {
      const isVisible = previewSection.style.display !== 'none';
      if (isVisible) {
        previewSection.style.display = 'none';
        this.innerHTML = '<i class="fas fa-eye mr-2"></i>Preview Confession';
      } else {
        updatePreview();
        previewSection.style.display = 'block';
        this.innerHTML = '<i class="fas fa-eye-slash mr-2"></i>Hide Preview';
        previewSection.scrollIntoView({ behavior: 'smooth' });
      }
    });

    function updatePreview() {
      const text = confessionText.value || 'Your confession will appear here...';
      previewText.textContent = text;
      
      previewTags.innerHTML = '';
      tags.forEach(tag => {
        const tagElement = document.createElement('span');
        tagElement.className = 'px-3 py-1 rounded-full bg-black/20 text-xs text-purple-300';
        tagElement.textContent = `#${tag}`;
        previewTags.appendChild(tagElement);
      });
    }

    // Form validation
    function checkFormValidity() {
      const confession = confessionText.value.trim();
      const password = document.getElementById('confessionPassword').value;
      const submitBtn = document.getElementById('submitBtn');
      
      const isValid = confession.length >= 10 && password.length >= 6 && tags.length >= 1;
      
      submitBtn.disabled = !isValid;
      
      if (isValid) {
        submitBtn.classList.remove('opacity-50', 'cursor-not-allowed');
      } else {
        submitBtn.classList.add('opacity-50', 'cursor-not-allowed');
      }
    }

    // Password input validation
    document.getElementById('confessionPassword').addEventListener('input', checkFormValidity);

    // Form submission
    document.getElementById('confessionForm').addEventListener('submit', function(e) {
      e.preventDefault();
      
      const formData = {
        confession: confessionText.value.trim(),
        tags: tags,
        password: document.getElementById('confessionPassword').value
      };
      
      // Show success animation
      const submitBtn = document.getElementById('submitBtn');
      submitBtn.innerHTML = '<i class="fas fa-check mr-2"></i>Confession Shared!';
      submitBtn.classList.add('bg-green-500');
      
      // Here you would typically send the data to your server
      console.log('Form submitted:', formData);
      
      // Reset form after delay
      setTimeout(() => {
        alert('Your confession has been shared anonymously! Remember to save your password to access it later.');
        this.reset();
        tags = [];
        updateTagsDisplay();
        updateTagsInput();
        previewSection.style.display = 'none';
        previewBtn.innerHTML = '<i class="fas fa-eye mr-2"></i>Preview Confession';
        charCounter.textContent = '0 / 2000';
        checkFormValidity();
      }, 2000);
    });

    // Initialize GSAP animations - Fixed to target only form sections
    document.addEventListener('DOMContentLoaded', function() {
      // Animate form sections only, not header
      gsap.to('.form-section', {
        y: 0,
        opacity: 1,
        duration: 1,
        ease: 'power2.out',
        delay: 0.2
      });
    });

    // Initial form state
    checkFormValidity();