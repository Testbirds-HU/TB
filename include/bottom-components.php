<script data-no-instant type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
<script data-no-instant type="text/javascript" src="/bower_components/instantclick/instantclick.js"></script>
<?php echo '<link href="/res/css/';?><?php writeText($lang,'customcss',$content);?><?php echo '" rel="stylesheet">';?>
<script data-no-instant>
    InstantClick.on('change', function(isInitialLoad) {
        
        // START INITIAL LOAD /======================/
        
        var isWebkit = 'WebkitAppearance' in document.documentElement.style

        if (isWebkit == true) {
            $('.scrollholder').remove();
        };
        
        if (isInitialLoad == false) {
            document.body.className = document.body.className.replace("loading","");
        };

        $.getScript("/res/js/src/load-cards.js", function () {});
        
	    $("#arrow img").click(function () {
            $("html, body").animate({
                scrollTop: $("#top").offset().top - 90
            }, "slow");
        });
        
        $.getScript("/res/js/dist/mustache.min.js", function () {})
        
        setTimeout(function() {
            $('.loaderholder').remove();
        }, 1500);
        
        // END INITIAL LOAD /======================/
        
    });
   InstantClick.init();
    $(document).ready(function () {
        $.ajaxSetup({
            cache: true
        });
        
        $('head').append('<link rel="stylesheet" href="/res/css/dist/main.min.css" type="text/css">');
        
        $('head').append('<link rel="stylesheet" href="/bower_components/slicknav/dist/slicknav.min.css" type="text/css">');
        $('head').append('<link rel="stylesheet" href="/bower_components/flickity/dist/flickity.min.css" type="text/css">');
        $('head').append('<link rel="stylesheet" href="/res/css/dist/sprites.min.css" type="text/css">');
        
        $.getScript("/res/js/dist/main.min.js", function () {
            document.body.className = document.body.className.replace("loading","");
        });
        
        $.getScript("/bower_components/slicknav/dist/jquery.slicknav.min.js", function() {
            $('#nav-main').slicknav();
        });

        $.getScript("/bower_components/bootstrap/dist/js/bootstrap.min.js", function () {});
        
        $.getScript("/res/js/src/load-cards.js", function () {});
        
        $.getScript("/bower_components/flickity/dist/flickity.pkgd.min.js", function() {
            $('.carousel').flickity({
                cellAlign: 'center',
                contain: true,
                watchCSS: 'fallbackOn',
                pageDots: false
            });
        });
        
        $("#arrow img").click(function () {
            $("html, body").animate({
                scrollTop: $("#top").offset().top - 90
            }, "slow");
        });
    });
</script>
