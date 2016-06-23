    <!DOCTYPE html>
    <?php include('lang.php'); ?>
    <html>
    <head>
        <?php include('html-head.php'); ?>
    </head>
    <body>
        <div id="pagewrap">
            <?php include('navigation.php'); ?> </div>
        <div class="container elonyok">
            <div class="articletitle">
                <div class="container">
                    <h1><?=writeText($lang,'miertmi_cim',$content);?></h1>
                    <h2><?=writeText($lang,'miertmi_cim2',$content);?></h2>
                    <div class="row nr1" id="1_">
                        <div id="placeholder1" class="col-md-6"></div>
                        <div class="col-md-6 text">
                            <h2 class="one"><?=writeText($lang,'miertmi_elony1',$content);?><br></h2>
                            <ul>
                                <li>
                                    <?=writeText($lang,'miertmi_elony1_1',$content);?>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <?=writeText($lang,'miertmi_elony1_2',$content);?>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <?=writeText($lang,'miertmi_elony1_3',$content);?>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <?=writeText($lang,'miertmi_elony1_4',$content);?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row" id="2_">
                        <div id="placeholder2" class="col-md-6"></div>
                        <div class="col-md-6 text">
                            <h2 class="two"><?=writeText($lang,'miertmi_elony2',$content);?><br></h2>
                            <ul>
                                <li>
                                    <?=writeText($lang,'miertmi_elony2_1',$content);?>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <?=writeText($lang,'miertmi_elony2_2',$content);?>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <?=writeText($lang,'miertmi_elony2_3',$content);?>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <?=writeText($lang,'miertmi_elony2_4',$content);?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row" id="3_">
                        <div id="placeholder3" class="col-md-6"></div>
                        <div class="col-md-6 text">
                            <h2 class="three"><?=writeText($lang,'miertmi_elony3',$content);?><br></h2>
                            <ul>
                                <li>
                                    <?=writeText($lang,'miertmi_elony3_1',$content);?>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <?=writeText($lang,'miertmi_elony3_2',$content);?>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <?=writeText($lang,'miertmi_elony3_3',$content);?>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <?=writeText($lang,'miertmi_elony3_4',$content);?>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <?=writeText($lang,'miertmi_elony3_5',$content);?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div id="placeholder4" class="col-md-6"></div>
                        <div class="col-md-6 text">
                            <h2 class="four" id="4_"><?=writeText($lang,'miertmi_elony4',$content);?><br></h2>
                            <ul>
                                <li>
                                    <?=writeText($lang,'miertmi_elony4_1',$content);?>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <?=writeText($lang,'miertmi_elony4_2',$content);?>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <?=writeText($lang,'miertmi_elony4_3',$content);?>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <?=writeText($lang,'miertmi_elony4_4',$content);?>
                                </li>
                            </ul>
                        </div>
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