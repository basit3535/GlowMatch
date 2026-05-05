<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ChromaFit — Your Colour & Style Universe</title>
    <script src="https://cdn.tailwindcss.com"></script>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Jost:wght@300;400;500;600&display=swap"
        rel="stylesheet" />
    @include('layouts.style')
</head>

<body>

    <!-- ── NAVIGATION ── -->
    <nav>
        <div class="nav-logo">Chroma<em>Fit</em></div>
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
            <a href="{{ route('show.custom_pages', ['slug' => 'about']) }}" class="nav-btn-ghost">Learn More</a>
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
        <h2 class="section-h2" style="font-size:clamp(34px,4vw,58px);">Ready to find your colours?</h2>
        <p>It takes just 5 minutes and it's completely free.</p>
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
                <div class="footer-logo">Chroma<em>Fit</em></div>
                <div class="footer-tagline">Your personal colour season and style guide — powered by colour theory and
                    modern insights.</div>
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
            <div>© 2025 ChromaFit. All rights reserved.</div>
            <div><a>Privacy</a><a>Terms</a><a>Cookies</a></div>
        </div>
    </footer>

    @include('layouts.script')

</body>

</html>
