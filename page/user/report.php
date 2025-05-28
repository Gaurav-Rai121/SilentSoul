<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Content - Anonymous Confessions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                animation: {
                    'float': 'float 6s ease-in-out infinite',
                    'glow': 'glow 2s ease-in-out infinite alternate',
                    'slide-up': 'slideUp 0.6s ease-out',
                    'fade-in': 'fadeIn 0.8s ease-out',
                    'scale-in': 'scaleIn 0.5s ease-out',
                    'bounce-gentle': 'bounceGentle 2s infinite',
                },
                keyframes: {
                    float: {
                        '0%, 100%': {
                            transform: 'translateY(0px)'
                        },
                        '50%': {
                            transform: 'translateY(-20px)'
                        }
                    },
                    glow: {
                        '0%': {
                            boxShadow: '0 0 20px rgba(139, 92, 246, 0.3)'
                        },
                        '100%': {
                            boxShadow: '0 0 30px rgba(139, 92, 246, 0.6)'
                        }
                    },
                    slideUp: {
                        '0%': {
                            transform: 'translateY(30px)',
                            opacity: '0'
                        },
                        '100%': {
                            transform: 'translateY(0)',
                            opacity: '1'
                        }
                    },
                    fadeIn: {
                        '0%': {
                            opacity: '0'
                        },
                        '100%': {
                            opacity: '1'
                        }
                    },
                    scaleIn: {
                        '0%': {
                            transform: 'scale(0.9)',
                            opacity: '0'
                        },
                        '100%': {
                            transform: 'scale(1)',
                            opacity: '1'
                        }
                    },
                    bounceGentle: {
                        '0%, 100%': {
                            transform: 'translateY(0)'
                        },
                        '50%': {
                            transform: 'translateY(-5px)'
                        }
                    }
                }
            }
        }
    }
    </script>
    <style>
    body {
        font-family: 'Inter', system-ui, -apple-system, sans-serif;
        background: radial-gradient(circle at 10% 20%, rgb(21, 21, 21) 0%, rgb(5, 5, 19) 90.2%);
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .neon-border {
        box-shadow: 0 0 20px rgba(139, 92, 246, 0.3);
        border: 1px solid rgba(139, 92, 246, 0.5);
    }

    .gradient-text {
        background: linear-gradient(135deg, #8b5cf6, #ec4899, #06b6d4);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .floating-orb {
        position: absolute;
        border-radius: 50%;
        filter: blur(40px);
        opacity: 0.6;
        animation: float 8s ease-in-out infinite;
    }

    .card-hover {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(139, 92, 246, 0.2);
    }

    .step-indicator {
        background: linear-gradient(135deg, rgba(139, 92, 246, 0.2), rgba(236, 72, 153, 0.2));
    }

    .step-active {
        background: linear-gradient(135deg, #8b5cf6, #ec4899);
        box-shadow: 0 0 20px rgba(139, 92, 246, 0.5);
    }

    .custom-input {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: white;
        transition: all 0.3s ease;
    }

    .custom-input:focus {
        background: rgba(255, 255, 255, 0.08);
        border-color: #8b5cf6;
        box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.1);
        outline: none;
    }

    .custom-input::placeholder {
        color: rgba(255, 255, 255, 0.4);
    }

    .report-option {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
    }

    .report-option:hover {
        background: rgba(255, 255, 255, 0.08);
        border-color: rgba(139, 92, 246, 0.5);
        transform: translateY(-2px);
    }

    .report-option.selected {
        background: rgba(139, 92, 246, 0.1);
        border-color: #8b5cf6;
        box-shadow: 0 0 20px rgba(139, 92, 246, 0.3);
    }
    </style>
</head>

<body class="min-h-screen text-white relative overflow-x-hidden">
    <!-- Floating Background Elements -->
    <!-- <div class="fixed inset-0 pointer-events-none">
        <div class="floating-orb w-96 h-96 bg-purple-500 top-10 -left-48" style="animation-delay: 0s;"></div>
        <div class="floating-orb w-64 h-64 bg-pink-500 top-1/2 -right-32" style="animation-delay: 2s;"></div>
        <div class="floating-orb w-80 h-80 bg-blue-500 bottom-10 left-1/4" style="animation-delay: 4s;"></div>
    </div> -->

    <!-- Header -->
    <header class="relative z-10 glass-card border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <div class="w-12 h-12 glass-card rounded-2xl flex items-center justify-center neon-border">
                        <span class="text-2xl">🔒</span>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold gradient-text">Anonymous Confessions</h1>
                        <p class="text-xs text-gray-400">Secure Reporting</p>
                    </div>
                </div>
                <nav class="hidden md:flex items-center space-x-6">
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">Home</a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">Guidelines</a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">Support</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Hero Section -->
        <div class="text-center mb-12 animate-fade-in">
            <div
                class="inline-flex items-center justify-center w-24 h-24 glass-card rounded-3xl neon-border mb-6 animate-bounce-gentle">
                <svg class="w-12 h-12 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                </svg>
            </div>
            <h1 class="text-5xl md:text-7xl font-bold mb-6">
                <span class="gradient-text">Secure</span> Reporting
            </h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto mb-8">
                Help us maintain a safe community through confidential content reporting
            </p>


        </div>

        <!-- Report Interface -->
        <div class="max-w-4xl mx-auto">
            <form action="">
                <div class="glass-card rounded-3xl p-8 mb-8 animate-slide-up">
                    <div class="flex items-center space-x-4 mb-8">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold gradient-text">Content Reference</h2>
                            <p class="text-gray-400">Provide the confession ID or URL</p>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-3">
                                Confession Identifier
                            </label>
                            <input type="text" id="confessionId" placeholder="CONF-123456 or paste full URL"
                                class="w-full px-6 py-4 rounded-2xl custom-input text-lg">
                            <p class="text-xs text-gray-500 mt-2 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Find this at the bottom of each confession or in the browser URL
                            </p>
                        </div>


                    </div>
                </div>

                <div class="glass-card rounded-3xl p-8 mb-8  animate-slide-up">
                    <div class="flex items-center space-x-4 mb-8">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-pink-500 to-red-500 rounded-2xl flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold gradient-text">Issue Category</h2>
                            <p class="text-gray-400">Select the type of concern</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                        <div class="report-option p-6 rounded-2xl cursor-pointer card-hover" data-category="harassment">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-red-500/20 rounded-2xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-white mb-1">Harassment</h3>
                                    <p class="text-sm text-gray-400">Bullying, threats, or targeting behavior</p>
                                </div>
                            </div>
                        </div>

                        <div class="report-option p-6 rounded-2xl cursor-pointer card-hover"
                            data-category="hate-speech">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-orange-500/20 rounded-2xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728L5.636 5.636" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-white mb-1">Hate Speech</h3>
                                    <p class="text-sm text-gray-400">Discriminatory or hateful content</p>
                                </div>
                            </div>
                        </div>

                        <div class="report-option p-6 rounded-2xl cursor-pointer card-hover"
                            data-category="inappropriate">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-purple-500/20 rounded-2xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-white mb-1">Inappropriate Content</h3>
                                    <p class="text-sm text-gray-400">Adult or disturbing material</p>
                                </div>
                            </div>
                        </div>

                        <div class="report-option p-6 rounded-2xl cursor-pointer card-hover" data-category="spam">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-yellow-500/20 rounded-2xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-white mb-1">Spam/Fake</h3>
                                    <p class="text-sm text-gray-400">Repetitive or misleading content</p>
                                </div>
                            </div>
                        </div>

                        <div class="report-option p-6 rounded-2xl cursor-pointer card-hover" data-category="privacy">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-blue-500/20 rounded-2xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-white mb-1">Privacy Violation</h3>
                                    <p class="text-sm text-gray-400">Unauthorized personal information</p>
                                </div>
                            </div>
                        </div>

                        <div class="report-option p-6 rounded-2xl cursor-pointer card-hover" data-category="other">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-gray-500/20 rounded-2xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-white mb-1">Other Issues</h3>
                                    <p class="text-sm text-gray-400">Something else concerns you</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="glass-card rounded-3xl p-8 mb-8 animate-slide-up">
                    <div class="flex items-center space-x-4 mb-8">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-red-500 to-pink-500 rounded-2xl flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold gradient-text">Additional Context</h2>
                            <p class="text-gray-400">Help us understand the situation</p>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-3">
                                Detailed Explanation
                            </label>
                            <textarea id="details" rows="6"
                                placeholder="Please describe the issue in detail. What specifically concerns you about this content?"
                                class="w-full px-6 py-4 rounded-2xl custom-input resize-none"></textarea>
                            <div class="flex justify-between items-center mt-2">
                                <p class="text-xs text-gray-500">Optional but helpful for our review</p>
                                <span id="charCount" class="text-xs text-gray-500">0/1000</span>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-3">
                                Contact Email <span class="text-gray-500">(Optional)</span>
                            </label>
                            <input type="email" id="contactEmail" placeholder="your.email@example.com"
                                class="w-full px-6 py-4 rounded-2xl custom-input">
                            <p class="text-xs text-gray-500 mt-2">We may contact you for follow-up if needed</p>
                        </div>

                        <div class="flex justify-between pt-4">


                        </div>
                    </div>
                </div>
                <div class="justify-items-start">
                    <button
                        class=" bg-gradient-to-r from-red-600 to-pink-600 hover:from-red-700 hover:to-pink-700 px-8 py-3 rounded-2xl font-medium transition-all duration-300 transform hover:scale-105">
                        Submit Report
                    </button>
                </div>
            </form>
        </div>

        <!-- Community Resources -->
        <div class="max-w-4xl mx-auto mt-12">
            <div class="glass-card rounded-3xl p-8 text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-green-500/20 rounded-3xl mb-6">
                    <svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold gradient-text mb-4">Community Support Resources</h2>
                <p class="text-gray-300 mb-6">If you need immediate support or crisis assistance</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="glass-card p-4 rounded-2xl">
                        <h3 class="font-semibold text-white mb-2">Crisis Text Line</h3>
                        <p class="text-gray-300 text-sm">Text HOME to 741741</p>
                    </div>
                    <div class="glass-card p-4 rounded-2xl">
                        <h3 class="font-semibold text-white mb-2">Suicide Prevention</h3>
                        <p class="text-gray-300 text-sm">Call or Text 988</p>
                    </div>
                    <div class="glass-card p-4 rounded-2xl">
                        <h3 class="font-semibold text-white mb-2">Emergency</h3>
                        <p class="text-gray-300 text-sm">Call 911</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Success Modal -->
    <div id="successModal"
        class="fixed inset-0 bg-black/70 backdrop-blur-sm flex items-center justify-center z-50 hidden">
        <div class="glass-card rounded-3xl max-w-md mx-4 p-8 animate-scale-in">
            <div class="text-center">
                <div class="w-20 h-20 bg-green-500/20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold gradient-text mb-4">Report Submitted</h3>
                <p class="text-gray-300 mb-6">Thank you for helping keep our community safe. We'll review your report
                    within 24-48 hours.</p>
                <button onclick="closeModal()"
                    class="bg-gradient-to-r from-purple-600 to-pink-600 text-white font-medium py-3 px-6 rounded-2xl hover:from-purple-700 hover:to-pink-700 transition-all duration-300">
                    Done
                </button>
            </div>
        </div>
    </div>

    <script>


   
    </script>