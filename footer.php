	<footer>
		<div id="foot" class="block">
			<div class="col">
				<!-- loop psai -->
				<?php 
					$psai = new WP_Query('page_id=141');
					if($psai->have_posts()) : while($psai->have_posts()) : $psai->the_post();
				?>
					<h4><?php the_title(); ?></h4>
					<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" class="psai">
					<p><?php the_content();?></p>

				<?php wp_reset_postdata(); ?>

				<?php endwhile; endif; ?>
				<!-- loop psai -->
				<img class="sol" src="<?php echo get_template_directory_uri(); ?>/img/SolucionesMoviles.png">		
			</div>
			<div class="col">
				<!-- custom footer menu -->
				<h4>Mapa del sitio</h4>
				<ul>
					<?php wp_nav_menu(array( 'theme_location' => 'menu-footer', 'container' => '', 'items_wrap' => '%3$s' )); ?>
				</ul>
				<!-- fin custom footer menu -->
			</div>
			<div class="col">
				<h4>Nuestro blog</h4>
				<ul>
				<?php
					$list = array(
							'category_name' => 'blog',
							'post_per_page' => 10,
							'category__not_in' => '17',
						);
					$blog = new WP_Query($list);

					if($blog->have_posts()) : while($blog->have_posts()) : $blog->the_post();	
				?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

				<?php wp_reset_postdata(); ?>

				<?php endwhile; endif; ?>
				</ul>
			</div>
			<div class="col solmov">
				<div itemscope itemtype="http://schema.org/LocalBusiness">
					<h4><span itemprop="name">Escumovil®</span></h4>
					<p><span itemprop="description">Somos Escumovil®, la organización número uno en renta y venta de sanitarios portátiles. Desde 1998.</span></p>
					<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
						<p>
							<span itemprop="streetAddress">Av. Guadalajara 2336, Col. Jardines de Nuevo México</span><br>
							<span itemprop="addressLocality">Zapopan</span>, <span itemprop="addressRegion">Jalisco</span>.
						</p>						
					</div>
					<p>
						<span itemprop="telephone">(01 33) 1202 1843, (01 800) 087 4130</span>
					</p>
					<p>
						<span itemprop="email">contacto@escumovil.com</span>
					</p>
				</div>
				<h4>Paga con tu tarjeta de crédito</h4>
					<p>Contrata nuestros servicios y paga con tu tarjeta de crédito. Aceptamos tarjetas de crédito VISA, MasterCard y Discover. Además, recibimos pagos con tarjetas American Express y a través de PayPal.</p>
					<p>
						<img src="<?php echo get_template_directory_uri(); ?>/img/visa.png" alt="Paga baños portátiles, remolques de baños o baños presidenciales con tu tarjeta VISA">
						<img src="<?php echo get_template_directory_uri(); ?>/img/master.png" alt="Paga baños portátiles, remolques de baños o baños presidenciales con tu tarjeta MasterCard">
						<img src="<?php echo get_template_directory_uri(); ?>/img/amex.png" alt="Paga baños portátiles, remolques de baños o baños presidenciales con tu tarjeta American Express">
						<img src="<?php echo get_template_directory_uri(); ?>/img/discover.png" alt="Paga baños portátiles, remolques de baños o baños presidenciales con tu tarjeta Discover Network">
						<img src="<?php echo get_template_directory_uri(); ?>/img/paypal.png" alt="Paga baños portátiles, remolques de baños o baños presidenciales con tu cuenta PayPal">
					</p>
			</div>
		</div>
	</footer>
	<div class="rights">
		<p><?php echo date ('Y'); ?> &copy; <?php bloginfo('name'); ?> — Todos los derechos reservados — <a href="http://escumovil.com/wp-content/uploads/2014/11/Politicas-de-Privacidad-y-Seguridad-de-Datos-Personales.pdf">Políticas de privacidad y seguridad de datos personales.</a></p>
	</div>

<?php 
	if(is_category('presidenciales')){
		?>
			<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/presidencialescarr.js"></script>
		<?
	}
	else {
		?>
			<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/magiahome.js"></script>
		<?
	}
?>

<?php wp_footer(); ?>


</body>
<!-- /cuerpo -->

</html>