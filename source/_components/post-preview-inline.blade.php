<div class="flex items-stretch justify-between flex-wrap mb-10 shadow-lg">
    <div class="w-full md:w-1/3">
        <a href="{{ $post->getUrl() }}" title="Czytaj dalej - {{ $post->title }}">
            <img src="{{ $page->cloudinary }}c_scale,q_75,w_1024/{{ $page->cloudinaryId }}/covers/{{ $post->slide }}" alt="{{ $post->title }}" class="sm:block h-64 w-full object-cover">
        </a>
    </div>
    <div class="flex flex-col mb-4 w-full md:w-2/3 px-6 justify-between">
        <div>
            <p class="text-sm md:text-base text-grey-darker text-gray-500 my-2">{{ strftime("%e %B %Y", $post->date) }}</p>
            
            <h2 class="text-xl md:text-2xl lg:text-3xl m-0">
                <a href="{{ $post->getUrl() }}" title="Read more - {{ $post->title }}" class="text-black font-extrabold">{{ $post->title }}</a>
            </h2>

            <p class="mb-4 mt-3 text-sm md:text-base">{!! $post->getExcerpt(200) !!}</p>
        </div>

        <div class="text-right">
            <a href="{{ $post->getUrl() }}" title="Czytaj dalej - {{ $post->title }}" class="text-sm md:text-base uppercase tracking-wide mb-2">Czytaj dalej</a>
        </div>
    </div>
</div>