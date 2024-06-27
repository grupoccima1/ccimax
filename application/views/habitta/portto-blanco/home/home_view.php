<!DOCTYPE html>
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
    <link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">

    <script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
    <script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="media/assets/js/init.js"></script>
</head>
<body ng-controller="PorttoBlancoMainCtrl as porttoBlanco">
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
        <nav class="white no-shadows" role="navigation">

            <div class="nav-wrapper">

                <a href="#!/portto_blanco" class="brand-logo white left"><img class="logo-pb" src="media/assets/img/habitta/portto-blanco/logos/logo.svg"></a>

                <ul class="nav-menu hide-on-med-and-down">
                    <li><a href="#!/portto_blanco">Inicio</a></li>
                         <li><a href="#!/">GrupoCCIMA</a></li>
                    <li><a href="#!/Navetec">Navetec</a></li>
                    <li><a href="#!/portto_blanco-ubicacion">Ubicación</a></li>
                    <li class="quote-item">
                        <md-menu class="right mr-20 mt-20"  md-offset="0 -60" ng-controller="ContactMenuCtrl as contactCtrl">
                            <a class="btn blue-bg no-shadows futura-demi lighter right" ng-click="contactCtrl.openMenu($mdMenu, $event)">
                                COTIZAR AQUÍ
                            </a>
                            <md-menu-content width="4">
                                <md-menu-item>
                                    <md-button disabled="disabled">
                                        Querétaro
                                    </md-button>
                                </md-menu-item>
                                <md-menu-divider></md-menu-divider>
                                <md-menu-item>
                                    <md-button ng-click="contactCtrl.toPBEstepa()">
                                        Estepa
                                    </md-button>
                                </md-menu-item>
                                <md-menu-item>
                                    <md-button ng-click="contactCtrl.toPBDesierto()">
                                        Desierto
                                    </md-button>
                                </md-menu-item>
                                <md-menu-item>
                                    <md-button ng-click="contactCtrl.toPBTaiga()">
                                        Taiga
                                    </md-button>
								</md-menu-item>
								<md-menu-item>
									<md-button ng-click="contactCtrl.toPBParamo()">
										Páramo
									</md-button>
								</md-menu-item>
								<md-menu-item>
                                	<md-button ng-click="contactCtrl.toPBSelva()">
										Selva
									</md-button>
								</md-menu-item>
								<md-menu-item>
									<md-button ng-click="contactCtrl.toPBBosque()">
										Bosque
									</md-button>
								</md-menu-item>
								<a href="#!/Portto_Blanco-Lago_1" ng-click="close()">
									<div class="link-sidenav">
										<span>Lago 1</span>
									</div>
								</a>
								<a href="#!/Portto_Blanco-Lago_2" ng-click="close()">
									<div class="link-sidenav">
										<span>Lago 2</span>
									</div>
								</a>
								<a href="#!/Portto_Blanco-Manglar" ng-click="close()">
									<div class="link-sidenav">
										<span>Manglar</span>
									</div>
								</a>
								<a href="#!/Portto_Blanco-Arrecife_1" ng-click="close()">
									<div class="link-sidenav">
										<span>Arrecife 1</span>
									</div>
								</a>
								<a href="#!/Portto_Blanco-Arrecife_2" ng-click="close()">
									<div class="link-sidenav">
										<span>Arrecife 2</span>
									</div>
								</a>
								<a href="#!/Portto_Blanco-Arrecife_3" ng-click="close()">
									<div class="link-sidenav">
										<span>Arrecife 3</span>
									</div>
								</a>
								<a href="#!/Portto_Blanco-Tundra_1" ng-click="close()">
									<div class="link-sidenav">
										<span>Tundra 1</span>
									</div>
								</a>
								<md-menu-divider></md-menu-divider>
								<md-button disabled="disabled">
                                        BERNAL
                                    </md-button>
                                <md-menu-divider></md-menu-divider>
                                <a href="#!/Portto_Blanco-Bernal/Amatista" ng-click="close()">
									<div class="link-sidenav">
										<span>Amatista</span>
									</div>
								</a>
                                <a href="#!/Portto_Blanco-Bernal/Zafiro" ng-click="close()">
									<div class="link-sidenav">
										<span>Zafiro</span>
									</div>
								</a>
								<a href="#!/Portto_Blanco-Bernal/Malaquita" ng-click="close()">
									<div class="link-sidenav">
										<span>Malaquita</span>
									</div>
								</a>
								 <a href="#!/Portto_Blanco-Bernal/Opalo_1" ng-click="close()">
                                    <div class="link-sidenav">
                                        <span>Ópalo 1</span>
                                    </div>
                                </a>
                                 <a href="#!/Portto_Blanco-Bernal/Opalo_2" ng-click="close()">
                                    <div class="link-sidenav">
                                        <span>Ópalo 2</span>
                                    </div>
                                </a>
                                 <a href="#!/Portto_Blanco-Bernal/Jade_1" ng-click="close()">
                                    <div class="link-sidenav">
                                        <span>Jade 1</span>
                                    </div>
                                </a>
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
                    <md-menu class="right mr-20 mt-20" md-offset="0 -150" ng-controller="ContactMenuCtrl as contactCtrl">
                        <a class="btn blue-bg no-shadows futura-demi lighter right" ng-click="contactCtrl.openMenu($mdMenu, $event)">
                            COTIZAR AQUÍ
                        </a>
                        <md-menu-content width="4">
                            <md-menu-item>
                                <md-button disabled="disabled">
                                    Querétaro
                                </md-button>
                            </md-menu-item>
                            <md-menu-divider></md-menu-divider>
                            <md-menu-item>
                                <md-button ng-click="contactCtrl.toPBEstepa()">
                                    Estepa
                                </md-button>
                            </md-menu-item>
                            <md-menu-item>
                                <md-button ng-click="contactCtrl.toPBDesierto()">
                                    Desierto
                                </md-button>
                            </md-menu-item>
                            <md-menu-item>
                                <md-button ng-click="contactCtrl.toPBTaiga()">
                                    Taiga
                                </md-button>
							</md-menu-item>
							<md-menu-item>
                                <md-button ng-click="contactCtrl.toPBParamo()">
                                    Páramo
                                </md-button>
							</md-menu-item>
							<md-menu-item>
                                <md-button ng-click="contactCtrl.toPBSelva()">
                                    Selva
                                </md-button>
                            </md-menu-item>
							<md-menu-item>
                                <md-button ng-click="contactCtrl.toPBBosque()">
                                    Bosque
                                </md-button>
                            </md-menu-item>
                            <a href="#!/Portto_Blanco-Lago_1" ng-click="close()">
								<div class="link-sidenav">
									<span>Lago 1</span>
								</div>
							</a>
							<a href="#!/Portto_Blanco-Lago_2" ng-click="close()">
								<div class="link-sidenav">
									<span>Lago 2</span>
								</div>
							</a>
							<a href="#!/Portto_Blanco-Manglar" ng-click="close()">
									<div class="link-sidenav">
										<span>Manglar</span>
									</div>
								</a>
							<a href="#!/Portto_Blanco-Arrecife_1" ng-click="close()">
									<div class="link-sidenav">
										<span>Arrecife 1</span>
									</div>
								</a>
								<a href="#!/Portto_Blanco-Arrecife_2" ng-click="close()">
									<div class="link-sidenav">
										<span>Arrecife 2</span>
									</div>
								</a>
							<a href="#!/Portto_Blanco-Arrecife_3" ng-click="close()">
									<div class="link-sidenav">
										<span>Arrecife 3</span>
									</div>
							</a>
							<a href="#!/Portto_Blanco-Tundra_1" ng-click="close()">
								<div class="link-sidenav">
									<span>Tundra 1</span>
								</div>
							</a>
                        <md-menu-divider></md-menu-divider>
								<md-button disabled="disabled">
                                        BERNAL
                                    </md-button>
                                <md-menu-divider></md-menu-divider>
								<md-button disabled="disabled">
                                        BERNAL
                                    </md-button>
                                <md-menu-divider></md-menu-divider>
                                <a href="#!/Portto_Blanco-Bernal/Amatista" ng-click="close()">
									<div class="link-sidenav">
										<span>Amatista</span>
									</div>
								</a>
                                <a href="#!/Portto_Blanco-Bernal/Zafiro" ng-click="close()">
									<div class="link-sidenav">
										<span>Zafiro</span>
									</div>
								</a>
									<a href="#!/Portto_Blanco-Bernal/Malaquita" ng-click="close()">
									<div class="link-sidenav">
										<span>Malaquita</span>
									</div>
								</a>
								 <a href="#!/Portto_Blanco-Bernal/Opalo_1" ng-click="close()">
                                    <div class="link-sidenav">
                                        <span>Ópalo 1 </span>
                                    </div>
                                </a>
								 <a href="#!/Portto_Blanco-Bernal/Opalo_2" ng-click="close()">
                                    <div class="link-sidenav">
                                        <span>Ópalo 2</span>
                                    </div>
                                </a>
                                 <a href="#!/Portto_Blanco-Bernal/Jade_1" ng-click="close()">
                                    <div class="link-sidenav">
                                        <span>Jade 1</span>
                                    </div>
                                </a>
                        </md-menu-content>
                    </md-menu>
                </div>

            </div>
            
        </nav>
    </div>

    <div class="portto-container">

        <div class="header-pb">
            <h1 class="header-heading pb-blue-text futura-light">EL HOGAR <br>QUE SOÑASTE, <br>EL RESPIRO QUE <br>MERECES</h1>
            <div class="header-img">
                <img src="media/assets/img/habitta/portto-blanco/portto-blanco.jpg">
            </div>
        </div>

    </div>
    
    <div class="section1 pb-blue3-bg py">
        <div class="row">
                <h2 class="hbg center-align pb-light-text pb-red-bg">Preventa de Lotes Residenciales</h2>
        </div>
        <div class="row promos">
            <div class="prom1 col s12 m12 l4 center">
                <img src="media/assets/img/habitta/portto-blanco/promos/promo-plazo.svg">
            </div>
            <div class="prom2 col s12 m12 l4 center">
                <img src="media/assets/img/habitta/portto-blanco/promos/promo-msi.svg">
            </div>
            <div class="prom3 col s12 m12 l4 center">
                <img src="media/assets/img/habitta/portto-blanco/promos/promo-hook.svg">
            </div>
        </div>
    </div>

    <div class="section3">
        <div class="map-portto" style="padding-bottom: 20px;">
            <img src="media/assets/img/habitta/portto-blanco/portto-blanco-map.png">
            <h2 class="map-heading pb-blue-text">UN LUGAR <br>PRIVILEGIADO</h2>
            <h4 class="map-heading pb-blue-text futura-light">Ubicado al sur de la <br>ciudad a la entrada del <br>Municipio de Huimilpan</h4>
        </div>

        <div class="container py">
            <img src="media/assets/img/habitta/portto-blanco/operacion.svg">
        </div>

        <div class="lugares py pb-blue3-bg">
            <div class="row">
                <div class="col s12 m12 l4 center">
                    <div class="py">
                        <h2 class="pb-light-text">9min</h3>
                        <h6 class="pb-light-text">Ciudad de Querétaro</h6>
                        <div class="divider" style="width: 240px; margin: 0 auto;"></div>
                    </div>
                </div>
                
                <div class="col s12 m12 l4 center">
                    <div class="py">
                        <h2 class="pb-light-text">7min</h3>
                        <h6 class="pb-light-text">Parque Nacional El Cimatario</h6>
                        <div class="divider" style="width: 240px; margin: 0 auto;"></div>
                    </div>
                </div>
                
                <div class="col s12 m12 l4 center">
                    <div class="py">
                        <h2 class="pb-light-text">12min</h3>
                        <h6 class="pb-light-text">Centro Cívico</h6>
                        <div class="divider" style="width: 240px; margin: 0 auto;"></div>
                    </div>
                </div>

                <div class="col s12 m12 l4 center">
                    <div class="py">
                        <h2 class="pb-light-text">15min</h3>
                        <h6 class="pb-light-text">Universidad Politécnica <br>de Querétaro</h6>
                        <div class="divider" style="width: 240px; margin: 0 auto;"></div>
                        <h6 class="pb-light-text">Estadio Corregidora</h6>
                        <div class="divider" style="width: 240px; margin: 0 auto;"></div>
                        <h6 class="pb-light-text">Parques Industriales <br>más importantes de la zona</h6>
                        <div class="divider" style="width: 240px; margin: 0 auto;"></div>
                        <h6 class="pb-light-text"></h6>
                        <div class="divider" style="width: 240px; margin: 0 auto;">Centro de Congresos</div>
                    </div>
                </div>

                <div class="col s12 m12 l4 center">
                    <div class="py">
                        <h2 class="pb-light-text">30min</h2>
                        <h6 class="pb-light-text">Aeropuerto Intercontinental <br>de Querétaro</h6>
                        <div class="divider" style="width: 240px; margin: 0 auto;"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="section2">
        <div class="master">
            <div class="row">
                <div class="col s12">
                    <h2 class="headline-2 pb-blue-text center-align"><span class="futura-light">Las maravillas de la ciudad de</span> Querétaro <span class="futura-light">en un lugar lleno de </span>naturaleza<span class="futura-light"> y</span> bienestar</h2>
                </div>
                
                <div layout-padding>
                    
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1366 1009.2" style="enable-background:new 0 0 1366 1009.2;" xml:space="preserve">
<style type="text/css">
	.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#6E788C;}
	.st1{fill-rule:evenodd;clip-rule:evenodd;fill:#2C547E;}
	.st2{fill-rule:evenodd;clip-rule:evenodd;fill:#7F4E24;stroke:#1D1E1C;stroke-width:0.8158;stroke-miterlimit:10;}
	.st3{fill-rule:evenodd;clip-rule:evenodd;fill:#7F4E24;}
	.st4{fill-rule:evenodd;clip-rule:evenodd;fill:#6D893D;stroke:#1D1E1C;stroke-width:0.8158;stroke-miterlimit:10;}
	.st5{fill-rule:evenodd;clip-rule:evenodd;fill:#6D893D;stroke:#1D1E1C;stroke-width:0.9923;stroke-miterlimit:10;}
	.st6{fill:none;stroke:#6B778E;stroke-width:6.5264;stroke-miterlimit:10;}
	.st7{fill:none;stroke:#6B778E;stroke-width:1.8723;stroke-miterlimit:10;}
	.st8{fill:#FFFFFF;}
	.st9{font-family:'FuturaPT-Heavy';}
	.st10{font-size:6.4896px;}
	.st11{font-family:'FuturaPT-Book';}
	.st12{font-size:17.0261px;}
</style>
<g>
	<g>
		
			<image style="overflow:visible;" width="8197" height="6436" id="BASE_IMAGEN_00000000944139701162859800000015978020757665702298_" xlink:href="media/assets/img/habitta/portto-blanco/app/master.png"  transform="matrix(0.1659 0 0 0.1659 41.7596 -27.3831)">
		</image>
		<g id="ESTEPA_00000151524792136943000970000000006438247237965478_">
			<polyline class="st0" points="263.6,884.5 249,966 242.9,983.2 242.9,983.9 170.4,974.5 167.6,968.7 173.6,883.2 175.2,882 
				176.5,880.7 178,879.6 179.8,878.9 181.7,878.7 199.4,880 201.4,882 203.8,883.6 206.5,884.6 209.3,885.1 212.1,885 214.9,884.4 
				217.5,883.1 219.7,881.4 263.6,884.5 			"/>
		</g>
		<g id="ESTEPA_00000116231342401182217550000016026295895956872112_">
			<polyline class="st0" points="283.2,885.8 383.7,892.9 424.1,895.7 429.8,895.8 435.5,895.4 441.1,894.4 471.3,993 439,1009.2 
				376.1,1001 265.1,986.7 283.2,885.8 			"/>
		</g>
		<g id="PARAMO_00000123418291772463522050000012722343796223027866_">
			<polyline class="st0" points="250.2,764 248.4,814.3 264.2,814.9 271.3,840.2 266.4,868.8 218.8,865.5 216.9,863.8 214.7,862.5 
				212.2,861.8 209.6,861.6 207.1,862 204.7,862.9 202.6,864.4 182.8,863 181,862.6 179.3,861.6 178,860.2 176.2,858.2 174.2,856.4 
				171.9,855 172.1,851.8 145.2,849.9 148.5,760.2 250.2,764 			"/>
		</g>
		<g id="PARAMO_00000042712841532953313240000011126348391397909901_">
			<polyline class="st0" points="290.1,870.5 294,765.6 422.4,770.3 504,773.3 503.3,759.2 505.2,758.7 519,755 532.8,753.2 
				546.4,749.4 559.8,745.8 610.7,747.6 609.5,779.2 594.1,783.4 589,785 584.2,787.1 579.6,789.7 515.4,831.3 508.3,820.4 
				458.9,852.4 466,863.4 451.2,873 444.1,862 440.9,864 437.4,865.5 433.7,866.5 429.9,867 426.1,867 418.8,866.5 418.8,866.5 
				374,863.3 373.5,876.4 290.1,870.5 			"/>
		</g>
		<g id="DESIERTO_00000123428065595994006980000007670881953337113231_">
			<polyline class="st1" points="458.9,886.7 486.6,868.8 550.3,827.5 588.3,802.9 591.3,801.1 594.6,799.7 598,798.6 630.1,790.1 
				634.9,788.8 635.8,788.5 688.4,774.5 690.1,777.1 691.9,779.6 695.1,783.6 698.6,787.2 702.4,790.4 706.6,793.1 711.2,795.2 
				716,796.7 720.9,797.6 725.9,797.8 753.1,898.5 733.4,903.8 691.1,918.2 670.9,925 652,928.3 629.3,949.4 572.8,1001.8 
				569.6,1004.8 471.3,993 441.1,894.4 445.8,893 450.3,891.3 454.7,889.2 458.9,886.7 			"/>
		</g>
		<g id="LAGO_00000065756476469635457730000012220052356061523104_">
			<polyline class="st0" points="725.9,797.8 728.2,797.7 740.2,796.7 743.7,796.3 747.2,795.5 748.4,795.1 790.2,782.4 
				794.5,780.8 798.6,778.7 822.3,764.6 825.9,762.3 829.2,759.5 832.2,756.6 832.2,756.7 844.8,744.8 847.6,741.9 850.1,738.7 
				855.7,730.6 857.8,727.1 859.6,723.4 860.9,719.6 861.9,715.6 864.1,703.6 864.2,702.6 879.9,712.6 895.3,723.2 910.3,734.2 
				924.9,745.8 939.1,757.9 952.8,770.4 966.2,783.4 979.1,796.8 991.5,810.7 1003.5,825 887.4,862.2 862.6,868.9 753.1,898.5 
				725.9,797.8 			"/>
		</g>
		<g id="PARAMO_00000129173567610633965310000015620447103802381206_">
			<polyline class="st0" points="616,590 660.5,686.3 699.8,697.8 698.2,700.3 696.2,703.6 694.6,707 693.9,708.8 646.8,694.9 
				639.6,679.3 502.4,739.2 496.8,623 605.8,572.4 616,590 			"/>
		</g>
		<g id="TAIGA_00000075883804961250368350000013267931447755192249_">
			<polyline class="st1" points="895.6,671.6 913.9,666.6 942.6,659.9 952.9,657.5 955.4,657 963.4,655.4 971.3,653.6 971.8,653.7 
				982,654.6 994.9,653.4 1006.1,651.8 1006.1,651.8 1007.8,651.5 1018.8,648.4 1026.9,645.6 1032.3,644.1 1033.7,644.3 
				1058.9,653.4 1071.1,656.7 1085,658.7 1092.2,658.3 1099.9,657.4 1107.7,659.4 1109.6,659.9 1124,660.8 1141,659.9 1142.8,660.4 
				1171.2,668.9 1175.7,670.7 1180,673.1 1180.5,674.9 1183.5,683.1 1188.5,688 1199,695.7 1215.6,703 1242.3,715.2 1233.6,761.7 
				1154.4,771.6 1132.2,780 1063.9,805.6 1063.9,805.6 1018.3,820.2 1006.4,805.7 994.1,791.7 981.3,778 968,764.8 954.3,752 
				940.2,739.7 925.7,727.8 910.9,716.5 895.6,705.6 895.6,671.6 			"/>
		</g>
		<g id="SABANA_00000127759119124439664330000004378755889329823927_">
			<polyline class="st0" points="1148,401 1152.5,313.3 1157.3,222.2 1245.8,226.8 1245.7,227.2 1255.4,228 1253.9,246.5 
				1328.7,252.6 1315.8,321.8 1298.4,414.7 1223.6,409.7 1223.7,408 1147.8,402.9 1148,401 			"/>
		</g>
		<g id="BOSQUE_00000009557695261394285930000010946993559977027234_">
			<polyline class="st1" points="1245.7,227.2 1252.4,144.7 1306.3,149.1 1347.2,153.4 1328.7,252.6 1253.9,246.5 1255.4,228 
				1245.7,227.2 			"/>
		</g>
		<g id="MANGLAR_00000021803639024553930980000006775495567608611221_">
			<polyline class="st0" points="837.1,587.7 973.9,524.2 1056.2,486.1 1126.7,490.9 1116.9,635.2 1113.6,635 1103.2,632.2 
				1099.6,632.6 1086,633.4 1076.3,632.1 1066.6,629.4 1039.9,619.8 1030.7,618.4 1019.4,621.6 1011.3,624.3 1002.5,626.9 
				998.1,627.5 991.9,628.4 982,629.3 973.4,628.5 969,628.4 958.2,630.8 947.6,632.9 936.9,635.4 907.8,642.2 893,646.2 
				868.9,644.9 866.8,645.1 861,620.4 859.5,615.2 857.4,610.1 854.8,605.3 851.7,600.8 848.2,596.6 844.2,592.9 839.9,589.6 
				838.1,588.4 837.1,587.7 			"/>
		</g>
		<g id="TUNDRA_00000144318241270664474760000004264678414397735089_">
			<polyline class="st1" points="1143.1,210.5 1139.6,277.8 1136.1,346.2 1011.5,346.2 1011.5,277.8 1011.5,210.5 1143.1,210.5 			
				"/>
		</g>
		<g id="SELVA_00000044166298335222134930000001733705933249698225_">
			<polyline class="st0" points="927.6,217.9 928,210.5 932.4,125.3 1123.5,136.8 1122,165 1145.4,166.2 1143.1,210.5 1011.5,210.5 
				1011.5,346.2 1136.1,346.2 1133.3,400.2 1132.7,405.9 1131.5,411.5 1129.9,416.9 1127.7,422.2 1125,427.2 1121.8,431.9 
				1118.1,436.3 1114.1,440.3 1109.6,443.9 1104.9,447 1099.8,449.7 1007.7,492.4 931.4,527.7 931.4,428.8 934.6,366.1 934.6,366.1 
				935.3,352.6 935.7,346.2 920.9,346.2 927.6,217.9 			"/>
		</g>
		<g id="BOSQUE_00000111187005842742443120000000788622014081174703_">
			<polyline class="st1" points="1116.9,635.2 1127,485.5 1129.7,445.4 1134,440.2 1137.7,434.6 1140.9,428.7 1143.5,422.5 
				1145.6,416.1 1147,409.5 1147.8,402.9 1223.7,408 1223.6,409.7 1298.4,414.7 1283.2,496.1 1247,689.7 1225.9,680.1 1211.7,673.8 
				1205.1,668.9 1204.5,667.3 1202.8,661.1 1196.6,653.5 1190.8,650.3 1186.4,647.9 1179.4,645.1 1150,636.3 1144,634.5 1124,635.6 
				1116.9,635.2 			"/>
		</g>
		<g id="ARRECIFE_00000030471087298697497900000004297940578320530358_">
			<polyline class="st1" points="697.5,530 697.5,530 803.2,481 916.6,428.4 916.6,534.6 843.7,568.4 831.7,573.9 785.1,595.5 
				780.6,597 776.3,599 772.3,601.6 768.7,604.6 765.4,608.1 759,615.7 758.8,616 745.1,632.7 735.9,644 735.8,644.1 733.6,647.1 
				699.8,697.8 660.5,686.3 616,590 605.8,572.5 697.5,530 			"/>
		</g>
		<polyline id="AMENIDADES_VENDIBLES_00000056393838957077164200000015222856225231998871_" class="st2" points="91.3,807.1 
			90.3,835.1 90.4,840.6 91.2,846.1 92.6,851.5 94.6,856.7 97.3,861.6 100.4,866.1 104.1,870.3 116.5,882.7 117.2,883.6 
			117.5,884.8 117.4,886 116.8,887 115.9,887.8 104.6,894.8 93.4,902.1 92.4,901.3 79.8,891.7 67.3,882.2 54.6,872.5 43.4,864.1 
			32.4,855.7 21.3,847.1 11.4,838.9 5.6,832.5 3.9,829.9 2.5,827 1.5,824.1 1,821 0.9,820.3 0.9,806.7 0.9,803.7 91.3,807.1 		"/>
		<polyline id="AMENIDADES_VENDIBLES_00000103231181607978893570000008411043945529452680_" class="st2" points="106.6,912.4 
			112.5,908.5 125.6,900.3 139,892.4 152.6,884.9 154.4,884.2 156.4,884.1 158.2,884.6 161.2,885.5 164.3,885.9 167.4,885.7 
			161.5,970.2 158.5,965.4 155.2,960.8 147.8,951.8 140.2,943.1 132.3,934.5 119.1,922.4 107.9,913.5 106.6,912.4 		"/>
		<polyline id="AMENIDADES_VENDIBLES_00000062898395972494754780000011337129761037675448_" class="st2" points="0.9,803.7 
			0.9,789.2 1,787.6 1.4,774.4 1.8,761.4 2,754.9 93.1,758.2 91.3,807.1 0.9,803.7 		"/>
		<polyline id="AMENIDADES_VENDIBLES_00000027602199378647080830000012029307556215539891_" class="st2" points="91.1,814.4 
			93.1,758.2 148.5,760.2 145.2,849.9 172.1,851.8 171.9,855 169.2,854 166.2,853.4 163.2,853.4 160.3,853.9 157.5,855 155,856.5 
			152.7,858.5 150.9,860.9 149.5,863.5 148.7,866.4 148,868.2 146.9,869.7 145.4,870.8 134.8,876.7 133.4,877.1 132,876.9 
			130.9,876.2 114.6,859.9 111.6,856.5 109.2,852.8 107.3,848.7 105.9,844.5 105.2,840.1 105,835.6 105.8,815 105.6,812.9 
			104.8,810.9 103.5,809.3 101.7,808.1 99.8,807.4 97.7,807.4 95.6,807.9 93.8,808.9 92.4,810.5 91.4,812.3 91.1,814.4 		"/>
		<polyline id="AMENIDADES_VENDIBLES_00000111155847704480757260000005926999187881675702_" class="st2" points="374.1,863.3 
			426.1,867 429.9,867 433.7,866.5 437.4,865.5 440.9,864 444.1,862 451.2,873 450.4,873.5 446.5,875.7 442.5,877.5 438.3,878.8 
			434,879.7 429.6,880.1 425.2,880 373.6,876.4 374.1,863.3 		"/>
		<polyline id="AMENIDADES_VENDIBLES_00000149354169607485804770000001219290145433728176_" class="st2" points="508.3,820.4 
			515.4,831.3 466,863.4 458.9,852.4 508.3,820.4 		"/>
		<polyline id="AMENIDADES_VENDIBLES_00000067219262295239972960000007986243438527799946_" class="st2" points="832.5,600.3 
			830.8,599.1 828.1,597.5 827.1,596.5 826.5,595.2 826.6,593.8 827.2,592.6 828.4,591.7 837.1,587.7 838.1,588.4 839.9,589.6 
			844.2,592.9 848.2,596.6 851.7,600.8 854.8,605.3 857.4,610.1 859.5,615.2 861,620.4 866.8,645.1 857.4,646.5 854.3,648.6 
			848.3,623.4 847,618.8 845,614.5 842.6,610.4 839.7,606.6 836.3,603.3 832.5,600.3 		"/>
		<polyline id="AMENIDADES_VENDIBLES_00000015319458200234759510000000270301782446022025_" class="st3" points="820.3,630 
			819.5,627.7 818.1,625.7 816.3,624.1 814.6,622.9 812.5,621.9 810.2,621.3 807.8,621.3 797.8,622.6 796.2,609.7 806.2,608.4 
			809.5,608.2 812.8,608.5 816,609.3 819,610.5 821.9,612.2 823.6,613.4 826.3,615.5 828.6,617.9 830.5,620.7 832,623.8 833,627 
			836.8,643.3 825.3,651.1 820.3,630 		"/>
		<polyline id="AMENIDADES_VENDIBLES_00000030469226062813270010000000034897472107076251_" class="st3" points="846.2,712.8 
			845.4,715.9 844.2,718.9 842.5,721.7 836.9,729.7 835.5,731.6 833.8,733.4 818.3,748 816.3,749.7 814.2,751.1 790.5,765.1 
			788,766.4 785.5,767.3 743.7,780.1 741.3,780.7 738.9,781 726.9,782 725.9,782 725.9,769 737.8,768 739.9,767.6 781.7,754.9 
			783.8,753.9 807.6,739.9 809.3,738.6 824.9,723.9 826.2,722.3 831.8,714.3 832.8,712.5 833.4,710.5 835.6,698.5 835.7,696.5 
			835.5,694.5 834.2,689.3 845.8,681.5 848.1,691.5 848.6,694.6 848.7,697.7 848.4,700.8 846.2,712.8 		"/>
		<polyline class="st3" points="807.6,664.8 825.8,653.2 825.3,651.1 836.8,643.3 841,661.1 829.5,668.9 828.9,666.6 814.6,675.8 
			807.6,664.8 		"/>
		<polyline id="AMENIDADES_VENDIBLES_00000165206618099889831870000004523645369629089920_" class="st2" points="1158,207.4 
			1161.6,139.1 1245.5,144.2 1252.4,144.7 1246.9,212.1 1158,207.4 		"/>
		<polygon id="AMENIDADES_VENDIBLES_00000150063565738705748140000008059829708316906413_" class="st2" points="803.2,481 
			919.2,426 935.5,124.3 928.6,123.8 832.5,118 		"/>
		<polyline id="AMENIDADES_00000129166676266484944930000010766838447111723671_" class="st4" points="609.5,779.2 610.7,747.6 
			629.6,748.3 636,772.2 609.5,779.2 		"/>
		<polyline id="AMENIDADES_00000177470496208727568320000016807197788727062925_" class="st4" points="862.7,684.6 860.4,674.9 
			866.8,670.6 870,670.1 895.6,671.6 895.6,705.6 884.8,698.4 873.8,691.4 862.7,684.6 		"/>
		<polyline id="AMENIDADES_00000001627402231352344360000015748937725554060476_" class="st5" points="1056.2,486.1 1106,463 
			1111.3,460.3 1116.4,457.2 1121.1,453.6 1125.6,449.7 1129.7,445.4 1126.7,490.9 1056.2,486.1 		"/>
		<polyline id="AMENIDADES_00000044177157067436533390000007753960167988277943_" class="st4" points="559.8,745.8 565.6,744.2 
			574,740.2 583.8,738.3 595.4,730.1 604.1,722.8 612.1,714.2 619,710.1 624.4,710 628,710.4 638,717.9 645.1,719.4 649.6,719.6 
			656.2,719 658.5,719.4 660.9,721.9 663.8,730.9 668.8,743.2 675.5,749.1 680.7,753.5 683.3,755.4 683.3,755.4 683.5,759.5 
			636,772.2 629.6,748.3 559.8,745.8 		"/>
		<polyline id="AMENIDADES_00000160187662234798784030000013876557104930146235_" class="st4" points="1122,165 1123.5,136.8 
			1146.9,138.2 1145.4,166.2 1122,165 		"/>
		<polyline class="st6" points="803.2,481 841,3.9 1363,44.7 1347.2,153.4 		"/>
	</g>
	<path class="st7" d="M1.5,754.1l502,18.4l-7.3-150.3c140-64.8,279.9-129.7,419.9-194.5c5.3-101,10.5-202.1,15.8-303.1
		c138.3,9.4,276.5,18.8,414.8,28.2l0,0l-18.5,99.1L1297.9,414l-56.1,300.5l-8.7,46.4l-79.2,9.9l-82,30.8l-54.2,17.8l-106.4,34.1
		l-31.7,9.8l-79.4,21.5L752.6,900l-82.2,24.2l-18.9,3.3l-84.9,76.5l-95.8-11.8l-32.3,16.1l-196.1-25.3l-73.4-9.2l-5.9-0.5l-2.2-2.7
		l-4.9-8.8l-15.2-18.2l-13.1-13.1l-22.1-18.1l-13-10.5l-57-44.2l-22-17.5l-3.2-2.8l-1.7-1.8L6,832.8l-1.6-2l-2-3.5l-1.3-3.5l-0.6-3
		l-0.2-3.4L0,812.6L1.5,754.1z"/>
	<g>
		<g>
			<path class="st8" d="M1103.5,64.8l4,7h-1.3l2.7,4.8h-1.4l2.9,5.1h-5l-2.4-4.2h1.4l-2.9-5.1h1.3l-1.9-3.4L1103.5,64.8z M1096.7,64
				l4.2,7.3h-1.3l2.9,5.1h-1.4l3.1,5.4h-4.4l-2.7-4.7h1.6l-3.2-5.6h1.5l-2.2-3.8L1096.7,64z M1085,67.7l-2.2,3.7h1.5l-3.2,5.6h1.6
				l-2.7,4.7h-4.5l3.1-5.4h-1.4l2.9-5.1h-1.3l4.2-7.3L1085,67.7z M1069.1,81.8l2.9-5.1h-1.4l2.7-4.8h-1.3l4-7l2.5,4.3l-1.9,3.4h1.3
				l-2.9,5.1h1.4l-2.4,4.2H1069.1z M1077.4,92.8h-2.5v-9.9h2.5V92.8z M1084.2,92.8h-2.7v-9.9h2.7V92.8z M1091.3,81.6v11.2h-3V81.6
				h-6.7l3.4-5.9h-1.6l3.2-5.6h-1.5l4.7-8.1l4.7,8.1h-1.5l3.2,5.6h-1.6l3.4,5.9H1091.3z M1098,92.8h-2.7v-9.9h2.7V92.8z
				 M1104.7,92.8h-2.5v-9.9h2.5V92.8z"/>
			<path class="st8" d="M1089.7,53.2c-14.3,0-25.8,11.6-25.8,25.8c0,5.6,1.8,10.7,4.8,15h2.4c-3.3-4.1-5.3-9.3-5.3-15
				c0-13.2,10.7-23.9,23.9-23.9c13.2,0,23.9,10.7,23.9,23.9c0,5.7-2,10.9-5.3,15h2.4c3-4.2,4.8-9.4,4.8-15
				C1115.6,64.8,1104,53.2,1089.7,53.2z"/>
		</g>
		<g id="LAGO_00000088132127668963050600000011478213412423089050_">
			<g>
				<path class="st8" d="M755.3,728.2c-3.2-4-5-9.2-4.6-14.8c0.7-10.7,9.7-19.5,20.4-19.9c12.2-0.5,22.2,9.2,22.2,21.3
					c0,5-1.8,9.7-4.7,13.3h2.1c3.1-4.3,4.7-9.7,4.2-15.5c-1.1-11.3-10.5-20.3-21.9-20.8c-13.2-0.6-24.1,9.9-24.1,23
					c0,5,1.6,9.6,4.3,13.3H755.3z"/>
				<g>
					<path class="st8" d="M788.3,721.1c-0.7,0-2.3,0.7-3.3,0.7c-1.5,0-1.9-0.8-3.3-0.8s-2.2,0.9-3.3,0.9s-2.1-0.9-3.3-0.9
						c-1.1,0-2.5,0.9-3.5,0.9c-1,0-1.8-0.9-3-0.9c-1.2,0-2.1,0.9-3.3,0.9c-1.1,0-2.3-0.9-3.3-0.9s-2.3,0.9-3.3,0.9
						c-1,0-2-0.9-3.1-0.9c-0.9,0-1.7,0.5-2.5,0.8c0.3,0.7,0.6,1.4,0.9,2.1c0.5-0.2,1-0.4,1.6-0.4c0.6,0,2.4,0.9,3.1,0.9
						c1,0,2.3-0.9,3.3-0.9s2.1,0.9,3.3,0.9c1.1,0,2.1-0.9,3.3-0.9c1.2,0,2,0.9,3,0.9c1,0,2.4-0.9,3.5-0.9c1.1,0,2.2,0.9,3.3,0.9
						s1.9-0.9,3.3-0.9s1.7,0.8,3.3,0.8c1.1,0,2.7-0.7,3.3-0.7c0.6,0,1,0.2,1.4,0.3c0.3-0.7,0.6-1.4,0.9-2.1
						C789.8,721.5,789.3,721.1,788.3,721.1z"/>
					<path class="st8" d="M785,725.7c-1.5,0-1.9-0.8-3.3-0.8s-2.2,0.9-3.3,0.9s-2.1-0.9-3.3-0.9c-1.1,0-2.5,0.9-3.5,0.9
						c-1,0-1.8-0.9-3-0.9c-1.2,0-2.1,0.9-3.3,0.9c-1.1,0-2.3-0.9-3.3-0.9s-2.3,0.9-3.3,0.9c-1,0-2-0.9-3.1-0.9
						c-0.3,0-0.6,0.1-0.9,0.2c0.5,0.8,1.1,1.7,1.7,2.4c0.8,0.3,1.9,0.7,2.3,0.7c1,0,2.3-0.9,3.3-0.9s2.1,0.9,3.3,0.9
						c1.1,0,2.1-0.9,3.3-0.9c1.2,0,2,0.9,3,0.9c1,0,2.4-0.9,3.5-0.9c1.1,0,2.2,0.9,3.3,0.9s1.9-0.9,3.3-0.9s1.7,0.8,3.3,0.8
						c0.7,0,1.5-0.3,2.3-0.5c0.7-0.8,1.3-1.6,1.8-2.5c-0.2-0.1-0.4-0.1-0.7-0.1C787.7,725,786,725.7,785,725.7z"/>
					<path class="st8" d="M761.4,718.6c0,0,0.9,0,1.9,0.2s1.1,0.6,2.1,0.6c0.9,0,1.8-0.5,1.8-0.5s-1.6-6.6-2.2-8
						c0,0,0.4-0.1,0.6-1.3c0.2-1.2-1.4-5-2.9-5.3c0,0-0.5-0.2-1.1-0.1c0,0-0.9-1.3-1.7-1.4c-0.9-0.1-0.9,0.7-0.7,1
						c0.2,0.4,1.3,1.2,1.3,1.2s-0.4,0.3-0.3,1.1c0.1,0.7,1,1.7,1.3,2.6c0.3,0.8,0.6,2,1,2.3c0.4,0.3,0.8,0.5,1.1,0.4
						c0,0,1.7,4.6,1.9,6.5c0,0-4.3-5.4-8.2-5.1C757.3,712.9,759.2,713.4,761.4,718.6z"/>
					<path class="st8" d="M780.8,718.6c1-0.3,1.2-0.1,1.2-0.1c0.8-2.9,1.5-5.4,2.2-6.7c0.7-1.3,2.6-2.3,2.6-2.3
						c-4.7-0.2-7.9,7.4-7.9,7.4c0.2-2.2,1.6-6.4,1.6-6.4c0.3,0,0.7-0.2,1.1-0.5c0.4-0.3,0.7-1.7,1-2.6c0.3-0.9,1.3-2,1.3-2.9
						c0.1-0.8-0.3-1.2-0.3-1.2s1.1-1,1.3-1.4c0.2-0.4,0.1-1.3-0.7-1.2c-0.9,0.1-1.7,1.6-1.7,1.6c-0.7-0.1-1.1,0.1-1.1,0.1
						c-1.5,0.3-3.1,4.6-2.9,6c0.2,1.3,0.6,1.4,0.6,1.4c-0.7,1.5-2.2,8.9-2.2,8.9s0.9,0.6,1.9,0.6
						C779.6,719.4,779.8,718.9,780.8,718.6z"/>
					<path class="st8" d="M775.9,697.2c-1.4,0.5-2.7,5.6-2.3,6.7c0.3,1.1,0.8,1.2,0.8,1.2c-0.2,0.6-1,3.3-1.4,6.1
						c-0.3,2-0.4,4-0.4,5.5c-0.3-3.7-1.3-15.9-5.4-14.3c0,0,1.6,1,1.6,1.7c0.2,3.6-0.6,11-0.3,14.5c0,0,0.7-0.1,1.4,0.1
						c0.7,0.2,1.6,0.7,2,0.7c0.5,0,2-0.6,2-0.6s0.3-5.3,0.5-7.2c0.2-2.2,1.4-6.2,1.4-6.2c0.3,0,0.7-0.3,1-0.6
						c0.3-0.3,0.6-1.6,0.8-2.4c0.2-0.8,1.3-3.1,1.2-3.8c0-0.7-0.7-1-0.7-1s0.3-0.8,0.4-1.4c-0.5-0.2-0.9-0.3-1.4-0.4
						c-0.2,0.5-0.2,1.2-0.2,1.2C776.3,697,775.9,697.2,775.9,697.2z"/>
					<path class="st8" d="M778.7,695.9c0.1-0.4,0-1.2-0.8-0.9c-0.3,0.1-0.5,0.4-0.7,0.8c0.5,0.1,0.9,0.3,1.4,0.4
						C778.7,696.1,778.7,696,778.7,695.9z"/>
				</g>
			</g>
		</g>
		<g id="AREA_COMERCIAL_00000039094454202988729130000007412846139487705761_">
			<g>
				<g>
					<path class="st8" d="M39.4,846.1c-2.5-3.1-3.9-7.1-3.6-11.5c0.5-8.4,7.5-15.1,15.9-15.5c9.5-0.4,17.3,7.2,17.3,16.6
						c0,3.9-1.4,7.5-3.7,10.4H67c2.4-3.4,3.7-7.6,3.2-12.1c-0.8-8.8-8.2-15.8-17-16.2c-10.3-0.5-18.8,7.7-18.8,17.9
						c0,3.9,1.2,7.4,3.3,10.4H39.4z"/>
				</g>
				<path class="st8" d="M63.1,827.7c0-0.4-0.4-0.7-0.8-0.7h-4.1v-1.1c0-0.1,0-0.1,0-0.2c-0.1-2.5-2.2-4.5-4.7-4.5
					c-1.9,0-3.5,1.1-4.2,2.6c-1.3,0.6-2.3,1.8-2.6,3.3h-1.9c-0.4,0-0.7,0.3-0.8,0.7l-0.1,0.6c0,0,1.8,0,1.8,0h0.8v0.8h-4
					c-0.4,0-0.7,0.3-0.8,0.7l-1.2,15.4c0,0.4,0.3,0.8,0.8,0.8h20c0.4,0,0.8-0.4,0.8-0.8l-0.1-1.4h1.6c0.4,0,0.8-0.4,0.8-0.8
					L63.1,827.7z M54.5,822.8c1.5,0.4,2.5,2,2.5,3.6l0,1h-1.1c-0.3-2.2-2.2-4-4.6-4C52.2,822.7,53.4,822.5,54.5,822.8z M49.9,826.2
					c0-0.6,0.1-1.1,0.4-1.6c0.3-0.1,0.6-0.1,1-0.1c1.7,0,3.2,1.2,3.5,2.9h-4.9V826.2z M48.7,825.5c0,0.1,0,0.1,0,0.2
					c0,0.1,0,0.1,0,0.2v1.1h-0.9C48,826.4,48.3,825.9,48.7,825.5z M47.7,828.4h7.2v0.8h-7.2V828.4z M42.8,831.1
					c0-0.3,0.3-0.6,0.7-0.6h3v2.7c-0.3,0.2-0.5,0.5-0.5,0.9c0,0.6,0.5,1.1,1.1,1.1c0.6,0,1.1-0.5,1.1-1.1c0-0.4-0.2-0.8-0.5-0.9
					v-2.6h7.2v2.7c-0.3,0.2-0.5,0.5-0.5,0.9c0,0.6,0.5,1.1,1.1,1.1c0.6,0,1.1-0.5,1.1-1.1c0-0.4-0.2-0.7-0.5-0.9v-2.6h3.1
					c0.3,0,0.6,0.3,0.7,0.6l0.9,11.3H41.9L42.8,831.1z M60.1,844.7H42.4c-0.4,0-0.7-0.3-0.7-0.7l0-0.4h18.9l0,0.4
					C60.8,844.4,60.5,844.7,60.1,844.7z M60.8,829.9c0-0.4-0.4-0.7-0.8-0.7H56v-0.8h5.3c0.3,0,0.6,0.3,0.7,0.6l0.9,11.3h-1.3
					L60.8,829.9z M62.3,842.6h-0.5l-0.1-1.1H63l0,0.4C63,842.2,62.7,842.6,62.3,842.6z"/>
			</g>
		</g>
		<g id="ESCUELA_00000060717201799341032680000005031614812768855430_">
			<g>
				<g>
					<path class="st8" d="M145,899.8c-9.4,0-16.9,7.6-16.9,16.9c0,3.7,1.2,7,3.1,9.8h1.6c-2.2-2.7-3.4-6.1-3.4-9.8
						c0-8.7,7-15.7,15.7-15.7c8.7,0,15.7,7,15.7,15.7c0,3.7-1.3,7.1-3.4,9.8h1.6c2-2.8,3.1-6.2,3.1-9.8
						C161.9,907.4,154.3,899.8,145,899.8z"/>
					<path class="st8" d="M144.5,901.7L144.5,901.7C144.5,901.8,144.5,901.8,144.5,901.7L144.5,901.7z"/>
					<path class="st8" d="M145.3,901.7L145.3,901.7C145.3,901.8,145.3,901.8,145.3,901.7L145.3,901.7z"/>
				</g>
				<g>
					<path class="st8" d="M156,911.7c-1.2-0.7-3.1-1.5-5.6-1.6c-2.4,0-4.4,0.7-5.7,1.4c-1.3-0.6-3.1-1.3-5.4-1.3c-0.1,0-0.1,0-0.2,0
						c-2.5,0-4.4,0.8-5.6,1.5l-0.4,0.2v13.8h9.2c0.4,0.4,1.2,0.9,2.4,0.9c0,0,0.1,0,0.1,0c1.1,0,1.9-0.6,2.3-0.9h9.2v-13.7
						L156,911.7z M154.9,912.7v9.4c-1.1-0.5-2.6-1-4.4-1.1c-2.1,0-3.8,0.5-5.1,1.1v-9.4c1.1-0.6,2.8-1.3,4.9-1.2
						C152.4,911.5,153.9,912.1,154.9,912.7z M139.2,911.6c2.1,0,3.8,0.5,4.9,1.1v9.4c-1.2-0.6-2.9-1.1-4.8-1c-1.9,0-3.5,0.5-4.6,1
						v-9.4C135.7,912.2,137.2,911.6,139.2,911.6z M146.5,924.2l-0.2,0.2c-0.1,0.2-0.7,0.7-1.5,0.7c-0.9,0-1.5-0.6-1.6-0.7l-0.2-0.2
						h-8.4v-0.5c1.1-0.6,2.7-1.2,4.6-1.2c2.3,0,4.1,0.8,5.2,1.4l0.4,0.2l0.4-0.2c1.1-0.7,3-1.5,5.4-1.4c1.9,0.1,3.4,0.7,4.4,1.2v0.5
						H146.5z"/>
					<polygon class="st8" points="156.6,911 144.7,905.1 133,911 133,909.5 144.7,903.5 156.6,909.5 					"/>
				</g>
			</g>
		</g>
		<g id="SPORT_ZONE_00000151518004913290698180000010304256129338555536_">
			<g>
				<g>
					<g>
						<g>
							<path class="st8" d="M648.4,732.7c0-1.1-0.4-2.1-1-3c-0.6-0.8-1.5-1.4-2.4-1.8c-0.5-0.2-1-0.3-1.6-0.3
								c-0.5,0-1.1,0.1-1.5,0.2c-1,0.3-1.8,1-2.5,1.8c-0.6,0.8-1,1.8-1,3c0,0,0,0,0,0c0,1,0.3,2,0.9,2.8c0.6,0.9,1.5,1.5,2.5,1.9
								c0.5,0.2,1,0.3,1.6,0.3c0.5,0,1-0.1,1.5-0.2c1-0.3,1.9-1,2.6-1.9C648.1,734.8,648.4,733.8,648.4,732.7
								C648.4,732.7,648.4,732.7,648.4,732.7z M646.9,735.1l-0.7-0.6l-1.7,1.2l0.3,1c-0.4,0.1-0.8,0.2-1.3,0.2
								c-0.5,0-0.9-0.1-1.3-0.2l0.3-0.9l-1.6-1.3l-0.8,0.5c-0.5-0.7-0.7-1.5-0.7-2.4c0,0,0,0,0,0l0.9,0l0.6-2l-0.7-0.5
								c0.5-0.7,1.2-1.2,2-1.5l0.3,0.8l2.1,0l0.3-0.9c0.8,0.3,1.5,0.8,2,1.5l-0.7,0.5l0.6,2l0.9,0c0,0,0,0,0,0
								C647.6,733.6,647.3,734.4,646.9,735.1z"/>
							<polygon class="st8" points="642.4,731.3 641.7,733.2 643.4,734.5 645.1,733.3 644.5,731.3 							"/>
						</g>
					</g>
					<g>
						<g>
							<g>
								<path class="st8" d="M637.8,740c-1.3-0.1-2.5-0.6-3.5-1.4c-0.6,0.7-1,1.6-1,2.6h4.5V740z"/>
								<path class="st8" d="M641.6,737.9c-0.8-0.7-1.8-1.1-2.8-1.2v2.3C639.8,738.9,640.7,738.5,641.6,737.9z"/>
								<path class="st8" d="M638.7,743.3c1.3,0.1,2.5,0.6,3.5,1.4c0.6-0.7,0.9-1.6,1-2.6h-4.5V743.3z"/>
								<path class="st8" d="M638.7,741.2h4.5c-0.1-1-0.5-1.9-1-2.6c-1,0.8-2.2,1.3-3.5,1.4V741.2z"/>
								<path class="st8" d="M637.8,742.1h-4.5c0.1,1,0.5,1.9,1,2.6c1-0.8,2.2-1.3,3.5-1.4V742.1z"/>
								<path class="st8" d="M637.8,736.7c-1.1,0.1-2.1,0.5-2.8,1.2c0.8,0.6,1.8,1,2.8,1.1V736.7z"/>
								<path class="st8" d="M638.7,746.6c1.1-0.1,2.1-0.6,2.9-1.3c-0.8-0.6-1.8-1.1-2.9-1.1V746.6z"/>
								<path class="st8" d="M635,745.4c0.8,0.7,1.8,1.2,2.9,1.3v-2.4C636.8,744.3,635.8,744.8,635,745.4z"/>
							</g>
						</g>
						<g>
							<g>
								<path class="st8" d="M650.5,739.6c-0.2,0.3-0.4,0.5-0.6,0.7c-0.1-0.1-0.2-0.2-0.4-0.3c-0.2-0.2-0.4-0.3-0.6-0.4
									c-0.2-0.1-0.3-0.2-0.5-0.3c-0.2-0.1-0.5-0.2-0.7-0.3c-0.2-0.1-0.4-0.1-0.7-0.2c-0.3-0.1-0.6-0.1-0.8-0.1c-0.1,0-0.3,0-0.4,0
									c-0.5,0-0.9,0.1-1.3,0.2c0.1-0.2,0.3-0.4,0.4-0.5c0.6-0.2,1.2-0.3,1.8-0.3c0.1,0,0.1,0,0.2,0c0.3,0,0.7,0.1,1,0.1
									c0.2,0,0.3,0.1,0.5,0.1c0.3,0.1,0.5,0.2,0.7,0.3c0.1,0.1,0.2,0.1,0.3,0.2c0.2,0.1,0.4,0.3,0.6,0.4
									C650.2,739.3,650.3,739.4,650.5,739.6z"/>
								<path class="st8" d="M651.3,737.5c0,0.1,0,0.2-0.1,0.3c-0.1,0.4-0.2,0.8-0.4,1.1c-0.1-0.1-0.3-0.2-0.4-0.4
									c-0.2-0.2-0.4-0.3-0.6-0.4c0,0-0.1-0.1-0.1-0.1c0,0,0,0,0,0c-0.2-0.1-0.5-0.3-0.7-0.4c-0.1,0-0.2-0.1-0.2-0.1c0,0,0,0,0,0
									c-0.3-0.1-0.7-0.2-1-0.3c-0.3-0.1-0.6-0.1-1-0.1c-0.2,0-0.4,0-0.5,0c0.7-0.4,1.6-0.6,2.4-0.6c0.2,0,0.3,0,0.5,0
									c0.4,0,0.8,0.1,1.2,0.2c0.1,0,0.3,0.1,0.4,0.2c0.1,0,0.1,0.1,0.2,0.1c0.1,0,0.2,0.1,0.3,0.2
									C651.2,737.4,651.3,737.4,651.3,737.5z"/>
								<path class="st8" d="M652.6,738.7C652.6,738.7,652.6,738.7,652.6,738.7c-0.1,0.5-0.3,1.1-0.6,1.6c0,0,0,0.1-0.1,0.1
									c-0.1,0.2-0.3,0.5-0.5,0.7c-0.2,0.2-0.3,0.4-0.5,0.6c-0.2,0.2-0.4,0.3-0.6,0.5c-0.1,0.1-0.2,0.2-0.4,0.2
									c-0.2,0.1-0.5,0.2-0.7,0.3c-0.1,0-0.1,0.1-0.2,0.1c0-0.1,0-0.2,0-0.3c0-0.2,0-0.4,0-0.6c0.1,0,0.2-0.1,0.2-0.2
									c0.2-0.1,0.3-0.2,0.5-0.4c0.2-0.1,0.4-0.3,0.5-0.5c0.2-0.2,0.4-0.4,0.6-0.7c0.1-0.2,0.3-0.4,0.4-0.6c0,0,0-0.1,0-0.1
									c0.3-0.5,0.5-1,0.6-1.5C652.2,738.2,652.4,738.4,652.6,738.7z"/>
								<path class="st8" d="M653.4,740.3C653.4,740.3,653.4,740.3,653.4,740.3c-0.1,0.5-0.3,1-0.6,1.5c-0.1,0.1-0.1,0.2-0.2,0.4
									c-0.2,0.3-0.4,0.5-0.6,0.8c-0.1,0.1-0.2,0.2-0.4,0.3c-0.2,0.2-0.4,0.3-0.6,0.5c0,0,0,0,0,0c-0.2,0.1-0.4,0.2-0.6,0.3
									c-0.3,0.1-0.5,0.2-0.8,0.3c-0.1-0.3-0.2-0.6-0.3-0.9c0.2-0.1,0.4-0.1,0.6-0.2c0.2-0.1,0.4-0.2,0.7-0.3
									c0.1,0,0.2-0.1,0.2-0.1c0.2-0.1,0.4-0.3,0.6-0.4c0.2-0.1,0.3-0.3,0.5-0.5c0.2-0.2,0.4-0.4,0.5-0.7v0
									c0.1-0.2,0.2-0.3,0.3-0.5c0.2-0.3,0.4-0.7,0.5-1.1C653.2,739.8,653.3,740,653.4,740.3z"/>
								<path class="st8" d="M650.2,746.4c-0.3,0.1-0.5,0.2-0.8,0.2c-0.5-0.4-0.9-0.9-1.2-1.4c0,0,0,0,0,0c-0.1-0.2-0.3-0.5-0.4-0.7
									c-0.1-0.2-0.2-0.5-0.2-0.7c-0.1-0.2-0.1-0.5-0.1-0.7c0-0.2,0-0.3,0-0.5c0-0.3,0-0.5,0.1-0.8c0-0.1,0-0.2,0.1-0.3
									c0.1,0.1,0.3,0.1,0.4,0.2c0.2,0.1,0.3,0.2,0.5,0.3c0,0.1,0,0.2,0,0.3c0,0.2,0,0.5,0,0.7c0,0.2,0.1,0.5,0.1,0.7
									c0.1,0.3,0.2,0.6,0.3,0.8c0.1,0.2,0.2,0.5,0.3,0.7c0,0,0,0,0,0.1C649.5,745.6,649.8,746.1,650.2,746.4z"/>
								<path class="st8" d="M648.3,746.7c-0.2,0-0.4,0-0.7-0.1c-0.5-0.4-0.9-0.9-1.2-1.4c-0.1-0.1-0.1-0.2-0.1-0.3
									c-0.2-0.3-0.3-0.6-0.4-0.9c0-0.1-0.1-0.3-0.1-0.4v0c-0.1-0.3-0.1-0.5-0.1-0.8c0,0,0-0.1,0-0.1c0-0.2,0-0.5,0-0.7
									c0-0.3,0.1-0.5,0.2-0.8c0.3,0,0.6,0.1,0.9,0.1c0,0.2-0.1,0.4-0.1,0.7c0,0.2,0,0.5,0,0.7c0,0.1,0,0.2,0,0.3
									c0,0.2,0.1,0.5,0.1,0.7c0,0.2,0.1,0.4,0.2,0.6c0.1,0.3,0.2,0.5,0.3,0.8l0,0c0.1,0.1,0.1,0.3,0.2,0.4
									C647.7,746,648,746.3,648.3,746.7z"/>
								<path class="st8" d="M646.1,746c-1-0.6-1.8-1.5-2.2-2.6v0c-0.1-0.3-0.2-0.7-0.3-1c0-0.1,0-0.2,0-0.3c0-0.1,0-0.2,0-0.3
									c0,0,0,0,0,0c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.2c0,0,0,0,0,0c0,0,0.1,0,0.1-0.1c0.4-0.2,0.9-0.3,1.3-0.3
									c-0.1,0.2-0.1,0.5-0.1,0.7c0,0.2,0,0.4,0,0.6c0,0,0,0.1,0,0.1c0,0.2,0,0.5,0,0.7c0,0.1,0,0.1,0,0.2c0.1,0.3,0.1,0.7,0.3,1
									c0.1,0.4,0.3,0.7,0.5,1.1C645.9,745.7,646,745.8,646.1,746z"/>
								<path class="st8" d="M649.3,740.8C649.3,740.8,649.3,740.8,649.3,740.8C649.2,740.8,649.3,740.8,649.3,740.8
									C649.3,740.7,649.3,740.8,649.3,740.8z"/>
								<g>
									<path class="st8" d="M649.3,740.7c0,0,0,0.1,0,0.1c-0.2,0.1-0.4,0.2-0.5,0.4c-0.1,0-0.2-0.1-0.2-0.1
										c-0.3-0.1-0.5-0.3-0.8-0.4c-0.2-0.1-0.5-0.2-0.7-0.2c-0.3-0.1-0.6-0.1-0.9-0.1c-0.2,0-0.5,0-0.8,0c0,0,0,0,0,0
										c-0.6,0-1.1,0.1-1.6,0.3c0.1-0.3,0.2-0.6,0.3-0.8c0.5-0.2,1.1-0.3,1.7-0.3c0,0,0.1,0,0.1,0c0.3,0,0.5,0,0.7,0.1
										c0.3,0,0.5,0.1,0.8,0.2c0.2,0.1,0.5,0.2,0.7,0.3c0.2,0.1,0.4,0.2,0.6,0.3C648.9,740.4,649.1,740.6,649.3,740.7z"/>
								</g>
								<g>
									<path class="st8" d="M653.6,741.9c0,1-0.4,2-1,2.8l0,0c-0.2,0.3-0.5,0.6-0.8,0.8c-0.1,0.1-0.2,0.1-0.3,0.2
										c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.3,0.2-0.5,0.3c0,0-0.1,0-0.1,0.1c-0.4-0.3-0.7-0.7-1-1.2c0.2-0.1,0.5-0.2,0.7-0.3
										c0.2-0.1,0.3-0.2,0.5-0.3c0,0,0.1-0.1,0.1-0.1c0.2-0.1,0.4-0.2,0.5-0.4c0.1,0,0.1-0.1,0.2-0.1c0.3-0.2,0.5-0.5,0.7-0.7
										c0.3-0.3,0.5-0.7,0.7-1C653.5,742,653.6,742,653.6,741.9z"/>
								</g>
							</g>
						</g>
					</g>
				</g>
				<path class="st8" d="M643.5,726.2c-7.2,0-13,5.8-13,13c0,2.8,0.9,5.4,2.4,7.5h1.2c-1.7-2.1-2.6-4.7-2.6-7.5c0-6.6,5.4-12,12-12
					s12,5.4,12,12c0,2.8-1,5.5-2.6,7.5h1.2c1.5-2.1,2.4-4.7,2.4-7.5C656.4,732,650.6,726.2,643.5,726.2z"/>
			</g>
		</g>
		<g id="PET_FRIENDLY_PARK_00000139278304677302470330000013674515083891478963_">
			<g>
				<path class="st8" d="M878,670.1c-6.6,0-11.9,5.3-11.9,11.9c0,2.6,0.8,5,2.2,6.9h1.1c-1.5-1.9-2.4-4.3-2.4-6.9
					c0-6.1,4.9-11.1,11.1-11.1c6.1,0,11.1,4.9,11.1,11.1c0,2.6-0.9,5-2.4,6.9h1.1c1.4-2,2.2-4.3,2.2-6.9
					C890,675.5,884.6,670.1,878,670.1z"/>
				<g>
					<path class="st8" d="M882.1,676.1c-0.1,0.1-0.1,0.2-0.2,0.3c-0.8,0.8-2,0.8-2.8,0c-0.4-0.4-0.6-1-0.6-1.6
						c0-0.3,0.1-0.5,0.2-0.8c0.1-0.3,0.2-0.6,0.5-0.8c0.7-0.7,1.8-0.7,2.6,0c0.3,0.3,0.4,0.6,0.5,0.9
						C882.6,674.8,882.6,675.5,882.1,676.1z"/>
					<path class="st8" d="M876.9,676.4c-0.8,0.8-2,0.8-2.8,0c-0.1-0.1-0.1-0.1-0.2-0.2c-0.5-0.6-0.5-1.5-0.1-2.1
						c0.1-0.3,0.2-0.6,0.5-0.8c0.7-0.7,1.8-0.7,2.6,0c0.3,0.3,0.4,0.6,0.5,0.9c0.1,0.2,0.2,0.5,0.2,0.7
						C877.6,675.4,877.4,676,876.9,676.4z"/>
					<path class="st8" d="M874,678.5c0,1.1-0.9,2-2,2c-0.2,0-0.5,0-0.7-0.1c-0.6-0.2-1-0.7-1.2-1.2c-0.2-0.3-0.3-0.6-0.3-1
						c0-1,0.8-1.8,1.8-1.8c0.3,0,0.6,0.1,0.9,0.2c0.2,0.1,0.4,0.2,0.6,0.3C873.7,677.2,874,677.8,874,678.5z"/>
					<path class="st8" d="M882,678.5c0,1.1,0.9,2,2,2c0.2,0,0.5,0,0.7-0.1c0.6-0.2,1-0.7,1.2-1.2c0.2-0.3,0.3-0.6,0.3-1
						c0-1-0.8-1.8-1.8-1.8c-0.3,0-0.6,0.1-0.9,0.2c-0.2,0.1-0.4,0.2-0.6,0.3C882.4,677.2,882,677.8,882,678.5z"/>
					<path class="st8" d="M884,685c0,2.2-1.8,4-4,4c-0.3,0-0.7,0-1-0.1c0,0,0,0,0,0c-0.3-0.1-0.6-0.1-1-0.1c-0.3,0-0.6,0-0.9,0.1
						c0,0,0,0,0,0c-0.1,0-0.2,0-0.3,0.1c0,0,0,0,0,0c-0.3,0.1-0.6,0.1-0.9,0.1c-2.2,0-4-1.8-4-4c0-0.2,0-0.3,0-0.5c0,0,0,0,0,0
						c0.1-0.9,0.5-1.7,1.1-2.3c0,0,0,0,0,0c0.1-0.1,0.1-0.1,0.2-0.2c0,0,0,0,0,0c0.4-0.4,0.7-0.8,0.9-1.3c0,0,0,0,0,0c0,0,0,0,0,0
						c0-0.1,0.1-0.2,0.1-0.3c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0.6-1.5,2-2.5,3.7-2.5c1.7,0,3.2,1.1,3.7,2.6c0,0,0,0,0,0
						c0.2,0.6,0.5,1.1,1,1.5c0,0,0,0,0,0c0.7,0.6,1.1,1.5,1.2,2.5C884,684.7,884,684.9,884,685z"/>
				</g>
			</g>
		</g>
		<g id="KIDS_PARK_00000152240926428626580480000014547246103161632701_">
			<g>
				<g>
					<path class="st8" d="M619.4,756.4c0,0,0-0.1,0-0.1C619.4,756.4,619.4,756.4,619.4,756.4z"/>
					<polygon class="st8" points="624,757.2 624,757.2 624,757.2 					"/>
					<path class="st8" d="M624,757.2l-0.1,0.3c-0.1,0.4-0.2,0.7-0.2,1.1c0,0.4,0.1,0.8,0.3,1.2l0,0.1l-0.1,0
						c-1.1,0.6-1.8,1.8-1.8,3.1c0,0.6,0.2,1.2,0.5,1.8l0,0.1l-0.1,0c-0.4,0.2-0.7,0.5-1,0.8c-0.6,0.3-1.2,0.4-1.2,0.4l0,0
						c-0.7,0.3-1.5,0.2-2.2-0.2c-0.6-0.4-1-1.1-1-1.9c0-0.8,0.5-1.6,1.2-2l0.6-0.3l-0.3-0.6c-0.2-0.4-0.3-0.7-0.3-1.1
						c0-0.8,0.4-1.6,1.2-2l0.5-0.3l-0.3-0.6c-0.1-0.2-0.2-0.5-0.2-0.7c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0,0,0,0
						c0-0.1,0-0.2,0-0.3"/>
					<path class="st8" d="M619.5,756C619.5,756,619.5,756,619.5,756c0.1,0,0.1,0,0.2,0C619.6,756,619.5,756,619.5,756z"/>
					<path class="st8" d="M623.6,758.6c0-0.4,0.1-0.8,0.2-1.1l0.1-0.3c0,0,0,0,0,0c-1.3-0.7-2.8-1.1-4.3-1.2c-0.1,0-0.1,0-0.2,0
						c0,0,0,0.2,0,0.3c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0,0.3,0.1,0.5,0.2,0.7l0.3,0.6l-0.5,0.3c-0.7,0.4-1.2,1.2-1.2,2
						c0,0.4,0.1,0.8,0.3,1.1l0.3,0.6l-0.6,0.3c-0.7,0.4-1.2,1.2-1.2,2c0,0.8,0.4,1.5,1,1.9c0.6,0.4,1.4,0.5,2.2,0.2l0,0
						c0.1,0,0.6-0.2,1.2-0.4c0.3-0.3,0.6-0.6,1-0.8l0.1,0l0-0.1c-0.3-0.5-0.5-1.1-0.5-1.8c0-1.3,0.7-2.5,1.8-3.1l0.1,0l0-0.1
						C623.7,759.4,623.6,759,623.6,758.6z"/>
					<path class="st8" d="M619.4,756.2C619.4,756.3,619.4,756.3,619.4,756.2C619.4,756.3,619.4,756.3,619.4,756.2
						C619.4,756.2,619.4,756.2,619.4,756.2z"/>
					<path class="st8" d="M630.2,767.4c0-3.8-1.8-7.2-4.7-9.3c-0.3-0.2-0.7-0.5-1-0.7c-0.1,0-0.2-0.1-0.2-0.1
						c-0.2,0.4-0.3,0.8-0.3,1.3c0,0.4,0.1,0.8,0.2,1.1l0.1,0.3l-0.3,0.2c-1,0.6-1.6,1.7-1.6,2.8c0,0.6,0.1,1.1,0.4,1.6l0.2,0.3
						l-0.3,0.2c-0.4,0.2-0.7,0.5-1,0.8c-0.1,0.1-0.2,0.3-0.3,0.4c-0.3,0.5-0.4,1.1-0.4,1.6c0,1.8,1.5,3.3,3.3,3.3
						c0.5,0,0.9-0.1,1.2-0.2c0,0,0,0,0,0v-2.3c-0.8-0.5-1.5-1.3-1.7-2.2l-0.2-0.6l1.8-0.5l0.2,0.5l0-0.5V764h2.3v5.8
						c0,0.2,0.4,0.6,0.8,0.6c1.1,0,1.4-0.5,1.4-0.5C630.1,769,630.2,768.3,630.2,767.4z"/>
				</g>
				<path class="st8" d="M625.7,766.7c-0.1-0.2-0.4-0.3-0.4-0.5l-0.1-0.3l-1.3,0.4l0.1,0.3c0.3,0.8,1,1.7,1.7,2v6.6l1.8,0v-11h-1.8
					V766.7z"/>
				<path class="st8" d="M609,775.2c-1.7-2.1-2.7-4.8-2.7-7.8c0-6.9,5.6-12.4,12.4-12.4s12.4,5.6,12.4,12.4c0,2.9-1,5.6-2.7,7.8h1.2
					c1.6-2.2,2.5-4.9,2.5-7.8c0-7.4-6-13.4-13.4-13.4c-7.4,0-13.4,6-13.4,13.4c0,2.9,0.9,5.6,2.5,7.8H609z"/>
				<g>
					<rect x="609.7" y="763.3" class="st8" width="1" height="11.8"/>
					<path class="st8" d="M625,775.2h-1v-3.5c0,0,0.3,0,0.5,0c0.2,0,0.5-0.1,0.5-0.1V775.2z"/>
					
						<rect x="611.5" y="763.4" transform="matrix(6.123234e-17 -1 1 6.123234e-17 -152.7338 1376.0228)" class="st8" width="0.2" height="2"/>
					
						<rect x="614.3" y="763.3" transform="matrix(6.123234e-17 -1 1 6.123234e-17 -149.9215 1378.8351)" class="st8" width="0.2" height="2.2"/>
					<path class="st8" d="M616.9,764.3c0,0,0,0,0,0.1c0,0.1,0,0.1,0,0.1h-0.6v-0.2H616.9z"/>
					<g>
						<rect x="612.9" y="763.9" class="st8" width="0.2" height="7.6"/>
						<rect x="615.8" y="763.9" class="st8" width="0.2" height="7.6"/>
					</g>
					<rect x="612.8" y="771.7" class="st8" width="3.2" height="0.6"/>
					<rect x="612.6" y="772.4" class="st8" width="3.8" height="0.4"/>
					<g>
						<path class="st8" d="M618.9,771.5h-0.2l0-4.9c0,0,0.1,0,0.1,0c0.1,0,0.1,0,0.1,0V771.5z"/>
						<path class="st8" d="M621.8,771.5h-0.2v-1.2c0,0,0.1,0.1,0.1,0.2c0,0,0.1,0.1,0.1,0.1V771.5z"/>
					</g>
					<rect x="618.6" y="771.7" class="st8" width="3.2" height="0.6"/>
					<rect x="618.3" y="772.4" class="st8" width="3.8" height="0.4"/>
				</g>
			</g>
		</g>
		<g id="CLUB_HIPICO_00000116916489147473604200000008703460123064790419_">
			<g>
				<path class="st8" d="M1189.3,187.5c-1.9-2.4-3.1-5.4-3.1-8.7c0-7.7,6.2-13.9,13.9-13.9c7.7,0,13.9,6.2,13.9,13.9
					c0,3.3-1.1,6.3-3.1,8.7h1.4c1.8-2.5,2.8-5.5,2.8-8.7c0-8.3-6.7-15.1-15.1-15.1s-15.1,6.7-15.1,15.1c0,3.3,1,6.3,2.8,8.7H1189.3z
					"/>
				<g>
					<path class="st8" d="M1203.6,169.8c0,0-5-1.7-9.6,2.4c-0.2,0.2,1.1-0.5,2.1-0.2c0,0-5.3,3.4-6.3,6.7c-0.1,0.4,0.7-0.8,2.2-1.1
						c0,0-1.6,1.7-1.7,4.6c0,0.7,0.1,2.8-0.3,5.2l13.8,0c-0.3-1.2-0.9-2.4-2.1-3.6c0,0-1.1-2.2,0-4.4c0.7-1.5,1.8-2.1,1.8-2.1
						s0.1,1.6,1,2c0.9,0.4,1.6,0.6,2.3,1.3c0.7,0.6,0.6,1.9,2,1.9c1.4,0,2.5-1.3,2.8-1.9c0.2-0.5,0.2-1.1-0.1-1.5
						c-0.3-0.4-1.4-1.8-2-3.1c-0.7-1.3-0.6-2.6-1-3.1c-0.5-0.5-1.1-1.2-1.1-1.2s0-0.8-0.1-1.6c0-0.3,0-0.6,0-0.9c0-0.6,0-1.1,0-1.4
						l-0.6,1.1l-0.5,0.8l-0.3,0.5l0-0.5l0.1-1l0.1-1.5L1203.6,169.8z"/>
				</g>
			</g>
		</g>
		<g id="CLUBPORTO_BLANCO_00000085250897564170152690000014275741009521033373_">
			<g>
				<g>
					<g>
						<path class="st8" d="M119.8,771.7c-11,0-19.9,8.9-19.9,19.9c0,4.3,1.4,8.2,3.7,11.5h1.9c-2.5-3.1-4-7.1-4-11.5
							c0-10.2,8.2-18.4,18.4-18.4s18.4,8.2,18.4,18.4c0,4.4-1.5,8.3-4,11.5h1.9c2.3-3.2,3.7-7.2,3.7-11.5
							C139.7,780.6,130.8,771.7,119.8,771.7z"/>
					</g>
				</g>
				<g>
					<polygon class="st8" points="119.2,778 112.4,784.7 113.1,785.3 119.2,779.2 128.7,788.7 122.3,795.1 120.1,792.9 119.4,793.5 
						122.3,796.4 129.9,788.7 					"/>
					<polygon class="st8" points="125.3,785.9 116,795.1 109.6,788.7 111.9,786.5 111.3,785.9 108.4,788.7 116,796.4 125.9,786.5 
											"/>
					<polygon class="st8" points="118.9,791.7 111.2,784 119.2,776.1 127.1,784 126.5,784.7 127.1,785.3 128.4,784 119.2,774.9 
						110,784 118.3,792.3 					"/>
					
						<rect x="118.2" y="781.5" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -518.4134 313.4635)" class="st8" width="1.9" height="1.9"/>
				</g>
				<g>
					<path class="st8" d="M115.1,802.9c-0.2,0.1-0.8,0.3-1.4,0.3c-1.5,0-2.6-0.9-2.6-2.7c0-1.7,1.1-2.8,2.8-2.8
						c0.7,0,1.1,0.1,1.3,0.2l-0.2,0.6c-0.3-0.1-0.6-0.2-1.1-0.2c-1.2,0-2.1,0.8-2.1,2.2c0,1.3,0.8,2.1,2,2.1c0.4,0,0.9-0.1,1.1-0.2
						L115.1,802.9z"/>
					<path class="st8" d="M116,797.7h0.7v4.7h2.3v0.6h-3V797.7z"/>
					<path class="st8" d="M120.1,797.7v3.2c0,1.2,0.5,1.7,1.2,1.7c0.8,0,1.3-0.5,1.3-1.7v-3.2h0.7v3.1c0,1.6-0.9,2.3-2,2.3
						c-1.1,0-1.9-0.6-1.9-2.3v-3.1H120.1z"/>
					<path class="st8" d="M124.5,797.8c0.3-0.1,0.8-0.1,1.3-0.1c0.7,0,1.1,0.1,1.5,0.4c0.3,0.2,0.5,0.5,0.5,0.9c0,0.5-0.3,1-0.9,1.2
						v0c0.5,0.1,1.1,0.5,1.1,1.3c0,0.5-0.2,0.8-0.5,1.1c-0.4,0.3-1,0.5-1.8,0.5c-0.5,0-0.8,0-1.1-0.1V797.8z M125.2,800h0.6
						c0.7,0,1.1-0.4,1.1-0.9c0-0.6-0.5-0.9-1.2-0.9c-0.3,0-0.5,0-0.6,0V800z M125.2,802.5c0.1,0,0.3,0,0.6,0c0.7,0,1.4-0.3,1.4-1
						c0-0.7-0.6-1-1.4-1h-0.6V802.5z"/>
				</g>
			</g>
		</g>
		<g id="ZEN_PARK_00000118361274865424605960000017684761610951532720_">
			<g>
				<path class="st8" d="M1127.6,171.5c-2-2.5-3.3-5.8-3.3-9.3c0-8.2,6.6-14.9,14.9-14.9c8.2,0,14.9,6.6,14.9,14.9
					c0,3.5-1.2,6.7-3.3,9.3h1.5c1.9-2.6,3-5.8,3-9.3c0-8.9-7.2-16-16-16s-16,7.2-16,16c0,3.5,1.1,6.7,3,9.3H1127.6z"/>
				<path class="st8" d="M1147,168.2c0.2,0.1,0.3,0.2,0.5,0.2c0.5,0.2,1,0.5,1,0.4c0-0.1-0.1-0.4-0.5-0.6s-0.4-0.2-0.3-0.2
					s0.2,0,0.2-0.3s0-0.6-0.1-0.7c-0.1-0.1-0.1,0-1.1,0c-0.3,0-0.5,0-0.7,0l-0.6-0.6c0,0-0.1-0.1-0.1-0.1c-0.1-0.2-0.2-0.4-0.4-0.6
					c-0.1-0.1-0.1-0.2-0.2-0.3c-0.1-0.2-0.2-0.3-0.3-0.5c-0.1-0.2-0.2-0.3-0.3-0.5c-0.1-0.2-0.3-0.4-0.4-0.6
					c-0.1-0.1-0.2-0.2-0.2-0.3c-0.1-0.1-0.3-0.3-0.4-0.4c-0.1-0.1-0.1-0.1-0.2-0.2c-0.2-0.2-0.1-0.6,0-0.8c0.1-0.3,0.1-0.7,0.1-1
					c0-0.3,0.1-0.6,0.1-0.9c0.1-0.5,0.2-1.1,0.2-1.7c0-0.1,0-0.3,0-0.4c0-0.1,0-0.2,0-0.3c0-0.1,0-0.2-0.1-0.3
					c-0.1-0.1-0.1-0.2-0.2-0.3c-0.3-0.4-0.8-0.5-1.3-0.6c-0.3-0.1-0.6-0.1-0.8-0.2c-0.5-0.2-0.7-0.5-0.8-0.9c0-0.1,0.1-0.2,0.1-0.4
					c0.1-0.2,0.3-0.7,0.4-1.2c0.1,0,0.2-0.2,0.2-0.3c0.1-0.2,0.2-0.5,0.2-0.7c0-0.1-0.1-0.2-0.2-0.2c0-0.2,0-0.5,0-0.7
					c0-1-0.7-1.8-1.5-2c0,0,0-0.1,0-0.1c0-0.2-0.2-0.3-0.3-0.3c-0.2,0-0.3,0.1-0.3,0.3c0,0,0,0.1,0,0.1c-0.8,0.2-1.5,0.9-1.5,2
					c0,0.2,0,0.5,0,0.7c-0.1,0-0.2,0.1-0.2,0.2c0,0.3,0.1,0.5,0.2,0.7c0.1,0.2,0.2,0.3,0.2,0.3c0.1,0.5,0.3,1,0.4,1.2
					c0.1,0.2,0.1,0.3,0.1,0.5c-0.1,0.3-0.2,0.6-0.6,0.8c-0.3,0.1-0.5,0.2-0.8,0.2c-0.5,0.1-0.9,0.2-1.3,0.6
					c-0.1,0.1-0.2,0.2-0.2,0.3c0,0.1-0.1,0.2-0.1,0.3c0,0.1,0,0.2,0,0.3c0,0.1,0,0.3,0,0.4c0,0.5,0.1,1.1,0.2,1.7
					c0,0.3,0.1,0.6,0.1,0.9c0,0.3,0,0.7,0.1,1c0,0.3,0.2,0.6,0,0.8c-0.1,0.1-0.1,0.1-0.2,0.2c-0.1,0.1-0.3,0.3-0.4,0.4
					c-0.1,0.1-0.2,0.2-0.2,0.3c-0.1,0.2-0.3,0.4-0.4,0.6c-0.1,0.2-0.2,0.3-0.3,0.5c-0.1,0.2-0.2,0.3-0.3,0.5
					c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.2-0.2,0.4-0.4,0.6c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.2,0.2-0.4,0.3c0,0-0.1,0-0.1,0l-0.1,0.2
					c0,0,0,0,0,0c-0.1,0.1,0,0.1-0.9,0.1c-0.9,0-1-0.1-1.1,0c-0.1,0.1-0.1,0.5-0.1,0.7s0.1,0.3,0.2,0.3s0.1,0.1-0.3,0.2
					c-0.4,0.2-0.5,0.5-0.5,0.6c0,0.1,0.5-0.3,1-0.4c0.5-0.2,1-0.5,1-0.4c0,0,0,0,0,0l0,0l0,0c0,0,0,0,0,0c0,0,0,0,0,0
					c0,0,0,0.1,0,0.1c0,0,0,0.1-0.1,0.1c0,0,0,0,0,0c0,0.1-0.1,0.1-0.1,0.2c-0.3,0.3-0.4,0.9-0.4,1.3c0.1,0.5,0.4,0.8,0.8,0.9
					c0.2,0.1,0.5,0.2,0.7,0.2c0.5,0.2,1.1,0.2,1.6,0.1c0,0,0,0,0.1,0c0.3,0,0.6-0.1,0.9-0.2c0.2-0.1,0.4-0.1,0.7-0.2
					c0.4-0.1,0.9-0.3,1.3-0.5c0.6-0.2,1.2-0.4,1.8-0.6c0.1-0.1,0.3-0.1,0.4-0.2c0,0,0,0,0.1,0c0.1,0.1,0.3,0.2,0.4,0.2
					c0.6,0.3,1.2,0.4,1.8,0.6c0.4,0.2,0.9,0.3,1.3,0.5c0.2,0.1,0.4,0.1,0.7,0.2c0.3,0.1,0.6,0.2,0.9,0.2c0,0,0,0,0.1,0
					c0.5,0,1.1,0,1.6-0.1c0.2-0.1,0.5-0.1,0.7-0.2c0.4-0.2,0.7-0.5,0.8-0.9c0.1-0.4-0.1-1-0.4-1.3c0-0.1-0.1-0.1-0.1-0.2
					c0,0,0,0,0,0C1147,168.3,1147,168.3,1147,168.2C1147,168.3,1147,168.3,1147,168.2C1147,168.3,1147,168.3,1147,168.2
					C1147,168.3,1147,168.3,1147,168.2C1147,168.3,1147,168.3,1147,168.2z M1130.6,167.9c-0.2,0-0.2-0.3-0.1-0.5c0,0,0.7,0,0.7,0.2
					S1130.8,167.9,1130.6,167.9z M1137,163.8c0,0.1-0.1,0.3-0.1,0.4c0,0.1-0.1,0.1-0.1,0.2c0,0,0,0.1,0,0.1
					c-0.1,0.1-0.1,0.2-0.1,0.3c0,0.1-0.1,0.1-0.1,0.2c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.2,0.3-0.3,0.5c0,0.1-0.1,0.2-0.1,0.2
					c0,0,0,0,0,0c0,0.1-0.1,0.1-0.1,0.2c0,0.1-0.1,0.2-0.1,0.2c0,0,0,0.1-0.1,0.1c-0.1,0.1-0.1,0.2-0.2,0.2c0,0-0.1,0.1-0.1,0.1
					c0,0-0.1,0-0.1,0c-0.1,0-0.1,0.1-0.2,0.1c0,0,0,0-0.1,0c-0.2,0-0.3,0.1-0.5,0.1c-0.1,0-0.1,0-0.2,0.1c-0.1,0-0.1,0-0.2,0.1
					c-0.1,0-0.1,0-0.2,0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c-0.1,0-0.2,0-0.2,0c0,0-0.1,0-0.1,0
					c-0.1,0-0.2,0.1-0.3,0.1c0,0,0,0,0,0c0,0,0,0,0-0.1c0.1-0.1,0.1-0.2,0.2-0.2c0.1-0.1,0.1-0.2,0.2-0.3c0,0,0.1-0.1,0.1-0.1
					c0,0,0.1-0.1,0.2-0.1c0.1,0,0.1-0.1,0.2-0.1c0.1-0.1,0.2-0.1,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.1
					c0.1-0.1,0.1-0.1,0.2-0.2c0.1-0.1,0.2-0.1,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2c0.1-0.1,0.2-0.2,0.3-0.3c0.1-0.1,0.2-0.2,0.3-0.4
					c0,0,0-0.1,0.1-0.1c0.1-0.1,0.1-0.1,0.2-0.2c0,0,0.1-0.1,0.1-0.1c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.1,0.1-0.3,0.2-0.4
					c0-0.1,0.1-0.2,0.1-0.2c0-0.1,0.1-0.3,0.1-0.4c0-0.1,0-0.2,0.1-0.2c0,0,0,0,0,0c0-0.1,0-0.2,0-0.3c0-0.1,0-0.1,0-0.2
					c0-0.1,0-0.1,0-0.2c0-0.1,0-0.1,0-0.2c0,0,0-0.1,0-0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0.1,0,0.2,0.1,0.3c0,0.1,0,0.2,0.1,0.4
					c0,0.1,0,0.2,0,0.3c0,0.1,0,0.1,0,0.2c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.3C1137,163.7,1137,163.7,1137,163.8z M1147.6,167.4
					c0,0.2,0.1,0.5-0.1,0.5s-0.5-0.1-0.5-0.3S1147.6,167.4,1147.6,167.4z M1145.5,167.6c-0.1,0-0.2-0.1-0.3-0.1c0,0-0.1,0-0.1,0
					c-0.1,0-0.2,0-0.2,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2-0.1
					c-0.1,0-0.1,0-0.2-0.1c-0.2,0-0.3-0.1-0.5-0.1c0,0-0.1,0-0.1,0c-0.1,0-0.1-0.1-0.2-0.1c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1-0.1
					c-0.1-0.1-0.1-0.2-0.2-0.2c0,0,0-0.1-0.1-0.1c0-0.1-0.1-0.2-0.1-0.2c0-0.1-0.1-0.1-0.1-0.2c0,0,0,0,0,0c0-0.1-0.1-0.2-0.1-0.2
					c-0.1-0.2-0.2-0.3-0.3-0.5c-0.1-0.1-0.1-0.2-0.2-0.3c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.1-0.1-0.2-0.1-0.3c0,0,0-0.1,0-0.1
					c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.1-0.1-0.3-0.1-0.4c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.3c0-0.1,0-0.2,0-0.3c0-0.1,0-0.1,0-0.2
					c0-0.1,0-0.2,0-0.3c0-0.1,0-0.2,0.1-0.4c0-0.1,0-0.2,0.1-0.3c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0.1,0,0.1c0,0.1,0,0.1,0,0.2
					c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2c0,0.1,0,0.2,0,0.3c0,0,0,0,0,0c0,0.1,0,0.2,0.1,0.2c0,0.1,0.1,0.3,0.1,0.4
					c0,0.1,0.1,0.2,0.1,0.2c0.1,0.1,0.2,0.3,0.2,0.4c0.1,0.1,0.1,0.2,0.2,0.3c0,0,0.1,0.1,0.1,0.1c0,0.1,0.1,0.1,0.2,0.2
					c0,0,0,0.1,0.1,0.1c0.1,0.1,0.2,0.3,0.3,0.4c0.1,0.1,0.2,0.2,0.3,0.3c0.1,0.1,0.1,0.1,0.2,0.2c0.1,0.1,0.1,0.1,0.2,0.2
					c0.1,0.1,0.1,0.1,0.2,0.2c0.1,0,0.1,0.1,0.2,0.1c0.1,0.1,0.1,0.1,0.2,0.2c0.1,0.1,0.2,0.1,0.2,0.2c0.1,0,0.1,0.1,0.2,0.1
					c0.1,0,0.1,0.1,0.2,0.1c0,0,0.1,0.1,0.1,0.1c0.1,0.1,0.1,0.2,0.2,0.3C1145.3,167.4,1145.4,167.5,1145.5,167.6
					C1145.5,167.6,1145.5,167.6,1145.5,167.6C1145.5,167.6,1145.5,167.6,1145.5,167.6z"/>
			</g>
		</g>
		<g id="PLAZA_NAUTICA_00000135656980705946625290000010802128080776581812_">
			<g>
				<path class="st8" d="M797.1,758.2c-1.8-2.1-2.9-4.8-2.9-7.8c0-6.9,5.8-12.4,13-12.4c7.2,0,13,5.6,13,12.4c0,2.9-1.1,5.6-2.9,7.8
					h1.3c1.6-2.2,2.6-4.9,2.6-7.8c0-7.4-6.3-13.4-14-13.4s-14,6-14,13.4c0,2.9,1,5.6,2.6,7.8H797.1z"/>
				<g>
					<path class="st8" d="M815.6,748.7c-0.2-0.3-0.7-0.4-1-0.2l-4.1,2.4l-0.1,0.1c-0.2,0.3-0.3,0.6-0.1,0.9c0.1,0.1,0.2,0.3,0.3,0.3
						c-0.1,0-0.2,0.1-0.2,0.1c-0.5,0.2-1,0.4-1.6,0.5v-3.6h1.2c0.2,0,0.4-0.1,0.5-0.2c0.2-0.1,0.2-0.4,0.2-0.5l0-1.6
						c0-0.2-0.1-0.4-0.2-0.6c-0.2-0.2-0.4-0.2-0.6-0.2h-1.1c0-0.1,0.1-0.3,0.1-0.4l0.6-0.8c0.3-0.3,1.1-1.3,0.9-2.7
						c-0.2-1.4-1.3-2.6-2.6-2.9c-0.8-0.2-1.7,0-2.5,0.5c-0.8,0.5-1.4,1.3-1.6,2.2c-0.3,1.5,0.7,2.7,0.9,3l0.5,0.7
						c0.1,0.1,0.2,0.3,0.2,0.5l-1.1,0c-0.2,0-0.3,0.1-0.4,0.1c-0.1,0.1-0.3,0.2-0.3,0.4l-0.1,0.1v1.7c0,0.3,0.1,0.5,0.3,0.7
						c0.1,0.1,0.3,0.1,0.5,0.1h1.2l0,3.6c-0.3,0-0.5-0.1-0.8-0.2c-0.4-0.1-0.7-0.2-1-0.4c0.1,0,0.2-0.1,0.3-0.2
						c0.3-0.3,0.2-0.8-0.1-1.1l-3.9-2.3c-0.2-0.2-0.5-0.3-0.8-0.2c-0.3,0.1-0.6,0.4-0.6,0.7l0.1,4.8l0.2,0.1
						c0.2,0.2,0.5,0.3,0.8,0.2c0.1,0,0.3-0.1,0.4-0.2l0.4-0.5c0.4,0.4,0.8,0.9,1.3,1.2c0.7,0.6,1.5,1,2.3,1.4c0.7,0.3,1.4,0.7,2,1.1
						c0.2,0.1,0.4,0.3,0.5,0.4c0.1,0.1,0.3,0.3,0.7,0.3c0,0,0,0,0,0c0.3,0,0.6-0.2,0.7-0.3c0.2-0.2,0.5-0.4,0.8-0.6
						c0.5-0.4,1.1-0.7,1.7-0.9c1-0.4,1.9-1,2.7-1.7c0.3-0.3,0.6-0.6,0.9-0.9l0.3,0.4c0.3,0.4,0.8,0.5,1.2,0.3
						c0.2-0.1,0.3-0.3,0.4-0.5l0-4.5C815.8,749.1,815.8,748.9,815.6,748.7z M805.4,742.6c0-0.9,0.8-1.6,1.7-1.6
						c0.9,0,1.7,0.7,1.7,1.6s-0.8,1.6-1.7,1.6C806.2,744.2,805.4,743.5,805.4,742.6z M814.8,753.1l-0.8-1l-0.4,0.5
						c-0.3,0.5-0.7,0.9-1.2,1.3c-0.7,0.6-1.6,1.2-2.5,1.6c-0.7,0.3-1.3,0.6-1.8,1c-0.3,0.2-0.6,0.4-0.9,0.7l0,0l0,0
						c-0.2-0.2-0.4-0.3-0.6-0.5c-0.7-0.5-1.4-0.9-2.2-1.3c-0.7-0.3-1.4-0.8-2.1-1.3c-0.6-0.5-1.1-1-1.5-1.6l-0.4-0.5l-0.8,1l0-3.5
						l3.2,1.9l-1.7,0l0.9,0.8c0.7,0.6,1.5,1.1,2.4,1.4c0.5,0.2,1,0.3,1.6,0.3l0.5,0l0-5.6h-2v-1.2h2l0-0.5c0-0.2,0-0.4-0.1-0.7
						c-0.1-0.3-0.2-0.5-0.3-0.8l-0.3-0.4c0.4,0.2,0.9,0.4,1.4,0.4c0.5,0,1-0.2,1.4-0.4l-0.4,0.6c-0.1,0.2-0.2,0.5-0.3,0.8
						c0,0.2-0.1,0.4,0,0.6l0,0.4h1.9l0,1.2h-2v5.6l0.5,0c0.9-0.1,1.7-0.3,2.5-0.6c0.6-0.3,1.1-0.6,1.5-1l1-0.8h-1.8l3.2-1.9V753.1z"
						/>
				</g>
			</g>
		</g>
		<g id="AREA_COMERCIAL_00000128461043935339085220000003150964661152719767_">
			<g>
				<g>
					<path class="st8" d="M400.4,878.4c-1.9-2.4-3-5.4-2.7-8.7c0.4-6.3,5.7-11.5,12.1-11.8c7.2-0.3,13.1,5.5,13.1,12.6
						c0,3-1,5.7-2.8,7.9h1.3c1.8-2.6,2.8-5.8,2.5-9.2c-0.6-6.7-6.2-12-12.9-12.3c-7.8-0.4-14.3,5.9-14.3,13.6c0,2.9,0.9,5.7,2.5,7.9
						H400.4z"/>
				</g>
				<path class="st8" d="M418.3,864.4c0-0.3-0.3-0.5-0.6-0.5h-3.1v-0.8c0-0.1,0-0.1,0-0.2c-0.1-1.9-1.7-3.5-3.6-3.5
					c-1.4,0-2.6,0.8-3.2,2c-1,0.5-1.8,1.4-2,2.5h-1.5c-0.3,0-0.5,0.2-0.6,0.5l0,0.5c0,0,1.3,0,1.4,0h0.6v0.6h-3.1
					c-0.3,0-0.5,0.2-0.6,0.5l-0.9,11.7c0,0.3,0.2,0.6,0.6,0.6h15.2c0.3,0,0.6-0.3,0.6-0.6l-0.1-1h1.2c0.3,0,0.6-0.3,0.6-0.6
					L418.3,864.4z M411.9,860.7c1.2,0.3,1.9,1.5,1.9,2.7v0.8h-0.9c-0.3-1.7-1.7-3-3.5-3.1C410.1,860.6,411,860.4,411.9,860.7z
					 M408.3,863.3c0-0.4,0.1-0.9,0.3-1.2c0.2-0.1,0.5-0.1,0.7-0.1c1.3,0,2.4,0.9,2.7,2.2h-3.7V863.3z M407.4,862.7c0,0,0,0.1,0,0.1
					c0,0.1,0,0.1,0,0.2v0.8h-0.7C406.9,863.5,407.1,863.1,407.4,862.7z M406.6,864.9h5.4v0.6h-5.4V864.9z M402.9,867
					c0-0.3,0.2-0.4,0.5-0.4h2.3v2c-0.2,0.2-0.4,0.4-0.4,0.7c0,0.5,0.4,0.8,0.8,0.8c0.5,0,0.8-0.4,0.8-0.8c0-0.3-0.2-0.6-0.4-0.7v-2
					h5.4v2c-0.2,0.1-0.4,0.4-0.4,0.7c0,0.5,0.4,0.8,0.8,0.8c0.5,0,0.8-0.4,0.8-0.8c0-0.3-0.2-0.6-0.4-0.7v-2h2.3
					c0.3,0,0.5,0.2,0.5,0.4l0.7,8.6h-14.2L402.9,867z M416.1,877.4h-13.4c-0.3,0-0.5-0.2-0.5-0.5l0-0.3h14.4l0,0.3
					C416.6,877.1,416.4,877.4,416.1,877.4z M416.6,866.1c0-0.3-0.3-0.5-0.6-0.5H413v-0.6h4c0.3,0,0.5,0.2,0.5,0.4l0.7,8.6h-1
					L416.6,866.1z M417.8,875.7h-0.4l-0.1-0.8h1l0,0.3C418.3,875.5,418.1,875.7,417.8,875.7z"/>
			</g>
		</g>
		<g id="AREA_COMERCIAL_00000060718739465087909210000015453126936679324081_">
			<g>
				<g>
					<path class="st8" d="M477.3,849.1c-1.9-2.4-3-5.4-2.7-8.7c0.4-6.3,5.7-11.5,12.1-11.8c7.2-0.3,13.1,5.5,13.1,12.6
						c0,3-1,5.7-2.8,7.9h1.3c1.8-2.6,2.8-5.8,2.5-9.2c-0.6-6.7-6.2-12-12.9-12.3c-7.8-0.4-14.3,5.9-14.3,13.6c0,2.9,0.9,5.7,2.5,7.9
						H477.3z"/>
				</g>
				<path class="st8" d="M495.3,835.2c0-0.3-0.3-0.5-0.6-0.5h-3.1v-0.8c0-0.1,0-0.1,0-0.2c-0.1-1.9-1.7-3.5-3.6-3.5
					c-1.4,0-2.6,0.8-3.2,2c-1,0.5-1.8,1.4-2,2.5h-1.5c-0.3,0-0.5,0.2-0.6,0.5l0,0.5c0,0,1.3,0,1.4,0h0.6v0.6h-3.1
					c-0.3,0-0.5,0.2-0.6,0.5l-0.9,11.7c0,0.3,0.2,0.6,0.6,0.6h15.2c0.3,0,0.6-0.3,0.6-0.6l-0.1-1h1.2c0.3,0,0.6-0.3,0.6-0.6
					L495.3,835.2z M488.8,831.4c1.2,0.3,1.9,1.5,1.9,2.7v0.8h-0.9c-0.3-1.7-1.7-3-3.5-3.1C487.1,831.4,487.9,831.2,488.8,831.4z
					 M485.3,834c0-0.4,0.1-0.9,0.3-1.2c0.2-0.1,0.5-0.1,0.7-0.1c1.3,0,2.4,0.9,2.7,2.2h-3.7V834z M484.4,833.5c0,0,0,0.1,0,0.1
					c0,0.1,0,0.1,0,0.2v0.8h-0.7C483.9,834.2,484.1,833.8,484.4,833.5z M483.6,835.7h5.4v0.6h-5.4V835.7z M479.9,837.7
					c0-0.3,0.2-0.4,0.5-0.4h2.3v2c-0.2,0.2-0.4,0.4-0.4,0.7c0,0.5,0.4,0.8,0.8,0.8c0.5,0,0.8-0.4,0.8-0.8c0-0.3-0.2-0.6-0.4-0.7v-2
					h5.4v2c-0.2,0.1-0.4,0.4-0.4,0.7c0,0.5,0.4,0.8,0.8,0.8c0.5,0,0.8-0.4,0.8-0.8c0-0.3-0.2-0.6-0.4-0.7v-2h2.3
					c0.3,0,0.5,0.2,0.5,0.4l0.7,8.6h-14.2L479.9,837.7z M493.1,848.1h-13.4c-0.3,0-0.5-0.2-0.5-0.5l0-0.3h14.4l0,0.3
					C493.6,847.9,493.3,848.1,493.1,848.1z M493.6,836.8c0-0.3-0.3-0.5-0.6-0.5h-3.1v-0.6h4c0.3,0,0.5,0.2,0.5,0.4l0.7,8.6h-1
					L493.6,836.8z M494.8,846.4h-0.4l-0.1-0.8h1l0,0.3C495.3,846.2,495,846.4,494.8,846.4z"/>
			</g>
		</g>
		<g id="AREA_COMERCIAL_00000103223907223370112880000004361841875488966292_">
			<g>
				<g>
					<path class="st8" d="M843.4,619.7c-1.9-2.4-3-5.4-2.7-8.7c0.4-6.3,5.7-11.5,12.1-11.8c7.2-0.3,13.1,5.5,13.1,12.6
						c0,3-1,5.7-2.8,7.9h1.3c1.8-2.6,2.8-5.8,2.5-9.2c-0.6-6.7-6.2-12-12.9-12.3c-7.8-0.4-14.3,5.9-14.3,13.6c0,2.9,0.9,5.7,2.5,7.9
						H843.4z"/>
				</g>
				<path class="st8" d="M861.3,605.8c0-0.3-0.3-0.5-0.6-0.5h-3.1v-0.8c0-0.1,0-0.1,0-0.2c-0.1-1.9-1.7-3.5-3.6-3.5
					c-1.4,0-2.6,0.8-3.2,2c-1,0.5-1.8,1.4-2,2.5h-1.5c-0.3,0-0.5,0.2-0.6,0.5l0,0.5c0,0,1.3,0,1.4,0h0.6v0.6h-3.1
					c-0.3,0-0.5,0.2-0.6,0.5l-0.9,11.7c0,0.3,0.2,0.6,0.6,0.6H860c0.3,0,0.6-0.3,0.6-0.6l-0.1-1h1.2c0.3,0,0.6-0.3,0.6-0.6
					L861.3,605.8z M854.9,602c1.2,0.3,1.9,1.5,1.9,2.7v0.8h-0.9c-0.3-1.7-1.7-3-3.5-3.1C853.1,601.9,854,601.7,854.9,602z
					 M851.3,604.6c0-0.4,0.1-0.9,0.3-1.2c0.2-0.1,0.5-0.1,0.7-0.1c1.3,0,2.4,0.9,2.7,2.2h-3.7V604.6z M850.5,604.1c0,0,0,0.1,0,0.1
					c0,0.1,0,0.1,0,0.2v0.8h-0.7C849.9,604.8,850.1,604.4,850.5,604.1z M849.6,606.2h5.4v0.6h-5.4V606.2z M845.9,608.3
					c0-0.3,0.2-0.4,0.5-0.4h2.3v2c-0.2,0.2-0.4,0.4-0.4,0.7c0,0.5,0.4,0.8,0.8,0.8s0.8-0.4,0.8-0.8c0-0.3-0.2-0.6-0.4-0.7v-2h5.4v2
					c-0.2,0.1-0.4,0.4-0.4,0.7c0,0.5,0.4,0.8,0.8,0.8c0.5,0,0.8-0.4,0.8-0.8c0-0.3-0.2-0.6-0.4-0.7v-2h2.3c0.3,0,0.5,0.2,0.5,0.4
					l0.7,8.6h-14.2L845.9,608.3z M859.1,618.7h-13.4c-0.3,0-0.5-0.2-0.5-0.5l0-0.3h14.4l0,0.3C859.6,618.4,859.4,618.7,859.1,618.7z
					 M859.6,607.4c0-0.3-0.3-0.5-0.6-0.5H856v-0.6h4c0.3,0,0.5,0.2,0.5,0.4l0.7,8.6h-1L859.6,607.4z M860.8,617h-0.4l-0.1-0.8h1
					l0,0.3C861.3,616.8,861.1,617,860.8,617z"/>
			</g>
		</g>
		<g id="AREA_COMERCIAL_00000114787637514439283880000018352743579358399137_">
			<g>
				<g>
					<path class="st8" d="M806,634.7c-1.9-2.4-3-5.4-2.7-8.7c0.4-6.3,5.7-11.5,12.1-11.8c7.2-0.3,13.1,5.5,13.1,12.6
						c0,3-1,5.7-2.8,7.9h1.3c1.8-2.6,2.8-5.8,2.5-9.2c-0.6-6.7-6.2-12-12.9-12.3c-7.8-0.4-14.3,5.9-14.3,13.6c0,2.9,0.9,5.7,2.5,7.9
						H806z"/>
				</g>
				<path class="st8" d="M824,620.8c0-0.3-0.3-0.5-0.6-0.5h-3.1v-0.8c0-0.1,0-0.1,0-0.2c-0.1-1.9-1.7-3.5-3.6-3.5
					c-1.4,0-2.6,0.8-3.2,2c-1,0.5-1.8,1.4-2,2.5H810c-0.3,0-0.5,0.2-0.6,0.5l0,0.5c0,0,1.3,0,1.4,0h0.6v0.6h-3.1
					c-0.3,0-0.5,0.2-0.6,0.5l-0.9,11.7c0,0.3,0.2,0.6,0.6,0.6h15.2c0.3,0,0.6-0.3,0.6-0.6l-0.1-1h1.2c0.3,0,0.6-0.3,0.6-0.6
					L824,620.8z M817.5,617.1c1.2,0.3,1.9,1.5,1.9,2.7v0.8h-0.9c-0.3-1.7-1.7-3-3.5-3.1C815.8,617,816.6,616.8,817.5,617.1z
					 M814,619.7c0-0.4,0.1-0.9,0.3-1.2c0.2-0.1,0.5-0.1,0.7-0.1c1.3,0,2.4,0.9,2.7,2.2H814V619.7z M813.1,619.1c0,0,0,0.1,0,0.1
					c0,0.1,0,0.1,0,0.2v0.8h-0.7C812.5,619.8,812.8,619.4,813.1,619.1z M812.3,621.3h5.4v0.6h-5.4V621.3z M808.6,623.4
					c0-0.3,0.2-0.4,0.5-0.4h2.3v2c-0.2,0.2-0.4,0.4-0.4,0.7c0,0.5,0.4,0.8,0.8,0.8s0.8-0.4,0.8-0.8c0-0.3-0.2-0.6-0.4-0.7v-2h5.4v2
					c-0.2,0.1-0.4,0.4-0.4,0.7c0,0.5,0.4,0.8,0.8,0.8c0.5,0,0.8-0.4,0.8-0.8c0-0.3-0.2-0.6-0.4-0.7v-2h2.3c0.3,0,0.5,0.2,0.5,0.4
					l0.7,8.6h-14.2L808.6,623.4z M821.7,633.7h-13.4c-0.3,0-0.5-0.2-0.5-0.5l0-0.3h14.4l0,0.3C822.3,633.5,822,633.7,821.7,633.7z
					 M822.3,622.5c0-0.3-0.3-0.5-0.6-0.5h-3.1v-0.6h4c0.3,0,0.5,0.2,0.5,0.4l0.7,8.6h-1L822.3,622.5z M823.4,632.1H823l-0.1-0.8h1
					l0,0.3C824,631.8,823.7,632.1,823.4,632.1z"/>
			</g>
		</g>
		<g id="FITNESS_PARK_00000127009305351169799430000010695219808250533526_">
			<g>
				<g>
					<g>
						<path class="st8" d="M1105.7,455c-8.2,0.4-15.1,6.9-15.8,15.1c-0.4,4.2,0.8,8.1,3,11.3h1.6c-2.3-2.9-3.6-6.6-3.4-10.7
							c0.5-7.8,7-14.1,14.8-14.4c8.8-0.4,16.1,6.7,16.1,15.4c0,3.7-1.3,7-3.4,9.7h1.6c1.9-2.7,3.1-6.1,3.1-9.7
							C1123.1,462.2,1115.2,454.6,1105.7,455z"/>
					</g>
				</g>
				<g>
					<path class="st8" d="M1100.8,481.4h-0.6c-0.8,0-1.5-0.7-1.5-1.5v-13.1c0-0.8,0.7-1.5,1.5-1.5h0.6c0.8,0,1.5,0.7,1.5,1.5v13.1
						C1102.3,480.7,1101.6,481.4,1100.8,481.4z"/>
					<path class="st8" d="M1096.5,479.8h-0.5c-0.7,0-1.2-0.6-1.2-1.2v-10.6c0-0.7,0.6-1.2,1.2-1.2h0.5c0.7,0,1.2,0.6,1.2,1.2v10.6
						C1097.7,479.3,1097.2,479.8,1096.5,479.8z"/>
					<path class="st8" d="M1094.6,475.4h-0.4c-0.6,0-1-0.5-1-1v-2.1c0-0.6,0.5-1,1-1h0.4c0.6,0,1,0.5,1,1v2.1
						C1095.6,474.9,1095.1,475.4,1094.6,475.4z"/>
					<path class="st8" d="M1112.1,465.2h0.6c0.8,0,1.5,0.7,1.5,1.5v13.1c0,0.8-0.7,1.5-1.5,1.5h-0.6c-0.8,0-1.5-0.7-1.5-1.5v-13.1
						C1110.6,465.9,1111.3,465.2,1112.1,465.2z"/>
					<path class="st8" d="M1116.4,466.7h0.5c0.7,0,1.2,0.6,1.2,1.2v10.6c0,0.7-0.6,1.2-1.2,1.2h-0.5c-0.7,0-1.2-0.6-1.2-1.2v-10.6
						C1115.2,467.3,1115.7,466.7,1116.4,466.7z"/>
					<path class="st8" d="M1118.3,471.2h0.4c0.6,0,1,0.5,1,1v2.1c0,0.6-0.5,1-1,1h-0.4c-0.6,0-1-0.5-1-1v-2.1
						C1117.3,471.6,1117.8,471.2,1118.3,471.2z"/>
					<path class="st8" d="M1111.6,475h-10.4c-0.8,0-1.4-0.6-1.4-1.4V473c0-0.8,0.6-1.4,1.4-1.4h10.4c0.8,0,1.4,0.6,1.4,1.4v0.6
						C1113,474.3,1112.4,475,1111.6,475z"/>
				</g>
			</g>
		</g>
		<g id="SUPERMERCADO_00000017478247522434199320000017236472933333668017_">
			<g>
				<path class="st8" d="M47.7,794.7c-1,0-1.9,0.8-1.9,1.8c0,1,0.8,1.8,1.9,1.8c1,0,1.9-0.8,1.9-1.8
					C49.6,795.5,48.8,794.7,47.7,794.7z M47.7,797.7c-0.7,0-1.2-0.5-1.2-1.2c0-0.6,0.5-1.2,1.2-1.2c0.7,0,1.2,0.5,1.2,1.2
					C49,797.2,48.4,797.7,47.7,797.7z"/>
				<path class="st8" d="M58.4,794.7c-1,0-1.9,0.8-1.9,1.8c0,1,0.8,1.8,1.9,1.8s1.9-0.8,1.9-1.8C60.2,795.5,59.4,794.7,58.4,794.7z
					 M58.4,797.7c-0.7,0-1.2-0.5-1.2-1.2c0-0.6,0.5-1.2,1.2-1.2c0.7,0,1.2,0.5,1.2,1.2C59.6,797.2,59,797.7,58.4,797.7z"/>
				<path class="st8" d="M61.7,780.5L61.7,780.5C61.6,780.5,61.6,780.5,61.7,780.5L61.7,780.5z"/>
				<path class="st8" d="M62.5,781.5L62.5,781.5C62.5,781.5,62.5,781.5,62.5,781.5L62.5,781.5z"/>
				<path class="st8" d="M61.7,780.5C61.6,780.5,61.6,780.5,61.7,780.5l-16,0l-0.8-2.4c-0.1-0.4-0.4-0.7-0.9-0.7v0h-3v0
					c-0.5,0-0.9,0.4-0.9,0.9c0,0.5,0.4,0.9,0.9,0.9c0,0,0.1,0,0.1,0h2.1l3.5,11.2c-0.5,0.5-0.8,1.2-0.6,2c0.2,0.9,1,1.6,2,1.6
					c0.2,0,0.3,0,0.5,0l0,0l11.3-0.5v0c0.4,0,0.7-0.3,0.7-0.7c0-0.4-0.3-0.7-0.8-0.7c0,0-0.1,0-0.1,0l-9.4,0.4l-1,0l-1,0
					c0,0-0.1,0-0.1,0c0,0,0,0,0,0c-0.3,0-0.5-0.3-0.5-0.5c0-0.2,0.1-0.4,0.3-0.5h0c0.1,0,0.2-0.1,0.3-0.1c0,0,0.7-0.1,0.7-0.1
					l1.3-0.2l9.8-1.1v0c0.4,0,0.7-0.3,0.8-0.7h0l1.6-7.9c0,0,0,0,0,0h0c0,0,0-0.1,0-0.2C62.6,780.9,62.2,780.5,61.7,780.5z
					 M50.8,789.4l-2.3,0.3l-1.1-3.7h3.4V789.4z M50.8,785.2h-3.7l-0.9-2.9h4.6V785.2z M55.5,788.9l-3.9,0.5V786h3.9V788.9z
					 M55.5,785.2h-3.9v-2.9h3.9V785.2z M59.3,788.4l-2.9,0.3V786h3.3L59.3,788.4z M59.9,785.2h-3.5v-2.9h4.1L59.9,785.2z"/>
			</g>
			<g>
				<path class="st8" d="M49.8,771.6c-8.6,0.4-15.8,7-16.6,15.3c-0.4,4.3,0.8,8.2,3.2,11.4h1.6c-2.4-2.9-3.8-6.7-3.5-10.8
					c0.5-7.9,7.3-14.3,15.5-14.6c9.3-0.4,16.9,6.8,16.9,15.6c0,3.7-1.3,7.1-3.6,9.8h1.6c2-2.8,3.2-6.1,3.2-9.8
					C68.1,778.9,59.8,771.2,49.8,771.6z"/>
			</g>
		</g>
	</g>
	<g>
		<text transform="matrix(1 0 0 1 1136.5977 547.8555)" class="st8 st9 st10">BOSQUE 1</text>
		<text transform="matrix(1 0 0 1 1228.9268 547.8555)" class="st8 st9 st10">BOSQUE 2</text>
		<text transform="matrix(1 0 0 1 1202.501 453.5854)" class="st8 st9 st10">BOSQUE 3</text>
		<text transform="matrix(1 0 0 1 1283.2949 228.1065)" class="st8 st9 st10">BOSQUE 4</text>
		<text transform="matrix(1 0 0 1 467.918 925.5161)" class="st8 st9 st10">DESIERTO 1</text>
		<text transform="matrix(1 0 0 1 522.6729 873.3374)" class="st8 st9 st10">DESIERTO 2</text>
		<text transform="matrix(1 0 0 1 589.3374 838.855)" class="st8 st9 st10">DESIERTO 3</text>
		<text transform="matrix(1 0 0 1 668.8525 811.1216)" class="st8 st9 st10">DESIERTO 4</text>
		<text transform="matrix(1 0 0 1 197.5845 893.729)" class="st8 st9 st10">ESTEPA 1</text>
		<text transform="matrix(1 0 0 1 333.2656 910.0747)" class="st8 st9 st10">ESTEPA 2</text>
		<text transform="matrix(1 0 0 1 407.0942 969.188)" class="st8 st9 st10">ESTEPA 3</text>
		<text transform="matrix(1 0 0 1 893.4648 763.1187)" class="st8 st9 st10">LAGO 2</text>
		<text transform="matrix(1 0 0 1 789.3623 860.9146)" class="st8 st9 st10">LAGO 1</text>
		<text transform="matrix(1 0 0 1 1042.3193 590.5479)" class="st8 st9 st10">MANGLAR 1</text>
		<text transform="matrix(1 0 0 1 901.1387 585.2563)" class="st8 st9 st10">MANGLAR 2</text>
		<text transform="matrix(1 0 0 1 368.0356 829.645)" class="st8 st9 st10">PÁRAMO 1</text>
		<text transform="matrix(1 0 0 1 498.1104 801.4282)" class="st8 st9 st10">PÁRAMO 2</text>
		<text transform="matrix(1 0 0 1 553.0469 653.6011)" class="st8 st9 st10">PÁRAMO 3</text>
		<g>
			<text transform="matrix(1 0 0 1 180.2627 931.2896)" class="st8 st11 st12">ESTEPA</text>
			<text transform="matrix(1 0 0 1 321.8779 944.7046)" class="st8 st11 st12">ESTEPA</text>
			<text transform="matrix(1 0 0 1 159.8252 814.5425)" class="st8 st11 st12">PÁRAMO</text>
			<text transform="matrix(1 0 0 1 338.1445 817.1021)" class="st8 st11 st12">PÁRAMO</text>
			<text transform="matrix(1 0 0 1 547.3965 898.4995)" class="st8 st11 st12">DESIERTO</text>
			<text transform="matrix(1 0 0 1 813.9863 811.061)" class="st8 st11 st12">LAGO</text>
			<text transform="matrix(1 0 0 1 549.8022 681.5103)" class="st8 st11 st12">PÁRAMO</text>
			<text transform="matrix(1 0 0 1 1035.2256 729.2954)" class="st8 st11 st12">TAIGA</text>
			<text transform="matrix(1 0 0 1 1198.667 318.4517)" class="st8 st11 st12">SABANA</text>
			<text transform="matrix(1 0 0 1 1265.9688 171.7095)" class="st8 st11 st12">BOSQUE  </text>
			<text transform="matrix(1 0 0 1 955.292 575.4917)" class="st8 st11 st12">MANGLAR</text>
			<text transform="matrix(1 0 0 1 1042.8154 281.3843)" class="st8 st11 st12">TUNDRA</text>
			<text transform="matrix(1 0 0 1 988.5127 402.8872)" class="st8 st11 st12">SELVA</text>
			<text transform="matrix(1 0 0 1 1173.2188 509.7935)" class="st8 st11 st12">BOSQUE</text>
			<text transform="matrix(1 0 0 1 720.5605 566.1753)" class="st8 st11 st12">ARRECIFE</text>
		</g>
		<text transform="matrix(1 0 0 1 949.416 425.7842)" class="st8 st9 st10"> SELVA 1</text>
		<text transform="matrix(1 0 0 1 940.2871 282.8574)" class="st8 st9 st10"> SELVA 2</text>
		<text transform="matrix(1 0 0 1 1018.7734 169.9644)" class="st8 st9 st10"> SELVA 4</text>
		<text transform="matrix(1 0 0 1 1091.8828 380.7515)" class="st8 st9 st10"> SELVA 3</text>
	</g>
</g>
</svg>
                </div>
            </div>
        </div>
        <div class="amenidades pb-blue3-bg py">
            <div class="row">
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/forest.svg">
                    <h5>Áreas Ecológicas</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/park.svg">
                    <h5>Kids Park</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/lake.svg">
                    <h5>Lago</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/horse.svg">
                    <h5>Club Hípico</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/shop.svg">
                    <h5>Área Comercial</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/pet.svg">
                    <h5>Pet Friendly Park</h5>
                </div>

                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/portto.svg">
                    <h5>Club Portto Blanco</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/book.svg">
                    <h5>Escuela</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/fitness.svg">
                    <h5>Fitness Park</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/zen.svg">
                    <h5>Zen Park</h5>
                </div>

                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/sport.svg">
                    <h5>Sport Zone</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/market.svg">
                    <h5>Supermercado</h5>
                </div>
                <div class="col s12 m12 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/nautica.svg">
                    <h5>Plaza Náutica Portto Blanco</h5>
                </div>
            </div>

        </div>
    </div>
    <!--De Galeria de vr -->
    <div class="section2">
        <div class="master">
            <div class="row">
                <div class="col s12">
                    <h2 class="headline-2 pb-blue-text center-align"><span class="futura-light">Vive La Experiencia Virtual de Nuestras Amenidades</h2>
                </div>
            </div>
        </div>
        <div class=" vr pb-blue3-bg py">
            <div class="row">
                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer" href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHmQ2UA/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img  src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_PlazaNautica_Vr.jpg">
                        <h5 >Plaza Náutica Portto Blanco</h5>
                    </a>
                </div>
                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer"  href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHnXD2A/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img  src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_Pet-park_Vr.jpg">
                        <h5>Pet Friendly Park</h5>
                    </a>
                </div>
                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer" href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHncOPc/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img  src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_KidsPark_Vr.jpg">
                        <h5 >Kids Park</h5>
                    </a>
                </div>
                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer" href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHndhQc/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img  src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_ZenPark_Vr.jpg">
                        <h5>Zen Park</h5>
                    </a>
                </div>

                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer" href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHngp6g/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img  src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_Gym_Vr.jpg">
                        <h5>Fitness Park</h5>
                    </a>
                </div>
                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer" href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHnh50o/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img     src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_ClubPorttoBlanco_Vr.jpg">
                        <h5>Club Portto Blanco</h5>
                    </a>
                </div>
                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer" href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHnitVw/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img  src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_ClubHipico_Vr.jpg">
                        <h5>Club Hípico</h5>
                    </a>
                </div>
                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer" href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHnkmJM/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img  src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_Acceso_Vr.jpg">
                        <h5>Acceso Principal</h5>
                    </a>
                </div>
                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer" href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHnjtkM/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img  src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_AccesoCasas_Vr.jpg">
                        <h5> Acceso a Casa-Condominio</h5>
                    </a>
                </div>
            <!--vr items -->
            </div>

        </div>
    </div>

<!-- Fin De Galeria de vr -->
    
    
    
    <div class="py">
        <h2 class="headline-2 center-align pb-blue-text futura-light">Lotes residenciales diseñados para las necesidades de nuestros clientes más exigentes</h2>
        <div class="row center py">
            <div class="col s12">
                <img class="plano-lote" src="media/assets/img/habitta/portto-blanco/lotes/lotes-abc-dark.svg">
            </div>
        </div>
        <div class="row center py">
            <div class="col s12">
                <img class="plano-lote" src="media/assets/img/habitta/portto-blanco/lotes/lotes-def-dark.svg">
            </div>
        </div>
        <div class="row center py">
            <div class="col s12">
                <img class="plano-lote" src="media/assets/img/habitta/portto-blanco/lotes/lotes-ghi-dark.svg">
            </div>
        </div>
    </div>

    <div class="py pb-blue3-bg">
        <div class="container">
            <!--h2 class="headline-2 pb-light-text">PLANOS</h2>
            <div class="row center py">
                <div class="col s12">
                    <h4 class="pb-light-text">ESTEPA</h4>
                </div>
                <div class="col s12">
                    <img src="media/assets/img/habitta/portto-blanco/planos/estepa.png" style="width: 100%;">
                </div>
                <div class="col s12">
                    <img src="media/assets/img/habitta/portto-blanco/planos/estepa-inf.svg" style="margin-top: 20px;">
                </div>
            </div>
            <div class="row center py">
                <div class="col s12">
                    <h4 class="pb-light-text">DESIERTO</h4>
                </div>
                <div class="col s12">
                    <img src="media/assets/img/habitta/portto-blanco/planos/desierto.png" style="width: 100%;">
                </div>
                <div class="col s12">
                    <img src="media/assets/img/habitta/portto-blanco/planos/desierto-inf.svg" style="margin-top: 20px;">
                </div>
            </div>
            <div class="row center py">
                <div class="col s12">
                    <h4 class="pb-light-text">ARRECIFE</h4>
                </div>
                <div class="col s12">
                    <img src="media/assets/img/habitta/portto-blanco/planos/arrecife.png" style="width: 100%;">
                </div>
                <div class="col s12">
                    <img src="media/assets/img/habitta/portto-blanco/planos/arrecife-inf.svg" style="margin-top: 20px;">
                </div>
            </div-->

            <h2 class="headline-2 py pb-light-text">FINANCIAMIENTO</h2>
             <div class="row py">
                <div class="col s12">
                    <img src="media/assets/img/habitta/portto-blanco/financiamiento.svg" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>

    <footer class="page-footer pb-gray-bg" ng-controller="mainController as main">
        <div class="container">
            <div class="row py-80">

                <div class="col s12">
                    <h4 class="pb-20">¿Tienes algún proyecto en mente? Tomemos un café</h4>
                </div>
                <form class="col s12 m7" ng-submit="main.sendEmail()">
                    <div class="input-field col s12">
                        <input id="first_name" type="text" name="name" class="validate" autocomplete="off" required ng-model="main.name">
                        <label for="first_name">¿Cómo te llamas?</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="email" type="email" name="email" class="validate" autocomplete="off" required ng-model="main.email">
                        <label for="email">Compartenos tu Correo electrónico @</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="tel" type="tel" name="phone" class="validate" autocomplete="off" ng-model="main.phone">
                        <label for="tel">Si lo prefieres, dejanos tu Télefono (opcional)</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="textarea1" name="details" class="materialize-textarea" autocomplete="off" maxlength="120" required ng-model="main.message"></textarea>
                        <label for="textarea1">¡Cuéntanos sobre tu proyecto!</label>
                    </div>
                    <button class="waves-effect waves-teal btn right w100" type="submit">
                        ENVIAR
                    </button>
                </form>

               <div class="contact-footer col s12 m4 right">
                    <div class="py-40">
                        <h4>Contactanos</h4>
                        <ul>
                            <li class="py-10">Dirección: <a class=""
                                    href="https://goo.gl/maps/4Sv1C6Re18urpw4W6" target="_blank">
                                    Blvd. Bernardo Quintana 88, Carretas, 76050 Santiago de Querétaro, Qro.</a></li>
                            <li class="py-10">Teléfono: <a class="" href="tel:+524422912223">442 291 2223</a></li>
                            <li class="py-10">Correo: <a class=""
                                    href="mailto:hola.habitta@grupoccima.com">hola.habitta@grupoccima.com</a></li>
                            <li class="py-10">Abrimos: Lun-Vie: 8 am-6:30 pm <br>Sáb-Dom: 10 am-6:30 pm  </li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <ul class="social-icons">
                    <li class="right">
                        <a href="https://mx.linkedin.com/company/grupo-ccima">
                            <img src="media/assets/img/icons/social/linkedin.svg" width="19" height="19">
                        </a>
                    </li>
                    <li class="right">
                        <a href="https://twitter.com/grupoccima?lang=es">
                            <img src="media/assets/img/icons/social/twitter.svg" width="20" height="20">
                        </a>
                    </li>
                    <li class="right">
                        <a href="https://www.instagram.com/grupo_ccima/">
                            <img src="media/assets/img/icons/social/instagram.svg" width="20" height="20">
                        </a>
                    </li>
                    <li class="right">
                        <a href="https://www.facebook.com/GPOCCIMA/?ref=br_rs">
                            <img src="media/assets/img/icons/social/facebook.svg" width="20" height="20">
                        </a>
                    </li>
                    <li>Grupo CCIMA 2020</li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>
