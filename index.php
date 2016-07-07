<!DOCTYPE html>
<?php include('include/lang.php'); ?>
    <html>

    <head>
        <?php include('include/html-head.php'); ?>
    </head>

    <body>
        <div id="pagewrap">
            <?php include('include/navigation.php'); ?>
                <div class="container">
                    <div class="cover">
                        <div class="row">
                            <div class="col-md-6 text">
                                <h1><?php writeText($lang,'fooldal_Focim',$content);?></h1>
                                <h2><?php writeText($lang,'fooldal_Focim2',$content);?></h2>
                                <h6><?php writeText($lang,'fooldal_Focim3',$content);?></h6> </div>
                            <div class="col-md-6 icon icon-dudes"></div>
                        </div>
                        <div class="row">
                            <div id="arrow" class="scrollholder"><img alt="Click to scroll" src="/res/img/dist/scroll_icon.png"></div>
                        </div>
                    </div>
                    <div class="csatlakozz">
                        <div class="row">
                            <p>
                                <?php writeText($lang,'fooldal_legytesztelo',$content);?>&nbsp;
                                    <a href="//nest.testbirds.com<?php writeText($lang,'NOPE',$content);?>" target="_blank">
                                        <?php writeText($lang,'fooldal_legytesztelo2',$content);?>
                                    </a>
                            </p>
                        </div>
                    </div>
                    <div id="top" class="tesztek">
                        <div class="row">
                            <a href="functional.php">
                                <div class="col-md-6 teszt1">
                                    <h2><?php writeText($lang,'fooldal_funkcionalis',$content);?></h2>
                                    <p>
                                        <?php writeText($lang,'fooldal_funkcionalis2',$content);?>
                                    </p>
                                    <div class="icon-tb_bug2"></div>
                                    <div class="navigator">
                                        <p class="more">></p>
                                    </div>
                                </div>
                            </a>
                            <a href="ux.php">
                                <div class="col-md-6 teszt2">
                                    <h2><?php writeText($lang,'fooldal_felhasznaloi',$content);?></h2>
                                    <p>
                                        <?php writeText($lang,'fooldal_felhasznaloi2',$content);?>
                                    </p>
                                    <div class="icon-ux2"></div>
                                    <div class="navigator">
                                        <p class="more">></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="row">
                            <div class="col-md-1 quote hidden-sm"> </div>
                            <div class="col-md-8">
                                <p class="content">
                                    <?php writeText($lang,'testimonial1-cont',$content);?>
                                </p>
                                <p class="author">
                                    <?php writeText($lang,'testimonial1-auth',$content);?>
                                </p>
                            </div>
                            <div class="col-md-2 imgholder hidden-sm"> <img alt="Testimonial image" src=<?php writeText($lang, 'testimonial1-img',$content);?>> </div>
                        </div>
                    </div>
                    <div class="Elonyok">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 id="ctelonyei"><?php writeText($lang,'fooldal_miertmi',$content);?></h2>
                                <div class="row list">
                                    <a href="whyus.php#1">
                                        <div class="col-md-3 col-sm-6 col-xs-12 el">
                                            <h2><?php writeText($lang,'fooldal_miertmi2',$content);?></h2>
                                            <div class="sprietbg icon icon-target"></div>
                                            <div class="navigator">
                                                <p class="more">> </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="whyus.php#2">
                                        <div class="col-md-3 col-sm-6 col-xs-12 icon icon-devices el">
                                            <h2><?php writeText($lang,'fooldal_miertmi3',$content);?></h2>
                                            <div class="navigator">
                                                <p class="more">> </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="whyus.php#3">
                                        <div class="col-md-3 col-sm-6 col-xs-12 icon icon-people el">
                                            <h2><?php writeText($lang,'fooldal_miertmi4',$content);?></h2>
                                            <div class="navigator">
                                                <p class="more">></p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="whyus.php#4">
                                        <div class="col-md-3 col-sm-6 col-xs-12 icon icon-messages el">
                                            <h2><?php writeText($lang,'fooldal_miertmi5',$content);?></h2>
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
                                <h2><?php writeText($lang,'fooldal_miket',$content);?></h2>
                                <div class="row ikonok">
                                    <div class="device col-md-3 icon icon-what_we_test_icon_1">
                                        <h6><?php writeText($lang,'fooldal_miket2',$content);?></h6> </div>
                                    <div class="device col-md-3 icon icon-what_we_test_icon_2">
                                        <h6><?php writeText($lang,'fooldal_miket3',$content);?></h6> </div>
                                    <div class="device col-md-3 icon icon-what_we_test_icon_3">
                                        <h6><?php writeText($lang,'fooldal_miket4',$content);?></h6> </div>
                                    <div class="device col-md-3 icon icon-what_we_test_icon_4">
                                        <h6><?php writeText($lang,'fooldal_miket5',$content);?></h6> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="row">
                            <div class="col-md-1 quote hidden-sm"> </div>
                            <div class="col-md-8">
                                <p class="content">
                                    <?php writeText($lang,'testimonial2-cont',$content);?>
                                </p>
                                <p class="author">
                                    <?php writeText($lang,'testimonial2-auth',$content);?>
                                </p>
                            </div>
                            <div class="col-md-2 imgholder hidden-sm"> <img alt="Testimonial image" src=<?php writeText($lang, 'testimonial2-img',$content);?>> </div>
                        </div>
                    </div>
                    <div class="folyamat">
                        <div class="row">
                            <div class="col-md-12">
                                <h2><?php writeText($lang,'fooldal_folyamat',$content);?></h2> </div>
                            <div class="col-md-4">
                                <div class="circle elso icon icon-document"></div>
                                <h2><?php writeText($lang,'fooldal_folyamat2',$content);?></h2>
                                <p>
                                    <?php writeText($lang,'fooldal_folyamat3',$content);?>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="circle masodik icon icon-people2"></div>
                                <h2><?php writeText($lang,'fooldal_folyamat4',$content);?></h2>
                                <p>
                                    <?php writeText($lang,'fooldal_folyamat5',$content);?>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="circle harmadik icon icon-diagram"></div>
                                <h2><?php writeText($lang,'fooldal_folyamat6',$content);?></h2>
                                <p>
                                    <?php writeText($lang,'fooldal_folyamat7',$content);?>
                                </p>
                            </div>
                            <div class="col-md-12">
                                <div class="circlewoman icon icon-Dude-MissMarketing"></div>
                                <h3><?php writeText($lang,'fooldal_ajanlat',$content);?></h3>
                                <a href="contact.php">
                                    <div class="btn-primary">
                                        <?php writeText($lang,'fooldal_ajanlat2',$content);?>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
        		    include('include/references.php');
        		?>
                </div>
                <?php
        	    include ('include/footer.php');
        	?>
        </div>
        <?php
            include('include/analytics.php');
            include('include/bottom-components.php');
        ?>
    </body>

    </html>
