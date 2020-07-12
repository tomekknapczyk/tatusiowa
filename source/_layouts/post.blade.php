@extends('_layouts.master')

@section('body')
    <section class="relative">
        @if($page->cover_image)
            <img srcset="{{ $page->cloudinary }}c_scale,q_75,w_1024/{{ $page->cloudinaryId }}/covers/{{ $page->slide }} 1024w,
                         {{ $page->cloudinary }}c_scale,q_75,w_1920/{{ $page->cloudinaryId }}/covers/{{ $page->slide }} 1920w"
                 sizes="75vw,
                        (min-width: 1280px) 100vw"
                 src="{{ $page->cloudinary }}c_scale,q_75,w_1920/{{ $page->cloudinaryId }}/covers/{{ $page->slide }}" 
                 alt="{{ $page->title }}" class="sm:block h-60 xxl:h-70 max-h-700 min-h-500 w-full object-cover relative z-0 ">
        @endif
    </section>
    <section class="bg-gray-900 w-full pt-2 pb-5 flex items-center justify-between flex-wrap px-8 xl:px-20 xxl:px-64 shadow-md">
        <div class="w-full xl:w-2/3">
            <h1 class="leading-normal mt-0 mb-1 font-semibold text-white text-xl sm:text-2xl xl:text-3xl xxl:text-5xl">{{ $page->title }}</h1>
            <p class="text-white text-sm lg:text-lg xl:text-2xl font-light md:mt-0 mb-4">
                Opublikowane przez <span class="text-gray-500 font-normal">{{ $page->author }}</span> w dniu <span class="text-gray-500 font-normal">{{ strftime("%e %B %Y", $page->date) }}</span>
            </p>
            @foreach($page->cat($categories) as $category)
                <a href="{{ $category->getUrl() }}" class="text-sm inline-block leading-none capitalize text-white hover:text-white px-5 py-2 rounded-lg mr-2 bg-{{ $category->getFilename() }}">{{ $category->title }}</a>
            @endforeach
        </div>
        <div class="w-full xl:w-1/3 xl:pl-10 mt-2 xl:mt-0 flex items-center justify-start xl:justify-end flex-wrap">
            @foreach($page->miejsca($places) as $place)
                <div class="w-auto flex items-center justify-start flex-wrap">
                    <a href="{{ $place->getUrl() }}">
                        <img src="{{ $page->cloudinary }}c_scale,q_80,w_128/{{ $page->cloudinaryId }}/places/{{ $place->cover_image }}" alt="{{ $place->title }}" class="w-10 h-10 xl:w-16 xl:h-16 object-cover rounded-full overflow-hidden shadow-lg">
                    </a>
                    <a href="{{ $place->getUrl() }}" class="text-lg md:text-xl m-0 ml-3 text-white mr-5">{{ $place->title }}</a>
                </div>
            @endforeach
        </div>
    </section>

    <section class="w-5/6 mx-auto pt-10 max-w-4xl">
        <div class="mb-10 text-lg lg:text-xl font-light leading-relaxed post-content">
            @yield('content')
        </div>
        <h4 class="text-right">Udostępnij post innym</h4>
        <div class="social flex flex-wrap items-center justify-end pb-5">
            <a target="_blank" rel="tooltip" data-original-title="Udostępnij na Facebooku" class="mr-4" href="https://www.facebook.com/sharer.php?u={{ $page->getUrl() }}">
                <img src="/assets/img/facebook.svg" class="w-12 h-12 object-contain" />
            </a>
            <a target="_blank" rel="tooltip" data-original-title="Udostępnij na Twitterze" class="mr-4" href="http://twitter.com/share?url={{ $page->getUrl() }}&amp;text={{ $page->title }}">
                <img src="/assets/img/twitter.svg" class="w-12 h-12 object-contain" />
            </a>
            <a rel="tooltip" data-original-title=" Share on Email" class="mr-4" href="mailto:?subject=Balaton%20%26#8211;%20Alsóörs&amp;body={{ $page->getUrl() }}">
                <img src="/assets/img/gmail.svg" class="w-12 h-12 object-contain" />
            </a>
        </div>
        <h3 class="text-center border-b border-blue-lighter mb-8 pb-3">Czytaj dalej</h3>
        <nav class="flex justify-between text-sm md:text-base flex-wrap">
            @if ($next = $page->getNext())
                <div class="flex w-full sm:w-5/12 items-stretch justify-between flex-row-reverse flex-wrap mb-10 shadow-lg">
                    <div class="w-full md:w-1/3">
                        <a href="{{ $next->getUrl() }}" title="Czytaj dalej - {{ $next->title }}">
                            <img src="{{ $next->cloudinary }}c_scale,q_80,w_300/{{ $next->cloudinaryId }}/covers/{{ $next->slide }}" alt="{{ $next->title }}" class="sm:block h-32 md:h-full w-full object-cover lazy" loading="lazy">
                        </a>
                    </div>
                    <div class="flex flex-col mb-4 w-full md:w-2/3 px-3 justify-between">
                        <div>
                            <p class="text-sm md:text-base text-grey-darker text-gray-500 my-2">{{ strftime("%e %B %Y", $next->date) }}</p>

                            <a class="text-lg md:text-base block" href="{{ $next->getUrl() }}" title="Starszy Post: {{ $next->title }}">
                                &LeftArrow; {{ $next->title }}
                            </a>
                        </div>
                    </div>
                </div>
            @endif

            @if ($previous = $page->getPrevious())
                <div class="flex w-full sm:w-5/12 items-stretch justify-between flex-wrap mb-10 shadow-lg">
                    <div class="w-full md:w-1/3">
                        <a href="{{ $previous->getUrl() }}" title="Czytaj dalej - {{ $previous->title }}">
                            <img src="{{ $previous->cloudinary }}c_scale,q_80,w_300/{{ $previous->cloudinaryId }}/covers/{{ $previous->slide }}" alt="{{ $previous->title }}" class="sm:block h-32 md:h-full w-full object-cover lazy" loading="lazy">
                        </a>
                    </div>
                    <div class="flex flex-col mb-4 w-full md:w-2/3 px-3 justify-between">
                        <div>
                            <p class="text-sm md:text-base text-grey-darker text-gray-500 my-2 text-right">{{ strftime("%e %B %Y", $previous->date) }}</p>

                            <a class="text-lg md:text-base block text-right" href="{{ $previous->getUrl() }}" title="Starszy Post: {{ $previous->title }}">
                                {{ $previous->title }} &RightArrow;
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        </nav>
    </section>
@endsection
