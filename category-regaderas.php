<?php get_header(); ?>

<!-- cuerpo -->
<div id="post">
	<h2><?php single_cat_title(); ?></h2>
	<h4><?php echo category_description( get_category_by_slug('regaderas')->term_id ); ?></h4>
		
	<?php
			
		$args = array(
			'category_name'  => 'regaderas',
			'posts_per_page' => -1,
			'orderby' => 'title',
			'order' => 'DESC',
		);

		$cat_query = new WP_Query($args);

		if($cat_query->have_posts()) : while($cat_query->have_posts()) : $cat_query->the_post();
	?>

	<div class="block presingle">
		<div class="col">
			<?php 
				$titulopost = get_the_title();
				if($titulopost == 'Regaderas') {
					?>
						<h3>Remolque <?php the_title(); ?></h3>
					<?
				} else {
					?>
						<h3><?php the_title(); ?></h3>
					<?
				}
			?>
		</div>
		<div class="col">
			<?php the_post_thumbnail('portatiles'); ?>
		</div>
		<div class="doblecol forcecol">
			<?php the_content(); ?>
			<h3>Dimensiones</h3>
				<?php get_template_part('dimensiones'); ?>
				<a href="<?php bloginfo('url'); ?>/cotizacion">
					<h4 class="cotbutton">Solicita una cotización</h4>
				</a>
		</div>				
	</div>

	<?php endwhile; endif; ?>

	<div class="block">
		<div class="doblecol">
			<?php get_template_part('info-pagos'); ?>
		</div>
		<div class="doblecol">
			<?php get_template_part('info-tarjetas'); ?>
		</div>
	</div>
	
</div>

<?php get_footer(); ?>