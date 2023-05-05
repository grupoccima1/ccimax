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

<body ng-controller="NvtAeropuertoCtrl as nvtAeropuerto">
  
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

	<div class="modal__panel" ng-class="nvtAeropuerto.nvtAeropuertoListDialogDisplay">
		<div class="container__panel">
			<div class="toolbar__panel blue-txt">
				<p>AEROPUERTO - Naves</p>
				<span class="close__panel" ng-click="nvtAeropuerto.closeNvtAeropuertoListDialog()"><i class="material-icons" style="margin:0;">close</i></span>
			</div>
			<div class="content__panel">
				<ul class="saufth-collapsable">
					<li ng-repeat="property in nvtAeropuerto.inmovablesData.inmovables">
						<div class="collapsable__header" ng-click="">
							<div>
								<p class="futura-book collapsable__heading" style="margin: 0;">Nave {{property.number}}</p>
								<p class="collapsable__text" style="margin: 0;">{{property.condominium}}</p>
							</div>
							<div class="pl-40">
								<p class="collapsable__heading" style="margin: 0;">{{property.type}}</p>
								<p class="collapsable__text" style="margin: 0;">{{property.area}} M&sup2;</p>
							</div>
							<div flex></div>
							<div class="blue-pb00__bg">
								<div class="p-20 pointer" ng-class="nvtAeropuerto.inmovablesClassList[$index]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[$index])"></div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="nvtAeropuerto.dialogDisplay">
		<div class="backdrop-dialog" ng-click="nvtAeropuerto.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="nvtAeropuerto.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{nvtAeropuerto.propertyData.reference}}</p>
				<ul class="saufth-collapsable">
					<li ng-repeat="user in nvtAeropuerto.activeUsers" ng-if="user.idProfile > 1">
						<div class="saufth-collapsable-header" ng-click="nvtAeropuerto.selectUser(lead.idLead, $index)" ng-class="nvtAeropuerto.activeUsers[$index].collapsableHeaderClass">
							<div style="display:flex;"><i class="material-icons pr-15">account_circle</i>{{user.name + ' ' + user.last_name}}</div>
							<div class="py-5 pl-15"></div>
							<div class="saufth-badge blue-bg light-txt ml-15">{{user.leads.length}}</div>
						</div>
						<ul class="saufth-collapsable-body" ng-class="nvtAeropuerto.activeUsers[$index].collapsableBodyClass">
							<li class="saufth-collapsable-body-li" ng-repeat="lead in user.leads">
								<div class="saufth-collapsable-item-h" ng-click="nvtAeropuerto.selectLeadPropertyStatus(lead.idUser, lead.idLead)">
									<i class="material-icons px-15">assignment_ind</i>{{lead.name + ' ' + lead.last_name}}
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="nvtAeropuerto.dialogStatusDisplay">
		<div class="backdrop-dialog" ng-click="nvtAeropuerto.closeDialogStatus()"></div>
		<div class="container-dialog p-20 status-dialog">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="nvtAeropuerto.closeDialogStatus()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{nvtAeropuerto.propertyData.reference}}</p>
				<ul class="saufth-collapsable w100">
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtAeropuerto.setStatus(1)"><div class="color-block pb-property-active-bg mr-15"></div>Disponible</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtAeropuerto.setStatus(6)"><div class="color-block darkgray__bg mr-15"></div>Estratégico</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtAeropuerto.setStatus(2)"><div class="color-block pb_lightred-bg mr-15"></div>En espera</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtAeropuerto.setStatus(3)"><div class="color-block brown mr-15"></div>Apartado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtAeropuerto.setStatus(4)"><div class="color-block mustard-bg mr-15"></div>Enganchado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtAeropuerto.setStatus(5)"><div class="color-block pb_teal-bg mr-15"></div>Vendido</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="plano_container">

		<div class="container mt-64">
			<div class="row quote-header">
				<div class="col s12">
					<h1 class="center-align">AEROPUERTO</h1>
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
				<button class="btn-flat right"><i style="font-size:30px;" class="material-icons" ng-click="nvtAeropuerto.showInmovablesList()">list</i></button>
			</div>
		</div>

    	<svg version="1.1" class="quote__map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			viewBox="0 0 1366 1099" style="enable-background:new 0 0 1366 1099;" xml:space="preserve">
			
			<style type="text/css">
				.st1{fill:#FFFFFF;}
				.st3{font-size:8.4568px;}
				.st4{font-size:8.4517px;}
				.st5{font-size:8.45px;}
				.st6{opacity:0.6;fill:#DBAE4C;enable-background:new;}
				.st7{fill:#FFFF00;}
				.st9{font-size:16.9px;}
				.st11{font-size:16.9135px;}
				.st12{font-size:8.4652px;}
				.st13{font-size:8.4538px;}
				.st14{font-size:8.4606px;}
				.st15{font-size:8.469px;}
			</style>

			<image style="overflow:visible;" width="1366" height="1099" xlink:href="media/assets/img/navetec/app/aeropuerto/aeropuerto.jpg"></image>

			<g id="islas_aeropuerto">
				<g id="isla_a">
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[0]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[0])">
						<polygon class="property nvt-sprite-1" points="920,191.8 1184.2,191.8 1198,261 923.3,271.8"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1044.0144 240.7448)" class="st1 futura-book st3">602.44 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1079.8555 235.0744)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1053.8248 263.2945)" class="st1 futura-book st3">47.65</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1053.8248 200.5246)" class="st1 futura-book st3">45.60</text>
						<text transform="matrix(0.2 0.9798 -0.9798 0.2 1178.3547 211.0252)" class="st1 futura-book st4">12.25</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 925.3043 221.505)" class="st1 futura-book st5">14.00</text>
						
						<rect x="1059.8" y="203.2" transform="matrix(0.6925 -0.7214 0.7214 0.6925 177.6176 831.1664)" class="st6" width="8.1" height="8.1"/>
						<polygon class="st6" points="1064,213 1063.9,207.3 1063.8,201.4 1069.6,207.1"/>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1034.3451 227.565)" class="st7 futura-light st9">LOTE 1A</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[1]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[1])">
						<polygon class="property nvt-sprite-2" points="923.3,271.8 1198,261 1214.1,341.7 926.2,352.8"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1051.4143 321.0943)" class="st1 futura-book st3">680.54 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1087.2554 315.4239)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1061.2249 343.6445)" class="st1 futura-book st3">49.89</text>
						<text transform="matrix(0.2 0.9798 -0.9798 0.2 1194.2145 290.3156)" class="st1 futura-book st4">14.18</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 929.5347 301.855)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1041.8146 307.8443)" class="st7 futura-light st11">LOTE 2A</text>
						
						<rect x="1067" y="281.7" transform="matrix(0.6925 -0.7214 0.7214 0.6925 123.1632 860.511)" class="st6" width="8.1" height="8.1"/>
						<polygon class="st6" points="1071.2,291.5 1071.1,285.9 1071,280 1076.8,285.6"/>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[2]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[2])">
						<polygon class="property nvt-sprite-1" points="926.2,352.8 1214.1,341.7 1230.3,422.2 929.5,433.8"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1057.1948 399.2949)" class="st1 futura-book st3">711.84 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1093.0359 393.6244)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1067.0048 422.9045)" class="st1 futura-book st3">52.13</text>
						<text transform="matrix(0.2 0.9798 -0.9798 0.2 1209.5039 371.6948)" class="st1 futura-book st4">14.18</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 932.1441 383.235)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1047.5951 386.0449)" class="st7 futura-light st11">LOTE 3A</text>
						
						<rect x="1072.6" y="359.6" transform="matrix(0.6925 -0.7214 0.7214 0.6925 68.7032 888.5297)" class="st6" width="8.1" height="8.1"/>
						<polygon class="st6" points="1076.8,369.4 1076.7,363.8 1076.6,357.9 1082.5,363.5"/>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[3]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[3])">
						<polygon class="property nvt-sprite-2" points="929.5,433.8 1230.3,422.2 1246.3,502.5 932.9,515"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1062.2046 480.0947)" class="st1 futura-book st3">743.14 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1098.0457 474.4243)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1072.0048 503.7043)" class="st1 futura-book st3">54.36</text>
						<text transform="matrix(0.2 0.9798 -0.9798 0.2 1226.1344 451.4359)" class="st1 futura-book st4">14.18</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 935.0347 464.025)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1052.6049 466.8448)" class="st7 futura-light st11">LOTE 4A</text>
						
						<rect x="1077.2" y="440.4" transform="matrix(0.6925 -0.7214 0.7214 0.6925 11.8421 916.6924)" class="st6" width="8.1" height="8.1"/>
						<polygon class="st6" points="1081.4,450.2 1081.3,444.6 1081.2,438.7 1087.1,444.3"/>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[4]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[4])">
						<polygon class="property nvt-sprite-1" points="932.9,515 1246.3,502.5 1262.5,583.1 935.7,596"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1067.6743 560.2747)" class="st1 futura-book st3">774.45 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1103.5154 554.6042)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1077.4852 584.9344)" class="st1 futura-book st3">56.60</text>
						<text transform="matrix(0.2 0.9798 -0.9798 0.2 1242.1844 532.6649)" class="st1 futura-book st4">14.18</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 938.3941 544.205)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1058.0746 547.0247)" class="st7 futura-light st11">L</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1066.0653 546.7051)" class="st7 futura-light st11">O</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1077.7045 546.239)" class="st7 futura-light st11">TE 5A</text>
						
						<rect x="1082.8" y="520.6" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -44.2748 945.4)" class="st6" width="8.1" height="8.1"/>
						<polygon class="st6" points="1087.1,530.4 1086.9,524.8 1086.8,518.9 1092.7,524.5"/>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[5]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[5])">
						<polygon class="property nvt-sprite-2" points="935.7,596 1262.5,583.1 1281.3,676.9 939.1,677"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1074.2748 645.2648)" class="st1 futura-book st3">874.17 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1110.1158 639.5944)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.2 0.9798 -0.9798 0.2 1258.2936 617.6552)" class="st1 futura-book st4">16.62</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 941.816 629.195)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1064.675 632.0148)" class="st7 futura-light st11">L</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1072.6648 631.6953)" class="st7 futura-light st11">O</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1084.3048 631.2297)" class="st7 futura-light st11">TE 6A</text>
						
						<rect x="1089" y="605.5" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -103.686 975.9585)" class="st6" width="8.1" height="8.1"/>
						<polygon class="st6" points="1093.2,615.4 1093.1,609.7 1093,603.8 1098.8,609.5"/>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[6]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[6])">
						<polygon class="property nvt-sprite-1" points="944.9,821.8 939.1,677 1008.8,677.1 1014.4,821.8"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 963.7751 686.6743)" class="st1 futura-book st3">12.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 967.8651 818.6348)" class="st1 futura-book st3">12.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 944.5152 738.075)" class="st1 futura-book st5">25.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 1002.2144 738.075)" class="st1 futura-book st5">25.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 958.9047 773.0151)" class="st1 futura-book st3">300.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 994.7457 767.3437)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 960.215 729.7348)" class="st7 futura-light st11">L</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 968.2047 729.4152)" class="st7 futura-light st11">O</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 979.8448 728.9496)" class="st7 futura-light st11">TE</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 969.7556 749.6653)" class="st7 futura-light st11">7A</text>
						
						<rect x="974.9" y="704" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -209.8022 923.9765)" class="st6" width="8.1" height="8.1"/>
						<polygon class="st6" points="979.2,713.8 979.1,708.2 978.9,702.3 984.8,708"/>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[7]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[7])">
						<polygon class="property nvt-sprite-2" points="1014.5,821.8 1008.9,677 1078.2,677 1083.9,821.8"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1033.3346 686.6744)" class="st1 futura-book st3">12.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1037.4246 818.6349)" class="st1 futura-book st3">12.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 1071.7651 738.075)" class="st1 futura-book st5">25.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1026.0345 773.0146)" class="st1 futura-book st3">300.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1061.8756 767.3442)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1027.3448 729.7344)" class="st7 futura-light st11">L</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1035.3345 729.4148)" class="st7 futura-light st11">O</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1046.9746 728.9492)" class="st7 futura-light st11">TE</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1036.8864 749.6658)" class="st7 futura-light st11">8A</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[8]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[8])">
						<polygon class="property nvt-sprite-1" points="1083.8,821.8 1078.1,677 1147.6,676.9 1153.4,821.8"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1102.6351 686.6741)" class="st1 futura-book st3">12.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1106.7251 818.6346)" class="st1 futura-book st3">12.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 1141.0659 738.075)" class="st1 futura-book st5">25.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1095.335 773.0144)" class="st1 futura-book st3">300.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1131.176 767.344)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1096.6443 729.7351)" class="st7 futura-light st11">L</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1104.635 729.4155)" class="st7 futura-light st11">O</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1116.2751 728.9499)" class="st7 futura-light st11">TE</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1106.1859 749.6656)" class="st7 futura-light st11">9A</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[9]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[9])">
						<polygon class="property nvt-sprite-2" points="1147.6,676.9 1153.4,821.8 1223,821.8 1217.1,677"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1172.0748 686.6849)" class="st1 futura-book st3">12.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1176.1643 818.6347)" class="st1 futura-book st3">12.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 1210.5151 738.075)" class="st1 futura-book st5">25.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1164.785 773.015)" class="st1 futura-book st3">300.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1200.6251 767.3446)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1166.0846 729.7351)" class="st7 futura-light st11">L</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1174.0753 729.4155)" class="st7 futura-light st11">O</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1185.7144 728.9499)" class="st7 futura-light st11">TE</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1170.9355 749.8532)" class="st7 futura-light st11">10A</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[10]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[10])">
						<polygon class="property nvt-sprite-1" points="1281.3,676.9 1217.1,677 1223,821.8 1310.3,821.8"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1242.7646 686.675)" class="st1 futura-book st3">11.09</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1252.145 818.635)" class="st1 futura-book st3">15.68</text>
						<text transform="matrix(0.2 0.9798 -0.9798 0.2 1284.8848 738.595)" class="st1 futura-book st4">25.50</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1235.4753 773.0148)" class="st1 futura-book st3">327.56 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1271.3154 767.3444)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1236.7847 729.7346)" class="st7 futura-light st11">L</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1244.7753 729.4149)" class="st7 futura-light st11">O</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1256.4144 728.9493)" class="st7 futura-light st11">TE</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 1241.6355 749.8527)" class="st7 futura-light st11">11A</text>
					</g>
				</g>
				<g id="isla_b">
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[11]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[11])">
						<polygon class="property nvt-sprite-2" points="834.3,73.8 831.3,-0.2 622.8,0 626.1,82"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 711.7446 51.8647)" class="st1 futura-book st3">487.93 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 747.5857 46.1943)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 721.5449 74.4144)" class="st1 futura-book st3">46.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 721.5448 9.5545)" class="st1 futura-book st3">46.03</text>
						<text transform="matrix(3.996804e-02 0.9992 -0.9992 3.996804e-02 824.4661 21.6048)" class="st1 futura-book st3">12.84</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 628.9644 32.625)" class="st1 futura-book st5">14.26</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 702.1449 38.6143)" class="st7 futura-light st11">NAVE 1B</text>
						
						<rect x="723.9" y="14.7" transform="matrix(0.6724 -0.7402 0.7402 0.6724 224.626 544.9805)" class="st6" width="8.1" height="8.1"/>
						<polygon class="st6" points="728.3,24.5 728,18.8 727.7,12.9 733.7,18.4"/>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[12]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[12])">
						<polygon class="property nvt-sprite-1" points="837.4,154.8 834.3,73.8 626.1,82 629,163"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 712.795 132.5146)" class="st1 futura-book st3">504.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 748.6356 126.8442)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 722.6046 155.0644)" class="st1 futura-book st3">36.00</text>
						<text transform="matrix(3.996804e-02 0.9992 -0.9992 3.996804e-02 825.5244 102.2549)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 630.025 113.275)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 703.1948 119.2647)" class="st7 futura-light st11">NAVE 2B</text>
						
						<rect x="725.2" y="91.9" transform="matrix(0.6724 -0.7402 0.7402 0.6724 167.9159 571.2122)" class="st6" width="8.1" height="8.1"/>
						<polygon class="st6" points="729.5,101.6 729.3,96 729,90.1 735,95.6"/>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[13]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[13])">
						<polygon class="property nvt-sprite-2" points="840.8,235.8 837.4,154.8 629,163 632.3,244"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 717.025 212.5946)" class="st1 futura-book st3">504.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 752.8655 206.9242)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 726.8345 235.1346)" class="st1 futura-book st3">36.00</text>
						<text transform="matrix(3.996804e-02 0.9992 -0.9992 3.996804e-02 829.7455 182.325)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 634.2554 193.355)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 707.4247 199.3447)" class="st7 futura-light st11">NAVE 3B</text>
						
						<rect x="729.4" y="171.9" transform="matrix(0.6724 -0.7402 0.7402 0.6724 110.0357 600.5708)" class="st6" width="8.1" height="8.1"/>
						<polygon class="st6" points="733.8,181.7 733.5,176.1 733.2,170.2 739.3,175.7"/>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[14]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[14])">
						<polygon class="property nvt-sprite-1" points="843.9,316.9 840.8,235.8 632.3,244 635.6,325"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 721.2548 294.6645)" class="st1 futura-book st3">504.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 757.0954 288.9941)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 731.0648 317.2143)" class="st1 futura-book st3">36.00</text>
						<text transform="matrix(3.996804e-02 0.9992 -0.9992 3.996804e-02 833.9767 264.4046)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 638.4859 275.425)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 711.6545 281.4146)" class="st7 futura-light st11">LOTE 4B</text>
						
						<rect x="733.6" y="254.9" transform="matrix(0.6724 -0.7402 0.7402 0.6724 49.9801 630.8923)" class="st6" width="8.1" height="8.1"/>
						<polygon class="st6" points="738,264.7 737.7,259.1 737.5,253.2 743.5,258.7"/>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[15]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[15])">
						<polygon class="property nvt-sprite-2" points="847,397.7 843.9,316.9 635.6,325 638.8,406.1"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 724.4246 374.4844)" class="st1 futura-book st3">504.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 760.2657 368.814)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 734.2346 397.0346)" class="st1 futura-book st3">36.00</text>
						<text transform="matrix(3.996804e-02 0.9992 -0.9992 3.996804e-02 837.1461 344.225)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 641.6558 355.245)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 714.8249 361.2344)" class="st7 futura-light st11">LOTE 5B</text>
						
						<rect x="736.6" y="334.3" transform="matrix(0.6724 -0.7402 0.7402 0.6724 -7.8246 659.0965)" class="st6" width="8.1" height="8.1"/>
						<polygon class="st6" points="741,344.1 740.7,338.5 740.4,332.6 746.4,338.1"/>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[16]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[16])">
						<polygon class="property nvt-sprite-1" points="850.4,478.8 847,397.7 638.8,406.1 642,487.1"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 727.5946 456.1646)" class="st1 futura-book st3">504.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 763.4357 450.4942)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 737.4047 478.7047)" class="st1 futura-book st3">36.00</text>
						<text transform="matrix(3.996804e-02 0.9992 -0.9992 3.996804e-02 840.325 425.8951)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 644.8257 436.925)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 717.9949 442.9147)" class="st7 futura-light st11">LOTE 6B</text>
						
						<rect x="740.4" y="416.5" transform="matrix(0.6724 -0.7402 0.7402 0.6724 -67.4427 688.8469)" class="st6" width="8.1" height="8.1"/>
						<polygon class="st6" points="744.8,426.3 744.5,420.7 744.2,414.8 750.2,420.3"/>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[17]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[17])">
						<polygon class="property nvt-sprite-2" points="645.2,568.1 853.4,559.9 850.4,478.8 642,487.1"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 730.7646 537.5546)" class="st1 futura-book st3">504.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 766.6057 531.8842)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 740.5748 560.0946)" class="st1 futura-book st3">36.00</text>
						<text transform="matrix(3.996804e-02 0.9992 -0.9992 3.996804e-02 843.4946 507.2851)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 647.9957 518.315)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 721.1748 524.2946)" class="st7 futura-light st11">LOTE 7B</text>
						
						<rect x="743.3" y="497.9" transform="matrix(0.6724 -0.7402 0.7402 0.6724 -126.7152 717.693)" class="st6" width="8.1" height="8.1"/>
						<polygon class="st6" points="747.7,507.7 747.5,502.1 747.2,496.2 753.2,501.7"/>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[18]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[18])">
						<polygon class="property nvt-sprite-1" points="856.6,641 853.4,559.9 645.2,568.1 648.2,649.1"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 733.9346 618.7946)" class="st1 futura-book st3">504.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 769.7757 613.1242)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 743.7446 641.3444)" class="st1 futura-book st3">36.00</text>
						<text transform="matrix(3.996804e-02 0.9992 -0.9992 3.996804e-02 846.6644 588.5349)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 651.1656 599.555)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 724.3447 605.5447)" class="st7 futura-light st11">LOTE 8B</text>
						
						<rect x="746.7" y="579.4" transform="matrix(0.6724 -0.7402 0.7402 0.6724 -185.909 746.8868)" class="st6" width="8.1" height="8.1"/>
						<polygon class="st6" points="751.1,589.2 750.8,583.6 750.6,577.7 756.6,583.2"/>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[19]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[19])">
						<polygon class="property nvt-sprite-2" points="651.6,730.1 859.8,721.9 856.6,641 648.2,649.1"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 737.1147 699.6149)" class="st1 futura-book st3">504.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 772.9557 693.9445)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 746.9149 722.165)" class="st1 futura-book st3">36.00</text>
						<text transform="matrix(3.996804e-02 0.9992 -0.9992 3.996804e-02 849.8347 669.355)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 654.3453 680.375)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 727.5149 686.3649)" class="st7 futura-light st11">LOTE 9B</text>
						
						<rect x="749.5" y="659.8" transform="matrix(0.6724 -0.7402 0.7402 0.6724 -244.5183 775.2916)" class="st6" width="8.1" height="8.1"/>
						<polygon class="st6" points="753.9,669.6 753.6,664 753.3,658.1 759.4,663.6"/>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[20]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[20])">
						<polygon class="property nvt-sprite-1" points="863.7,821.8 859.8,721.9 651.6,730.1 655.1,821.8"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 741.3348 785.2051)" class="st1 futura-book st3">596.23 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 777.1754 779.5337)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 751.145 817.2643)" class="st1 futura-book st3">36.03</text>
						<text transform="matrix(3.996804e-02 0.9992 -0.9992 3.996804e-02 854.0656 754.9448)" class="st1 futura-book st3">17.27</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 658.5757 765.965)" class="st1 futura-book st5">15.85</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 731.7448 771.9547)" class="st7 futura-light st11">LOTE 10B</text>
						
						<rect x="753.4" y="745.3" transform="matrix(0.6724 -0.7402 0.7402 0.6724 -306.5027 806.2402)" class="st6" width="8.1" height="8.1"/>
						<polygon class="st6" points="757.9,755.1 757.6,749.5 757.3,743.6 763.3,749.1"/>
					</g>
				</g>
				<g id="isla_c">
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[21]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[21])">
						<polygon class="property nvt-sprite-1" points="377.2,91.7 626.1,82 622.8,0 373.5,0.1"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 479.3649 57.3444)" class="st1 futura-book st3">649.75 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 515.2054 51.674)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 489.1746 83.0647)" class="st1 futura-book st3">43.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 489.1747 10.8048)" class="st1 futura-book st3">43.03</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 379.1754 38.105)" class="st1 futura-book st5">15.96</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 469.7646 44.0945)" class="st7 futura-light st11">L</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 477.7549 43.7749)" class="st7 futura-light st11">O</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 489.395 43.3092)" class="st7 futura-light st11">TE 1C</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 611.5445 32.625)" class="st1 futura-book st5">14.26</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[22]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[22])">
						<polygon class="property nvt-sprite-2" points="380.4,172.9 629,163 626.1,82 377.2,91.7"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 480.4246 137.9944)" class="st1 futura-book st3">602.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 516.2657 132.324)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 490.2348 163.7147)" class="st1 futura-book st3">43.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 380.2359 118.765)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 470.8249 124.7445)" class="st7 futura-light st11">L</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 478.815 124.4249)" class="st7 futura-light st11">O</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 490.4547 123.9593)" class="st7 futura-light st11">TE 2C</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 612.605 113.275)" class="st1 futura-book st5">14.00</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[23]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[23])">
						<polygon class="property nvt-sprite-1" points="383.5,253.8 632.3,244 629,163 380.4,172.9"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 484.655 218.0744)" class="st1 futura-book st3">602.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 520.4955 212.404)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 494.4648 243.7946)" class="st1 futura-book st3">43.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 384.4644 198.835)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 475.0547 204.8244)" class="st7 futura-light st11">L</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 483.045 204.5048)" class="st7 futura-light st11">O</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 494.6846 204.0392)" class="st7 futura-light st11">TE 3C</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 616.8355 193.355)" class="st1 futura-book st5">14.00</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[24]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[24])">
						<polygon class="property nvt-sprite-2" points="386.8,334.8 635.6,325 632.3,244 383.5,253.8"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 488.8849 300.1447)" class="st1 futura-book st3">602.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 524.7254 294.4743)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 498.6848 325.8644)" class="st1 futura-book st3">43.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 388.6851 280.905)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 479.2846 286.8948)" class="st7 futura-light st11">L</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 487.2748 286.5752)" class="st7 futura-light st11">O</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 498.9149 286.1096)" class="st7 futura-light st11">TE 4C</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 621.066 275.425)" class="st1 futura-book st5">14.00</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[25]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[25])">
						<polygon class="property nvt-sprite-1" points="390,415.9 638.8,406.1 635.6,325 386.8,334.8"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 492.0547 379.9646)" class="st1 futura-book st3">602.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 527.8958 374.2942)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 501.8649 405.6849)" class="st1 futura-book st3">43.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 391.8648 360.725)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 482.4549 366.7147)" class="st7 futura-light st11">LOTE 5C</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 624.2359 355.245)" class="st1 futura-book st5">14.00</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[26]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[26])">
						<polygon class="property nvt-sprite-2" points="393.2,496.9 642,487.1 638.8,406.1 390,415.9"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 495.2246 461.6444)" class="st1 futura-book st3">602.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 531.0657 455.974)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 505.0349 487.3647)" class="st1 futura-book st3">43.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 395.0347 442.405)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 485.6249 448.3944)" class="st7 futura-light st11">LOTE 6C</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 627.4058 436.925)" class="st1 futura-book st5">14.00</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[27]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[27])">
						<polygon class="property nvt-sprite-1" points="396.3,577.8 645.2,568.1 642,487.1 393.2,496.9"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 498.3947 543.0349)" class="st1 futura-book st3">602.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 534.2358 537.3644)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 508.205 568.7546)" class="st1 futura-book st3">43.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 398.2047 523.795)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 488.795 529.7844)" class="st7 futura-light st11">LOTE 7C</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 630.5757 518.315)" class="st1 futura-book st5">14.00</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[28]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[28])">
						<polygon class="property nvt-sprite-2" points="399.6,658.9 648.2,649.1 645.2,568.1 396.3,577.8"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 501.5647 624.2748)" class="st1 futura-book st3">602.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 537.4057 618.6044)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 511.3749 649.9941)" class="st1 futura-book st3">43.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 401.3746 605.035)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 491.9649 611.0244)" class="st7 futura-light st11">LOTE 8C</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 633.7457 599.555)" class="st1 futura-book st5">14.00</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[29]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[29])">
						<polygon class="property nvt-sprite-1" points="402.7,739.9 651.6,730.1 648.2,649.1 399.6,658.9"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 504.7349 705.0945)" class="st1 futura-book st3">602.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 540.5755 699.4241)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 514.5447 730.8148)" class="st1 futura-book st3">43.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 404.5445 685.855)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 495.1449 691.8442)" class="st7 futura-light st11">LOTE 9C</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 636.9156 680.375)" class="st1 futura-book st5">14.00</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[30]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[30])">
						<polygon class="property nvt-sprite-2" points="405.9,821.8 655.1,821.8 651.6,730.1 402.7,739.9"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 508.9648 790.6843)" class="st1 futura-book st3">645.04 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 544.8054 785.0139)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 518.7745 816.4046)" class="st1 futura-book st3">43.03</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 408.775 771.445)" class="st1 futura-book st5">14.15</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 499.3646 777.4344)" class="st7 futura-light st11">LOTE 10C</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 641.1441 765.965)" class="st1 futura-book st5">15.85</text>
						
						<rect x="520.6" y="750.5" transform="matrix(0.6724 -0.7402 0.7402 0.6724 -386.6365 635.5499)" class="st6" width="8.1" height="8.1"/>
						<polygon class="st6" points="525,760.3 524.7,754.7 524.4,748.8 530.4,754.3"/>
					</g>
				</g>
				<g id="isla_d">
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[31]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[31])">
						<polygon class="property nvt-sprite-2" points="0.4,0.2 292.2,0.3 295.6,80.5 3.5,92.2"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 124.6049 57.3443)" class="st1 futura-book st3">757.56 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 160.4454 51.6738)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 134.4147 82.0046)" class="st1 futura-book st3">50.46</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 134.4147 10.8046)" class="st1 futura-book st3">50.50</text>
						<text transform="matrix(3.524829e-02 0.9994 -0.9994 3.524829e-02 285.9944 26.035)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 5.3843 39.165)" class="st1 futura-book st5">16.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 115.0046 44.0943)" class="st7 futura-light st11">L</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 122.9948 43.7747)" class="st7 futura-light st11">O</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 134.6349 43.3091)" class="st7 futura-light st11">TE 1D</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[32]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[32])">
						<polygon class="property nvt-sprite-1" points="298.8,161.5 6.7,173.1 3.5,92.1 295.6,80.5"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 127.4547 139.2548)" class="st1 futura-book st3">707.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 163.2957 133.5844)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 137.2547 163.9145)" class="st1 futura-book st3">50.46</text>
						<text transform="matrix(5.989229e-02 0.9982 -0.9982 5.989229e-02 288.5742 107.8849)" class="st1 futura-book st12">14.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 8.2359 121.075)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 117.8549 126.0048)" class="st7 futura-light st11">L</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 125.8446 125.6852)" class="st7 futura-light st11">O</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 137.4847 125.2196)" class="st7 futura-light st11">TE 2D</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[33]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[33])">
						<polygon class="property nvt-sprite-2" points="302,242.8 10.1,254.1 6.7,173.1 298.8,161.5"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 130.6248 221.2444)" class="st1 futura-book st3">707.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 166.4654 215.574)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 140.4346 245.9047)" class="st1 futura-book st3">50.46</text>
						<text transform="matrix(1.082088e-02 0.9999 -0.9999 1.082088e-02 292.2249 189.795)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 11.4058 203.065)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 121.025 207.9944)" class="st7 futura-light st11">L</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 129.0147 207.6748)" class="st7 futura-light st11">O</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 140.6548 207.2092)" class="st7 futura-light st11">TE 3D</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[34]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[34])">
						<polygon class="property nvt-sprite-1" points="13.2,335.4 305.4,323.8 302,242.8 10.1,254.1"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 134.0146 303.3146)" class="st1 futura-book st3">707.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 169.8557 297.6442)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 143.825 327.9744)" class="st1 futura-book st3">50.46</text>
						<text transform="matrix(2.998651e-02 0.9996 -0.9996 2.998651e-02 295.5055 272.0244)" class="st1 futura-book st13">14.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 14.7945 285.135)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9394 -3.296948e-02 3.507392e-02 0.9994 124.4246 290.075)" class="st7 futura-light st9">L</text>
						<text transform="matrix(0.9394 -3.296948e-02 3.507392e-02 0.9994 131.9307 289.8116)" class="st7 futura-light st9">O</text>
						<text transform="matrix(0.9394 -3.296948e-02 3.507392e-02 0.9994 142.8654 289.4278)" class="st7 futura-light st9">TE 4D</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[35]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[35])">
						<polygon class="property nvt-sprite-2" points="16.4,416.5 308.2,404.9 305.4,323.8 13.2,335.4"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 138.045 384.2949)" class="st1 futura-book st3">707.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 173.8856 378.6245)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 147.8548 408.9547)" class="st1 futura-book st3">50.46</text>
						<text transform="matrix(2.373426e-02 0.9997 -0.9997 2.373426e-02 299.5648 352.945)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 18.8257 366.105)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9394 -3.296948e-02 3.507392e-02 0.9994 128.4545 371.045)" class="st7 futura-light st9">LOTE 5D</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[36]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[36])">
						<polygon class="property nvt-sprite-1" points="19.7,497.6 311.6,486 308.2,404.9 16.4,416.5"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 141.4248 464.2945)" class="st1 futura-book st3">707.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 177.2654 458.6241)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 151.2346 488.9544)" class="st1 futura-book st3">50.46</text>
						<text transform="matrix(4.993762e-02 0.9988 -0.9988 4.993762e-02 301.6243 432.9448)" class="st1 futura-book st14">14.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 22.2046 446.115)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9394 -3.296948e-02 3.507392e-02 0.9994 131.8346 451.0548)" class="st7 futura-light st9">LOTE 6D</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[37]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[37])">
						<polygon class="property nvt-sprite-2" points="22.6,578.7 314.8,567 311.6,486 19.7,497.6"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 144.5947 546.0945)" class="st1 futura-book st3">707.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 180.4357 540.4241)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 154.4049 570.7646)" class="st1 futura-book st3">50.46</text>
						<text transform="matrix(3.245743e-02 0.9995 -0.9995 3.245743e-02 306.0256 514.745)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 25.3746 527.915)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9394 -3.296948e-02 3.507392e-02 0.9994 135.0044 532.8553)" class="st7 futura-light st9">LOTE 7D</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[38]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[38])">
						<polygon class="property nvt-sprite-1" points="26.1,659.8 318,648 314.8,567 22.6,578.7"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 147.2949 627.4544)" class="st1 futura-book st3">707.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 183.1355 621.784)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 157.095 652.1147)" class="st1 futura-book st3">50.46</text>
						<text transform="matrix(2.652583e-02 0.9996 -0.9996 2.652583e-02 308.7458 596.075)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 28.0757 609.275)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9394 -3.296948e-02 3.507392e-02 0.9994 137.7046 614.2051)" class="st7 futura-light st9">LOTE 8D</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[39]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[39])">
						<polygon class="property nvt-sprite-2" points="29.3,740.8 321.2,729.2 318,648 26.1,659.8"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 150.4648 708.2644)" class="st1 futura-book st3">707.00 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 186.3058 702.5939)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 160.2648 732.9246)" class="st1 futura-book st3">50.46</text>
						<text transform="matrix(4.082929e-02 0.9992 -0.9992 4.082929e-02 311.7245 676.955)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 31.2457 690.085)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9394 -3.296948e-02 3.507392e-02 0.9994 140.8747 695.0255)" class="st7 futura-light st9">LOTE 9D</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[40]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[40])">
						<polygon class="property nvt-sprite-1" points="32.3,821.8 324.7,821.8 321.2,729.2 29.3,740.8"/>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 153.3246 791.7441)" class="st1 futura-book st3">757.57 m</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 189.1656 786.0737)" class="st1 futura-book st3">2</text>
						<text transform="matrix(0.9992 -3.996804e-02 3.996804e-02 0.9992 163.1349 816.4049)" class="st1 futura-book st3">50.50</text>
						<text transform="matrix(1.448576e-02 0.9999 -0.9999 1.448576e-02 314.9449 760.305)" class="st1 futura-book st5">16.00</text>
						<text transform="matrix(4.745515e-02 0.9989 -0.9989 4.745515e-02 34.105 773.565)" class="st1 futura-book st5">14.00</text>
						<text transform="matrix(0.9394 -3.296948e-02 3.507392e-02 0.9994 143.7346 778.5049)" class="st7 futura-light st9">LOTE 10D</text>
						
						<rect x="166.2" y="752" transform="matrix(0.6724 -0.7402 0.7402 0.6724 -503.8844 373.7505)" class="st6" width="8.1" height="8.1"/>
						<polygon class="st6" points="170.6,761.9 170.3,756.3 170,750.4 176.1,755.8"/>
					</g>
				</g>
				<g id="isla_e">
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[41]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[41])">
						<path class="property nvt-sprite-2" d="M1326.6,902.8c0,0,41.5,194.1,38.9,194.1l-129.2,0.2l-0.1-194.1L1326.6,902.8z"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1290.875 1090.9049)" class="st1 futura-book st5">22.32</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1276.645 911.425)" class="st1 futura-book st5">15.61</text>
						<text transform="matrix(0.2095 0.9778 -0.9778 0.2095 1333.4054 986.5843)" class="st1 futura-book st15">34.17</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1272.3251 1019.845)" class="st1 futura-book st5">635.27 m</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1308.2872 1015.2256)" class="st1 futura-book st5">2</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1271.905 975.535)" class="st7 futura-light st9">L</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1279.8945 975.4486)" class="st7 futura-light st9">O</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1291.5339 975.3226)" class="st7 futura-light st9">TE </text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1283.5839 995.6898)" class="st7 futura-light st9">1E</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[42]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[42])">
						<polygon class="property nvt-sprite-1" points="1236.1,903 1236.2,1097.2 1166.8,1096.9 1166.8,903"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1190.295 1090.9049)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1190.295 911.425)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1226.1542 985.965)" class="st1 futura-book st5">33.50</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1180.785 1019.845)" class="st1 futura-book st5">402.00 m</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1216.7472 1015.2256)" class="st1 futura-book st5">2</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1181.2151 975.535)" class="st7 futura-light st9">L</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1189.2046 975.4486)" class="st7 futura-light st9">O</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1200.844 975.3226)" class="st7 futura-light st9">TE </text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1192.8939 995.6898)" class="st7 futura-light st9">2E</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[43]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[43])">
						<polygon class="property nvt-sprite-2" points="1166.8,903 1166.8,1096.9 1097.3,1096.9 1097.3,903"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1121.365 1090.9049)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1121.365 911.425)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1157.2245 985.965)" class="st1 futura-book st5">33.50</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1111.8551 1019.845)" class="st1 futura-book st5">402.00 m</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1147.8173 1015.2256)" class="st1 futura-book st5">2</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1112.285 975.535)" class="st7 futura-light st9">L</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1120.2745 975.4486)" class="st7 futura-light st9">O</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1131.9139 975.3226)" class="st7 futura-light st9">TE </text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1123.9639 995.6898)" class="st7 futura-light st9">3E</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[44]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[44])">
						<polygon class="property nvt-sprite-1" points="1097.3,903 1097.3,1096.9 1027.8,1096.8 1027.8,903"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1051.385 1090.9049)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1051.385 911.425)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1087.2557 985.965)" class="st1 futura-book st5">33.50</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1041.885 1019.845)" class="st1 futura-book st5">402.00 m</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1077.847 1015.2256)" class="st1 futura-book st5">2</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1042.3051 975.535)" class="st7 futura-light st9">L</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1050.2946 975.4486)" class="st7 futura-light st9">O</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1061.9338 975.3226)" class="st7 futura-light st9">TE </text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1053.9838 995.6898)" class="st7 futura-light st9">4E</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[45]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[45])">
						<polygon class="property nvt-sprite-2" points="1027.8,903 1027.8,1096.8 958.3,1096.9 958.2,902.9"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 982.3251 1090.9049)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 982.335 911.425)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1018.1952 985.965)" class="st1 futura-book st5">33.50</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 972.825 1019.845)" class="st1 futura-book st5">402.00 m</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 1008.7871 1015.2256)" class="st1 futura-book st5">2</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 973.255 975.535)" class="st7 futura-light st9">L</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 981.2445 975.4486)" class="st7 futura-light st9">O</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 992.8839 975.3226)" class="st7 futura-light st9">TE </text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 984.9338 995.6898)" class="st7 futura-light st9">5E</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[46]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[46])">
						<polygon class="property nvt-sprite-1" points="958.2,902.9 958.3,1096.9 888.8,1096.9 888.8,903"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 913.8151 1090.9049)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 913.8151 911.425)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 949.6854 985.965)" class="st1 futura-book st5">33.50</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 904.305 1019.845)" class="st1 futura-book st5">402.00 m</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 940.2671 1015.2256)" class="st1 futura-book st5">2</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 904.645 975.535)" class="st7 futura-light st9">LOTE</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 916.4237 995.6888)" class="st7 futura-light st9">6E</text>
						
						<rect x="892.6" y="965.5" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -423.7364 944.9521)" class="st6" width="8.1" height="8.1"/>
						<polygon class="st6" points="896.8,975.3 896.7,969.7 896.6,963.8 902.5,969.4"/>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[47]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[47])">
						<polygon class="property nvt-sprite-2" points="888.8,903 888.8,1096.9 819.4,1096.9 819.4,903"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 843.435 1090.9049)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 843.435 911.425)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 879.2948 985.965)" class="st1 futura-book st5">33.50</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 833.925 1019.845)" class="st1 futura-book st5">402.00 m</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 869.8871 1015.2256)" class="st1 futura-book st5">2</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 834.265 975.535)" class="st7 futura-light st9">N</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 845.9243 975.4089)" class="st7 futura-light st9">A</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 856.0137 975.2997)" class="st7 futura-light st9">VE</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 846.0438 995.6888)" class="st7 futura-light st9">7E</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[48]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[48])">
						<polygon class="property nvt-sprite-1" points="819.4,903 819.4,1096.9 749.8,1096.9 749.7,903"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 773.615 1090.9049)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 773.615 911.425)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 809.4745 985.965)" class="st1 futura-book st5">33.50</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 764.105 1019.845)" class="st1 futura-book st5">402.00 m</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 800.0671 1015.2256)" class="st1 futura-book st5">2</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 764.445 975.535)" class="st7 futura-light st9">NAVE</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 776.2238 995.6888)" class="st7 futura-light st9">8E</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[49]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[49])">
						<polygon class="property nvt-sprite-2" points="749.7,903 749.8,1096.9 680.3,1096.9 680.3,903"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 704.715 1090.895)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 704.715 911.425)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 740.5741 985.965)" class="st1 futura-book st5">33.50</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 695.205 1019.845)" class="st1 futura-book st5">402.00 m</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 731.1671 1015.2256)" class="st1 futura-book st5">2</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 695.545 975.535)" class="st7 futura-light st9">NAVE</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 707.3237 995.6888)" class="st7 futura-light st9">9E</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[50]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[50])">
						<polygon class="property nvt-sprite-1" points="680.3,903 680.3,1096.9 610.9,1096.9 610.8,903"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 634.815 1090.895)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 634.815 911.425)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 670.6757 985.965)" class="st1 futura-book st5">33.50</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 625.305 1019.845)" class="st1 futura-book st5">402.00 m</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 661.2671 1015.2256)" class="st1 futura-book st5">2</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 625.645 975.535)" class="st7 futura-light st9">NAVE</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 632.734 995.7395)" class="st7 futura-light st9">10E</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[51]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[51])">
						<polygon class="property nvt-sprite-2" points="610.8,903 610.9,1096.9 541.4,1096.9 541.4,903"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 565.415 1090.895)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 565.415 911.425)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 601.2753 985.965)" class="st1 futura-book st5">33.50</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 555.905 1019.845)" class="st1 futura-book st5">402.00 m</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 591.8671 1015.2256)" class="st1 futura-book st5">2</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 556.245 975.535)" class="st7 futura-light st9">NAVE</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 563.334 995.7395)" class="st7 futura-light st9">11E</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[52]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[52])">
						<polygon class="property nvt-sprite-1" points="541.4,903 541.4,1096.9 471.6,1096.9 471.7,902.9"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 495.675 1090.895)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 495.675 911.425)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 531.5448 985.965)" class="st1 futura-book st5">33.50</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 486.175 1019.845)" class="st1 futura-book st5">402.00 m</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 522.1371 1015.2256)" class="st1 futura-book st5">2</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 486.505 975.535)" class="st7 futura-light st9">NAVE</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 493.594 995.7395)" class="st7 futura-light st9">12E</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[53]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[53])">
						<polygon class="property nvt-sprite-2" points="402.4,903 471.7,902.9 471.6,1096.9 402.2,1096.9"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 425.455 1090.9049)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 425.455 911.425)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 461.3241 985.965)" class="st1 futura-book st5">33.50</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 405.6347 985.965)" class="st1 futura-book st5">33.50</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 415.955 1019.845)" class="st1 futura-book st5">402.00 m</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 451.9171 1015.2256)" class="st1 futura-book st5">2</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 416.285 975.535)" class="st7 futura-light st9">NAVE</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 423.374 995.7395)" class="st7 futura-light st9">13E</text>
						
						<rect x="432.2" y="949.8" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -553.9402 608.0274)" class="st6" width="8.1" height="8.1"/>
						<polygon class="st6" points="436.5,959.6 436.3,954 436.2,948.1 442.1,953.7"/>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[54]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[54])">
						<polygon class="property nvt-sprite-1" points="321.2,903 321.1,1096.9 251.7,1096.9 251.7,903"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 276.915 1090.9049)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 276.915 911.425)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 312.7753 985.965)" class="st1 futura-book st5">33.50</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 267.405 1019.845)" class="st1 futura-book st5">402.00 m</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 303.3671 1015.2256)" class="st1 futura-book st5">2</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 267.835 975.535)" class="st7 futura-light st9">L</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 275.8245 975.4486)" class="st7 futura-light st9">O</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 287.4638 975.3226)" class="st7 futura-light st9">TE </text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 274.834 995.7405)" class="st7 futura-light st9">14E</text>
						
						<rect x="283.7" y="949.8" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -599.607 500.8714)" class="st6" width="8.1" height="8.1"/>
						<polygon class="st6" points="287.9,959.6 287.8,954 287.7,948.1 293.5,953.7"/>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[55]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[55])">
						<polygon class="property nvt-sprite-2" points="251.7,903 251.7,1096.9 182.3,1097.2 182,903"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 205.895 1090.9049)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 205.895 911.425)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 241.7558 985.965)" class="st1 futura-book st5">33.50</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 196.385 1019.845)" class="st1 futura-book st5">402.00 m</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 232.3471 1015.2256)" class="st1 futura-book st5">2</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 196.815 975.535)" class="st7 futura-light st9">L</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 204.8045 975.4486)" class="st7 futura-light st9">O</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 216.4438 975.3226)" class="st7 futura-light st9">TE </text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 203.814 995.7405)" class="st7 futura-light st9">15E</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[56]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[56])">
						<polygon class="property nvt-sprite-1" points="182,903 182.3,1097.2 112.8,1097.2 112.7,903.2"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 136.115 1090.9049)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 136.115 911.425)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 171.9843 985.965)" class="st1 futura-book st5">33.50</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 126.615 1019.845)" class="st1 futura-book st5">402.00 m</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 162.5771 1015.2256)" class="st1 futura-book st5">2</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 127.045 975.535)" class="st7 futura-light st9">L</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 135.0345 975.4486)" class="st7 futura-light st9">O</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 146.6738 975.3226)" class="st7 futura-light st9">TE </text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 134.044 995.7405)" class="st7 futura-light st9">16E</text>
					</g>
					<g class="property__active" ng-class="nvtAeropuerto.inmovablesClassList[57]" ng-click="nvtAeropuerto.setLeadProperty(nvtAeropuerto.inmovablesData.inmovables[57])">
						<polygon class="property nvt-sprite-2" points="35.6,903.5 112.7,903.2 112.8,1097.2 43.2,1096.9"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 66.755 1090.9049)" class="st1 futura-book st5">12.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 66.755 911.425)" class="st1 futura-book st5">13.32</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 102.6151 985.965)" class="st1 futura-book st5">33.50</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 43.1151 985.965)" class="st1 futura-book st5">33.53</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 57.245 1019.845)" class="st1 futura-book st5">424.15 m</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 93.2071 1015.2256)" class="st1 futura-book st5">2</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 57.675 975.535)" class="st7 futura-light st9">L</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 65.6645 975.4486)" class="st7 futura-light st9">O</text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 77.3038 975.3226)" class="st7 futura-light st9">TE </text>
						<text transform="matrix(0.9999 -1.082083e-02 1.082083e-02 0.9999 64.674 995.7405)" class="st7 futura-light st9">17E</text>
					</g>
				</g>
			</g>
		</svg>

	</div>

</body>
</html>