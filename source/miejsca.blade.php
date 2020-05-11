---
title: "Miejsca"
description: "Tu znajdziesz odwiedzone przez nas miejsca"
---
@extends('_layouts.master')

@section('body')
<section class="w-full md:w-3/4 mx-auto pt-10 max-w-5xl pb-10 px-4">
    <div class="flex items-center justify-between flex-wrap flex-col-reverse sm:flex-row">
        <img class="w-full sm:w-1/3" src="/assets/img/mapa.svg" />
        <div class="w-full sm:w-2/3 text-xl text-center px-2">
            <h1 class="m-0 text-indigo-600">Miejsca</h1>
            <p>Tu znajdziesz odwiedzone przez nas miejsca</p>
        </div>
    </div>
</section>
<section class="w-full md:w-3/4 mx-auto pt-10 max-w-5xl pb-10 px-4 flex items-stretch justify-around flex-wrap mb-10">   
    @foreach($places as $place)
        <div class="w-full sm:w-1/2 md:w-1/4 text-center mb-6">
            <a href="{{ $place->getUrl() }}" class="font-bold text-xl m-0">
                <img src="{{ $page->cloudinary }}c_scale,q_80,w_300/{{ $page->cloudinaryId }}/places/{{ $place->cover_image }}" alt="{{ $place->title }}" class="w-32 h-32 object-cover rounded-full overflow-hidden shadow-lg m-auto mb-2">
                <span class="font-bold text-xl">{{ $place->title }}</span>
            </a>
        </div>        
    @endforeach
</section>
@stop