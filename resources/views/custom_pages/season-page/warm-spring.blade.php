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
  <section class="season-page-hero" style="background:linear-gradient(145deg,#E8A870,#D48048,#C06030);color:#fff;">
    <div>
      <div class="sp-eyebrow">
        <div class="sp-line" style="background:#B85A38;"></div>
        <span class="sp-season-type" style="color:#B85A38;">🌸 Spring · Warm · Deep</span>
      </div>
      <h1 class="sp-title" style="font-size:clamp(52px,7vw,88px);">Warm Spring</h1>
      <div class="sp-tagline" style="color:#ffffff66;">"Boldly warm, richly golden, deeply radiant"</div>
      <p class="sp-desc" style="color:#ffffff88;">Warm Spring sits at the intersection of spring and autumn — golden, warm, and with slightly more depth than other springs. You share autumn's earthiness but retain spring's clarity.</p>
      <div class="sp-palette-preview">
        {{-- tooltips on preview swatches --}}
        <div class="tooltip-trigger">
          <div class="sp-swatch" style="background:#E8855A;border:2.5px solid rgba(255,255,255,.25);"></div>
          <div class="tooltip-box">#E8855A · Warm Coral</div>
        </div>
        <div class="tooltip-trigger">
          <div class="sp-swatch" style="background:#D4A843;border:2.5px solid rgba(255,255,255,.25);"></div>
          <div class="tooltip-box">#D4A843 · Golden Amber</div>
        </div>
        <div class="tooltip-trigger">
          <div class="sp-swatch" style="background:#8B7035;border:2.5px solid rgba(255,255,255,.25);"></div>
          <div class="tooltip-box">#8B7035 · Warm Olive</div>
        </div>
        <div class="tooltip-trigger">
          <div class="sp-swatch" style="background:#C06030;border:2.5px solid rgba(255,255,255,.25);"></div>
          <div class="tooltip-box">#C06030 · Burnt Orange</div>
        </div>
        <div class="tooltip-trigger">
          <div class="sp-swatch" style="background:#A0522D;border:2.5px solid rgba(255,255,255,.25);"></div>
          <div class="tooltip-box">#A0522D · Rich Sienna</div>
        </div>
        <div class="tooltip-trigger">
          <div class="sp-swatch" style="background:#B8860B;border:2.5px solid rgba(255,255,255,.25);"></div>
          <div class="tooltip-box">#B8860B · Dark Goldenrod</div>
        </div>
      </div>
      <div style="display:flex;gap:12px;flex-wrap:wrap;">
        <a class="btn btn-white" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
        <a class="btn btn-outline" style="color:#fff;border-color:#ffffff44;" href="{{ route('show.custom_pages', ['slug' => 'test']) }}">Find My Season</a>
      </div>
    </div>
    <div class="sp-hero-visual">
      <div class="sp-visual-main" style="background:linear-gradient(145deg,#D4A843,#C88030);">🔥</div>
      <div class="sp-visual-badges">
        {{-- tooltips on badges --}}
        <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">🌡️</div>
          <div><div class="sp-badge-title" style="color:#fff;">Warm Undertone</div><div class="sp-badge-sub" style="color:#fff;">Deep golden warmth</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Your skin has a deep, golden warmth that's richer than typical spring.</div>
        </div>
        <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">🌿</div>
          <div><div class="sp-badge-title" style="color:#fff;">Spring-Autumn Bridge</div><div class="sp-badge-sub" style="color:#fff;">Richer than spring</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">You sit between spring and autumn — you can borrow from both palettes.</div>
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
          {{-- tooltips on each swatch --}}
          <div class="tooltip-trigger cswatch cswatch-lg" style="background:#E8855A;" title="#E8855A">
            <div class="tooltip-box">#E8855A · Warm Coral</div>
          </div>
          <div class="tooltip-trigger cswatch cswatch-lg" style="background:#D4A843;" title="#D4A843">
            <div class="tooltip-box">#D4A843 · Golden Amber</div>
          </div>
          <div class="tooltip-trigger cswatch cswatch-lg" style="background:#8B7035;" title="#8B7035">
            <div class="tooltip-box">#8B7035 · Warm Olive</div>
          </div>
          <div class="tooltip-trigger cswatch cswatch-lg" style="background:#C06030;" title="#C06030">
            <div class="tooltip-box">#C06030 · Burnt Orange</div>
          </div>
          <div class="tooltip-trigger cswatch cswatch-lg" style="background:#A0522D;" title="#A0522D">
            <div class="tooltip-box">#A0522D · Rich Sienna</div>
          </div>
          <div class="tooltip-trigger cswatch cswatch-lg" style="background:#B8860B;" title="#B8860B">
            <div class="tooltip-box">#B8860B · Dark Goldenrod</div>
          </div>
          <div class="tooltip-trigger cswatch cswatch-lg" style="background:#CD853F;" title="#CD853F">
            <div class="tooltip-box">#CD853F · Peru</div>
          </div>
          <div class="tooltip-trigger cswatch cswatch-lg" style="background:#8B6914;" title="#8B6914">
            <div class="tooltip-box">#8B6914 · Olive Gold</div>
          </div>
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
          <div class="tooltip-trigger cswatch" style="background:#D2B48C;">
            <div class="tooltip-box">#D2B48C · Tan</div>
          </div>
          <div class="tooltip-trigger cswatch" style="background:#C8A050;">
            <div class="tooltip-box">#C8A050 · Warm Camel</div>
          </div>
          <div class="tooltip-trigger cswatch" style="background:#A07840;">
            <div class="tooltip-box">#A07840 · Golden Brown</div>
          </div>
          <div class="tooltip-trigger cswatch" style="background:#806030;">
            <div class="tooltip-box">#806030 · Deep Cognac</div>
          </div>
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
      <div class="tooltip-trigger card" style="position:relative;">
        <div style="font-size:32px;margin-bottom:14px;">🧴</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skin</div>
        <div class="body-text" style="font-size:14px;">Light to medium-tan skin with a strong golden or bronzed warm undertone. Often tans deeply and beautifully. May look year-round as if lightly sun-kissed.</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">Strong golden warmth — tans deeply, looks sun-kissed.</div>
      </div>
      <div class="tooltip-trigger card" style="position:relative;">
        <div style="font-size:32px;margin-bottom:14px;">👁️</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Eyes</div>
        <div class="body-text" style="font-size:14px;">Warm hazel, amber, golden brown, or warm green. Eyes often have strong golden or amber flecks. The eyes appear warm and richly coloured.</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">Warm, amber-toned eyes with golden flecks.</div>
      </div>
      <div class="tooltip-trigger card" style="position:relative;">
        <div style="font-size:32px;margin-bottom:14px;">💇</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Hair</div>
        <div class="body-text" style="font-size:14px;">Golden brown, auburn, warm chestnut, or medium golden blonde. Often has natural warm highlights. Hair has a naturally rich, honeyed quality.</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">Rich, warm hair with honeyed highlights.</div>
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
        {{-- makeup items with tooltips --}}
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#C8A060;"></div>
          <div class="makeup-label">Warm Golden Tan</div>
          <div class="makeup-type">Foundation</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm, golden foundation that matches your sun-kissed skin.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#C86040;"></div>
          <div class="makeup-label">Terracotta Blush</div>
          <div class="makeup-type">Blush</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm terracotta blush for a natural, bronzed flush.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#B8502A;"></div>
          <div class="makeup-label">Warm Brick</div>
          <div class="makeup-type">Lips</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Rich, warm brick-red lip for a bold statement.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#8B6914;"></div>
          <div class="makeup-label">Deep Gold</div>
          <div class="makeup-type">Eyes</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Golden shadow that enhances your warm eyes.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#CD853F;"></div>
          <div class="makeup-label">Warm Copper</div>
          <div class="makeup-type">Eyes</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Copper shadow for a radiant, metallic glow.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#E8904A;"></div>
          <div class="makeup-label">Amber Coral</div>
          <div class="makeup-type">Lips</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm amber-coral lip for a fresh, vibrant look.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#B87040;"></div>
          <div class="makeup-label">Deep Peach</div>
          <div class="makeup-type">Blush</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Deep peach blush for a warm, healthy glow.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#C8A040;"></div>
          <div class="makeup-label">Antique Gold</div>
          <div class="makeup-type">Highlighter</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Antique gold highlight for a sophisticated sheen.</div>
        </div>
      </div>
      <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
        <div class="tooltip-trigger card" style="position:relative;">
          <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Foundation Undertone</div>
          <div class="body-text" style="font-size:14px;">You need a foundation with a strong warm, golden undertone — possibly the warmest of all spring foundations. Look for "warm golden" or "warm tan" shades.</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Strong golden warmth — the warmest foundation you can find.</div>
        </div>
        <div class="tooltip-trigger card" style="position:relative;">
          <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Key Makeup Rule</div>
          <div class="body-text" style="font-size:14px;">Think bronze, amber, and deep warm gold. You're the spring season that can handle the richest, warmest makeup shades without being overwhelmed.</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Bronze, amber, and deep gold — your signature makeup palette.</div>
        </div>
      </div>
    </section>

    <!-- Wardrobe Tips (Women) -->
    <section class="season-section-alt">
      <div class="two-col">
        <div>
          <span class="lbl" style="color:#B85A38;">✦ Wardrobe Tips (Women)</span>
          <div class="h2" style="margin-bottom:20px;">How to dress as a Warm Spring woman</div>
          <div class="feature-row">
            <div class="tooltip-trigger feature-item" style="position:relative;">
              <div class="fi-num">01</div>
              <div><div class="fi-title">Embrace golden ambers and rusts</div><div class="fi-desc">Your richer colouring can handle deeper warm tones like rust, amber, golden brown, and warm tan that would overwhelm lighter springs.</div></div>
              <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Amber, rust, and golden brown are your power colours.</div>
            </div>
            <div class="tooltip-trigger feature-item" style="position:relative;">
              <div class="fi-num">02</div>
              <div><div class="fi-title">Bridge spring and autumn</div><div class="fi-desc">You can borrow from the autumn palette — try muted olive, warm terracotta, and rich camel alongside clearer spring shades.</div></div>
              <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">You can mix spring brightness with autumn depth.</div>
            </div>
            <div class="tooltip-trigger feature-item" style="position:relative;">
              <div class="fi-num">03</div>
              <div><div class="fi-title">Keep your metals gold</div><div class="fi-desc">Gold in every shade — antique gold, burnished copper, rose gold — all enhance your warm depth beautifully.</div></div>
              <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Gold, copper, and rose gold are your metals.</div>
            </div>
            <div class="tooltip-trigger feature-item" style="position:relative;">
              <div class="fi-num">04</div>
              <div><div class="fi-title">Layer warm tones</div><div class="fi-desc">A tonal outfit in different shades of warm amber, gold, and tan creates a sophisticated, pulled-together look.</div></div>
              <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Tonal warm outfits are your signature style.</div>
            </div>
          </div>
        </div>
        <div>
          <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">✦ Colours to Avoid</span>
          <div class="avoid-grid">
            {{-- avoid cards with tooltips --}}
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#000080;"></div>
              <div class="avoid-info"><div class="avoid-name">Navy</div><div class="avoid-why">Too cool for your golden depth</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Navy is too cool — choose warm olive or charcoal.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#E0E0E0;"></div>
              <div class="avoid-info"><div class="avoid-name">Cool Silver/Grey</div><div class="avoid-why">Clashes with warm richness</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Cool grey drains your warmth — choose warm taupe.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#FF69B4;"></div>
              <div class="avoid-info"><div class="avoid-name">Cool Pink</div><div class="avoid-why">Fights with your warm undertone</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Cool pink is too stark — choose warm peach or coral.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#4B0082;"></div>
              <div class="avoid-info"><div class="avoid-name">Violet</div><div class="avoid-why">Too cool and artificial</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Violet is too cool — choose warm plum or berry.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#F0F0F0;"></div>
              <div class="avoid-info"><div class="avoid-name">Icy White</div><div class="avoid-why">Washes out your warmth</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Icy white is too stark — choose warm cream or ivory.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#2F4F4F;"></div>
              <div class="avoid-info"><div class="avoid-name">Dark Cool Green</div><div class="avoid-why">Too ashy and cool</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Cool dark green clashes — choose warm olive or sage.</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Outfit Inspiration (Women) -->
    <section class="season-section">
      <span class="lbl" style="color:#B85A38;">✦ Outfit Inspiration (Women)</span>
      <div class="h2" style="margin-bottom:36px;">Looks built for Warm Spring women</div>
      <div class="outfit-grid">
        <div class="tooltip-trigger outfit-card" style="position:relative;">
          <div class="outfit-top" style="background:linear-gradient(145deg,#D4A843,#C06030);">🌾</div>
          <div class="outfit-body"><div class="outfit-occasion">Casual</div><div class="outfit-name">Golden Harvest</div><div class="outfit-items">Amber knit sweater · Warm tan trousers · Cognac leather boots · Gold pendant</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Warm, rich, and effortlessly stylish.</div>
        </div>
        <div class="tooltip-trigger outfit-card" style="position:relative;">
          <div class="outfit-top" style="background:linear-gradient(145deg,#E8855A,#C06030);">🍊</div>
          <div class="outfit-body"><div class="outfit-occasion">Day</div><div class="outfit-name">Spiced Citrus</div><div class="outfit-items">Rust-orange wrap dress · Cognac sandals · Woven tote · Hammered gold earrings</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Vibrant, warm, and full of spring energy.</div>
        </div>
        <div class="tooltip-trigger outfit-card" style="position:relative;">
          <div class="outfit-top" style="background:linear-gradient(145deg,#8B7035,#A08030);">🌿</div>
          <div class="outfit-body"><div class="outfit-occasion">Evening</div><div class="outfit-name">Warm Earth</div><div class="outfit-items">Olive-gold silk blouse · Dark camel trousers · Brown heels · Antique gold jewellery</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Sophisticated, earthy, and deeply warm.</div>
        </div>
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
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#C8A060;"></div>
          <div class="makeup-label">Warm Golden Moisturizer</div>
          <div class="makeup-type">Skincare</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm, golden hydration that enhances your natural glow.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#D4B06A;"></div>
          <div class="makeup-label">Warm Tan Concealer</div>
          <div class="makeup-type">Concealer</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm, tan-toned concealer for a seamless finish.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#E8C080;"></div>
          <div class="makeup-label">Golden SPF</div>
          <div class="makeup-type">Sunscreen</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Tinted SPF with a golden, sun-kissed finish.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#A07030;"></div>
          <div class="makeup-label">Amber Beard Oil</div>
          <div class="makeup-type">Facial hair care</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Rich amber oil for a conditioned, warm beard.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#C08040;"></div>
          <div class="makeup-label">Honey Brown Pomade</div>
          <div class="makeup-type">Hair Styling</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Honey-brown pomade for a warm, natural hold.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#9E7A50;"></div>
          <div class="makeup-label">Warm Taupe Brow Gel</div>
          <div class="makeup-type">Brows</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm taupe for natural, defined brows.</div>
        </div>
      </div>
      <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
        <div class="tooltip-trigger card" style="position:relative;">
          <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skincare Focus</div>
          <div class="body-text" style="font-size:14px;">Radiance and warmth. Use products that enhance your natural golden glow. Avoid anything that leaves a cool, ashy, or matte finish.</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Golden, radiant skincare enhances your natural warmth.</div>
        </div>
        <div class="tooltip-trigger card" style="position:relative;">
          <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Facial Hair</div>
          <div class="body-text" style="font-size:14px;">Keep facial hair warm and rich. Use amber, honey, or warm brown beard oils. Avoid cool ashy tones or black beards that create harsh contrast. A well-groomed warm beard complements your depth.</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Warm, rich beard care — no cool or ashy tones.</div>
        </div>
      </div>
    </section>

    <!-- Wardrobe Tips (Men) -->
    <section class="season-section-alt">
      <div class="two-col">
        <div>
          <span class="lbl" style="color:#B85A38;">✦ Wardrobe Tips (Men)</span>
          <div class="h2" style="margin-bottom:20px;">How to dress as a Warm Spring man</div>
          <div class="feature-row">
            <div class="tooltip-trigger feature-item" style="position:relative;">
              <div class="fi-num">01</div>
              <div><div class="fi-title">Warm, golden neutrals</div><div class="fi-desc">Camel, tan, golden brown, and warm sand are your best suit and trouser colours. Avoid charcoal, navy, or cool grey.</div></div>
              <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Warm, golden neutrals — your foundation.</div>
            </div>
            <div class="tooltip-trigger feature-item" style="position:relative;">
              <div class="fi-num">02</div>
              <div><div class="fi-title">Rich warm accents</div><div class="fi-desc">Amber, rust, warm olive, and golden yellow in shirts, ties, or polos add the right amount of spring-autumn depth.</div></div>
              <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Amber, rust, and olive — your accent colours.</div>
            </div>
            <div class="tooltip-trigger feature-item" style="position:relative;">
              <div class="fi-num">03</div>
              <div><div class="fi-title">Gold and cognac leather</div><div class="fi-desc">Gold watches, cognac leather shoes and belts, and wood accessories complement your warm depth perfectly.</div></div>
              <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Gold and cognac leather — your accessories.</div>
            </div>
            <div class="tooltip-trigger feature-item" style="position:relative;">
              <div class="fi-num">04</div>
              <div><div class="fi-title">Avoid cool and bright colours</div><div class="fi-desc">No black, navy, cool greys, or pure white. They will clash with your golden warmth.</div></div>
              <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Cool and bright colours — avoid them.</div>
            </div>
          </div>
        </div>
        <div>
          <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">✦ Colours to Avoid</span>
          <div class="avoid-grid">
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#000080;"></div>
              <div class="avoid-info"><div class="avoid-name">Navy</div><div class="avoid-why">Too cool for your golden depth</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Navy is too cool — choose warm olive or charcoal.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#E0E0E0;"></div>
              <div class="avoid-info"><div class="avoid-name">Cool Silver/Grey</div><div class="avoid-why">Clashes with warm richness</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Cool grey drains your warmth — choose warm taupe.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#FF69B4;"></div>
              <div class="avoid-info"><div class="avoid-name">Cool Pink</div><div class="avoid-why">Fights with your warm undertone</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Cool pink is too stark — choose warm peach or coral.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#4B0082;"></div>
              <div class="avoid-info"><div class="avoid-name">Violet</div><div class="avoid-why">Too cool and artificial</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Violet is too cool — choose warm plum or berry.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#F0F0F0;"></div>
              <div class="avoid-info"><div class="avoid-name">Icy White</div><div class="avoid-why">Washes out your warmth</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Icy white is too stark — choose warm cream or ivory.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#2F4F4F;"></div>
              <div class="avoid-info"><div class="avoid-name">Dark Cool Green</div><div class="avoid-why">Too ashy and cool</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Cool dark green clashes — choose warm olive or sage.</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Outfit Inspiration (Men) -->
    <section class="season-section">
      <span class="lbl" style="color:#B85A38;">✦ Outfit Inspiration (Men)</span>
      <div class="h2" style="margin-bottom:36px;">Looks built for Warm Spring men</div>
      <div class="outfit-grid">
        <div class="tooltip-trigger outfit-card" style="position:relative;">
          <div class="outfit-top" style="background:linear-gradient(145deg,#D4A843,#C06030);">🌾</div>
          <div class="outfit-body"><div class="outfit-occasion">Business</div><div class="outfit-name">Camel Suit</div><div class="outfit-items">Warm camel suit · Golden tie · Cream shirt · Tan oxfords · Gold watch</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Professional, warm, and powerfully stylish.</div>
        </div>
        <div class="tooltip-trigger outfit-card" style="position:relative;">
          <div class="outfit-top" style="background:linear-gradient(145deg,#E8855A,#C06030);">🍊</div>
          <div class="outfit-body"><div class="outfit-occasion">Smart Casual</div><div class="outfit-name">Rust & Khaki</div><div class="outfit-items">Rust-brown blazer · Cream polo · Warm khaki chinos · Cognac boots · Gold chain</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Modern, warm, and effortlessly cool.</div>
        </div>
        <div class="tooltip-trigger outfit-card" style="position:relative;">
          <div class="outfit-top" style="background:linear-gradient(145deg,#8B7035,#A08030);">🌿</div>
          <div class="outfit-body"><div class="outfit-occasion">Weekend</div><div class="outfit-name">Olive & Sand</div><div class="outfit-items">Warm olive field jacket · Cream henley · Tan trousers · Brown leather work boots</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Rugged, warm, and naturally stylish.</div>
        </div>
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
        <div class="tooltip-trigger card" style="position:relative;">
          <div style="font-size:24px;margin-bottom:8px;">🍂</div>
          <div class="fi-title">Warm, earthy neutrals</div>
          <div class="fi-desc" style="font-size:14px;">Camel, tan, golden brown, and warm sand are your foundation. Avoid cool greys and pure white.</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm, earthy neutrals — your base.</div>
        </div>
        <div class="tooltip-trigger card" style="position:relative;">
          <div style="font-size:24px;margin-bottom:8px;">🍊</div>
          <div class="fi-title">Deep warm accents</div>
          <div class="fi-desc" style="font-size:14px;">Amber, rust, warm olive, and golden yellow bring rich colour without overwhelming your warmth.</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Amber, rust, and olive — your signature accents.</div>
        </div>
        <div class="tooltip-trigger card" style="position:relative;">
          <div style="font-size:24px;margin-bottom:8px;">⚜️</div>
          <div class="fi-title">Warm metals</div>
          <div class="fi-desc" style="font-size:14px;">Gold, rose gold, brass, and copper. Avoid silver, platinum, or chrome.</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Gold, brass, copper — your metals.</div>
        </div>
        <div class="tooltip-trigger card" style="position:relative;">
          <div style="font-size:24px;margin-bottom:8px;">🌿</div>
          <div class="fi-title">Embrace richer tones</div>
          <div class="fi-desc" style="font-size:14px;">You can wear deeper, richer warm colours than other springs — don't be afraid of amber, rust, and warm olive.</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Embrace richness and depth in warm colours.</div>
        </div>
      </div>
      <div class="outfit-grid" style="margin-bottom:20px;">
        <div class="tooltip-trigger outfit-card" style="position:relative;">
          <div class="outfit-top" style="background:linear-gradient(145deg,#D4A843,#C06030);">🌾</div>
          <div class="outfit-body"><div class="outfit-occasion">Unisex Look</div><div class="outfit-name">Warm Earth</div><div class="outfit-items">Camel jacket · Cream base · Tan trousers · Gold accessories · Brown leather boots</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">A versatile, warm, and earthy unisex outfit.</div>
        </div>
        <div class="tooltip-trigger outfit-card" style="position:relative;">
          <div class="outfit-top" style="background:linear-gradient(145deg,#E8855A,#C06030);">🍊</div>
          <div class="outfit-body"><div class="outfit-occasion">Rich Accent</div><div class="outfit-name">Amber Layer</div><div class="outfit-items">Amber or rust sweater/hoodie · Warm sand jeans · Gold chain · Tan trainers</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">A warm, rich accent piece that pops perfectly.</div>
        </div>
      </div>
    </section>
  </div>

  <!-- CELEBRITIES (expanded with male examples) -->
  <section class="season-section-alt">
    <span class="lbl" style="color:#B85A38;">✦ Famous Warm Springs</span>
    <div class="h2" style="margin-bottom:36px;">You're in great company</div>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(180px,1fr));gap:24px;">
      {{-- celebrity cards with tooltips --}}
      <div class="tooltip-trigger celeb-card" style="position:relative;">
        <div class="celeb-avatar" style="background:#D4A843;">🌟</div>
        <div class="celeb-name">Jessica Alba</div>
        <div class="celeb-note">Warm golden depth (she/her)</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her warm, golden features are classic Warm Spring.</div>
      </div>
      <div class="tooltip-trigger celeb-card" style="position:relative;">
        <div class="celeb-avatar" style="background:#C8A060;">💃</div>
        <div class="celeb-name">Jennifer Lopez</div>
        <div class="celeb-note">Rich warm colouring (she/her)</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her rich, golden warmth defines Warm Spring.</div>
      </div>
      <div class="tooltip-trigger celeb-card" style="position:relative;">
        <div class="celeb-avatar" style="background:#C06030;">🎵</div>
        <div class="celeb-name">Beyoncé</div>
        <div class="celeb-note">Deep warm spring (she/her)</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her deep golden colouring is Warm Spring.</div>
      </div>
      <div class="tooltip-trigger celeb-card" style="position:relative;">
        <div class="celeb-avatar" style="background:#B8860B;">🏆</div>
        <div class="celeb-name">Halle Berry</div>
        <div class="celeb-note">Warm golden features (she/her)</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her golden warmth is quintessential Warm Spring.</div>
      </div>
      <div class="tooltip-trigger celeb-card" style="position:relative;">
        <div class="celeb-avatar" style="background:#D4A843;">🎸</div>
        <div class="celeb-name">Matthew McConaughey</div>
        <div class="celeb-note">Warm golden depth (he/him)</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">His warm, sun-kissed features are Warm Spring.</div>
      </div>
      <div class="tooltip-trigger celeb-card" style="position:relative;">
        <div class="celeb-avatar" style="background:#C8A060;">🎭</div>
        <div class="celeb-name">Channing Tatum</div>
        <div class="celeb-note">Rich warm colouring (he/him)</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">His rich, warm features are a great Warm Spring example.</div>
      </div>
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
