<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Confessions</title>
    <link rel="stylesheet" href="../../script/css/userconfessions.style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>My Secret Confessions</h1>
            <p>Each memory locked away, waiting to be revealed</p>
        </div>

        <div class="confessions-grid">
            <!-- Confession 1 -->
            <div class="confession-card" data-password="secret123">
                <div class="confession-header">
                    <h3 class="confession-title">The Night I Almost Left</h3>
                    <div class="lock-icon">🔒</div>
                </div>
                <p class="confession-preview">
                    That cold December night when everything felt hopeless, I packed my bags and stood at the door for what felt like hours. The weight of leaving everything behind...
                </p>
                <div class="confession-meta">
                    <span>December 15, 2023</span>
                    <button class="unlock-btn">Unlock Memory</button>
                </div>
                <div class="confession-full">
                    <button class="close-btn">×</button>
                    <h3>The Night I Almost Left</h3>
                    <div class="content">
                        <p>That cold December night when everything felt hopeless, I packed my bags and stood at the door for what felt like hours. The weight of leaving everything behind pressed down on my chest like a stone. I had written the letter, left it on the kitchen table, and taken one last look around the apartment that had been my home for three years.</p>
                        
                        <p>But as I stood there with my hand on the doorknob, I heard the soft purring of my cat, Whiskers, rubbing against my leg. In that moment, I realized that running away wouldn't solve anything. The problems would follow me wherever I went, but the love and connections I'd built here wouldn't.</p>
                        
                        <p>I unpacked my bags that night and tore up the letter. Sometimes the bravest thing you can do is stay and face whatever is haunting you. That night taught me that home isn't just a place—it's the courage to keep trying, even when everything feels impossible.</p>
                    </div>
                </div>
            </div>

            <!-- Confession 2 -->
            <div class="confession-card" data-password="memory456">
                <div class="confession-header">
                    <h3 class="confession-title">The Lie That Changed Everything</h3>
                    <div class="lock-icon">🔒</div>
                </div>
                <p class="confession-preview">
                    I told a small lie to avoid hurting someone's feelings, but it spiraled into something much bigger. What started as protection became a web of deception that...
                </p>
                <div class="confession-meta">
                    <span>August 22, 2023</span>
                    <button class="unlock-btn">Unlock Memory</button>
                </div>
                <div class="confession-full">
                    <button class="close-btn">×</button>
                    <h3>The Lie That Changed Everything</h3>
                    <div class="content">
                        <p>I told a small lie to avoid hurting someone's feelings, but it spiraled into something much bigger. What started as protection became a web of deception that nearly destroyed my closest friendship.</p>
                        
                        <p>Sarah had been so excited about her art exhibition, and when she asked me what I thought of her paintings, I couldn't bring myself to tell her they weren't ready. Instead, I said they were amazing and that I'd definitely be there for the opening night. But I knew the gallery owner, and I knew he was only showing her work as a favor to her father.</p>
                        
                        <p>One lie led to another. I had to pretend to be sick on opening night, then make up stories about why I couldn't visit the exhibition later. When Sarah finally discovered the truth—that I had doubts about her work and had been dishonest—she was more hurt by my deception than she would have been by honest feedback.</p>
                        
                        <p>It took months to rebuild our friendship, and I learned that protecting someone from truth isn't actually protecting them at all. Sometimes love means being brave enough to have difficult conversations.</p>
                    </div>
                </div>
            </div>

            <!-- Confession 3 -->
            <div class="confession-card" data-password="truth789">
                <div class="confession-header">
                    <h3 class="confession-title">The Dream I Never Shared</h3>
                    <div class="lock-icon">🔒</div>
                </div>
                <p class="confession-preview">
                    For years, I've harbored a secret dream that feels too big, too impossible to share with anyone. Every night before sleep, I imagine a different life where I'm brave enough to...
                </p>
                <div class="confession-meta">
                    <span>March 10, 2024</span>
                    <button class="unlock-btn">Unlock Memory</button>
                </div>
                <div class="confession-full">
                    <button class="close-btn">×</button>
                    <h3>The Dream I Never Shared</h3>
                    <div class="content">
                        <p>For years, I've harbored a secret dream that feels too big, too impossible to share with anyone. Every night before sleep, I imagine a different life where I'm brave enough to pursue what truly sets my soul on fire.</p>
                        
                        <p>I dream of opening a small bookshop café in a quiet coastal town, where the smell of coffee mingles with the sea breeze, and every corner is filled with stories waiting to be discovered. I picture myself recommending books to strangers who become friends, hosting poetry nights under string lights, and creating a sanctuary for fellow dreamers.</p>
                        
                        <p>The rational part of my mind whispers all the reasons why it's impossible: the financial risk, the uncertainty, the judgment from others who see it as impractical. But late at night, when the world is quiet, I let myself imagine the feeling of fulfillment that would come from building something beautiful from nothing.</p>
                        
                        <p>Maybe someday I'll find the courage to turn this confession into a plan. Until then, it remains my most precious secret—a reminder that inside this ordinary life, extraordinary dreams are still breathing, waiting for their moment to emerge into the light.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Password Modal -->
    <div id="passwordModal" class="modal">
        <div class="modal-content">
            <h2 class="modal-title">🔐 Enter Password</h2>
            <p style="color: rgba(255,255,255,0.7); margin-bottom: 1rem;">This confession is protected. Please enter the password to unlock this memory.</p>
            <input type="password" id="passwordInput" class="password-input" placeholder="Enter password...">
            <div class="error-message" id="errorMessage">Incorrect password. Please try again.</div>
            <div class="modal-buttons">
                <button class="modal-btn btn-secondary" id="cancelBtn">Cancel</button>
                <button class="modal-btn btn-primary" id="unlockBtn">Unlock</button>
            </div>
        </div>
    </div>

    <script src="../../script/js/userconfessions.script.js">
       
    </script>
</body>
</html>