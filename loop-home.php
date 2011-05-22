<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post();  ?>

	<?php if (function_exists('yoast_breadcrumb')) { if (is_page() && $post->post_parent) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } } ?>
	<?php the_content('続きを読む'); ?>
	<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>' )); ?>

<?php endwhile; // End the loop ?>

