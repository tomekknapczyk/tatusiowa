@extends('_layouts.master')

@section('body')
<section class="w-full md:w-3/4 mx-auto pt-10 max-w-5xl pb-10 px-4">
    <div class="flex items-center justify-between flex-wrap flex-col-reverse sm:flex-row">
        <img class="w-full sm:w-1/3" src="{{ $page->logo }}" />
        <div class="w-full sm:w-2/3 text-xl text-center px-2">
            <h1 class="{{ $page->getFilename() }} m-0">{{ $page->title }}</h1>
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
