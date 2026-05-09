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
        border-radius: 0 0 22px 22px;
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
