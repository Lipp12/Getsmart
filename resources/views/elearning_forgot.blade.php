<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lupa Kata Sandi - E-Learning GetSmart</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: { extend: { fontFamily: { sans: ['Inter','sans-serif'] }, colors: { 'gs-blue': '#1a1fd4', 'gs-blue-dark': '#0f12a0', 'gs-orange': '#f56500' } } }
        }
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body { background: linear-gradient(135deg, #f0f4ff 0%, #fdf3ec 100%); }
        input:focus { outline: none; border-color: #1a1fd4; box-shadow: 0 0 0 3px rgba(26,31,212,0.10); }
        .card { box-shadow: 0 20px 60px rgba(26,31,212,0.08), 0 4px 20px rgba(0,0,0,0.06); }
        .btn-primary { background: linear-gradient(135deg, #1a1fd4, #0f12a0); transition: all 0.3s ease; }
        .btn-primary:hover { transform: translateY(-1px); box-shadow: 0 8px 25px rgba(26,31,212,0.4); }
        .input-group { position: relative; }
        .input-group svg { position: absolute; left: 14px; top: 50%; transform: translateY(-50%); pointer-events: none; }
        .input-group input { padding-left: 42px; }
        @keyframes checkAnim { 0% { transform: scale(0); opacity: 0; } 60% { transform: scale(1.2); } 100% { transform: scale(1); opacity: 1; } }
        .check-anim { animation: checkAnim 0.5s ease forwards; }
    </style>
</head>
<body class="font-sans min-h-screen flex flex-col items-center justify-center py-12 px-4">

    <div class="w-full max-w-sm" x-data="{ sent: false, email: '' }">

        <!-- Card: Form State -->
        <div class="bg-white rounded-3xl card p-8" x-show="!sent" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">

            <!-- Logo -->
            <div class="text-center mb-6">
                <div class="flex items-center justify-center gap-1 mb-1">
                    <span class="font-black text-gs-blue text-2xl tracking-tight">GET</span>
                    <span class="text-gs-orange font-black text-2xl">SMART</span>
                </div>
                <p class="text-xs text-gray-400 font-medium tracking-wide">E-Learning Management System</p>
                <div class="mt-4 h-0.5 w-12 bg-gradient-to-r from-gs-blue to-gs-orange rounded mx-auto"></div>
            </div>

            <!-- Icon -->
            <div class="flex justify-center mb-6">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-gs-blue/10 to-gs-orange/10 flex items-center justify-center">
                    <svg class="w-8 h-8 text-gs-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/>
                    </svg>
                </div>
            </div>

            <h2 class="text-lg font-bold text-gray-800 text-center mb-2">Lupa Kata Sandi?</h2>
            <p class="text-xs text-gray-400 text-center mb-7 leading-relaxed">
                Tenang! Masukkan alamat email yang terdaftar, kami akan mengirimkan tautan untuk mengatur ulang kata sandimu.
            </p>

            <!-- Form -->
            <form @submit.prevent="sent = true" class="space-y-4">
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1.5">Alamat Email</label>
                    <div class="input-group">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <input type="email" name="email" x-model="email"
                               class="w-full border border-gray-200 rounded-xl py-3 pr-4 text-sm text-gray-700 transition-all placeholder-gray-300 bg-gray-50 focus:bg-white"
                               placeholder="emailkamu@example.com" required>
                    </div>
                </div>

                <button type="submit" class="btn-primary w-full text-white font-bold py-3 rounded-xl text-sm flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                    </svg>
                    Kirim Tautan Reset
                </button>
            </form>

            <!-- Divider -->
            <div class="my-5 flex items-center gap-3">
                <div class="flex-1 h-px bg-gray-100"></div>
                <span class="text-xs text-gray-400">atau</span>
                <div class="flex-1 h-px bg-gray-100"></div>
            </div>

            <div class="flex gap-3">
                <a href="/elearning/login"
                   class="flex-1 text-center border border-gray-200 text-gray-600 text-xs font-semibold py-2.5 rounded-xl hover:border-gs-blue hover:text-gs-blue transition-all">
                    ← Kembali Login
                </a>
                <a href="/elearning/register"
                   class="flex-1 text-center border border-gs-orange/30 text-gs-orange text-xs font-semibold py-2.5 rounded-xl hover:bg-gs-orange hover:text-white transition-all">
                    Daftar Baru
                </a>
            </div>
        </div>

        <!-- Card: Success State -->
        <div class="bg-white rounded-3xl card p-8 text-center" x-show="sent" x-transition:enter="transition ease-out duration-400" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" style="display:none;">

            <!-- Logo -->
            <div class="flex items-center justify-center gap-1 mb-1">
                <span class="font-black text-gs-blue text-2xl tracking-tight">GET</span>
                <span class="text-gs-orange font-black text-2xl">SMART</span>
            </div>
            <p class="text-xs text-gray-400 font-medium tracking-wide mb-6">E-Learning Management System</p>

            <!-- Success Icon -->
            <div class="flex justify-center mb-6">
                <div class="w-20 h-20 rounded-full bg-green-50 border-2 border-green-200 flex items-center justify-center check-anim">
                    <svg class="w-10 h-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
            </div>

            <h2 class="text-lg font-bold text-gray-800 mb-3">Email Terkirim!</h2>
            <p class="text-xs text-gray-500 leading-relaxed mb-2">
                Kami telah mengirimkan tautan reset kata sandi ke:
            </p>
            <p class="text-sm font-bold text-gs-blue mb-6 break-all" x-text="email"></p>
            <p class="text-xs text-gray-400 leading-relaxed mb-8">
                Silakan cek inbox atau folder spam kamu. Tautan berlaku selama <strong class="text-gray-600">60 menit</strong>.
            </p>

            <!-- Steps -->
            <div class="bg-gray-50 rounded-2xl p-4 text-left mb-8 space-y-3">
                <p class="text-xs font-bold text-gray-600 mb-3">Langkah selanjutnya:</p>
                <div class="flex items-start gap-3">
                    <span class="w-5 h-5 rounded-full bg-gs-blue text-white text-[10px] font-bold flex items-center justify-center flex-shrink-0 mt-0.5">1</span>
                    <p class="text-xs text-gray-500">Buka email dari <span class="font-semibold text-gray-700">GetSmart Indonesia</span></p>
                </div>
                <div class="flex items-start gap-3">
                    <span class="w-5 h-5 rounded-full bg-gs-blue text-white text-[10px] font-bold flex items-center justify-center flex-shrink-0 mt-0.5">2</span>
                    <p class="text-xs text-gray-500">Klik tautan <span class="font-semibold text-gray-700">"Reset Kata Sandi"</span></p>
                </div>
                <div class="flex items-start gap-3">
                    <span class="w-5 h-5 rounded-full bg-gs-blue text-white text-[10px] font-bold flex items-center justify-center flex-shrink-0 mt-0.5">3</span>
                    <p class="text-xs text-gray-500">Buat kata sandi baru yang kuat</p>
                </div>
            </div>

            <!-- Resend -->
            <p class="text-xs text-gray-400 mb-5">
                Tidak menerima email?
                <button @click="sent = false" class="text-gs-orange font-bold hover:underline ml-1">Kirim ulang</button>
            </p>

            <a href="/elearning/login"
               class="btn-primary block w-full text-center text-white font-bold py-3 rounded-xl text-sm">
                Kembali ke Login
            </a>
        </div>

        <!-- Bottom links -->
        <div class="mt-5 flex justify-between items-center text-xs text-gray-400 px-2">
            <a href="/elearning" class="hover:text-gs-blue transition-colors flex items-center gap-1">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                Kembali ke E-Learning
            </a>
            <a href="#" class="hover:text-gs-blue transition-colors flex items-center gap-1">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/></svg>
                Bahasa Indonesia (id)
            </a>
        </div>
    </div>

</body>
</html>
