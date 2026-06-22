@extends('layouts.app')

@section('page_style')
    <x-season-style />
    {{-- Tailwind CSS via CDN for tooltips --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* keep your existing custom styles, but we'll layer Tailwind tooltips on top */
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

        /* tooltip variants */
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

        /* keep your existing styles from x-season-style */
    </style>
@endsection

@section('content')
    <section class="season-page-hero" style="background:linear-gradient(145deg,#080C18,#141828,#201830);color:#C0C8E0;">
        <div>
            <div class="sp-eyebrow">
                <div class="sp-line" style="background:#4860C0;"></div>
                <span class="sp-season-type" style="color:#4860C0;">❄️ Winter · Cool · Dark</span>
            </div>
            <h1 class="sp-title" style="font-size:clamp(52px,7vw,88px);">Dark Winter</h1>
            <div class="sp-tagline" style="color:#C0C8E066;">"Intensely dark, coolly dramatic, hauntingly beautiful"</div>
            <p class="sp-desc" style="color:#C0C8E088;">Dark Winter is the most dramatic and intense of all seasons — deep,
                cool, and powerfully striking. Your natural colouring creates extraordinary contrast that only the richest,
                darkest colours can match.</p>
            <div class="sp-palette-preview">
                {{-- tooltips on preview swatches --}}
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#1C2040;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#1C2040 · Deep Navy</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#2A1020;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#2A1020 · Dark Plum</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#102030;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#102030 · Forest Black</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#3A1818;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#3A1818 · Deep Burgundy</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#1A1A30;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#1A1A30 · Midnight</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#301028;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#301028 · Deep Violet</div>
                </div>
            </div>
            <div style="display:flex;gap:12px;flex-wrap:wrap;">
                <a class="btn btn-white" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
                <a class="btn btn-outline" style="color:#C0C8E0;border-color:#C0C8E044;"
                    href="{{ route('show.custom_pages', ['slug' => 'test']) }}">Find My Season</a>
            </div>
        </div>
        <div class="sp-hero-visual">
            <div class="sp-visual-main" style="background:linear-gradient(145deg,#1C2848,#101828);">🌑</div>
            <div class="sp-visual-badges">
                {{-- tooltips on badges --}}
                <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
                    <div class="sp-badge-icon">❄️</div>
                    <div>
                        <div class="sp-badge-title" style="color:#C0C8E0;">Cool Undertone</div>
                        <div class="sp-badge-sub" style="color:#C0C8E0;">Deep cool-warm bridge</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Your skin has a
                        distinct coolness, even in deep tones — never warm or golden.</div>
                </div>
                <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
                    <div class="sp-badge-icon">🌑</div>
                    <div>
                        <div class="sp-badge-title" style="color:#C0C8E0;">Dark Value</div>
                        <div class="sp-badge-sub" style="color:#C0C8E0;">Deepest of all 12</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Your overall
                        colouring is the darkest of all seasons — near-black tones are your best.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- PALETTE (unisex) -->
    <section class="season-section">
        <span class="lbl" style="color:#4860C0;">✦ Your Colour Palette</span>
        <div class="h2" style="margin-bottom:12px;">Best colours for Dark Winter</div>
        <p class="body-text" style="max-width:560px;margin-bottom:36px;">The deepest, most dramatic palette of all 12
            seasons. Dark navy, deep plum, rich burgundy, forest black, and dark teal. Your colours are at the extreme
            deep-cool end of the spectrum.</p>
        <div class="two-col">
            <div>
                <div
                    style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">
                    Power Shades</div>
                <div class="color-grid" style="margin-bottom:28px;">
                    {{-- tooltips on each swatch --}}
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#1C2040;" title="#1C2040">
                        <div class="tooltip-box">#1C2040 · Deep Navy</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#2A1020;" title="#2A1020">
                        <div class="tooltip-box">#2A1020 · Dark Plum</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#102030;" title="#102030">
                        <div class="tooltip-box">#102030 · Forest Black</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#3A1818;" title="#3A1818">
                        <div class="tooltip-box">#3A1818 · Deep Burgundy</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#1A1A30;" title="#1A1A30">
                        <div class="tooltip-box">#1A1A30 · Midnight</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#301028;" title="#301028">
                        <div class="tooltip-box">#301028 · Deep Violet</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#0A1828;" title="#0A1828">
                        <div class="tooltip-box">#0A1828 · Shadow Blue</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#281830;" title="#281830">
                        <div class="tooltip-box">#281830 · Aubergine</div>
                    </div>
                </div>
                <div class="swatch-strip" style="height:14px;border-radius:7px;margin-bottom:8px;">
                    <span style="background:#1C2040;"></span>
                    <span style="background:#2A1020;"></span>
                    <span style="background:#102030;"></span>
                    <span style="background:#3A1818;"></span>
                    <span style="background:#1A1A30;"></span>
                    <span style="background:#301028;"></span>
                    <span style="background:#0A1828;"></span>
                    <span style="background:#281830;"></span>
                </div>
                <div style="font-size:12px;color:#B0A49E;">Your complete spectrum — from light to dark</div>
            </div>
            <div>
                <div
                    style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">
                    Neutrals & Staples</div>
                <div class="color-grid" style="margin-bottom:20px;">
                    <div class="tooltip-trigger cswatch" style="background:#1A1820;">
                        <div class="tooltip-box">#1A1820 · Near-Black</div>
                    </div>
                    <div class="tooltip-trigger cswatch" style="background:#2A2028;">
                        <div class="tooltip-box">#2A2028 · Deep Charcoal</div>
                    </div>
                    <div class="tooltip-trigger cswatch" style="background:#3A3040;">
                        <div class="tooltip-box">#3A3040 · Cool Slate</div>
                    </div>
                    <div class="tooltip-trigger cswatch" style="background:#4A4050;">
                        <div class="tooltip-box">#4A4050 · Dark Cool Grey</div>
                    </div>
                </div>
                <p class="body-text" style="font-size:14px;">Near-black in deep navy, dark plum, and deep charcoal form
                    your neutral foundation — always dark and cool.</p>
            </div>
        </div>
    </section>

    <!-- YOUR FEATURES (unisex) -->
    <section class="season-section-alt">
        <span class="lbl" style="color:#4860C0;">✦ Typical Features</span>
        <div class="h2" style="margin-bottom:40px;">Do you look like a Dark Winter?</div>
        <div class="three-col">
            <div class="tooltip-trigger card" style="position:relative;">
                <div style="font-size:32px;margin-bottom:14px;">🧴</div>
                <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skin</div>
                <div class="body-text" style="font-size:14px;">Medium-deep to very deep skin with a cool or neutral-cool
                    undertone. High natural contrast between skin and features. Often has a distinctive coolness to deep
                    skin. Dramatically beautiful.</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">Cool, deep, and
                    striking — never warm or ashy.</div>
            </div>
            <div class="tooltip-trigger card" style="position:relative;">
                <div style="font-size:32px;margin-bottom:14px;">👁️</div>
                <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Eyes</div>
                <div class="body-text" style="font-size:14px;">Very dark brown, nearly black, dark cool hazel, or striking
                    cool dark eyes. Eyes are deep, penetrating, and often the most striking feature. An intense, dramatic
                    quality.</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">Deep and penetrating —
                    eyes are often your most memorable feature.</div>
            </div>
            <div class="tooltip-trigger card" style="position:relative;">
                <div style="font-size:32px;margin-bottom:14px;">💇</div>
                <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Hair</div>
                <div class="body-text" style="font-size:14px;">Very dark brown, cool black, near-black, or dramatically
                    dark. Always cool-toned — never warm or auburn. The deepest, most dramatic hair of any season.</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">The darkest, coolest
                    hair — no red or golden undertones.</div>
            </div>
        </div>
        <div style="margin-top:32px;padding:24px;background:#4860C014;border:1px solid #4860C033;border-radius:16px;">
            <div style="font-size:15px;font-weight:600;color:#2C2420;margin-bottom:6px;">✦ The Dark Winter glow effect
            </div>
            <div class="body-text" style="font-size:14px;">Dark Winters in their colours look cinematic — like they've
                stepped out of a dramatic film. The deep, cool colours match their intense natural contrast for a powerfully
                beautiful, unforgettable appearance.</div>
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
            <span class="lbl" style="color:#4860C0;">✦ Makeup Guide (Women)</span>
            <div class="h2" style="margin-bottom:12px;">Your perfect makeup shades</div>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">Dark, cool, and dramatic. Dark Winter can
                wear the most intense cool makeup of any season — deep plum lips, dark navy liner, and cool berry cheeks.
            </p>
            <div class="makeup-row">
                {{-- makeup items with tooltips --}}
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#382830;"></div>
                    <div class="makeup-label">Deep Cool Tan</div>
                    <div class="makeup-type">Foundation</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Deep, cool-toned
                        base — never warm or golden.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#6A3050;"></div>
                    <div class="makeup-label">Deep Berry</div>
                    <div class="makeup-type">Blush</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Cool, deep berry
                        that adds drama without warmth.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#5A1040;"></div>
                    <div class="makeup-label">Dark Plum</div>
                    <div class="makeup-type">Lips</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Your signature lip
                        — deep, cool, and intensely dramatic.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#1A2848;"></div>
                    <div class="makeup-label">Deep Navy</div>
                    <div class="makeup-type">Eyes</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Navy liner or
                        shadow that enhances your cool depth.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#2A1038;"></div>
                    <div class="makeup-label">Dark Violet</div>
                    <div class="makeup-type">Eyes</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Cool violet for a
                        hauntingly beautiful effect.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#301840;"></div>
                    <div class="makeup-label">Deep Purple</div>
                    <div class="makeup-type">Eyes</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Rich purple that's
                        dark and cool — never warm.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#4A1830;"></div>
                    <div class="makeup-label">Cool Burgundy</div>
                    <div class="makeup-type">Blush</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Cool, deep
                        burgundy blush for a striking look.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#C0C8D8;"></div>
                    <div class="makeup-label">Icy Silver</div>
                    <div class="makeup-type">Highlighter</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Cool, silver
                        shimmer — never gold or warm.</div>
                </div>
            </div>
            <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Foundation Undertone</div>
                    <div class="body-text" style="font-size:14px;">Cool, deep foundations — the coolest and deepest in the
                        entire foundation range. Avoid any warmth or yellow undertone entirely.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Look for "cool",
                        "neutral-cool", or "rosy" — never warm or golden.</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Key Makeup Rule</div>
                    <div class="body-text" style="font-size:14px;">Dark and cool. Deep plum lips, dark navy or violet
                        eyes, and a cool berry blush is the signature Dark Winter look. You are the only season that can
                        truly wear near-black eyeshadow.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Embrace the
                        darkest, coolest versions of every product.</div>
                </div>
            </div>
        </section>

        <!-- Wardrobe Tips (Women) -->
        <section class="season-section-alt">
            <div class="two-col">
                <div>
                    <span class="lbl" style="color:#4860C0;">✦ Wardrobe Tips (Women)</span>
                    <div class="h2" style="margin-bottom:20px;">How to dress as a Dark Winter woman</div>
                    <div class="feature-row">
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">01</div>
                            <div>
                                <div class="fi-title">Wear your darkness proudly</div>
                                <div class="fi-desc">Deep navy, dark plum, forest black, and charcoal are not just colours
                                    for you — they're your most flattering neutrals.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">These are
                                your power neutrals — they enhance your natural depth.</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">02</div>
                            <div>
                                <div class="fi-title">Jewel tones at their deepest</div>
                                <div class="fi-desc">The deepest sapphire, darkest emerald, and richest ruby all belong to
                                    Dark Winter. The deeper the jewel tone, the better.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Deep jewel
                                tones match your dramatic intensity perfectly.</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">03</div>
                            <div>
                                <div class="fi-title">Black is genuinely your colour</div>
                                <div class="fi-desc">Unlike most seasons, black truly flatters you. It matches the
                                    intensity of your dark, cool features perfectly.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Black is a
                                neutral for you — wear it confidently.</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">04</div>
                            <div>
                                <div class="fi-title">Silver for all jewellery</div>
                                <div class="fi-desc">Cool silver, white gold, and platinum are the only metals that enhance
                                    your cool depth. Gold will fight with your colouring.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Silver,
                                platinum, and white gold are your metals — never gold.</div>
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
                                <div class="avoid-why">Too warm, clashes dramatically</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Orange is
                                the opposite of your cool, dark colouring.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FFD700;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Yellow</div>
                                <div class="avoid-why">Too warm and light</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Yellow is
                                too bright and warm for your deep coolness.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#C8A070;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Warm Brown</div>
                                <div class="avoid-why">Undertone mismatch</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Warm brown
                                fights with your cool depth — choose charcoal instead.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#F5DEB3;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Warm Beige</div>
                                <div class="avoid-why">Too light and warm</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Beige is too
                                warm and light — stick to icy white or charcoal.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#90EE90;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Light Green</div>
                                <div class="avoid-why">Too light and warm-toned</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Choose dark
                                forest green or teal instead.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FFC0CB;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Pastel Pink</div>
                                <div class="avoid-why">Too light, wrong undertone</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Deep
                                burgundy or plum are your pinks — not pastels.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Outfit Inspiration (Women) -->
        <section class="season-section">
            <span class="lbl" style="color:#4860C0;">✦ Outfit Inspiration (Women)</span>
            <div class="h2" style="margin-bottom:36px;">Looks built for Dark Winter women</div>
            <div class="outfit-grid">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#1C2848,#101828);">🌑</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Day</div>
                        <div class="outfit-name">Dark Sovereign</div>
                        <div class="outfit-items">Deep navy structured coat · Charcoal trousers · Black leather shoes ·
                            Silver watch</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Powerful, cool,
                        and commanding — perfect for daytime drama.</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#3A1818,#2A1020);">💎</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Evening</div>
                        <div class="outfit-name">Midnight Plum</div>
                        <div class="outfit-items">Deep plum silk dress · Black pointed heels · Silver evening bag ·
                            Amethyst jewellery</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Elegant,
                        mysterious, and deeply cool — your evening signature.</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#102030,#0A1828);">❄️</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Formal</div>
                        <div class="outfit-name">Deep Ocean</div>
                        <div class="outfit-items">Dark teal-navy blazer · Near-black trousers · Black patent shoes · Cool
                            sapphire cufflinks</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Sharp, dark, and
                        impeccably cool — formalwear at its best.</div>
                </div>
            </div>
        </section>
    </div>

    <!-- MEN CONTENT -->
    <div id="men-content" class="gender-content">
        <!-- Grooming & Skincare (Men) -->
        <section class="season-section">
            <span class="lbl" style="color:#4860C0;">✦ Grooming & Skincare (Men)</span>
            <div class="h2" style="margin-bottom:12px;">Grooming for the Dark Winter man</div>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">Dark, cool, and sharp. Your grooming should
                enhance your natural cool depth and dramatic contrast. Avoid any warmth or redness.</p>
            <div class="makeup-row">
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#282830;"></div>
                    <div class="makeup-label">Cool Matte Moisturizer</div>
                    <div class="makeup-type">Skincare</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Cool, mattifying
                        formula that controls shine without warmth.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#383048;"></div>
                    <div class="makeup-label">Deep Cool Concealer</div>
                    <div class="makeup-type">Concealer (if needed)</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Cool-toned
                        concealer for dark circles — never warm.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#484860;"></div>
                    <div class="makeup-label">Neutral-Cool SPF</div>
                    <div class="makeup-type">Sunscreen</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Tinted SPF with a
                        cool, non-ashy finish.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#2A1A28;"></div>
                    <div class="makeup-label">Cool Charcoal Beard Oil</div>
                    <div class="makeup-type">Facial hair care</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Charcoal-infused
                        oil that cools and conditions.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#1C2040;"></div>
                    <div class="makeup-label">Deep Navy Pomade</div>
                    <div class="makeup-type">Hair Styling</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Navy-tinted pomade
                        for a cool, sharp look.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#301830;"></div>
                    <div class="makeup-label">Dark Plum Accent</div>
                    <div class="makeup-type">Subtle brow gel</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Cool plum brow gel
                        for definition without warmth.</div>
                </div>
            </div>
            <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skincare Focus</div>
                    <div class="body-text" style="font-size:14px;">Clarity and coolness. Use cooling gels, ice rollers,
                        and products that minimise redness or warmth. Avoid self-tanners with warm/orange undertones.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Cooling,
                        clarifying products keep your complexion sharp.</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Facial Hair</div>
                    <div class="body-text" style="font-size:14px;">Keep facial hair neat and cool-toned. Use a charcoal or
                        cool grey beard oil. Avoid any reddish or warm brown tones. A sharp, clean line enhances your
                        dramatic contrast.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Cool-toned beard
                        care maintains your dramatic edge.</div>
                </div>
            </div>
        </section>

        <!-- Wardrobe Tips (Men) -->
        <section class="season-section-alt">
            <div class="two-col">
                <div>
                    <span class="lbl" style="color:#4860C0;">✦ Wardrobe Tips (Men)</span>
                    <div class="h2" style="margin-bottom:20px;">How to dress as a Dark Winter man</div>
                    <div class="feature-row">
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">01</div>
                            <div>
                                <div class="fi-title">Deep, dark neutrals</div>
                                <div class="fi-desc">Navy, charcoal, near-black, and deep teal are your core suit and
                                    trouser colours. Black is genuinely excellent for you.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">These
                                neutrals are your foundation — dark and cool.</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">02</div>
                            <div>
                                <div class="fi-title">Cool jewel-tone accents</div>
                                <div class="fi-desc">Deep burgundy ties, dark plum pocket squares, or cool sapphire
                                    accessories add drama without losing the dark intensity.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Accents
                                that are deep and cool, never bright or warm.</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">03</div>
                            <div>
                                <div class="fi-title">Silver over gold</div>
                                <div class="fi-desc">Silver watches, platinum rings, and cool chrome hardware. Avoid yellow
                                    gold and bronze entirely.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Silver,
                                platinum, and chrome are your metals.</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">04</div>
                            <div>
                                <div class="fi-title">Avoid warm and light colours</div>
                                <div class="fi-desc">No camel, tan, warm brown, pastels, or earthy warm tones. They will
                                    drain your dramatic intensity.</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Warm tones
                                clash with your cool depth — avoid them completely.</div>
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
                                <div class="avoid-why">Too warm, clashes dramatically</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Orange is
                                the opposite of your cool, dark palette.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FFD700;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Yellow</div>
                                <div class="avoid-why">Too warm and light</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Yellow is
                                too bright and warm for your depth.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#C8A070;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Warm Brown</div>
                                <div class="avoid-why">Undertone mismatch</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Warm brown
                                doesn't work — choose charcoal or navy.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#F5DEB3;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Warm Beige</div>
                                <div class="avoid-why">Too light and warm</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Beige is too
                                warm and light — icy white or charcoal are better.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#90EE90;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Light Green</div>
                                <div class="avoid-why">Too light and warm-toned</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Dark forest
                                green or teal suit you better.</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FFC0CB;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">Pastel Pink</div>
                                <div class="avoid-why">Too light, wrong undertone</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Deep
                                burgundy or plum are your pinks.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Outfit Inspiration (Men) -->
        <section class="season-section">
            <span class="lbl" style="color:#4860C0;">✦ Outfit Inspiration (Men)</span>
            <div class="h2" style="margin-bottom:36px;">Looks built for Dark Winter men</div>
            <div class="outfit-grid">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#1C2848,#101828);">🌑</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Business</div>
                        <div class="outfit-name">Midnight Navy</div>
                        <div class="outfit-items">Deep navy suit · White or icy grey shirt · Deep plum tie · Silver
                            cufflinks</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Powerful, cool,
                        and commanding — perfect for the boardroom.</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#3A1818,#2A1020);">💎</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Smart Casual</div>
                        <div class="outfit-name">Dark Burgundy Edge</div>
                        <div class="outfit-items">Charcoal trousers · Deep burgundy sweater · Black leather boots · Silver
                            watch</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Sophisticated,
                        cool, and effortlessly dramatic.</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#102030,#0A1828);">❄️</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Formal</div>
                        <div class="outfit-name">Black & Silver</div>
                        <div class="outfit-items">Black tuxedo · White shirt · Dark navy pocket square · Silver accessories
                        </div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">The ultimate Dark
                        Winter formal — sharp, dark, and impeccably cool.</div>
                </div>
            </div>
        </section>
    </div>

    <!-- GENDER-NEUTRAL CONTENT -->
    <div id="neutral-content" class="gender-content">
        <section class="season-section">
            <span class="lbl" style="color:#4860C0;">✦ Style for Everyone</span>
            <div class="h2" style="margin-bottom:12px;">Gender-neutral Dark Winter tips</div>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">Dark Winter is about cool depth, dramatic
                intensity, and powerful contrast. These principles work for any gender expression.</p>
            <div
                style="display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:20px;margin-bottom:32px;">
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">🌑</div>
                    <div class="fi-title">Embrace the deepest neutrals</div>
                    <div class="fi-desc" style="font-size:14px;">Black, dark navy, charcoal, and deep plum are your
                        anchors. Build every outfit around these powerful dark tones.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Your neutrals are
                        as dark as they come — own it.</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">💎</div>
                    <div class="fi-title">Deep jewel accents</div>
                    <div class="fi-desc" style="font-size:14px;">Use dark sapphire, deep emerald, or rich burgundy as
                        statement colours in accessories or layers.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">These accents add
                        drama without losing the dark vibe.</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">⚜️</div>
                    <div class="fi-title">Metallic finishes</div>
                    <div class="fi-desc" style="font-size:14px;">Silver, platinum, chrome, and white gold only. Avoid all
                        warm metals like gold, brass, or copper.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Cool metals only —
                        they enhance your cool depth.</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">❄️</div>
                    <div class="fi-title">One light accent allowed</div>
                    <div class="fi-desc" style="font-size:14px;">Icy white or cool pale grey can be used sparingly for
                        contrast, but keep the overall look dark.</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Use light accents
                        sparingly — the drama is in the dark.</div>
                </div>
            </div>
            <div class="outfit-grid" style="margin-bottom:20px;">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#1C2848,#101828);">🌑</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Unisex Look</div>
                        <div class="outfit-name">Dark Power</div>
                        <div class="outfit-items">Black or deep navy oversized coat · Charcoal trousers · Silver
                            accessories · Black boots or sneakers</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">A powerful,
                        gender-neutral dark winter staple.</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#3A1818,#2A1020);">💎</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">Statement Layer</div>
                        <div class="outfit-name">Plum Drama</div>
                        <div class="outfit-items">Deep plum jacket or sweater · Dark denim or trousers · Silver jewellery
                            or watch</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">A bold layer that
                        commands attention with cool depth.</div>
                </div>
            </div>
        </section>
    </div>

    <!-- CELEBRITIES (expanded with male and non-binary examples) -->
    <section class="season-section-alt">
        <span class="lbl" style="color:#4860C0;">✦ Famous Dark Winters</span>
        <div class="h2" style="margin-bottom:36px;">You're in great company</div>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(180px,1fr));gap:24px;">
            {{-- celebrity cards with tooltips --}}
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#1C2848;">👑</div>
                <div class="celeb-name">Priyanka Chopra</div>
                <div class="celeb-note">Deep cool winter depth (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her deep, cool
                    features are quintessential Dark Winter.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#2A1020;">💫</div>
                <div class="celeb-name">Deepika Padukone</div>
                <div class="celeb-note">Dramatic dark winter (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Striking dark winter
                    beauty with cool depth.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#1A1A30;">🌟</div>
                <div class="celeb-name">Andie MacDowell</div>
                <div class="celeb-note">Dark winter contrast (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her dark hair and cool
                    eyes define Dark Winter.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#301028;">🎬</div>
                <div class="celeb-name">Sofia Vergara</div>
                <div class="celeb-note">Deep cool features (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Deep, cool, and
                    dramatic — a Dark Winter icon.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#1C2848;">🎭</div>
                <div class="celeb-name">Keanu Reeves</div>
                <div class="celeb-note">Cool dark intensity (he/him)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">His cool, dark
                    features are a perfect Dark Winter match.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#2A1020;">🎸</div>
                <div class="celeb-name">Jon Bon Jovi</div>
                <div class="celeb-note">Dark winter rock (he/him)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Dark, cool, and
                    charismatic — a rock star Dark Winter.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#102030;">🎨</div>
                <div class="celeb-name">Toni Braxton</div>
                <div class="celeb-note">Deep cool dramatic (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her deep, cool voice
                    and style embody Dark Winter.</div>
            </div>
        </div>
    </section>

    <!-- NAV BETWEEN SEASONS -->
    <div
        style="padding:40px 6%;display:flex;justify-content:space-between;align-items:center;border-top:1px solid #E8DDD6;gap:20px;flex-wrap:wrap;">
        <a class="btn btn-outline" style="color:#2C2420;border-color:#E8DDD6;"
            href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
        <div style="display:flex;gap:8px;flex-wrap:wrap;">
            <a class="btn btn-outline" style="color:#4860C0;border-color:#4860C044;font-size:13px;"
                href="{{ route('show.seasons.custom_pages', ['slug' => 'true-winter']) }}">True Winter →</a>
            <a class="btn btn-outline" style="color:#4860C0;border-color:#4860C044;font-size:13px;"
                href="{{ route('show.seasons.custom_pages', ['slug' => 'dark-autumn']) }}">Dark Autumn →</a>
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
