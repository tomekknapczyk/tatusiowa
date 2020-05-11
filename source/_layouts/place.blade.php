@extends('_layouts.master')

@section('body')
<section class="w-full md:w-3/4 mx-auto pt-10 max-w-5xl pb-10 px-4">
    <div class="flex items-center justify-center flex-wrap flex-col-reverse sm:flex-row">
        <img src="{{ $page->cloudinary }}c_scale,q_80,w_300/{{ $page->cloudinaryId }}/places/{{ $page->cover_image }}" alt="{{ $page->title }}" class="w-32 h-32 object-cover rounded-full overflow-hidden shadow-lg mr-4">
        <div class="flex-1 text-xl px-2">
            <h1 class="text-center sm:text-left {{ $page->getFilename() }} m-0">{{ $page->title }}</h1>
            @yield('content')
        </div>
    </div>
</section>
<section class="w-full md:w-3/4 mx-auto pt-10 max-w-5xl pb-5 px-8">
    @foreach ($page->posts($posts) as $post)
        @include('_components.post-preview-inline')
    @endforeach
</section>
@stop
