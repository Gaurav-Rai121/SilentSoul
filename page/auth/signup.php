<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SilentSoul - Sign Up</title>
    <link rel="icon" type="image/png" href="../../assets/logo/logo-one-2.png">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
     <link rel="stylesheet" href="../../script/css/signup.style.css">
</head>

<body class="relative min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <!-- Background glows -->
    <div class="glow w-96 h-96 top-0 left-0"></div>
    <div class="glow w-96 h-96 bottom-0 right-0" style="background: var(--secondary);"></div>
    <div class="glow w-64 h-64 top-1/3 right-1/4"></div>

    <!-- Header with logo -->
    <header class="absolute top-0 left-0 w-full p-6 z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <a href="index.html" class="flex items-center">
                <img src="../../assets/logo/logo-one-2.png" class="w-12 h-12" alt="">
                <span class="text-2xl font-bold">
                    <span class="gradient-text">SilentSoul</span>
                </span>
            </a>

        </div>
    </header>

    <!-- Main content -->
    <main class="max-w-md w-full space-y-8 relative z-10">
        <div class="blur-card p-8 shadow-xl">
            <!-- Logo and title -->
            <div class="text-center mb-8">
                <h2 class="text-3xl font-extrabold">
                    <span class="gradient-text">Join SilentSoul</span>
                </h2>
                <p class="mt-2 text-gray-400">Create your anonymous account</p>
            </div>

            <!-- Sign up form -->
            <form class="mt-8 space-y-6" id="signup-form">
                <!-- Step 1: Basic Info -->
                <div class="form-section" id="step-1">
                    <div class="space-y-4">
                        <div>
                            <label for="username" class="block text-sm font-medium text-gray-300 mb-1">Username</label>
                            <input id="username" name="username" type="text" required
                                class="form-input w-full px-4 py-3" placeholder="Choose a unique username">
                            <p class="mt-1 text-xs text-gray-500">This will be your public display name</p>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Email</label>
                            <input id="email" name="email" type="email" required class="form-input w-full px-4 py-3"
                                placeholder="you@example.com">
                            <p class="mt-1 text-xs text-gray-500">We'll never share your email with anyone</p>
                        </div>



                    </div>

                    <div class="mt-6">
                        <button type="button" onclick="nextStep()"
                            class="gradient-btn w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white focus:outline-none">
                            Continue <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>

                    <div class="mt-6 flex items-center justify-center">
                        <div class="text-sm">
                            Already have an account?
                            <a href="./login.php" class="font-medium text-purple-400 hover:text-purple-300 ml-1">
                                Sign in
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Step 2: Password -->
                <div class="form-section hidden" id="step-2">
                    <div class="space-y-4">
                        <div class="relative">
                            <label for="password" class="block text-sm font-medium text-gray-300 mb-1">Password</label>
                            <input id="password" name="password" type="password" required
                                class="form-input w-full px-4 py-3" placeholder="Create a strong password">

                            <div class="strength-meter mt-2">
                                <div class="strength-meter-fill" id="strength-meter-fill"></div>
                            </div>
                            <p class="mt-1 text-xs text-gray-500" id="password-strength-text">Password strength: Too
                                weak</p>
                        </div>

                        <div class="relative">
                            <label for="confirm-password" class="block text-sm font-medium text-gray-300 mb-1">Confirm
                                Password</label>
                            <input id="confirm-password" name="confirm-password" type="password" required
                                class="form-input w-full px-4 py-3" placeholder="Type your password again">

                            <p class="mt-1 text-xs text-red-500 hidden" id="password-match-error">Passwords do not match
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 flex flex-col space-y-3">
                        <button type="button" onclick="createAccount()"
                            class="gradient-btn w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white focus:outline-none">
                            Create Account <i class="fas fa-user-plus ml-2"></i>
                        </button>

                        <button type="button" onclick="prevStep()"
                            class="w-full flex justify-center py-3 px-4 border border-white/10 rounded-md text-sm font-medium text-white hover:bg-white/5 transition-colors focus:outline-none">
                            <i class="fas fa-arrow-left mr-2"></i> Back
                        </button>
                    </div>
                </div>


            </form>

            <!-- OR divider -->


            <!-- Privacy note -->
            <div class="mt-6 text-center">
                <p class="text-xs text-gray-500">
                    By signing up, you agree to our
                    <a href="../../page/public/terms.php" class="text-purple-400 hover:text-purple-300">Terms of Service</a> and
                    <a href="../../page/public/privacy.php" class="text-purple-400 hover:text-purple-300">Privacy Policy</a>
                </p>
            </div>
        </div>

        <!-- Extra benefits cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="blur-card p-4 flex items-center space-x-3">
                <div class="w-10 h-10 rounded-full gradient-btn flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <div>
                    <h3 class="text-sm font-medium">100% Anonymous</h3>
                    <p class="text-xs text-gray-400">Your identity remains private</p>
                </div>
            </div>

            <div class="blur-card p-4 flex items-center space-x-3">
                <div class="w-10 h-10 rounded-full gradient-btn flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-users"></i>
                </div>
                <div>
                    <h3 class="text-sm font-medium">Supportive Community</h3>
                    <p class="text-xs text-gray-400">Connect with like-minded people</p>
                </div>
            </div>


        </div>
    </main>
    <script src="../../script/js/signup.script.js">


    </script>
</body>

</html>