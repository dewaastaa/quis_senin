@extends('layouts.app')

@section('title', 'Photo Gallery')

@section('content')
<div class="space-y-8">

    {{-- Photo Gallery Header Banner --}}
    <div class="bg-gradient-to-r from-purple-700 via-indigo-700 to-indigo-800 rounded-3xl p-8 sm:p-10 text-white shadow-xl relative overflow-hidden">
        <div class="relative z-10 max-w-2xl">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-white/20 backdrop-blur border border-white/20 text-white mb-3">
                <i class="fa-solid fa-camera-retro mr-2 text-pink-300"></i> Page 3: Photo Collection &amp; Gallery
            </span>
            <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Photo Documentation &amp; Gallery</h1>
            <p class="mt-3 text-indigo-100 text-sm sm:text-base leading-relaxed">
                Curated photo collection. Click on any photo to view it in full screen.
            </p>
        </div>

        <div class="absolute -right-8 -top-8 w-64 h-64 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>
    </div>

    {{-- Photo Gallery Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
        @foreach($galeri as $index => $item)
            <div class="bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col">
                
                {{-- Photo: Clicking displays photo only --}}
                <div class="relative overflow-hidden aspect-[4/3] bg-slate-100 cursor-pointer group"
                     onclick="openImageModal('{{ asset('images/' . $item['foto']) }}', '{{ addslashes($item['judul']) }}')"
                     title="Click to view photo">
                    
                    <img src="{{ asset('images/' . $item['foto']) }}" 
                         alt="{{ $item['judul'] }}" 
                         loading="lazy"
                         onerror="this.onerror=null;this.src='https://placehold.co/600x400/4f46e5/ffffff?text=' + encodeURIComponent('{{ $item['judul'] }}');"
                         class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300 ease-out">
                    
                    {{-- Hover indicator overlay --}}
                    <div class="absolute inset-0 bg-slate-950/30 opacity-0 group-hover:opacity-100 transition-opacity duration-200 flex items-center justify-center">
                        <span class="w-12 h-12 rounded-full bg-white/90 text-slate-900 flex items-center justify-center text-lg shadow-lg">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                    </div>

                    {{-- Index Badge --}}
                    <div class="absolute top-3 right-3">
                        <span class="w-7 h-7 rounded-full bg-white/80 backdrop-blur-md text-slate-800 text-xs font-bold flex items-center justify-center shadow-sm">
                            #{{ $index + 1 }}
                        </span>
                    </div>
                </div>

                {{-- Photo Description / Caption Only --}}
                <div class="p-5 flex-grow">
                    <h3 class="text-base font-bold text-slate-800 mb-1">
                        {{ $item['judul'] }}
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                        {{ $item['deskripsi'] }}
                    </p>
                </div>

            </div>
        @endforeach
    </div>

    {{-- Bottom Navigation --}}
    <div class="bg-indigo-50 rounded-2xl p-6 border border-indigo-100 flex flex-col sm:flex-row items-center justify-between gap-4 text-center sm:text-left">
        <div>
            <h4 class="font-bold text-slate-800 text-sm">Page Navigation</h4>
            <p class="text-xs text-slate-500 mt-0.5">Navigate to Homepage or About Me page</p>
        </div>
        <div class="flex items-center space-x-3">
            <a href="{{ route('home') }}" class="px-4 py-2 rounded-xl bg-white border border-slate-200 text-slate-700 text-xs font-bold hover:bg-slate-50 shadow-xs transition">
                <i class="fa-solid fa-house mr-1"></i> To Home
            </a>
            <a href="{{ route('about') }}" class="px-4 py-2 rounded-xl bg-indigo-600 text-white text-xs font-bold hover:bg-indigo-700 shadow-sm transition">
                <i class="fa-solid fa-user mr-1"></i> To About Me
            </a>
        </div>
    </div>

</div>

{{-- MODAL LIGHTBOX TO DISPLAY PHOTO ONLY WHEN CLICKED --}}
<div id="image-modal" 
     class="fixed inset-0 z-50 bg-black/85 backdrop-blur-sm hidden items-center justify-center p-4 sm:p-8"
     onclick="closeImageModal()">
    
    <div class="relative max-w-4xl max-h-[90vh] flex flex-col items-center" onclick="event.stopPropagation()">
        {{-- Close X Button --}}
        <button type="button" 
                onclick="closeImageModal()" 
                class="absolute -top-12 right-0 sm:-right-8 text-white/80 hover:text-white text-3xl font-bold p-2 transition focus:outline-none"
                title="Close Photo">
            <i class="fa-solid fa-xmark"></i>
        </button>

        {{-- Displayed Photo --}}
        <img id="modal-image-src" 
             src="" 
             alt="Full Photo" 
             class="max-h-[82vh] w-auto max-w-full rounded-2xl shadow-2xl object-contain ring-2 ring-white/20">
    </div>
</div>

<script>
    function openImageModal(url, title) {
        var modal = document.getElementById('image-modal');
        var img = document.getElementById('modal-image-src');
        img.src = url;
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeImageModal() {
        var modal = document.getElementById('image-modal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = 'auto';
    }

    // Escape keyboard key to close modal
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeImageModal();
        }
    });
</script>
@endsection
