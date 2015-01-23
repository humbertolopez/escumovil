<?php

/* custom menu */	
	function register_my_menus() {
		register_nav_menus(
			array(
				'menu-principal' => __('Menú Principal'),
				'menu-footer' => __('Menú Footer')
				));
	}
	add_action('init', 'register_my_menus');

/* soporte de thumbs */
	add_theme_support('post-thumbnails');

/* custom header */
	$defaulthead = array(
		'width' => '140',
		'height' => '55',
		'default-image' => get_template_directory_uri() . '/img/logo.png',
		'uploads' => true,
		);
	add_theme_support('custom-header', $defaulthead);

/* metabox para remolques */

	function remolques_custom_meta() {
		add_meta_box('remolques_meta', 'Servicios en Remolques', 'remolques_meta_callback', 'post','side','high');
	}	

	add_action('add_meta_boxes','remolques_custom_meta');

/* formulario servicios en remolques */

	function remolques_meta_callback($post) {
		wp_nonce_field( 'remolques_meta_box','remolques_nonce');
		$remolques_stored_meta = get_post_meta($post->ID);
		?>
			<h4>Área de Damas</h4>
				<p>
					<input size="3" type="text" name="sanitariosdamas" id="sanitariosdamas" value="<?php echo $remolques_stored_meta['sanitariosdamas'][0]; ?>">
					<label for="sanitariosdamas">Sanitarios</label>
				</p>
				<p>
					<input size="3" type="text" name="lavabosdamas" id="lavabosdamas" value="<?php echo $remolques_stored_meta['lavabosdamas'][0]; ?>">
					<label for="lavabosdamas">Lavabos</label>
				</p>
			<h4>Área de Caballeros</h4>
				<p>
					<input size="3" type="text" name="mingitoriostarjacaballeros" id="mingitoriostarjacaballeros" value="<?php echo $remolques_stored_meta['mingitoriostarjacaballeros'][0]; ?>">
					<label for="mingitoriostarjacaballeros">Mingitorio tipo Tarja</label>
				</p>
				<p>
					<input size="3" type="text" name="mingitorioscaballeros" id="mingitorioscaballeros" value="<?php echo $remolques_stored_meta['mingitorioscaballeros'][0]; ?>">
					<label for="mingitorioscaballeros">Mingitorios Individuales</label>
				</p>
				<p>
					<input size="3" type="text" name="sanitarioscaballeros" id="sanitarioscaballeros" value="<?php echo $remolques_stored_meta['sanitarioscaballeros'][0]; ?>">
					<label for="sanitarioscaballeros">Sanitarios</label>
				</p>
				<p>
					<input size="3" type="text" name="lavaboscaballeros" id="lavaboscaballeros" value="<?php echo $remolques_stored_meta['lavaboscaballeros'][0]; ?>">
					<label for="lavaboscaballeros">Lavabos</label>
				</p>
			<h4>Misceláneo</h4>
				<p>
					<input size="3" type="text" name="areadescanso" id="areadescanso" value="<?php echo $remolques_stored_meta['areadescanso'][0]; ?>">
					<label for="areadescanso">Área de descanso</label>
				</p>
				<p>
					<input size="3" type="text" name="regaderas" id="regaderas" value="<?php echo $remolques_stored_meta['regaderas'][0]; ?>">
					<label for="regaderas">Regaderas</label>
				</p>
		<?php
	}

/* guardar datos servicios remolques */

	function remolques_meta_save($post_id) {
		/* estado de guardado */
		$is_autosave = wp_is_post_autosave($post_id);
		$is_revision = wp_is_post_autosave($post_id);
		$is_valid_nonce = ( isset($_POST['']) && wp_verify_nonce($_POST['remolques_nonce'],basename(__FILE__))) ? 'true' : 'false';

		/* termina el script segun el estado del post */
		if ($is_autosave || $is_revision || !$is_valid_nonce ) {
			return;
		}

		/* sanitarios damas */
		if( isset( $_POST[ 'sanitariosdamas' ] ) ) {
        	update_post_meta( $post_id, 'sanitariosdamas', sanitize_text_field( $_POST[ 'sanitariosdamas' ] ) );
    	}

    	/* lavabos damas */
		if( isset( $_POST[ 'lavabosdamas' ] ) ) {
        	update_post_meta( $post_id, 'lavabosdamas', sanitize_text_field( $_POST[ 'lavabosdamas' ] ) );
    	}

    	/* mingitorios tarja caballeros */
		if( isset( $_POST[ 'mingitoriostarjacaballeros' ] ) ) {
        	update_post_meta( $post_id, 'mingitoriostarjacaballeros', sanitize_text_field( $_POST[ 'mingitoriostarjacaballeros' ] ) );
    	}

    	/* mingitorios caballeros */
		if( isset( $_POST[ 'mingitorioscaballeros' ] ) ) {
        	update_post_meta( $post_id, 'mingitorioscaballeros', sanitize_text_field( $_POST[ 'mingitorioscaballeros' ] ) );
    	}

    	/* sanitarios caballeros */
		if( isset( $_POST[ 'sanitarioscaballeros' ] ) ) {
        	update_post_meta( $post_id, 'sanitarioscaballeros', sanitize_text_field( $_POST[ 'sanitarioscaballeros' ] ) );
    	}

    	/* lavabos caballeros */
		if( isset( $_POST[ 'lavaboscaballeros' ] ) ) {
        	update_post_meta( $post_id, 'lavaboscaballeros', sanitize_text_field( $_POST[ 'lavaboscaballeros' ] ) );
    	}

    	/* areas de descanso */
		if( isset( $_POST[ 'areadescanso' ] ) ) {
        	update_post_meta( $post_id, 'areadescanso', sanitize_text_field( $_POST[ 'areadescanso' ] ) );
    	}

    	/* regaderas */
		if( isset( $_POST[ 'regaderas' ] ) ) {
        	update_post_meta( $post_id, 'regaderas', sanitize_text_field( $_POST[ 'regaderas' ] ) );
    	}
	}

/* ahora si, guardalo todo */ 
	add_action('save_post', 'remolques_meta_save');

/* metabox para dimensiones */

	function dimensiones_custom_meta() {
			add_meta_box('dimensiones_meta', 'Tabla de Dimensiones', 'dimensiones_meta_callback', 'post','side','high');
		}	

		add_action('add_meta_boxes','dimensiones_custom_meta');

/* formulario metabox dimensiones */

	function dimensiones_meta_callback($post) {
		wp_nonce_field( 'dimensiones_meta_box','dimensiones_nonce');
		$dimensiones_stored_meta = get_post_meta($post->ID);
		?>
			<p>
				<label for="alto">Alto</label>
				<input size="4" type="text" name="alto" id="alto" value="<?php echo $dimensiones_stored_meta['alto'][0]; ?>">				
			</p>
			<p>
				<label for="ancho">Ancho</label>
				<input size="4" type="text" name="ancho" id="ancho" value="<?php echo $dimensiones_stored_meta['ancho'][0]; ?>">
			</p>
			<p>
				<label for="largo">Largo</label>
				<input size="4" type="text" name="largo" id="largo" value="<?php echo $dimensiones_stored_meta['largo'][0]; ?>">
			</p>
			<p>
				<label for="profundidad">Profundidad</label>
				<input size="4" type="text" name="profundidad" id="profundidad" value="<?php echo $dimensiones_stored_meta['profundidad'][0]; ?>">
			</p>
			<p>
				<label for="tanque">Capacidad de Tanque</label>
				<input size="4" type="text" name="tanque" id="tanque" value="<?php echo $dimensiones_stored_meta['tanque'][0]; ?>">
			</p>
			<p>
				<label for="colores">Colores</label>
				<input type="text" name="colores" id="colores" value="<?php echo $dimensiones_stored_meta['colores'][0]; ?>">
			</p>
			<p>
				<label for="tiron">Longitud de Tirón</label>
				<input size="4" type="text" name="tiron" id="tiron" value="<?php echo $dimensiones_stored_meta['tiron'][0]; ?>">
			</p>
			<p>
				<label for="tiron">Número de personas</label>
				<input size="4" type="text" name="personas" id="personas" value="<?php echo $dimensiones_stored_meta['personas'][0]; ?>">
			</p>
		<?php
	}

/* guardar dimensiones */

	function dimensiones_meta_save($post_id) {
		/* estado de guardado */
		$is_autosave = wp_is_post_autosave($post_id);
		$is_revision = wp_is_post_autosave($post_id);
		$is_valid_nonce = ( isset($_POST['']) && wp_verify_nonce($_POST['dimensiones_nonce'],basename(__FILE__))) ? 'true' : 'false';

		/* termina el script segun el estado del post */
		if ($is_autosave || $is_revision || !$is_valid_nonce ) {
			return;
		}

		/* altura */
		if( isset( $_POST[ 'alto' ] ) ) {
        	update_post_meta( $post_id, 'alto', sanitize_text_field( $_POST[ 'alto' ] ) );
    	}

    	/* ancho */
		if( isset( $_POST[ 'ancho' ] ) ) {
        	update_post_meta( $post_id, 'ancho', sanitize_text_field( $_POST[ 'ancho' ] ) );
    	}

    	/* largo */
		if( isset( $_POST[ 'largo' ] ) ) {
        	update_post_meta( $post_id, 'largo', sanitize_text_field( $_POST[ 'largo' ] ) );
    	}

    	/* profundidad */
		if( isset( $_POST[ 'profundidad' ] ) ) {
        	update_post_meta( $post_id, 'profundidad', sanitize_text_field( $_POST[ 'profundidad' ] ) );
    	}

    	/* tanque */
		if( isset( $_POST[ 'tanque' ] ) ) {
        	update_post_meta( $post_id, 'tanque', sanitize_text_field( $_POST[ 'tanque' ] ) );
    	}

    	/* colores */
		if( isset( $_POST[ 'colores' ] ) ) {
        	update_post_meta( $post_id, 'colores', sanitize_text_field( $_POST[ 'colores' ] ) );
    	}

    	/* tiron */
		if( isset( $_POST[ 'tiron' ] ) ) {
        	update_post_meta( $post_id, 'tiron', sanitize_text_field( $_POST[ 'tiron' ] ) );
    	}

    	/* numero de personas */
    	if( isset( $_POST[ 'personas' ] ) ) {
        	update_post_meta( $post_id, 'personas', sanitize_text_field( $_POST[ 'personas' ] ) );
    	}
	}

/* ahora si, guarda todas las dimensiones */ 
	add_action('save_post', 'dimensiones_meta_save');

/* custom metabox carga de imagenes para slider */

	function wp_custom_slide_metabox() {
		add_meta_box('wp_custom_slide','Agrega un slide','wp_custom_slide_call','post','side');
		add_meta_box('wp_custom_slide','Agrega un slide','slide-domain','wp_custom_slide_call','page','side');
	}

/* se añade la función */
	add_action('add_meta_boxes','wp_custom_slide_metabox');

/* callback, lo que wordpress muestra en administración */
	function wp_custom_slide_call() {
		wp_nonce_field('wp_custom_slide_metabox','wp_custom_slide_nonce');
		$slide_stored_meta = get_post_meta(get_the_ID());
		?>
			<p>
				<label for="meta-slide"><?php _e('Elige una fotografía para agregarla como slide a este post') ?></label>
				<input type="text" name="meta-slide" id="meta-slide" value="<?php echo $slide_stored_meta['meta-slide'][0]; ?>">
				<input type="button" id="meta-slide-button" class="button" value="<?php _e('Elige o carga un slide') ?>">
			</p>
		<?
	}

/* carga el script para cargar nuevo slide */

	function slide_image_enqueue() {
		global $typenow;
		if($typenow == 'post' or $typenow == 'page') {

			wp_enqueue_media();
			//
			wp_register_script(
				'meta-slide-script',
				get_stylesheet_directory_uri() . '/js/custom-slide.js',
				array('jquery')
			);
			wp_localize_script(
				'meta-slide-script',
				'meta_image',
				array(
					'title' => __('Elige o carga un slide','slide-domain'),
					'button' => __('Usa esta imagen como slide','slide-domain'),
				)
			);
			wp_enqueue_script('meta-slide-script');
		} 
	}

	add_action('admin_enqueue_scripts','slide_image_enqueue');

/* guarda el nuevo slide en la base de datos */	
	
	function slide_meta_save($post_id){
		/* estado de guardado */
		$is_autosave = wp_is_post_autosave($post_id);
		$is_revision = wp_is_post_autosave($post_id);
		$is_valid_nonce = ( isset($_POST['']) && wp_verify_nonce($_POST['wp_custom_slide_nonce'],basename(__FILE__))) ? 'true' : 'false';

		/* termina el script segun el estado del post */
		if ($is_autosave || $is_revision || !$is_valid_nonce ) {
			return;
		}

		if(isset($_POST['meta-slide'])) {
		   	update_post_meta($post_id,'meta-slide',$_POST['meta-slide']);		   	
		}

	}

	add_action('save_post','slide_meta_save');

/* nuevos tamaños de imagen */

	add_image_size('portatiles',160,160);
	add_image_size('presidenciales',220,220,true);
	add_image_size('remolquesthumb',220,180,true);
	add_image_size('remolquesthumbprov',460,150,true);
	add_image_size('eventos',220,180,true);

/* cargar el script de prettyphoto */ 

	function prettyphoto() {
		wp_enqueue_script(
			'prettyphoto-script',
			get_stylesheet_directory_uri() . '/js/jquery.prettyPhoto.js',
			array('jquery'),
			'',
			'3.1.5',
			true
		);
		wp_enqueue_style(
			'prettyphoto-style',
			get_stylesheet_directory_uri() . '/js/prettyPhoto.css'
		);
	}

	add_action('wp_enqueue_scripts','prettyphoto');

/* cargar el script de caroufredsel */

	function caroufredsel() {
		wp_enqueue_script(
			'caroufredsel-script',
			get_stylesheet_directory_uri() . '/js/jquery.carouFredSel-6.2.1-packed.js',
			array('jquery'),
			'',
			'6.2.1',
			true
		);
	}

	add_action('wp_enqueue_scripts','caroufredsel');

/* cargar el script para magia en index */

//	function magiahome() {
//		wp_enqueue_script(
//			'magiahome-script',
//			get_stylesheet_directory_uri() . '/js/magiahome.js',
//			array('caroufredsel-script','nivoslider-script'),
//			'',
//			'1.0',
//			true
//		);
//	}
//
//	if(is_home()) {add_action('wp_enqueue_scripts','magiahome');}

/* cargar el script para iniciar prettyphoto */

	function prettyphotostart() {
		wp_enqueue_script(
			'prettyphoto-start',
			get_stylesheet_directory_uri() . '/js/prettyPhotoStart.js',
			array('prettyphoto-script'),
			'',
			'1.0',
			true
		);
	}

	add_action('wp_enqueue_scripts','prettyphotostart');

/* cargar el script para slider */

	function nivoslider() {
		wp_enqueue_script(
			'nivoslider-script',
			get_stylesheet_directory_uri(). '/js/jquery.nivo.slider.pack.js',
			array('jquery'),
			'',
			'3.2',
			true
		);
		wp_enqueue_style(
			'nivoslider-style',
			get_stylesheet_directory_uri() . '/js/nivo-slider.css'
		);
	}

	add_action('wp_enqueue_scripts','nivoslider');

/* carga jquery ui */
	
	function jqueryui() {
		wp_enqueue_script(
			'jquery-ui',
			'//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js',
			array('jquery'),
			'',
			'1.10.4',
			true
		);
	}

	add_action('wp_enqueue_scripts','jqueryui');

/* contact form 7 referer */

	function getRefererPage($form_tag) {

		if($form_tag['name'] == 'referer-page') {
			$form_tag['values'][] = $_SERVER['HTTP_REFERER'];
		} 
		return $form_tag;

	}

	if (!is_admin()) {

		add_filter('wpcf7_form_tag','getRefererPage');

	}


?>