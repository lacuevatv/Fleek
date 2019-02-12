<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<?php
	SeoTitlePage( PAGEACTUAL );
	getHeaderMetaInfo( PAGEACTUAL ); ?>

	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	
	<?php getStyles(PAGEACTUAL, array('default', 'owlcarousel')); ?>

</head>

<body data-page="<?php echo PAGEACTUAL; ?>">	
<div class="main-wrapper">

	<header class="main-header">
		<nav>
			<div class="brand-name">
				<picture>
					<source srcset="<?php echo IMAGES; ?> 1x, <?php echo IMAGES; ?> 2x" media="(min-width: 315px)">
					<img class="fleek-logo" src="<?php echo IMAGES; ?>" alt="Fleek Logo">
				</picture>
			</div>
			
			<button class="toggle" role="menu">
				<span class="sr-only">Toggle</span>
				<span class="tog1"></span>
				<span class="tog2"></span>
				<span class="tog3"></span>
			</button>

			<div class="main-menu-wrapper">
				<ul>
					<li>
						<a href="#nosotros">
							Sobre Nosotros
						</a>
					</li>
					<li>
						<a href="#destinos">
							Destinos Fleek
						</a>
					</li>
					<li>
						<a href="#experiencias">
							Experiencias
						</a>
					</li>
					<li>
						<a href="#compraonline">
							Comprar Online
						</a>
					</li>
					<li>
						<a href="#social">
							Fleek Social
						</a>
					</li>
					<li>
						<a href="#contacto">
							Contacto
						</a>
					</li>
					<li>
						<a href="#puntosdeventa">
							Puntos de venta
						</a>
					</li>
				</ul>

				<ul>
					<li>
						<a class="btn-icon-left" href="#viajo">
							Yo viajo 
						</a>
					</li>
					<li>
						<a class="btn-icon-left" href="#viaje">
							Yo viajé
						</a>
					</li>
				</ul>

				<ul>
					<li>
						<a class="btn-icon-left" href="<?php echo WHATSAPPLINK; ?>" target="_blank">
							<picture>
								<source srcset="<?php echo IMAGES; ?> 1x, <?php echo IMAGES; ?> 2x" media="(min-width: 315px)">
								<img class="icon-btn" src="<?php echo IMAGES; ?>" alt="Icon Whatsapp">
							</picture>
							<?php echo WHATSAPP; ?>
						</a>
					</li>
					<li>
						<a class="btn-icon-left" href="<?php echo LINK_INSTAGRAM; ?>" target="_blank">
							<picture>
								<source srcset="<?php echo IMAGES; ?> 1x, <?php echo IMAGES; ?> 2x" media="(min-width: 315px)">
								<img class="icon-btn" src="<?php echo IMAGES; ?>" alt="Icon Instagram">
							</picture>
							<?php echo '@'.INSTAGRAM; ?>
						</a>
					</li>
					<li>
						<a class="btn-icon-left" href="mailto:<?php echo EMAIL; ?>" target="_blank">
							<picture>
								<source srcset="<?php echo IMAGES; ?> 1x, <?php echo IMAGES; ?> 2x" media="(min-width: 315px)">
								<img class="icon-btn" src="<?php echo IMAGES; ?>" alt="Icon Email">
							</picture>
							<?php echo EMAIL; ?>
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>