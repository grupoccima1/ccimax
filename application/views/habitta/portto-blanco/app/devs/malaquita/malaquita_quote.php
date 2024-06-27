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
					<h1 class="center-align">MALAQUITA</h1>
				</div>
			</div>
		</div>
		<svg version="1.1" id="CLÚSTER_MALAQUITA" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" viewBox="0 0 1366 1174" style="enable-background:new 0 0 1366 1174;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#03234B;}
	.st1{font-family:'CenturyGothic-Bold';}
	.st2{font-size:3.5594px;}
	.st3{font-size:3.8075px;}
	.st4{fill:none;stroke:#002856;stroke-width:3.5525;stroke-miterlimit:10;}
	.st5{fill:#002856;stroke:#8AA9BB;stroke-width:5.3287;stroke-miterlimit:10;}
	.st6{fill:#003A70;stroke:#8AA9BB;stroke-width:0.9739;stroke-miterlimit:10;}
	.st7{fill:#FFFFFF;}
	.st8{font-size:57.6381px;}
</style>
<g id="COMPLEMENTO">
	<g>
		<image style="overflow:visible;" width="1366" height="1174" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/malaquita/malaquita-general.jpg" >
		</image>
		<g>
			<text transform="matrix(0.2479 -0.9688 1.0737 0.2697 491.886 298.6137)" class="st0 st1 st2">ACCESO</text>
			<path class="st0" d="M498.8,293c0.4-1.9-0.8-3.8-2.8-4.3l1.2-4.9l3.1,5.2l3.1,5.2l-5.1,3.2l-5.1,3.3l1.2-4.9
				C496.3,296,498.3,294.9,498.8,293"/>
		</g>
		<g>
			<text transform="matrix(0.2237 -0.9745 1.0798 0.2267 508.9629 259.0922)" class="st0 st1 st3">SALIDA</text>
			<path class="st0" d="M502.7,251.6c0.4-2,2.5-3.2,4.7-2.9l1.2-5.2l-5.3,3.5l-5.3,3.5l3.3,5.3l3.3,5.3l1.2-5.2
				C503.6,255.5,502.2,253.6,502.7,251.6"/>
		</g>
		<g>
			<text transform="matrix(0.6988 -0.7153 0.7954 0.7701 151.0059 946.2712)" class="st0 st1 st2">ACCESO</text>
			<path class="st0" d="M159.7,944.8c1.3-1.4,1.2-3.7-0.3-5.2l3.5-3.7l0.1,6l0.1,6l-6,0.3l-6,0.3l3.5-3.7
				C156.1,946.2,158.4,946.2,159.7,944.8"/>
		</g>
		<g>
			<text transform="matrix(0.6807 -0.7323 0.8221 0.7359 183.7344 920.4758)" class="st0 st1 st3">SALIDA</text>
			<path class="st0" d="M182.1,910.7c1.4-1.5,3.8-1.5,5.5-0.2l3.6-3.9l-6.3,0.4l-6.3,0.4l0.2,6.2l0.2,6.2l3.6-3.9
				C180.9,914.5,180.8,912.2,182.1,910.7"/>
		</g>
	</g>
	<a href="#!/Portto_Blanco-Bernal/Malaquita_1" class="pb__condo">
		<g >
			<path class="pb__condo-bg" d="M476.8,307c-3.4,12.6-6.7,25.2-10.1,37.9c147.5,98.7,295,197.4,442.6,296.2
				c95.1-123.9,190.2-247.7,285.2-371.6c56.1-88.6,112.3-177.1,168.4-265.7c-280.8,0-561.6,0-842.4,0c-1,36-3.7,75.1-8.7,116.9
				c-5,41.6-11.6,80.2-19.1,115.3"/>
			<path class="pb__condo-bg" d="M476.8,307c-3.4,12.6-6.7,25.2-10.1,37.9c147.5,98.7,295,197.4,442.6,296.2
				c95.1-123.9,190.2-247.7,285.2-371.6c56.1-88.6,112.3-177.1,168.4-265.7c-280.8,0-561.6,0-842.4,0c-1,36-3.7,75.1-8.7,116.9
				c-5,41.6-11.6,80.2-19.1,115.3L476.8,307z"/>
			<g>
				<g>
					<rect x="625.8" y="188.6" class="st6" width="414.1" height="83.9"/>
					<text transform="matrix(1 0 0 1 641.3279 250.4647)" class="st7 st1 st8">MALAQUITA 1</text>
				</g>
			</g>
		</g>
	</a>
	
	<a href="#!/Portto_Blanco-Bernal/Malaquita_2" class="pb__condo">
		<g class="pb__condo-bg">
			<path  class="pb__condo-bg"  d="M128.6,939c-17.9,19.2-37.5,39.1-58.7,59.2c-21.5,20.4-42.6,39-62.9,56c-1.9,12.3-3.8,24.6-5.7,36.9
				c184,26.9,368,53.7,551.9,80.6C671.9,994.8,790.6,817.9,909.2,641c-147.5-98.7-295-197.4-442.6-296.2
				c-23.9,83-61.3,185.4-121.5,295.7c-53.8,98.6-111.9,178-163.4,239.3L128.6,939z"/>
			<path class="pb__condo-bg"d="M128.6,939c-17.9,19.2-37.5,39.1-58.7,59.2c-21.5,20.4-42.6,39-62.9,56c-1.9,12.3-3.8,24.6-5.7,36.9
				c184,26.9,368,53.7,551.9,80.6C671.9,994.8,790.6,817.9,909.2,641c-147.5-98.7-295-197.4-442.6-296.2
				c-23.9,83-61.3,185.4-121.5,295.7c-53.8,98.6-111.9,178-163.4,239.3L128.6,939z"/>
			<g>
				<g>
					<rect x="285.4" y="783.5" class="st6" width="414.1" height="83.9"/>
					<text transform="matrix(1 0 0 1 300.9994 845.3719)" class="st7 st1 st8">MALAQUITA 2</text>
				</g>
			</g>
		</g>
		
	</a>
</g>
</svg>


	</div>

</body>
</html>
