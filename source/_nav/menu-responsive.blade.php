<nav id="js-nav-menu" class="nav-menu hidden lg:hidden w-full">
    <ul class="list-reset my-0">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Blog"
                href="/blog"
                class="nav-menu__item hover:text-blue {{ $page->isActive('/blog') ? 'active text-blue' : '' }}"
            >Blog</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Miejsca"
                href="/miejsca"
                class="nav-menu__item hover:text-blue {{ $page->isActive('/miejsca') ? 'active text-blue' : '' }}"
            >Miejsca</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Kontakt"
                href="/kontakt"
                class="nav-menu__item hover:text-blue {{ $page->isActive('/kontakt') ? 'active text-blue' : '' }}"
            >Kontakt</a>
        </li>
    </ul>
</nav>
