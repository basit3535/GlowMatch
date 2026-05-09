@extends('layouts.app')

@section('content')
<div class="page" id="page-bodytypes">
  <div class="bodytype-hero">
    <span class="section-label">✦ Style by Shape</span>
    <h1 class="section-h2">Dress your body type with confidence</h1>
    <p style="font-size:16px;color:var(--muted);max-width:560px;line-height:1.75;margin-top:10px;">Body type styling isn't about hiding — it's about understanding your proportions and choosing clothes that work with them, not against them.</p>
  </div>

  <div class="bodytype-grid">
    <div class="bt-card">
      <div class="bt-top" style="background:linear-gradient(145deg,#FDF0EA,#F5D0BC);">⧖</div>
      <div class="bt-body">
        <div class="bt-name">Hourglass</div>
        <div class="bt-tagline">Balanced bust & hips, defined waist</div>
        <div class="bt-desc">Your proportions are naturally balanced with a clearly defined waist. Most silhouettes work for you — the key is clothes that acknowledge your waist.</div>
        <div class="bt-tips-title">What Works</div>
        <ul class="bt-tips">
          <li class="bt-tip">Wrap dresses and wrap tops that tie at the waist</li>
          <li class="bt-tip">Fitted jeans with tucked-in blouses</li>
          <li class="bt-tip">Belted coats and blazers</li>
          <li class="bt-tip">Bodycon midi dresses in your season colours</li>
          <li class="bt-tip">High-waisted bottoms of any style</li>
        </ul>
        <div class="bt-avoid-title">Avoid</div>
        <div class="bt-avoids"><span class="bt-avoid-pill">Boxy oversized</span><span class="bt-avoid-pill">Shapeless shifts</span><span class="bt-avoid-pill">Very baggy trousers</span></div>
      </div>
    </div>
    <div class="bt-card">
      <div class="bt-top" style="background:linear-gradient(145deg,#F5F0E8,#E8D4B8);">🍐</div>
      <div class="bt-body">
        <div class="bt-name">Pear</div>
        <div class="bt-tagline">Hips wider than shoulders</div>
        <div class="bt-desc">Your hips and thighs are your widest point. Balance your silhouette by drawing attention upward with detail and colour on your top half.</div>
        <div class="bt-tips-title">What Works</div>
        <ul class="bt-tips">
          <li class="bt-tip">Off-shoulder and boat-neck tops</li>
          <li class="bt-tip">A-line skirts that skim over hips</li>
          <li class="bt-tip">Bold statement necklaces and earrings</li>
          <li class="bt-tip">Dark bottoms in your deep season shades</li>
          <li class="bt-tip">Structured jackets to add shoulder width</li>
        </ul>
        <div class="bt-avoid-title">Avoid</div>
        <div class="bt-avoids"><span class="bt-avoid-pill">Tapered trousers</span><span class="bt-avoid-pill">Clingy skirts</span><span class="bt-avoid-pill">Hip pockets</span></div>
      </div>
    </div>
    <div class="bt-card">
      <div class="bt-top" style="background:linear-gradient(145deg,#FDF8F0,#F0E0C8);">🍎</div>
      <div class="bt-body">
        <div class="bt-name">Apple</div>
        <div class="bt-tagline">Fuller midsection, slim legs</div>
        <div class="bt-desc">Your shoulders and hips are similar in width with a fuller midsection. Create vertical lines and draw attention to your great legs and décolletage.</div>
        <div class="bt-tips-title">What Works</div>
        <ul class="bt-tips">
          <li class="bt-tip">Empire-waist dresses that skim the middle</li>
          <li class="bt-tip">V-necklines to elongate the upper body</li>
          <li class="bt-tip">Flowy tops in your season's lighter shades</li>
          <li class="bt-tip">Straight-leg and wide-leg trousers</li>
          <li class="bt-tip">Longline cardigans and open-front jackets</li>
        </ul>
        <div class="bt-avoid-title">Avoid</div>
        <div class="bt-avoids"><span class="bt-avoid-pill">Tight waistbands</span><span class="bt-avoid-pill">Belted at waist</span><span class="bt-avoid-pill">Crop tops</span></div>
      </div>
    </div>
    <div class="bt-card">
      <div class="bt-top" style="background:linear-gradient(145deg,#EEF0F5,#D8DCE8);">▭</div>
      <div class="bt-body">
        <div class="bt-name">Rectangle</div>
        <div class="bt-tagline">Similar shoulder, waist & hip width</div>
        <div class="bt-desc">Your body is straight up and down with little waist definition. Create the illusion of curves with strategic layering, texture, and colour blocking.</div>
        <div class="bt-tips-title">What Works</div>
        <ul class="bt-tips">
          <li class="bt-tip">Peplum tops and ruffled blouses for volume</li>
          <li class="bt-tip">Belted outfits to create waist definition</li>
          <li class="bt-tip">Wrap dresses to suggest an hourglass shape</li>
          <li class="bt-tip">Cropped jackets with full skirts</li>
          <li class="bt-tip">Two-tone outfits with lighter top and darker bottom</li>
        </ul>
        <div class="bt-avoid-title">Avoid</div>
        <div class="bt-avoids"><span class="bt-avoid-pill">Shapeless shifts</span><span class="bt-avoid-pill">Straight cuts</span><span class="bt-avoid-pill">Boxy blazers</span></div>
      </div>
    </div>
    <div class="bt-card">
      <div class="bt-top" style="background:linear-gradient(145deg,#EAF0F8,#C8D8EC);">▽</div>
      <div class="bt-body">
        <div class="bt-name">Inverted Triangle</div>
        <div class="bt-tagline">Broad shoulders, narrower hips</div>
        <div class="bt-desc">Your shoulders are your widest point. Create balance by adding visual volume below the waist and softening the shoulder line.</div>
        <div class="bt-tips-title">What Works</div>
        <ul class="bt-tips">
          <li class="bt-tip">Wide-leg trousers and full skirts</li>
          <li class="bt-tip">A-line and fit-and-flare dresses</li>
          <li class="bt-tip">Bold patterns and colour on the lower half</li>
          <li class="bt-tip">V-necks to soften the shoulder line</li>
          <li class="bt-tip">High-waisted styles to draw the eye to the waist</li>
        </ul>
        <div class="bt-avoid-title">Avoid</div>
        <div class="bt-avoids"><span class="bt-avoid-pill">Padded shoulders</span><span class="bt-avoid-pill">Boat necks</span><span class="bt-avoid-pill">Skinny jeans</span></div>
      </div>
    </div>
  </div>

  <!-- Interactive Dress-Up Guide -->
  <section class="dressup-section">
    <span class="section-label">✦ Styling Guide</span>
    <h2 class="section-h2">Choose your shape</h2>
    <div class="dressup-grid">
      <div class="dressup-list" id="dl">
        <div class="dl-item active" onclick="selectDressup(this,'hourglass')"><div class="dl-icon">⧖</div><div><div class="dl-name">Hourglass</div><div class="dl-sub">Balanced & defined</div></div></div>
        <div class="dl-item" onclick="selectDressup(this,'pear')"><div class="dl-icon">🍐</div><div><div class="dl-name">Pear</div><div class="dl-sub">Curvy lower half</div></div></div>
        <div class="dl-item" onclick="selectDressup(this,'apple')"><div class="dl-icon">🍎</div><div><div class="dl-name">Apple</div><div class="dl-sub">Fuller midsection</div></div></div>
        <div class="dl-item" onclick="selectDressup(this,'rectangle')"><div class="dl-icon">▭</div><div><div class="dl-name">Rectangle</div><div class="dl-sub">Straight silhouette</div></div></div>
        <div class="dl-item" onclick="selectDressup(this,'inverted')"><div class="dl-icon">▽</div><div><div class="dl-name">Inverted Triangle</div><div class="dl-sub">Broad shoulders</div></div></div>
      </div>
      <div class="dressup-preview">
        <div class="dp-top" style="background:linear-gradient(145deg,#FDF0EA,#F5D0BC);" id="dp-img">⧖</div>
        <div class="dp-body">
          <div class="dp-title" id="dp-title">Hourglass Shape Tips</div>
          <div class="dp-tips" id="dp-tips">
            <div class="dp-tip"><span>✦</span>Wrap dresses are your perfect match — they define your waist naturally</div>
            <div class="dp-tip"><span>✦</span>Fitted blazers cinched at the waist look incredible</div>
            <div class="dp-tip"><span>✦</span>High-waisted bottoms of any style are your friend</div>
            <div class="dp-tip"><span>✦</span>Avoid boxy styles that hide your shape</div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
