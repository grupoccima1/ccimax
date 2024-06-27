<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contet="ie=edge">
	<meta name="author" content="Ing. Saúl Fernando Torres Hernández">
	<meta name="description" content="Grúpo CCIMA S.A. de C.V." />
	<meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

	<title>Portto Blanco</title>

	<script type="text/javascript" src="media/assets/js/analytics.js"></script>

	<link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
	<script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body ng-controller="PBTundraQuoteCtrl as tundra">

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

				<a href="#!/portto_blanco" class="brand-logo white left"><img class="logo-pb" src="media/assets/img/habitta/portto-blanco/logos/logo.svg"></a>

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
										+52 1 442 291 2223
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
									+52 1 442 291 2223
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


	<div class="modal-dialog" ng-class="tundra.dialogDisplay">
		<div class="backdrop-dialog" ng-click="tundra.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="tundra.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

				<div class="divider"></div>

				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Portto Blanco {{tundra.propertyData.condominium}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{tundra.propertyData.number}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Área {{tundra.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; ${{tundra.propertyData.cost_m2}} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text" style="text-decoration: line-through;">Precio de ${{tundra.propertyData.total}} MXN</h6>
					</div>

					<div class="divider"></div>

					<div class="py-20 ">
					<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{tundra.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
						<h6 class="green-text futura-light">Precio de ${{tundra.propertyData.totalPlan1}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{tundra.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 180 Meses</h6>
						<h6 class="green-text futura-light">Precio de ${{tundra.propertyData.totalPlan2}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>

					<div class="divider"></div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">Compra en {{tundra.month}} y paga la primera mensualidad hasta {{tundra.nextMonth}}</h6>
						<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
						<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{tundra.month + ' ' + manglar.year}}</p>
					</div>
					
					<div class="divider"></div>

					<a class="p-20">
						<p class="blue-text futura-book">¡Apártalo ahora!</p>
						<p class="green-text">Con tan solo $10,000 MXN</p>
					</a>
				</div>

			</div>

			<div class="divider"></div>
			<div class="option-menu-dialog" ng-controller="ContactMenuCtrl as contactCtrl">
				<md-menu class="right mr-20 mt-10"  md-offset="0 -60">
					<button aria-label="Abrir Menu de Contacto" class="btn-flat futura-ligt" ng-click="contactCtrl.openMenu($mdMenu, $event)">
						Contacto
					</button>
					<md-menu-content width="4">
						<md-menu-item>
							<md-button disabled="disabled">
								+52 1 442 291 2223
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
	</div>

	<div class="plano_container">

		<div class="container mt-64">
			<div class="row quote-header">
				<div class="col s12">
					<h1 class="center-align">Tundra 1</h1>
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
				<p class="pl-40 py-2">DISPONIBLE</p>
			</div>
			<div>
				<div class="color-block pb__apart__bg left"></div>
				<p class="pl-40 py-2">NO DISPONIBLE</p>
			</div>
		</div>
        <div class="container">

        <svg version="1.1" id="CLUSTER__x2F__ETAPA__x2F__CONDO"
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1366 777"
	 style="enable-background:new 0 0 1366 777;" xml:space="preserve">
            <style type="text/css">
                .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#4077AF;}
                .st1{fill:#FBBD0B;}
                .st2{font-family:'CenturyGothic-Bold';}
                .st3{font-size:10.2614px;}
                .st4{fill:#FFFFFF;}
                .st5{font-family:'CenturyGothic';}
                .st6{font-size:10.4131px;}
                .st7{font-size:9.7603px;}
                .st8{font-size:10.4136px;}
                .st9{fill-rule:evenodd;clip-rule:evenodd;fill:#65778B;}
                .st10{opacity:0.6;fill-rule:evenodd;clip-rule:evenodd;fill:#DFA743;}
                .st11{fill-rule:evenodd;clip-rule:evenodd;fill:#DFA743;}
                .st12{font-size:10.4026px;}
                .st13{fill:none;stroke:#FFFFFF;stroke-width:0.75;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
                .st14{fill:none;stroke:#FFFFFF;stroke-width:0.1;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
                .st15{font-size:9.7593px;}
                .st16{font-size:9.617px;}
                .st17{fill:#4077AF;}
                .st18{fill:#65778B;}
                .st19{font-size:10.245px;}
                .st20{fill-rule:evenodd;clip-rule:evenodd;fill:#1D2D50;}
                .st21{fill:#20264C;}
                .st22{font-size:7.8482px;}
                .st23{fill:none;stroke:#20264C;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
            </style>
            <g id="BASE">
                <image style="overflow:visible;" width="1366" height="777" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/tundra/condos/tundra_1.jpg" >
                </image>
            </g>
            <g id="CLUSTER">
                <g id="ISLA_A_2_">
                    <g id="A-01"  class="property__active" ng-class="tundra.inmovablesClassList[0]" ng-click="tundra.showPropertyData(68, '1')">
                        <polygon id="AL-01" class="property pb-sprite-1" points="1339.8,534.9 1228.7,528.8 1231.6,469.5 1288.2,472.6 1342.8,475.6 			"/>
                        <text transform="matrix(0.934 5.398861e-02 -5.066977e-02 0.9987 1280.8435 493.9915)" class="st1 st2 st3">01</text>
                        <text transform="matrix(0.934 5.397974e-02 -5.069022e-02 0.9987 1265.1436 503.7445)"><tspan x="0" y="0" class="st4 st5 st6">1</tspan><tspan x="5.7" y="0" class="st4 st5 st6">2</tspan><tspan x="11.6" y="0" class="st4 st5 st6">8</tspan><tspan x="17.3" y="0" class="st4 st5 st6">.</tspan><tspan x="20.1" y="0" class="st4 st5 st6">0</tspan><tspan x="25.9" y="0" class="st4 st5 st6">0</tspan><tspan x="31.9" y="0" class="st4 st5 st6"> </tspan><tspan x="34.9" y="0" class="st4 st5 st6">m2</tspan></text>
                        <text transform="matrix(5.222271e-02 -1.0636 0.9984 5.583001e-02 1336.9619 515.1807)"><tspan x="0" y="0" class="st4 st5 st7">8</tspan><tspan x="5.5" y="0" class="st4 st5 st7">.</tspan><tspan x="8" y="0" class="st4 st5 st7">0</tspan><tspan x="13.5" y="0" class="st4 st5 st7">0</tspan></text>
                        <text transform="matrix(5.222271e-02 -1.0636 0.9984 5.583001e-02 1239.6979 509.5024)"><tspan x="0" y="0" class="st4 st5 st7">8</tspan><tspan x="5.4" y="0" class="st4 st5 st7">.</tspan><tspan x="8" y="0" class="st4 st5 st7">0</tspan><tspan x="13.4" y="0" class="st4 st5 st7">0</tspan></text>
                        <text transform="matrix(0.934 5.223818e-02 -4.902986e-02 0.9988 1274.4844 480.9821)"><tspan x="0" y="0" class="st4 st5 st8">1</tspan><tspan x="5.7" y="0" class="st4 st5 st8">6</tspan><tspan x="11.6" y="0" class="st4 st5 st8">.</tspan><tspan x="14.4" y="0" class="st4 st5 st8">0</tspan><tspan x="20.3" y="0" class="st4 st5 st8">0</tspan></text>
                    </g>
                    <g id="A-02" class="property__active" ng-class="tundra.inmovablesClassList[1]" ng-click="tundra.showPropertyData(68, '2')">
                        <polygon id="AL-02_1_" class="property pb-sprite-2" points="1225.9,588.1 1228.7,528.8 1339.8,534.9 1337,594.3 			"/>
                        <text transform="matrix(0.934 5.397974e-02 -5.069022e-02 0.9987 1262.1841 564.6522)"><tspan x="0" y="0" class="st4 st5 st6">1</tspan><tspan x="5.7" y="0" class="st4 st5 st6">2</tspan><tspan x="11.6" y="0" class="st4 st5 st6">8</tspan><tspan x="17.3" y="0" class="st4 st5 st6">.</tspan><tspan x="20.1" y="0" class="st4 st5 st6">0</tspan><tspan x="25.9" y="0" class="st4 st5 st6">0</tspan><tspan x="31.9" y="0" class="st4 st5 st6"> </tspan><tspan x="34.9" y="0" class="st4 st5 st6">m2</tspan></text>
                        <text transform="matrix(5.222271e-02 -1.0636 0.9984 5.583001e-02 1334.1506 574.5104)"><tspan x="0" y="0" class="st4 st5 st7">8</tspan><tspan x="5.4" y="0" class="st4 st5 st7">.</tspan><tspan x="8" y="0" class="st4 st5 st7">0</tspan><tspan x="13.4" y="0" class="st4 st5 st7">0</tspan></text>
                        <text transform="matrix(5.222271e-02 -1.0636 0.9984 5.583001e-02 1236.7456 568.835)"><tspan x="0" y="0" class="st4 st5 st7">8</tspan><tspan x="5.4" y="0" class="st4 st5 st7">.</tspan><tspan x="8" y="0" class="st4 st5 st7">0</tspan><tspan x="13.5" y="0" class="st4 st5 st7">0</tspan></text>
                        <text transform="matrix(0.934 5.223818e-02 -4.902986e-02 0.9988 1271.5298 541.8893)"><tspan x="0" y="0" class="st4 st5 st8">1</tspan><tspan x="5.7" y="0" class="st4 st5 st8">6</tspan><tspan x="11.6" y="0" class="st4 st5 st8">.</tspan><tspan x="14.4" y="0" class="st4 st5 st8">0</tspan><tspan x="20.3" y="0" class="st4 st5 st8">0</tspan></text>
                        <text transform="matrix(0.934 5.398861e-02 -5.066977e-02 0.9987 1277.889 554.2676)" class="st1 st2 st3">02</text>
                        <g>
                            <polygon class="st10" points="1248.6,567 1248.6,551.2 1256,559.1 				"/>
                            <polygon class="st11" points="1248.6,567 1241.2,559.1 1248.6,551.2 				"/>
                        </g>
                    </g>
                    <g id="A-03" class="property__active" ng-class="tundra.inmovablesClassList[2]" ng-click="tundra.showPropertyData(68, '3')">
                        <polygon id="AL-03" class="property pb-sprite-1" points="1222.9,647.4 1225.9,588.1 1337,594.3 1334.1,653.6 			"/>
                        <text transform="matrix(0.934 5.397974e-02 -5.069022e-02 0.9987 1259.2284 624.2925)"><tspan x="0" y="0" class="st4 st5 st6">1</tspan><tspan x="5.7" y="0" class="st4 st5 st6">28</tspan><tspan x="17.4" y="0" class="st4 st5 st6">.</tspan><tspan x="20.1" y="0" class="st4 st5 st6">0</tspan><tspan x="25.9" y="0" class="st4 st5 st6">0</tspan><tspan x="31.8" y="0" class="st4 st5 st6"> </tspan><tspan x="34.7" y="0" class="st4 st5 st6">m2</tspan></text>
                        <text transform="matrix(5.222271e-02 -1.0636 0.9984 5.583001e-02 1331.1927 633.8378)"><tspan x="0" y="0" class="st4 st5 st7">8</tspan><tspan x="5.4" y="0" class="st4 st5 st7">.</tspan><tspan x="8" y="0" class="st4 st5 st7">0</tspan><tspan x="13.5" y="0" class="st4 st5 st7">0</tspan></text>
                        <text transform="matrix(5.222271e-02 -1.0636 0.9984 5.583001e-02 1233.7819 628.163)"><tspan x="0" y="0" class="st4 st5 st7">8</tspan><tspan x="5.5" y="0" class="st4 st5 st7">.</tspan><tspan x="8" y="0" class="st4 st5 st7">0</tspan><tspan x="13.5" y="0" class="st4 st5 st7">0</tspan></text>
                        <text transform="matrix(0.934 5.223818e-02 -4.902986e-02 0.9988 1268.7241 599.6417)"><tspan x="0" y="0" class="st4 st5 st8">1</tspan><tspan x="5.7" y="0" class="st4 st5 st8">6</tspan><tspan x="11.6" y="0" class="st4 st5 st8">.</tspan><tspan x="14.4" y="0" class="st4 st5 st8">0</tspan><tspan x="20.3" y="0" class="st4 st5 st8">0</tspan></text>
                        <text transform="matrix(0.934 5.398861e-02 -5.066977e-02 0.9987 1275.0785 612.6525)" class="st1 st2 st3">03</text>
                    </g>
                    <g id="A-04" class="property__active" ng-class="tundra.inmovablesClassList[3]" ng-click="tundra.showPropertyData(68, '4')"> 
                        <polygon id="AL-04" class="property pb-sprite-2" points="1220.1,706.8 1222.9,647.4 1334.1,653.6 1331.3,712.9 			"/>
                        <text transform="matrix(0.934 5.397974e-02 -5.069022e-02 0.9987 1256.1226 686.4673)"><tspan x="0" y="0" class="st4 st5 st6">1</tspan><tspan x="5.8" y="0" class="st4 st5 st6">2</tspan><tspan x="11.6" y="0" class="st4 st5 st6">8</tspan><tspan x="17.4" y="0" class="st4 st5 st6">.</tspan><tspan x="20.3" y="0" class="st4 st5 st6">0</tspan><tspan x="26.1" y="0" class="st4 st5 st6">0</tspan><tspan x="31.8" y="0" class="st4 st5 st6"> </tspan><tspan x="34.9" y="0" class="st4 st5 st6">m2</tspan></text>
                        <text transform="matrix(5.222271e-02 -1.0636 0.9984 5.583001e-02 1328.3871 693.1708)"><tspan x="0" y="0" class="st4 st5 st7">8</tspan><tspan x="5.4" y="0" class="st4 st5 st7">.</tspan><tspan x="8" y="0" class="st4 st5 st7">0</tspan><tspan x="13.4" y="0" class="st4 st5 st7">0</tspan></text>
                        <text transform="matrix(5.222271e-02 -1.0636 0.9984 5.583001e-02 1230.9745 687.4919)"><tspan x="0" y="0" class="st4 st5 st7">8</tspan><tspan x="5.4" y="0" class="st4 st5 st7">.</tspan><tspan x="8" y="0" class="st4 st5 st7">0</tspan><tspan x="13.5" y="0" class="st4 st5 st7">0</tspan></text>
                        <text transform="matrix(0.934 5.223818e-02 -4.902986e-02 0.9988 1265.7649 659.1274)"><tspan x="0" y="0" class="st4 st5 st8">1</tspan><tspan x="5.8" y="0" class="st4 st5 st8">6</tspan><tspan x="11.6" y="0" class="st4 st5 st8">.</tspan><tspan x="14.4" y="0" class="st4 st5 st8">0</tspan><tspan x="20.3" y="0" class="st4 st5 st8">0</tspan></text>
                        <text transform="matrix(0.934 5.398861e-02 -5.066977e-02 0.9987 1271.9713 675.7643)" class="st1 st2 st3">04</text>
                    </g>
                    <g id="A-05" class="property__active" ng-class="tundra.inmovablesClassList[4]" ng-click="tundra.showPropertyData(68, '5')">
                        <polygon id="AL-05" class="property pb-sprite-1" points="1216.8,772.3 1220.1,706.8 1331.3,712.9 1328.3,772.3 			"/>
                        <text transform="matrix(0.934 5.397974e-02 -5.069022e-02 0.9987 1253.4589 744.5358)"><tspan x="0" y="0" class="st4 st5 st6">1</tspan><tspan x="5.7" y="0" class="st4 st5 st6">3</tspan><tspan x="11.6" y="0" class="st4 st5 st6">4</tspan><tspan x="17.3" y="0" class="st4 st5 st6">.</tspan><tspan x="20.1" y="0" class="st4 st5 st6">6</tspan><tspan x="25.9" y="0" class="st4 st5 st6">7</tspan><tspan x="31.9" y="0" class="st4 st5 st6"> </tspan><tspan x="34.9" y="0" class="st4 st5 st6">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 1260.2952 768.6338)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">6.02</tspan></text>
                        <text transform="matrix(5.222271e-02 -1.0636 0.9984 5.583001e-02 1325.431 752.4993)"><tspan x="0" y="0" class="st4 st5 st7">8</tspan><tspan x="5.4" y="0" class="st4 st5 st7">.</tspan><tspan x="8" y="0" class="st4 st5 st7">0</tspan><tspan x="13.5" y="0" class="st4 st5 st7">0</tspan></text>
                        <text transform="matrix(5.222271e-02 -1.0636 0.9984 5.583001e-02 1227.8755 749.9716)"><tspan x="0" y="0" class="st4 st5 st7">8</tspan><tspan x="5.5" y="0" class="st4 st5 st7">.</tspan><tspan x="8" y="0" class="st4 st5 st7">8</tspan><tspan x="13.5" y="0" class="st4 st5 st7">3</tspan></text>
                        <text transform="matrix(0.934 5.223818e-02 -4.902986e-02 0.9988 1262.96 718.2991)"><tspan x="0" y="0" class="st4 st5 st8">1</tspan><tspan x="5.7" y="0" class="st4 st5 st8">6</tspan><tspan x="11.6" y="0" class="st4 st5 st8">.</tspan><tspan x="14.4" y="0" class="st4 st5 st8">0</tspan><tspan x="20.1" y="0" class="st4 st5 st8">0</tspan></text>
                        <text transform="matrix(0.934 5.398861e-02 -5.066977e-02 0.9987 1269.166 732.0992)" class="st1 st2 st3">05</text>
                        <g>
                            <polygon class="st10" points="1241.2,749.8 1241.2,734 1248.6,741.9 				"/>
                            <polygon class="st11" points="1241.2,749.8 1233.8,741.9 1241.2,734 				"/>
                        </g>
                    </g>
                    <g id="LÍNEAS_DIVISORIAS">
                        <line class="st13" x1="1337" y1="594.3" x2="1225.9" y2="588.1"/>
                        <line class="st13" x1="1339.8" y1="534.9" x2="1228.7" y2="528.8"/>
                        <line class="st13" x1="1334.1" y1="653.6" x2="1222.9" y2="647.4"/>
                        <line class="st13" x1="1331.3" y1="712.9" x2="1220.1" y2="706.8"/>
                        <line class="st14" x1="1231.6" y1="469.5" x2="1342.8" y2="475.6"/>
                        <line class="st13" x1="1339.8" y1="534.9" x2="1228.7" y2="528.8"/>
                    </g>
                </g>
                <g id="ISLA_B_2_">
                    <g id="B-06" class="property__active" ng-class="tundra.inmovablesClassList[5]" ng-click="tundra.showPropertyData(68, '6')">
                        <polygon id="BL-06" class="property pb-sprite-2" points="1094.3,772.3 1094.3,653.4 1157.8,653.4 1152.1,772.3 			"/>
                        <text transform="matrix(0 -1.0653 1 0 1103.7542 725.7236)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(5.222271e-02 -1.0636 0.9984 5.583001e-02 1153.655 725.6772)" class="st4 st5 st7">16.02</text>
                        <text transform="matrix(0 -1.0653 1 0 1129.3303 739.9307)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">39</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.9" y="0" class="st4 st5 st15">6</tspan><tspan x="24.3" y="0" class="st4 st5 st15">1</tspan><tspan x="29.8" y="0" class="st4 st5 st15"> </tspan><tspan x="32.5" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 1118.9495 718.291)"><tspan x="0" y="0" class="st1 st2 st16">0</tspan><tspan x="5.2" y="0" class="st1 st2 st16">6</tspan></text>
                        <g>
                            <polygon class="st10" points="1123.8,683.9 1123.8,668.1 1131.2,676 				"/>
                            <polygon class="st11" points="1123.8,683.9 1116.5,676 1123.8,668.1 				"/>
                        </g>
                        <text transform="matrix(1.0653 0 0 1 1116.4524 767.7363)" class="st4 st5 st15">8.31</text>
                        <text transform="matrix(1.0653 0 0 1 1116.4524 663.1738)" class="st4 st5 st15">9.14</text>
                    </g>
                    <g id="B-07" class="property__active" ng-class="tundra.inmovablesClassList[6]" ng-click="tundra.showPropertyData(68, '7')">
                        <rect id="BL-07" x="1031.6" y="653.4" class="property pb-sprite-1" width="62.7" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 1040.4768 725.7236)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.8" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 1068.4202 739.9307)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.5" y="0" class="st4 st5 st15">4</tspan><tspan x="10.8" y="0" class="st4 st5 st15">4</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan><tspan x="24.4" y="0" class="st4 st5 st15">0</tspan><tspan x="29.8" y="0" class="st4 st5 st15"> </tspan><tspan x="32.6" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 1058.0471 718.291)"><tspan x="0" y="0" class="st1 st2 st16">0</tspan><tspan x="5.2" y="0" class="st1 st2 st16">7</tspan></text>
                        <g>
                            <polygon class="st10" points="1063.4,683.9 1063.4,668.1 1070.8,676 				"/>
                            <polygon class="st11" points="1063.4,683.9 1056.1,676 1063.4,668.1 				"/>
                        </g>
                        <text transform="matrix(1.0653 0 0 1 1053.009 767.7363)" class="st4 st5 st15">9.00</text>
                        <text transform="matrix(1.0653 0 0 1 1053.009 663.1738)" class="st4 st5 st15">9.00</text>
                    </g>
                    <g id="B-08" class="property__active" ng-class="tundra.inmovablesClassList[7]" ng-click="tundra.showPropertyData(68, '8')">
                        <rect id="BL-08" x="969.1" y="653.5" class="property pb-sprite-2" width="62.5" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 977.3284 725.7236)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.8" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 1005.2932 739.9307)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">44</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan><tspan x="24.3" y="0" class="st4 st5 st15">0</tspan><tspan x="29.8" y="0" class="st4 st5 st15"> </tspan><tspan x="32.6" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 993.4421 718.291)"><tspan x="0" y="0" class="st1 st2 st16">0</tspan><tspan x="5.2" y="0" class="st1 st2 st16">8</tspan></text>
                        <g>
                            <polygon class="st11" points="997.6,683.9 990.2,676 997.6,668.1 				"/>
                            <polyline class="st10" points="1005,676 997.6,668.1 997.6,683.9 				"/>
                        </g>
                        <text transform="matrix(1.0653 0 0 1 990.2004 767.7363)" class="st4 st5 st15">9.00</text>
                        <text transform="matrix(1.0653 0 0 1 990.2004 663.1738)" class="st4 st5 st15">9.00</text>
                    </g>
                    <g id="B-09" class="property__active" ng-class="tundra.inmovablesClassList[8]" ng-click="tundra.showPropertyData(68, '9')">
                        <rect id="BL-09" x="906.4" y="653.4" class="property pb-sprite-1" width="62.7" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 915.1091 725.7236)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan><tspan x="18.8" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 943.3494 739.9307)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">4</tspan><tspan x="10.8" y="0" class="st4 st5 st15">4</tspan><tspan x="16.1" y="0" class="st4 st5 st15">.</tspan><tspan x="18.8" y="0" class="st4 st5 st15">00</tspan><tspan x="29.7" y="0" class="st4 st5 st15"> </tspan><tspan x="32.6" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 932.5349 718.291)"><tspan x="0" y="0" class="st1 st2 st16">0</tspan><tspan x="5.2" y="0" class="st1 st2 st16">9</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 928.8118 767.7363)" class="st4 st5 st15">9.00</text>
                        <text transform="matrix(1.0653 0 0 1 928.8118 663.1738)" class="st4 st5 st15">9.00</text>
                    </g>
                    <g id="B-10" class="property__active" ng-class="tundra.inmovablesClassList[9]" ng-click="tundra.showPropertyData(68, '10')">
                        <rect id="BL-10" x="843.8" y="653.4" class="property pb-sprite-2" width="62.5" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 851.9812 725.7236)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.5" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 879.4832 739.9307)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">44</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.8" y="0" class="st4 st5 st15">00</tspan><tspan x="29.7" y="0" class="st4 st5 st15"> </tspan><tspan x="32.5" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 868.2273 718.291)"><tspan x="0" y="0" class="st1 st2 st16">1</tspan><tspan x="5.4" y="0" class="st1 st2 st16">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 865.8645 767.7363)" class="st4 st5 st15">9.00</text>
                        <text transform="matrix(1.0653 0 0 1 865.8645 663.1738)" class="st4 st5 st15">9.00</text>
                    </g>
                    <g id="B-11" class="property__active" ng-class="tundra.inmovablesClassList[10]" ng-click="tundra.showPropertyData(68, '11')">
                        <rect id="BL-11" x="788.1" y="653.4" class="property pb-sprite-1" width="55.7" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 796.4011 725.7236)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.5" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 820.6443 739.9307)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">28</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan><tspan x="24.3" y="0" class="st4 st5 st15">0</tspan><tspan x="29.8" y="0" class="st4 st5 st15"> </tspan><tspan x="32.5" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 810.2732 718.1338)"><tspan x="0" y="0" class="st1 st2 st16">1</tspan><tspan x="4.8" y="0" class="st1 st2 st16">1</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 806.7668 767.7363)" class="st4 st5 st15">8.00</text>
                        <text transform="matrix(1.0653 0 0 1 806.7668 663.1738)" class="st4 st5 st15">8.00</text>
                    </g>
                    <g id="B-12" class="property__active" ng-class="tundra.inmovablesClassList[11]" ng-click="tundra.showPropertyData(68, '12')">
                        <rect id="BL-12" x="732.5" y="653.4" class="property pb-sprite-2" width="55.6" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 741.2566 725.7236)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.8" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 766.238 739.9307)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.5" y="0" class="st4 st5 st15">2</tspan><tspan x="10.8" y="0" class="st4 st5 st15">8</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan><tspan x="24.4" y="0" class="st4 st5 st15">0</tspan><tspan x="29.8" y="0" class="st4 st5 st15"> </tspan><tspan x="32.6" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 755.8699 718.291)"><tspan x="0" y="0" class="st1 st2 st16">1</tspan><tspan x="5.4" y="0" class="st1 st2 st16">2</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 751.1165 767.7363)" class="st4 st5 st15">8.00</text>
                        <text transform="matrix(1.0653 0 0 1 751.1165 663.1738)" class="st4 st5 st15">8.00</text>
                    </g>
                    <g id="B-13" class="property__active" ng-class="tundra.inmovablesClassList[12]" ng-click="tundra.showPropertyData(68, '13')">
                        <rect id="BL-13" x="676.9" y="653.4" class="property pb-sprite-1" width="55.6" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 685.3689 725.7236)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 709.6169 739.9307)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">28</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan><tspan x="24.3" y="0" class="st4 st5 st15">0</tspan><tspan x="29.8" y="0" class="st4 st5 st15"> </tspan><tspan x="32.5" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 698.2166 718.291)"><tspan x="0" y="0" class="st1 st2 st16">1</tspan><tspan x="5.4" y="0" class="st1 st2 st16">3</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 695.2825 767.7363)" class="st4 st5 st15">8.00</text>
                        <text transform="matrix(1.0653 0 0 1 695.2825 663.1738)" class="st4 st5 st15">8.00</text>
                    </g>
                    <g id="BL-14" class="property__active" ng-class="tundra.inmovablesClassList[13]" ng-click="tundra.showPropertyData(68, '14')"> 
                        <rect id="BL-14" x="621.2" y="653.4" class="property pb-sprite-2" width="55.7" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 629.3406 725.7236)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.5" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 654.9177 739.9307)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.5" y="0" class="st4 st5 st15">2</tspan><tspan x="10.8" y="0" class="st4 st5 st15">8</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan><tspan x="24.4" y="0" class="st4 st5 st15">0</tspan><tspan x="29.8" y="0" class="st4 st5 st15"> </tspan><tspan x="32.6" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 643.6648 718.291)"><tspan x="0" y="0" class="st1 st2 st16">1</tspan><tspan x="5.2" y="0" class="st1 st2 st16">4</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 639.2727 767.7363)" class="st4 st5 st15">8.00</text>
                        <text transform="matrix(1.0653 0 0 1 639.2727 663.1738)" class="st4 st5 st15">8.00</text>
                    </g>
                    <g id="B-15" class="property__active" ng-class="tundra.inmovablesClassList[14]" ng-click="tundra.showPropertyData(68, '15')">
                        <rect id="BL-15" x="565.6" y="653.4" class="property pb-sprite-1" width="55.6" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 573.6052 725.7236)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.8" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 598.8816 739.9307)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.5" y="0" class="st4 st5 st15">2</tspan><tspan x="10.8" y="0" class="st4 st5 st15">8</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan><tspan x="24.4" y="0" class="st4 st5 st15">0</tspan><tspan x="29.8" y="0" class="st4 st5 st15"> </tspan><tspan x="32.6" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 588.5203 718.291)"><tspan x="0" y="0" class="st1 st2 st16">1</tspan><tspan x="5.2" y="0" class="st1 st2 st16">5</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 583.804 767.7363)" class="st4 st5 st15">8.00</text>
                        <text transform="matrix(1.0653 0 0 1 583.804 663.1738)" class="st4 st5 st15">8.00</text>
                    </g>
                    <g id="B-16" class="property__active" ng-class="tundra.inmovablesClassList[15]" ng-click="tundra.showPropertyData(68, '16')">
                        <rect id="BL-16" x="509.9" y="653.4" class="property pb-sprite-2" width="55.7" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 517.7234 725.7236)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 543.448 739.9307)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">28</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.8" y="0" class="st4 st5 st15">00</tspan><tspan x="29.7" y="0" class="st4 st5 st15"> </tspan><tspan x="32.5" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 532.9373 718.291)"><tspan x="0" y="0" class="st1 st2 st16">1</tspan><tspan x="5.2" y="0" class="st1 st2 st16">6</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 528.1497 767.7363)" class="st4 st5 st15">8.00</text>
                        <text transform="matrix(1.0653 0 0 1 528.1497 663.1738)" class="st4 st5 st15">8.00</text>
                    </g>
                    <g id="B-17" class="property__active" ng-class="tundra.inmovablesClassList[16]" ng-click="tundra.showPropertyData(68, '17')">
                        <rect id="BL-17" x="454.3" y="653.4" class="property pb-sprite-1" width="55.6" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 462.5769 725.7236)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.8" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 488.4539 739.9307)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">28</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.8" y="0" class="st4 st5 st15">00</tspan><tspan x="29.7" y="0" class="st4 st5 st15"> </tspan><tspan x="32.5" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 476.9089 718.291)"><tspan x="0" y="0" class="st1 st2 st16">1</tspan><tspan x="5.2" y="0" class="st1 st2 st16">7</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 472.6809 767.7363)" class="st4 st5 st15">8.00</text>
                        <text transform="matrix(1.0653 0 0 1 472.6809 663.1738)" class="st4 st5 st15">8.00</text>
                    </g>
                    <g id="B-18" class="property__active" ng-class="tundra.inmovablesClassList[17]" ng-click="tundra.showPropertyData(68, '18')">
                        <rect id="BL-18" x="398.6" y="653.4" class="property pb-sprite-2" width="55.7" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 406.1082 725.7236)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.8" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 431.9783 739.9307)"><tspan x="0" y="0" class="st4 st5 st15">12</tspan><tspan x="10.9" y="0" class="st4 st5 st15">8</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan><tspan x="24.4" y="0" class="st4 st5 st15">0</tspan><tspan x="29.9" y="0" class="st4 st5 st15"> </tspan><tspan x="32.8" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 421.1765 718.291)"><tspan x="0" y="0" class="st1 st2 st16">1</tspan><tspan x="5.4" y="0" class="st1 st2 st16">8</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 416.7317 767.7363)" class="st4 st5 st15">8.00</text>
                        <text transform="matrix(1.0653 0 0 1 416.7317 663.1738)" class="st4 st5 st15">8.00</text>
                    </g>
                    <g id="B-19" class="property__active" ng-class="tundra.inmovablesClassList[18]" ng-click="tundra.showPropertyData(68, '19')">
                        <rect id="BL-19" x="343" y="653.4" class="property pb-sprite-1" width="55.6" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 351.5583 725.7236)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan><tspan x="18.8" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 375.8015 739.9307)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">28</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.8" y="0" class="st4 st5 st15">00</tspan><tspan x="29.7" y="0" class="st4 st5 st15"> </tspan><tspan x="32.5" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 365.5886 718.291)"><tspan x="0" y="0" class="st1 st2 st16">1</tspan><tspan x="5.2" y="0" class="st1 st2 st16">9</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 361.5051 767.7363)" class="st4 st5 st15">8.00</text>
                        <text transform="matrix(1.0653 0 0 1 361.5051 663.1738)" class="st4 st5 st15">8.00</text>
                    </g>
                    <g id="B-20" class="property__active" ng-class="tundra.inmovablesClassList[19]" ng-click="tundra.showPropertyData(68, '20')">
                        <rect id="BL-20" x="287.2" y="653.4" class="property pb-sprite-2" width="55.7" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 295.3748 725.7236)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan><tspan x="18.8" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 321.3943 739.9307)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.5" y="0" class="st4 st5 st15">2</tspan><tspan x="10.8" y="0" class="st4 st5 st15">8</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.9" y="0" class="st4 st5 st15">00</tspan><tspan x="29.8" y="0" class="st4 st5 st15"> </tspan><tspan x="32.7" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 310.5955 718.291)"><tspan x="0" y="0" class="st1 st2 st16">2</tspan><tspan x="5.2" y="0" class="st1 st2 st16">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 305.1887 767.7363)" class="st4 st5 st15">8.00</text>
                        <text transform="matrix(1.0653 0 0 1 305.1887 663.1738)" class="st4 st5 st15">8.00</text>
                    </g>
                    <g id="B-21" class="property__active" ng-class="tundra.inmovablesClassList[20]" ng-click="tundra.showPropertyData(68, '21')">
                        <rect id="BL-21" x="231.7" y="653.4" class="property pb-sprite-1" width="55.6" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 240.3806 725.7236)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.5" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 265.6599 739.9307)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">2</tspan><tspan x="10.8" y="0" class="st4 st5 st15">8</tspan><tspan x="16.1" y="0" class="st4 st5 st15">.</tspan><tspan x="18.8" y="0" class="st4 st5 st15">0</tspan><tspan x="24.3" y="0" class="st4 st5 st15">0</tspan><tspan x="29.7" y="0" class="st4 st5 st15"> </tspan><tspan x="32.5" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 253.2361 718.291)"><tspan x="0" y="0" class="st1 st2 st16">2</tspan><tspan x="5.2" y="0" class="st1 st2 st16">1</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 250.0832 767.7363)" class="st4 st5 st15">8.00</text>
                        <text transform="matrix(1.0653 0 0 1 250.0832 663.1738)" class="st4 st5 st15">8.00</text>
                    </g>
                    <g id="B-22" class="property__active" ng-class="tundra.inmovablesClassList[21]" ng-click="tundra.showPropertyData(68, '22')">
                        <rect id="BL-22" x="176.1" y="653.4" class="property pb-sprite-2" width="55.6" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 185.6824 725.7236)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.8" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 208.0027 739.9307)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.5" y="0" class="st4 st5 st15">2</tspan><tspan x="10.8" y="0" class="st4 st5 st15">8</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.9" y="0" class="st4 st5 st15">00</tspan><tspan x="29.8" y="0" class="st4 st5 st15"> </tspan><tspan x="32.7" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 198.239 718.291)"><tspan x="0" y="0" class="st1 st2 st16">2</tspan><tspan x="5.2" y="0" class="st1 st2 st16">2</tspan></text>
                        <g>
                            <polygon class="st10" points="205.6,685.8 205.6,670 213,677.9 				"/>
                            <polygon class="st11" points="205.6,685.8 198.2,677.9 205.6,670 				"/>
                        </g>
                        <text transform="matrix(1.0653 0 0 1 194.2512 663.1738)" class="st4 st5 st15">8.00</text>
                        <text transform="matrix(1.0653 0 0 1 194.2512 767.7363)" class="st4 st5 st15">8.00</text>
                    </g>
                    <g id="LÍNEAS_DIVISORIAS_1_">
                        <line class="st13" x1="231.7" y1="772.3" x2="231.7" y2="653.4"/>
                        <line class="st13" x1="287.2" y1="772.3" x2="287.2" y2="653.4"/>
                        <line class="st13" x1="343" y1="772.3" x2="343" y2="653.4"/>
                        <line class="st13" x1="398.6" y1="772.3" x2="398.6" y2="653.4"/>
                        <line class="st13" x1="454.3" y1="772.3" x2="454.3" y2="653.4"/>
                        <line class="st13" x1="509.9" y1="772.3" x2="509.9" y2="653.4"/>
                        <line class="st13" x1="565.6" y1="772.3" x2="565.6" y2="653.4"/>
                        <line class="st13" x1="621.2" y1="772.3" x2="621.2" y2="653.4"/>
                        <line class="st13" x1="676.9" y1="772.3" x2="676.9" y2="653.4"/>
                        <line class="st13" x1="732.5" y1="772.3" x2="732.5" y2="653.4"/>
                        <line class="st13" x1="788.1" y1="772.3" x2="788.1" y2="653.4"/>
                        <line class="st13" x1="843.8" y1="772.3" x2="843.8" y2="653.4"/>
                        <line class="st13" x1="906.4" y1="772.3" x2="906.4" y2="653.4"/>
                        <line class="st13" x1="1094.3" y1="772.3" x2="1094.3" y2="653.4"/>
                        <line class="st13" x1="969.1" y1="772.3" x2="969.1" y2="653.4"/>
                        <line class="st13" x1="1031.6" y1="772.3" x2="1031.6" y2="653.4"/>
                        <line class="st13" x1="1094.3" y1="772.3" x2="1094.3" y2="653.4"/>
                    </g>
                </g>
                <g id="ISLA_C_2_">
                    <g id="C-23" class="property__active" ng-class="tundra.inmovablesClassList[22]" ng-click="tundra.showPropertyData(68, '23')">
                        <rect id="CL-23" x="0.1" y="712.7" class="property pb-sprite-2" width="111.2" height="59.5"/>
                        <text transform="matrix(0.9369 0 0 1 43.4597 768.7354)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">6</tspan><tspan x="11.5" y="0" class="st4 st5 st12">.</tspan><tspan x="14.2" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0 -0.9369 1 0 108.3557 752.1436)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0 -0.9369 1 0 11.0847 752.1436)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 43.4597 721.6113)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">6</tspan><tspan x="11.5" y="0" class="st4 st5 st12">.</tspan><tspan x="14.2" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 30.1531 748.75)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">28.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">0</tspan><tspan x="25.9" y="0" class="st4 st5 st12">0</tspan><tspan x="31.8" y="0" class="st4 st5 st12"> </tspan><tspan x="34.8" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 50.2585 736.916)"><tspan x="0" y="0" class="st1 st2 st19">2</tspan><tspan x="5.7" y="0" class="st1 st2 st19">3</tspan></text>
                        <g>
                            <polygon class="st10" points="92.5,749.7 92.5,733.9 99.9,741.8 				"/>
                            <polygon class="st11" points="92.5,749.7 85.2,741.8 92.5,733.9 				"/>
                        </g>
                    </g>
                    <g id="C-24" class="property__active" ng-class="tundra.inmovablesClassList[23]" ng-click="tundra.showPropertyData(68, '24')">
                        <rect id="CL-24" x="0" y="653.4" class="property pb-sprite-1" width="111.2" height="59.3"/>
                        <text transform="matrix(0 -0.9369 1 0 108.3557 691.6318)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0 -0.9369 1 0 11.0847 691.6318)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 43.4597 662.915)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">6</tspan><tspan x="11.5" y="0" class="st4 st5 st12">.</tspan><tspan x="14.2" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 30.1531 691.6338)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">28.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">0</tspan><tspan x="25.9" y="0" class="st4 st5 st12">0</tspan><tspan x="31.8" y="0" class="st4 st5 st12"> </tspan><tspan x="34.8" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 50.2585 677.9033)"><tspan x="0" y="0" class="st1 st2 st19">2</tspan><tspan x="5.7" y="0" class="st1 st2 st19">4</tspan></text>
                    </g>
                    <g id="C-25" class="property__active" ng-class="tundra.inmovablesClassList[24]" ng-click="tundra.showPropertyData(68, '25')">
                        <rect id="CL-25" x="0.1" y="594" class="property pb-sprite-2" width="111.2" height="59.5"/>
                        <text transform="matrix(0 -0.9369 1 0 108.3557 633.8369)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0 -0.9369 1 0 11.0847 633.8369)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 43.4597 605.002)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">6</tspan><tspan x="11.5" y="0" class="st4 st5 st12">.</tspan><tspan x="14.2" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 30.5984 632.3047)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">2</tspan><tspan x="11.5" y="0" class="st4 st5 st12">8</tspan><tspan x="17.2" y="0" class="st4 st5 st12">.</tspan><tspan x="20" y="0" class="st4 st5 st12">0</tspan><tspan x="25.8" y="0" class="st4 st5 st12">0</tspan><tspan x="31.5" y="0" class="st4 st5 st12"> </tspan><tspan x="34.5" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 50.2585 620.3076)"><tspan x="0" y="0" class="st1 st2 st19">2</tspan><tspan x="5.7" y="0" class="st1 st2 st19">5</tspan></text>
                    </g>
                    <g id="C-26" class="property__active" ng-class="tundra.inmovablesClassList[25]" ng-click="tundra.showPropertyData(68, '26')">
                        <rect id="CL-26" x="0" y="534.6" class="property pb-sprite-1" width="111.2" height="59.3"/>
                        <text transform="matrix(0 -0.9369 1 0 108.3557 574.5088)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0 -0.9369 1 0 11.0847 574.5088)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 43.4597 545.6758)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">6</tspan><tspan x="11.5" y="0" class="st4 st5 st12">.</tspan><tspan x="14.2" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 30.1531 572.6562)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">28.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">0</tspan><tspan x="25.9" y="0" class="st4 st5 st12">0</tspan><tspan x="31.8" y="0" class="st4 st5 st12"> </tspan><tspan x="34.8" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 50.2585 561.6123)"><tspan x="0" y="0" class="st1 st2 st19">2</tspan><tspan x="5.7" y="0" class="st1 st2 st19">6</tspan></text>
                    </g>
                    <g id="C-27" class="property__active" ng-class="tundra.inmovablesClassList[26]" ng-click="tundra.showPropertyData(68, '27')">
                        <rect id="CL-27" x="0.1" y="475.2" class="property pb-sprite-2" width="111.2" height="59.5"/>
                        <text transform="matrix(0 -0.9369 1 0 108.3557 515.1807)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0 -0.9369 1 0 11.0847 515.1807)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 43.4597 486.1885)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">6</tspan><tspan x="11.5" y="0" class="st4 st5 st12">.</tspan><tspan x="14.2" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 30.1531 512.3809)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">28.0</tspan><tspan x="25.9" y="0" class="st4 st5 st12">0</tspan><tspan x="31.8" y="0" class="st4 st5 st12"> </tspan><tspan x="34.8" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 50.2585 502.2812)"><tspan x="0" y="0" class="st1 st2 st19">2</tspan><tspan x="5.7" y="0" class="st1 st2 st19">7</tspan></text>
                    </g>
                    <g id="C-28" class="property__active" ng-class="tundra.inmovablesClassList[27]" ng-click="tundra.showPropertyData(68, '28')">
                        <rect id="CL-28" x="0" y="416" class="property pb-sprite-1" width="111.2" height="59.3"/>
                        <text transform="matrix(0 -0.9369 1 0 108.3557 455.1006)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0 -0.9369 1 0 11.0847 455.1006)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 43.4597 426.8594)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">6</tspan><tspan x="11.5" y="0" class="st4 st5 st12">.</tspan><tspan x="14.2" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 30.1531 452.7344)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">28.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">0</tspan><tspan x="25.9" y="0" class="st4 st5 st12">0</tspan><tspan x="31.8" y="0" class="st4 st5 st12"> </tspan><tspan x="34.8" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 50.2585 441.0586)"><tspan x="0" y="0" class="st1 st2 st19">2</tspan><tspan x="5.6" y="0" class="st1 st2 st19">8</tspan></text>
                    </g>
                    <g id="C-29" class="property__active" ng-class="tundra.inmovablesClassList[28]" ng-click="tundra.showPropertyData(68, '29')">
                        <rect id="CL-29" x="0.1" y="356.5" class="property pb-sprite-2" width="111.2" height="59.5"/>
                        <text transform="matrix(0 -0.9369 1 0 108.3557 395.8877)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0 -0.9369 1 0 11.0847 395.8877)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 43.4597 368.1621)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">6</tspan><tspan x="11.5" y="0" class="st4 st5 st12">.</tspan><tspan x="14.2" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 30.1531 394.1992)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">28.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">0</tspan><tspan x="25.9" y="0" class="st4 st5 st12">0</tspan><tspan x="31.8" y="0" class="st4 st5 st12"> </tspan><tspan x="34.8" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 50.2585 382.5215)"><tspan x="0" y="0" class="st1 st2 st19">2</tspan><tspan x="5.6" y="0" class="st1 st2 st19">9</tspan></text>
                    </g>
                    <g id="C-30" class="property__active" ng-class="tundra.inmovablesClassList[29]" ng-click="tundra.showPropertyData(68, '30')">
                        <rect id="CL-30" x="0" y="297.2" class="property pb-sprite-1" width="111.2" height="59.3"/>
                        <text transform="matrix(0 -0.9369 1 0 108.3557 336.6729)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0 -0.9369 1 0 11.0847 336.6729)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 43.4597 308.0439)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">6</tspan><tspan x="11.5" y="0" class="st4 st5 st12">.</tspan><tspan x="14.2" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 30.1531 334.3945)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">28.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">0</tspan><tspan x="25.9" y="0" class="st4 st5 st12">0</tspan><tspan x="31.8" y="0" class="st4 st5 st12"> </tspan><tspan x="34.8" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 50.2585 325.0869)"><tspan x="0" y="0" class="st1 st2 st19">3</tspan><tspan x="5.6" y="0" class="st1 st2 st19">0</tspan></text>
                    </g>
                    <g id="C-31" class="property__active" ng-class="tundra.inmovablesClassList[30]" ng-click="tundra.showPropertyData(68, '31')">
                        <rect id="CL-31" x="0.1" y="237.7" class="property pb-sprite-2" width="111.2" height="59.5"/>
                        <text transform="matrix(0 -0.9369 1 0 108.3557 276.6436)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0 -0.9369 1 0 11.0847 276.6436)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 43.4597 249.6631)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">6</tspan><tspan x="11.5" y="0" class="st4 st5 st12">.</tspan><tspan x="14.2" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 30.1531 275.8555)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">28.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">0</tspan><tspan x="25.9" y="0" class="st4 st5 st12">0</tspan><tspan x="31.8" y="0" class="st4 st5 st12"> </tspan><tspan x="34.8" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 50.2585 264.1797)"><tspan x="0" y="0" class="st1 st2 st19">3</tspan><tspan x="5.6" y="0" class="st1 st2 st19">1</tspan></text>
                    </g>
                    <g id="C-32" class="property__active" ng-class="tundra.inmovablesClassList[31]" ng-click="tundra.showPropertyData(68, '32')">
                        <rect id="CL-32" x="0" y="178.4" class="property pb-sprite-1" width="111.2" height="59.3"/>
                        <text transform="matrix(0 -0.9369 1 0 108.3557 218.0654)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0 -0.9369 1 0 11.0847 218.0654)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 43.4597 188.7529)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">6</tspan><tspan x="11.5" y="0" class="st4 st5 st12">.</tspan><tspan x="14.2" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 30.1531 216.3672)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">28.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">0</tspan><tspan x="25.9" y="0" class="st4 st5 st12">0</tspan><tspan x="31.8" y="0" class="st4 st5 st12"> </tspan><tspan x="34.8" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 50.2585 205.167)"><tspan x="0" y="0" class="st1 st2 st19">3</tspan><tspan x="5.6" y="0" class="st1 st2 st19">2</tspan></text>
                    </g>
                    <g id="C-33" class="property__active" ng-class="tundra.inmovablesClassList[32]" ng-click="tundra.showPropertyData(68, '33')">
                        <rect id="CL-33" x="0.1" y="118.7" class="property pb-sprite-2" width="111.2" height="59.5"/>
                        <text transform="matrix(0 -0.9369 1 0 108.3557 157.6416)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0 -0.9369 1 0 11.0847 157.6416)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 43.4597 130.1309)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">6</tspan><tspan x="11.5" y="0" class="st4 st5 st12">.</tspan><tspan x="14.2" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 30.1531 158.5332)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">28.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">0</tspan><tspan x="25.9" y="0" class="st4 st5 st12">0</tspan><tspan x="31.8" y="0" class="st4 st5 st12"> </tspan><tspan x="34.8" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 50.2585 146.1514)"><tspan x="0" y="0" class="st1 st2 st19">3</tspan><tspan x="5.6" y="0" class="st1 st2 st19">3</tspan></text>
                    </g>
                    <g id="C-34" class="property__active" ng-class="tundra.inmovablesClassList[33]" ng-click="tundra.showPropertyData(68, '34')">
                        <rect id="CL-34" x="0" y="59.5" class="property pb-sprite-1" width="111.2" height="59.3"/>
                        <text transform="matrix(0 -0.9369 1 0 108.3557 99.1279)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0 -0.9369 1 0 11.0847 99.1279)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 43.4597 69.624)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">6</tspan><tspan x="11.5" y="0" class="st4 st5 st12">.</tspan><tspan x="14.2" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 30.1531 99.1309)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">28.0</tspan><tspan x="25.9" y="0" class="st4 st5 st12">0</tspan><tspan x="31.8" y="0" class="st4 st5 st12"> </tspan><tspan x="34.8" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 50.2585 89.6631)"><tspan x="0" y="0" class="st1 st2 st19">3</tspan><tspan x="5.7" y="0" class="st1 st2 st19">4</tspan></text>
                    </g>
                    <g id="C-35" class="property__active" ng-class="tundra.inmovablesClassList[34]" ng-click="tundra.showPropertyData(68, '35')">
                        <rect id="CL-35" x="0.1" y="0" class="property pb-sprite-2" width="111.2" height="59.5"/>
                        <text transform="matrix(0 -0.9369 1 0 108.3557 38.2236)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0 -0.9369 1 0 11.0847 38.2236)"><tspan x="0" y="0" class="st4 st5 st12">8</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.</tspan><tspan x="8.4" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 43.4597 10.2939)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">6</tspan><tspan x="11.5" y="0" class="st4 st5 st12">.</tspan><tspan x="14.2" y="0" class="st4 st5 st12">00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 30.1531 39.3281)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">28.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">0</tspan><tspan x="25.9" y="0" class="st4 st5 st12">0</tspan><tspan x="31.8" y="0" class="st4 st5 st12"> </tspan><tspan x="34.8" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 50.2585 28.4414)"><tspan x="0" y="0" class="st1 st2 st19">3</tspan><tspan x="5.7" y="0" class="st1 st2 st19">5</tspan></text>
                        <g>
                            <polygon class="st10" points="92,36.2 92,20.4 99.3,28.3 				"/>
                            <polygon class="st11" points="92,36.2 84.6,28.3 92,20.4 				"/>
                        </g>
                    </g>
                    <g id="LÍNEAS_DIVISORIAS_2_">
                        <line class="st13" x1="0" y1="59.4" x2="111.3" y2="59.4"/>
                        <line class="st13" x1="0" y1="118.9" x2="111.3" y2="118.9"/>
                        <line class="st13" x1="0" y1="178.2" x2="111.3" y2="178.2"/>
                        <line class="st13" x1="0" y1="237.7" x2="111.3" y2="237.7"/>
                        <line class="st13" x1="0" y1="297" x2="111.3" y2="297"/>
                        <line class="st13" x1="0" y1="356.5" x2="111.3" y2="356.5"/>
                        <line class="st13" x1="0" y1="415.8" x2="111.3" y2="415.8"/>
                        <line class="st13" x1="0" y1="475.1" x2="111.3" y2="475.1"/>
                        <line class="st13" x1="0" y1="534.6" x2="111.3" y2="534.6"/>
                        <line class="st13" x1="0" y1="594" x2="111.3" y2="594"/>
                        <line class="st13" x1="0" y1="653.4" x2="111.3" y2="653.4"/>
                        <line class="st13" x1="0" y1="712.8" x2="111.3" y2="712.8"/>
                    </g>
                </g>
                <g id="ISLA_D_2_">
                    <g id="D-36" class="property__active" ng-class="tundra.inmovablesClassList[35]" ng-click="tundra.showPropertyData(68, '36')">
                        <rect id="DL-36" x="176.1" y="0" class="property pb-sprite-2" width="55.6" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 184.7917 72.3086)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan><tspan x="18.8" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 194.2502 9.9785)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 194.2502 115.4873)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 208.0027 81.3008)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.5" y="0" class="st4 st5 st15">2</tspan><tspan x="10.8" y="0" class="st4 st5 st15">8</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.9" y="0" class="st4 st5 st15">00</tspan><tspan x="29.8" y="0" class="st4 st5 st15"> </tspan><tspan x="32.7" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 195.5798 65.0459)"><tspan x="0" y="0" class="st1 st2 st16">3</tspan><tspan x="5.3" y="0" class="st1 st2 st16">6</tspan></text>
                        <g>
                            <polygon class="st10" points="204.9,105.8 204.9,90 212.1,97.9 				"/>
                            <polygon class="st11" points="204.9,105.8 197.5,97.9 204.9,90 				"/>
                        </g>
                    </g>
                    <g id="D-37" class="property__active" ng-class="tundra.inmovablesClassList[36]" ng-click="tundra.showPropertyData(68, '37')">
                        <rect id="DL-37" x="231.7" y="0" class="property pb-sprite-1" width="55.6" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 241.1262 72.3086)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 250.0823 9.9785)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 250.0823 115.4873)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 264.0378 81.6133)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">28</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.9" y="0" class="st4 st5 st15">00</tspan><tspan x="29.8" y="0" class="st4 st5 st15"> </tspan><tspan x="32.7" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 253.3796 65.0459)"><tspan x="0" y="0" class="st1 st2 st16">3</tspan><tspan x="5.3" y="0" class="st1 st2 st16">7</tspan></text>
                    </g>
                    <g id="D-38" class="property__active" ng-class="tundra.inmovablesClassList[37]" ng-click="tundra.showPropertyData(68, '38')">
                        <rect id="DL-38" x="287.2" y="0" class="property pb-sprite-2" width="55.7" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 297.4495 72.3086)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.8" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 305.1897 9.9785)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 305.1897 115.4873)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 319.7664 82.249)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">2</tspan><tspan x="10.8" y="0" class="st4 st5 st15">8</tspan><tspan x="16.1" y="0" class="st4 st5 st15">.</tspan><tspan x="18.8" y="0" class="st4 st5 st15">0</tspan><tspan x="24.3" y="0" class="st4 st5 st15">0</tspan><tspan x="29.7" y="0" class="st4 st5 st15"> </tspan><tspan x="32.5" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 308.0808 65.0459)"><tspan x="0" y="0" class="st1 st2 st16">3</tspan><tspan x="5.2" y="0" class="st1 st2 st16">8</tspan></text>
                    </g>
                    <g id="D-39" class="property__active" ng-class="tundra.inmovablesClassList[38]" ng-click="tundra.showPropertyData(68, '39')">
                        <rect id="DL-39" x="343" y="0" class="property pb-sprite-1" width="55.6" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 352.4412 72.3086)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan><tspan x="18.8" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 361.5042 9.9785)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 361.5042 115.4873)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 377.1296 81.6133)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.5" y="0" class="st4 st5 st15">2</tspan><tspan x="10.8" y="0" class="st4 st5 st15">8</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan><tspan x="24.3" y="0" class="st4 st5 st15">0</tspan><tspan x="29.8" y="0" class="st4 st5 st15"> </tspan><tspan x="32.6" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 365.7351 65.0459)"><tspan x="0" y="0" class="st1 st2 st16">3</tspan><tspan x="5.2" y="0" class="st1 st2 st16">9</tspan></text>
                    </g>
                    <g id="D-40" class="property__active" ng-class="tundra.inmovablesClassList[39]" ng-click="tundra.showPropertyData(68, '40')">
                        <rect id="DL-40" x="398.6" y="0" class="property pb-sprite-2" width="55.7" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 408.1809 72.3086)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.5" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 416.7307 9.9785)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 416.7307 115.4873)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 432.7166 81.6133)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">28</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.8" y="0" class="st4 st5 st15">00</tspan><tspan x="29.7" y="0" class="st4 st5 st15"> </tspan><tspan x="32.5" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 420.7341 65.0459)"><tspan x="0" y="0" class="st1 st2 st16">4</tspan><tspan x="5.2" y="0" class="st1 st2 st16">0</tspan></text>
                    </g>
                    <g id="D-41" class="property__active" ng-class="tundra.inmovablesClassList[40]" ng-click="tundra.showPropertyData(68, '41')">
                        <rect id="DL-41" x="454.3" y="0" class="property pb-sprite-1" width="55.6" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 464.5071 72.3086)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.5" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 472.6819 9.9785)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 472.6819 115.4873)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 488.6013 81.6133)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.5" y="0" class="st4 st5 st15">2</tspan><tspan x="10.8" y="0" class="st4 st5 st15">8</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan><tspan x="24.3" y="0" class="st4 st5 st15">0</tspan><tspan x="29.8" y="0" class="st4 st5 st15"> </tspan><tspan x="32.6" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 475.2791 65.0459)"><tspan x="0" y="0" class="st1 st2 st16">4</tspan><tspan x="5.3" y="0" class="st1 st2 st16">1</tspan></text>
                    </g>
                    <g id="D-42" class="property__active" ng-class="tundra.inmovablesClassList[41]" ng-click="tundra.showPropertyData(68, '42')">
                        <rect id="DL-42" x="509.9" y="0" class="property pb-sprite-2" width="55.7" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 519.3547 72.3086)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.8" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 528.1506 9.9785)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 528.1506 115.4873)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 543.1521 81.6133)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">28</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.8" y="0" class="st4 st5 st15">00</tspan><tspan x="29.7" y="0" class="st4 st5 st15"> </tspan><tspan x="32.5" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 530.7214 65.0459)"><tspan x="0" y="0" class="st1 st2 st16">4</tspan><tspan x="5.3" y="0" class="st1 st2 st16">2</tspan></text>
                    </g>
                    <g id="D-43" class="property__active" ng-class="tundra.inmovablesClassList[42]" ng-click="tundra.showPropertyData(68, '43')">
                        <rect id="DL-43" x="565.6" y="0" class="property pb-sprite-1" width="55.6" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 575.3831 72.3086)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.8" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 583.801 9.9785)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 583.801 115.4873)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 599.1814 81.6133)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">28</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.9" y="0" class="st4 st5 st15">00</tspan><tspan x="29.8" y="0" class="st4 st5 st15"> </tspan><tspan x="32.7" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 587.7849 65.0459)"><tspan x="0" y="0" class="st1 st2 st16">4</tspan><tspan x="5.2" y="0" class="st1 st2 st16">3</tspan></text>
                    </g>
                    <g id="D-44" class="property__active" ng-class="tundra.inmovablesClassList[43]" ng-click="tundra.showPropertyData(68, '44')">
                        <rect id="DL-44" x="621.2" y="0" class="property pb-sprite-2" width="55.7" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 630.9719 72.3086)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.5" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 639.2717 9.9785)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 639.2717 115.4873)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 654.9177 81.6133)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">2</tspan><tspan x="10.8" y="0" class="st4 st5 st15">8</tspan><tspan x="16.1" y="0" class="st4 st5 st15">.</tspan><tspan x="18.8" y="0" class="st4 st5 st15">0</tspan><tspan x="24.3" y="0" class="st4 st5 st15">0</tspan><tspan x="29.7" y="0" class="st4 st5 st15"> </tspan><tspan x="32.5" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 642.1882 65.0459)"><tspan x="0" y="0" class="st1 st2 st16">4</tspan><tspan x="5.2" y="0" class="st1 st2 st16">4</tspan></text>
                    </g>
                    <g id="D-45" class="property__active" ng-class="tundra.inmovablesClassList[44]" ng-click="tundra.showPropertyData(68, '45')">
                        <rect id="DL-45" x="676.9" y="0" class="property pb-sprite-1" width="55.6" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 687.1497 72.3086)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 695.2834 9.9785)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 695.2834 115.4873)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 710.7966 81.6133)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">2</tspan><tspan x="10.8" y="0" class="st4 st5 st15">8</tspan><tspan x="16.1" y="0" class="st4 st5 st15">.</tspan><tspan x="18.8" y="0" class="st4 st5 st15">0</tspan><tspan x="24.3" y="0" class="st4 st5 st15">0</tspan><tspan x="29.7" y="0" class="st4 st5 st15"> </tspan><tspan x="32.5" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 698.5095 65.0459)"><tspan x="0" y="0" class="st1 st2 st16">4</tspan><tspan x="5.2" y="0" class="st1 st2 st16">5</tspan></text>
                    </g>
                    <g id="D-46" class="property__active" ng-class="tundra.inmovablesClassList[45]" ng-click="tundra.showPropertyData(68, '46')">
                        <rect id="DL-46" x="732.5" y="0" class="property pb-sprite-2" width="55.6" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 742.5891 72.3086)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 751.1155 9.9785)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 751.1155 115.4873)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 765.6453 81.6133)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.5" y="0" class="st4 st5 st15">2</tspan><tspan x="10.8" y="0" class="st4 st5 st15">8</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.9" y="0" class="st4 st5 st15">00</tspan><tspan x="29.8" y="0" class="st4 st5 st15"> </tspan><tspan x="32.7" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 754.0994 65.0459)"><tspan x="0" y="0" class="st1 st2 st16">4</tspan><tspan x="5.2" y="0" class="st1 st2 st16">6</tspan></text>
                    </g>
                    <g id="D-47" class="property__active" ng-class="tundra.inmovablesClassList[46]" ng-click="tundra.showPropertyData(68, '47')">
                        <rect id="DL-47" x="788.1" y="0" class="property pb-sprite-1" width="55.7" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 797.4333 72.3086)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan><tspan x="18.8" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 806.7659 9.9785)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 806.7659 115.4873)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 820.6443 81.9297)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">2</tspan><tspan x="10.8" y="0" class="st4 st5 st15">8</tspan><tspan x="16.1" y="0" class="st4 st5 st15">.</tspan><tspan x="18.8" y="0" class="st4 st5 st15">0</tspan><tspan x="24.3" y="0" class="st4 st5 st15">0</tspan><tspan x="29.7" y="0" class="st4 st5 st15"> </tspan><tspan x="32.5" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 809.2371 65.0459)"><tspan x="0" y="0" class="st1 st2 st16">4</tspan><tspan x="5.2" y="0" class="st1 st2 st16">7</tspan></text>
                    </g>
                    <g id="D-48" class="property__active" ng-class="tundra.inmovablesClassList[47]" ng-click="tundra.showPropertyData(68, '48')">
                        <rect id="DL-48" x="843.8" y="0" class="property pb-sprite-2" width="55.6" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 854.0588 72.3086)"><tspan x="0" y="0" class="st4 st5 st15">16</tspan><tspan x="10.9" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 862.5979 9.9785)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 862.5979 115.4873)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 877.5613 81.6133)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.5" y="0" class="st4 st5 st15">2</tspan><tspan x="10.8" y="0" class="st4 st5 st15">8</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.9" y="0" class="st4 st5 st15">00</tspan><tspan x="29.8" y="0" class="st4 st5 st15"> </tspan><tspan x="32.7" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 865.864 65.0459)"><tspan x="0" y="0" class="st1 st2 st16">4</tspan><tspan x="5.3" y="0" class="st1 st2 st16">8</tspan></text>
                    </g>
                    <g id="D-49" class="property__active" ng-class="tundra.inmovablesClassList[48]" ng-click="tundra.showPropertyData(68, '49')">
                        <rect id="DL-49" x="899.4" y="0" class="property pb-sprite-1" width="55.7" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 909.7971 72.3086)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan><tspan x="18.8" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 917.885 9.9785)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 917.885 115.4873)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 932.7058 81.6133)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">28</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan><tspan x="24.3" y="0" class="st4 st5 st15">0</tspan><tspan x="29.8" y="0" class="st4 st5 st15"> </tspan><tspan x="32.6" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 921.2986 65.0459)"><tspan x="0" y="0" class="st1 st2 st16">4</tspan><tspan x="5.2" y="0" class="st1 st2 st16">9</tspan></text>
                    </g>
                    <g id="D-50" class="property__active" ng-class="tundra.inmovablesClassList[49]" ng-click="tundra.showPropertyData(68, '50')">
                        <rect id="DL-50" x="955.2" y="0" class="property pb-sprite-2" width="55.6" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 964.6409 72.3086)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.8" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 973.5959 9.9785)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 973.5959 115.4873)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 990.0701 81.6133)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">28</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan><tspan x="24.3" y="0" class="st4 st5 st15">0</tspan><tspan x="29.8" y="0" class="st4 st5 st15"> </tspan><tspan x="32.5" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 977.3279 65.0459)"><tspan x="0" y="0" class="st1 st2 st16">5</tspan><tspan x="5.3" y="0" class="st1 st2 st16">0</tspan></text>
                        <g>
                            <polygon class="st10" points="982.7,105.6 982.7,89.8 990.1,97.7 				"/>
                            <polygon class="st11" points="982.7,105.6 975.3,97.7 982.7,89.8 				"/>
                        </g>
                    </g>
                    <g id="D-51" class="property__active" ng-class="tundra.inmovablesClassList[50]" ng-click="tundra.showPropertyData(68, '51')">
                        <rect id="DL-51" x="1010.8" y="0" class="property pb-sprite-1" width="55.7" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 1020.3733 72.3086)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 1028.8772 9.9785)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 1028.8772 115.4873)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 1044.9124 81.6133)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">28</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.8" y="0" class="st4 st5 st15">00</tspan><tspan x="29.7" y="0" class="st4 st5 st15"> </tspan><tspan x="32.5" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 1033.0647 65.0459)"><tspan x="0" y="0" class="st1 st2 st16">5</tspan><tspan x="5.3" y="0" class="st1 st2 st16">1</tspan></text>
                        <g>
                            <polygon class="st10" points="1038.5,105.6 1038.5,89.8 1045.9,97.7 				"/>
                            <polygon class="st11" points="1038.5,105.6 1031.3,97.7 1038.5,89.8 				"/>
                        </g>
                    </g>
                    <g id="D-52" class="property__active" ng-class="tundra.inmovablesClassList[51]" ng-click="tundra.showPropertyData(68, '52')">
                        <rect id="DL-52" x="1066.5" y="0" class="property pb-sprite-2" width="55.6" height="118.8"/>
                        <text transform="matrix(0 -1.0653 1 0 1075.9651 72.3086)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 1084.7073 9.9785)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 1084.7073 115.4873)"><tspan x="0" y="0" class="st4 st5 st15">8</tspan><tspan x="5.4" y="0" class="st4 st5 st15">.</tspan><tspan x="7.9" y="0" class="st4 st5 st15">0</tspan><tspan x="13.4" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 1098.8733 81.6133)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.5" y="0" class="st4 st5 st15">2</tspan><tspan x="10.8" y="0" class="st4 st5 st15">8</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.9" y="0" class="st4 st5 st15">00</tspan><tspan x="29.8" y="0" class="st4 st5 st15"> </tspan><tspan x="32.7" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 1087.6096 65.0459)"><tspan x="0" y="0" class="st1 st2 st16">5</tspan><tspan x="5.3" y="0" class="st1 st2 st16">2</tspan></text>
                        <g>
                            <polygon class="st10" points="1095.6,105.6 1095.6,89.8 1103,97.7 				"/>
                            <polygon class="st11" points="1095.6,105.6 1088.2,97.7 1095.6,89.8 				"/>
                        </g>
                    </g>
                    <g id="D-53" class="property__active" ng-class="tundra.inmovablesClassList[52]" ng-click="tundra.showPropertyData(68, '53')">
                        <polygon id="DL-53" class="property pb-sprite-1" points="1122.1,118.9 1122.1,0 1190.8,0 1185,118.9 			"/>
                        <text transform="matrix(0 -1.0653 1 0 1131.842 72.3086)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.4" y="0" class="st4 st5 st15">6</tspan><tspan x="10.8" y="0" class="st4 st5 st15">.</tspan><tspan x="13.5" y="0" class="st4 st5 st15">0</tspan><tspan x="18.9" y="0" class="st4 st5 st15">0</tspan></text>
                        <text transform="matrix(5.222271e-02 -1.0636 0.9984 5.583001e-02 1185.4426 72.2652)"><tspan x="0" y="0" class="st4 st5 st7">1</tspan><tspan x="5.5" y="0" class="st4 st5 st7">6</tspan><tspan x="10.8" y="0" class="st4 st5 st7">.</tspan><tspan x="13.5" y="0" class="st4 st5 st7">0</tspan><tspan x="19" y="0" class="st4 st5 st7">2</tspan></text>
                        <text transform="matrix(1.0653 0 0 1 1146.3401 9.9785)" class="st4 st5 st15">9.88</text>
                        <text transform="matrix(1.0653 0 0 1 1146.3401 115.4873)" class="st4 st5 st15">9.04</text>
                        <text transform="matrix(0 -1.0653 1 0 1157.2698 81.6133)"><tspan x="0" y="0" class="st4 st5 st15">1</tspan><tspan x="5.5" y="0" class="st4 st5 st15">5</tspan><tspan x="10.8" y="0" class="st4 st5 st15">1</tspan><tspan x="16.3" y="0" class="st4 st5 st15">.</tspan><tspan x="18.9" y="0" class="st4 st5 st15">3</tspan><tspan x="24.4" y="0" class="st4 st5 st15">7</tspan><tspan x="29.8" y="0" class="st4 st5 st15"> </tspan><tspan x="32.6" y="0" class="st4 st5 st15">m2</tspan></text>
                        <text transform="matrix(0 -1.0653 1 0 1144.967 65.0459)"><tspan x="0" y="0" class="st1 st2 st16">5</tspan><tspan x="5.3" y="0" class="st1 st2 st16">3</tspan></text>
                        <g>
                            <polygon class="st10" points="1151.6,105.6 1151.6,89.8 1159,97.7 				"/>
                            <polygon class="st11" points="1151.6,105.6 1144.2,97.7 1151.6,89.8 				"/>
                        </g>
                    </g>
                    <g id="LÍNEAS_DIVISORIAS_3_">
                        <line class="st13" x1="231.7" y1="118.9" x2="231.7" y2="0"/>
                        <line class="st13" x1="287.2" y1="118.9" x2="287.2" y2="0"/>
                        <line class="st13" x1="343" y1="118.9" x2="343" y2="0"/>
                        <line class="st13" x1="398.6" y1="118.9" x2="398.6" y2="0"/>
                        <line class="st13" x1="454.3" y1="118.9" x2="454.3" y2="0"/>
                        <line class="st13" x1="509.9" y1="118.9" x2="509.9" y2="0"/>
                        <line class="st13" x1="565.6" y1="118.9" x2="565.6" y2="0"/>
                        <line class="st13" x1="621.2" y1="118.9" x2="621.2" y2="0"/>
                        <line class="st13" x1="676.9" y1="118.9" x2="676.9" y2="0"/>
                        <line class="st13" x1="732.5" y1="118.9" x2="732.5" y2="0"/>
                        <line class="st13" x1="788.1" y1="118.9" x2="788.1" y2="0"/>
                        <line class="st13" x1="843.8" y1="118.9" x2="843.8" y2="0"/>
                        <line class="st13" x1="899.4" y1="118.9" x2="899.4" y2="0"/>
                        <line class="st13" x1="955.2" y1="118.9" x2="955.2" y2="0"/>
                        <line class="st13" x1="1010.8" y1="118.9" x2="1010.8" y2="0"/>
                        <line class="st13" x1="1066.5" y1="118.9" x2="1066.5" y2="0"/>
                        <line class="st13" x1="1122.1" y1="118.9" x2="1122.1" y2="0"/>
                    </g>
                </g>
                <g id="ISLA_E_2_">
                    <g id="E-54" class="property__active" ng-class="tundra.inmovablesClassList[53]" ng-click="tundra.showPropertyData(68, '54')">
                        <polygon id="EL-54" class="property pb-sprite-1" points="1362.7,65.5 1251.6,59.4 1254.5,0 1366,0 			"/>
                        <text transform="matrix(5.222271e-02 -1.0636 0.9984 5.583001e-02 1262.6171 40.0782)"><tspan x="0" y="0" class="st4 st5 st7">8</tspan><tspan x="5.4" y="0" class="st4 st5 st7">.</tspan><tspan x="8" y="0" class="st4 st5 st7">0</tspan><tspan x="13.5" y="0" class="st4 st5 st7">0</tspan></text>
                        <text transform="matrix(5.222271e-02 -1.0636 0.9984 5.583001e-02 1360.1672 42.7572)"><tspan x="0" y="0" class="st4 st5 st7">8</tspan><tspan x="5.4" y="0" class="st4 st5 st7">.</tspan><tspan x="8" y="0" class="st4 st5 st7">8</tspan><tspan x="13.5" y="0" class="st4 st5 st7">4</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 1297.9924 9.9785)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">6.02</tspan></text>
                        <text transform="matrix(0.934 5.397974e-02 -5.069022e-02 0.9987 1287.9163 35.2641)"><tspan x="0" y="0" class="st4 st5 st6">1</tspan><tspan x="5.8" y="0" class="st4 st5 st6">3</tspan><tspan x="11.6" y="0" class="st4 st5 st6">4</tspan><tspan x="17.4" y="0" class="st4 st5 st6">.</tspan><tspan x="20.3" y="0" class="st4 st5 st6">6</tspan><tspan x="26.1" y="0" class="st4 st5 st6">7</tspan><tspan x="31.8" y="0" class="st4 st5 st6"> </tspan><tspan x="34.9" y="0" class="st4 st5 st6">m2</tspan></text>
                        <text transform="matrix(0.934 5.398861e-02 -5.066977e-02 0.9987 1303.756 22.2033)" class="st1 st2 st3">54</text>
                        <g>
                            <polygon class="st10" points="1272.1,36.7 1272.1,20.9 1279.5,28.8 				"/>
                            <polygon class="st11" points="1272.1,36.7 1264.7,28.8 1272.1,20.9 				"/>
                        </g>
                    </g>
                    <g id="E-55" class="property__active" ng-class="tundra.inmovablesClassList[54]" ng-click="tundra.showPropertyData(68, '55')">
                        <polygon id="EL-55" class="property pb-sprite-2" points="1248.8,118.7 1251.6,59.4 1362.7,65.5 1359.9,124.8 			"/>
                        <text transform="matrix(5.222271e-02 -1.0636 0.9984 5.583001e-02 1259.6571 99.4065)"><tspan x="0" y="0" class="st4 st5 st7">8</tspan><tspan x="5.5" y="0" class="st4 st5 st7">.</tspan><tspan x="8" y="0" class="st4 st5 st7">0</tspan><tspan x="13.5" y="0" class="st4 st5 st7">0</tspan></text>
                        <text transform="matrix(5.222271e-02 -1.0636 0.9984 5.583001e-02 1357.0677 105.0872)"><tspan x="0" y="0" class="st4 st5 st7">8</tspan><tspan x="5.4" y="0" class="st4 st5 st7">.</tspan><tspan x="8" y="0" class="st4 st5 st7">0</tspan><tspan x="13.5" y="0" class="st4 st5 st7">0</tspan></text>
                        <text transform="matrix(0.934 5.223818e-02 -4.902986e-02 0.9988 1294.4421 73.303)"><tspan x="0" y="0" class="st4 st5 st8">1</tspan><tspan x="5.8" y="0" class="st4 st5 st8">6</tspan><tspan x="11.6" y="0" class="st4 st5 st8">.</tspan><tspan x="14.4" y="0" class="st4 st5 st8">0</tspan><tspan x="20.3" y="0" class="st4 st5 st8">0</tspan></text>
                        <text transform="matrix(0.934 5.397974e-02 -5.069022e-02 0.9987 1284.965 96.0119)"><tspan x="0" y="0" class="st4 st5 st6">1</tspan><tspan x="5.8" y="0" class="st4 st5 st6">2</tspan><tspan x="11.6" y="0" class="st4 st5 st6">8</tspan><tspan x="17.4" y="0" class="st4 st5 st6">.</tspan><tspan x="20.3" y="0" class="st4 st5 st6">0</tspan><tspan x="26.1" y="0" class="st4 st5 st6">0</tspan><tspan x="31.8" y="0" class="st4 st5 st6"> </tspan><tspan x="34.9" y="0" class="st4 st5 st6">m2</tspan></text>
                        <text transform="matrix(0.934 5.398861e-02 -5.066977e-02 0.9987 1300.7979 85.6348)" class="st1 st2 st3">55</text>
                    </g>
                    <g id="E-56" class="property__active" ng-class="tundra.inmovablesClassList[55]" ng-click="tundra.showPropertyData(68, '56')">
                        <polygon id="EL-56" class="property pb-sprite-1" points="1356.8,184.2 1245.6,178 1248.6,118.7 1305.2,121.9 1359.8,124.8 			"/>
                        <text transform="matrix(0.934 5.223818e-02 -4.902986e-02 0.9988 1291.4508 131.3717)"><tspan x="0" y="0" class="st4 st5 st8">1</tspan><tspan x="5.7" y="0" class="st4 st5 st8">6</tspan><tspan x="11.6" y="0" class="st4 st5 st8">.</tspan><tspan x="14.4" y="0" class="st4 st5 st8">0</tspan><tspan x="20.3" y="0" class="st4 st5 st8">0</tspan></text>
                        <text transform="matrix(5.222271e-02 -1.0636 0.9984 5.583001e-02 1256.668 158.7331)"><tspan x="0" y="0" class="st4 st5 st7">8</tspan><tspan x="5.4" y="0" class="st4 st5 st7">.</tspan><tspan x="8" y="0" class="st4 st5 st7">0</tspan><tspan x="13.5" y="0" class="st4 st5 st7">0</tspan></text>
                        <text transform="matrix(5.222271e-02 -1.0636 0.9984 5.583001e-02 1354.2574 164.415)"><tspan x="0" y="0" class="st4 st5 st7">8</tspan><tspan x="5.4" y="0" class="st4 st5 st7">.</tspan><tspan x="8" y="0" class="st4 st5 st7">0</tspan><tspan x="13.4" y="0" class="st4 st5 st7">0</tspan></text>
                        <text transform="matrix(0.934 5.397974e-02 -5.069022e-02 0.9987 1282.1179 154.5521)"><tspan x="0" y="0" class="st4 st5 st6">1</tspan><tspan x="5.7" y="0" class="st4 st5 st6">28</tspan><tspan x="17.4" y="0" class="st4 st5 st6">.</tspan><tspan x="20.1" y="0" class="st4 st5 st6">0</tspan><tspan x="25.9" y="0" class="st4 st5 st6">0</tspan><tspan x="31.8" y="0" class="st4 st5 st6"> </tspan><tspan x="34.7" y="0" class="st4 st5 st6">m2</tspan></text>
                        <text transform="matrix(0.934 5.398861e-02 -5.066977e-02 0.9987 1297.6611 143.7015)" class="st1 st2 st3">56</text>
                    </g>
                    <g id="E-57" class="property__active" ng-class="tundra.inmovablesClassList[56]" ng-click="tundra.showPropertyData(68, '57')">
                        <polygon id="EL-57" class="property pb-sprite-2" points="1243,237.4 1245.8,178 1357,184.2 1354.2,243.5 			"/>
                        <text transform="matrix(0.934 5.397974e-02 -5.069022e-02 0.9987 1279.1957 214.5161)"><tspan x="0" y="0" class="st4 st5 st6">1</tspan><tspan x="5.7" y="0" class="st4 st5 st6">28</tspan><tspan x="17.4" y="0" class="st4 st5 st6">.</tspan><tspan x="20.3" y="0" class="st4 st5 st6">0</tspan><tspan x="25.9" y="0" class="st4 st5 st6">0</tspan><tspan x="31.8" y="0" class="st4 st5 st6"> </tspan><tspan x="34.9" y="0" class="st4 st5 st6">m2</tspan></text>
                        <text transform="matrix(5.222271e-02 -1.0636 0.9984 5.583001e-02 1253.8917 218.0648)"><tspan x="0" y="0" class="st4 st5 st7">8</tspan><tspan x="5.4" y="0" class="st4 st5 st7">.</tspan><tspan x="8" y="0" class="st4 st5 st7">0</tspan><tspan x="13.5" y="0" class="st4 st5 st7">0</tspan></text>
                        <text transform="matrix(5.222271e-02 -1.0636 0.9984 5.583001e-02 1351.3014 223.7444)"><tspan x="0" y="0" class="st4 st5 st7">8</tspan><tspan x="5.4" y="0" class="st4 st5 st7">.</tspan><tspan x="8" y="0" class="st4 st5 st7">0</tspan><tspan x="13.5" y="0" class="st4 st5 st7">0</tspan></text>
                        <text transform="matrix(0.934 5.223818e-02 -4.902986e-02 0.9988 1286.4592 237.0395)"><tspan x="0" y="0" class="st4 st5 st8">1</tspan><tspan x="5.7" y="0" class="st4 st5 st8">6</tspan><tspan x="11.6" y="0" class="st4 st5 st8">.</tspan><tspan x="14.3" y="0" class="st4 st5 st8">0</tspan><tspan x="20.1" y="0" class="st4 st5 st8">0</tspan></text>
                        <text transform="matrix(0.934 5.223818e-02 -4.902986e-02 0.9988 1288.6759 191.8038)"><tspan x="0" y="0" class="st4 st5 st8">1</tspan><tspan x="5.7" y="0" class="st4 st5 st8">6</tspan><tspan x="11.6" y="0" class="st4 st5 st8">.</tspan><tspan x="14.4" y="0" class="st4 st5 st8">0</tspan><tspan x="20.3" y="0" class="st4 st5 st8">0</tspan></text>
                        <text transform="matrix(0.934 5.398861e-02 -5.066977e-02 0.9987 1295.0328 203.5054)" class="st1 st2 st3">57</text>
                        <g>
                            <polygon class="st10" points="1264.7,211.8 1264.7,196 1272.1,203.9 				"/>
                            <polygon class="st11" points="1264.7,211.8 1257.3,203.9 1264.7,196 				"/>
                        </g>
                    </g>
                    <g id="LÍNEAS_DIVISORIAS_4_">
                        <line class="st14" x1="1354.2" y1="243.5" x2="1243" y2="237.4"/>
                        <line class="st13" x1="1251.6" y1="59.4" x2="1362.7" y2="65.5"/>
                        <line class="st13" x1="1357" y1="184.2" x2="1245.8" y2="178"/>
                        <line class="st13" x1="1359.9" y1="124.8" x2="1248.8" y2="118.7"/>
                        <line class="st13" x1="1362.7" y1="65.5" x2="1251.6" y2="59.4"/>
                    </g>
                </g>
                <g id="ISLA_F_1_">
                    <g id="F-58" class="property__active" ng-class="tundra.inmovablesClassList[57]" ng-click="tundra.showPropertyData(68, '58')"> 
                        <rect id="FL-58" x="809.7" y="187.8" class="property pb-sprite-1" width="138.9" height="66.9"/>
                        <text transform="matrix(0.9369 0 0 1 867.0496 198.3818)"><tspan x="0" y="0" class="st4 st5 st12">2</tspan><tspan x="5.7" y="0" class="st4 st5 st12">0.00</tspan></text>
                        <text transform="matrix(0 -0.9369 1 0 946.2996 229.9912)"><tspan x="0" y="0" class="st4 st5 st12">9</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.00</tspan></text>
                        <text transform="matrix(0 -0.9369 1 0 819.7595 229.9912)"><tspan x="0" y="0" class="st4 st5 st12">9</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 858.7888 224.8896)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">8</tspan><tspan x="11.5" y="0" class="st4 st5 st12">0</tspan><tspan x="17.2" y="0" class="st4 st5 st12">.</tspan><tspan x="20" y="0" class="st4 st5 st12">0</tspan><tspan x="25.8" y="0" class="st4 st5 st12">0</tspan><tspan x="31.5" y="0" class="st4 st5 st12"> </tspan><tspan x="34.5" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 873.9988 208.9521)"><tspan x="0" y="0" class="st1 st2 st19">5</tspan><tspan x="5.6" y="0" class="st1 st2 st19">8</tspan></text>
                        <g>
                            <polygon class="st10" points="835,229.3 835,213.5 842.4,221.4 				"/>
                            <polygon class="st11" points="835,229.3 827.6,221.4 835,213.5 				"/>
                        </g>
                    </g>
                    <g id="F-59" class="property__active" ng-class="tundra.inmovablesClassList[58]" ng-click="tundra.showPropertyData(68, '59')"> 
                        <rect id="FL-59" x="809.7" y="254.8" class="property pb-sprite-2" width="138.9" height="66.7"/>
                        <text transform="matrix(0.9369 0 0 1 867.0496 265.126)"><tspan x="0" y="0" class="st4 st5 st12">2</tspan><tspan x="5.7" y="0" class="st4 st5 st12">0.00</tspan></text>
                        <text transform="matrix(0 -0.9369 1 0 946.2996 297.1553)"><tspan x="0" y="0" class="st4 st5 st12">9</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.00</tspan></text>
                        <text transform="matrix(0 -0.9369 1 0 819.7595 297.1553)"><tspan x="0" y="0" class="st4 st5 st12">9</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 858.7888 291.791)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">8</tspan><tspan x="11.5" y="0" class="st4 st5 st12">0</tspan><tspan x="17.2" y="0" class="st4 st5 st12">.</tspan><tspan x="20" y="0" class="st4 st5 st12">0</tspan><tspan x="25.8" y="0" class="st4 st5 st12">0</tspan><tspan x="31.5" y="0" class="st4 st5 st12"> </tspan><tspan x="34.5" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 873.9988 276.6436)"><tspan x="0" y="0" class="st1 st2 st19">5</tspan><tspan x="5.6" y="0" class="st1 st2 st19">9</tspan></text>
                        <g>
                            <polygon class="st10" points="833.3,297.2 833.3,281.5 840.7,289.3 				"/>
                            <polygon class="st11" points="833.3,297.2 826,289.3 833.3,281.5 				"/>
                        </g>
                    </g>
                    <g id="F-60" class="property__active" ng-class="tundra.inmovablesClassList[59]" ng-click="tundra.showPropertyData(68, '60')"> 
                        <rect id="FL-60" x="809.7" y="321.5" class="property pb-sprite-1" width="138.9" height="66.9"/>
                        <text transform="matrix(0 -0.9369 1 0 946.2996 363.8975)"><tspan x="0" y="0" class="st4 st5 st12">9</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.00</tspan></text>
                        <text transform="matrix(0 -0.9369 1 0 819.7595 363.8975)"><tspan x="0" y="0" class="st4 st5 st12">9</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 867.0496 331.8691)"><tspan x="0" y="0" class="st4 st5 st12">2</tspan><tspan x="5.7" y="0" class="st4 st5 st12">0.00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 858.7888 358.5371)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">8</tspan><tspan x="11.5" y="0" class="st4 st5 st12">0</tspan><tspan x="17.2" y="0" class="st4 st5 st12">.</tspan><tspan x="20" y="0" class="st4 st5 st12">0</tspan><tspan x="25.8" y="0" class="st4 st5 st12">0</tspan><tspan x="31.5" y="0" class="st4 st5 st12"> </tspan><tspan x="34.5" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 873.9988 343.5459)"><tspan x="0" y="0" class="st1 st2 st19">6</tspan><tspan x="5.6" y="0" class="st1 st2 st19">0</tspan></text>
                        <g>
                            <polygon class="st10" points="832.9,363.9 832.9,348.1 840.3,356 				"/>
                            <polygon class="st11" points="832.9,363.9 825.5,356 832.9,348.1 				"/>
                        </g>
                    </g>
                    <g id="F-61" class="property__active" ng-class="tundra.inmovablesClassList[60]" ng-click="tundra.showPropertyData(68, '61')"> 
                        <rect id="FL-61" x="809.7" y="388.4" class="property pb-sprite-2" width="138.9" height="66.7"/>
                        <text transform="matrix(0 -0.9369 1 0 946.2996 430.6045)"><tspan x="0" y="0" class="st4 st5 st12">9</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.00</tspan></text>
                        <text transform="matrix(0 -0.9369 1 0 819.7595 430.6045)"><tspan x="0" y="0" class="st4 st5 st12">9</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 867.0496 399.4053)"><tspan x="0" y="0" class="st4 st5 st12">2</tspan><tspan x="5.7" y="0" class="st4 st5 st12">0.00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 858.7888 425.4385)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">8</tspan><tspan x="11.5" y="0" class="st4 st5 st12">0</tspan><tspan x="17.2" y="0" class="st4 st5 st12">.</tspan><tspan x="20" y="0" class="st4 st5 st12">0</tspan><tspan x="25.8" y="0" class="st4 st5 st12">0</tspan><tspan x="31.5" y="0" class="st4 st5 st12"> </tspan><tspan x="34.5" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 873.9988 410.292)"><tspan x="0" y="0" class="st1 st2 st19">6</tspan><tspan x="5.6" y="0" class="st1 st2 st19">1</tspan></text>
                        <g>
                            <polygon class="st10" points="832.9,432.5 832.9,416.9 840.3,424.8 				"/>
                            <polygon class="st11" points="832.9,432.5 825.5,424.8 832.9,416.9 				"/>
                        </g>
                    </g>
                    <g id="F-62" class="property__active" ng-class="tundra.inmovablesClassList[60]" ng-click="tundra.showPropertyData(68, '62')"> 
                        <rect id="FL-62" x="809.9" y="455.2" class="property pb-sprite-1" width="138.9" height="66.9"/>
                        <text transform="matrix(0 -0.9369 1 0 946.2996 498.2803)"><tspan x="0" y="0" class="st4 st5 st12">9</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.00</tspan></text>
                        <text transform="matrix(0 -0.9369 1 0 819.7595 497.0791)"><tspan x="0" y="0" class="st4 st5 st12">9</tspan><tspan x="5.7" y="0" class="st4 st5 st12">.00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 867.0496 467.8828)"><tspan x="0" y="0" class="st4 st5 st12">2</tspan><tspan x="5.7" y="0" class="st4 st5 st12">0.00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 858.7888 492.1855)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">8</tspan><tspan x="11.5" y="0" class="st4 st5 st12">0</tspan><tspan x="17.2" y="0" class="st4 st5 st12">.</tspan><tspan x="20" y="0" class="st4 st5 st12">0</tspan><tspan x="25.8" y="0" class="st4 st5 st12">0</tspan><tspan x="31.5" y="0" class="st4 st5 st12"> </tspan><tspan x="34.5" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 873.9988 477.1963)"><tspan x="0" y="0" class="st1 st2 st19">6</tspan><tspan x="5.6" y="0" class="st1 st2 st19">2</tspan></text>
                        <g>
                            <polygon class="st10" points="832.9,499.4 832.9,483.7 840.3,491.6 				"/>
                            <polygon class="st11" points="832.9,499.4 825.5,491.6 832.9,483.7 				"/>
                        </g>
                    </g>
                    <g id="F-63" class="property__active" ng-class="tundra.inmovablesClassList[62]" ng-click="tundra.showPropertyData(68, '63')"> 
                        <rect id="FL-63" x="809.8" y="522.1" class="property pb-sprite-2" width="138.9" height="62.3"/>
                        <text transform="matrix(0 -0.9369 1 0 946.2996 563.2002)" class="st4 st5 st12">8.40</text>
                        <text transform="matrix(0 -0.9369 1 0 819.7595 561.7666)" class="st4 st5 st12">8.40</text>
                        <text transform="matrix(0.9369 0 0 1 867.0496 533.8945)"><tspan x="0" y="0" class="st4 st5 st12">2</tspan><tspan x="5.7" y="0" class="st4 st5 st12">0.00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 867.0496 580.3887)"><tspan x="0" y="0" class="st4 st5 st12">2</tspan><tspan x="5.7" y="0" class="st4 st5 st12">0.00</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 858.7888 556.8789)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">6</tspan><tspan x="11.5" y="0" class="st4 st5 st12">8</tspan><tspan x="17.2" y="0" class="st4 st5 st12">.</tspan><tspan x="20" y="0" class="st4 st5 st12">0</tspan><tspan x="25.8" y="0" class="st4 st5 st12">0</tspan><tspan x="31.5" y="0" class="st4 st5 st12"> </tspan><tspan x="34.5" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 873.9988 543.9395)"><tspan x="0" y="0" class="st1 st2 st19">6</tspan><tspan x="5.6" y="0" class="st1 st2 st19">3</tspan></text>
                        <g>
                            <polygon class="st10" points="832.9,561.8 832.9,546 840.3,553.9 				"/>
                            <polygon class="st11" points="832.9,561.8 825.5,553.9 832.9,546 				"/>
                        </g>
                    </g>
                    <g id="LÍNEAS_DIVISORIAS_5_">
                        <line class="st14" x1="948.8" y1="584.3" x2="948.8" y2="187.8"/>
                        <line class="st13" x1="809.7" y1="254.7" x2="948.8" y2="254.7"/>
                        <line class="st13" x1="809.7" y1="321.5" x2="948.8" y2="321.5"/>
                        <line class="st13" x1="809.7" y1="388.4" x2="948.8" y2="388.4"/>
                        <line class="st13" x1="809.7" y1="455.1" x2="948.8" y2="455.1"/>
                        <line class="st13" x1="809.7" y1="522" x2="948.8" y2="522"/>
                    </g>
                </g>
                <g id="ISLA_G_1_">
                    <g id="G-64" class="property__active" ng-class="tundra.inmovablesClassList[63]" ng-click="tundra.showPropertyData(68, '64')">
                        <rect id="GL-64" x="606.1" y="522.1" class="property pb-sprite-2" width="138.9" height="62.3"/>
                        <text transform="matrix(0.9369 0 0 1 663.2058 533.2617)" class="st4 st5 st12">20.00</text>
                        <text transform="matrix(0 -0.9369 1 0 616.9231 561.7676)" class="st4 st5 st12">8.40</text>
                        <text transform="matrix(0 -0.9369 1 0 742.5886 561.7676)" class="st4 st5 st12">8.40</text>
                        <text transform="matrix(0.9369 0 0 1 650.0281 557.8281)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">68</tspan><tspan x="17.3" y="0" class="st4 st5 st12">.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">00 m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 669.9851 546.7793)"><tspan x="0" y="0" class="st1 st2 st19">6</tspan><tspan x="5.6" y="0" class="st1 st2 st19">4</tspan></text>
                        <g>
                            <polygon class="st10" points="719.2,558.3 719.2,542.5 726.6,550.4 				"/>
                            <polygon class="st11" points="719.2,558.3 711.8,550.4 719.2,542.5 				"/>
                        </g>
                    </g>
                    <g id="G-65" class="property__active" ng-class="tundra.inmovablesClassList[64]" ng-click="tundra.showPropertyData(68, '65')">
                        <rect id="GL-65" x="606.2" y="455.2" class="property pb-sprite-1" width="138.9" height="66.9"/>
                        <text transform="matrix(0.9369 0 0 1 663.2058 466.3037)" class="st4 st5 st12">20.00</text>
                        <text transform="matrix(0 -0.9369 1 0 616.9231 498.2812)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0 -0.9369 1 0 742.5886 498.2812)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0.9369 0 0 1 650.0281 495.3438)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">80</tspan><tspan x="17.3" y="0" class="st4 st5 st12">.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">00 m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 670.1335 485.084)"><tspan x="0" y="0" class="st1 st2 st19">6</tspan><tspan x="5.6" y="0" class="st1 st2 st19">5</tspan></text>
                    </g>
                    <g id="G-66" class="property__active" ng-class="tundra.inmovablesClassList[65]" ng-click="tundra.showPropertyData(68, '66')">
                        <rect id="GL-66" x="606" y="388.4" class="property pb-sprite-2" width="138.9" height="66.7"/>
                        <text transform="matrix(0.9369 0 0 1 663.2058 398.7715)" class="st4 st5 st12">20.00</text>
                        <text transform="matrix(0 -0.9369 1 0 616.9231 430.6016)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0 -0.9369 1 0 742.5886 430.6016)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0.9369 0 0 1 650.0281 427.3301)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">80</tspan><tspan x="17.3" y="0" class="st4 st5 st12">.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">00 m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 670.1335 417.3965)"><tspan x="0" y="0" class="st1 st2 st19">6</tspan><tspan x="5.6" y="0" class="st1 st2 st19">6</tspan></text>
                    </g>
                    <g id="G-67" class="property__active" ng-class="tundra.inmovablesClassList[66]" ng-click="tundra.showPropertyData(68, '67')">
                        <rect id="GL-67" x="606" y="321.5" class="property pb-sprite-1" width="138.9" height="66.9"/>
                        <text transform="matrix(0.9369 0 0 1 663.2058 333.7627)" class="st4 st5 st12">20.00</text>
                        <text transform="matrix(0 -0.9369 1 0 616.9231 363.8984)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0 -0.9369 1 0 742.5886 363.8984)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0.9369 0 0 1 650.0281 359.9609)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">80</tspan><tspan x="17.3" y="0" class="st4 st5 st12">.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">00 m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 670.1335 348.2832)"><tspan x="0" y="0" class="st1 st2 st19">6</tspan><tspan x="5.6" y="0" class="st1 st2 st19">7</tspan></text>
                    </g>
                    <g id="G-68" class="property__active" ng-class="tundra.inmovablesClassList[67]" ng-click="tundra.showPropertyData(68, '68')">
                        <rect id="GL-68" x="606" y="254.8" class="property pb-sprite-2" width="138.9" height="66.7"/>
                        <text transform="matrix(0.9369 0 0 1 663.2058 265.9141)" class="st4 st5 st12">20.00</text>
                        <text transform="matrix(0 -0.9369 1 0 616.9231 297.1562)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0 -0.9369 1 0 742.5886 297.1562)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0.9369 0 0 1 650.0281 292.2656)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">80</tspan><tspan x="17.3" y="0" class="st4 st5 st12">.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">00 m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 670.1335 281.2227)"><tspan x="0" y="0" class="st1 st2 st19">6</tspan><tspan x="5.6" y="0" class="st1 st2 st19">8</tspan></text>
                    </g>
                    <g id="G-69" class="property__active" ng-class="tundra.inmovablesClassList[68]" ng-click="tundra.showPropertyData(68, '69')">
                        <rect id="GL-69" x="606" y="187.8" class="property pb-sprite-1" width="138.9" height="66.9"/>
                        <text transform="matrix(0.9369 0 0 1 663.2058 200.4297)" class="st4 st5 st12">20.00</text>
                        <text transform="matrix(0 -0.9369 1 0 616.9231 231.3145)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0 -0.9369 1 0 742.5886 231.3145)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0.9369 0 0 1 650.0281 228.0469)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">80</tspan><tspan x="17.3" y="0" class="st4 st5 st12">.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">00 m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 670.1335 217.1582)"><tspan x="0" y="0" class="st1 st2 st19">6</tspan><tspan x="5.6" y="0" class="st1 st2 st19">9</tspan></text>
                        <g>
                            <polygon class="st10" points="719.2,226.5 719.2,210.7 726.6,218.6 				"/>
                            <polygon class="st11" points="719.2,226.5 711.8,218.6 719.2,210.7 				"/>
                        </g>
                    </g>
                    <g id="G-70" class="property__active" ng-class="tundra.inmovablesClassList[69]" ng-click="tundra.showPropertyData(68, '70')">
                        <rect id="GL-70" x="484.4" y="187.8" class="property pb-sprite-2" width="121.4" height="66.9"/>
                        <text transform="matrix(0.9369 0 0 1 532.7947 200.4297)" class="st4 st5 st12">17.50</text>
                        <text transform="matrix(0 -0.9369 1 0 495.1047 231.3145)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0 -0.9369 1 0 602.1365 231.3145)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0.9369 0 0 1 524.532 232.3066)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">5</tspan><tspan x="11.5" y="0" class="st4 st5 st12">7</tspan><tspan x="17.2" y="0" class="st4 st5 st12">.</tspan><tspan x="20" y="0" class="st4 st5 st12">5</tspan><tspan x="25.8" y="0" class="st4 st5 st12">0</tspan><tspan x="31.5" y="0" class="st4 st5 st12"> </tspan><tspan x="34.5" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 539.741 217.4746)"><tspan x="0" y="0" class="st1 st2 st19">7</tspan><tspan x="5.6" y="0" class="st1 st2 st19">0</tspan></text>
                        <g>
                            <polygon class="st10" points="504.1,226.5 504.1,210.7 511.4,218.6 				"/>
                            <polygon class="st11" points="504.1,226.5 496.7,218.6 504.1,210.7 				"/>
                        </g>
                    </g>
                    <g id="G-71" class="property__active" ng-class="tundra.inmovablesClassList[70]" ng-click="tundra.showPropertyData(68, '71')">
                        <rect id="GL-71" x="484.4" y="254.7" class="property pb-sprite-1" width="121.4" height="66.7"/>
                        <text transform="matrix(0 -0.9369 1 0 495.1047 297.1562)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0 -0.9369 1 0 602.1365 297.1562)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0.9369 0 0 1 532.7947 265.126)" class="st4 st5 st12">17.50</text>
                        <text transform="matrix(0.9369 0 0 1 524.532 292.9004)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">5</tspan><tspan x="11.5" y="0" class="st4 st5 st12">7</tspan><tspan x="17.2" y="0" class="st4 st5 st12">.</tspan><tspan x="20" y="0" class="st4 st5 st12">5</tspan><tspan x="25.8" y="0" class="st4 st5 st12">0</tspan><tspan x="31.5" y="0" class="st4 st5 st12"> </tspan><tspan x="34.5" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 539.741 281.3809)"><tspan x="0" y="0" class="st1 st2 st19">7</tspan><tspan x="5.6" y="0" class="st1 st2 st19">1</tspan></text>
                    </g>
                    <g id="G-72" class="property__active" ng-class="tundra.inmovablesClassList[71]" ng-click="tundra.showPropertyData(68, '72')">
                        <rect id="GL-72" x="484.4" y="321.5" class="property pb-sprite-2" width="121.4" height="66.9"/>
                        <text transform="matrix(0 -0.9369 1 0 495.1047 363.8984)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0 -0.9369 1 0 602.1365 363.8984)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0.9369 0 0 1 532.7947 331.8691)" class="st4 st5 st12">17.50</text>
                        <text transform="matrix(0.9369 0 0 1 524.532 358.5391)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">5</tspan><tspan x="11.5" y="0" class="st4 st5 st12">7</tspan><tspan x="17.2" y="0" class="st4 st5 st12">.</tspan><tspan x="20" y="0" class="st4 st5 st12">5</tspan><tspan x="25.8" y="0" class="st4 st5 st12">0</tspan><tspan x="31.5" y="0" class="st4 st5 st12"> </tspan><tspan x="34.5" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 539.741 348.2832)"><tspan x="0" y="0" class="st1 st2 st19">7</tspan><tspan x="5.6" y="0" class="st1 st2 st19">2</tspan></text>
                    </g>
                    <g id="G-73" class="property__active" ng-class="tundra.inmovablesClassList[72]" ng-click="tundra.showPropertyData(68, '73')">
                        <rect id="GL-73" x="484.4" y="388.4" class="property pb-sprite-1" width="121.4" height="66.7"/>
                        <text transform="matrix(0 -0.9369 1 0 495.1047 430.6016)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0 -0.9369 1 0 602.1365 430.6016)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0.9369 0 0 1 532.7947 399.4053)" class="st4 st5 st12">17.50</text>
                        <text transform="matrix(0.9369 0 0 1 524.532 428.5957)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">5</tspan><tspan x="11.5" y="0" class="st4 st5 st12">7</tspan><tspan x="17.2" y="0" class="st4 st5 st12">.</tspan><tspan x="20" y="0" class="st4 st5 st12">5</tspan><tspan x="25.8" y="0" class="st4 st5 st12">0</tspan><tspan x="31.5" y="0" class="st4 st5 st12"> </tspan><tspan x="34.5" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 539.741 417.5527)"><tspan x="0" y="0" class="st1 st2 st19">7</tspan><tspan x="5.6" y="0" class="st1 st2 st19">3</tspan></text>
                    </g>
                    <g id="G-74" class="property__active" ng-class="tundra.inmovablesClassList[73]" ng-click="tundra.showPropertyData(68, '74')">
                        <rect id="GL-74" x="484.6" y="455.1" class="property pb-sprite-2" width="121.4" height="66.9"/>
                        <text transform="matrix(0 -0.9369 1 0 495.1047 498.2812)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0 -0.9369 1 0 602.1365 498.2812)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0.9369 0 0 1 532.7947 466.3037)" class="st4 st5 st12">17.50</text>
                        <text transform="matrix(0.9369 0 0 1 524.532 497.0801)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">5</tspan><tspan x="11.5" y="0" class="st4 st5 st12">7</tspan><tspan x="17.2" y="0" class="st4 st5 st12">.</tspan><tspan x="20" y="0" class="st4 st5 st12">5</tspan><tspan x="25.8" y="0" class="st4 st5 st12">0</tspan><tspan x="31.5" y="0" class="st4 st5 st12"> </tspan><tspan x="34.5" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 539.741 485.5566)"><tspan x="0" y="0" class="st1 st2 st19">7</tspan><tspan x="5.6" y="0" class="st1 st2 st19">4</tspan></text>
                    </g>
                    <g id="G-75" class="property__active" ng-class="tundra.inmovablesClassList[74]" ng-click="tundra.showPropertyData(68, '75')">
                        <rect id="GL-75" x="484.5" y="522.1" class="property pb-sprite-1" width="121.4" height="62.3"/>
                        <text transform="matrix(0 -0.9369 1 0 495.1047 561.7676)" class="st4 st5 st12">8.40</text>
                        <text transform="matrix(0 -0.9369 1 0 602.1365 561.7676)" class="st4 st5 st12">8.40</text>
                        <text transform="matrix(0.9369 0 0 1 532.7947 533.8945)" class="st4 st5 st12">17.50</text>
                        <text transform="matrix(0.9369 0 0 1 524.532 559.8789)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">4</tspan><tspan x="11.5" y="0" class="st4 st5 st12">7</tspan><tspan x="17.2" y="0" class="st4 st5 st12">.</tspan><tspan x="20" y="0" class="st4 st5 st12">0</tspan><tspan x="25.8" y="0" class="st4 st5 st12">0</tspan><tspan x="31.5" y="0" class="st4 st5 st12"> </tspan><tspan x="34.5" y="0" class="st4 st5 st12">m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 539.741 550.0938)"><tspan x="0" y="0" class="st1 st2 st19">7</tspan><tspan x="5.6" y="0" class="st1 st2 st19">5</tspan></text>
                        <g>
                            <polygon class="st10" points="504.1,558.3 504.1,542.5 511.4,550.4 				"/>
                            <polygon class="st11" points="504.1,558.3 496.7,550.4 504.1,542.5 				"/>
                        </g>
                    </g>
                    <g id="LÍNEAS_DIVISORIAS_6_">
                        <line id="_x3C_Trazado_x3E_" class="st13" x1="606" y1="584.3" x2="606" y2="187.8"/>
                        <line class="st13" x1="484.2" y1="254.7" x2="745.1" y2="254.7"/>
                        <line class="st13" x1="484.2" y1="321.5" x2="745.1" y2="321.5"/>
                        <line class="st13" x1="484.2" y1="388.4" x2="745.1" y2="388.4"/>
                        <line class="st13" x1="484.2" y1="455.1" x2="745.1" y2="455.1"/>
                        <line class="st13" x1="484.2" y1="522" x2="745.1" y2="522"/>
                    </g>
                </g>
                <g id="ISLA_H_1_">
                    <g id="H-76" class="property__active" ng-class="tundra.inmovablesClassList[75]" ng-click="tundra.showPropertyData(68, '76')">
                        <rect id="HL-76_1_" x="297.9" y="522.1" class="property pb-sprite-2" width="121.4" height="62.3"/>
                        <text transform="matrix(0.9369 0 0 1 346.3416 534.8936)" class="st4 st5 st12">17.50</text>
                        <text transform="matrix(0 -0.9369 1 0 308.0813 561.6113)" class="st4 st5 st12">8.40</text>
                        <text transform="matrix(0 -0.9369 1 0 416.7312 561.6113)" class="st4 st5 st12">8.40</text>
                        <text transform="matrix(0.9369 0 0 1 333.0691 561.3506)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.8" y="0" class="st4 st5 st12">4</tspan><tspan x="11.5" y="0" class="st4 st5 st12">7.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">0</tspan><tspan x="25.8" y="0" class="st4 st5 st12">0</tspan><tspan x="31.7" y="0" class="st4 st5 st12"> m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 353.321 550.1494)"><tspan x="0" y="0" class="st1 st2 st19">7</tspan><tspan x="5.6" y="0" class="st1 st2 st19">6</tspan></text>
                        <g>
                            <polygon class="st10" points="396.1,558.3 396.1,542.5 403.4,550.4 				"/>
                            <polygon class="st11" points="396.1,558.3 388.7,550.4 396.1,542.5 				"/>
                        </g>
                    </g>
                    <g id="H-77" class="property__active" ng-class="tundra.inmovablesClassList[76]" ng-click="tundra.showPropertyData(68, '77')">
                        <rect id="HL-77_1_" x="297.9" y="455.1" class="property pb-sprite-1" width="121.4" height="66.9"/>
                        <text transform="matrix(0.9369 0 0 1 346.3416 467.9355)" class="st4 st5 st12">17.50</text>
                        <text transform="matrix(0 -0.9369 1 0 308.0813 498.2812)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0 -0.9369 1 0 416.7312 498.2812)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0.9369 0 0 1 333.0691 493.5)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.8" y="0" class="st4 st5 st12">5</tspan><tspan x="11.5" y="0" class="st4 st5 st12">7.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">50</tspan><tspan x="32" y="0" class="st4 st5 st12"> m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 353.321 483.2461)"><tspan x="0" y="0" class="st1 st2 st19">7</tspan><tspan x="5.6" y="0" class="st1 st2 st19">7</tspan></text>
                    </g>
                    <g id="H-78" class="property__active" ng-class="tundra.inmovablesClassList[77]" ng-click="tundra.showPropertyData(68, '78')">
                        <rect id="HL-78" x="297.8" y="388.4" class="property pb-sprite-2" width="121.4" height="66.7"/>
                        <text transform="matrix(0.9369 0 0 1 346.3416 400.4023)" class="st4 st5 st12">17.50</text>
                        <text transform="matrix(0 -0.9369 1 0 308.0813 430.6035)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0 -0.9369 1 0 416.7312 430.6035)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0.9369 0 0 1 333.0691 426.7559)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.8" y="0" class="st4 st5 st12">5</tspan><tspan x="11.5" y="0" class="st4 st5 st12">7.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">50</tspan><tspan x="32" y="0" class="st4 st5 st12"> m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 353.321 416.5)"><tspan x="0" y="0" class="st1 st2 st19">7</tspan><tspan x="5.6" y="0" class="st1 st2 st19">8</tspan></text>
                    </g>
                    <g id="H-79" class="property__active" ng-class="tundra.inmovablesClassList[78]" ng-click="tundra.showPropertyData(68, '79')">
                        <rect id="HL-79" x="297.8" y="321.5" class="property pb-sprite-1" width="121.4" height="66.9"/>
                        <text transform="matrix(0.9369 0 0 1 346.3416 334.29)" class="st4 st5 st12">17.50</text>
                        <text transform="matrix(0 -0.9369 1 0 308.0813 363.8984)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0 -0.9369 1 0 416.7312 363.8984)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0.9369 0 0 1 333.0691 361.4307)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.8" y="0" class="st4 st5 st12">5</tspan><tspan x="11.5" y="0" class="st4 st5 st12">7.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">50</tspan><tspan x="32" y="0" class="st4 st5 st12"> m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 353.321 349.5986)"><tspan x="0" y="0" class="st1 st2 st19">7</tspan><tspan x="5.6" y="0" class="st1 st2 st19">9</tspan></text>
                    </g>
                    <g id="H-80" class="property__active" ng-class="tundra.inmovablesClassList[79]" ng-click="tundra.showPropertyData(68, '80')">
                        <rect id="HL-80" x="297.8" y="254.7" class="property pb-sprite-2" width="121.4" height="66.7"/>
                        <text transform="matrix(0.9369 0 0 1 346.3416 266.7568)" class="st4 st5 st12">17.50</text>
                        <text transform="matrix(0 -0.9369 1 0 308.0813 297.207)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0 -0.9369 1 0 416.7312 297.207)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0.9369 0 0 1 333.0691 292.7959)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.8" y="0" class="st4 st5 st12">5</tspan><tspan x="11.5" y="0" class="st4 st5 st12">7.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">50</tspan><tspan x="32" y="0" class="st4 st5 st12"> m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 353.321 281.9072)"><tspan x="0" y="0" class="st1 st2 st19">8</tspan><tspan x="5.6" y="0" class="st1 st2 st19">0</tspan></text>
                    </g>
                    <g id="H-81" class="property__active" ng-class="tundra.inmovablesClassList[80]" ng-click="tundra.showPropertyData(68, '81')">
                        <rect id="HL-81" x="297.8" y="187.8" class="property pb-sprite-1" width="121.4" height="66.9"/>
                        <text transform="matrix(0.9369 0 0 1 346.3416 200.5898)" class="st4 st5 st12">17.50</text>
                        <text transform="matrix(0 -0.9369 1 0 308.0813 231.3164)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0 -0.9369 1 0 416.7312 231.3164)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0.9369 0 0 1 333.0691 227.1533)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.8" y="0" class="st4 st5 st12">5</tspan><tspan x="11.5" y="0" class="st4 st5 st12">7.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">5</tspan><tspan x="26.1" y="0" class="st4 st5 st12">0</tspan><tspan x="31.7" y="0" class="st4 st5 st12"> m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 353.321 217.0547)"><tspan x="0" y="0" class="st1 st2 st19">8</tspan><tspan x="5.6" y="0" class="st1 st2 st19">1</tspan></text>
                        <polygon class="st10" points="396.1,228.7 396.1,212.9 403.4,220.8 			"/>
                        <g>
                            <polygon class="st11" points="396.1,228.7 388.7,220.8 396.1,212.9 				"/>
                        </g>
                    </g>
                    <g id="H-82" class="property__active" ng-class="tundra.inmovablesClassList[81]" ng-click="tundra.showPropertyData(68, '82')">
                        <rect id="HL-82" x="176.2" y="187.8" class="property pb-sprite-2" width="121.4" height="66.9"/>
                        <text transform="matrix(0.9369 0 0 1 224.5276 200.5898)" class="st4 st5 st12">17.50</text>
                        <text transform="matrix(0 -0.9369 1 0 186.1272 231.3164)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0 -0.9369 1 0 293.6023 231.3164)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0.9369 0 0 1 216.2947 229.9932)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">57</tspan><tspan x="17.3" y="0" class="st4 st5 st12">.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">5</tspan><tspan x="25.8" y="0" class="st4 st5 st12">0</tspan><tspan x="31.8" y="0" class="st4 st5 st12"> m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 231.5066 219.7383)"><tspan x="0" y="0" class="st1 st2 st19">8</tspan><tspan x="5.6" y="0" class="st1 st2 st19">2</tspan></text>
                        <g>
                            <polygon class="st10" points="195.9,228.7 195.9,212.9 203.3,220.8 				"/>
                            <polygon class="st11" points="195.9,228.7 188.5,220.8 195.9,212.9 				"/>
                        </g>
                    </g>
                    <g id="H-83" class="property__active" ng-class="tundra.inmovablesClassList[82]" ng-click="tundra.showPropertyData(68, '83')">
                        <rect id="HL-83" x="176.1" y="254.7" class="property pb-sprite-1" width="121.4" height="66.7"/>
                        <text transform="matrix(0 -0.9369 1 0 186.1272 297.207)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0 -0.9369 1 0 293.6023 297.207)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0.9369 0 0 1 224.5276 266.7568)" class="st4 st5 st12">17.50</text>
                        <text transform="matrix(0.9369 0 0 1 216.2947 296.8955)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">57</tspan><tspan x="17.3" y="0" class="st4 st5 st12">.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">50 m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 231.5066 286.4824)"><tspan x="0" y="0" class="st1 st2 st19">8</tspan><tspan x="5.6" y="0" class="st1 st2 st19">3</tspan></text>
                    </g>
                    <g id="H-84" class="property__active" ng-class="tundra.inmovablesClassList[83]" ng-click="tundra.showPropertyData(68, '84')">
                        <rect id="HL-84" x="176.3" y="321.3" class="property pb-sprite-2" width="121.4" height="66.9"/>
                        <text transform="matrix(0 -0.9369 1 0 186.1272 363.8984)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0 -0.9369 1 0 293.6023 363.8984)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0.9369 0 0 1 224.7087 334.1084)" class="st4 st5 st12">17.50</text>
                        <text transform="matrix(0.9369 0 0 1 216.4758 363.1465)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">57</tspan><tspan x="17.3" y="0" class="st4 st5 st12">.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">50 m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 231.6877 353.2051)"><tspan x="0" y="0" class="st1 st2 st19">8</tspan><tspan x="5.6" y="0" class="st1 st2 st19">4</tspan></text>
                    </g>
                    <g id="H-85" class="property__active" ng-class="tundra.inmovablesClassList[84]" ng-click="tundra.showPropertyData(68, '85')">
                        <rect id="HL-85" x="176.1" y="388.4" class="property pb-sprite-1" width="121.4" height="66.7"/>
                        <text transform="matrix(0 -0.9369 1 0 186.1272 430.6035)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0 -0.9369 1 0 293.6023 430.6035)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0.9369 0 0 1 224.5276 400.4023)" class="st4 st5 st12">17.50</text>
                        <text transform="matrix(0.9369 0 0 1 216.2947 428.0186)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">57</tspan><tspan x="17.3" y="0" class="st4 st5 st12">.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">50 m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 231.5066 416.0254)"><tspan x="0" y="0" class="st1 st2 st19">8</tspan><tspan x="5.6" y="0" class="st1 st2 st19">5</tspan></text>
                    </g>
                    <g id="H-86" class="property__active" ng-class="tundra.inmovablesClassList[85]" ng-click="tundra.showPropertyData(68, '86')">
                        <rect id="HL-86" x="176.3" y="455.1" class="property pb-sprite-2" width="121.4" height="66.9"/>
                        <text transform="matrix(0 -0.9369 1 0 186.1272 498.2812)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0 -0.9369 1 0 293.6023 498.2812)" class="st4 st5 st12">9.00</text>
                        <text transform="matrix(0.9369 0 0 1 224.5276 467.9355)" class="st4 st5 st12">17.50</text>
                        <text transform="matrix(0.9369 0 0 1 216.2947 496.5)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">57</tspan><tspan x="17.3" y="0" class="st4 st5 st12">.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">50 m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 231.5066 485.9268)"><tspan x="0" y="0" class="st1 st2 st19">8</tspan><tspan x="5.6" y="0" class="st1 st2 st19">6</tspan></text>
                    </g>
                    <g id="H-87" class="property__active" ng-class="tundra.inmovablesClassList[86]" ng-click="tundra.showPropertyData(68, '87')">
                        <rect id="HL-87" x="176.2" y="522.1" class="property pb-sprite-1" width="121.4" height="62.3"/>
                        <text transform="matrix(0 -0.9369 1 0 186.1272 561.6113)" class="st4 st5 st12">8.40</text>
                        <text transform="matrix(0 -0.9369 1 0 293.6023 561.6113)" class="st4 st5 st12">8.40</text>
                        <text transform="matrix(0.9369 0 0 1 224.5276 534.8936)" class="st4 st5 st12">17.50</text>
                        <text transform="matrix(0.9369 0 0 1 216.2947 561.5107)"><tspan x="0" y="0" class="st4 st5 st12">1</tspan><tspan x="5.7" y="0" class="st4 st5 st12">47</tspan><tspan x="17.3" y="0" class="st4 st5 st12">.</tspan><tspan x="20.1" y="0" class="st4 st5 st12">00 m2</tspan></text>
                        <text transform="matrix(0.9369 0 0 1 231.5066 550.7803)"><tspan x="0" y="0" class="st1 st2 st19">8</tspan><tspan x="5.6" y="0" class="st1 st2 st19">7</tspan></text>
                        <g>
                            <polygon class="st10" points="195.9,558.3 195.9,542.5 203.3,550.4 				"/>
                            <polygon class="st11" points="195.9,558.3 188.5,550.4 195.9,542.5 				"/>
                        </g>
                    </g>
                    <g id="LÍNEAS_DIVISORIAS_7_">
                        <line class="st13" x1="297.7" y1="584.3" x2="297.7" y2="192.7"/>
                        <line class="st13" x1="297.7" y1="584.3" x2="297.7" y2="187.8"/>
                        <line class="st13" x1="176.1" y1="254.7" x2="419.4" y2="254.7"/>
                        <line class="st13" x1="176.1" y1="321.5" x2="419.4" y2="321.5"/>
                        <line class="st13" x1="176.1" y1="388.4" x2="419.4" y2="388.4"/>
                        <line class="st13" x1="176.1" y1="455.1" x2="419.4" y2="455.1"/>
                        <line class="st13" x1="176.1" y1="522" x2="419.4" y2="522"/>
                    </g>
                </g>
            </g>
            <g id="COMPLEMENTO">
                <g>
                    <polygon class="st20" points="1291.8,298.4 1282.4,311.5 1282.8,300.9 1284,300.8 1285,300.1 1285.6,299.2 1285.9,297.9 
                        1285.8,296.8 1285.2,295.7 1284.3,294.9 1283.1,294.8 1283.7,284.2 		"/>
                    <polygon class="st20" points="1267.4,361.4 1276.9,348.1 1276.3,358.7 1275.1,358.8 1274.2,359.5 1273.5,360.4 1273.2,361.7 
                        1273.3,362.8 1273.9,363.9 1274.9,364.7 1276,365 1275.5,375.4 		"/>
                    <text transform="matrix(5.224449e-02 -1.0636 0.9984 5.583001e-02 1280.1917 313.8477)" class="st21 st2 st22">ACCESO</text>
                    <text transform="matrix(5.224449e-02 -1.0636 0.9984 5.583001e-02 1283.444 375.3856)" class="st21 st2 st22">SALIDA</text>
                    <polygon class="st20" points="1266.2,318.1 1294,319.7 1293,342 1265.2,340.4 		"/>
                </g>
                <g>
                    <line class="st23" x1="0" y1="0" x2="1366" y2="0"/>
                    <line class="st23" x1="0" y1="772.3" x2="1328.3" y2="772.3"/>
                    <line class="st23" x1="1366" y1="0" x2="1346.3" y2="402.2"/>
                    <line class="st23" x1="1346.3" y1="402.2" x2="1328.3" y2="772.3"/>
                    <line class="st23" x1="0" y1="772.3" x2="0" y2="0"/>
                </g>
            </g>
            </svg>
        </div>
    </div>
</body>
</html>