	<footer class="main-footer">
		<div class="footer-logo">
			<picture>
				<source srcset="<?php echo IMAGES; ?>logo-footer.svg" type="image/svg+xml">
                <source srcset="<?php echo IMAGES; ?>logo-footer.png 1x, <?php echo IMAGES; ?>logo-footer@2x.png 2x" media="(min-width: 315px)">
                <img class="fleek-logo-footer" src="<?php echo IMAGES; ?>logo-footer.png" alt="Logo Fleek">
            </picture>
			<p>Concursos y promociones vigentes</p>
		</div>

		<div class="footer-wrapper row-reverse-dk">
			<ul class="contacto">
				<li>
					<a class="btn-icon-left" href="<?php echo WHATSAPPLINK; ?>" target="_blank">
						<picture>
							<source srcset="<?php echo IMAGES; ?>wa-icon.svg" type="image/svg+xml">
							<source srcset="<?php echo IMAGES; ?>wa-icon.png 1x, <?php echo IMAGES; ?>wa-icon@2x.png 2x" media="(min-width: 315px)">
							<img src="<?php echo IMAGES; ?>wa-icon.png" alt="Icon Whatsapp">
						</picture>
						<?php echo WHATSAPP; ?>
					</a>
				</li>
				<li>
					<a class="btn-icon-left" href="<?php echo LINK_INSTAGRAM; ?>" target="_blank">
						<picture>
							<source srcset="<?php echo IMAGES; ?>instagram-icon.svg" type="image/svg+xml">
							<source srcset="<?php echo IMAGES; ?>instagram-icon.png 1x, <?php echo IMAGES; ?>instagram-icon@2x.png 2x" media="(min-width: 315px)">
							<img src="<?php echo IMAGES; ?>instagram-icon.png" alt="Icon Instagram">
						</picture>
						<?php echo '@'.INSTAGRAM; ?>
					</a>
				</li>
				<li>
					<a class="btn-icon-left" href="mailto:<?php echo EMAIL; ?>" target="_blank">
						<picture>
							<source srcset="<?php echo IMAGES; ?>email-icon.svg" type="image/svg+xml">
							<source srcset="<?php echo IMAGES; ?>email-icon.png 1x, <?php echo IMAGES; ?>email-icon@2x.png 2x" media="(min-width: 315px)">
							<img src="<?php echo IMAGES; ?>email-icon.png" alt="Icon Email">
						</picture>
						<?php echo EMAIL; ?>
					</a>
				</li>
			</ul>

			<ul class="sucursales">
				<li>
					<h4>Rosario</h4>
					<address>
						Dir. Ricardone 1319 - [CP 2000]
					</address>
					<p>
						Tel./Fax. [54 341] 528.9819/20<br>
						Email. rosario@wearefleek.travel
					</p>
				</li>

				<li>
					<h4>San Nicolás</h4>
					<address>
						Dir. Pellegrini 225 - [CP 2900]
					</address>
					<p>
						Tel. [0336] 4426454<br>
						Email. sannicolas@wearefleek.travel
					</p>
				</li>

				<li>
					<h4>Pergamino</h4>
					<address>
						Dir. Mitre 844 [CP 2700]
					</address>
					<p>
						Tel. [54 2477] 4459613<br>
						Email. pergamino@wearefleek.travel
					</p>
				</li>
			</ul>
		</div>

		<div class="footer-wrapper align-center-dk">
			<h3 class="title-patrocinadores">
				Patrocinadores:
			</h3>

			<ul class="patrocinadores">
				<li>
					<picture>
						<source srcset="<?php echo UPLOADSURL; ?>patrocinador1.png 1x, <?php echo UPLOADSURL; ?>patrocinador1.png 2x" media="(min-width: 315px)">
						<img class="patrocinador" src="<?php echo UPLOADSURL; ?>patrocinador1.png" alt="Patrocinador Fleek">
					</picture>
				</li>

				<li>
					<picture>
						<source srcset="<?php echo UPLOADSURL; ?>patrocinador2.png 1x, <?php echo UPLOADSURL; ?>patrocinador2.png 2x" media="(min-width: 315px)">
						<img class="patrocinador" src="<?php echo UPLOADSURL; ?>patrocinador2.png" alt="Patrocinador Fleek">
					</picture>
				</li>

				<li>
					<picture>
						<source srcset="<?php echo UPLOADSURL; ?>patrocinador3.png 1x, <?php echo UPLOADSURL; ?>patrocinador3.png 2x" media="(min-width: 315px)">
						<img class="patrocinador" src="<?php echo UPLOADSURL; ?>patrocinador3.png" alt="Patrocinador Fleek">
					</picture>
				</li>
			</ul>
		</div>

		<div class="legales-wrapper">
			<picture>
				<source srcset="<?php echo IMAGES; ?>auckland-logo.svg" type="image/svg+xml">
				<source srcset="<?php echo IMAGES; ?>auckland-logo.png 1x, <?php echo IMAGES; ?>auckland-logo@2x.png 2x" media="(min-width: 315px)">
				<img class="auckland-logo" src="<?php echo IMAGES; ?>auckland-logo.png" alt="Auckland Logo">
			</picture>
			<div class="legales">
				<h4>FLEEK ES MARCA REGISTRADA DE AUCKLAND TURISMO SRL.</h4>
				<p>
					Fleek es una marca de productos para jovenes de Auckland Turismo S.R.L EVyT Leg Nro. 12.278 Disp. 106/06
				</p>
				<p>_ Auckland Turismo es una empresa autorizada por la Secretaria de Turismo de la Nación para organizar viajes de egresados.
				</p>
			</div>
		</div>
	</footer>
	
</div><!-- // MAIN WRAPPER -->
	<script src="<?php echo MAINSURL; ?>/assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo MAINSURL; ?>/assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo MAINSURL; ?>/assets/js/script.js"></script>
</body>
</html>