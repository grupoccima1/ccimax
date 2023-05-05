<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contet="ie=edge">
	<meta name="author" content="Ing. Saúl Fernando Torres Hernández">
	<meta name="description" content="Grúpo CCIMA S.A. de C.V."/>
	<meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria"/>

	<title>Grupo CCIMA</title>

	<script type="text/javascript" src="media/assets/js/analytics.js"></script>

  <link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="media/assets/css/navetec.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
	<script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body ng-controller="PBParamoCtrl as paramo">
  
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
		<!-- <md-divider></md-divider>
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
		</a> -->
		<md-toolbar class="md-hue-2">
			<h1 class="md-toolbar-tools">NAVEGACIÓN</h1>
		</md-toolbar>
		<a href="#!" ng-click="close()">
			<div class="link-body link-nav">
				Inicio
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/dashboard" ng-click="close()">
			<div class="link-body link-nav">
				Dashboard
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/quote_tool" ng-click="close()">
			<div class="link-body link-nav">
				Cotizador
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/Dashboard-Desarrollos" ng-click="close()">
			<div class="link-body link-nav">
				Desarrollos
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/users" ng-click="close()">
			<div class="link-body link-nav">
				Usuarios
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/Cambiar_Contraseña" ng-click="close()">
			<div class="link-body link-nav">
				Cambiar contraseña
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/login" ng-click="close()">
			<div class="link-body link-nav">
				Cerrar sesión
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
					</ul>
				</div>
			</div>
		</nav>
	</div>

	<div ng-class="is_scrollin">
    	<div class="plano_container">

			<div class="container mt-64">
				<div class="row quote-header">
					<div class="col s12">
						<h1 class="center-align futura-med blue-txt">PÁRAMO 3</h1>
						<div class="quote-description">
							<p class="left">Cotiza facilmente con un solo Click</p>
							<img class="quote-icon-tap mt-15 ml-10 left" src="media/assets/img/icons/tap.svg">
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="color-table">
					<div class="color-block pb-property-active-bg left"></div>
					<p class="pl-40 py-2">Disponible</p>
                </div>
                <div class="color-table">
                    <div class="color-block darkgray__bg left"></div>
                    <p class="pl-40 py-2">Estratégico</p>
                </div>
				<div>
					<div class="color-block pb_lightred-bg left"></div>
					<p class="pl-40 py-2">En espera</p>
				</div>
				<div>
					<div class="color-block brown left"></div>
					<p class="pl-40 py-2">Apartado</p>
				</div>
				<div>
					<div class="color-block mustard-bg left"></div>
					<p class="pl-40 py-2">Enganchado</p>
				</div>
				<div>
					<div class="color-block pb_teal-bg left"></div>
					<p class="pl-40 py-2">Vendido</p>
				</div>
				<div>
					<button class="btn-flat right"><i style="font-size:30px;" class="material-icons" ng-click="paramo.openList()">list</i></button>
				</div>
            </div>
            
            <svg class="quote__map" style="width:1680px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1367.65 560.69">

                <defs>
                    <style>
                        
                        .cls-1 {
                            fill:#38638d;
                        }

                        .cls-2,
                        .cls-4 {
                            font-size:4.9px;
                        }

                        .cls-10,
                        .cls-11,
                        .cls-13,
                        .cls-14,
                        .cls-15,
                        .cls-16,
                        .cls-17,
                        .cls-19,
                        .cls-2,
                        .cls-3,
                        .cls-9 {
                            fill:#fff;
                            font-family:CenturyGothic, Century Gothic;
                        }

                        .cls-3 {
                            font-size:4.9px;
                        }

                        .cls-12,
                        .cls-18,
                        .cls-4 {
                            fill:#fdd000;
                        }

                        .cls-12,
                        .cls-18,
                        .cls-21,
                        .cls-23,
                        .cls-4 {
                            font-family:CenturyGothic-Bold, Century Gothic;
                            font-weight:700;
                        }

                        .cls-5,
                        .cls-6 {
                            fill:#e1aa44;
                        }

                        .cls-6 {
                            opacity:0.6;
                        }

                        .cls-7 {
                            fill:#5f6e7f;
                        }

                        .cls-24,
                        .cls-25,
                        .cls-8 {
                            fill:none;
                        }

                        .cls-24,
                        .cls-8 {
                            stroke:#fff;
                            stroke-miterlimit:10;
                        }

                        .cls-8 {
                            stroke-width:1.5px;
                        }

                        .cls-12,
                        .cls-9 {
                            font-size:4.9px;
                        }

                        .cls-10 {
                            font-size:4.9px;
                        }

                        .cls-11 {
                            font-size:4.9px;
                        }

                        .cls-13 {
                            font-size:4.9px;
                        }

                        .cls-14,
                        .cls-18 {
                            font-size:4.9px;
                        }

                        .cls-15 {
                            font-size:4.9px;
                        }

                        .cls-16 {
                            font-size:4.9px;
                        }

                        .cls-17 {
                            font-size:4.9px;
                        }

                        .cls-19 {
                            font-size:4.9px;
                        }

                        .cls-20 {
                            fill:#002650;
                        }

                        .cls-21 {
                            font-size:3.88px;
                        }

                        .cls-21,
                        .cls-22,
                        .cls-23 {
                            fill:#07244b;
                        }

                        .cls-23 {
                            font-size:3.8px;
                        }

                        .cls-24 {
                            stroke-width:0.25px;
                        }

                        .cls-25 {
                            stroke:#030202;
                            stroke-linecap:round;
                            stroke-linejoin:round;
                            stroke-width:3px;
                        }

                    </style>
                </defs>
                
                <g id="Capa_2" data-name="Capa 2">
                    <g id="COMPLEMENTO">

                        <image width="1366" height="558" transform="translate(1.65 2.69)" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/paramo/condos/paramo_3.jpg"/>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[206]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[206])">
                            <polygon id="A_L01" data-name="A L01" class="property pb-sprite-1" points="901.97 110.79 902.51 140.66 977.9 140.6 977.89 110.17 901.97 110.79"/>
                            <text class="cls-2 futura-book" transform="translate(927.84 130.91) rotate(-0.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(934.1 116.41)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(907.38 130.03) rotate(-90)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(975.46 130.04) rotate(-90)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(937.61 124.73) rotate(-0.39)">01</text>
                            <polygon class="cls-5" points="917.52 120.79 913.21 125.41 917.52 130.03 917.52 120.79"/>
                            <polygon class="cls-6" points="917.57 120.79 917.57 130.03 921.88 125.41 917.57 120.79"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[207]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[207])">
                            <polygon id="A_L02" data-name="A L02" class="property pb-sprite-2" points="902.44 170.98 978.21 170.62 977.9 140.6 902.51 140.66 902.44 170.98"/>
                            <text class="cls-2 futura-book" transform="translate(927.83 161.61) rotate(-0.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(934.1 147.11)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(907.38 160.36) rotate(-90)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(975.46 160.71) rotate(-90)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(937.61 155.43) rotate(-0.39)">02</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[208]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[208])">
                            <polygon id="A_L03" data-name="A L03" class="property pb-sprite-1" points="902.42 201.32 978.21 200.85 978.21 170.62 902.44 170.98 902.42 201.32"/>
                            <text class="cls-2 futura-book" transform="translate(927.83 191.5) rotate(-0.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(934.1 177)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(907.38 190.25) rotate(-90)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(975.46 190.6) rotate(-90)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(937.61 185.32) rotate(-0.39)">03</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[209]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[209])">
                            <polygon id="A_L04" data-name="A L04" class="property pb-sprite-2" points="902.45 231.1 978.22 231.09 978.21 200.85 902.42 201.32 902.45 231.1"/>
                            <text class="cls-2 futura-book" transform="translate(927.83 221.74) rotate(-0.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(934.1 207.23)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(907.38 220.49) rotate(-90)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(975.46 220.84) rotate(-90)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(937.61 215.56) rotate(-0.39)">04</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[210]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[210])">
                            <polygon id="A_L05" data-name="A L05" class="property pb-sprite-1" points="902.77 261.57 978.44 261.24 978.22 231.09 902.45 231.1 902.77 261.57"/>
                            <text class="cls-2 futura-book" transform="translate(927.83 251.74) rotate(-0.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(934.1 237.24)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(908.07 250.49) rotate(-90)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(975.46 250.84) rotate(-90)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(937.61 245.57) rotate(-0.39)">05</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[211]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[211])">
                            <polygon id="A_L06" data-name="A L06" class="property pb-sprite-2" points="902.81 295.33 978.71 295.3 978.44 261.24 902.77 261.57 902.81 295.33"/>
                            <text class="cls-2 futura-book" transform="translate(927.83 283.55) rotate(-0.39)">180.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(934.1 267.82)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(908.07 282.3) rotate(-90)">9.00</text>
                            <text class="cls-3 futura-book" transform="translate(975.46 282.66) rotate(-90)">9.00</text>
                            <text class="cls-4 futura-book" transform="translate(937.61 277.38) rotate(-0.39)">06</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[212]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[212])">
                            <polygon id="A_L07" data-name="A L07" class="property pb-sprite-1" points="902.94 329.58 978.71 329.14 978.71 295.3 902.81 295.33 902.94 329.58"/>
                            <text class="cls-2 futura-book" transform="translate(927.83 318.14) rotate(-0.39)">180.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(934.1 302.41)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(908.07 316.89) rotate(-90)">9.00</text>
                            <text class="cls-3 futura-book" transform="translate(975.46 317.25) rotate(-90)">9.00</text>
                            <text class="cls-4 futura-book" transform="translate(937.61 311.97) rotate(-0.39)">07</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[213]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[213])">
                            <polygon id="A_L08" data-name="A L08" class="property pb-sprite-2" points="903.31 366.16 978.71 357.68 978.71 329.14 902.94 329.58 903.31 366.16"/>
                            <polygon class="cls-5" points="917.52 341.43 913.21 346.05 917.52 350.67 917.52 341.43"/>
                            <polygon class="cls-6" points="917.57 341.43 917.57 350.67 921.88 346.05 917.57 341.43"/>
                            <text class="cls-2 futura-book" transform="translate(927.83 350.7) rotate(-0.39)">172.65 m2</text>
                            <text class="cls-3 futura-book" transform="translate(934.1 334.97)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(934.1 360.34)">20.12</text>
                            <text class="cls-3 futura-book" transform="translate(908.07 353.12) rotate(-90)">9.72</text>
                            <text class="cls-3 futura-book" transform="translate(975.46 349.8) rotate(-90)">7.54</text>
                            <text class="cls-4 futura-book" transform="translate(937.61 344.52) rotate(-0.39)">08</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[214]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[214])">
                            <polygon id="B_L09" data-name="B L09" class="property pb-sprite-1" points="948.98 482.03 979.09 478.49 979.07 392.98 939.7 397.34 948.98 482.03"/>
                            <polygon class="cls-5" points="961.14 404.8 956.84 409.42 961.14 414.04 961.14 404.8"/>
                            <polygon class="cls-6" points="961.19 404.8 961.19 414.04 965.5 409.42 961.19 404.8"/>
                            <text class="cls-3 futura-book" transform="translate(973.04 427.45) rotate(90)">22.63</text>
                            <text class="cls-9 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 955.81, 422.89)">207.55 m2</text>
                            <text class="cls-10 futura-book" transform="translate(953.28 400.82) rotate(-5.78)">10.45</text>
                            <text class="cls-11 futura-book" transform="translate(960.05 477.71) rotate(-6.27)">8.00</text>
                            <text class="cls-12 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 963.01, 431.93)">09</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[215]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[215])">
                            <polygon id="B_L10" data-name="B L10" class="property pb-sprite-2" points="919.18 485.5 909.59 400.78 939.7 397.34 948.98 482.03 919.18 485.5"/>
                            <text class="cls-11 futura-book" transform="translate(937.54 433.02) rotate(83.73)">22.50</text>
                            <text class="cls-10 futura-book" transform="translate(920.61 404.75) rotate(-5.78)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(929.38 481.33) rotate(-5.78)">8.00</text>
                            <text class="cls-9 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 922.25, 428.98)">180.00 m2</text>
                            <text class="cls-12 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 929.46, 438.03)">10</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[216]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[216])">
                            <polygon id="B_L11" data-name="B L11" class="property pb-sprite-1" points="888.85 489.15 879.6 403.97 909.59 400.78 919.18 485.5 888.85 489.15"/>
                            <text class="cls-11 futura-book" transform="translate(907.42 436.15) rotate(83.73)">22.50</text>
                            <text class="cls-10 futura-book" transform="translate(890.48 407.88) rotate(-5.78)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(899.26 484.46) rotate(-5.78)">8.00</text>
                            <text class="cls-9 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 892.13, 432.11)">180.00 m2</text>
                            <text class="cls-12 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 899.34, 441.16)">11</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[217]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[217])">
                            <polygon id="B_L12" data-name="B L12" class="property pb-sprite-2" points="858.89 492.25 849.68 407.41 879.6 403.97 888.85 489.15 858.89 492.25"/>
                            <text class="cls-11 futura-book" transform="translate(877.41 439.39) rotate(83.73)">22.50</text>
                            <text class="cls-10 futura-book" transform="translate(860.48 411.13) rotate(-5.78)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(869.26 487.7) rotate(-5.78)">8.00</text>
                            <text class="cls-9 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 862.13, 435.35)">180.00 m2</text>
                            <text class="cls-12 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 869.33, 444.4)">12</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[218]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[218])">
                            <polygon id="B_L13" data-name="B L13" class="property pb-sprite-1" points="829.03 495.85 819.7 411.01 849.68 407.41 858.89 492.25 829.03 495.85"/>
                            <text class="cls-11 futura-book" transform="translate(847.52 442.98) rotate(83.73)">22.50</text>
                            <text class="cls-10 futura-book" transform="translate(830.59 414.72) rotate(-5.78)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(839.37 491.29) rotate(-5.78)">8.00</text>
                            <text class="cls-9 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 832.24, 438.95)">180.00 m2</text>
                            <text class="cls-12 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 839.44, 447.99)">13</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[219]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[219])">
                            <polygon id="B_L14" data-name="B L14" class="property pb-sprite-2" points="799.27 499.31 789.43 414.37 819.7 411.01 829.03 495.85 799.27 499.31"/>
                            <text class="cls-11 futura-book" transform="translate(817.05 446.46) rotate(83.73)">22.50</text>
                            <text class="cls-10 futura-book" transform="translate(800.12 418.19) rotate(-5.78)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(808.9 494.77) rotate(-5.78)">8.00</text>
                            <text class="cls-9 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 801.77, 442.42)">180.00 m2</text>
                            <text class="cls-12 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 808.98, 451.47)">14</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[220]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[220])">
                            <polygon id="B_L15" data-name="B L15" class="property pb-sprite-1" points="769.11 502.41 759.44 417.42 789.43 414.37 799.27 499.31 769.11 502.41"/>
                            <text class="cls-11 futura-book" transform="translate(787.16 450.05) rotate(83.73)">22.50</text>
                            <text class="cls-10 futura-book" transform="translate(770.23 421.78) rotate(-5.78)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(779.01 498.36) rotate(-5.78)">8.00</text>
                            <text class="cls-9 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 771.88, 446.01)">180.00 m2</text>
                            <text class="cls-12 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 779.08, 455.06)">15</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[221]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[221])">
                            <polygon id="B_L16" data-name="B L16" class="property pb-sprite-2" points="739.09 505.86 729.56 421.14 759.44 417.42 769.11 502.41 739.09 505.86"/>
                            <text class="cls-11 futura-book" transform="translate(757.39 453.53) rotate(83.73)">22.50</text>
                            <text class="cls-10 futura-book" transform="translate(740.46 425.26) rotate(-5.78)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(749.24 501.84) rotate(-5.78)">8.00</text>
                            <text class="cls-9 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 742.11, 449.49)">180.00 m2</text>
                            <text class="cls-12 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 749.31, 458.53)">16</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[222]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[222])">
                            <polygon id="B_L17" data-name="B L17" class="property pb-sprite-1" points="709.19 509.3 699.73 424.57 729.56 421.14 739.09 505.86 709.19 509.3"/>
                            <text class="cls-11 futura-book" transform="translate(727.73 456.77) rotate(83.73)">22.50</text>
                            <text class="cls-10 futura-book" transform="translate(710.8 428.5) rotate(-5.78)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(719.58 505.08) rotate(-5.78)">8.00</text>
                            <text class="cls-9 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 712.45, 452.73)">180.00 m2</text>
                            <text class="cls-12 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 719.65, 461.78)">17</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[223]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[223])">
                            <path id="B_L18" data-name="B L18" class="property pb-sprite-2" d="M679.16,512.79l-9.72-85s30.21-3.9,30.29-3.17l9.46,84.73Z"/>
                            <text class="cls-11 futura-book" transform="translate(697.72 459.53) rotate(83.73)">22.50</text>
                            <text class="cls-10 futura-book" transform="translate(680.79 431.26) rotate(-5.78)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(689.57 507.84) rotate(-5.78)">8.00</text>
                            <text class="cls-9 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 682.44, 455.5)">180.00 m2</text>
                            <text class="cls-12 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 689.65, 464.54)">18</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[224]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[224])">
                            <polygon id="B_L19" data-name="B L19" class="property pb-sprite-1" points="649.09 516.02 639.48 431.18 669.44 427.74 679.15 512.79 649.09 516.02"/>
                            <polygon class="cls-5" points="657.08 440.93 652.78 445.55 657.08 450.18 657.08 440.93"/>
                            <polygon class="cls-6" points="657.14 440.93 657.14 450.18 661.44 445.55 657.14 440.93"/>
                            <text class="cls-11 futura-book" transform="translate(667.49 463.18) rotate(83.73)">22.50</text>
                            <text class="cls-10 futura-book" transform="translate(650.56 434.91) rotate(-5.78)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(659.33 511.49) rotate(-5.78)">8.00</text>
                            <text class="cls-9 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 652.2, 459.15)">180.00 m2</text>
                            <text class="cls-12 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 659.41, 468.19)">19</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[225]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[225])">
                            <polygon id="B_L20" data-name="B L20" class="property pb-sprite-2" points="618.98 519.37 609.64 434.63 639.48 431.18 649.09 516.02 618.98 519.37"/>
                            <polygon class="cls-5" points="626.2 444.17 621.89 448.79 626.2 453.42 626.2 444.17"/>
                            <polygon class="cls-6" points="626.25 444.17 626.25 453.42 630.56 448.79 626.25 444.17"/>
                            <text class="cls-11 futura-book" transform="translate(637.48 467.47) rotate(83.73)">22.50</text>
                            <text class="cls-10 futura-book" transform="translate(620.55 439.2) rotate(-5.78)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(629.33 515.78) rotate(-5.78)">8.00</text>
                            <text class="cls-9 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 622.2, 463.43)">180.00 m2</text>
                            <text class="cls-12 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 629.41, 472.48)">20</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[226]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[226])">
                            <path id="B_L21" data-name="B L21" class="property pb-sprite-1" d="M589,522.9l-9.34-85.07s30-3.77,30-3.2L619,519.37Z"/>
                            <text class="cls-11 futura-book" transform="translate(607.36 470.37) rotate(83.73)">22.50</text>
                            <text class="cls-10 futura-book" transform="translate(590.43 442.11) rotate(-5.78)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(599.21 518.68) rotate(-5.78)">8.00</text>
                            <text class="cls-9 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 592.08, 466.34)">180.00 m2</text>
                            <text class="cls-12 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 599.28, 475.38)">21</text>
                            <polygon class="cls-5" points="596.4 447.27 592.1 451.89 596.4 456.51 596.4 447.27"/>
                            <polygon class="cls-6" points="596.45 447.27 596.45 456.51 600.76 451.89 596.45 447.27"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[227]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[227])">
                            <polygon id="B_L22" data-name="B L22" class="property pb-sprite-2" points="559.3 525.93 549.48 441.33 579.63 437.83 588.96 522.9 559.3 525.93"/>
                            <text class="cls-11 futura-book" transform="translate(577.82 473.5) rotate(83.73)">22.50</text>
                            <text class="cls-10 futura-book" transform="translate(560.89 445.23) rotate(-5.78)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(569.66 521.81) rotate(-5.78)">8.00</text>
                            <text class="cls-9 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 562.53, 469.46)">180.00 m2</text>
                            <text class="cls-12 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 569.74, 478.51)">22</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[228]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[228])">
                            <polygon id="B_L23" data-name="B L23" class="property pb-sprite-1" points="529.31 529.35 519.54 444.83 549.48 441.33 559.3 525.93 529.31 529.35"/>
                            <text class="cls-11 futura-book" transform="translate(547.93 477.38) rotate(83.73)">22.50</text>
                            <text class="cls-10 futura-book" transform="translate(531 449.11) rotate(-5.78)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(539.78 525.69) rotate(-5.78)">8.00</text>
                            <text class="cls-9 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 532.64, 473.34)">180.00 m2</text>
                            <text class="cls-12 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 539.85, 482.39)">23</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[229]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[229])">
                            <polygon id="B_L24" data-name="B L24" class="property pb-sprite-2" points="499.09 532.79 489.72 448.15 519.54 444.83 529.31 529.35 499.09 532.79"/>
                            <text class="cls-11 futura-book" transform="translate(517.58 480.44) rotate(83.73)">22.50</text>
                            <text class="cls-10 futura-book" transform="translate(500.64 452.18) rotate(-5.78)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(509.42 528.75) rotate(-5.78)">8.00</text>
                            <text class="cls-9 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 502.29, 476.41)">180.00 m2</text>
                            <text class="cls-12 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 509.5, 485.45)">24</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[230]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[230])">
                            <polygon id="B_L25" data-name="B L25" class="property pb-sprite-1" points="469.06 536.07 459.78 451.47 489.72 448.15 499.09 532.79 469.06 536.07"/>
                            <text class="cls-11 futura-book" transform="translate(487.92 483.74) rotate(83.73)">22.50</text>
                            <text class="cls-10 futura-book" transform="translate(470.98 455.47) rotate(-5.78)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(479.76 532.05) rotate(-5.78)">8.00</text>
                            <text class="cls-9 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 472.63, 479.7)">180.00 m2</text>
                            <text class="cls-12 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 479.84, 488.75)">25</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[231]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[231])">
                            <path id="B_L26" data-name="B L26" class="property pb-sprite-2" d="M439.25,539.46l-9.73-84.55,30.26-3.44c.24,0,9.28,84.6,9.28,84.6Z"/>
                            <text class="cls-11 futura-book" transform="translate(457.68 486.98) rotate(83.73)">22.50</text>
                            <text class="cls-10 futura-book" transform="translate(440.75 458.72) rotate(-5.78)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(449.53 535.29) rotate(-5.78)">8.00</text>
                            <text class="cls-9 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 442.4, 482.95)">180.00 m2</text>
                            <text class="cls-12 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 449.6, 491.99)">26</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[232]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[232])">
                            <polygon id="B_L27" data-name="B L27" class="property pb-sprite-1" points="409.35 542.96 399.62 458.33 429.52 454.92 439.25 539.46 409.35 542.96"/>
                            <text class="cls-11 futura-book" transform="translate(427.91 490.17) rotate(83.73)">22.50</text>
                            <text class="cls-10 futura-book" transform="translate(410.98 461.9) rotate(-5.78)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(419.75 538.48) rotate(-5.78)">8.00</text>
                            <text class="cls-9 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 412.62, 486.13)">180.00 m2</text>
                            <text class="cls-12 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 419.83, 495.17)">27</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[233]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[233])">
                            <polygon id="B_L28" data-name="B L28" class="property pb-sprite-2" points="379.26 546.32 369.68 461.52 399.62 458.33 409.35 542.96 379.26 546.32"/>
                            <text class="cls-11 futura-book" transform="translate(397.78 494.2) rotate(83.73)">22.50</text>
                            <text class="cls-10 futura-book" transform="translate(380.85 465.93) rotate(-5.78)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(389.63 542.51) rotate(-5.78)">8.00</text>
                            <text class="cls-9 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 382.5, 490.16)">180.00 m2</text>
                            <text class="cls-12 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 389.71, 499.2)">28</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[234]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[234])">
                            <polygon id="B_L29" data-name="B L29" class="property pb-sprite-1" points="349.15 549.6 339.78 465.12 369.68 461.52 379.26 546.32 349.15 549.6"/>
                            <text class="cls-11 futura-book" transform="translate(367.78 497.49) rotate(83.73)">22.50</text>
                            <text class="cls-10 futura-book" transform="translate(350.85 469.23) rotate(-5.78)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(359.63 545.8) rotate(-5.78)">8.00</text>
                            <text class="cls-9 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 352.5, 493.46)">180.00 m2</text>
                            <text class="cls-12 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 359.7, 502.5)">29</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[235]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[235])">
                            <polygon id="B_L30" data-name="B L30" class="property pb-sprite-2" points="319.35 553.04 309.56 468.44 339.78 465.12 349.15 549.6 319.35 553.04"/>
                            <text class="cls-11 futura-book" transform="translate(337.43 500.62) rotate(83.73)">22.50</text>
                            <text class="cls-10 futura-book" transform="translate(320.49 472.35) rotate(-5.78)">8.00</text>
                            <text class="cls-10 futura-book" transform="translate(329.27 548.93) rotate(-5.78)">8.00</text>
                            <text class="cls-9 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 322.14, 496.59)">180.00 m2</text>
                            <text class="cls-12 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 329.35, 505.63)">30</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[236]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[236])">
                            <polygon id="B_L31" data-name="B L31" class="property pb-sprite-1" points="289.08 556.56 247.09 475.41 309.56 468.44 319.35 553.04 289.08 556.56"/>
                            <polygon class="cls-5" points="284.85 481.05 280.54 485.67 284.85 490.29 284.85 481.05"/>
                            <polygon class="cls-6" points="284.9 481.05 284.9 490.29 289.2 485.67 284.9 481.05"/>
                            <text class="cls-11 futura-book" transform="translate(307.54 503.9) rotate(83.73)">22.50</text>
                            <text class="cls-13 futura-book" transform="translate(269.3 508.89) rotate(63.5)">24.09</text>
                            <text class="cls-10 futura-book" transform="translate(275.66 477.71) rotate(-5.78)">16.59</text>
                            <text class="cls-10 futura-book" transform="translate(298.57 552.21) rotate(-5.78)">7.98</text>
                            <text class="cls-9 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 287.39, 497.25)">276.31 m2</text>
                            <text class="cls-12 futura-book" transform="matrix(0.12, 0.99, -0.99, 0.12, 294.6, 506.29)">31</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[237]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[237])">
                            <polygon id="C_L32" data-name="C L32" class="property pb-sprite-2" points="230.07 442.22 313.99 398.67 300.19 372.1 215.99 415.48 230.07 442.22"/>
                            <text class="cls-14 futura-book" transform="translate(258.11 418.17) rotate(-27.41)">200.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(255.75 401.89) rotate(-27.02)">25.00</text>
                            <text class="cls-16 futura-book" transform="translate(223.66 423.64) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(300.63 384) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(264.02 408.22) rotate(-27.41)">32</text>
                            <polygon class="cls-5" points="291.15 388.88 286.85 393.5 291.15 398.12 291.15 388.88"/>
                            <polygon class="cls-6" points="291.2 388.88 291.2 398.12 295.51 393.5 291.2 388.88"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[238]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[238])">
                            <polygon id="C_L33" data-name="C L33" class="property pb-sprite-1" points="202.12 388.77 286.37 345.19 300.19 372.1 215.99 415.48 202.12 388.77"/>
                            <text class="cls-14 futura-book" transform="translate(244.35 391.34) rotate(-27.41)">200.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(241.99 375.06) rotate(-27.02)">25.00</text>
                            <text class="cls-16 futura-book" transform="translate(209.9 396.81) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(286.87 357.17) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(250.26 381.39) rotate(-27.41)">33</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[239]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[239])">
                            <polygon id="C_L34" data-name="C L34" class="property pb-sprite-2" points="272.25 318.52 188.12 361.89 202.12 388.77 286.37 345.19 272.25 318.52"/>
                            <text class="cls-14 futura-book" transform="translate(230.17 363.81) rotate(-27.41)">200.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(227.81 347.53) rotate(-27.02)">25.00</text>
                            <text class="cls-16 futura-book" transform="translate(195.72 369.28) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(272.69 329.64) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(236.08 353.86) rotate(-27.41)">34</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[240]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[240])">
                            <polygon id="C_L35" data-name="C L35" class="property pb-sprite-1" points="258.38 291.65 174.04 334.96 188.12 361.89 272.25 318.52 258.38 291.65"/>
                            <text class="cls-14 futura-book" transform="translate(217.24 337.79) rotate(-27.41)">200.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(214.88 321.52) rotate(-27.02)">25.00</text>
                            <text class="cls-16 futura-book" transform="translate(182.79 343.26) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(259.76 303.63) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(223.15 327.85) rotate(-27.41)">35</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[241]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[241])">
                            <polygon id="C_L36" data-name="C L36" class="property pb-sprite-2" points="244.5 264.83 160.42 308.38 174.04 334.96 258.38 291.65 244.5 264.83"/>
                            <text class="cls-14 futura-book" transform="translate(202.92 311.82) rotate(-27.41)">200.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(200.56 295.54) rotate(-27.02)">25.00</text>
                            <text class="cls-16 futura-book" transform="translate(168.47 317.29) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(245.44 277.65) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(208.83 301.87) rotate(-27.41)">36</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[242]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[242])">
                            <polygon id="C_L37" data-name="C L37" class="property pb-sprite-1" points="230.6 237.96 146.61 281.6 160.42 308.38 244.5 264.83 230.6 237.96"/>
                            <text class="cls-14 futura-book" transform="translate(189.02 284.43) rotate(-27.41)">200.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(186.66 268.16) rotate(-27.02)">25.00</text>
                            <text class="cls-16 futura-book" transform="translate(154.57 289.91) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(231.54 250.27) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(194.92 274.49) rotate(-27.41)">37</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[243]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[243])">
                            <polygon id="C_L38" data-name="C L38" class="property pb-sprite-2" points="216.8 211.22 132.69 254.75 146.61 281.6 230.6 237.96 216.8 211.22"/>
                            <text class="cls-14 futura-book" transform="translate(174.7 256.63) rotate(-27.41)">200.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(172.34 240.35) rotate(-27.02)">25.00</text>
                            <text class="cls-16 futura-book" transform="translate(140.25 262.1) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(217.22 222.46) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(180.6 246.68) rotate(-27.41)">38</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[244]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[244])">
                            <path id="C_L39" data-name="C L39" class="property pb-sprite-1" d="M118.93,228l83.89-43.51s15,26.17,14,26.72l-84.11,43.53L118.93,228"/>
                            <text class="cls-14 futura-book" transform="translate(160.8 230.63) rotate(-27.41)">200.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(158.44 214.36) rotate(-27.02)">25.00</text>
                            <text class="cls-16 futura-book" transform="translate(126.35 236.1) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(203.32 196.47) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(166.7 220.69) rotate(-27.41)">39</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[245]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[245])">
                            <polygon id="C_L40" data-name="C L40" class="property pb-sprite-2" points="188.86 157.63 104.97 201.04 118.93 228.01 202.82 184.5 188.86 157.63"/>
                            <text class="cls-14 futura-book" transform="translate(146.76 203.52) rotate(-27.41)">200.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(144.4 187.25) rotate(-27.02)">25.00</text>
                            <text class="cls-16 futura-book" transform="translate(112.31 208.99) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(189.28 169.36) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(152.66 193.58) rotate(-27.41)">40</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[246]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[246])">
                            <polygon id="C_L41" data-name="C L41" class="property pb-sprite-1" points="175.16 130.84 91.2 174.38 104.97 201.04 188.86 157.63 175.16 130.84"/>
                            <text class="cls-14 futura-book" transform="translate(133.13 177.32) rotate(-27.41)">200.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(130.77 161.05) rotate(-27.02)">25.00</text>
                            <text class="cls-16 futura-book" transform="translate(98.68 182.79) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(175.66 143.16) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(139.04 167.38) rotate(-27.41)">41</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[247]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[247])">
                            <path id="C_L42" data-name="C L42" class="property pb-sprite-2" d="M165.55,112.07l-28.92.05L75.42,144.2,91.2,174.38s84.23-42.86,84-43.54S165.55,112.07,165.55,112.07Z"/>
                            <text class="cls-14 futura-book" transform="translate(117.98 148.21) rotate(-27.41)">213.19 m2</text>
                            <text class="cls-15 futura-book" transform="translate(104.22 135.33) rotate(-27.02)">18.25</text>
                            <text class="cls-16 futura-book" transform="translate(84.5 154.71) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(163.15 118.27) rotate(62.28)">5.50</text>
                            <text class="cls-18 futura-book" transform="translate(123.88 138.26) rotate(-27.41)">42</text>
                            <polygon class="cls-5" points="153.59 120.78 149.28 125.4 153.59 130.02 153.59 120.78"/>
                            <polygon class="cls-6" points="153.64 120.78 153.64 130.02 157.94 125.4 153.64 120.78"/>
                            <text class="cls-3 futura-book" transform="translate(143.41 116.41)">7.61</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[248]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[248])">
                            <polygon id="D_L43" data-name="D L43" class="property pb-sprite-1" points="40.93 77.42 71.39 77.32 71.4 1.51 1.5 1.5 40.93 77.42"/>
                            <text class="cls-2 futura-book" transform="translate(51.28 48.02) rotate(-90.39)">263.58 m2</text>
                            <text class="cls-3 futura-book" transform="translate(68.83 45.26) rotate(-90)">20.00</text>
                            <text class="cls-19 futura-book" transform="translate(25.08 39.34) rotate(63.31)">22.52</text>
                            <text class="cls-3 futura-book" transform="translate(50.86 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(36.45 8.43)">18.36</text>
                            <text class="cls-4 futura-book" transform="translate(45.1 38.24) rotate(-90.39)">43</text>
                            <polygon class="cls-5" points="53.53 57.93 49.23 62.55 53.53 67.17 53.53 57.93"/>
                            <polygon class="cls-6" points="53.59 57.93 53.59 67.17 57.89 62.55 53.59 57.93"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[249]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[249])">
                            <polygon id="D_L44" data-name="D L44" class="property pb-sprite-2" points="101.67 77.4 101.67 1.6 71.4 1.51 71.39 77.32 101.67 77.4"/>
                            <text class="cls-2 futura-book" transform="translate(92.77 50.87) rotate(-90.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(77.4 45.26) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(81.91 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(83.07 8.43)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(86.59 41.09) rotate(-90.39)">44</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[250]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[250])">
                            <polygon id="D_L45" data-name="D L45" class="property pb-sprite-1" points="132.03 77.27 132.03 1.51 101.67 1.6 101.67 77.4 132.03 77.27"/>
                            <text class="cls-2 futura-book" transform="translate(122.93 50.87) rotate(-90.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(107.56 45.26) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(111.68 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(112.84 8.43)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(116.75 41.09) rotate(-90.39)">45</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[251]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[251])">
                            <polygon id="D_L46" data-name="D L46" class="property pb-sprite-2" points="161.93 77.39 161.93 1.51 132.03 1.51 132.03 77.27 161.93 77.39"/>
                            <text class="cls-2 futura-book" transform="translate(153.64 50.87) rotate(-90.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(138.27 45.26) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(142.39 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(143.54 8.43)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(147.46 41.09) rotate(-90.39)">46</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[252]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[252])">
                            <polygon id="D_L47" data-name="D L47" class="property pb-sprite-1" points="192.25 77.32 192.25 1.51 161.93 1.51 161.93 77.39 192.25 77.32"/>
                            <text class="cls-2 futura-book" transform="translate(183.17 50.87) rotate(-90.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(167.8 45.26) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(171.92 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(173.08 8.43)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(176.99 41.09) rotate(-90.39)">47</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[253]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[253])">
                            <polygon id="D_L48" data-name="D L48" class="property pb-sprite-2" points="222.53 77.36 222.53 1.51 192.25 1.51 192.25 77.32 222.53 77.36"/>
                            <text class="cls-2 futura-book" transform="translate(213.88 50.87) rotate(-90.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(198.51 45.26) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(202.63 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(203.79 8.43)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(207.7 41.09) rotate(-90.39)">48</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[254]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[254])">
                            <polygon id="D_L49" data-name="D L49" class="property pb-sprite-1" points="252.41 77.4 252.45 1.62 222.53 1.51 222.53 77.36 252.41 77.4"/>
                            <text class="cls-2 futura-book" transform="translate(243.43 50.87) rotate(-90.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(228.06 45.26) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(232.18 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(233.33 8.43)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(237.25 41.09) rotate(-90.39)">49</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[255]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[255])">
                            <polygon id="D_L50" data-name="D L50" class="property pb-sprite-2" points="282.75 77.4 282.75 1.51 252.45 1.62 252.41 77.4 282.75 77.4"/>
                            <text class="cls-2 futura-book" transform="translate(274.14 50.87) rotate(-90.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(258.77 45.26) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(262.88 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(264.04 8.43)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(267.96 41.09) rotate(-90.39)">50</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[256]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[256])">
                            <polygon id="D_L51" data-name="D L51" class="property pb-sprite-1" points="313.06 77.42 313.06 1.51 282.75 1.51 282.75 77.4 313.06 77.42"/>
                            <text class="cls-2 futura-book" transform="translate(304.37 50.87) rotate(-90.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(289 45.26) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(293.11 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(294.27 8.43)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(298.19 41.09) rotate(-90.39)">51</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[257]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[257])">
                            <polygon id="D_L52" data-name="D L52" class="property pb-sprite-2" points="342.95 77.4 342.95 1.51 313.06 1.51 313.06 77.42 342.95 77.4"/>
                            <text class="cls-2 futura-book" transform="translate(335.07 50.87) rotate(-90.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(319.71 45.26) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(323.82 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(324.98 8.43)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(328.9 41.09) rotate(-90.39)">52</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[258]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[258])">
                            <rect id="D_L53" x="343" y="1.5" class="property pb-sprite-1" width="30.3" height="75.9"/>
                            <text class="cls-2 futura-book" transform="translate(364.61 50.87) rotate(-90.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(349.24 45.26) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(353.36 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(354.51 8.43)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(358.43 41.09) rotate(-90.39)">53</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[259]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[259])">
                            <polygon id="D_L54" data-name="D L54" class="property pb-sprite-2" points="403.62 77.44 403.6 1.66 373.28 1.51 373.28 77.4 403.62 77.44"/>
                            <text class="cls-2 futura-book" transform="translate(395.32 50.87) rotate(-90.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(379.95 45.26) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(384.07 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(385.22 8.43)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(389.14 41.09) rotate(-90.39)">54</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[260]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[260])">
                            <polygon id="D_L55" data-name="D L55" class="property pb-sprite-1" points="433.52 77.4 433.52 1.51 403.6 1.66 403.62 77.44 433.52 77.4"/>
                            <text class="cls-2 futura-book" transform="translate(425.32 50.87) rotate(-90.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(409.94 45.26) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(414.06 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(415.22 8.43)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(419.14 41.09) rotate(-90.39)">55</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[261]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[261])">
                            <polygon id="D_L56" data-name="D L56" class="property pb-sprite-2" points="463.84 77.36 463.84 1.51 433.52 1.51 433.52 77.4 463.84 77.36"/>
                            <text class="cls-2 futura-book" transform="translate(456.02 50.87) rotate(-90.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(440.65 45.26) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(444.77 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(445.93 8.43)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(449.85 41.09) rotate(-90.39)">56</text>
                            <polygon class="cls-5" points="449.52 57.93 445.22 62.55 449.52 67.17 449.52 57.93"/>
                            <polygon class="cls-6" points="449.58 57.93 449.58 67.17 453.88 62.55 449.58 57.93"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[262]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[262])">
                            <polygon id="D_L57" data-name="D L57" class="property pb-sprite-1" points="494.22 77.33 494.22 1.51 463.84 1.51 463.84 77.36 494.22 77.33"/>
                            <text class="cls-2 futura-book" transform="translate(485.09 50.87) rotate(-90.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(469.72 45.26) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(473.84 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(475 8.43)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(478.92 41.09) rotate(-90.39)">57</text>
                            <polygon class="cls-5" points="479.31 57.93 475 62.55 479.31 67.17 479.31 57.93"/>
                            <polygon class="cls-6" points="479.36 57.93 479.36 67.17 483.66 62.55 479.36 57.93"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[263]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[263])">
                            <polygon id="D_L58" data-name="D L58" class="property pb-sprite-2" points="524.01 77.44 524.01 1.51 494.22 1.51 494.22 77.33 524.01 77.44"/>
                            <text class="cls-2 futura-book" transform="translate(515.8 50.87) rotate(-90.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(500.43 45.26) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(504.55 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(505.71 8.43)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(509.63 41.09) rotate(-90.39)">58</text>
                            <polygon class="cls-5" points="509.43 57.93 505.12 62.55 509.43 67.17 509.43 57.93"/>
                            <polygon class="cls-6" points="509.48 57.93 509.48 67.17 513.78 62.55 509.48 57.93"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[264]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[264])">
                            <polygon id="D_L59" data-name="D L59" class="property pb-sprite-1" points="554.41 77.42 554.39 1.66 524.01 1.51 524.01 77.44 554.41 77.42"/>
                            <text class="cls-2 futura-book" transform="translate(545.34 50.87) rotate(-90.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(529.97 45.26) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(534.08 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(535.24 8.43)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(539.16 41.09) rotate(-90.39)">59</text>
                            <polygon class="cls-5" points="539.32 57.93 535.01 62.55 539.32 67.17 539.32 57.93"/>
                            <polygon class="cls-6" points="539.37 57.93 539.37 67.17 543.67 62.55 539.37 57.93"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[265]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[265])">
                            <polygon id="D_L60" data-name="D L60" class="property pb-sprite-2" points="584.68 77.36 584.68 1.51 554.39 1.66 554.41 77.42 584.68 77.36"/>
                            <text class="cls-2 futura-book" transform="translate(576.05 50.87) rotate(-90.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(560.67 45.26) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(564.79 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(565.95 8.43)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(569.87 41.09) rotate(-90.39)">60</text>
                            <polygon class="cls-5" points="569.44 57.93 565.13 62.55 569.44 67.17 569.44 57.93"/>
                            <polygon class="cls-6" points="569.49 57.93 569.49 67.17 573.79 62.55 569.49 57.93"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[266]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[266])">
                            <polygon id="D_L61" data-name="D L61" class="property pb-sprite-1" points="614.5 77.44 614.5 1.51 584.68 1.51 584.68 77.36 614.5 77.44"/>
                            <text class="cls-2 futura-book" transform="translate(605.81 50.87) rotate(-90.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(590.44 45.26) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(594.56 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(595.72 8.43)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(599.63 41.09) rotate(-90.39)">61</text>
                            <polygon class="cls-5" points="599.56 57.93 595.25 62.55 599.56 67.17 599.56 57.93"/>
                            <polygon class="cls-6" points="599.61 57.93 599.61 67.17 603.91 62.55 599.61 57.93"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[267]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[267])">
                            <polygon id="D_L62" data-name="D L62" class="property pb-sprite-2" points="644.88 77.36 644.88 1.51 614.5 1.51 614.5 77.44 644.88 77.36"/>
                            <text class="cls-2 futura-book" transform="translate(636.52 50.87) rotate(-90.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(621.15 45.26) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(625.27 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(626.42 8.43)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(630.34 41.09) rotate(-90.39)">62</text>
                            <polygon class="cls-5" points="630.24 57.93 625.93 62.55 630.24 67.17 630.24 57.93"/>
                            <polygon class="cls-6" points="630.29 57.93 630.29 67.17 634.59 62.55 630.29 57.93"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[268]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[268])">
                            <polygon id="D_L63" data-name="D L63" class="property pb-sprite-1" points="675.18 77.32 675.18 1.51 644.88 1.51 644.88 77.36 675.18 77.32"/>
                            <text class="cls-2 futura-book" transform="translate(666.75 50.87) rotate(-90.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(651.38 45.26) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(655.5 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(656.65 8.43)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(660.57 41.09) rotate(-90.39)">63</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[269]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[269])">
                            <polygon id="D_L64" data-name="D L64" class="property pb-sprite-2" points="705.15 77.4 705.15 1.51 675.18 1.51 675.18 77.32 705.15 77.4"/>
                            <text class="cls-2 futura-book" transform="translate(697.46 50.87) rotate(-90.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(682.09 45.26) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(686.21 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(687.36 8.43)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(691.28 41.09) rotate(-90.39)">64</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[270]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[270])">
                            <rect id="D_L65" x="705.2" y="1.5" class="property pb-sprite-1" width="30.3" height="75.9"/>
                            <text class="cls-2 futura-book" transform="translate(726.53 50.87) rotate(-90.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(711.16 45.26) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(715.27 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(716.43 8.43)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(720.35 41.09) rotate(-90.39)">65</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[271]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[271])">
                            <polygon id="D_L66" data-name="D L66" class="property pb-sprite-2" points="765.79 77.39 765.79 1.58 735.49 1.51 735.49 77.4 765.79 77.39"/>
                            <text class="cls-2 futura-book" transform="translate(757.24 50.87) rotate(-90.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(741.87 45.26) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(745.98 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(747.14 8.43)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(751.06 41.09) rotate(-90.39)">66</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[272]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[272])">
                            <polygon id="D_L67" data-name="D L67" class="property pb-sprite-1" points="795.75 77.36 795.69 1.6 765.79 1.58 765.79 77.39 795.75 77.36"/>
                            <text class="cls-2 futura-book" transform="translate(787.39 50.87) rotate(-90.39)">160.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(772.02 45.26) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(776.14 74.9)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(777.3 8.43)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(781.22 41.09) rotate(-90.39)">67</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[273]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[273])">
                            <polygon id="D_L68" data-name="D L68" class="property pb-sprite-2" points="832.91 77.44 832.91 1.58 795.69 1.6 795.75 77.36 832.91 77.44"/>
                            <text class="cls-2 futura-book" transform="translate(820.77 50.55) rotate(-90.39)">196.80 m2</text>
                            <text class="cls-3 futura-book" transform="translate(802.95 44.94) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(809.2 74.9)">9.84</text>
                            <text class="cls-3 futura-book" transform="translate(810.35 8.43)">9.84</text>
                            <text class="cls-4 futura-book" transform="translate(814.59 40.77) rotate(-90.39)">68</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[274]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[274])">
                            <polygon id="D_L69" data-name="D L69" class="property pb-sprite-1" points="866.79 77.36 866.45 1.5 832.91 1.58 832.91 77.44 866.79 77.36"/>
                            <text class="cls-2 futura-book" transform="translate(857.15 50.55) rotate(-90.39)">179.21 m2</text>
                            <text class="cls-3 futura-book" transform="translate(839.32 44.94) rotate(-90)">20.00</text>
                            <text class="cls-3 futura-book" transform="translate(845.57 74.9)">9.00</text>
                            <text class="cls-3 futura-book" transform="translate(846.73 8.43)">8.92</text>
                            <text class="cls-4 futura-book" transform="translate(850.97 40.77) rotate(-90.39)">69</text>
                            <polygon class="cls-5" points="850.35 57.93 846.05 62.55 850.35 67.17 850.35 57.93"/>
                            <polygon class="cls-6" points="850.4 57.93 850.4 67.17 854.71 62.55 850.4 57.93"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[275]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[275])">
                            <polygon id="E_L70" data-name="E L70" class="property pb-sprite-2" points="782.34 142.9 782 112.08 866.79 112.06 867.2 142.38 782.34 142.9"/>
                            <text class="cls-2 futura-book" transform="translate(812.17 134) rotate(-0.39)">181.01 m2</text>
                            <text class="cls-3 futura-book" transform="translate(817.73 117.22)">22.50</text>
                            <text class="cls-3 futura-book" transform="translate(787.94 132) rotate(-90)">8.09</text>
                            <text class="cls-3 futura-book" transform="translate(865.05 131.35) rotate(-90)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(821.95 127.82) rotate(-0.39)">70</text>
                            <polygon class="cls-5" points="850.29 121.1 845.98 125.72 850.29 130.34 850.29 121.1"/>
                            <polygon class="cls-6" points="850.34 121.1 850.34 130.34 854.65 125.72 850.34 121.1"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[276]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[276])">
                            <polygon id="E_L71" data-name="E L71" class="property pb-sprite-1" points="782.34 173.23 782.34 142.9 867.2 142.38 867.2 172.76 782.34 173.23"/>
                            <text class="cls-2 futura-book" transform="translate(812.9 165.51) rotate(-0.39)">180.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(818.46 148.73)">22.50</text>
                            <text class="cls-3 futura-book" transform="translate(788.67 163.52) rotate(-90)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(865.78 162.86) rotate(-90)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(822.68 159.33) rotate(-0.39)">71</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[277]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[277])">
                            <polygon id="E_L72" data-name="E L72" class="property pb-sprite-2" points="782.34 203.16 782.34 173.23 867.2 172.76 867.2 202.81 782.34 203.16"/>
                            <text class="cls-2 futura-book" transform="translate(812.9 195) rotate(-0.39)">180.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(818.46 178.22)">22.50</text>
                            <text class="cls-3 futura-book" transform="translate(788.67 193) rotate(-90)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(865.78 192.35) rotate(-90)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(822.68 188.82) rotate(-0.39)">72</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[278]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[278])">
                            <polygon id="E_L73" data-name="E L73" class="property pb-sprite-1" points="782.34 233.35 782.34 203.16 867.2 202.81 867.71 233 782.34 233.35"/>
                            <text class="cls-2 futura-book" transform="translate(812.79 225.26) rotate(-0.39)">180.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(818.35 208.47)">22.50</text>
                            <text class="cls-3 futura-book" transform="translate(788.55 223.26) rotate(-90)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(865.67 222.6) rotate(-90)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(822.57 219.08) rotate(-0.39)">73</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[279]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[279])">
                            <polygon id="E_L74" data-name="E L74" class="property pb-sprite-2" points="782.81 267.2 782.34 233.35 867.71 233 867.71 267.01 782.81 267.2"/>
                            <text class="cls-2 futura-book" transform="translate(812.79 256.81) rotate(-0.39)">202.50 m2</text>
                            <text class="cls-3 futura-book" transform="translate(818.35 239.26)">22.50</text>
                            <text class="cls-3 futura-book" transform="translate(788.55 254.82) rotate(-90)">9.00</text>
                            <text class="cls-3 futura-book" transform="translate(865.67 254.16) rotate(-90)">9.00</text>
                            <text class="cls-4 futura-book" transform="translate(822.57 250.64) rotate(-0.39)">74</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[280]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[280])">
                            <polygon id="E_L75" data-name="E L75" class="property pb-sprite-1" points="782.91 301.06 782.81 267.2 867.71 267.01 867.63 301.06 782.91 301.06"/>
                            <text class="cls-2 futura-book" transform="translate(812.79 290.64) rotate(-0.39)">202.50 m2</text>
                            <text class="cls-3 futura-book" transform="translate(818.35 273.09)">22.50</text>
                            <text class="cls-3 futura-book" transform="translate(788.55 288.65) rotate(-90)">9.00</text>
                            <text class="cls-3 futura-book" transform="translate(865.67 287.99) rotate(-90)">9.00</text>
                            <text class="cls-4 futura-book" transform="translate(822.57 284.46) rotate(-0.39)">75</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[281]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[281])">
                            <polygon id="E_L76" data-name="E L76" class="property pb-sprite-2" points="782.81 335.39 782.91 301.06 867.63 301.06 867.63 334.84 782.81 335.39"/>
                            <text class="cls-2 futura-book" transform="translate(812.79 324.93) rotate(-0.39)">202.50 m2</text>
                            <text class="cls-3 futura-book" transform="translate(818.35 307.38)">22.50</text>
                            <text class="cls-3 futura-book" transform="translate(788.55 322.94) rotate(-90)">9.00</text>
                            <text class="cls-3 futura-book" transform="translate(865.67 322.28) rotate(-90)">9.00</text>
                            <text class="cls-4 futura-book" transform="translate(822.57 318.76) rotate(-0.39)">76</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[282]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[282])">
                            <polygon id="E_L77" data-name="E L77" class="property pb-sprite-1" points="868.11 370.08 783.49 370.49 782.81 335.39 867.63 334.84 868.11 370.08"/>
                            <text class="cls-2 futura-book" transform="translate(812.79 358.53) rotate(-0.39)">210.15 m2</text>
                            <text class="cls-3 futura-book" transform="translate(818.35 340.98)">22.50</text>
                            <text class="cls-3 futura-book" transform="translate(818.35 367.85)">22.50</text>
                            <text class="cls-3 futura-book" transform="translate(788.55 356.54) rotate(-90)">9.34</text>
                            <text class="cls-3 futura-book" transform="translate(865.67 355.88) rotate(-90)">9.34</text>
                            <text class="cls-4 futura-book" transform="translate(822.57 352.35) rotate(-0.39)">77</text>
                            <polygon class="cls-5" points="850.29 347.71 845.98 352.33 850.29 356.95 850.29 347.71"/>
                            <polygon class="cls-6" points="850.34 347.71 850.34 356.95 854.65 352.33 850.34 347.71"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[283]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[283])">
                            <polygon id="E_L78" data-name="E L78" class="property pb-sprite-2" points="688.75 370.97 688.75 335.4 782.81 335.39 783.49 370.49 688.75 370.97"/>
                            <text class="cls-2 futura-book" transform="translate(723.42 356.95) rotate(-0.39)">233.61 m2</text>
                            <text class="cls-3 futura-book" transform="translate(728.98 341.48)">25.00</text>
                            <text class="cls-3 futura-book" transform="translate(728.98 367.27)">25.00</text>
                            <text class="cls-3 futura-book" transform="translate(694.08 356.73) rotate(-90)">9.34</text>
                            <text class="cls-3 futura-book" transform="translate(780.02 355.75) rotate(-90)">9.34</text>
                            <text class="cls-4 futura-book" transform="translate(733.2 350.78) rotate(-0.39)">78</text>
                            <polygon class="cls-5" points="706.38 348.35 702.08 352.97 706.38 357.59 706.38 348.35"/>
                            <polygon class="cls-6" points="706.43 348.35 706.43 357.59 710.74 352.97 706.43 348.35"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[284]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[284])">
                            <polygon id="E_L79" data-name="E L79" class="property pb-sprite-1" points="688.49 301.5 782.91 301.06 782.81 335.39 688.75 335.4 688.49 301.5"/>
                            <text class="cls-2 futura-book" transform="translate(723.42 323.72) rotate(-0.39)">225.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(728.98 308.24)">25.00</text>
                            <text class="cls-3 futura-book" transform="translate(694.08 323.49) rotate(-90)">9.00</text>
                            <text class="cls-3 futura-book" transform="translate(780.02 322.51) rotate(-90)">9.00</text>
                            <text class="cls-4 futura-book" transform="translate(733.2 317.54) rotate(-0.39)">79</text>
                            <polygon class="cls-5" points="706.38 312.29 702.08 316.91 706.38 321.54 706.38 312.29"/>
                            <polygon class="cls-6" points="706.43 312.29 706.43 321.54 710.74 316.91 706.43 312.29"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[285]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[285])">
                            <polygon id="E_L80" data-name="E L80" class="property pb-sprite-2" points="688.37 267.62 782.81 267.2 782.91 301.06 688.49 301.5 688.37 267.62"/>
                            <text class="cls-2 futura-book" transform="translate(723.42 289.19) rotate(-0.39)">225.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(728.98 273.72)">25.00</text>
                            <text class="cls-3 futura-book" transform="translate(694.08 288.97) rotate(-90)">9.00</text>
                            <text class="cls-3 futura-book" transform="translate(780.02 287.99) rotate(-90)">9.00</text>
                            <text class="cls-4 futura-book" transform="translate(733.2 283.02) rotate(-0.39)">80</text>
                            <polygon class="cls-5" points="706.38 280.16 702.08 284.78 706.38 289.4 706.38 280.16"/>
                            <polygon class="cls-6" points="706.43 280.16 706.43 289.4 710.74 284.78 706.43 280.16"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[286]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[286])">
                            <polygon id="E_L81" data-name="E L81" class="property pb-sprite-1" points="688.42 233.9 782.34 233.35 782.81 267.2 688.37 267.62 688.42 233.9"/>
                            <text class="cls-2 futura-book" transform="translate(723.42 255.84) rotate(-0.39)">225.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(728.98 240.37)">25.00</text>
                            <text class="cls-3 futura-book" transform="translate(694.08 255.62) rotate(-90)">9.00</text>
                            <text class="cls-3 futura-book" transform="translate(780.02 254.64) rotate(-90)">9.00</text>
                            <text class="cls-4 futura-book" transform="translate(733.2 249.67) rotate(-0.39)">81</text>
                            <polygon class="cls-5" points="706.38 245.4 702.08 250.02 706.38 254.65 706.38 245.4"/>
                            <polygon class="cls-6" points="706.43 245.4 706.43 254.65 710.74 250.02 706.43 245.4"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[287]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[287])">
                        
                            <polygon id="E_L82" data-name="E L82" class="property pb-sprite-2" points="688.37 203.52 782.34 203.16 782.34 233.35 688.42 233.9 688.37 203.52"/>
                            <text class="cls-2 futura-book" transform="translate(723.42 224.56) rotate(-0.39)">200.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(728.98 209.09)">25.00</text>
                            <text class="cls-3 futura-book" transform="translate(694.08 224.34) rotate(-90)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(780.02 223.36) rotate(-90)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(733.2 218.39) rotate(-0.39)">82</text>
                        
                            <polygon class="cls-5" points="706.38 213.79 702.08 218.41 706.38 223.03 706.38 213.79"/>
                        
                            <polygon class="cls-6" points="706.43 213.79 706.43 223.03 710.74 218.41 706.43 213.79"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[288]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[288])">
                            <polygon id="E_L83" data-name="E L83" class="property pb-sprite-1" points="687.89 173.26 782.34 173.23 782.34 203.16 688.37 203.52 687.89 173.26"/>
                            <text class="cls-2 futura-book" transform="translate(722.19 194.18) rotate(-0.39)">200.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(727.75 178.7)">25.00</text>
                            <text class="cls-3 futura-book" transform="translate(692.86 193.95) rotate(-90)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(778.79 192.97) rotate(-90)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(731.97 188) rotate(-0.39)">83</text>
                            <polygon class="cls-5" points="706.38 183.34 702.08 187.96 706.38 192.58 706.38 183.34"/>
                            <polygon class="cls-6" points="706.43 183.34 706.43 192.58 710.74 187.96 706.43 183.34"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[289]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[289])">
                            <polygon id="E_L84" data-name="E L84" class="property pb-sprite-2" points="687.89 143.3 782.34 142.9 782.34 173.23 687.89 173.26 687.89 143.3"/>
                            <text class="cls-2 futura-book" transform="translate(722.19 164.7) rotate(-0.39)">200.00 m2</text>
                            <text class="cls-3 futura-book" transform="translate(727.75 149.22)">25.00</text>
                            <text class="cls-3 futura-book" transform="translate(692.86 163.3) rotate(-90)">8.00</text>
                            <text class="cls-3 futura-book" transform="translate(778.79 163.5) rotate(-90)">8.00</text>
                            <text class="cls-4 futura-book" transform="translate(731.97 158.52) rotate(-0.39)">84</text>
                            <polygon class="cls-5" points="706.38 152.47 702.08 157.09 706.38 161.71 706.38 152.47"/>
                            <polygon class="cls-6" points="706.43 152.47 706.43 161.71 710.74 157.09 706.43 152.47"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[290]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[290])">
                            <polygon id="E_L85" data-name="E L85" class="property pb-sprite-1" points="687.89 112.13 782 112.08 782.34 142.9 687.89 143.3 687.89 112.13"/>
                            <text class="cls-2 futura-book" transform="translate(722.42 133.15) rotate(-0.39)">203.48 m2</text>
                            <text class="cls-3 futura-book" transform="translate(727.98 117.04)">25.00</text>
                            <text class="cls-3 futura-book" transform="translate(693.09 132.98) rotate(-90)">8.19</text>
                            <text class="cls-3 futura-book" transform="translate(779.02 132) rotate(-90)">8.09</text>
                            <text class="cls-4 futura-book" transform="translate(732.2 126.97) rotate(-0.39)">85</text>
                            <polygon class="cls-5" points="706.38 121.1 702.08 125.72 706.38 130.34 706.38 121.1"/>
                            <polygon class="cls-6" points="706.43 121.1 706.43 130.34 710.74 125.72 706.43 121.1"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[291]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[291])">
                            <polygon id="F_L86" data-name="F L86" class="property pb-sprite-2" points="318.38 146.38 383.78 112.24 406.94 112.16 415.96 129.8 332.17 173.2 318.38 146.38"/>
                            <text class="cls-3 futura-book" transform="translate(390.45 117.07)">6.06</text>
                            <text class="cls-14 futura-book" transform="translate(356.71 150.89) rotate(-27.41)">192.50 m2</text>
                            <text class="cls-15 futura-book" transform="translate(349.2 136.86) rotate(-27.02)">19.62</text>
                            <text class="cls-16 futura-book" transform="translate(326.46 155.01) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(403.95 118.27) rotate(62.28)">5.21</text>
                            <text class="cls-18 futura-book" transform="translate(362.62 140.94) rotate(-27.41)">86</text>
                            <polygon class="cls-5" points="390.39 121.83 386.09 126.45 390.39 131.07 390.39 121.83"/>
                            <polygon class="cls-6" points="390.45 121.83 390.45 131.07 394.75 126.45 390.45 121.83"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[292]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[292])">
                            <polygon id="F_L87" data-name="F L87" class="property pb-sprite-1" points="332.17 173.2 415.96 129.8 429.88 156.74 346.17 199.81 332.17 173.2"/>
                            <text class="cls-14 futura-book" transform="translate(369.44 176.39) rotate(-27.41)">200.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(368.25 160.97) rotate(-27.02)">25.00</text>
                            <text class="cls-16 futura-book" transform="translate(339.68 180.27) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(415.33 140.89) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(375.34 166.44) rotate(-27.41)">87</text>
                            <polygon class="cls-5" points="406.73 146.02 402.42 150.64 406.73 155.26 406.73 146.02"/>
                            <polygon class="cls-6" points="406.78 146.02 406.78 155.26 411.09 150.64 406.78 146.02"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[293]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[293])">
                            <polygon id="F_L88" data-name="F L88" class="property pb-sprite-2" points="346.17 199.81 429.88 156.74 443.7 183.44 359.9 226.63 346.17 199.81"/>
                            <text class="cls-14 futura-book" transform="translate(384.27 203.96) rotate(-27.41)">200.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(383.08 188.54) rotate(-27.02)">25.00</text>
                            <text class="cls-16 futura-book" transform="translate(354.5 207.84) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(430.16 168.47) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(390.17 194.02) rotate(-27.41)">88</text>
                            <polygon class="cls-5" points="419.77 174.24 415.46 178.86 419.77 183.48 419.77 174.24"/>
                            <polygon class="cls-6" points="419.82 174.24 419.82 183.48 424.12 178.86 419.82 174.24"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[294]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[294])">
                            <polygon id="F_L89" data-name="F L89" class="property pb-sprite-1" points="359.9 226.63 443.7 183.44 457.7 210.31 373.85 253.44 359.9 226.63"/>
                            <text class="cls-14 futura-book" transform="translate(398.14 230.71) rotate(-27.41)">200.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(396.95 215.29) rotate(-27.02)">25.00</text>
                            <text class="cls-16 futura-book" transform="translate(368.38 234.59) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(444.03 195.22) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(404.04 220.77) rotate(-27.41)">89</text>
                            <polygon class="cls-5" points="433.59 199.66 429.29 204.29 433.59 208.91 433.59 199.66"/>
                            <polygon class="cls-6" points="433.65 199.66 433.65 208.91 437.95 204.29 433.65 199.66"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[295]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[295])">
                            <polygon id="F_L90" data-name="F L90" class="property pb-sprite-2" points="373.85 253.44 457.7 210.31 471.5 237.07 387.82 280.38 373.85 253.44"/>
                            <text class="cls-14 futura-book" transform="translate(411.35 257.68) rotate(-27.41)">200.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(410.16 242.26) rotate(-27.02)">25.00</text>
                            <text class="cls-17 futura-book" transform="translate(457.24 222.18) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(417.25 247.74) rotate(-27.41)">90</text>
                            <polygon class="cls-5" points="447.32 226.69 443.01 231.31 447.32 235.93 447.32 226.69"/>
                            <polygon class="cls-6" points="447.37 226.69 447.37 235.93 451.68 231.31 447.37 226.69"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[296]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[296])">
                            <polygon id="F_L91" data-name="F L91" class="property pb-sprite-1" points="387.82 280.38 471.5 237.07 485.41 263.76 401.58 307.07 387.82 280.38"/>
                            <text class="cls-14 futura-book" transform="translate(426.24 283.95) rotate(-27.41)">200.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(425.05 268.53) rotate(-27.02)">25.00</text>
                            <text class="cls-16 futura-book" transform="translate(396.48 287.83) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(472.13 248.46) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(432.14 274.01) rotate(-27.41)">91</text>
                            <polygon class="cls-5" points="461.99 254.33 457.69 258.95 461.99 263.57 461.99 254.33"/>
                            <polygon class="cls-6" points="462.04 254.33 462.04 263.57 466.35 258.95 462.04 254.33"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[297]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[297])">
                            <polygon id="F_L92" data-name="F L92" class="property pb-sprite-2" points="401.58 307.07 485.41 263.76 499.25 290.7 415.68 333.77 401.58 307.07"/>
                            <text class="cls-14 futura-book" transform="translate(438.98 310.64) rotate(-27.41)">200.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(437.79 295.22) rotate(-27.02)">25.00</text>
                            <text class="cls-16 futura-book" transform="translate(409.22 314.52) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(484.88 275.14) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(444.89 300.69) rotate(-27.41)">92</text>
                            <polygon class="cls-5" points="477.1 280.88 472.8 285.5 477.1 290.12 477.1 280.88"/>
                            <polygon class="cls-6" points="477.15 280.88 477.15 290.12 481.46 285.5 477.15 280.88"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[298]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[298])">
                            <polygon id="F_L93" data-name="F L93" class="property pb-sprite-1" points="415.68 333.77 499.25 290.7 513.05 317.32 429.29 360.57 415.68 333.77"/>
                            <text class="cls-14 futura-book" transform="translate(453.94 337.94) rotate(-27.41)">200.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(452.75 322.52) rotate(-27.02)">25.00</text>
                            <text class="cls-16 futura-book" transform="translate(424.18 341.82) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(499.83 302.44) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(459.84 327.99) rotate(-27.41)">93</text>
                            <polygon class="cls-5" points="489.67 307.04 485.36 311.67 489.67 316.29 489.67 307.04"/>
                            <polygon class="cls-6" points="489.72 307.04 489.72 316.29 494.02 311.67 489.72 307.04"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[299]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[299])">
                            <polygon id="F_L94" data-name="F L94" class="property pb-sprite-2" points="429.29 360.57 513.05 317.32 526.94 344.13 443.38 387.43 429.29 360.57"/>
                            <text class="cls-14 futura-book" transform="translate(467.09 363.96) rotate(-27.41)">200.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(465.91 348.54) rotate(-27.02)">25.00</text>
                            <text class="cls-16 futura-book" transform="translate(437.33 367.84) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(512.99 328.47) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(473 354.02) rotate(-27.41)">94</text>
                            <polygon class="cls-5" points="502.23 334.54 497.92 339.16 502.23 343.79 502.23 334.54"/>
                            <polygon class="cls-6" points="502.28 334.54 502.28 343.79 506.58 339.16 502.28 334.54"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[300]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[300])">
                            <polygon id="F_L95" data-name="F L95" class="property pb-sprite-1" points="457.21 414.18 443.38 387.43 526.94 344.13 541.06 370.91 457.21 414.18"/>
                            <text class="cls-14 futura-book" transform="translate(480.98 391.34) rotate(-27.41)">200.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(479.79 375.91) rotate(-27.02)">25.00</text>
                            <text class="cls-16 futura-book" transform="translate(451.22 395.21) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(526.87 355.84) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(486.88 381.39) rotate(-27.41)">95</text>
                            <polygon class="cls-5" points="515.73 361.58 511.42 366.2 515.73 370.82 515.73 361.58"/>
                            <polygon class="cls-6" points="515.78 361.58 515.78 370.82 520.08 366.2 515.78 361.58"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[301]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[301])">
                            <polygon id="F_L96" data-name="F L96" class="property pb-sprite-1" points="368.1 426.44 354.24 399.68 429.29 360.57 443.38 387.43 368.1 426.44"/>
                            <text class="cls-14 futura-book" transform="translate(390.17 404.67) rotate(-27.41)">180.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(387.45 388.91) rotate(-27.02)">22.50</text>
                            <text class="cls-16 futura-book" transform="translate(360.39 408.2) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(429.22 372.8) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(396.07 394.72) rotate(-27.41)">96</text>
                            <polygon class="cls-5" points="375.29 400.1 370.98 404.72 375.29 409.34 375.29 400.1"/>
                            <polygon class="cls-6" points="375.34 400.1 375.34 409.34 379.65 404.72 375.34 400.1"/>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[302]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[302])">
                            <polygon id="F_L97" data-name="F L97" class="property pb-sprite-2" points="354.24 399.68 340.3 372.85 415.68 333.77 429.29 360.57 354.24 399.68"/>
                            <text class="cls-14 futura-book" transform="translate(376.9 379.37) rotate(-27.41)">180.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(374.18 363.61) rotate(-27.02)">22.50</text>
                            <text class="cls-16 futura-book" transform="translate(347.12 382.9) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(415.95 347.51) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(382.81 369.43) rotate(-27.41)">97</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[303]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[303])">
                            <polygon id="F_L98" data-name="F L98" class="property pb-sprite-1" points="340.3 372.85 326.41 346.11 401.58 307.07 415.68 333.77 340.3 372.85"/>
                            <text class="cls-14 futura-book" transform="translate(362.43 350.88) rotate(-27.41)">180.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(359.71 335.12) rotate(-27.02)">22.50</text>
                            <text class="cls-16 futura-book" transform="translate(332.65 354.41) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(401.48 319.02) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(368.34 340.93) rotate(-27.41)">98</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[304]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[304])">
                            <polygon id="F_L99" data-name="F L99" class="property pb-sprite-2" points="326.41 346.11 312.53 319.35 387.82 280.38 401.58 307.07 326.41 346.11"/>
                            <text class="cls-14 futura-book" transform="translate(348.7 324.77) rotate(-27.41)">180.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(345.98 309.01) rotate(-27.02)">22.50</text>
                            <text class="cls-16 futura-book" transform="translate(318.92 328.3) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(387.75 292.91) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(354.61 314.82) rotate(-27.41)">99</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[305]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[305])">
                            <polygon id="F_L100" data-name="F L100" class="property pb-sprite-1" points="312.53 319.35 298.59 292.57 373.85 253.44 387.82 280.38 312.53 319.35"/>
                            <text class="cls-14 futura-book" transform="translate(334.8 297.81) rotate(-27.41)">180.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(332.08 282.05) rotate(-27.02)">22.50</text>
                            <text class="cls-16 futura-book" transform="translate(305.02 301.34) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(373.85 265.95) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(339.05 288.82) rotate(-27.41)">100</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[306]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[306])">
                            <polygon id="F_L101" data-name="F L101" class="property pb-sprite-2" points="298.59 292.57 284.92 265.62 359.9 226.63 373.85 253.44 298.59 292.57"/>
                            <text class="cls-14 futura-book" transform="translate(320.4 270.93) rotate(-27.41)">180.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(317.67 255.17) rotate(-27.02)">22.50</text>
                            <text class="cls-16 futura-book" transform="translate(290.61 274.46) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(359.45 239.07) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(324.64 261.93) rotate(-27.41)">101</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[307]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[307])">
                            <polygon id="F_L102" data-name="F L102" class="property pb-sprite-1" points="284.92 265.62 270.88 238.79 346.17 199.81 359.9 226.63 284.92 265.62"/>
                            <text class="cls-14 futura-book" transform="translate(306.9 244.18) rotate(-27.41)">180.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(304.18 228.42) rotate(-27.02)">22.50</text>
                            <text class="cls-16 futura-book" transform="translate(277.12 247.71) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(345.95 212.32) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(311.15 235.19) rotate(-27.41)">102</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[308]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[308])">
                            <polygon id="F_L103" data-name="F L103" class="property pb-sprite-2" points="270.88 238.79 257.11 212.08 332.17 173.2 346.17 199.81 270.88 238.79"/>
                            <text class="cls-14 futura-book" transform="translate(293.05 218.22) rotate(-27.41)">180.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(290.33 202.46) rotate(-27.02)">22.50</text>
                            <text class="cls-16 futura-book" transform="translate(263.28 221.76) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(332.11 186.37) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(297.3 209.23) rotate(-27.41)">103</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[309]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[309])">
                            <polygon id="F_L104" data-name="F L104" class="property pb-sprite-1" points="257.11 212.08 243.12 185.39 318.38 146.38 332.17 173.2 257.11 212.08"/>
                            <text class="cls-14 futura-book" transform="translate(279.62 190.83) rotate(-27.41)">180.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(276.89 175.07) rotate(-27.02)">22.50</text>
                            <text class="cls-16 futura-book" transform="translate(249.84 194.36) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(318.67 158.97) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(283.86 181.84) rotate(-27.41)">104</text>
                        </g>

                        <g class="property__active" ng-class="paramo.inmovablesClassList[310]" ng-click="paramo.setLeadProperty(paramo.inmovablesData.inmovables[310])">
                            <polygon id="F_L105" data-name="F L105" class="property pb-sprite-2" points="229.12 158.4 304.42 119.52 318.38 146.38 243.12 185.39 229.12 158.4"/>
                            <text class="cls-14 futura-book" transform="translate(265.2 163.73) rotate(-27.41)">180.00 m2</text>
                            <text class="cls-15 futura-book" transform="translate(262.48 147.97) rotate(-27.02)">22.50</text>
                            <text class="cls-16 futura-book" transform="translate(235.42 167.26) rotate(62.48)">8.00</text>
                            <text class="cls-17 futura-book" transform="translate(304.25 131.87) rotate(62.28)">8.00</text>
                            <text class="cls-18 futura-book" transform="translate(269.44 154.74) rotate(-27.41)">105</text>
                            <polygon class="cls-5" points="252.4 158.75 248.09 163.37 252.4 167.99 252.4 158.75"/>
                            <polygon class="cls-6" points="252.45 158.75 252.45 167.99 256.76 163.37 252.45 158.75"/>
                        </g>

                        <g id="DIVISIONES-5" data-name="DIVISIONES">
                            <line class="cls-8" x1="383.78" y1="112.24" x2="243.12" y2="185.39"/>
                            <line class="cls-8" x1="415.96" y1="129.8" x2="257.1" y2="212.08"/>
                            <line class="cls-8" x1="270.88" y1="238.79" x2="429.88" y2="156.74"/>
                            <line class="cls-8" x1="443.7" y1="183.44" x2="284.92" y2="265.62"/>
                            <path class="cls-8" d="M298.59,292.57c7.21-3.75,159.11-82.26,159.11-82.26"/>
                            <line class="cls-8" x1="471.5" y1="237.07" x2="312.53" y2="319.35"/>
                            <line class="cls-8" x1="485.41" y1="263.76" x2="326.41" y2="346.11"/>
                            <line class="cls-8" x1="340.3" y1="372.85" x2="499.25" y2="290.7"/>
                            <line class="cls-8" x1="513.06" y1="317.32" x2="354.24" y2="399.68"/>
                            <line class="cls-8" x1="368.1" y1="426.44" x2="526.94" y2="344.13"/>
                            <path class="cls-8" d="M541.06,370.91l-83.85,43.27L304.42,119.52l-75.3,38.88"/>
                            <text class="cls-16 futura-book" transform="translate(381.58 261.56) rotate(62.48)">8.00</text>
                        </g>

                        <g id="DICISIONES">
                            <line class="cls-8" x1="901.97" y1="110.79" x2="977.89" y2="110.17"/>
                            <line class="cls-8" x1="977.9" y1="140.6" x2="902.51" y2="140.66"/>
                            <line class="cls-8" x1="902.44" y1="170.98" x2="978.21" y2="170.62"/>
                            <line class="cls-8" x1="978.21" y1="200.85" x2="902.42" y2="201.32"/>
                            <line class="cls-8" x1="902.45" y1="231.1" x2="978.22" y2="231.09"/>
                            <line class="cls-8" x1="902.77" y1="261.57" x2="978.44" y2="261.24"/>
                            <line class="cls-8" x1="978.71" y1="295.3" x2="902.81" y2="295.33"/>
                            <line class="cls-8" x1="902.94" y1="329.58" x2="978.71" y2="329.14"/>
                        </g>

                        <g id="DIVISIONES">
                            <line class="cls-8" x1="309.56" y1="468.44" x2="319.35" y2="553.04"/>
                            <line class="cls-8" x1="349.16" y1="549.6" x2="339.78" y2="465.12"/>
                            <line class="cls-8" x1="369.68" y1="461.52" x2="379.26" y2="546.32"/>
                            <line class="cls-8" x1="409.35" y1="542.96" x2="399.62" y2="458.33"/>
                            <line class="cls-8" x1="429.52" y1="454.91" x2="439.25" y2="539.46"/>
                            <line class="cls-8" x1="459.78" y1="451.47" x2="469.06" y2="536.07"/>
                            <line class="cls-8" x1="489.72" y1="448.15" x2="499.09" y2="532.79"/>
                            <line class="cls-8" x1="519.54" y1="444.83" x2="529.31" y2="529.35"/>
                            <line class="cls-8" x1="549.48" y1="441.33" x2="559.3" y2="525.93"/>
                            <line class="cls-8" x1="579.62" y1="437.83" x2="588.96" y2="522.9"/>
                            <line class="cls-8" x1="609.64" y1="434.63" x2="618.98" y2="519.37"/>
                            <line class="cls-8" x1="639.48" y1="431.18" x2="649.09" y2="516.02"/>
                            <line class="cls-8" x1="669.44" y1="427.74" x2="679.16" y2="512.79"/>
                            <line class="cls-8" x1="699.73" y1="424.57" x2="709.19" y2="509.3"/>
                            <line class="cls-8" x1="729.56" y1="421.14" x2="739.09" y2="505.86"/>
                            <line class="cls-8" x1="759.44" y1="417.42" x2="769.11" y2="502.41"/>
                            <line class="cls-8" x1="789.43" y1="414.37" x2="799.27" y2="499.31"/>
                            <line class="cls-8" x1="819.7" y1="411.01" x2="829.03" y2="495.85"/>
                            <line class="cls-8" x1="849.68" y1="407.41" x2="858.89" y2="492.25"/>
                            <line class="cls-8" x1="879.6" y1="403.97" x2="888.85" y2="489.15"/>
                            <line class="cls-8" x1="909.58" y1="400.78" x2="919.18" y2="485.5"/>
                            <line class="cls-8" x1="939.7" y1="397.34" x2="948.98" y2="482.03"/>
                        </g>

                        <g id="DIVISIONES-2" data-name="DIVISIONES">
                            <line class="cls-8" x1="230.07" y1="442.22" x2="313.99" y2="398.67"/>
                            <line class="cls-8" x1="300.19" y1="372.09" x2="215.99" y2="415.48"/>
                            <line class="cls-8" x1="202.12" y1="388.77" x2="286.37" y2="345.19"/>
                            <line class="cls-8" x1="272.25" y1="318.52" x2="188.12" y2="361.89"/>
                            <line class="cls-8" x1="174.04" y1="334.96" x2="258.39" y2="291.65"/>
                            <line class="cls-8" x1="244.5" y1="264.83" x2="160.42" y2="308.38"/>
                            <line class="cls-8" x1="146.61" y1="281.6" x2="230.6" y2="237.96"/>
                            <line class="cls-8" x1="188.86" y1="157.63" x2="104.97" y2="201.04"/>
                            <line class="cls-8" x1="175.16" y1="130.84" x2="91.2" y2="174.38"/>
                            <line class="cls-8" x1="75.42" y1="144.2" x2="136.63" y2="112.12"/>
                            <line class="cls-8" x1="118.93" y1="228.01" x2="202.82" y2="184.5"/>
                            <line class="cls-8" x1="216.8" y1="211.22" x2="132.69" y2="254.75"/>
                        </g>

                        <g id="DIVISIONES-3" data-name="DIVISIONES">
                            <line class="cls-8" x1="832.91" y1="77.44" x2="832.91" y2="1.58"/>
                            <line class="cls-8" x1="795.69" y1="1.6" x2="795.75" y2="77.36"/>
                            <line class="cls-8" x1="765.79" y1="77.39" x2="765.79" y2="1.58"/>
                            <line class="cls-8" x1="735.49" y1="1.51" x2="735.49" y2="77.4"/>
                            <line class="cls-8" x1="705.16" y1="77.4" x2="705.16" y2="1.51"/>
                            <line class="cls-8" x1="675.18" y1="77.32" x2="675.18" y2="1.51"/>
                            <line class="cls-8" x1="644.88" y1="77.36" x2="644.88" y2="1.51"/>
                            <line class="cls-8" x1="614.5" y1="77.44" x2="614.5" y2="1.51"/>
                            <path class="cls-8" d="M584.68,77.36V1.51"/>
                            <line class="cls-8" x1="554.41" y1="77.42" x2="554.39" y2="1.66"/>
                            <path class="cls-8" d="M524,79.47v-78"/>
                            <line class="cls-8" x1="71.39" y1="77.32" x2="71.4" y2="1.51"/>
                            <line class="cls-8" x1="101.67" y1="77.4" x2="101.67" y2="1.6"/>
                            <path class="cls-8" d="M132,77.27V1.51"/>
                            <line class="cls-8" x1="161.93" y1="77.39" x2="161.93" y2="1.51"/>
                            <line class="cls-8" x1="192.26" y1="77.32" x2="192.26" y2="1.51"/>
                            <path class="cls-8" d="M222.53,77.36V1.51"/>
                            <line class="cls-8" x1="252.41" y1="77.4" x2="252.45" y2="1.62"/>
                            <line class="cls-8" x1="282.75" y1="77.4" x2="282.75" y2="1.51"/>
                            <line class="cls-8" x1="313.06" y1="77.42" x2="313.06" y2="1.51"/>
                            <line class="cls-8" x1="342.95" y1="77.4" x2="342.95" y2="1.51"/>
                            <line class="cls-8" x1="373.28" y1="77.4" x2="373.28" y2="1.51"/>
                            <line class="cls-8" x1="403.62" y1="77.44" x2="403.6" y2="1.66"/>
                            <line class="cls-8" x1="433.52" y1="77.4" x2="433.52" y2="1.51"/>
                            <line class="cls-8" x1="463.84" y1="77.36" x2="463.84" y2="1.51"/>
                            <path class="cls-8" d="M494.22,77.33V1.51"/>
                        </g>

                        <g id="DIVISIONES-4" data-name="DIVISIONES">
                            <line class="cls-8" x1="687.89" y1="173.26" x2="867.2" y2="172.76"/>
                            <line class="cls-8" x1="867.2" y1="202.81" x2="688.37" y2="203.52"/>
                            <line class="cls-8" x1="688.43" y1="233.9" x2="867.71" y2="233"/>
                            <line class="cls-8" x1="867.71" y1="267.01" x2="688.37" y2="267.62"/>
                            <line class="cls-8" x1="688.48" y1="301.5" x2="867.63" y2="301.06"/>
                            <line class="cls-8" x1="867.63" y1="334.84" x2="688.75" y2="335.4"/>
                            <line class="cls-8" x1="688.75" y1="370.97" x2="868.11" y2="370.08"/>
                            <line class="cls-8" x1="782" y1="112.09" x2="783.49" y2="370.49"/>
                            <line class="cls-8" x1="687.89" y1="143.3" x2="867.2" y2="142.38"/>
                        </g>

                        <polygon class="cls-20" points="927.12 46.92 927.14 35.46 942.43 35.22 942.36 46.67 927.12 46.92"/>
                        <text class="cls-21 futura-book" transform="matrix(0.01, -0.9, 1, 0, 934.67, 26.69)">ACCESO</text>
                        <path class="cls-22" d="M925.31,19.29a4.07,4.07,0,0,0,4,3.9l0,5.51L924.8,24l-4.53-4.71,4.59-4.69,4.58-4.69,0,5.51a4.11,4.11,0,0,0-4.09,3.88"/>
                        <text class="cls-23 futura-book" transform="matrix(0.03, -0.91, 1, 0.02, 926.15, 68.38)">SALIDA</text>
                        <path class="cls-22" d="M933.3,62.67a4.11,4.11,0,0,1-4.13,3.74l-.2,5.4,4.62-4.52,4.63-4.53-4.28-4.69-4.28-4.69-.2,5.4a3.92,3.92,0,0,1,3.84,3.89"/>
                        <path class="cls-24" d="M936.13,39c0,.11-.35,1.25-.88,1.26s-1-1.13-1-1.24a1.1,1.1,0,0,1,.95-.49A1.14,1.14,0,0,1,936.13,39Z"/>
                        <path class="cls-24" d="M939.7,42.34c.06,1.26-1.84,2.15-4.24,2.18s-4.39-.83-4.45-2.09C935.36,42.37,935.36,42.37,939.7,42.34Z"/>
                        <polygon class="cls-24" points="939.46 42.33 931.19 42.42 931.14 41.27 939.4 41.19 939.46 42.33"/>
                        <path class="cls-24" d="M931.14,41.27l-.92-1a.33.33,0,0,1,.12-.54l.59-.26A4.65,4.65,0,0,0,933.52,38l.25-.3,2.78,0,.34.38a4.72,4.72,0,0,0,2.48,1.42l.78.26a.3.3,0,0,1,.16.47l-.91,1Z"/>
                        <polyline class="cls-25" points="1222.95 80.25 977.89 80.25 979.09 478.49 289.08 556.56 1.5 1.5 1196.77 1.5"/>

                    </g>
                </g>
            </svg>

        </div>
	</div>

	<div class="modal-dialog" ng-class="paramo.dialogDisplay">
		<div class="backdrop-dialog" ng-click="paramo.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="paramo.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{paramo.propertyData.reference}}</p>
				<ul class="saufth-collapsable">
					<li ng-repeat="user in paramo.activeUsers" ng-if="user.idProfile > 1">
						<div class="saufth-collapsable-header" ng-click="paramo.selectUser(lead.idLead, $index)" ng-class="paramo.activeUsers[$index].collapsableHeaderClass">
							<div style="display:flex;"><i class="material-icons pr-15">account_circle</i>{{user.name + ' ' + user.last_name}}</div>
							<div class="py-5 pl-15"></div>
							<div class="saufth-badge blue-bg light-txt ml-15">{{user.leads.length}}</div>
						</div>
						<ul class="saufth-collapsable-body" ng-class="paramo.activeUsers[$index].collapsableBodyClass">
							<li class="saufth-collapsable-body-li" ng-repeat="lead in user.leads">
								<div class="saufth-collapsable-item-h" ng-click="paramo.selectLeadPropertyStatus(lead.idUser, lead.idLead)">
									<i class="material-icons px-15">assignment_ind</i>{{lead.name + ' ' + lead.last_name}}
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="paramo.dialogStatusDisplay">
		<div class="backdrop-dialog" ng-click="paramo.closeDialogStatus()"></div>
		<div class="container-dialog p-20 status-dialog">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="paramo.closeDialogStatus()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{paramo.propertyData.reference}}</p>
				<ul class="saufth-collapsable w100">
					<li>
						<div class="saufth-collapsable-header" ng-click="paramo.setStatus(1)"><div class="color-block pb-property-active-bg mr-15"></div>Disponible</div>
                    </li>
                    <li>
						<div class="saufth-collapsable-header" ng-click="paramo.setStatus(6)"><div class="color-block darkgray__bg mr-15"></div>Estratégico</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="paramo.setStatus(2)"><div class="color-block pb_lightred-bg mr-15"></div>En espera</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="paramo.setStatus(3)"><div class="color-block brown mr-15"></div>Apartado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="paramo.setStatus(4)"><div class="color-block mustard-bg mr-15"></div>Enganchado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="paramo.setStatus(5)"><div class="color-block pb_teal-bg mr-15"></div>Vendido</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog white" ng-class="rootInmovables.options.modal_display">

		<div class="pl-16 dark__bg" layout="row">
			<div layout="row" layout-align="start center" flex="80">
				<span class="light-txt">Páramo</span>
			</div>
			<div layout="row" layout-align="end center" flex="20">
				<md-button ng-click="paramo.closeList()" class="md-icon-button" aria-label="Cerrar">
					<md-icon style="color: white;" md-svg-src="media/assets/img/icons/app/close.svg"></md-icon>
				</md-button>
			</div>
		</div>

		<div layout-padding>
			<div>
				<div class="border-box--blue border-r4 overflow-h">
					<div layout="row" class="bluegray-light2-bg border-box--blue-b px-16 py-10">
	
						<div layout="row" layout-align="start center" flex="50">
							Espacio para filtros
						</div>
						
						<div class="dark__text fs__10px proxima-soft-light ml-24" layout="row" layout-align="end center" flex="50">
							{{paramo.inmovablesData.inmovables.length}} propiedades
						</div>

					</div>

					<div class="overflow-x-s overflow-y-s">
						<div class="h100v-140" style="width: 5120px;">

							<div class="border-box--blue-b px-24 py-10">
								<div layout="row" layout-align="start center" class="dark__text fs__14px proxima-soft-semibold">

									<div class="overflow-h pr-5" style="width:1.92%">#</div>
									<div class="overflow-h px-5" style="width:1.92%">Modulo</div>
									<div class="overflow-h px-5" style="width:1.92%">Estado</div>
									<div class="overflow-h px-5" style="width:1.92%">Área</div>
									<div class="overflow-h px-5" style="width:1.92%">Tipo</div>

									<div class="overflow-h px-5" style="width:3.84%">Precio M&sup2;</div>
									<div class="overflow-h px-5" style="width:3.84%">Precio de propiedad</div>
									<div class="overflow-h px-5" style="width:1.92%">% de enganche</div>
									<div class="overflow-h px-5" style="width:3.84%">Enganche</div>
									<div class="overflow-h px-5" style="width:3.84%">Financiamiento</div>

									<div class="overflow-h px-5" style="width:1.92%">% aumento precio M&sup2;</div>
									<div class="overflow-h px-5" style="width:3.84%">Aumento precio M&sup2;</div>
									<div class="overflow-h px-5" style="width:3.84%">Precio M&sup2; con aumento</div>
									<div class="overflow-h px-5" style="width:3.84%">Precio de propiedad con aumento</div>
									<div class="overflow-h px-5" style="width:3.84%">Enganche con precio aumentado</div>
									<div class="overflow-h px-5" style="width:3.84%">Financiamiento con precio aumentado</div>

									<div class="overflow-h px-5" style="width:1.92%">% descuento precio M&sup2;</div>
									<div class="overflow-h px-5" style="width:3.84%">Descuento precio M&sup2;</div>
									<div class="overflow-h px-5" style="width:3.84%">Precio M&sup2; con descuento</div>
									<div class="overflow-h px-5" style="width:3.84%">Precio de propiedad con descuento</div>
									<div class="overflow-h px-5" style="width:3.84%">Enganche con precio descuento</div>
									<div class="overflow-h px-5" style="width:3.84%">Financiamiento con precio descuento</div>

									<div class="overflow-h px-5" style="width:3.84%">Precio M&sup2; final</div>
									<div class="overflow-h px-5" style="width:3.84%">Precio de propiedad final</div>
									<div class="overflow-h px-5" style="width:3.84%">Enganche final</div>
									<div class="overflow-h px-5" style="width:3.84%">Financiamiento final</div>

									<div class="overflow-h px-5" style="width:1.92%">% desc. enganche</div>
									<div class="overflow-h px-5" style="width:3.84%">Desc. enganche</div>
									<div class="overflow-h px-5" style="width:3.84%">Enganche final con descuento</div>
									<div class="overflow-h px-5" style="width:3.84%">Importe</div>

									<div class="overflow-h pl-5 center-align" style="width:1.92%">&#8942;</div>

								</div>
							</div>

							<div class="trow border-box--blue-b px-24 py-10" ng-repeat="property in paramo.inmovablesData.inmovables">
								<div layout="row" layout-align="start center" class="dark__text fs__14px proxima-soft-regular">

									<div class="overflow-h pr-5" style="width:1.92%">{{property.number}}</div>
									<div class="overflow-h px-5" style="width:1.92%">{{property.idModule}}</div>
									<div class="overflow-h px-5" style="width:1.92%">{{paramo.propertyStatus[property.idPropertyStatus]}}</div>
									<div class="overflow-h px-5" style="width:1.92%">{{property.area}} M&sup2;</div>
									<div class="overflow-h px-5" style="width:1.92%">{{property.type}}</div>

									<div class="overflow-h px-5" style="width:3.84%">${{property.cost.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.cost.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:1.92%">{{property.hook.value*100}}%</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.hook.base.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.financing.total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>

									<div class="overflow-h px-5" style="width:1.92%">{{(property.cost_m2_increase.value*100).toFixed(2)}}%</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.cost_m2_increase.increased.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.cost_m2_increase.total_increased.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.cost_m2_increase.property_cost.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.hook.increased.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.financing.increased.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>

									<div class="overflow-h px-5" style="width:1.92%">{{property.cost_m2_discount.value*100}}%</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.cost_m2_discount.discounted.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.cost_m2_discount.total_discounted.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.cost_m2_discount.property_cost.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.hook.decreased.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.financing.decreased.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>

									<div class="overflow-h px-5" style="width:3.84%">${{property.cost.final.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.cost.final.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.hook.total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.financing.final.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>

									<div class="overflow-h px-5" style="width:1.92%">{{property.hook_discount.value*100}}%</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.hook.discounted.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.hook.final.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.import.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>

									<div class="overflow-h pl-5 center-align" style="width:1.92%">
										<md-menu md-offset="-50 0" ng-controller="ContactMenuCtrl as contactCtrl">
                                                
											<button class="btn-floating no__shadow transparent__bg" ng-click="contactCtrl.openMenu($mdMenu, $event)">
												<i class="material-icons black-text">more_vert</i>
											</button>
	
											<md-menu-content>

												<md-menu-item>
													<md-button ng-click="paramo.openEditPropertyWindow(property)">
														Editar
													</md-button>
												</md-menu-item>

												<md-menu-divider></md-menu-divider>

												<md-menu-item>
													<md-button>
														Cerrar menu
													</md-button>
												</md-menu-item>

											</md-menu-content>

										</md-menu>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="modal-dialog white" ng-class="rootInmovables.edit.view">

		<div class="pl-16 dark__bg" layout="row">
			<div layout="row" layout-align="start center" flex="80">
				<span class="light-txt">Aumento estratégico</span>
			</div>
			<div layout="row" layout-align="end center" flex="20">
				<md-button ng-click="paramo.hideEditPropertyWindow()" class="md-icon-button" aria-label="Cerrar">
					<md-icon style="color: white;" md-svg-src="media/assets/img/icons/app/close.svg"></md-icon>
				</md-button>
			</div>
		</div>

		<div layout-padding>
			<div>

				<div class="w100" layout-xs="column" layout-gt-xs="row" layout-align="start center">

					<div layout="row" class="w100 px-10 pb-40">

                        <md-input-container class="w100">

							<label>Aumento a precio</label>

                            <md-select name="updateIncrease" ng-model="rootInmovables.edit.models.idPromoIncrease" ng-change="paramo.updateIncrease(rootInmovables.selected.id, rootInmovables.edit.models.idPromoIncrease, rootInmovables.selected.idPromoIncrease, rootInmovables.selected.valuePromoIncrease, 3)" required>

								<md-option ng-value="0">Ninguno</md-option>

                                <md-option ng-value="6">5% Aumento estratégico</md-option>
                                <md-option ng-value="7">7% Aumento estratégico</md-option>
								<md-option ng-value="8">10% Aumento estratégico</md-option>

							</md-select>

						</md-input-container>

					</div>

					<form layout="row" name="updateDiscountForm" class="w100 px-10 pb-40">

                        <md-input-container class="w100">

							<label>Descuento a precio</label>

                            <md-select name="updateDiscount" ng-model="rootInmovables.edit.models.idPromoDiscount" ng-change="paramo.updateIncrease(rootInmovables.selected.id, rootInmovables.edit.models.idPromoDiscount, rootInmovables.selected.idPromoDiscount, rootInmovables.selected.valuePromoDiscount, 1)" required>

								<md-option ng-value="0">Ninguno</md-option>

                                <md-option ng-value="9">20% Descuento por lanzamiento</md-option>
                                <md-option ng-value="1">25% Descuento por lanzamiento</md-option>
								<md-option ng-value="2">30% Descuento por pago de contado</md-option>

							</md-select>

						</md-input-container>

					</form>

				</div>

				<div class="w100" layout-xs="column" layout-gt-xs="row" layout-align="start center">

					<form layout="row" name="updateHookForm" class="w100 px-10 pb-40">
                        <md-input-container class="w100">

							<label>Enganche</label>

                            <md-select name="updateHook" ng-model="rootInmovables.edit.models.idPromoHook" ng-change="paramo.updateIncrease(rootInmovables.selected.id, rootInmovables.edit.models.idPromoHook, rootInmovables.selected.idPromoHook, rootInmovables.selected.valuePromoHook, 4)" required>

                                <md-option ng-value="5">10% Enganche para terrenos</md-option>
								<md-option ng-value="4">30% Enganche para Naves</md-option>

							</md-select>

						</md-input-container>

					</form>

					<form layout="row" name="updateHookForm" class="w100 px-10 pb-40">

                        <md-input-container class="w100">

							<label>Descuento a enganche</label>

                            <md-select name="updateHook" ng-model="rootInmovables.edit.models.idPromoHookDiscount" ng-change="paramo.updateIncrease(rootInmovables.selected.id, rootInmovables.edit.models.idPromoHookDiscount, rootInmovables.selected.idPromoHookDiscount, rootInmovables.selected.valuePromoHookDiscount, 2)" required>

								<md-option ng-value="0">Ninguno</md-option>

								<md-option ng-value="3">10% Descuento sobre monto de enganche</md-option>

							</md-select>

						</md-input-container>

					</form>

				</div>

			</div>
		</div>
	</div>

</body>
</html>