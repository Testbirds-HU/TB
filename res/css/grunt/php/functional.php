<!DOCTYPE html>
<?php include('include/lang.php'); ?>
    <html>

    <head>
        <?php include('include/html-head.php'); ?>
    </head>

    <body>
        <div id="pagewrap">
            <?php include('include/navigation.php'); ?>
        </div>
        <div class="container">
            <div class="articletitle">
                <div class="container">
                    <h1><?php writeText($lang,'funkcionalis_cim1',$content);?></h1>
                    <h2><?php writeText($lang,'funkcionalis_cim2',$content);?></h2>
                    <h6><?php writeText($lang,'funkcionalis_cim3',$content);?> <ul> <li><?php writeText($lang,'funkcionalis_cim4',$content);?></li> <li><?php writeText($lang,'funkcionalis_cim5',$content);?></li> <li><?php writeText($lang,'funkcionalis_cim6',$content);?></li> <li><?php writeText($lang,'funkcionalis_cim7',$content);?></li> </ul> </h6> </div>
            </div>
            <div class="articlecover_funkc"></div>
            <div class="articlebody_g">
                <div class="container">
                    <h6><?php writeText($lang,'funkcionalis_leiras1',$content);?> </h6>
                    <p>
                        <?php writeText($lang,'funkcionalis_leiras2',$content);?>
                            <br>
                            <br>
                    </p>
                    <h6><?php writeText($lang,'funkcionalis_leiras3',$content);?><br></h6>
                    <p>
                        <?php writeText($lang,'funkcionalis_leiras4',$content);?>
                            <br>
                            <br>
                    </p>
                    <h6><?php writeText($lang,'funkcionalis_leiras5',$content);?><br></h6>
                    <p>
                        <?php writeText($lang,'funkcionalis_leiras6',$content);?>
                            <br>
                            <br>
                    </p>
                    <h6><?php writeText($lang,'funkcionalis_leiras7',$content);?><br></h6>
                    <p>
                        <?php writeText($lang,'funkcionalis_leiras8',$content);?>
                            <br>
                    </p>
                </div>
            </div>
            <div class="articlebody_w">
                <div class="container">
                    <h2><?php writeText($lang,'funkcionalis_folyamat1',$content);?><br><br></h2>
                    <p>
                        <?php writeText($lang,'funkcionalis_folyamat2',$content);?>
                            <br>
                            <br>
                    </p>
                    <h6><?php writeText($lang,'funkcionalis_folyamat3',$content);?><br></h6>
                    <p>
                        <?php writeText($lang,'funkcionalis_folyamat4',$content);?>
                            <br>
                            <br>
                    </p>
                    <h6><?php writeText($lang,'funkcionalis_folyamat5',$content);?></h6>
                    <p>
                        <?php writeText($lang,'funkcionalis_folyamat6',$content);?>
                            <br>
                            <br>
                    </p>
                    <h6><?php writeText($lang,'funkcionalis_folyamat7',$content);?></h6>
                    <p>
                        <?php writeText($lang,'funkcionalis_folyamat8',$content);?>
                    </p>
                </div>
            </div>
            <?php
            include('include/references.php');
        ?>
        </div>
        <?php
            include ('include/footer.php');
            include('include/analytics.php');
            include('include/bottom-components.php');
        ?>
    </body>

    </html>
