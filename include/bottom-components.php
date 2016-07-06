<?php echo '<link href="/res/css/basic-styles-'?><?php echo($components->tld);?><?php echo '.css" rel="stylesheet">';?>
            <script>
                $(document).ready(function () {
                    $("#arrow").click(function () {
                        $("html, body").animate({
                            scrollTop: $("#top").offset().top - 90
                        }, 1000);
                    });
                })
            </script>
            <script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    console.log('Document ready fired');
                    $.ajaxSetup({
                        cache: true
                    });
                    $('head').append('<link rel="stylesheet" href="/res/css/dist/main.min.css" type="text/css" />');
                    $.getScript("/res/js/dist/main.min.js", function () {
                        console.log("Main js loaded");
                        InstantClick.init();
                    });
                    $.getScript("/bower_components/bootstrap/dist/js/bootstrap.min.js", function () {
                        console.log("Bootstrap js loaded");
                    });
                });
            </script>