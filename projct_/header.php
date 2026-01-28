<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futuristic Personal Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap');
        
        :root {
            --neon-blue: #00f2ff;
            --neon-purple: #bc13fe;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #050505;
            color: #e0e0e0;
            overflow-x: hidden;
        }

        /* Background Animasi Gila */
        .mesh-bg {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            z-index: -1;
            background: radial-gradient(circle at 50% 50%, #1a1a2e 0%, #050505 100%);
        }
        
        .mesh-sphere {
            position: absolute;
            filter: blur(80px);
            opacity: 0.4;
            border-radius: 50%;
            animation: move 20s infinite alternate;
        }

        @keyframes move {
            from { transform: translate(-10%, -10%); }
            to { transform: translate(20%, 20%); }
        }

        /* Glassmorphism Effect */
        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 24px;
        }

        .neon-border:hover {
            border-color: var(--neon-blue);
            box-shadow: 0 0 15px rgba(0, 242, 255, 0.3);
        }

        .active-menu {
            background: linear-gradient(90deg, var(--neon-blue), var(--neon-purple));
            color: white;
            box-shadow: 0 4px 15px rgba(188, 19, 254, 0.4);
        }

        /* Running Text / News Ticker Style */
        .marquee-container {
            background: rgba(0, 0, 0, 0.8);
            border-top: 1px solid rgba(0, 242, 255, 0.3);
            overflow: hidden;
            white-space: nowrap;
            height: 40px;
            display: flex;
            align-items: center;
        }

        .marquee-content {
            display: inline-block;
            animation: marquee 30s linear infinite;
            padding-left: 100%;
            color: var(--neon-blue);
            font-weight: 600;
            font-size: 0.875rem;
            letter-spacing: 0.05em;
        }

        @keyframes marquee {
            0% { transform: translate(0, 0); }
            100% { transform: translate(-100%, 0); }
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #333; border-radius: 10px; }

        /* Floating Button Animation */
        .fab-spin:hover svg { transform: rotate(90deg); transition: 0.3s; }
    </style>
</head>
<body class="flex flex-col min-h-screen">

    <!-- Background Animasi -->
    <div class="mesh-bg">
        <div class="mesh-sphere w-[500px] h-[500px] bg-blue-600 top-[-10%] left-[-10%]"></div>
        <div class="mesh-sphere w-[400px] h-[400px] bg-purple-600 bottom-[-10%] right-[-10%]"></div>
    </div>

    <!-- HEADER -->
    <header class="h-20 flex items-center justify-between px-8 sticky top-0 z-50 glass border-b border-white/10 m-4 rounded-2xl">
        <div class="flex items-center gap-4">
            <button id="menu-toggle" class="p-2 hover:bg-white/10 rounded-xl md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <h1 class="text-2xl font-extrabold tracking-tighter bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 to-purple-500">
                NOVA<span class="text-white">OS</span>
            </h1>
        </div>
        <div class="flex items-center gap-6">
            <div class="hidden sm:flex flex-col text-right">
                <span class="text-xs text-gray-400 font-semibold uppercase tracking-widest">Akses Admin</span>
                <span class="text-sm font-bold text-white">Kepala Eksplorasi</span>
            </div>
            <div class="h-12 w-12 rounded-2xl bg-gradient-to-br from-cyan-400 to-blue-600 p-[2px] shadow-lg shadow-cyan-500/20">
                <div class="h-full w-full bg-black rounded-[14px] flex items-center justify-center font-bold text-white">A</div>
            </div>
        </div>
    </header>