<?
  include('lang.php');
?>
    <!DOCTYPE html>
    <html class="no-js">
    <!-- <![endif]-->

    </html>
    <html>

    <head>
        <? include('html-head.php'); ?>
    </head>

    <body>
        <div id="pagewrap">
            <?php include('navigation.php'); ?>
            <div class="container">
                <div class="cover">
                    <div class="row">
                        <div class="col-md-6 text">
                            <h1><?=writeText($lang,'fooldal_Focim',$content);?></h1>
                            <h2><?=writeText($lang,'fooldal_Focim2',$content);?></h2>
                            <h6><?=writeText($lang,'fooldal_Focim3',$content);?></h6> </div>
                        <div class="col-md-6 kep"></div>
                    </div>
                    <div class="row">
                        <div id="arrow" class="scrollholder"><img src="img/scroll_icon.png"></div>
                    </div>
                </div>
                <div class="csatlakozz">
                    <div class="row">
                        <p>
                            <?=writeText($lang,'fooldal_legytesztelo',$content);?>&nbsp;<a href="//nest.testbirds.com<?=writeText($lang,'NOPE',$content);?>" target="_blank"><?=writeText($lang,'fooldal_legytesztelo2',$content);?></a></p>
                    </div>
                </div>
                <div id="top" class="tesztek">
                    <div class="row">
                        <a href="functional.php" class="pageload-link">
                            <div class="col-md-6 teszt1">
                                <h2><?=writeText($lang,'fooldal_funkcionalis',$content);?></h2>
                                <p>
                                    <?=writeText($lang,'fooldal_funkcionalis2',$content);?>
                                </p>
                                <div class="imgholder"></div>
                                <div class="navigator">
                                    <p class="more">></p>
                                </div>
                            </div>
                        </a>
                        <a href="ux.php" class="pageload-link">
                            <div class="col-md-6 teszt2">
                                <h2><?=writeText($lang,'fooldal_felhasznaloi',$content);?></h2>
                                <p>
                                    <?=writeText($lang,'fooldal_felhasznaloi2',$content);?>
                                </p>
                                <div class="imgholder"></div>
                                <div class="navigator">
                                    <p class="more">></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="Elonyok">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 id="ctelonyei"><?=writeText($lang,'fooldal_miertmi',$content);?></h2>
                            <div class="row list">
                                <a href="whyus.php#1" class="pageload-link">
                                    <div class="col-md-3 col-sm-6 col-xs-12 el1">
                                        <h2><?=writeText($lang,'fooldal_miertmi2',$content);?></h2>
                                        <div class="navigator">
                                            <p class="more">> </p>
                                        </div>
                                    </div>
                                </a>
                                <a href="whyus.php#2" class="pageload-link">
                                    <div class="col-md-3 col-sm-6 col-xs-12 el2">
                                        <h2><?=writeText($lang,'fooldal_miertmi3',$content);?></h2>
                                        <div class="navigator">
                                            <p class="more">> </p>
                                        </div>
                                    </div>
                                </a>
                                <a href="whyus.php#3" class="pageload-link">
                                    <div class="col-md-3 col-sm-6 col-xs-12 el3">
                                        <h2><?=writeText($lang,'fooldal_miertmi4',$content);?></h2>
                                        <div class="navigator">
                                            <p class="more">></p>
                                        </div>
                                    </div>
                                </a>
                                <a href="whyus.php#4" class="pageload-link">
                                    <div class="col-md-3 col-sm-6 col-xs-12 el4">
                                        <h2><?=writeText($lang,'fooldal_miertmi5',$content);?></h2>
                                        <div class="navigator">
                                            <p class="more">></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="miket">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><?=writeText($lang,'fooldal_miket',$content);?></h2>
                            <div class="row ikonok">
                                <div id="device1" class="col-md-3">
                                    <h6><?=writeText($lang,'fooldal_miket2',$content);?></h6> </div>
                                <div id="device2" class="col-md-3">
                                    <h6><?=writeText($lang,'fooldal_miket3',$content);?></h6> </div>
                                <div id="device3" class="col-md-3">
                                    <h6><?=writeText($lang,'fooldal_miket4',$content);?></h6> </div>
                                <div id="device4" class="col-md-3">
                                    <h6><?=writeText($lang,'fooldal_miket5',$content);?></h6> </div>
                            </div>
                            <div class="row miketmob">
                                <div class="carousel js-flickity">
                                    <div class="carousel-cell">
                                        <div id="device1">
                                            <h6><?=writeText($lang,'fooldal_miket2',$content);?></h6> </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div id="device2">
                                            <h6><?=writeText($lang,'fooldal_miket3',$content);?></h6> </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div id="device3">
                                            <h6><?=writeText($lang,'fooldal_miket4',$content);?></h6> </div>
                                    </div>
                                    <div class="carousel-cell">
                                        <div id="device4">
                                            <h6><?=writeText($lang,'fooldal_miket5',$content);?></h6> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="folyamat">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><?=writeText($lang,'fooldal_folyamat',$content);?></h2> </div>
                        <div class="col-md-4">
                            <div class="circle elso"><img></div>
                            <h2><?=writeText($lang,'fooldal_folyamat2',$content);?></h2>
                            <p>
                                <?=writeText($lang,'fooldal_folyamat3',$content);?>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <div class="circle masodik"><img></div>
                            <h2><?=writeText($lang,'fooldal_folyamat4',$content);?></h2>
                            <p>
                                <?=writeText($lang,'fooldal_folyamat5',$content);?>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <div class="circle harmadik"><img></div>
                            <h2><?=writeText($lang,'fooldal_folyamat6',$content);?></h2>
                            <p>
                                <?=writeText($lang,'fooldal_folyamat7',$content);?>
                            </p>
                        </div>
                        <div class="col-md-12">
                            <div class="circlewoman"></div>
                            <h3><?=writeText($lang,'fooldal_ajanlat',$content);?></h3>
                            <a href="contact.php" class="pageload-link">
                                <div class="btn-primary">
                                    <?=writeText($lang,'fooldal_ajanlat2',$content);?>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 companies">
                    <div class="row">
                        <div class="col-md-12" id="reftitle">
                            <h2><?=writeText($lang,'Referencia_cim',$content);?></h2></div>
                        <div class="col-md-2 col-sm-4 col-xs-6"><div class="sprite sprite-1"></div></div>
                        <div class="col-md-2 col-sm-4 col-xs-6"><div class="sprite sprite-2"></div></div>
                        <div class="col-md-2 col-sm-4 col-xs-6"><div class="sprite sprite-3"></div></div>
                        <div class="col-md-2 col-sm-4 col-xs-6"><div class="sprite sprite-4"></div></div>
                        <div class="col-md-2 col-sm-4 col-xs-6"><div class="sprite sprite-5"></div></div>
                        <div class="col-md-2 col-sm-4 col-xs-6"><div class="sprite sprite-6"></div></div>
                        <div class="col-md-2 col-sm-4 col-xs-6"><div class="sprite sprite-7"></div></div>
                        <div class="col-md-2 col-sm-4 col-xs-6"><div class="sprite sprite-8"></div></div>
                        <div class="col-md-2 col-sm-4 col-xs-6"><div class="sprite sprite-9"></div></div>
                        <div class="col-md-2 col-sm-4 col-xs-6"><div class="sprite sprite-10"></div></div>
                        <div class="col-md-2 col-sm-4 col-xs-6"><div class="sprite sprite-11"></div></div>
                        <div class="col-md-2 col-sm-4 col-xs-6"><div class="sprite sprite-12"></div></div>
                        <div class="col-md-2 col-sm-4 col-xs-6"><div class="sprite sprite-13"></div></div>
                        <div class="col-md-2 col-sm-4 col-xs-6"><div class="sprite sprite-14"></div></div>
                        <div class="col-md-2 col-sm-4 col-xs-6"><div class="sprite sprite-15"></div></div>
                        <div class="col-md-2 col-sm-4 col-xs-6"><div class="sprite sprite-16"></div></div>
                        <div class="col-md-2 col-sm-4 col-xs-6"><div class="sprite sprite-17"></div></div>
                        <div class="col-md-2 col-sm-4 col-xs-6"><div class="sprite sprite-18"></div></div>
                        <div class="col-md-2 col-sm-4 col-xs-6"><div class="sprite sprite-19"></div></div>
                        <div class="col-md-2 col-sm-4 col-xs-6"><div class="sprite sprite-20"></div></div>
                        <div class="col-md-2 col-sm-4 col-xs-6"><div class="sprite sprite-21"></div></div>
                        <div class="col-md-2 col-sm-4 col-xs-6"><div class="sprite sprite-22"></div></div>
                        <div class="col-md-2 col-sm-4 col-xs-6"><div class="sprite sprite-23"></div></div>
                        <div class="col-md-2 col-sm-4 col-xs-6"><div class="sprite sprite-24"></div></div>
                    </div>
                </div>
            </div>
        <?php
            include ('footer.php');
        ?>
        </div>
        <?php
            include('analytics.php');
            include('bottom-components.php');
        ?>
        </body>

    </html>
