@extends('layouts.app')

@section('content')
    <div class="mt-[50px] bg-cream-light min-h-screen">
        {{-- Hero Section --}}
        <div class="relative bg-gradient-to-r from-amber-50 via-orange-50 to-rose-50 py-16 md:py-24">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto text-center">
                    <div
                        class="inline-flex items-center gap-2 bg-white/80 backdrop-blur-sm px-4 py-2 rounded-full text-sm text-amber-700 mb-6">
                        <span class="w-2 h-2 bg-amber-500 rounded-full"></span>
                        {{ $data->post->category->title ?? 'Style Guide' }}
                    </div>
                    <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl font-bold text-stone-800 mb-6 leading-tight">
                        {{ $data->post->title ?? 'Your Colour Season Style Guide' }}
                    </h1>
                    <div class="flex items-center justify-center gap-6 text-sm text-stone-500">
                        <span>By <span
                                class="text-amber-700 font-medium">{{ $data->post->author ?? 'GlowMatch Team' }}</span></span>
                        <span class="w-1 h-1 bg-stone-300 rounded-full"></span>
                        <span>{{ $data->post->created_at->format('F j, Y') ?? 'July 11, 2026' }}</span>
                        <span class="w-1 h-1 bg-stone-300 rounded-full"></span>
                        <span>{{ $data->post->read_time ?? '5 min read' }}</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Featured Image --}}
        @if ($data->post->featured_image ?? false)
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 -mt-8 relative z-10">
                <div class="max-w-4xl mx-auto">
                    <div class="rounded-2xl overflow-hidden shadow-xl border-4 border-white">
                        <img src="{{ $data->post->featured_image }}" alt="{{ $data->post->title }}"
                            class="w-full h-auto object-cover">
                    </div>
                </div>
            </div>
        @endif

        {{-- Blog Content --}}
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
            <div class="max-w-3xl mx-auto">
                {{-- Content blocks with styling --}}
                {!! $data->post->blog_content_1 !!}
                {!! $data->post->blog_content_2 !!}
                {!! $data->post->blog_content_3 !!}
                {!! $data->post->blog_content_4 !!}
                {!! $data->post->blog_content_5 !!}
            </div>
        </div>

        {{-- Author Bio --}}
        @if ($data->post->author_bio ?? false)
            <div class="border-t border-stone-100">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
                    <div class="max-w-3xl mx-auto flex items-start gap-6">
                        <div
                            class="w-16 h-16 rounded-full bg-gradient-to-br from-amber-200 to-orange-200 flex items-center justify-center text-2xl font-serif text-stone-600 flex-shrink-0">
                            {{ substr($data->post->author ?? 'G', 0, 1) }}
                        </div>
                        <div>
                            <h4 class="font-serif text-lg font-semibold text-stone-800">
                                {{ $data->post->author ?? 'GlowMatch Team' }}</h4>
                            <p class="text-stone-600 text-sm mt-1">
                                {{ $data->post->author_bio ?? 'Passionate about colour analysis and helping people discover their most confident style.' }}
                            </p>
                            <div class="flex gap-4 mt-3">
                                <a href="#" class="text-stone-400 hover:text-amber-600 transition-colors">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                    </svg>
                                </a>
                                <a href="#" class="text-stone-400 hover:text-amber-600 transition-colors">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1112.324 0 6.162 6.162 0 01-12.324 0zM12 16a4 4 0 110-8 4 4 0 010 8zm4.965-10.405a1.44 1.44 0 112.881.001 1.44 1.44 0 01-2.881-.001z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{-- Related Posts --}}
        @if ($data->related_posts ?? false)
            <div class="bg-stone-50/50">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16">
                    <div class="max-w-4xl mx-auto">
                        <h3 class="font-serif text-2xl font-bold text-stone-800 text-center mb-10">More from our <span
                                class="text-amber-600">Style Guide</span></h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            @foreach ($data->related_posts as $related)
                                <a href="{{ $related->url }}"
                                    class="group bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all border border-stone-100 hover:border-amber-200">
                                    @if ($related->image ?? false)
                                        <img src="{{ $related->image }}" alt="{{ $related->title }}"
                                            class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300">
                                    @endif
                                    <div class="p-4">
                                        <h4
                                            class="font-serif font-semibold text-stone-800 group-hover:text-amber-600 transition-colors line-clamp-2">
                                            {{ $related->title }}</h4>
                                        <p class="text-sm text-stone-500 mt-2">
                                            {{ $related->created_at->format('F j, Y') ?? '' }}</p>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
