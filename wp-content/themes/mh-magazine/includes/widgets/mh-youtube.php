<?php

/***** MH YouTube Video *****/

class mh_magazine_youtube extends WP_Widget {
    function __construct() {
		parent::__construct(
			'mh_magazine_youtube', esc_html_x('MH YouTube Video', 'widget name', 'mh-magazine'),
			array('classname' => 'mh_magazine_youtube', 'description' => esc_html__('MH YouTube Video widget to display a YouTube Video.', 'mh-magazine'))
		);
	}
    function widget($args, $instance) {
    	$defaults = array('title' => '', 'link' => '', 'video_id' => '');
        $instance = wp_parse_args($instance, $defaults);
        echo $args['before_widget'];
			if (!empty($instance['title'])) {
				echo $args['before_title'];
					echo '<i class="fa fa-youtube-play"></i>';
					if (!empty($instance['link'])) { echo '<a href="' . esc_url($instance['link']) . '" class="mh-widget-title-link">'; }
						echo esc_html(apply_filters('widget_title', $instance['title']));
					if (!empty($instance['link'])) { echo '</a>'; }
				echo $args['after_title'];
			} ?>
			<div class="mh-video-widget">
        		<div class="mh-video-container">
        			<iframe seamless width="1280" height="720" src="<?php echo '//www.youtube.com/embed/' . esc_attr($instance['video_id']) . '?wmode=opaque&amp;rel=0&amp;controls=2&amp;hd=1&amp;autoplay=0'; ?>"></iframe>
        		</div>
			</div><?php
        echo $args['after_widget'];
    }
    function update($new_instance, $old_instance) {
    	$instance = array();
        if (!empty($new_instance['title'])) {
			$instance['title'] = sanitize_text_field($new_instance['title']);
		}
		if (!empty($new_instance['link'])) {
			$instance['link'] = esc_url_raw($new_instance['link']);
		}
		if (!empty($new_instance['video_id'])) {
			$instance['video_id'] = sanitize_text_field($new_instance['video_id']);
		}
        return $instance;
    }
    function form($instance) {
    	$defaults = array('title' => '', 'link' => '', 'video_id' => '');
        $instance = wp_parse_args($instance, $defaults); ?>
        <p>
        	<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'mh-magazine'); ?></label>
			<input class="widefat" type="text" value="<?php echo esc_attr($instance['title']); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" id="<?php echo esc_attr($this->get_field_id('title')); ?>" />
        </p>
        <p>
        	<label for="<?php echo esc_attr($this->get_field_id('link')); ?>"><?php esc_html_e('Link Title to custom URL (optional):', 'mh-magazine'); ?></label>
			<input class="widefat" type="text" value="<?php echo esc_url($instance['link']); ?>" name="<?php echo esc_attr($this->get_field_name('link')); ?>" id="<?php echo esc_attr($this->get_field_id('link')); ?>" />
        </p>
        <p>
        	<label for="<?php echo esc_attr($this->get_field_id('video_id')); ?>"><?php esc_html_e('Video ID:', 'mh-magazine'); ?></label>
			<input class="widefat" type="text" value="<?php echo esc_attr($instance['video_id']); ?>" name="<?php echo esc_attr($this->get_field_name('video_id')); ?>" id="<?php echo esc_attr($this->get_field_id('video_id')); ?>" />
            <small><?php _e('Enter the YouTube video ID - also known as the watch code, example: uEdAutR8WC8)', 'mh-magazine'); ?></small>
        </p><?php
    }
}

?>