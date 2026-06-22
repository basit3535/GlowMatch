<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\QuizLead;

class QuizController extends Controller
{
    /* ═══════════════════════════════════════════════════════════════
       SEASON DATA — kept server-side only
    ═══════════════════════════════════════════════════════════════ */
    private array $seasons = [
        'spring' => [
            'label'     => '🌸 Spring',
            'title'     => 'True Spring',
            'desc'      => 'You radiate warmth and freshness. Your natural colouring has golden undertones that come alive in clear, warm, bright hues — think a sun-drenched garden in full bloom.',
            'archetype' => 'Radiant Naturalist',
            'metals'    => 'gold, amber and tortoiseshell',
            'bestNote'  => 'These warm, clear colours echo your natural golden warmth and make your skin glow.',
            'avoidNote' => 'Dark, cool, or muted tones wash you out and dull your natural radiance.',
            'insight'   => 'Your style archetype is the **Radiant Naturalist** — effortlessly warm, vibrant, and approachable. You look your best in outfits that feel joyful and alive: floral prints, textured fabrics, and warm earthy layers. Avoid stark white (use cream instead) and ice-cold tones that fight your natural radiance. Jewellery in gold, amber and tortoiseshell are your signature metals.',
            'best' => [
                ['hex' => '#F4C542', 'name' => 'Honey Gold'],
                ['hex' => '#E8865A', 'name' => 'Coral'],
                ['hex' => '#7BC67E', 'name' => 'Spring Green'],
                ['hex' => '#F5A623', 'name' => 'Warm Amber'],
                ['hex' => '#D4A5A5', 'name' => 'Peach Rose'],
                ['hex' => '#B8D4E8', 'name' => 'Sky Blue'],
            ],
            'avoid' => [
                ['hex' => '#2C2C4A', 'name' => 'Navy'],
                ['hex' => '#6B2D6B', 'name' => 'Dark Purple'],
                ['hex' => '#8B0000', 'name' => 'Dark Red'],
                ['hex' => '#808080', 'name' => 'Cool Grey'],
            ],
            'makeup' => [
                ['type' => 'Foundation', 'shade' => 'Warm Ivory / Golden Beige', 'note' => 'with yellow undertone'],
                ['type' => 'Blush',      'shade' => 'Peach Coral',               'note' => 'avoid cool pinks'],
                ['type' => 'Lips',       'shade' => 'Warm Coral or Nude Peach',  'note' => 'or clear berry'],
                ['type' => 'Eyes',       'shade' => 'Warm Browns, Gold, Teal',   'note' => 'soft green liner'],
                ['type' => 'Highlighter','shade' => 'Gold or Champagne',         'note' => 'avoid silver'],
                ['type' => 'Brows',      'shade' => 'Soft Warm Brown',           'note' => 'slightly lighter than hair'],
            ],
        ],

        'summer' => [
            'label'     => '☁️ Summer',
            'title'     => 'Soft Summer',
            'desc'      => "Your colouring is cool, soft and elegantly muted — like a hazy afternoon in the countryside. You suit dusty, powdery tones that don't overpower your delicate natural palette.",
            'archetype' => 'Ethereal Romantic',
            'metals'    => 'silver and pearl',
            'bestNote'  => 'Soft, cool, muted tones complement your natural delicacy without competing with it.',
            'avoidNote' => 'Warm, bright or very dark colours overpower your refined softness.',
            'insight'   => 'Your style archetype is the **Ethereal Romantic** — cool, elegant and quietly magnetic. You look stunning in monochromatic cool-toned looks, flowing fabrics, and subtle textures. Blush, dusty blue and soft lavender wardrobes are your power move. Silver jewellery and pearl accessories are your natural companions.',
            'best' => [
                ['hex' => '#B0C4DE', 'name' => 'Powder Blue'],
                ['hex' => '#C8A2C8', 'name' => 'Lavender'],
                ['hex' => '#8FAF8F', 'name' => 'Sage Green'],
                ['hex' => '#D4B5B5', 'name' => 'Dusty Rose'],
                ['hex' => '#A8BAC4', 'name' => 'Slate Blue'],
                ['hex' => '#C4B7A6', 'name' => 'Greige'],
            ],
            'avoid' => [
                ['hex' => '#FF4500', 'name' => 'Bright Orange'],
                ['hex' => '#FFD700', 'name' => 'Warm Gold'],
                ['hex' => '#8B4513', 'name' => 'Rust Brown'],
                ['hex' => '#000000', 'name' => 'Jet Black'],
            ],
            'makeup' => [
                ['type' => 'Foundation', 'shade' => 'Cool Porcelain or Rose Beige', 'note' => 'pink undertone'],
                ['type' => 'Blush',      'shade' => 'Soft Rose or Mauve',           'note' => 'very light handed'],
                ['type' => 'Lips',       'shade' => 'Rose Berry or Soft Mauve',     'note' => 'avoid oranges'],
                ['type' => 'Eyes',       'shade' => 'Slate, Plum, Smoky Rose',      'note' => 'cool-toned liner'],
                ['type' => 'Highlighter','shade' => 'Pearl or Icy Pink',            'note' => 'very subtle'],
                ['type' => 'Brows',      'shade' => 'Taupe or Soft Ash Brown',      'note' => 'no warm or red tones'],
            ],
        ],

        'autumn' => [
            'label'     => '🍂 Autumn',
            'title'     => 'Deep Autumn',
            'desc'      => 'Your colouring is rich, warm and earthy — like a golden forest in October. You belong in the colours of nature at its most abundant: spice, rust, olive and cognac.',
            'archetype' => 'Earth Empress',
            'metals'    => 'gold and bronze',
            'bestNote'  => 'Rich, warm earth tones mirror your natural depth and make you look powerfully grounded.',
            'avoidNote' => 'Cool pastels and bright neons clash with your warmth and look jarring.',
            'insight'   => 'Your style archetype is the **Earth Empress** — commanding, grounded and effortlessly luxurious. You look extraordinary in rich textures like suede, velvet, and leather in earthy tones. Think structured blazers in camel or rust, oversized knits in forest green, and statement boots in cognac.',
            'best' => [
                ['hex' => '#B85C30', 'name' => 'Terracotta'],
                ['hex' => '#8B6914', 'name' => 'Olive Gold'],
                ['hex' => '#6B3A2A', 'name' => 'Rust'],
                ['hex' => '#5C4A3A', 'name' => 'Warm Espresso'],
                ['hex' => '#C8A05A', 'name' => 'Camel'],
                ['hex' => '#3D5A3E', 'name' => 'Forest Green'],
            ],
            'avoid' => [
                ['hex' => '#FF69B4', 'name' => 'Hot Pink'],
                ['hex' => '#00FFFF', 'name' => 'Bright Cyan'],
                ['hex' => '#E8E8F0', 'name' => 'Icy Grey'],
                ['hex' => '#DDA0DD', 'name' => 'Pastel Lilac'],
            ],
            'makeup' => [
                ['type' => 'Foundation', 'shade' => 'Warm Beige or Golden Tan',           'note' => 'strong yellow undertone'],
                ['type' => 'Blush',      'shade' => 'Terracotta or Warm Brick',            'note' => 'deep and warm'],
                ['type' => 'Lips',       'shade' => 'Burnt Sienna, Deep Plum, Warm Nude', 'note' => 'avoid cool pinks'],
                ['type' => 'Eyes',       'shade' => 'Bronze, Copper, Warm Brown',         'note' => 'smoky warm'],
                ['type' => 'Highlighter','shade' => 'Warm Bronze or Copper',              'note' => 'rich metallic'],
                ['type' => 'Brows',      'shade' => 'Rich Warm Brown or Auburn',          'note' => 'match depth'],
            ],
        ],

        'winter' => [
            'label'     => '❄️ Winter',
            'title'     => 'True Winter',
            'desc'      => 'Your colouring is cool, clear and high-contrast — with a dramatic natural presence. You suit bold, saturated colours and stark contrasts that match your striking intensity.',
            'archetype' => 'Dramatic Visionary',
            'metals'    => 'silver and platinum',
            'bestNote'  => 'Bold, cool, saturated colours reflect your high-contrast natural drama perfectly.',
            'avoidNote' => 'Warm or muted tones look muddy against your cool clarity and dull your intensity.',
            'insight'   => 'Your style archetype is the **Dramatic Visionary** — bold, elegant and impossible to ignore. You were made for high contrast: white blazers over black trousers, a red lip with a sleek dark outfit, jewel tones against pale skin. Silver and platinum jewellery are your signature.',
            'best' => [
                ['hex' => '#1C1C3A', 'name' => 'Midnight Navy'],
                ['hex' => '#8B0000', 'name' => 'True Red'],
                ['hex' => '#FFFFFF', 'name' => 'Pure White'],
                ['hex' => '#000000', 'name' => 'Jet Black'],
                ['hex' => '#4B0082', 'name' => 'Royal Purple'],
                ['hex' => '#006B6B', 'name' => 'Teal'],
            ],
            'avoid' => [
                ['hex' => '#F5DEB3', 'name' => 'Warm Wheat'],
                ['hex' => '#D2691E', 'name' => 'Warm Brown'],
                ['hex' => '#F0C060', 'name' => 'Honey Yellow'],
                ['hex' => '#C8A87C', 'name' => 'Camel'],
            ],
            'makeup' => [
                ['type' => 'Foundation', 'shade' => 'Cool Ivory or Deep Ebony',  'note' => 'neutral or cool undertone'],
                ['type' => 'Blush',      'shade' => 'Cool Berry or Deep Rose',   'note' => 'no orange tones'],
                ['type' => 'Lips',       'shade' => 'True Red, Deep Plum, Berry','note' => 'high impact'],
                ['type' => 'Eyes',       'shade' => 'Black, Charcoal, Deep Plum','note' => 'dramatic liner'],
                ['type' => 'Highlighter','shade' => 'Icy Silver or Champagne',   'note' => 'high luminosity'],
                ['type' => 'Brows',      'shade' => 'Cool Dark Brown or Charcoal','note' => 'defined and strong'],
            ],
        ],
    ];

    /* ═══════════════════════════════════════════════════════════════
       PROTECTED SEASON CALCULATION — never exposed to frontend
    ═══════════════════════════════════════════════════════════════ */
    private function calculateSeason(string $skin, string $undertone, string $eyes, string $hair): string
    {
        $warmScore = 0;
        $coolScore = 0;
        $depthScore = 0;

        // Undertone (strongest signal)
        match ($undertone) {
            'warm'    => $warmScore += 3,
            'cool'    => $coolScore += 3,
            'olive'   => $warmScore += 2,
            'neutral' => ($warmScore += 1) && ($coolScore += 1),
            default   => null,
        };

        // Skin depth
        if (in_array($skin, ['fair', 'light']))  $depthScore -= 1;
        if (in_array($skin, ['tan', 'deep']))    $depthScore += 2;

        // Eyes
        if (in_array($eyes, ['blue', 'grey', 'green']))    $coolScore += 2;
        if (in_array($eyes, ['hazel', 'light-brown']))     $warmScore += 1;
        if ($eyes === 'dark-brown') { $depthScore += 1; $warmScore += 0.5; }

        // Hair
        if (in_array($hair, ['blonde', 'auburn']))    $warmScore += 1;
        if ($hair === 'grey')                          $coolScore += 1;
        if (in_array($hair, ['black', 'dark-brown'])) $depthScore += 1;

        $isWarm  = $warmScore >= $coolScore;
        $isDeep  = $depthScore > 0;

        if ($isWarm && !$isDeep) return 'spring';
        if (!$isWarm && !$isDeep) return 'summer';
        if ($isWarm && $isDeep)   return 'autumn';
        return 'winter';
    }

    /* ═══════════════════════════════════════════════════════════════
       AJAX: Compute season & return full result data
       POST /quiz/compute-season
    ═══════════════════════════════════════════════════════════════ */
    public function computeSeason(Request $request)
    {
        $validated = $request->validate([
            'skin'      => 'required|in:fair,light,medium,tan,deep',
            'undertone' => 'required|in:warm,cool,neutral,olive',
            'eyes'      => 'required|in:blue,green,hazel,light-brown,dark-brown,grey',
            'hair'      => 'required|in:blonde,auburn,light-brown,dark-brown,black,grey',
            'gender'    => 'required|in:female,male,nonbinary',
            'body'      => 'nullable|in:hourglass,pear,apple,rectangle,inverted',
        ]);

        $season = $this->calculateSeason(
            $validated['skin'],
            $validated['undertone'],
            $validated['eyes'],
            $validated['hair']
        );

        $data   = $this->seasons[$season];
        $gender = $validated['gender'];

        // Remove makeup for male/nonbinary
        if ($gender !== 'female') {
            unset($data['makeup']);
        }

        return response()->json([
            'season'   => $season,
            'data'     => $data,
            'clothing' => $this->getClothingTips($validated['body'] ?? 'default', $gender),
            'pinterest'=> $this->getPinterestTerms($season, $validated['body'] ?? 'default', $gender),
        ]);
    }

    /* ═══════════════════════════════════════════════════════════════
       AJAX: Evaluate a custom colour against a season
       POST /quiz/evaluate-colour
    ═══════════════════════════════════════════════════════════════ */
    public function evaluateColour(Request $request)
    {
        $validated = $request->validate([
            'hex'    => ['required', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'season' => 'required|in:spring,summer,autumn,winter',
        ]);

        $hex    = $validated['hex'];
        $season = $validated['season'];

        // Convert hex to HSL
        [$h, $s, $l] = $this->hexToHsl($hex);

        $score    = $this->scoreColourForSeason($h, $s, $l, $season);
        $rating   = $this->ratingFromScore($score);
        $reason   = $this->explainRating($h, $s, $l, $season, $score);

        return response()->json([
            'score'  => $score,       // 0-100
            'rating' => $rating,      // 'perfect' | 'good' | 'neutral' | 'avoid'
            'label'  => $this->ratingLabel($rating),
            'reason' => $reason,
        ]);
    }

    /* ─── Save lead ─── */
    public function saveLead(Request $request)
    {
        try {
            $validated = $request->validate([
                'name'    => 'required|string|max:100',
                'email'   => 'required|email|max:200',
                'answers' => 'nullable|array',
            ]);

            // Uncomment if you have a QuizLead model:
            // QuizLead::updateOrCreate(
            //     ['email' => $validated['email']],
            //     ['name' => $validated['name'], 'answers' => json_encode($validated['answers'])]
            // );

            Log::info('Quiz lead saved', ['email' => $validated['email']]);
            return response()->json(['ok' => true]);
        } catch (\Throwable $e) {
            Log::warning('Lead save failed: ' . $e->getMessage());
            return response()->json(['ok' => false], 422);
        }
    }

    /* ═══════════════════════════════════════════════════════════════
       PRIVATE HELPERS
    ═══════════════════════════════════════════════════════════════ */

    private function scoreColourForSeason(float $h, float $s, float $l, string $season): int
    {
        // Each season has ideal hue ranges, saturation, lightness windows
        $profiles = [
            'spring' => [
                'warmHues'   => [[0,60],[300,360]], // reds, oranges, yellows, warm pinks
                'satMin'     => 30, 'satMax' => 90,
                'lightMin'   => 35, 'lightMax' => 80,
                'coolHues'   => [[180,270]], // blues/purples = penalty
            ],
            'summer' => [
                'warmHues'   => [[0,40],[340,360]],
                'satMin'     => 8,  'satMax' => 50,
                'lightMin'   => 40, 'lightMax' => 85,
                'coolHues'   => [[180,320]], // muted lavenders/blues = bonus zone handled separately
            ],
            'autumn' => [
                'warmHues'   => [[0,60],[300,360]],
                'satMin'     => 25, 'satMax' => 80,
                'lightMin'   => 15, 'lightMax' => 65,
                'coolHues'   => [[180,300]],
            ],
            'winter' => [
                'warmHues'   => [[30,60]], // only warm yellows are bad
                'satMin'     => 0,  'satMax' => 100,
                'lightMin'   => 0,  'lightMax' => 100, // accepts extremes
                'coolHues'   => [[180,300]], // bonus for winter
            ],
        ];

        $p     = $profiles[$season];
        $score = 50; // start neutral

        // Saturation fitness
        $satFit = ($s >= $p['satMin'] && $s <= $p['satMax']) ? 15 : -10;
        $score += $satFit;

        // Lightness fitness
        $lightFit = ($l >= $p['lightMin'] && $l <= $p['lightMax']) ? 15 : -10;
        $score += $lightFit;

        // Warm vs cool hue check
        $isWarmHue = $this->hueInRanges($h, $p['warmHues']);
        $isCoolHue = $this->hueInRanges($h, $p['coolHues']);

        $warmSeasons = ['spring', 'autumn'];
        $coolSeasons = ['summer', 'winter'];

        if (in_array($season, $warmSeasons)) {
            if ($isWarmHue) $score += 20;
            if ($isCoolHue) $score -= 15;
        } else {
            if ($isCoolHue) $score += 15;
            if ($isWarmHue) $score -= 10;
        }

        // Winter special: extremes score well
        if ($season === 'winter') {
            if ($l < 15 || $l > 85) $score += 10;   // very dark or very light
            if ($s > 70)            $score += 10;   // highly saturated
        }

        // Summer special: muted scores well
        if ($season === 'summer') {
            if ($s < 40) $score += 10;
        }

        return max(0, min(100, (int)round($score)));
    }

    private function ratingFromScore(int $score): string
    {
        if ($score >= 75) return 'perfect';
        if ($score >= 55) return 'good';
        if ($score >= 35) return 'neutral';
        return 'avoid';
    }

    private function ratingLabel(string $rating): string
    {
        return match ($rating) {
            'perfect' => '✨ Perfect Match',
            'good'    => '👍 Works Well',
            'neutral' => '😐 Neutral',
            'avoid'   => '⚠️ Avoid',
            default   => '?',
        };
    }

    private function explainRating(float $h, float $s, float $l, string $season, int $score): string
    {
        $temp = match (true) {
            $h <= 60 || $h >= 300 => 'warm',
            default               => 'cool',
        };
        $sat   = $s < 30 ? 'muted' : ($s > 70 ? 'vivid' : 'moderate');
        $depth = $l < 30 ? 'dark' : ($l > 70 ? 'light' : 'medium');

        $seasonTraits = [
            'spring'  => 'warm, clear, and moderately bright',
            'summer'  => 'cool, soft, and muted',
            'autumn'  => 'warm, earthy, and rich',
            'winter'  => 'cool or bold with high contrast',
        ];

        if ($score >= 75) {
            return "This {$temp}, {$sat}, {$depth} tone aligns beautifully with your {$season} season — {$seasonTraits[$season]}.";
        }
        if ($score >= 55) {
            return "This colour works reasonably well. Your season favours {$seasonTraits[$season]} — this is close but not your strongest choice.";
        }
        if ($score >= 35) {
            return "Neutral result. Your season favours {$seasonTraits[$season]}, but this colour doesn't clash dramatically.";
        }
        return "This {$temp}, {$sat} tone conflicts with your {$season} season, which favours {$seasonTraits[$season]}. It may wash you out or look dissonant.";
    }

    private function hueInRanges(float $h, array $ranges): bool
    {
        foreach ($ranges as [$lo, $hi]) {
            if ($lo <= $h && $h <= $hi) return true;
        }
        return false;
    }

    /** Convert #RRGGBB → [H 0-360, S 0-100, L 0-100] */
    private function hexToHsl(string $hex): array
    {
        $hex = ltrim($hex, '#');
        $r   = hexdec(substr($hex, 0, 2)) / 255;
        $g   = hexdec(substr($hex, 2, 2)) / 255;
        $b   = hexdec(substr($hex, 4, 2)) / 255;

        $max  = max($r, $g, $b);
        $min  = min($r, $g, $b);
        $l    = ($max + $min) / 2;
        $d    = $max - $min;

        if ($d == 0) {
            $h = $s = 0;
        } else {
            $s = $d / (1 - abs(2 * $l - 1));
            $h = match ($max) {
                $r  => 60 * fmod(($g - $b) / $d, 6),
                $g  => 60 * (($b - $r) / $d + 2),
                default => 60 * (($r - $g) / $d + 4),
            };
            if ($h < 0) $h += 360;
        }

        return [round($h, 1), round($s * 100, 1), round($l * 100, 1)];
    }

    /* ─── Clothing tips by gender ─── */
    private function getClothingTips(?string $body, string $gender): array
    {
        $key  = $body ?: 'default';
        $tips = $this->clothingData($gender);
        return $tips[$key] ?? $tips['default'];
    }

    private function clothingData(string $gender): array
    {
        // Female tips
        $female = [
            'hourglass' => [
                ['icon' => '👗', 'tip' => 'Wrap dresses and belted styles to highlight your waist'],
                ['icon' => '👖', 'tip' => 'High-waisted trousers and skirts that follow your curves'],
                ['icon' => '🧥', 'tip' => 'Fitted blazers and tailored jackets — avoid oversized'],
                ['icon' => '👙', 'tip' => 'Swimwear with structured cups and defined waistbands'],
                ['icon' => '👠', 'tip' => 'Any heel works — your proportions are naturally balanced'],
                ['icon' => '💍', 'tip' => 'Statement jewellery works well — your silhouette carries it'],
            ],
            'pear' => [
                ['icon' => '👚', 'tip' => 'Statement tops, off-shoulder and boat necks to draw the eye up'],
                ['icon' => '👗', 'tip' => 'A-line skirts and dresses that skim over hips gracefully'],
                ['icon' => '🧥', 'tip' => 'Structured shoulders and embellished necklines'],
                ['icon' => '👖', 'tip' => 'Dark bootcut or wide-leg trousers to balance the lower body'],
                ['icon' => '🎽', 'tip' => 'Avoid clingy fabrics around hips — choose fluid drape'],
                ['icon' => '👜', 'tip' => 'Crossbody bags worn high to keep focus upward'],
            ],
            'apple' => [
                ['icon' => '👗', 'tip' => 'Empire waist dresses that flow from below the bust'],
                ['icon' => '🧥', 'tip' => 'Open-front cardigans and dusters that create vertical lines'],
                ['icon' => '👚', 'tip' => 'V-necks and deep scoop necks to elongate the torso'],
                ['icon' => '👖', 'tip' => 'Straight or bootcut trousers — avoid low-rise'],
                ['icon' => '🩱', 'tip' => 'One-piece swimsuits with ruching at the midsection'],
                ['icon' => '🧣', 'tip' => 'Long necklaces and scarves to draw the eye downward'],
            ],
            'rectangle' => [
                ['icon' => '👗', 'tip' => 'Peplum tops and ruffles to create the illusion of curves'],
                ['icon' => '🧥', 'tip' => 'Belted outerwear to define a waist'],
                ['icon' => '👖', 'tip' => 'Flared or wide-leg trousers for hip volume'],
                ['icon' => '👚', 'tip' => 'Layered looks and textured fabrics add dimension'],
                ['icon' => '👗', 'tip' => 'Wrap and bodycon dresses to suggest an hourglass shape'],
                ['icon' => '💍', 'tip' => 'Statement belts are your best-kept secret accessory'],
            ],
            'inverted' => [
                ['icon' => '👖', 'tip' => 'Wide-leg trousers and full skirts to balance the lower body'],
                ['icon' => '👗', 'tip' => 'A-line and fit-and-flare silhouettes'],
                ['icon' => '🧥', 'tip' => 'Avoid shoulder pads — choose minimal or raglan cuts'],
                ['icon' => '👚', 'tip' => 'V-necks and lower necklines to soften shoulders'],
                ['icon' => '🩱', 'tip' => 'Bold prints on bottoms, solids or minimal on top'],
                ['icon' => '👠', 'tip' => 'Heels and pointed-toe shoes to lengthen the leg line'],
            ],
            'default' => [
                ['icon' => '👗', 'tip' => 'Choose silhouettes that make you feel confident and comfortable'],
                ['icon' => '🧥', 'tip' => 'Invest in quality basics in your best colours'],
                ['icon' => '👖', 'tip' => 'Fit matters more than size — tailor when possible'],
                ['icon' => '👚', 'tip' => 'Wear what makes you smile when you see yourself in the mirror'],
                ['icon' => '💍', 'tip' => "Accessories in your season's metals always elevate a look"],
                ['icon' => '🎨', 'tip' => 'Stick to your colour palette for instant cohesion'],
            ],
        ];

        if ($gender === 'male') {
            return [
                'hourglass' => [
                    ['icon' => '👔', 'tip' => 'Fitted shirts and tailored jackets that emphasise your proportions'],
                    ['icon' => '👖', 'tip' => 'Mid-rise trousers with a slight taper to follow your shape'],
                    ['icon' => '🧥', 'tip' => 'Double-breasted coats or blazers for a defined silhouette'],
                    ['icon' => '👕', 'tip' => 'T-shirts with a slight stretch that skim the torso'],
                    ['icon' => '👞', 'tip' => 'Chelsea boots or loafers — clean lines work best'],
                    ['icon' => '⌚', 'tip' => 'A statement watch draws attention to balanced proportions'],
                ],
                'pear' => [
                    ['icon' => '👕', 'tip' => 'Bold patterned or brighter shirts to draw the eye upward'],
                    ['icon' => '👖', 'tip' => "Dark, straight-leg trousers that don't add bulk to hips"],
                    ['icon' => '🧥', 'tip' => 'Structured blazers with light padding at the shoulders'],
                    ['icon' => '🧣', 'tip' => 'Horizontal striped tops or knitwear to broaden the chest'],
                    ['icon' => '👟', 'tip' => 'Minimalist sneakers — avoid chunky soles that widen the stance'],
                    ['icon' => '🪢', 'tip' => 'Use a belt to define the waist and break up the torso'],
                ],
                'default' => [
                    ['icon' => '👕', 'tip' => 'Well-fitting basics in your best colours always win'],
                    ['icon' => '👖', 'tip' => 'Prioritise comfort and movement — the best style is confidence'],
                    ['icon' => '🧥', 'tip' => 'A great jacket instantly elevates any outfit'],
                    ['icon' => '👞', 'tip' => 'Keep shoes clean and timeless (leather, suede, minimalist)'],
                    ['icon' => '⌚', 'tip' => 'A simple watch or bracelet adds a refined touch'],
                    ['icon' => '🎨', 'tip' => 'Stick to your colour season for shirts and accessories'],
                ],
                'apple'     => $female['apple'],
                'rectangle' => $female['rectangle'],
                'inverted'  => $female['inverted'],
            ];
        }

        return $female;
    }

    /* ─── Pinterest search terms ─── */
    private function getPinterestTerms(string $season, string $body, string $gender): array
    {
        $genderTerm = match ($gender) {
            'male'      => 'men',
            'nonbinary' => 'androgynous fashion',
            default     => 'women',
        };
        $seasonTerms = [
            'spring'  => ['warm coral outfit', 'spring colour palette fashion', 'peach floral dress', 'warm earth tones outfit', 'golden hour aesthetic fashion'],
            'summer'  => ['dusty rose outfit', 'powder blue aesthetic', 'soft summer fashion', 'lavender outfit', 'muted tones wardrobe'],
            'autumn'  => ['terracotta outfit', 'rust autumn fashion', 'dark autumn wardrobe', 'cognac leather look', 'forest green outfit'],
            'winter'  => ['monochrome black outfit', 'bold red lip fashion', 'cool winter palette', 'navy white outfit', 'jewel tone wardrobe'],
        ];
        $bodyLabel = ucfirst($body ?: 'classic');
        $labels    = ['Colour Palette Look', 'Key Pieces', 'Seasonal Outfit', "{$bodyLabel} Style", 'Statement Look'];
        $icons     = ['👗', '🧥', '👚', '👖', '✨'];

        return array_map(function ($term, $i) use ($genderTerm, $labels, $icons) {
            return [
                'url'   => 'https://www.pinterest.com/search/pins/?q=' . urlencode("$term $genderTerm") . '&rs=typed',
                'label' => $labels[$i],
                'icon'  => $icons[$i],
                'query' => "$term $genderTerm",
            ];
        }, $seasonTerms[$season], array_keys($seasonTerms[$season]));
    }
}
