<?php get_header(); ?>

<!-- cuerpo -->
<div id="remolques">

	<h2><?php single_cat_title(); ?></h2>
	<h4><?php echo category_description( get_category_by_slug('remolques')->term_id ); ?></h4>

	<ul class="block">
		<?php 
			
			$args = array(
				'category_name'  => 'remolques',
				'posts_per_page' => -1,
				'meta_key' => 'personas',
				'orderby' => 'meta_value_num title',
				'order' => 'ASC',
			);

			$cat_query = new WP_Query($args);

			if($cat_query->have_posts()) : while($cat_query->have_posts()) : $cat_query->the_post();
		?>
			<?php
				if (has_post_thumbnail()) {
					?>
					<li style="background: url('<?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'remolquesthumbprov'); $url = $thumb['0']; echo $url; ?>') no-repeat 50% 0;">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php get_template_part('serviciosremolquecat'); ?>
						<p class="numpersonas">Para eventos de hasta <?php echo get_post_meta(get_the_ID(),'personas',true) ?> invitados.</p>						
					</li>
					<?
				} 
			?>
		<?php endwhile; endif; ?>
	</ul>

</div>

<?php get_footer(); ?>