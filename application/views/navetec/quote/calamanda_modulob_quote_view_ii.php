<!DOCTYPE html>
<html lang="es_MX">

<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contet="ie=edge">
	<meta name="author" content="Ing. Saúl Fernando Torres Hernández">
	<meta name="description" content="Grúpo CCIMA S.A. de C.V." />
	<meta name="keywords"
		content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

	<title>Grupo CCIMA</title>

	<script type="text/javascript" src="media/assets/js/analytics.js"></script>

	<link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/navetec.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
	<script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body ng-controller="NvtCalamandaDosQuoteCtrl as nvtCalamanda">


	<!--Menu actualizado 19-DIC-2022 -->
	<md-sidenav class="cc-sidenav md-sidenav-left md-whiteframe-4dp" md-component-id="left">
		<md-toolbar class="md-hue-2">
			<h1 class="md-toolbar-tools">BUSINESS PARK</h1>
		</md-toolbar>
		<a href="#!/Navetec-Aeropuerto_Business_Park" ng-click="close()">
			<div class="link-body link-nav">
				Aeropuerto Business Park
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/Navetec-Beta_Business_Park" ng-click="close()">
			<div class="link-body link-nav">
				Beta Business Park
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/Navetec-Calamanda_Business_Park" ng-click="close()">
			<div class="link-body link-nav">
				Calamanda Business Park
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/Navetec-Celta_Business_Park" ng-click="close()">
			<div class="link-body link-nav">
				Celta Business Park
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/Navetec-Gamma_Business_Park" ng-click="close()">
			<div class="link-body link-nav">
				Gamma I Business Park
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/Navetec-Gamma_II_Business_Park" ng-click="close()">
			<div class="link-body link-nav">
				Gamma II Business Park
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/Navetec-Pedro_Escobedo_Business_Park" ng-click="close()">
			<div class="link-body link-nav">
				Pedro Escobedo Business Park
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/Navetec-Santa_Rosa_Business_Park" ng-click="close()">
			<div class="link-body link-nav">
				Santa Rosa Business Park
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/Navetec-Sur_57_Business_Park" ng-click="close()">
			<div class="link-body link-nav">
				Sur 57 Business Park
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
	<!--Menu Fin 19-DIC-2022 -->

	<div ng-controller="sideNavCtrl" class="navbar-fixed">
		<nav class="cc-nav white" role="navigation">
			<div class="nav-wrapper">
				<div class="container">
					<ul>
						<li><a href="#!/Navetec" class="nav-logo"><img
									src="media/assets/img/logos/logo-navetec.svg"></a></li>
						<li class="right">
							<md-button class="md-icon-button md-noink" ng-click="toggleLeft()">
								<svg viewBox="0 0 24 24" width="24">
									<path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path>
								</svg>
							</md-button>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>

	<div class="modal-dialog" ng-class="nvtCalamanda.dialogDisplay">
		<div class="backdrop-dialog" ng-click="nvtCalamanda.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="nvtCalamanda.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

				<div class="divider"></div>

				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Navetec Business Park {{nvtCalamanda.propertyData.condominium}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Local Comercial</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">{{nvtCalamanda.propertyData.type}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{nvtCalamanda.propertyData.number}}</h6>
					</div>
					<!-- <div class="p-5">
    <h6 class="futura-light">Dimenciones: {{nvtCalamanda.propertyData.dimensions}}</h6>
  </div> -->
					<div class="p-5">
						<h6 class="futura-light">Área de {{nvtCalamanda.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; de ${{nvtCalamanda.propertyData.cost_m2}} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text">Precio de ${{nvtCalamanda.propertyData.total}} MXN +IVA<span
								style="color: #857C82; font-size: 12px;"></span></h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light blue-text">Pregunta por nuestras promociones del mes</h6>
					</div>
				</div>


				<div class="divider"></div>

				<!--<div class="py-20 ">-->
				<!--  <h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>-->
				<!--</div>-->

				<!-- <div class="divider"></div>

<div class="p-20">
  <h6 class="deep-purple-text futura-light">{{nvtCalamanda.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
  <h6 class="green-text futura-light">Precio de ${{nvtCalamanda.propertyData.totalPlan1}} MXN <span style="color: #857C82; font-size: 12px;">+ I.V.A.</span></h6>
  <p class="promo__description grey-text">¡Oferta limitada!</p>
</div>

<div class="divider"></div>

<div class="p-20">
  <h6 class="deep-purple-text futura-light">{{nvtCalamanda.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 10 años</h6>
  <h6 class="green-text futura-light">Precio de ${{nvtCalamanda.propertyData.totalPlan2}} MXN</h6>
  <p class="promo__description grey-text">¡Oferta limitada!</p>
</div> -->

				<!--<div class="divider"></div>-->

				<!--<div class="p-20">-->
				<!--  <h6 class="deep-purple-text futura-light">10% de descuento sobre le monto de enganche</h6>-->
				<!--  <p class="promo__description grey-text">*Pagando el 100% de enganche</p>-->
				<!--  <p class="promo__description grey-text">*Valido hasta {{nvtCalamanda.month + ' ' + nvtCalamanda.year}}</p>-->
				<!--</div>-->

				<div class="divider"></div>

				<div class="p-20">
					<h6 class="deep-purple-text futura-light">Compra en Enero y paga la primera mensualidad hasta
						Febrero</h6>
					<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
					<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en
						Enero del 2023</p>
				</div>

				<div class="divider"></div>

				<div class="p-20">
					<p class="blue-text futura-book">¡Apártalo ahora!</p>
					<p class="green-text">Con tan solo $20,000.00</p>
					<button class="btn blue-bg no__shadow futura-bold">Apártar ahora</button>
				</div>

			</div>
		</div>

		<div class="divider"></div>
		<div class="option-menu-dialog" ng-controller="ContactMenuCtrl as contactCtrl">
			<md-menu class="right mr-20 mt-10" md-offset="0 -60">
				<button aria-label="Abrir Menu de Contacto" class="btn blue-bg no__shadow futura-demi"
					ng-click="contactCtrl.openMenu($mdMenu, $event)">
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
					<h2 class="center-align futura-med">Locales Comerciales Modulo A </h2>
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

		<div class="" style="margin: 0 16px;">
		<svg id="CLUSTER_ETAPA_CONDO" data-name="CLUSTER / ETAPA / CONDO" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1366 865">
        <defs>
          <style>
            .cls-1,
            .cls-2,
            .cls-3,
            .cls-4 {
              fill-rule: evenodd;
            }

            .cls-1,
            .cls-2,
            .cls-3,
            .cls-4,
            .cls-5,
            .cls-6 {
              stroke-width: 0px;
            }

            .cls-1,
            .cls-5 {
              fill: #002856;
            }

            .cls-7 {
              font-size: 11.4px;
              letter-spacing: 0em;
            }

            .cls-7,
            .cls-8,
            .cls-9,
            .cls-10,
            .cls-11,
            .cls-12,
            .cls-13,
            .cls-14,
            .cls-15,
            .cls-16,
            .cls-17,
            .cls-18,
            .cls-19,
            .cls-20,
            .cls-21,
            .cls-22,
            .cls-23,
            .cls-24,
            .cls-25 {
              fill: #fff;
            }

            .cls-7,
            .cls-8,
            .cls-9,
            .cls-10,
            .cls-11,
            .cls-12,
            .cls-13,
            .cls-14,
            .cls-15,
            .cls-16,
            .cls-17,
            .cls-18,
            .cls-19,
            .cls-20,
            .cls-21,
            .cls-24,
            .cls-25 {
              font-family: CenturyGothic, 'Century Gothic';
            }

            .cls-2 {
              opacity: .5;
            }

            .cls-2,
            .cls-26,
            .cls-4,
            .cls-27,
            .cls-28,
            .cls-29,
            .cls-30 {
              fill: #ffbf00;
            }

            .cls-8 {
              letter-spacing: 0em;
            }

            .cls-8,
            .cls-19 {
              font-size: 11.6px;
            }

            .cls-9 {
              font-size: 11.4px;
            }

            .cls-10 {
              font-size: 11.6px;
            }

            .cls-3 {
              fill: #0047ba;
            }

            .cls-31 {
              letter-spacing: 0em;
            }

            .cls-11 {
              font-size: 11.4px;
              letter-spacing: 0em;
            }

            .cls-12 {
              letter-spacing: 0em;
            }

            .cls-12,
            .cls-15 {
              font-size: 11.4px;
            }

            .cls-13 {
              font-size: 11.6px;
              letter-spacing: 0em;
            }

            .cls-26 {
              font-size: 13.6px;
            }

            .cls-26,
            .cls-27,
            .cls-32,
            .cls-28,
            .cls-22,
            .cls-23,
            .cls-29,
            .cls-30,
            .cls-33 {
              font-family: CenturyGothic-Bold, 'Century Gothic';
              font-weight: 700;
            }

            .cls-14 {
              letter-spacing: 0em;
            }

            .cls-14,
            .cls-17 {
              font-size: 11.4px;
            }

            .cls-34 {
              letter-spacing: 0em;
            }

            .cls-35 {
              letter-spacing: 0em;
            }

            .cls-15 {
              letter-spacing: 0em;
            }

            .cls-16 {
              font-size: 11.4px;
              letter-spacing: 0em;
            }

            .cls-27 {
              font-size: 12.2px;
            }

            .cls-17 {
              letter-spacing: 0em;
            }

            .cls-18 {
              font-size: 11.4px;
              letter-spacing: 0em;
            }

            .cls-32 {
              font-size: 13.9px;
            }

            .cls-32,
            .cls-33,
            .cls-6 {
              fill: #1c2044;
            }

            .cls-19 {
              letter-spacing: 0em;
            }

            .cls-28 {
              font-size: 9.8px;
            }
            
            .stc10 {
						fill: #002856;
					  }
            .cls-20 {
              font-size: 11.6px;
              letter-spacing: 0em;
            }

            .cls-36 {
              fill: none;
              stroke: #fff;
              stroke-linecap: round;
              stroke-linejoin: round;
              stroke-width: 1.2px;
            }

            .cls-21 {
              font-size: 11.4px;
              letter-spacing: 0em;
            }

            .cls-22 {
              font-size: 34.2px;
            }

            .cls-23 {
              font-size: 32.9px;
            }

            .cls-29 {
              font-size: 13.3px;
            }

            .cls-24 {
              font-size: 11.6px;
              letter-spacing: 0em;
            }

            .cls-30 {
              font-size: 12px;
            }

            .cls-25 {
              font-size: 11.4px;
              letter-spacing: 0em;
            }

            .cls-33 {
              font-size: 14px;
            }

            .stc13 {
						fill: #FFFFFF;
					}

          .stc19 {
						font-family: 'CenturyGothic-Bold';
					}

          .stc38 {
						font-size: 36.0618px;
					}
          </style>
        </defs>
        <g id="BASE">
          <image width="1366" height="865"
            xlink:href="media/assets/img/navetec/app/calamanda/calamanda_locales_2.jpg" />
        </g>
        <g id="CLUSTER">
          <g id="LOCALES_COMERCIALES" data-name="LOCALES COMERCIALES">
            <g id="LINEAS_DIVISORIAS_LOCALES_COMERCIALES" data-name="LINEAS DIVISORIAS LOCALES COMERCIALES">
              <g>
                <text />
                <line class="cls-36" x1="166.4" y1="152.7" x2="165.8" y2="6.5" />
                <line class="cls-36" x1="86.8" y1="152.9" x2="86.2" y2="6.7" />
                <line class="cls-36" x1="246.3" y1="152.6" x2="245.8" y2="6.4" />
                <line class="cls-36" x1="326.3" y1="152.4" x2="325.7" y2="6.2" />
                <line class="cls-36" x1="406.5" y1="152.3" x2="405.9" y2="6.1" />
                <line class="cls-36" x1="487.7" y1="152.2" x2="487.1" y2="5.9" />
                <line class="cls-36" x1="873.9" y1="1.7" x2="874.2" y2="151.4" />
                <line class="cls-36" x1="953.9" y1="1.3" x2="954.2" y2="151.3" />
                <line class="cls-36" x1="1032.9" y1=".9" x2="1033.2" y2="151.2" />
                <line class="cls-36" x1="1112" y1=".5" x2="1112.2" y2="151" />
                <line class="cls-36" x1="1192" y1="0" x2="1192.2" y2="150.9" />
              </g>
              <g>
                <text />
                <line class="cls-36" x1="485.3" y1="630.1" x2="485.4" y2="481.4" />
                <line class="cls-36" x1="1188.7" y1="630.4" x2="1188.8" y2="477.1" />
                <line class="cls-36" x1="83" y1="481.2" x2="83.4" y2="629.9" />
                <line class="cls-36" x1="163.1" y1="481.3" x2="163.5" y2="629.9" />
                <line class="cls-36" x1="243" y1="481.3" x2="243.4" y2="630" />
                <line class="cls-36" x1="322.8" y1="481.3" x2="323.3" y2="630" />
                <line class="cls-36" x1="403.3" y1="481.4" x2="403.7" y2="630" />
                <line class="cls-36" x1="870.9" y1="478" x2="870.9" y2="630.3" />
                <line class="cls-36" x1="950.9" y1="477.8" x2="950.8" y2="630.3" />
                <line class="cls-36" x1="1029.9" y1="477.5" x2="1029.8" y2="630.3" />
                <line class="cls-36" x1="1108.8" y1="477.3" x2="1108.7" y2="630.4" />
              </g>
            </g>
            <g id="L-01" ng-class="nvtCalamanda.inmovablesClassList[36]"
              ng-click="nvtCalamanda.showPropertyData(71, '1', nvtCalamanda.inmovables[36].idProperty)">
              <polyline id="LC-01" class="property nvt-sprite-1" points="4.6 6.8 86.2 6.7 86.8 152.9 5.1 153 4.6 6.8" />
              <text class="cls-29" transform="translate(24 61.1) rotate(-.4)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-29" transform="translate(38.2 76.4) rotate(-.4)">
                <tspan x="0" y="0">01</tspan>
              </text>
              <text class="cls-15" transform="translate(33.2 20.3) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.20</tspan>
              </text>
              <text class="cls-25" transform="translate(16 103) rotate(-90.1) skewX(-.3)">
                <tspan x="0" y="0">11.10</tspan>
              </text>
              <g id="A-01">
                <text class="cls-9" transform="translate(22.6 101)">
                  <tspan class="cls-34" x="0" y="0">6</tspan>
                  <tspan x="6.3" y="0">8.84 m2</tspan>
                </text>
              </g>
              <text class="cls-12" transform="translate(32.5 145.8) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.19</tspan>
              </text>
            </g>
            <g id="L-02" ng-class="nvtCalamanda.inmovablesClassList[37]"
              ng-click="nvtCalamanda.showPropertyData(71, '2', nvtCalamanda.inmovables[37].idProperty)">
              <g id="L-02-2" data-name="L-02">
                <polyline id="LC-02" class="property nvt-sprite-2"
                  points="86.2 6.7 165.8 6.5 166.4 152.7 86.8 152.9 86.2 6.7" />
                <text class="cls-29" transform="translate(105.8 61.1) rotate(-.4)">
                  <tspan x="0" y="0">LOCAL</tspan>
                </text>
                <text class="cls-15" transform="translate(113.3 20.3) rotate(.3) skewX(.3)">
                  <tspan x="0" y="0">6.05</tspan>
                </text>
                <text class="cls-25" transform="translate(98.2 103.3) rotate(-90.1) skewX(-.3)">
                  <tspan x="0" y="0">11.10</tspan>
                </text>
                <text class="cls-15" transform="translate(112.6 145.8) rotate(.3) skewX(.3)">
                  <tspan x="0" y="0">6.08</tspan>
                </text>
                <text class="cls-9" transform="translate(105.1 101.3)">
                  <tspan class="cls-35" x="0" y="0">67.13 </tspan>
                  <tspan x="31.6" y="0">m2</tspan>
                </text>
              </g>
              <text class="cls-29" transform="translate(119.9 76.4) rotate(-.4)">
                <tspan x="0" y="0">02</tspan>
              </text>
            </g>
            <g id="L-03" ng-class="nvtCalamanda.inmovablesClassList[38]"
              ng-click="nvtCalamanda.showPropertyData(71, '3', nvtCalamanda.inmovables[38].idProperty)">
              <polyline class="property nvt-sprite-1" points="165.8 6.5 245.8 6.4 246.3 152.6 166.4 152.7 165.8 6.5" />
              <text class="cls-29" transform="translate(184.4 61.1) rotate(-.4)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-29" transform="translate(198.6 76.4) rotate(-.4)">
                <tspan x="0" y="0">03</tspan>
              </text>
              <text class="cls-12" transform="translate(195.1 21) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.07</tspan>
              </text>
              <text class="cls-25" transform="translate(176.7 103.7) rotate(-90.1) skewX(-.3)">
                <tspan x="0" y="0">11.10</tspan>
              </text>
              <text class="cls-12" transform="translate(194.4 146.4) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.07</tspan>
              </text>
              <text class="cls-9" transform="translate(183.6 101.3)">
                <tspan class="cls-34" x="0" y="0">67.40 </tspan>
                <tspan x="31.6" y="0">m2</tspan>
              </text>
            </g>
            <g id="L-04" ng-class="nvtCalamanda.inmovablesClassList[39]"
              ng-click="nvtCalamanda.showPropertyData(71, '4', nvtCalamanda.inmovables[39].idProperty)">
              <polyline class="property nvt-sprite-2" points="245.8 6.4 325.7 6.2 326.3 152.5 246.3 152.6 245.8 6.4" />
              <text class="cls-29" transform="translate(260.1 61.1) rotate(-.4)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-29" transform="translate(274.3 76.4) rotate(-.4)">
                <tspan x="0" y="0">04</tspan>
              </text>
              <text class="cls-15" transform="translate(276.1 21) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.07</tspan>
              </text>
              <text class="cls-25" transform="translate(256.5 102.7) rotate(-90.1) skewX(-.3)">
                <tspan x="0" y="0">11.10</tspan>
              </text>
              <text class="cls-12" transform="translate(275.4 146.4) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.07</tspan>
              </text>
              <text class="cls-9" transform="translate(264.4 101.3)">
                <tspan class="cls-35" x="0" y="0">67.40</tspan>
                <tspan x="28.4" y="0">m2</tspan>
              </text>
            </g>
            <g id="L-05" ng-class="nvtCalamanda.inmovablesClassList[40]"
              ng-click="nvtCalamanda.showPropertyData(71, '5', nvtCalamanda.inmovables[40].idProperty)">
              <polyline class="property nvt-sprite-1" points="325.7 6.2 405.9 6.1 406.5 152.3 326.3 152.5 325.7 6.2" />
              <text class="cls-12" transform="translate(354 21) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.09</tspan>
              </text>
              <text class="cls-25" transform="translate(336.7 98.8) rotate(-90.1) skewX(-.3)">
                <tspan x="0" y="0">11.10</tspan>
              </text>
              <text class="cls-29" transform="translate(344.8 61.1) rotate(-.4)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-29" transform="translate(358.9 76.4) rotate(-.4)">
                <tspan x="0" y="0">05</tspan>
              </text>
              <text class="cls-15" transform="translate(353.3 146.4) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.09</tspan>
              </text>
              <text class="cls-9" transform="translate(346.8 101)">
                <tspan x="0" y="0">67.62 m2</tspan>
              </text>
              <g>
                <polyline class="cls-2" points="363.2 111.6 370.1 118.6 363.2 125.5 363.2 111.6" />
                <polyline class="cls-4" points="363.2 111.6 363.2 125.5 356.2 118.6 363.2 111.6" />
              </g>
            </g>
            <g id="L-06" ng-class="nvtCalamanda.inmovablesClassList[41]"
              ng-click="nvtCalamanda.showPropertyData(71, '6', nvtCalamanda.inmovables[41].idProperty)">
              <polyline id="LC-06" class="property nvt-sprite-2"
                points="405.9 6.1 487.1 5.9 487.7 152.2 406.5 152.3 405.9 6.1" />
              <text class="cls-15" transform="translate(437.1 21.3) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.17</tspan>
              </text>
              <text class="cls-25" transform="translate(416.9 96.4) rotate(-90.1) skewX(-.3)">
                <tspan x="0" y="0">11.10</tspan>
              </text>
              <text class="cls-29" transform="translate(429.5 61.1) rotate(-.4)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-29" transform="translate(443.6 76.4) rotate(-.4)">
                <tspan x="0" y="0">06</tspan>
              </text>
              <text class="cls-15" transform="translate(436.4 146.8) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.08</tspan>
              </text>
              <text class="cls-9" transform="translate(426.9 101.3)">
                <tspan class="cls-34" x="0" y="0">6</tspan>
                <tspan x="6.3" y="0">8.50 m2</tspan>
              </text>
              <g>
                <polyline class="cls-2" points="449.3 111.6 456.2 118.6 449.3 125.5 449.3 111.6" />
                <polyline class="cls-4" points="449.3 111.6 449.3 125.5 442.4 118.6 449.3 111.6" />
              </g>
            </g>
            <g id="L-07" ng-class="nvtCalamanda.inmovablesClassList[42]"
              ng-click="nvtCalamanda.showPropertyData(71, '7', nvtCalamanda.inmovables[42].idProperty)">
              <polyline id="LC-07" class="property nvt-sprite-1"
                points="954.2 151.3 874.2 151.4 873.9 1.7 953.9 1.3 954.2 151.3" />
              <text class="cls-17" transform="translate(887.2 88.1) rotate(-90) skewX(-.3)">
                <tspan x="0" y="0">11.37</tspan>
              </text>
              <text class="cls-17" transform="translate(901.8 14.8) rotate(0) skewX(.3)">
                <tspan x="0" y="0">6.08</tspan>
              </text>
              <text class="cls-29" transform="translate(892.4 53.4) rotate(-.4)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-29" transform="translate(906.6 68.7) rotate(-.4)">
                <tspan x="0" y="0">07</tspan>
              </text>
              <text class="cls-17" transform="translate(899.8 141.2) rotate(0) skewX(.3)">
                <tspan x="0" y="0">6.00</tspan>
              </text>
              <text class="cls-9" transform="translate(892.6 95.4)">
                <tspan class="cls-34" x="0" y="0">69.16 </tspan>
                <tspan x="31.6" y="0">m2</tspan>
              </text>
              <g>
                <polyline class="cls-2" points="911.8 105.6 918.7 112.5 911.8 119.5 911.8 105.6" />
                <polyline class="cls-4" points="911.8 105.6 911.8 119.5 904.9 112.5 911.8 105.6" />
              </g>
            </g>
            <g id="L-08" ng-class="nvtCalamanda.inmovablesClassList[43]"
              ng-click="nvtCalamanda.showPropertyData(71, '8', nvtCalamanda.inmovables[43].idProperty)">
              <polyline id="LC-08" class="property nvt-sprite-2"
                points="954.2 151.3 953.9 1.3 1032.9 .9 1033.2 151.2 954.2 151.3" />
              <g>
                <text class="cls-17" transform="translate(965.7 88.1) rotate(-90) skewX(-.3)">
                  <tspan x="0" y="0">11.37</tspan>
                </text>
                <text class="cls-17" transform="translate(983.7 14.9) rotate(0) skewX(.3)">
                  <tspan x="0" y="0">6.00</tspan>
                </text>
                <text class="cls-29" transform="translate(972.7 52.7) rotate(-.4)">
                  <tspan x="0" y="0">LOCAL</tspan>
                </text>
                <text class="cls-30" transform="translate(987.1 69) rotate(2.5) scale(1 1) skewX(5.8)">
                  <tspan x="0" y="0">08</tspan>
                </text>
                <text class="cls-17" transform="translate(981.7 141.3) rotate(0) skewX(.3)">
                  <tspan x="0" y="0">6.00</tspan>
                </text>
                <text class="cls-9" transform="translate(971.9 94.5)">
                  <tspan class="cls-35" x="0" y="0">6</tspan>
                  <tspan x="6.3" y="0">8.43 m2</tspan>
                </text>
                <g>
                  <polyline class="cls-2" points="993.4 105.6 1000.3 112.5 993.4 119.5 993.4 105.6" />
                  <polyline class="cls-4" points="993.4 105.6 993.4 119.5 986.4 112.5 993.4 105.6" />
                </g>
              </g>
            </g>
            <g id="L-09" ng-class="nvtCalamanda.inmovablesClassList[44]"
              ng-click="nvtCalamanda.showPropertyData(71, '9', nvtCalamanda.inmovables[44].idProperty)">
              <polyline id="LC-09" class="property nvt-sprite-1"
                points="1112.2 151 1033.2 151.2 1032.9 .9 1112 .5 1112.2 151" />
              <text class="cls-17" transform="translate(1043 85.6) rotate(-90) skewX(-.3)">
                <tspan x="0" y="0">11.39</tspan>
              </text>
              <text class="cls-14" transform="translate(1065.1 14.9) rotate(0) skewX(.3)">
                <tspan x="0" y="0">6.00</tspan>
              </text>
              <text class="cls-29" transform="translate(1050.3 53.4) rotate(-.4)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-29" transform="translate(1064.4 68.7) rotate(-.4)">
                <tspan x="0" y="0">09</tspan>
              </text>
              <text class="cls-17" transform="translate(1063 141.4) rotate(0) skewX(.3)">
                <tspan x="0" y="0">6.00</tspan>
              </text>
              <text class="cls-9" transform="translate(1048.1 95.4)">
                <tspan class="cls-34" x="0" y="0">6</tspan>
                <tspan x="6.3" y="0">8.55 m2</tspan>
              </text>
            </g>
            <g id="L-10" ng-class="nvtCalamanda.inmovablesClassList[45]"
              ng-click="nvtCalamanda.showPropertyData(71, '10', nvtCalamanda.inmovables[45].idProperty)">
              <polyline id="LC-10" class="property nvt-sprite-2"
                points="1112.2 151 1112 .5 1191 0 1191.3 150.9 1112.2 151" />
              <text class="cls-17" transform="translate(1123.2 85.5) rotate(-90) skewX(-.3)">
                <tspan x="0" y="0">11.41</tspan>
              </text>
              <text class="cls-17" transform="translate(1189.1 88.1) rotate(-90) skewX(-.3)">
                <tspan x="0" y="0">11.43</tspan>
              </text>
              <text class="cls-14" transform="translate(1147 15) rotate(0) skewX(.3)">
                <tspan x="0" y="0">6.08</tspan>
              </text>
              <text class="cls-29" transform="translate(1130.5 53.4) rotate(-.4)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-29" transform="translate(1144.6 68.7) rotate(-.4)">
                <tspan x="0" y="0">10</tspan>
              </text>
              <text class="cls-14" transform="translate(1144.9 141.5) rotate(0) skewX(.3)">
                <tspan x="0" y="0">6.00</tspan>
              </text>
              <text class="cls-9" transform="translate(1129.3 96.4)">
                <tspan class="cls-34" x="0" y="0">6</tspan>
                <tspan x="6.3" y="0">8.67 m2</tspan>
              </text>
            </g>
            <g id="L-11" ng-class="nvtCalamanda.inmovablesClassList[46]"
              ng-click="nvtCalamanda.showPropertyData(71, '11', nvtCalamanda.inmovables[46].idProperty)">
              <polyline id="LC-11" class="property nvt-sprite-1"
                points="2.1 481.2 83 481.2 83.4 629.9 2.4 629.9 2.1 481.2" />
              <text class="cls-20" transform="translate(26.1 498.3) rotate(.7) skewX(0)">
                <tspan x="0" y="0">6.14</tspan>
              </text>
              <text class="cls-7" transform="translate(12 569.2) rotate(-89.5) scale(1 1) skewX(0)">
                <tspan x="0" y="0">11.10</tspan>
              </text>
              <text class="cls-26" transform="translate(21.1 531.5) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-26" transform="translate(35.3 547.1) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">11</tspan>
              </text>
              <text class="cls-10" transform="translate(19.7 572.2) scale(1 1)">
                <tspan class="cls-31" x="0" y="0">6</tspan>
                <tspan x="6.4" y="0">8.28 m2</tspan>
              </text>
              <text class="cls-19" transform="translate(29.6 617.6) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.16</tspan>
              </text>
            </g>
            <g id="L-12" ng-class="nvtCalamanda.inmovablesClassList[47]"
              ng-click="nvtCalamanda.showPropertyData(71, '12', nvtCalamanda.inmovables[47].idProperty)">
              <polyline id="LC-12" class="property nvt-sprite-2"
                points="83 481.2 163.1 481.3 163.5 629.9 83.4 629.9 83 481.2" />
              <text class="cls-20" transform="translate(108.9 499.2) rotate(.7) skewX(0)">
                <tspan x="0" y="0">6.09</tspan>
              </text>
              <text class="cls-18" transform="translate(95.7 570.3) rotate(-89.6) scale(1 1) skewX(0)">
                <tspan x="0" y="0">11.10</tspan>
              </text>
              <text class="cls-26" transform="translate(102.8 531.5) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-26" transform="translate(116.9 547.1) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">12</tspan>
              </text>
              <text class="cls-8" transform="translate(109.6 617.6) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.09</tspan>
              </text>
              <text class="cls-10" transform="translate(102.1 572.5) scale(1 1)">
                <tspan class="cls-31" x="0" y="0">67.59 </tspan>
                <tspan x="32.1" y="0">m2</tspan>
              </text>
            </g>
            <g id="L-13" ng-class="nvtCalamanda.inmovablesClassList[48]"
              ng-click="nvtCalamanda.showPropertyData(71, '13', nvtCalamanda.inmovables[48].idProperty)">
              <polyline id="LC-13" class="property nvt-sprite-1"
                points="163.1 481.3 243 481.3 243.4 630 163.5 629.9 163.1 481.3" />
              <text class="cls-20" transform="translate(191.2 500.1) rotate(.7) skewX(0)">
                <tspan x="0" y="0">6.07</tspan>
              </text>
              <text class="cls-18" transform="translate(174.2 572.1) rotate(-89.6) scale(1 1) skewX(0)">
                <tspan x="0" y="0">11.10</tspan>
              </text>
              <text class="cls-26" transform="translate(181.4 531.5) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-26" transform="translate(195.5 547.1) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">13</tspan>
              </text>
              <text class="cls-19" transform="translate(191.4 618.3) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.07</tspan>
              </text>
              <text class="cls-10" transform="translate(180.6 572.5) scale(1 1)">
                <tspan class="cls-31" x="0" y="0">67.42</tspan>
                <tspan x="28.9" y="0">m2</tspan>
              </text>
            </g>
            <g id="L-14" ng-class="nvtCalamanda.inmovablesClassList[49]"
              ng-click="nvtCalamanda.showPropertyData(71, '14', nvtCalamanda.inmovables[49].idProperty)">
              <polyline id="LC-14" class="property nvt-sprite-2"
                points="243 481.3 322.8 481.3 323.3 630 243.4 630 243 481.3" />
              <text class="cls-20" transform="translate(273.5 500.9) rotate(.7) skewX(0)">
                <tspan x="0" y="0">6.07</tspan>
              </text>
              <text class="cls-18" transform="translate(253.9 572) rotate(-89.6) scale(1 1) skewX(0)">
                <tspan x="0" y="0">11.10</tspan>
              </text>
              <text class="cls-26" transform="translate(257 531.5) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-26" transform="translate(271.2 547.1) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">14</tspan>
              </text>
              <text class="cls-8" transform="translate(272.3 618.3) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.07</tspan>
              </text>
              <text class="cls-10" transform="translate(261.3 572.5) scale(1 1)">
                <tspan class="cls-31" x="0" y="0">67.40</tspan>
                <tspan x="28.9" y="0">m2</tspan>
              </text>
            </g>
            <g id="L-15" ng-class="nvtCalamanda.inmovablesClassList[50]"
              ng-click="nvtCalamanda.showPropertyData(71, '15', nvtCalamanda.inmovables[50].idProperty)">
              <polyline id="LC-15" class="property nvt-sprite-1"
                points="322.8 481.3 403.3 481.4 403.7 630 323.3 630 322.8 481.3" />
              <text class="cls-20" transform="translate(356 501.8) rotate(.7) skewX(0)">
                <tspan x="0" y="0">6.11</tspan>
              </text>
              <text class="cls-18" transform="translate(334 574.1) rotate(-89.6) scale(1 1) skewX(0)">
                <tspan x="0" y="0">11.10</tspan>
              </text>
              <text class="cls-26" transform="translate(341.6 531.5) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-26" transform="translate(355.7 547.1) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">15</tspan>
              </text>
              <text class="cls-19" transform="translate(350.1 618.3) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.11</tspan>
              </text>
              <text class="cls-10" transform="translate(343.7 572.2) scale(1 1)">
                <tspan x="0" y="0">67.84 m2</tspan>
              </text>
              <g>
                <polyline class="cls-2" points="365.2 588.2 372.1 595.2 365.2 602.3 365.2 588.2" />
                <polyline class="cls-4" points="365.2 588.2 365.2 602.3 358.2 595.2 365.2 588.2" />
              </g>
            </g>
            <g id="L-16" ng-class="nvtCalamanda.inmovablesClassList[51]"
              ng-click="nvtCalamanda.showPropertyData(71, '16', nvtCalamanda.inmovables[51].idProperty)">
              <polyline id="LC-16" class="property nvt-sprite-2"
                points="403.7 630 403.3 481.4 485.4 481.4 485.3 630.1 403.7 630" />
              <text class="cls-20" transform="translate(439.6 502.7) rotate(.7) skewX(0)">
                <tspan x="0" y="0">6.24</tspan>
              </text>
              <text class="cls-18" transform="translate(414.2 574.1) rotate(-89.6) scale(1 1) skewX(0)">
                <tspan x="0" y="0">11.10</tspan>
              </text>
              <text class="cls-26" transform="translate(426.2 531.5) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-26" transform="translate(440.4 547.1) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">16</tspan>
              </text>
              <text class="cls-8" transform="translate(433.2 618.6) rotate(.3) skewX(.3)">
                <tspan x="0" y="0">6.13</tspan>
              </text>
              <text class="cls-10" transform="translate(423.7 572.5) scale(1 1)">
                <tspan class="cls-31" x="0" y="0">6</tspan>
                <tspan x="6.4" y="0">9.07m2</tspan>
              </text>
              <polyline class="cls-2" points="447.2 588.2 454.1 595.2 447.2 602.3 447.2 588.2" />
              <polyline class="cls-4" points="447.2 588.2 447.2 602.3 440.3 595.2 447.2 588.2" />
            </g>
            <g id="L-17" ng-class="nvtCalamanda.inmovablesClassList[52]"
              ng-click="nvtCalamanda.showPropertyData(71, '17', nvtCalamanda.inmovables[52].idProperty)">
              <polyline id="LC-17" class="property nvt-sprite-1"
                points="870.9 630.3 870.9 478 950.9 477.8 950.8 630.3 870.9 630.3" />
              <text class="cls-21" transform="translate(880.8 576.1) rotate(-89.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">11.37</tspan>
              </text>
              <text class="cls-24" transform="translate(901.7 490.6) rotate(.4) skewX(0)">
                <tspan x="0" y="0">6.08</tspan>
              </text>
              <text class="cls-26" transform="translate(890.3 527.7) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-26" transform="translate(904.4 543.3) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">17</tspan>
              </text>
              <text class="cls-13" transform="translate(897.6 616.9) rotate(0) skewX(.3)">
                <tspan x="0" y="0">6.00</tspan>
              </text>
              <text class="cls-10" transform="translate(890.6 570.5) scale(1 1)">
                <tspan x="0" y="0">69.15 m2</tspan>
              </text>
              <polyline class="cls-2" points="911.6 587.9 918.5 595 911.6 602 911.6 587.9" />
              <polyline class="cls-4" points="911.6 587.9 911.6 602 904.7 595 911.6 587.9" />
            </g>
            <g id="L-18" ng-class="nvtCalamanda.inmovablesClassList[53]"
              ng-click="nvtCalamanda.showPropertyData(71, '18', nvtCalamanda.inmovables[53].idProperty)">
              <polyline id="LC-18" class="property nvt-sprite-2"
                points="950.9 477.8 1029.9 477.5 1029.8 630.3 950.8 630.3 950.9 477.8" />
              <text class="cls-24" transform="translate(979.1 491.6) rotate(.4) skewX(0)">
                <tspan x="0" y="0">6.00</tspan>
              </text>
              <text class="cls-16" transform="translate(962.6 572.8) rotate(-90) scale(1 1) skewX(-.3)">
                <tspan x="0" y="0">11.37</tspan>
              </text>
              <text class="cls-26" transform="translate(970.5 527) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-27" transform="translate(984.9 543.6) rotate(2.6) scale(1 1) skewX(5.9)">
                <tspan x="0" y="0">18</tspan>
              </text>
              <text class="cls-13" transform="translate(979.5 617) rotate(0) skewX(.3)">
                <tspan x="0" y="0">6.00</tspan>
              </text>
              <text class="cls-10" transform="translate(969.7 569.5) scale(1 1)">
                <tspan class="cls-31" x="0" y="0">6</tspan>
                <tspan x="6.4" y="0">8.42 m2</tspan>
              </text>
              <polyline class="cls-2" points="990.9 586.7 997.8 593.7 990.9 600.8 990.9 586.7" />
              <polyline class="cls-4" points="990.9 586.7 990.9 600.8 983.9 593.7 990.9 586.7" />
            </g>
            <g id="L-19" ng-class="nvtCalamanda.inmovablesClassList[54]"
              ng-click="nvtCalamanda.showPropertyData(71, '19', nvtCalamanda.inmovables[54].idProperty)">
              <polyline id="LC-19" class="property nvt-sprite-1"
                points="1029.9 477.5 1108.8 477.3 1108.7 630.4 1029.8 630.3 1029.9 477.5" />
              <text class="cls-21" transform="translate(1039.8 575.1) rotate(-89.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">11.39</tspan>
              </text>
              <text class="cls-24" transform="translate(1057.6 490.6) rotate(.4) skewX(0)">
                <tspan x="0" y="0">6.00</tspan>
              </text>
              <text class="cls-26" transform="translate(1048 527.7) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-26" transform="translate(1062.2 543.3) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">19</tspan>
              </text>
              <text class="cls-13" transform="translate(1060.8 617.1) rotate(0) skewX(.3)">
                <tspan x="0" y="0">6.00</tspan>
              </text>
              <text class="cls-10" transform="translate(1045.9 570.5) scale(1 1)">
                <tspan class="cls-31" x="0" y="0">6</tspan>
                <tspan x="6.4" y="0">8.53 m2</tspan>
              </text>
            </g>
            <g id="L-20" ng-class="nvtCalamanda.inmovablesClassList[55]"
              ng-click="nvtCalamanda.showPropertyData(71, '20', nvtCalamanda.inmovables[55].idProperty)">
              <polyline id="LC-20" class="property nvt-sprite-2"
                points="1108.8 477.3 1188.8 477.1 1188.7 630.4 1108.7 630.4 1108.8 477.3" />
              <text class="cls-21" transform="translate(1119.9 574) rotate(-89.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">11.41</tspan>
              </text>
              <text class="cls-21" transform="translate(1185.8 574.4) rotate(-89.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">11.43</tspan>
              </text>
              <text class="cls-24" transform="translate(1139.6 491.2) rotate(.4) skewX(0)">
                <tspan x="0" y="0">6.08</tspan>
              </text>
              <text class="cls-26" transform="translate(1128.2 527.7) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">LOCAL</tspan>
              </text>
              <text class="cls-26" transform="translate(1142.3 543.3) rotate(-.4) scale(1 1) skewX(0)">
                <tspan x="0" y="0">20</tspan>
              </text>
              <text class="cls-13" transform="translate(1142.6 617.2) rotate(0) skewX(.3)">
                <tspan x="0" y="0">6.00</tspan>
              </text>
              <text class="cls-10" transform="translate(1127.1 571.5) scale(1 1)">
                <tspan class="cls-31" x="0" y="0">6</tspan>
                <tspan x="6.4" y="0">9.51m2</tspan>
              </text>
            </g>
          </g>
        </g>
        <g id="COMPLEMENTO">
          <rect class="cls-5" x="554" y="296.5" width="240.7" height="37" />
          <text class="cls-22" transform="translate(566.8 327.5)">
            <tspan x="0" y="0">PLANTA BAJA</tspan>
          </text>
          <rect class="cls-5" x="528.9" y="757.6" width="231.3" height="35.6" />
          <text class="cls-23" transform="translate(541.2 787.4)">
            <tspan x="0" y="0">PLANTA ALTA</tspan>
          </text>
          <g>
            <g>
              <text class="cls-33" transform="translate(572.3 121.3) rotate(-1.8) scale(1 1.1) skewX(1.2)">
                <tspan x="0" y="0">SALIDA</tspan>
              </text>
              <path class="cls-6"
                d="M598.7,140.5c-7.4.3-13.8-5.9-14.6-13.9l-19.6.7,17.6,15.5,17.6,15.5,15.8-16.7,15.8-16.7-19.6.7c0,8-5.6,14.6-13,14.9" />
            </g>
            <g>
              <text class="cls-32" transform="translate(735.6 159.6) rotate(-.4) scale(1 1.1) skewX(.3)">
                <tspan x="0" y="0">ACCESO</tspan>
              </text>
              <path class="cls-6"
                d="M765.5,130.6c-7.5.2-13.4,6.8-13.6,14.9l-19.8.4,16.5-16.7,16.5-16.7,17.3,16,17.3,16-19.8.4c-.6-8.1-6.9-14.5-14.3-14.3" />
            </g>
            <polyline class="cls-6" points="661.7 100.2 700.4 100.2 700.4 152.4 661.7 152.4" />
          </g>
          <text class="cls-29" transform="translate(1204.3 61.1) rotate(-.4)">
            <tspan x="0" y="0">CISTERNA</tspan>
          </text>
          <g>
            <text class="cls-29" transform="translate(1198.1 45.7) rotate(-.4)">
              <tspan x="0" y="0">CUARTO DE</tspan>
            </text>
            <text class="cls-29" transform="translate(1209.5 116.9) rotate(-.4)">
              <tspan x="0" y="0">BAÑOS</tspan>
            </text>
            <text class="cls-28" transform="translate(1290.6 73.7) rotate(-.4)">
              <tspan x="0" y="0">CUARTO DE</tspan>
            </text>
          </g>
          <text class="cls-28" transform="translate(1279.7 89.2) rotate(-.4)">
            <tspan x="0" y="0">CONTENEDORES</tspan>
          </text>
          <g>
            <text class="cls-28" transform="translate(1204.8 593.2) rotate(-.4)">
              <tspan x="0" y="0">CUARTO DE</tspan>
            </text>
            <text class="cls-28" transform="translate(1205.3 608.6) rotate(-.4)">
              <tspan x="0" y="0">MÁQUINAS</tspan>
            </text>
          </g>
        </g>
        <g>
					<a href="#!/Navetec-Calamanda_ModuloA_Business_Park_2" class="pb__condo">
						<polyline class="stc10" points="-0.1,2.3 512.2,1.2 512.6,870.9 2.4,880.8 2.6,4.7 	" />
						<text transform="matrix(1 0 0 1 141.056 402.6244)" class="stc13 stc19 stc38">MODULO A</text>
					</a>
				</g>
      </svg>

		</div>
	</div>

</body>

</html>