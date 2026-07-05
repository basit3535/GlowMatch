@extends('layouts.app')

@section('page_style')
    <x-season-style />
    <style>
        /* ══════════════════════════════════════════════════════════
           Blog Post Styles
        ══════════════════════════════════════════════════════════ */
        .post-hero {
            padding: 60px 24px 40px;
            background: linear-gradient(180deg, #F2EDE6 0%, #FAF8F5 100%);
            border-bottom: 1px solid #E8E2D9;
        }

        .post-container {
            max-width: 820px;
            margin: 0 auto;
        }

        .post-meta-top {
            display: flex;
            gap: 16px;
            align-items: center;
            font-size: 13px;
            color: #8A7A6A;
            margin-bottom: 16px;
        }

        .post-meta-top .category {
            background: #F5EDE0;
            padding: 4px 14px;
            border-radius: 20px;
            font-weight: 500;
            color: #C4956A;
            font-size: 11px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            text-decoration: none;
        }

        .post-meta-top .category:hover {
            background: #EDE0CC;
        }

        .post-meta-top .date {
            font-weight: 300;
        }

        .post-title {
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-size: clamp(32px, 4.5vw, 48px);
            font-weight: 400;
            color: #1A1410;
            margin: 0 0 16px;
            line-height: 1.15;
            letter-spacing: -0.5px;
        }

        .post-author {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 24px;
        }

        .post-author-avatar {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: linear-gradient(135deg, #C4956A, #A07850);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 500;
            font-size: 16px;
        }

        .post-author-name {
            font-weight: 500;
            color: #1A1410;
            font-size: 14px;
        }

        .post-author-role {
            font-size: 12px;
            color: #8A7A6A;
        }

        .post-featured-image {
            width: 100%;
            border-radius: 18px;
            overflow: hidden;
            margin: 0 0 32px;
            background: #E8E2D9;
            aspect-ratio: 16/9;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 64px;
            color: #C4956A;
        }

        .post-featured-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .post-content {
            font-size: 17px;
            line-height: 1.8;
            color: #2A2420;
        }

        .post-content h2 {
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-size: 28px;
            font-weight: 400;
            color: #1A1410;
            margin: 40px 0 16px;
        }

        .post-content h3 {
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-size: 22px;
            font-weight: 400;
            color: #1A1410;
            margin: 32px 0 12px;
        }

        .post-content p {
            margin-bottom: 20px;
        }

        .post-content ul,
        .post-content ol {
            margin-bottom: 20px;
            padding-left: 24px;
        }

        .post-content li {
            margin-bottom: 8px;
        }

        .post-content blockquote {
            border-left: 4px solid #C4956A;
            padding: 16px 24px;
            margin: 28px 0;
            background: #F5EDE0;
            border-radius: 0 12px 12px 0;
            font-style: italic;
            color: #4A3A2A;
        }

        .post-content img {
            max-width: 100%;
            border-radius: 12px;
            margin: 24px 0;
        }

        .post-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin: 40px 0 32px;
            padding-top: 32px;
            border-top: 1px solid #E8E2D9;
        }

        .post-tags .tag {
            background: #FAF8F5;
            border: 1px solid #E8E2D9;
            padding: 4px 14px;
            border-radius: 20px;
            font-size: 12px;
            color: #5A4A3A;
            text-decoration: none;
            transition: all 0.2s;
        }

        .post-tags .tag:hover {
            border-color: #C4956A;
            color: #C4956A;
        }

        /* ─── Related Posts ─── */
        .related-posts {
            margin-top: 60px;
            padding-top: 40px;
            border-top: 1px solid #E8E2D9;
        }

        .related-posts-title {
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-size: 28px;
            font-weight: 400;
            color: #1A1410;
            margin: 0 0 24px;
            text-align: center;
        }

        .related-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 24px;
        }

        .related-card {
            background: #FFFFFF;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid #E8E2D9;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .related-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
            border-color: #C4956A;
        }

        .related-card-image {
            width: 100%;
            aspect-ratio: 16/9;
            background: #F2EDE6;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: #C4956A;
            overflow: hidden;
        }

        .related-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .related-card-body {
            padding: 16px 20px 20px;
        }

        .related-card-title {
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-size: 18px;
            font-weight: 400;
            color: #1A1410;
            margin: 0 0 6px;
            line-height: 1.25;
        }

        .related-card:hover .related-card-title {
            color: #C4956A;
        }

        .related-card-excerpt {
            font-size: 13px;
            color: #5A4A3A;
            line-height: 1.5;
            margin: 0;
        }

        /* ─── Navigation ─── */
        .post-nav {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-top: 40px;
            padding-top: 32px;
            border-top: 1px solid #E8E2D9;
        }

        .post-nav a {
            color: #5A4A3A;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .post-nav a:hover {
            color: #C4956A;
        }

        /* ─── Responsive ─── */
        @media (max-width: 768px) {
            .post-hero {
                padding: 40px 16px 28px;
            }

            .post-content {
                font-size: 16px;
            }

            .related-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endsection

@section('content')
    <div class="page" id="page-blog-post">

        {{-- ─── HERO ─── --}}
        <div class="post-hero">
            <div class="post-container">
                <div class="post-meta-top">
                    <a href="{{ route('blog.category', $post->category->slug ?? '') }}" class="category">
                        {{ $post->category->name ?? 'Style Tips' }}
                    </a>
                    <span class="date">{{ $post->published_at ? $post->published_at->format('M d, Y') : $post->created_at->format('M d, Y') }}</span>
                    <span class="date">{{ $post->reading_time ?? 4 }} min read</span>
                </div>

                <h1 class="post-title">{{ $post->title }}</h1>

                <div class="post-author">
                    <div class="post-author-avatar">
                        {{ $post->author ? substr($post->author->name, 0, 1) : 'G' }}
                    </div>
                    <div>
                        <div class="post-author-name">{{ $post->author->name ?? 'GlowMatch Team' }}</div>
                        <div class="post-author-role">{{ $post->author->role ?? 'Colour Analyst' }}</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ─── CONTENT ─── --}}
        <div class="post-container" style="padding:40px 24px 60px;">
            @if($post->featured_image)
                <div class="post-featured-image">
                    <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}">
                </div>
            @endif

            <div class="post-content">
                {!! $post->content !!}
            </div>

            {{-- Tags --}}
            @if($post->tags->count())
                <div class="post-tags">
                    @foreach($post->tags as $tag)
                        <a href="{{ route('blog.tag', $tag->slug) }}" class="tag">#{{ $tag->name }}</a>
                    @endforeach
                </div>
            @endif

            {{-- Share / Navigation --}}
            <div class="post-nav">
                @if($prevPost)
                    <a href="{{ route('blog.show', $prevPost->slug) }}">← Previous Article</a>
                @else
                    <span></span>
                @endif

                <a href="{{ route('blog.index') }}">All Articles</a>

                @if($nextPost)
                    <a href="{{ route('blog.show', $nextPost->slug) }}">Next Article →</a>
                @else
                    <span></span>
                @endif
            </div>

            {{-- Related Posts --}}
            @if($relatedPosts->count())
                <div class="related-posts">
                    <h3 class="related-posts-title">You might also like</h3>
                    <div class="related-grid">
                        @foreach($relatedPosts as $related)
                            <a href="{{ route('blog.show', $related->slug) }}" class="related-card">
                                <div class="related-card-image">
                                    @if($related->featured_image)
                                        <img src="{{ asset('storage/' . $related->featured_image) }}" alt="{{ $related->title }}">
                                    @else
                                        <span>📖</span>
                                    @endif
                                </div>
                                <div class="related-card-body">
                                    <h4 class="related-card-title">{{ $related->title }}</h4>
                                    <p class="related-card-excerpt">{{ Str::limit(strip_tags($related->content), 80) }}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>

    </div>
@endsection
