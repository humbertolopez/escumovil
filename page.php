<?php get_header(); ?>

<!-- cuerpo -->
<div id="post" class="block">

	<?php if(is_page('cotizacion')) { get_template_part('conversion'); } ?>

	<!-- inicia loop -->
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		<h1><?php the_title(); ?></h1>

		<div class="doblecol">
			<?php the_content(); ?>
		</div>
		
	<?php endwhile; endif; ?>
	<!-- fin loop -->
	<?php
		if(is_page('cotizacion')) {
			?>
				<div class="doblecol">
					<?php get_template_part('info-pagos'); ?>
					<?php get_template_part('info-tarjetas'); ?>
					<?php get_template_part('tablacalculo'); ?>
				</div>
			<?
		} else if (is_page('camerinos')) {
			?>
				<div class="doblecol">					
					<?php get_template_part('info-pagos') ?>
				</div>
				<div class="col">
					<a href="<?php bloginfo('url'); ?>/cotizacion"><h4 class="cotbutton">Solicita una cotización</h4></a>
				</div>
			<?
		} else if (is_page('centrosdelavado')) {
			?>
				<div class="doblecol">
					<?php echo do_shortcode('[gallery ids="737,738,739,740,741" columns="2" link="file" orderby="rand"]'); ?>
					<?php get_template_part('info-pagos') ?>
				</div>
				<div class="col">
					<a href="<?php bloginfo('url'); ?>/cotizacion"><h4 class="cotbutton">Solicita una cotización</h4></a>
				</div>
			<?
		}
	?>
</div>

<?php get_footer(); ?>