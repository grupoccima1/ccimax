<html lang="es_MX">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" contet="ie=edge">
    <meta name="author" content="Ing. Saúl Fernando Torres Hernández">
    <meta name="description" content="Grúpo CCIMA S.A. de C.V." />
    <meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

    <title>Grupo CCIMA</title>

    <script type="text/javascript" src="media/assets/js/analytics.js"></script>

    <link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
    <script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="media/assets/js/init.js"></script>
</head>
<body ng-controller="PBTaigaCtrl as taiga">

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

	<div class="modal__panel" ng-class="taiga.taigaListDialogDisplay">
		<div class="container__panel">
			<div class="toolbar__panel blue-txt">
				<p>Taiga 1 - Lotes</p>
				<span class="close__panel" ng-click="taiga.closeDesiertoListDialog()"><i class="material-icons" style="margin:0;">close</i></span>
			</div>
			<div class="content__panel">
				<ul class="saufth-collapsable">
					<li ng-repeat="property in taiga.inmovablesData.inmovables" ng-if="property.idCondominium === 17">
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
								<div class="p-20 pointer" ng-class="taiga.inmovablesClassList[$index]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[$index])"></div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="taiga.dialogDisplay">
		<div class="backdrop-dialog" ng-click="taiga.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="taiga.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{taiga.propertyData.reference}}</p>
				<ul class="saufth-collapsable">
					<li ng-repeat="user in taiga.activeUsers" ng-if="user.idProfile> 1">
						<div class="saufth-collapsable-header" ng-click="taiga.selectUser(lead.idLead, $index)" ng-class="taiga.activeUsers[$index].collapsableHeaderClass">
							<div style="display:flex;"><i class="material-icons pr-15">account_circle</i>{{user.name + ' ' + user.last_name}}</div>
							<div class="py-5 pl-15"></div>
							<div class="saufth-badge blue-bg light-txt ml-15">{{user.leads.length}}</div>
						</div>
						<ul class="saufth-collapsable-body" ng-class="taiga.activeUsers[$index].collapsableBodyClass">
							<li class="saufth-collapsable-body-li" ng-repeat="lead in user.leads">
								<div class="saufth-collapsable-item-h" ng-click="taiga.selectLeadPropertyStatus(lead.idUser, lead.idLead)">
									<i class="material-icons px-15">assignment_ind</i>{{lead.name + ' ' + lead.last_name}}
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="taiga.dialogStatusDisplay">
		<div class="backdrop-dialog" ng-click="taiga.closeDialogStatus()"></div>
		<div class="container-dialog p-20 status-dialog">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="taiga.closeDialogStatus()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{taiga.propertyData.reference}}</p>
				<ul class="saufth-collapsable w100">
					<li>
						<div class="saufth-collapsable-header" ng-click="taiga.setStatus(1)"><div class="color-block pb-property-active-bg mr-15"></div>Disponible</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="taiga.setStatus(6)"><div class="color-block darkgray__bg mr-15"></div>Estratégico</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="taiga.setStatus(2)"><div class="color-block pb_lightred-bg mr-15"></div>En espera</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="taiga.setStatus(3)"><div class="color-block brown mr-15"></div>Apartado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="taiga.setStatus(4)"><div class="color-block mustard-bg mr-15"></div>Enganchado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="taiga.setStatus(5)"><div class="color-block pb_teal-bg mr-15"></div>Vendido</div>
					</li>
				</ul>
			</div>
		</div>
	</div>



	<div class="plano_container">

		<div class="container mt-64">
			<div class="row portto_blanco-quote-header">
				<div class="col s12">
					<h1 class="center-align">TAIGA 1</h1>
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
				<button class="btn-flat right"><i style="font-size:30px;" class="material-icons" ng-click="taiga.showInmovablesList()">list</i></button>
			</div>
		</div>

		<svg version="1.1" class="quote__map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
			x="0px" y="0px" viewBox="0 0 1366 1076.3" style="enable-background:new 0 0 1366 1076.3;" xml:space="preserve">

			<g>
				<g>
					
					<image style="overflow:visible;enable-background:new;" width="1366" height="1078" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/taiga/condos/taiga_1.jpg" transform="matrix(1 0 0 1 0 -1.7402)"></image>
					
					<g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[0]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[0])">
							<polygon class="property pb-sprite-1" points="761.5,738.7 791.1,770.8 728.8,841.3 703.2,813.8"/>
							<g>
								<polygon class="mustard__dl__fill" points="765.6,761.2 759.9,767.1 765.6,772.9"/>
								<polygon class="mustard__dr__fill" points="765.7,761.2 765.7,772.9 771.4,767.1"/>
							</g>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 739.2188 805.263)" class="white__fill futura-book fs__6-8__px">172.55 m2</text>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 741.6804 789.9352)" class="mustard__fill futura-med fs__8-2__px">01</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 766.3004 753.5984)" class="white__fill futura-book fs__6-8__px">9.26</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 715.3953 819.8564)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6469 -0.7625 0.7625 0.6469 754.7137 807.7043)" class="white__fill futura-book fs__6-8__px">20.09</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[1]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[1])">
							<polygon class="property pb-sprite-2" points="761.5,738.7 735.8,711.5 677.8,786.6 703.2,813.8"/>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 713.18 776.1172)" class="white__fill futura-book fs__6-8__px">160.00 m2</text>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 715.6412 760.7898)" class="mustard__fill futura-med fs__8-2__px">02</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 740.4482 725.7031)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 690.1582 791.4536)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6066 -0.795 0.795 0.6066 728.0466 778.593)" class="white__fill futura-book fs__6-8__px">20.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[2]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[2])">
							<polygon class="property pb-sprite-1" points="709.8,684.5 735.8,711.5 677.8,786.6 652,759.4"/>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 688.3033 748.7627)" class="white__fill futura-book fs__6-8__px">160.00 m2</text>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 690.7637 733.4332)" class="mustard__fill futura-med fs__8-2__px">03</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 713.0125 697.5657)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 664.0506 763.9273)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.617 -0.787 0.787 0.617 701.2786 752.2391)" class="white__fill futura-book fs__6-8__px">20.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[3]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[3])">
							<polygon class="property pb-sprite-2" points="709.8,684.5 683.7,657.9 625.9,732.5 652,759.4"/>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 661.5917 721.0273)" class="white__fill futura-book fs__6-8__px">160 m2</text>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 660.5768 709.4963)" class="mustard__fill futura-med fs__8-2__px">04</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 687.1293 671.6246)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 638.2663 737.5864)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6469 -0.7625 0.7625 0.6469 675.5483 724.415)" class="white__fill futura-book fs__6-8__px">20.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[4]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[4])">
							<polygon class="property pb-sprite-1" points="657.3,631.1 683.7,657.9 625.9,732.5 599.4,705.9"/>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 635.0522 695.9495)" class="white__fill futura-book fs__6-8__px">160.00 m2</text>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 637.5145 680.6223)" class="mustard__fill futura-med fs__8-2__px">05</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 663.6203 645.5349)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 611.0916 710.0647)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6469 -0.7625 0.7625 0.6469 647.5668 699.3392)" class="white__fill futura-book fs__6-8__px">20.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[5]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[5])">
							<polygon class="property pb-sprite-2" points="657.3,631.1 630.8,605.1 572.9,679.6 599.4,705.9"/>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 608.0021 669.468)" class="white__fill futura-book fs__6-8__px">160.00 m2</text>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 610.463 654.1395)" class="mustard__fill futura-med fs__8-2__px">06</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 636.5695 619.0532)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 584.254 682.2212)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6469 -0.7625 0.7625 0.6469 621.9595 672.8568)" class="white__fill futura-book fs__6-8__px">20.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[6]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[6])">
							<polygon class="property pb-sprite-1" points="603.8,578.8 630.8,605.1 572.9,679.6 546.1,653.4"/>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 582.9868 643.0361)" class="white__fill futura-book fs__6-8__px">160.00 m2</text>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 585.4484 627.7083)" class="mustard__fill futura-med fs__8-2__px">07</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 608.6711 591.1755)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 556.754 656.8524)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6469 -0.7625 0.7625 0.6469 596.1209 645.5373)" class="white__fill futura-book fs__6-8__px">20.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[7]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[7])">
							<polygon class="property pb-sprite-2" points="603.8,578.8 576.7,553.2 519,627.8 546.1,653.4"/>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 555.6857 617.7387)" class="white__fill futura-book fs__6-8__px">160.00 m2</text>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 558.1469 602.4099)" class="mustard__fill futura-med fs__8-2__px">08</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 581.0778 565.6566)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 529.4518 631.5533)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6469 -0.7625 0.7625 0.6469 568.1234 620.2646)" class="white__fill futura-book fs__6-8__px">20.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[8]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[8])">
							<polygon class="property pb-sprite-1" points="549.4,527.6 576.7,553.2 519,627.8 491.9,601.9"/>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 528.3298 592.5165)" class="white__fill futura-book fs__6-8__px">160.00 m2</text>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 530.7909 577.1877)" class="mustard__fill futura-med fs__8-2__px">09</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 553.6038 541.2798)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 503.3628 606.3326)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6469 -0.7625 0.7625 0.6469 542.0021 594.4332)" class="white__fill futura-book fs__6-8__px">20.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[9]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[9])">
							<polygon class="property pb-sprite-2" points="549.4,527.6 521.9,502.4 464.4,576.6 491.9,601.9"/>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 499.8349 566.3287)" class="white__fill futura-book fs__6-8__px">160.00 m2</text>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 502.2957 551.0002)" class="mustard__fill futura-med fs__8-2__px">10</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 526.8826 514.4781)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 475.1571 580.7848)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6469 -0.7625 0.7625 0.6469 513.7916 569.7164)" class="white__fill futura-book fs__6-8__px">20.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[10]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[10])">
							<polygon class="property pb-sprite-1" points="494.2,477.4 521.9,502.4 464.4,576.6 436.5,551.5"/>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 472.2317 540.8744)" class="white__fill futura-book fs__6-8__px">160.00 m2</text>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 474.6925 525.546)" class="mustard__fill futura-med fs__8-2__px">11</text>
							<text transform="matrix(0.7112 0.703 -0.703 0.7112 499.758 490.8236)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 447.6417 555.6836)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6469 -0.7625 0.7625 0.6469 486.1886 544.2624)" class="white__fill futura-book fs__6-8__px">20.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[11]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[11])">
							<polygon class="property pb-sprite-2" points="494.2,477.4 466.2,452.6 408.5,526.8 436.5,551.5"/>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 444.0074 517.3527)" class="white__fill futura-book fs__6-8__px">160.00 m2</text>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 446.4685 502.024)" class="mustard__fill futura-med fs__8-2__px">12</text>
							<text transform="matrix(0.7401 0.6725 -0.6725 0.7401 470.0828 465.4683)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 419.63 530.8827)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6469 -0.7625 0.7625 0.6469 458.6706 518.841)" class="white__fill futura-book fs__6-8__px">20.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[12]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[12])">
							<polygon class="property pb-sprite-1" points="437.7,427.9 466.1,452.6 408.4,526.8 380.2,502.2"/>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 416.0621 492.7908)" class="white__fill futura-book fs__6-8__px">160.00 m2</text>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 418.5229 477.4623)" class="mustard__fill futura-med fs__8-2__px">13</text>
							<text transform="matrix(0.7348 0.6782 -0.6782 0.7348 443.0727 441.9002)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 390.5863 505.9098)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6469 -0.7625 0.7625 0.6469 430.3113 495.2702)" class="white__fill futura-book fs__6-8__px">20.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[13]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[13])">
							<polygon class="property pb-sprite-2" points="437.8,427.9 409.6,403.9 352.1,478 380.3,502.2"/>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 386.3062 470.1871)" class="white__fill futura-book fs__6-8__px">160.00 m2</text>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 388.7667 454.859)" class="mustard__fill futura-med fs__8-2__px">14</text>
							<text transform="matrix(0.7368 0.6761 -0.6761 0.7368 413.668 417.721)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 363.5099 481.6323)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6469 -0.7625 0.7625 0.6469 401.1664 470.0878)" class="white__fill futura-book fs__6-8__px">20.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[14]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[14])">
							<polygon class="property pb-sprite-1" points="380.8,379.6 409.6,403.9 352.1,478 323.3,453.9"/>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 358.9669 444.0083)" class="white__fill futura-book fs__6-8__px">160.00 m2</text>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 361.4282 428.6809)" class="mustard__fill futura-med fs__8-2__px">15</text>
							<text transform="matrix(0.7356 0.6774 -0.6774 0.7356 386.0094 392.6066)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6949 0.7191 -0.7191 0.6949 334.2536 458.0354)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6469 -0.7625 0.7625 0.6469 372.9247 447.3975)" class="white__fill futura-book fs__6-8__px">20.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[15]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[15])">
							<polygon class="property pb-sprite-2" points="380.8,379.6 352.1,356 294.4,430.5 323.3,453.9"/>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 330.0911 421.8337)" class="white__fill futura-book fs__6-8__px">160.00 m2</text>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 332.5533 406.5066)" class="mustard__fill futura-med fs__8-2__px">16</text>
							<text transform="matrix(0.7867 0.6173 -0.6173 0.7867 357.6195 370.2272)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.7684 0.64 -0.64 0.7684 306.5704 435.0016)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6469 -0.7625 0.7625 0.6469 344.0503 423.0495)" class="white__fill futura-book fs__6-8__px">20.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[16]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[16])">
							<polygon class="property pb-sprite-1" points="322.7,332.4 352.1,356 294.4,430.5 265.3,406.7"/>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 301.4493 395.9664)" class="white__fill futura-book fs__6-8__px">160.00 m2</text>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 303.9104 380.6376)" class="mustard__fill futura-med fs__8-2__px">17</text>
							<text transform="matrix(0.7922 0.6103 -0.6103 0.7922 327.777 346.2707)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.7638 0.6455 -0.6455 0.7638 275.7365 411.0758)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6469 -0.7625 0.7625 0.6469 315.4077 397.0759)" class="white__fill futura-book fs__6-8__px">20.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[17]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[17])">
							<polygon class="property pb-sprite-2" points="322.7,332.4 293.5,309.3 236.3,383.4 265.3,406.7"/>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 270.8141 373.0788)" class="white__fill futura-book fs__6-8__px">160.00 m2</text>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 273.276 357.7507)" class="mustard__fill futura-med fs__8-2__px">18</text>
							<text transform="matrix(0.7752 0.6317 -0.6317 0.7752 298.0594 323.2992)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.7833 0.6217 -0.6217 0.7833 247.9063 387.9323)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6469 -0.7625 0.7625 0.6469 285.7128 375.8326)" class="white__fill futura-book fs__6-8__px">20.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[18]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[18])">
							<polygon class="property pb-sprite-1" points="264,286.2 293.5,309.3 236.3,383.4 206.7,360.4"/>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 243.0815 350.4979)" class="white__fill futura-book fs__6-8__px">160.00 m2</text>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 245.5416 335.1689)" class="mustard__fill futura-med fs__8-2__px">19</text>
							<text transform="matrix(0.8016 0.5978 -0.5978 0.8016 269.425 300.8657)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.8124 0.5832 -0.5832 0.8124 218.3391 365.4613)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6469 -0.7625 0.7625 0.6469 257.0391 352.6203)" class="white__fill futura-book fs__6-8__px">20.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[19]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[19])">
							<polygon class="property pb-sprite-2" points="264,286.2 234.5,263.7 177,338 206.7,360.4"/>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 212.4229 327.6405)" class="white__fill futura-book fs__6-8__px">160.00 m2</text>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 214.8844 312.3127)" class="mustard__fill futura-med fs__8-2__px">20</text>
							<text transform="matrix(0.81 0.5864 -0.5864 0.81 240.2274 277.652)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.8215 0.5702 -0.5702 0.8215 188.6042 342.5316)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.6469 -0.7625 0.7625 0.6469 225.839 329.9042)" class="white__fill futura-book fs__6-8__px">20.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[20]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[20])">
							<path class="property pb-sprite-1" d="M204.5,241.3l30,22.4L177,338l-50.8-37.7c0,0-11-10.3,0.6-20.1L204.5,241.3z"/>
							<text transform="matrix(0.3065 -0.9519 0.9519 0.3065 129.5863 296.1223)" class="white__fill futura-book fs__6-8__px">5.43</text>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 174.2001 301.6509)" class="white__fill futura-book fs__6-8__px">254.19 m2</text>
							<text transform="matrix(0.6543 -0.7562 0.7562 0.6543 176.6609 286.3225)" class="mustard__fill futura-med fs__8-2__px">21</text>
							<text transform="matrix(0.7809 0.6247 -0.6247 0.7809 208.0142 253.9248)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.7837 0.6211 -0.6211 0.7837 149.0676 312.5406)" class="white__fill futura-book fs__6-8__px">13.39</text>
							<text transform="matrix(0.6469 -0.7625 0.7625 0.6469 198.2287 305.7841)" class="white__fill futura-book fs__6-8__px">20.00</text>
							<text transform="matrix(0.8939 -0.4482 0.4482 0.8939 164.3514 269.9533)" class="white__fill futura-book fs__6-8__px">18.26</text>
							<g>
								<polygon class="mustard__dl__fill" points="205,259.7 199.3,265.6 205,271.4"/>
								<polygon class="mustard__dr__fill" points="205.1,259.7 205.1,271.4 210.8,265.6"/>
							</g>
						</g>
					<g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[21]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[21])">
							<polygon class="property pb-sprite-2" points="284.4,203.9 318.6,188.8 343.3,254.6 307.5,265.4"/>
							<g>
								<polygon class="mustard__dl__fill" points="319.1,240 313.3,246.1 319.1,252.3"/>
								<polygon class="mustard__dr__fill" points="319.1,240 319.1,252.3 324.9,246.1"/>
							</g>
							<text transform="matrix(0.3426 0.9395 -0.9395 0.3426 303.6361 208.5416)" class="white__fill futura-book fs__6-8__px">114.64 m2</text>
							<text transform="matrix(0.3426 0.9395 -0.9395 0.3426 315.8348 218.1468)" class="mustard__fill futura-med fs__8-2__px">22</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 318.1241 259.4744)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9141 -0.4054 0.4054 0.9141 297.9931 205.5116)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.3239 0.9461 -0.9461 0.3239 294.0399 223.2607)" class="white__fill futura-book fs__6-8__px">13.83</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[22]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[22])">
							<polygon class="property pb-sprite-1" points="318.6,188.8 343.3,254.6 379,244 352.9,174.1"/>
							<text transform="matrix(0.3488 0.9372 -0.9372 0.3488 339.8076 197.2491)" class="white__fill futura-book fs__6-8__px">122.70 m2</text>
							<text transform="matrix(0.3488 0.9372 -0.9372 0.3488 352.0685 206.7717)" class="mustard__fill futura-med fs__8-2__px">23</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 354.9783 249.0464)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9262 -0.377 0.377 0.9262 333.0533 189.9333)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.3564 0.9343 -0.9343 0.3564 329.3888 210.2292)" class="white__fill futura-book fs__6-8__px">14.88</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[23]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[23])">
							<polygon class="property pb-sprite-2" points="387.1,160 352.9,174.1 379,244 414.7,233.8"/>
							<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 376.3591 187.1973)" class="white__fill futura-book fs__6-8__px">130.04 m2</text>
							<text transform="matrix(0.3559 0.9345 -0.9345 0.3559 388.6923 196.6275)" class="mustard__fill futura-med fs__8-2__px">24</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 392.5923 238.2905)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9357 -0.3529 0.3529 0.9357 368.1729 175.3888)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.3506 0.9365 -0.9365 0.3506 365.9568 198.241)" class="white__fill futura-book fs__6-8__px">15.84</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[24]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[24])">
							<polygon class="property pb-sprite-1" points="387.1,160 414.7,233.8 450.5,223.3 421.7,146"/>
							<text transform="matrix(0.3402 0.9404 -0.9404 0.3402 411.6066 173.4021)" class="white__fill futura-book fs__6-8__px">136.66 m2</text>
							<text transform="matrix(0.3402 0.9404 -0.9404 0.3402 423.7799 183.0368)" class="mustard__fill futura-med fs__8-2__px">25</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 426.354 228.5183)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9356 -0.353 0.353 0.9356 400.8162 162.2641)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.3458 0.9383 -0.9383 0.3458 400.5919 186.8486)" class="white__fill futura-book fs__6-8__px">16.71</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[25]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[25])">
							<polygon class="property pb-sprite-2" points="456.4,132.3 486.2,212.9 450.5,223.3 421.7,146"/>
							<text transform="matrix(0.3403 0.9403 -0.9403 0.3403 446.4977 161.3296)" class="white__fill futura-book fs__6-8__px">142.56 m2</text>
							<text transform="matrix(0.3403 0.9403 -0.9403 0.3403 458.6722 170.9628)" class="mustard__fill futura-med fs__8-2__px">26</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 462.0312 218.1349)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9214 -0.3886 0.3886 0.9214 435.9578 148.4722)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.314 0.9494 -0.9494 0.314 436.0403 175.0423)" class="white__fill futura-book fs__6-8__px">17.50</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[26]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[26])">
							<polygon class="property pb-sprite-1" points="456.4,132.3 486.2,212.9 521.8,202.4 491.1,119.4"/>
							<text transform="matrix(0.3452 0.9385 -0.9385 0.3452 482.997 150.4173)" class="white__fill futura-book fs__6-8__px">147.74 m2</text>
							<text transform="matrix(0.3452 0.9385 -0.9385 0.3452 495.2217 159.9877)" class="mustard__fill futura-med fs__8-2__px">27</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 497.7448 206.9007)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.941 -0.3384 0.3384 0.941 470.952 135.4478)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.3235 0.9462 -0.9462 0.3235 470.9362 161.3276)" class="white__fill futura-book fs__6-8__px">18.19</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[27]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[27])">
							<polygon class="property pb-sprite-2" points="525.9,106.6 491.1,119.4 521.8,202.4 557.6,192.1"/>
							<text transform="matrix(0.3579 0.9338 -0.9338 0.3579 516.48 138.0011)" class="white__fill futura-book fs__6-8__px">152.19 m2</text>
							<text transform="matrix(0.3579 0.9338 -0.9338 0.3579 528.8331 147.4048)" class="mustard__fill futura-med fs__8-2__px">28</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 534.0479 196.6849)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9518 -0.3069 0.3069 0.9518 505.344 123.2844)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.3327 0.943 -0.943 0.3327 505.2846 150.3802)" class="white__fill futura-book fs__6-8__px">18.79</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[28]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[28])">
							<polygon class="property pb-sprite-1" points="525.9,106.6 557.6,192.1 593.2,181.6 561.4,94.5"/>
							<text transform="matrix(0.3438 0.9391 -0.9391 0.3438 553.05 127.056)" class="white__fill futura-book fs__6-8__px">155.92 m2</text>
							<text transform="matrix(0.3438 0.9391 -0.9391 0.3438 565.2576 136.6449)" class="mustard__fill futura-med fs__8-2__px">29</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 568.1232 186.8531)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9563 -0.2926 0.2926 0.9563 540.5395 110.3779)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.3539 0.9353 -0.9353 0.3539 541.1418 138.6561)" class="white__fill futura-book fs__6-8__px">19.30</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[29]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[29])">
							<polygon class="property pb-sprite-2" points="596.5,82.3 561.4,94.5 593.2,181.6 628.9,171.2"/>
							<text transform="matrix(0.3522 0.9359 -0.9359 0.3522 588.6277 116.2884)" class="white__fill futura-book fs__6-8__px">158.92 m2</text>
							<text transform="matrix(0.3522 0.9359 -0.9359 0.3522 600.9227 125.7679)" class="mustard__fill futura-med fs__8-2__px">30</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 605.0146 175.0499)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9524 -0.3047 0.3047 0.9524 575.6968 98.3371)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.3296 0.9441 -0.9441 0.3296 577.879 129.7953)" class="white__fill futura-book fs__6-8__px">19.72</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[30]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[30])">
							<polygon class="property pb-sprite-1" points="596.5,82.3 628.9,171.2 664.6,161 631.9,70.8"/>
							<text transform="matrix(0.3403 0.9403 -0.9403 0.3403 622.5354 103.6141)" class="white__fill futura-book fs__6-8__px">161.20 m2</text>
							<text transform="matrix(0.3403 0.9403 -0.9403 0.3403 634.7106 113.2491)" class="mustard__fill futura-med fs__8-2__px">31</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 639.7557 164.218)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9618 -0.2739 0.2739 0.9618 611.692 87.3687)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.3432 0.9393 -0.9393 0.3432 612.6899 116.2761)" class="white__fill futura-book fs__6-8__px">20.06</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[31]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[31])">
							<polygon class="property pb-sprite-2" points="667.4,59.8 631.9,70.8 664.6,161 700.3,150.5"/>
							<text transform="matrix(0.3308 0.9437 -0.9437 0.3308 658.5715 94.8822)" class="white__fill futura-book fs__6-8__px">162.75 m2</text>
							<text transform="matrix(0.3308 0.9437 -0.9437 0.3308 670.6467 104.6375)" class="mustard__fill futura-med fs__8-2__px">32</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 675.5425 154.5062)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9547 -0.2975 0.2975 0.9547 646.6639 76.5233)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.3476 0.9376 -0.9376 0.3476 647.5952 106.596)" class="white__fill futura-book fs__6-8__px">20.30</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[32]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[32])">
							<polygon class="property pb-sprite-1" points="667.4,59.8 700.3,150.5 736,139.9 703.1,49"/>
							<text transform="matrix(0.331 0.9436 -0.9436 0.331 693.9271 82.5368)" class="white__fill futura-book fs__6-8__px">163.57 m2</text>
							<text transform="matrix(0.331 0.9436 -0.9436 0.331 706.007 92.291)" class="mustard__fill futura-med fs__8-2__px">33</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 711.3739 143.2981)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9724 -0.2333 0.2333 0.9724 681.6843 65.4685)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.353 0.9356 -0.9356 0.353 684.2574 94.8629)" class="white__fill futura-book fs__6-8__px">20.46</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[33]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[33])">
							<polygon class="property pb-sprite-2" points="703.1,49 738.6,38.8 771.6,129.6 736,139.9"/>
							<text transform="matrix(0.3465 0.9381 -0.9381 0.3465 729.4774 73.9366)" class="white__fill futura-book fs__6-8__px">163.66 m2</text>
							<text transform="matrix(0.3465 0.9381 -0.9381 0.3465 741.7155 83.4903)" class="mustard__fill futura-med fs__8-2__px">34</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 746.8763 132.6337)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9724 -0.2333 0.2333 0.9724 717.6829 53.6909)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.3394 0.9406 -0.9406 0.3394 719.6177 85.8166)" class="white__fill futura-book fs__6-8__px">20.52</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[34]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[34])">
							<polygon class="property pb-sprite-1" points="738.6,38.8 771.6,129.6 808.1,118.9 774.8,28.9"/>
							<g>
								<polygon class="mustard__dl__fill" points="785.7,100.5 779.9,106.6 785.7,112.8"/>
								<polygon class="mustard__dr__fill" points="785.7,100.5 785.7,112.8 791.5,106.6"/>
							</g>
							<text transform="matrix(0.3465 0.9381 -0.9381 0.3465 763.1825 64.0525)" class="white__fill futura-book fs__6-8__px">164.94 m2</text>
							<text transform="matrix(0.3465 0.9381 -0.9381 0.3465 775.42 73.6074)" class="mustard__fill futura-med fs__8-2__px">35</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 783.8539 123.3408)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9724 -0.2333 0.2333 0.9724 754.1342 43.6706)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.3482 0.9374 -0.9374 0.3482 755.1068 74.7522)" class="white__fill futura-book fs__6-8__px">20.50</text>
							<text transform="matrix(0.3482 0.9374 -0.9374 0.3482 782.2098 66.0147)" class="white__fill futura-book fs__6-8__px">20.39</text>
						</g>
					</g>
					<g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[35]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[35])">
							<polygon class="property pb-sprite-2" points="816.3,17.5 835.3,68.4 905.1,41.8 889.8,0"/>
							<g>
								<polygon class="mustard__dl__fill" points="840.9,35.6 835.1,41.8 840.9,47.9"/>
								<polygon class="mustard__dr__fill" points="840.9,35.6 840.9,47.9 846.7,41.8"/>
							</g>
							<text transform="matrix(0.9366 -0.3503 0.3503 0.9366 849.5492 43.1285)" class="white__fill futura-book fs__6-8__px">168.42 m2</text>
							<text transform="matrix(0.9366 -0.3503 0.3503 0.9366 859.0543 30.8564)" class="mustard__fill futura-med fs__8-2__px">36</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 860.6387 55.0906)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.9722 -0.2342 0.2342 0.9722 845.7238 19.6562)" class="white__fill futura-book fs__6-8__px">16.28</text>
							<text transform="matrix(0.3371 0.8839 -0.9344 0.3563 825.9195 38.083)" class="white__fill futura-book fs__6-8__px">11.49</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 886.3871 17.7575)" class="white__fill futura-book fs__6-8__px">9.50</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[36]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[36])">
							<polygon class="property pb-sprite-1" points="835.3,68.5 852.9,115.8 922.5,89.3 905.1,41.9"/>
							<text transform="matrix(0.9369 -0.3496 0.3496 0.9369 864.8292 87.1497)" class="white__fill futura-book fs__6-8__px">170.51 m2</text>
							<text transform="matrix(0.9369 -0.3496 0.3496 0.9369 872.5023 74.8842)" class="mustard__fill futura-med fs__8-2__px">37</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 877.8915 102.5204)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 843.3327 84.2838)" class="white__fill futura-book fs__6-8__px">10.66</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 903.1031 62.0273)" class="white__fill futura-book fs__6-8__px">10.66</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[37]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[37])">
							<polygon class="property pb-sprite-2" points="865.9,150.8 852.9,115.6 922.5,89.2 935.4,124.4"/>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 879.2283 129.5288)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 888.4446 117.0387)" class="mustard__fill futura-med fs__8-2__px">38</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 891.2784 138.6544)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 859.0001 127.0575)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 919.8205 105.1437)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[38]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[38])">
							<polygon class="property pb-sprite-1" points="865.9,150.8 935.4,124.4 948.7,159.7 878.9,186.3"/>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 932.4852 140.604)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 892.5961 164.4835)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 901.8125 151.9924)" class="mustard__fill futura-med fs__8-2__px">39</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 904.6472 173.6089)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 872.3684 162.0112)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[39]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[39])">
							<polygon class="property pb-sprite-2" points="891.9,221.5 878.9,186.3 948.7,159.7 961.5,194.9"/>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 945.7986 175.0518)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 906.0352 200.5574)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 915.2507 188.0666)" class="mustard__fill futura-med fs__8-2__px">40</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 918.085 209.6817)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 885.8069 198.0847)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[40]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[40])">
							<polygon class="property pb-sprite-1" points="961.5,194.9 891.9,221.5 905.1,256.8 974.5,230.4"/>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 958.9147 210.2595)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 919.6138 234.9489)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 928.8307 222.4576)" class="mustard__fill futura-med fs__8-2__px">41</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 931.6646 244.0739)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 899.3856 232.4773)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[41]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[41])">
							<polygon class="property pb-sprite-2" points="918,292.2 905.1,256.8 974.5,230.4 987.6,265.4"/>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 972.1724 245.5888)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 933.292 269.4941)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 942.5081 257.0021)" class="mustard__fill futura-med fs__8-2__px">42</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 945.3418 278.618)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 913.0637 267.0223)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[42]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[42])">
							<polygon class="property pb-sprite-1" points="987.6,265.4 918,292.2 931.2,327.5 1000.7,300.9"/>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 984.0466 280.3054)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 945.9055 305.6516)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 955.1216 293.1606)" class="mustard__fill futura-med fs__8-2__px">43</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 957.9556 314.7764)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 925.6779 303.1791)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[43]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[43])">
							<polygon class="property pb-sprite-2" points="944.1,362.8 931.2,327.5 1000.7,300.9 1013.7,336"/>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 996.1102 315.2539)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 958.4439 342.3893)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 967.6603 329.8993)" class="mustard__fill futura-med fs__8-2__px">44</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 970.4936 351.5137)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 938.2162 339.9167)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[44]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[44])">
							<polygon class="property pb-sprite-1" points="1013.7,336 944.1,362.8 957.3,398 1027,371.6"/>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1009.6614 350.7419)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 971.9944 376.709)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 981.2112 364.2189)" class="mustard__fill futura-med fs__8-2__px">45</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 984.0446 385.8352)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 951.7675 374.2373)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[45]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[45])">
							<polygon class="property pb-sprite-2" points="970.2,433.4 957.3,398 1027,371.6 1039.9,406.7"/>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1022.4531 385.835)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 984.4614 412.7895)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 993.6778 400.2984)" class="mustard__fill futura-med fs__8-2__px">46</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 993.678 421.8344)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 964.2354 410.3172)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[46]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[46])">
							<polygon class="property pb-sprite-1" points="1039.8,406.8 970.2,433.5 983.5,468.8 1052.9,442.2"/>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1035.6646 419.9193)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 997.5408 447.0771)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1006.7577 434.5858)" class="mustard__fill futura-med fs__8-2__px">47</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 1006.7572 456.1207)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 977.3137 444.6049)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[47]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[47])">
							<polygon class="property pb-sprite-2" points="996.4,503.9 983.5,468.7 1052.9,442.1 1066,477.2"/>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1048.4838 455.42)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1011.5375 481.6703)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1020.7538 469.1803)" class="mustard__fill futura-med fs__8-2__px">48</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 1020.7534 490.7144)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 991.3099 479.1989)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[48]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[48])">
							<polygon class="property pb-sprite-1" points="1066,477.2 996.4,503.9 1009.7,539.5 1079,512.8"/>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1061.7822 491.8186)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1024.5819 518.1443)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1033.7982 505.6543)" class="mustard__fill futura-med fs__8-2__px">49</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 1033.7985 527.1891)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1004.3538 515.6726)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[49]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[49])">
							<polygon class="property pb-sprite-2" points="1022.5,574.7 1009.7,539.5 1079,512.8 1092,547.9"/>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1074.8899 526.7985)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1037.2465 551.6302)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1046.4633 539.14)" class="mustard__fill futura-med fs__8-2__px">50</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 1046.4625 560.6743)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1017.0205 549.1578)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[50]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[50])">
							<polygon class="property pb-sprite-1" points="1092,547.9 1022.5,574.7 1035.7,610.1 1105.2,583.3"/>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1087.6819 561.2947)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1050.9246 587.6641)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1060.1411 575.173)" class="mustard__fill futura-med fs__8-2__px">51</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 1060.1406 596.7087)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1030.6981 585.1924)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[51]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[51])">
							<polygon class="property pb-sprite-2" points="1048.5,645.3 1035.7,610.1 1105.2,583.3 1118.1,618.4"/>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1102.4988 597.9148)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1063.8422 622.7949)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1073.059 610.3047)" class="mustard__fill futura-med fs__8-2__px">52</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 1073.0587 631.8405)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1043.6157 620.3221)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[52]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[52])">
							<polygon class="property pb-sprite-1" points="1118.1,618.4 1048.5,645.3 1061.8,680.7 1131.3,654"/>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1113.6448 631.5546)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1076.1268 658.0658)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1085.3433 645.5747)" class="mustard__fill futura-med fs__8-2__px">53</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 1085.343 667.1098)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1055.9008 655.5938)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[53]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[53])">
							<polygon class="property pb-sprite-2" points="1074.8,715.8 1061.8,680.7 1131.3,654 1144.2,689.2"/>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1128.6287 669.0924)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1089.8046 693.5275)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1099.0206 681.0355)" class="mustard__fill futura-med fs__8-2__px">54</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 1099.0214 702.5712)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1069.5776 691.0537)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[54]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[54])">
							<polygon class="property pb-sprite-1" points="1144.2,689.2 1074.8,715.8 1088,751.3 1157.4,724.7"/>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1140.4082 702.571)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1103.0385 729.3428)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1112.2545 716.8508)" class="mustard__fill futura-med fs__8-2__px">55</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 1112.2544 738.3856)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1082.8114 726.8687)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[55]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[55])">
							<polygon class="property pb-sprite-2" points="1100.8,786.5 1088,751.3 1157.4,724.7 1170.4,759.7"/>
							<g>
								<polygon class="mustard__dl__fill" points="1109.5,758.2 1103.8,764.3 1109.5,770.5"/>
								<polygon class="mustard__dr__fill" points="1109.6,758.2 1109.6,770.5 1115.3,764.3"/>
							</g>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1153.2177 738.3859)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1118.14 763.3577)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1127.3561 750.8657)" class="mustard__fill futura-med fs__8-2__px">56</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 1124.7924 774.1006)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1095.3494 762.5832)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[56]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[56])">
							<polygon class="property pb-sprite-1" points="1170.4,759.7 1100.8,786.5 1114.1,821.9 1183.6,795.2"/>
							<g>
								<polygon class="mustard__dl__fill" points="1122.7,792.7 1116.9,798.8 1122.7,804.9"/>
								<polygon class="mustard__dr__fill" points="1122.7,792.7 1122.7,804.9 1128.5,798.8"/>
							</g>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1167.1871 774.7762)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1130.6143 798.3116)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1139.8312 785.8204)" class="mustard__fill futura-med fs__8-2__px">57</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 1137.2668 809.0547)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1107.8236 797.5381)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[57]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[57])">
							<polygon class="property pb-sprite-2" points="1126.9,857.1 1114.1,821.9 1183.6,795.2 1196.4,830.4"/>
							<g>
								<polygon class="mustard__dl__fill" points="1135.6,827.9 1129.9,834 1135.6,840.2"/>
								<polygon class="mustard__dr__fill" points="1135.7,827.9 1135.7,840.2 1141.4,834"/>
							</g>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1179.5355 809.0549)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1144.6719 833.6464)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1153.8881 821.1544)" class="mustard__fill futura-med fs__8-2__px">58</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 1151.3247 844.389)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1121.8817 832.8715)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[58]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[58])">
							<polygon class="property pb-sprite-1" points="1196.4,830.4 1126.9,857.1 1140.2,892.5 1209.7,865.9"/>
							<g>
								<polygon class="mustard__dl__fill" points="1148.8,862.7 1143.1,868.9 1148.8,875"/>
								<polygon class="mustard__dr__fill" points="1148.9,862.7 1148.9,875 1154.6,868.9"/>
							</g>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1192.6068 843.779)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1157.9695 868.8932)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1167.1868 856.4029)" class="mustard__fill futura-med fs__8-2__px">59</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 1164.6223 879.6362)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1135.1782 868.1191)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[59]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[59])">
							<polygon class="property pb-sprite-2" points="1153.1,927.7 1140.2,892.5 1209.7,865.9 1222.6,901"/>
							<g>
								<polygon class="mustard__dl__fill" points="1161.6,898.8 1155.9,904.9 1161.6,911.1"/>
								<polygon class="mustard__dr__fill" points="1161.7,898.8 1161.7,911.1 1167.4,904.9"/>
							</g>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1206.6768 879.6367)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1170.3177 904.6078)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1179.5342 892.1168)" class="mustard__fill futura-med fs__8-2__px">60</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 1176.9708 915.3514)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1147.5272 903.8325)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[60]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[60])">
							<polygon class="property pb-sprite-1" points="1222.6,901 1153.1,927.7 1166.3,963.1 1235.8,936.5"/>
							<g>
								<polygon class="mustard__dl__fill" points="1174.9,934.1 1169.2,940.2 1174.9,946.4"/>
								<polygon class="mustard__dr__fill" points="1175,934.1 1175,946.4 1180.7,940.2"/>
							</g>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1219.1249 915.351)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1183.3887 940.3116)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1192.6052 927.8195)" class="mustard__fill futura-med fs__8-2__px">61</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 1190.041 951.0544)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1160.5984 938.3069)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[61]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[61])">
							<polygon class="property pb-sprite-2" points="1166.3,963.1 1235.8,936.5 1248.7,971.4 1179.3,998.5"/>
							<g>
								<polygon class="mustard__dl__fill" points="1186.6,968.9 1180.8,975.1 1186.6,981.2"/>
								<polygon class="mustard__dr__fill" points="1186.6,968.9 1186.6,981.2 1192.3,975.1"/>
							</g>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1233.0538 949.8453)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1195.926 973.3646)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.9283 -0.3719 0.3719 0.9283 1205.1428 960.8744)" class="mustard__fill futura-med fs__8-2__px">62</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 1206.105 985.2486)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3563 0.9344 -0.9344 0.3563 1173.1359 972.5908)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
					</g>
					<g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[62]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[62])">
							<polygon class="property pb-sprite-2" points="802.8,664.5 825.5,743.7 860.9,733.4 838.5,654"/>
							<g>
								<polygon class="mustard__dl__fill" points="838.5,715.8 832.7,721.9 838.5,728.1"/>
								<polygon class="mustard__dr__fill" points="838.5,715.8 838.5,728.1 844.3,721.9"/>
							</g>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 823.2554 680.5395)" class="white__fill futura-book fs__6-8__px">140.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 834.8411 690.8718)" class="mustard__fill futura-med fs__8-2__px">63</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 816.1259 669.0901)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 837.111 737.5845)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 813.5241 693.0649)" class="white__fill futura-book fs__6-8__px">17.50</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[63]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[63])">
							<polygon class="property pb-sprite-1" points="874.1,643.5 896.6,723 860.9,733.4 838.5,654"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 860.4836 672.2894)" class="white__fill futura-book fs__6-8__px">140.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 872.0687 682.623)" class="mustard__fill futura-med fs__8-2__px">64</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 851.9312 658.0654)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 872.8253 728.0571)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 849.3284 683.2546)" class="white__fill futura-book fs__6-8__px">17.50</text>
							<g>
								<polygon class="mustard__dl__fill" points="874.9,705.3 869.2,711.4 874.9,717.6"/>
								<polygon class="mustard__dr__fill" points="875,705.3 875,717.6 880.7,711.4"/>
							</g>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[64]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[64])">
							<polygon class="property pb-sprite-2" points="874.1,643.5 909.8,633.2 932.3,712.5 896.6,723"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 897.4276 661.9448)" class="white__fill futura-book fs__6-8__px">140.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 909.0138 672.277)" class="mustard__fill futura-med fs__8-2__px">65</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 887.7737 648.0703)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 907.7743 716.8506)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 885.8075 675.1125)" class="white__fill futura-book fs__6-8__px">17.50</text>
							<g>
								<polygon class="mustard__dl__fill" points="908.8,694.9 903,701 908.8,707.2"/>
								<polygon class="mustard__dr__fill" points="908.8,694.9 908.8,707.2 914.6,701"/>
							</g>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[65]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[65])">
							<polygon class="property pb-sprite-1" points="945.5,622.6 968.1,702.3 932.3,712.5 909.8,633.2"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 933.7877 651.1052)" class="white__fill futura-book fs__6-8__px">140.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 945.3748 661.4371)" class="mustard__fill futura-med fs__8-2__px">66</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 924.134 637.2315)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 944.1347 706.0107)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 922.1682 664.2728)" class="white__fill futura-book fs__6-8__px">17.50</text>
							<g>
								<polygon class="mustard__dl__fill" points="946.6,685.1 940.9,691.3 946.6,697.4"/>
								<polygon class="mustard__dr__fill" points="946.7,685.1 946.7,697.4 952.4,691.3"/>
							</g>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[66]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[66])">
							<polygon class="property pb-sprite-2" points="989.6,610.1 945.5,622.6 968.1,702.3 1018.5,687.4"/>
							<g>
								<polygon class="mustard__dl__fill" points="987.8,672.4 982.1,678.6 987.8,684.7"/>
								<polygon class="mustard__dr__fill" points="987.9,672.4 987.9,684.7 993.6,678.6"/>
							</g>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 971.5026 638.3224)" class="white__fill futura-book fs__6-8__px">184.67 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 983.0885 648.6537)" class="mustard__fill futura-med fs__8-2__px">67</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 962.5084 625.745)" class="white__fill futura-book fs__6-8__px">9.86</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 984.2549 695.5895)" class="white__fill futura-book fs__6-8__px">11.25</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 957.4142 654.5577)" class="white__fill futura-book fs__6-8__px">17.50</text>
							<text transform="matrix(0.3232 0.9463 -0.9463 0.3232 994.3995 642.1694)" class="white__fill futura-book fs__6-8__px">17.56</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[67]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[67])">
							<polygon class="property pb-sprite-2" points="741.6,603.4 777.3,593.3 797.7,665.9 761.5,676.5"/>
							<g>
								<polygon class="mustard__dl__fill" points="763.9,607.7 758.1,613.8 763.9,620"/>
								<polygon class="mustard__dr__fill" points="763.9,607.7 763.9,620 769.7,613.8"/>
							</g>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 763.5964 622.8331)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 775.1826 633.1653)" class="mustard__fill futura-med fs__8-2__px">68</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 755.4234 606.1827)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 772.861 670.431)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 750.6921 628.9584)" class="white__fill futura-book fs__6-8__px">16.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[68]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[68])">
							<polygon class="property pb-sprite-1" points="813,582.7 833.8,655.6 797.7,665.9 777.3,593.3"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 799.5789 607.9199)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 811.1664 618.2528)" class="mustard__fill futura-med fs__8-2__px">69</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 790.1984 595.9019)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 809.6461 659.4793)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 787.8537 620.9164)" class="white__fill futura-book fs__6-8__px">16.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[69]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[69])">
							<polygon class="property pb-sprite-2" points="813,582.7 833.8,655.6 869.2,644.9 848.9,572.4"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 835.3021 598.3185)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 846.8895 608.6514)" class="mustard__fill futura-med fs__8-2__px">70</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 825.9211 585.6314)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 845.3688 649.2087)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 823.5765 611.3149)" class="white__fill futura-book fs__6-8__px">16.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[70]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[70])">
							<polygon class="property pb-sprite-1" points="884.3,561.8 905.1,634.6 869.2,644.9 848.9,572.4"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 871.1068 586.9358)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 882.6927 597.267)" class="mustard__fill futura-med fs__8-2__px">71</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 861.724 574.9161)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 881.8424 638.4939)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 859.3817 599.9312)" class="white__fill futura-book fs__6-8__px">16.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[71]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[71])">
							<polygon class="property pb-sprite-2" points="884.3,561.8 905.1,634.6 940.7,624 920.1,551.4"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 906.2411 576.2531)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 917.8264 586.5856)" class="mustard__fill futura-med fs__8-2__px">72</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 897.5286 564.9056)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 917.6469 627.8127)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 894.5141 589.2484)" class="white__fill futura-book fs__6-8__px">16.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[72]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[72])">
							<polygon class="property pb-sprite-1" points="920.1,551.4 963.4,538.9 989.6,610.1 940.7,624"/>
							<g>
								<polygon class="mustard__dl__fill" points="946.8,553.7 941.1,559.8 946.8,566"/>
								<polygon class="mustard__dr__fill" points="946.9,553.7 946.9,566 952.6,559.8"/>
							</g>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 945.2393 570.1436)" class="white__fill futura-book fs__6-8__px">164.95 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 956.8265 580.4775)" class="mustard__fill futura-med fs__8-2__px">73</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 937.5452 553.0927)" class="white__fill futura-book fs__6-8__px">9.67</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 930.5074 579.4445)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3032 0.9529 -0.9529 0.3032 968.5764 571.6068)" class="white__fill futura-book fs__6-8__px">16.05</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 956.0742 616.9471)" class="white__fill futura-book fs__6-8__px">10.95</text>
						</g>
					</g>
					<g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[73]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[73])">
							<polygon class="property pb-sprite-1" points="667.3,579.8 694.5,572.2 672.1,492.6 636,502.9 654.5,567.9"/>
							<g>
								<polygon class="mustard__dl__fill" points="671.6,552.9 665.9,559.1 671.6,565.2"/>
								<polygon class="mustard__dr__fill" points="671.7,552.9 671.7,565.2 677.4,559.1"/>
							</g>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 658.5638 518.4766)" class="white__fill futura-book fs__6-8__px">136.78m2</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 649.1835 506.4594)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 674.522 575.5818)" class="white__fill futura-book fs__6-8__px">6.07</text>
							<text transform="matrix(0.7024 0.7117 -0.7117 0.7024 657.2455 567.9163)" class="white__fill futura-book fs__6-8__px">3.86</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 646.1678 530.1324)" class="white__fill futura-book fs__6-8__px">14.16</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 670.1507 528.8096)" class="mustard__fill futura-med fs__8-2__px">74</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[74]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[74])">
							<polygon class="property pb-sprite-2" points="694.5,572.2 672.1,492.6 707.3,482 729.8,561.8"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 694.6033 508.5084)" class="white__fill futura-book fs__6-8__px">140.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 706.1899 518.8405)" class="mustard__fill futura-med fs__8-2__px">75</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 685.2234 496.4899)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 706.0118 566.8616)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 682.8773 521.5029)" class="white__fill futura-book fs__6-8__px">17.50</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[75]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[75])">
							<polygon class="property pb-sprite-1" points="729.8,561.8 707.3,482 742.9,472 765.7,551"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 730.3964 498.2587)" class="white__fill futura-book fs__6-8__px">140.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 741.9825 508.5909)" class="mustard__fill futura-med fs__8-2__px">76</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 721.0156 486.2401)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 741.134 555.9417)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 718.6696 511.2545)" class="white__fill futura-book fs__6-8__px">17.50</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[76]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[76])">
							<polygon class="property pb-sprite-2" points="765.7,551 742.9,472 779,461.4 801.3,540.8"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 765.5304 487.6179)" class="white__fill futura-book fs__6-8__px">140.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 777.1173 497.9509)" class="mustard__fill futura-med fs__8-2__px">77</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 756.1495 475.6012)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 776.938 545.3013)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 753.8047 500.6136)" class="white__fill futura-book fs__6-8__px">17.50</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[77]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[77])">
							<polygon class="property pb-sprite-1" points="801.3,540.8 779,461.4 814.8,451 837.1,530.3"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 801.7361 477.2193)" class="white__fill futura-book fs__6-8__px">140.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 813.3231 487.5523)" class="mustard__fill futura-med fs__8-2__px">78</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 792.3551 465.2021)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 813.1436 534.9022)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 790.0109 490.2155)" class="white__fill futura-book fs__6-8__px">17.50</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[78]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[78])">
							<polygon class="property pb-sprite-2" points="814.8,451 850.3,440.5 872.8,519.6 837.1,530.3"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 837.5409 466.3723)" class="white__fill futura-book fs__6-8__px">140.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 849.1264 476.7058)" class="mustard__fill futura-med fs__8-2__px">79</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 828.1591 454.3545)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 848.9467 524.7254)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 825.8143 479.3682)" class="white__fill futura-book fs__6-8__px">17.50</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[79]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[79])">
							<polygon class="property pb-sprite-1" points="850.3,440.5 872.8,519.6 908.4,509.6 886,430.1"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 873.8879 456.1223)" class="white__fill futura-book fs__6-8__px">140.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 885.4747 466.4564)" class="mustard__fill futura-med fs__8-2__px">80</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 864.5059 444.1058)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 885.2945 514.4765)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 862.162 469.1188)" class="white__fill futura-book fs__6-8__px">17.50</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[80]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[80])">
							<polygon class="property pb-sprite-2" points="908.4,509.6 886,430.1 919.4,420.3 948.1,498"/>
							<g>
								<polygon class="mustard__dl__fill" points="923.2,481.5 917.5,487.6 923.2,493.8"/>
								<polygon class="mustard__dr__fill" points="923.3,481.5 923.3,493.8 929,487.6"/>
							</g>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 905.1237 447.4419)" class="white__fill futura-book fs__6-8__px">143.42 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 916.7092 457.7733)" class="mustard__fill futura-med fs__8-2__px">81</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 898.3314 433.3816)" class="white__fill futura-book fs__6-8__px">7.50</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 923.2476 503.49)" class="white__fill futura-book fs__6-8__px">8.89</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 896.7474 460.4362)" class="white__fill futura-book fs__6-8__px">17.50</text>
							<text transform="matrix(0.3581 0.9337 -0.9337 0.3581 924.1148 451.1136)" class="white__fill futura-book fs__6-8__px">17.56</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[81]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[81])">
							<polygon class="property pb-sprite-1" points="572,443.3 589.8,506 598.6,513.9 628.3,505.6 607.6,432.6"/>
							<g>
								<polygon class="mustard__dl__fill" points="593.6,446.5 587.9,452.7 593.6,458.8"/>
								<polygon class="mustard__dr__fill" points="593.7,446.5 593.7,458.8 599.4,452.7"/>
							</g>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 593.4732 461.7656)" class="white__fill futura-book fs__6-8__px">126.46 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 605.0607 472.0985)" class="mustard__fill futura-med fs__8-2__px">82</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 585.4348 445.7266)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 581.0775 466.0493)" class="white__fill futura-book fs__6-8__px">13.75</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 608.1355 508.7474)" class="white__fill futura-book fs__6-8__px">7.59</text>
							<text transform="matrix(0.7543 0.6566 -0.6566 0.7543 590.461 504.3795)" class="white__fill futura-book fs__6-8__px">2.63</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[82]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[82])">
							<polygon class="property pb-sprite-2" points="643.3,422.4 607.6,432.6 628.3,505.6 663.9,495.1"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 630.2241 447.7216)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 641.8102 458.0538)" class="mustard__fill futura-med fs__8-2__px">83</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 620.8444 435.7045)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 618.4989 460.7168)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 639.5243 498.7262)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[83]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[83])">
							<polygon class="property pb-sprite-1" points="679.1,411.7 699.7,484.5 663.9,495.1 643.3,422.4"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 666.1602 437.0271)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 677.7482 447.3588)" class="mustard__fill futura-med fs__8-2__px">84</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 656.7808 425.0088)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 654.4357 450.0235)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 675.4615 488.0313)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[84]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[84])">
							<polygon class="property pb-sprite-2" points="714.8,401.5 679.1,411.7 699.7,484.5 735.3,474.2"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 701.6196 426.3997)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 713.206 436.7309)" class="mustard__fill futura-med fs__8-2__px">85</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 692.2404 415.0527)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 689.893 439.395)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 711.3742 478.1299)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[85]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[85])">
							<polygon class="property pb-sprite-1" points="750.4,391.1 771.1,463.9 735.3,474.2 714.8,401.5"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 737.9144 416.5676)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 749.5009 426.9007)" class="mustard__fill futura-med fs__8-2__px">86</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 728.5345 404.5499)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 726.189 429.5631)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 747.215 467.5714)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[86]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[86])">
							<polygon class="property pb-sprite-2" points="786.1,380.7 750.4,391.1 771.1,463.9 806.6,453.4"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 773.3176 406.2126)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 784.9023 416.5432)" class="mustard__fill futura-med fs__8-2__px">87</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 763.9382 394.1942)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 761.591 419.207)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 782.6182 457.2159)" class="white__fill futura-book fs__6-8__px">8.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[111]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[111])">
							<polygon class="property pb-sprite-1" points="786.1,380.7 821.8,370.3 842.6,443.1 806.6,453.4"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 809.3632 395.5213)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 820.9495 405.8555)" class="mustard__fill futura-med fs__8-2__px">88</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 799.9847 383.5045)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 818.6643 446.5253)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 797.6372 408.5183)" class="white__fill futura-book fs__6-8__px">16.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[87]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[87])">
							<polygon class="property pb-sprite-2" points="821.8,370.3 842.6,443.1 878,432.4 857.4,360.1"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 845.4575 385.1008)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 857.0432 395.4331)" class="mustard__fill futura-med fs__8-2__px">89</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 836.0786 373.0826)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 854.759 436.1042)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 833.731 398.0962)" class="white__fill futura-book fs__6-8__px">16.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[88]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[88])">
							<polygon class="property pb-sprite-1" points="893.2,349.4 857.4,360.1 878,432.4 919.4,420.3"/>
							<g>
								<polygon class="mustard__dl__fill" points="880.1,362.8 874.3,368.9 880.1,375.1"/>
								<polygon class="mustard__dr__fill" points="880.1,362.8 880.1,375.1 885.8,368.9"/>
							</g>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 878.7332 378.5237)" class="white__fill futura-book fs__6-8__px">138.18 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 890.3203 388.8556)" class="mustard__fill futura-med fs__8-2__px">90</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 870.0249 363.1538)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 890.7536 426.7533)" class="white__fill futura-book fs__6-8__px">9.27</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 867.6785 388.1682)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3567 0.9342 -0.9342 0.3567 898.332 379.5499)" class="white__fill futura-book fs__6-8__px">16.05</text>
						</g>
					</g>
					<g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[89]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[89])">
							<polygon class="property pb-sprite-1" points="472.6,340.8 519.1,327.4 541.8,406.5 495.3,420.1"/>
							<g>
								<polygon class="mustard__dl__fill" points="514.9,391.1 509.1,397.2 514.9,403.4"/>
								<polygon class="mustard__dr__fill" points="514.9,391.1 514.9,403.4 520.7,397.2"/>
							</g>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 497.2009 356.9367)" class="white__fill futura-book fs__6-8__px">182.32 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 508.7885 367.2685)" class="mustard__fill futura-med fs__8-2__px">91</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 489.0885 343.4862)" class="white__fill futura-book fs__6-8__px">10.42</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 510.7806 413.4581)" class="white__fill futura-book fs__6-8__px">10.42</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 484.1351 370.6018)" class="white__fill futura-book fs__6-8__px">17.50</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[90]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[90])">
							<polygon class="property pb-sprite-2" points="559.4,315.3 581.7,394.9 541.8,406.5 519.1,327.4"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 542.5348 343.9672)" class="white__fill futura-book fs__6-8__px">157.50 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 554.121 354.2994)" class="mustard__fill futura-med fs__8-2__px">92</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 535.1627 331.2783)" class="white__fill futura-book fs__6-8__px">9.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 555.951 399.6393)" class="white__fill futura-book fs__6-8__px">9.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 529.4686 355.6225)" class="white__fill futura-book fs__6-8__px">17.50</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[91]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[91])">
							<polygon class="property pb-sprite-1" points="581.7,394.9 622.1,383.1 599.6,303.9 559.4,315.3"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 582.983 332.0867)" class="white__fill futura-book fs__6-8__px">157.50 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 594.5687 342.4191)" class="mustard__fill futura-med fs__8-2__px">93</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 574.9414 320.0681)" class="white__fill futura-book fs__6-8__px">9.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 595.7293 388.4292)" class="white__fill futura-book fs__6-8__px">9.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 570.5864 345.0819)" class="white__fill futura-book fs__6-8__px">17.50</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[92]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[92])">
							<polygon class="property pb-sprite-2" points="599.6,303.9 635.1,293.3 657.7,372.7 622.1,383.1"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 622.5953 320.0703)" class="white__fill futura-book fs__6-8__px">140.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 634.1837 330.4028)" class="mustard__fill futura-med fs__8-2__px">94</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 613.2145 308.0519)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 634.0024 376.413)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 610.8704 333.0663)" class="white__fill futura-book fs__6-8__px">17.50</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[93]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[93])">
							<polygon class="property pb-sprite-1" points="635.1,293.3 670.9,283.1 693.4,362.3 657.7,372.7"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 658.394 310.2294)" class="white__fill futura-book fs__6-8__px">140.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 669.9798 320.5618)" class="mustard__fill futura-med fs__8-2__px">95</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 649.0122 298.212)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 669.8006 366.5729)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 646.6679 323.2233)" class="white__fill futura-book fs__6-8__px">17.50</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[94]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[94])">
							<polygon class="property pb-sprite-2" points="693.4,362.3 670.9,283.1 706.4,272.4 729,352.1"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 693.9415 299.8662)" class="white__fill futura-book fs__6-8__px">140.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 705.5264 310.1989)" class="mustard__fill futura-med fs__8-2__px">96</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 684.559 287.8487)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 705.3474 356.2097)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 682.2162 312.8623)" class="white__fill futura-book fs__6-8__px">17.50</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[95]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[95])">
							<polygon class="property pb-sprite-1" points="742.1,261.8 764.8,341.6 729,352.1 706.4,272.4"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 729.2939 288.7409)" class="white__fill futura-book fs__6-8__px">140.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 740.8814 299.0738)" class="mustard__fill futura-med fs__8-2__px">97</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 719.9117 276.7233)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 740.7 345.7538)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 718.6703 303.2375)" class="white__fill futura-book fs__6-8__px">17.50</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[96]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[96])">
							<polygon class="property pb-sprite-2" points="742.1,261.8 778,251.6 800.3,331.1 764.8,341.6"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 763.6899 280.5031)" class="white__fill futura-book fs__6-8__px">140.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 775.2764 290.8362)" class="mustard__fill futura-med fs__8-2__px">98</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 755.6478 265.8057)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 777.1064 335.5074)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 753.3046 290.8191)" class="white__fill futura-book fs__6-8__px">17.50</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[97]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[97])">
							<polygon class="property pb-sprite-1" points="813.6,241 836.2,320.7 800.3,331.1 778,251.6"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 800.1555 271.1602)" class="white__fill futura-book fs__6-8__px">140.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 811.7423 281.4911)" class="mustard__fill futura-med fs__8-2__px">99</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 791.7348 255.6002)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 811.8524 325.301)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 788.7208 281.2821)" class="white__fill futura-book fs__6-8__px">17.50</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[98]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[98])">
							<polygon class="property pb-sprite-2" points="813.6,241 849.5,231 877.9,308.8 836.2,320.7"/>
							<g>
								<polygon class="mustard__dl__fill" points="848.6,290.1 842.9,296.2 848.6,302.4"/>
								<polygon class="mustard__dr__fill" points="848.7,290.1 848.7,302.4 854.4,296.2"/>
							</g>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 834.2203 257.5168)" class="white__fill futura-book fs__6-8__px">152.17 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 845.8077 267.8497)" class="mustard__fill futura-med fs__8-2__px">100</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 826.3541 244.9121)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 850.2824 314.6144)" class="white__fill futura-book fs__6-8__px">9.39</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 824.012 269.9252)" class="white__fill futura-book fs__6-8__px">17.50</text>
							<text transform="matrix(0.3287 0.9444 -0.9444 0.3287 855.0999 263.2753)" class="white__fill futura-book fs__6-8__px">17.56</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[99]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[99])">
							<polygon class="property pb-sprite-2" points="394.9,284.7 430.5,274.4 451.3,347.5 420.7,356 413.4,349.4"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 415.2057 304.2209)" class="white__fill futura-book fs__6-8__px">127.06 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 425.4515 311.8725)" class="mustard__fill futura-med fs__8-2__px">101</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 409.1767 288.1821)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 432.5863 350.4395)" class="white__fill futura-book fs__6-8__px">6.86</text>
							<text transform="matrix(0.7661 0.6427 -0.6427 0.7661 414.0222 347.1772)" class="white__fill futura-book fs__6-8__px">2.01</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 404.1494 306.4943)" class="white__fill futura-book fs__6-8__px">14.35</text>
							<g>
								<polygon class="mustard__dl__fill" points="417.5,288.3 411.8,294.5 417.5,300.6"/>
								<polygon class="mustard__dr__fill" points="417.6,288.3 417.6,300.6 423.3,294.5"/>
							</g>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[100]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[100])">
							<polygon class="property pb-sprite-1" points="430.5,274.4 451.3,347.5 486.7,336.7 466.3,264.2"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 454.0051 288.9772)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 464.2514 296.6306)" class="mustard__fill futura-med fs__8-2__px">102</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 444.6266 277.6302)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 464.6857 339.8889)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 442.2798 301.9739)" class="white__fill futura-book fs__6-8__px">16.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[101]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[101])">
							<polygon class="property pb-sprite-2" points="466.3,264.2 501.8,253.9 522.5,326.2 486.7,336.7"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 489.1426 278.0735)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 500.7279 288.406)" class="mustard__fill futura-med fs__8-2__px">103</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 479.7627 266.7266)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 499.8214 328.9843)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 477.4164 291.0677)" class="white__fill futura-book fs__6-8__px">16.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[102]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[102])">
							<polygon class="property pb-sprite-1" points="537.6,243.2 501.8,253.9 522.5,326.2 558.4,316"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 524.6657 267.9784)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 536.2529 278.3123)" class="mustard__fill futura-med fs__8-2__px">104</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 515.2875 256.6318)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 535.3466 318.8905)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 512.9413 280.9752)" class="white__fill futura-book fs__6-8__px">16.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[103]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[103])">
							<polygon class="property pb-sprite-2" points="537.6,243.2 573.4,233 593.6,305.6 558.4,316"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 560.7231 257.4231)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 572.3103 267.7571)" class="mustard__fill futura-med fs__8-2__px">105</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 551.3445 246.0762)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 571.4031 308.3351)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 548.9985 270.4204)" class="white__fill futura-book fs__6-8__px">16.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[104]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[104])">
							<polygon class="property pb-sprite-1" points="608.8,222.3 629.7,295.2 593.6,305.6 573.4,233"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 596.4537 247.0352)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 608.0411 257.368)" class="mustard__fill futura-med fs__8-2__px">106</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 587.0762 235.6863)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 607.1348 297.9451)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 584.7284 260.0303)" class="white__fill futura-book fs__6-8__px">16.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[105]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[105])">
							<polygon class="property pb-sprite-2" points="608.8,222.3 644.7,212 665.3,284.7 629.7,295.2"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 632.2582 236.3451)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 643.8452 246.6781)" class="mustard__fill futura-med fs__8-2__px">107</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 622.8802 224.9982)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 642.939 287.2559)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 620.5319 249.3412)" class="white__fill futura-book fs__6-8__px">16.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[106]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[106])">
							<polygon class="property pb-sprite-1" points="644.7,212 665.3,284.7 701,274.3 680.4,201.7"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 667.6115 225.899)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 679.1979 236.2301)" class="mustard__fill futura-med fs__8-2__px">108</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 658.2334 214.5513)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 678.2917 276.8092)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 655.8851 238.8934)" class="white__fill futura-book fs__6-8__px">16.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[107]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[107])">
							<polygon class="property pb-sprite-2" points="680.4,201.7 715.9,191.2 736.2,263.6 701,274.3"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 702.7593 215.7838)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 714.3462 226.1147)" class="mustard__fill futura-med fs__8-2__px">109</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 693.3819 204.4356)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 713.4404 266.6944)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 691.0337 228.7785)" class="white__fill futura-book fs__6-8__px">16.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[108]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[108])">
							<polygon class="property pb-sprite-1" points="751.8,180.6 772.5,253.7 736.2,263.6 715.9,191.2"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 739.3009 205.0115)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 750.8871 215.3437)" class="mustard__fill futura-med fs__8-2__px">110</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 729.9229 193.6638)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 749.5006 256.6328)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 727.5754 218.0063)" class="white__fill futura-book fs__6-8__px">16.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[109]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[109])">
							<polygon class="property pb-sprite-2" points="751.8,180.6 787.3,170.3 808,242.7 772.5,253.7"/>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 775.0143 194.9414)" class="white__fill futura-book fs__6-8__px">128.00 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 786.6012 205.2744)" class="mustard__fill futura-med fs__8-2__px">111</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 765.6376 183.5947)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 785.2155 246.5626)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 763.2891 207.9374)" class="white__fill futura-book fs__6-8__px">16.00</text>
						</g>
						<g class="property__active" ng-class="taiga.inmovablesClassList[110]" ng-click="taiga.setLeadProperty(taiga.inmovablesData.inmovables[110])">
							<polygon class="property pb-sprite-1" points="823.1,159.8 849.5,231 808,242.7 787.3,170.3"/>
							<g>
								<polygon class="mustard__dl__fill" points="811.8,174.8 806.1,181 811.8,187.1"/>
								<polygon class="mustard__dr__fill" points="811.9,174.8 811.9,187.1 817.6,181"/>
							</g>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 808.7069 190.3033)" class="white__fill futura-book fs__6-8__px">138.18 m2</text>
							<text transform="matrix(0.2845 0.9587 -0.9587 0.2845 820.295 200.6349)" class="mustard__fill futura-med fs__8-2__px">112</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 802.8491 172.996)" class="white__fill futura-book fs__6-8__px">8.00</text>
							<text transform="matrix(0.9611 -0.2761 0.2761 0.9611 823.2539 236.2284)" class="white__fill futura-book fs__6-8__px">9.27</text>
							<text transform="matrix(0.2725 0.9622 -0.9622 0.2725 797.6521 198.6073)" class="white__fill futura-book fs__6-8__px">16.00</text>
							<text transform="matrix(0.3189 0.9478 -0.9478 0.3189 827.8352 190.4427)" class="white__fill futura-book fs__6-8__px">16.05</text>
						</g>
					</g>
				</g>
			</g>
		</svg>

	</div>

</body>
</html>