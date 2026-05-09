@extends('layouts.app')
@section('page_style')
    <x-season-style/>
@endsection
@section('content')
    <div class="page" id="page-seasons">
        <div class="hub-hero">
            <div class="lbl" style="color:#C97B5A;margin-bottom:16px;">✦ All 12 Colour Seasons</div>
            <div class="hub-h1">Your colour<br><em>universe</em></div>
            <p class="hub-sub">The 12-season colour system goes beyond the basics. Find your exact season — the one that
                truly captures your unique combination of features.</p>

           <div class="hub-tabs">
    <div class="hub-tab active" data-season="all" onclick="filterHub('all',this)">All 12 Seasons</div>
    <div class="hub-tab" data-season="spring" onclick="filterHub('spring',this)">🌸 Spring</div>
    <div class="hub-tab" data-season="summer" onclick="filterHub('summer',this)">☁️ Summer</div>
    <div class="hub-tab" data-season="autumn" onclick="filterHub('autumn',this)">🍂 Autumn</div>
    <div class="hub-tab" data-season="winter" onclick="filterHub('winter',this)">❄️ Winter</div>
</div>
        </div>

        <div class="season-cards-grid" id="season-cards-grid">
            <!-- SPRING -->
            <a href="{{route('show.seasons.custom_pages', ['slug' => 'light-spring'])}}">
                <div class="season-hub-card" data-group="spring">
                    <div class="shc-top light-spring-bg" style="color:#3C1800;">
                        <div class="shc-label">Spring · Warm · Light</div>
                        <div class="shc-name">Light Spring</div>
                        <div class="shc-sub">Delicate warm freshness</div>
                        <div class="shc-dots">
                            <div class="shc-dot" style="background:#FFD8A0;"></div>
                            <div class="shc-dot" style="background:#F5C090;"></div>
                            <div class="shc-dot" style="background:#E8A870;"></div>
                            <div class="shc-dot" style="background:#D4C080;"></div>
                        </div>
                    </div>
                    <div class="shc-body">
                        <div class="shc-desc">The lightest of all springs — peachy, warm, and ethereally delicate. Your
                            colouring is soft with a warm golden base.</div>
                        <div class="shc-btn" style="color:#C97B3A;">Explore Season →</div>
                    </div>
                </div>
            </a>
            <a href="{{route('show.seasons.custom_pages', ['slug' => 'true-spring'])}}">
            <div class="season-hub-card" data-group="spring">
                <div class="shc-top true-spring-bg" style="color:#3C1800;">
                    <div class="shc-label">Spring · Warm · Clear</div>
                    <div class="shc-name">True Spring</div>
                    <div class="shc-sub">Pure warm radiance</div>
                    <div class="shc-dots">
                        <div class="shc-dot" style="background:#F4A460;"></div>
                        <div class="shc-dot" style="background:#FFD700;"></div>
                        <div class="shc-dot" style="background:#FF7F50;"></div>
                        <div class="shc-dot" style="background:#90EE90;"></div>
                    </div>
                </div>
                <div class="shc-body">
                    <div class="shc-desc">The classic spring — vibrant, warm, and clear. You radiate in bright corals, warm
                        yellows, and clear aquas.</div>
                    <div class="shc-btn" style="color:#D4714A;">Explore Season →</div>
                </div>
            </div>
            </a>
            <a href="{{route('show.seasons.custom_pages', ['slug' => 'warm-spring'])}}">
            <div class="season-hub-card" data-group="spring">
                <div class="shc-top warm-spring-bg" style="color:#fff;">
                    <div class="shc-label">Spring · Warm · Deep</div>
                    <div class="shc-name">Warm Spring</div>
                    <div class="shc-sub">Golden warmth, richer depth</div>
                    <div class="shc-dots">
                        <div class="shc-dot" style="background:#E8855A;"></div>
                        <div class="shc-dot" style="background:#D4A843;"></div>
                        <div class="shc-dot" style="background:#8B7035;"></div>
                        <div class="shc-dot" style="background:#C06030;"></div>
                    </div>
                </div>
                <div class="shc-body">
                    <div class="shc-desc">The warmest spring — deeper and richer. You share traits with autumn but your
                        overall look stays clear and golden.</div>
                    <div class="shc-btn" style="color:#B85A38;">Explore Season →</div>
                </div>
            </div>
            </a>
            <!-- SUMMER -->
            <a href="{{route('show.seasons.custom_pages', ['slug' => 'light-summer'])}}">
            <div class="season-hub-card" data-group="summer">
                <div class="shc-top light-summer-bg" style="color:#1A2A4A;">
                    <div class="shc-label">Summer · Cool · Light</div>
                    <div class="shc-name">Light Summer</div>
                    <div class="shc-sub">Soft, airy, and cool</div>
                    <div class="shc-dots">
                        <div class="shc-dot" style="background:#C8D8F0;"></div>
                        <div class="shc-dot" style="background:#D8C0D8;"></div>
                        <div class="shc-dot" style="background:#B8D0C0;"></div>
                        <div class="shc-dot" style="background:#E0D0E0;"></div>
                    </div>
                </div>
                <div class="shc-body">
                    <div class="shc-desc">The most delicate summer — soft, cool, and light as a morning mist. Your colours
                        are powder-soft and effortlessly elegant.</div>
                    <div class="shc-btn" style="color:#6878B4;">Explore Season →</div>
                </div>
            </div>
            </a>
            <a href="{{route('show.seasons.custom_pages', ['slug' => 'true-summer'])}}">
            <div class="season-hub-card" data-group="summer">
                <div class="shc-top true-summer-bg" style="color:#F8F4FF;">
                    <div class="shc-label">Summer · Cool · Muted</div>
                    <div class="shc-name">True Summer</div>
                    <div class="shc-sub">Quiet, cool, and graceful</div>
                    <div class="shc-dots">
                        <div class="shc-dot" style="background:#C8A2C8;"></div>
                        <div class="shc-dot" style="background:#8FA8C8;"></div>
                        <div class="shc-dot" style="background:#D8BFD8;"></div>
                        <div class="shc-dot" style="background:#88A4BC;"></div>
                    </div>
                </div>
                <div class="shc-body">
                    <div class="shc-desc">The classic summer — cool, muted, and romantically understated. Dusty rose and
                        lavender are your true signatures.</div>
                    <div class="shc-btn" style="color:#6880A8;">Explore Season →</div>
                </div>
            </div>
            </a>
            <a href="{{route('show.seasons.custom_pages', ['slug' => 'soft-summer'])}}">
            <div class="season-hub-card" data-group="summer">
                <div class="shc-top soft-summer-bg" style="color:#F0EEF8;">
                    <div class="shc-label">Summer · Neutral-Cool · Muted</div>
                    <div class="shc-name">Soft Summer</div>
                    <div class="shc-sub">Blended, muted neutrality</div>
                    <div class="shc-dots">
                        <div class="shc-dot" style="background:#B8C0CC;"></div>
                        <div class="shc-dot" style="background:#A8B0BC;"></div>
                        <div class="shc-dot" style="background:#989090;"></div>
                        <div class="shc-dot" style="background:#B0A8A0;"></div>
                    </div>
                </div>
                <div class="shc-body">
                    <div class="shc-desc">Where summer meets autumn — soft, blended, and neutrally cool. Your palette is
                        the most muted of all 12 seasons.</div>
                    <div class="shc-btn" style="color:#7880A0;">Explore Season →</div>
                </div>
            </div>
            </a>
            <!-- AUTUMN -->
            <a href="{{route('show.seasons.custom_pages', ['slug' => 'soft-autumn'])}}">
            <div class="season-hub-card" data-group="autumn">
                <div class="shc-top soft-autumn-bg" style="color:#FFF4E8;">
                    <div class="shc-label">Autumn · Neutral-Warm · Muted</div>
                    <div class="shc-name">Soft Autumn</div>
                    <div class="shc-sub">Warm muted versatility</div>
                    <div class="shc-dots">
                        <div class="shc-dot" style="background:#BC8F8F;"></div>
                        <div class="shc-dot" style="background:#A0917E;"></div>
                        <div class="shc-dot" style="background:#8FBC8F;"></div>
                        <div class="shc-dot" style="background:#C4A882;"></div>
                    </div>
                </div>
                <div class="shc-body">
                    <div class="shc-desc">The most gentle autumn — softly warm and beautifully muted. Your look is natural
                        and unfussy, never overpowering.</div>
                    <div class="shc-btn" style="color:#906038;">Explore Season →</div>
                </div>
            </div>
            </a>
            <a href="{{route('show.seasons.custom_pages', ['slug' => 'true-autumn'])}}">
            <div class="season-hub-card" data-group="autumn">
                <div class="shc-top true-autumn-bg" style="color:#FFF0D8;">
                    <div class="shc-label">Autumn · Warm · Muted</div>
                    <div class="shc-name">True Autumn</div>
                    <div class="shc-sub">Rich earthy warmth</div>
                    <div class="shc-dots">
                        <div class="shc-dot" style="background:#C97B5A;"></div>
                        <div class="shc-dot" style="background:#D4A856;"></div>
                        <div class="shc-dot" style="background:#556B2F;"></div>
                        <div class="shc-dot" style="background:#8B4513;"></div>
                    </div>
                </div>
                <div class="shc-body">
                    <div class="shc-desc">The classic autumn — the most warm, earthy, and richly natural of all seasons.
                        Terracotta and olive are your destiny.</div>
                    <div class="shc-btn" style="color:#904820;">Explore Season →</div>
                </div>
            </div>
            </a>
            <a href="{{route('show.seasons.custom_pages', ['slug' => 'dark-autumn'])}}">
            <div class="season-hub-card" data-group="autumn">
                <div class="shc-top dark-autumn-bg" style="color:#FFE8D0;">
                    <div class="shc-label">Autumn · Warm · Dark</div>
                    <div class="shc-name">Dark Autumn</div>
                    <div class="shc-sub">Deep and dramatically warm</div>
                    <div class="shc-dots">
                        <div class="shc-dot" style="background:#8B4A20;"></div>
                        <div class="shc-dot" style="background:#703820;"></div>
                        <div class="shc-dot" style="background:#4A2810;"></div>
                        <div class="shc-dot" style="background:#604028;"></div>
                    </div>
                </div>
                <div class="shc-body">
                    <div class="shc-desc">Where autumn meets winter — deep, rich, and powerfully warm. The darkest and most
                        dramatic of the autumn seasons.</div>
                    <div class="shc-btn" style="color:#703818;">Explore Season →</div>
                </div>
            </div>
            </a>

            <!-- WINTER -->
            <a href="{{route('show.seasons.custom_pages', ['slug' => 'dark-winter'])}}">
            <div class="season-hub-card" data-group="winter">
                <div class="shc-top dark-winter-bg" style="color:#C0C8E0;">
                    <div class="shc-label">Winter · Cool · Dark</div>
                    <div class="shc-name">Dark Winter</div>
                    <div class="shc-sub">Dramatic, deep intensity</div>
                    <div class="shc-dots">
                        <div class="shc-dot" style="background:#1C2040;"></div>
                        <div class="shc-dot" style="background:#2A1020;"></div>
                        <div class="shc-dot" style="background:#102030;"></div>
                        <div class="shc-dot" style="background:#3A1818;"></div>
                    </div>
                </div>
                <div class="shc-body">
                    <div class="shc-desc">Where winter meets autumn — the deepest and most dramatic season. Your colours
                        are dark, rich, and utterly striking.</div>
                    <div class="shc-btn" style="color:#2A3060;">Explore Season →</div>
                </div>
            </div>
                </a>
                <a href="{{route('show.seasons.custom_pages', ['slug' => 'true-winter'])}}">
            <div class="season-hub-card" data-group="winter">
                <div class="shc-top true-winter-bg" style="color:#E0E8FF;">
                    <div class="shc-label">Winter · Cool · Clear</div>
                    <div class="shc-name">True Winter</div>
                    <div class="shc-sub">Pure cool contrast</div>
                    <div class="shc-dots">
                        <div class="shc-dot" style="background:#00008B;"></div>
                        <div class="shc-dot" style="background:#8B0000;"></div>
                        <div class="shc-dot" style="background:#4B0082;"></div>
                        <div class="shc-dot" style="background:#F5F5F5;"></div>
                    </div>
                </div>
                <div class="shc-body">
                    <div class="shc-desc">The classic winter — cool, clear, and strikingly high-contrast. Jewel tones and
                        crisp black-and-white are your elements.</div>
                    <div class="shc-btn" style="color:#2030A0;">Explore Season →</div>
                </div>
            </div>
                </a>
                <a href="{{route('show.seasons.custom_pages', ['slug' => 'bright-winter'])}}">
            <div class="season-hub-card" data-group="winter">
                <div class="shc-top bright-winter-bg" style="color:#E8F4FF;">
                    <div class="shc-label">Winter · Cool · Bright</div>
                    <div class="shc-name">Bright Winter</div>
                    <div class="shc-sub">Vivid, electric, dazzling</div>
                    <div class="shc-dots">
                        <div class="shc-dot" style="background:#0000FF;"></div>
                        <div class="shc-dot" style="background:#FF0080;"></div>
                        <div class="shc-dot" style="background:#00C0FF;"></div>
                        <div class="shc-dot" style="background:#00FF80;"></div>
                    </div>
                </div>
                <div class="shc-body">
                    <div class="shc-desc">Where winter meets spring — clear, cool, and vibrantly bright. Electric hues and
                        high contrast are your playground.</div>
                    <div class="shc-btn" style="color:#0048C0;">Explore Season →</div>
                </div>
            </div>
                </a>

        </div>

        <!-- Overview comparison -->
        <div style="padding:0 6% 80px;">
            <div class="h2" style="margin-bottom:8px;">How the 12 seasons connect</div>
            <p class="body-text" style="margin-bottom:40px;max-width:560px;">Each of the 4 main seasons has 3 sub-seasons,
                defined by how warm/cool, light/dark, and clear/muted your colouring is.</p>
            <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:20px;">
                <div style="border-radius:18px;overflow:hidden;border:1px solid #E8DDD6;">
                    <div style="background:linear-gradient(145deg,#E8C080,#D49050);padding:20px;color:#3C1800;">
                        <div style="font-family:'Cormorant Garamond',serif;font-size:20px;font-weight:700;">🌸 Spring</div>
                        <div style="font-size:12px;opacity:.65;margin-top:4px;">Warm · Clear</div>
                    </div>
                    <div style="padding:16px;background:#FFF9F4;display:flex;flex-direction:column;gap:8px;">

                        <a  href="{{ route('show.seasons.custom_pages', ['slug' => 'light-spring']) }}"
                            style="padding:10px 14px;border:1px solid #E8DDD6;border-radius:10px;font-size:13px;font-weight:500;cursor:pointer;transition:background .15s;"
                            onmouseover="this.style.background='#FDF0EA'"
                            onmouseout="this.style.background='transparent'">Light Spring →</a>
                        <a  href="{{ route('show.seasons.custom_pages', ['slug' => 'true-spring']) }}"
                            style="padding:10px 14px;border:1px solid #E8DDD6;border-radius:10px;font-size:13px;font-weight:500;cursor:pointer;transition:background .15s;"
                            onmouseover="this.style.background='#FDF0EA'"
                            onmouseout="this.style.background='transparent'">True Spring →</a>
                        <a  href="{{ route('show.seasons.custom_pages', ['slug' => 'warm-spring']) }}"
                            style="padding:10px 14px;border:1px solid #E8DDD6;border-radius:10px;font-size:13px;font-weight:500;cursor:pointer;transition:background .15s;"
                            onmouseover="this.style.background='#FDF0EA'"
                            onmouseout="this.style.background='transparent'">Warm Spring →</a>
                    </div>
                </div>
                <div style="border-radius:18px;overflow:hidden;border:1px solid #E8DDD6;">
                    <div style="background:linear-gradient(145deg,#9AAAC8,#7A8AAC);padding:20px;color:#F8F4FF;">
                        <div style="font-family:'Cormorant Garamond',serif;font-size:20px;font-weight:700;">☁️ Summer</div>
                        <div style="font-size:12px;opacity:.65;margin-top:4px;">Cool · Muted</div>
                    </div>
                    <div style="padding:16px;background:#FFF9F4;display:flex;flex-direction:column;gap:8px;">
                        <a  href="{{ route('show.seasons.custom_pages', ['slug' => 'light-summer']) }}"
                            style="padding:10px 14px;border:1px solid #E8DDD6;border-radius:10px;font-size:13px;font-weight:500;cursor:pointer;"
                            onmouseover="this.style.background='#EDF0F8'"
                            onmouseout="this.style.background='transparent'">Light Summer →</a>
                        <a  href="{{ route('show.seasons.custom_pages', ['slug' => 'true-summer']) }}"
                            style="padding:10px 14px;border:1px solid #E8DDD6;border-radius:10px;font-size:13px;font-weight:500;cursor:pointer;"
                            onmouseover="this.style.background='#EDF0F8'"
                            onmouseout="this.style.background='transparent'">True Summer →</a>
                        <a  href="{{ route('show.seasons.custom_pages', ['slug' => 'soft-summer']) }}"
                            style="padding:10px 14px;border:1px solid #E8DDD6;border-radius:10px;font-size:13px;font-weight:500;cursor:pointer;"
                            onmouseover="this.style.background='#EDF0F8'"
                            onmouseout="this.style.background='transparent'">Soft Summer →</a>
                    </div>
                </div>
                <div style="border-radius:18px;overflow:hidden;border:1px solid #E8DDD6;">
                    <div style="background:linear-gradient(145deg,#B06030,#904820);padding:20px;color:#FFF0D8;">
                        <div style="font-family:'Cormorant Garamond',serif;font-size:20px;font-weight:700;">🍂 Autumn</div>
                        <div style="font-size:12px;opacity:.65;margin-top:4px;">Warm · Muted</div>
                    </div>
                    <div style="padding:16px;background:#FFF9F4;display:flex;flex-direction:column;gap:8px;">
                        <a  href="{{ route('show.seasons.custom_pages', ['slug' => 'soft-autumn']) }}"
                            style="padding:10px 14px;border:1px solid #E8DDD6;border-radius:10px;font-size:13px;font-weight:500;cursor:pointer;"
                            onmouseover="this.style.background='#FDF0E8'"
                            onmouseout="this.style.background='transparent'">Soft Autumn →</a>
                        <a  href="{{ route('show.seasons.custom_pages', ['slug' => 'true-autumn']) }}"
                            style="padding:10px 14px;border:1px solid #E8DDD6;border-radius:10px;font-size:13px;font-weight:500;cursor:pointer;"
                            onmouseover="this.style.background='#FDF0E8'"
                            onmouseout="this.style.background='transparent'">True Autumn →</a>
                        <a  href="{{ route('show.seasons.custom_pages', ['slug' => 'dark-autumn']) }}"
                            style="padding:10px 14px;border:1px solid #E8DDD6;border-radius:10px;font-size:13px;font-weight:500;cursor:pointer;"
                            onmouseover="this.style.background='#FDF0E8'"
                            onmouseout="this.style.background='transparent'">Dark Autumn →</a>
                    </div>
                </div>
                <div style="border-radius:18px;overflow:hidden;border:1px solid #E8DDD6;">
                    <div style="background:linear-gradient(145deg,#1C2848,#203060);padding:20px;color:#D0D8F0;">
                        <div style="font-family:'Cormorant Garamond',serif;font-size:20px;font-weight:700;">❄️ Winter</div>
                        <div style="font-size:12px;opacity:.65;margin-top:4px;">Cool · Clear</div>
                    </div>
                    <div style="padding:16px;background:#FFF9F4;display:flex;flex-direction:column;gap:8px;">
                        <a  href="{{ route('show.seasons.custom_pages', ['slug' => 'dark-winter']) }}"
                            style="padding:10px 14px;border:1px solid #E8DDD6;border-radius:10px;font-size:13px;font-weight:500;cursor:pointer;"
                            onmouseover="this.style.background='#E8E8F5'"
                            onmouseout="this.style.background='transparent'">Dark Winter →</a>
                        <a  href="{{ route('show.seasons.custom_pages', ['slug' => 'true-winter']) }}"
                            style="padding:10px 14px;border:1px solid #E8DDD6;border-radius:10px;font-size:13px;font-weight:500;cursor:pointer;"
                            onmouseover="this.style.background='#E8E8F5'"
                            onmouseout="this.style.background='transparent'">True Winter →</a>
                        <a  href="{{ route('show.seasons.custom_pages', ['slug' => 'bright-winter']) }}"
                            style="padding:10px 14px;border:1px solid #E8DDD6;border-radius:10px;font-size:13px;font-weight:500;cursor:pointer;"
                            onmouseover="this.style.background='#E8E8F5'"
                            onmouseout="this.style.background='transparent'">Bright Winter →</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-mini">
            <div class="fm-logo">Chroma<em>Fit</em></div>
            <div class="fm-links"><a href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">All Seasons</a></div>
        </div>
    </div>
@endsection
@section('page_script')
    <script>
        // ── HUB FILTER ──
        function filterHub(group, el) {
            document.querySelectorAll('.hub-tab').forEach(t => t.classList.remove('active'));
            el.classList.add('active');
            document.querySelectorAll('.season-hub-card').forEach(c => {
                if (group === 'all' || c.dataset.group === group) {
                    c.style.display = 'block';
                } else {
                    c.style.display = 'none';
                }
            });
            // Update URL without reloading page
            const url = new URL(window.location.href);
            if (group === 'all') {
                url.searchParams.delete('season');
            } else {
                url.searchParams.set('season', group);
            }
            window.history.pushState({}, '', url);
        }

        // ── AUTO-FILTER BASED ON URL PARAMETER ──
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const seasonParam = urlParams.get('season');

            if (seasonParam && seasonParam !== 'all') {
                const targetTab = document.querySelector(`.hub-tab[data-season="${seasonParam}"]`);
                if (targetTab) {
                    targetTab.click();
                    targetTab.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }
        });
    </script>
@endsection
