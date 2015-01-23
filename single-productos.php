<?php get_header(); ?>

<!-- cuerpo -->
<div id="post" class="block">

	<!-- inicia loop -->
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<?php if(in_category('oficinas')) {
			?>
				<h1>Oficina Móvil <?php the_title(); ?></h1>
			<?
		} else {
			?>
			<h1><?php the_title(); ?></h1>
			<?
		}
	?>		

		<div class="doblecol firstcol">
			<?php 
				if(in_category('portatiles')) {
					?>
						<?php the_post_thumbnail('medium'); ?>
					<?
				} else if (in_category('oficinas')) {
					?>
						<?php the_post_thumbnail('full'); ?>
					<?					
				} else if (in_category('industrial')) {
					?>
						<?php the_post_thumbnail('medium'); ?>
					<?
				}
			?>			

			<?php the_content();?>

			<a href="<?php bloginfo('url'); ?>/cotizacion"><h4 class="cotbutton">Solicita una cotización</h4></a>

			<?php get_template_part('info-pagos'); ?>

			<?php get_template_part('info-tarjetas'); ?>

			<?php
				if(in_category('portatiles')) {
					?>
						<?php get_template_part('tablacalculo'); ?>
					<?
				}
			?>			

		</div>

		<div class="col">
				<?php get_template_part('serviciosremolque'); ?>
			<h3>Dimensiones</h3>
				<?php get_template_part('dimensiones'); ?>
		</div>

	<?php endwhile; endif; ?>
	<!-- fin loop -->

</div>

<?php get_footer(); ?>