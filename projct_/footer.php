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

    <script>
        // Data State
        let profiles = [
            { id: 1, nama: 'Albedo One', profesi: 'Quantum Engineer' },
            { id: 2, nama: 'Kael’thas', profesi: 'Void Architect' },
            { id: 3, nama: 'Project Zero', profesi: 'AI Researcher' }
        ];

        let editMode = false;

        const sidebar = document.getElementById('sidebar');
        const menuToggle = document.getElementById('menu-toggle');
        const modal = document.getElementById('modal');
        const modalContainer = document.getElementById('modal-container');
        const cardContainer = document.getElementById('data-list-cards');
        const profileForm = document.getElementById('profile-form');

        menuToggle.onclick = () => {
            if(sidebar.style.transform === 'translateX(0%)') {
                sidebar.style.transform = 'translateX(-110%)';
            } else {
                sidebar.style.transform = 'translateX(0%)';
            }
        };

        function switchTab(tabId) {
            ['tentang-saya', 'hobi', 'aktif-keseharian'].forEach(id => {
                document.getElementById('section-' + id).classList.add('hidden');
                document.getElementById('btn-' + id).classList.remove('active-menu');
                document.getElementById('btn-' + id).classList.add('text-gray-400');
            });
            document.getElementById('section-' + tabId).classList.remove('hidden');
            document.getElementById('btn-' + tabId).classList.add('active-menu');
            document.getElementById('btn-' + tabId).classList.remove('text-gray-400');
            
            if(window.innerWidth < 768) {
                sidebar.style.transform = 'translateX(-110%)';
            }
        }

        // Render Cards (Responsif & Serius)
        function renderData() {
            cardContainer.innerHTML = '';
            profiles.forEach(item => {
                cardContainer.innerHTML += `
                    <div class="glass p-8 neon-border transition-all duration-300 group relative overflow-hidden flex flex-col justify-between h-full">
                        <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-100 transition-opacity">
                            <span class="text-xs font-mono text-cyan-400">STATUS: TERVERIFIKASI</span>
                        </div>
                        <div>
                            <div class="h-14 w-14 bg-white/5 rounded-2xl mb-6 flex items-center justify-center group-hover:bg-cyan-500/20 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold text-white mb-2 leading-tight">${item.nama}</h4>
                            <p class="text-cyan-400 text-xs font-bold tracking-widest uppercase mb-6">${item.profesi}</p>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-3 mt-4">
                            <button onclick="editData(${item.id})" class="py-2.5 glass hover:bg-white hover:text-black rounded-xl text-xs font-bold uppercase tracking-widest transition-all">
                                Ubah
                            </button>
                            <button onclick="deleteData(${item.id})" class="py-2.5 border border-red-500/30 text-red-500 hover:bg-red-500 hover:text-white rounded-xl text-xs font-bold uppercase transition-all">
                                Hapus
                            </button>
                        </div>
                    </div>
                `;
            });
        }

        function openModal() {
            editMode = false;
            document.getElementById('modal-title').innerText = 'DATA BARU';
            profileForm.reset();
            modal.classList.remove('hidden');
            setTimeout(() => modalContainer.classList.remove('scale-95'), 10);
        }

        function closeModal() {
            modalContainer.classList.add('scale-95');
            setTimeout(() => modal.classList.add('hidden'), 200);
        }

        function deleteData(id) {
            if(confirm('TERMINASI DATA: Apakah Anda yakin ingin menghapus entri ini?')) {
                profiles = profiles.filter(p => p.id !== id);
                renderData();
            }
        }

        function editData(id) {
            const item = profiles.find(p => p.id === id);
            if(item) {
                editMode = true;
                document.getElementById('modal-title').innerText = 'MODIFIKASI';
                document.getElementById('edit-id').value = item.id;
                document.getElementById('input-nama').value = item.nama;
                document.getElementById('input-profesi').value = item.profesi;
                modal.classList.remove('hidden');
                setTimeout(() => modalContainer.classList.remove('scale-95'), 10);
            }
        }

        profileForm.onsubmit = (e) => {
            e.preventDefault();
            const nama = document.getElementById('input-nama').value;
            const profesi = document.getElementById('input-profesi').value;

            if(editMode) {
                const id = parseInt(document.getElementById('edit-id').value);
                profiles = profiles.map(p => p.id === id ? {...p, nama, profesi} : p);
            } else {
                const newId = profiles.length > 0 ? Math.max(...profiles.map(p => p.id)) + 1 : 1;
                profiles.push({ id: newId, nama, profesi });
            }

            renderData();
            closeModal();
        };

        // Init
        renderData();
    </script>
</body>
</html>