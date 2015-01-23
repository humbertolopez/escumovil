<!DOCTYPE html>
<html>

<head>
	<!-- titulo -->
	<title>
		<?php 
			if(is_home())
				{ echo bloginfo("name"); echo " — "; echo bloginfo("description"); }
			elseif(is_category("remolques") or is_category("portatiles"))
				{ echo wp_title(" — ",false, right); echo bloginfo("name"); echo " "; echo bloginfo("description"); }
			elseif(in_category("remolques"))
				{ echo "Remolque de sanitarios "; echo wp_title(" — ",false, right); echo bloginfo("name"); echo " "; echo bloginfo("description"); }
			elseif(in_category("portatiles"))
				{ echo "Baño portátil modelo "; echo wp_title(" — ",false, right); echo bloginfo("name"); echo " "; echo bloginfo("description"); }
			else { echo wp_title(" — ", false, right); echo bloginfo("name"); echo " "; echo bloginfo("description"); }
		?>
	</title>
	<!-- /titulo -->
	<!-- styles -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<!-- styles -->
	<!-- microdata -->
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "LocalBusiness",
			"address": {
				"@type": "PostalAddress",
				"addressLocality": "Guadalajara",
				"addressRegion": "Jalisco",
				"streetAddress": "Av. Guadalajara 2336, Col. Jardines de Nuevo México"
			},
			"description": "La organización número uno en renta y venta de sanitarios portátiles.",
			"name": "Escumovil®",
			"telephone": "(01 33) 1202 1843, (01 800) 087 4130",
			"logo": "http://escumovil.com/wp-content/themes/escumovil/img/logo.png",		
			"openingHours": [
				"Mo-Fr 09:00-19:00",
				"Sa 09:00-14:00"
			],
			"url": "http://escumovil.com",			
			"email": "contacto@escumovil.com"
		}				
	</script>
	<!-- fin microdata -->	
	<?php wp_head(); ?>
</head>
<!-- cuerpo -->
<body>
	<!-- tracking analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-47240966-1', 'escumovil.com');
	  ga('require', 'displayfeatures');
	  ga('send', 'pageview');

	</script>
	<!-- fin tracking analytics -->
	<!-- header -->
	<header class="block">
		<div class="logo">
			<a href="<?php bloginfo('url'); ?>">
				<img src="<?php header_image(); ?>">
			</a>
		</div>
		<div id="top-contact">
			<p class="fb"><a href="http://www.facebook.com/escumovil">escumovil</a></p>
			<p class="tw"><a href="http://www.twitter.com/escumovil">@escumovil</a></p>
			<p class="cotiza"><a href="<?php bloginfo('url'); ?>/cotizacion">Solicita una cotización</a></p>
			<p class="tel">(01 33) 1202 1843 — 01 800 087 4130</p>
		</div>
		<ul class="menu">
			<!-- custom menu -->
				<!-- <?php wp_nav_menu(array( 'container' => '', 'items_wrap' => '%3$s' )); ?> -->
				<?php wp_nav_menu(array( 'theme_location' => 'menu-principal', 'container' => '', 'items_wrap' => '%3$s' )); ?>
			<!-- custom menu -->
		</ul>
	</header>
	<!-- header -->