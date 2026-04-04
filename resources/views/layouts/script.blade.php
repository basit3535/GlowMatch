 <script>
            // Navigation
            function showPage(name) {
                document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
                document.querySelectorAll('.nav-links a').forEach(a => a.classList.remove('active'));
                document.getElementById('page-' + name).classList.add('active');
                document.getElementById('nav-' + name).classList.add('active');
                window.scrollTo(0, 0);
            }

            // Quiz logic
            const answers = {};
            let currentStep = 1;

            function selectOpt(el, key, val) {
                el.closest('.options-grid').querySelectorAll('.opt-card').forEach(c => c.classList.remove('selected'));
                el.classList.add('selected');
                answers[key] = val;
                const nextBtn = document.getElementById('next' + currentStep);
                if (nextBtn) nextBtn.classList.add('enabled');
            }

            function selectBody(el, val) {
                document.querySelectorAll('.body-card').forEach(c => c.classList.remove('selected'));
                el.classList.add('selected');
                answers['body'] = val;
            }

            function goStep(n) {
                document.getElementById('step' + currentStep).classList.remove('active');
                currentStep = n;
                document.getElementById('step' + n).classList.add('active');
                updateProgress(n);
            }

            function updateProgress(n) {
                for (let i = 1; i <= 5; i++) {
                    const el = document.getElementById('ps' + i);
                    el.classList.remove('active', 'done');
                    if (i < n) el.classList.add('done');
                    if (i === n) el.classList.add('active');
                }
                document.getElementById('progress-label').textContent = 'Step ' + n + ' of 5';
            }

            function showResults() {
                const u = answers.undertone || 'warm';
                const body = answers.body || 'hourglass';
                const hair = answers.hair || 'dark-brown';

                let season, badge, title, desc, bestColors, avoidColors, paletteNote, avoidNote;

                if (u === 'warm' || u === 'olive') {
                    if (hair === 'blonde' || hair === 'light-brown') {
                        season = 'Spring';
                        badge = '🌸 Spring';
                        title = 'You\'re a Warm Spring';
                        desc =
                            'Your warm undertone and lighter features give you a fresh, golden radiance. You shine in clear, warm, and light colours.';
                        bestColors = ['#F4A460', '#FFD580', '#E8855A', '#90C46E', '#F5F0DC', '#FF8C69'];
                        avoidColors = ['#4B0082', '#708090', '#2F4F4F', '#000080'];
                        paletteNote = 'Peach, coral, warm yellows, camel, and moss greens are your power shades.';
                        avoidNote = 'Avoid cool, dark, or icy tones which will wash out your natural warmth.';
                    } else {
                        season = 'Autumn';
                        badge = '🍂 Autumn';
                        title = 'You\'re a Warm Autumn';
                        desc =
                            'Your warm, rich undertone pairs beautifully with earthy, muted shades. You were made for terracotta, olive, and rust.';
                        bestColors = ['#C97B5A', '#D4A856', '#8B6914', '#556B2F', '#B8632A', '#8B4513'];
                        avoidColors = ['#FF69B4', '#87CEEB', '#E0E0E0', '#000080'];
                        paletteNote =
                            'Terracotta, burnt orange, olive, camel, chocolate, and warm mustard are your best friends.';
                        avoidNote = 'Stay away from pastels, cool blues, and icy shades that clash with your warm depth.';
                    }
                } else if (u === 'cool') {
                    if (hair === 'black' || hair === 'dark-brown') {
                        season = 'Winter';
                        badge = '❄️ Winter';
                        title = 'You\'re a Cool Winter';
                        desc =
                            'High contrast and cool depth define your stunning palette. You\'re made for bold, jewel-toned colours.';
                        bestColors = ['#00008B', '#8B0000', '#006400', '#4B0082', '#F5F5F5', '#C0C0C0'];
                        avoidColors = ['#F4A460', '#D2691E', '#BDB76B', '#CD853F'];
                        paletteNote = 'Navy, emerald, ruby, royal purple, black, and crisp white are your signature shades.';
                        avoidNote = 'Warm, muted, or earthy tones clash with your cool, high-contrast features.';
                    } else {
                        season = 'Summer';
                        badge = '🌸 Summer';
                        title = 'You\'re a Cool Summer';
                        desc =
                            'Soft, muted, and cool — your beauty has an effortless quiet elegance. You glow in powdery pastels.';
                        bestColors = ['#C8A2C8', '#8FA8C8', '#C9A0DC', '#B0C4DE', '#D8BFD8', '#88A4BC'];
                        avoidColors = ['#FF6600', '#C97B5A', '#D4A856', '#8B6914'];
                        paletteNote = 'Dusty rose, lavender, powder blue, mauve, soft sage, and cool berry are your palette.';
                        avoidNote = 'Avoid warm oranges, terracottas, and earthy shades that overpower your soft cool tone.';
                    }
                } else {
                    season = 'Autumn';
                    badge = '🌿 Soft Autumn';
                    title = 'You\'re a Soft Autumn';
                    desc =
                        'Your neutral undertone leans slightly warm, giving you incredible versatility. You shine in soft, muted, earthy shades.';
                    bestColors = ['#BC8F8F', '#A0917E', '#8FBC8F', '#C4A882', '#B08B72', '#9E8B7A'];
                    avoidColors = ['#FF1493', '#0000CD', '#FFD700', '#000000'];
                    paletteNote = 'Dusty rose, warm taupe, soft olive, camel, mushroom, and muted salmon work beautifully.';
                    avoidNote = 'Very bright, saturated, or extremely dark shades overpower your soft natural colouring.';
                }

                const bodyRecs = {
                    hourglass: ['Wrap dresses and belted styles to define your waist',
                        'Fitted jeans with tucked-in blouses', 'Bodycon midi dresses in your season colours',
                        'Tailored blazers that cinch at the waist',
                        'Avoid boxy, oversized silhouettes that hide your shape'
                    ],
                    pear: ['A-line skirts and wide-leg trousers to balance hips',
                        'Off-shoulder and boat-neck tops to draw attention upward',
                        'Dark bottoms in your season\'s deep shades', 'Statement earrings and bold necklines',
                        'Structured jackets that add shoulder width'
                    ],
                    apple: ['Empire-waist dresses that skim the midsection',
                        'V-necklines to elongate and open the upper body',
                        'Flowy tops in your best lighter season shades', 'High-waisted wide-leg trousers',
                        'Avoid tight-fitting tops that cling to the middle'
                    ],
                    rectangle: ['Peplum tops and ruffled blouses to add curve', 'Belted outfits to create waist definition',
                        'Wrap dresses to suggest an hourglass shape', 'Layering with cropped jackets',
                        'Avoid boxy or straight-cut dresses with no shape'
                    ],
                    inverted: ['Wide-leg trousers and full skirts to balance the silhouette',
                        'V-necks over boat necks to soften broad shoulders', 'Bold patterns on bottoms, solids on top',
                        'Avoid strong shoulder details like ruffles or padding',
                        'A-line and fit-and-flare dresses are your best friends'
                    ]
                };

                const insight = {
                    hourglass: `Your balanced proportions mean almost any silhouette works for you. Focus on clothes that acknowledge your waist — wrap dresses, belted coats, and tailored pieces in your ${season} palette will look extraordinary.`,
                    pear: `Draw attention upward with bold colour and details on your top half, and use your ${season} deeper shades on your lower half. This creates a beautifully balanced silhouette.`,
                    apple: `Vertical lines and flowy fabrics in your ${season} lighter shades will elongate beautifully. Empire waists and V-necklines are your style superpowers.`,
                    rectangle: `You have the freedom to create any silhouette you love. Adding visual texture or colour blocking in your ${season} palette helps define curves and adds dimension.`,
                    inverted: `Balance your silhouette by adding volume below the waist. Your ${season} palette looks stunning in statement skirts and wide-leg trousers, which naturally draw the eye downward.`
                };

                document.getElementById('season-badge').textContent = badge;
                document.getElementById('season-badge').style.cssText =
                    `background:${bestColors[0]}22; color:${bestColors[2]}; border:1.5px solid ${bestColors[0]}44;`;
                document.getElementById('season-title').textContent = title;
                document.getElementById('season-desc').textContent = desc;
                document.getElementById('palette-note').textContent = paletteNote;
                document.getElementById('avoid-note').textContent = avoidNote;

                const bp = document.getElementById('best-palette');
                bp.innerHTML = bestColors.map(c => `<div class="big-swatch" style="background:${c};"></div>`).join('');

                const ap = document.getElementById('avoid-palette');
                ap.innerHTML = avoidColors.map(c => `<div class="avoid-swatch" style="background:${c};"></div>`).join('');

                const cr = document.getElementById('cloth-recs');
                const recs = bodyRecs[body] || bodyRecs.hourglass;
                cr.innerHTML = recs.map(r => `<li>${r}</li>`).join('');

                document.getElementById('style-insight').textContent = insight[body] || insight.hourglass;

                document.getElementById('step5').classList.remove('active');
                document.getElementById('stepResults').classList.add('active');
                document.querySelectorAll('.p-step').forEach(p => p.classList.add('done'));
                document.getElementById('progress-label').textContent = 'Complete ✓';
            }

            function restartQuiz() {
                document.querySelectorAll('.quiz-step').forEach(s => s.classList.remove('active'));
                document.getElementById('step1').classList.add('active');
                document.querySelectorAll('.opt-card, .body-card').forEach(c => c.classList.remove('selected'));
                document.querySelectorAll('.btn-next').forEach(b => b.classList.remove('enabled'));
                Object.keys(answers).forEach(k => delete answers[k]);
                currentStep = 1;
                updateProgress(1);
            }

            function toggleChip(el) {
                document.querySelectorAll('.chip').forEach(c => c.classList.remove('active'));
                el.classList.add('active');
            }

            function handleSubmit(btn) {
                btn.textContent = '✓ Message Sent!';
                btn.style.background = 'var(--sage)';
                btn.disabled = true;
            }
        </script>
@yield('page_scripts')
