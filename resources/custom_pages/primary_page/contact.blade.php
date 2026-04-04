@extends('layouts.app')

@section('content')
    <div class="page" id="page-contact">
        <div class="contact-wrap">
            <div class="contact-left">
                <div class="section-label" style="color:var(--gold); margin-bottom:16px;">✦ Get in Touch</div>
                <h2 class="section-h2">We'd love to<br>hear from you</h2>
                <p class="section-sub">Questions about your colour season, partnership opportunities, or just want to
                    say hello — we're here.</p>

                <div class="contact-info-item">
                    <div class="ci-icon">📧</div>
                    <div>
                        <div class="ci-label">Email</div>
                        <div class="ci-value">hello@chromafit.co</div>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="ci-icon">💬</div>
                    <div>
                        <div class="ci-label">Live Chat</div>
                        <div class="ci-value">Available 9am–6pm PKT</div>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="ci-icon">📍</div>
                    <div>
                        <div class="ci-label">Studio</div>
                        <div class="ci-value">Lahore, Pakistan</div>
                    </div>
                </div>

                <div style="margin-top:40px;">
                    <div
                        style="font-size:13px; color:rgba(250,247,242,0.4); margin-bottom:14px; font-weight:600; letter-spacing:0.5px;">
                        FOLLOW ALONG</div>
                    <div style="display:flex; gap:12px;">
                        <div
                            style="width:40px;height:40px;border-radius:10px;background:rgba(250,247,242,0.08);display:flex;align-items:center;justify-content:center;cursor:pointer;font-size:16px;">
                            📸</div>
                        <div
                            style="width:40px;height:40px;border-radius:10px;background:rgba(250,247,242,0.08);display:flex;align-items:center;justify-content:center;cursor:pointer;font-size:16px;">
                            🎵</div>
                        <div
                            style="width:40px;height:40px;border-radius:10px;background:rgba(250,247,242,0.08);display:flex;align-items:center;justify-content:center;cursor:pointer;font-size:16px;">
                            🐦</div>
                    </div>
                </div>
            </div>

            <div class="contact-right">
                <div class="section-label" style="margin-bottom:8px;">✦ Send a Message</div>
                <h3
                    style="font-family:'Playfair Display',serif; font-size:28px; font-weight:700; color:var(--soft-black); margin-bottom:28px;">
                    Let's talk colour</h3>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">First Name</label>
                        <input class="form-input" type="text" placeholder="Zara" />
                    </div>
                    <div class="form-group">
                        <label class="form-label">Last Name</label>
                        <input class="form-input" type="text" placeholder="Ahmed" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Email Address</label>
                    <input class="form-input" type="email" placeholder="zara@example.com" />
                </div>

                <div class="form-group">
                    <label class="form-label">What's this about?</label>
                    <div class="subject-chips">
                        <div class="chip active" onclick="toggleChip(this)">Quiz Question</div>
                        <div class="chip" onclick="toggleChip(this)">Partnership</div>
                        <div class="chip" onclick="toggleChip(this)">Press / Media</div>
                        <div class="chip" onclick="toggleChip(this)">Other</div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Your Message</label>
                    <textarea class="form-input" placeholder="Tell us what's on your mind..."></textarea>
                </div>

                <button class="btn-primary" style="width:100%; justify-content:center;" onclick="handleSubmit(this)">Send
                    Message →</button>
            </div>
        </div>
    </div>
@endsection
