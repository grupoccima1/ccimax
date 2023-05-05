<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contet="ie=edge">
	<meta name="author" content="Ing. Saúl Fernando Torres Hernández">
	<meta name="description" content="Grúpo CCIMA S.A. de C.V." />
	<meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

	<title>Zafiro - Portto Blanco Bernal</title>

	<script type="text/javascript" src="media/assets/js/analytics.js"></script>

	<link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
	<script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body>

	<md-sidenav class="cc-sidenav md-sidenav-left md-whiteframe-4dp" md-component-id="left">
		<md-toolbar class="md-hue-2">
			<h1 class="md-toolbar-tools">NAVEGACIÓN</h1>
		</md-toolbar>
		<a href="#!/portto_blanco" ng-click="close()">
			<div class="link-sidenav">
				<span>Inicio</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/portto_blanco-promociones" ng-click="close()">
			<div class="link-sidenav">
				<span>Promociones</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/portto_blanco-amenidades" ng-click="close()">
			<div class="link-sidenav">
				<span>Áreas comunes</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/portto_blanco-ubicacion" ng-click="close()">
			<div class="link-sidenav">
				<span>Ubicación</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/habitta" ng-click="close()">
			<div class="link-sidenav">
				<span>Habitta</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/" ng-click="close()">
			<div class="link-sidenav">
				<span>Grupo CCIMA</span>
			</div>
		</a>
		<md-divider></md-divider>

	</md-sidenav>

	<div class="navbar-fixed" ng-controller="sideNavCtrl">
		<nav class="white no-shadows" role="navigation" ng-controller="ContactMenuCtrl as contactCtrl">

			<div class="nav-wrapper">

				<a href="#!/portto_blanco" class="brand-logo white left"><img class="logo-pb" src="media/assets/img/habitta/portto-blanco/logos/logo_bernal.svg"></a>

				<ul class="nav-menu hide-on-med-and-down">
					<li><a href="#!/portto_blanco">Inicio</a></li>
					<li><a href="#!/portto_blanco-promociones">Promociones</a></li>
					<li><a href="#!/portto_blanco-amenidades">Áreas comunes</a></li>
					<li><a href="#!/portto_blanco-ubicacion">Ubicación</a></li>
					<li class="quote-item">
						<md-menu>
							<button class="btn blue-bg futura-demi lighter ml-10" ng-click="contactCtrl.openMenu($mdMenu, $event)">CONTACTO</button>
							<md-menu-content width="4">
								<md-menu-item>
									<md-button disabled="disabled">
										+52 1 442 127 5214
									</md-button>
								</md-menu-item>
								<md-menu-divider></md-menu-divider>
								<md-menu-item>
									<md-button ng-click="contactCtrl.toWhatsapp()">
										Whatsapp
									</md-button>
								</md-menu-item>
								<md-menu-item>
									<md-button ng-click="contactCtrl.toCall()">
										Llamada
									</md-button>
								</md-menu-item>
							</md-menu-content>
						</md-menu>
					</li>
				</ul>

				<ul class="right hide-on-large-only">
					<li><md-button class="md-icon-button md-noink" ng-click="toggleLeft()">
						<svg viewBox="0 0 24 24" width="24"><path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path></svg>
					</md-button></li>
				</ul>

				<div class="quote-item right hide-on-large-only">
					<md-menu>
						<button class="btn blue-bg futura-demi lighter ml-10" ng-click="contactCtrl.openMenu($mdMenu, $event)">CONTACTO</button>
						<md-menu-content width="4">
							<md-menu-item>
								<md-button disabled="disabled">
									+52 1 442 127 5214
								</md-button>
							</md-menu-item>
							<md-menu-divider></md-menu-divider>
							<md-menu-item>
								<md-button ng-click="contactCtrl.toWhatsapp()">
									Whatsapp
								</md-button>
							</md-menu-item>
							<md-menu-item>
								<md-button ng-click="contactCtrl.toCall()">
									Llamada
								</md-button>
							</md-menu-item>
						</md-menu-content>
					</md-menu>
				</div>

			</div>

		</nav>
	</div>

	<div class="plano_container">

		<div class="container mt-64">
			<div class="row quote-header">
				<div class="col s12">
					<h1 class="center-align">ZAFIRO</h1>
				</div>
			</div>
		</div>

		<!-- aqui va el mapa -->
		<svg version="1.1" id="CLÚSTER_ZAFIRO" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 		y="0px" viewBox="0 0 1366 2009" style="enable-background:new 0 0 1366 2009;" xml:space="preserve">
			<style type="text/css">
				.st0{fill:#5170A2;}
				.st1{fill:#003A70;stroke:#8AA9BB;stroke-width:1.0009;stroke-miterlimit:10;}
				.st2{fill:#FFFFFF;}
				.st3{font-family:'CenturyGothic-Bold';}
				.st4{font-size:72.2712px;}
			</style>
			<image style="overflow:visible;" width="1366" height="2009" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/zafiro/zafiro.jpg" >
			</image>
			<g>
				<a href="#!/Portto_Blanco-Bernal/Zafiro_1" class="pb__condo">
					<g>
						<path class="pb__condo-bg" d="M1193.3,594c38.1,92.5,76.3,202.9,106.2,329.4c24.2,102.2,38.7,196.9,47.3,281
							c-399.8,0.3-799.7,0.6-1199.6,0.9c8.5-191.6,17-383.1,25.6-574.7c27.1-118.1,54.2-236.2,81.4-354.3
							C418.2,184.3,582.3,92.2,746.3,0c10,5.1,28.2,12.6,52.1,14c24.4,1.5,43.5-4.2,54.1-8.2c49.5,62.4,101.5,134.1,152.5,215.9
							c57,91.2,102.7,178.2,139.3,257.2L1193.3,594z"/>
						<g>
							<rect x="482.5" y="663.1" class="st1" width="348.8" height="105.2"/>
							<text transform="matrix(1 0 0 1 501.974 740.6418)" class="st2 st3 st4">ZAFIRO 1</text>
						</g>
					</g>
				</a>
				
				<a href="#!/Portto_Blanco-Bernal/Zafiro_2" class="pb__condo">
					<g>
						<path class="pb__condo-bg" d="M1362.2,1511.1c-0.3,67.2-3.7,140.4-11.9,218.7c-10.7,102.9-27.6,196-46.9,278
							c-434.2-0.4-868.3-0.8-1302.4-1.1c36.5-49.1,73.1-98.3,109.6-147.5c12.2-217.9,24.4-435.8,36.5-653.8
							c399.8-0.3,799.7-0.6,1199.6-0.9c4.5,24.7,8.4,51.8,10.9,81.1c3.1,35.7,3.7,68.7,2.8,98.3L1362.2,1511.1z"/>
						<g>
							<rect x="482.5" y="1582.1" class="st1" width="348.8" height="105.2"/>
							<text transform="matrix(1 0 0 1 501.974 1659.6071)" class="st2 st3 st4">ZAFIRO 2</text>
						</g>
					</g>

				</a>
			</g>
			</svg>
	</div>
</body>
</html>
