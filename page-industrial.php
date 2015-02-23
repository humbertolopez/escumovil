<?php
/*
Template Name: Industrial
*/
get_header(); ?>

<!-- cuerpo -->
<div id="post" class="block">

	<!-- inicia loop -->
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>		

		<div class="doblecol firstcol">
			<?php the_content();?>

			<a href="<?php bloginfo('url'); ?>/cotizacion"><h4 class="cotbutton">Solicita una cotización</h4></a>

			<?php get_template_part('info-pagos'); ?>

			<?php get_template_part('info-tarjetas'); ?>

			<?php get_template_part('tablacalculo'); ?>

		</div>
		
	<?php endwhile; endif; ?>
	<!-- fin loop -->

</div>

<?php get_footer(); ?>