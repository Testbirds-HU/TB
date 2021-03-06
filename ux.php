<!DOCTYPE html>
<?php include('include/lang.php'); ?>
    <?php include('include/html-head.php'); ?>
        <?php include('include/navigation.php'); ?>
            <div class="container">
                <div class="articletitle">
                    <div class="container">
                        <h1><?php writeText($lang,'felhasznaloi_cim1',$content);?></h1>
                        <h2><?php writeText($lang,'felhasznaloi_cim2',$content);?></h2>
                        <div class="ulholder">
                            <p class="intro"><?php writeText($lang,'felhasznaloi_cim3',$content);?></p>
                                <ul>
                                    <li>
                                        <?php writeText($lang,'felhasznaloi_cim4',$content);?>
                                    </li>
                                    <li>
                                        <?php writeText($lang,'felhasznaloi_cim5',$content);?>
                                    </li>
                                    <li>
                                        <?php writeText($lang,'felhasznaloi_cim6',$content);?>
                                    </li>
                                    <li>
                                        <?php writeText($lang,'felhasznaloi_cim7',$content);?>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>
                <div class="articlecover_felh"></div>
                <div class="articlebody_g">
                    <div class="container">
                        <h6><?php writeText($lang,'felhasznaloi_leiras1',$content);?></h6>
                        <p>
                            <?php writeText($lang,'felhasznaloi_leiras2',$content);?>
                        </p>
                        <br>
                        <br>
                        <h6><?php writeText($lang,'felhasznaloi_leiras3',$content);?></h6>
                        <p>
                            <?php writeText($lang,'felhasznaloi_leiras4',$content);?>
                                <br>
                                <br> </p>
                        <h6><?php writeText($lang,'felhasznaloi_leiras4.1',$content);?><br></h6>
                        <p>
                            <?php writeText($lang,'felhasznaloi_leiras5',$content);?>
                                <br>
                                <br> </p>
                        <ul>
                            <li>
                                <?php writeText($lang,'felhasznaloi_leiras6',$content);?>
                            </li>
                            <li>
                                <?php writeText($lang,'felhasznaloi_leiras7',$content);?>
                                    <br> </li>
                            <li>
                                <?php writeText($lang,'felhasznaloi_leiras8',$content);?>
                                    <br>
                                    <br> </li>
                        </ul>
                        <h6><?php writeText($lang,'felhasznaloi_leiras9',$content);?><br></h6>
                        <p>
                            <?php writeText($lang,'felhasznaloi_leiras10',$content);?>
                                <br> </p>
                    </div>
                </div>
                <div class="articlebody_w">
                    <div class="container">
                        <h2><?php writeText($lang,'felhasznaloi_folyamat1',$content);?><br><br></h2>
                        <p>
                            <?php writeText($lang,'felhasznaloi_folyamat2',$content);?>
                                <br>
                                <br> </p>
                        <h6><?php writeText($lang,'felhasznaloi_folyamat3',$content);?><br></h6>
                        <p>
                            <?php writeText($lang,'felhasznaloi_folyamat4',$content);?>
                                <br>
                                <br> </p>
                        <h6><?php writeText($lang,'felhasznaloi_folyamat5',$content);?></h6>
                        <p>
                            <?php writeText($lang,'felhasznaloi_folyamat6',$content);?>
                                <br>
                                <br> </p>
                        <h6><?php writeText($lang,'felhasznaloi_folyamat7',$content);?></h6>
                        <p>
                            <?php writeText($lang,'felhasznaloi_folyamat8',$content);?>
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
