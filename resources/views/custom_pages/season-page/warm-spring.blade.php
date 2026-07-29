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
    <section class="season-page-hero" style="background:linear-gradient(145deg,#E8A870,#D48048,#C06030);color:#fff;">
        <div>
            <div class="sp-eyebrow">
                <div class="sp-line" style="background:#B85A38;"></div>
                <span class="sp-season-type"
                    style="color:#B85A38;">{{ $data->content->season_hero_eyebrow_label->value ?? '' }}</span>
            </div>
            <h1 class="sp-title" style="font-size:clamp(52px,7vw,88px);">{{ $data->content->season_hero_title->value ?? '' }}
            </h1>
            <div class="sp-tagline" style="color:#ffffff66;">{{ $data->content->season_hero_tagline->value ?? '' }}</div>
            <p class="sp-desc" style="color:#ffffff88;">{{ $data->content->season_hero_desc->value ?? '' }}</p>
            <div class="sp-palette-preview">
                {{-- tooltips on preview swatches --}}
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#E8855A;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#E8855A · Warm Coral</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#D4A843;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#D4A843 · Golden Amber</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#8B7035;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#8B7035 · Warm Olive</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#C06030;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#C06030 · Burnt Orange</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#A0522D;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#A0522D · Rich Sienna</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#B8860B;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#B8860B · Dark Goldenrod</div>
                </div>
            </div>
            <div style="display:flex;gap:12px;flex-wrap:wrap;">
                <a class="btn btn-white"
                    href="{{ route('show.color_analysis_page') }}">{{ $data->content->season_hero_btn_all->value ?? '' }}</a>
                <a class="btn btn-outline" style="color:#fff;border-color:#ffffff44;"
                    href="{{ route('show.color_analysis_page') }}">{{ $data->content->season_hero_btn_quiz->value ?? '' }}</a>
            </div>
        </div>
        <div class="sp-hero-visual">
            <div class="sp-visual-main" style="background:linear-gradient(145deg,#D4A843,#C88030);">🔥</div>
            <div class="sp-visual-badges">
                {{-- tooltips on badges --}}
                <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
                    <div class="sp-badge-icon">{{ $data->content->season_badge1_icon->value ?? '' }}</div>
                    <div>
                        <div class="sp-badge-title" style="color:#fff;">
                            {{ $data->content->season_badge1_title->value ?? '' }}</div>
                        <div class="sp-badge-sub" style="color:#fff;">{{ $data->content->season_badge1_sub->value ?? '' }}
                        </div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->season_badge1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
                    <div class="sp-badge-icon">{{ $data->content->season_badge2_icon->value ?? '' }}</div>
                    <div>
                        <div class="sp-badge-title" style="color:#fff;">
                            {{ $data->content->season_badge2_title->value ?? '' }}</div>
                        <div class="sp-badge-sub" style="color:#fff;">{{ $data->content->season_badge2_sub->value ?? '' }}
                        </div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->season_badge2_tooltip->value ?? '' }}</div>
                </div>
            </div>
        </div>
    </section>

    <!-- PALETTE (unisex) -->
    <section class="season-section">
        <span class="lbl" style="color:#B85A38;">{{ $data->content->palette_label->value ?? '' }}</span>
        <h2 class="h2" style="margin-bottom:12px;">{{ $data->content->palette_title->value ?? '' }}</h2>
        <p class="body-text" style="max-width:560px;margin-bottom:36px;">{{ $data->content->palette_desc->value ?? '' }}
        </p>
        <div class="two-col">
            <div>
                <div
                    style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">
                    {{ $data->content->palette_power_label->value ?? '' }}
                </div>
                <div class="color-grid" style="margin-bottom:28px;">
                    {{-- tooltips on each swatch --}}
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#E8855A;" title="#E8855A">
                        <div class="tooltip-box">#E8855A · Warm Coral</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#D4A843;" title="#D4A843">
                        <div class="tooltip-box">#D4A843 · Golden Amber</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#8B7035;" title="#8B7035">
                        <div class="tooltip-box">#8B7035 · Warm Olive</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#C06030;" title="#C06030">
                        <div class="tooltip-box">#C06030 · Burnt Orange</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#A0522D;" title="#A0522D">
                        <div class="tooltip-box">#A0522D · Rich Sienna</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#B8860B;" title="#B8860B">
                        <div class="tooltip-box">#B8860B · Dark Goldenrod</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#CD853F;" title="#CD853F">
                        <div class="tooltip-box">#CD853F · Peru</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#8B6914;" title="#8B6914">
                        <div class="tooltip-box">#8B6914 · Olive Gold</div>
                    </div>
                </div>
                <div class="swatch-strip" style="height:14px;border-radius:7px;margin-bottom:8px;">
                    <span style="background:#E8855A;"></span>
                    <span style="background:#D4A843;"></span>
                    <span style="background:#8B7035;"></span>
                    <span style="background:#C06030;"></span>
                    <span style="background:#A0522D;"></span>
                    <span style="background:#B8860B;"></span>
                    <span style="background:#CD853F;"></span>
                    <span style="background:#8B6914;"></span>
                </div>
                <div style="font-size:12px;color:#B0A49E;">{{ $data->content->palette_strip_label->value ?? '' }}</div>
            </div>
            <div>
                <div
                    style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">
                    {{ $data->content->palette_neutral_label->value ?? '' }}
                </div>
                <div class="color-grid" style="margin-bottom:20px;">
                    <div class="tooltip-trigger cswatch" style="background:#D2B48C;">
                        <div class="tooltip-box">#D2B48C · Tan</div>
                    </div>
                    <div class="tooltip-trigger cswatch" style="background:#C8A050;">
                        <div class="tooltip-box">#C8A050 · Warm Camel</div>
                    </div>
                    <div class="tooltip-trigger cswatch" style="background:#A07840;">
                        <div class="tooltip-box">#A07840 · Golden Brown</div>
                    </div>
                    <div class="tooltip-trigger cswatch" style="background:#806030;">
                        <div class="tooltip-box">#806030 · Deep Cognac</div>
                    </div>
                </div>
                <p class="body-text" style="font-size:14px;">{{ $data->content->palette_neutral_desc->value ?? '' }}</p>
            </div>
        </div>
    </section>

    <!-- YOUR FEATURES (unisex) -->
    <section class="season-section-alt">
        <span class="lbl" style="color:#B85A38;">{{ $data->content->features_label->value ?? '' }}</span>
        <h2 class="h2" style="margin-bottom:40px;">{{ $data->content->features_title->value ?? '' }}</h2>
        <div class="three-col">
            <div class="tooltip-trigger card" style="position:relative;">
                <div style="font-size:32px;margin-bottom:14px;">🧴</div>
                <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">
                    {{ $data->content->features_skin_title->value ?? '' }}</div>
                <div class="body-text" style="font-size:14px;">{{ $data->content->features_skin_desc->value ?? '' }}
                </div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">
                    {{ $data->content->features_skin_tooltip->value ?? '' }}</div>
            </div>
            <div class="tooltip-trigger card" style="position:relative;">
                <div style="font-size:32px;margin-bottom:14px;">👁️</div>
                <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">
                    {{ $data->content->features_eyes_title->value ?? '' }}</div>
                <div class="body-text" style="font-size:14px;">{{ $data->content->features_eyes_desc->value ?? '' }}
                </div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">
                    {{ $data->content->features_eyes_tooltip->value ?? '' }}</div>
            </div>
            <div class="tooltip-trigger card" style="position:relative;">
                <div style="font-size:32px;margin-bottom:14px;">💇</div>
                <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">
                    {{ $data->content->features_hair_title->value ?? '' }}</div>
                <div class="body-text" style="font-size:14px;">{{ $data->content->features_hair_desc->value ?? '' }}
                </div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">
                    {{ $data->content->features_hair_tooltip->value ?? '' }}</div>
            </div>
        </div>
        <div style="margin-top:32px;padding:24px;background:#B85A3814;border:1px solid #B85A3833;border-radius:16px;">
            <div style="font-size:15px;font-weight:600;color:#2C2420;margin-bottom:6px;">
                {{ $data->content->features_effect_title->value ?? '' }}</div>
            <div class="body-text" style="font-size:14px;">{{ $data->content->features_effect_desc->value ?? '' }}</div>
        </div>
    </section>

    <!-- GENDER-SPECIFIC SECTIONS -->
    <div style="margin: 0 6%;">
        <div class="gender-toggle">
            <button class="gender-btn active"
                data-gender="women">{{ $data->content->gender_women->value ?? '' }}</button>
            <button class="gender-btn" data-gender="men">{{ $data->content->gender_men->value ?? '' }}</button>
            <button class="gender-btn" data-gender="neutral">{{ $data->content->gender_neutral->value ?? '' }}</button>
        </div>
    </div>

    <!-- WOMEN CONTENT -->
    <div id="women-content" class="gender-content active-gender">
        <!-- Makeup Guide (Women) -->
        <section class="season-section">
            <span class="lbl" style="color:#B85A38;">{{ $data->content->makeup_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:12px;">{{ $data->content->makeup_title->value ?? '' }}</h2>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">
                {{ $data->content->makeup_desc->value ?? '' }}</p>
            <div class="makeup-row">
                {{-- makeup items with tooltips --}}
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#C8A060;"></div>
                    <div class="makeup-label">Warm Golden Tan</div>
                    <div class="makeup-type">Foundation</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm, golden
                        foundation that matches your sun-kissed skin.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#C86040;"></div>
                    <div class="makeup-label">Terracotta Blush</div>
                    <div class="makeup-type">Blush</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm terracotta
                        blush for a natural, bronzed flush.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#B8502A;"></div>
                    <div class="makeup-label">Warm Brick</div>
                    <div class="makeup-type">Lips</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Rich, warm
                        brick-red lip for a bold statement.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#8B6914;"></div>
                    <div class="makeup-label">Deep Gold</div>
                    <div class="makeup-type">Eyes</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Golden shadow that
                        enhances your warm eyes.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#CD853F;"></div>
                    <div class="makeup-label">Warm Copper</div>
                    <div class="makeup-type">Eyes</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Copper shadow for
                        a radiant, metallic glow.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#E8904A;"></div>
                    <div class="makeup-label">Amber Coral</div>
                    <div class="makeup-type">Lips</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm amber-coral
                        lip for a fresh, vibrant look.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#B87040;"></div>
                    <div class="makeup-label">Deep Peach</div>
                    <div class="makeup-type">Blush</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Deep peach blush
                        for a warm, healthy glow.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#C8A040;"></div>
                    <div class="makeup-label">Antique Gold</div>
                    <div class="makeup-type">Highlighter</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Antique gold
                        highlight for a sophisticated sheen.</div>
                </div>
            </div>
            <div class="two-col" style="margin-top:28px;display:grid;gap:16px;">
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">
                        {{ $data->content->makeup_foundation_label->value ?? '' }}</div>
                    <div class="body-text" style="font-size:14px;">
                        {{ $data->content->makeup_foundation_desc->value ?? '' }}</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->makeup_foundation_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">
                        {{ $data->content->makeup_rule_label->value ?? '' }}</div>
                    <div class="body-text" style="font-size:14px;">{{ $data->content->makeup_rule_desc->value ?? '' }}
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->makeup_rule_tooltip->value ?? '' }}</div>
                </div>
            </div>
        </section>

        <!-- Wardrobe Tips (Women) -->
        <section class="season-section-alt">
            <div class="two-col">
                <div>
                    <span class="lbl"
                        style="color:#B85A38;">{{ $data->content->wardrobe_women_label->value ?? '' }}</span>
                    <h2 class="h2" style="margin-bottom:20px;">
                        {{ $data->content->wardrobe_women_title->value ?? '' }}</h2>
                    <div class="feature-row">
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">01</div>
                            <div>
                                <div class="fi-title">{{ $data->content->wardrobe_women_tip1_title->value ?? '' }}</div>
                                <div class="fi-desc">{{ $data->content->wardrobe_women_tip1_desc->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">
                                {{ $data->content->wardrobe_women_tip1_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">02</div>
                            <div>
                                <div class="fi-title">{{ $data->content->wardrobe_women_tip2_title->value ?? '' }}</div>
                                <div class="fi-desc">{{ $data->content->wardrobe_women_tip2_desc->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">
                                {{ $data->content->wardrobe_women_tip2_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">03</div>
                            <div>
                                <div class="fi-title">{{ $data->content->wardrobe_women_tip3_title->value ?? '' }}</div>
                                <div class="fi-desc">{{ $data->content->wardrobe_women_tip3_desc->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">
                                {{ $data->content->wardrobe_women_tip3_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">04</div>
                            <div>
                                <div class="fi-title">{{ $data->content->wardrobe_women_tip4_title->value ?? '' }}</div>
                                <div class="fi-desc">{{ $data->content->wardrobe_women_tip4_desc->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">
                                {{ $data->content->wardrobe_women_tip4_tooltip->value ?? '' }}</div>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="lbl"
                        style="color:#7A6E68;margin-bottom:16px;display:block;">{{ $data->content->avoid_label->value ?? '' }}</span>
                    <div class="avoid-grid">
                        {{-- avoid cards with tooltips --}}
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#000080;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_navy->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_navy_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_navy_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#E0E0E0;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_cool_grey->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_cool_grey_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_cool_grey_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FF69B4;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_cool_pink->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_cool_pink_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_cool_pink_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#4B0082;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_violet->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_violet_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_violet_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#F0F0F0;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_icy_white->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_icy_white_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_icy_white_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#2F4F4F;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_dark_cool_green->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_dark_cool_green_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_dark_cool_green_tooltip->value ?? '' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Outfit Inspiration (Women) -->
        <section class="season-section">
            <span class="lbl" style="color:#B85A38;">{{ $data->content->outfit_women_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:36px;">{{ $data->content->outfit_women_title->value ?? '' }}</h2>
            <div class="outfit-grid">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#D4A843,#C06030);">🌾</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_women_1_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_women_1_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_women_1_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->outfit_women_1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#E8855A,#C06030);">🍊</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_women_2_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_women_2_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_women_2_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->outfit_women_2_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#8B7035,#A08030);">🌿</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_women_3_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_women_3_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_women_3_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->outfit_women_3_tooltip->value ?? '' }}</div>
                </div>
            </div>
        </section>
    </div>

    <!-- MEN CONTENT -->
    <div id="men-content" class="gender-content">
        <!-- Grooming & Skincare (Men) -->
        <section class="season-section">
            <span class="lbl" style="color:#B85A38;">{{ $data->content->grooming_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:12px;">{{ $data->content->grooming_title->value ?? '' }}</h2>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">
                {{ $data->content->grooming_desc->value ?? '' }}</p>
            <div class="makeup-row">
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#C8A060;"></div>
                    <div class="makeup-label">Warm Golden Moisturizer</div>
                    <div class="makeup-type">Skincare</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm, golden
                        hydration that enhances your natural glow.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#D4B06A;"></div>
                    <div class="makeup-label">Warm Tan Concealer</div>
                    <div class="makeup-type">Concealer</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm, tan-toned
                        concealer for a seamless finish.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#E8C080;"></div>
                    <div class="makeup-label">Golden SPF</div>
                    <div class="makeup-type">Sunscreen</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Tinted SPF with a
                        golden, sun-kissed finish.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#A07030;"></div>
                    <div class="makeup-label">Amber Beard Oil</div>
                    <div class="makeup-type">Facial hair care</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Rich amber oil for
                        a conditioned, warm beard.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#C08040;"></div>
                    <div class="makeup-label">Honey Brown Pomade</div>
                    <div class="makeup-type">Hair Styling</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Honey-brown pomade
                        for a warm, natural hold.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#9E7A50;"></div>
                    <div class="makeup-label">Warm Taupe Brow Gel</div>
                    <div class="makeup-type">Brows</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm taupe for
                        natural, defined brows.</div>
                </div>
            </div>
            <div class="two-col" style="margin-top:28px;display:grid;gap:16px;">
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">
                        {{ $data->content->grooming_skincare_title->value ?? '' }}</div>
                    <div class="body-text" style="font-size:14px;">
                        {{ $data->content->grooming_skincare_desc->value ?? '' }}</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->grooming_skincare_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">
                        {{ $data->content->grooming_facial_title->value ?? '' }}</div>
                    <div class="body-text" style="font-size:14px;">
                        {{ $data->content->grooming_facial_desc->value ?? '' }}</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->grooming_facial_tooltip->value ?? '' }}</div>
                </div>
            </div>
        </section>

        <!-- Wardrobe Tips (Men) -->
        <section class="season-section-alt">
            <div class="two-col">
                <div>
                    <span class="lbl"
                        style="color:#B85A38;">{{ $data->content->wardrobe_men_label->value ?? '' }}</span>
                    <h2 class="h2" style="margin-bottom:20px;">
                        {{ $data->content->wardrobe_men_title->value ?? '' }}</h2>
                    <div class="feature-row">
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">01</div>
                            <div>
                                <div class="fi-title">{{ $data->content->wardrobe_men_tip1_title->value ?? '' }}</div>
                                <div class="fi-desc">{{ $data->content->wardrobe_men_tip1_desc->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">
                                {{ $data->content->wardrobe_men_tip1_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">02</div>
                            <div>
                                <div class="fi-title">{{ $data->content->wardrobe_men_tip2_title->value ?? '' }}</div>
                                <div class="fi-desc">{{ $data->content->wardrobe_men_tip2_desc->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">
                                {{ $data->content->wardrobe_men_tip2_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">03</div>
                            <div>
                                <div class="fi-title">{{ $data->content->wardrobe_men_tip3_title->value ?? '' }}</div>
                                <div class="fi-desc">{{ $data->content->wardrobe_men_tip3_desc->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">
                                {{ $data->content->wardrobe_men_tip3_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger feature-item" style="position:relative;">
                            <div class="fi-num">04</div>
                            <div>
                                <div class="fi-title">{{ $data->content->wardrobe_men_tip4_title->value ?? '' }}</div>
                                <div class="fi-desc">{{ $data->content->wardrobe_men_tip4_desc->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">
                                {{ $data->content->wardrobe_men_tip4_tooltip->value ?? '' }}</div>
                        </div>
                    </div>
                </div>
                <div>
                    <span class="lbl"
                        style="color:#7A6E68;margin-bottom:16px;display:block;">{{ $data->content->avoid_label->value ?? '' }}</span>
                    <div class="avoid-grid">
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#000080;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_navy->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_navy_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_navy_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#E0E0E0;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_cool_grey->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_cool_grey_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_cool_grey_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FF69B4;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_cool_pink->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_cool_pink_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_cool_pink_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#4B0082;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_violet->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_violet_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_violet_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#F0F0F0;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_icy_white->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_icy_white_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_icy_white_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#2F4F4F;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_dark_cool_green->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_dark_cool_green_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_dark_cool_green_tooltip->value ?? '' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Outfit Inspiration (Men) -->
        <section class="season-section">
            <span class="lbl" style="color:#B85A38;">{{ $data->content->outfit_men_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:36px;">{{ $data->content->outfit_men_title->value ?? '' }}</h2>
            <div class="outfit-grid">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#D4A843,#C06030);">🌾</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_men_1_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_men_1_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_men_1_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->outfit_men_1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#E8855A,#C06030);">🍊</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_men_2_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_men_2_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_men_2_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->outfit_men_2_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#8B7035,#A08030);">🌿</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_men_3_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_men_3_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_men_3_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->outfit_men_3_tooltip->value ?? '' }}</div>
                </div>
            </div>
        </section>
    </div>

    <!-- GENDER-NEUTRAL CONTENT -->
    <div id="neutral-content" class="gender-content">
        <section class="season-section">
            <span class="lbl" style="color:#B85A38;">{{ $data->content->neutral_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:12px;">{{ $data->content->neutral_title->value ?? '' }}</h2>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">
                {{ $data->content->neutral_desc->value ?? '' }}</p>
            <div
                style="display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:20px;margin-bottom:32px;">
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">🍂</div>
                    <div class="fi-title">{{ $data->content->neutral_tip1_title->value ?? '' }}</div>
                    <div class="fi-desc" style="font-size:14px;">{{ $data->content->neutral_tip1_desc->value ?? '' }}
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">
                        {{ $data->content->neutral_tip1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">🍊</div>
                    <div class="fi-title">{{ $data->content->neutral_tip2_title->value ?? '' }}</div>
                    <div class="fi-desc" style="font-size:14px;">{{ $data->content->neutral_tip2_desc->value ?? '' }}
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">
                        {{ $data->content->neutral_tip2_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">⚜️</div>
                    <div class="fi-title">{{ $data->content->neutral_tip3_title->value ?? '' }}</div>
                    <div class="fi-desc" style="font-size:14px;">{{ $data->content->neutral_tip3_desc->value ?? '' }}
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">
                        {{ $data->content->neutral_tip3_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">🌿</div>
                    <div class="fi-title">{{ $data->content->neutral_tip4_title->value ?? '' }}</div>
                    <div class="fi-desc" style="font-size:14px;">{{ $data->content->neutral_tip4_desc->value ?? '' }}
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">
                        {{ $data->content->neutral_tip4_tooltip->value ?? '' }}</div>
                </div>
            </div>
            <div class="outfit-grid" style="margin-bottom:20px;">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#D4A843,#C06030);">🌾</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->neutral_outfit1_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->neutral_outfit1_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->neutral_outfit1_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->neutral_outfit1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#E8855A,#C06030);">🍊</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->neutral_outfit2_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->neutral_outfit2_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->neutral_outfit2_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->neutral_outfit2_tooltip->value ?? '' }}</div>
                </div>
            </div>
        </section>
    </div>

    <!-- CELEBRITIES (expanded with male examples) -->
    <section class="season-section-alt">
        <span class="lbl" style="color:#B85A38;">{{ $data->content->celebrities_label->value ?? '' }}</span>
        <h2 class="h2" style="margin-bottom:36px;">{{ $data->content->celebrities_title->value ?? '' }}</h2>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(180px,1fr));gap:24px;">
            {{-- celebrity cards with tooltips --}}
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#D4A843;">🌟</div>
                <div class="celeb-name">Jessica Alba</div>
                <div class="celeb-note">Warm golden depth (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her warm, golden
                    features are classic Warm Spring.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#C8A060;">💃</div>
                <div class="celeb-name">Jennifer Lopez</div>
                <div class="celeb-note">Rich warm colouring (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her rich, golden
                    warmth defines Warm Spring.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#C06030;">🎵</div>
                <div class="celeb-name">Beyoncé</div>
                <div class="celeb-note">Deep warm spring (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her deep golden
                    colouring is Warm Spring.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#B8860B;">🏆</div>
                <div class="celeb-name">Halle Berry</div>
                <div class="celeb-note">Warm golden features (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her golden warmth is
                    quintessential Warm Spring.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#D4A843;">🎸</div>
                <div class="celeb-name">Matthew McConaughey</div>
                <div class="celeb-note">Warm golden depth (he/him)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">His warm, sun-kissed
                    features are Warm Spring.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#C8A060;">🎭</div>
                <div class="celeb-name">Channing Tatum</div>
                <div class="celeb-note">Rich warm colouring (he/him)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">His rich, warm
                    features are a great Warm Spring example.</div>
            </div>
        </div>
    </section>

    <!-- NAV BETWEEN SEASONS -->
    <div
        style="padding:40px 6%;display:flex;justify-content:space-between;align-items:center;border-top:1px solid #E8DDD6;gap:20px;flex-wrap:wrap;">
        <a class="btn btn-outline" style="color:#2C2420;border-color:#E8DDD6;"
            href="{{ route('show.color_analysis_page') }}">{{ $data->content->nav_all->value ?? '' }}</a>
        <div style="display:flex;gap:8px;flex-wrap:wrap;">
            <a class="btn btn-outline" style="color:#B85A38;border-color:#B85A3844;font-size:13px;"
                href="{{ route('show.seasons.custom_pages', ['slug' => 'true-spring']) }}">{{ $data->content->nav_prev->value ?? '' }}</a>
            <a class="btn btn-outline" style="color:#B85A38;border-color:#B85A3844;font-size:13px;"
                href="{{ route('show.seasons.custom_pages', ['slug' => 'soft-autumn']) }}">{{ $data->content->nav_adjacent->value ?? '' }}</a>
        </div>
    </div>

    <div class="footer-mini">
        <div class="fm-logo">Glow<em>Match</em></div>
        <div class="fm-links"><a
                href="{{ route('show.color_analysis_page') }}">{{ $data->content->footer_links->value ?? '' }}</a>
        </div>
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
