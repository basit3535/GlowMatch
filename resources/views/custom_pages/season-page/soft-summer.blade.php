@extends('layouts.app')
@section('page_style')
    <x-season-style/>
@endsection
@section('content')
  <section class="season-page-hero" style="background:linear-gradient(145deg,#C0C8D4,#A8B0BC,#9098A8);color:#F0EEF8;">
    <div>
      <div class="sp-eyebrow">
        <div class="sp-line" style="background:#7880A0;"></div>
        <span class="sp-season-type" style="color:#7880A0;">☁️ Summer · Neutral-Cool · Muted</span>
      </div>
      <div class="sp-title" style="font-size:clamp(52px,7vw,88px);">Soft Summer</div>
      <div class="sp-tagline" style="color:#F0EEF866;">"Beautifully blended, neutrally muted, serenely soft"</div>
      <p class="sp-desc" style="color:#F0EEF888;">Soft Summer sits at the boundary of summer and autumn — the most muted of all 12 seasons. Your colouring is exquisitely blended with no strong contrasts and a neutrally cool base.</p>
      <div class="sp-palette-preview">
        <div class="sp-swatch" style="background:#B8C0CC;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#A8B0BC;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#989090;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#B0A8A0;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#A0A8A0;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#B8B0A8;border:2.5px solid rgba(255,255,255,.25);"></div>
      </div>
      <div style="display:flex;gap:12px;flex-wrap:wrap;">
        <a class="btn btn-white" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
        <a class="btn btn-outline" style="color:#F0EEF8;border-color:#F0EEF844;" href="{{ route('show.custom_pages', ['slug' => 'test']) }}">Find My Season</a>
      </div>
    </div>
    <div class="sp-hero-visual">
      <div class="sp-visual-main" style="background:linear-gradient(145deg,#B8C0CC,#A0A8B4);">🌫️</div>
      <div class="sp-visual-badges">
        <div class="sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">⚖️</div>
          <div><div class="sp-badge-title" style="color:#F0EEF8;">Neutral-Cool</div><div class="sp-badge-sub" style="color:#F0EEF8;">Almost neutral</div></div>
        </div>
        <div class="sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">🎨</div>
          <div><div class="sp-badge-title" style="color:#F0EEF8;">Most Muted</div><div class="sp-badge-sub" style="color:#F0EEF8;">Softest of all 12</div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- PALETTE -->
  <section class="season-section">
    <span class="lbl" style="color:#7880A0;">✦ Your Colour Palette</span>
    <div class="h2" style="margin-bottom:12px;">Best colours for Soft Summer</div>
    <p class="body-text" style="max-width:560px;margin-bottom:36px;">The most muted palette of all 12 seasons. Your colours are greyish, blended, and soft — they should look as if they've been mixed with a little grey and white.</p>
    <div class="two-col">
      <div>
        <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">Power Shades</div>
        <div class="color-grid" style="margin-bottom:28px;">
          <div class="cswatch cswatch-lg" style="background:#B8C0CC;" title="#B8C0CC"></div>
          <div class="cswatch cswatch-lg" style="background:#A8B0BC;" title="#A8B0BC"></div>
          <div class="cswatch cswatch-lg" style="background:#989090;" title="#989090"></div>
          <div class="cswatch cswatch-lg" style="background:#B0A8A0;" title="#B0A8A0"></div>
          <div class="cswatch cswatch-lg" style="background:#A0A8A0;" title="#A0A8A0"></div>
          <div class="cswatch cswatch-lg" style="background:#B8B0A8;" title="#B8B0A8"></div>
          <div class="cswatch cswatch-lg" style="background:#C0B8B0;" title="#C0B8B0"></div>
          <div class="cswatch cswatch-lg" style="background:#908888;" title="#908888"></div>
        </div>
        <div class="swatch-strip" style="height:14px;border-radius:7px;margin-bottom:8px;">
          <span style="background:#B8C0CC;"></span>
          <span style="background:#A8B0BC;"></span>
          <span style="background:#989090;"></span>
          <span style="background:#B0A8A0;"></span>
          <span style="background:#A0A8A0;"></span>
          <span style="background:#B8B0A8;"></span>
          <span style="background:#C0B8B0;"></span>
          <span style="background:#908888;"></span>
        </div>
        <div style="font-size:12px;color:#B0A49E;">Your complete spectrum — from light to dark</div>
      </div>
      <div>
        <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">Neutrals & Staples</div>
        <div class="color-grid" style="margin-bottom:20px;">
          <div class="cswatch" style="background:#D4D0C8;"></div>
          <div class="cswatch" style="background:#C0BCB4;"></div>
          <div class="cswatch" style="background:#ACAAA4;"></div>
          <div class="cswatch" style="background:#989490;"></div>
        </div>
        <p class="body-text" style="font-size:14px;">Warm grey, blued greige, and dusty taupe are your neutrals — exquisitely blended between warm and cool.</p>
      </div>
    </div>
  </section>

  <!-- YOUR FEATURES -->
  <section class="season-section-alt">
    <span class="lbl" style="color:#7880A0;">✦ Typical Features</span>
    <div class="h2" style="margin-bottom:40px;">Do you look like a Soft Summer?</div>
    <div class="three-col">
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">🧴</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skin</div>
        <div class="body-text" style="font-size:14px;">Fair to medium skin with a neutrally cool undertone — sometimes hard to pin as warm or cool. Often slightly muted in natural colour. May have a grey or ashy quality to the skin tone.</div>
      </div>
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">👁️</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Eyes</div>
        <div class="body-text" style="font-size:14px;">Grey, grey-hazel, grey-green, or pale grey-blue. Eyes are never vivid — always softly blended and slightly greyed. A neutral, gentle quality.</div>
      </div>
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">💇</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Hair</div>
        <div class="body-text" style="font-size:14px;">Mousy brown, cool medium brown, ashy blonde, or greyed brown. Hair is notably low-contrast — neither strongly warm nor strongly cool. Often described as "medium brown."</div>
      </div>
    </div>
    <div style="margin-top:32px;padding:24px;background:#7880A014;border:1px solid #7880A033;border-radius:16px;">
      <div style="font-size:15px;font-weight:600;color:#2C2420;margin-bottom:6px;">✦ The Soft Summer glow effect</div>
      <div class="body-text" style="font-size:14px;">Soft Summers in their colours look effortlessly elegant — as though everything they wear was somehow chosen to match their naturally blended, sophisticated colouring.</div>
    </div>
  </section>

  <!-- MAKEUP -->
  <section class="season-section">
    <span class="lbl" style="color:#7880A0;">✦ Makeup Guide</span>
    <div class="h2" style="margin-bottom:12px;">Your perfect makeup shades</div>
    <p class="body-text" style="max-width:560px;margin-bottom:36px;">Soft Summer wears the most restrained makeup of all seasons. Everything should be barely visible, blended, and neutrally toned.</p>
    <div class="makeup-row">
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#E8E0DC;"></div>
        <div class="makeup-label">Neutral Beige</div>
        <div class="makeup-type">Foundation</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#C0A8A8;"></div>
        <div class="makeup-label">Muted Rose</div>
        <div class="makeup-type">Blush</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#A89898;"></div>
        <div class="makeup-label">Blended Mauve</div>
        <div class="makeup-type">Lips</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#A0A0B0;"></div>
        <div class="makeup-label">Soft Grey</div>
        <div class="makeup-type">Eyes</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#989898;"></div>
        <div class="makeup-label">Neutral Taupe</div>
        <div class="makeup-type">Eyes</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#B8B0A8;"></div>
        <div class="makeup-label">Warm Grey</div>
        <div class="makeup-type">Eyes</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#C8C0B8;"></div>
        <div class="makeup-label">Dusty Pink-Grey</div>
        <div class="makeup-type">Blush</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#D8D4D0;"></div>
        <div class="makeup-label">Silver Greige</div>
        <div class="makeup-type">Highlighter</div>
      </div>
    </div>
    <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
      <div class="card">
        <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Foundation Undertone</div>
        <div class="body-text" style="font-size:14px;">Neutral-cool foundations — not strongly pink, not strongly yellow. Look for "neutral beige" or "soft beige" shades. Your undertone is the hardest to match of all seasons.</div>
      </div>
      <div class="card">
        <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Key Makeup Rule</div>
        <div class="body-text" style="font-size:14px;">Grey is your neutral — not black, not brown. Use soft grey in eye looks, blended mauve on lips, and a barely-there blush. The less visible, the better.</div>
      </div>
    </div>
  </section>

  <!-- WARDROBE -->
  <section class="season-section-alt">
    <div class="two-col">
      <div>
        <span class="lbl" style="color:#7880A0;">✦ Wardrobe Tips</span>
        <div class="h2" style="margin-bottom:20px;">How to dress as a Soft Summer</div>
        <div class="feature-row">
          <div class="feature-item">
            <div class="fi-num">01</div>
            <div><div class="fi-title">Embrace grey as your neutral</div><div class="fi-desc">Grey in every shade — warm grey, cool grey, blue-grey — is your most powerful neutral and anchor for all outfits.</div></div>
          </div>
          <div class="feature-item">
            <div class="fi-num">02</div>
            <div><div class="fi-title">Choose muted, blended colours</div><div class="fi-desc">Every colour in your wardrobe should look slightly softened. If it looks "bright," it's probably too saturated for Soft Summer.</div></div>
          </div>
          <div class="feature-item">
            <div class="fi-num">03</div>
            <div><div class="fi-title">Avoid high contrast</div><div class="fi-desc">High contrast outfits — like black and white — are wrong for you. Stay within a narrow value range for the most flattering look.</div></div>
          </div>
          <div class="feature-item">
            <div class="fi-num">04</div>
            <div><div class="fi-title">Tonal dressing is your signature</div><div class="fi-desc">Wearing multiple shades of the same muted tone creates a sophisticated, harmonious look that is entirely your own.</div></div>
          </div>
        </div>
      </div>
      <div>
        <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">✦ Colours to Avoid</span>
        <div class="avoid-grid">
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#FF6600;"></div>
            <div class="avoid-info"><div class="avoid-name">Bright Orange</div><div class="avoid-why">Too vivid and warm</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#FFD700;"></div>
            <div class="avoid-info"><div class="avoid-name">Bright Yellow</div><div class="avoid-why">Too saturated, too warm</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#000000;"></div>
            <div class="avoid-info"><div class="avoid-name">Black</div><div class="avoid-why">Too harsh for your soft tones</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#FFFFFF;"></div>
            <div class="avoid-info"><div class="avoid-name">Pure White</div><div class="avoid-why">Too high contrast</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#FF0000;"></div>
            <div class="avoid-info"><div class="avoid-name">Bright Red</div><div class="avoid-why">Too vivid and warm</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#006400;"></div>
            <div class="avoid-info"><div class="avoid-name">Strong Green</div><div class="avoid-why">Too saturated for your palette</div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- OUTFIT IDEAS -->
  <section class="season-section">
    <span class="lbl" style="color:#7880A0;">✦ Outfit Inspiration</span>
    <div class="h2" style="margin-bottom:36px;">Looks built for Soft Summer</div>
    <div class="outfit-grid">
      <div class="outfit-card">
        <div class="outfit-top" style="background:linear-gradient(145deg,#C0C8D4,#A8B0BC);">🌫️</div>
        <div class="outfit-body">
          <div class="outfit-occasion">Day</div>
          <div class="outfit-name">Morning Mist</div>
          <div class="outfit-items">Soft grey linen blazer · Blued grey trousers · Light taupe loafers · Silver minimalist watch</div>
        </div>
      </div>
      <div class="outfit-card">
        <div class="outfit-top" style="background:linear-gradient(145deg,#B0A8A0,#A09898);">🕊️</div>
        <div class="outfit-body">
          <div class="outfit-occasion">Casual</div>
          <div class="outfit-name">Blended Neutral</div>
          <div class="outfit-items">Muted sage knit top · Warm grey jeans · Grey canvas sneakers · Dainty silver jewellery</div>
        </div>
      </div>
      <div class="outfit-card">
        <div class="outfit-top" style="background:linear-gradient(145deg,#989090,#808888);">🌙</div>
        <div class="outfit-body">
          <div class="outfit-occasion">Evening</div>
          <div class="outfit-name">Soft Dusk</div>
          <div class="outfit-items">Dusty mauve midi dress · Nude-grey strappy heels · Grey evening bag · Pearl jewellery</div>
        </div>
      </div>
    </div>
  </section>

  <!-- CELEBRITIES -->
  <section class="season-section-alt">
    <span class="lbl" style="color:#7880A0;">✦ Famous Soft Summers</span>
    <div class="h2" style="margin-bottom:36px;">You're in great company</div>
    <div class="celeb-grid">
      <div class="celeb-card">
        <div class="celeb-avatar" style="background:#C0C8D4;">🏆</div>
        <div class="celeb-name">Meryl Streep</div>
        <div class="celeb-note">Neutrally blended colouring</div>
      </div>
      <div class="celeb-card">
        <div class="celeb-avatar" style="background:#B8C0CC;">👑</div>
        <div class="celeb-name">Helen Mirren</div>
        <div class="celeb-note">Soft summer elegance</div>
      </div>
      <div class="celeb-card">
        <div class="celeb-avatar" style="background:#A8B0BC;">🎬</div>
        <div class="celeb-name">Keira Knightley</div>
        <div class="celeb-note">Muted neutral features</div>
      </div>
      <div class="celeb-card">
        <div class="celeb-avatar" style="background:#B0B8C8;">💫</div>
        <div class="celeb-name">Rachel Weisz</div>
        <div class="celeb-note">Cool-neutral summer</div>
      </div>
    </div>
  </section>

  <!-- NAV BETWEEN SEASONS -->
  <div style="padding:40px 6%;display:flex;justify-content:space-between;align-items:center;border-top:1px solid #E8DDD6;gap:20px;flex-wrap:wrap;">
    <a class="btn btn-outline" style="color:#2C2420;border-color:#E8DDD6;" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
    <div style="display:flex;gap:8px;flex-wrap:wrap;">
      <a class="btn btn-outline" style="color:#7880A0;border-color:#7880A044;font-size:13px;" href="{{ route('show.seasons.custom_pages', ['slug' => 'true-summer']) }}">True Summer →</a>
      <a class="btn btn-outline" style="color:#7880A0;border-color:#7880A044;font-size:13px;" href="{{ route('show.seasons.custom_pages', ['slug' => 'soft-autumn']) }}">Soft Autumn →</a>
    </div>
  </div>

  <div class="footer-mini">
    <div class="fm-logo">Chroma<em>Fit</em></div>
    <div class="fm-links"><a  href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">All Seasons</a></div>
  </div>
@endsection
