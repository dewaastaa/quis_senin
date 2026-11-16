@extends('layouts.app')

@section('title', 'Home - Variables')

@section('content')
<div class="space-y-6">

    {{-- Back to Welcome Page Button --}}
    <div class="flex items-center justify-between">
        <a href="{{ route('welcome') }}" class="inline-flex items-center space-x-2 text-xs font-bold text-slate-600 hover:text-indigo-600 bg-white px-3.5 py-2 rounded-xl border border-slate-200 shadow-xs hover:border-indigo-300 transition">
            <i class="fa-solid fa-arrow-left text-indigo-500"></i>
            <span>Back to Welcome Page</span>
        </a>
        <span class="text-xs text-slate-400 font-medium hidden sm:inline">Page 1: Portfolio &bull; Variables</span>
    </div>

    {{-- Hero Banner with Welcome Variables --}}
    <div class="relative overflow-hidden bg-gradient-to-br from-indigo-600 via-indigo-700 to-purple-700 rounded-3xl p-8 sm:p-12 text-white shadow-xl">
        <div class="relative z-10 max-w-3xl">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-white/20 backdrop-blur border border-white/20 text-white mb-4">
                <i class="fa-solid fa-sparkles mr-2 text-yellow-300"></i> Page 1: Welcome &amp; Variables
            </span>
            <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                {{ $namaAplikasi }}
            </h1>
            <p class="mt-4 text-base sm:text-lg text-indigo-100 leading-relaxed">
                {{ $pesanSambutan }}
            </p>

            <div class="mt-6 flex flex-wrap items-center gap-4 text-xs sm:text-sm text-indigo-200">
                <span class="flex items-center"><i class="fa-solid fa-clock mr-2 text-indigo-300"></i> {{ $waktuAkses }}</span>
                <span class="hidden sm:inline">&bull;</span>
                <span class="flex items-center"><i class="fa-solid fa-server mr-2 text-indigo-300"></i> {{ $serverInfo }}</span>
            </div>

            <div class="mt-8 flex flex-wrap gap-4">
                <a href="{{ route('about') }}" class="inline-flex items-center px-6 py-3 rounded-xl bg-white text-indigo-700 font-bold text-sm shadow-md hover:bg-indigo-50 hover:shadow-lg transition">
                    <i class="fa-solid fa-user mr-2"></i> Go to Page 2: About Me
                </a>
                <a href="{{ route('gallery') }}" class="inline-flex items-center px-6 py-3 rounded-xl bg-indigo-900/50 hover:bg-indigo-900/80 text-white border border-white/20 font-semibold text-sm transition">
                    <i class="fa-solid fa-images mr-2"></i> Go to Page 3: Photo Gallery
                </a>
            </div>
        </div>

        {{-- Background Decoration --}}
        <div class="absolute -right-10 -bottom-10 w-80 h-80 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>
    </div>

    {{-- Student Information Card (Variables) --}}
    <div class="bg-white rounded-3xl shadow-sm border border-slate-200 p-6 sm:p-8">
        <div class="flex items-center space-x-3 mb-6 pb-4 border-b border-slate-100">
            <div class="w-12 h-12 rounded-2xl bg-indigo-100 text-indigo-600 flex items-center justify-center text-xl">
                <i class="fa-solid fa-user-graduate"></i>
            </div>
            <div>
                <h3 class="text-lg font-bold text-slate-800">Student Information (Variable Data)</h3>
                <p class="text-xs text-slate-500">Values are dynamically rendered from variables in PageController</p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="p-5 rounded-2xl bg-slate-50 border border-slate-100 hover:border-indigo-100 transition">
                <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block mb-1">Student Name</span>
                <span class="font-bold text-slate-800 text-base block">{{ $namaMahasiswa }}</span>
            </div>
            <div class="p-5 rounded-2xl bg-slate-50 border border-slate-100 hover:border-indigo-100 transition">
                <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block mb-1">Student ID (NIM)</span>
                <span class="font-bold text-indigo-600 text-base block">{{ $nim }}</span>
            </div>
            <div class="p-5 rounded-2xl bg-slate-50 border border-slate-100 hover:border-indigo-100 transition">
                <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block mb-1">Course</span>
                <span class="font-semibold text-slate-700 text-sm block">{{ $mataKuliah }}</span>
            </div>
            <div class="p-5 rounded-2xl bg-slate-50 border border-slate-100 hover:border-indigo-100 transition">
                <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block mb-1">Semester</span>
                <span class="font-semibold text-slate-700 text-sm block">{{ $semester }}</span>
            </div>
        </div>
    </div>

</div>
@endsection
