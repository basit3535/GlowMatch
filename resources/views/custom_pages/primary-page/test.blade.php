{{-- @extends('layouts.app')

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
@endsection --}}
@extends('layouts.app')
@section('page_style')
    <style>
        /* ─── Google Fonts ─── */
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=DM+Sans:wght@300;400;500&display=swap');

        /* ─── Root Variables ─── */
        :root {
            --quiz-bg: #FAF8F5;
            --quiz-card: #FFFFFF;
            --quiz-border: #E8E2D9;
            --quiz-accent: #C4956A;
            --quiz-accent-dark: #A07850;
            --quiz-text: #1A1410;
            --quiz-muted: #8A7A6A;
            --quiz-light: #F2EDE6;
            --quiz-success: #5C7A5C;
            --quiz-shadow: 0 4px 32px rgba(0, 0, 0, 0.08);
            --quiz-radius: 18px;
            --quiz-radius-sm: 10px;
            font-family: 'DM Sans', sans-serif;
        }

        /* ─── Page Shell ─── */
        #page-quiz {
            background: var(--quiz-bg);
            min-height: 100vh;
            padding: 0 0 80px;
        }

        /* ─── Header ─── */
        .quiz-header {
            text-align: center;
            padding: 60px 24px 40px;
            background: linear-gradient(180deg, #F2EDE6 0%, var(--quiz-bg) 100%);
            border-bottom: 1px solid var(--quiz-border);
        }

        .quiz-header .section-label {
            font-family: 'DM Sans', sans-serif;
            font-size: 11px;
            font-weight: 500;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--quiz-accent);
            display: block;
            margin-bottom: 14px;
        }

        .quiz-header h1 {
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-size: clamp(32px, 5vw, 52px);
            font-weight: 300;
            color: var(--quiz-text);
            margin: 0 0 10px;
            line-height: 1.15;
            letter-spacing: -0.5px;
        }

        .quiz-header .subtitle {
            color: var(--quiz-muted);
            font-size: 14px;
            font-weight: 300;
            margin: 0;
        }

        /* ─── Progress Bar ─── */
        .quiz-progress {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0;
            margin-top: 36px;
            flex-wrap: nowrap;
            overflow-x: auto;
            padding: 0 8px;
        }

        .qp-step {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
            flex-shrink: 0;
        }

        .qp-circle {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: var(--quiz-card);
            border: 2px solid var(--quiz-border);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 500;
            color: var(--quiz-muted);
            transition: all 0.3s ease;
        }

        .qp-circle.active {
            background: var(--quiz-accent);
            border-color: var(--quiz-accent);
            color: #fff;
            box-shadow: 0 0 0 4px rgba(196, 149, 106, 0.2);
        }

        .qp-circle.done {
            background: var(--quiz-success);
            border-color: var(--quiz-success);
            color: #fff;
        }

        .qp-label {
            font-size: 10px;
            color: var(--quiz-muted);
            letter-spacing: 0.5px;
            font-weight: 400;
            white-space: nowrap;
        }

        .qp-line {
            height: 2px;
            width: 28px;
            background: var(--quiz-border);
            margin-bottom: 18px;
            transition: background 0.3s;
            flex-shrink: 0;
        }

        .qp-line.done {
            background: var(--quiz-success);
        }

        /* ─── Quiz Body ─── */
        .quiz-body {
            max-width: 760px;
            margin: 48px auto 0;
            padding: 0 20px;
        }

        .q-step {
            display: none;
            animation: fadeSlideIn 0.4s ease;
        }

        .q-step.active {
            display: block;
        }

        @keyframes fadeSlideIn {
            from {
                opacity: 0;
                transform: translateY(16px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .q-num {
            font-size: 11px;
            font-weight: 500;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            color: var(--quiz-accent);
            margin-bottom: 10px;
        }

        .q-question {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(22px, 3vw, 30px);
            font-weight: 400;
            color: var(--quiz-text);
            margin-bottom: 8px;
            line-height: 1.25;
        }

        .q-hint {
            font-size: 14px;
            color: var(--quiz-muted);
            margin-bottom: 28px;
            font-weight: 300;
            line-height: 1.5;
        }

        /* ─── Gender Step ─── */
        .gender-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-bottom: 32px;
        }

        .gender-opt {
            background: var(--quiz-card);
            border: 2px solid var(--quiz-border);
            border-radius: var(--quiz-radius);
            padding: 28px 16px;
            text-align: center;
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .gender-opt:hover {
            border-color: var(--quiz-accent);
            transform: translateY(-2px);
            box-shadow: var(--quiz-shadow);
        }

        .gender-opt.sel {
            border-color: var(--quiz-accent);
            background: linear-gradient(135deg, #FDF6EE, #F5EAD8);
            box-shadow: 0 0 0 3px rgba(196, 149, 106, 0.15);
        }

        .gender-opt-icon {
            font-size: 36px;
            margin-bottom: 10px;
            display: block;
        }

        .gender-opt-name {
            font-family: 'Cormorant Garamond', serif;
            font-size: 18px;
            font-weight: 400;
            color: var(--quiz-text);
        }

        /* ─── Option Grid (skin, undertone, hair, eyes) ─── */
        .opt-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(130px, 1fr));
            gap: 14px;
            margin-bottom: 32px;
        }

        .opt {
            background: var(--quiz-card);
            border: 2px solid var(--quiz-border);
            border-radius: var(--quiz-radius);
            padding: 20px 14px 18px;
            text-align: center;
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .opt:hover {
            border-color: var(--quiz-accent);
            transform: translateY(-2px);
            box-shadow: var(--quiz-shadow);
        }

        .opt.sel {
            border-color: var(--quiz-accent);
            background: linear-gradient(135deg, #FDF6EE, #F5EAD8);
            box-shadow: 0 0 0 3px rgba(196, 149, 106, 0.15);
        }

        .opt-circle {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            margin: 0 auto 12px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
        }

        .opt-name {
            font-weight: 500;
            font-size: 14px;
            color: var(--quiz-text);
            margin-bottom: 3px;
        }

        .opt-sub {
            font-size: 11px;
            color: var(--quiz-muted);
            line-height: 1.4;
        }

        /* ─── Body Type Grid ─── */
        .body-opt-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 14px;
            margin-bottom: 32px;
        }

        .body-opt {
            background: var(--quiz-card);
            border: 2px solid var(--quiz-border);
            border-radius: var(--quiz-radius);
            padding: 24px 14px 20px;
            text-align: center;
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .body-opt:hover {
            border-color: var(--quiz-accent);
            transform: translateY(-2px);
            box-shadow: var(--quiz-shadow);
        }

        .body-opt.sel {
            border-color: var(--quiz-accent);
            background: linear-gradient(135deg, #FDF6EE, #F5EAD8);
            box-shadow: 0 0 0 3px rgba(196, 149, 106, 0.15);
        }

        .body-opt-icon {
            font-size: 28px;
            display: block;
            margin-bottom: 8px;
        }

        .body-opt-name {
            font-weight: 500;
            font-size: 14px;
            color: var(--quiz-text);
            margin-bottom: 4px;
        }

        .body-opt-desc {
            font-size: 11px;
            color: var(--quiz-muted);
            line-height: 1.4;
        }

        /* ─── Photo Upload Step (Step 2) ─── */
        .photo-upload-area {
            border: 2px dashed var(--quiz-border);
            border-radius: var(--quiz-radius);
            padding: 48px 24px;
            text-align: center;
            cursor: pointer;
            background: var(--quiz-card);
            transition: all 0.25s ease;
            position: relative;
            margin-bottom: 32px;
        }

        .photo-upload-area:hover {
            border-color: var(--quiz-accent);
            background: linear-gradient(135deg, #FDF6EE, #FAF5EE);
        }

        .photo-upload-area.has-photo {
            padding: 0;
            border-style: solid;
            border-color: var(--quiz-accent);
            overflow: hidden;
        }

        .photo-upload-area.has-photo img {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
            display: block;
        }

        .photo-upload-icon {
            font-size: 42px;
            margin-bottom: 12px;
            display: block;
        }

        .photo-upload-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 20px;
            color: var(--quiz-text);
            margin-bottom: 6px;
        }

        .photo-upload-sub {
            font-size: 13px;
            color: var(--quiz-muted);
        }

        .photo-change-btn {
            position: absolute;
            bottom: 12px;
            right: 12px;
            background: rgba(255, 255, 255, 0.92);
            border: 1px solid var(--quiz-border);
            border-radius: 8px;
            padding: 6px 14px;
            font-size: 13px;
            cursor: pointer;
            font-family: 'DM Sans', sans-serif;
        }

        .photo-ai-note {
            background: linear-gradient(135deg, #F0EDE8, #E8E2D8);
            border-radius: var(--quiz-radius-sm);
            padding: 14px 18px;
            margin-bottom: 28px;
            font-size: 13px;
            color: var(--quiz-muted);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* ─── Contact Form Step ─── */
        .contact-form-wrap {
            background: var(--quiz-card);
            border: 1px solid var(--quiz-border);
            border-radius: var(--quiz-radius);
            padding: 36px;
            margin-bottom: 32px;
        }

        .contact-form-wrap .form-row {
            margin-bottom: 20px;
        }

        .contact-form-wrap label {
            display: block;
            font-size: 12px;
            font-weight: 500;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: var(--quiz-muted);
            margin-bottom: 8px;
        }

        .contact-form-wrap input {
            width: 100%;
            padding: 14px 18px;
            border: 1.5px solid var(--quiz-border);
            border-radius: var(--quiz-radius-sm);
            font-family: 'DM Sans', sans-serif;
            font-size: 15px;
            color: var(--quiz-text);
            background: var(--quiz-bg);
            outline: none;
            transition: border-color 0.2s;
            box-sizing: border-box;
        }

        .contact-form-wrap input:focus {
            border-color: var(--quiz-accent);
            background: #fff;
        }

        .privacy-note {
            font-size: 12px;
            color: var(--quiz-muted);
            margin-top: 16px;
            text-align: center;
            line-height: 1.5;
        }

        /* ─── Nav Buttons ─── */
        .q-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 8px;
            padding-top: 8px;
        }

        .btn-back-q {
            background: none;
            border: 1.5px solid var(--quiz-border);
            border-radius: var(--quiz-radius-sm);
            padding: 12px 22px;
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            color: var(--quiz-muted);
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn-back-q:hover {
            border-color: var(--quiz-accent);
            color: var(--quiz-accent);
        }

        .btn-next-q {
            background: var(--quiz-border);
            border: none;
            border-radius: var(--quiz-radius-sm);
            padding: 13px 28px;
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            font-weight: 500;
            color: var(--quiz-muted);
            cursor: not-allowed;
            transition: all 0.25s ease;
        }

        .btn-next-q.on {
            background: linear-gradient(135deg, var(--quiz-accent), var(--quiz-accent-dark));
            color: #fff;
            cursor: pointer;
            box-shadow: 0 4px 16px rgba(196, 149, 106, 0.35);
        }

        .btn-next-q.on:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(196, 149, 106, 0.45);
        }

        /* ─── Loading Screen ─── */
        #qLoading {
            text-align: center;
            padding: 80px 24px;
        }

        .loading-spinner {
            width: 52px;
            height: 52px;
            border: 3px solid var(--quiz-border);
            border-top-color: var(--quiz-accent);
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
            margin: 0 auto 24px;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        .loading-steps {
            list-style: none;
            padding: 0;
            margin: 28px 0 0;
        }

        .loading-steps li {
            font-size: 14px;
            color: var(--quiz-muted);
            padding: 6px 0;
            transition: color 0.3s;
        }

        .loading-steps li.active {
            color: var(--quiz-accent);
            font-weight: 500;
        }

        .loading-steps li.done {
            color: var(--quiz-success);
        }

        .loading-steps li.done::before {
            content: '✓ ';
        }

        /* ─── Results ─── */
        .results-wrap {
            padding: 0;
        }

        .results-hero {
            background: linear-gradient(135deg, #F5EDE0, #EDE0CC);
            border-radius: var(--quiz-radius);
            padding: 48px 32px 40px;
            text-align: center;
            margin-bottom: 24px;
            border: 1px solid rgba(196, 149, 106, 0.2);
        }

        .result-badge {
            font-family: 'Cormorant Garamond', serif;
            font-size: 13px;
            font-weight: 400;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--quiz-accent-dark);
            background: rgba(196, 149, 106, 0.12);
            display: inline-block;
            padding: 7px 20px;
            border-radius: 40px;
            border: 1px solid rgba(196, 149, 106, 0.25);
            margin-bottom: 18px;
        }

        .results-hero h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(28px, 4vw, 42px);
            font-weight: 300;
            color: var(--quiz-text);
            margin: 0 auto 14px;
            line-height: 1.2;
        }

        .results-hero p {
            font-size: 15px;
            color: var(--quiz-muted);
            max-width: 520px;
            margin: 0 auto;
            line-height: 1.6;
            font-weight: 300;
        }

        .results-main {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
            margin-bottom: 24px;
        }

        .r-card {
            background: var(--quiz-card);
            border: 1px solid var(--quiz-border);
            border-radius: var(--quiz-radius);
            padding: 24px 22px;
        }

        .r-card.r-full {
            grid-column: 1 / -1;
        }

        .r-card-label {
            font-size: 10px;
            font-weight: 500;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            color: var(--quiz-accent);
            margin-bottom: 16px;
        }

        /* Colour palettes */
        .r-palette-row,
        .r-avoid-row {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 12px;
        }

        .r-swatch {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
            cursor: default;
        }

        .r-swatch-dot {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 1px solid rgba(0, 0, 0, 0.08);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .r-swatch-name {
            font-size: 10px;
            color: var(--quiz-muted);
            text-align: center;
            max-width: 48px;
            line-height: 1.3;
        }

        .r-avoid-row .r-swatch-dot {
            filter: grayscale(30%);
            opacity: 0.65;
            position: relative;
        }

        .r-note {
            font-size: 13px;
            color: var(--quiz-muted);
            line-height: 1.55;
            font-style: italic;
            margin-top: 6px;
        }

        /* Makeup */
        .r-makeup {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
            gap: 14px;
        }

        .r-makeup-item {
            background: var(--quiz-light);
            border-radius: var(--quiz-radius-sm);
            padding: 14px;
        }

        .r-makeup-type {
            font-size: 10px;
            font-weight: 500;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: var(--quiz-accent);
            margin-bottom: 5px;
        }

        .r-makeup-shade {
            font-size: 14px;
            color: var(--quiz-text);
            font-weight: 500;
            margin-bottom: 3px;
        }

        .r-makeup-note {
            font-size: 12px;
            color: var(--quiz-muted);
        }

        /* Clothing */
        .r-cloth-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .r-cloth-list li {
            background: var(--quiz-light);
            border-radius: var(--quiz-radius-sm);
            padding: 12px 16px;
            font-size: 14px;
            color: var(--quiz-text);
            line-height: 1.4;
            display: flex;
            gap: 10px;
            align-items: flex-start;
        }

        .r-cloth-list li span {
            color: var(--quiz-accent);
            font-size: 16px;
            flex-shrink: 0;
        }

        /* Style Insight */
        .r-insight {
            font-size: 15px;
            color: var(--quiz-text);
            line-height: 1.7;
            font-weight: 300;
        }

        /* ─── Pinterest Products ─── */
        .pinterest-section {
            background: var(--quiz-card);
            border: 1px solid var(--quiz-border);
            border-radius: var(--quiz-radius);
            padding: 24px 22px;
            margin-bottom: 24px;
        }

        .pinterest-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 18px;
        }

        .pinterest-badge {
            background: #E60023;
            color: #fff;
            font-size: 11px;
            font-weight: 500;
            letter-spacing: 1px;
            padding: 3px 10px;
            border-radius: 4px;
        }

        .pinterest-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(155px, 1fr));
            gap: 16px;
        }

        .pin-card {
            border-radius: var(--quiz-radius-sm);
            overflow: hidden;
            border: 1px solid var(--quiz-border);
            transition: all 0.25s ease;
            text-decoration: none;
            display: block;
            background: var(--quiz-card);
        }

        .pin-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.12);
            border-color: var(--quiz-accent);
        }

        .pin-card-img {
            width: 100%;
            aspect-ratio: 3/4;
            object-fit: cover;
            background: var(--quiz-light);
            display: block;
            position: relative;
        }

        .pin-card-img-placeholder {
            width: 100%;
            aspect-ratio: 3/4;
            background: linear-gradient(135deg, var(--quiz-light), #EDE0CC);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
        }

        .pin-card-body {
            padding: 10px 12px 12px;
        }

        .pin-card-title {
            font-size: 13px;
            font-weight: 500;
            color: var(--quiz-text);
            margin-bottom: 4px;
            line-height: 1.35;
        }

        .pin-card-sub {
            font-size: 11px;
            color: var(--quiz-muted);
        }

        .pin-card-cta {
            display: inline-block;
            margin-top: 8px;
            font-size: 11px;
            font-weight: 500;
            color: var(--quiz-accent);
            letter-spacing: 0.5px;
        }

        .pin-loading {
            text-align: center;
            padding: 40px 0;
            color: var(--quiz-muted);
            font-size: 14px;
        }

        /* ─── Results Actions ─── */
        .results-actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 32px;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--quiz-accent), var(--quiz-accent-dark));
            color: #fff;
            border: none;
            border-radius: var(--quiz-radius-sm);
            padding: 14px 28px;
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.25s;
            box-shadow: 0 4px 16px rgba(196, 149, 106, 0.35);
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(196, 149, 106, 0.45);
        }

        .btn-outline {
            background: transparent;
            color: var(--quiz-text);
            border: 1.5px solid var(--quiz-border);
            border-radius: var(--quiz-radius-sm);
            padding: 13px 24px;
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-outline:hover {
            border-color: var(--quiz-accent);
            color: var(--quiz-accent);
        }

        /* ─── Responsive ─── */
        @media (max-width: 600px) {
            .results-main {
                grid-template-columns: 1fr;
            }

            .r-cloth-list {
                grid-template-columns: 1fr;
            }

            .body-opt-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .gender-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .contact-form-wrap {
                padding: 24px 18px;
            }

            .pinterest-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
@endsection
@section('content')
    <div class="page" id="page-quiz">

        {{-- ─── HEADER ─── --}}
        <div class="quiz-header">
            <span class="section-label">✦ Personal Colour & Style Analysis</span>
            <h1>Find your colour season</h1>
            <p class="subtitle">7 steps · Takes about 5 minutes · Free forever</p>
            <div class="quiz-progress">
                <div class="qp-step">
                    <div class="qp-circle active" id="qc0">♀</div>
                    <div class="qp-label">Gender</div>
                </div>
                <div class="qp-line" id="ql0"></div>
                <div class="qp-step">
                    <div class="qp-circle" id="qc1">📷</div>
                    <div class="qp-label">Your Photo</div>
                </div>
                <div class="qp-line" id="ql1"></div>
                <div class="qp-step">
                    <div class="qp-circle" id="qc2">2</div>
                    <div class="qp-label">Skin</div>
                </div>
                <div class="qp-line" id="ql2"></div>
                <div class="qp-step">
                    <div class="qp-circle" id="qc3">3</div>
                    <div class="qp-label">Undertone</div>
                </div>
                <div class="qp-line" id="ql3"></div>
                <div class="qp-step">
                    <div class="qp-circle" id="qc4">4</div>
                    <div class="qp-label">Eyes</div>
                </div>
                <div class="qp-line" id="ql4"></div>
                <div class="qp-step">
                    <div class="qp-circle" id="qc5">5</div>
                    <div class="qp-label">Hair</div>
                </div>
                <div class="qp-line" id="ql5"></div>
                <div class="qp-step">
                    <div class="qp-circle" id="qc6">6</div>
                    <div class="qp-label">Body</div>
                </div>
                <div class="qp-line" id="ql6"></div>
                <div class="qp-step">
                    <div class="qp-circle" id="qc7">✉</div>
                    <div class="qp-label">Profile</div>
                </div>
            </div>
        </div>

        <div class="quiz-body">

            {{-- ─── STEP 0: GENDER ─── --}}
            <div class="q-step active" id="q0">
                <div class="q-num">Step 1 of 7</div>
                <div class="q-question">How do you identify?</div>
                <div class="q-hint">This helps us personalise your style & clothing recommendations.</div>
                <div class="gender-grid">
                    <div class="gender-opt" onclick="qSelectGender(this,'female')">
                        <span class="gender-opt-icon">♀</span>
                        <div class="gender-opt-name">Female</div>
                    </div>
                    <div class="gender-opt" onclick="qSelectGender(this,'male')">
                        <span class="gender-opt-icon">♂</span>
                        <div class="gender-opt-name">Male</div>
                    </div>
                    <div class="gender-opt" onclick="qSelectGender(this,'nonbinary')">
                        <span class="gender-opt-icon">⚧</span>
                        <div class="gender-opt-name">Non-binary</div>
                    </div>
                </div>
                <div class="q-nav">
                    <div></div>
                    <button class="btn-next-q" id="qn0" onclick="qGo(1)">Next →</button>
                </div>
            </div>

            {{-- ─── STEP 1: PHOTO UPLOAD ─── --}}
            <div class="q-step" id="q1">
                <div class="q-num">Step 2 of 7</div>
                <div class="q-question">Upload a clear photo of yourself</div>
                <div class="q-hint">A well-lit selfie helps our AI detect your colouring and features more accurately. Your
                    photo is analysed locally and never stored.</div>

                <div class="photo-ai-note">
                    <span>🔒</span>
                    <span>Your image is used only for AI colour analysis in this session. It is not saved or shared.</span>
                </div>

                <div class="photo-upload-area" id="photoUploadArea" onclick="triggerPhotoUpload()">
                    <span class="photo-upload-icon">📸</span>
                    <div class="photo-upload-title">Tap to upload your photo</div>
                    <div class="photo-upload-sub">JPG, PNG or WEBP · Max 10MB</div>
                </div>
                <input type="file" id="photoFileInput" accept="image/*" style="display:none"
                    onchange="handlePhotoUpload(this)">

                <div class="q-nav">
                    <button class="btn-back-q" onclick="qGo(0)">← Back</button>
                    <button class="btn-next-q on" id="qn1" onclick="qGo(2)">Next →</button>
                </div>
            </div>

            {{-- ─── STEP 2: SKIN TONE ─── --}}
            <div class="q-step" id="q2">
                <div class="q-num">Step 3 of 7</div>
                <div class="q-question">What is your natural skin tone?</div>
                <div class="q-hint">Choose the option that best matches your complexion when you haven't been in the sun.
                </div>
                <div class="opt-grid">
                    <div class="opt" onclick="qSelect(this,'skin','fair')">
                        <div class="opt-circle" style="background:linear-gradient(135deg,#FDDBB4,#F5C89C);"></div>
                        <div class="opt-name">Fair</div>
                        <div class="opt-sub">Very light, may burn easily</div>
                    </div>
                    <div class="opt" onclick="qSelect(this,'skin','light')">
                        <div class="opt-circle" style="background:linear-gradient(135deg,#F0C089,#D4956A);"></div>
                        <div class="opt-name">Light</div>
                        <div class="opt-sub">Light to medium</div>
                    </div>
                    <div class="opt" onclick="qSelect(this,'skin','medium')">
                        <div class="opt-circle" style="background:linear-gradient(135deg,#C68642,#A0522D);"></div>
                        <div class="opt-name">Medium</div>
                        <div class="opt-sub">Warm beige or olive</div>
                    </div>
                    <div class="opt" onclick="qSelect(this,'skin','tan')">
                        <div class="opt-circle" style="background:linear-gradient(135deg,#8D5524,#6B3A1F);"></div>
                        <div class="opt-name">Tan</div>
                        <div class="opt-sub">Medium to deep</div>
                    </div>
                    <div class="opt" onclick="qSelect(this,'skin','deep')">
                        <div class="opt-circle" style="background:linear-gradient(135deg,#4A2508,#2C1A08);"></div>
                        <div class="opt-name">Deep</div>
                        <div class="opt-sub">Rich, dark complexion</div>
                    </div>
                </div>
                <div class="q-nav">
                    <button class="btn-back-q" onclick="qGo(1)">← Back</button>
                    <button class="btn-next-q" id="qn2" onclick="qGo(3)">Next →</button>
                </div>
            </div>

            {{-- ─── STEP 3: UNDERTONE ─── --}}
            <div class="q-step" id="q3">
                <div class="q-num">Step 4 of 7</div>
                <div class="q-question">What is your skin's undertone?</div>
                <div class="q-hint">Check your inner wrist in natural light. What colour do your veins appear?</div>
                <div class="opt-grid">
                    <div class="opt" onclick="qSelect(this,'undertone','warm')">
                        <div class="opt-circle" style="background:linear-gradient(135deg,#FFD700,#FFA500);"></div>
                        <div class="opt-name">Warm</div>
                        <div class="opt-sub">Veins look greenish, gold suits you</div>
                    </div>
                    <div class="opt" onclick="qSelect(this,'undertone','cool')">
                        <div class="opt-circle" style="background:linear-gradient(135deg,#B0C4DE,#6A5ACD);"></div>
                        <div class="opt-name">Cool</div>
                        <div class="opt-sub">Veins look blue/purple, silver suits you</div>
                    </div>
                    <div class="opt" onclick="qSelect(this,'undertone','neutral')">
                        <div class="opt-circle" style="background:linear-gradient(135deg,#D2B48C,#BC9A6A);"></div>
                        <div class="opt-name">Neutral</div>
                        <div class="opt-sub">Can't tell, both metals work</div>
                    </div>
                    <div class="opt" onclick="qSelect(this,'undertone','olive')">
                        <div class="opt-circle" style="background:linear-gradient(135deg,#8FBC8F,#6B8E23);"></div>
                        <div class="opt-name">Olive</div>
                        <div class="opt-sub">Greenish-yellow undertone</div>
                    </div>
                </div>
                <div class="q-nav">
                    <button class="btn-back-q" onclick="qGo(2)">← Back</button>
                    <button class="btn-next-q" id="qn3" onclick="qGo(4)">Next →</button>
                </div>
            </div>

            {{-- ─── STEP 4: EYES ─── --}}
            <div class="q-step" id="q4">
                <div class="q-num">Step 5 of 7</div>
                <div class="q-question">What colour are your eyes?</div>
                <div class="q-hint">Select your natural eye colour — not what you'd like them to be!</div>
                <div class="opt-grid">
                    <div class="opt" onclick="qSelect(this,'eyes','blue')">
                        <div class="opt-circle" style="background:radial-gradient(circle,#6CA6CD,#4682B4,#1C3A6E);"></div>
                        <div class="opt-name">Blue</div>
                    </div>
                    <div class="opt" onclick="qSelect(this,'eyes','green')">
                        <div class="opt-circle" style="background:radial-gradient(circle,#8FBC8F,#3D7A47,#1B4A24);"></div>
                        <div class="opt-name">Green</div>
                    </div>
                    <div class="opt" onclick="qSelect(this,'eyes','hazel')">
                        <div class="opt-circle" style="background:radial-gradient(circle,#C8A96E,#8B6914,#4A3508);"></div>
                        <div class="opt-name">Hazel</div>
                    </div>
                    <div class="opt" onclick="qSelect(this,'eyes','light-brown')">
                        <div class="opt-circle" style="background:radial-gradient(circle,#C8905A,#9B5A24,#5C2A0A);"></div>
                        <div class="opt-name">Light Brown</div>
                    </div>
                    <div class="opt" onclick="qSelect(this,'eyes','dark-brown')">
                        <div class="opt-circle" style="background:radial-gradient(circle,#6B3A1F,#2C150A,#000);"></div>
                        <div class="opt-name">Dark Brown</div>
                    </div>
                    <div class="opt" onclick="qSelect(this,'eyes','grey')">
                        <div class="opt-circle" style="background:radial-gradient(circle,#B0B8C0,#7A8A94,#3A464E);"></div>
                        <div class="opt-name">Grey</div>
                    </div>
                </div>
                <div class="q-nav">
                    <button class="btn-back-q" onclick="qGo(3)">← Back</button>
                    <button class="btn-next-q" id="qn4" onclick="qGo(5)">Next →</button>
                </div>
            </div>

            {{-- ─── STEP 5: HAIR ─── --}}
            <div class="q-step" id="q5">
                <div class="q-num">Step 6 of 7</div>
                <div class="q-question">What is your natural hair colour?</div>
                <div class="q-hint">Choose your untreated, natural shade — or what it was before any colouring.</div>
                <div class="opt-grid">
                    <div class="opt" onclick="qSelect(this,'hair','blonde')">
                        <div class="opt-circle" style="background:linear-gradient(135deg,#F5E0A0,#D4A843);"></div>
                        <div class="opt-name">Blonde</div>
                        <div class="opt-sub">Light to golden</div>
                    </div>
                    <div class="opt" onclick="qSelect(this,'hair','auburn')">
                        <div class="opt-circle" style="background:linear-gradient(135deg,#C67B4A,#8B3A1A);"></div>
                        <div class="opt-name">Auburn / Red</div>
                        <div class="opt-sub">Warm, reddish tones</div>
                    </div>
                    <div class="opt" onclick="qSelect(this,'hair','light-brown')">
                        <div class="opt-circle" style="background:linear-gradient(135deg,#A0724E,#6B4226);"></div>
                        <div class="opt-name">Light Brown</div>
                        <div class="opt-sub">Warm or ashy brown</div>
                    </div>
                    <div class="opt" onclick="qSelect(this,'hair','dark-brown')">
                        <div class="opt-circle" style="background:linear-gradient(135deg,#4A2C1A,#2C1810);"></div>
                        <div class="opt-name">Dark Brown</div>
                        <div class="opt-sub">Rich, deep brown</div>
                    </div>
                    <div class="opt" onclick="qSelect(this,'hair','black')">
                        <div class="opt-circle" style="background:linear-gradient(135deg,#2A2A2A,#080808);"></div>
                        <div class="opt-name">Black</div>
                        <div class="opt-sub">Warm or cool black</div>
                    </div>
                    <div class="opt" onclick="qSelect(this,'hair','grey')">
                        <div class="opt-circle" style="background:linear-gradient(135deg,#C8C8C8,#888888);"></div>
                        <div class="opt-name">Grey / White</div>
                        <div class="opt-sub">Silver or white</div>
                    </div>
                </div>
                <div class="q-nav">
                    <button class="btn-back-q" onclick="qGo(4)">← Back</button>
                    <button class="btn-next-q" id="qn5" onclick="qGo(6)">Next →</button>
                </div>
            </div>

            {{-- ─── STEP 6: BODY TYPE ─── --}}
            <div class="q-step" id="q6">
                <div class="q-num">Step 7 of 7 — almost there!</div>
                <div class="q-question">What is your body type?</div>
                <div class="q-hint">Think about where you carry your weight and your widest measurements.</div>
                <div class="body-opt-grid">
                    <div class="body-opt" onclick="qSelectBody(this,'hourglass')">
                        <div class="body-opt-icon">⧖</div>
                        <div class="body-opt-name">Hourglass</div>
                        <div class="body-opt-desc">Balanced bust & hips, defined waist</div>
                    </div>
                    <div class="body-opt" onclick="qSelectBody(this,'pear')">
                        <div class="body-opt-icon">🍐</div>
                        <div class="body-opt-name">Pear</div>
                        <div class="body-opt-desc">Hips wider than bust</div>
                    </div>
                    <div class="body-opt" onclick="qSelectBody(this,'apple')">
                        <div class="body-opt-icon">🍎</div>
                        <div class="body-opt-name">Apple</div>
                        <div class="body-opt-desc">Fuller middle, slimmer legs</div>
                    </div>
                    <div class="body-opt" onclick="qSelectBody(this,'rectangle')">
                        <div class="body-opt-icon">▭</div>
                        <div class="body-opt-name">Rectangle</div>
                        <div class="body-opt-desc">Similar width throughout</div>
                    </div>
                    <div class="body-opt" onclick="qSelectBody(this,'inverted')">
                        <div class="body-opt-icon">▽</div>
                        <div class="body-opt-name">Inverted Triangle</div>
                        <div class="body-opt-desc">Broad shoulders, narrow hips</div>
                    </div>
                    <div class="body-opt" onclick="triggerBodyPhotoUpload()">
                        <div class="body-opt-icon">📷</div>
                        <div class="body-opt-name">Detect with AI</div>
                        <div class="body-opt-desc">Upload a full-body photo</div>
                    </div>
                </div>
                <input type="file" id="bodyPhotoInput" accept="image/*" style="display:none"
                    onchange="handleBodyPhotoUpload(this)">
                <div class="q-nav">
                    <button class="btn-back-q" onclick="qGo(5)">← Back</button>
                    <button class="btn-next-q" id="qn6" onclick="qGo(7)">Next →</button>
                </div>
            </div>

            {{-- ─── STEP 7: CONTACT INFO ─── --}}
            <div class="q-step" id="q7">
                <div class="q-num">One last step</div>
                <div class="q-question">Where should we send your results?</div>
                <div class="q-hint">Get your full colour season report saved to your inbox — plus personalised style tips
                    each week.</div>
                <div class="contact-form-wrap">
                    <div class="form-row">
                        <label for="user_name">Your First Name</label>
                        <input type="text" id="user_name" placeholder="e.g. Sarah" oninput="checkContactForm()">
                    </div>
                    <div class="form-row">
                        <label for="user_email">Email Address</label>
                        <input type="email" id="user_email" placeholder="e.g. sarah@example.com"
                            oninput="checkContactForm()">
                    </div>
                    <p class="privacy-note">🔒 We respect your privacy. No spam — ever. Unsubscribe any time.</p>
                </div>
                <div class="q-nav">
                    <button class="btn-back-q" onclick="qGo(6)">← Back</button>
                    <button class="btn-next-q" id="qn7" onclick="showQuizResults()">See My Results ✨</button>
                </div>
            </div>

            {{-- ─── LOADING ─── --}}
            <div class="q-step" id="qLoading">
                <div class="loading-spinner"></div>
                <div class="q-question" style="text-align:center;">Analysing your profile…</div>
                <p style="text-align:center;color:var(--quiz-muted);font-size:14px;">Our AI is crafting your personalised
                    results</p>
                <ul class="loading-steps">
                    <li id="ls1">Determining your colour season</li>
                    <li id="ls2">Selecting your best colour palette</li>
                    <li id="ls3">Building makeup recommendations</li>
                    <li id="ls4">Curating clothing suggestions</li>
                    <li id="ls5">Searching Pinterest for outfit ideas</li>
                </ul>
            </div>

            {{-- ─── RESULTS ─── --}}
            <div class="q-step" id="qResults">
                <div class="results-wrap">
                    <div class="results-hero">
                        <div class="result-badge" id="r-badge"></div>
                        <h2 id="r-title"></h2>
                        <p id="r-desc"></p>
                    </div>
                    <div class="results-main">
                        <div class="r-card">
                            <div class="r-card-label">Your Best Colours</div>
                            <div class="r-palette-row" id="r-best"></div>
                            <div class="r-note" id="r-best-note"></div>
                        </div>
                        <div class="r-card">
                            <div class="r-card-label">Colours to Avoid</div>
                            <div class="r-avoid-row" id="r-avoid"></div>
                            <div class="r-note" id="r-avoid-note"></div>
                        </div>
                        <div class="r-card r-full">
                            <div class="r-card-label">Makeup Shade Recommendations</div>
                            <div class="r-makeup" id="r-makeup"></div>
                        </div>
                        <div class="r-card r-full">
                            <div class="r-card-label">Clothing Tips for Your Body Shape</div>
                            <ul class="r-cloth-list" id="r-cloth"></ul>
                        </div>
                        <div class="r-card r-full">
                            <div class="r-card-label">Your Personal Style Archetype</div>
                            <div class="r-insight" id="r-insight"></div>
                        </div>
                    </div>

                    {{-- Pinterest Products --}}
                    <div class="pinterest-section" id="pinterestSection">
                        <div class="pinterest-header">
                            <div class="r-card-label" style="margin-bottom:0;">Recommended Outfits for You</div>
                            <div class="pinterest-badge">Pinterest</div>
                        </div>
                        <p style="font-size:13px;color:var(--quiz-muted);margin:0 0 18px;">Curated picks based on your
                            colour season &amp; body type. Click any look to explore more on Pinterest.</p>
                        <div class="pinterest-grid" id="pinterestGrid">
                            <div class="pin-loading">🔍 Finding your perfect looks…</div>
                        </div>
                    </div>

                    <div class="results-actions">
                        <button class="btn-primary" onclick="restartQ()">Retake Quiz</button>
                        <a class="btn-outline" href="{{ route('show.custom_pages', ['slug' => 'blog']) }}">Style Tips</a>
                        <a class="btn-outline" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">About
                            Seasons</a>
                    </div>
                </div>
            </div>

        </div>{{-- /.quiz-body --}}
    </div>{{-- /#page-quiz --}}
@endsection

@section('page_script')
    <script>
        /* ════════════════════════════════════════════
           QUIZ STATE
            ════════════════════════════════════════════ */
        const qa = {
            gender: null,
            photo: null, // base64 or null
            skin: null,
            undertone: null,
            eyes: null,
            hair: null,
            body: null,
            name: '',
            email: ''
        };

        const TOTAL_STEPS = 8; // 0–7 (0=gender,1=photo,2=skin,3=undertone,4=eyes,5=hair,6=body,7=contact)

        /* ─── Navigate between steps ─── */
        function qGo(step) {
            // Validate required fields before advancing
            if (step === 2 && !qa.skin && !document.getElementById('q2').classList.contains('active')) {
                // skip validation for photo step (optional)
            }

            document.querySelectorAll('.q-step').forEach(el => el.classList.remove('active'));

            const target = document.getElementById('q' + step);
            if (target) {
                target.classList.add('active');
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }

            updateProgress(step);
        }

        /* ─── Progress indicator ─── */
        function updateProgress(currentStep) {
            const circles = ['qc0', 'qc1', 'qc2', 'qc3', 'qc4', 'qc5', 'qc6', 'qc7'];
            const lines = ['ql0', 'ql1', 'ql2', 'ql3', 'ql4', 'ql5', 'ql6'];

            circles.forEach((id, i) => {
                const el = document.getElementById(id);
                if (!el) return;
                el.classList.remove('active', 'done');
                if (i < currentStep) el.classList.add('done');
                else if (i === currentStep) el.classList.add('active');
            });

            lines.forEach((id, i) => {
                const el = document.getElementById(id);
                if (!el) return;
                el.classList.toggle('done', i < currentStep);
            });
        }

        /* ─── Generic option selector ─── */
        function qSelect(el, key, value) {
            el.closest('.opt-grid').querySelectorAll('.opt').forEach(o => o.classList.remove('sel'));
            el.classList.add('sel');
            qa[key] = value;

            // Enable next button
            const stepMap = {
                skin: 2,
                undertone: 3,
                eyes: 4,
                hair: 5
            };
            const btnId = 'qn' + stepMap[key];
            const btn = document.getElementById(btnId);
            if (btn) btn.classList.add('on');
        }

        /* ─── Gender selector ─── */
        function qSelectGender(el, value) {
            document.querySelectorAll('.gender-opt').forEach(o => o.classList.remove('sel'));
            el.classList.add('sel');
            qa.gender = value;
            document.getElementById('qn0').classList.add('on');
        }

        /* ─── Body type selector ─── */
        function qSelectBody(el, value) {
            document.querySelectorAll('.body-opt').forEach(o => o.classList.remove('sel'));
            el.classList.add('sel');
            qa.body = value;
            document.getElementById('qn6').classList.add('on');
        }

        /* ─── Photo upload (selfie) ─── */
        function triggerPhotoUpload() {
            document.getElementById('photoFileInput').click();
        }

        function handlePhotoUpload(input) {
            const file = input.files[0];
            if (!file) return;

            const reader = new FileReader();
            reader.onload = function(e) {
                qa.photo = e.target.result; // base64
                const area = document.getElementById('photoUploadArea');
                area.classList.add('has-photo');
                area.innerHTML = `
                <img src="${e.target.result}" alt="Your photo" style="width:100%;max-height:300px;object-fit:cover;display:block;border-radius:16px;">
                <button class="photo-change-btn" onclick="event.stopPropagation();triggerPhotoUpload()">Change Photo</button>
                    `;
            };
            reader.readAsDataURL(file);
        }

        /* ─── Body photo AI detect ─── */
        function triggerBodyPhotoUpload() {
            document.getElementById('bodyPhotoInput').click();
        }

        async function handleBodyPhotoUpload(input) {
            const file = input.files[0];
            if (!file) return;

            // Show processing state
            document.querySelectorAll('.body-opt').forEach(o => o.classList.remove('sel'));
            const detectOpt = document.querySelector('.body-opt:last-child');
            if (detectOpt) {
                detectOpt.classList.add('sel');
                detectOpt.querySelector('.body-opt-desc').textContent = 'Analysing…';
            }

            // Convert to base64
            const base64 = await new Promise(resolve => {
                const r = new FileReader();
                r.onload = e => resolve(e.target.result.split(',')[1]);
                r.readAsDataURL(file);
            });

            try {
                // Call Claude API for body shape detection
                const response = await fetch('https://api.anthropic.com/v1/messages', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        model: 'claude-sonnet-4-20250514',
                        max_tokens: 200,
                        messages: [{
                            role: 'user',
                            content: [{
                                    type: 'image',
                                    source: {
                                        type: 'base64',
                                        media_type: file.type,
                                        data: base64
                                    }
                                },
                                {
                                    type: 'text',
                                    text: 'Analyse this full body photo and detect the person\'s body shape. Reply with ONLY a single JSON object like: {"bodyType":"hourglass"} where bodyType is one of: hourglass, pear, apple, rectangle, inverted. No explanation.'
                                }
                            ]
                        }]
                    })
                });

                const data = await response.json();
                const text = data.content?.[0]?.text || '{}';
                const result = JSON.parse(text.replace(/```json|```/g, '').trim());

                if (result.bodyType) {
                    qa.body = result.bodyType;
                    if (detectOpt) {
                        detectOpt.querySelector('.body-opt-desc').textContent = `Detected: ${result.bodyType}`;
                    }
                    document.getElementById('qn6').classList.add('on');
                }
            } catch (err) {
                console.error('Body detection failed:', err);
                if (detectOpt) detectOpt.querySelector('.body-opt-desc').textContent =
                    'Detection failed — select manually';
                detectOpt?.classList.remove('sel');
            }
        }

        /* ─── Contact form validation ─── */
        function checkContactForm() {
            const name = document.getElementById('user_name').value.trim();
            const email = document.getElementById('user_email').value.trim();
            const valid = name.length > 0 && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
            const btn = document.getElementById('qn7');
            if (valid) {
                btn.classList.add('on');
                qa.name = name;
                qa.email = email;
            } else {
                btn.classList.remove('on');
            }
        }

        /* ═══════════════════════════════════════════
           COLOUR SEASON DATA
        ═══════════════════════════════════════════ */
        const seasons = {
            spring: {
                label: '🌸 Spring',
                title: 'True Spring',
                desc: 'You radiate warmth and freshness. Your natural colouring has golden undertones that come alive in clear, warm, bright hues — think a sun-drenched garden in full bloom.',
                best: [{
                        hex: '#F4C542',
                        name: 'Honey Gold'
                    },
                    {
                        hex: '#E8865A',
                        name: 'Coral'
                    },
                    {
                        hex: '#7BC67E',
                        name: 'Spring Green'
                    },
                    {
                        hex: '#F5A623',
                        name: 'Warm Amber'
                    },
                    {
                        hex: '#D4A5A5',
                        name: 'Peach Rose'
                    },
                    {
                        hex: '#B8D4E8',
                        name: 'Sky Blue'
                    },
                ],
                avoid: [{
                        hex: '#2C2C4A',
                        name: 'Navy'
                    },
                    {
                        hex: '#6B2D6B',
                        name: 'Dark Purple'
                    },
                    {
                        hex: '#8B0000',
                        name: 'Dark Red'
                    },
                    {
                        hex: '#808080',
                        name: 'Cool Grey'
                    },
                ],
                bestNote: 'These warm, clear colours echo your natural golden warmth and make your skin glow.',
                avoidNote: 'Dark, cool, or muted tones wash you out and dull your natural radiance.',
                makeup: [{
                        type: 'Foundation',
                        shade: 'Warm Ivory / Golden Beige',
                        note: 'with yellow undertone'
                    },
                    {
                        type: 'Blush',
                        shade: 'Peach Coral',
                        note: 'avoid cool pinks'
                    },
                    {
                        type: 'Lips',
                        shade: 'Warm Coral or Nude Peach',
                        note: 'or clear berry'
                    },
                    {
                        type: 'Eyes',
                        shade: 'Warm Browns, Gold, Teal',
                        note: 'soft green liner'
                    },
                    {
                        type: 'Highlighter',
                        shade: 'Gold or Champagne',
                        note: 'avoid silver'
                    },
                    {
                        type: 'Brows',
                        shade: 'Soft Warm Brown',
                        note: 'slightly lighter than hair'
                    },
                ],
                insight: 'Your style archetype is the **Radiant Naturalist** — effortlessly warm, vibrant, and approachable. You look your best in outfits that feel joyful and alive: floral prints, textured fabrics, and warm earthy layers. Avoid stark white (use cream instead) and ice-cold tones that fight your natural radiance. Jewellery in gold, amber and tortoiseshell are your signature metals.'
            },
            summer: {
                label: '☁️ Summer',
                title: 'Soft Summer',
                desc: 'Your colouring is cool, soft and elegantly muted — like a hazy afternoon in the countryside. You suit dusty, powdery tones that don\'t overpower your delicate natural palette.',
                best: [{
                        hex: '#B0C4DE',
                        name: 'Powder Blue'
                    },
                    {
                        hex: '#C8A2C8',
                        name: 'Lavender'
                    },
                    {
                        hex: '#8FAF8F',
                        name: 'Sage Green'
                    },
                    {
                        hex: '#D4B5B5',
                        name: 'Dusty Rose'
                    },
                    {
                        hex: '#A8BAC4',
                        name: 'Slate Blue'
                    },
                    {
                        hex: '#C4B7A6',
                        name: 'Greige'
                    },
                ],
                avoid: [{
                        hex: '#FF4500',
                        name: 'Bright Orange'
                    },
                    {
                        hex: '#FFD700',
                        name: 'Warm Gold'
                    },
                    {
                        hex: '#8B4513',
                        name: 'Rust Brown'
                    },
                    {
                        hex: '#000000',
                        name: 'Jet Black'
                    },
                ],
                bestNote: 'Soft, cool, muted tones complement your natural delicacy without competing with it.',
                avoidNote: 'Warm, bright or very dark colours overpower your refined softness.',
                makeup: [{
                        type: 'Foundation',
                        shade: 'Cool Porcelain or Rose Beige',
                        note: 'pink undertone'
                    },
                    {
                        type: 'Blush',
                        shade: 'Soft Rose or Mauve',
                        note: 'very light handed'
                    },
                    {
                        type: 'Lips',
                        shade: 'Rose Berry or Soft Mauve',
                        note: 'avoid oranges'
                    },
                    {
                        type: 'Eyes',
                        shade: 'Slate, Plum, Smoky Rose',
                        note: 'cool-toned liner'
                    },
                    {
                        type: 'Highlighter',
                        shade: 'Pearl or Icy Pink',
                        note: 'very subtle'
                    },
                    {
                        type: 'Brows',
                        shade: 'Taupe or Soft Ash Brown',
                        note: 'no warm or red tones'
                    },
                ],
                insight: 'Your style archetype is the **Ethereal Romantic** — cool, elegant and quietly magnetic. You look stunning in monochromatic cool-toned looks, flowing fabrics, and subtle textures. Blush, dusty blue and soft lavender wardrobes are your power move. Silver jewellery and pearl accessories are your natural companions. Avoid anything too loud or warm-toned — your power is in refined restraint.'
            },
            autumn: {
                label: '🍂 Autumn',
                title: 'Deep Autumn',
                desc: 'Your colouring is rich, warm and earthy — like a golden forest in October. You belong in the colours of nature at its most abundant: spice, rust, olive and cognac.',
                best: [{
                        hex: '#B85C30',
                        name: 'Terracotta'
                    },
                    {
                        hex: '#8B6914',
                        name: 'Olive Gold'
                    },
                    {
                        hex: '#6B3A2A',
                        name: 'Rust'
                    },
                    {
                        hex: '#5C4A3A',
                        name: 'Warm Espresso'
                    },
                    {
                        hex: '#C8A05A',
                        name: 'Camel'
                    },
                    {
                        hex: '#3D5A3E',
                        name: 'Forest Green'
                    },
                ],
                avoid: [{
                        hex: '#FF69B4',
                        name: 'Hot Pink'
                    },
                    {
                        hex: '#00FFFF',
                        name: 'Bright Cyan'
                    },
                    {
                        hex: '#E8E8F0',
                        name: 'Icy Grey'
                    },
                    {
                        hex: '#DDA0DD',
                        name: 'Pastel Lilac'
                    },
                ],
                bestNote: 'Rich, warm earth tones mirror your natural depth and make you look powerfully grounded.',
                avoidNote: 'Cool pastels and bright neons clash with your warmth and look jarring.',
                makeup: [{
                        type: 'Foundation',
                        shade: 'Warm Beige or Golden Tan',
                        note: 'strong yellow undertone'
                    },
                    {
                        type: 'Blush',
                        shade: 'Terracotta or Warm Brick',
                        note: 'deep and warm'
                    },
                    {
                        type: 'Lips',
                        shade: 'Burnt Sienna, Deep Plum, Warm Nude',
                        note: 'avoid cool pinks'
                    },
                    {
                        type: 'Eyes',
                        shade: 'Bronze, Copper, Warm Brown, Forest Green',
                        note: 'smoky warm'
                    },
                    {
                        type: 'Highlighter',
                        shade: 'Warm Bronze or Copper',
                        note: 'rich metallic'
                    },
                    {
                        type: 'Brows',
                        shade: 'Rich Warm Brown or Auburn',
                        note: 'match depth'
                    },
                ],
                insight: 'Your style archetype is the **Earth Empress** — commanding, grounded and effortlessly luxurious. You look extraordinary in rich textures like suede, velvet, and leather in earthy tones. Think structured blazers in camel or rust, oversized knits in forest green, and statement boots in cognac. Gold and bronze jewellery are your power metals. Avoid anything ice-cold or pastel — your strength is in depth and warmth.'
            },
            winter: {
                label: '❄️ Winter',
                title: 'True Winter',
                desc: 'Your colouring is cool, clear and high-contrast — with a dramatic natural presence. You suit bold, saturated colours and stark contrasts that match your striking intensity.',
                best: [{
                        hex: '#1C1C3A',
                        name: 'Midnight Navy'
                    },
                    {
                        hex: '#8B0000',
                        name: 'True Red'
                    },
                    {
                        hex: '#FFFFFF',
                        name: 'Pure White'
                    },
                    {
                        hex: '#000000',
                        name: 'Jet Black'
                    },
                    {
                        hex: '#4B0082',
                        name: 'Royal Purple'
                    },
                    {
                        hex: '#006B6B',
                        name: 'Teal'
                    },
                ],
                avoid: [{
                        hex: '#F5DEB3',
                        name: 'Warm Wheat'
                    },
                    {
                        hex: '#D2691E',
                        name: 'Warm Brown'
                    },
                    {
                        hex: '#F0C060',
                        name: 'Honey Yellow'
                    },
                    {
                        hex: '#C8A87C',
                        name: 'Camel'
                    },
                ],
                bestNote: 'Bold, cool, saturated colours reflect your high-contrast natural drama perfectly.',
                avoidNote: 'Warm or muted tones look muddy against your cool clarity and dull your intensity.',
                makeup: [{
                        type: 'Foundation',
                        shade: 'Cool Ivory or Deep Ebony',
                        note: 'neutral or cool undertone'
                    },
                    {
                        type: 'Blush',
                        shade: 'Cool Berry or Deep Rose',
                        note: 'no orange tones'
                    },
                    {
                        type: 'Lips',
                        shade: 'True Red, Deep Plum, Berry',
                        note: 'high impact'
                    },
                    {
                        type: 'Eyes',
                        shade: 'Black, Charcoal, Navy, Deep Plum',
                        note: 'dramatic liner'
                    },
                    {
                        type: 'Highlighter',
                        shade: 'Icy Silver or Champagne',
                        note: 'high luminosity'
                    },
                    {
                        type: 'Brows',
                        shade: 'Cool Dark Brown or Charcoal',
                        note: 'defined and strong'
                    },
                ],
                insight: 'Your style archetype is the **Dramatic Visionary** — bold, elegant and impossible to ignore. You were made for high contrast: white blazers over black trousers, a red lip with a sleek dark outfit, jewel tones against pale skin. Architectural cuts, clean tailoring, and statement accessories are your language. Silver and platinum jewellery are your signature. Never dim yourself — your power is in full contrast.'
            }
        };

        /* ─── Clothing by body type ─── */
        const bodyClothing = {
            hourglass: [{
                    icon: '👗',
                    tip: 'Wrap dresses and belted styles to highlight your waist'
                },
                {
                    icon: '👖',
                    tip: 'High-waisted trousers and skirts that follow your curves'
                },
                {
                    icon: '🧥',
                    tip: 'Fitted blazers and tailored jackets — avoid oversized'
                },
                {
                    icon: '👙',
                    tip: 'Swimwear with structured cups and defined waistbands'
                },
                {
                    icon: '👠',
                    tip: 'Any heel works — your proportions are naturally balanced'
                },
                {
                    icon: '💍',
                    tip: 'Statement jewellery works well — your silhouette carries it'
                },
            ],
            pear: [{
                    icon: '👚',
                    tip: 'Statement tops, off-shoulder and boat necks to draw the eye up'
                },
                {
                    icon: '👗',
                    tip: 'A-line skirts and dresses that skim over hips gracefully'
                },
                {
                    icon: '🧥',
                    tip: 'Structured shoulders and embellished necklines'
                },
                {
                    icon: '👖',
                    tip: 'Dark bootcut or wide-leg trousers to balance the lower body'
                },
                {
                    icon: '🎽',
                    tip: 'Avoid clingy fabrics around hips — choose fluid drape'
                },
                {
                    icon: '👜',
                    tip: 'Crossbody bags worn high to keep focus upward'
                },
            ],
            apple: [{
                    icon: '👗',
                    tip: 'Empire waist dresses that flow from below the bust'
                },
                {
                    icon: '🧥',
                    tip: 'Open-front cardigans and dusters that create vertical lines'
                },
                {
                    icon: '👚',
                    tip: 'V-necks and deep scoop necks to elongate the torso'
                },
                {
                    icon: '👖',
                    tip: 'Straight or bootcut trousers — avoid low-rise'
                },
                {
                    icon: '🩱',
                    tip: 'One-piece swimsuits with ruching at the midsection'
                },
                {
                    icon: '🧣',
                    tip: 'Long necklaces and scarves to draw the eye downward'
                },
            ],
            rectangle: [{
                    icon: '👗',
                    tip: 'Peplum tops and ruffles to create the illusion of curves'
                },
                {
                    icon: '🧥',
                    tip: 'Belted outerwear to define a waist'
                },
                {
                    icon: '👖',
                    tip: 'Flared or wide-leg trousers for hip volume'
                },
                {
                    icon: '👚',
                    tip: 'Layered looks and textured fabrics add dimension'
                },
                {
                    icon: '👗',
                    tip: 'Wrap and bodycon dresses to suggest an hourglass shape'
                },
                {
                    icon: '💍',
                    tip: 'Statement belts are your best-kept secret accessory'
                },
            ],
            inverted: [{
                    icon: '👖',
                    tip: 'Wide-leg trousers and full skirts to balance the lower body'
                },
                {
                    icon: '👗',
                    tip: 'A-line and fit-and-flare silhouettes'
                },
                {
                    icon: '🧥',
                    tip: 'Avoid shoulder pads — choose minimal or raglan cuts'
                },
                {
                    icon: '👚',
                    tip: 'V-necks and lower necklines to soften shoulders'
                },
                {
                    icon: '🩱',
                    tip: 'Bold prints on bottoms, solids or minimal on top'
                },
                {
                    icon: '👠',
                    tip: 'Heels and pointed-toe shoes to lengthen the leg line'
                },
            ],
            default: [{
                    icon: '👗',
                    tip: 'Choose silhouettes that make you feel confident and comfortable'
                },
                {
                    icon: '🧥',
                    tip: 'Invest in quality basics in your best colours'
                },
                {
                    icon: '👖',
                    tip: 'Fit matters more than size — tailor when possible'
                },
                {
                    icon: '👚',
                    tip: 'Wear what makes you smile when you see yourself in the mirror'
                },
                {
                    icon: '💍',
                    tip: 'Accessories in your season\'s metals always elevate a look'
                },
                {
                    icon: '🎨',
                    tip: 'Stick to your colour palette for instant cohesion'
                },
            ]
        };

        /* ─── Determine colour season from answers ─── */
        function determineSeason() {
            const {
                skin,
                undertone,
                eyes,
                hair
            } = qa;

            let warmScore = 0,
                coolScore = 0;
            let depthScore = 0; // higher = deeper

            // Undertone (strongest signal)
            if (undertone === 'warm') warmScore += 3;
            if (undertone === 'cool') coolScore += 3;
            if (undertone === 'olive') warmScore += 2;
            if (undertone === 'neutral') {
                warmScore += 1;
                coolScore += 1;
            }

            // Skin
            if (['fair', 'light'].includes(skin)) depthScore -= 1;
            if (['tan', 'deep'].includes(skin)) depthScore += 2;

            // Eyes
            if (['blue', 'grey', 'green'].includes(eyes)) coolScore += 2;
            if (['hazel', 'light-brown'].includes(eyes)) warmScore += 1;
            if (['dark-brown'].includes(eyes)) {
                depthScore += 1;
                warmScore += 0.5;
            }

            // Hair
            if (['blonde', 'auburn'].includes(hair)) warmScore += 1;
            if (['grey'].includes(hair)) coolScore += 1;
            if (['black', 'dark-brown'].includes(hair)) depthScore += 1;

            const isWarm = warmScore >= coolScore;
            const isDeep = depthScore > 0;

            if (isWarm && !isDeep) return 'spring';
            if (!isWarm && !isDeep) return 'summer';
            if (isWarm && isDeep) return 'autumn';
            return 'winter';
        }

        /* ─── Pinterest search URLs (affiliate-friendly) ─── */
        function getPinterestLinks(season, body, gender) {
            const genderTerm = gender === 'male' ? 'men' : gender === 'nonbinary' ? 'androgynous fashion' : 'women';

            const seasonTerms = {
                spring: ['warm coral outfit', 'spring colour palette fashion', 'peach floral dress',
                    'warm earth tones outfit', 'golden hour aesthetic fashion'
                ],
                summer: ['dusty rose outfit', 'powder blue aesthetic', 'soft summer fashion', 'lavender outfit women',
                    'muted tones wardrobe'
                ],
                autumn: ['terracotta outfit', 'rust autumn fashion', 'dark autumn wardrobe', 'cognac leather look',
                    'forest green outfit'
                ],
                winter: ['monochrome black outfit', 'bold red lip fashion', 'cool winter palette', 'navy white outfit',
                    'jewel tone wardrobe'
                ],
            };

            const bodyTerms = {
                hourglass: 'wrap dress',
                pear: 'a line skirt outfit',
                apple: 'empire waist dress',
                rectangle: 'peplum outfit',
                inverted: 'wide leg pants outfit',
                default: 'classic outfit'
            };

            const bodyKey = body || 'default';
            const terms = seasonTerms[season] || seasonTerms.autumn;

            // Build Pinterest search URLs with affiliate tracking
            // Replace YOUR_AFFILIATE_TAG with your actual Pinterest affiliate tag or tracking params
            return terms.map((term, i) => {
                const query = encodeURIComponent(`${term} ${genderTerm}`);
                const url = `https://www.pinterest.com/search/pins/?q=${query}&rs=typed`;
                const icons = ['👗', '🧥', '👚', '👖', '✨'];
                const labels = [
                    'Colour Palette Look',
                    'Key Pieces',
                    'Seasonal Outfit',
                    `${bodyKey.charAt(0).toUpperCase()+bodyKey.slice(1)} Style`,
                    'Statement Look'
                ];
                return {
                    url,
                    label: labels[i] || term,
                    term,
                    icon: icons[i] || '🛍️',
                    query: `${term} ${genderTerm}`
                };
            });
        }

        /* ─── Render Pinterest cards ─── */
        function renderPinterest(season, body, gender) {
            const grid = document.getElementById('pinterestGrid');
            const links = getPinterestLinks(season, body, gender);
            console.log('Pinterest links:', links);
            const seasonColours = {
                spring: ['#F4C542', '#E8865A', '#7BC67E', '#F5A623', '#D4A5A5'],
                summer: ['#B0C4DE', '#C8A2C8', '#8FAF8F', '#D4B5B5', '#A8BAC4'],
                autumn: ['#B85C30', '#8B6914', '#6B3A2A', '#C8A05A', '#3D5A3E'],
                winter: ['#1C1C3A', '#8B0000', '#FFFFFF', '#4B0082', '#006B6B'],
            };

            const colours = seasonColours[season] || seasonColours.autumn;

            grid.innerHTML = links.map((link, i) => `
            <a class="pin-card" href="${link.url}" target="_blank" rel="noopener noreferrer"
            onclick="trackPinterestClick('${season}','${link.term}')">
            <div class="pin-card-img-placeholder" style="background:linear-gradient(135deg,${colours[i] || '#DDD'},${colours[(i+1)%colours.length]||'#CCC'})20,${colours[i]||'#EEE'}10)">
                <span style="font-size:42px;">${link.icon}</span>
            </div>
            <div class="pin-card-body">
                <div class="pin-card-title">${link.label}</div>
                <div class="pin-card-sub">${link.query}</div>
                <span class="pin-card-cta">Shop on Pinterest →</span>
            </div>
            </a>
            `).join('');
        }

        /* ─── Track clicks (add your analytics here) ─── */
        function trackPinterestClick(season, term) {
            // Google Analytics / GTM event — uncomment if GA4 is set up
            // gtag('event', 'pinterest_click', { season, term });
            console.log('[Affiliate] Pinterest click:', season, term);
        }

        /* ═══════════════════════════════════════════
        SHOW RESULTS
        ═══════════════════════════════════════════ */
        async function showQuizResults() {
            if (!document.getElementById('qn7').classList.contains('on')) return;

            qa.name = document.getElementById('user_name').value.trim();
            qa.email = document.getElementById('user_email').value.trim();

            // Save lead to server (non-blocking)
            saveLead(qa.name, qa.email, qa);

            // Show loading
            document.querySelectorAll('.q-step').forEach(el => el.classList.remove('active'));
            document.getElementById('qLoading').classList.add('active');
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });

            // Animate loading steps
            const steps = ['ls1', 'ls2', 'ls3', 'ls4', 'ls5'];
            for (let i = 0; i < steps.length; i++) {
                await delay(600);
                if (i > 0) document.getElementById(steps[i - 1]).classList.replace('active', 'done');
                document.getElementById(steps[i]).classList.add('active');
            }
            await delay(500);
            document.getElementById(steps[steps.length - 1]).classList.replace('active', 'done');
            await delay(300);

            const season = determineSeason();
            const data = seasons[season];
            const body = qa.body || 'default';
            const clothing = bodyClothing[body] || bodyClothing.default;

            // Populate results
            document.getElementById('r-badge').textContent = data.label;
            document.getElementById('r-title').textContent =
                `${qa.name ? qa.name + ', you\'re a ' : 'You are a '}${data.title}`;
            document.getElementById('r-desc').textContent = data.desc;

            // Best colours
            document.getElementById('r-best').innerHTML = data.best.map(c =>
                `<div class="r-swatch">
            <div class="r-swatch-dot" style="background:${c.hex};"></div>
            <div class="r-swatch-name">${c.name}</div>
            </div>`
            ).join('');
            document.getElementById('r-best-note').textContent = data.bestNote;

            // Avoid colours
            document.getElementById('r-avoid').innerHTML = data.avoid.map(c =>
                `<div class="r-swatch">
            <div class="r-swatch-dot" style="background:${c.hex};"></div>
            <div class="r-swatch-name">${c.name}</div>
            </div>`
            ).join('');
            document.getElementById('r-avoid-note').textContent = data.avoidNote;

            // Makeup
            document.getElementById('r-makeup').innerHTML = data.makeup.map(m =>
                `<div class="r-makeup-item">
            <div class="r-makeup-type">${m.type}</div>
            <div class="r-makeup-shade">${m.shade}</div>
            <div class="r-makeup-note">${m.note}</div>
            </div>`
            ).join('');

            // Clothing
            document.getElementById('r-cloth').innerHTML = clothing.map(c =>
                `<li><span>${c.icon}</span>${c.tip}</li>`
            ).join('');

            // Insight (convert **bold** to <strong>)
            document.getElementById('r-insight').innerHTML = data.insight.replace(/\*\*(.*?)\*\*/g,
                '<strong>$1</strong>');

            // Show results
            document.getElementById('qLoading').classList.remove('active');
            document.getElementById('qResults').classList.add('active');
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });

            // Render Pinterest (slight delay for perceived quality)
            setTimeout(() => renderPinterest(season, body, qa.gender), 400);
        }

        /* ─── Save lead to server ─── */
        async function saveLead(name, email, answers) {
            try {
                await fetch('{{ route('quiz.save_lead') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute(
                            'content') || ''
                    },
                    body: JSON.stringify({
                        name,
                        email,
                        answers: {
                            gender: answers.gender,
                            skin: answers.skin,
                            undertone: answers.undertone,
                            eyes: answers.eyes,
                            hair: answers.hair,
                            body: answers.body
                        }
                    })
                });
            } catch (e) {
                console.warn('Lead save failed:', e);
            }
        }

        /* ─── Restart ─── */
        function restartQ() {
            Object.keys(qa).forEach(k => qa[k] = null);
            document.querySelectorAll('.opt,.gender-opt,.body-opt').forEach(el => el.classList.remove('sel'));
            document.querySelectorAll('.btn-next-q').forEach(btn => {
                btn.classList.remove('on');
            });
            // Reset photo
            document.getElementById('photoUploadArea').classList.remove('has-photo');
            document.getElementById('photoUploadArea').innerHTML = `
                <span class="photo-upload-icon">📸</span>
                <div class="photo-upload-title">Tap to upload your photo</div>
                <div class="photo-upload-sub">JPG, PNG or WEBP · Max 10MB</div>
            `;
            // Photo step next btn always enabled
            document.getElementById('qn1').classList.add('on');
            document.getElementById('user_name').value = '';
            document.getElementById('user_email').value = '';
            qGo(0);
        }

        /* ─── Helpers ─── */
        function delay(ms) {
            return new Promise(r => setTimeout(r, ms));
        }

        // Photo step: next is always enabled (photo is optional)
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('qn1')?.classList.add('on');
        });
    </script>
@endsection
