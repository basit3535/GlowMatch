@extends('layouts.app')

@section('content')
<div class="mt-[90px]">
     <h1>Blog Post</h1>
    {{-- @dd($data) --}}
    {!! @$data->post->title !!}
</div>

@endsection
