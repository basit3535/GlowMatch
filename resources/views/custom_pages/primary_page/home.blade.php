@extends('layouts.app')
@section('content')
    <div class="page active" id="page-home">

        <!-- Hero -->
        <section class="hero">
            <div>
                <div class="hero-eyebrow">
                    <div class="hero-line"></div><span>AI-Powered Colour Analysis</span>
                </div>
                <h1 class="hero-h1">Discover your<br><em>perfect palette</em><br><strong>look radiant always</strong></h1>
                <p class="hero-sub">Based on your skin tone, eye colour, hair, and body type — we craft a complete personal
                    style guide that makes getting dressed effortless.</p>
                <div class="hero-btns">
                    <a class="btn-primary" href="{{ route('show.custom_pages', ['slug' => 'test']) }}">Start Free Analysis →</a>
                    <a class="btn-outline" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">Explore Seasons</a>
                </div>
                <div class="hero-trust">
                    <div class="hero-avatars">
                        <span style="background:#F5C89C;color:#8B4A32;margin-left:0;">SA</span>
                        <span style="background:#D4A8C8;color:#5A2A4A;">MK</span>
                        <span style="background:#B8CCE4;color:#1A3A6B;">LP</span>
                        <span style="background:#C8E4B8;color:#1A4A1A;">RP</span>
                    </div>
                    <div class="hero-trust-text"><strong>48,000+</strong> colour analyses completed</div>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hv-card span2 c-autumn" style="color:#5C2A0E;">
                    <div class="hv-label">Your Season</div>
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
            <span class="section-label">✦ How It Works</span>
            <h2 class="section-h2">Science meets style<br>in four simple steps</h2>
            <p class="section-sub">Our analysis combines decades of colour theory with modern AI to give you a deeply
                personal result.</p>
            <div class="hiw-grid">
                <div class="hiw-card">
                    <div class="hiw-num">01</div>
                    <div class="hiw-icon-wrap" style="background:var(--blush);">🎨</div>
                    <div class="hiw-title">Share your features</div>
                    <div class="hiw-desc">Select your skin tone, undertone, natural eye colour, and hair shade from our
                        visual options.</div>
                </div>
                <div class="hiw-card">
                    <div class="hiw-num">02</div>
                    <div class="hiw-icon-wrap" style="background:var(--teal-light);">👗</div>
                    <div class="hiw-title">Describe your silhouette</div>
                    <div class="hiw-desc">Tell us your body type so we can recommend the most flattering cuts and
                        silhouettes.</div>
                </div>
                <div class="hiw-card">
                    <div class="hiw-num">03</div>
                    <div class="hiw-icon-wrap" style="background:var(--lavender-light);">✨</div>
                    <div class="hiw-title">Get your colour season</div>
                    <div class="hiw-desc">Receive your full palette — best colours, colours to avoid, and makeup shade
                        recommendations.</div>
                </div>
                <div class="hiw-card">
                    <div class="hiw-num">04</div>
                    <div class="hiw-icon-wrap" style="background:var(--gold-light);">🛍️</div>
                    <div class="hiw-title">Shop with confidence</div>
                    <div class="hiw-desc">Browse tailored clothing ideas and styling tips based on both your season and body
                        type.</div>
                </div>
            </div>
        </section>

        <!-- Seasons -->
        <section class="seasons-section">
            <div class="seasons-inner">
                <span class="section-label">✦ The Four Seasons</span>
                <h2 class="section-h2" style="margin-bottom:40px;">Which season are you?</h2>
            </div>
            <div class="seasons-scroll">
                <div class="s-card sc-spring">
                    <div class="s-card-label">Warm · Light</div>
                    <div class="s-card-name">Spring</div>
                    <div class="s-card-desc">Clear, warm, and fresh — you glow in peach, coral, and warm gold.</div>
                    <div class="s-card-dots">
                        <div class="s-card-dot" style="background:#F4A460;"></div>
                        <div class="s-card-dot" style="background:#FFD580;"></div>
                        <div class="s-card-dot" style="background:#E8855A;"></div>
                        <div class="s-card-dot" style="background:#90C46E;"></div>
                    </div>
                </div>
                <div class="s-card sc-summer">
                    <div class="s-card-label">Cool · Muted</div>
                    <div class="s-card-name">Summer</div>
                    <div class="s-card-desc">Soft, cool, and romantic — dusty rose and lavender are your signature.</div>
                    <div class="s-card-dots">
                        <div class="s-card-dot" style="background:#C8A2C8;"></div>
                        <div class="s-card-dot" style="background:#8FA8C8;"></div>
                        <div class="s-card-dot" style="background:#D8BFD8;"></div>
                        <div class="s-card-dot" style="background:#88A4BC;"></div>
                    </div>
                </div>
                <div class="s-card sc-autumn">
                    <div class="s-card-label">Warm · Deep</div>
                    <div class="s-card-name">Autumn</div>
                    <div class="s-card-desc">Rich, warm, and earthy — terracotta, olive, and rust make you shine.</div>
                    <div class="s-card-dots">
                        <div class="s-card-dot" style="background:#C97B5A;"></div>
                        <div class="s-card-dot" style="background:#D4A856;"></div>
                        <div class="s-card-dot" style="background:#556B2F;"></div>
                        <div class="s-card-dot" style="background:#8B4513;"></div>
                    </div>
                </div>
                <div class="s-card sc-winter">
                    <div class="s-card-label">Cool · Bold</div>
                    <div class="s-card-name">Winter</div>
                    <div class="s-card-desc">High-contrast and striking — jewel tones and icy shades are yours.</div>
                    <div class="s-card-dots">
                        <div class="s-card-dot" style="background:#00008B;"></div>
                        <div class="s-card-dot" style="background:#8B0000;"></div>
                        <div class="s-card-dot" style="background:#4B0082;"></div>
                        <div class="s-card-dot" style="background:#F0F0F0;"></div>
                    </div>
                </div>
            </div>
            <div style="text-align:center;margin-top:40px;padding:0 6%;">
                <a class="btn-dark" href="{{ route('show.custom_pages', ['slug' => 'quiz']) }}">Discover Your Season →</a>
            </div>
        </section>

        <!-- Features -->
        <section class="section" style="background:var(--blush-light);">
            <span class="section-label">✦ What You Get</span>
            <h2 class="section-h2">Everything you need<br>to dress with confidence</h2>
            <div class="features-grid">
                <div class="feat-card">
                    <div class="feat-icon-wrap" style="background:var(--blush);">🎨</div>
                    <div>
                        <div class="feat-title">Full Colour Palette</div>
                        <div class="feat-desc">30+ colours curated specifically for your season, from everyday neutrals to
                            statement shades.</div>
                    </div>
                </div>
                <div class="feat-card">
                    <div class="feat-icon-wrap" style="background:var(--teal-light);">💄</div>
                    <div>
                        <div class="feat-title">Makeup Shade Guide</div>
                        <div class="feat-desc">Foundation undertones, lip colours, eyeshadow shades, and blush tones
                            matched to your features.</div>
                    </div>
                </div>
                <div class="feat-card">
                    <div class="feat-icon-wrap" style="background:var(--lavender-light);">👗</div>
                    <div>
                        <div class="feat-title">Body Type Styling</div>
                        <div class="feat-desc">Silhouette recommendations, cuts to embrace, and styles to avoid for your
                            unique proportions.</div>
                    </div>
                </div>
                <div class="feat-card">
                    <div class="feat-icon-wrap" style="background:var(--gold-light);">🚫</div>
                    <div>
                        <div class="feat-title">Colours to Avoid</div>
                        <div class="feat-desc">Clearly shown — the shades that wash you out or clash, so you can shop
                            smarter.</div>
                    </div>
                </div>
                <div class="feat-card wide">
                    <div class="feat-icon-wrap" style="background:var(--blush);width:64px;height:64px;font-size:28px;">✦
                    </div>
                    <div>
                        <div class="feat-title">Personal Style Insights</div>
                        <div class="feat-desc">A written breakdown of how your season and body type work together, with
                            practical advice you can use every time you shop or get dressed. No jargon, just clarity.</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats -->
        <section class="stats-band">
            <div class="stats-grid">
                <div>
                    <div class="stat-n">48K+</div>
                    <div class="stat-l">Analyses completed</div>
                </div>
                <div>
                    <div class="stat-n">4</div>
                    <div class="stat-l">Colour seasons</div>
                </div>
                <div>
                    <div class="stat-n">96%</div>
                    <div class="stat-l">Satisfaction rate</div>
                </div>
                <div>
                    <div class="stat-n">5min</div>
                    <div class="stat-l">Average quiz time</div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="section">
            <span class="section-label">✦ Real Stories</span>
            <h2 class="section-h2">Colour changed everything</h2>
            <div class="t-grid" style="margin-top:40px;">
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <div class="t-text">"I finally understand why certain colours washed me out. My autumn palette has
                        completely transformed my wardrobe. Worth every second!"</div>
                    <div class="t-author">
                        <div class="t-avatar" style="background:#FDF0EA;color:#8B4A32;">SA</div>
                        <div>
                            <div class="t-name">Sara Ahmed</div>
                            <div class="t-meta">Warm Autumn · Pear Shape</div>
                        </div>
                    </div>
                </div>
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <div class="t-text">"As someone who always struggled shopping, this quiz gave me a clear direction. The
                        body type recommendations were spot-on and so practical."</div>
                    <div class="t-author">
                        <div class="t-avatar" style="background:#EAF0FA;color:#1A3A6B;">MK</div>
                        <div>
                            <div class="t-name">Maya Kaur</div>
                            <div class="t-meta">Cool Winter · Hourglass</div>
                        </div>
                    </div>
                </div>
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <div class="t-text">"I never knew I was a Summer season! The dusty rose and lavender suggestions are
                        incredibly flattering. I've recommended this to all my friends."</div>
                    <div class="t-author">
                        <div class="t-avatar" style="background:#F0EDF5;color:#4B3A6B;">LP</div>
                        <div>
                            <div class="t-name">Layla Patel</div>
                            <div class="t-meta">Cool Summer · Rectangle</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
