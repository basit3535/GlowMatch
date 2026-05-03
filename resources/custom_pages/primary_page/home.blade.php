@extends('layouts.app')
@section('content')
    <div class="page active" id="page-home">
        <section class="hero">
            <div class="hero-text">
                <span class="hero-badge">✦ AI-Powered Color Analysis</span>
                <h1 class="hero-h1">Discover your perfect <em>colour palette</em></h1>
                <p class="hero-sub">Find out which colors make you radiate. Based on your unique skin tone, eye color,
                    hair, and body type — we craft your personal style guide.</p>
                <div class="hero-buttons">
                    <button class="btn-primary" onclick="showPage('test')">Start Free Analysis</button>
                    <button class="btn-outline" onclick="showPage('blog')">Explore Blog</button>
                </div>
            </div>
            <div class="hero-visual">
                <div class="color-card cc-warm">
                    <div class="color-card-label">Warm Tone</div>
                    <div class="color-card-title">Autumn Palette</div>
                    <div class="color-swatches">
                        <div class="swatch" style="background:#C97B5A;"></div>
                        <div class="swatch" style="background:#D4A856;"></div>
                        <div class="swatch" style="background:#8B4A32;"></div>
                        <div class="swatch" style="background:#6B8E4E;"></div>
                    </div>
                    <div class="palette-strip">
                        <span style="background:#C97B5A;"></span><span style="background:#D4A856;"></span><span
                            style="background:#8B4A32;"></span><span style="background:#6B8E4E;"></span><span
                            style="background:#B8632A;"></span>
                    </div>
                </div>
                <div class="color-card cc-cool">
                    <div class="color-card-label">Cool Tone</div>
                    <div class="color-card-title">Winter</div>
                    <div class="color-swatches">
                        <div class="swatch" style="background:#3B4F8C;"></div>
                        <div class="swatch" style="background:#9B2335;"></div>
                        <div class="swatch" style="background:#1A1A2E;"></div>
                    </div>
                </div>
                <div class="color-card cc-neutral">
                    <div class="color-card-label">Neutral Tone</div>
                    <div class="color-card-title">Summer</div>
                    <div class="color-swatches">
                        <div class="swatch" style="background:#C4A8C0;"></div>
                        <div class="swatch" style="background:#8FA8C8;"></div>
                        <div class="swatch" style="background:#7A9E7E;"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How it works -->
        <section class="section-home">
            <div class="section-label">✦ How It Works</div>
            <h2 class="section-h2">Science-backed colour<br>matching in minutes</h2>
            <p class="section-sub">Our quiz combines colour theory and personal style principles to give you a complete
                guide.</p>
            <div class="steps-grid">
                <div class="step-card">
                    <div class="step-num">01</div>
                    <div class="step-icon">🎨</div>
                    <div class="step-title">Tell us about your features</div>
                    <div class="step-desc">Select your skin tone undertone, natural eye colour, and hair colour from our
                        carefully curated options.</div>
                </div>
                <div class="step-card">
                    <div class="step-num">02</div>
                    <div class="step-icon">👗</div>
                    <div class="step-title">Share your body type</div>
                    <div class="step-desc">Help us understand your silhouette so we can recommend cuts and styles that
                        complement your shape perfectly.</div>
                </div>
                <div class="step-card">
                    <div class="step-num">03</div>
                    <div class="step-icon">✨</div>
                    <div class="step-title">Get your full colour season</div>
                    <div class="step-desc">Receive your personalized palette with your best colours, colours to avoid,
                        and exactly what shades to wear.</div>
                </div>
                <div class="step-card">
                    <div class="step-num">04</div>
                    <div class="step-icon">🛍️</div>
                    <div class="step-title">Discover outfit ideas</div>
                    <div class="step-desc">Browse curated clothing recommendations based on both your colour season and
                        body type analysis.</div>
                </div>
            </div>
        </section>

        <!-- Seasons -->
        <section class="palette-section">
            <div class="section-label">✦ Colour Seasons</div>
            <h2 class="section-h2">Which season are you?</h2>
            <p class="section-sub">Every person falls into one of four colour seasons, each with a stunning range of
                shades.</p>
            <div class="seasons-grid">
                <div class="season-card s-spring">
                    <div class="season-name">Spring</div>
                    <div class="season-desc">Warm, light, and delicate. You glow in peachy corals and golden yellows.
                    </div>
                    <div class="season-dots">
                        <div class="season-dot" style="background:#F4A460;"></div>
                        <div class="season-dot" style="background:#FFD700;"></div>
                        <div class="season-dot" style="background:#FA8072;"></div>
                        <div class="season-dot" style="background:#90EE90;"></div>
                        <div class="season-dot" style="background:#FFF8DC;"></div>
                    </div>
                </div>
                <div class="season-card s-summer">
                    <div class="season-name">Summer</div>
                    <div class="season-desc">Cool, soft, and muted. Dusty roses and lavenders are your signature.</div>
                    <div class="season-dots">
                        <div class="season-dot" style="background:#C8A2C8;"></div>
                        <div class="season-dot" style="background:#8FA8C8;"></div>
                        <div class="season-dot" style="background:#C9A0DC;"></div>
                        <div class="season-dot" style="background:#B0C4DE;"></div>
                        <div class="season-dot" style="background:#D8BFD8;"></div>
                    </div>
                </div>
                <div class="season-card s-autumn">
                    <div class="season-name">Autumn</div>
                    <div class="season-desc">Warm, deep, and rich. Terracotta, olive, and burnt orange are yours.</div>
                    <div class="season-dots">
                        <div class="season-dot" style="background:#C97B5A;"></div>
                        <div class="season-dot" style="background:#8B6914;"></div>
                        <div class="season-dot" style="background:#6B4226;"></div>
                        <div class="season-dot" style="background:#556B2F;"></div>
                        <div class="season-dot" style="background:#B8860B;"></div>
                    </div>
                </div>
                <div class="season-card s-winter">
                    <div class="season-name">Winter</div>
                    <div class="season-desc">Cool, clear, and bold. You shine in jewel tones and stark contrasts.</div>
                    <div class="season-dots">
                        <div class="season-dot" style="background:#00008B;"></div>
                        <div class="season-dot" style="background:#8B0000;"></div>
                        <div class="season-dot" style="background:#006400;"></div>
                        <div class="season-dot" style="background:#4B0082;"></div>
                        <div class="season-dot" style="background:#F5F5F5;"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats -->
        <section class="stats-section">
            <div class="stats-grid">
                <div>
                    <div class="stat-num">48K+</div>
                    <div class="stat-label">Analyses completed</div>
                </div>
                <div>
                    <div class="stat-num">4</div>
                    <div class="stat-label">Colour seasons covered</div>
                </div>
                <div>
                    <div class="stat-num">96%</div>
                    <div class="stat-label">User satisfaction rate</div>
                </div>
                <div>
                    <div class="stat-num">5min</div>
                    <div class="stat-label">Average quiz time</div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="testimonial-section">
            <div class="section-label">✦ What People Say</div>
            <h2 class="section-h2">Life-changing colour advice</h2>
            <div class="testimonials-grid" style="margin-top:48px;">
                <div class="testimonial-card">
                    <div class="t-stars">★★★★★</div>
                    <div class="t-text">"I finally understand why certain colours washed me out. The autumn palette
                        recommendations have completely transformed my wardrobe. Worth every second!"</div>
                    <div class="t-author">
                        <div class="t-avatar" style="background:#FDF0EA; color:#8B4A32;">SA</div>
                        <div>
                            <div class="t-name">Sara Ahmed</div>
                            <div class="t-tag">Autumn · Pear Shape</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="t-stars">★★★★★</div>
                    <div class="t-text">"As someone who always struggled with shopping, this quiz gave me a clear
                        direction. The body type recommendations were spot-on and so practical."</div>
                    <div class="t-author">
                        <div class="t-avatar" style="background:#EAF0FA; color:#1A3A5C;">MK</div>
                        <div>
                            <div class="t-name">Maya Kaur</div>
                            <div class="t-tag">Winter · Hourglass</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="t-stars">★★★★★</div>
                    <div class="t-text">"I never knew I was a 'Summer' season until this quiz! The dusty rose and
                        lavender suggestions are incredibly flattering on me. Highly recommend."</div>
                    <div class="t-author">
                        <div class="t-avatar" style="background:#F0EDF5; color:#4B3A6B;">LP</div>
                        <div>
                            <div class="t-name">Layla Patel</div>
                            <div class="t-tag">Summer · Rectangle</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <div class="footer-grid">
                <div>
                    <div class="footer-logo">ChromaFit</div>
                    <div class="footer-desc">Your personal colour season and style guide powered by colour theory and
                        AI insights.</div>
                </div>
                <div class="footer-col">
                    <h4>Explore</h4>
                    <a onclick="showPage('test')">Take the Quiz</a>
                    <a onclick="showPage('blog')">Blog</a>
                    <a>Colour Seasons</a>
                    <a>Body Types</a>
                </div>
                <div class="footer-col">
                    <h4>Learn</h4>
                    <a>Colour Theory</a>
                    <a>Seasonal Palettes</a>
                    <a>Style Guide</a>
                    <a>FAQ</a>
                </div>
                <div class="footer-col">
                    <h4>Company</h4>
                    <a onclick="showPage('contact')">Contact</a>
                    <a>About Us</a>
                    <a>Privacy Policy</a>
                    <a>Terms</a>
                </div>
            </div>
            <div class="footer-bottom">
                <div>© 2025 ChromaFit. All rights reserved.</div>
                <div>Made with love for colour enthusiasts</div>
            </div>
        </footer>
    </div>
@endsection
