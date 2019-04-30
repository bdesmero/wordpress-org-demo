<?php $mh_magazine_options = mh_magazine_theme_options(); ?>
<div class="mh-header-mobile-nav clearfix"></div>
<?php if (has_nav_menu('mh_header_nav') || has_nav_menu('mh_social_nav')) { ?>
	<div class="mh-preheader">
    	<div class="mh-container mh-container-inner mh-row clearfix">
    		<?php if (has_nav_menu('mh_header_nav')) { ?>
            	<nav class="mh-header-nav mh-col-2-3 clearfix">
            		<?php wp_nav_menu(array('theme_location' => 'mh_header_nav')); ?>
				</nav>
			<?php } ?>
			<?php if (has_nav_menu('mh_social_nav')) { ?>
            	<nav class="mh-social-icons mh-social-nav mh-col-1-3 clearfix">
            		<?php wp_nav_menu(array('theme_location' => 'mh_social_nav', 'link_before' => '<span class="fa-stack"><i class="fa fa-stack-2x"></i><i class="fa fa-mh-social fa-stack-1x"></i></span><span class="screen-reader-text">', 'link_after' => '</span>')); ?>
				</nav>
			<?php } ?>
		</div>
	</div>
<?php } ?>
<header class="mh-header">
	<div class="mh-container mh-container-inner mh-row clearfix">
		<?php mh_magazine_custom_header(); ?>
	</div>
	<div class="mh-main-nav-wrap">
		<nav class="mh-main-nav mh-container mh-container-inner clearfix">
			<?php wp_nav_menu(array('theme_location' => 'mh_main_nav')); ?>
		</nav>
	</div>
	<?php if (has_nav_menu('mh_extra_nav')) { ?>
		<div class="mh-extra-nav-wrap">
			<nav class="mh-extra-nav mh-container mh-container-inner clearfix">
				<?php wp_nav_menu(array('theme_location' => 'mh_extra_nav')); ?>
			</nav>
		</div>
	<?php } ?>
</header>
<?php if ($mh_magazine_options['ticker'] == 1 || $mh_magazine_options['header_search'] == 'enable') { ?>
	<div class="mh-subheader">
		<div class="mh-container mh-container-inner mh-row clearfix">
			<?php if ($mh_magazine_options['ticker'] == 1) { ?>
				<div class="mh-col-2-3 mh-header-ticker">
					<?php get_template_part('content', 'ticker'); ?>
				</div>
			<?php } ?>
			<?php if ($mh_magazine_options['header_search'] == 'enable') { ?>
				<aside class="mh-col-1-3 mh-header-search">
					<?php get_search_form(); ?>
				</aside>
			<?php } ?>
		</div>
	</div>
<?php } ?>