<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Anonymous Confessions</title>
     <link rel="icon" type="image/png" href="../../assets/logo/logo-one-2.png">
    <link rel="stylesheet" href="../../script/css/profile.style.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
 
</head>
<body>
    <div class="floating-particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>
<?php include('../../components/common/header.php') ?>
    <div class="container">
        <div class="profile-header">
            <div class="profile-avatar">
                <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?w=300&h=300&fit=crop&crop=face" alt="Profile Avatar" id="profileImage">
            </div>
            <h1 class="profile-username" id="username">Anonymous_User</h1>
            <p class="profile-email" id="userEmail">user@example.com</p>
        </div>

        <div class="stats-container">
            <div class="stat-card">
                <span class="stat-icon likes-icon">❤️</span>
                <span class="stat-number" id="totalLikes">1,247</span>
                <span class="stat-label">Total Likes</span>
            </div>
            
            <div class="stat-card">
                <span class="stat-icon dislikes-icon">💔</span>
                <span class="stat-number" id="totalDislikes">89</span>
                <span class="stat-label">Total Dislikes</span>
            </div>
            
            <div class="stat-card">
                <span class="stat-icon confessions-icon">📝</span>
                <span class="stat-number" id="totalConfessions">24</span>
                <span class="stat-label">Total Confessions</span>
            </div>
        </div>

        <div class="action-section">
           <a href="../../page/user/userconfession.php"> <button class="my-confessions-btn">
                View My Confessions
            </button></a>
        </div>

        <div class="privacy-note">
            <h3>🔒 Privacy Protection</h3>
            <p>Your confessions remain completely anonymous. The statistics shown here are aggregated totals from all users to protect individual privacy. Only you can see your specific confessions when logged in.</p>
        </div>
    </div>


<?php include('../../components/common/footer.php') ?>

    <script src="../../script/js/profile.script.js">
    
    </script>
</body>
</html>