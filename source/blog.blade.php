---
title: "Blog"
pagination:
    collection: posts
    perPage: 8
---
@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }} Blog" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Lista postów dla {{ $page->siteName }}" />
@endpush

@section('body')
<section class="w-full md:w-3/4 mx-auto pt-10 max-w-5xl pb-10 px-4">
    <div class="flex items-center justify-between flex-wrap flex-col-reverse sm:flex-row">
        <img class="w-full sm:w-1/3" src="/assets/img/post.svg" />
        <div class="w-full sm:w-2/3 text-xl text-center px-2">
            <h1 class="m-0 text-red-500">Blog</h1>
            <p>Tu znajdziesz wszystkie wpisy</p>
        </div>
    </div>
</section>
<section class="w-full md:w-3/4 mx-auto pt-10 max-w-5xl pb-10 px-4">
    @foreach ($pagination->items as $post)
        @include('_components.post-preview-inline')
    @endforeach

    @if ($pagination->pages->count() > 1)
        <nav class="flex text-base my-8">
            @if ($previous = $pagination->previous)
                <a
                    href="{{ $previous }}"
                    title="Previous Page"
                    class="bg-grey-lighter hover:bg-grey-light rounded mr-3 px-5 py-3"
                >&LeftArrow;</a>
            @endif

            @foreach ($pagination->pages as $pageNumber => $path)
                <a
                    href="{{ $path }}"
                    title="Go to Page {{ $pageNumber }}"
                    class="bg-grey-lighter hover:bg-grey-light text-blue-darker rounded mr-3 px-5 py-3 {{ $pagination->currentPage == $pageNumber ? 'text-blue-dark' : '' }}"
                >{{ $pageNumber }}</a>
            @endforeach

            @if ($next = $pagination->next)
                <a
                    href="{{ $next }}"
                    title="Next Page"
                    class="bg-grey-lighter hover:bg-grey-light rounded mr-3 px-5 py-3"
                >&RightArrow;</a>
            @endif
        </nav>
    @endif
</section>
@stop
