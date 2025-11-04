<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal Access | DeutschLearn</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gold: '#D4AF37',
                        'dark-gold': '#B8942A',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-black shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <div class="flex space-x-1">
                        <div class="w-2 h-8 bg-black"></div>
                        <div class="w-2 h-8 bg-red-600"></div>
                        <div class="w-2 h-8 bg-yellow-400"></div>
                    </div>
                    <span class="text-2xl font-bold text-gold">DeutschLearn Portal</span>
                </div>
                <div>
                    <button onclick="window.location.href='#'" class="text-gray-300 hover:text-gold transition">← Back
                        to Home</button>
                </div>
            </div>
        </div>
    </nav>

    <div class="min-h-screen flex items-center justify-center bg-gray-50 px-6 py-12">
        <div class="max-w-6xl w-full grid md:grid-cols-2 gap-8">

            <!-- Register Section -->
            <div id="registerSection" class="bg-white rounded-2xl shadow-2xl overflow-hidden">
                @if (session('success'))
                    <div class="mb-4 flex items-center p-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50"
                        role="alert">
                        <svg class="flex-shrink-0 inline w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.894.553l-3 6A1 1 0 007 14h6a1 1 0 00.894-1.447l-3-6A1 1 0 0010 7zm0 7a1 1 0 100-2 1 1 0 000 2z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Error!</strong>
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-red-500" role="button"
                                onclick="this.parentElement.parentElement.style.display='none';"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <title>Close</title>
                                <path
                                    d="M14.348 5.652a1 1 0 00-1.414 0L10 8.586 7.066 5.652a1 1 0 10-1.414 1.414L8.586 10l-2.934 2.934a1 1 0 101.414 1.414L10 11.414l2.934 2.934a1 1 0 001.414-1.414L11.414 10l2.934-2.934a1 1 0 000-1.414z" />
                            </svg>
                        </span>
                    </div>
                @endif
                <div class="bg-gradient-to-r from-red-900 to-red-700 p-6 text-white">
                    <div class="flex items-center space-x-2 mb-2">
                        <div class="flex space-x-1">
                            <div class="w-4 h-6 bg-black border border-gray-400"></div>
                            <div class="w-4 h-6 bg-red-600 border border-gray-400"></div>
                            <div class="w-4 h-6 bg-yellow-400 border border-gray-400"></div>
                        </div>
                    </div>
                    <h2 class="text-3xl font-bold">Create Account</h2>
                    <p class="text-red-100 mt-2">Join our learning community</p>
                </div>

                <div class="p-8">
                    <form class="space-y-5" action="{{ route('auth.register.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="first-name" class="block text-sm font-semibold text-gray-700 mb-2">First
                                    Name</label>
                                <input id="first-name" type="text" required
                                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-red-600 focus:outline-none transition"
                                    placeholder="John" name="first_name">
                            </div>
                            <div>
                                <label for="last-name" class="block text-sm font-semibold text-gray-700 mb-2">Last
                                    Name</label>
                                <input id="last-name" type="text" required
                                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-red-600 focus:outline-none transition"
                                    name="last_name" placeholder="Doe">
                            </div>
                        </div>

                        <div>
                            <label for="register-email" class="block text-sm font-semibold text-gray-700 mb-2">Email
                                Address</label>
                            <input id="register-email" type="email" required
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-red-600 focus:outline-none transition"
                                name="email" placeholder="student@example.com">
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone
                                Number</label>
                            <input id="phone" type="tel" required
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-red-600 focus:outline-none transition"
                                name="phone" placeholder="+254 700 000 000">
                        </div>

                        <div>
                            <label for="level" class="block text-sm font-semibold text-gray-700 mb-2">Current German
                                Level</label>
                            <select id="level" required
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-red-600 focus:outline-none transition"
                                name="german_level">
                                <option value="">Select your level</option>
                                <option value="beginner">Beginner (A1-A2)</option>
                                <option value="intermediate">Intermediate (B1-B2)</option>
                                <option value="advanced">Advanced (C1-C2)</option>
                                <option value="not-sure">Not sure yet</option>
                            </select>
                        </div>

                        <div>
                            <label for="register-password"
                                class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                            <input id="register-password" type="password" required
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-red-600 focus:outline-none transition"
                                name="password" placeholder="Create a strong password">
                        </div>

                        <div>
                            <label for="confirm-password" class="block text-sm font-semibold text-gray-700 mb-2">Confirm
                                Password</label>
                            <input id="confirm-password" type="password" required
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-red-600 focus:outline-none transition"
                                name="password_confirmation" placeholder="Confirm your password">
                        </div>

                        <div class="flex items-start">
                            <input id="terms" type="checkbox" required name="terms_agreement"
                                class="w-4 h-4 mt-1 text-red-600 border-gray-300 rounded focus:ring-red-600">
                            <label for="terms" class="ml-2 text-sm text-gray-700">
                                I agree to the
                                <a href="#" class="text-red-600 hover:text-red-700 font-semibold">Terms of Service</a>
                                and
                                <a href="#" class="text-red-600 hover:text-red-700 font-semibold">Privacy Policy</a>
                            </label>
                        </div>

                        <button type="submit"
                            class="w-full bg-red-600 text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition text-lg">
                            Create Account
                        </button>
                    </form>

                    <p class="mt-6 text-center text-sm text-gray-600">
                        Already have an account?
                        <a href="{{ route('auth.login') }}" class="text-red-600 hover:text-red-700 font-semibold">Login
                            here</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Benefits Section -->
    <section class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h3 class="text-3xl font-bold text-black mb-4">Why Join DeutschLearn?</h3>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-black rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold mb-2">Expert Teachers</h4>
                    <p class="text-gray-600">Learn from native German speakers with years of teaching experience</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold mb-2">Live Classes</h4>
                    <p class="text-gray-600">Interactive video sessions with real-time practice and feedback</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold mb-2">Certificates</h4>
                    <p class="text-gray-600">Earn recognized certifications as you progress through levels</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-gray-300 py-8 border-t-4 border-gold">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-sm">&copy; 2025 DeutschLearn Portal. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>