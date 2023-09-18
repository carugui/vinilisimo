<?php


//  CARGAR Y VINCULAR CSS Y JS

    function my_scripts_and_css()
    {
        //  REMOVE GUTENBERG CSS
        wp_dequeue_style ( 'wp-block-library' );
        wp_dequeue_style ( 'wp-block-library-theme' );
        wp_dequeue_style ( 'wc-blocks-style' );

        if ( !is_admin() ) //  si no estás en el panel de admin... ejecuta y carga el JS y CSS
        {
            
            
            wp_enqueue_script ( 'js-main', get_stylesheet_directory_uri() . '/js/main.js', '', '', true );
            
            //wp_enqueue_style ( 'css-main', get_stylesheet_uri() );
            //la de abajo es una función más completa, cada vez que actualizas el CSS se guarda como una nueva versión, por lo tanto no hay problemas de chaché
            wp_enqueue_style ( 'css-main', get_stylesheet_uri(), '', filemtime ( get_template_directory() . '/style.css' ) );
        }
    }

    add_action ( 'wp_enqueue_scripts', 'my_scripts_and_css', 100 );


    //  AÑADIR SOPORTE PARA...

    add_theme_support ( 'title-tag' );
    add_theme_support ( 'post-thumbnails' );
    add_theme_support ( 'woocommerce' );


    // add_post_type_support ( 'page', 'excerpt' );



  //  REGISTRO DE MENÚS

    register_nav_menu ( 'header-menu', 'Cabecera del sitio' );
    register_nav_menu ( 'footer-menu-left', 'Pie de página a la izquierda' );
    register_nav_menu ( 'footer-menu-right', 'Pie de página a la derecha' );




  // Disable emojis in Wordpress
  function disable_emoji_feature()
  {
    // Prevent Emoji from loading on the front-end
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');

    // Remove from admin area also
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');

    // Remove from RSS feeds also
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');

    // Remove from Embeds
    remove_filter('embed_head', 'print_emoji_detection_script');

    // Remove from emails
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

    // Disable from TinyMCE editor. Currently disabled in block editor by default
    add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');

    /** Finally, prevent character conversion too
     ** without this, emojis still work
    ** if it is available on the user's device
    */

    add_filter('option_use_smilies', '__return_false');
  }

  // Disables emojis in WYSIWYG editor
  function disable_emojis_tinymce($plugins)
  {
    if (is_array($plugins)) {
      $plugins = array_diff($plugins, array('wpemoji'));
    }
    return $plugins;
  }
  add_action('init', 'disable_emoji_feature');


    
?>