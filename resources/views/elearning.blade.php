<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Learning - GetSmart Indonesia</title>
    <meta name="description" content="Platform E-Learning GetSmart Indonesia. Akses kursus broadcasting, fotografi, desain, dan produksi kreatif.">
    
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
        .btn-orange { background: linear-gradient(135deg, #f56500, #d45000); transition: all 0.3s ease; }
        .btn-orange:hover { transform: translateY(-2px); box-shadow: 0 8px 25px rgba(245,101,0,0.4); }
        .course-thumb { transition: transform 0.4s ease; }
        .course-card:hover .course-thumb { transform: scale(1.05); }
        input:focus { outline: none; box-shadow: 0 0 0 3px rgba(26,31,212,0.15); border-color: #1a1fd4; }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50" x-data="{ showLogin: false }">

    <!-- Top Bar -->
    <div class="bg-gs-blue-dark text-white text-xs py-2 px-6 flex justify-between items-center">
        <span class="text-white/60">Selamat datang di E-Learning GetSmart Indonesia</span>
        <div class="flex items-center gap-4">
            <span class="text-white/70">🌐 Bahasa Indonesia (id)</span>
            <a href="/elearning/login" class="text-gs-orange font-bold hover:text-orange-300 transition-colors">Masuk →</a>
        </div>
    </div>

    <!-- Nav -->
    <nav class="bg-white border-b border-gray-100 shadow-sm sticky top-0 z-50" x-data="{ open: false }">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="/" class="flex items-center gap-3">
                <div class="flex items-center gap-1">
                    <span class="font-serif font-black text-gs-blue text-2xl tracking-tight">GET</span>
                    <span class="text-gs-orange font-black text-2xl">SMART</span>
                </div>
                <div class="hidden sm:block border-l border-gray-200 pl-3">
                    <p class="text-[10px] text-gray-400 font-medium leading-none">E-Learning</p>
                    <p class="text-[10px] text-gray-400 font-medium leading-none">Management System</p>
                </div>
            </a>
            <div class="hidden md:flex items-center gap-6">
                <a href="/elearning" class="text-sm font-semibold text-gs-blue border-b-2 border-gs-blue pb-0.5">Beranda</a>
                <a href="/elearning/login" class="btn-orange text-white text-sm font-bold px-5 py-2 rounded-xl">Masuk</a>
            </div>
            <button @click="open = !open" class="md:hidden text-gray-600">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
        <div x-show="open" x-transition class="md:hidden bg-white border-t border-gray-100 px-6 pb-4">
            <a href="/elearning" class="block py-2 text-sm font-semibold text-gs-blue">Beranda</a>
            <a href="/elearning/login" class="block py-2 text-sm font-medium text-gray-600">Masuk</a>
        </div>
    </nav>

    <!-- Hero / Intro -->
    <div class="bg-gradient-to-br from-gs-blue-dark via-gs-blue to-indigo-500 text-white py-16 px-6 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: url('https://images.unsplash.com/photo-1516321497487-e288fb19713f?w=1920&fit=crop'); background-size: cover; background-position: center;"></div>
        <div class="relative z-10 max-w-4xl mx-auto text-center">
            <p class="text-gs-orange/90 font-semibold text-xs tracking-widest uppercase mb-3">Platform Digital GetSmart</p>
            <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4">Elearning Get Smart</h1>
            <p class="text-white/70 text-sm max-w-xl mx-auto">Tingkatkan skill broadcasting, fotografi, desain, dan produksi kreatifmu bersama komunitas GetSmart Indonesia.</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-5xl mx-auto px-6 py-14">
        
        <div class="mb-10">
            <h2 class="text-2xl font-bold text-gray-800 mb-1">Kursus yang tersedia</h2>
            <div style="height:3px;width:50px;background:linear-gradient(90deg,#1a1fd4,#f56500);border-radius:2px;margin-top:0.5rem;"></div>
        </div>

        <div class="space-y-6">
            <!-- Course 1: Hunting Fotografi -->
            <div class="course-card bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden card-hover">
                <div class="flex flex-col sm:flex-row">
                    <div class="sm:w-56 h-44 sm:h-auto overflow-hidden flex-shrink-0 relative">
                        <img src="https://images.unsplash.com/photo-1516035069371-29a1b244cc32?w=400&h=280&fit=crop" 
                             alt="Hunting Foto/Video" class="course-thumb w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-r from-black/30 to-transparent sm:bg-none"></div>
                        <div class="absolute top-3 left-3 sm:hidden">
                            <span class="bg-gs-orange text-white text-[10px] font-bold px-2 py-0.5 rounded-full">FOTOGRAFI</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <span class="hidden sm:inline-block bg-gs-orange/10 text-gs-orange text-[10px] font-bold px-2.5 py-0.5 rounded-full border border-gs-orange/20">HUNTING FOTOGRAFI & VIDEOGRAFI</span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2 leading-snug">Hunting Fotografi & Videografi</h3>
                            <p class="text-sm text-gray-500 leading-relaxed mb-4">
                                Hunting fotografi dan videografi ini kami selenggarakan sebagai pematangan konsep skenario foto ataupun video
                            </p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="text-xs text-gray-400">
                                Pengajar: <a href="#" class="text-gs-blue font-semibold hover:text-gs-orange transition-colors">Get Smart Admin</a>
                            </p>
                            <a href="/elearning/login" class="btn-primary text-white text-xs font-bold px-5 py-2 rounded-xl">Mulai Belajar</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course 2: In House Training -->
            <div class="course-card bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden card-hover">
                <div class="flex flex-col sm:flex-row">
                    <div class="sm:w-56 h-44 sm:h-auto overflow-hidden flex-shrink-0 relative">
                        <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?w=400&h=280&fit=crop" 
                             alt="In House Training" class="course-thumb w-full h-full object-cover">
                        <div class="absolute top-3 left-3 sm:hidden">
                            <span class="bg-gs-blue text-white text-[10px] font-bold px-2 py-0.5 rounded-full">TRAINING</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <span class="hidden sm:inline-block bg-gs-blue/10 text-gs-blue text-[10px] font-bold px-2.5 py-0.5 rounded-full border border-gs-blue/20">IN HOUSE TRAINING</span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2 leading-snug">In House Training (IHT)</h3>
                            <p class="text-sm text-gray-500 leading-relaxed mb-4">
                                In house training ini kami selenggarakan untuk pembekalan internal agar dapat lebih memiliki kompetensi dan wawasan khusus berkaitan dengan emosional pribadi dan kebutuhan sikap intrapersonal get smart
                            </p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="text-xs text-gray-400">
                                Pengajar: <a href="#" class="text-gs-blue font-semibold hover:text-gs-orange transition-colors">Get Smart Admin</a>
                            </p>
                            <a href="/elearning/login" class="btn-primary text-white text-xs font-bold px-5 py-2 rounded-xl">Mulai Belajar</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course 3: PKL/Magang -->
            <div class="course-card bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden card-hover">
                <div class="flex flex-col sm:flex-row">
                    <div class="sm:w-56 h-44 sm:h-auto overflow-hidden flex-shrink-0 relative">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400&h=280&fit=crop" 
                             alt="PKL Magang" class="course-thumb w-full h-full object-cover">
                        <div class="absolute top-3 left-3 sm:hidden">
                            <span class="bg-green-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full">MAGANG</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <span class="hidden sm:inline-block bg-green-50 text-green-700 text-[10px] font-bold px-2.5 py-0.5 rounded-full border border-green-200">PKL/Magang Get Smart</span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2 leading-snug">PKL / Magang Get Smart</h3>
                            <p class="text-sm text-gray-500 leading-relaxed mb-4">
                                Sebuah modul pengantar dan bimbingan Praktek Kerja Lapangan (PKL) / Magang yang berkaitan dengan bidang produksi dalam melatih Kompetensi Siswa/Mahasiswa untuk dapat pengalaman langsung di industri kreatif.
                            </p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="text-xs text-gray-400">
                                Pengajar: <a href="#" class="text-gs-blue font-semibold hover:text-gs-orange transition-colors">Get Smart Admin</a>
                            </p>
                            <a href="/elearning/login" class="btn-primary text-white text-xs font-bold px-5 py-2 rounded-xl">Mulai Belajar</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course 4: Broadcasting -->
            <div class="course-card bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden card-hover">
                <div class="flex flex-col sm:flex-row">
                    <div class="sm:w-56 h-44 sm:h-auto overflow-hidden flex-shrink-0 relative">
                        <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=400&h=280&fit=crop" 
                             alt="Broadcasting" class="course-thumb w-full h-full object-cover">
                        <div class="absolute top-3 left-3 sm:hidden">
                            <span class="bg-purple-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full">BROADCASTING</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col justify-between flex-1">
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <span class="hidden sm:inline-block bg-purple-50 text-purple-700 text-[10px] font-bold px-2.5 py-0.5 rounded-full border border-purple-200">BROADCASTING & PRODUKSI</span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2 leading-snug">Broadcasting & Produksi Konten</h3>
                            <p class="text-sm text-gray-500 leading-relaxed mb-4">
                                Pelajari dasar-dasar broadcasting, cara membuat konten menarik, teknik produksi audio-visual, dan strategi distribusi konten di platform digital modern.
                            </p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="text-xs text-gray-400">
                                Pengajar: <a href="#" class="text-gs-blue font-semibold hover:text-gs-orange transition-colors">Get Smart Admin</a>
                            </p>
                            <a href="/elearning/login" class="btn-primary text-white text-xs font-bold px-5 py-2 rounded-xl">Mulai Belajar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Login Block -->
        <div class="mt-16 bg-gradient-to-br from-gs-blue to-indigo-600 rounded-3xl p-10 text-center text-white relative overflow-hidden">
            <div class="absolute inset-0 opacity-10" style="background-image: url('https://images.unsplash.com/photo-1543269865-cbf427effbad?w=1200&fit=crop'); background-size: cover;"></div>
            <div class="relative z-10">
                <p class="text-gs-orange font-semibold text-xs tracking-widest uppercase mb-3">Bergabung Sekarang</p>
                <h3 class="text-2xl md:text-3xl font-serif font-bold mb-3">Beberapa kursus membolehkan akses pengguna tamu</h3>
                <p class="text-white/70 text-sm mb-8 max-w-md mx-auto">Login untuk mengakses semua kursus, melacak progres belajarmu, dan mendapatkan sertifikat kelulusan.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="/elearning/login" class="inline-block bg-gs-orange font-bold px-8 py-3 rounded-xl text-sm hover:bg-orange-500 transition-colors shadow-lg">Masuk Sekarang</a>
                    <a href="#" class="inline-block bg-white/10 border border-white/30 backdrop-blur-sm font-bold px-8 py-3 rounded-xl text-sm hover:bg-white/20 transition-colors">Akses sebagai tamu</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-slate-900 text-white pt-16 pb-8">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-12">
            <div>
                <div class="flex items-center gap-1 mb-5">
                    <span class="font-serif font-black text-white text-2xl tracking-tight">GET</span>
                    <span class="text-gs-orange font-black text-2xl">SMART</span>
                </div>
                <p class="text-xs leading-relaxed mb-8 text-white/75">Get Smart Indonesia adalah komunitas kreatif di bidang broadcasting, perfilman, fotografi, dan desain, sekaligus rumah produksi yang menyediakan layanan cetak, desain, serta dokumentasi foto & video.</p>
                <div class="flex gap-4">
                    <a href="#" class="w-9 h-9 rounded-full bg-white/10 hover:bg-gs-orange flex items-center justify-center transition-colors"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg></a>
                    <a href="#" class="w-9 h-9 rounded-full bg-white/10 hover:bg-gs-orange flex items-center justify-center transition-colors"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg></a>
                    <a href="#" class="w-9 h-9 rounded-full bg-white/10 hover:bg-gs-orange flex items-center justify-center transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><rect width="20" height="20" x="2" y="2" rx="5" ry="5" stroke-width="2"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zM17.5 6.5h.01"/></svg></a>
                </div>
            </div>
            <div class="md:pl-10">
                <h4 class="text-gs-orange font-bold text-base mb-6 uppercase tracking-widest">Quick Links</h4>
                <ul class="space-y-3">
                    <li><a href="/" class="text-xs text-white/75 font-medium hover:text-white flex items-center gap-3 transition-colors group"><span class="w-1.5 h-1.5 rounded-full bg-gs-orange group-hover:scale-150 transition-transform"></span> Home</a></li>
                    <li><a href="/event" class="text-xs text-white/75 font-medium hover:text-white flex items-center gap-3 transition-colors group"><span class="w-1.5 h-1.5 rounded-full bg-gs-orange group-hover:scale-150 transition-transform"></span> Event</a></li>
                    <li><a href="/elearning" class="text-xs text-white font-bold hover:text-white flex items-center gap-3"><span class="w-1.5 h-1.5 rounded-full bg-gs-orange"></span> E-Learning</a></li>
                    <li><a href="/#contact" class="text-xs text-white/75 font-medium hover:text-white flex items-center gap-3 transition-colors group"><span class="w-1.5 h-1.5 rounded-full bg-gs-orange group-hover:scale-150 transition-transform"></span> Contact Us</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-gs-orange font-bold text-base mb-6 uppercase tracking-widest">Contact Us</h4>
                <ul class="space-y-5">
                    <li class="flex items-start gap-3"><svg class="w-4 h-4 text-gs-orange mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg><span class="text-xs text-white/75 leading-relaxed">Jl. MM No.11 J 4, RT.4/RW.9, Sukabumi Utara, Jakarta Barat 11540</span></li>
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
