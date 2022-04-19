<?php
            return [
    "frontPage" => [
        "slider" => [
            "label" => "Slider",
            "slug" => "slider",
            "type" => "generic",
            "allow" => [
                "item"
            ],
            "items" => [

            ],
            "settings" => [

            ],
            "regionSettings" => [
                "image" => [

                ]
            ]
        ],
        "hero" => [
            "label" => "Hero Section",
            "slug" => "hero",
            "allow" => [
                "structured"
            ],
            "type" => "generic",
            "items" => [

            ],
            "structuredData" => [
                [
                    "varName" => "title",
                    "label" => "Title",
                    "type" => "text",
                    "translatable" => FALSE,
                    "options" => [

                    ]
                ],
                [
                    "varName" => "subtitle",
                    "label" => "Subtitle",
                    "type" => "text",
                    "translatable" => FALSE,
                    "options" => [

                    ]
                ],
                [
                    "varName" => "description",
                    "translatable" => FALSE,
                    "label" => "Description",
                    "type" => "text",
                    "options" => NULL
                ],
                [
                    "varName" => "image",
                    "label" => "Image",
                    "type" => "image",
                    "settings" => [
                        "translatable" => FALSE
                    ],
                    "options" => NULL
                ]
            ],
            "settings" => [

            ],
            "options" => [

            ]
        ],
        "welcomeText" => [
            "label" => "Welcome Text",
            "slug" => "welcomeText",
            "allow" => [
                "structured"
            ],
            "type" => "generic",
            "items" => [

            ],
            "structuredData" => [
                [
                    "varName" => "description",
                    "translatable" => FALSE,
                    "label" => "Description",
                    "type" => "text",
                    "options" => NULL
                ]
            ],
            "settings" => [

            ],
            "options" => [

            ]
        ],
        "advantages" => [
            "label" => "Advantages",
            "slug" => "advantages",
            "allow" => [
                "structured"
            ],
            "type" => "generic",
            "items" => [

            ],
            "structuredData" => [
                [
                    "varName" => "description",
                    "translatable" => FALSE,
                    "label" => "Description",
                    "type" => "richtext",
                    "options" => NULL
                ]
            ],
            "settings" => [

            ],
            "options" => [

            ]
        ],
        "support" => [
            "label" => "Support",
            "slug" => "support",
            "allow" => [
                "structured"
            ],
            "type" => "generic",
            "items" => [

            ],
            "structuredData" => [
                [
                    "varName" => "description",
                    "translatable" => FALSE,
                    "label" => "Description",
                    "type" => "richtext",
                    "options" => NULL
                ]
            ],
            "settings" => [

            ],
            "options" => [

            ]
        ],
        "applications" => [
            "label" => "Applications",
            "slug" => "applications",
            "allow" => [
                "structured"
            ],
            "type" => "generic",
            "items" => [

            ],
            "structuredData" => [
                [
                    "varName" => "description",
                    "translatable" => FALSE,
                    "label" => "Description",
                    "type" => "richtext",
                    "options" => NULL
                ]
            ],
            "settings" => [

            ],
            "options" => [

            ]
        ],
        "packages" => [
            "label" => "Packages",
            "slug" => "packages",
            "allow" => [
                "structured"
            ],
            "type" => "generic",
            "items" => [

            ],
            "structuredData" => [
                [
                    "varName" => "description",
                    "translatable" => FALSE,
                    "label" => "Description",
                    "type" => "richtext",
                    "options" => NULL
                ]
            ],
            "settings" => [

            ],
            "options" => [

            ]
        ],
        "featuredArticles" => [
            "label" => "Featured Articles",
            "slug" => "featuredArticles",
            "type" => "generic",
            "allow" => [
                "item"
            ],
            "maxItemsAllowed" => 3,
            "items" => [

            ],
            "settings" => [

            ],
            "regionSettings" => [
                "image" => [

                ]
            ]
        ],
        "latestArticles" => [
            "label" => "Latest Blog posts",
            "slug" => "latestBlogPosts",
            "type" => "class",
            "class" => "FrontEnd\\EditableRegions\\LatestBlogPosts",
            "settings" => [

            ],
            "options" => [
                [
                    "varName" => "limit",
                    "label" => "Number of items",
                    "type" => "text",
                    "options" => NULL,
                    "default" => 3
                ],
                [
                    "varName" => "categoryId",
                    "label" => "CategoryId",
                    "type" => "text",
                    "options" => NULL
                ]
            ],
            "items" => [

            ]
        ],
        "gallery" => [
            "label" => "Our Work",
            "slug" => "ourWork",
            "type" => "generic",
            "allow" => [
                "item"
            ],
            "maxItemsAllowed" => 1,
            "settings" => [

            ],
            "options" => [

            ],
            "items" => [

            ]
        ]
    ],
    "page" => [

    ],
    "category" => [

    ],
    "contact" => [
        "form" => [
            "label" => "Contact Information",
            "slug" => "contact",
            "allow" => [
                "structured"
            ],
            "type" => "generic",
            "items" => [

            ],
            "structuredData" => [
                [
                    "varName" => "title",
                    "label" => "Title",
                    "type" => "text",
                    "translatable" => TRUE,
                    "options" => [

                    ]
                ],
                [
                    "varName" => "subtitle",
                    "label" => "Subtitle",
                    "type" => "textarea",
                    "translatable" => TRUE,
                    "options" => [

                    ]
                ],
                [
                    "varName" => "address",
                    "label" => "Address",
                    "type" => "textarea",
                    "translatable" => TRUE,
                    "options" => [

                    ]
                ],
                [
                    "varName" => "phone",
                    "translatable" => FALSE,
                    "label" => "Phone",
                    "type" => "text",
                    "options" => NULL
                ],
                [
                    "varName" => "mobile",
                    "translatable" => FALSE,
                    "label" => "Mobile",
                    "type" => "text",
                    "options" => NULL
                ],
                [
                    "varName" => "email",
                    "translatable" => FALSE,
                    "label" => "Email",
                    "type" => "email",
                    "options" => NULL
                ]
            ],
            "settings" => [

            ],
            "options" => [

            ]
        ],
        "socials" => [
            "label" => "Social Media Links",
            "slug" => "socials",
            "allow" => [
                "structured"
            ],
            "type" => "generic",
            "items" => [

            ],
            "structuredData" => [
                [
                    "varName" => "facebook",
                    "label" => "Facebook",
                    "type" => "text",
                    "translatable" => FALSE,
                    "options" => [

                    ]
                ],
                [
                    "varName" => "instagram",
                    "label" => "Instagram",
                    "type" => "text",
                    "translatable" => FALSE,
                    "options" => [

                    ]
                ],
                [
                    "varName" => "twitter",
                    "label" => "Twitter",
                    "type" => "text",
                    "translatable" => FALSE,
                    "options" => [

                    ]
                ]
            ],
            "settings" => [

            ],
            "options" => [

            ]
        ]
    ]
];