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

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">

    <script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
    <script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body ng-controller="PBDeseirtoCtrl as desierto">

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

	<div class="modal__panel" ng-class="desierto.desiertoListDialogDisplay">
		<div class="container__panel">
			<div class="toolbar__panel blue-txt">
				<p>Desierto 4 - Lotes</p>
				<span class="close__panel" ng-click="desierto.closeDesiertoListDialog()"><i class="material-icons" style="margin:0;">close</i></span>
			</div>
			<div class="content__panel">
				<ul class="saufth-collapsable">
					<li ng-repeat="property in desierto.inmovablesData.inmovables" ng-if="property.idCondominium === 11">
						<div class="collapsable__header" ng-click="">
							<div>
								<p class="futura-book collapsable__heading" style="margin: 0;">Lote {{property.number}}</p>
								<p class="collapsable__text" style="margin: 0;">{{property.condominium}}</p>
							</div>
							<div class="pl-40">
								<p class="collapsable__heading" style="margin: 0;">{{property.type}}</p>
								<p class="collapsable__text" style="margin: 0;">{{property.area}} M&sup2;</p>
							</div>
							<div flex></div>
							<div class="blue-pb00__bg">
								<div class="p-20 pointer" class="property__active" ng-class="desierto.inmovablesClassList[$index]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[$index])"></div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="desierto.dialogDisplay">
		<div class="backdrop-dialog" ng-click="desierto.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="desierto.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{desierto.propertyData.reference}}</p>
				<ul class="saufth-collapsable">
					<li ng-repeat="user in desierto.activeUsers" ng-if="user.idProfile > 1">
						<div class="saufth-collapsable-header" ng-click="desierto.selectUser(lead.idLead, $index)" ng-class="desierto.activeUsers[$index].collapsableHeaderClass">
							<div style="display:flex;"><i class="material-icons pr-15">account_circle</i>{{user.name + ' ' + user.last_name}}</div>
							<div class="py-5 pl-15"></div>
							<div class="saufth-badge blue-bg light-txt ml-15">{{user.leads.length}}</div>
						</div>
						<ul class="saufth-collapsable-body" ng-class="desierto.activeUsers[$index].collapsableBodyClass">
							<li class="saufth-collapsable-body-li" ng-repeat="lead in user.leads">
								<div class="saufth-collapsable-item-h" ng-click="desierto.selectLeadPropertyStatus(lead.idUser, lead.idLead)">
									<i class="material-icons px-15">assignment_ind</i>{{lead.name + ' ' + lead.last_name}}
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="desierto.dialogStatusDisplay">
		<div class="backdrop-dialog" ng-click="desierto.closeDialogStatus()"></div>
		<div class="container-dialog p-20 status-dialog">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="desierto.closeDialogStatus()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{desierto.propertyData.reference}}</p>
				<ul class="saufth-collapsable w100">
					<li>
						<div class="saufth-collapsable-header" ng-click="desierto.setStatus(1)"><div class="color-block pb-property-active-bg mr-15"></div>Disponible</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="desierto.setStatus(6)"><div class="color-block darkgray__bg mr-15"></div>Estratégico</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="desierto.setStatus(2)"><div class="color-block pb_lightred-bg mr-15"></div>En espera</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="desierto.setStatus(3)"><div class="color-block brown mr-15"></div>Apartado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="desierto.setStatus(4)"><div class="color-block mustard-bg mr-15"></div>Enganchado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="desierto.setStatus(5)"><div class="color-block pb_teal-bg mr-15"></div>Vendido</div>
					</li>
				</ul>
			</div>
		</div>
	</div>



	<div class="plano_container">

		<div class="container mt-64">
			<div class="row portto_blanco-quote-header">
				<div class="col s12">
					<h1 class="center-align">DESIERTO 4</h1>
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
				<button class="btn-flat right"><i style="font-size:30px;" class="material-icons" ng-click="desierto.showInmovablesList()">list</i></button>
			</div>
    	</div>
    
    	<svg class="quote__map" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			viewBox="0 0 1366 1782" style="enable-background:new 0 0 1366 1782;" xml:space="preserve">
			
			<style type="text/css">
				.st1{fill:#FFFFFF;}
				.st3{font-size:6.4706px;}
				.st4{fill:#B9BF42;}
				.st6{font-size:9.7109px;}
				.st7{fill:#CB6120;}
				.st8{opacity:0.75;fill:#CB6120;enable-background:new    ;}
				.property pb-sprite-2{fill:#4B6690;}
				.st10{font-size:6.4457px;}
				.st11{fill:none;stroke:#FFFFFF;stroke-width:0.81;stroke-miterlimit:10;}
				.st12{font-size:6.4774px;}
				.st13{font-size:9.711px;}
				.st14{font-size:9.3796px;}
				.st15{font-size:12.1212px;}
				.st16{fill:none;stroke:#1E1713;stroke-width:0.81;stroke-miterlimit:10;}
			</style>

			<title>Desierto 4</title>
			
			<image style="overflow:visible;" width="1366" height="1782" xlink:href="media/assets/img/habitta/portto-blanco/quote/desierto/desierto-4.jpg" >
			</image>
			<g>
				<g id="Capa_1-2">
					<g id="Capa_1-2-2">
						<g id="isla_a">
							<g class="property__active" ng-class="desierto.inmovablesClassList[0]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[252])">
								<polygon class="property pb-sprite-1" points="340,648 366,708.5 256.2,755.7 230.1,695.2"/>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 345.6801 675.9391)" class="st1 futura-light st3">8.82</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 242.8693 720.0591)" class="st1 futura-light st3">8.82</text>
								<text transform="matrix(0.937 -0.4187 0.3987 0.9171 294.1095 736.1895)" class="st1 futura-light st3">16.00</text>
								<text transform="matrix(0.937 -0.4187 0.3987 0.9171 271.6496 683.86)" class="st1 futura-light st3">16.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 278.6899 694.3096)" class="st1 futura-light st3">141.12 m2</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 291.0789 700.3091)" class="st4 futura-book st6">01</text>
								<polygon class="st7" points="326.9,692.1 330.7,682.6 340.2,686.4 340.2,686.4"/>
								<polygon class="st8" points="326.9,692.1 340.2,686.4 336.4,695.8"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[253]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[253])">
								<polygon class="property pb-sprite-2" points="366.2,709 389.5,763.5 279.7,810.6 256.4,756.2"/>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 370.6689 734.1598)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 267.8394 778.2496)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.937 -0.4187 0.3987 0.9171 317.9999 791.8702)" class="st1 futura-light st3">16.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 303.1492 751.3091)" class="st1 futura-light st3">128.00 m2</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 315.5395 757.3092)" class="st4 futura-book st6">02</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[254]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[254])">
								<rect x="286.7" y="784.6" transform="matrix(0.9189 -0.3944 0.3944 0.9189 -293.1862 202.6701)" class="property pb-sprite-1" width="119.5" height="59.9"/>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 393.6095 787.619)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 290.7992 831.7399)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.937 -0.4187 0.3987 0.9171 340.9498 845.3304)" class="st1 futura-light st3">16.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 326.1002 804.7894)" class="st1 futura-light st3">128.00 m2</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 338.4796 810.7793)" class="st4 futura-book st6">03</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[255]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[255])">
								<polygon class="property pb-sprite-2" points="436.8,873.4 413.2,818.5 303.3,865.7 326.9,920.6"/>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 417.1693 842.5191)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 314.3598 886.6396)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.937 -0.4187 0.3987 0.9171 364.5096 900.2294)" class="st1 futura-light st3">16.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 349.6591 859.6898)" class="st1 futura-light st3">128.00 m2</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 362.0493 865.6899)" class="st4 futura-book st6">04</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[256]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[256])">
								<polygon class="property pb-sprite-1" points="436.8,873.4 460.3,928.4 350.5,975.5 326.9,920.6"/>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 441.4195 899.0197)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 338.6096 943.1393)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.937 -0.4187 0.3987 0.9171 388.7499 956.74)" class="st1 futura-light st3">16.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 373.9093 916.2)" class="st1 futura-light st3">128.00 m2</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 386.2992 922.1896)" class="st4 futura-book st6">05</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[257]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[257])">
								<polygon class="property pb-sprite-2" points="484.4,984.5 460.8,929.6 351,976.7 374.5,1031.6"/>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 464.7396 953.3691)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 361.9301 997.4896)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.937 -0.4187 0.3987 0.9171 412.0696 1011.08)" class="st1 futura-light st3">16.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 397.2294 970.5398)" class="st1 futura-light st3">128.00 m2</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 409.6193 976.5294)" class="st4 futura-book st6">06</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[258]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[258])">
								<polygon class="property pb-sprite-1" points="483.9,983.3 507.5,1038.2 397.6,1085.3 374.1,1030.4"/>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 488.3098 1008.2902)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 385.489 1052.4092)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.937 -0.4187 0.3987 0.9171 435.6496 1066.0095)" class="st1 futura-light st3">16.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 420.7988 1025.4591)" class="st1 futura-light st3">128.00 m2</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 433.1891 1031.4592)" class="st4 futura-book st6">07</text>
								<polygon class="st7" points="468.6,1022.3 472.4,1012.9 481.9,1016.6 481.9,1016.6"/>
								<polygon class="st8" points="468.6,1022.3 481.9,1016.6 478.1,1026.1"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[259]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[259])">
								<polygon class="property pb-sprite-2" points="531.1,1093.3 507.5,1038.2 397.6,1085.3 421.3,1140.4"/>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 511.6592 1062.71)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 408.8493 1106.8295)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.937 -0.4187 0.3987 0.9171 458.9996 1120.4194)" class="st1 futura-light st3">16.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 444.1495 1079.8794)" class="st1 futura-light st3">128.00 m2</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 456.5389 1085.8799)" class="st4 futura-book st6">08</text>
								<polygon class="st7" points="492.4,1077.7 496.2,1068.3 505.7,1072 505.7,1072"/>
								<polygon class="st8" points="492.4,1077.7 505.7,1072 501.9,1081.5"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[260]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[260])">
								<rect x="428.2" y="1114.4" transform="matrix(0.9189 -0.3944 0.3944 0.9189 -411.7737 285.2306)" class="property pb-sprite-1" width="119.5" height="59.8"/>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 535.2701 1117.7294)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 432.4594 1161.8494)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.937 -0.4187 0.3987 0.9171 482.6198 1175.4401)" class="st1 futura-light st3">16.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 467.7599 1134.9097)" class="st1 futura-light st3">128.00 m2</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 480.1498 1140.8993)" class="st4 futura-book st6">09</text>
								<polygon class="st7" points="515.7,1132.1 519.5,1122.6 529,1126.4 529,1126.4"/>
								<polygon class="st8" points="515.7,1132.1 529,1126.4 525.2,1135.9"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[261]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[261])">
								<rect x="451.8" y="1169.3" transform="matrix(0.9189 -0.3944 0.3944 0.9189 -431.5095 298.9837)" class="property pb-sprite-2" width="119.5" height="59.8"/>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 559.0792 1173.1993)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 456.2697 1217.3198)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.937 -0.4187 0.3987 0.9171 506.4296 1230.9194)" class="st1 futura-light st3">16.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 491.5695 1190.3688)" class="st1 futura-light st3">128.00 m2</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 503.9492 1196.3693)" class="st4 futura-book st6">10</text>
								<polygon class="st7" points="539.4,1187.2 543.2,1177.8 552.7,1181.6 552.7,1181.6"/>
								<polygon class="st8" points="539.4,1187.2 552.7,1181.6 548.9,1191"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[262]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[262])">
								<rect x="475.3" y="1224.3" transform="matrix(0.9189 -0.3944 0.3944 0.9189 -451.3 312.7296)" class="property pb-sprite-1" width="119.5" height="59.8"/>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 582.7088 1228.2799)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 479.8999 1272.399)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.937 -0.4187 0.3987 0.9171 530.0497 1286.0001)" class="st1 futura-light st3">16.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 515.1991 1245.4493)" class="st1 futura-light st3">128.00 m2</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 527.53 1251.2996)" class="st4 futura-book st6">11</text>
								<polygon class="st7" points="563.4,1243.2 567.2,1233.7 576.6,1237.5 576.6,1237.5"/>
								<polygon class="st8" points="563.4,1243.2 576.6,1237.5 572.9,1246.9"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[263]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[263])">
								<rect x="498.9" y="1279.2" transform="matrix(0.9189 -0.3944 0.3944 0.9189 -471.0645 326.4916)" class="property pb-sprite-2" width="119.5" height="59.9"/>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 605.8497 1282.1993)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 503.0389 1326.3193)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.937 -0.4187 0.3987 0.9171 553.1899 1339.91)" class="st1 futura-light st3">16.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 538.3391 1299.3691)" class="st1 futura-light st3">128.00 m2</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 550.669 1305.2197)" class="st4 futura-book st6">12</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[264]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[264])">
								<rect x="522.5" y="1334.2" transform="matrix(0.9189 -0.3944 0.3944 0.9189 -490.8219 340.2506)" class="property pb-sprite-1" width="119.5" height="59.8"/>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 629.5695 1337.4696)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 526.76 1381.5996)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.937 -0.4187 0.3987 0.9171 576.9097 1395.1901)" class="st1 futura-light st3">16.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 562.0598 1354.639)" class="st1 futura-light st3">128.00 m2</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 574.3792 1360.49)" class="st4 futura-book st6">13</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[265]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[265])">
								<rect x="546.1" y="1389.2" transform="matrix(0.9189 -0.3944 0.3944 0.9189 -510.5925 354.0282)" class="property pb-sprite-2" width="119.5" height="59.8"/>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 653.4694 1393.1694)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 550.6591 1437.2999)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.937 -0.4187 0.3987 0.9171 600.8195 1450.8995)" class="st1 futura-light st3">16.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 585.9698 1410.3495)" class="st1 futura-light st3">128.00 m2</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 598.2888 1416.1995)" class="st4 futura-book st6">14</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[266]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[266])">
								<rect x="569.8" y="1444.1" transform="matrix(0.9189 -0.3944 0.3944 0.9189 -530.3309 367.7875)" class="property pb-sprite-1" width="119.5" height="59.8"/>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 676.6688 1447.2295)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 573.8594 1491.35)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.937 -0.4187 0.3987 0.9171 624.0098 1504.9401)" class="st1 futura-light st3">16.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 609.1591 1464.3894)" class="st1 futura-light st3">128.00 m2</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 621.4891 1470.2496)" class="st4 futura-book st6">15</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[267]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[267])">
								<rect x="593.3" y="1499" transform="matrix(0.9189 -0.3944 0.3944 0.9189 -550.0532 381.5303)" class="property pb-sprite-2" width="119.5" height="59.7"/>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 700.1691 1501.9797)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 597.4191 1546.2501)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.937 -0.4187 0.3987 0.9171 647.5698 1559.8401)" class="st1 futura-light st3">16.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 632.7202 1519.2996)" class="st1 futura-light st3">128.00 m2</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 644.9797 1524.9998)" class="st4 futura-book st6">16</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[268]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[268])">
								<rect x="616.9" y="1553.9" transform="matrix(0.9189 -0.3944 0.3944 0.9189 -569.8281 395.3003)" class="property pb-sprite-1" width="119.5" height="59.9"/>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 723.8998 1557.2793)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 621.0891 1601.3993)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.937 -0.4187 0.3987 0.9171 671.2297 1614.9896)" class="st1 futura-light st3">16.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 656.3901 1574.4392)" class="st1 futura-light st3">128.00 m2</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 668.7095 1580.2998)" class="st4 futura-book st6">17</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[269]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[269])">
								<polygon class="property pb-sprite-2" points="743.3,1587.9 766.9,1642.8 657.1,1689.9 633.5,1635"/>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 747.1893 1611.5697)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 644.3794 1655.6893)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.937 -0.4187 0.3987 0.9171 694.5497 1669.2803)" class="st1 futura-light st3">16.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 679.6892 1628.7393)" class="st1 futura-light st3">128.00 m2</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 692.0104 1634.5798)" class="st4 futura-book st6">18</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[270]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[270])">
								<polygon class="property pb-sprite-1" points="766.9,1642.8 796.5,1711.8 683,1750.4 657.1,1689.9"/>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 773.0794 1671.9296)" class="st1 futura-light st3">10.04</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 669.549 1714.3191)" class="st1 futura-light st3">8.81</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 705.9594 1689.9594)" class="st1 futura-light st3">150.85 m2</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 718.3497 1695.9594)" class="st4 futura-book st6">19</text>
								<text transform="matrix(0.9737 -0.3312 0.3312 0.9435 722.4601 1734.4399)" class="st1 futura-light st10">16.05</text>
								<polygon class="st7" points="754.8,1689.2 758.6,1679.7 768.1,1683.5 768.1,1683.5"/>
								<polygon class="st8" points="754.8,1689.2 768.1,1683.5 764.3,1693"/>
							</g>
							<g>
								<line class="st11" x1="413.1" y1="818.3" x2="303.2" y2="865.4"/>
								<line class="st11" x1="436.7" y1="873.2" x2="326.8" y2="920.3"/>
								<line class="st11" x1="460.2" y1="928.1" x2="350.4" y2="975.3"/>
								<line class="st11" x1="483.8" y1="983" x2="374" y2="1030.2"/>
								<line class="st11" x1="507.4" y1="1038" x2="397.5" y2="1085.1"/>
								<line class="st11" x1="531" y1="1093" x2="421.2" y2="1140.2"/>
								<line class="st11" x1="554.5" y1="1148" x2="444.7" y2="1195.1"/>
								<line class="st11" x1="578.1" y1="1202.9" x2="468.3" y2="1250"/>
								<line class="st11" x1="601.7" y1="1257.8" x2="491.9" y2="1304.9"/>
								<line class="st11" x1="625.3" y1="1312.9" x2="515.5" y2="1360"/>
								<line class="st11" x1="648.9" y1="1367.8" x2="539.1" y2="1414.9"/>
								<line class="st11" x1="672.5" y1="1422.7" x2="562.6" y2="1469.8"/>
								<line class="st11" x1="696" y1="1477.6" x2="586.2" y2="1524.8"/>
								<line class="st11" x1="719.6" y1="1532.6" x2="609.8" y2="1579.7"/>
								<line class="st11" x1="743.2" y1="1587.6" x2="633.4" y2="1634.8"/>
								<line class="st11" x1="766.8" y1="1642.5" x2="657" y2="1689.7"/>
								<line class="st11" x1="366" y1="708.5" x2="256.2" y2="755.7"/>
								<line class="st11" x1="389.5" y1="763.5" x2="279.7" y2="810.6"/>
								<line class="st11" x1="413.2" y1="818.5" x2="303.3" y2="865.7"/>
								<line class="st11" x1="436.8" y1="873.4" x2="326.9" y2="920.6"/>
								<line class="st11" x1="460.3" y1="928.4" x2="350.5" y2="975.5"/>
								<line class="st11" x1="483.9" y1="983.3" x2="374" y2="1030.4"/>
								<line class="st11" x1="507.5" y1="1038.2" x2="397.6" y2="1085.3"/>
								<line class="st11" x1="531.1" y1="1093.3" x2="421.3" y2="1140.4"/>
								<line class="st11" x1="554.6" y1="1148.2" x2="444.8" y2="1195.3"/>
								<line class="st11" x1="578.2" y1="1203.1" x2="468.4" y2="1250.2"/>
								<line class="st11" x1="601.8" y1="1258" x2="492" y2="1305.2"/>
								<line class="st11" x1="625.4" y1="1313.1" x2="515.6" y2="1360.2"/>
								<line class="st11" x1="649" y1="1368" x2="539.2" y2="1415.1"/>
								<line class="st11" x1="672.6" y1="1423" x2="562.7" y2="1470.1"/>
								<line class="st11" x1="696.1" y1="1477.9" x2="586.3" y2="1525"/>
								<line class="st11" x1="719.7" y1="1532.8" x2="609.9" y2="1579.9"/>
								<line class="st11" x1="743.3" y1="1587.9" x2="633.5" y2="1635"/>
								<line class="st11" x1="766.9" y1="1642.8" x2="657.1" y2="1689.9"/>
							</g>
						</g>
						<g id="isla_b">
							<g class="property__active" ng-class="desierto.inmovablesClassList[271]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[271])">
								<polygon id="b_l_20" class="property pb-sprite-2" points="812.7,1584.4 858.3,1690.6 923.4,1668.4 894,1562.5"/>
								<text transform="matrix(0.9737 -0.3312 0.3312 0.9435 881.7698 1678.6492)" class="st1 futura-light st10">9.20</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 854.1602 1580.4591)" class="st1 futura-light st12">11.26</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 861.31 1613.5497)" class="st1 futura-light st12">153.91 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 872.6098 1621.4401)" class="st4 futura-book st13">20</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 836.6995 1632.3097)" class="st1 futura-light st3">15.47</text>
								<polygon class="st7" points="848.2,1631.4 853.4,1622.6 862.2,1627.7 862.2,1627.7"/>
								<polygon class="st8" points="848.2,1631.4 862.2,1627.7 857,1636.5"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[272]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[272])">
								<polygon id="b_l_21" class="property pb-sprite-1" points="958.9,1544.9 987.1,1646.7 923.4,1668.4 894,1562.5"/>
								<text transform="matrix(0.9737 -0.3312 0.3312 0.9435 949.1802 1656.8494)" class="st1 futura-light st10">9.02</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 921.2399 1561.5886)" class="st1 futura-light st12">9.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 910.6907 1604.2404)" class="st1 futura-light st12">14.72</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 933.3904 1589.9404)" class="st1 futura-light st12">129.82 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 944.6897 1597.83)" class="st4 futura-book st13">21</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[273]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[273])">
								<polygon id="b_l_22" class="property pb-sprite-2" points="1023.9,1527.4 1050.9,1624.9 987.1,1646.7 958.9,1544.9"/>
								<text transform="matrix(0.9737 -0.3312 0.3312 0.9435 1012.9298 1635.0995)" class="st1 futura-light st10">9.02</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 987.2604 1543.0792)" class="st1 futura-light st12">9.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 973.5706 1585.5499)" class="st1 futura-light st12">14.13</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 996.931 1569.0995)" class="st1 futura-light st12">124.49 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 1008.2405 1576.9701)" class="st4 futura-book st13">22</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[274]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[274])">
								<polygon id="b_l_23" class="property pb-sprite-1" points="1088.9,1509.9 1114.7,1603.1 1050.9,1624.9 1023.9,1527.4"/>
								<text transform="matrix(0.9737 -0.3312 0.3312 0.9435 1076.6598 1614.8499)" class="st1 futura-light st10">9.02</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 1051.8903 1525.3694)" class="st1 futura-light st12">9.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1094.4305 1551.8402)" class="st1 futura-light st12">12.93</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1037.9906 1566.9502)" class="st1 futura-light st12">13.54</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1060.9598 1552.2202)" class="st1 futura-light st12">119.15 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 1072.2605 1560.0891)" class="st4 futura-book st13">23</text>
								<polygon class="st7" points="1048.7,1571.9 1053.7,1563 1062.6,1568.1 1062.6,1568.1"/>
								<polygon class="st8" points="1048.7,1571.9 1062.6,1568.1 1057.5,1576.9"/>
							</g>
							<g>
								<line class="st11" x1="893.2" y1="1562.1" x2="922.5" y2="1668.1"/>
								<line class="st11" x1="958.9" y1="1544.9" x2="987.1" y2="1646.7"/>
								<line class="st11" x1="1023.9" y1="1527.4" x2="1050.9" y2="1624.9"/>
							</g>
						</g>
						<g id="isla_c">
							<g class="property__active" ng-class="desierto.inmovablesClassList[275]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[275])">
								<polygon id="c_l_24" class="property pb-sprite-2" points="737.4,1409.1 785.1,1520.1 840.5,1505.2 808.6,1390"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 801.6204 1511.9392)" class="st1 futura-light st12">7.65</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 768.17 1407.2285)" class="st1 futura-light st12">9.84</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 781.6904 1439.2592)" class="st1 futura-light st12">140.03 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 792.9799 1447.1497)" class="st4 futura-book st13">24</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 759.0601 1454.0596)" class="st1 futura-light st3">16.16</text>
								<polygon class="st7" points="791.9,1493.4 797,1484.5 805.8,1489.6 805.8,1489.6"/>
								<polygon class="st8" points="791.9,1493.4 805.8,1489.6 800.7,1498.4"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[276]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[276])">
								<polygon id="c_l_25" class="property pb-sprite-1" points="898.2,1489.7 840.5,1505.2 808.6,1390 866.3,1374.4"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 860.2797 1495.9189)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 823.4202 1434.7202)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 840.3409 1423.2594)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 851.65 1431.1395)" class="st4 futura-book st13">25</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[277]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[277])">
								<polygon id="c_l_26" class="property pb-sprite-2" points="866.3,1374.4 924,1358.9 955.9,1474.1 898.2,1489.7"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 918.29 1480.0593)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 881.4302 1418.8496)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 898.3506 1407.3798)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 909.6499 1415.2595)" class="st4 futura-book st13">26</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[278]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[278])">
								<polygon id="c_l_27" class="property pb-sprite-1" points="955.9,1474.1 1013.6,1458.6 981.8,1343.4 924,1358.9"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 976.3901 1465.6193)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 939.5306 1404.4097)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 956.4409 1392.9396)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 967.7505 1400.8297)" class="st4 futura-book st13">27</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[279]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[279])">
								<polygon id="c_l_28" class="property pb-sprite-2" points="1071.3,1443.1 1013.6,1458.6 981.8,1343.4 1039.5,1327.7"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 1034.7601 1450.5792)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1045.9806 1376.64)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 997.9005 1389.3799)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1014.8203 1377.9193)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 1026.121 1385.7896)" class="st4 futura-book st13">28</text>
								<polygon class="st7" points="1031.1,1429.8 1036.2,1420.9 1045,1426 1045,1426"/>
								<polygon class="st8" points="1031.1,1429.8 1045,1426 1040,1434.8"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[280]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[280])">
								<polygon id="c_l_29" class="property pb-sprite-1" points="1004.6,1201.8 1039.5,1327.7 981.8,1343.4 946.8,1217.3"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 1002.2099 1333.5588)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 970.83 1217.3793)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1013.4404 1259.6193)" class="st1 futura-light st12">17.50</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 965.3608 1272.3499)" class="st1 futura-light st12">17.50</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 982.2809 1260.8901)" class="st1 futura-light st12">140.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 993.59 1268.7703)" class="st4 futura-book st13">29</text>
								<polygon class="st7" points="974,1235.2 977.8,1225.7 987.3,1229.5 987.3,1229.5"/>
								<polygon class="st8" points="974,1235.2 987.3,1229.5 983.5,1239"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[281]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[281])">
								<polygon id="c_l_30" class="property pb-sprite-2" points="889.2,1232.9 946.8,1217.3 981.8,1343.4 924,1358.9"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 945.4598 1349.4388)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 914.0803 1233.2593)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 908.6011 1288.2401)" class="st1 futura-light st12">17.50</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 925.5305 1276.7699)" class="st1 futura-light st12">140.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 936.8204 1284.65)" class="st4 futura-book st13">30</text>
								<polygon class="st7" points="918.6,1251.1 922.4,1241.7 931.8,1245.4 931.8,1245.4"/>
								<polygon class="st8" points="918.6,1251.1 931.8,1245.4 928,1254.9"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[282]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[282])">
								<polygon id="c_l_31" class="property pb-sprite-1" points="889.2,1232.9 924,1358.9 866.3,1374.4 831.3,1248.4"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 887.63 1364.8197)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 856.2502 1248.6392)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 850.7706 1303.6096)" class="st1 futura-light st12">17.50</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 867.6808 1292.1395)" class="st1 futura-light st12">140.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 878.9908 1300.0294)" class="st4 futura-book st13">31</text>
								<polygon class="st7" points="858.8,1266.2 862.6,1256.8 872.1,1260.5 872.1,1260.5"/>
								<polygon class="st8" points="858.8,1266.2 872.1,1260.5 868.3,1270"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[283]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[283])">
								<polygon id="c_l_32" class="property pb-sprite-2" points="773.6,1263.9 831.3,1248.4 866.3,1374.4 808.6,1390"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 830.6703 1380.399)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 799.2903 1264.2286)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 793.8208 1319.2001)" class="st1 futura-light st12">17.50</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 810.7404 1307.7194)" class="st1 futura-light st12">140.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 822.0306 1315.6095)" class="st4 futura-book st13">32</text>
								<polygon class="st7" points="801.2,1279.5 805,1270 814.5,1273.8 814.5,1273.8"/>
								<polygon class="st8" points="801.2,1279.5 814.5,1273.8 810.7,1283.3"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[284]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[284])">
								<polygon id="c_l_33" class="property pb-sprite-1" points="773.6,1263.9 808.6,1390 750.7,1405.5 715.9,1279.5"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 771.5997 1396.6989)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 740.2202 1280.5192)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 734.7403 1335.49)" class="st1 futura-light st12">17.50</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 751.6607 1324.0201)" class="st1 futura-light st12">140.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 762.9604 1331.8998)" class="st4 futura-book st13">33</text>
								<polygon class="st7" points="742.3,1294.7 746.1,1285.2 755.5,1289 755.5,1289"/>
								<polygon class="st8" points="742.3,1294.7 755.5,1289 751.8,1298.5"/>
							</g>
							<g>
								<line class="st11" x1="946.7" y1="1217" x2="1013.5" y2="1458.3"/>
								<line class="st11" x1="955.8" y1="1473.9" x2="889" y2="1232.6"/>
								<line class="st11" x1="831.2" y1="1248.2" x2="898.1" y2="1489.4"/>
								<line class="st11" x1="840.4" y1="1505" x2="773.5" y2="1263.6"/>
								<line class="st11" x1="1039.4" y1="1327.5" x2="737.3" y2="1408.9"/>
								<line class="st11" x1="946.8" y1="1217.3" x2="1013.6" y2="1458.6"/>
								<line class="st11" x1="955.9" y1="1474.1" x2="889.2" y2="1232.9"/>
								<line class="st11" x1="831.3" y1="1248.4" x2="898.2" y2="1489.7"/>
								<line class="st11" x1="840.5" y1="1505.2" x2="773.6" y2="1263.9"/>
								<line class="st11" x1="1039.5" y1="1327.7" x2="737.4" y2="1409.1"/>
							</g>
						</g>
						<g id="isla_d">
							<g class="property__active" ng-class="desierto.inmovablesClassList[285]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[285])">
								<polygon id="d_l_34" class="property pb-sprite-2" points="928.4,1150.3 986.1,1134.7 951.1,1008.6 893.4,1024.2"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 949.0501 1140.3785)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 960.2704 1066.4397)" class="st1 futura-light st12">17.50</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 912.1903 1079.1796)" class="st1 futura-light st12">17.50</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 929.1008 1067.7103)" class="st1 futura-light st12">140.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 940.4105 1075.5803)" class="st4 futura-book st13">34</text>
								<polygon class="st7" points="943.7,1120.7 947.5,1111.2 957,1115 957,1115"/>
								<polygon class="st8" points="943.7,1120.7 957,1115 953.2,1124.5"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[286]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[286])">
								<polygon id="d_l_35" class="property pb-sprite-1" points="853.5,880.1 893.4,1024.2 951.1,1008.6 911.3,864.6"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 876.8 883.149)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 912.8799 1014.8086)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 922.0703 928.7292)" class="st1 futura-light st12">20.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 874.7101 943.8501)" class="st1 futura-light st12">20.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 892.4504 933.1897)" class="st1 futura-light st12">160.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 903.751 941.0598)" class="st4 futura-book st13">35</text>
								<polygon class="st7" points="880.4,899.2 884.2,889.8 893.7,893.5 893.7,893.5"/>
								<polygon class="st8" points="880.4,899.2 893.7,893.5 889.9,903"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[287]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[287])">
								<polygon id="d_l_36" class="property pb-sprite-2" points="853.5,880.1 893.4,1024.2 835.7,1039.7 795.8,895.7"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 819.2799 898.5987)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 855.3497 1030.2588)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 817.1694 959.3098)" class="st1 futura-light st12">20.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 834.9203 948.6395)" class="st1 futura-light st12">160.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 846.5106 956.4492)" class="st4 futura-book st14">36</text>
								<polygon class="st7" points="821,913.6 824.8,904.1 834.3,907.9 834.3,907.9"/>
								<polygon class="st8" points="821,913.6 834.3,907.9 830.5,917.4"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[288]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[288])">
								<polygon id="d_l_37" class="property pb-sprite-1" points="738,911.2 777.9,1055.4 835.7,1039.7 795.8,895.7"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 761.1799 913.1296)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 797.2502 1044.7896)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 759.0701 973.8394)" class="st1 futura-light st12">20.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 776.82 963.1694)" class="st1 futura-light st12">160.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 785.8101 970.3698)" class="st4 futura-book st15">37</text>
								<polygon class="st7" points="763.9,930.3 767.7,920.8 777.1,924.6 777.1,924.6"/>
								<polygon class="st8" points="763.9,930.3 777.1,924.6 773.4,934"/>
							</g>
							<g>
								<line class="st11" x1="853.4" y1="879.9" x2="928.3" y2="1150"/>
								<line class="st11" x1="835.6" y1="1039.5" x2="795.7" y2="895.4"/>
								<polyline class="st11" points="951,1008.4 777.8,1055.1 737.9,911"/>
								<line class="st11" x1="853.5" y1="880.1" x2="928.4" y2="1150.3"/>
								<line class="st11" x1="835.7" y1="1039.7" x2="795.8" y2="895.7"/>
								<polyline class="st11" points="951.1,1008.6 777.9,1055.4 738,911.2"/>
							</g>
						</g>
						<g id="isla_e">
							<g class="property__active" ng-class="desierto.inmovablesClassList[289]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[289])">
								<polygon id="e_l_38" class="property pb-sprite-2" points="892.4,798.2 834.7,813.6 799.8,687.7 857.5,672"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 857.4703 802.8192)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 821.1907 739.9)" class="st1 futura-light st12">17.50</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 866.0402 728.1696)" class="st1 futura-light st12">17.50</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 839.1003 728.4895)" class="st1 futura-light st12">140.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 850.3906 736.3696)" class="st4 futura-book st13">38</text>
								<polygon class="st7" points="851.9,786.4 855.6,777 865.1,780.8 865.1,780.8"/>
								<polygon class="st8" points="851.9,786.4 865.1,780.8 861.3,790.2"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[290]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[290])">
								<polygon id="e_l_39" class="property pb-sprite-1" points="834.2,815 776.3,830.6 741.6,704.5 799.3,689"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 797.7202 821.5588)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 761.4305 758.6398)" class="st1 futura-light st12">17.50</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 780.2303 745.9504)" class="st1 futura-light st12">140.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 791.5203 753.8295)" class="st4 futura-book st13">39</text>
								<polygon class="st7" points="790.8,805.9 794.6,796.5 804,800.2 804,800.2"/>
								<polygon class="st8" points="790.8,805.9 804,800.2 800.3,809.7"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[291]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[291])">
								<polygon id="e_l_40" class="property pb-sprite-2" points="719.3,844.7 776.8,829.2 742.1,703.2 684.3,718.8"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 741.6404 834.0994)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 705.3507 771.1693)" class="st1 futura-light st12">17.50</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 724.1508 758.5)" class="st1 futura-light st12">140.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 735.4403 766.3691)" class="st4 futura-book st13">40</text>
								<polygon class="st7" points="734.1,816 737.9,806.6 747.3,810.4 747.3,810.4"/>
								<polygon class="st8" points="734.1,816 747.3,810.4 743.6,819.8"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[292]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[292])">
								<polygon id="e_l_41" class="property pb-sprite-1" points="719.3,844.7 661.6,860.3 626.6,734.3 684.3,718.8"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 682.7198 850.1291)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 646.4404 787.2094)" class="st1 futura-light st12">17.50</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 665.2405 774.5401)" class="st1 futura-light st12">140.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 676.5408 782.3993)" class="st4 futura-book st13">41</text>
								<polygon class="st7" points="675.6,833.3 679.4,823.8 688.9,827.6 688.9,827.6"/>
								<polygon class="st8" points="675.6,833.3 688.9,827.6 685.1,837.1"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[293]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[293])">
								<polygon id="e_l_42" class="property pb-sprite-2" points="568.8,749.8 603.7,875.8 661.6,860.3 626.6,734.3"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 624.6303 865.7893)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 588.3403 802.8696)" class="st1 futura-light st12">17.50</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 607.1404 790.2003)" class="st1 futura-light st12">140.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 618.4304 798.0693)" class="st4 futura-book st13">42</text>
								<polygon class="st7" points="619.1,849.9 622.9,840.4 632.4,844.2 632.4,844.2"/>
								<polygon class="st8" points="619.1,849.9 632.4,844.2 628.6,853.7"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[294]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[294])">
								<polygon id="e_l_43" class="property pb-sprite-1" points="603.7,875.8 546.1,891.4 511.1,765.3 568.8,749.8"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 566.1604 881.7089)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 529.8811 818.7897)" class="st1 futura-light st12">17.50</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 548.681 806.1196)" class="st1 futura-light st12">140.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 559.9908 813.9893)" class="st4 futura-book st13">43</text>
								<polygon class="st7" points="559.2,866.8 563,857.4 572.4,861.1 572.4,861.1"/>
								<polygon class="st8" points="559.2,866.8 572.4,861.1 568.7,870.6"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[295]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[295])">
								<polygon id="e_l_44" class="property pb-sprite-1" points="479.2,650.1 511.1,765.3 470.5,776.4 422.8,665.4"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 481.2701 770.7092)" class="st1 futura-light st12">5.65</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 444.4601 666.2888)" class="st1 futura-light st12">7.83</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 461.8302 700.33)" class="st1 futura-light st12">107.80 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 473.1301 708.2094)" class="st4 futura-book st13">44</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 445.6096 713.5497)" class="st1 futura-light st3">16.16</text>
								<polygon class="st7" points="452.3,684.4 457.4,675.6 466.2,680.6 466.2,680.6"/>
								<polygon class="st8" points="452.3,684.4 466.2,680.6 461.2,689.5"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[296]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[296])">
								<polygon id="e_l_45" class="property pb-sprite-2" points="479.2,650.1 511.1,765.3 568.8,749.8 537,634.6"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 531.3398 757.1987)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 503.3902 651.0093)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 496.6403 700.6)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 516.7704 686.9999)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 528.0604 694.8799)" class="st4 futura-book st13">45</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[297]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[297])">
								<polygon id="e_l_46" class="property pb-sprite-1" points="594.7,619.6 626.6,734.8 568.8,750.4 537,635.2"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 588.6404 741.2693)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 560.7098 635.079)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 553.9503 684.6794)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 574.0798 671.0695)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 585.3802 678.9497)" class="st4 futura-book st13">46</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[298]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[298])">
								<polygon id="e_l_47" class="property pb-sprite-2" points="652.4,603.5 684.3,718.8 626.6,734.3 594.7,619"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 646.6704 725.4288)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 618.7299 619.2391)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 611.9702 668.8395)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 632.1008 655.2293)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 643.4003 663.1098)" class="st4 futura-book st13">47</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[299]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[299])">
								<polygon id="e_l_48" class="property pb-sprite-1" points="710.2,588 742.1,703.2 684.3,718.8 652.4,603.5"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 703.3801 709.5693)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 675.45 603.379)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 668.69 652.97)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 688.8202 639.3701)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 700.1096 647.2502)" class="st4 futura-book st13">48</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[300]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[300])">
								<polygon id="e_l_49" class="property pb-sprite-2" points="767.8,572.4 799.8,687.7 742.1,703.2 710.2,588"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 761.7699 694.4788)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 733.8204 588.2894)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 727.0706 637.9)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 747.1904 624.2795)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 758.5004 632.1591)" class="st4 futura-book st13">49</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[301]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[301])">
								<polygon id="e_l_50" class="property pb-sprite-1" points="825.7,556.8 857.5,672 799.8,687.7 767.8,572.4"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 820.0399 677.9493)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 792.1003 571.7593)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 785.3409 621.35)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 832.3903 608.0999)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 805.4705 607.74)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 816.7696 615.6296)" class="st4 futura-book st13">50</text>
								<polygon class="st7" points="795.6,588.8 800.7,580 809.5,585 809.5,585"/>
								<polygon class="st8" points="795.6,588.8 809.5,585 804.5,593.9"/>
							</g>
							<g>
								<line class="st11" x1="767.8" y1="572.4" x2="834.7" y2="813.6"/>
								<line class="st11" x1="776.8" y1="829.2" x2="710.2" y2="588"/>
								<line class="st11" x1="652.4" y1="603.5" x2="719.3" y2="844.7"/>
								<line class="st11" x1="661.6" y1="860.2" x2="594.7" y2="619"/>
								<line class="st11" x1="537" y1="634.6" x2="603.7" y2="875.8"/>
								<line class="st11" x1="546.1" y1="891.4" x2="479.2" y2="650.1"/>
								<line class="st11" x1="857.5" y1="672" x2="470.5" y2="776.4"/>
							</g>
						</g>
						<g id="isla_f">
							<g class="property__active" ng-class="desierto.inmovablesClassList[302]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[302])">
								<polygon id="f_l_51" class="property pb-sprite-2" points="808.7,490 776.8,374.7 719.1,390.2 750.9,505.4"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 772.4999 495.1495)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 737.8103 438.5594)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 784.8604 425.3)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 757.9309 424.9498)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 769.2296 432.8298)" class="st4 futura-book st13">51</text>
								<polygon class="st7" points="765.4,475.6 770.4,466.7 779.3,471.8 779.3,471.8"/>
								<polygon class="st8" points="765.4,475.6 779.3,471.8 774.2,480.6"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[303]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[303])">
								<polygon id="f_l_52" class="property pb-sprite-1" points="693.2,521 750.9,505.4 719.1,390.2 661.3,405.7"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 713.7802 511.1592)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 679.0804 454.5795)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 699.2106 440.9603)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 710.5108 448.8398)" class="st4 futura-book st13">52</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[304]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[304])">
								<polygon id="f_l_53" class="property pb-sprite-2" points="635.5,536.5 693.2,521 661.3,405.7 603.6,421.3"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 657.4801 527.2189)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 622.7799 470.6298)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 642.9105 457.0196)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 654.2101 464.9003)" class="st4 futura-book st13">53</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[305]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[305])">
								<polygon id="f_l_54" class="property pb-sprite-1" points="577.7,552.1 635.5,536.5 603.6,421.3 545.8,436.9"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 598.7401 543.1886)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 564.0404 486.5898)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 584.171 472.9795)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 595.4703 480.8593)" class="st4 futura-book st13">54</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[306]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[306])">
								<polygon id="f_l_55" class="property pb-sprite-2" points="520,567.6 577.7,552.1 545.8,436.9 488.1,452.4"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 539.1301 558.3593)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 504.4306 501.7598)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 524.5704 488.1501)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 535.8596 496.0296)" class="st4 futura-book st13">55</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[307]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[307])">
								<polygon id="f_l_56" class="property pb-sprite-1" points="416.5,471.7 464.2,582.8 520,567.6 488.1,452.4"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 481.91 574.2586)" class="st1 futura-light st12">7.74</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 462.6812 504.3599)" class="st1 futura-light st12">141.39 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 473.9702 512.2394)" class="st4 futura-book st13">56</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 441.1497 522.2595)" class="st1 futura-light st3">16.18</text>
								<polygon class="st7" points="471,553.1 476.1,544.2 484.9,549.3 484.9,549.3"/>
								<polygon class="st8" points="471,553.1 484.9,549.3 479.9,558.1"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[308]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[308])">
								<polygon id="f_l_57" class="property pb-sprite-2" points="368.9,360.7 456.2,337.1 488.1,452.4 416.5,471.7"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 409.6501 355.7592)" class="st1 futura-light st12">12.10</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 443.8902 461.4188)" class="st1 futura-light st12">9.94</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 423.3607 388.7298)" class="st1 futura-light st12">176.18 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 434.6609 396.6093)" class="st4 futura-book st13">57</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 391.4697 406.4893)" class="st1 futura-light st3">16.16</text>
								<polygon class="st7" points="414.6,373.2 419.7,364.3 428.6,369.4 428.6,369.4"/>
								<polygon class="st8" points="414.6,373.2 428.6,369.4 423.5,378.2"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[309]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[309])">
								<polygon id="f_l_58" class="property pb-sprite-1" points="513.9,321.7 545.8,436.9 488.1,452.4 456.2,337.1"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 479.7098 337.5487)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 506.9904 444.1693)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 472.6198 384.2301)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 492.1904 373.2398)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 503.4911 381.1202)" class="st4 futura-book st13">58</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[310]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[310])">
								<polygon id="f_l_59" class="property pb-sprite-2" points="513.9,321.7 571.7,306.1 603.6,421.3 545.8,436.9"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 537.96 321.6489)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 565.2198 428.2789)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 530.8503 368.35)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 550.431 357.36)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 561.7197 365.2395)" class="st4 futura-book st13">59</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[311]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[311])">
								<polygon id="f_l_60" class="property pb-sprite-1" points="629.4,290.6 661.3,405.7 603.6,421.3 571.7,306.1"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 595.8498 305.6188)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 622.48 413.809)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 588.4603 355.47)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 607.4407 344.8795)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 618.7297 352.76)" class="st4 futura-book st13">60</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[312]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[312])">
								<polygon id="f_l_61" class="property pb-sprite-2" points="687.1,275 629.4,290.6 661.3,405.7 719.1,390.2"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 655.7601 289.019)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 680.9602 397.249)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 645.3006 337.5998)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 667.6104 325.5295)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 678.8995 333.4099)" class="st4 futura-book st13">61</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[313]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[313])">
								<polygon id="f_l_62" class="property pb-sprite-1" points="744.8,259.4 776.8,374.7 719.1,390.2 687.1,275"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 740.7399 380.6489)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 712.2902 275.309)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 752.7707 310.8194)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 703.7902 322.5995)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 720.7306 311.9402)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 732.0203 319.8194)" class="st4 futura-book st13">62</text>
								<polygon class="st7" points="714.5,292.7 719.6,283.8 728.4,288.9 728.4,288.9"/>
								<polygon class="st8" points="714.5,292.7 728.4,288.9 723.4,297.7"/>
							</g>
							<g>
								<line class="st11" x1="687.1" y1="275" x2="750.9" y2="505.4"/>
								<line class="st11" x1="693.2" y1="521" x2="629.4" y2="290.6"/>
								<line class="st11" x1="571.7" y1="306.1" x2="635.5" y2="536.5"/>
								<line class="st11" x1="577.7" y1="552.1" x2="513.9" y2="321.7"/>
								<line class="st11" x1="456.2" y1="337.1" x2="520" y2="567.6"/>
								<line class="st11" x1="416.5" y1="471.7" x2="776.8" y2="374.7"/>
							</g>
						</g>
						<g id="isla_g">
							<g class="property__active" ng-class="desierto.inmovablesClassList[314]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[314])">
								<polyline id="g_l_63" class="property pb-sprite-2" points="219.2,489.4 195.6,434.5 305.5,387.4 329,442.3"/>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 310.1495 410.88)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 207.3388 455)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.937 -0.4187 0.3987 0.9171 258.5695 471.1301)" class="st1 futura-light st3">16.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 243.1593 429.26)" class="st1 futura-light st3">128.00 m2</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 255.5396 435.2495)" class="st4 futura-book st6">63</text>
								<polygon class="st7" points="289.3,425.6 293.1,416.2 302.6,419.9 302.6,419.9"/>
								<polygon class="st8" points="289.3,425.6 302.6,419.9 298.8,429.4"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[315]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[315])">
								<polygon id="g_l_64" class="property pb-sprite-1" points="282,332.6 305.5,387.4 195.6,434.5 172.1,379.6"/>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 286.5885 355.9794)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 183.78 400.0995)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.937 -0.4187 0.3987 0.9171 234.6996 415.5)" class="st1 futura-light st3">16.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 219.5896 374.3494)" class="st1 futura-light st3">128.00 m2</text>
								<text transform="matrix(0.3788 0.8573 -0.9171 0.3987 231.9893 380.3606)" class="st4 futura-book st6">64</text>
								<polygon class="st7" points="265.9,371.1 269.7,361.6 279.2,365.4 279.2,365.4"/>
								<polygon class="st8" points="265.9,371.1 279.2,365.4 275.4,374.9"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[316]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[316])">
								<polyline id="g_l_65" class="property pb-sprite-2" points="172.1,379.6 148.5,324.7 258.4,277.6 281.9,332.5"/>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 196.0298 319.4493)" class="st1 futura-light st3">128.00 m2</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 208.4092 325.4296)" class="st4 futura-book st6">65</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 160.2093 345.1893)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 263.02 301.0692)" class="st1 futura-light st3">8.00</text>
								<text transform="matrix(0.937 -0.4187 0.3987 0.9171 211.0997 360.5099)" class="st1 futura-light st3">16.00</text>
								<text transform="matrix(0.937 -0.4187 0.3987 0.9171 190.5099 312.5301)" class="st1 futura-light st3">16.00</text>
								<polygon class="st7" points="243.2,318.1 246.9,308.6 256.4,312.4 256.4,312.4"/>
								<polygon class="st8" points="243.2,318.1 256.4,312.4 252.6,321.9"/>
							</g>
							<g>
								<line class="st11" x1="281.9" y1="332.4" x2="172" y2="379.4"/>
								<line class="st11" x1="195.5" y1="434.3" x2="305.4" y2="387.2"/>
								<line class="st11" x1="282" y1="332.6" x2="172.1" y2="379.6"/>
								<line class="st11" x1="195.6" y1="434.5" x2="305.5" y2="387.4"/>
							</g>
						</g>
						<g id="isla_h">
							<g class="property__active" ng-class="desierto.inmovablesClassList[317]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[317])">
								<polygon id="h_l_66" class="property pb-sprite-1" points="293.8,185.4 341.4,296.4 405.5,279.2 373.7,164"/>
								<text transform="matrix(0.4187 0.937 -0.9171 0.3987 315.3596 229.129)" class="st1 futura-light st3">16.16</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 365.2999 288.1592)" class="st1 futura-light st12">8.66</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 331.0297 180.9293)" class="st1 futura-light st12">11.05</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 379.9998 211.7895)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 344.5301 216.3095)" class="st1 futura-light st12">159.39 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 355.8302 224.1994)" class="st4 futura-book st13">66</text>
								<polygon class="st7" points="361.3,271.3 365.1,261.8 374.6,265.6 374.6,265.6"/>
								<polygon class="st8" points="361.3,271.3 374.6,265.6 370.8,275.1"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[318]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[318])">
								<polygon id="h_l_67" class="property pb-sprite-2" points="373.7,164 438.6,146.5 470.5,261.7 405.5,279.2"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 432.5001 269.7094)" class="st1 futura-light st12">9.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 404.1002 161.3195)" class="st1 futura-light st12">9.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 446.0912 196.1296)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 413.7002 198.7296)" class="st1 futura-light st12">144.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 425.0006 206.6092)" class="st4 futura-book st13">67</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[319]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[319])">
								<polygon id="h_l_68" class="property pb-sprite-1" points="438.6,146.5 470.5,261.7 535.5,244.2 503.5,129"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 496.5999 252.989)" class="st1 futura-light st12">9.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 468.1898 144.5987)" class="st1 futura-light st12">9.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 510.1903 179.4196)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 477.8008 182.01)" class="st1 futura-light st12">144.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 489.1001 189.9102)" class="st4 futura-book st13">68</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[320]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[320])">
								<polygon id="h_l_69" class="property pb-sprite-2" points="568.5,111.5 600.4,226.7 535.5,244.2 503.5,129"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 562.0903 235.4893)" class="st1 futura-light st12">9.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 533.6898 127.0894)" class="st1 futura-light st12">9.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 575.6909 161.9102)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 543.2896 164.5099)" class="st1 futura-light st12">144.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 554.5903 172.3794)" class="st4 futura-book st13">69</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[321]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[321])">
								<polygon id="h_l_70" class="property pb-sprite-1" points="568.5,111.5 600.4,226.7 665.3,209.2 633.4,94"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 626.96 217.8594)" class="st1 futura-light st12">9.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 598.5497 109.459)" class="st1 futura-light st12">9.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 640.5504 144.2795)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 608.16 146.8702)" class="st1 futura-light st12">144.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 619.4605 154.7701)" class="st4 futura-book st13">70</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[322]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[322])">
								<polygon id="h_l_71" class="property pb-sprite-2" points="698.4,76.5 730.3,191.8 665.3,209.2 633.4,94"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 692.2899 200.4286)" class="st1 futura-light st12">9.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 663.8802 92.019)" class="st1 futura-light st12">9.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 705.8904 126.8395)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 673.4901 129.45)" class="st1 futura-light st12">144.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 684.781 137.3292)" class="st4 futura-book st13">71</text>
								<polygon class="st7" points="687.6,178.5 692.6,169.7 701.5,174.7 701.5,174.7"/>
								<polygon class="st8" points="687.6,178.5 701.5,174.7 696.4,183.6"/>
							</g>
							<g>
								<line class="st16" x1="633.3" y1="93.8" x2="665.2" y2="209"/>
								<line class="st11" x1="600.3" y1="226.4" x2="568.4" y2="111.3"/>
								<line class="st11" x1="503.4" y1="128.8" x2="535.4" y2="244"/>
								<line class="st11" x1="470.4" y1="261.5" x2="438.5" y2="146.2"/>
								<line class="st11" x1="373.6" y1="163.7" x2="405.4" y2="279"/>
								<line class="st11" x1="633.4" y1="94" x2="665.3" y2="209.2"/>
								<line class="st11" x1="600.4" y1="226.7" x2="568.5" y2="111.5"/>
								<line class="st11" x1="503.5" y1="129" x2="535.5" y2="244.2"/>
								<line class="st11" x1="470.5" y1="261.7" x2="438.6" y2="146.5"/>
								<line class="st11" x1="373.7" y1="164" x2="405.5" y2="279.2"/>
							</g>
						</g>
						<g id="isla_i">
							<g class="property__active" ng-class="desierto.inmovablesClassList[323]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[323])">
								<polygon id="i_l_72" class="property pb-sprite-1" points="881.1,27.3 898.5,90.6 783.2,122.1 765.6,58.5"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 834.0002 104.2586)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 819.2103 51.389)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 882.0706 53.1994)" class="st1 futura-light st12">8.78</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 774.6105 83.3397)" class="st1 futura-light st12">8.83</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 824.6599 60.0003)" class="st1 futura-light st12">140.90 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 835.9608 67.8796)" class="st4 futura-book st13">72</text>
								<polygon class="st7" points="791.7,90.3 795.5,80.8 804.9,84.6 804.9,84.6"/>
								<polygon class="st8" points="791.7,90.3 804.9,84.6 801.1,94.1"/>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[324]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[324])">
								<polygon id="i_l_73" class="property pb-sprite-2" points="800.7,185.2 916,153.8 898.5,90.6 783.2,122.1"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 851.5203 168.4094)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 899.5912 117.3496)" class="st1 futura-light st12">8.78</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 792.1199 147.4899)" class="st1 futura-light st12">8.78</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 842.1602 124.15)" class="st1 futura-light st12">140.48 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 853.47 132.0295)" class="st4 futura-book st13">73</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[325]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[325])">
								<polygon id="i_l_74" class="property pb-sprite-1" points="916,153.8 932,211.5 816.6,242.9 800.7,185.2"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 867.8999 225.8986)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 915.9707 174.8602)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 808.5112 204.9801)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 858.5604 181.6398)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 869.8502 189.5192)" class="st4 futura-book st13">74</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[326]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[326])">
								<polygon id="i_l_75" class="property pb-sprite-2" points="832.6,300.5 948,269.1 932,211.5 816.6,242.9"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 883.27 284.1386)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 931.3405 233.0902)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 823.8807 263.2203)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 873.9197 239.8797)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 885.2205 247.7598)" class="st4 futura-book st13">75</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[327]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[327])">
								<polygon id="i_l_76" class="property pb-sprite-1" points="948,269.1 963.9,326.8 848.6,358.2 832.6,300.5"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 898.9999 341.9088)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 947.0798 290.8704)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 839.6108 320.9999)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 889.6603 297.6494)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 900.9506 305.5298)" class="st4 futura-book st13">76</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[328]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[328])">
								<polygon id="i_l_77" class="property pb-sprite-2" points="864.5,415.8 979.9,384.4 963.9,326.8 848.6,358.2"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 915.3901 399.4093)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 963.4597 348.3596)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 855.9999 378.4897)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 906.0513 355.1498)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 917.3403 363.0392)" class="st4 futura-book st13">77</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[329]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[329])">
								<polygon id="i_l_78" class="property pb-sprite-1" points="979.9,384.4 995.8,442 880.5,473.5 864.5,415.8"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 931.1101 456.2295)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 979.1812 405.1902)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 871.7211 435.3193)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 921.7709 411.9698)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 933.0599 419.8495)" class="st4 futura-book st13">78</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[330]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[330])">
								<polygon id="i_l_79" class="property pb-sprite-2" points="896.4,531 1011.8,499.7 995.8,442 880.5,473.5"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 947.5202 513.7289)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 995.5904 462.6796)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 888.1306 492.8097)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 938.1699 469.47)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 949.4703 477.3493)" class="st4 futura-book st13">79</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[331]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[331])">
								<polygon id="i_l_80" class="property pb-sprite-1" points="1011.8,499.7 1027.7,557.3 912.4,588.7 896.4,531"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 962.8702 572.0489)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1010.9404 520.9999)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 903.4802 551.1401)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 953.5204 527.8002)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 964.8207 535.6801)" class="st4 futura-book st13">80</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[332]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[332])">
								<polygon id="i_l_81" class="property pb-sprite-2" points="928.3,646.4 1043.7,614.9 1027.7,557.3 912.4,588.7"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 979.32 629.6793)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1027.3909 578.64)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 919.9199 608.77)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 969.9707 585.4202)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 981.2703 593.319)" class="st4 futura-book st13">81</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[333]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[333])">
								<polygon id="i_l_82" class="property pb-sprite-1" points="1043.7,614.9 1059.6,672.6 944.3,704 928.3,646.4"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 995.1199 687.5089)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1043.1902 636.4495)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 935.73 666.5898)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 985.7703 643.2499)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 997.0804 651.1293)" class="st4 futura-book st13">82</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[334]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[334])">
								<polygon id="i_l_83" class="property pb-sprite-2" points="960.3,761.7 1075.6,730.2 1059.6,672.6 944.3,704"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 1011.6696 744.7389)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1059.7402 693.7)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 952.2706 723.8196)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1002.3305 700.4896)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 1013.6402 708.3696)" class="st4 futura-book st13">83</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[335]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[335])">
								<polygon id="i_l_84" class="property pb-sprite-1" points="1075.6,730.2 1091.5,787.8 976.2,819.3 960.3,761.7"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 1026.3202 802.0692)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1074.3911 751.0198)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 966.9304 781.1501)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1016.9805 757.8096)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 1028.2813 765.6996)" class="st4 futura-book st13">84</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[336]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[336])">
								<polygon id="i_l_85" class="property pb-sprite-2" points="992.2,876.9 1107.5,845.4 1091.5,787.8 976.2,819.3"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 1042.87 860.8289)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1090.9407 809.7899)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 983.4803 839.91)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1033.5304 816.5695)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 1044.8302 824.4594)" class="st4 futura-book st13">85</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[337]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[337])">
								<polygon id="i_l_86" class="property pb-sprite-1" points="1107.5,845.4 1123.5,903.1 1008.1,934.5 992.2,876.9"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 1058.9902 917.649)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1107.0513 866.6001)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 999.6004 896.7298)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1049.6406 873.3899)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 1060.9396 881.2694)" class="st4 futura-book st13">86</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[338]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[338])">
								<polygon id="i_l_87" class="property pb-sprite-2" points="1024.1,992.1 1139.4,960.7 1123.5,903.1 1008.1,934.5"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 1075.3101 974.9792)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1123.3807 923.9299)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1015.9197 954.0593)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1065.9711 930.7195)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 1077.26 938.6002)" class="st4 futura-book st13">87</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[339]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[339])">
								<polygon id="i_l_88" class="property pb-sprite-1" points="1139.4,960.7 1155.4,1018.4 1040.1,1049.8 1024.1,992.1"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 1091.0199 1032.5688)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1139.0797 981.5399)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1031.6305 1011.6601)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1081.6694 988.3195)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 1092.9806 996.21)" class="st4 futura-book st13">88</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[340]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[340])">
								<polygon id="i_l_89" class="property pb-sprite-2" points="1040.1,1049.8 1056,1107.4 1171.4,1076 1155.4,1018.4"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 1107.5699 1089.819)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1154.1702 1039.13)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1048.17 1068.8901)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1098.2202 1045.5496)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 1109.5203 1053.4396)" class="st4 futura-book st13">89</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[341]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[341])">
								<polygon id="i_l_90" class="property pb-sprite-1" points="1171.4,1076 1187.3,1133.6 1072,1165.1 1056,1107.4"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 1122.8505 1147.9794)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1170.9194 1096.9297)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1063.4504 1127.0592)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1113.511 1103.72)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 1124.8208 1111.5997)" class="st4 futura-book st13">90</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[342]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[342])">
								<polygon id="i_l_91" class="property pb-sprite-2" points="1088,1222.7 1203.3,1191.2 1187.3,1133.6 1072,1165.1"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 1138.15 1204.4589)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1186.2208 1153.4098)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1078.761 1183.5399)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1128.8102 1160.1996)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 1140.1005 1168.0802)" class="st4 futura-book st13">91</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[343]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[343])">
								<polygon id="i_l_92" class="property pb-sprite-1" points="1203.3,1191.2 1219.2,1248.8 1103.9,1280.2 1088,1222.7"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 1154.0601 1264.0892)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1202.1312 1213.0398)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1094.6705 1243.1702)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1144.7206 1219.8296)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 1156.0103 1227.7098)" class="st4 futura-book st13">92</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[344]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[344])">
								<polygon id="i_l_93" class="property pb-sprite-2" points="1103.9,1280.2 1119.9,1337.9 1235.2,1306.5 1219.2,1248.8"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 1170.5001 1320.8291)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1218.5707 1269.78)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1111.1002 1299.8999)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1161.1505 1276.5603)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 1172.4507 1284.4493)" class="st4 futura-book st13">93</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[345]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[345])">
								<polygon id="i_l_94" class="property pb-sprite-1" points="1235.2,1306.5 1251.2,1364.1 1135.8,1395.5 1119.9,1337.9"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 1186.87 1379.0989)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1234.9307 1328.0499)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1127.4709 1358.1801)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1177.5201 1334.8397)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 1188.8203 1342.7295)" class="st4 futura-book st13">94</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[346]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[346])">
								<polygon id="i_l_95" class="property pb-sprite-2" points="1251.2,1364.1 1267.2,1421.8 1151.7,1453.2 1135.8,1395.5"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 1203.1802 1434.2188)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1251.2501 1383.1796)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1143.7808 1413.3)" class="st1 futura-light st12">8.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1193.83 1389.9597)" class="st1 futura-light st12">128.00 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 1205.1309 1397.8497)" class="st4 futura-book st13">95</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[347]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[347])">
								<polygon id="i_l_96" class="property pb-sprite-1" points="1267.2,1421.8 1284.7,1485.3 1169.3,1516.6 1151.7,1453.2"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 1220.2499 1499.4088)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1268.3206 1448.3695)" class="st1 futura-light st12">8.81</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1160.8502 1478.4902)" class="st1 futura-light st12">8.81</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1210.9004 1455.1497)" class="st1 futura-light st12">140.96 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 1222.2006 1463.0394)" class="st4 futura-book st13">96</text>
							</g>
							<g class="property__active" ng-class="desierto.inmovablesClassList[348]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[348])">
								<polygon id="i_l_97" class="property pb-sprite-2" points="1302.3,1548.6 1186.8,1580.1 1169.3,1516.6 1284.7,1485.3"/>
								<text transform="matrix(0.9958 -0.2589 0.2589 0.9659 1237.5499 1563.069)" class="st1 futura-light st12">16.00</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1285.6204 1512.0198)" class="st1 futura-light st12">8.81</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1178.1504 1542.1497)" class="st1 futura-light st12">8.81</text>
								<text transform="matrix(0.2589 0.9958 -0.9659 0.2589 1228.2097 1518.8096)" class="st1 futura-light st12">140.96 m2</text>
								<text transform="matrix(0.2489 0.9062 -0.9659 0.2589 1239.5002 1526.6996)" class="st4 futura-book st13">97</text>
								<polygon class="st7" points="1189.9,1546.7 1193.7,1537.2 1203.1,1541 1203.1,1541"/>
								<polygon class="st8" points="1189.9,1546.7 1203.1,1541 1199.4,1550.4"/>
							</g>
							<g>
								<line class="st11" x1="898.4" y1="90.3" x2="783.1" y2="121.9"/>
								<line class="st11" x1="800.6" y1="185" x2="915.9" y2="153.6"/>
								<line class="st11" x1="931.9" y1="211.2" x2="816.5" y2="242.7"/>
								<line class="st11" x1="832.5" y1="300.3" x2="947.9" y2="268.9"/>
								<line class="st11" x1="963.8" y1="326.6" x2="848.5" y2="357.9"/>
								<line class="st11" x1="864.4" y1="415.6" x2="979.8" y2="384.2"/>
								<line class="st11" x1="995.7" y1="441.8" x2="880.4" y2="473.3"/>
								<line class="st11" x1="896.3" y1="530.8" x2="1011.7" y2="499.4"/>
								<line class="st11" x1="1027.6" y1="557.1" x2="912.3" y2="588.4"/>
								<line class="st11" x1="928.2" y1="646.1" x2="1043.6" y2="614.7"/>
								<line class="st11" x1="1059.5" y1="672.4" x2="944.2" y2="703.8"/>
								<line class="st11" x1="960.2" y1="761.4" x2="1075.5" y2="730"/>
								<line class="st11" x1="976.1" y1="819.1" x2="1091.4" y2="787.5"/>
								<line class="st11" x1="1107.4" y1="845.2" x2="992.1" y2="876.6"/>
								<line class="st11" x1="1008" y1="934.2" x2="1123.4" y2="902.8"/>
								<line class="st11" x1="1139.3" y1="960.5" x2="1024" y2="991.9"/>
								<line class="st11" x1="1040" y1="1049.6" x2="1155.3" y2="1018.1"/>
								<line class="st11" x1="1171.3" y1="1075.8" x2="1055.9" y2="1107.2"/>
								<line class="st11" x1="1071.9" y1="1164.8" x2="1187.2" y2="1133.4"/>
								<line class="st11" x1="1087.9" y1="1222.4" x2="1203.2" y2="1191"/>
								<line class="st11" x1="1219.1" y1="1248.6" x2="1103.8" y2="1280"/>
								<line class="st11" x1="1119.8" y1="1337.7" x2="1235.1" y2="1306.2"/>
								<line class="st11" x1="1251.1" y1="1363.9" x2="1135.7" y2="1395.3"/>
								<line class="st11" x1="1151.6" y1="1453" x2="1267.1" y2="1421.5"/>
								<line class="st11" x1="1284.6" y1="1485.1" x2="1169.2" y2="1516.4"/>
								<line class="st11" x1="898.5" y1="90.6" x2="783.2" y2="122.1"/>
								<line class="st11" x1="800.7" y1="185.2" x2="916" y2="153.8"/>
								<line class="st11" x1="932" y1="211.5" x2="816.6" y2="242.9"/>
								<line class="st11" x1="832.6" y1="300.5" x2="948" y2="269.1"/>
								<line class="st11" x1="963.9" y1="326.8" x2="848.6" y2="358.2"/>
								<line class="st11" x1="864.5" y1="415.8" x2="979.9" y2="384.4"/>
								<line class="st11" x1="995.8" y1="442" x2="880.5" y2="473.5"/>
								<line class="st11" x1="896.4" y1="531" x2="1011.8" y2="499.7"/>
								<line class="st11" x1="1027.7" y1="557.3" x2="912.4" y2="588.7"/>
								<line class="st11" x1="928.3" y1="646.4" x2="1043.7" y2="614.9"/>
								<line class="st11" x1="1059.6" y1="672.6" x2="944.3" y2="704"/>
								<line class="st11" x1="960.3" y1="761.7" x2="1075.6" y2="730.2"/>
								<line class="st11" x1="976.2" y1="819.3" x2="1091.5" y2="787.8"/>
								<line class="st11" x1="1107.5" y1="845.4" x2="992.2" y2="876.9"/>
								<line class="st11" x1="1008.1" y1="934.5" x2="1123.5" y2="903.1"/>
								<line class="st11" x1="1139.4" y1="960.7" x2="1024.1" y2="992.1"/>
								<line class="st11" x1="1040.1" y1="1049.8" x2="1155.4" y2="1018.4"/>
								<line class="st11" x1="1171.4" y1="1076" x2="1056" y2="1107.4"/>
								<line class="st11" x1="1072" y1="1165.1" x2="1187.3" y2="1133.6"/>
								<line class="st11" x1="1088" y1="1222.7" x2="1203.3" y2="1191.2"/>
								<line class="st11" x1="1219.2" y1="1248.8" x2="1103.9" y2="1280.2"/>
								<line class="st11" x1="1119.9" y1="1337.9" x2="1235.2" y2="1306.5"/>
								<line class="st11" x1="1251.2" y1="1364.1" x2="1135.8" y2="1395.5"/>
								<line class="st11" x1="1151.7" y1="1453.2" x2="1267.2" y2="1421.8"/>
								<line class="st11" x1="1284.7" y1="1485.3" x2="1169.3" y2="1516.6"/>
							</g>
						</g>
					</g>
				</g>
			</g>
		</svg>

	</div>

</body>
</html>