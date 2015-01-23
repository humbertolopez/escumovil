<?php
/*
Template Name: Documentos
*/
get_header(); ?>

<!-- cuerpo -->
<div id="post" class="block">

	<!-- inicia loop -->
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>
		
	<?php endwhile; endif; ?>
	<!-- fin loop principal -->

</div>

<?php get_footer(); ?>