<html lang="es_MX">

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" contet="ie=edge">
    <meta name="author" content="Ing. Saúl Fernando Torres Hernández">
    <meta name="description" content="Grúpo CCIMA S.A. de C.V." />
    <meta name="keywords"
        content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

    <title>Portto Blanco</title>

    <script type="text/javascript" src="media/assets/js/analytics.js"></script>

    <link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">

    <script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
    <script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>
</head>

<body ng-controller="PBLomasQuoteCtrl as lomas">

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
                <a href="#!/portto_blanco" class="brand-logo white left"><img class="logo-pb"
                        src="media/assets/img/habitta/portto-blanco/logos/logo.svg"></a>

                <ul class="nav-menu hide-on-med-and-down">
                    <li><a href="#!/portto_blanco">Inicio</a></li>
                    <li><a href="#!/portto_blanco-promociones">Promociones</a></li>
                    <li><a href="#!/portto_blanco-amenidades">Áreas comunes</a></li>
                    <li><a href="#!/portto_blanco-ubicacion">Ubicación</a></li>
                    <li class="quote-item">
                        <md-menu>
                            <button class="btn blue-bg futura-demi lighter ml-10"
                                ng-click="contactCtrl.openMenu($mdMenu, $event)">CONTACTO</button>
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
                    <li>
                        <md-button class="md-icon-button md-noink" ng-click="toggleLeft()">
                            <svg viewBox="0 0 24 24" width="24">
                                <path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path>
                            </svg>
                        </md-button>
                    </li>
                </ul>

                <div class="quote-item right hide-on-large-only">
                    <md-menu>
                        <button class="btn blue-bg futura-demi lighter ml-10"
                            ng-click="contactCtrl.openMenu($mdMenu, $event)">CONTACTO</button>
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

	<div class="modal-dialog" ng-class="lomas.dialogDisplay">
		<div class="backdrop-dialog" ng-click="lomas.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="lomas.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

				<div class="divider"></div>

				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Portto Blanco {{lomas.propertyData.condominium}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{lomas.propertyData.number}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Área {{lomas.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; ${{lomas.propertyData.cost_m2}} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text" style="text-decoration: line-through;">Precio de ${{lomas.propertyData.total}} MXN</h6>
					</div>

					<div class="divider"></div>

					<div class="py-20 ">
					<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{lomas.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
						<h6 class="green-text futura-light">Precio de ${{lomas.propertyData.totalPlan1}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{lomas.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 180 Meses</h6>
						<h6 class="green-text futura-light">Precio de ${{lomas.propertyData.totalPlan2}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>

					<div class="divider"></div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">Compra en {{lomas.month}} y paga la primera mensualidad hasta {{lomas.nextMonth}}</h6>
						<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
						<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{lomas.month + ' ' + lomas.year}}</p>
					</div>
					
					<div class="divider"></div>

					<a class="p-20">
						<p class="blue-text futura-book">¡Apártalo ahora!</p>
						<p class="green-text">Con tan solo $10,000 MXN</p>
						<a href="https://pay.billpocket.com/habitta" class="btn blue-bg no__shadow futura-bold">Apártar ahora</>
					</a>
				</div>

			</div>

			<div class="divider"></div>
			<div class="option-menu-dialog" ng-controller="ContactMenuCtrl as contactCtrl">
				<a class="btn blue-bg no-shadows futura-demi lighter right mt-10" href="https://pay.billpocket.com/habitta">APÁRTAR AQUÍ</a>
				<md-menu class="right mr-20 mt-10"  md-offset="0 -60">
					<button aria-label="Abrir Menu de Contacto" class="btn-flat futura-ligt" ng-click="contactCtrl.openMenu($mdMenu, $event)">
						Contacto
					</button>
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
	</div>


    <div class="plano_container">

        <div class="container mt-64">
            <div class="row quote-header">
                <div class="col s12">
                    <h1 class="center-align">Lomas de Portto Blanco 4 </h1>
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

		<svg version="1.1" id="PORTTO_BLANCO_CIMATARIO_II" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 x="0px" y="0px" viewBox="0 0 1366 592" style="enable-background:new 0 0 1366 592;" xml:space="preserve">
<style type="text/css">
	.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#4076AE;}
	.st1{fill:#FFFFFF;}
	.st2{font-family:'CenturyGothic';}
	.st3{font-size:8.785px;}
	.st4{fill:#FFBF00;}
	.st5{font-family:'CenturyGothic-Bold';}
	.st6{fill-rule:evenodd;clip-rule:evenodd;fill:#E0A843;}
	.st7{opacity:0.5;fill-rule:evenodd;clip-rule:evenodd;fill:#E0A843;}
	.st8{fill-rule:evenodd;clip-rule:evenodd;fill:#64768C;}
	.st9{fill:none;stroke:#FFFFFF;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st10{font-size:8.7849px;}
</style>
<g id="MACHOTE">
</g>
<image style="overflow:visible;" width="1366" height="592" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/lomas/condos/lomas_3.jpg" >
</image>
<g id="BASE">
</g>
<g id="ETAPA_3">
	<g id="ISLA_J">
		<g id="J-163_1_" class="property__active" ng-class="lomas.inmovablesClassList[162]" ng-click="lomas.showPropertyData(44, '163')">
			<polyline id="JL-163_1_" class="property pb-sprite-1" points="1265.7,190.4 1265.7,147.1 1342.9,147.1 1342.9,190.4 1265.7,190.4 			"/>
			<text transform="matrix(0 -1 1 0 1273.3966 176.6022)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(0 -1 1 0 1340.9279 176.6022)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(1 0 0 1 1294.1349 154.779)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1278.926 178.8821)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.7" y="0" class="st1 st2 st3">3.63 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1296.256 166.1471)" class="st4 st5 st3">163</text>
			<g>
				<polyline class="st6" points="1328.1,173.8 1323,168.7 1328.1,163.6 1328.1,173.8 				"/>
				<polyline class="st7" points="1328.1,173.8 1328.1,163.6 1333.2,168.7 1328.1,173.8 				"/>
			</g>
		</g>
		<g id="J-164_1_"class="property__active" ng-class="lomas.inmovablesClassList[163]" ng-click="lomas.showPropertyData(44, '164')">
			<polyline id="JL-164_1_" class="property pb-sprite-2" points="1265.7,229 1265.7,190.4 1342.9,190.4 1342.9,229 1265.7,229 			"/>
			<text transform="matrix(0 -1 1 0 1273.3966 217.547)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1340.924 217.547)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1294.1349 198.1012)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1278.9268 217.4736)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1296.256 207.5939)" class="st4 st5 st3">164</text>
		</g>
		<g id="J-165_1_" class="property__active" ng-class="lomas.inmovablesClassList[164]" ng-click="lomas.showPropertyData(44, '165')">
			<polyline id="JJL-165_1_" class="property pb-sprite-1" points="1265.7,267.6 1265.7,229 1342.9,229 1342.9,267.6 1265.7,267.6 			"/>
			<text transform="matrix(0 -1 1 0 1273.3966 256.1432)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1340.924 256.1384)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1294.1349 236.694)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1278.9266 256.065)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1296.256 246.1784)" class="st4 st5 st3">165</text>
		</g>
		<g id="J-166_1_" class="property__active" ng-class="lomas.inmovablesClassList[165]" ng-click="lomas.showPropertyData(44, '166')">
			<polyline id="JL-166_1_" class="property pb-sprite-2" points="1265.7,306.2 1265.7,267.6 1342.9,267.6 1342.9,306.2 1265.7,306.2 			"/>
			<text transform="matrix(0 -1 1 0 1273.3966 294.7307)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1340.924 294.7307)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1294.1349 275.2785)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1278.9294 294.654)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1296.256 284.7736)" class="st4 st5 st3">166</text>
		</g>
		<g id="J-167_1_"class="property__active" ng-class="lomas.inmovablesClassList[166]" ng-click="lomas.showPropertyData(44, '167')">
			<polyline id="JL-167_1_" class="property pb-sprite-1" points="1265.7,344.7 1265.7,306.2 1342.9,306.2 1342.9,344.7 1265.7,344.7 			"/>
			<text transform="matrix(0 -1 1 0 1273.3966 333.3151)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1340.9279 333.319)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1294.1349 313.8698)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1278.9264 333.2434)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1296.256 322.8659)" class="st4 st5 st3">167</text>
		</g>
		<g id="J-168_1_"class="property__active" ng-class="lomas.inmovablesClassList[167]" ng-click="lomas.showPropertyData(44, '168')">
			<polyline id="JL-168_1_" class="property pb-sprite-2" points="1265.7,383.3 1265.7,344.7 1342.9,344.7 1342.9,383.3 1265.7,383.3 			"/>
			<text transform="matrix(0 -1 1 0 1273.3966 371.9094)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1340.9279 371.9094)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1294.1349 352.4621)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1278.9271 371.831)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1296.256 361.4562)" class="st4 st5 st3">168</text>
		</g>
		<g id="J-169_1_" class="property__active" ng-class="lomas.inmovablesClassList[168]" ng-click="lomas.showPropertyData(44, '169')">
			<polyline id="JL-169_1_" class="property pb-sprite-1" points="1265.7,421.9 1265.7,383.3 1342.9,383.3 1342.9,421.9 1265.7,421.9 			"/>
			<text transform="matrix(0 -1 1 0 1273.3966 410.4963)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1340.9279 410.5021)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1294.1349 391.0495)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1278.9299 410.4253)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1296.256 400.0422)" class="st4 st5 st3">169</text>
		</g>
		<g id="J-170_1_" class="property__active" ng-class="lomas.inmovablesClassList[169]" ng-click="lomas.showPropertyData(44, '170')">
			<polyline id="JL-170_1_" class="property pb-sprite-1" points="1342.9,499.1 1304.3,499.1 1304.3,421.9 1342.9,421.9 1342.9,499.1 			"/>
			<text transform="matrix(0 -1 1 0 1340.9279 470.6418)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1315.6847 497.1721)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1315.6847 429.6369)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1311.9806 470.6408)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1331.0372 477.1603)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 1322.6066 468.5226)" class="st4 st5 st3">170</text>
			<g>
				<polyline class="st6" points="1323.6,489.5 1318.4,484.3 1323.6,479.2 1323.6,489.5 				"/>
				<polyline class="st7" points="1323.6,489.5 1323.6,479.2 1328.7,484.3 1323.6,489.5 				"/>
			</g>
		</g>
		<g id="J-171_1_" class="property__active" ng-class="lomas.inmovablesClassList[170]" ng-click="lomas.showPropertyData(44, '171')">
			<polyline id="JL-171_1_" class="property pb-sprite-2" points="1304.3,499.1 1265.7,499.1 1265.7,421.9 1304.3,421.9 1304.3,499.1 			"/>
			<text transform="matrix(0 -1 1 0 1273.3966 470.6408)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1277.0997 497.1721)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1277.0997 429.6369)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1292.4435 477.1603)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 1284.0128 468.5226)" class="st4 st5 st3">171</text>
		</g>
		<g id="J-172_1_" class="property__active" ng-class="lomas.inmovablesClassList[171]" ng-click="lomas.showPropertyData(44, '172')">
			<polyline id="JL-172_1_" class="property pb-sprite-1" points="1265.7,499.1 1227.1,499.1 1227.1,421.9 1265.7,421.9 1265.7,499.1 			"/>
			<text transform="matrix(1 0 0 1 1238.506 497.1721)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1238.506 429.6369)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1234.8038 470.6418)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1253.8488 477.1603)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 1243.798 468.5226)" class="st4 st5 st3">172</text>
		</g>
		<g id="J-173_1_" class="property__active" ng-class="lomas.inmovablesClassList[172]" ng-click="lomas.showPropertyData(44, '173')">
			<polyline id="JL-173_1_" class="property pb-sprite-2" points="1227.1,499.1 1188.5,499.1 1188.5,421.9 1227.1,421.9 1227.1,499.1 			"/>
			<text transform="matrix(0 -1 1 0 1196.212 470.6418)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1199.9161 497.1721)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1199.9161 429.6369)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1215.2667 477.1603)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 1205.7032 468.5226)" class="st4 st5 st3">173</text>
			<g>
				<polyline class="st6" points="1207.8,489.5 1202.7,484.3 1207.8,479.2 1207.8,489.5 				"/>
				<polyline class="st7" points="1207.8,489.5 1207.8,479.2 1212.9,484.3 1207.8,489.5 				"/>
			</g>
		</g>
		<g id="J-174_1_" class="property__active" ng-class="lomas.inmovablesClassList[173]" ng-click="lomas.showPropertyData(44, '174')">
			<polyline id="JL-174_1_" class="property pb-sprite-2" points="1188.5,421.9 1188.5,383.3 1265.7,383.3 1265.7,421.9 1188.5,421.9 			"/>
			<text transform="matrix(0 -1 1 0 1196.212 410.5021)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1263.7491 410.4963)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1216.9464 391.0495)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1207.6064 410.4226)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1219.0773 400.0422)" class="st4 st5 st3">174</text>
		</g>
		<g id="J-175_1_" class="property__active" ng-class="lomas.inmovablesClassList[174]" ng-click="lomas.showPropertyData(44, '175')">
			<polyline id="JL-175_1_" class="property pb-sprite-1" points="1188.5,383.3 1188.5,344.7 1265.7,344.7 1265.7,383.3 1188.5,383.3 			"/>
			<text transform="matrix(0 -1 1 0 1196.212 371.9094)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1263.7491 371.9094)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1216.9464 352.4621)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1207.6057 371.8321)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1219.0773 361.4562)" class="st4 st5 st3">175</text>
		</g>
		<g id="J-176_1_" class="property__active" ng-class="lomas.inmovablesClassList[175]" ng-click="lomas.showPropertyData(44, '176')">
			<polyline id="JL-176_1_" class="property pb-sprite-2" points="1188.5,344.7 1188.5,306.2 1265.7,306.2 1265.7,344.7 1188.5,344.7 			"/>
			<text transform="matrix(0 -1 1 0 1196.212 333.319)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1263.7491 333.319)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1216.9464 313.8698)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1207.6078 333.2426)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1219.0773 322.8659)" class="st4 st5 st3">176</text>
		</g>
		<g id="J-177_1_"class="property__active" ng-class="lomas.inmovablesClassList[176]" ng-click="lomas.showPropertyData(44, '177')">
			<polyline id="JL-177_1_" class="property pb-sprite-1" points="1188.5,306.2 1188.5,267.6 1265.7,267.6 1265.7,306.2 1188.5,306.2 			"/>
			<text transform="matrix(0 -1 1 0 1196.2081 294.7307)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1263.7491 294.7307)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1216.9464 275.2785)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1207.603 294.6571)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1219.0773 284.2785)" class="st4 st5 st3">177</text>
		</g>
		<g id="J-178_1_" class="property__active" ng-class="lomas.inmovablesClassList[177]" ng-click="lomas.showPropertyData(44, '178')">
			<polyline id="JL-178_1_" class="property pb-sprite-2" points="1188.5,267.6 1188.5,229 1265.7,229 1265.7,267.6 1188.5,267.6 			"/>
			<text transform="matrix(0 -1 1 0 1196.2081 256.1384)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1263.7491 256.1384)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1216.9464 236.694)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1207.6061 256.0657)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1219.0773 245.6882)" class="st4 st5 st3">178</text>
		</g>
		<g id="J-179_1_"class="property__active" ng-class="lomas.inmovablesClassList[178]" ng-click="lomas.showPropertyData(44, '179')">
			<polyline id="JL-179_1_" class="property pb-sprite-1" points="1188.5,229 1188.5,190.4 1265.7,190.4 1265.7,229 1188.5,229 			"/>
			<text transform="matrix(0 -1 1 0 1196.212 217.547)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1263.7491 217.547)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1216.9464 198.1012)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1207.6014 217.4733)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1219.0773 207.0968)" class="st4 st5 st3">179</text>
		</g>
		<g id="J-180_1_"class="property__active" ng-class="lomas.inmovablesClassList[179]" ng-click="lomas.showPropertyData(44, '180')">
			<polyline id="JL-180_1_" class="property pb-sprite-2" points="1188.5,190.4 1188.5,147.1 1265.7,147.1 1265.7,190.4 1188.5,190.4 			"/>
			<text transform="matrix(0 -1 1 0 1196.212 176.6022)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(0 -1 1 0 1263.7491 176.6022)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(1 0 0 1 1216.9464 154.779)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1207.6045 178.8804)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.7" y="0" class="st1 st2 st3">3.63 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1219.0773 166.1471)" class="st4 st5 st3">180</text>
			<g>
				<polyline class="st6" points="1203.3,173.8 1198.1,168.7 1203.3,163.6 1203.3,173.8 				"/>
				<polyline class="st7" points="1203.3,173.8 1203.3,163.6 1208.4,168.7 1203.3,173.8 				"/>
			</g>
		</g>
		<g id="DIVISIONES_10_">
			<line class="st9" x1="1265.7" y1="499.1" x2="1265.7" y2="147.1"/>
			<line class="st9" x1="1188.5" y1="190.4" x2="1342.9" y2="190.4"/>
			<line class="st9" x1="1188.5" y1="229" x2="1342.9" y2="229"/>
			<line class="st9" x1="1188.5" y1="267.6" x2="1342.9" y2="267.6"/>
			<line class="st9" x1="1188.5" y1="306.2" x2="1342.9" y2="306.2"/>
			<line class="st9" x1="1188.5" y1="344.7" x2="1342.9" y2="344.7"/>
			<line class="st9" x1="1188.5" y1="383.3" x2="1342.9" y2="383.3"/>
			<line class="st9" x1="1188.5" y1="421.9" x2="1342.9" y2="421.9"/>
			<line class="st9" x1="1304.3" y1="421.9" x2="1304.3" y2="499.1"/>
			<line class="st9" x1="1227.1" y1="499.1" x2="1227.1" y2="421.9"/>
		</g>
	</g>
	<g id="ISLA_K">
		<g id="K-181" class="property__active" ng-class="lomas.inmovablesClassList[180]" ng-click="lomas.showPropertyData(44, '181')">
			<polyline id="KL-181" class="property pb-sprite-1" points="1066.5,190.4 1066.5,147.1 1143.6,147.1 1143.6,190.4 1066.5,190.4 			"/>
			<text transform="matrix(0 -1 1 0 1074.17 176.6022)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(0 -1 1 0 1141.6984 176.6022)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(1 0 0 1 1094.9073 154.779)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1079.7086 178.8807)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.7" y="0" class="st1 st2 st3">3.63 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1097.0255 166.1471)" class="st4 st5 st3">181</text>
			<g>
				<polyline class="st6" points="1128.9,173.8 1123.8,168.7 1128.9,163.6 1128.9,173.8 				"/>
				<polyline class="st7" points="1128.9,173.8 1128.9,163.6 1134,168.7 1128.9,173.8 				"/>
			</g>
		</g>
		<g id="K-182"class="property__active" ng-class="lomas.inmovablesClassList[181]" ng-click="lomas.showPropertyData(44, '182')">
			<polyline id="KL-182" class="property pb-sprite-2" points="1066.5,229.1 1066.4,190.5 1143.6,190.2 1143.7,228.8 1066.5,229.1 			"/>
			<text transform="matrix(-3.640012e-03 -1 1 -3.640012e-03 1074.1073 217.5152)"><tspan x="0" y="0" class="st1 st2 st10">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(-3.640012e-03 -1 1 -3.640012e-03 1141.6351 217.2694)"><tspan x="0" y="0" class="st1 st2 st10">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1 -3.640012e-03 3.640012e-03 1 1094.7737 197.9936)"><tspan x="0" y="0" class="st1 st2 st10">16.0</tspan><tspan x="17" y="0" class="st1 st2 st10">0</tspan></text>
			<text transform="matrix(1 -1.889993e-03 1.889993e-03 1 1079.7837 217.5551)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 -3.640012e-03 3.640012e-03 1 1096.9246 206.98)" class="st4 st5 st10">182</text>
		</g>
		<g id="K-183"class="property__active" ng-class="lomas.inmovablesClassList[182]" ng-click="lomas.showPropertyData(44, '183')">
			<polyline id="KL-183" class="property pb-sprite-1" points="1066.5,267.6 1066.5,229 1143.6,229 1143.6,267.6 1066.5,267.6 			"/>
			<text transform="matrix(0 -1 1 0 1074.172 256.1384)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1141.6984 256.1432)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1094.9073 236.694)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1079.7102 256.065)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1097.0255 245.6882)" class="st4 st5 st3">183</text>
		</g>
		<g id="K-184"class="property__active" ng-class="lomas.inmovablesClassList[183]" ng-click="lomas.showPropertyData(44, '184')">
			<polyline id="KL-184" class="property pb-sprite-2" points="1066.5,306.2 1066.5,267.6 1143.6,267.6 1143.6,306.2 1066.5,306.2 			"/>
			<text transform="matrix(0 -1 1 0 1074.172 294.7307)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1141.6984 294.7307)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1094.9073 275.2785)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1079.7091 294.6525)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1097.0255 284.2785)" class="st4 st5 st3">184</text>
		</g>
		<g id="K-185"class="property__active" ng-class="lomas.inmovablesClassList[184]" ng-click="lomas.showPropertyData(44, '185')">
			<polyline id="KL-185" class="property pb-sprite-1" points="1066.5,344.7 1066.5,306.2 1143.6,306.2 1143.6,344.7 1066.5,344.7 			"/>
			<text transform="matrix(0 -1 1 0 1074.17 333.319)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1141.6984 333.3259)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1094.9073 313.8698)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1079.7041 333.241)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1097.0255 322.3718)" class="st4 st5 st3">185</text>
		</g>
		<g id="K-186"class="property__active" ng-class="lomas.inmovablesClassList[185]" ng-click="lomas.showPropertyData(44, '186')">
			<polyline id="KL-186" class="property pb-sprite-2" points="1066.5,383.3 1066.5,344.7 1143.6,344.7 1143.6,383.3 1066.5,383.3 			"/>
			<text transform="matrix(0 -1 1 0 1074.17 371.9094)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1141.6984 371.9094)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1094.9073 352.4621)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1079.7029 371.8324)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1097.0255 361.4562)" class="st4 st5 st3">186</text>
		</g>
		<g id="K-187"class="property__active" ng-class="lomas.inmovablesClassList[186]" ng-click="lomas.showPropertyData(44, '187')">
			<polyline id="KL-187" class="property pb-sprite-1" points="1066.5,421.9 1066.5,383.3 1143.6,383.3 1143.6,421.9 1066.5,421.9 			"/>
			<text transform="matrix(0 -1 1 0 1074.17 410.4963)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1141.6984 410.4963)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1094.9073 391.0495)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1079.7057 410.4263)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1097.0255 400.0422)" class="st4 st5 st3">187</text>
		</g>
		<g id="K-188"class="property__active" ng-class="lomas.inmovablesClassList[187]" ng-click="lomas.showPropertyData(44, '188')">
			<polyline id="KL-188" class="property pb-sprite-1" points="1143.6,499.1 1105,499.1 1105,421.9 1143.6,421.9 1143.6,499.1 			"/>
			<text transform="matrix(0 -1 1 0 1141.6984 470.6408)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1116.4679 497.1721)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1116.4679 429.6369)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1112.7589 470.6418)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1131.8126 477.1603)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 1121.7609 468.5226)" class="st4 st5 st3">188</text>
			<g>
				<polyline class="st6" points="1124.3,489.5 1119.2,484.3 1124.3,479.2 1124.3,489.5 				"/>
				<polyline class="st7" points="1124.3,489.5 1124.3,479.2 1129.5,484.3 1124.3,489.5 				"/>
			</g>
		</g>
		<g id="K-189"class="property__active" ng-class="lomas.inmovablesClassList[188]" ng-click="lomas.showPropertyData(44, '189')">
			<polyline id="KL-189" class="property pb-sprite-2" points="1105,499.1 1066.5,499.1 1066.5,421.9 1105,421.9 1105,499.1 			"/>
			<text transform="matrix(0 -1 1 0 1074.17 470.6418)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1077.8761 497.1721)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1077.8761 429.6369)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1093.2325 477.1574)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 1083.1642 468.5226)" class="st4 st5 st3">189</text>
		</g>
		<g id="K-190"class="property__active" ng-class="lomas.inmovablesClassList[189]" ng-click="lomas.showPropertyData(44, '190')">
			<polyline id="KL-190" class="property pb-sprite-1" points="1066.5,499.1 1027.9,499.1 1027.9,421.9 1066.5,421.9 1066.5,499.1 			"/>
			<text transform="matrix(1 0 0 1 1039.2814 497.1721)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1039.2814 429.6369)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1035.5763 470.6418)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1054.631 477.1574)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 1044.5782 468.5256)" class="st4 st5 st3">190</text>
		</g>
		<g id="K-191"class="property__active" ng-class="lomas.inmovablesClassList[190]" ng-click="lomas.showPropertyData(44, '191')">
			<polyline id="KL-191" class="property pb-sprite-2" points="1027.9,499.1 989.3,499.1 989.3,421.9 1027.9,421.9 1027.9,499.1 			"/>
			<text transform="matrix(0 -1 1 0 996.9914 470.6408)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1000.6916 497.1721)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1000.6916 429.6369)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1016.0363 477.1574)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 1006.4807 468.5226)" class="st4 st5 st3">191</text>
			<g>
				<polyline class="st6" points="1008.6,489.5 1003.4,484.3 1008.6,479.2 1008.6,489.5 				"/>
				<polyline class="st7" points="1008.6,489.5 1008.6,479.2 1013.7,484.3 1008.6,489.5 				"/>
			</g>
		</g>
		<g id="K-192"class="property__active" ng-class="lomas.inmovablesClassList[191]" ng-click="lomas.showPropertyData(44, '192')">
			<polyline id="KL-192" class="property pb-sprite-2" points="989.3,421.9 989.3,383.3 1066.5,383.3 1066.5,421.9 989.3,421.9 			"/>
			<text transform="matrix(0 -1 1 0 996.9914 410.4963)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1064.5197 410.5021)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1017.7287 391.0495)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1008.3803 410.4226)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1019.8527 400.0422)" class="st4 st5 st3">192</text>
		</g>
		<g id="K-193"class="property__active" ng-class="lomas.inmovablesClassList[192]" ng-click="lomas.showPropertyData(44, '193')">
			<polyline id="KL-193" class="property pb-sprite-1" points="989.3,383.3 989.3,344.7 1066.5,344.7 1066.5,383.3 989.3,383.3 			"/>
			<text transform="matrix(0 -1 1 0 996.9914 371.9094)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1064.5197 371.9094)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1017.7287 352.4621)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1008.3814 371.836)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1019.8527 361.4562)" class="st4 st5 st3">193</text>
		</g>
		<g id="K-194"class="property__active" ng-class="lomas.inmovablesClassList[193]" ng-click="lomas.showPropertyData(44, '194')">
			<polyline id="KL-194" class="property pb-sprite-2" points="989.3,344.7 989.3,306.2 1066.5,306.2 1066.5,344.7 989.3,344.7 			"/>
			<text transform="matrix(0 -1 1 0 996.9914 333.3151)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1064.5197 333.319)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1017.7287 313.8698)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1008.3806 333.2426)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1019.8527 322.8659)" class="st4 st5 st3">194</text>
		</g>
		<g id="K-195" class="property__active" ng-class="lomas.inmovablesClassList[194]" ng-click="lomas.showPropertyData(44, '195')">
			<polyline id="KL-195" class="property pb-sprite-1" points="989.3,306.2 989.3,267.6 1066.5,267.6 1066.5,306.2 989.3,306.2 			"/>
			<text transform="matrix(0 -1 1 0 996.9914 294.7307)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1064.5197 294.7307)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1017.7287 275.2785)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1008.3817 294.6497)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1019.8527 284.2785)" class="st4 st5 st3">195</text>
		</g>
		<g id="K-196" class="property__active" ng-class="lomas.inmovablesClassList[195]" ng-click="lomas.showPropertyData(44, '196')">
			<polyline id="KL-196" class="property pb-sprite-2" points="989.3,267.6 989.3,229 1066.5,229 1066.5,267.6 989.3,267.6 			"/>
			<text transform="matrix(0 -1 1 0 996.9914 256.1432)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1064.5197 256.1384)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1017.7287 236.694)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1008.3839 256.0652)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1019.8527 245.6882)" class="st4 st5 st3">196</text>
		</g>
		<g id="K-197" class="property__active" ng-class="lomas.inmovablesClassList[196]" ng-click="lomas.showPropertyData(44, '197')">
			<polyline id="KL-197" class="property pb-sprite-1" points="989.3,229 989.3,190.4 1066.5,190.4 1066.5,229 989.3,229 			"/>
			<text transform="matrix(0 -1 1 0 996.9914 217.547)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 1064.5197 217.5539)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 1017.7287 198.1012)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1008.383 217.4689)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1019.8527 207.0968)" class="st4 st5 st3">197</text>
		</g>
		<g id="K-198" class="property__active" ng-class="lomas.inmovablesClassList[197]" ng-click="lomas.showPropertyData(44, '198')">
			<polyline id="KL-198" class="property pb-sprite-2" points="989.3,190.4 989.3,147.1 1066.5,147.1 1066.5,190.4 989.3,190.4 			"/>
			<text transform="matrix(0 -1 1 0 996.9914 176.6022)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(0 -1 1 0 1064.5197 176.6061)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(1 0 0 1 1017.7287 154.779)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 1008.3861 178.8813)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.7" y="0" class="st1 st2 st3">3.63 m2</tspan></text>
			<text transform="matrix(1 0 0 1 1019.8527 166.1471)" class="st4 st5 st3">198</text>
			<g>
				<polyline class="st6" points="1004,173.8 998.9,168.7 1004,163.6 1004,173.8 				"/>
				<polyline class="st7" points="1004,173.8 1004,163.6 1009.2,168.7 1004,173.8 				"/>
			</g>
		</g>
		<g id="DIVISIONES_8_">
			<line class="st9" x1="1066.5" y1="499.1" x2="1066.5" y2="147.1"/>
			<line class="st9" x1="989.3" y1="190.4" x2="1143.6" y2="190.4"/>
			<line class="st9" x1="989.3" y1="229" x2="1143.6" y2="229"/>
			<line class="st9" x1="989.3" y1="267.6" x2="1143.6" y2="267.6"/>
			<line class="st9" x1="989.3" y1="306.2" x2="1143.6" y2="306.2"/>
			<line class="st9" x1="989.3" y1="344.7" x2="1143.6" y2="344.7"/>
			<line class="st9" x1="989.3" y1="383.3" x2="1143.6" y2="383.3"/>
			<line class="st9" x1="989.3" y1="421.9" x2="1143.6" y2="421.9"/>
			<line class="st9" x1="1105" y1="421.9" x2="1105" y2="499.1"/>
			<line class="st9" x1="1027.9" y1="499.1" x2="1027.9" y2="421.9"/>
		</g>
	</g>
	<g id="ISLA_L" >
		<g id="L-199_1_" class="property__active" ng-class="lomas.inmovablesClassList[198]" ng-click="lomas.showPropertyData(44, '199')">
			<polyline id="LL-199_1_" class="property pb-sprite-1" points="867.2,190.4 867.2,147.1 944.4,147.1 944.4,190.4 867.2,190.4 			"/>
			<text transform="matrix(0 -1 1 0 874.9523 176.6022)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(0 -1 1 0 942.4797 176.6022)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(1 0 0 1 895.6906 154.779)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 880.4824 178.8826)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.7" y="0" class="st1 st2 st3">3.63 m2</tspan></text>
			<text transform="matrix(1 0 0 1 897.8117 166.1471)" class="st4 st5 st3">199</text>
			<g>
				<polyline class="st6" points="929.6,173.8 924.5,168.7 929.6,163.6 929.6,173.8 				"/>
				<polyline class="st7" points="929.6,173.8 929.6,163.6 934.8,168.7 929.6,173.8 				"/>
			</g>
		</g>
		<g id="L-200_1_" class="property__active" ng-class="lomas.inmovablesClassList[199]" ng-click="lomas.showPropertyData(44, '200')">
			<polyline id="LL-200_1_" class="property pb-sprite-2" points="867.2,229 867.2,190.4 944.4,190.4 944.4,229 867.2,229 			"/>
			<text transform="matrix(0 -1 1 0 874.9523 217.547)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 942.4797 217.547)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 895.6906 198.1012)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 880.4852 217.4701)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 897.8117 207.0968)" class="st4 st5 st3">200</text>
		</g>
		<g id="L-201_1_" class="property__active" ng-class="lomas.inmovablesClassList[200]" ng-click="lomas.showPropertyData(44, '201')">
			<polyline id="LL-201_1_" class="property pb-sprite-1" points="867.2,267.6 867.2,229 944.4,229 944.4,267.6 867.2,267.6 			"/>
			<text transform="matrix(0 -1 1 0 874.9523 256.1432)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 942.4836 256.1384)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 895.6906 236.694)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 880.484 256.0606)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 897.8117 245.6882)" class="st4 st5 st3">201</text>
		</g>
		<g id="L-202_1_" class="property__active" ng-class="lomas.inmovablesClassList[201]" ng-click="lomas.showPropertyData(44, '202')">
			<polyline id="LL-202_1_" class="property pb-sprite-2" points="867.2,306.2 867.2,267.6 944.4,267.6 944.4,306.2 867.2,306.2 			"/>
			<text transform="matrix(0 -1 1 0 874.9523 294.7307)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 942.4836 294.7307)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 895.6906 275.2785)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 880.4849 294.652)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 897.8117 284.2785)" class="st4 st5 st3">202</text>
		</g>
		<g id="L-203_1_" class="property__active" ng-class="lomas.inmovablesClassList[202]" ng-click="lomas.showPropertyData(44, '203')">
			<polyline id="LL-203_1_" class="property pb-sprite-1" points="867.2,344.7 867.2,306.2 944.4,306.2 944.4,344.7 867.2,344.7 			"/>
			<text transform="matrix(0 -1 1 0 874.9523 333.3151)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 942.4836 333.319)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 895.6906 313.8698)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 880.4827 333.242)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 897.8117 322.3718)" class="st4 st5 st3">203</text>
		</g>
		<g id="L-204_1_" class="property__active" ng-class="lomas.inmovablesClassList[203]" ng-click="lomas.showPropertyData(44, '204')">
			<polyline id="LL-204_1_" class="property pb-sprite-2" points="867.2,383.3 867.2,344.7 944.4,344.7 944.4,383.3 867.2,383.3 			"/>
			<text transform="matrix(0 -1 1 0 874.9523 371.9094)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 942.4797 371.9094)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 895.6906 352.4621)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 880.4797 371.8363)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 897.8117 361.4562)" class="st4 st5 st3">204</text>
		</g>
		<g id="L-205_1_" class="property__active" ng-class="lomas.inmovablesClassList[204]" ng-click="lomas.showPropertyData(44, '205')">
			<polyline id="LL-205_1_" class="property pb-sprite-1" points="867.2,421.9 867.2,383.3 944.4,383.3 944.4,421.9 867.2,421.9 			"/>
			<text transform="matrix(0 -1 1 0 874.9523 410.4963)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 942.4836 410.5021)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 895.6906 391.0495)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 880.4825 410.4185)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 897.8117 400.0422)" class="st4 st5 st3">205</text>
		</g>
		<g id="L-206_1_"  class="property__active" ng-class="lomas.inmovablesClassList[205]" ng-click="lomas.showPropertyData(44, '206')">
			<polyline id="LL-206_1_" class="property pb-sprite-1" points="944.4,499.1 905.8,499.1 905.8,421.9 944.4,421.9 944.4,499.1 			"/>
			<text transform="matrix(0 -1 1 0 942.4797 470.6418)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 917.2404 497.1721)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 917.2404 429.6369)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 913.5383 470.6418)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 932.5891 477.1574)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 922.5363 468.5256)" class="st4 st5 st3">206</text>
			<g>
				<polyline class="st6" points="925.1,489.5 920,484.3 925.1,479.2 925.1,489.5 				"/>
				<polyline class="st7" points="925.1,489.5 925.1,479.2 930.2,484.3 925.1,489.5 				"/>
			</g>
		</g>
		<g id="L-207_1_" class="property__active" ng-class="lomas.inmovablesClassList[206]" ng-click="lomas.showPropertyData(44, '207')">
			<polyline id="LL-207_1_" class="property pb-sprite-2" points="905.8,499.1 867.2,499.1 867.2,421.9 905.8,421.9 905.8,499.1 			"/>
			<text transform="matrix(0 -1 1 0 874.9523 470.6408)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 878.6516 497.1721)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 878.6516 429.6369)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 894.006 477.1574)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 883.9465 468.5256)" class="st4 st5 st3">207</text>
		</g>
		<g id="L-208_1_" class="property__active" ng-class="lomas.inmovablesClassList[207]" ng-click="lomas.showPropertyData(44, '208')">
			<polyline id="LL-208_1_" class="property pb-sprite-1" points="867.2,499.1 828.6,499.1 828.6,421.9 867.2,421.9 867.2,499.1 			"/>
			<text transform="matrix(1 0 0 1 840.0656 497.1721)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 840.0656 429.6369)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 836.3635 470.6408)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 855.4162 477.1574)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 845.3557 468.5256)" class="st4 st5 st3">208</text>
		</g>
		<g id="L-209_1_" class="property__active" ng-class="lomas.inmovablesClassList[208]" ng-click="lomas.showPropertyData(44, '209')">
			<polyline id="LL-209_1_" class="property pb-sprite-2" points="828.6,499.1 790,499.1 790,421.9 828.6,421.9 828.6,499.1 			"/>
			<text transform="matrix(0 -1 1 0 797.7678 470.6496)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 801.4728 497.1721)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 801.4728 429.6369)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 816.8234 477.1603)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 807.2609 468.5256)" class="st4 st5 st3">209</text>
			<g>
				<polyline class="st6" points="809.3,489.5 804.2,484.3 809.3,479.2 809.3,489.5 				"/>
				<polyline class="st7" points="809.3,489.5 809.3,479.2 814.5,484.3 809.3,489.5 				"/>
			</g>
		</g>
		<g id="L-210_1_" class="property__active" ng-class="lomas.inmovablesClassList[209]" ng-click="lomas.showPropertyData(44, '210')"> 
			<polyline id="LL-210_1_" class="property pb-sprite-2" points="790,421.9 790,383.3 867.2,383.3 867.2,421.9 790,421.9 			"/>
			<text transform="matrix(0 -1 1 0 797.7678 410.4963)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 865.3029 410.5021)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 818.506 391.0495)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 809.1561 410.4245)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 820.6349 399.9123)" class="st4 st5 st3">210</text>
		</g>
		<g id="L-211_1_"  class="property__active" ng-class="lomas.inmovablesClassList[210]" ng-click="lomas.showPropertyData(44, '211')">
			<polyline id="LL-211_1_" class="property pb-sprite-1" points="790,383.3 790,344.7 867.2,344.7 867.2,383.3 790,383.3 			"/>
			<text transform="matrix(0 -1 1 0 797.7678 371.9094)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 865.3029 371.9094)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 818.506 352.4621)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 809.1552 371.8365)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 820.6349 361.3239)" class="st4 st5 st3">211</text>
		</g>
		<g id="L-212_1_" class="property__active" ng-class="lomas.inmovablesClassList[211]" ng-click="lomas.showPropertyData(44, '212')">
			<polyline id="LL-212_1_" class="property pb-sprite-2" points="790,344.7 790,306.2 867.2,306.2 867.2,344.7 790,344.7 			"/>
			<text transform="matrix(0 -1 1 0 797.7678 333.3259)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 865.3029 333.319)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 818.506 313.8698)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 809.1583 333.2441)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 820.6349 322.7375)" class="st4 st5 st3">212</text>
		</g>
		<g id="L-213_1_" class="property__active" ng-class="lomas.inmovablesClassList[212]" ng-click="lomas.showPropertyData(44, '213')">
			<polyline id="LL-213_1_" class="property pb-sprite-1" points="790,306.2 790,267.6 867.2,267.6 867.2,306.2 790,306.2 			"/>
			<text transform="matrix(0 -1 1 0 797.7678 294.7307)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 865.301 294.7307)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 818.506 275.2785)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 809.1575 294.6517)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 820.6349 284.1462)" class="st4 st5 st3">213</text>
		</g>
		<g id="L-214_1_" class="property__active" ng-class="lomas.inmovablesClassList[213]" ng-click="lomas.showPropertyData(44, '214')">
			<polyline id="LL-214_1_" class="property pb-sprite-2" points="790,267.6 790,229 867.2,229 867.2,267.6 790,267.6 			"/>
			<text transform="matrix(0 -1 1 0 797.7678 256.1432)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 865.301 256.1384)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 818.506 236.694)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 809.1606 256.0603)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 820.6349 245.6882)" class="st4 st5 st3">214</text>
		</g>
		<g id="L-215_1_" class="property__active" ng-class="lomas.inmovablesClassList[214]" ng-click="lomas.showPropertyData(44, '215')">
			<polyline id="LL-215_1_" class="property pb-sprite-1" points="790,229 790,190.4 867.2,190.4 867.2,229 790,229 			"/>
			<text transform="matrix(0 -1 1 0 797.7678 217.547)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 865.3029 217.5539)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 818.506 198.1012)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 809.1597 217.4723)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 820.6349 207.0968)" class="st4 st5 st3">215</text>
		</g>
		<g id="L--216_1_" class="property__active" ng-class="lomas.inmovablesClassList[215]" ng-click="lomas.showPropertyData(44, '216')">
			<polyline id="LL-216_1_" class="property pb-sprite-2" points="790,190.4 790,147.1 867.2,147.1 867.2,190.4 790,190.4 			"/>
			<text transform="matrix(0 -1 1 0 797.7678 176.6022)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(0 -1 1 0 865.3029 176.6061)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(1 0 0 1 818.506 154.779)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 809.1589 178.8838)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.7" y="0" class="st1 st2 st3">3.63 m2</tspan></text>
			<text transform="matrix(1 0 0 1 820.6349 166.1471)" class="st4 st5 st3">216</text>
			<g>
				<polyline class="st6" points="804.8,173.8 799.7,168.7 804.8,163.6 804.8,173.8 				"/>
				<polyline class="st7" points="804.8,173.8 804.8,163.6 809.9,168.7 804.8,173.8 				"/>
			</g>
		</g>
		<g id="DIVISIONES_6_">
			<line class="st9" x1="867.2" y1="499.1" x2="867.2" y2="147.1"/>
			<line class="st9" x1="790" y1="190.4" x2="944.4" y2="190.4"/>
			<line class="st9" x1="790" y1="229" x2="944.4" y2="229"/>
			<line class="st9" x1="790" y1="267.6" x2="944.4" y2="267.6"/>
			<line class="st9" x1="790" y1="306.2" x2="944.4" y2="306.2"/>
			<line class="st9" x1="790" y1="344.7" x2="944.4" y2="344.7"/>
			<line class="st9" x1="790" y1="383.3" x2="944.4" y2="383.3"/>
			<line class="st9" x1="790" y1="421.9" x2="944.4" y2="421.9"/>
			<line class="st9" x1="905.8" y1="421.9" x2="905.8" y2="499.1"/>
			<line class="st9" x1="828.6" y1="499.1" x2="828.6" y2="421.9"/>
		</g>
	</g>
	<g id="ISLA_M">
		<g id="M-217" class="property__active" ng-class="lomas.inmovablesClassList[216]" ng-click="lomas.showPropertyData(44, '217')">
			<polyline id="ML-217" class="property pb-sprite-1" points="668,190.4 668,147.1 745.2,147.1 745.2,190.4 668,190.4 			"/>
			<text transform="matrix(0 -1 1 0 675.7297 176.6022)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(0 -1 1 0 743.2648 176.6061)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(1 0 0 1 696.468 154.779)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 681.2581 178.8811)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.7" y="0" class="st1 st2 st3">3.63 m2</tspan></text>
			<text transform="matrix(1 0 0 1 698.591 166.1471)" class="st4 st5 st3">217</text>
			<g>
				<polyline class="st6" points="730.4,173.8 725.3,168.7 730.4,163.6 730.4,173.8 				"/>
				<polyline class="st7" points="730.4,173.8 730.4,163.6 735.5,168.7 730.4,173.8 				"/>
			</g>
		</g>
		<g id="M-218" class="property__active" ng-class="lomas.inmovablesClassList[217]" ng-click="lomas.showPropertyData(44, '218')">
			<polyline id="ML-218" class="property pb-sprite-2" points="668,229 668,190.4 745.2,190.4 745.2,229 668,229 			"/>
			<text transform="matrix(0 -1 1 0 675.7297 217.547)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 743.2648 217.5539)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 696.468 198.1012)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 681.257 217.4716)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 698.591 207.0968)" class="st4 st5 st3">218</text>
		</g>
		<g id="M-219" class="property__active" ng-class="lomas.inmovablesClassList[218]" ng-click="lomas.showPropertyData(44, '219')">
			<polyline id="ML-219" class="property pb-sprite-1" points="668,267.6 668,229 745.2,229 745.2,267.6 668,267.6 			"/>
			<text transform="matrix(0 -1 1 0 675.7297 256.1432)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 743.2648 256.1384)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 696.468 236.694)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 681.2588 256.0625)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 698.591 245.6882)" class="st4 st5 st3">219</text>
		</g>
		<g id="M-220" class="property__active" ng-class="lomas.inmovablesClassList[219]" ng-click="lomas.showPropertyData(44, '220')">
			<polyline id="ML-220" class="property pb-sprite-2" points="668,306.2 668,267.6 745.2,267.6 745.2,306.2 668,306.2 			"/>
			<text transform="matrix(0 -1 1 0 675.7297 294.7307)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 743.2609 294.7307)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 696.468 275.2785)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 681.2596 294.6549)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 698.591 284.2785)" class="st4 st5 st3">220</text>
		</g>
		<g id="M-221"class="property__active" ng-class="lomas.inmovablesClassList[220]" ng-click="lomas.showPropertyData(44, '221')">
			<polyline id="ML-221" class="property pb-sprite-1" points="668,344.7 668,306.2 745.2,306.2 745.2,344.7 668,344.7 			"/>
			<text transform="matrix(0 -1 1 0 675.7297 333.3259)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 743.2648 333.319)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 696.468 313.8698)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 681.2585 333.2415)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 698.591 322.3718)" class="st4 st5 st3">221</text>
		</g>
		<g id="M-222" class="property__active" ng-class="lomas.inmovablesClassList[221]" ng-click="lomas.showPropertyData(44, '222')">
			<polyline id="ML-222" class="property pb-sprite-2" points="668,383.3 668,344.7 745.2,344.7 745.2,383.3 668,383.3 			"/>
			<text transform="matrix(0 -1 1 0 675.7297 371.9094)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 743.2648 371.9094)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 696.468 352.4621)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 681.2593 371.829)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 698.591 361.4562)" class="st4 st5 st3">222</text>
		</g>
		<g id="M-223" class="property__active" ng-class="lomas.inmovablesClassList[222]" ng-click="lomas.showPropertyData(44, '223')">
			<polyline id="ML-223" class="property pb-sprite-1" points="668,421.9 668,383.3 745.2,383.3 745.2,421.9 668,421.9 			"/>
			<text transform="matrix(0 -1 1 0 675.7316 410.4963)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 743.2648 410.5021)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 696.468 391.0495)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 681.2582 410.4214)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 698.591 400.0422)" class="st4 st5 st3">223</text>
		</g>
		<g id="M-224" class="property__active" ng-class="lomas.inmovablesClassList[223]" ng-click="lomas.showPropertyData(44, '224')">
			<polyline id="ML-224" class="property pb-sprite-1" points="745.2,499.1 706.6,499.1 706.6,421.9 745.2,421.9 745.2,499.1 			"/>
			<text transform="matrix(0 -1 1 0 743.2648 470.6418)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 718.0217 497.1721)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 718.0217 429.6369)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 714.3176 470.6408)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 733.3723 477.1574)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 723.3156 468.5226)" class="st4 st5 st3">224</text>
			<g>
				<polyline class="st6" points="725.9,489.5 720.8,484.3 725.9,479.2 725.9,489.5 				"/>
				<polyline class="st7" points="725.9,489.5 725.9,479.2 731,484.3 725.9,489.5 				"/>
			</g>
		</g>
		<g id="M-225" class="property__active" ng-class="lomas.inmovablesClassList[224]" ng-click="lomas.showPropertyData(44, '225')">
			<polyline id="ML-225" class="property pb-sprite-2" points="706.6,499.1 668,499.1 668,421.9 706.6,421.9 706.6,499.1 			"/>
			<text transform="matrix(0 -1 1 0 675.7297 470.6496)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 679.4318 497.1721)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 679.4318 429.6369)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 694.7824 477.1603)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 684.7258 468.5226)" class="st4 st5 st3">225</text>
		</g>
		<g id="M-226" class="property__active" ng-class="lomas.inmovablesClassList[225]" ng-click="lomas.showPropertyData(44, '226')">
			<polyline id="ML-226" class="property pb-sprite-1" points="668,499.1 629.4,499.1 629.4,421.9 668,421.9 668,499.1 			"/>
			<text transform="matrix(1 0 0 1 640.8449 497.1721)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 640.8449 429.6369)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 637.1379 470.6418)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 656.1916 477.1603)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 645.6359 468.5226)" class="st4 st5 st3">226</text>
		</g>
		<g id="M-227" class="property__active" ng-class="lomas.inmovablesClassList[226]" ng-click="lomas.showPropertyData(44, '227')">
			<polyline id="ML-227" class="property pb-sprite-2" points="629.4,499.1 590.8,499.1 590.8,421.9 629.4,421.9 629.4,499.1 			"/>
			<text transform="matrix(0 -1 1 0 598.5471 470.6418)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 602.2531 497.1721)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 602.2531 429.6369)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 617.5998 477.1603)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 607.5441 468.5226)" class="st4 st5 st3">227</text>
			<g>
				<polyline class="st6" points="610.1,489.5 605,484.3 610.1,479.2 610.1,489.5 				"/>
				<polyline class="st7" points="610.1,489.5 610.1,479.2 615.2,484.3 610.1,489.5 				"/>
			</g>
		</g>
		<g id="M-228" class="property__active" ng-class="lomas.inmovablesClassList[227]" ng-click="lomas.showPropertyData(44, '228')"> 
			<polyline id="ML-228" class="property pb-sprite-2" points="590.8,421.9 590.8,383.3 668,383.3 668,421.9 590.8,421.9 			"/>
			<text transform="matrix(0 -1 1 0 598.5471 410.4963)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 666.0822 410.5021)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 619.2853 391.0495)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 609.9328 410.4206)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 621.4123 400.0422)" class="st4 st5 st3">228</text>
		</g>
		<g id="M-229" class="property__active" ng-class="lomas.inmovablesClassList[228]" ng-click="lomas.showPropertyData(44, '229')">
			<polyline id="ML-229" class="property pb-sprite-1" points="590.8,383.3 590.8,344.7 668,344.7 668,383.3 590.8,383.3 			"/>
			<text transform="matrix(0 -1 1 0 598.5471 371.9094)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 666.0822 371.9094)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 619.2853 352.4621)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 609.9339 371.8297)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 621.4123 361.4562)" class="st4 st5 st3">229</text>
		</g>
		<g id="M-230"  class="property__active" ng-class="lomas.inmovablesClassList[229]" ng-click="lomas.showPropertyData(44, '230')">
			<polyline id="ML-230" class="property pb-sprite-2" points="590.8,344.7 590.8,306.2 668,306.2 668,344.7 590.8,344.7 			"/>
			<text transform="matrix(0 -1 1 0 598.5471 333.319)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 666.0822 333.319)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 619.2853 313.8698)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 609.9321 333.2407)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 621.4123 322.8659)" class="st4 st5 st3">230</text>
		</g>
		<g id="M-231" class="property__active" ng-class="lomas.inmovablesClassList[230]" ng-click="lomas.showPropertyData(44, '231')">
			<polyline id="ML-231" class="property pb-sprite-1" points="590.8,306.2 590.8,267.6 668,267.6 668,306.2 590.8,306.2 			"/>
			<text transform="matrix(0 -1 1 0 598.548 294.7307)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 666.0822 294.7307)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 619.2853 275.2785)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 609.9332 294.6551)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 621.4123 284.2785)" class="st4 st5 st3">231</text>
		</g>
		<g id="M-232"  class="property__active" ng-class="lomas.inmovablesClassList[231]" ng-click="lomas.showPropertyData(44, '232')">
			<polyline id="ML-232" class="property pb-sprite-2" points="590.8,267.6 590.8,229 668,229 668,267.6 590.8,267.6 			"/>
			<text transform="matrix(0 -1 1 0 598.548 256.1384)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 666.0822 256.1432)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 619.2853 236.694)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 609.9305 256.0617)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 621.4123 245.6882)" class="st4 st5 st3">232</text>
		</g>
		<g id="M-233" class="property__active" ng-class="lomas.inmovablesClassList[232]" ng-click="lomas.showPropertyData(44, '233')">
			<polyline class="property pb-sprite-1" points="590.8,229 590.8,190.4 668,190.4 668,229 590.8,229 			"/>
			<text transform="matrix(0 -1 1 0 598.5471 217.547)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 666.0822 217.5539)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 619.2853 198.1012)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 609.9355 217.4713)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 621.4123 207.0968)" class="st4 st5 st3">233</text>
		</g>
		<g id="M-234" class="property__active" ng-class="lomas.inmovablesClassList[233]" ng-click="lomas.showPropertyData(44, '234')">
			<polyline id="ML-234" class="property pb-sprite-2" points="590.8,190.4 590.8,147.1 668,147.1 668,190.4 590.8,190.4 			"/>
			<text transform="matrix(0 -1 1 0 598.5471 176.6022)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(0 -1 1 0 666.0822 176.6061)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(1 0 0 1 619.2853 154.779)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 609.9327 178.8818)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.7" y="0" class="st1 st2 st3">3.63 m2</tspan></text>
			<text transform="matrix(1 0 0 1 621.4123 166.1471)" class="st4 st5 st3">234</text>
			<g>
				<polyline class="st6" points="605.6,173.8 600.5,168.7 605.6,163.6 605.6,173.8 				"/>
				<polyline class="st7" points="605.6,173.8 605.6,163.6 610.7,168.7 605.6,173.8 				"/>
			</g>
		</g>
		<g id="DIVISIONES_11_">
			<line class="st9" x1="668" y1="499.1" x2="668" y2="147.1"/>
			<line class="st9" x1="590.8" y1="190.4" x2="745.2" y2="190.4"/>
			<line class="st9" x1="590.8" y1="229" x2="745.2" y2="229"/>
			<line class="st9" x1="590.8" y1="267.6" x2="745.2" y2="267.6"/>
			<line class="st9" x1="590.8" y1="306.2" x2="745.2" y2="306.2"/>
			<line class="st9" x1="590.8" y1="344.7" x2="745.2" y2="344.7"/>
			<line class="st9" x1="590.8" y1="383.3" x2="745.2" y2="383.3"/>
			<line class="st9" x1="590.8" y1="421.9" x2="745.2" y2="421.9"/>
			<line class="st9" x1="706.6" y1="421.9" x2="706.6" y2="499.1"/>
			<line class="st9" x1="629.4" y1="499.1" x2="629.4" y2="421.9"/>
		</g>
	</g>
	<g id="ISLA_N">
		<g id="N-235_1_" class="property__active" ng-class="lomas.inmovablesClassList[234]" ng-click="lomas.showPropertyData(44, '235')">
			<polyline id="NL-235_1_" class="property pb-sprite-1" points="468.8,190.4 468.8,147.1 546,147.1 546,190.4 468.8,190.4 			"/>
			<text transform="matrix(0 -1 1 0 476.5041 176.6022)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(0 -1 1 0 544.0392 176.6022)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(1 0 0 1 497.2424 154.779)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 482.0329 178.8767)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.7" y="0" class="st1 st2 st3">3.63 m2</tspan></text>
			<text transform="matrix(1 0 0 1 499.3713 168.5051)" class="st4 st5 st3">235</text>
			<g>
				<polyline class="st6" points="531.2,173.8 526.1,168.7 531.2,163.6 531.2,173.8 				"/>
				<polyline class="st7" points="531.2,173.8 531.2,163.6 536.3,168.7 531.2,173.8 				"/>
			</g>
		</g>
		<g id="N-236_1_" class="property__active" ng-class="lomas.inmovablesClassList[235]" ng-click="lomas.showPropertyData(44, '236')">
			<polyline id="NL-236_1_" class="property pb-sprite-2" points="468.8,229 468.8,190.4 546,190.4 546,229 468.8,229 			"/>
			<text transform="matrix(0 -1 1 0 476.5041 217.547)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 544.0392 217.547)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 497.2424 198.1012)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 482.0352 217.4706)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 499.3713 207.0968)" class="st4 st5 st3">236</text>
		</g>
		<g id="N-237_1_" class="property__active" ng-class="lomas.inmovablesClassList[236]" ng-click="lomas.showPropertyData(44, '237')">
			<polyline id="NL-237_1_" class="property pb-sprite-1" points="468.8,267.6 468.8,229 546,229 546,267.6 468.8,267.6 			"/>
			<text transform="matrix(0 -1 1 0 476.507 256.1384)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 544.0392 256.1432)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 497.2424 236.694)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 482.0399 256.0601)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 499.3713 245.6882)" class="st4 st5 st3">237</text>
		</g>
		<g id="N-238_1_" class="property__active" ng-class="lomas.inmovablesClassList[237]" ng-click="lomas.showPropertyData(44, '238')">
			<polyline id="NL-238_1_" class="property pb-sprite-2" points="468.8,306.2 468.8,267.6 546,267.6 546,306.2 468.8,306.2 			"/>
			<text transform="matrix(0 -1 1 0 476.507 294.7307)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 544.0392 294.7307)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 497.2424 275.2785)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 482.032 294.6495)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 499.3713 284.2785)" class="st4 st5 st3">238</text>
		</g>
		<g id="N-239_1_" class="property__active" ng-class="lomas.inmovablesClassList[238]" ng-click="lomas.showPropertyData(44, '239')">
			<polyline id="NL-239_1_" class="property pb-sprite-1" points="468.8,344.7 468.8,306.2 546,306.2 546,344.7 468.8,344.7 			"/>
			<text transform="matrix(0 -1 1 0 476.5041 333.319)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 544.0392 333.3151)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 497.2424 313.8698)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 482.0338 333.2419)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 499.3713 322.3718)" class="st4 st5 st3">239</text>
		</g>
		<g id="N-240_1_" class="property__active" ng-class="lomas.inmovablesClassList[239]" ng-click="lomas.showPropertyData(44, '240')">
			<polyline id="NL-240_1_" class="property pb-sprite-2" points="468.8,383.3 468.8,344.7 546,344.7 546,383.3 468.8,383.3 			"/>
			<text transform="matrix(0 -1 1 0 476.5041 371.9094)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 544.0392 371.9094)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 497.2424 352.4621)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 482.0351 371.828)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 499.3713 361.4562)" class="st4 st5 st3">240</text>
		</g>
		<g id="N-241_1_" class="property__active" ng-class="lomas.inmovablesClassList[240]" ng-click="lomas.showPropertyData(44, '241')">
			<polyline id="NL-241_1_" class="property pb-sprite-1" points="468.8,421.9 468.8,383.3 546,383.3 546,421.9 468.8,421.9 			"/>
			<text transform="matrix(0 -1 1 0 544.0392 410.4963)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 497.2424 391.0495)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 482.0349 410.4185)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 499.3713 400.0422)" class="st4 st5 st3">241</text>
		</g>
		<g id="N-242_1_" class="property__active" ng-class="lomas.inmovablesClassList[241]" ng-click="lomas.showPropertyData(44, '242')">
			<polyline id="NL-242_1_" class="property pb-sprite-1" points="546,499.1 507.4,499.1 507.4,421.9 546,421.9 546,499.1 			"/>
			<text transform="matrix(0 -1 1 0 544.0392 470.6408)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 518.801 497.1721)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 518.801 429.6369)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 515.0964 470.6418)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 534.1506 477.1603)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 524.092 468.5226)" class="st4 st5 st3">242</text>
			<g>
				<polyline class="st6" points="526.7,489.5 521.6,484.3 526.7,479.2 526.7,489.5 				"/>
				<polyline class="st7" points="526.7,489.5 526.7,479.2 531.8,484.3 526.7,489.5 				"/>
			</g>
		</g>
		<g id="N-243_1_" class="property__active" ng-class="lomas.inmovablesClassList[242]" ng-click="lomas.showPropertyData(44, '243')">
			<polyline id="NL-243_1_" class="property pb-sprite-2" points="507.4,499.1 468.8,499.1 468.8,421.9 507.4,421.9 507.4,499.1 			"/>
			<text transform="matrix(0 -1 1 0 476.5041 470.6418)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 480.2097 497.1721)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 480.2097 429.6369)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 495.5593 477.1603)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 485.5026 468.5226)" class="st4 st5 st3">243</text>
		</g>
		<g id="N-244_1_"  class="property__active" ng-class="lomas.inmovablesClassList[243]" ng-click="lomas.showPropertyData(44, '244')">
			<polyline id="NL-244_1_" class="property pb-sprite-1" points="468.8,499.1 430.2,499.1 430.2,421.9 468.8,421.9 468.8,499.1 			"/>
			<text transform="matrix(1 0 0 1 441.6232 497.1721)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 441.6232 429.6369)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 437.9128 470.6418)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 456.9709 477.1603)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 446.9118 468.5226)" class="st4 st5 st3">244</text>
		</g>
		<g id="N-245_1_" class="property__active" ng-class="lomas.inmovablesClassList[244]" ng-click="lomas.showPropertyData(44, '245')">
			<polyline id="NL-245_1_" class="property pb-sprite-2" points="430.2,499.1 391.6,499.1 391.6,421.9 430.2,421.9 430.2,499.1 			"/>
			<text transform="matrix(0 -1 1 0 399.3283 470.6418)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 403.0319 497.1721)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 403.0319 429.6369)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 418.3806 477.1603)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 408.8185 468.5226)" class="st4 st5 st3">245</text>
			<g>
				<polyline class="st6" points="410.9,489.5 405.8,484.3 410.9,479.2 410.9,489.5 				"/>
				<polyline class="st7" points="410.9,489.5 410.9,479.2 416,484.3 410.9,489.5 				"/>
			</g>
		</g>
		<g id="N-246_1_" class="property__active" ng-class="lomas.inmovablesClassList[245]" ng-click="lomas.showPropertyData(44, '246')">
			<polyline id="NL-246_1_" class="property pb-sprite-2" points="391.6,421.9 391.6,383.3 468.8,383.3 468.8,421.9 391.6,421.9 			"/>
			<text transform="matrix(0 -1 1 0 399.3273 410.5021)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 466.8605 410.4963)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 420.0656 391.0495)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 410.7129 410.4255)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 422.1887 400.0422)" class="st4 st5 st3">246</text>
		</g>
		<g id="N-247_1_" class="property__active" ng-class="lomas.inmovablesClassList[246]" ng-click="lomas.showPropertyData(44, '247')">
			<polyline id="NL-247_1_" class="property pb-sprite-1" points="391.6,383.3 391.6,344.7 468.8,344.7 468.8,383.3 391.6,383.3 			"/>
			<text transform="matrix(0 -1 1 0 399.3283 371.9094)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 466.8586 371.9074)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 420.0656 352.4621)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 410.7092 371.8331)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 422.1887 361.4562)" class="st4 st5 st3">247</text>
		</g>
		<g id="N-248_1_" class="property__active" ng-class="lomas.inmovablesClassList[247]" ng-click="lomas.showPropertyData(44, '248')">
			<polyline id="NL-248_1_" class="property pb-sprite-2" points="391.6,344.7 391.6,306.2 468.8,306.2 468.8,344.7 391.6,344.7 			"/>
			<text transform="matrix(0 -1 1 0 399.3283 333.319)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 466.8586 333.319)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 420.0656 313.8698)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 410.7098 333.2407)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 422.1887 322.8659)" class="st4 st5 st3">248</text>
		</g>
		<g id="N-249_1_" class="property__active" ng-class="lomas.inmovablesClassList[248]" ng-click="lomas.showPropertyData(44, '249')">
			<polyline id="NL-249_1_" class="property pb-sprite-1" points="391.6,306.2 391.6,267.6 468.8,267.6 468.8,306.2 391.6,306.2 			"/>
			<text transform="matrix(0 -1 1 0 399.3273 294.7307)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 466.8586 294.7307)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 420.0656 275.2785)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 410.7129 294.6532)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 422.1887 284.2785)" class="st4 st5 st3">249</text>
		</g>
		<g id="N-250_1_" class="property__active" ng-class="lomas.inmovablesClassList[249]" ng-click="lomas.showPropertyData(44, '250')">
			<polyline id="NL-250_1_" class="property pb-sprite-2" points="391.6,267.6 391.6,229 468.8,229 468.8,267.6 391.6,267.6 			"/>
			<text transform="matrix(0 -1 1 0 399.3273 256.1384)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 466.8586 256.1384)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 420.0656 236.694)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 410.7091 256.0603)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 422.1887 245.6882)" class="st4 st5 st3">250</text>
		</g>
		<g id="N-251_1_" class="property__active" ng-class="lomas.inmovablesClassList[250]" ng-click="lomas.showPropertyData(44, '251')">
			<polyline id="NL-251_1_" class="property pb-sprite-1" points="391.6,229 391.6,190.4 468.8,190.4 468.8,229 391.6,229 			"/>
			<text transform="matrix(0 -1 1 0 399.3244 217.547)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 466.8586 217.547)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 420.0656 198.1012)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 410.7103 217.4679)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 422.1887 207.0968)" class="st4 st5 st3">251</text>
		</g>
		<g id="N-252_1_" class="property__active" ng-class="lomas.inmovablesClassList[251]" ng-click="lomas.showPropertyData(44, '252')">
			<polyline id="NL-252_1_" class="property pb-sprite-2" points="391.6,190.4 391.6,147.1 468.8,147.1 468.8,190.4 391.6,190.4 			"/>
			<text transform="matrix(0 -1 1 0 399.3283 176.6022)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(0 -1 1 0 466.8586 176.6022)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(1 0 0 1 420.0656 154.779)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 410.7109 178.8764)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.7" y="0" class="st1 st2 st3">3.63 m2</tspan></text>
			<text transform="matrix(1 0 0 1 422.1887 166.1471)" class="st4 st5 st3">252</text>
			<g>
				<polyline class="st6" points="406.4,173.8 401.3,168.7 406.4,163.6 406.4,173.8 				"/>
				<polyline class="st7" points="406.4,173.8 406.4,163.6 411.5,168.7 406.4,173.8 				"/>
			</g>
		</g>
		<g id="DIVISIONES_3_">
			<text transform="matrix(0 -1 1 0 476.507 410.4963)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<line class="st9" x1="468.8" y1="499.1" x2="468.8" y2="147.1"/>
			<line class="st9" x1="391.6" y1="190.4" x2="546" y2="190.4"/>
			<line class="st9" x1="391.6" y1="229" x2="546" y2="229"/>
			<line class="st9" x1="391.6" y1="267.6" x2="546" y2="267.6"/>
			<line class="st9" x1="391.6" y1="306.2" x2="546" y2="306.2"/>
			<line class="st9" x1="391.6" y1="344.7" x2="546" y2="344.7"/>
			<line class="st9" x1="391.6" y1="383.3" x2="546" y2="383.3"/>
			<line class="st9" x1="391.6" y1="421.9" x2="546" y2="421.9"/>
			<line class="st9" x1="507.4" y1="421.9" x2="507.4" y2="499.1"/>
			<line class="st9" x1="430.2" y1="499.1" x2="430.2" y2="421.9"/>
		</g>
	</g>
	<g id="ISLA_O">
		<g id="O-253" class="property__active" ng-class="lomas.inmovablesClassList[252]" ng-click="lomas.showPropertyData(44, '253')">
			<polyline id="OL-253" class="property pb-sprite-1" points="269.6,190.4 269.6,147.1 346.7,147.1 346.7,190.4 269.6,190.4 			"/>
			<text transform="matrix(0 -1 1 0 277.2824 176.6022)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(0 -1 1 0 344.8161 176.6022)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(1 0 0 1 298.0241 154.7985)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 282.8111 178.8777)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.7" y="0" class="st1 st2 st3">3.63 m2</tspan></text>
			<text transform="matrix(1 0 0 1 300.1486 166.1471)" class="st4 st5 st3">253</text>
			<g>
				<polyline class="st6" points="332,173.8 326.9,168.7 332,163.6 332,173.8 				"/>
				<polyline class="st7" points="332,173.8 332,163.6 337.1,168.7 332,173.8 				"/>
			</g>
		</g>
		<g id="O-254" class="property__active" ng-class="lomas.inmovablesClassList[253]" ng-click="lomas.showPropertyData(44, '254')">
			<polyline id="OL-254" class="property pb-sprite-2" points="269.6,229 269.6,190.4 346.7,190.4 346.7,229 269.6,229 			"/>
			<text transform="matrix(0 -1 1 0 277.2824 217.547)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 344.8161 217.547)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 298.0241 198.1012)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 282.8109 217.4691)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 300.1486 207.0968)" class="st4 st5 st3">254</text>
		</g>
		<g id="O-255" class="property__active" ng-class="lomas.inmovablesClassList[254]" ng-click="lomas.showPropertyData(44, '255')">
			<polyline id="OL-255" class="property pb-sprite-1" points="269.6,267.6 269.6,229 346.7,229 346.7,267.6 269.6,267.6 			"/>
			<text transform="matrix(0 -1 1 0 277.2863 256.1384)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 344.8161 256.1432)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 298.0241 236.694)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 282.8088 256.0605)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 300.1486 245.6882)" class="st4 st5 st3">255</text>
		</g>
		<g id="O-256" class="property__active" ng-class="lomas.inmovablesClassList[255]" ng-click="lomas.showPropertyData(44, '256')">
			<polyline id="OL-256" class="property pb-sprite-2" points="269.6,306.2 269.6,267.6 346.7,267.6 346.7,306.2 269.6,306.2 			"/>
			<text transform="matrix(0 -1 1 0 277.2863 294.7307)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 344.8161 294.7307)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 298.0241 275.2785)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 282.8102 294.6466)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 300.1486 284.2785)" class="st4 st5 st3">256</text>
		</g>
		<g id="O-257" class="property__active" ng-class="lomas.inmovablesClassList[256]" ng-click="lomas.showPropertyData(44, '257')"> 
			<polyline id="OL-257" class="property pb-sprite-1" points="269.6,344.7 269.6,306.2 346.7,306.2 346.7,344.7 269.6,344.7 			"/>
			<text transform="matrix(0 -1 1 0 277.2883 333.319)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 344.8161 333.3151)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 298.0241 313.8698)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 282.813 333.24)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 300.1486 322.3718)" class="st4 st5 st3">257</text>
		</g>
		<g id="O-258" class="property__active" ng-class="lomas.inmovablesClassList[257]" ng-click="lomas.showPropertyData(44, '258')">
			<polyline id="OL-258" class="property pb-sprite-2" points="269.6,383.3 269.6,344.7 346.7,344.7 346.7,383.3 269.6,383.3 			"/>
			<text transform="matrix(0 -1 1 0 277.2883 371.9094)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 344.8161 371.9094)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 298.0241 352.4621)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 282.8099 371.8304)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 300.1486 361.4562)" class="st4 st5 st3">258</text>
		</g>
		<g id="O-259" class="property__active" ng-class="lomas.inmovablesClassList[258]" ng-click="lomas.showPropertyData(44, '259')">
			<polyline id="OL-259" class="property pb-sprite-1" points="269.6,421.9 269.6,383.3 346.7,383.3 346.7,421.9 269.6,421.9 			"/>
			<text transform="matrix(0 -1 1 0 277.2883 410.5021)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 344.8161 410.4963)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 298.0241 391.0495)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 282.8141 410.4224)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 300.1486 400.0422)" class="st4 st5 st3">259</text>
		</g>
		<g id="O-260" class="property__active" ng-class="lomas.inmovablesClassList[259]" ng-click="lomas.showPropertyData(44, '260')">
			<polyline id="OL-260" class="property pb-sprite-1" points="346.7,499.1 308.2,499.1 308.2,421.9 346.7,421.9 346.7,499.1 			"/>
			<text transform="matrix(0 -1 1 0 344.8161 470.6408)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 315.8796 470.6418)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 319.5812 429.6408)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 319.5812 497.1721)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 334.9313 477.1603)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 324.8718 468.5226)" class="st4 st5 st3">260</text>
			<g>
				<polyline class="st6" points="327.5,489.5 322.3,484.3 327.5,479.2 327.5,489.5 				"/>
				<polyline class="st7" points="327.5,489.5 327.5,479.2 332.6,484.3 327.5,489.5 				"/>
			</g>
		</g>
		<g id="O-261" class="property__active" ng-class="lomas.inmovablesClassList[260]" ng-click="lomas.showPropertyData(44, '261')">
			<polyline id="OL-261" class="property pb-sprite-2" points="308.2,499.1 269.6,499.1 269.6,421.9 308.2,421.9 308.2,499.1 			"/>
			<text transform="matrix(0 -1 1 0 277.2883 470.6418)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 280.9919 429.6408)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 280.9919 497.1721)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 296.34 477.1574)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 286.2814 468.5226)" class="st4 st5 st3">261</text>
		</g>
		<g id="O-262" class="property__active" ng-class="lomas.inmovablesClassList[261]" ng-click="lomas.showPropertyData(44, '262')">
			<polyline id="OL-262" class="property pb-sprite-1" points="269.6,499.1 231,499.1 231,421.9 269.6,421.9 269.6,499.1 			"/>
			<text transform="matrix(0 -1 1 0 238.697 470.6418)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 242.3991 429.6408)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 242.3991 497.1721)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 257.7468 477.1574)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 247.6921 468.5226)" class="st4 st5 st3">262</text>
		</g>
		<g id="O-263" class="property__active" ng-class="lomas.inmovablesClassList[262]" ng-click="lomas.showPropertyData(44, '263')">
			<polyline id="OL-263" class="property pb-sprite-2" points="192.4,421.9 231,421.9 231,499.1 231,499.1 216.8,499.1 208.5,499.5 200.4,500.6 
				192.4,502.5 192.4,421.9 			"/>
			<text transform="matrix(0 -1 1 0 200.1061 472.3469)"><tspan x="0" y="0" class="st1 st2 st3">16.7</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 203.8107 429.6408)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 213.0715 493.7658)"><tspan x="0" y="0" class="st1 st2 st3">2.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">5</tspan></text>
			<text transform="matrix(0.9905 -0.1374 0.1374 0.9905 193.6264 499.0698)"><tspan x="0" y="0" class="st1 st2 st3">5.1</tspan><tspan x="12.1" y="0" class="st1 st2 st3">2</tspan></text>
			<text transform="matrix(0 -1 1 0 219.1584 477.1574)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">9.18 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 209.5949 468.5226)" class="st4 st5 st3">263</text>
			<g>
				<polyline class="st6" points="211.4,489.5 206.3,484.3 211.4,479.2 211.4,489.5 				"/>
				<polyline class="st7" points="211.4,489.5 211.4,479.2 216.5,484.3 211.4,489.5 				"/>
			</g>
		</g>
		<g id="O-264" class="property__active" ng-class="lomas.inmovablesClassList[263]" ng-click="lomas.showPropertyData(44, '264')">
			<polyline id="OL-264" class="property pb-sprite-2" points="192.4,421.9 192.4,383.3 269.6,383.3 269.6,421.9 192.4,421.9 			"/>
			<text transform="matrix(0 -1 1 0 267.6384 410.5021)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 200.1061 410.5021)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 220.8464 391.0495)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 211.4853 410.4235)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 222.9675 400.0422)" class="st4 st5 st3">264</text>
		</g>
		<g id="O-265" class="property__active" ng-class="lomas.inmovablesClassList[264]" ng-click="lomas.showPropertyData(44, '265')">
			<polyline id="OL-265" class="property pb-sprite-1" points="192.4,383.3 192.4,344.7 269.6,344.7 269.6,383.3 192.4,383.3 			"/>
			<text transform="matrix(0 -1 1 0 267.6384 371.9094)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 200.1061 371.9094)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 220.8464 352.4621)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 211.4859 371.8316)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 222.9675 361.4562)" class="st4 st5 st3">265</text>
		</g>
		<g id="O-266" class="property__active" ng-class="lomas.inmovablesClassList[265]" ng-click="lomas.showPropertyData(44, '266')">
			<polyline id="OL-266" class="property pb-sprite-2" points="192.4,344.7 192.4,306.2 269.6,306.2 269.6,344.7 192.4,344.7 			"/>
			<text transform="matrix(0 -1 1 0 267.6384 333.319)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 200.1061 333.319)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 220.8464 313.8698)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 211.488 333.2372)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 222.9675 322.8659)" class="st4 st5 st3">266</text>
		</g>
		<g id="O-267" class="property__active" ng-class="lomas.inmovablesClassList[266]" ng-click="lomas.showPropertyData(44, '267')">
			<polyline id="OL-267" class="property pb-sprite-1" points="192.4,306.2 192.4,267.6 269.6,267.6 269.6,306.2 192.4,306.2 			"/>
			<text transform="matrix(0 -1 1 0 267.6384 294.7307)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 200.1061 294.7307)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 220.8464 275.2785)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 211.4843 294.6468)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 222.9675 284.2785)" class="st4 st5 st3">267</text>
		</g>
		<g id="O-268" class="property__active" ng-class="lomas.inmovablesClassList[267]" ng-click="lomas.showPropertyData(44, '268')"> 
			<polyline id="OL-268" class="property pb-sprite-2" points="192.4,267.6 192.4,229 269.6,229 269.6,267.6 192.4,267.6 			"/>
			<text transform="matrix(0 -1 1 0 267.6384 256.1384)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 200.1061 256.1432)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 220.8464 236.694)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 211.4844 256.0612)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 222.9675 245.8976)" class="st4 st5 st3">268</text>
		</g>
		<g id="O-269" class="property__active" ng-class="lomas.inmovablesClassList[268]" ng-click="lomas.showPropertyData(44, '269')">
			<polyline id="OL-269" class="property pb-sprite-1" points="192.4,229 192.4,190.4 269.6,190.4 269.6,229 192.4,229 			"/>
			<text transform="matrix(0 -1 1 0 267.6384 217.547)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1 1 0 200.1032 217.547)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 220.8464 198.1012)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 211.486 217.4649)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">8.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 222.9675 207.0968)" class="st4 st5 st3">269</text>
		</g>
		<g id="O-270" class="property__active" ng-class="lomas.inmovablesClassList[269]" ng-click="lomas.showPropertyData(44, '270')">
			<polyline id="OL-270" class="property pb-sprite-2" points="192.4,190.4 192.4,147.1 269.6,147.1 269.6,190.4 192.4,190.4 			"/>
			<text transform="matrix(0 -1 1 0 267.6384 176.6022)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(0 -1 1 0 200.1032 176.6022)"><tspan x="0" y="0" class="st1 st2 st3">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st3">8</tspan></text>
			<text transform="matrix(1 0 0 1 220.8464 154.7985)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 1.749994e-03 -1.749994e-03 1 211.4852 178.8798)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.7" y="0" class="st1 st2 st3">3.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 222.9675 166.1471)" class="st4 st5 st3">270</text>
			<g>
				<polyline class="st6" points="207.1,173.8 202,168.7 207.1,163.6 207.1,173.8 				"/>
				<polyline class="st7" points="207.1,173.8 207.1,163.6 212.3,168.7 207.1,173.8 				"/>
			</g>
		</g>
		<g id="DIVISONES_1_">
			<line class="st9" x1="269.6" y1="499.1" x2="269.6" y2="147.1"/>
			<line class="st9" x1="192.4" y1="190.4" x2="346.7" y2="190.4"/>
			<line class="st9" x1="192.4" y1="229" x2="346.7" y2="229"/>
			<line class="st9" x1="192.4" y1="267.6" x2="346.7" y2="267.6"/>
			<line class="st9" x1="192.4" y1="306.2" x2="346.7" y2="306.2"/>
			<line class="st9" x1="192.4" y1="344.7" x2="346.7" y2="344.7"/>
			<line class="st9" x1="192.4" y1="383.3" x2="346.7" y2="383.3"/>
			<line class="st9" x1="192.4" y1="421.9" x2="346.7" y2="421.9"/>
			<line class="st9" x1="308.2" y1="421.9" x2="308.2" y2="499.1"/>
			<line class="st9" x1="231" y1="499.1" x2="231" y2="421.9"/>
		</g>
	</g>
	<g id="ISLA_P">
		<g id="P-271_1_" class="property__active" ng-class="lomas.inmovablesClassList[270]" ng-click="lomas.showPropertyData(44, '271')">
			<polyline id="PL-271_1_" class="property pb-sprite-1" points="35.5,190.5 27.5,147.1 147.5,147.1 147.5,190.5 35.5,190.5 			"/>
			<text transform="matrix(0 -1 1 0 145.5969 176.6589)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1805 0.9836 -0.9836 0.1805 31.9754 160.615)"><tspan x="0" y="0" class="st1 st2 st10">9.1</tspan><tspan x="12.1" y="0" class="st1 st2 st10">5</tspan></text>
			<text transform="matrix(1 0 0 1 77.3703 154.7985)"><tspan x="0" y="0" class="st1 st2 st3">24.8</tspan><tspan x="17" y="0" class="st1 st2 st3">9</tspan></text>
			<text transform="matrix(1 0 0 1 66.9445 175.5387)"><tspan x="0" y="0" class="st1 st2 st3">21</tspan><tspan x="9.7" y="0" class="st1 st2 st3">6.49 m2</tspan></text>
			<text transform="matrix(1 0 0 1 79.4948 166.2067)" class="st4 st5 st3">271</text>
		</g>
		<g id="P-272_1_" class="property__active" ng-class="lomas.inmovablesClassList[271]" ng-click="lomas.showPropertyData(44, '272')">
			<polyline id="PL-272_1_" class="property pb-sprite-2" points="43.5,233.9 35.5,190.5 147.5,190.5 147.5,233.9 43.5,233.9 			"/>
			<text transform="matrix(0 -1 1 0 145.5969 220.0763)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1805 0.9836 -0.9836 0.1805 39.9714 204.0353)"><tspan x="0" y="0" class="st1 st2 st10">9.1</tspan><tspan x="12.1" y="0" class="st1 st2 st10">5</tspan></text>
			<text transform="matrix(1 0 0 1 81.382 198.2131)"><tspan x="0" y="0" class="st1 st2 st3">23.2</tspan><tspan x="17" y="0" class="st1 st2 st3">2</tspan></text>
			<text transform="matrix(1 0 0 1 73.883 218.9548)"><tspan x="0" y="0" class="st1 st2 st3">20</tspan><tspan x="9.7" y="0" class="st1 st2 st3">1.53 m2</tspan></text>
			<text transform="matrix(1 0 0 1 83.5055 209.6174)" class="st4 st5 st3">272</text>
		</g>
		<g id="P-273_1_" class="property__active" ng-class="lomas.inmovablesClassList[272]" ng-click="lomas.showPropertyData(44, '273')">
			<polyline id="PL-273_1_" class="property pb-sprite-1" points="51.5,277.3 43.5,233.9 147.5,233.9 147.5,277.3 51.5,277.3 			"/>
			<text transform="matrix(0 -1 1 0 145.5969 263.4865)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1805 0.9836 -0.9836 0.1805 47.9692 247.4523)"><tspan x="0" y="0" class="st1 st2 st10">9.1</tspan><tspan x="12.1" y="0" class="st1 st2 st10">5</tspan></text>
			<text transform="matrix(1 0 0 1 85.3918 241.6203)"><tspan x="0" y="0" class="st1 st2 st3">21.5</tspan><tspan x="17" y="0" class="st1 st2 st3">6</tspan></text>
			<text transform="matrix(1 0 0 1 77.8957 262.3674)"><tspan x="0" y="0" class="st1 st2 st3">18</tspan><tspan x="9.7" y="0" class="st1 st2 st3">6.56 m2</tspan></text>
			<text transform="matrix(1 0 0 1 87.5163 253.0334)" class="st4 st5 st3">273</text>
		</g>
		<g id="P-274_1_" class="property__active" ng-class="lomas.inmovablesClassList[273]" ng-click="lomas.showPropertyData(44, '274')"> 
			<polyline id="PL-274_1_" class="property pb-sprite-2" points="59.6,320.7 51.5,277.3 147.5,277.3 147.5,320.7 59.6,320.7 			"/>
			<text transform="matrix(0 -1 1 0 145.5969 306.904)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1805 0.9836 -0.9836 0.1805 55.9634 290.8709)"><tspan x="0" y="0" class="st1 st2 st10">9.1</tspan><tspan x="12.1" y="0" class="st1 st2 st10">5</tspan></text>
			<text transform="matrix(1 0 0 1 89.4011 285.0388)"><tspan x="0" y="0" class="st1 st2 st3">19.9</tspan><tspan x="17" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 0 0 1 81.9045 305.7834)"><tspan x="0" y="0" class="st1 st2 st3">17</tspan><tspan x="9.7" y="0" class="st1 st2 st3">1.60 m2</tspan></text>
			<text transform="matrix(1 0 0 1 91.5241 295.5163)" class="st4 st5 st3">274</text>
		</g>
		<g id="P-275_1_" class="property__active" ng-class="lomas.inmovablesClassList[274]" ng-click="lomas.showPropertyData(44, '275')">
			<polyline id="PL-275_1_" class="property pb-sprite-1" points="67.6,364.1 59.6,320.7 147.5,320.7 147.5,364.1 67.6,364.1 			"/>
			<text transform="matrix(0 -1 1 0 145.5969 350.3112)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1805 0.9836 -0.9836 0.1805 63.9587 334.2874)"><tspan x="0" y="0" class="st1 st2 st10">9.1</tspan><tspan x="12.1" y="0" class="st1 st2 st10">5</tspan></text>
			<text transform="matrix(1 0 0 1 93.4137 328.4518)"><tspan x="0" y="0" class="st1 st2 st3">18.2</tspan><tspan x="17" y="0" class="st1 st2 st3">4</tspan></text>
			<text transform="matrix(1 0 0 1 85.9133 349.1931)"><tspan x="0" y="0" class="st1 st2 st3">15</tspan><tspan x="9.7" y="0" class="st1 st2 st3">6.64 m2</tspan></text>
			<text transform="matrix(1 0 0 1 95.5339 339.862)" class="st4 st5 st3">275</text>
		</g>
		<g id="P-276_1_" class="property__active" ng-class="lomas.inmovablesClassList[275]" ng-click="lomas.showPropertyData(44, '276')">
			<polyline id="PL-276_1_" class="property pb-sprite-2" points="75.6,407.6 67.6,364.1 147.5,364.1 147.5,407.6 75.6,407.6 			"/>
			<text transform="matrix(0 -1 1 0 145.5969 393.7321)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1805 0.9836 -0.9836 0.1805 71.8682 377.234)"><tspan x="0" y="0" class="st1 st2 st10">8.9</tspan><tspan x="12.1" y="0" class="st1 st2 st10">5</tspan></text>
			<text transform="matrix(1 0 0 1 97.4245 371.8674)"><tspan x="0" y="0" class="st1 st2 st3">16.5</tspan><tspan x="17" y="0" class="st1 st2 st3">7</tspan></text>
			<text transform="matrix(1 0 0 1 89.9255 392.6091)"><tspan x="0" y="0" class="st1 st2 st3">14</tspan><tspan x="9.7" y="0" class="st1 st2 st3">1.67 m2</tspan></text>
			<text transform="matrix(1 0 0 1 99.5475 383.2731)" class="st4 st5 st3">276</text>
		</g>
		<g id="P-277_1_" class="property__active" ng-class="lomas.inmovablesClassList[276]" ng-click="lomas.showPropertyData(44, '277')">
			<polyline id="PL-277_1_" class="property pb-sprite-1" points="83.6,451 75.6,407.6 147.5,407.6 147.5,451 83.6,451 			"/>
			<text transform="matrix(0 -1 1 0 145.5969 437.1398)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="12.1" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.1805 0.9836 -0.9836 0.1805 79.8622 420.6487)"><tspan x="0" y="0" class="st1 st2 st10">9.3</tspan><tspan x="12.1" y="0" class="st1 st2 st10">5</tspan></text>
			<text transform="matrix(1 0 0 1 98.757 415.2814)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="17" y="0" class="st1 st2 st3">2</tspan></text>
			<text transform="matrix(1 0 0 1 105.4411 449.0451)"><tspan x="0" y="0" class="st1 st2 st3">13.2</tspan><tspan x="17" y="0" class="st1 st2 st3">5</tspan></text>
			<text transform="matrix(1 0 0 1 93.9352 436.0217)"><tspan x="0" y="0" class="st1 st2 st3">12</tspan><tspan x="9.7" y="0" class="st1 st2 st3">6.71 m2</tspan></text>
			<text transform="matrix(1 0 0 1 100.8845 426.6867)" class="st4 st5 st3">277</text>
			<line class="st9" x1="147.5" y1="451" x2="83.6" y2="451"/>
		</g>
		<g id="DIVISIONES_2_">
			<line class="st9" x1="147.5" y1="190.5" x2="35.5" y2="190.5"/>
			<line class="st9" x1="147.5" y1="233.9" x2="43.5" y2="233.9"/>
			<line class="st9" x1="147.5" y1="277.3" x2="51.5" y2="277.3"/>
			<line class="st9" x1="147.5" y1="320.7" x2="59.6" y2="320.7"/>
			<line class="st9" x1="147.5" y1="364.1" x2="67.6" y2="364.1"/>
			<line class="st9" x1="147.5" y1="407.6" x2="70.3" y2="407.6"/>
		</g>
	</g>
</g>
<g id="COMPLEMENTO">
	<g>
		<path class="st1" d="M107,61l-1.8,1.6c-0.6-0.9-1.3-1.3-1.9-1.3c-0.3,0-0.6,0.1-0.8,0.3c-0.2,0.2-0.3,0.4-0.3,0.6
			c0,0.2,0.1,0.4,0.2,0.6c0.2,0.3,0.8,0.8,1.8,1.6c0.9,0.8,1.5,1.2,1.7,1.4c0.5,0.5,0.8,1,1,1.4c0.2,0.4,0.3,0.9,0.3,1.5
			c0,1-0.4,1.9-1.1,2.6s-1.6,1-2.8,1c-0.9,0-1.7-0.2-2.3-0.7s-1.2-1.1-1.7-2.1l2-1.2c0.6,1.1,1.3,1.7,2.1,1.7c0.4,0,0.8-0.1,1-0.4
			c0.3-0.2,0.4-0.5,0.4-0.8c0-0.3-0.1-0.6-0.3-0.9c-0.2-0.3-0.7-0.7-1.4-1.3c-1.4-1.1-2.3-2-2.7-2.6c-0.4-0.6-0.6-1.2-0.6-1.8
			c0-0.9,0.3-1.6,1-2.3c0.7-0.6,1.5-0.9,2.5-0.9c0.6,0,1.2,0.1,1.8,0.4C105.7,59.7,106.3,60.2,107,61z"/>
		<path class="st1" d="M109.5,59.3h6.9v2.4h-4.5v2.3h4.5v2.3h-4.5v3.3h4.5v2.4h-6.9V59.3z"/>
		<path class="st1" d="M118.8,59.3h2.5c1.4,0,2.4,0.1,3,0.4c0.6,0.2,1.1,0.7,1.4,1.2s0.5,1.3,0.5,2.1c0,0.8-0.2,1.5-0.6,2.1
			s-1,1-1.8,1.3l3,5.6h-2.6l-2.8-5.3h-0.2v5.3h-2.4V59.3z M121.2,64.2h0.8c0.8,0,1.3-0.1,1.6-0.3c0.3-0.2,0.4-0.5,0.4-1
			c0-0.3-0.1-0.5-0.2-0.7c-0.1-0.2-0.3-0.4-0.6-0.4c-0.2-0.1-0.7-0.1-1.3-0.1h-0.7V64.2z"/>
		<path class="st1" d="M127.9,59.3h2.5l3.2,9l3.2-9h2.5l-4.5,12.6h-2.3L127.9,59.3z"/>
		<path class="st1" d="M141,59.3h2.4v12.6H141V59.3z"/>
		<path class="st1" d="M157.6,61.5l-1.7,1.6c-1.1-1.2-2.4-1.8-3.9-1.8c-1.2,0-2.2,0.4-3,1.2c-0.8,0.8-1.2,1.8-1.2,3
			c0,0.8,0.2,1.6,0.5,2.2c0.4,0.7,0.9,1.2,1.6,1.5c0.7,0.4,1.4,0.6,2.2,0.6c0.7,0,1.3-0.1,1.9-0.4c0.6-0.3,1.2-0.7,1.9-1.4l1.6,1.7
			c-0.9,0.9-1.8,1.5-2.6,1.9c-0.8,0.4-1.8,0.5-2.8,0.5c-2,0-3.6-0.6-4.8-1.9c-1.2-1.2-1.9-2.8-1.9-4.8c0-1.3,0.3-2.4,0.9-3.4
			c0.6-1,1.4-1.8,2.4-2.4c1.1-0.6,2.2-0.9,3.4-0.9c1,0,2,0.2,3,0.7C156.1,60.1,156.9,60.7,157.6,61.5z"/>
		<path class="st1" d="M159.6,59.3h2.4v12.6h-2.4V59.3z"/>
		<path class="st1" d="M170.6,59c1.8,0,3.3,0.6,4.6,1.9c1.3,1.3,1.9,2.9,1.9,4.7c0,1.8-0.6,3.4-1.9,4.7s-2.8,1.9-4.6,1.9
			c-1.9,0-3.5-0.7-4.7-2c-1.3-1.3-1.9-2.9-1.9-4.7c0-1.2,0.3-2.3,0.9-3.3c0.6-1,1.4-1.8,2.4-2.4S169.4,59,170.6,59z M170.6,61.3
			c-1.2,0-2.1,0.4-2.9,1.2c-0.8,0.8-1.2,1.8-1.2,3.1c0,1.4,0.5,2.5,1.5,3.3c0.8,0.6,1.7,1,2.7,1c1.1,0,2.1-0.4,2.9-1.2
			c0.8-0.8,1.2-1.8,1.2-3c0-1.2-0.4-2.2-1.2-3S171.7,61.3,170.6,61.3z"/>
		<path class="st1" d="M186,61l-1.8,1.6c-0.6-0.9-1.3-1.3-1.9-1.3c-0.3,0-0.6,0.1-0.8,0.3c-0.2,0.2-0.3,0.4-0.3,0.6
			c0,0.2,0.1,0.4,0.2,0.6c0.2,0.3,0.8,0.8,1.8,1.6c0.9,0.8,1.5,1.2,1.7,1.4c0.5,0.5,0.8,1,1,1.4c0.2,0.4,0.3,0.9,0.3,1.5
			c0,1-0.4,1.9-1.1,2.6s-1.6,1-2.8,1c-0.9,0-1.7-0.2-2.3-0.7s-1.2-1.1-1.7-2.1l2-1.2c0.6,1.1,1.3,1.7,2.1,1.7c0.4,0,0.8-0.1,1-0.4
			c0.3-0.2,0.4-0.5,0.4-0.8c0-0.3-0.1-0.6-0.3-0.9c-0.2-0.3-0.7-0.7-1.4-1.3c-1.4-1.1-2.3-2-2.7-2.6c-0.4-0.6-0.6-1.2-0.6-1.8
			c0-0.9,0.3-1.6,1-2.3c0.7-0.6,1.5-0.9,2.5-0.9c0.6,0,1.2,0.1,1.8,0.4C184.8,59.7,185.4,60.2,186,61z"/>
	</g>
</g>
</svg>

    </div>

</body>

</html>