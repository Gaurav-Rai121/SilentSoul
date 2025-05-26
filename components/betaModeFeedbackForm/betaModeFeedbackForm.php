<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SilentSoul - Beta Feedback</title>
     <link rel="icon" type="image/png" href="../../assets/logo/logo-one-2.png">
    <link rel="stylesheet" href="../../script/css/batamodefeedbackform.style.css">
</head>
<body>
    <div class="stars" id="stars"></div>
    <div class="floating-elements" id="floatingElements"></div>

    <div class="container">
        <div class="header">
            <div class="logo">SilentSoul</div>
            <div class="beta-badge">BETA MODE</div>
            <p class="subtitle">Help us shape the future of anonymous confessions.<br>Your feedback illuminates our path forward.</p>
        </div>

        <div class="form-container">
            <form id="feedbackForm">
                <div class="form-group">
                    <label for="experience">How would you rate your overall experience?</label>
                    <div class="rating-group">
                        <div class="rating-stars" id="ratingStars">
                            <span class="star-rating" data-rating="1">★</span>
                            <span class="star-rating" data-rating="2">★</span>
                            <span class="star-rating" data-rating="3">★</span>
                            <span class="star-rating" data-rating="4">★</span>
                            <span class="star-rating" data-rating="5">★</span>
                        </div>
                        <span id="ratingText" style="color: #888; font-size: 0.9rem;">Click to rate</span>
                    </div>
                    <input type="hidden" id="rating" name="rating" value="">
                </div>

                <div class="form-group">
                    <label for="category">What aspect would you like to provide feedback on?</label>
                    <select id="category" name="category" required>
                        <option value="">Select a category</option>
                        <option value="ui-design">User Interface & Design</option>
                        <option value="functionality">Core Functionality</option>
                        <option value="privacy-security">Privacy & Security</option>
                        <option value="performance">Performance & Speed</option>
                        <option value="mobile-experience">Mobile Experience</option>
                        <option value="confession-process">Confession Process</option>
                        <option value="general">General Feedback</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="feedback">Share your thoughts with us</label>
                    <textarea id="feedback" name="feedback" placeholder="Tell us what you love, what needs improvement, or any ideas you have for SilentSoul..." required></textarea>
                </div>

                <div class="form-group">
                    <label for="features">Which features did you find most valuable?</label>
                    <div class="feature-checklist">
                        <div class="checkbox-item">
                            <input type="checkbox" id="anonymous" name="features" value="anonymous-posting">
                            <label for="anonymous">Anonymous Posting</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="privacy" name="features" value="privacy-controls">
                            <label for="privacy">Privacy Controls</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="design" name="features" value="clean-design">
                            <label for="design">Clean Design</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="safety" name="features" value="safety-features">
                            <label for="safety">Safety Features</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="ease" name="features" value="ease-of-use">
                            <label for="ease">Ease of Use</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="support" name="features" value="community-support">
                            <label for="support">Community Support</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="improvements">What would you like to see improved or added?</label>
                    <textarea id="improvements" name="improvements" placeholder="Your suggestions help us prioritize our development roadmap..."></textarea>
                </div>

                <div class="form-group">
                    <label for="contact">Email (Optional - for follow-up)</label>
                    <input type="email" id="contact" name="contact" placeholder="your@email.com">
                    <small style="color: #888; font-size: 0.8rem; margin-top: 0.5rem; display: block;">
                        We respect your privacy. Your email will only be used for feedback follow-up.
                    </small>
                </div>

                <button type="submit" class="submit-btn">
                    Send Feedback to the Void
                </button>
            </form>

            <div class="success-message" id="successMessage">
                <h3>✨ Thank you for your feedback!</h3>
                <p>Your insights have been received and will help shape SilentSoul's future. Together, we're building a safer space for authentic expression.</p>
            </div>
        </div>
    </div>

    <script src="../../script/js/betamodefeedbackform.script.js">
        // Create stars background
 
    </script>
</body>
</html>