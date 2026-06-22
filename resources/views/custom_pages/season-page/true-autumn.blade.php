@extends('layouts.app')

@section('page_style')
    <x-season-style/>
    {{-- Tailwind CSS via CDN for tooltips --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Tooltip styles (same as previous pages) */
        .tooltip-trigger {
            position: relative;
            cursor: help;
        }
        .tooltip-trigger .tooltip-box {
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.2s ease, visibility 0.2s ease;
            position: absolute;
            z-index: 50;
            bottom: calc(100% + 10px);
            left: 50%;
            transform: translateX(-50%);
            white-space: nowrap;
            background: #1e293b;
            color: #f1f5f9;
            padding: 6px 14px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 500;
            letter-spacing: 0.3px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
            pointer-events: none;
        }
        .tooltip-trigger .tooltip-box::after {
            content: '';
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            border: 6px solid transparent;
            border-top-color: #1e293b;
        }
        .tooltip-trigger:hover .tooltip-box {
            visibility: visible;
            opacity: 1;
        }
        .tooltip-trigger .tooltip-box.tooltip-bottom {
            bottom: auto;
            top: calc(100% + 10px);
        }
        .tooltip-trigger .tooltip-box.tooltip-bottom::after {
            top: auto;
            bottom: 100%;
            border-top-color: transparent;
            border-bottom-color: #1e293b;
        }
        .tooltip-trigger .tooltip-box.tooltip-left {
            left: auto;
            right: calc(100% + 14px);
            transform: translateX(0);
        }
        .tooltip-trigger .tooltip-box.tooltip-left::after {
            left: auto;
            right: 8px;
            transform: translateX(0);
            border-top-color: transparent;
            border-left-color: #1e293b;
            border-right-color: transparent;
        }
        .tooltip-trigger .tooltip-box.tooltip-right {
            left: calc(100% + 14px);
            transform: translateX(0);
        }
        .tooltip-trigger .tooltip-box.tooltip-right::after {
            left: -6px;
            transform: translateX(0);
            border-top-color: transparent;
            border-right-color: #1e293b;
            border-left-color: transparent;
        }
        /* Keep existing styles from x-season-style */
    </style>
@endsection

@section('content')
  <section class="season-page-hero" style="background:linear-gradient(145deg,#8A4A20,#B06030,#904820);color:#FFF0D8;">
    <div>
      <div class="sp-eyebrow">
        <div class="sp-line" style="background:#C47838;"></div>
        <span class="sp-season-type" style="color:#C47838;">🍂 Autumn · Warm · Muted</span>
      </div>
      <h1 class="sp-title" style="font-size:clamp(52px,7vw,88px);">True Autumn</h1>
      <div class="sp-tagline" style="color:#FFF0D866;">"Rich as harvest, warm as embers, deeply alive"</div>
      <p class="sp-desc" style="color:#FFF0D888;">True Autumn is the quintessential autumn — the most warm, earthy, and richly muted of all seasons. Your colouring is nature's palette in full harvest glory: terracotta, olive, and burnished gold.</p>
      <div class="sp-palette-preview">
        {{-- tooltips on preview swatches --}}
        <div class="tooltip-trigger">
          <div class="sp-swatch" style="background:#C97B5A;border:2.5px solid rgba(255,255,255,.25);"></div>
          <div class="tooltip-box">#C97B5A · Terracotta</div>
        </div>
        <div class="tooltip-trigger">
          <div class="sp-swatch" style="background:#D4A856;border:2.5px solid rgba(255,255,255,.25);"></div>
          <div class="tooltip-box">#D4A856 · Warm Mustard</div>
        </div>
        <div class="tooltip-trigger">
          <div class="sp-swatch" style="background:#8B6914;border:2.5px solid rgba(255,255,255,.25);"></div>
          <div class="tooltip-box">#8B6914 · Deep Gold</div>
        </div>
        <div class="tooltip-trigger">
          <div class="sp-swatch" style="background:#556B2F;border:2.5px solid rgba(255,255,255,.25);"></div>
          <div class="tooltip-box">#556B2F · Dark Olive</div>
        </div>
        <div class="tooltip-trigger">
          <div class="sp-swatch" style="background:#B8632A;border:2.5px solid rgba(255,255,255,.25);"></div>
          <div class="tooltip-box">#B8632A · Burnt Orange</div>
        </div>
        <div class="tooltip-trigger">
          <div class="sp-swatch" style="background:#8B4513;border:2.5px solid rgba(255,255,255,.25);"></div>
          <div class="tooltip-box">#8B4513 · Rich Brown</div>
        </div>
      </div>
      <div style="display:flex;gap:12px;flex-wrap:wrap;">
        <a class="btn btn-white" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
        <a class="btn btn-outline" style="color:#FFF0D8;border-color:#FFF0D844;" href="{{ route('show.custom_pages', ['slug' => 'test']) }}">Find My Season</a>
      </div>
    </div>
    <div class="sp-hero-visual">
      <div class="sp-visual-main" style="background:linear-gradient(145deg,#C97B5A,#A05030);">🍁</div>
      <div class="sp-visual-badges">
        {{-- tooltips on badges --}}
        <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">🌡️</div>
          <div><div class="sp-badge-title" style="color:#FFF0D8;">Warm Undertone</div><div class="sp-badge-sub" style="color:#FFF0D8;">Golden, earthy</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Your skin has a strong golden or olive warmth — the hallmark of True Autumn.</div>
        </div>
        <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">🎨</div>
          <div><div class="sp-badge-title" style="color:#FFF0D8;">Muted Quality</div><div class="sp-badge-sub" style="color:#FFF0D8;">Rich, earthy</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Your colours are warm but muted — not bright or clear, but rich and earthy.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- PALETTE (unisex) -->
  <section class="season-section">
    <span class="lbl" style="color:#C47838;">✦ Your Colour Palette</span>
    <div class="h2" style="margin-bottom:12px;">Best colours for True Autumn</div>
    <p class="body-text" style="max-width:560px;margin-bottom:36px;">Your palette is the earth itself — terracotta, burnt orange, olive green, warm gold, and rich brown. Every shade has warmth and a slightly muted quality.</p>
    <div class="two-col">
      <div>
        <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">Power Shades</div>
        <div class="color-grid" style="margin-bottom:28px;">
          {{-- tooltips on each swatch --}}
          <div class="tooltip-trigger cswatch cswatch-lg" style="background:#C97B5A;" title="#C97B5A">
            <div class="tooltip-box">#C97B5A · Terracotta</div>
          </div>
          <div class="tooltip-trigger cswatch cswatch-lg" style="background:#D4A856;" title="#D4A856">
            <div class="tooltip-box">#D4A856 · Warm Mustard</div>
          </div>
          <div class="tooltip-trigger cswatch cswatch-lg" style="background:#8B6914;" title="#8B6914">
            <div class="tooltip-box">#8B6914 · Deep Gold</div>
          </div>
          <div class="tooltip-trigger cswatch cswatch-lg" style="background:#556B2F;" title="#556B2F">
            <div class="tooltip-box">#556B2F · Dark Olive</div>
          </div>
          <div class="tooltip-trigger cswatch cswatch-lg" style="background:#B8632A;" title="#B8632A">
            <div class="tooltip-box">#B8632A · Burnt Orange</div>
          </div>
          <div class="tooltip-trigger cswatch cswatch-lg" style="background:#8B4513;" title="#8B4513">
            <div class="tooltip-box">#8B4513 · Rich Brown</div>
          </div>
          <div class="tooltip-trigger cswatch cswatch-lg" style="background:#C4844A;" title="#C4844A">
            <div class="tooltip-box">#C4844A · Warm Camel</div>
          </div>
          <div class="tooltip-trigger cswatch cswatch-lg" style="background:#6B4226;" title="#6B4226">
            <div class="tooltip-box">#6B4226 · Deep Cognac</div>
          </div>
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
          <div class="tooltip-trigger cswatch" style="background:#C8A870;">
            <div class="tooltip-box">#C8A870 · Warm Camel</div>
          </div>
          <div class="tooltip-trigger cswatch" style="background:#A88050;">
            <div class="tooltip-box">#A88050 · Rich Tan</div>
          </div>
          <div class="tooltip-trigger cswatch" style="background:#886030;">
            <div class="tooltip-box">#886030 · Deep Cognac</div>
          </div>
          <div class="tooltip-trigger cswatch" style="background:#684020;">
            <div class="tooltip-box">#684020 · Dark Chestnut</div>
          </div>
        </div>
        <p class="body-text" style="font-size:14px;">Rich camel, warm tan, and deep cognac form your neutral foundation — always earthy and warm.</p>
      </div>
    </div>
  </section>

  <!-- YOUR FEATURES (unisex) -->
  <section class="season-section-alt">
    <span class="lbl" style="color:#C47838;">✦ Typical Features</span>
    <div class="h2" style="margin-bottom:40px;">Do you look like a True Autumn?</div>
    <div class="three-col">
      <div class="tooltip-trigger card" style="position:relative;">
        <div style="font-size:32px;margin-bottom:14px;">🧴</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skin</div>
        <div class="body-text" style="font-size:14px;">Light to deep skin with a strong golden or olive warm undertone. Often tans deeply. May have a naturally bronzed quality year-round. Golden warm depth is the hallmark.</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">Strong warm undertone — golden or olive, never cool or pink.</div>
      </div>
      <div class="tooltip-trigger card" style="position:relative;">
        <div style="font-size:32px;margin-bottom:14px;">👁️</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Eyes</div>
        <div class="body-text" style="font-size:14px;">Hazel, warm brown, amber, or warm olive green — often with rich golden flecks. Eyes are warm and deeply coloured. A richly warm quality to the gaze.</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">Warm, deep eyes with golden flecks — rich and earthy.</div>
      </div>
      <div class="tooltip-trigger card" style="position:relative;">
        <div style="font-size:32px;margin-bottom:14px;">💇</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Hair</div>
        <div class="body-text" style="font-size:14px;">Auburn, chestnut, warm dark brown, or warm black. Hair has a richly warm quality — often with natural red or golden highlights. The most distinctly warm hair of all seasons.</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">Rich, warm hair — often auburn or chestnut with golden highlights.</div>
      </div>
    </div>
    <div style="margin-top:32px;padding:24px;background:#C4783814;border:1px solid #C4783833;border-radius:16px;">
      <div style="font-size:15px;font-weight:600;color:#2C2420;margin-bottom:6px;">✦ The True Autumn glow effect</div>
      <div class="body-text" style="font-size:14px;">True Autumns in their colours look powerfully, richly beautiful — like a person surrounded by autumn leaves. The warm earth tones amplify their natural warmth to create a deeply alive, radiant appearance.</div>
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
      <span class="lbl" style="color:#C47838;">✦ Makeup Guide (Women)</span>
      <div class="h2" style="margin-bottom:12px;">Your perfect makeup shades</div>
      <p class="body-text" style="max-width:560px;margin-bottom:36px;">Rich, warm, and earthy. True Autumn can wear the most intense warm makeup of any season without being overwhelmed.</p>
      <div class="makeup-row">
        {{-- makeup items with tooltips --}}
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#C47A5A;"></div>
          <div class="makeup-label">Warm Terracotta</div>
          <div class="makeup-type">Foundation</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm, golden foundation that matches your earthy richness.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#C06040;"></div>
          <div class="makeup-label">Brick Red Blush</div>
          <div class="makeup-type">Blush</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm, earthy brick blush for a natural flush.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#B04A28;"></div>
          <div class="makeup-label">Rich Burnt Red</div>
          <div class="makeup-type">Lips</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Your signature lip — deep, warm, and earthy red.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#8B6914;"></div>
          <div class="makeup-label">Deep Gold</div>
          <div class="makeup-type">Eyes</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Rich gold shadow that enhances your warm eyes.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#8B4513;"></div>
          <div class="makeup-label">Rich Brown</div>
          <div class="makeup-type">Eyes</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm brown shadow for depth and definition.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#B85A30;"></div>
          <div class="makeup-label">Warm Copper</div>
          <div class="makeup-type">Eyes</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm copper for a glowing, earthy eye look.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#C07040;"></div>
          <div class="makeup-label">Terracotta</div>
          <div class="makeup-type">Blush</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Terracotta blush that complements your warm skin.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#C89040;"></div>
          <div class="makeup-label">Bronze Gold</div>
          <div class="makeup-type">Highlighter</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm bronze-gold highlight for a radiant glow.</div>
        </div>
      </div>
      <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
        <div class="tooltip-trigger card" style="position:relative;">
          <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Foundation Undertone</div>
          <div class="body-text" style="font-size:14px;">Strong warm, golden foundations. True Autumn often needs the warmest, most golden-toned foundation available. Never pink or cool.</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Warm golden or olive undertones — nothing pink or neutral.</div>
        </div>
        <div class="tooltip-trigger card" style="position:relative;">
          <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Key Makeup Rule</div>
          <div class="body-text" style="font-size:14px;">Think earth, spice, and harvest. Terracotta lip, bronzy eyes, and a brick blush is the ultimate True Autumn look. Rich and earthy, never cool.</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Rich, warm, earthy colours are your signature — never cool or bright.</div>
        </div>
      </div>
    </section>

    <!-- Wardrobe Tips (Women) -->
    <section class="season-section-alt">
      <div class="two-col">
        <div>
          <span class="lbl" style="color:#C47838;">✦ Wardrobe Tips (Women)</span>
          <div class="h2" style="margin-bottom:20px;">How to dress as a True Autumn woman</div>
          <div class="feature-row">
            <div class="tooltip-trigger feature-item" style="position:relative;">
              <div class="fi-num">01</div>
              <div><div class="fi-title">Terracotta is your signature</div><div class="fi-desc">No season wears terracotta like True Autumn. It's not just a colour for you — it's almost your second skin.</div></div>
              <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Terracotta is your power colour — it brings out your warmth like no other.</div>
            </div>
            <div class="tooltip-trigger feature-item" style="position:relative;">
              <div class="fi-num">02</div>
              <div><div class="fi-title">Olive green is essential</div><div class="fi-desc">Warm olive in every shade — from soft sage to deep forest olive — is one of your most powerful and versatile colours.</div></div>
              <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Olive harmonises with your earthy warmth — a must-have colour.</div>
            </div>
            <div class="tooltip-trigger feature-item" style="position:relative;">
              <div class="fi-num">03</div>
              <div><div class="fi-title">Build around warm browns</div><div class="fi-desc">Rich brown, cognac, tan, and camel form the backbone of your wardrobe. These neutrals anchor every outfit.</div></div>
              <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Warm browns are your neutral anchors — they ground your look.</div>
            </div>
            <div class="tooltip-trigger feature-item" style="position:relative;">
              <div class="fi-num">04</div>
              <div><div class="fi-title">Gold accessories only</div><div class="fi-desc">Warm gold, antique gold, and burnished copper in jewellery enhance your warm depth. Silver fights your undertone.</div></div>
              <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Gold, brass, and copper — never silver.</div>
            </div>
          </div>
        </div>
        <div>
          <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">✦ Colours to Avoid</span>
          <div class="avoid-grid">
            {{-- avoid cards with tooltips --}}
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#FF69B4;"></div>
              <div class="avoid-info"><div class="avoid-name">Cool Pink</div><div class="avoid-why">Clashes with warm depth</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Cool pink is too stark — choose warm peach or coral.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#87CEEB;"></div>
              <div class="avoid-info"><div class="avoid-name">Cool Blue</div><div class="avoid-why">Too cool and contrasting</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Cool blue fights your warmth — choose teal or warm blue.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#E0E0E0;"></div>
              <div class="avoid-info"><div class="avoid-name">Cool Grey</div><div class="avoid-why">Clashes with warm richness</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Cool grey drains your warmth — choose warm taupe or greige.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#000080;"></div>
              <div class="avoid-info"><div class="avoid-name">Navy</div><div class="avoid-why">Too cool and harsh</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Navy is too cool — choose dark olive or charcoal.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#F0F0F0;"></div>
              <div class="avoid-info"><div class="avoid-name">Cool White</div><div class="avoid-why">Washes out your warmth</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Cool white is too stark — choose warm cream or ivory.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#C0C0C0;"></div>
              <div class="avoid-info"><div class="avoid-name">Silver</div><div class="avoid-why">Undertone mismatch</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Silver is too cool — choose gold or bronze.</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Outfit Inspiration (Women) -->
    <section class="season-section">
      <span class="lbl" style="color:#C47838;">✦ Outfit Inspiration (Women)</span>
      <div class="h2" style="margin-bottom:36px;">Looks built for True Autumn women</div>
      <div class="outfit-grid">
        <div class="tooltip-trigger outfit-card" style="position:relative;">
          <div class="outfit-top" style="background:linear-gradient(145deg,#C97B5A,#A05030);">🍂</div>
          <div class="outfit-body"><div class="outfit-occasion">Casual</div><div class="outfit-name">Harvest Earth</div><div class="outfit-items">Terracotta linen top · Dark olive wide-leg trousers · Cognac leather boots · Bronze earrings</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Warm, earthy, and effortlessly True Autumn.</div>
        </div>
        <div class="tooltip-trigger outfit-card" style="position:relative;">
          <div class="outfit-top" style="background:linear-gradient(145deg,#D4A856,#B08030);">🌾</div>
          <div class="outfit-body"><div class="outfit-occasion">Day</div><div class="outfit-name">Golden Field</div><div class="outfit-items">Warm mustard knit sweater · Rich brown corduroy · Tan leather boots · Antique gold pendant</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Rich, golden, and beautifully autumnal.</div>
        </div>
        <div class="tooltip-trigger outfit-card" style="position:relative;">
          <div class="outfit-top" style="background:linear-gradient(145deg,#556B2F,#3D5020);">🌿</div>
          <div class="outfit-body"><div class="outfit-occasion">Evening</div><div class="outfit-name">Dark Olive</div><div class="outfit-items">Deep olive silk wrap dress · Brown heeled boots · Tortoiseshell clutch · Gold chain necklace</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Elegant, earthy, and deeply warm.</div>
        </div>
      </div>
    </section>
  </div>

  <!-- MEN CONTENT -->
  <div id="men-content" class="gender-content">
    <!-- Grooming & Skincare (Men) -->
    <section class="season-section">
      <span class="lbl" style="color:#C47838;">✦ Grooming & Skincare (Men)</span>
      <div class="h2" style="margin-bottom:12px;">Grooming for the True Autumn man</div>
      <p class="body-text" style="max-width:560px;margin-bottom:36px;">Rich, warm, and natural. Your grooming should enhance your earthy warmth and golden undertones.</p>
      <div class="makeup-row">
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#C47A5A;"></div>
          <div class="makeup-label">Warm Golden Moisturizer</div>
          <div class="makeup-type">Skincare</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm, golden hydration that enhances your skin's natural warmth.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#B07040;"></div>
          <div class="makeup-label">Warm Tan Concealer</div>
          <div class="makeup-type">Concealer</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm-toned concealer for a natural finish.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#D4A060;"></div>
          <div class="makeup-label">Golden SPF</div>
          <div class="makeup-type">Sunscreen</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Tinted SPF with a warm, golden finish.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#A06030;"></div>
          <div class="makeup-label">Warm Brown Beard Oil</div>
          <div class="makeup-type">Facial hair care</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm, rich beard oil that complements your colouring.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#C08040;"></div>
          <div class="makeup-label">Honey Brown Pomade</div>
          <div class="makeup-type">Hair Styling</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm, honey-toned pomade for a natural hold.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#9E7A50;"></div>
          <div class="makeup-label">Warm Taupe Brow Gel</div>
          <div class="makeup-type">Brows</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm taupe to define brows naturally.</div>
        </div>
      </div>
      <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
        <div class="tooltip-trigger card" style="position:relative;">
          <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skincare Focus</div>
          <div class="body-text" style="font-size:14px;">Natural radiance and warmth. Use products that enhance your golden undertone. Avoid anything that leaves an ashy or cool finish.</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Warm, radiant skincare enhances your natural glow.</div>
        </div>
        <div class="tooltip-trigger card" style="position:relative;">
          <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Facial Hair</div>
          <div class="body-text" style="font-size:14px;">Keep facial hair warm and rich. Use warm brown or honey-toned beard oils. Avoid cool, ashy, or reddish tones that don't match your warmth.</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Warm, rich facial hair complements your earthy colouring.</div>
        </div>
      </div>
    </section>

    <!-- Wardrobe Tips (Men) -->
    <section class="season-section-alt">
      <div class="two-col">
        <div>
          <span class="lbl" style="color:#C47838;">✦ Wardrobe Tips (Men)</span>
          <div class="h2" style="margin-bottom:20px;">How to dress as a True Autumn man</div>
          <div class="feature-row">
            <div class="tooltip-trigger feature-item" style="position:relative;">
              <div class="fi-num">01</div>
              <div><div class="fi-title">Embrace warm earthy neutrals</div><div class="fi-desc">Camel, rich brown, cognac, and tan are your core suit and trouser colours. Avoid charcoal and navy.</div></div>
              <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Warm earthy neutrals are your foundation — they suit your natural warmth.</div>
            </div>
            <div class="tooltip-trigger feature-item" style="position:relative;">
              <div class="fi-num">02</div>
              <div><div class="fi-title">Olive and terracotta accents</div><div class="fi-desc">Olive green shirts, terracotta ties, or warm mustard pocket squares add signature True Autumn energy.</div></div>
              <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">These accents bring your earthy warmth to life.</div>
            </div>
            <div class="tooltip-trigger feature-item" style="position:relative;">
              <div class="fi-num">03</div>
              <div><div class="fi-title">Gold and warm leather</div><div class="fi-desc">Gold watches, warm brown leather shoes and belts, and tortoiseshell accessories complement your earthy warmth.</div></div>
              <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Gold and warm leathers tie your look together naturally.</div>
            </div>
            <div class="tooltip-trigger feature-item" style="position:relative;">
              <div class="fi-num">04</div>
              <div><div class="fi-title">Avoid cool and bright colours</div><div class="fi-desc">No black, navy, cool greys, bright whites, or pastels. They will drain your warm colouring.</div></div>
              <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Cool and bright colours wash out your warmth — avoid them.</div>
            </div>
          </div>
        </div>
        <div>
          <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">✦ Colours to Avoid</span>
          <div class="avoid-grid">
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#FF69B4;"></div>
              <div class="avoid-info"><div class="avoid-name">Cool Pink</div><div class="avoid-why">Clashes with warm depth</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Cool pink is too stark — choose warm peach or coral.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#87CEEB;"></div>
              <div class="avoid-info"><div class="avoid-name">Cool Blue</div><div class="avoid-why">Too cool and contrasting</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Cool blue fights your warmth — choose teal or warm blue.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#E0E0E0;"></div>
              <div class="avoid-info"><div class="avoid-name">Cool Grey</div><div class="avoid-why">Clashes with warm richness</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Cool grey drains your warmth — choose warm taupe or greige.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#000080;"></div>
              <div class="avoid-info"><div class="avoid-name">Navy</div><div class="avoid-why">Too cool and harsh</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Navy is too cool — choose dark olive or charcoal.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#F0F0F0;"></div>
              <div class="avoid-info"><div class="avoid-name">Cool White</div><div class="avoid-why">Washes out your warmth</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Cool white is too stark — choose warm cream or ivory.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#C0C0C0;"></div>
              <div class="avoid-info"><div class="avoid-name">Silver</div><div class="avoid-why">Undertone mismatch</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Silver is too cool — choose gold or bronze.</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Outfit Inspiration (Men) -->
    <section class="season-section">
      <span class="lbl" style="color:#C47838;">✦ Outfit Inspiration (Men)</span>
      <div class="h2" style="margin-bottom:36px;">Looks built for True Autumn men</div>
      <div class="outfit-grid">
        <div class="tooltip-trigger outfit-card" style="position:relative;">
          <div class="outfit-top" style="background:linear-gradient(145deg,#C97B5A,#A05030);">🍂</div>
          <div class="outfit-body"><div class="outfit-occasion">Business</div><div class="outfit-name">Camel Suit</div><div class="outfit-items">Warm camel suit · Olive green tie · Cream shirt · Brown leather oxfords · Gold watch</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Sophisticated, warm, and professionally True Autumn.</div>
        </div>
        <div class="tooltip-trigger outfit-card" style="position:relative;">
          <div class="outfit-top" style="background:linear-gradient(145deg,#D4A856,#B08030);">🌾</div>
          <div class="outfit-body"><div class="outfit-occasion">Smart Casual</div><div class="outfit-name">Golden Harvest</div><div class="outfit-items">Mustard sweater · Brown chinos · Tan leather boots · Tortoiseshell sunglasses</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Warm, stylish, and effortlessly cool.</div>
        </div>
        <div class="tooltip-trigger outfit-card" style="position:relative;">
          <div class="outfit-top" style="background:linear-gradient(145deg,#556B2F,#3D5020);">🌿</div>
          <div class="outfit-body"><div class="outfit-occasion">Weekend</div><div class="outfit-name">Olive & Tan</div><div class="outfit-items">Olive field jacket · Cream henley · Brown jeans · Tan work boots · Leather strap watch</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Rugged, warm, and naturally stylish.</div>
        </div>
      </div>
    </section>
  </div>

  <!-- GENDER-NEUTRAL CONTENT -->
  <div id="neutral-content" class="gender-content">
    <section class="season-section">
      <span class="lbl" style="color:#C47838;">✦ Style for Everyone</span>
      <div class="h2" style="margin-bottom:12px;">Gender-neutral True Autumn tips</div>
      <p class="body-text" style="max-width:560px;margin-bottom:36px;">True Autumn is about rich warmth, earthy depth, and natural harmony. These principles work for any gender expression.</p>
      <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:20px;margin-bottom:32px;">
        <div class="tooltip-trigger card" style="position:relative;">
          <div style="font-size:24px;margin-bottom:8px;">🍂</div>
          <div class="fi-title">Warm earthy neutrals</div>
          <div class="fi-desc" style="font-size:14px;">Camel, cognac, tan, and rich brown are your foundation. Avoid cool greys, navy, and black.</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Your neutrals are warm and earthy — never cool or stark.</div>
        </div>
        <div class="tooltip-trigger card" style="position:relative;">
          <div style="font-size:24px;margin-bottom:8px;">🌾</div>
          <div class="fi-title">Harvest colours</div>
          <div class="fi-desc" style="font-size:14px;">Terracotta, mustard, burnt orange, and warm olive are your signature accent colours.</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">These harvest colours are your signature — rich and earthy.</div>
        </div>
        <div class="tooltip-trigger card" style="position:relative;">
          <div style="font-size:24px;margin-bottom:8px;">⚜️</div>
          <div class="fi-title">Warm metals</div>
          <div class="fi-desc" style="font-size:14px;">Gold, brass, copper, and bronze. Avoid silver, platinum, or chrome.</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm metals enhance your earthy warmth — silver is too cool.</div>
        </div>
        <div class="tooltip-trigger card" style="position:relative;">
          <div style="font-size:24px;margin-bottom:8px;">🌰</div>
          <div class="fi-title">Natural textures</div>
          <div class="fi-desc" style="font-size:14px;">Leather, suede, corduroy, wool, and linen in warm earthy tones enhance your natural richness.</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Natural textures in warm tones amplify your earthy aesthetic.</div>
        </div>
      </div>
      <div class="outfit-grid" style="margin-bottom:20px;">
        <div class="tooltip-trigger outfit-card" style="position:relative;">
          <div class="outfit-top" style="background:linear-gradient(145deg,#C97B5A,#A05030);">🍂</div>
          <div class="outfit-body"><div class="outfit-occasion">Unisex Look</div><div class="outfit-name">Warm Earth</div><div class="outfit-items">Camel coat or jacket · Olive trousers · Brown leather boots · Gold jewellery or watch</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">A versatile, warm unisex look that's naturally stylish.</div>
        </div>
        <div class="tooltip-trigger outfit-card" style="position:relative;">
          <div class="outfit-top" style="background:linear-gradient(145deg,#D4A856,#B08030);">🌾</div>
          <div class="outfit-body"><div class="outfit-occasion">Accent Layer</div><div class="outfit-name">Mustard Pop</div><div class="outfit-items">Mustard sweater or hoodie · Brown or cream base · Tan accessories · Gold details</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">A warm, bold accent layer that brings your outfit to life.</div>
        </div>
      </div>
    </section>
  </div>

  <!-- CELEBRITIES (expanded with male examples) -->
  <section class="season-section-alt">
    <span class="lbl" style="color:#C47838;">✦ Famous True Autumns</span>
    <div class="h2" style="margin-bottom:36px;">You're in great company</div>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(180px,1fr));gap:24px;">
      {{-- celebrity cards with tooltips --}}
      <div class="tooltip-trigger celeb-card" style="position:relative;">
        <div class="celeb-avatar" style="background:#C97B5A;">🌟</div>
        <div class="celeb-name">Julianne Moore</div>
        <div class="celeb-note">Classic warm autumn (she/her)</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her rich auburn hair and warm skin define True Autumn.</div>
      </div>
      <div class="tooltip-trigger celeb-card" style="position:relative;">
        <div class="celeb-avatar" style="background:#D4A856;">💫</div>
        <div class="celeb-name">Marcia Cross</div>
        <div class="celeb-note">Rich auburn warmth (she/her)</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her warm red hair and golden skin are quintessential True Autumn.</div>
      </div>
      <div class="tooltip-trigger celeb-card" style="position:relative;">
        <div class="celeb-avatar" style="background:#C4844A;">🎬</div>
        <div class="celeb-name">Emma Stone</div>
        <div class="celeb-note">Warm autumn colouring (she/her)</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her warm, glowing features are a perfect True Autumn match.</div>
      </div>
      <div class="tooltip-trigger celeb-card" style="position:relative;">
        <div class="celeb-avatar" style="background:#B8632A;">🏆</div>
        <div class="celeb-name">Bryce Dallas Howard</div>
        <div class="celeb-note">Deep warm autumn (she/her)</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her deep warm colouring is classic True Autumn.</div>
      </div>
      <div class="tooltip-trigger celeb-card" style="position:relative;">
        <div class="celeb-avatar" style="background:#C97B5A;">🎸</div>
        <div class="celeb-name">Eddie Redmayne</div>
        <div class="celeb-note">Warm autumn depth (he/him)</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">His warm, earthy features suit True Autumn perfectly.</div>
      </div>
      <div class="tooltip-trigger celeb-card" style="position:relative;">
        <div class="celeb-avatar" style="background:#D4A856;">🎭</div>
        <div class="celeb-name">Jake Gyllenhaal</div>
        <div class="celeb-note">Earthly warm autumn (he/him)</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">His warm olive skin and earthy tones define True Autumn.</div>
      </div>
      <div class="tooltip-trigger celeb-card" style="position:relative;">
        <div class="celeb-avatar" style="background:#C4844A;">🎨</div>
        <div class="celeb-name">Jessica Chastain</div>
        <div class="celeb-note">Rich warm red hair (she/her)</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her warm red hair and peachy skin are iconic True Autumn.</div>
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
    <div class="fm-links"><a href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">All Seasons</a></div>
  </div>

  {{-- gender toggle script (unchanged) --}}
  <script>
    (function() {
      const btns = document.querySelectorAll('.gender-btn');
      const women = document.getElementById('women-content');
      const men = document.getElementById('men-content');
      const neutral = document.getElementById('neutral-content');

      function setGender(gender) {
        [women, men, neutral].forEach(el => el.classList.remove('active-gender'));
        btns.forEach(b => b.classList.remove('active'));
        if (gender === 'women') { women.classList.add('active-gender'); btns[0].classList.add('active'); }
        else if (gender === 'men') { men.classList.add('active-gender'); btns[1].classList.add('active'); }
        else { neutral.classList.add('active-gender'); btns[2].classList.add('active'); }
      }

      btns.forEach((btn, i) => {
        btn.addEventListener('click', function(e) {
          const g = this.dataset.gender;
          setGender(g);
        });
      });
      // default: women active
      setGender('women');
    })();
  </script>
@endsection
