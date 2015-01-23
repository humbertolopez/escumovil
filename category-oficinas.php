<?php get_header(); ?>

<!-- cuerpo -->
<div id="post">

	<h2><?php single_cat_title(); ?></h2>
	<h4><?php echo category_description( get_category_by_slug('oficinas')->term_id ); ?></h4>

	<div id="oficinas" class="block">
		<?php 
			
			$args = array(
				'category_name'  => 'oficinas',
				'posts_per_page' => -1,
				'meta_key' => 'largo',
				'orderby' => 'meta_value_num title',
				'order' => 'ASC',
			);

			$cat_query = new WP_Query($args);

			if($cat_query->have_posts()) : while($cat_query->have_posts()) : $cat_query->the_post();
		?>
			<div>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php the_post_thumbnail('full'); ?>
				<?php get_template_part('dimensiones'); ?>
				<?php the_content(); ?>
			</div>			
			
		<?php endwhile; endif; ?>
	</div>

</div>

<?php get_footer(); ?>