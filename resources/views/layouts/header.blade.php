{{-- 
    SEPARATED HEADER (resources/views/layouts/header.blade.php)
    Modular header component displayed once user enters the website.
--}}
<header class="bg-gradient-to-r from-indigo-700 via-indigo-800 to-purple-800 text-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            
            <!-- Logo & Brand -->
            <div class="flex items-center space-x-3">
                <a href="{{ route('home') }}" class="flex items-center space-x-2 group">
                    <div class="w-10 h-10 rounded-xl bg-white/10 backdrop-blur border border-white/20 flex items-center justify-center text-white shadow-inner group-hover:bg-white/20 transition">
                        <i class="fa-brands fa-laravel text-2xl text-red-400"></i>
                    </div>
                    <div>
                        <span class="font-extrabold text-lg tracking-wide text-white block leading-tight">Laravel 12</span>
                        <span class="text-xs text-indigo-200 block">Web Project</span>
                    </div>
                </a>
            </div>

            <!-- Desktop Navigation Menu -->
            <nav class="hidden md:flex items-center space-x-1">
                {{-- Link Page 1: Home --}}
                <a href="{{ route('home') }}" 
                   class="px-3.5 py-2 rounded-lg text-sm font-semibold transition-all duration-200 flex items-center space-x-2 
                   {{ request()->routeIs('home') ? 'bg-white/20 text-white shadow-sm ring-1 ring-white/30 font-bold' : 'text-indigo-100 hover:bg-white/10 hover:text-white' }}">
                    <i class="fa-solid fa-house text-xs"></i>
                    <span>Home</span>
                </a>

                {{-- Link Page 2: About Me --}}
                <a href="{{ route('about') }}" 
                   class="px-3.5 py-2 rounded-lg text-sm font-semibold transition-all duration-200 flex items-center space-x-2 
                   {{ request()->routeIs('about') ? 'bg-white/20 text-white shadow-sm ring-1 ring-white/30 font-bold' : 'text-indigo-100 hover:bg-white/10 hover:text-white' }}">
                    <i class="fa-solid fa-user text-xs"></i>
                    <span>About Me</span>
                </a>

                {{-- Link Page 3: Photo Gallery --}}
                <a href="{{ route('gallery') }}" 
                   class="px-3.5 py-2 rounded-lg text-sm font-semibold transition-all duration-200 flex items-center space-x-2 
                   {{ request()->routeIs('gallery') ? 'bg-white/20 text-white shadow-sm ring-1 ring-white/30 font-bold' : 'text-indigo-100 hover:bg-white/10 hover:text-white' }}">
                    <i class="fa-solid fa-images text-xs"></i>
                    <span>Photo Gallery</span>
                </a>
            </nav>

            <!-- Right Side: Date & Back to Welcome Button -->
            <div class="hidden sm:flex items-center space-x-3">
                <div class="hidden lg:flex items-center text-xs text-indigo-200 bg-white/10 px-3 py-1.5 rounded-lg border border-white/10">
                    <i class="fa-solid fa-calendar-day mr-2 text-indigo-300"></i>
                    <span>{{ date('M d, Y') }}</span>
                </div>

                {{-- BACK BUTTON TO WELCOME PAGE --}}
                <a href="{{ route('welcome') }}" 
                   class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-xl text-xs font-bold bg-white/10 hover:bg-rose-500 text-white border border-white/20 hover:border-rose-400 shadow-sm transition-all duration-200 group"
                   title="Back to Welcome Page">
                    <i class="fa-solid fa-arrow-left group-hover:-translate-x-1 transition-transform"></i>
                    <span>Back to Welcome</span>
                    <i class="fa-solid fa-xmark text-rose-300 group-hover:text-white ml-0.5 text-xs"></i>
                </a>
            </div>

            <!-- Mobile Menu Toggle Button & Mobile Back Button -->
            <div class="sm:hidden flex items-center space-x-2">
                <a href="{{ route('welcome') }}" 
                   class="p-2 rounded-lg text-rose-200 hover:text-white hover:bg-white/10"
                   title="Back to Welcome">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
                <button type="button" 
                        onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
                        class="p-2 rounded-lg text-indigo-200 hover:text-white hover:bg-white/10 focus:outline-none"
                        aria-label="Toggle Navigation">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Menu Dropdown -->
    <div id="mobile-menu" class="hidden md:hidden bg-indigo-900/95 border-t border-indigo-700/50 px-4 pt-3 pb-4 space-y-1">
        <a href="{{ route('home') }}" 
           class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? 'bg-indigo-700 text-white font-bold' : 'text-indigo-200 hover:bg-indigo-800 hover:text-white' }}">
            <i class="fa-solid fa-house w-6 text-center"></i> Home (Variable)
        </a>
        <a href="{{ route('about') }}" 
           class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('about') ? 'bg-indigo-700 text-white font-bold' : 'text-indigo-200 hover:bg-indigo-800 hover:text-white' }}">
            <i class="fa-solid fa-user w-6 text-center"></i> About Me (While Loop)
        </a>
        <a href="{{ route('gallery') }}" 
           class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('gallery') ? 'bg-indigo-700 text-white font-bold' : 'text-indigo-200 hover:bg-indigo-800 hover:text-white' }}">
            <i class="fa-solid fa-images w-6 text-center"></i> Photo Gallery
        </a>

        {{-- Mobile Back Button --}}
        <div class="pt-2 mt-2 border-t border-indigo-800/80">
            <a href="{{ route('welcome') }}" 
               class="block px-3 py-2 rounded-md text-base font-medium text-rose-300 hover:bg-rose-600/30 hover:text-white">
                <i class="fa-solid fa-arrow-left w-6 text-center"></i> Back to Welcome
            </a>
        </div>
    </div>
</header>
