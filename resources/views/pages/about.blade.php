@extends('layouts.app')

@section('title', 'About Me - While Loop')

@section('content')
<div class="space-y-8">

    {{-- Page 2 Header Banner --}}
    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-6">
        <div class="flex items-center space-x-4">
            <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-2xl bg-gradient-to-tr from-indigo-600 to-purple-600 text-white flex items-center justify-center text-3xl font-bold shadow-md">
                <i class="fa-solid fa-user-tie"></i>
            </div>
            <div>
                <div class="flex items-center gap-2 mb-1">
                    <span class="px-2.5 py-0.5 rounded-full text-xs font-bold bg-indigo-100 text-indigo-700">
                        Page 2: Personal Profile
                    </span>
                    <span class="px-2.5 py-0.5 rounded-full text-xs font-bold bg-amber-100 text-amber-800">
                        <i class="fa-solid fa-arrows-rotate mr-1"></i> Looping: @@while
                    </span>
                </div>
                <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-800">Student Profile &amp; Information</h1>
                <p class="text-sm text-slate-500 mt-1">Data on this page is rendered dynamically using the Blade <code class="px-1.5 py-0.5 bg-slate-100 text-indigo-600 rounded font-mono text-xs font-bold">@@while</code> looping directive.</p>
            </div>
        </div>
    </div>

    {{-- SECTION 1: PERSONAL BIOGRAPHY USING WHILE LOOP --}}
    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-sm">
        <div class="flex items-center justify-between mb-6 pb-4 border-b border-slate-100">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 rounded-xl bg-indigo-100 text-indigo-600 flex items-center justify-center text-lg">
                    <i class="fa-solid fa-address-card"></i>
                </div>
                <div>
                    <h2 class="text-lg font-bold text-slate-800">1. Full Biography</h2>
                    <p class="text-xs text-slate-500">Displaying personal data array using while loop</p>
                </div>
            </div>
            <span class="text-xs font-mono font-semibold bg-slate-100 text-slate-600 px-3 py-1 rounded-lg">
                Total: {{ count($biodata) }} Records
            </span>
        </div>

        {{-- WHILE LOOP IMPLEMENTATION FOR BIOGRAPHY --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @php 
                $i = 0; 
            @endphp

            @while ($i < count($biodata))
                <div class="flex items-center p-4 rounded-2xl border border-slate-100 bg-slate-50/70 hover:bg-indigo-50/50 hover:border-indigo-100 transition-all duration-150">
                    <div class="w-10 h-10 rounded-xl bg-white text-indigo-600 shadow-sm flex items-center justify-center mr-4 shrink-0 text-base">
                        <i class="{{ $biodata[$i]['icon'] }}"></i>
                    </div>
                    <div class="flex-grow">
                        <div class="text-xs font-semibold text-slate-400 uppercase tracking-wide">
                            {{ $biodata[$i]['label'] }}
                        </div>
                        <div class="text-sm font-bold text-slate-800 mt-0.5">
                            {{ $biodata[$i]['nilai'] }}
                        </div>
                    </div>
                    <span class="text-xs font-mono text-indigo-400 bg-white px-2 py-0.5 rounded shadow-xs shrink-0">
                        Index: [{{ $i }}]
                    </span>
                </div>

                @php 
                    $i++; 
                @endphp
            @endwhile
        </div>
    </div>

    {{-- SECTION 2: EDUCATIONAL BACKGROUND USING WHILE LOOP --}}
    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-sm">
        <div class="flex items-center justify-between mb-6 pb-4 border-b border-slate-100">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center text-lg">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <div>
                    <h2 class="text-lg font-bold text-slate-800">2. Educational Background</h2>
                    <p class="text-xs text-slate-500">Formal education timeline from Primary School to University</p>
                </div>
            </div>
            <span class="text-xs font-mono font-semibold bg-purple-50 text-purple-700 px-3 py-1 rounded-lg">
                Timeline While
            </span>
        </div>

        {{-- WHILE LOOP IMPLEMENTATION FOR EDUCATION --}}
        <div class="space-y-6 relative before:absolute before:inset-0 before:left-4 before:h-full before:w-0.5 before:bg-indigo-100">
            @php 
                $j = 0; 
            @endphp

            @while ($j < count($riwayatPendidikan))
                <div class="relative flex items-start space-x-4 pl-1">
                    {{-- Bullet Index --}}
                    <div class="w-7 h-7 rounded-full bg-indigo-600 text-white flex items-center justify-center text-xs font-bold ring-4 ring-white shadow shrink-0 z-10">
                        {{ $j + 1 }}
                    </div>

                    {{-- Education Card --}}
                    <div class="flex-grow bg-slate-50 rounded-2xl p-4 border border-slate-100 hover:border-indigo-200 transition">
                        <div class="flex flex-wrap items-center justify-between gap-2 mb-1">
                            <h3 class="text-base font-bold text-slate-800">{{ $riwayatPendidikan[$j]['institusi'] }}</h3>
                            <span class="px-2.5 py-0.5 text-xs font-semibold rounded-full bg-indigo-100 text-indigo-700">
                                {{ $riwayatPendidikan[$j]['periode'] }}
                            </span>
                        </div>
                        <div class="flex items-center gap-2 mb-2 text-xs font-semibold text-purple-700">
                            <span>{{ $riwayatPendidikan[$j]['jenjang'] }}</span>
                            <span>&bull;</span>
                            <span>Status: {{ $riwayatPendidikan[$j]['status'] }}</span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            {{ $riwayatPendidikan[$j]['deskripsi'] }}
                        </p>
                    </div>
                </div>

                @php 
                    $j++; 
                @endphp
            @endwhile
        </div>
    </div>

    {{-- SECTION 3: HOBBIES & INTERESTS USING WHILE LOOP --}}
    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-sm">
        <h2 class="text-lg font-bold text-slate-800 mb-4 flex items-center">
            <i class="fa-solid fa-heart mr-2 text-rose-500"></i> 3. Interests &amp; Hobbies
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @php 
                $m = 0; 
            @endphp

            @while ($m < count($hobi))
                <div class="p-4 rounded-2xl border border-slate-200/80 bg-slate-50 hover:bg-white hover:shadow-md hover:border-indigo-200 transition-all duration-200 flex flex-col items-center text-center">
                    <div class="w-12 h-12 rounded-2xl bg-indigo-100 text-indigo-600 flex items-center justify-center text-xl mb-3">
                        <i class="{{ $hobi[$m]['icon'] }}"></i>
                    </div>
                    <h3 class="text-sm font-bold text-slate-800 mb-1">{{ $hobi[$m]['nama'] }}</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">{{ $hobi[$m]['keterangan'] }}</p>
                </div>

                @php 
                    $m++; 
                @endphp
            @endwhile
        </div>
    </div>

</div>
@endsection
