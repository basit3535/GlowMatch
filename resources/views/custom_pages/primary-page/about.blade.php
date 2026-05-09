@extends('layouts.app')

@section('content')
    <div class="page" id="page-about">
        <section class="about-hero">
            <div>
                <span class="section-label">✦ Our Story</span>
                <h1 class="section-h2">We believe everyone deserves to feel beautiful <em
                        style="font-style:italic;color:var(--rose);">in colour</em></h1>
                <p style="font-size:16px;font-weight:300;color:var(--muted);line-height:1.75;margin-bottom:28px;">ChromaFit
                    was born from a simple frustration: spending hours shopping only to get home and realize something looks
                    wrong. Usually, it's a colour problem — not a you problem.</p>
                <p style="font-size:16px;font-weight:300;color:var(--muted);line-height:1.75;margin-bottom:36px;">We combined
                    decades of seasonal colour theory with AI analysis to create a tool that gives every person the kind of
                    clarity usually reserved for expensive personal stylists.</p>
                <a class="btn-primary" href="{{ route('show.custom_pages', ['slug' => 'test']) }}">Discover Your Season →</a>
            </div>
            <div class="about-visual">
                <div class="about-visual-main">🌸</div>
                <div class="about-visual-badge">
                    <div class="avb-num">2021</div>
                    <div class="avb-label">Founded with a mission</div>
                </div>
            </div>
        </section>

        <!-- Values -->
        <section class="section">
            <span class="section-label">✦ Our Values</span>
            <h2 class="section-h2">What we stand for</h2>
            <div class="about-values" style="margin-top:0;">
                <div class="val-card">
                    <div class="val-icon">💡</div>
                    <div class="val-title">Evidence-Based</div>
                    <div class="val-desc">Every recommendation is rooted in decades of seasonal colour theory, not trend
                        cycles or guesswork.</div>
                </div>
                <div class="val-card">
                    <div class="val-icon">🌍</div>
                    <div class="val-title">Inclusive by Design</div>
                    <div class="val-desc">Built for every skin tone, every body type, every background. Colour is for
                        everyone.</div>
                </div>
                <div class="val-card">
                    <div class="val-icon">🔒</div>
                    <div class="val-title">Privacy First</div>
                    <div class="val-desc">We never sell your data. Your quiz results are yours — private, personal, and
                        powerful.</div>
                </div>
                <div class="val-card">
                    <div class="val-icon">✨</div>
                    <div class="val-title">Joyful Simplicity</div>
                    <div class="val-desc">Style should feel liberating, not overwhelming. We keep it clear, practical, and
                        delightful.</div>
                </div>
            </div>
        </section>

        <!-- Mission -->
        <section class="mission-section">
            <div class="mission-grid">
                <div>
                    <span class="section-label">✦ Our Mission</span>
                    <h2 class="section-h2">Colour confidence for every person on earth</h2>
                    <div class="mission-text">We believe knowing your colours is one of the most practical and joyful things
                        you can do for yourself. It simplifies your wardrobe, reduces waste, saves money, and most
                        importantly — makes you feel like yourself every single day.</div>
                    <div class="mission-quote">"The right colour doesn't just flatter you. It amplifies who you already
                        are."</div>
                </div>
                <div class="mission-stats">
                    <div class="ms-card">
                        <div class="ms-num">48K+</div>
                        <div class="ms-label">People analysed</div>
                    </div>
                    <div class="ms-card">
                        <div class="ms-num">96%</div>
                        <div class="ms-label">Satisfaction rate</div>
                    </div>
                    <div class="ms-card">
                        <div class="ms-num">4</div>
                        <div class="ms-label">Colour seasons</div>
                    </div>
                    <div class="ms-card">
                        <div class="ms-num">5min</div>
                        <div class="ms-label">To your results</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team -->
        <section class="section">
            <span class="section-label">✦ The Team</span>
            <h2 class="section-h2">People behind ChromaFit</h2>
            <p class="section-sub">A small team of colour nerds, stylists, and technologists united by one obsession.</p>
            <div class="team-grid">
                <div class="team-card">
                    <div class="team-img" style="background:linear-gradient(145deg,var(--blush),var(--terracotta));">🎨
                    </div>
                    <div class="team-body">
                        <div class="team-name">Aisha Noor</div>
                        <div class="team-role">Founder & Colour Director</div>
                        <div class="team-bio">Former personal stylist with 12 years of experience across London and Dubai.
                            Aisha developed ChromaFit's core analysis methodology.</div>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-img" style="background:linear-gradient(145deg,var(--teal-light),var(--sage));">💻</div>
                    <div class="team-body">
                        <div class="team-name">Rahul Mehta</div>
                        <div class="team-role">Head of Technology</div>
                        <div class="team-bio">Full-stack engineer and AI enthusiast. Rahul built the analysis engine that
                            powers ChromaFit's recommendations.</div>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-img" style="background:linear-gradient(145deg,var(--lavender-light),var(--lavender));">
                        ✨</div>
                    <div class="team-body">
                        <div class="team-name">Zara Hassan</div>
                        <div class="team-role">Head of Design & UX</div>
                        <div class="team-bio">Brand designer and typography lover. Zara ensures ChromaFit is as beautiful
                            and intuitive as the palettes it creates.</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Press -->
        <div>
            <div style="padding:40px 6% 20px;text-align:center;"><span class="section-label">✦ As Seen In</span></div>
            <div class="press-grid">
                <div class="press-logo">Vogue PK</div>
                <div class="press-logo">Dawn Images</div>
                <div class="press-logo">The Style Edit</div>
                <div class="press-logo">Colour Collective</div>
            </div>
        </div>
    </div>
@endsection
