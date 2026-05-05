@extends('layouts.app')
@section('page_style')
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(8px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section {
            padding: 80px 6%;
        }

        .section-sm {
            padding: 52px 6%;
        }

        .lbl {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            margin-bottom: 12px;
            display: block;
        }

        .h1 {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(52px, 7vw, 96px);
            font-weight: 700;
            line-height: .95;
            letter-spacing: -2px;
        }

        .h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(32px, 4vw, 52px);
            font-weight: 700;
            line-height: 1.15;
        }

        .h3 {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(22px, 2.5vw, 32px);
            font-weight: 700;
            line-height: 1.2;
        }

        .body-text {
            font-size: 16px;
            font-weight: 300;
            line-height: 1.8;
            color: #7A6E68;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 13px 28px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            font-family: 'Jost', sans-serif;
            cursor: pointer;
            border: none;
            transition: all .2s;
        }

        .btn-dark {
            background: #1A1210;
            color: #FAF7F2;
        }

        .btn-dark:hover {
            background: #8B4A32;
        }

        .btn-outline {
            background: transparent;
            border: 1.5px solid currentColor;
        }

        .btn-outline:hover {
            background: rgba(0, 0, 0, .05);
        }

        .btn-white {
            background: #FAF7F2;
            color: #1A1210;
        }

        .btn-white:hover {
            background: #fff;
        }

        /* Palette swatch strip */
        .swatch-strip {
            display: flex;
            height: 10px;
            border-radius: 5px;
            overflow: hidden;
            gap: 2px;
        }

        .swatch-strip span {
            flex: 1;
            border-radius: 2px;
        }

        /* Colour grid */
        .color-grid {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .cswatch {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            flex-shrink: 0;
            position: relative;
            cursor: pointer;
            transition: transform .15s;
        }

        .cswatch:hover {
            transform: scale(1.12);
        }

        .cswatch-lg {
            width: 70px;
            height: 70px;
            border-radius: 18px;
        }

        /* General card */
        .card {
            background: #FFF9F4;
            border: 1px solid #E8DDD6;
            border-radius: 20px;
            padding: 26px;
        }

        /* Makeup row */
        .makeup-row {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
        }

        .makeup-item {
            border: 1px solid #E8DDD6;
            border-radius: 14px;
            overflow: hidden;
            text-align: center;
        }

        .makeup-swatch {
            height: 56px;
        }

        .makeup-label {
            padding: 8px 6px;
            font-size: 12px;
            font-weight: 500;
            color: #2C2420;
        }

        .makeup-type {
            font-size: 10px;
            color: #7A6E68;
            padding-bottom: 8px;
        }

        /* Wardrobe tips */
        .tips-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 0;
        }

        .tip-item {
            padding: 14px 0;
            border-bottom: 1px solid #E8DDD6;
            font-size: 15px;
            color: #2C2420;
            display: flex;
            gap: 14px;
            align-items: flex-start;
        }

        .tip-item:last-child {
            border-bottom: none;
        }

        .tip-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            flex-shrink: 0;
            margin-top: 8px;
        }

        /* Celebrity */
        .celeb-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
            gap: 16px;
        }

        .celeb-card {
            border: 1px solid #E8DDD6;
            border-radius: 16px;
            padding: 20px 16px;
            text-align: center;
            background: #FFF9F4;
        }

        .celeb-avatar {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            margin: 0 auto 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            border: 3px solid rgba(255, 255, 255, .6);
        }

        .celeb-name {
            font-size: 14px;
            font-weight: 600;
            color: #2C2420;
            margin-bottom: 3px;
        }

        .celeb-note {
            font-size: 12px;
            color: #7A6E68;
        }

        /* Season hero styles - each unique */

        /* ── HUB PAGE ── */
        .hub-hero {
            min-height: calc(100vh - 66px);
            background: #1A1210;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 80px 6%;
            position: relative;
            overflow: hidden;
        }

        .hub-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse at 30% 50%, rgba(201, 123, 90, .15), transparent 60%), radial-gradient(ellipse at 70% 30%, rgba(107, 127, 158, .1), transparent 60%);
            pointer-events: none;
        }

        .hub-h1 {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(56px, 8vw, 120px);
            font-weight: 700;
            color: #FAF7F2;
            line-height: .9;
            letter-spacing: -3px;
            margin-bottom: 24px;
        }

        .hub-h1 em {
            color: #C97B5A;
            font-style: italic;
        }

        .hub-sub {
            font-size: 18px;
            font-weight: 300;
            color: rgba(250, 247, 242, .5);
            max-width: 520px;
            margin: 0 auto 48px;
            line-height: 1.7;
        }

        .hub-season-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
            max-width: 900px;
            margin: 0 auto 60px;
        }

        .hub-season-btn {
            border-radius: 18px;
            padding: 22px 16px;
            cursor: pointer;
            transition: transform .2s, box-shadow .2s;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, .08);
        }

        .hub-season-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, .3);
        }

        .hsb-icon {
            font-size: 28px;
            margin-bottom: 8px;
        }

        .hsb-name {
            font-family: 'Cormorant Garamond', serif;
            font-size: 18px;
            font-weight: 700;
            color: #FAF7F2;
        }

        .hsb-sub {
            font-size: 11px;
            color: rgba(250, 247, 242, .45);
            margin-top: 3px;
        }

        .hub-tabs {
            display: flex;
            gap: 8px;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .hub-tab {
            padding: 10px 24px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all .2s;
            border: 1.5px solid rgba(250, 247, 242, .15);
            color: rgba(250, 247, 242, .5);
        }

        .hub-tab:hover {
            border-color: rgba(250, 247, 242, .4);
            color: rgba(250, 247, 242, .8);
        }

        .hub-tab.active {
            background: #FAF7F2;
            color: #1A1210;
            border-color: #FAF7F2;
        }

        .season-cards-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 60px 6%;
        }

        .season-hub-card {
            border-radius: 22px;
            overflow: hidden;
            cursor: pointer;
            transition: transform .25s, box-shadow .25s;
            position: relative;
        }

        .season-hub-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, .15);
        }

        .shc-top {
            height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 24px;
            position: relative;
        }

        .shc-label {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            opacity: .6;
            margin-bottom: 5px;
        }

        .shc-name {
            font-family: 'Cormorant Garamond', serif;
            font-size: 32px;
            font-weight: 700;
            line-height: 1;
        }

        .shc-sub {
            font-size: 13px;
            opacity: .65;
            margin-top: 3px;
        }

        .shc-dots {
            display: flex;
            gap: 6px;
            margin-top: 12px;
        }

        .shc-dot {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            border: 2px solid rgba(255, 255, 255, .25);
        }

        .shc-body {
            padding: 20px 22px;
            background: #FFF9F4;
            border: 1px solid #E8DDD6;
            border-top: none;
        }

        .shc-desc {
            font-size: 13px;
            color: #7A6E68;
            line-height: 1.6;
            margin-bottom: 14px;
        }

        .shc-btn {
            font-size: 13px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* ══ INDIVIDUAL SEASON PAGE SHARED ══ */
        .season-page-hero {
            min-height: calc(100vh - 66px);
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            padding: 60px 6%;
            gap: 60px;
        }

        .sp-eyebrow {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
        }

        .sp-line {
            height: 1.5px;
            width: 36px;
        }

        .sp-season-type {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .sp-title {
            font-family: 'Cormorant Garamond', serif;
            line-height: 1.0;
            font-weight: 700;
            margin-bottom: 16px;
        }

        .sp-tagline {
            font-family: 'Cormorant Garamond', serif;
            font-size: 20px;
            font-style: italic;
            margin-bottom: 20px;
        }

        .sp-desc {
            font-size: 16px;
            font-weight: 300;
            line-height: 1.8;
            margin-bottom: 36px;
        }

        .sp-palette-preview {
            display: flex;
            gap: 10px;
            margin-bottom: 28px;
            flex-wrap: wrap;
        }

        .sp-swatch {
            width: 48px;
            height: 48px;
            border-radius: 12px;
        }

        .sp-hero-visual {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .sp-visual-main {
            border-radius: 28px;
            height: 340px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 72px;
            position: relative;
            overflow: hidden;
        }

        .sp-visual-badges {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .sp-badge {
            border-radius: 16px;
            padding: 18px;
            display: flex;
            gap: 12px;
            align-items: center;
        }

        .sp-badge-icon {
            font-size: 22px;
        }

        .sp-badge-title {
            font-size: 13px;
            font-weight: 600;
        }

        .sp-badge-sub {
            font-size: 11px;
            opacity: .65;
            margin-top: 2px;
        }

        /* Sections within season page */
        .season-section {
            padding: 70px 6%;
        }

        .season-section-alt {
            padding: 70px 6%;
            background: #FFF9F4;
        }

        .two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 48px;
            align-items: start;
        }

        .three-col {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .four-col {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        /* Feature row */
        .feature-row {
            display: flex;
            flex-direction: column;
            gap: 0;
        }

        .feature-item {
            padding: 18px 0;
            border-bottom: 1px solid #E8DDD6;
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }

        .feature-item:last-child {
            border-bottom: none;
        }

        .fi-num {
            font-family: 'Cormorant Garamond', serif;
            font-size: 32px;
            font-weight: 700;
            color: #E8DDD6;
            line-height: 1;
            flex-shrink: 0;
            width: 40px;
        }

        .fi-title {
            font-size: 16px;
            font-weight: 600;
            color: #2C2420;
            margin-bottom: 5px;
        }

        .fi-desc {
            font-size: 14px;
            color: #7A6E68;
            line-height: 1.65;
        }

        /* Avoid section */
        .avoid-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 14px;
        }

        .avoid-card {
            border: 1px solid #E8DDD6;
            border-radius: 14px;
            padding: 16px;
            background: #FFF9F4;
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .avoid-swatch {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            flex-shrink: 0;
            position: relative;
        }

        .avoid-swatch::after {
            content: '✕';
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            color: rgba(255, 255, 255, .85);
            font-weight: 700;
        }

        .avoid-info {}

        .avoid-name {
            font-size: 14px;
            font-weight: 500;
            color: #2C2420;
        }

        .avoid-why {
            font-size: 12px;
            color: #7A6E68;
            margin-top: 2px;
        }

        /* Outfit ideas */
        .outfit-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .outfit-card {
            border: 1px solid #E8DDD6;
            border-radius: 18px;
            overflow: hidden;
            background: #FFF9F4;
        }

        .outfit-top {
            height: 140px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
        }

        .outfit-body {
            padding: 18px;
        }

        .outfit-occasion {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: #7A6E68;
            margin-bottom: 6px;
        }

        .outfit-name {
            font-size: 16px;
            font-weight: 600;
            color: #2C2420;
            margin-bottom: 8px;
        }

        .outfit-items {
            font-size: 13px;
            color: #7A6E68;
            line-height: 1.6;
        }

        /* Footer mini */
        .footer-mini {
            background: #1A1210;
            padding: 40px 6%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: gap;
        }

        .fm-logo {
            font-family: 'Cormorant Garamond', serif;
            font-size: 20px;
            color: #FAF7F2;
        }

        .fm-logo em {
            color: #C97B5A;
            font-style: italic;
        }

        .fm-links {
            display: flex;
            gap: 20px;
        }

        .fm-links a {
            font-size: 13px;
            color: rgba(250, 247, 242, .4);
            text-decoration: none;
            cursor: pointer;
            transition: color .2s;
        }

        .fm-links a:hover {
            color: rgba(250, 247, 242, .8);
        }

        /* ══ SPRING THEME ══ */
        .spring-bg {
            background: linear-gradient(145deg, #F5E8D0, #F0C4A0, #E8A878);
        }

        .spring-accent {
            color: #C97B3A;
        }

        .spring-badge-bg {
            background: rgba(255, 215, 100, .15);
        }

        .spring-section-bg {
            background: linear-gradient(to bottom, #FFF9F4, #FEF5EA);
        }

        /* ══ LIGHT SPRING ══ */
        .light-spring-bg {
            background: linear-gradient(145deg, #FAE8D0, #F5D4A8, #EDBA80);
        }

        /* ══ TRUE SPRING ══ */
        .true-spring-bg {
            background: linear-gradient(145deg, #F0C880, #E8A050, #D88040);
        }

        /* ══ WARM SPRING ══ */
        .warm-spring-bg {
            background: linear-gradient(145deg, #E8A870, #D48048, #C06030);
        }

        /* ══ SUMMER THEMES ══ */
        .summer-bg {
            background: linear-gradient(145deg, #C8D8E8, #A8B8D0, #8898C0);
        }

        .light-summer-bg {
            background: linear-gradient(145deg, #D8E4F0, #C0CEDC, #A8B8CC);
        }

        .true-summer-bg {
            background: linear-gradient(145deg, #B8C8E0, #9AAAC8, #7A8AAC);
        }

        .soft-summer-bg {
            background: linear-gradient(145deg, #C0C8D4, #A8B0BC, #9098A8);
        }

        /* ══ AUTUMN THEMES ══ */
        .autumn-bg {
            background: linear-gradient(145deg, #8B4A24, #B86830, #C48040);
        }

        .soft-autumn-bg {
            background: linear-gradient(145deg, #C09070, #A87050, #906038);
        }

        .true-autumn-bg {
            background: linear-gradient(145deg, #8A4A20, #B06030, #904820);
        }

        .dark-autumn-bg {
            background: linear-gradient(145deg, #4A2810, #703818, #602818);
        }

        /* ══ WINTER THEMES ══ */
        .winter-bg {
            background: linear-gradient(145deg, #1C2848, #283860, #384870);
        }

        .dark-winter-bg {
            background: linear-gradient(145deg, #080C18, #141828, #201830);
        }

        .true-winter-bg {
            background: linear-gradient(145deg, #1A2040, #283060, #202848);
        }

        .bright-winter-bg {
            background: linear-gradient(145deg, #1840A0, #1060C0, #0848A0);
        }

        @media(max-width:900px) {

            .season-page-hero,
            .two-col {
                grid-template-columns: 1fr;
            }

            .sp-hero-visual {
                display: none;
            }

            .season-cards-grid,
            .hub-season-grid {
                grid-template-columns: 1fr 1fr;
            }

            .three-col,
            .four-col,
            .makeup-row,
            .outfit-grid {
                grid-template-columns: 1fr 1fr;
            }

            .nav-pills {
                display: none;
            }
        }

        @media(max-width:600px) {

            .season-cards-grid,
            .hub-season-grid {
                grid-template-columns: 1fr;
            }

            .three-col,
            .four-col,
            .makeup-row,
            .outfit-grid,
            .celeb-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endsection
@section('content')
    <div class="page" id="page-seasons">
        <div class="hub-hero">
            <div class="lbl" style="color:#C97B5A;margin-bottom:16px;">✦ All 12 Colour Seasons</div>
            <div class="hub-h1">Your colour<br><em>universe</em></div>
            <p class="hub-sub">The 12-season colour system goes beyond the basics. Find your exact season — the one that
                truly captures your unique combination of features.</p>

            <div class="hub-tabs">
                <div class="hub-tab active" onclick="filterHub('all',this)">All 12 Seasons</div>
                <div class="hub-tab" onclick="filterHub('spring',this)">🌸 Spring</div>
                <div class="hub-tab" onclick="filterHub('summer',this)">☁️ Summer</div>
                <div class="hub-tab" onclick="filterHub('autumn',this)">🍂 Autumn</div>
                <div class="hub-tab" onclick="filterHub('winter',this)">❄️ Winter</div>
            </div>
        </div>

        <div class="season-cards-grid" id="season-cards-grid">
            <!-- SPRING -->
            <div class="season-hub-card" data-group="spring" onclick="showPage('light-spring')">
                <div class="shc-top light-spring-bg" style="color:#3C1800;">
                    <div class="shc-label">Spring · Warm · Light</div>
                    <div class="shc-name">Light Spring</div>
                    <div class="shc-sub">Delicate warm freshness</div>
                    <div class="shc-dots">
                        <div class="shc-dot" style="background:#FFD8A0;"></div>
                        <div class="shc-dot" style="background:#F5C090;"></div>
                        <div class="shc-dot" style="background:#E8A870;"></div>
                        <div class="shc-dot" style="background:#D4C080;"></div>
                    </div>
                </div>
                <div class="shc-body">
                    <div class="shc-desc">The lightest of all springs — peachy, warm, and ethereally delicate. Your
                        colouring is soft with a warm golden base.</div>
                    <div class="shc-btn" style="color:#C97B3A;">Explore Season →</div>
                </div>
            </div>
            <div class="season-hub-card" data-group="spring" onclick="showPage('true-spring')">
                <div class="shc-top true-spring-bg" style="color:#3C1800;">
                    <div class="shc-label">Spring · Warm · Clear</div>
                    <div class="shc-name">True Spring</div>
                    <div class="shc-sub">Pure warm radiance</div>
                    <div class="shc-dots">
                        <div class="shc-dot" style="background:#F4A460;"></div>
                        <div class="shc-dot" style="background:#FFD700;"></div>
                        <div class="shc-dot" style="background:#FF7F50;"></div>
                        <div class="shc-dot" style="background:#90EE90;"></div>
                    </div>
                </div>
                <div class="shc-body">
                    <div class="shc-desc">The classic spring — vibrant, warm, and clear. You radiate in bright corals, warm
                        yellows, and clear aquas.</div>
                    <div class="shc-btn" style="color:#D4714A;">Explore Season →</div>
                </div>
            </div>
            <div class="season-hub-card" data-group="spring" onclick="showPage('warm-spring')">
                <div class="shc-top warm-spring-bg" style="color:#fff;">
                    <div class="shc-label">Spring · Warm · Deep</div>
                    <div class="shc-name">Warm Spring</div>
                    <div class="shc-sub">Golden warmth, richer depth</div>
                    <div class="shc-dots">
                        <div class="shc-dot" style="background:#E8855A;"></div>
                        <div class="shc-dot" style="background:#D4A843;"></div>
                        <div class="shc-dot" style="background:#8B7035;"></div>
                        <div class="shc-dot" style="background:#C06030;"></div>
                    </div>
                </div>
                <div class="shc-body">
                    <div class="shc-desc">The warmest spring — deeper and richer. You share traits with autumn but your
                        overall look stays clear and golden.</div>
                    <div class="shc-btn" style="color:#B85A38;">Explore Season →</div>
                </div>
            </div>
            <!-- SUMMER -->
            <div class="season-hub-card" data-group="summer" onclick="showPage('light-summer')">
                <div class="shc-top light-summer-bg" style="color:#1A2A4A;">
                    <div class="shc-label">Summer · Cool · Light</div>
                    <div class="shc-name">Light Summer</div>
                    <div class="shc-sub">Soft, airy, and cool</div>
                    <div class="shc-dots">
                        <div class="shc-dot" style="background:#C8D8F0;"></div>
                        <div class="shc-dot" style="background:#D8C0D8;"></div>
                        <div class="shc-dot" style="background:#B8D0C0;"></div>
                        <div class="shc-dot" style="background:#E0D0E0;"></div>
                    </div>
                </div>
                <div class="shc-body">
                    <div class="shc-desc">The most delicate summer — soft, cool, and light as a morning mist. Your colours
                        are powder-soft and effortlessly elegant.</div>
                    <div class="shc-btn" style="color:#6878B4;">Explore Season →</div>
                </div>
            </div>
            <div class="season-hub-card" data-group="summer" onclick="showPage('true-summer')">
                <div class="shc-top true-summer-bg" style="color:#F8F4FF;">
                    <div class="shc-label">Summer · Cool · Muted</div>
                    <div class="shc-name">True Summer</div>
                    <div class="shc-sub">Quiet, cool, and graceful</div>
                    <div class="shc-dots">
                        <div class="shc-dot" style="background:#C8A2C8;"></div>
                        <div class="shc-dot" style="background:#8FA8C8;"></div>
                        <div class="shc-dot" style="background:#D8BFD8;"></div>
                        <div class="shc-dot" style="background:#88A4BC;"></div>
                    </div>
                </div>
                <div class="shc-body">
                    <div class="shc-desc">The classic summer — cool, muted, and romantically understated. Dusty rose and
                        lavender are your true signatures.</div>
                    <div class="shc-btn" style="color:#6880A8;">Explore Season →</div>
                </div>
            </div>
            <div class="season-hub-card" data-group="summer" onclick="showPage('soft-summer')">
                <div class="shc-top soft-summer-bg" style="color:#F0EEF8;">
                    <div class="shc-label">Summer · Neutral-Cool · Muted</div>
                    <div class="shc-name">Soft Summer</div>
                    <div class="shc-sub">Blended, muted neutrality</div>
                    <div class="shc-dots">
                        <div class="shc-dot" style="background:#B8C0CC;"></div>
                        <div class="shc-dot" style="background:#A8B0BC;"></div>
                        <div class="shc-dot" style="background:#989090;"></div>
                        <div class="shc-dot" style="background:#B0A8A0;"></div>
                    </div>
                </div>
                <div class="shc-body">
                    <div class="shc-desc">Where summer meets autumn — soft, blended, and neutrally cool. Your palette is
                        the most muted of all 12 seasons.</div>
                    <div class="shc-btn" style="color:#7880A0;">Explore Season →</div>
                </div>
            </div>
            <!-- AUTUMN -->
            <div class="season-hub-card" data-group="autumn" onclick="showPage('soft-autumn')">
                <div class="shc-top soft-autumn-bg" style="color:#FFF4E8;">
                    <div class="shc-label">Autumn · Neutral-Warm · Muted</div>
                    <div class="shc-name">Soft Autumn</div>
                    <div class="shc-sub">Warm muted versatility</div>
                    <div class="shc-dots">
                        <div class="shc-dot" style="background:#BC8F8F;"></div>
                        <div class="shc-dot" style="background:#A0917E;"></div>
                        <div class="shc-dot" style="background:#8FBC8F;"></div>
                        <div class="shc-dot" style="background:#C4A882;"></div>
                    </div>
                </div>
                <div class="shc-body">
                    <div class="shc-desc">The most gentle autumn — softly warm and beautifully muted. Your look is natural
                        and unfussy, never overpowering.</div>
                    <div class="shc-btn" style="color:#906038;">Explore Season →</div>
                </div>
            </div>
            <div class="season-hub-card" data-group="autumn" onclick="showPage('true-autumn')">
                <div class="shc-top true-autumn-bg" style="color:#FFF0D8;">
                    <div class="shc-label">Autumn · Warm · Muted</div>
                    <div class="shc-name">True Autumn</div>
                    <div class="shc-sub">Rich earthy warmth</div>
                    <div class="shc-dots">
                        <div class="shc-dot" style="background:#C97B5A;"></div>
                        <div class="shc-dot" style="background:#D4A856;"></div>
                        <div class="shc-dot" style="background:#556B2F;"></div>
                        <div class="shc-dot" style="background:#8B4513;"></div>
                    </div>
                </div>
                <div class="shc-body">
                    <div class="shc-desc">The classic autumn — the most warm, earthy, and richly natural of all seasons.
                        Terracotta and olive are your destiny.</div>
                    <div class="shc-btn" style="color:#904820;">Explore Season →</div>
                </div>
            </div>
            <div class="season-hub-card" data-group="autumn" onclick="showPage('dark-autumn')">
                <div class="shc-top dark-autumn-bg" style="color:#FFE8D0;">
                    <div class="shc-label">Autumn · Warm · Dark</div>
                    <div class="shc-name">Dark Autumn</div>
                    <div class="shc-sub">Deep and dramatically warm</div>
                    <div class="shc-dots">
                        <div class="shc-dot" style="background:#8B4A20;"></div>
                        <div class="shc-dot" style="background:#703820;"></div>
                        <div class="shc-dot" style="background:#4A2810;"></div>
                        <div class="shc-dot" style="background:#604028;"></div>
                    </div>
                </div>
                <div class="shc-body">
                    <div class="shc-desc">Where autumn meets winter — deep, rich, and powerfully warm. The darkest and most
                        dramatic of the autumn seasons.</div>
                    <div class="shc-btn" style="color:#703818;">Explore Season →</div>
                </div>
            </div>
            <!-- WINTER -->
            <div class="season-hub-card" data-group="winter" onclick="showPage('dark-winter')">
                <div class="shc-top dark-winter-bg" style="color:#C0C8E0;">
                    <div class="shc-label">Winter · Cool · Dark</div>
                    <div class="shc-name">Dark Winter</div>
                    <div class="shc-sub">Dramatic, deep intensity</div>
                    <div class="shc-dots">
                        <div class="shc-dot" style="background:#1C2040;"></div>
                        <div class="shc-dot" style="background:#2A1020;"></div>
                        <div class="shc-dot" style="background:#102030;"></div>
                        <div class="shc-dot" style="background:#3A1818;"></div>
                    </div>
                </div>
                <div class="shc-body">
                    <div class="shc-desc">Where winter meets autumn — the deepest and most dramatic season. Your colours
                        are dark, rich, and utterly striking.</div>
                    <div class="shc-btn" style="color:#2A3060;">Explore Season →</div>
                </div>
            </div>
            <div class="season-hub-card" data-group="winter" onclick="showPage('true-winter')">
                <div class="shc-top true-winter-bg" style="color:#E0E8FF;">
                    <div class="shc-label">Winter · Cool · Clear</div>
                    <div class="shc-name">True Winter</div>
                    <div class="shc-sub">Pure cool contrast</div>
                    <div class="shc-dots">
                        <div class="shc-dot" style="background:#00008B;"></div>
                        <div class="shc-dot" style="background:#8B0000;"></div>
                        <div class="shc-dot" style="background:#4B0082;"></div>
                        <div class="shc-dot" style="background:#F5F5F5;"></div>
                    </div>
                </div>
                <div class="shc-body">
                    <div class="shc-desc">The classic winter — cool, clear, and strikingly high-contrast. Jewel tones and
                        crisp black-and-white are your elements.</div>
                    <div class="shc-btn" style="color:#2030A0;">Explore Season →</div>
                </div>
            </div>
            <div class="season-hub-card" data-group="winter" onclick="showPage('bright-winter')">
                <div class="shc-top bright-winter-bg" style="color:#E8F4FF;">
                    <div class="shc-label">Winter · Cool · Bright</div>
                    <div class="shc-name">Bright Winter</div>
                    <div class="shc-sub">Vivid, electric, dazzling</div>
                    <div class="shc-dots">
                        <div class="shc-dot" style="background:#0000FF;"></div>
                        <div class="shc-dot" style="background:#FF0080;"></div>
                        <div class="shc-dot" style="background:#00C0FF;"></div>
                        <div class="shc-dot" style="background:#00FF80;"></div>
                    </div>
                </div>
                <div class="shc-body">
                    <div class="shc-desc">Where winter meets spring — clear, cool, and vibrantly bright. Electric hues and
                        high contrast are your playground.</div>
                    <div class="shc-btn" style="color:#0048C0;">Explore Season →</div>
                </div>
            </div>
        </div>

        <!-- Overview comparison -->
        <div style="padding:0 6% 80px;">
            <div class="h2" style="margin-bottom:8px;">How the 12 seasons connect</div>
            <p class="body-text" style="margin-bottom:40px;max-width:560px;">Each of the 4 main seasons has 3 sub-seasons,
                defined by how warm/cool, light/dark, and clear/muted your colouring is.</p>
            <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:20px;">
                <div style="border-radius:18px;overflow:hidden;border:1px solid #E8DDD6;">
                    <div style="background:linear-gradient(145deg,#E8C080,#D49050);padding:20px;color:#3C1800;">
                        <div style="font-family:'Cormorant Garamond',serif;font-size:20px;font-weight:700;">🌸 Spring</div>
                        <div style="font-size:12px;opacity:.65;margin-top:4px;">Warm · Clear</div>
                    </div>
                    <div style="padding:16px;background:#FFF9F4;display:flex;flex-direction:column;gap:8px;">
                        <div onclick="showPage('light-spring')"
                            style="padding:10px 14px;border:1px solid #E8DDD6;border-radius:10px;font-size:13px;font-weight:500;cursor:pointer;transition:background .15s;"
                            onmouseover="this.style.background='#FDF0EA'"
                            onmouseout="this.style.background='transparent'">Light Spring →</div>
                        <div onclick="showPage('true-spring')"
                            style="padding:10px 14px;border:1px solid #E8DDD6;border-radius:10px;font-size:13px;font-weight:500;cursor:pointer;transition:background .15s;"
                            onmouseover="this.style.background='#FDF0EA'"
                            onmouseout="this.style.background='transparent'">True Spring →</div>
                        <div onclick="showPage('warm-spring')"
                            style="padding:10px 14px;border:1px solid #E8DDD6;border-radius:10px;font-size:13px;font-weight:500;cursor:pointer;transition:background .15s;"
                            onmouseover="this.style.background='#FDF0EA'"
                            onmouseout="this.style.background='transparent'">Warm Spring →</div>
                    </div>
                </div>
                <div style="border-radius:18px;overflow:hidden;border:1px solid #E8DDD6;">
                    <div style="background:linear-gradient(145deg,#9AAAC8,#7A8AAC);padding:20px;color:#F8F4FF;">
                        <div style="font-family:'Cormorant Garamond',serif;font-size:20px;font-weight:700;">☁️ Summer</div>
                        <div style="font-size:12px;opacity:.65;margin-top:4px;">Cool · Muted</div>
                    </div>
                    <div style="padding:16px;background:#FFF9F4;display:flex;flex-direction:column;gap:8px;">
                        <div onclick="showPage('light-summer')"
                            style="padding:10px 14px;border:1px solid #E8DDD6;border-radius:10px;font-size:13px;font-weight:500;cursor:pointer;"
                            onmouseover="this.style.background='#EDF0F8'"
                            onmouseout="this.style.background='transparent'">Light Summer →</div>
                        <div onclick="showPage('true-summer')"
                            style="padding:10px 14px;border:1px solid #E8DDD6;border-radius:10px;font-size:13px;font-weight:500;cursor:pointer;"
                            onmouseover="this.style.background='#EDF0F8'"
                            onmouseout="this.style.background='transparent'">True Summer →</div>
                        <div onclick="showPage('soft-summer')"
                            style="padding:10px 14px;border:1px solid #E8DDD6;border-radius:10px;font-size:13px;font-weight:500;cursor:pointer;"
                            onmouseover="this.style.background='#EDF0F8'"
                            onmouseout="this.style.background='transparent'">Soft Summer →</div>
                    </div>
                </div>
                <div style="border-radius:18px;overflow:hidden;border:1px solid #E8DDD6;">
                    <div style="background:linear-gradient(145deg,#B06030,#904820);padding:20px;color:#FFF0D8;">
                        <div style="font-family:'Cormorant Garamond',serif;font-size:20px;font-weight:700;">🍂 Autumn</div>
                        <div style="font-size:12px;opacity:.65;margin-top:4px;">Warm · Muted</div>
                    </div>
                    <div style="padding:16px;background:#FFF9F4;display:flex;flex-direction:column;gap:8px;">
                        <div onclick="showPage('soft-autumn')"
                            style="padding:10px 14px;border:1px solid #E8DDD6;border-radius:10px;font-size:13px;font-weight:500;cursor:pointer;"
                            onmouseover="this.style.background='#FDF0E8'"
                            onmouseout="this.style.background='transparent'">Soft Autumn →</div>
                        <div onclick="showPage('true-autumn')"
                            style="padding:10px 14px;border:1px solid #E8DDD6;border-radius:10px;font-size:13px;font-weight:500;cursor:pointer;"
                            onmouseover="this.style.background='#FDF0E8'"
                            onmouseout="this.style.background='transparent'">True Autumn →</div>
                        <div onclick="showPage('dark-autumn')"
                            style="padding:10px 14px;border:1px solid #E8DDD6;border-radius:10px;font-size:13px;font-weight:500;cursor:pointer;"
                            onmouseover="this.style.background='#FDF0E8'"
                            onmouseout="this.style.background='transparent'">Dark Autumn →</div>
                    </div>
                </div>
                <div style="border-radius:18px;overflow:hidden;border:1px solid #E8DDD6;">
                    <div style="background:linear-gradient(145deg,#1C2848,#203060);padding:20px;color:#D0D8F0;">
                        <div style="font-family:'Cormorant Garamond',serif;font-size:20px;font-weight:700;">❄️ Winter</div>
                        <div style="font-size:12px;opacity:.65;margin-top:4px;">Cool · Clear</div>
                    </div>
                    <div style="padding:16px;background:#FFF9F4;display:flex;flex-direction:column;gap:8px;">
                        <div onclick="showPage('dark-winter')"
                            style="padding:10px 14px;border:1px solid #E8DDD6;border-radius:10px;font-size:13px;font-weight:500;cursor:pointer;"
                            onmouseover="this.style.background='#E8E8F5'"
                            onmouseout="this.style.background='transparent'">Dark Winter →</div>
                        <div onclick="showPage('true-winter')"
                            style="padding:10px 14px;border:1px solid #E8DDD6;border-radius:10px;font-size:13px;font-weight:500;cursor:pointer;"
                            onmouseover="this.style.background='#E8E8F5'"
                            onmouseout="this.style.background='transparent'">True Winter →</div>
                        <div onclick="showPage('bright-winter')"
                            style="padding:10px 14px;border:1px solid #E8DDD6;border-radius:10px;font-size:13px;font-weight:500;cursor:pointer;"
                            onmouseover="this.style.background='#E8E8F5'"
                            onmouseout="this.style.background='transparent'">Bright Winter →</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-mini">
            <div class="fm-logo">Chroma<em>Fit</em></div>
            <div class="fm-links"><a onclick="showPage('hub')">All Seasons</a></div>
        </div>
    </div>
@endsection
@section('page_script')
    <!-- helper: build a full season page -->
    <script>
        function buildSeasonPage(id, cfg) {
            const div = document.createElement('div');
            div.className = 'page';
            div.id = 'page-' + id;
            div.innerHTML = `
  <!-- HERO -->
  <section class="season-page-hero" style="background:${cfg.heroBg};color:${cfg.heroColor};">
    <div>
      <div class="sp-eyebrow">
        <div class="sp-line" style="background:${cfg.accent};"></div>
        <span class="sp-season-type" style="color:${cfg.accent};">${cfg.seasonType}</span>
      </div>
      <div class="sp-title" style="font-size:clamp(52px,7vw,88px);">${cfg.name}</div>
      <div class="sp-tagline" style="color:${cfg.heroColor}66;">"${cfg.tagline}"</div>
      <p class="sp-desc" style="color:${cfg.heroColor}88;">${cfg.heroDesc}</p>
      <div class="sp-palette-preview">
        ${cfg.palette.slice(0,6).map(c=>`<div class="sp-swatch" style="background:${c};border:2.5px solid rgba(255,255,255,.25);"></div>`).join('')}
      </div>
      <div style="display:flex;gap:12px;flex-wrap:wrap;">
        <button class="btn btn-white" onclick="showPage('hub')">← All Seasons</button>
        <button class="btn btn-outline" style="color:${cfg.heroColor};border-color:${cfg.heroColor}44;" onclick="alert('Take the full quiz!')">Find My Season</button>
      </div>
    </div>
    <div class="sp-hero-visual">
      <div class="sp-visual-main" style="background:${cfg.visualBg};">${cfg.emoji}</div>
      <div class="sp-visual-badges">
        <div class="sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">${cfg.badge1Icon}</div>
          <div><div class="sp-badge-title" style="color:${cfg.heroColor};">${cfg.badge1Title}</div><div class="sp-badge-sub" style="color:${cfg.heroColor};">${cfg.badge1Sub}</div></div>
        </div>
        <div class="sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">${cfg.badge2Icon}</div>
          <div><div class="sp-badge-title" style="color:${cfg.heroColor};">${cfg.badge2Title}</div><div class="sp-badge-sub" style="color:${cfg.heroColor};">${cfg.badge2Sub}</div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- PALETTE -->
  <section class="season-section">
    <span class="lbl" style="color:${cfg.accent};">✦ Your Colour Palette</span>
    <div class="h2" style="margin-bottom:12px;">Best colours for ${cfg.name}</div>
    <p class="body-text" style="max-width:560px;margin-bottom:36px;">${cfg.paletteDesc}</p>
    <div class="two-col">
      <div>
        <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">Power Shades</div>
        <div class="color-grid" style="margin-bottom:28px;">
          ${cfg.palette.map(c=>`<div class="cswatch cswatch-lg" style="background:${c};" title="${c}"></div>`).join('')}
        </div>
        <div class="swatch-strip" style="height:14px;border-radius:7px;margin-bottom:8px;">
          ${cfg.palette.map(c=>`<span style="background:${c};"></span>`).join('')}
        </div>
        <div style="font-size:12px;color:#B0A49E;">Your complete spectrum — from light to dark</div>
      </div>
      <div>
        <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">Neutrals & Staples</div>
        <div class="color-grid" style="margin-bottom:20px;">
          ${cfg.neutrals.map(c=>`<div class="cswatch" style="background:${c};"></div>`).join('')}
        </div>
        <p class="body-text" style="font-size:14px;">${cfg.neutralDesc}</p>
      </div>
    </div>
  </section>

  <!-- YOUR FEATURES -->
  <section class="season-section-alt">
    <span class="lbl" style="color:${cfg.accent};">✦ Typical Features</span>
    <div class="h2" style="margin-bottom:40px;">Do you look like a ${cfg.name}?</div>
    <div class="three-col">
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">🧴</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skin</div>
        <div class="body-text" style="font-size:14px;">${cfg.skin}</div>
      </div>
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">👁️</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Eyes</div>
        <div class="body-text" style="font-size:14px;">${cfg.eyes}</div>
      </div>
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">💇</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Hair</div>
        <div class="body-text" style="font-size:14px;">${cfg.hair}</div>
      </div>
    </div>
    <div style="margin-top:32px;padding:24px;background:${cfg.accent}14;border:1px solid ${cfg.accent}33;border-radius:16px;">
      <div style="font-size:15px;font-weight:600;color:#2C2420;margin-bottom:6px;">✦ The ${cfg.name} glow effect</div>
      <div class="body-text" style="font-size:14px;">${cfg.glowEffect}</div>
    </div>
  </section>

  <!-- MAKEUP -->
  <section class="season-section">
    <span class="lbl" style="color:${cfg.accent};">✦ Makeup Guide</span>
    <div class="h2" style="margin-bottom:12px;">Your perfect makeup shades</div>
    <p class="body-text" style="max-width:560px;margin-bottom:36px;">${cfg.makeupDesc}</p>
    <div class="makeup-row">
      ${cfg.makeup.map(m=>`
                      <div class="makeup-item">
                        <div class="makeup-swatch" style="background:${m.color};"></div>
                        <div class="makeup-label">${m.name}</div>
                        <div class="makeup-type">${m.type}</div>
                      </div>`).join('')}
    </div>
    <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
      <div class="card">
        <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Foundation Undertone</div>
        <div class="body-text" style="font-size:14px;">${cfg.foundationNote}</div>
      </div>
      <div class="card">
        <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Key Makeup Rule</div>
        <div class="body-text" style="font-size:14px;">${cfg.makeupRule}</div>
      </div>
    </div>
  </section>

  <!-- WARDROBE -->
  <section class="season-section-alt">
    <div class="two-col">
      <div>
        <span class="lbl" style="color:${cfg.accent};">✦ Wardrobe Tips</span>
        <div class="h2" style="margin-bottom:20px;">How to dress as a ${cfg.name}</div>
        <div class="feature-row">
          ${cfg.wardrobeTips.map((t,i)=>`
                          <div class="feature-item">
                            <div class="fi-num">0${i+1}</div>
                            <div><div class="fi-title">${t.title}</div><div class="fi-desc">${t.desc}</div></div>
                          </div>`).join('')}
        </div>
      </div>
      <div>
        <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">✦ Colours to Avoid</span>
        <div class="avoid-grid">
          ${cfg.avoid.map(a=>`
                          <div class="avoid-card">
                            <div class="avoid-swatch" style="background:${a.color};"></div>
                            <div class="avoid-info"><div class="avoid-name">${a.name}</div><div class="avoid-why">${a.why}</div></div>
                          </div>`).join('')}
        </div>
      </div>
    </div>
  </section>

  <!-- OUTFIT IDEAS -->
  <section class="season-section">
    <span class="lbl" style="color:${cfg.accent};">✦ Outfit Inspiration</span>
    <div class="h2" style="margin-bottom:36px;">Looks built for ${cfg.name}</div>
    <div class="outfit-grid">
      ${cfg.outfits.map(o=>`
                      <div class="outfit-card">
                        <div class="outfit-top" style="background:${o.bg};">${o.icon}</div>
                        <div class="outfit-body">
                          <div class="outfit-occasion">${o.occasion}</div>
                          <div class="outfit-name">${o.name}</div>
                          <div class="outfit-items">${o.items}</div>
                        </div>
                      </div>`).join('')}
    </div>
  </section>

  <!-- CELEBRITIES -->
  <section class="season-section-alt">
    <span class="lbl" style="color:${cfg.accent};">✦ Famous ${cfg.name}s</span>
    <div class="h2" style="margin-bottom:36px;">You're in great company</div>
    <div class="celeb-grid">
      ${cfg.celebs.map(c=>`
                      <div class="celeb-card">
                        <div class="celeb-avatar" style="background:${c.bg};">${c.icon}</div>
                        <div class="celeb-name">${c.name}</div>
                        <div class="celeb-note">${c.note}</div>
                      </div>`).join('')}
    </div>
  </section>

  <!-- NAV BETWEEN SEASONS -->
  <div style="padding:40px 6%;display:flex;justify-content:space-between;align-items:center;border-top:1px solid #E8DDD6;gap:20px;flex-wrap:wrap;">
    <button class="btn btn-outline" style="color:#2C2420;border-color:#E8DDD6;" onclick="showPage('hub')">← All Seasons</button>
    <div style="display:flex;gap:8px;flex-wrap:wrap;">
      ${cfg.relatedSeasons.map(s=>`<button class="btn btn-outline" style="color:${cfg.accent};border-color:${cfg.accent}44;font-size:13px;" onclick="showPage('${s.id}')">${s.label} →</button>`).join('')}
    </div>
  </div>

  <div class="footer-mini">
    <div class="fm-logo">Chroma<em>Fit</em></div>
    <div class="fm-links"><a onclick="showPage('hub')">All Seasons</a></div>
  </div>
  `;
            document.body.appendChild(div);
        }
    </script>

    <script>
        // ══ SEASON DATA ══

        const seasons = {

            'light-spring': {
                name: 'Light Spring',
                seasonType: '🌸 Spring · Warm · Light',
                heroBg: 'linear-gradient(145deg,#FAE8D0,#F5D4A8,#EDBA80)',
                heroColor: '#3C1800',
                accent: '#C97B3A',
                visualBg: 'linear-gradient(145deg,#FFE4C4,#FFD0A0)',
                emoji: '🌼',
                tagline: 'Soft as morning light, warm as sunshine',
                heroDesc: 'Light Spring is the most delicate and ethereal of all spring types. Your natural colouring is light, warm, and softly luminous — think golden hour, peach blossoms, and warm cream.',
                badge1Icon: '🌡️',
                badge1Title: 'Warm Undertone',
                badge1Sub: 'Golden, peachy',
                badge2Icon: '☀️',
                badge2Title: 'Light Value',
                badge2Sub: 'Pale, soft depth',
                palette: ['#FFD8A0', '#F5C090', '#E8A870', '#D4C080', '#C8B460', '#FAE8CC', '#F0C8A0', '#E0A878'],
                neutrals: ['#F5E8D8', '#E8D4C0', '#D4C0A8', '#C0A890'],
                neutralDesc: 'Warm ivory, peach-beige, and soft camel are your perfect neutrals — never harsh white or cool grey.',
                paletteDesc: 'Your palette is warm, light, and delicate. Think peaches, golden creams, warm corals, and soft warm yellows. Nothing too intense — keep saturation low and warmth high.',
                skin: 'Fair to light skin with a warm, peachy or ivory undertone. Often has a golden warmth and may have light freckles. Skin can look washed out in cool tones.',
                eyes: 'Light blue, light green, warm hazel, or golden brown. Often with warm, honey-coloured flecks. Eyes may appear almost transparent or watery in cool lighting.',
                hair: 'Light golden blonde, strawberry blonde, warm ash blonde, or light golden brown. Natural highlights are common. Hair has a warm, luminous quality.',
                glowEffect: 'When a Light Spring wears their season colours, their skin appears to glow with a warm, peachy luminosity. The colours seem to blend into their natural colouring as if they were born wearing them.',
                makeupDesc: 'Keep everything soft, warm, and light. Heavy or dark colours will overpower your delicate natural colouring.',
                makeup: [{
                        color: '#FDDBB4',
                        name: 'Warm Ivory',
                        type: 'Foundation'
                    },
                    {
                        color: '#FFB070',
                        name: 'Warm Peach',
                        type: 'Blush'
                    },
                    {
                        color: '#E89060',
                        name: 'Warm Coral',
                        type: 'Lips'
                    },
                    {
                        color: '#D4A843',
                        name: 'Golden Bronze',
                        type: 'Eyes'
                    },
                    {
                        color: '#F0C898',
                        name: 'Peachy Nude',
                        type: 'Lips'
                    },
                    {
                        color: '#C8A870',
                        name: 'Warm Taupe',
                        type: 'Eye shadow'
                    },
                    {
                        color: '#E8A068',
                        name: 'Salmon',
                        type: 'Blush'
                    },
                    {
                        color: '#D4B860',
                        name: 'Champagne',
                        type: 'Highlighter'
                    },
                ],
                foundationNote: 'Choose foundations with a warm, peachy undertone. Avoid anything with pink or cool undertones — they will make you look dull and flat.',
                makeupRule: 'Keep all makeup soft and blended. Hard lines and dark colours overwhelm your natural delicacy. Think "lit from within" rather than made-up.',
                wardrobeTips: [{
                        title: 'Embrace warm, peachy tones',
                        desc: 'Your best base colours are warm creams, peaches, and soft golden tans. Use these in tops and blouses closest to your face.'
                    },
                    {
                        title: 'Avoid pure white',
                        desc: 'Bright white is too stark. Opt for warm ivory, cream, or off-white which blends with your warm undertone.'
                    },
                    {
                        title: 'Add warmth with accessories',
                        desc: 'Gold jewellery, warm wooden pieces, and camel-toned accessories all complement your golden warmth perfectly.'
                    },
                    {
                        title: 'Keep patterns light',
                        desc: 'Florals in warm tones, soft watercolour prints, and delicate designs suit your ethereal quality.'
                    },
                ],
                avoid: [{
                        color: '#000080',
                        name: 'Navy Blue',
                        why: 'Too cool and harsh'
                    },
                    {
                        color: '#808080',
                        name: 'Cool Grey',
                        why: 'Drains your warmth'
                    },
                    {
                        color: '#FF1493',
                        name: 'Fuchsia',
                        why: 'Too saturated and cool'
                    },
                    {
                        color: '#000000',
                        name: 'Black',
                        why: 'Creates jarring contrast'
                    },
                    {
                        color: '#8B0000',
                        name: 'Dark Red',
                        why: 'Too deep and cool'
                    },
                    {
                        color: '#4B0082',
                        name: 'Purple',
                        why: 'Clashes with warm undertone'
                    },
                ],
                outfits: [{
                        bg: 'linear-gradient(145deg,#FAE8CC,#F5D4A8)',
                        icon: '🌿',
                        occasion: 'Everyday',
                        name: 'Golden Hour',
                        items: 'Warm ivory linen top · Camel wide-leg trousers · Gold sandals · Woven bag'
                    },
                    {
                        bg: 'linear-gradient(145deg,#FFD8A0,#E8C080)',
                        icon: '🌸',
                        occasion: 'Weekend',
                        name: 'Peach Bloom',
                        items: 'Floral blouse in peach and cream · Light denim · Tan mules · Dainty gold earrings'
                    },
                    {
                        bg: 'linear-gradient(145deg,#F5C090,#E8A870)',
                        icon: '✨',
                        occasion: 'Evening',
                        name: 'Warm Gold',
                        items: 'Rust-orange midi dress · Strappy gold heels · Small gold clutch · Delicate necklace'
                    },
                ],
                celebs: [{
                        name: 'Taylor Swift',
                        note: 'Light warm colouring',
                        bg: '#FFD8A0',
                        icon: '🎵'
                    },
                    {
                        name: 'Reese Witherspoon',
                        note: 'Golden spring warmth',
                        bg: '#F5C090',
                        icon: '🌟'
                    },
                    {
                        name: 'Amanda Seyfried',
                        note: 'Peachy fair skin',
                        bg: '#FAE8CC',
                        icon: '🎬'
                    },
                    {
                        name: 'Scarlett Johansson',
                        note: 'Warm light features',
                        bg: '#E8D4A0',
                        icon: '🎭'
                    },
                ],
                relatedSeasons: [{
                    id: 'true-spring',
                    label: 'True Spring'
                }, {
                    id: 'light-summer',
                    label: 'Light Summer'
                }]
            },

            'true-spring': {
                name: 'True Spring',
                seasonType: '🌸 Spring · Warm · Clear',
                heroBg: 'linear-gradient(145deg,#F0C880,#E8A050,#D88040)',
                heroColor: '#3C1800',
                accent: '#D4714A',
                visualBg: 'linear-gradient(145deg,#FFD700,#FFA500)',
                emoji: '🌻',
                tagline: 'Vibrant, warm, and radiantly alive',
                heroDesc: 'True Spring is the quintessential spring — warm, clear, and vibrantly fresh. Your colouring is the embodiment of a sun-drenched spring day: golden, bright, and full of life.',
                badge1Icon: '🌡️',
                badge1Title: 'Warm Undertone',
                badge1Sub: 'Golden, clear',
                badge2Icon: '💎',
                badge2Title: 'Clear Quality',
                badge2Sub: 'Vivid, bright',
                palette: ['#F4A460', '#FFD700', '#FF7F50', '#90EE90', '#FFB347', '#FFA07A', '#98FB98', '#F0E68C'],
                neutrals: ['#F5DEB3', '#D2B48C', '#C8A870', '#A0856A'],
                neutralDesc: 'Warm wheat, camel, and golden tan are your neutral anchors. These warm, golden neutrals work with everything in your wardrobe.',
                paletteDesc: 'Your palette is warm, clear, and vibrant. Think golden yellows, bright corals, warm aquas, and clear spring greens. You can carry more saturation than Light Spring.',
                skin: 'Fair to medium skin with a warm, golden or peachy-golden undertone. May have visible warmth even in lighter skin. Freckles are common. Tans to a beautiful golden colour.',
                eyes: 'Clear blue, green, or warm hazel with golden or amber flecks. Eyes are often vivid and bright — sometimes described as sparkling. Warm golden ring around the iris is common.',
                hair: 'Golden blonde, honey blonde, warm light brown, or auburn. Often has natural golden highlights. Hair has a warm, sunny quality that seems to catch the light.',
                glowEffect: 'True Springs in their colours look genuinely sun-kissed and alive. Their skin seems to radiate warmth, and their eyes sparkle more brightly. The overall effect is fresh, healthy, and radiant.',
                makeupDesc: 'True Springs can handle slightly more colour than Light Springs. Keep the warmth golden and the finish fresh — nothing cool, ashy, or smoky.',
                makeup: [{
                        color: '#F5C89C',
                        name: 'Golden Beige',
                        type: 'Foundation'
                    },
                    {
                        color: '#FF8C69',
                        name: 'Warm Salmon',
                        type: 'Blush'
                    },
                    {
                        color: '#FF6347',
                        name: 'Bright Coral',
                        type: 'Lips'
                    },
                    {
                        color: '#DAA520',
                        name: 'Golden Yellow',
                        type: 'Eyes'
                    },
                    {
                        color: '#FF7F50',
                        name: 'Vivid Coral',
                        type: 'Lips'
                    },
                    {
                        color: '#CD853F',
                        name: 'Warm Bronze',
                        type: 'Eyes'
                    },
                    {
                        color: '#FFA07A',
                        name: 'Light Salmon',
                        type: 'Blush'
                    },
                    {
                        color: '#FFD700',
                        name: 'Gold Shimmer',
                        type: 'Highlighter'
                    },
                ],
                foundationNote: 'Look for warm, golden-beige foundations. You are one of the seasons that can handle a touch of yellow in your base without it looking sallow.',
                makeupRule: 'Your keyword is "golden." Everything should have warm, golden undertones. Cool pinks and berries will make you look ill. Coral is always your friend.',
                wardrobeTips: [{
                        title: 'Wear warm, clear colours',
                        desc: 'Your palette is warm AND clear — meaning you can handle brightness. Vivid corals, warm turquoise, and bright yellows are your playground.'
                    },
                    {
                        title: 'Mix warm brights with naturals',
                        desc: 'Pair a vivid coral top with warm camel trousers for a signature True Spring look that feels both bold and natural.'
                    },
                    {
                        title: 'Avoid dull, muddy colours',
                        desc: 'Your colouring is clear, not muted. Dull, greyed-out shades will make you look tired. Stick to warm and clear.'
                    },
                    {
                        title: 'Use the full spring spectrum',
                        desc: 'From lightest peach to deepest warm tan — you can wear the full range of spring colours with equal confidence.'
                    },
                ],
                avoid: [{
                        color: '#4B0082',
                        name: 'Purple/Violet',
                        why: 'Too cool for your warmth'
                    },
                    {
                        color: '#696969',
                        name: 'Cool Grey',
                        why: 'Makes you look dull'
                    },
                    {
                        color: '#FF1493',
                        name: 'Hot Pink',
                        why: 'Too cool and artificial'
                    },
                    {
                        color: '#000000',
                        name: 'Black',
                        why: 'Overwhelms your fresh colouring'
                    },
                    {
                        color: '#483D8B',
                        name: 'Dark Slate',
                        why: 'Too cool and heavy'
                    },
                    {
                        color: '#2F4F4F',
                        name: 'Dark Teal',
                        why: 'Too dark and cool-leaning'
                    },
                ],
                outfits: [{
                        bg: 'linear-gradient(145deg,#FFD700,#FFA500)',
                        icon: '🌞',
                        occasion: 'Day',
                        name: 'Golden Hour Chic',
                        items: 'Warm yellow sundress · Tan wedge sandals · Woven sun hat · Gold bangles'
                    },
                    {
                        bg: 'linear-gradient(145deg,#FF7F50,#FF6347)',
                        icon: '🌺',
                        occasion: 'Casual',
                        name: 'Coral Spring',
                        items: 'Coral wrap top · White wide-leg jeans · Tan mules · Simple gold hoops'
                    },
                    {
                        bg: 'linear-gradient(145deg,#90EE90,#6BBF6B)',
                        icon: '🌿',
                        occasion: 'Evening',
                        name: 'Spring Garden',
                        items: 'Warm green midi dress · Tan strappy heels · Gold drop earrings · Nude clutch'
                    },
                ],
                celebs: [{
                        name: 'Jennifer Aniston',
                        note: 'Warm golden features',
                        bg: '#FFD700',
                        icon: '🌟'
                    },
                    {
                        name: 'Blake Lively',
                        note: 'Golden spring warmth',
                        bg: '#F5C090',
                        icon: '🎬'
                    },
                    {
                        name: 'Sienna Miller',
                        note: 'Vivid warm colouring',
                        bg: '#FFA07A',
                        icon: '💫'
                    },
                    {
                        name: 'Cameron Diaz',
                        note: 'Clear warm tones',
                        bg: '#FFD8A0',
                        icon: '🎭'
                    },
                ],
                relatedSeasons: [{
                    id: 'light-spring',
                    label: 'Light Spring'
                }, {
                    id: 'warm-spring',
                    label: 'Warm Spring'
                }]
            },

            'warm-spring': {
                name: 'Warm Spring',
                seasonType: '🌸 Spring · Warm · Deep',
                heroBg: 'linear-gradient(145deg,#E8A870,#D48048,#C06030)',
                heroColor: '#fff',
                accent: '#B85A38',
                visualBg: 'linear-gradient(145deg,#D4A843,#C88030)',
                emoji: '🔥',
                tagline: 'Boldly warm, richly golden, deeply radiant',
                heroDesc: 'Warm Spring sits at the intersection of spring and autumn — golden, warm, and with slightly more depth than other springs. You share autumn\'s earthiness but retain spring\'s clarity.',
                badge1Icon: '🌡️',
                badge1Title: 'Warm Undertone',
                badge1Sub: 'Deep golden warmth',
                badge2Icon: '🌿',
                badge2Title: 'Spring-Autumn Bridge',
                badge2Sub: 'Richer than spring',
                palette: ['#E8855A', '#D4A843', '#8B7035', '#C06030', '#A0522D', '#B8860B', '#CD853F', '#8B6914'],
                neutrals: ['#D2B48C', '#C8A050', '#A07840', '#806030'],
                neutralDesc: 'Deep camel, warm tan, and golden brown serve as your richest neutrals — far earthier than other spring seasons.',
                paletteDesc: 'Your palette is the warmest of all springs — deeper, richer, and slightly more muted. Think golden ambers, warm tans, rich corals, and earthy greens.',
                skin: 'Light to medium-tan skin with a strong golden or bronzed warm undertone. Often tans deeply and beautifully. May look year-round as if lightly sun-kissed.',
                eyes: 'Warm hazel, amber, golden brown, or warm green. Eyes often have strong golden or amber flecks. The eyes appear warm and richly coloured.',
                hair: 'Golden brown, auburn, warm chestnut, or medium golden blonde. Often has natural warm highlights. Hair has a naturally rich, honeyed quality.',
                glowEffect: 'Warm Springs in their colours look as though they\'ve just returned from a sun-drenched holiday — bronzed, vital, and deeply alive. The warmth in the colours amplifies their natural golden glow.',
                makeupDesc: 'Your makeup should be warm, golden, and slightly richer than other springs. Bronze and amber tones are your signature.',
                makeup: [{
                        color: '#C8A060',
                        name: 'Warm Golden Tan',
                        type: 'Foundation'
                    },
                    {
                        color: '#C86040',
                        name: 'Terracotta Blush',
                        type: 'Blush'
                    },
                    {
                        color: '#B8502A',
                        name: 'Warm Brick',
                        type: 'Lips'
                    },
                    {
                        color: '#8B6914',
                        name: 'Deep Gold',
                        type: 'Eyes'
                    },
                    {
                        color: '#CD853F',
                        name: 'Warm Copper',
                        type: 'Eyes'
                    },
                    {
                        color: '#E8904A',
                        name: 'Amber Coral',
                        type: 'Lips'
                    },
                    {
                        color: '#B87040',
                        name: 'Deep Peach',
                        type: 'Blush'
                    },
                    {
                        color: '#C8A040',
                        name: 'Antique Gold',
                        type: 'Highlighter'
                    },
                ],
                foundationNote: 'You need a foundation with a strong warm, golden undertone — possibly the warmest of all spring foundations. Look for "warm golden" or "warm tan" shades.',
                makeupRule: 'Think bronze, amber, and deep warm gold. You\'re the spring season that can handle the richest, warmest makeup shades without being overwhelmed.',
                wardrobeTips: [{
                        title: 'Embrace golden ambers and rusts',
                        desc: 'Your richer colouring can handle deeper warm tones like rust, amber, golden brown, and warm tan that would overwhelm lighter springs.'
                    },
                    {
                        title: 'Bridge spring and autumn',
                        desc: 'You can borrow from the autumn palette — try muted olive, warm terracotta, and rich camel alongside clearer spring shades.'
                    },
                    {
                        title: 'Keep your metals gold',
                        desc: 'Gold in every shade — antique gold, burnished copper, rose gold — all enhance your warm depth beautifully.'
                    },
                    {
                        title: 'Layer warm tones',
                        desc: 'A tonal outfit in different shades of warm amber, gold, and tan creates a sophisticated, pulled-together look.'
                    },
                ],
                avoid: [{
                        color: '#000080',
                        name: 'Navy',
                        why: 'Too cool for your golden depth'
                    },
                    {
                        color: '#E0E0E0',
                        name: 'Cool Silver/Grey',
                        why: 'Clashes with warm richness'
                    },
                    {
                        color: '#FF69B4',
                        name: 'Cool Pink',
                        why: 'Fights with your warm undertone'
                    },
                    {
                        color: '#4B0082',
                        name: 'Violet',
                        why: 'Too cool and artificial'
                    },
                    {
                        color: '#F0F0F0',
                        name: 'Icy White',
                        why: 'Washes out your warmth'
                    },
                    {
                        color: '#2F4F4F',
                        name: 'Dark Cool Green',
                        why: 'Too ashy and cool'
                    },
                ],
                outfits: [{
                        bg: 'linear-gradient(145deg,#D4A843,#C06030)',
                        icon: '🌾',
                        occasion: 'Casual',
                        name: 'Golden Harvest',
                        items: 'Amber knit sweater · Warm tan trousers · Cognac leather boots · Gold pendant'
                    },
                    {
                        bg: 'linear-gradient(145deg,#E8855A,#C06030)',
                        icon: '🍊',
                        occasion: 'Day',
                        name: 'Spiced Citrus',
                        items: 'Rust-orange wrap dress · Cognac sandals · Woven tote · Hammered gold earrings'
                    },
                    {
                        bg: 'linear-gradient(145deg,#8B7035,#A08030)',
                        icon: '🌿',
                        occasion: 'Evening',
                        name: 'Warm Earth',
                        items: 'Olive-gold silk blouse · Dark camel trousers · Brown heels · Antique gold jewellery'
                    },
                ],
                celebs: [{
                        name: 'Jessica Alba',
                        note: 'Warm golden depth',
                        bg: '#D4A843',
                        icon: '🌟'
                    },
                    {
                        name: 'Jennifer Lopez',
                        note: 'Rich warm colouring',
                        bg: '#C8A060',
                        icon: '💃'
                    },
                    {
                        name: 'Beyoncé',
                        note: 'Deep warm spring',
                        bg: '#C06030',
                        icon: '🎵'
                    },
                    {
                        name: 'Halle Berry',
                        note: 'Warm golden features',
                        bg: '#B8860B',
                        icon: '🏆'
                    },
                ],
                relatedSeasons: [{
                    id: 'true-spring',
                    label: 'True Spring'
                }, {
                    id: 'soft-autumn',
                    label: 'Soft Autumn'
                }]
            },

            'light-summer': {
                name: 'Light Summer',
                seasonType: '☁️ Summer · Cool · Light',
                heroBg: 'linear-gradient(145deg,#D8E4F0,#C0CEDC,#A8B8CC)',
                heroColor: '#1A2A4A',
                accent: '#6878B4',
                visualBg: 'linear-gradient(145deg,#D0DCF0,#B8C8E0)',
                emoji: '🌙',
                tagline: 'Delicate as morning mist, cool as dawn',
                heroDesc: 'Light Summer is the most ethereally delicate of all seasons. Sharing lightness with Light Spring but cool where spring is warm, your colouring has a powder-soft, dreamy quality.',
                badge1Icon: '❄️',
                badge1Title: 'Cool Undertone',
                badge1Sub: 'Soft, blued cool',
                badge2Icon: '🌫️',
                badge2Title: 'Light Value',
                badge2Sub: 'Pale, airy depth',
                palette: ['#C8D8F0', '#D8C0D8', '#B8D0C0', '#E0D0E0', '#A8C0D8', '#C0B0CC', '#B8C8B8', '#D0C8E0'],
                neutrals: ['#E8E8F0', '#D0D0DC', '#B8B8CC', '#A0A0B8'],
                neutralDesc: 'Soft cool white, pale grey, and muted lavender-grey are your perfect neutrals — always with a cool, bluish quality.',
                paletteDesc: 'Your palette is a whisper — barely-there cool colours with a soft, powdery quality. Think powder blue, soft lilac, misty rose, and pale aqua.',
                skin: 'Fair, pale skin with a cool, slightly blue-pink undertone. Skin is often translucent-looking with visible veins. Very little natural colour — may appear porcelain. Burns easily.',
                eyes: 'Pale blue, pale grey-blue, pale grey, or pale cool green. Eyes often appear very light and almost transparent. A soft, watery quality is common.',
                hair: 'Ash blonde, light ash brown, cool blonde, or platinum blonde. Very little warmth in the hair — distinctly cool and ashy. May have natural cool highlights.',
                glowEffect: 'Light Summers in their colours appear ethereally beautiful — as though they\'ve stepped out of a watercolour painting. The soft, cool colours create an effect of delicate, luminous beauty.',
                makeupDesc: 'Keep everything cool, soft, and barely-there. This is the season for the most delicate, barely-visible makeup — "no makeup" makeup done beautifully cool.',
                makeup: [{
                        color: '#F5E8F0',
                        name: 'Cool Porcelain',
                        type: 'Foundation'
                    },
                    {
                        color: '#D8B0C8',
                        name: 'Soft Rose',
                        type: 'Blush'
                    },
                    {
                        color: '#C8A0B8',
                        name: 'Muted Pink',
                        type: 'Lips'
                    },
                    {
                        color: '#A8B8D8',
                        name: 'Soft Blue-Grey',
                        type: 'Eyes'
                    },
                    {
                        color: '#B8A8CC',
                        name: 'Pale Lavender',
                        type: 'Eyes'
                    },
                    {
                        color: '#D0C0D8',
                        name: 'Cool Lilac',
                        type: 'Eyes'
                    },
                    {
                        color: '#E0C8D8',
                        name: 'Barely-there Pink',
                        type: 'Blush'
                    },
                    {
                        color: '#E8E0F0',
                        name: 'Pearl Shimmer',
                        type: 'Highlighter'
                    },
                ],
                foundationNote: 'Choose foundations with cool, pink undertones. Your skin may be one of the most delicate of all seasons. Opt for buildable coverage that lets your skin breathe.',
                makeupRule: 'Less is always more. Your colouring is so delicate that heavy makeup looks costumey. The goal is to enhance, not create — everything should be barely visible.',
                wardrobeTips: [{
                        title: 'Wear soft, cool pastels',
                        desc: 'Powder blue, pale lavender, soft mint, and misty rose are your signature. These barely-there cool colours make your skin glow.'
                    },
                    {
                        title: 'Avoid bright or warm colours',
                        desc: 'High-saturation colours overwhelm you. Your palette is about subtlety and the most delicate expressions of cool colour.'
                    },
                    {
                        title: 'Choose pale neutrals',
                        desc: 'Soft cool white, pale grey, and lavender-grey are your neutral anchors — never bright white or warm beige.'
                    },
                    {
                        title: 'Layer tones of the same colour',
                        desc: 'Tonal dressing — different shades of the same cool colour — looks particularly stunning on Light Summers.'
                    },
                ],
                avoid: [{
                        color: '#FF6600',
                        name: 'Orange',
                        why: 'Warm and jarring'
                    },
                    {
                        color: '#FFD700',
                        name: 'Yellow',
                        why: 'Too warm, clashes with cool'
                    },
                    {
                        color: '#000000',
                        name: 'Black',
                        why: 'Too harsh, creates shock'
                    },
                    {
                        color: '#8B4513',
                        name: 'Brown',
                        why: 'Warm tones clash with cool'
                    },
                    {
                        color: '#FF1493',
                        name: 'Hot Pink',
                        why: 'Too saturated, too warm'
                    },
                    {
                        color: '#006400',
                        name: 'Dark Green',
                        why: 'Too deep and warm'
                    },
                ],
                outfits: [{
                        bg: 'linear-gradient(145deg,#D0DCF0,#B8C8E0)',
                        icon: '🕊️',
                        occasion: 'Day',
                        name: 'Cloud Soft',
                        items: 'Powder blue silk blouse · Pale grey trousers · Silver ballet flats · Pearl earrings'
                    },
                    {
                        bg: 'linear-gradient(145deg,#D8C0D8,#C8B0CC)',
                        icon: '🌸',
                        occasion: 'Casual',
                        name: 'Misty Lavender',
                        items: 'Soft lilac knit · Light grey jeans · White sneakers · Delicate silver necklace'
                    },
                    {
                        bg: 'linear-gradient(145deg,#C8D8F0,#A8C0D8)',
                        icon: '✨',
                        occasion: 'Evening',
                        name: 'Moonlit Mist',
                        items: 'Pale blue-grey dress · Silver strappy heels · Silver evening bag · Diamond studs'
                    },
                ],
                celebs: [{
                        name: 'Gwyneth Paltrow',
                        note: 'Cool, light colouring',
                        bg: '#D8E4F0',
                        icon: '🌟'
                    },
                    {
                        name: 'Cate Blanchett',
                        note: 'Ethereal cool lightness',
                        bg: '#C0D0E0',
                        icon: '🎬'
                    },
                    {
                        name: 'January Jones',
                        note: 'Pale cool features',
                        bg: '#E0E8F0',
                        icon: '💫'
                    },
                    {
                        name: 'Nicole Kidman',
                        note: 'Cool, fair skin tones',
                        bg: '#D0D8E8',
                        icon: '🎭'
                    },
                ],
                relatedSeasons: [{
                    id: 'true-summer',
                    label: 'True Summer'
                }, {
                    id: 'light-spring',
                    label: 'Light Spring'
                }]
            },

            'true-summer': {
                name: 'True Summer',
                seasonType: '☁️ Summer · Cool · Muted',
                heroBg: 'linear-gradient(145deg,#B8C8E0,#9AAAC8,#7A8AAC)',
                heroColor: '#F8F4FF',
                accent: '#6880A8',
                visualBg: 'linear-gradient(145deg,#B0C0D8,#9090B8)',
                emoji: '🌺',
                tagline: 'Quietly elegant, coolly romantic, softly beautiful',
                heroDesc: 'True Summer is the quintessential summer — cool, muted, and with a quietly breathtaking romantic quality. Your colouring has a natural softness that makes dusty rose and lavender your destiny.',
                badge1Icon: '❄️',
                badge1Title: 'Cool Undertone',
                badge1Sub: 'Rosy, bluish cool',
                badge2Icon: '🎨',
                badge2Title: 'Muted Quality',
                badge2Sub: 'Soft, blended',
                palette: ['#C8A2C8', '#8FA8C8', '#C9A0DC', '#B0C4DE', '#D8BFD8', '#88A4BC', '#A0B8B0', '#BCA8C8'],
                neutrals: ['#E8E4F0', '#D0CCE0', '#B8B4CC', '#A0A0B8'],
                neutralDesc: 'Soft grey-lavender, cool greige, and dusty mauve are your perfect neutrals — always subtly cool.',
                paletteDesc: 'Your palette is cool and muted — like colours seen through the softest filter. Dusty rose, lavender, powder blue, mauve, and soft sage define your season.',
                skin: 'Fair to medium skin with a pink or rosy cool undertone. Often has a porcelain or rose-touched quality. May have faint rose or pink flush naturally. Burns in sun.',
                eyes: 'Grey-blue, grey-green, soft hazel, or pale violet-grey. Eyes often appear soft and slightly greyed — never vivid. A romantic, quiet quality to the gaze.',
                hair: 'Ash blonde, mousy brown, cool dark brown, or ashy chestnut. Always distinctly cool and ashy — never golden or warm. Hair may appear to have blue or cool highlights.',
                glowEffect: 'True Summers in their colours emanate a romantic, softly beautiful quality — like a Pre-Raphaelite painting come to life. The muted cool colours create harmony with their naturally soft features.',
                makeupDesc: 'Keep makeup cool, muted, and softly blended. Your keyword is "dusty" — everything should have a slightly softened, powdery quality.',
                makeup: [{
                        color: '#F0E4EC',
                        name: 'Cool Rose Ivory',
                        type: 'Foundation'
                    },
                    {
                        color: '#D8A8BC',
                        name: 'Dusty Rose',
                        type: 'Blush'
                    },
                    {
                        color: '#C090A8',
                        name: 'Muted Berry',
                        type: 'Lips'
                    },
                    {
                        color: '#A09AB8',
                        name: 'Dusty Lavender',
                        type: 'Eyes'
                    },
                    {
                        color: '#8888A8',
                        name: 'Soft Mauve',
                        type: 'Eyes'
                    },
                    {
                        color: '#B8A8CC',
                        name: 'Blush Lilac',
                        type: 'Eyes'
                    },
                    {
                        color: '#D0B0C0',
                        name: 'Cool Petal',
                        type: 'Blush'
                    },
                    {
                        color: '#E0D8F0',
                        name: 'Lavender Shimmer',
                        type: 'Highlighter'
                    },
                ],
                foundationNote: 'Cool, rosy-pink undertone foundations. Look for shades described as "rose beige" or "cool beige." Avoid anything with yellow or peach undertones.',
                makeupRule: 'The word is "dusty." Dusty rose, dusty lavender, dusty mauve. Bright or clear colours look too artificial on you — the softened, muted version is always better.',
                wardrobeTips: [{
                        title: 'Dusty rose is your superpower',
                        desc: 'No season wears dusty rose like True Summer. It blends with your colouring so beautifully it looks as if it were invented for you.'
                    },
                    {
                        title: 'Build a muted cool wardrobe',
                        desc: 'Invest in lavender, dusty blue, soft sage, cool mauve, and powder grey as your wardrobe staples — these all harmonise effortlessly.'
                    },
                    {
                        title: 'Silver over gold always',
                        desc: 'Silver, white gold, and platinum jewellery enhances your cool undertone. Gold can fight with your natural colouring.'
                    },
                    {
                        title: 'Avoid bright or warm colours',
                        desc: 'Bright, saturated colours look artificial against your soft, muted natural colouring. The dustier the shade, the better.'
                    },
                ],
                avoid: [{
                        color: '#FF6600',
                        name: 'Orange',
                        why: 'Warm and clashing'
                    },
                    {
                        color: '#FFD700',
                        name: 'Bright Yellow',
                        why: 'Too warm and sharp'
                    },
                    {
                        color: '#FF4500',
                        name: 'Red-Orange',
                        why: 'Too warm and bright'
                    },
                    {
                        color: '#8B4513',
                        name: 'Warm Brown',
                        why: 'Warm tones clash'
                    },
                    {
                        color: '#006400',
                        name: 'Forest Green',
                        why: 'Too warm and heavy'
                    },
                    {
                        color: '#FF1493',
                        name: 'Hot Pink',
                        why: 'Too bright and warm'
                    },
                ],
                outfits: [{
                        bg: 'linear-gradient(145deg,#D8BFD8,#C8A2C8)',
                        icon: '🌸',
                        occasion: 'Day',
                        name: 'Dusty Romance',
                        items: 'Dusty rose silk blouse · Soft grey tailored trousers · Nude pointed flats · Silver earrings'
                    },
                    {
                        bg: 'linear-gradient(145deg,#B0C4DE,#8FA8C8)',
                        icon: '🕊️',
                        occasion: 'Casual',
                        name: 'Powder Sky',
                        items: 'Powder blue linen shirt · Pale grey straight jeans · White trainers · Silver pendant'
                    },
                    {
                        bg: 'linear-gradient(145deg,#C9A0DC,#B090C8)',
                        icon: '💜',
                        occasion: 'Evening',
                        name: 'Lavender Dusk',
                        items: 'Soft lavender midi dress · Strappy silver heels · Silver clutch · Amethyst drop earrings'
                    },
                ],
                celebs: [{
                        name: 'Princess Diana',
                        note: 'Iconic cool summer',
                        bg: '#C8A2C8',
                        icon: '👑'
                    },
                    {
                        name: 'Kate Middleton',
                        note: 'Cool summer elegance',
                        bg: '#B0C4DE',
                        icon: '🌹'
                    },
                    {
                        name: 'Jennifer Aniston',
                        note: 'Soft cool features',
                        bg: '#D8BFD8',
                        icon: '🌟'
                    },
                    {
                        name: 'Grace Kelly',
                        note: 'Summer season classic',
                        bg: '#C9A0DC',
                        icon: '💫'
                    },
                ],
                relatedSeasons: [{
                    id: 'light-summer',
                    label: 'Light Summer'
                }, {
                    id: 'soft-summer',
                    label: 'Soft Summer'
                }]
            },

            'soft-summer': {
                name: 'Soft Summer',
                seasonType: '☁️ Summer · Neutral-Cool · Muted',
                heroBg: 'linear-gradient(145deg,#C0C8D4,#A8B0BC,#9098A8)',
                heroColor: '#F0EEF8',
                accent: '#7880A0',
                visualBg: 'linear-gradient(145deg,#B8C0CC,#A0A8B4)',
                emoji: '🌫️',
                tagline: 'Beautifully blended, neutrally muted, serenely soft',
                heroDesc: 'Soft Summer sits at the boundary of summer and autumn — the most muted of all 12 seasons. Your colouring is exquisitely blended with no strong contrasts and a neutrally cool base.',
                badge1Icon: '⚖️',
                badge1Title: 'Neutral-Cool',
                badge1Sub: 'Almost neutral',
                badge2Icon: '🎨',
                badge2Title: 'Most Muted',
                badge2Sub: 'Softest of all 12',
                palette: ['#B8C0CC', '#A8B0BC', '#989090', '#B0A8A0', '#A0A8A0', '#B8B0A8', '#C0B8B0', '#908888'],
                neutrals: ['#D4D0C8', '#C0BCB4', '#ACAAA4', '#989490'],
                neutralDesc: 'Warm grey, blued greige, and dusty taupe are your neutrals — exquisitely blended between warm and cool.',
                paletteDesc: 'The most muted palette of all 12 seasons. Your colours are greyish, blended, and soft — they should look as if they\'ve been mixed with a little grey and white.',
                skin: 'Fair to medium skin with a neutrally cool undertone — sometimes hard to pin as warm or cool. Often slightly muted in natural colour. May have a grey or ashy quality to the skin tone.',
                eyes: 'Grey, grey-hazel, grey-green, or pale grey-blue. Eyes are never vivid — always softly blended and slightly greyed. A neutral, gentle quality.',
                hair: 'Mousy brown, cool medium brown, ashy blonde, or greyed brown. Hair is notably low-contrast — neither strongly warm nor strongly cool. Often described as "medium brown."',
                glowEffect: 'Soft Summers in their colours look effortlessly elegant — as though everything they wear was somehow chosen to match their naturally blended, sophisticated colouring.',
                makeupDesc: 'Soft Summer wears the most restrained makeup of all seasons. Everything should be barely visible, blended, and neutrally toned.',
                makeup: [{
                        color: '#E8E0DC',
                        name: 'Neutral Beige',
                        type: 'Foundation'
                    },
                    {
                        color: '#C0A8A8',
                        name: 'Muted Rose',
                        type: 'Blush'
                    },
                    {
                        color: '#A89898',
                        name: 'Blended Mauve',
                        type: 'Lips'
                    },
                    {
                        color: '#A0A0B0',
                        name: 'Soft Grey',
                        type: 'Eyes'
                    },
                    {
                        color: '#989898',
                        name: 'Neutral Taupe',
                        type: 'Eyes'
                    },
                    {
                        color: '#B8B0A8',
                        name: 'Warm Grey',
                        type: 'Eyes'
                    },
                    {
                        color: '#C8C0B8',
                        name: 'Dusty Pink-Grey',
                        type: 'Blush'
                    },
                    {
                        color: '#D8D4D0',
                        name: 'Silver Greige',
                        type: 'Highlighter'
                    },
                ],
                foundationNote: 'Neutral-cool foundations — not strongly pink, not strongly yellow. Look for "neutral beige" or "soft beige" shades. Your undertone is the hardest to match of all seasons.',
                makeupRule: 'Grey is your neutral — not black, not brown. Use soft grey in eye looks, blended mauve on lips, and a barely-there blush. The less visible, the better.',
                wardrobeTips: [{
                        title: 'Embrace grey as your neutral',
                        desc: 'Grey in every shade — warm grey, cool grey, blue-grey — is your most powerful neutral and anchor for all outfits.'
                    },
                    {
                        title: 'Choose muted, blended colours',
                        desc: 'Every colour in your wardrobe should look slightly softened. If it looks "bright," it\'s probably too saturated for Soft Summer.'
                    },
                    {
                        title: 'Avoid high contrast',
                        desc: 'High contrast outfits — like black and white — are wrong for you. Stay within a narrow value range for the most flattering look.'
                    },
                    {
                        title: 'Tonal dressing is your signature',
                        desc: 'Wearing multiple shades of the same muted tone creates a sophisticated, harmonious look that is entirely your own.'
                    },
                ],
                avoid: [{
                        color: '#FF6600',
                        name: 'Bright Orange',
                        why: 'Too vivid and warm'
                    },
                    {
                        color: '#FFD700',
                        name: 'Bright Yellow',
                        why: 'Too saturated, too warm'
                    },
                    {
                        color: '#000000',
                        name: 'Black',
                        why: 'Too harsh for your soft tones'
                    },
                    {
                        color: '#FFFFFF',
                        name: 'Pure White',
                        why: 'Too high contrast'
                    },
                    {
                        color: '#FF0000',
                        name: 'Bright Red',
                        why: 'Too vivid and warm'
                    },
                    {
                        color: '#006400',
                        name: 'Strong Green',
                        why: 'Too saturated for your palette'
                    },
                ],
                outfits: [{
                        bg: 'linear-gradient(145deg,#C0C8D4,#A8B0BC)',
                        icon: '🌫️',
                        occasion: 'Day',
                        name: 'Morning Mist',
                        items: 'Soft grey linen blazer · Blued grey trousers · Light taupe loafers · Silver minimalist watch'
                    },
                    {
                        bg: 'linear-gradient(145deg,#B0A8A0,#A09898)',
                        icon: '🕊️',
                        occasion: 'Casual',
                        name: 'Blended Neutral',
                        items: 'Muted sage knit top · Warm grey jeans · Grey canvas sneakers · Dainty silver jewellery'
                    },
                    {
                        bg: 'linear-gradient(145deg,#989090,#808888)',
                        icon: '🌙',
                        occasion: 'Evening',
                        name: 'Soft Dusk',
                        items: 'Dusty mauve midi dress · Nude-grey strappy heels · Grey evening bag · Pearl jewellery'
                    },
                ],
                celebs: [{
                        name: 'Meryl Streep',
                        note: 'Neutrally blended colouring',
                        bg: '#C0C8D4',
                        icon: '🏆'
                    },
                    {
                        name: 'Helen Mirren',
                        note: 'Soft summer elegance',
                        bg: '#B8C0CC',
                        icon: '👑'
                    },
                    {
                        name: 'Keira Knightley',
                        note: 'Muted neutral features',
                        bg: '#A8B0BC',
                        icon: '🎬'
                    },
                    {
                        name: 'Rachel Weisz',
                        note: 'Cool-neutral summer',
                        bg: '#B0B8C8',
                        icon: '💫'
                    },
                ],
                relatedSeasons: [{
                    id: 'true-summer',
                    label: 'True Summer'
                }, {
                    id: 'soft-autumn',
                    label: 'Soft Autumn'
                }]
            },

            'soft-autumn': {
                name: 'Soft Autumn',
                seasonType: '🍂 Autumn · Neutral-Warm · Muted',
                heroBg: 'linear-gradient(145deg,#C09070,#A87050,#906038)',
                heroColor: '#FFF4E8',
                accent: '#906038',
                visualBg: 'linear-gradient(145deg,#C8A070,#A88050)',
                emoji: '🍃',
                tagline: 'Warmly blended, softly natural, effortlessly elegant',
                heroDesc: 'Soft Autumn is the gentlest of the autumn seasons — warm but muted, and beautifully natural-looking. Your colouring is the most approachable and versatile in the entire 12-season system.',
                badge1Icon: '🌡️',
                badge1Title: 'Neutral-Warm',
                badge1Sub: 'Gently warm',
                badge2Icon: '🎨',
                badge2Title: 'Muted Quality',
                badge2Sub: 'Soft, natural',
                palette: ['#BC8F8F', '#A0917E', '#8FBC8F', '#C4A882', '#B08B72', '#9E8B7A', '#A8A070', '#BC9A70'],
                neutrals: ['#D4C8B8', '#C0B4A4', '#AC9E8E', '#988A7A'],
                neutralDesc: 'Warm greige, dusty camel, and muted mushroom form your neutral base — always warm but never stark.',
                paletteDesc: 'Your palette is warm and muted — nature\'s own colours. Dusty rose, warm taupe, soft olive, muted peach, and natural tones define the Soft Autumn aesthetic.',
                skin: 'Fair to medium skin with a warm, peachy or golden undertone — but less vivid than True Autumn. May have a slightly peachy or warm flush. Often described as having a "natural" quality.',
                eyes: 'Warm hazel, soft brown, or warm green — often with golden flecks but less vivid than True Autumn. Eyes appear softly warm and natural.',
                hair: 'Light to medium warm brown, soft auburn, or golden-tinged brown. Hair is warm but not richly so. Natural highlights are common. An approachable, natural warmth.',
                glowEffect: 'Soft Autumns in their colours look naturally beautiful — as though they never needed to try. The warm, muted tones blend seamlessly with their features for an effortlessly healthy look.',
                makeupDesc: 'Warm but soft — every shade should look like a natural extension of your colouring. Think "warm no-makeup makeup."',
                makeup: [{
                        color: '#D4A882',
                        name: 'Warm Sand',
                        type: 'Foundation'
                    },
                    {
                        color: '#C8906A',
                        name: 'Soft Terracotta',
                        type: 'Blush'
                    },
                    {
                        color: '#B87858',
                        name: 'Muted Warm Rose',
                        type: 'Lips'
                    },
                    {
                        color: '#A89060',
                        name: 'Warm Taupe',
                        type: 'Eyes'
                    },
                    {
                        color: '#908868',
                        name: 'Soft Olive',
                        type: 'Eyes'
                    },
                    {
                        color: '#C09870',
                        name: 'Warm Bronze',
                        type: 'Eyes'
                    },
                    {
                        color: '#D0A880',
                        name: 'Peach Coral',
                        type: 'Blush'
                    },
                    {
                        color: '#C8B080',
                        name: 'Warm Gold',
                        type: 'Highlighter'
                    },
                ],
                foundationNote: 'Warm, peachy-beige foundations — warmer than neutral but less golden than True Autumn. Look for "warm beige" or "soft golden" shades.',
                makeupRule: 'Warm and blended. Nothing too vivid or sharp. A warm peachy nude lip, a terracotta blush, and a soft taupe eyeshadow is the perfect Soft Autumn look.',
                wardrobeTips: [{
                        title: 'Dusty rose is surprisingly yours',
                        desc: 'Unlike other autumns, you can wear dusty rose — the warm version. It bridges your autumn warmth with summer\'s softness.'
                    },
                    {
                        title: 'Your olive is soft, not rich',
                        desc: 'Soft olive and sage green are perfect for you — they harmonise with your warm but muted natural colouring.'
                    },
                    {
                        title: 'Camel is your ultimate neutral',
                        desc: 'Warm camel, tan, and mushroom are your wardrobe staples — they blend with everything in your muted warm palette.'
                    },
                    {
                        title: 'Avoid both extremes',
                        desc: 'You sit between seasons, so avoid the richest autumn colours AND the coolest summer colours — stay in the muted warm middle.'
                    },
                ],
                avoid: [{
                        color: '#00008B',
                        name: 'Navy Blue',
                        why: 'Too cool and too dark'
                    },
                    {
                        color: '#FF69B4',
                        name: 'Hot Pink',
                        why: 'Too cool and vivid'
                    },
                    {
                        color: '#FFD700',
                        name: 'Bright Yellow',
                        why: 'Too clear, needs more muting'
                    },
                    {
                        color: '#FF0000',
                        name: 'Pure Red',
                        why: 'Too vivid and clear'
                    },
                    {
                        color: '#C0C0C0',
                        name: 'Cool Silver',
                        why: 'Undertone mismatch'
                    },
                    {
                        color: '#000000',
                        name: 'Black',
                        why: 'Too harsh and cool'
                    },
                ],
                outfits: [{
                        bg: 'linear-gradient(145deg,#C4A882,#A07858)',
                        icon: '🍂',
                        occasion: 'Casual',
                        name: 'Natural Warmth',
                        items: 'Warm camel oversized sweater · Olive straight jeans · Tan ankle boots · Wooden bead necklace'
                    },
                    {
                        bg: 'linear-gradient(145deg,#BC8F8F,#A07070)',
                        icon: '🌹',
                        occasion: 'Day',
                        name: 'Dusty Rose Day',
                        items: 'Dusty rose linen shirt · Warm taupe trousers · Camel loafers · Hammered gold earrings'
                    },
                    {
                        bg: 'linear-gradient(145deg,#8FBC8F,#6A9A6A)',
                        icon: '🌿',
                        occasion: 'Evening',
                        name: 'Sage Evening',
                        items: 'Soft olive silk wrap dress · Cognac heels · Simple gold chain · Warm brown clutch'
                    },
                ],
                celebs: [{
                        name: 'Sarah Jessica Parker',
                        note: 'Warm muted colouring',
                        bg: '#C4A882',
                        icon: '👠'
                    },
                    {
                        name: 'Julia Roberts',
                        note: 'Soft warm features',
                        bg: '#BC8F8F',
                        icon: '🎬'
                    },
                    {
                        name: 'Drew Barrymore',
                        note: 'Natural warm blonde',
                        bg: '#C8A870',
                        icon: '🌟'
                    },
                    {
                        name: 'Jennifer Garner',
                        note: 'Softly warm autumn',
                        bg: '#B08B72',
                        icon: '💫'
                    },
                ],
                relatedSeasons: [{
                    id: 'true-autumn',
                    label: 'True Autumn'
                }, {
                    id: 'soft-summer',
                    label: 'Soft Summer'
                }]
            },

            'true-autumn': {
                name: 'True Autumn',
                seasonType: '🍂 Autumn · Warm · Muted',
                heroBg: 'linear-gradient(145deg,#8A4A20,#B06030,#904820)',
                heroColor: '#FFF0D8',
                accent: '#C47838',
                visualBg: 'linear-gradient(145deg,#C97B5A,#A05030)',
                emoji: '🍁',
                tagline: 'Rich as harvest, warm as embers, deeply alive',
                heroDesc: 'True Autumn is the quintessential autumn — the most warm, earthy, and richly muted of all seasons. Your colouring is nature\'s palette in full harvest glory: terracotta, olive, and burnished gold.',
                badge1Icon: '🌡️',
                badge1Title: 'Warm Undertone',
                badge1Sub: 'Golden, earthy',
                badge2Icon: '🎨',
                badge2Title: 'Muted Quality',
                badge2Sub: 'Rich, earthy',
                palette: ['#C97B5A', '#D4A856', '#8B6914', '#556B2F', '#B8632A', '#8B4513', '#C4844A', '#6B4226'],
                neutrals: ['#C8A870', '#A88050', '#886030', '#684020'],
                neutralDesc: 'Rich camel, warm tan, and deep cognac form your neutral foundation — always earthy and warm.',
                paletteDesc: 'Your palette is the earth itself — terracotta, burnt orange, olive green, warm gold, and rich brown. Every shade has warmth and a slightly muted quality.',
                skin: 'Light to deep skin with a strong golden or olive warm undertone. Often tans deeply. May have a naturally bronzed quality year-round. Golden warm depth is the hallmark.',
                eyes: 'Hazel, warm brown, amber, or warm olive green — often with rich golden flecks. Eyes are warm and deeply coloured. A richly warm quality to the gaze.',
                hair: 'Auburn, chestnut, warm dark brown, or warm black. Hair has a richly warm quality — often with natural red or golden highlights. The most distinctly warm hair of all seasons.',
                glowEffect: 'True Autumns in their colours look powerfully, richly beautiful — like a woman surrounded by autumn leaves. The warm earth tones amplify their natural warmth to create a deeply alive, radiant appearance.',
                makeupDesc: 'Rich, warm, and earthy. True Autumn can wear the most intense warm makeup of any season without being overwhelmed.',
                makeup: [{
                        color: '#C47A5A',
                        name: 'Warm Terracotta',
                        type: 'Foundation'
                    },
                    {
                        color: '#C06040',
                        name: 'Brick Red Blush',
                        type: 'Blush'
                    },
                    {
                        color: '#B04A28',
                        name: 'Rich Burnt Red',
                        type: 'Lips'
                    },
                    {
                        color: '#8B6914',
                        name: 'Deep Gold',
                        type: 'Eyes'
                    },
                    {
                        color: '#8B4513',
                        name: 'Rich Brown',
                        type: 'Eyes'
                    },
                    {
                        color: '#B85A30',
                        name: 'Warm Copper',
                        type: 'Eyes'
                    },
                    {
                        color: '#C07040',
                        name: 'Terracotta',
                        type: 'Blush'
                    },
                    {
                        color: '#C89040',
                        name: 'Bronze Gold',
                        type: 'Highlighter'
                    },
                ],
                foundationNote: 'Strong warm, golden foundations. True Autumn often needs the warmest, most golden-toned foundation available. Never pink or cool.',
                makeupRule: 'Think earth, spice, and harvest. Terracotta lip, bronzy eyes, and a brick blush is the ultimate True Autumn look. Rich and earthy, never cool.',
                wardrobeTips: [{
                        title: 'Terracotta is your signature',
                        desc: 'No season wears terracotta like True Autumn. It\'s not just a colour for you — it\'s almost your second skin.'
                    },
                    {
                        title: 'Olive green is essential',
                        desc: 'Warm olive in every shade — from soft sage to deep forest olive — is one of your most powerful and versatile colours.'
                    },
                    {
                        title: 'Build around warm browns',
                        desc: 'Rich brown, cognac, tan, and camel form the backbone of your wardrobe. These neutrals anchor every outfit.'
                    },
                    {
                        title: 'Gold accessories only',
                        desc: 'Warm gold, antique gold, and burnished copper in jewellery enhance your warm depth. Silver fights your undertone.'
                    },
                ],
                avoid: [{
                        color: '#FF69B4',
                        name: 'Cool Pink',
                        why: 'Clashes with warm depth'
                    },
                    {
                        color: '#87CEEB',
                        name: 'Cool Blue',
                        why: 'Too cool and contrasting'
                    },
                    {
                        color: '#E0E0E0',
                        name: 'Cool Grey',
                        why: 'Clashes with warm richness'
                    },
                    {
                        color: '#000080',
                        name: 'Navy',
                        why: 'Too cool and harsh'
                    },
                    {
                        color: '#F0F0F0',
                        name: 'Cool White',
                        why: 'Washes out your warmth'
                    },
                    {
                        color: '#C0C0C0',
                        name: 'Silver',
                        why: 'Undertone mismatch'
                    },
                ],
                outfits: [{
                        bg: 'linear-gradient(145deg,#C97B5A,#A05030)',
                        icon: '🍂',
                        occasion: 'Casual',
                        name: 'Harvest Earth',
                        items: 'Terracotta linen top · Dark olive wide-leg trousers · Cognac leather boots · Bronze earrings'
                    },
                    {
                        bg: 'linear-gradient(145deg,#D4A856,#B08030)',
                        icon: '🌾',
                        occasion: 'Day',
                        name: 'Golden Field',
                        items: 'Warm mustard knit sweater · Rich brown corduroy · Tan leather boots · Antique gold pendant'
                    },
                    {
                        bg: 'linear-gradient(145deg,#556B2F,#3D5020)',
                        icon: '🌿',
                        occasion: 'Evening',
                        name: 'Dark Olive',
                        items: 'Deep olive silk wrap dress · Brown heeled boots · Tortoiseshell clutch · Gold chain necklace'
                    },
                ],
                celebs: [{
                        name: 'Julianne Moore',
                        note: 'Classic warm autumn',
                        bg: '#C97B5A',
                        icon: '🌟'
                    },
                    {
                        name: 'Marcia Cross',
                        note: 'Rich auburn warmth',
                        bg: '#D4A856',
                        icon: '💫'
                    },
                    {
                        name: 'Emma Stone',
                        note: 'Warm autumn colouring',
                        bg: '#C4844A',
                        icon: '🎬'
                    },
                    {
                        name: 'Bryce Dallas Howard',
                        note: 'Deep warm autumn',
                        bg: '#B8632A',
                        icon: '🏆'
                    },
                ],
                relatedSeasons: [{
                    id: 'soft-autumn',
                    label: 'Soft Autumn'
                }, {
                    id: 'dark-autumn',
                    label: 'Dark Autumn'
                }]
            },

            'dark-autumn': {
                name: 'Dark Autumn',
                seasonType: '🍂 Autumn · Warm · Dark',
                heroBg: 'linear-gradient(145deg,#4A2810,#703818,#602818)',
                heroColor: '#FFE8D0',
                accent: '#C06030',
                visualBg: 'linear-gradient(145deg,#8B4A20,#603010)',
                emoji: '🔥',
                tagline: 'Dramatic, deep, and powerfully warm',
                heroDesc: 'Dark Autumn sits at the dramatic intersection of autumn and winter — the darkest autumn, with deep, rich, intensely warm colouring. Your natural depth commands attention.',
                badge1Icon: '🌡️',
                badge1Title: 'Warm Undertone',
                badge1Sub: 'Deep golden-warm',
                badge2Icon: '🌑',
                badge2Title: 'Dark Value',
                badge2Sub: 'Deep, rich depth',
                palette: ['#8B4A20', '#703820', '#4A2810', '#604028', '#5A3018', '#7A4828', '#6A3818', '#503020'],
                neutrals: ['#6A4828', '#5A3818', '#4A2810', '#3A2010'],
                neutralDesc: 'Deep cognac, dark warm brown, and rich espresso are your neutral anchors — intensely warm and deeply grounded.',
                paletteDesc: 'The darkest, most dramatic warm palette. Deep burgundy, dark olive, rich brown, mahogany, and forest green define your season. Your colours are like autumn at dusk.',
                skin: 'Medium to deep skin with a strong warm, golden or olive undertone. Often has a richly bronzed quality. Natural depth and warmth are both strong. The darkest autumn colouring.',
                eyes: 'Deep warm brown, dark hazel, dark olive, or amber-brown. Eyes are deeply coloured and warmly rich. A penetrating, intensely warm quality.',
                hair: 'Dark auburn, very dark warm brown, dark chestnut, or warm black. Hair is deep and richly warm. May have auburn or chestnut highlights. The deepest autumn hair.',
                glowEffect: 'Dark Autumns in their colours look regal and powerfully beautiful — like autumn royalty. The deep, warm colours match their intense natural depth for a commanding, striking appearance.',
                makeupDesc: 'Rich, deep, and intensely warm. Dark Autumn can wear the deepest warm makeup — dark burgundy lips, deep bronze eyes, and rich terracotta cheeks.',
                makeup: [{
                        color: '#A06040',
                        name: 'Deep Warm Tan',
                        type: 'Foundation'
                    },
                    {
                        color: '#A04020',
                        name: 'Deep Brick',
                        type: 'Blush'
                    },
                    {
                        color: '#802010',
                        name: 'Dark Burgundy',
                        type: 'Lips'
                    },
                    {
                        color: '#604018',
                        name: 'Deep Brown-Gold',
                        type: 'Eyes'
                    },
                    {
                        color: '#502810',
                        name: 'Dark Brown',
                        type: 'Eyes'
                    },
                    {
                        color: '#804028',
                        name: 'Rich Copper',
                        type: 'Eyes'
                    },
                    {
                        color: '#904030',
                        name: 'Deep Terracotta',
                        type: 'Blush'
                    },
                    {
                        color: '#A07030',
                        name: 'Deep Bronze',
                        type: 'Highlighter'
                    },
                ],
                foundationNote: 'The deepest, warmest foundations in the autumn range. Look for "deep warm golden" or "warm espresso" shades. Nothing cool or ashy.',
                makeupRule: 'Deep, warm, and intensely rich. Dark burgundy lips, deep bronze eyes, and rich terracotta blush is the signature Dark Autumn look. You can wear the richest autumn shades.',
                wardrobeTips: [{
                        title: 'Embrace your deep warm neutrals',
                        desc: 'Dark brown, espresso, cognac, and deep camel are your neutral foundation. Build every outfit around these rich, deep warm tones.'
                    },
                    {
                        title: 'Dark olive is your signature green',
                        desc: 'Deep, forest-y olive in your warmest, darkest shades is distinctly yours. It harmonises with your deep, warm features.'
                    },
                    {
                        title: 'Deep burgundy and wine',
                        desc: 'Unlike other autumns, you can wear deep burgundy and warm wine shades — they match your natural depth and warmth.'
                    },
                    {
                        title: 'Keep it warm and deep always',
                        desc: 'If a colour looks too bright or too cool, it\'s wrong for you. Your palette is always dark, warm, and slightly muted.'
                    },
                ],
                avoid: [{
                        color: '#FF69B4',
                        name: 'Cool Pink',
                        why: 'Too cool and light'
                    },
                    {
                        color: '#87CEEB',
                        name: 'Light Blue',
                        why: 'Too light and cool'
                    },
                    {
                        color: '#C0C0C0',
                        name: 'Silver',
                        why: 'Too cool for your depth'
                    },
                    {
                        color: '#FFFFFF',
                        name: 'White',
                        why: 'Too harsh a contrast'
                    },
                    {
                        color: '#FFD700',
                        name: 'Bright Yellow',
                        why: 'Too light and bright'
                    },
                    {
                        color: '#000080',
                        name: 'Navy',
                        why: 'Too cool for warm depth'
                    },
                ],
                outfits: [{
                        bg: 'linear-gradient(145deg,#8B4A20,#603010)',
                        icon: '🌑',
                        occasion: 'Casual',
                        name: 'Dark Earth',
                        items: 'Deep burgundy knit · Dark olive corduroy trousers · Brown leather boots · Antique copper jewellery'
                    },
                    {
                        bg: 'linear-gradient(145deg,#4A2810,#703818)',
                        icon: '🔥',
                        occasion: 'Evening',
                        name: 'Ember Night',
                        items: 'Deep wine silk dress · Dark cognac heeled boots · Bronze clutch · Warm amber jewellery'
                    },
                    {
                        bg: 'linear-gradient(145deg,#603020,#502010)',
                        icon: '🍁',
                        occasion: 'Day',
                        name: 'Mahogany Day',
                        items: 'Rich brown structured blazer · Dark olive trousers · Cognac loafers · Gold chain'
                    },
                ],
                celebs: [{
                        name: 'Nigella Lawson',
                        note: 'Deep warm autumn depth',
                        bg: '#8B4A20',
                        icon: '🌟'
                    },
                    {
                        name: 'Monica Bellucci',
                        note: 'Dramatic dark warmth',
                        bg: '#703820',
                        icon: '💫'
                    },
                    {
                        name: 'Demi Moore',
                        note: 'Deep warm features',
                        bg: '#604028',
                        icon: '🎬'
                    },
                    {
                        name: 'Kim Kardashian',
                        note: 'Rich dark autumn',
                        bg: '#5A3018',
                        icon: '✨'
                    },
                ],
                relatedSeasons: [{
                    id: 'true-autumn',
                    label: 'True Autumn'
                }, {
                    id: 'dark-winter',
                    label: 'Dark Winter'
                }]
            },

            'dark-winter': {
                name: 'Dark Winter',
                seasonType: '❄️ Winter · Cool · Dark',
                heroBg: 'linear-gradient(145deg,#080C18,#141828,#201830)',
                heroColor: '#C0C8E0',
                accent: '#4860C0',
                visualBg: 'linear-gradient(145deg,#1C2848,#101828)',
                emoji: '🌑',
                tagline: 'Intensely dark, coolly dramatic, hauntingly beautiful',
                heroDesc: 'Dark Winter is the most dramatic and intense of all seasons — deep, cool, and powerfully striking. Your natural colouring creates extraordinary contrast that only the richest, darkest colours can match.',
                badge1Icon: '❄️',
                badge1Title: 'Cool Undertone',
                badge1Sub: 'Deep cool-warm bridge',
                badge2Icon: '🌑',
                badge2Title: 'Dark Value',
                badge2Sub: 'Deepest of all 12',
                palette: ['#1C2040', '#2A1020', '#102030', '#3A1818', '#1A1A30', '#301028', '#0A1828', '#281830'],
                neutrals: ['#1A1820', '#2A2028', '#3A3040', '#4A4050'],
                neutralDesc: 'Near-black in deep navy, dark plum, and deep charcoal form your neutral foundation — always dark and cool.',
                paletteDesc: 'The deepest, most dramatic palette of all 12 seasons. Dark navy, deep plum, rich burgundy, forest black, and dark teal. Your colours are at the extreme deep-cool end of the spectrum.',
                skin: 'Medium-deep to very deep skin with a cool or neutral-cool undertone. High natural contrast between skin and features. Often has a distinctive coolness to deep skin. Dramatically beautiful.',
                eyes: 'Very dark brown, nearly black, dark cool hazel, or striking cool dark eyes. Eyes are deep, penetrating, and often the most striking feature. An intense, dramatic quality.',
                hair: 'Very dark brown, cool black, near-black, or dramatically dark. Always cool-toned — never warm or auburn. The deepest, most dramatic hair of any season.',
                glowEffect: 'Dark Winters in their colours look cinematic — like they\'ve stepped out of a dramatic film. The deep, cool colours match their intense natural contrast for a powerfully beautiful, unforgettable appearance.',
                makeupDesc: 'Dark, cool, and dramatic. Dark Winter can wear the most intense cool makeup of any season — deep plum lips, dark navy liner, and cool berry cheeks.',
                makeup: [{
                        color: '#382830',
                        name: 'Deep Cool Tan',
                        type: 'Foundation'
                    },
                    {
                        color: '#6A3050',
                        name: 'Deep Berry',
                        type: 'Blush'
                    },
                    {
                        color: '#5A1040',
                        name: 'Dark Plum',
                        type: 'Lips'
                    },
                    {
                        color: '#1A2848',
                        name: 'Deep Navy',
                        type: 'Eyes'
                    },
                    {
                        color: '#2A1038',
                        name: 'Dark Violet',
                        type: 'Eyes'
                    },
                    {
                        color: '#301840',
                        name: 'Deep Purple',
                        type: 'Eyes'
                    },
                    {
                        color: '#4A1830',
                        name: 'Cool Burgundy',
                        type: 'Blush'
                    },
                    {
                        color: '#C0C8D8',
                        name: 'Icy Silver',
                        type: 'Highlighter'
                    },
                ],
                foundationNote: 'Cool, deep foundations — the coolest and deepest in the entire foundation range. Avoid any warmth or yellow undertone entirely.',
                makeupRule: 'Dark and cool. Deep plum lips, dark navy or violet eyes, and a cool berry blush is the signature Dark Winter look. You are the only season that can truly wear near-black eyeshadow.',
                wardrobeTips: [{
                        title: 'Wear your darkness proudly',
                        desc: 'Deep navy, dark plum, forest black, and charcoal are not just colours for you — they\'re your most flattering neutrals.'
                    },
                    {
                        title: 'Jewel tones at their deepest',
                        desc: 'The deepest sapphire, darkest emerald, and richest ruby all belong to Dark Winter. The deeper the jewel tone, the better.'
                    },
                    {
                        title: 'Black is genuinely your colour',
                        desc: 'Unlike most seasons, black truly flatters you. It matches the intensity of your dark, cool features perfectly.'
                    },
                    {
                        title: 'Silver for all jewellery',
                        desc: 'Cool silver, white gold, and platinum are the only metals that enhance your cool depth. Gold will fight with your colouring.'
                    },
                ],
                avoid: [{
                        color: '#FF6600',
                        name: 'Orange',
                        why: 'Too warm, clashes dramatically'
                    },
                    {
                        color: '#FFD700',
                        name: 'Yellow',
                        why: 'Too warm and light'
                    },
                    {
                        color: '#C8A070',
                        name: 'Warm Brown',
                        why: 'Undertone mismatch'
                    },
                    {
                        color: '#F5DEB3',
                        name: 'Warm Beige',
                        why: 'Too light and warm'
                    },
                    {
                        color: '#90EE90',
                        name: 'Light Green',
                        why: 'Too light and warm-toned'
                    },
                    {
                        color: '#FFC0CB',
                        name: 'Pastel Pink',
                        why: 'Too light, wrong undertone'
                    },
                ],
                outfits: [{
                        bg: 'linear-gradient(145deg,#1C2848,#101828)',
                        icon: '🌑',
                        occasion: 'Day',
                        name: 'Dark Sovereign',
                        items: 'Deep navy structured coat · Charcoal trousers · Black leather shoes · Silver watch'
                    },
                    {
                        bg: 'linear-gradient(145deg,#3A1818,#2A1020)',
                        icon: '💎',
                        occasion: 'Evening',
                        name: 'Midnight Plum',
                        items: 'Deep plum silk dress · Black pointed heels · Silver evening bag · Amethyst jewellery'
                    },
                    {
                        bg: 'linear-gradient(145deg,#102030,#0A1828)',
                        icon: '❄️',
                        occasion: 'Formal',
                        name: 'Deep Ocean',
                        items: 'Dark teal-navy blazer · Near-black trousers · Black patent shoes · Cool sapphire cufflinks'
                    },
                ],
                celebs: [{
                        name: 'Priyanka Chopra',
                        note: 'Deep cool winter depth',
                        bg: '#1C2848',
                        icon: '👑'
                    },
                    {
                        name: 'Deepika Padukone',
                        note: 'Dramatic dark winter',
                        bg: '#2A1020',
                        icon: '💫'
                    },
                    {
                        name: 'Andie MacDowell',
                        note: 'Dark winter contrast',
                        bg: '#1A1A30',
                        icon: '🌟'
                    },
                    {
                        name: 'Sofia Vergara',
                        note: 'Deep cool features',
                        bg: '#301028',
                        icon: '🎬'
                    },
                ],
                relatedSeasons: [{
                    id: 'true-winter',
                    label: 'True Winter'
                }, {
                    id: 'dark-autumn',
                    label: 'Dark Autumn'
                }]
            },

            'true-winter': {
                name: 'True Winter',
                seasonType: '❄️ Winter · Cool · Clear',
                heroBg: 'linear-gradient(145deg,#1A2040,#283060,#202848)',
                heroColor: '#E0E8FF',
                accent: '#4060D0',
                visualBg: 'linear-gradient(145deg,#2040A0,#183080)',
                emoji: '❄️',
                tagline: 'Clear, cool, and strikingly high-contrast',
                heroDesc: 'True Winter is the quintessential winter — cool, clear, and powerfully high-contrast. Your colouring is the embodiment of a clear winter night: crisp, striking, and unforgettable.',
                badge1Icon: '❄️',
                badge1Title: 'Cool Undertone',
                badge1Sub: 'Blue-cool, clear',
                badge2Icon: '💎',
                badge2Title: 'Clear Quality',
                badge2Sub: 'Vivid, saturated',
                palette: ['#00008B', '#8B0000', '#006400', '#4B0082', '#F5F5F5', '#C0C0C0', '#1C1C1C', '#008080'],
                neutrals: ['#F0F0F0', '#C0C0C0', '#808080', '#1C1C1C'],
                neutralDesc: 'Pure white, crisp silver, cool grey, and true black are your neutral anchors — always cool and clear.',
                paletteDesc: 'Your palette is clear, cool, and high-contrast. Navy, emerald, ruby, purple, black, and icy white. Every colour is vivid and clear — no mudding or muting.',
                skin: 'Fair to deep skin with a cool undertone. The hallmark is high contrast between skin colour and hair/eye colour. Often has a porcelain quality to fair skin, or a cool depth to deeper skin.',
                eyes: 'Deep dark brown, cool steel blue, icy grey, or vivid dark eyes. Eyes are often the most striking feature. Contrast between iris and white of eye is high.',
                hair: 'Cool black, dark brown, white-grey, or dramatically ashy. Always cool-toned — any warmth will push you to a different season. High contrast with skin.',
                glowEffect: 'True Winters in their colours look cinematic and striking — like they were designed to wear them. The clear, cool colours match their natural contrast to create a powerful, unforgettable impression.',
                makeupDesc: 'Cool, clear, and high-contrast. True Winter makeup is about precision and impact — vivid cool lips, defined cool eyes, and crisp contrasts.',
                makeup: [{
                        color: '#F0E8F0',
                        name: 'Cool Porcelain',
                        type: 'Foundation'
                    },
                    {
                        color: '#C04060',
                        name: 'Cool Raspberry',
                        type: 'Blush'
                    },
                    {
                        color: '#8B0000',
                        name: 'Classic Red',
                        type: 'Lips'
                    },
                    {
                        color: '#1C2848',
                        name: 'Deep Navy',
                        type: 'Eyes'
                    },
                    {
                        color: '#4B0082',
                        name: 'Cool Purple',
                        type: 'Eyes'
                    },
                    {
                        color: '#2A0838',
                        name: 'Dark Plum',
                        type: 'Eyes'
                    },
                    {
                        color: '#A03060',
                        name: 'Cool Berry',
                        type: 'Blush'
                    },
                    {
                        color: '#E8F0FF',
                        name: 'Icy Silver',
                        type: 'Highlighter'
                    },
                ],
                foundationNote: 'Cool, neutral foundations — look for shades with pink or neutral undertones. Avoid any yellow or warmth. The goal is to match your cool skin tone precisely.',
                makeupRule: 'High contrast and cool. Red lips, black eyeliner, cool pink cheeks — or icy metallics and deep jewel tones for eyes. Never warm, never muddy, never muted.',
                wardrobeTips: [{
                        title: 'Black and white is your birthright',
                        desc: 'The starkest black-and-white combinations look extraordinary on True Winter — they match your natural high-contrast features.'
                    },
                    {
                        title: 'Jewel tones at their most vivid',
                        desc: 'Navy, emerald, ruby, and royal purple in their clearest, most saturated form are your signature colours.'
                    },
                    {
                        title: 'Icy pastels for colour',
                        desc: 'When you want softer colours, go icy — icy pink, icy blue, icy yellow. Never dusty or warm pastels.'
                    },
                    {
                        title: 'Always silver, never gold',
                        desc: 'Silver, platinum, and white gold enhance your cool contrast. Gold introduces warmth that fights your undertone.'
                    },
                ],
                avoid: [{
                        color: '#FF6600',
                        name: 'Orange',
                        why: 'Warm and jarring'
                    },
                    {
                        color: '#C8A070',
                        name: 'Camel/Tan',
                        why: 'Too warm, clashes'
                    },
                    {
                        color: '#FFD700',
                        name: 'Golden Yellow',
                        why: 'Warm undertone clash'
                    },
                    {
                        color: '#8B4513',
                        name: 'Brown',
                        why: 'Warm tones conflict'
                    },
                    {
                        color: '#BDB76B',
                        name: 'Khaki',
                        why: 'Too warm and dull'
                    },
                    {
                        color: '#BC8F8F',
                        name: 'Muted Rose',
                        why: 'Too muted and warm'
                    },
                ],
                outfits: [{
                        bg: 'linear-gradient(145deg,#1C1C1C,#2C2C2C)',
                        icon: '❄️',
                        occasion: 'Day',
                        name: 'Black & Icy',
                        items: 'Crisp white blouse · Black tailored trousers · Black leather shoes · Silver jewellery'
                    },
                    {
                        bg: 'linear-gradient(145deg,#00008B,#1C3070)',
                        icon: '💎',
                        occasion: 'Formal',
                        name: 'Royal Navy',
                        items: 'Deep navy blazer dress · Silver heels · Silver clutch · Sapphire earrings'
                    },
                    {
                        bg: 'linear-gradient(145deg,#8B0000,#6A0000)',
                        icon: '🌹',
                        occasion: 'Evening',
                        name: 'Winter Red',
                        items: 'Ruby red silk dress · Black suede heels · Black evening bag · Diamond drop earrings'
                    },
                ],
                celebs: [{
                        name: 'Audrey Hepburn',
                        note: 'Classic true winter',
                        bg: '#1C1C1C',
                        icon: '🎬'
                    },
                    {
                        name: 'Dita Von Teese',
                        note: 'High-contrast winter',
                        bg: '#1C2040',
                        icon: '💄'
                    },
                    {
                        name: 'Anne Hathaway',
                        note: 'Cool clear winter',
                        bg: '#2A2848',
                        icon: '🌟'
                    },
                    {
                        name: 'Lucy Liu',
                        note: 'True winter contrast',
                        bg: '#1A1A30',
                        icon: '💫'
                    },
                ],
                relatedSeasons: [{
                    id: 'dark-winter',
                    label: 'Dark Winter'
                }, {
                    id: 'bright-winter',
                    label: 'Bright Winter'
                }]
            },

            'bright-winter': {
                name: 'Bright Winter',
                seasonType: '❄️ Winter · Cool · Bright',
                heroBg: 'linear-gradient(145deg,#1840A0,#1060C0,#0848A0)',
                heroColor: '#E8F4FF',
                accent: '#0080FF',
                visualBg: 'linear-gradient(145deg,#0060FF,#0040C0)',
                emoji: '⚡',
                tagline: 'Electric, vivid, and dazzlingly cool',
                heroDesc: 'Bright Winter sits at the thrilling intersection of winter and spring — clear, cool, and intensely vivid. Your colouring demands the most saturated, electric colours of any season.',
                badge1Icon: '❄️',
                badge1Title: 'Cool Undertone',
                badge1Sub: 'Clear, bright cool',
                badge2Icon: '💡',
                badge2Title: 'Brightest Season',
                badge2Sub: 'Maximum saturation',
                palette: ['#0000FF', '#FF0080', '#00C0FF', '#00FF80', '#FF00FF', '#FFFF00', '#00FFFF', '#FF4040'],
                neutrals: ['#F0F8FF', '#E0E8F8', '#C0D0E8', '#A0B8D8'],
                neutralDesc: 'Icy, clear white and very pale cool blue are your neutrals — always crisp, never warm or muted.',
                paletteDesc: 'The most vivid, electric palette of all 12 seasons. Pure bright blue, electric pink, vivid cyan, and clear emerald. Your colours should practically glow.',
                skin: 'Fair to medium skin with a cool undertone and a natural vibrancy. High contrast between skin and features. Skin often has a healthy, lit-from-within quality. Striking, clear colouring.',
                eyes: 'Vivid blue, clear green, bright hazel, or striking dark eyes — always appearing vivid and clear. Eyes are often the most memorable feature. A bright, sparkling quality.',
                hair: 'Cool black, very dark cool brown, or dramatically blonde with no warmth. High contrast between hair and skin. Often has a shine or gloss to it. Always cool-toned.',
                glowEffect: 'Bright Winters in their colours look electrifying — like they\'ve plugged into a power source. The vivid, clear colours match their naturally high contrast and clear features to create a dazzlingly memorable impression.',
                makeupDesc: 'Vivid, clear, and cool. Bright Winter can wear the most saturated, electric cool makeup of any season. Nothing muted, nothing warm.',
                makeup: [{
                        color: '#F0ECFF',
                        name: 'Icy Cool',
                        type: 'Foundation'
                    },
                    {
                        color: '#FF4080',
                        name: 'Vivid Cool Pink',
                        type: 'Blush'
                    },
                    {
                        color: '#FF0060',
                        name: 'Electric Pink-Red',
                        type: 'Lips'
                    },
                    {
                        color: '#0040C0',
                        name: 'Vivid Blue',
                        type: 'Eyes'
                    },
                    {
                        color: '#8000FF',
                        name: 'Electric Violet',
                        type: 'Eyes'
                    },
                    {
                        color: '#004080',
                        name: 'Deep Electric',
                        type: 'Eyes'
                    },
                    {
                        color: '#FF40A0',
                        name: 'Hot Cool Pink',
                        type: 'Blush'
                    },
                    {
                        color: '#C0E8FF',
                        name: 'Icy Blue Shimmer',
                        type: 'Highlighter'
                    },
                ],
                foundationNote: 'Cool, clear foundations — similar to True Winter but you may need slightly more coverage to create a vivid, clear base for your electric makeup. Always cool-toned.',
                makeupRule: 'Electric and vivid. The brightest, most saturated cool colours belong to you. Vivid pink lips, electric blue liner, and icy shimmer on the eyes — you were made for this.',
                wardrobeTips: [{
                        title: 'Embrace electric, vivid hues',
                        desc: 'You are the one season that truly benefits from the most saturated, electric colours. Vivid blue, electric pink, and clear emerald belong to you.'
                    },
                    {
                        title: 'Black and white with vivid accents',
                        desc: 'A black outfit with one vivid cool accessory — electric blue bag or hot pink shoes — is a signature Bright Winter combination.'
                    },
                    {
                        title: 'Cool neons are yours',
                        desc: 'Cool-toned neons — neon blue, electric pink, vivid cyan — are genuinely flattering on Bright Winter. Use them confidently.'
                    },
                    {
                        title: 'Keep it clear, never muted',
                        desc: 'Every colour should be clear and saturated. If a shade looks dusty or muted, it\'s wrong for you. Clarity is everything.'
                    },
                ],
                avoid: [{
                        color: '#C8A070',
                        name: 'Warm Tan',
                        why: 'Too warm, drains clarity'
                    },
                    {
                        color: '#FFD700',
                        name: 'Golden Yellow',
                        why: 'Warm undertone conflict'
                    },
                    {
                        color: '#BC8F8F',
                        name: 'Dusty Rose',
                        why: 'Too muted for your vivid season'
                    },
                    {
                        color: '#A0917E',
                        name: 'Warm Taupe',
                        why: 'Too warm and muted'
                    },
                    {
                        color: '#8B4513',
                        name: 'Brown',
                        why: 'Warm tones clash completely'
                    },
                    {
                        color: '#D2B48C',
                        name: 'Camel',
                        why: 'Too warm and dull'
                    },
                ],
                outfits: [{
                        bg: 'linear-gradient(145deg,#0060FF,#0040A0)',
                        icon: '⚡',
                        occasion: 'Day',
                        name: 'Electric Blue',
                        items: 'Vivid cobalt blue structured top · Crisp white wide-leg trousers · White sneakers · Silver chain'
                    },
                    {
                        bg: 'linear-gradient(145deg,#FF0080,#C00060)',
                        icon: '💥',
                        occasion: 'Evening',
                        name: 'Neon Night',
                        items: 'Electric hot pink dress · Black strappy heels · Black clutch · Silver statement earrings'
                    },
                    {
                        bg: 'linear-gradient(145deg,#00C0FF,#0080C0)',
                        icon: '🧊',
                        occasion: 'Casual',
                        name: 'Icy Cyan',
                        items: 'Vivid cyan blouse · Black straight jeans · Black pointed boots · Silver jewellery'
                    },
                ],
                celebs: [{
                        name: 'Elizabeth Taylor',
                        note: 'Vivid cool winter',
                        bg: '#0040C0',
                        icon: '💎'
                    },
                    {
                        name: 'Katy Perry',
                        note: 'Electric bright winter',
                        bg: '#8000FF',
                        icon: '🎵'
                    },
                    {
                        name: 'Zooey Deschanel',
                        note: 'Clear vivid features',
                        bg: '#0060C0',
                        icon: '🌟'
                    },
                    {
                        name: 'Megan Fox',
                        note: 'Bright cool contrast',
                        bg: '#FF0080',
                        icon: '💫'
                    },
                ],
                relatedSeasons: [{
                    id: 'true-winter',
                    label: 'True Winter'
                }, {
                    id: 'true-spring',
                    label: 'True Spring (adjacent)'
                }]
            }

        };

        // Build all season pages
        Object.entries(seasons).forEach(([id, cfg]) => buildSeasonPage(id, cfg));
    </script>

    <script>
        // ── NAVIGATION ──
        function showPage(name) {
            document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
            document.querySelectorAll('.nav-pill').forEach(p => p.classList.remove('active'));
            document.getElementById('page-' + name).classList.add('active');
            window.scrollTo(0, 0);
        }

        // ── HUB FILTER ──
        function filterHub(group, el) {
            document.querySelectorAll('.hub-tab').forEach(t => t.classList.remove('active'));
            el.classList.add('active');
            document.querySelectorAll('.season-hub-card').forEach(c => {
                if (group === 'all' || c.dataset.group === group) {
                    c.style.display = 'block';
                } else {
                    c.style.display = 'none';
                }
            });
        }
    </script>
@endsection
