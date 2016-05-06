<?php echo '
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="bower_components/jquery/dist/jquery.min.js">   </script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script src="js/snap.svg-min.js" async defer></script>
    <script src="js/classie.js" async defer></script>
    <script src="js/pageload.js"></script>
    
    <link href="css/basic-styles-'?><? echo($components->tld);?><? echo '.css" rel="stylesheet">
    <script>
    	$( document ).ready(function() {
   			$("#arrow").click(function() {
    			$(\'html, body\').animate({
     				scrollTop: $("#top").offset().top-90
    			}, 1000);
   			});
		})
    </script>
'; ?>
