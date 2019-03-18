<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Exceptions to ignore
    |--------------------------------------------------------------------------
    |
    | A list of exceptions to ignore
    |
    | Supported:
    |   An array
    |
    */

    'ignored-exceptions' => [
        \Symfony\Component\HttpKernel\Exception\NotFoundHttpException::class,
        // Feel free to add / remove entries here
    ],

    /*
    |--------------------------------------------------------------------------
    | Email subject
    |--------------------------------------------------------------------------
    |
    | The sent email subject
    |
    | Supported:
    |   A string
    |
    | Default:
    |   REPORT_MAIL_SUBJECT="${APP_NAME}: Error Report"
    |
    */

    'email-subject' => env('REPORT_MAIL_SUBJECT', env('APP_NAME') . ': Error Report'),

    /*
    |--------------------------------------------------------------------------
    | Email recipient
    |--------------------------------------------------------------------------
    |
    | The person who will receive error emails
    |
    | Supported:
    |   An email address
    |
    | Default:
    |   REPORT_MAIL_TO=""
    |
    */

    'email-to' => env('REPORT_MAIL_TO', ''),

    /*
    |--------------------------------------------------------------------------
    | Error DateTime Format
    |--------------------------------------------------------------------------
    |
    | The format you want display the error datetime in
    |
    | Supported:
    |   Any valid Carbon format string
    |
    | Default:
    |   REPORT_TIME_FORMAT="Y-m-d\@H:i:s"
    |
    */

    'time-format' => env('REPORT_TIME_FORMAT', 'Y-m-d\@H:i:s'),

    /*
    |--------------------------------------------------------------------------
    | Use Queues system
    |--------------------------------------------------------------------------
    |
    | Determines if you want to use the Laravel Queues system or not
    | Disabling this option can be useful if you want to be able to report
    | exceptions even if your queue driver is down (Supervisor, ...)
    |
    | Supported:
    |   A boolean value
    |
    | Default:
    |   REPORT_USE_QUEUES=true
    |
    */

    'use-queues' => env('REPORT_USE_QUEUES', true),

    /*
    |--------------------------------------------------------------------------
    | Show .env constants
    |--------------------------------------------------------------------------
    |
    | If you set this value to true, the 'Environment variables' mail
    | section will also contain constants defined in the .env file
    | However, it is not recommended because the .env file contains sensitive
    | data like DB connection, Stripe keys, ...
    |
    | Supported:
    |   A boolean value
    |
    | Default:
    |   REPORT_SHOW_DOTENV=false
    |
    */

    'show-dotenv' => env('REPORT_SHOW_DOTENV', false),

    /*
    |--------------------------------------------------------------------------
    | Customize email theme
    |--------------------------------------------------------------------------
    |
    | You can customize some email background and text colors
    |
    | Supported:
    |   Valid HTML color strings
    |
    | Defaults:
    |   REPORT_THEME_BG_COLOR="#303030"
    |   REPORT_THEME_HEADER_COLOR="#ffffff"
    |   REPORT_THEME_HEADER_BG_COLOR="#2a2a2a"
    |   REPORT_THEME_SECTION_TITLE_COLOR="#4bb1b1"
    |   REPORT_THEME_SECTION_COLOR="#ffffff"
    |   REPORT_THEME_SECTION_BG_COLOR="#333333"
    |   REPORT_THEME_BODY_BG_COLOR="#ded8d8"
    |   REPORT_THEME_FIRST_COLOR="#ef7c61"
    |
    */

    'theme' => [
        'bg-color'              => env('REPORT_THEME_BG_COLOR', '#303030'),
        'header-color'          => env('REPORT_THEME_HEADER_COLOR', '#ffffff'),
        'header-bg-color'       => env('REPORT_THEME_HEADER_BG_COLOR', '#2a2a2a'),
        'section-title-color'   => env('REPORT_THEME_SECTION_TITLE_COLOR', '#4bb1b1'),
        'section-color'         => env('REPORT_THEME_SECTION_COLOR', '#ffffff'),
        'section-bg-color'      => env('REPORT_THEME_SECTION_BG_COLOR', '#333333'),
        'body-bg-color'         => env('REPORT_THEME_BODY_BG_COLOR', '#ded8d8'),
        'first-color'           => env('REPORT_THEME_FIRST_COLOR', '#ef7c61'),
        'second-color'          => env('REPORT_THEME_SECOND_COLOR', '#4bb1b1'),
        'third-color'           => env('REPORT_THEME_THIRD_COLOR', '#bcd42a'),
    ],

];