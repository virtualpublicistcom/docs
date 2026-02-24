<?php

use Illuminate\Support\Str;

return [
    // Auto-switch between dev and production
    'baseUrl' => env('APP_ENV') === 'production'
        ? 'https://docs.virtualpublicist.ai'
        : 'http://localhost:3000',

    'production' => env('APP_ENV') === 'production',

    'siteName' => 'Virtual Publicist Documentation',
    'siteDescription' => 'Unlock the Music Business. Virtual Publicist is your direct gateway to the global industry, providing the access, intelligence, and AI infrastructure you need to scale.',

    // Algolia DocSearch credentials
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },

    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },

    'link' => function ($page, $path) {
        return rtrim($page->baseUrl, '/') . '/' . ltrim(trimPath($path), '/');
    },

    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http')
            ? $path
            : rtrim($page->baseUrl, '/') . '/' . ltrim(trimPath($path), '/');
    },
];
