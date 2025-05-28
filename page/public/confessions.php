
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SilentSoul - All Confessions</title>
  <link rel="icon" type="image/png" href="../../assets/logo/logo-one-2.png">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../script/css/confessions.style.css">
</head>
<body class="relative">

  <!-- Background glows -->
  <div class="glow w-96 h-96 top-0 left-0"></div>
  <div class="glow w-96 h-96 bottom-0 right-0" style="background: var(--secondary);"></div>
  <div class="glow w-64 h-64 top-1/3 right-1/4"></div>

  <!-- Navbar -->


 <?php include('../../components/common/header.php') ?>

  <!-- Header Section -->
  <section class="pt-24 pb-8 relative z-10 mt-4">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-8">
        <h1 class="text-4xl font-bold mb-4">
          <span class="gradient-text">All Confessions</span>
        </h1>
        <p class="text-gray-300 text-lg">
          Read anonymous stories from people around the world
        </p>
      </div>
      
      <!-- Filter and Sort -->
      <div class="flex flex-col sm:flex-row justify-between items-center mb-8 space-y-4 sm:space-y-0">
        <div class="flex space-x-2">
          <button class="px-4 py-2 rounded-full bg-purple-600 text-white text-sm">Recent</button>
          <button class="px-4 py-2 rounded-full blur-card hover:bg-white/10 text-gray-300 text-sm">Popular</button>
          <button class="px-4 py-2 rounded-full blur-card hover:bg-white/10 text-gray-300 text-sm">Trending</button>
        </div>
        <div class="flex items-center space-x-4">
          <select class="bg-transparent border border-white/20 rounded-lg px-3 py-2 text-sm text-gray-300">
            <option value="all">All Categories</option>
            <option value="relationships">Relationships</option>
            <option value="work">Work</option>
            <option value="family">Family</option>
            <option value="secrets">Secrets</option>
          </select>
        </div>
      </div>
    </div>
  </section>

  <!-- Confessions Feed -->
  <section class="pb-20 relative z-10">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="space-y-6">
        
        <!-- Confession 1 -->
        <div class="blur-card p-6 confession-card">
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
            <div class="flex items-center space-x-2">
              <span class="text-xs text-gray-500">2 hours ago</span>
              <div class="relative">
                <button class="text-gray-400 hover:text-white p-1" onclick="toggleDropdown(this)">
                  <i class="fas fa-ellipsis-h"></i>
                </button>
                <div class="dropdown-menu absolute right-0 mt-2 w-32 bg-gray-800 rounded-lg shadow-lg py-2 hidden">
                 <a href="../user/editmyconfession.php"><button class="w-full text-left px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">
                    <i class="fas fa-edit mr-2"></i>Edit
                  </button>
                </a> 
                  <button class="w-full text-left px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">
                    <i class="fas fa-trash mr-2"></i>Delete
                  </button>
                  <a href="../user/report.php"><button class="w-full text-left px-4 py-2 text-sm text-red-400 hover:bg-gray-700">
                    <i class="fas fa-flag mr-2"></i>Report
                  </button></a>
                  
                </div>
              </div>
            </div>
          </div>
          
          <p class="text-gray-200 mb-4 leading-relaxed">
            "I've been pretending to like my job for years. Every morning I wake up with dread, but I smile and act like everything is fine. I'm too scared to quit because I have bills to pay, but I feel like I'm dying inside slowly. Sometimes I sit in my car during lunch breaks and just cry."
          </p>
          
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="px-3 py-1 rounded-full bg-black/20 text-xs text-purple-300">#Work</span>
            <span class="px-3 py-1 rounded-full bg-black/20 text-xs text-purple-300">#Mental Health</span>
            <span class="px-3 py-1 rounded-full bg-black/20 text-xs text-purple-300">#Career</span>
          </div>
          
          <div class="flex items-center justify-between border-t border-white/10 pt-4">
            <div class="flex items-center space-x-6">
              <button class="reaction-btn flex items-center text-gray-400 hover:text-pink-400">
                <i class="fas fa-heart mr-2"></i>
                <span>124</span>
              </button>
              <button class="reaction-btn flex items-center text-gray-400 hover:text-red-400">
                <i class="fas fa-heart-broken mr-2"></i>
                <span>8</span>
              </button>
              <a href="../../page/public/yourwords.php"><button class="reaction-btn flex items-center text-gray-400 hover:text-purple-400">
                <i class="fas fa-comment mr-2"></i>
                <span>18</span>
              </button></a>
              <button class="reaction-btn flex items-center text-gray-400 hover:text-blue-400">
                <i class="fas fa-share mr-2"></i>
                <span>Share</span>
              </button>
            </div>
            <div class="flex space-x-2">
              <button class="text-sm hover:scale-125 transition-transform">❤️</button>
              <button class="text-sm hover:scale-125 transition-transform">😢</button>
              <button class="text-sm hover:scale-125 transition-transform">🫂</button>
              <button class="text-sm hover:scale-125 transition-transform">💪</button>
            </div>
          </div>
          
          <!-- Comments Section -->
          <div class="comment-section mt-4 border-t border-white/10 pt-4">
            <div class="space-y-4">
              <!-- Sample Comments -->
              <div class="flex items-start space-x-3 relative">
                <div class="w-8 h-8 rounded-full bg-gradient-to-r from-blue-500 to-purple-500 flex items-center justify-center flex-shrink-0">
                  <span class="text-white text-xs font-bold">B</span>
                </div>
                <div class="flex-1">
                  <p class="text-sm text-gray-300">
                    <span class="font-medium text-gray-200">@anonymous_friend</span>
                    I've been in the exact same situation. It took me 3 years to finally make the jump, but it was the best decision I ever made. You're stronger than you think! 💪
                  </p>
                  <div class="flex items-center space-x-4 mt-2">
                    <span class="text-xs text-gray-500">1 hour ago</span>
                    <button class="text-xs text-gray-400 hover:text-pink-400">❤️ 12</button>
                    <button class="text-xs text-gray-400 hover:text-purple-400">Reply</button>
                  </div>
                </div>
              </div>
              
              <!-- Threaded Reply -->
              <div class="flex items-start space-x-3 ml-8 relative">
                <div class="thread-line"></div>
                <div class="w-8 h-8 rounded-full bg-gradient-to-r from-green-500 to-blue-500 flex items-center justify-center flex-shrink-0">
                  <span class="text-white text-xs font-bold">C</span>
                </div>
                <div class="flex-1">
                  <p class="text-sm text-gray-300">
                    <span class="font-medium text-gray-200">@anonymous_supporter</span>
                    This thread gives me hope. I'm in a similar situation and seeing people overcome this is inspiring ✨
                  </p>
                  <div class="flex items-center space-x-4 mt-2">
                    <span class="text-xs text-gray-500">45 min ago</span>
                    <button class="text-xs text-gray-400 hover:text-pink-400">❤️ 5</button>
                    <button class="text-xs text-gray-400 hover:text-purple-400">Reply</button>
                  </div>
                </div>
              </div>
              
              <!-- Comment Input -->
              <div class="flex items-start space-x-3 mt-4">
                <div class="w-8 h-8 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center flex-shrink-0">
                  <span class="text-white text-xs font-bold">Y</span>
                </div>
                <div class="flex-1">
                  <textarea class="w-full bg-transparent border border-white/20 rounded-lg px-3 py-2 text-sm text-gray-200 placeholder-gray-400 resize-none" 
                            rows="2" 
                            placeholder="Share your thoughts anonymously..."></textarea>
                  <div class="flex justify-end mt-2">
                    <button class="px-4 py-1 bg-purple-600 hover:bg-purple-700 rounded-lg text-sm text-white transition-colors">
                      Post
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Confession 2 -->
        <div class="blur-card p-6 confession-card">
          <div class="flex items-start justify-between mb-4">
            <div class="flex items-center">
              <div class="w-12 h-12 rounded-full bg-gradient-to-r from-green-500 to-blue-500 flex items-center justify-center">
                <span class="text-white font-bold">B</span>
              </div>
              <div class="ml-3">
                <h4 class="font-medium text-gray-200">Anonymous Heart</h4>
                <p class="text-xs text-gray-400">@anonymous_heart</p>
              </div>
            </div>
            <div class="flex items-center space-x-2">
              <span class="text-xs text-gray-500">4 hours ago</span>
              <div class="relative">
                <button class="text-gray-400 hover:text-white p-1" onclick="toggleDropdown(this)">
                  <i class="fas fa-ellipsis-h"></i>
                </button>
                <div class="dropdown-menu absolute right-0 mt-2 w-32 bg-gray-800 rounded-lg shadow-lg py-2 hidden">
                <a href="../user/editmyconfession.php"><button class="w-full text-left px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">
                    <i class="fas fa-edit mr-2"></i>Edit
                  </button>
                </a> 
                  <button class="w-full text-left px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">
                    <i class="fas fa-trash mr-2"></i>Delete
                  </button>
                  <button class="w-full text-left px-4 py-2 text-sm text-red-400 hover:bg-gray-700">
                    <i class="fas fa-flag mr-2"></i>Report
                  </button>
                </div>
              </div>
            </div>
          </div>
          
          <p class="text-gray-200 mb-4 leading-relaxed">
            "I'm the anonymous donor who's been paying for school lunches at the local elementary school for the past two years. I grew up poor and hungry, and I never want another child to feel that shame of not being able to afford lunch. It costs me about $300 a month, but seeing those kids eat makes my heart full."
          </p>
          
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="px-3 py-1 rounded-full bg-black/20 text-xs text-purple-300">#Kindness</span>
            <span class="px-3 py-1 rounded-full bg-black/20 text-xs text-purple-300">#Children</span>
            <span class="px-3 py-1 rounded-full bg-black/20 text-xs text-purple-300">#Giving</span>
          </div>
          
          <div class="flex items-center justify-between border-t border-white/10 pt-4">
            <div class="flex items-center space-x-6">
              <button class="reaction-btn flex items-center text-pink-400">
                <i class="fas fa-heart mr-2"></i>
                <span>487</span>
              </button>
              <button class="reaction-btn flex items-center text-gray-400 hover:text-red-400">
                <i class="fas fa-heart-broken mr-2"></i>
                <span>2</span>
              </button>
              <button class="reaction-btn flex items-center text-gray-400 hover:text-purple-400" onclick="toggleComments(this)">
                <i class="fas fa-comment mr-2"></i>
                <span>45</span>
              </button>
              <button class="reaction-btn flex items-center text-gray-400 hover:text-blue-400">
                <i class="fas fa-share mr-2"></i>
                <span>Share</span>
              </button>
            </div>
            <div class="flex space-x-2">
              <button class="text-sm hover:scale-125 transition-transform">❤️</button>
              <button class="text-sm hover:scale-125 transition-transform">😭</button>
              <button class="text-sm hover:scale-125 transition-transform">🙏</button>
              <button class="text-sm hover:scale-125 transition-transform">🌟</button>
            </div>
          </div>
          
          <!-- Comments Section -->
          <div class="comment-section mt-4 border-t border-white/10 pt-4">
            <!-- Comment content would go here -->
          </div>
        </div>

        <!-- Confession 3 -->
        <div class="blur-card p-6 confession-card">
          <div class="flex items-start justify-between mb-4">
            <div class="flex items-center">
              <div class="w-12 h-12 rounded-full bg-gradient-to-r from-yellow-500 to-red-500 flex items-center justify-center">
                <span class="text-white font-bold">C</span>
              </div>
              <div class="ml-3">
                <h4 class="font-medium text-gray-200">Anonymous Dreamer</h4>
                <p class="text-xs text-gray-400">@anonymous_dreamer</p>
              </div>
            </div>
            <div class="flex items-center space-x-2">
              <span class="text-xs text-gray-500">6 hours ago</span>
              <div class="relative">
                <button class="text-gray-400 hover:text-white p-1" onclick="toggleDropdown(this)">
                  <i class="fas fa-ellipsis-h"></i>
                </button>
                <div class="dropdown-menu absolute right-0 mt-2 w-32 bg-gray-800 rounded-lg shadow-lg py-2 hidden">
                <a href="../user/editmyconfession.php"><button class="w-full text-left px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">
                    <i class="fas fa-edit mr-2"></i>Edit
                  </button>
                </a> 
                  <button class="w-full text-left px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">
                    <i class="fas fa-trash mr-2"></i>Delete
                  </button>
                  <button class="w-full text-left px-4 py-2 text-sm text-red-400 hover:bg-gray-700">
                    <i class="fas fa-flag mr-2"></i>Report
                  </button>
                </div>
              </div>
            </div>
          </div>
          
          <p class="text-gray-200 mb-4 leading-relaxed">
            "I applied for my dream job today after 5 years of feeling completely stuck in a career I hate. I haven't told anyone because I'm terrified of failing and looking foolish. But I'm also terrified of staying where I am. This is the first time I've even acknowledged this step to anyone, even anonymously."
          </p>
          
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="px-3 py-1 rounded-full bg-black/20 text-xs text-purple-300">#Career</span>
            <span class="px-3 py-1 rounded-full bg-black/20 text-xs text-purple-300">#Dreams</span>
            <span class="px-3 py-1 rounded-full bg-black/20 text-xs text-purple-300">#Change</span>
          </div>
          
          <div class="flex items-center justify-between border-t border-white/10 pt-4">
            <div class="flex items-center space-x-6">
              <button class="reaction-btn flex items-center text-pink-400">
                <i class="fas fa-heart mr-2"></i>
                <span>156</span>
              </button>
              <button class="reaction-btn flex items-center text-gray-400 hover:text-red-400">
                <i class="fas fa-heart-broken mr-2"></i>
                <span>3</span>
              </button>
              <button class="reaction-btn flex items-center text-gray-400 hover:text-purple-400" onclick="toggleComments(this)">
                <i class="fas fa-comment mr-2"></i>
                <span>28</span>
              </button>
              <button class="reaction-btn flex items-center text-gray-400 hover:text-blue-400">
                <i class="fas fa-share mr-2"></i>
                <span>Share</span>
              </button>
            </div>
            <div class="flex space-x-2">
              <button class="text-sm hover:scale-125 transition-transform">💪</button>
              <button class="text-sm hover:scale-125 transition-transform">🤞</button>
              <button class="text-sm hover:scale-125 transition-transform">✨</button>
              <button class="text-sm hover:scale-125 transition-transform">🎯</button>
            </div>
          </div>
          
          <!-- Comments Section -->
          <div class="comment-section mt-4 border-t border-white/10 pt-4">
            <!-- Comment content would go here -->
          </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center pt-8">
          <button class="gradient-btn py-3 px-8 rounded-lg font-medium text-white shadow-lg flex items-center justify-center mx-auto group">
            <i class="fas fa-arrow-down mr-2 group-hover:animate-bounce"></i>
            Load More Confessions
          </button>
        </div>

      </div>
    </div>
  </section>


<?php include('../../components/common/floatingbutton.php')  ?>
  <script src="../../script/js/confessions.script.js">
   
  </script>
</body>
</html>