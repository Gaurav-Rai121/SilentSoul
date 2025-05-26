<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SilentSoul - Confess Anonymously</title>
     <link rel="icon" type="image/png" href="../../assets/logo/logo-one-2.png">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../script/css/home.style.css">
</head>
<body class="relative">

  <!-- Background glows -->
  <div class="glow w-96 h-96 top-0 left-0"></div>
  <div class="glow w-96 h-96 bottom-0 right-0" style="background: var(--secondary);"></div>
  <div class="glow w-64 h-64 top-1/3 right-1/4"></div>

  <!-- Navbar -->
   <?php include('../../components/common/betabanner.php') ?>
  <?php include('../../components/common/header.php') ?>

 

  <!-- Hero Section -->
  <section class="pt-32 pb-20 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-col lg:flex-row items-center justify-between">
        <div class="w-full lg:w-1/2 text-center lg:text-left mb-12 lg:mb-0">
          <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold leading-tight">
            <span class="gradient-text">Confess</span> anything you've never told anyone
          </h1>
          <p class="mt-6 text-lg text-gray-300 max-w-xl mx-auto lg:mx-0">
            Share your deepest secrets anonymously and connect with people who understand. Free your mind from the weight of untold stories.
          </p>
          <div class="mt-10 flex flex-col sm:flex-row justify-center lg:justify-start space-y-4 sm:space-y-0 sm:space-x-4">
            <button class="gradient-btn py-3 px-8 rounded-lg font-medium text-white shadow-lg flex items-center justify-center group">
              <i class="fas fa-feather-alt mr-2 group-hover:animate-pulse"></i> 
              <span>Share Your Secret</span>
            </button>
            <button class="py-3 px-8 rounded-lg font-medium border border-white/10 hover:bg-white/5 transition flex items-center justify-center group">
              <i class="fas fa-compass mr-2 group-hover:rotate-45 transition-transform"></i> 
              <span>Explore Confessions</span>
            </button>
          </div>
          <div class="mt-8 text-gray-400 text-sm flex items-center justify-center lg:justify-start">
            <i class="fas fa-shield-alt mr-2 text-purple-400"></i> 
            100% anonymous. No login required.
          </div>
        </div>
        
        <div class="w-full lg:w-1/2 relative">
          <div class="relative w-full max-w-md mx-auto">
            <!-- Decorative elements -->
            <div class="absolute -top-10 -left-10 w-20 h-20 rounded-full bg-purple-600/10 blur-card"></div>
            <div class="absolute -bottom-5 -right-5 w-16 h-16 rounded-full bg-pink-600/10 blur-card"></div>
            
            <!-- Floating cards -->
            <div class="blur-card p-6 max-w-sm float float-delay-1 relative">
              <div class="absolute -top-2 -right-2 w-6 h-6 rounded-full bg-pink-500 flex items-center justify-center text-xs animate-pulse">
                <i class="fas fa-fire"></i>
              </div>
              <p class="text-gray-100">"I've been pretending to like my job for years. I'm actually miserable but too afraid to quit."</p>
              <div class="mt-4 flex justify-between items-center">
                <span class="text-xs text-gray-400">3 hours ago</span>
                <div class="flex space-x-3">
                  <span class="text-xs text-gray-400 flex items-center"><i class="fas fa-heart text-pink-500 mr-1"></i> 124</span>
                  <span class="text-xs text-gray-400 flex items-center"><i class="fas fa-comment text-purple-400 mr-1"></i> 18</span>
                </div>
              </div>
              <div class="emoji-reactions mt-3 pt-3 border-t border-white/5 flex justify-center space-x-3">
                <button class="text-sm hover:scale-125 transition-transform">❤️</button>
                <button class="text-sm hover:scale-125 transition-transform">😢</button>
                <button class="text-sm hover:scale-125 transition-transform">😮</button>
                <button class="text-sm hover:scale-125 transition-transform">🫂</button>
              </div>
            </div>
            
            <div class="blur-card p-6 max-w-sm mt-4 ml-8 float float-delay-2">
              <p class="text-gray-100">"I secretly helped my struggling classmate pass their final exam by giving them answers."</p>
              <div class="mt-4 flex justify-between items-center">
                <span class="text-xs text-gray-400">5 hours ago</span>
                <div class="flex space-x-3">
                  <span class="text-xs text-gray-400 flex items-center"><i class="fas fa-heart text-pink-500 mr-1"></i> 89</span>
                  <span class="text-xs text-gray-400 flex items-center"><i class="fas fa-comment text-purple-400 mr-1"></i> 12</span>
                </div>
              </div>
              <div class="emoji-reactions mt-3 pt-3 border-t border-white/5 flex justify-center space-x-3">
                <button class="text-sm hover:scale-125 transition-transform">❤️</button>
                <button class="text-sm hover:scale-125 transition-transform">😢</button>
                <button class="text-sm hover:scale-125 transition-transform">😮</button>
                <button class="text-sm hover:scale-125 transition-transform">🫂</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Create Confession Section -->
  

  <!-- Trending Topics -->
  <!-- <section class="py-16 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold"><span class="gradient-text">Trending Topics</span></h2>
        <p class="mt-4 text-gray-400 max-w-2xl mx-auto">
          Discover what others are sharing and talking about
        </p>
      </div>
      
      <div class="flex flex-wrap justify-center gap-3">
        <a href="#" class="px-6 py-3 rounded-full blur-card hover:bg-purple-600/20 transition-colors flex items-center">
          <span class="text-purple-400 mr-2">#</span>Relationships
        </a>
        <a href="#" class="px-6 py-3 rounded-full blur-card hover:bg-purple-600/20 transition-colors flex items-center">
          <span class="text-purple-400 mr-2">#</span>Work
        </a>
        <a href="#" class="px-6 py-3 rounded-full blur-card hover:bg-purple-600/20 transition-colors flex items-center">
          <span class="text-purple-400 mr-2">#</span>Family
        </a>
        <a href="#" class="px-6 py-3 rounded-full blur-card hover:bg-purple-600/20 transition-colors flex items-center">
          <span class="text-purple-400 mr-2">#</span>Mental Health
        </a>
        <a href="#" class="px-6 py-3 rounded-full blur-card hover:bg-purple-600/20 transition-colors flex items-center">
          <span class="text-purple-400 mr-2">#</span>Secrets
        </a>
        <a href="#" class="px-6 py-3 rounded-full blur-card hover:bg-purple-600/20 transition-colors flex items-center">
          <span class="text-purple-400 mr-2">#</span>Childhood
        </a>
        <a href="#" class="px-6 py-3 rounded-full blur-card hover:bg-purple-600/20 transition-colors flex items-center">
          <span class="text-purple-400 mr-2">#</span>Confessions
        </a>
        <a href="#" class="px-6 py-3 rounded-full blur-card hover:bg-purple-600/20 transition-colors flex items-center">
          <span class="text-purple-400 mr-2">#</span>Love
        </a>
      </div>
    </div>
  </section> -->

  <!-- Stats Section -->
  <section class="py-16 bg-gradient-to-b from-black/30 to-transparent relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="blur-card p-8 text-center transform transition hover:scale-105">
          <div class="text-3xl lg:text-4xl font-bold gradient-text mb-3 counter-value" data-count="50000">50,000+</div>
          <p class="text-gray-300">Secrets shared</p>
          <div class="mt-3 text-xs text-gray-500">Growing every minute</div>
        </div>
        
        <div class="blur-card p-8 text-center transform transition hover:scale-105">
          <div class="text-3xl lg:text-4xl font-bold gradient-text mb-3 counter-value" data-count="25000">25,000+</div>
          <p class="text-gray-300">Active users</p>
          <div class="mt-3 text-xs text-gray-500">From 160+ countries</div>
        </div>
        
        <div class="blur-card p-8 text-center transform transition hover:scale-105">
          <div class="text-3xl lg:text-4xl font-bold gradient-text mb-3">100%</div>
          <p class="text-gray-300">Anonymous & secure</p>
          <div class="mt-3 text-xs text-gray-500">Your privacy is our priority</div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Features -->
  <section class="py-20 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl font-bold"><span class="gradient-text">Why SilentSoul?</span></h2>
        <p class="mt-4 text-gray-400 max-w-2xl mx-auto">
          A safe space to unburden your soul and connect with others who understand
        </p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="blur-card p-8 text-center hover:shadow-xl card-animation feature-card">
          <div class="w-16 h-16 rounded-full gradient-btn flex items-center justify-center mx-auto mb-6 feature-icon">
            <i class="fas fa-user-secret text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold mb-3">100% Anonymous</h3>
          <p class="text-gray-400">No accounts, no tracking, no way to trace confessions back to you.</p>
        </div>
        
        <div class="blur-card p-8 text-center hover:shadow-xl card-animation feature-card">
          <div class="w-16 h-16 rounded-full gradient-btn flex items-center justify-center mx-auto mb-6 feature-icon">
            <i class="fas fa-shield-alt text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold mb-3">Safe Space</h3>
          
         <p class="text-gray-400">Our community guidelines and moderation ensure a respectful and supportive environment.</p>
        </div>
        
        <div class="blur-card p-8 text-center hover:shadow-xl card-animation feature-card">
          <div class="w-16 h-16 rounded-full gradient-btn flex items-center justify-center mx-auto mb-6 feature-icon">
            <i class="fas fa-comments text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold mb-3">Supportive Community</h3>
          <p class="text-gray-400">Connect with others who understand and share similar experiences.</p>
        </div>
        
        <div class="blur-card p-8 text-center hover:shadow-xl card-animation feature-card">
          <div class="w-16 h-16 rounded-full gradient-btn flex items-center justify-center mx-auto mb-6 feature-icon">
            <i class="fas fa-heart text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold mb-3">Emotional Relief</h3>
          <p class="text-gray-400">Research shows that sharing secrets reduces stress and improves mental wellbeing.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="py-20 relative z-10 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl font-bold"><span class="gradient-text">User Stories</span></h2>
        <p class="mt-4 text-gray-400 max-w-2xl mx-auto">
          How SilentSoul has helped people unburden their minds
        </p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="blur-card p-8 hover:shadow-xl card-animation">
          <div class="flex items-center mb-4">
            <div class="w-12 h-12 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center">
              <span class="text-white font-bold">A</span>
            </div>
            <div class="ml-4">
              <h4 class="font-bold">Anonymous User</h4>
              <p class="text-xs text-gray-400">Member for 3 months</p>
            </div>
          </div>
          <p class="text-gray-300 italic">"Being able to share my deepest thoughts without judgment has been incredibly therapeutic. I found people who understood exactly what I was going through."</p>
          <div class="mt-4 flex">
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
          </div>
        </div>
        
        <div class="blur-card p-8 hover:shadow-xl card-animation">
          <div class="flex items-center mb-4">
            <div class="w-12 h-12 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center">
              <span class="text-white font-bold">B</span>
            </div>
            <div class="ml-4">
              <h4 class="font-bold">Anonymous User</h4>
              <p class="text-xs text-gray-400">Member for 6 months</p>
            </div>
          </div>
          <p class="text-gray-300 italic">"I was carrying a secret for years that was eating me alive. Sharing it here, even anonymously, felt like a weight lifting off my chest. The supportive comments helped me forgive myself."</p>
          <div class="mt-4 flex">
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
          </div>
        </div>
        
        <div class="blur-card p-8 hover:shadow-xl card-animation">
          <div class="flex items-center mb-4">
            <div class="w-12 h-12 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center">
              <span class="text-white font-bold">C</span>
            </div>
            <div class="ml-4">
              <h4 class="font-bold">Anonymous User</h4>
              <p class="text-xs text-gray-400">Member for 1 year</p>
            </div>
          </div>
          <p class="text-gray-300 italic">"Reading others' confessions makes me feel less alone in my struggles. It's comforting to know we're all human, all imperfect, and all just trying our best."</p>
          <div class="mt-4 flex">
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star-half-alt text-yellow-400"></i>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Recent Confessions -->
  <section class="py-20 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-bold"><span class="gradient-text">Recent Confessions</span></h2>
        <a href="#" class="text-purple-400 hover:text-purple-300 flex items-center">
          View All <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Confession 1 -->
        <div class="blur-card p-6 hover:shadow-xl card-animation">
          <div class="flex justify-between items-start mb-4">
            <div class="flex items-center">
              <div class="w-8 h-8 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center">
                <span class="text-white text-xs font-bold">A</span>
              </div>
              <span class="ml-2 text-sm text-gray-400">Anonymous</span>
            </div>
            <span class="text-xs text-gray-500">2 hours ago</span>
          </div>
          <p class="text-gray-200 mb-4">"I've been secretly learning to play guitar for the past year to surprise my partner on our anniversary next month. They have no idea!"</p>
          <div class="flex justify-between items-center text-sm text-gray-400">
            <div class="flex space-x-4">
              <button class="flex items-center hover:text-pink-400 transition-colors">
                <i class="fas fa-heart mr-1"></i> 78
              </button>
              <button class="flex items-center hover:text-purple-400 transition-colors">
                <i class="fas fa-comment mr-1"></i> 12
              </button>
            </div>
            <div class="flex space-x-2">
              <span class="px-2 py-1 rounded-full bg-black/20 text-xs text-purple-300">#Relationships</span>
              <span class="px-2 py-1 rounded-full bg-black/20 text-xs text-purple-300">#Surprises</span>
            </div>
          </div>
        </div>
        
        <!-- Confession 2 -->
        <div class="blur-card p-6 hover:shadow-xl card-animation">
          <div class="flex justify-between items-start mb-4">
            <div class="flex items-center">
              <div class="w-8 h-8 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center">
                <span class="text-white text-xs font-bold">A</span>
              </div>
              <span class="ml-2 text-sm text-gray-400">Anonymous</span>
            </div>
            <span class="text-xs text-gray-500">4 hours ago</span>
          </div>
          <p class="text-gray-200 mb-4">"I'm the anonymous donor who's been paying for school lunches at the local elementary school. I grew up poor and hungry, and I never want another child to feel that way."</p>
          <div class="flex justify-between items-center text-sm text-gray-400">
            <div class="flex space-x-4">
              <button class="flex items-center hover:text-pink-400 transition-colors">
                <i class="fas fa-heart mr-1"></i> 156
              </button>
              <button class="flex items-center hover:text-purple-400 transition-colors">
                <i class="fas fa-comment mr-1"></i> 32
              </button>
            </div>
            <div class="flex space-x-2">
              <span class="px-2 py-1 rounded-full bg-black/20 text-xs text-purple-300">#Kindness</span>
            </div>
          </div>
        </div>
        
        <!-- Confession 3 -->
        <div class="blur-card p-6 hover:shadow-xl card-animation">
          <div class="flex justify-between items-start mb-4">
            <div class="flex items-center">
              <div class="w-8 h-8 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center">
                <span class="text-white text-xs font-bold">A</span>
              </div>
              <span class="ml-2 text-sm text-gray-400">Anonymous</span>
            </div>
            <span class="text-xs text-gray-500">7 hours ago</span>
          </div>
          <p class="text-gray-200 mb-4">"I applied for my dream job today after 5 years of feeling stuck in a career I hate. I haven't told anyone because I'm scared of failing. This is the first time I've acknowledged it."</p>
          <div class="flex justify-between items-center text-sm text-gray-400">
            <div class="flex space-x-4">
              <button class="flex items-center hover:text-pink-400 transition-colors">
                <i class="fas fa-heart mr-1"></i> 92
              </button>
              <button class="flex items-center hover:text-purple-400 transition-colors">
                <i class="fas fa-comment mr-1"></i> 15
              </button>
            </div>
            <div class="flex space-x-2">
              <span class="px-2 py-1 rounded-full bg-black/20 text-xs text-purple-300">#Career</span>
              <span class="px-2 py-1 rounded-full bg-black/20 text-xs text-purple-300">#Change</span>
            </div>
          </div>
        </div>
      </div>
      
      <!-- <div class="text-center mt-12">
        <button class="gradient-btn py-3 px-8 rounded-lg font-medium text-white shadow-lg flex items-center justify-center mx-auto">
          Load More <i class="fas fa-spinner ml-2"></i>
        </button>
      </div> -->
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="py-20 relative z-10">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl font-bold"><span class="gradient-text">Frequently Asked Questions</span></h2>
        <p class="mt-4 text-gray-400 max-w-2xl mx-auto">
          Got questions? We've got answers
        </p>
      </div>
      
      <div class="space-y-4">
        <!-- FAQ Item 1 -->
        <div class="blur-card p-6 hover:bg-white/5 transition-colors faq-item">
          <button class="flex items-center justify-between w-full text-left focus:outline-none" onclick="toggleFAQ(this)">
            <h3 class="text-lg font-medium">Is SilentSoul really 100% anonymous?</h3>
            <i class="fas fa-chevron-down text-purple-400 faq-icon"></i>
          </button>
          <div class="faq-content mt-2">
            <p class="text-gray-400">Yes, SilentSoul is designed with privacy as our top priority. We don't collect personal data, require accounts, or track IP addresses. Your confessions cannot be traced back to you in any way.</p>
          </div>
        </div>
        
        <!-- FAQ Item 2 -->
        <div class="blur-card p-6 hover:bg-white/5 transition-colors faq-item">
          <button class="flex items-center justify-between w-full text-left focus:outline-none" onclick="toggleFAQ(this)">
            <h3 class="text-lg font-medium">How is content moderated?</h3>
            <i class="fas fa-chevron-down text-purple-400 faq-icon"></i>
          </button>
          <div class="faq-content mt-2">
            <p class="text-gray-400">We use a combination of AI moderation and human review to ensure content follows our community guidelines. Harmful, threatening, or illegal content is removed, but we never compromise your anonymity in this process.</p>
          </div>
        </div>
        
        <!-- FAQ Item 3 -->
        <div class="blur-card p-6 hover:bg-white/5 transition-colors faq-item">
          <button class="flex items-center justify-between w-full text-left focus:outline-none" onclick="toggleFAQ(this)">
            <h3 class="text-lg font-medium">Can I delete my confession later?</h3>
            <i class="fas fa-chevron-down text-purple-400 faq-icon"></i>
          </button>
          <div class="faq-content mt-2">
            <p class="text-gray-400">Yes. Every confession comes with a unique deletion code that only you receive. You can use this code anytime to permanently remove your confession without revealing your identity.</p>
          </div>
        </div>
        
        <!-- FAQ Item 4 -->
        <div class="blur-card p-6 hover:bg-white/5 transition-colors faq-item">
          <button class="flex items-center justify-between w-full text-left focus:outline-none" onclick="toggleFAQ(this)">
            <h3 class="text-lg font-medium">Is there a limit to how many confessions I can share?</h3>
            <i class="fas fa-chevron-down text-purple-400 faq-icon"></i>
          </button>
          <div class="faq-content mt-2">
            <p class="text-gray-400">No, you can share as many confessions as you'd like. However, to prevent spam, we have a rate limit of 5 confessions per hour from the same device.</p>
          </div>
        </div>
        
        <!-- FAQ Item 5 -->
        <div class="blur-card p-6 hover:bg-white/5 transition-colors faq-item">
          <button class="flex items-center justify-between w-full text-left focus:outline-none" onclick="toggleFAQ(this)">
            <h3 class="text-lg font-medium">What should I do if I see concerning content?</h3>
            <i class="fas fa-chevron-down text-purple-400 faq-icon"></i>
          </button>
          <div class="faq-content mt-2">
            <p class="text-gray-400">If you see content that's concerning or violates our guidelines, please use the "Report" button. Our team reviews all reports promptly. If someone seems in immediate danger, we encourage you to contact local emergency services.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-20 relative z-10">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="blur-card p-12 text-center overflow-hidden relative">
        <!-- Glowing backgrounds -->
        <div class="absolute -top-32 -right-32 w-64 h-64 rounded-full bg-purple-500/20 blur-3xl"></div>
        <div class="absolute -bottom-32 -left-32 w-64 h-64 rounded-full bg-pink-500/20 blur-3xl"></div>
        
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to <span class="gradient-text">free your mind?</span></h2>
        <p class="text-gray-300 text-lg mb-8 max-w-xl mx-auto">
          Join thousands of people who have found relief by sharing their untold stories anonymously.
        </p>
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
          <button class="gradient-btn py-3 px-8 rounded-lg font-medium text-white shadow-lg flex items-center justify-center group">
            <i class="fas fa-feather-alt mr-2 group-hover:animate-pulse"></i> 
            <span>Share Your First Secret</span>
          </button>
          <button class="py-3 px-8 rounded-lg font-medium border border-white/10 hover:bg-white/5 transition flex items-center justify-center">
            <i class="fas fa-book-open mr-2"></i> 
            <span>Read Confessions</span>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-12 border-t border-white/10 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
        <div>
          <h3 class="text-lg font-bold mb-4 gradient-text">SilentSoul</h3>
          <p class="text-gray-400 text-sm">A safe space for sharing secrets, confessions, and connecting with others who understand.</p>
          <div class="mt-4 flex space-x-4">
            <a href="#" class="text-gray-400 hover:text-white transition-colors">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition-colors">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition-colors">
              <i class="fab fa-tiktok"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition-colors">
              <i class="fab fa-reddit"></i>
            </a>
          </div>
        </div>
        
        <div>
          <h3 class="text-lg font-bold mb-4">Explore</h3>
          <ul class="space-y-2 text-sm">
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Trending</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Categories</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Recent</a></li>
          </ul>
        </div>
        
        <div>
          <h3 class="text-lg font-bold mb-4">Support</h3>
          <ul class="space-y-2 text-sm">
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Help Center</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Community Guidelines</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Mental Health Resources</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Report a Problem</a></li>
          </ul>
        </div>
        
        <div>
          <h3 class="text-lg font-bold mb-4">Legal</h3>
          <ul class="space-y-2 text-sm">
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Terms of Service</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Content Policy</a></li>
            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Cookie Policy</a></li>
          </ul>
        </div>
      </div>
      
      <div class="pt-8 border-t border-white/10 text-center">
        <p class="text-gray-500 text-sm">© 2025 SilentSoul. All rights reserved.</p>
        <p class="text-gray-600 text-xs mt-2">Your safe space for sharing, healing, and connecting.</p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="../../script/js/home.script.js">
    
  </script>
</body>
</html>