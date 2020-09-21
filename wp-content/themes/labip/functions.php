<?php

// Filter except length to 35 words.
// tn custom excerpt length
function tn_custom_excerpt_length( $length ) {
    return 35;
    }
    add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );

function lapip_theme_support(){
    //create dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'lapip_theme_support');

function lapip_menus(){
    $locations = array(
        'primary' => "Primary Menu",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'lapip_menus');

function lapip_register_styles(){
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('labip-style-css', get_template_directory_uri() . "/css/style.css", array(), $version, 'all');
        wp_enqueue_style('labip-plugin-css', get_template_directory_uri() . "/css/plugins.css", array(), '1.0', 'all');
    }

    add_action('wp_enqueue_scripts', 'lapip_register_styles');

    function lapip_register_scripts(){
        wp_enqueue_script('labip-jquery-js', get_template_directory_uri() . "/js/jquery.js", array(), '1.0', true);
        wp_enqueue_script('labip-plugin-js', get_template_directory_uri() . "/js/plugins.js", array(), '1.0', true);
        wp_enqueue_script('labip-function-js', get_template_directory_uri() . "/js/functions.js", array(), '1.0', true);
    }

    add_action('wp_enqueue_scripts', 'lapip_register_scripts');


    //Register Sidebars
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Single',
		'id' => 'single',
		'description' => 'Widget on Single page.',
		'before_widget' => '<div class="%2$s widget" id="%1$s">',
		'after_widget' => '</nav></div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4><nav>',
	));

	register_sidebar(array(
		'name' => 'Event',
		'id' => 'event',
		'description' => 'Widget on Event page.',
		'before_widget' => '<div class="%2$s widget" id="%1$s">',
		'after_widget' => '</nav></div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4><nav>',
	));


	register_sidebar(array(
		'name' => 'Page',
		'id' => 'page',
		'description' => 'Widget on Page.',
		'before_widget' => '<div class="%2$s widget" id="%1$s">',
		'after_widget' => '</nav></div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4></div>',
	));
	register_sidebar(array(
		'name' => 'Footer 1',
		'id' => 'footer1',
		'description' => 'Widget on footer.',
		'before_widget' => '<div class="%2$s widget" id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	));
	register_sidebar(array(
		'name' => 'Footer 2',
		'id' => 'footer2',
		'description' => 'Widget on footer.',
		'before_widget' => '<div class="%2$s widget" id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'name' => 'Footer 3',
		'id' => 'footer3',
		'description' => 'Widget on footer.',
		'before_widget' => '<div class="%2$s widget" id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));
}

add_filter('wp_enqueue_scripts', 'tjd_theme_scripts', 0);
function tjd_theme_scripts()
{
	// CSS
	//wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/fonts/icomoon/style.css', array(), '1.0' );
	wp_enqueue_style('plugins-css', get_template_directory_uri() . '/css/plugins.css', array(), '1.0');
	wp_enqueue_style('main', get_template_directory_uri() . '/css/style.css', array(), '1.0');
	wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0');
	//	wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0');

	// JS
	wp_register_script('plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '1.0', true);
	wp_register_script('functions', get_template_directory_uri() . '/js/functions.js', array('jquery'), '1.0', true);

	wp_enqueue_script('plugins');
	wp_enqueue_script('functions');
}

function tjd_latest_post($number, $thumb)
{
?>
	<div class="widget">
		<h4 class="widget-title"><?php _e('Latest News', 'tjd-framework'); ?> </h4>
		<div class="post-thumbnail-list">
			<?php
			$cur_read = get_the_ID();
			$the_query = null;
			$the_query = new WP_Query('post_status=publish&post_type=post&posts_per_page=' . $number);

			if ($thumb == 1) {

				while ($the_query->have_posts()) : $the_query->the_post();

			?>

					<div class="post-thumbnail-entry">
						<?php
						if (has_post_thumbnail()) {
							the_post_thumbnail('small');
						} else {
						?>
							<img width="100" height="" src="<?php bloginfo('template_directory'); ?>/img/noimage.jpg" alt="<?php the_title(); ?>" />
						<?php
						}
						?>
						<div class="post-thumbnail-content">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							<span class="post-date"><i class="fas fa-calendar-alt"> </i><?php echo get_the_date(); ?></span>
							<!-- <span class="post-category"><i class="fa fa-tag"></i> <?php foreach ((get_the_category()) as $category) {
																							echo $category->cat_name . ' ';
																						} ?></span>-->
						</div>
					</div>

				<?php endwhile;
			} else {


				echo "<ul>";
				while ($the_query->have_posts()) : $the_query->the_post();

					if (is_single()) {
						if ($cur_read == get_the_ID()) {
							$class = "onread";
						} else {
							$class = "normal";
						}
					} else {
						$class = 'normal';
					} ?>
					<li class="<?php echo $class; ?>"><span class="reading"><?php _e('On read', 'tjd-framework'); ?></span><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
						<span class="post-date"><?php echo get_the_date('d F, Y'); ?></span></li>

			<?php endwhile;
				echo "</ul>";

				wp_reset_query();
			}
			?>
		</div>

	</div>
<?php }

?>

