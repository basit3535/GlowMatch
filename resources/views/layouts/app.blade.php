    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>ChromaFit — Your Color & Style Guide</title>

        <!-- Tailwind CSS v3 CDN -->
        <script src="https://cdn.tailwindcss.com"></script>

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
        <link
            href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=DM+Sans:wght@300;400;500;600&display=swap"
            rel="stylesheet" />
        <style>
            :root {
                --cream: #FAF7F2;
                --warm-white: #FFF9F4;
                --blush: #F2D9CA;
                --rose: #C97B5A;
                --deep-rose: #8B4A32;
                --terracotta: #D4714A;
                --sage: #7A9E7E;
                --dusty-sage: #A8C5A0;
                --charcoal: #2C2420;
                --soft-black: #1A1210;
                --muted: #7A6E68;
                --light-border: #E8DDD6;
                --gold: #C9A96E;
                --lavender: #C5B8D4;
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'DM Sans', sans-serif;
                background: var(--cream);
                color: var(--charcoal);
                min-height: 100vh;
            }

            /* NAV */
            nav {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                z-index: 100;
                background: rgba(250, 247, 242, 0.92);
                backdrop-filter: blur(12px);
                border-bottom: 1px solid var(--light-border);
                padding: 0 5%;
                display: flex;
                align-items: center;
                justify-content: space-between;
                height: 68px;
            }

            .nav-logo {
                font-family: 'Playfair Display', serif;
                font-size: 22px;
                font-weight: 700;
                color: var(--deep-rose);
                letter-spacing: -0.5px;
            }

            .nav-logo span {
                color: var(--terracotta);
                font-style: italic;
            }

            .nav-links {
                display: flex;
                gap: 36px;
                align-items: center;
            }

            .nav-links a {
                font-size: 14px;
                font-weight: 500;
                color: var(--charcoal);
                text-decoration: none;
                letter-spacing: 0.3px;
                transition: color 0.2s;
                cursor: pointer;
            }

            .nav-links a:hover,
            .nav-links a.active {
                color: var(--rose);
            }

            .nav-cta {
                background: var(--charcoal);
                color: var(--cream) !important;
                padding: 10px 22px;
                border-radius: 50px;
                transition: background 0.2s !important;
            }

            .nav-cta:hover {
                background: var(--deep-rose) !important;
                color: var(--cream) !important;
            }

            /* PAGES */
            .page {
                /* display: none; */
                padding-top: 68px;
                min-height: 100vh;
                animation: fadeIn 0.4s ease;
            }

            .page.active {
                display: block;
            }

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

            /* ===== HOME PAGE ===== */
            .hero {
                min-height: calc(100vh - 68px);
                display: grid;
                grid-template-columns: 1fr 1fr;
                align-items: center;
                padding: 0 5%;
                gap: 60px;
                background: var(--warm-white);
            }

            .hero-text {
                max-width: 540px;
            }

            .hero-badge {
                display: inline-block;
                background: var(--blush);
                color: var(--deep-rose);
                font-size: 12px;
                font-weight: 600;
                letter-spacing: 1.5px;
                text-transform: uppercase;
                padding: 7px 18px;
                border-radius: 50px;
                margin-bottom: 28px;
            }

            .hero-h1 {
                font-family: 'Playfair Display', serif;
                font-size: clamp(42px, 5vw, 68px);
                line-height: 1.1;
                font-weight: 700;
                color: var(--soft-black);
                margin-bottom: 20px;
            }

            .hero-h1 em {
                color: var(--rose);
                font-style: italic;
            }

            .hero-sub {
                font-size: 17px;
                font-weight: 300;
                color: var(--muted);
                line-height: 1.7;
                margin-bottom: 40px;
                max-width: 460px;
            }

            .hero-buttons {
                display: flex;
                gap: 16px;
                flex-wrap: wrap;
            }

            .btn-primary {
                background: var(--terracotta);
                color: #fff;
                padding: 15px 32px;
                border-radius: 50px;
                font-size: 15px;
                font-weight: 600;
                border: none;
                cursor: pointer;
                transition: background 0.2s, transform 0.15s;
                letter-spacing: 0.3px;
            }

            .btn-primary:hover {
                background: var(--deep-rose);
                transform: translateY(-1px);
            }

            .btn-outline {
                background: transparent;
                color: var(--charcoal);
                padding: 15px 32px;
                border-radius: 50px;
                font-size: 15px;
                font-weight: 500;
                border: 1.5px solid var(--light-border);
                cursor: pointer;
                transition: border-color 0.2s, color 0.2s;
            }

            .btn-outline:hover {
                border-color: var(--rose);
                color: var(--rose);
            }

            /* Hero Visual */
            .hero-visual {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 16px;
                max-width: 480px;
                margin-left: auto;
            }

            .color-card {
                border-radius: 20px;
                padding: 28px 20px;
                display: flex;
                flex-direction: column;
                gap: 10px;
                position: relative;
                overflow: hidden;
            }

            .color-card:first-child {
                grid-column: 1 / -1;
                border-radius: 24px;
                padding: 32px 24px;
            }

            .color-card-label {
                font-size: 11px;
                font-weight: 600;
                letter-spacing: 1px;
                text-transform: uppercase;
                opacity: 0.6;
            }

            .color-card-title {
                font-family: 'Playfair Display', serif;
                font-size: 20px;
                font-weight: 700;
            }

            .color-swatches {
                display: flex;
                gap: 8px;
                margin-top: 8px;
            }

            .swatch {
                width: 32px;
                height: 32px;
                border-radius: 50%;
                border: 2px solid rgba(255, 255, 255, 0.3);
            }

            .cc-warm {
                background: linear-gradient(135deg, #F5E6D3, #E8C5A0);
                color: #5C3D20;
            }

            .cc-cool {
                background: linear-gradient(135deg, #D4E5F0, #B8CCE4);
                color: #1A3A5C;
            }

            .cc-neutral {
                background: linear-gradient(135deg, #E8E0D8, #D4C8BC);
                color: #3C3028;
            }

            /* Palette strip */
            .palette-strip {
                display: flex;
                height: 12px;
                border-radius: 6px;
                overflow: hidden;
                margin-top: 12px;
            }

            .palette-strip span {
                flex: 1;
            }

            /* How it works */
            .section-home {
                padding: 100px 5%;
            }

            .section-label {
                font-size: 11px;
                font-weight: 600;
                letter-spacing: 2px;
                text-transform: uppercase;
                color: var(--rose);
                margin-bottom: 16px;
            }

            .section-h2 {
                font-family: 'Playfair Display', serif;
                font-size: clamp(32px, 4vw, 48px);
                font-weight: 700;
                color: var(--soft-black);
                line-height: 1.2;
                margin-bottom: 16px;
            }

            .section-sub {
                font-size: 16px;
                color: var(--muted);
                line-height: 1.7;
                max-width: 500px;
                margin-bottom: 60px;
            }

            .steps-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
                gap: 32px;
            }

            .step-card {
                background: var(--warm-white);
                border: 1px solid var(--light-border);
                border-radius: 24px;
                padding: 36px 28px;
                position: relative;
                transition: transform 0.2s, box-shadow 0.2s;
            }

            .step-card:hover {
                transform: translateY(-4px);
                box-shadow: 0 12px 40px rgba(139, 74, 50, 0.08);
            }

            .step-num {
                font-family: 'Playfair Display', serif;
                font-size: 48px;
                font-weight: 700;
                color: var(--blush);
                line-height: 1;
                margin-bottom: 20px;
            }

            .step-icon {
                font-size: 32px;
                margin-bottom: 16px;
            }

            .step-title {
                font-size: 18px;
                font-weight: 600;
                margin-bottom: 10px;
                color: var(--soft-black);
            }

            .step-desc {
                font-size: 14px;
                color: var(--muted);
                line-height: 1.65;
            }

            /* Palette showcase */
            .palette-section {
                padding: 80px 5%;
                background: var(--soft-black);
            }

            .palette-section .section-h2 {
                color: var(--cream);
            }

            .palette-section .section-label {
                color: var(--gold);
            }

            .palette-section .section-sub {
                color: rgba(250, 247, 242, 0.5);
            }

            .seasons-grid {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 20px;
            }

            .season-card {
                border-radius: 20px;
                padding: 28px 20px;
                color: #fff;
                position: relative;
                overflow: hidden;
                cursor: pointer;
                transition: transform 0.2s;
            }

            .season-card:hover {
                transform: scale(1.02);
            }

            .season-name {
                font-family: 'Playfair Display', serif;
                font-size: 22px;
                font-weight: 700;
                margin-bottom: 8px;
            }

            .season-desc {
                font-size: 13px;
                opacity: 0.75;
                line-height: 1.5;
                margin-bottom: 20px;
            }

            .season-dots {
                display: flex;
                gap: 8px;
                flex-wrap: wrap;
            }

            .season-dot {
                width: 28px;
                height: 28px;
                border-radius: 50%;
                border: 2px solid rgba(255, 255, 255, 0.25);
            }

            .s-spring {
                background: linear-gradient(145deg, #C97B5A, #E8A882);
            }

            .s-summer {
                background: linear-gradient(145deg, #7B8EC9, #A8B8D4);
            }

            .s-autumn {
                background: linear-gradient(145deg, #8B5E3C, #C4844A);
            }

            .s-winter {
                background: linear-gradient(145deg, #3C4A6B, #6B7F9E);
            }

            /* Stats */
            .stats-section {
                padding: 80px 5%;
                background: var(--blush);
            }

            .stats-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 40px;
                text-align: center;
            }

            .stat-num {
                font-family: 'Playfair Display', serif;
                font-size: 52px;
                font-weight: 700;
                color: var(--deep-rose);
            }

            .stat-label {
                font-size: 14px;
                color: var(--deep-rose);
                opacity: 0.7;
                margin-top: 4px;
            }

            /* Testimonials */
            .testimonial-section {
                padding: 100px 5%;
            }

            .testimonials-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                gap: 24px;
            }

            .testimonial-card {
                background: var(--warm-white);
                border: 1px solid var(--light-border);
                border-radius: 20px;
                padding: 28px;
            }

            .t-stars {
                color: var(--gold);
                font-size: 16px;
                margin-bottom: 14px;
            }

            .t-text {
                font-size: 15px;
                color: var(--charcoal);
                line-height: 1.65;
                margin-bottom: 20px;
                font-style: italic;
            }

            .t-author {
                display: flex;
                align-items: center;
                gap: 12px;
            }

            .t-avatar {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: 600;
                font-size: 14px;
            }

            .t-name {
                font-size: 14px;
                font-weight: 600;
                color: var(--soft-black);
            }

            .t-tag {
                font-size: 12px;
                color: var(--muted);
            }

            /* ===== TEST PAGE ===== */
            .test-hero {
                padding: 60px 5% 40px;
                text-align: center;
                background: var(--warm-white);
                border-bottom: 1px solid var(--light-border);
            }

            .progress-bar-wrap {
                max-width: 600px;
                margin: 0 auto 12px;
            }

            .progress-steps {
                display: flex;
                gap: 8px;
                justify-content: center;
                margin-bottom: 8px;
            }

            .p-step {
                width: 40px;
                height: 4px;
                border-radius: 2px;
                background: var(--light-border);
                transition: background 0.3s;
            }

            .p-step.done {
                background: var(--rose);
            }

            .p-step.active {
                background: var(--terracotta);
            }

            .progress-label {
                font-size: 13px;
                color: var(--muted);
            }

            .quiz-container {
                max-width: 760px;
                margin: 0 auto;
                padding: 60px 5%;
            }

            .quiz-step {
                display: none;
                animation: fadeIn 0.35s ease;
            }

            .quiz-step.active {
                display: block;
            }

            .quiz-q {
                font-family: 'Playfair Display', serif;
                font-size: 28px;
                font-weight: 700;
                color: var(--soft-black);
                margin-bottom: 10px;
            }

            .quiz-hint {
                font-size: 14px;
                color: var(--muted);
                margin-bottom: 36px;
            }

            .options-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
                gap: 16px;
            }

            .opt-card {
                border: 2px solid var(--light-border);
                border-radius: 16px;
                padding: 20px 16px;
                text-align: center;
                cursor: pointer;
                transition: border-color 0.2s, background 0.2s, transform 0.15s;
                background: var(--warm-white);
            }

            .opt-card:hover {
                border-color: var(--rose);
                transform: translateY(-2px);
            }

            .opt-card.selected {
                border-color: var(--terracotta);
                background: #FDF0EA;
            }

            .opt-swatch {
                width: 64px;
                height: 64px;
                border-radius: 50%;
                margin: 0 auto 14px;
                border: 3px solid rgba(255, 255, 255, 0.8);
                box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
            }

            .opt-label {
                font-size: 14px;
                font-weight: 500;
                color: var(--charcoal);
            }

            .opt-sublabel {
                font-size: 12px;
                color: var(--muted);
                margin-top: 3px;
            }

            .body-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(130px, 1fr));
                gap: 16px;
            }

            .body-card {
                border: 2px solid var(--light-border);
                border-radius: 16px;
                padding: 24px 16px 16px;
                text-align: center;
                cursor: pointer;
                transition: border-color 0.2s, background 0.2s;
                background: var(--warm-white);
            }

            .body-card:hover {
                border-color: var(--rose);
            }

            .body-card.selected {
                border-color: var(--terracotta);
                background: #FDF0EA;
            }

            .body-icon {
                font-size: 36px;
                margin-bottom: 10px;
            }

            .body-name {
                font-size: 13px;
                font-weight: 600;
                color: var(--charcoal);
            }

            .quiz-nav {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-top: 48px;
            }

            .btn-back {
                background: transparent;
                border: 1.5px solid var(--light-border);
                color: var(--muted);
                padding: 13px 28px;
                border-radius: 50px;
                font-size: 14px;
                font-weight: 500;
                cursor: pointer;
                transition: all 0.2s;
            }

            .btn-back:hover {
                border-color: var(--charcoal);
                color: var(--charcoal);
            }

            .btn-next {
                background: var(--terracotta);
                color: #fff;
                padding: 13px 36px;
                border-radius: 50px;
                font-size: 14px;
                font-weight: 600;
                border: none;
                cursor: pointer;
                transition: background 0.2s;
                opacity: 0.45;
                pointer-events: none;
            }

            .btn-next.enabled {
                opacity: 1;
                pointer-events: all;
            }

            .btn-next.enabled:hover {
                background: var(--deep-rose);
            }

            /* Results */
            .results-page {
                padding: 60px 5%;
                max-width: 900px;
                margin: 0 auto;
            }

            .results-header {
                text-align: center;
                margin-bottom: 56px;
            }

            .result-season-badge {
                display: inline-block;
                padding: 10px 28px;
                border-radius: 50px;
                font-size: 13px;
                font-weight: 700;
                letter-spacing: 1px;
                text-transform: uppercase;
                margin-bottom: 20px;
            }

            .results-grid {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 24px;
                margin-bottom: 40px;
            }

            .result-card {
                background: var(--warm-white);
                border: 1px solid var(--light-border);
                border-radius: 20px;
                padding: 28px;
            }

            .rc-title {
                font-size: 12px;
                font-weight: 600;
                letter-spacing: 1px;
                text-transform: uppercase;
                color: var(--muted);
                margin-bottom: 16px;
            }

            .palette-row {
                display: flex;
                gap: 10px;
                margin-bottom: 10px;
            }

            .big-swatch {
                width: 48px;
                height: 48px;
                border-radius: 12px;
                position: relative;
            }

            .big-swatch span {
                position: absolute;
                bottom: -18px;
                left: 50%;
                transform: translateX(-50%);
                font-size: 10px;
                color: var(--muted);
                white-space: nowrap;
            }

            .avoid-row {
                display: flex;
                gap: 10px;
            }

            .avoid-swatch {
                width: 36px;
                height: 36px;
                border-radius: 8px;
                position: relative;
            }

            .avoid-swatch::after {
                content: '✕';
                position: absolute;
                inset: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 12px;
                color: rgba(255, 255, 255, 0.8);
            }

            .cloth-list {
                list-style: none;
            }

            .cloth-list li {
                padding: 12px 0;
                border-bottom: 1px solid var(--light-border);
                font-size: 14px;
                color: var(--charcoal);
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .cloth-list li::before {
                content: '';
                width: 6px;
                height: 6px;
                border-radius: 50%;
                background: var(--rose);
                flex-shrink: 0;
            }

            .cloth-list li:last-child {
                border-bottom: none;
            }

            /* ===== BLOG PAGE ===== */
            .blog-hero {
                padding: 80px 5% 60px;
                background: var(--warm-white);
                border-bottom: 1px solid var(--light-border);
            }

            .blog-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
                gap: 28px;
                padding: 60px 5%;
            }

            .blog-card {
                border: 1px solid var(--light-border);
                border-radius: 20px;
                overflow: hidden;
                background: var(--warm-white);
                transition: transform 0.2s, box-shadow 0.2s;
                cursor: pointer;
            }

            .blog-card:hover {
                transform: translateY(-4px);
                box-shadow: 0 16px 40px rgba(139, 74, 50, 0.1);
            }

            .blog-img {
                height: 200px;
                position: relative;
                overflow: hidden;
            }

            .blog-img-inner {
                width: 100%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .blog-body {
                padding: 24px;
            }

            .blog-tag {
                display: inline-block;
                background: var(--blush);
                color: var(--deep-rose);
                font-size: 11px;
                font-weight: 600;
                letter-spacing: 0.8px;
                text-transform: uppercase;
                padding: 4px 12px;
                border-radius: 50px;
                margin-bottom: 12px;
            }

            .blog-title {
                font-family: 'Playfair Display', serif;
                font-size: 20px;
                font-weight: 700;
                color: var(--soft-black);
                margin-bottom: 10px;
                line-height: 1.35;
            }

            .blog-excerpt {
                font-size: 14px;
                color: var(--muted);
                line-height: 1.65;
                margin-bottom: 18px;
            }

            .blog-meta {
                font-size: 12px;
                color: var(--muted);
                display: flex;
                align-items: center;
                gap: 12px;
            }

            .blog-meta span:first-child::after {
                content: '·';
                margin-left: 12px;
            }

            /* Featured blog */
            .blog-featured {
                grid-column: 1 / -1;
                display: grid;
                grid-template-columns: 1.2fr 1fr;
                border-radius: 24px;
                overflow: hidden;
            }

            .blog-featured .blog-img {
                height: 100%;
                min-height: 300px;
            }

            .blog-featured .blog-body {
                padding: 40px 32px;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .blog-featured .blog-title {
                font-size: 26px;
            }

            /* ===== CONTACT PAGE ===== */
            .contact-wrap {
                display: grid;
                grid-template-columns: 1fr 1fr;
                min-height: calc(100vh - 68px);
            }

            .contact-left {
                background: var(--soft-black);
                padding: 80px 5%;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .contact-left .section-h2 {
                color: var(--cream);
                margin-bottom: 16px;
            }

            .contact-left .section-sub {
                color: rgba(250, 247, 242, 0.55);
                margin-bottom: 48px;
            }

            .contact-info-item {
                display: flex;
                gap: 16px;
                align-items: flex-start;
                margin-bottom: 28px;
            }

            .ci-icon {
                width: 44px;
                height: 44px;
                border-radius: 12px;
                background: rgba(250, 247, 242, 0.08);
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 18px;
                flex-shrink: 0;
            }

            .ci-label {
                font-size: 12px;
                color: rgba(250, 247, 242, 0.4);
                margin-bottom: 4px;
            }

            .ci-value {
                font-size: 15px;
                color: var(--cream);
                font-weight: 400;
            }

            .contact-right {
                background: var(--warm-white);
                padding: 80px 5%;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .form-group {
                margin-bottom: 24px;
            }

            .form-label {
                display: block;
                font-size: 13px;
                font-weight: 600;
                color: var(--charcoal);
                margin-bottom: 8px;
                letter-spacing: 0.3px;
            }

            .form-input {
                width: 100%;
                padding: 14px 18px;
                border: 1.5px solid var(--light-border);
                border-radius: 12px;
                font-family: 'DM Sans', sans-serif;
                font-size: 15px;
                color: var(--charcoal);
                background: #fff;
                transition: border-color 0.2s;
                outline: none;
            }

            .form-input:focus {
                border-color: var(--rose);
            }

            .form-input::placeholder {
                color: #C4B8B2;
            }

            textarea.form-input {
                min-height: 140px;
                resize: vertical;
            }

            .form-row {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 16px;
            }

            .subject-chips {
                display: flex;
                gap: 10px;
                flex-wrap: wrap;
                margin-top: 8px;
            }

            .chip {
                padding: 8px 18px;
                border-radius: 50px;
                border: 1.5px solid var(--light-border);
                font-size: 13px;
                font-weight: 500;
                cursor: pointer;
                transition: all 0.2s;
                color: var(--charcoal);
                background: #fff;
            }

            .chip:hover,
            .chip.active {
                border-color: var(--rose);
                background: #FDF0EA;
                color: var(--deep-rose);
            }

            /* Footer */
            footer {
                background: var(--soft-black);
                color: rgba(250, 247, 242, 0.5);
                padding: 60px 5% 32px;
            }

            .footer-grid {
                display: grid;
                grid-template-columns: 2fr 1fr 1fr 1fr;
                gap: 40px;
                margin-bottom: 48px;
            }

            .footer-logo {
                font-family: 'Playfair Display', serif;
                font-size: 24px;
                color: var(--cream);
                margin-bottom: 14px;
            }

            .footer-desc {
                font-size: 14px;
                line-height: 1.7;
                max-width: 260px;
            }

            .footer-col h4 {
                font-size: 13px;
                font-weight: 600;
                color: var(--cream);
                margin-bottom: 18px;
                letter-spacing: 0.5px;
            }

            .footer-col a {
                display: block;
                font-size: 14px;
                margin-bottom: 10px;
                color: rgba(250, 247, 242, 0.5);
                text-decoration: none;
                cursor: pointer;
                transition: color 0.2s;
            }

            .footer-col a:hover {
                color: var(--blush);
            }

            .footer-bottom {
                border-top: 1px solid rgba(250, 247, 242, 0.1);
                padding-top: 28px;
                display: flex;
                justify-content: space-between;
                font-size: 13px;
            }

            /* Responsive */
            @media (max-width: 768px) {
                .hero {
                    grid-template-columns: 1fr;
                    padding: 40px 5%;
                }

                .hero-visual {
                    display: none;
                }

                .seasons-grid {
                    grid-template-columns: 1fr 1fr;
                }

                .contact-wrap {
                    grid-template-columns: 1fr;
                }

                .contact-left {
                    padding: 60px 5%;
                }

                .results-grid {
                    grid-template-columns: 1fr;
                }

                .blog-featured {
                    grid-template-columns: 1fr;
                }

                .footer-grid {
                    grid-template-columns: 1fr 1fr;
                }

                .form-row {
                    grid-template-columns: 1fr;
                }
            }
        </style>
    </head>

    <body>
        <!-- NAV -->
        <nav>
            <div class="nav-logo">Chroma<span>Fit</span></div>
            <div class="nav-links">
                <a href="{{ route('show.home_page') }}"  class="active" id="nav-home" >Home</a>
                <a href="{{ route('show.custom_pages', ['slug' => 'blog']) }}"  id="nav-blog">Blog</a>
                <a href="{{ route('show.custom_pages', ['slug' => 'contact']) }}" id="nav-contact">Contact</a>
                <a href="{{ route('show.custom_pages', ['slug' => 'test']) }}" class="nav-cta" id="nav-test">Take the Quiz →</a>
            </div>
        </nav>

        <!-- Main Content -->
        @yield('content')

        <!-- Footer Spacing -->
        @if (Route::has('login'))
            <div class="h-14 hidden lg:block"></div>
        @endif

        <!-- Mobile Menu JavaScript -->
        <script>
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            // Mobile dropdown toggles
            const methodDropdownBtn = document.getElementById('method-dropdown-btn');
            const methodDropdownMenu = document.getElementById('method-dropdown-menu');

            if (methodDropdownBtn && methodDropdownMenu) {
                methodDropdownBtn.addEventListener('click', function() {
                    methodDropdownMenu.classList.toggle('hidden');
                    const icon = this.querySelector('svg');
                    if (icon) {
                        icon.classList.toggle('rotate-180');
                    }
                });
            }

            const servicesDropdownBtn = document.getElementById('services-dropdown-btn');
            const servicesDropdownMenu = document.getElementById('services-dropdown-menu');

            if (servicesDropdownBtn && servicesDropdownMenu) {
                servicesDropdownBtn.addEventListener('click', function() {
                    servicesDropdownMenu.classList.toggle('hidden');
                    const icon = this.querySelector('svg');
                    if (icon) {
                        icon.classList.toggle('rotate-180');
                    }
                });
            }
        </script>

        @include('layouts.script')

    </body>

    </html>
