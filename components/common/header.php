<script>
tailwind.config = {
    theme: {
        extend: {
            animation: {
                'float': 'float 3s ease-in-out infinite',
                'glow': 'glow 2s ease-in-out infinite alternate',
                'slideDown': 'slideDown 0.3s ease-out',
                'fadeIn': 'fadeIn 0.2s ease-out'
            },
            keyframes: {
                float: {
                    '0%, 100%': {
                        transform: 'translateY(0px)'
                    },
                    '50%': {
                        transform: 'translateY(-5px)'
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
                slideDown: {
                    '0%': {
                        transform: 'translateY(-10px)',
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
                }
            }
        }
    }
}
</script>
<style>
.glass-effect {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.nav-link {
    position: relative;
    overflow: hidden;
}

.nav-link::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 2px;
    background: linear-gradient(90deg, #8b5cf6, #06b6d4);
    transition: all 0.3s ease;
    transform: translateX(-50%);
}

.nav-link:hover::before {
    width: 100%;
}

.profile-avatar {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.dropdown-menu {
    background: rgba(17, 24, 39, 0.95);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(75, 85, 99, 0.3);
}
</style>
</head>

<body class="">
    <!-- Background Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div
            class="absolute top-1/4 left-1/4 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-float">
        </div>
        <div class="absolute top-3/4 right-1/4 w-96 h-96 bg-cyan-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-float"
            style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 w-96 h-96 bg-pink-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-float"
            style="animation-delay: 2s;"></div>
    </div>

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 z-50 p-4">
        <div class="max-w-7xl mx-auto">
            <div class="glass-effect rounded-2xl px-6 py-4 animate-slideDown">
                <div class="flex items-center justify-between">
                    <!-- Logo -->
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 flex items-center justify-center ">
                            <img src="../../assets/logo/logo-one-2.png" alt="">
                        </div>
                        <span
                            class="text-2xl font-bold bg-gradient-to-r from-purple-400 to-cyan-400 bg-clip-text text-transparent">
                            SilentSoul
                        </span>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="../../page/public/home.php"
                            class="nav-link flex items-center space-x-2 text-white hover:text-purple-300 transition-colors duration-300 py-2 px-3 rounded-lg hover:bg-white/10">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            <span class="font-medium">Home</span>
                        </a>

                        <a href="../../page/public/confessions.php"
                            class="nav-link flex items-center space-x-2 text-white hover:text-purple-300 transition-colors duration-300 py-2 px-3 rounded-lg hover:bg-white/10">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                </path>
                            </svg>
                            <span class="font-medium">Confessions</span>
                        </a>

                        <a href="#trending"
                            class="nav-link flex items-center space-x-2 text-white hover:text-purple-300 transition-colors duration-300 py-2 px-3 rounded-lg hover:bg-white/10">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                            <span class="font-medium">Trending</span>
                        </a>

                        <a href="../../page/public/about.php"
                            class="nav-link flex items-center space-x-2 text-white hover:text-purple-300 transition-colors duration-300 py-2 px-3 rounded-lg hover:bg-white/10">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="font-medium">About</span>
                        </a>

                        <a href="../../page/public/contact.php"
                            class="nav-link flex items-center space-x-2 text-white hover:text-purple-300 transition-colors duration-300 py-2 px-3 rounded-lg hover:bg-white/10">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span class="font-medium">Contact</span>
                        </a>
                    </div>

                    <!-- Profile Section -->
                    <div class="relative">
                        <button id="profileButton"
                            class="profile-avatar w-12 h-12 rounded-full flex items-center justify-center text-white font-semibold text-lg hover:scale-110 transition-transform duration-300 shadow-lg hover:shadow-purple-500/50">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                alt="Profile" class="w-full h-full rounded-full object-cover border-2 border-white/30">
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="profileDropdown"
                            class="dropdown-menu absolute right-0 mt-3 w-64 rounded-2xl shadow-2xl opacity-0 invisible transform translate-y-2 transition-all duration-300 ease-out">
                            <div class="p-4 border-b border-gray-600/30">
                                <div class="flex items-center space-x-3">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                        alt="Profile" class="w-12 h-12 rounded-full object-cover">
                                    <div>
                                        <p class="text-white font-medium">John Doe</p>
                                        <p class="text-gray-400 text-sm">john@example.com</p>
                                    </div>
                                </div>
                            </div>

                            <div class="p-2">
                                <a href="../../page/user/profile.php"
                                    class="flex items-center space-x-3 px-4 py-3 text-gray-300 hover:text-white hover:bg-white/10 rounded-xl transition-colors duration-200">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                        </path>
                                    </svg>
                                    <span>Profile</span>
                                </a>

                                <a href="#saved"
                                    class="flex items-center space-x-3 px-4 py-3 text-gray-300 hover:text-white hover:bg-white/10 rounded-xl transition-colors duration-200">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                                    </svg>
                                    <span>Saved</span>
                                </a>

                                <a href="../../page/user/setting.php"
                                    class="flex items-center space-x-3 px-4 py-3 text-gray-300 hover:text-white hover:bg-white/10 rounded-xl transition-colors duration-200">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.983 5.917a1 1 0 01.034-1.81l.018-.007a9.01 9.01 0 012.09-.472 1 1 0 01.991.868l.06.527a7.99 7.99 0 011.584.676l.468-.468a1 1 0 011.415 0l1.414 1.414a1 1 0 010 1.415l-.468.468a7.99 7.99 0 01.676 1.584l.527.06a1 1 0 01.868.991 9.01 9.01 0 01-.472 2.09l-.007.018a1 1 0 01-1.81.034l-.06-.528a7.99 7.99 0 01-1.584-.676l-.468.468a1 1 0 01-1.415 0l-1.414-1.414a1 1 0 010-1.415l.468-.468a7.99 7.99 0 01-.676-1.584l-.527-.06zm.017 6.083a2 2 0 104 0 2 2 0 00-4 0z" />
</svg>


                                    <span>Setting</span>
                                </a>

                                <a href=" ../../page/user/userconfession.php"
                                            class="flex items-center space-x-3 px-4 py-3 text-gray-300 hover:text-white hover:bg-white/10 rounded-xl transition-colors duration-200">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                </path>
                                            </svg>
                                            <span>My Confessions</span>
                                </a>
                            </div>

                            <div class="p-2 border-t border-gray-600/30">
                                <button
                                    class="flex items-center space-x-3 px-4 py-3 text-red-400 hover:text-red-300 hover:bg-red-500/10 rounded-xl transition-colors duration-200 w-full">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                        </path>
                                    </svg>
                                    <span>Logout</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button id="mobileMenuButton"
                        class="md:hidden text-white hover:text-purple-300 transition-colors duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu -->
                <div id="mobileMenu"
                    class="md:hidden mt-4 opacity-0 invisible transform -translate-y-4 transition-all duration-300 ease-out">
                    <div class="flex flex-col space-y-2 pt-4 border-t border-white/20">
                        <a href="../../page/public/home.php"
                            class="flex items-center space-x-3 text-white hover:text-purple-300 transition-colors duration-300 py-3 px-4 rounded-lg hover:bg-white/10">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            <span>Home</span>
                        </a>
                        <a href="../../page/public/confessions.php"
                            class="flex items-center space-x-3 text-white hover:text-purple-300 transition-colors duration-300 py-3 px-4 rounded-lg hover:bg-white/10">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                </path>
                            </svg>
                            <span>Confessions</span>
                        </a>
                        <!-- <a href="#" class="flex items-center space-x-3 text-white hover:text-purple-300 transition-colors duration-300 py-3 px-4 rounded-lg hover:bg-white/10">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                            <span>Trending</span>
                        </a> -->
                        <a href="../../page/public/about.php"
                            class="flex items-center space-x-3 text-white hover:text-purple-300 transition-colors duration-300 py-3 px-4 rounded-lg hover:bg-white/10">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>About</span>
                        </a>
                        <a href="../../page/public/contact.php"
                            class="flex items-center space-x-3 text-white hover:text-purple-300 transition-colors duration-300 py-3 px-4 rounded-lg hover:bg-white/10">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span>Contact</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <!-- <main class="pt-32 px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center">
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6">
                    Welcome to
                    <span class="bg-gradient-to-r from-purple-400 via-pink-400 to-cyan-400 bg-clip-text text-transparent animate-glow">
                        ConfessHub
                    </span>
                </h1>
                <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                    A modern, creative navbar with glassmorphism effects, smooth animations, and elegant interactions.
                </p>
                <div class="glass-effect inline-block px-8 py-4 rounded-2xl">
                    <p class="text-purple-300">✨ Click on the profile avatar to see the dropdown menu in action!</p>
                </div>
            </div>
        </div>
    </main> -->

    <script>
    // Profile dropdown functionality
    const profileButton = document.getElementById('profileButton');
    const profileDropdown = document.getElementById('profileDropdown');
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    let isProfileOpen = false;
    let isMobileMenuOpen = false;

    profileButton.addEventListener('click', (e) => {
        e.stopPropagation();
        isProfileOpen = !isProfileOpen;

        if (isProfileOpen) {
            profileDropdown.classList.remove('opacity-0', 'invisible', 'translate-y-2');
            profileDropdown.classList.add('opacity-100', 'visible', 'translate-y-0');
        } else {
            profileDropdown.classList.add('opacity-0', 'invisible', 'translate-y-2');
            profileDropdown.classList.remove('opacity-100', 'visible', 'translate-y-0');
        }
    });

    // Mobile menu functionality
    mobileMenuButton.addEventListener('click', (e) => {
        e.stopPropagation();
        isMobileMenuOpen = !isMobileMenuOpen;

        if (isMobileMenuOpen) {
            mobileMenu.classList.remove('opacity-0', 'invisible', '-translate-y-4');
            mobileMenu.classList.add('opacity-100', 'visible', 'translate-y-0');
        } else {
            mobileMenu.classList.add('opacity-0', 'invisible', '-translate-y-4');
            mobileMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
        }
    });

    // Close dropdowns when clicking outside
    document.addEventListener('click', () => {
        if (isProfileOpen) {
            profileDropdown.classList.add('opacity-0', 'invisible', 'translate-y-2');
            profileDropdown.classList.remove('opacity-100', 'visible', 'translate-y-0');
            isProfileOpen = false;
        }

        if (isMobileMenuOpen) {
            mobileMenu.classList.add('opacity-0', 'invisible', '-translate-y-4');
            mobileMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
            isMobileMenuOpen = false;
        }
    });

    // Prevent dropdown from closing when clicking inside it
    profileDropdown.addEventListener('click', (e) => {
        e.stopPropagation();
    });

    mobileMenu.addEventListener('click', (e) => {
        e.stopPropagation();
    });

    // Add smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const target = document.querySelector(link.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Add navbar blur effect on scroll
    window.addEventListener('scroll', () => {
        const navbar = document.querySelector('nav');
        if (window.scrollY > 50) {
            navbar.style.backdropFilter = 'blur(30px)';
        } else {
            navbar.style.backdropFilter = 'blur(20px)';
        }
    });
    </script>