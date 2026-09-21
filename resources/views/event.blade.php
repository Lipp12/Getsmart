<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Event - PT Get Smart Production</title>
    <meta name="description" content="Daftar event dan kegiatan terbaru dari komunitas Get Smart Indonesia.">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    },
                    colors: {
                        'gs-blue': '#1a1fd4',
                        'gs-blue-dark': '#0f12a0',
                        'gs-orange': '#f56500',
                        'gs-peach': '#fdf3ec',
                    }
                }
            }
        }
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        .card-hover { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .card-hover:hover { transform: translateY(-5px); box-shadow: 0 20px 50px rgba(0,0,0,0.10); }
        .btn-primary { background: linear-gradient(135deg, #1a1fd4, #0f12a0); transition: all 0.3s ease; }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 8px 25px rgba(26,31,212,0.4); }
        .sidebar-title { position: relative; padding-bottom: 12px; }
        .sidebar-title::after { content: ''; position: absolute; bottom: 0; left: 0; width: 40px; height: 3px; background: linear-gradient(90deg, #1a1fd4, #f56500); border-radius: 2px; }
        .post-card img { transition: transform 0.5s ease; }
        .post-card:hover img { transform: scale(1.04); }
        input:focus, select:focus { outline: none; box-shadow: 0 0 0 3px rgba(245,101,0,0.15); }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50">

    <!-- Header Navigation -->
    <nav class="w-full z-50 bg-gs-blue shadow-2xl" x-data="{ open: false }">
        <div class="max-w-7xl mx-auto px-6 py-4 text-center">
            <div class="mb-3 flex justify-between md:justify-center items-center">
                <a href="/" class="font-serif font-bold text-3xl text-white tracking-widest uppercase">GetSmart</a>
                <button @click="open = !open" class="md:hidden text-white">
                    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>
            <div class="hidden md:flex flex-wrap justify-center gap-x-5 gap-y-1.5 text-[13.5px]">
                <a href="/" class="font-medium text-white/80 hover:text-white transition-colors hover:underline underline-offset-4 decoration-gs-orange">Home</a>
                <a href="/event" class="font-semibold text-white underline underline-offset-4 decoration-gs-orange">Event</a>
                <a href="/#program" class="font-medium text-white/80 hover:text-white transition-colors hover:underline underline-offset-4 decoration-gs-orange">Program</a>
                <a href="/#team" class="font-medium text-white/80 hover:text-white transition-colors">Training</a>
                <a href="/elearning" class="font-medium text-white/80 hover:text-white transition-colors">Login Elearning</a>
                <a href="/#contact" class="font-medium text-white/80 hover:text-white transition-colors">Contact Us</a>
                <a href="#" class="font-medium text-white/80 hover:text-white transition-colors">E-Library Get Smart</a>
                <a href="#" class="font-medium text-white/80 hover:text-white transition-colors">Registration</a>
                <a href="#" class="font-medium text-white/80 hover:text-white transition-colors">Login</a>
                <a href="#" class="font-medium text-white/80 hover:text-white transition-colors">My Account</a>
            </div>
            <div x-show="open" x-transition class="md:hidden mt-3 bg-gs-blue-dark rounded-2xl p-5 text-left border border-white/10">
                <a href="/" class="block py-2.5 text-white/80 font-medium border-b border-white/10">Home</a>
                <a href="/event" class="block py-2.5 text-white font-semibold border-b border-white/10">Event</a>
                <a href="/elearning" class="block py-2.5 text-white/80 font-medium border-b border-white/10">Login Elearning</a>
                <a href="/#contact" class="block py-2.5 text-white/80 font-medium">Contact Us</a>
            </div>
        </div>
    </nav>

    <!-- Page Header Banner -->
    <div class="bg-gradient-to-r from-gs-blue-dark to-gs-blue text-white py-12 px-6 text-center relative overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: url('https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=1920&fit=crop'); background-size: cover; background-position: center;"></div>
        <div class="relative z-10">
            <p class="text-gs-orange font-semibold text-xs tracking-widest uppercase mb-2">Komunitas GetSmart</p>
            <h1 class="text-3xl md:text-4xl font-serif font-bold">Event & Kegiatan</h1>
            <div class="flex items-center justify-center gap-2 mt-3 text-xs text-white/60">
                <a href="/" class="hover:text-white transition-colors">Home</a>
                <span>/</span>
                <span class="text-white/90">Event</span>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-6xl mx-auto px-4 py-14 grid md:grid-cols-3 gap-10">

        <!-- Posts Grid (2/3 width) -->
        <div class="md:col-span-2">
            <div class="grid sm:grid-cols-2 gap-8">
                <!-- Post 1 -->
                <div class="post-card bg-white rounded-2xl overflow-hidden shadow-md card-hover border border-gray-100 flex flex-col">
                    <div class="overflow-hidden h-52">
                        <div class="h-full bg-gradient-to-br from-[#7c3aed] via-[#4f46e5] to-[#1a1fd4] flex items-center justify-center">
                            <svg class="w-16 h-16 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                            </svg>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-[10px] font-bold text-white bg-gs-orange px-2.5 py-0.5 rounded-full">EVENT</span>
                            <span class="text-[10px] text-gray-400 font-medium">2 Oct, 2025</span>
                        </div>
                        <h3 class="font-bold text-base text-gray-800 mb-3 leading-snug flex-1">Participant Welcome GetSmart</h3>
                        <a href="#" class="inline-flex items-center gap-1 text-xs font-bold text-gs-blue hover:text-gs-orange transition-colors group">
                            Read More 
                            <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Post 2 -->
                <div class="post-card bg-white rounded-2xl overflow-hidden shadow-md card-hover border border-gray-100 flex flex-col">
                    <div class="overflow-hidden h-52">
                        <div class="h-full bg-gradient-to-br from-[#9333ea] via-[#6d28d9] to-[#4338ca] flex items-center justify-center">
                            <svg class="w-16 h-16 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                            </svg>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-[10px] font-bold text-white bg-gs-blue px-2.5 py-0.5 rounded-full">POST</span>
                            <span class="text-[10px] text-gray-400 font-medium">15 Jun, 2025</span>
                        </div>
                        <h3 class="font-bold text-base text-gray-800 mb-3 leading-snug flex-1">Hello world!</h3>
                        <a href="#" class="inline-flex items-center gap-1 text-xs font-bold text-gs-blue hover:text-gs-orange transition-colors group">
                            Read More 
                            <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar (1/3 width) -->
        <div class="space-y-10">

            <!-- Search -->
            <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                <h4 class="font-bold text-base text-gray-800 mb-5 sidebar-title">Search</h4>
                <div class="flex mt-5 overflow-hidden rounded-xl border border-gray-200 focus-within:border-gs-orange transition-colors">
                    <input type="text" class="flex-1 px-4 py-2.5 text-sm border-none focus:ring-0 outline-none" placeholder="Search posts...">
                    <button class="btn-primary text-white px-5 text-xs font-bold">Search</button>
                </div>
            </div>

            <!-- Recent Posts -->
            <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                <h4 class="font-bold text-base text-gray-800 mb-5 sidebar-title">Recent Posts</h4>
                <ul class="mt-5 space-y-4">
                    <li class="flex items-start gap-3 group">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-[#7c3aed] to-[#1a1fd4] flex-shrink-0 flex items-center justify-center">
                            <svg class="w-5 h-5 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                        </div>
                        <div>
                            <a href="#" class="text-xs font-semibold text-gray-700 group-hover:text-gs-orange transition-colors leading-snug block">Participant Welcome GetSmart</a>
                            <span class="text-[10px] text-gray-400">2 Oct, 2025</span>
                        </div>
                    </li>
                    <li class="flex items-start gap-3 group">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-[#9333ea] to-[#4338ca] flex-shrink-0 flex items-center justify-center">
                            <svg class="w-5 h-5 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                        </div>
                        <div>
                            <a href="#" class="text-xs font-semibold text-gray-700 group-hover:text-gs-orange transition-colors leading-snug block">Hello world!</a>
                            <span class="text-[10px] text-gray-400">15 Jun, 2025</span>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Recent Comments -->
            <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                <h4 class="font-bold text-base text-gray-800 mb-5 sidebar-title">Recent Comments</h4>
                <div class="mt-5 flex items-start gap-3">
                    <div class="w-8 h-8 rounded-full bg-gs-blue/10 flex-shrink-0 flex items-center justify-center">
                        <svg class="w-4 h-4 text-gs-blue" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"/></svg>
                    </div>
                    <p class="text-xs text-gray-600 leading-relaxed">A WordPress Commenter on <a href="#" class="text-gs-orange font-semibold hover:underline">Hello world!</a></p>
                </div>
            </div>

            <!-- Archives -->
            <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                <h4 class="font-bold text-base text-gray-800 mb-5 sidebar-title">Archives</h4>
                <ul class="mt-5 space-y-3">
                    <li><a href="#" class="flex items-center gap-2 text-xs text-gray-600 hover:text-gs-orange transition-colors font-medium group">
                        <span class="w-1.5 h-1.5 rounded-full bg-gs-blue group-hover:bg-gs-orange transition-colors flex-shrink-0"></span> October 2025
                    </a></li>
                    <li><a href="#" class="flex items-center gap-2 text-xs text-gray-600 hover:text-gs-orange transition-colors font-medium group">
                        <span class="w-1.5 h-1.5 rounded-full bg-gs-blue group-hover:bg-gs-orange transition-colors flex-shrink-0"></span> June 2025
                    </a></li>
                </ul>
            </div>

            <!-- Categories -->
            <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                <h4 class="font-bold text-base text-gray-800 mb-5 sidebar-title">Categories</h4>
                <div class="mt-5">
                    <a href="#" class="inline-block text-xs font-semibold text-gs-blue bg-gs-blue/8 hover:bg-gs-orange hover:text-white border border-gs-blue/20 px-4 py-1.5 rounded-full transition-all duration-200">Uncategorized</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer id="contact" class="bg-slate-900 text-white pt-16 pb-8">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-12">
            <div>
                <a href="/" class="inline-block font-serif font-bold text-3xl text-white tracking-widest uppercase mb-5">GetSmart</a>
                <p class="text-xs leading-relaxed mb-8 text-white/75">Get Smart Indonesia adalah komunitas kreatif di bidang broadcasting, perfilman, fotografi, dan desain, sekaligus rumah produksi yang menyediakan layanan cetak, desain, serta dokumentasi foto & video.</p>
                <div class="flex gap-4">
                    <a href="#" class="w-9 h-9 rounded-full bg-white/10 hover:bg-gs-orange flex items-center justify-center transition-colors duration-300"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg></a>
                    <a href="#" class="w-9 h-9 rounded-full bg-white/10 hover:bg-gs-orange flex items-center justify-center transition-colors duration-300"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg></a>
                    <a href="#" class="w-9 h-9 rounded-full bg-white/10 hover:bg-gs-orange flex items-center justify-center transition-colors duration-300"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><rect width="20" height="20" x="2" y="2" rx="5" ry="5" stroke-width="2"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zM17.5 6.5h.01"/></svg></a>
                </div>
            </div>
            <div class="md:pl-10">
                <h4 class="text-gs-orange font-bold text-base mb-6 uppercase tracking-widest">Quick Links</h4>
                <ul class="space-y-3">
                    <li><a href="/" class="text-xs text-white/75 font-medium hover:text-white flex items-center gap-3 transition-colors group"><span class="w-1.5 h-1.5 rounded-full bg-gs-orange group-hover:scale-150 transition-transform"></span> Home</a></li>
                    <li><a href="/event" class="text-xs text-white font-bold hover:text-white flex items-center gap-3 transition-colors group"><span class="w-1.5 h-1.5 rounded-full bg-gs-orange"></span> Event</a></li>
                    <li><a href="/#program" class="text-xs text-white/75 font-medium hover:text-white flex items-center gap-3 transition-colors group"><span class="w-1.5 h-1.5 rounded-full bg-gs-orange group-hover:scale-150 transition-transform"></span> Program</a></li>
                    <li><a href="/#contact" class="text-xs text-white/75 font-medium hover:text-white flex items-center gap-3 transition-colors group"><span class="w-1.5 h-1.5 rounded-full bg-gs-orange group-hover:scale-150 transition-transform"></span> Contact Us</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-gs-orange font-bold text-base mb-6 uppercase tracking-widest">Contact Us</h4>
                <ul class="space-y-5">
                    <li class="flex items-start gap-3"><svg class="w-4 h-4 text-gs-orange mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg><span class="text-xs text-white/75 leading-relaxed">Jl. MM No.11 J 4, RT.4/RW.9, Sukabumi Utara, Kec. Kb. Jeruk, Kota Jakarta Barat, DKI Jakarta 11540</span></li>
                    <li class="flex items-center gap-3"><svg class="w-4 h-4 text-gs-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.026 11.026 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg><span class="text-xs text-white/75">+62 821-8000-3064</span></li>
                    <li class="flex items-center gap-3"><svg class="w-4 h-4 text-gs-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/></svg><span class="text-xs text-white/75">getsmartindonesia@gmail.com</span></li>
                </ul>
            </div>
        </div>
        <div class="mt-12 pt-6 border-t border-white/10 text-center">
            <p class="text-[11px] text-white/40 font-medium">© 2025 GET SMART INDONESIA. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
