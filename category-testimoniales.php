<?php get_header(); ?>

<!-- cuerpo -->
<div id="post" class="block blogpost">

	<!-- inicia loop -->
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		<div class="block art">

			<div class="col colblog">
				<p class="date"><?php the_time('l j \d\e F, Y'); ?></p>
			</div>

			<div class="doblecol">

				<h3><a href="<?php the_permalink(); ?>">Testimonio de nuestros clientes: <?php the_title(); ?></a></h3>
				<?php the_content();?>

			</div>

		</div>		

	<?php endwhile; endif; ?>
	<!-- fin loop -->

</div>

<?php get_footer(); ?>