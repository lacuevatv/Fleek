<?php 
$sliders = array(
//slider 1
    array(
        'titulo' => 'We are Fleek',
        'imagen' => 'slider1.jpg',
        'imagenRetina' => 'slider1@2x.jpg',
        'imagenMobil' => 'slider1-mobile.jpg',
        'imagenMobilRetina' => 'slider1-mobile@2x.jpg',
        'texto' => '<p>Viajes de egresados a los mejores destinos del globo.</p>',
        'color' => 'blanco',
        'botones' => array(
            array(
                'texto' => 'Comprá ahora',
                'link' => '#',
                'icon' => 'icon-plane.png',
                'icon2x' => 'icon-plane@2x.png',
                'iconSVG' => 'icon-plane.svg',
            ),
            array(
                'texto' => 'Pedí tu reunión',
                'link' => '#',
                'icon' => 'icon-person.png',
                'icon2x' => 'icon-person@2x.png',
                'iconSVG' => 'icon-person.svg',
                
            ),
        ),
    ),
//slider 2
    array(
        'titulo' => 'Playa',
        'imagen' => 'slider2.jpg',
        'imagenRetina' => '',
        'imagenMobil' => 'slider2-mobile.jpg',
        'imagenMobilRetina' => '',
        'texto' => '<p>La Habana // Cancún.</p><p><small>Vos elegís, Vos Decidís.</small></p>',
        'color' => 'blanco',
        'botones' => array(
            array(
                'texto' => 'Comprá ahora',
                'link' => '#',
                'icon' => 'icon-plane.png',
                'icon2x' => 'icon-plane@2x.png',
                'iconSVG' => 'icon-plane.svg',
            ),
            array(
                'texto' => 'Pedí tu reunión',
                'link' => '#',
                'icon' => 'icon-person.png',
                'icon2x' => 'icon-person@2x.png',
                'iconSVG' => 'icon-person.svg',
                
            ),
        ),
    ),
//slider 3
    array(
        'titulo' => 'Nieve',
        'imagen' => 'slider3.jpg',
        'imagenRetina' => '',
        'imagenMobil' => 'slider3-mobile.jpg',
        'imagenMobilRetina' => '',
        'texto' => '<p>Bariloche // San Martín de los Andes.</p><p><small>Vos elegís, Vos Decidís.</small></p>',
        'color' => 'blanco',
        'botones' => array(
            array(
                'texto' => 'Comprá ahora',
                'link' => '#',
                'icon' => 'icon-plane.png',
                'icon2x' => 'icon-plane@2x.png',
                'iconSVG' => 'icon-plane.svg',
            ),
            array(
                'texto' => 'Pedí tu reunión',
                'link' => '#',
                'icon' => 'icon-person.png',
                'icon2x' => 'icon-person@2x.png',
                'iconSVG' => 'icon-person.svg',
                
            ),
        ),
    ),
    //slider 4
    array(
        'titulo' => 'City',
        'imagen' => 'slider4.jpg',
        'imagenRetina' => '',
        'imagenMobil' => 'slider4-mobile.jpg',
        'imagenMobilRetina' => '',
        'texto' => '<p>Londres // Dublin.</p><p><small>Vos elegís, Vos Decidís.</small></p>',
        'color' => 'azul',
        'botones' => array(
            array(
                'texto' => 'Comprá ahora',
                'link' => '#',
                'icon' => 'icon-plane-azul.png',
                'icon2x' => 'icon-plane-azul@2x.png',
                'iconSVG' => 'icon-plane-azul.svg',
            ),
            array(
                'texto' => 'Pedí tu reunión',
                'link' => '#',
                'icon' => 'icon-persona-azul.png',
                'icon2x' => 'icon-persona-azul@2x.png',
                'iconSVG' => 'icon-persona-azul.svg',
            ),
        ),
    ),
);
?>


<div class="slide-progress"></div>

<div id="header-slider" class="slider-header owl-carousel">

<?php
foreach ( $sliders as $slider ) { ?>
    
    <article class="item-slider">
        
        <?php if ( $slider['imagen'] != '') : ?>
        <div class="imagen-fondo">

            <picture>

                <?php if ( $slider['imagenMobil'] != '') : ?>
                    <source srcset="<?php echo UPLOADSURL . $slider['imagen']; ?> 1x, <?php  if ( $slider['imagenRetina'] != '' ) { echo UPLOADSURL . $slider['imagenRetina']; } ?> 2x" media="(min-width: 992px)">

                    <source srcset="<?php echo UPLOADSURL . $slider['imagenMobil']; ?> 1x, <?php if ( $slider['imagenMobilRetina'] != '' ) { echo UPLOADSURL . $slider['imagenMobilRetina']; } ?> 2x" media="(min-width: 315px)">

                <?php else : ?>

                    <source srcset="<?php echo UPLOADSURL . $slider['imagen']; ?> 1x, <?php if ( $slider['imagenRetina'] != '' ) { echo UPLOADSURL . $slider['imagenRetina']; } ?> 2x" media="(min-width: 315px)">

                <?php endif; ?>
    
                <img src="<?php echo UPLOADSURL . $slider['imagen']; ?>">
            </picture>

        </div>

        <?php endif; ?>

        <div class="contenido <?php echo $slider['color']; ?>">
            <h1>
                <?php echo $slider['titulo']; ?>
            </h1>

            <div class="texto">
                <?php echo $slider['texto']; ?>
            </div>

            <div class="wrapper-buttons">
                
                <?php foreach (  $slider['botones'] as $boton ) { ?>

                    <a class="icon-btn-right" href="<?php echo $boton['link']; ?>">
                        <span><?php echo $boton['texto']; ?></span>

                        <?php if ( $boton['icon'] != '' ) : ?>

                        <picture>

                            <?php if ( $boton['iconSVG'] != '' ) : ?>

                            <source srcset="<?php echo IMAGES . $boton['iconSVG']; ?>" type="image/svg+xml">

                            <?php endif; ?>

                            <source srcset="<?php echo IMAGES . $boton['icon']; ?> 1x, <?php if (  $boton['icon2x'] != '' ) { echo IMAGES . $boton['icon2x'] . ' 2x'; } ?>" media="(min-width: 315px)">

                            <img class="icon-btn" src="<?php echo IMAGES . $boton['icon']; ?>">
                        </picture>

                        <?php endif; ?>
                    </a>

                <?php } ?>
            </div>
        </div>
    </article>

<?php } ?>

</div>