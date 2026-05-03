@extends('layouts.app')

@section('content')
    <div class="page" id="page-test">
        <div class="test-hero">
            <div class="section-label" style="margin-bottom:12px;">✦ Colour & Style Analysis</div>
            <h1 class="section-h2" style="margin-bottom:8px;">Find your colour season</h1>
            <p style="color:var(--muted); font-size:15px; margin-bottom:28px;">Answer 5 quick questions to discover
                your perfect palette</p>
            <div class="progress-bar-wrap">
                <div class="progress-steps">
                    <div class="p-step active" id="ps1"></div>
                    <div class="p-step" id="ps2"></div>
                    <div class="p-step" id="ps3"></div>
                    <div class="p-step" id="ps4"></div>
                    <div class="p-step" id="ps5"></div>
                </div>
                <div class="progress-label" id="progress-label">Step 1 of 5</div>
            </div>
        </div>

        <div class="quiz-container">
            <!-- Step 1: Skin Tone -->
            <div class="quiz-step active" id="step1">
                <div class="quiz-q">What is your skin tone?</div>
                <div class="quiz-hint">Choose the option that best matches your natural complexion</div>
                <div class="options-grid">
                    <div class="opt-card" onclick="selectOpt(this,'skin','fair')">
                        <div class="opt-swatch" style="background:linear-gradient(135deg,#FDDBB4,#F5C89C);"></div>
                        <div class="opt-label">Fair</div>
                        <div class="opt-sublabel">Very light skin</div>
                    </div>
                    <div class="opt-card" onclick="selectOpt(this,'skin','light')">
                        <div class="opt-swatch" style="background:linear-gradient(135deg,#F0C089,#D4956A);"></div>
                        <div class="opt-label">Light</div>
                        <div class="opt-sublabel">Light to medium</div>
                    </div>
                    <div class="opt-card" onclick="selectOpt(this,'skin','medium')">
                        <div class="opt-swatch" style="background:linear-gradient(135deg,#C68642,#A0522D);"></div>
                        <div class="opt-label">Medium</div>
                        <div class="opt-sublabel">Warm beige/olive</div>
                    </div>
                    <div class="opt-card" onclick="selectOpt(this,'skin','tan')">
                        <div class="opt-swatch" style="background:linear-gradient(135deg,#8D5524,#6B3A1F);"></div>
                        <div class="opt-label">Tan</div>
                        <div class="opt-sublabel">Medium to deep</div>
                    </div>
                    <div class="opt-card" onclick="selectOpt(this,'skin','deep')">
                        <div class="opt-swatch" style="background:linear-gradient(135deg,#4A2508,#2C1A08);"></div>
                        <div class="opt-label">Deep</div>
                        <div class="opt-sublabel">Rich dark skin</div>
                    </div>
                </div>
                <div class="quiz-nav">
                    <div></div>
                    <button class="btn-next" id="next1" onclick="goStep(2)">Continue →</button>
                </div>
            </div>

            <!-- Step 2: Undertone -->
            <div class="quiz-step" id="step2">
                <div class="quiz-q">What is your skin's undertone?</div>
                <div class="quiz-hint">Look at your veins — blue/purple = cool, green = warm, can't tell = neutral
                </div>
                <div class="options-grid">
                    <div class="opt-card" onclick="selectOpt(this,'undertone','warm')">
                        <div class="opt-swatch" style="background:linear-gradient(135deg,#FFD700,#FFA500);"></div>
                        <div class="opt-label">Warm</div>
                        <div class="opt-sublabel">Yellow/golden cast</div>
                    </div>
                    <div class="opt-card" onclick="selectOpt(this,'undertone','cool')">
                        <div class="opt-swatch" style="background:linear-gradient(135deg,#B0C4DE,#6A5ACD);"></div>
                        <div class="opt-label">Cool</div>
                        <div class="opt-sublabel">Pink/blue cast</div>
                    </div>
                    <div class="opt-card" onclick="selectOpt(this,'undertone','neutral')">
                        <div class="opt-swatch" style="background:linear-gradient(135deg,#D2B48C,#BC9A6A);"></div>
                        <div class="opt-label">Neutral</div>
                        <div class="opt-sublabel">Mix of both</div>
                    </div>
                    <div class="opt-card" onclick="selectOpt(this,'undertone','olive')">
                        <div class="opt-swatch" style="background:linear-gradient(135deg,#8FBC8F,#6B8E23);"></div>
                        <div class="opt-label">Olive</div>
                        <div class="opt-sublabel">Green/yellow cast</div>
                    </div>
                </div>
                <div class="quiz-nav">
                    <button class="btn-back" onclick="goStep(1)">← Back</button>
                    <button class="btn-next" id="next2" onclick="goStep(3)">Continue →</button>
                </div>
            </div>

            <!-- Step 3: Eye Color -->
            <div class="quiz-step" id="step3">
                <div class="quiz-q">What colour are your eyes?</div>
                <div class="quiz-hint">Select your natural eye colour</div>
                <div class="options-grid">
                    <div class="opt-card" onclick="selectOpt(this,'eyes','blue')">
                        <div class="opt-swatch" style="background:radial-gradient(circle, #6CA6CD, #4682B4, #1C3A6E);">
                        </div>
                        <div class="opt-label">Blue</div>
                    </div>
                    <div class="opt-card" onclick="selectOpt(this,'eyes','green')">
                        <div class="opt-swatch" style="background:radial-gradient(circle, #8FBC8F, #3D7A47, #1B4A24);">
                        </div>
                        <div class="opt-label">Green</div>
                    </div>
                    <div class="opt-card" onclick="selectOpt(this,'eyes','hazel')">
                        <div class="opt-swatch" style="background:radial-gradient(circle, #C8A96E, #8B6914, #4A3508);">
                        </div>
                        <div class="opt-label">Hazel</div>
                    </div>
                    <div class="opt-card" onclick="selectOpt(this,'eyes','brown')">
                        <div class="opt-swatch" style="background:radial-gradient(circle, #9B6B3A, #6B3A1F, #2C150A);">
                        </div>
                        <div class="opt-label">Brown</div>
                    </div>
                    <div class="opt-card" onclick="selectOpt(this,'eyes','dark')">
                        <div class="opt-swatch" style="background:radial-gradient(circle, #3D2B1F, #1A0F0A, #000);">
                        </div>
                        <div class="opt-label">Dark Brown</div>
                    </div>
                    <div class="opt-card" onclick="selectOpt(this,'eyes','grey')">
                        <div class="opt-swatch" style="background:radial-gradient(circle, #B0B8C0, #7A8A94, #3A464E);">
                        </div>
                        <div class="opt-label">Grey</div>
                    </div>
                </div>
                <div class="quiz-nav">
                    <button class="btn-back" onclick="goStep(2)">← Back</button>
                    <button class="btn-next" id="next3" onclick="goStep(4)">Continue →</button>
                </div>
            </div>

            <!-- Step 4: Hair Color -->
            <div class="quiz-step" id="step4">
                <div class="quiz-q">What is your natural hair colour?</div>
                <div class="quiz-hint">Choose your natural, untreated hair shade</div>
                <div class="options-grid">
                    <div class="opt-card" onclick="selectOpt(this,'hair','blonde')">
                        <div class="opt-swatch" style="background:linear-gradient(135deg,#F5E0A0,#D4A843);"></div>
                        <div class="opt-label">Blonde</div>
                    </div>
                    <div class="opt-card" onclick="selectOpt(this,'hair','auburn')">
                        <div class="opt-swatch" style="background:linear-gradient(135deg,#C67B4A,#8B3A1A);"></div>
                        <div class="opt-label">Auburn / Red</div>
                    </div>
                    <div class="opt-card" onclick="selectOpt(this,'hair','light-brown')">
                        <div class="opt-swatch" style="background:linear-gradient(135deg,#A0724E,#6B4226);"></div>
                        <div class="opt-label">Light Brown</div>
                    </div>
                    <div class="opt-card" onclick="selectOpt(this,'hair','dark-brown')">
                        <div class="opt-swatch" style="background:linear-gradient(135deg,#4A2C1A,#2C1810);"></div>
                        <div class="opt-label">Dark Brown</div>
                    </div>
                    <div class="opt-card" onclick="selectOpt(this,'hair','black')">
                        <div class="opt-swatch" style="background:linear-gradient(135deg,#2A2A2A,#080808);"></div>
                        <div class="opt-label">Black</div>
                    </div>
                    <div class="opt-card" onclick="selectOpt(this,'hair','grey')">
                        <div class="opt-swatch" style="background:linear-gradient(135deg,#C8C8C8,#888888);"></div>
                        <div class="opt-label">Grey / White</div>
                    </div>
                </div>
                <div class="quiz-nav">
                    <button class="btn-back" onclick="goStep(3)">← Back</button>
                    <button class="btn-next" id="next4" onclick="goStep(5)">Continue →</button>
                </div>
            </div>

            <!-- Step 5: Body Type -->
            <div class="quiz-step" id="step5">
                <div class="quiz-q">What is your body type?</div>
                <div class="quiz-hint">This helps us recommend the most flattering silhouettes for you</div>
                <div class="body-grid">
                    <div class="body-card" onclick="selectBody(this,'hourglass')">
                        <div class="body-icon">⧖</div>
                        <div class="body-name">Hourglass</div>
                        <div class="opt-sublabel" style="font-size:11px; margin-top:4px;">Balanced bust & hips,
                            defined waist</div>
                    </div>
                    <div class="body-card" onclick="selectBody(this,'pear')">
                        <div class="body-icon">🍐</div>
                        <div class="body-name">Pear</div>
                        <div class="opt-sublabel" style="font-size:11px; margin-top:4px;">Hips wider than shoulders
                        </div>
                    </div>
                    <div class="body-card" onclick="selectBody(this,'apple')">
                        <div class="body-icon">🍎</div>
                        <div class="body-name">Apple</div>
                        <div class="opt-sublabel" style="font-size:11px; margin-top:4px;">Fuller middle, slim legs
                        </div>
                    </div>
                    <div class="body-card" onclick="selectBody(this,'rectangle')">
                        <div class="body-icon">▭</div>
                        <div class="body-name">Rectangle</div>
                        <div class="opt-sublabel" style="font-size:11px; margin-top:4px;">Shoulders, waist & hips
                            similar width</div>
                    </div>
                    <div class="body-card" onclick="selectBody(this,'inverted')">
                        <div class="body-icon">▽</div>
                        <div class="body-name">Inverted Triangle</div>
                        <div class="opt-sublabel" style="font-size:11px; margin-top:4px;">Broad shoulders, narrow hips
                        </div>
                    </div>
                </div>
                <div class="quiz-nav">
                    <button class="btn-back" onclick="goStep(4)">← Back</button>
                    <button class="btn-next enabled" id="next5" onclick="showResults()">See My Results ✨</button>
                </div>
            </div>

            <!-- Results -->
            <div class="quiz-step" id="stepResults">
                <div class="results-header">
                    <div class="result-season-badge" id="season-badge"></div>
                    <h2 class="section-h2" id="season-title"></h2>
                    <p style="color:var(--muted); font-size:16px; max-width:500px; margin: 0 auto;" id="season-desc">
                    </p>
                </div>

                <div class="results-grid">
                    <div class="result-card">
                        <div class="rc-title">Your Best Colours</div>
                        <div class="palette-row" id="best-palette"></div>
                        <p style="font-size:13px; color:var(--muted); margin-top:20px;" id="palette-note"></p>
                    </div>
                    <div class="result-card">
                        <div class="rc-title">Colours to Avoid</div>
                        <div class="avoid-row" id="avoid-palette"></div>
                        <p style="font-size:13px; color:var(--muted); margin-top:20px;" id="avoid-note"></p>
                    </div>
                    <div class="result-card" style="grid-column:1/-1;">
                        <div class="rc-title">Clothing Recommendations for Your Shape</div>
                        <ul class="cloth-list" id="cloth-recs"></ul>
                    </div>
                    <div class="result-card" style="grid-column:1/-1;">
                        <div class="rc-title">Style Insights</div>
                        <p style="font-size:15px; color:var(--charcoal); line-height:1.7;" id="style-insight"></p>
                    </div>
                </div>

                <div style="text-align:center; margin-top:20px;">
                    <button class="btn-primary" onclick="restartQuiz()">Retake Quiz</button>
                    &nbsp;
                    <button class="btn-outline" onclick="showPage('blog')">Explore Style Tips</button>
                </div>
            </div>
        </div>
    </div>
@endsection
