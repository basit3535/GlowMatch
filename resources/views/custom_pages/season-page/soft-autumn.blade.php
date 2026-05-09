@extends('layouts.app')
@section('page_style')
    <x-season-style/>
@endsection
@section('content')
  <section class="season-page-hero" style="background:linear-gradient(145deg,#C09070,#A87050,#906038);color:#FFF4E8;">
    <div>
      <div class="sp-eyebrow">
        <div class="sp-line" style="background:#906038;"></div>
        <span class="sp-season-type" style="color:#906038;">🍂 Autumn · Neutral-Warm · Muted</span>
      </div>
      <div class="sp-title" style="font-size:clamp(52px,7vw,88px);">Soft Autumn</div>
      <div class="sp-tagline" style="color:#FFF4E866;">"Warmly blended, softly natural, effortlessly elegant"</div>
      <p class="sp-desc" style="color:#FFF4E888;">Soft Autumn is the gentlest of the autumn seasons — warm but muted, and beautifully natural-looking. Your colouring is the most approachable and versatile in the entire 12-season system.</p>
      <div class="sp-palette-preview">
        <div class="sp-swatch" style="background:#BC8F8F;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#A0917E;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#8FBC8F;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#C4A882;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#B08B72;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#9E8B7A;border:2.5px solid rgba(255,255,255,.25);"></div>
      </div>
      <div style="display:flex;gap:12px;flex-wrap:wrap;">
        <a class="btn btn-white" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
        <a class="btn btn-outline" style="color:#FFF4E8;border-color:#FFF4E844;" href="{{ route('show.custom_pages', ['slug' => 'test']) }}">Find My Season</a>
      </div>
    </div>
    <div class="sp-hero-visual">
      <div class="sp-visual-main" style="background:linear-gradient(145deg,#C8A070,#A88050);">🍃</div>
      <div class="sp-visual-badges">
        <div class="sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">🌡️</div>
          <div><div class="sp-badge-title" style="color:#FFF4E8;">Neutral-Warm</div><div class="sp-badge-sub" style="color:#FFF4E8;">Gently warm</div></div>
        </div>
        <div class="sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">🎨</div>
          <div><div class="sp-badge-title" style="color:#FFF4E8;">Muted Quality</div><div class="sp-badge-sub" style="color:#FFF4E8;">Soft, natural</div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- PALETTE -->
  <section class="season-section">
    <span class="lbl" style="color:#906038;">✦ Your Colour Palette</span>
    <div class="h2" style="margin-bottom:12px;">Best colours for Soft Autumn</div>
    <p class="body-text" style="max-width:560px;margin-bottom:36px;">Your palette is warm and muted — nature's own colours. Dusty rose, warm taupe, soft olive, muted peach, and natural tones define the Soft Autumn aesthetic.</p>
    <div class="two-col">
      <div>
        <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">Power Shades</div>
        <div class="color-grid" style="margin-bottom:28px;">
          <div class="cswatch cswatch-lg" style="background:#BC8F8F;" title="#BC8F8F"></div>
          <div class="cswatch cswatch-lg" style="background:#A0917E;" title="#A0917E"></div>
          <div class="cswatch cswatch-lg" style="background:#8FBC8F;" title="#8FBC8F"></div>
          <div class="cswatch cswatch-lg" style="background:#C4A882;" title="#C4A882"></div>
          <div class="cswatch cswatch-lg" style="background:#B08B72;" title="#B08B72"></div>
          <div class="cswatch cswatch-lg" style="background:#9E8B7A;" title="#9E8B7A"></div>
          <div class="cswatch cswatch-lg" style="background:#A8A070;" title="#A8A070"></div>
          <div class="cswatch cswatch-lg" style="background:#BC9A70;" title="#BC9A70"></div>
        </div>
        <div class="swatch-strip" style="height:14px;border-radius:7px;margin-bottom:8px;">
          <span style="background:#BC8F8F;"></span>
          <span style="background:#A0917E;"></span>
          <span style="background:#8FBC8F;"></span>
          <span style="background:#C4A882;"></span>
          <span style="background:#B08B72;"></span>
          <span style="background:#9E8B7A;"></span>
          <span style="background:#A8A070;"></span>
          <span style="background:#BC9A70;"></span>
        </div>
        <div style="font-size:12px;color:#B0A49E;">Your complete spectrum — from light to dark</div>
      </div>
      <div>
        <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">Neutrals & Staples</div>
        <div class="color-grid" style="margin-bottom:20px;">
          <div class="cswatch" style="background:#D4C8B8;"></div>
          <div class="cswatch" style="background:#C0B4A4;"></div>
          <div class="cswatch" style="background:#AC9E8E;"></div>
          <div class="cswatch" style="background:#988A7A;"></div>
        </div>
        <p class="body-text" style="font-size:14px;">Warm greige, dusty camel, and muted mushroom form your neutral base — always warm but never stark.</p>
      </div>
    </div>
  </section>

  <!-- YOUR FEATURES -->
  <section class="season-section-alt">
    <span class="lbl" style="color:#906038;">✦ Typical Features</span>
    <div class="h2" style="margin-bottom:40px;">Do you look like a Soft Autumn?</div>
    <div class="three-col">
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">🧴</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skin</div>
        <div class="body-text" style="font-size:14px;">Fair to medium skin with a warm, peachy or golden undertone — but less vivid than True Autumn. May have a slightly peachy or warm flush. Often described as having a "natural" quality.</div>
      </div>
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">👁️</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Eyes</div>
        <div class="body-text" style="font-size:14px;">Warm hazel, soft brown, or warm green — often with golden flecks but less vivid than True Autumn. Eyes appear softly warm and natural.</div>
      </div>
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">💇</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Hair</div>
        <div class="body-text" style="font-size:14px;">Light to medium warm brown, soft auburn, or golden-tinged brown. Hair is warm but not richly so. Natural highlights are common. An approachable, natural warmth.</div>
      </div>
    </div>
    <div style="margin-top:32px;padding:24px;background:#90603814;border:1px solid #90603833;border-radius:16px;">
      <div style="font-size:15px;font-weight:600;color:#2C2420;margin-bottom:6px;">✦ The Soft Autumn glow effect</div>
      <div class="body-text" style="font-size:14px;">Soft Autumns in their colours look naturally beautiful — as though they never needed to try. The warm, muted tones blend seamlessly with their features for an effortlessly healthy look.</div>
    </div>
  </section>

  <!-- MAKEUP -->
  <section class="season-section">
    <span class="lbl" style="color:#906038;">✦ Makeup Guide</span>
    <div class="h2" style="margin-bottom:12px;">Your perfect makeup shades</div>
    <p class="body-text" style="max-width:560px;margin-bottom:36px;">Warm but soft — every shade should look like a natural extension of your colouring. Think "warm no-makeup makeup."</p>
    <div class="makeup-row">
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#D4A882;"></div>
        <div class="makeup-label">Warm Sand</div>
        <div class="makeup-type">Foundation</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#C8906A;"></div>
        <div class="makeup-label">Soft Terracotta</div>
        <div class="makeup-type">Blush</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#B87858;"></div>
        <div class="makeup-label">Muted Warm Rose</div>
        <div class="makeup-type">Lips</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#A89060;"></div>
        <div class="makeup-label">Warm Taupe</div>
        <div class="makeup-type">Eyes</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#908868;"></div>
        <div class="makeup-label">Soft Olive</div>
        <div class="makeup-type">Eyes</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#C09870;"></div>
        <div class="makeup-label">Warm Bronze</div>
        <div class="makeup-type">Eyes</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#D0A880;"></div>
        <div class="makeup-label">Peach Coral</div>
        <div class="makeup-type">Blush</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#C8B080;"></div>
        <div class="makeup-label">Warm Gold</div>
        <div class="makeup-type">Highlighter</div>
      </div>
    </div>
    <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
      <div class="card">
        <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Foundation Undertone</div>
        <div class="body-text" style="font-size:14px;">Warm, peachy-beige foundations — warmer than neutral but less golden than True Autumn. Look for "warm beige" or "soft golden" shades.</div>
      </div>
      <div class="card">
        <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Key Makeup Rule</div>
        <div class="body-text" style="font-size:14px;">Warm and blended. Nothing too vivid or sharp. A warm peachy nude lip, a terracotta blush, and a soft taupe eyeshadow is the perfect Soft Autumn look.</div>
      </div>
    </div>
  </section>

  <!-- WARDROBE -->
  <section class="season-section-alt">
    <div class="two-col">
      <div>
        <span class="lbl" style="color:#906038;">✦ Wardrobe Tips</span>
        <div class="h2" style="margin-bottom:20px;">How to dress as a Soft Autumn</div>
        <div class="feature-row">
          <div class="feature-item">
            <div class="fi-num">01</div>
            <div><div class="fi-title">Dusty rose is surprisingly yours</div><div class="fi-desc">Unlike other autumns, you can wear dusty rose — the warm version. It bridges your autumn warmth with summer's softness.</div></div>
          </div>
          <div class="feature-item">
            <div class="fi-num">02</div>
            <div><div class="fi-title">Your olive is soft, not rich</div><div class="fi-desc">Soft olive and sage green are perfect for you — they harmonise with your warm but muted natural colouring.</div></div>
          </div>
          <div class="feature-item">
            <div class="fi-num">03</div>
            <div><div class="fi-title">Camel is your ultimate neutral</div><div class="fi-desc">Warm camel, tan, and mushroom are your wardrobe staples — they blend with everything in your muted warm palette.</div></div>
          </div>
          <div class="feature-item">
            <div class="fi-num">04</div>
            <div><div class="fi-title">Avoid both extremes</div><div class="fi-desc">You sit between seasons, so avoid the richest autumn colours AND the coolest summer colours — stay in the muted warm middle.</div></div>
          </div>
        </div>
      </div>
      <div>
        <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">✦ Colours to Avoid</span>
        <div class="avoid-grid">
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#00008B;"></div>
            <div class="avoid-info"><div class="avoid-name">Navy Blue</div><div class="avoid-why">Too cool and too dark</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#FF69B4;"></div>
            <div class="avoid-info"><div class="avoid-name">Hot Pink</div><div class="avoid-why">Too cool and vivid</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#FFD700;"></div>
            <div class="avoid-info"><div class="avoid-name">Bright Yellow</div><div class="avoid-why">Too clear, needs more muting</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#FF0000;"></div>
            <div class="avoid-info"><div class="avoid-name">Pure Red</div><div class="avoid-why">Too vivid and clear</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#C0C0C0;"></div>
            <div class="avoid-info"><div class="avoid-name">Cool Silver</div><div class="avoid-why">Undertone mismatch</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#000000;"></div>
            <div class="avoid-info"><div class="avoid-name">Black</div><div class="avoid-why">Too harsh and cool</div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- OUTFIT IDEAS -->
  <section class="season-section">
    <span class="lbl" style="color:#906038;">✦ Outfit Inspiration</span>
    <div class="h2" style="margin-bottom:36px;">Looks built for Soft Autumn</div>
    <div class="outfit-grid">
      <div class="outfit-card">
        <div class="outfit-top" style="background:linear-gradient(145deg,#C4A882,#A07858);">🍂</div>
        <div class="outfit-body">
          <div class="outfit-occasion">Casual</div>
          <div class="outfit-name">Natural Warmth</div>
          <div class="outfit-items">Warm camel oversized sweater · Olive straight jeans · Tan ankle boots · Wooden bead necklace</div>
        </div>
      </div>
      <div class="outfit-card">
        <div class="outfit-top" style="background:linear-gradient(145deg,#BC8F8F,#A07070);">🌹</div>
        <div class="outfit-body">
          <div class="outfit-occasion">Day</div>
          <div class="outfit-name">Dusty Rose Day</div>
          <div class="outfit-items">Dusty rose linen shirt · Warm taupe trousers · Camel loafers · Hammered gold earrings</div>
        </div>
      </div>
      <div class="outfit-card">
        <div class="outfit-top" style="background:linear-gradient(145deg,#8FBC8F,#6A9A6A);">🌿</div>
        <div class="outfit-body">
          <div class="outfit-occasion">Evening</div>
          <div class="outfit-name">Sage Evening</div>
          <div class="outfit-items">Soft olive silk wrap dress · Cognac heels · Simple gold chain · Warm brown clutch</div>
        </div>
      </div>
    </div>
  </section>

  <!-- CELEBRITIES -->
  <section class="season-section-alt">
    <span class="lbl" style="color:#906038;">✦ Famous Soft Autumns</span>
    <div class="h2" style="margin-bottom:36px;">You're in great company</div>
    <div class="celeb-grid">
      <div class="celeb-card">
        <div class="celeb-avatar" style="background:#C4A882;">👠</div>
        <div class="celeb-name">Sarah Jessica Parker</div>
        <div class="celeb-note">Warm muted colouring</div>
      </div>
      <div class="celeb-card">
        <div class="celeb-avatar" style="background:#BC8F8F;">🎬</div>
        <div class="celeb-name">Julia Roberts</div>
        <div class="celeb-note">Soft warm features</div>
      </div>
      <div class="celeb-card">
        <div class="celeb-avatar" style="background:#C8A870;">🌟</div>
        <div class="celeb-name">Drew Barrymore</div>
        <div class="celeb-note">Natural warm blonde</div>
      </div>
      <div class="celeb-card">
        <div class="celeb-avatar" style="background:#B08B72;">💫</div>
        <div class="celeb-name">Jennifer Garner</div>
        <div class="celeb-note">Softly warm autumn</div>
      </div>
    </div>
  </section>

  <!-- NAV BETWEEN SEASONS -->
  <div style="padding:40px 6%;display:flex;justify-content:space-between;align-items:center;border-top:1px solid #E8DDD6;gap:20px;flex-wrap:wrap;">
    <a class="btn btn-outline" style="color:#2C2420;border-color:#E8DDD6;" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
    <div style="display:flex;gap:8px;flex-wrap:wrap;">
      <a class="btn btn-outline" style="color:#906038;border-color:#90603844;font-size:13px;" href="{{ route('show.seasons.custom_pages', ['slug' => 'true-autumn']) }}">True Autumn →</a>
      <a class="btn btn-outline" style="color:#906038;border-color:#90603844;font-size:13px;" href="{{ route('show.seasons.custom_pages', ['slug' => 'soft-summer']) }}">Soft Summer →</a>
    </div>
  </div>

  <div class="footer-mini">
    <div class="fm-logo">Chroma<em>Fit</em></div>
    <div class="fm-links"><a  href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">All Seasons</a></div>
  </div>
@endsection
