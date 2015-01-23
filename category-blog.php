f<?php get_header(); ?>

<!-- cuerpo -->
<div id="post" class="block blogpost">

	<!-- inicia loop -->
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<?php
		if(in_category('testimoniales')) {
			?>
				<div class="block art">

					<div class="col colblog">
						<p class="date"><?php the_time('l j \d\e F, Y'); ?></p>
					</div>

					<div class="doblecol">

						<h3><a href="<?php the_permalink(); ?>">Testimonio de nuestros clientes: <?php the_title(); ?></a></h3>
						<?php the_content();?>

					</div>

				</div>
			<?
		} else if(in_category('eventos-pasados')) {
			?>
				<div class="col pasados">
					<?php the_post_thumbnail('remolquesthumb'); ?>
					<?php the_content(); ?>
				</div>
			<?
		} else {

			?>

			<div class="block art">

				<div class="col colblog">
					<p class="date"><?php the_time('l j \d\e F, Y'); ?></p>
				</div>

				<div class="doblecol">

					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

					<?php the_post_thumbnail('medium'); ?>

					<?php the_content();?>

				</div>

			</div>

			<?

		}

	?>

	<?php endwhile; endif; ?>
	<!-- fin loop -->

</div>

<?php get_footer(); ?>