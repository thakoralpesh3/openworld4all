<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="QzTrv2ESMvRpsyJLO7cvt3pvyO9mY1ISkhII0_o0QcI" />
    
    <!-- Cache-Busting Headers -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    
    <title>Openworld4all - Hybrid Cinema Premium</title>
    
    <!-- DNS Prefetches for High-Speed Streaming Handshakes -->
    <link rel="preconnect" href="https://api.themoviedb.org" crossorigin>
    <link rel="preconnect" href="https://image.tmdb.org" crossorigin>
    <link rel="dns-prefetch" href="https://api.themoviedb.org">
    <link rel="dns-prefetch" href="https://image.tmdb.org">
    <link rel="dns-prefetch" href="https://ollyembed.pages.dev">
    <link rel="dns-prefetch" href="https://vidbolt.xyz">
    <link rel="dns-prefetch" href="https://embedwave.cc">
    <link rel="dns-prefetch" href="https://embed.filmu.in">
    <link rel="dns-prefetch" href="https://embed.vidrift.net">
    <link rel="dns-prefetch" href="https://player.vidzee.wtf">
    <link rel="dns-prefetch" href="https://player.vidlove.cc">
    <link rel="dns-prefetch" href="https://videm.xyz">
    <link rel="dns-prefetch" href="https://cinesrc.st">
    <link rel="dns-prefetch" href="https://primesrc.me">
    <link rel="dns-prefetch" href="https://www.2embed.skin">
    <link rel="dns-prefetch" href="https://embedmaster.link">
    <link rel="dns-prefetch" href="https://vidfast.pro">
    <link rel="dns-prefetch" href="https://vidnest.fun">
    <link rel="dns-prefetch" href="https://vaplayer.ru">
    <link rel="dns-prefetch" href="https://player.videasy.net">
    <link rel="dns-prefetch" href="https://vidphantom.com">

    <meta name="referrer" content="no-referrer-when-downgrade">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    
    <!-- Mobile PWA Meta -->
    <meta name="theme-color" content="#050505">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="application-name" content="Openworld4all">
    <link rel="manifest" id="manifest-link" href="data:application/manifest+json;charset=utf-8,%7B%22name%22%3A%22Openworld4all%22%2C%22short_name%22%3A%22OW4A%22%2C%22start_url%22%3A%22.%22%2C%22display%22%3A%22standalone%22%2C%22background_color%22%3A%22%23050505%22%2C%22theme_color%22%3A%22%23050505%22%7D">

    <!-- Anti-Tamper & Domain Guard Early Shield -->
    <script>
        window.onerror = function(msg, url, lineNo, columnNo, error) {
            if (msg && typeof msg === 'string' && msg.indexOf('Unexpected end of input') !== -1) {
                console.warn("Handled network script parse drop:", msg);
                return true;
            }
            return false;
        };

        window.addEventListener('error', function(e) {
            if (e && e.message && e.message.indexOf('Unexpected end of input') !== -1) {
                if (e.preventDefault) e.preventDefault();
                return true;
            }
        }, true);

        (function() {
            try {
                if (window.top !== window.self) {
                    var parentHost = '';
                    try { parentHost = window.top.location.hostname; } catch(e) { parentHost = ''; }
                    var allowedIframeHosts = ['openworld4all.gt.tc', 'anime4all.gt.tc', 'github.io', 'localhost', '127.0.0.1'];
                    if (!allowedIframeHosts.some(function(h) { return parentHost.indexOf(h) !== -1; })) {
                        try {
                            window.top.location = window.self.location.href;
                        } catch(err) {
                            console.warn("Framing blocked by host policy.");
                        }
                    }
                }
            } catch (e) {}

            document.addEventListener('contextmenu', function(e) {
                e.preventDefault();
                return false;
            }, { passive: false });

            document.addEventListener('keydown', function(e) {
                if (e.key === 'F12' || e.keyCode === 123) {
                    e.preventDefault();
                    return false;
                }
                if ((e.ctrlKey || e.metaKey) && e.shiftKey && (e.key === 'I' || e.key === 'i' || e.key === 'J' || e.key === 'j' || e.key === 'C' || e.key === 'c')) {
                    e.preventDefault();
                    return false;
                }
                if ((e.ctrlKey || e.metaKey) && (e.key === 'U' || e.key === 'u' || e.key === 'S' || e.key === 's')) {
                    e.preventDefault();
                    return false;
                }
            });
        })();
    </script>

    <!-- Typography & Tailwind CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brandPink: 'var(--brand-primary, #ffbade)',
                        brandYellow: 'var(--brand-secondary, #ffc107)',
                        cinemaDark: '#050505',
                        cinemaCard: '#0f0f12',
                        cinemaCardHover: '#18181f',
                        accentBlue: '#00d2ff',
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'Poppins', 'sans-serif'],
                        poppins: ['Poppins', 'sans-serif'],
                    },
                    screens: {
                        '3xl': '1920px',
                    }
                }
            }
        }
    </script>

    <style>
        :root {
            --brand-primary: #ffbade;
            --brand-secondary: #ffc107;
            --neon-glow: rgba(255, 186, 222, 0.15);
        }
        
        .theme-quartz {
            --brand-primary: #ffbade;
            --brand-secondary: #ffc107;
            --neon-glow: rgba(255, 186, 222, 0.15);
        }
        .theme-amber {
            --brand-primary: #ffc107;
            --brand-secondary: #ff5722;
            --neon-glow: rgba(255, 193, 7, 0.15);
        }
        .theme-cyberpunk {
            --brand-primary: #00f0ff;
            --brand-secondary: #ff007f;
            --neon-glow: rgba(0, 240, 255, 0.2);
        }
        .theme-stealth {
            --brand-primary: #ffffff;
            --brand-secondary: #52525b;
            --neon-glow: rgba(255, 255, 255, 0.05);
            background-color: #000000 !important;
        }

        html { 
            scroll-behavior: smooth; 
            -webkit-text-size-adjust: 100%; 
        }

        *, *:before, *:after { 
            box-sizing: border-box; 
            -webkit-tap-highlight-color: transparent; 
        }

        body { 
            background-color: #050505; 
            color: #f3f4f6; 
            overflow-x: hidden; 
            min-height: 100vh; 
            overscroll-behavior-y: contain; 
            padding-bottom: calc(85px + env(safe-area-inset-bottom));
        }

        ::-webkit-scrollbar { width: 7px; height: 7px; }
        ::-webkit-scrollbar-track { background: #050505; }
        ::-webkit-scrollbar-thumb { background: #1f1f23; border-radius: 99px; border: 2px solid #050505; }
        ::-webkit-scrollbar-thumb:hover { background: var(--brand-primary); }

        .glass-header {
            background: rgba(5, 5, 5, 0.94);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .glass-panel {
            background: rgba(15, 15, 18, 0.88);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.06);
        }

        .hero-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center 20%;
            opacity: 0;
            will-change: opacity;
            transition: opacity 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            z-index: 0;
            pointer-events: none;
        }
        .hero-slide.active {
            opacity: 1;
            z-index: 10;
            pointer-events: auto;
        }
        .hero-slide::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, #050505 6%, rgba(5, 5, 5, 0.5) 50%, rgba(5, 5, 5, 0.15) 100%);
        }

        .movie-card {
            will-change: transform;
            transform: translateZ(0);
            backface-visibility: hidden;
        }

        .h-scroller {
            display: flex;
            overflow-x: auto;
            overflow-y: hidden;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
            gap: 1.25rem;
            padding: 0.5rem 0.25rem 1rem;
            scroll-behavior: smooth;
        }
        .h-scroller::-webkit-scrollbar { height: 5px; }
        .h-scroller::-webkit-scrollbar-thumb { background: rgba(255, 255, 255, 0.08); border-radius: 99px; }
        .h-scroller::-webkit-scrollbar-thumb:hover { background: var(--brand-primary); }

        @keyframes shimmerEffect {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }
        .shimmer-skele {
            background: linear-gradient(90deg, #0f0f12 25%, #1c1c24 50%, #0f0f12 75%);
            background-size: 200% 100%;
            animation: shimmerEffect 1.2s infinite linear;
        }

        .scrollbar-none::-webkit-scrollbar { display: none; }
        .scrollbar-none { -ms-overflow-style: none; scrollbar-width: none; }
        
        .glow-hover:hover {
            box-shadow: 0 0 16px var(--neon-glow);
            border-color: var(--brand-primary);
        }

        #top-progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            height: 3px;
            width: 0%;
            background: linear-gradient(90deg, var(--brand-primary, #ffbade), var(--brand-secondary, #ffc107), #00d2ff);
            z-index: 99999;
            pointer-events: none;
            box-shadow: 0 0 10px var(--brand-primary, #ffbade);
            transition: width 0.15s ease-out, opacity 0.3s ease;
        }

        /* Fixed Fullscreen Selectors: Matches both when #player-wrapper IS the fullscreen element and when it is inside one */
        #player-wrapper:fullscreen,
        #player-wrapper:-webkit-full-screen,
        #player-wrapper:-moz-full-screen,
        :fullscreen #player-wrapper,
        :-webkit-full-screen #player-wrapper,
        #player-wrapper.pseudo-fullscreen,
        .pseudo-fullscreen #player-wrapper {
            width: 100vw !important;
            height: 100vh !important;
            max-width: 100vw !important;
            max-height: 100vh !important;
            aspect-ratio: auto !important;
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
            z-index: 999999 !important;
            background: #000 !important;
            border-radius: 0 !important;
        }

        #player-wrapper:fullscreen #streaming-player,
        #player-wrapper:-webkit-full-screen #streaming-player,
        #player-wrapper:-moz-full-screen #streaming-player,
        :fullscreen #streaming-player,
        :-webkit-full-screen #streaming-player,
        #player-wrapper.pseudo-fullscreen #streaming-player,
        .pseudo-fullscreen #streaming-player {
            width: 100% !important;
            height: 100% !important;
            min-width: 100% !important;
            min-height: 100% !important;
            aspect-ratio: auto !important;
            display: block !important;
        }

        #player-wrapper:fullscreen #fs-exit-floating-btn,
        #player-wrapper:-webkit-full-screen #fs-exit-floating-btn,
        #player-wrapper.pseudo-fullscreen #fs-exit-floating-btn {
            display: flex !important;
        }

        #app-preloader {
            transition: opacity 0.4s cubic-bezier(0.4, 0, 0.2, 1), transform 0.4s ease;
        }
        @keyframes pulseGlow {
            0%, 100% { transform: scale(1); opacity: 0.85; filter: drop-shadow(0 0 15px rgba(255, 186, 222, 0.4)); }
            50% { transform: scale(1.08); opacity: 1; filter: drop-shadow(0 0 30px rgba(255, 193, 7, 0.6)); }
        }
        .preloader-glow { animation: pulseGlow 2.2s infinite ease-in-out; }
        @keyframes orbitRotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .preloader-orbit { animation: orbitRotate 4s linear infinite; }
    </style>

    <script src="https://pl28351525.profitableratecpmnetwork.com/d6/e7/52/d6e752359a96b1efc06193d221479734.js"></script>
</head>
<body class="font-sans antialiased text-gray-200 theme-quartz">

    <div id="top-progress-bar"></div>

    <div id="app-preloader" class="fixed inset-0 z-[99999] bg-[#050505] flex flex-col items-center justify-center pointer-events-auto">
        <div class="relative flex items-center justify-center mb-6">
            <div class="w-28 h-28 rounded-full border-2 border-brandPink/30 border-t-brandPink preloader-orbit absolute"></div>
            <div class="w-36 h-36 rounded-full border border-brandYellow/20 border-b-brandYellow preloader-orbit absolute" style="animation-direction: reverse; animation-duration: 6s;"></div>
            <div class="w-20 h-20 rounded-full bg-gradient-to-tr from-brandPink to-brandYellow preloader-glow flex items-center justify-center shadow-2xl">
                <svg width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <polygon points="5 3 19 12 5 21 5 3"></polygon>
                </svg>
            </div>
        </div>
        <div class="text-center px-4">
            <h2 class="text-xl md:text-2xl font-black tracking-wider text-white">OPENWORLD<span class="text-brandPink">4ALL</span></h2>
            <p class="text-xs font-bold tracking-[0.25em] text-brandYellow mt-1">HYBRID CINEMA PREMIUM</p>
            <div class="w-48 h-1 bg-white/10 rounded-full overflow-hidden mt-5 mx-auto">
                <div class="h-full bg-gradient-to-r from-brandPink via-brandYellow to-accentBlue rounded-full animate-pulse"></div>
            </div>
            <p id="preloader-status" class="text-[10px] text-gray-400 font-mono mt-3 uppercase tracking-widest">Starting Cinema Experience...</p>
            <button onclick="dismissPreloader()" class="mt-4 px-4 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-[10px] font-bold text-gray-300 tracking-wider uppercase border border-white/10 transition-all">Skip Loading</button>
        </div>
    </div>

    <div id="toast-container" class="fixed top-24 left-1/2 -translate-x-1/2 z-[9999] pointer-events-none w-[90%] max-w-sm flex flex-col gap-2"></div>

    <header id="header" class="glass-header sticky top-0 left-0 right-0 z-[1000] transition-all duration-300">
        <div class="max-w-[1800px] mx-auto px-4 py-3 flex flex-col gap-3">
            
            <div class="flex items-center justify-between flex-wrap gap-3">
                <div class="flex items-center gap-3 md:gap-5 flex-wrap">
                    <div class="logo cursor-pointer" onclick="goHome(true)" aria-label="Home">
                        <svg width="200" height="42" viewBox="0 0 300 80" xmlns="http://www.w3.org/2000/svg" class="w-auto h-9 md:h-10">
                            <defs>
                                <linearGradient id="logoGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="var(--brand-primary)" />
                                    <stop offset="100%" stop-color="var(--brand-secondary)" />
                                </linearGradient>
                            </defs>
                            <g transform="translate(5, 15)">
                                <circle cx="25" cy="25" r="22" fill="none" stroke="#222" stroke-width="2" />
                                <ellipse cx="25" cy="25" rx="24" ry="10" fill="none" stroke="url(#logoGrad)" stroke-width="3" transform="rotate(-30 25 25)" />
                                <ellipse cx="25" cy="25" rx="10" ry="24" fill="none" stroke="url(#logoGrad)" stroke-width="3" transform="rotate(-30 25 25)" />
                                <polygon points="20,16 20,34 34,25" fill="#ffffff" />
                            </g>
                            <text x="65" y="45" font-family="'Poppins', sans-serif" font-size="26" font-weight="800" fill="#f3f4f6" letter-spacing="1">
                                OPENWORLD<tspan fill="var(--brand-primary)">4ALL</tspan>
                            </text>
                            <text x="68" y="66" font-family="'Poppins', sans-serif" font-size="11" font-weight="700" fill="var(--brand-secondary)" letter-spacing="4">
                                HYBRID CINEMA
                            </text>
                        </svg>
                    </div>

                    <div class="flex items-center gap-1.5 flex-wrap">
                        <a href="http://anime4all.gt.tc" target="_blank" rel="noopener noreferrer" class="relative group flex items-center gap-1 px-2.5 py-1 rounded-full text-[9px] md:text-[10px] font-bold uppercase tracking-wider text-white overflow-hidden bg-gradient-to-r from-red-600 to-orange-400 hover:scale-105 transition-all">
                            Anime4All
                        </a>
                        <a href="https://retrostream.gt.tc" target="_blank" rel="noopener noreferrer" class="relative group flex items-center gap-1 px-2.5 py-1 rounded-full text-[9px] md:text-[10px] font-bold uppercase tracking-wider text-white overflow-hidden bg-gradient-to-r from-cyan-500 to-fuchsia-500 hover:scale-105 transition-all">
                            RetroStream
                        </a>
                        <a href="https://www.profitableratecpmnetwork.com/k9uy3dcs9?key=b090207813e8999f303be6431550eec0" target="_blank" rel="noopener noreferrer" class="flex items-center gap-1 px-2.5 py-1 rounded-full text-[9px] md:text-[10px] font-bold uppercase tracking-wider bg-gradient-to-r from-brandYellow to-amber-500 text-black hover:scale-105 transition-all shadow-md" title="Special Perks & Rewards">
                            ⭐ VIP Perks
                        </a>
                    </div>
                </div>

                <div class="flex items-center gap-2 flex-wrap">
                    <div class="relative inline-block text-left" id="apk-download-dropdown">
                        <button onclick="toggleApkMenu(event)" class="flex items-center gap-1.5 px-3 md:px-4 py-2 rounded-full text-xs font-bold bg-gradient-to-r from-emerald-500 to-teal-600 text-white hover:brightness-110 shadow-lg active:scale-95 transition-all border border-emerald-400/30" title="Download APK for Android Phone or Android TV">
                            <svg class="w-3.5 h-3.5 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" y1="15" x2="12" y2="3"></line>
                            </svg>
                            <span>Download APK</span>
                            <svg class="w-3 h-3 text-white/80 transform transition-transform" id="apk-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </button>
                        <!-- Dropdown Menu -->
                        <div id="apk-menu" class="hidden absolute right-0 mt-2 w-56 rounded-2xl bg-[#0f0f12] border border-white/10 shadow-2xl z-[2200] overflow-hidden p-1.5 backdrop-blur-xl">
                            <a href="Openworld4All-smartphone.apk" download="Openworld4All-smartphone.apk" onclick="showToast('Downloading Android Smartphone APK...'); closeApkMenu();" class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-white/10 transition-all group">
                                <div class="w-8 h-8 rounded-lg bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold text-base flex-shrink-0 group-hover:scale-110 transition-transform">
                                    📱
                                </div>
                                <div class="flex flex-col min-w-0">
                                    <span class="text-xs font-bold text-white group-hover:text-emerald-400 transition-colors">Android Phone</span>
                                    <span class="text-[10px] text-gray-400">Mobile &amp; Tablet Edition</span>
                                </div>
                            </a>
                            
                            <a href="Openworld4All-android-tv.apk" download="Openworld4All-android-tv.apk" onclick="showToast('Downloading Android TV APK...'); closeApkMenu();" class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-white/10 transition-all group mt-1">
                                <div class="w-8 h-8 rounded-lg bg-teal-500/20 text-teal-400 flex items-center justify-center font-bold text-base flex-shrink-0 group-hover:scale-110 transition-transform">
                                    📺
                                </div>
                                <div class="flex flex-col min-w-0">
                                    <span class="text-xs font-bold text-white group-hover:text-teal-400 transition-colors">Android TV</span>
                                    <span class="text-[10px] text-gray-400">Smart TV &amp; FireStick Edition</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <button id="install-pwa-btn" class="hidden items-center gap-1.5 px-4 py-2 rounded-full text-xs font-bold bg-gradient-to-r from-brandYellow to-amber-500 text-black hover:brightness-110 shadow-lg active:scale-95 transition-all" onclick="installPWA()">
                        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                        Install App
                    </button>

                    <button class="flex items-center gap-1.5 px-4 py-2 rounded-full border border-white/10 hover:bg-white/5 hover:border-white/20 text-xs font-bold tracking-wide transition-all" onclick="showWatchlist()" aria-label="My Watchlist">
                        <svg class="w-3.5 h-3.5 text-brandYellow" viewBox="0 0 24 24" fill="currentColor"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
                        <span>My List</span>
                    </button>
                    
                    <button class="flex items-center justify-center w-9 h-9 rounded-full bg-white/5 border border-white/10 hover:bg-white/10 transition-all" onclick="toggleSettingsModal()" aria-label="App Settings">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0-1 1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06-.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                    </button>
                </div>
            </div>

            <div class="relative w-full max-w-lg mx-auto">
                <form id="form" onsubmit="return false;" class="relative">
                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </span>
                    <input type="text" id="search" class="w-full bg-white/5 hover:bg-white/10 focus:bg-white/10 text-white placeholder-gray-400 text-sm py-2.5 pl-11 pr-12 rounded-full border border-white/5 focus:border-brandPink focus:ring-1 focus:ring-brandPink/30 outline-none transition-all" placeholder="Search films, series, actors..." autocomplete="off" aria-label="Search">
                    <button type="button" id="clear-search" class="hidden absolute right-2 top-1/2 -translate-y-1/2 w-8 h-8 rounded-full items-center justify-center text-gray-400 hover:text-white hover:bg-white/10 text-xl transition-all" onclick="clearSearch(event)" aria-label="Clear search">&times;</button>
                </form>
                <div id="suggestions" class="absolute top-[120%] left-0 right-0 bg-[#0c0c0e]/95 border border-white/10 rounded-2xl max-h-[360px] overflow-y-auto z-[2000] hidden shadow-2xl backdrop-blur-xl"></div>
            </div>

            <div class="flex items-center justify-center gap-1 sm:gap-2 border-t border-white/5 pt-2 overflow-x-auto scrollbar-none" id="hotstar-main-tabs">
                <button onclick="switchHotstarTab('home')" id="tab-home" class="px-4 py-1.5 rounded-full text-xs font-extrabold bg-brandPink text-black transition-all">Home</button>
                <button onclick="switchHotstarTab('movies')" id="tab-movies" class="px-4 py-1.5 rounded-full text-xs font-semibold text-gray-300 hover:bg-white/10 transition-all">Movies</button>
                <button onclick="switchHotstarTab('tv')" id="tab-tv" class="px-4 py-1.5 rounded-full text-xs font-semibold text-gray-300 hover:bg-white/10 transition-all">TV Shows</button>
                <button onclick="switchHotstarTab('languages')" id="tab-languages" class="px-4 py-1.5 rounded-full text-xs font-semibold text-gray-300 hover:bg-white/10 transition-all">Languages</button>
                <button onclick="switchHotstarTab('genres')" id="tab-genres" class="px-4 py-1.5 rounded-full text-xs font-semibold text-gray-300 hover:bg-white/10 transition-all">Genres</button>
            </div>

            <div id="category-pills-bar" class="flex items-center gap-2 overflow-x-auto pb-1 scrollbar-none"></div>

        </div>
    </header>

    <div id="home-view" class="transition-opacity duration-300 opacity-100">
        
        <div class="relative w-full h-[50vh] md:h-[65vh] min-h-[380px] overflow-hidden bg-black hidden rounded-b-[2rem] shadow-2xl" id="hero-slider-container">
            <div id="hero-slider" class="w-full h-full"></div>
            <div id="hero-indicators" class="absolute bottom-5 left-1/2 -translate-x-1/2 z-30 flex items-center gap-2"></div>
        </div>

        <div class="max-w-[1800px] mx-auto px-4 mt-6 flex justify-center overflow-hidden">
            <div class="hidden md:block">
                <script>
                    atOptions = {
                        'key' : 'b83fc35ac9bf685e1aa643f3563cd3e3',
                        'format' : 'iframe',
                        'height' : 90,
                        'width' : 728,
                        'params' : {}
                    };
                </script>
                <script src="https://www.highrevenueformat.com/b83fc35ac9bf685e1aa643f3563cd3e3/invoke.js"></script>
            </div>
            <div class="block md:hidden">
                <script>
                    atOptions = {
                        'key' : '2eb6ba9056d56fc61b8e0cd13049dbe0',
                        'format' : 'iframe',
                        'height' : 50,
                        'width' : 320,
                        'params' : {}
                    };
                </script>
                <script src="https://www.highrevenueformat.com/2eb6ba9056d56fc61b8e0cd13049dbe0/invoke.js"></script>
            </div>
        </div>

        <div id="continue-watching-section" class="max-w-[1800px] mx-auto px-4 mt-8 hidden">
            <div class="flex items-center justify-between gap-4 mb-4">
                <div class="flex items-center gap-2.5">
                    <span class="w-1.5 h-6 bg-brandPink rounded-full"></span>
                    <h2 class="text-xl md:text-2xl font-extrabold tracking-tight">Continue Watching</h2>
                </div>
                <button onclick="clearContinueWatching()" class="text-xs text-gray-400 hover:text-red-400 transition-colors">Clear History</button>
            </div>
            <div id="continue-watching-list" class="h-scroller"></div>
        </div>

        <div id="watchlist-section" class="max-w-[1800px] mx-auto px-4 mt-8 hidden">
            <div class="flex items-center gap-2.5 mb-4">
                <span class="w-1.5 h-6 bg-brandYellow rounded-full"></span>
                <h2 class="text-xl md:text-2xl font-extrabold tracking-tight">My List</h2>
            </div>
            <div id="watchlist-list" class="h-scroller"></div>
        </div>

        <div class="max-w-[1800px] mx-auto px-4 mt-6">
            <script async="async" data-cfasync="false" src="https://pl28351577.profitableratecpmnetwork.com/c9a3af6ebde3c359de797737da2d433c/invoke.js"></script>
            <div id="container-c9a3af6ebde3c359de797737da2d433c"></div>
        </div>

        <div id="curated-shelves-container" class="max-w-[1800px] mx-auto px-4 mt-8 flex flex-col gap-10"></div>

        <div id="grid-view-container" class="max-w-[1800px] mx-auto px-4 mt-8 hidden">
            
            <div class="flex items-center justify-between gap-4 mb-6 flex-wrap bg-white/5 border border-white/5 rounded-2xl p-4">
                <button onclick="exitSectionGrid()" class="flex items-center gap-2 px-5 py-2.5 rounded-full text-xs font-bold bg-brandPink text-black hover:bg-white hover:scale-105 active:scale-95 transition-all shadow-lg">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    <span>Back to All Shelves</span>
                </button>
                <div class="flex items-center gap-2.5">
                    <span class="w-1.5 h-6 bg-brandPink rounded-full"></span>
                    <h2 class="text-xl md:text-2xl font-extrabold tracking-tight" id="home-title">Catalog Section</h2>
                </div>
            </div>

            <div class="my-4 flex justify-center overflow-hidden">
                <script>
                    atOptions = {
                        'key' : 'ca80e3e8ca72e7acd00efbea8e434d13',
                        'format' : 'iframe',
                        'height' : 60,
                        'width' : 468,
                        'params' : {}
                    };
                </script>
                <script src="https://www.highrevenueformat.com/ca80e3e8ca72e7acd00efbea8e434d13/invoke.js"></script>
            </div>

            <main id="main" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 2xl:grid-cols-7 3xl:grid-cols-8 gap-4 md:gap-6"></main>

            <div id="pagination-container" class="flex flex-col items-center justify-center gap-3 py-12">
                <div id="pagination-info" class="text-xs font-semibold text-gray-400"></div>
                <div id="pagination-controls" class="flex items-center gap-1.5 flex-wrap justify-center"></div>
            </div>

            <div class="text-center pb-12">
                <button onclick="exitSectionGrid()" class="px-6 py-2.5 rounded-full border border-white/10 hover:bg-white/10 text-xs font-semibold text-gray-300 transition-all">
                    &larr; Return to All Shelves
                </button>
            </div>

            <div id="loader" class="hidden text-center py-12">
                <div class="w-10 h-10 border-4 border-white/10 border-l-brandPink rounded-full animate-spin inline-block"></div>
            </div>
        </div>
    </div>

    <div id="details-view" class="hidden min-h-screen relative transition-all duration-500 pb-20">
        <div id="details-backdrop" class="absolute top-0 left-0 right-0 h-[60vh] bg-cover bg-center opacity-10 filter blur-3xl -z-10 pointer-events-none"></div>
        <div class="absolute top-0 left-0 right-0 h-[65vh] bg-gradient-to-b from-transparent to-[#050505] -z-10 pointer-events-none"></div>
        
        <div id="player-theater-wrapper" class="w-full max-w-[1800px] mx-auto px-0 md:px-4 pt-4 transition-all duration-500">
            <div class="flex items-center justify-between mb-4 px-4 md:px-0">
                <button class="group flex items-center gap-2 px-5 py-2.5 rounded-full bg-white/5 hover:bg-white/15 border border-white/5 text-sm font-semibold transition-all" onclick="goBackUI()">
                    <svg class="w-4 h-4 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                    Go Back
                </button>
                <div class="flex items-center gap-2">
                    <button id="theater-btn" class="hidden md:flex items-center gap-2 px-4 py-2 rounded-full border border-white/5 bg-white/5 hover:bg-white/10 text-xs font-semibold text-gray-300 hover:text-white transition-all" onclick="toggleTheaterMode()">
                        <svg class="w-4 h-4 text-brandPink" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="3" x2="9" y2="21"></line></svg>
                        <span>Theater Layout</span>
                    </button>
                </div>
            </div>

            <div id="player-dynamic-card" class="transition-all duration-300"></div>

            <div class="mt-4 flex flex-wrap items-center justify-center gap-4 overflow-hidden">
                <div>
                    <script>
                        atOptions = {
                            'key' : '728c9be10298fdd91d6604f136c5c8e7',
                            'format' : 'iframe',
                            'height' : 250,
                            'width' : 300,
                            'params' : {}
                        };
                    </script>
                    <script src="https://www.highrevenueformat.com/728c9be10298fdd91d6604f136c5c8e7/invoke.js"></script>
                </div>
            </div>
        </div>

        <div class="max-w-[1800px] mx-auto px-4 mt-6">
            <div id="details-metadata-content" class="transition-all duration-300"></div>
        </div>
    </div>

    <div id="settings-modal" class="fixed inset-0 bg-black/80 z-[3000] hidden items-center justify-center p-4 backdrop-blur-md transition-all duration-300">
        <div class="bg-[#0f0f12] border border-white/10 rounded-2xl w-full max-w-md p-6 relative shadow-2xl">
            <button onclick="toggleSettingsModal()" class="absolute top-4 right-4 text-gray-400 hover:text-white text-2xl font-bold transition-all">&times;</button>
            <h3 class="text-xl font-extrabold text-white mb-6 flex items-center gap-2 border-b border-white/5 pb-3">
                <svg class="w-5 h-5 text-brandPink" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0-1 1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06-.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                System Customizations
            </h3>
            
            <div class="flex flex-col gap-5">
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-wider">Interface Visual Style</label>
                    <div class="grid grid-cols-4 gap-2">
                        <button onclick="changeTheme('quartz')" class="p-2.5 rounded-xl border border-white/5 bg-white/5 text-[10px] font-bold hover:bg-white/10 transition-all text-center">Rose Quartz</button>
                        <button onclick="changeTheme('amber')" class="p-2.5 rounded-xl border border-white/5 bg-white/5 text-[10px] font-bold hover:bg-white/10 transition-all text-center">Gold Amber</button>
                        <button onclick="changeTheme('cyberpunk')" class="p-2.5 rounded-xl border border-white/5 bg-white/5 text-[10px] font-bold hover:bg-white/10 transition-all text-center">Neon Cyber</button>
                        <button onclick="changeTheme('stealth')" class="p-2.5 rounded-xl border border-white/5 bg-white/5 text-[10px] font-bold hover:bg-white/10 transition-all text-center">OLED Stealth</button>
                    </div>
                </div>

                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-wider flex items-center justify-between">
                        <span>Personal TMDB Key</span>
                        <a href="https://www.themoviedb.org/settings/api" target="_blank" rel="noopener noreferrer" class="text-brandPink hover:underline lowercase font-semibold text-[10px]">Generate free key</a>
                    </label>
                    <input type="text" id="settings-tmdb-key" class="w-full bg-white/5 hover:bg-white/10 text-white placeholder-gray-600 text-xs py-2.5 px-4 rounded-xl border border-white/5 outline-none focus:border-brandPink" placeholder="Paste custom TMDB API key (Optional)...">
                </div>
            </div>

            <div class="flex items-center gap-3 mt-6 border-t border-white/5 pt-4">
                <button onclick="saveAppSettings()" class="flex-grow py-2.5 rounded-xl bg-brandPink text-black text-xs font-bold hover:scale-105 transition-all">Apply Settings</button>
                <button onclick="toggleSettingsModal()" class="flex-grow py-2.5 rounded-xl bg-white/5 hover:bg-white/10 text-white text-xs font-semibold transition-all">Discard</button>
            </div>
        </div>
    </div>

    <button id="scrollTopBtn" class="fixed hidden bottom-24 md:bottom-8 right-6 z-[2000] w-12 h-12 rounded-full bg-brandPink text-black items-center justify-center hover:scale-110 hover:bg-white active:scale-95 shadow-xl transition-all duration-300" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" aria-label="Scroll to top">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5"/></svg>
    </button>

    <footer class="bg-black/40 border-t border-white/5 py-12 px-4 text-center text-xs text-gray-500 flex flex-col gap-2">
        <p class="max-w-xl mx-auto leading-relaxed"><strong class="text-gray-400">Disclaimer:</strong> OPENWORLD4ALL does not host, mirror, or capture any media files stored on external stream nodes. All structural media queries route dynamically via public index services.</p>
        <p class="font-semibold text-gray-400 mt-2">&copy; 2026 Openworld4all. Built with Hybrid Cinema Shell Premium.</p>
    </footer>

    <nav class="mobile-bottom-nav flex md:hidden fixed bottom-0 left-0 right-0 glass-header px-4 pb-safe border-t border-white/10 z-[2500]">
        <a id="bnav-home" onclick="goHome(true); return false;" class="flex-1 text-center py-3 text-gray-400 font-semibold flex flex-col items-center gap-1 cursor-pointer active:scale-90 transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
            <span class="text-[10px] tracking-wide font-medium">Home</span>
        </a>
        <a id="bnav-search" onclick="focusSearch(); return false;" class="flex-1 text-center py-3 text-gray-400 font-semibold flex flex-col items-center gap-1 cursor-pointer active:scale-90 transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            <span class="text-[10px] tracking-wide font-medium">Search</span>
        </a>
        <a id="bnav-list" onclick="showWatchlist(); return false;" class="flex-1 text-center py-3 text-gray-400 font-semibold flex flex-col items-center gap-1 cursor-pointer active:scale-90 transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
            <span class="text-[10px] tracking-wide font-medium">My List</span>
        </a>
    </nav>

    <script>
        var isTheaterMode = false;
        var appTheme = 'quartz';
        var appCustomApiKey = '';

        var safeMemoryStore = {};
        var safeStorage = {
            getItem: function(key) {
                try {
                    return localStorage.getItem(key);
                } catch(e) {
                    return safeMemoryStore[key] || null;
                }
            },
            setItem: function(key, val) {
                try {
                    localStorage.setItem(key, val);
                } catch(e) {
                    safeMemoryStore[key] = String(val);
                }
            },
            removeItem: function(key) {
                try {
                    localStorage.removeItem(key);
                } catch(e) {
                    delete safeMemoryStore[key];
                }
            }
        };

        function safeJsonParse(str, fallback) {
            if (!str || typeof str !== 'string' || !str.trim()) return fallback;
            try {
                var parsed = JSON.parse(str);
                return (parsed !== null && parsed !== undefined) ? parsed : fallback;
            } catch(e) {
                return fallback;
            }
        }

        var SECURITY_CONFIG = {
            OFFICIAL_DOMAIN: 'openworld4all.gt.tc',
            OFFICIAL_URL: 'https://openworld4all.gt.tc',
            AUTHORIZED_HOSTS: [
                'openworld4all.gt.tc',
                'www.openworld4all.gt.tc',
                'github.io',
                'localhost',
                '127.0.0.1',
                ''
            ]
        };

        function verifyDomainIntegrity() {
            var currentHost = window.location.hostname.toLowerCase();
            var isAuthorized = SECURITY_CONFIG.AUTHORIZED_HOSTS.some(function(allowed) {
                return currentHost === allowed || (allowed && currentHost.endsWith('.' + allowed));
            });

            if (!isAuthorized) {
                document.documentElement.innerHTML = `
                <head>
                    <title>Unauthorized Mirror | Openworld4all</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <style>
                        body { background: #050505; color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; display: flex; align-items: center; justify-content: center; min-height: 100vh; margin: 0; padding: 20px; text-align: center; }
                        .card { background: #0f0f12; border: 1px solid rgba(255,255,255,0.1); border-radius: 24px; padding: 40px 30px; max-width: 480px; box-shadow: 0 20px 40px rgba(0,0,0,0.8); }
                        .badge { display: inline-block; background: rgba(239,68,68,0.2); color: #f87171; border: 1px solid rgba(239,68,68,0.3); padding: 4px 14px; border-radius: 99px; font-size: 11px; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 20px; }
                        h1 { font-size: 22px; font-weight: 800; margin: 0 0 12px; }
                        p { font-size: 13px; color: #9ca3af; line-height: 1.6; margin: 0 0 25px; }
                        .btn { display: inline-block; background: linear-gradient(135deg, #ffbade, #ffc107); color: #000; font-weight: 800; font-size: 13px; text-decoration: none; padding: 12px 28px; border-radius: 99px; transition: transform 0.2s ease; }
                        .btn:hover { transform: scale(1.05); }
                        .countdown { font-size: 11px; color: #6b7280; margin-top: 18px; font-family: monospace; }
                    </style>
                </head>
                <body>
                    <div class="card">
                        <div class="badge">Security Protection Active</div>
                        <h1>Unauthorized Mirror Detected</h1>
                        <p>This clone or mirrored instance is running on an unauthorized domain (<strong>` + (currentHost || 'unknown') + `</strong>). Streaming gateways and APIs are disabled on unverified copies.</p>
                        <a href="` + SECURITY_CONFIG.OFFICIAL_URL + `" class="btn">Go to Official Cinema</a>
                        <div class="countdown" id="redirect-timer">Redirecting to official website in 5 seconds...</div>
                    </div>
                </body>`;

                var countdownSec = 5;
                var countdownEl = document.getElementById('redirect-timer');
                var timer = setInterval(function() {
                    countdownSec--;
                    if (countdownEl) countdownEl.textContent = 'Redirecting to official website in ' + countdownSec + ' seconds...';
                    if (countdownSec <= 0) {
                        clearInterval(timer);
                        window.location.href = SECURITY_CONFIG.OFFICIAL_URL;
                    }
                }, 1000);
                return false;
            }
            return true;
        }

        function decodeHostKey(obfStr) {
            try {
                var currentHost = window.location.hostname.toLowerCase();
                var baseSeed = (currentHost === '' || currentHost === 'localhost' || currentHost === '127.0.0.1') ? 'openworld4all' : currentHost.split('.')[0];
                var raw = atob(obfStr);
                var out = '';
                for (var i = 0; i < raw.length; i++) {
                    out += String.fromCharCode(raw.charCodeAt(i) ^ baseSeed.charCodeAt(i % baseSeed.length));
                }
                return out;
            } catch (e) {
                return '';
            }
        }

        function encodeHostKey(plainStr) {
            var baseSeed = 'openworld4all';
            var out = '';
            for (var i = 0; i < plainStr.length; i++) {
                out += String.fromCharCode(plainStr.charCodeAt(i) ^ baseSeed.charCodeAt(i % baseSeed.length));
            }
            return btoa(out);
        }

        var MASKED_KEYS = [
            encodeHostKey('97b91959714856f6424564c7f0782352'),
            encodeHostKey('1a5da5e4b6eacfd0b537c1948545a693'),
            encodeHostKey('3fd2be6f0c70a2a598f084ddfb75487c'),
            encodeHostKey('e2365287693247f9da9d62d25d194814'),
            encodeHostKey('4e44d9029b1270a757cddc766a1bcb63'),
            encodeHostKey('c4014902263435166299f4d3c63ee255'),
            encodeHostKey('6f3945413009090696752718a0022718')
        ];

        function getActiveMasterKeys() {
            var keys = MASKED_KEYS.map(function(k) { return decodeHostKey(k); }).filter(Boolean);
            if (keys.length === 0) {
                return [
                    '97b91959714856f6424564c7f0782352',
                    '1a5da5e4b6eacfd0b537c1948545a693',
                    '3fd2be6f0c70a2a598f084ddfb75487c'
                ];
            }
            return keys;
        }

        function startTopProgress() {
            var bar = document.getElementById('top-progress-bar');
            if (!bar) return;
            bar.style.opacity = '1';
            bar.style.width = '25%';
        }

        function stepTopProgress(pct) {
            var bar = document.getElementById('top-progress-bar');
            if (bar) bar.style.width = pct + '%';
        }

        function finishTopProgress() {
            var bar = document.getElementById('top-progress-bar');
            if (!bar) return;
            bar.style.width = '100%';
            setTimeout(function() {
                bar.style.opacity = '0';
                setTimeout(function() { bar.style.width = '0%'; }, 300);
            }, 180);
        }

        function dismissPreloader() {
            var preloader = document.getElementById('app-preloader');
            if (preloader) {
                preloader.style.opacity = '0';
                preloader.style.pointerEvents = 'none';
                preloader.style.transform = 'scale(1.04)';
                setTimeout(function() {
                    if (preloader.parentNode) preloader.parentNode.removeChild(preloader);
                }, 400);
            }
        }

        function toggleApkMenu(e) {
            if (e) e.stopPropagation();
            var menu = document.getElementById('apk-menu');
            var chevron = document.getElementById('apk-chevron');
            if (!menu) return;
            var isOpen = !menu.classList.contains('hidden');
            if (isOpen) {
                menu.classList.add('hidden');
                if (chevron) chevron.classList.remove('rotate-180');
            } else {
                menu.classList.remove('hidden');
                if (chevron) chevron.classList.add('rotate-180');
            }
        }

        function closeApkMenu() {
            var menu = document.getElementById('apk-menu');
            var chevron = document.getElementById('apk-chevron');
            if (menu) menu.classList.add('hidden');
            if (chevron) chevron.classList.remove('rotate-180');
        }

        document.addEventListener('click', function(e) {
            var dropdown = document.getElementById('apk-download-dropdown');
            if (dropdown && !dropdown.contains(e.target)) {
                closeApkMenu();
            }
        });

        window.addEventListener('scroll', function() {
            var scrollBtn = document.getElementById('scrollTopBtn');
            if (!scrollBtn) return;
            if (window.scrollY > 400) {
                scrollBtn.classList.remove('hidden');
                scrollBtn.classList.add('flex');
            } else {
                scrollBtn.classList.remove('flex');
                scrollBtn.classList.add('hidden');
            }
        }, { passive: true });

        var apiCache = new Map();
        var CACHE_TTL = 10 * 60 * 1000;
        var hoverPrefetchTimer = null;

        function fetchData(path, params, onSuccess, onError, keyIndex) {
            keyIndex = keyIndex || 0;
            params = params || {};
            var cacheKey = path + '?' + JSON.stringify(params);
            var now = Date.now();

            if (apiCache.has(cacheKey)) {
                var cached = apiCache.get(cacheKey);
                if (now - cached.timestamp < CACHE_TTL) {
                    if (onSuccess) onSuccess(cached.data);
                    return;
                } else {
                    apiCache.delete(cacheKey);
                }
            }

            startTopProgress();

            var keys = [];
            if (appCustomApiKey) keys.push(appCustomApiKey);
            keys = keys.concat(getActiveMasterKeys());

            if (keyIndex >= keys.length) {
                finishTopProgress();
                if (onError) onError("All TMDB API connection attempts failed.");
                return;
            }

            var activeKey = keys[keyIndex];
            var directParams = new URLSearchParams();
            for (var p in params) {
                if (params.hasOwnProperty(p) && params[p] !== undefined && params[p] !== null) {
                    directParams.append(p, params[p]);
                }
            }
            if (!directParams.has('language')) directParams.append('language', 'en-US');
            directParams.append('api_key', activeKey);

            var cleanPath = path ? path.replace(/^\/+/, '') : '';
            var targetUrl = CONFIG.baseUrl + '/' + cleanPath + '?' + directParams.toString();

            var controller = new AbortController();
            var timer = setTimeout(function() { controller.abort(); }, 7000);

            stepTopProgress(50 + (keyIndex * 10));

            fetch(targetUrl, { signal: controller.signal })
                .then(function(res) {
                    clearTimeout(timer);
                    if (!res.ok) throw new Error('HTTP ' + res.status);
                    return res.json();
                })
                .then(function(data) {
                    stepTopProgress(95);
                    apiCache.set(cacheKey, { timestamp: Date.now(), data: data });
                    finishTopProgress();
                    if (onSuccess) onSuccess(data);
                })
                .catch(function(err) {
                    clearTimeout(timer);
                    fetchData(path, params, onSuccess, onError, keyIndex + 1);
                });
        }

        var main = document.getElementById('main');
        var search = document.getElementById('search');
        var suggestionsBox = document.getElementById('suggestions');
        var homeView = document.getElementById('home-view');
        var detailsView = document.getElementById('details-view');
        var detailsMetadataContent = document.getElementById('details-metadata-content');
        var playerDynamicCard = document.getElementById('player-dynamic-card');
        var detailsBackdrop = document.getElementById('details-backdrop');
        var loader = document.getElementById('loader');

        function getSVGPlaceholder(title) {
            var escapedTitle = title ? String(title).replace(/["']/g, "") : "Openworld4all";
            var svg = `<svg xmlns="http://www.w3.org/2000/svg" width="185" height="278" viewBox="0 0 185 278" style="background:#0c0c0f">` +
                      `<rect width="100%" height="100%" fill="#0c0c0f"/>` +
                      `<g transform="translate(67, 100)" fill="#1e1e24">` +
                      `<path d="M25 0 C11.2 0 0 11.2 0 25 s11.2 25 25 25 25-11.2 25-25S38.8 0 25 0zm-5 36V14l15 11-15 11z"/>` +
                      `</g>` +
                      `<text x="50%" y="75%" dominant-baseline="middle" text-anchor="middle" font-family="sans-serif" font-size="11" font-weight="bold" fill="#3f3f46">${escapedTitle}</text>` +
                      `</svg>`;
            return "data:image/svg+xml;charset=utf-8," + encodeURIComponent(svg);
        }

        function showToast(message) {
            var container = document.getElementById('toast-container');
            if(!container) return;
            var toast = document.createElement('div');
            toast.className = 'glass-panel px-5 py-3 rounded-2xl text-xs font-semibold text-white tracking-wide shadow-xl flex items-center justify-between gap-4 translate-y-3 opacity-0 transition-all duration-300 border border-brandPink/20';
            toast.innerHTML = `<span class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-brandPink rounded-full animate-ping"></span> ${message}</span><button onclick="this.parentNode.remove()" class="text-white/50 hover:text-white font-bold text-base leading-none">&times;</button>`;
            container.appendChild(toast);
            
            setTimeout(function() { toast.classList.remove('translate-y-3', 'opacity-0'); }, 10);
            setTimeout(function() {
                toast.classList.add('translate-y-[-10px]', 'opacity-0');
                setTimeout(function() { toast.remove(); }, 350);
            }, 4000);
        }

        function prefetchDetails(id, type) {
            if (!id || !type) return;
            var path = type + '/' + id;
            var params = { append_to_response: 'credits,videos,recommendations,similar,external_ids' };
            fetchData(path, params, null, null);
        }

        function escapeHtml(text) {
            if (!text) return '';
            return String(text).replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#39;");
        }

        function safePushState(state, title, url) {
            try {
                if (window.location.protocol !== 'blob:' && window.location.protocol !== 'file:') {
                    window.history.pushState(state, title, url);
                }
            } catch (e) {}
        }

        var currentPlaying = { tmdbId: null, season: 1, episode: 1, type: 'movie', imdbId: '', title: '', year: '' };
        var currentSeasonTotalEpisodes = 0; 
        var currentServer = 'vidbolt';
        var activeHotstarTab = 'home';

        var currentPage = 1;
        var totalPages = 1;
        var currentPath = '';
        var currentParams = {};
        var currentSectionKey = null;
        var debounceTimer = null;
        var isLoading = false;
        var heroInterval = null;
        var railStates = {};

        var CONFIG = {
            baseUrl: 'https://api.themoviedb.org/3',
            imgSmall: 'https://image.tmdb.org/t/p/w185',
            imgMedium: 'https://image.tmdb.org/t/p/w342',
            imgLarge: 'https://image.tmdb.org/t/p/w780',
            imgOriginal: 'https://image.tmdb.org/t/p/w1280'
        };

        var SECTIONS_MAP = {
            'trending': { title: 'Trending Now', icon: '🔥', path: 'trending/all/day', params: {}, mediaType: 'all', categories: ['home'], ranked: true },
            'trending_movies': { title: 'Trending Movies', icon: '🔥', path: 'trending/movie/day', params: {}, mediaType: 'movie', categories: ['home', 'movies'], ranked: true },
            'trending_tv': { title: 'Trending TV Shows', icon: '🔥', path: 'trending/tv/day', params: {}, mediaType: 'tv', categories: ['home', 'tv'], ranked: true },
            
            'bollywood': { title: 'Bollywood Superhits', icon: '🍿', path: 'discover/movie', params: { with_original_language: 'hi', sort_by: 'popularity.desc' }, mediaType: 'movie', categories: ['home', 'movies', 'languages'] },
            'hollywood': { title: 'Hollywood Blockbusters', icon: '🎬', path: 'discover/movie', params: { with_original_language: 'en', sort_by: 'popularity.desc' }, mediaType: 'movie', categories: ['home', 'movies', 'languages'] },
            'south': { title: 'South Indian Cinema', icon: '⚡', path: 'discover/movie', params: { with_original_language: 'te|ta|kn|ml', sort_by: 'popularity.desc' }, mediaType: 'movie', categories: ['home', 'movies'] },
            'telugu': { title: 'Telugu Cinema Hits', icon: '⚡', path: 'discover/movie', params: { with_original_language: 'te', sort_by: 'popularity.desc' }, mediaType: 'movie', categories: ['home', 'languages'] },
            'tamil': { title: 'Tamil Kollywood Cinema', icon: '🐯', path: 'discover/movie', params: { with_original_language: 'ta', sort_by: 'popularity.desc' }, mediaType: 'movie', categories: ['home', 'languages'] },
            'malayalam': { title: 'Malayalam Mollywood Cinema', icon: '🌴', path: 'discover/movie', params: { with_original_language: 'ml', sort_by: 'popularity.desc' }, mediaType: 'movie', categories: ['home', 'languages'] },
            'kannada': { title: 'Kannada Sandalwood Cinema', icon: '☕', path: 'discover/movie', params: { with_original_language: 'kn', sort_by: 'popularity.desc' }, mediaType: 'movie', categories: ['home', 'languages'] },
            'gujarati': { title: 'Gujarati Cinema Superhits', icon: '🪁', path: 'discover/movie', params: { with_original_language: 'gu', sort_by: 'popularity.desc' }, mediaType: 'movie', categories: ['home', 'movies', 'languages'] },
            'spanish': { title: 'Spanish & International Cinema', icon: '🇪🇸', path: 'discover/movie', params: { with_original_language: 'es', sort_by: 'popularity.desc' }, mediaType: 'movie', categories: ['home', 'languages'] },

            'webseries': { title: 'Trending Web Series', icon: '🌟', path: 'discover/tv', params: { sort_by: 'popularity.desc' }, mediaType: 'tv', categories: ['home', 'tv'] },
            'romance': { title: 'Hindi Serials & Daily Soaps', icon: '💖', path: 'discover/tv', params: { with_original_language: 'hi', sort_by: 'popularity.desc' }, mediaType: 'tv', categories: ['home', 'tv'] },
            'devotional': { title: 'Devotional & Mythological Epics', icon: '🕉️', path: 'search/tv', params: { query: 'Mahabharat' }, mediaType: 'tv', categories: ['home', 'tv'] },
            'kdrama': { title: 'K-Drama & Korean Hits', icon: '🫰', path: 'discover/tv', params: { with_original_language: 'ko', sort_by: 'popularity.desc' }, mediaType: 'tv', categories: ['home', 'tv', 'languages'] },
            'anime': { title: 'Anime Universe', icon: '🌸', path: 'discover/tv', params: { with_genres: '16', with_original_language: 'ja', sort_by: 'popularity.desc' }, mediaType: 'tv', categories: ['home', 'tv', 'languages', 'genres'] },
            'cartoons': { title: 'Cartoons & Kids Animated Shows', icon: '🎨', path: 'discover/tv', params: { with_genres: '16,10762', without_keywords: '210024', sort_by: 'popularity.desc' }, mediaType: 'tv', categories: ['home', 'tv', 'genres'] },

            'action': { title: 'Action & Thriller Adrenaline', icon: '💥', path: 'discover/movie', params: { with_genres: '28,53', sort_by: 'popularity.desc' }, mediaType: 'movie', categories: ['home', 'movies', 'genres'] },
            'comedy': { title: 'Comedy Central & Fun', icon: '😂', path: 'discover/movie', params: { with_genres: '35', sort_by: 'popularity.desc' }, mediaType: 'movie', categories: ['home', 'movies', 'genres'] },
            'horror': { title: 'Horror & Suspense Nights', icon: '👻', path: 'discover/movie', params: { with_genres: '27,9648', sort_by: 'popularity.desc' }, mediaType: 'movie', categories: ['home', 'movies', 'genres'] },
            'scifi': { title: 'Sci-Fi & Futuristic Fantasy', icon: '🚀', path: 'discover/movie', params: { with_genres: '878,14', sort_by: 'popularity.desc' }, mediaType: 'movie', categories: ['home', 'movies', 'tv', 'genres'] },
            'romance_movies': { title: 'Romantic Stories & Drama', icon: '💖', path: 'discover/movie', params: { with_genres: '10749,18', sort_by: 'popularity.desc' }, mediaType: 'movie', categories: ['home', 'movies', 'genres'] },
            'crime': { title: 'Crime & Mystery Investigation', icon: '🕵️', path: 'discover/tv', params: { with_genres: '80,9648', sort_by: 'popularity.desc' }, mediaType: 'tv', categories: ['home', 'tv', 'genres'] },
            'adventure': { title: 'Adventure & Epic Quests', icon: '⚔️', path: 'discover/movie', params: { with_genres: '12', sort_by: 'popularity.desc' }, mediaType: 'movie', categories: ['home', 'genres'] },
            'docs': { title: 'Real Stories & Documentaries', icon: '📜', path: 'discover/movie', params: { with_genres: '99,36', sort_by: 'popularity.desc' }, mediaType: 'movie', categories: ['home', 'genres'] },

            'toprated': { title: 'Top Rated Global Masterpieces', icon: '⭐', path: 'movie/top_rated', params: {}, mediaType: 'movie', categories: ['home', 'movies'], ranked: true },
            'toprated_tv': { title: 'Top Rated Shows of All Time', icon: '⭐', path: 'tv/top_rated', params: {}, mediaType: 'tv', categories: ['home', 'tv'], ranked: true }
        };

        var chipsMap = {
            'home': [
                { id: 'all', label: '✨ All Subsections' },
                { id: 'trending', label: '🔥 Trending' },
                { id: 'trending_movies', label: '🎬 Movies' },
                { id: 'trending_tv', label: '📺 TV Shows' },
                { id: 'toprated', label: '⭐ Top Rated' },
                { id: 'bollywood', label: '🍿 Bollywood' },
                { id: 'hollywood', label: '🎬 Hollywood' },
                { id: 'south', label: '⚡ South Indian' },
                { id: 'telugu', label: '⚡ Telugu' },
                { id: 'tamil', label: '🐯 Tamil' },
                { id: 'malayalam', label: '🌴 Malayalam' },
                { id: 'kannada', label: '☕ Kannada' },
                { id: 'gujarati', label: '🪁 Gujarati' },
                { id: 'webseries', label: '🌟 Web Series' },
                { id: 'romance', label: '💖 Daily Soaps' },
                { id: 'devotional', label: '🕉️ Epics' },
                { id: 'kdrama', label: '🫰 K-Drama' },
                { id: 'anime', label: '🌸 Anime' },
                { id: 'cartoons', label: '🎨 Cartoons' },
                { id: 'action', label: '💥 Action' },
                { id: 'comedy', label: '😂 Comedy' },
                { id: 'horror', label: '👻 Horror' },
                { id: 'scifi', label: '🚀 Sci-Fi' },
                { id: 'romance_movies', label: '💖 Romance' },
                { id: 'crime', label: '🕵️ Crime' },
                { id: 'adventure', label: '⚔️ Adventure' },
                { id: 'docs', label: '📜 Docs' },
                { id: 'spanish', label: '🇪🇸 Spanish' }
            ],
            'movies': [
                { id: 'all', label: '✨ All Movies' },
                { id: 'trending_movies', label: '🔥 Trending' },
                { id: 'bollywood', label: '🍿 Bollywood' },
                { id: 'hollywood', label: '🎬 Hollywood' },
                { id: 'south', label: '⚡ South Indian' },
                { id: 'gujarati', label: '🪁 Gujarati' },
                { id: 'action', label: '💥 Action' },
                { id: 'comedy', label: '😂 Comedy' },
                { id: 'horror', label: '👻 Horror' },
                { id: 'scifi', label: '🚀 Sci-Fi' },
                { id: 'romance_movies', label: '💖 Romance' },
                { id: 'toprated', label: '⭐ Top Rated' }
            ],
            'tv': [
                { id: 'all', label: '✨ All TV Shows' },
                { id: 'trending_tv', label: '🔥 Trending' },
                { id: 'webseries', label: '🌟 Web Series' },
                { id: 'romance', label: '💖 Hindi Serials' },
                { id: 'kdrama', label: '🫰 K-Drama' },
                { id: 'anime', label: '🌸 Anime' },
                { id: 'cartoons', label: '🎨 Cartoons' },
                { id: 'crime', label: '🕵️ Crime' },
                { id: 'scifi', label: '🚀 Sci-Fi' },
                { id: 'devotional', label: '🕉️ Epics' },
                { id: 'toprated_tv', label: '⭐ Top Rated' }
            ],
            'languages': [
                { id: 'all', label: '✨ All Languages' },
                { id: 'bollywood', label: '🇮🇳 Hindi' },
                { id: 'hollywood', label: '🇺🇸 English' },
                { id: 'telugu', label: '⚡ Telugu' },
                { id: 'tamil', label: '🐯 Tamil' },
                { id: 'malayalam', label: '🌴 Malayalam' },
                { id: 'kannada', label: '☕ Kannada' },
                { id: 'gujarati', label: '🪁 Gujarati' },
                { id: 'kdrama', label: '🇰🇷 Korean' },
                { id: 'anime', label: '🇯🇵 Japanese' },
                { id: 'spanish', label: '🇪🇸 Spanish' }
            ],
            'genres': [
                { id: 'all', label: '✨ All Genres' },
                { id: 'action', label: '💥 Action' },
                { id: 'comedy', label: '😂 Comedy' },
                { id: 'horror', label: '👻 Horror' },
                { id: 'scifi', label: '🚀 Sci-Fi' },
                { id: 'romance_movies', label: '💖 Romance' },
                { id: 'anime', label: '🌸 Animation' },
                { id: 'cartoons', label: '🎨 Cartoons' },
                { id: 'crime', label: '🕵️ Crime & Mystery' },
                { id: 'adventure', label: '⚔️ Adventure' },
                { id: 'docs', label: '📜 Documentaries' }
            ]
        };

        var activeSubsectionChip = 'all';

        function switchHotstarTab(tabKey) {
            activeHotstarTab = tabKey;
            activeSubsectionChip = 'all';

            var tabs = ['home', 'movies', 'tv', 'languages', 'genres'];
            tabs.forEach(function(t) {
                var btn = document.getElementById('tab-' + t);
                if (btn) {
                    if (t === tabKey) {
                        btn.className = 'px-4 py-1.5 rounded-full text-xs font-extrabold bg-brandPink text-black transition-all shadow-md';
                    } else {
                        btn.className = 'px-4 py-1.5 rounded-full text-xs font-semibold text-gray-300 hover:bg-white/10 transition-all';
                    }
                }
            });

            if (isTheaterMode) toggleTheaterMode();
            if (detailsView) detailsView.style.display = 'none';
            if (homeView) {
                homeView.style.display = 'block';
                homeView.className = 'transition-opacity duration-300 opacity-100';
            }

            var gridView = document.getElementById('grid-view-container');
            if (gridView) gridView.style.display = 'none';

            var shelves = document.getElementById('curated-shelves-container');
            if (shelves) shelves.style.display = 'flex';

            var pillsBar = document.getElementById('category-pills-bar');
            if (pillsBar) pillsBar.style.display = 'flex';

            var tabsBar = document.getElementById('hotstar-main-tabs');
            if (tabsBar) tabsBar.style.display = 'flex';

            var hero = document.getElementById('hero-slider-container');
            if (hero) hero.style.display = (tabKey === 'home' || tabKey === 'movies' || tabKey === 'tv') ? 'block' : 'none';

            renderSubsectionChips(tabKey, 'all');
            loadCuratedRails();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function renderSubsectionChips(tabKey, activeChipId) {
            activeChipId = activeChipId || activeSubsectionChip || 'all';
            activeSubsectionChip = activeChipId;

            var bar = document.getElementById('category-pills-bar');
            if (!bar) return;
            var html = '';

            var chips = chipsMap[tabKey] || chipsMap['home'];
            chips.forEach(function(chip) {
                var isActive = (chip.id === activeChipId);
                var activeCls = isActive 
                    ? 'bg-brandPink text-black font-extrabold shadow-lg scale-105' 
                    : 'bg-[#141418] hover:bg-white/10 text-gray-300 border border-white/5';
                html += `<button id="chip-${chip.id}" onclick="onSubsectionChipClick('${tabKey}', '${chip.id}')" class="flex-shrink-0 px-3.5 py-1.5 rounded-full text-xs font-semibold ${activeCls} transition-all duration-200 cursor-pointer">${chip.label}</button>`;
            });

            bar.innerHTML = html;
        }

        function onSubsectionChipClick(tabKey, chipId) {
            renderSubsectionChips(tabKey, chipId);

            if (detailsView && detailsView.style.display !== 'none') {
                goBackUI();
            }

            var gridContainer = document.getElementById('grid-view-container');
            var isGridActive = gridContainer && gridContainer.style.display !== 'none';

            if (chipId === 'all') {
                if (isGridActive) {
                    exitSectionGrid();
                } else {
                    var shelvesContainer = document.getElementById('curated-shelves-container');
                    if (shelvesContainer) {
                        shelvesContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                }
                return;
            }

            if (isGridActive) {
                if (SECTIONS_MAP[chipId]) {
                    exploreSection(chipId);
                }
                return;
            }

            scrollToRail(chipId);
        }

        function buildCuratedShelvesUI() {
            var container = document.getElementById('curated-shelves-container');
            if (!container) return;
            var html = '';

            for (var key in SECTIONS_MAP) {
                if (!SECTIONS_MAP.hasOwnProperty(key)) continue;
                var sec = SECTIONS_MAP[key];
                
                var cats = sec.categories || [sec.category] || [];
                if (activeHotstarTab !== 'home' && !cats.includes(activeHotstarTab)) {
                    continue;
                }

                railStates[key] = { page: 1 };

                html += `
                <div class="rail-section transition-all duration-500 rounded-3xl" id="rail-${key}">
                    <div class="flex items-center justify-between gap-4 mb-3">
                        <div class="flex items-center gap-2.5">
                            <span class="text-xl">${sec.icon}</span>
                            <h3 class="text-lg md:text-xl font-extrabold tracking-tight text-white">${sec.title}</h3>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="flex items-center gap-1 bg-white/5 border border-white/5 rounded-full p-0.5">
                                <button onclick="changeRailPage('${key}', -1)" id="rail-prev-${key}" class="w-7 h-7 rounded-full flex items-center justify-center text-gray-400 hover:text-white hover:bg-white/10 transition-all" title="Previous 20">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="15 18 9 12 15 6"></polyline></svg>
                                </button>
                                <span id="rail-page-indicator-${key}" class="text-[10px] font-bold text-brandYellow px-2">Pg 1 (20)</span>
                                <button onclick="changeRailPage('${key}', 1)" id="rail-next-${key}" class="w-7 h-7 rounded-full flex items-center justify-center text-gray-400 hover:text-white hover:bg-white/10 transition-all" title="Next 20">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </button>
                            </div>
                            <button onclick="exploreSection('${key}')" class="px-3.5 py-1.5 rounded-full text-xs font-bold bg-white/10 hover:bg-brandPink hover:text-black border border-white/10 transition-all active:scale-95 flex items-center gap-1 cursor-pointer">
                                <span>Explore All</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </button>
                        </div>
                    </div>
                    <div id="rail-scroller-${key}" class="h-scroller">
                        ${renderRailSkeletons()}
                    </div>
                </div>`;
            }
            container.innerHTML = html;
        }

        function renderRailSkeletons() {
            var s = '';
            for (var i = 0; i < 7; i++) {
                s += `<div class="flex-shrink-0 w-36 h-56 bg-cinemaCard rounded-2xl shimmer-skele border border-white/5"></div>`;
            }
            return s;
        }

        function loadRailSection(key, page) {
            var sec = SECTIONS_MAP[key];
            if (!sec) return;
            var scroller = document.getElementById('rail-scroller-' + key);
            var indicator = document.getElementById('rail-page-indicator-' + key);
            if (!scroller) return;

            var reqData = Object.assign({}, sec.params, { page: page });

            fetchData(sec.path, reqData, function(data) {
                if (!data || !data.results || data.results.length === 0) {
                    scroller.innerHTML = `<div class="text-xs text-gray-500 py-6">No titles currently available.</div>`;
                    return;
                }

                var items = data.results.slice(0, 20);
                var html = '';

                for (var i = 0; i < items.length; i++) {
                    var item = items[i];
                    var title = item.title || item.name;
                    var mediaType = item.media_type || sec.mediaType || (item.first_air_date ? 'tv' : 'movie');
                    var placeholderUrl = getSVGPlaceholder(title);
                    var poster = item.poster_path ? CONFIG.imgSmall + item.poster_path : placeholderUrl;
                    var rating = item.vote_average ? item.vote_average.toFixed(1) : 'N/A';

                    var rankBadge = (sec.ranked && page === 1 && i < 10) 
                        ? `<div class="absolute -bottom-2 -left-1 text-4xl font-black italic text-brandYellow drop-shadow-[0_4px_8px_rgba(0,0,0,0.9)] z-20 pointer-events-none select-none">#${i + 1}</div>` 
                        : '';

                    html += `
                    <div class="relative flex-shrink-0 w-36 bg-cinemaCard rounded-2xl overflow-hidden group border border-white/5 shadow-lg glow-hover cursor-pointer transition-all duration-300 flex flex-col"
                         onclick="handleRoute(event, ${item.id}, '${mediaType}')"
                         onmouseenter="prefetchDetails(${item.id}, '${mediaType}')"
                         ontouchstart="prefetchDetails(${item.id}, '${mediaType}')">
                        <div class="w-full h-52 overflow-hidden movie-img-wrap bg-[#0c0c0f] relative">
                            <img src="${poster}" alt="${escapeHtml(title)}" class="w-full h-full object-cover" loading="lazy" decoding="async" onerror="this.onerror=null; this.src='${placeholderUrl}';">
                            <div class="absolute top-2 left-2 bg-black/80 text-white border-l-2 border-l-brandYellow px-1.5 py-0.5 rounded text-[9px] font-extrabold tracking-wider z-20 shadow">${rating} ★</div>
                            ${rankBadge}
                        </div>
                        <div class="p-2.5 flex-grow flex items-center bg-gradient-to-t from-black/90 to-transparent">
                            <h4 class="text-xs font-semibold text-gray-200 group-hover:text-brandPink line-clamp-2 transition-colors">${escapeHtml(title)}</h4>
                        </div>
                    </div>`;
                }

                scroller.innerHTML = html;
                if (indicator) indicator.textContent = 'Pg ' + page + ' (20)';

                if ((key === 'trending' || key === 'trending_movies' || key === 'trending_tv') && page === 1 && items.length > 0) {
                    updateHeroSlider(items.slice(0, 5));
                }

                dismissPreloader();
            }, function() {
                scroller.innerHTML = `<div class="text-xs text-brandYellow py-6">Could not load this rail. Tap to retry.</div>`;
                dismissPreloader();
            });
        }

        function changeRailPage(key, delta) {
            var st = railStates[key] || { page: 1 };
            var newPage = st.page + delta;
            if (newPage < 1) return;
            st.page = newPage;
            railStates[key] = st;
            loadRailSection(key, newPage);
        }

        function loadCuratedRails() {
            buildCuratedShelvesUI();
            for (var key in SECTIONS_MAP) {
                if (SECTIONS_MAP.hasOwnProperty(key)) {
                    var sec = SECTIONS_MAP[key];
                    var cats = sec.categories || [sec.category] || [];
                    if (activeHotstarTab === 'home' || cats.includes(activeHotstarTab)) {
                        loadRailSection(key, 1);
                    }
                }
            }
        }

        function scrollToRail(key) {
            var gridView = document.getElementById('grid-view-container');
            if (gridView && gridView.style.display !== 'none') {
                exitSectionGrid();
            }

            setTimeout(function() {
                var el = document.getElementById('rail-' + key);
                if (el) {
                    el.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    el.classList.add('ring-2', 'ring-brandPink', 'shadow-2xl', 'p-2');
                    setTimeout(function() {
                        el.classList.remove('ring-2', 'ring-brandPink', 'shadow-2xl', 'p-2');
                    }, 2200);
                }
            }, 120);
        }

        function exploreSection(key) {
            var sec = SECTIONS_MAP[key];
            if (!sec) return;
            currentSectionKey = key;
            currentPage = 1;
            currentPath = sec.path;
            currentParams = Object.assign({}, sec.params);

            if (detailsView) detailsView.style.display = 'none';
            if (homeView) homeView.style.display = 'block';

            document.getElementById('hero-slider-container').style.display = 'none';
            document.getElementById('continue-watching-section').style.display = 'none';
            document.getElementById('watchlist-section').style.display = 'none';
            document.getElementById('curated-shelves-container').style.display = 'none';

            document.getElementById('category-pills-bar').style.display = 'flex';
            document.getElementById('hotstar-main-tabs').style.display = 'flex';

            document.getElementById('grid-view-container').style.display = 'block';
            document.getElementById('home-title').innerHTML = `${sec.icon} ${sec.title}`;

            renderSubsectionChips(activeHotstarTab, key);

            safePushState({ view: 'section', key: key }, '', `?section=${key}`);
            window.scrollTo({ top: 0, behavior: 'smooth' });
            getMovies(currentPath, currentParams, false);
        }

        function exitSectionGrid() {
            currentSectionKey = null;
            document.getElementById('grid-view-container').style.display = 'none';
            document.getElementById('curated-shelves-container').style.display = 'flex';
            document.getElementById('category-pills-bar').style.display = 'flex';
            document.getElementById('hotstar-main-tabs').style.display = 'flex';
            
            var hero = document.getElementById('hero-slider-container');
            if (hero) hero.style.display = (activeHotstarTab === 'home' || activeHotstarTab === 'movies' || activeHotstarTab === 'tv') ? 'block' : 'none';
            
            renderSubsectionChips(activeHotstarTab, 'all');
            loadContinueWatching();
            loadWatchlist();
            safePushState({ view: 'home' }, '', window.location.pathname);
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function renderPagination(page, total) {
            var container = document.getElementById('pagination-controls');
            var info = document.getElementById('pagination-info');
            if (!container) return;

            page = parseInt(page) || 1;
            total = parseInt(total) || 1;
            totalPages = total;

            if (info) info.textContent = `Showing 20 items • Page ${page} of ${Math.min(total, 500)}`;

            var html = '';
            var prevDisabled = page <= 1 ? 'opacity-40 pointer-events-none' : '';
            html += `<button onclick="changePage(${page - 1})" class="px-3.5 py-2 rounded-xl text-xs font-bold bg-white/5 border border-white/5 hover:bg-white/10 transition-all ${prevDisabled}">Prev</button>`;

            var maxVisible = 5;
            var start = Math.max(1, page - 2);
            var end = Math.min(total, start + maxVisible - 1);
            if (end - start < maxVisible - 1) {
                start = Math.max(1, end - maxVisible + 1);
            }

            if (start > 1) {
                html += `<button onclick="changePage(1)" class="w-9 h-9 rounded-xl text-xs font-bold bg-white/5 border border-white/5 hover:bg-white/10 transition-all">1</button>`;
                if (start > 2) html += `<span class="px-1 text-gray-500 text-xs">...</span>`;
            }

            for (var p = start; p <= end; p++) {
                var activeCls = (p === page) ? 'bg-brandPink text-black font-extrabold shadow-lg' : 'bg-white/5 text-gray-300 hover:bg-white/10 border border-white/5';
                html += `<button onclick="changePage(${p})" class="w-9 h-9 rounded-xl text-xs font-bold transition-all ${activeCls}">${p}</button>`;
            }

            if (end < total) {
                if (end < total - 1) html += `<span class="px-1 text-gray-500 text-xs">...</span>`;
                html += `<button onclick="changePage(${total})" class="w-9 h-9 rounded-xl text-xs font-bold bg-white/5 border border-white/5 hover:bg-white/10 transition-all">${total}</button>`;
            }

            var nextDisabled = page >= total ? 'opacity-40 pointer-events-none' : '';
            html += `<button onclick="changePage(${page + 1})" class="px-3.5 py-2 rounded-xl text-xs font-bold bg-white/5 border border-white/5 hover:bg-white/10 transition-all ${nextDisabled}">Next</button>`;

            container.innerHTML = html;
        }

        function changePage(newPage) {
            if (newPage < 1 || (totalPages && newPage > totalPages)) return;
            currentPage = newPage;
            getMovies(currentPath, currentParams, false);
            var target = document.getElementById('grid-view-container');
            if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }

        function getMovies(path, params, append) {
            if (isLoading) return;
            isLoading = true;
            if (loader) loader.style.display = 'block';

            currentPath = path;
            currentParams = Object.assign({}, params, { page: currentPage });

            fetchData(path, currentParams, function(data) {
                if (loader) loader.style.display = 'none';
                isLoading = false;

                if (!data || !data.results) {
                    main.innerHTML = `<div class="col-span-full text-center py-16 text-gray-400">No results found.</div>`;
                    return;
                }

                totalPages = Math.min(data.total_pages || 1, 500);

                var items = [];
                for (var i = 0; i < data.results.length; i++) {
                    if (data.results[i].media_type !== 'person') items.push(data.results[i]);
                }

                items = items.slice(0, 20);

                main.innerHTML = '';
                displayGrid(items);
                renderPagination(currentPage, totalPages);
                dismissPreloader();
            }, function(err) {
                if (loader) loader.style.display = 'none';
                isLoading = false;
                main.innerHTML = `<div class="col-span-full text-center py-16 text-brandYellow">Failed to load content. (${err})</div>`;
                dismissPreloader();
            });
        }

        function displayGrid(items) {
            var fragment = document.createDocumentFragment();
            
            for(var i=0; i<items.length; i++) {
                (function(item) {
                    var title = item.title || item.name;
                    var rating = item.vote_average ? item.vote_average.toFixed(1) : 'N/A';
                    var mediaType = item.media_type || (item.first_air_date ? 'tv' : 'movie');

                    var placeholderUrl = getSVGPlaceholder(title);
                    var poster = item.poster_path ? CONFIG.imgSmall + item.poster_path : placeholderUrl;

                    var el = document.createElement('a');
                    el.href = "?id=" + item.id + "&type=" + mediaType;
                    el.className = 'movie-card group relative bg-cinemaCard rounded-2xl overflow-hidden shadow-lg hover:shadow-black/50 hover:scale-[1.03] hover:border-white/10 active:scale-95 border border-white/5 transition-all duration-300 flex flex-col h-full';
                    el.onclick = function(e) { handleRoute(e, item.id, mediaType); };
                    
                    el.onmouseenter = function() {
                        clearTimeout(hoverPrefetchTimer);
                        hoverPrefetchTimer = setTimeout(function() {
                            prefetchDetails(item.id, mediaType);
                        }, 80);
                    };
                    el.ontouchstart = function() {
                        prefetchDetails(item.id, mediaType);
                    };

                    var badge = `<div class="absolute top-3 left-3 bg-black/80 text-white border-l-2 border-l-brandYellow px-2 py-0.5 rounded text-[10px] font-extrabold tracking-wider z-20 shadow-md">${rating} ★</div>`;
                    
                    el.innerHTML = `
                    <div class="relative w-full aspect-[2/3] overflow-hidden movie-img-wrap bg-[#0c0c0f]">
                        <img src="${poster}" alt="${escapeHtml(title)}" class="w-full h-full object-cover" loading="lazy" decoding="async" onerror="this.onerror=null; this.src='${placeholderUrl}';">
                        ${badge}
                    </div>
                    <div class="p-4 flex-grow flex items-center bg-gradient-to-t from-black/85 via-black/35 to-transparent">
                        <h3 class="text-xs md:text-sm font-semibold tracking-wide text-gray-100 group-hover:text-brandPink line-clamp-2 transition-colors">${escapeHtml(title)}</h3>
                    </div>`;
                    fragment.appendChild(el);
                })(items[i]);
            }
            main.appendChild(fragment);
        }

        function setHeroSlide(index) {
            var allSlides = document.querySelectorAll('.hero-slide');
            var dots = document.querySelectorAll('.slider-dot');
            if (allSlides.length === 0) return;
            
            allSlides.forEach(function(slide, idx) {
                slide.className = 'hero-slide';
                dots[idx].className = 'slider-dot w-2 h-2 rounded-full bg-white/40 transition-all cursor-pointer hover:bg-brandPink';
            });
            
            allSlides[index].className = 'hero-slide active';
            dots[index].className = 'slider-dot w-6 h-2 rounded-full bg-brandPink transition-all cursor-pointer';
        }

        function updateHeroSlider(results) {
            if (heroInterval) clearInterval(heroInterval);
            
            var html = "";
            var indicatorsHtml = "";
            for(var i=0; i<results.length && i<5; i++) {
                var item = results[i];
                var title = item.title || item.name;
                var desc = item.overview;
                var bg = item.backdrop_path ? CONFIG.imgLarge + item.backdrop_path : '';
                var release = item.release_date || item.first_air_date;
                var yr = release ? release.split('-')[0] : '';
                var mType = item.media_type === 'tv' ? 'TV Series' : 'Movie';
                var score = item.vote_average ? (item.vote_average * 10).toFixed(0) : '0';
                
                var cls = i === 0 ? 'active' : '';
                html += `
                <div class="hero-slide ${cls}" style="background-image: url('${bg}')">
                    <div class="absolute bottom-12 md:bottom-20 left-1/2 -translate-x-1/2 max-w-[1800px] w-[92%] z-20 flex flex-col items-start gap-3">
                        <h1 class="text-3xl md:text-5xl lg:text-6xl font-black text-white tracking-tight drop-shadow-md">${escapeHtml(title)}</h1>
                        <div class="flex items-center gap-3 text-xs md:text-sm text-gray-200 font-bold drop-shadow">
                            <span class="bg-brandYellow text-black px-2.5 py-0.5 rounded-md font-extrabold text-xs">Match: ${score}%</span>
                            <span>${yr}</span>
                            <span>${mType}</span>
                        </div>
                        <p class="text-sm md:text-base text-gray-300 max-w-xl line-clamp-3 leading-relaxed drop-shadow">${escapeHtml(desc)}</p>
                        <a href="?id=${item.id}&type=${item.media_type}" class="mt-2 flex items-center gap-2 px-6 py-3 rounded-full text-sm font-bold bg-brandPink text-black hover:bg-white hover:scale-105 transition-all duration-300 shadow-lg shadow-black/20" onclick="handleRoute(event, ${item.id}, '${item.media_type}')">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            Watch Now
                        </a>
                    </div>
                </div>`;
                
                var dotCls = i === 0 ? 'w-6 bg-brandPink' : 'w-2 bg-white/40';
                indicatorsHtml += `<button onclick="setHeroSlide(${i})" class="slider-dot ${dotCls} h-2 rounded-full transition-all cursor-pointer hover:bg-brandPink" aria-label="Go to slide ${i+1}"></button>`;
            }
            var hSlider = document.getElementById('hero-slider');
            var hContainer = document.getElementById('hero-slider-container');
            var hIndicators = document.getElementById('hero-indicators');
            if(hSlider) {
                hSlider.innerHTML = html;
                hContainer.style.display = 'block';
            }
            if(hIndicators) {
                hIndicators.innerHTML = indicatorsHtml;
            }
            
            var currentSlide = 0;
            var allSlides = document.querySelectorAll('.hero-slide');
            
            if (allSlides && allSlides.length > 1) {
                heroInterval = setInterval(function() { 
                    if (allSlides.length > 0) { 
                        setHeroSlide((currentSlide + 1) % allSlides.length);
                        currentSlide = (currentSlide + 1) % allSlides.length; 
                    } 
                }, 6000); 
            }
        }

        function getStreamUrl(id, s, e, type) {
            if (currentServer === 'ollyembed') {
                return type === 'movie'
                    ? "https://ollyembed.pages.dev/movie/" + id
                    : "https://ollyembed.pages.dev/tv/" + id + "/" + s + "/" + e;
            }
            if (currentServer === 'vidbolt') {
                return type === 'movie' 
                    ? "https://vidbolt.xyz/movie/" + id + "?theme=e50914&autoPlay=true&audio=hindi" 
                    : "https://vidbolt.xyz/tv/" + id + "/" + s + "/" + e + "?theme=e50914&autoPlay=true&audio=hindi";
            }
            if (currentServer === 'filmu') {
                return type === 'movie'
                    ? "https://embed.filmu.in/movie/" + id
                    : "https://embed.filmu.in/tv/" + id + "/" + s + "/" + e;
            }
            if (currentServer === 'embedwave') {
                return type === 'movie'
                    ? "https://embedwave.cc/embed/movie/" + id
                    : "https://embedwave.cc/embed/tv/" + id + "/" + s + "/" + e;
            }
            if (currentServer === 'vidrift') {
                return type === 'movie'
                    ? "https://embed.vidrift.net/embed/movie/" + id
                    : "https://embed.vidrift.net/embed/tv/" + id + "/" + s + "/" + e;
            }
            if (currentServer === 'vidzee') {
                return type === 'movie'
                    ? "https://player.vidzee.wtf/embed/movie/" + id
                    : "https://player.vidzee.wtf/embed/tv/" + id + "/" + s + "/" + e;
            }
            if (currentServer === 'vidlove') {
                return type === 'movie'
                    ? "https://player.vidlove.cc/embed/movie/" + id + "?autoplay=true&nextbutton=true&download=true&primarycolor=ff4d6d&secondarycolor=c49de8"
                    : "https://player.vidlove.cc/embed/tv/" + id + "/" + s + "/" + e + "?autoplay=true&nextbutton=true&download=true&primarycolor=ff4d6d&secondarycolor=c49de8";
            }
            if (currentServer === 'videm') {
                return type === 'movie'
                    ? "https://videm.xyz/embed/movie/" + id
                    : "https://videm.xyz/embed/tv/" + id + "/" + s + "/" + e;
            }
            if (currentServer === 'cinesrc') {
                return type === 'movie'
                    ? "https://cinesrc.st/embed/movie/" + id
                    : "https://cinesrc.st/embed/tv/" + id + "?s=" + s + "&e=" + e;
            }
            if (currentServer === 'primesrc') {
                return type === 'movie'
                    ? "https://primesrc.me/embed/movie?tmdb=" + id
                    : "https://primesrc.me/embed/tv?tmdb=" + id + "&season=" + s + "&episode=" + e;
            }
            if (currentServer === 'hd1') {
                return type === 'movie'
                    ? "https://www.2embed.skin/embed/" + id
                    : "https://www.2embed.skin/embedtv/" + id + "&s=" + s + "&e=" + e;
            }
            if (currentServer === 'hd2') {
                return type === 'movie'
                    ? "https://embedmaster.link/movie/" + id
                    : "https://embedmaster.link/tv/" + id + "/" + s + "/" + e;
            }
            if (currentServer === 'vidfast') {
                return type === 'movie'
                    ? "https://vidfast.pro/movie/" + id + "?autoPlay=true"
                    : "https://vidfast.pro/tv/" + id + "/" + s + "/" + e + "?autoPlay=true";
            }
            if (currentServer === 'vidnest') {
                return type === 'movie'
                    ? "https://vidnest.fun/movie/" + id
                    : "https://vidnest.fun/tv/" + id + "/" + s + "/" + e;
            }
            if (currentServer === 'vidapi') {
                return type === 'movie'
                    ? "https://vaplayer.ru/embed/movie/" + id
                    : "https://vaplayer.ru/embed/tv/" + id + "/" + s + "/" + e;
            }
            if (currentServer === 'videasy') {
                return type === 'movie'
                    ? "https://player.videasy.net/movie/" + id
                    : "https://player.videasy.net/tv/" + id + "/" + s + "/" + e;
            }
            if (currentServer === 'vidphantom') {
                return type === 'movie'
                    ? "https://vidphantom.com/movie/" + id
                    : "https://vidphantom.com/tv/" + id + "/" + s + "/" + e;
            }
            return type === 'movie'
                ? "https://vidbolt.xyz/movie/" + id + "?theme=e50914&autoPlay=true&audio=hindi"
                : "https://vidbolt.xyz/tv/" + id + "/" + s + "/" + e + "?theme=e50914&autoPlay=true&audio=hindi";
        }

        function openDetails(id, type, pushHistory) {
            pushHistory = pushHistory === undefined ? true : pushHistory;
            if (suggestionsBox) suggestionsBox.className = 'hidden';
            if (search) search.value = '';
            
            if (homeView) homeView.style.display = 'none';
            if (detailsView) detailsView.style.display = 'block';

            document.getElementById('category-pills-bar').style.display = 'none';
            document.getElementById('hotstar-main-tabs').style.display = 'none';
            window.scrollTo(0,0);
            
            currentPlaying.tmdbId = id;
            currentPlaying.season = 1;
            currentPlaying.episode = 1;
            currentPlaying.type = type;
            currentPlaying.title = '';
            currentPlaying.year = '';
            currentPlaying.imdbId = '';
            
            currentServer = 'vidbolt';
            
            var historyStore = getHistory();
            if (historyStore[id] && historyStore[id].type === 'tv') { 
                currentPlaying.season = historyStore[id].lastSeason || 1; 
                currentPlaying.episode = historyStore[id].lastEpisode || 1; 
            }

            if (playerDynamicCard) {
                playerDynamicCard.innerHTML = `<div class="w-full aspect-video bg-[#0f0f12] rounded-2xl animate-pulse border border-white/5 flex items-center justify-center text-gray-500 text-sm">Loading Vidbolt Player...</div>`;
            }

            var path = type + '/' + id;
            var params = { append_to_response: 'credits,videos,recommendations,similar,external_ids' };

            fetchData(path, params, function(data) {
                if (data.external_ids && data.external_ids.imdb_id) {
                    currentPlaying.imdbId = data.external_ids.imdb_id;
                }

                if (type === 'movie' && data.belongs_to_collection) { 
                    fetchData('collection/' + data.belongs_to_collection.id, {}, function(collection) {
                        renderDetails(data, type, collection);
                    }, function() {
                        renderDetails(data, type, null);
                    });
                } else {
                    renderDetails(data, type, null);
                }
            }, function() {
                if (playerDynamicCard) playerDynamicCard.innerHTML = `<div class="text-center py-12"><h3 class="text-brandYellow text-lg font-bold mb-2">Failed to retrieve stream metadata</h3><button onclick="openDetails(${id}, '${type}')" class="px-6 py-2.5 rounded-full bg-brandPink text-black text-xs font-bold">Retry Stream</button></div>`;
            });
        }

        function renderDetails(data, type, collection) {
            var title = data.title || data.name;
            var date = data.release_date || data.first_air_date;
            var year = date ? date.split('-')[0] : '';
            currentPlaying.title = title; 
            currentPlaying.year = year; 
            
            var runtime = data.runtime || (data.episode_run_time && data.episode_run_time.length > 0 ? data.episode_run_time[0] : 0);
            var placeholderUrl = getSVGPlaceholder(title);
            var posterUrl = data.poster_path ? CONFIG.imgMedium + data.poster_path : placeholderUrl;
            var backdrop = data.backdrop_path ? CONFIG.imgLarge + data.backdrop_path : '';
            if (backdrop && detailsBackdrop) detailsBackdrop.style.backgroundImage = "url('" + backdrop + "')";

            function generateServerButtons(mediaId, mediaType) {
                var cdnServers = ['vidbolt', 'filmu', 'ollyembed', 'embedwave', 'vidrift', 'vidzee', 'vidlove', 'videm', 'cinesrc', 'primesrc'];
                var hdServers = ['hd2', 'hd1', 'vidfast', 'vidnest'];
                var alternativeServers = ['vidapi', 'videasy', 'vidphantom'];

                var serverNames = {
                    'vidbolt': 'Vidbolt',
                    'filmu': 'Filmu HD',
                    'ollyembed': 'OllyEmbed',
                    'embedwave': 'Embedwave',
                    'vidrift': 'Vidrift',
                    'vidzee': 'VidZee HD',
                    'vidlove': 'VidLove',
                    'videm': 'Videm',
                    'cinesrc': 'Cinesrc',
                    'primesrc': 'Primesrc',
                    'hd1': 'HD Node-1',
                    'hd2': 'HD Node-2',
                    'vidfast': 'VidFast',
                    'vidnest': 'VidNest',
                    'vidapi': 'VidApi',
                    'videasy': 'VidEasy',
                    'vidphantom': 'VidPhantom'
                };

                var html = `<div class="flex flex-col gap-3.5 w-full">`;
                
                html += `<div class="flex flex-col gap-1.5">` +
                            `<span class="text-[10px] uppercase font-extrabold tracking-wider text-accentBlue self-center md:self-start">Direct CDN Clusters (Instant Play)</span>` +
                            `<div class="flex flex-wrap items-center justify-center md:justify-start gap-2">`;
                for(var i=0; i<cdnServers.length; i++) {
                    var srv = cdnServers[i];
                    var activeClass = (srv === currentServer) ? " bg-brandPink text-black shadow-lg font-extrabold" : " bg-[#121216] hover:bg-white/10 text-white border border-white/5";
                    var name = serverNames[srv] || srv;
                    html += `<button class="px-3.5 py-2 rounded-full text-xs font-bold transition-all duration-200 active:scale-95 ${activeClass}" onclick="changeServer('${mediaId}', '${srv}', '${mediaType}', this)">${name}</button>`;
                }
                html += `</div></div>`;

                html += `<div class="flex flex-col gap-1.5">` +
                            `<span class="text-[10px] uppercase font-extrabold tracking-wider text-brandYellow self-center md:self-start">High Speed HD Nodes (Multiple Subtitles)</span>` +
                            `<div class="flex flex-wrap items-center justify-center md:justify-start gap-2">`;
                for(var j=0; j<hdServers.length; j++) {
                    var srv2 = hdServers[j];
                    var activeClass2 = (srv2 === currentServer) ? " bg-brandPink text-black shadow-lg font-extrabold" : " bg-[#121216] hover:bg-white/10 text-white border border-white/5";
                    var name2 = serverNames[srv2] || srv2;
                    html += `<button class="px-3.5 py-2 rounded-full text-xs font-bold transition-all duration-200 active:scale-95 ${activeClass2}" onclick="changeServer('${mediaId}', '${srv2}', '${mediaType}', this)">${name2}</button>`;
                }
                html += `</div></div>`;

                html += `<div class="flex flex-col gap-1.5">` +
                            `<span class="text-[10px] uppercase font-extrabold tracking-wider text-brandPink self-center md:self-start">Alternative Mirror Gateways</span>` +
                            `<div class="flex flex-wrap items-center justify-center md:justify-start gap-2">`;
                for(var k=0; k<alternativeServers.length; k++) {
                    var srv3 = alternativeServers[k];
                    var activeClass3 = (srv3 === currentServer) ? " bg-brandPink text-black shadow-lg font-extrabold" : " bg-[#121216] hover:bg-white/10 text-white border border-white/5";
                    var name3 = serverNames[srv3] || srv3;
                    html += `<button class="px-3 py-1.5 rounded-full text-[11px] font-semibold transition-all duration-200 active:scale-95 ${activeClass3}" onclick="changeServer('${mediaId}', '${srv3}', '${mediaType}', this)">${name3}</button>`;
                }
                html += `</div></div></div>`;
                return html;
            }

            var actionControls = 
                `<div class="flex flex-col md:flex-row items-center gap-4 justify-between bg-[#141418] border border-white/5 rounded-2xl p-4 md:p-6 mt-6">` +
                    `<div class="flex flex-col gap-1 text-center md:text-left">` +
                        `<span class="text-xs font-semibold text-brandPink">Active Cluster Node</span>` +
                        `<h4 class="text-sm font-bold text-white leading-tight">Switch mirrors instantly if buffering or failing</h4>` +
                    `</div>` +
                    `<div class="flex flex-wrap items-center justify-center gap-2.5">` +
                        `<button class="flex items-center gap-1.5 px-4 py-2 rounded-full text-xs font-bold bg-white/5 hover:bg-white/10 text-white transition-all shadow" onclick="reloadPlayerFrame()"><svg class="w-3.5 h-3.5 text-brandPink" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"/></svg> Refresh Player</button>` +
                        `<button class="flex items-center gap-1.5 px-4 py-2 rounded-full text-xs font-bold bg-brandYellow hover:scale-105 active:scale-95 text-black transition-all shadow-lg" onclick="toggleFullScreen()"><svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"/></svg> Full Screen</button>` +
                        `<button class="flex items-center gap-1.5 px-4 py-2 rounded-full text-xs font-bold bg-red-600 hover:scale-105 active:scale-95 text-white transition-all shadow-lg" onclick="openInNewTab()"><svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3"/></svg> Direct Link Bypass</button>` +
                    `</div>` +
                `</div>`;

            var controlBarHtml = '';
            if (type === 'tv' && data.seasons) {
                var sortedSeasons = [];
                for(var sn=0; sn<data.seasons.length; sn++) { if(data.seasons[sn].season_number > 0) sortedSeasons.push(data.seasons[sn]); }
                
                var optionsHtml = "";
                for(var o=0; o<sortedSeasons.length; o++) {
                    optionsHtml += "<option class='bg-black' value='" + sortedSeasons[o].season_number + "'>Season " + sortedSeasons[o].season_number + "</option>";
                }

                controlBarHtml = 
                "<div class='p-5 bg-cinemaCard border-t border-white/5 rounded-b-2xl'>" +
                    "<div class='w-full'>" + generateServerButtons(data.id, 'tv') + actionControls + "</div>" +
                    "<div class='flex flex-col sm:flex-row items-center gap-3 mt-5 w-full'>" +
                        "<select id='season-select' class='w-full sm:w-auto flex-shrink-0 bg-white/5 border border-white/5 px-4 py-2.5 rounded-xl text-xs font-bold outline-none cursor-pointer' onchange='handleSeasonChange(\"" + data.id + "\", this.value)'>" + optionsHtml + "</select>" +
                        "<div class='flex items-center gap-2 w-full'>" +
                            "<button class='w-11 h-11 flex-shrink-0 flex items-center justify-center rounded-xl bg-white/5 border border-white/5 hover:bg-white/10 text-white active:scale-90 transition-all' onclick='changeEpisode(-1, \"" + data.id + "\")'>" +
                                "<svg viewBox='0 0 24 24' class='w-5 h-5' fill='none' stroke='currentColor' stroke-width='2.5'><polyline points='15 18 9 12 15 6'></polyline></svg>" +
                            "</button>" +
                            "<select id='episode-select' class='flex-grow bg-white/5 border border-white/5 px-4 py-2.5 rounded-xl text-xs font-bold outline-none cursor-pointer' onchange='handleEpisodeSelect(\"" + data.id + "\", this.value)'><option>Loading episodes...</option></select>" +
                            "<button class='w-11 h-11 flex-shrink-0 flex items-center justify-center rounded-xl bg-white/5 border border-white/5 hover:bg-white/10 text-white active:scale-90 transition-all' onclick='changeEpisode(1, \"" + data.id + "\")'>" +
                                 "<svg viewBox='0 0 24 24' class='w-5 h-5' fill='none' stroke='currentColor' stroke-width='2.5'><polyline points='9 18 15 12 9 6'></polyline></svg>" +
                            "</button>" +
                        "</div>" +
                    "</div>" +
                "</div>";

                setTimeout(function() { 
                    fetchEpisodes(data.id, currentPlaying.season, false); 
                    playEpisode(data.id, currentPlaying.season, currentPlaying.episode, type);
                }, 100);
            } else {
                controlBarHtml = 
                "<div class='p-5 bg-cinemaCard border-t border-white/5 rounded-b-2xl'>" +
                    "<div class='w-full'>" + generateServerButtons(data.id, 'movie') + actionControls + "</div>" +
                "</div>";
                addToHistory(data.id, 'movie', 0, 0, title, posterUrl);
            }

            var initialUrl = getStreamUrl(data.id, currentPlaying.season, currentPlaying.episode, type);
            var initialRefPolicy = (currentServer === 'embedwave') ? 'no-referrer' : 'no-referrer-when-downgrade';

            playerDynamicCard.innerHTML = 
                `<div class="w-full rounded-2xl overflow-hidden bg-black shadow-2xl border border-white/10">` +
                    `<div id="player-wrapper" class="relative w-full aspect-video bg-black">` +
                        `<iframe id="streaming-player" src="${initialUrl}" class="absolute inset-0 w-full h-full border-none" frameborder="0" allow="autoplay *; fullscreen *; picture-in-picture *; encrypted-media *; clipboard-read; clipboard-write; storage-access" scrolling="no" allowfullscreen webkitallowfullscreen mozallowfullscreen referrerpolicy="${initialRefPolicy}" style="width:100%!important;height:100%!important;min-width:100%!important;min-height:100%!important;display:block!important;"></iframe>` +
                        `<button id="fs-exit-floating-btn" onclick="toggleFullScreen()" class="hidden absolute top-4 right-4 z-[9999999] items-center gap-1.5 px-3.5 py-2 rounded-full bg-black/80 hover:bg-red-600 text-white text-xs font-bold border border-white/20 shadow-2xl backdrop-blur-md transition-all">` +
                            `<svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3"/></svg>` +
                            `<span>Exit Fullscreen</span>` +
                        `</button>` +
                    `</div>` +
                    controlBarHtml +
                `</div>`;

            var inWatchlist = isInWatchlist(data.id);
            var watchlistBtnText = inWatchlist ? 'Saved' : 'Add to List';
            var watchlistBtnClass = inWatchlist ? 'flex items-center gap-2 px-6 py-3 rounded-full font-bold bg-brandPink text-black hover:scale-105 active:scale-95 text-sm transition-all shadow-lg' : 'flex items-center gap-2 px-6 py-3 rounded-full font-bold bg-white/10 hover:bg-white/20 text-white active:scale-95 text-sm transition-all border border-white/10';

            var trailersHtml = '';
            if (data.videos && data.videos.results && data.videos.results.length > 0) {
                var clips = data.videos.results.filter(function(v) { return v.site === 'YouTube'; }).slice(0, 6);
                if (clips.length > 0) {
                    trailersHtml += `
                    <div class="mt-10">
                        <h3 class="text-lg md:text-xl font-extrabold text-white mb-4 flex items-center gap-2">
                            <span>🎬</span> Official Trailers &amp; Bonus Clips
                        </h3>
                        <div class="h-scroller">`;
                    for(var t=0; t<clips.length; t++) {
                        var clip = clips[t];
                        trailersHtml += `
                        <a href="https://www.youtube.com/watch?v=${clip.key}" target="_blank" rel="noopener noreferrer" class="flex-shrink-0 w-60 rounded-2xl overflow-hidden bg-[#0f0f12] border border-white/5 group hover:border-brandPink transition-all shadow-lg flex flex-col">
                            <div class="relative w-full aspect-video bg-black overflow-hidden">
                                <img src="https://img.youtube.com/vi/${clip.key}/hqdefault.jpg" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <div class="absolute inset-0 bg-black/40 flex items-center justify-center group-hover:bg-black/20 transition-all">
                                    <div class="w-10 h-10 rounded-full bg-red-600 flex items-center justify-center text-white shadow-xl group-hover:scale-110 transition-transform">▶</div>
                                </div>
                            </div>
                            <div class="p-3">
                                <h4 class="text-xs font-bold text-gray-200 truncate group-hover:text-brandPink transition-colors">${escapeHtml(clip.name)}</h4>
                                <span class="text-[10px] text-gray-500 uppercase mt-0.5 block">${clip.type || 'Trailer'}</span>
                            </div>
                        </a>`;
                    }
                    trailersHtml += `</div></div>`;
                }
            }

            var castHtml = '';
            if (data.credits && data.credits.cast && data.credits.cast.length > 0) {
                var castList = data.credits.cast.slice(0, 10);
                castHtml += `
                <div class="mt-10">
                    <h3 class="text-lg md:text-xl font-extrabold text-white mb-4 flex items-center gap-2">
                        <span>✨</span> Top Cast &amp; Crew
                    </h3>
                    <div class="h-scroller">`;
                for(var c=0; c<castList.length; c++) {
                    var actor = castList[c];
                    var actImg = actor.profile_path ? CONFIG.imgSmall + actor.profile_path : getSVGPlaceholder(actor.name);
                    castHtml += `
                    <div class="flex-shrink-0 w-28 text-center flex flex-col items-center group cursor-pointer" onclick="handleActorSearch('${encodeURIComponent(actor.name)}')">
                        <div class="w-20 h-20 rounded-full overflow-hidden border border-white/10 group-hover:border-brandPink group-hover:scale-105 transition-all mb-2 shadow-lg">
                            <img src="${actImg}" class="w-full h-full object-cover" loading="lazy" onerror="this.onerror=null; this.src='${getSVGPlaceholder(actor.name)}';">
                        </div>
                        <h4 class="text-xs font-bold text-white truncate max-w-[110px] group-hover:text-brandPink transition-colors">${escapeHtml(actor.name)}</h4>
                        <span class="text-[10px] text-gray-400 truncate max-w-[110px]">${escapeHtml(actor.character)}</span>
                    </div>`;
                }
                castHtml += `</div></div>`;
            }

            var collectionHtml = '';
            if (collection && collection.parts && collection.parts.length > 1) {
                collectionHtml += `
                <div class="mt-10">
                    <h3 class="text-lg md:text-xl font-extrabold text-white mb-4 flex items-center gap-2">
                        <span>📚</span> ${escapeHtml(collection.name)}
                    </h3>
                    <div class="h-scroller">`;
                for(var col=0; col<collection.parts.length; col++) {
                    var part = collection.parts[col];
                    var isCurrent = (part.id === data.id);
                    var curBadge = isCurrent ? `<div class="absolute bottom-2 left-2 bg-brandPink text-black text-[9px] font-black px-2 py-0.5 rounded shadow">Now Playing</div>` : '';
                    collectionHtml += `
                    <div class="relative flex-shrink-0 w-36 bg-cinemaCard rounded-2xl overflow-hidden group border border-white/5 shadow-lg glow-hover cursor-pointer transition-all flex flex-col" onclick="handleRoute(event, ${part.id}, 'movie')">
                        <div class="w-full h-52 overflow-hidden movie-img-wrap bg-[#0c0c0f] relative">
                            <img src="${part.poster_path ? CONFIG.imgSmall + part.poster_path : getSVGPlaceholder(part.title)}" class="w-full h-full object-cover" loading="lazy">
                            ${curBadge}
                        </div>
                        <div class="p-2.5 flex-grow flex items-center bg-gradient-to-t from-black/90 to-transparent">
                            <h4 class="text-xs font-semibold text-gray-200 group-hover:text-brandPink line-clamp-2 transition-colors">${escapeHtml(part.title)}</h4>
                        </div>
                    </div>`;
                }
                collectionHtml += `</div></div>`;
            }

            detailsMetadataContent.innerHTML = `
            <div class="mt-8 flex flex-col md:flex-row gap-8 items-start">
                <img src="${posterUrl}" class="w-48 rounded-2xl shadow-2xl border border-white/5 flex-shrink-0 self-center md:self-auto movie-poster-large" onerror="this.onerror=null; this.src='${placeholderUrl}';">
                <div class="flex-grow flex flex-col gap-3">
                    <h1 class="text-3xl md:text-4xl font-extrabold text-white tracking-tight">${escapeHtml(title)}</h1>
                    <div class="flex items-center gap-3 text-xs md:text-sm font-semibold">
                        <span class="text-brandYellow font-extrabold">${(data.vote_average * 10).toFixed(0)}% Score</span>
                        <span class="bg-white/5 border border-white/10 px-2 py-0.5 rounded text-gray-300">${year}</span>
                        <span class="bg-white/5 border border-white/10 px-2 py-0.5 rounded text-gray-300">${type === 'movie' ? Math.floor(runtime/60) + 'h ' + (runtime%60) + 'm' : (data.number_of_seasons || 1) + ' Seasons'}</span>
                    </div>
                    <p class="text-gray-300 leading-relaxed text-sm md:text-base mt-2">${escapeHtml(data.overview)}</p>
                    <div class="flex items-center gap-3 mt-4">
                        <button id="watchlist-btn" class="${watchlistBtnClass}" onclick="toggleWatchlist(${data.id}, '${encodeURIComponent(title)}', '${encodeURIComponent(posterUrl)}', '${type}')">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg> <span>${watchlistBtnText}</span>
                        </button>
                    </div>
                </div>
            </div>
            ${trailersHtml}
            ${castHtml}
            ${collectionHtml}
            <div id="related-content-section" class="mt-10"></div>
            <div id="recommended-content-section" class="mt-10"></div>
            <div id="similar-content-section" class="mt-10"></div>
            `;

            loadRelatedUniverse(data, type);
            loadRecommendedSection(data, type);
            loadSimilarSection(data, type);
        }

        function renderRailCardsMarkup(items, heading, icon) {
            if (!items || items.length === 0) return '';
            var html = `
            <div class="flex items-center gap-2.5 mb-4">
                <span class="text-xl">${icon || '🎯'}</span>
                <h3 class="text-lg md:text-xl font-extrabold text-white tracking-tight">${heading}</h3>
            </div>
            <div class="h-scroller">`;

            for (var i = 0; i < items.length; i++) {
                var it = items[i];
                var itTitle = it.title || it.name;
                var itType = it.media_type || (it.first_air_date ? 'tv' : 'movie');
                var placeholderUrl = getSVGPlaceholder(itTitle);
                var itPoster = it.poster_path ? CONFIG.imgSmall + it.poster_path : placeholderUrl;
                var rating = it.vote_average ? it.vote_average.toFixed(1) : 'N/A';

                html += `
                <div class="relative flex-shrink-0 w-36 bg-cinemaCard rounded-2xl overflow-hidden group border border-white/5 shadow-lg glow-hover cursor-pointer transition-all duration-300 flex flex-col"
                     onclick="handleRoute(event, ${it.id}, '${itType}')"
                     onmouseenter="prefetchDetails(${it.id}, '${itType}')"
                     ontouchstart="prefetchDetails(${it.id}, '${itType}')">
                    <div class="w-full h-52 overflow-hidden movie-img-wrap bg-[#0c0c0f] relative">
                        <img src="${itPoster}" alt="${escapeHtml(itTitle)}" class="w-full h-full object-cover" loading="lazy" decoding="async" onerror="this.onerror=null; this.src='${placeholderUrl}';">
                        <div class="absolute top-2 left-2 bg-black/80 text-white border-l-2 border-l-brandYellow px-1.5 py-0.5 rounded text-[9px] font-extrabold tracking-wider z-20 shadow">${rating} ★</div>
                    </div>
                    <div class="p-2.5 flex-grow flex items-center bg-gradient-to-t from-black/90 to-transparent">
                        <h4 class="text-xs font-semibold text-gray-200 group-hover:text-brandPink line-clamp-2 transition-colors">${escapeHtml(itTitle)}</h4>
                    </div>
                </div>`;
            }
            html += `</div>`;
            return html;
        }

        function loadRelatedUniverse(data, type) {
            var container = document.getElementById('related-content-section');
            if (!container) return;

            var rawTitle = data.title || data.name || '';
            var cleanTitle = rawTitle
                .replace(/\s*[\(\[\{].*?[\)\]\}]/g, '')
                .replace(/[:\-–—|].*$/, '')
                .trim();

            if (cleanTitle.length < 3) {
                container.innerHTML = '';
                return;
            }

            container.innerHTML = `
            <div class="flex items-center gap-2.5 mb-4">
                <span class="text-xl">🔗</span>
                <h3 class="text-lg md:text-xl font-extrabold text-white tracking-tight">Related Titles &amp; Universe</h3>
            </div>
            <div class="h-scroller">${renderRailSkeletons()}</div>`;

            fetchData('search/multi', { query: cleanTitle }, function(searchRes) {
                if (!container) return;
                var hits = [];
                var seen = {};
                seen[data.id] = true;

                if (searchRes && searchRes.results) {
                    for (var i = 0; i < searchRes.results.length; i++) {
                        var item = searchRes.results[i];
                        if (item && !seen[item.id] && (item.media_type === 'movie' || item.media_type === 'tv') && item.poster_path) {
                            seen[item.id] = true;
                            hits.push(item);
                        }
                    }
                }

                if (hits.length > 0) {
                    container.innerHTML = renderRailCardsMarkup(hits.slice(0, 18), 'Related Titles &amp; Universe', '🔗');
                } else {
                    container.innerHTML = '';
                }
            }, function() {
                if (container) container.innerHTML = '';
            });
        }

        function loadRecommendedSection(data, type) {
            var container = document.getElementById('recommended-content-section');
            if (!container) return;

            var recs = (data.recommendations && data.recommendations.results) ? data.recommendations.results : [];
            var filtered = recs.filter(function(r) { return r && r.id !== data.id && r.poster_path; });

            if (filtered.length >= 6) {
                container.innerHTML = renderRailCardsMarkup(filtered.slice(0, 18), 'Recommended For You', '🎯');
                return;
            }

            var origLang = data.original_language || '';
            var genreIds = (data.genres || []).map(function(g) { return g.id; }).slice(0, 2).join(',');

            var discParams = { sort_by: 'popularity.desc' };
            if (origLang) discParams.with_original_language = origLang;
            if (genreIds) discParams.with_genres = genreIds;

            fetchData('discover/' + type, discParams, function(res) {
                if (!container) return;
                var list = (res && res.results) ? res.results.filter(function(x) { return x.id !== data.id && x.poster_path; }) : [];
                var merged = filtered.concat(list.filter(function(l) {
                    return !filtered.some(function(f) { return f.id === l.id; });
                }));

                if (merged.length > 0) {
                    container.innerHTML = renderRailCardsMarkup(merged.slice(0, 18), 'Recommended For You', '🎯');
                } else {
                    container.innerHTML = '';
                }
            }, function() {
                if (container) container.innerHTML = filtered.length > 0 ? renderRailCardsMarkup(filtered, 'Recommended For You', '🎯') : '';
            });
        }

        function loadSimilarSection(data, type) {
            var container = document.getElementById('similar-content-section');
            if (!container) return;

            var similar = (data.similar && data.similar.results) ? data.similar.results : [];
            var filtered = similar.filter(function(s) { return s && s.id !== data.id && s.poster_path; });

            if (filtered.length >= 6) {
                container.innerHTML = renderRailCardsMarkup(filtered.slice(0, 18), 'More Like This', '✨');
                return;
            }

            var genreIds = (data.genres || []).map(function(g) { return g.id; }).join(',');
            var params = { sort_by: 'vote_count.desc' };
            if (genreIds) params.with_genres = genreIds;

            fetchData('discover/' + type, params, function(res) {
                if (!container) return;
                var list = (res && res.results) ? res.results.filter(function(x) { return x.id !== data.id && x.poster_path; }) : [];
                var merged = filtered.concat(list.filter(function(l) {
                    return !filtered.some(function(f) { return f.id === l.id; });
                }));

                if (merged.length > 0) {
                    container.innerHTML = renderRailCardsMarkup(merged.slice(0, 18), 'More Like This', '✨');
                } else {
                    container.innerHTML = '';
                }
            }, function() {
                if (container) container.innerHTML = filtered.length > 0 ? renderRailCardsMarkup(filtered, 'More Like This', '✨') : '';
            });
        }

        function handleSeasonChange(tmdbId, seasonNum) {
            currentPlaying.season = parseInt(seasonNum) || 1;
            currentPlaying.episode = 1;
            fetchEpisodes(tmdbId, currentPlaying.season, true);
        }

        function handleEpisodeSelect(tmdbId, epNum) {
            playEpisode(tmdbId, currentPlaying.season, parseInt(epNum) || 1, 'tv');
        }

        function changeEpisode(offset, tmdbId) {
            var currentEp = parseInt(currentPlaying.episode);
            var newEpisode = currentEp + offset;
            if (newEpisode >= 1 && newEpisode <= currentSeasonTotalEpisodes) playEpisode(tmdbId, currentPlaying.season, newEpisode, 'tv');
        }

        function changeServer(id, serverName, type, btnElement) { 
            currentServer = serverName; 
            updateActiveBtn(btnElement); 
            playEpisode(id, currentPlaying.season, currentPlaying.episode, type); 
        }

        function updateActiveBtn(el) { 
            if (el) { 
                var playerCard = document.getElementById('player-dynamic-card');
                if (playerCard) {
                    var btns = playerCard.getElementsByTagName('button');
                    for (var i = 0; i < btns.length; i++) { 
                        var onclickAttr = btns[i].getAttribute('onclick');
                        if (onclickAttr && onclickAttr.indexOf('changeServer') !== -1) {
                            btns[i].classList.remove('bg-brandPink', 'text-black', 'shadow-lg', 'font-extrabold');
                            btns[i].classList.add('bg-[#121216]', 'hover:bg-white/10', 'text-white', 'border', 'border-white/5');
                        }
                    }
                }
                el.classList.remove('bg-[#121216]', 'hover:bg-white/10', 'text-white', 'border', 'border-white/5');
                el.classList.add('bg-brandPink', 'text-black', 'shadow-lg', 'font-extrabold');
            } 
        }

        function fetchEpisodes(tvId, seasonNum, autoPlay) {
            var episodeSelect = document.getElementById('episode-select');
            var path = 'tv/' + tvId + '/season/' + seasonNum;

            fetchData(path, {}, function(data) {
                if (!data.episodes || data.episodes.length === 0) { 
                    currentSeasonTotalEpisodes = 0; 
                    if (episodeSelect) episodeSelect.innerHTML = '<option>No episodes found</option>';
                    return; 
                }

                var releasedEpisodes = data.episodes;
                currentSeasonTotalEpisodes = releasedEpisodes[releasedEpisodes.length - 1].episode_number;
                
                if (episodeSelect) { 
                    var optHtml = "";
                    for(var oe=0; oe<releasedEpisodes.length; oe++){
                        optHtml += "<option class='bg-black text-white' value='" + releasedEpisodes[oe].episode_number + "'>Ep " + releasedEpisodes[oe].episode_number + ": " + escapeHtml(releasedEpisodes[oe].name) + "</option>";
                    }
                    episodeSelect.innerHTML = optHtml;
                    episodeSelect.value = currentPlaying.episode; 
                }

                if (autoPlay) {
                    playEpisode(tvId, seasonNum, 1, 'tv');
                }
            }, function() {});
        }

        function playEpisode(id, season, episode, type) {
            type = type || 'tv';

            currentPlaying.tmdbId = id;
            currentPlaying.season = season;
            currentPlaying.episode = episode;
            currentPlaying.type = type;

            var episodeSelect = document.getElementById('episode-select');
            if (episodeSelect) episodeSelect.value = episode;

            var player = document.getElementById('streaming-player');
            var url = getStreamUrl(id, season, episode, type);

            if (player) {
                player.referrerPolicy = (currentServer === 'embedwave') ? 'no-referrer' : 'no-referrer-when-downgrade';
                player.src = url;
            }

            if (type === 'tv' && currentPlaying.title) {
                addToHistory(id, 'tv', season, episode, currentPlaying.title, null);
            }
        }

        function reloadPlayerFrame() {
            var p = document.getElementById('streaming-player');
            if(p) {
                p.src = p.src;
                showToast("Stream refreshed successfully!");
            }
        }

        function syncFullscreenCleanup() {
            var isFs = document.fullscreenElement || document.webkitFullscreenElement || document.mozFullScreenElement || document.msFullscreenElement;
            if (!isFs) {
                var playerContainer = document.getElementById('player-wrapper');
                if (playerContainer && !playerContainer.dataset.pseudoOnly) {
                    playerContainer.classList.remove('pseudo-fullscreen');
                    document.body.style.overflow = '';
                }
            }
        }
        document.addEventListener('fullscreenchange', syncFullscreenCleanup);
        document.addEventListener('webkitfullscreenchange', syncFullscreenCleanup);
        document.addEventListener('mozfullscreenchange', syncFullscreenCleanup);

        function toggleFullScreen() {
            var playerContainer = document.getElementById('player-wrapper'); 
            if (!playerContainer) return;
            
            var nativeFsEl = document.fullscreenElement || document.webkitFullscreenElement || document.mozFullScreenElement || document.msFullscreenElement;
            var isPseudoFs = playerContainer.classList.contains('pseudo-fullscreen');

            if (!nativeFsEl && !isPseudoFs) {
                // Enter fullscreen
                playerContainer.classList.add('pseudo-fullscreen');
                document.body.style.overflow = 'hidden';

                var reqFs = playerContainer.requestFullscreen || playerContainer.webkitRequestFullscreen || playerContainer.mozRequestFullScreen || playerContainer.msRequestFullscreen;
                if (reqFs) {
                    try {
                        var promise = reqFs.call(playerContainer);
                        if (promise && promise.then) {
                            promise.then(function() {
                                delete playerContainer.dataset.pseudoOnly;
                                if (screen.orientation && screen.orientation.lock) {
                                    screen.orientation.lock('landscape').catch(function(){});
                                }
                            }).catch(function() {
                                // Native fullscreen blocked or unsupported (e.g. iOS Safari or nested iframe), keep pseudo-fullscreen active
                                playerContainer.dataset.pseudoOnly = 'true';
                            });
                        }
                    } catch (err) {
                        playerContainer.dataset.pseudoOnly = 'true';
                    }
                } else {
                    playerContainer.dataset.pseudoOnly = 'true';
                }
            } else {
                // Exit fullscreen
                delete playerContainer.dataset.pseudoOnly;
                playerContainer.classList.remove('pseudo-fullscreen');
                document.body.style.overflow = '';

                if (nativeFsEl) {
                    var exitFs = document.exitFullscreen || document.webkitExitFullscreen || document.mozCancelFullScreen || document.msExitFullscreen;
                    if (exitFs) {
                        try { exitFs.call(document); } catch (e) {}
                    }
                }
                if (screen.orientation && screen.orientation.unlock) {
                    try { screen.orientation.unlock(); } catch (e) {}
                }
            }
        }

        function openInNewTab() {
            var p = document.getElementById('streaming-player');
            if(p && p.src) window.open(p.src, '_blank');
        }

        function getWatchlist() { 
            return safeJsonParse(safeStorage.getItem('myWatchlist'), []);
        }

        function addToWatchlist(item) {
            var list = getWatchlist();
            list.unshift(item);
            safeStorage.setItem('myWatchlist', JSON.stringify(list));
            showToast(`Added <b>${escapeHtml(item.title)}</b> to My List`);
            loadWatchlist();
        }

        function removeFromWatchlist(id) {
            var list = getWatchlist().filter(function(item) { return item.id !== id; });
            safeStorage.setItem('myWatchlist', JSON.stringify(list));
            showToast('Removed from My List');
            loadWatchlist();
        }

        function isInWatchlist(id) { 
            return getWatchlist().some(function(item) { return item.id === id; });
        }

        function toggleWatchlist(id, encTitle, encPoster, type) {
            var title = decodeURIComponent(encTitle);
            var poster = decodeURIComponent(encPoster);
            var btn = document.getElementById('watchlist-btn');
            if (isInWatchlist(id)) {
                removeFromWatchlist(id);
                if (btn) { 
                    btn.className = 'flex items-center gap-2 px-6 py-3 rounded-full font-bold bg-white/10 hover:bg-white/20 text-white text-sm transition-all border border-white/10'; 
                    btn.innerHTML = '<svg class="w-4 h-4 text-brandYellow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg> Add to List'; 
                }
            } else {
                addToWatchlist({ id: id, title: title, poster: poster, type: type });
                if (btn) { 
                    btn.className = 'flex items-center gap-2 px-6 py-3 rounded-full font-bold bg-brandPink text-black hover:scale-105 active:scale-95 text-sm transition-all shadow-lg'; 
                    btn.innerHTML = '<svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg> Saved'; 
                }
            }
        }

        function showWatchlist() {
            var list = getWatchlist();
            if (list.length === 0) {
                showToast("Your Watchlist is empty!");
                return;
            }
            if (detailsView.style.display !== 'none') goHome(true);
            setTimeout(function() {
                var wSection = document.getElementById('watchlist-section');
                if(wSection) {
                    wSection.style.display = 'block';
                    wSection.scrollIntoView({behavior: "smooth"});
                }
            }, 150);
        }

        function loadWatchlist() {
            var list = getWatchlist();
            var container = document.getElementById('watchlist-list');
            var section = document.getElementById('watchlist-section');
            if (!container || !section) return;

            if (list.length === 0) {
                section.style.display = 'none';
                return;
            }

            section.style.display = 'block';
            var html = "";
            for (var i = 0; i < list.length; i++) {
                var item = list[i];
                var placeholderUrl = getSVGPlaceholder(item.title);
                var poster = item.poster || placeholderUrl;
                html += `
                <div class="relative flex-shrink-0 w-36 bg-[#0f0f12] rounded-xl overflow-hidden group border border-white/5 shadow-lg glow-hover transition-all" onclick="handleRoute(event, ${item.id}, '${item.type}')">
                    <div class="w-full h-52 overflow-hidden movie-img-wrap">
                        <img src="${poster}" class="w-full h-full object-cover" loading="lazy" onerror="this.onerror=null; this.src='${placeholderUrl}';">
                    </div>
                    <div class="p-2.5 text-center text-xs font-bold text-gray-200 truncate group-hover:text-brandPink transition-colors">${escapeHtml(item.title)}</div>
                    <div class="absolute top-2 right-2 w-6 h-6 rounded-full bg-black/80 hover:bg-red-600 text-white flex items-center justify-center text-sm font-extrabold border border-white/10 shadow-lg cursor-pointer transition-all" onclick="event.stopPropagation(); removeFromWatchlist(${item.id})">&times;</div>
                </div>`;
            }
            container.innerHTML = html;
        }

        function getHistory() { 
            return safeJsonParse(safeStorage.getItem('watchHistory'), {});
        }

        function addToHistory(id, type, season, episode, title, poster) {
            var history = getHistory();
            if (!history[id]) { history[id] = { type: type }; }
            if (title) history[id].title = title;
            if (poster) history[id].poster = poster;
            history[id].timestamp = Date.now();
            if (type === 'tv') {
                history[id].lastSeason = season;
                history[id].lastEpisode = episode;
            }
            safeStorage.setItem('watchHistory', JSON.stringify(history));
            loadContinueWatching();
        }

        function removeFromHistory(id) {
            var history = getHistory();
            if (history && history[id]) {
                delete history[id];
                safeStorage.setItem('watchHistory', JSON.stringify(history));
                showToast("Removed from Continue Watching");
                loadContinueWatching();
            }
        }

        function clearContinueWatching() {
            safeStorage.removeItem('watchHistory');
            loadContinueWatching();
            showToast("History cleared!");
        }

        function loadContinueWatching() {
            var history = getHistory();
            var listArr = Object.keys(history).map(function(k) { return [k, history[k]]; });
            listArr.sort(function(a, b) { return b[1].timestamp - a[1].timestamp; });
            
            var container = document.getElementById('continue-watching-list');
            var section = document.getElementById('continue-watching-section');
            if(!container || !section) return;

            if (listArr.length === 0) { section.style.display = 'none'; return; }
            section.style.display = 'block';
            
            var html = "";
            for(var i=0; i<listArr.length && i<10; i++) {
                var id = listArr[i][0];
                var item = listArr[i][1];
                if (!item.title) continue; 
                var subtitle = item.type === 'tv' ? ("S" + (item.lastSeason || 1) + " E" + (item.lastEpisode || 1)) : 'Watched';
                var placeholderUrl = getSVGPlaceholder(item.title);
                html += `
                <div class="relative flex-shrink-0 w-36 bg-[#0f0f12] rounded-xl overflow-hidden group border border-white/5 shadow-lg glow-hover transition-all" onclick="handleRoute(event, ${id}, '${item.type}')">
                    <div class="w-full h-52 overflow-hidden movie-img-wrap">
                        <img src="${item.poster || placeholderUrl}" class="w-full h-full object-cover" loading="lazy" onerror="this.onerror=null; this.src='${placeholderUrl}';">
                    </div>
                    <div class="p-2.5 text-center text-xs font-bold text-gray-200 truncate group-hover:text-brandPink transition-colors">${escapeHtml(item.title)}</div>
                    <div class="absolute bottom-10 right-2 bg-brandPink text-black px-2 py-0.5 rounded text-[9px] font-extrabold tracking-wider shadow">${subtitle}</div>
                    <div class="absolute top-2 right-2 w-6 h-6 rounded-full bg-black/80 hover:bg-red-600 text-white flex items-center justify-center text-sm font-extrabold border border-white/10 shadow-lg cursor-pointer transition-all z-20" onclick="event.stopPropagation(); removeFromHistory('${id}')" title="Remove from Continue Watching">&times;</div>
                </div>`;
            }
            container.innerHTML = html;
        }

        function handleRoute(e, id, type) {
            if (e && (e.ctrlKey || e.metaKey || e.button === 1)) return;
            if (e && e.preventDefault) e.preventDefault();
            safePushState({ view: 'details', id: id, type: type }, '', "?id=" + id + "&type=" + type);
            openDetails(id, type, false);
        }

        function handleActorSearch(actorName) {
            var decoded = decodeURIComponent(actorName);
            var sInput = document.getElementById('search') || search;
            if (sInput) {
                sInput.value = decoded;
                var form = document.getElementById('form');
                if (form && form.onsubmit) form.onsubmit();
            }
        }

        function goBackUI() {
            var player = document.getElementById('streaming-player');
            if (player && player.parentNode) player.parentNode.removeChild(player);
            goHome(false);
        }

        function goHome(isFullReset) {
            if (isTheaterMode) toggleTheaterMode();

            var player = document.getElementById('streaming-player');
            if (player && player.parentNode) player.src = 'about:blank';

            detailsView.style.display = 'none';
            homeView.style.display = 'block';
            homeView.className = 'transition-opacity duration-300 opacity-100';

            document.getElementById('category-pills-bar').style.display = 'flex';
            document.getElementById('hotstar-main-tabs').style.display = 'flex';
            document.getElementById('grid-view-container').style.display = 'none';
            document.getElementById('curated-shelves-container').style.display = 'flex';
            
            if (isFullReset) {
                window.scrollTo(0, 0);
                activeHotstarTab = 'home';
                activeSubsectionChip = 'all';
                switchHotstarTab('home');
                safePushState({ view: 'home' }, '', window.location.pathname);
                document.getElementById('search').value = '';
                document.getElementById('clear-search').style.display = 'none';
            } else {
                renderSubsectionChips(activeHotstarTab, activeSubsectionChip);
                var hero = document.getElementById('hero-slider-container');
                if (hero) hero.style.display = (activeHotstarTab === 'home' || activeHotstarTab === 'movies' || activeHotstarTab === 'tv') ? 'block' : 'none';
            }

            loadContinueWatching();
            loadWatchlist();
        }

        function clearSearch(e) {
            if(e) e.stopPropagation(); 
            var s = document.getElementById('search');
            if (s) s.value = '';
            var clearBtn = document.getElementById('clear-search');
            if (clearBtn) clearBtn.style.display = 'none';
            var sugg = document.getElementById('suggestions');
            if (sugg) sugg.className = 'hidden';
            if (s) s.focus();
            exitSectionGrid();
        }

        function initSearchListeners() {
            var searchInput = document.getElementById('search') || search;
            var searchForm = document.getElementById('form');
            var clearBtn = document.getElementById('clear-search');
            var suggBox = document.getElementById('suggestions') || suggestionsBox;

            if (searchInput) {
                searchInput.onkeyup = function() {
                    var query = this.value;
                    if (clearBtn) clearBtn.style.display = query.length > 0 ? 'inline-block' : 'none';
                    clearTimeout(debounceTimer);
                    if (query.trim().length > 1) {
                        debounceTimer = setTimeout(function() { fetchSuggestions(query.trim()); }, 120);
                    } else {
                        if (suggBox) suggBox.className = 'hidden';
                    }
                };
            }

            if (searchForm) {
                searchForm.onsubmit = function(e) {
                    if(e && e.preventDefault) e.preventDefault();
                    var currentSearch = document.getElementById('search') || search;
                    var q = currentSearch ? currentSearch.value.trim() : '';
                    if (q) {
                        if (suggBox) suggBox.className = 'hidden';
                        if (currentSearch) currentSearch.blur();
                        currentPath = 'search/multi';
                        currentParams = { query: q };
                        currentPage = 1;

                        var hero = document.getElementById('hero-slider-container');
                        if (hero) hero.style.display = 'none';
                        var contWatch = document.getElementById('continue-watching-section');
                        if (contWatch) contWatch.style.display = 'none';
                        var watchl = document.getElementById('watchlist-section');
                        if (watchl) watchl.style.display = 'none';
                        var shelves = document.getElementById('curated-shelves-container');
                        if (shelves) shelves.style.display = 'none';
                        var catPills = document.getElementById('category-pills-bar');
                        if (catPills) catPills.style.display = 'none';
                        var hTabs = document.getElementById('hotstar-main-tabs');
                        if (hTabs) hTabs.style.display = 'none';

                        var grid = document.getElementById('grid-view-container');
                        if (grid) grid.style.display = 'block';
                        var hTitle = document.getElementById('home-title');
                        if (hTitle) hTitle.innerHTML = `Search: "${escapeHtml(q)}"`;
                        safePushState({ view: 'search', q: q }, '', `?q=${encodeURIComponent(q)}`);
                        getMovies(currentPath, currentParams, false);
                    }
                    return false;
                };
            }
        }

        function fetchSuggestions(query) {
            var searchInput = document.getElementById('search') || search;
            var suggBox = document.getElementById('suggestions') || suggestionsBox;
            fetchData('search/multi', { query: query }, function(data) {
                if (searchInput && document.activeElement !== searchInput) return;
                var results = (data.results || []).filter(function(i) { return i.media_type === 'movie' || i.media_type === 'tv'; }).slice(0, 5);
                
                if (results.length > 0 && suggBox) {
                    var html = "";
                    for(var j=0; j<results.length; j++){
                        var item = results[j];
                        var pImgPlaceholder = getSVGPlaceholder(item.title || item.name);
                        var pImg = item.poster_path ? CONFIG.imgSmall + item.poster_path : pImgPlaceholder;
                        var sTitle = escapeHtml(item.title || item.name);
                        var sYr = (item.release_date || item.first_air_date || '').split('-')[0];
                        html += `
                        <a href="?id=${item.id}&type=${item.media_type}" class="flex items-center gap-4 p-3 hover:bg-white/5 border-b border-white/5 last:border-none transition-colors" onclick="handleRoute(event, ${item.id}, '${item.media_type}')">
                            <img src="${pImg}" class="w-10 h-14 object-cover rounded-md" onerror="this.onerror=null; this.src='${pImgPlaceholder}';">
                            <div class="flex-grow min-w-0">
                                <div class="text-sm font-bold text-white truncate">${sTitle}</div>
                                <div class="text-xs text-brandPink mt-0.5">${sYr} &bull; ${item.media_type.toUpperCase()}</div>
                            </div>
                        </a>`;
                    }
                    suggBox.innerHTML = html;
                    suggBox.className = 'absolute top-[120%] left-0 right-0 bg-[#0c0c0e]/95 border border-white/10 rounded-2xl max-h-[350px] overflow-y-auto z-[2000] shadow-2xl backdrop-blur-xl block';
                } else if (suggBox) {
                    suggBox.className = 'hidden';
                }
            });
        }

        document.addEventListener('keydown', function(e) {
            if (e.target && (e.target.tagName.toLowerCase() === 'input' || e.target.tagName.toLowerCase() === 'textarea')) {
                if (e.key === 'Escape') e.target.blur();
                return;
            }

            var detailsActive = (detailsView && detailsView.style.display !== 'none');
            var gridActive = (document.getElementById('grid-view-container').style.display !== 'none');

            switch(e.key.toLowerCase()) {
                case 'f':
                    e.preventDefault();
                    toggleFullScreen();
                    break;
                case 's':
                case '/':
                    e.preventDefault();
                    search.focus();
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                    break;
                case 'escape':
                case 'backspace':
                    if (detailsActive) {
                        e.preventDefault();
                        goBackUI();
                    } else if (gridActive) {
                        e.preventDefault();
                        exitSectionGrid();
                    }
                    break;
            }
        });

        function toggleTheaterMode() {
            isTheaterMode = !isTheaterMode;
            var wrapper = document.getElementById('player-theater-wrapper');
            var btn = document.getElementById('theater-btn');
            if (!wrapper) return;
            if (isTheaterMode) {
                wrapper.classList.remove('max-w-[1800px]', 'md:px-4');
                wrapper.classList.add('w-full', 'max-w-none', 'md:px-0');
                if (btn) btn.innerHTML = `<svg class="w-4 h-4 text-brandYellow" fill="currentColor" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="3" x2="9" y2="21"></line></svg><span>Default Layout</span>`;
            } else {
                wrapper.classList.remove('w-full', 'max-w-none', 'md:px-0');
                wrapper.classList.add('max-w-[1800px]', 'md:px-4');
                if (btn) btn.innerHTML = `<svg class="w-4 h-4 text-brandPink" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="3" x2="9" y2="21"></line></svg><span>Theater Layout</span>`;
            }
        }

        function toggleSettingsModal() {
            var modal = document.getElementById('settings-modal');
            if (!modal) return;
            modal.classList.toggle('hidden');
            modal.classList.toggle('flex');
        }

        function saveAppSettings() {
            var k = document.getElementById('settings-tmdb-key').value.trim();
            appCustomApiKey = k;
            safeStorage.setItem('ow4a_custom_api_key', k);
            toggleSettingsModal();
            showToast('Settings saved successfully!');
        }

        function changeTheme(themeName) {
            document.body.className = 'font-sans antialiased text-gray-200 theme-' + themeName;
            safeStorage.setItem('ow4a_theme', themeName);
        }

        function focusSearch() {
            var s = document.getElementById('search');
            if (s) {
                s.focus();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        }

        var deferredPrompt;
        window.addEventListener('beforeinstallprompt', function(e) {
            e.preventDefault();
            deferredPrompt = e;
            var btn = document.getElementById('install-pwa-btn');
            if (btn) {
                btn.classList.remove('hidden');
                btn.classList.add('flex');
            }
        });

        function installPWA() {
            if (deferredPrompt) {
                deferredPrompt.prompt();
                deferredPrompt.userChoice.then(function(choice) {
                    if (choice.outcome === 'accepted') {
                        var btn = document.getElementById('install-pwa-btn');
                        if (btn) btn.classList.add('hidden');
                    }
                    deferredPrompt = null;
                });
            } else {
                showToast("Open your browser menu and tap 'Add to Home Screen'");
            }
        }

        function initRouter() {
            if (!verifyDomainIntegrity()) {
                return;
            }

            try {
                initSearchListeners();

                var savedKey = safeStorage.getItem('ow4a_custom_api_key');
                if (savedKey) {
                    appCustomApiKey = savedKey;
                    var keyInput = document.getElementById('settings-tmdb-key');
                    if (keyInput) keyInput.value = savedKey;
                }

                var savedTheme = safeStorage.getItem('ow4a_theme');
                if (savedTheme) {
                    appTheme = savedTheme;
                    changeTheme(savedTheme);
                }
            } catch (e) {}

            renderSubsectionChips('home');

            var params = new URLSearchParams(window.location.search);
            var id = params.get('id');
            var type = params.get('type');
            var q = params.get('q');
            var sec = params.get('section');

            if (id && type) {
                openDetails(id, type, false);
            } else if (q) {
                var sInput = document.getElementById('search');
                if (sInput) sInput.value = q;
                var sForm = document.getElementById('form');
                if (sForm && sForm.onsubmit) sForm.onsubmit();
            } else if (sec && SECTIONS_MAP[sec]) {
                exploreSection(sec);
            } else {
                loadContinueWatching();
                loadWatchlist();
                loadCuratedRails();
            }

            setTimeout(dismissPreloader, 1800);
        }

        window.addEventListener('popstate', function(e) {
            if (e.state && e.state.view === 'details') {
                openDetails(e.state.id, e.state.type, false);
            } else if (e.state && e.state.view === 'section') {
                exploreSection(e.state.key);
            } else {
                goHome(false);
            }
        });

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initRouter);
        } else {
            initRouter();
        }
    </script>
    
    <script src="https://pl28351583.profitableratecpmnetwork.com/f7/41/d4/f741d41e1008acb0d5dd28b38e2b72c6.js"></script>
</body>
</html>
