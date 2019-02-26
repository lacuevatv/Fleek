<?php 
//compra online
$form1 = array(
    'formName' => 'compra-online',
    'formId' => 'compra-online',
    'formType' => 'questions',//el formulario questions va mostrando las preguntas individualmente
    'action' => '',
    'method' => 'POST',
    'loader' => false,
    'submit' => false,
    'indice' => true,
    'inputs' => array(
        array(
            'question' => '¿Cuál es tu nombre y Apellido?',
            'label' => 'Nombre y Apellido',
            'inputName' => 'name',
            'inputType' => 'text',
            'error-msj' => 'Es necesario que complete este campo',
            'clases' => '',
        ),
        array(
            'question' => '¿Cuál es tu edad?',
            'label' => 'Edad',
            'inputName' => 'edad',
            'inputType' => 'text',
            'error-msj' => 'Es necesario que complete este campo',
            'clases' => '',
        ),
        array(
            'question' => '¿Cuál es el nombre de la escuela?',
            'label' => 'Escuela',
            'inputName' => 'escuela',
            'inputType' => 'text',
            'error-msj' => 'Es necesario que complete este campo',
            'clases' => '',
        ),
    ),
);

$counterIndex = 0;
if ($data == 'compra-online') {
    $formulario = $form1;
} else {
    $formulario = $form1;
}

?>
<form method="<?php echo $formulario['method']; ?>" name="<?php echo $formulario['formName']; ?>" id="<?php echo $formulario['formId']; ?>" action="<?php echo $formulario['action']; ?>" data-form-type="<?php echo $formulario['formType']; ?>" has-index="<?php echo $formulario['indice']; ?>">
    
    <?php if ( $formulario['loader'] ) : ?>
        <div class="loader"></div>
    <?php endif; ?>
    
    <div class="inner-wrapper-form">

        <?php if ( $formulario['formType'] == 'questions' ) : ?>

            <div class="wrapper-questions">

        <?php endif; ?>

        <?php foreach ( $formulario['inputs'] as $input ) { 
            
            if ( $formulario['formType'] == 'questions' ) : ?>
                
                <div data-index="<?php echo $counterIndex+1; ?>" class="form-group-question <?php echo $input['clases']; ?>">

                    <h4 class="question">
                        <?php echo $input['question']; ?>
                    </h4>

            <?php endif; ?>

            <div class="form-group <?php echo $input['clases']; ?>">

                <input type="<?php echo $input['inputType']; ?>" name="<?php echo $input['inputName']; ?>">
                <label for="<?php echo $input['inputName']; ?>">
                    <?php echo $input['label']; ?>
                </label>
                <span class="msj-error-input">
                    <?php echo $input['error-msj']; ?>
                </span>
                
                <?php if ( $formulario['formType'] == 'questions' ) : ?>
                
                    <button type="button" class="next-question-btn">
                        <span class="sr-only">Siguiente pregunta</span>
                    </button>

                <?php endif; ?>

                </div><!--//.form-group-->
                
                <?php if ( $formulario['formType'] == 'questions' ) : ?>
                    
                        <p class="aclaracion">
                            Presioná Enter para acceder a la siguiente pregunta.
                        </p>

                    </div><!--//.form-group-question-->

                <?php endif; 

            $counterIndex++;

        }//foreach inputs ?>

        <?php if ( $formulario['formType'] == 'questions' ) : ?>

        </div><!--//.wrapper-questions-->

        <?php endif; ?>
        
        <?php if ( $formulario['indice'] ) : ?>
            <div class="indice-formulario">
                <button id="previous-question" type="button">Anterior</button>
                <p>
                    <span class="input-activate">
                        1
                    </span>
                    <span class="input-total">
                        <?php echo count($formulario['inputs']); ?>
                    </span>
                </p>
                <button id="next-question" type="button">Siguiente</button>
            </div>
        <?php endif; ?>

        <?php if ( $formulario['submit'] ) : ?>
            <button type="submit" class="btn-submit">Enviar</button>
        <?php endif; ?>
        
    </div><!-- //.inner-wrapper-form -->
    <span class="msj-form"></span>
</form><!-- //default-form -->