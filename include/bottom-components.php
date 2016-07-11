<script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
<?php echo '<link href="/res/css/';?><?php writeText($lang,'customcss',$content);?><?php echo '" rel="stylesheet">';?>
<script>
    $(document).ready(function () {
        console.log('Document ready fired');
        $.ajaxSetup({
            cache: true
        });
        
        $('head').append('<link rel="stylesheet" href="/res/css/dist/main.min.css" type="text/css">');
        $('head').append('<link rel="stylesheet" href="/bower_components/slicknav/dist/slicknav.min.css" type="text/css">');
        
        $.getScript("/res/js/dist/main.min.js", function () {
            InstantClick.init();
            console.log("Main js loaded");
        });
        
        $.getScript("/bower_components/slicknav/dist/jquery.slicknav.min.js", function() {
            $('#nav-main').slicknav();
            console.log("Slicknav loaded");
        });

        $.getScript("/bower_components/bootstrap/dist/js/bootstrap.min.js", function () {
            console.log("Bootstrap js loaded");
        });
        
        $("#arrow").click(function () {
            $("html, body").animate({
                scrollTop: $("#top").offset().top - 90
            }, 1000);
        });
    });
</script>
