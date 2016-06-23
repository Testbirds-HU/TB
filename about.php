<?
  include('lang.php');
?>
    <!DOCTYPE html>
    <html>

    <head>
        <? include('html-head.php'); ?>
    </head>

    <body>
    <style>
    	* {
    		outline: 0px red solid;
    	}
    </style>
        <div id="pagewrap">
            <?php include('navigation.php'); ?> </div>
        <div class="container rolunk">
            <div class="articletitle">
                <div class="container">
                    <h1><?=writeText($lang,'rolunk_cim1',$content);?></h1>
                    <h2><?=writeText($lang,'rolunk_cim2',$content);?></h2> </div>
            </div>
            <div class="articlecover">
                <div class="container"></div>
            </div>
            <div class="articlebody_w">
                <div class="container">
                    <p>
                        <?=writeText($lang,'rolunk_cim3',$content);?>
                    </p>
                </div>
            </div>
            <div class="team container-fluid">
                <div class="container">
                    <h2>A csapat</h2>

<!-- TEMPLATE:
					<div class="row">
						<div class="col-md-3">
						</div>
						<div class="col-md-9">
							<h2 class="text-centered">NÉV</h2>
							<span>
								<p>
									LEÍRÁS
								</p>
							</span>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3 col-md-push-9">
						</div>
						<div class="col-md-9 col-md-pull-3">
							<h2 class="text-centered">NÉV</h2>
							<span>
								<p>
									LEÍRÁS
								</p>
							</span>
						</div>
					</div>
-->

					<div class="row">
						<div class="col-md-3 col-md-push-9">
							<div class="portrait tamas"></div>
						</div>
						<div class="col-md-9 col-md-pull-3">
							<b class="text-centered">Lichter Tamás</b>
							<span>
								<p>
									Telekommunikációs cégnél szerzett 10+ év tapasztalatot informatikai fejlesztési területen. Közgazdász végzettsége van, üzleti gondolkodásmód jellemzi (vagy legalábbis szeretné…). Tamás hisz abban, hogy egy cégnél akkor jó dolgozni, ha a vezetők megbíznak a munkatársakban, a munkatársakat bevonják a döntésekbe, nyitott, ügyfélorientált és haladó szemléletű a cégkultúra, és nem mellesleg jó a hangulat. Tamás azon dolgozik, hogy a Testbirds ilyen cég legyen. 
								</p>
							</span>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<div class="portrait akos"></div>
						</div>
						<div class="col-md-9">
							<b class="text-centered">Maczinkó Ákos</b>
							<span>
								<p>
									15+ év tapasztalat a telekommunikáció világában, elsősorban értékesítési és ügyfélélmény területen. Éveken keresztül részt vett lakossági termékek kialakításában és kereskedelmi elindításában. Ákos Tamással együtt vezeti a közép-európai Testbirds-öt, ami most már három országban működik.
								</p>
							</span>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3 col-md-push-9">
							<div class="portrait gizella"></div>
						</div>
						<div class="col-md-9 col-md-pull-3">
							<b class="text-centered">Bartha Gizella</b>
							<span>
								<p>
									Gizella, a Testbirds UX kutatójaként közel 50 különböző termék mintegy 100 felhasználói kutatását végezte az elmúlt két évben. Hiszi, hogy egy jó termék létrehozásához nélkülözhetetlen a felhasználó bevonása a lehető legkorábban. Munkája során azon túl, hogy a kezdetektől alkalmazza az ismert módszertani megközelítéseket, folyamatosan törekszik arra, hogy ezek módosításával, megújításával még pontosabban tárja fel a felhasználók igényét.
								</p>
							</span>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<div class="portrait barnabas"></div>
						</div>
						<div class="col-md-9">
							<b class="text-centered">Bertényi Barnabás</b>
							<span>
								<p>
									Barnabás pályáját crowdtesztelőként kezdte  és körülbelül aznap csatlakozott a Testbirds-höz, amint az legálisan lehetséges volt, alighogy a tizennyolcat betöltötte, az érettségi vizsgák után egyből az irodába jött dolgozni – vagyis ha valakire igaz, hogy lelkes fiatal, az Barnabás. 
								</p>
							</span>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3 col-md-push-9">
							<div class="portrait kata"></div>
						</div>
						<div class="col-md-9 col-md-pull-3">
							<b class="text-centered">Csankovszki Kata</b>
							<span>
								<p>
									Kata az új ügyfeleket kutatja fel, illetve a meglévő ügyfeleket segíti a közös munka további lehetőségeivel kapcsolatban a Testbirds-nél. Élete legmeghatározóbb célja, hogy segítse az embereket ott, ahol tudja. Így a Testbirds ügyfeleit például abban, hogy használhatóbb és szerethetőbb alkalmazásokat, weboldalakat és szoftvereket fejleszthessenek az ügyfeleiknek.
									Kata balkezes, amivel egyáltalán nincs egyedül a Testbirds irodában. Talán ez a Testbirds sikereinek az egyik fontos indikátora

								</p>
							</span>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<div class="portrait laszlo"></div>
						</div>
						<div class="col-md-9">
							<b class="text-centered">Horváth László</b>
							<span>
								<p>
									Szociológus végzettségű autodidakta fotós. Gyermekkora óta vonzódik a számítógépek és a programok világához. Érdekli minden olyan fejlesztés, kütyü, ami könnyebbé, érdekesebbé teszi a mindennapokat. Egyedi látásmódját, tudását és szenvedélyét összekapcsolva munkálkodik az ügyfelek és a felhasználók elégedettségén.
								</p>
							</span>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3 col-md-push-9">
							<div class="portrait bianka"></div>
						</div>
						<div class="col-md-9 col-md-pull-3">
							<b class="text-centered">Makkai Bianka</b>
							<span>
								<p>
									Informatikai érdeklődése mellé közgazdász végzettség párosul, ezt leginkább funkcionális tesztelési projektekben kamatoztatja. Mindig az újdonságokat keresi, legyen szó fejlődésgazdaságtani elméletekről, gasztronómiáról vagy technológiai megoldásokról. Hisz benne, hogy bár az egész világot nem tehetjük jobbá, a munkánk révén egy szeletére mégis hatással tudunk lenni, ebből pedig a legjobbat kell kihoznunk.
								</p>
							</span>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<div class="portrait anna"></div>
						</div>
						<div class="col-md-9">
							<b class="text-centered">Mészár Anna</b>
							<span>
								<p>
									Annát leginkább az optimális folyamatok, a jó szolgáltatások, ügyfélbarát szemléletmód lelkesítik. Nagyra értékeli az akár apró, könnyen megvalósítható és mindeközben szellemes ötleteket, és azt a légkört, amelyben ezek az ötletek megszülethetnek. Kutatóként és kulturális antropológusként a probléma és a különböző nézőpontok árnyalt megértéséhez tud igazán hozzájárulni, ez az amiben leginkább otthon érzi magát.
								</p>
							</span>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3 col-md-push-9">
							<div class="portrait agnes"></div>
						</div>
						<div class="col-md-9 col-md-pull-3">
							<b class="text-centered">Muszka Ágnes</b>
							<span>
								<p>
									Több éves tapasztalatot szerzett szoftvertesztelőként, valamint projektmenedzserként. Kommunikáció- és média szakon végzett a Budapesti Műszaki és Gazdaságtudományi Egyetemen. Érdeklődési területe a technológia és a közösségi együttműködések közötti összefüggések.
								</p>
							</span>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<div class="portrait gergely"></div>
						</div>
						<div class="col-md-9">
							<b class="text-centered">Vászon Gergely</b>
							<span>
								<p>
									Programtervező informatikus hallgató az ELTE-n. Tapasztalt sokszereplős, crowd illetve funkcionális teszt projektek menedzselésében, funkcionális és exploratív tesztelésben. 
								</p>
							</span>
						</div>
					</div>






                </div>
        	</div>
        <?php
            include ('footer.php');
            include('analytics.php');
            include('bottom-components.php');
        ?>
        </body>

    </html>