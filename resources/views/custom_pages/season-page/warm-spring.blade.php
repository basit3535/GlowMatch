@extends('layouts.app')
@section('page_style')
    <x-season-style/>
@endsection
@section('content')
  <section class="season-page-hero" style="background:linear-gradient(145deg,#E8A870,#D48048,#C06030);color:#fff;">
    <div>
      <div class="sp-eyebrow">
        <div class="sp-line" style="background:#B85A38;"></div>
        <span class="sp-season-type" style="color:#B85A38;">🌸 Spring · Warm · Deep</span>
      </div>
      <div class="sp-title" style="font-size:clamp(52px,7vw,88px);">Warm Spring</div>
      <div class="sp-tagline" style="color:#ffffff66;">"Boldly warm, richly golden, deeply radiant"</div>
      <p class="sp-desc" style="color:#ffffff88;">Warm Spring sits at the intersection of spring and autumn — golden, warm, and with slightly more depth than other springs. You share autumn's earthiness but retain spring's clarity.</p>
      <div class="sp-palette-preview">
        <div class="sp-swatch" style="background:#E8855A;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#D4A843;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#8B7035;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#C06030;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#A0522D;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#B8860B;border:2.5px solid rgba(255,255,255,.25);"></div>
      </div>
      <div style="display:flex;gap:12px;flex-wrap:wrap;">
        <a class="btn btn-white" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
        <a class="btn btn-outline" style="color:#fff;border-color:#ffffff44;" href="{{ route('show.custom_pages', ['slug' => 'test']) }}">Find My Season</a>
      </div>
    </div>
    <div class="sp-hero-visual">
      <div class="sp-visual-main" style="background:linear-gradient(145deg,#D4A843,#C88030);">🔥</div>
      <div class="sp-visual-badges">
        <div class="sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">🌡️</div>
          <div><div class="sp-badge-title" style="color:#fff;">Warm Undertone</div><div class="sp-badge-sub" style="color:#fff;">Deep golden warmth</div></div>
        </div>
        <div class="sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">🌿</div>
          <div><div class="sp-badge-title" style="color:#fff;">Spring-Autumn Bridge</div><div class="sp-badge-sub" style="color:#fff;">Richer than spring</div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- PALETTE (unisex) -->
  <section class="season-section">
    <span class="lbl" style="color:#B85A38;">✦ Your Colour Palette</span>
    <div class="h2" style="margin-bottom:12px;">Best colours for Warm Spring</div>
    <p class="body-text" style="max-width:560px;margin-bottom:36px;">Your palette is the warmest of all springs — deeper, richer, and slightly more muted. Think golden ambers, warm tans, rich corals, and earthy greens.</p>
    <div class="two-col">
      <div>
        <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">Power Shades</div>
        <div class="color-grid" style="margin-bottom:28px;">
          <div class="cswatch cswatch-lg" style="background:#E8855A;" title="#E8855A"></div>
          <div class="cswatch cswatch-lg" style="background:#D4A843;" title="#D4A843"></div>
          <div class="cswatch cswatch-lg" style="background:#8B7035;" title="#8B7035"></div>
          <div class="cswatch cswatch-lg" style="background:#C06030;" title="#C06030"></div>
          <div class="cswatch cswatch-lg" style="background:#A0522D;" title="#A0522D"></div>
          <div class="cswatch cswatch-lg" style="background:#B8860B;" title="#B8860B"></div>
          <div class="cswatch cswatch-lg" style="background:#CD853F;" title="#CD853F"></div>
          <div class="cswatch cswatch-lg" style="background:#8B6914;" title="#8B6914"></div>
        </div>
        <div class="swatch-strip" style="height:14px;border-radius:7px;margin-bottom:8px;">
          <span style="background:#E8855A;"></span>
          <span style="background:#D4A843;"></span>
          <span style="background:#8B7035;"></span>
          <span style="background:#C06030;"></span>
          <span style="background:#A0522D;"></span>
          <span style="background:#B8860B;"></span>
          <span style="background:#CD853F;"></span>
          <span style="background:#8B6914;"></span>
        </div>
        <div style="font-size:12px;color:#B0A49E;">Your complete spectrum — from light to dark</div>
      </div>
      <div>
        <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">Neutrals & Staples</div>
        <div class="color-grid" style="margin-bottom:20px;">
          <div class="cswatch" style="background:#D2B48C;"></div>
          <div class="cswatch" style="background:#C8A050;"></div>
          <div class="cswatch" style="background:#A07840;"></div>
          <div class="cswatch" style="background:#806030;"></div>
        </div>
        <p class="body-text" style="font-size:14px;">Deep camel, warm tan, and golden brown serve as your richest neutrals — far earthier than other spring seasons.</p>
      </div>
    </div>
  </section>

  <!-- YOUR FEATURES (unisex) -->
  <section class="season-section-alt">
    <span class="lbl" style="color:#B85A38;">✦ Typical Features</span>
    <div class="h2" style="margin-bottom:40px;">Do you look like a Warm Spring?</div>
    <div class="three-col">
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">🧴</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skin</div>
        <div class="body-text" style="font-size:14px;">Light to medium-tan skin with a strong golden or bronzed warm undertone. Often tans deeply and beautifully. May look year-round as if lightly sun-kissed.</div>
      </div>
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">👁️</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Eyes</div>
        <div class="body-text" style="font-size:14px;">Warm hazel, amber, golden brown, or warm green. Eyes often have strong golden or amber flecks. The eyes appear warm and richly coloured.</div>
      </div>
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">💇</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Hair</div>
        <div class="body-text" style="font-size:14px;">Golden brown, auburn, warm chestnut, or medium golden blonde. Often has natural warm highlights. Hair has a naturally rich, honeyed quality.</div>
      </div>
    </div>
    <div style="margin-top:32px;padding:24px;background:#B85A3814;border:1px solid #B85A3833;border-radius:16px;">
      <div style="font-size:15px;font-weight:600;color:#2C2420;margin-bottom:6px;">✦ The Warm Spring glow effect</div>
      <div class="body-text" style="font-size:14px;">Warm Springs in their colours look as though they've just returned from a sun-drenched holiday — bronzed, vital, and deeply alive. The warmth in the colours amplifies their natural golden glow.</div>
    </div>
  </section>

  <!-- GENDER-SPECIFIC SECTIONS -->
  <div style="margin: 0 6%;">
    <div class="gender-toggle">
      <button class="gender-btn active" data-gender="women">👩 Women / Feminine</button>
      <button class="gender-btn" data-gender="men">👨 Men / Masculine</button>
      <button class="gender-btn" data-gender="neutral">🌟 Gender-Neutral</button>
    </div>
  </div>

  <!-- WOMEN CONTENT -->
  <div id="women-content" class="gender-content active-gender">
    <!-- Makeup Guide (Women) -->
    <section class="season-section">
      <span class="lbl" style="color:#B85A38;">✦ Makeup Guide (Women)</span>
      <div class="h2" style="margin-bottom:12px;">Your perfect makeup shades</div>
      <p class="body-text" style="max-width:560px;margin-bottom:36px;">Your makeup should be warm, golden, and slightly richer than other springs. Bronze and amber tones are your signature.</p>
      <div class="makeup-row">
        <div class="makeup-item"><div class="makeup-swatch" style="background:#C8A060;"></div><div class="makeup-label">Warm Golden Tan</div><div class="makeup-type">Foundation</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#C86040;"></div><div class="makeup-label">Terracotta Blush</div><div class="makeup-type">Blush</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#B8502A;"></div><div class="makeup-label">Warm Brick</div><div class="makeup-type">Lips</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#8B6914;"></div><div class="makeup-label">Deep Gold</div><div class="makeup-type">Eyes</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#CD853F;"></div><div class="makeup-label">Warm Copper</div><div class="makeup-type">Eyes</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#E8904A;"></div><div class="makeup-label">Amber Coral</div><div class="makeup-type">Lips</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#B87040;"></div><div class="makeup-label">Deep Peach</div><div class="makeup-type">Blush</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#C8A040;"></div><div class="makeup-label">Antique Gold</div><div class="makeup-type">Highlighter</div></div>
      </div>
      <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
        <div class="card"><div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Foundation Undertone</div><div class="body-text" style="font-size:14px;">You need a foundation with a strong warm, golden undertone — possibly the warmest of all spring foundations. Look for "warm golden" or "warm tan" shades.</div></div>
        <div class="card"><div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Key Makeup Rule</div><div class="body-text" style="font-size:14px;">Think bronze, amber, and deep warm gold. You're the spring season that can handle the richest, warmest makeup shades without being overwhelmed.</div></div>
      </div>
    </section>

    <!-- Wardrobe Tips (Women) -->
    <section class="season-section-alt">
      <div class="two-col">
        <div>
          <span class="lbl" style="color:#B85A38;">✦ Wardrobe Tips (Women)</span>
          <div class="h2" style="margin-bottom:20px;">How to dress as a Warm Spring woman</div>
          <div class="feature-row">
            <div class="feature-item"><div class="fi-num">01</div><div><div class="fi-title">Embrace golden ambers and rusts</div><div class="fi-desc">Your richer colouring can handle deeper warm tones like rust, amber, golden brown, and warm tan that would overwhelm lighter springs.</div></div></div>
            <div class="feature-item"><div class="fi-num">02</div><div><div class="fi-title">Bridge spring and autumn</div><div class="fi-desc">You can borrow from the autumn palette — try muted olive, warm terracotta, and rich camel alongside clearer spring shades.</div></div></div>
            <div class="feature-item"><div class="fi-num">03</div><div><div class="fi-title">Keep your metals gold</div><div class="fi-desc">Gold in every shade — antique gold, burnished copper, rose gold — all enhance your warm depth beautifully.</div></div></div>
            <div class="feature-item"><div class="fi-num">04</div><div><div class="fi-title">Layer warm tones</div><div class="fi-desc">A tonal outfit in different shades of warm amber, gold, and tan creates a sophisticated, pulled-together look.</div></div></div>
          </div>
        </div>
        <div>
          <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">✦ Colours to Avoid</span>
          <div class="avoid-grid">
            <div class="avoid-card"><div class="avoid-swatch" style="background:#000080;"></div><div class="avoid-info"><div class="avoid-name">Navy</div><div class="avoid-why">Too cool for your golden depth</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#E0E0E0;"></div><div class="avoid-info"><div class="avoid-name">Cool Silver/Grey</div><div class="avoid-why">Clashes with warm richness</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#FF69B4;"></div><div class="avoid-info"><div class="avoid-name">Cool Pink</div><div class="avoid-why">Fights with your warm undertone</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#4B0082;"></div><div class="avoid-info"><div class="avoid-name">Violet</div><div class="avoid-why">Too cool and artificial</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#F0F0F0;"></div><div class="avoid-info"><div class="avoid-name">Icy White</div><div class="avoid-why">Washes out your warmth</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#2F4F4F;"></div><div class="avoid-info"><div class="avoid-name">Dark Cool Green</div><div class="avoid-why">Too ashy and cool</div></div></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Outfit Inspiration (Women) -->
    <section class="season-section">
      <span class="lbl" style="color:#B85A38;">✦ Outfit Inspiration (Women)</span>
      <div class="h2" style="margin-bottom:36px;">Looks built for Warm Spring women</div>
      <div class="outfit-grid">
        <div class="outfit-card"><div class="outfit-top" style="background:linear-gradient(145deg,#D4A843,#C06030);">🌾</div><div class="outfit-body"><div class="outfit-occasion">Casual</div><div class="outfit-name">Golden Harvest</div><div class="outfit-items">Amber knit sweater · Warm tan trousers · Cognac leather boots · Gold pendant</div></div></div>
        <div class="outfit-card"><div class="outfit-top" style="background:linear-gradient(145deg,#E8855A,#C06030);">🍊</div><div class="outfit-body"><div class="outfit-occasion">Day</div><div class="outfit-name">Spiced Citrus</div><div class="outfit-items">Rust-orange wrap dress · Cognac sandals · Woven tote · Hammered gold earrings</div></div></div>
        <div class="outfit-card"><div class="outfit-top" style="background:linear-gradient(145deg,#8B7035,#A08030);">🌿</div><div class="outfit-body"><div class="outfit-occasion">Evening</div><div class="outfit-name">Warm Earth</div><div class="outfit-items">Olive-gold silk blouse · Dark camel trousers · Brown heels · Antique gold jewellery</div></div></div>
      </div>
    </section>
  </div>

  <!-- MEN CONTENT -->
  <div id="men-content" class="gender-content">
    <!-- Grooming & Skincare (Men) -->
    <section class="season-section">
      <span class="lbl" style="color:#B85A38;">✦ Grooming & Skincare (Men)</span>
      <div class="h2" style="margin-bottom:12px;">Grooming for the Warm Spring man</div>
      <p class="body-text" style="max-width:560px;margin-bottom:36px;">Warm, golden, and rich. Your grooming should enhance your natural depth and warmth — nothing cool or ashy.</p>
      <div class="makeup-row">
        <div class="makeup-item"><div class="makeup-swatch" style="background:#C8A060;"></div><div class="makeup-label">Warm Golden Moisturizer</div><div class="makeup-type">Skincare</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#D4B06A;"></div><div class="makeup-label">Warm Tan Concealer</div><div class="makeup-type">Concealer</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#E8C080;"></div><div class="makeup-label">Golden SPF</div><div class="makeup-type">Sunscreen</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#A07030;"></div><div class="makeup-label">Amber Beard Oil</div><div class="makeup-type">Facial hair care</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#C08040;"></div><div class="makeup-label">Honey Brown Pomade</div><div class="makeup-type">Hair Styling</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#9E7A50;"></div><div class="makeup-label">Warm Taupe Brow Gel</div><div class="makeup-type">Brows</div></div>
      </div>
      <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
        <div class="card"><div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skincare Focus</div><div class="body-text" style="font-size:14px;">Radiance and warmth. Use products that enhance your natural golden glow. Avoid anything that leaves a cool, ashy, or matte finish.</div></div>
        <div class="card"><div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Facial Hair</div><div class="body-text" style="font-size:14px;">Keep facial hair warm and rich. Use amber, honey, or warm brown beard oils. Avoid cool ashy tones or black beards that create harsh contrast. A well-groomed warm beard complements your depth.</div></div>
      </div>
    </section>

    <!-- Wardrobe Tips (Men) -->
    <section class="season-section-alt">
      <div class="two-col">
        <div>
          <span class="lbl" style="color:#B85A38;">✦ Wardrobe Tips (Men)</span>
          <div class="h2" style="margin-bottom:20px;">How to dress as a Warm Spring man</div>
          <div class="feature-row">
            <div class="feature-item"><div class="fi-num">01</div><div><div class="fi-title">Warm, golden neutrals</div><div class="fi-desc">Camel, tan, golden brown, and warm sand are your best suit and trouser colours. Avoid charcoal, navy, or cool grey.</div></div></div>
            <div class="feature-item"><div class="fi-num">02</div><div><div class="fi-title">Rich warm accents</div><div class="fi-desc">Amber, rust, warm olive, and golden yellow in shirts, ties, or polos add the right amount of spring-autumn depth.</div></div></div>
            <div class="feature-item"><div class="fi-num">03</div><div><div class="fi-title">Gold and cognac leather</div><div class="fi-desc">Gold watches, cognac leather shoes and belts, and wood accessories complement your warm depth perfectly.</div></div></div>
            <div class="feature-item"><div class="fi-num">04</div><div><div class="fi-title">Avoid cool and bright colours</div><div class="fi-desc">No black, navy, cool greys, or pure white. They will clash with your golden warmth.</div></div></div>
          </div>
        </div>
        <div>
          <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">✦ Colours to Avoid</span>
          <div class="avoid-grid">
            <div class="avoid-card"><div class="avoid-swatch" style="background:#000080;"></div><div class="avoid-info"><div class="avoid-name">Navy</div><div class="avoid-why">Too cool for your golden depth</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#E0E0E0;"></div><div class="avoid-info"><div class="avoid-name">Cool Silver/Grey</div><div class="avoid-why">Clashes with warm richness</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#FF69B4;"></div><div class="avoid-info"><div class="avoid-name">Cool Pink</div><div class="avoid-why">Fights with your warm undertone</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#4B0082;"></div><div class="avoid-info"><div class="avoid-name">Violet</div><div class="avoid-why">Too cool and artificial</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#F0F0F0;"></div><div class="avoid-info"><div class="avoid-name">Icy White</div><div class="avoid-why">Washes out your warmth</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#2F4F4F;"></div><div class="avoid-info"><div class="avoid-name">Dark Cool Green</div><div class="avoid-why">Too ashy and cool</div></div></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Outfit Inspiration (Men) -->
    <section class="season-section">
      <span class="lbl" style="color:#B85A38;">✦ Outfit Inspiration (Men)</span>
      <div class="h2" style="margin-bottom:36px;">Looks built for Warm Spring men</div>
      <div class="outfit-grid">
        <div class="outfit-card"><div class="outfit-top" style="background:linear-gradient(145deg,#D4A843,#C06030);">🌾</div><div class="outfit-body"><div class="outfit-occasion">Business</div><div class="outfit-name">Camel Suit</div><div class="outfit-items">Warm camel suit · Golden tie · Cream shirt · Tan oxfords · Gold watch</div></div></div>
        <div class="outfit-card"><div class="outfit-top" style="background:linear-gradient(145deg,#E8855A,#C06030);">🍊</div><div class="outfit-body"><div class="outfit-occasion">Smart Casual</div><div class="outfit-name">Rust & Khaki</div><div class="outfit-items">Rust-brown blazer · Cream polo · Warm khaki chinos · Cognac boots · Gold chain</div></div></div>
        <div class="outfit-card"><div class="outfit-top" style="background:linear-gradient(145deg,#8B7035,#A08030);">🌿</div><div class="outfit-body"><div class="outfit-occasion">Weekend</div><div class="outfit-name">Olive & Sand</div><div class="outfit-items">Warm olive field jacket · Cream henley · Tan trousers · Brown leather work boots</div></div></div>
      </div>
    </section>
  </div>

  <!-- GENDER-NEUTRAL CONTENT -->
  <div id="neutral-content" class="gender-content">
    <section class="season-section">
      <span class="lbl" style="color:#B85A38;">✦ Style for Everyone</span>
      <div class="h2" style="margin-bottom:12px;">Gender-neutral Warm Spring tips</div>
      <p class="body-text" style="max-width:560px;margin-bottom:36px;">Warm Spring is about deep golden warmth, rich earthiness, and radiant vitality. These principles work for any gender expression.</p>
      <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:20px;margin-bottom:32px;">
        <div class="card"><div style="font-size:24px;margin-bottom:8px;">🍂</div><div class="fi-title">Warm, earthy neutrals</div><div class="fi-desc" style="font-size:14px;">Camel, tan, golden brown, and warm sand are your foundation. Avoid cool greys and pure white.</div></div>
        <div class="card"><div style="font-size:24px;margin-bottom:8px;">🍊</div><div class="fi-title">Deep warm accents</div><div class="fi-desc" style="font-size:14px;">Amber, rust, warm olive, and golden yellow bring rich colour without overwhelming your warmth.</div></div>
        <div class="card"><div style="font-size:24px;margin-bottom:8px;">⚜️</div><div class="fi-title">Warm metals</div><div class="fi-desc" style="font-size:14px;">Gold, rose gold, brass, and copper. Avoid silver, platinum, or chrome.</div></div>
        <div class="card"><div style="font-size:24px;margin-bottom:8px;">🌿</div><div class="fi-title">Embrace richer tones</div><div class="fi-desc" style="font-size:14px;">You can wear deeper, richer warm colours than other springs — don't be afraid of amber, rust, and warm olive.</div></div>
      </div>
      <div class="outfit-grid" style="margin-bottom:20px;">
        <div class="outfit-card"><div class="outfit-top" style="background:linear-gradient(145deg,#D4A843,#C06030);">🌾</div><div class="outfit-body"><div class="outfit-occasion">Unisex Look</div><div class="outfit-name">Warm Earth</div><div class="outfit-items">Camel jacket · Cream base · Tan trousers · Gold accessories · Brown leather boots</div></div></div>
        <div class="outfit-card"><div class="outfit-top" style="background:linear-gradient(145deg,#E8855A,#C06030);">🍊</div><div class="outfit-body"><div class="outfit-occasion">Rich Accent</div><div class="outfit-name">Amber Layer</div><div class="outfit-items">Amber or rust sweater/hoodie · Warm sand jeans · Gold chain · Tan trainers</div></div></div>
      </div>
    </section>
  </div>

  <!-- CELEBRITIES (expanded with male examples) -->
  <section class="season-section-alt">
    <span class="lbl" style="color:#B85A38;">✦ Famous Warm Springs</span>
    <div class="h2" style="margin-bottom:36px;">You're in great company</div>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(180px,1fr));gap:24px;">
      <div class="celeb-card"><div class="celeb-avatar" style="background:#D4A843;">🌟</div><div class="celeb-name">Jessica Alba</div><div class="celeb-note">Warm golden depth (she/her)</div></div>
      <div class="celeb-card"><div class="celeb-avatar" style="background:#C8A060;">💃</div><div class="celeb-name">Jennifer Lopez</div><div class="celeb-note">Rich warm colouring (she/her)</div></div>
      <div class="celeb-card"><div class="celeb-avatar" style="background:#C06030;">🎵</div><div class="celeb-name">Beyoncé</div><div class="celeb-note">Deep warm spring (she/her)</div></div>
      <div class="celeb-card"><div class="celeb-avatar" style="background:#B8860B;">🏆</div><div class="celeb-name">Halle Berry</div><div class="celeb-note">Warm golden features (she/her)</div></div>
      <div class="celeb-card"><div class="celeb-avatar" style="background:#D4A843;">🎸</div><div class="celeb-name">Matthew McConaughey</div><div class="celeb-note">Warm golden depth (he/him)</div></div>
      <div class="celeb-card"><div class="celeb-avatar" style="background:#C8A060;">🎭</div><div class="celeb-name">Channing Tatum</div><div class="celeb-note">Rich warm colouring (he/him)</div></div>
    </div>
  </section>

  <!-- NAV BETWEEN SEASONS -->
  <div style="padding:40px 6%;display:flex;justify-content:space-between;align-items:center;border-top:1px solid #E8DDD6;gap:20px;flex-wrap:wrap;">
    <a class="btn btn-outline" style="color:#2C2420;border-color:#E8DDD6;" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
    <div style="display:flex;gap:8px;flex-wrap:wrap;">
      <a class="btn btn-outline" style="color:#B85A38;border-color:#B85A3844;font-size:13px;" href="{{ route('show.seasons.custom_pages', ['slug' => 'true-spring']) }}">True Spring →</a>
      <a class="btn btn-outline" style="color:#B85A38;border-color:#B85A3844;font-size:13px;" href="{{ route('show.seasons.custom_pages', ['slug' => 'soft-autumn']) }}">Soft Autumn →</a>
    </div>
  </div>

  <div class="footer-mini">
    <div class="fm-logo">Chroma<em>Fit</em></div>
    <div class="fm-links"><a href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">All Seasons</a></div>
  </div>
@endsection
