@extends('layouts.app')

@section('content')
    <div class="page" id="page-bodytypes">
        <div class="bodytype-hero">
            <span class="section-label">{{ $data->content->body_hero_label->value ?? '' }}</span>
            <h1 class="section-h2">{!! $data->content->body_hero_h1->value ?? '' !!}</h1>
            <p style="font-size:16px;color:var(--muted);max-width:560px;line-height:1.75;margin-top:10px;">
                {{ $data->content->body_hero_desc->value ?? '' }}</p>
            <div style="margin-top:24px;">
                <a class="btn-primary"
                    href="{{ route('show.custom_pages', ['slug' => 'color-analysis-by-season']) }}">{{ $data->content->body_hero_btn->value ?? '' }}</a>
            </div>
        </div>

        <div class="bodytype-grid">

            <!-- HOURGLASS -->
            <div class="bt-card">
                <div class="bt-top" style="background:linear-gradient(145deg,#FDF0EA,#F5D0BC);">⧖</div>
                <div class="bt-body">
                    <div class="bt-name">{{ $data->content->bt_hourglass_name->value ?? '' }}</div>
                    <div class="bt-tagline">{{ $data->content->bt_hourglass_tagline->value ?? '' }}</div>
                    <div class="bt-desc">{{ $data->content->bt_hourglass_desc->value ?? '' }}</div>
                    <div class="bt-tips-title">{{ $data->content->bt_hourglass_tips_title->value ?? '' }}</div>
                    <ul class="bt-tips">
                        <li class="bt-tip">{{ $data->content->bt_hourglass_tip1->value ?? '' }}</li>
                        <li class="bt-tip">{{ $data->content->bt_hourglass_tip2->value ?? '' }}</li>
                        <li class="bt-tip">{{ $data->content->bt_hourglass_tip3->value ?? '' }}</li>
                        <li class="bt-tip">{{ $data->content->bt_hourglass_tip4->value ?? '' }}</li>
                        <li class="bt-tip">{{ $data->content->bt_hourglass_tip5->value ?? '' }}</li>
                    </ul>
                    <div class="bt-avoid-title">{{ $data->content->bt_hourglass_avoid_title->value ?? '' }}</div>
                    <div class="bt-avoids">
                        <span class="bt-avoid-pill">{{ $data->content->bt_hourglass_avoid1->value ?? '' }}</span>
                        <span class="bt-avoid-pill">{{ $data->content->bt_hourglass_avoid2->value ?? '' }}</span>
                        <span class="bt-avoid-pill">{{ $data->content->bt_hourglass_avoid3->value ?? '' }}</span>
                    </div>
                </div>
            </div>

            <!-- PEAR -->
            <div class="bt-card">
                <div class="bt-top" style="background:linear-gradient(145deg,#F5F0E8,#E8D4B8);">🍐</div>
                <div class="bt-body">
                    <div class="bt-name">{{ $data->content->bt_pear_name->value ?? '' }}</div>
                    <div class="bt-tagline">{{ $data->content->bt_pear_tagline->value ?? '' }}</div>
                    <div class="bt-desc">{{ $data->content->bt_pear_desc->value ?? '' }}</div>
                    <div class="bt-tips-title">{{ $data->content->bt_pear_tips_title->value ?? '' }}</div>
                    <ul class="bt-tips">
                        <li class="bt-tip">{{ $data->content->bt_pear_tip1->value ?? '' }}</li>
                        <li class="bt-tip">{{ $data->content->bt_pear_tip2->value ?? '' }}</li>
                        <li class="bt-tip">{{ $data->content->bt_pear_tip3->value ?? '' }}</li>
                        <li class="bt-tip">{{ $data->content->bt_pear_tip4->value ?? '' }}</li>
                        <li class="bt-tip">{{ $data->content->bt_pear_tip5->value ?? '' }}</li>
                    </ul>
                    <div class="bt-avoid-title">{{ $data->content->bt_pear_avoid_title->value ?? '' }}</div>
                    <div class="bt-avoids">
                        <span class="bt-avoid-pill">{{ $data->content->bt_pear_avoid1->value ?? '' }}</span>
                        <span class="bt-avoid-pill">{{ $data->content->bt_pear_avoid2->value ?? '' }}</span>
                        <span class="bt-avoid-pill">{{ $data->content->bt_pear_avoid3->value ?? '' }}</span>
                    </div>
                </div>
            </div>

            <!-- APPLE -->
            <div class="bt-card">
                <div class="bt-top" style="background:linear-gradient(145deg,#FDF8F0,#F0E0C8);">🍎</div>
                <div class="bt-body">
                    <div class="bt-name">{{ $data->content->bt_apple_name->value ?? '' }}</div>
                    <div class="bt-tagline">{{ $data->content->bt_apple_tagline->value ?? '' }}</div>
                    <div class="bt-desc">{{ $data->content->bt_apple_desc->value ?? '' }}</div>
                    <div class="bt-tips-title">{{ $data->content->bt_apple_tips_title->value ?? '' }}</div>
                    <ul class="bt-tips">
                        <li class="bt-tip">{{ $data->content->bt_apple_tip1->value ?? '' }}</li>
                        <li class="bt-tip">{{ $data->content->bt_apple_tip2->value ?? '' }}</li>
                        <li class="bt-tip">{{ $data->content->bt_apple_tip3->value ?? '' }}</li>
                        <li class="bt-tip">{{ $data->content->bt_apple_tip4->value ?? '' }}</li>
                        <li class="bt-tip">{{ $data->content->bt_apple_tip5->value ?? '' }}</li>
                    </ul>
                    <div class="bt-avoid-title">{{ $data->content->bt_apple_avoid_title->value ?? '' }}</div>
                    <div class="bt-avoids">
                        <span class="bt-avoid-pill">{{ $data->content->bt_apple_avoid1->value ?? '' }}</span>
                        <span class="bt-avoid-pill">{{ $data->content->bt_apple_avoid2->value ?? '' }}</span>
                        <span class="bt-avoid-pill">{{ $data->content->bt_apple_avoid3->value ?? '' }}</span>
                    </div>
                </div>
            </div>

            <!-- RECTANGLE -->
            <div class="bt-card">
                <div class="bt-top" style="background:linear-gradient(145deg,#EEF0F5,#D8DCE8);">▭</div>
                <div class="bt-body">
                    <div class="bt-name">{{ $data->content->bt_rectangle_name->value ?? '' }}</div>
                    <div class="bt-tagline">{{ $data->content->bt_rectangle_tagline->value ?? '' }}</div>
                    <div class="bt-desc">{{ $data->content->bt_rectangle_desc->value ?? '' }}</div>
                    <div class="bt-tips-title">{{ $data->content->bt_rectangle_tips_title->value ?? '' }}</div>
                    <ul class="bt-tips">
                        <li class="bt-tip">{{ $data->content->bt_rectangle_tip1->value ?? '' }}</li>
                        <li class="bt-tip">{{ $data->content->bt_rectangle_tip2->value ?? '' }}</li>
                        <li class="bt-tip">{{ $data->content->bt_rectangle_tip3->value ?? '' }}</li>
                        <li class="bt-tip">{{ $data->content->bt_rectangle_tip4->value ?? '' }}</li>
                        <li class="bt-tip">{{ $data->content->bt_rectangle_tip5->value ?? '' }}</li>
                    </ul>
                    <div class="bt-avoid-title">{{ $data->content->bt_rectangle_avoid_title->value ?? '' }}</div>
                    <div class="bt-avoids">
                        <span class="bt-avoid-pill">{{ $data->content->bt_rectangle_avoid1->value ?? '' }}</span>
                        <span class="bt-avoid-pill">{{ $data->content->bt_rectangle_avoid2->value ?? '' }}</span>
                        <span class="bt-avoid-pill">{{ $data->content->bt_rectangle_avoid3->value ?? '' }}</span>
                    </div>
                </div>
            </div>

            <!-- INVERTED TRIANGLE -->
            <div class="bt-card">
                <div class="bt-top" style="background:linear-gradient(145deg,#EAF0F8,#C8D8EC);">▽</div>
                <div class="bt-body">
                    <div class="bt-name">{{ $data->content->bt_inverted_name->value ?? '' }}</div>
                    <div class="bt-tagline">{{ $data->content->bt_inverted_tagline->value ?? '' }}</div>
                    <div class="bt-desc">{{ $data->content->bt_inverted_desc->value ?? '' }}</div>
                    <div class="bt-tips-title">{{ $data->content->bt_inverted_tips_title->value ?? '' }}</div>
                    <ul class="bt-tips">
                        <li class="bt-tip">{{ $data->content->bt_inverted_tip1->value ?? '' }}</li>
                        <li class="bt-tip">{{ $data->content->bt_inverted_tip2->value ?? '' }}</li>
                        <li class="bt-tip">{{ $data->content->bt_inverted_tip3->value ?? '' }}</li>
                        <li class="bt-tip">{{ $data->content->bt_inverted_tip4->value ?? '' }}</li>
                        <li class="bt-tip">{{ $data->content->bt_inverted_tip5->value ?? '' }}</li>
                    </ul>
                    <div class="bt-avoid-title">{{ $data->content->bt_inverted_avoid_title->value ?? '' }}</div>
                    <div class="bt-avoids">
                        <span class="bt-avoid-pill">{{ $data->content->bt_inverted_avoid1->value ?? '' }}</span>
                        <span class="bt-avoid-pill">{{ $data->content->bt_inverted_avoid2->value ?? '' }}</span>
                        <span class="bt-avoid-pill">{{ $data->content->bt_inverted_avoid3->value ?? '' }}</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Colour + Body Type Crossover Section -->
        <section class="section" style="background:var(--blush-light);text-align:center;">
            <span class="section-label">{{ $data->content->crossover_label->value ?? '' }}</span>
            <h2 class="section-h2">{!! $data->content->crossover_h2->value ?? '' !!}</h2>
            <p class="section-sub" style="max-width:600px;margin:0 auto;">{!! $data->content->crossover_desc->value ?? '' !!}</p>
            <div class="hero-btns" style="justify-content:center;margin-top:28px;">
                <a class="btn-primary"
                    href="{{ route('show.custom_pages', ['slug' => 'color-analysis-by-season']) }}">{{ $data->content->crossover_btn1->value ?? '' }}</a>
                <a class="btn-outline"
                    href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">{{ $data->content->crossover_btn2->value ?? '' }}</a>
            </div>
        </section>

        <!-- Interactive Styling Guide -->
        <section class="dressup-section">
            <span class="section-label">{{ $data->content->interactive_label->value ?? '' }}</span>
            <h2 class="section-h2">{{ $data->content->interactive_h2->value ?? '' }}</h2>
            <p class="section-sub" style="text-align:center;margin-bottom:32px;">
                {{ $data->content->interactive_sub->value ?? '' }}</p>
            <div class="dressup-grid">
                <div class="dressup-list" id="dl">
                    <div class="dl-item active" onclick="selectDressup(this,'hourglass')">
                        <div class="dl-icon">⧖</div>
                        <div>
                            <div class="dl-name">{{ $data->content->interactive_hourglass_name->value ?? '' }}</div>
                            <div class="dl-sub">{{ $data->content->interactive_hourglass_sub->value ?? '' }}</div>
                        </div>
                    </div>
                    <div class="dl-item" onclick="selectDressup(this,'pear')">
                        <div class="dl-icon">🍐</div>
                        <div>
                            <div class="dl-name">{{ $data->content->interactive_pear_name->value ?? '' }}</div>
                            <div class="dl-sub">{{ $data->content->interactive_pear_sub->value ?? '' }}</div>
                        </div>
                    </div>
                    <div class="dl-item" onclick="selectDressup(this,'apple')">
                        <div class="dl-icon">🍎</div>
                        <div>
                            <div class="dl-name">{{ $data->content->interactive_apple_name->value ?? '' }}</div>
                            <div class="dl-sub">{{ $data->content->interactive_apple_sub->value ?? '' }}</div>
                        </div>
                    </div>
                    <div class="dl-item" onclick="selectDressup(this,'rectangle')">
                        <div class="dl-icon">▭</div>
                        <div>
                            <div class="dl-name">{{ $data->content->interactive_rectangle_name->value ?? '' }}</div>
                            <div class="dl-sub">{{ $data->content->interactive_rectangle_sub->value ?? '' }}</div>
                        </div>
                    </div>
                    <div class="dl-item" onclick="selectDressup(this,'inverted')">
                        <div class="dl-icon">▽</div>
                        <div>
                            <div class="dl-name">{{ $data->content->interactive_inverted_name->value ?? '' }}</div>
                            <div class="dl-sub">{{ $data->content->interactive_inverted_sub->value ?? '' }}</div>
                        </div>
                    </div>
                </div>
                <div class="dressup-preview">
                    <div class="dp-top" style="background:linear-gradient(145deg,#FDF0EA,#F5D0BC);" id="dp-img">⧖
                    </div>
                    <div class="dp-body">
                        <div class="dp-title" id="dp-title">{{ $data->content->interactive_preview_title->value ?? '' }}
                        </div>
                        <div class="dp-tips" id="dp-tips">
                            <div class="dp-tip"><span>✦</span>{{ $data->content->interactive_preview_tip1->value ?? '' }}
                            </div>
                            <div class="dp-tip"><span>✦</span>{{ $data->content->interactive_preview_tip2->value ?? '' }}
                            </div>
                            <div class="dp-tip"><span>✦</span>{{ $data->content->interactive_preview_tip3->value ?? '' }}
                            </div>
                            <div class="dp-tip"><span>✦</span>{{ $data->content->interactive_preview_tip4->value ?? '' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bottom FAQ for SEO -->
        <section class="section" style="max-width:720px;margin:0 auto;padding-bottom:80px;">
            <span class="section-label">{{ $data->content->faq_label->value ?? '' }}</span>
            <h2 class="section-h2" style="margin-bottom:32px;">{{ $data->content->faq_h2->value ?? '' }}</h2>
            <div style="display:flex;flex-direction:column;gap:24px;">
                <div>
                    <h3 style="font-size:17px;font-weight:600;margin-bottom:8px;color:var(--charcoal);">
                        {{ $data->content->faq_q1->value ?? '' }}</h3>
                    <p style="font-size:15px;color:var(--muted);line-height:1.75;">
                        {{ $data->content->faq_a1->value ?? '' }}</p>
                </div>
                <div>
                    <h3 style="font-size:17px;font-weight:600;margin-bottom:8px;color:var(--charcoal);">
                        {{ $data->content->faq_q2->value ?? '' }}</h3>
                    <p style="font-size:15px;color:var(--muted);line-height:1.75;">
                        {{ $data->content->faq_a2->value ?? '' }}</p>
                </div>
                <div>
                    <h3 style="font-size:17px;font-weight:600;margin-bottom:8px;color:var(--charcoal);">
                        {{ $data->content->faq_q3->value ?? '' }}</h3>
                    <p style="font-size:15px;color:var(--muted);line-height:1.75;">
                        {{ $data->content->faq_a3->value ?? '' }}</p>
                </div>
            </div>
        </section>

    </div>
@endsection
