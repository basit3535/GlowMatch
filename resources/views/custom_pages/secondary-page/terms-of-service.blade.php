@extends('layouts.app')

@section('title', 'Terms of Service - GlowMatch')

@section('page_style')
    {{-- @include('partials.legal-style') optional, we can duplicate the style above --}}
    <style>
        /* same legal-page styles as privacy */
        .legal-page { max-width: 820px; margin: 90px auto 80px; padding: 0 20px; font-family: 'Jost', sans-serif; color: var(--charcoal, #2D2A24); }
        .legal-page h1 { font-family: 'Cormorant Garamond', serif; font-size: 36px; font-weight: 400; border-bottom: 2px solid var(--border, #E6DFD6); padding-bottom: 16px; margin-bottom: 30px; }
        .legal-page h2 { font-family: 'Cormorant Garamond', serif; font-size: 24px; font-weight: 400; margin-top: 32px; margin-bottom: 12px; }
        .legal-page p, .legal-page li { line-height: 1.7; font-size: 16px; color: #3D3A34; }
        .legal-page ul, .legal-page ol { padding-left: 24px; }
        .legal-page a { color: var(--accent, #C4956A); text-decoration: underline; }
        .legal-page .updated { color: var(--muted, #8A7A6A); font-size: 14px; margin-top: -20px; margin-bottom: 30px; }
        .legal-page address { font-style: normal; background: var(--light-bg, #F8F5F0); padding: 16px 20px; border-radius: 12px; margin: 20px 0; }
        @media (max-width: 600px) { .legal-page { margin: 90px auto; } .legal-page h1 { font-size: 28px; } }
    </style>
@endsection

@section('content')
    <div class="legal-page">
        <h1>Terms of Service</h1>
        <p class="updated">Effective: 1 January 2026</p>

        <p>Welcome to GlowMatch. By using our website and services, you agree to comply with and be bound by the following terms and conditions. Please read them carefully.</p>

        <h2>1. Acceptance of Terms</h2>
        <p>By accessing or using the GlowMatch website (glowmatch.co.uk) and any related services, you agree to these Terms of Service. If you do not agree, please do not use our site.</p>

        <h2>2. Services Provided</h2>
        <p>GlowMatch offers a free, online colour season analysis quiz, style recommendations, and educational content about colour theory and body types. We reserve the right to modify, suspend, or discontinue any part of our service at any time.</p>

        <h2>3. User Accounts</h2>
        <p>You are not required to create an account to take the quiz. However, if you choose to provide your email address, you agree to receive occasional communications from us (you can unsubscribe at any time). You are responsible for maintaining the confidentiality of any account credentials you may create.</p>

        <h2>4. Intellectual Property</h2>
        <p>All content on this site – including text, graphics, logos, images, and software – is the property of SB Intercontinental LTD or its content suppliers and is protected by UK and international copyright laws. You may not reproduce, distribute, or create derivative works without our express written permission.</p>

        <h2>5. User-Generated Content</h2>
        <p>If you submit feedback, comments, or other content, you grant us a non‑exclusive, royalty‑free, perpetual license to use, modify, and display that content in connection with our services.</p>

        <h2>6. Disclaimer of Warranties</h2>
        <p>Our services are provided “as is” without warranties of any kind, either express or implied. We do not guarantee that the colour analysis results are entirely accurate or suitable for your specific needs. The content is for informational and entertainment purposes only.</p>

        <h2>7. Limitation of Liability</h2>
        <p>To the fullest extent permitted by law, SB Intercontinental LTD shall not be liable for any indirect, incidental, or consequential damages arising from your use of our services.</p>

        <h2>8. External Links</h2>
        <p>Our site may contain links to third‑party websites. We are not responsible for the content or privacy practices of those sites.</p>

        <h2>9. Governing Law</h2>
        <p>These terms are governed by and construed in accordance with the laws of England and Wales. Any disputes shall be subject to the exclusive jurisdiction of the courts of England and Wales.</p>

        <h2>10. Changes to Terms</h2>
        <p>We may revise these terms at any time. Continued use of the site after changes constitutes acceptance of the new terms.</p>

        <h2>11. Contact Information</h2>
        <p>If you have any questions about these Terms, please contact us at <a href="mailto:legal@glowmatch.co.uk">legal@glowmatch.co.uk</a> or write to:</p>
        <address>SB Intercontinental LTD, 22 Balliol Street, Manchester, England, M8 0WS</address>
    </div>
@endsection
