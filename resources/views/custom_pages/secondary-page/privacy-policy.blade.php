@extends('layouts.app')

@section('title', 'Privacy Policy - GlowMatch')

@section('page_style')
    <style>
        .legal-page {
            max-width: 820px;
            margin: 90px auto 80px;
            padding: 0 20px;
            font-family: 'Jost', sans-serif;
            color: var(--charcoal, #2D2A24);
        }
        .legal-page h1 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 36px;
            font-weight: 400;
            border-bottom: 2px solid var(--border, #E6DFD6);
            padding-bottom: 16px;
            margin-bottom: 30px;
        }
        .legal-page h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 24px;
            font-weight: 400;
            margin-top: 32px;
            margin-bottom: 12px;
        }
        .legal-page p, .legal-page li {
            line-height: 1.7;
            font-size: 16px;
            color: #3D3A34;
        }
        .legal-page ul, .legal-page ol {
            padding-left: 24px;
        }
        .legal-page a {
            color: var(--accent, #C4956A);
            text-decoration: underline;
        }
        .legal-page .updated {
            color: var(--muted, #8A7A6A);
            font-size: 14px;
            margin-top: -20px;
            margin-bottom: 30px;
        }
        .legal-page address {
            font-style: normal;
            background: var(--light-bg, #F8F5F0);
            padding: 16px 20px;
            border-radius: 12px;
            margin: 20px 0;
        }
        @media (max-width: 600px) {
            .legal-page { margin: 90px auto; }
            .legal-page h1 { font-size: 28px; }
        }
    </style>
@endsection

@section('content')
    <div class="legal-page">
        <h1>Privacy Policy</h1>
        <p class="updated">Effective: 1 January 2026 | Last updated: 1 January 2026</p>

        <p>At GlowMatch (a trading style of SB Intercontinental LTD), we take your privacy seriously. This policy explains how we collect, use, and protect your personal information when you visit our website or use our services.</p>

        <h2>1. Who we are</h2>
        <p>GlowMatch is operated by SB Intercontinental LTD, a company registered in England and Wales (Company No. 17047376). Our registered office is:</p>
        <address>22 Balliol Street, Manchester, England, M8 0WS</address>

        <h2>2. What information we collect</h2>
        <p>We collect information that you provide directly, such as when you:</p>
        <ul>
            <li>Take our colour analysis quiz (name, email, and your colour/body type selections)</li>
            <li>Subscribe to our newsletter</li>
            <li>Contact us via email or social media</li>
            <li>Browse our website (via cookies and analytics)</li>
        </ul>
        <p>We also automatically collect certain data through cookies, including IP address, browser type, pages visited, and time spent on the site.</p>

        <h2>3. How we use your data</h2>
        <p>We use your information to:</p>
        <ul>
            <li>Provide and personalise our colour analysis service</li>
            <li>Send you relevant style tips, seasonal colour updates, and promotional content (only if you opt in)</li>
            <li>Improve our website and user experience</li>
            <li>Comply with legal obligations</li>
        </ul>

        <h2>4. Legal basis for processing</h2>
        <p>We rely on your consent (e.g., when you submit the quiz) and our legitimate interests (e.g., improving our service). Where we use consent, you can withdraw it at any time.</p>

        <h2>5. Sharing your data</h2>
        <p>We do not sell or rent your personal information. We may share data with trusted third‑party service providers (e.g., hosting, email delivery) who process data on our behalf under strict confidentiality agreements.</p>

        <h2>6. Data retention</h2>
        <p>We keep your data for as long as necessary to fulfill the purposes outlined in this policy, unless a longer retention period is required by law.</p>

        <h2>7. Your rights</h2>
        <p>Under UK GDPR, you have the right to:</p>
        <ul>
            <li>Access, correct, or delete your personal data</li>
            <li>Restrict or object to processing</li>
            <li>Data portability</li>
            <li>Lodge a complaint with the Information Commissioner’s Office (ICO)</li>
        </ul>
        <p>To exercise any of these rights, contact us at <a href="mailto:privacy@glowmatch.co.uk">privacy@glowmatch.co.uk</a>.</p>

        <h2>8. Cookies</h2>
        <p>We use essential, functional, and analytics cookies to enhance your experience. You can manage your preferences via our <a href="{{ route('show.custom_pages', ['slug' => 'cookie-policy']) }}">Cookie Policy</a>.</p>

        <h2>9. Changes to this policy</h2>
        <p>We may update this policy from time to time. We will notify you of any material changes on this page.</p>

        <h2>10. Contact us</h2>
        <p>If you have any questions about this Privacy Policy, please contact our Data Protection Officer at:</p>
        <p><strong>Email:</strong> <a href="mailto:dpo@glowmatch.co.uk">dpo@glowmatch.co.uk</a><br>
        <strong>Post:</strong> SB Intercontinental LTD, 22 Balliol Street, Manchester, M8 0WS, United Kingdom.</p>
    </div>
@endsection
