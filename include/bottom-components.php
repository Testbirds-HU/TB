<script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
<?php echo '<link href="/res/css';?><?php writeText($lang,'customcss',$content);?><?php echo '" rel="stylesheet">';?>
<script>
    $(document).ready(function () {
        console.log('Document ready fired');
        
        $.ajaxSetup({
            cache: true
        });
        
        $('head').append('<link rel="stylesheet" href="/res/css/dist/main.min.css" type="text/css">');
        $('head').append('<link rel="stylesheet" href="/bower_components/slicknav/dist/slicknav.min.css" type="text/css">');
        $('head').append('<link rel="stylesheet" href="/bower_components/flickity/dist/flickity.min.css" type="text/css">');
        
        $('.slicknav_menu').prepend('<a href="index.php"><div class="icon icon-Logo_CMYK_Background" alt="Testbirds Logo" /></a>');
        
        $.getScript("/res/js/dist/main.min.js", function () {
            InstantClick.init();
            document.body.className = document.body.className.replace("loading","");
            console.log("Main js loaded");
        });
        
        $.getScript("/bower_components/slicknav/dist/jquery.slicknav.min.js", function() {
            $('#nav-main').slicknav();
            console.log("Slicknav loaded");
        });

        $.getScript("/bower_components/bootstrap/dist/js/bootstrap.min.js", function () {
            console.log("Bootstrap js loaded");
        });
        
        $.getScript("/bower_components/flickity/dist/flickity.pkgd.min.js", function() {
            $('.main-carousel').flickity({
                // options
                cellAlign: 'left',
                contain: true
            });
        });
        
        $("#arrow").click(function () {
            $("html, body").animate({
                scrollTop: $("#top").offset().top - 90
            }, 1000);
        });
        console.log('Document ready done');
    });
</script>
