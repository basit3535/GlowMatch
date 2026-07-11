@extends('layouts.app')

@section('content')
<div class="mt-[90px]">
     <h1>Blog Post</h1>
    {{-- @dd($data) --}}
    {!! @$data->post->blog_content_1 !!} {!! @$data->post->blog_content_2 !!} {!! @$data->post->blog_content_3 !!} {!! @$data->post->blog_content_4 !!} {!! @$data->post->blog_content_5 !!}
</div>

@endsection
