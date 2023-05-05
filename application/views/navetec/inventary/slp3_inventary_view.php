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

<body ng-controller="NvtSLPCtrl as nvtSLP">
  
    <div ng-include="'application/views/app/nav/nav.html'"></div>


	<div class="modal__panel" ng-class="nvtSLP.nvtSLPListDialogDisplay">
		<div class="container__panel">
			<div class="toolbar__panel blue-txt">
				<p>SAN LUIS POTOSÍ 3 - Naves</p>
				<span class="close__panel" ng-click="nvtSLP.closeNvtSLPListDialog()"><i class="material-icons" style="margin:0;">close</i></span>
    		</div>
			<div class="content__panel">
				<ul class="saufth-collapsable">
					<li ng-repeat="property in nvtSLP.inmovablesData.inmovables">
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
								<div class="p-20 pointer" class="property__active" ng-class="nvtSLP.inmovablesClassList[$index]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[$index])"></div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="nvtSLP.advisersDialogDisplay">
		<div class="backdrop-dialog" ng-click="nvtSLP.closeAdvisersDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="nvtSLP.closeAdvisersDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{nvtSLP.propertyData.reference}}</p>
				<ul class="saufth-collapsable">
					<li ng-repeat="user in nvtSLP.activeUsers" ng-if="user.idProfile > 1">
						<div class="saufth-collapsable-header" ng-click="nvtSLP.selectUser(lead.idLead, $index)" ng-class="nvtSLP.activeUsers[$index].collapsableHeaderClass">
							<div style="display:flex;"><i class="material-icons pr-15">account_circle</i>{{user.name + ' ' + user.last_name}}</div>
							<div class="py-5 pl-15"></div>
							<div class="saufth-badge blue-bg light-txt ml-15">{{user.leads.length}}</div>
						</div>
						<ul class="saufth-collapsable-body" ng-class="nvtSLP.activeUsers[$index].collapsableBodyClass">
							<li class="saufth-collapsable-body-li" ng-repeat="lead in user.leads">
								<div class="saufth-collapsable-item-h" ng-click="nvtSLP.selectLeadPropertyStatus(lead.idUser, lead.idLead)">
									<i class="material-icons px-15">assignment_ind</i>{{lead.name + ' ' + lead.last_name}}
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="nvtSLP.dialogStatusDisplay">
		<div class="backdrop-dialog" ng-click="nvtSLP.closeDialogStatus()"></div>
		<div class="container-dialog p-20 status-dialog">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="nvtSLP.closeDialogStatus()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{nvtSLP.propertyData.reference}}</p>
				<ul class="saufth-collapsable w100">
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtSLP.setStatus(1)"><div class="color-block pb-property-active-bg mr-15"></div>Disponible</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtSLP.setStatus(6)"><div class="color-block darkgray__bg mr-15"></div>Estratégico</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtSLP.setStatus(2)"><div class="color-block pb_lightred-bg mr-15"></div>En espera</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtSLP.setStatus(3)"><div class="color-block brown mr-15"></div>Apartado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtSLP.setStatus(4)"><div class="color-block mustard-bg mr-15"></div>Enganchado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtSLP.setStatus(5)"><div class="color-block pb_teal-bg mr-15"></div>Vendido</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- <div class="modal-dialog" ng-class="nvtSLP.optionsDialogDisplay">
        <div class="backdrop-dialog" ng-click="nvtSLP.closeOptionsDialogDisplay()"></div>
        <div class="container-s-dialog p-20">
            <div class="toolbar-dialog blue-txt">
                Opciones
                <span ng-click="nvtSLP.closeOptionsDialogDisplay()">
                    <img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
                </span>
            </div>
            <div class="content-dialog" style="overflow: initial;">
				<ul>
					<li><div class="btn-flat" ng-class="nvtSLP.setLeadProperty()">Asignar cliente</div></li>
					<li class="pt-5"><div class="btn-flat">Cotización</div></li>
				</ul>
            </div>
            <div class="divider"></div>
        </div>
    </div> -->
	
	<div class="plano_container">

		<div class="container mt-64">
			<div class="row quote-header">
				<div class="col s12">
					<h1 class="center-align">SAN LUIS POTOSÍ 3</h1>
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
				<button class="btn-flat right"><i style="font-size:30px;" class="material-icons" ng-click="nvtSLP.showInmovablesList()">list</i></button>
			</div>
		</div>

        <svg version="1.1" class="quote__map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
			y="0px" viewBox="0 0 1366 1218.5" style="enable-background:new 0 0 1366 1218.5;" xml:space="preserve">

			<style type="text/css">
				.st8{fill:#F4E606;}
				.st11{fill:#E2A63C;}
				.st12{opacity:0.6;fill:#E2A63C;}
				.st15{fill:none;stroke:#FFFFFF;stroke-width:1.4073;stroke-miterlimit:10;}
			</style>

			<image style="overflow:visible;" width="1366" height="1219" xlink:href="media/assets/img/navetec/app/slp/slp3.jpg"  transform="matrix(1 0 0 1 -0.2 1.3052)"></image>

			<g id="MODULO_A">
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[15]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[15])">
					<polygon class="property nvt-sprite-1" points="1190.9,647.3 1240.6,690 1361.2,543.1 1315.5,504.4"/>
					<text transform="matrix(0.7522 0.6664 -0.6639 0.7478 1209.5223 655.8486)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.7522 0.6664 -0.6639 0.7478 1310.3715 517.3898)" class="white__fill futura-light fs__10px">13.28</text>
					<text transform="matrix(0.7522 0.6664 -0.6639 0.7478 1334.4929 539.1019)" class="white__fill futura-light fs__10px">0.72</text>
					<text transform="matrix(0.6467 -0.7562 0.7606 0.6493 1261.4587 622.3195)" class="white__fill futura-light fs__10px">569.34 m2</text>
					<g>
						<text transform="matrix(0.6498 -0.7599 0.7606 0.6493 1250.3804 614.3553)" class="st8 futura__book fs__10px">NAVE 16A</text>
					</g>
					<text transform="matrix(0.6653 -0.7399 0.7443 0.6678 1289.251 624.3209)" class="white__fill futura-light fs__10px">40.70</text>
					<g>
						<polygon class="st11" points="1237.4,631.8 1227.1,642 1237.4,652.3"/>
						<polygon class="st12" points="1237.5,631.8 1237.6,652.3 1247.8,642.1"/>
					</g>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[16]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[16])">
					<polygon class="property nvt-sprite-2" points="1141.5,603.9 1265.8,461.6 1315.5,504.4 1190.9,647.3"/>
					<text transform="matrix(0.7522 0.6664 -0.6639 0.7478 1159.7141 612.252)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.7522 0.6664 -0.6639 0.7478 1271.2604 483.1168)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.6467 -0.7562 0.7606 0.6493 1211.6588 578.7286)" class="white__fill futura-light fs__10px">568.32 m2</text>
					<g>
						<text transform="matrix(0.6498 -0.7599 0.7606 0.6493 1201.2689 569.6888)" class="st8 futura__book fs__10px">NAVE 17A</text>
					</g>
					<text transform="matrix(0.6653 -0.7399 0.7443 0.6678 1239.4506 580.7297)" class="white__fill futura-light fs__10px">40.63</text>
					<g>
						<polygon class="st11" points="1189.8,588.6 1179.5,598.8 1189.8,609.1"/>
						<polygon class="st12" points="1189.9,588.6 1189.9,609.1 1200.2,598.9"/>
					</g>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[17]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[17])">
					<polygon class="property nvt-sprite-1" points="1092.1,561.7 1141.5,603.9 1265.8,461.6 1216.2,418.9"/>
					<text transform="matrix(0.7522 0.6664 -0.6639 0.7478 1109.093 569.7564)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.7522 0.6664 -0.6639 0.7478 1220.6343 440.6195)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.6467 -0.7562 0.7606 0.6493 1161.0327 536.23)" class="white__fill futura-light fs__10px">567.30 m2</text>
					<g>
						<text transform="matrix(0.6498 -0.7599 0.7606 0.6493 1151.7415 526.9198)" class="st8 futura__book fs__10px">NAVE 18A</text>
					</g>
					<text transform="matrix(0.6653 -0.7399 0.7443 0.6678 1188.8264 538.23)" class="white__fill futura-light fs__10px">40.56</text>
					<g>
						<polygon class="st11" points="1138.6,546.3 1128.4,556.5 1138.6,566.8"/>
						<polygon class="st12" points="1138.8,546.3 1138.8,566.8 1149.1,556.6"/>
					</g>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[18]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[18])">
					<polygon class="property nvt-sprite-2" points="1092.1,561.7 1216.2,418.9 1165.9,376.4 1042.7,519.5"/>
					<text transform="matrix(0.7522 0.6664 -0.6639 0.7478 1061.3464 526.9855)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.7522 0.6664 -0.6639 0.7478 1172.8876 397.8458)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.6467 -0.7562 0.7606 0.6493 1113.293 493.4575)" class="white__fill futura-light fs__10px">566.27 m2</text>
					<g>
						<text transform="matrix(0.6498 -0.7599 0.7606 0.6493 1104.4319 486.0394)" class="st8 futura__book fs__10px">NAVE 19A</text>
					</g>
					<text transform="matrix(0.6653 -0.7399 0.7443 0.6678 1141.0823 495.4615)" class="white__fill futura-light fs__10px">40.48</text>
					<g>
						<polygon class="st11" points="1089.9,502.6 1079.6,512.8 1089.9,523.1"/>
						<polygon class="st12" points="1090,502.6 1090,523.1 1100.3,512.9"/>
					</g>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[19]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[19])">
					<polygon class="property nvt-sprite-1" points="993.4,476.2 1042.7,519.5 1165.9,376.4 1116.8,334.1"/>
					<text transform="matrix(0.7522 0.6664 -0.6639 0.7478 1010.7211 483.8018)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.7522 0.6664 -0.6639 0.7478 1122.2651 354.6648)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.6467 -0.7562 0.7606 0.6493 1062.6666 450.2755)" class="white__fill futura-light fs__10px">565.23 m2</text>
					<g>
						<text transform="matrix(0.6498 -0.7599 0.7606 0.6493 1053.0988 443.6749)" class="st8 futura__book fs__10px">NAVE 20A</text>
					</g>
					<text transform="matrix(0.6653 -0.7399 0.7443 0.6678 1090.4584 452.275)" class="white__fill futura-light fs__10px">40.41</text>
					<g>
						<polygon class="st11" points="1041.8,461.6 1031.5,471.9 1041.8,482.1"/>
						<polygon class="st12" points="1041.9,461.6 1041.9,482.1 1052.2,471.9"/>
					</g>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[20]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[20])">
					<polygon class="property nvt-sprite-2" points="993.4,476.2 1116.8,334.1 1034,263.7 907.5,402.7"/>
					<text transform="matrix(0.7522 0.6664 -0.6639 0.7478 946.5169 429.104)" class="white__fill futura-light fs__10px">24.32</text>
					<text transform="matrix(0.7522 0.6664 -0.6639 0.7478 1058.0607 299.9673)" class="white__fill futura-light fs__10px">23.39</text>
					<text transform="matrix(0.6467 -0.7562 0.7606 0.6493 998.4601 395.5757)" class="white__fill futura-light fs__10px">960.74 m2</text>
					<g>
						<text transform="matrix(0.6498 -0.7599 0.7606 0.6493 989.3051 387.3324)" class="st8 futura__book fs__10px">NAVE 21A</text>
					</g>
					<text transform="matrix(0.6653 -0.7399 0.7443 0.6678 1039.4219 409.0916)" class="white__fill futura-light fs__10px">40.34</text>
					<text transform="matrix(0.6653 -0.7399 0.7443 0.6678 969.0414 354.8057)" class="white__fill futura-light fs__10px">40.22</text>
					<g>
						<polygon class="st11" points="975.3,403 965,413.2 975.3,423.5"/>
						<polygon class="st12" points="975.4,403 975.4,423.5 985.7,413.3"/>
					</g>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[21]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[21])">
					<polygon class="property nvt-sprite-1" points="728.6,247.5 845.5,112.3 895.4,155.1 883.3,268.3 827.1,333"/>
					<text transform="matrix(0.7522 0.6664 -0.6639 0.7478 766.3906 274.1355)" class="white__fill futura-light fs__10px">28.00</text>
					<text transform="matrix(0.7522 0.6664 -0.6639 0.7478 852.1426 134.6378)" class="white__fill futura-light fs__10px">13.87</text>
					<text transform="matrix(0.1062 -0.9985 0.9944 0.1059 883.175 222.8151)" class="white__fill futura-light fs__10px">24.69</text>
					<text transform="matrix(0.6467 -0.7562 0.7606 0.6493 818.3324 240.608)" class="white__fill futura-light fs__10px">931.76 m2</text>
					<g>
						<text transform="matrix(0.6498 -0.7599 0.7606 0.6493 809.4707 233.1846)" class="st8 futura__book fs__10px">NAVE 22A</text>
					</g>
					<text transform="matrix(0.6653 -0.7399 0.7443 0.6678 841.7374 304.9496)" class="white__fill futura-light fs__10px">18.19</text>
					<g>
						<polygon class="st11" points="796.3,247.9 786,258.2 796.3,268.5"/>
						<polygon class="st12" points="796.4,247.9 796.4,268.5 806.7,258.2"/>
					</g>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[22]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[22])">
					<polygon class="property nvt-sprite-2" points="728.6,247.5 845.5,113.4 795,70.9 678.9,205.8"/>
					<text transform="matrix(0.7522 0.6664 -0.6639 0.7478 696.9695 215.3542)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.7522 0.6664 -0.6639 0.7478 801.3723 91.5895)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.6467 -0.7562 0.7606 0.6493 748.9137 181.8247)" class="white__fill futura-light fs__10px">533.65 m2</text>
					<g>
						<text transform="matrix(0.6498 -0.7599 0.7606 0.6493 740.0543 174.403)" class="st8 futura__book fs__10px">NAVE 23A</text>
					</g>
					<text transform="matrix(0.6653 -0.7399 0.7443 0.6678 776.7084 183.825)" class="white__fill futura-light fs__10px">38.23</text>
					<g>
						<polygon class="st11" points="728.1,189.3 717.8,199.5 728.1,209.8"/>
						<polygon class="st12" points="728.2,189.3 728.2,209.8 738.5,199.6"/>
					</g>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[23]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[23])">
					<polygon class="property nvt-sprite-1" points="586.2,124.4 678.9,205.8 795,70.9 716.5,5.4"/>
					<text transform="matrix(0.7522 0.6664 -0.6639 0.7478 621.3765 149.1098)" class="white__fill futura-light fs__10px">26.17</text>
					<text transform="matrix(0.7522 0.6664 -0.6639 0.7478 736.9583 38.6179)" class="white__fill futura-light fs__10px">22.00</text>
					<text transform="matrix(0.6467 -0.7562 0.7606 0.6493 682.181 122.9972)" class="white__fill futura-light fs__10px">913.90 m2</text>
					<g>
						<text transform="matrix(0.6498 -0.7599 0.7606 0.6493 673.3191 115.5786)" class="st8 futura__book fs__10px">NAVE 24A</text>
					</g>
					<text transform="matrix(0.6653 -0.7399 0.7443 0.6678 721.9661 146.6456)" class="white__fill futura-light fs__10px">38.01</text>
					<text transform="matrix(0.6653 -0.7399 0.7443 0.6678 651.5626 85.5998)" class="white__fill futura-light fs__10px">37.90</text>
					<g>
						<polygon class="st11" points="657.4,125.8 647.1,136 657.4,146.3"/>
						<polygon class="st12" points="657.5,125.8 657.5,146.3 667.8,136"/>
					</g>
				</g>
				<g id="DIVISIONES">
					<line class="st15" x1="728.6" y1="247.5" x2="845.5" y2="112.3"/>
					<line class="st15" x1="795" y1="70.9" x2="678.9" y2="205.8"/>
					<line class="st15" x1="883.3" y1="268.3" x2="827.1" y2="333"/>
					<line class="st15" x1="958.2" y1="346.9" x2="907.5" y2="402.7"/>
					<line class="st15" x1="1116.8" y1="334.1" x2="993.4" y2="476.2"/>
					<line class="st15" x1="1165.9" y1="376.4" x2="1042.7" y2="519.5"/>
					<line class="st15" x1="1216.2" y1="418.9" x2="1092.1" y2="561.7"/>
					<line class="st15" x1="1265.8" y1="461.6" x2="1141.5" y2="603.9"/>
					<line class="st15" x1="1190.9" y1="647.3" x2="1315.5" y2="504.4"/>
				</g>
			</g>
			<g id="MODULO_G">
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[80]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[80])">
					<path class="property nvt-sprite-1" d="M984.6,799.7c-0.8-1.9-64.1-155.3-64.1-155.3l101.2-41.9l141.6,122.3L984.6,799.7z"/>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 968.7145 639.2231)" class="white__fill futura-light fs__10px">23.61</text>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 1052.6748 764.9827)" class="white__fill futura-light fs__10px">41.67</text>
					<text transform="matrix(0.3846 0.9172 -0.9224 0.3863 1000.5565 677.7599)" class="white__fill futura-light fs__10px">1175.03 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9217 -0.9224 0.3863 1013.3201 676.2476)" class="st8 futura__book fs__10px">NAVE 1G</text>
					</g>
					<text transform="matrix(0.3653 0.9251 -0.9302 0.3671 953.1575 704.9874)" class="white__fill futura-light fs__10px">36.00</text>
					<text transform="matrix(0.7608 0.6417 -0.6451 0.7641 1070.2109 661.1743)" class="white__fill futura-light fs__10px">40.28</text>
					<g>
						<polygon class="st11" points="1042.5,728.4 1032.2,738.7 1042.5,748.9"/>
						<polygon class="st12" points="1042.6,728.4 1042.6,748.9 1052.9,738.7"/>
					</g>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[81]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[81])">
					<polygon class="property nvt-sprite-2" points="859.5,669.2 924.2,824.7 984.6,799.7 920.4,644.4"/>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 880.5747 674.0327)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 939.8473 812.5424)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.3846 0.9172 -0.9224 0.3863 906.303 714.8952)" class="white__fill futura-light fs__10px">504.00 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9217 -0.9224 0.3863 919.0693 713.3817)" class="st8 futura__book fs__10px">NAVE 2G</text>
					</g>
					<text transform="matrix(0.3653 0.9251 -0.9302 0.3671 891.7855 733.0923)" class="white__fill futura-light fs__10px">36.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[82]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[82])">
					<polygon class="property nvt-sprite-1" points="799.3,694.7 859.5,669.2 924.2,824.7 864.1,849.6"/>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 821.3059 699.1179)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 880.5829 837.6353)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.3846 0.9172 -0.9224 0.3863 847.0358 739.9796)" class="white__fill futura-light fs__10px">504.00 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9217 -0.9224 0.3863 859.8034 738.4697)" class="st8 futura__book fs__10px">NAVE 3G</text>
					</g>
					<text transform="matrix(0.3653 0.9251 -0.9302 0.3671 834.214 759.3488)" class="white__fill futura-light fs__10px">36.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[83]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[83])">
					<polygon class="property nvt-sprite-2" points="738.7,719.1 803.2,874.8 864.1,849.6 799.3,694.7"/>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 761.6143 724.4102)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 820.8932 862.9203)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.3846 0.9172 -0.9224 0.3863 787.3461 765.2747)" class="white__fill futura-light fs__10px">504.00 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9217 -0.9224 0.3863 800.1105 763.7556)" class="st8 futura__book fs__10px">NAVE 4G</text>
					</g>
					<text transform="matrix(0.3653 0.9251 -0.9302 0.3671 771.6195 786.3709)" class="white__fill futura-light fs__10px">36.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[84]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[84])">
					<polygon class="property nvt-sprite-1" points="678.6,744.9 738.7,719.1 803.2,874.8 743.9,900.1"/>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 700.4261 750.2075)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 759.7059 888.7215)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.3846 0.9172 -0.9224 0.3863 726.1568 791.073)" class="white__fill futura-light fs__10px">504.00 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9217 -0.9224 0.3863 738.9233 789.5594)" class="st8 futura__book fs__10px">NAVE 5G</text>
					</g>
					<text transform="matrix(0.3653 0.9251 -0.9302 0.3671 710.4287 809.5256)" class="white__fill futura-light fs__10px">36.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[85]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[85])">
					<polygon class="property nvt-sprite-2" points="618.3,769.3 683.3,925 743.9,900.1 678.6,744.9"/>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 640.7474 775.1868)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 700.0268 913.6999)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.3846 0.9172 -0.9224 0.3863 666.4776 816.0493)" class="white__fill futura-light fs__10px">504.00 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9217 -0.9224 0.3863 679.2455 814.5383)" class="st8 futura__book fs__10px">NAVE 6G</text>
					</g>
					<text transform="matrix(0.3653 0.9251 -0.9302 0.3671 650.7523 834.5057)" class="white__fill futura-light fs__10px">36.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[86]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[86])">
					<polygon class="property nvt-sprite-1" points="558.5,794.6 618.3,769.3 683.3,925 622.9,950"/>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 580.2451 799.04)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 639.5251 937.5571)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.3846 0.9172 -0.9224 0.3863 605.9761 839.9047)" class="white__fill futura-light fs__10px">504.00 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9217 -0.9224 0.3863 618.7426 838.3911)" class="st8 futura__book fs__10px">NAVE 7G</text>
					</g>
					<text transform="matrix(0.3653 0.9251 -0.9302 0.3671 590.249 858.3592)" class="white__fill futura-light fs__10px">36.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[87]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[87])">
					<polygon class="property nvt-sprite-2" points="497.3,819.4 562.8,975.2 622.9,950 558.5,794.6"/>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 520.9771 824.9503)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 580.2576 963.4672)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.3846 0.9172 -0.9224 0.3863 546.7087 865.816)" class="white__fill futura-light fs__10px">504.00 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9217 -0.9224 0.3863 559.4755 864.3022)" class="st8 futura__book fs__10px">NAVE 8G</text>
					</g>
					<text transform="matrix(0.3653 0.9251 -0.9302 0.3671 530.9834 884.268)" class="white__fill futura-light fs__10px">36.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[88]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[88])">
					<polygon class="property nvt-sprite-1" points="437.9,844.5 497.3,819.4 562.8,975.2 502.2,999.3"/>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 460.4729 849.7298)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 519.7515 988.2422)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.3846 0.9172 -0.9224 0.3863 486.2058 890.5931)" class="white__fill futura-light fs__10px">504.00 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9217 -0.9224 0.3863 498.9741 889.0829)" class="st8 futura__book fs__10px">NAVE 9G</text>
					</g>
					<text transform="matrix(0.3653 0.9251 -0.9302 0.3671 470.4817 909.0468)" class="white__fill futura-light fs__10px">36.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[89]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[89])">
					<polygon class="property nvt-sprite-2" points="377.1,869.3 441.6,1024.8 502.2,999.3 437.9,844.5"/>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 399.3071 874.1824)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 458.5847 1012.6952)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.3846 0.9172 -0.9224 0.3863 425.037 915.0467)" class="white__fill futura-light fs__10px">504.00 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9217 -0.9224 0.3863 436.907 909.5252)" class="st8 futura__book fs__10px">NAVE 10G</text>
					</g>
					<text transform="matrix(0.3653 0.9251 -0.9302 0.3671 409.3131 933.4988)" class="white__fill futura-light fs__10px">36.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[90]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[90])">
					<polygon class="property nvt-sprite-1" points="316.7,894.3 381.2,1049.2 441.6,1024.8 377.1,869.3"/>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 339.9299 899.0336)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 399.2052 1037.5494)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.3846 0.9172 -0.9224 0.3863 365.6597 939.8976)" class="white__fill futura-light fs__10px">504.00 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9217 -0.9224 0.3863 377.5301 934.377)" class="st8 futura__book fs__10px">NAVE 11G</text>
					</g>
					<text transform="matrix(0.3653 0.9251 -0.9302 0.3671 349.9318 958.3467)" class="white__fill futura-light fs__10px">36.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[91]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[91])">
					<polygon class="property nvt-sprite-2" points="256.9,919.5 316.7,894.3 381.2,1049.2 320.8,1074.7"/>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 279.0136 924.8453)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 338.2908 1063.3551)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.3846 0.9172 -0.9224 0.3863 304.7442 965.7072)" class="white__fill futura-light fs__10px">504.00 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9217 -0.9224 0.3863 316.6179 960.1927)" class="st8 futura__book fs__10px">NAVE 12G</text>
					</g>
					<text transform="matrix(0.3653 0.9251 -0.9302 0.3671 289.02 984.1588)" class="white__fill futura-light fs__10px">36.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[92]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[92])">
					<polygon class="property nvt-sprite-1" points="196,943.9 256.9,919.5 320.8,1074.7 261.3,1099.9"/>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 217.9466 949.1106)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 277.2255 1087.6239)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.3846 0.9172 -0.9224 0.3863 243.6799 989.972)" class="white__fill futura-light fs__10px">504.00 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9217 -0.9224 0.3863 255.552 984.455)" class="st8 futura__book fs__10px">NAVE 13G</text>
					</g>
					<text transform="matrix(0.3653 0.9251 -0.9302 0.3671 227.9549 1008.4229)" class="white__fill futura-light fs__10px">36.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[93]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[93])">
					<polygon class="property nvt-sprite-2" points="135.1,969.4 196,943.9 261.3,1099.9 200.1,1124.6"/>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 158.2684 973.8832)" class="white__fill futura-light fs__10px">14.20</text>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 217.5478 1112.3975)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.3846 0.9172 -0.9224 0.3863 184.0006 1014.7461)" class="white__fill futura-light fs__10px">507.69 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9217 -0.9224 0.3863 195.8764 1009.2275)" class="st8 futura__book fs__10px">NAVE 14G</text>
					</g>
					<text transform="matrix(0.3653 0.9251 -0.9302 0.3671 168.2753 1033.2028)" class="white__fill futura-light fs__10px">36.00</text>
					<g>
						<polygon class="st11" points="217.5,1070.4 207.2,1080.6 217.5,1090.9"/>
						<polygon class="st12" points="217.6,1070.4 217.6,1090.9 227.9,1080.7"/>
					</g>
				</g>
				<g id="DIVISIONES_5_">
					<line class="st15" x1="920.4" y1="644.4" x2="984.6" y2="799.7"/>
					<line class="st15" x1="859.5" y1="669.2" x2="924.2" y2="824.7"/>
					<line class="st15" x1="738.7" y1="719.1" x2="803.2" y2="874.8"/>
					<line class="st15" x1="799.3" y1="694.7" x2="864.1" y2="849.6"/>
					<line class="st15" x1="678.6" y1="744.9" x2="743.9" y2="900.1"/>
					<line class="st15" x1="618.3" y1="769.3" x2="682.3" y2="922.5"/>
					<line class="st15" x1="558.5" y1="794.6" x2="622.9" y2="950"/>
					<line class="st15" x1="497.3" y1="819.4" x2="562.8" y2="975.2"/>
					<line class="st15" x1="196" y1="943.9" x2="261.3" y2="1099.9"/>
					<line class="st15" x1="256.9" y1="919.5" x2="320.8" y2="1074.7"/>
					<line class="st15" x1="381.2" y1="1049.2" x2="316.7" y2="894.3"/>
					<line class="st15" x1="377.1" y1="869.3" x2="441.6" y2="1024.8"/>
					<line class="st15" x1="437.9" y1="844.5" x2="502.2" y2="999.3"/>
				</g>
			</g>
			<g id="MODULO_H">
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[94]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[94])">
					<polygon class="property nvt-sprite-2" points="802.9,481.1 877.8,662.1 1021.6,602.6 855.6,459.2"/>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 927.4489 633.1796)" class="white__fill futura-light fs__10px">33.39</text>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 822.123 484.2961)" class="white__fill futura-light fs__10px">12.32</text>
					<text transform="matrix(0.3846 0.9172 -0.9224 0.3863 867.6151 536.3046)" class="white__fill futura-light fs__10px">960.04 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9217 -0.9224 0.3863 880.3822 535.481)" class="st8 futura__book fs__10px">NAVE 1H</text>
					</g>
					<text transform="matrix(0.3653 0.9251 -0.9302 0.3671 841.7343 560.5701)" class="white__fill futura-light fs__10px">42.00</text>
					<text transform="matrix(0.7608 0.6417 -0.6451 0.7641 914.4721 527.7856)" class="white__fill futura-light fs__10px">46.99</text>
					<g>
						<polygon class="st11" points="852.1,496.4 841.8,506.6 852.1,516.9"/>
						<polygon class="st12" points="852.2,496.4 852.2,516.9 862.5,506.7"/>
					</g>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[95]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[95])">
					<polygon class="property nvt-sprite-1" points="742.6,505.8 802.9,481.1 877.8,662.1 817.7,687"/>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 833.6537 674.5687)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 766.4311 509.2412)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.3846 0.9172 -0.9224 0.3863 793.1181 567.2842)" class="white__fill futura-light fs__10px">588.00 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9217 -0.9224 0.3863 805.8856 566.4648)" class="st8 futura__book fs__10px">NAVE 2H</text>
					</g>
					<text transform="matrix(0.3653 0.9251 -0.9302 0.3671 780.1115 584.225)" class="white__fill futura-light fs__10px">42.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[96]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[96])">
					<polygon class="property nvt-sprite-2" points="681.9,531 757.7,712.2 817.7,687 742.6,505.8"/>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 772.4463 699.6573)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 705.2211 534.3267)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.3846 0.9172 -0.9224 0.3863 731.9166 592.3741)" class="white__fill futura-light fs__10px">588.00 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9217 -0.9224 0.3863 744.6779 591.5487)" class="st8 futura__book fs__10px">NAVE 3H</text>
					</g>
					<text transform="matrix(0.3653 0.9251 -0.9302 0.3671 718.9046 609.3105)" class="white__fill futura-light fs__10px">42.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[97]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[97])">
					<polygon class="property nvt-sprite-1" points="621.8,556.2 697,737.5 757.7,712.2 681.9,531"/>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 713.5908 723.5895)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 646.3656 558.2578)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.3846 0.9172 -0.9224 0.3863 673.0587 616.3076)" class="white__fill futura-light fs__10px">588.00 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9217 -0.9224 0.3863 685.8252 615.4832)" class="st8 futura__book fs__10px">NAVE 4H</text>
					</g>
					<text transform="matrix(0.3653 0.9251 -0.9302 0.3671 660.0507 633.2448)" class="white__fill futura-light fs__10px">42.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[98]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[98])">
					<polygon class="property nvt-sprite-2" points="561.5,580.9 621.8,556.2 697,737.5 636.1,762.1"/>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 652.1105 748.7014)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 584.8875 583.3741)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.3846 0.9172 -0.9224 0.3863 611.5778 641.4223)" class="white__fill futura-light fs__10px">588.00 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9217 -0.9224 0.3863 624.3419 640.5947)" class="st8 futura__book fs__10px">NAVE 5H</text>
					</g>
					<text transform="matrix(0.3653 0.9251 -0.9302 0.3671 598.5656 658.356)" class="white__fill futura-light fs__10px">42.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[99]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[99])">
					<polygon class="property nvt-sprite-1" points="502.2,608.1 576,787.4 636.1,762.1 561.5,580.9 506.3,603.9"/>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 594.1713 772.561)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 534.7698 602.4865)" class="white__fill futura-light fs__10px">12.87</text>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 507.1878 614.2455)" class="white__fill futura-light fs__10px">1.20</text>
					<text transform="matrix(0.3846 0.9172 -0.9224 0.3863 553.6432 665.2793)" class="white__fill futura-light fs__10px">587.77 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9217 -0.9224 0.3863 566.4047 664.4549)" class="st8 futura__book fs__10px">NAVE 6H</text>
					</g>
					<text transform="matrix(0.3653 0.9251 -0.9302 0.3671 540.6287 682.215)" class="white__fill futura-light fs__10px">41.59</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[100]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[100])">
					<polygon class="property nvt-sprite-2" points="450.6,654.7 515.6,812.3 576,787.4 502.2,608.1"/>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 531.7458 799.1036)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.7532 -0.6654 0.6624 0.7491 470.7623 652.1536)" class="white__fill futura-light fs__10px">14.91</text>
					<text transform="matrix(0.3846 0.9172 -0.9224 0.3863 494.3877 697.5615)" class="white__fill futura-light fs__10px">546.37 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9217 -0.9224 0.3863 507.1506 696.7375)" class="st8 futura__book fs__10px">NAVE 7H</text>
					</g>
					<text transform="matrix(0.3653 0.9251 -0.9302 0.3671 483.6232 719.046)" class="white__fill futura-light fs__10px">36.47</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[101]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[101])">
					<polygon class="property nvt-sprite-1" points="399.6,702.1 450.6,654.7 515.6,812.3 455.8,836.7"/>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 470.5443 825.213)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.7532 -0.6654 0.6624 0.7491 420.0094 698.4582)" class="white__fill futura-light fs__10px">14.91</text>
					<text transform="matrix(0.3846 0.9172 -0.9224 0.3863 439.6439 731.5018)" class="white__fill futura-light fs__10px">474.65 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9217 -0.9224 0.3863 452.4094 730.679)" class="st8 futura__book fs__10px">NAVE 8H</text>
					</g>
					<text transform="matrix(0.3653 0.9251 -0.9302 0.3671 427.382 754.2241)" class="white__fill futura-light fs__10px">31.34</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[102]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[102])">
					<polygon class="property nvt-sprite-2" points="348.3,749 395.5,862.8 455.8,836.7 399.6,702.1"/>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 410.8691 849.2897)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.7532 -0.6654 0.6624 0.7491 369.5229 744.5209)" class="white__fill futura-light fs__10px">14.91</text>
					<text transform="matrix(0.3846 0.9172 -0.9224 0.3863 382.7085 766.2109)" class="white__fill futura-light fs__10px">402.93 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9217 -0.9224 0.3863 395.4765 765.3891)" class="st8 futura__book fs__10px">NAVE 9H</text>
					</g>
					<text transform="matrix(0.3653 0.9251 -0.9302 0.3671 372.2213 792.2913)" class="white__fill futura-light fs__10px">26.22</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[103]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[103])">
					<polygon class="property nvt-sprite-1" points="297.8,796.1 348.3,749 395.5,862.8 335.1,886.7"/>
					<text transform="matrix(0.923 -0.3988 0.3968 0.9179 351.8891 872.9789)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.7532 -0.6654 0.6624 0.7491 318.4509 789.39)" class="white__fill futura-light fs__10px">14.91</text>
					<text transform="matrix(0.3846 0.9172 -0.9224 0.3863 328.2654 807.8326)" class="white__fill futura-light fs__10px">331.21 m2</text>
					<g>
						<text transform="matrix(0.3865 0.9217 -0.9224 0.3863 339.7813 804.1155)" class="st8 futura__book fs__10px">NAVE 10H</text>
					</g>
					<text transform="matrix(0.3653 0.9251 -0.9302 0.3671 318.1656 829.7114)" class="white__fill futura-light fs__10px">21.10</text>
					<g>
						<polygon class="st11" points="334,780 323.7,790.2 334,800.5"/>
						<polygon class="st12" points="334.1,780 334.1,800.5 344.4,790.3"/>
					</g>
				</g>
				<g id="DIVISIONES_7_">
					<line class="st15" x1="802.9" y1="481.1" x2="877.8" y2="662.1"/>
					<line class="st15" x1="817.7" y1="687" x2="742.6" y2="505.8"/>
					<line class="st15" x1="561.5" y1="580.9" x2="636.1" y2="762.1"/>
					<line class="st15" x1="621.8" y1="556.2" x2="697" y2="737.5"/>
					<line class="st15" x1="681.9" y1="531" x2="757.7" y2="712.2"/>
					<line class="st15" x1="576" y1="787.4" x2="502.2" y2="608.1"/>
					<line class="st15" x1="450.6" y1="654.7" x2="515.6" y2="812.3"/>
					<line class="st15" x1="297.8" y1="796.1" x2="335.1" y2="886.7"/>
					<line class="st15" x1="348.3" y1="749" x2="395.5" y2="862.8"/>
					<line class="st15" x1="399.6" y1="702.1" x2="455.8" y2="836.7"/>
					<line class="st15" x1="135.1" y1="969.4" x2="1021.6" y2="602.6"/>
				</g>
			</g>
			<g id="MODULO_I">
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[104]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[104])">
					<polygon class="property nvt-sprite-2" points="529.6,176.8 707.2,331.1 644.1,388.4 486.6,216.8"/>
					<text transform="matrix(0.6976 0.7097 -0.7136 0.7005 563.5214 262.3215)" class="white__fill futura-light fs__10px">767.94 m2</text>
					<g>
						<text transform="matrix(0.701 0.7132 -0.7136 0.7005 575.5301 258.2345)" class="st8 futura__book fs__10px">NAVE 1I</text>
					</g>
					<text transform="matrix(0.6797 0.7268 -0.7307 0.6827 560.5127 286.4993)" class="white__fill futura-light fs__10px">50.00</text>
					<text transform="matrix(0.6797 0.7268 -0.7307 0.6827 601.1217 251.9509)" class="white__fill futura-light fs__10px">50.33</text>
					<text transform="matrix(0.6875 -0.7194 0.7237 0.6901 657.3856 365.9581)" class="white__fill futura-light fs__10px">18.23</text>
					<text transform="matrix(0.6875 -0.7194 0.7237 0.6901 508.1172 216.8199)" class="white__fill futura-light fs__10px">12.51</text>
					<g>
						<polygon class="st11" points="635.5,311.9 625.2,322.1 635.5,332.4"/>
						<polygon class="st12" points="635.6,311.9 635.6,332.4 645.9,322.2"/>
					</g>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[105]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[105])">
					<polygon class="property nvt-sprite-1" points="486.6,216.8 644.1,388.4 596.9,432.9 438.3,260.9"/>
					<text transform="matrix(0.6769 0.7293 -0.7333 0.6799 519.5405 308.9597)" class="white__fill futura-light fs__10px">700.00 m2</text>
					<g>
						<text transform="matrix(0.6803 0.7329 -0.7333 0.6799 527.9398 301.0226)" class="st8 futura__book fs__10px">NAVE 2I</text>
					</g>
					<text transform="matrix(0.6797 0.7268 -0.7307 0.6827 511.7155 328.4134)" class="white__fill futura-light fs__10px">50.00</text>
					<text transform="matrix(0.7126 -0.6947 0.6988 0.7153 607.6522 415.4521)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.7202 -0.6868 0.6909 0.7229 461.1743 258.3481)" class="white__fill futura-light fs__10px">14.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[106]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[106])">
					<polygon class="property nvt-sprite-2" points="438.3,260.9 596.9,432.9 548.3,477 390.5,305.1"/>
					<text transform="matrix(0.6769 0.7293 -0.7333 0.6799 471.7205 353.2382)" class="white__fill futura-light fs__10px">700.00 m2</text>
					<g>
						<text transform="matrix(0.6803 0.7329 -0.7333 0.6799 483.6202 348.5851)" class="st8 futura__book fs__10px">NAVE 3I</text>
					</g>
					<text transform="matrix(0.6797 0.7268 -0.7307 0.6827 463.8947 372.6949)" class="white__fill futura-light fs__10px">50.00</text>
					<text transform="matrix(0.7126 -0.6947 0.6988 0.7153 559.8312 459.7257)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.7202 -0.6868 0.6909 0.7229 413.3528 302.6223)" class="white__fill futura-light fs__10px">14.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[107]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[107])">
					<polygon class="property nvt-sprite-1" points="390.5,305.1 548.3,477 500.8,521.1 342.2,348.7"/>
					<text transform="matrix(0.6769 0.7293 -0.7333 0.6799 421.7809 399.2992)" class="white__fill futura-light fs__10px">700.00 m2</text>
					<g>
						<text transform="matrix(0.6803 0.7329 -0.7333 0.6799 433.6826 394.6509)" class="st8 futura__book fs__10px">NAVE 4I</text>
					</g>
					<text transform="matrix(0.6797 0.7268 -0.7307 0.6827 413.9556 418.7525)" class="white__fill futura-light fs__10px">50.00</text>
					<text transform="matrix(0.7126 -0.6947 0.6988 0.7153 509.8957 505.7904)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.7202 -0.6868 0.6909 0.7229 363.415 348.6881)" class="white__fill futura-light fs__10px">14.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[108]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[108])">
					<polygon class="property nvt-sprite-2" points="342.2,348.7 500.8,521.1 451.7,565 294.2,393.4"/>
					<text transform="matrix(0.6769 0.7293 -0.7333 0.6799 373.4875 442.0711)" class="white__fill futura-light fs__10px">700.00 m2</text>
					<g>
						<text transform="matrix(0.6803 0.7329 -0.7333 0.6799 385.3906 437.4215)" class="st8 futura__book fs__10px">NAVE 5I</text>
					</g>
					<text transform="matrix(0.6797 0.7268 -0.7307 0.6827 365.6671 461.5305)" class="white__fill futura-light fs__10px">50.00</text>
					<text transform="matrix(0.7126 -0.6947 0.6988 0.7153 461.601 548.5605)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.7202 -0.6868 0.6909 0.7229 315.1193 391.4578)" class="white__fill futura-light fs__10px">14.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[109]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[109])">
					<polygon class="property nvt-sprite-1" points="294.2,393.4 451.7,565 404.5,609.4 246.2,437.5"/>
					<text transform="matrix(0.6769 0.7293 -0.7333 0.6799 325.7448 487.5842)" class="white__fill futura-light fs__10px">700.00 m2</text>
					<g>
						<text transform="matrix(0.6803 0.7329 -0.7333 0.6799 337.6459 482.9325)" class="st8 futura__book fs__10px">NAVE 6I</text>
					</g>
					<text transform="matrix(0.6797 0.7268 -0.7307 0.6827 317.9203 507.0405)" class="white__fill futura-light fs__10px">50.00</text>
					<text transform="matrix(0.7126 -0.6947 0.6988 0.7153 413.8593 594.074)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.7202 -0.6868 0.6909 0.7229 267.3786 436.972)" class="white__fill futura-light fs__10px">14.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[110]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[110])">
					<polygon class="property nvt-sprite-2" points="246.2,437.5 404.5,609.4 356.2,653.3 198.2,481.7"/>
					<text transform="matrix(0.6769 0.7293 -0.7333 0.6799 279.6497 530.0839)" class="white__fill futura-light fs__10px">700.00 m2</text>
					<g>
						<text transform="matrix(0.6803 0.7329 -0.7333 0.6799 291.5508 525.4322)" class="st8 futura__book fs__10px">NAVE 7I</text>
					</g>
					<text transform="matrix(0.6797 0.7268 -0.7307 0.6827 271.8227 549.537)" class="white__fill futura-light fs__10px">50.00</text>
					<text transform="matrix(0.7126 -0.6947 0.6988 0.7153 367.76 636.5696)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.7202 -0.6868 0.6909 0.7229 221.2809 479.4687)" class="white__fill futura-light fs__10px">14.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[111]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[111])">
					<polygon class="property nvt-sprite-1" points="198.2,481.7 356.2,653.3 308.5,697.4 149.9,526.1"/>
					<text transform="matrix(0.6769 0.7293 -0.7333 0.6799 230.808 573.4026)" class="white__fill futura-light fs__10px">700.00 m2</text>
					<g>
						<text transform="matrix(0.6803 0.7329 -0.7333 0.6799 242.7096 568.7545)" class="st8 futura__book fs__10px">NAVE 8I</text>
					</g>
					<text transform="matrix(0.6797 0.7268 -0.7307 0.6827 222.9841 592.8597)" class="white__fill futura-light fs__10px">50.00</text>
					<text transform="matrix(0.7126 -0.6947 0.6988 0.7153 318.9185 679.8904)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.7202 -0.6868 0.6909 0.7229 172.4402 522.7852)" class="white__fill futura-light fs__10px">14.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[112]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[112])">
					<polygon class="property nvt-sprite-2" points="149.9,526.1 308.5,697.4 260.2,742.1 101.9,569.4"/>
					<text transform="matrix(0.6769 0.7293 -0.7333 0.6799 183.614 617.8186)" class="white__fill futura-light fs__10px">700.00 m2</text>
					<g>
						<text transform="matrix(0.6803 0.7329 -0.7333 0.6799 195.5136 613.1683)" class="st8 futura__book fs__10px">NAVE 9I</text>
					</g>
					<text transform="matrix(0.6797 0.7268 -0.7307 0.6827 175.7891 637.2783)" class="white__fill futura-light fs__10px">50.00</text>
					<text transform="matrix(0.7126 -0.6947 0.6988 0.7153 271.7244 724.3042)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.7202 -0.6868 0.6909 0.7229 125.2452 567.2028)" class="white__fill futura-light fs__10px">14.00</text>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[113]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[113])">
					<polygon class="property nvt-sprite-1" points="101.9,569.4 260.2,742.1 212.2,786.5 53.9,614.1"/>
					<text transform="matrix(0.6769 0.7293 -0.7333 0.6799 134.2242 661.1395)" class="white__fill futura-light fs__10px">700.00 m2</text>
					<g>
						<text transform="matrix(0.6803 0.7329 -0.7333 0.6799 146.1246 656.4897)" class="st8 futura__book fs__10px">NAVE 10I</text>
					</g>
					<text transform="matrix(0.6797 0.7268 -0.7307 0.6827 126.3972 680.5966)" class="white__fill futura-light fs__10px">50.00</text>
					<text transform="matrix(0.7126 -0.6947 0.6988 0.7153 222.3358 767.6251)" class="white__fill futura-light fs__10px">14.00</text>
					<text transform="matrix(0.7202 -0.6868 0.6909 0.7229 75.8571 610.5245)" class="white__fill futura-light fs__10px">14.00</text>
					<g>
						<polygon class="st11" points="207.4,720 197.1,730.2 207.4,740.5"/>
						<polygon class="st12" points="207.5,720 207.5,740.5 217.8,730.3"/>
					</g>
				</g>
				<g class="property__active" ng-class="nvtSLP.inmovablesClassList[114]" ng-click="nvtSLP.setLeadProperty(nvtSLP.inmovablesData.inmovables[114])">
					<polygon class="property nvt-sprite-2" points="53.9,614.1 212.2,786.5 100.2,888.3 4.2,659.6"/>
					<text transform="matrix(0.6769 0.7293 -0.7333 0.6799 69.4864 714.1918)" class="white__fill futura-light fs__10px">1174.03m2</text>
					<g>
						<text transform="matrix(0.6803 0.7329 -0.7333 0.6799 81.7267 710.0992)" class="st8 futura__book fs__10px">NAVE 11I</text>
					</g>
					<text transform="matrix(0.3288 0.9386 -0.9438 0.3304 54.0264 754.5501)" class="white__fill futura-light fs__10px">53.16</text>
					<text transform="matrix(0.7126 -0.6947 0.6988 0.7153 143.3152 841.3967)" class="white__fill futura-light fs__10px">32.31</text>
					<text transform="matrix(0.7202 -0.6868 0.6909 0.7229 23.7229 659.3286)" class="white__fill futura-light fs__10px">14.49</text>
					<g>
						<polygon class="st11" points="130.2,782.4 119.9,792.6 130.2,802.9"/>
						<polygon class="st12" points="130.3,782.4 130.3,802.9 140.6,792.7"/>
					</g>
				</g>
				<g id="DIVISIONES_2_">
					<line class="st15" x1="53.9" y1="614.1" x2="212.2" y2="786.5"/>
					<line class="st15" x1="260.2" y1="742.1" x2="101.9" y2="569.4"/>
					<line class="st15" x1="149.9" y1="526.1" x2="308.5" y2="697.4"/>
					<line class="st15" x1="198.2" y1="481.7" x2="356.2" y2="653.3"/>
					<line class="st15" x1="246.2" y1="437.5" x2="404.5" y2="609.4"/>
					<line class="st15" x1="294.2" y1="393.4" x2="451.7" y2="565"/>
					<line class="st15" x1="500.8" y1="521.1" x2="342.2" y2="348.7"/>
					<line class="st15" x1="390.5" y1="305.1" x2="548.3" y2="477"/>
					<line class="st15" x1="596.9" y1="432.9" x2="438.3" y2="260.9"/>
					<line class="st15" x1="486.6" y1="216.8" x2="644.1" y2="388.4"/>
				</g>
			</g>

		</svg>

    </div>

</body>
</html>