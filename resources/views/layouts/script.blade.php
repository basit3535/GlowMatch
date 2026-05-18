<script>
    // ── NAVIGATION ──
    function showPage(name) {
        document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
        document.querySelectorAll('.nav-center a').forEach(a => a.classList.remove('active'));
        document.getElementById('page-' + name).classList.add('active');
        const navEl = document.getElementById('nl-' + name);
        if (navEl) navEl.classList.add('active');
        window.scrollTo(0, 0);
        // close mobile menu
        document.getElementById('mobile-menu').style.display = 'none';
    }
    let mobileOpen = false;

    function toggleMobileMenu() {
        mobileOpen = !mobileOpen;
        document.getElementById('mobile-menu').style.display = mobileOpen ? 'flex' : 'none';
    }

    // ── QUIZ ──
    // const qa = {};
    // let curQ = 1;

    // function qSelect(el, key, val) {
    //     el.closest('.opt-grid').querySelectorAll('.opt').forEach(o => o.classList.remove('sel'));
    //     el.classList.add('sel');
    //     qa[key] = val;
    //     const nb = document.getElementById('qn' + curQ);
    //     if (nb) nb.classList.add('on');
    // }

    // function qSelectBody(el, val) {
    //     document.querySelectorAll('.body-opt').forEach(o => o.classList.remove('sel'));
    //     el.classList.add('sel');
    //     qa.body = val;
    // }

    // function qGo(n) {
    //     document.getElementById('q' + curQ).classList.remove('active');
    //     curQ = n;
    //     document.getElementById('q' + n).classList.add('active');
    //     updateQProgress(n);
    // }

    // function updateQProgress(n) {
    //     for (let i = 1; i <= 5; i++) {
    //         const c = document.getElementById('qc' + i);
    //         const l = document.getElementById('ql' + i);
    //         c.classList.remove('active', 'done');
    //         if (l) l.classList.remove('done');
    //         if (i < n) {
    //             c.classList.add('done');
    //             c.textContent = '✓';
    //             if (l) l.classList.add('done');
    //         }
    //         if (i === n) {
    //             c.classList.add('active');
    //             c.textContent = i;
    //         }
    //         if (i > n) c.textContent = i;
    //     }
    // }

    // function showQuizResults() {
    //     const u = qa.undertone || 'warm';
    //     const h = qa.hair || 'dark-brown';
    //     const body = qa.body || 'hourglass';
    //     let season, title, desc, best, avoid, bestNote, avoidNote, makeup, cloth, insight;

    //     if (u === 'warm' || u === 'olive') {
    //         if (h === 'blonde' || h === 'auburn' || h === 'light-brown') {
    //             season = '🌸 Spring';
    //             title = 'You\'re a Warm Spring';
    //             desc =
    //                 'Your warm undertone paired with lighter features gives you a fresh, golden radiance. Clear, warm, bright colours make you glow.';
    //             best = ['#F4A460', '#FFD580', '#E8855A', '#90C46E', '#F5C5A0', '#FF8C69'];
    //             avoid = ['#4B0082', '#708090', '#2F4F4F', '#000080'];
    //             bestNote = 'Peach, coral, warm yellow, camel, warm ivory, and moss green are your signature shades.';
    //             avoidNote = 'Cool, dark, or icy tones clash with your natural warmth and will wash you out.';
    //             makeup = [{
    //                 c: '#FFB347',
    //                 n: 'Warm Peach Foundation',
    //                 t: 'Base'
    //             }, {
    //                 c: '#E85A6A',
    //                 n: 'Warm Coral Lip',
    //                 t: 'Lips'
    //             }, {
    //                 c: '#D4A843',
    //                 n: 'Golden Bronze',
    //                 t: 'Eyes'
    //             }, {
    //                 c: '#FF8C69',
    //                 n: 'Salmon Blush',
    //                 t: 'Cheeks'
    //             }];
    //         } else {
    //             season = '🍂 Autumn';
    //             title = 'You\'re a Warm Autumn';
    //             desc =
    //                 'Rich, warm undertones and deep or medium features place you firmly in the autumn season. Earthy, muted tones are where you truly shine.';
    //             best = ['#C97B5A', '#D4A856', '#8B6914', '#556B2F', '#B8632A', '#8B4513'];
    //             avoid = ['#FF69B4', '#87CEEB', '#E0E0E0', '#000080'];
    //             bestNote =
    //                 'Terracotta, burnt orange, olive, camel, chocolate, warm mustard — these are your power shades.';
    //             avoidNote = 'Pastels, cool blues, icy whites, and bright pinks clash with your warm, earthy depth.';
    //             makeup = [{
    //                 c: '#C47A5A',
    //                 n: 'Warm Beige Foundation',
    //                 t: 'Base'
    //             }, {
    //                 c: '#B85A38',
    //                 n: 'Brick Red Lip',
    //                 t: 'Lips'
    //             }, {
    //                 c: '#8B6914',
    //                 n: 'Bronze Olive',
    //                 t: 'Eyes'
    //             }, {
    //                 c: '#C87A50',
    //                 n: 'Peach Terracotta',
    //                 t: 'Cheeks'
    //             }];
    //         }
    //     } else if (u === 'cool') {
    //         if (h === 'black' || h === 'dark-brown' || h === 'grey') {
    //             season = '❄️ Winter';
    //             title = 'You\'re a Cool Winter';
    //             desc =
    //                 'High contrast and cool, clear depth define you. Bold jewel tones and icy brights make you look strikingly beautiful.';
    //             best = ['#00008B', '#8B0000', '#006400', '#4B0082', '#F5F5F5', '#C0C0C0'];
    //             avoid = ['#F4A460', '#D2691E', '#BDB76B', '#CD853F'];
    //             bestNote = 'Navy, emerald, ruby, royal purple, crisp white, and silver are your essential shades.';
    //             avoidNote = 'Warm, earthy, or muted tones completely clash with your cool, high-contrast colouring.';
    //             makeup = [{
    //                 c: '#F8F4F0',
    //                 n: 'Cool Ivory Foundation',
    //                 t: 'Base'
    //             }, {
    //                 c: '#8B0000',
    //                 n: 'Classic Red Lip',
    //                 t: 'Lips'
    //             }, {
    //                 c: '#4B0082',
    //                 n: 'Plum Eyeshadow',
    //                 t: 'Eyes'
    //             }, {
    //                 c: '#D4707A',
    //                 n: 'Cool Berry Blush',
    //                 t: 'Cheeks'
    //             }];
    //         } else {
    //             season = '☁️ Summer';
    //             title = 'You\'re a Cool Summer';
    //             desc =
    //                 'Soft, muted, and cool — you have an effortless quiet elegance. Dusty, powdery pastels and muted tones make you look luminous.';
    //             best = ['#C8A2C8', '#8FA8C8', '#C9A0DC', '#B0C4DE', '#D8BFD8', '#88A4BC'];
    //             avoid = ['#FF6600', '#C97B5A', '#D4A856', '#8B6914'];
    //             bestNote = 'Dusty rose, lavender, powder blue, mauve, soft sage, and muted berry are your palette.';
    //             avoidNote = 'Warm oranges, terracottas, and earthy shades overpower your soft, cool natural tones.';
    //             makeup = [{
    //                 c: '#F0E8E8',
    //                 n: 'Cool Pink Foundation',
    //                 t: 'Base'
    //             }, {
    //                 c: '#C87890',
    //                 n: 'Dusty Rose Lip',
    //                 t: 'Lips'
    //             }, {
    //                 c: '#8FA8C8',
    //                 n: 'Soft Blue-Grey',
    //                 t: 'Eyes'
    //             }, {
    //                 c: '#E8A8B8',
    //                 n: 'Soft Pink Blush',
    //                 t: 'Cheeks'
    //             }];
    //         }
    //     } else {
    //         season = '🌿 Soft Autumn';
    //         title = 'You\'re a Soft Autumn';
    //         desc =
    //             'Your neutral-warm undertone gives you incredible versatility. You shine in soft, muted, earthy shades that feel warm but never overwhelming.';
    //         best = ['#BC8F8F', '#A0917E', '#8FBC8F', '#C4A882', '#B08B72', '#9E8B7A'];
    //         avoid = ['#FF1493', '#0000CD', '#FFD700', '#000'];
    //         bestNote = 'Dusty rose, warm taupe, soft olive, camel, mushroom, and muted salmon are your best shades.';
    //         avoidNote = 'Very bright, saturated, or extremely dark colours overpower your soft, balanced colouring.';
    //         makeup = [{
    //             c: '#D4A882',
    //             n: 'Neutral Beige Foundation',
    //             t: 'Base'
    //         }, {
    //             c: '#BC8F8F',
    //             n: 'Muted Rose Lip',
    //             t: 'Lips'
    //         }, {
    //             c: '#A0917E',
    //             n: 'Warm Taupe',
    //             t: 'Eyes'
    //         }, {
    //             c: '#C4A882',
    //             n: 'Warm Peach Blush',
    //             t: 'Cheeks'
    //         }];
    //     }

    //     const clothRecs = {
    //         hourglass: ['Wrap dresses and tops that naturally tie at the waist',
    //             'Fitted blazers and structured jackets cinched at the waist',
    //             'High-waisted bottoms — jeans, skirts, and trousers',
    //             'Bodycon midi dresses in your season\'s signature colours',
    //             'Avoid oversized or boxy styles that hide your shape'
    //         ],
    //         pear: ['Off-shoulder, boat-neck, and embellished tops to draw the eye upward',
    //             'Dark bottoms in your season\'s deeper shades — straight or wide-leg',
    //             'A-line and fit-and-flare skirts that skim over the hips',
    //             'Statement jewellery, bold necklines, and interesting sleeves',
    //             'Avoid tapered trousers, clingy skirts, and hip pockets'
    //         ],
    //         apple: ['Empire-waist dresses and tops that skim the midsection',
    //             'V-necklines to elongate and open the upper body visually',
    //             'Flowy, draped tops in your season\'s lighter shades',
    //             'Straight-leg and wide-leg trousers that show off slim legs',
    //             'Avoid tight-fitting tops, belted styles at the natural waist'
    //         ],
    //         rectangle: ['Peplum tops and ruffled blouses to add shape and volume',
    //             'Belted outfits and wrap styles to create waist definition',
    //             'Colour-blocked outfits — different tones on top and bottom',
    //             'Layered looks with cropped jackets over fitted tops',
    //             'Avoid shapeless shift dresses and straight-cut silhouettes'
    //         ],
    //         inverted: ['Wide-leg trousers, maxi skirts, and full skirts to balance hips',
    //             'A-line and fit-and-flare dresses to add lower body volume',
    //             'Bold patterns and prints below the waist, solids on top',
    //             'V-necklines and open-neck styles to soften the shoulder line',
    //             'Avoid padded shoulders, boat necks, and structured jackets'
    //         ]
    //     };
    //     const insightMap = {
    //         hourglass: `Your balanced proportions mean almost any silhouette works beautifully for you. The secret is simply to acknowledge your waist — wrap dresses, belted coats, and fitted pieces in your ${season.split(' ').slice(-1)[0]} palette will look extraordinary. Don't hide what you have.`,
    //         pear: `Draw the eye upward with bold colour and detail on your top half, using your deeper season shades below. This creates a beautifully balanced silhouette. Statement earrings and interesting necklines in your ${season.split(' ').slice(-1)[0]} palette are your secret weapon.`,
    //         apple: `Vertical lines and flowy fabrics in your lighter season shades will create a beautiful elongating effect. Empire waists and V-necklines are your style superpowers — they open up the face and create the appearance of a longer, leaner torso.`,
    //         rectangle: `You have the creative freedom to build any silhouette you want. Adding visual curves through peplum details, colour blocking with your ${season.split(' ').slice(-1)[0]} palette, and strategic layering creates dimension and interest that's entirely your own.`,
    //         inverted: `Balance your striking shoulders by adding volume below the waist. Your season palette looks stunning in wide-leg trousers and full skirts — these naturally draw the eye downward and create a beautifully balanced silhouette that celebrates your strong frame.`
    //     };

    //     document.getElementById('r-badge').innerHTML = season;
    //     document.getElementById('r-badge').style.cssText =
    //         `background:${best[0]}22;color:${best[2]};border:1.5px solid ${best[0]}55;padding:10px 24px;border-radius:50px;font-size:13px;font-weight:600;`;
    //     document.getElementById('r-title').textContent = title;
    //     document.getElementById('r-desc').textContent = desc;
    //     document.getElementById('r-best').innerHTML = best.map(c =>
    //         `<div class="r-swatch" style="background:${c};"></div>`).join('');
    //     document.getElementById('r-avoid').innerHTML = avoid.map(c =>
    //         `<div class="r-avoid" style="background:${c};"></div>`).join('');
    //     document.getElementById('r-best-note').textContent = bestNote;
    //     document.getElementById('r-avoid-note').textContent = avoidNote;
    //     document.getElementById('r-makeup').innerHTML = makeup.map(m =>
    //         `<div class="r-makeup-item"><div class="r-makeup-dot" style="background:${m.c};"></div><div><div class="r-makeup-name">${m.n}</div><div class="r-makeup-type">${m.t}</div></div></div>`
    //         ).join('');
    //     document.getElementById('r-cloth').innerHTML = (clothRecs[body] || clothRecs.hourglass).map(r =>
    //         `<li class="r-cloth-item">${r}</li>`).join('');
    //     document.getElementById('r-insight').textContent = insightMap[body] || insightMap.hourglass;

    //     document.getElementById('q5').classList.remove('active');
    //     document.getElementById('qResults').classList.add('active');
    //     for (let i = 1; i <= 5; i++) {
    //         const c = document.getElementById('qc' + i);
    //         c.classList.add('done');
    //         c.classList.remove('active');
    //         c.textContent = '✓';
    //         const l = document.getElementById('ql' + i);
    //         if (l) l.classList.add('done');
    //     }
    // }

    // function restartQ() {
    //     document.querySelectorAll('.q-step').forEach(s => s.classList.remove('active'));
    //     document.getElementById('q1').classList.add('active');
    //     document.querySelectorAll('.opt,.body-opt').forEach(o => o.classList.remove('sel'));
    //     document.querySelectorAll('.btn-next-q').forEach(b => b.classList.remove('on'));
    //     Object.keys(qa).forEach(k => delete qa[k]);
    //     curQ = 1;
    //     updateQProgress(1);
    //     for (let i = 1; i <= 5; i++) {
    //         const c = document.getElementById('qc' + i);
    //         c.textContent = i;
    //         c.classList.remove('done', 'active');
    //         if (i === 1) c.classList.add('active');
    //     }
    // }

    // ── COLOUR MATCH (Seasons page) ──
    const cmState = {
        undertone: 'warm',
        hair: 'light',
        contrast: 'low'
    };

    function cmSelect(el, key, val) {
        el.closest('.cm-options').querySelectorAll('.cm-opt').forEach(o => o.classList.remove('active'));
        el.classList.add('active');
        cmState[key] = val;
        updateCM();
    }

    function updateCM() {
        const {
            undertone,
            hair,
            contrast
        } = cmState;
        let season, desc, colors, bg;
        if (undertone === 'warm') {
            if (hair === 'light') {
                season = 'Warm Spring';
                desc = 'Clear, warm, and fresh — peach, coral, and golden yellow are your shades.';
                colors = ['#F4A460', '#FFD580', '#E8855A', '#90C46E'];
                bg = 'linear-gradient(145deg,#D4845A,#E8C080)';
            } else {
                season = 'Warm Autumn';
                desc = 'Rich, earthy, and warm — terracotta and olive are your signature.';
                colors = ['#C97B5A', '#D4A856', '#556B2F', '#8B4513'];
                bg = 'linear-gradient(145deg,#7A4A24,#C47838)';
            }
        } else {
            if (contrast === 'high') {
                season = 'Cool Winter';
                desc = 'Bold, clear, and high-contrast — jewel tones and icy brights are yours.';
                colors = ['#00008B', '#8B0000', '#4B0082', '#F5F5F5'];
                bg = 'linear-gradient(145deg,#1C2848,#4A6090)';
            } else {
                season = 'Cool Summer';
                desc = 'Soft, muted, and cool — dusty rose and lavender make you glow.';
                colors = ['#C8A2C8', '#8FA8C8', '#D8BFD8', '#88A4BC'];
                bg = 'linear-gradient(145deg,#6880B4,#A8A0C8)';
            }
        }
        const r = document.getElementById('cm-result');
        r.querySelector('.cm-result-top').style.background = bg;
        document.getElementById('cm-season').textContent = season;
        document.getElementById('cm-desc').textContent = desc;
        document.getElementById('cm-palette').innerHTML = colors.map(c =>
            `<div class="cm-r-swatch" style="background:${c};"></div>`).join('');
    }

    // ── BODY TYPE DRESSUP ──
    const duData = {
        hourglass: {
            icon: '⧖',
            bg: 'linear-gradient(145deg,#FDF0EA,#F5D0BC)',
            title: 'Hourglass Shape Tips',
            tips: ['Wrap dresses define your waist naturally and beautifully',
                'Fitted blazers cinched at the waist are your signature',
                'High-waisted bottoms of any style work perfectly for you',
                'Avoid boxy silhouettes that hide your balanced proportions'
            ]
        },
        pear: {
            icon: '🍐',
            bg: 'linear-gradient(145deg,#F5F0E8,#E8D4B8)',
            title: 'Pear Shape Tips',
            tips: ['Off-shoulder tops draw the eye upward and create balance',
                'A-line skirts skim over hips without clinging',
                'Bold statement necklaces shift focus to your upper half',
                'Dark, solid colours on the bottom half streamline the silhouette'
            ]
        },
        apple: {
            icon: '🍎',
            bg: 'linear-gradient(145deg,#FDF8F0,#F0E0C8)',
            title: 'Apple Shape Tips',
            tips: ['Empire waists create a flowing line from bust downward',
                'V-necklines elongate the upper body and open the face',
                'Show off your legs with mid-length to short skirts',
                'Flowy fabrics drape beautifully and avoid clinginess'
            ]
        },
        rectangle: {
            icon: '▭',
            bg: 'linear-gradient(145deg,#EEF0F5,#D8DCE8)',
            title: 'Rectangle Shape Tips',
            tips: ['Peplum details at the hip add beautiful curves',
                'Colour-blocking creates the appearance of different proportions',
                'Wrap dresses and styles suggest an hourglass silhouette',
                'Belts and sashes at the waist create definition'
            ]
        },
        inverted: {
            icon: '▽',
            bg: 'linear-gradient(145deg,#EAF0F8,#C8D8EC)',
            title: 'Inverted Triangle Tips',
            tips: ['Wide-leg trousers balance broad shoulders beautifully',
                'Full skirts and A-line styles add volume below the waist',
                'V-necks soften the shoulder line more than boat necks',
                'Keep shoulders simple — no ruffles, pads, or strong seams'
            ]
        }
    };

    function selectDressup(el, type) {
        document.querySelectorAll('.dl-item').forEach(d => d.classList.remove('active'));
        el.classList.add('active');
        const d = duData[type];
        document.getElementById('dp-img').textContent = d.icon;
        document.getElementById('dp-img').style.background = d.bg;
        document.getElementById('dp-title').textContent = d.title;
        document.getElementById('dp-tips').innerHTML = d.tips.map(t => `<div class="dp-tip"><span>✦</span>${t}</div>`)
            .join('');
    }

    // ── CONTACT ──
    function selectChip(el) {
        document.querySelectorAll('.cf-chip').forEach(c => c.classList.remove('active'));
        el.classList.add('active');
    }

    function handleContactSubmit(btn) {
        btn.textContent = '✓ Message Sent! We\'ll be in touch soon.';
        btn.style.background = 'var(--sage)';
        btn.disabled = true;
    }

    // ── FAQ ──
    function toggleFaq(el) {
        el.classList.toggle('open');
    }

    // ── BLOG FILTERS ──
    document.querySelectorAll('.bf-pill').forEach(p => {
        p.onclick = function() {
            document.querySelectorAll('.bf-pill').forEach(x => x.classList.remove('active'));
            this.classList.add('active');
        };
    });
</script>
@yield('page_script')
