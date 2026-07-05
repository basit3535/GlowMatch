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
                <span class="sp-season-type" style="color:#4860C0;">{{ $data->content->season_hero_eyebrow_label->value ?? '' }}</span>
            </div>
            <h1 class="sp-title" style="font-size:clamp(52px,7vw,88px);">{{ $data->content->season_hero_title->value ?? '' }}</h1>
            <div class="sp-tagline" style="color:#C0C8E066;">{{ $data->content->season_hero_tagline->value ?? '' }}</div>
           <p class="sp-desc" style="color:#C0C8E088;">{{ $data->content->season_hero_desc->value ?? '' }}</p>
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
                <a class="btn btn-white" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">{{ $data->content->season_hero_btn_all->value ?? '' }}</a>
                <a class="btn btn-outline" style="color:#C0C8E0;border-color:#C0C8E044;"
                    href="{{ route('show.custom_pages', ['slug' => 'test']) }}">{{ $data->content->season_hero_btn_quiz->value ?? '' }}</a>
            </div>
        </div>
        <div class="sp-hero-visual">
            <div class="sp-visual-main" style="background:linear-gradient(145deg,#1C2848,#101828);">🌑</div>
            <div class="sp-visual-badges">
                {{-- tooltips on badges --}}
                <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
                    <div class="sp-badge-icon">{{ $data->content->season_badge1_icon->value ?? '' }}</div>
                    <div>
                        <div class="sp-badge-title" style="color:#C0C8E0;">{{ $data->content->season_badge1_title->value ?? '' }}</div>
                        <div class="sp-badge-sub" style="color:#C0C8E0;">{{ $data->content->season_badge1_sub->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->season_badge1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
                    <div class="sp-badge-icon">{{ $data->content->season_badge2_icon->value ?? '' }}</div>
                    <div>
                        <div class="sp-badge-title" style="color:#C0C8E0;">{{ $data->content->season_badge2_title->value ?? '' }}</div>
                        <div class="sp-badge-sub" style="color:#C0C8E0;">{{ $data->content->season_badge2_sub->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->season_badge2_tooltip->value ?? '' }}</div>
                </div>
            </div>
        </div>
    </section>

    <!-- PALETTE (unisex) -->
    <section class="season-section">
       <span class="lbl" style="color:#4860C0;">{{ $data->content->palette_label->value ?? '' }}</span>
        <div class="h2" style="margin-bottom:12px;">{{ $data->content->palette_title->value ?? '' }}</div>
        <p class="body-text" style="max-width:560px;margin-bottom:36px;">{{ $data->content->palette_desc->value ?? '' }}</p>
        <div class="two-col">
            <div>
                <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">
                    {{ $data->content->palette_power_label->value ?? '' }}
                </div>
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
                <div style="font-size:12px;color:#B0A49E;">{{ $data->content->palette_strip_label->value ?? '' }}</div>
            </div>
            <div>
                <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">
                    {{ $data->content->palette_neutral_label->value ?? '' }}
                </div>
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
                <p class="body-text" style="font-size:14px;">{{ $data->content->palette_neutral_desc->value ?? '' }}</p>
            </div>
        </div>
    </section>

    <!-- YOUR FEATURES (unisex) -->
    <section class="season-section-alt">
       <span class="lbl" style="color:#4860C0;">{{ $data->content->features_label->value ?? '' }}</span>
        <div class="h2" style="margin-bottom:40px;">{{ $data->content->features_title->value ?? '' }}</div>
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
        <div style="margin-top:32px;padding:24px;background:#4860C014;border:1px solid #4860C033;border-radius:16px;">
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
           <span class="lbl" style="color:#4860C0;">{{ $data->content->makeup_label->value ?? '' }}</span>
            <div class="h2" style="margin-bottom:12px;">{{ $data->content->makeup_title->value ?? '' }}</div>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">{{ $data->content->makeup_desc->value ?? '' }}</p>
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
                   <span class="lbl" style="color:#4860C0;">{{ $data->content->wardrobe_women_label->value ?? '' }}</span>
                    <div class="h2" style="margin-bottom:20px;">{{ $data->content->wardrobe_women_title->value ?? '' }}</div>
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
                            <div class="avoid-swatch" style="background:#FF6600;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_orange->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_orange_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_orange_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FFD700;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_yellow->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_yellow_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_yellow_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#C8A070;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_warm_brown->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_warm_brown_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_warm_brown_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#F5DEB3;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_warm_beige->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_warm_beige_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_warm_beige_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#90EE90;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_light_green->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_light_green_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_light_green_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FFC0CB;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_pastel_pink->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_pastel_pink_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_pastel_pink_tooltip->value ?? '' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Outfit Inspiration (Women) -->
        <section class="season-section">
            <span class="lbl" style="color:#4860C0;">{{ $data->content->outfit_women_label->value ?? '' }}</span>
            <div class="h2" style="margin-bottom:36px;">{{ $data->content->outfit_women_title->value ?? '' }}</div>
            <div class="outfit-grid">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#1C2848,#101828);">🌑</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_women_1_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_women_1_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_women_1_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->outfit_women_1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#3A1818,#2A1020);">💎</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_women_2_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_women_2_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_women_2_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->outfit_women_2_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#102030,#0A1828);">❄️</div>
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
            <span class="lbl" style="color:#4860C0;">{{ $data->content->grooming_label->value ?? '' }}</span>
            <div class="h2" style="margin-bottom:12px;">{{ $data->content->grooming_title->value ?? '' }}</div>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">{{ $data->content->grooming_desc->value ?? '' }}</p>
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
                    <span class="lbl" style="color:#4860C0;">{{ $data->content->wardrobe_men_label->value ?? '' }}</span>
                    <div class="h2" style="margin-bottom:20px;">{{ $data->content->wardrobe_men_title->value ?? '' }}</div>
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
                            <div class="avoid-swatch" style="background:#FF6600;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_orange->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_orange_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_orange_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FFD700;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_yellow->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_yellow_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_yellow_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#C8A070;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_warm_brown->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_warm_brown_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_warm_brown_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#F5DEB3;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_warm_beige->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_warm_beige_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_warm_beige_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#90EE90;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_light_green->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_light_green_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_light_green_tooltip->value ?? '' }}</div>
                        </div>
                        <div class="tooltip-trigger avoid-card" style="position:relative;">
                            <div class="avoid-swatch" style="background:#FFC0CB;"></div>
                            <div class="avoid-info">
                                <div class="avoid-name">{{ $data->content->avoid_pastel_pink->value ?? '' }}</div>
                                <div class="avoid-why">{{ $data->content->avoid_pastel_pink_why->value ?? '' }}</div>
                            </div>
                            <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">{{ $data->content->avoid_pastel_pink_tooltip->value ?? '' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Outfit Inspiration (Men) -->
        <section class="season-section">
            <span class="lbl" style="color:#4860C0;">{{ $data->content->outfit_men_label->value ?? '' }}</span>
            <div class="h2" style="margin-bottom:36px;">{{ $data->content->outfit_men_title->value ?? '' }}</div>
            <div class="outfit-grid">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#1C2848,#101828);">🌑</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_men_1_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_men_1_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_men_1_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->outfit_men_1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#3A1818,#2A1020);">💎</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->outfit_men_2_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->outfit_men_2_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->outfit_men_2_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->outfit_men_2_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#102030,#0A1828);">❄️</div>
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
            <span class="lbl" style="color:#4860C0;">{{ $data->content->neutral_label->value ?? '' }}</span>
            <div class="h2" style="margin-bottom:12px;">{{ $data->content->neutral_title->value ?? '' }}</div>
            <p class="body-text" style="max-width:560px;margin-bottom:36px;">{{ $data->content->neutral_desc->value ?? '' }}</p>
            <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:20px;margin-bottom:32px;">
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">🌑</div>
                    <div class="fi-title">{{ $data->content->neutral_tip1_title->value ?? '' }}</div>
                    <div class="fi-desc" style="font-size:14px;">{{ $data->content->neutral_tip1_desc->value ?? '' }}</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">{{ $data->content->neutral_tip1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger card" style="position:relative;">
                    <div style="font-size:24px;margin-bottom:8px;">💎</div>
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
                    <div style="font-size:24px;margin-bottom:8px;">❄️</div>
                    <div class="fi-title">{{ $data->content->neutral_tip4_title->value ?? '' }}</div>
                    <div class="fi-desc" style="font-size:14px;">{{ $data->content->neutral_tip4_desc->value ?? '' }}</div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">{{ $data->content->neutral_tip4_tooltip->value ?? '' }}</div>
                </div>
            </div>
            <div class="outfit-grid" style="margin-bottom:20px;">
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#1C2848,#101828);">🌑</div>
                    <div class="outfit-body">
                        <div class="outfit-occasion">{{ $data->content->neutral_outfit1_occasion->value ?? '' }}</div>
                        <div class="outfit-name">{{ $data->content->neutral_outfit1_name->value ?? '' }}</div>
                        <div class="outfit-items">{{ $data->content->neutral_outfit1_items->value ?? '' }}</div>
                    </div>
                    <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">{{ $data->content->neutral_outfit1_tooltip->value ?? '' }}</div>
                </div>
                <div class="tooltip-trigger outfit-card" style="position:relative;">
                    <div class="outfit-top" style="background:linear-gradient(145deg,#3A1818,#2A1020);">💎</div>
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
        <span class="lbl" style="color:#4860C0;">{{ $data->content->celebrities_label->value ?? '' }}</span>
        <div class="h2" style="margin-bottom:36px;">{{ $data->content->celebrities_title->value ?? '' }}</div>
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
    <div style="padding:40px 6%;display:flex;justify-content:space-between;align-items:center;border-top:1px solid #E8DDD6;gap:20px;flex-wrap:wrap;">
        <a class="btn btn-outline" style="color:#2C2420;border-color:#E8DDD6;"
            href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">{{ $data->content->nav_all->value ?? '' }}</a>
        <div style="display:flex;gap:8px;flex-wrap:wrap;">
            <a class="btn btn-outline" style="color:#4860C0;border-color:#4860C044;font-size:13px;"
                href="{{ route('show.seasons.custom_pages', ['slug' => 'true-winter']) }}">{{ $data->content->nav_prev->value ?? '' }}</a>
            <a class="btn btn-outline" style="color:#4860C0;border-color:#4860C044;font-size:13px;"
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
