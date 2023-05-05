<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contet="ie=edge">
	<meta name="author" content="Ing. Saúl Fernando Torres Hernández">
	<meta name="description" content="Grúpo CCIMA S.A. de C.V." />
	<meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

	<title>Navete Business Park</title>

	<script type="text/javascript" src="media/assets/js/analytics.js"></script>

	<link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/navetec.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
	<script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body ng-controller="NvtSLPQuoteCtrl as nvtSLP">
  
	<md-sidenav class="cc-sidenav md-sidenav-left md-whiteframe-4dp" md-component-id="left">
        <md-toolbar class="md-hue-2">
            <h1 class="md-toolbar-tools">BUSINESS PARK</h1>
        </md-toolbar>
        <a href="#!/Navetec-Beta_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Beta Business Park
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec-Gamma_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Gamma Business Park
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec-Celta_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Celta Business Park
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec-Santa_Rosa_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Santa Rosa Business Park
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec-Gamma_II_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Gamma II Business Park
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec-Aeropuerto_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Aeropuerto Business Park
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec-Pedro_Escobedo_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Pedro Escobedo Business Park
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec-SLP_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                San Luis Potosí
            </div>
        </a>
        <md-toolbar class="md-hue-2">
            <h1 class="md-toolbar-tools">NAVIGATION</h1>
        </md-toolbar>
        <a href="#!/Navetec" ng-click="close()">
            <div class="link-body link-nav">
                Navetec
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/" ng-click="close()">
            <div class="link-body link-nav">
                Grupo CCIMA
            </div>
        </a>
        <md-divider></md-divider>
    </md-sidenav>

    <div ng-controller="sideNavCtrl" class="navbar-fixed">
        <nav class="cc-nav white" role="navigation">
            <div class="nav-wrapper">
                <div class="container">
                    <ul>
                        <li><a href="#!/Navetec" class="nav-logo"><img src="media/assets/img/logos/logo-navetec.svg"></a></li>
                        <li class="right"><md-button class="md-icon-button md-noink" ng-click="toggleLeft()">
                            <svg viewBox="0 0 24 24" width="24"><path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path></svg>
                        </md-button></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

	<div class="modal-dialog" ng-class="nvtSLP.dialogDisplay">
		<div class="backdrop-dialog" ng-click="nvtSLP.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="nvtSLP.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

				<div class="divider"></div>
				
				<div class="p-20 grey lighten-5">

					<div class="p-5">
						<h6 class="futura-med">Navetec Business Park {{nvtSLP.propertyData.condominium}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">{{nvtSLP.propertyData.propertyClass}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">{{nvtSLP.propertyData.type}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Numero {{nvtSLP.propertyData.number}}</h6>
					</div>
					<!-- <div class="p-5">
						<h6 class="futura-light">Dimenciones: {{nvtSLP.propertyData.dimensions}}</h6>
					</div> -->
					<div class="p-5">
						<h6 class="futura-light">Área de {{nvtSLP.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; de ${{ nvtSLP.property.sample.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text">Precio de ${{ nvtSLP.property.sample.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN <span style="color: #857C82; font-size: 12px;">+ I.V.A.</span></h6>
					</div>
                    <div class="p-5">
						<h6 class="futura-light blue-text">Pregunta por nuestras promociones del mes</h6>
					</div>

					<!-- <div class="divider"></div>

					<div class="py-20 ">
					    <h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{nvtSLP.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 24 Meses</h6>
						<h6 class="green-text futura-light">Precio de ${{ nvtSLP.property.sample.discount2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN <span style="color: #857C82; font-size: 12px;">+ I.V.A.</span></h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div> -->

                    <div class="divider"></div>

                    <div class="p-20">
                        <p class="blue-text futura-book">¡Apártalo ahora!</p>
                        <p class="green-text">Con tan solo {{nvtSLP.costToBlock}}</p>
                        <button class="btn blue-bg no__shadow futura-bold">Apártar ahora</button>
                    </div>

				</div>

			</div>

            <div class="divider"></div>

			<div class="option-menu-dialog" ng-controller="ContactMenuCtrl as contactCtrl">
				<md-menu class="right mr-20 mt-10"  md-offset="0 -60">
					<button aria-label="Abrir Menu de Contacto" class="btn blue-bg no__shadow futura-demi" ng-click="contactCtrl.openMenu($mdMenu, $event)">
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
					<h2 class="center-align futura-med">SAN LUIS POTOSÍ 1</h2>
					<div class="quote-description">
						<p class="left">Cotiza facilmente con un solo Click</p>
						<img class="quote-icon-tap mt-15 ml-10 left" src="media/assets/img/icons/tap.svg">
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="color-table">
				<div class="color-block ae-property-active-bg left"></div>
				<p class="pl-40 py-2">DISPONIBLE</p>
			</div>
			<div>
				<div class="color-block mustard-bg left"></div>
				<p class="pl-40 py-2">NO DISPONIBLE</p>
			</div>
    	</div>

        <svg version="1.1" class="quote__map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" viewBox="0 0 1366 952.9" style="enable-background:new 0 0 1366 952.9;" xml:space="preserve">

            <style type="text/css">
                .st0{fill:none;stroke:#FFFFFF;stroke-width:0.15;stroke-miterlimit:10;}
                .st1{fill:#857C82;}
                .st2{clip-path:url(#SVGID_2_);}
                .st3{clip-path:url(#SVGID_4_);}
                .st4{opacity:0.9;}
                .st5{clip-path:url(#SVGID_8_);}
                .st6{fill:#021D49;}
                .st7{fill:#292545;}
                .st8{fill:#9FA0A1;}
                .st9{fill:#C1292E;}
                .st10{fill:#002856;}
                .st12{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;}
                .st13{fill:#352E4B;}
                .st14{fill:none;stroke:#2B2546;stroke-width:2;stroke-miterlimit:10;}
                .st17{font-size:9.7481px;}
                .st18{font-size:9.7482px;}
                .st19{fill:#F4E606;}
                .st21{fill:#E2A63C;}
                .st22{opacity:0.6;fill:#E2A63C;}
                .st24{fill:none;stroke:#FFFFFF;stroke-width:1.0958;stroke-miterlimit:10;}
            </style>

            <image style="overflow:visible;" width="1366" height="953" xlink:href="media/assets/img/navetec/app/slp/slp1.jpg"  transform="matrix(1 0 0 1 1.666667e-02 -1.182796e-02)"></image>

            <g id="MODULO_A">
                <g ng-class="nvtSLP.inmovablesClassList[0]" ng-click="nvtSLP.showPropertyData(24, '1A', nvtSLP.inmovables[0].idProperty)">
                    <polygon class="property nvt-sprite-1" points="1027.6,427.4 1146.8,289.5 1194.1,330.5 1074.4,468.4"/>
                    <text transform="matrix(0.7519 0.6667 -0.6636 0.7481 1045.4637 437.014)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.7519 0.6667 -0.6636 0.7481 1152.4415 313.0612)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.6465 -0.7565 0.7603 0.6495 1095.2589 404.8157)" class="white__fill futura-light st18">569.80 m2</text>
                    <g>
                        <text transform="matrix(0.6496 -0.7602 0.7603 0.6495 1088.4515 394.5388)" class="st19 futura-book st18">NAVE 1A</text>
                    </g>
                    <text transform="matrix(0.6651 -0.7402 0.7441 0.6681 1121.9281 406.7497)" class="white__fill futura-light st17">40.70</text>
                    <g>
                        <polygon class="st21" points="1075.6,410.9 1065.8,420.7 1075.6,430.6"/>
                        <polygon class="st22" points="1075.7,410.9 1075.7,430.6 1085.6,420.8"/>
                    </g>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[1]" ng-click="nvtSLP.showPropertyData(24, '2A', nvtSLP.inmovables[1].idProperty)">
                    <polygon class="property nvt-sprite-2" points="1098.9,247.9 1146.8,289.5 1027.6,427.4 979.7,385.8"/>
                    <text transform="matrix(0.7519 0.6667 -0.6636 0.7481 998.8801 395.5676)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.7519 0.6667 -0.6636 0.7481 1105.8629 271.6149)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.6465 -0.7565 0.7603 0.6495 1048.6787 363.3687)" class="white__fill futura-light st18">569.80 m2</text>
                    <g>
                        <text transform="matrix(0.6496 -0.7602 0.7603 0.6495 1041.8719 353.088)" class="st19 futura-book st18">NAVE 2A</text>
                    </g>
                    <text transform="matrix(0.6651 -0.7402 0.7441 0.6681 1075.349 365.3029)" class="white__fill futura-light st17">40.70</text>
                    <g>
                        <polygon class="st21" points="1029.3,369.8 1019.4,379.6 1029.3,389.4"/>
                        <polygon class="st22" points="1029.4,369.8 1029.4,389.4 1039.3,379.6"/>
                    </g>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[2]" ng-click="nvtSLP.showPropertyData(24, '3A', nvtSLP.inmovables[2].idProperty)">
                    <polygon class="property nvt-sprite-1" points="932.6,345.3 979.7,385.8 1098.9,247.9 1051.5,207.4"/>
                    <text transform="matrix(0.7519 0.6667 -0.6636 0.7481 950.3256 352.5388)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.7519 0.6667 -0.6636 0.7481 1057.3077 228.5898)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.6465 -0.7565 0.7603 0.6495 1000.1251 320.3376)" class="white__fill futura-light st18">569.80 m2</text>
                    <g>
                        <text transform="matrix(0.6496 -0.7602 0.7603 0.6495 993.3184 310.0614)" class="st19 futura-book st18">NAVE 3A</text>
                    </g>
                    <text transform="matrix(0.6651 -0.7402 0.7441 0.6681 1026.7941 322.2694)" class="white__fill futura-light st17">40.70</text>
                    <g>
                        <polygon class="st21" points="979.8,328.9 969.9,338.7 979.8,348.6"/>
                        <polygon class="st22" points="979.9,328.9 979.9,348.6 989.8,338.8"/>
                    </g>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[3]" ng-click="nvtSLP.showPropertyData(24, '4A', nvtSLP.inmovables[3].idProperty)">
                    <polygon class="property nvt-sprite-2" points="885.2,304.2 932.6,345.3 1051.5,207.4 1004.1,166.6"/>
                    <text transform="matrix(0.7519 0.6667 -0.6636 0.7481 902.5626 311.0898)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.7519 0.6667 -0.6636 0.7481 1009.537 187.1379)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.6465 -0.7565 0.7603 0.6495 952.3599 278.8884)" class="white__fill futura-light st18">569.80 m2</text>
                    <g>
                        <text transform="matrix(0.6496 -0.7602 0.7603 0.6495 945.5532 268.6122)" class="st19 futura-book st18">NAVE 4A</text>
                    </g>
                    <text transform="matrix(0.6651 -0.7402 0.7441 0.6681 979.0289 280.8232)" class="white__fill futura-light st17">40.70</text>
                    <g>
                        <polygon class="st21" points="934,287.8 924.2,297.6 934,307.5"/>
                        <polygon class="st22" points="934.1,287.8 934.1,307.5 944,297.7"/>
                    </g>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[4]" ng-click="nvtSLP.showPropertyData(24, '5A', nvtSLP.inmovables[4].idProperty)">
                    <polygon class="property nvt-sprite-1" points="885.2,304.2 1004.1,166.6 956.8,125.8 837.5,263.7"/>
                    <text transform="matrix(0.7519 0.6667 -0.6636 0.7481 855.5839 270.4934)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.7519 0.6667 -0.6636 0.7481 962.5702 146.5442)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.6465 -0.7565 0.7603 0.6495 905.3851 238.294)" class="white__fill futura-light st18">569.80 m2</text>
                    <g>
                        <text transform="matrix(0.6496 -0.7602 0.7603 0.6495 898.5768 228.0165)" class="st19 futura-book st18">NAVE 5A</text>
                    </g>
                    <text transform="matrix(0.6651 -0.7402 0.7441 0.6681 932.0536 240.2281)" class="white__fill futura-light st17">40.70</text>
                    <g>
                        <polygon class="st21" points="885.1,247.7 875.2,257.5 885.1,267.4"/>
                        <polygon class="st22" points="885.2,247.7 885.2,267.4 895,257.6"/>
                    </g>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[5]" ng-click="nvtSLP.showPropertyData(24, '6A', nvtSLP.inmovables[5].idProperty)">
                    <polygon class="property nvt-sprite-2" points="790.4,222.4 909.7,84.5 956.8,125.8 837.5,263.7"/>
                    <text transform="matrix(0.7519 0.6667 -0.6636 0.7481 808.6165 229.9032)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.7519 0.6667 -0.6636 0.7481 915.5922 105.9483)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.6465 -0.7565 0.7603 0.6495 858.4075 197.7013)" class="white__fill futura-light st18">569.80 m2</text>
                    <g>
                        <text transform="matrix(0.6496 -0.7602 0.7603 0.6495 851.6028 187.4227)" class="st19 futura-book st18">NAVE 6A</text>
                    </g>
                    <text transform="matrix(0.6651 -0.7402 0.7441 0.6681 885.0798 199.6342)" class="white__fill futura-light st17">40.70</text>
                    <g>
                        <polygon class="st21" points="837.1,205.7 827.3,215.5 837.1,225.4"/>
                        <polygon class="st22" points="837.2,205.7 837.2,225.4 847.1,215.6"/>
                    </g>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[6]" ng-click="nvtSLP.showPropertyData(24, '7A', nvtSLP.inmovables[6].idProperty)">
                    <polygon class="property nvt-sprite-1" points="790.4,222.4 909.7,84.5 862,43.7 743.1,181.8"/>
                    <text transform="matrix(0.7519 0.6667 -0.6636 0.7481 759.6652 187.794)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.7519 0.6667 -0.6636 0.7481 866.6439 63.8416)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.6465 -0.7565 0.7603 0.6495 809.4601 155.5925)" class="white__fill futura-light st18">569.80 m2</text>
                    <g>
                        <text transform="matrix(0.6496 -0.7602 0.7603 0.6495 802.6526 145.3157)" class="st19 futura-book st18">NAVE 7A</text>
                    </g>
                    <text transform="matrix(0.6651 -0.7402 0.7441 0.6681 836.1285 157.5269)" class="white__fill futura-light st17">40.70</text>
                    <g>
                        <polygon class="st21" points="788,164.7 778.2,174.5 788,184.4"/>
                        <polygon class="st22" points="788.2,164.7 788.2,184.4 798,174.6"/>
                    </g>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[7]" ng-click="nvtSLP.showPropertyData(24, '8A', nvtSLP.inmovables[7].idProperty)">
                    <polygon class="property nvt-sprite-2" points="695.4,140.3 814.7,2.9 862,43.7 743.1,181.8"/>
                    <text transform="matrix(0.7519 0.6667 -0.6636 0.7481 713.481 147.5292)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.7519 0.6667 -0.6636 0.7481 820.4652 23.578)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.6465 -0.7565 0.7603 0.6495 763.2753 115.3272)" class="white__fill futura-light st18">569.80 m2</text>
                    <g>
                        <text transform="matrix(0.6496 -0.7602 0.7603 0.6495 756.4658 105.0483)" class="st19 futura-book st18">NAVE 8A</text>
                    </g>
                    <text transform="matrix(0.6651 -0.7402 0.7441 0.6681 789.9451 117.2602)" class="white__fill futura-light st17">40.70</text>
                    <g>
                        <polygon class="st21" points="739.4,124.1 729.6,133.9 739.4,143.8"/>
                        <polygon class="st22" points="739.6,124.1 739.6,143.8 749.4,134"/>
                    </g>
                </g>
                <g id="DIVISIONES">
                    <line class="st24" x1="862" y1="43.7" x2="743.1" y2="181.8"/>
                    <path class="st24" d="M790.4,222.4c1.8-2.1,119.2-137.9,119.2-137.9"/>
                    <line class="st24" x1="956.8" y1="125.8" x2="837.5" y2="263.7"/>
                    <line class="st24" x1="885.2" y1="304.2" x2="1004.1" y2="166.6"/>
                    <line class="st24" x1="1098.9" y1="247.9" x2="979.7" y2="385.8"/>
                    <line class="st24" x1="1027.6" y1="427.4" x2="1146.8" y2="289.5"/>
                    <line class="st24" x1="1051.5" y1="207.4" x2="932.6" y2="345.3"/>
                </g>
            </g>
            <g id="MODULO_B">
                <g ng-class="nvtSLP.inmovablesClassList[24]" ng-click="nvtSLP.showPropertyData(24, '1B', nvtSLP.inmovables[24].idProperty)">
                    <polygon class="property nvt-sprite-1" points="926.2,529.2 976,509.2 1018.9,611.9 969.4,632.9"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 979.8352 623.1213)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 942.9911 533.6454)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 953.7861 556.7606)" class="white__fill futura-light st17">300.00 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 966.0328 555.3109)" class="st19 futura-book st17">NAVE 1B</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 981.4801 551.6694)" class="white__fill futura-light st17">25.00</text>
                    <g>
                        <polygon class="st21" points="959,530.3 949.2,540.1 959.1,550"/>
                        <polygon class="st22" points="959.2,530.3 959.2,550 969,540.2"/>
                    </g>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[25]" ng-click="nvtSLP.showPropertyData(24, '2B', nvtSLP.inmovables[25].idProperty)">
                    <polygon class="property nvt-sprite-2" points="877.3,550.3 926.2,529.2 969.4,632.9 919.9,654.2"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 929.8352 644.4385)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 892.9896 554.9601)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 903.7841 578.0752)" class="white__fill futura-light st17">300.00 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 916.0307 576.6266)" class="st19 futura-book st17">NAVE 2B</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 931.9678 572.9879)" class="white__fill futura-light st17">25.00</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[26]" ng-click="nvtSLP.showPropertyData(24, '3B', nvtSLP.inmovables[26].idProperty)">
                    <polygon class="property nvt-sprite-1" points="827.3,570.5 877.3,550.3 919.9,654.2 870.4,673.4"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 880.623 664.9661)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 843.7778 575.4886)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 854.5727 598.6021)" class="white__fill futura-light st17">300.00 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 866.8201 597.1542)" class="st19 futura-book st17">NAVE 3B</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 883.5823 593.5129)" class="white__fill futura-light st17">25.00</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[27]" ng-click="nvtSLP.showPropertyData(24, '4B', nvtSLP.inmovables[27].idProperty)">
                    <polygon class="property nvt-sprite-2" points="777.5,591.1 827.3,570.5 870.4,673.4 820.7,694.4"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 830.6879 684.703)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 793.8434 595.2262)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 804.6413 618.3401)" class="white__fill futura-light st17">300.00 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 816.8843 616.8898)" class="st19 futura-book st17">NAVE 4B</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 833.3915 614.4526)" class="white__fill futura-light st17">25.00</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[28]" ng-click="nvtSLP.showPropertyData(24, '5B', nvtSLP.inmovables[28].idProperty)">
                    <polygon class="property nvt-sprite-1" points="728.1,611.6 771,715 820.7,694.4 777.5,591.1"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 781.2831 704.9639)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 744.4398 615.4897)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 755.2336 638.605)" class="white__fill futura-light st17">300.00 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 767.4796 637.1525)" class="st19 futura-book st17">NAVE 5B</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 783.9826 634.7161)" class="white__fill futura-light st17">25.00</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[29]" ng-click="nvtSLP.showPropertyData(24, '6B', nvtSLP.inmovables[29].idProperty)">
                    <polygon class="property nvt-sprite-2" points="678.6,632.1 728.1,611.6 771,715 721.2,735.7"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 731.278 724.9672)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 694.4356 635.4884)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 705.2308 658.6028)" class="white__fill futura-light st17">300.00 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 717.477 657.1544)" class="st19 futura-book st17">NAVE 6B</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 733.9809 654.7171)" class="white__fill futura-light st17">25.00</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[30]" ng-click="nvtSLP.showPropertyData(24, '7B', nvtSLP.inmovables[30].idProperty)">
                    <polygon class="property nvt-sprite-1" points="628.9,652.6 671.8,756.6 721.2,735.7 678.6,632.1"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 682.3281 746.5464)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 645.4833 657.0687)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 656.2803 680.1851)" class="white__fill futura-light st17">300.00 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 668.5258 678.7337)" class="st19 futura-book st17">NAVE 7B</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 685.0317 676.2973)" class="white__fill futura-light st17">25.00</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[31]" ng-click="nvtSLP.showPropertyData(24, '8B', nvtSLP.inmovables[31].idProperty)">
                    <polygon class="property nvt-sprite-2" points="579.4,673.4 628.9,652.6 671.8,756.6 622.3,776.9"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 633.1163 766.8078)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 596.2731 677.3337)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 607.0687 700.4473)" class="white__fill futura-light st17">300.00 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 619.3125 698.9977)" class="st19 futura-book st17">NAVE 8B</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 635.82 696.5616)" class="white__fill futura-light st17">25.00</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[32]" ng-click="nvtSLP.showPropertyData(24, '9B', nvtSLP.inmovables[32].idProperty)">
                    <polygon class="property nvt-sprite-1" points="529.9,694 572.8,797.9 622.3,776.9 579.4,673.4"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 582.3255 788.1265)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 545.4811 698.6497)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 556.2774 721.7624)" class="white__fill futura-light st17">300.00 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 568.524 720.3116)" class="st19 futura-book st17">LOTE 9B</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 585.0317 717.876)" class="white__fill futura-light st17">25.00</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[33]" ng-click="nvtSLP.showPropertyData(24, '10B', nvtSLP.inmovables[33].idProperty)">
                    <polygon class="property nvt-sprite-2" points="480.2,715 529.9,694 572.8,797.9 523.1,817.7"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 534.4282 808.1271)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 497.5839 718.6513)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 508.3784 741.7656)" class="white__fill futura-light st17">300.00 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 519.5733 738.0058)" class="st19 futura-book st17">LOTE 10B</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 537.1317 737.8795)" class="white__fill futura-light st17">25.00</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[34]" ng-click="nvtSLP.showPropertyData(24, '11B', nvtSLP.inmovables[34].idProperty)">
                    <polygon class="property nvt-sprite-1" points="430.4,735 473.3,838.7 523.1,817.7 480.2,715"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 483.9016 829.1804)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 447.0574 739.7046)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 457.853 762.8179)" class="white__fill futura-light st17">300.00 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 469.0443 759.0585)" class="st19 futura-book st17">LOTE 11B</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 486.6021 758.9311)" class="white__fill futura-light st17">25.00</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[35]" ng-click="nvtSLP.showPropertyData(24, '12B', nvtSLP.inmovables[35].idProperty)">
                    <polygon class="property nvt-sprite-2" points="381.2,755.8 430.4,735 473.3,838.7 424.4,858.7"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 434.1602 849.4432)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 397.316 759.9663)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 408.1117 783.0808)" class="white__fill futura-light st17">300.00 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 419.3065 779.321)" class="st19 futura-book st17">LOTE 12B</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 436.8651 779.196)" class="white__fill futura-light st17">25.00</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[36]" ng-click="nvtSLP.showPropertyData(24, '13B', nvtSLP.inmovables[36].idProperty)">
                    <polygon class="property nvt-sprite-1" points="331.5,776.3 374.4,879.5 424.4,858.7 381.2,755.8"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 384.1855 870.758)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 347.342 781.2839)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 358.1364 804.3969)" class="white__fill futura-light st17">300.00 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 369.3314 800.6381)" class="st19 futura-book st17">LOTE 13B</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 386.8885 800.5111)" class="white__fill futura-light st17">25.00</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[37]" ng-click="nvtSLP.showPropertyData(24, '14B', nvtSLP.inmovables[37].idProperty)">
                    <polygon class="property nvt-sprite-2" points="281.7,796.6 331.5,776.3 374.4,879.5 325.2,900.6"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 334.446 891.0252)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 297.6034 801.5466)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 308.3988 824.6605)" class="white__fill futura-light st17">300.00 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 319.5905 820.902)" class="st19 futura-book st17">LOTE 14B</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 337.1512 820.7762)" class="white__fill futura-light st17">25.00</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[38]" ng-click="nvtSLP.showPropertyData(24, '15B', nvtSLP.inmovables[38].idProperty)">
                    <polygon class="property nvt-sprite-1" points="232,817.4 275.4,920.8 325.2,900.6 281.7,796.6"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 284.9702 911.2869)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 248.1253 821.8082)" class="white__fill futura-light st17">12.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 258.9226 844.9224)" class="white__fill futura-light st17">300.00 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 270.1143 841.1639)" class="st19 futura-book st17">LOTE 15B</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 287.675 841.0389)" class="white__fill futura-light st17">25.00</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[39]" ng-click="nvtSLP.showPropertyData(24, '16B', nvtSLP.inmovables[39].idProperty)">
                    <polygon class="property nvt-sprite-2" points="171.7,842.7 232,817.4 275.4,920.8 215.4,945.6"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 230.2312 933.9169)" class="white__fill futura-light st17">14.66</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 193.3879 844.4428)" class="white__fill futura-light st17">14.66</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 207.0783 865.674)" class="white__fill futura-light st17">364.03 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 218.2729 861.9122)" class="st19 futura-book st17">LOTE 16B</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 239.2527 860.2481)" class="white__fill futura-light st17">25.00</text>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 192.4071 880.5166)" class="white__fill futura-light st17">25.00</text>
                    <g>
                        <polygon class="st21" points="208.3,841.7 198.5,851.5 208.3,861.4"/>
                        <polygon class="st22" points="208.4,841.7 208.4,861.4 218.3,851.6"/>
                    </g>
                </g>
                <g id="DIVISIONES_5_">
                    <line class="st24" x1="381.2" y1="755.8" x2="424.4" y2="858.7"/>
                    <line class="st24" x1="232" y1="817.4" x2="275.4" y2="920.8"/>
                    <line class="st24" x1="281.7" y1="796.6" x2="325.2" y2="900.6"/>
                    <line class="st24" x1="331.5" y1="776.3" x2="374.4" y2="879.5"/>
                    <line class="st24" x1="430.4" y1="735" x2="473.3" y2="838.7"/>
                    <line class="st24" x1="480.2" y1="715" x2="523.1" y2="817.7"/>
                    <line class="st24" x1="529.9" y1="694" x2="572.8" y2="797.9"/>
                    <line class="st24" x1="579.4" y1="673.4" x2="622.3" y2="776.9"/>
                    <line class="st24" x1="628.9" y1="652.6" x2="671.8" y2="756.6"/>
                    <line class="st24" x1="678.6" y1="632.1" x2="721.2" y2="735.7"/>
                    <line class="st24" x1="728.1" y1="611.6" x2="771" y2="715"/>
                    <line class="st24" x1="777.5" y1="591.1" x2="820.7" y2="694.4"/>
                    <line class="st24" x1="827.3" y1="570.5" x2="870.4" y2="673.4"/>
                    <line class="st24" x1="877.3" y1="550.3" x2="919.9" y2="654.2"/>
                    <line class="st24" x1="926.2" y1="529.2" x2="969.4" y2="632.9"/>
                    <line class="st24" x1="976" y1="509.2" x2="1018.9" y2="611.9"/>
                </g>
            </g>
            <g id="MODULO_C">
                <g ng-class="nvtSLP.inmovablesClassList[40]" ng-click="nvtSLP.showPropertyData(24, '1C', nvtSLP.inmovables[40].idProperty)">
                    <path class="property nvt-sprite-2" d="M714.1,352.9c1.4,3.4,69.7,168.4,69.7,168.4L945.2,454L791,320.8L714.1,352.9z"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 843.7769 491.2755)" class="white__fill futura-light st17">39.14</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 744.4403 353.0055)" class="white__fill futura-light st17">18.72</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 784.7953 399.3769)" class="white__fill futura-light st17">1160.35 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 797.0429 397.9279)" class="st19 futura-book st17">NAVE 1C</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 749.481 422.584)" class="white__fill futura-light st17">40.70</text>
                    <text transform="matrix(0.7604 0.6419 -0.6448 0.7643 843.8666 385.7768)" class="white__fill futura-light st17">45.54</text>
                    <g>
                        <polygon class="st21" points="837.1,449 827.2,458.8 837.1,468.7"/>
                        <polygon class="st22" points="837.2,449 837.2,468.7 847.1,458.9"/>
                    </g>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[41]" ng-click="nvtSLP.showPropertyData(24, '2C', nvtSLP.inmovables[41].idProperty)">
                    <polygon class="property nvt-sprite-1" points="725.7,545 656.2,376.6 714.1,352.9 783.9,521.3"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 741.0098 533.9094)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 678.5707 382.9673)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 705.2302 430.6601)" class="white__fill futura-light st17">569.80 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 717.4753 429.209)" class="st19 futura-book st17">NAVE 2C</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 691.6053 448.6505)" class="white__fill futura-light st17">40.70</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[42]" ng-click="nvtSLP.showPropertyData(24, '3C', nvtSLP.inmovables[42].idProperty)">
                    <polygon class="property nvt-sprite-2" points="598.6,401.1 656.2,376.6 725.7,545 667.8,569.5"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 682.8498 555.6203)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 620.4092 404.681)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 647.071 452.3709)" class="white__fill futura-light st17">569.80 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 659.3162 450.9197)" class="st19 futura-book st17">NAVE 3C</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 633.446 470.3615)" class="white__fill futura-light st17">40.70</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[43]" ng-click="nvtSLP.showPropertyData(24, '4C', nvtSLP.inmovables[43].idProperty)">
                    <polygon class="property nvt-sprite-1" points="609.9,592.8 540.7,425.3 598.6,401.1 667.8,569.5"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 624.9822 579.304)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 562.5407 428.363)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 589.2001 476.0544)" class="white__fill futura-light st17">569.80 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 601.4487 474.6092)" class="st19 futura-book st17">NAVE 4C</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 575.5787 494.0456)" class="white__fill futura-light st17">40.70</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[44]" ng-click="nvtSLP.showPropertyData(24, '5C', nvtSLP.inmovables[44].idProperty)">
                    <polygon class="property nvt-sprite-2" points="482,448.7 552.5,617.1 609.9,592.8 540.7,425.3"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 568.666 604.3192)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 506.2238 453.3785)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 532.8855 501.0709)" class="white__fill futura-light st17">569.80 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 545.1295 499.6223)" class="st19 futura-book st17">NAVE 5C</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 519.2602 519.0604)" class="white__fill futura-light st17">40.70</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[45]" ng-click="nvtSLP.showPropertyData(24, '6C', nvtSLP.inmovables[45].idProperty)">
                    <polygon class="property nvt-sprite-1" points="494.1,641.1 424.6,472.6 482,448.7 552.5,617.1"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 509.8247 627.4302)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 447.3867 476.4898)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 474.0455 524.18)" class="white__fill futura-light st17">569.80 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 486.292 522.7303)" class="st19 futura-book st17">NAVE 6C</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 460.4214 542.1716)" class="white__fill futura-light st17">40.70</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[46]" ng-click="nvtSLP.showPropertyData(24, '7C', nvtSLP.inmovables[46].idProperty)">
                    <polygon class="property nvt-sprite-2" points="367,496.9 424.6,472.6 494.1,641.1 436.7,665.3"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 452.5885 651.5207)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 390.1456 500.5845)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 416.8103 548.2736)" class="white__fill futura-light st17">569.80 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 429.0531 546.8234)" class="st19 futura-book st17">NAVE 7C</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 403.1864 566.2653)" class="white__fill futura-light st17">40.70</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[47]" ng-click="nvtSLP.showPropertyData(24, '8C', nvtSLP.inmovables[47].idProperty)">
                    <polygon class="property nvt-sprite-1" points="378.6,688.7 309.4,521.1 367,496.9 436.7,665.3"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 394.9851 675.6041)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 332.5459 524.6609)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 359.2068 572.3542)" class="white__fill futura-light st17">569.80 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 371.4535 570.9045)" class="st19 futura-book st17">NAVE 8C</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 345.5814 590.3434)" class="white__fill futura-light st17">40.70</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[48]" ng-click="nvtSLP.showPropertyData(24, '9C', nvtSLP.inmovables[48].idProperty)">
                    <polygon class="property nvt-sprite-2" points="251.2,545.3 309.4,521.1 378.6,688.7 321.2,713.2"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 335.8361 701.6643)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 273.3949 550.7253)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 300.0553 598.4169)" class="white__fill futura-light st17">569.80 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 312.3021 596.9661)" class="st19 futura-book st17">NAVE 9C</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 286.433 616.4066)" class="white__fill futura-light st17">40.70</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[49]" ng-click="nvtSLP.showPropertyData(24, '10C', nvtSLP.inmovables[49].idProperty)">
                    <polygon class="property nvt-sprite-1" points="262.8,736.9 193.3,568.7 251.2,545.3 321.2,713.2"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 278.9915 725.3568)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 216.5513 574.4194)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 243.2127 622.1088)" class="white__fill futura-light st17">569.80 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 255.4575 618.3367)" class="st19 futura-book st17">NAVE 10C</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 229.5881 640.0995)" class="white__fill futura-light st17">40.70</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[50]" ng-click="nvtSLP.showPropertyData(24, '11C', nvtSLP.inmovables[50].idProperty)">
                    <polygon class="property nvt-sprite-2" points="134.6,592.8 193.3,568.7 262.8,736.9 205.2,761.1"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 220.7415 748.3355)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 158.3038 597.3949)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 184.9627 645.087)" class="white__fill futura-light st17">569.80 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 197.2106 641.3147)" class="st19 futura-book st17">NAVE 11C</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 171.3392 663.0765)" class="white__fill futura-light st17">40.70</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[51]" ng-click="nvtSLP.showPropertyData(24, '12C', nvtSLP.inmovables[51].idProperty)">
                    <polygon class="property nvt-sprite-1" points="147.3,784.8 75.9,617.4 135.7,593.2 205.2,761.1"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 162.7144 771.6264)" class="white__fill futura-light st17">14.33</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 100.2738 620.6871)" class="white__fill futura-light st17">14.33</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 126.9341 668.377)" class="white__fill futura-light st17">584.17 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 139.1796 664.6078)" class="st19 futura-book st17">NAVE 12C</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 113.311 686.3663)" class="white__fill futura-light st17">40.70</text>
                    <g>
                        <polygon class="st21" points="162.2,730.9 152.3,740.8 162.2,750.6"/>
                        <polygon class="st22" points="162.3,730.9 162.3,750.6 172.2,740.8"/>
                    </g>
                </g>
                <g id="DIVISIONES_4_">
                    <line class="st24" x1="656.2" y1="376.6" x2="725.7" y2="545"/>
                    <line class="st24" x1="667.8" y1="569.5" x2="598.6" y2="401.1"/>
                    <line class="st24" x1="540.7" y1="425.3" x2="609.9" y2="592.8"/>
                    <line class="st24" x1="552.5" y1="617.1" x2="482" y2="448.7"/>
                    <line class="st24" x1="424.6" y1="472.6" x2="494.1" y2="641.1"/>
                    <path class="st24" d="M436.7,665.3c-1.1-2.7-69.7-168.4-69.7-168.4"/>
                    <line class="st24" x1="309.4" y1="521.1" x2="378.6" y2="688.7"/>
                    <line class="st24" x1="321.2" y1="713.2" x2="251.2" y2="545.3"/>
                    <line class="st24" x1="193.3" y1="568.7" x2="262.8" y2="736.9"/>
                    <line class="st24" x1="135.7" y1="593.2" x2="205.2" y2="761.1"/>
                    <line class="st24" x1="783.9" y1="521.3" x2="714.1" y2="352.9"/>
                </g>
            </g>
            <g id="MODULO_D">
                <g ng-class="nvtSLP.inmovablesClassList[52]" ng-click="nvtSLP.showPropertyData(24, '1D', nvtSLP.inmovables[52].idProperty)">
                    <polygon class="property nvt-sprite-2" points="596.2,233.4 656.2,376.6 791,320.8 660.2,207.4"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 623.0482 235.3332)" class="white__fill futura-light st17">15.37</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 655.0973 270.7106)" class="white__fill futura-light st17">815.17 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 667.3441 269.2598)" class="st19 futura-book st17">NAVE 1D</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 628.2052 293.9653)" class="white__fill futura-light st17">34.58</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 702.6718 349.8457)" class="white__fill futura-light st17">32.72</text>
                    <text transform="matrix(0.7604 0.6419 -0.6448 0.7643 703.0148 262.5151)" class="white__fill futura-light st17">38.69</text>
                    <g>
                        <polygon class="st21" points="645.2,237 635.4,246.8 645.2,256.7"/>
                        <polygon class="st22" points="645.3,237 645.3,256.7 655.2,246.9"/>
                    </g>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[53]" ng-click="nvtSLP.showPropertyData(24, '2D', nvtSLP.inmovables[53].idProperty)">
                    <polygon class="property nvt-sprite-1" points="538.9,257.4 598.6,401.1 656.2,376.6 596.2,233.4"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 611.0367 388.1016)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 556.9716 261.7778)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 583.2544 297.5539)" class="white__fill futura-light st17">484.12 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 595.501 296.1021)" class="st19 futura-book st17">NAVE 2D</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 569.6274 315.5444)" class="white__fill futura-light st17">34.58</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[54]" ng-click="nvtSLP.showPropertyData(24, '3D', nvtSLP.inmovables[54].idProperty)">
                    <polygon class="property nvt-sprite-2" points="481.5,282.1 538.9,257.4 598.6,401.1 540.7,425.3"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 556.145 411.3083)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 502.082 284.9878)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 526.7609 320.0341)" class="white__fill futura-light st17">484.12 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 539.008 318.5853)" class="st19 futura-book st17">NAVE 3D</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 512.3716 338.756)" class="white__fill futura-light st17">34.58</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[55]" ng-click="nvtSLP.showPropertyData(24, '4D', nvtSLP.inmovables[55].idProperty)">
                    <polygon class="property nvt-sprite-1" points="423.3,305.5 481.5,282.1 540.7,425.3 482,448.7"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 498.9742 434.8619)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 444.9111 308.5426)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 469.592 343.5885)" class="white__fill futura-light st17">484.12 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 481.8385 342.1378)" class="st19 futura-book st17">NAVE 4D</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 455.1991 362.3105)" class="white__fill futura-light st17">34.58</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[56]" ng-click="nvtSLP.showPropertyData(24, '5D', nvtSLP.inmovables[56].idProperty)">
                    <polygon class="property nvt-sprite-2" points="364.9,329.5 424.6,472.6 482,448.7 423.3,305.5"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 440.9445 458.9828)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 386.881 332.6625)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 411.5621 367.7092)" class="white__fill futura-light st17">484.12 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 423.8098 366.2612)" class="st19 futura-book st17">NAVE 5D</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 397.1683 386.4329)" class="white__fill futura-light st17">34.58</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[57]" ng-click="nvtSLP.showPropertyData(24, '6D', nvtSLP.inmovables[57].idProperty)">
                    <polygon class="property nvt-sprite-1" points="307.5,353.2 367,496.9 424.6,472.6 364.9,329.5"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 380.558 482.8969)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 326.4955 356.5784)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 351.1744 391.6227)" class="white__fill futura-light st17">484.12 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 363.4218 390.1738)" class="st19 futura-book st17">NAVE 6D</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 336.785 410.3442)" class="white__fill futura-light st17">34.58</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[58]" ng-click="nvtSLP.showPropertyData(24, '7D', nvtSLP.inmovables[58].idProperty)">
                    <polygon class="property nvt-sprite-2" points="250.4,377.9 307.5,353.2 367,496.9 309.4,521.1"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 324.0288 505.8583)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 269.965 379.5382)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 294.6476 414.5849)" class="white__fill futura-light st17">484.12 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 306.892 413.1373)" class="st19 futura-book st17">NAVE 7D</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 280.2556 433.3077)" class="white__fill futura-light st17">34.58</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[59]" ng-click="nvtSLP.showPropertyData(24, '8D', nvtSLP.inmovables[59].idProperty)">
                    <polygon class="property nvt-sprite-1" points="191.5,401.1 251.2,545.3 309.4,521.1 250.4,377.9"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 264.9216 531.9228)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 210.857 405.5999)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 235.5376 440.6472)" class="white__fill futura-light st17">484.12 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 247.7837 439.1988)" class="st19 futura-book st17">NAVE 8D</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 221.145 459.3675)" class="white__fill futura-light st17">34.58</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[60]" ng-click="nvtSLP.showPropertyData(24, '9D', nvtSLP.inmovables[60].idProperty)">
                    <polygon class="property nvt-sprite-2" points="134.1,425.3 191.5,401.1 251.2,545.3 193.3,568.7"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 208.345 557.041)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 154.2814 430.7198)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 178.9631 465.7663)" class="white__fill futura-light st17">484.12 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 191.2098 464.3166)" class="st19 futura-book st17">NAVE 9D</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 164.5705 484.4865)" class="white__fill futura-light st17">34.58</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[61]" ng-click="nvtSLP.showPropertyData(24, '10D', nvtSLP.inmovables[61].idProperty)">
                    <polygon class="property nvt-sprite-1" points="134.1,425.3 75.9,450 135.7,593.2 193.3,568.7"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 150.5605 580.5963)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 96.4959 454.2733)" class="white__fill futura-light st17">14.00</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 121.1787 489.3192)" class="white__fill futura-light st17">484.12 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 130.8816 484.7002)" class="st19 futura-book st17">NAVE 10D</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 106.789 508.0401)" class="white__fill futura-light st17">34.58</text>
                </g>
                <g ng-class="nvtSLP.inmovablesClassList[62]" ng-click="nvtSLP.showPropertyData(24, '11D', nvtSLP.inmovables[62].idProperty)">
                    <polygon class="property nvt-sprite-2" points="75.9,450 135.7,593.2 75.9,617.4 15.9,475.3"/>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 90.0469 605.059)" class="white__fill futura-light st17">14.33</text>
                    <text transform="matrix(0.9224 -0.3988 0.3966 0.918 35.9823 478.7372)" class="white__fill futura-light st17">14.60</text>
                    <text transform="matrix(0.3846 0.9178 -0.9223 0.3866 60.6641 513.7858)" class="white__fill futura-light st17">498.60 m2</text>
                    <g>
                        <text transform="matrix(0.3865 0.9223 -0.9223 0.3866 70.3637 509.1671)" class="st19 futura-book st17">NAVE 11D</text>
                    </g>
                    <text transform="matrix(0.3653 0.9257 -0.9301 0.3674 46.2737 532.5065)" class="white__fill futura-light st17">34.58</text>
                    <g>
                        <polygon class="st21" points="56.5,481.9 46.7,491.7 56.5,501.6"/>
                        <polygon class="st22" points="56.6,481.9 56.6,501.6 66.5,491.8"/>
                    </g>
                </g>
                <g id="DIVISIONES_1_">
                    <line class="st24" x1="791" y1="320.8" x2="75.9" y2="617.4"/>
                    <line class="st24" x1="596.2" y1="233.4" x2="656.2" y2="376.6"/>
                    <line class="st24" x1="597.5" y1="398.5" x2="538.9" y2="257.4"/>
                    <line class="st24" x1="481.5" y1="282.1" x2="540.7" y2="425.3"/>
                    <line class="st24" x1="482" y1="448.7" x2="423.3" y2="305.5"/>
                    <line class="st24" x1="364.9" y1="329.5" x2="424.6" y2="472.6"/>
                    <line class="st24" x1="307.5" y1="353.2" x2="366.1" y2="494.6"/>
                    <line class="st24" x1="309.4" y1="521.1" x2="250.4" y2="377.9"/>
                    <line class="st24" x1="251.2" y1="545.3" x2="191.5" y2="401.1"/>
                    <line class="st24" x1="134.1" y1="425.3" x2="193.3" y2="568.7"/>
                    <line class="st24" x1="134.6" y1="590.7" x2="75.9" y2="450"/>
                </g>
            </g>

        </svg>

    </div>

</body>
</html>