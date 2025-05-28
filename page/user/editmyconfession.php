<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SilentSoul - Edit Your Confession</title>
    <link rel="icon" type="image/png" href="../../assets/logo/logo-one-2.png">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../script/css/editconfession.style.css">
</head>

<body class="relative ">

    <!-- Background glows -->
    <div class="glow w-80 h-80 top-10 left-10"></div>
    <div class="glow w-96 h-96 bottom-10 right-10" style="background: var(--secondary);"></div>
    <div class="glow w-72 h-72 top-1/3 left-1/2 transform -translate-x-1/2" style="background: var(--accent);"></div>
    <div class="glow w-64 h-64 bottom-1/3 left-1/4" style="background: linear-gradient(45deg, #10b981, #8b5cf6);"></div>

    <?php include('../../components/common/header.php') ?>
    <!-- Main Content -->
    <section class="pt-24 pb-20 relative z-10 mt-4">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="text-center mb-12 edit-header-content edit-form-section">
                <h1 class="text-6xl font-bold mb-6">
                    <span class="gradient-text">Edit Your Truth</span>
                </h1>
                <p class="text-gray-300 text-xl mb-6">
                    Refine your story. This is your <strong class="text-yellow-400">one and only</strong> chance to
                    edit.
                </p>
                <div class="flex items-center justify-center space-x-8 text-sm text-gray-400">
                    <div class="flex items-center">
                        <i class="fas fa-edit mr-2 text-purple-400 edit-icon-bounce"></i>
                        One-Time Edit
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-lock mr-2 text-cyan-400"></i>
                        Password Protected
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-shield-alt mr-2 text-green-400"></i>
                        Secure & Private
                    </div>
                </div>
            </div>

            <!-- Password Verification Section -->
            <div class="password-section" id="passwordSection">
                <div class="edit-form-section mb-8">
                    <div class="password-verification p-8">
                        <div class="flex items-start space-x-4 mb-6">
                            <i class="fas fa-key text-cyan-400 text-3xl mt-1"></i>
                            <div>
                                <h3 class="text-2xl font-bold text-cyan-400 mb-3">🔐 Password Verification Required</h3>
                                <div class="text-gray-200 space-y-3">
                                    <p class="font-semibold text-lg">Please enter your confession password to proceed
                                        with editing.</p>
                                    <div class="text-gray-300 space-y-2">
                                        <p>• <strong>Why do we ask for a password?</strong></p>
                                        <p class="ml-4">To verify that you are the original author of this confession
                                        </p>
                                        <p class="ml-4">Every confession can only be edited once by its creator</p>
                                        <p class="ml-4">This ensures authenticity and prevents unauthorized
                                            modifications</p>
                                        <p class="ml-4">Your password was set when you first posted this confession</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="max-w-md mx-auto">
                            <div class="relative mb-4">
                                <input type="password" id="verificationPassword"
                                    class="password-input w-full p-5 text-gray-200 placeholder-gray-400 text-lg"
                                    placeholder="Enter your confession password" maxlength="50" required />
                                <div class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400">
                                    <i class="fas fa-lock text-lg"></i>
                                </div>
                            </div>

                            <div class="password-error" id="passwordError">
                                <i class="fas fa-exclamation-triangle mr-2"></i>
                                <span>Incorrect password. Please try again.</span>
                            </div>

                            <div class="text-center">
                                <button type="button" id="verifyPasswordBtn"
                                    class="verify-btn py-4 px-8 font-semibold text-white shadow-lg hover:shadow-2xl transition-all duration-300">
                                    <i class="fas fa-check-circle mr-3"></i>
                                    Verify & Continue
                                </button>
                            </div>

                            <div class="mt-6 text-center">
                                <p class="text-sm text-gray-400">
                                    <i class="fas fa-info-circle mr-2 text-cyan-400"></i>
                                    Don't remember your password? Unfortunately, we cannot recover it for security
                                    reasons.
                                </p>
                            </div>

                            <div class="mt-4 text-center">
                                <button type="button" onclick="document.body.classList.add('demo-visible')"
                                    class="text-sm text-cyan-400 hover:text-cyan-300 underline">
                                    <i class="fas fa-eye mr-1"></i>
                                    Skip for Demo (Password: demo123)
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit Form Section -->
            <div class="edit-section" id="editSection">

                <!-- Verification Success Badge -->
                <div class="text-center mb-8">
                    <div class="verified-badge" id="verifiedBadge">
                        <i class="fas fa-check-circle mr-2"></i>
                        Password Verified - You can now edit your confession
                    </div>
                </div>

                <!-- One-Time Edit Warning -->
                <div class="edit-form-section mb-8">
                    <div class="one-time-warning p-6">
                        <div class="flex items-start space-x-4">
                            <i class="fas fa-exclamation-triangle text-yellow-400 text-2xl mt-1"></i>
                            <div>
                                <h3 class="text-xl font-bold text-yellow-400 mb-3">⚠️ Important: One-Time Edit Only</h3>
                                <div class="text-gray-200 space-y-2">
                                    <p class="font-semibold">After you update this confession, you will <u>NOT</u> be
                                        able to edit it again.</p>
                                    <p>• Make sure all your changes are exactly how you want them</p>
                                    <p>• Review everything carefully before submitting</p>
                                    <p>• This restriction helps maintain the authenticity of confessions</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Form -->
                <div class="edit-form-section">
                    <form id="editConfessionForm" class="space-y-10">

                        <!-- Hidden Password Field -->
                        <input type="hidden" id="confirmedPassword" name="password" />

                        <!-- Main Confession Edit -->
                        <div class="edit-card p-10 edit-pulse-glow">
                            <div class="relative">
                                <label class="block text-xl font-bold mb-6 gradient-text">
                                    <i class="fas fa-pen-nib mr-3"></i>
                                    Edit Your Confession
                                </label>
                                <div class="relative">
                                    <textarea id="editConfessionText" name="confession"
                                        class="edit-input w-full h-52 p-6 text-gray-200 placeholder-gray-500 resize-none text-lg leading-relaxed"
                                        placeholder="Refine your story. Make it exactly how you want it to be..."
                                        maxlength="2000"
                                        required>Sometimes the hardest truths to face are the ones about ourselves. I've been carrying this weight for months now, and I think it's time I finally acknowledge what happened. 

Last year, I made a decision that changed everything. It wasn't malicious, but it was selfish. I chose my comfort over someone else's wellbeing, and the guilt has been eating away at me ever since.

I keep telling myself that I didn't mean for things to turn out this way, but deep down I know I could have made different choices. I could have been braver, more honest, more compassionate.

The person I hurt deserved better from me. They trusted me, and I let them down when they needed me most. I don't know if I'll ever get the chance to make it right, but I needed to say it somewhere, even if it's just to strangers on the internet.

I'm working on becoming the person I should have been then. It's a slow process, but I'm trying to learn from this mistake and be better moving forward.</textarea>
                                    <div class="absolute bottom-4 right-4 text-sm edit-char-counter"
                                        id="editCharCounter">
                                        1089 / 2000
                                    </div>
                                </div>
                                <div class="mt-4 info-highlight p-4">
                                    <i class="fas fa-lightbulb mr-2 text-cyan-400"></i>
                                    <span class="text-sm text-gray-300">
                                        Take your time to perfect your message. This is your final opportunity to make
                                        changes.
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Tags Edit Section -->
                        <div class="edit-card p-10">
                            <div class="space-y-8">
                                <div>
                                    <label class="block text-xl font-bold mb-3 gradient-text">
                                        <i class="fas fa-hashtag mr-3"></i>
                                        Edit Tags
                                    </label>
                                    <p class="text-gray-400 text-sm mb-6 info-highlight p-4">
                                        <i class="fas fa-info-circle mr-2 text-cyan-400"></i>
                                        <strong>Update your tags:</strong> Add, remove, or modify tags to better
                                        categorize your confession. Keep 3-5 relevant tags for best visibility.
                                    </p>
                                </div>

                                <div class="relative">
                                    <input type="text" id="editTagInput"
                                        class="edit-input w-full p-5 text-gray-200 placeholder-gray-500"
                                        placeholder="Add new tags and press Enter (e.g., growth, change, reflection)"
                                        maxlength="20" />
                                    <div class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400">
                                        <i class="fas fa-plus-circle text-lg"></i>
                                    </div>
                                </div>

                                <!-- Suggested Tags -->
                                <div>
                                    <p class="text-sm text-gray-400 mb-4">Suggested tags for editing:</p>
                                    <div class="edit-suggested-tags">
                                        <button type="button" class="edit-suggested-tag"
                                            data-tag="growth">growth</button>
                                        <button type="button" class="edit-suggested-tag"
                                            data-tag="reflection">reflection</button>
                                        <button type="button" class="edit-suggested-tag"
                                            data-tag="change">change</button>
                                        <button type="button" class="edit-suggested-tag"
                                            data-tag="healing">healing</button>
                                        <button type="button" class="edit-suggested-tag"
                                            data-tag="clarity">clarity</button>
                                        <button type="button" class="edit-suggested-tag" data-tag="truth">truth</button>
                                        <button type="button" class="edit-suggested-tag"
                                            data-tag="update">update</button>
                                        <button type="button" class="edit-suggested-tag"
                                            data-tag="revised">revised</button>
                                    </div>
                                </div>

                                <!-- Active Tags Display -->
                                <div id="editActiveTags" class="flex flex-wrap gap-3 min-h-10">
                                    <!-- Existing tags will be loaded here -->
                                    <div class="edit-tag flex items-center px-4 py-3 text-sm font-medium text-white">
                                        <span>#guilt</span>
                                        <button type="button" class="ml-3 text-gray-300 hover:text-white"
                                            onclick="removeEditTag('guilt')">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="edit-tag flex items-center px-4 py-3 text-sm font-medium text-white">
                                        <span>#regret</span>
                                        <button type="button" class="ml-3 text-gray-300 hover:text-white"
                                            onclick="removeEditTag('regret')">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="edit-tag flex items-center px-4 py-3 text-sm font-medium text-white">
                                        <span>#growth</span>
                                        <button type="button" class="ml-3 text-gray-300 hover:text-white"
                                            onclick="removeEditTag('growth')">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>

                                <!-- Hidden input for tags -->
                                <input type="hidden" id="editTagsInput" name="tags" />
                            </div>
                        </div>

                        <!-- Preview Section -->
                        <div class="edit-card edit-preview p-10" id="editPreviewSection" style="display: none;">
                            <h3 class="text-xl font-bold mb-6 gradient-text">
                                <i class="fas fa-search mr-3"></i>
                                Preview Your Updated Confession
                            </h3>
                            <div class="bg-black/30 p-8 rounded-2xl border border-purple-500/20">
                                <div class="flex items-start justify-between mb-6">
                                    <div class="flex items-center">
                                        <div
                                            class="w-14 h-14 rounded-full bg-gradient-to-r from-purple-600 to-cyan-500 flex items-center justify-center">
                                            <span class="text-white font-bold text-lg">A</span>
                                        </div>
                                        <div class="ml-4">
                                            <h4 class="font-semibold text-gray-200 text-lg">Anonymous Soul</h4>
                                            <p class="text-sm text-gray-400">@anonymous_soul • Edited</p>
                                        </div>
                                    </div>
                                    <span class="text-xs text-gray-500 bg-yellow-500/20 px-2 py-1 rounded-full">
                                        <i class="fas fa-edit mr-1"></i>Updated
                                    </span>
                                </div>

                                <p class="text-gray-200 mb-6 leading-relaxed text-lg" id="editPreviewText">
                                    Your updated confession will appear here...
                                </p>

                                <div class="flex flex-wrap gap-3" id="editPreviewTags">
                                    <!-- Preview tags will appear here -->
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="text-center space-y-8">
                            <button type="button" id="editPreviewBtn"
                                class="edit-btn py-4 px-10 font-semibold text-white shadow-lg hover:shadow-2xl transition-all duration-300 mr-6">
                                <i class="fas fa-search mr-3"></i>
                                Preview Changes
                            </button>

                            <button type="submit" id="editSubmitBtn"
                                class="edit-btn py-5 px-12 font-bold text-white shadow-lg hover:shadow-2xl transition-all duration-300 text-xl"
                                disabled>
                                <i class="fas fa-save mr-3"></i>
                                Update Confession Forever
                            </button>

                            <p class="text-sm text-gray-400 max-w-lg mx-auto leading-relaxed">
                                <i class="fas fa-exclamation-circle mr-2 text-yellow-400"></i>
                                <strong>Final reminder:</strong> Once you click "Update Confession Forever", you cannot
                                make any more changes to this confession.
                            </p>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </section>

    <?php include('../../components/common/footer.php') ?>
    <script src="../../script/js/editconfession.script.js">


    </script>
</body>

</html>