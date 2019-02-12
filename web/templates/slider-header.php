<?php 
$sliders = array(
//slider 1
    array(
        'titulo' => 'We are Fleek',
        'imagen' => '',
        'texto' => '<p>Viajes de egresados a los mejores destinos del globo.</p>',
        'botones' => array(
            array(
                'texto' => 'Comprá ahora',
                'link' => '#',
                'icon' => '',
                'icon2x' => '',
            ),
            array(
                'texto' => 'Pedí tu reunión',
                'link' => '#',
                'icon' => '',
                'icon2x' => '',
                
            ),
        ),
    ),
//slider 2
);

foreach ( $sliders as $slider ) { ?>
    
    <article>
        <div class="imagen-fondo">
        </div>
        <div class="contenido">
            <h1>
                <?php echo $slider['titulo']; ?>
            </h1>
            <div class="texto">
                <?php echo $slider['texto']; ?>
            </div>
            <div class="wrapper-buttons">
                
                <?php foreach (  $slider['botones'] as $boton ) { ?>

                    <a class="btn" href="<?php echo $boton['link']; ?>">
                        <span><?php echo $boton['texto']; ?></span>
                        <picture>
                            <source srcset="<?php echo IMAGES . $boton['icon']; ?> 1x, <?php echo IMAGES . $boton['icon2x']; ?> 2x" media="(min-width: 315px)">
                            <img class="icon-btn" src="<?php echo IMAGES . $boton['icon']; ?>">
                        </picture>
                    </a>

                <?php } ?>
            </div>
        </div>
    </article>

<?php }