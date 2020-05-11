---
title: "Kontakt"
description: "Skontaktuj się z nami"
---
@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Contact {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Get in touch with {{ $page->siteName }}" />
@endpush

@section('body')
<section class="w-full md:w-3/4 mx-auto pt-10 max-w-5xl pb-10 px-4">
    <h1>Kontakt</h1>

    <hr class="border-b border-gray-300 my-6">

    <div class="flex items-center justify-between flex-wrap">
        <img class="w-full sm:w-1/2" src="/assets/img/kontakt.svg" />
        <div class="w-full sm:w-1/2 lg:text-xl text-center px-2">
            <p>Jeżeli chciałbyś się z nami skontaktować to pisz na <a href="mailto:tomekknapczyk@gmail.com">tomekknapczyk@gmail.com</a></p>
        </div>
    </div>
</section>
@stop
