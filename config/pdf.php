<?php

return [
    'mode'                  => 'utf-8',
    'format'                => 'A4',
    'author'                => '',
    'subject'               => '',
    'keywords'              => '',
    'creator'               => 'Laravel Pdf',
    'display_mode'          => 'fullpage',
    'tempDir'               => base_path('../temp/'),
    'pdf_a'                 => false,
    'pdf_a_auto'            => false,
    'icc_profile_path'      => '',
    'font_path' => base_path('public/panel/assets/fonts/IRANSans/'),
    'font_data' => [
        'fa' => [
            'R'  => 'ttf/IRANSansWeb(FaNum).ttf',
            'B'  => 'ttf/IRANSansWeb(FaNum)_Bold.ttf',
            'useOTL' => 0xFF,
            'useKashida' => 75,
        ],
        'en' => [
            'R'  => 'ttf/IRANSansWeb(FaNum).ttf',
            'B'  => 'ttf/IRANSansWeb(FaNum)_Bold.ttf',
        ]
    ]
];
