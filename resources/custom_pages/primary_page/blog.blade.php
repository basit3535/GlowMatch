@extends('layouts.app')

@section('content')
    <div class="page" id="page-blog">
        <div class="blog-hero">
            <div class="section-label">✦ Style & Colour Journal</div>
            <h1 class="section-h2">Inspiration for every season</h1>
            <p style="color:var(--muted); font-size:16px; max-width:480px; margin-top:12px;">Deep dives into colour
                theory, personal style, and body-positive fashion advice.</p>
        </div>
        <div class="blog-grid">
            <!-- Featured -->
            <div class="blog-card blog-featured">
                <div class="blog-img" style="background:linear-gradient(145deg,#C97B5A,#D4A856);">
                    <div class="blog-img-inner" style="font-size:72px;">🍂</div>
                </div>
                <div class="blog-body">
                    <span class="blog-tag">Colour Theory</span>
                    <div class="blog-title">The Complete Guide to Autumn Colour Season: Palette, Makeup & Wardrobe
                    </div>
                    <div class="blog-excerpt">If warm, earthy, and rich tones make you look radiant, you're likely an
                        autumn. Dive into everything about this gorgeous season — from the best foundation shades to
                        outfit formulas that work year-round.</div>
                    <div class="blog-meta"><span>June 12, 2025</span>8 min read</div>
                </div>
            </div>

            <div class="blog-card">
                <div class="blog-img" style="background:linear-gradient(145deg,#7B8EC9,#C8A2C8);">
                    <div class="blog-img-inner" style="font-size:56px;">🌸</div>
                </div>
                <div class="blog-body">
                    <span class="blog-tag">Body Types</span>
                    <div class="blog-title">Dressing the Pear Shape: What Actually Flatters</div>
                    <div class="blog-excerpt">Forget the old rules. Here's an honest, body-positive guide to styling
                        your pear-shaped silhouette with confidence and flair.</div>
                    <div class="blog-meta"><span>May 30, 2025</span>5 min read</div>
                </div>
            </div>

            <div class="blog-card">
                <div class="blog-img" style="background:linear-gradient(145deg,#3C4A6B,#6B7F9E);">
                    <div class="blog-img-inner" style="font-size:56px;">❄️</div>
                </div>
                <div class="blog-body">
                    <span class="blog-tag">Colour Season</span>
                    <div class="blog-title">Winter Palette: Embracing Bold Jewel Tones</div>
                    <div class="blog-excerpt">Crisp, cool, and high-contrast — winters shine in the shades others shy
                        away from. A guide to wearing your boldest self.</div>
                    <div class="blog-meta"><span>May 18, 2025</span>6 min read</div>
                </div>
            </div>

            <div class="blog-card">
                <div class="blog-img" style="background:linear-gradient(145deg,#F4C7A0,#E8A882);">
                    <div class="blog-img-inner" style="font-size:56px;">🌻</div>
                </div>
                <div class="blog-body">
                    <span class="blog-tag">Makeup</span>
                    <div class="blog-title">The Best Lipstick Shades for Every Skin Undertone</div>
                    <div class="blog-excerpt">From your perfect nude to a show-stopping red — undertone-matched lip
                        colour makes an enormous difference. Here's your guide.</div>
                    <div class="blog-meta"><span>May 10, 2025</span>4 min read</div>
                </div>
            </div>

            <div class="blog-card">
                <div class="blog-img" style="background:linear-gradient(145deg,#7A9E7E,#A8C5A0);">
                    <div class="blog-img-inner" style="font-size:56px;">🌿</div>
                </div>
                <div class="blog-body">
                    <span class="blog-tag">Style Tips</span>
                    <div class="blog-title">How to Build a Capsule Wardrobe Around Your Colour Season</div>
                    <div class="blog-excerpt">A minimalist wardrobe strategy that works specifically with your season's
                        palette. Less clutter, more cohesion.</div>
                    <div class="blog-meta"><span>April 28, 2025</span>7 min read</div>
                </div>
            </div>

            <div class="blog-card">
                <div class="blog-img" style="background:linear-gradient(145deg,#C8A2C8,#B0C4DE);">
                    <div class="blog-img-inner" style="font-size:56px;">☁️</div>
                </div>
                <div class="blog-body">
                    <span class="blog-tag">Colour Season</span>
                    <div class="blog-title">Summer Palette: The Art of Soft, Muted Elegance</div>
                    <div class="blog-excerpt">Summer seasons have a quiet magnetism — dusty pinks, cool lavenders, and
                        powder blues that feel effortlessly chic.</div>
                    <div class="blog-meta"><span>April 14, 2025</span>5 min read</div>
                </div>
            </div>
        </div>

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
                </div>
                <div class="footer-col">
                    <h4>Learn</h4>
                    <a>Colour Theory</a>
                    <a>Style Guide</a>
                    <a>FAQ</a>
                </div>
                <div class="footer-col">
                    <h4>Company</h4>
                    <a onclick="showPage('contact')">Contact</a>
                    <a>About Us</a>
                    <a>Privacy</a>
                </div>
            </div>
            <div class="footer-bottom">
                <div>© 2025 ChromaFit.</div>
            </div>
        </footer>
    </div>
@endsection
