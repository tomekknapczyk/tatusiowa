<li class="glide__slide relative">
    @if($post->slide)
        <div class="flex items-stretch">
            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 flex justify-center flex-col p-0 md:p-5 slide-info z-10 bg-gray-900">
                <img data-src="{{ $page->cloudinary }}c_scale,q_75,w_1024/{{ $page->cloudinaryId }}/covers/{{ $post->slide }}" alt="{{ $post->title }}" class="block sm:hidden h-72 object-cover relative z-0 mb-1 lazy">
                <div class="p-5 md:p-0">
                    <h2 class="text-white text-xl md:text-2xl xl:text-3xl m-0">{{ $post->title }}</h2>
                    <p class="text-gray-500 text-sm m-0 mb-0 md:mb-6">
                        {{ strftime("%e %B %Y", $post->date) }}
                        @foreach($post->cat($categories) as $category)
                            <a href="{{ $category->getUrl() }}" class="text-xs ml-1 {{ $category->getFilename() }}">{{ $category->title }}</a>
                        @endforeach
                    </p>

                    <p class="text-sm xl:text-base my-2 text-white">{!! $post->getExcerpt(260) !!}</p>
                    <div class="text-center mt-3 xl:mt-5 mb-10">
                        <a
                            href="{{ $post->getUrl() }}"
                            title="Czytaj więcej - {{ $post->title }}"
                            class="inline-block border border-red-500 text-white bg-red-500 hover:bg-red-700 hover:border-red-700 hover:text-white rounded-lg tracking-wide mb-2 py-1 px-5 text-sm"
                        >Czytaj dalej</a>
                    </div>
                </div>
            </div>
            <img data-srcset="{{ $page->cloudinary }}c_scale,q_75,w_1024/{{ $page->cloudinaryId }}/covers/{{ $post->slide }} 1024w,
                         {{ $page->cloudinary }}c_scale,q_75,w_1600/{{ $page->cloudinaryId }}/covers/{{ $post->slide }} 1920w"
                 data-sizes="75vw,
                        (min-width: 1280px) 100vw"
                 data-src="{{ $page->cloudinary }}c_scale,q_75,w_1600/{{ $page->cloudinaryId }}/covers/{{ $post->slide }}" 
                 alt="{{ $post->title }}" class="hidden sm:block h-70 min-h-500 max-h-700 sm:w-1/2 md:w-2/3 lg:w-3/4 xl:w-4/5 xxl:w-5/6 object-cover relative z-0 lazy">
        </div>
    @endif
</li>