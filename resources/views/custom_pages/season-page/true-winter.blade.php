@extends('layouts.app')
@section('page_style')
    <x-season-style/>
@endsection
@section('content')
  <section class="season-page-hero" style="background:linear-gradient(145deg,#1A2040,#283060,#202848);color:#E0E8FF;">
    <div>
      <div class="sp-eyebrow">
        <div class="sp-line" style="background:#4060D0;"></div>
        <span class="sp-season-type" style="color:#4060D0;">❄️ Winter · Cool · Clear</span>
      </div>
      <div class="sp-title" style="font-size:clamp(52px,7vw,88px);">True Winter</div>
      <div class="sp-tagline" style="color:#E0E8FF66;">"Clear, cool, and strikingly high-contrast"</div>
      <p class="sp-desc" style="color:#E0E8FF88;">True Winter is the quintessential winter — cool, clear, and powerfully high-contrast. Your colouring is the embodiment of a clear winter night: crisp, striking, and unforgettable.</p>
      <div class="sp-palette-preview">
        <div class="sp-swatch" style="background:#00008B;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#8B0000;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#006400;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#4B0082;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#F5F5F5;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#C0C0C0;border:2.5px solid rgba(255,255,255,.25);"></div>
      </div>
      <div style="display:flex;gap:12px;flex-wrap:wrap;">
        <a class="btn btn-white" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
        <a class="btn btn-outline" style="color:#E0E8FF;border-color:#E0E8FF44;" href="{{ route('show.custom_pages', ['slug' => 'test']) }}">Find My Season</a>
      </div>
    </div>
    <div class="sp-hero-visual">
      <div class="sp-visual-main" style="background:linear-gradient(145deg,#2040A0,#183080);">❄️</div>
      <div class="sp-visual-badges">
        <div class="sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">❄️</div>
          <div><div class="sp-badge-title" style="color:#E0E8FF;">Cool Undertone</div><div class="sp-badge-sub" style="color:#E0E8FF;">Blue-cool, clear</div></div>
        </div>
        <div class="sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">💎</div>
          <div><div class="sp-badge-title" style="color:#E0E8FF;">Clear Quality</div><div class="sp-badge-sub" style="color:#E0E8FF;">Vivid, saturated</div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- PALETTE -->
  <section class="season-section">
    <span class="lbl" style="color:#4060D0;">✦ Your Colour Palette</span>
    <div class="h2" style="margin-bottom:12px;">Best colours for True Winter</div>
    <p class="body-text" style="max-width:560px;margin-bottom:36px;">Your palette is clear, cool, and high-contrast. Navy, emerald, ruby, purple, black, and icy white. Every colour is vivid and clear — no mudding or muting.</p>
    <div class="two-col">
      <div>
        <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">Power Shades</div>
        <div class="color-grid" style="margin-bottom:28px;">
          <div class="cswatch cswatch-lg" style="background:#00008B;" title="#00008B"></div>
          <div class="cswatch cswatch-lg" style="background:#8B0000;" title="#8B0000"></div>
          <div class="cswatch cswatch-lg" style="background:#006400;" title="#006400"></div>
          <div class="cswatch cswatch-lg" style="background:#4B0082;" title="#4B0082"></div>
          <div class="cswatch cswatch-lg" style="background:#F5F5F5;" title="#F5F5F5"></div>
          <div class="cswatch cswatch-lg" style="background:#C0C0C0;" title="#C0C0C0"></div>
          <div class="cswatch cswatch-lg" style="background:#1C1C1C;" title="#1C1C1C"></div>
          <div class="cswatch cswatch-lg" style="background:#008080;" title="#008080"></div>
        </div>
        <div class="swatch-strip" style="height:14px;border-radius:7px;margin-bottom:8px;">
          <span style="background:#00008B;"></span>
          <span style="background:#8B0000;"></span>
          <span style="background:#006400;"></span>
          <span style="background:#4B0082;"></span>
          <span style="background:#F5F5F5;"></span>
          <span style="background:#C0C0C0;"></span>
          <span style="background:#1C1C1C;"></span>
          <span style="background:#008080;"></span>
        </div>
        <div style="font-size:12px;color:#B0A49E;">Your complete spectrum — from light to dark</div>
      </div>
      <div>
        <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">Neutrals & Staples</div>
        <div class="color-grid" style="margin-bottom:20px;">
          <div class="cswatch" style="background:#F0F0F0;"></div>
          <div class="cswatch" style="background:#C0C0C0;"></div>
          <div class="cswatch" style="background:#808080;"></div>
          <div class="cswatch" style="background:#1C1C1C;"></div>
        </div>
        <p class="body-text" style="font-size:14px;">Pure white, crisp silver, cool grey, and true black are your neutral anchors — always cool and clear.</p>
      </div>
    </div>
  </section>

  <!-- YOUR FEATURES -->
  <section class="season-section-alt">
    <span class="lbl" style="color:#4060D0;">✦ Typical Features</span>
    <div class="h2" style="margin-bottom:40px;">Do you look like a True Winter?</div>
    <div class="three-col">
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">🧴</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skin</div>
        <div class="body-text" style="font-size:14px;">Fair to deep skin with a cool undertone. The hallmark is high contrast between skin colour and hair/eye colour. Often has a porcelain quality to fair skin, or a cool depth to deeper skin.</div>
      </div>
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">👁️</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Eyes</div>
        <div class="body-text" style="font-size:14px;">Deep dark brown, cool steel blue, icy grey, or vivid dark eyes. Eyes are often the most striking feature. Contrast between iris and white of eye is high.</div>
      </div>
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">💇</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Hair</div>
        <div class="body-text" style="font-size:14px;">Cool black, dark brown, white-grey, or dramatically ashy. Always cool-toned — any warmth will push you to a different season. High contrast with skin.</div>
      </div>
    </div>
    <div style="margin-top:32px;padding:24px;background:#4060D014;border:1px solid #4060D033;border-radius:16px;">
      <div style="font-size:15px;font-weight:600;color:#2C2420;margin-bottom:6px;">✦ The True Winter glow effect</div>
      <div class="body-text" style="font-size:14px;">True Winters in their colours look cinematic and striking — like they were designed to wear them. The clear, cool colours match their natural contrast to create a powerful, unforgettable impression.</div>
    </div>
  </section>

  <!-- MAKEUP -->
  <section class="season-section">
    <span class="lbl" style="color:#4060D0;">✦ Makeup Guide</span>
    <div class="h2" style="margin-bottom:12px;">Your perfect makeup shades</div>
    <p class="body-text" style="max-width:560px;margin-bottom:36px;">Cool, clear, and high-contrast. True Winter makeup is about precision and impact — vivid cool lips, defined cool eyes, and crisp contrasts.</p>
    <div class="makeup-row">
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#F0E8F0;"></div>
        <div class="makeup-label">Cool Porcelain</div>
        <div class="makeup-type">Foundation</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#C04060;"></div>
        <div class="makeup-label">Cool Raspberry</div>
        <div class="makeup-type">Blush</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#8B0000;"></div>
        <div class="makeup-label">Classic Red</div>
        <div class="makeup-type">Lips</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#1C2848;"></div>
        <div class="makeup-label">Deep Navy</div>
        <div class="makeup-type">Eyes</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#4B0082;"></div>
        <div class="makeup-label">Cool Purple</div>
        <div class="makeup-type">Eyes</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#2A0838;"></div>
        <div class="makeup-label">Dark Plum</div>
        <div class="makeup-type">Eyes</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#A03060;"></div>
        <div class="makeup-label">Cool Berry</div>
        <div class="makeup-type">Blush</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#E8F0FF;"></div>
        <div class="makeup-label">Icy Silver</div>
        <div class="makeup-type">Highlighter</div>
      </div>
    </div>
    <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
      <div class="card">
        <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Foundation Undertone</div>
        <div class="body-text" style="font-size:14px;">Cool, neutral foundations — look for shades with pink or neutral undertones. Avoid any yellow or warmth. The goal is to match your cool skin tone precisely.</div>
      </div>
      <div class="card">
        <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Key Makeup Rule</div>
        <div class="body-text" style="font-size:14px;">High contrast and cool. Red lips, black eyeliner, cool pink cheeks — or icy metallics and deep jewel tones for eyes. Never warm, never muddy, never muted.</div>
      </div>
    </div>
  </section>

  <!-- WARDROBE -->
  <section class="season-section-alt">
    <div class="two-col">
      <div>
        <span class="lbl" style="color:#4060D0;">✦ Wardrobe Tips</span>
        <div class="h2" style="margin-bottom:20px;">How to dress as a True Winter</div>
        <div class="feature-row">
          <div class="feature-item">
            <div class="fi-num">01</div>
            <div><div class="fi-title">Black and white is your birthright</div><div class="fi-desc">The starkest black-and-white combinations look extraordinary on True Winter — they match your natural high-contrast features.</div></div>
          </div>
          <div class="feature-item">
            <div class="fi-num">02</div>
            <div><div class="fi-title">Jewel tones at their most vivid</div><div class="fi-desc">Navy, emerald, ruby, and royal purple in their clearest, most saturated form are your signature colours.</div></div>
          </div>
          <div class="feature-item">
            <div class="fi-num">03</div>
            <div><div class="fi-title">Icy pastels for colour</div><div class="fi-desc">When you want softer colours, go icy — icy pink, icy blue, icy yellow. Never dusty or warm pastels.</div></div>
          </div>
          <div class="feature-item">
            <div class="fi-num">04</div>
            <div><div class="fi-title">Always silver, never gold</div><div class="fi-desc">Silver, platinum, and white gold enhance your cool contrast. Gold introduces warmth that fights your undertone.</div></div>
          </div>
        </div>
      </div>
      <div>
        <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">✦ Colours to Avoid</span>
        <div class="avoid-grid">
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#FF6600;"></div>
            <div class="avoid-info"><div class="avoid-name">Orange</div><div class="avoid-why">Warm and jarring</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#C8A070;"></div>
            <div class="avoid-info"><div class="avoid-name">Camel/Tan</div><div class="avoid-why">Too warm, clashes</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#FFD700;"></div>
            <div class="avoid-info"><div class="avoid-name">Golden Yellow</div><div class="avoid-why">Warm undertone clash</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#8B4513;"></div>
            <div class="avoid-info"><div class="avoid-name">Brown</div><div class="avoid-why">Warm tones conflict</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#BDB76B;"></div>
            <div class="avoid-info"><div class="avoid-name">Khaki</div><div class="avoid-why">Too warm and dull</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#BC8F8F;"></div>
            <div class="avoid-info"><div class="avoid-name">Muted Rose</div><div class="avoid-why">Too muted and warm</div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- OUTFIT IDEAS -->
  <section class="season-section">
    <span class="lbl" style="color:#4060D0;">✦ Outfit Inspiration</span>
    <div class="h2" style="margin-bottom:36px;">Looks built for True Winter</div>
    <div class="outfit-grid">
      <div class="outfit-card">
        <div class="outfit-top" style="background:linear-gradient(145deg,#1C1C1C,#2C2C2C);">❄️</div>
        <div class="outfit-body">
          <div class="outfit-occasion">Day</div>
          <div class="outfit-name">Black & Icy</div>
          <div class="outfit-items">Crisp white blouse · Black tailored trousers · Black leather shoes · Silver jewellery</div>
        </div>
      </div>
      <div class="outfit-card">
        <div class="outfit-top" style="background:linear-gradient(145deg,#00008B,#1C3070);">💎</div>
        <div class="outfit-body">
          <div class="outfit-occasion">Formal</div>
          <div class="outfit-name">Royal Navy</div>
          <div class="outfit-items">Deep navy blazer dress · Silver heels · Silver clutch · Sapphire earrings</div>
        </div>
      </div>
      <div class="outfit-card">
        <div class="outfit-top" style="background:linear-gradient(145deg,#8B0000,#6A0000);">🌹</div>
        <div class="outfit-body">
          <div class="outfit-occasion">Evening</div>
          <div class="outfit-name">Winter Red</div>
          <div class="outfit-items">Ruby red silk dress · Black suede heels · Black evening bag · Diamond drop earrings</div>
        </div>
      </div>
    </div>
  </section>

  <!-- CELEBRITIES -->
  <section class="season-section-alt">
    <span class="lbl" style="color:#4060D0;">✦ Famous True Winters</span>
    <div class="h2" style="margin-bottom:36px;">You're in great company</div>
    <div class="celeb-grid">
      <div class="celeb-card">
        <div class="celeb-avatar" style="background:#1C1C1C;">🎬</div>
        <div class="celeb-name">Audrey Hepburn</div>
        <div class="celeb-note">Classic true winter</div>
      </div>
      <div class="celeb-card">
        <div class="celeb-avatar" style="background:#1C2040;">💄</div>
        <div class="celeb-name">Dita Von Teese</div>
        <div class="celeb-note">High-contrast winter</div>
      </div>
      <div class="celeb-card">
        <div class="celeb-avatar" style="background:#2A2848;">🌟</div>
        <div class="celeb-name">Anne Hathaway</div>
        <div class="celeb-note">Cool clear winter</div>
      </div>
      <div class="celeb-card">
        <div class="celeb-avatar" style="background:#1A1A30;">💫</div>
        <div class="celeb-name">Lucy Liu</div>
        <div class="celeb-note">True winter contrast</div>
      </div>
    </div>
  </section>

  <!-- NAV BETWEEN SEASONS -->
  <div style="padding:40px 6%;display:flex;justify-content:space-between;align-items:center;border-top:1px solid #E8DDD6;gap:20px;flex-wrap:wrap;">
    <a class="btn btn-outline" style="color:#2C2420;border-color:#E8DDD6;" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
    <div style="display:flex;gap:8px;flex-wrap:wrap;">
      <a class="btn btn-outline" style="color:#4060D0;border-color:#4060D044;font-size:13px;" href="{{ route('show.seasons.custom_pages', ['slug' => 'dark-winter']) }}">Dark Winter →</a>
      <a class="btn btn-outline" style="color:#4060D0;border-color:#4060D044;font-size:13px;" href="{{ route('show.seasons.custom_pages', ['slug' => 'bright-winter']) }}">Bright Winter →</a>
    </div>
  </div>

  <div class="footer-mini">
    <div class="fm-logo">Chroma<em>Fit</em></div>
    <div class="fm-links"><a  href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">All Seasons</a></div>
  </div>
@endsection
