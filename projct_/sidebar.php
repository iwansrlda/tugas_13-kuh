  <aside id="sidebar" class="w-72 glass fixed md:relative h-[calc(100vh-140px)] z-40 transition-all duration-500 ease-in-out -translate-x-full md:translate-x-0 overflow-y-auto">
            <div class="p-6 space-y-6">
                <div class="text-xs font-bold text-gray-500 uppercase tracking-widest pl-4">Terminal Utama</div>
                <nav class="space-y-3">
                    <button onclick="switchTab('tentang-saya')" id="btn-tentang-saya" class="w-full text-left px-5 py-4 rounded-2xl transition-all active-menu flex items-center gap-4 group">
                        <div class="p-2 bg-white/10 rounded-lg group-hover:scale-110 transition-transform">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <span class="font-semibold">Tentang Saya</span>
                    </button>
                    <button onclick="switchTab('hobi')" id="btn-hobi" class="w-full text-left px-5 py-4 rounded-2xl transition-all hover:bg-white/5 text-gray-400 hover:text-white flex items-center gap-4 group">
                        <div class="p-2 bg-white/5 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <span class="font-semibold">Hobi</span>
                    </button>
                    <button onclick="switchTab('aktif-keseharian')" id="btn-aktif-keseharian" class="w-full text-left px-5 py-4 rounded-2xl transition-all hover:bg-white/5 text-gray-400 hover:text-white flex items-center gap-4 group">
                        <div class="p-2 bg-white/5 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <span class="font-semibold">Aktifitas</span>
                    </button>
                </nav>
            </div>
        </aside>