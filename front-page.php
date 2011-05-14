<?php get_header(); ?>
		<div id="content" class="<?php echo roots_container_class; ?>">	
			<div class="container span-24" role="main">
				<?php get_template_part('loop', 'home'); ?>
			</div>
			<aside class="span-24" role="complementary">
				<div id="twitter" class="span-7">
					<script src="http://widgets.twimg.com/j/2/widget.js"></script>
					<script>
						new TWTR.Widget({
							version: 2,
							type: 'profile',
							rpp: 4,
							interval: 6000,
							width: 250,
							height: 300,
							theme: {
								shell: {
									background: '#333333',
									color: '#ffffff'
								},
								tweets: {
									background: '#000000',
									color: '#ffffff',
									links: '#4aed05'
								}
							},
							features: {
								scrollbar: false,
								loop: false,
								live: false,
								hashtags: true,
								timestamp: true,
								avatars: false,
								behavior: 'all'
							}
						}).render().setUser('nico_akua').start();
					</script>
				</div><!-- /#twitter -->
				<div id="recent_posts" class="span-17 last">
					<?php get_template_part('loop', 'index'); ?>
				</div><!-- /#recent_entry -->
			</aside>
		</div><!-- /#content -->
<?php get_footer(); ?>
