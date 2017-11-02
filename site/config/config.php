<?php

c::set('debug', true);

// Kirby StaticBuilder config
c::set([
    'staticbuilder' => true,
    'staticbuilder.baseurl' => 'https://kaliop.github.io/frontend-style-guide/',
    'staticbuilder.assets' => [
        'assets' => 'assets',
        'assets/404.html' => '404.html'
    ],
    'staticbuilder.extension' => '/index.html',
    'staticbuilder.filter' => function($page) {
        return !in_array($page->intendedTemplate(), ['section']);
    }
]);
