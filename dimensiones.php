<table id="dimensiones">
	<?php
		/* checa si alto tiene valor */
		$key_alto = get_post_meta(get_the_ID(),'alto', true );
		if ( ! empty( $key_alto) ) {
			?>
				<tr>
					<td>Alto</td>
					<td><?php echo $key_alto; ?> metros</td>
				</tr>
			<?php
		}

		/* checa si ancho tiene valor */
		$key_ancho = get_post_meta(get_the_ID(),'ancho', true );
		if ( ! empty( $key_ancho) ) {
			?>
				<tr>
					<td>Ancho</td>
					<td><?php echo $key_ancho; ?> metros</td>
				</tr>
			<?php
		}

		/* checa si largo tiene valor */
		$key_largo = get_post_meta(get_the_ID(),'largo', true );
		if ( ! empty( $key_largo) ) {
			?>
				<tr>
					<td>Largo</td>
					<td><?php echo $key_largo; ?> metros</td>
				</tr>
			<?php
		}

		/* checa si profundidad tiene valor */
		$key_profundidad = get_post_meta(get_the_ID(),'profundidad', true );
		if ( ! empty( $key_profundidad) ) {
			?>
				<tr>
					<td>Profundidad</td>
					<td><?php echo $key_profundidad; ?> metros</td>
				</tr>
			<?php
		}

		/* checa si tanque tiene valor */
		$key_tanque = get_post_meta(get_the_ID(),'tanque', true );
		if ( ! empty( $key_tanque) ) {
			?>
				<tr>
					<td>Capacidad de tanque</td>
					<td><?php echo $key_tanque; ?> litros</td>
				</tr>
			<?php
		}

		/* checa si colores tiene valor */
		$key_colores = get_post_meta(get_the_ID(),'colores', true );
		if ( ! empty( $key_colores) ) {
			?>
			<tr>
				<td>Colores</td>
				<td><?php echo $key_colores; ?></td>
			</tr>
			<?php
		}

		/* checa si tiron tiene valor */
		$key_tiron = get_post_meta(get_the_ID(),'tiron', true );
		if ( ! empty( $key_tiron) ) {
			?>
			<tr>
				<td>Tirón</td>
				<td><?php echo $key_tiron; ?> metros</td>
			</tr>
			<?php
		}
	?>
</table>