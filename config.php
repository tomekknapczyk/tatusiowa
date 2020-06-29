<?php
setlocale(LC_ALL, 'pl_PL');

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Tatusiowa.pl',
    'siteDescription' => 'Podróże małe i duże',
    'siteAuthor' => 'Tomasz Knapczyk',
    'cloudinary' => 'https://res.cloudinary.com/tatusiowa/image/upload/',
    'cloudinaryVid' => 'https://res.cloudinary.com/tatusiowa/video/upload/',
    'cloudinaryId' => 'v2',
    'postPhoto' => 'c_scale,q_75,w_1400',
    'postPhotoSmall' => 'c_scale,q_80,w_768',

    // collections
    'collections' => [
        'posts' => [
            'author' => 'Tomasz Knapczyk',
            'filter' => function ($item) {
                return $item->publish;
            },
            'sort' => '-date',
            'path' => 'blog/{filename}',
            'cat' => function ($page, $allCategories) {
                return $allCategories->filter(function ($category) use ($page) {
                    return $category ? in_array($category->getFilename(), $page->categories, true) : false;
                });
            },
            'miejsca' => function ($page, $allPlaces) {
                return $allPlaces->filter(function ($place) use ($page) {
                    return $place ? in_array($place->getFilename(), $page->places, true) : false;
                });
            },
        ],
        'categories' => [
            'path' => '/blog/kategoria/{filename}',
            'sort' => 'order',
            'posts' => function ($page, $allPosts) {
                return $allPosts->filter(function ($post) use ($page) {
                    return $post->categories ? in_array($page->getFilename(), $post->categories, true) : false;
                });
            },
        ],
        'members' => [
            'sort' => 'order',
        ],
        'places' => [
            'path' => '/blog/miejsce/{filename}',
            'sort' => 'order',
            'posts' => function ($page, $allPosts) {
                return $allPosts->filter(function ($post) use ($page) {
                    return $post->places ? in_array($page->getFilename(), $post->places, true) : false;
                });
            },
        ],
    ],

    // helpers
    'getDate' => function ($page) {
        $datetime = Datetime::createFromFormat('U', $page->date);
        $timestamp = $datetime->getTimestamp();
        return mktime($timestamp);
    },
    'getExcerpt' => function ($page, $length = 255) {
        $content = $page->excerpt ?? $page->getContent();
        $cleaned = strip_tags(
            preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content),
            '<code>'
        );

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
    'isActive' => function ($page, $path) {
        return Illuminate\Support\Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
];
