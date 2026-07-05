@extends('layouts.app')
@section('content')
    <div class="page active" id="page-home">

        <!-- Hero -->
        <section class="hero">
            <div>
                <div class="hero-eyebrow">
                    <div class="hero-line"></div>
                    <span>{{ $data->content->hero_line->value ?? '' }}</span>
                </div>
                <h1 class="hero-h1">{!! $data->content->hero_h1->value ?? '' !!}</h1>
                <p class="hero-sub">{{ $data->content->hero_sub->value ?? '' }}</p>
                <div class="hero-btns">
                    <a class="btn-primary" href="{{ $data->content->hero_btn_url->value ?? '#' }}">
                        {{ $data->content->hero_btn_text->value ?? '' }}
                    </a>
                    <a class="btn-outline" href="{{ $data->content->hero_btn2_url->value ?? '#' }}">
                        {{ $data->content->hero_btn2_text->value ?? '' }}
                    </a>
                </div>
                <div class="hero-trust">
                    <div class="hero-avatars">
                        <span style="background:#F5C89C;color:#8B4A32;margin-left:0;">SA</span>
                        <span style="background:#D4A8C8;color:#5A2A4A;">MK</span>
                        <span style="background:#B8CCE4;color:#1A3A6B;">LP</span>
                        <span style="background:#C8E4B8;color:#1A4A1A;">RP</span>
                    </div>
                    <div class="hero-trust-text">
                        <strong>{{ $data->content->hero_trust_count->value ?? '' }}</strong>
                        {{ $data->content->hero_trust_label->value ?? '' }}
                    </div>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hv-card span2 c-autumn" style="color:#5C2A0E;">
                    <div class="hv-label">Your Colour Season</div>
                    <div class="hv-title">Warm Autumn ✦</div>
                    <div class="hv-swatches">
                        <div class="hv-dot" style="background:#C97B5A;"></div>
                        <div class="hv-dot" style="background:#D4A856;"></div>
                        <div class="hv-dot" style="background:#8B6914;"></div>
                        <div class="hv-dot" style="background:#556B2F;"></div>
                        <div class="hv-dot" style="background:#B8632A;"></div>
                    </div>
                    <div class="hv-bar">
                        <span style="background:#C97B5A;"></span><span style="background:#D4A856;"></span>
                        <span style="background:#8B6914;"></span><span style="background:#556B2F;"></span>
                        <span style="background:#B8632A;"></span><span style="background:#8B4513;"></span>
                    </div>
                </div>
                <div class="hv-card c-winter" style="color:#E8EDF5;">
                    <div class="hv-label">Cool</div>
                    <div class="hv-title" style="font-size:18px;">Winter</div>
                    <div class="hv-swatches" style="flex-wrap:wrap;">
                        <div class="hv-dot" style="background:#00008B;"></div>
                        <div class="hv-dot" style="background:#8B0000;"></div>
                        <div class="hv-dot" style="background:#4B0082;"></div>
                    </div>
                </div>
                <div class="hv-card c-summer" style="color:#1A2A3A;position:relative;">
                    <div class="hv-label">Cool</div>
                    <div class="hv-title" style="font-size:18px;">Summer</div>
                    <div class="hv-swatches">
                        <div class="hv-dot" style="background:#C8A2C8;"></div>
                        <div class="hv-dot" style="background:#8FA8C8;"></div>
                    </div>
                    <div class="floating-badge">
                        <div class="fb-icon">✨</div>
                        <div>
                            <div class="fb-text">96% Match</div>
                            <div class="fb-sub">Confidence score</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works -->
        <section class="section">
            <span class="section-label">{{ $data->content->hiw_label->value ?? '' }}</span>
            <h2 class="section-h2">{!! $data->content->hiw_h2->value ?? '' !!}</h2>
            <p class="section-sub">{{ $data->content->hiw_sub->value ?? '' }}</p>
            <div class="hiw-grid">
                <div class="hiw-card">
                    <div class="hiw-num">{{ $data->content->hiw_step1_num->value ?? '' }}</div>
                    <div class="hiw-icon-wrap" style="background:var(--blush);">{{ $data->content->hiw_step1_icon->value ?? '' }}</div>
                    <div class="hiw-title">{{ $data->content->hiw_step1_title->value ?? '' }}</div>
                    <div class="hiw-desc">{{ $data->content->hiw_step1_desc->value ?? '' }}</div>
                </div>
                <div class="hiw-card">
                    <div class="hiw-num">{{ $data->content->hiw_step2_num->value ?? '' }}</div>
                    <div class="hiw-icon-wrap" style="background:var(--teal-light);">{{ $data->content->hiw_step2_icon->value ?? '' }}</div>
                    <div class="hiw-title">{{ $data->content->hiw_step2_title->value ?? '' }}</div>
                    <div class="hiw-desc">{{ $data->content->hiw_step2_desc->value ?? '' }}</div>
                </div>
                <div class="hiw-card">
                    <div class="hiw-num">{{ $data->content->hiw_step3_num->value ?? '' }}</div>
                    <div class="hiw-icon-wrap" style="background:var(--lavender-light);">{{ $data->content->hiw_step3_icon->value ?? '' }}</div>
                    <div class="hiw-title">{{ $data->content->hiw_step3_title->value ?? '' }}</div>
                    <div class="hiw-desc">{{ $data->content->hiw_step3_desc->value ?? '' }}</div>
                </div>
                <div class="hiw-card">
                    <div class="hiw-num">{{ $data->content->hiw_step4_num->value ?? '' }}</div>
                    <div class="hiw-icon-wrap" style="background:var(--gold-light);">{{ $data->content->hiw_step4_icon->value ?? '' }}</div>
                    <div class="hiw-title">{{ $data->content->hiw_step4_title->value ?? '' }}</div>
                    <div class="hiw-desc">{{ $data->content->hiw_step4_desc->value ?? '' }}</div>
                </div>
            </div>
        </section>

        <!-- Seasons -->
        <section class="seasons-section">
            <div class="seasons-inner">
                <span class="section-label">{{ $data->content->seasons_label->value ?? '' }}</span>
                <h2 class="section-h2" style="margin-bottom:40px;">{!! $data->content->seasons_h2->value ?? '' !!}</h2>
            </div>
            <div class="seasons-scroll">
                <a href="{{ $data->content->seasons_btn_url->value ?? '#' }}?season=spring" data-season="spring">
                    <div class="s-card sc-spring">
                        <div class="s-card-label">{{ $data->content->season_spring_label->value ?? '' }}</div>
                        <div class="s-card-name">{{ $data->content->season_spring_name->value ?? '' }}</div>
                        <div class="s-card-desc">{{ $data->content->season_spring_desc->value ?? '' }}</div>
                        <div class="s-card-dots">
                            <div class="s-card-dot" style="background:#F4A460;"></div>
                            <div class="s-card-dot" style="background:#FFD580;"></div>
                            <div class="s-card-dot" style="background:#E8855A;"></div>
                            <div class="s-card-dot" style="background:#90C46E;"></div>
                        </div>
                    </div>
                </a>
                <a href="{{ $data->content->seasons_btn_url->value ?? '#' }}?season=summer" data-season="summer">
                    <div class="s-card sc-summer">
                        <div class="s-card-label">{{ $data->content->season_summer_label->value ?? '' }}</div>
                        <div class="s-card-name">{{ $data->content->season_summer_name->value ?? '' }}</div>
                        <div class="s-card-desc">{{ $data->content->season_summer_desc->value ?? '' }}</div>
                        <div class="s-card-dots">
                            <div class="s-card-dot" style="background:#C8A2C8;"></div>
                            <div class="s-card-dot" style="background:#8FA8C8;"></div>
                            <div class="s-card-dot" style="background:#D8BFD8;"></div>
                            <div class="s-card-dot" style="background:#88A4BC;"></div>
                        </div>
                    </div>
                </a>
                <a href="{{ $data->content->seasons_btn_url->value ?? '#' }}?season=autumn" data-season="autumn">
                    <div class="s-card sc-autumn">
                        <div class="s-card-label">{{ $data->content->season_autumn_label->value ?? '' }}</div>
                        <div class="s-card-name">{{ $data->content->season_autumn_name->value ?? '' }}</div>
                        <div class="s-card-desc">{{ $data->content->season_autumn_desc->value ?? '' }}</div>
                        <div class="s-card-dots">
                            <div class="s-card-dot" style="background:#C97B5A;"></div>
                            <div class="s-card-dot" style="background:#D4A856;"></div>
                            <div class="s-card-dot" style="background:#556B2F;"></div>
                            <div class="s-card-dot" style="background:#8B4513;"></div>
                        </div>
                    </div>
                </a>
                <a href="{{ $data->content->seasons_btn_url->value ?? '#' }}?season=winter" data-season="winter">
                    <div class="s-card sc-winter">
                        <div class="s-card-label">{{ $data->content->season_winter_label->value ?? '' }}</div>
                        <div class="s-card-name">{{ $data->content->season_winter_name->value ?? '' }}</div>
                        <div class="s-card-desc">{{ $data->content->season_winter_desc->value ?? '' }}</div>
                        <div class="s-card-dots">
                            <div class="s-card-dot" style="background:#00008B;"></div>
                            <div class="s-card-dot" style="background:#8B0000;"></div>
                            <div class="s-card-dot" style="background:#4B0082;"></div>
                            <div class="s-card-dot" style="background:#F0F0F0;"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div style="text-align:center;margin-top:40px;padding:0 6%;">
                <a class="btn-dark" href="{{ $data->content->seasons_btn_url->value ?? '#' }}">
                    {{ $data->content->seasons_btn_text->value ?? '' }}
                </a>
            </div>
        </section>

        <!-- Features -->
        <section class="section" style="background:var(--blush-light);">
            <span class="section-label">{{ $data->content->features_label->value ?? '' }}</span>
            <h2 class="section-h2">{!! $data->content->features_h2->value ?? '' !!}</h2>
            <div class="features-grid">
                <div class="feat-card">
                    <div class="feat-icon-wrap" style="background:var(--blush);">{{ $data->content->feature1_icon->value ?? '' }}</div>
                    <div>
                        <div class="feat-title">{{ $data->content->feature1_title->value ?? '' }}</div>
                        <div class="feat-desc">{{ $data->content->feature1_desc->value ?? '' }}</div>
                    </div>
                </div>
                <div class="feat-card">
                    <div class="feat-icon-wrap" style="background:var(--teal-light);">{{ $data->content->feature2_icon->value ?? '' }}</div>
                    <div>
                        <div class="feat-title">{{ $data->content->feature2_title->value ?? '' }}</div>
                        <div class="feat-desc">{{ $data->content->feature2_desc->value ?? '' }}</div>
                    </div>
                </div>
                <div class="feat-card">
                    <div class="feat-icon-wrap" style="background:var(--lavender-light);">{{ $data->content->feature3_icon->value ?? '' }}</div>
                    <div>
                        <div class="feat-title">{{ $data->content->feature3_title->value ?? '' }}</div>
                        <div class="feat-desc">{{ $data->content->feature3_desc->value ?? '' }}</div>
                    </div>
                </div>
                <div class="feat-card">
                    <div class="feat-icon-wrap" style="background:var(--gold-light);">{{ $data->content->feature4_icon->value ?? '' }}</div>
                    <div>
                        <div class="feat-title">{{ $data->content->feature4_title->value ?? '' }}</div>
                        <div class="feat-desc">{{ $data->content->feature4_desc->value ?? '' }}</div>
                    </div>
                </div>
                <div class="feat-card wide">
                    <div class="feat-icon-wrap" style="background:var(--blush);width:64px;height:64px;font-size:28px;">{{ $data->content->feature5_icon->value ?? '' }}</div>
                    <div>
                        <div class="feat-title">{{ $data->content->feature5_title->value ?? '' }}</div>
                        <div class="feat-desc">{{ $data->content->feature5_desc->value ?? '' }}</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats -->
        <section class="stats-band">
            <div class="stats-grid">
                <div>
                    <div class="stat-n">{{ $data->content->stat1_number->value ?? '' }}</div>
                    <div class="stat-l">{{ $data->content->stat1_label->value ?? '' }}</div>
                </div>
                <div>
                    <div class="stat-n">{{ $data->content->stat2_number->value ?? '' }}</div>
                    <div class="stat-l">{{ $data->content->stat2_label->value ?? '' }}</div>
                </div>
                <div>
                    <div class="stat-n">{{ $data->content->stat3_number->value ?? '' }}</div>
                    <div class="stat-l">{{ $data->content->stat3_label->value ?? '' }}</div>
                </div>
                <div>
                    <div class="stat-n">{{ $data->content->stat4_number->value ?? '' }}</div>
                    <div class="stat-l">{{ $data->content->stat4_label->value ?? '' }}</div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="section">
            <span class="section-label">{{ $data->content->testimonials_label->value ?? '' }}</span>
            <h2 class="section-h2">{!! $data->content->testimonials_h2->value ?? '' !!}</h2>
            <div class="t-grid" style="margin-top:40px;">
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <div class="t-text">{{ $data->content->testimonial1_text->value ?? '' }}</div>
                    <div class="t-author">
                        <div class="t-avatar" style="background:#FDF0EA;color:#8B4A32;">{{ $data->content->testimonial1_avatar->value ?? '' }}</div>
                        <div>
                            <div class="t-name">{{ $data->content->testimonial1_name->value ?? '' }}</div>
                            <div class="t-meta">{{ $data->content->testimonial1_meta->value ?? '' }}</div>
                        </div>
                    </div>
                </div>
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <div class="t-text">{{ $data->content->testimonial2_text->value ?? '' }}</div>
                    <div class="t-author">
                        <div class="t-avatar" style="background:#EAF0FA;color:#1A3A6B;">{{ $data->content->testimonial2_avatar->value ?? '' }}</div>
                        <div>
                            <div class="t-name">{{ $data->content->testimonial2_name->value ?? '' }}</div>
                            <div class="t-meta">{{ $data->content->testimonial2_meta->value ?? '' }}</div>
                        </div>
                    </div>
                </div>
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <div class="t-text">{{ $data->content->testimonial3_text->value ?? '' }}</div>
                    <div class="t-author">
                        <div class="t-avatar" style="background:#F0EDF5;color:#4B3A6B;">{{ $data->content->testimonial3_avatar->value ?? '' }}</div>
                        <div>
                            <div class="t-name">{{ $data->content->testimonial3_name->value ?? '' }}</div>
                            <div class="t-meta">{{ $data->content->testimonial3_meta->value ?? '' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
