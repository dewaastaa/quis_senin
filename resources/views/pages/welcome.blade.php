@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="w-full max-w-2xl my-auto">
    
    {{-- Main Welcome Card --}}
    <div class="relative overflow-hidden bg-white rounded-3xl border border-slate-200 shadow-xl p-8 sm:p-12 text-center transition-all duration-300">
        
        {{-- Background Gradient Accent Top --}}
        <div class="absolute -top-24 -left-24 w-72 h-72 bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -right-24 w-72 h-72 bg-purple-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative z-10 space-y-6">
            
            {{-- Logo / Icon Badge --}}
            <div class="inline-flex items-center justify-center w-20 h-20 sm:w-24 sm:h-24 rounded-3xl bg-gradient-to-tr from-indigo-600 via-indigo-700 to-purple-600 text-white text-4xl sm:text-5xl shadow-lg shadow-indigo-500/30 ring-8 ring-indigo-50">
                <i class="fa-brands fa-laravel text-red-400"></i>
            </div>

            {{-- Welcome Title --}}
            <div>
                <span class="inline-flex items-center px-3.5 py-1 rounded-full text-xs font-bold bg-indigo-50 text-indigo-700 border border-indigo-200/50 mb-3">
                    <span class="w-2 h-2 rounded-full bg-indigo-600 mr-2 animate-ping"></span>
                    Welcome to the Website
                </span>
                <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight">
                    {{ $judulAplikasi }}
                </h1>
                <p class="text-sm sm:text-base text-slate-500 max-w-lg mx-auto mt-3 leading-relaxed">
                    {{ $pesan }}
                </p>
            </div>

            {{-- Student Profile Badge --}}
            <div class="inline-flex flex-wrap items-center justify-center gap-2 p-2 bg-slate-50 rounded-2xl border border-slate-200/80 text-xs text-slate-600">
                <span class="font-bold text-slate-800 flex items-center px-2 py-1">
                    <i class="fa-solid fa-user-tie text-indigo-600 mr-1.5"></i> {{ $namaMahasiswa }}
                </span>
                <span class="text-slate-300">&bull;</span>
                <span class="font-semibold text-indigo-600 px-2 py-1">
                    ID: {{ $nim }}
                </span>
                <span class="text-slate-300">&bull;</span>
                <span class="text-slate-500 px-2 py-1">
                    <i class="fa-solid fa-book-open mr-1"></i> {{ $mataKuliah }}
                </span>
            </div>

            {{-- MAIN ENTER BUTTON --}}
            <div class="pt-2">
                <a href="{{ route('home') }}" 
                   class="inline-flex items-center justify-center px-8 py-4 rounded-2xl bg-gradient-to-r from-indigo-600 via-indigo-700 to-purple-700 hover:from-indigo-700 hover:to-purple-800 text-white font-bold text-base shadow-lg shadow-indigo-500/25 hover:shadow-indigo-500/40 hover:scale-[1.02] active:scale-[0.98] transition-all duration-200 group">
                    <span>Enter Website</span>
                    <div class="ml-3 w-8 h-8 rounded-xl bg-white/20 flex items-center justify-center text-white group-hover:translate-x-1 transition-transform">
                        <i class="fa-solid fa-arrow-right-to-bracket text-sm"></i>
                    </div>
                </a>
                <p class="text-xs text-slate-400 mt-2">Click the button above to open the Homepage</p>
            </div>

            {{-- Feature Overview --}}
            <div class="pt-6 border-t border-slate-100 grid grid-cols-3 gap-3 text-center text-xs text-slate-500">
                <div class="p-2.5 rounded-xl bg-slate-50/70 border border-slate-100">
                    <i class="fa-solid fa-code text-indigo-500 text-base mb-1 block"></i>
                    <span class="font-semibold text-slate-700 block">Home</span>
                    <span class="text-[11px] text-slate-400">Blade Variables</span>
                </div>
                <div class="p-2.5 rounded-xl bg-slate-50/70 border border-slate-100">
                    <i class="fa-solid fa-arrows-rotate text-purple-500 text-base mb-1 block"></i>
                    <span class="font-semibold text-slate-700 block">About Me</span>
                    <span class="text-[11px] text-slate-400">While Loop</span>
                </div>
                <div class="p-2.5 rounded-xl bg-slate-50/70 border border-slate-100">
                    <i class="fa-solid fa-images text-pink-500 text-base mb-1 block"></i>
                    <span class="font-semibold text-slate-700 block">Photo Gallery</span>
                    <span class="text-[11px] text-slate-400">Responsive Grid</span>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
