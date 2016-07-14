<script data-no-instant type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
<script data-no-instant type="text/javascript" src="/bower_components/instantclick/instantclick.js"></script>
<?php echo '<link href="/res/css/';?><?php writeText($lang,'customcss',$content);?><?php echo '" rel="stylesheet">';?>
<script>
    InstantClick.on('change', function() {
        console.log('Instantclick page change');
        var isWebkit = 'WebkitAppearance' in document.documentElement.style
        console.log('Webkit: ' + isWebkit);

        if (isWebkit == true) {
            $('.scrollholder').remove();
            console.log('Scrollholder removed');
        };
        
        document.body.className = document.body.className.replace("loading","");
        setTimeout(function() {
            $('.loaderholder').remove();
        }, 1500);
        console.log("Main js loaded and page is ready");
    });
</script>
<script data-no-instant>
    $(document).ready(function () {
        console.log('Document ready fired');

        $.ajaxSetup({
            cache: true
        });
        
        $('head').append('<link rel="stylesheet" href="/res/css/dist/main.min.css" type="text/css">');
        
        $.getScript("/res/js/dist/main.min.js", function () {
            InstantClick.init();
            document.body.className = document.body.className.replace("loading","");
        });
        
        $('head').append('<link rel="stylesheet" href="/bower_components/slicknav/dist/slicknav.min.css" type="text/css">');
        $('head').append('<link rel="stylesheet" href="/bower_components/flickity/dist/flickity.min.css" type="text/css">');
        $('head').append('<link rel="stylesheet" href="/res/css/dist/sprites.min.css" type="text/css">');
        
        $.getScript("/bower_components/slicknav/dist/jquery.slicknav.min.js", function() {
            $('#nav-main').slicknav();
            console.log("Slicknav loaded");
        });

        $.getScript("/bower_components/bootstrap/dist/js/bootstrap.min.js", function () {
            console.log("Bootstrap js loaded");
        });
        
        $.getScript("/bower_components/flickity/dist/flickity.pkgd.min.js", function() {
            $('.carousel').flickity({
                // options
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

        console.log('Document ready done');
    });
</script>