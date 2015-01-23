<div id="servicios" class="block">
<?php
	/* checa si sanitarios dama tiene valor */
	$key_sanitariosdamas = get_post_meta(get_the_ID(),'sanitariosdamas', true );
	if ( ! empty( $key_sanitariosdamas) ) {
		?>
			<h3 class="aread">Área damas</h3>
			<div class="number"><?php echo $key_sanitariosdamas; ?> x</div>
			<div><img src="<?php echo get_template_directory_uri(); ?>/img/iconsanitarios.png"></div>
			<div class="tag"><p>Sanitarios</p></div>
		<?php
	}

	/* checa si lavabos dama tiene valor */
	$key_lavabosdamas = get_post_meta(get_the_ID(),'lavabosdamas', true );
	if ( ! empty( $key_lavabosdamas) ) {
		?>
			<div class="number"><?php echo $key_lavabosdamas; ?> x</div>
			<div><img src="<?php echo get_template_directory_uri(); ?>/img/iconlavabos.png"></div>
			<div class="tag"><p>Lavabos</p></div>
		<?php
	}

	/* checa si mingitorios tarja tiene valor */
	$key_mingitoriostarjacaballeros = get_post_meta(get_the_ID(),'mingitoriostarjacaballeros', true );
	if ( ! empty( $key_mingitoriostarjacaballeros) ) {
		?>
			<h3 class="areac">Área caballeros</h3>
			<div class="number"><?php echo $key_mingitoriostarjacaballeros; ?> x</div>
			<div><img src="<?php echo get_template_directory_uri(); ?>/img/icontarja.png"></div>
			<div class="tag"><p>Mingitorios tipo tarja</p></div>
		<?php
	}

	/* checa si mingotorios individuales tiene valor */
	$key_mingitorioscaballeros = get_post_meta(get_the_ID(),'mingitorioscaballeros', true );
	if ( ! empty( $key_mingitorioscaballeros) ) {
		?>
			<h3 class="areac">Área caballeros</h3>
			<div class="number"><?php echo $key_mingitorioscaballeros; ?> x </div>
			<div><img src="<?php echo get_template_directory_uri(); ?>/img/iconmingitorio.png"></div>
			<div class="tag"><p>Mingitorios Individuales</p></div>
		<?php
	}

	/* checa si sanitarios caballeros tiene valor */
	$key_sanitarioscaballeros = get_post_meta(get_the_ID(),'sanitarioscaballeros', true );
	if ( ! empty( $key_sanitarioscaballeros) ) {
		?>
			<div class="number"><?php echo $key_sanitarioscaballeros; ?> x</div>
			<div><img src="<?php echo get_template_directory_uri(); ?>/img/iconsanitarios.png"></div>
			<div class="tag"><p>Sanitarios</p></div>
		<?php
	}

	/* checa si lavabos caballeros tiene valor */
	$key_lavaboscaballeros = get_post_meta(get_the_ID(),'lavaboscaballeros', true );
	if ( ! empty( $key_lavaboscaballeros) ) {
		?>
			<div class="number"><?php echo $key_lavaboscaballeros; ?> x</div>
			<div><img src="<?php echo get_template_directory_uri(); ?>/img/iconlavabos.png"></div>
			<div class="tag"><p>Lavabos</p></div>
		<?php
	}

	/* checa si areas de descanso tiene valor */
	$key_areadescanso = get_post_meta(get_the_ID(),'areadescanso', true );
	if ( ! empty( $key_areadescanso) ) {
		?>
			<div class="number"><?php echo $key_areadescanso; ?> x</div>
			<div><img src="<?php echo get_template_directory_uri(); ?>/img/iconsala.png"></div>
			<div class="tag"><p>Área de descanso</p></div>
		<?php
	}

	/* checa si regaderas tiene valor */
	$key_regaderas = get_post_meta(get_the_ID(),'regaderas', true );
	if ( ! empty( $key_regaderas) ) {
		?>
			<div class="number"><?php echo $key_regaderas; ?> x</div>
			<div><img src="<?php echo get_template_directory_uri(); ?>/img/iconregaderas.png"></div>
			<div class="tag"><p>Regaderas</p></div>
		<?php
	}
?>
</div>