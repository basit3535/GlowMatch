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
                <span class="sp-season-type"
                    style="color:#D4714A;">{{ $data->content->season_hero_eyebrow_label->value ?? '' }}</span>
            </div>
            <h1 class="sp-title" style="font-size:clamp(52px,7vw,88px);">{{ $data->content->season_hero_title->value ?? '' }}
            </h1>
            <div class="sp-tagline" style="color:#3C180066;">{{ $data->content->season_hero_tagline->value ?? '' }}</div>
            <p class="sp-desc" style="color:#3C180088;">{{ $data->content->season_hero_desc->value ?? '' }}</p>
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
                <a class="btn btn-white"
                    href="{{ route('show.custom_pages', ['slug' => '12-colour-seasons']) }}"">{{ $data->content->season_hero_btn_all->value ?? '' }}</a>
                <a class="btn btn-outline" style="color:#3C1800;border-color:#3C180044;"
                    href="{{ route('show.custom_pages', ['slug' => 'color-analysis-by-season']) }}">{{ $data->content->season_hero_btn_quiz->value ?? '' }}</a>
            </div>
        </div>
        <div class="sp-hero-visual">
            <div class="sp-visual-main" style="background:linear-gradient(145deg,#FFD700,#FFA500);">🌻</div>
            <div class="sp-visual-badges">
                {{-- tooltips on badges --}}
                <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
                    <div class="sp-badge-icon">{{ $data->content->season_badge1_icon->value ?? '' }}</div>
                    <div>
                        <div class="sp-badge-title" style="color:#3C1800;">
                            {{ $data->content->season_badge1_title->value ?? '' }}</div>
                        <div class="sp-badge-sub" style="color:#3C1800;">
                            {{ $data->content->season_badge1_sub->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->season_badge1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
                    <div class="sp-badge-icon">{{ $data->content->season_badge2_icon->value ?? '' }}</div>
                    <div>
                        <div class="sp-badge-title" style="color:#3C1800;">
                            {{ $data->content->season_badge2_title->value ?? '' }}</div>
                        <div class="sp-badge-sub" style="color:#3C1800;">
                            {{ $data->content->season_badge2_sub->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->season_badge2_tooltip->value ?? '' }}</div>
                </div>
            </div>
        </div>
    </section>

    <!-- PALETTE (unisex) -->
    <section class="season-section">
        <span class="lbl" style="color:#D4714A;">{{ $data->content->palette_label->value ?? '' }}</span>
        <h2 class="h2" style="margin-bottom:12px;">{{ $data->content->palette_title->value ?? '' }}</div>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">
                {{ $data->content->palette_desc->value ?? '' }}</p>
            <div class="two-col">
                <div>
                    <div
                        style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">
                        {{ $data->content->palette_power_label->value ?? '' }}
                    </div>
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
                    <div style="font-size:12px;color:#B0A49E;">{{ $data->content->palette_strip_label->value ?? '' }}
                    </div>
                </div>
                <div>
                    <div
                        style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">
                        {{ $data->content->palette_neutral_label->value ?? '' }}
                    </div>
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
                    <p class="body-text" style="font-size:14px;">{{ $data->content->palette_neutral_desc->value ?? '' }}
                    </p>
                </div>
            </div>
    </section>

    <!-- YOUR FEATURES (unisex) -->
    <section class="season-section-alt">
        <span class="lbl" style="color:#D4714A;">{{ $data->content->features_label->value ?? '' }}</span>
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
        <div style="margin-top:32px;padding:24px;background:#D4714A14;border:1px solid #D4714A33;border-radius:16px;">
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
            <span class="lbl" style="color:#D4714A;">{{ $data->content->makeup_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:12px;">{{ $data->content->makeup_title->value ?? '' }}</h2>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">
                {{ $data->content->makeup_desc->value ?? '' }}</p>
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
                        style="color:#D4714A;">{{ $data->content->wardrobe_women_label->value ?? '' }}</span>
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
                            <div class="avoid-swatch" style="background:#4B0082;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_purple->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_purple_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_purple_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#696969;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_cool_grey->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_cool_grey_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_cool_grey_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FF1493;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_hot_pink->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_hot_pink_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_hot_pink_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#000000;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_black->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_black_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_black_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#483D8B;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_dark_slate->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_dark_slate_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_dark_slate_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#2F4F4F;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_dark_teal->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_dark_teal_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_dark_teal_tooltip->value ?? '' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Outfit Inspiration (Women) -->
        <section class="season-section">
            <span class="lbl" style="color:#D4714A;">{{ $data->content->outfit_women_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:36px;">{{ $data->content->outfit_women_title->value ?? '' }}</h2>
            <div class="outfit-grid">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#FFD700,#FFA500);">🌞</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_women_1_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_women_1_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_women_1_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->outfit_women_1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#FF7F50,#FF6347);">🌺</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_women_2_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_women_2_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_women_2_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->outfit_women_2_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#90EE90,#6BBF6B);">🌿</div>
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
            <span class="lbl" style="color:#D4714A;">{{ $data->content->grooming_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:12px;">{{ $data->content->grooming_title->value ?? '' }}</h2>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">
                {{ $data->content->grooming_desc->value ?? '' }}</p>
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
                        style="color:#D4714A;">{{ $data->content->wardrobe_men_label->value ?? '' }}</span>
                    <h2 class="h2" style="margin-bottom:20px;">{{ $data->content->wardrobe_men_title->value ?? '' }}
                    </h2>
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
                            <div class="avoid-swatch" style="background:#4B0082;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_purple->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_purple_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_purple_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#696969;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_cool_grey->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_cool_grey_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_cool_grey_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#000000;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_black->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_black_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_black_tooltip->value ?? '' }}</div>
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
                                <div class="avoid-name">{{ $data->content->avoid_silver_tooltip->value ?? '' }}</div>
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
            <span class="lbl" style="color:#D4714A;">{{ $data->content->outfit_men_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:36px;">{{ $data->content->outfit_men_title->value ?? '' }}</h2>
            <div class="outfit-grid">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#FFD700,#FFA500);">🌞</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_men_1_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_men_1_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_men_1_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->outfit_men_1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#FF7F50,#FF6347);">🌺</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_men_2_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_men_2_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_men_2_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->outfit_men_2_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#90EE90,#6BBF6B);">🌿</div>
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
            <span class="lbl" style="color:#D4714A;">{{ $data->content->neutral_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:12px;">{{ $data->content->neutral_title->value ?? '' }}</h2>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">
                {{ $data->content->neutral_desc->value ?? '' }}</p>
            <div
                style="display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:20px;margin-bottom:32px;">
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">🌞</div>
                    <div class="fi-title">{{ $data->content->neutral_tip1_title->value ?? '' }}</div>
                    <div class="fi-desc" style="font-size:14px;">{{ $data->content->neutral_tip1_desc->value ?? '' }}
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">
                        {{ $data->content->neutral_tip1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">🌺</div>
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
                    <div style="font-size:24px;margin-bottom:8px;">🌸</div>
                    <div class="fi-title">{{ $data->content->neutral_tip4_title->value ?? '' }}</div>
                    <div class="fi-desc" style="font-size:14px;">{{ $data->content->neutral_tip4_desc->value ?? '' }}
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">
                        {{ $data->content->neutral_tip4_tooltip->value ?? '' }}</div>
                </div>
            </div>
            <div class="outfit-grid" style="margin-bottom:20px;">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#FFD700,#FFA500);">🌞</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->neutral_outfit1_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->neutral_outfit1_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->neutral_outfit1_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->neutral_outfit1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#FF7F50,#FF6347);">🌺</div>
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
        <span class="lbl" style="color:#D4714A;">{{ $data->content->celebrities_label->value ?? '' }}</span>
        <h2 class="h2" style="margin-bottom:36px;">{{ $data->content->celebrities_title->value ?? '' }}</h2>
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
            href="{{ route('show.custom_pages', ['slug' => '12-colour-seasons']) }}"">{{ $data->content->nav_all->value ?? '' }}</a>
        <div style="display:flex;gap:8px;flex-wrap:wrap;">
            <a class="btn btn-outline" style="color:#D4714A;border-color:#D4714A44;font-size:13px;"
                href="{{ route('show.seasons.custom_pages', ['slug' => 'light-spring']) }}">{{ $data->content->nav_prev->value ?? '' }}</a>
            <a class="btn btn-outline" style="color:#D4714A;border-color:#D4714A44;font-size:13px;"
                href="{{ route('show.seasons.custom_pages', ['slug' => 'true-summer']) }}">{{ $data->content->nav_adjacent->value ?? '' }}</a>
        </div>
    </div>

    <div class="footer-mini">
        <div class="fm-logo">Glow<em>Match</em></div>
        <div class="fm-links"><a
                href="{{ route('show.custom_pages', ['slug' => '12-colour-seasons']) }}"">{{ $data->content->footer_links->value ?? '' }}</a>
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
