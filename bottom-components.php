<?php echo '
    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" async defer>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" async defer>

    <link href="css/combined.min.css" rel="stylesheet" async defer>

    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js" async defer></script>
    <script src="/js/combined.min.js" async defer></script>

    <link href="/css/basic-styles-'?><?php echo($components->tld);?><?php echo '.css" rel="stylesheet" async defer>
    <script>
    	$( document ).ready(function() {
   			$("#arrow").click(function() {
    			$(\'html, body\').animate({
     				scrollTop: $("#top").offset().top-90
    			}, 1000);
   			});
		})
    </script>
    <script src="js/instantclick.min.js" data-no-instant></script>
    <script data-no-instant>InstantClick.init();</script>
'; ?>
