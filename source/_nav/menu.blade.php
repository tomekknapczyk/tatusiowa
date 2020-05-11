<nav class="hidden lg:flex items-center justify-end text-lg menu">
    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="ml-6 text-grey-darker hover:text-blue-dark {{ $page->isActive('/blog') ? 'active text-blue-dark' : '' }}">
        Blog
    </a>

    <a title="{{ $page->siteName }} Miejsca" href="/miejsca"
        class="ml-6 text-grey-darker hover:text-blue-dark {{ $page->isActive('/miejsca') ? 'active text-blue-dark' : '' }}">
        Miejsca
    </a>

    <a title="{{ $page->siteName }} Kontakt" href="/kontakt"
        class="ml-6 text-grey-darker hover:text-blue-dark {{ $page->isActive('/kontakt') ? 'active text-blue-dark' : '' }}">
        Kontakt
    </a>
</nav>
