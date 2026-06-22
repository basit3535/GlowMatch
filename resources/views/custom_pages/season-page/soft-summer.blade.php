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
    <section class="season-page-hero" style="background:linear-gradient(145deg,#C0C8D4,#A8B0BC,#9098A8);color:#F0EEF8;">
        <div>
            <div class="sp-eyebrow">
                <div class="sp-line" style="background:#7880A0;"></div>
                <span class="sp-season-type" style="color:#7880A0;">☁️ Summer · Neutral-Cool · Muted</span>
            </div>
            <h1 class="sp-title" style="font-size:clamp(52px,7vw,88px);">Soft Summer</h1>
            <div class="sp-tagline" style="color:#F0EEF866;">"Beautifully blended, neutrally muted, serenely soft"</div>
            <p class="sp-desc" style="color:#F0EEF888;">Soft Summer sits at the boundary of summer and autumn — the most
                muted of all 12 seasons. Your colouring is exquisitely blended with no strong contrasts and a neutrally cool
                base.</p>
            <div class="sp-palette-preview">
                {{-- tooltips on preview swatches --}}
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#B8C0CC;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#B8C0CC · Soft Grey-Blue</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#A8B0BC;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#A8B0BC · Muted Steel</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#989090;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#989090 · Dusty Taupe</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#B0A8A0;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#B0A8A0 · Warm Grey</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#A0A8A0;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#A0A8A0 · Sage Grey</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#B8B0A8;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#B8B0A8 · Greige</div>
                </div>
            </div>
            <div style="display:flex;gap:12px;flex-wrap:wrap;">
                <a class="btn btn-white" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
                <a class="btn btn-outline" style="color:#F0EEF8;border-color:#F0EEF844;"
                    href="{{ route('show.custom_pages', ['slug' => 'test']) }}">Find My Season</a>
            </div>
        </div>
        <div class="sp-hero-visual">
            <div class="sp-visual-main" style="background:linear-gradient(145deg,#B8C0CC,#A0A8B4);">🌫️</div>
            <div class="sp-visual-badges">
                {{-- tooltips on badges --}}
                <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
                    <div class="sp-badge-icon">⚖️</div>
                    <div>
                        <div class="sp-badge-title" style="color:#F0EEF8;">Neutral-Cool</div>
                        <div class="sp-badge-sub" style="color:#F0EEF8;">Almost neutral</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Your undertone is
                        subtly cool but very close to neutral — hard to pin down.</div>
                </div>
                <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
                    <div class="sp-badge-icon">🎨</div>
                    <div>
                        <div class="sp-badge-title" style="color:#F0EEF8;">Most Muted</div>
                        <div class="sp-badge-sub" style="color:#F0EEF8;">Softest of all 12</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Your palette is the
                        most greyed and blended — nothing vivid or harsh.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- PALETTE (unisex) -->
    <section class="season-section">
        <span class="lbl" style="color:#7880A0;">✦ Your Colour Palette</span>
        <div class="h2" style="margin-bottom:12px;">Best colours for Soft Summer</div>
        <p class="body-text" style="max-width:560px;margin-bottom:36px;">The most muted palette of all 12 seasons. Your
            colours are greyish, blended, and soft — they should look as if they've been mixed with a little grey and white.
        </p>
        <div class="two-col">
            <div>
                <div
                    style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">
                    Power Shades</div>
                <div class="color-grid" style="margin-bottom:28px;">
                    {{-- tooltips on each swatch --}}
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#B8C0CC;" title="#B8C0CC">
                        <div class="tooltip-box">#B8C0CC · Soft Grey-Blue</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#A8B0BC;" title="#A8B0BC">
                        <div class="tooltip-box">#A8B0BC · Muted Steel</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#989090;" title="#989090">
                        <div class="tooltip-box">#989090 · Dusty Taupe</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#B0A8A0;" title="#B0A8A0">
                        <div class="tooltip-box">#B0A8A0 · Warm Grey</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#A0A8A0;" title="#A0A8A0">
                        <div class="tooltip-box">#A0A8A0 · Sage Grey</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#B8B0A8;" title="#B8B0A8">
                        <div class="tooltip-box">#B8B0A8 · Greige</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#C0B8B0;" title="#C0B8B0">
                        <div class="tooltip-box">#C0B8B0 · Warm Stone</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#908888;" title="#908888">
                        <div class="tooltip-box">#908888 · Muted Mauve</div>
                    </div>
                </div>
                <div class="swatch-strip" style="height:14px;border-radius:7px;margin-bottom:8px;">
                    <span style="background:#B8C0CC;"></span>
                    <span style="background:#A8B0BC;"></span>
                    <span style="background:#989090;"></span>
                    <span style="background:#B0A8A0;"></span>
                    <span style="background:#A0A8A0;"></span>
                    <span style="background:#B8B0A8;"></span>
                    <span style="background:#C0B8B0;"></span>
                    <span style="background:#908888;"></span>
                </div>
                <div style="font-size:12px;color:#B0A49E;">Your complete spectrum — from light to dark</div>
            </div>
            <div>
                <div
                    style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">
                    Neutrals & Staples</div>
                <div class="color-grid" style="margin-bottom:20px;">
                    <div class="tooltip-trigger cswatch" style="background:#D4D0C8;">
                        <div class="tooltip-box">#D4D0C8 · Warm Grey</div>
                    </div>
                    <div class="tooltip-trigger cswatch" style="background:#C0BCB4;">
                        <div class="tooltip-box">#C0BCB4 · Blued Greige</div>
                    </div>
                    <div class="tooltip-trigger cswatch" style="background:#ACAAA4;">
                        <div class="tooltip-box">#ACAAA4 · Dusty Taupe</div>
                    </div>
                    <div class="tooltip-trigger cswatch" style="background:#989490;">
                        <div class="tooltip-box">#989490 · Muted Stone</div>
                    </div>
                </div>
                <p class="body-text" style="font-size:14px;">Warm grey, blued greige, and dusty taupe are your neutrals —
                    exquisitely blended between warm and cool.</p>
            </div>
        </div>
    </section>

    <!-- YOUR FEATURES (unisex) -->
    <section class="season-section-alt">
        <span class="lbl" style="color:#7880A0;">✦ Typical Features</span>
        <div class="h2" style="margin-bottom:40px;">Do you look like a Soft Summer?</div>
        <div class="three-col">
            <div class="tooltip-trigger card" style="position:relative;">
                <div style="font-size:32px;margin-bottom:14px;">🧴</div>
                <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skin</div>
                <div class="body-text" style="font-size:14px;">Fair to medium skin with a neutrally cool undertone —
                    sometimes hard to pin as warm or cool. Often slightly muted in natural colour. May have a grey or ashy
                    quality to the skin tone.</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">Neutral-cool and muted
                    — your skin is beautifully blended.</div>
            </div>
            <div class="tooltip-trigger card" style="position:relative;">
                <div style="font-size:32px;margin-bottom:14px;">👁️</div>
                <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Eyes</div>
                <div class="body-text" style="font-size:14px;">Grey, grey-hazel, grey-green, or pale grey-blue. Eyes are
                    never vivid — always softly blended and slightly greyed. A neutral, gentle quality.</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">Soft, greyed, and
                    blended — never sharp or vivid.</div>
            </div>
            <div class="tooltip-trigger card" style="position:relative;">
                <div style="font-size:32px;margin-bottom:14px;">💇</div>
                <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Hair</div>
                <div class="body-text" style="font-size:14px;">Mousy brown, cool medium brown, ashy blonde, or greyed
                    brown. Hair is notably low-contrast — neither strongly warm nor strongly cool. Often described as
                    "medium brown."</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">Low-contrast, muted,
                    and neutral — never too warm or too cool.</div>
            </div>
        </div>
        <div style="margin-top:32px;padding:24px;background:#7880A014;border:1px solid #7880A033;border-radius:16px;">
            <div style="font-size:15px;font-weight:600;color:#2C2420;margin-bottom:6px;">✦ The Soft Summer glow effect
            </div>
            <div class="body-text" style="font-size:14px;">Soft Summers in their colours look effortlessly elegant — as
                though everything they wear was somehow chosen to match their naturally blended, sophisticated colouring.
            </div>
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
            <span class="lbl" style="color:#7880A0;">✦ Makeup Guide (Women)</span>
            <div class="h2" style="margin-bottom:12px;">Your perfect makeup shades</div>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">Soft Summer wears the most restrained makeup
                of all seasons. Everything should be barely visible, blended, and neutrally toned.</p>
            <div class="makeup-row">
                {{-- makeup items with tooltips --}}
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#E8E0DC;"></div>
                    <div class="makeup-label">Neutral Beige</div>
                    <div class="makeup-type">Foundation</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Neutral, muted
                        base — neither warm nor cool.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#C0A8A8;"></div>
                    <div class="makeup-label">Muted Rose</div>
                    <div class="makeup-type">Blush</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Soft, greyed rose
                        for a natural hint of colour.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#A89898;"></div>
                    <div class="makeup-label">Blended Mauve</div>
                    <div class="makeup-type">Lips</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Your perfect
                        everyday lip — muted and blended.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#A0A0B0;"></div>
                    <div class="makeup-label">Soft Grey</div>
                    <div class="makeup-type">Eyes</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Subtle grey shadow
                        that defines without contrast.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#989898;"></div>
                    <div class="makeup-label">Neutral Taupe</div>
                    <div class="makeup-type">Eyes</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm-grey taupe
                        for a natural eye look.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#B8B0A8;"></div>
                    <div class="makeup-label">Warm Grey</div>
                    <div class="makeup-type">Eyes</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">A warm grey that
                        blends perfectly with your skin.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#C8C0B8;"></div>
                    <div class="makeup-label">Dusty Pink-Grey</div>
                    <div class="makeup-type">Blush</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">A barely-there
                        pink-grey for a soft flush.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#D8D4D0;"></div>
                    <div class="makeup-label">Silver Greige</div>
                    <div class="makeup-type">Highlighter</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Cool, muted
                        highlight — never sparkly.</div>
                </div>
            </div>
            <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Foundation Undertone</div>
                    <div class="body-text" style="font-size:14px;">Neutral-cool foundations — not strongly pink, not
                        strongly yellow. Look for "neutral beige" or "soft beige" shades. Your undertone is the hardest to
                        match of all seasons.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Neutral-cool is
                        the key — avoid strong pink or yellow.</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Key Makeup Rule</div>
                    <div class="body-text" style="font-size:14px;">Grey is your neutral — not black, not brown. Use soft
                        grey in eye looks, blended mauve on lips, and a barely-there blush. The less visible, the better.
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Less is more —
                        everything should be barely visible.</div>
                </div>
            </div>
        </section>

        <!-- Wardrobe Tips (Women) -->
        <section class="season-section-alt">
            <div class="two-col">
                <div>
                    <span class="lbl" style="color:#7880A0;">✦ Wardrobe Tips (Women)</span>
                    <div class="h2" style="margin-bottom:20px;">How to dress as a Soft Summer woman</div>
                    <div class="feature-row">
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">01</div>
                            <div>
                                <div class="fi-title">Embrace grey as your neutral</div>
                                <div class="fi-desc">Grey in every shade — warm grey, cool grey, blue-grey — is your most
                                    powerful neutral and anchor for all outfits.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Grey is
                                your best neutral — it harmonises with your muted colouring.</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">02</div>
                            <div>
                                <div class="fi-title">Choose muted, blended colours</div>
                                <div class="fi-desc">Every colour in your wardrobe should look slightly softened. If it
                                    looks "bright," it's probably too saturated for Soft Summer.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Soft,
                                greyed versions of colours are your sweet spot.</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">03</div>
                            <div>
                                <div class="fi-title">Avoid high contrast</div>
                                <div class="fi-desc">High contrast outfits — like black and white — are wrong for you. Stay
                                    within a narrow value range for the most flattering look.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Low
                                contrast is key — keep your outfit values close.</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">04</div>
                            <div>
                                <div class="fi-title">Tonal dressing is your signature</div>
                                <div class="fi-desc">Wearing multiple shades of the same muted tone creates a
                                    sophisticated, harmonious look that is entirely your own.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Tonal looks
                                in greyed colours are your signature style.</div>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">✦ Colours to Avoid</span>
                    <div class="avoid-grid">
                        {{-- avoid cards with tooltips --}}
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FF6600;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Bright Orange</div>
                                <div class="avoid-why">Too vivid and warm</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Orange is
                                too warm and vivid — it overwhelms you.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FFD700;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Bright Yellow</div>
                                <div class="avoid-why">Too saturated, too warm</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Yellow is
                                too bright — choose muted mustard or greige.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#000000;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Black</div>
                                <div class="avoid-why">Too harsh for your soft tones</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Black is too
                                harsh — choose charcoal or deep grey.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FFFFFF;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Pure White</div>
                                <div class="avoid-why">Too high contrast</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">White is too
                                stark — choose off-white or warm cream.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FF0000;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Bright Red</div>
                                <div class="avoid-why">Too vivid and warm</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Red is too
                                vivid — choose muted brick or dusty rose.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#006400;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Strong Green</div>
                                <div class="avoid-why">Too saturated for your palette</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Strong green
                                is too vivid — choose sage or muted olive.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Outfit Inspiration (Women) -->
        <section class="season-section">
            <span class="lbl" style="color:#7880A0;">✦ Outfit Inspiration (Women)</span>
            <div class="h2" style="margin-bottom:36px;">Looks built for Soft Summer women</div>
            <div class="outfit-grid">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#C0C8D4,#A8B0BC);">🌫️</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Day</div>
                        <div class="outfit-name">Morning Mist</div>
                        <div class="outfit-items">Soft grey linen blazer · Blued grey trousers · Light taupe loafers ·
                            Silver minimalist watch</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Cool,
                        sophisticated, and perfectly Soft Summer.</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#B0A8A0,#A09898);">🕊️</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Casual</div>
                        <div class="outfit-name">Blended Neutral</div>
                        <div class="outfit-items">Muted sage knit top · Warm grey jeans · Grey canvas sneakers · Dainty
                            silver jewellery</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Soft, relaxed, and
                        effortlessly blended.</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#989090,#808888);">🌙</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Evening</div>
                        <div class="outfit-name">Soft Dusk</div>
                        <div class="outfit-items">Dusty mauve midi dress · Nude-grey strappy heels · Grey evening bag ·
                            Pearl jewellery</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Elegant, muted,
                        and beautifully understated.</div>
                </div>
            </div>
        </section>
    </div>

    <!-- MEN CONTENT -->
    <div id="men-content" class="gender-content">
        <!-- Grooming & Skincare (Men) -->
        <section class="season-section">
            <span class="lbl" style="color:#7880A0;">✦ Grooming & Skincare (Men)</span>
            <div class="h2" style="margin-bottom:12px;">Grooming for the Soft Summer man</div>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">Understated, neutral, and natural. Your
                grooming should enhance your soft, blended colouring without adding contrast.</p>
            <div class="makeup-row">
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#D8D4D0;"></div>
                    <div class="makeup-label">Neutral Tinted Moisturizer</div>
                    <div class="makeup-type">Skincare</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Light, neutral
                        hydration for a natural finish.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#C0B8B0;"></div>
                    <div class="makeup-label">Neutral Beige Concealer</div>
                    <div class="makeup-type">Concealer</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Neutral concealer
                        that blends seamlessly.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#D0CCC8;"></div>
                    <div class="makeup-label">Neutral SPF</div>
                    <div class="makeup-type">Sunscreen</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Tinted SPF with a
                        neutral, non-ashy finish.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#A09898;"></div>
                    <div class="makeup-label">Neutral Taupe Beard Oil</div>
                    <div class="makeup-type">Facial hair care</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Soft taupe oil for
                        a natural beard.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#B0A8A0;"></div>
                    <div class="makeup-label">Muted Grey Pomade</div>
                    <div class="makeup-type">Hair Styling</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Grey-toned pomade
                        for a subtle hold.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#989890;"></div>
                    <div class="makeup-label">Ash Taupe Brow Gel</div>
                    <div class="makeup-type">Brows</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Soft, ash-toned
                        gel for natural brows.</div>
                </div>
            </div>
            <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skincare Focus</div>
                    <div class="body-text" style="font-size:14px;">Balance and evenness. Use gentle, neutral-toned
                        products that don't add warmth or coolness. Avoid self-tanners or anything that creates high
                        contrast.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Neutral, balanced
                        skincare enhances your natural softness.</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Facial Hair</div>
                    <div class="body-text" style="font-size:14px;">Keep facial hair soft and low-contrast. Use neutral
                        taupe or ash-toned beard oils. Avoid strong colours (warm reds or cool blacks) that would clash with
                        your muted palette.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Soft, neutral
                        facial hair keeps your look harmonious.</div>
                </div>
            </div>
        </section>

        <!-- Wardrobe Tips (Men) -->
        <section class="season-section-alt">
            <div class="two-col">
                <div>
                    <span class="lbl" style="color:#7880A0;">✦ Wardrobe Tips (Men)</span>
                    <div class="h2" style="margin-bottom:20px;">How to dress as a Soft Summer man</div>
                    <div class="feature-row">
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">01</div>
                            <div>
                                <div class="fi-title">Grey is your best suit colour</div>
                                <div class="fi-desc">All shades of grey — from light grey to charcoal (not black) — are
                                    your most flattering suiting choices. Avoid navy and black.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Grey suits
                                you best — from light to charcoal.</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">02</div>
                            <div>
                                <div class="fi-title">Muted blues and greens</div>
                                <div class="fi-desc">Dusty blue, muted teal, and sage green in shirts, polos, or sweaters
                                    add subtle colour without overwhelming.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Soft,
                                greyed blues and greens add perfect subtle colour.</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">03</div>
                            <div>
                                <div class="fi-title">Silver and grey leather</div>
                                <div class="fi-desc">Silver watches, grey leather shoes and belts, and brushed metal
                                    accessories. Avoid yellow gold and dark brown.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Silver and
                                grey leather harmonise with your muted palette.</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">04</div>
                            <div>
                                <div class="fi-title">Avoid high-contrast pairings</div>
                                <div class="fi-desc">Don't wear black with white, or very dark with very light. Stay within
                                    a narrow value range for the most harmonious look.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Low
                                contrast is key — keep your outfit values close.</div>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">✦ Colours to Avoid</span>
                    <div class="avoid-grid">
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FF6600;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Bright Orange</div>
                                <div class="avoid-why">Too vivid and warm</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Orange is
                                too vivid — choose muted terracotta.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FFD700;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Bright Yellow</div>
                                <div class="avoid-why">Too saturated, too warm</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Yellow is
                                too bright — choose muted mustard.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#000000;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Black</div>
                                <div class="avoid-why">Too harsh for your soft tones</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Black is too
                                harsh — choose charcoal or deep grey.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FFFFFF;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Pure White</div>
                                <div class="avoid-why">Too high contrast</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">White is too
                                stark — choose off-white or warm cream.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#00008B;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Navy</div>
                                <div class="avoid-why">Too cool and dark</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Navy is too
                                dark and cool — choose muted blue.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#006400;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Strong Green</div>
                                <div class="avoid-why">Too saturated for your palette</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Strong green
                                is too vivid — choose sage or muted olive.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Outfit Inspiration (Men) -->
        <section class="season-section">
            <span class="lbl" style="color:#7880A0;">✦ Outfit Inspiration (Men)</span>
            <div class="h2" style="margin-bottom:36px;">Looks built for Soft Summer men</div>
            <div class="outfit-grid">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#C0C8D4,#A8B0BC);">🌫️</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Business</div>
                        <div class="outfit-name">Grey Flannel</div>
                        <div class="outfit-items">Mid-grey suit · Dusty blue shirt · Muted sage tie · Silver tie bar · Grey
                            leather oxfords</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Sophisticated,
                        muted, and perfectly Soft Summer.</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#B0A8A0,#A09898);">🕊️</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Smart Casual</div>
                        <div class="outfit-name">Muted Teal</div>
                        <div class="outfit-items">Muted teal sweater · Warm grey chinos · Grey suede sneakers · Silver
                            watch</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Modern,
                        understated, and effortlessly stylish.</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#989090,#808888);">🌙</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Weekend</div>
                        <div class="outfit-name">Soft Dusk</div>
                        <div class="outfit-items">Dusty lavender polo · Light grey jeans · Grey canvas trainers · Brushed
                            metal bracelet</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Relaxed, cool, and
                        perfectly Soft Summer.</div>
                </div>
            </div>
        </section>
    </div>

    <!-- GENDER-NEUTRAL CONTENT -->
    <div id="neutral-content" class="gender-content">
        <section class="season-section">
            <span class="lbl" style="color:#7880A0;">✦ Style for Everyone</span>
            <div class="h2" style="margin-bottom:12px;">Gender-neutral Soft Summer tips</div>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">Soft Summer is about muted harmony, gentle
                blending, and sophisticated understatement. These principles work for any gender expression.</p>
            <div
                style="display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:20px;margin-bottom:32px;">
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">🌫️</div>
                    <div class="fi-title">Grey is your anchor</div>
                    <div class="fi-desc" style="font-size:14px;">All shades of grey — warm, cool, blue-grey, taupe-grey —
                        are your most flattering neutrals. Build every outfit around them.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Grey is your most
                        powerful neutral — use it as your base.</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">🎨</div>
                    <div class="fi-title">Muted, blended colours</div>
                    <div class="fi-desc" style="font-size:14px;">Dusty rose, sage green, muted blue, and soft lavender —
                        always with a greyed quality. Nothing bright or clear.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Soft, greyed
                        colours are your signature — never bright.</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">⚜️</div>
                    <div class="fi-title">Metallic finishes</div>
                    <div class="fi-desc" style="font-size:14px;">Silver, platinum, white gold, and brushed steel. Avoid
                        yellow gold, copper, or bronze.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Cool metals only —
                        they complement your muted palette.</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">🕊️</div>
                    <div class="fi-title">Low contrast is key</div>
                    <div class="fi-desc" style="font-size:14px;">Keep your outfit within a narrow value range. Avoid
                        pairing very light with very dark — aim for soft, tonal looks.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Low contrast
                        outfits look most harmonious on you.</div>
                </div>
            </div>
            <div class="outfit-grid" style="margin-bottom:20px;">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#C0C8D4,#A8B0BC);">🌫️</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Unisex Look</div>
                        <div class="outfit-name">Soft Grey Layer</div>
                        <div class="outfit-items">Warm grey sweater or hoodie · Blued grey trousers · White-grey trainers ·
                            Silver chain</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">A versatile, muted
                        unisex look that feels effortlessly elegant.</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#B0A8A0,#A09898);">🕊️</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Tonal Accent</div>
                        <div class="outfit-name">Dusty Blue</div>
                        <div class="outfit-items">Muted blue shirt or top · Taupe-grey trousers · Grey canvas shoes ·
                            Minimal silver jewellery</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">A soft, tonal look
                        that's subtle and sophisticated.</div>
                </div>
            </div>
        </section>
    </div>

    <!-- CELEBRITIES (expanded with male examples) -->
    <section class="season-section-alt">
        <span class="lbl" style="color:#7880A0;">✦ Famous Soft Summers</span>
        <div class="h2" style="margin-bottom:36px;">You're in great company</div>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(180px,1fr));gap:24px;">
            {{-- celebrity cards with tooltips --}}
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#C0C8D4;">🏆</div>
                <div class="celeb-name">Meryl Streep</div>
                <div class="celeb-note">Neutrally blended colouring (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her versatile, muted
                    beauty is classic Soft Summer.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#B8C0CC;">👑</div>
                <div class="celeb-name">Helen Mirren</div>
                <div class="celeb-note">Soft summer elegance (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her elegant,
                    understated colouring is Soft Summer.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#A8B0BC;">🎬</div>
                <div class="celeb-name">Keira Knightley</div>
                <div class="celeb-note">Muted neutral features (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her soft, neutral
                    features are quintessential Soft Summer.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#B0B8C8;">💫</div>
                <div class="celeb-name">Rachel Weisz</div>
                <div class="celeb-note">Cool-neutral summer (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her neutral-cool
                    colouring is a perfect Soft Summer match.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#C0C8D4;">🎸</div>
                <div class="celeb-name">Steve Carell</div>
                <div class="celeb-note">Soft muted colouring (he/him)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">His soft, approachable
                    features are Soft Summer.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#B8C0CC;">🎭</div>
                <div class="celeb-name">Colin Firth</div>
                <div class="celeb-note">Neutral summer elegance (he/him)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">His classic,
                    understated elegance defines Soft Summer.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#A8B0BC;">🎨</div>
                <div class="celeb-name">Kate Middleton</div>
                <div class="celeb-note">Soft summer style icon (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her sophisticated,
                    muted style is a modern Soft Summer icon.</div>
            </div>
        </div>
    </section>

    <!-- NAV BETWEEN SEASONS -->
    <div
        style="padding:40px 6%;display:flex;justify-content:space-between;align-items:center;border-top:1px solid #E8DDD6;gap:20px;flex-wrap:wrap;">
        <a class="btn btn-outline" style="color:#2C2420;border-color:#E8DDD6;"
            href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
        <div style="display:flex;gap:8px;flex-wrap:wrap;">
            <a class="btn btn-outline" style="color:#7880A0;border-color:#7880A044;font-size:13px;"
                href="{{ route('show.seasons.custom_pages', ['slug' => 'true-summer']) }}">True Summer →</a>
            <a class="btn btn-outline" style="color:#7880A0;border-color:#7880A044;font-size:13px;"
                href="{{ route('show.seasons.custom_pages', ['slug' => 'soft-autumn']) }}">Soft Autumn →</a>
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
