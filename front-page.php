<?php get_header(); ?>
		<div id="content" class="<?php echo roots_container_class; ?>">	
			<div class="container span-24" role="main">
				<?php get_template_part('loop', 'home'); ?>
			</div>
			<aside class="span-24" role="complementary">
				<div id="twitter" class="span-7 prepend-1 append-bottom"></div>
				<div class="span-14 append-1 prepend-1 last">
                    <?php iinclude_page(107); ?>
				</div>
			</aside>
		</div><!-- /#content -->
<?php get_footer(); ?>
