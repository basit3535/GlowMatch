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
    <section class="season-page-hero" style="background:linear-gradient(145deg,#B8C8E0,#9AAAC8,#7A8AAC);color:#F8F4FF;">
        <div>
            <div class="sp-eyebrow">
                <div class="sp-line" style="background:#6880A8;"></div>
                <span class="sp-season-type"
                    style="color:#6880A8;">{{ $data->content->season_hero_eyebrow_label->value ?? '' }}</span>
            </div>
            <h1 class="sp-title" style="font-size:clamp(52px,7vw,88px);">{{ $data->content->season_hero_title->value ?? '' }}
            </h1>
            <div class="sp-tagline" style="color:#F8F4FF66;">{{ $data->content->season_hero_tagline->value ?? '' }}</div>
            <p class="sp-desc" style="color:#F8F4FF88;">{{ $data->content->season_hero_desc->value ?? '' }}</p>
            <div class="sp-palette-preview">
                {{-- tooltips on preview swatches --}}
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#C8A2C8;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#C8A2C8 · Lilac</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#8FA8C8;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#8FA8C8 · Dusty Blue</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#C9A0DC;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#C9A0DC · Soft Lavender</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#B0C4DE;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#B0C4DE · Powder Blue</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#D8BFD8;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#D8BFD8 · Thistle</div>
                </div>
                <div class="tooltip-trigger">
                    <div class="sp-swatch" style="background:#88A4BC;border:2.5px solid rgba(255,255,255,.25);"></div>
                    <div class="tooltip-box">#88A4BC · Cool Slate</div>
                </div>
            </div>
            <div style="display:flex;gap:12px;flex-wrap:wrap;">
                <a class="btn btn-white"
                    href="{{ route('show.seasons_page') }}">{{ $data->content->season_hero_btn_all->value ?? '' }}</a>
                <a class="btn btn-outline" style="color:#F8F4FF;border-color:#F8F4FF44;"
                    href="{{ route('show.color_analysis_page') }}">{{ $data->content->season_hero_btn_quiz->value ?? '' }}</a>
            </div>
        </div>
        <div class="sp-hero-visual">
            <div class="sp-visual-main" style="background:linear-gradient(145deg,#B0C0D8,#9090B8);">🌺</div>
            <div class="sp-visual-badges">
                {{-- tooltips on badges --}}
                <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
                    <div class="sp-badge-icon">{{ $data->content->season_badge1_icon->value ?? '' }}</div>
                    <div>
                        <div class="sp-badge-title" style="color:#F8F4FF;">
                            {{ $data->content->season_badge1_title->value ?? '' }}</div>
                        <div class="sp-badge-sub" style="color:#F8F4FF;">
                            {{ $data->content->season_badge1_sub->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->season_badge1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
                    <div class="sp-badge-icon">{{ $data->content->season_badge2_icon->value ?? '' }}</div>
                    <div>
                        <div class="sp-badge-title" style="color:#F8F4FF;">
                            {{ $data->content->season_badge2_title->value ?? '' }}</div>
                        <div class="sp-badge-sub" style="color:#F8F4FF;">
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
        <span class="lbl" style="color:#6880A8;">{{ $data->content->palette_label->value ?? '' }}</span>
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
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#C8A2C8;" title="#C8A2C8">
                        <div class="tooltip-box">#C8A2C8 · Lilac</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#8FA8C8;" title="#8FA8C8">
                        <div class="tooltip-box">#8FA8C8 · Dusty Blue</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#C9A0DC;" title="#C9A0DC">
                        <div class="tooltip-box">#C9A0DC · Soft Lavender</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#B0C4DE;" title="#B0C4DE">
                        <div class="tooltip-box">#B0C4DE · Powder Blue</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#D8BFD8;" title="#D8BFD8">
                        <div class="tooltip-box">#D8BFD8 · Thistle</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#88A4BC;" title="#88A4BC">
                        <div class="tooltip-box">#88A4BC · Cool Slate</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#A0B8B0;" title="#A0B8B0">
                        <div class="tooltip-box">#A0B8B0 · Soft Sage</div>
                    </div>
                    <div class="tooltip-trigger cswatch cswatch-lg" style="background:#BCA8C8;" title="#BCA8C8">
                        <div class="tooltip-box">#BCA8C8 · Mauve</div>
                    </div>
                </div>
                <div class="swatch-strip" style="height:14px;border-radius:7px;margin-bottom:8px;">
                    <span style="background:#C8A2C8;"></span>
                    <span style="background:#8FA8C8;"></span>
                    <span style="background:#C9A0DC;"></span>
                    <span style="background:#B0C4DE;"></span>
                    <span style="background:#D8BFD8;"></span>
                    <span style="background:#88A4BC;"></span>
                    <span style="background:#A0B8B0;"></span>
                    <span style="background:#BCA8C8;"></span>
                </div>
                <div style="font-size:12px;color:#B0A49E;">{{ $data->content->palette_strip_label->value ?? '' }}</div>
            </div>
            <div>
                <div
                    style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">
                    {{ $data->content->palette_neutral_label->value ?? '' }}
                </div>
                <div class="color-grid" style="margin-bottom:20px;">
                    <div class="tooltip-trigger cswatch" style="background:#E8E4F0;">
                        <div class="tooltip-box">#E8E4F0 · Soft Grey-Lavender</div>
                    </div>
                    <div class="tooltip-trigger cswatch" style="background:#D0CCE0;">
                        <div class="tooltip-box">#D0CCE0 · Cool Greige</div>
                    </div>
                    <div class="tooltip-trigger cswatch" style="background:#B8B4CC;">
                        <div class="tooltip-box">#B8B4CC · Dusty Mauve</div>
                    </div>
                    <div class="tooltip-trigger cswatch" style="background:#A0A0B8;">
                        <div class="tooltip-box">#A0A0B8 · Powder Grey</div>
                    </div>
                </div>
                <p class="body-text" style="font-size:14px;">{{ $data->content->palette_neutral_desc->value ?? '' }}</p>
            </div>
        </div>
    </section>

    <!-- YOUR FEATURES (unisex) -->
    <section class="season-section-alt">
        <span class="lbl" style="color:#6880A8;">{{ $data->content->features_label->value ?? '' }}</span>
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
        <div style="margin-top:32px;padding:24px;background:#6880A814;border:1px solid #6880A833;border-radius:16px;">
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
            <span class="lbl" style="color:#6880A8;">{{ $data->content->makeup_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:12px;">{{ $data->content->makeup_title->value ?? '' }}</h2>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">
                {{ $data->content->makeup_desc->value ?? '' }}</p>
            <div class="makeup-row">
                {{-- makeup items with tooltips --}}
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#F0E4EC;"></div>
                    <div class="makeup-label">Cool Rose Ivory</div>
                    <div class="makeup-type">Foundation</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Cool, rosy base
                        that matches your delicate skin.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#D8A8BC;"></div>
                    <div class="makeup-label">Dusty Rose</div>
                    <div class="makeup-type">Blush</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Soft, dusty rose
                        blush for a natural flush.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#C090A8;"></div>
                    <div class="makeup-label">Muted Berry</div>
                    <div class="makeup-type">Lips</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Soft berry lip —
                        muted and cool.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#A09AB8;"></div>
                    <div class="makeup-label">Dusty Lavender</div>
                    <div class="makeup-type">Eyes</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Soft lavender
                        shadow for a romantic look.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#8888A8;"></div>
                    <div class="makeup-label">Soft Mauve</div>
                    <div class="makeup-type">Eyes</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Muted mauve shadow
                        for definition without harshness.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#B8A8CC;"></div>
                    <div class="makeup-label">Blush Lilac</div>
                    <div class="makeup-type">Eyes</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Gentle lilac for a
                        soft, pretty look.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#D0B0C0;"></div>
                    <div class="makeup-label">Cool Petal</div>
                    <div class="makeup-type">Blush</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Petal-soft blush
                        in a cool tone.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#E0D8F0;"></div>
                    <div class="makeup-label">Lavender Shimmer</div>
                    <div class="makeup-type">Highlighter</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Cool lavender
                        highlight for a subtle glow.</div>
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
                        style="color:#6880A8;">{{ $data->content->wardrobe_women_label->value ?? '' }}</span>
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
                            <div class="avoid-swatch" style="background:#FF6600;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_orange->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_orange_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_orange_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FFD700;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_bright_yellow->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_bright_yellow_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_bright_yellow_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FF4500;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_red_orange->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_red_orange_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_red_orange_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#8B4513;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_warm_brown->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_warm_brown_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_warm_brown_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#006400;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_forest_green->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_forest_green_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_forest_green_tooltip->value ?? '' }}</div>
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
                    </div>
                </div>
            </div>
        </section>

        <!-- Outfit Inspiration (Women) -->
        <section class="season-section">
            <span class="lbl" style="color:#6880A8;">{{ $data->content->outfit_women_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:36px;">{{ $data->content->outfit_women_title->value ?? '' }}</h2>
            <div class="outfit-grid">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#D8BFD8,#C8A2C8);">🌸</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_women_1_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_women_1_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_women_1_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->outfit_women_1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#B0C4DE,#8FA8C8);">🕊️</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_women_2_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_women_2_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_women_2_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->outfit_women_2_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#C9A0DC,#B090C8);">💜</div>
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
            <span class="lbl" style="color:#6880A8;">{{ $data->content->grooming_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:12px;">{{ $data->content->grooming_title->value ?? '' }}</h2>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">
                {{ $data->content->grooming_desc->value ?? '' }}</p>
            <div class="makeup-row">
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#E8E0EC;"></div>
                    <div class="makeup-label">Cool Rose Moisturizer</div>
                    <div class="makeup-type">Skincare</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Cool, rose-tinted
                        hydration for a calm complexion.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#D0C4D8;"></div>
                    <div class="makeup-label">Neutral Beige Concealer</div>
                    <div class="makeup-type">Concealer</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Neutral concealer
                        that blends with your cool skin.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#D8D4E0;"></div>
                    <div class="makeup-label">Cool SPF</div>
                    <div class="makeup-type">Sunscreen</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Cool-toned SPF
                        that doesn't add warmth.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#A090A0;"></div>
                    <div class="makeup-label">Ash Brown Beard Oil</div>
                    <div class="makeup-type">Facial hair care</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Cool ash-brown oil
                        for a natural beard.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#B0A0B8;"></div>
                    <div class="makeup-label">Cool Taupe Pomade</div>
                    <div class="makeup-type">Hair Styling</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Cool taupe pomade
                        for a subtle hold.</div>
                </div>
                <div class="tooltip-trigger makeup-item">
                    <div class="makeup-swatch" style="background:#9890A0;"></div>
                    <div class="makeup-label">Muted Ash Brow Gel</div>
                    <div class="makeup-type">Brows</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Soft ash-gel for
                        natural brows.</div>
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
                        style="color:#6880A8;">{{ $data->content->wardrobe_men_label->value ?? '' }}</span>
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
                            <div class="avoid-swatch" style="background:#FF6600;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_orange->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_orange_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_orange_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FFD700;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_bright_yellow->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_bright_yellow_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_bright_yellow_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FF4500;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_red_orange->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_red_orange_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_red_orange_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#8B4513;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_warm_brown->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_warm_brown_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_warm_brown_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#006400;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_forest_green->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_forest_green_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">
                                {{ $data->content->avoid_forest_green_tooltip->value ?? '' }}</div>
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
                    </div>
                </div>
            </div>
        </section>

        <!-- Outfit Inspiration (Men) -->
        <section class="season-section">
            <span class="lbl" style="color:#6880A8;">{{ $data->content->outfit_men_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:36px;">{{ $data->content->outfit_men_title->value ?? '' }}</h2>
            <div class="outfit-grid">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#B0C0D8,#9090B8);">🌺</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_men_1_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_men_1_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_men_1_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->outfit_men_1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#B0C4DE,#8FA8C8);">🕊️</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_men_2_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_men_2_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_men_2_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->outfit_men_2_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#C9A0DC,#B090C8);">💜</div>
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
            <span class="lbl" style="color:#6880A8;">{{ $data->content->neutral_label->value ?? '' }}</span>
            <h2 class="h2" style="margin-bottom:12px;">{{ $data->content->neutral_title->value ?? '' }}</h2>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">
                {{ $data->content->neutral_desc->value ?? '' }}</p>
            <div
                style="display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:20px;margin-bottom:32px;">
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">🌸</div>
                    <div class="fi-title">{{ $data->content->neutral_tip1_title->value ?? '' }}</div>
                    <div class="fi-desc" style="font-size:14px;">{{ $data->content->neutral_tip1_desc->value ?? '' }}
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">
                        {{ $data->content->neutral_tip1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">💜</div>
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
                    <div style="font-size:24px;margin-bottom:8px;">🕊️</div>
                    <div class="fi-title">{{ $data->content->neutral_tip4_title->value ?? '' }}</div>
                    <div class="fi-desc" style="font-size:14px;">{{ $data->content->neutral_tip4_desc->value ?? '' }}
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">
                        {{ $data->content->neutral_tip4_tooltip->value ?? '' }}</div>
                </div>
            </div>
            <div class="outfit-grid" style="margin-bottom:20px;">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#B0C0D8,#9090B8);">🌺</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->neutral_outfit1_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->neutral_outfit1_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->neutral_outfit1_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">
                        {{ $data->content->neutral_outfit1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#C9A0DC,#B090C8);">💜</div>
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
        <span class="lbl" style="color:#6880A8;">{{ $data->content->celebrities_label->value ?? '' }}</span>
        <h2 class="h2" style="margin-bottom:36px;">{{ $data->content->celebrities_title->value ?? '' }}</h2>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(180px,1fr));gap:24px;">
            {{-- celebrity cards with tooltips --}}
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#C8A2C8;">👑</div>
                <div class="celeb-name">Princess Diana</div>
                <div class="celeb-note">Iconic cool summer (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her cool, romantic
                    beauty is quintessential True Summer.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#B0C4DE;">🌹</div>
                <div class="celeb-name">Kate Middleton</div>
                <div class="celeb-note">Cool summer elegance (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her elegant, cool
                    style is a modern True Summer icon.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#D8BFD8;">🌟</div>
                <div class="celeb-name">Jennifer Aniston</div>
                <div class="celeb-note">Soft cool features (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her soft, cool
                    colouring is True Summer.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#C9A0DC;">💫</div>
                <div class="celeb-name">Grace Kelly</div>
                <div class="celeb-note">Summer season classic (she/her)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her classic cool
                    beauty defines True Summer.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#B0C0D8;">🎸</div>
                <div class="celeb-name">Daniel Craig</div>
                <div class="celeb-note">Cool summer depth (he/him)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">His cool, intense
                    features are True Summer.</div>
            </div>
            <div class="tooltip-trigger celeb-card" style="position:relative;">
                <div class="celeb-avatar" style="background:#C8A2C8;">🎭</div>
                <div class="celeb-name">Jude Law</div>
                <div class="celeb-note">Soft cool colouring (he/him)</div>
                <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">His soft, cool
                    features are a great True Summer example.</div>
            </div>
        </div>
    </section>

    <!-- NAV BETWEEN SEASONS -->
    <div
        style="padding:40px 6%;display:flex;justify-content:space-between;align-items:center;border-top:1px solid #E8DDD6;gap:20px;flex-wrap:wrap;">
        <a class="btn btn-outline" style="color:#2C2420;border-color:#E8DDD6;"
            href="{{ route('show.seasons_page') }}">{{ $data->content->nav_all->value ?? '' }}</a>
        <div style="display:flex;gap:8px;flex-wrap:wrap;">
            <a class="btn btn-outline" style="color:#6880A8;border-color:#6880A844;font-size:13px;"
                href="{{ route('show.seasons.custom_pages', ['slug' => 'light-summer']) }}">{{ $data->content->nav_prev->value ?? '' }}</a>
            <a class="btn btn-outline" style="color:#6880A8;border-color:#6880A844;font-size:13px;"
                href="{{ route('show.seasons.custom_pages', ['slug' => 'soft-summer']) }}">{{ $data->content->nav_adjacent->value ?? '' }}</a>
        </div>
    </div>

    <div class="footer-mini">
        <div class="fm-logo">Glow<em>Match</em></div>
        <div class="fm-links"><a
                href="{{ route('show.seasons_page') }}">{{ $data->content->footer_links->value ?? '' }}</a>
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
