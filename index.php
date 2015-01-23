<?php get_header(); ?>

<!-- cuerpo -->
<div id="index" class="block">

	<!-- query para slider -->
	<div id="slider" class="block">
	<?php
		$slider = new WP_Query( array(
				'category_name' => 'slider',
				'order' => 'DESC',
				'orderby' => 'date',
				'posts_per_page' => -1
			)
		);
		if($slider->have_posts()) : while($slider->have_posts()) : $slider->the_post();
	?>
		<?php
			if (in_category('remolques')) {
				?>
					<a href="<?php the_permalink(); ?>"><img src="<?php echo get_post_meta(get_the_ID(),'meta-slide',true) ?>" title="#<?php the_ID(); ?>"></a>
				<?
			} else if(in_category('promociones')) {
				?>
					<a href="<?php the_permalink(); ?>"><img src="<?php echo get_post_meta(get_the_ID(),'meta-slide',true) ?>"></a>
				<?
			} else if(in_category('mensajes')) {
				?>
					<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>">
				<?
			} else {
				?>
					<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" title="#<?php the_ID(); ?>">
				<?
			}
		?>

	<?php wp_reset_postdata(); ?>

	<?php endwhile; endif; ?>
	</div>
	<!-- /query para slider -->
	<!-- query para captions en slider -->
	<?php
		$captions = new WP_Query( array(
				'category_name' => 'slider',
				'posts_per_page' => -1
			)
		);
		if($captions->have_posts()) : while($captions->have_posts()) : $captions->the_post();
	?>
		<?php
			if(in_category('remolques')) {
				?>
					<div id="<?php the_ID(); ?>" class="caption">
						<h3>Remolque Escumovil&reg; <?php the_title(); ?></h3>
						<?php the_excerpt(); ?>
						<p class="conocelo"><a href="<?php the_permalink(); ?>">Conócelo.</a></p>
					</div>
				<?
			} else {
				?>
					<div id="<?php the_ID(); ?>" class="caption">
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
					</div>
				<?

			}		
		?>
	<?php wp_reset_postdata(); ?>

	<?php endwhile; endif; ?>
	<!-- /query para captions en slider -->
	<!-- query para titular -->
	<?php
		$titular = new WP_Query ('page_id=112');
		if($titular->have_posts()) : while($titular->have_posts()) : $titular->the_post();

		remove_filter( 'the_content', 'wpautop' );
	?>
	
			<h2><?php the_content(); ?></h2>
			
	<?php wp_reset_postdata(); ?>

	<?php endwhile; endif; ?>
	<!-- /query para titular -->
	<!-- banner promo
	<div class="block bannerpromo">
		<a href="http://escumovil.com/blog/gran-promocion-mundialista-de-escumovil/"><img src="http://escumovil.com/wp-content/uploads/2014/06/bannerIndex1.png"></a>
	</div>
	fin banner promo -->
	<!-- query para shorts -->
	<div class="block">
		<?php
			$shorts = new WP_Query( array(
					'category_name' => 'shortcuts',
					'orderby' => 'rand',
					'posts_per_page' => '4',
				)
			);
			if($shorts->have_posts()) : while($shorts->have_posts()) : $shorts->the_post();

			add_filter( 'the_content', 'wpautop' );
		?>

		<div class="col short" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>');">
			<h4><?php the_title(); ?></h4>
			<?php the_content(); ?>
		</div>

		<?php wp_reset_postdata(); ?>

		<?php endwhile; endif; ?>
	</div>
	<!-- /query para shorts -->
	<!-- query para testimoniales
	<div class="block testwrapper">

		<div id="testimoniales" class="block">

		<?php
			$testimoniales = new WP_Query( array(
					'category_name' => 'testimoniales',
					'orderby' => 'rand',
					'posts_per_page' => '-1',
				)
			);

			if($testimoniales->have_posts()) : while($testimoniales->have_posts()) : $testimoniales->the_post();

			remove_filter( 'the_excerpt', 'wpautop' );

		?>
			<div class="test-single" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>');">
				<blockquote><?php the_excerpt(); ?></blockquote>
				<h4>— <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> —</h4>
				<p><?php the_time('l j \d\e F, Y'); ?></p>
			</div>
		
		<?php wp_reset_postdata(); ?>

		<?php endwhile; endif; ?>
		
		</div>
	
		<div id="pags" class="block"></div>

	</div>
	/query para testimoniales -->
	<!-- fotos eventos -->
	<h3 class="block hevents">Eventos Recientes</h3>
	<div id="carreventoswrapper" class="block">
		<div id="carreventos" class="block"> 
			<?php
				$eventos = new WP_Query(array(
						'category_name' => 'eventos',
						'orderby' => 'rand',
						'posts_per_page' => -1
					)
				);
				if($eventos->have_posts()) : while($eventos->have_posts()) : $eventos->the_post();
			?>
				<div class="singleevento">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('eventos'); ?></a>
					<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
				</div>
			<?php wp_reset_postdata(); ?>
			<?php endwhile; endif; ?>
		</div>
		<div id="pags"></div>
	</div>
	<!-- /fotos eventos -->

</div>

<?php get_footer(); ?>