<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - PT Get Smart Production</title>
    <meta name="description" content="GetSmart Indonesia - Komunitas kreatif broadcasting, perfilman, fotografi, dan desain. Share Knowledge To Your Friend.">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
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
                    },
                    animation: {
                        'fade-up': 'fadeUp 0.6s ease-out forwards',
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        fadeUp: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        .glass-nav { backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); background: rgba(22, 30, 214, 0.15); border-bottom: 1px solid rgba(255,255,255,0.12); }
        .hero-gradient { background: linear-gradient(135deg, rgba(15,18,160,0.92) 0%, rgba(26,31,212,0.75) 50%, rgba(0,0,0,0.5) 100%); }
        .card-hover { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .card-hover:hover { transform: translateY(-6px); box-shadow: 0 20px 60px rgba(0,0,0,0.12); }
        .member-card:hover img { transform: scale(1.05); }
        .member-card img { transition: transform 0.4s ease; }
        .progress-bar { animation: grow 1.5s ease-out forwards; transform-origin: left; }
        @keyframes grow { from { width: 0%; } }
        .section-divider { height: 3px; width: 60px; background: linear-gradient(90deg, #1a1fd4, #f56500); border-radius: 2px; margin: 0.75rem auto 0; }
        .btn-primary { background: linear-gradient(135deg, #1a1fd4, #0f12a0); box-shadow: 0 4px 15px rgba(26,31,212,0.4); transition: all 0.3s ease; }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 8px 25px rgba(26,31,212,0.5); }
        .btn-orange { background: linear-gradient(135deg, #f56500, #d45000); box-shadow: 0 4px 15px rgba(245,101,0,0.35); transition: all 0.3s ease; }
        .btn-orange:hover { transform: translateY(-2px); box-shadow: 0 8px 25px rgba(245,101,0,0.5); }
        .service-grid-item { position: relative; overflow: hidden; }
        .service-grid-item::before { content:''; position: absolute; inset: 0; background: linear-gradient(to bottom right, rgba(26,31,212,0.03), transparent); pointer-events: none; }
        html { scroll-behavior: smooth; }
    </style>
</head>
<body class="font-sans antialiased text-gray-800 bg-white overflow-x-hidden">

    <!-- ===== HERO + NAV ===== -->
    <section id="home" class="relative min-h-screen flex flex-col items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=1920" 
                 alt="Team" class="w-full h-full object-cover">
            <div class="absolute inset-0 hero-gradient"></div>
        </div>

        <!-- Floating Orbs -->
        <div class="absolute top-1/4 left-10 w-64 h-64 rounded-full bg-gs-blue/20 blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-1/4 right-10 w-80 h-80 rounded-full bg-gs-orange/15 blur-3xl pointer-events-none"></div>

        <!-- Nav -->
        <nav class="absolute top-0 w-full z-50 glass-nav" x-data="{ open: false }">
            <div class="max-w-7xl mx-auto px-6 py-4 text-center">
                <div class="mb-3 flex justify-between md:justify-center items-center">
                    <a href="/" class="font-serif font-bold text-3xl text-white tracking-widest uppercase drop-shadow-lg">GetSmart</a>
                    <button @click="open = !open" class="md:hidden text-white p-1">
                        <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                </div>
                <div class="hidden md:flex flex-col items-center gap-2">
                    <div class="flex flex-wrap justify-center gap-x-5 gap-y-1.5 text-[13.5px]">
                        <a href="/" class="font-semibold text-white/90 hover:text-white transition-colors underline underline-offset-4 decoration-gs-orange">Home</a>
                        <a href="/event" class="font-medium text-white/80 hover:text-white transition-colors hover:underline hover:underline-offset-4 hover:decoration-gs-orange">Event</a>
                        <a href="/#program" class="font-medium text-white/80 hover:text-white transition-colors hover:underline hover:underline-offset-4 hover:decoration-gs-orange">Program</a>
                        <a href="/#team" class="font-medium text-white/80 hover:text-white transition-colors hover:underline hover:underline-offset-4 hover:decoration-gs-orange">Training</a>
                        <a href="/elearning" class="font-medium text-white/80 hover:text-white transition-colors hover:underline hover:underline-offset-4 hover:decoration-gs-orange">Login Elearning</a>
                        <a href="/#contact" class="font-medium text-white/80 hover:text-white transition-colors hover:underline hover:underline-offset-4 hover:decoration-gs-orange">Contact Us</a>
                        <a href="#" class="font-medium text-white/80 hover:text-white transition-colors">E-Library Get Smart</a>
                        <a href="#" class="font-medium text-white/80 hover:text-white transition-colors">Registration</a>
                        <a href="#" class="font-medium text-white/80 hover:text-white transition-colors">Login</a>
                        <a href="#" class="font-medium text-white/80 hover:text-white transition-colors">My Account</a>
                    </div>
                    <div class="flex flex-wrap justify-center gap-x-5 gap-y-1.5 text-[13px] opacity-75">
                        <a href="#" class="font-medium text-white hover:text-white/90 transition-colors">Lost Password</a>
                        <a href="#" class="font-medium text-white hover:text-white/90 transition-colors">Membership Pricing</a>
                        <a href="#" class="font-medium text-white hover:text-white/90 transition-colors">ThankYou</a>
                        <a href="#" class="font-medium text-white hover:text-white/90 transition-colors">Etn Category</a>
                        <a href="#" class="font-medium text-white hover:text-white/90 transition-colors">Etn Tags</a>
                    </div>
                </div>
                <div x-show="open" x-transition class="md:hidden mt-3 bg-gs-blue-dark/90 backdrop-blur-xl rounded-2xl p-5 text-left border border-white/10 shadow-2xl">
                    <a href="/" class="block py-2.5 text-white font-semibold border-b border-white/10">Home</a>
                    <a href="/event" class="block py-2.5 text-white/85 font-medium border-b border-white/10">Event</a>
                    <a href="/elearning" class="block py-2.5 text-white/85 font-medium border-b border-white/10">Login Elearning</a>
                    <a href="/#contact" class="block py-2.5 text-white/85 font-medium">Contact Us</a>
                </div>
            </div>
        </nav>

        <!-- Hero Content -->
        <div class="relative z-10 text-center px-4 max-w-5xl mx-auto mt-28">
            <p class="text-gs-orange/90 font-semibold text-sm tracking-widest uppercase mb-4">Komunitas Kreatif Indonesia</p>
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-serif font-bold text-white mb-10 leading-tight" style="text-shadow: 0 4px 30px rgba(0,0,0,0.4);">
                Tentukan Caramu<br>Raih Kebersamaan
            </h1>
            <div class="flex flex-wrap justify-center gap-5">
                <a href="/event" class="inline-flex items-center gap-2.5 px-10 py-3.5 rounded-full bg-white text-gs-orange font-bold text-base shadow-2xl hover:shadow-white/20 card-hover">
                    Explore
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                </a>
                <a href="/elearning" class="inline-flex items-center gap-2 px-10 py-3.5 rounded-full border-2 border-white/60 text-white font-bold text-base backdrop-blur-sm hover:bg-white/15 card-hover">
                    E-Learning
                </a>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 z-10 animate-bounce">
            <svg class="w-6 h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </div>
    </section>

    <!-- ===== 3 ACTION BLOCKS ===== -->
    <section id="explore" class="max-w-5xl mx-auto -mt-16 relative z-20 px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 rounded-2xl overflow-hidden shadow-2xl">
            <div class="bg-gs-blue text-center p-10 text-white card-hover cursor-pointer group">
                <div class="text-5xl mb-5 group-hover:scale-110 transition-transform duration-300">👉</div>
                <h3 class="font-bold text-lg mb-3">Become a Volunteer</h3>
                <p class="text-sm text-white/80 leading-relaxed">Jadilah bagian dari Get Smart dan bantu kembangkan komunitas kreatif dan edukasi.</p>
            </div>
            <div class="bg-gs-orange text-center p-10 text-white card-hover cursor-pointer group">
                <div class="text-5xl mb-5 group-hover:scale-110 transition-transform duration-300">💳</div>
                <h3 class="font-bold text-lg mb-3">Give Donation</h3>
                <p class="text-sm text-white/80 leading-relaxed">Dukung program edukasi dan broadcast Get Smart melalui donasi kamu.</p>
            </div>
            <div class="bg-gs-blue text-center p-10 text-white card-hover cursor-pointer group">
                <div class="text-5xl mb-5 group-hover:scale-110 transition-transform duration-300">🎓</div>
                <h3 class="font-bold text-lg mb-3">Give Scholarship</h3>
                <p class="text-sm text-white/80 leading-relaxed">Beri akses belajar dan peluang baru bagi pelajar dan kreator muda.</p>
            </div>
        </div>
    </section>

    <!-- ===== JOIN SECTION ===== -->
    <section class="py-24 bg-white">
        <div class="max-w-5xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
            <div class="grid grid-cols-2 gap-3">
                <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=600&h=350&fit=crop" 
                     class="col-span-2 rounded-2xl w-full h-52 object-cover shadow-lg card-hover" alt="Kegiatan">
                <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?w=300&h=300&fit=crop" 
                     class="rounded-2xl w-full h-44 object-cover shadow-md card-hover" alt="Gathering">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=300&h=300&fit=crop" 
                     class="rounded-2xl w-full h-44 object-cover shadow-md card-hover" alt="Team">
            </div>
            <div>
                <p class="text-gs-orange font-semibold text-xs tracking-widest uppercase mb-3">Kegiatan Komunitas</p>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-5 leading-tight">
                    Ayo segera <span class="text-gs-orange">Join</span> untuk Mengikuti Berbagai Kegiatan Seru!
                </h2>
                <p class="text-gray-500 text-sm mb-8 leading-relaxed">
                    Bergabunglah dengan berbagai kegiatan inspiratif dan penuh pengalaman nyata bersama Get Smart Indonesia. Mulai dari training class interaktif, outing class seru, hingga workshop kreatif, semua dirancang untuk mengasah skill, membangun relasi, dan membuka peluang baru.
                </p>
                <a href="#" class="inline-block px-8 py-3 btn-orange text-white font-bold rounded-xl text-sm">Join Now</a>
            </div>
        </div>
    </section>

    <!-- ===== ABOUT US ===== -->
    <section class="py-24 bg-gs-peach">
        <div class="max-w-5xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
            <div>
                <p class="text-gs-orange font-semibold text-xs tracking-widest uppercase mb-3">Tentang Kami</p>
                <h2 class="text-4xl font-bold text-gray-900 mb-2">About Us</h2>
                <div class="section-divider" style="margin:0 0 1.5rem 0;"></div>
                <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                    GetSmart adalah komunitas yang berdiri sejak 2016 di bidang broadcasting, perfilman, fotografi, radio, dan kreativitas lainnya. Kami hadir sebagai wadah belajar melalui Learning Center serta Produksi & Acara, sekaligus ruang berbagi ilmu, pengembangan keterampilan, jejaring, dan wirausaha kreatif.
                </p>
                <p class="text-gray-900 text-sm font-bold mb-8 italic border-l-4 border-gs-orange pl-4 py-1 bg-white/50 rounded-r-lg">
                    "Share Knowledge To Your Friend, We Are Broadcasting Community."
                </p>
                <a href="#" class="inline-block px-7 py-2.5 border-2 border-gs-orange text-gs-orange rounded-full font-semibold text-sm hover:bg-gs-orange hover:text-white transition-all duration-300">More &rarr;</a>
            </div>
            <div class="grid grid-cols-2 gap-3">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&h=350&fit=crop" 
                     class="col-span-2 rounded-2xl w-full h-52 object-cover shadow-lg card-hover" alt="Team">
                <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?w=300&h=300&fit=crop" 
                     class="rounded-2xl w-full h-36 object-cover shadow-md card-hover" alt="Gathering">
                <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=300&h=300&fit=crop" 
                     class="rounded-2xl w-full h-36 object-cover shadow-md card-hover" alt="Event">
            </div>
        </div>
    </section>

    <!-- ===== OUR SERVICE ===== -->
    <section id="program" class="py-24 bg-white">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center mb-16">
                <p class="text-gs-orange font-semibold text-xs tracking-widest uppercase mb-3">Yang Kami Tawarkan</p>
                <h2 class="text-4xl font-bold text-gray-900 mb-2">Our Service</h2>
                <div class="section-divider"></div>
                <p class="text-gray-500 max-w-xl mx-auto text-sm mt-6">Get Smart hadir bukan hanya sebagai komunitas, tapi juga sebagai rumah produksi kreatif.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 rounded-2xl overflow-hidden shadow-xl border border-gray-100">
                <!-- Row 1 -->
                <div class="p-8 bg-white service-grid-item flex flex-col justify-center border-b md:border-b-0 border-gray-100">
                    <span class="text-gs-blue font-black text-3xl mb-3">01</span>
                    <h3 class="font-bold text-lg mb-3 text-gray-800">Learning Center</h3>
                    <p class="text-xs text-gray-500 mb-6 leading-relaxed">Program pembelajaran interaktif meliputi pelatihan, training, hingga e-learning untuk meningkatkan skill di bidang broadcasting, desain, dan produksi.</p>
                    <div><a href="#" class="inline-block px-5 py-2 btn-primary text-white text-xs font-bold rounded-full">Read More</a></div>
                </div>
                <div class="h-64 md:h-auto bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1543269865-cbf427effbad?auto=format&fit=crop&q=80&w=600');"></div>
                <div class="p-8 bg-white service-grid-item flex flex-col justify-center border-t md:border-t-0 border-gray-100">
                    <span class="text-gs-blue font-black text-3xl mb-3">02</span>
                    <h3 class="font-bold text-lg mb-3 text-gray-800">Event & Gathering</h3>
                    <p class="text-xs text-gray-500 mb-6 leading-relaxed">Kegiatan produksi film, event komunitas, serta ajang silaturahmi untuk memperkuat relasi dan memperluas wawasan anggota.</p>
                    <div><a href="#" class="inline-block px-5 py-2 btn-primary text-white text-xs font-bold rounded-full">Read More</a></div>
                </div>
                
                <!-- Row 2 -->
                <div class="h-64 md:h-auto bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=600');"></div>
                <div class="p-8 bg-gray-50 service-grid-item flex flex-col justify-center">
                    <span class="text-gs-blue font-black text-3xl mb-3">03</span>
                    <h3 class="font-bold text-lg mb-3 text-gray-800">Desain & Cetak</h3>
                    <p class="text-xs text-gray-500 mb-6 leading-relaxed">Layanan sablon kaos, cetak spanduk, poster, merchandise, dan kebutuhan cetak lainnya dengan hasil berkualitas.</p>
                    <div><a href="#" class="inline-block px-5 py-2 btn-primary text-white text-xs font-bold rounded-full">Read More</a></div>
                </div>
                <div class="h-64 md:h-auto bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1562564055-71e051d33c19?auto=format&fit=crop&q=80&w=600');"></div>

                <!-- Row 3 -->
                <div class="p-8 bg-white service-grid-item flex flex-col justify-center border-t border-gray-100">
                    <span class="text-gs-blue font-black text-3xl mb-3">04</span>
                    <h3 class="font-bold text-lg mb-3 text-gray-800">Foto & Video</h3>
                    <p class="text-xs text-gray-500 mb-6 leading-relaxed">Jasa dokumentasi acara, foto produk, hingga video produksi yang dikerjakan oleh tim kreatif profesional.</p>
                    <div><a href="#" class="inline-block px-5 py-2 btn-primary text-white text-xs font-bold rounded-full">Read More</a></div>
                </div>
                <div class="h-64 md:h-auto bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1516035069371-29a1b244cc32?auto=format&fit=crop&q=80&w=600');"></div>
                <div class="p-8 bg-white service-grid-item flex flex-col justify-center border-t border-gray-100">
                    <span class="text-gs-blue font-black text-3xl mb-3">05</span>
                    <h3 class="font-bold text-lg mb-3 text-gray-800">Custom Creative</h3>
                    <p class="text-xs text-gray-500 mb-6 leading-relaxed">Solusi desain kreatif seperti custom ID card, kartu e-money, roll banner, hingga desain grafis sesuai kebutuhan klien.</p>
                    <div><a href="#" class="inline-block px-5 py-2 btn-primary text-white text-xs font-bold rounded-full">Read More</a></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== OUR CAUSES ===== -->
    <section class="py-24 bg-gs-peach">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center mb-14">
                <p class="text-gs-orange font-semibold text-xs tracking-widest uppercase mb-3">Dukung Kami</p>
                <h2 class="text-4xl font-bold text-gray-900 mb-2">Our Causes</h2>
                <div class="section-divider"></div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-7">
                @php
                    $causes = [
                        ['title' => 'Learning Center Training', 'achieved' => 120, 'target' => 200, 'percent' => 60, 'img' => 'https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&q=80&w=400'],
                        ['title' => 'Event & Gathering', 'achieved' => 15, 'target' => 20, 'percent' => 75, 'img' => 'https://images.unsplash.com/photo-1543269865-cbf427effbad?auto=format&fit=crop&q=80&w=400'],
                        ['title' => 'Production Services', 'achieved' => 80, 'target' => 100, 'percent' => 80, 'img' => 'https://images.unsplash.com/photo-1516321497487-e288fb19713f?auto=format&fit=crop&q=80&w=400'],
                    ];
                @endphp
                @foreach($causes as $c)
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover border border-orange-100 flex flex-col text-center">
                    <div class="p-3 pb-0">
                        <img src="{{ $c['img'] }}" class="h-48 w-full object-cover rounded-xl" alt="{{ $c['title'] }}">
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <h4 class="font-bold text-base mb-4 text-gray-800">{{ $c['title'] }}</h4>
                        <div class="flex justify-between text-xs font-semibold text-gray-500 mb-2">
                            <span>Achieved: {{ $c['achieved'] }}</span>
                            <span class="text-gs-orange font-bold">Target: {{ $c['target'] }}</span>
                        </div>
                        <div class="w-full bg-gray-100 h-3 mb-5 rounded-full overflow-hidden">
                            <div class="bg-gradient-to-r from-gs-orange to-orange-400 h-3 rounded-full progress-bar" style="width: {{ $c['percent'] }}%"></div>
                        </div>
                        <p class="text-xs text-gray-500 mb-6 flex-1 leading-relaxed">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type...</p>
                        <div><a href="#" class="inline-block px-6 py-2.5 border-2 border-gs-orange text-gs-orange rounded-full text-xs font-bold hover:bg-gs-orange hover:text-white transition-all duration-300">Read More</a></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ===== STATS ===== -->
    <section class="relative py-20 overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=1920');"></div>
        <div class="absolute inset-0 bg-gs-orange/85"></div>
        <div class="relative z-10 max-w-4xl mx-auto px-6 grid grid-cols-3 text-center gap-4 text-white">
            <div class="card-hover p-6 bg-white/10 rounded-2xl backdrop-blur-sm">
                <div class="flex justify-center mb-3"><svg class="w-10 h-10 opacity-90" fill="currentColor" viewBox="0 0 24 24"><path d="M19 5h-2V3a1 1 0 00-1-1H8a1 1 0 00-1 1v2H5a1 1 0 00-1 1v6a5 5 0 004 4.9V19H6v2h12v-2h-2v-2.1A5 5 0 0020 12V6a1 1 0 00-1-1z"/></svg></div>
                <h3 class="text-5xl font-black mb-1">7</h3>
                <p class="text-sm font-medium opacity-90">Tahun Berdiri</p>
            </div>
            <div class="card-hover p-6 bg-white/10 rounded-2xl backdrop-blur-sm">
                <div class="flex justify-center mb-3"><svg class="w-10 h-10 opacity-90" fill="currentColor" viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg></div>
                <h3 class="text-5xl font-black mb-1">457</h3>
                <p class="text-sm font-medium opacity-90">Anggota</p>
            </div>
            <div class="card-hover p-6 bg-white/10 rounded-2xl backdrop-blur-sm">
                <div class="flex justify-center mb-3"><svg class="w-10 h-10 opacity-90" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/></svg></div>
                <h3 class="text-5xl font-black mb-1">10</h3>
                <p class="text-sm font-medium opacity-90 max-w-[140px] mx-auto">Jangkauan Wilayah Domisili Keanggotaan</p>
            </div>
        </div>
    </section>

    <!-- ===== OUR MEMBER ===== -->
    <section id="team" class="py-24 bg-white">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center mb-14">
                <p class="text-gs-orange font-semibold text-xs tracking-widest uppercase mb-3">Tim Kami</p>
                <h2 class="text-4xl font-bold text-gray-900 mb-2">Our Member</h2>
                <div class="section-divider"></div>
                <p class="text-gray-500 text-sm max-w-xl mx-auto mt-6 leading-relaxed">Member GetSmart adalah bagian dari komunitas kreatif yang belajar, berkarya, dan berkontribusi di bidang broadcasting, perfilman, fotografi, dan event kreatif untuk berkembang bersama.</p>
            </div>

            @php
                $members = [
                    ['name' => 'Surya Hanif', 'role' => 'Ketua Komunitas', 'img' => 11],
                    ['name' => 'Imam Nur Solihin, S. I. Kom.', 'role' => 'CEO GetSmart', 'img' => 12],
                    ['name' => 'Gea Aminda Prameswari', 'role' => 'Wakil Ketua GS', 'img' => 5],
                    ['name' => 'Marsya Athaya', 'role' => 'Ka. Div. Keuangan', 'img' => 9],
                    ['name' => 'Sabita Aura Ariza', 'role' => 'Humas & Creative', 'img' => 41],
                    ['name' => 'Diello Raihan', 'role' => 'Ka. Div. Humas & Creative', 'img' => 15],
                    ['name' => 'Muhammad Farel Dwi', 'role' => 'Learning Center', 'img' => 51],
                    ['name' => 'Ananda Fahri Ilham', 'role' => 'Ka. Div. Learning Center', 'img' => 60],
                    ['name' => 'Reval Alpendro', 'role' => 'Produksi & Acara', 'img' => 53],
                    ['name' => 'Yafri Syamsudin', 'role' => 'Ka. Div. Produksi & Acara', 'img' => 14],
                ];
            @endphp
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-5">
                @foreach($members as $m)
                <div class="member-card bg-white rounded-2xl p-5 text-center shadow-md border border-gray-100 card-hover cursor-pointer group">
                    <div class="overflow-hidden rounded-full w-20 h-20 mx-auto mb-4 ring-4 ring-gs-blue/10 group-hover:ring-gs-orange/40 transition-all duration-300">
                        <img src="https://i.pravatar.cc/150?img={{ $m['img'] }}" 
                             class="w-full h-full object-cover" alt="{{ $m['name'] }}">
                    </div>
                    <h4 class="font-bold text-xs text-gray-800 leading-snug mb-1">{{ $m['name'] }}</h4>
                    <p class="text-[11px] text-gray-400">{{ $m['role'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ===== OUR GALLERY ===== -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <p class="text-gs-orange font-semibold text-xs tracking-widest uppercase mb-3">Momen Bersama</p>
            <h2 class="text-4xl font-bold text-gray-900 mb-2">Our Gallery</h2>
            <div class="section-divider"></div>
            
            <div class="flex justify-center gap-2 my-10" x-data="{ active: 'all' }">
                <button @click="active = 'all'" :class="active === 'all' ? 'bg-gs-orange text-white shadow-md' : 'bg-white text-gray-600 border border-gray-200'" class="px-5 py-1.5 text-xs font-bold rounded-full transition-all duration-200">All</button>
                <button @click="active = 'event'" :class="active === 'event' ? 'bg-gs-orange text-white shadow-md' : 'bg-white text-gray-600 border border-gray-200'" class="px-5 py-1.5 text-xs font-bold rounded-full transition-all duration-200">Event</button>
                <button @click="active = 'production'" :class="active === 'production' ? 'bg-gs-orange text-white shadow-md' : 'bg-white text-gray-600 border border-gray-200'" class="px-5 py-1.5 text-xs font-bold rounded-full transition-all duration-200">Production</button>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=400&h=300&fit=crop" class="w-full h-48 object-cover rounded-xl card-hover" alt="Gallery 1">
                <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?w=400&h=300&fit=crop" class="w-full h-48 object-cover rounded-xl card-hover" alt="Gallery 2">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400&h=600&fit=crop" class="w-full h-48 object-cover rounded-xl card-hover row-span-2" alt="Gallery 3">
                <img src="https://images.unsplash.com/photo-1516035069371-29a1b244cc32?w=400&h=300&fit=crop" class="w-full h-48 object-cover rounded-xl card-hover" alt="Gallery 4">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&h=300&fit=crop" class="w-full h-48 object-cover rounded-xl card-hover" alt="Gallery 5">
            </div>
        </div>
    </section>

    <!-- ===== DONATION ===== -->
    <section class="py-24 bg-white text-center" id="donation">
        <div class="max-w-lg mx-auto px-6">
            <p class="text-gs-orange font-semibold text-xs tracking-widest uppercase mb-3">Bantu Kami Berkembang</p>
            <h2 class="text-4xl font-bold text-gray-900 mb-2">Formulir Donasi</h2>
            <div class="section-divider"></div>
            <p class="text-sm text-gray-500 mb-8 mt-6 leading-relaxed">Setiap donasi dari kamu sangat berarti untuk mendukung pengembangan kegiatan edukasi, workshop, dan fasilitas komunitas Get Smart Indonesia.</p>
            
            <div class="border-2 border-gs-orange rounded-3xl p-7 bg-white relative text-left shadow-xl shadow-orange-50" x-data="{ amount: '50000', customAmount: '', isAnonymous: false, paymentMethod: 'qris' }">
                <div class="absolute -right-5 -top-5 w-16 h-16 bg-gs-orange text-white rounded-full flex items-center justify-center rotate-12 shadow-lg z-10">
                    <span class="text-[9px] font-black text-center leading-tight">DONASI<br>SEKARANG</span>
                </div>

                <h4 class="text-center font-black text-sm mb-4 text-gray-800 uppercase tracking-wider">Pilih Nominal Donasi</h4>
                
                <!-- Nominal Chips -->
                <div class="grid grid-cols-3 gap-2.5 mb-5">
                    <button type="button" @click="amount = '20000'; customAmount = ''" :class="amount === '20000' ? 'bg-gs-orange text-white border-gs-orange' : 'bg-gray-50 text-gray-700 border-gray-200 hover:border-gs-orange'" class="border rounded-xl py-2.5 px-3 text-xs font-bold transition-all text-center">
                        Rp 20.000
                    </button>
                    <button type="button" @click="amount = '50000'; customAmount = ''" :class="amount === '50000' ? 'bg-gs-orange text-white border-gs-orange' : 'bg-gray-50 text-gray-700 border-gray-200 hover:border-gs-orange'" class="border rounded-xl py-2.5 px-3 text-xs font-bold transition-all text-center">
                        Rp 50.000
                    </button>
                    <button type="button" @click="amount = '100000'; customAmount = ''" :class="amount === '100000' ? 'bg-gs-orange text-white border-gs-orange' : 'bg-gray-50 text-gray-700 border-gray-200 hover:border-gs-orange'" class="border rounded-xl py-2.5 px-3 text-xs font-bold transition-all text-center">
                        Rp 100.000
                    </button>
                    <button type="button" @click="amount = '250000'; customAmount = ''" :class="amount === '250000' ? 'bg-gs-orange text-white border-gs-orange' : 'bg-gray-50 text-gray-700 border-gray-200 hover:border-gs-orange'" class="border rounded-xl py-2.5 px-3 text-xs font-bold transition-all text-center">
                        Rp 250.000
                    </button>
                    <button type="button" @click="amount = '500000'; customAmount = ''" :class="amount === '500000' ? 'bg-gs-orange text-white border-gs-orange' : 'bg-gray-50 text-gray-700 border-gray-200 hover:border-gs-orange'" class="border rounded-xl py-2.5 px-3 text-xs font-bold transition-all text-center">
                        Rp 500.000
                    </button>
                    <button type="button" @click="amount = 'custom'" :class="amount === 'custom' ? 'bg-gs-orange text-white border-gs-orange' : 'bg-gray-50 text-gray-700 border-gray-200 hover:border-gs-orange'" class="border rounded-xl py-2.5 px-3 text-xs font-bold transition-all text-center">
                        Lainnya
                    </button>
                </div>

                <!-- Custom Nominal Input -->
                <div x-show="amount === 'custom'" class="mb-5" style="display: none;">
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Masukkan Nominal (Rp)</label>
                    <input type="number" x-model="customAmount" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-gs-orange/30 focus:border-gs-orange transition-all" placeholder="Contoh: 150000">
                </div>

                <!-- Form Donatur -->
                <div class="space-y-3">
                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-1">Nama Donatur</label>
                        <input type="text" :disabled="isAnonymous" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-gs-orange/30 focus:border-gs-orange transition-all disabled:bg-gray-100 disabled:text-gray-400" placeholder="Nama Lengkap">
                        <label class="flex items-center gap-2 mt-1.5 text-xs text-gray-500 cursor-pointer">
                            <input type="checkbox" x-model="isAnonymous" class="rounded border-gray-300 text-gs-orange focus:ring-gs-orange w-3.5 h-3.5">
                            Sembunyikan nama saya (Hamba Allah)
                        </label>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-1">Kontak Donatur</label>
                        <input type="email" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-gs-orange/30 focus:border-gs-orange transition-all" placeholder="Email / No. WhatsApp">
                    </div>

                    <!-- Pilihan Pembayaran -->
                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-1">Metode Pembayaran</label>
                        <select x-model="paymentMethod" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-gs-orange/30 focus:border-gs-orange transition-all bg-white">
                            <option value="qris">QRIS (GoPay, OVO, DANA, ShopeePay, LinkAja, All Bank)</option>
                            <option value="bca">Transfer Bank BCA</option>
                            <option value="mandiri">Transfer Bank Mandiri</option>
                            <option value="bni">Transfer Bank BNI</option>
                            <option value="bri">Transfer Bank BRI</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-1">Pesan & Doa (Opsional)</label>
                        <textarea class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-gs-orange/30 focus:border-gs-orange transition-all" rows="2" placeholder="Tuliskan harapan atau doa kamu..."></textarea>
                    </div>

                    <button type="button" class="w-full btn-orange text-white font-bold rounded-xl py-3 text-sm flex justify-center items-center gap-2 mt-2 shadow-lg">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        Lanjutkan Pembayaran Donasi
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FOOTER ===== -->
    <footer id="contact" class="bg-slate-900 text-white pt-16 pb-8">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-12">
            <div>
                <a href="/" class="inline-block font-serif font-bold text-3xl text-white tracking-widest uppercase mb-5 drop-shadow-sm">GetSmart</a>
                <p class="text-xs leading-relaxed mb-8 text-white/75">
                    Get Smart Indonesia adalah komunitas kreatif di bidang broadcasting, perfilman, fotografi, dan desain, sekaligus rumah produksi yang menyediakan layanan cetak, desain, serta dokumentasi foto & video.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="w-9 h-9 rounded-full bg-white/10 hover:bg-gs-orange flex items-center justify-center transition-colors duration-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path></svg>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-full bg-white/10 hover:bg-gs-orange flex items-center justify-center transition-colors duration-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path></svg>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-full bg-white/10 hover:bg-gs-orange flex items-center justify-center transition-colors duration-300">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><rect width="20" height="20" x="2" y="2" rx="5" ry="5" stroke-width="2"></rect><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zM17.5 6.5h.01"></path></svg>
                    </a>
                </div>
            </div>

            <div class="md:pl-10">
                <h4 class="text-gs-orange font-bold text-base mb-6 uppercase tracking-widest">Quick Links</h4>
                <ul class="space-y-3">
                    <li><a href="/" class="text-xs text-white/75 font-medium hover:text-white flex items-center gap-3 transition-colors group"><span class="w-1.5 h-1.5 rounded-full bg-gs-orange group-hover:scale-150 transition-transform"></span> Home</a></li>
                    <li><a href="/event" class="text-xs text-white/75 font-medium hover:text-white flex items-center gap-3 transition-colors group"><span class="w-1.5 h-1.5 rounded-full bg-gs-orange group-hover:scale-150 transition-transform"></span> Event</a></li>
                    <li><a href="/#program" class="text-xs text-white/75 font-medium hover:text-white flex items-center gap-3 transition-colors group"><span class="w-1.5 h-1.5 rounded-full bg-gs-orange group-hover:scale-150 transition-transform"></span> Program</a></li>
                    <li><a href="/#contact" class="text-xs text-white/75 font-medium hover:text-white flex items-center gap-3 transition-colors group"><span class="w-1.5 h-1.5 rounded-full bg-gs-orange group-hover:scale-150 transition-transform"></span> Contact Us</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-gs-orange font-bold text-base mb-6 uppercase tracking-widest">Contact Us</h4>
                <ul class="space-y-5">
                    <li class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-gs-orange mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                        <span class="text-xs text-white/75 leading-relaxed">Jl. MM No.11 J 4, RT.4/RW.9, Sukabumi Utara, Kec. Kb. Jeruk, Kota Jakarta Barat, DKI Jakarta 11540</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-gs-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.026 11.026 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
                        <span class="text-xs text-white/75">+62 821-8000-3064</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-gs-orange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                        <span class="text-xs text-white/75">getsmartindonesia@gmail.com</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mt-12 pt-6 border-t border-white/10 text-center">
            <p class="text-[11px] text-white/40 font-medium">© 2025 GET SMART INDONESIA. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
