jQuery(document).ready(function(){

			// iniciar testimoniales
			jQuery('#testimoniales').carouFredSel({
				direction: 'left',
				infinite: true,
				circular: true,
				scroll: {
					items: 1,
					duration: 1000,
					easing: 'quadratic',
					fx: 'directscroll'
				},
				responsive: true,
				pagination: {
					container: '#pags'
				}
			});			
			//iniciar slider
			jQuery('#slider').nivoSlider({
				effect: 'fade',
				animSpeed: '750',
				pauseTime: '8000',
				directionNav: false,
				controlNav: true,
				pauseOnHover: false,
				afterLoad: function(){
					jQuery('.nivo-caption').animate({'opacity': '1.0', 'left':'0'}, 1000, 'easeInOutQuart' );
				},
				beforeChange: function(){
					jQuery('.nivo-caption').animate({'opacity': '0.0','left':'-350px'}, 1000, 'easeInOutQuart' );
				},
				afterChange: function(){
					jQuery('.nivo-caption').animate({'opacity': '1.0','left':'0'}, 1000, 'easeInOutQuart' );
				}
			});
			//mostrar tabla de calculo
			jQuery('.calculo').click(function(){
				jQuery('.tablabanos').slideToggle(750);
			});
			// iniciar carrusel imagenes eventos 
			jQuery('#carreventos').carouFredSel({
				direction: 'left',
				circular: true,				
				scroll : {
					items: 4,
					duration: 1000,
					easing: 'quadratic',
					fx: 'directscroll'
				},
				pagination: { 
					container:'#pags'
				}
			});
			
		});