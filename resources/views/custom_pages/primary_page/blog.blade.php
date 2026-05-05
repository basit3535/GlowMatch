@extends('layouts.app')

@section('content')
    <div class="page" id="page-blog">
        <div class="blog-hero">
            <span class="section-label">✦ Style & Colour Journal</span>
            <h1 class="section-h2">Inspiration for every season</h1>
            <p style="color:var(--muted);font-size:16px;max-width:480px;margin-top:10px;">Deep dives into colour theory, body
                type styling, makeup, and body-positive fashion advice.</p>
            <div class="blog-filters">
                <div class="bf-pill active">All Articles</div>
                <div class="bf-pill">Colour Theory</div>
                <div class="bf-pill">Body Types</div>
                <div class="bf-pill">Makeup</div>
                <div class="bf-pill">Capsule Wardrobe</div>
                <div class="bf-pill">Style Tips</div>
            </div>
        </div>

        <div class="blog-layout">
            <div class="blog-featured-wrap">
                <div class="blog-feat-img">🍂</div>
                <div class="blog-feat-body">
                    <span class="tag tag-rose" style="margin-bottom:14px;display:inline-block;">Colour Theory</span>
                    <div class="blog-feat-title">The Complete Guide to Autumn Colour Season: Palette, Makeup & Wardrobe
                    </div>
                    <div class="blog-feat-meta">
                        <span>June 12, 2025</span>
                        <span>·</span>
                        <span>8 min read</span>
                    </div>
                    <div class="blog-feat-excerpt">If warm, earthy, and rich tones make you look radiant, you're likely an
                        autumn. Dive into everything about this gorgeous season — from the best foundation shades to outfit
                        formulas that work year-round.</div>
                    <button class="btn-outline" style="font-size:13px;padding:10px 22px;">Read Article →</button>
                </div>
            </div>

            <div class="blog-cards">
                <div class="blog-card">
                    <div class="bc-img" style="background:linear-gradient(145deg,#7B8EC9,#C8A2C8);">🌸</div>
                    <div class="bc-body">
                        <div class="bc-tag">Body Types</div>
                        <div class="bc-title">Dressing the Pear Shape: What Actually Flatters</div>
                        <div class="bc-excerpt">Forget the old rules. An honest, body-positive guide to styling your
                            pear-shaped silhouette with confidence.</div>
                        <div class="bc-meta"><span>May 30, 2025</span><span>·</span><span>5 min</span></div>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="bc-img" style="background:linear-gradient(145deg,#3C4A6B,#6B7F9E);">❄️</div>
                    <div class="bc-body">
                        <div class="bc-tag">Colour Season</div>
                        <div class="bc-title">Winter Palette: Embracing Bold Jewel Tones</div>
                        <div class="bc-excerpt">Crisp, cool, and high-contrast — winters shine in the shades others shy away
                            from. A guide to wearing your boldest self.</div>
                        <div class="bc-meta"><span>May 18, 2025</span><span>·</span><span>6 min</span></div>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="bc-img" style="background:linear-gradient(145deg,#F4C7A0,#E8A882);">💄</div>
                    <div class="bc-body">
                        <div class="bc-tag">Makeup</div>
                        <div class="bc-title">Best Lipstick Shades for Every Skin Undertone</div>
                        <div class="bc-excerpt">From your perfect nude to a show-stopping red — undertone-matched lip colour
                            makes an enormous difference.</div>
                        <div class="bc-meta"><span>May 10, 2025</span><span>·</span><span>4 min</span></div>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="bc-img" style="background:linear-gradient(145deg,#7A9E7E,#A8C5A0);">🌿</div>
                    <div class="bc-body">
                        <div class="bc-tag">Capsule Wardrobe</div>
                        <div class="bc-title">Build a Capsule Wardrobe Around Your Colour Season</div>
                        <div class="bc-excerpt">A minimalist wardrobe strategy that works with your season's palette. Less
                            clutter, more cohesion.</div>
                        <div class="bc-meta"><span>April 28, 2025</span><span>·</span><span>7 min</span></div>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="bc-img" style="background:linear-gradient(145deg,#C8A2C8,#B0C4DE);">☁️</div>
                    <div class="bc-body">
                        <div class="bc-tag">Colour Season</div>
                        <div class="bc-title">Summer Palette: The Art of Soft, Muted Elegance</div>
                        <div class="bc-excerpt">Summer seasons have quiet magnetism — dusty pinks, cool lavenders, and
                            powder blues that feel effortlessly chic.</div>
                        <div class="bc-meta"><span>April 14, 2025</span><span>·</span><span>5 min</span></div>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="bc-img" style="background:linear-gradient(145deg,#D4845A,#E8C080);">🌸</div>
                    <div class="bc-body">
                        <div class="bc-tag">Style Tips</div>
                        <div class="bc-title">Spring Season: How to Wear Your Best Warm Brights</div>
                        <div class="bc-excerpt">Springs are made for clear, fresh, and warm colours. Here's how to wear them
                            without looking overwhelming.</div>
                        <div class="bc-meta"><span>April 2, 2025</span><span>·</span><span>6 min</span></div>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="bc-img" style="background:linear-gradient(145deg,#E8DDD0,#C8B8A8);">👗</div>
                    <div class="bc-body">
                        <div class="bc-tag">Body Types</div>
                        <div class="bc-title">The Hourglass Myth: What to Actually Wear</div>
                        <div class="bc-excerpt">Everyone says hourglass figures can wear anything. But what really works? We
                            break down the truth with practical examples.</div>
                        <div class="bc-meta"><span>March 22, 2025</span><span>·</span><span>5 min</span></div>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="bc-img" style="background:linear-gradient(145deg,#B8D4C8,#88B0A0);">🪞</div>
                    <div class="bc-body">
                        <div class="bc-tag">Style Tips</div>
                        <div class="bc-title">How to Find Your Undertone at Home (No Guessing)</div>
                        <div class="bc-excerpt">Three foolproof methods to identify your skin undertone using only things
                            you already have at home.</div>
                        <div class="bc-meta"><span>March 10, 2025</span><span>·</span><span>4 min</span></div>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="bc-img" style="background:linear-gradient(145deg,#E0C8D8,#C8A8C0);">💅</div>
                    <div class="bc-body">
                        <div class="bc-tag">Makeup</div>
                        <div class="bc-title">Season-Matched Nail Colours: Your Complete Guide</div>
                        <div class="bc-excerpt">Your nail colour should harmonise with your season palette — here's exactly
                            what shades to reach for.</div>
                        <div class="bc-meta"><span>February 28, 2025</span><span>·</span><span>3 min</span></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter -->
        <div class="newsletter-bar">
            <div class="nl-text">
                <h2 class="section-h2">Get colour tips in your inbox</h2>
                <p>New articles on seasons, styling, and colour every week.</p>
            </div>
            <div class="nl-form">
                <input class="nl-input" type="email" placeholder="your@email.com" />
                <button class="nl-btn"
                    onclick="this.textContent='Subscribed ✓';this.style.background='var(--sage)';">Subscribe</button>
            </div>
        </div>
    </div>
@endsection
