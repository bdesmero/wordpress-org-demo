<?php

/***** Add Custom Color Options to Customizer *****/

function mh_magazine_color_options($wp_customize) {

    /***** Add Settings *****/

    $wp_customize->add_setting('mh_magazine_options[color_bg_header]', array('default' => '#ffffff', 'type' => 'option', 'sanitize_callback' => 'sanitize_hex_color'));
    $wp_customize->add_setting('mh_magazine_options[color_bg_inner]', array('default' => '#ffffff', 'type' => 'option', 'sanitize_callback' => 'sanitize_hex_color'));
    $wp_customize->add_setting('mh_magazine_options[color_1]', array('default' => '#2a2a2a', 'type' => 'option', 'sanitize_callback' => 'sanitize_hex_color'));
    $wp_customize->add_setting('mh_magazine_options[color_2]', array('default' => '#e64946', 'type' => 'option', 'sanitize_callback' => 'sanitize_hex_color'));
    $wp_customize->add_setting('mh_magazine_options[color_3]', array('default' => '#f5f5f5', 'type' => 'option', 'sanitize_callback' => 'sanitize_hex_color'));
    $wp_customize->add_setting('mh_magazine_options[color_text_general]', array('default' => '#000000', 'type' => 'option', 'sanitize_callback' => 'sanitize_hex_color'));
    $wp_customize->add_setting('mh_magazine_options[color_text_1]', array('default' => '#ffffff', 'type' => 'option', 'sanitize_callback' => 'sanitize_hex_color'));
    $wp_customize->add_setting('mh_magazine_options[color_text_2]', array('default' => '#ffffff', 'type' => 'option', 'sanitize_callback' => 'sanitize_hex_color'));
    $wp_customize->add_setting('mh_magazine_options[color_text_3]', array('default' => '#000000', 'type' => 'option', 'sanitize_callback' => 'sanitize_hex_color'));
    $wp_customize->add_setting('mh_magazine_options[color_text_meta]', array('default' => '#979797', 'type' => 'option', 'sanitize_callback' => 'sanitize_hex_color'));
    $wp_customize->add_setting('mh_magazine_options[color_links', array('default' => '#e64946', 'type' => 'option', 'sanitize_callback' => 'sanitize_hex_color'));
	$wp_customize->add_setting('mh_magazine_options[color_links_hover', array('default' => '#e64946', 'type' => 'option', 'sanitize_callback' => 'sanitize_hex_color'));

    /***** Add Controls *****/

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_bg_header', array('label' => esc_html__('Background Header', 'mh-magazine'), 'section' => 'colors', 'settings' => 'mh_magazine_options[color_bg_header]', 'priority' => 50)));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_bg_inner', array('label' => esc_html__('Background Inner', 'mh-magazine'), 'section' => 'colors', 'settings' => 'mh_magazine_options[color_bg_inner]', 'priority' => 51)));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_1', array('label' => sprintf(esc_html_x('Theme Color %d', 'options panel', 'mh-magazine'), 1), 'section' => 'colors', 'settings' => 'mh_magazine_options[color_1]', 'priority' => 52)));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_2', array('label' => sprintf(esc_html_x('Theme Color %d', 'options panel', 'mh-magazine'), 2), 'section' => 'colors', 'settings' => 'mh_magazine_options[color_2]', 'priority' => 53)));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_3', array('label' => sprintf(esc_html_x('Theme Color %d', 'options panel', 'mh-magazine'), 3), 'section' => 'colors', 'settings' => 'mh_magazine_options[color_3]', 'priority' => 54)));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_text_general', array('label' => esc_html__('Text: General', 'mh-magazine'), 'section' => 'colors', 'settings' => 'mh_magazine_options[color_text_general]', 'priority' => 55)));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_text_1', array('label' => sprintf(esc_html_x('Text: Colored Sections (Color %d)', 'options panel', 'mh-magazine'), 1), 'section' => 'colors', 'settings' => 'mh_magazine_options[color_text_1]', 'priority' => 56)));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_text_2', array('label' => sprintf(esc_html_x('Text: Colored Sections (Color %d)', 'options panel', 'mh-magazine'), 2), 'section' => 'colors', 'settings' => 'mh_magazine_options[color_text_2]', 'priority' => 57)));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_text_3', array('label' => sprintf(esc_html_x('Text: Colored Sections (Color %d)', 'options panel', 'mh-magazine'), 3), 'section' => 'colors', 'settings' => 'mh_magazine_options[color_text_3]', 'priority' => 58)));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_text_meta', array('label' => esc_html__('Text: Post Meta', 'mh-magazine'), 'section' => 'colors', 'settings' => 'mh_magazine_options[color_text_meta]', 'priority' => 59)));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_links', array('label' => esc_html__('Links: Content on Posts/Pages', 'mh-magazine'), 'section' => 'colors', 'settings' => 'mh_magazine_options[color_links]', 'priority' => 60)));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_links_hover', array('label' => esc_html__('Links: Hover Color', 'mh-magazine'), 'section' => 'colors', 'settings' => 'mh_magazine_options[color_links_hover]', 'priority' => 61)));
}
add_action('customize_register', 'mh_magazine_color_options');

/***** Default Custom Colors *****/

if (!function_exists('mh_magazine_custom_colors')) {
	function mh_magazine_custom_colors() {
		$custom_colors = wp_parse_args(
			get_option('mh_magazine_options', array()),
			mh_magazine_default_colors()
		);
		return $custom_colors;
	}
}

if (!function_exists('mh_magazine_default_colors')) {
	function mh_magazine_default_colors() {
		$default_colors = array(
			'color_bg_header' => '#ffffff',
			'color_bg_inner' => '#ffffff',
			'color_1' => '#2a2a2a',
			'color_2' => '#e64946',
			'color_3' => '#f5f5f5',
			'color_text_general' => '#000000',
			'color_text_1' => '#ffffff',
			'color_text_2' => '#ffffff',
			'color_text_3' => '#000000',
			'color_text_meta' => '#979797',
			'color_links' => '#e64946',
			'color_links_hover' => '#e64946'
		);
		return $default_colors;
	}
}

/***** Custom Colors CSS Output *****/

function mh_magazine_custom_colors_css() {
	$mh_magazine_colors = mh_magazine_custom_colors();
	$mh_magazine_hex = $mh_magazine_colors['color_1'];
	list($mh_magazine_hex_red, $mh_magazine_hex_green, $mh_magazine_hex_blue) = sscanf($mh_magazine_hex, "#%02x%02x%02x");
	if ($mh_magazine_colors['color_bg_header'] != '#ffffff' || $mh_magazine_colors['color_bg_inner'] != '#ffffff' || $mh_magazine_colors['color_1'] != '#2a2a2a' || $mh_magazine_colors['color_2'] != '#e64946' || $mh_magazine_colors['color_3'] != '#f5f5f5' || $mh_magazine_colors['color_text_general'] != '#000000' || $mh_magazine_colors['color_text_1'] != '#ffffff' || $mh_magazine_colors['color_text_2'] != '#ffffff' || $mh_magazine_colors['color_text_3'] != '#000000' || $mh_magazine_colors['color_text_meta'] != '#979797' || $mh_magazine_colors['color_links'] != '#e64946' || $mh_magazine_colors['color_links_hover'] != '#e64946') {
    	echo '<style type="text/css">' . "\n";
			if ($mh_magazine_colors['color_bg_header'] != '#ffffff') {
    			echo '.mh-header { background: ' . $mh_magazine_colors['color_bg_header'] . '; }' . "\n";
			}
			if ($mh_magazine_colors['color_bg_inner'] != '#ffffff') {
    			echo '.mh-wrapper { background: ' . $mh_magazine_colors['color_bg_inner'] . '; }' . "\n";
    			echo '.mh-breadcrumb, .entry-meta, .mh-subheading-top, .mh-custom-posts-item, .mh-posts-large-item, .mh-posts-list-item, .mh-posts-grid-widget-more, .mh-user-item, .widget_archive li, .widget_categories li, .widget_pages li a, .widget_meta li, .widget_nav_menu .menu > li, .widget_recent_entries li, .recentcomments, .mh-box, table, td, th { border-color: rgba(255, 255, 255, 0.3); }' . "\n";
			}
			if ($mh_magazine_colors['color_1'] != '#2a2a2a') {
    			echo '.mh-header-nav li:hover, .mh-header-nav ul li:hover > ul, .mh-main-nav-wrap, .mh-main-nav, .mh-main-nav ul li:hover > ul, .mh-extra-nav li:hover, .mh-extra-nav ul li:hover > ul, .mh-footer-nav li:hover, .mh-footer-nav ul li:hover > ul, .mh-social-nav li a:hover, .mh-widget-col-1 .mh-slider-caption, .mh-widget-col-2 .mh-slider-caption, .mh-carousel-layout1, .mh-spotlight-widget, .mh-social-widget li a, .mh-author-bio-widget, .mh-footer-widget .mh-tab-comment-excerpt, .mh-nip-item:hover .mh-nip-overlay, .mh-widget .tagcloud a, .mh-footer-widget .tagcloud a, .mh-footer, .mh-copyright-wrap, input[type=submit]:hover, #respond #cancel-comment-reply-link:hover, #infinite-handle span:hover { background: ' . $mh_magazine_colors['color_1'] . '; }' . "\n";
				echo '.mh-slider-caption { background: ' . $mh_magazine_colors['color_1'] . '; background: rgba(' . $mh_magazine_hex_red . ', ' . $mh_magazine_hex_green . ', ' . $mh_magazine_hex_blue . ', 0.8); }' . "\n";
				echo '@media screen and (max-width: 900px) { #mh-mobile .mh-slider-caption { background: rgba(' . $mh_magazine_hex_red . ', ' . $mh_magazine_hex_green . ', ' . $mh_magazine_hex_blue . ', 1); } }' . "\n";
				echo '.slicknav_menu, .slicknav_nav ul { border-color: ' . $mh_magazine_colors['color_1'] . '; }' . "\n";
				echo '.mh-copyright, .mh-copyright a { color: #fff; }' . "\n";
			}
			if ($mh_magazine_colors['color_2'] != '#e64946') {
    			echo '.mh-preheader, .mh-wide-layout .mh-subheader, .mh-ticker-title, .mh-main-nav li:hover, .mh-footer-nav, .slicknav_menu, .slicknav_btn, .slicknav_nav .slicknav_item:hover, .slicknav_nav a:hover, .mh-back-to-top, .mh-subheading, .entry-tags .fa, .entry-tags li:hover, .mh-loop-layout2 .mh-loop-caption, .mh-widget-layout2 .mh-widget-title, .mh-widget-layout2 .mh-footer-widget-title, #mh-mobile .flex-control-paging li a.flex-active, .mh-slider-layout2 .mh-slider-category, .mh-carousel-layout1 .mh-carousel-caption, .mh-spotlight-caption, .mh-posts-large-caption, .mh-tab-button.active, .mh-tab-button.active:hover, .mh-footer-widget .mh-tab-button.active, .mh-social-widget li:hover a, .mh-footer-widget .mh-social-widget li a, .mh-footer-widget .mh-author-bio-widget, .tagcloud a:hover, .mh-widget .tagcloud a:hover, .mh-footer-widget .tagcloud a:hover, .page-numbers:hover, .mh-loop-pagination .current, .mh-comments-pagination .current, .pagelink, a:hover .pagelink, input[type=submit], #respond #cancel-comment-reply-link, #infinite-handle span { background: ' . $mh_magazine_colors['color_2'] . '; }' . "\n";
				echo 'blockquote, .mh-category-desc, .mh-widget-layout1 .mh-widget-title, .mh-widget-layout3 .mh-widget-title, .mh-widget-layout1 .mh-footer-widget-title, .mh-widget-layout3 .mh-footer-widget-title, .mh-slider-layout1 .mh-slider-caption, .mh-carousel-layout1, .mh-spotlight-widget, .mh-author-bio-widget, .mh-author-bio-title, .mh-author-bio-image-frame, .mh-video-widget, .mh-tab-buttons, .bypostauthor .mh-comment-meta, textarea:hover, input[type=text]:hover, input[type=email]:hover, input[type=tel]:hover, input[type=url]:hover { border-color: ' . $mh_magazine_colors['color_2'] . '; }' . "\n";
				echo '.mh-dropcap, .mh-carousel-layout1 .flex-direction-nav a, .mh-carousel-layout2 .mh-carousel-caption { color: ' . $mh_magazine_colors['color_2'] . '; }' . "\n";
			}
			if ($mh_magazine_colors['color_3'] != '#f5f5f5') {
    			echo '.mh-subheader, .mh-section-title, .page .entry-title, .page-title, .mh-category-desc, .mh-author-box, .mh-post-nav-wrap, .mh-share-buttons, .page-numbers, a .pagelink, #respond, .mh-comment-list .depth-1, .mh-widget-layout3 .mh-widget-title, .mh-widget .search-form, .mh-tab-button, .mh-tab-content, .mh-nip-widget, .mh-magazine-facebook-page-widget, .mh-social-widget, .mh-ad-spot, .wpcf7-form, #wp-calendar caption, th, pre, code { background: ' . $mh_magazine_colors['color_3'] . '; }' . "\n";
				echo '.mh-tab-post-item, th { border-color: rgba(255, 255, 255, 0.3); }' . "\n";
    			echo '.mh-comment-list .depth-2 { background: rgba(255, 255, 255, 0.3); }' . "\n";
				echo '.mh-comment-list .depth-3 { background: rgba(255, 255, 255, 0.4); }' . "\n";
				echo '.mh-comment-list .depth-4, .mh-tab-comment-excerpt { background: rgba(255, 255, 255, 0.6); }' . "\n";
				echo '.mh-comment-list .depth-5 { background: rgba(255, 255, 255, 0.8); }' . "\n";
			}
			if ($mh_magazine_colors['color_text_general'] != '#000000') {
    			echo 'body, a, .post .entry-title, .entry-content h1, .entry-content h2, .entry-content h3, .entry-content h4, .entry-content h5, .entry-content h6, .wp-caption-text, .mh-widget-layout1 .mh-widget-title { color: ' . $mh_magazine_colors['color_text_general'] . '; }' . "\n";
			}
			if ($mh_magazine_colors['color_text_1'] != '#ffffff') {
    			echo '.mh-header-nav li:hover a, .mh-main-nav li a, .mh-main-nav li:hover a, .mh-extra-nav li:hover a, .mh-footer-nav li:hover a, .mh-social-nav li:hover .fa-mh-social, .mh-slider-caption, .mh-slider-caption .mh-excerpt-more, .mh-slider-title, .mh-spotlight-widget, .mh-spotlight-title a, .mh-spotlight-title a:hover, .mh-spotlight-meta, .mh-spotlight-meta a, .mh-spotlight-meta a:hover, .mh-spotlight-widget .mh-excerpt-more, .mh-footer-widget .mh-tabbed-widget, .mh-footer-widget .mh-tabbed-widget a, .mh-author-bio-title, .mh-author-bio-text, .mh-social-widget .fa-mh-social, .mh-footer, .mh-footer a, .mh-widget-layout1 .mh-footer-widget-title, .mh-widget-layout3 .mh-footer-widget-title, .mh-copyright, .mh-copyright a, .tagcloud a, .mh-tabbed-widget .tagcloud a, input[type=submit]:hover, #respond #cancel-comment-reply-link:hover, #infinite-handle span:hover { color: ' . $mh_magazine_colors['color_text_1'] . '; }' . "\n";
			}
			if ($mh_magazine_colors['color_text_2'] != '#ffffff') {
    			echo '.mh-header-nav li a, .mh-main-nav li:hover > a, .mh-footer-nav li a, .mh-social-nav .fa-mh-social, .slicknav_nav a, .slicknav_nav a:hover, .slicknav_nav .slicknav_item:hover, .slicknav_menu .slicknav_menutxt, .mh-ticker-title, .mh-wide-layout .mh-ticker-item a, .mh-subheading, .entry-tags .fa, .entry-tags a:hover, .mh-content .current, .page-numbers:hover, .pagelink, a:hover .pagelink, .mh-loop-layout2 .mh-loop-caption, .mh-back-to-top, .mh-back-to-top:hover, .mh-widget-layout2 .mh-widget-title, .mh-widget-layout2 .mh-widget-title a, .mh-widget-layout2 .mh-footer-widget-title, .mh-widget-layout2 .mh-footer-widget-title a, .mh-slider-layout2 .mh-slider-category, .mh-carousel-layout1 .mh-carousel-caption, .mh-spotlight-caption, .mh-posts-large-caption, .mh-footer-widget .mh-author-bio-title, .mh-footer-widget .mh-author-bio-text, .mh-social-widget li:hover .fa-mh-social, .mh-footer-widget .mh-social-widget .fa-mh-social, .mh-tab-button.active, .mh-tab-button.active:hover, .mh-footer-widget .mh-tab-button.active, .tagcloud a:hover, .mh-widget .tagcloud a:hover, .mh-footer-widget .tagcloud a:hover, input[type=submit], #respond #cancel-comment-reply-link, #infinite-handle span { color: ' . $mh_magazine_colors['color_text_2'] . '; }' . "\n";
				echo '.slicknav_menu .slicknav_icon-bar { background: ' . $mh_magazine_colors['color_text_2'] . '; }' . "\n";
			}
			if ($mh_magazine_colors['color_text_3'] != '#000000') {
    			echo '.mh-boxed-layout .mh-ticker-item a, .page .entry-title, .page-title, .mh-section-title, .mh-category-desc, .mh-author-box, .mh-author-box a, .mh-post-nav a, .page-numbers, a .pagelink, .mh-widget-layout3 .mh-widget-title, .mh-widget-layout3 .mh-widget-title a, .mh-tabbed-widget, .mh-tabbed-widget a, .wpcf7-form, #respond, #respond a, #respond .comment-reply-title, .mh-comment-list, pre, code { color: ' . $mh_magazine_colors['color_text_3'] . '; }' . "\n";
			}
			if ($mh_magazine_colors['color_text_meta'] != '#979797') {
    			echo '.mh-meta, .mh-meta a, .mh-footer .mh-meta a, .mh-breadcrumb, .mh-breadcrumb a, .mh-user-data { color: ' . $mh_magazine_colors['color_text_meta'] . '; }' . "\n";
			}
			if ($mh_magazine_colors['color_links'] != '#e64946') {
    			echo '.entry-content a { color: ' . $mh_magazine_colors['color_links'] . '; }' . "\n";
			}
			if ($mh_magazine_colors['color_links_hover'] != '#e64946') {
    			echo 'a:hover, .mh-footer a:hover, .entry-content a:hover, .mh-author-box a:hover, .mh-post-nav a:hover, .mh-tabbed-widget a:hover, #respond a:hover, .mh-meta a:hover, .mh-footer .mh-meta a:hover, .mh-breadcrumb a:hover { color: ' . $mh_magazine_colors['color_links_hover'] . '; }' . "\n";
			}
		echo '</style>' . "\n";
	}
}
add_action('wp_head', 'mh_magazine_custom_colors_css');

?>