<?php

return [
    'pages' =>  [
        [
            "varName" => "menu_icon",
            "label" => "Menu Icon",
            "type" => "text",
            "options" => NULL
        ],
        [
            "varName" => "menu_subtitle",
            "label" => "Menu Description",
            "type" => "text",
            "options" => NULL,
            "translatable"=> true
        ],
    ],
    'categories' => [
        [
            'varName' => 'orderBy',
            'label' => 'Order by',
            'type' => 'select',
            'options' => [
                [
                    'default' => true,
                    'label' => 'Title',
                    'value' => 'title'
                ],
                [
                    'default' => false,
                    'label' => 'Creation date',
                    'value' => 'created_at'
                ],
                [
                    'default' => false,
                    'label' => 'Custom',
                    'value' => 'custom'
                ],
            ]
        ],
        [
            "varName" => "menu_icon",
            "label" => "Menu Icon",
            "type" => "text",
            "options" => NULL
        ],
    ]
];