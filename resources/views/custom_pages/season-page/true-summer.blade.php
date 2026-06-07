@extends('layouts.app')
@section('page_style')
    <x-season-style/>
 
@endsection
@section('content')
  <section class="season-page-hero" style="background:linear-gradient(145deg,#B8C8E0,#9AAAC8,#7A8AAC);color:#F8F4FF;">
    <div>
      <div class="sp-eyebrow">
        <div class="sp-line" style="background:#6880A8;"></div>
        <span class="sp-season-type" style="color:#6880A8;">☁️ Summer · Cool · Muted</span>
      </div>
      <div class="sp-title" style="font-size:clamp(52px,7vw,88px);">True Summer</div>
      <div class="sp-tagline" style="color:#F8F4FF66;">"Quietly elegant, coolly romantic, softly beautiful"</div>
      <p class="sp-desc" style="color:#F8F4FF888;">True Summer is the quintessential summer — cool, muted, and with a quietly breathtaking romantic quality. Your colouring has a natural softness that makes dusty rose and lavender your destiny.</p>
      <div class="sp-palette-preview">
        <div class="sp-swatch" style="background:#C8A2C8;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#8FA8C8;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#C9A0DC;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#B0C4DE;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#D8BFD8;border:2.5px solid rgba(255,255,255,.25);"></div>
        <div class="sp-swatch" style="background:#88A4BC;border:2.5px solid rgba(255,255,255,.25);"></div>
      </div>
      <div style="display:flex;gap:12px;flex-wrap:wrap;">
        <a class="btn btn-white" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
        <a class="btn btn-outline" style="color:#F8F4FF;border-color:#F8F4FF44;" href="{{ route('show.custom_pages', ['slug' => 'test']) }}">Find My Season</a>
      </div>
    </div>
    <div class="sp-hero-visual">
      <div class="sp-visual-main" style="background:linear-gradient(145deg,#B0C0D8,#9090B8);">🌺</div>
      <div class="sp-visual-badges">
        <div class="sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">❄️</div>
          <div><div class="sp-badge-title" style="color:#F8F4FF;">Cool Undertone</div><div class="sp-badge-sub" style="color:#F8F4FF;">Rosy, bluish cool</div></div>
        </div>
        <div class="sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">🎨</div>
          <div><div class="sp-badge-title" style="color:#F8F4FF;">Muted Quality</div><div class="sp-badge-sub" style="color:#F8F4FF;">Soft, blended</div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- PALETTE (unisex) -->
  <section class="season-section">
    <span class="lbl" style="color:#6880A8;">✦ Your Colour Palette</span>
    <div class="h2" style="margin-bottom:12px;">Best colours for True Summer</div>
    <p class="body-text" style="max-width:560px;margin-bottom:36px;">Your palette is cool and muted — like colours seen through the softest filter. Dusty rose, lavender, powder blue, mauve, and soft sage define your season.</p>
    <div class="two-col">
      <div>
        <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">Power Shades</div>
        <div class="color-grid" style="margin-bottom:28px;">
          <div class="cswatch cswatch-lg" style="background:#C8A2C8;" title="#C8A2C8"></div>
          <div class="cswatch cswatch-lg" style="background:#8FA8C8;" title="#8FA8C8"></div>
          <div class="cswatch cswatch-lg" style="background:#C9A0DC;" title="#C9A0DC"></div>
          <div class="cswatch cswatch-lg" style="background:#B0C4DE;" title="#B0C4DE"></div>
          <div class="cswatch cswatch-lg" style="background:#D8BFD8;" title="#D8BFD8"></div>
          <div class="cswatch cswatch-lg" style="background:#88A4BC;" title="#88A4BC"></div>
          <div class="cswatch cswatch-lg" style="background:#A0B8B0;" title="#A0B8B0"></div>
          <div class="cswatch cswatch-lg" style="background:#BCA8C8;" title="#BCA8C8"></div>
        </div>
        <div class="swatch-strip" style="height:14px;border-radius:7px;margin-bottom:8px;">
          <span style="background:#C8A2C8;"></span>
          <span style="background:#8FA8C8;"></span>
          <span style="background:#C9A0DC;"></span>
          <span style="background:#B0C4DE;"></span>
          <span style="background:#D8BFD8;"></span>
          <span style="background:#88A4BC;"></span>
          <span style="background:#A0B8B0;"></span>
          <span style="background:#BCA8C8;"></span>
        </div>
        <div style="font-size:12px;color:#B0A49E;">Your complete spectrum — from light to dark</div>
      </div>
      <div>
        <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">Neutrals & Staples</div>
        <div class="color-grid" style="margin-bottom:20px;">
          <div class="cswatch" style="background:#E8E4F0;"></div>
          <div class="cswatch" style="background:#D0CCE0;"></div>
          <div class="cswatch" style="background:#B8B4CC;"></div>
          <div class="cswatch" style="background:#A0A0B8;"></div>
        </div>
        <p class="body-text" style="font-size:14px;">Soft grey-lavender, cool greige, and dusty mauve are your perfect neutrals — always subtly cool.</p>
      </div>
    </div>
  </section>

  <!-- YOUR FEATURES (unisex) -->
  <section class="season-section-alt">
    <span class="lbl" style="color:#6880A8;">✦ Typical Features</span>
    <div class="h2" style="margin-bottom:40px;">Do you look like a True Summer?</div>
    <div class="three-col">
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">🧴</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skin</div>
        <div class="body-text" style="font-size:14px;">Fair to medium skin with a pink or rosy cool undertone. Often has a porcelain or rose-touched quality. May have faint rose or pink flush naturally. Burns in sun.</div>
      </div>
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">👁️</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Eyes</div>
        <div class="body-text" style="font-size:14px;">Grey-blue, grey-green, soft hazel, or pale violet-grey. Eyes often appear soft and slightly greyed — never vivid. A romantic, quiet quality to the gaze.</div>
      </div>
      <div class="card">
        <div style="font-size:32px;margin-bottom:14px;">💇</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Hair</div>
        <div class="body-text" style="font-size:14px;">Ash blonde, mousy brown, cool dark brown, or ashy chestnut. Always distinctly cool and ashy — never golden or warm. Hair may appear to have blue or cool highlights.</div>
      </div>
    </div>
    <div style="margin-top:32px;padding:24px;background:#6880A814;border:1px solid #6880A833;border-radius:16px;">
      <div style="font-size:15px;font-weight:600;color:#2C2420;margin-bottom:6px;">✦ The True Summer glow effect</div>
      <div class="body-text" style="font-size:14px;">True Summers in their colours emanate a romantic, softly beautiful quality — like a Pre-Raphaelite painting come to life. The muted cool colours create harmony with their naturally soft features.</div>
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
      <span class="lbl" style="color:#6880A8;">✦ Makeup Guide (Women)</span>
      <div class="h2" style="margin-bottom:12px;">Your perfect makeup shades</div>
      <p class="body-text" style="max-width:560px;margin-bottom:36px;">Keep makeup cool, muted, and softly blended. Your keyword is "dusty" — everything should have a slightly softened, powdery quality.</p>
      <div class="makeup-row">
        <div class="makeup-item"><div class="makeup-swatch" style="background:#F0E4EC;"></div><div class="makeup-label">Cool Rose Ivory</div><div class="makeup-type">Foundation</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#D8A8BC;"></div><div class="makeup-label">Dusty Rose</div><div class="makeup-type">Blush</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#C090A8;"></div><div class="makeup-label">Muted Berry</div><div class="makeup-type">Lips</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#A09AB8;"></div><div class="makeup-label">Dusty Lavender</div><div class="makeup-type">Eyes</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#8888A8;"></div><div class="makeup-label">Soft Mauve</div><div class="makeup-type">Eyes</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#B8A8CC;"></div><div class="makeup-label">Blush Lilac</div><div class="makeup-type">Eyes</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#D0B0C0;"></div><div class="makeup-label">Cool Petal</div><div class="makeup-type">Blush</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#E0D8F0;"></div><div class="makeup-label">Lavender Shimmer</div><div class="makeup-type">Highlighter</div></div>
      </div>
      <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
        <div class="card"><div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Foundation Undertone</div><div class="body-text" style="font-size:14px;">Cool, rosy-pink undertone foundations. Look for shades described as "rose beige" or "cool beige." Avoid anything with yellow or peach undertones.</div></div>
        <div class="card"><div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Key Makeup Rule</div><div class="body-text" style="font-size:14px;">The word is "dusty." Dusty rose, dusty lavender, dusty mauve. Bright or clear colours look too artificial on you — the softened, muted version is always better.</div></div>
      </div>
    </section>

    <!-- Wardrobe Tips (Women) -->
    <section class="season-section-alt">
      <div class="two-col">
        <div>
          <span class="lbl" style="color:#6880A8;">✦ Wardrobe Tips (Women)</span>
          <div class="h2" style="margin-bottom:20px;">How to dress as a True Summer woman</div>
          <div class="feature-row">
            <div class="feature-item"><div class="fi-num">01</div><div><div class="fi-title">Dusty rose is your superpower</div><div class="fi-desc">No season wears dusty rose like True Summer. It blends with your colouring so beautifully it looks as if it were invented for you.</div></div></div>
            <div class="feature-item"><div class="fi-num">02</div><div><div class="fi-title">Build a muted cool wardrobe</div><div class="fi-desc">Invest in lavender, dusty blue, soft sage, cool mauve, and powder grey as your wardrobe staples — these all harmonise effortlessly.</div></div></div>
            <div class="feature-item"><div class="fi-num">03</div><div><div class="fi-title">Silver over gold always</div><div class="fi-desc">Silver, white gold, and platinum jewellery enhances your cool undertone. Gold can fight with your natural colouring.</div></div></div>
            <div class="feature-item"><div class="fi-num">04</div><div><div class="fi-title">Avoid bright or warm colours</div><div class="fi-desc">Bright, saturated colours look artificial against your soft, muted natural colouring. The dustier the shade, the better.</div></div></div>
          </div>
        </div>
        <div>
          <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">✦ Colours to Avoid</span>
          <div class="avoid-grid">
            <div class="avoid-card"><div class="avoid-swatch" style="background:#FF6600;"></div><div class="avoid-info"><div class="avoid-name">Orange</div><div class="avoid-why">Warm and clashing</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#FFD700;"></div><div class="avoid-info"><div class="avoid-name">Bright Yellow</div><div class="avoid-why">Too warm and sharp</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#FF4500;"></div><div class="avoid-info"><div class="avoid-name">Red-Orange</div><div class="avoid-why">Too warm and bright</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#8B4513;"></div><div class="avoid-info"><div class="avoid-name">Warm Brown</div><div class="avoid-why">Warm tones clash</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#006400;"></div><div class="avoid-info"><div class="avoid-name">Forest Green</div><div class="avoid-why">Too warm and heavy</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#FF1493;"></div><div class="avoid-info"><div class="avoid-name">Hot Pink</div><div class="avoid-why">Too bright and warm</div></div></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Outfit Inspiration (Women) -->
    <section class="season-section">
      <span class="lbl" style="color:#6880A8;">✦ Outfit Inspiration (Women)</span>
      <div class="h2" style="margin-bottom:36px;">Looks built for True Summer women</div>
      <div class="outfit-grid">
        <div class="outfit-card"><div class="outfit-top" style="background:linear-gradient(145deg,#D8BFD8,#C8A2C8);">🌸</div><div class="outfit-body"><div class="outfit-occasion">Day</div><div class="outfit-name">Dusty Romance</div><div class="outfit-items">Dusty rose silk blouse · Soft grey tailored trousers · Nude pointed flats · Silver earrings</div></div></div>
        <div class="outfit-card"><div class="outfit-top" style="background:linear-gradient(145deg,#B0C4DE,#8FA8C8);">🕊️</div><div class="outfit-body"><div class="outfit-occasion">Casual</div><div class="outfit-name">Powder Sky</div><div class="outfit-items">Powder blue linen shirt · Pale grey straight jeans · White trainers · Silver pendant</div></div></div>
        <div class="outfit-card"><div class="outfit-top" style="background:linear-gradient(145deg,#C9A0DC,#B090C8);">💜</div><div class="outfit-body"><div class="outfit-occasion">Evening</div><div class="outfit-name">Lavender Dusk</div><div class="outfit-items">Soft lavender midi dress · Strappy silver heels · Silver clutch · Amethyst drop earrings</div></div></div>
      </div>
    </section>
  </div>

  <!-- MEN CONTENT -->
  <div id="men-content" class="gender-content">
    <!-- Grooming & Skincare (Men) -->
    <section class="season-section">
      <span class="lbl" style="color:#6880A8;">✦ Grooming & Skincare (Men)</span>
      <div class="h2" style="margin-bottom:12px;">Grooming for the True Summer man</div>
      <p class="body-text" style="max-width:560px;margin-bottom:36px;">Cool, soft, and understated. Your grooming should enhance your natural coolness and muted features without adding warmth or harshness.</p>
      <div class="makeup-row">
        <div class="makeup-item"><div class="makeup-swatch" style="background:#E8E0EC;"></div><div class="makeup-label">Cool Rose Moisturizer</div><div class="makeup-type">Skincare</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#D0C4D8;"></div><div class="makeup-label">Neutral Beige Concealer</div><div class="makeup-type">Concealer</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#D8D4E0;"></div><div class="makeup-label">Cool SPF</div><div class="makeup-type">Sunscreen</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#A090A0;"></div><div class="makeup-label">Ash Brown Beard Oil</div><div class="makeup-type">Facial hair care</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#B0A0B8;"></div><div class="makeup-label">Cool Taupe Pomade</div><div class="makeup-type">Hair Styling</div></div>
        <div class="makeup-item"><div class="makeup-swatch" style="background:#9890A0;"></div><div class="makeup-label">Muted Ash Brow Gel</div><div class="makeup-type">Brows</div></div>
      </div>
      <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
        <div class="card"><div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skincare Focus</div><div class="body-text" style="font-size:14px;">Evenness and gentle hydration. Use soothing, neutral-cool products. Avoid self-tanners or anything that adds warmth. A porcelain, calm finish suits you best.</div></div>
        <div class="card"><div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Facial Hair</div><div class="body-text" style="font-size:14px;">Keep facial hair neat and cool-toned. Use ash brown or cool taupe beard oils. Avoid any warm, red, or golden tones. A clean-shaven or very light stubble look works best.</div></div>
      </div>
    </section>

    <!-- Wardrobe Tips (Men) -->
    <section class="season-section-alt">
      <div class="two-col">
        <div>
          <span class="lbl" style="color:#6880A8;">✦ Wardrobe Tips (Men)</span>
          <div class="h2" style="margin-bottom:20px;">How to dress as a True Summer man</div>
          <div class="feature-row">
            <div class="feature-item"><div class="fi-num">01</div><div><div class="fi-title">Cool muted neutrals</div><div class="fi-desc">Soft grey, cool navy (not bright), dusty blue, and grey-lavender are your best suit and trouser colours. Avoid warm camel or dark brown.</div></div></div>
            <div class="feature-item"><div class="fi-num">02</div><div><div class="fi-title">Dusty, romantic accents</div><div class="fi-desc">Dusty rose, soft lavender, and muted sage in shirts, ties, or pocket squares add the right amount of summer softness.</div></div></div>
            <div class="feature-item"><div class="fi-num">03</div><div><div class="fi-title">Silver and cool leather</div><div class="fi-desc">Silver watches, grey or black leather shoes and belts, and brushed metal accessories. Avoid yellow gold and warm brown leather.</div></div></div>
            <div class="feature-item"><div class="fi-num">04</div><div><div class="fi-title">Avoid warm and bright colours</div><div class="fi-desc">No orange, yellow, bright red, camel, or warm brown. These will clash dramatically with your cool, muted colouring.</div></div></div>
          </div>
        </div>
        <div>
          <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">✦ Colours to Avoid</span>
          <div class="avoid-grid">
            <div class="avoid-card"><div class="avoid-swatch" style="background:#FF6600;"></div><div class="avoid-info"><div class="avoid-name">Orange</div><div class="avoid-why">Warm and clashing</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#FFD700;"></div><div class="avoid-info"><div class="avoid-name">Bright Yellow</div><div class="avoid-why">Too warm and sharp</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#FF4500;"></div><div class="avoid-info"><div class="avoid-name">Red-Orange</div><div class="avoid-why">Too warm and bright</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#8B4513;"></div><div class="avoid-info"><div class="avoid-name">Warm Brown</div><div class="avoid-why">Warm tones clash</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#006400;"></div><div class="avoid-info"><div class="avoid-name">Forest Green</div><div class="avoid-why">Too warm and heavy</div></div></div>
            <div class="avoid-card"><div class="avoid-swatch" style="background:#FF1493;"></div><div class="avoid-info"><div class="avoid-name">Hot Pink</div><div class="avoid-why">Too bright and warm</div></div></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Outfit Inspiration (Men) -->
    <section class="season-section">
      <span class="lbl" style="color:#6880A8;">✦ Outfit Inspiration (Men)</span>
      <div class="h2" style="margin-bottom:36px;">Looks built for True Summer men</div>
      <div class="outfit-grid">
        <div class="outfit-card"><div class="outfit-top" style="background:linear-gradient(145deg,#B0C0D8,#9090B8);">🌺</div><div class="outfit-body"><div class="outfit-occasion">Business</div><div class="outfit-name">Soft Grey Suit</div><div class="outfit-items">Light grey suit · Dusty blue shirt · Muted lavender tie · Silver cufflinks · Grey leather oxfords</div></div></div>
        <div class="outfit-card"><div class="outfit-top" style="background:linear-gradient(145deg,#B0C4DE,#8FA8C8);">🕊️</div><div class="outfit-body"><div class="outfit-occasion">Smart Casual</div><div class="outfit-name">Dusty Blue</div><div class="outfit-items">Dusty blue polo · Cool grey chinos · White trainers · Silver watch</div></div></div>
        <div class="outfit-card"><div class="outfit-top" style="background:linear-gradient(145deg,#C9A0DC,#B090C8);">💜</div><div class="outfit-body"><div class="outfit-occasion">Weekend</div><div class="outfit-name">Soft Lavender</div><div class="outfit-items">Soft lavender sweater · Pale grey jeans · White canvas sneakers · Silver bracelet</div></div></div>
      </div>
    </section>
  </div>

  <!-- GENDER-NEUTRAL CONTENT -->
  <div id="neutral-content" class="gender-content">
    <section class="season-section">
      <span class="lbl" style="color:#6880A8;">✦ Style for Everyone</span>
      <div class="h2" style="margin-bottom:12px;">Gender-neutral True Summer tips</div>
      <p class="body-text" style="max-width:560px;margin-bottom:36px;">True Summer is about cool muting, gentle softness, and romantic elegance. These principles work for any gender expression.</p>
      <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:20px;margin-bottom:32px;">
        <div class="card"><div style="font-size:24px;margin-bottom:8px;">🌸</div><div class="fi-title">Dusty, muted neutrals</div><div class="fi-desc" style="font-size:14px;">Soft grey, lavender-grey, and cool taupe are your foundation. Avoid warm beige or camel.</div></div>
        <div class="card"><div style="font-size:24px;margin-bottom:8px;">💜</div><div class="fi-title">Powder-soft accents</div><div class="fi-desc" style="font-size:14px;">Dusty rose, lavender, powder blue, and soft sage bring gentle colour without overwhelming your soft features.</div></div>
        <div class="card"><div style="font-size:24px;margin-bottom:8px;">⚜️</div><div class="fi-title">Metallic finishes</div><div class="fi-desc" style="font-size:14px;">Silver, platinum, white gold, and pewter. Avoid yellow gold, copper, or bronze.</div></div>
        <div class="card"><div style="font-size:24px;margin-bottom:8px;">🕊️</div><div class="fi-title">Keep it soft and blended</div><div class="fi-desc" style="font-size:14px;">Avoid harsh lines, high contrast, or bright colours. Your beauty lives in subtlety.</div></div>
      </div>
      <div class="outfit-grid" style="margin-bottom:20px;">
        <div class="outfit-card"><div class="outfit-top" style="background:linear-gradient(145deg,#B0C0D8,#9090B8);">🌺</div><div class="outfit-body"><div class="outfit-occasion">Unisex Look</div><div class="outfit-name">Soft Grey</div><div class="outfit-items">Soft grey linen shirt/jacket · Cool taupe trousers · White trainers · Silver accessories</div></div></div>
        <div class="outfit-card"><div class="outfit-top" style="background:linear-gradient(145deg,#C9A0DC,#B090C8);">💜</div><div class="outfit-body"><div class="outfit-occasion">Soft Accent</div><div class="outfit-name">Lavender Layer</div><div class="outfit-items">Dusty lavender sweater or cardigan · Grey base · Silver chain · Grey canvas shoes</div></div></div>
      </div>
    </section>
  </div>

  <!-- CELEBRITIES (expanded with male examples) -->
  <section class="season-section-alt">
    <span class="lbl" style="color:#6880A8;">✦ Famous True Summers</span>
    <div class="h2" style="margin-bottom:36px;">You're in great company</div>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(180px,1fr));gap:24px;">
      <div class="celeb-card"><div class="celeb-avatar" style="background:#C8A2C8;">👑</div><div class="celeb-name">Princess Diana</div><div class="celeb-note">Iconic cool summer (she/her)</div></div>
      <div class="celeb-card"><div class="celeb-avatar" style="background:#B0C4DE;">🌹</div><div class="celeb-name">Kate Middleton</div><div class="celeb-note">Cool summer elegance (she/her)</div></div>
      <div class="celeb-card"><div class="celeb-avatar" style="background:#D8BFD8;">🌟</div><div class="celeb-name">Jennifer Aniston</div><div class="celeb-note">Soft cool features (she/her)</div></div>
      <div class="celeb-card"><div class="celeb-avatar" style="background:#C9A0DC;">💫</div><div class="celeb-name">Grace Kelly</div><div class="celeb-note">Summer season classic (she/her)</div></div>
      <div class="celeb-card"><div class="celeb-avatar" style="background:#B0C0D8;">🎸</div><div class="celeb-name">Daniel Craig</div><div class="celeb-note">Cool summer depth (he/him)</div></div>
      <div class="celeb-card"><div class="celeb-avatar" style="background:#C8A2C8;">🎭</div><div class="celeb-name">Jude Law</div><div class="celeb-note">Soft cool colouring (he/him)</div></div>
    </div>
  </section>

  <!-- NAV BETWEEN SEASONS -->
  <div style="padding:40px 6%;display:flex;justify-content:space-between;align-items:center;border-top:1px solid #E8DDD6;gap:20px;flex-wrap:wrap;">
    <a class="btn btn-outline" style="color:#2C2420;border-color:#E8DDD6;" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
    <div style="display:flex;gap:8px;flex-wrap:wrap;">
      <a class="btn btn-outline" style="color:#6880A8;border-color:#6880A844;font-size:13px;" href="{{ route('show.seasons.custom_pages', ['slug' => 'light-summer']) }}">Light Summer →</a>
      <a class="btn btn-outline" style="color:#6880A8;border-color:#6880A844;font-size:13px;" href="{{ route('show.seasons.custom_pages', ['slug' => 'soft-summer']) }}">Soft Summer →</a>
    </div>
  </div>

  <div class="footer-mini">
    <div class="fm-logo">Chroma<em>Fit</em></div>
    <div class="fm-links"><a href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">All Seasons</a></div>
  </div>
@endsection
