@extends('layouts.app')

@section('page_style')
    <x-season-style />
    {{-- Tailwind CSS via CDN for tooltips --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Tooltip styles (same as previous pages) */
        .tooltip-trigger {
            position: relative;
            cursor: help;
        }

        .tooltip-trigger .tooltip-box {
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.2s ease, visibility 0.2s ease;
            position: absolute;
            z-index: 50;
            bottom: calc(100% + 10px);
            left: 50%;
            transform: translateX(-50%);
            white-space: nowrap;
            background: #1e293b;
            color: #f1f5f9;
            padding: 6px 14px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 500;
            letter-spacing: 0.3px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
            pointer-events: none;
        }

        .tooltip-trigger .tooltip-box::after {
            content: '';
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            border: 6px solid transparent;
            border-top-color: #1e293b;
        }

        .tooltip-trigger:hover .tooltip-box {
            visibility: visible;
            opacity: 1;
        }

        .tooltip-trigger .tooltip-box.tooltip-bottom {
            bottom: auto;
            top: calc(100% + 10px);
        }

        .tooltip-trigger .tooltip-box.tooltip-bottom::after {
            top: auto;
            bottom: 100%;
            border-top-color: transparent;
            border-bottom-color: #1e293b;
        }

        .tooltip-trigger .tooltip-box.tooltip-left {
            left: auto;
            right: calc(100% + 14px);
            transform: translateX(0);
        }

        .tooltip-trigger .tooltip-box.tooltip-left::after {
            left: auto;
            right: 8px;
            transform: translateX(0);
            border-top-color: transparent;
            border-left-color: #1e293b;
            border-right-color: transparent;
        }

        .tooltip-trigger .tooltip-box.tooltip-right {
            left: calc(100% + 14px);
            transform: translateX(0);
        }

        .tooltip-trigger .tooltip-box.tooltip-right::after {
            left: -6px;
            transform: translateX(0);
            border-top-color: transparent;
            border-right-color: #1e293b;
            border-left-color: transparent;
        }

        /* Keep existing styles from x-season-style */
    </style>
@endsection

@section('content')
    <section class="season-page-hero" style="background:linear-gradient(145deg,#F0C880,#E8A050,#D88040);color:#3C1800;">
        <div>
            <div class="sp-eyebrow">
                <div class="sp-line" style="background:#D4714A;"></div>
                <span class="sp-season-type" style="color:#D4714A;">🌸 Spring · Warm · Clear</span>
            </div>
            <h1 class="sp-title" style="font-size:clamp(52px,7vw,88px);">True Spring</h1>
            <div class="sp-tagline" style="color:#3C180066;">"Vibrant, warm, and radiantly alive"</div>
            <p class="sp-desc" style="color:#3C180088;">True Spring is the quintessential spring — warm, clear, and
                vibrantly fresh. Your colouring is the embodiment of a sun-drenched spring day: golden, bright, and full of
                life.</p>
            <div class="sp-palette-preview">
                {{-- tooltips on preview swatches --}}
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#F4A460;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#F4A460 · Sandy Gold</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#FFD700;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#FFD700 · Bright Gold</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#FF7F50;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#FF7F50 · Vivid Coral</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#90EE90;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#90EE90 · Bright Spring Green</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#FFB347;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#FFB347 · Warm Orange</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#FFA07A;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#FFA07A · Light Salmon</div>
                </div>
            </div>
            <div style="display:flex;gap:12px;flex-wrap:wrap;">
                <a class="btn btn-white" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
                <a class="btn btn-outline" style="color:#3C1800;border-color:#3C180044;"
                    href="{{ route('show.custom_pages', ['slug' => 'test']) }}">Find My Season</a>
            </div>
        </div>
        <div class="sp-hero-visual">
            <div class="sp-visual-main" style="background:linear-gradient(145deg,#FFD700,#FFA500);">🌻</div>
            <div class="sp-visual-badges">
                {{-- tooltips on badges --}}
                <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
                    <div class="sp-badge-icon">🌡️</div>
                    <div>
                        <div class="sp-badge-title" style="color:#3C1800;">Warm Undertone</div>
                        <div class="sp-badge-sub" style="color:#3C1800;">Golden, clear</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Your skin has a
                        distinct golden warmth — clear and bright, never muted.</div>
                </div>
                <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
                    <div class="sp-badge-icon">💎</div>
                    <div>
                        <div class="sp-badge-title" style="color:#3C1800;">Clear Quality</div>
                        <div class="sp-badge-sub" style="color:#3C1800;">Vivid, bright</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Your colours are
                        clear and vibrant — never dull or greyed.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- PALETTE (unisex) -->
    <section class="season-section">
        <span class="lbl" style="color:#D4714A;">✦ Your Colour Palette</span>
        <div class="h2" style="margin-bottom:12px;">Best colours for True Spring</div>
        <p class="body-text" style="max-width:560px;margin-bottom:36px;">Your palette is warm, clear, and vibrant. Think
            golden yellows, bright corals, warm aquas, and clear spring greens. You can carry more saturation than Light
            Spring.</p>
        <div class="two-col">
            <div>
                <div
                    style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">
                    Power Shades</div>
                <div class="color-grid" style="margin-bottom:28px;">
                    {{-- tooltips on each swatch --}}
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#F4A460;" title="#F4A460">
                        <div class="tooltip-box">#F4A460 · Sandy Gold</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#FFD700;" title="#FFD700">
                        <div class="tooltip-box">#FFD700 · Bright Gold</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#FF7F50;" title="#FF7F50">
                        <div class="tooltip-box">#FF7F50 · Vivid Coral</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#90EE90;" title="#90EE90">
                        <div class="tooltip-box">#90EE90 · Bright Spring Green</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#FFB347;" title="#FFB347">
                        <div class="tooltip-box">#FFB347 · Warm Orange</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#FFA07A;" title="#FFA07A">
                        <div class="tooltip-box">#FFA07A · Light Salmon</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#98FB98;" title="#98FB98">
                        <div class="tooltip-box">#98FB98 · Pale Green</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#F0E68C;" title="#F0E68C">
                        <div class="tooltip-box">#F0E68C · Khaki Gold</div>
                    </div>
                </div>
                <div class="swatch-strip" style="height:14px;border-radius:7px;margin-bottom:8px;">
                    <span style="background:#F4A460;"></span>
                    <span style="background:#FFD700;"></span>
                    <span style="background:#FF7F50;"></span>
                    <span style="background:#90EE90;"></span>
                    <span style="background:#FFB347;"></span>
                    <span style="background:#FFA07A;"></span>
                    <span style="background:#98FB98;"></span>
                    <span style="background:#F0E68C;"></span>
                </div>
                <div style="font-size:12px;color:#B0A49E;">Your complete spectrum — from light to dark</div>
            </div>
            <div>
                <div
                    style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">
                    Neutrals & Staples</div>
                <div class="color-grid" style="margin-bottom:20px;">
                    <div class="tooltip-trigger cswatch" style="background:#F5DEB3;">
                        <div class="tooltip-box">#F5DEB3 · Wheat</div>
                    </div>
                    <div class="tooltip-trigger cswatch" style="background:#D2B48C;">
                        <div class="tooltip-box">#D2B48C · Camel</div>
                    </div>
                    <div class="tooltip-trigger cswatch" style="background:#C8A870;">
                        <div class="tooltip-box">#C8A870 · Warm Tan</div>
                    </div>
                    <div class="tooltip-trigger cswatch" style="background:#A0856A;">
                        <div class="tooltip-box">#A0856A · Golden Brown</div>
                    </div>
                </div>
                <p class="body-text" style="font-size:14px;">Warm wheat, camel, and golden tan are your neutral anchors.
                    These warm, golden neutrals work with everything in your wardrobe.</p>
            </div>
        </div>
    </section>

    <!-- YOUR FEATURES (unisex) -->
    <section class="season-section-alt">
        <span class="lbl" style="color:#D4714A;">✦ Typical Features</span>
        <div class="h2" style="margin-bottom:40px;">Do you look like a True Spring?</div>
        <div class="three-col">
            <div class="tooltip-trigger card" style="position:relative;">
                <div style="font-size:32px;margin-bottom:14px;">🧴</div>
                <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skin</div>
                <div class="body-text" style="font-size:14px;">Fair to medium skin with a warm, golden or peachy-golden
                    undertone. May have visible warmth even in lighter skin. Freckles are common. Tans to a beautiful golden
                    colour.</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">Warm, golden skin that
                    glows — tans to a beautiful golden colour.</div>
            </div>
            <div class="tooltip-trigger card" style="position:relative;">
                <div style="font-size:32px;margin-bottom:14px;">👁️</div>
                <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Eyes</div>
                <div class="body-text" style="font-size:14px;">Clear blue, green, or warm hazel with golden or amber
                    flecks. Eyes are often vivid and bright — sometimes described as sparkling. Warm golden ring around the
                    iris is common.</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">Clear, sparkling eyes
                    with golden flecks — bright and vivid.</div>
            </div>
            <div class="tooltip-trigger card" style="position:relative;">
                <div style="font-size:32px;margin-bottom:14px;">💇</div>
                <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Hair</div>
                <div class="body-text" style="font-size:14px;">Golden blonde, honey blonde, warm light brown, or auburn.
                    Often has natural golden highlights. Hair has a warm, sunny quality that seems to catch the light.</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">Warm, sunny hair with
                    golden highlights — catches the light beautifully.</div>
            </div>
        </div>
        <div style="margin-top:32px;padding:24px;background:#D4714A14;border:1px solid #D4714A33;border-radius:16px;">
            <div style="font-size:15px;font-weight:600;color:#2C2420;margin-bottom:6px;">✦ The True Spring glow effect
            </div>
            <div class="body-text" style="font-size:14px;">True Springs in their colours look genuinely sun-kissed and
                alive. Their skin seems to radiate warmth, and their eyes sparkle more brightly. The overall effect is
                fresh, healthy, and radiant.</div>
        </div>
    </section>

    <!-- GENDER-SPECIFIC SECTIONS -->
    <div style="margin: 0 6%;">
        <div class="gender-toggle">
            <button class="gender-btn active" data-gender="women">👩 Women / Feminine</button>
            <button class="gender-btn" data-gender="men">👨 Men / Masculine</button>
            <button class="gender-btn" data-gender="neutral">🌟 Gender-Neutral</button>
        </div>
    </div>

    <!-- WOMEN CONTENT -->
    <div id="women-content" class="gender-content active-gender">
        <!-- Makeup Guide (Women) -->
        <section class="season-section">
            <span class="lbl" style="color:#D4714A;">✦ Makeup Guide (Women)</span>
            <div class="h2" style="margin-bottom:12px;">Your perfect makeup shades</div>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">True Springs can handle slightly more colour
                than Light Springs. Keep the warmth golden and the finish fresh — nothing cool, ashy, or smoky.</p>
            <div class="makeup-row">
                {{-- makeup items with tooltips --}}
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#F5C89C;"></div>
                    <div class="makeup-label">Golden Beige</div>
                    <div class="makeup-type">Foundation</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm, golden-beige
                        base that matches your clear warmth.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#FF8C69;"></div>
                    <div class="makeup-label">Warm Salmon</div>
                    <div class="makeup-type">Blush</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm salmon blush
                        for a fresh, healthy flush.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#FF6347;"></div>
                    <div class="makeup-label">Bright Coral</div>
                    <div class="makeup-type">Lips</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Your signature lip
                        — bright, warm, and coral.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#DAA520;"></div>
                    <div class="makeup-label">Golden Yellow</div>
                    <div class="makeup-type">Eyes</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm golden shadow
                        that brings out your eyes.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#FF7F50;"></div>
                    <div class="makeup-label">Vivid Coral</div>
                    <div class="makeup-type">Lips</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">A bright coral lip
                        that pops with your warmth.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#CD853F;"></div>
                    <div class="makeup-label">Warm Bronze</div>
                    <div class="makeup-type">Eyes</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm bronze shadow
                        for a golden eye look.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#FFA07A;"></div>
                    <div class="makeup-label">Light Salmon</div>
                    <div class="makeup-type">Blush</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Soft salmon blush
                        for a natural warmth.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#FFD700;"></div>
                    <div class="makeup-label">Gold Shimmer</div>
                    <div class="makeup-type">Highlighter</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm gold shimmer
                        for a radiant, sun-kissed glow.</div>
                </div>
            </div>
            <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Foundation Undertone</div>
                    <div class="body-text" style="font-size:14px;">Look for warm, golden-beige foundations. You are one of
                        the seasons that can handle a touch of yellow in your base without it looking sallow.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Golden, warm bases
                        — a touch of yellow is fine.</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Key Makeup Rule</div>
                    <div class="body-text" style="font-size:14px;">Your keyword is "golden." Everything should have warm,
                        golden undertones. Cool pinks and berries will make you look ill. Coral is always your friend.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Golden warmth is
                        your signature — coral is your best friend.</div>
                </div>
            </div>
        </section>

        <!-- Wardrobe Tips (Women) -->
        <section class="season-section-alt">
            <div class="two-col">
                <div>
                    <span class="lbl" style="color:#D4714A;">✦ Wardrobe Tips (Women)</span>
                    <div class="h2" style="margin-bottom:20px;">How to dress as a True Spring woman</div>
                    <div class="feature-row">
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">01</div>
                            <div>
                                <div class="fi-title">Warm, clear colours</div>
                                <div class="fi-desc">Your palette is warm AND clear — meaning you can handle brightness.
                                    Vivid corals, warm turquoise, and bright yellows are your playground.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Bright,
                                warm colours are your signature — don't be afraid to be vivid.</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">02</div>
                            <div>
                                <div class="fi-title">Mix brights with naturals</div>
                                <div class="fi-desc">Pair a vivid coral top with warm camel trousers for a signature True
                                    Spring look that feels both bold and natural.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Bright
                                colours grounded by warm neutrals create a balanced look.</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">03</div>
                            <div>
                                <div class="fi-title">Avoid dull, muddy colours</div>
                                <div class="fi-desc">Your colouring is clear, not muted. Dull, greyed-out shades will make
                                    you look tired. Stick to warm and clear.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Muted
                                colours drain your brightness — stick to clear, warm shades.</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">04</div>
                            <div>
                                <div class="fi-title">Gold jewellery only</div>
                                <div class="fi-desc">Yellow gold, rose gold, and brass. Silver and white gold will clash
                                    with your warm colouring.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Gold is
                                your metal — silver is too cool for you.</div>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">✦ Colours to Avoid</span>
                    <div class="avoid-grid">
                        {{-- avoid cards with tooltips --}}
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#4B0082;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Purple/Violet</div>
                                <div class="avoid-why">Too cool for your warmth</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Purple is
                                too cool — choose warm violet or plum.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#696969;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Cool Grey</div>
                                <div class="avoid-why">Makes you look dull</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Cool grey
                                drains your warmth — choose warm taupe or greige.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FF1493;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Hot Pink</div>
                                <div class="avoid-why">Too cool and artificial</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Hot pink is
                                too cool — choose coral or warm pink.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#000000;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Black</div>
                                <div class="avoid-why">Overwhelms your fresh colouring</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Black is too
                                harsh — choose charcoal or warm chocolate.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#483D8B;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Dark Slate</div>
                                <div class="avoid-why">Too cool and heavy</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Dark slate
                                is too cool — choose warm olive or teal.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#2F4F4F;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Dark Teal</div>
                                <div class="avoid-why">Too dark and cool-leaning</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Dark teal is
                                too cool — choose warm aqua or spring green.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Outfit Inspiration (Women) -->
        <section class="season-section">
            <span class="lbl" style="color:#D4714A;">✦ Outfit Inspiration (Women)</span>
            <div class="h2" style="margin-bottom:36px;">Looks built for True Spring women</div>
            <div class="outfit-grid">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#FFD700,#FFA500);">🌞</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Day</div>
                        <div class="outfit-name">Golden Hour Chic</div>
                        <div class="outfit-items">Warm yellow sundress · Tan wedge sandals · Woven sun hat · Gold bangles
                        </div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Fresh, golden, and
                        perfect for a sunny day.</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#FF7F50,#FF6347);">🌺</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Casual</div>
                        <div class="outfit-name">Coral Spring</div>
                        <div class="outfit-items">Coral wrap top · White wide-leg jeans · Tan mules · Simple gold hoops
                        </div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Bright, casual,
                        and effortlessly warm.</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#90EE90,#6BBF6B);">🌿</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Evening</div>
                        <div class="outfit-name">Spring Garden</div>
                        <div class="outfit-items">Warm green midi dress · Tan strappy heels · Gold drop earrings · Nude
                            clutch</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Elegant, fresh,
                        and beautifully True Spring.</div>
                </div>
            </div>
        </section>
    </div>

    <!-- MEN CONTENT -->
    <div id="men-content" class="gender-content">
        <!-- Grooming & Skincare (Men) -->
        <section class="season-section">
            <span class="lbl" style="color:#D4714A;">✦ Grooming & Skincare (Men)</span>
            <div class="h2" style="margin-bottom:12px;">Grooming for the True Spring man</div>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">Warm, golden, and fresh. Your grooming should
                enhance your natural brightness — nothing heavy, cool, or muddy.</p>
            <div class="makeup-row">
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#F5C89C;"></div>
                    <div class="makeup-label">Warm Golden Moisturizer</div>
                    <div class="makeup-type">Skincare</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm, golden
                        hydration for a natural glow.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#E8B878;"></div>
                    <div class="makeup-label">Peachy Concealer</div>
                    <div class="makeup-type">Concealer</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Peachy concealer
                        that blends with your warm skin.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#FFD8A0;"></div>
                    <div class="makeup-label">Golden SPF</div>
                    <div class="makeup-type">Sunscreen</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Tinted SPF with a
                        warm, golden finish.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#C89050;"></div>
                    <div class="makeup-label">Honey Brown Beard Oil</div>
                    <div class="makeup-type">Facial hair care</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm honey-brown
                        oil for a soft, conditioned beard.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#DAA520;"></div>
                    <div class="makeup-label">Golden Pomade</div>
                    <div class="makeup-type">Hair Styling</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm golden pomade
                        for a natural hold.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#B87A40;"></div>
                    <div class="makeup-label">Warm Taupe Brow Gel</div>
                    <div class="makeup-type">Brows</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm taupe for
                        natural, defined brows.</div>
                </div>
            </div>
            <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skincare Focus</div>
                    <div class="body-text" style="font-size:14px;">Brightening and radiance. Use vitamin C and gentle
                        exfoliation to keep your naturally golden skin glowing. Avoid heavy, matte, or greyish finishes.
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Radiant, glowing
                        skin is your goal — brightening products help.</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Facial Hair</div>
                    <div class="body-text" style="font-size:14px;">Keep facial hair warm and golden-toned. Use honey brown
                        or golden beard oils. Avoid cool ashy tones or dark black beards that create harsh contrast.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Warm, golden
                        facial hair complements your sunny colouring.</div>
                </div>
            </div>
        </section>

        <!-- Wardrobe Tips (Men) -->
        <section class="season-section-alt">
            <div class="two-col">
                <div>
                    <span class="lbl" style="color:#D4714A;">✦ Wardrobe Tips (Men)</span>
                    <div class="h2" style="margin-bottom:20px;">How to dress as a True Spring man</div>
                    <div class="feature-row">
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">01</div>
                            <div>
                                <div class="fi-title">Warm, golden neutrals</div>
                                <div class="fi-desc">Camel, tan, warm sand, and wheat are your best suit and trouser
                                    colours. Avoid charcoal and cool greys.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Warm,
                                golden neutrals are your foundation — they enhance your warmth.</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">02</div>
                            <div>
                                <div class="fi-title">Clear warm accents</div>
                                <div class="fi-desc">Coral, golden yellow, warm aqua, and bright green in shirts, polos, or
                                    ties add that signature True Spring energy.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Bright,
                                clear accents bring your outfit to life.</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">03</div>
                            <div>
                                <div class="fi-title">Gold and tan leather</div>
                                <div class="fi-desc">Gold watches, tan leather shoes and belts, and light wood accessories
                                    complement your warm colouring.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Gold and
                                tan leather tie your warm look together.</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">04</div>
                            <div>
                                <div class="fi-title">Avoid cool and dark colours</div>
                                <div class="fi-desc">No black, navy, cool grey, or deep purple. They will drain your warmth
                                    and make you look sallow.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Cool and
                                dark colours are your enemy — they dull your warmth.</div>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">✦ Colours to Avoid</span>
                    <div class="avoid-grid">
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#4B0082;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Purple/Violet</div>
                                <div class="avoid-why">Too cool for your warmth</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Purple is
                                too cool — choose warm violet or plum.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#696969;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Cool Grey</div>
                                <div class="avoid-why">Makes you look dull</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Cool grey
                                drains your warmth — choose warm taupe or greige.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#000000;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Black</div>
                                <div class="avoid-why">Overwhelms your fresh colouring</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Black is too
                                harsh — choose charcoal or warm chocolate.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#000080;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Navy</div>
                                <div class="avoid-why">Too cool and heavy</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Navy is too
                                cool — choose warm olive or teal.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#C0C0C0;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Silver</div>
                                <div class="avoid-why">Undertone mismatch</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Silver is
                                too cool — choose gold or brass.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FFFFFF;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Pure White</div>
                                <div class="avoid-why">Too harsh, opt for cream</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">White is too
                                stark — choose warm cream or ivory.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Outfit Inspiration (Men) -->
        <section class="season-section">
            <span class="lbl" style="color:#D4714A;">✦ Outfit Inspiration (Men)</span>
            <div class="h2" style="margin-bottom:36px;">Looks built for True Spring men</div>
            <div class="outfit-grid">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#FFD700,#FFA500);">🌞</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Business</div>
                        <div class="outfit-name">Golden Beige Suit</div>
                        <div class="outfit-items">Warm beige suit · Coral tie · Cream shirt · Tan oxfords · Gold watch
                        </div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Warm,
                        professional, and confident — True Spring business style.</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#FF7F50,#FF6347);">🌺</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Smart Casual</div>
                        <div class="outfit-name">Coral & Khaki</div>
                        <div class="outfit-items">Coral polo · Warm khaki chinos · Tan suede loafers · Leather strap watch
                        </div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Smart, warm, and
                        effortlessly stylish.</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#90EE90,#6BBF6B);">🌿</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Weekend</div>
                        <div class="outfit-name">Warm Green</div>
                        <div class="outfit-items">Warm green sweater · Cream chinos · Tan boots · Gold chain necklace</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Relaxed, warm, and
                        perfectly True Spring.</div>
                </div>
            </div>
        </section>
    </div>

    <!-- GENDER-NEUTRAL CONTENT -->
    <div id="neutral-content" class="gender-content">
        <section class="season-section">
            <span class="lbl" style="color:#D4714A;">✦ Style for Everyone</span>
            <div class="h2" style="margin-bottom:12px;">Gender-neutral True Spring tips</div>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">True Spring is about golden warmth, clarity,
                and fresh radiance. These principles work for any gender expression.</p>
            <div
                style="display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:20px;margin-bottom:32px;">
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">🌞</div>
                    <div class="fi-title">Warm, golden neutrals</div>
                    <div class="fi-desc" style="font-size:14px;">Camel, wheat, warm sand, and golden tan are your
                        foundation. Avoid cool greys and harsh whites.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Your neutrals are
                        warm and golden — never cool or stark.</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">🌺</div>
                    <div class="fi-title">Clear, warm accents</div>
                    <div class="fi-desc" style="font-size:14px;">Coral, golden yellow, warm turquoise, and bright green
                        bring life to your outfits. Keep colours clear and warm.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Bright, clear
                        accents add the perfect pop of warmth.</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">⚜️</div>
                    <div class="fi-title">Warm metals</div>
                    <div class="fi-desc" style="font-size:14px;">Gold, rose gold, and brass. Avoid silver, platinum, or
                        white gold.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm metals are
                        your signature — cool metals don't work for you.</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">🌸</div>
                    <div class="fi-title">Keep it bright, not muted</div>
                    <div class="fi-desc" style="font-size:14px;">Your colours should look fresh and sunlit. Avoid anything
                        dusty, greyed, or muddy.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Bright, fresh
                        colours are your signature — avoid dullness.</div>
                </div>
            </div>
            <div class="outfit-grid" style="margin-bottom:20px;">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#FFD700,#FFA500);">🌞</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Unisex Look</div>
                        <div class="outfit-name">Golden Hour</div>
                        <div class="outfit-items">Camel coat or jacket · Cream base · Tan boots · Gold jewellery or watch
                        </div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">A warm, sunny
                        unisex look that radiates spring energy.</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#FF7F50,#FF6347);">🌺</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Bright Accent</div>
                        <div class="outfit-name">Coral Pop</div>
                        <div class="outfit-items">Coral sweater or hoodie · Warm beige trousers · Tan sneakers · Gold
                            details</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">A bold, warm
                        accent that's perfectly True Spring.</div>
                </div>
            </div>
        </section>
    </div>

    <!-- CELEBRITIES (expanded with male examples) -->
    <section class="season-section-alt">
        <span class="lbl" style="color:#D4714A;">✦ Famous True Springs</span>
        <div class="h2" style="margin-bottom:36px;">You're in great company</div>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(180px,1fr));gap:24px;">
            {{-- celebrity cards with tooltips --}}
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#FFD700;">🌟</div>
                <div class="celeb-name">Jennifer Aniston</div>
                <div class="celeb-note">Warm golden features (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her warm golden hair
                    and skin are classic True Spring.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#F5C090;">🎬</div>
                <div class="celeb-name">Blake Lively</div>
                <div class="celeb-note">Golden spring warmth (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her golden warmth and
                    bright features are True Spring.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#FFA07A;">💫</div>
                <div class="celeb-name">Sienna Miller</div>
                <div class="celeb-note">Vivid warm colouring (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her warm, clear
                    colouring is quintessential True Spring.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#FFD8A0;">🎭</div>
                <div class="celeb-name">Cameron Diaz</div>
                <div class="celeb-note">Clear warm tones (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her bright, warm
                    features are a True Spring icon.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#F5C89C;">🎸</div>
                <div class="celeb-name">Chris Hemsworth</div>
                <div class="celeb-note">Golden spring energy (he/him)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">His warm, golden
                    energy is perfectly True Spring.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#FFD700;">🎨</div>
                <div class="celeb-name">Hugh Jackman</div>
                <div class="celeb-note">Warm spring colouring (he/him)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">His warm, sunny
                    features are a great True Spring example.</div>
            </div>
        </div>
    </section>

    <!-- NAV BETWEEN SEASONS -->
    <div
        style="padding:40px 6%;display:flex;justify-content:space-between;align-items:center;border-top:1px solid #E8DDD6;gap:20px;flex-wrap:wrap;">
        <a class="btn btn-outline" style="color:#2C2420;border-color:#E8DDD6;"
            href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
        <div style="display:flex;gap:8px;flex-wrap:wrap;">
            <a class="btn btn-outline" style="color:#D4714A;border-color:#D4714A44;font-size:13px;"
                href="{{ route('show.seasons.custom_pages', ['slug' => 'light-spring']) }}">Light Spring →</a>
            <a class="btn btn-outline" style="color:#D4714A;border-color:#D4714A44;font-size:13px;"
                href="{{ route('show.seasons.custom_pages', ['slug' => 'true-summer']) }}">True Summer →</a>
        </div>
    </div>

    <div class="footer-mini">
        <div class="fm-logo">Glow<em>Match</em></div>
        <div class="fm-links"><a href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">All Seasons</a></div>
    </div>

    {{-- gender toggle script (unchanged) --}}
    <script>
        (function() {
            const btns = document.querySelectorAll('.gender-btn');
            const women = document.getElementById('women-content');
            const men = document.getElementById('men-content');
            const neutral = document.getElementById('neutral-content');

            function setGender(gender) {
                [women, men, neutral].forEach(el => el.classList.remove('active-gender'));
                btns.forEach(b => b.classList.remove('active'));
                if (gender === 'women') {
                    women.classList.add('active-gender');
                    btns[0].classList.add('active');
                } else if (gender === 'men') {
                    men.classList.add('active-gender');
                    btns[1].classList.add('active');
                } else {
                    neutral.classList.add('active-gender');
                    btns[2].classList.add('active');
                }
            }

            btns.forEach((btn, i) => {
                btn.addEventListener('click', function(e) {
                    const g = this.dataset.gender;
                    setGender(g);
                });
            });
            // default: women active
            setGender('women');
        })();
    </script>
@endsection
