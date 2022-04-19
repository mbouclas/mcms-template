<?php
return [
    [
        'label' => 'Page',
        'varName' => 'page',
        'view' => 'articles.article',
        'beforeRender' => '', //class that will be executed before render
        'settings' => [

        ],
        "options" => [],
        'config' => [
/*            [
                "varName" => "menu_icon",
                "label" => "Menu Icon",
                "type" => "text",
                "options" => NULL
            ],
            [
                "varName" => "menu_description",
                "label" => "Menu Description",
                "type" => "text",
                "options" => NULL,
                "translatable"=> true
            ],*/
        ],
        'area' => ['pages.items'],
    ],
    [
        'label' => 'Product',
        'varName' => 'product',
        'view' => 'articles.article',
        'beforeRender' => '', //class that will be executed before render
        'settings' => [

        ],
        'config' => [],
        'area' => ['pages.items'],
    ],
    [
        'label' => 'Gallery',
        'varName' => 'gallery',
        'view' => 'articles.article',
        'beforeRender' => '', //class that will be executed before render
        'settings' => [

        ],
        'config' => [],
        'area' => ['pages.items'],
    ],
    [
        'label' => 'Article',
        'varName' => 'article',
        'view' => 'articles.article',
        'beforeRender' => '', //class that will be executed before render
        'settings' => [

        ],
        'config' => [],
        'area' => ['pages.items'],
    ],
    [
        'label' => 'Grid',
        'varName' => 'grid',
        'view' => 'articles.articles',
        'beforeRender' => '', //class that will be executed before render
        'settings' => [

        ],
        'config' => [],
        'area' => ['pages.categories'],
    ],
];