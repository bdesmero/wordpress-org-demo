<?php /* Template Name: Full Width */ ?>
<?php get_header(); ?>
<div class="mh-wrapper"><?php
	if (have_posts()) :
		while (have_posts()) : the_post();
			mh_before_page_content();
			get_template_part('content', 'page');
		endwhile;
		comments_template();
    endif; ?>
</div>
<?php get_footer(); ?>