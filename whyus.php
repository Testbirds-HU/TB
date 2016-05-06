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
        <footer class="container-fluid">
            <div class="row">
                <div class="col-md-12 contact">
                    <h5><?=writeText($lang,'footer_kapcsolat',$content);?></h5>
                    <p>
                        <?=writeText($lang,'footer_kapcsolat2',$content);?><br></p>
                    <p>
                        <?=writeText($lang,'footer_kapcsolat3',$content);?><br></p>
                    <p>
                        <?=writeText($lang,'footer_kapcsolat4',$content);?>
                    </p>
                    <p>
                        <?=writeText($lang,'footer_kapcsolat5',$content);?>
                    </p>
                    <a href="facebok.com" class="ref">
                        <a href="https://www.facebook.com/testbirds.hu/" class="ref">
                            <div class="fbicon"></div>
                        </a>
                        <a href="https://www.linkedin.com/company/testbirds-magyarorsz-g" class="ref">
                            <div class="inicon"></div>
                        </a>
                    </a>
                </div>
            </div>
        </footer>
        <div id="loader" class="pageload-overlay"> <svg id="loaderSvg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 80 60"> <path id="loaderPath"></path> </svg> </div>
        <script src="js/classie.js"></script>
        <script src="js/loader.js"></script>
        <script src="js/svgLoader.js"></script>
        <script src="js/pageload.js"></script>
        <script>
            function scroll() {
                var o = window.location.hash,
                    l = o.length;
                o = o.substring(1, l);
                var n = $("#" + o + "_").offset().top - 200;
                $("html,body").animate({
                    scrollTop: n
                }, "slow")
            }
            $(function() {
                scroll()
            })
        </script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <?php include('analytics.php'); ?> </body>

    </html>