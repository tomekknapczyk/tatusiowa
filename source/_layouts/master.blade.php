<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Tatusiowa.pl">
        <meta name="theme-color" content="#1a202c" />
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">
        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />
        @if ($page->_meta->get('collection') === 'posts')
        <meta property="og:type" content="article" />
        <meta property="og:image" content="{{ $page->cloudinary }}c_scale,q_80,w_1024/{{ $page->cloudinaryId }}/covers/{{ $page->slide }}" />
        <meta property="og:image:secure_url" content="{{ $page->cloudinary }}c_scale,q_80,w_1024/{{ $page->cloudinaryId }}/covers/{{ $page->slide }}" />
        <meta property="og:image:width" content="1024" />
        @else
        <meta property="og:type" content="website" />
        <meta property="og:image" content="{{ $page->cloudinary }}c_scale,q_80,w_1024/{{ $page->cloudinaryId }}/covers/cover.jpg" />
        <meta property="og:image:secure_url" content="{{ $page->cloudinary }}c_scale,q_80,w_1024/{{ $page->cloudinaryId }}/covers/cover.jpg" />
        <meta property="og:image:width" content="1024" />
        @endif

        <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="manifest" href="/manifest.json">
        
        <link rel="icon" href="/favicon.ico">
        <link rel="apple-touch-icon" sizes="144x144" href="/assets/icons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/icons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/assets/icons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/assets/icons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon-16x16.png">

        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @stack('meta')

        @if ($page->production)
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122222425-1"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());

              gtag('config', 'UA-122222425-1');
            </script>
        @endif
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap&subset=latin-ext" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-grey-lightest text-grey-darkest leading-normal font-sans preload {{ $page->title ? $page->title : 'home-page' }}">
        <header class="flex flex-wrap items-center bg-white shadow h-auto fixed top-0 left-0 w-full z-20" role="banner">
            <div class="container flex items-center max-w-6xl mx-auto p-4" id="navbar">
                <div class="flex items-center">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        <img class="h-8 md:h-10 mr-3 hidden sm:block" src="/assets/img/logo.png" alt="{{ $page->siteName }} logo" />

                        <h1 class="text-lg md:text-2xl text-gray-900 hover:text-blue-dark my-0">{{ $page->siteName }}</h1>
                    </a>
                </div>

                <div id="vue-search" class="flex flex-1 justify-end items-center">
                    <search></search>

                    @include('_nav.menu')

                    @include('_nav.menu-toggle')
                </div>
            </div>

            @include('_nav.menu-responsive')
        </header>

        <main role="main" class="flex-auto w-full mx-auto pt-16">
            @yield('body')
        </main>

        <footer class="bg-white text-center text-sm mt-12 py-4" role="contentinfo">
            <ul class="flex flex-col md:flex-row justify-center list-reset">
                <li class="md:mr-2">
                    &copy; Tomasz Knapczyk {{ date('Y') }}.
                </li>

                <li>
                    Built with <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten" target="_blank" rel="nofollow noopener noreferrer">Jigsaw</a>
                    and <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework" target="_blank" rel="nofollow noopener noreferrer">Tailwind CSS</a>.
                </li>
            </ul>
        </footer>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
    </body>
</html>
