<?php

c::set('debug', true);

// Kirby StaticBuilder config
c::set([
    'staticbuilder' => true,
    'staticbuilder.assets' => [
        'assets' => 'assets',
        'assets/404.html' => '404.html'
    ],
    'staticbuilder.outputdir' => 'docs',
    'staticbuilder.extension' => '/index.html',
    'staticbuilder.filter' => function($page) {
        return !in_array($page->intendedTemplate(), ['section']);
    }
]);

// Enable Twig templating
Kirby\Twig\Plugin::register();

// Enable routes for the StaticBuilder plugin
KirbyStaticBuilder\Plugin::register();
