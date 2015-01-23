<?php get_header(); ?>

<!-- cuerpo -->
<div id="cat">

	<h2><?php single_cat_title(); ?></h2>
	<h4><?php echo category_description( get_category_by_slug('portatiles')->term_id ); ?> </p>

	<ul class="block">
		<?php 
			
			$args = array(
				'category_name'  => 'portatiles',	
				'posts_per_page' => -1,
				'orderby' => 'date',
				'order' => 'ASC',
				'has_password' => false
			);

			$cat_query = new WP_Query($args);

			if($cat_query->have_posts()) : while($cat_query->have_posts()) : $cat_query->the_post();
		?>
			<li>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('portatiles'); ?></a>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			</li>
		<?php endwhile; endif; ?>
	</ul>

</div>

<?php get_footer(); ?>