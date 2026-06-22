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
    <section class="season-page-hero" style="background:linear-gradient(145deg,#D8E4F0,#C0CEDC,#A8B8CC);color:#1A2A4A;">
        <div>
            <div class="sp-eyebrow">
                <div class="sp-line" style="background:#6878B4;"></div>
                <span class="sp-season-type" style="color:#6878B4;">☁️ Summer · Cool · Light</span>
            </div>
            <h1 class="sp-title" style="font-size:clamp(52px,7vw,88px);">Light Summer</h1>
            <div class="sp-tagline" style="color:#1A2A4A66;">"Delicate as morning mist, cool as dawn"</div>
            <p class="sp-desc" style="color:#1A2A4A88;">Light Summer is the most ethereally delicate of all seasons. Sharing
                lightness with Light Spring but cool where spring is warm, your colouring has a powder-soft, dreamy quality.
            </p>
            <div class="sp-palette-preview">
                {{-- tooltips on preview swatches --}}
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#C8D8F0;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#C8D8F0 · Powder Blue</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#D8C0D8;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#D8C0D8 · Soft Lavender</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#B8D0C0;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#B8D0C0 · Misty Mint</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#E0D0E0;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#E0D0E0 · Pale Lilac</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#A8C0D8;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#A8C0D8 · Grey-Blue</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#C0B0CC;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#C0B0CC · Cool Mauve</div>
                </div>
            </div>
            <div style="display:flex;gap:12px;flex-wrap:wrap;">
                <a class="btn btn-white" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
                <a class="btn btn-outline" style="color:#1A2A4A;border-color:#1A2A4A44;"
                    href="{{ route('show.custom_pages', ['slug' => 'test']) }}">Find My Season</a>
            </div>
        </div>
        <div class="sp-hero-visual">
            <div class="sp-visual-main" style="background:linear-gradient(145deg,#D0DCF0,#B8C8E0);">🌙</div>
            <div class="sp-visual-badges">
                {{-- tooltips on badges --}}
                <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
                    <div class="sp-badge-icon">❄️</div>
                    <div>
                        <div class="sp-badge-title" style="color:#1A2A4A;">Cool Undertone</div>
                        <div class="sp-badge-sub" style="color:#1A2A4A;">Soft, blued cool</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Your skin has a
                        cool, slightly blue-pink undertone — never warm.</div>
                </div>
                <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
                    <div class="sp-badge-icon">🌫️</div>
                    <div>
                        <div class="sp-badge-title" style="color:#1A2A4A;">Light Value</div>
                        <div class="sp-badge-sub" style="color:#1A2A4A;">Pale, airy depth</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Your colouring is
                        the lightest of all summers — soft and ethereal.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- PALETTE (unisex) -->
    <section class="season-section">
        <span class="lbl" style="color:#6878B4;">✦ Your Colour Palette</span>
        <div class="h2" style="margin-bottom:12px;">Best colours for Light Summer</div>
        <p class="body-text" style="max-width:560px;margin-bottom:36px;">Your palette is a whisper — barely-there cool
            colours with a soft, powdery quality. Think powder blue, soft lilac, misty rose, and pale aqua.</p>
        <div class="two-col">
            <div>
                <div
                    style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">
                    Power Shades</div>
                <div class="color-grid" style="margin-bottom:28px;">
                    {{-- tooltips on each swatch --}}
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#C8D8F0;" title="#C8D8F0">
                        <div class="tooltip-box">#C8D8F0 · Powder Blue</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#D8C0D8;" title="#D8C0D8">
                        <div class="tooltip-box">#D8C0D8 · Soft Lavender</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#B8D0C0;" title="#B8D0C0">
                        <div class="tooltip-box">#B8D0C0 · Misty Mint</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#E0D0E0;" title="#E0D0E0">
                        <div class="tooltip-box">#E0D0E0 · Pale Lilac</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#A8C0D8;" title="#A8C0D8">
                        <div class="tooltip-box">#A8C0D8 · Grey-Blue</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#C0B0CC;" title="#C0B0CC">
                        <div class="tooltip-box">#C0B0CC · Cool Mauve</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#B8C8B8;" title="#B8C8B8">
                        <div class="tooltip-box">#B8C8B8 · Sea Glass</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#D0C8E0;" title="#D0C8E0">
                        <div class="tooltip-box">#D0C8E0 · Pale Wisteria</div>
                    </div>
                </div>
                <div class="swatch-strip" style="height:14px;border-radius:7px;margin-bottom:8px;">
                    <span style="background:#C8D8F0;"></span>
                    <span style="background:#D8C0D8;"></span>
                    <span style="background:#B8D0C0;"></span>
                    <span style="background:#E0D0E0;"></span>
                    <span style="background:#A8C0D8;"></span>
                    <span style="background:#C0B0CC;"></span>
                    <span style="background:#B8C8B8;"></span>
                    <span style="background:#D0C8E0;"></span>
                </div>
                <div style="font-size:12px;color:#B0A49E;">Your complete spectrum — from light to dark</div>
            </div>
            <div>
                <div
                    style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">
                    Neutrals & Staples</div>
                <div class="color-grid" style="margin-bottom:20px;">
                    <div class="tooltip-trigger cswatch" style="background:#E8E8F0;">
                        <div class="tooltip-box">#E8E8F0 · Soft Cool White</div>
                    </div>
                    <div class="tooltip-trigger cswatch" style="background:#D0D0DC;">
                        <div class="tooltip-box">#D0D0DC · Pale Grey</div>
                    </div>
                    <div class="tooltip-trigger cswatch" style="background:#B8B8CC;">
                        <div class="tooltip-box">#B8B8CC · Lavender-Grey</div>
                    </div>
                    <div class="tooltip-trigger cswatch" style="background:#A0A0B8;">
                        <div class="tooltip-box">#A0A0B8 · Cool Slate</div>
                    </div>
                </div>
                <p class="body-text" style="font-size:14px;">Soft cool white, pale grey, and muted lavender-grey are your
                    perfect neutrals — always with a cool, bluish quality.</p>
            </div>
        </div>
    </section>

    <!-- YOUR FEATURES (unisex) -->
    <section class="season-section-alt">
        <span class="lbl" style="color:#6878B4;">✦ Typical Features</span>
        <div class="h2" style="margin-bottom:40px;">Do you look like a Light Summer?</div>
        <div class="three-col">
            <div class="tooltip-trigger card" style="position:relative;">
                <div style="font-size:32px;margin-bottom:14px;">🧴</div>
                <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skin</div>
                <div class="body-text" style="font-size:14px;">Fair, pale skin with a cool, slightly blue-pink undertone.
                    Skin is often translucent-looking with visible veins. Very little natural colour — may appear porcelain.
                    Burns easily.</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">Delicate, porcelain
                    skin that needs gentle, cool-toned care.</div>
            </div>
            <div class="tooltip-trigger card" style="position:relative;">
                <div style="font-size:32px;margin-bottom:14px;">👁️</div>
                <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Eyes</div>
                <div class="body-text" style="font-size:14px;">Pale blue, pale grey-blue, pale grey, or pale cool green.
                    Eyes often appear very light and almost transparent. A soft, watery quality is common.</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">Very light,
                    translucent eyes with a soft, watery quality.</div>
            </div>
            <div class="tooltip-trigger card" style="position:relative;">
                <div style="font-size:32px;margin-bottom:14px;">💇</div>
                <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Hair</div>
                <div class="body-text" style="font-size:14px;">Ash blonde, light ash brown, cool blonde, or platinum
                    blonde. Very little warmth in the hair — distinctly cool and ashy. May have natural cool highlights.
                </div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">Cool, ashy hair —
                    never golden or warm.</div>
            </div>
        </div>
        <div style="margin-top:32px;padding:24px;background:#6878B414;border:1px solid #6878B433;border-radius:16px;">
            <div style="font-size:15px;font-weight:600;color:#2C2420;margin-bottom:6px;">✦ The Light Summer glow effect
            </div>
            <div class="body-text" style="font-size:14px;">Light Summers in their colours appear ethereally beautiful — as
                though they've stepped out of a watercolour painting. The soft, cool colours create an effect of delicate,
                luminous beauty.</div>
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
            <span class="lbl" style="color:#6878B4;">✦ Makeup Guide (Women)</span>
            <div class="h2" style="margin-bottom:12px;">Your perfect makeup shades</div>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">Keep everything cool, soft, and barely-there.
                This is the season for the most delicate, barely-visible makeup — "no makeup" makeup done beautifully cool.
            </p>
            <div class="makeup-row">
                {{-- makeup items with tooltips --}}
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#F5E8F0;"></div>
                    <div class="makeup-label">Cool Porcelain</div>
                    <div class="makeup-type">Foundation</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Cool, pale
                        foundation that matches your porcelain skin.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#D8B0C8;"></div>
                    <div class="makeup-label">Soft Rose</div>
                    <div class="makeup-type">Blush</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Cool, soft rose
                        blush for a barely-there flush.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#C8A0B8;"></div>
                    <div class="makeup-label">Muted Pink</div>
                    <div class="makeup-type">Lips</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Cool, muted pink —
                        never bright or warm.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#A8B8D8;"></div>
                    <div class="makeup-label">Soft Blue-Grey</div>
                    <div class="makeup-type">Eyes</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Delicate blue-grey
                        shadow that enhances your cool eyes.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#B8A8CC;"></div>
                    <div class="makeup-label">Pale Lavender</div>
                    <div class="makeup-type">Eyes</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Soft lavender for
                        a dreamy, ethereal effect.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#D0C0D8;"></div>
                    <div class="makeup-label">Cool Lilac</div>
                    <div class="makeup-type">Eyes</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Cool lilac shadow
                        that's subtle and flattering.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#E0C8D8;"></div>
                    <div class="makeup-label">Barely-there Pink</div>
                    <div class="makeup-type">Blush</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Almost invisible
                        pink blush for a natural look.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#E8E0F0;"></div>
                    <div class="makeup-label">Pearl Shimmer</div>
                    <div class="makeup-type">Highlighter</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Cool, pearly
                        highlighter for a subtle glow.</div>
                </div>
            </div>
            <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Foundation Undertone</div>
                    <div class="body-text" style="font-size:14px;">Choose foundations with cool, pink undertones. Your
                        skin may be one of the most delicate of all seasons. Opt for buildable coverage that lets your skin
                        breathe.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Look for "cool",
                        "pink", or "rosy" undertones — never warm.</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Key Makeup Rule</div>
                    <div class="body-text" style="font-size:14px;">Less is always more. Your colouring is so delicate that
                        heavy makeup looks costumey. The goal is to enhance, not create — everything should be barely
                        visible.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Subtle,
                        barely-there makeup is your signature.</div>
                </div>
            </div>
        </section>

        <!-- Wardrobe Tips (Women) -->
        <section class="season-section-alt">
            <div class="two-col">
                <div>
                    <span class="lbl" style="color:#6878B4;">✦ Wardrobe Tips (Women)</span>
                    <div class="h2" style="margin-bottom:20px;">How to dress as a Light Summer woman</div>
                    <div class="feature-row">
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">01</div>
                            <div>
                                <div class="fi-title">Wear soft, cool pastels</div>
                                <div class="fi-desc">Powder blue, pale lavender, soft mint, and misty rose are your
                                    signature. These barely-there cool colours make your skin glow.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Soft
                                pastels are your best — they blend with your delicate colouring.</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">02</div>
                            <div>
                                <div class="fi-title">Avoid bright or warm colours</div>
                                <div class="fi-desc">High-saturation colours overwhelm you. Your palette is about subtlety
                                    and the most delicate expressions of cool colour.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Bright and
                                warm colours are too harsh — stick to cool softness.</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">03</div>
                            <div>
                                <div class="fi-title">Choose pale neutrals</div>
                                <div class="fi-desc">Soft cool white, pale grey, and lavender-grey are your neutral anchors
                                    — never bright white or warm beige.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Pale, cool
                                neutrals keep your look light and harmonious.</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">04</div>
                            <div>
                                <div class="fi-title">Layer tones of the same colour</div>
                                <div class="fi-desc">Tonal dressing — different shades of the same cool colour — looks
                                    particularly stunning on Light Summers.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">
                                Monochromatic cool layers create a sophisticated, ethereal look.</div>
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
                                <div class="avoid-name">Orange</div>
                                <div class="avoid-why">Warm and jarring</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Orange is
                                too warm and bright — it overwhelms you.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FFD700;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Yellow</div>
                                <div class="avoid-why">Too warm, clashes with cool</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Yellow is
                                too warm — opt for cool yellow or butter yellow.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#000000;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Black</div>
                                <div class="avoid-why">Too harsh, creates shock</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Black is too
                                harsh — choose charcoal or deep grey.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#8B4513;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Brown</div>
                                <div class="avoid-why">Warm tones clash with cool</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Brown is too
                                warm — choose cool taupe or grey.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FF1493;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Hot Pink</div>
                                <div class="avoid-why">Too saturated, too warm</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Hot pink is
                                too bright — choose pale rose or cool pink.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#006400;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Dark Green</div>
                                <div class="avoid-why">Too deep and warm</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Dark green
                                is too deep — choose soft mint or sea glass.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Outfit Inspiration (Women) -->
        <section class="season-section">
            <span class="lbl" style="color:#6878B4;">✦ Outfit Inspiration (Women)</span>
            <div class="h2" style="margin-bottom:36px;">Looks built for Light Summer women</div>
            <div class="outfit-grid">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#D0DCF0,#B8C8E0);">🕊️</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Day</div>
                        <div class="outfit-name">Cloud Soft</div>
                        <div class="outfit-items">Powder blue silk blouse · Pale grey trousers · Silver ballet flats ·
                            Pearl earrings</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Ethereal, soft,
                        and perfectly Light Summer.</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#D8C0D8,#C8B0CC);">🌸</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Casual</div>
                        <div class="outfit-name">Misty Lavender</div>
                        <div class="outfit-items">Soft lilac knit · Light grey jeans · White sneakers · Delicate silver
                            necklace</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Soft, casual, and
                        effortlessly cool.</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#C8D8F0,#A8C0D8);">✨</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Evening</div>
                        <div class="outfit-name">Moonlit Mist</div>
                        <div class="outfit-items">Pale blue-grey dress · Silver strappy heels · Silver evening bag ·
                            Diamond studs</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Dreamy, cool, and
                        elegant — your evening signature.</div>
                </div>
            </div>
        </section>
    </div>

    <!-- MEN CONTENT -->
    <div id="men-content" class="gender-content">
        <!-- Grooming & Skincare (Men) -->
        <section class="season-section">
            <span class="lbl" style="color:#6878B4;">✦ Grooming & Skincare (Men)</span>
            <div class="h2" style="margin-bottom:12px;">Grooming for the Light Summer man</div>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">Keep grooming cool, fresh, and subtle. Avoid
                heavy products or anything that adds warmth to your features.</p>
            <div class="makeup-row">
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#F0E8F0;"></div>
                    <div class="makeup-label">Cool Tinted Moisturizer</div>
                    <div class="makeup-type">Skincare</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Light, cool-tinted
                        hydration for a fresh finish.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#D8C8D8;"></div>
                    <div class="makeup-label">Pale Rose Concealer</div>
                    <div class="makeup-type">Concealer</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Cool, pale
                        concealer that blends with your fair skin.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#E0E0F0;"></div>
                    <div class="makeup-label">Cool SPF</div>
                    <div class="makeup-type">Sunscreen</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Cool-toned SPF
                        that doesn't add warmth.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#A8B8C8;"></div>
                    <div class="makeup-label">Ash Grey Beard Oil</div>
                    <div class="makeup-type">Facial hair care</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Cool, ash-toned
                        oil for a soft beard.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#C0C8E0;"></div>
                    <div class="makeup-label">Cool Silver Pomade</div>
                    <div class="makeup-type">Hair Styling</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Silver-tinted
                        pomade for a cool, clean look.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#B8A8C0;"></div>
                    <div class="makeup-label">Muted Taupe Brow Gel</div>
                    <div class="makeup-type">Brows</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Soft taupe for
                        natural, cool-toned brows.</div>
                </div>
            </div>
            <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skincare Focus</div>
                    <div class="body-text" style="font-size:14px;">Hydration and soothing. Use gentle, calming products.
                        Avoid self-tanners or anything that adds warmth. A porcelain, translucent finish suits you best.
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Gentle, calming
                        skincare maintains your delicate complexion.</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Facial Hair</div>
                    <div class="body-text" style="font-size:14px;">Keep facial hair very light or clean-shaven. If you
                        have facial hair, use cool grey or ash-toned beard oils. Avoid any warm or reddish tones.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Light or no facial
                        hair suits your delicate features best.</div>
                </div>
            </div>
        </section>

        <!-- Wardrobe Tips (Men) -->
        <section class="season-section-alt">
            <div class="two-col">
                <div>
                    <span class="lbl" style="color:#6878B4;">✦ Wardrobe Tips (Men)</span>
                    <div class="h2" style="margin-bottom:20px;">How to dress as a Light Summer man</div>
                    <div class="feature-row">
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">01</div>
                            <div>
                                <div class="fi-title">Light, cool neutrals</div>
                                <div class="fi-desc">Pale grey, soft cool white, and light taupe are your best suit and
                                    trouser colours. Avoid dark or warm neutrals.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Light, cool
                                neutrals are your foundation — they enhance your natural coolness.</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">02</div>
                            <div>
                                <div class="fi-title">Powder-soft pastel accents</div>
                                <div class="fi-desc">Pale blue, soft lavender, and cool mint in shirts, polos, or ties add
                                    the right amount of colour without overwhelming.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Soft
                                pastels bring life without overpowering your delicate features.</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">03</div>
                            <div>
                                <div class="fi-title">Silver and light leather</div>
                                <div class="fi-desc">Silver watches, white-gold jewellery, and pale grey or tan leather
                                    shoes. Avoid yellow gold and dark brown leather.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Silver and
                                light leathers complement your cool, light colouring.</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">04</div>
                            <div>
                                <div class="fi-title">Avoid bright, dark, or warm colours</div>
                                <div class="fi-desc">No black, navy, brown, orange, or bright saturated colours. They will
                                    make you look sallow and tired.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Dark and
                                warm colours drain your natural lightness — avoid them.</div>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">✦ Colours to Avoid</span>
                    <div class="avoid-grid">
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FF6600;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Orange</div>
                                <div class="avoid-why">Warm and jarring</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Orange is
                                too warm — choose a soft peach if needed.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#000000;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Black</div>
                                <div class="avoid-why">Too harsh, creates shock</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Black is too
                                harsh — choose charcoal or dark grey.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#8B4513;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Brown</div>
                                <div class="avoid-why">Warm tones clash with cool</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Brown is too
                                warm — choose cool taupe or grey.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#000080;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Navy</div>
                                <div class="avoid-why">Too dark and cool-harsh</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Navy is too
                                dark — choose pale blue or light navy.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FF1493;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Hot Pink</div>
                                <div class="avoid-why">Too saturated</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Hot pink is
                                too bright — choose soft rose or cool pink.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#006400;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Dark Green</div>
                                <div class="avoid-why">Too deep and warm</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Dark green
                                is too deep — choose soft mint or sea glass.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Outfit Inspiration (Men) -->
        <section class="season-section">
            <span class="lbl" style="color:#6878B4;">✦ Outfit Inspiration (Men)</span>
            <div class="h2" style="margin-bottom:36px;">Looks built for Light Summer men</div>
            <div class="outfit-grid">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#D0DCF0,#B8C8E0);">🕊️</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Business</div>
                        <div class="outfit-name">Soft Grey Suit</div>
                        <div class="outfit-items">Pale grey suit · Powder blue shirt · Silver tie bar · Light taupe oxfords
                        </div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Professional,
                        cool, and effortlessly Light Summer.</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#D8C0D8,#C8B0CC);">🌸</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Smart Casual</div>
                        <div class="outfit-name">Lavender & Grey</div>
                        <div class="outfit-items">Soft lavender polo · Light grey chinos · White canvas sneakers · Silver
                            watch</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Modern, soft, and
                        cool — a smart casual dream.</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#C8D8F0,#A8C0D8);">✨</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Weekend</div>
                        <div class="outfit-name">Cool Water</div>
                        <div class="outfit-items">Pale blue linen shirt · Cream trousers · Grey suede loafers · Silver
                            bracelet</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Relaxed, cool, and
                        perfectly light for the weekend.</div>
                </div>
            </div>
        </section>
    </div>

    <!-- GENDER-NEUTRAL CONTENT -->
    <div id="neutral-content" class="gender-content">
        <section class="season-section">
            <span class="lbl" style="color:#6878B4;">✦ Style for Everyone</span>
            <div class="h2" style="margin-bottom:12px;">Gender-neutral Light Summer tips</div>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">Light Summer is about ethereal coolness,
                softness, and delicate harmony. These principles work for any gender expression.</p>
            <div
                style="display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:20px;margin-bottom:32px;">
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">☁️</div>
                    <div class="fi-title">Light cool neutrals</div>
                    <div class="fi-desc" style="font-size:14px;">Soft cool white, pale grey, and lavender-grey are your
                        foundation. Avoid any warmth or darkness.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Your neutrals are
                        cool and light — never warm or dark.</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">🕊️</div>
                    <div class="fi-title">Powder-soft accents</div>
                    <div class="fi-desc" style="font-size:14px;">Pale blue, misty rose, soft lilac, and cool mint bring
                        life without overpowering your delicate features.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Soft pastels add
                        the perfect touch of colour.</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">⚜️</div>
                    <div class="fi-title">Metallic finishes</div>
                    <div class="fi-desc" style="font-size:14px;">Silver, platinum, white gold, and pearl. Avoid yellow
                        gold, copper, or bronze.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Cool metals only —
                        they enhance your cool undertone.</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">🧼</div>
                    <div class="fi-title">Keep it clean and simple</div>
                    <div class="fi-desc" style="font-size:14px;">Your look should feel fresh, clean, and uncluttered.
                        Avoid heavy layers or harsh lines.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Clean, simple
                        lines keep your look ethereal and light.</div>
                </div>
            </div>
            <div class="outfit-grid" style="margin-bottom:20px;">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#D0DCF0,#B8C8E0);">🕊️</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Unisex Look</div>
                        <div class="outfit-name">Cloud Soft</div>
                        <div class="outfit-items">Pale grey linen shirt/jacket · Light cream trousers · White sneakers ·
                            Silver accessories</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">A soft, neutral
                        unisex look that's perfect for any day.</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#C8D8F0,#A8C0D8);">✨</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Soft Accent</div>
                        <div class="outfit-name">Powder Blue</div>
                        <div class="outfit-items">Powder blue hoodie or cardigan · Light grey base · White trainers ·
                            Delicate silver chain</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">A gentle pop of
                        cool colour for a relaxed, stylish look.</div>
                </div>
            </div>
        </section>
    </div>

    <!-- CELEBRITIES (expanded with male examples) -->
    <section class="season-section-alt">
        <span class="lbl" style="color:#6878B4;">✦ Famous Light Summers</span>
        <div class="h2" style="margin-bottom:36px;">You're in great company</div>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(180px,1fr));gap:24px;">
            {{-- celebrity cards with tooltips --}}
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#D8E4F0;">🌟</div>
                <div class="celeb-name">Gwyneth Paltrow</div>
                <div class="celeb-note">Cool, light colouring (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her pale, cool
                    features define Light Summer.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#C0D0E0;">🎬</div>
                <div class="celeb-name">Cate Blanchett</div>
                <div class="celeb-note">Ethereal cool lightness (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her cool, ethereal
                    beauty is a perfect Light Summer match.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#E0E8F0;">💫</div>
                <div class="celeb-name">January Jones</div>
                <div class="celeb-note">Pale cool features (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Pale skin and cool
                    blonde hair — a classic Light Summer.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#D0D8E8;">🎭</div>
                <div class="celeb-name">Nicole Kidman</div>
                <div class="celeb-note">Cool, fair skin tones (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her fair, cool skin
                    and light colouring are quintessentially Light Summer.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#D8E4F0;">🎸</div>
                <div class="celeb-name">Paul McCartney</div>
                <div class="celeb-note">Light cool colouring (he/him)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">His light, cool
                    features make him a great Light Summer example.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#C0D0E0;">🎨</div>
                <div class="celeb-name">Hugh Grant</div>
                <div class="celeb-note">Soft cool features (he/him)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Soft, cool colouring
                    that's distinctly Light Summer.</div>
            </div>
        </div>
    </section>

    <!-- NAV BETWEEN SEASONS -->
    <div
        style="padding:40px 6%;display:flex;justify-content:space-between;align-items:center;border-top:1px solid #E8DDD6;gap:20px;flex-wrap:wrap;">
        <a class="btn btn-outline" style="color:#2C2420;border-color:#E8DDD6;"
            href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
        <div style="display:flex;gap:8px;flex-wrap:wrap;">
            <a class="btn btn-outline" style="color:#6878B4;border-color:#6878B444;font-size:13px;"
                href="{{ route('show.seasons.custom_pages', ['slug' => 'true-summer']) }}">True Summer →</a>
            <a class="btn btn-outline" style="color:#6878B4;border-color:#6878B444;font-size:13px;"
                href="{{ route('show.seasons.custom_pages', ['slug' => 'light-spring']) }}">Light Spring →</a>
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
