{{-- resources/views/quiz.blade.php --}}
@extends('layouts.app')

@section('page_style')
<style>
/* ══════════════════════════════════════════════════════════
   Google Fonts
══════════════════════════════════════════════════════════ */
@import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=DM+Sans:wght@300;400;500&display=swap');

/* ══════════════════════════════════════════════════════════
   Root Variables
══════════════════════════════════════════════════════════ */
:root {
    --quiz-bg:          #FAF8F5;
    --quiz-card:        #FFFFFF;
    --quiz-border:      #E8E2D9;
    --quiz-accent:      #C4956A;
    --quiz-accent-dark: #A07850;
    --quiz-text:        #1A1410;
    --quiz-muted:       #8A7A6A;
    --quiz-light:       #F2EDE6;
    --quiz-success:     #5C7A5C;
    --quiz-shadow:      0 4px 32px rgba(0,0,0,.08);
    --quiz-radius:      18px;
    --quiz-radius-sm:   10px;
    font-family: 'DM Sans', sans-serif;
}

/* ══════════════════════════════════════════════════════════
   Page Shell
══════════════════════════════════════════════════════════ */
#page-quiz { background: var(--quiz-bg); min-height:100vh; padding: 0 0 80px; }

/* ══════════════════════════════════════════════════════════
   Header
══════════════════════════════════════════════════════════ */
.quiz-header {
    text-align: center;
    padding: 60px 24px 40px;
    background: linear-gradient(180deg, #F2EDE6 0%, var(--quiz-bg) 100%);
    border-bottom: 1px solid var(--quiz-border);
}
.quiz-header .section-label {
    font-size:11px; font-weight:500; letter-spacing:3px;
    text-transform:uppercase; color:var(--quiz-accent);
    display:block; margin-bottom:14px;
}
.quiz-header h1 {
    font-family:'Cormorant Garamond',Georgia,serif;
    font-size:clamp(32px,5vw,52px); font-weight:300;
    color:var(--quiz-text); margin:0 0 10px;
    line-height:1.15; letter-spacing:-0.5px;
}
.quiz-header .subtitle { color:var(--quiz-muted); font-size:14px; font-weight:300; margin:0; }

/* ══════════════════════════════════════════════════════════
   Progress Bar
══════════════════════════════════════════════════════════ */
.quiz-progress {
    display:flex; align-items:center; justify-content:center;
    gap:0; margin-top:36px; flex-wrap:nowrap;
    overflow-x:auto; padding:8px;
}
.qp-step { display:flex; flex-direction:column; align-items:center; gap:6px; flex-shrink:0; width:2.5rem; }
.qp-circle {
    width:34px; height:34px; border-radius:50%;
    background:var(--quiz-card); border:2px solid var(--quiz-border);
    display:flex; align-items:center; justify-content:center;
    font-size:13px; font-weight:500; color:var(--quiz-muted);
    transition:all .3s ease;
}
.qp-circle.active { background:var(--quiz-accent); border-color:var(--quiz-accent); color:#fff; box-shadow:0 0 0 4px rgba(196,149,106,.2); }
.qp-circle.done   { background:var(--quiz-success); border-color:var(--quiz-success); color:#fff; }
.qp-label { font-size:10px; color:var(--quiz-muted); letter-spacing:.5px; white-space:nowrap; }
.qp-line  { height:2px; width:28px; background:var(--quiz-border); margin-bottom:18px; transition:background .3s; flex-shrink:0; }
.qp-line.done { background:var(--quiz-success); }

/* ══════════════════════════════════════════════════════════
   Quiz Body
══════════════════════════════════════════════════════════ */
.quiz-body { max-width:760px; margin:48px auto 0; padding:0 20px; }
.q-step { display:none; animation:fadeSlideIn .4s ease; }
.q-step.active { display:block; }
@keyframes fadeSlideIn { from { opacity:0; transform:translateY(16px); } to { opacity:1; transform:translateY(0); } }
.q-num { font-size:11px; font-weight:500; letter-spacing:2.5px; text-transform:uppercase; color:var(--quiz-accent); margin-bottom:10px; }
.q-question { font-family:'Cormorant Garamond',serif; font-size:clamp(22px,3vw,30px); font-weight:400; color:var(--quiz-text); margin-bottom:8px; line-height:1.25; }
.q-hint { font-size:14px; color:var(--quiz-muted); margin-bottom:28px; font-weight:300; line-height:1.5; }

/* ══════════════════════════════════════════════════════════
   Gender Step
══════════════════════════════════════════════════════════ */
.gender-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:16px; margin-bottom:32px; }
.gender-opt {
    background:var(--quiz-card); border:2px solid var(--quiz-border);
    border-radius:var(--quiz-radius); padding:28px 16px; text-align:center;
    cursor:pointer; transition:all .25s ease;
}
.gender-opt:hover { border-color:var(--quiz-accent); transform:translateY(-2px); box-shadow:var(--quiz-shadow); }
.gender-opt.sel   { border-color:var(--quiz-accent); background:linear-gradient(135deg,#FDF6EE,#F5EAD8); box-shadow:0 0 0 3px rgba(196,149,106,.15); }
.gender-opt-icon  { font-size:36px; margin-bottom:10px; display:block; }
.gender-opt-name  { font-family:'Cormorant Garamond',serif; font-size:18px; font-weight:400; color:var(--quiz-text); }

/* ══════════════════════════════════════════════════════════
   Option Grids
══════════════════════════════════════════════════════════ */
.opt-grid { display:grid; grid-template-columns:repeat(auto-fill,minmax(130px,1fr)); gap:14px; margin-bottom:32px; }
.opt {
    background:var(--quiz-card); border:2px solid var(--quiz-border);
    border-radius:var(--quiz-radius); padding:20px 14px 18px;
    text-align:center; cursor:pointer; transition:all .25s ease;
}
.opt:hover { border-color:var(--quiz-accent); transform:translateY(-2px); box-shadow:var(--quiz-shadow); }
.opt.sel   { border-color:var(--quiz-accent); background:linear-gradient(135deg,#FDF6EE,#F5EAD8); box-shadow:0 0 0 3px rgba(196,149,106,.15); }
.opt-circle { width:52px; height:52px; border-radius:50%; margin:0 auto 12px; box-shadow:0 3px 10px rgba(0,0,0,.15); }
.opt-name   { font-weight:500; font-size:14px; color:var(--quiz-text); margin-bottom:3px; }
.opt-sub    { font-size:11px; color:var(--quiz-muted); line-height:1.4; }

/* ══════════════════════════════════════════════════════════
   Body Type
══════════════════════════════════════════════════════════ */
.body-opt-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:14px; margin-bottom:32px; }
.body-opt {
    background:var(--quiz-card); border:2px solid var(--quiz-border);
    border-radius:var(--quiz-radius); padding:24px 14px 20px;
    text-align:center; cursor:pointer; transition:all .25s ease;
}
.body-opt:hover { border-color:var(--quiz-accent); transform:translateY(-2px); box-shadow:var(--quiz-shadow); }
.body-opt.sel   { border-color:var(--quiz-accent); background:linear-gradient(135deg,#FDF6EE,#F5EAD8); box-shadow:0 0 0 3px rgba(196,149,106,.15); }
.body-opt-icon { font-size:28px; display:block; margin-bottom:8px; }
.body-opt-name { font-weight:500; font-size:14px; color:var(--quiz-text); margin-bottom:4px; }
.body-opt-desc { font-size:11px; color:var(--quiz-muted); line-height:1.4; }

/* ══════════════════════════════════════════════════════════
   Photo Upload
══════════════════════════════════════════════════════════ */
.photo-upload-area {
    border:2px dashed var(--quiz-border); border-radius:var(--quiz-radius);
    padding:48px 24px; text-align:center; cursor:pointer;
    background:var(--quiz-card); transition:all .25s ease;
    position:relative; margin-bottom:32px;
}
.photo-upload-area:hover { border-color:var(--quiz-accent); background:linear-gradient(135deg,#FDF6EE,#FAF5EE); }
.photo-upload-area.has-photo { padding:0; border-style:solid; border-color:var(--quiz-accent); overflow:hidden; }
.photo-upload-area.has-photo img { width:100%; max-height:300px; object-fit:cover; display:block; }
.photo-upload-icon  { font-size:42px; margin-bottom:12px; display:block; }
.photo-upload-title { font-family:'Cormorant Garamond',serif; font-size:20px; color:var(--quiz-text); margin-bottom:6px; }
.photo-upload-sub   { font-size:13px; color:var(--quiz-muted); }
.photo-change-btn   {
    position:absolute; bottom:12px; right:12px;
    background:rgba(255,255,255,.92); border:1px solid var(--quiz-border);
    border-radius:8px; padding:6px 14px; font-size:13px; cursor:pointer; font-family:'DM Sans',sans-serif;
}
.photo-ai-note {
    background:linear-gradient(135deg,#F0EDE8,#E8E2D8);
    border-radius:var(--quiz-radius-sm); padding:14px 18px;
    margin-bottom:28px; font-size:13px; color:var(--quiz-muted);
    display:flex; align-items:center; gap:10px;
}

/* ══════════════════════════════════════════════════════════
   Contact Form
══════════════════════════════════════════════════════════ */
.contact-form-wrap { background:var(--quiz-card); border:1px solid var(--quiz-border); border-radius:var(--quiz-radius); padding:36px; margin-bottom:32px; }
.contact-form-wrap .form-row { margin-bottom:20px; }
.contact-form-wrap label { display:block; font-size:12px; font-weight:500; letter-spacing:1.5px; text-transform:uppercase; color:var(--quiz-muted); margin-bottom:8px; }
.contact-form-wrap input {
    width:100%; padding:14px 18px;
    border:1.5px solid var(--quiz-border); border-radius:var(--quiz-radius-sm);
    font-family:'DM Sans',sans-serif; font-size:15px; color:var(--quiz-text);
    background:var(--quiz-bg); outline:none; transition:border-color .2s; box-sizing:border-box;
}
.contact-form-wrap input:focus { border-color:var(--quiz-accent); background:#fff; }
.privacy-note { font-size:12px; color:var(--quiz-muted); margin-top:16px; text-align:center; line-height:1.5; }

/* ══════════════════════════════════════════════════════════
   Nav Buttons
══════════════════════════════════════════════════════════ */
.q-nav { display:flex; justify-content:space-between; align-items:center; margin-top:8px; padding-top:8px; }
.btn-back-q { background:none; border:1.5px solid var(--quiz-border); border-radius:var(--quiz-radius-sm); padding:12px 22px; font-family:'DM Sans',sans-serif; font-size:14px; color:var(--quiz-muted); cursor:pointer; transition:all .2s; }
.btn-back-q:hover { border-color:var(--quiz-accent); color:var(--quiz-accent); }
.btn-next-q { background:var(--quiz-border); border:none; border-radius:var(--quiz-radius-sm); padding:13px 28px; font-family:'DM Sans',sans-serif; font-size:14px; font-weight:500; color:var(--quiz-muted); cursor:not-allowed; transition:all .25s ease; }
.btn-next-q.on { background:linear-gradient(135deg,var(--quiz-accent),var(--quiz-accent-dark)); color:#fff; cursor:pointer; box-shadow:0 4px 16px rgba(196,149,106,.35); }
.btn-next-q.on:hover { transform:translateY(-1px); box-shadow:0 6px 20px rgba(196,149,106,.45); }

/* ══════════════════════════════════════════════════════════
   Loading
══════════════════════════════════════════════════════════ */
#qLoading { text-align:center; padding:80px 24px; }
.loading-spinner { width:52px; height:52px; border:3px solid var(--quiz-border); border-top-color:var(--quiz-accent); border-radius:50%; animation:spin .8s linear infinite; margin:0 auto 24px; }
@keyframes spin { to { transform:rotate(360deg); } }
.loading-steps { list-style:none; padding:0; margin:28px 0 0; }
.loading-steps li { font-size:14px; color:var(--quiz-muted); padding:6px 0; transition:color .3s; }
.loading-steps li.active { color:var(--quiz-accent); font-weight:500; }
.loading-steps li.done   { color:var(--quiz-success); }
.loading-steps li.done::before { content:'✓ '; }

/* ══════════════════════════════════════════════════════════
   Results
══════════════════════════════════════════════════════════ */
.results-wrap { padding:0; }
.results-hero { background:linear-gradient(135deg,#F5EDE0,#EDE0CC); border-radius:var(--quiz-radius); padding:48px 32px 40px; text-align:center; margin-bottom:24px; border:1px solid rgba(196,149,106,.2); }
.result-badge { font-family:'Cormorant Garamond',serif; font-size:13px; font-weight:400; letter-spacing:3px; text-transform:uppercase; color:var(--quiz-accent-dark); background:rgba(196,149,106,.12); display:inline-block; padding:7px 20px; border-radius:40px; border:1px solid rgba(196,149,106,.25); margin-bottom:18px; }
.results-hero h2 { font-family:'Cormorant Garamond',serif; font-size:clamp(28px,4vw,42px); font-weight:300; color:var(--quiz-text); margin:0 auto 14px; line-height:1.2; }
.results-hero p  { font-size:15px; color:var(--quiz-muted); max-width:520px; margin:0 auto; line-height:1.6; font-weight:300; }
.results-main { display:grid; grid-template-columns:1fr 1fr; gap:18px; margin-bottom:24px; }
.r-card { background:var(--quiz-card); border:1px solid var(--quiz-border); border-radius:var(--quiz-radius); padding:24px 22px; }
.r-card.r-full { grid-column:1/-1; }
.r-card-label { font-size:10px; font-weight:500; letter-spacing:2.5px; text-transform:uppercase; color:var(--quiz-accent); margin-bottom:16px; }
.r-palette-row,.r-avoid-row { display:flex; gap:10px; flex-wrap:wrap; margin-bottom:12px; }
.r-swatch { display:flex; flex-direction:column; align-items:center; gap:6px; cursor:default; }
.r-swatch-dot { width:40px; height:40px; border-radius:50%; border:1px solid rgba(0,0,0,.08); box-shadow:0 2px 8px rgba(0,0,0,.1); }
.r-avoid-row .r-swatch-dot { filter:grayscale(30%); opacity:.65; }
.r-swatch-name { font-size:10px; color:var(--quiz-muted); text-align:center; max-width:48px; line-height:1.3; }
.r-note  { font-size:13px; color:var(--quiz-muted); line-height:1.55; font-style:italic; margin-top:6px; }
.r-makeup { display:grid; grid-template-columns:repeat(auto-fill,minmax(140px,1fr)); gap:14px; }
.r-makeup-item  { background:var(--quiz-light); border-radius:var(--quiz-radius-sm); padding:14px; }
.r-makeup-type  { font-size:10px; font-weight:500; letter-spacing:1.5px; text-transform:uppercase; color:var(--quiz-accent); margin-bottom:5px; }
.r-makeup-shade { font-size:14px; color:var(--quiz-text); font-weight:500; margin-bottom:3px; }
.r-makeup-note  { font-size:12px; color:var(--quiz-muted); }
.r-cloth-list   { list-style:none; padding:0; margin:0; display:grid; grid-template-columns:1fr 1fr; gap:10px; }
.r-cloth-list li { background:var(--quiz-light); border-radius:var(--quiz-radius-sm); padding:12px 16px; font-size:14px; color:var(--quiz-text); line-height:1.4; display:flex; gap:10px; align-items:flex-start; }
.r-cloth-list li span { color:var(--quiz-accent); font-size:16px; flex-shrink:0; }
.r-insight { font-size:15px; color:var(--quiz-text); line-height:1.7; font-weight:300; }

/* ══════════════════════════════════════════════════════════
   ██  COLOUR TRY-ON PANEL  ██
══════════════════════════════════════════════════════════ */
.tryon-section {
    background: var(--quiz-card);
    border: 1px solid var(--quiz-border);
    border-radius: var(--quiz-radius);
    padding: 28px 24px;
    margin-bottom: 24px;
}
.tryon-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 22px; font-weight: 400;
    color: var(--quiz-text); margin-bottom: 4px;
}
.tryon-sub { font-size: 13px; color: var(--quiz-muted); margin-bottom: 20px; }

/* Two-column layout */
.tryon-layout { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; align-items: start; }
@media(max-width:600px){ .tryon-layout { grid-template-columns:1fr; } }

/* Photo + overlay container */
.tryon-photo-wrap {
    position: relative;
    border-radius: var(--quiz-radius);
    overflow: hidden;
    background: var(--quiz-light);
    min-height: 320px;
    display: flex; align-items: center; justify-content: center;
}
.tryon-photo-wrap img#tryonPhoto {
    width: 100%; height: 100%;
    object-fit: cover; display: block;
    border-radius: var(--quiz-radius);
}
.tryon-placeholder {
    text-align: center; padding: 40px 20px; color: var(--quiz-muted);
}
.tryon-placeholder .ph-icon { font-size: 56px; display: block; margin-bottom: 10px; }
.tryon-placeholder p { font-size: 13px; line-height: 1.5; }

/* Colour zone overlays — draggable swatches on the photo */
.colour-zones {
    position: absolute; inset: 0; pointer-events: none;
}
.czone {
    position: absolute;
    width: 48px; height: 48px;
    border-radius: 50%;
    border: 3px solid #fff;
    box-shadow: 0 3px 12px rgba(0,0,0,.35), 0 0 0 2px rgba(0,0,0,.15);
    cursor: grab;
    pointer-events: all;
    transition: transform .15s, box-shadow .15s;
    display: flex; align-items: center; justify-content: center;
    font-size: 18px;
    user-select: none;
    touch-action: none;
}
.czone:active { cursor: grabbing; transform: scale(1.12); box-shadow: 0 6px 20px rgba(0,0,0,.4), 0 0 0 3px var(--quiz-accent); }
.czone-label {
    position: absolute;
    bottom: -22px; left: 50%; transform: translateX(-50%);
    font-size: 9px; font-weight: 600; letter-spacing: .5px;
    text-transform: uppercase; color: #fff;
    background: rgba(0,0,0,.55); border-radius: 4px;
    padding: 2px 6px; white-space: nowrap; pointer-events: none;
}

/* Right panel: colour controls */
.tryon-controls { display: flex; flex-direction: column; gap: 20px; }

/* Season palette quick-select */
.tryon-palette-strip {
    display: flex; flex-direction: column; gap: 10px;
}
.palette-row-label {
    font-size: 10px; font-weight: 600; letter-spacing: 2px;
    text-transform: uppercase; color: var(--quiz-accent); margin-bottom: 4px;
}
.palette-swatches { display: flex; flex-wrap: wrap; gap: 8px; }
.pswatch {
    width: 36px; height: 36px; border-radius: 50%;
    border: 2px solid transparent;
    box-shadow: 0 2px 8px rgba(0,0,0,.15);
    cursor: pointer; transition: transform .15s, box-shadow .15s, border-color .15s;
    position: relative;
}
.pswatch:hover { transform: scale(1.18); box-shadow: 0 4px 12px rgba(0,0,0,.25); }
.pswatch.selected { border-color: var(--quiz-accent); transform: scale(1.18); }
.pswatch-tip {
    position: absolute; bottom: -24px; left: 50%; transform: translateX(-50%);
    font-size: 9px; color: var(--quiz-muted); white-space: nowrap;
    opacity: 0; pointer-events: none; transition: opacity .15s;
}
.pswatch:hover .pswatch-tip { opacity: 1; }

/* Zone selector tabs */
.zone-tabs { display: flex; gap: 8px; flex-wrap: wrap; }
.zone-tab {
    padding: 6px 14px; border-radius: 20px;
    font-size: 12px; font-weight: 500;
    border: 1.5px solid var(--quiz-border);
    color: var(--quiz-muted); cursor: pointer;
    transition: all .2s; background: transparent;
}
.zone-tab:hover  { border-color: var(--quiz-accent); color: var(--quiz-accent); }
.zone-tab.active { background: var(--quiz-accent); border-color: var(--quiz-accent); color: #fff; }

/* Custom colour picker row */
.custom-colour-row {
    background: var(--quiz-light);
    border-radius: var(--quiz-radius-sm);
    padding: 16px;
    display: flex; flex-direction: column; gap: 12px;
}
.custom-colour-row label {
    font-size: 11px; font-weight: 600; letter-spacing: 1.5px;
    text-transform: uppercase; color: var(--quiz-muted);
}
.colour-input-wrap { display: flex; gap: 10px; align-items: center; }
.colour-input-wrap input[type="color"] {
    width: 52px; height: 52px;
    border: none; border-radius: 50%; cursor: pointer;
    padding: 0; background: none; outline: none;
    box-shadow: 0 3px 10px rgba(0,0,0,.2);
    flex-shrink: 0;
}
.colour-input-wrap input[type="color"]::-webkit-color-swatch-wrapper { padding: 0; border-radius: 50%; }
.colour-input-wrap input[type="color"]::-webkit-color-swatch { border:none; border-radius:50%; }
.colour-hex-input {
    flex: 1; padding: 10px 14px;
    border: 1.5px solid var(--quiz-border);
    border-radius: var(--quiz-radius-sm);
    font-family: 'DM Sans', monospace; font-size: 14px;
    color: var(--quiz-text); background: #fff;
    outline: none; text-transform: uppercase;
    transition: border-color .2s;
}
.colour-hex-input:focus { border-color: var(--quiz-accent); }
.btn-apply-colour {
    background: linear-gradient(135deg, var(--quiz-accent), var(--quiz-accent-dark));
    color: #fff; border: none; border-radius: var(--quiz-radius-sm);
    padding: 10px 18px; font-family: 'DM Sans', sans-serif;
    font-size: 13px; font-weight: 500; cursor: pointer;
    transition: all .2s; white-space: nowrap;
}
.btn-apply-colour:hover { transform: translateY(-1px); box-shadow: 0 4px 12px rgba(196,149,106,.4); }

/* AI rating badge */
.colour-rating {
    border-radius: var(--quiz-radius-sm);
    padding: 12px 16px;
    font-size: 13px;
    display: flex; align-items: flex-start; gap: 10px;
    line-height: 1.5;
    transition: all .3s ease;
    min-height: 48px;
}
.colour-rating.perfect { background: #EAF4EA; color: #3A6A3A; border: 1px solid #A8D4A8; }
.colour-rating.good    { background: #EFF6FB; color: #2A5A7A; border: 1px solid #A8C8E8; }
.colour-rating.neutral { background: #FAFAF0; color: #6A6A3A; border: 1px solid #D4D4A8; }
.colour-rating.avoid   { background: #FBF0EF; color: #7A2A2A; border: 1px solid #E8AEAD; }
.colour-rating.empty   { background: var(--quiz-light); color: var(--quiz-muted); border: 1px solid var(--quiz-border); }
.rating-score {
    font-size: 22px; font-weight: 700;
    font-family: 'Cormorant Garamond', serif;
    flex-shrink: 0; line-height: 1;
}

/* Colour history strip */
.colour-history {
    display: flex; gap: 6px; flex-wrap: wrap; align-items: center;
}
.history-dot {
    width: 28px; height: 28px; border-radius: 50%;
    border: 2px solid transparent;
    box-shadow: 0 2px 6px rgba(0,0,0,.15);
    cursor: pointer; transition: transform .15s;
    position: relative;
}
.history-dot:hover { transform: scale(1.2); }
.history-dot .hd-tip {
    position: absolute; bottom: -20px; left: 50%;
    transform: translateX(-50%);
    font-size: 9px; white-space: nowrap;
    background: rgba(0,0,0,.6); color: #fff;
    padding: 2px 6px; border-radius: 4px;
    opacity: 0; pointer-events: none; transition: opacity .15s;
}
.history-dot:hover .hd-tip { opacity: 1; }
.history-clear {
    font-size: 11px; color: var(--quiz-muted);
    cursor: pointer; padding: 4px 8px;
    border: 1px solid var(--quiz-border);
    border-radius: 6px; transition: all .2s;
    background: none;
}
.history-clear:hover { border-color: var(--quiz-accent); color: var(--quiz-accent); }

/* ══════════════════════════════════════════════════════════
   Pinterest
══════════════════════════════════════════════════════════ */
.pinterest-section { background:var(--quiz-card); border:1px solid var(--quiz-border); border-radius:var(--quiz-radius); padding:24px 22px; margin-bottom:24px; }
.pinterest-header  { display:flex; align-items:center; gap:10px; margin-bottom:18px; }
.pinterest-badge   { background:#E60023; color:#fff; font-size:11px; font-weight:500; letter-spacing:1px; padding:3px 10px; border-radius:4px; }
.pinterest-grid    { display:grid; grid-template-columns:repeat(auto-fill,minmax(155px,1fr)); gap:16px; }
.pin-card { border-radius:var(--quiz-radius-sm); overflow:hidden; border:1px solid var(--quiz-border); transition:all .25s ease; text-decoration:none; display:block; background:var(--quiz-card); }
.pin-card:hover { transform:translateY(-4px); box-shadow:0 12px 32px rgba(0,0,0,.12); border-color:var(--quiz-accent); }
.pin-card-img-placeholder { width:100%; aspect-ratio:3/4; display:flex; align-items:center; justify-content:center; font-size:32px; }
.pin-card-body  { padding:10px 12px 12px; }
.pin-card-title { font-size:13px; font-weight:500; color:var(--quiz-text); margin-bottom:4px; line-height:1.35; }
.pin-card-sub   { font-size:11px; color:var(--quiz-muted); }
.pin-card-cta   { display:inline-block; margin-top:8px; font-size:11px; font-weight:500; color:var(--quiz-accent); letter-spacing:.5px; }
.pin-loading    { text-align:center; padding:40px 0; color:var(--quiz-muted); font-size:14px; }

/* ══════════════════════════════════════════════════════════
   Results Actions
══════════════════════════════════════════════════════════ */
.results-actions { display:flex; gap:12px; flex-wrap:wrap; justify-content:center; margin-top:32px; }
.btn-primary { background:linear-gradient(135deg,var(--quiz-accent),var(--quiz-accent-dark)); color:#fff; border:none; border-radius:var(--quiz-radius-sm); padding:14px 28px; font-family:'DM Sans',sans-serif; font-size:14px; font-weight:500; cursor:pointer; transition:all .25s; box-shadow:0 4px 16px rgba(196,149,106,.35); text-decoration:none; display:inline-block; }
.btn-primary:hover { transform:translateY(-1px); box-shadow:0 6px 20px rgba(196,149,106,.45); }
.btn-outline { background:transparent; color:var(--quiz-text); border:1.5px solid var(--quiz-border); border-radius:var(--quiz-radius-sm); padding:13px 24px; font-family:'DM Sans',sans-serif; font-size:14px; cursor:pointer; transition:all .2s; text-decoration:none; display:inline-block; }
.btn-outline:hover { border-color:var(--quiz-accent); color:var(--quiz-accent); }

/* ══════════════════════════════════════════════════════════
   Responsive
══════════════════════════════════════════════════════════ */
@media(max-width:600px){
    .results-main { grid-template-columns:1fr; }
    .r-cloth-list  { grid-template-columns:1fr; }
    .body-opt-grid { grid-template-columns:repeat(2,1fr); }
    .gender-grid   { grid-template-columns:repeat(3,1fr); }
    .contact-form-wrap { padding:24px 18px; }
    .pinterest-grid { grid-template-columns:repeat(2,1fr); }
    .zone-tabs { gap:6px; }
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
            @foreach([['♀','Gender'],['📷','Your Photo'],['2','Skin'],['3','Undertone'],['4','Eyes'],['5','Hair'],['6','Body'],['✉','Profile']] as $i => $s)
                <div class="qp-step">
                    <div class="qp-circle {{ $i===0?'active':'' }}" id="qc{{ $i }}">{{ $s[0] }}</div>
                    <div class="qp-label">{{ $s[1] }}</div>
                </div>
                @if($i < 7)<div class="qp-line" id="ql{{ $i }}"></div>@endif
            @endforeach
        </div>
    </div>

    <div class="quiz-body">

        {{-- ─── STEP 0: GENDER ─── --}}
        <div class="q-step active" id="q0">
            <div class="q-num">Step 1 of 7</div>
            <div class="q-question">How do you identify?</div>
            <div class="q-hint">This helps us personalise your style &amp; clothing recommendations.</div>
            <div class="gender-grid">
                <div class="gender-opt" onclick="qSelectGender(this,'female')"><span class="gender-opt-icon">♀</span><div class="gender-opt-name">Female</div></div>
                <div class="gender-opt" onclick="qSelectGender(this,'male')"><span class="gender-opt-icon">♂</span><div class="gender-opt-name">Male</div></div>
                <div class="gender-opt" onclick="qSelectGender(this,'nonbinary')"><span class="gender-opt-icon">⚧</span><div class="gender-opt-name">Non-binary</div></div>
            </div>
            <div class="q-nav"><div></div><button class="btn-next-q" id="qn0" onclick="qGo(1)">Next →</button></div>
        </div>

        {{-- ─── STEP 1: PHOTO ─── --}}
        <div class="q-step" id="q1">
            <div class="q-num">Step 2 of 7</div>
            <div class="q-question">Upload a clear photo of yourself</div>
            <div class="q-hint">A well-lit selfie helps our AI detect your colouring and features more accurately. Your photo is analysed locally and never stored.</div>
            <div class="photo-ai-note"><span>🔒</span><span>Your image is used only for AI colour analysis in this session. It is not saved or shared.</span></div>
            <div class="photo-upload-area" id="photoUploadArea" onclick="triggerPhotoUpload()">
                <span class="photo-upload-icon">📸</span>
                <div class="photo-upload-title">Tap to upload your photo</div>
                <div class="photo-upload-sub">JPG, PNG or WEBP · Max 10MB</div>
            </div>
            <input type="file" id="photoFileInput" accept="image/*" style="display:none" onchange="handlePhotoUpload(this)">
            <div class="q-nav">
                <button class="btn-back-q" onclick="qGo(0)">← Back</button>
                <button class="btn-next-q on" id="qn1" onclick="qGo(2)">Next →</button>
            </div>
        </div>

        {{-- ─── STEP 2: SKIN ─── --}}
        <div class="q-step" id="q2">
            <div class="q-num">Step 3 of 7</div>
            <div class="q-question">What is your natural skin tone?</div>
            <div class="q-hint">Choose the option that best matches your complexion when you haven't been in the sun.</div>
            <div class="opt-grid">
                <div class="opt" onclick="qSelect(this,'skin','fair')"><div class="opt-circle" style="background:linear-gradient(135deg,#FDDBB4,#F5C89C);"></div><div class="opt-name">Fair</div><div class="opt-sub">Very light, may burn easily</div></div>
                <div class="opt" onclick="qSelect(this,'skin','light')"><div class="opt-circle" style="background:linear-gradient(135deg,#F0C089,#D4956A);"></div><div class="opt-name">Light</div><div class="opt-sub">Light to medium</div></div>
                <div class="opt" onclick="qSelect(this,'skin','medium')"><div class="opt-circle" style="background:linear-gradient(135deg,#C68642,#A0522D);"></div><div class="opt-name">Medium</div><div class="opt-sub">Warm beige or olive</div></div>
                <div class="opt" onclick="qSelect(this,'skin','tan')"><div class="opt-circle" style="background:linear-gradient(135deg,#8D5524,#6B3A1F);"></div><div class="opt-name">Tan</div><div class="opt-sub">Medium to deep</div></div>
                <div class="opt" onclick="qSelect(this,'skin','deep')"><div class="opt-circle" style="background:linear-gradient(135deg,#4A2508,#2C1A08);"></div><div class="opt-name">Deep</div><div class="opt-sub">Rich, dark complexion</div></div>
            </div>
            <div class="q-nav"><button class="btn-back-q" onclick="qGo(1)">← Back</button><button class="btn-next-q" id="qn2" onclick="qGo(3)">Next →</button></div>
        </div>

        {{-- ─── STEP 3: UNDERTONE ─── --}}
        <div class="q-step" id="q3">
            <div class="q-num">Step 4 of 7</div>
            <div class="q-question">What is your skin's undertone?</div>
            <div class="q-hint">Check your inner wrist in natural light. What colour do your veins appear?</div>
            <div class="opt-grid">
                <div class="opt" onclick="qSelect(this,'undertone','warm')"><div class="opt-circle" style="background:linear-gradient(135deg,#FFD700,#FFA500);"></div><div class="opt-name">Warm</div><div class="opt-sub">Veins look greenish, gold suits you</div></div>
                <div class="opt" onclick="qSelect(this,'undertone','cool')"><div class="opt-circle" style="background:linear-gradient(135deg,#B0C4DE,#6A5ACD);"></div><div class="opt-name">Cool</div><div class="opt-sub">Veins look blue/purple, silver suits you</div></div>
                <div class="opt" onclick="qSelect(this,'undertone','neutral')"><div class="opt-circle" style="background:linear-gradient(135deg,#D2B48C,#BC9A6A);"></div><div class="opt-name">Neutral</div><div class="opt-sub">Can't tell, both metals work</div></div>
                <div class="opt" onclick="qSelect(this,'undertone','olive')"><div class="opt-circle" style="background:linear-gradient(135deg,#8FBC8F,#6B8E23);"></div><div class="opt-name">Olive</div><div class="opt-sub">Greenish-yellow undertone</div></div>
            </div>
            <div class="q-nav"><button class="btn-back-q" onclick="qGo(2)">← Back</button><button class="btn-next-q" id="qn3" onclick="qGo(4)">Next →</button></div>
        </div>

        {{-- ─── STEP 4: EYES ─── --}}
        <div class="q-step" id="q4">
            <div class="q-num">Step 5 of 7</div>
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
            <div class="q-nav"><button class="btn-back-q" onclick="qGo(3)">← Back</button><button class="btn-next-q" id="qn4" onclick="qGo(5)">Next →</button></div>
        </div>

        {{-- ─── STEP 5: HAIR ─── --}}
        <div class="q-step" id="q5">
            <div class="q-num">Step 6 of 7</div>
            <div class="q-question">What is your natural hair colour?</div>
            <div class="q-hint">Choose your untreated, natural shade.</div>
            <div class="opt-grid">
                <div class="opt" onclick="qSelect(this,'hair','blonde')"><div class="opt-circle" style="background:linear-gradient(135deg,#F5E0A0,#D4A843);"></div><div class="opt-name">Blonde</div><div class="opt-sub">Light to golden</div></div>
                <div class="opt" onclick="qSelect(this,'hair','auburn')"><div class="opt-circle" style="background:linear-gradient(135deg,#C67B4A,#8B3A1A);"></div><div class="opt-name">Auburn / Red</div><div class="opt-sub">Warm, reddish tones</div></div>
                <div class="opt" onclick="qSelect(this,'hair','light-brown')"><div class="opt-circle" style="background:linear-gradient(135deg,#A0724E,#6B4226);"></div><div class="opt-name">Light Brown</div><div class="opt-sub">Warm or ashy brown</div></div>
                <div class="opt" onclick="qSelect(this,'hair','dark-brown')"><div class="opt-circle" style="background:linear-gradient(135deg,#4A2C1A,#2C1810);"></div><div class="opt-name">Dark Brown</div><div class="opt-sub">Rich, deep brown</div></div>
                <div class="opt" onclick="qSelect(this,'hair','black')"><div class="opt-circle" style="background:linear-gradient(135deg,#2A2A2A,#080808);"></div><div class="opt-name">Black</div><div class="opt-sub">Warm or cool black</div></div>
                <div class="opt" onclick="qSelect(this,'hair','grey')"><div class="opt-circle" style="background:linear-gradient(135deg,#C8C8C8,#888888);"></div><div class="opt-name">Grey / White</div><div class="opt-sub">Silver or white</div></div>
            </div>
            <div class="q-nav"><button class="btn-back-q" onclick="qGo(4)">← Back</button><button class="btn-next-q" id="qn5" onclick="qGo(6)">Next →</button></div>
        </div>

        {{-- ─── STEP 6: BODY TYPE ─── --}}
        <div class="q-step" id="q6">
            <div class="q-num">Step 7 of 7 — almost there!</div>
            <div class="q-question">What is your body type?</div>
            <div class="q-hint">Think about where you carry your weight and your widest measurements.</div>
            <div class="body-opt-grid">
                <div class="body-opt" onclick="qSelectBody(this,'hourglass')"><div class="body-opt-icon">⧖</div><div class="body-opt-name">Hourglass</div><div class="body-opt-desc">Balanced bust &amp; hips, defined waist</div></div>
                <div class="body-opt" onclick="qSelectBody(this,'pear')"><div class="body-opt-icon">🍐</div><div class="body-opt-name">Pear</div><div class="body-opt-desc">Hips wider than bust</div></div>
                <div class="body-opt" onclick="qSelectBody(this,'apple')"><div class="body-opt-icon">🍎</div><div class="body-opt-name">Apple</div><div class="body-opt-desc">Fuller middle, slimmer legs</div></div>
                <div class="body-opt" onclick="qSelectBody(this,'rectangle')"><div class="body-opt-icon">▭</div><div class="body-opt-name">Rectangle</div><div class="body-opt-desc">Similar width throughout</div></div>
                <div class="body-opt" onclick="qSelectBody(this,'inverted')"><div class="body-opt-icon">▽</div><div class="body-opt-name">Inverted Triangle</div><div class="body-opt-desc">Broad shoulders, narrow hips</div></div>
                <div class="body-opt" onclick="triggerBodyPhotoUpload()"><div class="body-opt-icon">📷</div><div class="body-opt-name">Detect with AI</div><div class="body-opt-desc">Upload a full-body photo</div></div>
            </div>
            <input type="file" id="bodyPhotoInput" accept="image/*" style="display:none" onchange="handleBodyPhotoUpload(this)">
            <div class="q-nav"><button class="btn-back-q" onclick="qGo(5)">← Back</button><button class="btn-next-q" id="qn6" onclick="qGo(7)">Next →</button></div>
        </div>

        {{-- ─── STEP 7: CONTACT ─── --}}
        <div class="q-step" id="q7">
            <div class="q-num">One last step</div>
            <div class="q-question">Where should we send your results?</div>
            <div class="q-hint">Get your full colour season report saved to your inbox — plus personalised style tips each week.</div>
            <div class="contact-form-wrap">
                <div class="form-row"><label for="user_name">Your First Name</label><input type="text" id="user_name" placeholder="e.g. Sarah" oninput="checkContactForm()"></div>
                <div class="form-row"><label for="user_email">Email Address</label><input type="email" id="user_email" placeholder="e.g. sarah@example.com" oninput="checkContactForm()"></div>
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
            <p style="text-align:center;color:var(--quiz-muted);font-size:14px;">Our AI is crafting your personalised results</p>
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
                    <div class="r-card r-full" id="r-makeup-card">
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

                {{-- ════════════════════════════════════════════
                     COLOUR TRY-ON PANEL
                ════════════════════════════════════════════ --}}
                <div class="tryon-section">
                    <div class="tryon-title">🎨 Try Colours On Your Photo</div>
                    <div class="tryon-sub">Drag the colour circles onto any part of your photo, or pick custom colours and get an instant season-match score from our AI.</div>

                    <div class="tryon-layout">
                        {{-- Left: Photo with draggable zones --}}
                        <div>
                            <div class="tryon-photo-wrap" id="tryonPhotoWrap">
                                <div class="tryon-placeholder" id="tryonPlaceholder">
                                    <span class="ph-icon">🖼️</span>
                                    <p>Upload a photo in Step 2 to try colours on yourself. The panel still works for checking colours against your season.</p>
                                </div>
                                {{-- Photo injected here by JS --}}
                                <div class="colour-zones" id="colourZones">
                                    {{-- Zones injected by JS --}}
                                </div>
                            </div>
                            <p style="font-size:11px;color:var(--quiz-muted);margin-top:8px;text-align:center;">
                                💡 Drag the coloured circles to any area of your photo
                            </p>
                        </div>

                        {{-- Right: Controls --}}
                        <div class="tryon-controls">
                            {{-- Zone tabs --}}
                            <div>
                                <div style="font-size:10px;font-weight:600;letter-spacing:2px;text-transform:uppercase;color:var(--quiz-accent);margin-bottom:8px;">Colour Zone</div>
                                <div class="zone-tabs" id="zoneTabs">
                                    <button class="zone-tab active" data-zone="top" onclick="selectZone('top')">👕 Top</button>
                                    <button class="zone-tab" data-zone="bottom" onclick="selectZone('bottom')">👖 Bottom</button>
                                    <button class="zone-tab" data-zone="hair" onclick="selectZone('hair')">💇 Hair</button>
                                    <button class="zone-tab" data-zone="accent" onclick="selectZone('accent')">✨ Accent</button>
                                </div>
                            </div>

                            {{-- Season palette quick-pick --}}
                            <div class="tryon-palette-strip">
                                <div class="palette-row-label">✨ Your Season Palette — Best Colours</div>
                                <div class="palette-swatches" id="tryonBestSwatches"></div>
                                <div class="palette-row-label" style="margin-top:8px;">⚠️ Colours to Avoid</div>
                                <div class="palette-swatches" id="tryonAvoidSwatches"></div>
                            </div>

                            {{-- Custom colour picker --}}
                            <div class="custom-colour-row">
                                <label>Test Any Custom Colour</label>
                                <div class="colour-input-wrap">
                                    <input type="color" id="customColourPicker" value="#C4956A" onchange="syncHexFromPicker()">
                                    <input type="text" class="colour-hex-input" id="customHexInput" value="#C4956A" maxlength="7" placeholder="#RRGGBB" oninput="syncPickerFromHex()">
                                    <button class="btn-apply-colour" onclick="applyCustomColour()">Apply →</button>
                                </div>
                            </div>

                            {{-- AI Rating --}}
                            <div class="colour-rating empty" id="colourRating">
                                <div class="rating-score" id="ratingScore">—</div>
                                <div>
                                    <div id="ratingLabel" style="font-weight:600;margin-bottom:3px;">Select or pick a colour to get your match score</div>
                                    <div id="ratingReason" style="font-size:12px;"></div>
                                </div>
                            </div>

                            {{-- Colour history --}}
                            <div>
                                <div style="font-size:10px;font-weight:600;letter-spacing:1.5px;text-transform:uppercase;color:var(--quiz-muted);margin-bottom:8px;">
                                    Recently Tried
                                    <button class="history-clear" onclick="clearHistory()" style="margin-left:8px;">Clear</button>
                                </div>
                                <div class="colour-history" id="colourHistory">
                                    <span style="font-size:12px;color:var(--quiz-muted);">None yet</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pinterest --}}
                <div class="pinterest-section" id="pinterestSection">
                    <div class="pinterest-header">
                        <div class="r-card-label" style="margin-bottom:0;">Recommended Outfits for You</div>
                        <div class="pinterest-badge">Pinterest</div>
                    </div>
                    <p style="font-size:13px;color:var(--quiz-muted);margin:0 0 18px;">Curated picks based on your colour season &amp; body type.</p>
                    <div class="pinterest-grid" id="pinterestGrid">
                        <div class="pin-loading">🔍 Finding your perfect looks…</div>
                    </div>
                </div>

                <div class="results-actions">
                    <button class="btn-primary" onclick="restartQ()">Retake Quiz</button>
                    <a class="btn-outline" href="{{ route('show.custom_pages', ['slug' => 'blog']) }}">Style Tips</a>
                    <a class="btn-outline" href="{{ route('show.custom_pages', ['slug' => 'seasons']) }}">About Seasons</a>
                </div>
            </div>
        </div>

    </div>{{-- /.quiz-body --}}
</div>{{-- /#page-quiz --}}
@endsection

@section('page_script')
<script>
/* ════════════════════════════════════════════════════════════
   QUIZ STATE  (no season logic here — all server-side)
════════════════════════════════════════════════════════════ */
const qa = { gender:null, photo:null, skin:null, undertone:null, eyes:null, hair:null, body:null, name:'', email:'' };

// CSRF token for Laravel
const CSRF = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';

// API routes — rendered by Blade (not editable client-side)
const ROUTES = {
    computeSeason:  '{{ route("quiz.compute_season") }}',
    evaluateColour: '{{ route("quiz.evaluate_colour") }}',
    saveLead:       '{{ route("quiz.save_lead") }}',
};

/* ─── Current season & data (filled after server response) ─── */
let currentSeason = null;
let currentData   = null;

/* ────────────────────────────────────────────────────────────
   NAVIGATION
──────────────────────────────────────────────────────────── */
function qGo(step) {
    document.querySelectorAll('.q-step').forEach(el => el.classList.remove('active'));
    const target = document.getElementById('q' + step);
    if (target) { target.classList.add('active'); window.scrollTo({ top:0, behavior:'smooth' }); }
    updateProgress(step);
}

function updateProgress(s) {
    const circles = ['qc0','qc1','qc2','qc3','qc4','qc5','qc6','qc7'];
    const lines   = ['ql0','ql1','ql2','ql3','ql4','ql5','ql6'];
    circles.forEach((id,i) => {
        const el = document.getElementById(id); if(!el) return;
        el.classList.remove('active','done');
        if (i < s) el.classList.add('done'); else if (i === s) el.classList.add('active');
    });
    lines.forEach((id,i) => {
        const el = document.getElementById(id); if(!el) return;
        el.classList.toggle('done', i < s);
    });
}

/* ────────────────────────────────────────────────────────────
   SELECTORS
──────────────────────────────────────────────────────────── */
function qSelect(el, key, value) {
    el.closest('.opt-grid').querySelectorAll('.opt').forEach(o => o.classList.remove('sel'));
    el.classList.add('sel');
    qa[key] = value;
    const stepMap = { skin:2, undertone:3, eyes:4, hair:5 };
    const btn = document.getElementById('qn' + stepMap[key]);
    if (btn) btn.classList.add('on');
}

function qSelectGender(el, value) {
    document.querySelectorAll('.gender-opt').forEach(o => o.classList.remove('sel'));
    el.classList.add('sel');
    qa.gender = value;
    document.getElementById('qn0').classList.add('on');
}

function qSelectBody(el, value) {
    document.querySelectorAll('.body-opt').forEach(o => o.classList.remove('sel'));
    el.classList.add('sel');
    qa.body = value;
    document.getElementById('qn6').classList.add('on');
}

/* ────────────────────────────────────────────────────────────
   PHOTO UPLOAD
──────────────────────────────────────────────────────────── */
function triggerPhotoUpload() { document.getElementById('photoFileInput').click(); }

function handlePhotoUpload(input) {
    const file = input.files[0]; if (!file) return;
    const reader = new FileReader();
    reader.onload = e => {
        qa.photo = e.target.result;
        const area = document.getElementById('photoUploadArea');
        area.classList.add('has-photo');
        area.innerHTML = `
            <img src="${e.target.result}" alt="Your photo" style="width:100%;max-height:300px;object-fit:cover;display:block;border-radius:16px;">
            <button class="photo-change-btn" onclick="event.stopPropagation();triggerPhotoUpload()">Change Photo</button>`;
    };
    reader.readAsDataURL(file);
}

function triggerBodyPhotoUpload() { document.getElementById('bodyPhotoInput').click(); }

async function handleBodyPhotoUpload(input) {
    const file = input.files[0]; if (!file) return;
    document.querySelectorAll('.body-opt').forEach(o => o.classList.remove('sel'));
    const detectOpt = document.querySelector('.body-opt:last-child');
    if (detectOpt) { detectOpt.classList.add('sel'); detectOpt.querySelector('.body-opt-desc').textContent = 'Analysing…'; }

    const base64 = await new Promise(resolve => {
        const r = new FileReader();
        r.onload = e => resolve(e.target.result.split(',')[1]);
        r.readAsDataURL(file);
    });

    try {
        const response = await fetch('https://api.anthropic.com/v1/messages', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                model: 'claude-sonnet-4-20250514', max_tokens: 200,
                messages: [{ role: 'user', content: [
                    { type: 'image', source: { type: 'base64', media_type: file.type, data: base64 } },
                    { type: 'text', text: 'Analyse this full body photo and detect the person\'s body shape. Reply with ONLY a single JSON object like: {"bodyType":"hourglass"} where bodyType is one of: hourglass, pear, apple, rectangle, inverted. No explanation.' }
                ]}]
            })
        });
        const data = await response.json();
        const text = data.content?.[0]?.text || '{}';
        const result = JSON.parse(text.replace(/```json|```/g,'').trim());
        if (result.bodyType) {
            qa.body = result.bodyType;
            if (detectOpt) detectOpt.querySelector('.body-opt-desc').textContent = `Detected: ${result.bodyType}`;
            document.getElementById('qn6').classList.add('on');
        }
    } catch (err) {
        console.error('Body detection failed:', err);
        if (detectOpt) { detectOpt.querySelector('.body-opt-desc').textContent = 'Detection failed — select manually'; detectOpt.classList.remove('sel'); }
    }
}

/* ────────────────────────────────────────────────────────────
   CONTACT FORM VALIDATION
──────────────────────────────────────────────────────────── */
function checkContactForm() {
    const name  = document.getElementById('user_name').value.trim();
    const email = document.getElementById('user_email').value.trim();
    const valid = name.length > 0 && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    const btn   = document.getElementById('qn7');
    if (valid) { btn.classList.add('on'); qa.name = name; qa.email = email; }
    else        btn.classList.remove('on');
}

/* ════════════════════════════════════════════════════════════
   SHOW RESULTS — calls server for season calculation
════════════════════════════════════════════════════════════ */
async function showQuizResults() {
    if (!document.getElementById('qn7').classList.contains('on')) return;

    qa.name  = document.getElementById('user_name').value.trim();
    qa.email = document.getElementById('user_email').value.trim();

    // Non-blocking lead save
    saveLead(qa.name, qa.email, qa);

    // Show loading
    document.querySelectorAll('.q-step').forEach(el => el.classList.remove('active'));
    document.getElementById('qLoading').classList.add('active');
    window.scrollTo({ top:0, behavior:'smooth' });

    // Animate loading steps
    const steps = ['ls1','ls2','ls3','ls4','ls5'];
    const animPromise = (async () => {
        for (let i = 0; i < steps.length; i++) {
            await delay(600);
            if (i > 0) document.getElementById(steps[i-1]).classList.replace('active','done');
            document.getElementById(steps[i]).classList.add('active');
        }
        await delay(500);
        document.getElementById(steps[steps.length-1]).classList.replace('active','done');
    })();

    // Fetch results from server (season calc happens there)
    let result;
    try {
        const res = await fetch(ROUTES.computeSeason, {
            method: 'POST',
            headers: { 'Content-Type':'application/json', 'X-CSRF-TOKEN': CSRF },
            body: JSON.stringify({
                skin: qa.skin, undertone: qa.undertone,
                eyes: qa.eyes, hair: qa.hair,
                gender: qa.gender, body: qa.body
            })
        });
        result = await res.json();
    } catch (e) {
        console.error('Season compute failed:', e);
        document.getElementById('qLoading').classList.remove('active');
        qGo(6);
        return;
    }

    await animPromise;
    await delay(300);

    currentSeason = result.season;
    currentData   = result.data;
    populateResults(result);

    document.getElementById('qLoading').classList.remove('active');
    document.getElementById('qResults').classList.add('active');
    window.scrollTo({ top:0, behavior:'smooth' });

    // Colour try-on panel
    initTryonPanel(result);

    // Pinterest
    setTimeout(() => renderPinterest(result.pinterest), 400);
}

/* ────────────────────────────────────────────────────────────
   POPULATE RESULTS DOM
──────────────────────────────────────────────────────────── */
function populateResults(result) {
    const data = result.data;
    document.getElementById('r-badge').textContent = data.label;
    document.getElementById('r-title').textContent = `${qa.name ? qa.name + ', you\'re a ' : 'You are a '}${data.title}`;
    document.getElementById('r-desc').textContent  = data.desc;

    document.getElementById('r-best').innerHTML = data.best.map(c =>
        `<div class="r-swatch"><div class="r-swatch-dot" style="background:${c.hex};"></div><div class="r-swatch-name">${c.name}</div></div>`
    ).join('');
    document.getElementById('r-best-note').textContent = data.bestNote;

    document.getElementById('r-avoid').innerHTML = data.avoid.map(c =>
        `<div class="r-swatch"><div class="r-swatch-dot" style="background:${c.hex};"></div><div class="r-swatch-name">${c.name}</div></div>`
    ).join('');
    document.getElementById('r-avoid-note').textContent = data.avoidNote;

    // Makeup (server omits it for male/nonbinary)
    const makeupCard = document.getElementById('r-makeup-card');
    if (data.makeup) {
        makeupCard.style.display = '';
        document.getElementById('r-makeup').innerHTML = data.makeup.map(m =>
            `<div class="r-makeup-item"><div class="r-makeup-type">${m.type}</div><div class="r-makeup-shade">${m.shade}</div><div class="r-makeup-note">${m.note}</div></div>`
        ).join('');
    } else {
        makeupCard.style.display = 'none';
    }

    document.getElementById('r-cloth').innerHTML = result.clothing.map(c =>
        `<li><span>${c.icon}</span>${c.tip}</li>`
    ).join('');

    document.getElementById('r-insight').innerHTML = data.insight.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
}

/* ════════════════════════════════════════════════════════════
   COLOUR TRY-ON PANEL
════════════════════════════════════════════════════════════ */

// ── State ──
let activeZone    = 'top';
let colourHistory = [];
let zoneColours   = { top: '#C4956A', bottom: '#5C4A3A', hair: '#6B3A2A', accent: '#F4C542' };

const zoneConfig = {
    top:    { emoji: '👕', label: 'TOP',    default: { x:45, y:35 } },
    bottom: { emoji: '👖', label: 'BOTTOM', default: { x:45, y:62 } },
    hair:   { emoji: '💇', label: 'HAIR',   default: { x:45, y:10 } },
    accent: { emoji: '✨', label: 'ACCENT', default: { x:75, y:45 } },
};

function initTryonPanel(result) {
    // Set photo
    const wrap = document.getElementById('tryonPhotoWrap');
    if (qa.photo) {
        document.getElementById('tryonPlaceholder').remove();
        const img = document.createElement('img');
        img.id  = 'tryonPhoto';
        img.src = qa.photo;
        img.alt = 'Your photo';
        img.style.cssText = 'width:100%;height:100%;object-fit:cover;display:block;border-radius:16px;';
        wrap.insertBefore(img, wrap.querySelector('.colour-zones'));
    }

    // Render draggable zone circles
    renderZoneCircles();

    // Season palette swatches
    const bestEl  = document.getElementById('tryonBestSwatches');
    const avoidEl = document.getElementById('tryonAvoidSwatches');

    bestEl.innerHTML = result.data.best.map(c =>
        `<div class="pswatch" style="background:${c.hex};" title="${c.name}"
              onclick="applySeasonColour('${c.hex}','${c.name}')"
              data-hex="${c.hex}">
            <div class="pswatch-tip">${c.name}</div>
         </div>`
    ).join('');

    avoidEl.innerHTML = result.data.avoid.map(c =>
        `<div class="pswatch" style="background:${c.hex};filter:grayscale(30%);opacity:.7;" title="${c.name}"
              onclick="applySeasonColour('${c.hex}','${c.name}')"
              data-hex="${c.hex}">
            <div class="pswatch-tip">${c.name}</div>
         </div>`
    ).join('');
}

/* ── Render / re-render zone circles ── */
function renderZoneCircles() {
    const zonesEl = document.getElementById('colourZones');
    zonesEl.innerHTML = '';

    Object.entries(zoneConfig).forEach(([key, cfg]) => {
        const circle = document.createElement('div');
        circle.className = 'czone';
        circle.id        = 'czone_' + key;
        circle.innerHTML = `${cfg.emoji}<div class="czone-label">${cfg.label}</div>`;
        circle.style.cssText = `
            background: ${zoneColours[key]};
            left: ${cfg.default.x}%;
            top:  ${cfg.default.y}%;
            transform: translate(-50%,-50%);
        `;
        circle.style.outline = (key === activeZone) ? '3px solid var(--quiz-accent)' : 'none';

        // Make draggable
        makeDraggable(circle, key);
        circle.addEventListener('click', () => selectZone(key));
        zonesEl.appendChild(circle);
    });
}

/* ── Drag support (mouse + touch) ── */
function makeDraggable(el, zoneKey) {
    let isDragging = false, startX, startY, startLeft, startTop;

    const getWrapRect = () => document.getElementById('tryonPhotoWrap').getBoundingClientRect();

    function onStart(cx, cy) {
        isDragging = true;
        const rect = el.getBoundingClientRect();
        startX = cx; startY = cy;
        startLeft = parseFloat(el.style.left);
        startTop  = parseFloat(el.style.top);
        el.style.transition = 'none';
        selectZone(zoneKey);
    }

    function onMove(cx, cy) {
        if (!isDragging) return;
        const wrap = getWrapRect();
        const dx = ((cx - startX) / wrap.width)  * 100;
        const dy = ((cy - startY) / wrap.height) * 100;
        const newL = Math.max(5, Math.min(95, startLeft + dx));
        const newT = Math.max(5, Math.min(95, startTop  + dy));
        el.style.left = newL + '%';
        el.style.top  = newT + '%';
    }

    function onEnd() { isDragging = false; el.style.transition = ''; }

    el.addEventListener('mousedown',  e => { e.preventDefault(); onStart(e.clientX, e.clientY); });
    window.addEventListener('mousemove', e => onMove(e.clientX, e.clientY));
    window.addEventListener('mouseup',   onEnd);

    el.addEventListener('touchstart', e => { e.preventDefault(); onStart(e.touches[0].clientX, e.touches[0].clientY); }, { passive:false });
    window.addEventListener('touchmove',  e => { if(isDragging){ e.preventDefault(); onMove(e.touches[0].clientX, e.touches[0].clientY); } }, { passive:false });
    window.addEventListener('touchend',   onEnd);
}

/* ── Select active zone ── */
function selectZone(key) {
    activeZone = key;
    document.querySelectorAll('.zone-tab').forEach(t => t.classList.toggle('active', t.dataset.zone === key));
    Object.keys(zoneConfig).forEach(k => {
        const el = document.getElementById('czone_' + k);
        if (el) el.style.outline = (k === key) ? '3px solid var(--quiz-accent)' : 'none';
    });
    // Sync pickers to current zone colour
    const hex = zoneColours[key];
    document.getElementById('customColourPicker').value = hex;
    document.getElementById('customHexInput').value     = hex;
}

/* ── Apply a palette swatch to active zone ── */
async function applySeasonColour(hex, name) {
    setZoneColour(activeZone, hex);
    document.getElementById('customColourPicker').value = hex;
    document.getElementById('customHexInput').value     = hex;

    // Highlight swatch
    document.querySelectorAll('.pswatch').forEach(el => {
        el.classList.toggle('selected', el.dataset.hex === hex);
    });

    await evaluateAndDisplay(hex);
}

/* ── Apply custom colour picker ── */
async function applyCustomColour() {
    const hex = normaliseHex(document.getElementById('customHexInput').value);
    if (!hex) return;
    document.getElementById('customColourPicker').value = hex;
    document.getElementById('customHexInput').value     = hex;
    setZoneColour(activeZone, hex);
    await evaluateAndDisplay(hex);
}

/* ── Sync colour picker ↔ hex input ── */
function syncHexFromPicker() {
    const hex = document.getElementById('customColourPicker').value;
    document.getElementById('customHexInput').value = hex;
}
function syncPickerFromHex() {
    const hex = normaliseHex(document.getElementById('customHexInput').value);
    if (hex) document.getElementById('customColourPicker').value = hex;
}

/* ── Set colour on zone circle ── */
function setZoneColour(key, hex) {
    zoneColours[key] = hex;
    const el = document.getElementById('czone_' + key);
    if (el) el.style.background = hex;
}

/* ── Call server to evaluate colour ── */
async function evaluateAndDisplay(hex) {
    if (!currentSeason) return;

    const ratingEl  = document.getElementById('colourRating');
    const scoreEl   = document.getElementById('ratingScore');
    const labelEl   = document.getElementById('ratingLabel');
    const reasonEl  = document.getElementById('ratingReason');

    ratingEl.className = 'colour-rating empty';
    scoreEl.textContent = '…';
    labelEl.textContent = 'Analysing…';
    reasonEl.textContent = '';

    try {
        const res  = await fetch(ROUTES.evaluateColour, {
            method: 'POST',
            headers: { 'Content-Type':'application/json', 'X-CSRF-TOKEN': CSRF },
            body: JSON.stringify({ hex, season: currentSeason })
        });
        const data = await res.json();

        ratingEl.className = `colour-rating ${data.rating}`;
        scoreEl.textContent  = data.score + '/100';
        labelEl.textContent  = data.label;
        reasonEl.textContent = data.reason;

        addToHistory(hex, data.rating, data.score);
    } catch (e) {
        console.error('Colour eval failed:', e);
        labelEl.textContent = 'Evaluation failed. Try again.';
    }
}

/* ── History strip ── */
function addToHistory(hex, rating, score) {
    // Avoid duplicates
    colourHistory = colourHistory.filter(h => h.hex !== hex);
    colourHistory.unshift({ hex, rating, score });
    if (colourHistory.length > 12) colourHistory.pop();
    renderHistory();
}

function renderHistory() {
    const el = document.getElementById('colourHistory');
    if (!colourHistory.length) { el.innerHTML = '<span style="font-size:12px;color:var(--quiz-muted);">None yet</span>'; return; }

    el.innerHTML = colourHistory.map(h =>
        `<div class="history-dot" style="background:${h.hex};"
              onclick="recallHistory('${h.hex}')"
              title="${h.hex} — ${h.score}/100">
            <div class="hd-tip">${h.hex} · ${h.score}/100</div>
         </div>`
    ).join('');
}

async function recallHistory(hex) {
    setZoneColour(activeZone, hex);
    document.getElementById('customColourPicker').value = hex;
    document.getElementById('customHexInput').value     = hex;
    await evaluateAndDisplay(hex);
}

function clearHistory() {
    colourHistory = [];
    renderHistory();
}

/* ── normalise hex ── */
function normaliseHex(raw) {
    const s = raw.trim().replace(/^#*/,'');
    if (/^[0-9A-Fa-f]{6}$/.test(s)) return '#' + s.toUpperCase();
    if (/^[0-9A-Fa-f]{3}$/.test(s)) {
        return '#' + s.split('').map(c => c+c).join('').toUpperCase();
    }
    return null;
}

/* ════════════════════════════════════════════════════════════
   PINTEREST
════════════════════════════════════════════════════════════ */
const seasonColours = {
    spring:  ['#F4C542','#E8865A','#7BC67E','#F5A623','#D4A5A5'],
    summer:  ['#B0C4DE','#C8A2C8','#8FAF8F','#D4B5B5','#A8BAC4'],
    autumn:  ['#B85C30','#8B6914','#6B3A2A','#C8A05A','#3D5A3E'],
    winter:  ['#1C1C3A','#8B0000','#FFFFFF','#4B0082','#006B6B'],
};

function renderPinterest(links) {
    const grid    = document.getElementById('pinterestGrid');
    const colours = seasonColours[currentSeason] || seasonColours.autumn;
    grid.innerHTML = links.map((link, i) =>
        `<a class="pin-card" href="${link.url}" target="_blank" rel="noopener noreferrer">
            <div class="pin-card-img-placeholder" style="background:linear-gradient(135deg,${colours[i]||'#DDD'}22,${colours[(i+1)%colours.length]||'#CCC'}22),linear-gradient(${colours[i]||'#EEE'},${colours[(i+1)%colours.length]||'#CCC'});">
                <span style="font-size:42px;">${link.icon}</span>
            </div>
            <div class="pin-card-body">
                <div class="pin-card-title">${link.label}</div>
                <div class="pin-card-sub">${link.query}</div>
                <span class="pin-card-cta">Shop on Pinterest →</span>
            </div>
         </a>`
    ).join('');
}

/* ════════════════════════════════════════════════════════════
   LEAD SAVE
════════════════════════════════════════════════════════════ */
async function saveLead(name, email, answers) {
    try {
        await fetch(ROUTES.saveLead, {
            method: 'POST',
            headers: { 'Content-Type':'application/json', 'X-CSRF-TOKEN': CSRF },
            body: JSON.stringify({ name, email, answers: {
                gender:qa.gender, skin:qa.skin, undertone:qa.undertone,
                eyes:qa.eyes, hair:qa.hair, body:qa.body
            }})
        });
    } catch(e) { console.warn('Lead save failed:', e); }
}

/* ════════════════════════════════════════════════════════════
   RESTART
════════════════════════════════════════════════════════════ */
function restartQ() {
    Object.keys(qa).forEach(k => qa[k] = null);
    currentSeason = null; currentData = null;
    colourHistory = [];
    zoneColours   = { top:'#C4956A', bottom:'#5C4A3A', hair:'#6B3A2A', accent:'#F4C542' };
    document.querySelectorAll('.opt,.gender-opt,.body-opt').forEach(el => el.classList.remove('sel'));
    document.querySelectorAll('.btn-next-q').forEach(btn => btn.classList.remove('on'));

    // Reset photo area
    const area = document.getElementById('photoUploadArea');
    area.classList.remove('has-photo');
    area.innerHTML = `<span class="photo-upload-icon">📸</span><div class="photo-upload-title">Tap to upload your photo</div><div class="photo-upload-sub">JPG, PNG or WEBP · Max 10MB</div>`;

    // Reset tryon panel
    const wrap = document.getElementById('tryonPhotoWrap');
    const existImg = document.getElementById('tryonPhoto');
    if (existImg) existImg.remove();
    if (!document.getElementById('tryonPlaceholder')) {
        const ph = document.createElement('div');
        ph.className = 'tryon-placeholder';
        ph.id = 'tryonPlaceholder';
        ph.innerHTML = `<span class="ph-icon">🖼️</span><p>Upload a photo in Step 2 to try colours on yourself.</p>`;
        wrap.insertBefore(ph, wrap.querySelector('.colour-zones'));
    }
    document.getElementById('colourZones').innerHTML = '';
    document.getElementById('tryonBestSwatches').innerHTML  = '';
    document.getElementById('tryonAvoidSwatches').innerHTML = '';
    document.getElementById('colourRating').className = 'colour-rating empty';
    document.getElementById('ratingScore').textContent  = '—';
    document.getElementById('ratingLabel').textContent  = 'Select or pick a colour to get your match score';
    document.getElementById('ratingReason').textContent = '';
    renderHistory();

    document.getElementById('qn1').classList.add('on');
    document.getElementById('user_name').value  = '';
    document.getElementById('user_email').value = '';
    qGo(0);
}

/* ─── Helpers ─── */
function delay(ms) { return new Promise(r => setTimeout(r, ms)); }

document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('qn1')?.classList.add('on');
});
</script>
@endsection
