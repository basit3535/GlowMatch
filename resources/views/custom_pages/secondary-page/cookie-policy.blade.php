@extends('layouts.app')

@section('title', 'Cookie Policy - GlowMatch')

@section('page_style')
    <style>
        /* same legal-page styles as above */
        .legal-page { max-width: 820px; margin: 90px auto 80px; padding: 0 20px; font-family: 'Jost', sans-serif; color: var(--charcoal, #2D2A24); }
        .legal-page h1 { font-family: 'Cormorant Garamond', serif; font-size: 36px; font-weight: 400; border-bottom: 2px solid var(--border, #E6DFD6); padding-bottom: 16px; margin-bottom: 30px; }
        .legal-page h2 { font-family: 'Cormorant Garamond', serif; font-size: 24px; font-weight: 400; margin-top: 32px; margin-bottom: 12px; }
        .legal-page p, .legal-page li { line-height: 1.7; font-size: 16px; color: #3D3A34; }
        .legal-page ul, .legal-page ol { padding-left: 24px; }
        .legal-page a { color: var(--accent, #C4956A); text-decoration: underline; }
        .legal-page .updated { color: var(--muted, #8A7A6A); font-size: 14px; margin-top: -20px; margin-bottom: 30px; }
        .legal-page table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        .legal-page th, .legal-page td { border: 1px solid var(--border, #E6DFD6); padding: 10px 14px; text-align: left; }
        .legal-page th { background: #F4F0EA; font-weight: 600; }
        .legal-page .cookie-grid { display: grid; grid-template-columns: 1fr 2fr; gap: 6px; background: var(--light-bg, #F8F5F0); padding: 16px; border-radius: 12px; }
        .legal-page .cookie-grid .label { font-weight: 600; }
        @media (max-width: 600px) { .legal-page { margin: 90px auto; } .legal-page h1 { font-size: 28px; } }
    </style>
@endsection

@section('content')
    <div class="legal-page">
        <h1>Cookie Policy</h1>
        <p class="updated">Effective: 1 January 2026</p>

        <p>This Cookie Policy explains how GlowMatch (SB Intercontinental LTD) uses cookies and similar tracking technologies when you visit our website. It explains what these technologies are, why we use them, and your rights to control their use.</p>

        <h2>What are cookies?</h2>
        <p>Cookies are small text files that are placed on your device (computer, smartphone, tablet) by websites you visit. They are widely used to make websites work more efficiently, as well as to provide information to the site owners.</p>

        <h2>How we use cookies</h2>
        <p>We use cookies for the following purposes:</p>
        <ul>
            <li><strong>Essential cookies:</strong> Necessary for the website to function properly (e.g., to remember your cookie preferences).</li>
            <li><strong>Functional cookies:</strong> To remember your quiz answers and provide a personalised experience.</li>
            <li><strong>Analytics cookies:</strong> To understand how visitors interact with our site (we use Google Analytics).</li>
            <li><strong>Marketing cookies:</strong> To deliver relevant advertisements and track campaign performance (only with your explicit consent).</li>
        </ul>

        <h2>Cookies we use</h2>
        <table>
            <thead>
                <tr><th>Name</th><th>Purpose</th><th>Duration</th></tr>
            </thead>
            <tbody>
                <tr><td>cookie_consent</td><td>Stores your cookie consent preference</td><td>1 year</td></tr>
                <tr><td>_ga</td><td>Google Analytics – distinguishes unique users</td><td>2 years</td></tr>
                <tr><td>_gid</td><td>Google Analytics – distinguishes users (session)</td><td>24 hours</td></tr>
                <tr><td>quiz_session</td><td>Remembers your progress in the colour quiz (if any)</td><td>Session</td></tr>
            </tbody>
        </table>

        <h2>Your choices</h2>
        <p>When you first visit our site, you are presented with a cookie banner that allows you to accept or reject non‑essential cookies. You can change your preferences at any time by clicking the "Manage" button in the floating cookie banner or by clearing your browser’s cookies.</p>
        <p>You can also configure your browser settings to block or delete cookies. However, please note that blocking essential cookies may affect the functionality of our site.</p>

        <h2>Third‑party cookies</h2>
        <p>We may use third‑party services (e.g., Google Analytics, Pinterest, social media buttons) that set their own cookies. We do not control these cookies; please refer to the respective third‑party privacy policies for more information.</p>

        <h2>Updates to this policy</h2>
        <p>We may update this Cookie Policy from time to time to reflect changes in technology or legal requirements. The latest version will always be available on this page.</p>

        <h2>Contact us</h2>
        <p>If you have any questions about our use of cookies, please contact us at <a href="mailto:privacy@glowmatch.co.uk">privacy@glowmatch.co.uk</a> or write to:</p>
        <address>SB Intercontinental LTD, 22 Balliol Street, Manchester, England, M8 0WS</address>
    </div>
@endsection
