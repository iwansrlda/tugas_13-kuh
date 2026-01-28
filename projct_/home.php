  <main class="flex-1 overflow-y-auto pb-24">
            <div id="content-area" class="max-w-6xl mx-auto">
                
                <!-- Section Tentang Saya -->
                <div id="section-tentang-saya">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-4">
                        <div>
                            <h2 class="text-4xl font-extrabold text-white mb-2">Profil Inti</h2>
                            <p class="text-gray-400 font-medium">Pengelolaan data identitas terverifikasi pada jaringan terenkripsi.</p>
                        </div>
                        <button onclick="openModal()" class="fab-spin bg-white text-black hover:bg-cyan-400 hover:text-black font-bold px-6 py-3 rounded-2xl flex items-center gap-3 transition-all shadow-xl shadow-white/5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                            </svg>
                            Input Data Baru
                        </button>
                    </div>

                    <!-- Grid Data Cards (Responsive & Serious Look) -->
                    <div id="data-list-cards" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Data akan diisi via JS -->
                    </div>
                </div>

                <!-- Tab Hobi -->
                <div id="section-hobi" class="hidden py-20 text-center glass rounded-3xl border-dashed border-2 border-white/10">
                    <div class="text-6xl mb-4">🎨</div>
                    <h3 class="text-2xl font-bold text-white">Modul Kreatif</h3>
                    <p class="text-gray-500 mt-2">Area hobi sedang dalam proses rendering...</p>
                </div>

                <!-- Tab Aktif Keseharian -->
                <div id="section-aktif-keseharian" class="hidden py-20 text-center glass rounded-3xl border-dashed border-2 border-white/10">
                    <div class="text-6xl mb-4">⚡</div>
                    <h3 class="text-2xl font-bold text-white">Log Aktivitas</h3>
                    <p class="text-gray-500 mt-2">Menunggu sinkronisasi detak jantung...</p>
                </div>
            </div>
        </main>
    </div>

    <!-- RUNNING TEXT (TV STYLE) -->
    <div class="fixed bottom-[88px] md:bottom-[104px] left-0 w-full marquee-container z-40">
        <div class="marquee-content uppercase tracking-widest">
            🌱 “Hidup bukan tentang siapa yang paling cepat, tapi siapa yang paling konsisten.” &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            🔥 “Jangan menunggu motivasi datang. Disiplinlah yang akan mengantarmu ke tujuan.” &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            🚀 “Mimpi besar dimulai dari langkah kecil yang berani.” &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            ☕ “Pelan-pelan tidak apa-apa, yang penting tetap berjalan.” &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            ✨ “Setiap hari adalah kesempatan baru untuk menjadi versi dirimu yang lebih baik.”
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="glass m-4 p-6 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-gray-500 rounded-2xl border-t border-white/10 relative z-50">
        <div class="flex items-center gap-2">
            <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
            Sistem Online & Terenkripsi
        </div>
        <div>&copy; 2026 <span class="text-white font-bold">NOVA Dashboard</span>. Ver 4.0.2</div>
    </footer>

    <!-- MODAL FORM (Glassmorphism) -->
    <div id="modal" class="fixed inset-0 bg-black/80 backdrop-blur-md z-[100] hidden flex items-center justify-center p-4">
        <div class="glass w-full max-w-lg overflow-hidden scale-95 transition-all duration-300" id="modal-container">
            <div class="p-8 border-b border-white/10 flex justify-between items-center bg-white/5">
                <div>
                    <h3 id="modal-title" class="text-2xl font-black text-white">ENTRY DATA</h3>
                    <p class="text-xs text-cyan-400 font-bold tracking-widest uppercase">Database Override</p>
                </div>
                <button onclick="closeModal()" class="p-2 hover:bg-white/10 rounded-full transition-colors text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form id="profile-form" class="p-8 space-y-6">
                <input type="hidden" id="edit-id">
                <div class="space-y-2">
                    <label class="text-xs font-bold text-gray-400 uppercase ml-1">Nama Alias</label>
                    <input type="text" id="input-nama" required class="w-full bg-white/5 border border-white/10 rounded-2xl px-5 py-4 focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 outline-none text-white transition-all" placeholder="Contoh: Neon Hunter">
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-bold text-gray-400 uppercase ml-1">Spesialisasi</label>
                    <input type="text" id="input-profesi" required class="w-full bg-white/5 border border-white/10 rounded-2xl px-5 py-4 focus:border-purple-400 focus:ring-1 focus:ring-purple-400 outline-none text-white transition-all" placeholder="Contoh: Cyber Security">
                </div>
                <div class="pt-6 flex gap-4">
                    <button type="button" onclick="closeModal()" class="flex-1 px-6 py-4 rounded-2xl font-bold border border-white/10 hover:bg-white/5 text-white transition-all">BATAL</button>
                    <button type="submit" class="flex-1 px-6 py-4 bg-gradient-to-r from-cyan-500 to-blue-600 text-white rounded-2xl font-bold hover:shadow-lg hover:shadow-cyan-500/40 transition-all uppercase tracking-widest">Eksekusi</button>
                </div>
            </form>
        </div>
    </div>