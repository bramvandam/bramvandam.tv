<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1524751513,
    'checksum' => '6adf02a21ecb3e745d87e94a7b9e4594',
    'files' => [
        'user/config' => [
            'media' => [
                'file' => 'user/config/media.yaml',
                'modified' => 1458835192
            ],
            'plugins/email' => [
                'file' => 'user/config/plugins/email.yaml',
                'modified' => 1517662149
            ],
            'plugins/form' => [
                'file' => 'user/config/plugins/form.yaml',
                'modified' => 1517664496
            ],
            'plugins/pagination' => [
                'file' => 'user/config/plugins/pagination.yaml',
                'modified' => 1503874935
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1453756249
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1507476504
            ],
            'streams' => [
                'file' => 'user/config/streams.yaml',
                'modified' => 1458835192
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1524751513
            ],
            'themes/antimatter' => [
                'file' => 'user/config/themes/antimatter.yaml',
                'modified' => 1524751479
            ]
        ],
        'system/config' => [
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1524259597
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1524259597
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1524259597
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1524259597
            ]
        ],
        'user/plugins' => [
            'plugins/admin' => [
                'file' => 'user/plugins/admin/admin.yaml',
                'modified' => 1524259640
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/email.yaml',
                'modified' => 1517658668
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1521989379
            ],
            'plugins/feed' => [
                'file' => 'user/plugins/feed/feed.yaml',
                'modified' => 1517658691
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/form.yaml',
                'modified' => 1524259636
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/login.yaml',
                'modified' => 1524259633
            ],
            'plugins/pagination' => [
                'file' => 'user/plugins/pagination/pagination.yaml',
                'modified' => 1503874261
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1517658687
            ],
            'plugins/relatedpages' => [
                'file' => 'user/plugins/relatedpages/relatedpages.yaml',
                'modified' => 1485039875
            ],
            'plugins/sitemap' => [
                'file' => 'user/plugins/sitemap/sitemap.yaml',
                'modified' => 1504011199
            ],
            'plugins/star-ratings' => [
                'file' => 'user/plugins/star-ratings/star-ratings.yaml',
                'modified' => 1505075504
            ]
        ]
    ],
    'data' => [
        'plugins' => [
            'admin' => [
                'enabled' => true,
                'route' => '/admin',
                'cache_enabled' => false,
                'theme' => 'grav',
                'logo_text' => '',
                'body_classes' => '',
                'content_padding' => true,
                'twofa_enabled' => true,
                'sidebar' => [
                    'activate' => 'tab',
                    'hover_delay' => 100,
                    'size' => 'auto'
                ],
                'dashboard' => [
                    'days_of_stats' => 7
                ],
                'widgets' => [
                    'dashboard-maintenance' => true,
                    'dashboard-statistics' => true,
                    'dashboard-notifications' => true,
                    'dashboard-feed' => true,
                    'dashboard-pages' => true
                ],
                'pages' => [
                    'show_parents' => 'both'
                ],
                'session' => [
                    'timeout' => 1800
                ],
                'warnings' => [
                    'delete_page' => true
                ],
                'edit_mode' => 'normal',
                'frontend_preview_target' => 'inline',
                'show_github_msg' => true,
                'pages_list_display_field' => 'title',
                'google_fonts' => false,
                'admin_icons' => 'line-awesome',
                'enable_auto_updates_check' => true,
                'notifications' => [
                    'feed' => true,
                    'dashboard' => true,
                    'plugins' => true,
                    'themes' => true
                ],
                'popularity' => [
                    'enabled' => true,
                    'ignore' => [
                        0 => '/test*',
                        1 => '/modular'
                    ],
                    'history' => [
                        'daily' => 30,
                        'monthly' => 12,
                        'visitors' => 20
                    ]
                ]
            ],
            'email' => [
                'enabled' => true,
                'from' => 'info@rodekaterproducties.nl',
                'from_name' => 'Bram van Dam',
                'to' => 'info@rodekaterproducties.nl',
                'to_name' => 'Grav',
                'mailer' => [
                    'engine' => 'smtp',
                    'smtp' => [
                        'server' => 'smtp01.hostcontrol.com',
                        'port' => 587,
                        'encryption' => 'tls',
                        'user' => 'rodekaterpro02@rodekaterproducties.nl',
                        'password' => 'Broer2012!'
                    ],
                    'sendmail' => [
                        'bin' => '/usr/sbin/sendmail'
                    ]
                ],
                'content_type' => 'text/html',
                'debug' => false
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'feed' => [
                'enabled' => true,
                'limit' => 10,
                'description' => 'My Feed Description',
                'lang' => 'en-us',
                'length' => 500,
                'enable_json_feed' => false
            ],
            'form' => [
                'enabled' => true,
                'built_in_css' => true,
                'inline_css' => true,
                'refresh_prevention' => false,
                'client_side_validation' => true,
                'inline_errors' => false,
                'files' => [
                    'multiple' => false,
                    'limit' => 10,
                    'destination' => 'self@',
                    'avoid_overwriting' => false,
                    'random_name' => false,
                    'filesize' => 0,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ],
                'recaptcha' => [
                    'site_key' => '6LfpJUQUAAAAAN5f0Bskb-KsR1m_3g0jzB2WrTgV',
                    'secret_key' => '6LfpJUQUAAAAAFNHT0_F3D7jLv6lxO0gEPZI24mq'
                ]
            ],
            'login' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => NULL,
                'redirect_to_login' => true,
                'redirect_after_login' => NULL,
                'redirect_after_logout' => '/',
                'route_activate' => '/activate_user',
                'route_forgot' => '/forgot_password',
                'route_reset' => '/reset_password',
                'route_profile' => '/user_profile',
                'route_register' => '/user_register',
                'route_unauthorized' => '/user_unauthorized',
                'dynamic_page_visibility' => false,
                'parent_acl' => false,
                'protect_protected_page_media' => false,
                'rememberme' => [
                    'enabled' => true,
                    'timeout' => 604800,
                    'name' => 'grav-rememberme'
                ],
                'max_pw_resets_count' => 0,
                'max_pw_resets_interval' => 60,
                'max_login_count' => 0,
                'max_login_interval' => 2,
                'user_registration' => [
                    'enabled' => false,
                    'fields' => [
                        0 => 'username',
                        1 => 'password',
                        2 => 'email',
                        3 => 'fullname',
                        4 => 'title',
                        5 => 'level'
                    ],
                    'default_values' => [
                        'level' => 'Newbie'
                    ],
                    'access' => [
                        'site' => [
                            'login' => 'true'
                        ]
                    ],
                    'redirect_after_registration' => '',
                    'options' => [
                        'validate_password1_and_password2' => true,
                        'set_user_disabled' => false,
                        'login_after_registration' => false,
                        'send_activation_email' => false,
                        'send_notification_email' => false,
                        'send_welcome_email' => false
                    ]
                ]
            ],
            'pagination' => [
                'enabled' => true,
                'built_in_css' => true,
                'delta' => 0
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'relatedpages' => [
                'enabled' => true,
                'limit' => 5,
                'show_score' => true,
                'score_threshold' => 20,
                'filter' => [
                    'items' => [
                        '@page' => '/blog'
                    ],
                    'order' => [
                        'by' => 'date',
                        'dir' => 'desc'
                    ]
                ],
                'page_in_filter' => true,
                'explicit_pages' => [
                    'process' => true,
                    'score' => 100
                ],
                'taxonomy_match' => [
                    'taxonomy' => 'tag',
                    'taxonomy_taxonomy' => [
                        'process' => true,
                        'score_scale' => [
                            1 => 50,
                            2 => 75,
                            3 => 100
                        ]
                    ],
                    'taxonomy_content' => [
                        'process' => true,
                        'score_scale' => [
                            1 => 20,
                            2 => 30,
                            3 => 45,
                            4 => 60,
                            5 => 70,
                            6 => 80,
                            7 => 90,
                            8 => 100
                        ]
                    ]
                ],
                'content_match' => [
                    'process' => false
                ]
            ],
            'sitemap' => [
                'enabled' => true,
                'route' => '/sitemap',
                'changefreq' => 'daily',
                'priority' => 1.0
            ],
            'star-ratings' => [
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
        ],
        'media' => [
            'types' => [
                'defaults' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'application/octet-stream',
                    'image' => [
                        'filters' => [
                            'default' => [
                                0 => 'enableProgressive'
                            ]
                        ]
                    ]
                ],
                'jpg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpe' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpeg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'png' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-png.png',
                    'mime' => 'image/png'
                ],
                'gif' => [
                    'type' => 'animated',
                    'thumb' => 'media/thumb-gif.png',
                    'mime' => 'image/gif'
                ],
                'svg' => [
                    'type' => 'vector',
                    'thumb' => 'media/thumb-svg.png',
                    'mime' => 'image/svg+xml'
                ],
                'mp4' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mp4.png',
                    'mime' => 'video/mp4'
                ],
                'mov' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mov.png',
                    'mime' => 'video/quicktime'
                ],
                'm4v' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-m4v.png',
                    'mime' => 'video/x-m4v'
                ],
                'swf' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-swf.png',
                    'mime' => 'video/x-flv'
                ],
                'flv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-flv.png',
                    'mime' => 'video/x-flv'
                ],
                'webm' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-webm.png',
                    'mime' => 'video/webm'
                ],
                'ogv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'video/ogg'
                ],
                'mp3' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-mp3.png',
                    'mime' => 'audio/mp3'
                ],
                'ogg' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'audio/ogg'
                ],
                'wma' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wma.png',
                    'mime' => 'audio/wma'
                ],
                'm4a' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-m4a.png',
                    'mime' => 'audio/m4a'
                ],
                'wav' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wav.png',
                    'mime' => 'audio/wav'
                ],
                'aiff' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-aif.png',
                    'mime' => 'audio/aiff'
                ],
                'aif' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-aif.png',
                    'mime' => 'audio/aif'
                ],
                'txt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-txt.png',
                    'mime' => 'text/plain'
                ],
                'xml' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xml.png',
                    'mime' => 'application/xml'
                ],
                'doc' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-doc.png',
                    'mime' => 'application/msword'
                ],
                'docx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-docx.png',
                    'mime' => 'application/msword'
                ],
                'xls' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xls.png',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlsx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xlsx.png',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'ppt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-ppt.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pptx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pptx.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pps' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pps.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'rtf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-rtf.png',
                    'mime' => 'application/rtf'
                ],
                'bmp' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-bmp.png',
                    'mime' => 'image/bmp'
                ],
                'tiff' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-tiff.png',
                    'mime' => 'image/tiff'
                ],
                'mpeg' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpg.png',
                    'mime' => 'video/mpeg'
                ],
                'mpg' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpg.png',
                    'mime' => 'video/mpeg'
                ],
                'mpe' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpe.png',
                    'mime' => 'video/mpeg'
                ],
                'avi' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-avi.png',
                    'mime' => 'video/msvideo'
                ],
                'wmv' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-wmv.png',
                    'mime' => 'video/x-ms-wmv'
                ],
                'html' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'htm' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'ics' => [
                    'type' => 'iCal',
                    'thumb' => 'media/thumb-ics.png',
                    'mime' => 'text/calendar'
                ],
                'pdf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pdf.png',
                    'mime' => 'application/pdf'
                ],
                'ai' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-ai.png',
                    'mime' => 'image/ai'
                ],
                'psd' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-psd.png',
                    'mime' => 'image/psd'
                ],
                'zip' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-zip.png',
                    'mime' => 'application/zip'
                ],
                '7z' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-7z.png',
                    'mime' => 'application/x-7z-compressed'
                ],
                'gz' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-gz.png',
                    'mime' => 'application/gzip'
                ],
                'tar' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-tar.png',
                    'mime' => 'application/x-tar'
                ],
                'css' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-css.png',
                    'mime' => 'text/css'
                ],
                'js' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-js.png',
                    'mime' => 'application/javascript'
                ],
                'json' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-json.png',
                    'mime' => 'application/json'
                ]
            ]
        ],
        'site' => [
            'title' => 'Bram van Dam',
            'default_lang' => 'en',
            'author' => [
                'name' => 'Bram van Dam',
                'email' => 'b.vandam@rodekaterproducties.nl'
            ],
            'taxonomies' => [
                0 => 'category',
                1 => 'tag',
                2 => 'brand'
            ],
            'metadata' => [
                'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 300,
                'delimiter' => '==='
            ],
            'redirects' => NULL,
            'routes' => NULL,
            'blog' => [
                'route' => '/blog'
            ],
            'kicker' => 'Editor - Colorist - Filmmaker'
        ],
        'streams' => [
            'schemes' => [
                'image' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => 'Europe/Amsterdam',
            'default_locale' => NULL,
            'param_sep' => ':',
            'wrapped_site' => false,
            'reverse_proxy_setup' => false,
            'force_ssl' => false,
            'force_lowercase_urls' => true,
            'custom_base_url' => '',
            'username_regex' => '^[a-z0-9_-]{3,16}$',
            'pwd_regex' => '(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}',
            'intl_enabled' => true,
            'languages' => [
                'supported' => [
                    
                ],
                'include_default_lang' => true,
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'http_accept_language' => false,
                'override_locale' => false
            ],
            'home' => [
                'alias' => '/home',
                'hide_in_urls' => false
            ],
            'pages' => [
                'theme' => 'bramvandam',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'default' => NULL,
                    'short' => 'jS M Y',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'twig_first' => false,
                'never_cache_twig' => false,
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => false,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => [
                    0 => 'txt',
                    1 => 'xml',
                    2 => 'html',
                    3 => 'htm',
                    4 => 'json',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'append_url_extension' => '',
                'expires' => 604800,
                'cache_control' => NULL,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_default_code' => '301',
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'ignore_hidden' => true,
                'url_taxonomy_filters' => true,
                'frontmatter' => [
                    'process_twig' => false,
                    'ignore_fields' => [
                        0 => 'form',
                        1 => 'forms'
                    ]
                ],
                'markdown_extra' => false
            ],
            'cache' => [
                'enabled' => false,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'clear_images_by_default' => true,
                'cli_compatibility' => false,
                'lifetime' => 604800,
                'gzip' => false,
                'allow_webserver_gzip' => false,
                'redis' => [
                    'socket' => false
                ]
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true,
                'umask_fix' => false
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_pipeline_include_externals' => true,
                'css_pipeline_before_excludes' => true,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_pipeline_include_externals' => true,
                'js_pipeline_before_excludes' => true,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
                ]
            ],
            'errors' => [
                'display' => '1',
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'shutdown' => [
                    'close_connection' => true
                ],
                'twig' => true
            ],
            'images' => [
                'default_image_quality' => 85,
                'cache_all' => false,
                'cache_perms' => '0755',
                'debug' => false,
                'auto_fix_orientation' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'unsupported_inline_types' => [
                    
                ],
                'allowed_fallback_types' => [
                    
                ],
                'auto_metadata_exif' => false,
                'upload_limit' => 33554432
            ],
            'session' => [
                'enabled' => true,
                'initialize' => true,
                'timeout' => 1800,
                'name' => 'grav-site',
                'secure' => false,
                'httponly' => true,
                'split' => true,
                'path' => NULL
            ],
            'gpm' => [
                'releases' => 'stable',
                'proxy_url' => NULL,
                'method' => 'auto',
                'verify_peer' => true,
                'official_gpm_only' => true
            ]
        ],
        'security' => [
            'salt' => '9bOEZwgMC5UDYH'
        ],
        'themes' => [
            'antimatter' => [
                'enabled' => true,
                'dropdown' => [
                    'enabled' => false
                ]
            ]
        ]
    ]
];
