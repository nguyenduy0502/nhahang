<?php
/**
 * File Name: options.php
 * Date: 28-08-2016
 * Time: 12:47
 * Description: Main options theme options
 */


/**
 * ReduxFramework Barebones Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 */

if (!class_exists('Redux')) {
    return;
}

// This is your option name where all the Redux data is stored.
$opt_name = "asite_options";

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 * */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    // TYPICAL -> Change these values as you need/desire
    'opt_name' => $opt_name,
    // This is where your data is stored in the database and also becomes your global variable name.
    'display_name' => $theme->get('Name'),
    // Name that appears at the top of your panel
    'display_version' => $theme->get('Version'),
    // Version that appears at the top of your panel
    'menu_type' => 'menu',
    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
    'allow_sub_menu' => true,
    // Show the sections below the admin menu item or not
    'menu_title' => __('Asite Theme Options', 'asite'),
    'page_title' => __('Asite Theme Options', 'asite'),
    // You will need to generate a Google API key to use this feature.
    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
    'google_api_key' => '',
    // Set it you want google fonts to update weekly. A google_api_key value is required.
    'google_update_weekly' => false,
    // Must be defined to add google fonts to the typography module
    'async_typography' => true,
    // Use a asynchronous font on the front end or font string
    //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
    'admin_bar' => true,
    // Show the panel pages on the admin bar
    'admin_bar_icon' => 'dashicons-portfolio',
    // Choose an icon for the admin bar menu
    'admin_bar_priority' => 50,
    // Choose an priority for the admin bar menu
    'global_variable' => '',
    // Set a different name for your global variable other than the opt_name
    'dev_mode' => false,
    // Show the time the page took to load, etc
    'update_notice' => true,
    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
    'customizer' => true,
    // Enable basic customizer support
    //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
    //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

    // OPTIONAL -> Give you extra features
    'page_priority' => null,
    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
    'page_parent' => 'themes.php',
    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    'page_permissions' => 'manage_options',
    // Permissions needed to access the options panel.
    'menu_icon' => '',
    // Specify a custom URL to an icon
    'last_tab' => '',
    // Force your panel to always open to a specific tab (by id)
    'page_icon' => 'icon-themes',
    // Icon displayed in the admin panel next to your menu_title
    'page_slug' => 'asite_options',
    // Page slug used to denote the panel
    'save_defaults' => true,
    // On load save the defaults to DB before user clicks save or not
    'default_show' => false,
    // If true, shows the default value next to each field that is not the default value.
    'default_mark' => '',
    // What to print by the field's title if the value shown is default. Suggested: *
    'show_import_export' => false,
    // Shows the Import/Export panel when not used as a field.

    // CAREFUL -> These options are for advanced use only
    'transient_time' => 60 * MINUTE_IN_SECONDS,
    'output' => true,
    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
    'output_tag' => true,
    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
    'database' => '',
    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

    'use_cdn' => true,
    // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

    //'compiler'             => true,

    // HINTS
    'hints' => array(
        'icon' => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color' => 'lightgray',
        'icon_size' => 'normal',
        'tip_style' => array(
            'color' => 'light',
            'shadow' => true,
            'rounded' => false,
            'style' => '',
        ),
        'tip_position' => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect' => array(
            'show' => array(
                'effect' => 'slide',
                'duration' => '500',
                'event' => 'mouseover',
            ),
            'hide' => array(
                'effect' => 'slide',
                'duration' => '500',
                'event' => 'click mouseleave',
            ),
        ),
    )
);

// ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
$args['admin_bar_links'][] = array(
    'id' => 'redux-docs',
    'href' => 'http://asite.it',
    'title' => __('Documentation', 'redux-framework-demo'),
);

$args['admin_bar_links'][] = array(
    //'id'    => 'redux-support',
    'href' => 'http://asite.it',
    'title' => __('Support', 'redux-framework-demo'),
);

$args['admin_bar_links'][] = array(
    'id' => 'redux-extensions',
    'href' => 'reduxframework.com/extensions',
    'title' => __('Extensions', 'redux-framework-demo'),
);

// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
$args['share_icons'][] = array(
    'url' => 'https://github.com/nguyenduy0502',
    'title' => 'Visit us on GitHub',
    'icon' => 'el el-github'
    //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
);
$args['share_icons'][] = array(
    'url' => 'https://www.facebook.com/hietd',
    'title' => 'Like us on Facebook',
    'icon' => 'el el-facebook'
);
$args['share_icons'][] = array(
    'url' => 'http://facebook.com/ngduy0502',
    'title' => 'Follow us on Twitter',
    'icon' => 'el el-facebook'
);


// Panel Intro text -> before the form
if (!isset($args['global_variable']) || $args['global_variable'] !== false) {
    if (!empty($args['global_variable'])) {
        $v = $args['global_variable'];
    } else {
        $v = str_replace('-', '_', $args['opt_name']);
    }
    $args['intro_text'] = sprintf(__('<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo'), $v);
} else {
    $args['intro_text'] = __('<p>Design and develop by asite.it.</p>', 'redux-framework-demo');
}

// Add content after the form.
$args['footer_text'] = __('<p>Design and develop by asite.it.</p>', 'redux-framework-demo');

Redux::setArgs($opt_name, $args);

/*
 * ---> END ARGUMENTS
 */

/*
 * ---> START HELP TABS
 */

$tabs = array(
    array(
        'id' => 'redux-help-tab-1',
        'title' => __('Contact mail: info@asite.it', 'redux-framework-demo'),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo')
    ),

);
Redux::setHelpTab($opt_name, $tabs);

// Set the help sidebar
$content = __('<p>Contact mail: info@asite.it</p>', 'redux-framework-demo');
Redux::setHelpSidebar($opt_name, $content);


/*
 * <--- END HELP TABS
 */


/*
 *
 * ---> START SECTIONS
 *
 */

/*

    As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


 */

// -> START Basic Fields
/*===================================Slider Options================================= */
Redux::setSection($opt_name, array( // slides options
    'title' => __('Header', 'asite'),
    'desc' => __('', 'asite'),
    'icon' => 'el el-home',
    'fields' => array(
        array(
            'id' => 'option_slides',
            'type' => 'slides',
            'title' => __('Slider', 'asite'),
            'desc' => __('Slider', 'asite'),
            'placeholder' => array(
                'title' => __('This is a title', 'asite'),
                'description' => __('Description Here', 'asite'),
                'url' => __('Give us a link!', 'asite'),
            )
        ),
    )
));
/*===================================BUSINESS LUNCH================================= */
Redux::setSection($opt_name, array(
    'title' => __('Бизнес Ланч', 'asite'),
    'icon' => 'el el-check',
    'fields' => array(
        array(
            'id' => 'option_business_price',
            'type' => 'text',
            'title' => __('Цена', 'asite'),
            'placeholder' => __('135'),
            'validate' => 'numeric'
        ),
        array(// this is field choose lunch
            'id' => 'option_business_cat',
            'type' => 'select',
            'args' => array('post_type' => 'menu', 'posts_per_page' => -1),
            'data' => 'posts',
            'title' => __('Меню', 'asite'),
            'multi'=>true,
        ),

    )
));
/*===================================New food================================= */
Redux::setSection($opt_name, array(
    'title' => __('New Food', 'asite'),
    'desc' => __('', 'asite'),
    'icon' => 'el el-braille',
    'fields' => array(
        array(
            'id' => 'option_new_food',
            'type' => 'select',
            'multi' => true,
            'args' => array('taxonomies' => 'cuisine', 'args' => array()),
            'data' => 'terms',
            'desc' => 'Should choose two categories',
            'hint' => array(
                'content' => __('Should choose two categories', 'asite')
            ),
            'title' => __('Categories food', 'asite')
        ),
     /*   array(
            'id' => 'option_num_new_food',
            'type' => 'text',
            'title' => __('Number display', 'asite'),
            'validate' => 'numeric'
        ),*/
        array(
            'id' => 'option_order_food',
            'type' => 'select',
            'title' => __('Order By', 'asite'),
            'options' => array(
                'date' => 'Newest to oldest',
                'rand' => 'Random'
            )
        )

    )
));
/*===================================STOCK LUNCH================================= */
Redux::setSection($opt_name, array(
    'title' => __('Акция', 'asite'),
    'icon' => 'el el-bell',
    'fields' => array(
     /*   array(
            'id' => 'option_stock_title',
            'type' => 'text',
            'title' => __('Title', 'asite'),
            'placeholder' => __('Cейчас идёт акция')
        ),*/
        array(
            'id' => 'option_stock_img',
            'type' => 'media',
            'url' => true,
            'title' => __('Media w/ URL', 'redux-framework-demo'),
            'desc' => __('Basic media uploader with disabled URL input field.', 'redux-framework-demo'),
        )
    )
));

/*===================================SOCIAL================================= */
Redux::setSection($opt_name, array(
    'title' => __('Social & Contact', 'asite'),
    'icon' => 'el el-network',
    'fields' => array(
        array(
            'id' => 'option_socail_fb',
            'type' => 'text',
            'title' => __('Facebook', 'asite'),
            'placeholder' => __('http://facebook.com/ngduy0502')
        ),
        array(
            'id' => 'option_socail_insta',
            'type' => 'text',
            'title' => __('Instagram', 'asite'),
            'placeholder' => __('http://instagram.com/nguyenduy0502')
        ),
        array(
            'id' => 'option_socail_mail',
            'type' => 'text',
            'title' => __('Mail', 'asite'),
            'placeholder' => __('info@asite.it')
        ),
        array(
            'id' => 'option_socail_vk',
            'type' => 'text',
            'title' => __('Vk', 'asite'),
            'placeholder' => __('https://vk.com/nguyenduy')
        ),
        array(
            'id' => 'option_contact_address',
            'type' => 'text',
            'title' => __('Address', 'asite'),
            'placeholder' => __('Академика Туполева, 15, к. 2')
        ),
        array(
            'id' => 'option_contact_phone_1',
            'type' => 'text',
            'title' => __('Phone Number', 'asite'),
            'placeholder' => __('8 (495) 726 31 42')
        ),
        array(
            'id' => 'option_contact_phone_2',
            'type' => 'text',
            'title' => __('Phone Number', 'asite'),
            'placeholder' => __('8 (965) 113-01-66')
        ),
        array(
            'id' => 'option_contact_phone_3',
            'type' => 'text',
            'title' => __('Phone Number', 'asite'),
            'placeholder' => __('8 (909) 699-11-07')
        ),
        array(
            'id' => 'option_contact_form',
            'type' => 'text',
            'title' => __('Contact Form', 'asite'),
            'placeholder' => __('[contact-form-7 id="3893" title="Contact form"]')
        ),
    )
));

/*===================================LOGO================================= */
Redux::setSection($opt_name, array(
    'title' => __('Logo', 'asite'),
    'icon' => 'el el-ok-circle',
    'fields' => array(
        array(
            'id' => 'option_logo',
            'type' => 'media',
            'title' => __('Upload Logo', 'asite'),
        )
    )
));


/*
 * <--- END SECTIONS
 */
?>