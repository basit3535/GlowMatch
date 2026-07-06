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
    <section class="season-page-hero" style="background:linear-gradient(145deg,#FAE8D0,#F5D4A8,#EDBA80);color:#3C1800;">
        <div>
            <div class="sp-eyebrow">
                <div class="sp-line" style="background:#C97B3A;"></div>
                <span class="sp-season-type" style="color:#C97B3A;">{{ $data->content->season_hero_eyebrow_label->value ?? '' }}</span>
            </div>
            <h1 class="sp-title" style="font-size:clamp(52px,7vw,88px);">{{ $data->content->season_hero_title->value ?? '' }}</h1>
            <div class="sp-tagline" style="color:#3C180066;">{{ $data->content->season_hero_tagline->value ?? '' }}</div>
            <p class="sp-desc" style="color:#3C180088;">{{ $data->content->season_hero_desc->value ?? '' }}</p>
            <div class="sp-palette-preview">
                {{-- tooltips on preview swatches --}}
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#FFD8A0;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#FFD8A0 · Peach</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#F5C090;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#F5C090 · Warm Apricot</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#E8A870;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#E8A870 · Golden Peach</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#D4C080;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#D4C080 · Warm Sand</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#C8B460;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#C8B460 · Soft Gold</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#FAE8CC;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#FAE8CC · Warm Cream</div>
                </div>
            </div>
            <div style="display:flex;gap:12px;flex-wrap:wrap;">
                <a class="btn btn-white" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">{{ $data->content->season_hero_btn_all->value ?? '' }}</a>
                <a class="btn btn-outline" style="color:#3C1800;border-color:#3C180044;"
                    href="{{ route('show.custom_pages', ['slug' => 'test']) }}">{{ $data->content->season_hero_btn_quiz->value ?? '' }}</a>
            </div>
        </div>
        <div class="sp-hero-visual">
            <div class="sp-visual-main" style="background:linear-gradient(145deg,#FFE4C4,#FFD0A0);">🌼</div>
            <div class="sp-visual-badges">
                {{-- tooltips on badges --}}
                <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
                    <div class="sp-badge-icon">{{ $data->content->season_badge1_icon->value ?? '' }}</div>
                    <div>
                        <div class="sp-badge-title" style="color:#3C1800;">{{ $data->content->season_badge1_title->value ?? '' }}</div>
                        <div class="sp-badge-sub" style="color:#3C1800;">{{ $data->content->season_badge1_sub->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->season_badge1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
                    <div class="sp-badge-icon">{{ $data->content->season_badge2_icon->value ?? '' }}</div>
                    <div>
                        <div class="sp-badge-title" style="color:#3C1800;">{{ $data->content->season_badge2_title->value ?? '' }}</div>
                        <div class="sp-badge-sub" style="color:#3C1800;">{{ $data->content->season_badge2_sub->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->season_badge2_tooltip->value ?? '' }}</div>
                </div>
            </div>
        </div>
    </section>

    <!-- PALETTE (unisex) -->
    <section class="season-section">
        <span class="lbl" style="color:#C97B3A;">{{ $data->content->palette_label->value ?? '' }}</span>
        <h2 class="h2" style="margin-bottom:12px;">{{ $data->content->palette_title->value ?? '' }}</h2>
        <p class="body-text" style="max-width:560px;margin-bottom:36px;">{{ $data->content->palette_desc->value ?? '' }}</p>
        <div class="two-col">
            <div>
                <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">
                    {{ $data->content->palette_power_label->value ?? '' }}
                </div>
                <div class="color-grid" style="margin-bottom:28px;">
                    {{-- tooltips on each swatch --}}
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#FFD8A0;" title="#FFD8A0">
                        <div class="tooltip-box">#FFD8A0 · Peach</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#F5C090;" title="#F5C090">
                        <div class="tooltip-box">#F5C090 · Warm Apricot</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#E8A870;" title="#E8A870">
                        <div class="tooltip-box">#E8A870 · Golden Peach</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#D4C080;" title="#D4C080">
                        <div class="tooltip-box">#D4C080 · Warm Sand</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#C8B460;" title="#C8B460">
                        <div class="tooltip-box">#C8B460 · Soft Gold</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#FAE8CC;" title="#FAE8CC">
                        <div class="tooltip-box">#FAE8CC · Warm Cream</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#F0C8A0;" title="#F0C8A0">
                        <div class="tooltip-box">#F0C8A0 · Soft Coral</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#E0A878;" title="#E0A878">
                        <div class="tooltip-box">#E0A878 · Light Terracotta</div>
                    </div>
                </div>
                <div class="swatch-strip" style="height:14px;border-radius:7px;margin-bottom:8px;">
                    <span style="background:#FFD8A0;"></span>
                    <span style="background:#F5C090;"></span>
                    <span style="background:#E8A870;"></span>
                    <span style="background:#D4C080;"></span>
                    <span style="background:#C8B460;"></span>
                    <span style="background:#FAE8CC;"></span>
                    <span style="background:#F0C8A0;"></span>
                    <span style="background:#E0A878;"></span>
                </div>
                <div style="font-size:12px;color:#B0A49E;">{{ $data->content->palette_strip_label->value ?? '' }}</div>
            </div>
            <div>
                <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">
                    {{ $data->content->palette_neutral_label->value ?? '' }}
                </div>
                <div class="color-grid" style="margin-bottom:20px;">
                    <div class="tooltip-trigger cswatch" style="background:#F5E8D8;">
                        <div class="tooltip-box">#F5E8D8 · Warm Ivory</div>
                    </div>
                    <div class="tooltip-trigger cswatch" style="background:#E8D4C0;">
                        <div class="tooltip-box">#E8D4C0 · Peach Beige</div>
                    </div>
                    <div class="tooltip-trigger cswatch" style="background:#D4C0A8;">
                        <div class="tooltip-box">#D4C0A8 · Soft Camel</div>
                    </div>
                    <div class="tooltip-trigger cswatch" style="background:#C0A890;">
                        <div class="tooltip-box">#C0A890 · Warm Taupe</div>
                    </div>
                </div>
                <p class="body-text" style="font-size:14px;">{{ $data->content->palette_neutral_desc->value ?? '' }}</p>
            </div>
        </div>
    </section>

    <!-- YOUR FEATURES (unisex) -->
    <section class="season-section-alt">
        <span class="lbl" style="color:#C97B3A;">{{ $data->content->features_label->value ?? '' }}</span>
        <h2 class="h2" style="margin-bottom:40px;">{{ $data->content->features_title->value ?? '' }}</h2>
        <div class="three-col">
            <div class="tooltip-trigger card" style="position:relative;">
                <div style="font-size:32px;margin-bottom:14px;">🧴</div>
                <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">{{ $data->content->features_skin_title->value ?? '' }}</div>
                <div class="body-text" style="font-size:14px;">{{ $data->content->features_skin_desc->value ?? '' }}</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">{{ $data->content->features_skin_tooltip->value ?? '' }}</div>
            </div>
            <div class="tooltip-trigger card" style="position:relative;">
                <div style="font-size:32px;margin-bottom:14px;">👁️</div>
                <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">{{ $data->content->features_eyes_title->value ?? '' }}</div>
                <div class="body-text" style="font-size:14px;">{{ $data->content->features_eyes_desc->value ?? '' }}</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">{{ $data->content->features_eyes_tooltip->value ?? '' }}</div>
            </div>
            <div class="tooltip-trigger card" style="position:relative;">
                <div style="font-size:32px;margin-bottom:14px;">💇</div>
                <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">{{ $data->content->features_hair_title->value ?? '' }}</div>
                <div class="body-text" style="font-size:14px;">{{ $data->content->features_hair_desc->value ?? '' }}</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">{{ $data->content->features_hair_tooltip->value ?? '' }}</div>
            </div>
        </div>
        <div style="margin-top:32px;padding:24px;background:#C97B3A14;border:1px solid #C97B3A33;border-radius:16px;">
            <div style="font-size:15px;font-weight:600;color:#2C2420;margin-bottom:6px;">{{ $data->content->features_effect_title->value ?? '' }}</div>
            <div class="body-text" style="font-size:14px;">{{ $data->content->features_effect_desc->value ?? '' }}</div>
        </div>
    </section>

    <!-- GENDER-SPECIFIC SECTIONS -->
    <div style="margin: 0 6%;">
        <div class="gender-toggle">
            <button class="gender-btn active" data-gender="women">{{ $data->content->gender_women->value ?? '' }}</button>
            <button class="gender-btn" data-gender="men">{{ $data->content->gender_men->value ?? '' }}</button>
            <button class="gender-btn" data-gender="neutral">{{ $data->content->gender_neutral->value ?? '' }}</button>
        </div>
    </div>

    <!-- WOMEN CONTENT -->
    <div id="women-content" class="gender-content active-gender">
        <!-- Makeup Guide (Women) -->
        <section class="season-section">
            <span class="lbl" style="color:#C97B3A;">{{ $data->content->makeup_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:12px;">{{ $data->content->makeup_title->value ?? '' }}</h2>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">{{ $data->content->makeup_desc->value ?? '' }}</p>
            <div class="makeup-row">
                {{-- makeup items with tooltips --}}
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#FDDBB4;"></div>
                    <div class="makeup-label">Warm Ivory</div>
                    <div class="makeup-type">Foundation</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm, peachy base
                        that matches your natural glow.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#FFB070;"></div>
                    <div class="makeup-label">Warm Peach</div>
                    <div class="makeup-type">Blush</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Soft peach blush
                        that adds a healthy warmth.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#E89060;"></div>
                    <div class="makeup-label">Warm Coral</div>
                    <div class="makeup-type">Lips</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Your perfect lip —
                        warm, coral, and soft.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#D4A843;"></div>
                    <div class="makeup-label">Golden Bronze</div>
                    <div class="makeup-type">Eyes</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm, golden
                        shadow that enhances your light features.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#F0C898;"></div>
                    <div class="makeup-label">Peachy Nude</div>
                    <div class="makeup-type">Lips</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Soft, peachy nude
                        for everyday wear.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#C8A870;"></div>
                    <div class="makeup-label">Warm Taupe</div>
                    <div class="makeup-type">Eye shadow</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm, soft taupe
                        for subtle definition.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#E8A068;"></div>
                    <div class="makeup-label">Salmon</div>
                    <div class="makeup-type">Blush</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm salmon blush
                        for a sunny flush.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#D4B860;"></div>
                    <div class="makeup-label">Champagne</div>
                    <div class="makeup-type">Highlighter</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm champagne
                        glow — never silver or icy.</div>
                </div>
            </div>
            <div class="two-col" style="margin-top:28px;display:grid;gap:16px;">
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">{{ $data->content->makeup_foundation_label->value ?? '' }}</div>
                    <div class="body-text" style="font-size:14px;">{{ $data->content->makeup_foundation_desc->value ?? '' }}</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->makeup_foundation_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">{{ $data->content->makeup_rule_label->value ?? '' }}</div>
                    <div class="body-text" style="font-size:14px;">{{ $data->content->makeup_rule_desc->value ?? '' }}</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->makeup_rule_tooltip->value ?? '' }}</div>
                </div>
            </div>
        </section>

        <!-- Wardrobe Tips (Women) -->
        <section class="season-section-alt">
            <div class="two-col">
                <div>
                    <span class="lbl" style="color:#C97B3A;">{{ $data->content->wardrobe_women_label->value ?? '' }}</span>
                    <h2 class="h2" style="margin-bottom:20px;">{{ $data->content->wardrobe_women_title->value ?? '' }}</h2>
                    <div class="feature-row">
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">01</div>
                            <div>
                                <div class="fi-title">{{ $data->content->wardrobe_women_tip1_title->value ?? '' }}</div>
                                <div class="fi-desc">{{ $data->content->wardrobe_women_tip1_desc->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">{{ $data->content->wardrobe_women_tip1_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">02</div>
                            <div>
                                <div class="fi-title">{{ $data->content->wardrobe_women_tip2_title->value ?? '' }}</div>
                                <div class="fi-desc">{{ $data->content->wardrobe_women_tip2_desc->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">{{ $data->content->wardrobe_women_tip2_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">03</div>
                            <div>
                                <div class="fi-title">{{ $data->content->wardrobe_women_tip3_title->value ?? '' }}</div>
                                <div class="fi-desc">{{ $data->content->wardrobe_women_tip3_desc->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">{{ $data->content->wardrobe_women_tip3_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">04</div>
                            <div>
                                <div class="fi-title">{{ $data->content->wardrobe_women_tip4_title->value ?? '' }}</div>
                                <div class="fi-desc">{{ $data->content->wardrobe_women_tip4_desc->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">{{ $data->content->wardrobe_women_tip4_tooltip->value ?? '' }}</div>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">{{ $data->content->avoid_label->value ?? '' }}</span>
                    <div class="avoid-grid">
                        {{-- avoid cards with tooltips --}}
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#000080;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_navy->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_navy_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_navy_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#808080;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_cool_grey->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_cool_grey_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_cool_grey_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FF1493;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_fuchsia->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_fuchsia_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_fuchsia_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#000000;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_black->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_black_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_black_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#8B0000;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_dark_red->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_dark_red_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_dark_red_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#4B0082;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_purple->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_purple_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_purple_tooltip->value ?? '' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Outfit Inspiration (Women) -->
        <section class="season-section">
            <span class="lbl" style="color:#C97B3A;">{{ $data->content->outfit_women_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:36px;">{{ $data->content->outfit_women_title->value ?? '' }}</h2>
            <div class="outfit-grid">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#FAE8CC,#F5D4A8);">🌿</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_women_1_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_women_1_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_women_1_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->outfit_women_1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#FFD8A0,#E8C080);">🌸</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_women_2_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_women_2_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_women_2_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->outfit_women_2_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#F5C090,#E8A870);">✨</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_women_3_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_women_3_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_women_3_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->outfit_women_3_tooltip->value ?? '' }}</div>
                </div>
            </div>
        </section>
    </div>

    <!-- MEN CONTENT -->
    <div id="men-content" class="gender-content">
        <!-- Grooming & Skincare (Men) -->
        <section class="season-section">
            <span class="lbl" style="color:#C97B3A;">{{ $data->content->grooming_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:12px;">{{ $data->content->grooming_title->value ?? '' }}</h2>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">{{ $data->content->grooming_desc->value ?? '' }}</p>
            <div class="makeup-row">
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#FDDBB4;"></div>
                    <div class="makeup-label">Warm Tinted Moisturizer</div>
                    <div class="makeup-type">Skincare</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Light, warm-tinted
                        hydration that enhances your skin.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#E8C8A8;"></div>
                    <div class="makeup-label">Peachy Concealer</div>
                    <div class="makeup-type">Concealer (if needed)</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm, peachy
                        concealer that blends naturally.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#FFD8A0;"></div>
                    <div class="makeup-label">Golden SPF</div>
                    <div class="makeup-type">Sunscreen</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Tinted SPF with a
                        warm, golden finish.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#D4A060;"></div>
                    <div class="makeup-label">Warm Honey Beard Oil</div>
                    <div class="makeup-type">Facial hair care</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm,
                        honey-scented oil for a soft beard.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#E8BC70;"></div>
                    <div class="makeup-label">Soft Gold Pomade</div>
                    <div class="makeup-type">Hair Styling</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Light, golden
                        pomade for a natural hold.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#C8A060;"></div>
                    <div class="makeup-label">Warm Taupe Brow Gel</div>
                    <div class="makeup-type">Brows</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm taupe to
                        define brows without darkening.</div>
                </div>
            </div>
            <div class="two-col" style="margin-top:28px;display:grid;gap:16px;">
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">{{ $data->content->grooming_skincare_title->value ?? '' }}</div>
                    <div class="body-text" style="font-size:14px;">{{ $data->content->grooming_skincare_desc->value ?? '' }}</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->grooming_skincare_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">{{ $data->content->grooming_facial_title->value ?? '' }}</div>
                    <div class="body-text" style="font-size:14px;">{{ $data->content->grooming_facial_desc->value ?? '' }}</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->grooming_facial_tooltip->value ?? '' }}</div>
                </div>
            </div>
        </section>

        <!-- Wardrobe Tips (Men) -->
        <section class="season-section-alt">
            <div class="two-col">
                <div>
                    <span class="lbl" style="color:#C97B3A;">{{ $data->content->wardrobe_men_label->value ?? '' }}</span>
                    <h2 class="h2" style="margin-bottom:20px;">{{ $data->content->wardrobe_men_title->value ?? '' }}</h2>
                    <div class="feature-row">
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">01</div>
                            <div>
                                <div class="fi-title">{{ $data->content->wardrobe_men_tip1_title->value ?? '' }}</div>
                                <div class="fi-desc">{{ $data->content->wardrobe_men_tip1_desc->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">{{ $data->content->wardrobe_men_tip1_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">02</div>
                            <div>
                                <div class="fi-title">{{ $data->content->wardrobe_men_tip2_title->value ?? '' }}</div>
                                <div class="fi-desc">{{ $data->content->wardrobe_men_tip2_desc->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">{{ $data->content->wardrobe_men_tip2_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">03</div>
                            <div>
                                <div class="fi-title">{{ $data->content->wardrobe_men_tip3_title->value ?? '' }}</div>
                                <div class="fi-desc">{{ $data->content->wardrobe_men_tip3_desc->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">{{ $data->content->wardrobe_men_tip3_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">04</div>
                            <div>
                                <div class="fi-title">{{ $data->content->wardrobe_men_tip4_title->value ?? '' }}</div>
                                <div class="fi-desc">{{ $data->content->wardrobe_men_tip4_desc->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">{{ $data->content->wardrobe_men_tip4_tooltip->value ?? '' }}</div>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">{{ $data->content->avoid_label->value ?? '' }}</span>
                    <div class="avoid-grid">
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#000080;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_navy->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_navy_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_navy_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#808080;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_cool_grey->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_cool_grey_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_cool_grey_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#000000;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_black->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_black_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_black_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#8B0000;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_dark_red->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_dark_red_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_dark_red_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#4B0082;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_purple->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_purple_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_purple_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FF1493;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_fuchsia->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_fuchsia_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_fuchsia_tooltip->value ?? '' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Outfit Inspiration (Men) -->
        <section class="season-section">
            <span class="lbl" style="color:#C97B3A;">{{ $data->content->outfit_men_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:36px;">{{ $data->content->outfit_men_title->value ?? '' }}</h2>
            <div class="outfit-grid">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#FAE8CC,#F5D4A8);">🌿</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_men_1_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_men_1_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_men_1_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->outfit_men_1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#FFD8A0,#E8C080);">🌸</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_men_2_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_men_2_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_men_2_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->outfit_men_2_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#F5C090,#E8A870);">✨</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_men_3_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_men_3_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_men_3_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->outfit_men_3_tooltip->value ?? '' }}</div>
                </div>
            </div>
        </section>
    </div>

    <!-- GENDER-NEUTRAL CONTENT -->
    <div id="neutral-content" class="gender-content">
        <section class="season-section">
            <span class="lbl" style="color:#C97B3A;">{{ $data->content->neutral_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:12px;">{{ $data->content->neutral_title->value ?? '' }}</h2>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">{{ $data->content->neutral_desc->value ?? '' }}</p>
            <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:20px;margin-bottom:32px;">
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">☀️</div>
                    <div class="fi-title">{{ $data->content->neutral_tip1_title->value ?? '' }}</div>
                    <div class="fi-desc" style="font-size:14px;">{{ $data->content->neutral_tip1_desc->value ?? '' }}</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">{{ $data->content->neutral_tip1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">🌸</div>
                    <div class="fi-title">{{ $data->content->neutral_tip2_title->value ?? '' }}</div>
                    <div class="fi-desc" style="font-size:14px;">{{ $data->content->neutral_tip2_desc->value ?? '' }}</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">{{ $data->content->neutral_tip2_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">⚜️</div>
                    <div class="fi-title">{{ $data->content->neutral_tip3_title->value ?? '' }}</div>
                    <div class="fi-desc" style="font-size:14px;">{{ $data->content->neutral_tip3_desc->value ?? '' }}</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">{{ $data->content->neutral_tip3_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">🍃</div>
                    <div class="fi-title">{{ $data->content->neutral_tip4_title->value ?? '' }}</div>
                    <div class="fi-desc" style="font-size:14px;">{{ $data->content->neutral_tip4_desc->value ?? '' }}</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">{{ $data->content->neutral_tip4_tooltip->value ?? '' }}</div>
                </div>
            </div>
            <div class="outfit-grid" style="margin-bottom:20px;">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#FAE8CC,#F5D4A8);">🌿</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->neutral_outfit1_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->neutral_outfit1_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->neutral_outfit1_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->neutral_outfit1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#FFD8A0,#E8C080);">🌸</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->neutral_outfit2_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->neutral_outfit2_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->neutral_outfit2_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->neutral_outfit2_tooltip->value ?? '' }}</div>
                </div>
            </div>
        </section>
    </div>

    <!-- CELEBRITIES (expanded with male and non-binary examples) -->
    <section class="season-section-alt">
        <span class="lbl" style="color:#C97B3A;">{{ $data->content->celebrities_label->value ?? '' }}</span>
        <h2 class="h2" style="margin-bottom:36px;">{{ $data->content->celebrities_title->value ?? '' }}</h2>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(180px,1fr));gap:24px;">
            {{-- celebrity cards with tooltips --}}
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#FFD8A0;">🎵</div>
                <div class="celeb-name">Taylor Swift</div>
                <div class="celeb-note">Light warm colouring (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her fair, warm
                    colouring is classic Light Spring.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#F5C090;">🌟</div>
                <div class="celeb-name">Reese Witherspoon</div>
                <div class="celeb-note">Golden spring warmth (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Peachy skin and warm
                    blonde hair — a perfect Light Spring.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#FAE8CC;">🎬</div>
                <div class="celeb-name">Amanda Seyfried</div>
                <div class="celeb-note">Peachy fair skin (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her fair, peachy skin
                    and light eyes are Light Spring.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#E8D4A0;">🎭</div>
                <div class="celeb-name">Scarlett Johansson</div>
                <div class="celeb-note">Warm light features (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm golden tones and
                    fair skin — a Light Spring icon.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#FFD8A0;">🎸</div>
                <div class="celeb-name">Chris Evans</div>
                <div class="celeb-note">Warm light spring (he/him)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">His warm, light
                    colouring is pure Light Spring.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#F5C090;">🎨</div>
                <div class="celeb-name">Anya Taylor-Joy</div>
                <div class="celeb-note">Ethereal light spring (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her delicate, light
                    features are a beautiful Light Spring match.</div>
            </div>
        </div>
    </section>

    <!-- NAV BETWEEN SEASONS -->
    <div style="padding:40px 6%;display:flex;justify-content:space-between;align-items:center;border-top:1px solid #E8DDD6;gap:20px;flex-wrap:wrap;">
        <a class="btn btn-outline" style="color:#2C2420;border-color:#E8DDD6;"
            href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">{{ $data->content->nav_all->value ?? '' }}</a>
        <div style="display:flex;gap:8px;flex-wrap:wrap;">
            <a class="btn btn-outline" style="color:#C97B3A;border-color:#C97B3A44;font-size:13px;"
                href="{{ route('show.seasons.custom_pages', ['slug' => 'true-spring']) }}">{{ $data->content->nav_prev->value ?? '' }}</a>
            <a class="btn btn-outline" style="color:#C97B3A;border-color:#C97B3A44;font-size:13px;"
                href="{{ route('show.seasons.custom_pages', ['slug' => 'light-summer']) }}">{{ $data->content->nav_adjacent->value ?? '' }}</a>
        </div>
    </div>

    <div class="footer-mini">
        <div class="fm-logo">Glow<em>Match</em></div>
        <div class="fm-links"><a href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">{{ $data->content->footer_links->value ?? '' }}</a></div>
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
