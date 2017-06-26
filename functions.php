<?php /* * Child theme functions file * */ function nftheme_enqueue_styles() { $parent_style = 'accesspress-parallax_style'; //parent theme style handle 'accesspress-parallax_style' //Enqueue parent and child theme style.css wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' ); wp_enqueue_style( 'nftheme_style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version')
   ;
} 
add_action( 'wp_enqueue_scripts', 'nftheme_enqueue_styles' );



// Add Google Fonts
function startwordpress_google_fonts() {
				wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
				wp_enqueue_style( 'OpenSans');
		}

add_action('wp_print_styles', 'startwordpress_google_fonts');

// WordPress Titles
add_theme_support( 'title-tag' );

// Custom settings
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section' );
           do_settings_sections( 'theme-options' );      
           submit_button(); 
       ?>          
    </form>
  </div><!-- wrap -->
<?php }

// Twitter
function setting_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
<?php }
// Facebook
function setting_facebook() { ?>
  <input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
<?php }
// Instagram
function setting_instagram() { ?>
  <input type="text" name="instagram" id="instagram" value="<?php echo get_option('instagram'); ?>" />
<?php }
// Youtube
function setting_youtube() { ?>
  <input type="text" name="youtube" id="youtube" value="<?php echo get_option('youtube'); ?>" />
<?php }
// RSS
function setting_RSS() { ?>
  <input type="text" name="RSS" id="RSS" value="<?php echo get_option('RSS'); ?>" />
<?php }

function custom_settings_page_setup() {
  add_settings_section( 'section', 'All Settings', null, 'theme-options' );

  add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
  register_setting( 'section', 'twitter' );

	add_settings_field( 'facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section' );
	register_setting( 'section', 'facebook' );

  add_settings_field( 'instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section' );
  register_setting( 'section', 'instagram' );

  add_settings_field( 'youtube', 'Youtube URL', 'setting_youtube', 'theme-options', 'section' );
  register_setting( 'section', 'youtube' );

  add_settings_field( 'RSS', 'RSS URL', 'setting_RSS', 'theme-options', 'section' );
  register_setting( 'section', 'RSS' );

}
add_action( 'admin_init', 'custom_settings_page_setup' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );




