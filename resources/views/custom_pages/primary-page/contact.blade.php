@extends('layouts.app')

@section('content')
    <div class="page" id="page-contact">
        <div class="contact-layout">
            <div class="contact-left-panel">
                <span class="section-label">✦ Get in Touch</span>
                <h2 class="section-h2">We'd love to<br>hear from you</h2>
                <p class="clp-sub">Questions about your colour season, partnership inquiries, or just want to say hello —
                    we're here and we respond fast.</p>
                {{-- <div class="contact-info">
                    <div class="ci">
                        <div class="ci-icon">📧</div>
                        <div>
                            <div class="ci-label">Email</div>
                            <div class="ci-val">hello@chromafit.co</div>
                        </div>
                    </div>
                    <div class="ci">
                        <div class="ci-icon">💬</div>
                        <div>
                            <div class="ci-label">Live Chat</div>
                            <div class="ci-val">Available 9am – 6pm PKT</div>
                        </div>
                    </div>
                    <div class="ci">
                        <div class="ci-icon">📍</div>
                        <div>
                            <div class="ci-label">Location</div>
                            <div class="ci-val">Lahore, Pakistan</div>
                        </div>
                    </div>
                    <div class="ci">
                        <div class="ci-icon">⏱️</div>
                        <div>
                            <div class="ci-label">Response Time</div>
                            <div class="ci-val">Usually within 24 hours</div>
                        </div>
                    </div>
                </div> --}}
                <div
                    style="margin-bottom:20px;font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:rgba(250,247,242,.3);">
                    Follow Along</div>
                <div class="contact-social">
                    <div class="cs-btn">📸</div>
                    <div class="cs-btn">🎵</div>
                    <div class="cs-btn">🐦</div>
                    <div class="cs-btn">📌</div>
                </div>
            </div>

            <div class="contact-right-panel">
                <div class="cf-heading">Send us a message</div>
                <div class="cf-row">
                    <div class="cf-group"><label class="cf-label">First Name</label><input class="cf-input" type="text"
                            placeholder="Zara" /></div>
                    <div class="cf-group"><label class="cf-label">Last Name</label><input class="cf-input" type="text"
                            placeholder="Ahmed" /></div>
                </div>
                <div class="cf-group"><label class="cf-label">Email Address</label><input class="cf-input" type="email"
                        placeholder="zara@example.com" /></div>
                <div class="cf-group">
                    <label class="cf-label">What's this about?</label>
                    <div class="cf-chips">
                        <div class="cf-chip active" onclick="selectChip(this)">Quiz Question</div>
                        <div class="cf-chip" onclick="selectChip(this)">My Season Results</div>
                        <div class="cf-chip" onclick="selectChip(this)">Partnership</div>
                        <div class="cf-chip" onclick="selectChip(this)">Press / Media</div>
                        <div class="cf-chip" onclick="selectChip(this)">Other</div>
                    </div>
                </div>
                <div class="cf-group"><label class="cf-label">Message</label>
                    <textarea class="cf-input" placeholder="Tell us what's on your mind..."></textarea>
                </div>
                <button class="cf-submit" onclick="handleContactSubmit(this)">Send Message →</button>
                <div class="cf-privacy">🔒 Your information is never shared with third parties.</div>
            </div>
        </div>

        <!-- FAQ -->
        <section class="faq-section">
            <span class="section-label">✦ FAQ</span>
            <h2 class="section-h2" style="margin-bottom:36px;">Common questions</h2>
            <div class="faq-grid">
                <div class="faq-item" onclick="toggleFaq(this)">
                    <div class="faq-q">How accurate is the quiz?</div>
                    <div class="faq-a">Our quiz is based on proven seasonal colour theory developed over decades. It's
                        highly accurate for most people, though a professional colour analysis remains the gold standard.
                        Think of our quiz as an excellent starting point.</div>
                </div>
                <div class="faq-item" onclick="toggleFaq(this)">
                    <div class="faq-q">Can I be between two seasons?</div>
                    <div class="faq-a">Yes — colour seasons exist on a spectrum. Some people are clearly one season, others
                        sit between two. If your result doesn't feel quite right, try the sub-seasons (Soft Autumn, True
                        Winter, etc.) or look at both neighbouring seasons' palettes.</div>
                </div>
                <div class="faq-item" onclick="toggleFaq(this)">
                    <div class="faq-q">Does it work for all skin tones?</div>
                    <div class="faq-a">Absolutely. Seasonal colour theory works for every skin tone, from very fair to very
                        deep. The seasons are defined by undertone and contrast level, not by skin tone depth. Everyone has
                        a season.</div>
                </div>
                <div class="faq-item" onclick="toggleFaq(this)">
                    <div class="faq-q">Is ChromaFit really free?</div>
                    <div class="faq-a">Yes — the quiz, your results, and all our blog content are completely free. We may
                        offer premium features in the future, but the core analysis will always be free.</div>
                </div>
                <div class="faq-item" onclick="toggleFaq(this)">
                    <div class="faq-q">My hair is dyed. What do I enter?</div>
                    <div class="faq-a">Enter your natural, untreated hair colour — or the colour your hair was before you
                        started dyeing it. Your natural pigmentation is what determines your season, not your current
                        colour.</div>
                </div>
                <div class="faq-item" onclick="toggleFaq(this)">
                    <div class="faq-q">Can men use ChromaFit?</div>
                    <div class="faq-a">Absolutely! Colour seasons are not gender-specific. The quiz and recommendations
                        work for everyone — the colour principles are universal, and the body type advice is adaptable.
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
