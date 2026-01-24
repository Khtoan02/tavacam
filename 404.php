<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 - Trang không tìm thấy | <?php bloginfo('name'); ?></title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        .font-tech { 
            font-family: 'Share Tech Mono', monospace; 
        }
        
        /* Night Vision Filter */
        .night-vision {
            filter: sepia(100%) hue-rotate(50deg) saturate(300%) contrast(1.2) brightness(0.8);
        }
        
        /* Film Grain Noise */
        .noise-overlay {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.4'/%3E%3C/svg%3E");
            mix-blend-mode: overlay;
        }

        /* Scanline */
        .scanline {
            background: linear-gradient(to bottom, transparent 50%, rgba(0, 0, 0, 0.5) 51%);
            background-size: 100% 4px;
        }

        /* Focus Breathing Animation */
        @keyframes focusHunt {
            0% { filter: blur(0px); }
            5% { filter: blur(2px); }
            10% { filter: blur(0px); }
            100% { filter: blur(0px); }
        }
        .focus-hunting {
            animation: focusHunt 8s infinite;
        }
        
        /* Blinking Record Dot */
        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }
        .animate-blink { 
            animation: blink 1s step-end infinite; 
        }
    </style>
    
    <?php wp_head(); ?>
</head>

<body class="font-mono overflow-hidden">
    
    <div id="camera-404-container" 
         class="relative w-full h-screen bg-black overflow-hidden font-mono text-green-500 cursor-crosshair">
        
        <!-- 1. BACKGROUND LAYER (The World) -->
        <div id="bg-layer" 
             class="absolute inset-[-10%] w-[120%] h-[120%] bg-cover bg-center transition-transform duration-100 ease-out focus-hunting night-vision"
             style="background-image: url('https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?q=80&w=2613&auto=format&fit=crop');">
        </div>

        <!-- 2. OVERLAY LAYERS -->
        <div class="absolute inset-0 noise-overlay opacity-30 pointer-events-none"></div>
        <div class="absolute inset-0 scanline opacity-20 pointer-events-none"></div>
        
        <!-- Vignette (Tối 4 góc) -->
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_50%,rgba(0,0,0,0.8)_100%)] pointer-events-none"></div>

        <!-- 3. OSD (ON SCREEN DISPLAY) - Giao diện Camera -->
        <div class="absolute inset-0 p-8 md:p-12 z-20 flex flex-col justify-between pointer-events-none">
            
            <!-- Top Bar -->
            <div class="flex justify-between items-start">
                <div class="flex flex-col gap-1">
                    <div class="flex items-center gap-2 bg-black/50 px-3 py-1 rounded-sm border-l-4 border-red-500">
                        <div class="w-3 h-3 bg-red-500 rounded-full animate-blink"></div>
                        <span class="text-white font-bold text-sm tracking-widest">REC</span>
                    </div>
                    <span class="text-white/80 text-xs font-mono">CAM_04 [LOBBY]</span>
                </div>

                <div class="flex flex-col items-end gap-1 font-mono text-xs text-white/80">
                    <span id="current-date"></span>
                    <span id="current-time" class="text-lg font-bold"></span>
                    <span>FPS: 29.97</span>
                </div>
            </div>

            <!-- Center Crosshair & 404 -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center">
                <!-- Focus Box -->
                <div class="relative w-64 h-64 md:w-96 md:h-96 border-2 border-white/20 flex items-center justify-center group pointer-events-auto">
                    <!-- Corners -->
                    <div class="absolute top-0 left-0 w-4 h-4 border-t-2 border-l-2 border-green-500"></div>
                    <div class="absolute top-0 right-0 w-4 h-4 border-t-2 border-r-2 border-green-500"></div>
                    <div class="absolute bottom-0 left-0 w-4 h-4 border-b-2 border-l-2 border-green-500"></div>
                    <div class="absolute bottom-0 right-0 w-4 h-4 border-b-2 border-r-2 border-green-500"></div>
                    
                    <!-- Center Cross -->
                    <div class="absolute inset-0 flex items-center justify-center opacity-30">
                        <div class="w-full h-px bg-green-500/50"></div>
                        <div class="h-full w-px bg-green-500/50 absolute"></div>
                    </div>

                    <!-- 404 CONTENT -->
                    <div class="relative z-30 bg-black/60 backdrop-blur-sm p-8 border border-red-500/30 text-center transform transition-transform duration-300 hover:scale-105">
                        <div class="inline-flex items-center gap-2 text-red-500 mb-2 animate-pulse">
                            <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                            </svg>
                            WARNING
                        </div>
                        <h1 class="text-6xl md:text-8xl font-black text-white tracking-tighter leading-none mb-2 font-tech">404</h1>
                        <p class="text-white/70 text-xs md:text-sm uppercase tracking-widest mb-6">Object Not Found</p>
                        
                        <div class="flex gap-4 justify-center pointer-events-auto">
                            <a href="<?php echo esc_url(home_url('/')); ?>" 
                               class="bg-green-600 text-black px-4 py-2 text-xs font-bold uppercase hover:bg-green-500 transition flex items-center gap-2">
                                <svg class="w-[14px] h-[14px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                                Home
                            </a>
                            <button onclick="window.location.reload()" 
                                    class="bg-transparent border border-white/30 text-white px-4 py-2 text-xs font-bold uppercase hover:bg-white/10 transition flex items-center gap-2">
                                <svg class="w-[14px] h-[14px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                                </svg>
                                Retry
                            </button>
                        </div>
                    </div>

                    <!-- Tracking Label -->
                    <div class="absolute -top-6 left-0 text-[10px] bg-red-600 text-white px-2 py-0.5 font-bold uppercase tracking-wider animate-pulse">
                        Target Lost
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="flex justify-between items-end pointer-events-auto">
                <div class="flex gap-4 text-xs font-mono text-white/60">
                    <div class="flex items-center gap-2">
                        <svg class="w-[14px] h-[14px] text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
                        </svg>
                        Signal: 98%
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-[14px] h-[14px] text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                        </svg>
                        UPS: 100%
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-[14px] h-[14px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Auto-Iris: ON
                    </div>
                </div>

                <!-- PTZ Controls (Visual only or interactive) -->
                <div class="flex flex-col items-end gap-2">
                    <div class="flex gap-2">
                        <button id="night-vision-toggle"
                            class="p-2 border border-green-500 text-green-500 bg-green-500/10 rounded hover:bg-white/10 transition"
                            title="Toggle Night Vision">
                            <svg id="night-icon" class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                            </svg>
                            <svg id="day-icon" class="w-[18px] h-[18px] hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                        </button>
                        <button id="zoom-toggle"
                            class="p-2 border border-white/20 text-white/50 rounded hover:bg-white/10 transition"
                            title="Toggle Zoom">
                            <svg id="zoom-out-icon" class="w-[18px] h-[18px] hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <svg id="zoom-in-icon" class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"/>
                            </svg>
                        </button>
                    </div>
                    <div class="text-[10px] text-white/40 uppercase tracking-widest font-mono">
                        PTZ Control Active
                    </div>
                </div>
            </div>

        </div>

        <!-- 4. AI BOXES (Decorative) -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden">
            <div class="absolute top-[20%] left-[15%] w-24 h-40 border border-green-500/30 opacity-60">
                <span class="bg-green-500/80 text-black text-[9px] px-1 absolute -top-4 left-0">PERSON 98%</span>
            </div>
            <div class="absolute bottom-[30%] right-[20%] w-32 h-20 border border-yellow-500/30 opacity-50">
                <span class="bg-yellow-500/80 text-black text-[9px] px-1 absolute -top-4 left-0">VEHICLE 82%</span>
            </div>
            <!-- Mouse Tracker Box -->
            <div id="mouse-tracker" 
                 class="absolute w-12 h-12 border border-white/20 transition-all duration-75 ease-out"
                 style="left: 50%; top: 50%; transform: translate(-50%, -50%);">
                <div class="absolute -top-2 -left-2 w-2 h-2 border-t border-l border-white"></div>
                <div class="absolute -top-2 -right-2 w-2 h-2 border-t border-r border-white"></div>
                <div class="absolute -bottom-2 -left-2 w-2 h-2 border-b border-l border-white"></div>
                <div class="absolute -bottom-2 -right-2 w-2 h-2 border-b border-r border-white"></div>
            </div>
        </div>

    </div>

    <script>
        // Time Update
        function updateTime() {
            const now = new Date();
            document.getElementById('current-date').textContent = now.toLocaleDateString('vi-VN');
            document.getElementById('current-time').textContent = now.toLocaleTimeString('vi-VN');
        }
        setInterval(updateTime, 1000);
        updateTime();

        // Mouse Tracking for PTZ Effect
        const container = document.getElementById('camera-404-container');
        const bgLayer = document.getElementById('bg-layer');
        const mouseTracker = document.getElementById('mouse-tracker');
        let zoomLevel = 1;

        container.addEventListener('mousemove', (e) => {
            const { width, height } = container.getBoundingClientRect();
            const x = e.clientX / width;
            const y = e.clientY / height;
            
            // Move background opposite to mouse (PTZ effect)
            const moveX = -(x - 0.5) * 50;
            const moveY = -(y - 0.5) * 50;
            bgLayer.style.transform = `translate(${moveX}px, ${moveY}px) scale(${zoomLevel})`;
            
            // Move mouse tracker
            mouseTracker.style.left = (x * 100) + '%';
            mouseTracker.style.top = (y * 100) + '%';
        });

        // Night Vision Toggle
        const nightVisionBtn = document.getElementById('night-vision-toggle');
        const nightIcon = document.getElementById('night-icon');
        const dayIcon = document.getElementById('day-icon');
        let nightVision = true;

        nightVisionBtn.addEventListener('click', () => {
            nightVision = !nightVision;
            if (nightVision) {
                bgLayer.classList.add('night-vision');
                nightIcon.classList.remove('hidden');
                dayIcon.classList.add('hidden');
                nightVisionBtn.classList.add('border-green-500', 'text-green-500', 'bg-green-500/10');
                nightVisionBtn.classList.remove('border-white/20', 'text-white/50');
            } else {
                bgLayer.classList.remove('night-vision');
                nightIcon.classList.add('hidden');
                dayIcon.classList.remove('hidden');
                nightVisionBtn.classList.remove('border-green-500', 'text-green-500', 'bg-green-500/10');
                nightVisionBtn.classList.add('border-white/20', 'text-white/50');
            }
        });

        // Zoom Toggle
        const zoomBtn = document.getElementById('zoom-toggle');
        const zoomInIcon = document.getElementById('zoom-in-icon');
        const zoomOutIcon = document.getElementById('zoom-out-icon');

        zoomBtn.addEventListener('click', () => {
            zoomLevel = zoomLevel === 1 ? 1.5 : 1;
            
            if (zoomLevel > 1) {
                zoomInIcon.classList.add('hidden');
                zoomOutIcon.classList.remove('hidden');
                zoomBtn.classList.add('border-green-500', 'text-green-500', 'bg-green-500/10');
                zoomBtn.classList.remove('border-white/20', 'text-white/50');
            } else {
                zoomInIcon.classList.remove('hidden');
                zoomOutIcon.classList.add('hidden');
                zoomBtn.classList.remove('border-green-500', 'text-green-500', 'bg-green-500/10');
                zoomBtn.classList.add('border-white/20', 'text-white/50');
            }
            
            // Re-trigger transform with new zoom level
            const event = new MouseEvent('mousemove', {
                clientX: container.offsetWidth / 2,
                clientY: container.offsetHeight / 2
            });
            container.dispatchEvent(event);
        });
    </script>

    <?php wp_footer(); ?>
</body>
</html>
