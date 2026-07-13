@extends('layouts.app')

@section('content')
    <div class="page" id="page-about">
        <section class="about-hero">
            <div>
                <span class="section-label">{{ $data->content->about_hero_label->value ?? '' }}</span>
                <h1 class="section-h2">{!! $data->content->about_hero_h1->value ?? '' !!}</h1>
                <p style="font-size:16px;font-weight:300;color:var(--muted);line-height:1.75;margin-bottom:28px;">
                    {{ $data->content->about_hero_p1->value ?? '' }}</p>
                <p style="font-size:16px;font-weight:300;color:var(--muted);line-height:1.75;margin-bottom:36px;">
                    {{ $data->content->about_hero_p2->value ?? '' }}</p>
                <a class="btn-primary"
                    href="{{ route('show.custom_pages', ['slug' => 'color-analysis-by-season']) }}">{{ $data->content->about_hero_btn_text->value ?? '' }}</a>
            </div>
            <div class="about-visual">
                <div class="about-visual-main">🌸</div>
                <div class="about-visual-badge">
                    <div class="avb-num">{{ $data->content->about_hero_visual_badge_year->value ?? '' }}</div>
                    <div class="avb-label">{{ $data->content->about_hero_visual_badge_label->value ?? '' }}</div>
                </div>
            </div>
        </section>

        <!-- Values -->
        <section class="section">
            <span class="section-label">{{ $data->content->about_values_label->value ?? '' }}</span>
            <h2 class="section-h2">{!! $data->content->about_values_h2->value ?? '' !!}</h2>
            <div class="about-values" style="margin-top:0;">
                <div class="val-card">
                    <div class="val-icon">{{ $data->content->about_value1_icon->value ?? '' }}</div>
                    <div class="val-title">{{ $data->content->about_value1_title->value ?? '' }}</div>
                    <div class="val-desc">{{ $data->content->about_value1_desc->value ?? '' }}</div>
                </div>
                <div class="val-card">
                    <div class="val-icon">{{ $data->content->about_value2_icon->value ?? '' }}</div>
                    <div class="val-title">{{ $data->content->about_value2_title->value ?? '' }}</div>
                    <div class="val-desc">{{ $data->content->about_value2_desc->value ?? '' }}</div>
                </div>
                <div class="val-card">
                    <div class="val-icon">{{ $data->content->about_value3_icon->value ?? '' }}</div>
                    <div class="val-title">{{ $data->content->about_value3_title->value ?? '' }}</div>
                    <div class="val-desc">{{ $data->content->about_value3_desc->value ?? '' }}</div>
                </div>
                <div class="val-card">
                    <div class="val-icon">{{ $data->content->about_value4_icon->value ?? '' }}</div>
                    <div class="val-title">{{ $data->content->about_value4_title->value ?? '' }}</div>
                    <div class="val-desc">{{ $data->content->about_value4_desc->value ?? '' }}</div>
                </div>
            </div>
        </section>

        <!-- Mission -->
        <section class="mission-section">
            <div class="mission-grid">
                <div>
                    <span class="section-label">{{ $data->content->about_mission_label->value ?? '' }}</span>
                    <h2 class="section-h2">{!! $data->content->about_mission_h2->value ?? '' !!}</h2>
                    <div class="mission-text">{{ $data->content->about_mission_text->value ?? '' }}</div>
                    <div class="mission-quote">{{ $data->content->about_mission_quote->value ?? '' }}</div>
                </div>
                <div class="mission-stats">
                    <div class="ms-card">
                        <div class="ms-num">{{ $data->content->about_mission_stat1_num->value ?? '' }}</div>
                        <div class="ms-label">{{ $data->content->about_mission_stat1_label->value ?? '' }}</div>
                    </div>
                    <div class="ms-card">
                        <div class="ms-num">{{ $data->content->about_mission_stat2_num->value ?? '' }}</div>
                        <div class="ms-label">{{ $data->content->about_mission_stat2_label->value ?? '' }}</div>
                    </div>
                    <div class="ms-card">
                        <div class="ms-num">{{ $data->content->about_mission_stat3_num->value ?? '' }}</div>
                        <div class="ms-label">{{ $data->content->about_mission_stat3_label->value ?? '' }}</div>
                    </div>
                    <div class="ms-card">
                        <div class="ms-num">{{ $data->content->about_mission_stat4_num->value ?? '' }}</div>
                        <div class="ms-label">{{ $data->content->about_mission_stat4_label->value ?? '' }}</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why GlowMatch -->
        <section class="section" style="background:var(--blush-light);">
            <div class="grid grid-cols-2 gap-12 items-center">
                <div>
                    <span class="section-label">{{ $data->content->about_why_label->value ?? '' }}</span>
                    <h2 class="section-h2">{!! $data->content->about_why_h2->value ?? '' !!}</h2>
                    <p class="section-sub">{{ $data->content->about_why_sub->value ?? '' }}</p>
                </div>
                <div class="image-stack">
                    <img src="{{ asset('assets/images/more_than_quiz_femail_2.png') }}" alt="Female Style Guide"
                        class="stack-img img-left">
                    <img src="{{ asset('assets/images/more_than_quiz_mail.png') }}" alt="Male Style Guide"
                        class="stack-img img-center">
                    <img src="{{ asset('assets/images/more_than_quiz_femail_1.png') }}" alt="Female Outfit Guide"
                        class="stack-img img-right">
                </div>
            </div>

            <div style="display:flex;gap:16px;flex-wrap:wrap;justify-content:center;margin-top:32px;">
                <a class="btn-primary"
                    href="{{ route('show.custom_pages', ['slug' => 'color-analysis-by-season']) }}">{{ $data->content->about_why_btn1_text->value ?? '' }}</a>
                <a class="btn-outline"
                    href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">{{ $data->content->about_why_btn2_text->value ?? '' }}</a>
            </div>
        </section>

        <!-- Team -->
        <section class="section">
            <span class="section-label">{{ $data->content->about_team_label->value ?? '' }}</span>
            <h2 class="section-h2">{!! $data->content->about_team_h2->value ?? '' !!}</h2>
            <p class="section-sub">{{ $data->content->about_team_sub->value ?? '' }}</p>
            <div class="team-grid">
                <div class="team-card">
                    <div class="team-img" style="background:linear-gradient(145deg,var(--blush),var(--terracotta));">🎨
                    </div>
                    <div class="team-body">
                        <div class="team-name">{{ $data->content->about_team1_name->value ?? '' }}</div>
                        <div class="team-role">{{ $data->content->about_team1_role->value ?? '' }}</div>
                        <div class="team-bio">{{ $data->content->about_team1_bio->value ?? '' }}</div>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-img" style="background:linear-gradient(145deg,var(--teal-light),var(--sage));">💻</div>
                    <div class="team-body">
                        <div class="team-name">{{ $data->content->about_team2_name->value ?? '' }}</div>
                        <div class="team-role">{{ $data->content->about_team2_role->value ?? '' }}</div>
                        <div class="team-bio">{{ $data->content->about_team2_bio->value ?? '' }}</div>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-img" style="background:linear-gradient(145deg,var(--lavender-light),var(--lavender));">
                        ✨</div>
                    <div class="team-body">
                        <div class="team-name">{{ $data->content->about_team3_name->value ?? '' }}</div>
                        <div class="team-role">{{ $data->content->about_team3_role->value ?? '' }}</div>
                        <div class="team-bio">{{ $data->content->about_team3_bio->value ?? '' }}</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Press -->
        <div>
            <div style="padding:40px 6% 20px;text-align:center;">
                <span class="section-label">{{ $data->content->about_press_label->value ?? '' }}</span>
            </div>
            <div class="press-grid">
                <div class="press-logo">{{ $data->content->about_press1->value ?? '' }}</div>
                <div class="press-logo">{{ $data->content->about_press2->value ?? '' }}</div>
                <div class="press-logo">{{ $data->content->about_press3->value ?? '' }}</div>
                <div class="press-logo">{{ $data->content->about_press4->value ?? '' }}</div>
            </div>
        </div>
    </div>
@endsection
