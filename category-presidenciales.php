<?php get_header(); ?>

<!-- cuerpo -->
<div id="post">
	<h2><?php single_cat_title(); ?></h2>
	<h4><?php echo category_description( get_category_by_slug('presidenciales')->term_id ); ?></h4>
	
	<div id="preslidewrapper" class="block">
		<div id="preslide" class="block">
			<img src="<?php echo get_template_directory_uri(); ?>/img/presidenciales/1.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/presidenciales/3.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/presidenciales/4.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/presidenciales/5.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/presidenciales/7.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/presidenciales/8.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/presidenciales/9.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/presidenciales/10.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/presidenciales/11.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/presidenciales/12.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/presidenciales/13.jpg">
		</div>			
		<div id="prepags" class="block"></div>
	</div>

	<?php
			
		$args = array(
			'category_name'  => 'presidenciales',
			'posts_per_page' => -1,
			'orderby' => 'title',
			'order' => 'ASC',
		);

		$cat_query = new WP_Query($args);

		if($cat_query->have_posts()) : while($cat_query->have_posts()) : $cat_query->the_post();
	?>

	<div class="block presingle">
		<div class="col">
			<h3><?php the_title(); ?></h3>
		</div>
		<div class="col">
			<?php the_post_thumbnail('presidenciales'); ?>
		</div>
		<div class="doblecol forcecol">
			<?php the_content(); ?>
		</div>				
	</div>

	<?php endwhile; endif; ?>

	<div class="block">
		<h3>Galería de imágenes</h3>
			<?php echo do_shortcode('[gallery columns="4" id="567" link="file"]') ?>
	</div>

	<div class="block">
		<div class="col">
			<a href="<?php bloginfo('url'); ?>/cotizacion"><h4 class="cotbutton">Solicita una cotización</h4></a>
		</div>
	</div>

</div>

<?php get_footer(); ?>