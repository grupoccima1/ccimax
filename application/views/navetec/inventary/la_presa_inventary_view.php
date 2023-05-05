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

<body ng-controller="NvtLaPresaCtrl as nvtLaPresa">
  
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

	<div class="modal__panel" ng-class="nvtLaPresa.nvtLaPresaListDialogDisplay">
		<div class="container__panel">
			<div class="toolbar__panel blue-txt">
      <p>PEDRO ESCOBEDO - Naves</p>
      <span class="close__panel" ng-click="nvtLaPresa.closeNvtLaPresaListDialog()"><i class="material-icons" style="margin:0;">close</i></span>
    </div>
			<div class="content__panel">
				<ul class="saufth-collapsable">
					<li ng-repeat="property in nvtLaPresa.inmovablesData.inmovables">
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
								<div class="p-20 pointer" ng-class="nvtLaPresa.inmovablesClassList[$index]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[$index])"></div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="nvtLaPresa.dialogDisplay">
		<div class="backdrop-dialog" ng-click="nvtLaPresa.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="nvtLaPresa.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{nvtLaPresa.propertyData.reference}}</p>
				<ul class="saufth-collapsable">
					<li ng-repeat="user in nvtLaPresa.activeUsers" ng-if="user.idProfile > 1">
						<div class="saufth-collapsable-header" ng-click="nvtLaPresa.selectUser(lead.idLead, $index)" ng-class="nvtLaPresa.activeUsers[$index].collapsableHeaderClass">
							<div style="display:flex;"><i class="material-icons pr-15">account_circle</i>{{user.name + ' ' + user.last_name}}</div>
							<div class="py-5 pl-15"></div>
							<div class="saufth-badge blue-bg light-txt ml-15">{{user.leads.length}}</div>
						</div>
						<ul class="saufth-collapsable-body" ng-class="nvtLaPresa.activeUsers[$index].collapsableBodyClass">
							<li class="saufth-collapsable-body-li" ng-repeat="lead in user.leads">
								<div class="saufth-collapsable-item-h" ng-click="nvtLaPresa.selectLeadPropertyStatus(lead.idUser, lead.idLead)">
									<i class="material-icons px-15">assignment_ind</i>{{lead.name + ' ' + lead.last_name}}
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="nvtLaPresa.dialogStatusDisplay">
		<div class="backdrop-dialog" ng-click="nvtLaPresa.closeDialogStatus()"></div>
		<div class="container-dialog p-20 status-dialog">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="nvtLaPresa.closeDialogStatus()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{nvtLaPresa.propertyData.reference}}</p>
				<ul class="saufth-collapsable w100">
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtLaPresa.setStatus(1)"><div class="color-block pb-property-active-bg mr-15"></div>Disponible</div>
          </li>
          <li>
						<div class="saufth-collapsable-header" ng-click="nvtLaPresa.setStatus(6)"><div class="color-block darkgray__bg mr-15"></div>Estratégico</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtLaPresa.setStatus(2)"><div class="color-block pb_lightred-bg mr-15"></div>En espera</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtLaPresa.setStatus(3)"><div class="color-block brown mr-15"></div>Apartado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtLaPresa.setStatus(4)"><div class="color-block mustard-bg mr-15"></div>Enganchado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtLaPresa.setStatus(5)"><div class="color-block pb_teal-bg mr-15"></div>Vendido</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="plano_container">

		<div class="container mt-64">
			<div class="row quote-header">
				<div class="col s12">
					<h1 class="center-align">LA PRESA</h1>
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
				<button class="btn-flat right"><i style="font-size:30px;" class="material-icons" ng-click="nvtLaPresa.showInmovablesList()">list</i></button>
			</div>
		</div>

    <svg version="1.1" class="quote__map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      viewBox="0 0 1366 1342" style="enable-background:new 0 0 1366 1342;" xml:space="preserve">

      <style type="text/css">
        .st1{fill:#FFFFFF;}
        .st3{font-size:10.4705px;}
        .st4{font-size:10.47px;}
        .st5{font-size:10.4721px;}
        .st6{fill:#FFFF00;}
        .st8{font-size:17.1209px;}
        .st9{letter-spacing:-1;}
        .st10{opacity:0.6;fill:#DBAE4C;enable-background:new;}
        .st12{font-size:10.4998px;}
        .st13{font-size:10.517px;}
        .st14{font-size:20.941px;}
        .st15{font-size:10.4836px;}
      </style>

      <image style="overflow:visible;" width="1366" height="1342" xlink:href="media/assets/img/navetec/app/la-presa/la-presa.jpg"></image>

      <g id="islas_la_presa">
        <g id="isla_a">
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[0]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[0])">
            <polygon class="property nvt-sprite-1" points="8.8,364.3 140.8,364.3 140.9,446.8 7.8,446.8"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 62.3594 442.3927)" class="st1 futura-book st3">23.97</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 64.4494 375.4026)" class="st1 futura-book st3">23.76</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 131.3513 389.3532)" class="st1 futura-book st4">14.78</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 11.6306 389.3642)" class="st1 futura-book st5">14.78</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 49.2292 420.9428)" class="st1 futura-book st3">352.22 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 93.7972 415.2567)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 44.2596 404.2227)" class="st6 futura-light st8">LOTE 1A</text>
            
            <rect x="29.5" y="393.4" transform="matrix(0.692 -0.7219 0.7219 0.692 -276.7611 147.1899)" class="st10" width="9.1" height="9.1"/>
            <polygon class="st10" points="34.3,404.4 34.1,398.1 34,391.5 40.6,397.8"/>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[1]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[1])">
            <polygon class="property nvt-sprite-2" points="7.3,513.5 141,513.5 141.1,446.8 8,446.8"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 62.3592 508.9727)" class="st1 futura-book st3">24.03</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 131.3513 466.6232)" class="st1 futura-book st4">12.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 11.6309 466.6438)" class="st1 futura-book st5">12.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 49.2193 497.1528)" class="st1 futura-book st3">287.6 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 93.7868 491.4666)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 44.2594 480.4325)" class="st6 futura-light st8">LOTE 2A</text>
            
            <rect x="29.6" y="470.1" transform="matrix(0.692 -0.7219 0.7219 0.692 -332.1274 170.8133)" class="st10" width="9.1" height="9.1"/>
            <polygon class="st10" points="34.3,481.1 34.1,474.8 34,468.2 40.6,474.5"/>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[2]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[2])">
            <polygon class="property nvt-sprite-1" points="6.7,580.6 141.1,580.6 141,513.5 7.3,513.5"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 62.3593 575.2529)" class="st1 futura-book st3">24.15</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 131.3513 532.9033)" class="st1 futura-book st4">12.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 11.6299 532.9139)" class="st1 futura-book st5">12.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 49.2195 563.4325)" class="st1 futura-book st3">289.05 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 93.7869 557.7463)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 44.2595 546.7029)" class="st6 futura-light st8">LOTE 3A</text>
            
            <rect x="29.5" y="536" transform="matrix(0.692 -0.7219 0.7219 0.692 -379.741 191.1224)" class="st10" width="9.1" height="9.1"/>
            <polygon class="st10" points="34.3,547.1 34.1,540.8 34,534.2 40.6,540.5"/>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[3]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[3])">
            <polygon class="property nvt-sprite-2" points="6,647.4 141.1,647.6 141.1,580.6 6.7,580.6"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 62.3594 643.1825)" class="st1 futura-book st3">24.27</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 131.3513 600.8433)" class="st1 futura-book st4">12.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 11.629 600.8542)" class="st1 futura-book st5">12.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 49.2196 631.3626)" class="st1 futura-book st3">290.51 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 93.787 625.6765)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 44.2592 614.6428)" class="st6 futura-light st8">LOTE 4A</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[4]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[4])">
            <polygon class="property nvt-sprite-1" points="5.3,714.6 141,714.6 141.1,647.6 6,647.4"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 62.3592 711.0829)" class="st1 futura-book st3">24.39</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 131.3513 668.7333)" class="st1 futura-book st4">12.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 11.6291 668.7438)" class="st1 futura-book st5">12.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 49.2192 699.2527)" class="st1 futura-book st3">291.97 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 93.7872 693.5666)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 44.2593 682.5325)" class="st6 futura-light st8">LOTE 5A</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[5]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[5])">
            <polygon class="property nvt-sprite-2" points="4.6,781.5 141.1,781.6 141,714.6 5.3,714.6"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 62.3595 777.9124)" class="st1 futura-book st3">24.51</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 131.3513 735.5632)" class="st1 futura-book st4">12.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 11.6295 735.574)" class="st1 futura-book st5">12.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 49.2195 766.0828)" class="st1 futura-book st3">293.43 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 93.787 760.3961)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 44.2596 749.3625)" class="st6 futura-light st8">LOTE 6A</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[6]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[6])">
            <polygon class="property nvt-sprite-1" points="4.1,848.4 141.1,848.5 141.1,781.6 4.6,781.5"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 61.2893 843.7526)" class="st1 futura-book st3">24.64</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 130.281 801.4132)" class="st1 futura-book st4">12.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 10.5593 801.424)" class="st1 futura-book st5">12.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 48.1494 831.9327)" class="st1 futura-book st3">294.89 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 92.7169 826.2465)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 43.1895 815.2124)" class="st6 futura-light st8">LOTE 7A</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[7]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[7])">
            <polygon class="property nvt-sprite-2" points="3.4,915.4 141.1,915.4 141.1,848.5 4.1,848.4"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 61.2892 910.1025)" class="st1 futura-book st3">24.76</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 130.281 867.7532)" class="st1 futura-book st4">12.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 10.5597 867.764)" class="st1 futura-book st5">12.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 48.1493 898.2827)" class="st1 futura-book st3">296.35 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 92.7168 892.5965)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 43.1894 881.5624)" class="st6 futura-light st8">L</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 51.2896 881.4814)" class="st6 futura-light st8">O</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 63.0893 881.3634)" class="st6 futura-light st8">TE 8A</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[8]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[8])">
            <polygon class="property nvt-sprite-1" points="2.6,982.3 141,982.5 141.1,915.4 3.4,915.4"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 61.2895 976.8925)" class="st1 futura-book st3">24.88</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 130.281 934.5432)" class="st1 futura-book st4">12.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 10.5593 934.5537)" class="st1 futura-book st5">12.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 48.1492 965.0726)" class="st1 futura-book st3">297.81 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 92.7171 959.3865)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 43.1893 948.3528)" class="st6 futura-light st8">L</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 51.2895 948.2719)" class="st6 futura-light st8">O</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 63.0892 948.1538)" class="st6 futura-light st8">TE 9A</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[9]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[9])">
            <polygon class="property nvt-sprite-2" points="2.2,1049.4 141,1049.3 141,982.5 2.6,982.3"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 61.2895 1044.2723)" class="st1 futura-book st3">25.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 130.281 1001.9232)" class="st1 futura-book st4">12.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 10.5592 1001.9441)" class="st1 futura-book st5">12.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 48.1492 1032.453)" class="st1 futura-book st3">299.27 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 92.7171 1026.7667)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 43.1892 1015.7332)" class="st6 futura-light st8">L</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 51.2894 1015.6522)" class="st6 futura-light st8">O</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 63.0896 1015.5332)" class="st6 futura-light st8">TE 10A</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[10]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[10])">
            <polygon class="property nvt-sprite-1" points="1.5,1116.3 141.1,1139.3 141,1049.3 2.2,1049.4"/>
            <text transform="matrix(0.9872 0.1595 -0.1595 0.9872 60.9704 1121.0439)" class="st1 futura-book st12">25.46</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 130.281 1080.9832)" class="st1 futura-book st4">16.13</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 10.5588 1069.2241)" class="st1 futura-book st5">12.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 48.1496 1099.7327)" class="st1 futura-book st3">352.60 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 92.717 1094.0465)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 43.1891 1083.0129)" class="st6 futura-light st8">L</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 51.2893 1082.9319)" class="st6 futura-light st8">O</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 63.0895 1082.8138)" class="st6 futura-light st8">TE 11A</text>
          </g>
        </g>
        <g id="isla_b">
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[11]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[11])">
            <polygon class="property nvt-sprite-2" points="197,115.7 196.7,194.7 325.1,194.7 325.1,136.3"/>
            <text transform="matrix(0.9856 0.1692 -0.1692 0.9856 247.0901 132.8731)" class="st1 futura-book st13">23.30</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 314.2615 150.2832)" class="st1 futura-book st4">10.52</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 200.9492 141.7341)" class="st1 futura-book st5">14.22</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 237.2294 180.8029)" class="st1 futura-book st3">284.53m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 278.8971 175.1452)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 233.8795 164.0826)" class="st6 futura-light st8">LOTE 1B</text>
            
            <rect x="219.2" y="153.3" transform="matrix(0.692 -0.7219 0.7219 0.692 -45.0247 210.1268)" class="st10" width="9.1" height="9.1"/>
            <polygon class="st10" points="223.9,164.3 223.7,158 223.6,151.4 230.2,157.7"/>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[12]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[12])">
            <polygon class="property nvt-sprite-1" points="196.6,273 325.1,273.1 325.2,194.7 196.8,194.7"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 247.3991 205.5828)" class="st1 futura-book st3">23.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 314.2615 219.5732)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 200.9493 219.5842)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 238.5493 250.0925)" class="st1 futura-book st3">322.00 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 283.1168 244.4063)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 232.5195 233.3726)" class="st6 futura-light st8">LOTE 2B</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[13]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[13])">
            <polygon class="property nvt-sprite-2" points="196.6,350.9 325.2,351 325.1,273.1 196.6,273"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 247.3993 284.0725)" class="st1 futura-book st3">23.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 314.2615 298.0632)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 200.9485 298.074)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 238.5491 328.5925)" class="st1 futura-book st3">322.00 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 283.1171 322.9063)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 232.5193 311.8727)" class="st6 futura-light st8">LOTE 3B</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[14]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[14])">
            <polygon class="property nvt-sprite-1" points="196.6,429.3 325.1,429.3 325.2,351 196.6,350.9"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 247.3992 361.0125)" class="st1 futura-book st3">23.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 314.2615 375.0032)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 200.9479 375.0142)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 238.5495 405.5323)" class="st1 futura-book st3">322.00 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 283.1169 399.8462)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 232.5192 388.8125)" class="st6 futura-light st8">LOTE 4B</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[15]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[15])">
            <polygon class="property nvt-sprite-2" points="196.6,507.1 325.2,507.1 325.1,429.3 196.6,429.3"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 247.3996 439.1828)" class="st1 futura-book st3">23.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 314.2615 453.1732)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 200.9485 453.1841)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 238.5494 483.7028)" class="st1 futura-book st3">322.00 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 283.1168 478.0161)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 232.5196 466.9825)" class="st6 futura-light st8">LOTE 5B</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[16]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[16])">
            <polygon class="property nvt-sprite-1" points="196.7,585.5 325.2,585.4 325.2,507.1 196.6,507.1"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 247.3994 517.0026)" class="st1 futura-book st3">23.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 314.2615 530.9932)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 200.9479 531.0038)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 238.5491 561.5128)" class="st1 futura-book st3">322.00 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 283.117 555.8267)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 232.5193 544.7925)" class="st6 futura-light st8">LOTE 6B</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[17]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[17])">
            <polygon class="property nvt-sprite-2" points="196.6,663.4 325.2,663.5 325.2,585.4 196.7,585.5"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 247.3993 595.4626)" class="st1 futura-book st3">23.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 314.2615 609.4532)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 200.9484 609.4639)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 238.5495 639.9728)" class="st1 futura-book st3">322.00 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 283.1169 634.2866)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 232.5192 623.2529)" class="st6 futura-light st8">LOTE 7B</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[18]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[18])">
            <polygon class="property nvt-sprite-1" points="196.7,741.6 325.2,741.6 325.2,663.5 196.6,663.4"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 247.3994 674.0427)" class="st1 futura-book st3">23.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 314.2615 688.0333)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 200.9475 688.0441)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 238.5491 718.5529)" class="st1 futura-book st3">322.00 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 283.1171 712.8667)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 232.5193 701.8326)" class="st6 futura-light st8">LOTE 8B</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[19]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[19])">
            <polygon class="property nvt-sprite-2" points="196.7,819.7 325.2,819.6 325.2,741.6 196.7,741.6"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 247.3994 751.9226)" class="st1 futura-book st3">23.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 314.2615 765.9032)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 200.9481 765.9239)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 238.5496 796.4327)" class="st1 futura-book st3">322.00 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 283.117 790.7466)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 232.5193 779.7129)" class="st6 futura-light st8">LOTE 9B</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[20]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[20])">
            <polygon class="property nvt-sprite-1" points="196.6,897.6 325.2,897.6 325.2,819.6 196.7,819.7"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 247.3992 829.7927)" class="st1 futura-book st3">23.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 314.2615 843.7832)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 200.9486 843.7939)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 238.5494 874.3029)" class="st1 futura-book st3">322.00 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 283.1169 868.6167)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 232.5191 857.5825)" class="st6 futura-light st8">L</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 240.6193 857.5015)" class="st6 futura-light st8">O</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 252.4195 857.3835)" class="st6 futura-light st8">TE 10B</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[21]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[21])">
            <polygon class="property nvt-sprite-2" points="196.7,975.7 325.2,975.8 325.2,897.6 196.6,897.6"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 247.3991 907.9626)" class="st1 futura-book st3">23.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 314.2615 921.9532)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 200.9491 921.9639)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 238.5493 952.4728)" class="st1 futura-book st3">322.00 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 283.1168 946.7866)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 232.5195 935.7524)" class="st6 futura-light st8">L</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 240.6192 935.6714)" class="st6 futura-light st8">O</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 252.4194 935.5535)" class="st6 futura-light st8">TE 11B</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[22]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[22])">
            <polygon class="property nvt-sprite-1" points="196.5,1053.9 325.2,1053.8 325.2,975.8 196.7,975.7"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 247.3996 987.9427)" class="st1 futura-book st3">23.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 314.2615 1001.9232)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 200.9488 1001.9437)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 238.5493 1032.4524)" class="st1 futura-book st3">322.00 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 283.1167 1026.7662)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 232.5195 1015.7325)" class="st6 futura-light st8">L</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 240.6192 1015.6516)" class="st6 futura-light st8">O</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 252.4194 1015.5335)" class="st6 futura-light st8">TE 12B</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[23]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[23])">
            <polygon class="property nvt-sprite-2" points="196.4,1148.2 325.2,1169.3 325.2,1053.8 196.5,1053.9"/>
            <text transform="matrix(0.9872 0.1595 -0.1595 0.9872 251.1396 1152.084)" class="st1 futura-book st12">23.31</text>
            <text transform="matrix(1 -8.726535e-03 8.726535e-03 1 248.1897 1066.5632)" class="st1 futura-book st4">23.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 314.031 1099.1732)" class="st1 futura-book st4">16.13</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 200.7201 1089.5537)" class="st1 futura-book st5">16.94</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 238.3193 1125.4222)" class="st1 futura-book st3">433.10 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 282.8872 1119.7361)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 232.2894 1108.6926)" class="st6 futura-light st8">L</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 240.3896 1108.6116)" class="st6 futura-light st8">O</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 252.1893 1108.4937)" class="st6 futura-light st8">TE 13B</text>
          </g>
        </g>
        <g id="isla_c">
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[24]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[24])">
            <polygon class="property nvt-sprite-2" points="486.7,273.1 486.6,162.2 325.2,136.3 325.1,273.1"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 395.8696 266.7824)" class="st1 futura-book st3">29.00</text>
            <text transform="matrix(0.9884 0.1516 -0.1516 0.9884 395.5699 157.8931)" class="st1 futura-book st4">29.37</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 475.5721 196.4132)" class="st1 futura-book st4">19.85</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 330.1585 196.4241)" class="st1 futura-book st5">24.52</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 387.0196 226.9426)" class="st1 futura-book st3">643.30 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 431.587 221.2564)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 368.1396 210.2229)" class="st6 futura-light st14">LOTE 1C</text>
            
            <rect x="353.4" y="198.1" transform="matrix(0.692 -0.7219 0.7219 0.692 -36.0626 320.8609)" class="st10" width="9.1" height="9.1"/>
            <polygon class="st10" points="358.1,209.2 358,202.8 357.9,196.2 364.5,202.5"/>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[25]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[25])">
            <polygon class="property nvt-sprite-1" points="486.9,350.9 486.7,273.1 325.1,273.1 325.2,351"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 395.8693 346.4924)" class="st1 futura-book st3">29.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 475.5721 298.0632)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 330.1598 298.0738)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 387.0194 328.5927)" class="st1 futura-book st3">406.00 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 431.5869 322.9066)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 368.1394 311.8725)" class="st6 futura-light st14">LOTE 2C</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[26]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[26])">
            <polygon class="property nvt-sprite-2" points="486.8,429.3 486.9,350.9 325.2,351 325.1,429.3"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 395.8695 425.9627)" class="st1 futura-book st3">29.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 475.5721 377.5432)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 330.1593 377.554)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 387.0192 408.0625)" class="st1 futura-book st3">406.00 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 431.5871 402.3763)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 368.1391 391.3427)" class="st6 futura-light st14">LOTE 3C</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[27]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[27])">
            <polygon class="property nvt-sprite-1" points="325.2,507.1 486.8,507.2 486.8,429.3 325.1,429.3"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 395.8693 504.3626)" class="st1 futura-book st3">29.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 475.5721 455.9432)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 330.1586 455.954)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 387.0196 486.4727)" class="st1 futura-book st3">406.00 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 431.587 480.7865)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 368.1395 469.7524)" class="st6 futura-light st14">LOTE 4C</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[28]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[28])">
            <polygon class="property nvt-sprite-2" points="486.9,585.3 486.8,507.2 325.2,507.1 325.2,585.4"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 395.8694 582.4026)" class="st1 futura-book st3">29.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 475.5721 533.9832)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 330.1585 533.994)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 387.0192 564.5127)" class="st1 futura-book st3">406.00 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 431.5871 558.8265)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 368.1396 547.7925)" class="st6 futura-light st14">LOTE 5C</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[29]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[29])">
            <polygon class="property nvt-sprite-1" points="486.7,663.4 486.9,585.3 325.2,585.4 325.2,663.5"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 395.8694 660.3826)" class="st1 futura-book st3">29.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 475.5721 611.9633)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 330.1592 611.9739)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 387.0195 642.4824)" class="st1 futura-book st3">406.00 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 431.5869 636.7963)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 368.1395 625.7626)" class="st6 futura-light st14">LOTE 6C</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[30]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[30])">
            <polygon class="property nvt-sprite-2" points="325.2,741.6 486.8,741.6 486.7,663.4 325.2,663.5"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 395.8692 738.7923)" class="st1 futura-book st3">29.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 475.5721 690.3732)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 330.1588 690.3842)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 387.0194 720.8926)" class="st1 futura-book st3">406.00 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 431.5868 715.2064)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 368.1496 704.1727)" class="st6 futura-light st14">LOTE 7C</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[31]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[31])">
            <polygon class="property nvt-sprite-1" points="486.8,819.7 486.8,741.6 325.2,741.6 325.2,819.6"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 395.8693 816.3929)" class="st1 futura-book st3">29.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 475.5721 767.9732)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 330.1597 767.9841)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 387.0196 798.5024)" class="st1 futura-book st3">406.00 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 431.587 792.8163)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 368.1395 781.7827)" class="st6 futura-light st14">LOTE 8C</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[32]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[32])">
            <polygon class="property nvt-sprite-2" points="486.7,897.6 486.8,819.7 325.2,819.6 325.2,897.6"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 395.8692 894.1223)" class="st1 futura-book st3">29.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 475.5721 845.6932)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 330.1591 845.7038)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 387.0194 876.2226)" class="st1 futura-book st3">406.00 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 431.5868 870.5364)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 368.1393 859.5024)" class="st6 futura-light st14">LOTE 9C</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[33]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[33])">
            <polygon class="property nvt-sprite-1" points="486.9,975.8 486.7,897.6 325.2,897.6 325.2,975.8"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 395.8694 972.5627)" class="st1 futura-book st3">29.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 475.5721 924.1332)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 330.1594 924.1541)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 387.0196 954.6626)" class="st1 futura-book st3">406.00 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 431.587 948.9764)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 368.1395 937.9428)" class="st6 futura-light st14">LOTE 10C</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[34]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[34])">
            <polygon class="property nvt-sprite-2" points="486.8,1053.8 486.9,975.8 325.2,975.8 325.2,1053.8"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 395.8694 1050.3528)" class="st1 futura-book st3">29.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 475.5721 1001.9232)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 330.1602 1001.944)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 387.0196 1032.4521)" class="st1 futura-book st3">406.00 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 431.587 1026.766)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 368.1396 1015.7328)" class="st6 futura-light st14">LOTE 11C</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[35]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[35])">
            <polygon class="property nvt-sprite-1" points="486.9,1132 486.8,1053.8 325.2,1053.8 325.2,1132"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 395.8694 1129.4026)" class="st1 futura-book st3">29.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 475.5721 1080.9832)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 330.1588 1080.994)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 387.0195 1111.5029)" class="st1 futura-book st3">406.00 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 431.587 1105.8168)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 368.1395 1094.7827)" class="st6 futura-light st14">LOTE 12C</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[36]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[36])">
            <polygon class="property nvt-sprite-2" points="486.9,1195.7 486.9,1132 325.2,1132 325.2,1169.3"/>
            <text transform="matrix(0.9872 0.1595 -0.1595 0.9872 395.4904 1179.3535)" class="st1 futura-book st12">29.39</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 475.5721 1151.4231)" class="st1 futura-book st4">11.49</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 330.1584 1137.5239)" class="st1 futura-book st5">06.72</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 387.0194 1168.0321)" class="st1 futura-book st3">264.06 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 431.5868 1162.3459)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 368.1393 1153.4526)" class="st6 futura-light st14">LOTE 13C</text>
          </g>
        </g>
        <g id="isla_d">
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[37]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[37])">
            <polygon class="property nvt-sprite-1" points="565.4,175.5 765.8,207.6 766,278.4 565.2,278.4"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 658.4594 274.8426)" class="st1 futura-book st3">36.00</text>
            <text transform="matrix(0.9884 0.152 -0.152 0.9884 658.0998 200.6632)" class="st1 futura-book st4">36.46</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 753.1326 225.3532)" class="st1 futura-book st4">12.74</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 571.3385 213.9541)" class="st1 futura-book st5">18.53</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 649.5994 255.8726)" class="st1 futura-book st3">562.88m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 691.2665 250.2154)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 630.7291 239.1527)" class="st6 futura-light st14">LOTE 1D</text>
            <rect x="616" y="227.1" transform="matrix(0.692 -0.7219 0.7219 0.692 23.8764 519.34)" class="st10" width="9.1" height="9.1"/>
            <polygon class="st10" points="620.7,238.1 620.6,231.8 620.5,225.2 627.1,231.5"/>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[38]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[38])">
            <polygon class="property nvt-sprite-2" points="565.1,357.7 765.7,357.8 765.8,279.6 565,279.6"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 658.4591 353.3328)" class="st1 futura-book st3">36.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 753.1326 303.8432)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 571.3392 303.8539)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 649.5992 334.3726)" class="st1 futura-book st3">504.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 691.2673 328.7154)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 630.7297 317.6425)" class="st6 futura-light st14">LOTE 2D</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[39]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[39])">
            <polygon class="property nvt-sprite-1" points="565.2,434.5 765.9,434.5 765.9,356.4 565.2,356.3"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 658.4595 430.0324)" class="st1 futura-book st3">36.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 753.1326 380.5432)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 571.3397 380.5537)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 649.5995 411.0727)" class="st1 futura-book st3">504.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 691.2667 405.4156)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 630.7292 394.3524)" class="st6 futura-light st14">LOTE 3D</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[40]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[40])">
            <polygon class="property nvt-sprite-2" points="565.2,512.7 765.8,512.4 765.9,434.5 565.2,434.5"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 658.4594 508.4426)" class="st1 futura-book st3">36.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 753.1326 458.9532)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 571.3393 458.964)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 649.5993 489.4727)" class="st1 futura-book st3">504.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 691.2665 483.8155)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 630.729 472.7528)" class="st6 futura-light st14">LOTE 4D</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[41]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[41])">
            <polygon class="property nvt-sprite-1" points="565.2,590.7 765.8,590.6 765.8,512.4 565.2,512.7"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 658.4592 587.3328)" class="st1 futura-book st3">36.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 753.1326 537.8333)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 571.3384 537.844)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 649.5991 568.3628)" class="st1 futura-book st3">504.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 691.2673 562.7056)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 630.7298 551.6425)" class="st6 futura-light st14">LOTE 5D</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[42]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[42])">
            <polygon class="property nvt-sprite-2" points="565.1,668.7 765.8,668.7 765.8,590.6 565.2,590.7"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 658.4596 664.7224)" class="st1 futura-book st3">36.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 753.1326 615.2332)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 571.3392 615.2438)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 649.5995 645.7524)" class="st1 futura-book st3">504.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 691.2667 640.0953)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 630.7292 629.0326)" class="st6 futura-light st14">LOTE 6D</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[43]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[43])">
            <polygon class="property nvt-sprite-1" points="565.3,746.9 765.8,746.8 765.8,668.7 565.1,668.7"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 658.4589 742.0026)" class="st1 futura-book st3">36.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 753.1326 692.5132)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 571.3396 692.5239)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 649.5998 723.0327)" class="st1 futura-book st3">504.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 691.267 717.3755)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 630.7296 706.3123)" class="st6 futura-light st14">LOTE 7D</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[44]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[44])">
            <polygon class="property nvt-sprite-2" points="565.3,824.9 765.9,824.8 765.8,746.8 565.3,746.9"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 658.4594 820.6725)" class="st1 futura-book st3">36.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 753.1326 771.1832)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 571.3385 771.1939)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 649.5995 801.7123)" class="st1 futura-book st3">504.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 691.2667 796.0552)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 630.7292 784.9925)" class="st6 futura-light st14">LOTE 8D</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[45]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[45])">
            <polygon class="property nvt-sprite-1" points="565.1,903.1 765.8,903 765.9,824.8 565.3,824.9"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 658.459 900.1229)" class="st1 futura-book st3">36.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 753.1326 850.6332)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 571.3393 850.6439)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 649.5989 881.1529)" class="st1 futura-book st3">504.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 691.2671 875.4957)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 630.7296 864.4325)" class="st6 futura-light st14">LOTE 9D</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[46]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[46])">
            <polygon class="property nvt-sprite-2" points="565.2,980.9 765.9,980.9 765.8,903 565.1,903.1"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 658.4589 978.3426)" class="st1 futura-book st3">36.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 753.1326 928.8432)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 571.3387 928.8538)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 649.5998 959.3726)" class="st1 futura-book st3">504.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 691.267 953.7155)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 630.7296 942.6527)" class="st6 futura-light st14">LOTE 10D</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[47]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[47])">
            <polygon class="property nvt-sprite-1" points="565.3,1059.3 765.8,1059.3 765.9,980.9 565.2,980.9"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 658.4593 1056.1228)" class="st1 futura-book st3">36.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 753.1326 1006.6332)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 571.3395 1006.6438)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 649.5994 1037.1626)" class="st1 futura-book st3">504.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 691.2665 1031.5055)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 630.7291 1020.4423)" class="st6 futura-light st14">LOTE 11D</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[48]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[48])">
            <polygon class="property nvt-sprite-2" points="565.2,1137.1 765.8,1137.1 765.8,1059.3 565.3,1059.3"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 658.4596 1130.4723)" class="st1 futura-book st3">36.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 753.1326 1080.9832)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 571.3399 1080.9937)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 649.5995 1111.5023)" class="st1 futura-book st3">504.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 691.2667 1105.8451)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 630.7292 1094.783)" class="st6 futura-light st14">LOTE 12D</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[49]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[49])">
            <polygon class="property nvt-sprite-1" points="565.2,1208.4 765.8,1241.6 765.8,1137.1 565.2,1137.1"/>
            <text transform="matrix(0.9872 0.1595 -0.1595 0.9872 658.1495 1219.7538)" class="st1 futura-book st12">36.48</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 753.1326 1176.6631)" class="st1 futura-book st4">18.77</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 571.3382 1163.8345)" class="st1 futura-book st5">12.85</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 649.5998 1194.3423)" class="st1 futura-book st3">569.13m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 691.267 1188.6852)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 630.7295 1177.6229)" class="st6 futura-light st14">LOTE 13D</text>
          </g>
        </g>
        <g id="isla_e">
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[50]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[50])">
            <polygon class="property nvt-sprite-1" points="1005.6,356.4 1005.5,246.1 765.8,207.5 765.9,356.4"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 881.899 353.3329)" class="st1 futura-book st3">43.00</text>
            <text transform="matrix(0.9889 0.1483 -0.1483 0.9889 881.6499 237.0631)" class="st1 futura-book st4">43.55</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 994.7712 288.8632)" class="st1 futura-book st4">19.81</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 770.531 267.2832)" class="st1 futura-book st4">26.74</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 873.0397 297.8127)" class="st1 futura-book st3">1,000.74m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 923.4066 292.0686)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 854.1694 281.0929)" class="st6 futura-light st14">LOTE 1E</text>
            
            <rect x="839.4" y="268.7" transform="matrix(0.692 -0.7219 0.7219 0.692 62.6856 693.4364)" class="st10" width="9.1" height="9.1"/>
            <polygon class="st10" points="844.2,279.7 844,273.4 843.9,266.8 850.5,273.1"/>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[51]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[51])">
            <polygon class="property nvt-sprite-2" points="1005.5,434.5 1005.6,356.4 765.9,356.4 765.9,434.5"/>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 770.531 380.5432)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 881.8994 430.0325)" class="st1 futura-book st3">43.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 994.7712 380.5432)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 873.0394 411.0728)" class="st1 futura-book st3">602.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 914.7066 405.4156)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 854.1691 394.3525)" class="st6 futura-light st14">LOTE 2E</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[52]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[52])">
            <polygon class="property nvt-sprite-1" points="765.8,512.4 1005.5,512.6 1005.5,434.5 765.9,434.5"/>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 770.531 458.9532)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 881.8992 508.4427)" class="st1 futura-book st3">43.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 994.7712 458.9532)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 873.0392 489.4727)" class="st1 futura-book st3">602.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 914.7073 483.8156)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 854.1699 472.7529)" class="st6 futura-light st14">LOTE 3E</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[53]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[53])">
            <polygon class="property nvt-sprite-2" points="1005.6,590.6 1005.5,512.6 765.8,512.4 765.8,590.6"/>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 770.531 537.8333)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 881.899 587.3329)" class="st1 futura-book st3">43.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 994.7712 537.8333)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 873.039 568.3629)" class="st1 futura-book st3">602.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 914.7072 562.7057)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 854.1697 551.6426)" class="st6 futura-light st14">LOTE 4E</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[54]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[54])">
            <polygon class="property nvt-sprite-1" points="765.8,668.7 1005.6,668.7 1005.6,590.6 765.8,590.6"/>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 770.531 615.2332)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 881.8995 664.7225)" class="st1 futura-book st3">43.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 994.7712 615.2233)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 873.0394 645.7525)" class="st1 futura-book st3">602.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 914.7066 640.0953)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 854.1691 629.0327)" class="st6 futura-light st14">LOTE 5E</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[55]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[55])">
            <polygon class="property nvt-sprite-2" points="1005.4,746.9 1005.6,668.7 765.8,668.7 765.8,746.8"/>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 770.531 692.5132)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 881.8998 742.0027)" class="st1 futura-book st3">43.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 994.7712 692.5132)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 873.0397 723.0327)" class="st1 futura-book st3">602.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 914.7069 717.3755)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 854.1694 706.3124)" class="st6 futura-light st14">LOTE 6E</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[56]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[56])">
            <polygon class="property nvt-sprite-1" points="765.9,824.8 1005.6,824.7 1005.4,746.9 765.8,746.8"/>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 770.531 771.1832)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 881.8993 820.6727)" class="st1 futura-book st3">43.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 994.7712 771.1832)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 873.0394 801.7125)" class="st1 futura-book st3">602.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 914.7065 796.0553)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 854.1691 784.9926)" class="st6 futura-light st14">LOTE 7E</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[57]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[57])">
            <polygon class="property nvt-sprite-2" points="1005.3,903 1005.6,824.7 765.9,824.8 765.8,903"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 881.8998 900.1224)" class="st1 futura-book st3">43.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 994.7712 850.6332)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 873.0397 881.1525)" class="st1 futura-book st3">602.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 914.707 875.4953)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 854.1695 864.4326)" class="st6 futura-light st14">LOTE 8E</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 770.531 850.6332)" class="st1 futura-book st4">14.00</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[58]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[58])">
            <polygon class="property nvt-sprite-1" points="765.9,980.9 1005.5,980.9 1005.3,903 765.8,903"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 881.8998 978.3427)" class="st1 futura-book st3">43.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 994.7712 928.8432)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 873.0397 959.3727)" class="st1 futura-book st3">602.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 914.7069 953.7155)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 854.1694 942.6528)" class="st6 futura-light st14">LOTE 9E</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 770.531 928.8432)" class="st1 futura-book st4">14.00</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[59]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[59])">
            <polygon class="property nvt-sprite-2" points="1005.6,1059.3 1005.5,980.9 765.9,980.9 765.8,1059.3"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 881.8992 1056.1229)" class="st1 futura-book st3">43.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 994.7712 1006.6332)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 873.0392 1037.1627)" class="st1 futura-book st3">602.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 914.7074 1031.5055)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 854.1689 1020.4424)" class="st6 futura-light st14">LOTE 10E</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 770.531 1006.6332)" class="st1 futura-book st4">14.00</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[60]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[60])">
            <polygon class="property nvt-sprite-1" points="765.8,1137.1 1005.6,1137.1 1005.6,1059.3 765.8,1059.3"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 881.8995 1130.4723)" class="st1 futura-book st3">43.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 994.7712 1080.9832)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 772.3098 1080.9935)" class="st1 futura-book st5">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 873.0394 1111.5023)" class="st1 futura-book st3">602.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 914.7066 1105.8452)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 854.1691 1094.783)" class="st6 futura-light st14">LOTE 11E</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[61]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[61])">
            <polygon class="property nvt-sprite-2" points="1005.6,1281 1005.6,1137.1 765.8,1137.1 765.8,1241.6"/>
            <text transform="matrix(0.9872 0.1595 -0.1595 0.9872 881.6104 1255.4641)" class="st1 futura-book st12">43.58</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 994.7712 1196.0032)" class="st1 futura-book st4">25.84</text>
            <text transform="matrix(1.999600e-02 0.9998 -0.9998 1.999600e-02 772.3104 1179.3844)" class="st1 futura-book st5">18.77</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 873.039 1209.9028)" class="st1 futura-book st3">959.09m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 914.7072 1204.2456)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 854.1697 1193.1824)" class="st6 futura-light st14">LOTE 12E</text>
          </g>
        </g>
        <g id="isla_f">
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[62]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[62])">
            <polygon class="property nvt-sprite-2" points="1084.5,174.4 1363.5,219.1 1363.7,282 1084.1,282"/>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1219.0792 275.9125)" class="st1 futura-book st3">50.00</text>
            <text transform="matrix(0.9887 0.1498 -0.1498 0.9887 1218.7694 205.5627)" class="st1 futura-book st15">50.64</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1350.1423 234.9832)" class="st1 futura-book st4">11.35</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1089.5212 213.5232)" class="st1 futura-book st4">19.40</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1210.2294 252.4026)" class="st1 futura-book st3">768.76 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1251.8966 246.7455)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1191.3591 235.6828)" class="st6 futura-light st14">LOTE 1F</text>
            
            <rect x="1176.6" y="222.9" transform="matrix(0.692 -0.7219 0.7219 0.692 199.5508 922.7509)" class="st10" width="9.1" height="9.1"/>
            <polygon class="st10" points="1181.4,233.9 1181.2,227.6 1181.1,221 1187.7,227.3"/>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[63]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[63])">
            <polygon class="property nvt-sprite-1" points="1084,360 1363.7,360.1 1363.7,281.9 1084.1,281.9"/>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1089.5212 304.9132)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1219.0789 354.4027)" class="st1 futura-book st3">50.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1350.1423 304.9132)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1210.2296 335.4424)" class="st1 futura-book st3">700.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1251.8969 329.7852)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1191.3594 318.7226)" class="st6 futura-light st14">LOTE 2F</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[64]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[64])">
            <polygon class="property nvt-sprite-2" points="1084,438.1 1363.6,438.1 1363.7,360.1 1084,360"/>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1089.5212 382.6832)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1219.0792 432.1727)" class="st1 futura-book st3">50.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1350.1423 382.6832)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1210.229 413.2129)" class="st1 futura-book st3">700.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1251.8972 407.5552)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1191.3597 396.4926)" class="st6 futura-light st14">LOTE 3F</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[65]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[65])">
            <polygon class="property nvt-sprite-1" points="1083.9,516.4 1363.7,516.3 1363.6,438.1 1084,438.1"/>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1089.5212 461.0932)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1219.0791 510.5824)" class="st1 futura-book st3">50.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1350.1423 461.0932)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1210.2297 491.6128)" class="st1 futura-book st3">700.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1251.897 485.9552)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1191.3595 474.8925)" class="st6 futura-light st14">LOTE 4F</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[66]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[66])">
            <path class="property nvt-sprite-2" d="M1083.9,594.2l279.6,0.1l0.1-77.9l-279.7,0.1C1085.3,516.4,1083.9,594.2,1083.9,594.2z"/>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1089.5212 540.8232)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1219.0795 590.3124)" class="st1 futura-book st3">50.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1350.1423 540.8232)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1210.2291 571.3429)" class="st1 futura-book st3">700.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1251.8973 565.6857)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1191.3589 554.6226)" class="st6 futura-light st14">LOTE 5F</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[67]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[67])">
            <polygon class="property nvt-sprite-1" points="1083.9,672.4 1363.4,672.3 1363.5,594.3 1083.9,594.2"/>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1089.5212 619.9332)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1219.0795 669.4224)" class="st1 futura-book st3">50.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1350.1423 619.9332)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1210.2294 650.4626)" class="st1 futura-book st3">700.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1251.8965 644.8054)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1191.359 633.7427)" class="st6 futura-light st14">LOTE 6F</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[68]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[68])">
            <polygon class="property nvt-sprite-2" points="1084,750.4 1363.5,750.3 1363.4,672.3 1083.9,672.4"/>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1089.5212 698.2833)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1219.0789 747.7827)" class="st1 futura-book st3">50.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1350.1423 698.2933)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1210.2296 728.8127)" class="st1 futura-book st3">700.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1251.8967 723.1555)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1191.3593 712.0928)" class="st6 futura-light st14">LOTE 7F</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[69]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[69])">
            <polygon class="property nvt-sprite-1" points="1084,828.5 1363.8,828.6 1363.5,750.3 1084,750.4"/>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1089.5212 776.6632)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1219.0793 826.1529)" class="st1 futura-book st3">50.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1350.1423 776.6632)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1210.2291 807.1926)" class="st1 futura-book st3">700.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1251.8973 801.5354)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1191.3599 790.4727)" class="st6 futura-light st14">LOTE 8F</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[70]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[70])">
            <polygon class="property nvt-sprite-2" points="1084,906.5 1363.7,906.6 1363.8,828.6 1084,828.5"/>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1089.5212 854.2632)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1219.0791 903.7627)" class="st1 futura-book st3">50.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1350.1423 854.2632)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1210.2297 884.7926)" class="st1 futura-book st3">700.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1251.897 879.1354)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1191.3595 868.0728)" class="st6 futura-light st14">LOTE 9F</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[71]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[71])">
            <polygon class="property nvt-sprite-1" points="1084,980.9 1363.9,984.9 1363.7,906.6 1084,906.5"/>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1089.5212 927.7332)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1219.0792 977.2224)" class="st1 futura-book st3">50.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1350.1423 927.7332)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1210.229 958.2529)" class="st1 futura-book st3">700.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1251.8971 952.5952)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1191.3596 941.5325)" class="st6 futura-light st14">LOTE 10F</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[72]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[72])">
            <polygon class="property nvt-sprite-2" points="1084,1063 1363.8,1062.7 1363.8,980.9 1084,980.9"/>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1089.5212 1008.7732)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1219.0791 1058.2621)" class="st1 futura-book st3">50.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1350.1423 1008.7732)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1210.2299 1039.3027)" class="st1 futura-book st3">700.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1251.897 1033.6456)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1191.3595 1022.5825)" class="st6 futura-light st14">LOTE 11F</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[73]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[73])">
            <polygon class="property nvt-sprite-1" points="1083.9,1140.9 1363.8,1140.8 1363.8,1062.7 1084,1063"/>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1089.5212 1087.8331)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1219.0796 1137.3228)" class="st1 futura-book st3">50.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1350.1423 1087.8331)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1210.2292 1118.3527)" class="st1 futura-book st3">700.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1251.8975 1112.6954)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1191.359 1101.6323)" class="st6 futura-light st14">LOTE 12F</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[74]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[74])">
            <polygon class="property nvt-sprite-2" points="1084,1219.1 1363.8,1219 1363.8,1140.8 1083.9,1140.9"/>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1089.5212 1166.2931)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1219.079 1215.7827)" class="st1 futura-book st3">50.00</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1350.1423 1166.2931)" class="st1 futura-book st4">14.00</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1210.2296 1196.8126)" class="st1 futura-book st3">700.00m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1251.8969 1191.1554)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1191.3594 1180.0923)" class="st6 futura-light st14">LOTE 13F</text>
          </g>
          <g class="property__active" ng-class="nvtLaPresa.inmovablesClassList[75]" ng-click="nvtLaPresa.setLeadProperty(nvtLaPresa.inmovablesData.inmovables[75])">
            <polygon class="property nvt-sprite-1" points="1084.1,1293.6 1363.8,1339.7 1363.8,1219 1084,1219.1"/>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1089.5212 1243.0631)" class="st1 futura-book st4">13.49</text>
            <text transform="matrix(0.985 0.1726 -0.1726 0.985 1218.8198 1311.6732)" class="st1 futura-book st4">50.67</text>
            <text transform="matrix(1.012277e-02 0.9999 -0.9999 1.012277e-02 1350.1423 1266.3132)" class="st1 futura-book st4">21.71</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1210.2297 1285.4928)" class="st1 futura-book st3">879.95 m</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1251.8969 1279.8357)" class="st1 futura-book st3">2</text>
            <text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1191.3594 1268.7725)" class="st6 futura-light st14">LOTE 14F</text>
          </g>
        </g>
      </g>
    </svg>

	</div>

</body>
</html>