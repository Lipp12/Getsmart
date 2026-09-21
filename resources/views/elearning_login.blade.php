<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk - E-Learning GetSmart</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: { extend: { fontFamily: { sans: ['Inter','sans-serif'] }, colors: { 'gs-blue': '#1a1fd4', 'gs-blue-dark': '#0f12a0', 'gs-orange': '#f56500' } } }
        }
    </script>
    <style>
        body { background: linear-gradient(135deg, #f0f4ff 0%, #fdf3ec 100%); }
        input:focus { outline: none; border-color: #1a1fd4; box-shadow: 0 0 0 3px rgba(26,31,212,0.10); }
        .card { box-shadow: 0 20px 60px rgba(26,31,212,0.08), 0 4px 20px rgba(0,0,0,0.06); }
        .btn-login { background: linear-gradient(135deg, #1a1fd4, #0f12a0); transition: all 0.3s ease; }
        .btn-login:hover { transform: translateY(-1px); box-shadow: 0 8px 25px rgba(26,31,212,0.4); }
        .input-group { position: relative; }
        .input-group svg { position: absolute; left: 14px; top: 50%; transform: translateY(-50%); pointer-events: none; }
        .input-group input { padding-left: 42px; }
    </style>
</head>
<body class="font-sans min-h-screen flex flex-col items-center justify-center py-12 px-4">

    <div class="w-full max-w-sm">
        <!-- Card -->
        <div class="bg-white rounded-3xl card p-8">
            <!-- Logo -->
            <div class="text-center mb-8">
                <div class="flex items-center justify-center gap-1 mb-1">
                    <span class="font-black text-gs-blue text-2xl tracking-tight">GET</span>
                    <span class="text-gs-orange font-black text-2xl">SMART</span>
                </div>
                <p class="text-xs text-gray-400 font-medium tracking-wide">E-Learning Management System</p>
                <div class="mt-4 h-0.5 w-12 bg-gradient-to-r from-gs-blue to-gs-orange rounded mx-auto"></div>
            </div>

            <h2 class="text-lg font-bold text-gray-800 text-center mb-6">Masuk ke Akun</h2>

            <!-- Form -->
            <form action="#" method="POST" class="space-y-4">
                @csrf
                <!-- Email -->
                <div class="input-group">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <input type="email" name="email"
                           class="w-full border border-gray-200 rounded-xl py-3 pr-4 text-sm text-gray-700 transition-all placeholder-gray-300 bg-gray-50 focus:bg-white"
                           placeholder="Alamat email" required>
                </div>

                <!-- Password -->
                <div class="input-group" x-data="{ show: false }">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                    <input :type="show ? 'text' : 'password'" name="password"
                           class="w-full border border-gray-200 rounded-xl py-3 pr-10 text-sm text-gray-700 transition-all placeholder-gray-300 bg-gray-50 focus:bg-white"
                           placeholder="Kata sandi" required>
                    <button type="button" @click="show = !show"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gs-blue transition-colors">
                        <svg x-show="!show" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        <svg x-show="show" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display:none"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/></svg>
                    </button>
                </div>

                <!-- Remember & Forgot -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center gap-2 text-xs text-gray-500 cursor-pointer">
                        <input type="checkbox" class="rounded border-gray-300 text-gs-blue focus:ring-gs-blue focus:ring-1 w-3.5 h-3.5">
                        Ingat saya
                    </label>
                    <a href="/elearning/forgot-password" class="text-xs text-gs-blue hover:text-gs-orange transition-colors font-semibold">Lupa kata sandi?</a>
                </div>

                <button type="submit" class="btn-login w-full text-white font-bold py-3 rounded-xl text-sm">
                    Masuk
                </button>
            </form>

            <div class="my-5 flex items-center gap-3">
                <div class="flex-1 h-px bg-gray-100"></div>
                <span class="text-xs text-gray-400 font-medium">atau</span>
                <div class="flex-1 h-px bg-gray-100"></div>
            </div>

            <!-- Guest access -->
            <div class="text-center mb-5">
                <p class="text-xs text-gray-500 font-medium mb-3">Beberapa kursus membolehkan akses pengguna tamu</p>
                <a href="/elearning" class="inline-block border border-gray-200 text-gray-600 text-xs font-semibold px-5 py-2.5 rounded-xl hover:border-gs-blue hover:text-gs-blue transition-all">
                    Akses sebagai tamu
                </a>
            </div>

            <!-- Register link -->
            <p class="text-center text-xs text-gray-500">
                Belum punya akun?
                <a href="/elearning/register" class="text-gs-orange font-bold hover:underline ml-1">Daftar sekarang</a>
            </p>
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
