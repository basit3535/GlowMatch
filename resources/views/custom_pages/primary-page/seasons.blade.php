@extends('layouts.app')
@section('page_style')
    <x-season-style />
@endsection
@section('content')
    <div class="page" id="page-seasons">
        <div class="hub-hero">
            <div class="lbl" style="color:#C97B5A;margin-bottom:16px;">
                {{ $data->content->seasons_hero_label->value ?? '' }}</div>
            <h1 class="hub-h1">{!! $data->content->seasons_hero_h1->value ?? '' !!}</h1>
            <p class="hub-sub">{{ $data->content->seasons_hero_sub->value ?? '' }}</p>

            <div class="hub-tabs">
                <div class="hub-tab active" data-season="all" onclick="filterHub('all',this)">
                    {{ $data->content->tab_all->value ?? '' }}</div>
                <div class="hub-tab" data-season="spring" onclick="filterHub('spring',this)">
                    {{ $data->content->tab_spring->value ?? '' }}</div>
                <div class="hub-tab" data-season="summer" onclick="filterHub('summer',this)">
                    {{ $data->content->tab_summer->value ?? '' }}</div>
                <div class="hub-tab" data-season="autumn" onclick="filterHub('autumn',this)">
                    {{ $data->content->tab_autumn->value ?? '' }}</div>
                <div class="hub-tab" data-season="winter" onclick="filterHub('winter',this)">
                    {{ $data->content->tab_winter->value ?? '' }}</div>
            </div>
        </div>

        <div class="season-cards-grid" id="season-cards-grid">
            <!-- SPRING -->
            <a href="{{ route('show.seasons.custom_pages', ['slug' => 'light-spring']) }}">
                <div class="season-hub-card" data-group="spring">
                    <div class="shc-top light-spring-bg" style="color:#3C1800;">
                        <div class="shc-label">{{ $data->content->season_light_spring_label->value ?? '' }}</div>
                        <div class="shc-name">{{ $data->content->season_light_spring_name->value ?? '' }}</div>
                        <div class="shc-sub">{{ $data->content->season_light_spring_sub->value ?? '' }}</div>
                        <div class="shc-dots">
                            <div class="shc-dot" style="background:#FFD8A0;"></div>
                            <div class="shc-dot" style="background:#F5C090;"></div>
                            <div class="shc-dot" style="background:#E8A870;"></div>
                            <div class="shc-dot" style="background:#D4C080;"></div>
                        </div>
                    </div>
                    <div class="shc-body">
                        <div class="shc-desc">{{ $data->content->season_light_spring_desc->value ?? '' }}</div>
                        <div class="shc-btn" style="color:#C97B3A;">
                            {{ $data->content->season_light_spring_btn->value ?? '' }}</div>
                    </div>
                </div>
            </a>
            <a href="{{ route('show.seasons.custom_pages', ['slug' => 'true-spring']) }}">
                <div class="season-hub-card" data-group="spring">
                    <div class="shc-top true-spring-bg" style="color:#3C1800;">
                        <div class="shc-label">{{ $data->content->season_true_spring_label->value ?? '' }}</div>
                        <div class="shc-name">{{ $data->content->season_true_spring_name->value ?? '' }}</div>
                        <div class="shc-sub">{{ $data->content->season_true_spring_sub->value ?? '' }}</div>
                        <div class="shc-dots">
                            <div class="shc-dot" style="background:#F4A460;"></div>
                            <div class="shc-dot" style="background:#FFD700;"></div>
                            <div class="shc-dot" style="background:#FF7F50;"></div>
                            <div class="shc-dot" style="background:#90EE90;"></div>
                        </div>
                    </div>
                    <div class="shc-body">
                        <div class="shc-desc">{{ $data->content->season_true_spring_desc->value ?? '' }}</div>
                        <div class="shc-btn" style="color:#D4714A;">
                            {{ $data->content->season_true_spring_btn->value ?? '' }}</div>
                    </div>
                </div>
            </a>
            <a href="{{ route('show.seasons.custom_pages', ['slug' => 'warm-spring']) }}">
                <div class="season-hub-card" data-group="spring">
                    <div class="shc-top warm-spring-bg" style="color:#fff;">
                        <div class="shc-label">{{ $data->content->season_warm_spring_label->value ?? '' }}</div>
                        <div class="shc-name">{{ $data->content->season_warm_spring_name->value ?? '' }}</div>
                        <div class="shc-sub">{{ $data->content->season_warm_spring_sub->value ?? '' }}</div>
                        <div class="shc-dots">
                            <div class="shc-dot" style="background:#E8855A;"></div>
                            <div class="shc-dot" style="background:#D4A843;"></div>
                            <div class="shc-dot" style="background:#8B7035;"></div>
                            <div class="shc-dot" style="background:#C06030;"></div>
                        </div>
                    </div>
                    <div class="shc-body">
                        <div class="shc-desc">{{ $data->content->season_warm_spring_desc->value ?? '' }}</div>
                        <div class="shc-btn" style="color:#B85A38;">
                            {{ $data->content->season_warm_spring_btn->value ?? '' }}</div>
                    </div>
                </div>
            </a>

            <!-- SUMMER -->
            <a href="{{ route('show.seasons.custom_pages', ['slug' => 'light-summer']) }}">
                <div class="season-hub-card" data-group="summer">
                    <div class="shc-top light-summer-bg" style="color:#1A2A4A;">
                        <div class="shc-label">{{ $data->content->season_light_summer_label->value ?? '' }}</div>
                        <div class="shc-name">{{ $data->content->season_light_summer_name->value ?? '' }}</div>
                        <div class="shc-sub">{{ $data->content->season_light_summer_sub->value ?? '' }}</div>
                        <div class="shc-dots">
                            <div class="shc-dot" style="background:#C8D8F0;"></div>
                            <div class="shc-dot" style="background:#D8C0D8;"></div>
                            <div class="shc-dot" style="background:#B8D0C0;"></div>
                            <div class="shc-dot" style="background:#E0D0E0;"></div>
                        </div>
                    </div>
                    <div class="shc-body">
                        <div class="shc-desc">{{ $data->content->season_light_summer_desc->value ?? '' }}</div>
                        <div class="shc-btn" style="color:#6878B4;">
                            {{ $data->content->season_light_summer_btn->value ?? '' }}</div>
                    </div>
                </div>
            </a>
            <a href="{{ route('show.seasons.custom_pages', ['slug' => 'true-summer']) }}">
                <div class="season-hub-card" data-group="summer">
                    <div class="shc-top true-summer-bg" style="color:#F8F4FF;">
                        <div class="shc-label">{{ $data->content->season_true_summer_label->value ?? '' }}</div>
                        <div class="shc-name">{{ $data->content->season_true_summer_name->value ?? '' }}</div>
                        <div class="shc-sub">{{ $data->content->season_true_summer_sub->value ?? '' }}</div>
                        <div class="shc-dots">
                            <div class="shc-dot" style="background:#C8A2C8;"></div>
                            <div class="shc-dot" style="background:#8FA8C8;"></div>
                            <div class="shc-dot" style="background:#D8BFD8;"></div>
                            <div class="shc-dot" style="background:#88A4BC;"></div>
                        </div>
                    </div>
                    <div class="shc-body">
                        <div class="shc-desc">{{ $data->content->season_true_summer_desc->value ?? '' }}</div>
                        <div class="shc-btn" style="color:#6880A8;">
                            {{ $data->content->season_true_summer_btn->value ?? '' }}</div>
                    </div>
                </div>
            </a>
            <a href="{{ route('show.seasons.custom_pages', ['slug' => 'soft-summer']) }}">
                <div class="season-hub-card" data-group="summer">
                    <div class="shc-top soft-summer-bg" style="color:#F0EEF8;">
                        <div class="shc-label">{{ $data->content->season_soft_summer_label->value ?? '' }}</div>
                        <div class="shc-name">{{ $data->content->season_soft_summer_name->value ?? '' }}</div>
                        <div class="shc-sub">{{ $data->content->season_soft_summer_sub->value ?? '' }}</div>
                        <div class="shc-dots">
                            <div class="shc-dot" style="background:#B8C0CC;"></div>
                            <div class="shc-dot" style="background:#A8B0BC;"></div>
                            <div class="shc-dot" style="background:#989090;"></div>
                            <div class="shc-dot" style="background:#B0A8A0;"></div>
                        </div>
                    </div>
                    <div class="shc-body">
                        <div class="shc-desc">{{ $data->content->season_soft_summer_desc->value ?? '' }}</div>
                        <div class="shc-btn" style="color:#7880A0;">
                            {{ $data->content->season_soft_summer_btn->value ?? '' }}</div>
                    </div>
                </div>
            </a>

            <!-- AUTUMN -->
            <a href="{{ route('show.seasons.custom_pages', ['slug' => 'soft-autumn']) }}">
                <div class="season-hub-card" data-group="autumn">
                    <div class="shc-top soft-autumn-bg" style="color:#FFF4E8;">
                        <div class="shc-label">{{ $data->content->season_soft_autumn_label->value ?? '' }}</div>
                        <div class="shc-name">{{ $data->content->season_soft_autumn_name->value ?? '' }}</div>
                        <div class="shc-sub">{{ $data->content->season_soft_autumn_sub->value ?? '' }}</div>
                        <div class="shc-dots">
                            <div class="shc-dot" style="background:#BC8F8F;"></div>
                            <div class="shc-dot" style="background:#A0917E;"></div>
                            <div class="shc-dot" style="background:#8FBC8F;"></div>
                            <div class="shc-dot" style="background:#C4A882;"></div>
                        </div>
                    </div>
                    <div class="shc-body">
                        <div class="shc-desc">{{ $data->content->season_soft_autumn_desc->value ?? '' }}</div>
                        <div class="shc-btn" style="color:#906038;">
                            {{ $data->content->season_soft_autumn_btn->value ?? '' }}</div>
                    </div>
                </div>
            </a>
            <a href="{{ route('show.seasons.custom_pages', ['slug' => 'true-autumn']) }}">
                <div class="season-hub-card" data-group="autumn">
                    <div class="shc-top true-autumn-bg" style="color:#FFF0D8;">
                        <div class="shc-label">{{ $data->content->season_true_autumn_label->value ?? '' }}</div>
                        <div class="shc-name">{{ $data->content->season_true_autumn_name->value ?? '' }}</div>
                        <div class="shc-sub">{{ $data->content->season_true_autumn_sub->value ?? '' }}</div>
                        <div class="shc-dots">
                            <div class="shc-dot" style="background:#C97B5A;"></div>
                            <div class="shc-dot" style="background:#D4A856;"></div>
                            <div class="shc-dot" style="background:#556B2F;"></div>
                            <div class="shc-dot" style="background:#8B4513;"></div>
                        </div>
                    </div>
                    <div class="shc-body">
                        <div class="shc-desc">{{ $data->content->season_true_autumn_desc->value ?? '' }}</div>
                        <div class="shc-btn" style="color:#904820;">
                            {{ $data->content->season_true_autumn_btn->value ?? '' }}</div>
                    </div>
                </div>
            </a>
            <a href="{{ route('show.seasons.custom_pages', ['slug' => 'dark-autumn']) }}">
                <div class="season-hub-card" data-group="autumn">
                    <div class="shc-top dark-autumn-bg" style="color:#FFE8D0;">
                        <div class="shc-label">{{ $data->content->season_dark_autumn_label->value ?? '' }}</div>
                        <div class="shc-name">{{ $data->content->season_dark_autumn_name->value ?? '' }}</div>
                        <div class="shc-sub">{{ $data->content->season_dark_autumn_sub->value ?? '' }}</div>
                        <div class="shc-dots">
                            <div class="shc-dot" style="background:#8B4A20;"></div>
                            <div class="shc-dot" style="background:#703820;"></div>
                            <div class="shc-dot" style="background:#4A2810;"></div>
                            <div class="shc-dot" style="background:#604028;"></div>
                        </div>
                    </div>
                    <div class="shc-body">
                        <div class="shc-desc">{{ $data->content->season_dark_autumn_desc->value ?? '' }}</div>
                        <div class="shc-btn" style="color:#703818;">
                            {{ $data->content->season_dark_autumn_btn->value ?? '' }}</div>
                    </div>
                </div>
            </a>

            <!-- WINTER -->
            <a href="{{ route('show.seasons.custom_pages', ['slug' => 'dark-winter']) }}">
                <div class="season-hub-card" data-group="winter">
                    <div class="shc-top dark-winter-bg" style="color:#C0C8E0;">
                        <div class="shc-label">{{ $data->content->season_dark_winter_label->value ?? '' }}</div>
                        <div class="shc-name">{{ $data->content->season_dark_winter_name->value ?? '' }}</div>
                        <div class="shc-sub">{{ $data->content->season_dark_winter_sub->value ?? '' }}</div>
                        <div class="shc-dots">
                            <div class="shc-dot" style="background:#1C2040;"></div>
                            <div class="shc-dot" style="background:#2A1020;"></div>
                            <div class="shc-dot" style="background:#102030;"></div>
                            <div class="shc-dot" style="background:#3A1818;"></div>
                        </div>
                    </div>
                    <div class="shc-body">
                        <div class="shc-desc">{{ $data->content->season_dark_winter_desc->value ?? '' }}</div>
                        <div class="shc-btn" style="color:#2A3060;">
                            {{ $data->content->season_dark_winter_btn->value ?? '' }}</div>
                    </div>
                </div>
            </a>
            <a href="{{ route('show.seasons.custom_pages', ['slug' => 'true-winter']) }}">
                <div class="season-hub-card" data-group="winter">
                    <div class="shc-top true-winter-bg" style="color:#E0E8FF;">
                        <div class="shc-label">{{ $data->content->season_true_winter_label->value ?? '' }}</div>
                        <div class="shc-name">{{ $data->content->season_true_winter_name->value ?? '' }}</div>
                        <div class="shc-sub">{{ $data->content->season_true_winter_sub->value ?? '' }}</div>
                        <div class="shc-dots">
                            <div class="shc-dot" style="background:#00008B;"></div>
                            <div class="shc-dot" style="background:#8B0000;"></div>
                            <div class="shc-dot" style="background:#4B0082;"></div>
                            <div class="shc-dot" style="background:#F5F5F5;"></div>
                        </div>
                    </div>
                    <div class="shc-body">
                        <div class="shc-desc">{{ $data->content->season_true_winter_desc->value ?? '' }}</div>
                        <div class="shc-btn" style="color:#2030A0;">
                            {{ $data->content->season_true_winter_btn->value ?? '' }}</div>
                    </div>
                </div>
            </a>
            <a href="{{ route('show.seasons.custom_pages', ['slug' => 'bright-winter']) }}">
                <div class="season-hub-card" data-group="winter">
                    <div class="shc-top bright-winter-bg" style="color:#E8F4FF;">
                        <div class="shc-label">{{ $data->content->season_bright_winter_label->value ?? '' }}</div>
                        <div class="shc-name">{{ $data->content->season_bright_winter_name->value ?? '' }}</div>
                        <div class="shc-sub">{{ $data->content->season_bright_winter_sub->value ?? '' }}</div>
                        <div class="shc-dots">
                            <div class="shc-dot" style="background:#0000FF;"></div>
                            <div class="shc-dot" style="background:#FF0080;"></div>
                            <div class="shc-dot" style="background:#00C0FF;"></div>
                            <div class="shc-dot" style="background:#00FF80;"></div>
                        </div>
                    </div>
                    <div class="shc-body">
                        <div class="shc-desc">{{ $data->content->season_bright_winter_desc->value ?? '' }}</div>
                        <div class="shc-btn" style="color:#0048C0;">
                            {{ $data->content->season_bright_winter_btn->value ?? '' }}</div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Overview comparison -->
        <div style="padding:0 6% 80px;">
            <h2 class="h2" style="margin-bottom:8px;">{!! $data->content->overview_h2->value ?? '' !!}</h2>
            <p class="body-text" style="margin-bottom:40px;max-width:560px;">
                {{ $data->content->overview_sub->value ?? '' }}</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5">

                <!-- Spring -->
                <div class="rounded-[18px] overflow-hidden border border-[#E8DDD6]">
                    <div class="bg-[linear-gradient(145deg,#E8C080,#D49050)] p-5 text-[#3C1800]">
                        <div class="font-['Cormorant_Garamond'] text-[20px] font-bold">
                            {{ $data->content->overview_spring_label->value ?? '' }}</div>
                        <div class="text-[12px] opacity-65 mt-1">{{ $data->content->overview_spring_sub->value ?? '' }}
                        </div>
                    </div>

                    <div class="p-4 bg-[#FFF9F4] flex flex-col gap-2">
                        <a href="{{ route('show.seasons.custom_pages', ['slug' => 'light-spring']) }}"
                            class="px-4 py-2.5 border border-[#E8DDD6] rounded-[10px] text-[13px] font-medium transition-all duration-150 hover:bg-[#FDF0EA]">
                            Light Spring Colour Season →
                        </a>

                        <a href="{{ route('show.seasons.custom_pages', ['slug' => 'true-spring']) }}"
                            class="px-4 py-2.5 border border-[#E8DDD6] rounded-[10px] text-[13px] font-medium transition-all duration-150 hover:bg-[#FDF0EA]">
                            True Spring Colour Season →
                        </a>

                        <a href="{{ route('show.seasons.custom_pages', ['slug' => 'warm-spring']) }}"
                            class="px-4 py-2.5 border border-[#E8DDD6] rounded-[10px] text-[13px] font-medium transition-all duration-150 hover:bg-[#FDF0EA]">
                            Warm Spring Colour Season →
                        </a>
                    </div>
                </div>

                <!-- Summer -->
                <div class="rounded-[18px] overflow-hidden border border-[#E8DDD6]">
                    <div class="bg-[linear-gradient(145deg,#9AAAC8,#7A8AAC)] p-5 text-[#F8F4FF]">
                        <div class="font-['Cormorant_Garamond'] text-[20px] font-bold">
                            {{ $data->content->overview_summer_label->value ?? '' }}</div>
                        <div class="text-[12px] opacity-65 mt-1">{{ $data->content->overview_summer_sub->value ?? '' }}
                        </div>
                    </div>

                    <div class="p-4 bg-[#FFF9F4] flex flex-col gap-2">
                        <a href="{{ route('show.seasons.custom_pages', ['slug' => 'light-summer']) }}"
                            class="px-4 py-2.5 border border-[#E8DDD6] rounded-[10px] text-[13px] font-medium hover:bg-[#EDF0F8] transition-all duration-150">
                            Light Summer Colour Season →
                        </a>

                        <a href="{{ route('show.seasons.custom_pages', ['slug' => 'true-summer']) }}"
                            class="px-4 py-2.5 border border-[#E8DDD6] rounded-[10px] text-[13px] font-medium hover:bg-[#EDF0F8] transition-all duration-150">
                            True Summer Colour Season →
                        </a>

                        <a href="{{ route('show.seasons.custom_pages', ['slug' => 'soft-summer']) }}"
                            class="px-4 py-2.5 border border-[#E8DDD6] rounded-[10px] text-[13px] font-medium hover:bg-[#EDF0F8] transition-all duration-150">
                            Soft Summer Colour Season →
                        </a>
                    </div>
                </div>

                <!-- Autumn -->
                <div class="rounded-[18px] overflow-hidden border border-[#E8DDD6]">
                    <div class="bg-[linear-gradient(145deg,#B06030,#904820)] p-5 text-[#FFF0D8]">
                        <div class="font-['Cormorant_Garamond'] text-[20px] font-bold">
                            {{ $data->content->overview_autumn_label->value ?? '' }}</div>
                        <div class="text-[12px] opacity-65 mt-1">{{ $data->content->overview_autumn_sub->value ?? '' }}
                        </div>
                    </div>

                    <div class="p-4 bg-[#FFF9F4] flex flex-col gap-2">
                        <a href="{{ route('show.seasons.custom_pages', ['slug' => 'soft-autumn']) }}"
                            class="px-4 py-2.5 border border-[#E8DDD6] rounded-[10px] text-[13px] font-medium hover:bg-[#FDF0E8] transition-all duration-150">
                            Soft Autumn Colour Season →
                        </a>

                        <a href="{{ route('show.seasons.custom_pages', ['slug' => 'true-autumn']) }}"
                            class="px-4 py-2.5 border border-[#E8DDD6] rounded-[10px] text-[13px] font-medium hover:bg-[#FDF0E8] transition-all duration-150">
                            True Autumn Colour Season →
                        </a>

                        <a href="{{ route('show.seasons.custom_pages', ['slug' => 'dark-autumn']) }}"
                            class="px-4 py-2.5 border border-[#E8DDD6] rounded-[10px] text-[13px] font-medium hover:bg-[#FDF0E8] transition-all duration-150">
                            Dark Autumn Colour Season →
                        </a>
                    </div>
                </div>

                <!-- Winter -->
                <div class="rounded-[18px] overflow-hidden border border-[#E8DDD6]">
                    <div class="bg-[linear-gradient(145deg,#1C2848,#203060)] p-5 text-[#D0D8F0]">
                        <div class="font-['Cormorant_Garamond'] text-[20px] font-bold">
                            {{ $data->content->overview_winter_label->value ?? '' }}</div>
                        <div class="text-[12px] opacity-65 mt-1">{{ $data->content->overview_winter_sub->value ?? '' }}
                        </div>
                    </div>

                    <div class="p-4 bg-[#FFF9F4] flex flex-col gap-2">
                        <a href="{{ route('show.seasons.custom_pages', ['slug' => 'dark-winter']) }}"
                            class="px-4 py-2.5 border border-[#E8DDD6] rounded-[10px] text-[13px] font-medium hover:bg-[#E8E8F5] transition-all duration-150">
                            Dark Winter Colour Season →
                        </a>

                        <a href="{{ route('show.seasons.custom_pages', ['slug' => 'true-winter']) }}"
                            class="px-4 py-2.5 border border-[#E8DDD6] rounded-[10px] text-[13px] font-medium hover:bg-[#E8E8F5] transition-all duration-150">
                            True Winter Colour Season →
                        </a>

                        <a href="{{ route('show.seasons.custom_pages', ['slug' => 'bright-winter']) }}"
                            class="px-4 py-2.5 border border-[#E8DDD6] rounded-[10px] text-[13px] font-medium hover:bg-[#E8E8F5] transition-all duration-150">
                            Bright Winter Colour Season →
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('page_script')
    <script>
        function filterHub(group, el) {
            document.querySelectorAll('.hub-tab').forEach(t => t.classList.remove('active'));
            el.classList.add('active');
            document.querySelectorAll('.season-hub-card').forEach(c => {
                if (group === 'all' || c.dataset.group === group) {
                    c.style.display = 'block';
                } else {
                    c.style.display = 'none';
                }
            });
            const url = new URL(window.location.href);
            if (group === 'all') {
                url.searchParams.delete('season');
            } else {
                url.searchParams.set('season', group);
            }
            window.history.pushState({}, '', url);
        }

        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const seasonParam = urlParams.get('season');
            if (seasonParam && seasonParam !== 'all') {
                const targetTab = document.querySelector(`.hub-tab[data-season="${seasonParam}"]`);
                if (targetTab) {
                    targetTab.click();
                    targetTab.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }
            }
        });
    </script>
@endsection
