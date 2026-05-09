@extends('layouts.app')
@section('page_style')
    <x-season-style/>
@endsection
@section('content')
  <section class="season-page-hero" style="background:linear-gradient(145deg,#8A4A20,#B06030,#904820);color:#FFF0D8;">
    <div>
      <div class="sp-eyebrow">
        <div class="sp-line" style="background:#C47838;"></div>
        <span class="sp-season-type" style="color:#C47838;">🍂 Autumn · Warm · Muted</span>
      </div>
      <div class="sp-title" style="font-size:clamp(52px,7vw,88px);">True Autumn</div>
      <div class="sp-tagline" style="color:#FFF0D866;">"Rich as harvest, warm as embers, deeply alive"</div>
      <p class="sp-desc" style="color:#FFF0D888;">True Autumn is the quintessential autumn — the most warm, earthy, and richly muted of all seasons. Your colouring is nature's palette in full harvest glory: terracotta, olive, and burnished gold.</p>
      <div class="sp-palette-preview">
        <div class="sp-swatch" style="background:#C97B5A;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#D4A856;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#8B6914;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#556B2F;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#B8632A;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#8B4513;border:2.5px solid rgba(255,255,255,.25);"></div>
      </div>
      <div style="display:flex;gap:12px;flex-wrap:wrap;">
        <a class="btn btn-white" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
        <a class="btn btn-outline" style="color:#FFF0D8;border-color:#FFF0D844;" href="{{ route('show.custom_pages', ['slug' => 'test']) }}">Find My Season</a>
      </div>
    </div>
    <div class="sp-hero-visual">
      <div class="sp-visual-main" style="background:linear-gradient(145deg,#C97B5A,#A05030);">🍁</div>
      <div class="sp-visual-badges">
        <div class="sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">🌡️</div>
          <div><div class="sp-badge-title" style="color:#FFF0D8;">Warm Undertone</div><div class="sp-badge-sub" style="color:#FFF0D8;">Golden, earthy</div></div>
        </div>
        <div class="sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">🎨</div>
          <div><div class="sp-badge-title" style="color:#FFF0D8;">Muted Quality</div><div class="sp-badge-sub" style="color:#FFF0D8;">Rich, earthy</div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- PALETTE -->
  <section class="season-section">
    <span class="lbl" style="color:#C47838;">✦ Your Colour Palette</span>
    <div class="h2" style="margin-bottom:12px;">Best colours for True Autumn</div>
    <p class="body-text" style="max-width:560px;margin-bottom:36px;">Your palette is the earth itself — terracotta, burnt orange, olive green, warm gold, and rich brown. Every shade has warmth and a slightly muted quality.</p>
    <div class="two-col">
      <div>
        <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">Power Shades</div>
        <div class="color-grid" style="margin-bottom:28px;">
          <div class="cswatch cswatch-lg" style="background:#C97B5A;" title="#C97B5A"></div>
          <div class="cswatch cswatch-lg" style="background:#D4A856;" title="#D4A856"></div>
          <div class="cswatch cswatch-lg" style="background:#8B6914;" title="#8B6914"></div>
          <div class="cswatch cswatch-lg" style="background:#556B2F;" title="#556B2F"></div>
          <div class="cswatch cswatch-lg" style="background:#B8632A;" title="#B8632A"></div>
          <div class="cswatch cswatch-lg" style="background:#8B4513;" title="#8B4513"></div>
          <div class="cswatch cswatch-lg" style="background:#C4844A;" title="#C4844A"></div>
          <div class="cswatch cswatch-lg" style="background:#6B4226;" title="#6B4226"></div>
        </div>
        <div class="swatch-strip" style="height:14px;border-radius:7px;margin-bottom:8px;">
          <span style="background:#C97B5A;"></span>
          <span style="background:#D4A856;"></span>
          <span style="background:#8B6914;"></span>
          <span style="background:#556B2F;"></span>
          <span style="background:#B8632A;"></span>
          <span style="background:#8B4513;"></span>
          <span style="background:#C4844A;"></span>
          <span style="background:#6B4226;"></span>
        </div>
        <div style="font-size:12px;color:#B0A49E;">Your complete spectrum — from light to dark</div>
      </div>
      <div>
        <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">Neutrals & Staples</div>
        <div class="color-grid" style="margin-bottom:20px;">
          <div class="cswatch" style="background:#C8A870;"></div>
          <div class="cswatch" style="background:#A88050;"></div>
          <div class="cswatch" style="background:#886030;"></div>
          <div class="cswatch" style="background:#684020;"></div>
        </div>
        <p class="body-text" style="font-size:14px;">Rich camel, warm tan, and deep cognac form your neutral foundation — always earthy and warm.</p>
      </div>
    </div>
  </section>

  <!-- YOUR FEATURES -->
  <section class="season-section-alt">
    <span class="lbl" style="color:#C47838;">✦ Typical Features</span>
    <div class="h2" style="margin-bottom:40px;">Do you look like a True Autumn?</div>
    <div class="three-col">
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">🧴</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skin</div>
        <div class="body-text" style="font-size:14px;">Light to deep skin with a strong golden or olive warm undertone. Often tans deeply. May have a naturally bronzed quality year-round. Golden warm depth is the hallmark.</div>
      </div>
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">👁️</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Eyes</div>
        <div class="body-text" style="font-size:14px;">Hazel, warm brown, amber, or warm olive green — often with rich golden flecks. Eyes are warm and deeply coloured. A richly warm quality to the gaze.</div>
      </div>
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">💇</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Hair</div>
        <div class="body-text" style="font-size:14px;">Auburn, chestnut, warm dark brown, or warm black. Hair has a richly warm quality — often with natural red or golden highlights. The most distinctly warm hair of all seasons.</div>
      </div>
    </div>
    <div style="margin-top:32px;padding:24px;background:#C4783814;border:1px solid #C4783833;border-radius:16px;">
      <div style="font-size:15px;font-weight:600;color:#2C2420;margin-bottom:6px;">✦ The True Autumn glow effect</div>
      <div class="body-text" style="font-size:14px;">True Autumns in their colours look powerfully, richly beautiful — like a woman surrounded by autumn leaves. The warm earth tones amplify their natural warmth to create a deeply alive, radiant appearance.</div>
    </div>
  </section>

  <!-- MAKEUP -->
  <section class="season-section">
    <span class="lbl" style="color:#C47838;">✦ Makeup Guide</span>
    <div class="h2" style="margin-bottom:12px;">Your perfect makeup shades</div>
    <p class="body-text" style="max-width:560px;margin-bottom:36px;">Rich, warm, and earthy. True Autumn can wear the most intense warm makeup of any season without being overwhelmed.</p>
    <div class="makeup-row">
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#C47A5A;"></div>
        <div class="makeup-label">Warm Terracotta</div>
        <div class="makeup-type">Foundation</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#C06040;"></div>
        <div class="makeup-label">Brick Red Blush</div>
        <div class="makeup-type">Blush</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#B04A28;"></div>
        <div class="makeup-label">Rich Burnt Red</div>
        <div class="makeup-type">Lips</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#8B6914;"></div>
        <div class="makeup-label">Deep Gold</div>
        <div class="makeup-type">Eyes</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#8B4513;"></div>
        <div class="makeup-label">Rich Brown</div>
        <div class="makeup-type">Eyes</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#B85A30;"></div>
        <div class="makeup-label">Warm Copper</div>
        <div class="makeup-type">Eyes</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#C07040;"></div>
        <div class="makeup-label">Terracotta</div>
        <div class="makeup-type">Blush</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#C89040;"></div>
        <div class="makeup-label">Bronze Gold</div>
        <div class="makeup-type">Highlighter</div>
      </div>
    </div>
    <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
      <div class="card">
        <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Foundation Undertone</div>
        <div class="body-text" style="font-size:14px;">Strong warm, golden foundations. True Autumn often needs the warmest, most golden-toned foundation available. Never pink or cool.</div>
      </div>
      <div class="card">
        <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Key Makeup Rule</div>
        <div class="body-text" style="font-size:14px;">Think earth, spice, and harvest. Terracotta lip, bronzy eyes, and a brick blush is the ultimate True Autumn look. Rich and earthy, never cool.</div>
      </div>
    </div>
  </section>

  <!-- WARDROBE -->
  <section class="season-section-alt">
    <div class="two-col">
      <div>
        <span class="lbl" style="color:#C47838;">✦ Wardrobe Tips</span>
        <div class="h2" style="margin-bottom:20px;">How to dress as a True Autumn</div>
        <div class="feature-row">
          <div class="feature-item">
            <div class="fi-num">01</div>
            <div><div class="fi-title">Terracotta is your signature</div><div class="fi-desc">No season wears terracotta like True Autumn. It's not just a colour for you — it's almost your second skin.</div></div>
          </div>
          <div class="feature-item">
            <div class="fi-num">02</div>
            <div><div class="fi-title">Olive green is essential</div><div class="fi-desc">Warm olive in every shade — from soft sage to deep forest olive — is one of your most powerful and versatile colours.</div></div>
          </div>
          <div class="feature-item">
            <div class="fi-num">03</div>
            <div><div class="fi-title">Build around warm browns</div><div class="fi-desc">Rich brown, cognac, tan, and camel form the backbone of your wardrobe. These neutrals anchor every outfit.</div></div>
          </div>
          <div class="feature-item">
            <div class="fi-num">04</div>
            <div><div class="fi-title">Gold accessories only</div><div class="fi-desc">Warm gold, antique gold, and burnished copper in jewellery enhance your warm depth. Silver fights your undertone.</div></div>
          </div>
        </div>
      </div>
      <div>
        <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">✦ Colours to Avoid</span>
        <div class="avoid-grid">
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#FF69B4;"></div>
            <div class="avoid-info"><div class="avoid-name">Cool Pink</div><div class="avoid-why">Clashes with warm depth</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#87CEEB;"></div>
            <div class="avoid-info"><div class="avoid-name">Cool Blue</div><div class="avoid-why">Too cool and contrasting</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#E0E0E0;"></div>
            <div class="avoid-info"><div class="avoid-name">Cool Grey</div><div class="avoid-why">Clashes with warm richness</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#000080;"></div>
            <div class="avoid-info"><div class="avoid-name">Navy</div><div class="avoid-why">Too cool and harsh</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#F0F0F0;"></div>
            <div class="avoid-info"><div class="avoid-name">Cool White</div><div class="avoid-why">Washes out your warmth</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#C0C0C0;"></div>
            <div class="avoid-info"><div class="avoid-name">Silver</div><div class="avoid-why">Undertone mismatch</div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- OUTFIT IDEAS -->
  <section class="season-section">
    <span class="lbl" style="color:#C47838;">✦ Outfit Inspiration</span>
    <div class="h2" style="margin-bottom:36px;">Looks built for True Autumn</div>
    <div class="outfit-grid">
      <div class="outfit-card">
        <div class="outfit-top" style="background:linear-gradient(145deg,#C97B5A,#A05030);">🍂</div>
        <div class="outfit-body">
          <div class="outfit-occasion">Casual</div>
          <div class="outfit-name">Harvest Earth</div>
          <div class="outfit-items">Terracotta linen top · Dark olive wide-leg trousers · Cognac leather boots · Bronze earrings</div>
        </div>
      </div>
      <div class="outfit-card">
        <div class="outfit-top" style="background:linear-gradient(145deg,#D4A856,#B08030);">🌾</div>
        <div class="outfit-body">
          <div class="outfit-occasion">Day</div>
          <div class="outfit-name">Golden Field</div>
          <div class="outfit-items">Warm mustard knit sweater · Rich brown corduroy · Tan leather boots · Antique gold pendant</div>
        </div>
      </div>
      <div class="outfit-card">
        <div class="outfit-top" style="background:linear-gradient(145deg,#556B2F,#3D5020);">🌿</div>
        <div class="outfit-body">
          <div class="outfit-occasion">Evening</div>
          <div class="outfit-name">Dark Olive</div>
          <div class="outfit-items">Deep olive silk wrap dress · Brown heeled boots · Tortoiseshell clutch · Gold chain necklace</div>
        </div>
      </div>
    </div>
  </section>

  <!-- CELEBRITIES -->
  <section class="season-section-alt">
    <span class="lbl" style="color:#C47838;">✦ Famous True Autumns</span>
    <div class="h2" style="margin-bottom:36px;">You're in great company</div>
    <div class="celeb-grid">
      <div class="celeb-card">
        <div class="celeb-avatar" style="background:#C97B5A;">🌟</div>
        <div class="celeb-name">Julianne Moore</div>
        <div class="celeb-note">Classic warm autumn</div>
      </div>
      <div class="celeb-card">
        <div class="celeb-avatar" style="background:#D4A856;">💫</div>
        <div class="celeb-name">Marcia Cross</div>
        <div class="celeb-note">Rich auburn warmth</div>
      </div>
      <div class="celeb-card">
        <div class="celeb-avatar" style="background:#C4844A;">🎬</div>
        <div class="celeb-name">Emma Stone</div>
        <div class="celeb-note">Warm autumn colouring</div>
      </div>
      <div class="celeb-card">
        <div class="celeb-avatar" style="background:#B8632A;">🏆</div>
        <div class="celeb-name">Bryce Dallas Howard</div>
        <div class="celeb-note">Deep warm autumn</div>
      </div>
    </div>
  </section>

  <!-- NAV BETWEEN SEASONS -->
  <div style="padding:40px 6%;display:flex;justify-content:space-between;align-items:center;border-top:1px solid #E8DDD6;gap:20px;flex-wrap:wrap;">
    <a class="btn btn-outline" style="color:#2C2420;border-color:#E8DDD6;" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
    <div style="display:flex;gap:8px;flex-wrap:wrap;">
      <a class="btn btn-outline" style="color:#C47838;border-color:#C4783844;font-size:13px;" href="{{ route('show.seasons.custom_pages', ['slug' => 'soft-autumn']) }}">Soft Autumn →</a>
      <a class="btn btn-outline" style="color:#C47838;border-color:#C4783844;font-size:13px;" href="{{ route('show.seasons.custom_pages', ['slug' => 'dark-autumn']) }}">Dark Autumn →</a>
    </div>
  </div>

  <div class="footer-mini">
    <div class="fm-logo">Chroma<em>Fit</em></div>
    <div class="fm-links"><a  href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">All Seasons</a></div>
  </div>
@endsection
