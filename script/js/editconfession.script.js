 // Password verification
    const passwordSection = document.getElementById('passwordSection');
    const editSection = document.getElementById('editSection');
    const verificationPassword = document.getElementById('verificationPassword');
    const verifyPasswordBtn = document.getElementById('verifyPasswordBtn');
    const passwordError = document.getElementById('passwordError');
    const confirmedPassword = document.getElementById('confirmedPassword');

    // Mock password for demo
    const correctPassword = 'demo1234545';

    verifyPasswordBtn.addEventListener('click', function() {
        const enteredPassword = verificationPassword.value.trim();

        if (!enteredPassword) {
            showPasswordError('Please enter your password.');
            return;
        }

        // Show loading state
        this.innerHTML = '<i class="fas fa-spinner fa-spin mr-3"></i>Verifying...';
        this.disabled = true;

        // Simulate API call delay
        setTimeout(() => {
            if (enteredPassword === correctPassword) {
                // Password correct - show edit form
                confirmedPassword.value = enteredPassword;
                document.body.classList.add('demo-visible');

                // Animate edit section
                gsap.from('.edit-section .edit-form-section', {
                    y: 40,
                    opacity: 0,
                    duration: 0.8,
                    ease: 'power2.out',
                    stagger: 0.2
                });

                // Scroll to edit section
                editSection.scrollIntoView({
                    behavior: 'smooth'
                });
            } else {
                // Password incorrect
                showPasswordError('Incorrect password. Please try again.');
                this.innerHTML = '<i class="fas fa-check-circle mr-3"></i>Verify & Continue';
                this.disabled = false;

                // Shake the input
                verificationPassword.style.animation = 'none';
                setTimeout(() => {
                    verificationPassword.style.animation = 'errorShake 0.5s ease-out';
                }, 10);
            }
        }, 1500);
    });

    // Enter key support for password input
    verificationPassword.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            verifyPasswordBtn.click();
        }
    });

   function showPasswordError(message) {
    passwordError.querySelector('span').textContent = message;
    passwordError.style.display = 'block';
    setTimeout(() => {
        passwordError.style.display = 'none';
    }, 5000);
}

// Edit form functionality
const editConfessionText = document.getElementById('editConfessionText');
const editCharCounter = document.getElementById('editCharCounter');
const editTagInput = document.getElementById('editTagInput');
const editActiveTags = document.getElementById('editActiveTags');
const editTagsInput = document.getElementById('editTagsInput');
const editPreviewBtn = document.getElementById('editPreviewBtn');
const editSubmitBtn = document.getElementById('editSubmitBtn');
const editPreviewSection = document.getElementById('editPreviewSection');
const editPreviewText = document.getElementById('editPreviewText');
const editPreviewTags = document.getElementById('editPreviewTags');
const editConfessionForm = document.getElementById('editConfessionForm');

// Initialize tags array with existing tags
let editTags = ['guilt', 'regret', 'growth'];

// Character counter for confession text
editConfessionText.addEventListener('input', function() {
    const currentLength = this.value.length;
    const maxLength = 2000;
    
    editCharCounter.textContent = `${currentLength} / ${maxLength}`;
    
    // Update counter color based on length
    if (currentLength > maxLength * 0.9) {
        editCharCounter.className = 'absolute bottom-4 right-4 text-sm edit-char-counter danger';
    } else if (currentLength > maxLength * 0.75) {
        editCharCounter.className = 'absolute bottom-4 right-4 text-sm edit-char-counter warning';
    } else {
        editCharCounter.className = 'absolute bottom-4 right-4 text-sm edit-char-counter';
    }
    
    // Enable/disable submit button based on content
    validateForm();
});

// Tag input functionality
editTagInput.addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        e.preventDefault();
        addEditTag();
    }
});

// Suggested tag buttons
document.querySelectorAll('.edit-suggested-tag').forEach(button => {
    button.addEventListener('click', function() {
        const tag = this.dataset.tag;
        if (!editTags.includes(tag)) {
            editTags.push(tag);
            renderEditTags();
            updateEditTagsInput();
        }
    });
});

function addEditTag() {
    const tagValue = editTagInput.value.trim().toLowerCase();
    
    if (!tagValue) return;
    
    if (editTags.length >= 8) {
        alert('Maximum 8 tags allowed');
        return;
    }
    
    if (editTags.includes(tagValue)) {
        alert('Tag already exists');
        editTagInput.value = '';
        return;
    }
    
    if (tagValue.length > 20) {
        alert('Tags must be 20 characters or less');
        return;
    }
    
    editTags.push(tagValue);
    editTagInput.value = '';
    renderEditTags();
    updateEditTagsInput();
    validateForm();
}

function removeEditTag(tag) {
    editTags = editTags.filter(t => t !== tag);
    renderEditTags();
    updateEditTagsInput();
    validateForm();
}

function renderEditTags() {
    editActiveTags.innerHTML = '';
    editTags.forEach(tag => {
        const tagElement = document.createElement('div');
        tagElement.className = 'edit-tag flex items-center px-4 py-3 text-sm font-medium text-white';
        tagElement.innerHTML = `
            <span>#${tag}</span>
            <button type="button" class="ml-3 text-gray-300 hover:text-white" onclick="removeEditTag('${tag}')">
                <i class="fas fa-times"></i>
            </button>
        `;
        editActiveTags.appendChild(tagElement);
    });
}

function updateEditTagsInput() {
    editTagsInput.value = editTags.join(',');
}

// Preview functionality
editPreviewBtn.addEventListener('click', function() {
    const confessionText = editConfessionText.value.trim();
    
    if (!confessionText) {
        alert('Please enter your confession text first');
        return;
    }
    
    // Update preview text
    editPreviewText.textContent = confessionText;
    
    // Update preview tags
    editPreviewTags.innerHTML = '';
    editTags.forEach(tag => {
        const tagElement = document.createElement('span');
        tagElement.className = 'inline-block px-3 py-1 text-xs bg-purple-500/30 text-purple-200 rounded-full mr-2 mb-2';
        tagElement.textContent = `#${tag}`;
        editPreviewTags.appendChild(tagElement);
    });
    
    // Show preview section
    editPreviewSection.style.display = 'block';
    
    // Animate preview section
    gsap.from('#editPreviewSection', {
        y: 30,
        opacity: 0,
        duration: 0.6,
        ease: 'power2.out'
    });
    
    // Scroll to preview
    editPreviewSection.scrollIntoView({
        behavior: 'smooth',
        block: 'center'
    });
    
    // Enable submit button after preview
    editSubmitBtn.disabled = false;
});

// Form validation
function validateForm() {
    const confessionText = editConfessionText.value.trim();
    const hasValidContent = confessionText.length >= 10 && confessionText.length <= 2000;
    const hasValidTags = editTags.length >= 1 && editTags.length <= 8;
    
    // Update preview button state
    editPreviewBtn.disabled = !hasValidContent || !hasValidTags;
}

// Form submission
editConfessionForm.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const confessionText = editConfessionText.value.trim();
    const password = confirmedPassword.value;
    
    if (!confessionText || !password) {
        alert('Please fill in all required fields');
        return;
    }
    
    if (editTags.length === 0) {
        alert('Please add at least one tag');
        return;
    }
    
    // Show confirmation dialog
    const confirmed = confirm(
        'Are you absolutely sure you want to update this confession?\n\n' +
        'This is your FINAL chance to make changes. After clicking OK, you will NOT be able to edit this confession again.\n\n' +
        'Click OK to proceed with the update, or Cancel to continue editing.'
    );
    
    if (!confirmed) {
        return;
    }
    
    // Show loading state
    editSubmitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-3"></i>Updating Confession...';
    editSubmitBtn.disabled = true;
    
    // Simulate API call
    setTimeout(() => {
        // In a real application, you would send the data to your backend
        const formData = {
            confession: confessionText,
            tags: editTags,
            password: password
        };
        
        console.log('Updated confession data:', formData);
        
        // Show success message
        alert('✅ Confession updated successfully!\n\nYour confession has been updated and can no longer be edited.');
        
        // Redirect to confession view or homepage
        // window.location.href = '/confession/view?id=123';
        
        // For demo purposes, reset the button
        editSubmitBtn.innerHTML = '<i class="fas fa-check mr-3"></i>Updated Successfully!';
        editSubmitBtn.style.background = 'linear-gradient(60deg, #10b981, #34d399)';
        
    }, 2000);
});

// Initialize form
document.addEventListener('DOMContentLoaded', function() {
    updateEditTagsInput();
    validateForm();
    
    // Initialize character counter
    const currentLength = editConfessionText.value.length;
    editCharCounter.textContent = `${currentLength} / 2000`;
    
    // Add smooth animations
    gsap.from('.edit-header-content', {
        y: 40,
        opacity: 0,
        duration: 1,
        ease: 'power2.out'
    });
});

// Prevent accidental page leave
window.addEventListener('beforeunload', function(e) {
    if (document.body.classList.contains('demo-visible') && 
        editConfessionText.value.trim() !== editConfessionText.defaultValue.trim()) {
        e.preventDefault();
        e.returnValue = 'You have unsaved changes. Are you sure you want to leave?';
    }
});

// Auto-save to session storage (if available)
let autoSaveTimer;
editConfessionText.addEventListener('input', function() {
    clearTimeout(autoSaveTimer);
    autoSaveTimer = setTimeout(() => {
        try {
            sessionStorage.setItem('editConfessionDraft', this.value);
        } catch (e) {
            // Session storage not available
        }
    }, 1000);
});

// Load draft on page load
try {
    const draft = sessionStorage.getItem('editConfessionDraft');
    if (draft && draft !== editConfessionText.value) {
        const loadDraft = confirm('We found a saved draft. Would you like to load it?');
        if (loadDraft) {
            editConfessionText.value = draft;
            editConfessionText.dispatchEvent(new Event('input'));
        }
    }
} catch (e) {
    // Session storage not available
}