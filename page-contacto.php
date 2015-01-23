h<?php
/*
Template Name: Contacto
*/
get_header(); ?>

<!-- cuerpo -->
<div id="post" class="block">

	<!-- inicia loop -->
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		<h1><?php the_title(); ?></h1>

		<div class="doblecol">
			<?php the_content(); ?>
		</div>		
		
	<?php endwhile; endif; ?>
	<!-- fin loop -->

		<div class="doblecol forcecol">
			<h3>Escríbenos</h3>
			<?php echo do_shortcode('[contact-form-7 id="147" title="Contacto"]'); ?>
		</div>

</div>

<?php get_footer(); ?>