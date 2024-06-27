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

<body ng-controller="PBBOpaloQuoteCtrl as opalo">

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


	<div class="modal-dialog" ng-class="opalo.dialogDisplay">
		<div class="backdrop-dialog" ng-click="opalo.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="opalo.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

				<div class="divider"></div>

				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Portto Blanco {{opalo.propertyData.condominium}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{opalo.propertyData.number}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Área {{opalo.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; ${{opalo.propertyData.cost_m2}} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text" style="text-decoration: line-through;">Precio de ${{opalo.propertyData.total}} MXN</h6>
					</div>

					<div class="divider"></div>

					<div class="py-20 ">
					<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{opalo.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
						<h6 class="green-text futura-light">Precio de ${{opalo.propertyData.totalPlan1}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{opalo.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 180 Meses</h6>
						<h6 class="green-text futura-light">Precio de ${{opalo.propertyData.totalPlan2}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>

					<div class="divider"></div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">Compra en {{opalo.month}} y paga la primera mensualidad hasta {{opalo.nextMonth}}</h6>
						<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
						<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{opalo.month + ' ' + opalo.year}}</p>
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
					<h1 class="center-align">Ópalo 1</h1>
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

		
       
            <svg version="1.1" id="ÓPALO_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 1366 705" style="enable-background:new 0 0 1366 705;" xml:space="preserve">
            <style type="text/css">
                .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#4076AE;}
                .st1{fill:#FFFFFF;}
                .st2{font-family:'CenturyGothic';}
                .st3{font-size:6.1315px;}
                .st4{fill:#FFBF00;}
                .st5{font-family:'CenturyGothic-Bold';}
                .st6{fill-rule:evenodd;clip-rule:evenodd;fill:#FFBF00;}
                .st7{opacity:0.5;fill-rule:evenodd;clip-rule:evenodd;fill:#FFBF00;}
                .st8{fill-rule:evenodd;clip-rule:evenodd;fill:#64768C;}
                .st9{fill:none;stroke:#E9E9E9;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
                .st10{fill:none;stroke:#F4F4F4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
                .st11{font-size:6.1314px;}
                .st12{fill:none;stroke:#FFFFFF;stroke-miterlimit:10;}
                .st13{fill-rule:evenodd;clip-rule:evenodd;fill:#002856;}
                .st14{fill:#002856;}
                .st15{font-size:4.9052px;}
                .st16{fill-rule:evenodd;clip-rule:evenodd;fill:none;stroke:#002856;stroke-width:2;stroke-miterlimit:10;}
            </style>
            <g id="MACHOTE">
            </g>
            <g id="BASE">
	            <image style="overflow:visible;enable-background:new    ;" width="1366" height="705" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/opalo/condos/opalo_1.jpg" >
	            </image>
            </g>
            <g id="CLUSTER">
                <g id="ISLA_A_00000038396921426971530870000012823950349844465581_">
                    <g id="A-01" ng-class="opalo.inmovablesClassList[0]" ng-click="opalo.showPropertyData(64, '1')">
                        <polyline id="A-L01_00000139262157707200015530000006930030399517825696_" class="property pb-sprite-1" points="26.6,512.9 113.3,506.9 
                            110,466.1 23.5,473.9 26.6,512.9 			"/>
                        <text transform="matrix(0.9972 -7.497964e-02 7.497964e-02 0.9972 57.5827 494.9509)" class="st1 st2 st3">18</text>
                        <text transform="matrix(0.9972 -7.497964e-02 7.497964e-02 0.9972 64.3473 494.4423)" class="st1 st2 st3">4.36 m</text>
                        <text transform="matrix(0.5814 -4.371313e-02 4.371313e-02 0.5814 83.4806 490.9559)" class="st1 st2 st3">2</text>
                        <text transform="matrix(7.845978e-02 0.9969 -0.9969 7.845978e-02 27.6824 486.7929)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(7.845978e-02 0.9969 -0.9969 7.845978e-02 105.1786 481.1228)"><tspan x="0" y="0" class="st1 st2 st3">9.4</tspan><tspan x="8.4" y="0" class="st1 st2 st3">4</tspan></text>
                        <text transform="matrix(0.9969 -7.817002e-02 7.817002e-02 0.9969 62.1939 508.6231)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9948 -0.1016 0.1016 0.9948 63.0087 486.4745)" class="st4 st5 st3">01</text>
                        <g>
                            <g>
                                <polyline class="st6" points="102.1,486.3 92.9,486.9 97.2,482 102.1,486.3 					"/>
                            </g>
                            <polyline class="st7" points="102.1,486.3 97.9,491.2 92.9,486.9 102.1,486.3 				"/>
                        </g>
                    </g>
                    <g id="A-02_ " ng-class="opalo.inmovablesClassList[1]" ng-click="opalo.showPropertyData(64, '2')">
                        <polyline id="A-L02_00000094580731551637906050000013919686951281719471_" class="property pb-sprite-2" points="23.5,473.9 19.6,435.1 
                            105.9,425.3 110,466.1 23.5,473.9 			"/>
                        <text transform="matrix(0.1011 0.9949 -0.9949 0.1011 24.0129 447.7932)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.1011 0.9949 -0.9949 0.1011 101.3563 440.3832)"><tspan x="0" y="0" class="st1 st2 st3">9.4</tspan><tspan x="8.4" y="0" class="st1 st2 st3">4</tspan></text>
                        <text transform="matrix(0.9972 -7.497964e-02 7.497964e-02 0.9972 56.7081 453.9294)" class="st1 st2 st3">18</text>
                        <text transform="matrix(0.9972 -7.497964e-02 7.497964e-02 0.9972 63.4727 453.4207)" class="st1 st2 st3">4.36 m</text>
                        <text transform="matrix(0.5814 -4.371313e-02 4.371313e-02 0.5814 82.606 449.9343)" class="st1 st2 st3">2</text>
                        <text transform="matrix(0.9948 -0.1016 0.1016 0.9948 62.1342 445.4527)" class="st4 st5 st3">02</text>
                        <text transform="matrix(0.9969 -7.817002e-02 7.817002e-02 0.9969 60.2736 468.8224)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                    </g>
                    <g id="A-03_" ng-class="opalo.inmovablesClassList[2]" ng-click="opalo.showPropertyData(64, '3')">
                        <polyline id="A-L03_00000032624375202377765850000010921966487834500004_" class="property pb-sprite-1" points="19.6,435.1 14.8,396.3 
                            100.8,384.6 105.9,425.3 19.6,435.1 			"/>
                        <text transform="matrix(0.1219 0.9925 -0.9925 0.1219 19.5057 409.0385)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.1219 0.9925 -0.9925 0.1219 96.6534 399.8945)"><tspan x="0" y="0" class="st1 st2 st3">9.4</tspan><tspan x="8.4" y="0" class="st1 st2 st3">4</tspan></text>
                        <text transform="matrix(0.9969 -7.817002e-02 7.817002e-02 0.9969 54.9279 428.2361)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9972 -7.497964e-02 7.497964e-02 0.9972 50.4153 414.5285)" class="st1 st2 st3">18</text>
                        <text transform="matrix(0.9972 -7.497964e-02 7.497964e-02 0.9972 57.1799 414.0199)" class="st1 st2 st3">4.36 m</text>
                        <text transform="matrix(0.5814 -4.371313e-02 4.371313e-02 0.5814 76.3132 410.5335)" class="st1 st2 st3">2</text>
                        <text transform="matrix(0.9948 -0.1016 0.1016 0.9948 55.8405 406.0513)" class="st4 st5 st3">03</text>
                    </g>
                    <g id="A-04_" ng-class="opalo.inmovablesClassList[3]" ng-click="opalo.showPropertyData(64, '4')">
                        <polyline id="A-L04_00000131363629881054140660000008107501866008412554_" class="property pb-sprite-2" points="14.8,396.3 9.1,357.6 94.9,344.1 
                            100.8,384.6 14.8,396.3 			"/>
                        <text transform="matrix(0.1444 0.9895 -0.9895 0.1444 14.1845 370.2873)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.1444 0.9895 -0.9895 0.1444 91.1004 359.4087)"><tspan x="0" y="0" class="st1 st2 st3">9.4</tspan><tspan x="8.4" y="0" class="st1 st2 st3">4</tspan></text>
                        <text transform="matrix(0.9934 -0.1146 0.1146 0.9934 49.8719 388.8748)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9906 -0.1365 0.1365 0.9906 41.8876 378.3475)" class="st1 st2 st3">18</text>
                        <text transform="matrix(0.9906 -0.1365 0.1365 0.9906 48.6078 377.4215)" class="st1 st2 st3">4.36 m</text>
                        <text transform="matrix(0.5775 -7.957950e-02 7.957950e-02 0.5775 67.4889 372.7586)" class="st1 st2 st3">2</text>
                        <text transform="matrix(0.9948 -0.1016 0.1016 0.9948 50.3933 368.4787)" class="st4 st5 st3">04</text>
                    </g>
                    <g id="A-05_ " ng-class="opalo.inmovablesClassList[4]" ng-click="opalo.showPropertyData(64, '5')">
                        <polyline id="A-L05_00000008868132133064069670000004568034868292247191_" class="property pb-sprite-1" points="9.1,357.6 5.2,333.7 0.9,309.8 
                            89.2,309.8 94.9,344.1 9.1,357.6 			"/>
                        <text transform="matrix(0.1685 0.9857 -0.9857 0.1685 6.7891 325.3182)"><tspan x="0" y="0" class="st1 st2 st3">11.1</tspan><tspan x="11.8" y="0" class="st1 st2 st3">6</tspan></text>
                        <text transform="matrix(0.1633 0.9866 -0.9866 0.1633 85.0883 322.0637)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 37.426 314.5767)"><tspan x="0" y="0" class="st1 st2 st3">20.3</tspan><tspan x="11.8" y="0" class="st1 st2 st3">2</tspan></text>
                        <g>
                            <polyline class="st6" points="84.2,327 75.1,328.4 78.9,323.1 84.2,327 				"/>
                            <polyline class="st7" points="84.2,327 80.4,332.2 75.1,328.4 84.2,327 				"/>
                        </g>
                        <text transform="matrix(0.9934 -0.1146 0.1146 0.9934 41.1602 350.7874)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.9906 -0.1365 0.1365 0.9906 33.1768 340.2591)" class="st1 st2 st3">191.59</text>
                        <text transform="matrix(0.9906 -0.1365 0.1365 0.9906 51.6532 337.7133)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(0.5775 -7.957950e-02 7.957950e-02 0.5775 58.7539 334.6736)" class="st1 st2 st3">2</text>
                        <text transform="matrix(0.9948 -0.1016 0.1016 0.9948 41.6831 330.3921)" class="st4 st5 st3">05</text>
                    </g>
                    <g id="LINEAS_DIVISORIAS_00000162346545990094560810000001673645614440470713_">
                        <line class="st9" x1="26.6" y1="512.9" x2="113.3" y2="506.9"/>
                        <line class="st10" x1="23.5" y1="473.9" x2="110" y2="466.1"/>
                        <line class="st10" x1="19.6" y1="435.1" x2="105.9" y2="425.3"/>
                        <line class="st10" x1="14.8" y1="396.3" x2="100.8" y2="384.6"/>
                        <line class="st10" x1="9.1" y1="357.6" x2="94.9" y2="344.1"/>
                    </g>
                </g>
                <g id="ISLA_B_00000005958653303001153130000000698406401577909915_">
                    <g id="B-06_" ng-class="opalo.inmovablesClassList[5]" ng-click="opalo.showPropertyData(64, '6')">
                        <polyline id="B-L06_00000082354886380970514470000010821021000589541032_" class="property pb-sprite-2" points="226.2,309.8 226.1,309.8 
                            226.1,344.6 135.8,344.6 130.1,309.8 226.2,309.8 			"/>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 167.4594 330.8718)" class="st1 st2 st3">171.48 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 193.6064 328.9668)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 195.5767 331.0192)" class="st1 st2 st3"> </text>
                        </g>
                        <text transform="matrix(1 0 0 1 170.5017 315.1724)"><tspan x="0" y="0" class="st1 st2 st3">22.1</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 220.5613 321.2332)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(0.1599 0.9871 -0.9871 0.1599 133.6633 321.1484)"><tspan x="0" y="0" class="st1 st2 st3">8.1</tspan><tspan x="8.4" y="0" class="st1 st2 st3">1</tspan></text>
                        <text transform="matrix(1 0 0 1 173.3381 342.7071)"><tspan x="0" y="0" class="st1 st2 st3">20.8</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <g>
                            <polyline class="st6" points="151.9,324.9 142.7,324.9 147.3,320.3 151.9,324.9 				"/>
                            <polyline class="st7" points="151.9,324.9 147.3,329.5 142.7,324.9 151.9,324.9 				"/>
                        </g>
                        <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 176.1253 323.2653)" class="st4 st5 st3">06</text>
                    </g>
                    <g id="B-07_" ng-class="opalo.inmovablesClassList[6]" ng-click="opalo.showPropertyData(64, '7')">
                        <polyline id="B-L07_00000104690913903574145590000012507922428357644734_" class="property pb-sprite-1" points="226.1,348.9 226.1,379.3 
                            140.8,379.3 135.8,344.6 226.1,344.6 226.1,348.9 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 220.561 355.9793)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(0.1426 0.9898 -0.9898 0.1426 139.1433 355.8842)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">8</tspan></text>
                        <text transform="matrix(1 0 0 1 176.0398 377.4683)"><tspan x="0" y="0" class="st1 st2 st3">19.6</tspan><tspan x="11.8" y="0" class="st1 st2 st3">4</tspan></text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 169.0016 366.4239)" class="st1 st2 st3">161.64 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 195.1487 364.5189)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 197.1189 366.5712)" class="st1 st2 st3"> </text>
                        </g>
                        <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 177.6681 358.8173)" class="st4 st5 st3">07</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 183.9317 365.6354)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="B-08_" ng-class="opalo.inmovablesClassList[7]" ng-click="opalo.showPropertyData(64, '8')">
                        <polyline id="B-L08_00000163056909603271114990000003641932078308380855_" class="property pb-sprite-2" points="226.1,383.6 226.1,414 145.2,414 
                            140.8,379.3 226.1,379.3 226.1,383.6 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 220.5612 390.7235)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(0.1236 0.9923 -0.9923 0.1236 143.8729 390.5952)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">6</tspan></text>
                        <text transform="matrix(1 0 0 1 178.0261 412.2881)"><tspan x="0" y="0" class="st1 st2 st3">18.6</tspan><tspan x="11.8" y="0" class="st1 st2 st3">3</tspan></text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 171.9503 402.2206)" class="st1 st2 st3">153.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 198.0974 400.3156)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 200.0676 402.3679)" class="st1 st2 st3"> </text>
                        </g>
                        <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 180.6168 394.614)" class="st4 st5 st3">08</text>
                    </g>
                    <g id="B-09_" ng-class="opalo.inmovablesClassList[8]" ng-click="opalo.showPropertyData(64, '9')">
                        <polyline id="B-L09_00000075847701258414362780000004496301087723786158_" class="property pb-sprite-1" points="226.1,418.4 226.1,448.8 
                            148.9,448.8 145.2,414 226.1,414 226.1,418.4 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 220.562 425.4697)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(0.1063 0.9943 -0.9943 0.1063 148.0255 425.4345)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">5</tspan></text>
                        <text transform="matrix(1 0 0 1 179.886 447.3575)"><tspan x="0" y="0" class="st1 st2 st3">17.7</tspan><tspan x="11.8" y="0" class="st1 st2 st3">8</tspan></text>
                        <text transform="matrix(1 0 0 1 182.4001 429.7335)" class="st4 st5 st3">09</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 171.9491 436.9295)" class="st1 st2 st3">145.54 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 198.0962 435.0245)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 200.0664 437.0769)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="B-10_" ng-class="opalo.inmovablesClassList[9]" ng-click="opalo.showPropertyData(64, '10')">
                        <g id="B-L10_00000095320751282333815260000007667520464685994122_">
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 173.3343 470.5916)" class="st1 st2 st3">139.27 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 199.4813 468.6866)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 201.4516 470.7389)" class="st1 st2 st3"> </text>
                        </g>
                        <polyline class="property pb-sprite-2" points="226.1,453.1 226.1,483.5 152,483.5 148.9,448.8 226.1,448.8 226.1,453.1 			"/>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 191.479 472.089)" class="st1 st2 st3"> </text>
                        </g>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 220.5602 460.2129)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(8.716036e-02 0.9962 -0.9962 8.716036e-02 151.5875 460.0392)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">3</tspan></text>
                        <text transform="matrix(1 0 0 1 180.6198 481.9893)"><tspan x="0" y="0" class="st1 st2 st3">17.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">7</tspan></text>
                        <text transform="matrix(1 0 0 1 182.8269 463.5958)" class="st4 st5 st3">10</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 174.7274 470.591)" class="st1 st2 st3">139.27 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 200.8744 468.686)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 202.8447 470.7384)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="B-11_" ng-class="opalo.inmovablesClassList[10]" ng-click="opalo.showPropertyData(64, '11')">
                        <polyline id="B-L11_00000124125487244191026320000010803960221210493613_" class="property pb-sprite-1" points="226.1,487.9 226.1,518.3 
                            154.5,518.3 152,483.5 226.1,483.5 226.1,487.9 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 220.56 494.96)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(6.976024e-02 0.9976 -0.9976 6.976024e-02 154.4529 494.8241)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">2</tspan></text>
                        <text transform="matrix(1 0 0 1 182.6643 517.3087)"><tspan x="0" y="0" class="st1 st2 st3">16.5</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 183.3171 495.9415)" class="st4 st5 st3">11</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 175.6108 503.558)" class="st1 st2 st3">134.17 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 201.7578 501.653)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 203.7281 503.7054)" class="st1 st2 st3"> </text>
                        </g>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 193.327 503.0708)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="B-12_" ng-class="opalo.inmovablesClassList[11]" ng-click="opalo.showPropertyData(64, '12')">
                        <polyline id="B-L12_00000083773731030077832960000008777109740988573844_" class="property pb-sprite-2" points="226.1,522.6 226.1,561.7 
                            156.6,561.7 154.5,518.3 226.1,518.3 226.1,522.6 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 220.5614 532.3506)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(4.884982e-02 0.9988 -0.9988 4.884982e-02 156.8861 532.3649)"><tspan x="0" y="0" class="st1 st2 st3">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">1</tspan></text>
                        <text transform="matrix(1 0 0 1 183.7468 561.3272)"><tspan x="0" y="0" class="st1 st2 st3">16.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 185.1189 533.9395)" class="st4 st5 st3">12</text>
                        <g>
                            <polyline class="st6" points="173.3,540.4 164.1,540.4 168.7,535.8 173.3,540.4 				"/>
                            <polyline class="st7" points="173.3,540.4 168.7,545 164.1,540.4 173.3,540.4 				"/>
                        </g>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 177.6673 542.2529)" class="st1 st2 st3">162.31 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 203.8144 540.348)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 205.7846 542.4003)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="B-13_" ng-class="opalo.inmovablesClassList[12]" ng-click="opalo.showPropertyData(64, '13')">
                        <polyline id="B-L13_00000029020740286397434420000014425777067527622846_" class="property pb-sprite-1" points="226.1,561.7 226.1,522.6 
                            313,522.6 313,561.7 226.1,561.7 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 307.566 536.2178)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 227.7827 536.2159)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 261.9192 561.3272)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 264.7351 535.6895)" class="st4 st5 st3">13</text>
                        <g>
                            <polyline class="st6" points="302.7,540.4 293.5,540.4 298.1,535.8 302.7,540.4 				"/>
                            <polyline class="st7" points="302.7,540.4 298.1,545 293.5,540.4 302.7,540.4 				"/>
                        </g>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 255.3769 542.2539)" class="st1 st2 st3">180.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 281.5239 540.3489)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 283.4942 542.4012)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="B-14_" ng-class="opalo.inmovablesClassList[13]" ng-click="opalo.showPropertyData(64, '14')">
                        <polyline id="B-L14_00000094611887685956462370000006730120638246561185_" class="property pb-sprite-2" points="313,522.6 226.1,522.6 
                            226.1,487.9 313,487.9 313,522.6 			"/>
                        <text transform="matrix(1 0 0 1 261.9192 520.6524)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 307.5676 499.3027)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 227.7829 499.2998)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 265.4787 500.9131)" class="st4 st5 st3">14</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 256.4933 508.0229)" class="st1 st2 st3">160.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 282.6404 506.1179)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 284.6106 508.1703)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="B-15_" ng-class="opalo.inmovablesClassList[14]" ng-click="opalo.showPropertyData(64, '15')">
                        <polyline id="B-L15_00000083049621639101713410000007644175261085893311_" class="property pb-sprite-1" points="313,487.9 226.1,487.9 
                            226.1,453.1 313,453.1 313,487.9 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 307.5679 464.5556)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 227.7841 464.5556)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 261.9192 485.9083)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 265.3869 468.7784)" class="st4 st5 st3">15</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 254.5972 475.4091)" class="st1 st2 st3">160.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 280.7443 473.504)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 282.7145 475.5564)" class="st1 st2 st3"> </text>
                        </g>
                        <g>
                            <text transform="matrix(1 3.490014e-03 -3.490014e-03 1 275.3247 475.4553)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="B-16_" ng-class="opalo.inmovablesClassList[15]" ng-click="opalo.showPropertyData(64, '16')">
                        <polyline id="B-L16_00000096740844635233370620000010542765269838609844_" class="property pb-sprite-2" points="313,453.1 226.1,453.1 
                            226.1,418.4 313,418.4 313,453.1 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 307.5686 429.8104)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 227.7843 429.8094)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 261.9182 451.1602)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 265.1296 434.7471)" class="st4 st5 st3">16</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 255.3759 441.8023)" class="st1 st2 st3">160.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 281.5229 439.8973)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 283.4932 441.9496)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="B-17_" ng-class="opalo.inmovablesClassList[16]" ng-click="opalo.showPropertyData(64, '17')">
                        <polyline id="B-L17_00000168796229724319520660000004523593927266628537_" class="property pb-sprite-1" points="313,418.4 226.1,418.4 
                            226.1,383.6 313,383.6 313,418.4 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 307.5674 395.0662)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 227.7836 395.0672)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 261.9182 416.4171)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 265.4787 400.6299)" class="st4 st5 st3">17</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 255.3762 407.1768)" class="st1 st2 st3">160.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 281.5233 405.2718)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 283.4935 407.3242)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="B-18_" ng-class="opalo.inmovablesClassList[17]" ng-click="opalo.showPropertyData(64, '18')">
                        <polyline id="B-L18_00000036212956848892238910000017922332587405870208_" class="property pb-sprite-2" points="313,383.6 226.1,383.6 
                            226.1,348.9 313,348.9 313,383.6 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 307.5692 360.3201)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 227.7844 360.3177)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 261.9192 381.671)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 264.7458 364.0015)" class="st4 st5 st3">18</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 256.493 369.5078)" class="st1 st2 st3">160.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 282.6401 367.6028)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 284.6103 369.6552)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="B-19_" ng-class="opalo.inmovablesClassList[18]" ng-click="opalo.showPropertyData(64, '19')">
                        <polyline id="B-L19_00000005945361806486084610000000947338224904677548_" class="property pb-sprite-1" points="226.1,309.8 226.2,309.8 
                            313,309.8 313,309.8 313,348.9 226.1,348.9 226.1,309.8 			"/>
                        <text transform="matrix(1 0 0 1 261.9192 315.1714)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 307.5683 323.4035)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 227.7836 323.4035)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 261.9182 346.9258)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 265.4787 325.2676)" class="st4 st5 st3">19</text>
                        <g>
                            <polyline class="st6" points="303.4,327.7 294.2,327.7 298.8,323.1 303.4,327.7 				"/>
                            <polyline class="st7" points="303.4,327.7 298.8,332.3 294.2,327.7 303.4,327.7 				"/>
                        </g>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 256.4933 331.9038)" class="st1 st2 st3">180.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 282.6404 329.9988)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 284.6106 332.0511)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="LINEAS_DIVISORIAS_00000032630543684289488070000010588694602088279487_">
                        <line class="st10" x1="135.8" y1="344.6" x2="226.1" y2="344.6"/>
                        <line class="st10" x1="140.8" y1="379.3" x2="226.1" y2="379.3"/>
                        <line class="st10" x1="145.2" y1="414" x2="226.1" y2="414"/>
                        <line class="st10" x1="148.9" y1="448.8" x2="226.1" y2="448.8"/>
                        <line class="st10" x1="152" y1="483.5" x2="226.1" y2="483.5"/>
                        <line class="st10" x1="154.5" y1="518.3" x2="226.1" y2="518.3"/>
                        <line class="st10" x1="226.1" y1="522.6" x2="313" y2="522.6"/>
                        <line class="st10" x1="226.1" y1="487.9" x2="313" y2="487.9"/>
                        <line class="st10" x1="226.1" y1="453.1" x2="313" y2="453.1"/>
                        <line class="st10" x1="226.1" y1="418.4" x2="313" y2="418.4"/>
                        <line class="st10" x1="226.1" y1="383.6" x2="313" y2="383.6"/>
                        <line class="st10" x1="226.1" y1="348.9" x2="313" y2="348.9"/>
                        <line class="st10" x1="226.1" y1="309.8" x2="226.1" y2="561.7"/>
                    </g>
                </g>
                <g id="ISLA_C_00000020392165634434309460000001542865002657918336_">
                    <g id="C-20_" ng-class="opalo.inmovablesClassList[19]" ng-click="opalo.showPropertyData(64, '20')">
                        <polyline id="C-L20_00000075125046411332659170000015557117689841052863_" class="property pb-sprite-1" points="353.4,309.8 440.2,309.8 
                            440.2,309.8 440.2,348.9 353.4,348.9 353.4,309.8 353.4,309.8 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 355.3121 323.4065)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 434.3317 323.4076)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 389.1779 315.5474)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 389.177 347.2559)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 393.4934 325.4029)" class="st4 st5 st3">20</text>
                        <g>
                            <polyline class="st6" points="374,331 364.8,331 369.4,326.4 374,331 				"/>
                            <polyline class="st7" points="374,331 369.4,335.6 364.8,331 374,331 				"/>
                        </g>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 383.5945 332.4014)" class="st1 st2 st3">180.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 409.7415 330.4964)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 411.7118 332.5487)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="C-21_" ng-class="opalo.inmovablesClassList[20]" ng-click="opalo.showPropertyData(64, '21')">
                        <polyline id="C-L21_00000072271591346486031940000010741123033559836823_" class="property pb-sprite-2" points="353.4,383.6 353.4,348.9 
                            440.2,348.9 440.2,383.6 353.4,383.6 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 355.3139 360.3216)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 434.3301 360.3236)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 389.1779 382.002)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 393.7126 360.7867)" class="st4 st5 st3">21</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 383.5941 369.1035)" class="st1 st2 st3">160.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 409.7411 367.1985)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 411.7113 369.2509)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="C-22_" ng-class="opalo.inmovablesClassList[21]" ng-click="opalo.showPropertyData(64, '22')">
                        <polyline id="C-L22_00000003067086372606579540000010545371972368760717_" class="property pb-sprite-1" points="353.4,418.4 353.4,383.6 
                            440.2,383.6 440.2,418.4 353.4,418.4 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 355.3131 395.0667)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 434.3308 395.0683)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 389.177 416.7452)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 394.8908 394.5313)" class="st4 st5 st3">22</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 383.5946 403.5752)" class="st1 st2 st3">160.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 409.7416 401.6702)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 411.7119 403.7225)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="C-23_" ng-class="opalo.inmovablesClassList[22]" ng-click="opalo.showPropertyData(64, '23')">
                        <polyline id="C-L23_00000170252118742444555820000005439370177903012777_" class="property pb-sprite-2" points="353.4,453.1 353.4,418.4 
                            440.2,418.4 440.2,453.1 353.4,453.1 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 355.3124 429.8109)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 434.3306 429.8125)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 389.177 451.4903)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 394.0139 431.8321)" class="st4 st5 st3">23</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 385.1738 438.6787)" class="st1 st2 st3">160.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 411.3209 436.7737)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 413.2911 438.826)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="C-24_" ng-class="opalo.inmovablesClassList[23]" ng-click="opalo.showPropertyData(64, '24')">
                        <polyline id="C-L24_00000075135097579802813410000002581189925179132582_" class="property pb-sprite-1" points="353.4,487.9 353.4,453.1 
                            440.2,453.1 440.2,487.9 353.4,487.9 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 355.3136 464.5551)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 434.3308 464.5567)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 389.1779 486.2364)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 393.9992 467.3907)" class="st4 st5 st3">24</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 383.5946 474.0166)" class="st1 st2 st3">160.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 409.7417 472.1116)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 411.7119 474.1639)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="C-25_" ng-class="opalo.inmovablesClassList[24]" ng-click="opalo.showPropertyData(64, '25')">
                        <polyline id="C-L25_00000121986867901716716730000003555623719080879784_" class="property pb-sprite-2" points="353.4,527 353.4,487.9 
                            440.2,487.9 440.2,527 353.4,527 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 355.3129 501.4722)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 434.3292 501.4738)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 389.177 525.0215)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 394.6028 500.2628)" class="st4 st5 st3">25</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 383.5949 510.0229)" class="st1 st2 st3">180.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 409.7419 508.118)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 411.7122 510.1703)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="C-26_" ng-class="opalo.inmovablesClassList[25]" ng-click="opalo.showPropertyData(64, '26')">
                        <polyline id="C-L26_00000168081723098161432100000012145003471565557183_" class="property pb-sprite-1" points="353.4,561.7 353.4,527 440.2,527 
                            440.2,561.7 353.4,561.7 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 355.3113 538.3892)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 434.3305 538.3898)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 389.177 560.3448)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 394.2297 537.0499)" class="st4 st5 st3">26</text>
                        <g>
                            <polyline class="st6" points="372.8,544.1 363.6,544.1 368.2,539.5 372.8,544.1 				"/>
                            <polyline class="st7" points="372.8,544.1 368.2,548.7 363.6,544.1 372.8,544.1 				"/>
                        </g>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 383.5945 545.0439)" class="st1 st2 st3">160.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 409.7415 543.1389)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 411.7118 545.1913)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="C-27_" ng-class="opalo.inmovablesClassList[26]" ng-click="opalo.showPropertyData(64, '27')">
                        <polyline id="C-L27_00000132779378374337811720000008135571850201661085_" class="property pb-sprite-2" points="527.1,561.7 440.2,561.7 
                            440.2,527 527.1,527 527.1,561.7 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 442.4741 538.3904)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 522.2916 538.3904)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 476.0417 560.3448)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 480.1179 538.0167)" class="st4 st5 st3">27</text>
                        <g>
                            <polyline class="st6" points="517.6,544.1 508.4,544.1 513,539.5 517.6,544.1 				"/>
                            <polyline class="st7" points="517.6,544.1 513,548.7 508.4,544.1 517.6,544.1 				"/>
                        </g>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 468.8613 545.0425)" class="st1 st2 st3">160.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 495.0084 543.1375)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 496.9786 545.1898)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="C-28_" ng-class="opalo.inmovablesClassList[27]" ng-click="opalo.showPropertyData(64, '28')">
                        <polyline id="C-L28_00000146484855205357237910000000152074300895802814_" class="property pb-sprite-1" points="527.1,527 440.2,527 440.2,487.9 
                            527.1,487.9 527.1,527 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 442.4742 501.4724)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 522.2932 501.4744)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 476.0417 525.0215)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 479.573 500.2296)" class="st4 st5 st3">28</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 470.153 508.4872)" class="st1 st2 st3">180.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 496.3 506.5822)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 498.2703 508.6346)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="C-29_" ng-class="opalo.inmovablesClassList[28]" ng-click="opalo.showPropertyData(64, '29')">
                        <polyline id="C-L29_00000010296415599006344050000016857672023072621959_" class="property pb-sprite-2" points="527.1,487.9 440.2,487.9 
                            440.2,453.1 527.1,453.1 527.1,487.9 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 442.4744 464.5563)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 522.2914 464.5573)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 476.0407 486.2364)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 479.8669 463.3448)" class="st4 st5 st3">29</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 470.8448 473.2843)" class="st1 st2 st3">160.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 496.9918 471.3793)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 498.962 473.4317)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="C-30_ " ng-class="opalo.inmovablesClassList[29]" ng-click="opalo.showPropertyData(64, '30')">
                        <polyline id="C-L30_00000113313373389363219520000016929575138514440124_" class="property pb-sprite-1" points="527.1,453.1 440.2,453.1 
                            440.2,418.4 527.1,418.4 527.1,453.1 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 442.4741 429.8121)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 522.2931 429.8112)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 476.0417 451.4903)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 479.571 430.1788)" class="st4 st5 st3">30</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 470.1529 436.9286)" class="st1 st2 st3">160.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 496.3 435.0237)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 498.2702 437.076)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="C-31_ " ng-class="opalo.inmovablesClassList[30]" ng-click="opalo.showPropertyData(64, '31')">
                        <polyline id="C-L31_00000138550612429861951230000006156470117343017388_" class="property pb-sprite-2" points="527.1,418.4 440.2,418.4 
                            440.2,383.6 527.1,383.6 527.1,418.4 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 442.4753 395.067)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 522.2933 395.067)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 476.0417 416.7452)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 479.572 397.0176)" class="st4 st5 st3">31</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 470.8458 403.0134)" class="st1 st2 st3">160.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 496.9929 401.1083)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 498.9631 403.1607)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="C-32_ " ng-class="opalo.inmovablesClassList[31]" ng-click="opalo.showPropertyData(64, '32')">
                        <polyline id="C-L32_00000071519694734286794060000013850255943904572318_" class="property pb-sprite-1" points="527.1,383.6 440.2,383.6 
                            440.2,348.9 527.1,348.9 527.1,383.6 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 442.4761 360.3232)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 522.2921 360.3228)"><tspan x="0" y="0" class="st1 st2 st11">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 476.0417 382.002)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 479.5066 361.3878)" class="st4 st5 st3">32</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 472.2518 368.4924)" class="st1 st2 st3">160.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 498.3989 366.5874)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 500.3691 368.6397)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="C-33_ " ng-class="opalo.inmovablesClassList[32]" ng-click="opalo.showPropertyData(64, '33')">
                        <polyline id="C-L33_00000046321299800196301470000004909885323721352353_" class="property pb-sprite-2" points="440.2,348.9 440.2,309.8 
                            527.1,309.8 527.1,309.8 527.1,348.9 440.2,348.9 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 442.4748 323.4072)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 522.2933 323.4072)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 476.0407 315.5474)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 476.0417 347.2559)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 480.8825 324.6714)" class="st4 st5 st3">33</text>
                        <g>
                            <polyline class="st6" points="516.1,331 506.9,331 511.5,326.4 516.1,331 				"/>
                            <polyline class="st7" points="516.1,331 511.5,335.6 506.9,331 516.1,331 				"/>
                        </g>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 470.8458 330.9811)" class="st1 st2 st3">180.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 496.9929 329.0761)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 498.9631 331.1284)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="LINEAS_DIVISORIAS_00000121257626835205520630000000798877785549968790_">
                        <line class="st10" x1="353.4" y1="527" x2="527.1" y2="527"/>
                        <line class="st10" x1="353.4" y1="487.9" x2="527.1" y2="487.9"/>
                        <line class="st10" x1="353.4" y1="453.1" x2="527.1" y2="453.1"/>
                        <line class="st10" x1="353.4" y1="418.4" x2="527.1" y2="418.4"/>
                        <line class="st10" x1="353.4" y1="383.6" x2="527.1" y2="383.6"/>
                        <line class="st10" x1="353.4" y1="348.9" x2="527.1" y2="348.9"/>
                        <line class="st10" x1="440.2" y1="309.8" x2="440.2" y2="561.7"/>
                    </g>
                </g>
                <g id="ISLA_D_00000124121506048738165930000010351899472555793030_">
                    <g id="D-34_" ng-class="opalo.inmovablesClassList[33]" ng-click="opalo.showPropertyData(64, '34')">
                        <polyline id="D-L34_00000033350930843611752540000003234121044083376256_" class="property pb-sprite-1" points="567.5,348.9 567.5,309.8 
                            654.4,309.8 654.4,348.9 567.5,348.9 			"/>
                        <text transform="matrix(1 0 0 1 603.2956 314.8487)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 569.1205 323.4076)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 647.5625 323.4077)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 603.2946 347.0601)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 608.7468 325.2877)" class="st4 st5 st3">34</text>
                        <g>
                            <polyline class="st6" points="587,329.5 577.8,329.5 582.4,324.9 587,329.5 				"/>
                            <polyline class="st7" points="587,329.5 582.4,334.1 577.8,329.5 587,329.5 				"/>
                        </g>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 598.1465 331.9861)" class="st1 st2 st3">180.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 624.2935 330.0811)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 626.2638 332.1334)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="D-35_" ng-class="opalo.inmovablesClassList[34]" ng-click="opalo.showPropertyData(64, '35')">
                        <polyline id="D-L35_00000028301107806229709240000003437170095472084098_" class="property pb-sprite-2" points="567.5,388 567.5,348.9 
                            654.4,348.9 654.4,388 567.5,388 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 569.1219 362.4936)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 647.562 362.4937)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 603.2956 386.1485)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 607.8215 363.4698)" class="st4 st5 st3">35</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 599.2702 369.5081)" class="st1 st2 st3">180.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 625.4172 367.6031)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 627.3875 369.6554)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="D-36_" ng-class="opalo.inmovablesClassList[35]" ng-click="opalo.showPropertyData(64, '36')">
                        <polyline id="D-L36_00000001629148933183538850000001027953557154798504_" class="property pb-sprite-1" points="567.5,431.4 567.5,388 654.4,388 
                            654.4,431.4 567.5,431.4 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 569.1196 402.0581)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 647.5616 402.0587)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 603.2956 430.1788)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 606.9338 403.919)" class="st4 st5 st3">36</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 599.2703 411.6112)" class="st1 st2 st3">200.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 625.4174 409.7062)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 627.3876 411.7585)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="D-37_" ng-class="opalo.inmovablesClassList[36]" ng-click="opalo.showPropertyData(64, '37')">
                        <polyline id="D-L37_00000037693179680423528990000015753212932496329870_" class="property pb-sprite-2" points="567.5,474.9 567.5,431.4 
                            654.4,431.4 654.4,474.9 567.5,474.9 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 569.1198 445.4879)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 647.5627 445.4884)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 603.2936 473.6788)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 607.1525 446.502)" class="st4 st5 st3">37</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 597.2409 452.8018)" class="st1 st2 st3">200.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 623.388 450.8968)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 625.3582 452.9492)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="D-38_" ng-class="opalo.inmovablesClassList[37]" ng-click="opalo.showPropertyData(64, '38')">
                        <polyline id="D-L38_00000018945280699890201660000008249913697997187482_" class="property pb-sprite-1" points="567.5,518.3 567.5,474.9 
                            654.4,474.9 654.4,518.3 567.5,518.3 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 569.1199 488.9206)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 647.5619 488.9221)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 603.2946 517.1065)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 607.1525 490.1807)" class="st4 st5 st3">38</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 598.1462 496.9742)" class="st1 st2 st3">200.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 624.2933 495.0692)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 626.2635 497.1215)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="D-39_" ng-class="opalo.inmovablesClassList[38]" ng-click="opalo.showPropertyData(64, '39')">
                        <polyline id="D-L39_00000175280194709501562110000014871129742290594177_" class="property pb-sprite-2" points="654.4,518.3 654.4,557.4 
                            654.4,561.7 654.4,561.7 567.5,561.7 567.5,557.4 567.5,518.3 654.4,518.3 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 569.1196 532.3522)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 647.5611 532.3528)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 603.2946 560.7315)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 607.1188 533.4942)" class="st4 st5 st3">39</text>
                        <g>
                            <polyline class="st6" points="588.1,538.4 578.9,538.4 583.5,533.8 588.1,538.4 				"/>
                            <polyline class="st7" points="588.1,538.4 583.5,543 578.9,538.4 588.1,538.4 				"/>
                        </g>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 598.1468 541.4035)" class="st1 st2 st3">200.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 624.2938 539.4985)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 626.2641 541.5508)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="D-40_" ng-class="opalo.inmovablesClassList[39]" ng-click="opalo.showPropertyData(64, '40')">
                        <polyline id="D-L40_00000132065979202400337810000017264713473945767067_" class="property pb-sprite-1" points="741.2,561.7 654.4,561.7 
                            654.4,518.3 741.2,518.3 741.2,561.7 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 735.696 532.3528)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 656.1675 532.3522)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 690.1569 560.7315)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 692.9763 534.1866)" class="st4 st5 st3">40</text>
                        <g>
                            <polyline class="st6" points="722.3,538.4 726.9,533.8 731.5,538.4 722.3,538.4 				"/>
                            <polyline class="st7" points="722.3,538.4 731.5,538.4 726.9,543 722.3,538.4 				"/>
                        </g>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 684.502 541.4029)" class="st1 st2 st3">200.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 710.649 539.4979)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 712.6193 541.5502)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="D-41_" ng-class="opalo.inmovablesClassList[40]" ng-click="opalo.showPropertyData(64, '41')">
                        <polyline id="D-L41_00000142138575396416421730000001930430084122186424_" class="property pb-sprite-2" points="741.2,518.3 654.4,518.3 
                            654.4,474.9 741.2,474.9 741.2,518.3 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 735.6968 488.9211)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 656.1655 488.9215)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 690.1569 517.1065)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 694.4606 490.1378)" class="st4 st5 st3">41</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 685.263 497.6533)" class="st1 st2 st3">200.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 711.41 495.7483)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 713.3802 497.8007)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="D-42_" ng-class="opalo.inmovablesClassList[41]" ng-click="opalo.showPropertyData(64, '42')">
                        <polyline id="D-L42_00000055699884445385735990000015907070566721777335_" class="property pb-sprite-1" points="741.2,474.5 654.4,474.5 
                            654.4,431.1 741.2,431.1 741.2,474.5 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 735.6962 445.4893)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 656.1667 445.4898)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 690.1569 473.6788)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 694.8928 446.502)" class="st4 st5 st3">42</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 687.4485 454.1515)" class="st1 st2 st3">200.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 713.5955 452.2465)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 715.5658 454.2988)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="D-43_" ng-class="opalo.inmovablesClassList[42]" ng-click="opalo.showPropertyData(64, '43')">
                        <polyline id="D-L43_00000125602907544316296570000002167850953936224162_" class="property pb-sprite-2" points="741.2,431.4 654.4,431.4 
                            654.4,388 741.2,388 741.2,431.4 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 735.697 402.0586)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 656.1666 402.0591)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 690.1569 430.2921)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 694.8918 402.3428)" class="st4 st5 st3">43</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 685.7706 410.7603)" class="st1 st2 st3">200.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 711.9176 408.8553)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 713.8878 410.9076)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="D-44_" ng-class="opalo.inmovablesClassList[43]" ng-click="opalo.showPropertyData(64, '44')">
                        <polyline id="D-L44_00000159452037762033041860000004044794566843412414_" class="property pb-sprite-1" points="741.2,388 654.4,388 654.4,348.9 
                            741.2,348.9 741.2,388 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 735.6993 362.4941)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 656.1669 362.4941)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 690.1569 386.1465)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 694.4606 363.4688)" class="st4 st5 st3">44</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 684.5031 370.1188)" class="st1 st2 st3">180.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 710.6501 368.2138)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 712.6203 370.2661)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="D-45_" ng-class="opalo.inmovablesClassList[44]" ng-click="opalo.showPropertyData(64, '45')">
                        <polyline id="D-L45_00000160183114384387142360000000063136594467124371_" class="property pb-sprite-2" points="741.2,348.9 654.4,348.9 
                            654.4,309.8 741.2,309.8 741.2,348.9 			"/>
                        <text transform="matrix(1 0 0 1 690.1579 314.8477)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 735.6979 323.4091)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 656.1675 323.4091)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 690.1579 347.0601)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 693.3307 323.7574)" class="st4 st5 st3">45</text>
                        <g>
                            <polyline class="st6" points="729,328.4 719.8,328.4 724.4,323.8 729,328.4 				"/>
                            <polyline class="st7" points="729,328.4 724.4,333 719.8,328.4 729,328.4 				"/>
                        </g>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 684.5016 330.9806)" class="st1 st2 st3">180.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 710.6486 329.0755)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 712.6188 331.1279)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="LINEAS_DIVISORIAS_00000103250725114506918090000016149175487771111352_">
                        <line class="st10" x1="567.5" y1="518.3" x2="741.2" y2="518.3"/>
                        <line class="st10" x1="567.5" y1="474.9" x2="741.2" y2="474.9"/>
                        <line class="st10" x1="567.5" y1="431.4" x2="741.2" y2="431.4"/>
                        <line class="st10" x1="567.5" y1="388" x2="741.2" y2="388"/>
                        <line class="st10" x1="654.4" y1="309.8" x2="654.4" y2="561.7"/>
                        <line class="st10" x1="567.5" y1="348.9" x2="741.2" y2="348.9"/>
                    </g>
                </g>
                <g id="ISLA_E_00000055695850572595426070000014651276353834243223_">
                    <g id="E-46_ " ng-class="opalo.inmovablesClassList[45]" ng-click="opalo.showPropertyData(64, '46')">
                        <polyline id="E-L46_00000033348806423215135550000011949057609758045098_" class="property pb-sprite-2" points="868.5,309.8 868.5,309.8 
                            868.5,344.6 868.5,348.9 868.5,348.9 781.6,348.9 781.6,344.6 781.6,309.8 781.6,309.8 868.5,309.8 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 783.1481 323.4199)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 862.22 323.4196)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 817.4123 314.9464)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 817.4133 347.1236)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 821.5817 324.0733)" class="st4 st5 st3">46</text>
                        <g>
                            <polyline class="st6" points="799.6,329 790.3,329 794.9,324.4 799.6,329 				"/>
                            <polyline class="st7" points="799.6,329 794.9,333.6 790.3,329 799.6,329 				"/>
                        </g>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 811.9286 330.9808)" class="st1 st2 st3">180.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 838.0757 329.0758)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 840.0459 331.1281)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="E-47_ " ng-class="opalo.inmovablesClassList[46]" ng-click="opalo.showPropertyData(64, '47')">
                        <polyline id="E-L47_00000049202761754221048000000009474295671042215336_" class="property pb-sprite-1" points="868.5,388 781.6,388 781.6,348.9 
                            868.5,348.9 868.5,388 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 783.1476 362.5176)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 862.2195 362.5158)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 817.4123 386.211)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 821.8205 364.2149)" class="st4 st5 st3">47</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 812.0977 371.2215)" class="st1 st2 st3">180.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 838.2447 369.3165)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 840.2149 371.3688)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="E-48_ " ng-class="opalo.inmovablesClassList[47]" ng-click="opalo.showPropertyData(64, '48')">
                        <polyline id="E-L48_00000070838102251382344490000001094165075378020997_" class="property pb-sprite-2" points="868.5,427.1 781.6,427.1 
                            781.6,388 868.5,388 868.5,427.1 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 783.1475 401.6046)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 862.2189 401.6042)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 817.4123 425.2999)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 819.9699 403.0128)" class="st4 st5 st3">48</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 811.9277 409.7055)" class="st1 st2 st3">180.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 838.0748 407.8005)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 840.045 409.8528)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="E-49_ " ng-class="opalo.inmovablesClassList[48]" ng-click="opalo.showPropertyData(64, '49')">
                        <polyline id="E-L49_00000148646866534105390700000000153963176620095651_" class="property pb-sprite-1" points="868.5,466.2 781.6,466.2 
                            781.6,427.1 868.5,427.1 868.5,466.2 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 783.1465 440.6925)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 862.2189 440.6932)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 817.4123 464.3907)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 819.9611 442.4483)" class="st4 st5 st3">49</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 811.4213 448.7639)" class="st1 st2 st3">180.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 837.5684 446.8589)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 839.5386 448.9113)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="E-50_ " ng-class="opalo.inmovablesClassList[49]" ng-click="opalo.showPropertyData(64, '50')">
                        <polyline id="E-L50_00000170977719752460444910000015314336608142832570_" class="property pb-sprite-2" points="868.5,505.3 781.6,505.3 
                            781.6,466.2 868.5,466.2 868.5,505.3 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 783.1455 479.7814)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 862.2184 479.7811)"><tspan x="0" y="0" class="st1 st2 st11">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 817.4123 503.4756)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(1 0 0 1 819.9777 479.6612)" class="st4 st5 st3">50</text>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 811.4219 486.4744)" class="st1 st2 st3">180.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 837.569 484.5694)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 839.5392 486.6217)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="E-51_ " ng-class="opalo.inmovablesClassList[50]" ng-click="opalo.showPropertyData(64, '51')">
                        <polyline id="E-L51_00000146466424848025767070000009878296800425627278_" class="property pb-sprite-1" points="868.5,505.3 868.5,548.7 
                            868.5,561.7 781.6,561.7 781.6,548.7 781.6,505.3 868.5,505.3 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 783.1459 525.8479)"><tspan x="0" y="0" class="st1 st2 st11">13.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 862.2188 525.8495)"><tspan x="0" y="0" class="st1 st2 st11">13.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 817.4123 560.0655)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <g>
                            <polyline class="st6" points="798.8,530.5 789.6,530.5 794.2,525.9 798.8,530.5 				"/>
                            <polyline class="st7" points="798.8,530.5 794.2,535.1 789.6,530.5 798.8,530.5 				"/>
                        </g>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 811.928 535.0637)" class="st1 st2 st3">260.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 838.0751 533.1586)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 840.0453 535.211)" class="st1 st2 st3"> </text>
                        </g>
                        <text transform="matrix(1 0 0 1 820.2009 527.1973)" class="st4 st5 st3">51</text>
                    </g>
                    <g id="E-52_ " ng-class="opalo.inmovablesClassList[51]" ng-click="opalo.showPropertyData(64, '52')">
                        <polyline id="E-L52_00000067226691271967190020000001249694512465885600_" class="property pb-sprite-2" points="972.7,509.6 972.7,553 
                            972.7,561.7 868.5,561.7 868.5,553 868.5,509.6 972.7,509.6 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 870.2346 528.0101)"><tspan x="0" y="0" class="st1 st2 st11">12.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 912.9626 560.0655)"><tspan x="0" y="0" class="st1 st2 st3">24.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 967.0252 528.0095)"><tspan x="0" y="0" class="st1 st2 st11">12.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 917.5573 527.1417)" class="st4 st5 st3">52</text>
                        <g>
                            <polyline class="st6" points="959.1,539.2 949.9,539.2 954.5,534.6 959.1,539.2 				"/>
                            <polyline class="st7" points="959.1,539.2 954.5,543.8 949.9,539.2 959.1,539.2 				"/>
                        </g>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 910.0129 535.064)" class="st1 st2 st3">288.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 936.16 533.1589)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 938.1302 535.2113)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="E-53_ " ng-class="opalo.inmovablesClassList[52]" ng-click="opalo.showPropertyData(64, '53')">
                        <polyline id="E-L53_00000158000979697488207720000010494589573445432206_" class="property pb-sprite-1" points="972.7,509.6 868.5,509.6 
                            868.5,466.2 972.7,466.2 972.7,509.6 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 870.2342 480.2346)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 912.9626 507.9424)"><tspan x="0" y="0" class="st1 st2 st3">24.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 967.0244 480.235)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 916.2585 480.1944)" class="st4 st5 st3">53</text>
                        <g>
                            <polyline class="st6" points="959.3,488 950,488 954.7,483.4 959.3,488 				"/>
                            <polyline class="st7" points="959.3,488 954.7,492.7 950,488 959.3,488 				"/>
                        </g>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 908.1527 488.3426)" class="st1 st2 st3">240.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 934.2998 486.4376)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 936.27 488.49)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="E-54_ " ng-class="opalo.inmovablesClassList[53]" ng-click="opalo.showPropertyData(64, '54')">
                        <polyline id="E-L54_00000031183940824968161540000001724505366851674251_" class="property pb-sprite-2" points="972.7,466.2 868.5,466.2 
                            868.5,422.7 972.7,422.7 972.7,466.2 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 870.233 436.8048)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 912.9626 464.5079)"><tspan x="0" y="0" class="st1 st2 st3">24.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 967.0257 436.8053)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 917.5768 436.7637)" class="st4 st5 st3">54</text>
                        <g>
                            <polyline class="st6" points="959.3,444.6 950,444.6 954.7,440 959.3,444.6 				"/>
                            <polyline class="st7" points="959.3,444.6 954.7,449.2 950,444.6 959.3,444.6 				"/>
                        </g>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 906.8002 446.5049)" class="st1 st2 st3">240.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 932.9472 444.5999)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 934.9174 446.6522)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="E-55_ " ng-class="opalo.inmovablesClassList[54]" ng-click="opalo.showPropertyData(64, '55')">
                        <polyline id="E-L55_00000109750843670298713610000001414754422823070085_" class="property pb-sprite-1" points="972.7,422.7 868.5,422.7 
                            868.5,379.3 972.7,379.3 972.7,422.7 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 870.3299 393.468)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 912.9626 421.0772)"><tspan x="0" y="0" class="st1 st2 st3">24.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 967.027 393.3736)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 917.654 396.6739)" class="st4 st5 st3">55</text>
                        <g>
                            <polyline class="st6" points="959.3,401.2 950,401.2 954.7,396.6 959.3,401.2 				"/>
                            <polyline class="st7" points="959.3,401.2 954.7,405.8 950,401.2 959.3,401.2 				"/>
                        </g>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 906.7995 403.4887)" class="st1 st2 st3">240.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 932.9465 401.5836)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 934.9167 403.636)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="E-56_ " ng-class="opalo.inmovablesClassList[55]" ng-click="opalo.showPropertyData(64, '56')">
                        <polyline id="E-L56_00000046314148003053958040000005933464790157671084_" class="property pb-sprite-2" points="972.7,379.3 868.5,379.3 
                            868.5,335.9 972.7,335.9 972.7,379.3 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 870.2361 349.9434)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 912.9636 377.6456)"><tspan x="0" y="0" class="st1 st2 st3">24.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 967.0263 349.9424)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 917.5778 349.899)" class="st4 st5 st3">56</text>
                        <g>
                            <polyline class="st6" points="959.3,357.8 950,357.8 954.7,353.1 959.3,357.8 				"/>
                            <polyline class="st7" points="959.3,357.8 954.7,362.4 950,357.8 959.3,357.8 				"/>
                        </g>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 907.4356 358.4118)" class="st1 st2 st3">240.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 933.5826 356.5068)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 935.5529 358.5591)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="E-57_ " ng-class="opalo.inmovablesClassList[56]" ng-click="opalo.showPropertyData(64, '57')">
                        <polyline id="E-L57_00000067221625638371558630000008000796598874973623_" class="property pb-sprite-1" points="972.7,335.9 868.5,335.9 
                            868.5,292.4 972.7,292.4 972.7,335.9 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 870.2325 306.5117)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 912.9626 334.2149)"><tspan x="0" y="0" class="st1 st2 st3">24.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 967.0266 306.5121)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 917.5778 306.4678)" class="st4 st5 st3">57</text>
                        <g>
                            <polyline class="st6" points="959.3,314.3 950,314.3 954.7,309.7 959.3,314.3 				"/>
                            <polyline class="st7" points="959.3,314.3 954.7,318.9 950,314.3 959.3,314.3 				"/>
                        </g>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 908.1526 314.9472)" class="st1 st2 st3">240.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 934.2997 313.0422)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 936.2699 315.0945)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="E-58_ " ng-class="opalo.inmovablesClassList[57]" ng-click="opalo.showPropertyData(64, '58')">
                        <polyline id="E-L58_00000054986048550726397580000013257034602348307355_" class="property pb-sprite-2" points="972.7,292.4 868.5,292.4 
                            868.5,249 972.7,249 972.7,292.4 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 870.2324 263.081)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 912.9636 290.7847)"><tspan x="0" y="0" class="st1 st2 st3">24.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 967.0275 263.0804)"><tspan x="0" y="0" class="st1 st2 st11">10.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 917.5778 263.0377)" class="st4 st5 st3">58</text>
                        <g>
                            <polyline class="st6" points="959.3,270.9 950,270.9 954.7,266.3 959.3,270.9 				"/>
                            <polyline class="st7" points="959.3,270.9 954.7,275.5 950,270.9 959.3,270.9 				"/>
                        </g>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 907.4343 270.892)" class="st1 st2 st3">240.00 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 933.5813 268.987)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 935.5515 271.0394)" class="st1 st2 st3"> </text>
                        </g>
                    </g>
                    <g id="E-59_ " ng-class="opalo.inmovablesClassList[58]" ng-click="opalo.showPropertyData(64, '59')">
                        <polyline id="E-L59_00000154388342552493022380000004295508650591432107_" class="property pb-sprite-1" points="868.5,199.5 972.7,199.9 
                            972.7,249 868.5,249 868.5,199.5 			"/>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 870.2323 216.8065)"><tspan x="0" y="0" class="st1 st2 st11">11.3</tspan><tspan x="11.8" y="0" class="st1 st2 st11">1</tspan></text>
                        <text transform="matrix(1 0 0 1 912.9626 247.3516)"><tspan x="0" y="0" class="st1 st2 st3">24.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 967.0264 216.8074)"><tspan x="0" y="0" class="st1 st2 st11">11.3</tspan><tspan x="11.8" y="0" class="st1 st2 st11">1</tspan></text>
                        <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 917.5597 218.4644)" class="st4 st5 st3">59</text>
                        <g>
                            <polyline class="st6" points="959.3,227.5 950,227.5 954.7,222.9 959.3,227.5 				"/>
                            <polyline class="st7" points="959.3,227.5 954.7,232.1 950,227.5 959.3,227.5 				"/>
                        </g>
                        <g>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 908.1525 226.7184)" class="st1 st2 st3">272.62 m</text>
                            <text transform="matrix(0.583 3.054909e-03 -3.054909e-03 0.583 934.2996 224.8134)" class="st1 st2 st3">2</text>
                            <text transform="matrix(1 5.239981e-03 -5.239981e-03 1 936.2698 226.8658)" class="st1 st2 st3"> </text>
                        </g>
                        <text transform="matrix(1 0 0 1 912.9626 205.8287)"><tspan x="0" y="0" class="st1 st2 st3">24.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                    </g>
                    <g id="E-60_ " ng-class="opalo.inmovablesClassList[59]" ng-click="opalo.showPropertyData(64, '60')">
                        <polyline id="E-L60_00000049215301398673796030000004530887689334243980_" class="property pb-sprite-2" points="868.5,199.5 921,121 993.1,169.4 
                            972.7,199.9 868.5,199.5 			"/>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 925.4352 161.2967)" class="st1 st2 st3">30</text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 931.0727 165.0707)" class="st1 st2 st3">1.89 m</text>
                        <text transform="matrix(0.4845 0.3243 -0.3243 0.4845 948.2796 174.1328)" class="st1 st2 st3">2</text>
                        <text transform="matrix(0.5607 -0.8281 0.8281 0.5607 897.8033 171.1425)"><tspan x="0" y="0" class="st1 st2 st3">21.7</tspan><tspan x="11.8" y="0" class="st1 st2 st3">3</tspan></text>
                        <text transform="matrix(0.631 -0.7758 0.7758 0.631 977.3832 188.3622)"><tspan x="0" y="0" class="st1 st2 st3">8.4</tspan><tspan x="8.4" y="0" class="st1 st2 st3">6</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 940.3849 158.6247)" class="st4 st5 st3">60</text>
                        <g>
                            <polyline class="st6" points="974.5,182.2 966.8,177.1 973.2,175.8 974.5,182.2 				"/>
                            <polyline class="st7" points="974.5,182.2 968.1,183.5 966.8,177.1 974.5,182.2 				"/>
                        </g>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 946.0584 146.66)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                    </g>
                    <g id="E-61_ " ng-class="opalo.inmovablesClassList[60]" ng-click="opalo.showPropertyData(64, '61')">
                        <polyline id="E-L61_00000038381868015116673190000014235098316911333810_" class="property pb-sprite-1" points="993.1,169.4 921,121 942.7,88.6 
                            1014.9,136.9 993.1,169.4 			"/>
                        <text transform="matrix(0.5607 -0.8281 0.8281 0.5607 935.2 113.7568)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.6006 -0.7996 0.7996 0.6006 998.6548 156.8687)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 951.7234 139.4283)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 969.4363 120.3601)" class="st4 st5 st3">61</text>
                        <g>
                            <polyline class="st6" points="996.4,149.4 988.8,144.3 995.2,143 996.4,149.4 				"/>
                            <polyline class="st7" points="996.4,149.4 990,150.7 988.8,144.3 996.4,149.4 				"/>
                        </g>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 956.0682 123.1078)" class="st1 st2 st3">180.00</text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 971.5671 133.4836)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(0.4845 0.3243 -0.3243 0.4845 978.8923 135.9304)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="E-62_ " ng-class="opalo.inmovablesClassList[61]" ng-click="opalo.showPropertyData(64, '62')">
                        <polyline id="E-L62_00000093176766167512758050000001375661513402625408_" class="property pb-sprite-2" points="1014.9,136.9 942.7,88.6 
                            962,59.7 1034.2,108 1014.9,136.9 			"/>
                        <text transform="matrix(0.5984 -0.8012 0.8012 0.5984 956.3839 82.947)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.6054 -0.7959 0.7959 0.6054 1019.2035 126.203)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 973.3675 107.0938)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 985.8833 95.011)" class="st4 st5 st3">62</text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 975.3998 95.0104)" class="st1 st2 st3">160.00</text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 990.8987 105.3862)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(0.4845 0.3243 -0.3243 0.4845 998.2239 107.833)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="E-63_ " ng-class="opalo.inmovablesClassList[62]" ng-click="opalo.showPropertyData(64, '63')">
                        <polyline id="E-L63_00000175319142225857252360000014086498458717391274_" class="property pb-sprite-1" points="1034.2,108 962,59.7 981.4,30.8 
                            1053.5,79.1 1034.2,108 			"/>
                        <text transform="matrix(0.6218 -0.7831 0.7831 0.6218 975.1278 54.008)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.5578 -0.83 0.83 0.5578 1038.8933 97.484)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 992.7949 78.0738)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1006.8766 64.8895)" class="st4 st5 st3">63</text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 996.4316 64.8894)" class="st1 st2 st3">160.00</text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1011.9305 75.2652)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(0.4845 0.3243 -0.3243 0.4845 1019.2557 77.712)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="E-64_ " ng-class="opalo.inmovablesClassList[63]" ng-click="opalo.showPropertyData(64, '64')">
                        <polyline id="E-L64_00000172412622590381560270000009507238717160610983_" class="property pb-sprite-2" points="1053.5,79.1 981.4,30.8 
                            1000.7,1.9 1072.9,50.3 1053.5,79.1 			"/>
                        <text transform="matrix(0.5578 -0.83 0.83 0.5578 994.4396 25.4411)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1012.1235 49.2015)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1025.4893 35.6595)" class="st4 st5 st3">64</text>
                        <g>
                            <polyline class="st6" points="1056.2,60.2 1048.5,55.1 1054.9,53.8 1056.2,60.2 				"/>
                            <polyline class="st7" points="1056.2,60.2 1049.8,61.4 1048.5,55.1 1056.2,60.2 				"/>
                        </g>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1013.1106 35.66)" class="st1 st2 st3">160.00</text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1028.6095 46.0358)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(0.4845 0.3243 -0.3243 0.4845 1035.9347 48.4826)" class="st1 st2 st3">2</text>
                        <text transform="matrix(0.5909 -0.8068 0.8068 0.5909 1057.9722 68.5456)"><tspan x="0" y="0" class="st1 st2 st3">8.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                    </g>
                    <g id="LINEAS_DIVISORIAS_00000114048990684077632520000016317885623210732726_">
                        <line class="st10" x1="868.5" y1="427.1" x2="781.6" y2="427.1"/>
                        <line class="st10" x1="868.5" y1="348.9" x2="781.6" y2="348.9"/>
                        <line class="st10" x1="868.5" y1="388" x2="781.6" y2="388"/>
                        <line class="st10" x1="868.5" y1="466.2" x2="781.6" y2="466.2"/>
                        <line class="st10" x1="868.5" y1="505.3" x2="781.6" y2="505.3"/>
                        <line class="st10" x1="868.5" y1="509.6" x2="972.7" y2="509.6"/>
                        <line class="st10" x1="868.5" y1="466.2" x2="972.7" y2="466.2"/>
                        <line class="st10" x1="868.5" y1="422.7" x2="972.7" y2="422.7"/>
                        <line class="st10" x1="868.5" y1="379.3" x2="972.7" y2="379.3"/>
                        <line class="st10" x1="868.5" y1="309.8" x2="868.5" y2="561.7"/>
                        <line class="st10" x1="868.5" y1="335.9" x2="972.7" y2="335.9"/>
                        <line class="st10" x1="868.5" y1="292.4" x2="972.7" y2="292.4"/>
                        <line class="st10" x1="868.5" y1="249" x2="972.7" y2="249"/>
                        <line class="st10" x1="868.5" y1="199.5" x2="972.7" y2="199.9"/>
                        <line class="st10" x1="993.1" y1="169.4" x2="921" y2="121"/>
                        <line class="st10" x1="1014.9" y1="136.9" x2="942.7" y2="88.6"/>
                        <line class="st10" x1="1034.2" y1="108" x2="962" y2="59.7"/>
                        <line class="st10" x1="1053.5" y1="79.1" x2="981.4" y2="30.8"/>
                    </g>
                </g>
                <g id="ISLA_F">
                    <g id="F-65_ " ng-class="opalo.inmovablesClassList[64]" ng-click="opalo.showPropertyData(64, '65')">
                        <polyline id="F-L65_00000081632145069040530910000015145000973126662563_" class="property pb-sprite-1" points="1058.1,144.9 1106.4,72.7 
                            1138.9,94.5 1090.6,166.7 1058.1,144.9 			"/>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1070.0486 151.5379)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1113.562 86.7217)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.5903 -0.8072 0.8072 0.5903 1107.6564 135.2149)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.5903 -0.8072 0.8072 0.5903 1082.774 118.5119)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.5475 -0.8368 0.8368 0.5475 1092.3882 120.4165)" class="st4 st5 st3">65</text>
                        <g>
                            <polyline class="st6" points="1082.8,142.1 1087.9,134.5 1089.2,140.9 1082.8,142.1 				"/>
                            <polyline class="st7" points="1082.8,142.1 1081.5,135.7 1087.9,134.5 1082.8,142.1 				"/>
                        </g>
                        <text transform="matrix(0.5534 -0.8329 0.8329 0.5534 1092.7821 131.5138)" class="st1 st2 st3">180.00</text>
                        <text transform="matrix(0.5534 -0.8329 0.8329 0.5534 1103.1029 115.9789)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(0.3226 -0.4856 0.4856 0.3226 1105.524 108.6446)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="F-66_ " ng-class="opalo.inmovablesClassList[65]" ng-click="opalo.showPropertyData(64, '66')">
                        <polyline id="F-L66_00000083058495152941780220000018287032742679006357_" class="property pb-sprite-2" points="1090.6,166.7 1138.9,94.5 
                            1171.4,116.2 1123.1,188.4 1090.6,166.7 			"/>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1102.5306 173.2813)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1146.0453 108.4652)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.6211 -0.7837 0.7837 0.6211 1140.6296 157.3105)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.5351 -0.8448 0.8448 0.5351 1126.2648 144.5913)" class="st4 st5 st3">66</text>
                        <text transform="matrix(0.541 -0.841 0.841 0.541 1127.423 154.4625)" class="st1 st2 st3">180.00</text>
                        <text transform="matrix(0.541 -0.841 0.841 0.541 1137.5131 138.7764)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(0.3154 -0.4903 0.4903 0.3154 1139.8253 131.4071)" class="st1 st2 st3">2</text>
                        <g>
                            <g>
                                <polyline class="st7" points="1114.8,163.6 1113.6,157.2 1120,155.9 1114.8,163.6 					"/>
                            </g>
                            <polyline class="st6" points="1114.8,163.6 1120,155.9 1121.2,162.3 1114.8,163.6 				"/>
                        </g>
                    </g>
                    <g id="F-67_ " ng-class="opalo.inmovablesClassList[66]" ng-click="opalo.showPropertyData(64, '67')">
                        <polyline id="F-L67_00000098936368231778092760000011827997421589520288_" class="property pb-sprite-1" points="1123.1,188.4 1171.4,116.2 
                            1203.9,138 1155.6,210.1 1123.1,188.4 			"/>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1135.0111 195.0254)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1178.5289 130.2115)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.5772 -0.8166 0.8166 0.5772 1173.4874 179.267)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.5149 -0.8572 0.8572 0.5149 1157.1075 165.2323)" class="st4 st5 st3">67</text>
                        <g>
                            <polyline class="st6" points="1147.3,185.3 1152.4,177.7 1153.7,184.1 1147.3,185.3 				"/>
                            <polyline class="st7" points="1147.3,185.3 1146,178.9 1152.4,177.7 1147.3,185.3 				"/>
                        </g>
                        <text transform="matrix(0.5209 -0.8536 0.8536 0.5209 1159.0229 177.6004)" class="st1 st2 st3">180.00</text>
                        <text transform="matrix(0.5209 -0.8536 0.8536 0.5209 1168.7382 161.6793)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(0.3037 -0.4977 0.4977 0.3037 1170.875 154.2573)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="F-68_ " ng-class="opalo.inmovablesClassList[67]" ng-click="opalo.showPropertyData(64, '68')">
                        <polyline id="F-L68_00000101092045154879013520000010171262506478391966_" class="property pb-sprite-2" points="1155.6,210.1 1203.9,138 
                            1236.4,159.7 1188,231.9 1155.6,210.1 			"/>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1167.4955 216.7691)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1211.0094 151.9538)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.572 -0.8203 0.8203 0.572 1206.0549 200.9006)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.583 -0.8125 0.8125 0.583 1188.3615 185.8502)" class="st4 st5 st3">68</text>
                        <g>
                            <polyline class="st6" points="1179.8,207.1 1184.9,199.4 1186.2,205.8 1179.8,207.1 				"/>
                            <polyline class="st7" points="1179.8,207.1 1178.5,200.7 1184.9,199.4 1179.8,207.1 				"/>
                        </g>
                        <text transform="matrix(0.5887 -0.8084 0.8084 0.5887 1189.4528 197.412)" class="st1 st2 st3">180.00</text>
                        <text transform="matrix(0.5887 -0.8084 0.8084 0.5887 1200.4319 182.3347)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(0.3432 -0.4713 0.4713 0.3432 1203.166 175.1113)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="F-69_ " ng-class="opalo.inmovablesClassList[68]" ng-click="opalo.showPropertyData(64, '69')">
                        <polyline id="F-L69_00000066502491652322375030000012781147757169134258_" class="property pb-sprite-1" points="1188,231.9 1236.4,159.7 
                            1268.8,181.4 1220.5,253.6 1188,231.9 			"/>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1199.9751 238.5126)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1243.4918 173.6986)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.6019 -0.7985 0.7985 0.6019 1238.2534 222.5125)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.536 -0.8442 0.8442 0.536 1221.3425 208.557)" class="st4 st5 st3">69</text>
                        <g>
                            <polyline class="st6" points="1212.3,228.8 1217.4,221.1 1218.7,227.5 1212.3,228.8 				"/>
                            <polyline class="st7" points="1212.3,228.8 1211,222.4 1217.4,221.1 1212.3,228.8 				"/>
                        </g>
                        <text transform="matrix(0.5419 -0.8404 0.8404 0.5419 1223.5962 221.0703)" class="st1 st2 st3">180.00</text>
                        <text transform="matrix(0.5419 -0.8404 0.8404 0.5419 1233.7031 205.395)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(0.3159 -0.49 0.49 0.3159 1236.0233 198.0281)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="F-70_ " ng-class="opalo.inmovablesClassList[69]" ng-click="opalo.showPropertyData(64, '70')">
                        <polyline id="F-L70_00000064347583340973006790000006474822665596170929_" class="property pb-sprite-2" points="1220.5,253.6 1268.8,181.4 
                            1301.3,203.2 1253,275.4 1220.5,253.6 			"/>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1232.4586 260.2575)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1275.9734 195.4428)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.5699 -0.8217 0.8217 0.5699 1270.9075 244.4253)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.5866 -0.8098 0.8098 0.5866 1254.2166 229.2236)" class="st4 st5 st3">70</text>
                        <g>
                            <polyline class="st6" points="1244.8,250.5 1249.9,242.9 1251.1,249.3 1244.8,250.5 				"/>
                            <polyline class="st7" points="1244.8,250.5 1243.5,244.2 1249.9,242.9 1244.8,250.5 				"/>
                        </g>
                        <text transform="matrix(0.5923 -0.8057 0.8057 0.5923 1256.2433 241.2404)" class="st1 st2 st3">180.00</text>
                        <text transform="matrix(0.5923 -0.8057 0.8057 0.5923 1267.29 226.2129)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(0.3453 -0.4697 0.4697 0.3453 1270.0566 219.0019)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="F-71_ " ng-class="opalo.inmovablesClassList[70]" ng-click="opalo.showPropertyData(64, '71')">
                        <polyline id="F-L71_00000018919762259171161360000017210776007438916784_" class="property pb-sprite-1" points="1253,275.4 1301.3,203.2 
                            1333.8,224.9 1285.5,297.1 1253,275.4 			"/>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1264.9415 282.0032)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1308.4552 217.1866)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.6017 -0.7987 0.7987 0.6017 1303.2238 266.0107)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.559 -0.8292 0.8292 0.559 1284.7865 249.9137)" class="st4 st5 st3">71</text>
                        <text transform="matrix(0.5648 -0.8253 0.8253 0.5648 1287.0878 263.0161)" class="st1 st2 st3">180.00</text>
                        <text transform="matrix(0.5648 -0.8253 0.8253 0.5648 1297.6211 247.6241)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(0.3293 -0.4811 0.4811 0.3293 1300.1428 240.3235)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="F-72_ " ng-class="opalo.inmovablesClassList[71]" ng-click="opalo.showPropertyData(64, '72')">
                        <polyline id="F-L72_00000068675510195377261520000004369797244205603223_" class="property pb-sprite-2" points="1333.8,224.9 1365.2,245.9 
                            1337.9,291.8 1319.2,319.7 1285.5,297.1 1333.8,224.9 			"/>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1298.0471 304.1652)"><tspan x="0" y="0" class="st1 st2 st3">9.3</tspan><tspan x="8.4" y="0" class="st1 st2 st3">5</tspan></text>
                        <text transform="matrix(0.5656 -0.8247 0.8247 0.5656 1344.9934 273.8238)"><tspan x="0" y="0" class="st1 st2 st3">12.2</tspan><tspan x="11.8" y="0" class="st1 st2 st3">8</tspan></text>
                        <text transform="matrix(0.6204 -0.7843 0.7843 0.6204 1327.3501 302.3488)"><tspan x="0" y="0" class="st1 st2 st3">3.8</tspan><tspan x="8.4" y="0" class="st1 st2 st3">7</tspan></text>
                        <text transform="matrix(0.7167 -0.6973 0.6973 0.7167 1317.8467 316.2369)"><tspan x="0" y="0" class="st1 st2 st3">3.8</tspan><tspan x="8.4" y="0" class="st1 st2 st3">7</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1340.3687 238.5507)"><tspan x="0" y="0" class="st1 st2 st3">8.6</tspan><tspan x="8.4" y="0" class="st1 st2 st3">8</tspan></text>
                        <text transform="matrix(0.5505 -0.8349 0.8349 0.5505 1319.5311 274.8689)" class="st4 st5 st3">72</text>
                        <g>
                            <polyline class="st6" points="1308.4,293.2 1313.6,285.5 1314.8,291.9 1308.4,293.2 				"/>
                            <polyline class="st7" points="1308.4,293.2 1307.2,286.8 1313.6,285.5 1308.4,293.2 				"/>
                        </g>
                        <text transform="matrix(0.5505 -0.8349 0.8349 0.5505 1320.714 285.8696)" class="st1 st2 st3">182.86</text>
                        <text transform="matrix(0.5505 -0.8349 0.8349 0.5505 1330.9807 270.2985)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(0.3209 -0.4867 0.4867 0.3209 1333.3762 262.9558)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="LINEAS_DIVISORIAS_00000119086608754449059770000003175461732880192386_">
                        <line class="st10" x1="1090.6" y1="166.7" x2="1138.9" y2="94.5"/>
                        <line class="st10" x1="1123.1" y1="188.4" x2="1171.4" y2="116.2"/>
                        <line class="st10" x1="1155.6" y1="210.1" x2="1203.9" y2="138"/>
                        <line class="st10" x1="1188" y1="231.9" x2="1236.4" y2="159.7"/>
                        <line class="st10" x1="1220.5" y1="253.6" x2="1268.8" y2="181.4"/>
                        <line class="st10" x1="1253" y1="275.4" x2="1301.3" y2="203.2"/>
                        <line class="st10" x1="1285.5" y1="297.1" x2="1333.8" y2="224.9"/>
                    </g>
                </g>
                <g id="ISLA_G_00000080898164062624988760000002309780992826922123_">
                    <g id="G-73_ " ng-class="opalo.inmovablesClassList[72]" ng-click="opalo.showPropertyData(64, '73')">
                        <polyline id="G-L73_00000134214267932926258470000015891101496962075275_" class="property pb-sprite-2" points="1221.3,309.8 1224.6,304.9 
                            1296.8,353.3 1293.5,358.1 1271.8,390.6 1199.6,342.2 1221.3,309.8 			"/>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1232.2955 359.4791)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1251.1273 329.6126)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.5607 -0.8281 0.8281 0.5607 1213.4191 333.1237)"><tspan x="0" y="0" class="st1 st2 st3">10.3</tspan><tspan x="11.8" y="0" class="st1 st2 st3">4</tspan></text>
                        <text transform="matrix(0.6261 -0.7798 0.7798 0.6261 1275.8654 377.1686)"><tspan x="0" y="0" class="st1 st2 st3">10.3</tspan><tspan x="11.8" y="0" class="st1 st2 st3">4</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1245.2551 342.7555)" class="st4 st5 st3">73</text>
                        <g>
                            <polyline class="st6" points="1221.3,333.5 1229,338.6 1222.6,339.9 1221.3,333.5 				"/>
                            <polyline class="st7" points="1221.3,333.5 1227.7,332.2 1229,338.6 1221.3,333.5 				"/>
                        </g>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1234.2808 345.04)" class="st1 st2 st3">206.74</text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1249.7797 355.4157)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(0.4845 0.3243 -0.3243 0.4845 1257.1049 357.8625)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-74_ " ng-class="opalo.inmovablesClassList[73]" ng-click="opalo.showPropertyData(64, '74')">
                        <polyline id="G-L74_00000003073782641306160710000005260128728223403939_" class="property pb-sprite-1" points="1250,423 1177.9,374.7 
                            1199.6,342.2 1271.8,390.6 1250,423 			"/>
                        <text transform="matrix(0.5578 -0.83 0.83 0.5578 1191.0463 366.7195)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.5578 -0.83 0.83 0.5578 1254.1677 411.0316)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1210.4727 392.0737)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1223.6396 375.323)" class="st4 st5 st3">74</text>
                        <g>
                            <polyline class="st6" points="1200.4,364.7 1208.1,369.8 1201.7,371.1 1200.4,364.7 				"/>
                            <polyline class="st7" points="1200.4,364.7 1206.8,363.5 1208.1,369.8 1200.4,364.7 				"/>
                        </g>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1211.7759 376.48)" class="st1 st2 st3">180.00</text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1227.2749 386.8558)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(0.4845 0.3243 -0.3243 0.4845 1234.6001 389.3026)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-75_ " ng-class="opalo.inmovablesClassList[74]" ng-click="opalo.showPropertyData(64, '75')">
                        <polyline id="G-L75_00000121990635540824359190000018057123544125495727_" class="property pb-sprite-2" points="1228.3,455.5 1156.1,407.2 
                            1177.9,374.7 1250,423 1228.3,455.5 			"/>
                        <text transform="matrix(0.5607 -0.8281 0.8281 0.5607 1169.2697 399.0842)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.5607 -0.8281 0.8281 0.5607 1232.3972 443.3975)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1188.6567 424.6686)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1200.2513 410.7598)" class="st4 st5 st3">75</text>
                        <g>
                            <polyline class="st7" points="1178.7,397.2 1185.1,395.9 1186.3,402.3 1178.7,397.2 				"/>
                            <polyline class="st6" points="1178.7,397.2 1186.3,402.3 1179.9,403.6 1178.7,397.2 				"/>
                        </g>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1186.6296 411.6113)" class="st1 st2 st3">180.00</text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1202.1285 421.9871)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(0.4845 0.3243 -0.3243 0.4845 1209.4537 424.4339)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-76_ " ng-class="opalo.inmovablesClassList[75]" ng-click="opalo.showPropertyData(64, '76')">
                        <polyline id="G-L76_00000047769356537657331270000017024174669791663766_" class="property pb-sprite-1" points="1206.5,488 1134.4,439.7 
                            1156.1,407.2 1228.3,455.5 1206.5,488 			"/>
                        <text transform="matrix(0.618 -0.7862 0.7862 0.618 1147.1256 431.5011)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.5964 -0.8027 0.8027 0.5964 1210.3813 475.8903)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1166.8361 457.2635)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1179.6591 441.8008)" class="st4 st5 st3">76</text>
                        <g>
                            <polyline class="st6" points="1156.9,429.7 1164.6,434.8 1158.2,436.1 1156.9,429.7 				"/>
                            <polyline class="st7" points="1156.9,429.7 1163.3,428.4 1164.6,434.8 1156.9,429.7 				"/>
                        </g>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1166.118 441.8015)" class="st1 st2 st3">180.00</text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1181.6169 452.1772)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(0.4845 0.3243 -0.3243 0.4845 1188.9421 454.624)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-77_ " ng-class="opalo.inmovablesClassList[76]" ng-click="opalo.showPropertyData(64, '77')">
                        <polyline id="G-L77_00000067224611569654246470000017794300857165877431_" class="property pb-sprite-2" points="1184.8,520.5 1112.6,472.2 
                            1134.4,439.7 1206.5,488 1184.8,520.5 			"/>
                        <text transform="matrix(0.6161 -0.7877 0.7877 0.6161 1125.2634 464.0043)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.5578 -0.83 0.83 0.5578 1188.9337 508.4771)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1145.0525 489.803)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1156.6007 473.9553)" class="st4 st5 st3">77</text>
                        <g>
                            <polyline class="st6" points="1135.2,462.2 1142.9,467.3 1136.5,468.6 1135.2,462.2 				"/>
                            <polyline class="st7" points="1135.2,462.2 1141.6,460.9 1142.9,467.3 1135.2,462.2 				"/>
                        </g>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1145.5206 475.4568)" class="st1 st2 st3">180.00</text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1161.0195 485.8326)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(0.4845 0.3243 -0.3243 0.4845 1168.3447 488.2794)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-78_ " ng-class="opalo.inmovablesClassList[77]" ng-click="opalo.showPropertyData(64, '78')">
                        <polyline id="G-L78_00000029042393857350416050000007794691355507645071_" class="property pb-sprite-1" points="1163.1,553 1090.9,504.7 
                            1112.6,472.2 1184.8,520.5 1163.1,553 			"/>
                        <text transform="matrix(0.5578 -0.83 0.83 0.5578 1104.0719 496.6487)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.5578 -0.83 0.83 0.5578 1167.1925 540.9619)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1123.0756 522.6312)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1137.8403 508.8339)" class="st4 st5 st3">78</text>
                        <g>
                            <polyline class="st6" points="1111.9,496.9 1119.6,502 1113.2,503.3 1111.9,496.9 				"/>
                            <polyline class="st7" points="1111.9,496.9 1118.3,495.7 1119.6,502 1111.9,496.9 				"/>
                        </g>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1123.1367 506.9269)" class="st1 st2 st3">180.00</text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1138.6356 517.3027)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(0.4845 0.3243 -0.3243 0.4845 1145.9608 519.7495)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-79_ " ng-class="opalo.inmovablesClassList[78]" ng-click="opalo.showPropertyData(64, '79')">
                        <polyline id="G-L79_00000065760632140029700020000012701411090922603965_" class="property pb-sprite-2" points="1141.3,585.5 1069.1,537.1 
                            1090.9,504.7 1163.1,553 1141.3,585.5 			"/>
                        <text transform="matrix(0.5961 -0.8029 0.8029 0.5961 1082.0026 528.9662)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.5577 -0.83 0.83 0.5577 1145.2925 573.4158)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1101.4491 554.936)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1115.4456 538.4875)" class="st4 st5 st3">79</text>
                        <polyline class="st6" points="1090.7,528.7 1098.3,533.8 1091.9,535.1 1090.7,528.7 			"/>
                        <polyline class="st7" points="1090.7,528.7 1097.1,527.4 1098.3,533.8 1090.7,528.7 			"/>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1102.5303 538.4874)" class="st1 st2 st3">180.00</text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1118.0293 548.8631)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(0.4845 0.3243 -0.3243 0.4845 1125.3544 551.3099)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-80_ " ng-class="opalo.inmovablesClassList[79]" ng-click="opalo.showPropertyData(64, '80')">
                        <polyline id="G-L80_00000162340961617452060580000013301992645431193767_" class="property pb-sprite-1" points="1119.6,617.9 1047.4,569.6 
                            1069.1,537.1 1141.3,585.5 1119.6,617.9 			"/>
                        <text transform="matrix(0.5578 -0.83 0.83 0.5578 1060.578 561.6127)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.5534 -0.8329 0.8329 0.5534 1123.6128 605.8002)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1079.9271 587.0883)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1092.7996 571.6552)" class="st4 st5 st3">80</text>
                        <g>
                            <polyline class="st6" points="1068.1,562.4 1075.8,567.5 1069.4,568.8 1068.1,562.4 				"/>
                            <polyline class="st7" points="1068.1,562.4 1074.5,561.1 1075.8,567.5 1068.1,562.4 				"/>
                        </g>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1079.0813 571.6556)" class="st1 st2 st3">180.00</text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1094.5802 582.0314)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(0.4845 0.3243 -0.3243 0.4845 1101.9054 584.4782)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-81_ " ng-class="opalo.inmovablesClassList[80]" ng-click="opalo.showPropertyData(64, '81')">
                        <polyline id="G-L81_00000009578733863271393900000010680118706867989127_" class="property pb-sprite-2" points="1047.4,569.6 1119.6,617.9 
                            1063.3,702 1025.6,602.1 1047.4,569.6 			"/>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1056.2455 609.6044)" class="st1 st2 st3">32</text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1061.8829 613.3784)" class="st1 st2 st3">2.91 m</text>
                        <text transform="matrix(0.4845 0.3243 -0.3243 0.4845 1079.0898 622.4406)" class="st1 st2 st3">2</text>
                        <text transform="matrix(0.5578 -0.83 0.83 0.5578 1038.8344 594.0994)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(0.5864 -0.81 0.81 0.5864 1083.4023 665.4276)"><tspan x="0" y="0" class="st1 st2 st3">23.2</tspan><tspan x="11.8" y="0" class="st1 st2 st3">9</tspan></text>
                        <text transform="matrix(0.3518 0.9361 -0.9361 0.3518 1043.8372 644.1774)"><tspan x="0" y="0" class="st1 st2 st3">24.5</tspan><tspan x="11.8" y="0" class="st1 st2 st3">8</tspan></text>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1069.3621 607.6168)" class="st4 st5 st3">81</text>
                        <g>
                            <polyline class="st6" points="1045.8,595.7 1053.5,600.8 1047.1,602.1 1045.8,595.7 				"/>
                            <polyline class="st7" points="1045.8,595.7 1052.2,594.4 1053.5,600.8 1045.8,595.7 				"/>
                        </g>
                        <text transform="matrix(0.831 0.5563 -0.5563 0.831 1073.712 596.0211)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="11.8" y="0" class="st1 st2 st3">0</tspan></text>
                    </g>
                    <g id="G-82_ " ng-class="opalo.inmovablesClassList[81]" ng-click="opalo.showPropertyData(64, '82')">
                        <polyline id="G-L82_00000053533545012747008970000002879994048768234377_" class="property pb-sprite-1" points="1017.9,602.1 1025.6,602.1 
                            1063.3,702 1017.9,702 986.5,702 986.5,602.1 1017.9,602.1 			"/>
                        <text transform="matrix(1 0 0 1 1000.1633 607.6231)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 988.6839 644.405)"><tspan x="0" y="0" class="st1 st2 st11">23.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 1017.2961 700.9883)"><tspan x="0" y="0" class="st1 st2 st3">17.6</tspan><tspan x="11.8" y="0" class="st1 st2 st3">7</tspan></text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 1006.2028 639.0659)" class="st1 st2 st3">30</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 1006.2265 645.85)" class="st1 st2 st3">6.80 m</text>
                        <text transform="matrix(2.034678e-03 0.583 -0.583 2.034678e-03 1008.336 665.1826)" class="st1 st2 st3">2</text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 1014.8207 646.8737)" class="st4 st5 st11">82</text>
                        <g>
                            <polyline class="st6" points="1006.9,618.2 1006.9,627.4 1002.3,622.8 1006.9,618.2 				"/>
                            <polyline class="st7" points="1006.9,618.2 1011.5,622.8 1006.9,627.4 1006.9,618.2 				"/>
                        </g>
                        <text transform="matrix(0.3518 0.9361 -0.9361 0.3518 1031.7592 648.3771)"><tspan x="0" y="0" class="st1 st2 st3">24.5</tspan><tspan x="11.8" y="0" class="st1 st2 st3">8</tspan></text>
                    </g>
                    <g id="G-83_ " ng-class="opalo.inmovablesClassList[82]" ng-click="opalo.showPropertyData(64, '83')">
                        <polyline id="G-L83_00000072986154345134464190000004551431228542656419_" class="property pb-sprite-2" points="947.5,602.1 986.5,602.1 
                            986.5,702 947.5,702 947.5,602.1 			"/>
                        <text transform="matrix(1 0 0 1 961.0671 607.6231)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 949.9358 644.4046)"><tspan x="0" y="0" class="st1 st2 st11">23.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 961.0681 700.9883)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 974.1412 646.7224)" class="st4 st5 st11">83</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 964.7383 636.7164)" class="st1 st2 st3">207.00</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 964.8034 655.3677)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(2.034678e-03 0.583 -0.583 2.034678e-03 966.8714 662.8088)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-84_ " ng-class="opalo.inmovablesClassList[83]" ng-click="opalo.showPropertyData(64, '84')">
                        <polyline id="G-L84_00000008144056205492136290000007607179743492730004_" class="property pb-sprite-1" points="908.4,602.1 947.5,602.1 
                            947.5,702 908.4,702 908.4,602.1 			"/>
                        <text transform="matrix(1 0 0 1 921.9772 607.6231)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 910.8493 644.4055)"><tspan x="0" y="0" class="st1 st2 st11">23.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 921.9772 700.9883)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 935.053 646.568)" class="st4 st5 st11">84</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 927.907 636.7151)" class="st1 st2 st3">207.00</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 927.9721 655.3664)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(2.034678e-03 0.583 -0.583 2.034678e-03 930.0401 662.8074)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-85_ " ng-class="opalo.inmovablesClassList[84]" ng-click="opalo.showPropertyData(64, '85')">
                        <polyline id="G-L85_00000174593416521407045440000006016058222275003071_" class="property pb-sprite-2" points="869.3,602.1 908.4,602.1 
                            908.4,702 869.3,702 869.3,602.1 			"/>
                        <text transform="matrix(1 0 0 1 882.8923 607.6231)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 871.7618 644.4065)"><tspan x="0" y="0" class="st1 st2 st11">23.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 882.8913 700.9883)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 895.9688 646.4147)" class="st4 st5 st11">85</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 887.3692 636.7159)" class="st1 st2 st3">207.00</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 887.4343 655.3672)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(2.034678e-03 0.583 -0.583 2.034678e-03 889.5023 662.8083)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-86_ " ng-class="opalo.inmovablesClassList[85]" ng-click="opalo.showPropertyData(64, '86')">
                        <polyline id="G-L86_00000093884406870974029410000016248518891450292383_" class="property pb-sprite-1" points="830.2,602.1 869.3,602.1 
                            869.3,702 830.2,702 830.2,602.1 			"/>
                        <text transform="matrix(1 0 0 1 843.8019 607.6231)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 832.6719 644.4045)"><tspan x="0" y="0" class="st1 st2 st11">23.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 843.8029 700.9883)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 856.8806 646.2613)" class="st4 st5 st11">86</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 849.7293 636.7194)" class="st1 st2 st3">207.00</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 849.7944 655.3707)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(2.034678e-03 0.583 -0.583 2.034678e-03 851.8624 662.8117)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-87_ " ng-class="opalo.inmovablesClassList[86]" ng-click="opalo.showPropertyData(64, '87')">
                        <polyline id="G-L87_00000029012402401010358170000000154313583110128787_" class="property pb-sprite-2" points="791.1,602.1 830.2,602.1 
                            830.2,702 791.1,702 791.1,602.1 			"/>
                        <text transform="matrix(1 0 0 1 804.7131 607.6231)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 793.5859 644.4044)"><tspan x="0" y="0" class="st1 st2 st11">23.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 804.7141 700.9883)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 817.7925 646.1079)" class="st4 st5 st11">87</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 807.9717 636.7167)" class="st1 st2 st3">207.00</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 808.0369 655.368)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(2.034678e-03 0.583 -0.583 2.034678e-03 810.1048 662.809)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-88_ " ng-class="opalo.inmovablesClassList[87]" ng-click="opalo.showPropertyData(64, '88')">
                        <polyline id="G-L88_00000064319329382900945700000017621697133275090110_" class="property pb-sprite-1" points="752,602.1 791.1,602.1 791.1,702 
                            752,702 752,602.1 			"/>
                        <text transform="matrix(1 0 0 1 765.6257 607.6231)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 754.4951 644.4034)"><tspan x="0" y="0" class="st1 st2 st11">23.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 765.6237 700.9883)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 778.7028 645.9555)" class="st4 st5 st11">88</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 769.4134 636.7194)" class="st1 st2 st3">207.00</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 769.4785 655.3707)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(2.034678e-03 0.583 -0.583 2.034678e-03 771.5465 662.8118)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-89_ " ng-class="opalo.inmovablesClassList[88]" ng-click="opalo.showPropertyData(64, '89')">
                        <polyline id="G-L89_00000027585543918602856430000004433299402606094221_" class="property pb-sprite-2" points="712.9,602.1 752,602.1 752,702 
                            712.9,702 712.9,602.1 			"/>
                        <text transform="matrix(1 0 0 1 726.5378 607.6231)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 715.4086 644.4034)"><tspan x="0" y="0" class="st1 st2 st11">23.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 726.5358 700.9883)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 739.6171 645.8022)" class="st4 st5 st11">89</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 731.1105 636.7222)" class="st1 st2 st3">207.00</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 731.1755 655.3735)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(2.034678e-03 0.583 -0.583 2.034678e-03 733.2435 662.8146)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-90_ " ng-class="opalo.inmovablesClassList[89]" ng-click="opalo.showPropertyData(64, '90')">
                        <polyline id="G-L90_00000089569148878114074660000000487248205969259958_" class="property pb-sprite-1" points="673.8,602.1 712.9,602.1 
                            712.9,702 673.8,702 673.8,602.1 			"/>
                        <text transform="matrix(1 0 0 1 687.4474 607.6231)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 676.3196 644.4033)"><tspan x="0" y="0" class="st1 st2 st11">23.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 687.4484 700.9883)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 700.5275 645.6478)" class="st4 st5 st11">90</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 693.3763 636.7231)" class="st1 st2 st3">207.00</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 693.4415 655.3743)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(2.034678e-03 0.583 -0.583 2.034678e-03 695.5094 662.8154)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-91_ " ng-class="opalo.inmovablesClassList[90]" ng-click="opalo.showPropertyData(64, '91')">
                        <polyline id="G-L91_00000007406669313777478770000004378412170863033785_" class="property pb-sprite-2" points="634.7,602.1 673.8,602.1 
                            673.8,702 634.7,702 634.7,602.1 			"/>
                        <text transform="matrix(1 0 0 1 648.3605 607.6231)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 637.2327 644.4042)"><tspan x="0" y="0" class="st1 st2 st11">23.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 648.3615 700.9883)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 661.4398 645.4974)" class="st4 st5 st11">91</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 652.7262 636.7165)" class="st1 st2 st3">207.00</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 652.7913 655.3678)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(2.034678e-03 0.583 -0.583 2.034678e-03 654.8593 662.8088)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-92_ " ng-class="opalo.inmovablesClassList[91]" ng-click="opalo.showPropertyData(64, '92')">
                        <polyline id="G-L92_00000028299091597961854710000012669505410897489556_" class="property pb-sprite-1" points="595.7,602.1 634.7,602.1 
                            634.7,702 595.7,702 595.7,602.1 			"/>
                        <text transform="matrix(1 0 0 1 609.2731 607.6231)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 598.1442 644.4032)"><tspan x="0" y="0" class="st1 st2 st11">23.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 609.2731 700.9883)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 622.3536 645.3421)" class="st4 st5 st11">92</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 613.9154 636.7162)" class="st1 st2 st3">207.00</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 613.9805 655.3675)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(2.034678e-03 0.583 -0.583 2.034678e-03 616.0485 662.8085)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-93_ " ng-class="opalo.inmovablesClassList[92]" ng-click="opalo.showPropertyData(64, '93')">
                        <polyline id="G-L93_00000030457744971188437880000016119031179210914732_" class="property pb-sprite-2" points="556.6,602.1 595.7,602.1 
                            595.7,702 556.6,702 556.6,602.1 			"/>
                        <text transform="matrix(1 0 0 1 570.1838 607.6231)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 559.0568 644.4032)"><tspan x="0" y="0" class="st1 st2 st11">23.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 570.1828 700.9883)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 583.2664 645.1897)" class="st4 st5 st11">93</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 574.0895 636.7166)" class="st1 st2 st3">207.00</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 574.1545 655.3678)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(2.034678e-03 0.583 -0.583 2.034678e-03 576.2225 662.8089)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-94_ " ng-class="opalo.inmovablesClassList[93]" ng-click="opalo.showPropertyData(64, '94')">
                        <polyline id="G-L94_00000093159621068587536570000009376968303918912161_" class="property pb-sprite-1" points="517.5,602.1 556.6,602.1 
                            556.6,702 517.5,702 517.5,602.1 			"/>
                        <text transform="matrix(1 0 0 1 531.0944 607.6231)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 519.9698 644.4022)"><tspan x="0" y="0" class="st1 st2 st11">23.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 531.0944 700.9883)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 544.1782 645.0344)" class="st4 st5 st11">94</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 537.0224 636.0392)" class="st1 st2 st3">207.00</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 537.0875 654.6905)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(2.034678e-03 0.583 -0.583 2.034678e-03 539.1555 662.1316)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-95_ " ng-class="opalo.inmovablesClassList[94]" ng-click="opalo.showPropertyData(64, '95')">
                        <polyline id="G-L95_00000093859428271110604920000014303867547807604157_" class="property pb-sprite-2" points="478.4,602.1 517.5,602.1 
                            517.5,702 478.4,702 478.4,602.1 			"/>
                        <text transform="matrix(1 0 0 1 492.0085 607.6231)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 480.8818 644.4031)"><tspan x="0" y="0" class="st1 st2 st11">23.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 492.0066 700.9883)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 505.0925 644.8829)" class="st4 st5 st11">95</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 496.1818 636.0392)" class="st1 st2 st3">207.00</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 496.2469 654.6905)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(2.034678e-03 0.583 -0.583 2.034678e-03 498.3149 662.1315)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-96_ " ng-class="opalo.inmovablesClassList[95]" ng-click="opalo.showPropertyData(64, '96')">
                        <polyline id="G-L96_00000181064301183481135650000006008380150494609307_" class="property pb-sprite-1" points="439.3,602.1 478.4,602.1 
                            478.4,702 439.3,702 439.3,602.1 			"/>
                        <text transform="matrix(1 0 0 1 452.9182 607.6231)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 441.7924 644.403)"><tspan x="0" y="0" class="st1 st2 st11">23.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 452.9201 700.9883)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 466.0028 644.7296)" class="st4 st5 st11">96</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 457.3705 636.7245)" class="st1 st2 st3">207.00</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 457.4356 655.3757)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(2.034678e-03 0.583 -0.583 2.034678e-03 459.5036 662.8168)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-97_ " ng-class="opalo.inmovablesClassList[96]" ng-click="opalo.showPropertyData(64, '97')">
                        <polyline id="G-L97_00000014603572483167422720000012078191607246156685_" class="property pb-sprite-2" points="400.2,602.1 439.3,602.1 
                            439.3,702 400.2,702 400.2,602.1 			"/>
                        <text transform="matrix(1 0 0 1 413.8303 607.6231)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 402.7045 644.402)"><tspan x="0" y="0" class="st1 st2 st11">23.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 413.8283 700.9883)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 426.9152 644.5753)" class="st4 st5 st11">97</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 417.7986 636.0413)" class="st1 st2 st3">207.00</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 417.8636 654.6926)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(2.034678e-03 0.583 -0.583 2.034678e-03 419.9316 662.1336)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-98_ " ng-class="opalo.inmovablesClassList[97]" ng-click="opalo.showPropertyData(64, '98')">
                        <polyline id="G-L98_00000136392434512522924840000003475550650745900977_" class="property pb-sprite-1" points="361.1,602.1 400.2,602.1 
                            400.2,702 361.1,702 361.1,602.1 			"/>
                        <text transform="matrix(1 0 0 1 374.7409 607.6231)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 363.6161 644.402)"><tspan x="0" y="0" class="st1 st2 st11">23.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 374.7419 700.9883)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 387.8275 644.4219)" class="st4 st5 st11">98</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 379.4946 636.0412)" class="st1 st2 st3">207.00</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 379.5597 654.6924)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(2.034678e-03 0.583 -0.583 2.034678e-03 381.6277 662.1335)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-99_ " ng-class="opalo.inmovablesClassList[98]" ng-click="opalo.showPropertyData(64, '99')">
                        <polyline id="G-L99_00000044879657075758716930000013683726633424299691_" class="property pb-sprite-2" points="322,602.1 361.1,602.1 361.1,702 
                            322,702 322,602.1 			"/>
                        <text transform="matrix(1 0 0 1 335.6555 607.6231)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 324.5281 644.4019)"><tspan x="0" y="0" class="st1 st2 st11">23.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 335.6545 700.9883)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 348.7403 644.2685)" class="st4 st5 st11">99</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 339.4148 636.0405)" class="st1 st2 st3">207.00</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 339.4799 654.6917)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(2.034678e-03 0.583 -0.583 2.034678e-03 341.5479 662.1328)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-100_ " ng-class="opalo.inmovablesClassList[99]" ng-click="opalo.showPropertyData(64, '100')">
                        <polyline id="G-L100_00000161606478855906717380000010908778265887512751_" class="property pb-sprite-1" points="282.9,602.1 322,602.1 322,702 
                            282.9,702 282.9,602.1 			"/>
                        <text transform="matrix(1 0 0 1 296.5642 607.6231)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 285.4402 644.4019)"><tspan x="0" y="0" class="st1 st2 st11">23.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 296.5652 700.9883)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 309.6521 644.1161)" class="st4 st5 st11">100</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 302.4936 636.724)" class="st1 st2 st3">207.00</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 302.5587 655.3752)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(2.034678e-03 0.583 -0.583 2.034678e-03 304.6266 662.8163)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-101_ " ng-class="opalo.inmovablesClassList[100]" ng-click="opalo.showPropertyData(64, '101')">
                        <polyline id="G-L101_00000036939594899618400040000014341589121930792606_" class="property pb-sprite-2" points="243.9,602.1 282.9,602.1 
                            282.9,702 243.9,702 243.9,602.1 			"/>
                        <text transform="matrix(1 0 0 1 257.4778 607.6231)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 246.3537 644.4028)"><tspan x="0" y="0" class="st1 st2 st11">23.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 257.4768 700.9883)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 270.3099 644.8676)" class="st4 st5 st11">101</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 263.405 636.7266)" class="st1 st2 st3">207.00</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 263.4701 655.3779)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(2.034678e-03 0.583 -0.583 2.034678e-03 265.5381 662.819)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-102_ " ng-class="opalo.inmovablesClassList[101]" ng-click="opalo.showPropertyData(64, '102')">
                        <polyline id="G-L102_00000049197429976682673990000018111046615726091406_" class="property pb-sprite-1" points="204.8,602.1 243.9,602.1 
                            243.9,702 204.8,702 204.8,602.1 			"/>
                        <text transform="matrix(1 0 0 1 218.3889 607.6251)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 207.2686 644.4008)"><tspan x="0" y="0" class="st1 st2 st11">23.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 218.3899 700.9883)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 231.2881 644.7134)" class="st4 st5 st11">102</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 222.8188 636.7257)" class="st1 st2 st3">207.00</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 222.8839 655.377)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(2.034678e-03 0.583 -0.583 2.034678e-03 224.9519 662.818)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-103_ " ng-class="opalo.inmovablesClassList[102]" ng-click="opalo.showPropertyData(64, '103')">
                        <polyline id="G-L103_00000082358752773242819230000016647104177787438264_" class="property pb-sprite-2" points="165.7,602.1 204.8,602.1 
                            204.8,702 165.7,702 165.7,602.1 			"/>
                        <text transform="matrix(1 0 0 1 179.3034 607.6231)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 168.1244 643.0648)"><tspan x="0" y="0" class="st1 st2 st11">23.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 179.3044 700.9883)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 192.6027 646.5861)" class="st4 st5 st11">103</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 185.2278 636.0414)" class="st1 st2 st3">207.00</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 185.2929 654.6927)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(2.034678e-03 0.583 -0.583 2.034678e-03 187.3609 662.1338)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-104_ " ng-class="opalo.inmovablesClassList[103]" ng-click="opalo.showPropertyData(64, '104')">
                        <polyline id="G-L104_00000168116033846077868890000014786380092930140593_" class="property pb-sprite-1" points="126.6,602.1 165.7,602.1 
                            165.7,702 126.6,702 126.6,602.1 			"/>
                        <text transform="matrix(1 0 0 1 140.2185 607.6231)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 129.0282 643.0627)"><tspan x="0" y="0" class="st1 st2 st11">23.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 140.2175 700.9883)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 151.9771 646.5863)" class="st4 st5 st11">104</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 144.3876 637.8168)" class="st1 st2 st3">207.00</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 144.4527 656.4681)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(2.034678e-03 0.583 -0.583 2.034678e-03 146.5206 663.9091)" class="st1 st2 st3">2</text>
                    </g>
                    <g id="G-105_ " ng-class="opalo.inmovablesClassList[104]" ng-click="opalo.showPropertyData(64, '105')">
                        <polyline id="G-L105_00000129924952167801462050000014378060600952264624_" class="property pb-sprite-2" points="87.5,602.1 126.6,602.1 
                            126.6,702 87.5,702 87.5,602.1 			"/>
                        <text transform="matrix(1 0 0 1 101.1194 607.6251)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 90.1844 643.0621)"><tspan x="0" y="0" class="st1 st2 st11">23.0</tspan><tspan x="11.8" y="0" class="st1 st2 st11">0</tspan></text>
                        <text transform="matrix(1 0 0 1 101.1203 700.9903)"><tspan x="0" y="0" class="st1 st2 st3">9.0</tspan><tspan x="8.4" y="0" class="st1 st2 st3">0</tspan></text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 105.4328 636.7281)" class="st1 st2 st3">207.00</text>
                        <text transform="matrix(3.490014e-03 1 -1 3.490014e-03 105.4979 655.3794)" class="st1 st2 st3"> m</text>
                        <text transform="matrix(2.034678e-03 0.583 -0.583 2.034678e-03 107.5659 662.8204)" class="st1 st2 st3">2</text>
                        <text transform="matrix(-1.750015e-03 1 -1 -1.750015e-03 114.4341 646.8741)" class="st4 st5 st11">105</text>
                    </g>
                    <g id="LINEAS_DIVISORIAS_00000110465443918561458460000003483844037886907784_">
                        <g>
                            <line class="st12" x1="154.4" y1="522.6" x2="154.7" y2="522.6"/>
                            <line class="st12" x1="1199.6" y1="342.2" x2="1271.8" y2="390.6"/>
                            <line class="st12" x1="1177.9" y1="374.7" x2="1250" y2="423"/>
                            <line class="st12" x1="1156.1" y1="407.2" x2="1228.3" y2="455.5"/>
                            <line class="st12" x1="1134.4" y1="439.7" x2="1206.5" y2="488"/>
                            <line class="st12" x1="1112.6" y1="472.2" x2="1184.8" y2="520.5"/>
                            <line class="st12" x1="1090.9" y1="504.7" x2="1163.1" y2="553"/>
                            <line class="st12" x1="1069.1" y1="537.1" x2="1141.3" y2="585.5"/>
                            <line class="st12" x1="1047.4" y1="569.6" x2="1119.6" y2="617.9"/>
                            <line class="st12" x1="1025.6" y1="602.1" x2="1063.3" y2="702"/>
                            <g>
                                <line class="st12" x1="986.5" y1="602.1" x2="986.5" y2="702"/>
                                <line class="st12" x1="947.5" y1="602.1" x2="947.5" y2="702"/>
                                <line class="st12" x1="908.4" y1="602.1" x2="908.4" y2="702"/>
                                <line class="st12" x1="869.3" y1="602.1" x2="869.3" y2="702"/>
                                <line class="st12" x1="830.2" y1="602.1" x2="830.2" y2="702"/>
                                <line class="st12" x1="791.1" y1="602.1" x2="791.1" y2="702"/>
                                <line class="st12" x1="752" y1="602.1" x2="752" y2="702"/>
                                <line class="st12" x1="712.9" y1="602.1" x2="712.9" y2="702"/>
                                <line class="st12" x1="673.8" y1="602.1" x2="673.8" y2="702"/>
                                <line class="st12" x1="634.7" y1="602.1" x2="634.7" y2="702"/>
                                <line class="st12" x1="595.7" y1="602.1" x2="595.7" y2="702"/>
                                <line class="st12" x1="556.6" y1="602.1" x2="556.6" y2="702"/>
                                <line class="st12" x1="517.5" y1="602.1" x2="517.5" y2="702"/>
                                <line class="st12" x1="478.4" y1="602.1" x2="478.4" y2="702"/>
                                <line class="st12" x1="439.3" y1="602.1" x2="439.3" y2="702"/>
                                <line class="st12" x1="400.2" y1="602.1" x2="400.2" y2="702"/>
                                <line class="st12" x1="361.1" y1="602.1" x2="361.1" y2="702"/>
                                <line class="st12" x1="322" y1="602.1" x2="322" y2="702"/>
                                <line class="st12" x1="282.9" y1="602.1" x2="282.9" y2="702"/>
                                <line class="st12" x1="243.9" y1="602.1" x2="243.9" y2="702"/>
                                <line class="st12" x1="204.8" y1="602.1" x2="204.8" y2="702"/>
                                <line class="st12" x1="165.7" y1="702" x2="165.7" y2="602.1"/>
                                <line class="st12" x1="126.6" y1="602.1" x2="126.6" y2="702"/>
                                <line class="st12" x1="87.7" y1="602.1" x2="87.7" y2="702"/>
                            </g>
                        </g>
                    </g>
                </g>
            </g>
            <g id="COMPLEMENTO">
                <polyline class="st13" points="36.2,534.7 36.3,540.8 35.2,541.2 34.6,542.1 34.6,543.3 35.3,544.2 36.4,544.5 36.4,550.7 
                    30.9,542.7 36.2,534.7 	"/>
                <polyline class="st13" points="33.7,582.3 34.8,581.9 35.5,581 35.5,579.9 34.8,579 33.8,578.6 33.8,572.4 39.2,580.5 33.7,588.5 
                    33.7,582.3 	"/>
                <polyline class="st13" points="66.5,556 66.5,569 48.9,569 48.9,556 48.9,556 66.5,556 66.5,556 	"/>
                <text transform="matrix(-1.396004e-02 0.9999 -0.9999 -1.396004e-02 42.6797 571.6558)" class="st14 st5 st15">ENTRADA</text>
                <text transform="matrix(6.979970e-03 1 -1 6.979970e-03 41.8858 534.6555)" class="st14 st5 st15">SALIDA</text>
                <path class="st16" d="M26.6,522.6c-2.3-33-5.5-67.5-9.8-103.2c-4.6-38.7-10.1-75.6-16.2-110.8c289.3,0.1,578.5,0.2,867.8,0.2
                    l-0.9-109.1l133.1-198l364.5,244l-28.2,47.3l-22.1,33.8c-83.8,125.4-167.7,250.8-251.5,376.2c-344.7,0-689.4,0-1034.1,0
                    c0.2-33.4,0.5-66.7,0.7-100.1"/>
            </g>
            </svg>

        


    </div>

</body>
</html>