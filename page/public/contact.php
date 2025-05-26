<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - SilentSoul</title>
      <link rel="icon" type="image/png" href="../../assets/logo/logo-one-2.png">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="../../script/css/contact.style.css">
</head>
<body>
    <div class="bg-decoration">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
        <div class="floating-shape shape-3"></div>
    </div>
  <?php include('../../components/common/header.php') ?>
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Form -->
            <div class="contact-form-wrapper animate-on-scroll">
                <div class="form-header">
                    <h1 class="form-title">Get in Touch</h1>
                    <p class="form-subtitle">Share your thoughts in complete confidence</p>
                </div>

                <div class="success-message" id="successMessage">
                    ✨ Thank you! Your message has been sent securely.
                </div>

                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <div class="input-wrapper">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Anonymous is perfectly fine">
                            <span class="input-icon">👤</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <div class="input-wrapper">
                            <input type="email" id="email" name="email" class="form-control" required placeholder="your@email.com">
                            <span class="input-icon">📧</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <div class="input-wrapper">
                            <select id="subject" name="subject" class="form-control" required>
                                <option value="">Choose a topic...</option>
                                <option value="general">💬 General Inquiry</option>
                                <option value="support">🔧 Technical Support</option>
                                <option value="privacy">🔒 Privacy Concerns</option>
                                <option value="feedback">💡 Feedback & Suggestions</option>
                                <option value="report">⚠️ Report Content</option>
                                <option value="partnership">🤝 Partnership</option>
                                <option value="other">❓ Other</option>
                            </select>
                            <span class="input-icon">📋</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message">Your Message *</label>
                        <div class="input-wrapper">
                            <textarea id="message" name="message" class="form-control" required placeholder="What's on your mind? We're here to listen..."></textarea>
                            <span class="input-icon">💭</span>
                        </div>
                    </div>

                    <button type="submit" class="submit-btn">
                        Send Message Securely
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="contact-info-wrapper">
                <div class="info-card animate-on-scroll">
                    <div class="info-header">
                        <div class="info-icon">📧</div>
                        <h3 class="info-title">Direct Email</h3>
                    </div>
                    <div class="info-content">
                        <strong>support@silentsoul.com</strong><br>
                        We respond to all inquiries within 24 hours. Your privacy is guaranteed.
                    </div>
                </div>

                <div class="info-card animate-on-scroll">
                    <div class="info-header">
                        <div class="info-icon">🔒</div>
                        <h3 class="info-title">Privacy First</h3>
                    </div>
                    <div class="info-content">
                        End-to-end encryption protects all communications. Your identity remains <strong>completely confidential</strong>.
                    </div>
                </div>

                <div class="info-card animate-on-scroll">
                    <div class="info-header">
                        <div class="info-icon">⚡</div>
                        <h3 class="info-title">Quick Response</h3>
                    </div>
                    <div class="info-content">
                        Most inquiries answered within <strong>24 hours</strong>. Urgent matters get priority attention.
                    </div>
                </div>

                <div class="info-card animate-on-scroll">
                    <div class="info-header">
                        <div class="info-icon">🌍</div>
                        <h3 class="info-title">Global Support</h3>
                    </div>
                    <div class="info-content">
                        Available worldwide, <strong>24/7 support</strong> across all time zones and multiple languages.
                    </div>
                </div>

                <div class="privacy-notice animate-on-scroll">
                    <h4 class="privacy-title">Your Privacy Matters</h4>
                    <p class="privacy-text">
                        We understand confession platforms require absolute trust. All data is encrypted, never shared, 
                        and you can request complete deletion anytime. Your secrets are safe with us.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="../../script/js/contact.script.js">

    </script>
</body>
</html>