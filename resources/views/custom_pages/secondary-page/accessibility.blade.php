@extends('layouts.app')

@section('title', 'Accessibility Statement - GlowMatch')

@section('page_style')
    <style>
        /* same legal-page styles */
        .legal-page { max-width: 820px; margin: 90px auto 80px; padding: 0 20px; font-family: 'Jost', sans-serif; color: var(--charcoal, #2D2A24); }
        .legal-page h1 { font-family: 'Cormorant Garamond', serif; font-size: 36px; font-weight: 400; border-bottom: 2px solid var(--border, #E6DFD6); padding-bottom: 16px; margin-bottom: 30px; }
        .legal-page h2 { font-family: 'Cormorant Garamond', serif; font-size: 24px; font-weight: 400; margin-top: 32px; margin-bottom: 12px; }
        .legal-page p, .legal-page li { line-height: 1.7; font-size: 16px; color: #3D3A34; }
        .legal-page ul { padding-left: 24px; }
        .legal-page a { color: var(--accent, #C4956A); text-decoration: underline; }
        .legal-page .updated { color: var(--muted, #8A7A6A); font-size: 14px; margin-top: -20px; margin-bottom: 30px; }
        .legal-page .badge { display: inline-block; background: var(--accent, #C4956A); color: #fff; padding: 4px 12px; border-radius: 30px; font-size: 13px; font-weight: 500; margin-right: 8px; }
        @media (max-width: 600px) { .legal-page { margin: 90px auto; } .legal-page h1 { font-size: 28px; } }
    </style>
@endsection

@section('content')
    <div class="legal-page">
        <h1>Accessibility Statement</h1>
        <p class="updated">Last updated: 1 January 2026</p>

        <p>GlowMatch is committed to ensuring that our website is accessible to everyone, regardless of ability or technology. We believe in inclusivity and strive to provide a seamless experience for all users.</p>

        <h2>Our commitment</h2>
        <p>We follow the Web Content Accessibility Guidelines (WCAG) 2.1 level AA as our standard. Our goal is to make our content:</p>
        <ul>
            <li><strong>Perceivable:</strong> Provide text alternatives for non‑text content, and ensure content is adaptable to different screen sizes and assistive technologies.</li>
            <li><strong>Operable:</strong> Ensure all functionality is available via keyboard, and give users enough time to read and interact with content.</li>
            <li><strong>Understandable:</strong> Use clear and simple language, predictable navigation, and consistent structure.</li>
            <li><strong>Robust:</strong> Build our site with clean, semantic HTML and compatible with current and future assistive technologies.</li>
        </ul>

        <h2>Current accessibility features</h2>
        <ul>
            <li>Semantic HTML structure with proper heading hierarchy.</li>
            <li>Descriptive link text and alt attributes for images.</li>
            <li>Sufficient colour contrast between text and background.</li>
            <li>Zoom support – content is readable up to 200% without breaking layout.</li>
            <li>Keyboard navigable interactive elements (menus, forms, buttons).</li>
            <li>Clear focus indicators for keyboard users.</li>
            <li>All videos and audio content are transcribed or captioned.</li>
        </ul>

        <h2>Known limitations</h2>
        <p>We are continuously working to improve accessibility. Some pages may contain older content or third‑party embedded content that may not be fully accessible. If you encounter any issues, please let us know.</p>

        <h2>Feedback & help</h2>
        <p>We welcome your feedback on the accessibility of GlowMatch. If you experience any barriers or have suggestions for improvement, please contact us:</p>
        <ul>
            <li><strong>Email:</strong> <a href="mailto:accessibility@glowmatch.co.uk">accessibility@glowmatch.co.uk</a></li>
            <li><strong>Phone:</strong> +44 (0) 161 123 4567 (available Mon‑Fri, 9am‑5pm)</li>
            <li><strong>Post:</strong> SB Intercontinental LTD, 22 Balliol Street, Manchester, M8 0WS</li>
        </ul>
        <p>We aim to respond to accessibility queries within 5 business days.</p>

        <h2>Compatibility</h2>
        <p>This site is designed to be compatible with:</p>
        <ul>
            <li>Latest versions of Chrome, Firefox, Safari, and Edge</li>
            <li>Screen readers (NVDA, JAWS, VoiceOver, TalkBack)</li>
            <li>Browser zoom and text‑only modes</li>
        </ul>

        <h2>Future improvements</h2>
        <p>We are actively working to improve the accessibility of our interactive quiz and colour analysis tools. Regular audits will be conducted to identify and fix issues.</p>

        <p>We are dedicated to making GlowMatch an inclusive space for everyone. Thank you for visiting.</p>
    </div>
@endsection
