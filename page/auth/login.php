<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SilentSoul - LogIn</title>
    <link rel="icon" type="image/png" href="../../assets/logo/logo-one-2.png">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../script/css/login.style.css">
</head>

<body class="relative min-h-screen flex items-center justify-center px-4 py-10 sm:px-6 lg:px-8">
    <!-- Background Glow -->
    <div class="glow w-96 h-96 top-0 left-0"></div>
    <div class="glow w-96 h-96 bottom-0 right-0" style="background: var(--secondary);"></div>

    <!-- Header -->
    <header class="absolute top-0 left-0 w-full p-4 sm:p-6 z-10">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <a href="index.html" class="flex items-center gap-2">
                <img src="../../assets/logo/logo-one-2.png" class="w-10 h-10 sm:w-12 sm:h-12" alt="Logo" />
                <span class="text-xl sm:text-2xl font-bold gradient-text">SilentSoul</span>
            </a>
        </div>
    </header>

    <!-- Main Form -->
    <main class="w-full max-w-md z-10 mt-10 sm:mt-20">
        <div class="blur-card p-6 sm:p-8 shadow-lg">
            <div class="text-center mb-6">
                <h2 class="text-2xl sm:text-3xl font-extrabold gradient-text">LogIn to SilentSoul</h2>
                <p class="mt-2 text-gray-400 text-sm">Log in to your anonymous account</p>
            </div>

            <form class="space-y-6" id="login-form">
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-300 mb-1">Username</label>
                    <input type="text" id="username" name="username" required placeholder="Enter your unique username"
                        class="form-input w-full px-4 py-3" />
                    <p class="mt-1 text-xs text-gray-400">This will be your public display name.</p>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-300 mb-1">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Enter your password"
                        class="form-input w-full px-4 py-3" />
                    <p class="mt-1 text-xs text-gray-400">We’ll never share your password with anyone.</p>
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center text-sm text-gray-300">
                        <input type="checkbox" class="mr-2" />
                        Remember me
                    </label>
                    <a href="#" class="text-sm text-purple-400 hover:underline">Forgot password?</a>
                </div>

                <div>
                    <button type="submit"
                        class="w-full gradient-btn text-white font-semibold py-3 px-6 rounded-md text-center transition duration-200">
                        Log In
                    </button>
                </div>
                <div class="mt-6 flex items-center justify-center">
                    <div class="text-sm">
                        Don't have an account?
                        <a href="./signup.php" class="font-medium text-purple-400 hover:text-purple-300 ml-1">
                            Sign up
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <script src="../../script/js/login.script.js">


    </script>
</body>

</html>