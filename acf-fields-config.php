// Field Group: Hero Section
[
    'key' => 'group_hero_section',
    'title' => 'Hero Section',
    'fields' => [
        [
            'key' => 'field_hero_subtitle',
            'label' => 'Hero Subtitle',
            'name' => 'hero_subtitle',
            'type' => 'text',
        ],
        [
            'key' => 'field_hero_title',
            'label' => 'Hero Title',
            'name' => 'hero_title',
            'type' => 'text',
        ],
        [
            'key' => 'field_hero_description',
            'label' => 'Hero Description',
            'name' => 'hero_description',
            'type' => 'textarea',
        ],
        [
            'key' => 'field_discover_button',
            'label' => 'Discover Button',
            'name' => 'discover_button',
            'type' => 'group',
            'sub_fields' => [
                [
                    'key' => 'field_discover_button_text',
                    'label' => 'Text',
                    'name' => 'text',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_discover_button_link',
                    'label' => 'Link',
                    'name' => 'link',
                    'type' => 'url',
                ],
            ],
        ],
        [
            'key' => 'field_book_button',
            'label' => 'Book Button',
            'name' => 'book_button',
            'type' => 'group',
            'sub_fields' => [
                [
                    'key' => 'field_book_button_text',
                    'label' => 'Text',
                    'name' => 'text',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_book_button_link',
                    'label' => 'Link',
                    'name' => 'link',
                    'type' => 'url',
                ],
            ],
        ],
        [
            'key' => 'field_ticker_items',
            'label' => 'Ticker Items',
            'name' => 'ticker_items',
            'type' => 'repeater',
            'sub_fields' => [
                [
                    'key' => 'field_ticker_icon',
                    'label' => 'Icon',
                    'name' => 'icon',
                    'type' => 'image',
                    'return_format' => 'url',
                ],
                [
                    'key' => 'field_ticker_text',
                    'label' => 'Text',
                    'name' => 'text',
                    'type' => 'text',
                ],
            ],
        ],
    ],
    'location' => [
        [
            [
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'template-home.blade.php',
            ],
        ],
    ],
]);