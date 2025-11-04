<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>German Language Portal | DeutschLearn</title>
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

<body class="bg-gray-50">
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
                <div class="hidden md:flex space-x-8">
                    <a href="#classes" class="text-gray-300 hover:text-gold transition">Classes</a>
                    <a href="#schedule" class="text-gray-300 hover:text-gold transition">Schedule</a>
                    <a href="#resources" class="text-gray-300 hover:text-gold transition">Resources</a>
                    <a href="#contact" class="text-gray-300 hover:text-gold transition">Contact</a>
                </div>
                <div class="flex space-x-4">
                    <a href="{{ route('auth.login') }}" class="button text-gold hover:text-dark-gold transition font-semibold">Student Login</a>
                    <a href="{{ route('auth.register') }}" class="button bg-gold text-black px-6 py-2 rounded-lg hover:bg-dark-gold transition font-semibold ">Register</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-black via-red-900 to-yellow-700 text-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="flex space-x-1">
                            <div class="w-8 h-6 bg-black border border-gray-400"></div>
                            <div class="w-8 h-6 bg-red-600 border border-gray-400"></div>
                            <div class="w-8 h-6 bg-yellow-400 border border-gray-400"></div>
                        </div>
                        <span class="text-gold font-semibold">Official German Language Portal</span>
                    </div>
                    <h1 class="text-5xl font-bold mb-6">Welcome to Your German Learning Journey</h1>
                    <p class="text-xl mb-8 text-gray-200">Access your personalized dashboard, attend live classes, and
                        track your progress towards German fluency.</p>
                    <div class="flex space-x-4">
                        <button
                            class="bg-gold text-black px-8 py-4 rounded-lg font-semibold hover:bg-dark-gold transition text-lg">Access
                            Student Portal</button>
                        <button
                            class="border-2 border-gold text-gold px-8 py-4 rounded-lg font-semibold hover:bg-gold hover:text-black transition text-lg">View
                            Demo</button>
                    </div>
                    <div class="mt-8 flex items-center space-x-6">
                        <div>
                            <p class="text-3xl font-bold text-gold">2,500+</p>
                            <p class="text-gray-300">Active Students</p>
                        </div>
                        <div class="w-px h-12 bg-gray-600"></div>
                        <div>
                            <p class="text-3xl font-bold text-gold">50+</p>
                            <p class="text-gray-300">Expert Teachers</p>
                        </div>
                        <div class="w-px h-12 bg-gray-600"></div>
                        <div>
                            <p class="text-3xl font-bold text-gold">98%</p>
                            <p class="text-gray-300">Success Rate</p>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Image Placeholder -->
                <div class="relative">
                    <div
                        class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-8 shadow-2xl border-2 border-gold">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=400&fit=crop"
                            alt="Students learning" class="rounded-lg w-full h-64 object-cover mb-4">
                        <div class="bg-black bg-opacity-50 p-4 rounded-lg backdrop-blur">
                            <p class="text-gold font-semibold mb-2">🎓 Live Class Starting Soon</p>
                            <p class="text-sm text-gray-300">Intermediate German - Conversation Practice</p>
                            <p class="text-xs text-gray-400 mt-1">Today at 6:00 PM EAT</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Calendar Section -->
    <section id="schedule" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-black mb-4">Upcoming Classes Schedule</h2>
                <p class="text-xl text-gray-600">Join live interactive sessions with native German speakers</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <!-- Monday -->
                <div
                    class="bg-gradient-to-r from-black to-gray-900 p-6 rounded-xl text-white hover:shadow-xl transition">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-2xl font-bold">Monday</h3>
                        <span class="bg-gold text-black px-3 py-1 rounded-full text-sm font-semibold">A1-A2</span>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between bg-gray-800 p-3 rounded-lg">
                            <div>
                                <p class="font-semibold text-gold">Beginner Grammar</p>
                                <p class="text-sm text-gray-400">Instructor: Frau Schmidt</p>
                            </div>
                            <p class="text-gold font-bold">10:00 AM</p>
                        </div>
                        <div class="flex items-center justify-between bg-gray-800 p-3 rounded-lg">
                            <div>
                                <p class="font-semibold text-gold">Basic Vocabulary</p>
                                <p class="text-sm text-gray-400">Instructor: Herr Müller</p>
                            </div>
                            <p class="text-gold font-bold">2:00 PM</p>
                        </div>
                        <div class="flex items-center justify-between bg-gray-800 p-3 rounded-lg">
                            <div>
                                <p class="font-semibold text-gold">Pronunciation Practice</p>
                                <p class="text-sm text-gray-400">Instructor: Frau Weber</p>
                            </div>
                            <p class="text-gold font-bold">6:00 PM</p>
                        </div>
                    </div>
                </div>

                <!-- Tuesday -->
                <div
                    class="bg-gradient-to-r from-red-900 to-red-800 p-6 rounded-xl text-white hover:shadow-xl transition">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-2xl font-bold">Tuesday</h3>
                        <span class="bg-gold text-black px-3 py-1 rounded-full text-sm font-semibold">B1-B2</span>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between bg-red-950 p-3 rounded-lg">
                            <div>
                                <p class="font-semibold text-gold">Intermediate Conversation</p>
                                <p class="text-sm text-gray-300">Instructor: Frau Klein</p>
                            </div>
                            <p class="text-gold font-bold">11:00 AM</p>
                        </div>
                        <div class="flex items-center justify-between bg-red-950 p-3 rounded-lg">
                            <div>
                                <p class="font-semibold text-gold">Writing Skills</p>
                                <p class="text-sm text-gray-300">Instructor: Herr Fischer</p>
                            </div>
                            <p class="text-gold font-bold">3:00 PM</p>
                        </div>
                        <div class="flex items-center justify-between bg-red-950 p-3 rounded-lg">
                            <div>
                                <p class="font-semibold text-gold">Cultural Immersion</p>
                                <p class="text-sm text-gray-300">Instructor: Frau Hoffmann</p>
                            </div>
                            <p class="text-gold font-bold">7:00 PM</p>
                        </div>
                    </div>
                </div>

                <!-- Wednesday -->
                <div
                    class="bg-gradient-to-r from-yellow-600 to-yellow-500 p-6 rounded-xl text-black hover:shadow-xl transition">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-2xl font-bold">Wednesday</h3>
                        <span class="bg-black text-gold px-3 py-1 rounded-full text-sm font-semibold">C1-C2</span>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between bg-yellow-700 p-3 rounded-lg text-white">
                            <div>
                                <p class="font-semibold">Advanced Literature</p>
                                <p class="text-sm text-gray-200">Instructor: Prof. Bauer</p>
                            </div>
                            <p class="font-bold">9:00 AM</p>
                        </div>
                        <div class="flex items-center justify-between bg-yellow-700 p-3 rounded-lg text-white">
                            <div>
                                <p class="font-semibold">Business German</p>
                                <p class="text-sm text-gray-200">Instructor: Herr Schneider</p>
                            </div>
                            <p class="font-bold">1:00 PM</p>
                        </div>
                        <div class="flex items-center justify-between bg-yellow-700 p-3 rounded-lg text-white">
                            <div>
                                <p class="font-semibold">Debate Club</p>
                                <p class="text-sm text-gray-200">Instructor: Frau Wagner</p>
                            </div>
                            <p class="font-bold">5:00 PM</p>
                        </div>
                    </div>
                </div>

                <!-- Thursday -->
                <div
                    class="bg-gradient-to-r from-black to-gray-900 p-6 rounded-xl text-white hover:shadow-xl transition">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-2xl font-bold">Thursday</h3>
                        <span class="bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold">All
                            Levels</span>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between bg-gray-800 p-3 rounded-lg">
                            <div>
                                <p class="font-semibold text-gold">Grammar Workshop</p>
                                <p class="text-sm text-gray-400">Instructor: Herr Braun</p>
                            </div>
                            <p class="text-gold font-bold">10:30 AM</p>
                        </div>
                        <div class="flex items-center justify-between bg-gray-800 p-3 rounded-lg">
                            <div>
                                <p class="font-semibold text-gold">Movie Club</p>
                                <p class="text-sm text-gray-400">Instructor: Frau Richter</p>
                            </div>
                            <p class="text-gold font-bold">4:00 PM</p>
                        </div>
                        <div class="flex items-center justify-between bg-gray-800 p-3 rounded-lg">
                            <div>
                                <p class="font-semibold text-gold">Q&A Session</p>
                                <p class="text-sm text-gray-400">Various Instructors</p>
                            </div>
                            <p class="text-gold font-bold">8:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Classes Overview -->
    <section id="classes" class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-black mb-4">Available Classes</h2>
                <p class="text-xl text-gray-600">Explore our comprehensive German language programs</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Beginner -->
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-black hover:shadow-2xl transition">
                    <div class="p-6">
                        <div class="w-16 h-16 bg-black rounded-lg flex items-center justify-center mb-4">
                            <span class="text-gold text-2xl font-bold">A1</span>
                        </div>
                        <h3 class="text-2xl font-bold text-black mb-3">Beginner Level</h3>
                        <p class="text-gray-600 mb-6">Perfect for those starting their German journey. Learn basics,
                            pronunciation, and essential vocabulary.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-start">
                                <span class="text-gold mr-2">•</span>
                                <span class="text-gray-700">Basic grammar and sentence structure</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-gold mr-2">•</span>
                                <span class="text-gray-700">Everyday conversations</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-gold mr-2">•</span>
                                <span class="text-gray-700">Introduction to German culture</span>
                            </li>
                        </ul>
                        <button
                            class="w-full bg-black text-gold py-3 rounded-lg hover:bg-gray-900 transition font-semibold">View
                            Classes</button>
                    </div>
                </div>

                <!-- Intermediate -->
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-red-600 hover:shadow-2xl transition">
                    <div class="p-6">
                        <div class="w-16 h-16 bg-red-600 rounded-lg flex items-center justify-center mb-4">
                            <span class="text-white text-2xl font-bold">B1</span>
                        </div>
                        <h3 class="text-2xl font-bold text-black mb-3">Intermediate Level</h3>
                        <p class="text-gray-600 mb-6">Build confidence with complex grammar, writing skills, and
                            authentic German conversations.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-start">
                                <span class="text-red-600 mr-2">•</span>
                                <span class="text-gray-700">Advanced grammar structures</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-red-600 mr-2">•</span>
                                <span class="text-gray-700">Professional communication</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-red-600 mr-2">•</span>
                                <span class="text-gray-700">Goethe-Zertifikat preparation</span>
                            </li>
                        </ul>
                        <button
                            class="w-full bg-red-600 text-white py-3 rounded-lg hover:bg-red-700 transition font-semibold">View
                            Classes</button>
                    </div>
                </div>

                <!-- Advanced -->
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 border-yellow-500 hover:shadow-2xl transition">
                    <div class="p-6">
                        <div class="w-16 h-16 bg-yellow-500 rounded-lg flex items-center justify-center mb-4">
                            <span class="text-black text-2xl font-bold">C1</span>
                        </div>
                        <h3 class="text-2xl font-bold text-black mb-3">Advanced Level</h3>
                        <p class="text-gray-600 mb-6">Master German with native-like fluency through literature,
                            business, and specialized topics.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-start">
                                <span class="text-yellow-600 mr-2">•</span>
                                <span class="text-gray-700">German literature and media</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-yellow-600 mr-2">•</span>
                                <span class="text-gray-700">Academic and business German</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-yellow-600 mr-2">•</span>
                                <span class="text-gray-700">Native-level fluency training</span>
                            </li>
                        </ul>
                        <button
                            class="w-full bg-yellow-500 text-black py-3 rounded-lg hover:bg-yellow-600 transition font-semibold">View
                            Classes</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Student Portal Access -->
    <section class="bg-gradient-to-r from-black via-gray-900 to-black text-white py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="flex justify-center mb-6">
                <div class="flex space-x-2">
                    <div class="w-16 h-12 bg-black border-2 border-gray-400"></div>
                    <div class="w-16 h-12 bg-red-600 border-2 border-gray-400"></div>
                    <div class="w-16 h-12 bg-yellow-400 border-2 border-gray-400"></div>
                </div>
            </div>
            <h2 class="text-4xl font-bold mb-6">Access Your Student Portal</h2>
            <p class="text-xl mb-8 text-gray-300">Login to view your dashboard, upcoming classes, assignments, and track
                your learning progress</p>
            <div class="flex justify-center space-x-4">
                <button
                    class="bg-gold text-black px-10 py-4 rounded-lg text-lg font-semibold hover:bg-dark-gold transition">Student
                    Login</button>
                <button
                    class="border-2 border-gold text-gold px-10 py-4 rounded-lg text-lg font-semibold hover:bg-gold hover:text-black transition">New
                    Student? Register</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-gray-300 py-12 border-t-4 border-gold">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="flex space-x-1">
                            <div class="w-2 h-6 bg-black border border-gray-600"></div>
                            <div class="w-2 h-6 bg-red-600"></div>
                            <div class="w-2 h-6 bg-yellow-400"></div>
                        </div>
                        <h3 class="text-gold text-lg font-bold">DeutschLearn</h3>
                    </div>
                    <p class="text-sm">Your gateway to mastering the German language</p>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-gold transition">Student Portal</a></li>
                        <li><a href="#" class="hover:text-gold transition">Class Schedule</a></li>
                        <li><a href="#" class="hover:text-gold transition">Learning Resources</a></li>
                        <li><a href="#" class="hover:text-gold transition">Support Center</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Resources</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-gold transition">Study Materials</a></li>
                        <li><a href="#" class="hover:text-gold transition">Practice Tests</a></li>
                        <li><a href="#" class="hover:text-gold transition">Video Library</a></li>
                        <li><a href="#" class="hover:text-gold transition">Forums</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-gold transition">Help Desk</a></li>
                        <li><a href="#" class="hover:text-gold transition">Email Support</a></li>
                        <li><a href="#" class="hover:text-gold transition">Office Hours</a></li>
                        <li><a href="#" class="hover:text-gold transition">FAQs</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-sm">
                <p>&copy; 2025 DeutschLearn Portal. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>