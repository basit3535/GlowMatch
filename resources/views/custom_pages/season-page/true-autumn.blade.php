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
    <section class="season-page-hero" style="background:linear-gradient(145deg,#8A4A20,#B06030,#904820);color:#FFF0D8;">
        <div>
            <div class="sp-eyebrow">
                <div class="sp-line" style="background:#C47838;"></div>
                <span class="sp-season-type" style="color:#C47838;">{{ $data->content->season_hero_eyebrow_label->value ?? '' }}</span>
            </div>
            <h1 class="sp-title" style="font-size:clamp(52px,7vw,88px);">{{ $data->content->season_hero_title->value ?? '' }}</h1>
            <div class="sp-tagline" style="color:#FFF0D866;">{{ $data->content->season_hero_tagline->value ?? '' }}</div>
            <p class="sp-desc" style="color:#FFF0D888;">{{ $data->content->season_hero_desc->value ?? '' }}</p>
            <div class="sp-palette-preview">
                {{-- tooltips on preview swatches --}}
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#C97B5A;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#C97B5A · Terracotta</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#D4A856;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#D4A856 · Warm Mustard</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#8B6914;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#8B6914 · Deep Gold</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#556B2F;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#556B2F · Dark Olive</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#B8632A;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#B8632A · Burnt Orange</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#8B4513;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#8B4513 · Rich Brown</div>
                </div>
            </div>
            <div style="display:flex;gap:12px;flex-wrap:wrap;">
                <a class="btn btn-white" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">{{ $data->content->season_hero_btn_all->value ?? '' }}</a>
                <a class="btn btn-outline" style="color:#FFF0D8;border-color:#FFF0D844;"
                    href="{{ route('show.custom_pages', ['slug' => 'test']) }}">{{ $data->content->season_hero_btn_quiz->value ?? '' }}</a>
            </div>
        </div>
        <div class="sp-hero-visual">
            <div class="sp-visual-main" style="background:linear-gradient(145deg,#C97B5A,#A05030);">🍁</div>
            <div class="sp-visual-badges">
                {{-- tooltips on badges --}}
                <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
                    <div class="sp-badge-icon">{{ $data->content->season_badge1_icon->value ?? '' }}</div>
                    <div>
                        <div class="sp-badge-title" style="color:#FFF0D8;">{{ $data->content->season_badge1_title->value ?? '' }}</div>
                        <div class="sp-badge-sub" style="color:#FFF0D8;">{{ $data->content->season_badge1_sub->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->season_badge1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
                    <div class="sp-badge-icon">{{ $data->content->season_badge2_icon->value ?? '' }}</div>
                    <div>
                        <div class="sp-badge-title" style="color:#FFF0D8;">{{ $data->content->season_badge2_title->value ?? '' }}</div>
                        <div class="sp-badge-sub" style="color:#FFF0D8;">{{ $data->content->season_badge2_sub->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->season_badge2_tooltip->value ?? '' }}</div>
                </div>
            </div>
        </div>
    </section>

    <!-- PALETTE (unisex) -->
    <section class="season-section">
        <span class="lbl" style="color:#C47838;">{{ $data->content->palette_label->value ?? '' }}</span>
        <h2 class="h2" style="margin-bottom:12px;">{{ $data->content->palette_title->value ?? '' }}</h2>
        <p class="body-text" style="max-width:560px;margin-bottom:36px;">{{ $data->content->palette_desc->value ?? '' }}</p>
        <div class="two-col">
            <div>
                <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">
                    {{ $data->content->palette_power_label->value ?? '' }}
                </div>
                <div class="color-grid" style="margin-bottom:28px;">
                    {{-- tooltips on each swatch --}}
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#C97B5A;" title="#C97B5A">
                        <div class="tooltip-box">#C97B5A · Terracotta</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#D4A856;" title="#D4A856">
                        <div class="tooltip-box">#D4A856 · Warm Mustard</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#8B6914;" title="#8B6914">
                        <div class="tooltip-box">#8B6914 · Deep Gold</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#556B2F;" title="#556B2F">
                        <div class="tooltip-box">#556B2F · Dark Olive</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#B8632A;" title="#B8632A">
                        <div class="tooltip-box">#B8632A · Burnt Orange</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#8B4513;" title="#8B4513">
                        <div class="tooltip-box">#8B4513 · Rich Brown</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#C4844A;" title="#C4844A">
                        <div class="tooltip-box">#C4844A · Warm Camel</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#6B4226;" title="#6B4226">
                        <div class="tooltip-box">#6B4226 · Deep Cognac</div>
                    </div>
                </div>
                <div class="swatch-strip" style="height:14px;border-radius:7px;margin-bottom:8px;">
                    <span style="background:#C97B5A;"></span>
                    <span style="background:#D4A856;"></span>
                    <span style="background:#8B6914;"></span>
                    <span style="background:#556B2F;"></span>
                    <span style="background:#B8632A;"></span>
                    <span style="background:#8B4513;"></span>
                    <span style="background:#C4844A;"></span>
                    <span style="background:#6B4226;"></span>
                </div>
                <div style="font-size:12px;color:#B0A49E;">{{ $data->content->palette_strip_label->value ?? '' }}</div>
            </div>
            <div>
                <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">
                    {{ $data->content->palette_neutral_label->value ?? '' }}
                </div>
                <div class="color-grid" style="margin-bottom:20px;">
                    <div class="tooltip-trigger cswatch" style="background:#C8A870;">
                        <div class="tooltip-box">#C8A870 · Warm Camel</div>
                    </div>
                    <div class="tooltip-trigger cswatch" style="background:#A88050;">
                        <div class="tooltip-box">#A88050 · Rich Tan</div>
                    </div>
                    <div class="tooltip-trigger cswatch" style="background:#886030;">
                        <div class="tooltip-box">#886030 · Deep Cognac</div>
                    </div>
                    <div class="tooltip-trigger cswatch" style="background:#684020;">
                        <div class="tooltip-box">#684020 · Dark Chestnut</div>
                    </div>
                </div>
                <p class="body-text" style="font-size:14px;">{{ $data->content->palette_neutral_desc->value ?? '' }}</p>
            </div>
        </div>
    </section>

    <!-- YOUR FEATURES (unisex) -->
    <section class="season-section-alt">
        <span class="lbl" style="color:#C47838;">{{ $data->content->features_label->value ?? '' }}</span>
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
        <div style="margin-top:32px;padding:24px;background:#C4783814;border:1px solid #C4783833;border-radius:16px;">
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
            <span class="lbl" style="color:#C47838;">{{ $data->content->makeup_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:12px;">{{ $data->content->makeup_title->value ?? '' }}</h2>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">{{ $data->content->makeup_desc->value ?? '' }}</p>
            <div class="makeup-row">
                {{-- makeup items with tooltips --}}
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#C47A5A;"></div>
                    <div class="makeup-label">Warm Terracotta</div>
                    <div class="makeup-type">Foundation</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm, golden
                        foundation that matches your earthy richness.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#C06040;"></div>
                    <div class="makeup-label">Brick Red Blush</div>
                    <div class="makeup-type">Blush</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm, earthy brick
                        blush for a natural flush.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#B04A28;"></div>
                    <div class="makeup-label">Rich Burnt Red</div>
                    <div class="makeup-type">Lips</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Your signature lip
                        — deep, warm, and earthy red.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#8B6914;"></div>
                    <div class="makeup-label">Deep Gold</div>
                    <div class="makeup-type">Eyes</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Rich gold shadow
                        that enhances your warm eyes.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#8B4513;"></div>
                    <div class="makeup-label">Rich Brown</div>
                    <div class="makeup-type">Eyes</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm brown shadow
                        for depth and definition.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#B85A30;"></div>
                    <div class="makeup-label">Warm Copper</div>
                    <div class="makeup-type">Eyes</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm copper for a
                        glowing, earthy eye look.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#C07040;"></div>
                    <div class="makeup-label">Terracotta</div>
                    <div class="makeup-type">Blush</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Terracotta blush
                        that complements your warm skin.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#C89040;"></div>
                    <div class="makeup-label">Bronze Gold</div>
                    <div class="makeup-type">Highlighter</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm bronze-gold
                        highlight for a radiant glow.</div>
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
                    <span class="lbl" style="color:#C47838;">{{ $data->content->wardrobe_women_label->value ?? '' }}</span>
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
                            <div class="avoid-swatch" style="background:#FF69B4;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_cool_pink->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_cool_pink_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_cool_pink_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#87CEEB;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_cool_blue->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_cool_blue_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_cool_blue_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#E0E0E0;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_cool_grey->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_cool_grey_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_cool_grey_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#000080;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_navy->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_navy_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_navy_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#F0F0F0;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_cool_white->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_cool_white_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_cool_white_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#C0C0C0;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_silver->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_silver_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_silver_tooltip->value ?? '' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Outfit Inspiration (Women) -->
        <section class="season-section">
            <span class="lbl" style="color:#C47838;">{{ $data->content->outfit_women_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:36px;">{{ $data->content->outfit_women_title->value ?? '' }}</h2>
            <div class="outfit-grid">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#C97B5A,#A05030);">🍂</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_women_1_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_women_1_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_women_1_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->outfit_women_1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#D4A856,#B08030);">🌾</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_women_2_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_women_2_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_women_2_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->outfit_women_2_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#556B2F,#3D5020);">🌿</div>
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
            <span class="lbl" style="color:#C47838;">{{ $data->content->grooming_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:12px;">{{ $data->content->grooming_title->value ?? '' }}</h2>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">{{ $data->content->grooming_desc->value ?? '' }}</p>
            <div class="makeup-row">
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#C47A5A;"></div>
                    <div class="makeup-label">Warm Golden Moisturizer</div>
                    <div class="makeup-type">Skincare</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm, golden
                        hydration that enhances your skin's natural warmth.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#B07040;"></div>
                    <div class="makeup-label">Warm Tan Concealer</div>
                    <div class="makeup-type">Concealer</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm-toned
                        concealer for a natural finish.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#D4A060;"></div>
                    <div class="makeup-label">Golden SPF</div>
                    <div class="makeup-type">Sunscreen</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Tinted SPF with a
                        warm, golden finish.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#A06030;"></div>
                    <div class="makeup-label">Warm Brown Beard Oil</div>
                    <div class="makeup-type">Facial hair care</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm, rich beard
                        oil that complements your colouring.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#C08040;"></div>
                    <div class="makeup-label">Honey Brown Pomade</div>
                    <div class="makeup-type">Hair Styling</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm, honey-toned
                        pomade for a natural hold.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#9E7A50;"></div>
                    <div class="makeup-label">Warm Taupe Brow Gel</div>
                    <div class="makeup-type">Brows</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm taupe to
                        define brows naturally.</div>
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
                    <span class="lbl" style="color:#C47838;">{{ $data->content->wardrobe_men_label->value ?? '' }}</span>
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
                            <div class="avoid-swatch" style="background:#FF69B4;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_cool_pink->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_cool_pink_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_cool_pink_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#87CEEB;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_cool_blue->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_cool_blue_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_cool_blue_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#E0E0E0;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_cool_grey->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_cool_grey_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_cool_grey_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#000080;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_navy->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_navy_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_navy_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#F0F0F0;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_cool_white->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_cool_white_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_cool_white_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#C0C0C0;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_silver->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_silver_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_silver_tooltip->value ?? '' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Outfit Inspiration (Men) -->
        <section class="season-section">
            <span class="lbl" style="color:#C47838;">{{ $data->content->outfit_men_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:36px;">{{ $data->content->outfit_men_title->value ?? '' }}</h2>
            <div class="outfit-grid">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#C97B5A,#A05030);">🍂</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_men_1_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_men_1_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_men_1_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->outfit_men_1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#D4A856,#B08030);">🌾</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_men_2_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_men_2_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_men_2_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->outfit_men_2_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#556B2F,#3D5020);">🌿</div>
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
            <span class="lbl" style="color:#C47838;">{{ $data->content->neutral_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:12px;">{{ $data->content->neutral_title->value ?? '' }}</h2>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">{{ $data->content->neutral_desc->value ?? '' }}</p>
            <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:20px;margin-bottom:32px;">
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">🍂</div>
                    <div class="fi-title">{{ $data->content->neutral_tip1_title->value ?? '' }}</div>
                    <div class="fi-desc" style="font-size:14px;">{{ $data->content->neutral_tip1_desc->value ?? '' }}</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">{{ $data->content->neutral_tip1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">🌾</div>
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
                    <div style="font-size:24px;margin-bottom:8px;">🌰</div>
                    <div class="fi-title">{{ $data->content->neutral_tip4_title->value ?? '' }}</div>
                    <div class="fi-desc" style="font-size:14px;">{{ $data->content->neutral_tip4_desc->value ?? '' }}</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">{{ $data->content->neutral_tip4_tooltip->value ?? '' }}</div>
                </div>
            </div>
            <div class="outfit-grid" style="margin-bottom:20px;">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#C97B5A,#A05030);">🍂</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->neutral_outfit1_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->neutral_outfit1_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->neutral_outfit1_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->neutral_outfit1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#D4A856,#B08030);">🌾</div>
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

    <!-- CELEBRITIES (expanded with male examples) -->
    <section class="season-section-alt">
        <span class="lbl" style="color:#C47838;">{{ $data->content->celebrities_label->value ?? '' }}</span>
        <h2 class="h2" style="margin-bottom:36px;">{{ $data->content->celebrities_title->value ?? '' }}</div>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(180px,1fr));gap:24px;">
            {{-- celebrity cards with tooltips --}}
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#C97B5A;">🌟</div>
                <div class="celeb-name">Julianne Moore</div>
                <div class="celeb-note">Classic warm autumn (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her rich auburn hair
                    and warm skin define True Autumn.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#D4A856;">💫</div>
                <div class="celeb-name">Marcia Cross</div>
                <div class="celeb-note">Rich auburn warmth (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her warm red hair and
                    golden skin are quintessential True Autumn.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#C4844A;">🎬</div>
                <div class="celeb-name">Emma Stone</div>
                <div class="celeb-note">Warm autumn colouring (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her warm, glowing
                    features are a perfect True Autumn match.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#B8632A;">🏆</div>
                <div class="celeb-name">Bryce Dallas Howard</div>
                <div class="celeb-note">Deep warm autumn (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her deep warm
                    colouring is classic True Autumn.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#C97B5A;">🎸</div>
                <div class="celeb-name">Eddie Redmayne</div>
                <div class="celeb-note">Warm autumn depth (he/him)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">His warm, earthy
                    features suit True Autumn perfectly.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#D4A856;">🎭</div>
                <div class="celeb-name">Jake Gyllenhaal</div>
                <div class="celeb-note">Earthly warm autumn (he/him)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">His warm olive skin
                    and earthy tones define True Autumn.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#C4844A;">🎨</div>
                <div class="celeb-name">Jessica Chastain</div>
                <div class="celeb-note">Rich warm red hair (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her warm red hair and
                    peachy skin are iconic True Autumn.</div>
            </div>
        </div>
    </section>

    <!-- NAV BETWEEN SEASONS -->
    <div style="padding:40px 6%;display:flex;justify-content:space-between;align-items:center;border-top:1px solid #E8DDD6;gap:20px;flex-wrap:wrap;">
        <a class="btn btn-outline" style="color:#2C2420;border-color:#E8DDD6;"
            href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">{{ $data->content->nav_all->value ?? '' }}</a>
        <div style="display:flex;gap:8px;flex-wrap:wrap;">
            <a class="btn btn-outline" style="color:#C47838;border-color:#C4783844;font-size:13px;"
                href="{{ route('show.seasons.custom_pages', ['slug' => 'soft-autumn']) }}">{{ $data->content->nav_prev->value ?? '' }}</a>
            <a class="btn btn-outline" style="color:#C47838;border-color:#C4783844;font-size:13px;"
                href="{{ route('show.seasons.custom_pages', ['slug' => 'dark-autumn']) }}">{{ $data->content->nav_adjacent->value ?? '' }}</a>
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
