@extends('layouts.app')
@section('page_style')
    <x-season-style/>
@endsection
@section('content')
  <section class="season-page-hero" style="background:linear-gradient(145deg,#1840A0,#1060C0,#0848A0);color:#E8F4FF;">
    <div>
      <div class="sp-eyebrow">
        <div class="sp-line" style="background:#0080FF;"></div>
        <span class="sp-season-type" style="color:#0080FF;">❄️ Winter · Cool · Bright</span>
      </div>
      <div class="sp-title" style="font-size:clamp(52px,7vw,88px);">Bright Winter</div>
      <div class="sp-tagline" style="color:#E8F4FF66;">"Electric, vivid, and dazzlingly cool"</div>
      <p class="sp-desc" style="color:#E8F4FF88;">Bright Winter sits at the thrilling intersection of winter and spring — clear, cool, and intensely vivid. Your colouring demands the most saturated, electric colours of any season.</p>
      <div class="sp-palette-preview">
        <div class="sp-swatch" style="background:#0000FF;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#FF0080;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#00C0FF;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#00FF80;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#FF00FF;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#FFFF00;border:2.5px solid rgba(255,255,255,.25);"></div>
      </div>
      <div style="display:flex;gap:12px;flex-wrap:wrap;">
        <a class="btn btn-white" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
        <a class="btn btn-outline" style="color:#E8F4FF;border-color:#E8F4FF44;" href="{{ route('show.custom_pages', ['slug' => 'test']) }}">Find My Season</a>
      </div>
    </div>
    <div class="sp-hero-visual">
      <div class="sp-visual-main" style="background:linear-gradient(145deg,#0060FF,#0040C0);">⚡</div>
      <div class="sp-visual-badges">
        <div class="sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">❄️</div>
          <div><div class="sp-badge-title" style="color:#E8F4FF;">Cool Undertone</div><div class="sp-badge-sub" style="color:#E8F4FF;">Clear, bright cool</div></div>
        </div>
        <div class="sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">💡</div>
          <div><div class="sp-badge-title" style="color:#E8F4FF;">Brightest Season</div><div class="sp-badge-sub" style="color:#E8F4FF;">Maximum saturation</div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- PALETTE -->
  <section class="season-section">
    <span class="lbl" style="color:#0080FF;">✦ Your Colour Palette</span>
    <div class="h2" style="margin-bottom:12px;">Best colours for Bright Winter</div>
    <p class="body-text" style="max-width:560px;margin-bottom:36px;">The most vivid, electric palette of all 12 seasons. Pure bright blue, electric pink, vivid cyan, and clear emerald. Your colours should practically glow.</p>
    <div class="two-col">
      <div>
        <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">Power Shades</div>
        <div class="color-grid" style="margin-bottom:28px;">
          <div class="cswatch cswatch-lg" style="background:#0000FF;" title="#0000FF"></div>
          <div class="cswatch cswatch-lg" style="background:#FF0080;" title="#FF0080"></div>
          <div class="cswatch cswatch-lg" style="background:#00C0FF;" title="#00C0FF"></div>
          <div class="cswatch cswatch-lg" style="background:#00FF80;" title="#00FF80"></div>
          <div class="cswatch cswatch-lg" style="background:#FF00FF;" title="#FF00FF"></div>
          <div class="cswatch cswatch-lg" style="background:#FFFF00;" title="#FFFF00"></div>
          <div class="cswatch cswatch-lg" style="background:#00FFFF;" title="#00FFFF"></div>
          <div class="cswatch cswatch-lg" style="background:#FF4040;" title="#FF4040"></div>
        </div>
        <div class="swatch-strip" style="height:14px;border-radius:7px;margin-bottom:8px;">
          <span style="background:#0000FF;"></span>
          <span style="background:#FF0080;"></span>
          <span style="background:#00C0FF;"></span>
          <span style="background:#00FF80;"></span>
          <span style="background:#FF00FF;"></span>
          <span style="background:#FFFF00;"></span>
          <span style="background:#00FFFF;"></span>
          <span style="background:#FF4040;"></span>
        </div>
        <div style="font-size:12px;color:#B0A49E;">Your complete spectrum — from light to dark</div>
      </div>
      <div>
        <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">Neutrals & Staples</div>
        <div class="color-grid" style="margin-bottom:20px;">
          <div class="cswatch" style="background:#F0F8FF;"></div>
          <div class="cswatch" style="background:#E0E8F8;"></div>
          <div class="cswatch" style="background:#C0D0E8;"></div>
          <div class="cswatch" style="background:#A0B8D8;"></div>
        </div>
        <p class="body-text" style="font-size:14px;">Icy, clear white and very pale cool blue are your neutrals — always crisp, never warm or muted.</p>
      </div>
    </div>
  </section>

  <!-- YOUR FEATURES -->
  <section class="season-section-alt">
    <span class="lbl" style="color:#0080FF;">✦ Typical Features</span>
    <div class="h2" style="margin-bottom:40px;">Do you look like a Bright Winter?</div>
    <div class="three-col">
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">🧴</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skin</div>
        <div class="body-text" style="font-size:14px;">Fair to medium skin with a cool undertone and a natural vibrancy. High contrast between skin and features. Skin often has a healthy, lit-from-within quality. Striking, clear colouring.</div>
      </div>
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">👁️</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Eyes</div>
        <div class="body-text" style="font-size:14px;">Vivid blue, clear green, bright hazel, or striking dark eyes — always appearing vivid and clear. Eyes are often the most memorable feature. A bright, sparkling quality.</div>
      </div>
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">💇</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Hair</div>
        <div class="body-text" style="font-size:14px;">Cool black, very dark cool brown, or dramatically blonde with no warmth. High contrast between hair and skin. Often has a shine or gloss to it. Always cool-toned.</div>
      </div>
    </div>
    <div style="margin-top:32px;padding:24px;background:#0080FF14;border:1px solid #0080FF33;border-radius:16px;">
      <div style="font-size:15px;font-weight:600;color:#2C2420;margin-bottom:6px;">✦ The Bright Winter glow effect</div>
      <div class="body-text" style="font-size:14px;">Bright Winters in their colours look electrifying — like they've plugged into a power source. The vivid, clear colours match their naturally high contrast and clear features to create a dazzlingly memorable impression.</div>
    </div>
  </section>

  <!-- MAKEUP -->
  <section class="season-section">
    <span class="lbl" style="color:#0080FF;">✦ Makeup Guide</span>
    <div class="h2" style="margin-bottom:12px;">Your perfect makeup shades</div>
    <p class="body-text" style="max-width:560px;margin-bottom:36px;">Vivid, clear, and cool. Bright Winter can wear the most saturated, electric cool makeup of any season. Nothing muted, nothing warm.</p>
    <div class="makeup-row">
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#F0ECFF;"></div>
        <div class="makeup-label">Icy Cool</div>
        <div class="makeup-type">Foundation</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#FF4080;"></div>
        <div class="makeup-label">Vivid Cool Pink</div>
        <div class="makeup-type">Blush</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#FF0060;"></div>
        <div class="makeup-label">Electric Pink-Red</div>
        <div class="makeup-type">Lips</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#0040C0;"></div>
        <div class="makeup-label">Vivid Blue</div>
        <div class="makeup-type">Eyes</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#8000FF;"></div>
        <div class="makeup-label">Electric Violet</div>
        <div class="makeup-type">Eyes</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#004080;"></div>
        <div class="makeup-label">Deep Electric</div>
        <div class="makeup-type">Eyes</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#FF40A0;"></div>
        <div class="makeup-label">Hot Cool Pink</div>
        <div class="makeup-type">Blush</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#C0E8FF;"></div>
        <div class="makeup-label">Icy Blue Shimmer</div>
        <div class="makeup-type">Highlighter</div>
      </div>
    </div>
    <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
      <div class="card">
        <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Foundation Undertone</div>
        <div class="body-text" style="font-size:14px;">Cool, clear foundations — similar to True Winter but you may need slightly more coverage to create a vivid, clear base for your electric makeup. Always cool-toned.</div>
      </div>
      <div class="card">
        <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Key Makeup Rule</div>
        <div class="body-text" style="font-size:14px;">Electric and vivid. The brightest, most saturated cool colours belong to you. Vivid pink lips, electric blue liner, and icy shimmer on the eyes — you were made for this.</div>
      </div>
    </div>
  </section>

  <!-- WARDROBE -->
  <section class="season-section-alt">
    <div class="two-col">
      <div>
        <span class="lbl" style="color:#0080FF;">✦ Wardrobe Tips</span>
        <div class="h2" style="margin-bottom:20px;">How to dress as a Bright Winter</div>
        <div class="feature-row">
          <div class="feature-item">
            <div class="fi-num">01</div>
            <div><div class="fi-title">Embrace electric, vivid hues</div><div class="fi-desc">You are the one season that truly benefits from the most saturated, electric colours. Vivid blue, electric pink, and clear emerald belong to you.</div></div>
          </div>
          <div class="feature-item">
            <div class="fi-num">02</div>
            <div><div class="fi-title">Black and white with vivid accents</div><div class="fi-desc">A black outfit with one vivid cool accessory — electric blue bag or hot pink shoes — is a signature Bright Winter combination.</div></div>
          </div>
          <div class="feature-item">
            <div class="fi-num">03</div>
            <div><div class="fi-title">Cool neons are yours</div><div class="fi-desc">Cool-toned neons — neon blue, electric pink, vivid cyan — are genuinely flattering on Bright Winter. Use them confidently.</div></div>
          </div>
          <div class="feature-item">
            <div class="fi-num">04</div>
            <div><div class="fi-title">Keep it clear, never muted</div><div class="fi-desc">Every colour should be clear and saturated. If a shade looks dusty or muted, it's wrong for you. Clarity is everything.</div></div>
          </div>
        </div>
      </div>
      <div>
        <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">✦ Colours to Avoid</span>
        <div class="avoid-grid">
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#C8A070;"></div>
            <div class="avoid-info"><div class="avoid-name">Warm Tan</div><div class="avoid-why">Too warm, drains clarity</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#FFD700;"></div>
            <div class="avoid-info"><div class="avoid-name">Golden Yellow</div><div class="avoid-why">Warm undertone conflict</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#BC8F8F;"></div>
            <div class="avoid-info"><div class="avoid-name">Dusty Rose</div><div class="avoid-why">Too muted for your vivid season</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#A0917E;"></div>
            <div class="avoid-info"><div class="avoid-name">Warm Taupe</div><div class="avoid-why">Too warm and muted</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#8B4513;"></div>
            <div class="avoid-info"><div class="avoid-name">Brown</div><div class="avoid-why">Warm tones clash completely</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#D2B48C;"></div>
            <div class="avoid-info"><div class="avoid-name">Camel</div><div class="avoid-why">Too warm and dull</div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- OUTFIT IDEAS -->
  <section class="season-section">
    <span class="lbl" style="color:#0080FF;">✦ Outfit Inspiration</span>
    <div class="h2" style="margin-bottom:36px;">Looks built for Bright Winter</div>
    <div class="outfit-grid">
      <div class="outfit-card">
        <div class="outfit-top" style="background:linear-gradient(145deg,#0060FF,#0040A0);">⚡</div>
        <div class="outfit-body">
          <div class="outfit-occasion">Day</div>
          <div class="outfit-name">Electric Blue</div>
          <div class="outfit-items">Vivid cobalt blue structured top · Crisp white wide-leg trousers · White sneakers · Silver chain</div>
        </div>
      </div>
      <div class="outfit-card">
        <div class="outfit-top" style="background:linear-gradient(145deg,#FF0080,#C00060);">💥</div>
        <div class="outfit-body">
          <div class="outfit-occasion">Evening</div>
          <div class="outfit-name">Neon Night</div>
          <div class="outfit-items">Electric hot pink dress · Black strappy heels · Black clutch · Silver statement earrings</div>
        </div>
      </div>
      <div class="outfit-card">
        <div class="outfit-top" style="background:linear-gradient(145deg,#00C0FF,#0080C0);">🧊</div>
        <div class="outfit-body">
          <div class="outfit-occasion">Casual</div>
          <div class="outfit-name">Icy Cyan</div>
          <div class="outfit-items">Vivid cyan blouse · Black straight jeans · Black pointed boots · Silver jewellery</div>
        </div>
      </div>
    </div>
  </section>

  <!-- CELEBRITIES -->
  <section class="season-section-alt">
    <span class="lbl" style="color:#0080FF;">✦ Famous Bright Winters</span>
    <div class="h2" style="margin-bottom:36px;">You're in great company</div>
    <div class="celeb-grid">
      <div class="celeb-card">
        <div class="celeb-avatar" style="background:#0040C0;">💎</div>
        <div class="celeb-name">Elizabeth Taylor</div>
        <div class="celeb-note">Vivid cool winter</div>
      </div>
      <div class="celeb-card">
        <div class="celeb-avatar" style="background:#8000FF;">🎵</div>
        <div class="celeb-name">Katy Perry</div>
        <div class="celeb-note">Electric bright winter</div>
      </div>
      <div class="celeb-card">
        <div class="celeb-avatar" style="background:#0060C0;">🌟</div>
        <div class="celeb-name">Zooey Deschanel</div>
        <div class="celeb-note">Clear vivid features</div>
      </div>
      <div class="celeb-card">
        <div class="celeb-avatar" style="background:#FF0080;">💫</div>
        <div class="celeb-name">Megan Fox</div>
        <div class="celeb-note">Bright cool contrast</div>
      </div>
    </div>
  </section>

  <!-- NAV BETWEEN SEASONS -->
  <div style="padding:40px 6%;display:flex;justify-content:space-between;align-items:center;border-top:1px solid #E8DDD6;gap:20px;flex-wrap:wrap;">
    <a class="btn btn-outline" style="color:#2C2420;border-color:#E8DDD6;" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
    <div style="display:flex;gap:8px;flex-wrap:wrap;">
      <a class="btn btn-outline" style="color:#0080FF;border-color:#0080FF44;font-size:13px;" href="{{ route('show.seasons.custom_pages', ['slug' => 'true-winter']) }}">True Winter →</a>
      <a class="btn btn-outline" style="color:#0080FF;border-color:#0080FF44;font-size:13px;" href="{{ route('show.seasons.custom_pages', ['slug' => 'true-spring']) }}">True Spring (adjacent) →</a>
    </div>
  </div>

  <div class="footer-mini">
    <div class="fm-logo">Chroma<em>Fit</em></div>
    <div class="fm-links"><a  href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">All Seasons</a></div>
  </div>
@endsection
