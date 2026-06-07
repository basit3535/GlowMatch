@extends('layouts.app')
@section('page_style')
    <x-season-style/>
@endsection
@section('content')
  <section class="season-page-hero" style="background:linear-gradient(145deg,#4A2810,#703818,#602818);color:#FFE8D0;">
    <div>
      <div class="sp-eyebrow">
        <div class="sp-line" style="background:#C06030;"></div>
        <span class="sp-season-type" style="color:#C06030;">🍂 Autumn · Warm · Dark</span>
      </div>
      <div class="sp-title" style="font-size:clamp(52px,7vw,88px);">Dark Autumn</div>
      <div class="sp-tagline" style="color:#FFE8D066;">"Dramatic, deep, and powerfully warm"</div>
      <p class="sp-desc" style="color:#FFE8D088;">Dark Autumn sits at the dramatic intersection of autumn and winter — the darkest autumn, with deep, rich, intensely warm colouring. Your natural depth commands attention.</p>
      <div class="sp-palette-preview">
        <div class="sp-swatch" style="background:#8B4A20;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#703820;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#4A2810;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#604028;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#5A3018;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#7A4828;border:2.5px solid rgba(255,255,255,.25);"></div>
      </div>
      <div style="display:flex;gap:12px;flex-wrap:wrap;">
        <a class="btn btn-white" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
        <a class="btn btn-outline" style="color:#FFE8D0;border-color:#FFE8D044;" href="{{ route('show.custom_pages', ['slug' => 'test']) }}">Find My Season</a>
      </div>
    </div>
    <div class="sp-hero-visual">
      <div class="sp-visual-main" style="background:linear-gradient(145deg,#8B4A20,#603010);">🔥</div>
      <div class="sp-visual-badges">
        <div class="sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">🌡️</div>
          <div><div class="sp-badge-title" style="color:#FFE8D0;">Warm Undertone</div><div class="sp-badge-sub" style="color:#FFE8D0;">Deep golden-warm</div></div>
        </div>
        <div class="sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">🌑</div>
          <div><div class="sp-badge-title" style="color:#FFE8D0;">Dark Value</div><div class="sp-badge-sub" style="color:#FFE8D0;">Deep, rich depth</div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- PALETTE (unisex) -->
  <section class="season-section">
    <span class="lbl" style="color:#C06030;">✦ Your Colour Palette</span>
    <div class="h2" style="margin-bottom:12px;">Best colours for Dark Autumn</div>
    <p class="body-text" style="max-width:560px;margin-bottom:36px;">The darkest, most dramatic warm palette. Deep burgundy, dark olive, rich brown, mahogany, and forest green define your season. Your colours are like autumn at dusk.</p>
    <div class="two-col">
      <div>
        <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">Power Shades</div>
        <div class="color-grid" style="margin-bottom:28px;">
          <div class="cswatch cswatch-lg" style="background:#8B4A20;" title="#8B4A20"></div>
          <div class="cswatch cswatch-lg" style="background:#703820;" title="#703820"></div>
          <div class="cswatch cswatch-lg" style="background:#4A2810;" title="#4A2810"></div>
          <div class="cswatch cswatch-lg" style="background:#604028;" title="#604028"></div>
          <div class="cswatch cswatch-lg" style="background:#5A3018;" title="#5A3018"></div>
          <div class="cswatch cswatch-lg" style="background:#7A4828;" title="#7A4828"></div>
          <div class="cswatch cswatch-lg" style="background:#6A3818;" title="#6A3818"></div>
          <div class="cswatch cswatch-lg" style="background:#503020;" title="#503020"></div>
        </div>
        <div class="swatch-strip" style="height:14px;border-radius:7px;margin-bottom:8px;">
          <span style="background:#8B4A20;"></span>
          <span style="background:#703820;"></span>
          <span style="background:#4A2810;"></span>
          <span style="background:#604028;"></span>
          <span style="background:#5A3018;"></span>
          <span style="background:#7A4828;"></span>
          <span style="background:#6A3818;"></span>
          <span style="background:#503020;"></span>
        </div>
        <div style="font-size:12px;color:#B0A49E;">Your complete spectrum — from light to dark</div>
      </div>
      <div>
        <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">Neutrals & Staples</div>
        <div class="color-grid" style="margin-bottom:20px;">
          <div class="cswatch" style="background:#6A4828;"></div>
          <div class="cswatch" style="background:#5A3818;"></div>
          <div class="cswatch" style="background:#4A2810;"></div>
          <div class="cswatch" style="background:#3A2010;"></div>
        </div>
        <p class="body-text" style="font-size:14px;">Deep cognac, dark warm brown, and rich espresso are your neutral anchors — intensely warm and deeply grounded.</p>
      </div>
    </div>
  </section>

  <!-- YOUR FEATURES (unisex) -->
  <section class="season-section-alt">
    <span class="lbl" style="color:#C06030;">✦ Typical Features</span>
    <div class="h2" style="margin-bottom:40px;">Do you look like a Dark Autumn?</div>
    <div class="three-col">
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">🧴</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skin</div>
        <div class="body-text" style="font-size:14px;">Medium to deep skin with a strong warm, golden or olive undertone. Often has a richly bronzed quality. Natural depth and warmth are both strong. The darkest autumn colouring.</div>
      </div>
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">👁️</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Eyes</div>
        <div class="body-text" style="font-size:14px;">Deep warm brown, dark hazel, dark olive, or amber-brown. Eyes are deeply coloured and warmly rich. A penetrating, intensely warm quality.</div>
      </div>
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">💇</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Hair</div>
        <div class="body-text" style="font-size:14px;">Dark auburn, very dark warm brown, dark chestnut, or warm black. Hair is deep and richly warm. May have auburn or chestnut highlights. The deepest autumn hair.</div>
      </div>
    </div>
    <div style="margin-top:32px;padding:24px;background:#C0603014;border:1px solid #C0603033;border-radius:16px;">
      <div style="font-size:15px;font-weight:600;color:#2C2420;margin-bottom:6px;">✦ The Dark Autumn glow effect</div>
      <div class="body-text" style="font-size:14px;">Dark Autumns in their colours look regal and powerfully beautiful — like autumn royalty. The deep, warm colours match their intense natural depth for a commanding, striking appearance.</div>
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
      <span class="lbl" style="color:#C06030;">✦ Makeup Guide (Women)</span>
      <div class="h2" style="margin-bottom:12px;">Your perfect makeup shades</div>
      <p class="body-text" style="max-width:560px;margin-bottom:36px;">Rich, deep, and intensely warm. Dark Autumn can wear the deepest warm makeup — dark burgundy lips, deep bronze eyes, and rich terracotta cheeks.</p>
      <div class="makeup-row">
        <div class="makeup-item">
          <div class="makeup-swatch" style="background:#A06040;"></div>
          <div class="makeup-label">Deep Warm Tan</div>
          <div class="makeup-type">Foundation</div>
        </div>
        <div class="makeup-item">
          <div class="makeup-swatch" style="background:#A04020;"></div>
          <div class="makeup-label">Deep Brick</div>
          <div class="makeup-type">Blush</div>
        </div>
        <div class="makeup-item">
          <div class="makeup-swatch" style="background:#802010;"></div>
          <div class="makeup-label">Dark Burgundy</div>
          <div class="makeup-type">Lips</div>
        </div>
        <div class="makeup-item">
          <div class="makeup-swatch" style="background:#604018;"></div>
          <div class="makeup-label">Deep Brown-Gold</div>
          <div class="makeup-type">Eyes</div>
        </div>
        <div class="makeup-item">
          <div class="makeup-swatch" style="background:#502810;"></div>
          <div class="makeup-label">Dark Brown</div>
          <div class="makeup-type">Eyes</div>
        </div>
        <div class="makeup-item">
          <div class="makeup-swatch" style="background:#804028;"></div>
          <div class="makeup-label">Rich Copper</div>
          <div class="makeup-type">Eyes</div>
        </div>
        <div class="makeup-item">
          <div class="makeup-swatch" style="background:#904030;"></div>
          <div class="makeup-label">Deep Terracotta</div>
          <div class="makeup-type">Blush</div>
        </div>
        <div class="makeup-item">
          <div class="makeup-swatch" style="background:#A07030;"></div>
          <div class="makeup-label">Deep Bronze</div>
          <div class="makeup-type">Highlighter</div>
        </div>
      </div>
      <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
        <div class="card">
          <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Foundation Undertone</div>
          <div class="body-text" style="font-size:14px;">The deepest, warmest foundations in the autumn range. Look for "deep warm golden" or "warm espresso" shades. Nothing cool or ashy.</div>
        </div>
        <div class="card">
          <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Key Makeup Rule</div>
          <div class="body-text" style="font-size:14px;">Deep, warm, and intensely rich. Dark burgundy lips, deep bronze eyes, and rich terracotta blush is the signature Dark Autumn look. You can wear the richest autumn shades.</div>
        </div>
      </div>
    </section>

    <!-- Wardrobe Tips (Women) -->
    <section class="season-section-alt">
      <div class="two-col">
        <div>
          <span class="lbl" style="color:#C06030;">✦ Wardrobe Tips (Women)</span>
          <div class="h2" style="margin-bottom:20px;">How to dress as a Dark Autumn woman</div>
          <div class="feature-row">
            <div class="feature-item"><div class="fi-num">01</div><div><div class="fi-title">Embrace your deep warm neutrals</div><div class="fi-desc">Dark brown, espresso, cognac, and deep camel are your neutral foundation. Build every outfit around these rich, deep warm tones.</div></div></div>
            <div class="feature-item"><div class="fi-num">02</div><div><div class="fi-title">Dark olive is your signature green</div><div class="fi-desc">Deep, forest-y olive in your warmest, darkest shades is distinctly yours. It harmonises with your deep, warm features.</div></div></div>
            <div class="feature-item"><div class="fi-num">03</div><div><div class="fi-title">Deep burgundy and wine</div><div class="fi-desc">Unlike other autumns, you can wear deep burgundy and warm wine shades — they match your natural depth and warmth.</div></div></div>
            <div class="feature-item"><div class="fi-num">04</div><div><div class="fi-title">Keep it warm and deep always</div><div class="fi-desc">If a colour looks too bright or too cool, it's wrong for you. Your palette is always dark, warm, and slightly muted.</div></div></div>
          </div>
        </div>
        <div>
          <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">✦ Colours to Avoid</span>
          <div class="avoid-grid">
            <div class="avoid-card"><div class="avoid-swatch" style="background:#FF69B4;"></div><div class="avoid-info"><div class="avoid-name">Cool Pink</div><div class="avoid-why">Too cool and light</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#87CEEB;"></div><div class="avoid-info"><div class="avoid-name">Light Blue</div><div class="avoid-why">Too light and cool</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#C0C0C0;"></div><div class="avoid-info"><div class="avoid-name">Silver</div><div class="avoid-why">Too cool for your depth</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#FFFFFF;"></div><div class="avoid-info"><div class="avoid-name">White</div><div class="avoid-why">Too harsh a contrast</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#FFD700;"></div><div class="avoid-info"><div class="avoid-name">Bright Yellow</div><div class="avoid-why">Too light and bright</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#000080;"></div><div class="avoid-info"><div class="avoid-name">Navy</div><div class="avoid-why">Too cool for warm depth</div></div></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Outfit Inspiration (Women) -->
    <section class="season-section">
      <span class="lbl" style="color:#C06030;">✦ Outfit Inspiration (Women)</span>
      <div class="h2" style="margin-bottom:36px;">Looks built for Dark Autumn women</div>
      <div class="outfit-grid">
        <div class="outfit-card"><div class="outfit-top" style="background:linear-gradient(145deg,#8B4A20,#603010);">🌑</div><div class="outfit-body"><div class="outfit-occasion">Casual</div><div class="outfit-name">Dark Earth</div><div class="outfit-items">Deep burgundy knit · Dark olive corduroy trousers · Brown leather boots · Antique copper jewellery</div></div></div>
        <div class="outfit-card"><div class="outfit-top" style="background:linear-gradient(145deg,#4A2810,#703818);">🔥</div><div class="outfit-body"><div class="outfit-occasion">Evening</div><div class="outfit-name">Ember Night</div><div class="outfit-items">Deep wine silk dress · Dark cognac heeled boots · Bronze clutch · Warm amber jewellery</div></div></div>
        <div class="outfit-card"><div class="outfit-top" style="background:linear-gradient(145deg,#603020,#502010);">🍁</div><div class="outfit-body"><div class="outfit-occasion">Day</div><div class="outfit-name">Mahogany Day</div><div class="outfit-items">Rich brown structured blazer · Dark olive trousers · Cognac loafers · Gold chain</div></div></div>
      </div>
    </section>
  </div>

  <!-- MEN CONTENT -->
  <div id="men-content" class="gender-content">
    <!-- Grooming & Skincare (Men) -->
    <section class="season-section">
      <span class="lbl" style="color:#C06030;">✦ Grooming & Skincare (Men)</span>
      <div class="h2" style="margin-bottom:12px;">Grooming for the Dark Autumn man</div>
      <p class="body-text" style="max-width:560px;margin-bottom:36px;">Rich, warm, and deep. Your grooming should enhance your natural warmth and depth. Avoid anything ashy or cool-toned.</p>
      <div class="makeup-row">
        <div class="makeup-item"><div class="makeup-swatch" style="background:#C09060;"></div><div class="makeup-label">Warm Golden Moisturizer</div><div class="makeup-type">Skincare</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#A07040;"></div><div class="makeup-label">Warm Tan Concealer</div><div class="makeup-type">Concealer (if needed)</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#D0A070;"></div><div class="makeup-label">Bronze SPF</div><div class="makeup-type">Primer / Sunscreen</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#A06030;"></div><div class="makeup-label">Warm Sandalwood</div><div class="makeup-type">Beard Oil / Balm</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#8B4A20;"></div><div class="makeup-label">Deep Brown Pomade</div><div class="makeup-type">Hair Styling</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#6A3818;"></div><div class="makeup-label">Rich Amber Accent</div><div class="makeup-type">Subtle brow gel</div></div>
      </div>
      <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
        <div class="card"><div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skincare Focus</div><div class="body-text" style="font-size:14px;">Enhance natural warmth. Use vitamin C and gentle exfoliation to keep skin glowing. Avoid cool-toned or ashy sunscreens — opt for warm, golden-tinted formulas.</div></div>
        <div class="card"><div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Facial Hair</div><div class="body-text" style="font-size:14px;">Keep facial hair warm and rich. Use a warm brown or amber beard oil. Avoid reddish or cool grey tones. A well-groomed warm beard complements your depth.</div></div>
      </div>
    </section>

    <!-- Wardrobe Tips (Men) -->
    <section class="season-section-alt">
      <div class="two-col">
        <div>
          <span class="lbl" style="color:#C06030;">✦ Wardrobe Tips (Men)</span>
          <div class="h2" style="margin-bottom:20px;">How to dress as a Dark Autumn man</div>
          <div class="feature-row">
            <div class="feature-item"><div class="fi-num">01</div><div><div class="fi-title">Deep warm neutrals</div><div class="fi-desc">Espresso brown, cognac, dark olive, and warm charcoal are your best suit and trouser colours. Build your wardrobe from these.</div></div></div>
            <div class="feature-item"><div class="fi-num">02</div><div><div class="fi-title">Rich accent colours</div><div class="fi-desc">Deep burgundy, warm wine, or dark forest green in ties, pocket squares, or sweaters add drama without losing warmth.</div></div></div>
            <div class="feature-item"><div class="fi-num">03</div><div><div class="fi-title">Leather and metal</div><div class="fi-desc">Warm brown leather (shoes, belts, bags) and antique gold or bronze hardware. Avoid silver or black leather.</div></div></div>
            <div class="feature-item"><div class="fi-num">04</div><div><div class="fi-title">Avoid cool and light colours</div><div class="fi-desc">No icy blues, stark white, cool greys, or pastels. They will wash you out and clash with your warmth.</div></div></div>
          </div>
        </div>
        <div>
          <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">✦ Colours to Avoid</span>
          <div class="avoid-grid">
            <div class="avoid-card"><div class="avoid-swatch" style="background:#FF69B4;"></div><div class="avoid-info"><div class="avoid-name">Cool Pink</div><div class="avoid-why">Too cool and light</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#87CEEB;"></div><div class="avoid-info"><div class="avoid-name">Light Blue</div><div class="avoid-why">Too light and cool</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#C0C0C0;"></div><div class="avoid-info"><div class="avoid-name">Silver</div><div class="avoid-why">Too cool for your depth</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#FFFFFF;"></div><div class="avoid-info"><div class="avoid-name">White</div><div class="avoid-why">Too harsh a contrast</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#FFD700;"></div><div class="avoid-info"><div class="avoid-name">Bright Yellow</div><div class="avoid-why">Too light and bright</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#000080;"></div><div class="avoid-info"><div class="avoid-name">Navy</div><div class="avoid-why">Too cool for warm depth</div></div></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Outfit Inspiration (Men) -->
    <section class="season-section">
      <span class="lbl" style="color:#C06030;">✦ Outfit Inspiration (Men)</span>
      <div class="h2" style="margin-bottom:36px;">Looks built for Dark Autumn men</div>
      <div class="outfit-grid">
        <div class="outfit-card"><div class="outfit-top" style="background:linear-gradient(145deg,#8B4A20,#603010);">🌑</div><div class="outfit-body"><div class="outfit-occasion">Business</div><div class="outfit-name">Espresso Suit</div><div class="outfit-items">Dark brown suit · Deep burgundy tie · Cognac leather shoes · Bronze cufflinks</div></div></div>
        <div class="outfit-card"><div class="outfit-top" style="background:linear-gradient(145deg,#4A2810,#703818);">🔥</div><div class="outfit-body"><div class="outfit-occasion">Smart Casual</div><div class="outfit-name">Dark Olive & Wine</div><div class="outfit-items">Dark olive chinos · Deep wine sweater · Brown leather boots · Gold watch</div></div></div>
        <div class="outfit-card"><div class="outfit-top" style="background:linear-gradient(145deg,#603020,#502010);">🍁</div><div class="outfit-body"><div class="outfit-occasion">Weekend</div><div class="outfit-name">Warm Earth</div><div class="outfit-items">Cognac corduroy jacket · Warm cream henley · Brown jeans · Leather sneakers</div></div></div>
      </div>
    </section>
  </div>

  <!-- GENDER-NEUTRAL CONTENT -->
  <div id="neutral-content" class="gender-content">
    <section class="season-section">
      <span class="lbl" style="color:#C06030;">✦ Style for Everyone</span>
      <div class="h2" style="margin-bottom:12px;">Gender-neutral Dark Autumn tips</div>
      <p class="body-text" style="max-width:560px;margin-bottom:36px;">Dark Autumn is about depth, warmth, and rich intensity. These principles work for any gender expression.</p>
      <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:20px;margin-bottom:32px;">
        <div class="card"><div style="font-size:24px;margin-bottom:8px;">🌑</div><div class="fi-title">Embrace deep neutrals</div><div class="fi-desc" style="font-size:14px;">Espresso, cognac, dark olive, and warm charcoal are your foundation. They ground every outfit.</div></div>
        <div class="card"><div style="font-size:24px;margin-bottom:8px;">🔥</div><div class="fi-title">Rich warm accents</div><div class="fi-desc" style="font-size:14px;">Deep burgundy, warm wine, forest green, and burnt orange add drama without losing warmth.</div></div>
        <div class="card"><div style="font-size:24px;margin-bottom:8px;">⚜️</div><div class="fi-title">Metallic finishes</div><div class="fi-desc" style="font-size:14px;">Antique gold, bronze, and copper jewellery or accessories. Avoid silver or white gold.</div></div>
        <div class="card"><div style="font-size:24px;margin-bottom:8px;">🍂</div><div class="fi-title">Texture matters</div><div class="fi-desc" style="font-size:14px;">Corduroy, velvet, wool, and leather in deep warm colours enhance your rich palette.</div></div>
      </div>
      <div class="outfit-grid" style="margin-bottom:20px;">
        <div class="outfit-card"><div class="outfit-top" style="background:linear-gradient(145deg,#8B4A20,#603010);">🌑</div><div class="outfit-body"><div class="outfit-occasion">Unisex Look</div><div class="outfit-name">Deep Warmth</div><div class="outfit-items">Dark olive oversized sweater · Brown wide-leg trousers · Cream sneakers or boots · Bronze pendant</div></div></div>
        <div class="outfit-card"><div class="outfit-top" style="background:linear-gradient(145deg,#4A2810,#703818);">🔥</div><div class="outfit-body"><div class="outfit-occasion">Statement Layer</div><div class="outfit-name">Burgundy Drama</div><div class="outfit-items">Deep burgundy jacket or cardigan over neutral base · Cognac accessories · Gold accents</div></div></div>
      </div>
    </section>
  </div>

  <!-- CELEBRITIES (expanded with male and non-binary examples) -->
  <section class="season-section-alt">
    <span class="lbl" style="color:#C06030;">✦ Famous Dark Autumns</span>
    <div class="h2" style="margin-bottom:36px;">You're in great company</div>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(180px,1fr));gap:24px;">
      <div class="celeb-card"><div class="celeb-avatar" style="background:#8B4A20;">🌟</div><div class="celeb-name">Nigella Lawson</div><div class="celeb-note">Deep warm autumn depth (she/her)</div></div>
      <div class="celeb-card"><div class="celeb-avatar" style="background:#703820;">💫</div><div class="celeb-name">Monica Bellucci</div><div class="celeb-note">Dramatic dark warmth (she/her)</div></div>
      <div class="celeb-card"><div class="celeb-avatar" style="background:#604028;">🎬</div><div class="celeb-name">Demi Moore</div><div class="celeb-note">Deep warm features (she/her)</div></div>
      <div class="celeb-card"><div class="celeb-avatar" style="background:#5A3018;">✨</div><div class="celeb-name">Kim Kardashian</div><div class="celeb-note">Rich dark autumn (she/her)</div></div>
      <div class="celeb-card"><div class="celeb-avatar" style="background:#8B4A20;">🎸</div><div class="celeb-name">Idris Elba</div><div class="celeb-note">Deep warm magnetism (he/him)</div></div>
      <div class="celeb-card"><div class="celeb-avatar" style="background:#703820;">🎭</div><div class="celeb-name">Jeffrey Dean Morgan</div><div class="celeb-note">Rich autumn depth (he/him)</div></div>
      <div class="celeb-card"><div class="celeb-avatar" style="background:#604028;">🌿</div><div class="celeb-name">Riz Ahmed</div><div class="celeb-note">Deep olive warmth (he/him)</div></div>
    </div>
  </section>

  <!-- NAV BETWEEN SEASONS -->
  <div style="padding:40px 6%;display:flex;justify-content:space-between;align-items:center;border-top:1px solid #E8DDD6;gap:20px;flex-wrap:wrap;">
    <a class="btn btn-outline" style="color:#2C2420;border-color:#E8DDD6;" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
    <div style="display:flex;gap:8px;flex-wrap:wrap;">
      <a class="btn btn-outline" style="color:#C06030;border-color:#C0603044;font-size:13px;" href="{{ route('show.seasons.custom_pages', ['slug' => 'true-autumn']) }}">True Autumn →</a>
      <a class="btn btn-outline" style="color:#C06030;border-color:#C0603044;font-size:13px;" href="{{ route('show.seasons.custom_pages', ['slug' => 'dark-winter']) }}">Dark Winter →</a>
    </div>
  </div>

  <div class="footer-mini">
    <div class="fm-logo">Chroma<em>Fit</em></div>
    <div class="fm-links"><a href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">All Seasons</a></div>
  </div>
@endsection
