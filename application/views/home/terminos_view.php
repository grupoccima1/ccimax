<!DOCTYPE html>
<html lang="es_MX">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" contet="ie=edge">
    <meta name="author" content="Ing. Saúl Fernando Torres Hernández">
    <meta name="description" content="Grúpo CCIMA S.A. de C.V." />
    <meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

    <title>Grupo CCIMA</title>

    <script type="text/javascript" src="media/assets/js/analytics.js"></script>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '318023479184677');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=318023479184677&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
    <link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/main.css">
    <script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
    <script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="media/assets/js/counter.js"></script>
    <script type="text/javascript" src="media/assets/js/regresiva.js"></script>
    <script src="media/assets/js/video.js"></script>

</head>
<body>
    <div id="video-header-wrap" class="video-wrap centerit w100 h100">
        <video id="video-header" class="centerit w100 h100" controls>
            <source src="media/assets/video/ccima.mp4" type="video/mp4">
            <source src="media/assets/video/ccima.ogg" type="video/ogg">
            Your browser does not support HTML5 video.
        </video>
    </div>

    <md-sidenav class="cc-sidenav md-sidenav-left md-whiteframe-4dp" md-component-id="left">
        <md-toolbar class="md-hue-2">
            <h1 class="md-toolbar-tools">GENERATING PROGRESS</h1>
        </md-toolbar>
        <a href="#!/habitta" ng-click="close()">
            <div class="link-body link-dev valign-wrapper">
                <span class="" style="width: 66%;">Desarrollo Habitacional</span><img class="" src="media/assets/img/logos/logo-habitta.svg" height="18">
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec" ng-click="close()">
            <div class="link-body link-dev valign-wrapper">
                <span class="" style="width: 66%;">Desarrollo Industrial</span><img class="" src="media/assets/img/logos/logo-navetec.svg" height="28">
            </div>
        </a>
        <!--md-divider></!--md-divider>
        <a href="" ng-click="close()">
            <div class="link-body link-dev valign-wrapper">
                <span class="" style="width: 66%;">Construcción</span><img class="" src="media/assets/img/logos/logo-construye.svg" height="34">
            </div>
        </a>
        <md-divider></md-divider>
        <a href="" ng-click="close()">
            <div class="link-body link-dev valign-wrapper">
                <span class="" style="width: 66%;">Renta de Maquinaria</span><img class="" src="media/assets/img/logos/logo-rent.svg" height="28">
            </div>
        </a-->
        <md-toolbar class="md-hue-2">
            <h1 class="md-toolbar-tools">NAVEGACIÓN</h1>
        </md-toolbar>
        <a href="#!" ng-click="close()">
            <div class="link-body link-nav">
                Inicio
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/cotizador" ng-click="close()">
            <div class="link-body link-nav">
                Cotizador
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/login" ng-click="close()">
            <div class="link-body link-nav">
                Login
            </div>
        </a>
        <md-divider></md-divider>

    </md-sidenav>

    <div ng-controller="sideNavCtrl" class="navbar-fixed">
        <nav class="cc-nav white" role="navigation">
            <div class="nav-wrapper">
                <div class="container">
                    <ul>
                        <li><a href="#!" class="nav-logo"><img src="media/assets/img/logos/logo.png"></a></li>
                        <li class="right"><md-button class="md-icon-button md-noink" ng-click="toggleLeft()">
                            <svg viewBox="0 0 24 24" width="24"><path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path></svg>
                        </md-button></li>
                        <!-- <li class="right"><md-button class="md-raised md-primary btn-lg" ng-click="toQuote()">COTIZAR AQUÍ</md-button></li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        
        <h2 class="futura-demi fs__16px" style="text-align: center;">TERMINOS Y CONDICIONES</h2>

        <p class="futura-book">
        Bienvenido a GRUPO CCIMA, este contrato describe los términos y condiciones generales
        (en adelante, los términos y condiciones) aplicables al uso de los servicios ofrecidos por
        GRUPO CCIMA, y/o cualquier empresa filial o de su mismo grupo empresarial en el sitio web
        www.grupoccima.com, con domicilio ubicado en Carretera Querétaro - San Luis Potosí,
        número 5997, Santa Rosa Jáuregui, Querétaro. C.P. 76220.</p>

        <p class="futura-book">
        Al ingresar y utilizar este sitio, cuyo nombre de dominio es www.grupoccima.com,
propiedad de GRUPO CCIMA, usted se reconoce como USUARIO del mismo por lo que se
considera aceptado los términos y condiciones contenidos en este convenio.
        </p>
        
        <p class="futura-book">
        formularios físicos o electrónicos, o cualquier otro medio conocido. En este sentido y
        atendiendo a las obligaciones legales a través de este instrumento se informa a usted como
        titular de los datos que se recaben y los fines que se darán a los mismos.
        </p>
        
        <p class="futura-book">Si el USUARIO no acepta en forma absoluta los términos y condiciones del presente, deberá
        abstenerse de usar este sitio web denominado www.grupoccima.com. Para el caso de que
        el USUARIO continue con el uso de este, se considerará como aceptación.
        </p>

        <p class="futura-book">Para acceder a determinados servicios proporcionados por la página, deberá haber leído el
        aviso de privacidad correspondiente y registrar sus datos personales. Los USUARIOS
        reconocen que, al proporcionar dicha información de carácter personal, otorgan a GRUPO
        CCIMA la autorización expresa para hacer uso de los mismos términos del aviso de
        privacidad.
        </p>

        <p class="futura-book">
        Las presentes condiciones generales estarán regidas por las leyes vigentes en la republica
        mexicana. En caso de controversia respecto de la interpretación cumplimiento y ejecución
        de las presentes condiciones generales las partes expresamente se comprometen a acudir
        ante la jurisdicción de los tribunales competentes de la ciudad de Querétaro, Qro,
        renunciando a cualquier otro que por razones de su domicilio presente o futuro les pudiera
        corresponder.
        </p>

    </div>

    <footer class="page-footer cc-blue0-bg" ng-controller="mainController as main" ng-cloak>
        <div class="container">
            <div class="row py-80">

                <div class="col s12">
                    <h4 class="pb-20">¿Tienes algún proyecto en mente? Tomemos un café</h4>
                </div>
                <form class="col s12 m7" ng-submit="main.sendEmail()">
                    <div class="input-field col s12">
                        <input id="first_name" type="text" name="name" class="validate" autocomplete="off" required ng-model="main.name">
                        <label for="first_name">¿Cómo te llamas?</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="email" type="email" name="email" class="validate" autocomplete="off" required ng-model="main.email">
                        <label for="email">Compartenos tu Correo electrónico @</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="tel" type="tel" name="phone" class="validate" autocomplete="off" ng-model="main.phone">
                        <label for="tel">Si lo prefieres, dejanos tu Télefono (opcional)</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="textarea1" name="details" class="materialize-textarea" autocomplete="off" maxlength="120" required ng-model="main.message"></textarea>
                        <label for="textarea1">¡Cuéntanos sobre tu proyecto!</label>
                    </div>
                    <button class="waves-effect waves-teal btn right w100" type="submit">
                        ENVIAR
                    </button>
                </form>

                <div class="contact-footer col s12 m4 right">
                    <div class="py-40">
                        <h4>Contactanos</h4>
                        <ul>
                            <li class="py-10">Dirección: <a class="" href="https://www.google.com.mx/maps/place/GRUPO+CCIMA+S.A.+DE+C.V./@20.7207906,-100.4411124,17z/data=!3m1!4b1!4m5!3m4!1s0x85d359d5e049ded3:0xdbdc71bed86b2fb3!8m2!3d20.7207906!4d-100.4389237">Carretera Federal 57, KM 17.5, Santa Rosa Jáuregui, C.P. 76220, Santiago de Querétaro, Qro.</a></li>
                            <li class="py-10">Teléfono: <a class="" href="tel:+524422912223"> 442 291 2223</a></li>
                            <li class="py-10">Correo: <a class="" href="mailto:hola@grupoccima.com">hola@grupoccima.com</a></li>
                            <li class="py-10">Abrimos: Lun-Vie: 8 am-6:30 pm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <ul class="social-icons">
                    <li class="right">
                        <a href="https://mx.linkedin.com/company/grupo-ccima">
                            <img src="media/assets/img/icons/social/linkedin.svg" width="19" height="19">
                        </a>
                    </li>
                    <li class="right">
                        <a href="https://twitter.com/grupoccima?lang=es">
                            <img src="media/assets/img/icons/social/twitter.svg" width="20" height="20">
                        </a>
                    </li>
                    <li class="right">
                        <a href="https://www.instagram.com/grupo_ccima/">
                            <img src="media/assets/img/icons/social/instagram.svg" width="20" height="20">
                        </a>
                    </li>
                    <li class="right">
                        <a href="https://www.facebook.com/GPOCCIMA/?ref=br_rs">
                            <img src="media/assets/img/icons/social/facebook.svg" width="20" height="20">
                        </a>
                    </li>
                    <li>Grupo CCIMA 2020</li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>
