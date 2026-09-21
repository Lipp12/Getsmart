<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar - E-Learning GetSmart</title>
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
        input:focus, select:focus { outline: none; border-color: #1a1fd4; box-shadow: 0 0 0 3px rgba(26,31,212,0.10); }
        .card { box-shadow: 0 20px 60px rgba(26,31,212,0.08), 0 4px 20px rgba(0,0,0,0.06); }
        .btn-register { background: linear-gradient(135deg, #f56500, #d45000); transition: all 0.3s ease; }
        .btn-register:hover { transform: translateY(-1px); box-shadow: 0 8px 25px rgba(245,101,0,0.4); }
        .input-group { position: relative; }
        .input-group > svg:first-of-type { position: absolute; left: 14px; top: 50%; transform: translateY(-50%); pointer-events: none; }
        .input-group input, .input-group select { padding-left: 42px; }
        .strength-bar { height: 4px; border-radius: 2px; transition: width 0.4s ease; }
    </style>
</head>
<body class="font-sans min-h-screen flex flex-col items-center justify-center py-12 px-4"
      x-data="{
          showPass: false,
          showConfirm: false,
          password: '',
          get strength() {
              if (this.password.length === 0) return 0;
              let s = 0;
              if (this.password.length >= 8) s++;
              if (/[A-Z]/.test(this.password)) s++;
              if (/[0-9]/.test(this.password)) s++;
              if (/[^A-Za-z0-9]/.test(this.password)) s++;
              return s;
          },
          get strengthLabel() {
              const l = ['','Lemah','Cukup','Kuat','Sangat Kuat'];
              return l[this.strength] || '';
          },
          get strengthColor() {
              return ['','bg-red-400','bg-yellow-400','bg-green-400','bg-green-600'][this.strength] || 'bg-gray-200';
          }
      }">

    <div class="w-full max-w-md">
        <!-- Card -->
        <div class="bg-white rounded-3xl card p-8">
            <!-- Logo -->
            <div class="text-center mb-6">
                <div class="flex items-center justify-center gap-1 mb-1">
                    <span class="font-black text-gs-blue text-2xl tracking-tight">GET</span>
                    <span class="text-gs-orange font-black text-2xl">SMART</span>
                </div>
                <p class="text-xs text-gray-400 font-medium tracking-wide">E-Learning Management System</p>
                <div class="mt-4 h-0.5 w-12 bg-gradient-to-r from-gs-blue to-gs-orange rounded mx-auto"></div>
            </div>

            <h2 class="text-lg font-bold text-gray-800 text-center mb-1">Buat Akun Baru</h2>
            <p class="text-xs text-gray-400 text-center mb-7">Bergabung dengan komunitas belajar GetSmart Indonesia</p>

            <!-- Form -->
            <form action="#" method="POST" class="space-y-4">
                @csrf

                <!-- Nama Lengkap -->
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1.5">Nama Lengkap <span class="text-red-400">*</span></label>
                    <div class="input-group">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        <input type="text" name="name"
                               class="w-full border border-gray-200 rounded-xl py-3 pr-4 text-sm text-gray-700 transition-all placeholder-gray-300 bg-gray-50 focus:bg-white"
                               placeholder="Nama lengkap kamu" required>
                    </div>
                </div>

                <!-- Nama Pengguna -->
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1.5">Nama Pengguna <span class="text-red-400">*</span></label>
                    <div class="input-group">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <input type="text" name="username"
                               class="w-full border border-gray-200 rounded-xl py-3 pr-4 text-sm text-gray-700 transition-all placeholder-gray-300 bg-gray-50 focus:bg-white"
                               placeholder="Username unik kamu" required>
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1.5">Alamat Email <span class="text-red-400">*</span></label>
                    <div class="input-group">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <input type="email" name="email"
                               class="w-full border border-gray-200 rounded-xl py-3 pr-4 text-sm text-gray-700 transition-all placeholder-gray-300 bg-gray-50 focus:bg-white"
                               placeholder="emailkamu@example.com" required>
                    </div>
                </div>

                <!-- Nomor WhatsApp -->
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1.5">No. WhatsApp</label>
                    <div class="input-group">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <input type="tel" name="phone"
                               class="w-full border border-gray-200 rounded-xl py-3 pr-4 text-sm text-gray-700 transition-all placeholder-gray-300 bg-gray-50 focus:bg-white"
                               placeholder="Contoh: 08123456789">
                    </div>
                </div>

                <!-- Divisi / Minat -->
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1.5">Bidang Minat</label>
                    <div class="input-group">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                        <select name="interest"
                                class="w-full border border-gray-200 rounded-xl py-3 pr-4 text-sm text-gray-500 transition-all bg-gray-50 focus:bg-white appearance-none">
                            <option value="">-- Pilih bidang --</option>
                            <option value="broadcasting">Broadcasting</option>
                            <option value="photography">Fotografi</option>
                            <option value="videography">Videografi</option>
                            <option value="design">Desain Grafis</option>
                            <option value="production">Produksi & Acara</option>
                            <option value="other">Lainnya</option>
                        </select>
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1.5">Kata Sandi <span class="text-red-400">*</span></label>
                    <div class="input-group">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        <input :type="showPass ? 'text' : 'password'" name="password"
                               x-model="password"
                               class="w-full border border-gray-200 rounded-xl py-3 pr-10 text-sm text-gray-700 transition-all placeholder-gray-300 bg-gray-50 focus:bg-white"
                               placeholder="Minimal 8 karakter" required>
                        <button type="button" @click="showPass = !showPass"
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gs-blue transition-colors">
                            <svg x-show="!showPass" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                            <svg x-show="showPass" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display:none"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/></svg>
                        </button>
                    </div>
                    <!-- Password Strength -->
                    <div x-show="password.length > 0" class="mt-2 space-y-1">
                        <div class="flex gap-1">
                            <div class="strength-bar flex-1" :class="strength >= 1 ? strengthColor : 'bg-gray-200'" style="height:4px;border-radius:2px;transition:all 0.3s;"></div>
                            <div class="strength-bar flex-1" :class="strength >= 2 ? strengthColor : 'bg-gray-200'" style="height:4px;border-radius:2px;transition:all 0.3s;"></div>
                            <div class="strength-bar flex-1" :class="strength >= 3 ? strengthColor : 'bg-gray-200'" style="height:4px;border-radius:2px;transition:all 0.3s;"></div>
                            <div class="strength-bar flex-1" :class="strength >= 4 ? strengthColor : 'bg-gray-200'" style="height:4px;border-radius:2px;transition:all 0.3s;"></div>
                        </div>
                        <p class="text-[11px] text-gray-400">Kekuatan: <span :class="{'text-red-500': strength===1,'text-yellow-500': strength===2,'text-green-500': strength>=3}" class="font-semibold" x-text="strengthLabel"></span></p>
                    </div>
                </div>

                <!-- Confirm Password -->
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1.5">Konfirmasi Kata Sandi <span class="text-red-400">*</span></label>
                    <div class="input-group">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        <input :type="showConfirm ? 'text' : 'password'" name="password_confirmation"
                               class="w-full border border-gray-200 rounded-xl py-3 pr-10 text-sm text-gray-700 transition-all placeholder-gray-300 bg-gray-50 focus:bg-white"
                               placeholder="Ulangi kata sandi" required>
                        <button type="button" @click="showConfirm = !showConfirm"
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gs-blue transition-colors">
                            <svg x-show="!showConfirm" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                            <svg x-show="showConfirm" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display:none"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/></svg>
                        </button>
                    </div>
                </div>

                <!-- Terms -->
                <div class="flex items-start gap-2.5 pt-1">
                    <input type="checkbox" id="terms" name="terms"
                           class="mt-0.5 rounded border-gray-300 text-gs-orange focus:ring-gs-orange w-4 h-4 flex-shrink-0" required>
                    <label for="terms" class="text-xs text-gray-500 leading-relaxed">
                        Saya menyetujui <a href="#" class="text-gs-blue font-semibold hover:underline">Syarat & Ketentuan</a> serta 
                        <a href="#" class="text-gs-blue font-semibold hover:underline">Kebijakan Privasi</a> GetSmart Indonesia.
                    </label>
                </div>

                <button type="submit" class="btn-register w-full text-white font-bold py-3 rounded-xl text-sm mt-2">
                    Buat Akun Sekarang
                </button>
            </form>

            <!-- Divider -->
            <div class="my-5 flex items-center gap-3">
                <div class="flex-1 h-px bg-gray-100"></div>
                <span class="text-xs text-gray-400 font-medium">sudah punya akun?</span>
                <div class="flex-1 h-px bg-gray-100"></div>
            </div>

            <a href="/elearning/login"
               class="block w-full text-center border-2 border-gs-blue text-gs-blue font-bold py-2.5 rounded-xl text-sm hover:bg-gs-blue hover:text-white transition-all duration-300">
               Masuk
            </a>
        </div>

        <!-- Bottom link -->
        <div class="mt-5 text-center text-xs text-gray-400">
            <a href="/elearning" class="hover:text-gs-blue transition-colors flex items-center justify-center gap-1">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                Kembali ke E-Learning
            </a>
        </div>
    </div>
</body>
</html>
