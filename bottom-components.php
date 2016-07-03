    <link href="/res/css/dist/layout.min.css" rel="stylesheet">
    <link href="/res/css/grunt/main.prfx.css" rel="stylesheet">
    <script src="/res/js/grunt/main.concat.js" type="text/javascript"></script>

    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <?php echo '<link href="/res/css/basic-styles-hu'?><?php echo($components->tld);?><?php echo '.css" rel="stylesheet" async defer>';?>
    <script>
    	$( document ).ready(function() {
   			$("#arrow").click(function() {
    			$("html, body").animate({
                     				scrollTop: $("#top").offset().top-90
    			}, 1000);
   			});
		})
    </script>
    <!--<script src="res/js/instantclick.min.js" data-no-instant></script>-->
    <script data-no-instant>InstantClick.init();</script>
