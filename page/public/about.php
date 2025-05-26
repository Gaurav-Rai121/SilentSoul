<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - SilentSoul</title>
     <link rel="icon" type="image/png" href="../../assets/logo/logo-one-2.png">
    <script src="https://cdn.tailwindcss.com"></script>

      <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="../../script/css/about.style.css">
</head>

<body class="bg-slate-900 min-h-screen text-white overflow-x-hidden relative">
    <!-- Particle System -->
    <div class="particles" id="particles"></div>

    <!-- Advanced Background -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-purple-900/30 to-slate-900"></div>

        <!-- Morphing Blobs -->
        <div class="morphing-blob absolute top-10 left-10 w-96 h-96 floating"></div>
        <div class="morphing-blob absolute bottom-20 right-10 w-[500px] h-[500px] floating"
            style="animation-delay: -4s;"></div>
        <div class="morphing-blob absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 floating"
            style="animation-delay: -8s;"></div>

        <!-- Grid Pattern -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=" 60" height="60" viewBox="0 0 60 60"
            xmlns="http://www.w3.org/2000/svg" %3E%3Cg fill="none" fill-rule="evenodd" %3E%3Cg fill="%23ffffff"
            fill-opacity="0.02" %3E%3Ccircle cx="30" cy="30" r="1" /%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
    </div>

    <!-- Navigation -->
      <?php include('../../components/common/header.php') ?>

    <!-- Hero Section -->
    <section class="relative z-10 py-20 px-6">
        <div class="max-w-5xl mx-auto text-center">
            <div class="scroll-reveal">
                <h1 class="text-7xl md:text-8xl font-black mb-8 leading-tight">
                    About <span class="gradient-text scramble">SilentSoul</span>
                </h1>
            </div>
            <div class="scroll-reveal">
                <p class="text-2xl md:text-3xl text-gray-300 mb-12 font-light leading-relaxed">
                    A <span class="text-purple-400 font-semibold">quantum sanctuary</span> for your innermost
                    thoughts<br />
                    and <span class="text-blue-400 font-semibold">untold digital stories</span>
                </p>
            </div>
            <div class="scroll-reveal">
                <div class="w-32 h-1 bg-gradient-to-r from-purple-500 via-blue-500 to-pink-500 mx-auto rounded-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="relative z-10 py-16 px-6">
        <div class="max-w-7xl mx-auto">
            <!-- Our Story - Enhanced Layout -->
            <div class="grid lg:grid-cols-2 gap-20 items-center mb-32">
                <div class="scroll-reveal">
                    <div class="glass-dark rounded-3xl p-12 card-3d">
                        <h2 class="text-5xl font-bold mb-8 gradient-text">Our Digital Genesis</h2>
                        <div class="space-y-6 text-gray-300 text-lg leading-relaxed">
                            <p class="border-l-4 border-purple-500 pl-6">
                                SilentSoul emerged from the digital void—a revolutionary understanding that in our
                                hyperconnected world, the most profound stories remain <span
                                    class="text-purple-400 font-semibold">unspoken</span>.
                            </p>
                            <p>
                                We engineered this platform as a <span class="mono text-cyan-400">quantum
                                    sanctuary</span> where anonymity transcends into authenticity, where your encrypted
                                confessions find their voice without the fear of digital judgment.
                            </p>
                            <p class="text-sm mono text-gray-500 bg-slate-800/50 p-4 rounded-lg border border-gray-700">
                                console.log("Your secrets are safe in our encrypted realm");
                            </p>
                        </div>
                    </div>
                </div>

                <div class="scroll-reveal">
                    <div class="relative">
                        <!-- Floating Stats Card -->
                        <div class="glass neon-purple rounded-3xl p-10 card-3d">
                            <div class="text-center">
                                <div
                                    class="w-24 h-24 bg-gradient-to-br from-purple-500 to-blue-500 rounded-2xl mx-auto mb-8 flex items-center justify-center neon-purple">
                                    <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                                    </svg>
                                </div>
                                <h3 class="text-4xl font-black mb-4 counter gradient-text">50,000+</h3>
                                <p class="text-gray-400 text-lg">Anonymous Souls Connected</p>
                                <div class="mt-6 flex justify-center space-x-4">
                                    <div class="w-3 h-3 bg-purple-500 rounded-full animate-pulse"></div>
                                    <div class="w-3 h-3 bg-blue-500 rounded-full animate-pulse"
                                        style="animation-delay: 0.2s;"></div>
                                    <div class="w-3 h-3 bg-pink-500 rounded-full animate-pulse"
                                        style="animation-delay: 0.4s;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mission Statement - Redesigned -->
            <div class="text-center mb-32 scroll-reveal">
                <div class="max-w-5xl mx-auto">
                    <h2 class="text-5xl font-bold mb-12 gradient-text">Our Quantum Mission</h2>
                    <div class="glass-dark rounded-3xl p-16 border-2 border-purple-500/20 card-3d neon-purple">
                        <div class="mono text-sm text-gray-500 mb-6">// Mission Statement v2.0</div>
                        <blockquote class="text-3xl text-gray-100 leading-relaxed font-light italic mb-8">
                            "To architect a <span class="gradient-text font-semibold">judgment-free metaverse</span>
                            where authentic digital souls can share their encrypted essence, discover healing through
                            anonymous expression, and realize they're part of a vast, connected consciousness."
                        </blockquote>
                        <div class="flex justify-center items-center space-x-4">
                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                            <div class="mono text-cyan-400">AUTHENTICATED</div>
                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                            <div class="mono text-pink-400">ENCRYPTED</div>
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                            <div class="mono text-green-400">SECURE</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Values Grid - Enhanced -->
            <div class="grid lg:grid-cols-3 gap-8 mb-32">
                <div
                    class="card-3d glass-dark rounded-3xl p-10 border border-purple-500/20 scroll-reveal neon-purple group">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-700 rounded-3xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-6 gradient-text">Quantum Privacy</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">Your digital identity is quantum-encrypted. We deploy
                        military-grade encryption protocols and never store personal metadata.</p>
                    <div class="mono text-xs text-gray-500 bg-slate-800/50 p-3 rounded border border-gray-700">
                        AES-256 | Zero-Knowledge Architecture
                    </div>
                </div>

                <div
                    class="card-3d glass-dark rounded-3xl p-10 border border-blue-500/20 scroll-reveal neon-blue group">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-3xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-6 gradient-text">Neural Safe Space</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">AI-moderated environment with machine learning
                        algorithms ensuring zero harassment and maximum psychological safety.</p>
                    <div class="mono text-xs text-gray-500 bg-slate-800/50 p-3 rounded border border-gray-700">
                        ML-Powered | 24/7 Guardian AI
                    </div>
                </div>

                <div
                    class="card-3d glass-dark rounded-3xl p-10 border border-pink-500/20 scroll-reveal neon-pink group">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-pink-500 to-rose-500 rounded-3xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-6 gradient-text">Digital Empathy</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">Building neural connections through shared experiences
                        and algorithmic understanding, transcending traditional judgment.</p>
                    <div class="mono text-xs text-gray-500 bg-slate-800/50 p-3 rounded border border-gray-700">
                        Emotion AI | Empathy Protocols
                    </div>
                </div>
            </div>

            <!-- Community Stats - Futuristic Design -->
            <div class="glass-dark rounded-3xl p-16 border-2 border-purple-500/20 mb-32 scroll-reveal neon-purple">
                <h2 class="text-5xl font-bold text-center mb-4 gradient-text">Digital Consciousness Network</h2>
                <p class="text-center text-gray-400 mb-16 text-lg">Real-time metrics from our growing digital ecosystem
                </p>

                <div class="grid md:grid-cols-4 gap-12">
                    <div class="text-center group">
                        <div
                            class="bg-gradient-to-br from-purple-600/20 to-purple-400/20 rounded-2xl p-8 mb-4 group-hover:scale-105 transition-transform duration-300">
                            <div class="text-5xl font-black text-purple-400 mb-2 counter">50K+</div>
                            <div class="text-gray-400 text-lg">Digital Confessions</div>
                            <div class="mono text-xs text-purple-500 mt-2">ENCRYPTED_SOULS.DB</div>
                        </div>
                    </div>

                    <div class="text-center group">
                        <div
                            class="bg-gradient-to-br from-blue-600/20 to-blue-400/20 rounded-2xl p-8 mb-4 group-hover:scale-105 transition-transform duration-300">
                            <div class="text-5xl font-black text-blue-400 mb-2 counter">25K+</div>
                            <div class="text-gray-400 text-lg">Active Nodes</div>
                            <div class="mono text-xs text-blue-500 mt-2">NEURAL_NETWORK</div>
                        </div>
                    </div>

                    <div class="text-center group">
                        <div
                            class="bg-gradient-to-br from-pink-600/20 to-pink-400/20 rounded-2xl p-8 mb-4 group-hover:scale-105 transition-transform duration-300">
                            <div class="text-5xl font-black text-pink-400 mb-2 counter">100K+</div>
                            <div class="text-gray-400 text-lg">Empathy Signals</div>
                            <div class="mono text-xs text-pink-500 mt-2">SUPPORT_MATRIX</div>
                        </div>
                    </div>

                    <div class="text-center group">
                        <div
                            class="bg-gradient-to-br from-cyan-600/20 to-cyan-400/20 rounded-2xl p-8 mb-4 group-hover:scale-105 transition-transform duration-300">
                            <div class="text-5xl font-black text-cyan-400 mb-2 counter">∞</div>
                            <div class="text-gray-400 text-lg">Uptime</div>
                            <div class="mono text-xs text-cyan-500 mt-2">QUANTUM_SHIELD</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to Action - Futuristic -->
            <div class="text-center scroll-reveal">
                <div class="glass-dark rounded-3xl p-16 border border-purple-500/20 neon-purple">
                    <h2 class="text-5xl font-bold mb-8 gradient-text">Initialize Your Digital Soul</h2>
                    <p class="text-xl text-gray-300 mb-12 max-w-3xl mx-auto leading-relaxed">
                        Join the quantum consciousness network where <span class="text-purple-400 font-semibold">50,000+
                            anonymous souls</span> have found digital peace. Your encrypted story matters in our neural
                        web.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                        <button
                            class="btn-futuristic px-12 py-5 rounded-2xl text-lg font-bold magnetic hover:scale-105 transition-all duration-300">
                            <span class="relative z-10">Deploy Confession.exe</span>
                        </button>

                        <div class="flex items-center space-x-3 text-gray-400">
                            <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                            <span class="mono text-sm">SYSTEM_READY</span>
                        </div>
                    </div>

                    <div class="mt-12 grid grid-cols-3 gap-8 text-sm mono text-gray-500">
                        <div>🔒 AES-256 Encrypted</div>
                        <div>🚀 Zero Latency</div>
                        <div>🌐 Global Network</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Footer -->
   <?php include('../../components/common/footer.php') ?>

    <script src="../../script/js/about.script.js">
 
    </script>
</body>

</html>