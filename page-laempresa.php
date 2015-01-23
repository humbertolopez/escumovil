<?php
/*
Template Name: La Empresa
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
	<!-- fin loop principal -->
		<div class="col">
			<!-- loop pagina clientes -->
			<?php
				$titular = new WP_Query ('page_id=254');
				if($titular->have_posts()) : while($titular->have_posts()) : $titular->the_post();
			?>
				<h3><?php the_title(); ?></h3>
				<?php the_content(); ?>

			<?php wp_reset_postdata(); ?>

			<?php endwhile; endif; ?>
			<!-- fin loop pagina clientes -->
		</div>
		<div class="col">
			<!-- loop pagina sobre certificacion -->
			<?php
				$titular = new WP_Query ('page_id=141');
				if($titular->have_posts()) : while($titular->have_posts()) : $titular->the_post();
			?>
				<h3><?php the_title(); ?></h3>
				<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" class="psai">
				<?php the_content(); ?>

			<?php wp_reset_postdata(); ?>

			<?php endwhile; endif; ?>
			<!-- fin del loop pagina sobre certificacion -->
		</div>
		
</div>

<?php get_footer(); ?>