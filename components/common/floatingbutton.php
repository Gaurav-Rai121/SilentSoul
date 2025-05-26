<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floating Confession Button</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../script/css/floatingbutton.style.css">
</head>

<body>
    <a href="../../page/user/addconfession.php  ">
        <div class="floating-confession-btn" onclick="handleConfessionClick(event)">
            <div class="confession-orb">
                <i class="fa fa-heart-broken confession-icon"></i>
                <!-- <i class="fas fa-user-secret confession-icon"></i>
        <i class="fas fa-hands-praying confession-icon"></i>
          <i class="fas fa-face-flushed confession-icon"></i> -->


                <!-- Sparkle effects -->
                <div class="sparkle"></div>
                <div class="sparkle"></div>
                <div class="sparkle"></div>
                <div class="sparkle"></div>

                <!-- Floating particles -->
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
            </div>
    </a>
    <div class="tooltip">Share your secret ✨</div>
    </div>

    <script src="../../script/js/floatingbutton.script.js">
  
    </script>
</body>

</html>