<?php
/*
 * PAGE TEMPLATE: PAGINA INICIO
 * es el html de la pagina de inicio
*/
getTemplate( 'header' ); ?>
<div class="inner-wrapper">
    
    <header class="slider-header-wrapper">
        <div class="slider-header">
            <?php getTemplate('slider-header'); ?>
        </div>
        <p>
            Fleek es un marca de productos para jóvenes de la empresa Auckland Turismo S.R.L.
        </p>
    </header>

    <section>
        <div>
            <picture>
                <source srcset="<?php echo IMAGES; ?> 1x, <?php echo IMAGES; ?> 2x" media="(min-width: 315px)">
                <img class="icon-btn" src="<?php echo IMAGES; ?>">
            </picture>
        </div>
        <div>
            <h2>
                We are Fleek
            </h2>
        
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            </p>
            <p>
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>

            <a class="btn" href="#">
                Ver más
            </a>
        </div>

        <div>
            <picture>
                <source srcset="<?php echo IMAGES; ?> 1x, <?php echo IMAGES; ?> 2x" media="(min-width: 315px)">
                <img class="icon-btn" src="<?php echo IMAGES; ?>">
            </picture>
        </div>
    </section>

    <section>
        <h2 class="sr-only">
            Destinos
        </h2>
        <ul>
            <li>
                bariloche
                <?php //getTemplate( 'slider-destinos' ); ?>
            </li>
            <li>
                cancun
                <?php //getTemplate( 'slider-destinos' ); ?>
            </li>
            <li>
                londres
                <?php //getTemplate( 'slider-destinos' ); ?>
            </li>
        </ul>
    </section>

    <section>
        <h2 class="sr-only">
            Slider de Testimonios
        </h2>
        <?php //getTemplate( 'slider-testimonios' ); ?>
    </section>

    <section>
        <h2 class="sr-only">
            Compra tu viaje
        </h2>
        <div>
            <h3>Compra tu viaje</h3>
            <h3>Reservá tu lugar ahora</h3>
        </div>
        <div>
            <h3>Comprá tu viaje ahora.</h3>
            <h3>Comprá tu viaje con un solo click.</h3>

            <p>Hacé la reserva para tu grupo en forma online.</p>

            <div class="wrapper-button">
                <a href="">
                    <span><?php echo $boton['texto']; ?></span>
                    <picture>
                        <source srcset="<?php echo IMAGES; ?> 1x, <?php echo IMAGES; ?> 2x" media="(min-width: 315px)">
                        <img class="icon-btn" src="<?php echo IMAGES; ?>">
                    </picture>
                </a>
            </div>

            <p>Si preferís la asistencia de un asesor <a href="#">envianos tus datos acá.</a>
        </div>
    </section>
    
    <section>
        <div>
            <h3>
            Yo viajo
            </h3>
            <ul>
                <li>
                    <a href="#" target="_blank">
                        Inscripciones
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        Cupones de Pago
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        Ficha Médica
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        Tips de Viaje
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <h3>
                Yo viajé
            </h3>
            <p>
                Encontrá las mejores imágenes de tu viaje.
            </p>
        </div>
    </section>

    <section>
        <div>
            <picture>
                <source srcset="<?php echo IMAGES; ?> 1x, <?php echo IMAGES; ?> 2x" media="(min-width: 315px)">
                <img class="icon-btn" src="<?php echo IMAGES; ?>">
            </picture>
            <h2>
                @wearefleek
            </h2>
        </div>
        <div class="wrapper-feed">
            feed de instagram
        </div>
    </section>

</div><!-- // INNVER WRAPPER -->
<?php getTemplate( 'footer' );