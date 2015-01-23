<div id="servicioscat">	
		<?php
			$titulopost = get_the_title();
			if($titulopost == '5w'){
				?>
					<div class="servext">
						<h4 class="damasext">Área exclusiva damas</h4>
						<div class="srvbgext"><!-- inicia bg extendido -->
				<?
			} else {
				?>
					<div class="serv">
						<h4 class="damas">Área damas</h4>
						<div class="srvbg"><!-- inicia bg damas -->
				<?
			}
		?>			
				<?php
					//sanitarios damas
					$key_sanitariosdamas = get_post_meta(get_the_ID(),'sanitariosdamas',true);
					if(!empty($key_sanitariosdamas)) {
						?>
							<p><?php echo $key_sanitariosdamas; ?> x sanitarios</p>
						<?
					}
					//lavabos damas
					$key_lavabosdamas = get_post_meta(get_the_ID(),'lavabosdamas',true);
					if(!empty($key_lavabosdamas)){
						?>
							<p><?php echo $key_lavabosdamas; ?> x lavabos</p>
						<?
					}
				?>
			</div><!-- fin bg/bg extendido damas -->
	</div>	
		<?php
			$key_sanitarioscaballeros = get_post_meta(get_the_ID(),'sanitarioscaballeros',true);
			if(!empty($key_sanitarioscaballeros)) {
				?>	
					<div class="serv"><!-- inicia serv caballeros -->
						<h4 class="caballeros">Área caballeros</h4>
							<div class="srvbg"> <!-- inicia bg -->
				<?
			}
		?>
			<?php
				//sanitarios caballeros
				$key_sanitarioscaballeros = get_post_meta(get_the_ID(),'sanitarioscaballeros',true);
				if(!empty($key_sanitarioscaballeros)){
					?>
						<p><?php echo $key_sanitarioscaballeros; ?> x sanitarios</p>
					<?
				}
				//lavabos caballeros
				$key_lavaboscaballeros = get_post_meta(get_the_ID(),'lavaboscaballeros',true);
				if(!empty($key_lavaboscaballeros)){
					?>
						<p><?php echo $key_lavaboscaballeros; ?> x lavabos</p>
					<?
				}
				//mingitorios caballeros
				$key_mingitorioscaballeros = get_post_meta(get_the_ID(),'mingitorioscaballeros',true);
				if(!empty($key_mingitorioscaballeros)){
					?>
					<!-- 	<p><?php echo $key_mingitorioscaballeros; ?> x mingitorios individuales</p> -->
					<?
				}
				//mingitorios tarja caballeros
				$key_mingitoriostarjacaballeros = get_post_meta(get_the_ID(),'mingitoriostarjacaballeros',true);
				if(!empty($key_mingitoriostarjacaballeros)){
					?>
						<!-- <p><?php echo $key_mingitoriostarjacaballeros; ?> x mingitorio tipo tarja</p> -->
					<?
				}
			?>
		<?php
			$key_sanitarioscaballeros = get_post_meta(get_the_ID(),'sanitarioscaballeros',true);
			if(!empty($key_sanitarioscaballeros)) {
				?>
						</div><!-- fin bg -->
					</div><!-- fin serv caballeros -->
				<?
			}
		?>	
</div>