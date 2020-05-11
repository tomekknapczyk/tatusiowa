@extends('_layouts.master')

@section('body')
    <section class="w-full mb-6 relative border-b">
        <div class="glide sm:h-70 sm:min-h-500 sm:max-h-700 w-full object-cover relative z-0">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides m-0 bg-gray-900">
                    @foreach ($posts->where('home_page', true) as $post)
                        @include('_components.post-slide')
                    @endforeach
                </ul>
            </div>
            <div class="glide__bullets" data-glide-el="controls[nav]">
                @foreach ($posts->where('home_page', true) as $post)
                    <button class="glide__bullet" data-glide-dir="={{ $loop->index }}" aria-label="slide_{{ $loop->index }}"></button>
                @endforeach
            </div>
        </div>
    </section>

    <section class="text-center py-8 xl:py-12 xxl:py-24 px-4 w-full xl:w-3/4 xxl:w-2/3 m-auto why xl:mt-24 xl:mb-20">
        <h3 class="text-5xl">Dlaczego to wszystko?</h3>
        <p class="text-xl text-gray-700">Ponieważ czas bardzo szybko mija, a pamięć jest zawodna.<br>Postanowiłem więc w ten sposób utrwalić wspólne rodzinne wyjazdy,<br>a także pomóc innym w znalezieniu pomysłu na to gdzie można spędzić miło czas z rodziną.</p>
    </section>

    <section class="flex items-stretch justify-around flex-wrap">
        @foreach($categories as $category)
            <div class="p-12 w-full md:w-1/3 xxl:w-1/4 hover:bg-gray-100 hover:shadow-lg">
                <a href="{{ $category->getUrl() }}">
                    <h2 class="{{ $category->getFilename() }} text-center mb-12">{{ $category->title }}</h2>
                    <img src="{{ $category->logo }}" alt={{ $category->title }} />
                </a>
            </div>
        @endforeach
    </section>

    <section>
        <h3 class="text-5xl text-center py-8">O nas</h3>

        <div class="flex items-center justify-around flex-wrap px-4 lg:px-20">
            <img src="/assets/img/family.svg" class="w-full lg:w-1/3 xl:w-1/2 mb-10" alt="o nas" />

            <div class="w-full lg:w-2/3 xl:w-1/2 lg:px-12">
                @foreach($members as $member)
                    <div class="w-full flex items-center justify-around flex-wrap mb-10">
                        <div class="w-full md:w-1/6 text-center">
                            <img data-src="{{ $page->cloudinary }}c_scale,q_80,w_200/{{ $page->cloudinaryId }}/members/{{ $member->cover_image }}" alt="{{ $member->title }}" class="w-24 lg:w-20 xxl:w-24 h-24 lg:h-20 xxl:h-24 object-cover rounded-full overflow-hidden shadow-lg m-auto lazy">
                        </div>
                        <div class="md:px-6 py-4 w-full md:w-5/6 text-center md:text-left">
                            <h4 class="font-bold text-xl m-0 mb-1">{{ $member->title }}</h4>
                            <p class="text-gray-700 m-0">
                                {{ $member->description }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <h3 class="text-5xl text-center py-8">Nasze miejsca</h3>

        <div class="flex items-center justify-around flex-wrap px-4 lg:px-20 flex-col-reverse lg:flex-row">

            <div class="w-full lg:w-2/3 xl:w-1/2 lg:px-12 flex items-center justify-around flex-wrap">
                @foreach($places as $place)
                    <div class="w-1/2 flex items-center justify-around flex-wrap mb-10">
                        <div class="w-full md:w-1/2 text-center">
                            <a href="{{ $place->getUrl() }}" class="font-bold text-xl m-0">
                                <img data-src="{{ $page->cloudinary }}c_scale,q_80,w_300/{{ $page->cloudinaryId }}/places/{{ $place->cover_image }}" alt="{{ $place->title }}" class="w-32 h-32 object-cover rounded-full overflow-hidden shadow-lg m-auto lazy">
                            </a>
                        </div>
                        <div class="px-2 py-4 w-full md:w-1/2 text-center md:text-left">
                            <a href="{{ $place->getUrl() }}" class="font-bold text-xl m-0">{{ $place->title }}</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <img src="/assets/img/mapa.svg" class="w-full lg:w-1/3 xl:w-1/2 mb-10" alt="mapa"/>
        </div>
    </section>

@stop
