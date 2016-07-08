<script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
<?php echo '<link href="/res/css/';?><?php writeText($lang,'customcss',$content);?><?php echo '" rel="stylesheet">';?>
            <script>
                $(document).ready(function () {
                    $("#arrow").click(function () {
                        $("html, body").animate({
                            scrollTop: $("#top").offset().top - 90
                        }, 1000);
                    });
                })
            </script>
            <script type="text/javascript">
                $(document).ready(function () {
                    console.log('Document ready fired');
                    $.ajaxSetup({
                        cache: true
                    });
                    $('head').append('');
                    $.getScript("/res/js/dist/main.min.js", function () {
                        console.log("Main js loaded");
                        InstantClick.init();
                    });
                    $.getScript("/bower_components/bootstrap/dist/js/bootstrap.min.js", function () {
                        console.log("Bootstrap js loaded");
                    });
                });
            </script>