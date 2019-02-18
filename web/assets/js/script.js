/**
 * File script.js
 *
 * @required jQuery
 * @ver 1.0
 --------------------------------------------------------------
>>> TABLE OF CONTENTS:
1.0 NAVIGATION
2.0 FORMULARIOS
3.0 POPUP PROMO
4.0 IMAGENES ANIMACIONES Y SLIDERS
--------------------------------------------------------------*/

var baseUrl = 'http://' + window.location.host;
var ajaxFileUrl = baseUrl + '/inc/ajax.php';
var paginaIndex = 1;
var pageActual = $('body').attr('data-page');
var windowWidth;
//se pasa con numeral #page
function scrollToID ( id ) {
    $('html, body').stop().animate({
        scrollTop: $(id).offset().top -90
    }, 'slow');
}

window.onresize = function(){
    windowWidth = window.innerWidth;
    console.log(windowWidth);
};

/*--------------------------------------------------------------
1.0 BASE 
* navigation, scroll to
--------------------------------------------------------------*/

$(document).ready(function(){
    windowWidth = window.innerWidth;
    /*
     * SCROLL TOP
    */
    $('.go-up').click(function(){
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
    });
    
    /*
    * SCROLL TO (links)
    */
    $('.scroll-to').click(function( e ){
        var scroll = $(this).attr('data-scroll');
        if ( pageActual == 'inicio' || scroll ) {
            e.preventDefault();
        
            //var href = '#'+$(this).attr('href');
            var href = $(this).attr('href').split('#');
            href = '#'+href[1];

            scrollToID(href);

            MovilMenuToggle();
            
        }

    });

    /*
     * TOGGLE
    */
    $('.toggle').click(MovilMenuToggle);

    function MovilMenuToggle (){
        $('.toggle').toggleClass('toggle-open');
        $('.brand-name').toggleClass('brand-name-open');
        
        var menu = $('.main-menu-wrapper');
        
        if ( $(menu).css('right') != '0px' ) {
            menu.animate({
                 'right': '0px',
                 'opacity':'1',
            }, 300);
        } else {
            menu.animate({
                'right': '-300%',
                'opacity':'0',
            }, 300);
        }
     }

     /*
      * LOAD MORE AJAX
     */
     $(document).on('click', '#load-more', function(){
                
        $.ajax( {
          type: 'POST',
          url: ajaxFileUrl,
          data: {
            function: 'load-more',
            page: paginaIndex,
          },
          //funcion antes de enviar
          beforeSend: function() {
              //imagen cargador
              loader.fadeIn();
          },
          success: function ( response ) {
              loader.fadeOut();
              //console.log(response);
              
              if (response) {
                $('#contenedor').append( response );
              } else {
                $('.wrapper-mas-button').remove();
              }
              paginaIndex++
          },
          error: function ( ) {
              console.log('error');
          },
        });//cierre ajax

    });


});//.ready()

/*--------------------------------------------------------------
2.0 FORMULARIOS
--------------------------------------------------------------*/
$(document).ready(function(){

    var specialcharacters = '@#$^&%*()+=[]\'\"\/{}|:;¡!¿?<>,.';
    var numeros = '0123456789';
    var letras = 'abcdefghijklmnñopqrstuvwxyz';

    //busca los caracteres indicados en un string y devuelve true si existen
    function areThereAny ( cadena, characters ) {
        for (var i = 0; i < characters.length; i++) {
        if ( cadena.indexOf(characters[i]) != -1 ) {
                return true;    
        }
    }
    return false;
    }

    //quita numeros de un string
    function cleanedOthers(cadena, caracteres){ 

    //eliminamos uno por uno
    for (var i = 0; i < caracteres.length; i++) {
        cadena= cadena.replace(new RegExp(caracteres[i], 'gi'), '');
    }   

    return cadena;
    }

    //quita caracteres extraños del string, los caracteres se pasan como una variable
    function cleanedSpecialCharacters(cadena, specialcharacters){ 

    //eliminamos uno por uno
    for (var i = 0; i < specialcharacters.length; i++) {
        cadena= cadena.replace(new RegExp("\\" + specialcharacters[i], 'gi'), '');
    }   

    return cadena;
    }

    //lo pasa a minúsculas
    function toLowerCase(cadena) {
        cadena = cadena.toLowerCase();
        return cadena;
    }

    //remplasa dashes "-" del string por espacios
    function replaceDashes( cadena ) {
    cadena = cadena.replace(/-/gi," ");
    cadena = cadena.replace(/_/gi," ");
    return cadena;
    }


    //borra espacios del string
    function removeDashesSpaces( cadena ) {
    cadena = cadena.replace(/-/gi,"");
    cadena = cadena.replace(/_/gi,"");
    cadena = cadena.replace(/ /gi,"");
    return cadena;
    }

    // Quitamos espacios y los sustituimos por - porque nos gusta mas asi
    function replaceSpaces( cadena ) {
    cadena = cadena.replace(/ /gi,"-");
    return cadena;
    }

    //quita acentos y ñ y lo pasa a minúsculas
    function cleanAcentos( cadena ) {

    // Lo queremos devolver limpio en minusculas
    cadena = cadena.toLowerCase();

    // Quitamos acentos y "ñ". Fijate en que va sin comillas el primer parametro
    cadena = cadena.replace(/á/gi,"a");
    cadena = cadena.replace(/é/gi,"e");
    cadena = cadena.replace(/í/gi,"i");
    cadena = cadena.replace(/ó/gi,"o");
    cadena = cadena.replace(/ú/gi,"u");
    cadena = cadena.replace(/ñ/gi,"n");
    return cadena;
    }


    /*
     * FUNCIONES DE LOS LABEL
    */
    //función que hace zoom out a las etiquetas para escribir en los input:
    function zoomOutLabel( input ) {
        var contenedor = $(input).closest('.form-group')
        var label = $(contenedor).find('label')
        $(label).addClass('on');
    }
    //funcion al hacer click en label
    function focusInput( label ) {
        var contenedor = $(label).closest('.form-group')
        var input = $(contenedor).find('input')
        $(input).focus();
    }

    //clic en label, focus en input
    $(document).on('click', 'label', function(){
        focusInput( this );
    });

    //on focus, etiqueta se achica
    $(document).on('focus', 'input', function(){
        zoomOutLabel( this );
        $(this).addClass('input-on');
    });


    /*
     * VALIDACIONES FORMULARIO
    */
    //FOCUS OUT INPUT
    //input text
    $(document).on('focusout', 'input[type=text]', function() {
        var valor = $(this).val();
        var contenedor = $(this).closest('.form-group');
        var msj = $(contenedor).find('.msj-error-input');

        if ( valor == '' ) {
            $(msj).fadeIn();
            return false;  
        } 

        valor = cleanedSpecialCharacters(valor,specialcharacters);
        
        valor = cleanedOthers(valor,numeros);
        valor = replaceDashes(valor);
        
        $(this).val(valor);

        //si hay números devuelve error
        if ( areThereAny(valor, numeros+specialcharacters) || valor == '' || valor.length < 3) {
            $(msj).fadeIn();
            
        } else { 
            $(msj).fadeOut();
           
        }
    });

    //input type numbers
    $(document).on('focusout', 'input[type=number]', function() {
        
        var valor = $(this).val();
        var contenedor = $(this).closest('.form-group');
        var msj = $(contenedor).find('.msj-error-input');

        if ( valor == '' ) {
            $(msj).fadeIn();
            return false;  
        } 
        
        valor = cleanedOthers(valor,letras);
    
        valor = cleanedSpecialCharacters(valor,specialcharacters)
                
        $(this).val(valor);

        //si hay letras o no pasa alguna de las validaciones devuelve error
        if ( areThereAny(valor, letras+specialcharacters || valor.length < 7) ) {
            $(msj).fadeIn();
            
        } else {
            $(msj).fadeOut(); 
        }
    });

    //input tyme email
    $(document).on('focusout', 'input[type=email]', function() {
        var valor = $(this).val();
        var contenedor = $(this).closest('.form-group');
        var msj = $(contenedor).find('.msj-error-input');

        if ( valor == '' ) {
            $(msj).fadeIn();
            return false;  
        } 

        valor = cleanedSpecialCharacters(valor,'#$^&%*()[]\'\"\/{}:;<>,');
        
        //remueve algún espacio si hay
        valor = valor.replace(/ /gi,"");
        
        $(this).val(valor);

        //si hay números devuelve error
        if ( valor == '' || valor.length < 8 || valor.indexOf('@') == -1 || valor.indexOf('@')  == 0 ) {
            $(msj).fadeIn();
        } else {
            $(msj).fadeOut();
        }
    });


    /*
     * SUBMIT FORMULARIO
    */    

    $(document).on('submit', '#default-form', function( e ) {
        e.preventDefault();
        var loader = $('.loader');
        var msj = $(this).find('.msj-form');
        var contenedor = $(loader).closest('form');

    	formData = new FormData( this );
        formData.append('function','formulario-default');

    	$.ajax( {
            type: 'POST',
            url: ajaxFileUrl,
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            //funcion antes de enviar
            beforeSend: function() {
                $(loader).fadeIn();
            },
            success: function ( response ) {
                //console.log(response);
                $(loader).fadeOut(); 
                msj.html(response);    
            },
            error: function ( ) {
                console.log('error');
            },
    	});//cierre ajax

    });//submit formulario default

})//ready

/*--------------------------------------------------------------
3.0 POPUP PROMO
--------------------------------------------------------------*/

/*$(window).on('load', function(){

    var popup = $( '.popup' );
    var popupIMG = $( '.popup img' );
    var tiempo = 7000;
    if ( popup.length != 0 ) {
        var closeX = $( '.close-popup' );
        var closeBTN = $( '.cerrar-popup' );

        function openPop () {
            popup.addClass('popup-active');
            popupIMG.fadeIn();
        }

        setTimeout( openPop, tiempo);

        function closePopup() {
            popup.removeClass('popup-active');
            popupIMG.fadeOut(tiempo);
        }

        closeX.click(closePopup);
        closeBTN.click(closePopup);
    }
});*/

/*--------------------------------------------------------------
4.0 IMAGENES, ANIMACIONES SLIDERS
--------------------------------------------------------------*/

$(window).on('load', function(){

    //cargaimaenes por ajax LAZY LOAD
    loadImages();


    initSlider();

    /*
     * IN VIEW ANIMATION
    */
    /*var $animation_elements = $('.animate-element');
    var $window = $(window);

    function check_if_in_view() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        $.each($animation_elements, function() {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);

            //check to see if this current container is within viewport
            if ((element_bottom_position >= window_top_position) &&
                (element_top_position <= window_bottom_position)) {
                $element.addClass('in-view');
            } else {
                $element.removeClass('in-view');
            }
        });
    }

    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');

    */


});

/*
 * esta funcion hace el lazy load de las imagenes
 * para que una imagen sea lazy load hay que crear un div con la clase .lqva-lazy-load-images
*/
function loadImages() {
    var counter = 0;
    var images = $('.lqva-lazy-load-images');

    images.each(function() {
        loadImage (this);
        counter++;
    });

    console.log(counter);

}//loadImages()


//esta funcion arma el html de la imagen que se va a cargar mediante "picture" y busca sus distintos srcset,y al finalizar realiza un pequeño fundido
function loadImage (image) {
    $(image).hide();
    var imagenDefault = $(image).attr('srcset');
    var imagenRetina = $(image).attr('srcset2x');
    var movil = $(image).attr('data-movil');
    var html = '<picture>';

    if ( movil ) {
        var imagenMovil = $(image).attr('srcsetmov');
        var imagenMovilRetina = $(image).attr('srcsetmov2x');

        if (imagenMovil == '') {
            imagenMovil = imagenDefault;
        }

        if (imagenMovilRetina == '') {
            imagenMovilRetina = imagenRetina;
        }

        html += '<source srcset="'+ imagenDefault + ' 1x, '+ imagenRetina +' 2x" media="(min-width: 992px)"></source>';
        html += '<source srcset="'+imagenMovil+' 1x, '+imagenMovilRetina+' 2x" media="(min-width: 315px)"></source>';
        
        
    } else {
        html += '<source srcset="' + imagenDefault + ' 1x, ' + imagenRetina + ' 2x" media="(min-width: 315px)">';
    }

    html += '<img class="icon-btn" src="'+imagenDefault+'">';
    html += '</picture>';

    $(image).append($(html)).fadeIn(1000);

}

/*
 * esta funcion arranca los sliders
*/

function initSlider() {

    var flechaIzqHtml = '<picture><source srcset="'+baseUrl+'/assets/images/flecha-azul.svg" type="image/svg+xml"><source srcset="'+baseUrl+'/assets/images/flecha-azul.png 1x, '+baseUrl+'/assets/images/flecha-azul@2x.png "media="(min-width: 315px)"><img class="flecha-izquierda" src="'+baseUrl+'/assets/images/flecha-azul.png" alt="icon-flecha"></picture>';
    var flechaDerHtml = '<picture><source srcset="'+baseUrl+'/assets/images/flecha-azul.svg" type="image/svg+xml"><source srcset="'+baseUrl+'/assets/images/flecha-azul.png 1x, '+baseUrl+'/assets/images/flecha-azul@2x.png "media="(min-width: 315px)"><img class="flecha-derecha" src="'+baseUrl+'/assets/images/flecha-azul.png" alt="icon-flecha"></picture>';

    $(".owl-carousel").owlCarousel({
        items: 1,
        animateOut: 'fadeOut',
        loop: true,
        autoplay: true,
        autoplayTimeout:6000,
        onInitialized: startProgressBar,
        onTranslate: resetProgressBar,
        onTranslated: startProgressBar,
        nav:true,
        navText : [flechaIzqHtml, flechaDerHtml],
        dots:true,
    });


    //inicia la progress bar de los sliders  
    function startProgressBar() {
        // apply keyframe animation
        var persentajeWidth = '90%';
        if ( windowWidth < 960 ) {
            persentajeWidth = '100%'
        }

        $(".slide-progress").css({
        width: persentajeWidth,
        transition: "width 6000ms"
        });
    }
    
    //vuelve a 0 la progras bar
    function resetProgressBar() {
        $(".slide-progress").css({
        width: 0,
        transition: "width 0s"
        });
    }
}//init slider

