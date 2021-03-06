<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://star-ratings/star-ratings.yaml',
    'modified' => 1505075504,
    'data' => [
        'enabled' => true,
        'vote_access' => NULL,
        'callback' => '/star-ratings',
        'built_in_css' => true,
        'unique_ip_check' => true,
        'initial_stars' => 0,
        'total_stars' => 5,
        'star_size' => 20,
        'use_full_stars' => false,
        'empty_color' => '#353535',
        'hover_color' => '#548e8a',
        'active_color' => '#808080',
        'use_gradient' => false,
        'star_gradient_start' => '#fef7cd',
        'star_gradient_end' => '#ffcc00',
        'readonly' => false,
        'disable_after_rate' => true,
        'stroke_width' => 15,
        'stroke_color' => '#808080',
        'show_count' => false,
        'show_score' => false,
        'aggregate_rating' => false,
        'aggregate' => [
            'type' => 'Product',
            'title' => NULL
        ]
    ]
];
