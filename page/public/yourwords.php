<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confession Comments</title>
      <link rel="icon" type="image/png" href="../../assets/logo/logo-one-2.png">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../script/css/yourwords.style.css">
</head>
<body class="min-h-screen  text-white overflow-x-hidden">
   


    <!-- Header -->
   <?php include('../../components/common/header.php') ?>

    <!-- Main Content -->
    <div class="relative z-10 px-6 pb-20 mt-32">
        <div class="max-w-4xl mx-auto">
            <!-- Original Confession -->
            <div class="blur-card  mb-8">
                <div class=" p-8">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-xl font-bold">
                            A
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg">Anonymous</h3>
                            <p class="text-sm text-gray-400">2 hours ago</p>
                        </div>
                    </div>
                    <p class="text-gray-200 leading-relaxed text-lg">
                        I've been pretending to be happy at work for months, but I'm actually struggling with anxiety and depression. Everyone thinks I'm the most positive person in the office, but inside I'm falling apart. I don't know how much longer I can keep up this facade.
                    </p>
                    <div class="flex items-center gap-6 mt-6 pt-4 border-t border-white/10">
                        <button class="flex items-center gap-2 text-gray-400 hover:text-purple-400 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 000-6.364 4.5 4.5 0 00-6.364 0L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                            <span>124</span>
                        </button>
                        <button class="flex items-center gap-2 text-gray-400 hover:text-blue-400 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-3.582 8-8 8a8.955 8.955 0 01-4.906-1.476l-3.155 1.017a.93.93 0 01-1.177-.823.93.93 0 01.145-.603l1.106-2.076A8 8 0 1121 12z"></path>
                            </svg>
                            <span>47 Comments</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Comment Input -->
            <div class="glass-dark rounded-2xl p-6 mb-8">
                <div class="flex gap-4">
                    <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full flex items-center justify-center text-sm font-bold">
                        U
                    </div>
                    <div class="flex-1">
                        <textarea 
                            id="mainComment"
                            placeholder="Share your thoughts or support..."
                            class="w-full bg-[rgba(0, 0, 0, 0.2)] border border-white/10 rounded-xl p-4 text-white placeholder-gray-400 resize-none focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300"
                            rows="3"
                        ></textarea>
                        <div class="flex justify-between items-center mt-4">
                            <div class="flex items-center gap-4">
                                <button class="text-gray-400 hover:text-purple-400 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2h4a1 1 0 110 2h-1v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6H3a1 1 0 110-2h4z"></path>
                                    </svg>
                                </button>
                                <span class="text-sm text-gray-400">Stay anonymous</span>
                            </div>
                            <button 
                                onclick="postComment()"
                                class="bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 px-6 py-2 rounded-xl font-medium transition-all duration-300 transform hover:scale-105"
                            >
                                Post Comment
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comments List -->
            <div id="commentsList" class="space-y-6">
                <!-- Sample Comments will be loaded here -->
            </div>
        </div>
    </div>

    <script src="../../script/js/yourwords.script.js">
      
    </script>
</body>
</html>