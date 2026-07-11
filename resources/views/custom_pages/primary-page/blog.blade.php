@extends('layouts.app')

@section('content')
<div class="page" id="page-blog">
    <!-- Hero -->
    <div class="blog-hero">
        <span class="section-label">✦ Style & Colour Journal</span>
        <h1 class="section-h2">Inspiration for every season</h1>
        <p style="color:var(--muted);font-size:16px;max-width:480px;margin-top:10px;">
            Deep dives into colour theory, body type styling, makeup, and body-positive fashion advice.
        </p>
        <!-- Filters -->
        <div class="blog-filters" id="blog-filters">
            <a href="#" data-category="" class="bf-pill active">All Articles</a>
            <a href="#" data-category="colour-theory" class="bf-pill">Colour Theory</a>
            <a href="#" data-category="body-types" class="bf-pill">Body Types</a>
            <a href="#" data-category="makeup" class="bf-pill">Makeup</a>
            <a href="#" data-category="capsule-wardrobe" class="bf-pill">Capsule Wardrobe</a>
            <a href="#" data-category="style-tips" class="bf-pill">Style Tips</a>
        </div>
    </div>

    <!-- Blog Container -->
    <div id="blog-container">
        <div class="blog-layout">
            {{-- Featured Article --}}
            @if($data->featured)
                <div class="blog-featured-wrap">
                    <div class="blog-feat-img">
                        @if($data->featured->image)
                            <img src="{{ asset('storage/' . $data->featured->image->path) }}" alt="{{ $data->featured->title }}">
                        @else
                            🍂
                        @endif
                    </div>
                    <div class="blog-feat-body">
                        <span class="tag tag-rose" style="margin-bottom:14px;display:inline-block;">
                            {{ $data->featured->category->title ?? 'Colour Theory' }}
                        </span>
                        <div class="blog-feat-title">{{ $data->featured->title }}</div>
                        <div class="blog-feat-meta">
                            <span>{{ $data->featured->created_at->format('M d, Y') }}</span>
                            <span>·</span>
                            <span>{{ $data->featured->reading_time ?? '5 min read' }}</span>
                        </div>
                        <div class="blog-feat-excerpt">{{ Str::limit($data->featured->description, 150) }}</div>
                        <a href="{{ route('show.single_blog',['category' => $data->featured->category->slug, 'slug' => $data->featured->slug]) }}" class="btn-outline" style="font-size:13px;padding:10px 22px;">Read Article →</a>
                    </div>
                </div>
            @endif

            {{-- Blog Cards Grid --}}
            <div class="blog-cards" id="blog-cards">
                @forelse($data->blogs as $blog)
                 <a href="{{ route('show.single_blog',['category' => $blog->category->slug, 'slug' => $blog->slug]) }}">
                    <div class="blog-card">
                        <div class="bc-img" style="background:linear-gradient(145deg, #7B8EC9, #C8A2C8);">
                            @if($blog->image)
                                <img src="{{ asset('storage/' . $blog->image->path) }}" alt="{{ $blog->title }}">
                            @else
                                🌸
                            @endif
                        </div>
                        <div class="bc-body">
                            <div class="bc-tag">{{ $blog->category->title ?? 'Style Tips' }}</div>
                            <div class="bc-title">{{ $blog->title }}</div>
                            <div class="bc-excerpt">{{ Str::limit($blog->description, 100) }}</div>
                            <div class="bc-meta">
                                <span>{{ $blog->created_at->format('M d, Y') }}</span>
                                <span>·</span>
                                <span>{{ $blog->reading_time ?? '4 min' }}</span>
                            </div>
                        </div>
                    </div>
                    </a>
                @empty
                    <p>No blog posts yet.</p>
                @endforelse
            </div>

            {{-- Pagination --}}
            <div class="pagination-wrapper" id="pagination-wrapper">
                {{ $data->blogs->links() }}
            </div>
        </div>
    </div>

    <!-- Newsletter (static) -->
    <div class="newsletter-bar">
        <div class="nl-text">
            <h2 class="section-h2">Get colour tips in your inbox</h2>
            <p>New articles on seasons, styling, and colour every week.</p>
        </div>
        <div class="nl-form">
            <input class="nl-input" type="email" placeholder="your@email.com" />
            <button class="nl-btn" onclick="this.textContent='Subscribed ✓';this.style.background='var(--sage)';">Subscribe</button>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const container = document.getElementById('blog-container');
    const filters = document.getElementById('blog-filters');
    let currentCategory = '';

    // Fetch blogs via AJAX
    function fetchBlogs(category, page = 1) {
        const url = `{{ route('blog.fetch') }}?category=${encodeURIComponent(category)}&page=${page}`;
        fetch(url)
            .then(response => response.json())
            .then(data => {
                console.log('Fetched blogs:', data); // Debugging line
                // Rebuild the layout content
                const layout = container.querySelector('.blog-layout');
                let featuredHtml = data.featured ? generateFeaturedHtml(data.featured) : '';
                let cardsHtml = data.blogs.length
                    ? data.blogs.map(blog => generateCardHtml(blog)).join('')
                    : '<p>No blog posts found.</p>';

                layout.innerHTML = `
                    ${featuredHtml}
                    <div class="blog-cards" id="blog-cards">${cardsHtml}</div>
                    <div class="pagination-wrapper" id="pagination-wrapper">${data.pagination}</div>
                `;
            })
            .catch(error => console.error('Error fetching blogs:', error));
    }

    // Generate a single card HTML
    function generateCardHtml(blog) {
        const imageHtml = blog.image ? `<img src="/storage/${blog.image.path}" alt="${blog.title}">` : '🌸';
        const category = blog.category || 'Style Tips';
        const readingTime = blog.reading_time || '4 min';
        const date = new Date(blog.created_at).toLocaleDateString('en-US', { month: 'short', day: '2-digit', year: 'numeric' });
        return `
            <div class="blog-card">
                <div class="bc-img" style="background:linear-gradient(145deg, #7B8EC9, #C8A2C8);">${imageHtml}</div>
                <div class="bc-body">
                    <div class="bc-tag">${category}</div>
                    <div class="bc-title">${blog.title}</div>
                    <div class="bc-excerpt">${blog.description ? blog.description.substring(0, 100) + '...' : ''}</div>
                    <div class="bc-meta">
                        <span>${date}</span>
                        <span>·</span>
                        <span>${readingTime}</span>
                    </div>
                </div>
            </div>
        `;
    }

    // Generate featured article HTML
    function generateFeaturedHtml(featured) {
        const imageHtml = featured.image ? `<img src="/storage/${featured.image.path}" alt="${featured.title}">` : '🍂';
        const category = featured.category || 'Colour Theory';
        const readingTime = featured.reading_time || '5 min read';
        const date = new Date(featured.created_at).toLocaleDateString('en-US', { month: 'short', day: '2-digit', year: 'numeric' });
        return `
            <div class="blog-featured-wrap">
                <div class="blog-feat-img">${imageHtml}</div>
                <div class="blog-feat-body">
                    <span class="tag tag-rose" style="margin-bottom:14px;display:inline-block;">${category}</span>
                    <div class="blog-feat-title">${featured.title}</div>
                    <div class="blog-feat-meta">
                        <span>${date}</span>
                        <span>·</span>
                        <span>${readingTime}</span>
                    </div>
                    <div class="blog-feat-excerpt">${featured.description ? featured.description.substring(0, 150) + '...' : ''}</div>
                </div>
            </div>
        `;
    }

    // Filter click (event delegation)
    filters.addEventListener('click', function(e) {
        const link = e.target.closest('a');
        if (!link) return;
        e.preventDefault();
        const category = link.dataset.category;
        currentCategory = category;
        // Update active state
        filters.querySelectorAll('a').forEach(a => a.classList.remove('active'));
        link.classList.add('active');
        fetchBlogs(category, 1);
    });

    // Pagination click (event delegation)
    container.addEventListener('click', function(e) {
        const pageLink = e.target.closest('.pagination-wrapper a');
        if (!pageLink) return;
        e.preventDefault();
        const url = new URL(pageLink.href);
        const page = url.searchParams.get('page') || 1;
        fetchBlogs(currentCategory, page);
    });

    // Set initial category from URL query string
    const urlParams = new URLSearchParams(window.location.search);
    const initialCategory = urlParams.get('category') || '';
    if (initialCategory) {
        filters.querySelectorAll('a').forEach(a => {
            a.classList.toggle('active', a.dataset.category === initialCategory);
        });
        currentCategory = initialCategory;
    }
});
</script>
@endsection
