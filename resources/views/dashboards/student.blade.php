<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>German Language Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Left Sidebar Navigation -->
        <div class="w-80 bg-white shadow-lg p-6">
            <!-- Profile Section -->
            <div class="mb-8">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-yellow-500 rounded-full flex items-center justify-center text-white text-2xl font-bold">
                        SJ
                    </div>
                    <div class="ml-4">
                        <h3 class="font-bold text-gray-800">{{ auth()->user()->first_name }}</h3>
                        <p class="text-sm text-gray-500">Premium Member</p>
                    </div>
                </div>
            </div>

            <!-- Navigation Menu -->
            <nav class="mb-8">
                <h3 class="text-sm font-semibold text-gray-500 uppercase mb-4">Navigation</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center p-3 rounded-lg bg-red-50 text-red-600 font-medium">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-3 rounded-lg text-gray-600 hover:bg-gray-50">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            My Lessons
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-3 rounded-lg text-gray-600 hover:bg-gray-50">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                            Progress
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-3 rounded-lg text-gray-600 hover:bg-gray-50">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                            </svg>
                            Vocabulary
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-3 rounded-lg text-gray-600 hover:bg-gray-50">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Practice Tests
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Profile Settings -->
            <div class="border-t pt-6">
                <h3 class="text-sm font-semibold text-gray-500 uppercase mb-4">Settings</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('profile') }}" class="flex items-center p-3 rounded-lg text-gray-600 hover:bg-gray-50">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-3 rounded-lg text-gray-600 hover:bg-gray-50">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Account Settings
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-3 rounded-lg text-gray-600 hover:bg-gray-50">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Achievement Badge -->
            <div class="mt-8 bg-gradient-to-r from-red-500 to-yellow-400 rounded-lg p-4 text-center">
                <div class="text-white text-3xl mb-2">🎯</div>
                <h4 class="text-white font-bold mb-1">Ausgezeichnet!</h4>
                <p class="text-white text-xs">You're on a 7-day streak</p>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Willkommen zurück, {{ auth()->user()->first_name }}</h1>
                <p class="text-gray-600 mt-2">Continue learning German with your lessons</p>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Current Level</p>
                            <h3 class="text-3xl font-bold text-gray-800 mt-2">B1</h3>
                        </div>
                        <div class="bg-red-100 p-3 rounded-full">
                            <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Vocabulary</p>
                            <h3 class="text-3xl font-bold text-gray-800 mt-2">847</h3>
                        </div>
                        <div class="bg-blue-100 p-3 rounded-full">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Study Streak</p>
                            <h3 class="text-3xl font-bold text-gray-800 mt-2">7</h3>
                        </div>
                        <div class="bg-yellow-100 p-3 rounded-full">
                            <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Study Hours</p>
                            <h3 class="text-3xl font-bold text-gray-800 mt-2">45</h3>
                        </div>
                        <div class="bg-green-100 p-3 rounded-full">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- German Lessons Section -->
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Meine Deutschkurse</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Lesson Card 1 - Grammar -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="bg-gradient-to-r from-red-500 to-red-600 h-32 flex items-center justify-center">
                            <span class="text-white text-5xl">📚</span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-2">
                                <h3 class="text-xl font-bold text-gray-800">Deutsche Grammatik</h3>
                                <span class="bg-red-100 text-red-800 text-xs font-semibold px-3 py-1 rounded-full">B1</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4">Articles, Cases, and Sentence Structure</p>
                            <div class="grid grid-cols-3 gap-2 mb-4 text-center">
                                <div class="bg-gray-50 p-2 rounded">
                                    <p class="text-xs text-gray-500">Lessons</p>
                                    <p class="font-bold text-gray-800">28/35</p>
                                </div>
                                <div class="bg-gray-50 p-2 rounded">
                                    <p class="text-xs text-gray-500">Exercises</p>
                                    <p class="font-bold text-gray-800">156/210</p>
                                </div>
                                <div class="bg-gray-50 p-2 rounded">
                                    <p class="text-xs text-gray-500">Score</p>
                                    <p class="font-bold text-gray-800">87%</p>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="flex justify-between text-sm text-gray-600 mb-1">
                                    <span>Progress</span>
                                    <span>80%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-red-600 h-2 rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                            <button class="w-full bg-red-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-red-700 mt-4">Weiter lernen</button>
                        </div>
                    </div>

                    <!-- Lesson Card 2 - Vocabulary -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-32 flex items-center justify-center">
                            <span class="text-white text-5xl">💬</span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-2">
                                <h3 class="text-xl font-bold text-gray-800">Wortschatz & Vokabeln</h3>
                                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full">B1-B2</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4">Everyday Vocabulary and Expressions</p>
                            <div class="grid grid-cols-3 gap-2 mb-4 text-center">
                                <div class="bg-gray-50 p-2 rounded">
                                    <p class="text-xs text-gray-500">Words</p>
                                    <p class="font-bold text-gray-800">847/1200</p>
                                </div>
                                <div class="bg-gray-50 p-2 rounded">
                                    <p class="text-xs text-gray-500">Reviewed</p>
                                    <p class="font-bold text-gray-800">654</p>
                                </div>
                                <div class="bg-gray-50 p-2 rounded">
                                    <p class="text-xs text-gray-500">Mastered</p>
                                    <p class="font-bold text-gray-800">532</p>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="flex justify-between text-sm text-gray-600 mb-1">
                                    <span>Progress</span>
                                    <span>71%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: 71%"></div>
                                </div>
                            </div>
                            <button class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700 mt-4">Vokabeln üben</button>
                        </div>
                    </div>

                    <!-- Lesson Card 3 - Listening -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="bg-gradient-to-r from-purple-500 to-purple-600 h-32 flex items-center justify-center">
                            <span class="text-white text-5xl">🎧</span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-2">
                                <h3 class="text-xl font-bold text-gray-800">Hörverständnis</h3>
                                <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-3 py-1 rounded-full">B1</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4">Listening Comprehension and Pronunciation</p>
                            <div class="grid grid-cols-3 gap-2 mb-4 text-center">
                                <div class="bg-gray-50 p-2 rounded">
                                    <p class="text-xs text-gray-500">Audio</p>
                                    <p class="font-bold text-gray-800">42/60</p>
                                </div>
                                <div class="bg-gray-50 p-2 rounded">
                                    <p class="text-xs text-gray-500">Quizzes</p>
                                    <p class="font-bold text-gray-800">38/60</p>
                                </div>
                                <div class="bg-gray-50 p-2 rounded">
                                    <p class="text-xs text-gray-500">Score</p>
                                    <p class="font-bold text-gray-800">82%</p>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="flex justify-between text-sm text-gray-600 mb-1">
                                    <span>Progress</span>
                                    <span>70%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-purple-600 h-2 rounded-full" style="width: 70%"></div>
                                </div>
                            </div>
                            <button class="w-full bg-purple-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-purple-700 mt-4">Hören üben</button>
                        </div>
                    </div>

                    <!-- Lesson Card 4 - Speaking -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="bg-gradient-to-r from-green-500 to-green-600 h-32 flex items-center justify-center">
                            <span class="text-white text-5xl">🗣️</span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-2">
                                <h3 class="text-xl font-bold text-gray-800">Sprechen & Konversation</h3>
                                <span class="bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full">A2-B1</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4">Speaking Practice and Conversations</p>
                            <div class="grid grid-cols-3 gap-2 mb-4 text-center">
                                <div class="bg-gray-50 p-2 rounded">
                                    <p class="text-xs text-gray-500">Dialogs</p>
                                    <p class="font-bold text-gray-800">18/45</p>
                                </div>
                                <div class="bg-gray-50 p-2 rounded">
                                    <p class="text-xs text-gray-500">Minutes</p>
                                    <p class="font-bold text-gray-800">128</p>
                                </div>
                                <div class="bg-gray-50 p-2 rounded">
                                    <p class="text-xs text-gray-500">Accuracy</p>
                                    <p class="font-bold text-gray-800">75%</p>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="flex justify-between text-sm text-gray-600 mb-1">
                                    <span>Progress</span>
                                    <span>40%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-600 h-2 rounded-full" style="width: 40%"></div>
                                </div>
                            </div>
                            <button class="w-full bg-green-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-green-700 mt-4">Sprechen üben</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>