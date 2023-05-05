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
    <link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
			<!--a href="#!" ng-click="close()">
					<div class="link-body link-dev valign-wrapper">
							<span class="" style="width: 66%;">Desarrollo Industrial</span><img class="" src="media/assets/img/logos/logo-navetec.svg" height="28">
					</div>
			</a>
			<md-divider></md-divider>
			<md-divider></md-divider>
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
			</a-->
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
				<p>Desierto 3 - Lotes</p>
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
								<div class="p-20 pointer" ng-class="desierto.inmovablesClassList[$index]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[$index])"></div>
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
					<h1 class="center-align">DESIERTO 3</h1>
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
	 		viewBox="0 0 1366 1546" style="enable-background:new 0 0 1366 1546;" xml:space="preserve">
			
			<style type="text/css">
				.st2{fill:none;stroke:#FFFFFF;stroke-miterlimit:10;}
				.st3{fill:#FFFFFF;}
				.st5{font-size:9.1675px;}
				.st6{font-size:9.1803px;}
				.st7{fill:#CED435;}
				.st9{font-size:15.2932px;}
				.st10{font-size:15.2717px;}
				.st11{font-size:9.1642px;}
				.st12{font-size:9.1739px;}
				.st13{font-size:9.2261px;}
				.st14{opacity:0.6;fill:#E6B54A;enable-background:new;}
			</style>

			<image style="overflow:visible;" width="1366" height="1546" xlink:href="media/assets/img/habitta/portto-blanco/quote/desierto/desierto3.jpg"></image>

			<g>
				<g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[181]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[181])">
						<polygon class="property pb-sprite-1" points="725,300.1 869,238.6 869.5,237.2 850,191.9 705.1,253.8"/>
					</g>	
					<g class="property__active" ng-class="desierto.inmovablesClassList[182]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[182])">
						<polygon class="property pb-sprite-2" points="685.4,207.5 830.2,145.6 850,191.9 705.1,253.8"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[183]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[183])">
						<polygon class="property pb-sprite-1" points="665.5,161 685.4,207.5 830.2,145.6 810.4,99.2"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[184]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[184])">
						<polygon class="property pb-sprite-2" points="665.5,161 810.4,99.2 790.7,52.6 645.8,114.7"/>
					</g>
				</g>
				<g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[185]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[185])">
						<polygon class="property pb-sprite-1" points="428.4,94.6 539.9,266.6 592.7,232.2 491.3,75.7 462.2,83.4 447,87.9"/>
					</g>	
					<g class="property__active" ng-class="desierto.inmovablesClassList[186]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[186])">
						<polygon class="property pb-sprite-2" points="372.1,123.7 386.7,114.7 399.1,107.8 408.6,103.1 428.4,94.6 539.9,266.6 486.9,300.9"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[187]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[187])">
						<polygon class="property pb-sprite-1" points="319.4,157.9 372.1,123.7 486.9,300.9 434,335"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[188]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[188])">
						<polygon class="property pb-sprite-2" points="319.4,157.9 434,335 381.1,369.4 266.4,192.2"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[189]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[189])">
						<polygon class="property pb-sprite-1" points="213.4,226.5 266.4,192.2 381.1,369.4 328.2,403.7"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[190]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[190])">
						<polygon class="property pb-sprite-2" points="160.5,260.8 213.4,226.5 328.2,403.7 275.2,438"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[191]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[191])">
						<polygon class="property pb-sprite-1" points="107.7,295.1 160.5,260.8 275.2,438 222.4,472.1"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[192]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[192])">
						<polygon class="property pb-sprite-2" points="54.7,329.3 107.7,295.1 222.4,472.1 169.3,506.6"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[193]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[193])">
						<polygon class="property pb-sprite-1" points="1.8,363.5 54.7,329.3 169.3,506.6 116.7,540.7"/>
					</g>
				</g>
				<g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[194]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[194])">
						<polygon class="property pb-sprite-2" points="148.6,589.8 176,632.3 308.2,546.8 280.8,504.6"/>
					</g>	
					<g class="property__active" ng-class="desierto.inmovablesClassList[195]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[195])">
						<polygon class="property pb-sprite-1" points="176,632.3 308.2,546.8 335.5,589 203.4,674.6"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[196]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[196])">
						<polygon class="property pb-sprite-2" points="203.4,674.6 335.5,589 363.1,631.5 230.9,717"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[197]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[197])">
						<polygon class="property pb-sprite-1" points="230.9,717 363.1,631.5 390.4,673.6 258.4,759.3"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[198]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[198])">
						<polygon class="property pb-sprite-2" points="258.4,759.3 390.4,673.6 417.9,716.1 285.7,801.6"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[199]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[199])">
						<polygon class="property pb-sprite-1" points="285.7,801.6 417.9,716.1 445.3,758.3 313.2,843.9"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[200]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[200])">
						<polygon class="property pb-sprite-2" points="313.2,843.9 445.3,758.3 472.7,800.7 340.4,886.4"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[201]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[201])">
						<polygon class="property pb-sprite-1" points="340.4,886.4 472.7,800.7 500.3,842.8 368.1,928.6"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[202]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[202])">
						<polygon class="property pb-sprite-2" points="368.1,928.6 500.3,842.8 527.5,885.3 395.4,971"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[203]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[203])">
						<polygon class="property pb-sprite-1" points="395.4,971 527.5,885.3 555,927.6 422.7,1013.2"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[204]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[204])">
						<polygon class="property pb-sprite-2" points="555,927.6 582.4,970 450.3,1055.6 422.7,1013.2"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[205]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[205])">
						<polygon class="property pb-sprite-1" points="450.3,1055.6 582.4,970 609.8,1012.2 477.8,1097.8"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[206]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[206])">
						<polygon class="property pb-sprite-2" points="477.8,1097.8 505,1140.3 637.3,1054.7 609.8,1012.2"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[207]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[207])">
						<polygon class="property pb-sprite-1" points="505,1140.3 637.3,1054.7 664.8,1096.9 532.6,1182.6"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[208]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[208])">
						<polygon class="property pb-sprite-2" points="532.6,1182.6 664.8,1096.9 692,1139.2 560,1224.8"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[209]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[209])">
						<polygon class="property pb-sprite-1" points="692,1139.2 719.6,1181.6 587.5,1267.3 560,1224.8"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[210]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[210])">
						<polygon class="property pb-sprite-2" points="587.5,1267.3 719.6,1181.6 747,1223.9 614.8,1309.5"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[211]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[211])">
						<polygon class="property pb-sprite-1" points="614.8,1309.5 747,1223.9 774.5,1266.2 642.5,1351.7"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[212]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[212])">
						<polygon class="property pb-sprite-2" points="642.5,1351.7 774.5,1266.2 801.9,1308.6 669.9,1394.4"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[213]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[213])">
						<polygon class="property pb-sprite-1" points="669.9,1394.4 801.9,1308.6 834.5,1358.8 702.2,1444.6"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[214]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[214])">
						<polygon class="property pb-sprite-2" points="702.2,1444.6 834.5,1358.8 866.9,1409.1 734.8,1494.8"/>
					</g>
				</g>
				<g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[215]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[215])">
						<polygon class="property pb-sprite-1" points="844.7,1267.3 926.1,1392.2 977.6,1344.5 903,1229.4"/>
					</g>	
					<g class="property__active" ng-class="desierto.inmovablesClassList[216]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[216])">
						<polygon class="property pb-sprite-2" points="903,1229.4 950.8,1198.4 1034.2,1327.4 987.3,1335.7 977.6,1344.5"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[217]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[217])">
						<polygon class="property pb-sprite-1" points="950.8,1198.4 998.1,1167.7 1094.8,1316.6 1034.2,1327.4"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[218]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[218])">
						<polygon class="property pb-sprite-2" points="998.1,1167.7 1045.9,1136.8 1155.7,1306.1 1094.8,1316.6"/>
					</g>
				</g>
				<g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[219]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[219])">
						<polygon class="property pb-sprite-1" points="1192.4,1242.9 1337.5,1180.9 1361.7,1238.4 1212,1289.3"/>
					</g>	
					<g class="property__active" ng-class="desierto.inmovablesClassList[220]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[220])">
						<polygon class="property pb-sprite-2" points="1172.6,1196.3 1192.4,1242.9 1337.5,1180.9 1317.5,1134.5"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[221]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[221])">
						<polygon class="property pb-sprite-1" points="1152.8,1150 1297.7,1088.2 1317.5,1134.5 1172.6,1196.3"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[222]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[222])">
						<polygon class="property pb-sprite-2" points="1152.8,1150 1297.7,1088.2 1277.8,1041.7 1133.2,1103.7"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[223]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[223])">
						<polygon class="property pb-sprite-1" points="1113.2,1057.2 1258.1,995.5 1277.8,1041.7 1133.2,1103.7"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[224]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[224])">
						<polygon class="property pb-sprite-2" points="1113.2,1057.2 1258.1,995.5 1238.3,949.1 1093.2,1010.9"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[225]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[225])">
						<polygon class="property pb-sprite-1" points="1073.7,964.5 1218.6,902.6 1238.3,949.1 1093.2,1010.9"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[226]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[226])">
						<polygon class="property pb-sprite-2" points="1073.7,964.5 1218.6,902.6 1198.7,856.2 1053.8,918.2"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[227]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[227])">
						<polygon class="property pb-sprite-1" points="1034.1,871.8 1178.9,809.9 1198.7,856.2 1053.8,918.2"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[228]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[228])">
						<polygon class="property pb-sprite-2" points="1034.1,871.8 1178.9,809.9 1159.1,763.5 1014.2,825.5"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[229]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[229])">
						<polygon class="property pb-sprite-1" points="994.4,778.9 1139.4,717.1 1159.1,763.5 1014.2,825.5"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[230]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[230])">
						<polygon class="property pb-sprite-2" points="994.4,778.9 1139.4,717.1 1119.4,670.6 974.6,732.5"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[231]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[231])">
						<polygon class="property pb-sprite-1" points="955,686.2 1099.7,624.2 1119.4,670.6 974.6,732.5"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[232]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[232])">
						<polygon class="property pb-sprite-2" points="955,686.2 1099.7,624.2 1079.8,577.8 935.1,639.9"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[233]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[233])">
						<polygon class="property pb-sprite-1" points="915.2,593.5 1060.1,531.5 1079.8,577.8 935.1,639.9"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[234]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[234])">
						<polygon class="property pb-sprite-2" points="915.2,593.5 1060.1,531.5 1040.3,485.2 895.5,547"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[235]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[235])">
						<polygon class="property pb-sprite-1" points="875.7,500.5 1020.4,438.8 1040.3,485.2 895.5,547"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[236]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[236])">
						<polygon class="property pb-sprite-2" points="875.7,500.5 1020.4,438.8 1000.7,392.4 855.9,454.1"/>
					</g>
				</g>
				<g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[237]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[237])">
						<polygon class="property pb-sprite-2" points="667.1,528.8 720,494.5 834.7,671.7 781.8,706"/>
					</g>	
					<g class="property__active" ng-class="desierto.inmovablesClassList[238]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[238])">
						<polygon class="property pb-sprite-1" points="729,740.2 781.8,706 667.1,528.8 614.2,563.1"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[239]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[239])">
						<polygon class="property pb-sprite-2" points="561.2,597.4 614.2,563.1 729,740.2 675.9,774.6"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[240]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[240])">
						<polygon class="property pb-sprite-1" points="508.5,631.9 561.2,597.4 675.9,774.6 623.2,809"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[241]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[241])">
						<polygon class="property pb-sprite-2" points="455.6,665.9 508.5,631.9 623.2,809 570.3,843.1"/>
					</g>
				</g>
				<g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[242]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[242])">
						<polygon class="property pb-sprite-1" points="602.3,892.4 655,858.1 769.8,1035.3 717,1069.6"/>
					</g>	
					<g class="property__active" ng-class="desierto.inmovablesClassList[243]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[243])">
						<polygon class="property pb-sprite-2" points="655,858.1 708,823.8 822.7,1001 769.8,1035.3"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[244]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[244])">
						<polygon class="property pb-sprite-1" points="708,823.8 760.8,789.6 875.5,966.6 822.7,1001"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[245]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[245])">
						<polygon class="property pb-sprite-2" points="875.5,966.6 928.5,932.4 813.7,755.3 760.8,789.6"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[246]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[246])">
						<polygon class="property pb-sprite-1" points="867.1,721.1 813.7,755.3 928.5,932.4 981.7,897.8"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[247]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[247])">
						<polygon class="property pb-sprite-2" points="1003.4,1094.3 907.4,946 955.1,915.4 1051.1,1063.8"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[248]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[248])">
						<polygon class="property pb-sprite-1" points="859.8,977.1 907.4,946 1003.4,1094.3 955.8,1125.1"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[249]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[249])">
						<polygon class="property pb-sprite-2" points="908.3,1156.1 812.1,1007.9 859.8,977.1 955.8,1125.1"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[250]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[250])">
						<polygon class="property pb-sprite-1" points="812.1,1007.9 764.7,1038.8 860.8,1187 908.3,1156.1"/>
					</g>
					<g class="property__active" ng-class="desierto.inmovablesClassList[251]" ng-click="desierto.setLeadProperty(desierto.inmovablesData.inmovables[251])">
						<polygon class="property pb-sprite-2" points="717,1069.6 764.7,1038.8 860.8,1187 812.9,1217.7"/>
					</g>
				</g>


				
				<g id="SEPARACIONES">
					<line class="st2" x1="850" y1="191.9" x2="705.1" y2="253.8"/>
					<line class="st2" x1="685.4" y1="207.5" x2="830.2" y2="145.6"/>
					<line class="st2" x1="810.4" y1="99.2" x2="665.5" y2="161"/>
					<line class="st2" x1="645.8" y1="114.7" x2="790.7" y2="52.6"/>
					<line class="st2" x1="592.7" y1="232.2" x2="491.3" y2="75.7"/>
					<line class="st2" x1="428.4" y1="94.6" x2="539.9" y2="266.6"/>
					<line class="st2" x1="486.9" y1="300.9" x2="372.1" y2="123.7"/>
					<line class="st2" x1="319.4" y1="157.9" x2="434" y2="335"/>
					<line class="st2" x1="381.1" y1="369.4" x2="266.4" y2="192.2"/>
					<line class="st2" x1="213.4" y1="226.5" x2="328.2" y2="403.7"/>
					<line class="st2" x1="275.2" y1="438" x2="160.5" y2="260.8"/>
					<line class="st2" x1="107.7" y1="295.1" x2="222.4" y2="472.1"/>
					<line class="st2" x1="169.3" y1="506.6" x2="54.7" y2="329.3"/>
					<line class="st2" x1="176" y1="632.3" x2="308.2" y2="546.8"/>
					<line class="st2" x1="335.5" y1="589" x2="203.4" y2="674.6"/>
					<line class="st2" x1="230.9" y1="717" x2="363.1" y2="631.5"/>
					<line class="st2" x1="390.4" y1="673.6" x2="258.4" y2="759.3"/>
					<line class="st2" x1="285.7" y1="801.6" x2="417.9" y2="716.1"/>
					<line class="st2" x1="445.3" y1="758.3" x2="313.2" y2="843.9"/>
					<line class="st2" x1="340.4" y1="886.4" x2="472.7" y2="800.7"/>
					<line class="st2" x1="500.3" y1="842.8" x2="368.1" y2="928.6"/>
					<line class="st2" x1="395.4" y1="971" x2="527.5" y2="885.3"/>
					<line class="st2" x1="555" y1="927.6" x2="422.7" y2="1013.2"/>
					<line class="st2" x1="450.3" y1="1055.6" x2="582.4" y2="970"/>
					<line class="st2" x1="477.8" y1="1097.8" x2="609.8" y2="1012.2"/>
					<line class="st2" x1="637.3" y1="1054.7" x2="505" y2="1140.3"/>
					<line class="st2" x1="532.6" y1="1182.6" x2="664.8" y2="1096.9"/>
					<line class="st2" x1="692" y1="1139.2" x2="560" y2="1224.8"/>
					<line class="st2" x1="587.5" y1="1267.3" x2="719.6" y2="1181.6"/>
					<line class="st2" x1="747" y1="1223.9" x2="614.8" y2="1309.5"/>
					<line class="st2" x1="642.5" y1="1351.7" x2="774.5" y2="1266.2"/>
					<line class="st2" x1="801.9" y1="1308.6" x2="669.9" y2="1394.4"/>
					<line class="st2" x1="702.2" y1="1444.6" x2="834.5" y2="1358.8"/>
					<line class="st2" x1="866.9" y1="1409.1" x2="734.8" y2="1494.8"/>
					<line class="st2" x1="903" y1="1229.4" x2="977.6" y2="1344.5"/>
					<line class="st2" x1="1034.2" y1="1327.4" x2="950.8" y2="1198.4"/>
					<line class="st2" x1="998.1" y1="1167.7" x2="1094.8" y2="1316.6"/>
					<line class="st2" x1="1045.9" y1="1136.8" x2="1155.7" y2="1306.1"/>
					<line class="st2" x1="1192.4" y1="1242.9" x2="1337.5" y2="1180.9"/>
					<line class="st2" x1="1317.5" y1="1134.5" x2="1172.6" y2="1196.3"/>
					<line class="st2" x1="1152.8" y1="1150" x2="1297.7" y2="1088.2"/>
					<line class="st2" x1="1277.8" y1="1041.7" x2="1133.2" y2="1103.7"/>
					<line class="st2" x1="1113.2" y1="1057.2" x2="1258.1" y2="995.5"/>
					<line class="st2" x1="1238.3" y1="949.1" x2="1093.2" y2="1010.9"/>
					<line class="st2" x1="1073.7" y1="964.5" x2="1218.6" y2="902.6"/>
					<line class="st2" x1="1198.7" y1="856.2" x2="1053.8" y2="918.2"/>
					<line class="st2" x1="1034.1" y1="871.8" x2="1178.9" y2="809.9"/>
					<line class="st2" x1="1159.1" y1="763.5" x2="1014.2" y2="825.5"/>
					<line class="st2" x1="994.4" y1="778.9" x2="1139.4" y2="717.1"/>
					<line class="st2" x1="1119.4" y1="670.6" x2="974.6" y2="732.5"/>
					<line class="st2" x1="955" y1="686.2" x2="1099.7" y2="624.2"/>
					<line class="st2" x1="1079.8" y1="577.8" x2="935.1" y2="639.9"/>
					<line class="st2" x1="915.2" y1="593.5" x2="1060.1" y2="531.5"/>
					<line class="st2" x1="1040.3" y1="485.2" x2="895.5" y2="547"/>
					<line class="st2" x1="875.7" y1="500.5" x2="1020.4" y2="438.8"/>
					<line class="st2" x1="1000.7" y1="392.4" x2="855.9" y2="454.1"/>
					<polyline class="st2" points="455.6,665.9 720,494.5 834.7,671.7 				"/>
					<line class="st2" x1="781.8" y1="706" x2="667.1" y2="528.8"/>
					<line class="st2" x1="614.2" y1="563.1" x2="729" y2="740.2"/>
					<line class="st2" x1="675.9" y1="774.6" x2="561.2" y2="597.4"/>
					<line class="st2" x1="508.5" y1="631.9" x2="623.2" y2="809"/>
					<line class="st2" x1="655" y1="858.1" x2="769.8" y2="1035.3"/>
					<line class="st2" x1="708" y1="823.8" x2="822.7" y2="1001"/>
					<line class="st2" x1="760.8" y1="789.6" x2="875.5" y2="966.6"/>
					<line class="st2" x1="813.7" y1="755.3" x2="928.5" y2="932.4"/>
					<polyline class="st2" points="867.1,721.1 981.7,897.8 717,1069.6 				"/>
					<line class="st2" x1="860.8" y1="1187" x2="764.7" y2="1038.8"/>
					<line class="st2" x1="812.1" y1="1007.9" x2="908.3" y2="1156.1"/>
					<line class="st2" x1="859.8" y1="977.1" x2="955.8" y2="1125.1"/>
					<line class="st2" x1="1003.4" y1="1094.3" x2="907.4" y2="946"/>
					<line class="st2" x1="955.1" y1="915.4" x2="1051.1" y2="1063.8"/>
				</g>
				<g id="NUMEROLOGIA">
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 296.2173 534.2258)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 324.7102 575.8857)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 177.1721 615.3197)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 203.6715 656.4814)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 205.2775 564.5121)" class="st3 futura-book st5">25.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 227.3477 593.8584)" class="st3 futura-book st5">25.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 252.1199 636.6146)" class="st3 futura-book st5">25.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 212.3766 592.3747)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 217.6924 577.038)" class="st7 futura-med st9">14</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 234.7345 628.3527)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 240.05 613.0162)" class="st7 futura-med st9">15</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 354.5217 622.5178)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 233.4726 703.1271)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 281.9316 683.2477)" class="st3 futura-book st5">25.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 264.5461 674.9973)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 269.8616 659.6597)" class="st7 futura-med st9">16</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 378.6074 660.4132)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 257.5589 741.0106)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 306.0175 721.143)" class="st3 futura-book st5">25.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 288.6322 712.882)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 293.947 697.5436)" class="st7 futura-med st9">17</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 407.9093 700.7126)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 286.8711 781.3079)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 335.3193 761.4412)" class="st3 futura-book st5">25.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 317.9346 753.1801)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 323.2495 737.8428)" class="st7 futura-med st9">18</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 435.5607 744.9079)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 314.5227 825.5043)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 362.9707 805.6366)" class="st3 futura-book st5">25.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 345.5853 797.3751)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 350.9011 782.0385)" class="st7 futura-med st9">19</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 464.0554 791.4078)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 343.0058 872.0047)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 391.4635 852.1366)" class="st3 futura-book st5">25.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 374.0781 843.8746)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 379.3941 828.5378)" class="st7 futura-med st9">20</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 761.3356 576.9698)" class="st3 futura-book st5">33.50</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 719.5753 603.3363)" class="st3 futura-book st5">33.50</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 666.543 637.4437)" class="st3 futura-book st5">33.50</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 614.3071 673.1588)" class="st3 futura-book st5">33.50</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 564.9713 711.3969)" class="st3 futura-book st5">33.50</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 512.6252 748.5714)" class="st3 futura-book st5">33.50</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 476.5787 664.7758)" class="st3 futura-book st5">10.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 529.7787 630.3691)" class="st3 futura-book st5">10.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 582.6348 596.1835)" class="st3 futura-book st5">10.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 634.9038 561.4896)" class="st3 futura-book st5">10.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 793.2838 692.2949)" class="st3 futura-book st5">10.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 741.3246 725.8714)" class="st3 futura-book st5">10.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 691.2263 526.3074)" class="st3 futura-book st5">10.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 689.3217 761.4415)" class="st3 futura-book st5">10.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 637.3177 795.7259)" class="st3 futura-book st5">10.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 583.5422 829.9766)" class="st3 futura-book st5">10.00</text>
					<text transform="matrix(0.5372 0.8435 -0.8435 0.5372 732.4902 588.5775)" class="st3 futura-book st6">335.00m2</text>
					<text transform="matrix(0.5207 0.8212 -0.8412 0.5408 747.9376 593.5486)" class="st7 futura-med st10">57</text>
					<text transform="matrix(0.5372 0.8435 -0.8435 0.5372 680.5972 619.839)" class="st3 futura-book st6">335.00m2</text>
					<text transform="matrix(0.5207 0.8212 -0.8412 0.5408 696.0443 624.8107)" class="st7 futura-med st10">58</text>
					<text transform="matrix(0.5372 0.8435 -0.8435 0.5372 631.4406 657.0142)" class="st3 futura-book st6">335.00m2</text>
					<text transform="matrix(0.5207 0.8212 -0.8412 0.5408 646.8868 661.9856)" class="st7 futura-med st10">59</text>
					<text transform="matrix(0.5372 0.8435 -0.8435 0.5372 579.4259 692.6613)" class="st3 futura-book st6">335.00m2</text>
					<text transform="matrix(0.5207 0.8212 -0.8412 0.5408 594.8734 697.6332)" class="st7 futura-med st10">60</text>
					<text transform="matrix(0.5372 0.8435 -0.8435 0.5372 523.9001 730.4134)" class="st3 futura-book st6">335.00m2</text>
					<text transform="matrix(0.5207 0.8212 -0.8412 0.5408 539.3481 735.384)" class="st7 futura-med st10">61</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 865.8071 829.1127)" class="st3 futura-book st5">33.50</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 904.1461 802.5912)" class="st3 futura-book st5">33.50</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 812.7639 863.2328)" class="st3 futura-book st5">33.50</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 760.5272 898.9346)" class="st3 futura-book st5">33.50</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 711.1936 937.1747)" class="st3 futura-book st5">33.50</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 988.3536 985.7563)" class="st3 futura-book st5">28.00</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 952.8495 1005.6652)" class="st3 futura-book st5">28.00</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 904.9652 1039.8391)" class="st3 futura-book st5">28.00</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 857.7574 1067.6804)" class="st3 futura-book st5">28.00</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 810.0405 1100.1168)" class="st3 futura-book st5">28.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 675.9993 856.1457)" class="st3 futura-book st5">10.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 728.8544 821.9585)" class="st3 futura-book st5">10.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 781.1357 787.2659)" class="st3 futura-book st5">10.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 939.5049 918.0816)" class="st3 futura-book st5">10.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 929.5496 946.0112)" class="st3 futura-book st5">9.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 883.9577 975.8113)" class="st3 futura-book st5">9.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 837.1921 1007.9031)" class="st3 futura-book st5">9.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 787.9573 1039.6527)" class="st3 futura-book st5">9.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 874.4238 1171.7665)" class="st3 futura-book st5">9.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 921.0335 1143.9369)" class="st3 futura-book st5">9.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 968.2312 1112.7086)" class="st3 futura-book st5">9.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 1017.1775 1079.4634)" class="st3 futura-book st5">9.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 887.545 951.6469)" class="st3 futura-book st5">10.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 837.4464 752.0832)" class="st3 futura-book st5">10.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 835.5529 987.217)" class="st3 futura-book st5">10.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 783.5394 1021.5145)" class="st3 futura-book st5">10.00</text>
					<text transform="matrix(0.5372 0.8435 -0.8435 0.5372 878.7115 814.353)" class="st3 futura-book st6">335.00m2</text>
					<text transform="matrix(0.5207 0.8212 -0.8412 0.5408 894.1578 819.3251)" class="st7 futura-med st10">66</text>
					<text transform="matrix(0.5372 0.8435 -0.8435 0.5372 826.8176 845.6255)" class="st3 futura-book st6">335.00m2</text>
					<text transform="matrix(0.5207 0.8212 -0.8412 0.5408 842.2657 850.5981)" class="st7 futura-med st10">65</text>
					<text transform="matrix(0.5372 0.8435 -0.8435 0.5372 777.6727 882.791)" class="st3 futura-book st6">335.00m2</text>
					<text transform="matrix(0.5207 0.8212 -0.8412 0.5408 793.1193 887.7623)" class="st7 futura-med st10">64</text>
					<text transform="matrix(0.5372 0.8435 -0.8435 0.5372 725.6475 918.4377)" class="st3 futura-book st6">335.00m2</text>
					<text transform="matrix(0.5207 0.8212 -0.8412 0.5408 741.0943 923.4104)" class="st7 futura-med st10">63</text>
					<text transform="matrix(0.5372 0.8435 -0.8435 0.5372 960.214 994.5705)" class="st3 futura-book st6">252.00m2</text>
					<text transform="matrix(0.5207 0.8212 -0.8412 0.5408 975.663 999.5443)" class="st7 futura-med st10">67</text>
					<text transform="matrix(0.5372 0.8435 -0.8435 0.5372 916.2184 1021.6688)" class="st3 futura-book st6">252.00m2</text>
					<text transform="matrix(0.5207 0.8212 -0.8412 0.5408 931.6663 1026.6414)" class="st7 futura-med st10">68</text>
					<text transform="matrix(0.5372 0.8435 -0.8435 0.5372 872.4194 1054.9135)" class="st3 futura-book st6">252.00m2</text>
					<text transform="matrix(0.5207 0.8212 -0.8412 0.5408 887.8683 1059.896)" class="st7 futura-med st10">69</text>
					<text transform="matrix(0.5372 0.8435 -0.8435 0.5372 824.072 1087.0939)" class="st3 futura-book st6">252.00m2</text>
					<text transform="matrix(0.5207 0.8212 -0.8412 0.5408 839.5198 1092.0662)" class="st7 futura-med st10">70</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 763.6177 1132.5199)" class="st3 futura-book st5">28.00</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 658.8464 974.3488)" class="st3 futura-book st5">33.50</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 622.7999 890.552)" class="st3 futura-book st5">10.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 739.2751 1071.3884)" class="st3 futura-book st5">9.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 825.199 1204.5441)" class="st3 futura-book st5">9.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 729.7628 1055.7532)" class="st3 futura-book st5">10.00</text>
					<text transform="matrix(0.5372 0.8435 -0.8435 0.5372 670.1223 956.1884)" class="st3 futura-book st6">335.00m2</text>
					<text transform="matrix(0.5207 0.8212 -0.8412 0.5408 685.5686 961.1603)" class="st7 futura-med st10">62</text>
					<text transform="matrix(0.5372 0.8435 -0.8435 0.5372 777.6719 1119.7512)" class="st3 futura-book st6">252.00m2</text>
					<text transform="matrix(0.5207 0.8212 -0.8412 0.5408 793.1083 1124.7128)" class="st7 futura-med st10">71</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 490.0125 829.7569)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 368.9737 910.3527)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 417.4219 890.486)" class="st3 futura-book st5">25.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 400.0361 882.2247)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 405.3519 866.888)" class="st7 futura-med st9">21</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 518.063 871.8068)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 397.0119 952.4001)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 445.4604 932.532)" class="st3 futura-book st5">25.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 428.0862 924.2832)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 433.3912 908.9462)" class="st7 futura-med st9">22</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 542.7032 913.134)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 421.6635 993.7408)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 470.1125 973.8632)" class="st3 futura-book st5">25.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 452.7262 965.612)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 458.0417 950.2744)" class="st7 futura-med st9">23</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 571.7932 958.2029)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 450.7441 1038.7994)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 499.2029 1018.933)" class="st3 futura-book st5">25.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 481.817 1010.6825)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 487.1225 995.3349)" class="st7 futura-med st9">24</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 598.0277 997.307)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 476.978 1077.9133)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 525.4372 1058.0349)" class="st3 futura-book st5">25.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 508.0511 1049.7843)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 513.3669 1034.4467)" class="st7 futura-med st9">25</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 627.3511 1042.299)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 506.312 1122.8961)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 554.761 1103.0289)" class="st3 futura-book st5">25.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 537.3752 1094.7672)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 542.6926 1079.433)" class="st7 futura-med st9">26</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 653.4974 1084.8022)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 532.4473 1165.3983)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 580.9066 1145.5419)" class="st3 futura-book st5">25.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 563.5212 1137.2798)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 568.8251 1121.9424)" class="st7 futura-med st9">27</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 683.4755 1126.0867)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 562.4245 1206.681)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 610.8851 1186.8156)" class="st3 futura-book st5">25.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 593.4975 1178.5522)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 598.8142 1163.2162)" class="st7 futura-med st9">28</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 709.9194 1168.9187)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 588.87 1249.5178)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 637.3179 1229.6489)" class="st3 futura-book st5">25.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 619.9437 1221.399)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 625.2476 1206.0616)" class="st7 futura-med st9">29</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 735.7112 1209.2396)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 614.6602 1289.834)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 663.1202 1269.969)" class="st3 futura-book st5">25.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 645.7337 1261.7065)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 651.0503 1246.382)" class="st7 futura-med st9">30</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 763.816 1251.5972)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 642.7766 1332.205)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 691.2263 1312.3385)" class="st3 futura-book st5">25.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 673.8401 1304.0769)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 679.1551 1288.7384)" class="st7 futura-med st9">31</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 790.7036 1296.3474)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 669.6656 1376.9438)" class="st3 futura-book st5">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 718.1132 1357.0764)" class="st3 futura-book st5">25.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 700.7275 1348.8259)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 706.0435 1333.4891)" class="st7 futura-med st9">32</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 821.0898 1341.5502)" class="st3 futura-book st5">9.50</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 700.0409 1422.1477)" class="st3 futura-book st5">9.50</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 752.6082 1406.6765)" class="st3 futura-book st5">25.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 731.1147 1394.03)" class="st3 futura-book st6">237.50m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 736.4307 1378.6932)" class="st7 futura-med st9">33</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 974.7088 1250.7231)" class="st3 futura-book st5">24.38</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 1029.5809 1230.7228)" class="st3 futura-book st5">28.19</text>
					<text transform="matrix(0.7611 -0.6487 0.6487 0.7611 976.9038 1338.762)" class="st3 futura-book st6">2.06</text>
					<text transform="matrix(0.9817 -0.1903 0.1903 0.9817 1001.0104 1330.1322)" class="st3 futura-book st11">7.57</text>
					<text transform="matrix(0.9817 -0.1903 0.1903 0.9817 1051.5397 1320.1537)" class="st3 futura-book st11">9.77</text>
					<text transform="matrix(0.9154 -0.4026 0.4026 0.9154 1238.4713 1178.9435)" class="st3 futura-book st6">25.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1183.5774 1210.1075)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1312.0695 1155.3909)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 924.1669 1226.9015)" class="st3 futura-book st5">9.00</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 971.9735 1197.058)" class="st3 futura-book st5">9.00</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 854.2907 1390.322)" class="st3 futura-book st5">9.50</text>
					<text transform="matrix(-0.5408 -0.8412 0.8412 -0.5408 733.2531 1470.9193)" class="st3 futura-book st5">9.50</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 785.8198 1455.4473)" class="st3 futura-book st5">25.00</text>
					<text transform="matrix(0.8552 -0.5183 0.5183 0.8552 764.3152 1442.8011)" class="st3 futura-book st6">237.50m2</text>
					<text transform="matrix(0.8295 -0.5028 0.5183 0.8552 769.6309 1427.4646)" class="st7 futura-med st9">34</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 924.8885 1280.7988)" class="st3 futura-book st5">21.78</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 881.7204 1316.7124)" class="st3 futura-book st5">23.70</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 869.7283 1262.3064)" class="st3 futura-book st5">11.00</text>
					<text transform="matrix(0.7611 -0.6487 0.6487 0.7611 938.1553 1373.9662)" class="st3 futura-book st6">11.16</text>
					<text transform="matrix(0.5183 0.8552 -0.8552 0.5183 888.9195 1296.3145)" class="st3 futura-book st6">250.04m2</text>
					<text transform="matrix(0.5028 0.8295 -0.8552 0.5183 904.2573 1301.6315)" class="st7 futura-med st9">35</text>
					<text transform="matrix(0.5183 0.8552 -0.8552 0.5183 941.2672 1262.241)" class="st3 futura-book st6">203.46m2</text>
					<text transform="matrix(0.5028 0.8295 -0.8552 0.5183 956.6025 1267.5551)" class="st7 futura-med st9">36</text>
					<text transform="matrix(0.5183 0.8552 -0.8552 0.5183 994.4656 1238.2982)" class="st3 futura-book st6">236.55m2</text>
					<text transform="matrix(0.5028 0.8295 -0.8552 0.5183 1009.7914 1243.6123)" class="st7 futura-med st9">37</text>
					<text transform="matrix(0.5408 0.8412 -0.8412 0.5408 1080.8208 1205.5077)" class="st3 futura-book st5">32.00</text>
					<text transform="matrix(0.9817 -0.1903 0.1903 0.9817 1114.0201 1310.1659)" class="st3 futura-book st11">9.77</text>
					<text transform="matrix(0.8412 -0.5408 0.5408 0.8412 1020.0784 1163.7361)" class="st3 futura-book st5">9.00</text>
					<text transform="matrix(0.5183 0.8552 -0.8552 0.5183 1046.8019 1214.2556)" class="st3 futura-book st6">270.87m2</text>
					<text transform="matrix(0.5028 0.8295 -0.8552 0.5183 1062.139 1219.5719)" class="st7 futura-med st9">38</text>
					<text transform="matrix(0.9507 -0.3102 0.3102 0.9507 1274.6051 1264.0017)" class="st3 futura-book st12">25.07</text>
					<text transform="matrix(0.9154 -0.4026 0.4026 0.9154 1259.2462 1224.291)" class="st3 futura-book st6">25.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1201.5288 1255.3889)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1337.2837 1204.7581)" class="st3 futura-book st6">9.92</text>
					<text transform="matrix(0.9221 -0.387 0.387 0.9221 1263.311 1254.5441)" class="st3 futura-book st6">223.97m2</text>
					<text transform="matrix(0.8944 -0.3754 0.387 0.9221 1270.818 1240.1592)" class="st7 futura-med st9">39</text>
					<text transform="matrix(0.9221 -0.387 0.387 0.9221 1245.8027 1210.0151)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8944 -0.3754 0.387 0.9221 1253.3094 1195.6187)" class="st7 futura-med st9">40</text>
					<text transform="matrix(0.9154 -0.4026 0.4026 0.9154 1217.1428 1132.9742)" class="st3 futura-book st6">25.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1162.2596 1164.1505)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1290.7509 1109.4343)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.9221 -0.387 0.387 0.9221 1224.4738 1164.0481)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8944 -0.3754 0.387 0.9221 1231.9812 1149.6619)" class="st7 futura-med st9">41</text>
					<text transform="matrix(0.9154 -0.4026 0.4026 0.9154 1197.7845 1088.4684)" class="st3 futura-book st6">25.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1142.891 1119.6333)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1271.3831 1064.9166)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.9221 -0.387 0.387 0.9221 1205.1045 1119.5292)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8944 -0.3754 0.387 0.9221 1212.6235 1105.1455)" class="st7 futura-med st9">42</text>
					<text transform="matrix(0.9154 -0.4026 0.4026 0.9154 1179.5477 1039.9764)" class="st3 futura-book st6">25.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1124.6647 1071.1517)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1253.1555 1016.4346)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.9221 -0.387 0.387 0.9221 1186.8776 1071.0474)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8944 -0.3754 0.387 0.9221 1194.3958 1056.6631)" class="st7 futura-med st9">43</text>
					<text transform="matrix(0.9154 -0.4026 0.4026 0.9154 1160.4661 995.9347)" class="st3 futura-book st6">25.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1105.573 1027.1112)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1234.0747 972.3935)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.9221 -0.387 0.387 0.9221 1167.7979 1027.0063)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8944 -0.3754 0.387 0.9221 1175.3048 1012.6215)" class="st7 futura-med st9">44</text>
					<text transform="matrix(0.9154 -0.4026 0.4026 0.9154 1139.9685 947.829)" class="st3 futura-book st6">25.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1085.0736 979.0052)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1213.5649 924.2761)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.9221 -0.387 0.387 0.9221 1147.2992 978.9009)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8944 -0.3754 0.387 0.9221 1154.8051 964.5049)" class="st7 futura-med st9">45</text>
					<text transform="matrix(0.9154 -0.4026 0.4026 0.9154 1118.6284 901.9598)" class="st3 futura-book st6">25.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1063.7463 933.1261)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1192.2357 878.4084)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.9221 -0.387 0.387 0.9221 1125.9597 933.021)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8944 -0.3754 0.387 0.9221 1133.4784 918.6354)" class="st7 futura-med st9">46</text>
					<text transform="matrix(0.9154 -0.4026 0.4026 0.9154 1100.3562 857.9525)" class="st3 futura-book st6">25.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1045.462 889.1167)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1173.9543 834.402)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.9221 -0.387 0.387 0.9221 1107.6884 889.0145)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8944 -0.3754 0.387 0.9221 1115.1957 874.6295)" class="st7 futura-med st9">47</text>
					<text transform="matrix(0.9154 -0.4026 0.4026 0.9154 1080.3572 810.4128)" class="st3 futura-book st6">25.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1025.4746 841.5782)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1153.9657 786.8619)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.9221 -0.387 0.387 0.9221 1087.688 841.4731)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8944 -0.3754 0.387 0.9221 1095.1948 827.0893)" class="st7 futura-med st9">48</text>
					<text transform="matrix(0.9154 -0.4026 0.4026 0.9154 1060.8553 763.6678)" class="st3 futura-book st6">25.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1005.9618 794.8349)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1134.453 740.1165)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.9221 -0.387 0.387 0.9221 1068.1858 794.7297)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8944 -0.3754 0.387 0.9221 1075.6948 780.345)" class="st7 futura-med st9">49</text>
					<text transform="matrix(0.9154 -0.4026 0.4026 0.9154 1039.3943 717.8667)" class="st3 futura-book st6">25.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 984.511 749.0314)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1113.0026 694.3139)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.9221 -0.387 0.387 0.9221 1046.7255 748.9291)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8944 -0.3754 0.387 0.9221 1054.2438 734.5425)" class="st7 futura-med st9">50</text>
					<text transform="matrix(0.9154 -0.4026 0.4026 0.9154 1019.4047 671.7204)" class="st3 futura-book st6">25.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 964.5227 702.8845)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1093.0138 648.1683)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.9221 -0.387 0.387 0.9221 1026.7368 702.7818)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8944 -0.3754 0.387 0.9221 1034.2441 688.3967)" class="st7 futura-med st9">51</text>
					<text transform="matrix(0.9154 -0.4026 0.4026 0.9154 998.143 624.2911)" class="st3 futura-book st6">25.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 943.26 655.4664)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1071.7528 600.7515)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.9221 -0.387 0.387 0.9221 1005.4739 655.3636)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8944 -0.3754 0.387 0.9221 1012.9943 640.9667)" class="st7 futura-med st9">52</text>
					<text transform="matrix(0.9154 -0.4026 0.4026 0.9154 961.6883 529.8861)" class="st3 futura-book st6">25.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 906.8057 561.0623)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1035.2961 506.3335)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.9221 -0.387 0.387 0.9221 969.0189 560.9476)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8944 -0.3754 0.387 0.9221 976.5377 546.562)" class="st7 futura-med st9">54</text>
					<text transform="matrix(0.9154 -0.4026 0.4026 0.9154 939.2627 484.3162)" class="st3 futura-book st6">25.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 884.3801 515.4923)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1012.8722 460.765)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.9221 -0.387 0.387 0.9221 946.5947 515.3778)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8944 -0.3754 0.387 0.9221 954.1025 500.9926)" class="st7 futura-med st9">55</text>
					<text transform="matrix(0.9154 -0.4026 0.4026 0.9154 922.2214 438.5363)" class="st3 futura-book st6">25.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 867.3379 469.7129)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 995.8299 414.9973)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.9221 -0.387 0.387 0.9221 929.5515 469.5977)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8944 -0.3754 0.387 0.9221 937.0703 455.211)" class="st7 futura-med st9">56</text>
					<text transform="matrix(0.546 0.8378 -0.8378 0.546 167.7601 379.7571)" class="st3 futura-book st6">33.50</text>
					<text transform="matrix(0.546 0.8378 -0.8378 0.546 111.1617 405.5693)" class="st3 futura-book st6">33.50</text>
					<text transform="matrix(0.546 0.8378 -0.8378 0.546 64.1197 447.7064)" class="st3 futura-book st6">33.50</text>
					<text transform="matrix(0.8557 -0.5174 0.5174 0.8557 234.7051 458.0263)" class="st3 futura-book st13">10.00</text>
					<text transform="matrix(0.8557 -0.5174 0.5174 0.8557 186.3556 489.6985)" class="st3 futura-book st13">10.00</text>
					<text transform="matrix(0.8557 -0.5174 0.5174 0.8557 127.3534 526.043)" class="st3 futura-book st13">10.00</text>
					<text transform="matrix(0.8557 -0.5174 0.5174 0.8557 24.3435 363.0572)" class="st3 futura-book st13">10.00</text>
					<text transform="matrix(0.8557 -0.5174 0.5174 0.8557 76.6904 328.362)" class="st3 futura-book st13">10.00</text>
					<text transform="matrix(0.8557 -0.5174 0.5174 0.8557 128.9151 294.8739)" class="st3 futura-book st13">10.00</text>
					<text transform="matrix(0.393 0.9195 -0.9195 0.393 847.1285 209.2925)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.393 0.9195 -0.9195 0.393 826.7401 162.9716)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.393 0.9195 -0.9195 0.393 806.9406 119.4066)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.393 0.9195 -0.9195 0.393 787.2619 71.7991)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.9195 -0.393 0.393 0.9195 789.8527 268.4613)" class="st3 futura-book st6">25.00</text>
					<text transform="matrix(0.9195 -0.393 0.393 0.9195 771.8575 235.1744)" class="st3 futura-book st6">25.00</text>
					<text transform="matrix(0.9195 -0.393 0.393 0.9195 751.6814 191.609)" class="st3 futura-book st6">25.00</text>
					<text transform="matrix(0.9195 -0.393 0.393 0.9195 731.5154 146.4271)" class="st3 futura-book st6">25.00</text>
					<text transform="matrix(0.9195 -0.393 0.393 0.9195 712.5455 99.1188)" class="st3 futura-book st6">25.00</text>
					<text transform="matrix(0.393 0.9195 -0.9195 0.393 715.2052 269.5031)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.393 0.9195 -0.9195 0.393 695.4369 222.4276)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.393 0.9195 -0.9195 0.393 676.068 176.4718)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.393 0.9195 -0.9195 0.393 655.3931 128.4531)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.9198 -0.3923 0.3923 0.9198 775.6458 261.9845)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8922 -0.3806 0.3923 0.9198 783.0759 247.554)" class="st7 futura-med st9">01</text>
					<text transform="matrix(0.9198 -0.3923 0.3923 0.9198 756.6868 222.4492)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8922 -0.3806 0.3923 0.9198 764.1055 208.0193)" class="st7 futura-med st9">02</text>
					<text transform="matrix(0.9198 -0.3923 0.3923 0.9198 736.5094 176.4583)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8922 -0.3806 0.3923 0.9198 743.9402 162.018)" class="st7 futura-med st9">03</text>
					<text transform="matrix(0.9198 -0.3923 0.3923 0.9198 717.9504 131.1776)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8922 -0.3806 0.3923 0.9198 725.3805 116.7481)" class="st7 futura-med st9">04</text>
					<text transform="matrix(0.8557 -0.5174 0.5174 0.8557 553.4475 253.8567)" class="st3 futura-book st13">10.00</text>
					<text transform="matrix(0.546 0.8378 -0.8378 0.546 520.856 140.0158)" class="st3 futura-book st6">29.60</text>
					<text transform="matrix(0.546 0.8378 -0.8378 0.546 477.3669 163.3162)" class="st3 futura-book st6">32.52</text>
					<text transform="matrix(0.546 0.8378 -0.8378 0.546 425.2745 199.318)" class="st3 futura-book st6">33.50</text>
					<text transform="matrix(0.546 0.8378 -0.8378 0.546 370.8793 228.3755)" class="st3 futura-book st6">33.50</text>
					<text transform="matrix(0.546 0.8378 -0.8378 0.546 321.291 265.8938)" class="st3 futura-book st6">33.50</text>
					<text transform="matrix(0.546 0.8378 -0.8378 0.546 269.011 303.004)" class="st3 futura-book st6">33.50</text>
					<text transform="matrix(0.546 0.8378 -0.8378 0.546 216.2084 338.106)" class="st3 futura-book st6">33.50</text>
					<text transform="matrix(0.8557 -0.5174 0.5174 0.8557 500.9341 286.6566)" class="st3 futura-book st13">10.00</text>
					<text transform="matrix(0.8557 -0.5174 0.5174 0.8557 446.3835 320.9085)" class="st3 futura-book st13">10.00</text>
					<text transform="matrix(0.8557 -0.5174 0.5174 0.8557 395.3655 355.2601)" class="st3 futura-book st13">10.00</text>
					<text transform="matrix(0.8557 -0.5174 0.5174 0.8557 340.5824 389.4667)" class="st3 futura-book st13">10.00</text>
					<text transform="matrix(0.8557 -0.5174 0.5174 0.8557 289.1557 423.7869)" class="st3 futura-book st13">10.00</text>
					<text transform="matrix(0.8557 -0.5174 0.5174 0.8557 180.6411 259.6685)" class="st3 futura-book st13">10.00</text>
					<text transform="matrix(0.8557 -0.5174 0.5174 0.8557 238.1816 226.5918)" class="st3 futura-book st13">10.00</text>
					<text transform="matrix(0.8557 -0.5174 0.5174 0.8557 288.735 190.5127)" class="st3 futura-book st13">10.00</text>
					<text transform="matrix(0.8557 -0.5174 0.5174 0.8557 342.2325 159.8269)" class="st3 futura-book st13">10.00</text>
					<text transform="matrix(0.8557 -0.5174 0.5174 0.8557 393.6828 123.9244)" class="st3 futura-book st13">10.07</text>
					<text transform="matrix(0.9536 -0.301 0.301 0.9536 455.5076 97.933)" class="st3 futura-book st6">10.42</text>
					<text transform="matrix(0.542 0.8404 -0.8404 0.542 487.7545 147.8766)" class="st3 futura-book st6">311.66m2</text>
					<text transform="matrix(0.5307 0.8212 -0.8412 0.5408 503.2365 152.7593)" class="st7 futura-med st10">05</text>
					<text transform="matrix(0.542 0.8404 -0.8404 0.542 439.0615 180.2457)" class="st3 futura-book st6">331.83m2</text>
					<text transform="matrix(0.5307 0.8212 -0.8412 0.5408 454.5446 185.1293)" class="st7 futura-med st10">06</text>
					<text transform="matrix(0.542 0.8404 -0.8404 0.542 389.9277 215.8611)" class="st3 futura-book st6">335.00m2</text>
					<text transform="matrix(0.5307 0.8212 -0.8412 0.5408 405.4098 220.7422)" class="st7 futura-med st10">07</text>
					<text transform="matrix(0.542 0.8404 -0.8404 0.542 334.6441 251.8382)" class="st3 futura-book st6">335.00m2</text>
					<text transform="matrix(0.5307 0.8212 -0.8412 0.5408 350.1172 256.7216)" class="st7 futura-med st10">08</text>
					<text transform="matrix(0.542 0.8404 -0.8404 0.542 283.1503 288.9699)" class="st3 futura-book st6">335.00m2</text>
					<text transform="matrix(0.5307 0.8212 -0.8412 0.5408 298.6326 293.8519)" class="st7 futura-med st10">09</text>
					<text transform="matrix(0.542 0.8404 -0.8404 0.542 229.9307 323.0789)" class="st3 futura-book st6">335.00m2</text>
					<text transform="matrix(0.5307 0.8212 -0.8412 0.5408 245.4126 327.9603)" class="st7 futura-med st10">10</text>
					<text transform="matrix(0.542 0.8404 -0.8404 0.542 180.3524 362.6124)" class="st3 futura-book st6">335.00m2</text>
					<text transform="matrix(0.5307 0.8212 -0.8412 0.5408 195.8336 367.4936)" class="st7 futura-med st10">11</text>
					<text transform="matrix(0.542 0.8404 -0.8404 0.542 127.7073 393.6758)" class="st3 futura-book st6">335.00m2</text>
					<text transform="matrix(0.5307 0.8212 -0.8412 0.5408 143.1876 398.557)" class="st7 futura-med st10">12</text>
					<text transform="matrix(0.542 0.8404 -0.8404 0.542 77.7173 429.4879)" class="st3 futura-book st6">335.00m2</text>
					<text transform="matrix(0.5307 0.8212 -0.8412 0.5408 93.2012 434.3701)" class="st7 futura-med st10">13</text>
					<text transform="matrix(0.9154 -0.4026 0.4026 0.9154 980.1819 578.3024)" class="st3 futura-book st6">25.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 925.2977 609.476)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.4026 0.9154 -0.9154 0.4026 1053.7902 554.7614)" class="st3 futura-book st6">8.00</text>
					<text transform="matrix(0.9221 -0.387 0.387 0.9221 987.5123 609.3737)" class="st3 futura-book st6">200.00m2</text>
					<text transform="matrix(0.8944 -0.3754 0.387 0.9221 995.031 594.9881)" class="st7 futura-med st9">53</text>
					
						<rect x="401.6" y="206.5" transform="matrix(0.2054 -0.9787 0.9787 0.2054 116.3539 563.4856)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="401,212.8 405,210.1 409.3,207.3 407.9,214.3 				"/>
					
						<rect x="451.2" y="170.7" transform="matrix(0.2054 -0.9787 0.9787 0.2054 190.8262 583.464)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="450.5,176.9 454.6,174.3 458.9,171.5 457.4,178.4 				"/>
					
						<rect x="499.7" y="139.9" transform="matrix(0.2054 -0.9787 0.9787 0.2054 259.5243 606.528)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="499,146.2 503.1,143.5 507.4,140.7 506,147.6 				"/>
					
						<rect x="346.2" y="243" transform="matrix(0.2054 -0.9787 0.9787 0.2054 36.683 538.1952)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="345.6,249.2 349.6,246.6 353.9,243.7 352.5,250.7 				"/>
					
						<rect x="295.4" y="279.4" transform="matrix(0.2054 -0.9787 0.9787 0.2054 -39.3224 517.405)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="294.7,285.6 298.8,283 303.1,280.2 301.7,287.1 				"/>
					
						<rect x="241" y="314.7" transform="matrix(0.2054 -0.9787 0.9787 0.2054 -117.173 492.1879)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="240.3,321 244.4,318.3 248.7,315.5 247.2,322.4 				"/>
					
						<rect x="744.4" y="579.5" transform="matrix(0.2234 -0.9747 0.9747 0.2234 12.6048 1181.8207)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="743.8,585.7 747.9,583.1 752.2,580.3 750.7,587.2 				"/>
					
						<rect x="692.4" y="612.7" transform="matrix(0.2234 -0.9747 0.9747 0.2234 -60.2715 1156.9117)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="691.7,619 695.8,616.4 700.2,613.6 698.6,620.5 				"/>
					
						<rect x="643.6" y="649.2" transform="matrix(0.2234 -0.9747 0.9747 0.2234 -133.6755 1137.6349)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="642.9,655.4 647,652.8 651.4,650 649.8,657 				"/>
					
						<rect x="591.3" y="683.5" transform="matrix(0.2234 -0.9747 0.9747 0.2234 -207.7092 1113.3467)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="590.6,689.7 594.8,687.1 599.1,684.4 597.5,691.3 				"/>
					
						<rect x="535.1" y="722.7" transform="matrix(0.2234 -0.9747 0.9747 0.2234 -289.6274 1089.0098)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="534.4,728.9 538.5,726.3 542.9,723.6 541.3,730.5 				"/>
					
						<rect x="205.3" y="572.2" transform="matrix(0.2083 -0.9781 0.9781 0.2083 -397.7324 660.0999)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="211.6,579.9 209,575.8 206.2,571.5 213.1,573 				"/>
					
						<rect x="226.6" y="609.5" transform="matrix(0.2083 -0.9781 0.9781 0.2083 -417.3459 710.4612)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="232.9,617.2 230.3,613.1 227.5,608.8 234.4,610.3 				"/>
					
						<rect x="256.4" y="655.1" transform="matrix(0.2083 -0.9781 0.9781 0.2083 -438.4257 775.6973)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="262.7,662.9 260,658.8 257.2,654.4 264.1,655.9 				"/>
					
						<rect x="278.8" y="693.9" transform="matrix(0.2083 -0.9781 0.9781 0.2083 -458.5886 828.3019)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="285.1,701.6 282.4,697.5 279.6,693.2 286.6,694.7 				"/>
					
						<rect x="309.6" y="734" transform="matrix(0.2083 -0.9781 0.9781 0.2083 -473.3977 890.2186)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="315.9,741.7 313.3,737.6 310.5,733.3 317.4,734.8 				"/>
					
						<rect x="711.3" y="110.7" transform="matrix(0.3527 -0.9358 0.9358 0.3527 355.8412 742.9332)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="716.9,118.9 714.9,114.4 712.8,109.7 719.4,112.3 				"/>
					
						<rect x="732.2" y="154.9" transform="matrix(0.3489 -0.9371 0.9371 0.3489 330.5239 792.6669)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="734.4,164.5 732.4,160.1 730.3,155.4 736.9,157.9 				"/>
					
						<rect x="750.5" y="202.1" transform="matrix(0.3527 -0.9358 0.9358 0.3527 295.6306 838.7203)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="756.1,210.3 754.1,205.8 751.9,201.1 758.6,203.6 				"/>
					
						<rect x="768.5" y="242.3" transform="matrix(0.3527 -0.9358 0.9358 0.3527 269.7289 881.6258)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="774.1,250.5 772.1,246 770,241.3 776.6,243.8 				"/>
					
						<rect x="756.2" y="1423.3" transform="matrix(0.2083 -0.9781 0.9781 0.2083 -794.0811 1872.7423)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="762.5,1431 759.9,1426.9 757.1,1422.6 764,1424.1 				"/>
					
						<rect x="890" y="805.1" transform="matrix(0.2234 -0.9747 0.9747 0.2234 -94.2973 1498.9489)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="889.3,811.3 893.5,808.7 897.8,806 896.2,812.9 				"/>
					
						<rect x="682" y="947.1" transform="matrix(0.2234 -0.9747 0.9747 0.2234 -394.2564 1406.4912)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="681.3,953.4 685.4,950.8 689.8,948 688.2,954.9 				"/>
					
						<rect x="971.5" y="986.9" transform="matrix(0.2234 -0.9747 0.9747 0.2234 -208.2559 1719.5211)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="970.8,993.1 974.9,990.5 979.3,987.8 977.7,994.7 				"/>
					
						<rect x="788.9" y="1109.8" transform="matrix(0.2234 -0.9747 0.9747 0.2234 -469.8213 1637.0374)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="788.2,1116 792.4,1113.5 796.7,1110.7 795.1,1117.6 				"/>
					
						<rect x="1059.5" y="1206.1" transform="matrix(0.2234 -0.9747 0.9747 0.2234 -353.4925 1975.5815)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="1058.8,1212.3 1063,1209.7 1067.3,1207 1065.7,1213.9 				"/>
					
						<rect x="901.1" y="1287.3" transform="matrix(0.2234 -0.9747 0.9747 0.2234 -555.6899 1884.245)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="900.4,1293.5 904.6,1290.9 908.9,1288.2 907.3,1295.1 				"/>
					
						<rect x="923.8" y="449.2" transform="matrix(0.3704 -0.9289 0.9289 0.3704 163.3581 1146.4436)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="929.4,457.3 927.5,452.8 925.4,448.1 932,450.7 				"/>
					
						<rect x="941.2" y="495.4" transform="matrix(0.3704 -0.9289 0.9289 0.3704 131.3447 1191.6689)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="946.7,503.5 944.8,499 942.8,494.3 949.4,496.9 				"/>
					
						<rect x="962.3" y="541.7" transform="matrix(0.3704 -0.9289 0.9289 0.3704 101.608 1240.4756)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="967.9,549.9 965.9,545.4 963.9,540.7 970.5,543.3 				"/>
					
						<rect x="979.7" y="588" transform="matrix(0.3704 -0.9289 0.9289 0.3704 69.5946 1285.701)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="985.2,596.1 983.3,591.6 981.3,586.9 987.9,589.5 				"/>
					
						<rect x="1257.3" y="1234.3" transform="matrix(0.3704 -0.9289 0.9289 0.3704 -355.9141 1950.5072)" class="st14" width="7.1" height="7.1"/>
					<polygon class="st14" points="1262.9,1242.4 1261,1237.9 1258.9,1233.2 1265.5,1235.8 				"/>
				</g>
			</g>
		</svg>

	</div>

</body>
</html>