<?php get_header(); ?>
		<div id="content" class="<?php echo roots_container_class; ?>">	
			<div id="side_illust" class="span-24 last">
				<div id="main" class="span-16 prepend-8 last" role="main">
					<div class="container">
						<?php get_template_part('loop', 'page'); ?>
					</div>
				</div><!-- /#main -->
			</div><!-- /#side_illust -->
		</div><!-- /#content -->
<?php get_footer(); ?>
