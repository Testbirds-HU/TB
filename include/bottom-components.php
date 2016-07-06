<?php echo '<link href="/res/css/basic-styles-'?><?php echo($components->tld);?><?php echo '.css" rel="stylesheet" async defer>';?>
<script>
    $(document).ready(function () {
        $("#arrow").click(function () {
            $("html, body").animate({
                scrollTop: $("#top").offset().top - 90
            }, 1000);
        });
    })
</script>
<!--<script src="res/js/instantclick.min.js" data-no-instant></script>-->
<script data-no-instant>
    InstantClick.init();
</script>
