<?php

/**
 * Configuration
 */
return [

    /**
     * Unique name that identifies your theme.
     */
    'name' => 'aries',

    /**
     * Define menu positions.
     * Will be listed in the backend so that users
     * can assign menus to these positions.
     */
    'menus' => [

        'main' => 'Main',

    ],

    /**
     * Define widget positions.
     * will be listed in the backend so that users
     * can publish widgets in these positions.
     */
    'positions' => [

    'navbar' => 'Navbar',
    'hero' => 'hero',
    'bottom' => 'Bottom',
    'footer' => 'Footer',
    'midsection' => 'Middle Sections'

    ],

    /**
     * Widget defaults
     */
    'widget' => [

    'title_hide' => false,
    'title_size' => 'h2',
    'alignment' => '',
    'html_class' => '',
    'panel' => ''

    ],

    /**
     * Settings url
     */
    'settings' => '@site/settings#site-theme',

    /**
     * Define theme configuration.
     * This is the theme's default configuration. During run-time, they will be merged with
     * settings the user has set in the backend. The default configuration can therefore
     * be overwritten.
     */
    'config' => []

];
