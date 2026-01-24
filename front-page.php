<?php
/**
 * TavaVision - Cyber Edition
 * Compatible with Theme Header/Footer + Light/Dark Mode
 * @package TavaCam
 */
get_header();
?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap');

/* CSS Variables - Light Mode Default */
:root {
  --primary: #F97316;
  --primary-dark: #EA580C;
  --bg: #ffffff;
  --bg-alt: #f8fafc;
  --bg-panel: rgba(255, 255, 255, 0.85);
  --text: #0f172a;
  --text-muted: #64748b;
  --border: rgba(0, 0, 0, 0.1);
  --grid: rgba(0, 0, 0, 0.04);
}

/* Dark Mode Variables */
.dark {
  --bg: #050505;
  --bg-alt: #0A0A0A;
  --bg-panel: rgba(20, 20, 20, 0.7);
  --text: #e2e8f0;
  --text-muted: #94a3b8;
  --border: rgba(255, 255, 255, 0.08);
  --grid: rgba(255, 255, 255, 0.03);
}

* { box-sizing: border-box; }
h1, h2, h3, h4, .font-display { font-family: 'Space Grotesk', sans-serif; }

.cyber-main {
  background: var(--bg);
  color: var(--text);
  overflow-x: hidden;
  padding-top: 120px; /* Space for fixed header */
}

/* Cyber Cut - Signature 45° bevel */
.cyber-cut {
  clip-path: polygon(20px 0, 100% 0, 100% calc(100% - 20px), calc(100% - 20px) 100%, 0 100%, 0 20px);
}
.btn-cut {
  clip-path: polygon(10px 0, 100% 0, 100% calc(100% - 10px), calc(100% - 10px) 100%, 0 100%, 0 10px);
}

/* Tech Grid Background */
.bg-tech-grid {
  background-size: 50px 50px;
  background-image: 
    linear-gradient(to right, var(--grid) 1px, transparent 1px),
    linear-gradient(to bottom, var(--grid) 1px, transparent 1px);
}

/* Glass Panel */
.glass-panel {
  background: var(--bg-panel);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border: 1px solid var(--border);
}

/* Typography */
.t-xs { font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; font-weight: 600; }
.t-sm { font-size: 12px; }
.t-base { font-size: 14px; line-height: 1.7; }
.text-muted { color: var(--text-muted); }
.text-primary { color: var(--primary); }
.font-mono { font-family: 'SF Mono', 'Fira Code', monospace; }

/* Buttons */
.btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 16px 32px;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  transition: all 0.3s;
  cursor: pointer;
  border: none;
}
.btn-primary { background: var(--primary); color: white; }
.btn-primary:hover { background: var(--primary-dark); }
.btn-outline { background: transparent; border: 1px solid var(--border); color: var(--text); }
.btn-outline:hover { background: var(--border); }
.btn-white { background: white; color: #000; }
.dark .btn-white { background: white; color: #000; }
.btn-white:hover { background: var(--primary); color: white; }

.container { max-width: 1280px; margin: 0 auto; padding: 0 24px; }

/* === HERO SLIDER === */
.hero-section {
  position: relative;
  width: 100%;
  height: 75vh;
  min-height: 550px;
  overflow: hidden;
  border-bottom: 1px solid var(--border);
}
.hero-slide {
  position: absolute;
  inset: 0;
  opacity: 0;
  transition: opacity 1s ease;
}
.hero-slide.active { opacity: 1; z-index: 10; }
.hero-slide.active img {
  animation: slowZoom 20s ease-in-out infinite alternate;
}
.hero-slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 1; /* Crystal clear in light mode */
  transform-origin: center center;
}
.dark .hero-slide img { opacity: 0.8; filter: grayscale(10%); }

/* Ken Burns Slow Zoom Animation */
@keyframes slowZoom {
  0% { transform: scale(1); }
  100% { transform: scale(1.1); }
}

/* Light Mode - NO overlay, keep image crystal clear */
.hero-overlay {
  position: absolute;
  inset: 0;
  background: transparent;
  pointer-events: none;
}

/* Dark Mode - Glassmorphism Overlay */
.dark .hero-overlay {
  background: linear-gradient(
    105deg, 
    rgba(5,5,5,0.4) 0%,
    rgba(5,5,5,0.25) 25%,
    rgba(5,5,5,0.1) 50%,
    transparent 70%
  );
  backdrop-filter: blur(1px);
  -webkit-backdrop-filter: blur(1px);
}

/* === GLASS CONTENT CARD (only wraps text content) === */
.hero-inner {
  max-width: 700px;
  position: relative;
  /* Light Mode: Subtle Glass Card - 20% opacity */
  background: rgba(255,255,255,0.2);
  backdrop-filter: blur(16px) saturate(1.3);
  -webkit-backdrop-filter: blur(16px) saturate(1.3);
  border: 1px solid rgba(255,255,255,0.3);
  border-radius: 0;
  padding: 40px;
  /* Cyber cut shape */
  clip-path: polygon(
    20px 0, 100% 0,
    100% calc(100% - 20px), calc(100% - 20px) 100%,
    0 100%, 0 20px
  );
  box-shadow: 
    0 25px 50px -12px rgba(0,0,0,0.1),
    inset 0 1px 0 rgba(255,255,255,0.4);
}
/* Dark Mode: Full dark glass */
.dark .hero-inner {
  background: rgba(5,5,5,0.85);
  backdrop-filter: blur(24px) saturate(1.2);
  -webkit-backdrop-filter: blur(24px) saturate(1.2);
  border: 1px solid rgba(255,255,255,0.1);
  box-shadow: 
    0 25px 50px -12px rgba(0,0,0,0.5),
    inset 0 1px 0 rgba(255,255,255,0.05);
}
.hero-content {
  position: absolute;
  inset: 0;
  z-index: 20;
  display: flex;
  align-items: center;
}
/* .hero-inner styles moved above with glass card */
.hero-tag {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 6px 12px;
  border: 1px solid rgba(249,115,22,0.5);
  background: rgba(249,115,22,0.1);
  color: var(--primary);
  font-size: 10px;
  font-family: monospace;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  margin-bottom: 24px;
}
.hero-tag-dot {
  width: 6px;
  height: 6px;
  background: var(--primary);
  animation: pulse 2s infinite;
}
@keyframes pulse { 0%,100%{opacity:1} 50%{opacity:0.4} }

.hero-title {
  font-size: clamp(40px, 7vw, 80px);
  font-weight: 700;
  line-height: 0.95;
  letter-spacing: -0.03em;
  text-transform: uppercase;
  margin-bottom: 24px;
  white-space: pre-line;
  /* Light mode: Solid Black text */
  color: #000;
}
.dark .hero-title {
  color: #fff;
}
.hero-desc {
  font-size: 14px;
  /* Light mode: Solid Black text - same as title */
  color: #000;
  max-width: 450px;
  line-height: 1.7;
  margin-bottom: 32px;
  padding-left: 20px;
  border-left: 2px solid var(--primary);
}
.dark .hero-desc {
  color: var(--text-muted);
}
.hero-ctas { display: flex; gap: 12px; flex-wrap: wrap; }

.hero-nav {
  position: absolute;
  bottom: 40px;
  right: 40px;
  z-index: 30;
  display: flex;
  align-items: center;
  gap: 20px;
}
.hero-counter { font-family: monospace; font-size: 12px; }
.hero-arrows { display: flex; gap: 8px; }
.hero-arrow {
  width: 44px;
  height: 44px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 1px solid var(--border);
  background: var(--bg-panel);
  color: var(--text-muted);
  cursor: pointer;
  transition: all 0.3s;
}
.hero-arrow:hover { background: var(--primary); border-color: var(--primary); color: white; }

/* === CORE VALUES === */
.values-section { padding: 100px 0; border-bottom: 1px solid var(--border); }
.values-header {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: flex-end;
  margin-bottom: 60px;
  gap: 24px;
}
.values-label {
  color: var(--primary);
  font-family: monospace;
  font-size: 11px;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  margin-bottom: 12px;
}
.values-title {
  font-size: clamp(28px, 4vw, 44px);
  font-weight: 700;
  text-transform: uppercase;
  line-height: 1.1;
}
.values-title span { color: var(--text-muted); }

.values-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 16px;
}
@media (max-width: 1024px) { .values-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 640px) { .values-grid { grid-template-columns: 1fr; } }

.value-card {
  position: relative;
  height: 280px;
  background: var(--bg-alt);
  border: 1px solid var(--border);
  transition: all 0.3s;
  overflow: hidden;
}
.value-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background: var(--primary);
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.5s;
}
.value-card:hover::before { transform: scaleX(1); }
.value-card:hover { border-color: rgba(249,115,22,0.5); }

.value-card-inner {
  position: relative;
  z-index: 10;
  padding: 28px;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.value-card-top { display: flex; justify-content: space-between; align-items: flex-start; }
.value-icon { color: var(--text-muted); transition: color 0.3s; }
.value-card:hover .value-icon { color: var(--primary); }
.value-sub { font-size: 10px; font-family: monospace; color: var(--text-muted); opacity: 0.5; }
.value-card:hover .value-sub { opacity: 1; }
.value-title { font-size: 18px; font-weight: 700; text-transform: uppercase; margin-bottom: 8px; }
.value-desc { font-size: 13px; color: var(--text-muted); line-height: 1.6; transition: color 0.3s; }
.value-card:hover .value-desc { color: var(--text); }

/* === HOOK === */
.hook-section {
  position: relative;
  height: 350px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: var(--bg-alt);
  border-bottom: 1px solid var(--border);
  overflow: hidden;
}
.hook-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(to right, rgba(128,128,128,0.05) 1px, transparent 1px),
              linear-gradient(to bottom, rgba(128,128,128,0.05) 1px, transparent 1px);
  background-size: 24px 24px;
  mask-image: radial-gradient(ellipse 60% 50% at 50% 0%, #000 70%, transparent 100%);
}
.hook-content { position: relative; z-index: 10; text-align: center; padding: 0 24px; }
.hook-title {
  font-size: clamp(26px, 4vw, 44px);
  font-weight: 700;
  text-transform: uppercase;
  margin-bottom: 20px;
  letter-spacing: -0.02em;
}
.hook-title span { color: var(--primary); border-bottom: 2px solid var(--primary); }
.hook-box {
  display: inline-block;
  padding: 14px 28px;
  background: var(--bg-panel);
  border: 1px solid var(--border);
  backdrop-filter: blur(12px);
}
.hook-box p { font-size: 13px; color: var(--text-muted); letter-spacing: 0.05em; text-transform: uppercase; }

/* === PHONE DEMO === */
.demo-section { padding: 100px 0; border-bottom: 1px solid var(--border); }
.demo-header {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: flex-end;
  margin-bottom: 48px;
  gap: 20px;
}
.demo-tabs { display: flex; flex-wrap: wrap; gap: 8px; }
.demo-tab {
  padding: 10px 16px;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  border: 1px solid var(--border);
  background: transparent;
  color: var(--text-muted);
  cursor: pointer;
  transition: all 0.3s;
}
.demo-tab.active { background: var(--primary); border-color: var(--primary); color: white; }
.demo-tab:hover:not(.active) { border-color: var(--text-muted); color: var(--text); }

/* Phone Frame Horizontal */
.phone-frame {
  position: relative;
  max-width: 900px;
  margin: 0 auto;
  aspect-ratio: 16/9;
  background: #1a1a1a;
  border-radius: 40px;
  box-shadow: 0 0 0 6px #2a2a2a, 0 0 0 8px #3a3a3a, 0 20px 50px rgba(0,0,0,0.5);
  overflow: hidden;
}
.phone-island {
  position: absolute;
  left: 20px;
  top: 50%;
  transform: translateY(-50%);
  width: 28px;
  height: 100px;
  background: #000;
  border-radius: 999px;
  z-index: 50;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 10px;
}
.phone-island-dot { width: 10px; height: 10px; border-radius: 50%; background: #111; border: 1px solid #333; }
.phone-screen {
  position: relative;
  width: 100%;
  height: 100%;
  background: #000;
  border-radius: 34px;
  overflow: hidden;
  border: 3px solid #000;
}
.phone-screen video, .phone-screen img { width: 100%; height: 100%; object-fit: cover; transition: opacity 0.7s; }
.phone-screen.fading video, .phone-screen.fading img { opacity: 0.5; }

.phone-hud {
  position: absolute;
  inset: 0;
  padding: 24px;
  padding-left: 70px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  pointer-events: none;
}
.phone-hud-top { display: flex; justify-content: space-between; align-items: flex-start; }
.phone-rec {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 4px 10px;
  background: rgba(220,38,38,0.2);
  border: 1px solid #dc2626;
  color: #dc2626;
  font-size: 10px;
  font-family: monospace;
  border-radius: 999px;
}
.phone-rec-dot { width: 5px; height: 5px; background: #dc2626; border-radius: 50%; animation: pulse 1s infinite; }
.phone-cam { color: rgba(255,255,255,0.5); font-family: monospace; font-size: 10px; }
.phone-info {
  align-self: flex-start;
  max-width: 250px;
  padding: 14px;
  background: rgba(0,0,0,0.8);
  backdrop-filter: blur(12px);
  border-left: 2px solid var(--primary);
  border-radius: 0 6px 6px 0;
}
.phone-info h4 { color: var(--primary); font-size: 11px; font-weight: 700; text-transform: uppercase; margin-bottom: 4px; }
.phone-info p { color: var(--text-muted); font-size: 10px; line-height: 1.5; }
.phone-home {
  position: absolute;
  bottom: 6px;
  left: 50%;
  transform: translateX(-50%);
  width: 100px;
  height: 4px;
  background: rgba(255,255,255,0.2);
  border-radius: 999px;
}

/* === ZIGZAG === */
.zigzag-section { padding: 100px 0; border-bottom: 1px solid var(--border); }
.zigzag-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 48px;
  align-items: center;
  margin-bottom: 60px;
}
.zigzag-row:last-child { margin-bottom: 0; }
.zigzag-row.reverse { direction: rtl; }
.zigzag-row.reverse > * { direction: ltr; }
@media (max-width: 900px) { .zigzag-row, .zigzag-row.reverse { grid-template-columns: 1fr; direction: ltr; } }

.zigzag-img {
  position: relative;
  aspect-ratio: 16/10;
  overflow: hidden;
  border: 1px solid var(--border);
}
.zigzag-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  filter: grayscale(100%);
  transition: all 1.5s;
}
.zigzag-img:hover img { filter: grayscale(0%); transform: scale(1.08); }
.zigzag-img::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 28px;
  height: 28px;
  border-top: 1px solid var(--primary);
  border-left: 1px solid var(--primary);
  z-index: 10;
}
.zigzag-img::after {
  content: '';
  position: absolute;
  bottom: 0;
  right: 0;
  width: 28px;
  height: 28px;
  border-bottom: 1px solid var(--primary);
  border-right: 1px solid var(--primary);
  z-index: 10;
}
.zigzag-num {
  font-size: 56px;
  font-weight: 700;
  color: var(--text-muted);
  opacity: 0.12;
  line-height: 1;
  margin-bottom: -16px;
  font-family: monospace;
}
.zigzag-title {
  font-size: clamp(24px, 3vw, 36px);
  font-weight: 700;
  text-transform: uppercase;
  margin-bottom: 20px;
}
.zigzag-desc {
  font-size: 13px;
  color: var(--text-muted);
  line-height: 1.7;
  margin-bottom: 24px;
  padding-left: 20px;
  border-left: 1px solid var(--text-muted);
}
.zigzag-link {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--primary);
  transition: color 0.3s;
  cursor: pointer;
}
.zigzag-link:hover { color: var(--text); }

/* === PRODUCTS === */
.products-section {
  padding: 100px 0;
  background: var(--bg-alt);
  border-bottom: 1px solid var(--border);
}
.products-tabs {
  display: flex;
  justify-content: center;
  gap: 8px;
  padding: 28px 0;
  border-bottom: 1px solid var(--border);
}
.product-tab {
  padding: 10px 20px;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  background: transparent;
  border: 1px solid var(--border);
  color: var(--text-muted);
  cursor: pointer;
  transition: all 0.3s;
}
.product-tab.active { background: var(--primary); border-color: var(--primary); color: white; }

.product-showcase {
  display: grid;
  grid-template-columns: 1fr 1fr;
  min-height: 450px;
  border: 1px solid var(--border);
  background: var(--bg);
}
@media (max-width: 900px) { .product-showcase { grid-template-columns: 1fr; } }

.product-image { display: flex; align-items: center; justify-content: center; padding: 40px; }
.product-image img {
  max-width: 260px;
  max-height: 260px;
  object-fit: contain;
  filter: grayscale(100%);
  transition: filter 0.5s;
}
.product-image:hover img { filter: grayscale(0%); }

.product-info {
  padding: 40px 48px;
  border-left: 1px solid var(--border);
  display: flex;
  flex-direction: column;
  justify-content: center;
  background: var(--bg-alt);
}
.product-tagline {
  color: var(--primary);
  font-size: 10px;
  font-family: monospace;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  margin-bottom: 6px;
}
.product-name {
  font-size: clamp(24px, 3vw, 36px);
  font-weight: 700;
  text-transform: uppercase;
  margin-bottom: 20px;
}
.product-desc { font-size: 13px; color: var(--text-muted); line-height: 1.7; margin-bottom: 32px; }
.product-specs { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 32px; }
.product-spec { border-top: 1px solid var(--border); padding-top: 10px; }
.product-spec-label { font-size: 10px; color: var(--text-muted); text-transform: uppercase; font-weight: 700; margin-bottom: 4px; }
.product-spec-value { font-size: 13px; font-weight: 700; font-family: monospace; }

/* === APP SECTION === */
.app-section { padding: 140px 0 100px; border-bottom: 1px solid var(--border); }
.app-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 48px;
  align-items: center;
}
@media (max-width: 900px) { .app-grid { grid-template-columns: 1fr; } }

.app-content { order: 2; }
@media (max-width: 900px) { .app-content { order: 1; } }

.app-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 6px 12px;
  border: 1px solid var(--border);
  font-size: 10px;
  font-weight: 700;
  font-family: monospace;
  text-transform: uppercase;
  margin-bottom: 24px;
}
.app-title {
  font-size: clamp(28px, 4vw, 44px);
  font-weight: 700;
  text-transform: uppercase;
  line-height: 1.1;
  margin-bottom: 20px;
}
.app-title span { color: var(--primary); }
.app-desc {
  font-size: 13px;
  color: var(--text-muted);
  line-height: 1.7;
  max-width: 380px;
  margin-bottom: 32px;
  padding-left: 14px;
  border-left: 2px solid var(--text-muted);
}
.app-buttons { display: flex; gap: 12px; flex-wrap: wrap; }

.app-phone { order: 1; display: flex; justify-content: center; margin-top: -100px; }
@media (max-width: 900px) { .app-phone { order: 2; margin-top: 0; } }

.vertical-phone {
  position: relative;
  width: 260px;
  height: 540px;
  background: #0A0A0A;
  border-radius: 48px;
  border: 6px solid #1a1a1a;
  box-shadow: 0 20px 60px rgba(0,0,0,0.4);
  overflow: hidden;
}
.vertical-phone-island {
  position: absolute;
  top: 16px;
  left: 50%;
  transform: translateX(-50%);
  width: 90px;
  height: 28px;
  background: #000;
  border-radius: 999px;
  z-index: 50;
}
.vertical-phone-screen {
  position: relative;
  width: 100%;
  height: 100%;
  border-radius: 42px;
  overflow: hidden;
  background: var(--bg);
}
.vertical-phone-screen img { width: 100%; height: 100%; object-fit: cover; }
.vertical-phone-home {
  position: absolute;
  bottom: 6px;
  left: 50%;
  transform: translateX(-50%);
  width: 90px;
  height: 4px;
  background: rgba(255,255,255,0.5);
  border-radius: 999px;
}

/* === NEWS === */
.news-section { padding: 100px 0; border-bottom: 1px solid var(--border); }
.news-title {
  font-size: clamp(22px, 3vw, 28px);
  font-weight: 700;
  text-transform: uppercase;
  margin-bottom: 40px;
  padding-left: 14px;
  border-left: 4px solid var(--primary);
}
.news-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
}
@media (max-width: 900px) { .news-grid { grid-template-columns: 1fr; } }

.news-card { cursor: pointer; }
.news-img { height: 200px; overflow: hidden; margin-bottom: 20px; background: var(--bg-alt); }
.news-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  filter: grayscale(100%);
  transition: all 0.6s;
}
.news-card:hover .news-img img { filter: grayscale(0%); transform: scale(1.08); }
.news-cat {
  font-size: 10px;
  font-weight: 700;
  font-family: monospace;
  color: var(--primary);
  letter-spacing: 0.15em;
  text-transform: uppercase;
  margin-bottom: 8px;
}
.news-headline {
  font-size: 16px;
  font-weight: 700;
  text-transform: uppercase;
  line-height: 1.4;
  margin-bottom: 12px;
  transition: color 0.3s;
}
.news-card:hover .news-headline { color: var(--primary); }
.news-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 10px;
  font-weight: 700;
  color: var(--text-muted);
  text-transform: uppercase;
  letter-spacing: 0.1em;
  transition: color 0.3s;
}
.news-card:hover .news-link { color: var(--primary); }
</style>

<main class="cyber-main bg-tech-grid">

<!-- ═══════════════════════════════════════════════════════════════════
     SECTION 1: HERO SLIDER
═══════════════════════════════════════════════════════════════════ -->
<section class="hero-section">
  <div id="hero-slides">
    <div class="hero-slide active" data-slide="0">
      <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2069" alt="Hero 1">
      <div class="hero-overlay"></div>
    </div>
    <div class="hero-slide" data-slide="1">
      <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=2070" alt="Hero 2">
      <div class="hero-overlay"></div>
    </div>
  </div>
  
  <div class="hero-content">
    <div class="container">
      <div class="hero-inner">
        <div class="hero-tag btn-cut">
          <span class="hero-tag-dot"></span>
          <span id="hero-tagline">SYSTEM_ONLINE</span>
        </div>
        <h1 class="hero-title font-display" id="hero-title">KIẾN TẠO
TẦM NHÌN SỐ</h1>
        <p class="hero-desc" id="hero-desc">Giải pháp an ninh AI tiên phong, định hình lại cách thế giới quan sát và bảo vệ tài sản.</p>
        <div class="hero-ctas">
          <button class="btn btn-primary btn-cut">Khám phá <i data-lucide="arrow-right" class="w-4 h-4"></i></button>
          <button class="btn btn-outline btn-cut"><i data-lucide="play" class="w-4 h-4"></i> Demo Video</button>
        </div>
      </div>
    </div>
  </div>
  
  <div class="hero-nav">
    <div class="hero-counter">
      <span id="hero-current">01</span>
      <span class="text-muted">/ 02</span>
    </div>
    <div class="hero-arrows">
      <button class="hero-arrow btn-cut" id="hero-prev"><i data-lucide="chevron-left" class="w-4 h-4"></i></button>
      <button class="hero-arrow btn-cut" id="hero-next"><i data-lucide="chevron-right" class="w-4 h-4"></i></button>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════
     SECTION 2: CORE VALUES
═══════════════════════════════════════════════════════════════════ -->
<section class="values-section bg-tech-grid">
  <div class="container">
    <div class="values-header">
      <div>
        <p class="values-label">// CORE VALUES</p>
        <h2 class="values-title font-display">Công nghệ<br><span>Định hình tương lai</span></h2>
      </div>
      <div style="display:flex;align-items:center;gap:16px;">
        <div style="width:80px;height:1px;background:var(--border);"></div>
        <p class="t-xs text-muted">High Performance Security</p>
      </div>
    </div>
    
    <div class="values-grid">
      <?php
      $values = [
        ['icon' => 'aperture', 'title' => 'Siêu Thực', 'desc' => 'Cảm biến Sony Starvis 4K. Màu sắc sống động.', 'sub' => '01. SENSOR'],
        ['icon' => 'cloud', 'title' => 'Tốc Độ', 'desc' => 'Server tại Việt Nam. Truy xuất dữ liệu tức thì.', 'sub' => '02. CLOUD'],
        ['icon' => 'brain', 'title' => 'Trí Tuệ', 'desc' => 'AI Core tự học hỏi, phân biệt chính xác 99%.', 'sub' => '03. AI CORE'],
        ['icon' => 'award', 'title' => 'Đẳng Cấp', 'desc' => 'Dịch vụ hỗ trợ 5 sao 24/7. Bảo hành tại nhà.', 'sub' => '04. SERVICE'],
      ];
      foreach ($values as $v): ?>
      <div class="value-card cyber-cut">
        <div class="value-card-inner">
          <div class="value-card-top">
            <div class="value-icon"><i data-lucide="<?= $v['icon'] ?>" class="w-6 h-6"></i></div>
            <span class="value-sub"><?= $v['sub'] ?></span>
          </div>
          <div>
            <h3 class="value-title font-display"><?= $v['title'] ?></h3>
            <p class="value-desc"><?= $v['desc'] ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════
     SECTION 3: HOOK
═══════════════════════════════════════════════════════════════════ -->
<section class="hook-section">
  <div class="hook-content">
    <h2 class="hook-title font-display">AN NINH <span>CHỦ ĐỘNG</span></h2>
    <div class="hook-box btn-cut">
      <p>"Ngăn chặn sự cố trước khi nó xảy ra"</p>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════
     SECTION 4: PHONE DEMO
═══════════════════════════════════════════════════════════════════ -->
<section class="demo-section">
  <div class="container">
    <div class="demo-header">
      <div>
        <p class="values-label">// REAL-TIME DEMO</p>
        <h2 class="values-title font-display" style="font-size:clamp(24px,3vw,36px);">Tính năng thông minh</h2>
      </div>
      <div class="demo-tabs">
        <button class="demo-tab btn-cut active" data-tab="0">1. FaceID</button>
        <button class="demo-tab btn-cut" data-tab="1">2. Intrusion</button>
        <button class="demo-tab btn-cut" data-tab="2">3. Behavior</button>
        <button class="demo-tab btn-cut" data-tab="3">4. Heatmap</button>
      </div>
    </div>
    
    <div class="phone-frame cyber-cut">
      <div class="phone-island">
        <div class="phone-island-dot"></div>
        <div style="width:5px;height:5px;background:#080808;border-radius:50%;"></div>
      </div>
      <div class="phone-screen" id="phone-screen">
        <video src="https://videos.pexels.com/video-files/3252038/3252038-hd_1920_1080_25fps.mp4" poster="https://images.unsplash.com/photo-1563720223523-491ff04651de?q=80&w=2070" autoplay muted loop playsinline id="demo-video"></video>
        <div class="phone-hud">
          <div class="phone-hud-top">
            <div class="phone-rec"><span class="phone-rec-dot"></span> REC</div>
            <div class="phone-cam">CAM_01 // <span id="demo-time"></span></div>
          </div>
          <div class="phone-info">
            <h4 id="demo-feature-title">FaceID Recog</h4>
            <p id="demo-feature-desc">Nhận diện danh tính 99.8%</p>
          </div>
        </div>
        <div class="phone-home"></div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════
     SECTION 5: ZIGZAG FEATURES
═══════════════════════════════════════════════════════════════════ -->
<section class="zigzag-section">
  <div class="container">
    <div class="zigzag-row">
      <div class="zigzag-img cyber-cut">
        <img src="https://images.unsplash.com/photo-1510511459019-5dda7724fd87?q=80&w=2070" alt="Night Vision">
      </div>
      <div class="zigzag-content">
        <span class="zigzag-num">01</span>
        <h3 class="zigzag-title font-display">Night Vision Color</h3>
        <p class="zigzag-desc">Thách thức bóng đêm. Cảm biến Sony Starvis thế hệ mới mang lại hình ảnh màu sắc nét ngay cả ở 0.001 Lux.</p>
        <a class="zigzag-link">Technical Specs <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
      </div>
    </div>
    
    <div class="zigzag-row reverse">
      <div class="zigzag-img cyber-cut">
        <img src="https://images.unsplash.com/photo-1587855049254-351f400c4a86?q=80&w=1974" alt="Protection">
      </div>
      <div class="zigzag-content">
        <span class="zigzag-num">02</span>
        <h3 class="zigzag-title font-display">IP67 & IK10 Protection</h3>
        <p class="zigzag-desc">Bền bỉ như đá tảng. Thiết kế vỏ hợp kim nguyên khối chịu được va đập mạnh và thời tiết khắc nghiệt.</p>
        <a class="zigzag-link">Technical Specs <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════
     SECTION 6: PRODUCTS
═══════════════════════════════════════════════════════════════════ -->
<section class="products-section">
  <div class="container">
    <div style="text-align:center;margin-bottom:40px;">
      <p class="values-label">// ECOSYSTEM</p>
      <h2 class="values-title font-display">Hệ sinh thái <span>TavaVision</span></h2>
    </div>
    
    <div class="cyber-cut" style="background:var(--bg);border:1px solid var(--border);">
      <div class="products-tabs">
        <button class="product-tab btn-cut active" data-product="0">Tava AI Dome 5I</button>
        <button class="product-tab btn-cut" data-product="1">Tava AI Bullet 5I</button>
        <button class="product-tab btn-cut" data-product="2">Tava IQ3S Pro</button>
      </div>
      
      <div class="product-showcase">
        <div class="product-image bg-tech-grid">
          <img src="https://images.unsplash.com/photo-1558002038-1091773817a0?q=80&w=2070" alt="Product" id="product-img">
        </div>
        <div class="product-info">
          <p class="product-tagline" id="product-tagline">Refined Aesthetics</p>
          <h3 class="product-name font-display" id="product-name">Tava AI Dome 5I</h3>
          <p class="product-desc" id="product-desc">Thiết kế mái vòm tối giản. Sức mạnh AI ẩn giấu bên trong vẻ ngoài thanh lịch.</p>
          <div class="product-specs" id="product-specs">
            <div class="product-spec"><p class="product-spec-label">Lens</p><p class="product-spec-value">3.6 mm Fixed</p></div>
            <div class="product-spec"><p class="product-spec-label">Resolution</p><p class="product-spec-value">5MP Super HD</p></div>
            <div class="product-spec"><p class="product-spec-label">Protection</p><p class="product-spec-value">IP67 / IK10</p></div>
            <div class="product-spec"><p class="product-spec-label">Night Vision</p><p class="product-spec-value">30m Smart IR</p></div>
          </div>
          <button class="btn btn-white btn-cut">Tải Datasheet</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════
     SECTION 7: APP
═══════════════════════════════════════════════════════════════════ -->
<section class="app-section">
  <div class="container">
    <div class="app-grid">
      <div class="app-phone">
        <div class="vertical-phone">
          <div class="vertical-phone-island"></div>
          <div class="vertical-phone-screen">
            <img src="https://proce.vn/wp-content/uploads/2025/03/phong-hop-phong-chu-tich-1.jpg" alt="App">
            <div class="vertical-phone-home"></div>
          </div>
        </div>
      </div>
      <div class="app-content">
        <div class="app-badge"><i data-lucide="smartphone" class="w-4 h-4"></i> Mobile Control</div>
        <h2 class="app-title font-display">Quyền lực trong <span>Tầm tay</span></h2>
        <p class="app-desc">Kiểm soát toàn bộ hệ thống an ninh, nhận thông báo tức thì và xem lại lịch sử mọi lúc mọi nơi chỉ với một chạm.</p>
        <div class="app-buttons">
          <button class="btn btn-white btn-cut">App Store</button>
          <button class="btn btn-outline btn-cut">Google Play</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════
     SECTION 8: NEWS
═══════════════════════════════════════════════════════════════════ -->
<section class="news-section">
  <div class="container">
    <h2 class="news-title font-display">Tin tức & Sự kiện</h2>
    <div class="news-grid">
      <?php for ($i = 1; $i <= 3; $i++): ?>
      <article class="news-card">
        <div class="news-img cyber-cut">
          <img src="https://picsum.photos/seed/<?= 50 + $i ?>/800/600" alt="News">
        </div>
        <p class="news-cat">Technology</p>
        <h3 class="news-headline font-display">Giải pháp Camera AI cho chuỗi bán lẻ: Tối ưu vận hành</h3>
        <a class="news-link">Đọc tiếp <i data-lucide="chevron-right" class="w-3 h-3"></i></a>
      </article>
      <?php endfor; ?>
    </div>
  </div>
</section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Initialize Lucide
  if (typeof lucide !== 'undefined') lucide.createIcons();
  
  // Hero Slider
  const slides = [
    { tagline: 'SYSTEM_ONLINE', title: 'KIẾN TẠO\nTẦM NHÌN SỐ', desc: 'Giải pháp an ninh AI tiên phong, định hình lại cách thế giới quan sát và bảo vệ tài sản.' },
    { tagline: 'AI_CORE_ACTIVE', title: 'TRÍ TUỆ\nNHÂN TẠO LÕI', desc: 'Sức mạnh xử lý vượt trội tại biên (Edge Computing) với độ trễ xử lý gần như bằng không.' }
  ];
  let currentSlide = 0;
  const heroSlides = document.querySelectorAll('.hero-slide');
  
  function updateSlide(idx) {
    heroSlides.forEach((s, i) => s.classList.toggle('active', i === idx));
    document.getElementById('hero-tagline').textContent = slides[idx].tagline;
    document.getElementById('hero-title').textContent = slides[idx].title;
    document.getElementById('hero-desc').textContent = slides[idx].desc;
    document.getElementById('hero-current').textContent = String(idx + 1).padStart(2, '0');
  }
  
  document.getElementById('hero-next').onclick = () => { currentSlide = (currentSlide + 1) % slides.length; updateSlide(currentSlide); };
  document.getElementById('hero-prev').onclick = () => { currentSlide = (currentSlide - 1 + slides.length) % slides.length; updateSlide(currentSlide); };
  
  // Demo Tabs
  const demoData = [
    { title: 'FaceID Recog', desc: 'Nhận diện danh tính 99.8%', video: 'https://videos.pexels.com/video-files/3252038/3252038-hd_1920_1080_25fps.mp4' },
    { title: 'Intrusion Alert', desc: 'Cảnh báo vùng cấm tức thì', video: 'https://videos.pexels.com/video-files/855564/855564-hd_1920_1080_30fps.mp4' },
    { title: 'Behavior Analysis', desc: 'Phân tích hành vi bất thường', video: 'https://videos.pexels.com/video-files/3205626/3205626-hd_1920_1080_25fps.mp4' },
    { title: 'Heatmap Data', desc: 'Vẽ bản đồ nhiệt mật độ', video: 'https://videos.pexels.com/video-files/3129671/3129671-hd_1920_1080_30fps.mp4' }
  ];
  
  document.querySelectorAll('.demo-tab').forEach(tab => {
    tab.onclick = function() {
      const idx = parseInt(this.dataset.tab);
      document.querySelectorAll('.demo-tab').forEach(t => t.classList.remove('active'));
      this.classList.add('active');
      document.getElementById('demo-feature-title').textContent = demoData[idx].title;
      document.getElementById('demo-feature-desc').textContent = demoData[idx].desc;
      document.getElementById('demo-video').src = demoData[idx].video;
    };
  });
  
  // Update time
  setInterval(() => {
    const timeEl = document.getElementById('demo-time');
    if (timeEl) timeEl.textContent = new Date().toLocaleTimeString();
  }, 1000);
  
  // Product Tabs
  const products = [
    { name: 'Tava AI Dome 5I', tagline: 'Refined Aesthetics', desc: 'Thiết kế mái vòm tối giản. Sức mạnh AI ẩn giấu bên trong vẻ ngoài thanh lịch.', img: 'https://images.unsplash.com/photo-1558002038-1091773817a0?q=80&w=2070', specs: [['Lens','3.6 mm Fixed'],['Resolution','5MP Super HD'],['Protection','IP67 / IK10'],['Night Vision','30m Smart IR']] },
    { name: 'Tava AI Bullet 5I', tagline: 'Outdoor Warrior', desc: 'Hợp kim hàng không nguyên khối. Bền bỉ trước mọi điều kiện thời tiết khắc nghiệt.', img: 'https://images.unsplash.com/photo-1587855049254-351f400c4a86?q=80&w=1974', specs: [['Lens','4.0 mm Pro'],['Resolution','5MP Super HD'],['Protection','IP67 Metal'],['Night Vision','50m Matrix IR']] },
    { name: 'Tava IQ3S Pro', tagline: 'The Flagship', desc: 'Tích hợp Neural Processing Unit (NPU) riêng biệt. Khả năng học sâu thích nghi môi trường.', img: 'https://images.unsplash.com/photo-1563986768609-322da13575f3?q=80&w=1470', specs: [['Lens','4x Optical Zoom'],['Resolution','4K Ultra HD'],['Protection','IP68 / IK10+'],['Night Vision','80m Laser']] }
  ];
  
  document.querySelectorAll('.product-tab').forEach(tab => {
    tab.onclick = function() {
      const idx = parseInt(this.dataset.product);
      document.querySelectorAll('.product-tab').forEach(t => t.classList.remove('active'));
      this.classList.add('active');
      const p = products[idx];
      document.getElementById('product-name').textContent = p.name;
      document.getElementById('product-tagline').textContent = p.tagline;
      document.getElementById('product-desc').textContent = p.desc;
      document.getElementById('product-img').src = p.img;
      const specsEl = document.getElementById('product-specs');
      specsEl.innerHTML = p.specs.map(s => `<div class="product-spec"><p class="product-spec-label">${s[0]}</p><p class="product-spec-value">${s[1]}</p></div>`).join('');
    };
  });
});
</script>

<?php get_footer(); ?>
