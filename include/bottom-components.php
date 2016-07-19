<script data-no-instant type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
<script data-no-instant type="text/javascript" src="/bower_components/instantclick/instantclick.js"></script>
<?php echo '<link href="/res/css/';?><?php writeText($lang,'customcss',$content);?><?php echo '" rel="stylesheet">';?>
<script>
    InstantClick.on('change', function(isInitialLoad) {
        console.log('IC oldal váltás');
        var isWebkit = 'WebkitAppearance' in document.documentElement.style

        if (isWebkit == true) {
            $('.scrollholder').remove();
            console.log('Scrollholder kirobbantva');
        };
        
        if (isInitialLoad == false) {
            console.log('Már ismerlek téged és már van sódered - nem kapsz!');
            document.body.className = document.body.className.replace("loading","");
        };

	$("#arrow img").click(function () {
            $("html, body").animate({
                scrollTop: $("#top").offset().top - 90
            }, "slow");
        });

        setTimeout(function() {
            $('.loaderholder').remove();
            document.getElementsByTagName('body')[0].style.height = '';
            document.getElementsByClassName('loaderholder')[0].style.top = '';
            document.getElementsByClassName('loaderholder')[0].style.left = '';
        }, 1500);
        
        console.log("IC betöltött egy újabb lapot");
    });
</script>
<script data-no-instant>
    InstantClick.init();
    $(document).ready(function () {
        console.log('Még nem ismerlek - jön a sóder!');

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
            console.log("Mobil nav kavicsok");
        });

        $.getScript("/bower_components/bootstrap/dist/js/bootstrap.min.js", function () {
            console.log("Reszponzív kavicsok");
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
        
        console.log('Sóder szállítva');
    });
</script>
