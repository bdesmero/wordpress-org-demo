<?php get_header(); ?>
<div class="mh-wrapper clearfix">
	<div class="mh-main">
		<div id="main-content" class="mh-content">
			<?php mh_before_page_content(); ?>
			<?php mh_magazine_page_title(); ?>
			<div class="entry-content mh-widget">
				<div class="mh-box">
					<p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'mh-magazine'); ?></p>
				</div>
				<h4 class="mh-widget-title mh-404-search">
					<?php esc_html_e('Search', 'mh-magazine'); ?>
				</h4>
				<?php get_search_form(); ?>
			</div>
			<div class="clearfix">
				<div class="mh-sidebar mh-home-sidebar mh-home-area-3"><?php
					$instance = array('title' => esc_html__('Popular Articles', 'mh-magazine'), 'postcount' => 5, 'order' => 'comment_count', 'excerpt' => 'first', 'sticky' => 1);
					$args = array('before_widget' => '<div class="mh-widget">', 'after_widget' => '</div>', 'before_title' => '<h4 class="mh-widget-title">', 'after_title' => '</h4>');
					the_widget('mh_magazine_custom_posts', $instance , $args); ?>
				</div>
				<div class="mh-sidebar mh-home-sidebar mh-margin-left mh-home-area-4"><?php
					$instance = array('title' => esc_html__('Random Articles', 'mh-magazine'), 'postcount' => 5, 'order' => 'rand', 'excerpt' => 'first', 'sticky' => 1);
					$args = array('before_widget' => '<div class="mh-widget">', 'after_widget' => '</div>', 'before_title' => '<h4 class="mh-widget-title">', 'after_title' => '</h4>');
					the_widget('mh_magazine_custom_posts', $instance , $args); ?>
				</div>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
	<?php mh_magazine_second_sidebar(); ?>
</div>
<?php get_footer(); ?>