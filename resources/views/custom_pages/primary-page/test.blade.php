@extends('layouts.app')

@section('content')
   <div class="page" id="page-quiz">
  <div class="quiz-header">
    <span class="section-label">✦ Personal Colour & Style Analysis</span>
    <h1 class="section-h2">Find your colour season</h1>
    <p style="color:var(--muted);font-size:15px;margin-top:8px;">5 questions · Takes about 5 minutes · Free forever</p>
    <div class="quiz-progress">
      <div class="qp-step"><div class="qp-circle active" id="qc1">1</div><div class="qp-label">Skin Tone</div></div>
      <div class="qp-line" id="ql1"></div>
      <div class="qp-step"><div class="qp-circle" id="qc2">2</div><div class="qp-label">Undertone</div></div>
      <div class="qp-line" id="ql2"></div>
      <div class="qp-step"><div class="qp-circle" id="qc3">3</div><div class="qp-label">Eyes</div></div>
      <div class="qp-line" id="ql3"></div>
      <div class="qp-step"><div class="qp-circle" id="qc4">4</div><div class="qp-label">Hair</div></div>
      <div class="qp-line" id="ql4"></div>
      <div class="qp-step"><div class="qp-circle" id="qc5">5</div><div class="qp-label">Body Type</div></div>
    </div>
  </div>

  <div class="quiz-body">
    <!-- Q1 -->
    <div class="q-step active" id="q1">
      <div class="q-num">Question 1 of 5</div>
      <div class="q-question">What is your natural skin tone?</div>
      <div class="q-hint">Choose the option that best matches your complexion when you haven't been in the sun.</div>
      <div class="opt-grid">
        <div class="opt" onclick="qSelect(this,'skin','fair')"><div class="opt-circle" style="background:linear-gradient(135deg,#FDDBB4,#F5C89C);"></div><div class="opt-name">Fair</div><div class="opt-sub">Very light, may burn easily</div></div>
        <div class="opt" onclick="qSelect(this,'skin','light')"><div class="opt-circle" style="background:linear-gradient(135deg,#F0C089,#D4956A);"></div><div class="opt-name">Light</div><div class="opt-sub">Light to medium</div></div>
        <div class="opt" onclick="qSelect(this,'skin','medium')"><div class="opt-circle" style="background:linear-gradient(135deg,#C68642,#A0522D);"></div><div class="opt-name">Medium</div><div class="opt-sub">Warm beige or olive</div></div>
        <div class="opt" onclick="qSelect(this,'skin','tan')"><div class="opt-circle" style="background:linear-gradient(135deg,#8D5524,#6B3A1F);"></div><div class="opt-name">Tan</div><div class="opt-sub">Medium to deep</div></div>
        <div class="opt" onclick="qSelect(this,'skin','deep')"><div class="opt-circle" style="background:linear-gradient(135deg,#4A2508,#2C1A08);"></div><div class="opt-name">Deep</div><div class="opt-sub">Rich, dark complexion</div></div>
      </div>
      <div class="q-nav"><div></div><button class="btn-next-q" id="qn1" onclick="qGo(2)">Next Question →</button></div>
    </div>
    <!-- Q2 -->
    <div class="q-step" id="q2">
      <div class="q-num">Question 2 of 5</div>
      <div class="q-question">What is your skin's undertone?</div>
      <div class="q-hint">Check your inner wrist in natural light. What colour do your veins appear?</div>
      <div class="opt-grid">
        <div class="opt" onclick="qSelect(this,'undertone','warm')"><div class="opt-circle" style="background:linear-gradient(135deg,#FFD700,#FFA500);"></div><div class="opt-name">Warm</div><div class="opt-sub">Veins look greenish, gold suits you</div></div>
        <div class="opt" onclick="qSelect(this,'undertone','cool')"><div class="opt-circle" style="background:linear-gradient(135deg,#B0C4DE,#6A5ACD);"></div><div class="opt-name">Cool</div><div class="opt-sub">Veins look blue/purple, silver suits you</div></div>
        <div class="opt" onclick="qSelect(this,'undertone','neutral')"><div class="opt-circle" style="background:linear-gradient(135deg,#D2B48C,#BC9A6A);"></div><div class="opt-name">Neutral</div><div class="opt-sub">Can't tell, both metals work</div></div>
        <div class="opt" onclick="qSelect(this,'undertone','olive')"><div class="opt-circle" style="background:linear-gradient(135deg,#8FBC8F,#6B8E23);"></div><div class="opt-name">Olive</div><div class="opt-sub">Greenish-yellow undertone</div></div>
      </div>
      <div class="q-nav"><button class="btn-back-q" onclick="qGo(1)">← Back</button><button class="btn-next-q" id="qn2" onclick="qGo(3)">Next Question →</button></div>
    </div>
    <!-- Q3 -->
    <div class="q-step" id="q3">
      <div class="q-num">Question 3 of 5</div>
      <div class="q-question">What colour are your eyes?</div>
      <div class="q-hint">Select your natural eye colour — not what you'd like them to be!</div>
      <div class="opt-grid">
        <div class="opt" onclick="qSelect(this,'eyes','blue')"><div class="opt-circle" style="background:radial-gradient(circle,#6CA6CD,#4682B4,#1C3A6E);"></div><div class="opt-name">Blue</div></div>
        <div class="opt" onclick="qSelect(this,'eyes','green')"><div class="opt-circle" style="background:radial-gradient(circle,#8FBC8F,#3D7A47,#1B4A24);"></div><div class="opt-name">Green</div></div>
        <div class="opt" onclick="qSelect(this,'eyes','hazel')"><div class="opt-circle" style="background:radial-gradient(circle,#C8A96E,#8B6914,#4A3508);"></div><div class="opt-name">Hazel</div></div>
        <div class="opt" onclick="qSelect(this,'eyes','light-brown')"><div class="opt-circle" style="background:radial-gradient(circle,#C8905A,#9B5A24,#5C2A0A);"></div><div class="opt-name">Light Brown</div></div>
        <div class="opt" onclick="qSelect(this,'eyes','dark-brown')"><div class="opt-circle" style="background:radial-gradient(circle,#6B3A1F,#2C150A,#000);"></div><div class="opt-name">Dark Brown</div></div>
        <div class="opt" onclick="qSelect(this,'eyes','grey')"><div class="opt-circle" style="background:radial-gradient(circle,#B0B8C0,#7A8A94,#3A464E);"></div><div class="opt-name">Grey</div></div>
      </div>
      <div class="q-nav"><button class="btn-back-q" onclick="qGo(2)">← Back</button><button class="btn-next-q" id="qn3" onclick="qGo(4)">Next Question →</button></div>
    </div>
    <!-- Q4 -->
    <div class="q-step" id="q4">
      <div class="q-num">Question 4 of 5</div>
      <div class="q-question">What is your natural hair colour?</div>
      <div class="q-hint">Choose your untreated, natural shade — or what it was before any colouring.</div>
      <div class="opt-grid">
        <div class="opt" onclick="qSelect(this,'hair','blonde')"><div class="opt-circle" style="background:linear-gradient(135deg,#F5E0A0,#D4A843);"></div><div class="opt-name">Blonde</div><div class="opt-sub">Light to golden</div></div>
        <div class="opt" onclick="qSelect(this,'hair','auburn')"><div class="opt-circle" style="background:linear-gradient(135deg,#C67B4A,#8B3A1A);"></div><div class="opt-name">Auburn / Red</div><div class="opt-sub">Warm, reddish tones</div></div>
        <div class="opt" onclick="qSelect(this,'hair','light-brown')"><div class="opt-circle" style="background:linear-gradient(135deg,#A0724E,#6B4226);"></div><div class="opt-name">Light Brown</div><div class="opt-sub">Warm or ashy brown</div></div>
        <div class="opt" onclick="qSelect(this,'hair','dark-brown')"><div class="opt-circle" style="background:linear-gradient(135deg,#4A2C1A,#2C1810);"></div><div class="opt-name">Dark Brown</div><div class="opt-sub">Rich, deep brown</div></div>
        <div class="opt" onclick="qSelect(this,'hair','black')"><div class="opt-circle" style="background:linear-gradient(135deg,#2A2A2A,#080808);"></div><div class="opt-name">Black</div><div class="opt-sub">Warm or cool black</div></div>
        <div class="opt" onclick="qSelect(this,'hair','grey')"><div class="opt-circle" style="background:linear-gradient(135deg,#C8C8C8,#888888);"></div><div class="opt-name">Grey / White</div><div class="opt-sub">Silver or white</div></div>
      </div>
      <div class="q-nav"><button class="btn-back-q" onclick="qGo(3)">← Back</button><button class="btn-next-q" id="qn4" onclick="qGo(5)">Next Question →</button></div>
    </div>
    <!-- Q5 -->
    <div class="q-step" id="q5">
      <div class="q-num">Question 5 of 5</div>
      <div class="q-question">What is your body type?</div>
      <div class="q-hint">Think about where you carry your weight and your widest measurements.</div>
      <div class="body-opt-grid">
        <div class="body-opt" onclick="qSelectBody(this,'hourglass')"><div class="body-opt-icon">⧖</div><div class="body-opt-name">Hourglass</div><div class="body-opt-desc">Balanced bust & hips, defined waist</div></div>
        <div class="body-opt" onclick="qSelectBody(this,'pear')"><div class="body-opt-icon">🍐</div><div class="body-opt-name">Pear</div><div class="body-opt-desc">Hips wider than bust</div></div>
        <div class="body-opt" onclick="qSelectBody(this,'apple')"><div class="body-opt-icon">🍎</div><div class="body-opt-name">Apple</div><div class="body-opt-desc">Fuller middle, slimmer legs</div></div>
        <div class="body-opt" onclick="qSelectBody(this,'rectangle')"><div class="body-opt-icon">▭</div><div class="body-opt-name">Rectangle</div><div class="body-opt-desc">Similar width throughout</div></div>
        <div class="body-opt" onclick="qSelectBody(this,'inverted')"><div class="body-opt-icon">▽</div><div class="body-opt-name">Inverted Triangle</div><div class="body-opt-desc">Broad shoulders, narrow hips</div></div>
        <div class="body-opt" onclick="UploadImage()"><div class="body-opt-icon">+</div><div class="body-opt-name">Upload Image</div><div class="body-opt-desc">Detect you body shape with AI</div></div>
      </div>
      <div class="q-nav"><button class="btn-back-q" onclick="qGo(4)">← Back</button><button class="btn-next-q on" onclick="showQuizResults()">See My Results ✨</button></div>
    </div>

    <!-- RESULTS -->
    <div class="q-step" id="qResults">
      <div class="results-wrap" style="padding:0;">
        <div class="results-hero">
          <div class="result-badge" id="r-badge"></div>
          <h2 class="section-h2" id="r-title" style="margin:0 auto 10px;text-align:center;"></h2>
          <p style="color:var(--muted);font-size:16px;max-width:500px;margin:0 auto;text-align:center;" id="r-desc"></p>
        </div>
        <div class="results-main">
          <div class="r-card"><div class="r-card-label">Your Best Colours</div><div class="r-palette-row" id="r-best"></div><div class="r-note" id="r-best-note"></div></div>
          <div class="r-card"><div class="r-card-label">Colours to Avoid</div><div class="r-avoid-row" id="r-avoid"></div><div class="r-note" id="r-avoid-note"></div></div>
          <div class="r-card r-full"><div class="r-card-label">Makeup Shade Recommendations</div><div class="r-makeup" id="r-makeup"></div></div>
          <div class="r-card r-full"><div class="r-card-label">Clothing Recommendations for Your Shape</div><ul class="r-cloth-list" id="r-cloth"></ul></div>
          <div class="r-card r-full"><div class="r-card-label">Your Personal Style Insight</div><div class="r-insight" id="r-insight"></div></div>
        </div>
        <div class="results-actions">
          <button class="btn-primary" onclick="restartQ()">Retake Quiz</button>
          <a class="btn-outline" href="{{ route('show.custom_pages', ['slug' => 'blog']) }}">Explore Style Tips</a>
          <a class="btn-outline" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">Learn About Your Season</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('page_script')
<script>
    function UploadImage() {
    // Create hidden file input
    const input = document.createElement('input');
    input.type = 'file';
    input.accept = 'image/*';

    input.onchange = async function () {
        const file = input.files[0];
        if (!file) return;

        // Optional: preview image
        const reader = new FileReader();
        reader.onload = function (e) {
            console.log("Preview URL:", e.target.result);
            // You can show preview in an <img> if needed
        };
        reader.readAsDataURL(file);

        // Prepare form data
        const formData = new FormData();
        formData.append('image', file);

        try {
            // Send to API
            const response = await fetch('https://your-api-endpoint.com/upload', {
                method: 'POST',
                body: formData
            });

            const result = await response.json();
            console.log("API Response:", result);

            // Example: set detected body type from API
            if (result.bodyType) {
                qa.body = result.bodyType;

                // Highlight selected option (optional)
                document.querySelectorAll('.body-opt').forEach(o => o.classList.remove('sel'));
                const matched = document.querySelector(`[onclick*="${result.bodyType}"]`);
                if (matched) matched.classList.add('sel');
            }

        } catch (error) {
            console.error("Upload failed:", error);
            alert("Image upload failed. Please try again.");
        }
    };

    // Trigger file picker
    input.click();
}

</script>
@endsection
