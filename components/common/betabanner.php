<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confess • Beta</title>
    <script src="https://cdn.tailwindcss.com"></script>
   <link rel="stylesheet" href="../../script/css/betabanner.style.css">
</head>

<body class="">
    <!-- Modern Beta Banner -->
    <div class="main">
        <div id="betaBanner" class="beta-banner">
            <div class="glassmorphism border-b border-white/20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between py-3">
                        <!-- Left Section - Beta Info -->
                        <div class="flex items-center space-x-4">
                            <div class="floating">
                                <div class="w-3 h-3 bg-emerald-400 rounded-full pulse-glow"></div>
                            </div>
                            <div class="slide-in">
                                <div class="flex items-center space-x-2">
                                    <span
                                        class="px-2 py-1 text-xs font-semibold bg-gradient-to-r from-violet-500 to-purple-500 rounded-full">
                                        BETA
                                    </span>
                                    <span class="text-sm font-medium">
                                        You're experiencing the future of confessions
                                    </span>
                                </div>
                                <p class="text-xs text-white/70 mt-1">
                                    Help us improve with your valuable feedback
                                </p>
                            </div>
                        </div>

                        <!-- Right Section - Actions -->
                        <div class="flex items-center space-x-3">
                            <button onclick="openFeedbackForm()"
                                class="feedback-btn px-4 py-2 text-sm font-medium text-white rounded-lg flex items-center space-x-2 shadow-lg">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                    </path>
                                </svg>
                                <span>Share Feedback</span>
                            </button>

                            <button onclick="hideBanner()"
                                class="close-btn p-2 text-white/60 hover:text-white hover:bg-white/10 rounded-lg">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Feedback Modal -->
        <div id="feedbackModal"
            class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden items-center justify-center p-4">
            <div class="glassmorphism rounded-2xl p-6 max-w-md w-full transform transition-all duration-300 scale-95"
                id="modalContent">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold">Share Your Feedback</h3>
                    <button onclick="closeFeedbackModal()" class="close-btn p-1 text-white/60 hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>

                <p class="text-white/70 text-sm mb-6">
                    Your feedback helps us build a better platform for everyone. Choose how you'd like to share your
                    thoughts:
                </p>

                <div class="space-y-3">
                    <a href="mailto:feedback@confess.app?subject=Beta Feedback"
                        class="flex items-center justify-between p-3 glassmorphism rounded-lg hover:bg-white/20 transition-colors group">
                        <div class="flex items-center space-x-3">
                            <div
                                class="w-8 h-8 bg-gradient-to-br from-blue-500 to-purple-500 rounded-lg flex items-center justify-center">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium text-sm">Email Feedback</p>
                                <p class="text-xs text-white/60">Send us detailed feedback</p>
                            </div>
                        </div>
                        <svg class="w-4 h-4 text-white/40 group-hover:text-white transition-colors" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>

                    <a href="../../components/betaModeFeedbackForm/betaModeFeedbackForm.php" target="_blank"
                        class="flex items-center justify-between p-3 glassmorphism rounded-lg hover:bg-white/20 transition-colors group">
                        <div class="flex items-center space-x-3">
                            <div
                                class="w-8 h-8 bg-gradient-to-br from-green-500 to-teal-500 rounded-lg flex items-center justify-center">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium text-sm">Quick Survey</p>
                                <p class="text-xs text-white/60">5-minute feedback form</p>
                            </div>
                        </div>
                        <svg class="w-4 h-4 text-white/40 group-hover:text-white transition-colors" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <script src="../../script/js/batabanner.script.js">
   
    </script>
</body>

</html>