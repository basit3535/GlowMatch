@extends('layouts.app')
@section('page_style')
    <x-season-style/>
@endsection
@section('content')
  <section class="season-page-hero" style="background:linear-gradient(145deg,#080C18,#141828,#201830);color:#C0C8E0;">
    <div>
      <div class="sp-eyebrow">
        <div class="sp-line" style="background:#4860C0;"></div>
        <span class="sp-season-type" style="color:#4860C0;">❄️ Winter · Cool · Dark</span>
      </div>
      <div class="sp-title" style="font-size:clamp(52px,7vw,88px);">Dark Winter</div>
      <div class="sp-tagline" style="color:#C0C8E066;">"Intensely dark, coolly dramatic, hauntingly beautiful"</div>
      <p class="sp-desc" style="color:#C0C8E088;">Dark Winter is the most dramatic and intense of all seasons — deep, cool, and powerfully striking. Your natural colouring creates extraordinary contrast that only the richest, darkest colours can match.</p>
      <div class="sp-palette-preview">
        <div class="sp-swatch" style="background:#1C2040;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#2A1020;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#102030;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#3A1818;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#1A1A30;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#301028;border:2.5px solid rgba(255,255,255,.25);"></div>
      </div>
      <div style="display:flex;gap:12px;flex-wrap:wrap;">
        <a class="btn btn-white" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
        <a class="btn btn-outline" style="color:#C0C8E0;border-color:#C0C8E044;" href="{{ route('show.custom_pages', ['slug' => 'test']) }}">Find My Season</a>
      </div>
    </div>
    <div class="sp-hero-visual">
      <div class="sp-visual-main" style="background:linear-gradient(145deg,#1C2848,#101828);">🌑</div>
      <div class="sp-visual-badges">
        <div class="sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">❄️</div>
          <div><div class="sp-badge-title" style="color:#C0C8E0;">Cool Undertone</div><div class="sp-badge-sub" style="color:#C0C8E0;">Deep cool-warm bridge</div></div>
        </div>
        <div class="sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">🌑</div>
          <div><div class="sp-badge-title" style="color:#C0C8E0;">Dark Value</div><div class="sp-badge-sub" style="color:#C0C8E0;">Deepest of all 12</div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- PALETTE -->
  <section class="season-section">
    <span class="lbl" style="color:#4860C0;">✦ Your Colour Palette</span>
    <div class="h2" style="margin-bottom:12px;">Best colours for Dark Winter</div>
    <p class="body-text" style="max-width:560px;margin-bottom:36px;">The deepest, most dramatic palette of all 12 seasons. Dark navy, deep plum, rich burgundy, forest black, and dark teal. Your colours are at the extreme deep-cool end of the spectrum.</p>
    <div class="two-col">
      <div>
        <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">Power Shades</div>
        <div class="color-grid" style="margin-bottom:28px;">
          <div class="cswatch cswatch-lg" style="background:#1C2040;" title="#1C2040"></div>
          <div class="cswatch cswatch-lg" style="background:#2A1020;" title="#2A1020"></div>
          <div class="cswatch cswatch-lg" style="background:#102030;" title="#102030"></div>
          <div class="cswatch cswatch-lg" style="background:#3A1818;" title="#3A1818"></div>
          <div class="cswatch cswatch-lg" style="background:#1A1A30;" title="#1A1A30"></div>
          <div class="cswatch cswatch-lg" style="background:#301028;" title="#301028"></div>
          <div class="cswatch cswatch-lg" style="background:#0A1828;" title="#0A1828"></div>
          <div class="cswatch cswatch-lg" style="background:#281830;" title="#281830"></div>
        </div>
        <div class="swatch-strip" style="height:14px;border-radius:7px;margin-bottom:8px;">
          <span style="background:#1C2040;"></span>
          <span style="background:#2A1020;"></span>
          <span style="background:#102030;"></span>
          <span style="background:#3A1818;"></span>
          <span style="background:#1A1A30;"></span>
          <span style="background:#301028;"></span>
          <span style="background:#0A1828;"></span>
          <span style="background:#281830;"></span>
        </div>
        <div style="font-size:12px;color:#B0A49E;">Your complete spectrum — from light to dark</div>
      </div>
      <div>
        <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">Neutrals & Staples</div>
        <div class="color-grid" style="margin-bottom:20px;">
          <div class="cswatch" style="background:#1A1820;"></div>
          <div class="cswatch" style="background:#2A2028;"></div>
          <div class="cswatch" style="background:#3A3040;"></div>
          <div class="cswatch" style="background:#4A4050;"></div>
        </div>
        <p class="body-text" style="font-size:14px;">Near-black in deep navy, dark plum, and deep charcoal form your neutral foundation — always dark and cool.</p>
      </div>
    </div>
  </section>

  <!-- YOUR FEATURES -->
  <section class="season-section-alt">
    <span class="lbl" style="color:#4860C0;">✦ Typical Features</span>
    <div class="h2" style="margin-bottom:40px;">Do you look like a Dark Winter?</div>
    <div class="three-col">
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">🧴</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skin</div>
        <div class="body-text" style="font-size:14px;">Medium-deep to very deep skin with a cool or neutral-cool undertone. High natural contrast between skin and features. Often has a distinctive coolness to deep skin. Dramatically beautiful.</div>
      </div>
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">👁️</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Eyes</div>
        <div class="body-text" style="font-size:14px;">Very dark brown, nearly black, dark cool hazel, or striking cool dark eyes. Eyes are deep, penetrating, and often the most striking feature. An intense, dramatic quality.</div>
      </div>
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">💇</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Hair</div>
        <div class="body-text" style="font-size:14px;">Very dark brown, cool black, near-black, or dramatically dark. Always cool-toned — never warm or auburn. The deepest, most dramatic hair of any season.</div>
      </div>
    </div>
    <div style="margin-top:32px;padding:24px;background:#4860C014;border:1px solid #4860C033;border-radius:16px;">
      <div style="font-size:15px;font-weight:600;color:#2C2420;margin-bottom:6px;">✦ The Dark Winter glow effect</div>
      <div class="body-text" style="font-size:14px;">Dark Winters in their colours look cinematic — like they've stepped out of a dramatic film. The deep, cool colours match their intense natural contrast for a powerfully beautiful, unforgettable appearance.</div>
    </div>
  </section>

  <!-- MAKEUP -->
  <section class="season-section">
    <span class="lbl" style="color:#4860C0;">✦ Makeup Guide</span>
    <div class="h2" style="margin-bottom:12px;">Your perfect makeup shades</div>
    <p class="body-text" style="max-width:560px;margin-bottom:36px;">Dark, cool, and dramatic. Dark Winter can wear the most intense cool makeup of any season — deep plum lips, dark navy liner, and cool berry cheeks.</p>
    <div class="makeup-row">
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#382830;"></div>
        <div class="makeup-label">Deep Cool Tan</div>
        <div class="makeup-type">Foundation</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#6A3050;"></div>
        <div class="makeup-label">Deep Berry</div>
        <div class="makeup-type">Blush</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#5A1040;"></div>
        <div class="makeup-label">Dark Plum</div>
        <div class="makeup-type">Lips</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#1A2848;"></div>
        <div class="makeup-label">Deep Navy</div>
        <div class="makeup-type">Eyes</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#2A1038;"></div>
        <div class="makeup-label">Dark Violet</div>
        <div class="makeup-type">Eyes</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#301840;"></div>
        <div class="makeup-label">Deep Purple</div>
        <div class="makeup-type">Eyes</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#4A1830;"></div>
        <div class="makeup-label">Cool Burgundy</div>
        <div class="makeup-type">Blush</div>
      </div>
      <div class="makeup-item">
        <div class="makeup-swatch" style="background:#C0C8D8;"></div>
        <div class="makeup-label">Icy Silver</div>
        <div class="makeup-type">Highlighter</div>
      </div>
    </div>
    <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
      <div class="card">
        <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Foundation Undertone</div>
        <div class="body-text" style="font-size:14px;">Cool, deep foundations — the coolest and deepest in the entire foundation range. Avoid any warmth or yellow undertone entirely.</div>
      </div>
      <div class="card">
        <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Key Makeup Rule</div>
        <div class="body-text" style="font-size:14px;">Dark and cool. Deep plum lips, dark navy or violet eyes, and a cool berry blush is the signature Dark Winter look. You are the only season that can truly wear near-black eyeshadow.</div>
      </div>
    </div>
  </section>

  <!-- WARDROBE -->
  <section class="season-section-alt">
    <div class="two-col">
      <div>
        <span class="lbl" style="color:#4860C0;">✦ Wardrobe Tips</span>
        <div class="h2" style="margin-bottom:20px;">How to dress as a Dark Winter</div>
        <div class="feature-row">
          <div class="feature-item">
            <div class="fi-num">01</div>
            <div><div class="fi-title">Wear your darkness proudly</div><div class="fi-desc">Deep navy, dark plum, forest black, and charcoal are not just colours for you — they're your most flattering neutrals.</div></div>
          </div>
          <div class="feature-item">
            <div class="fi-num">02</div>
            <div><div class="fi-title">Jewel tones at their deepest</div><div class="fi-desc">The deepest sapphire, darkest emerald, and richest ruby all belong to Dark Winter. The deeper the jewel tone, the better.</div></div>
          </div>
          <div class="feature-item">
            <div class="fi-num">03</div>
            <div><div class="fi-title">Black is genuinely your colour</div><div class="fi-desc">Unlike most seasons, black truly flatters you. It matches the intensity of your dark, cool features perfectly.</div></div>
          </div>
          <div class="feature-item">
            <div class="fi-num">04</div>
            <div><div class="fi-title">Silver for all jewellery</div><div class="fi-desc">Cool silver, white gold, and platinum are the only metals that enhance your cool depth. Gold will fight with your colouring.</div></div>
          </div>
        </div>
      </div>
      <div>
        <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">✦ Colours to Avoid</span>
        <div class="avoid-grid">
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#FF6600;"></div>
            <div class="avoid-info"><div class="avoid-name">Orange</div><div class="avoid-why">Too warm, clashes dramatically</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#FFD700;"></div>
            <div class="avoid-info"><div class="avoid-name">Yellow</div><div class="avoid-why">Too warm and light</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#C8A070;"></div>
            <div class="avoid-info"><div class="avoid-name">Warm Brown</div><div class="avoid-why">Undertone mismatch</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#F5DEB3;"></div>
            <div class="avoid-info"><div class="avoid-name">Warm Beige</div><div class="avoid-why">Too light and warm</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#90EE90;"></div>
            <div class="avoid-info"><div class="avoid-name">Light Green</div><div class="avoid-why">Too light and warm-toned</div></div>
          </div>
          <div class="avoid-card">
            <div class="avoid-swatch" style="background:#FFC0CB;"></div>
            <div class="avoid-info"><div class="avoid-name">Pastel Pink</div><div class="avoid-why">Too light, wrong undertone</div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- OUTFIT IDEAS -->
  <section class="season-section">
    <span class="lbl" style="color:#4860C0;">✦ Outfit Inspiration</span>
    <div class="h2" style="margin-bottom:36px;">Looks built for Dark Winter</div>
    <div class="outfit-grid">
      <div class="outfit-card">
        <div class="outfit-top" style="background:linear-gradient(145deg,#1C2848,#101828);">🌑</div>
        <div class="outfit-body">
          <div class="outfit-occasion">Day</div>
          <div class="outfit-name">Dark Sovereign</div>
          <div class="outfit-items">Deep navy structured coat · Charcoal trousers · Black leather shoes · Silver watch</div>
        </div>
      </div>
      <div class="outfit-card">
        <div class="outfit-top" style="background:linear-gradient(145deg,#3A1818,#2A1020);">💎</div>
        <div class="outfit-body">
          <div class="outfit-occasion">Evening</div>
          <div class="outfit-name">Midnight Plum</div>
          <div class="outfit-items">Deep plum silk dress · Black pointed heels · Silver evening bag · Amethyst jewellery</div>
        </div>
      </div>
      <div class="outfit-card">
        <div class="outfit-top" style="background:linear-gradient(145deg,#102030,#0A1828);">❄️</div>
        <div class="outfit-body">
          <div class="outfit-occasion">Formal</div>
          <div class="outfit-name">Deep Ocean</div>
          <div class="outfit-items">Dark teal-navy blazer · Near-black trousers · Black patent shoes · Cool sapphire cufflinks</div>
        </div>
      </div>
    </div>
  </section>

  <!-- CELEBRITIES -->
  <section class="season-section-alt">
    <span class="lbl" style="color:#4860C0;">✦ Famous Dark Winters</span>
    <div class="h2" style="margin-bottom:36px;">You're in great company</div>
    <div class="celeb-grid">
      <div class="celeb-card">
        <div class="celeb-avatar" style="background:#1C2848;">👑</div>
        <div class="celeb-name">Priyanka Chopra</div>
        <div class="celeb-note">Deep cool winter depth</div>
      </div>
      <div class="celeb-card">
        <div class="celeb-avatar" style="background:#2A1020;">💫</div>
        <div class="celeb-name">Deepika Padukone</div>
        <div class="celeb-note">Dramatic dark winter</div>
      </div>
      <div class="celeb-card">
        <div class="celeb-avatar" style="background:#1A1A30;">🌟</div>
        <div class="celeb-name">Andie MacDowell</div>
        <div class="celeb-note">Dark winter contrast</div>
      </div>
      <div class="celeb-card">
        <div class="celeb-avatar" style="background:#301028;">🎬</div>
        <div class="celeb-name">Sofia Vergara</div>
        <div class="celeb-note">Deep cool features</div>
      </div>
    </div>
  </section>

  <!-- NAV BETWEEN SEASONS -->
  <div style="padding:40px 6%;display:flex;justify-content:space-between;align-items:center;border-top:1px solid #E8DDD6;gap:20px;flex-wrap:wrap;">
    <a class="btn btn-outline" style="color:#2C2420;border-color:#E8DDD6;" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
    <div style="display:flex;gap:8px;flex-wrap:wrap;">
      <a class="btn btn-outline" style="color:#4860C0;border-color:#4860C044;font-size:13px;" href="{{ route('show.seasons.custom_pages', ['slug' => 'true-winter']) }}">True Winter →</a>
      <a class="btn btn-outline" style="color:#4860C0;border-color:#4860C044;font-size:13px;" href="{{ route('show.seasons.custom_pages', ['slug' => 'dark-autumn']) }}">Dark Autumn →</a>
    </div>
  </div>

  <div class="footer-mini">
    <div class="fm-logo">Chroma<em>Fit</em></div>
    <div class="fm-links"><a  href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">All Seasons</a></div>
  </div>
@endsection
