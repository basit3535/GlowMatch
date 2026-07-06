<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GlowMatch. — Your Colour & Style Universe</title>

    <meta name="description"
        content="Discover your perfect colours, style recommendations, and personalized fashion insights with GlowMatch..">

    <link rel="canonical" href="https://glowmatch.co.uk">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="GlowMatch. — Your Colour & Style Universe">
    <meta property="og:description"
        content="Discover your perfect colours, style recommendations, and personalized fashion insights with GlowMatch..">
    <meta property="og:url" content="https://glowmatch.co.uk">
    <meta property="og:image" content="https://glowmatch.co.uk/images/og-image.jpg">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GlowMatch. — Your Colour & Style Universe">
    <meta name="twitter:description"
        content="Discover your perfect colours, style recommendations, and personalized fashion insights with GlowMatch..">
    <meta name="twitter:image" content="https://glowmatch.co.uk/images/og-image.jpg">
    <script src="https://cdn.tailwindcss.com"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Jost:wght@300;400;500;600&display=swap"
        rel="stylesheet" />
    @include('layouts.style')
</head>

<body>

    <!-- ── NAVIGATION ── -->
    <nav>
        <div class="nav-logo"><a href="{{ route('show.home_page') }}">Glow<em>Match</em></a></div>
        <div class="nav-center">
            <a href="{{ route('show.home_page') }}" class="active" id="nav-home">Home</a>
            <a href="{{ route('show.custom_pages', ['slug' => 'about']) }}" id="nl-about">About</a>
            <a href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}" id="nl-seasons">Colour Seasons</a>
            <a href="{{ route('show.custom_pages', ['slug' => 'body-types']) }}" id="nl-bodytypes">Body Types</a>
            <a href="{{ route('show.custom_pages', ['slug' => 'blog']) }}" id="nav-blog">Blog</a>
            <a href="{{ route('show.custom_pages', ['slug' => 'contact']) }}" id="nav-contact">Contact</a>
        </div>
        </div>
        <div class="nav-right">
            <a href="{{ route('show.custom_pages', ['slug' => 'about']) }}"
            class="nav-btn-ghost hidden sm:inline-block">
                Learn More
            </a>
            <a href="{{ route('show.custom_pages', ['slug' => 'test']) }}" class="nav-btn-fill">Take the Quiz →</a>
        </div>
        <div class="hamburger" onclick="toggleMobileMenu()">
            <span></span><span></span><span></span>
        </div>
    </nav>

    <!-- Mobile menu overlay -->
    <div id="mobile-menu"
        style="display:none;position:fixed;top:70px;left:0;right:0;background:var(--warm-white);border-bottom:1px solid var(--border);z-index:190;padding:20px 6%;flex-direction:column;gap:4px;">
        <a onclick="toggleMobileMenu()" href="{{ route('show.home_page', ['slug' => 'home']) }}"
            style="padding:12px 0;font-size:15px;font-weight:500;color:var(--charcoal);text-decoration:none;border-bottom:1px solid var(--border);cursor:pointer;">Home</a>
        <a onclick="toggleMobileMenu()" href="{{ route('show.custom_pages', ['slug' => 'about']) }}"
            style="padding:12px 0;font-size:15px;font-weight:500;color:var(--charcoal);text-decoration:none;border-bottom:1px solid var(--border);cursor:pointer;">About</a>
        <a onclick="toggleMobileMenu()" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}"
            style="padding:12px 0;font-size:15px;font-weight:500;color:var(--charcoal);text-decoration:none;border-bottom:1px solid var(--border);cursor:pointer;">Colour
            Seasons</a>
        <a onclick="toggleMobileMenu()" href="{{ route('show.custom_pages', ['slug' => 'body-types']) }}"
            style="padding:12px 0;font-size:15px;font-weight:500;color:var(--charcoal);text-decoration:none;border-bottom:1px solid var(--border);cursor:pointer;">Body
            Types</a>
        <a onclick="toggleMobileMenu()" href="{{ route('show.custom_pages', ['slug' => 'blog']) }}"
            style="padding:12px 0;font-size:15px;font-weight:500;color:var(--charcoal);text-decoration:none;border-bottom:1px solid var(--border);cursor:pointer;">Blog</a>
        <a onclick="toggleMobileMenu()" href="{{ route('show.custom_pages', ['slug' => 'contact']) }}"
            style="padding:12px 0;font-size:15px;font-weight:500;color:var(--charcoal);text-decoration:none;cursor:pointer;">Contact</a>
        <a class="btn-primary" style="margin-top:12px;" onclick="toggleMobileMenu()"
            href="{{ route('show.custom_pages', ['slug' => 'test']) }}">Take the Quiz
            →</a>
    </div>

    <!-- Main Content -->
    @yield('content')



    <!-- Footer Spacing -->
    @if (Route::has('login'))
        <div class="h-14 hidden lg:block"></div>
    @endif

    <!-- CTA -->
    <section class="cta-banner">
            <span class="section-label">✦ Free · No Sign-Up · Results in 5 Minutes</span>
            <h2 class="section-h2">Ready to find your colour season?</h2>
            <p class="section-sub text-center mx-auto">Join 48,000+ people who've discovered their perfect colour palette and transformed the way they shop and get dressed.</p>
        <div class="cta-btns">
            <a class="btn-primary" href="{{ route('show.custom_pages', ['slug' => 'test']) }}">Start My Analysis →</a>
            <a style="background:rgba(250,247,242,.1);color:var(--cream);padding:14px 32px;border-radius:50px;font-size:14px;font-weight:500;border:1.5px solid rgba(250,247,242,.2);cursor:pointer;font-family:'Jost',sans-serif;"
                href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">Explore Seasons First</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-top">
            <div class="footer-brand">
                <div class="footer-logo">Glow<em>Match</em></div>
                <div class="footer-tagline">Your personal colour season and style guide — powered by colour theory and
                    modern insights.</div>
                <div class="footer-tagline">
                    GlowMatch is a trading style of SB Intercontinental LTD.
                    <br>
                    Registered in England and Wales (Company No. 17047376).
                    <br>
                    Registered Office: 22 Balliol Street, Manchester, England, M8 0WS
                </div>
                <div class="footer-social">
                    <div class="social-btn">📸</div>
                    <div class="social-btn">🎵</div>
                    <div class="social-btn">🐦</div>
                    <div class="social-btn">📌</div>
                </div>
            </div>
            <div class="footer-col">
                <h5>Explore</h5><a href="{{ route('show.custom_pages', ['slug' => 'test']) }}">Take the Quiz</a><a
                    href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">Colour
                    Seasons</a><a href="{{ route('show.custom_pages', ['slug' => 'body-types']) }}">Body Types</a><a
                    href="{{ route('show.custom_pages', ['slug' => 'blog']) }}">Blog</a>
            </div>
            <div class="footer-col">
                <h5>Learn</h5><a>Colour Theory</a><a>Seasonal Palettes</a><a>Style Guide</a><a>FAQ</a>
            </div>
            <div class="footer-col">
                <h5>Company</h5><a href="{{ route('show.custom_pages', ['slug' => 'about']) }}">About Us</a><a
                    href="{{ route('show.custom_pages', ['slug' => 'contact']) }}">Contact</a><a>Press
                    Kit</a><a>Careers</a>
            </div>
            <div class="footer-col">
                <h5>Legal</h5><a>Privacy Policy</a><a>Terms of Service</a><a>Cookie Policy</a><a>Accessibility</a>
            </div>
        </div>
        <div class="footer-bottom">
            <div>© 2026 SB INTERCONTINENTAL LIMITED. All rights reserved.</div>
            <div><a>Privacy</a><a>Terms</a><a>Cookies</a></div>
        </div>
    </footer>
<!-- Floating Cookie Banner – always visible until accepted -->
<div id="cookie-banner" style="position:fixed; bottom:24px; right:24px; z-index:9999; max-width:380px; width:calc(100% - 48px); background:#FCF8F2; border:1px solid #E6DFD6; border-radius:16px; box-shadow:0 8px 32px rgba(0,0,0,0.12); padding:24px 22px 20px; font-family:'Jost',sans-serif; box-sizing:border-box; transition:transform 0.3s ease, opacity 0.3s ease; transform:scale(1); opacity:1;">
    <div style="display:flex; flex-direction:column; gap:14px;">
        <div style="display:flex; justify-content:space-between; align-items:flex-start;">
            <div style="font-size:16px; font-weight:600; color:#2D2A24; letter-spacing:-0.3px;">🍪 Cookies</div>
            <button id="cookie-dismiss" style="background:transparent; border:none; font-size:22px; line-height:1; color:#8A7A6A; cursor:pointer; padding:0 4px; transition:color 0.2s;">&times;</button>
        </div>
        <p style="margin:0; font-size:13px; line-height:1.6; color:#2D2A24; opacity:0.85;">
            We use cookies to improve your experience, analyse traffic, and personalise content.
            <a href="#" style="color:#C4956A; text-decoration:underline; font-weight:500;">Learn more</a>
        </p>
        <div style="display:flex; gap:10px; flex-wrap:wrap; margin-top:6px;">
            <button id="cookie-accept" style="flex:1; background:#C4956A; border:none; border-radius:50px; padding:10px 18px; font-size:13px; font-weight:500; color:#fff; cursor:pointer; box-shadow:0 4px 12px rgba(196,149,106,0.25); transition:all 0.2s; min-width:100px;">Accept All</button>
            <button id="cookie-reject" style="flex:1; background:transparent; border:1px solid #E6DFD6; border-radius:50px; padding:10px 18px; font-size:13px; font-weight:500; color:#2D2A24; cursor:pointer; transition:all 0.2s; min-width:80px;">Reject</button>
        </div>
    </div>
</div>

<script>
    (function() {
        // Run as soon as possible
        const banner = document.getElementById('cookie-banner');
        if (!banner) return;

        // If consent already given permanently, hide the banner and do nothing else.
        if (localStorage.getItem('cookie_consent') === 'accepted') {
            banner.style.display = 'none';
            return;
        }

        // If a cookie with consent exists (server-side), hide and sync.
        if (document.cookie.includes('cookie_consent=accepted')) {
            localStorage.setItem('cookie_consent', 'accepted');
            banner.style.display = 'none';
            return;
        }

        // If dismissed for this session, hide (but we'll show again on next page load)
        if (sessionStorage.getItem('cookie_dismissed') === 'true') {
            banner.style.display = 'none';
            return;
        }

        // Otherwise, ensure the banner is visible (it should be by default)
        banner.style.display = 'block';

        // Attach events
        document.getElementById('cookie-accept').addEventListener('click', function() {
            localStorage.setItem('cookie_consent', 'accepted');
            document.cookie = "cookie_consent=accepted; path=/; max-age=" + 60 * 60 * 24 * 365;
            banner.style.display = 'none';
        });

        document.getElementById('cookie-dismiss').addEventListener('click', function() {
            sessionStorage.setItem('cookie_dismissed', 'true');
            banner.style.display = 'none';
        });

        document.getElementById('cookie-reject').addEventListener('click', function() {
             localStorage.setItem('cookie_consent', 'accepted');
            document.cookie = "cookie_consent=accepted; path=/; max-age=" + 60 * 60 * 24 * 365;
            banner.style.display = 'none';
        });
    })();
</script>
    @include('layouts.script')

</body>

</html>
