<script data-no-instant type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
<script data-no-instant type="text/javascript" src="/bower_components/instantclick/instantclick.js"></script>
<?php echo '<link href="/res/css/';?><?php writeText($lang,'customcss',$content);?><?php echo '" rel="stylesheet">';?>
<script data-no-instant>
    function universalPageSetup() {
        var isWebkit = 'WebkitAppearance' in document.documentElement.style;
        
        if (isWebkit == true) {
            $('.scrollholder').remove();
            console.log("Removing scrollholder")
        };
        
        $.ajaxSetup({
            cache: true
        });
        
        $("#arrow img").click(function () {
            $("html, body").animate({
                scrollTop: $("#top").offset().top - 90
            }, "slow");
        });
        
        $.getScript("/res/js/src/load-cards.js", function () {
            console.log("Cards loaded")
        });
        
        document.body.className = document.body.className.replace("loading","");
        console.log("Closing loading animation");
        
        setTimeout(function() {
            $('.loaderholder').remove();
            console.log("Removed loading animation from DOM");
        }, 1500);
    };
    
    InstantClick.on('change', function(isInitialLoad) {
        universalPageSetup();
    });
    
    $(document).ready(function () {
        $('head').append('<link rel="stylesheet" href="/res/css/dist/main.min.css" type="text/css">');
        
        $('head').append('<link rel="stylesheet" href="/bower_components/slicknav/dist/slicknav.min.css" type="text/css">');
        $('head').append('<link rel="stylesheet" href="/bower_components/flickity/dist/flickity.min.css" type="text/css">');
        $('head').append('<link rel="stylesheet" href="/res/css/dist/sprites.min.css" type="text/css">');
        
        $.getScript("/bower_components/bootstrap/dist/js/bootstrap.min.js", function () {
            console.log("Boostrap JS loaded, running callback")
        
            $.getScript("/res/js/dist/main.min.js", function () {
                document.body.className = document.body.className.replace("loading","");
                console.log("Closing loading animation")
            });
        
            $.getScript("/bower_components/slicknav/dist/jquery.slicknav.min.js", function() {
                console.log("Initing slicknav");
                $('#nav-main').slicknav();
            });
        
            $.getScript("/bower_components/flickity/dist/flickity.pkgd.min.js", function() {
                console.log("Initing flickity")
                $('.carousel').flickity({
                    cellAlign: 'center',
                    contain: true,
                    watchCSS: 'fallbackOn',
                    pageDots: false
                });
            });
            
            InstantClick.init(function() {
                console.log("Instantclick loaded")
            });
        });
    });
</script>
