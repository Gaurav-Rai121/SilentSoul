<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SilentSoul - Post Your Confession</title>
  <link rel="icon" type="image/png" href="../../assets/logo/logo-one-2.png">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../script/css/addconfession.style.css">
</head>
<body class="relative">

  <!-- Background glows -->
  <div class="glow w-96 h-96 top-0 left-0"></div>
  <div class="glow w-96 h-96 bottom-0 right-0" style="background: var(--secondary);"></div>
  <div class="glow w-64 h-64 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></div>
  <div class="glow w-80 h-80 top-1/4 right-1/3" style="background: linear-gradient(45deg, #10b981, #3b82f6);"></div>

  <!-- Navbar -->
 <?php include('../../components/common/header.php') ?> 

  <!-- Main Content -->
  <section class="pt-24 pb-20 relative z-10">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <!-- Header -->
      <div class="text-center mb-12 header-content form-section">
        <h1 class="text-5xl font-bold mb-6">
          <span class="gradient-text">Share Your Truth</span>
        </h1>
        <p class="text-gray-300 text-xl mb-4">
          Your story matters. Share it anonymously in a safe space.
        </p>
        <div class="flex items-center justify-center space-x-6 text-sm text-gray-400">
          <div class="flex items-center">
            <i class="fas fa-shield-alt mr-2 text-green-400"></i>
            100% Anonymous
          </div>
          <div class="flex items-center">
            <i class="fas fa-lock mr-2 text-blue-400"></i>
            Secure & Private
          </div>
          <div class="flex items-center">
            <i class="fas fa-heart mr-2 text-pink-400"></i>
            Supportive Community
          </div>
        </div>
      </div>

      <!-- Confession Form -->
      <div class="form-section">
        <form id="confessionForm" class="space-y-8">
          
          <!-- Main Confession Input -->
          <div class="blur-card p-8 pulse-glow">
            <div class="relative">
              <label class="block text-lg font-semibold mb-4 gradient-text">
                <i class="fas fa-pen-fancy mr-2"></i>
                Your Confession
              </label>
              <div class="relative">
                <textarea 
                  id="confessionText"
                  name="confession"
                  class="form-input w-full h-48 p-4 rounded-xl text-gray-200 placeholder-gray-500 resize-none text-lg leading-relaxed"
                  placeholder="Share what's on your heart. Your words are safe here..."
                  maxlength="2000"
                  required
                ></textarea>
                <div class="absolute bottom-3 right-3 text-sm char-counter" id="charCounter">
                  0 / 2000
                </div>
              </div>
              <div class="mt-3 text-sm text-gray-400">
                <i class="fas fa-info-circle mr-2"></i>
                Express yourself freely. Your identity remains completely anonymous.
              </div>
            </div>
          </div>

          <!-- Tags Section -->
          <div class="blur-card p-8">
            <div class="space-y-6">
              <div>
                <label class="block text-lg font-semibold mb-2 gradient-text">
                  <i class="fas fa-tags mr-2"></i>
                  Add Tags
                </label>
                <p class="text-gray-400 text-sm mb-4">
                  <i class="fas fa-lightbulb mr-2 text-yellow-400"></i>
                  <strong>Important:</strong> Tags help others find and connect with your story. Choose 3-5 relevant tags that best describe your confession.
                </p>
              </div>
              
              <div class="relative">
                <input 
                  type="text"
                  id="tagInput"
                  class="form-input w-full p-4 rounded-xl text-gray-200 placeholder-gray-500"
                  placeholder="Type a tag and press Enter (e.g., relationships, work, family)"
                  maxlength="20"
                />
                <div class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                  <i class="fas fa-plus"></i>
                </div>
              </div>

              <!-- Suggested Tags -->
              <div>
                <p class="text-sm text-gray-400 mb-3">Popular tags:</p>
                <div class="suggested-tags">
                  <button type="button" class="suggested-tag" data-tag="relationships">relationships</button>
                  <button type="button" class="suggested-tag" data-tag="work">work</button>
                  <button type="button" class="suggested-tag" data-tag="family">family</button>
                  <button type="button" class="suggested-tag" data-tag="secrets">secrets</button>
                  <button type="button" class="suggested-tag" data-tag="mental-health">mental health</button>
                  <button type="button" class="suggested-tag" data-tag="love">love</button>
                  <button type="button" class="suggested-tag" data-tag="regret">regret</button>
                  <button type="button" class="suggested-tag" data-tag="dreams">dreams</button>
                  <button type="button" class="suggested-tag" data-tag="guilt">guilt</button>
                  <button type="button" class="suggested-tag" data-tag="hope">hope</button>
                </div>
              </div>

              <!-- Active Tags Display -->
              <div id="activeTags" class="flex flex-wrap gap-2 min-h-8">
                <!-- Tags will be added here dynamically -->
              </div>

              <!-- Hidden input for tags -->
              <input type="hidden" id="tagsInput" name="tags" />
            </div>
          </div>

          <!-- Password Section -->
          <div class="blur-card p-8">
            <div class="space-y-4">
              <label class="block text-lg font-semibold mb-2 gradient-text">
                <i class="fas fa-key mr-2"></i>
                Access Password
              </label>
              <div class="warning-box p-4 rounded-xl">
                <div class="flex items-start space-x-3">
                  <i class="fas fa-exclamation-triangle text-yellow-400 mt-1"></i>
                  <div class="text-sm text-gray-200">
                    <p class="font-semibold mb-2">Important Security Notice:</p>
                    <ul class="space-y-1 text-gray-300">
                      <li>• You'll need this password to view your confession in "My Confessions"</li>
                      <li>• We <strong>cannot</strong> recover or reset forgotten passwords</li>
                      <li>• This password <strong>cannot</strong> be changed later</li>
                      <li>• Make sure to remember it - write it down if needed</li>
                    </ul>
                  </div>
                </div>
              </div>
              
              <div class="relative">
                <input 
                  type="password"
                  id="confessionPassword"
                  name="password"
                  class="form-input w-full p-4 rounded-xl text-gray-200 placeholder-gray-500"
                  placeholder="Create a strong password you'll remember"
                  minlength="6"
                  required
                />
                <button 
                  type="button" 
                  class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-white"
                  onclick="togglePasswordVisibility()"
                >
                  <i class="fas fa-eye" id="passwordToggleIcon"></i>
                </button>
              </div>
              
              <div class="text-xs text-gray-400">
                <i class="fas fa-info-circle mr-2"></i>
                Minimum 6 characters. Use a combination of letters, numbers, and symbols for better security.
              </div>
            </div>
          </div>

          <!-- Preview Section -->
          <div class="blur-card p-8 confession-preview" id="previewSection" style="display: none;">
            <h3 class="text-lg font-semibold mb-4 gradient-text">
              <i class="fas fa-eye mr-2"></i>
              Preview Your Confession
            </h3>
            <div class="bg-black/20 p-6 rounded-xl border border-white/10">
              <div class="flex items-start justify-between mb-4">
                <div class="flex items-center">
                  <div class="w-12 h-12 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center">
                    <span class="text-white font-bold">A</span>
                  </div>
                  <div class="ml-3">
                    <h4 class="font-medium text-gray-200">Anonymous Soul</h4>
                    <p class="text-xs text-gray-400">@anonymous_soul</p>
                  </div>
                </div>
                <span class="text-xs text-gray-500">Just now</span>
              </div>
              
              <p class="text-gray-200 mb-4 leading-relaxed" id="previewText">
                Your confession will appear here...
              </p>
              
              <div class="flex flex-wrap gap-2" id="previewTags">
                <!-- Preview tags will appear here -->
              </div>
            </div>
          </div>

          <!-- Submit Button -->
          <div class="text-center space-y-6">
            <button 
              type="button" 
              id="previewBtn"
              class="gradient-btn py-3 px-8 rounded-xl font-medium text-white shadow-lg hover:shadow-2xl transition-all duration-300 mr-4"
            >
              <i class="fas fa-eye mr-2"></i>
              Preview Confession
            </button>
            
            <button 
              type="submit"
              id="submitBtn"
              class="gradient-btn py-4 px-10 rounded-xl font-semibold text-white shadow-lg hover:shadow-2xl transition-all duration-300 text-lg"
              disabled
            >
              <i class="fas fa-paper-plane mr-2"></i>
              Share Your Truth
            </button>
            
            <p class="text-sm text-gray-400 max-w-md mx-auto">
              By posting, you agree that your confession will be shared anonymously with the community. 
              <a href="#" class="text-purple-400 hover:text-purple-300 underline">Community Guidelines</a>
            </p>
          </div>

        </form>
      </div>

    </div>
  </section>

  <script src="../../script/js/addconfession.script.js">
 
  </script>

</body>
</html>