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
            --quiz-bg: #FAF8F5;
            --quiz-card: #FFFFFF;
            --quiz-border: #E8E2D9;
            --quiz-accent: #C4956A;
            --quiz-accent-dark: #A07850;
            --quiz-text: #1A1410;
            --quiz-muted: #8A7A6A;
            --quiz-light: #F2EDE6;
            --quiz-success: #5C7A5C;
            --quiz-shadow: 0 4px 32px rgba(0, 0, 0, .08);
            --quiz-radius: 18px;
            --quiz-radius-sm: 10px;
            font-family: 'DM Sans', sans-serif;
        }

        /* ══════════════════════════════════════════════════════════
                       Reset & Base
                    ══════════════════════════════════════════════════════════ */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        /* ══════════════════════════════════════════════════════════
                       Page Shell
                    ══════════════════════════════════════════════════════════ */
        #page-quiz {
            background: var(--quiz-bg);
            min-height: 100vh;
            padding: 0 0 80px;
        }

        /* ══════════════════════════════════════════════════════════
                       Header
                    ══════════════════════════════════════════════════════════ */
        .quiz-header {
            text-align: center;
            padding: 90px 24px 40px;
            background: linear-gradient(180deg, #F2EDE6 0%, var(--quiz-bg) 100%);
            border-bottom: 1px solid var(--quiz-border);
        }

        .quiz-header .section-label {
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

        /* ══════════════════════════════════════════════════════════
                       Progress Bar – responsive
                    ══════════════════════════════════════════════════════════ */
        .quiz-progress {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0;
            margin-top: 36px;
            flex-wrap: nowrap;
            overflow-x: auto;
            padding: 8px 4px;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
        }

        .quiz-progress::-webkit-scrollbar {
            display: none;
        }

        .qp-step {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 4px;
            flex-shrink: 0;
            min-width: 2.2rem;
        }

        .qp-circle {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: var(--quiz-card);
            border: 2px solid var(--quiz-border);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 500;
            color: var(--quiz-muted);
            transition: all .3s ease;
        }

        .qp-circle.active {
            background: var(--quiz-accent);
            border-color: var(--quiz-accent);
            color: #fff;
            box-shadow: 0 0 0 4px rgba(196, 149, 106, .2);
        }

        .qp-circle.done {
            background: var(--quiz-success);
            border-color: var(--quiz-success);
            color: #fff;
        }

        .qp-label {
            font-size: 8px;
            color: var(--quiz-muted);
            letter-spacing: .3px;
            white-space: nowrap;
            text-align: center;
            max-width: 48px;
            line-height: 1.2;
        }

        .qp-line {
            height: 2px;
            width: 16px;
            background: var(--quiz-border);
            margin-bottom: 18px;
            transition: background .3s;
            flex-shrink: 0;
        }

        .qp-line.done {
            background: var(--quiz-success);
        }

        @media (max-width: 480px) {
            .qp-line {
                width: 8px;
            }

            .qp-circle {
                width: 26px;
                height: 26px;
                font-size: 10px;
            }

            .qp-label {
                font-size: 7px;
                max-width: 36px;
            }

            .quiz-progress {
                display: none;
                gap: 0;
                padding: 4px 2px;
            }
        }

        @media (max-width: 400px) {
            .qp-line {
                width: 4px;
            }

            .qp-circle {
                width: 22px;
                height: 22px;
                font-size: 8px;
            }

            .qp-label {
                font-size: 6px;
                max-width: 28px;
            }
        }

        /* ══════════════════════════════════════════════════════════
                       Quiz Body
                    ══════════════════════════════════════════════════════════ */
        .quiz-body {
            max-width: 900px;
            margin: 48px auto 0;
            padding: 0 16px;
        }

        @media (max-width: 480px) {
            .quiz-body {
                padding: 0 10px;
                margin-top: 28px;
            }
        }

        .q-step {
            display: none;
            animation: fadeSlideIn .4s ease;
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
            font-size: clamp(20px, 3vw, 30px);
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

        @media (max-width: 480px) {
            .q-hint {
                font-size: 13px;
                margin-bottom: 20px;
            }
        }

        /* ══════════════════════════════════════════════════════════
                       STEP LAYOUT – preview + options (responsive)
                    ══════════════════════════════════════════════════════════ */
        .step-layout {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 24px;
            margin-bottom: 8px;
        }

        .step-layout .step-preview {
            min-width: 0;
        }

        .step-layout .step-options {
            min-width: 0;
        }

        @media (max-width: 820px) {
            .step-layout {
                grid-template-columns: 1fr 1.5fr;
                gap: 18px;
            }
        }

        @media (max-width: 680px) {
            .step-layout {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .step-layout .step-preview {
                max-width: 340px;
                margin: 0 auto;
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .step-layout {
                gap: 12px;
            }

            .step-layout .step-preview {
                max-width: 280px;
            }
        }

        /* ══════════════════════════════════════════════════════════
                       Gender Step
                    ══════════════════════════════════════════════════════════ */
        .gender-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-bottom: 32px;
        }

        @media (max-width: 480px) {
            .gender-grid {
                gap: 10px;
            }
        }

        .gender-opt {
            background: var(--quiz-card);
            border: 2px solid var(--quiz-border);
            border-radius: var(--quiz-radius);
            padding: 28px 12px;
            text-align: center;
            cursor: pointer;
            transition: all .25s ease;
        }

        .gender-opt:hover {
            border-color: var(--quiz-accent);
            transform: translateY(-2px);
            box-shadow: var(--quiz-shadow);
        }

        .gender-opt.sel {
            border-color: var(--quiz-accent);
            background: linear-gradient(135deg, #FDF6EE, #F5EAD8);
            box-shadow: 0 0 0 3px rgba(196, 149, 106, .15);
        }

        .gender-opt-icon {
            font-size: 30px;
            margin-bottom: 8px;
            display: block;
        }

        .gender-opt-name {
            font-family: 'Cormorant Garamond', serif;
            font-size: 17px;
            font-weight: 400;
            color: var(--quiz-text);
        }

        @media (max-width: 480px) {
            .gender-opt {
                padding: 18px 8px;
            }

            .gender-opt-icon {
                font-size: 24px;
            }

            .gender-opt-name {
                font-size: 14px;
            }
        }

        /* ══════════════════════════════════════════════════════════
                       Option Grids – fully responsive
                    ══════════════════════════════════════════════════════════ */
        .opt-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(110px, 1fr));
            gap: 12px;
            margin-bottom: 8px;
        }

        @media (max-width: 600px) {
            .opt-grid {
                grid-template-columns: repeat(auto-fill, minmax(90px, 1fr));
                gap: 8px;
            }
        }

        @media (max-width: 400px) {
            .opt-grid {
                grid-template-columns: repeat(auto-fill, minmax(72px, 1fr));
                gap: 6px;
            }
        }

        .opt {
            background: var(--quiz-card);
            border: 2px solid var(--quiz-border);
            border-radius: var(--quiz-radius-sm);
            padding: 16px 8px 14px;
            text-align: center;
            cursor: pointer;
            transition: all .25s ease;
        }

        .opt:hover {
            border-color: var(--quiz-accent);
            transform: translateY(-2px);
            box-shadow: var(--quiz-shadow);
        }

        .opt.sel {
            border-color: var(--quiz-accent);
            background: linear-gradient(135deg, #FDF6EE, #F5EAD8);
            box-shadow: 0 0 0 3px rgba(196, 149, 106, .15);
        }

        .opt-circle {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            margin: 0 auto 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, .15);
            position: relative;
            overflow: hidden;
        }

        .opt-circle input[type="color"] {
            position: absolute;
            top: -6px;
            left: -6px;
            width: 60px;
            height: 60px;
            border: none;
            padding: 0;
            cursor: pointer;
            background: transparent;
            border-radius: 50%;
            display: block;
        }

        .opt-name {
            font-weight: 500;
            font-size: 13px;
            color: var(--quiz-text);
            margin-bottom: 2px;
        }

        .opt-sub {
            font-size: 10px;
            color: var(--quiz-muted);
            line-height: 1.3;
        }

        @media (max-width: 480px) {
            .opt {
                padding: 12px 4px 10px;
            }

            .opt-circle {
                width: 36px;
                height: 36px;
                margin-bottom: 6px;
            }

            .opt-circle input[type="color"] {
                width: 50px;
                height: 50px;
                top: -7px;
                left: -7px;
            }

            .opt-name {
                font-size: 11px;
            }

            .opt-sub {
                font-size: 9px;
            }
        }

        @media (max-width: 400px) {
            .opt-circle {
                width: 30px;
                height: 30px;
            }

            .opt-circle input[type="color"] {
                width: 42px;
                height: 42px;
                top: -6px;
                left: -6px;
            }

            .opt-name {
                font-size: 10px;
            }
        }

        /* ══════════════════════════════════════════════════════════
                       Preview Container
                    ══════════════════════════════════════════════════════════ */
        .preview-container {
            background: var(--quiz-card);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--quiz-shadow);
            position: relative;
            margin-bottom: 0;
            aspect-ratio: 1 / 1;
            width: 100%;
            max-width: 100%;
        }

        .preview-container .preview-photo {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .preview-container .preview-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: var(--quiz-muted);
            font-size: 12px;
            text-align: center;
            background: var(--quiz-light);
            padding: 16px;
            border-radius: 16px;
            gap: 6px;
        }

        .preview-container .preview-placeholder span {
            font-size: 32px;
        }

        .preview-container .preview-swatch {
            position: absolute;
            bottom: 12px;
            right: 12px;
            width: 40px;
            height: 40px;
            border-radius: 12px;
            border: 2px solid #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
            background: #ddd;
            transition: background 0.2s;
        }

        @media (max-width: 480px) {
            .preview-container .preview-swatch {
                width: 32px;
                height: 32px;
                border-radius: 8px;
                bottom: 8px;
                right: 8px;
            }

            .preview-container .preview-placeholder span {
                font-size: 24px;
            }

            .preview-container .preview-placeholder {
                font-size: 10px;
            }
        }

        /* ══════════════════════════════════════════════════════════
                       Body Type
                    ══════════════════════════════════════════════════════════ */
        .body-opt-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
            gap: 14px;
            margin-bottom: 32px;
        }

        @media (max-width: 600px) {
            .body-opt-grid {
                grid-template-columns: repeat(auto-fill, minmax(110px, 1fr));
                gap: 10px;
            }
        }

        @media (max-width: 400px) {
            .body-opt-grid {
                grid-template-columns: repeat(auto-fill, minmax(90px, 1fr));
                gap: 8px;
            }
        }

        .body-opt {
            background: var(--quiz-card);
            border: 2px solid var(--quiz-border);
            border-radius: var(--quiz-radius);
            padding: 20px 10px 16px;
            text-align: center;
            cursor: pointer;
            transition: all .25s ease;
        }

        .body-opt:hover {
            border-color: var(--quiz-accent);
            transform: translateY(-2px);
            box-shadow: var(--quiz-shadow);
        }

        .body-opt.sel {
            border-color: var(--quiz-accent);
            background: linear-gradient(135deg, #FDF6EE, #F5EAD8);
            box-shadow: 0 0 0 3px rgba(196, 149, 106, .15);
        }

        .body-opt-icon {
            font-size: 24px;
            display: block;
            margin-bottom: 6px;
        }

        .body-opt-name {
            font-weight: 500;
            font-size: 13px;
            color: var(--quiz-text);
            margin-bottom: 3px;
        }

        .body-opt-desc {
            font-size: 10px;
            color: var(--quiz-muted);
            line-height: 1.3;
        }

        @media (max-width: 480px) {
            .body-opt {
                padding: 14px 6px 12px;
            }

            .body-opt-icon {
                font-size: 20px;
            }

            .body-opt-name {
                font-size: 11px;
            }

            .body-opt-desc {
                font-size: 9px;
            }
        }

        /* ══════════════════════════════════════════════════════════
                       Photo Upload
                    ══════════════════════════════════════════════════════════ */
        .photo-upload-area {
            border: 2px dashed var(--quiz-border);
            border-radius: var(--quiz-radius);
            padding: 48px 24px;
            text-align: center;
            cursor: pointer;
            background: var(--quiz-card);
            transition: all .25s ease;
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
            font-size: 36px;
            margin-bottom: 10px;
            display: block;
        }

        .photo-upload-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 18px;
            color: var(--quiz-text);
            margin-bottom: 4px;
        }

        .photo-upload-sub {
            font-size: 12px;
            color: var(--quiz-muted);
        }

        .photo-change-btn {
            position: absolute;
            bottom: 12px;
            right: 12px;
            background: rgba(255, 255, 255, .92);
            border: 1px solid var(--quiz-border);
            border-radius: 8px;
            padding: 6px 14px;
            font-size: 12px;
            cursor: pointer;
            font-family: 'DM Sans', sans-serif;
        }

        .photo-ai-note {
            background: linear-gradient(135deg, #F0EDE8, #E8E2D8);
            border-radius: var(--quiz-radius-sm);
            padding: 12px 16px;
            margin-bottom: 24px;
            font-size: 13px;
            color: var(--quiz-muted);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        @media (max-width: 480px) {
            .photo-upload-area {
                padding: 32px 16px;
            }

            .photo-upload-icon {
                font-size: 28px;
            }

            .photo-upload-title {
                font-size: 16px;
            }

            .photo-upload-sub {
                font-size: 11px;
            }

            .photo-change-btn {
                font-size: 11px;
                padding: 4px 10px;
            }

            .photo-ai-note {
                font-size: 12px;
                padding: 10px 14px;
            }
        }

        /* ══════════════════════════════════════════════════════════
                       Contact Form
                    ══════════════════════════════════════════════════════════ */
        .contact-form-wrap {
            background: var(--quiz-card);
            border: 1px solid var(--quiz-border);
            border-radius: var(--quiz-radius);
            padding: 32px 28px;
            margin-bottom: 32px;
        }

        .contact-form-wrap .form-row {
            margin-bottom: 18px;
        }

        .contact-form-wrap label {
            display: block;
            font-size: 11px;
            font-weight: 500;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: var(--quiz-muted);
            margin-bottom: 6px;
        }

        .contact-form-wrap input {
            width: 100%;
            padding: 12px 16px;
            border: 1.5px solid var(--quiz-border);
            border-radius: var(--quiz-radius-sm);
            font-family: 'DM Sans', sans-serif;
            font-size: 15px;
            color: var(--quiz-text);
            background: var(--quiz-bg);
            outline: none;
            transition: border-color .2s;
            box-sizing: border-box;
        }

        .contact-form-wrap input:focus {
            border-color: var(--quiz-accent);
            background: #fff;
        }

        .privacy-note {
            font-size: 12px;
            color: var(--quiz-muted);
            margin-top: 14px;
            text-align: center;
            line-height: 1.5;
        }

        @media (max-width: 480px) {
            .contact-form-wrap {
                padding: 20px 14px;
            }

            .contact-form-wrap input {
                font-size: 14px;
                padding: 10px 14px;
            }
        }

        /* ══════════════════════════════════════════════════════════
                       Nav Buttons
                    ══════════════════════════════════════════════════════════ */
        .q-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 8px;
            padding-top: 8px;
            gap: 12px;
            flex-wrap: wrap;
        }

        .btn-back-q {
            background: none;
            border: 1.5px solid var(--quiz-border);
            border-radius: var(--quiz-radius-sm);
            padding: 10px 18px;
            font-family: 'DM Sans', sans-serif;
            font-size: 13px;
            color: var(--quiz-muted);
            cursor: pointer;
            transition: all .2s;
        }

        .btn-back-q:hover {
            border-color: var(--quiz-accent);
            color: var(--quiz-accent);
        }

        .btn-next-q {
            background: var(--quiz-border);
            border: none;
            border-radius: var(--quiz-radius-sm);
            padding: 11px 22px;
            font-family: 'DM Sans', sans-serif;
            font-size: 13px;
            font-weight: 500;
            color: var(--quiz-muted);
            cursor: not-allowed;
            transition: all .25s ease;
        }

        .btn-next-q.on {
            background: linear-gradient(135deg, var(--quiz-accent), var(--quiz-accent-dark));
            color: #fff;
            cursor: pointer;
            box-shadow: 0 4px 16px rgba(196, 149, 106, .35);
        }

        .btn-next-q.on:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(196, 149, 106, .45);
        }

        @media (max-width: 480px) {
            .btn-back-q {
                padding: 8px 14px;
                font-size: 12px;
            }

            .btn-next-q {
                padding: 9px 18px;
                font-size: 12px;
            }

            .q-nav {
                gap: 8px;
            }
        }

        /* ══════════════════════════════════════════════════════════
                       Loading
                    ══════════════════════════════════════════════════════════ */
        #qLoading {
            text-align: center;
            padding: 60px 20px;
        }

        .loading-spinner {
            width: 48px;
            height: 48px;
            border: 3px solid var(--quiz-border);
            border-top-color: var(--quiz-accent);
            border-radius: 50%;
            animation: spin .8s linear infinite;
            margin: 0 auto 20px;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        .loading-steps {
            list-style: none;
            padding: 0;
            margin: 24px 0 0;
        }

        .loading-steps li {
            font-size: 14px;
            color: var(--quiz-muted);
            padding: 6px 0;
            transition: color .3s;
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

        @media (max-width: 480px) {
            #qLoading {
                padding: 40px 16px;
            }

            .loading-steps li {
                font-size: 13px;
                padding: 4px 0;
            }
        }

        /* ══════════════════════════════════════════════════════════
                       Results
                    ══════════════════════════════════════════════════════════ */
        .results-wrap {
            padding: 0;
        }

        .results-hero {
            background: linear-gradient(135deg, #F5EDE0, #EDE0CC);
            border-radius: var(--quiz-radius);
            padding: 40px 24px 32px;
            text-align: center;
            margin-bottom: 24px;
            border: 1px solid rgba(196, 149, 106, .2);
        }

        .result-badge {
            font-family: 'Cormorant Garamond', serif;
            font-size: 12px;
            font-weight: 400;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--quiz-accent-dark);
            background: rgba(196, 149, 106, .12);
            display: inline-block;
            padding: 6px 18px;
            border-radius: 40px;
            border: 1px solid rgba(196, 149, 106, .25);
            margin-bottom: 14px;
        }

        .results-hero h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(26px, 4vw, 40px);
            font-weight: 300;
            color: var(--quiz-text);
            margin: 0 auto 12px;
            line-height: 1.2;
        }

        .results-hero p {
            font-size: 14px;
            color: var(--quiz-muted);
            max-width: 520px;
            margin: 0 auto;
            line-height: 1.6;
            font-weight: 300;
        }

        @media (max-width: 480px) {
            .results-hero {
                padding: 28px 16px 24px;
            }

            .results-hero h2 {
                font-size: 24px;
            }

            .results-hero p {
                font-size: 13px;
            }
        }

        .results-main {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-bottom: 24px;
        }

        @media (max-width: 680px) {
            .results-main {
                grid-template-columns: 1fr;
                gap: 14px;
            }
        }

        .r-card {
            background: var(--quiz-card);
            border: 1px solid var(--quiz-border);
            border-radius: var(--quiz-radius);
            padding: 20px 18px;
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
            margin-bottom: 14px;
        }

        .r-palette-row,
        .r-avoid-row {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 10px;
        }

        .r-swatch {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 4px;
            cursor: default;
        }

        .r-swatch-dot {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border: 1px solid rgba(0, 0, 0, .08);
            box-shadow: 0 2px 8px rgba(0, 0, 0, .1);
        }

        .r-avoid-row .r-swatch-dot {
            filter: grayscale(30%);
            opacity: .65;
        }

        .r-swatch-name {
            font-size: 9px;
            color: var(--quiz-muted);
            text-align: center;
            max-width: 42px;
            line-height: 1.2;
        }

        .r-note {
            font-size: 13px;
            color: var(--quiz-muted);
            line-height: 1.55;
            font-style: italic;
            margin-top: 4px;
        }

        .r-makeup {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(130px, 1fr));
            gap: 12px;
        }

        .r-makeup-item {
            background: var(--quiz-light);
            border-radius: var(--quiz-radius-sm);
            padding: 12px 14px;
        }

        .r-makeup-type {
            font-size: 9px;
            font-weight: 500;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: var(--quiz-accent);
            margin-bottom: 4px;
        }

        .r-makeup-shade {
            font-size: 13px;
            color: var(--quiz-text);
            font-weight: 500;
            margin-bottom: 2px;
        }

        .r-makeup-note {
            font-size: 11px;
            color: var(--quiz-muted);
        }

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
            padding: 10px 14px;
            font-size: 13px;
            color: var(--quiz-text);
            line-height: 1.4;
            display: flex;
            gap: 8px;
            align-items: flex-start;
        }

        .r-cloth-list li span {
            color: var(--quiz-accent);
            font-size: 15px;
            flex-shrink: 0;
        }

        .r-insight {
            font-size: 14px;
            color: var(--quiz-text);
            line-height: 1.7;
            font-weight: 300;
        }

        @media (max-width: 600px) {
            .r-cloth-list {
                grid-template-columns: 1fr;
            }

            .r-card {
                padding: 16px 14px;
            }

            .r-makeup {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 400px) {
            .r-makeup {
                grid-template-columns: 1fr;
            }

            .r-swatch-dot {
                width: 30px;
                height: 30px;
            }
        }

        /* ══════════════════════════════════════════════════════════
                       TRY-ON PANEL – fully responsive
                    ══════════════════════════════════════════════════════════ */
        .tryon-section {
            background: var(--quiz-card);
            border: 1px solid var(--quiz-border);
            border-radius: var(--quiz-radius);
            padding: 24px 20px;
            margin-bottom: 24px;
        }

        .tryon-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 20px;
            font-weight: 400;
            color: var(--quiz-text);
            margin-bottom: 2px;
        }

        .tryon-sub {
            font-size: 13px;
            color: var(--quiz-muted);
            margin-bottom: 18px;
        }

        .tryon-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            align-items: start;
        }

        @media (max-width: 820px) {
            .tryon-layout {
                gap: 18px;
            }
        }

        @media (max-width: 680px) {
            .tryon-layout {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }

        .tryon-photo-wrap {
            position: relative;
            border-radius: var(--quiz-radius);
            overflow: hidden;
            background: var(--quiz-light);
            min-height: 280px;
            display: flex;
            align-items: center;
            justify-content: center;
            aspect-ratio: 4 / 3;
            width: 100%;
        }

        .tryon-photo-wrap img.tryon-photo-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            border-radius: var(--quiz-radius);
        }

        .tryon-placeholder {
            text-align: center;
            padding: 30px 16px;
            color: var(--quiz-muted);
        }

        .tryon-placeholder .ph-icon {
            font-size: 44px;
            display: block;
            margin-bottom: 8px;
        }

        .tryon-placeholder p {
            font-size: 12px;
            line-height: 1.5;
            margin: 0;
        }

        .colour-zones {
            position: absolute;
            inset: 0;
            pointer-events: none;
        }

        .czone {
            position: absolute;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            border: 3px solid #fff;
            box-shadow: 0 3px 12px rgba(0, 0, 0, .35), 0 0 0 2px rgba(0, 0, 0, .15);
            cursor: grab;
            pointer-events: all;
            transition: transform .15s, box-shadow .15s;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            user-select: none;
            touch-action: none;
        }

        .czone:active {
            cursor: grabbing;
            transform: scale(1.12);
            box-shadow: 0 6px 20px rgba(0, 0, 0, .4), 0 0 0 3px var(--quiz-accent);
        }

        .czone-label {
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 8px;
            font-weight: 600;
            letter-spacing: .5px;
            text-transform: uppercase;
            color: #fff;
            background: rgba(0, 0, 0, .55);
            border-radius: 3px;
            padding: 1px 6px;
            white-space: nowrap;
            pointer-events: none;
        }

        @media (max-width: 480px) {
            .czone {
                width: 36px;
                height: 36px;
                font-size: 13px;
            }

            .czone-label {
                font-size: 7px;
                bottom: -18px;
                padding: 1px 4px;
            }

            .tryon-photo-wrap {
                min-height: 200px;
                aspect-ratio: 4 / 3;
            }
        }

        /* Try-on controls */
        .tryon-controls {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .zone-tabs {
            display: flex;
            gap: 6px;
            flex-wrap: wrap;
        }

        .zone-tab {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 500;
            border: 1.5px solid var(--quiz-border);
            color: var(--quiz-muted);
            cursor: pointer;
            transition: all .2s;
            background: transparent;
        }

        .zone-tab:hover {
            border-color: var(--quiz-accent);
            color: var(--quiz-accent);
        }

        .zone-tab.active {
            background: var(--quiz-accent);
            border-color: var(--quiz-accent);
            color: #fff;
        }

        @media (max-width: 400px) {
            .zone-tab {
                font-size: 10px;
                padding: 4px 8px;
            }
        }

        .tryon-palette-strip {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .palette-row-label {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--quiz-accent);
            margin-bottom: 2px;
        }

        .palette-swatches {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }

        .pswatch {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            border: 2px solid transparent;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .15);
            cursor: pointer;
            transition: transform .15s, box-shadow .15s, border-color .15s;
            position: relative;
        }

        .pswatch:hover {
            transform: scale(1.15);
            box-shadow: 0 4px 12px rgba(0, 0, 0, .25);
        }

        .pswatch.selected {
            border-color: var(--quiz-accent);
            transform: scale(1.15);
        }

        .pswatch-tip {
            position: absolute;
            bottom: -22px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 8px;
            color: var(--quiz-muted);
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: opacity .15s;
        }

        .pswatch:hover .pswatch-tip {
            opacity: 1;
        }

        @media (max-width: 480px) {
            .pswatch {
                width: 28px;
                height: 28px;
            }
        }

        .custom-colour-row {
            background: var(--quiz-light);
            border-radius: var(--quiz-radius-sm);
            padding: 14px 16px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .custom-colour-row label {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: var(--quiz-muted);
        }

        .colour-input-wrap {
            display: flex;
            gap: 8px;
            align-items: center;
            flex-wrap: wrap;
        }

        .colour-input-wrap input[type="color"] {
            width: 44px;
            height: 44px;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            padding: 0;
            background: none;
            outline: none;
            box-shadow: 0 3px 10px rgba(0, 0, 0, .2);
            flex-shrink: 0;
        }

        .colour-input-wrap input[type="color"]::-webkit-color-swatch-wrapper {
            padding: 0;
            border-radius: 50%;
        }

        .colour-input-wrap input[type="color"]::-webkit-color-swatch {
            border: none;
            border-radius: 50%;
        }

        .colour-hex-input {
            flex: 1;
            min-width: 80px;
            padding: 8px 12px;
            border: 1.5px solid var(--quiz-border);
            border-radius: var(--quiz-radius-sm);
            font-family: 'DM Sans', monospace;
            font-size: 13px;
            color: var(--quiz-text);
            background: #fff;
            outline: none;
            text-transform: uppercase;
            transition: border-color .2s;
        }

        .colour-hex-input:focus {
            border-color: var(--quiz-accent);
        }

        .btn-apply-colour {
            background: linear-gradient(135deg, var(--quiz-accent), var(--quiz-accent-dark));
            color: #fff;
            border: none;
            border-radius: var(--quiz-radius-sm);
            padding: 8px 16px;
            font-family: 'DM Sans', sans-serif;
            font-size: 12px;
            font-weight: 500;
            cursor: pointer;
            transition: all .2s;
            white-space: nowrap;
        }

        .btn-apply-colour:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(196, 149, 106, .4);
        }

        @media (max-width: 480px) {
            .colour-input-wrap input[type="color"] {
                width: 38px;
                height: 38px;
            }

            .colour-hex-input {
                font-size: 12px;
                padding: 6px 10px;
                min-width: 60px;
            }

            .btn-apply-colour {
                font-size: 11px;
                padding: 6px 12px;
            }

            .custom-colour-row {
                padding: 12px;
            }
        }

        .colour-rating {
            border-radius: var(--quiz-radius-sm);
            padding: 10px 14px;
            font-size: 13px;
            display: flex;
            align-items: flex-start;
            gap: 10px;
            line-height: 1.5;
            transition: all .3s ease;
            min-height: 44px;
        }

        .colour-rating.perfect {
            background: #EAF4EA;
            color: #3A6A3A;
            border: 1px solid #A8D4A8;
        }

        .colour-rating.good {
            background: #EFF6FB;
            color: #2A5A7A;
            border: 1px solid #A8C8E8;
        }

        .colour-rating.neutral {
            background: #FAFAF0;
            color: #6A6A3A;
            border: 1px solid #D4D4A8;
        }

        .colour-rating.avoid {
            background: #FBF0EF;
            color: #7A2A2A;
            border: 1px solid #E8AEAD;
        }

        .colour-rating.empty {
            background: var(--quiz-light);
            color: var(--quiz-muted);
            border: 1px solid var(--quiz-border);
        }

        .rating-score {
            font-size: 20px;
            font-weight: 700;
            font-family: 'Cormorant Garamond', serif;
            flex-shrink: 0;
            line-height: 1;
        }

        @media (max-width: 480px) {
            .colour-rating {
                font-size: 12px;
                padding: 8px 12px;
                min-height: 38px;
            }

            .rating-score {
                font-size: 18px;
            }
        }

        .colour-history {
            display: flex;
            gap: 5px;
            flex-wrap: wrap;
            align-items: center;
        }

        .history-dot {
            width: 26px;
            height: 26px;
            border-radius: 50%;
            border: 2px solid transparent;
            box-shadow: 0 2px 6px rgba(0, 0, 0, .15);
            cursor: pointer;
            transition: transform .15s;
            position: relative;
        }

        .history-dot:hover {
            transform: scale(1.2);
        }

        .history-dot .hd-tip {
            position: absolute;
            bottom: -18px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 8px;
            white-space: nowrap;
            background: rgba(0, 0, 0, .6);
            color: #fff;
            padding: 1px 6px;
            border-radius: 3px;
            opacity: 0;
            pointer-events: none;
            transition: opacity .15s;
        }

        .history-dot:hover .hd-tip {
            opacity: 1;
        }

        .history-clear {
            font-size: 10px;
            color: var(--quiz-muted);
            cursor: pointer;
            padding: 2px 8px;
            border: 1px solid var(--quiz-border);
            border-radius: 6px;
            transition: all .2s;
            background: none;
        }

        .history-clear:hover {
            border-color: var(--quiz-accent);
            color: var(--quiz-accent);
        }

        @media (max-width: 480px) {
            .history-dot {
                width: 22px;
                height: 22px;
            }

            .history-clear {
                font-size: 9px;
                padding: 2px 6px;
            }
        }

        /* ══════════════════════════════════════════════════════════
                       Pinterest
                    ══════════════════════════════════════════════════════════ */
        .pinterest-section {
            background: var(--quiz-card);
            border: 1px solid var(--quiz-border);
            border-radius: var(--quiz-radius);
            padding: 20px 18px;
            margin-bottom: 24px;
        }

        .pinterest-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 14px;
            flex-wrap: wrap;
        }

        .pinterest-badge {
            background: #E60023;
            color: #fff;
            font-size: 10px;
            font-weight: 500;
            letter-spacing: 1px;
            padding: 2px 10px;
            border-radius: 4px;
        }

        .pinterest-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(145px, 1fr));
            gap: 14px;
        }

        .pin-card {
            border-radius: var(--quiz-radius-sm);
            overflow: hidden;
            border: 1px solid var(--quiz-border);
            transition: all .25s ease;
            text-decoration: none;
            display: block;
            background: var(--quiz-card);
        }

        .pin-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 32px rgba(0, 0, 0, .12);
            border-color: var(--quiz-accent);
        }

        .pin-card-img-placeholder {
            width: 100%;
            aspect-ratio: 3 / 4;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
        }

        .pin-card-body {
            padding: 8px 10px 10px;
        }

        .pin-card-title {
            font-size: 12px;
            font-weight: 500;
            color: var(--quiz-text);
            margin-bottom: 2px;
            line-height: 1.3;
        }

        .pin-card-sub {
            font-size: 10px;
            color: var(--quiz-muted);
        }

        .pin-card-cta {
            display: inline-block;
            margin-top: 6px;
            font-size: 10px;
            font-weight: 500;
            color: var(--quiz-accent);
            letter-spacing: .5px;
        }

        .pin-loading {
            text-align: center;
            padding: 30px 0;
            color: var(--quiz-muted);
            font-size: 13px;
        }

        @media (max-width: 600px) {
            .pinterest-grid {
                grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
                gap: 10px;
            }

            .pinterest-section {
                padding: 16px 12px;
            }
        }

        @media (max-width: 400px) {
            .pinterest-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 8px;
            }

            .pin-card-title {
                font-size: 11px;
            }
        }

        /* ══════════════════════════════════════════════════════════
                       Results Actions
                    ══════════════════════════════════════════════════════════ */
        .results-actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 28px;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--quiz-accent), var(--quiz-accent-dark));
            color: #fff;
            border: none;
            border-radius: var(--quiz-radius-sm);
            padding: 12px 24px;
            font-family: 'DM Sans', sans-serif;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: all .25s;
            box-shadow: 0 4px 16px rgba(196, 149, 106, .35);
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(196, 149, 106, .45);
        }

        .btn-outline {
            background: transparent;
            color: var(--quiz-text);
            border: 1.5px solid var(--quiz-border);
            border-radius: var(--quiz-radius-sm);
            padding: 11px 20px;
            font-family: 'DM Sans', sans-serif;
            font-size: 13px;
            cursor: pointer;
            transition: all .2s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-outline:hover {
            border-color: var(--quiz-accent);
            color: var(--quiz-accent);
        }

        @media (max-width: 480px) {
            .results-actions {
                gap: 8px;
            }

            .btn-primary {
                padding: 10px 18px;
                font-size: 12px;
            }

            .btn-outline {
                padding: 9px 16px;
                font-size: 12px;
            }
        }

        /* ══════════════════════════════════════════════════════════
                       Extra: small tweaks
                    ══════════════════════════════════════════════════════════ */
        .text-center {
            text-align: center;
        }

        .mt-8 {
            margin-top: 8px;
        }

        .gap-8 {
            gap: 8px;
        }

        .flex-wrap {
            flex-wrap: wrap;
        }

        .items-center {
            align-items: center;
        }

        /* ─── Fix for mobile tap highlight ─── */
        .opt,
        .gender-opt,
        .body-opt,
        .pswatch,
        .zone-tab,
        .czone,
        .photo-upload-area,
        .btn-back-q,
        .btn-next-q,
        .btn-primary,
        .btn-outline,
        .history-dot,
        .history-clear,
        .btn-apply-colour {
            -webkit-tap-highlight-color: transparent;
        }

        /* ─── Print-friendly ─── */
        @media print {
            .q-nav {
                display: none;
            }

            .tryon-section {
                break-inside: avoid;
            }

            .results-actions {
                display: none;
            }

            .quiz-progress {
                display: none;
            }

            .photo-upload-area {
                border-style: solid;
            }
        }
    </style>
@endsection

@section('content')
    <div class="page" id="page-quiz">

        {{-- ─── HEADER ─── --}}
        <div class="quiz-header">
            <span class="section-label">{{ $data->content->quiz_header_label->value ?? '' }}</span>
            <h1>{{ $data->content->quiz_header_title->value ?? '' }}</h1>
            <p class="subtitle">{{ $data->content->quiz_header_subtitle->value ?? '' }}</p>

            <div class="quiz-progress">
                @foreach ([['♀', 'progress_gender'], ['📷', 'progress_photo'], ['2', 'progress_skin'], ['3', 'progress_undertone'], ['4', 'progress_eyes'], ['5', 'progress_hair'], ['6', 'progress_body'], ['✉', 'progress_profile']] as $i => $s)
                    <div class="qp-step">
                        <div class="qp-circle {{ $i === 0 ? 'active' : '' }}" id="qc{{ $i }}">{{ $s[0] }}
                        </div>
                        <div class="qp-label">{{ $data->content->{$s[1]}->value ?? '' }}</div>
                    </div>
                    @if ($i < 7)
                        <div class="qp-line" id="ql{{ $i }}"></div>
                    @endif
                @endforeach
            </div>
        </div>

        <div class="quiz-body">

            {{-- ─── STEP 0: GENDER ─── --}}
            <div class="q-step active" id="q0">
                <div class="q-num">{{ $data->content->step0_num->value ?? '' }}</div>
                <div class="q-question">{{ $data->content->step0_question->value ?? '' }}</div>
                <div class="q-hint">{{ $data->content->step0_hint->value ?? '' }}</div>
                <div class="gender-grid">
                    <div class="gender-opt" onclick="qSelectGender(this,'female')"><span class="gender-opt-icon">♀</span>
                        <div class="gender-opt-name">{{ $data->content->step0_female->value ?? '' }}</div>
                    </div>
                    <div class="gender-opt" onclick="qSelectGender(this,'male')"><span class="gender-opt-icon">♂</span>
                        <div class="gender-opt-name">{{ $data->content->step0_male->value ?? '' }}</div>
                    </div>
                    <div class="gender-opt" onclick="qSelectGender(this,'nonbinary')"><span class="gender-opt-icon">⚧</span>
                        <div class="gender-opt-name">{{ $data->content->step0_nonbinary->value ?? '' }}</div>
                    </div>
                </div>
                <div class="q-nav">
                    <div></div><button class="btn-next-q" id="qn0"
                        onclick="qGo(1)">{{ $data->content->step0_next->value ?? '' }}</button>
                </div>
            </div>

            {{-- ─── STEP 1: PHOTO ─── --}}
            <div class="q-step" id="q1">
                <div class="q-num">{{ $data->content->step1_num->value ?? '' }}</div>
                <div class="q-question">{{ $data->content->step1_question->value ?? '' }}</div>
                <div class="q-hint">{{ $data->content->step1_hint->value ?? '' }}</div>
                <div class="photo-ai-note">
                    <span>🔒</span><span>{{ $data->content->step1_photo_ai_note->value ?? '' }}</span></div>
                <div class="photo-upload-area" id="photoUploadArea" onclick="triggerPhotoUpload()">
                    <span class="photo-upload-icon">📸</span>
                    <div class="photo-upload-title">{{ $data->content->step1_upload_title->value ?? '' }}</div>
                    <div class="photo-upload-sub">{{ $data->content->step1_upload_sub->value ?? '' }}</div>
                </div>
                <input type="file" id="photoFileInput" accept="image/*" style="display:none"
                    onchange="handlePhotoUpload(this)">
                <div class="q-nav">
                    <button class="btn-back-q" onclick="qGo(0)">{{ $data->content->step1_back->value ?? '' }}</button>
                    <button class="btn-next-q on" id="qn1"
                        onclick="qGo(2)">{{ $data->content->step1_next->value ?? '' }}</button>
                </div>
            </div>

            {{-- ─── STEP 2: SKIN ─── --}}
            <div class="q-step" id="q2">
                <div class="q-num">{{ $data->content->step2_num->value ?? '' }}</div>
                <div class="q-question">{{ $data->content->step2_question->value ?? '' }}</div>
                <div class="q-hint">{{ $data->content->step2_hint->value ?? '' }}</div>

                <div class="step-layout">
                    {{-- Preview --}}
                    <div class="step-preview">
                        <div class="preview-container" id="previewSkin">
                            <img class="preview-photo" id="previewImgSkin" style="display: none;">
                            <div class="preview-placeholder" id="previewPlaceholderSkin">
                                <span>📸</span> Your photo
                            </div>
                            <div class="preview-swatch" id="previewSwatchSkin" style="background: #E0D6C8;"></div>
                        </div>
                    </div>
                    {{-- Options --}}
                    <div class="step-options">
                        <div class="opt-grid">
                            <div class="opt" onclick="qSelect(this,'skin','fair')">
                                <div class="opt-circle" style="background:linear-gradient(135deg,#FDDBB4,#F5C89C);"></div>
                                <div class="opt-name">{{ $data->content->step2_fair->value ?? '' }}</div>
                                <div class="opt-sub">{{ $data->content->step2_fair_sub->value ?? '' }}</div>
                            </div>
                            <div class="opt" onclick="qSelect(this,'skin','light')">
                                <div class="opt-circle" style="background:linear-gradient(135deg,#F0C089,#D4956A);"></div>
                                <div class="opt-name">{{ $data->content->step2_light->value ?? '' }}</div>
                                <div class="opt-sub">{{ $data->content->step2_light_sub->value ?? '' }}</div>
                            </div>
                            <div class="opt" onclick="qSelect(this,'skin','medium')">
                                <div class="opt-circle" style="background:linear-gradient(135deg,#C68642,#A0522D);"></div>
                                <div class="opt-name">{{ $data->content->step2_medium->value ?? '' }}</div>
                                <div class="opt-sub">{{ $data->content->step2_medium_sub->value ?? '' }}</div>
                            </div>
                            <div class="opt" onclick="qSelect(this,'skin','tan')">
                                <div class="opt-circle" style="background:linear-gradient(135deg,#8D5524,#6B3A1F);"></div>
                                <div class="opt-name">{{ $data->content->step2_tan->value ?? '' }}</div>
                                <div class="opt-sub">{{ $data->content->step2_tan_sub->value ?? '' }}</div>
                            </div>
                            <div class="opt" onclick="qSelect(this,'skin','deep')">
                                <div class="opt-circle" style="background:linear-gradient(135deg,#4A2508,#2C1A08);"></div>
                                <div class="opt-name">{{ $data->content->step2_deep->value ?? '' }}</div>
                                <div class="opt-sub">{{ $data->content->step2_deep_sub->value ?? '' }}</div>
                            </div>
                            <div class="opt" id="skin_custom_opt">
                                <div class="opt-circle">
                                    <input type="color" id="skin_custom" value="#C4956A"
                                        onchange="qSelectCustom(this, 'skin')">
                                </div>
                                <div class="opt-name">{{ $data->content->step2_custom->value ?? '' }}</div>
                                <div class="opt-sub">{{ $data->content->step2_custom_sub->value ?? '' }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="q-nav">
                    <button class="btn-back-q" onclick="qGo(1)">{{ $data->content->step2_back->value ?? '' }}</button>
                    <button class="btn-next-q" id="qn2"
                        onclick="qGo(3)">{{ $data->content->step2_next->value ?? '' }}</button>
                </div>
            </div>

            {{-- ─── STEP 3: UNDERTONE ─── --}}
            <div class="q-step" id="q3">
                <div class="q-num">{{ $data->content->step3_num->value ?? '' }}</div>
                <div class="q-question">{{ $data->content->step3_question->value ?? '' }}</div>
                <div class="q-hint">{{ $data->content->step3_hint->value ?? '' }}</div>

                <div class="step-layout">
                    {{-- Preview --}}
                    <div class="step-preview">
                        <div class="preview-container" id="previewUndertone">
                            <img class="preview-photo" id="previewImgUndertone" style="display: none;">
                            <div class="preview-placeholder" id="previewPlaceholderUndertone">
                                <span>📸</span> Your photo
                            </div>
                            <div class="preview-swatch" id="previewSwatchUndertone" style="background: #E0D6C8;"></div>
                        </div>
                    </div>
                    {{-- Options --}}
                    <div class="step-options">
                        <div class="opt-grid">
                            <div class="opt" onclick="qSelect(this,'undertone','warm')">
                                <div class="opt-circle" style="background:linear-gradient(135deg,#FFD700,#FFA500);"></div>
                                <div class="opt-name">{{ $data->content->step3_warm->value ?? '' }}</div>
                                <div class="opt-sub">{{ $data->content->step3_warm_sub->value ?? '' }}</div>
                            </div>
                            <div class="opt" onclick="qSelect(this,'undertone','cool')">
                                <div class="opt-circle" style="background:linear-gradient(135deg,#B0C4DE,#6A5ACD);"></div>
                                <div class="opt-name">{{ $data->content->step3_cool->value ?? '' }}</div>
                                <div class="opt-sub">{{ $data->content->step3_cool_sub->value ?? '' }}</div>
                            </div>
                            <div class="opt" onclick="qSelect(this,'undertone','neutral')">
                                <div class="opt-circle" style="background:linear-gradient(135deg,#D2B48C,#BC9A6A);"></div>
                                <div class="opt-name">{{ $data->content->step3_neutral->value ?? '' }}</div>
                                <div class="opt-sub">{{ $data->content->step3_neutral_sub->value ?? '' }}</div>
                            </div>
                            <div class="opt" onclick="qSelect(this,'undertone','olive')">
                                <div class="opt-circle" style="background:linear-gradient(135deg,#8FBC8F,#6B8E23);"></div>
                                <div class="opt-name">{{ $data->content->step3_olive->value ?? '' }}</div>
                                <div class="opt-sub">{{ $data->content->step3_olive_sub->value ?? '' }}</div>
                            </div>
                            <div class="opt" id="undertone_custom_opt">
                                <div class="opt-circle">
                                    <input type="color" id="undertone_custom" value="#C4956A"
                                        onchange="qSelectCustom(this, 'undertone')">
                                </div>
                                <div class="opt-name">{{ $data->content->step3_custom->value ?? '' }}</div>
                                <div class="opt-sub">{{ $data->content->step3_custom_sub->value ?? '' }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="q-nav">
                    <button class="btn-back-q" onclick="qGo(2)">{{ $data->content->step3_back->value ?? '' }}</button>
                    <button class="btn-next-q" id="qn3"
                        onclick="qGo(4)">{{ $data->content->step3_next->value ?? '' }}</button>
                </div>
            </div>

            {{-- ─── STEP 4: EYES ─── --}}
            <div class="q-step" id="q4">
                <div class="q-num">{{ $data->content->step4_num->value ?? '' }}</div>
                <div class="q-question">{{ $data->content->step4_question->value ?? '' }}</div>
                <div class="q-hint">{{ $data->content->step4_hint->value ?? '' }}</div>

                <div class="step-layout">
                    {{-- Preview --}}
                    <div class="step-preview">
                        <div class="preview-container" id="previewEyes">
                            <img class="preview-photo" id="previewImgEyes" style="display: none;">
                            <div class="preview-placeholder" id="previewPlaceholderEyes">
                                <span>📸</span> Your photo
                            </div>
                            <div class="preview-swatch" id="previewSwatchEyes" style="background: #E0D6C8;"></div>
                        </div>
                    </div>
                    {{-- Options --}}
                    <div class="step-options">
                        <div class="opt-grid">
                            <div class="opt" onclick="qSelect(this,'eyes','blue')">
                                <div class="opt-circle"
                                    style="background:radial-gradient(circle,#6CA6CD,#4682B4,#1C3A6E);"></div>
                                <div class="opt-name">{{ $data->content->step4_blue->value ?? '' }}</div>
                            </div>
                            <div class="opt" onclick="qSelect(this,'eyes','green')">
                                <div class="opt-circle"
                                    style="background:radial-gradient(circle,#8FBC8F,#3D7A47,#1B4A24);"></div>
                                <div class="opt-name">{{ $data->content->step4_green->value ?? '' }}</div>
                            </div>
                            <div class="opt" onclick="qSelect(this,'eyes','hazel')">
                                <div class="opt-circle"
                                    style="background:radial-gradient(circle,#C8A96E,#8B6914,#4A3508);"></div>
                                <div class="opt-name">{{ $data->content->step4_hazel->value ?? '' }}</div>
                            </div>
                            <div class="opt" onclick="qSelect(this,'eyes','light-brown')">
                                <div class="opt-circle"
                                    style="background:radial-gradient(circle,#C8905A,#9B5A24,#5C2A0A);"></div>
                                <div class="opt-name">{{ $data->content->step4_light_brown->value ?? '' }}</div>
                            </div>
                            <div class="opt" onclick="qSelect(this,'eyes','dark-brown')">
                                <div class="opt-circle" style="background:radial-gradient(circle,#6B3A1F,#2C150A,#000);">
                                </div>
                                <div class="opt-name">{{ $data->content->step4_dark_brown->value ?? '' }}</div>
                            </div>
                            <div class="opt" onclick="qSelect(this,'eyes','grey')">
                                <div class="opt-circle"
                                    style="background:radial-gradient(circle,#B0B8C0,#7A8A94,#3A464E);"></div>
                                <div class="opt-name">{{ $data->content->step4_grey->value ?? '' }}</div>
                            </div>
                            <div class="opt" id="eyes_custom_opt">
                                <div class="opt-circle">
                                    <input type="color" id="eyes_custom" value="#C4956A"
                                        onchange="qSelectCustom(this, 'eyes')">
                                </div>
                                <div class="opt-name">{{ $data->content->step4_custom->value ?? '' }}</div>
                                <div class="opt-sub">{{ $data->content->step4_custom_sub->value ?? '' }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="q-nav">
                    <button class="btn-back-q" onclick="qGo(3)">{{ $data->content->step4_back->value ?? '' }}</button>
                    <button class="btn-next-q" id="qn4"
                        onclick="qGo(5)">{{ $data->content->step4_next->value ?? '' }}</button>
                </div>
            </div>

            {{-- ─── STEP 5: HAIR ─── --}}
            <div class="q-step" id="q5">
                <div class="q-num">{{ $data->content->step5_num->value ?? '' }}</div>
                <div class="q-question">{{ $data->content->step5_question->value ?? '' }}</div>
                <div class="q-hint">{{ $data->content->step5_hint->value ?? '' }}</div>

                <div class="step-layout">
                    {{-- Preview --}}
                    <div class="step-preview">
                        <div class="preview-container" id="previewHair">
                            <img class="preview-photo" id="previewImgHair" style="display: none;">
                            <div class="preview-placeholder" id="previewPlaceholderHair">
                                <span>📸</span> Your photo
                            </div>
                            <div class="preview-swatch" id="previewSwatchHair" style="background: #E0D6C8;"></div>
                        </div>
                    </div>
                    {{-- Options --}}
                    <div class="step-options">
                        <div class="opt-grid">
                            <div class="opt" onclick="qSelect(this,'hair','blonde')">
                                <div class="opt-circle" style="background:linear-gradient(135deg,#F5E0A0,#D4A843);"></div>
                                <div class="opt-name">{{ $data->content->step5_blonde->value ?? '' }}</div>
                                <div class="opt-sub">{{ $data->content->step5_blonde_sub->value ?? '' }}</div>
                            </div>
                            <div class="opt" onclick="qSelect(this,'hair','auburn')">
                                <div class="opt-circle" style="background:linear-gradient(135deg,#C67B4A,#8B3A1A);"></div>
                                <div class="opt-name">{{ $data->content->step5_auburn->value ?? '' }}</div>
                                <div class="opt-sub">{{ $data->content->step5_auburn_sub->value ?? '' }}</div>
                            </div>
                            <div class="opt" onclick="qSelect(this,'hair','light-brown')">
                                <div class="opt-circle" style="background:linear-gradient(135deg,#A0724E,#6B4226);"></div>
                                <div class="opt-name">{{ $data->content->step5_light_brown->value ?? '' }}</div>
                                <div class="opt-sub">{{ $data->content->step5_light_brown_sub->value ?? '' }}</div>
                            </div>
                            <div class="opt" onclick="qSelect(this,'hair','dark-brown')">
                                <div class="opt-circle" style="background:linear-gradient(135deg,#4A2C1A,#2C1810);"></div>
                                <div class="opt-name">{{ $data->content->step5_dark_brown->value ?? '' }}</div>
                                <div class="opt-sub">{{ $data->content->step5_dark_brown_sub->value ?? '' }}</div>
                            </div>
                            <div class="opt" onclick="qSelect(this,'hair','black')">
                                <div class="opt-circle" style="background:linear-gradient(135deg,#2A2A2A,#080808);"></div>
                                <div class="opt-name">{{ $data->content->step5_black->value ?? '' }}</div>
                                <div class="opt-sub">{{ $data->content->step5_black_sub->value ?? '' }}</div>
                            </div>
                            <div class="opt" onclick="qSelect(this,'hair','grey')">
                                <div class="opt-circle" style="background:linear-gradient(135deg,#C8C8C8,#888888);"></div>
                                <div class="opt-name">{{ $data->content->step5_grey->value ?? '' }}</div>
                                <div class="opt-sub">{{ $data->content->step5_grey_sub->value ?? '' }}</div>
                            </div>
                            <div class="opt" id="hair_custom_opt">
                                <div class="opt-circle">
                                    <input type="color" id="hair_custom" value="#C4956A"
                                        onchange="qSelectCustom(this, 'hair')">
                                </div>
                                <div class="opt-name">{{ $data->content->step5_custom->value ?? '' }}</div>
                                <div class="opt-sub">{{ $data->content->step5_custom_sub->value ?? '' }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="q-nav">
                    <button class="btn-back-q" onclick="qGo(4)">{{ $data->content->step5_back->value ?? '' }}</button>
                    <button class="btn-next-q" id="qn5"
                        onclick="qGo(6)">{{ $data->content->step5_next->value ?? '' }}</button>
                </div>
            </div>

            {{-- ─── STEP 6: BODY TYPE ─── --}}
            <div class="q-step" id="q6">
                <div class="q-num">{{ $data->content->step6_num->value ?? '' }}</div>
                <div class="q-question">{{ $data->content->step6_question->value ?? '' }}</div>
                <div class="q-hint">{{ $data->content->step6_hint->value ?? '' }}</div>
                <div class="body-opt-grid">
                    <div class="body-opt" onclick="qSelectBody(this,'hourglass')">
                        <div class="body-opt-icon">⧖</div>
                        <div class="body-opt-name">{{ $data->content->step6_hourglass->value ?? '' }}</div>
                        <div class="body-opt-desc">{{ $data->content->step6_hourglass_desc->value ?? '' }}</div>
                    </div>
                    <div class="body-opt" onclick="qSelectBody(this,'pear')">
                        <div class="body-opt-icon">🍐</div>
                        <div class="body-opt-name">{{ $data->content->step6_pear->value ?? '' }}</div>
                        <div class="body-opt-desc">{{ $data->content->step6_pear_desc->value ?? '' }}</div>
                    </div>
                    <div class="body-opt" onclick="qSelectBody(this,'apple')">
                        <div class="body-opt-icon">🍎</div>
                        <div class="body-opt-name">{{ $data->content->step6_apple->value ?? '' }}</div>
                        <div class="body-opt-desc">{{ $data->content->step6_apple_desc->value ?? '' }}</div>
                    </div>
                    <div class="body-opt" onclick="qSelectBody(this,'rectangle')">
                        <div class="body-opt-icon">▭</div>
                        <div class="body-opt-name">{{ $data->content->step6_rectangle->value ?? '' }}</div>
                        <div class="body-opt-desc">{{ $data->content->step6_rectangle_desc->value ?? '' }}</div>
                    </div>
                    <div class="body-opt" onclick="qSelectBody(this,'inverted')">
                        <div class="body-opt-icon">▽</div>
                        <div class="body-opt-name">{{ $data->content->step6_inverted->value ?? '' }}</div>
                        <div class="body-opt-desc">{{ $data->content->step6_inverted_desc->value ?? '' }}</div>
                    </div>
                </div>
                <input type="file" id="bodyPhotoInput" accept="image/*" style="display:none"
                    onchange="handleBodyPhotoUpload(this)">
                <div class="q-nav">
                    <button class="btn-back-q" onclick="qGo(5)">{{ $data->content->step6_back->value ?? '' }}</button>
                    <button class="btn-next-q" id="qn6"
                        onclick="qGo(7)">{{ $data->content->step6_next->value ?? '' }}</button>
                </div>
            </div>

            {{-- ─── STEP 7: CONTACT ─── --}}
            <div class="q-step" id="q7">
                <div class="q-num">{{ $data->content->step7_num->value ?? '' }}</div>
                <div class="q-question">{{ $data->content->step7_question->value ?? '' }}</div>
                <div class="q-hint">{{ $data->content->step7_hint->value ?? '' }}</div>
                <div class="contact-form-wrap">
                    <div class="form-row">
                        <label for="user_name">{{ $data->content->step7_name_label->value ?? '' }}</label>
                        <input type="text" id="user_name"
                            placeholder="{{ $data->content->step7_name_placeholder->value ?? '' }}"
                            oninput="checkContactForm()">
                    </div>
                    <div class="form-row">
                        <label for="user_email">{{ $data->content->step7_email_label->value ?? '' }}</label>
                        <input type="email" id="user_email"
                            placeholder="{{ $data->content->step7_email_placeholder->value ?? '' }}"
                            oninput="checkContactForm()">
                    </div>
                    <p class="privacy-note">{{ $data->content->step7_privacy->value ?? '' }}</p>
                </div>
                <div class="q-nav">
                    <button class="btn-back-q" onclick="qGo(6)">{{ $data->content->step7_back->value ?? '' }}</button>
                    <button class="btn-next-q" id="qn7"
                        onclick="showQuizResults()">{{ $data->content->step7_submit->value ?? '' }}</button>
                </div>
            </div>

            {{-- ─── LOADING ─── --}}
            <div class="q-step" id="qLoading">
                <div class="loading-spinner"></div>
                <div class="q-question" style="text-align:center;">{{ $data->content->loading_title->value ?? '' }}
                </div>
                <p style="text-align:center;color:var(--quiz-muted);font-size:14px;">
                    {{ $data->content->loading_sub->value ?? '' }}</p>
                <ul class="loading-steps">
                    <li id="ls1">{{ $data->content->loading_step1->value ?? '' }}</li>
                    <li id="ls2">{{ $data->content->loading_step2->value ?? '' }}</li>
                    <li id="ls3">{{ $data->content->loading_step3->value ?? '' }}</li>
                    <li id="ls4">{{ $data->content->loading_step4->value ?? '' }}</li>
                    <li id="ls5">{{ $data->content->loading_step5->value ?? '' }}</li>
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
                            <div class="r-card-label">{{ $data->content->result_best_label->value ?? '' }}</div>
                            <div class="r-palette-row" id="r-best"></div>
                            <div class="r-note" id="r-best-note"></div>
                        </div>
                        <div class="r-card">
                            <div class="r-card-label">{{ $data->content->result_avoid_label->value ?? '' }}</div>
                            <div class="r-avoid-row" id="r-avoid"></div>
                            <div class="r-note" id="r-avoid-note"></div>
                        </div>
                        <div class="r-card r-full" id="r-makeup-card">
                            <div class="r-card-label">{{ $data->content->result_makeup_label->value ?? '' }}</div>
                            <div class="r-makeup" id="r-makeup"></div>
                        </div>
                        <div class="r-card r-full">
                            <div class="r-card-label">{{ $data->content->result_body_label->value ?? '' }}</div>
                            <ul class="r-cloth-list" id="r-cloth"></ul>
                        </div>
                        <div class="r-card r-full">
                            <div class="r-card-label">{{ $data->content->result_archetype_label->value ?? '' }}</div>
                            <div class="r-insight" id="r-insight"></div>
                        </div>
                    </div>

                    {{-- ════════════════════════════════════════════
                     COLOUR TRY-ON PANEL
                ════════════════════════════════════════════ --}}
                    <div class="tryon-section">
                        <div class="tryon-title">{{ $data->content->tryon_title->value ?? '' }}</div>
                        <div class="tryon-sub">{{ $data->content->tryon_sub->value ?? '' }}</div>

                        <div class="tryon-layout">
                            {{-- Left: Photo with draggable zones --}}
                            <div>
                                <div class="tryon-photo-wrap" id="tryonPhotoWrap">
                                    <div class="tryon-placeholder" id="tryonPlaceholder">
                                        <span class="ph-icon">🖼️</span>
                                        <p>Upload a photo in Step 2 to try colours on yourself. The panel still
                                            works for checking colours against your season.</p>
                                    </div>
                                    <div class="colour-zones" id="colourZones"></div>
                                </div>
                                <p style="font-size:11px;color:var(--quiz-muted);margin-top:8px;text-align:center;">
                                    {{ $data->content->tryon_drag_hint->value ?? '' }}
                                </p>
                            </div>

                            {{-- Right: Controls --}}
                            <div class="tryon-controls">
                                {{-- Zone tabs --}}
                                <div>
                                    <div
                                        style="font-size:10px;font-weight:600;letter-spacing:2px;text-transform:uppercase;color:var(--quiz-accent);margin-bottom:8px;">
                                        {{ $data->content->tryon_zone_label->value ?? '' }}
                                    </div>
                                    <div class="zone-tabs" id="zoneTabs">
                                        <button class="zone-tab active" data-zone="top" onclick="selectZone('top')">👕
                                            {{ $data->content->tryon_zone_top->value ?? '' }}</button>
                                        <button class="zone-tab" data-zone="bottom" onclick="selectZone('bottom')">👖
                                            {{ $data->content->tryon_zone_bottom->value ?? '' }}</button>
                                        <button class="zone-tab" data-zone="hair" onclick="selectZone('hair')">💇
                                            {{ $data->content->tryon_zone_hair->value ?? '' }}</button>
                                        <button class="zone-tab" data-zone="accent" onclick="selectZone('accent')">✨
                                            {{ $data->content->tryon_zone_accent->value ?? '' }}</button>
                                    </div>
                                </div>

                                {{-- Season palette quick-pick --}}
                                <div class="tryon-palette-strip">
                                    <div class="palette-row-label">{{ $data->content->tryon_palette_best->value ?? '' }}
                                    </div>
                                    <div class="palette-swatches" id="tryonBestSwatches"></div>
                                    <div class="palette-row-label" style="margin-top:8px;">
                                        {{ $data->content->tryon_palette_avoid->value ?? '' }}</div>
                                    <div class="palette-swatches" id="tryonAvoidSwatches"></div>
                                </div>

                                {{-- Custom colour picker --}}
                                <div class="custom-colour-row">
                                    <label>{{ $data->content->tryon_custom_label->value ?? '' }}</label>
                                    <div class="colour-input-wrap">
                                        <input type="color" id="customColourPicker" value="#C4956A"
                                            onchange="syncHexFromPicker()">
                                        <input type="text" class="colour-hex-input" id="customHexInput"
                                            value="#C4956A" maxlength="7" placeholder="#RRGGBB"
                                            oninput="syncPickerFromHex()">
                                        <button class="btn-apply-colour"
                                            onclick="applyCustomColour()">{{ $data->content->tryon_apply_btn->value ?? '' }}</button>
                                    </div>
                                </div>

                                {{-- AI Rating --}}
                                <div class="colour-rating empty" id="colourRating">
                                    <div class="rating-score" id="ratingScore">—</div>
                                    <div>
                                        <div id="ratingLabel" style="font-weight:600;margin-bottom:3px;">
                                            {{ $data->content->tryon_rating_placeholder->value ?? '' }}
                                        </div>
                                        <div id="ratingReason" style="font-size:12px;"></div>
                                    </div>
                                </div>

                                {{-- Colour history --}}
                                <div>
                                    <div
                                        style="font-size:10px;font-weight:600;letter-spacing:1.5px;text-transform:uppercase;color:var(--quiz-muted);margin-bottom:8px;">
                                        {{ $data->content->tryon_history_label->value ?? '' }}
                                        <button class="history-clear" onclick="clearHistory()"
                                            style="margin-left:8px;">{{ $data->content->tryon_clear_btn->value ?? '' }}</button>
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
                            <div class="r-card-label" style="margin-bottom:0;">
                                {{ $data->content->pinterest_title->value ?? '' }}</div>
                            <div class="pinterest-badge">{{ $data->content->pinterest_badge->value ?? '' }}</div>
                        </div>
                        <p style="font-size:13px;color:var(--quiz-muted);margin:0 0 18px;">
                            {{ $data->content->pinterest_sub->value ?? '' }}</p>
                        <div class="pinterest-grid" id="pinterestGrid">
                            <div class="pin-loading">{{ $data->content->pinterest_loading->value ?? '' }}</div>
                        </div>
                    </div>

                    <div class="results-actions">
                        <button class="btn-primary"
                            onclick="restartQ()">{{ $data->content->action_retake->value ?? '' }}</button>
                        <a class="btn-outline"
                            href="{{ route('show.blog_page') }}">{{ $data->content->action_blog->value ?? '' }}</a>
                        <a class="btn-outline"
                            href="{{ route('show.seasons_page') }}">{{ $data->content->action_seasons->value ?? '' }}</a>
                    </div>
                </div>
            </div>

        </div>{{-- /.quiz-body --}}
    </div>{{-- /#page-quiz --}}
@endsection

@section('page_script')
    <script>
        /* ════════════════════════════════════════════════════════════
                                   QUIZ STATE
                ════════════════════════════════════════════════════════════ */
        const qa = {
            gender: null,
            photo: null,
            skin: null,
            undertone: null,
            eyes: null,
            hair: null,
            body: null,
            name: '',
            email: ''
        };

        const CSRF = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';

        const ROUTES = {
            computeSeason: '{{ route('quiz.compute_season') }}',
            evaluateColour: '{{ route('quiz.evaluate_colour') }}',
            saveLead: '{{ route('quiz.save_lead') }}',
        };

        let currentSeason = null;
        let currentData = null;

        const colourMap = {
            skin: {
                fair: '#FDDBB4',
                light: '#F0C089',
                medium: '#C68642',
                tan: '#8D5524',
                deep: '#4A2508'
            },
            undertone: {
                warm: '#FFA500',
                cool: '#6A5ACD',
                neutral: '#BC9A6A',
                olive: '#8FBC8F'
            },
            eyes: {
                blue: '#4682B4',
                green: '#3D7A47',
                hazel: '#8B6914',
                'light-brown': '#9B5A24',
                'dark-brown': '#2C150A',
                grey: '#7A8A94'
            },
            hair: {
                blonde: '#D4A843',
                auburn: '#8B3A1A',
                'light-brown': '#6B4226',
                'dark-brown': '#2C1810',
                black: '#080808',
                grey: '#888888'
            }
        };

        function hexToRgb(hex) {
            const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
            return result ? {
                r: parseInt(result[1], 16),
                g: parseInt(result[2], 16),
                b: parseInt(result[3], 16)
            } : null;
        }

        function getClosestKey(key, hex) {
            const map = colourMap[key];
            if (!map) return null;
            const target = hexToRgb(hex);
            if (!target) return null;
            let closestKey = null;
            let closestDist = Infinity;
            for (const [k, colHex] of Object.entries(map)) {
                const rgb = hexToRgb(colHex);
                if (!rgb) continue;
                const dist = Math.sqrt(
                    Math.pow(target.r - rgb.r, 2) +
                    Math.pow(target.g - rgb.g, 2) +
                    Math.pow(target.b - rgb.b, 2)
                );
                if (dist < closestDist) {
                    closestDist = dist;
                    closestKey = k;
                }
            }
            return closestKey || Object.keys(map)[0];
        }

        /* ─── NAVIGATION ─── */
        function qGo(step) {
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

        function updateProgress(s) {
            const circles = ['qc0', 'qc1', 'qc2', 'qc3', 'qc4', 'qc5', 'qc6', 'qc7'];
            const lines = ['ql0', 'ql1', 'ql2', 'ql3', 'ql4', 'ql5', 'ql6'];
            circles.forEach((id, i) => {
                const el = document.getElementById(id);
                if (!el) return;
                el.classList.remove('active', 'done');
                if (i < s) el.classList.add('done');
                else if (i === s) el.classList.add('active');
            });
            lines.forEach((id, i) => {
                const el = document.getElementById(id);
                if (!el) return;
                el.classList.toggle('done', i < s);
            });
        }

        /* ─── SELECTORS ─── */
        function qSelect(el, key, value) {
            const parentGrid = el.closest('.opt-grid');
            if (parentGrid) {
                parentGrid.querySelectorAll('.opt').forEach(o => o.classList.remove('sel'));
            } else {
                document.querySelectorAll('.opt').forEach(o => o.classList.remove('sel'));
            }
            el.classList.add('sel');
            qa[key] = value;
            updatePreviewSwatch(key, value);
            enableNextButton(key);
        }

        function qSelectCustom(inputEl, key) {
            const hex = inputEl.value;
            const opt = inputEl.closest('.opt');
            if (!opt) return;
            const parentGrid = opt.closest('.opt-grid');
            if (parentGrid) {
                parentGrid.querySelectorAll('.opt').forEach(o => o.classList.remove('sel'));
            }
            opt.classList.add('sel');
            qa[key] = hex;
            updatePreviewSwatch(key, hex);
            enableNextButton(key);
        }

        function updatePreviewSwatch(key, value) {
            const swatchId = `previewSwatch${key.charAt(0).toUpperCase() + key.slice(1)}`;
            const swatchEl = document.getElementById(swatchId);
            if (swatchEl) {
                if (typeof value === 'string' && value.startsWith('#')) {
                    swatchEl.style.backgroundColor = value;
                } else if (colourMap[key] && colourMap[key][value]) {
                    swatchEl.style.backgroundColor = colourMap[key][value];
                } else {
                    swatchEl.style.backgroundColor = '#E0D6C8';
                }
            }
        }

        function enableNextButton(key) {
            const stepMap = {
                skin: 2,
                undertone: 3,
                eyes: 4,
                hair: 5
            };
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

        /* ─── PHOTO UPLOAD ─── */
        function triggerPhotoUpload() {
            document.getElementById('photoFileInput').click();
        }

        function updateAllPhotoPreviews(photoDataUrl) {
            const wrap = document.getElementById('tryonPhotoWrap');
            const placeholder = document.getElementById('tryonPlaceholder');
            if (placeholder) placeholder.style.display = 'none';

            let mainImg = document.getElementById('tryonPhotoMain');
            if (!mainImg) {
                mainImg = document.createElement('img');
                mainImg.id = 'tryonPhotoMain';
                mainImg.className = 'tryon-photo-img';
                mainImg.style.cssText = 'width:100%;height:100%;object-fit:cover;display:block;border-radius:16px;';
                wrap.insertBefore(mainImg, wrap.querySelector('.colour-zones'));
            }
            mainImg.src = photoDataUrl;
            mainImg.style.display = 'block';

            const stepIds = ['Skin', 'Undertone', 'Eyes', 'Hair'];
            stepIds.forEach(step => {
                const img = document.getElementById(`previewImg${step}`);
                if (img) {
                    img.src = photoDataUrl;
                    img.style.display = 'block';
                    const placeholderDiv = document.getElementById(`previewPlaceholder${step}`);
                    if (placeholderDiv) placeholderDiv.style.display = 'none';
                }
            });
        }

        function handlePhotoUpload(input) {
            const file = input.files[0];
            if (!file) return;
            const reader = new FileReader();
            reader.onload = e => {
                qa.photo = e.target.result;
                const area = document.getElementById('photoUploadArea');
                area.classList.add('has-photo');
                area.innerHTML =
                    `<img src="${e.target.result}" alt="Your photo" style="width:100%;max-height:300px;object-fit:cover;display:block;border-radius:16px;"><button class="photo-change-btn" onclick="event.stopPropagation();triggerPhotoUpload()">Change Photo</button>`;
                updateAllPhotoPreviews(e.target.result);
            };
            reader.readAsDataURL(file);
        }

        function triggerBodyPhotoUpload() {
            document.getElementById('bodyPhotoInput').click();
        }

        async function handleBodyPhotoUpload(input) {
            const file = input.files[0];
            if (!file) return;
            document.querySelectorAll('.body-opt').forEach(o => o.classList.remove('sel'));
            const detectOpt = document.querySelector('.body-opt:last-child');
            if (detectOpt) {
                detectOpt.classList.add('sel');
                detectOpt.querySelector('.body-opt-desc').textContent = 'Analysing…';
            }
            const base64 = await new Promise(resolve => {
                const r = new FileReader();
                r.onload = e => resolve(e.target.result.split(',')[1]);
                r.readAsDataURL(file);
            });
            try {
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
                            }, {
                                type: 'text',
                                text: 'Analyse this full body photo and detect the person\'s body shape. Reply with ONLY a single JSON object like: {"bodyType":"hourglass"} where bodyType is one of: hourglass, pear, apple, rectangle, inverted. No explanation.'
                            }]
                        }]
                    })
                });
                const data = await response.json();
                const text = data.content?.[0]?.text || '{}';
                const result = JSON.parse(text.replace(/```json|```/g, '').trim());
                if (result.bodyType) {
                    qa.body = result.bodyType;
                    if (detectOpt) detectOpt.querySelector('.body-opt-desc').textContent =
                        `Detected: ${result.bodyType}`;
                    document.getElementById('qn6').classList.add('on');
                }
            } catch (err) {
                console.error('Body detection failed:', err);
                if (detectOpt) {
                    detectOpt.querySelector('.body-opt-desc').textContent = 'Detection failed — select manually';
                    detectOpt.classList.remove('sel');
                }
            }
        }

        /* ─── CONTACT ─── */
        function checkContactForm() {
            const name = document.getElementById('user_name').value.trim();
            const email = document.getElementById('user_email').value.trim();
            const valid = name.length > 0 && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
            const btn = document.getElementById('qn7');
            if (valid) {
                btn.classList.add('on');
                qa.name = name;
                qa.email = email;
            } else btn.classList.remove('on');
        }

        /* ─── SHOW RESULTS ─── */
        async function showQuizResults() {
            if (!document.getElementById('qn7').classList.contains('on')) return;

            qa.name = document.getElementById('user_name').value.trim();
            qa.email = document.getElementById('user_email').value.trim();

            const mapCustom = (key) => {
                const val = qa[key];
                if (typeof val === 'string' && val.startsWith('#')) {
                    return getClosestKey(key, val);
                }
                return val;
            };

            const payload = {
                skin: mapCustom('skin'),
                undertone: mapCustom('undertone'),
                eyes: mapCustom('eyes'),
                hair: mapCustom('hair'),
                gender: qa.gender,
                body: qa.body
            };

            if (!payload.skin || !payload.undertone || !payload.eyes || !payload.hair || !payload.gender || !payload
                .body) {
                alert('Please complete all steps before submitting.');
                document.getElementById('qLoading').classList.remove('active');
                qGo(0);
                return;
            }

            saveLead(qa.name, qa.email, qa);

            document.querySelectorAll('.q-step').forEach(el => el.classList.remove('active'));
            document.getElementById('qLoading').classList.add('active');
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });

            const steps = ['ls1', 'ls2', 'ls3', 'ls4', 'ls5'];
            const animPromise = (async () => {
                for (let i = 0; i < steps.length; i++) {
                    await delay(600);
                    if (i > 0) document.getElementById(steps[i - 1]).classList.replace('active', 'done');
                    document.getElementById(steps[i]).classList.add('active');
                }
                await delay(500);
                document.getElementById(steps[steps.length - 1]).classList.replace('active', 'done');
            })();

            let result;
            try {
                const res = await fetch(ROUTES.computeSeason, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': CSRF
                    },
                    body: JSON.stringify(payload)
                });
                if (!res.ok) {
                    const text = await res.text();
                    throw new Error(`Server returned ${res.status}: ${text.substring(0, 100)}`);
                }
                const contentType = res.headers.get('content-type');
                if (!contentType || !contentType.includes('application/json')) {
                    const text = await res.text();
                    throw new Error('Server returned non-JSON response: ' + text.substring(0, 100));
                }
                result = await res.json();
            } catch (e) {
                console.error('Season compute failed:', e);
                alert('Error computing your season: ' + e.message + '. Please try again or contact support.');
                document.getElementById('qLoading').classList.remove('active');
                qGo(6);
                return;
            }

            await animPromise;
            await delay(300);

            currentSeason = result.season;
            currentData = result.data;
            populateResults(result);

            document.getElementById('qLoading').classList.remove('active');
            document.getElementById('qResults').classList.add('active');
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });

            initTryonPanel(result);
            setTimeout(() => renderPinterest(result.pinterest), 400);
        }

        function populateResults(result) {
            const data = result.data;
            document.getElementById('r-badge').textContent = data.label;
            document.getElementById('r-title').textContent =
                `${qa.name ? qa.name + ', you\'re a ' : 'You are a '}${data.title}`;
            document.getElementById('r-desc').textContent = data.desc;

            document.getElementById('r-best').innerHTML = data.best.map(c =>
                `<div class="r-swatch"><div class="r-swatch-dot" style="background:${c.hex};"></div><div class="r-swatch-name">${c.name}</div></div>`
            ).join('');
            document.getElementById('r-best-note').textContent = data.bestNote;

            document.getElementById('r-avoid').innerHTML = data.avoid.map(c =>
                `<div class="r-swatch"><div class="r-swatch-dot" style="background:${c.hex};"></div><div class="r-swatch-name">${c.name}</div></div>`
            ).join('');
            document.getElementById('r-avoid-note').textContent = data.avoidNote;

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

        /* ─── COLOUR TRY-ON ─── */
        let activeZone = 'top';
        let colourHistory = [];
        let zoneColours = {
            top: '#C4956A',
            bottom: '#5C4A3A',
            hair: '#6B3A2A',
            accent: '#F4C542'
        };

        const zoneConfig = {
            top: {
                emoji: '👕',
                label: 'TOP',
                default: {
                    x: 45,
                    y: 35
                }
            },
            bottom: {
                emoji: '👖',
                label: 'BOTTOM',
                default: {
                    x: 45,
                    y: 62
                }
            },
            hair: {
                emoji: '💇',
                label: 'HAIR',
                default: {
                    x: 45,
                    y: 10
                }
            },
            accent: {
                emoji: '✨',
                label: 'ACCENT',
                default: {
                    x: 75,
                    y: 45
                }
            },
        };

        function initTryonPanel(result) {
            if (qa.photo) {
                const wrap = document.getElementById('tryonPhotoWrap');
                const placeholder = document.getElementById('tryonPlaceholder');
                if (placeholder) placeholder.style.display = 'none';
                let mainImg = document.getElementById('tryonPhotoMain');
                if (!mainImg) {
                    mainImg = document.createElement('img');
                    mainImg.id = 'tryonPhotoMain';
                    mainImg.className = 'tryon-photo-img';
                    mainImg.style.cssText = 'width:100%;height:100%;object-fit:cover;display:block;border-radius:16px;';
                    wrap.insertBefore(mainImg, wrap.querySelector('.colour-zones'));
                }
                mainImg.src = qa.photo;
                mainImg.style.display = 'block';
            }
            renderZoneCircles();

            const bestEl = document.getElementById('tryonBestSwatches');
            const avoidEl = document.getElementById('tryonAvoidSwatches');
            bestEl.innerHTML = result.data.best.map(c =>
                `<div class="pswatch" style="background:${c.hex};" title="${c.name}" onclick="applySeasonColour('${c.hex}','${c.name}')" data-hex="${c.hex}"><div class="pswatch-tip">${c.name}</div></div>`
            ).join('');
            avoidEl.innerHTML = result.data.avoid.map(c =>
                `<div class="pswatch" style="background:${c.hex};filter:grayscale(30%);opacity:.7;" title="${c.name}" onclick="applySeasonColour('${c.hex}','${c.name}')" data-hex="${c.hex}"><div class="pswatch-tip">${c.name}</div></div>`
            ).join('');
        }

        function renderZoneCircles() {
            const zonesEl = document.getElementById('colourZones');
            zonesEl.innerHTML = '';
            Object.entries(zoneConfig).forEach(([key, cfg]) => {
                const circle = document.createElement('div');
                circle.className = 'czone';
                circle.id = 'czone_' + key;
                circle.innerHTML = `${cfg.emoji}<div class="czone-label">${cfg.label}</div>`;
                circle.style.cssText =
                    `background: ${zoneColours[key]}; left: ${cfg.default.x}%; top: ${cfg.default.y}%; transform: translate(-50%,-50%);`;
                circle.style.outline = (key === activeZone) ? '3px solid var(--quiz-accent)' : 'none';
                makeDraggable(circle, key);
                circle.addEventListener('click', () => selectZone(key));
                zonesEl.appendChild(circle);
            });
        }

        function makeDraggable(el, zoneKey) {
            let isDragging = false,
                startX, startY, startLeft, startTop;
            const getWrapRect = () => document.getElementById('tryonPhotoWrap').getBoundingClientRect();

            function onStart(cx, cy) {
                isDragging = true;
                startX = cx;
                startY = cy;
                startLeft = parseFloat(el.style.left);
                startTop = parseFloat(el.style.top);
                el.style.transition = 'none';
                selectZone(zoneKey);
            }

            function onMove(cx, cy) {
                if (!isDragging) return;
                const wrap = getWrapRect();
                const dx = ((cx - startX) / wrap.width) * 100;
                const dy = ((cy - startY) / wrap.height) * 100;
                const newL = Math.max(5, Math.min(95, startLeft + dx));
                const newT = Math.max(5, Math.min(95, startTop + dy));
                el.style.left = newL + '%';
                el.style.top = newT + '%';
            }

            function onEnd() {
                isDragging = false;
                el.style.transition = '';
            }
            el.addEventListener('mousedown', e => {
                e.preventDefault();
                onStart(e.clientX, e.clientY);
            });
            window.addEventListener('mousemove', e => onMove(e.clientX, e.clientY));
            window.addEventListener('mouseup', onEnd);
            el.addEventListener('touchstart', e => {
                e.preventDefault();
                onStart(e.touches[0].clientX, e.touches[0].clientY);
            }, {
                passive: false
            });
            window.addEventListener('touchmove', e => {
                if (isDragging) {
                    e.preventDefault();
                    onMove(e.touches[0].clientX, e.touches[0].clientY);
                }
            }, {
                passive: false
            });
            window.addEventListener('touchend', onEnd);
        }

        function selectZone(key) {
            activeZone = key;
            document.querySelectorAll('.zone-tab').forEach(t => t.classList.toggle('active', t.dataset.zone === key));
            Object.keys(zoneConfig).forEach(k => {
                const el = document.getElementById('czone_' + k);
                if (el) el.style.outline = (k === key) ? '3px solid var(--quiz-accent)' : 'none';
            });
            const hex = zoneColours[key];
            document.getElementById('customColourPicker').value = hex;
            document.getElementById('customHexInput').value = hex;
        }

        async function applySeasonColour(hex, name) {
            setZoneColour(activeZone, hex);
            document.getElementById('customColourPicker').value = hex;
            document.getElementById('customHexInput').value = hex;
            document.querySelectorAll('.pswatch').forEach(el => el.classList.toggle('selected', el.dataset.hex ===
            hex));
            await evaluateAndDisplay(hex);
        }

        async function applyCustomColour() {
            const hex = normaliseHex(document.getElementById('customHexInput').value);
            if (!hex) return;
            document.getElementById('customColourPicker').value = hex;
            document.getElementById('customHexInput').value = hex;
            setZoneColour(activeZone, hex);
            await evaluateAndDisplay(hex);
        }

        function syncHexFromPicker() {
            const hex = document.getElementById('customColourPicker').value;
            document.getElementById('customHexInput').value = hex;
        }

        function syncPickerFromHex() {
            const hex = normaliseHex(document.getElementById('customHexInput').value);
            if (hex) document.getElementById('customColourPicker').value = hex;
        }

        function setZoneColour(key, hex) {
            zoneColours[key] = hex;
            const el = document.getElementById('czone_' + key);
            if (el) el.style.background = hex;
        }

        async function evaluateAndDisplay(hex) {
            if (!currentSeason) return;
            const ratingEl = document.getElementById('colourRating');
            const scoreEl = document.getElementById('ratingScore');
            const labelEl = document.getElementById('ratingLabel');
            const reasonEl = document.getElementById('ratingReason');
            ratingEl.className = 'colour-rating empty';
            scoreEl.textContent = '…';
            labelEl.textContent = 'Analysing…';
            reasonEl.textContent = '';
            try {
                const res = await fetch(ROUTES.evaluateColour, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': CSRF
                    },
                    body: JSON.stringify({
                        hex,
                        season: currentSeason
                    })
                });
                const data = await res.json();
                ratingEl.className = `colour-rating ${data.rating}`;
                scoreEl.textContent = data.score + '/100';
                labelEl.textContent = data.label;
                reasonEl.textContent = data.reason;
                addToHistory(hex, data.rating, data.score);
            } catch (e) {
                labelEl.textContent = 'Evaluation failed. Try again.';
            }
        }

        function addToHistory(hex, rating, score) {
            colourHistory = colourHistory.filter(h => h.hex !== hex);
            colourHistory.unshift({
                hex,
                rating,
                score
            });
            if (colourHistory.length > 12) colourHistory.pop();
            renderHistory();
        }

        function renderHistory() {
            const el = document.getElementById('colourHistory');
            if (!colourHistory.length) {
                el.innerHTML = '<span style="font-size:12px;color:var(--quiz-muted);">None yet</span>';
                return;
            }
            el.innerHTML = colourHistory.map(h =>
                `<div class="history-dot" style="background:${h.hex};" onclick="recallHistory('${h.hex}')" title="${h.hex} — ${h.score}/100"><div class="hd-tip">${h.hex} · ${h.score}/100</div></div>`
            ).join('');
        }

        async function recallHistory(hex) {
            setZoneColour(activeZone, hex);
            document.getElementById('customColourPicker').value = hex;
            document.getElementById('customHexInput').value = hex;
            await evaluateAndDisplay(hex);
        }

        function clearHistory() {
            colourHistory = [];
            renderHistory();
        }

        function normaliseHex(raw) {
            const s = raw.trim().replace(/^#*/, '');
            if (/^[0-9A-Fa-f]{6}$/.test(s)) return '#' + s.toUpperCase();
            if (/^[0-9A-Fa-f]{3}$/.test(s)) return '#' + s.split('').map(c => c + c).join('').toUpperCase();
            return null;
        }

        /* ─── PINTEREST ─── */
        const seasonColours = {
            spring: ['#F4C542', '#E8865A', '#7BC67E', '#F5A623', '#D4A5A5'],
            summer: ['#B0C4DE', '#C8A2C8', '#8FAF8F', '#D4B5B5', '#A8BAC4'],
            autumn: ['#B85C30', '#8B6914', '#6B3A2A', '#C8A05A', '#3D5A3E'],
            winter: ['#1C1C3A', '#8B0000', '#FFFFFF', '#4B0082', '#006B6B'],
        };

        function renderPinterest(links) {
            const grid = document.getElementById('pinterestGrid');
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

        /* ─── LEAD SAVE ─── */
        async function saveLead(name, email, answers) {
            try {
                await fetch(ROUTES.saveLead, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': CSRF
                    },
                    body: JSON.stringify({
                        name,
                        email,
                        answers: {
                            gender: qa.gender,
                            skin: qa.skin,
                            undertone: qa.undertone,
                            eyes: qa.eyes,
                            hair: qa.hair,
                            body: qa.body
                        }
                    })
                });
            } catch (e) {
                console.warn('Lead save failed:', e);
            }
        }

        /* ─── RESTART ─── */
        function restartQ() {
            Object.keys(qa).forEach(k => qa[k] = null);
            currentSeason = null;
            currentData = null;
            colourHistory = [];
            zoneColours = {
                top: '#C4956A',
                bottom: '#5C4A3A',
                hair: '#6B3A2A',
                accent: '#F4C542'
            };
            document.querySelectorAll('.opt,.gender-opt,.body-opt').forEach(el => el.classList.remove('sel'));
            document.querySelectorAll('.btn-next-q').forEach(btn => btn.classList.remove('on'));

            const area = document.getElementById('photoUploadArea');
            area.classList.remove('has-photo');
            area.innerHTML =
                `<span class="photo-upload-icon">📸</span><div class="photo-upload-title">Tap to upload your photo</div><div class="photo-upload-sub">JPG, PNG or WEBP · Max 10MB</div>`;

            const wrap = document.getElementById('tryonPhotoWrap');
            const mainImg = document.getElementById('tryonPhotoMain');
            if (mainImg) mainImg.remove();
            const placeholder = document.getElementById('tryonPlaceholder');
            if (placeholder) placeholder.style.display = 'flex';

            const stepIds = ['Skin', 'Undertone', 'Eyes', 'Hair'];
            stepIds.forEach(step => {
                const img = document.getElementById(`previewImg${step}`);
                if (img) {
                    img.src = '';
                    img.style.display = 'none';
                }
                const placeholderDiv = document.getElementById(`previewPlaceholder${step}`);
                if (placeholderDiv) placeholderDiv.style.display = 'flex';
                const swatch = document.getElementById(`previewSwatch${step}`);
                if (swatch) swatch.style.backgroundColor = '#E0D6C8';
            });

            document.getElementById('colourZones').innerHTML = '';
            document.getElementById('tryonBestSwatches').innerHTML = '';
            document.getElementById('tryonAvoidSwatches').innerHTML = '';
            document.getElementById('colourRating').className = 'colour-rating empty';
            document.getElementById('ratingScore').textContent = '—';
            document.getElementById('ratingLabel').textContent = 'Select or pick a colour to get your match score';
            document.getElementById('ratingReason').textContent = '';
            renderHistory();

            document.getElementById('qn1').classList.add('on');
            document.getElementById('user_name').value = '';
            document.getElementById('user_email').value = '';
            qGo(0);
        }

        function delay(ms) {
            return new Promise(r => setTimeout(r, ms));
        }

        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('qn1')?.classList.add('on');
        });
    </script>
@endsection
