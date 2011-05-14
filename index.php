<?php get_header(); ?>
		<div id="content" class="<?php echo roots_container_class; ?>">
			<div id="side_illust" class="span-8">
			</div>
			<div id="main" class="span-16 last" role="main">
				<div class="container">
					<h1>Diary</h1>
					<?php get_template_part('loop', 'index'); ?>
				</div>
			</div><!-- /#main -->
		</div><!-- /#content -->		
<?php get_footer(); ?>
