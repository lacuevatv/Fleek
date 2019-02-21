<?php 
$sliders = null;
$bariloche = array(
//slider 1
    array(
        'titulo' => 'Bariloche',
        'imagen' => 'slider1.jpg',
        'imagenRetina' => 'slider1@2x.jpg',
        'imagenMobil' => 'slider1-mobile.jpg',
        'imagenMobilRetina' => 'slider1-mobile@2x.jpg',
        'texto' => '',
    ),
//slider 2
    array(
        'titulo' => 'Bariloche',
        'imagen' => 'slider1-V2.jpg',
        'imagenRetina' => 'slider1-V2@2x.jpg',
        'imagenMobil' => 'slider1-mobile-V2.jpg',
        'imagenMobilRetina' => 'slider1-mobile-V2@2x.jpg',
        'texto' => '',
    ),
//slider 3
);

if ($data == 'bariloche') {
    $sliders = $bariloche;
    $color = 'verde';
}
?>
<?php if ( $sliders != null ) : ?>
<!--<div class="slide-progress <?php //echo $color;?>"></div>-->

<ul id="destino-slider" class="slider-header owl-carousel">

<?php
foreach ( $sliders as $slider ) { ?>
    <?php if ( $slider['imagen'] != '') : ?>
    
    <li class="item-slider">

        <picture>

            <?php if ( $slider['imagenMobil'] != '') : ?>
                <source srcset="<?php echo UPLOADSURL . $slider['imagen']; ?> 1x, <?php echo UPLOADSURL . $slider['imagenRetina']; ?> 2x" media="(min-width: 992px)">

                <source srcset="<?php echo UPLOADSURL . $slider['imagenMobil']; ?> 1x, <?php echo UPLOADSURL . $slider['imagenMobilRetina']; ?> 2x" media="(min-width: 315px)">

            <?php else : ?>

                <source srcset="<?php echo UPLOADSURL . $slider['imagen']; ?> 1x, <?php echo UPLOADSURL . $slider['imagenRetina']; ?> 2x" media="(min-width: 315px)">

            <?php endif; ?>

            <img src="<?php echo UPLOADSURL . $slider['imagen']; ?>" alt="<?php echo UPLOADSURL . $slider['titulo']; ?>">
        </picture>

    </li>

    <?php endif; ?>

<?php } ?>

</ul>

<?php endif; ?>