<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - Confessions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #0f0f23 0%, #1a1a2e 50%, #16213e 100%);
            min-height: 100vh;
        }
        
        .glass-card {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .setting-item {
            transition: all 0.3s ease;
        }
        
        .setting-item:hover {
            transform: translateY(-2px);
            background: rgba(255, 255, 255, 0.08);
        }
        
        .profile-avatar {
            background: linear-gradient(45deg, #667eea 0%, #764ba2 100%);
        }
        
        .nav-pill {
            transition: all 0.3s ease;
        }
        
        .nav-pill.active {
            background: linear-gradient(45deg, #667eea 0%, #764ba2 100%);
            transform: scale(1.05);
        }
        
        .input-field {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }
        
        .input-field:focus {
            background: rgba(255, 255, 255, 0.08);
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }
        
        .confession-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.02) 100%);
            border-left: 4px solid #667eea;
        }
        
        .floating-nav {
            position: fixed;
            top: 50%;
            right: 2rem;
            transform: translateY(-50%);
            z-index: 50;
        }
        
        @media (max-width: 1024px) {
            .floating-nav {
                position: static;
                transform: none;
            }
        }
    </style>
</head>
<body class="text-white">
    <!-- Header -->
    <header class="glass-card border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-gradient-to-r from-purple-500 to-blue-500 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"/>
                        </svg>
                    </div>
                    <h1 class="text-xl font-bold bg-gradient-to-r from-purple-400 to-blue-400 bg-clip-text text-transparent">
                        Confessions
                    </h1>
                </div>
                <nav class="hidden md:flex space-x-6">
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">Home</a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">Confessions</a>
                    <a href="#" class="text-purple-400 font-medium">Settings</a>
                </nav>
            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Sidebar Navigation -->
            <div class="lg:w-1/4">
                <div class="glass-card rounded-2xl p-6 sticky top-8">
                    <h2 class="text-lg font-semibold mb-6 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"/>
                        </svg>
                        Settings
                    </h2>
                    <nav class="space-y-2">
                        <button onclick="showSection('profile')" class="nav-pill active w-full text-left px-4 py-3 rounded-xl flex items-center space-x-3 transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/>
                            </svg>
                            <span>My Profile</span>
                        </button>
                        <button onclick="showSection('privacy')" class="nav-pill w-full text-left px-4 py-3 rounded-xl flex items-center space-x-3 text-gray-300 hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"/>
                            </svg>
                            <span>Privacy</span>
                        </button>
                        <button onclick="showSection('password')" class="nav-pill w-full text-left px-4 py-3 rounded-xl flex items-center space-x-3 text-gray-300 hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 8a6 6 0 01-7.743 5.743L10 14l-1 1-1 1H6v2H2v-4l4.257-4.257A6 6 0 1118 8zm-6-4a1 1 0 100 2 2 2 0 012 2 1 1 0 102 0 4 4 0 00-4-4z"/>
                            </svg>
                            <span>Password</span>
                        </button>
                        <button onclick="showSection('confessions')" class="nav-pill w-full text-left px-4 py-3 rounded-xl flex items-center space-x-3 text-gray-300 hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2v1a2 2 0 002 2h6a2 2 0 002-2V3a2 2 0 012 2v6.586l-1.293 1.293a1 1 0 01-1.414 0L15 12.586V5a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-1.586l2 2v2a4 4 0 01-4 4H7a4 4 0 01-4-4V5z"/>
                            </svg>
                            <span>My Confessions</span>
                        </button>
                        <button onclick="showSection('terms')" class="nav-pill w-full text-left px-4 py-3 rounded-xl flex items-center space-x-3 text-gray-300 hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"/>
                            </svg>
                            <span>Terms & Conditions</span>
                        </button>
                    </nav>
                </div>
            </div>

            <!-- Main Content -->
            <div class="lg:w-3/4">
                <!-- Profile Section -->
                <div id="profile-section" class="setting-section">
                    <div class="glass-card rounded-2xl p-8">
                        <div class="flex items-center space-x-4 mb-8">
                            <h2 class="text-2xl font-bold bg-gradient-to-r from-purple-400 to-blue-400 bg-clip-text text-transparent">
                                My Profile
                            </h2>
                        </div>

                        <!-- Profile Picture -->
                        <div class="flex items-center space-x-6 mb-8">
                            <div class="relative">
                                <div class="profile-avatar w-24 h-24 rounded-full flex items-center justify-center text-2xl font-bold">
                                    JD
                                </div>
                                <button class="absolute -bottom-2 -right-2 w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center hover:bg-purple-600 transition-colors">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                    </svg>
                                </button>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold">Profile Picture</h3>
                                <p class="text-gray-400 text-sm">Upload a new profile picture</p>
                                <button class="mt-2 px-4 py-2 bg-gradient-to-r from-purple-500 to-blue-500 rounded-lg text-sm font-medium hover:opacity-90 transition-opacity">
                                    Change Photo
                                </button>
                            </div>
                        </div>

                        <!-- Profile Form -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium mb-2">Display Name</label>
                                <input type="text" value="John Doe" class="input-field w-full px-4 py-3 rounded-xl text-white placeholder-gray-400 outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2">Username</label>
                                <input type="text" value="@johndoe" class="input-field w-full px-4 py-3 rounded-xl text-white placeholder-gray-400 outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2">Email</label>
                                <input type="email" value="john@example.com" class="input-field w-full px-4 py-3 rounded-xl text-white placeholder-gray-400 outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2">Phone</label>
                                <input type="tel" value="+1 (555) 123-4567" class="input-field w-full px-4 py-3 rounded-xl text-white placeholder-gray-400 outline-none">
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium mb-2">Bio</label>
                                <textarea rows="3" placeholder="Tell us about yourself..." class="input-field w-full px-4 py-3 rounded-xl text-white placeholder-gray-400 outline-none resize-none"></textarea>
                            </div>
                        </div>

                        <div class="flex justify-end mt-8">
                            <button class="px-6 py-3 bg-gradient-to-r from-purple-500 to-blue-500 rounded-xl font-medium hover:opacity-90 transition-opacity">
                                Save Changes
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Privacy Section -->
                <div id="privacy-section" class="setting-section hidden">
                    <div class="glass-card rounded-2xl p-8">
                        <h2 class="text-2xl font-bold bg-gradient-to-r from-purple-400 to-blue-400 bg-clip-text text-transparent mb-8">
                            Privacy Settings
                        </h2>

                        <div class="space-y-6">
                            <div class="setting-item p-6 rounded-xl border border-white/10">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h3 class="font-semibold">Anonymous Confessions</h3>
                                        <p class="text-gray-400 text-sm">Keep your confessions completely anonymous</p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" class="sr-only peer" checked>
                                        <div class="w-11 h-6 bg-gray-600 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-purple-500"></div>
                                    </label>
                                </div>
                            </div>

                            <div class="setting-item p-6 rounded-xl border border-white/10">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h3 class="font-semibold">Profile Visibility</h3>
                                        <p class="text-gray-400 text-sm">Who can see your profile information</p>
                                    </div>
                                    <select class="input-field px-4 py-2 rounded-lg text-white outline-none">
                                        <option value="public">Public</option>
                                        <option value="friends">Friends Only</option>
                                        <option value="private">Private</option>
                                    </select>
                                </div>
                            </div>

                            <div class="setting-item p-6 rounded-xl border border-white/10">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h3 class="font-semibold">Email Notifications</h3>
                                        <p class="text-gray-400 text-sm">Receive notifications via email</p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" class="sr-only peer">
                                        <div class="w-11 h-6 bg-gray-600 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-purple-500"></div>
                                    </label>
                                </div>
                            </div>

                            <div class="setting-item p-6 rounded-xl border border-white/10">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h3 class="font-semibold">Data Export</h3>
                                        <p class="text-gray-400 text-sm">Download all your confession data</p>
                                    </div>
                                    <button class="px-4 py-2 border border-purple-500 text-purple-400 rounded-lg hover:bg-purple-500 hover:text-white transition-colors">
                                        Export Data
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Password Section -->
                <div id="password-section" class="setting-section hidden">
                    <div class="glass-card rounded-2xl p-8">
                        <h2 class="text-2xl font-bold bg-gradient-to-r from-purple-400 to-blue-400 bg-clip-text text-transparent mb-8">
                            Update Password
                        </h2>

                        <div class="max-w-md space-y-6">
                            <div>
                                <label class="block text-sm font-medium mb-2">Current Password</label>
                                <input type="password" class="input-field w-full px-4 py-3 rounded-xl text-white placeholder-gray-400 outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2">New Password</label>
                                <input type="password" class="input-field w-full px-4 py-3 rounded-xl text-white placeholder-gray-400 outline-none">
                                <div class="mt-2 space-y-1">
                                    <div class="flex items-center space-x-2 text-sm">
                                        <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                                        <span class="text-gray-400">At least 8 characters</span>
                                    </div>
                                    <div class="flex items-center space-x-2 text-sm">
                                        <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                                        <span class="text-gray-400">Contains uppercase and lowercase</span>
                                    </div>
                                    <div class="flex items-center space-x-2 text-sm">
                                        <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                                        <span class="text-gray-400">Contains a number</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2">Confirm New Password</label>
                                <input type="password" class="input-field w-full px-4 py-3 rounded-xl text-white placeholder-gray-400 outline-none">
                            </div>
                            <button class="w-full py-3 bg-gradient-to-r from-purple-500 to-blue-500 rounded-xl font-medium hover:opacity-90 transition-opacity">
                                Update Password
                            </button>
                        </div>
                    </div>
                </div>

                <!-- My Confessions Section -->
                <div id="confessions-section" class="setting-section hidden">
                    <div class="glass-card rounded-2xl p-8">
                        <div class="flex items-center justify-between mb-8">
                            <h2 class="text-2xl font-bold bg-gradient-to-r from-purple-400 to-blue-400 bg-clip-text text-transparent">
                                My Confessions
                            </h2>
                            <div class="flex items-center space-x-4">
                                <select class="input-field px-4 py-2 rounded-lg text-white outline-none">
                                    <option>All Confessions</option>
                                    <option>Published</option>
                                    <option>Drafts</option>
                                </select>
                                <button class="px-4 py-2 bg-gradient-to-r from-purple-500 to-blue-500 rounded-lg font-medium hover:opacity-90 transition-opacity">
                                    New Confession
                                </button>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="confession-card p-6 rounded-xl backdrop-filter backdrop-blur-sm">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                        <span class="text-sm text-green-400">Published</span>
                                        <span class="text-sm text-gray-400">2 days ago</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <button class="p-2 hover:bg-white/10 rounded-lg transition-colors">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                            </svg>
                                        </button>
                                        <button class="p-2 hover:bg-white/10 rounded-lg transition-colors text-red-400">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <p class="text-gray-300 mb-4">I've been carrying this secret for years, and I finally feel ready to share it. Sometimes the weight of unspoken truths can be overwhelming...</p>
                                <div class="flex items-center space-x-4 text-sm text-gray-400">
                                    <span class="flex items-center space-x-1">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"/>
                                        </svg>
                                        <span>156 likes</span>
                                    </span>
                                    <span class="flex items-center space-x-1">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z"/>
                                        </svg>
                                        <span>23 comments</span>
                                    </span>
                                </div>
                            </div>

                            <div class="confession-card p-6 rounded-xl backdrop-filter backdrop-blur-sm">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                                        <span class="text-sm text-yellow-400">Draft</span>
                                        <span class="text-sm text-gray-400">5 days ago</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <button class="p-2 hover:bg-white/10 rounded-lg transition-colors">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                            </svg>
                                        </button>
                                        <button class="p-2 hover:bg-white/10 rounded-lg transition-colors text-red-400">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <p class="text-gray-300 mb-4">This is a draft confession that I'm still working on. I'm not quite ready to publish it yet, but I wanted to save my progress...</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-400">Last edited 2 hours ago</span>
                                    <button class="px-4 py-2 bg-gradient-to-r from-purple-500 to-blue-500 rounded-lg text-sm font-medium hover:opacity-90 transition-opacity">
                                        Continue Editing
                                    </button>
                