{{-- 
    FOOTER TERPISAH (resources/views/layouts/footer.blade.php)
    Komponen footer ini dibuat terpisah agar modular dan mudah di-maintain.
--}}
<footer class="bg-white border-t border-slate-200 mt-auto py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-slate-500">
        <div class="flex items-center space-x-2">
            <span class="font-bold text-indigo-600">Laravel 12</span>
            <span>&bull;</span>
            <span>Laragon Web Practicum</span>
            <span>&bull;</span>
            <span class="text-slate-400">MVC Architecture (Model-View-Controller)</span>
        </div>
        <div class="flex items-center space-x-4">
            <span><i class="fa-solid fa-server mr-1 text-slate-400"></i> Localhost / Laragon</span>
            <span><i class="fa-brands fa-php mr-1 text-slate-400"></i> PHP {{ PHP_VERSION }}</span>
            <span>&copy; {{ date('Y') }} All Rights Reserved</span>
        </div>
    </div>
</footer>

