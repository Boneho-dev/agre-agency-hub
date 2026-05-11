<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ange-Kevin Agre — CEO, Agre Agency</title>
    <meta name="description" content="Ange-Kevin Agre — Entrepreneur & Expert en Transformation Digitale. Fondateur d'Agre Agency, Angers | Toulouse.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        /* ─── BASE ──────────────────────────────────────────── */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            cursor: none;
        }

        body {
            font-family: 'Lexend', sans-serif;
            background: #ffffff;
            color: #0a0a0a;
            overflow-x: hidden;
        }

        /* ─── CUSTOM CURSOR ────────────────────────────────── */
        #c-dot {
            position: fixed;
            top: 0;
            left: 0;
            width: 7px;
            height: 7px;
            background: #E11D48;
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            transform: translate(-50%, -50%);
            transition: width .18s, height .18s, background .18s;
            will-change: left, top;
        }

        #c-ring {
            position: fixed;
            top: 0;
            left: 0;
            width: 40px;
            height: 40px;
            border: 2px solid rgba(225, 29, 72, 0.55);
            border-radius: 50%;
            pointer-events: none;
            z-index: 9998;
            transform: translate(-50%, -50%);
            transition:
                width .4s cubic-bezier(.16, 1, .3, 1),
                height .4s cubic-bezier(.16, 1, .3, 1),
                border-color .3s, background .3s;
            will-change: left, top;
        }

        /* Trail elements */
        .c-trail {
            position: fixed;
            top: 0;
            left: 0;
            border-radius: 50%;
            pointer-events: none;
            z-index: 9997;
            transform: translate(-50%, -50%);
            background: rgba(225, 29, 72, 0.13);
            mix-blend-mode: multiply;
            /* lisible sur fond blanc ET texte noir */
            will-change: left, top;
        }

        body.is-hovering #c-ring {
            width: 68px;
            height: 68px;
            border-color: rgba(225, 29, 72, 0.45);
            background: rgba(225, 29, 72, 0.055);
        }

        body.is-hovering #c-dot {
            width: 5px;
            height: 5px;
        }

        /* ─── FADE-UP ──────────────────────────────────────── */
        .fu {
            opacity: 0;
            transform: translateY(26px);
            animation: fade-up .7s cubic-bezier(.22, 1, .36, 1) forwards;
        }

        @keyframes fade-up {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .d1 {
            animation-delay: .06s
        }

        .d2 {
            animation-delay: .16s
        }

        .d3 {
            animation-delay: .28s
        }

        .d4 {
            animation-delay: .4s
        }

        .d5 {
            animation-delay: .52s
        }

        .d6 {
            animation-delay: .66s
        }

        .d7 {
            animation-delay: .8s
        }

        .d8 {
            animation-delay: .96s
        }

        .d9 {
            animation-delay: 1.12s
        }

        /* ─── STATUS BADGE ─────────────────────────────────── */
        .badge-live {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 9px;
            font-weight: 700;
            letter-spacing: .18em;
            text-transform: uppercase;
            padding: 4px 12px;
            border-radius: 100px;
            background: rgba(225, 29, 72, .07);
            border: 1px solid rgba(225, 29, 72, .22);
            color: #E11D48;
        }

        .badge-dot {
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: #E11D48;
            animation: pulse-d 2.2s ease-in-out infinite;
        }

        @keyframes pulse-d {

            0%,
            100% {
                opacity: 1;
                transform: scale(1)
            }

            50% {
                opacity: .4;
                transform: scale(.75)
            }
        }

        /* In-progress badge */
        .badge-wip {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-size: 8.5px;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
            padding: 3px 10px;
            border-radius: 100px;
            background: #fff7ed;
            border: 1px solid #fed7aa;
            color: #ea580c;
            animation: wip-glow 2.6s ease-in-out infinite;
        }

        @keyframes wip-glow {

            0%,
            100% {
                box-shadow: 0 0 0 0 rgba(234, 88, 12, 0);
                background: #fff7ed;
            }

            50% {
                box-shadow: 0 0 0 5px rgba(234, 88, 12, .08);
                background: #ffedd5;
            }
        }

        .badge-wip-dot {
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: #ea580c;
            animation: pulse-d 1.6s ease-in-out infinite;
        }

        /* ─── NAV ──────────────────────────────────────────── */
        .nav-a {
            position: relative;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .18em;
            text-transform: uppercase;
            color: #6b7280;
            text-decoration: none;
            transition: color .25s;
        }

        .nav-a::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            right: 0;
            height: 1.5px;
            background: #E11D48;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform .28s;
        }

        .nav-a:hover {
            color: #0a0a0a;
        }

        .nav-a:hover::after {
            transform: scaleX(1);
        }

        /* ─── CTA BUTTON ───────────────────────────────────── */
        .btn-red {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 14px 28px;
            border-radius: 100px;
            font-size: 10.5px;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
            background: #E11D48;
            color: #fff;
            text-decoration: none;
            box-shadow: 0 8px 28px -6px rgba(225, 29, 72, .45);
            transition: all .3s cubic-bezier(.22, 1, .36, 1);
        }

        .btn-red:hover {
            background: #be123c;
            box-shadow: 0 14px 36px -8px rgba(225, 29, 72, .55);
            transform: translateY(-2px);
        }

        .btn-red svg {
            transition: transform .28s;
        }

        .btn-red:hover svg {
            transform: translateX(4px);
        }

        .btn-outline {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
            color: #6b7280;
            text-decoration: none;
            transition: color .25s;
        }

        .btn-outline:hover {
            color: #0a0a0a;
        }

        /* ─── MARQUEE ──────────────────────────────────────── */
        .marquee-wrap {
            overflow: hidden;
            overflow-x: hidden;
            /* anti-scroll horizontal sur mobile */
            width: 100%;
            border-top: 1px solid #f1f1f1;
            border-bottom: 1px solid #f1f1f1;
            background: #fafafa;
            padding: 18px 0;
            /* Fondu sur les bords gauche et droit */
            -webkit-mask-image: linear-gradient(to right,
                    transparent 0%,
                    #000 10%,
                    #000 90%,
                    transparent 100%);
            mask-image: linear-gradient(to right,
                    transparent 0%,
                    #000 10%,
                    #000 90%,
                    transparent 100%);
        }

        .marquee-track {
            display: flex;
            gap: 0;
            animation: marquee-scroll 22s linear infinite;
            white-space: nowrap;
        }

        .marquee-track:hover {
            animation-play-state: paused;
        }

        .marquee-item {
            display: inline-flex;
            align-items: center;
            gap: 32px;
            padding: 0 40px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .22em;
            text-transform: uppercase;
            color: #9ca3af;
            flex-shrink: 0;
        }

        .marquee-item span {
            color: #E11D48;
            font-size: 16px;
            line-height: 1;
        }

        @keyframes marquee-scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* ─── SECTION LABEL ────────────────────────────────── */
        .section-label {
            font-size: 9.5px;
            font-weight: 700;
            letter-spacing: .28em;
            text-transform: uppercase;
            color: #E11D48;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-label::before {
            content: '';
            display: block;
            width: 28px;
            height: 1.5px;
            background: #E11D48;
        }

        /* ─── PROJECT CARDS ────────────────────────────────── */
        .p-card {
            background: #fff;
            border: 1px solid #f3f4f6;
            border-radius: 20px;
            padding: 36px;
            display: flex;
            flex-direction: column;
            transition:
                box-shadow .4s cubic-bezier(.22, 1, .36, 1),
                transform .4s cubic-bezier(.22, 1, .36, 1),
                border-color .4s cubic-bezier(.22, 1, .36, 1);
            box-shadow: 0 2px 12px rgba(0, 0, 0, .05);
        }

        .p-card:hover {
            box-shadow: 0 24px 60px -16px rgba(0, 0, 0, .14), 0 0 0 1.5px #E11D48;
            border-color: #E11D48;
            transform: translateY(-8px);
        }

        /* Card icon */
        .p-icon {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform .3s, filter .3s;
        }

        .p-card:hover .p-icon {
            transform: scale(1.08);
            filter: brightness(1.1);
        }

        .p-icon svg {
            transition: transform .28s;
        }

        /* Card link */
        .c-link {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            font-size: 9.5px;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
            text-decoration: none;
            transition: gap .28s, color .25s;
        }

        .c-link svg {
            transition: transform .28s;
        }

        .c-link:hover {
            gap: 13px;
        }

        .c-link:hover svg {
            transform: translateX(3px);
        }

        /* Tech tags */
        .tech-tag {
            font-size: 8px;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            padding: 3px 9px;
            border-radius: 5px;
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            color: #6b7280;
            transition: border-color .25s, color .25s;
        }

        .p-card:hover .tech-tag {
            border-color: rgba(225, 29, 72, .2);
            color: #be123c;
            background: rgba(225, 29, 72, .04);
        }

        /* ─── DIVIDER ───────────────────────────────────────── */
        .hr {
            height: 1px;
            background: #f3f4f6;
        }

        /* ─── STATS ─────────────────────────────────────────── */
        .stat-n {
            font-size: 2.6rem;
            font-weight: 800;
            line-height: 1;
            color: #0a0a0a;
        }

        .stat-n span {
            color: #E11D48;
        }

        /* ─── FOOTER ─────────────────────────────────────────── */
        .footer-hr {
            height: 1px;
            background: #f3f4f6;
        }

        /* ─── RESPONSIVE : masque curseur sur tactile ────────── */
        @media (hover: none),
        (pointer: coarse) {
            html {
                cursor: auto !important;
            }

            #c-dot,
            #c-ring,
            .c-trail {
                display: none !important;
            }
        }
    </style>
</head>

<body class="antialiased min-h-screen">

    <!-- Custom Cursor -->
    <div id="c-dot"></div>
    <div id="c-ring"></div>
    <!-- Trail dots (3 ghosts) -->
    <div class="c-trail" id="t1" style="width:18px;height:18px;"></div>
    <div class="c-trail" id="t2" style="width:11px;height:11px;opacity:.7;"></div>
    <div class="c-trail" id="t3" style="width:6px;height:6px;opacity:.45;"></div>

    <!-- ── NAV ─────────────────────────────────────────────── -->
    <nav class="max-w-7xl mx-auto px-6 md:px-8 py-7 flex justify-between items-center fu d1">
        <div class="flex items-center gap-4">
            <span class="font-black text-xl tracking-tight text-black">
                AK<span style="color:#E11D48;">.</span>AGRE
            </span>
            <div class="badge-live">
                <span class="badge-dot"></span>
                Disponible
            </div>
        </div>
        <div class="flex items-center gap-8">
            <a href="/portfolio/" class="nav-a c-hover">Portfolio</a>
            <a href="mailto:agreangekevin@gmail.com" class="nav-a c-hover">Contact</a>
        </div>
    </nav>

    <!-- ── HERO ─────────────────────────────────────────────── -->
    <header class="max-w-7xl mx-auto px-6 md:px-8 pt-14 pb-20">

        <p class="text-[10px] font-bold tracking-[.3em] uppercase mb-6 fu d2" style="color:#9ca3af;">
            Angers &nbsp;|&nbsp; Toulouse
        </p>

        <h1 class="font-black leading-[.9] tracking-tight text-black mb-10 fu d3"
            style="font-size: clamp(2.4rem, 8vw, 7.5rem);">
            <span class="block">Ange-Kevin</span>
            <span class="block" style="color:#E11D48;">Agre</span>
        </h1>

        <div class="max-w-3xl mb-12 fu d4">
            <p class="text-sm md:text-base lg:text-lg leading-relaxed font-light" style="color:#374151;">
                <strong class="font-semibold text-black">ANGE-KEVIN AGRE</strong> est un
                <strong style="font-weight:600;color:#E11D48;">entrepreneur</strong> et
                <strong style="font-weight:600;color:#E11D48;">développeur fullstack</strong>.
                Fondateur d' <strong style="font-weight:600;color:#E11D48;">Agre Agency</strong>,
                mon objectif est d'accompagner entreprises et particuliers en livrant des
                <strong style="font-weight:600;color:#E11D48;">applications robustes</strong>,
                <strong style="font-weight:600;color:#E11D48;">sécurisées</strong> et prêtes pour les défis de demain.
                J'allie <strong style="font-weight:600;color:#E11D48;">rigueur technique</strong> et
                <strong style="font-weight:600;color:#E11D48;">intégration active de l'IA</strong>
                pour créer de la valeur concrète dans chaque projet.
            </p>
        </div>

        <div class="flex flex-wrap items-center gap-5 fu d5">
            <a href="mailto:agreangekevin@gmail.com" class="btn-red c-hover">
                Engager une collaboration
                <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
            <a href="/portfolio/" class="btn-outline c-hover">
                Voir le portfolio
                <svg width="13" height="13" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>

    </header>

    <!-- ── MARQUEE ──────────────────────────────────────────── -->
    <div class="marquee-wrap fu d5">
        <div class="marquee-track">
            <!-- Duplicated for seamless loop -->
            <div class="marquee-item">PHP <span>·</span> MYSQL <span>·</span> TAILWIND <span>·</span> JAVASCRIPT <span>·</span> AI <span>·</span> FULLSTACK <span>·</span> REACT <span>·</span> NODE.JS <span>·</span> RAILWAY <span>·</span> PWA <span>·</span></div>
            <div class="marquee-item">PHP <span>·</span> MYSQL <span>·</span> TAILWIND <span>·</span> JAVASCRIPT <span>·</span> AI <span>·</span> FULLSTACK <span>·</span> REACT <span>·</span> NODE.JS <span>·</span> RAILWAY <span>·</span> PWA <span>·</span></div>
            <div class="marquee-item">PHP <span>·</span> MYSQL <span>·</span> TAILWIND <span>·</span> JAVASCRIPT <span>·</span> AI <span>·</span> FULLSTACK <span>·</span> REACT <span>·</span> NODE.JS <span>·</span> RAILWAY <span>·</span> PWA <span>·</span></div>
            <div class="marquee-item">PHP <span>·</span> MYSQL <span>·</span> TAILWIND <span>·</span> JAVASCRIPT <span>·</span> AI <span>·</span> FULLSTACK <span>·</span> REACT <span>·</span> NODE.JS <span>·</span> RAILWAY <span>·</span> PWA <span>·</span></div>
        </div>
    </div>

    <!-- ── STATS ─────────────────────────────────────────────── -->
    <div class="max-w-7xl mx-auto px-6 md:px-8 py-16 fu d6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-0 divide-x divide-gray-100">
            <div class="px-8 first:pl-0">
                <div class="stat-n">3<span>+</span></div>
                <p class="text-[10px] font-bold tracking-widest uppercase mt-2" style="color:#9ca3af;">Projets actifs</p>
            </div>
            <div class="px-8">
                <div class="stat-n">Full<span>.</span></div>
                <p class="text-[10px] font-bold tracking-widest uppercase mt-2" style="color:#9ca3af;">Stack maîtrisé</p>
            </div>
            <div class="px-8">
                <div class="stat-n">IA<span>+</span></div>
                <p class="text-[10px] font-bold tracking-widest uppercase mt-2" style="color:#9ca3af;">Intégration active</p>
            </div>
            <div class="px-8">
                <div class="stat-n">'26<span>.</span></div>
                <p class="text-[10px] font-bold tracking-widest uppercase mt-2" style="color:#9ca3af;">En activité</p>
            </div>
        </div>
    </div>

    <!-- Separator -->
    <div class="max-w-7xl mx-auto px-6 md:px-8">
        <div class="hr"></div>
    </div>

    <!-- ── PROJECTS ──────────────────────────────────────────── -->
    <main class="max-w-7xl mx-auto px-6 md:px-8 py-20">

        <!-- Section label -->
        <div class="flex items-center justify-between mb-12 fu d6">
            <div>
                <div class="section-label mb-3">Piliers & Projets</div>
                <h2 class="text-3xl md:text-4xl font-bold text-black tracking-tight">
                    Agre Agency bâtit des produits <span style="color:#E11D48;">qui durent.</span>
                </h2>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- ─ Card 1 : Custom Wear ─────────────────────── -->
            <div class="p-card c-hover fu d6">
                <div class="flex items-start justify-between mb-8">
                    <div class="p-icon" style="background:#fef2f2; border:1px solid #fecaca;">
                        <svg class="w-6 h-6" style="color:#E11D48;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                    </div>
                    <span class="text-[9px] font-bold tracking-[.2em] uppercase" style="color:#d1d5db;">01 / 05</span>
                </div>

                <h3 class="text-xl font-bold text-black mb-3 tracking-tight">Custom Wear</h3>
                <p class="text-sm leading-relaxed mb-6 flex-grow font-light" style="color:#6b7280;">
                    Agre Agency déploie une plateforme e-commerce haut de gamme pour la mode enfantine —
                    architecture robuste, expérience d'achat premium.
                </p>

                <div class="flex flex-wrap gap-2 mb-7">
                    <span class="tech-tag">E-commerce</span>
                    <span class="tech-tag">Railway</span>
                    <span class="tech-tag">Fullstack</span>
                </div>

                <div class="hr mb-6"></div>

                <a href="/custom/" class="c-link c-hover" style="color:#E11D48;">
                    Accéder au projet
                    <svg width="13" height="13" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            <!-- ─ Card 2 : Fitness Tracker ───────────────────── -->
            <div class="p-card c-hover fu d7">
                <div class="flex items-start justify-between mb-8">
                    <div class="p-icon" style="background:#fef2f2; border:1px solid #fecaca;">
                        <svg class="w-6 h-6" style="color:#E11D48;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    <span class="text-[9px] font-bold tracking-[.2em] uppercase" style="color:#d1d5db;">02 / 05</span>
                </div>

                <h3 class="text-xl font-bold text-black mb-3 tracking-tight">Fitness Tracker</h3>
                <p class="text-sm leading-relaxed mb-6 flex-grow font-light" style="color:#6b7280;">
                    Agre Agency conçoit une PWA de suivi d'entraînement et de réseau social sportif —
                    performance native, communauté engagée.
                </p>

                <div class="flex flex-wrap gap-2 mb-7">
                    <span class="tech-tag">PWA</span>
                    <span class="tech-tag">Social</span>
                    <span class="tech-tag">Sport</span>
                </div>

                <div class="hr mb-6"></div>

                <a href="/fitness/" class="c-link c-hover" style="color:#E11D48;">
                    Accéder au projet
                    <svg width="13" height="13" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            <!-- ─ Card 3 : Portfolio ──────────────────────────── -->
            <div class="p-card c-hover fu d8">
                <div class="flex items-start justify-between mb-8">
                    <div class="p-icon" style="background:#fef2f2; border:1px solid #fecaca;">
                        <svg class="w-6 h-6" style="color:#E11D48;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                    <span class="text-[9px] font-bold tracking-[.2em] uppercase" style="color:#d1d5db;">03 / 05</span>
                </div>

                <h3 class="text-xl font-bold text-black mb-3 tracking-tight">Portfolio Pro</h3>
                <p class="text-sm leading-relaxed mb-6 flex-grow font-light" style="color:#6b7280;">
                    Ange-Kevin Agre expose son identité numérique, ses compétences et ses projets —
                    vitrine conçue pour séduire les recruteurs.
                </p>

                <div class="flex flex-wrap gap-2 mb-7">
                    <span class="tech-tag">Design</span>
                    <span class="tech-tag">Identité</span>
                    <span class="tech-tag">Fullstack</span>
                </div>

                <div class="hr mb-6"></div>

                <a href="/portfolio/" class="c-link c-hover" style="color:#E11D48;">
                    Accéder au projet
                    <svg width="13" height="13" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            <!-- ─ Card 4 : FacturePro ────────────────────────── -->
            <div class="p-card c-hover fu d9">
                <div class="flex items-start justify-between mb-8">
                    <div class="p-icon" style="background:#fef2f2; border:1px solid #fecaca;">
                        <svg class="w-6 h-6" style="color:#E11D48;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <span class="text-[9px] font-bold tracking-[.2em] uppercase" style="color:#d1d5db;">04 / 05</span>
                </div>

                <h3 class="text-xl font-bold text-black mb-3 tracking-tight">FacturePro</h3>
                <p class="text-sm leading-relaxed mb-6 flex-grow font-light" style="color:#6b7280;">
                    SaaS de facturation pour auto-entrepreneurs français. Créez des factures et devis aux normes françaises.
                </p>

                <div class="flex flex-wrap gap-2 mb-7">
                    <span class="tech-tag">Supabase</span>
                    <span class="tech-tag">React</span>
                    <span class="tech-tag">SaaS</span>
                </div>

                <div class="hr mb-6"></div>

                <a href="https://agre.page.gd/facture" class="c-link c-hover" style="color:#E11D48;" target="_blank" rel="noopener">
                    Accéder au projet
                    <svg width="13" height="13" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            <!-- ─ Card 5 : En cours ───────────────────────────── -->
            <div class="p-card c-hover fu d9" style="border-style: dashed; border-color: #e5e7eb;">
                <div class="flex items-start justify-between mb-8">
                    <div class="p-icon" style="background:#f9fafb; border:1px dashed #d1d5db;">
                        <svg class="w-6 h-6" style="color:#9ca3af;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                    </div>
                    <span class="text-[9px] font-bold tracking-[.2em] uppercase" style="color:#d1d5db;">05 / 05</span>
                </div>

                <div class="mb-4">
                    <div class="badge-wip mb-4">
                        <span class="badge-wip-dot"></span>
                        Développement
                    </div>
                    <h3 class="text-xl font-bold text-black mb-3 tracking-tight">Projet 5 — Développement</h3>
                </div>

                <p class="text-sm leading-relaxed mb-6 flex-grow font-light" style="color:#9ca3af;">
                    Agre Agency conçoit un nouveau SaaS minimaliste — conception en cours, lancement imminent.
                </p>

                <div class="flex flex-wrap gap-2 mb-7">
                    <span class="tech-tag">En cours</span>
                    <span class="tech-tag">2026</span>
                </div>

                <div class="hr mb-6"></div>

                <span class="text-[9.5px] font-bold tracking-[.16em] uppercase" style="color:#d1d5db;">
                    Bientôt disponible
                </span>
            </div>

        </div>
    </main>

    <!-- ── FOOTER ────────────────────────────────────────────── -->
    <footer class="max-w-7xl mx-auto px-6 md:px-8 pb-12">
        <div class="footer-hr mb-10"></div>
        <div class="flex flex-col md:flex-row justify-between items-center gap-4">
            <span class="font-black text-xl tracking-tight text-black">
                AK<span style="color:#E11D48;">.</span>AGRE
            </span>
            <p class="text-[9px] font-bold tracking-[.4em] uppercase" style="color:#d1d5db;">
                &copy; 2026 Agre Agency &bull; Angers | Toulouse
            </p>
            <a href="mailto:agreangekevin@gmail.com"
                class="text-[9px] font-bold tracking-[.2em] uppercase transition-colors c-hover"
                style="color:#9ca3af;"
                onmouseover="this.style.color='#E11D48'" onmouseout="this.style.color='#9ca3af'">
                agreangekevin@gmail.com
            </a>
        </div>
    </footer>

    <!-- ── CURSOR SCRIPT ─────────────────────────────────────── -->
    <script>
        /* Désactivation complète sur écrans tactiles (mobile/tablette) */
        const isTouch = window.matchMedia('(hover: none), (pointer: coarse)').matches;

        if (!isTouch) {
            const dot = document.getElementById('c-dot');
            const ring = document.getElementById('c-ring');
            const t1 = document.getElementById('t1');
            const t2 = document.getElementById('t2');
            const t3 = document.getElementById('t3');

            let mx = 0,
                my = 0;
            let rx = 0,
                ry = 0;
            let tx1 = 0,
                ty1 = 0;
            let tx2 = 0,
                ty2 = 0;
            let tx3 = 0,
                ty3 = 0;

            const easeRing = 0.10;
            const easeTrail1 = 0.07;
            const easeTrail2 = 0.05;
            const easeTrail3 = 0.035;

            document.addEventListener('mousemove', e => {
                mx = e.clientX;
                my = e.clientY;
                dot.style.left = mx + 'px';
                dot.style.top = my + 'px';
            });

            (function loop() {
                rx += (mx - rx) * easeRing;
                ry += (my - ry) * easeRing;
                tx1 += (mx - tx1) * easeTrail1;
                ty1 += (my - ty1) * easeTrail1;
                tx2 += (mx - tx2) * easeTrail2;
                ty2 += (my - ty2) * easeTrail2;
                tx3 += (mx - tx3) * easeTrail3;
                ty3 += (my - ty3) * easeTrail3;

                ring.style.left = rx + 'px';
                ring.style.top = ry + 'px';
                t1.style.left = tx1 + 'px';
                t1.style.top = ty1 + 'px';
                t2.style.left = tx2 + 'px';
                t2.style.top = ty2 + 'px';
                t3.style.left = tx3 + 'px';
                t3.style.top = ty3 + 'px';

                requestAnimationFrame(loop);
            })();

            document.querySelectorAll('.c-hover, a, button').forEach(el => {
                el.addEventListener('mouseenter', () => document.body.classList.add('is-hovering'));
                el.addEventListener('mouseleave', () => document.body.classList.remove('is-hovering'));
            });
        }
    </script>

</body>

</html>