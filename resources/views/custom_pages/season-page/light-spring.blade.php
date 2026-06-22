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
  <section class="season-page-hero" style="background:linear-gradient(145deg,#FAE8D0,#F5D4A8,#EDBA80);color:#3C1800;">
    <div>
      <div class="sp-eyebrow">
        <div class="sp-line" style="background:#C97B3A;"></div>
        <span class="sp-season-type" style="color:#C97B3A;">🌸 Spring · Warm · Light</span>
      </div>
      <h1 class="sp-title" style="font-size:clamp(52px,7vw,88px);">Light Spring</h1>
      <div class="sp-tagline" style="color:#3C180066;">"Soft as morning light, warm as sunshine"</div>
      <p class="sp-desc" style="color:#3C180088;">Light Spring is the most delicate and ethereal of all spring types. Your natural colouring is light, warm, and softly luminous — think golden hour, peach blossoms, and warm cream.</p>
      <div class="sp-palette-preview">
        {{-- tooltips on preview swatches --}}
        <div class="tooltip-trigger">
          <div class="sp-swatch" style="background:#FFD8A0;border:2.5px solid rgba(255,255,255,.25);"></div>
          <div class="tooltip-box">#FFD8A0 · Peach</div>
        </div>
        <div class="tooltip-trigger">
          <div class="sp-swatch" style="background:#F5C090;border:2.5px solid rgba(255,255,255,.25);"></div>
          <div class="tooltip-box">#F5C090 · Warm Apricot</div>
        </div>
        <div class="tooltip-trigger">
          <div class="sp-swatch" style="background:#E8A870;border:2.5px solid rgba(255,255,255,.25);"></div>
          <div class="tooltip-box">#E8A870 · Golden Peach</div>
        </div>
        <div class="tooltip-trigger">
          <div class="sp-swatch" style="background:#D4C080;border:2.5px solid rgba(255,255,255,.25);"></div>
          <div class="tooltip-box">#D4C080 · Warm Sand</div>
        </div>
        <div class="tooltip-trigger">
          <div class="sp-swatch" style="background:#C8B460;border:2.5px solid rgba(255,255,255,.25);"></div>
          <div class="tooltip-box">#C8B460 · Soft Gold</div>
        </div>
        <div class="tooltip-trigger">
          <div class="sp-swatch" style="background:#FAE8CC;border:2.5px solid rgba(255,255,255,.25);"></div>
          <div class="tooltip-box">#FAE8CC · Warm Cream</div>
        </div>
      </div>
      <div style="display:flex;gap:12px;flex-wrap:wrap;">
        <a class="btn btn-white" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
        <a class="btn btn-outline" style="color:#3C1800;border-color:#3C180044;" href="{{ route('show.custom_pages', ['slug' => 'test']) }}">Find My Season</a>
      </div>
    </div>
    <div class="sp-hero-visual">
      <div class="sp-visual-main" style="background:linear-gradient(145deg,#FFE4C4,#FFD0A0);">🌼</div>
      <div class="sp-visual-badges">
        {{-- tooltips on badges --}}
        <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">🌡️</div>
          <div><div class="sp-badge-title" style="color:#3C1800;">Warm Undertone</div><div class="sp-badge-sub" style="color:#3C1800;">Golden, peachy</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Your skin has a distinct golden or peachy warmth — never pink or cool.</div>
        </div>
        <div class="tooltip-trigger sp-badge" style="background:rgba(255,255,255,.12);">
          <div class="sp-badge-icon">☀️</div>
          <div><div class="sp-badge-title" style="color:#3C1800;">Light Value</div><div class="sp-badge-sub" style="color:#3C1800;">Pale, soft depth</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Your overall colouring is light and delicate — you look best in soft, pale shades.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- PALETTE (unisex) -->
  <section class="season-section">
    <span class="lbl" style="color:#C97B3A;">✦ Your Colour Palette</span>
    <div class="h2" style="margin-bottom:12px;">Best colours for Light Spring</div>
    <p class="body-text" style="max-width:560px;margin-bottom:36px;">Your palette is warm, light, and delicate. Think peaches, golden creams, warm corals, and soft warm yellows. Nothing too intense — keep saturation low and warmth high.</p>
    <div class="two-col">
      <div>
        <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">Power Shades</div>
        <div class="color-grid" style="margin-bottom:28px;">
          {{-- tooltips on each swatch --}}
          <div class="tooltip-trigger cswatch cswatch-lg" style="background:#FFD8A0;" title="#FFD8A0">
            <div class="tooltip-box">#FFD8A0 · Peach</div>
          </div>
          <div class="tooltip-trigger cswatch cswatch-lg" style="background:#F5C090;" title="#F5C090">
            <div class="tooltip-box">#F5C090 · Warm Apricot</div>
          </div>
          <div class="tooltip-trigger cswatch cswatch-lg" style="background:#E8A870;" title="#E8A870">
            <div class="tooltip-box">#E8A870 · Golden Peach</div>
          </div>
          <div class="tooltip-trigger cswatch cswatch-lg" style="background:#D4C080;" title="#D4C080">
            <div class="tooltip-box">#D4C080 · Warm Sand</div>
          </div>
          <div class="tooltip-trigger cswatch cswatch-lg" style="background:#C8B460;" title="#C8B460">
            <div class="tooltip-box">#C8B460 · Soft Gold</div>
          </div>
          <div class="tooltip-trigger cswatch cswatch-lg" style="background:#FAE8CC;" title="#FAE8CC">
            <div class="tooltip-box">#FAE8CC · Warm Cream</div>
          </div>
          <div class="tooltip-trigger cswatch cswatch-lg" style="background:#F0C8A0;" title="#F0C8A0">
            <div class="tooltip-box">#F0C8A0 · Soft Coral</div>
          </div>
          <div class="tooltip-trigger cswatch cswatch-lg" style="background:#E0A878;" title="#E0A878">
            <div class="tooltip-box">#E0A878 · Light Terracotta</div>
          </div>
        </div>
        <div class="swatch-strip" style="height:14px;border-radius:7px;margin-bottom:8px;">
          <span style="background:#FFD8A0;"></span>
          <span style="background:#F5C090;"></span>
          <span style="background:#E8A870;"></span>
          <span style="background:#D4C080;"></span>
          <span style="background:#C8B460;"></span>
          <span style="background:#FAE8CC;"></span>
          <span style="background:#F0C8A0;"></span>
          <span style="background:#E0A878;"></span>
        </div>
        <div style="font-size:12px;color:#B0A49E;">Your complete spectrum — from light to dark</div>
      </div>
      <div>
        <div style="font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#7A6E68;margin-bottom:16px;">Neutrals & Staples</div>
        <div class="color-grid" style="margin-bottom:20px;">
          <div class="tooltip-trigger cswatch" style="background:#F5E8D8;">
            <div class="tooltip-box">#F5E8D8 · Warm Ivory</div>
          </div>
          <div class="tooltip-trigger cswatch" style="background:#E8D4C0;">
            <div class="tooltip-box">#E8D4C0 · Peach Beige</div>
          </div>
          <div class="tooltip-trigger cswatch" style="background:#D4C0A8;">
            <div class="tooltip-box">#D4C0A8 · Soft Camel</div>
          </div>
          <div class="tooltip-trigger cswatch" style="background:#C0A890;">
            <div class="tooltip-box">#C0A890 · Warm Taupe</div>
          </div>
        </div>
        <p class="body-text" style="font-size:14px;">Warm ivory, peach-beige, and soft camel are your perfect neutrals — never harsh white or cool grey.</p>
      </div>
    </div>
  </section>

  <!-- YOUR FEATURES (unisex) -->
  <section class="season-section-alt">
    <span class="lbl" style="color:#C97B3A;">✦ Typical Features</span>
    <div class="h2" style="margin-bottom:40px;">Do you look like a Light Spring?</div>
    <div class="three-col">
      <div class="tooltip-trigger card" style="position:relative;">
        <div style="font-size:32px;margin-bottom:14px;">🧴</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skin</div>
        <div class="body-text" style="font-size:14px;">Fair to light skin with a warm, peachy or ivory undertone. Often has a golden warmth and may have light freckles. Skin can look washed out in cool tones.</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">Warm, peachy, and delicate — avoid anything cool or pink-toned.</div>
      </div>
      <div class="tooltip-trigger card" style="position:relative;">
        <div style="font-size:32px;margin-bottom:14px;">👁️</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Eyes</div>
        <div class="body-text" style="font-size:14px;">Light blue, light green, warm hazel, or golden brown. Often with warm, honey-coloured flecks. Eyes may appear almost transparent or watery in cool lighting.</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">Light, warm, and often flecked with gold — very expressive.</div>
      </div>
      <div class="tooltip-trigger card" style="position:relative;">
        <div style="font-size:32px;margin-bottom:14px;">💇</div>
        <div style="font-size:16px;font-weight:600;color:#2C2420;margin-bottom:8px;">Hair</div>
        <div class="body-text" style="font-size:14px;">Light golden blonde, strawberry blonde, warm ash blonde, or light golden brown. Natural highlights are common. Hair has a warm, luminous quality.</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:220px;">Light, warm, and naturally highlighted — often with a golden sheen.</div>
      </div>
    </div>
    <div style="margin-top:32px;padding:24px;background:#C97B3A14;border:1px solid #C97B3A33;border-radius:16px;">
      <div style="font-size:15px;font-weight:600;color:#2C2420;margin-bottom:6px;">✦ The Light Spring glow effect</div>
      <div class="body-text" style="font-size:14px;">When a Light Spring wears their season colours, their skin appears to glow with a warm, peachy luminosity. The colours seem to blend into their natural colouring as if they were born wearing them.</div>
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
      <span class="lbl" style="color:#C97B3A;">✦ Makeup Guide (Women)</span>
      <div class="h2" style="margin-bottom:12px;">Your perfect makeup shades</div>
      <p class="body-text" style="max-width:560px;margin-bottom:36px;">Keep everything soft, warm, and light. Heavy or dark colours will overpower your delicate natural colouring.</p>
      <div class="makeup-row">
        {{-- makeup items with tooltips --}}
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#FDDBB4;"></div>
          <div class="makeup-label">Warm Ivory</div>
          <div class="makeup-type">Foundation</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm, peachy base that matches your natural glow.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#FFB070;"></div>
          <div class="makeup-label">Warm Peach</div>
          <div class="makeup-type">Blush</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Soft peach blush that adds a healthy warmth.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#E89060;"></div>
          <div class="makeup-label">Warm Coral</div>
          <div class="makeup-type">Lips</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Your perfect lip — warm, coral, and soft.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#D4A843;"></div>
          <div class="makeup-label">Golden Bronze</div>
          <div class="makeup-type">Eyes</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm, golden shadow that enhances your light features.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#F0C898;"></div>
          <div class="makeup-label">Peachy Nude</div>
          <div class="makeup-type">Lips</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Soft, peachy nude for everyday wear.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#C8A870;"></div>
          <div class="makeup-label">Warm Taupe</div>
          <div class="makeup-type">Eye shadow</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm, soft taupe for subtle definition.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#E8A068;"></div>
          <div class="makeup-label">Salmon</div>
          <div class="makeup-type">Blush</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm salmon blush for a sunny flush.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#D4B860;"></div>
          <div class="makeup-label">Champagne</div>
          <div class="makeup-type">Highlighter</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm champagne glow — never silver or icy.</div>
        </div>
      </div>
      <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
        <div class="tooltip-trigger card" style="position:relative;">
          <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Foundation Undertone</div>
          <div class="body-text" style="font-size:14px;">Choose foundations with a warm, peachy undertone. Avoid anything with pink or cool undertones — they will make you look dull and flat.</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Look for "warm", "golden", or "peachy" — never "cool" or "neutral".</div>
        </div>
        <div class="tooltip-trigger card" style="position:relative;">
          <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Key Makeup Rule</div>
          <div class="body-text" style="font-size:14px;">Keep all makeup soft and blended. Hard lines and dark colours overwhelm your natural delicacy. Think "lit from within" rather than made-up.</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Soft, blended, and luminous — never heavy or harsh.</div>
        </div>
      </div>
    </section>

    <!-- Wardrobe Tips (Women) -->
    <section class="season-section-alt">
      <div class="two-col">
        <div>
          <span class="lbl" style="color:#C97B3A;">✦ Wardrobe Tips (Women)</span>
          <div class="h2" style="margin-bottom:20px;">How to dress as a Light Spring woman</div>
          <div class="feature-row">
            <div class="tooltip-trigger feature-item" style="position:relative;">
              <div class="fi-num">01</div>
              <div><div class="fi-title">Embrace warm, peachy tones</div><div class="fi-desc">Your best base colours are warm creams, peaches, and soft golden tans. Use these in tops and blouses closest to your face.</div></div>
              <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">These warm tones bring out your natural glow.</div>
            </div>
            <div class="tooltip-trigger feature-item" style="position:relative;">
              <div class="fi-num">02</div>
              <div><div class="fi-title">Avoid pure white</div><div class="fi-desc">Bright white is too stark. Opt for warm ivory, cream, or off-white which blends with your warm undertone.</div></div>
              <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Warm off-whites harmonize with your skin — stark white washes you out.</div>
            </div>
            <div class="tooltip-trigger feature-item" style="position:relative;">
              <div class="fi-num">03</div>
              <div><div class="fi-title">Add warmth with accessories</div><div class="fi-desc">Gold jewellery, warm wooden pieces, and camel-toned accessories all complement your golden warmth perfectly.</div></div>
              <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Gold and warm tones are your best metallic accents.</div>
            </div>
            <div class="tooltip-trigger feature-item" style="position:relative;">
              <div class="fi-num">04</div>
              <div><div class="fi-title">Keep patterns light</div><div class="fi-desc">Florals in warm tones, soft watercolour prints, and delicate designs suit your ethereal quality.</div></div>
              <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Delicate, soft patterns match your light, airy essence.</div>
            </div>
          </div>
        </div>
        <div>
          <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">✦ Colours to Avoid</span>
          <div class="avoid-grid">
            {{-- avoid cards with tooltips --}}
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#000080;"></div>
              <div class="avoid-info"><div class="avoid-name">Navy Blue</div><div class="avoid-why">Too cool and harsh</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Navy is too dark and cool — opt for warm navy or teal.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#808080;"></div>
              <div class="avoid-info"><div class="avoid-name">Cool Grey</div><div class="avoid-why">Drains your warmth</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Cool grey steals your warmth — choose warm taupe or beige.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#FF1493;"></div>
              <div class="avoid-info"><div class="avoid-name">Fuchsia</div><div class="avoid-why">Too saturated and cool</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Fuchsia is too cool and bright — choose coral or warm pink.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#000000;"></div>
              <div class="avoid-info"><div class="avoid-name">Black</div><div class="avoid-why">Creates jarring contrast</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Black is too harsh — choose warm chocolate or charcoal.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#8B0000;"></div>
              <div class="avoid-info"><div class="avoid-name">Dark Red</div><div class="avoid-why">Too deep and cool</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Dark red is too heavy — choose warm coral or rust.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#4B0082;"></div>
              <div class="avoid-info"><div class="avoid-name">Purple</div><div class="avoid-why">Clashes with warm undertone</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Purple is too cool — choose warm lavender or mauve.</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Outfit Inspiration (Women) -->
    <section class="season-section">
      <span class="lbl" style="color:#C97B3A;">✦ Outfit Inspiration (Women)</span>
      <div class="h2" style="margin-bottom:36px;">Looks built for Light Spring women</div>
      <div class="outfit-grid">
        <div class="tooltip-trigger outfit-card" style="position:relative;">
          <div class="outfit-top" style="background:linear-gradient(145deg,#FAE8CC,#F5D4A8);">🌿</div>
          <div class="outfit-body"><div class="outfit-occasion">Everyday</div><div class="outfit-name">Golden Hour</div><div class="outfit-items">Warm ivory linen top · Camel wide-leg trousers · Gold sandals · Woven bag</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Effortless, warm, and luminous — your everyday glow.</div>
        </div>
        <div class="tooltip-trigger outfit-card" style="position:relative;">
          <div class="outfit-top" style="background:linear-gradient(145deg,#FFD8A0,#E8C080);">🌸</div>
          <div class="outfit-body"><div class="outfit-occasion">Weekend</div><div class="outfit-name">Peach Bloom</div><div class="outfit-items">Floral blouse in peach and cream · Light denim · Tan mules · Dainty gold earrings</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Delicate, romantic, and perfectly spring-like.</div>
        </div>
        <div class="tooltip-trigger outfit-card" style="position:relative;">
          <div class="outfit-top" style="background:linear-gradient(145deg,#F5C090,#E8A870);">✨</div>
          <div class="outfit-body"><div class="outfit-occasion">Evening</div><div class="outfit-name">Warm Gold</div><div class="outfit-items">Rust-orange midi dress · Strappy gold heels · Small gold clutch · Delicate necklace</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Golden and glowing — perfect for a warm evening out.</div>
        </div>
      </div>
    </section>
  </div>

  <!-- MEN CONTENT -->
  <div id="men-content" class="gender-content">
    <!-- Grooming & Skincare (Men) -->
    <section class="season-section">
      <span class="lbl" style="color:#C97B3A;">✦ Grooming & Skincare (Men)</span>
      <div class="h2" style="margin-bottom:12px;">Grooming for the Light Spring man</div>
      <p class="body-text" style="max-width:560px;margin-bottom:36px;">Keep grooming light, warm, and fresh. Avoid heavy products or anything that adds darkness to your features.</p>
      <div class="makeup-row">
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#FDDBB4;"></div>
          <div class="makeup-label">Warm Tinted Moisturizer</div>
          <div class="makeup-type">Skincare</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Light, warm-tinted hydration that enhances your skin.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#E8C8A8;"></div>
          <div class="makeup-label">Peachy Concealer</div>
          <div class="makeup-type">Concealer (if needed)</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm, peachy concealer that blends naturally.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#FFD8A0;"></div>
          <div class="makeup-label">Golden SPF</div>
          <div class="makeup-type">Sunscreen</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Tinted SPF with a warm, golden finish.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#D4A060;"></div>
          <div class="makeup-label">Warm Honey Beard Oil</div>
          <div class="makeup-type">Facial hair care</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm, honey-scented oil for a soft beard.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#E8BC70;"></div>
          <div class="makeup-label">Soft Gold Pomade</div>
          <div class="makeup-type">Hair Styling</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Light, golden pomade for a natural hold.</div>
        </div>
        <div class="tooltip-trigger makeup-item">
          <div class="makeup-swatch" style="background:#C8A060;"></div>
          <div class="makeup-label">Warm Taupe Brow Gel</div>
          <div class="makeup-type">Brows</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:170px;">Warm taupe to define brows without darkening.</div>
        </div>
      </div>
      <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
        <div class="tooltip-trigger card" style="position:relative;">
          <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Skincare Focus</div>
          <div class="body-text" style="font-size:14px;">Brightening and hydration. Use vitamin C and gentle exfoliation to keep your naturally luminous skin glowing. Avoid heavy, matte finishes.</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Keep it light and glowing — never heavy or dull.</div>
        </div>
        <div class="tooltip-trigger card" style="position:relative;">
          <div style="font-size:14px;font-weight:600;color:#2C2420;margin-bottom:8px;">Facial Hair</div>
          <div class="body-text" style="font-size:14px;">Keep facial hair light and well-groomed. Use warm honey or golden beard oils. Avoid dark, heavy beards that contrast too sharply with your fair skin.</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Soft, light facial hair complements your delicate colouring.</div>
        </div>
      </div>
    </section>

    <!-- Wardrobe Tips (Men) -->
    <section class="season-section-alt">
      <div class="two-col">
        <div>
          <span class="lbl" style="color:#C97B3A;">✦ Wardrobe Tips (Men)</span>
          <div class="h2" style="margin-bottom:20px;">How to dress as a Light Spring man</div>
          <div class="feature-row">
            <div class="tooltip-trigger feature-item" style="position:relative;">
              <div class="fi-num">01</div>
              <div><div class="fi-title">Embrace light warm neutrals</div><div class="fi-desc">Warm cream, camel, and soft tan are your best suit and trouser colours. Avoid charcoal and navy.</div></div>
              <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Light, warm neutrals are your foundation — they enhance your natural warmth.</div>
            </div>
            <div class="tooltip-trigger feature-item" style="position:relative;">
              <div class="fi-num">02</div>
              <div><div class="fi-title">Soft warm pastels as accents</div><div class="fi-desc">Peach, warm coral, and soft yellow in polos, shirts, or ties add the right amount of spring energy.</div></div>
              <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">These accents bring life without overpowering your light features.</div>
            </div>
            <div class="tooltip-trigger feature-item" style="position:relative;">
              <div class="fi-num">03</div>
              <div><div class="fi-title">Gold and light leather</div><div class="fi-desc">Gold watches, tan leather shoes and belts, and light wood accents complement your warm colouring perfectly.</div></div>
              <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Warm metals and leathers tie your look together.</div>
            </div>
            <div class="tooltip-trigger feature-item" style="position:relative;">
              <div class="fi-num">04</div>
              <div><div class="fi-title">Avoid dark and cool colours</div><div class="fi-desc">No black, navy, charcoal grey, or cool pastels. They will make you look washed out and dull.</div></div>
              <div class="tooltip-box tooltip-right" style="white-space:normal;max-width:200px;">Dark and cool colours drain your warmth — stick to light and warm.</div>
            </div>
          </div>
        </div>
        <div>
          <span class="lbl" style="color:#7A6E68;margin-bottom:16px;display:block;">✦ Colours to Avoid</span>
          <div class="avoid-grid">
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#000080;"></div>
              <div class="avoid-info"><div class="avoid-name">Navy Blue</div><div class="avoid-why">Too cool and harsh</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Navy is too dark and cool — choose warm navy or teal.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#808080;"></div>
              <div class="avoid-info"><div class="avoid-name">Cool Grey</div><div class="avoid-why">Drains your warmth</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Cool grey steals your warmth — choose warm taupe or beige.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#000000;"></div>
              <div class="avoid-info"><div class="avoid-name">Black</div><div class="avoid-why">Creates jarring contrast</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Black is too harsh — choose warm chocolate or charcoal.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#8B0000;"></div>
              <div class="avoid-info"><div class="avoid-name">Dark Red</div><div class="avoid-why">Too deep and cool</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Dark red is too heavy — choose warm coral or rust.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#4B0082;"></div>
              <div class="avoid-info"><div class="avoid-name">Purple</div><div class="avoid-why">Clashes with warm undertone</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Purple is too cool — choose warm lavender or mauve.</div>
            </div>
            <div class="tooltip-trigger avoid-card" style="position:relative;">
              <div class="avoid-swatch" style="background:#FF1493;"></div>
              <div class="avoid-info"><div class="avoid-name">Fuchsia</div><div class="avoid-why">Too saturated and cool</div></div>
              <div class="tooltip-box tooltip-left" style="white-space:normal;max-width:160px;">Fuchsia is too cool and bright — choose coral or warm pink.</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Outfit Inspiration (Men) -->
    <section class="season-section">
      <span class="lbl" style="color:#C97B3A;">✦ Outfit Inspiration (Men)</span>
      <div class="h2" style="margin-bottom:36px;">Looks built for Light Spring men</div>
      <div class="outfit-grid">
        <div class="tooltip-trigger outfit-card" style="position:relative;">
          <div class="outfit-top" style="background:linear-gradient(145deg,#FAE8CC,#F5D4A8);">🌿</div>
          <div class="outfit-body"><div class="outfit-occasion">Business</div><div class="outfit-name">Warm Camel Suit</div><div class="outfit-items">Camel blazer · Cream trousers · Light blue shirt · Gold watch · Tan loafers</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Warm, sophisticated, and perfectly Light Spring.</div>
        </div>
        <div class="tooltip-trigger outfit-card" style="position:relative;">
          <div class="outfit-top" style="background:linear-gradient(145deg,#FFD8A0,#E8C080);">🌸</div>
          <div class="outfit-body"><div class="outfit-occasion">Smart Casual</div><div class="outfit-name">Peachy Pastel</div><div class="outfit-items">Warm coral polo · Cream chinos · Tan leather sneakers · Light gold accessories</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Effortlessly warm and stylish — a modern spring look.</div>
        </div>
        <div class="tooltip-trigger outfit-card" style="position:relative;">
          <div class="outfit-top" style="background:linear-gradient(145deg,#F5C090,#E8A870);">✨</div>
          <div class="outfit-body"><div class="outfit-occasion">Weekend</div><div class="outfit-name">Golden Hour</div><div class="outfit-items">Soft yellow sweater · Light beige trousers · Brown leather boots · Woven belt</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">Cosy, warm, and relaxed — your weekend uniform.</div>
        </div>
      </div>
    </section>
  </div>

  <!-- GENDER-NEUTRAL CONTENT -->
  <div id="neutral-content" class="gender-content">
    <section class="season-section">
      <span class="lbl" style="color:#C97B3A;">✦ Style for Everyone</span>
      <div class="h2" style="margin-bottom:12px;">Gender-neutral Light Spring tips</div>
      <p class="body-text" style="max-width:560px;margin-bottom:36px;">Light Spring is about soft warmth, gentle luminosity, and delicate harmony. These principles work for any gender expression.</p>
      <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:20px;margin-bottom:32px;">
        <div class="tooltip-trigger card" style="position:relative;">
          <div style="font-size:24px;margin-bottom:8px;">☀️</div>
          <div class="fi-title">Light warm neutrals</div>
          <div class="fi-desc" style="font-size:14px;">Warm cream, soft camel, and peachy beige are your foundation. Avoid stark white or dark greys.</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Your neutrals should be warm and light — never cold or dark.</div>
        </div>
        <div class="tooltip-trigger card" style="position:relative;">
          <div style="font-size:24px;margin-bottom:8px;">🌸</div>
          <div class="fi-title">Soft pastel accents</div>
          <div class="fi-desc" style="font-size:14px;">Peach, soft coral, butter yellow, and warm mint bring life without overpowering your delicate features.</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Delicate pastels add just the right amount of spring energy.</div>
        </div>
        <div class="tooltip-trigger card" style="position:relative;">
          <div style="font-size:24px;margin-bottom:8px;">⚜️</div>
          <div class="fi-title">Metallic finishes</div>
          <div class="fi-desc" style="font-size:14px;">Gold, rose gold, and light champagne. Avoid silver, white gold, or dark metals.</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm metals enhance your golden undertone — silver is too cool.</div>
        </div>
        <div class="tooltip-trigger card" style="position:relative;">
          <div style="font-size:24px;margin-bottom:8px;">🍃</div>
          <div class="fi-title">Keep it light</div>
          <div class="fi-desc" style="font-size:14px;">The overall value of your outfit should be light to medium. Dark colours will weigh you down.</div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Lightness is key — dark tones overwhelm your delicate features.</div>
        </div>
      </div>
      <div class="outfit-grid" style="margin-bottom:20px;">
        <div class="tooltip-trigger outfit-card" style="position:relative;">
          <div class="outfit-top" style="background:linear-gradient(145deg,#FAE8CC,#F5D4A8);">🌿</div>
          <div class="outfit-body"><div class="outfit-occasion">Unisex Look</div><div class="outfit-name">Warm Cream</div><div class="outfit-items">Cream linen shirt or blouse · Tan trousers or shorts · Woven sandals · Gold jewellery</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">A light, warm, and effortlessly elegant unisex outfit.</div>
        </div>
        <div class="tooltip-trigger outfit-card" style="position:relative;">
          <div class="outfit-top" style="background:linear-gradient(145deg,#FFD8A0,#E8C080);">🌸</div>
          <div class="outfit-body"><div class="outfit-occasion">Soft Accent</div><div class="outfit-name">Peachy Layer</div><div class="outfit-items">Soft peach cardigan or jacket over cream base · Tan accessories · Gold details</div></div>
          <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:200px;">A warm, soft layer that adds personality without overwhelming.</div>
        </div>
      </div>
    </section>
  </div>

  <!-- CELEBRITIES (expanded with male and non-binary examples) -->
  <section class="season-section-alt">
    <span class="lbl" style="color:#C97B3A;">✦ Famous Light Springs</span>
    <div class="h2" style="margin-bottom:36px;">You're in great company</div>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(180px,1fr));gap:24px;">
      {{-- celebrity cards with tooltips --}}
      <div class="tooltip-trigger celeb-card" style="position:relative;">
        <div class="celeb-avatar" style="background:#FFD8A0;">🎵</div>
        <div class="celeb-name">Taylor Swift</div>
        <div class="celeb-note">Light warm colouring (she/her)</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her fair, warm colouring is classic Light Spring.</div>
      </div>
      <div class="tooltip-trigger celeb-card" style="position:relative;">
        <div class="celeb-avatar" style="background:#F5C090;">🌟</div>
        <div class="celeb-name">Reese Witherspoon</div>
        <div class="celeb-note">Golden spring warmth (she/her)</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Peachy skin and warm blonde hair — a perfect Light Spring.</div>
      </div>
      <div class="tooltip-trigger celeb-card" style="position:relative;">
        <div class="celeb-avatar" style="background:#FAE8CC;">🎬</div>
        <div class="celeb-name">Amanda Seyfried</div>
        <div class="celeb-note">Peachy fair skin (she/her)</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her fair, peachy skin and light eyes are Light Spring.</div>
      </div>
      <div class="tooltip-trigger celeb-card" style="position:relative;">
        <div class="celeb-avatar" style="background:#E8D4A0;">🎭</div>
        <div class="celeb-name">Scarlett Johansson</div>
        <div class="celeb-note">Warm light features (she/her)</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Warm golden tones and fair skin — a Light Spring icon.</div>
      </div>
      <div class="tooltip-trigger celeb-card" style="position:relative;">
        <div class="celeb-avatar" style="background:#FFD8A0;">🎸</div>
        <div class="celeb-name">Chris Evans</div>
        <div class="celeb-note">Warm light spring (he/him)</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">His warm, light colouring is pure Light Spring.</div>
      </div>
      <div class="tooltip-trigger celeb-card" style="position:relative;">
        <div class="celeb-avatar" style="background:#F5C090;">🎨</div>
        <div class="celeb-name">Anya Taylor-Joy</div>
        <div class="celeb-note">Ethereal light spring (she/her)</div>
        <div class="tooltip-box tooltip-bottom" style="white-space:normal;max-width:180px;">Her delicate, light features are a beautiful Light Spring match.</div>
      </div>
    </div>
  </section>

  <!-- NAV BETWEEN SEASONS -->
  <div style="padding:40px 6%;display:flex;justify-content:space-between;align-items:center;border-top:1px solid #E8DDD6;gap:20px;flex-wrap:wrap;">
    <a class="btn btn-outline" style="color:#2C2420;border-color:#E8DDD6;" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">← All Seasons</a>
    <div style="display:flex;gap:8px;flex-wrap:wrap;">
      <a class="btn btn-outline" style="color:#C97B3A;border-color:#C97B3A44;font-size:13px;" href="{{ route('show.seasons.custom_pages', ['slug' => 'true-spring']) }}">True Spring →</a>
      <a class="btn btn-outline" style="color:#C97B3A;border-color:#C97B3A44;font-size:13px;" href="{{ route('show.seasons.custom_pages', ['slug' => 'light-summer']) }}">Light Summer →</a>
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
