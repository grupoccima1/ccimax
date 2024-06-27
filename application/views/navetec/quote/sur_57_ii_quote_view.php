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

<body ng-controller="NvtSurNuevoQuoteCtrl as nvtSurNuevo">
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
                Sur 57 Business Park Etapa 1
            </div>
        </a>
		<md-divider></md-divider>
		<a href="#!/Navetec-Sur_57_E2_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Sur 57 Business Park Etapa 2 
            </div>
        </a>
		<md-divider></md-divider>
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
                        <li><a href="#!/Navetec" class="nav-logo"><img src="media/assets/img/logos/logo-navetec.svg"></a></li>
                        <li class="right"><md-button class="md-icon-button md-noink" ng-click="toggleLeft()">
                            <svg viewBox="0 0 24 24" width="24"><path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path></svg>
                        </md-button></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
	<div class="modal-dialog" ng-class="nvtSurNuevo.dialogDisplay">
		<div class="backdrop-dialog" ng-click="nvtSurNuevo.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="nvtSurNuevo.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<div class="divider"></div>
				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Navetec Business Park SUR 57 Etapa 2</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">{{nvtSurNuevo.propertyData.propertyClass}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">{{nvtSurNuevo.propertyData.type}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{nvtSurNuevo.propertyData.number}}</h6>
					</div>
					
					<div class="p-5">
						<h6 class="futura-light">Área de {{nvtSurNuevo.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; de ${{nvtSurNuevo.property.sample.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text">Precio de ${{nvtSurNuevo.property.sample.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN <span style="color: #857C82; font-size: 12px;">{{ (nvtSurNuevo.propertyData.propertyClass !== 'Lote industrial') ? '+ I.V.A.' : '' }}</span></h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light blue-text">Pregunta por nuestras promociones del mes</h6>
					</div>
				</div>
				<div class="divider"></div>
				<div class="py-20 ">
					<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
				</div>
				<div class="divider"></div>
				<div class="p-20">
					<!-- <h6 class="deep-purple-text futura-light">Compra en Octubre y paga la primera mensualidad hasta Noviembre 2023</h6>
					<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
					<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en Octubre 2023</p> -->
				</div>
				<div class="divider"></div>
				<div class="p-20">
					<p class="blue-text futura-book">¡Apártalo ahora!</p>
					<p class="green-text">Con tan solo $20,000</p>
					<button class="btn blue-bg no__shadow futura-bold">Apártar ahora</button>
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
					<h2 class="center-align futura-med">SUR 57 ETAPA 2 </h2>
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
        <div class="">
        <svg version="1.1" id="N.B.P._SUR_57_-_ETAPA_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 x="0px" y="0px" viewBox="0 0 1366 909" style="enable-background:new 0 0 1366 909;" xml:space="preserve">
        <style type="text/css">
            .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#0047BA;}
            .st1{fill:#FFBF00;}
            .st2{font-family:'CenturyGothic-Bold';}
            .st3{font-size:7.3331px;}
            .st4{fill:#FFFFFF;}
            .st5{font-family:'CenturyGothic';}
            .st6{font-size:6.2899px;}
            .st7{font-size:6.2855px;}
            .st8{fill-rule:evenodd;clip-rule:evenodd;fill:#002856;}
            .st9{fill:none;stroke:#FFFFFF;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
            .st10{font-size:7.3381px;}
            .st11{font-size:6.2856px;}
            .st12{opacity:0.7529;fill-rule:evenodd;clip-rule:evenodd;fill:#FFBF00;}
            .st13{opacity:0.502;fill-rule:evenodd;clip-rule:evenodd;fill:#FFBF00;}
            .st14{font-size:6.2898px;}
            .st15{font-size:7.3282px;}
            .st16{font-size:7.3333px;}
            .st17{font-size:6.2858px;}
            .st18{font-size:6.2857px;}
            .st19{font-size:7.3109px;}
            .st20{font-size:7.325px;}
            .st21{font-size:7.2921px;}
            .st22{fill:none;stroke:#002856;stroke-width:2;stroke-miterlimit:10;}
            .st23{font-size:7.9022px;}
        </style>
<g id="BASE">
	
		<image style="overflow:visible;" width="10103" height="6516" xlink:href="81996A70.png"  transform="matrix(0.1414 0 0 0.1414 -62.2096 0.5926)">
	</image>
	
		<image style="overflow:visible;" width="1366" height="909" xlink:href="media/assets/img/navetec/app/sur57/sur-57-2.jpg"  transform="matrix(1 0 0 1 2.077695e-02 0)">
	</image>
</g>
<g id="ETAPA_2">
	<g id="MODULO_A">
		<g id="_x31_1-A_" ng-class="nvtSurNuevo.inmovablesClassList[63]" ng-click="nvtSurNuevo.showPropertyData(66, '11A', nvtSurNuevo.inmovables[63].idProperty)">
			<polyline id="A-11_00000139283265475819699280000002189301383474955700_"  class="property nvt-sprite-1" points="152.4,24.3 158.2,75.9 8,92.6 
				2.2,41 152.4,24.3 			"/>
			<text transform="matrix(0.9947 -0.1097 0.1098 0.994 62.3054 58.459)" class="st1 st2 st3">NAVE 11A </text>
			<text transform="matrix(0.9947 -0.1097 0.1098 0.994 63.3341 65.7515)"><tspan x="0" y="0" class="st4 st5 st3">56</tspan><tspan x="8.1" y="0" class="st4 st5 st3">9.80 m2</tspan></text>
			<text transform="matrix(0.1097 0.9932 -0.994 0.1097 7.2751 58.9188)"><tspan x="0" y="0" class="st4 st5 st6">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st6">0</tspan></text>
			<text transform="matrix(0.1097 0.9932 -0.994 0.1097 148.4999 43.0149)"><tspan x="0" y="0" class="st4 st5 st6">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st6">0</tspan></text>
			<text transform="matrix(0.9947 -0.1097 0.1098 0.994 70.2061 41.0001)"><tspan x="0" y="0" class="st4 st5 st7">40.7</tspan><tspan x="12.1" y="0" class="st4 st5 st7">0</tspan></text>
		</g>
		<g id="_x31_2-A_" ng-class="nvtSurNuevo.inmovablesClassList[64]" ng-click="nvtSurNuevo.showPropertyData(66, '12A', nvtSurNuevo.inmovables[64].idProperty)">
			<polyline id="A-12_00000172424658249454137340000007344286750659246208_"  class="property nvt-sprite-2" points="158.2,75.9 163.9,127.5 
				13.7,144.2 8,92.6 158.2,75.9 			"/>
			<text transform="matrix(0.9947 -0.1097 0.1098 0.994 69.1048 117.3802)"><tspan x="0" y="0" class="st4 st5 st3">56</tspan><tspan x="8.1" y="0" class="st4 st5 st3">9.80 m2</tspan></text>
			<text transform="matrix(0.1097 0.9932 -0.994 0.1097 13.045 110.5408)"><tspan x="0" y="0" class="st4 st5 st6">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st6">0</tspan></text>
			<text transform="matrix(0.1097 0.9932 -0.994 0.1097 154.2672 94.6401)"><tspan x="0" y="0" class="st4 st5 st6">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st6">0</tspan></text>
			<text transform="matrix(0.9947 -0.1097 0.1098 0.994 68.0728 110.0842)" class="st1 st2 st3">NAVE 12A </text>
			<text transform="matrix(0.9947 -0.1097 0.1098 0.994 75.9717 91.0446)"><tspan x="0" y="0" class="st4 st5 st7">40.7</tspan><tspan x="12.1" y="0" class="st4 st5 st7">0</tspan></text>
			<line class="st9" x1="158.2" y1="75.9" x2="8" y2="92.6"/>
		</g>
		<g id="_x31_3-A_" ng-class="nvtSurNuevo.inmovablesClassList[65]" ng-click="nvtSurNuevo.showPropertyData(66, '13A', nvtSurNuevo.inmovables[65].idProperty)">
			<polyline id="A13_00000018233642012032363800000004591506977481850539_"  class="property nvt-sprite-1" points="163.9,127.5 169.7,179.1 
				19.5,195.9 13.7,144.2 163.9,127.5 			"/>
			<text transform="matrix(0.1097 0.9932 -0.994 0.1097 160.0254 146.2575)"><tspan x="0" y="0" class="st4 st5 st6">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st6">0</tspan></text>
			<text transform="matrix(0.9947 -0.1097 0.1098 0.994 73.8296 161.7076)" class="st1 st2 st3">NAVE 13 A </text>
			<text transform="matrix(0.9947 -0.1097 0.1098 0.994 74.86 168.9979)"><tspan x="0" y="0" class="st4 st5 st3">56</tspan><tspan x="8.1" y="0" class="st4 st5 st3">9.80m2</tspan></text>
			<text transform="matrix(0.9947 -0.1097 0.1098 0.994 81.7293 142.6709)"><tspan x="0" y="0" class="st4 st5 st7">40.7</tspan><tspan x="12.1" y="0" class="st4 st5 st7">0</tspan></text>
			<text transform="matrix(0.1097 0.9932 -0.994 0.1097 18.7989 162.1645)"><tspan x="0" y="0" class="st4 st5 st6">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st6">0</tspan></text>
		</g>
		<g id="LINEAS_DIVISORIAS_MODULO_A_00000018915261079307960060000011641194367021400710_">
			<line class="st9" x1="163.9" y1="127.5" x2="13.7" y2="144.2"/>
		</g>
	</g>
	<g id="MODULO_F">
		<g id="_x31_-F_1_"  ng-class="nvtSurNuevo.inmovablesClassList[66]" ng-click="nvtSurNuevo.showPropertyData(66, '1F', nvtSurNuevo.inmovables[66].idProperty)">
			<polyline id="_x31_-F" class="property nvt-sprite-2" points="238.9,79.5 239.2,79.6 328.7,98.1 302.7,223.7 253.8,213.6 238.9,79.5 			"/>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 286.9231 167.0867)" class="st1 st2 st10">NAVE 1F </text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 293.0817 173.7075)"><tspan x="0" y="0" class="st4 st5 st10">65</tspan><tspan x="8.1" y="0" class="st4 st5 st10">9.37 m2</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 274.9571 93.0844)"><tspan x="0" y="0" class="st4 st5 st11">24.7</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 270.9218 215.6879)"><tspan x="0" y="0" class="st4 st5 st11">13.4</tspan><tspan x="12.1" y="0" class="st4 st5 st11">3</tspan></text>
			<text transform="matrix(0.1097 0.9932 -0.994 0.1097 246.9746 138.6991)"><tspan x="0" y="0" class="st4 st5 st6">36.3</tspan><tspan x="12.1" y="0" class="st4 st5 st6">7</tspan></text>
			<g>
				<polyline class="st12" points="280.8,98.1 278.9,107.9 275,102.1 280.8,98.1 				"/>
				<polyline class="st13" points="284.8,103.9 278.9,107.9 278.9,107.9 280.8,98.1 				"/>
			</g>
		</g>
		<g id="_x32_-F_1_"  ng-class="nvtSurNuevo.inmovablesClassList[67]" ng-click="nvtSurNuevo.showPropertyData(66, '2F', nvtSurNuevo.inmovables[67].idProperty)">
			<polyline id="_x32_-F"  class="property nvt-sprite-1" points="328.7,98.1 379.6,108.6 353.6,234.3 302.7,223.7 328.7,98.1 			"/>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 336.6378 178.1088)" class="st1 st2 st10">NAVE 2F </text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 342.9465 184.0247)"><tspan x="0" y="0" class="st4 st5 st10">48</tspan><tspan x="8.1" y="0" class="st4 st5 st10">4.12 m2</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 345.3097 107.6364)"><tspan x="0" y="0" class="st4 st5 st11">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 320.7895 224.4221)"><tspan x="0" y="0" class="st4 st5 st11">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 319.9249 169.7881)"><tspan x="0" y="0" class="st4 st5 st14">34.5</tspan><tspan x="12.1" y="0" class="st4 st5 st14">8</tspan></text>
		</g>
		<g id="_x33_-F_1_"  ng-class="nvtSurNuevo.inmovablesClassList[68]" ng-click="nvtSurNuevo.showPropertyData(66, '3F', nvtSurNuevo.inmovables[68].idProperty)">
			<polyline id="_x33_-F" class="property nvt-sprite-2" points="379.6,108.6 430.5,119.2 404.5,244.8 353.6,234.3 379.6,108.6 			"/>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 387.4632 188.6219)" class="st1 st2 st10">NAVE 3F </text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 396.2058 118.1646)"><tspan x="0" y="0" class="st4 st5 st11">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 371.6878 234.9497)"><tspan x="0" y="0" class="st4 st5 st11">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 370.8262 180.3198)"><tspan x="0" y="0" class="st4 st5 st14">34.5</tspan><tspan x="12.1" y="0" class="st4 st5 st14">8</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 394.0965 191.86)"><tspan x="0" y="0" class="st4 st5 st10">48</tspan><tspan x="8.1" y="0" class="st4 st5 st10">4.12 m2</tspan></text>
		</g>
		<g id="_x34_-F_1_"  ng-class="nvtSurNuevo.inmovablesClassList[69]" ng-click="nvtSurNuevo.showPropertyData(66, '4F', nvtSurNuevo.inmovables[69].idProperty)">
			<polyline id="_x34_-F"  class="property nvt-sprite-1" points="430.5,119.2 481.4,129.7 455.4,255.3 404.5,244.8 430.5,119.2 			"/>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 447.1095 128.6948)"><tspan x="0" y="0" class="st4 st5 st11">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 422.5905 245.4797)"><tspan x="0" y="0" class="st4 st5 st11">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 421.7265 190.8474)"><tspan x="0" y="0" class="st4 st5 st14">34.5</tspan><tspan x="12.1" y="0" class="st4 st5 st14">8</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 437.7475 201.7753)" class="st1 st2 st10">NAVE 4F </text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 442.9379 204.7233)"><tspan x="0" y="0" class="st4 st5 st10">48</tspan><tspan x="8.1" y="0" class="st4 st5 st10">4.12 m2</tspan></text>
		</g>
		<g id="_x35_F"  ng-class="nvtSurNuevo.inmovablesClassList[70]" ng-click="nvtSurNuevo.showPropertyData(66, '5F', nvtSurNuevo.inmovables[70].idProperty)">
			<polyline id="_x35_-F" class="property nvt-sprite-2" points="481.4,129.7 532.3,140.2 506.3,265.8 455.4,255.3 481.4,129.7 			"/>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 489.2774 209.6833)" class="st1 st2 st10">NAVE 5F </text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 498.0118 139.2218)"><tspan x="0" y="0" class="st4 st5 st11">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 473.4884 256.0088)"><tspan x="0" y="0" class="st4 st5 st11">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 472.6274 201.3765)"><tspan x="0" y="0" class="st4 st5 st14">34.5</tspan><tspan x="12.1" y="0" class="st4 st5 st14">8</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 495.941 213.6701)"><tspan x="0" y="0" class="st4 st5 st10">48</tspan><tspan x="8.1" y="0" class="st4 st5 st10">4.12 m2</tspan></text>
		</g>
		<g id="_x36_F"  ng-class="nvtSurNuevo.inmovablesClassList[71]" ng-click="nvtSurNuevo.showPropertyData(66, '6F', nvtSurNuevo.inmovables[71].idProperty)">
			<polyline id="_x36_-F"  class="property nvt-sprite-1" points="532.3,140.2 583.2,150.7 557.2,276.4 506.3,265.8 532.3,140.2 			"/>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 548.9022 149.7492)"><tspan x="0" y="0" class="st4 st5 st11">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 524.3868 266.5359)"><tspan x="0" y="0" class="st4 st5 st11">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 523.529 211.9073)"><tspan x="0" y="0" class="st4 st5 st14">34.5</tspan><tspan x="12.1" y="0" class="st4 st5 st14">8</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 545.477 224.202)"><tspan x="0" y="0" class="st4 st5 st10">48</tspan><tspan x="8.1" y="0" class="st4 st5 st10">4.12 m2</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 539.0305 222.4351)" class="st1 st2 st10">NAVE 6F </text>
		</g>
		<g id="_x37_-F_1_" ng-class="nvtSurNuevo.inmovablesClassList[72]" ng-click="nvtSurNuevo.showPropertyData(66, '7F', nvtSurNuevo.inmovables[72].idProperty)">
			<polyline id="_x37_-F" class="property nvt-sprite-2" points="583.2,150.7 634.1,161.3 608.1,286.9 557.2,276.4 583.2,150.7 			"/>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 599.8073 160.2773)"><tspan x="0" y="0" class="st4 st5 st11">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 575.2906 277.0656)"><tspan x="0" y="0" class="st4 st5 st11">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 574.4271 222.4354)"><tspan x="0" y="0" class="st4 st5 st14">34.5</tspan><tspan x="12.1" y="0" class="st4 st5 st14">8</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 588.7499 231.9718)" class="st1 st2 st10">NAVE 7F </text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 595.6387 234.2989)"><tspan x="0" y="0" class="st4 st5 st10">48</tspan><tspan x="8.1" y="0" class="st4 st5 st10">4.12 m2</tspan></text>
		</g>
		<g id="_x38_F" ng-class="nvtSurNuevo.inmovablesClassList[73]" ng-click="nvtSurNuevo.showPropertyData(66, '8F', nvtSurNuevo.inmovables[73].idProperty)">
			<polyline id="_x38_-F"  class="property nvt-sprite-1" points="634.1,161.3 685,171.8 659,297.4 608.1,286.9 634.1,161.3 			"/>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 650.7022 170.8017)"><tspan x="0" y="0" class="st4 st5 st11">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 626.1851 287.592)"><tspan x="0" y="0" class="st4 st5 st11">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 625.3251 232.9644)"><tspan x="0" y="0" class="st4 st5 st14">34.5</tspan><tspan x="12.1" y="0" class="st4 st5 st14">8</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 640.9252 244.465)" class="st1 st2 st10">NAVE 8F </text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 649.0864 245.6483)"><tspan x="0" y="0" class="st4 st5 st10">48</tspan><tspan x="8.1" y="0" class="st4 st5 st10">4.12 m2</tspan></text>
		</g>
		<g id="_x39_-F_1_" ng-class="nvtSurNuevo.inmovablesClassList[74]" ng-click="nvtSurNuevo.showPropertyData(66, '9F', nvtSurNuevo.inmovables[74].idProperty)">
			<polyline id="_x39_-F" class="property nvt-sprite-2" points="685,171.8 735.9,182.3 709.9,308 659,297.4 685,171.8 			"/>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 694.2322 252.08)" class="st1 st2 st10">NAVE 9F</text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 699.2522 257.7271)"><tspan x="0" y="0" class="st4 st5 st10">48</tspan><tspan x="8.1" y="0" class="st4 st5 st10">4.12  m2</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 701.6155 181.3334)"><tspan x="0" y="0" class="st4 st5 st11">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 677.0919 298.1219)"><tspan x="0" y="0" class="st4 st5 st11">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 676.2233 243.492)"><tspan x="0" y="0" class="st4 st5 st14">34.5</tspan><tspan x="12.1" y="0" class="st4 st5 st14">8</tspan></text>
		</g>
		<g id="_x31_0-F_1_" ng-class="nvtSurNuevo.inmovablesClassList[75]" ng-click="nvtSurNuevo.showPropertyData(66, '10F', nvtSurNuevo.inmovables[75].idProperty)">
			<polyline id="_x31_0-F"  class="property nvt-sprite-1" points="735.9,182.3 786.8,192.9 760.8,318.5 709.9,308 735.9,182.3 			"/>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 742.48 262.0571)" class="st1 st2 st10">NAVE 10F</text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 752.5142 191.8636)"><tspan x="0" y="0" class="st4 st5 st11">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 727.9976 308.652)"><tspan x="0" y="0" class="st4 st5 st11">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 727.1299 254.0229)"><tspan x="0" y="0" class="st4 st5 st14">34.5</tspan><tspan x="12.1" y="0" class="st4 st5 st14">8</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 751.2928 267.4685)"><tspan x="0" y="0" class="st4 st5 st10">48</tspan><tspan x="8.1" y="0" class="st4 st5 st10">4.12  m2</tspan></text>
		</g>
		<g id="_x31_1-F_1_" ng-class="nvtSurNuevo.inmovablesClassList[76]" ng-click="nvtSurNuevo.showPropertyData(66, '11F', nvtSurNuevo.inmovables[76].idProperty)">
			<polyline id="_x31_1-F" class="property nvt-sprite-2" points="786.8,192.9 837.7,203.4 811.7,329 760.8,318.5 786.8,192.9 			"/>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 793.3789 271.1812)" class="st1 st2 st10">NAVE 11F</text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 803.4147 202.3902)"><tspan x="0" y="0" class="st4 st5 st11">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 778.8936 319.1806)"><tspan x="0" y="0" class="st4 st5 st11">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 778.028 264.5509)"><tspan x="0" y="0" class="st4 st5 st14">34.5</tspan><tspan x="12.1" y="0" class="st4 st5 st14">8</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 800.791 274.362)"><tspan x="0" y="0" class="st4 st5 st10">48</tspan><tspan x="8.1" y="0" class="st4 st5 st10">4.12  m2</tspan></text>
		</g>
		<g id="_x31_2-F_1_" ng-class="nvtSurNuevo.inmovablesClassList[77]" ng-click="nvtSurNuevo.showPropertyData(66, '12F', nvtSurNuevo.inmovables[77].idProperty)">
			<polyline id="_x31_2-F"  class="property nvt-sprite-1" points="837.7,203.4 888.6,213.9 862.6,339.5 811.7,329 837.7,203.4 			"/>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 844.3236 284.2036)" class="st1 st2 st10">NAVE 12F</text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 854.3167 212.9191)"><tspan x="0" y="0" class="st4 st5 st11">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 829.799 329.7072)"><tspan x="0" y="0" class="st4 st5 st11">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 828.932 275.0797)"><tspan x="0" y="0" class="st4 st5 st14">34.5</tspan><tspan x="12.1" y="0" class="st4 st5 st14">8</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 851.3767 287.6776)"><tspan x="0" y="0" class="st4 st5 st10">48</tspan><tspan x="8.1" y="0" class="st4 st5 st10">4.12  m2</tspan></text>
		</g>
		<g id="_x31_3-F_1_" ng-class="nvtSurNuevo.inmovablesClassList[78]" ng-click="nvtSurNuevo.showPropertyData(66, '13F', nvtSurNuevo.inmovables[78].idProperty)">
			<polyline id="_x31_3-F" class="property nvt-sprite-2" points="888.6,213.9 939.5,224.4 913.5,350.1 862.6,339.5 888.6,213.9 			"/>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 897.4471 296.6452)" class="st1 st2 st10">NAVE 13F</text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 905.2183 223.4494)"><tspan x="0" y="0" class="st4 st5 st11">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 880.699 340.2362)"><tspan x="0" y="0" class="st4 st5 st11">14.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 879.8347 285.6098)"><tspan x="0" y="0" class="st4 st5 st14">34.5</tspan><tspan x="12.1" y="0" class="st4 st5 st14">8</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 904.7058 299.7046)"><tspan x="0" y="0" class="st4 st5 st10">48</tspan><tspan x="8.1" y="0" class="st4 st5 st10">4.12  m2</tspan></text>
		</g>
		<g id="_x31_4-F_1_" ng-class="nvtSurNuevo.inmovablesClassList[79]" ng-click="nvtSurNuevo.showPropertyData(66, '14F', nvtSurNuevo.inmovables[79].idProperty)">
			<polyline id="_x31_4-F"  class="property nvt-sprite-1" points="913.5,350.1 939.5,224.4 1006.3,238.3 980,363.8 913.5,350.1 			"/>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 955.7838 308.7106)" class="st1 st2 st10">NAVE 14F</text>
			<text transform="matrix(0.2031 -0.9472 0.9806 0.1962 961.5164 311.5667)"><tspan x="0" y="0" class="st4 st5 st15">63</tspan><tspan x="8.1" y="0" class="st4 st5 st15">4.04 m2</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 964.0654 235.6214)"><tspan x="0" y="0" class="st4 st5 st11">18.3</tspan><tspan x="12.1" y="0" class="st4 st5 st11">7</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 939.4087 353.9615)"><tspan x="0" y="0" class="st4 st5 st11">18.3</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 930.7258 296.1384)"><tspan x="0" y="0" class="st4 st5 st14">34.5</tspan><tspan x="12.1" y="0" class="st4 st5 st14">8</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 990.0681 308.3882)"><tspan x="0" y="0" class="st4 st5 st14">34.5</tspan><tspan x="12.1" y="0" class="st4 st5 st14">8</tspan></text>
			<g>
				<polyline class="st12" points="970.9,242.2 969,252 965,246.2 970.9,242.2 				"/>
				<polyline class="st13" points="974.8,248.1 969,252 969,252 970.9,242.2 				"/>
			</g>
		</g>
		<g id="LINEAS_DIVISORIAS_MODULO_F">
			<line class="st9" x1="353.6" y1="234.4" x2="379.6" y2="108.6"/>
			<line class="st9" x1="404.5" y1="244.9" x2="430.5" y2="119.2"/>
			<line class="st9" x1="455.4" y1="255.5" x2="481.4" y2="129.7"/>
			<line class="st9" x1="506.3" y1="266" x2="532.3" y2="140.2"/>
			<line class="st9" x1="557.2" y1="276.5" x2="583.2" y2="150.7"/>
			<line class="st9" x1="608.1" y1="287.1" x2="634.1" y2="161.3"/>
			<line class="st9" x1="659" y1="297.6" x2="685" y2="171.8"/>
			<line class="st9" x1="709.9" y1="308.1" x2="735.9" y2="182.3"/>
			<line class="st9" x1="760.8" y1="318.6" x2="786.8" y2="192.9"/>
			<line class="st9" x1="811.7" y1="329.2" x2="837.7" y2="203.4"/>
			<line class="st9" x1="862.6" y1="339.7" x2="888.6" y2="213.9"/>
			<line class="st9" x1="887.5" y1="475.7" x2="939.5" y2="224.4"/>
			<line class="st9" x1="302.7" y1="223.7" x2="328.7" y2="98.1"/>
		</g>
	</g>
	<g id="MODULO_G">
		<g id="_x31_3-G_" ng-class="nvtSurNuevo.inmovablesClassList[80]" ng-click="nvtSurNuevo.showPropertyData(66, '13G', nvtSurNuevo.inmovables[80].idProperty)">
			<polyline id="_x31_3-G_" class="property nvt-sprite-2" points="887.5,475.7 913.5,350.1 
				980,363.8 953.7,489.4 887.5,475.7 			"/>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 929.2114 436.9579)" class="st1 st2 st10">NAVE 13G</text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 935.4048 437.5879)"><tspan x="0" y="0" class="st4 st5 st10">63</tspan><tspan x="8.1" y="0" class="st4 st5 st10">1.45 m2</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 937.9058 361.2281)"><tspan x="0" y="0" class="st4 st5 st11">18.3</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 913.244 479.5681)"><tspan x="0" y="0" class="st4 st5 st11">18.2</tspan><tspan x="12.1" y="0" class="st4 st5 st11">2</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 907.8686 421.7718)"><tspan x="0" y="0" class="st4 st5 st14">34.5</tspan><tspan x="12.1" y="0" class="st4 st5 st14">8</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 963.764 433.9656)"><tspan x="0" y="0" class="st4 st5 st14">34.5</tspan><tspan x="12.1" y="0" class="st4 st5 st14">8</tspan></text>
			<g>
				<polyline class="st12" points="925.8,460.1 924,469.9 920,464.1 925.8,460.1 				"/>
				<polyline class="st13" points="929.8,465.9 924,469.9 924,469.9 925.8,460.1 				"/>
			</g>
		</g>
		
			<line id="LINEAS_DIVISORIAS_00000035530414383006918020000011746136873426538378_" class="st9" x1="913.5" y1="350.1" x2="980" y2="363.8"/>
	</g>
	<g id="MODULO_H">
		<g id="_x31_4-H_1_" ng-class="nvtSurNuevo.inmovablesClassList[81]" ng-click="nvtSurNuevo.showPropertyData(66, '14H', nvtSurNuevo.inmovables[81].idProperty)">
			<polyline id="_x31_4-H" class="property nvt-sprite-2" points="876.6,526.5 943.1,540.3 924.1,631 857.8,617.3 876.6,526.5 			"/>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 895.0248 593.8228)" class="st1 st2 st10">NAVE 14H</text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 902.3325 596.285)"><tspan x="0" y="0" class="st4 st5 st10">45</tspan><tspan x="8.1" y="0" class="st4 st5 st10">6.09 m2</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 901.0041 537.6567)"><tspan x="0" y="0" class="st4 st5 st11">18.2</tspan><tspan x="12.1" y="0" class="st4 st5 st11">7</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 873.0534 580.8038)"><tspan x="0" y="0" class="st4 st5 st14">25.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 930.4601 592.9899)"><tspan x="0" y="0" class="st4 st5 st14">25.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 883.5917 621.2044)"><tspan x="0" y="0" class="st4 st5 st11">18.2</tspan><tspan x="12.1" y="0" class="st4 st5 st11">2</tspan></text>
			<g>
				<polyline class="st12" points="907.6,543.6 905.8,553.4 901.8,547.6 907.6,543.6 				"/>
				<polyline class="st13" points="911.6,549.5 905.8,553.5 905.8,553.4 907.6,543.6 				"/>
			</g>
		</g>
	</g>
	<g id="MODULO_I">
		<g id="_x31_6-I_" ng-class="nvtSurNuevo.inmovablesClassList[82]" ng-click="nvtSurNuevo.showPropertyData(66, '16I', nvtSurNuevo.inmovables[82].idProperty)">
			<polyline id="_x31_6-I_00000029019173989750173390000000408550606094327168_"  class="property nvt-sprite-1" points="857.6,617.3 924.1,631 
				908.8,703.7 842.6,690 857.6,617.3 			"/>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 878.032 675.8562)" class="st1 st2 st10">NAVE 16I </text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 885.1517 677.8586)"><tspan x="0" y="0" class="st4 st5 st10">36</tspan><tspan x="8.1" y="0" class="st4 st5 st10">4.89 m2</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 868.3793 693.8336)"><tspan x="0" y="0" class="st4 st5 st11">18.2</tspan><tspan x="12.1" y="0" class="st4 st5 st11">2</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 881.9952 628.4507)"><tspan x="0" y="0" class="st4 st5 st11">18.2</tspan><tspan x="12.1" y="0" class="st4 st5 st11">7</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 855.934 662.5188)"><tspan x="0" y="0" class="st4 st5 st14">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 913.3563 674.6995)"><tspan x="0" y="0" class="st4 st5 st14">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<g>
				<polyline class="st12" points="879,679.1 877.2,688.9 873.2,683.1 879,679.1 				"/>
				<polyline class="st13" points="883,684.9 877.2,688.9 877.2,688.9 879,679.1 				"/>
			</g>
		</g>
		
			<line id="LINEAS_DIVISORIAS_MODULO_I-J_00000049192155239772502930000016431081870566991798_" class="st9" x1="857.5" y1="617.3" x2="924.1" y2="631"/>
	</g>
	<g id="MODULO_M">
		<g id="_x31_-M_1_" ng-class="nvtSurNuevo.inmovablesClassList[121]" ng-click="nvtSurNuevo.showPropertyData(66, '1M', nvtSurNuevo.inmovables[121].idProperty)">
			<polyline id="_x31_-M" class="property nvt-sprite-2" points="1280.1,244.2 1299.2,152.7 1365.3,199.6 1352.8,259.4 1280.1,244.2 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1309.4017 209.1557)" class="st1 st2 st16">NAVE 1M </text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1306.2816 216.6815)"><tspan x="0" y="0" class="st4 st5 st16">41</tspan><tspan x="8.1" y="0" class="st4 st5 st16">6.44 m2</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1293.8307 207.3033)"><tspan x="0" y="0" class="st4 st5 st14">25.1</tspan><tspan x="12.1" y="0" class="st4 st5 st14">9</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1355.0042 236.7516)"><tspan x="0" y="0" class="st4 st5 st14">16.4</tspan><tspan x="12.1" y="0" class="st4 st5 st14">5</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1309.0807 248.7462)"><tspan x="0" y="0" class="st4 st5 st11">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.8145 0.5806 -0.581 0.8139 1321.5985 176.4381)"><tspan x="0" y="0" class="st4 st5 st17">21.8</tspan><tspan x="12.1" y="0" class="st4 st5 st17">2</tspan></text>
			<g>
				<polyline class="st12" points="1296.8,204 1306.5,206.3 1300.5,210 1296.8,204 				"/>
				<polyline class="st13" points="1302.9,200.3 1306.5,206.3 1306.5,206.3 1296.8,204 				"/>
			</g>
		</g>
		<g id="_x32_-M_1_"  ng-class="nvtSurNuevo.inmovablesClassList[122]" ng-click="nvtSurNuevo.showPropertyData(66, '2M', nvtSurNuevo.inmovables[122].idProperty)">
			<polyline id="_x32_-M"  class="property nvt-sprite-1" points="1352.8,259.4 1345.2,295.7 1272.5,280.5 1280.1,244.2 1352.8,259.4 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1294.4342 264.1331)" class="st1 st2 st16">NAVE 2M </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1280.4561 271.2014)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1344.9417 284.7882)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1301.5532 285.0782)"><tspan x="0" y="0" class="st4 st5 st11">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1292.6273 271.1392)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x33_-M_1_"  ng-class="nvtSurNuevo.inmovablesClassList[123]" ng-click="nvtSurNuevo.showPropertyData(66, '3M', nvtSurNuevo.inmovables[123].idProperty)">
			<polyline id="_x33_-M" class="property nvt-sprite-2" points="1345.2,295.7 1337.6,332 1264.9,316.8 1272.5,280.5 1345.2,295.7 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1288.3612 300.7725)" class="st1 st2 st16">NAVE 3M </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1272.8516 307.5163)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1337.3414 321.102)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1294.035 321.408)"><tspan x="0" y="0" class="st4 st5 st11">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1285.9703 307.9161)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x34_-M_1_"  ng-class="nvtSurNuevo.inmovablesClassList[124]" ng-click="nvtSurNuevo.showPropertyData(66, '4M', nvtSurNuevo.inmovables[124].idProperty)">
			<polyline id="_x34_-M"  class="property nvt-sprite-1" points="1337.6,332 1330,368.3 1257.3,353.1 1264.9,316.8 1337.6,332 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1280.6853 338.3583)" class="st1 st2 st16">NAVE 4M </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1265.2494 343.8297)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1330.653 357.5074)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1286.5117 357.7388)"><tspan x="0" y="0" class="st4 st5 st11">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1278.9801 344.2336)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x35_-M_1_"  ng-class="nvtSurNuevo.inmovablesClassList[125]" ng-click="nvtSurNuevo.showPropertyData(66, '5M', nvtSurNuevo.inmovables[125].idProperty)">
			<polyline id="_x35_-M" class="property nvt-sprite-2" points="1330,368.3 1322.3,404.6 1249.7,389.4 1257.3,353.1 1330,368.3 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1272.7772 373.3203)" class="st1 st2 st16">NAVE 5M </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1257.6331 380.1486)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1323.0416 393.8214)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1278.9857 394.073)"><tspan x="0" y="0" class="st4 st5 st11">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1270.7615 380.0294)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x36_-M_1_"  ng-class="nvtSurNuevo.inmovablesClassList[126]" ng-click="nvtSurNuevo.showPropertyData(66, '6M', nvtSurNuevo.inmovables[126].idProperty)">
			<polyline id="_x36_-M"  class="property nvt-sprite-1" points="1322.3,404.6 1314.7,441 1242.1,425.8 1249.7,389.4 1322.3,404.6 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1265.1112 409.6243)" class="st1 st2 st16">NAVE 6M </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1250.0332 416.4609)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1315.4421 430.1414)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1271.4584 430.4039)"><tspan x="0" y="0" class="st4 st5 st11">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1263.9304 416.4633)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x37_-M_1_"  ng-class="nvtSurNuevo.inmovablesClassList[127]" ng-click="nvtSurNuevo.showPropertyData(66, '7M', nvtSurNuevo.inmovables[127].idProperty)">
			<polyline id="_x37_-M" class="property nvt-sprite-2" points="1314.7,441 1307.1,477.3 1234.5,462.1 1242.1,425.8 1314.7,441 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1257.4474 445.9267)" class="st1 st2 st16">NAVE 7M </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1242.4332 452.7778)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1307.8397 466.4557)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1263.9305 466.7378)"><tspan x="0" y="0" class="st4 st5 st11">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1256.3986 452.7745)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x38_-M_1_"  ng-class="nvtSurNuevo.inmovablesClassList[128]" ng-click="nvtSurNuevo.showPropertyData(66, '8M', nvtSurNuevo.inmovables[128].idProperty)">
			<polyline id="_x38_-M"  class="property nvt-sprite-1" points="1307.1,477.3 1299.5,513.6 1226.9,498.4 1234.5,462.1 1307.1,477.3 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1249.7854 482.2305)" class="st1 st2 st16">NAVE 8M </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1234.8268 489.0923)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1299.3147 502.6825)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1256.4032 503.0687)"><tspan x="0" y="0" class="st4 st5 st11">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1248.8676 489.0909)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x39_-M_1_"  ng-class="nvtSurNuevo.inmovablesClassList[129]" ng-click="nvtSurNuevo.showPropertyData(66, '9M', nvtSurNuevo.inmovables[129].idProperty)">
			<polyline id="_x39_-M" class="property nvt-sprite-2" points="1299.5,513.6 1291.9,549.9 1219.2,534.7 1226.9,498.4 1299.5,513.6 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1242.1235 518.5333)" class="st1 st2 st16">NAVE 9M </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1227.218 525.4088)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1291.7069 538.9938)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1248.8739 539.3992)"><tspan x="0" y="0" class="st4 st5 st11">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1240.3394 526.0331)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x31_0-M_1_"  ng-class="nvtSurNuevo.inmovablesClassList[130]" ng-click="nvtSurNuevo.showPropertyData(66, '10M', nvtSurNuevo.inmovables[130].idProperty)">
			<polyline id="_x31_0-M"  class="property nvt-sprite-1" points="1291.9,549.9 1284.3,586.2 1211.6,571 1219.2,534.7 1291.9,549.9 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1234.4691 554.8297)" class="st1 st2 st16">NAVE 10M </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1219.6123 561.7244)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1284.1061 575.3104)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1241.3478 575.7244)"><tspan x="0" y="0" class="st4 st5 st11">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1232.7341 562.1194)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x31_1-M_1_"  ng-class="nvtSurNuevo.inmovablesClassList[131]" ng-click="nvtSurNuevo.showPropertyData(66, '11M', nvtSurNuevo.inmovables[131].idProperty)">
			<polyline id="_x31_1-M" class="property nvt-sprite-2" points="1284.3,586.2 1276.7,622.5 1204,607.3 1211.6,571 1284.3,586.2 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1226.8071 591.1375)" class="st1 st2 st16">NAVE 11M </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1212.0106 598.0354)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1276.5038 611.6288)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1233.8229 612.0629)"><tspan x="0" y="0" class="st4 st5 st11">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1225.1339 597.9217)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x31_2-M_1_"  ng-class="nvtSurNuevo.inmovablesClassList[132]" ng-click="nvtSurNuevo.showPropertyData(66, '12M', nvtSurNuevo.inmovables[132].idProperty)">
			<polyline id="_x31_2-M"  class="property nvt-sprite-1" points="1276.7,622.5 1269.1,658.8 1196.4,643.6 1204,607.3 1276.7,622.5 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1219.1434 627.4399)" class="st1 st2 st16">NAVE 12M </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1204.397 634.3513)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1268.8978 647.9413)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1226.2947 648.3887)"><tspan x="0" y="0" class="st4 st5 st11">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1217.5292 634.3518)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x31_3-M_1_"  ng-class="nvtSurNuevo.inmovablesClassList[133]" ng-click="nvtSurNuevo.showPropertyData(66, '13M', nvtSurNuevo.inmovables[133].idProperty)">
			<polyline id="_x31_3-M" class="property nvt-sprite-2" points="1269.1,658.8 1261.5,695.2 1188.8,680 1196.4,643.6 1269.1,658.8 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1211.4833 663.7441)" class="st1 st2 st16">NAVE 13M</text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1196.7994 670.6617)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1261.2828 684.254)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1218.7684 684.7238)"><tspan x="0" y="0" class="st4 st5 st11">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1209.4779 670.66)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x31_4-M_1_"  ng-class="nvtSurNuevo.inmovablesClassList[134]" ng-click="nvtSurNuevo.showPropertyData(66, '14M', nvtSurNuevo.inmovables[134].idProperty)">
			<polyline id="_x31_4-M"  class="property nvt-sprite-1" points="1261.5,695.2 1253.9,731.5 1181.2,716.3 1188.8,680 1261.5,695.2 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1203.8207 700.0507)" class="st1 st2 st16">NAVE 14M</text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1203.9725 707.6125)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1189.1954 706.9787)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1253.6801 720.5703)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1211.2424 721.053)"><tspan x="0" y="0" class="st4 st5 st11">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
		</g>
		<g id="_x31_5-M_1_" ng-class="nvtSurNuevo.inmovablesClassList[135]" ng-click="nvtSurNuevo.showPropertyData(66, '15M', nvtSurNuevo.inmovables[135].idProperty)">
			<polyline id="_x31_5-M" class="property nvt-sprite-2" points="1181.2,716.3 1253.9,731.5 1246.3,767.8 1173.6,752.7 1181.2,716.3 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1196.1605 736.3549)" class="st1 st2 st16">NAVE 15M</text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1196.3733 743.9215)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.43 m2</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1181.5754 743.3766)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">4</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1246.0585 756.9659)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1203.7156 757.3821)"><tspan x="0" y="0" class="st4 st5 st11">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<g>
				<polyline class="st12" points="1185.1,735.2 1194.8,737.6 1188.8,741.2 1185.1,735.2 				"/>
				<polyline class="st13" points="1191.2,731.5 1194.8,737.5 1194.8,737.6 1185.1,735.2 				"/>
			</g>
		</g>
		<g id="LINEAS_DIVISORIAS_MODULO_M">
			<line class="st9" x1="1181.2" y1="716.3" x2="1253.9" y2="731.5"/>
			<line class="st9" x1="1188.8" y1="680" x2="1261.5" y2="695.2"/>
			<line class="st9" x1="1196.4" y1="643.6" x2="1269.1" y2="658.8"/>
			<line class="st9" x1="1204" y1="607.3" x2="1276.7" y2="622.5"/>
			<line class="st9" x1="1211.6" y1="571" x2="1284.3" y2="586.2"/>
			<line class="st9" x1="1219.2" y1="534.7" x2="1291.9" y2="549.9"/>
			<line class="st9" x1="1226.9" y1="498.4" x2="1299.5" y2="513.6"/>
			<line class="st9" x1="1234.5" y1="462.1" x2="1307.1" y2="477.3"/>
			<line class="st9" x1="1242.1" y1="425.8" x2="1314.7" y2="441"/>
			<line class="st9" x1="1249.7" y1="389.4" x2="1322.3" y2="404.6"/>
			<line class="st9" x1="1257.3" y1="353.1" x2="1330" y2="368.3"/>
			<line class="st9" x1="1264.9" y1="316.8" x2="1337.6" y2="332"/>
			<line class="st9" x1="1272.5" y1="280.5" x2="1345.2" y2="295.7"/>
			<line class="st9" x1="1280.1" y1="244.2" x2="1352.8" y2="259.4"/>
		</g>
	</g>
	<g id="MODULO_J">
		<g id="_x31_5-J_" ng-class="nvtSurNuevo.inmovablesClassList[83]" ng-click="nvtSurNuevo.showPropertyData(66, '15J', nvtSurNuevo.inmovables[83].idProperty)">
			<polyline id="_x31_5-J_00000142878355683165454320000006555479546281068716_"  class="property nvt-sprite-1" points="833.9,741.2 870.2,748.7 
				855.2,821.4 818.8,813.9 833.9,741.2 			"/>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 839.1851 797.3888)" class="st1 st2 st10">NAVE 15J </text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 846.4477 798.6679)"><tspan x="0" y="0" class="st4 st5 st10">20</tspan><tspan x="8.1" y="0" class="st4 st5 st10">0.00 m2</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 843.2125 749.2401)"><tspan x="0" y="0" class="st4 st5 st11">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 829.6665 813.0634)"><tspan x="0" y="0" class="st4 st5 st11">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 832.1719 786.4217)"><tspan x="0" y="0" class="st4 st5 st14">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
		</g>
		<g id="_x31_6-J_" ng-class="nvtSurNuevo.inmovablesClassList[84]" ng-click="nvtSurNuevo.showPropertyData(66, '16J', nvtSurNuevo.inmovables[84].idProperty)">
			<polyline id="_x31_6-J_00000091721537145180373780000017295188865080223381_" class="property nvt-sprite-2" points="874.8,825.4 855.2,821.4 
				870.2,748.7 906.6,756.2 891.6,828.9 874.8,825.4 			"/>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 875.5382 804.9099)" class="st1 st2 st10">NAVE 16J </text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 879.5745 756.762)"><tspan x="0" y="0" class="st4 st5 st11">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 866.0273 820.5861)"><tspan x="0" y="0" class="st4 st5 st11">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 866.9474 793.9424)"><tspan x="0" y="0" class="st4 st5 st14">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 881.9946 807.505)"><tspan x="0" y="0" class="st4 st5 st10">20</tspan><tspan x="8.1" y="0" class="st4 st5 st10">0.00 m2</tspan></text>
		</g>
		<g id="_x31_7-J_" ng-class="nvtSurNuevo.inmovablesClassList[85]" ng-click="nvtSurNuevo.showPropertyData(66, '17J', nvtSurNuevo.inmovables[85].idProperty)">
			<polyline id="_x31_7-J_00000060743403161784222290000000126739105459795626_"  class="property nvt-sprite-1" points="891.6,828.9 906.6,756.2 
				943,763.8 927.9,836.3 891.6,828.9 			"/>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 911.8973 812.4312)" class="st1 st2 st10">NAVE 17J </text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 915.9355 764.2838)"><tspan x="0" y="0" class="st4 st5 st11">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 902.3824 828.1075)"><tspan x="0" y="0" class="st4 st5 st11">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 903.3048 801.4623)"><tspan x="0" y="0" class="st4 st5 st14">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 919.9713 814.6416)"><tspan x="0" y="0" class="st4 st5 st10">20</tspan><tspan x="8.1" y="0" class="st4 st5 st10">0.00 m2</tspan></text>
		</g>
		<g id="_x31_8-J_" ng-class="nvtSurNuevo.inmovablesClassList[86]" ng-click="nvtSurNuevo.showPropertyData(66, '18J', nvtSurNuevo.inmovables[86].idProperty)">
			<polyline id="_x31_8-J_00000024692110426577089080000003526617991960160926_" class="property nvt-sprite-2" points="927.9,836.3 943,763.8 
				979.3,771.3 964.3,843.7 927.9,836.3 			"/>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 948.2477 819.9512)" class="st1 st2 st10">NAVE 18J </text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 952.2911 771.8033)"><tspan x="0" y="0" class="st4 st5 st11">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 938.7455 835.6242)"><tspan x="0" y="0" class="st4 st5 st11">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 939.6656 808.985)"><tspan x="0" y="0" class="st4 st5 st14">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 955.7807 821.4034)"><tspan x="0" y="0" class="st4 st5 st10">20</tspan><tspan x="8.1" y="0" class="st4 st5 st10">0.00 m2</tspan></text>
		</g>
		<g id="_x31_9-J_" ng-class="nvtSurNuevo.inmovablesClassList[87]" ng-click="nvtSurNuevo.showPropertyData(66, '19J', nvtSurNuevo.inmovables[87].idProperty)">
			<polyline id="_x31_9-J_00000025414781776020260870000009512563062358024894_"  class="property nvt-sprite-1" points="964.3,843.7 979.3,771.3 
				1015.7,778.8 1000.7,851.1 964.3,843.7 			"/>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 984.6102 827.4662)" class="st1 st2 st10">NAVE 19J </text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 988.6423 779.324)"><tspan x="0" y="0" class="st4 st5 st11">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 975.0912 843.1428)"><tspan x="0" y="0" class="st4 st5 st11">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 976.0196 816.5073)"><tspan x="0" y="0" class="st4 st5 st14">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 993.3211 829.9091)"><tspan x="0" y="0" class="st4 st5 st10">20</tspan><tspan x="8.1" y="0" class="st4 st5 st10">0.00 m2</tspan></text>
		</g>
		<g id="_x32_0-J_" ng-class="nvtSurNuevo.inmovablesClassList[88]" ng-click="nvtSurNuevo.showPropertyData(66, '20J', nvtSurNuevo.inmovables[88].idProperty)">
			<polyline id="_x32_0-J_00000156562064295269213770000008735231968072644004_" class="property nvt-sprite-2" points="1000.7,851.1 1015.7,778.8 
				1052,786.3 1037.1,858.5 1000.7,851.1 			"/>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 1020.9687 834.9904)" class="st1 st2 st10">NAVE 20J </text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1025.0056 786.8492)"><tspan x="0" y="0" class="st4 st5 st11">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1011.4618 850.6664)"><tspan x="0" y="0" class="st4 st5 st11">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 1012.3823 824.0208)"><tspan x="0" y="0" class="st4 st5 st14">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 1027.8308 837.2058)"><tspan x="0" y="0" class="st4 st5 st10">20</tspan><tspan x="8.1" y="0" class="st4 st5 st10">0.00 m2</tspan></text>
		</g>
		<g id="_x32_1-J_" ng-class="nvtSurNuevo.inmovablesClassList[89]" ng-click="nvtSurNuevo.showPropertyData(66, '21J', nvtSurNuevo.inmovables[89].idProperty)">
			<polyline id="_x32_1-J_00000062886468656682819490000007952236737058578347_"  class="property nvt-sprite-1" points="1037.1,858.5 1052,786.3 
				1088.4,793.9 1073.5,865.9 1037.1,858.5 			"/>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 1057.3286 842.5079)" class="st1 st2 st10">NAVE 21J </text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 1064.5922 843.7971)"><tspan x="0" y="0" class="st4 st5 st10">19</tspan><tspan x="8.1" y="0" class="st4 st5 st10">9.95 m2</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1061.3588 794.3608)"><tspan x="0" y="0" class="st4 st5 st11">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1048.1384 858.422)" class="st4 st5 st11">10.00</text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 1048.7336 831.5415)"><tspan x="0" y="0" class="st4 st5 st14">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
		</g>
		<g id="_x32_2-J_" ng-class="nvtSurNuevo.inmovablesClassList[90]" ng-click="nvtSurNuevo.showPropertyData(66, '22J', nvtSurNuevo.inmovables[90].idProperty)">
			<polyline id="_x32_2-J_00000026147128389156281200000001402247596344443554_" class="property nvt-sprite-2" points="1109.8,873.4 1073.5,865.9 
				1088.4,793.9 1124.8,801.4 1109.8,873.4 			"/>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 1093.6815 850.0304)" class="st1 st2 st10">NAVE 22J </text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 1100.9498 851.3157)"><tspan x="0" y="0" class="st4 st5 st10">19</tspan><tspan x="8.1" y="0" class="st4 st5 st10">9.37 m2</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1097.7194 801.8844)"><tspan x="0" y="0" class="st4 st5 st11">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9813 0.1959 -0.1961 0.9806 1084.1615 865.5475)"><tspan x="0" y="0" class="st4 st5 st18">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 1085.0908 839.0624)"><tspan x="0" y="0" class="st4 st5 st14">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
		</g>
		<g id="_x32_3-J_" ng-class="nvtSurNuevo.inmovablesClassList[91]" ng-click="nvtSurNuevo.showPropertyData(66, '23J', nvtSurNuevo.inmovables[91].idProperty)">
			<polyline id="_x32_3-J_00000054986950182003903180000010494157099553731729_"  class="property nvt-sprite-1" points="1109.8,873.4 1124.8,801.4 
				1161.1,808.9 1146.2,880.8 1109.8,873.4 			"/>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 1130.045 857.5546)" class="st1 st2 st10">NAVE 23J </text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 1137.3048 858.8331)"><tspan x="0" y="0" class="st4 st5 st10">19</tspan><tspan x="8.1" y="0" class="st4 st5 st10">8.64 m2</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1134.0824 809.4065)"><tspan x="0" y="0" class="st4 st5 st11">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9813 0.1959 -0.1961 0.9806 1120.5651 872.801)"><tspan x="0" y="0" class="st4 st5 st18">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 1121.4883 846.4032)"><tspan x="0" y="0" class="st4 st5 st14">19.9</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
		</g>
		<g id="_x32_4-J_" ng-class="nvtSurNuevo.inmovablesClassList[92]" ng-click="nvtSurNuevo.showPropertyData(66, '24J', nvtSurNuevo.inmovables[92].idProperty)">
			<polyline id="_x32_4-J_00000003082954928670269110000006149269307053102263_" class="property nvt-sprite-2" points="1146.2,880.8 1161.1,808.9 
				1197.5,816.4 1182.6,888.2 1146.2,880.8 			"/>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 1166.4022 865.0756)" class="st1 st2 st10">NAVE 24J </text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 1173.656 866.3538)"><tspan x="0" y="0" class="st4 st5 st10">19</tspan><tspan x="8.1" y="0" class="st4 st5 st10">7.91 m2</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1170.4382 816.9291)"><tspan x="0" y="0" class="st4 st5 st11">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9813 0.1959 -0.1961 0.9806 1156.9784 880.0554)"><tspan x="0" y="0" class="st4 st5 st18">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 1157.87 853.7966)"><tspan x="0" y="0" class="st4 st5 st14">19.8</tspan><tspan x="12.1" y="0" class="st4 st5 st14">3</tspan></text>
		</g>
		<g id="_x32_5-J_" ng-class="nvtSurNuevo.inmovablesClassList[93]" ng-click="nvtSurNuevo.showPropertyData(66, '25J', nvtSurNuevo.inmovables[93].idProperty)">
			<polyline id="_x32_5-J_00000156561366017396759200000018315213263666494102_"  class="property nvt-sprite-1" points="1183.2,888.3 1182.6,888.2 
				1197.5,816.4 1234.5,824.1 1219.5,895.5 1183.2,888.3 			"/>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 1203.8296 873.3659)" class="st1 st2 st10">NAVE 25J </text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 1211.4916 874.3592)"><tspan x="0" y="0" class="st4 st5 st10">20</tspan><tspan x="8.1" y="0" class="st4 st5 st10">0.48 m2</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1207.1351 824.5193)"><tspan x="0" y="0" class="st4 st5 st11">10.1</tspan><tspan x="12.1" y="0" class="st4 st5 st11">9</tspan></text>
			<text transform="matrix(0.9813 0.1959 -0.1961 0.9806 1193.6643 888.9446)"><tspan x="0" y="0" class="st4 st5 st18">10.1</tspan><tspan x="12.1" y="0" class="st4 st5 st18">5</tspan></text>
			<text transform="matrix(0.2028 -0.9785 0.9793 0.2027 1194.2612 861.1819)"><tspan x="0" y="0" class="st4 st5 st14">19.7</tspan><tspan x="12.1" y="0" class="st4 st5 st14">5</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1223.0035 867.0653)"><tspan x="0" y="0" class="st4 st5 st14">19.6</tspan><tspan x="12.1" y="0" class="st4 st5 st14">8</tspan></text>
			<g>
				<polyline class="st12" points="1214.7,826.6 1212.8,836.4 1208.8,830.6 1214.7,826.6 				"/>
				<polyline class="st13" points="1218.6,832.5 1212.8,836.4 1212.8,836.4 1214.7,826.6 				"/>
			</g>
		</g>
		<g id="LINEAS_DIVISORIAS_MODULO_J_00000030486616573863479190000016622963367914690494_">
			<line class="st9" x1="870.2" y1="748.7" x2="855.2" y2="821.4"/>
			<line class="st9" x1="906.6" y1="756.2" x2="891.6" y2="828.9"/>
			<line class="st9" x1="943" y1="763.8" x2="927.9" y2="836.3"/>
			<line class="st9" x1="979.3" y1="771.3" x2="964.3" y2="843.7"/>
			<line class="st9" x1="1015.7" y1="778.8" x2="1000.7" y2="851.1"/>
			<line class="st9" x1="1052" y1="786.3" x2="1037.1" y2="858.5"/>
			<line class="st9" x1="1088.4" y1="793.9" x2="1073.5" y2="865.9"/>
			<line class="st9" x1="1124.8" y1="801.4" x2="1109.8" y2="873.4"/>
			<line class="st9" x1="1161.1" y1="808.9" x2="1146.2" y2="880.8"/>
			<line class="st9" x1="1197.5" y1="816.4" x2="1182.6" y2="888.2"/>
		</g>
	</g>
	<g id="MODULO_K">
		<g id="_x31_-K_1_" ng-class="nvtSurNuevo.inmovablesClassList[94]" ng-click="nvtSurNuevo.showPropertyData(66, '1K', nvtSurNuevo.inmovables[94].idProperty)">
			<polyline id="_x31_-K"  class="property nvt-sprite-1" points="1171.3,183.8 1157.6,249.3 1066.8,230.3 1080.5,164.8 1171.3,183.8 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1104.6298 202.0411)" class="st1 st2 st16">NAVE 1K </text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1101.5519 208.9267)"><tspan x="0" y="0" class="st4 st5 st16">45</tspan><tspan x="8.1" y="0" class="st4 st5 st16">1.09 m2</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1077.8608 206.4398)"><tspan x="0" y="0" class="st4 st5 st14">18.1</tspan><tspan x="12.1" y="0" class="st4 st5 st14">4</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1161.4365 223.9378)"><tspan x="0" y="0" class="st4 st5 st14">18.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">4</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1117.0195 178.5295)"><tspan x="0" y="0" class="st4 st5 st18">25.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<g>
				<polyline class="st12" points="1082.3,199 1091.9,201.4 1085.9,205.1 1082.3,199 				"/>
				<polyline class="st13" points="1088.3,195.4 1091.9,201.4 1091.9,201.4 1082.3,199 				"/>
			</g>
		</g>
		<g id="_x32_-K_1_" ng-class="nvtSurNuevo.inmovablesClassList[95]" ng-click="nvtSurNuevo.showPropertyData(66, '2K', nvtSurNuevo.inmovables[95].idProperty)">
			<polyline id="_x32_-K" class="property nvt-sprite-2" points="1157.6,249.3 1148.5,292.9 1057.6,273.9 1066.8,230.3 1157.6,249.3 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1092.9252 256.539)" class="st1 st2 st16">NAVE 2K </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1066.4191 260.9881)"><tspan x="0" y="0" class="st4 st5 st14">12.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1149.998 278.4893)"><tspan x="0" y="0" class="st4 st5 st14">12.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1103.3026 244.06)"><tspan x="0" y="0" class="st4 st5 st18">25.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1091.9554 264.5118)"><tspan x="0" y="0" class="st4 st5 st16">30</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x33_-K_1_" ng-class="nvtSurNuevo.inmovablesClassList[96]" ng-click="nvtSurNuevo.showPropertyData(66, '3K', nvtSurNuevo.inmovables[96].idProperty)">
			<polyline id="_x33_-K"  class="property nvt-sprite-1" points="1148.5,292.9 1139.4,336.5 1048.5,317.5 1057.6,273.9 1148.5,292.9 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1084.3605 300.0952)" class="st1 st2 st16">NAVE 3K </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1057.2826 304.5626)"><tspan x="0" y="0" class="st4 st5 st14">12.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1140.8622 322.0659)"><tspan x="0" y="0" class="st4 st5 st14">12.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1094.1744 287.6382)"><tspan x="0" y="0" class="st4 st5 st18">25.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1082.5734 307.9162)"><tspan x="0" y="0" class="st4 st5 st16">30</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x34_-K_1_" ng-class="nvtSurNuevo.inmovablesClassList[97]" ng-click="nvtSurNuevo.showPropertyData(66, '4K', nvtSurNuevo.inmovables[97].idProperty)">
			<polyline id="_x34_-K" class="property nvt-sprite-2" points="1139.4,336.5 1130.2,380.1 1039.4,361.1 1048.5,317.5 1139.4,336.5 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1075.6639 343.898)" class="st1 st2 st16">NAVE 4K </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1048.1392 348.1375)"><tspan x="0" y="0" class="st4 st5 st14">12.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1131.7234 365.6418)"><tspan x="0" y="0" class="st4 st5 st14">12.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1085.0546 331.2141)"><tspan x="0" y="0" class="st4 st5 st18">25.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1074.0363 350.0451)"><tspan x="0" y="0" class="st4 st5 st16">30</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x35_-K_1_" ng-class="nvtSurNuevo.inmovablesClassList[98]" ng-click="nvtSurNuevo.showPropertyData(66, '5K', nvtSurNuevo.inmovables[98].idProperty)">
			<polyline id="_x35_-K"  class="property nvt-sprite-1" points="1130.2,380.1 1121.1,423.6 1030.3,404.6 1039.4,361.1 1130.2,380.1 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1067.8857 387.6197)" class="st1 st2 st16">NAVE 5K </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1039.0065 391.7128)"><tspan x="0" y="0" class="st4 st5 st14">12.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1122.5804 409.2139)"><tspan x="0" y="0" class="st4 st5 st14">12.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1075.9247 374.791)"><tspan x="0" y="0" class="st4 st5 st18">25.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1066.8014 394.0294)"><tspan x="0" y="0" class="st4 st5 st16">30</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x36_-K_1_" ng-class="nvtSurNuevo.inmovablesClassList[99]" ng-click="nvtSurNuevo.showPropertyData(66, '6K', nvtSurNuevo.inmovables[99].idProperty)">
			<polyline id="_x36_-K" class="property nvt-sprite-2" points="1121.1,423.6 1112,467.2 1021.1,448.2 1030.3,404.6 1121.1,423.6 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1056.8126 430.7938)" class="st1 st2 st16">NAVE 6K </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1029.8649 435.2881)"><tspan x="0" y="0" class="st4 st5 st14">12.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1113.4479 452.7892)"><tspan x="0" y="0" class="st4 st5 st14">12.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1066.7976 418.3729)"><tspan x="0" y="0" class="st4 st5 st18">25.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1054.8153 437.9789)"><tspan x="0" y="0" class="st4 st5 st16">30</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x37_-K_1_" ng-class="nvtSurNuevo.inmovablesClassList[100]" ng-click="nvtSurNuevo.showPropertyData(66, '7K', nvtSurNuevo.inmovables[100].idProperty)">
			<polyline id="_x37_-K"  class="property nvt-sprite-1" points="1112,467.2 1102.9,510.8 1012,491.8 1021.1,448.2 1112,467.2 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1050.302 474.9222)" class="st1 st2 st16">NAVE 7K </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1020.7252 478.8684)"><tspan x="0" y="0" class="st4 st5 st14">12.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1104.3075 496.3683)"><tspan x="0" y="0" class="st4 st5 st14">12.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1057.6722 461.9467)"><tspan x="0" y="0" class="st4 st5 st18">25.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1048.1404 482.2283)"><tspan x="0" y="0" class="st4 st5 st16">30</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x38_-K_1_" ng-class="nvtSurNuevo.inmovablesClassList[101]" ng-click="nvtSurNuevo.showPropertyData(66, '8K', nvtSurNuevo.inmovables[101].idProperty)">
			<polyline id="_x38_-K" class="property nvt-sprite-2" points="1102.9,510.8 1093.7,554.4 1002.9,535.4 1012,491.8 1102.9,510.8 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1042.1805 518.8471)" class="st1 st2 st16">NAVE 8K </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1011.5901 522.4411)"><tspan x="0" y="0" class="st4 st5 st14">12.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1095.1626 539.9449)"><tspan x="0" y="0" class="st4 st5 st14">12.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1048.5436 505.5267)"><tspan x="0" y="0" class="st4 st5 st18">25.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1039.005 526.0345)"><tspan x="0" y="0" class="st4 st5 st16">30</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x39_-K_1_" ng-class="nvtSurNuevo.inmovablesClassList[102]" ng-click="nvtSurNuevo.showPropertyData(66, '9K', nvtSurNuevo.inmovables[102].idProperty)">
			<polyline id="_x39_-K"  class="property nvt-sprite-1" points="1093.7,554.4 1084.6,597.9 993.8,578.9 1002.9,535.4 1093.7,554.4 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1031.4424 559.0559)" class="st1 st2 st16">NAVE 9K </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1002.4589 566.0237)"><tspan x="0" y="0" class="st4 st5 st14">12.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1086.0312 583.5184)"><tspan x="0" y="0" class="st4 st5 st14">12.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1039.4213 549.1052)"><tspan x="0" y="0" class="st4 st5 st18">25.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1027.8302 566.6339)"><tspan x="0" y="0" class="st4 st5 st16">30</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x31_0-K_1_" ng-class="nvtSurNuevo.inmovablesClassList[103]" ng-click="nvtSurNuevo.showPropertyData(66, '10K', nvtSurNuevo.inmovables[103].idProperty)">
			<polyline id="_x31_0-K" class="property nvt-sprite-2" points="1084.6,597.9 1075.5,641.5 984.6,622.5 993.8,578.9 1084.6,597.9 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1021.7084 605.5349)" class="st1 st2 st16">NAVE 10K </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 993.3116 609.5928)"><tspan x="0" y="0" class="st4 st5 st14">12.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1076.8969 627.0974)"><tspan x="0" y="0" class="st4 st5 st14">12.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1030.2959 592.684)"><tspan x="0" y="0" class="st4 st5 st18">25.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1017.5959 612.021)"><tspan x="0" y="0" class="st4 st5 st16">30</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x31_1-K_1_" ng-class="nvtSurNuevo.inmovablesClassList[104]" ng-click="nvtSurNuevo.showPropertyData(66, '11K', nvtSurNuevo.inmovables[104].idProperty)">
			<polyline id="_x31_1-K"  class="property nvt-sprite-1" points="1075.5,641.5 1066.4,685.1 975.5,666.1 984.6,622.5 1075.5,641.5 			"/>
			<text transform="matrix(0.9094 0.2068 -0.1917 0.9815 1012.5331 649.0694)" class="st1 st2 st19">NAVE 11K</text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1007.9987 655.6836)"><tspan x="0" y="0" class="st4 st5 st16">30</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 984.176 653.1635)"><tspan x="0" y="0" class="st4 st5 st14">12.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1067.7548 670.6701)"><tspan x="0" y="0" class="st4 st5 st14">12.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1021.1641 636.2604)"><tspan x="0" y="0" class="st4 st5 st18">25.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
		</g>
		<g id="_x31_2-K_1_" ng-class="nvtSurNuevo.inmovablesClassList[105]" ng-click="nvtSurNuevo.showPropertyData(66, '12K', nvtSurNuevo.inmovables[105].idProperty)">
			<polyline id="_x31_2-K" class="property nvt-sprite-2" points="975.5,666.1 1066.4,685.1 1057.2,728.7 966.3,709.9 975.5,666.1 			"/>
			<text transform="matrix(0.9541 0.2064 -0.2011 0.9796 1003.533 692.903)" class="st1 st2 st20">NAVE 12K</text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 998.8672 699.2581)"><tspan x="0" y="0" class="st4 st5 st16">30</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.68 m2</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 975.0138 696.8458)"><tspan x="0" y="0" class="st4 st5 st14">12.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">5</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1058.5929 714.342)"><tspan x="0" y="0" class="st4 st5 st14">12.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1004.4319 716.2871)"><tspan x="0" y="0" class="st4 st5 st11">25.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1012.0388 679.8342)"><tspan x="0" y="0" class="st4 st5 st18">25.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<g>
				<polyline class="st12" points="980.5,689.5 990.2,691.9 984.2,695.5 980.5,689.5 				"/>
				<polyline class="st13" points="986.6,685.8 990.2,691.9 990.2,691.9 980.5,689.5 				"/>
			</g>
		</g>
		<g id="LINEAS_DIVISORIAS_MODULO_K">
			<line class="st9" x1="1066.4" y1="685.1" x2="975.5" y2="666.1"/>
			<line class="st9" x1="1075.5" y1="641.5" x2="984.6" y2="622.5"/>
			<line class="st9" x1="1084.6" y1="597.9" x2="993.8" y2="578.9"/>
			<line class="st9" x1="1093.7" y1="554.4" x2="1002.9" y2="535.4"/>
			<line class="st9" x1="1102.9" y1="510.8" x2="1012" y2="491.8"/>
			<line class="st9" x1="1112" y1="467.2" x2="1021.1" y2="448.2"/>
			<line class="st9" x1="1121.1" y1="423.6" x2="1030.3" y2="404.6"/>
			<line class="st9" x1="1130.2" y1="380.1" x2="1039.4" y2="361.1"/>
			<line class="st9" x1="1139.4" y1="336.5" x2="1048.5" y2="317.5"/>
			<line class="st9" x1="1148.5" y1="292.9" x2="1057.6" y2="273.9"/>
			<line class="st9" x1="1157.6" y1="249.3" x2="1066.8" y2="230.3"/>
		</g>
	</g>
	<g id="MODULO_L">
		<g id="_x31_-L_" ng-class="nvtSurNuevo.inmovablesClassList[106]" ng-click="nvtSurNuevo.showPropertyData(66, '1L', nvtSurNuevo.inmovables[106].idProperty)">
			<polyline id="_x31_-L_00000134963472597490972590000006896510549862651833_"  class="property nvt-sprite-1" points="1244,199 1236.4,235.3 
				1163.7,220.1 1171.3,183.8 1244,199 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1189.9614 204.6956)" class="st1 st2 st16">NAVE 1L </text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1186.4857 211.4421)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1237.1312 224.4996)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1171.7114 210.8189)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1198.7959 195.6336)"><tspan x="0" y="0" class="st4 st5 st18">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<g>
				<polyline class="st12" points="1222.6,211.1 1232.3,213.5 1226.3,217.2 1222.6,211.1 				"/>
				<polyline class="st13" points="1228.7,207.5 1232.3,213.5 1232.3,213.5 1222.6,211.1 				"/>
			</g>
		</g>
		<g id="_x32_-L_" ng-class="nvtSurNuevo.inmovablesClassList[107]" ng-click="nvtSurNuevo.showPropertyData(66, '2L', nvtSurNuevo.inmovables[107].idProperty)">
			<polyline id="_x32_-L_00000040553533590505500420000003306268818090024381_" class="property nvt-sprite-2" points="1236.4,235.3 1228.8,271.6 
				1156.1,256.4 1163.7,220.1 1236.4,235.3 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1183.0153 241.1447)" class="st1 st2 st16">NAVE 2L </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1229.5179 260.8137)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1164.1057 247.1346)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1191.1859 231.9464)"><tspan x="0" y="0" class="st4 st5 st18">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1181.0393 248.702)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x33_-L_" ng-class="nvtSurNuevo.inmovablesClassList[108]" ng-click="nvtSurNuevo.showPropertyData(66, '3L', nvtSurNuevo.inmovables[108].idProperty)">
			<polyline id="_x33_-L_00000035503604038353980470000004827631361454561440_"  class="property nvt-sprite-1" points="1228.8,271.6 1221.2,307.9 
				1148.5,292.7 1156.1,256.4 1228.8,271.6 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1175.119 277.3522)" class="st1 st2 st16">NAVE 3L </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1221.9128 297.127)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1156.5016 283.4475)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1183.5773 268.2574)"><tspan x="0" y="0" class="st4 st5 st18">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1173.6559 285.5684)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x34_-L_" ng-class="nvtSurNuevo.inmovablesClassList[109]" ng-click="nvtSurNuevo.showPropertyData(66, '4L', nvtSurNuevo.inmovables[109].idProperty)">
			<polyline id="_x34_-L_00000042726639596772850540000011018392168665000847_" class="property nvt-sprite-2" points="1221.2,307.9 1213.6,344.3 
				1140.9,329.1 1148.5,292.7 1221.2,307.9 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1167.8612 313.7366)" class="st1 st2 st16">NAVE 4L </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1214.3119 333.4441)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1148.8971 319.7674)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1175.9716 304.578)"><tspan x="0" y="0" class="st4 st5 st18">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1165.8257 321.193)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x35_-L_" ng-class="nvtSurNuevo.inmovablesClassList[110]" ng-click="nvtSurNuevo.showPropertyData(66, '5L', nvtSurNuevo.inmovables[110].idProperty)">
			<polyline id="_x35_-L_00000086685726610411150760000016912693727830236593_"  class="property nvt-sprite-1" points="1213.6,344.3 1206,380.6 
				1133.3,365.4 1140.9,329.1 1213.6,344.3 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1159.6793 349.9309)" class="st1 st2 st16">NAVE 5L </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1206.6971 369.7598)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1141.2858 356.0769)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1168.3638 340.8942)"><tspan x="0" y="0" class="st4 st5 st18">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1157.5955 357.5074)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x36_-L_" ng-class="nvtSurNuevo.inmovablesClassList[111]" ng-click="nvtSurNuevo.showPropertyData(66, '6L', nvtSurNuevo.inmovables[111].idProperty)">
			<polyline id="_x36_-L_00000069374331014824470060000013224618956043752347_" class="property nvt-sprite-2" points="1206,380.6 1198.4,416.9 
				1125.7,401.7 1133.3,365.4 1206,380.6 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1152.2802 386.342)" class="st1 st2 st16">NAVE 6L </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1199.0981 406.0724)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1133.686 392.3978)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1160.7642 377.2051)"><tspan x="0" y="0" class="st4 st5 st18">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1149.9929 393.8227)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x37_-L_" ng-class="nvtSurNuevo.inmovablesClassList[112]" ng-click="nvtSurNuevo.showPropertyData(66, '7L', nvtSurNuevo.inmovables[112].idProperty)">
			<polyline id="_x37_-L_00000100371226360205875830000011445607366111602339_"  class="property nvt-sprite-1" points="1198.4,416.9 1190.8,453.2 
				1118.1,438 1125.7,401.7 1198.4,416.9 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1144.8607 422.6454)" class="st1 st2 st16">NAVE 7L </text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1191.4976 442.3881)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1126.0829 428.7109)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1153.1554 413.5211)"><tspan x="0" y="0" class="st4 st5 st18">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1143.0121 430.3607)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x38_-L_" ng-class="nvtSurNuevo.inmovablesClassList[113]" ng-click="nvtSurNuevo.showPropertyData(66, '8L', nvtSurNuevo.inmovables[113].idProperty)">
			<polyline id="_x38_-L_00000174565707402785375460000016510211365803314571_" class="property nvt-sprite-2" points="1190.8,453.2 1183.2,489.5 
				1110.5,474.3 1118.1,438 1190.8,453.2 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1139.6686 459.8495)" class="st1 st2 st16">NAVE 8L</text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1183.8948 478.7043)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1118.4777 465.0292)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1145.548 449.8354)"><tspan x="0" y="0" class="st4 st5 st18">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1137.297 467.1858)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x39_-L_" ng-class="nvtSurNuevo.inmovablesClassList[114]" ng-click="nvtSurNuevo.showPropertyData(66, '9L', nvtSurNuevo.inmovables[114].idProperty)">
			<polyline id="_x39_-L_00000077283428762368561490000003892272615846571411_"  class="property nvt-sprite-1" points="1183.2,489.5 1175.6,525.8 
				1102.9,510.6 1110.5,474.3 1183.2,489.5 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1131.9512 495.753)" class="st1 st2 st16">NAVE 9L</text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1176.2825 515.0231)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1110.8687 501.3416)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1137.9434 486.1513)"><tspan x="0" y="0" class="st4 st5 st18">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1127.8025 503.0263)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x31_0-L_" ng-class="nvtSurNuevo.inmovablesClassList[115]" ng-click="nvtSurNuevo.showPropertyData(66, '10L', nvtSurNuevo.inmovables[115].idProperty)">
			<polyline id="_x31_0-L_00000152237244215260931950000010506509007107552141_" class="property nvt-sprite-2" points="1175.6,525.8 1168,562.1 
				1095.3,547 1102.9,510.6 1175.6,525.8 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1122.4293 531.6756)" class="st1 st2 st16">NAVE 10L</text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1168.6831 551.3326)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1103.2701 537.6568)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1130.3376 522.4669)"><tspan x="0" y="0" class="st4 st5 st18">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1121.4856 539.3594)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x31_1-L_" ng-class="nvtSurNuevo.inmovablesClassList[116]" ng-click="nvtSurNuevo.showPropertyData(66, '11L', nvtSurNuevo.inmovables[116].idProperty)">
			<polyline id="_x31_1-L_00000129916102901870901130000009788595143419842709_"  class="property nvt-sprite-1" points="1168,562.1 1160.4,598.5 
				1087.7,583.3 1095.3,547 1168,562.1 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1115.783 568.1848)" class="st1 st2 st16">NAVE 11L</text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1161.0725 587.6526)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1095.6616 573.9718)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1122.73 558.7781)"><tspan x="0" y="0" class="st4 st5 st18">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1113.4462 575.4036)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x31_2-L_" ng-class="nvtSurNuevo.inmovablesClassList[117]" ng-click="nvtSurNuevo.showPropertyData(66, '12L', nvtSurNuevo.inmovables[117].idProperty)">
			<polyline id="_x31_2-L_00000165220533968841139210000002445364307760537749_" class="property nvt-sprite-2" points="1160.4,598.5 1152.8,634.8 
				1080.1,619.6 1087.7,583.3 1160.4,598.5 			"/>
			<text transform="matrix(0.8455 0.2074 -0.1782 0.984 1108.2617 604.613)" class="st1 st2 st21">NAVE 12L</text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1153.4729 623.9631)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1088.0537 610.2885)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1115.1271 595.0994)"><tspan x="0" y="0" class="st4 st5 st18">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1104.9912 612.0219)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x31_3-L_" ng-class="nvtSurNuevo.inmovablesClassList[118]" ng-click="nvtSurNuevo.showPropertyData(66, '13L', nvtSurNuevo.inmovables[118].idProperty)">
			<polyline id="_x31_3-L_00000129894696130955558920000015783995556706517672_"  class="property nvt-sprite-1" points="1152.8,634.8 1145.2,671.1 
				1072.5,655.9 1080.1,619.6 1152.8,634.8 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1100.7196 640.8906)" class="st1 st2 st16">NAVE 13L</text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1145.8638 660.2815)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1080.4463 646.5983)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1107.5237 631.4095)"><tspan x="0" y="0" class="st4 st5 st18">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1097.3652 648.3488)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x31_4-L_" ng-class="nvtSurNuevo.inmovablesClassList[119]" ng-click="nvtSurNuevo.showPropertyData(66, '14L', nvtSurNuevo.inmovables[119].idProperty)">
			<polyline id="_x31_4-L_00000084506900855346754420000017273063114272641720_" class="property nvt-sprite-2" points="1145.2,671.1 1137.6,707.4 
				1064.9,692.2 1072.5,655.9 1145.2,671.1 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1093.1941 677.2192)" class="st1 st2 st16">NAVE 14L</text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1138.26 696.5976)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1072.8467 682.9142)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1099.9164 667.7278)"><tspan x="0" y="0" class="st4 st5 st18">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1090.12 684.347)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.00 m2</tspan></text>
		</g>
		<g id="_x31_5-L_" ng-class="nvtSurNuevo.inmovablesClassList[120]" ng-click="nvtSurNuevo.showPropertyData(66, '15L', nvtSurNuevo.inmovables[120].idProperty)">
			<polyline id="_x31_5-L_00000013159905136244768500000005121282843410546054_"  class="property nvt-sprite-1" points="1064.9,692.2 1137.6,707.4 
				1130,743.7 1057.2,728.7 1064.9,692.2 			"/>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1085.6654 713.553)" class="st1 st2 st16">NAVE 15L</text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1080.0247 719.856)"><tspan x="0" y="0" class="st4 st5 st16">20</tspan><tspan x="8.1" y="0" class="st4 st5 st16">0.43 m2</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1130.6542 732.9092)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">0</tspan></text>
			<text transform="matrix(0.2062 -0.9778 0.9785 0.2061 1065.2456 719.2318)"><tspan x="0" y="0" class="st4 st5 st14">10.0</tspan><tspan x="12.1" y="0" class="st4 st5 st14">4</tspan></text>
			<text transform="matrix(0.9792 0.2062 -0.2063 0.9785 1092.3146 704.0443)"><tspan x="0" y="0" class="st4 st5 st18">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st18">0</tspan></text>
			<text transform="matrix(0.9799 0.2028 -0.2029 0.9792 1086.2467 733.2162)"><tspan x="0" y="0" class="st4 st5 st11">20.0</tspan><tspan x="12.1" y="0" class="st4 st5 st11">0</tspan></text>
			<g>
				<polyline class="st12" points="1117.7,720.8 1127.3,723.1 1121.3,726.8 1117.7,720.8 				"/>
				<polyline class="st13" points="1123.7,717.1 1127.3,723.1 1127.3,723.1 1117.7,720.8 				"/>
			</g>
		</g>
		<g id="LINEAS_DIVISORIAS_00000090986357361081689200000011981990578591014066_">
			<g id="LIINEAS_DIVISORIAS_MODULO_L_00000178924155439887019090000006014083340124549515_">
				<line class="st9" x1="1064.9" y1="692.2" x2="1137.5" y2="707.4"/>
				<line class="st9" x1="1072.5" y1="655.9" x2="1145.2" y2="671.1"/>
				<line class="st9" x1="1080.1" y1="619.6" x2="1152.8" y2="634.8"/>
				<line class="st9" x1="1087.7" y1="583.3" x2="1160.4" y2="598.5"/>
				<line class="st9" x1="1095.3" y1="546.9" x2="1168" y2="562.1"/>
				<line class="st9" x1="1102.9" y1="510.6" x2="1175.6" y2="525.8"/>
				<line class="st9" x1="1110.5" y1="474.3" x2="1183.2" y2="489.5"/>
				<line class="st9" x1="1118.1" y1="438" x2="1190.8" y2="453.2"/>
				<line class="st9" x1="1125.7" y1="401.7" x2="1198.4" y2="416.9"/>
				<line class="st9" x1="1133.3" y1="365.4" x2="1206" y2="380.6"/>
				<line class="st9" x1="1140.9" y1="329.1" x2="1213.6" y2="344.3"/>
				<line class="st9" x1="1148.5" y1="292.7" x2="1221.2" y2="307.9"/>
				<line class="st9" x1="1156.1" y1="256.4" x2="1228.8" y2="271.6"/>
			</g>
			<line class="st9" x1="1171.3" y1="183.8" x2="1057.2" y2="728.7"/>
		</g>
	</g>
</g>
<g id="COMPLEMENTO">
	<polygon class="st22" points="2.2,41 152.4,24.3 234.6,52.4 1043,218.9 1087.7,2.3 1365.1,199.5 1219.2,896.2 818.5,814.2 
		844.4,690.6 842.6,690 887.1,476.4 888.4,475.9 914.3,350.2 253.1,213.7 169.7,179.1 19.5,195.9 	"/>
	<text transform="matrix(1 0 0 1 1194.2552 116.4458)"><tspan x="0" y="0" class="st4 st2 st23">CUARTO DE</tspan><tspan x="-8.8" y="9.5" class="st4 st2 st23">CONTENEDORES</tspan></text>
	<text transform="matrix(1 0 0 1 1122.4916 83.5386)"><tspan x="0" y="0" class="st4 st2 st23">CUARTO DE</tspan><tspan x="1.6" y="9.5" class="st4 st2 st23">CISTERNAS</tspan></text>
</g>
</svg>

        </div>
	</div>
</body>
</html>