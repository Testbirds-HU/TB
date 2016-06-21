<?php
	echo("<script src=\"js/stats-");echo("$components->tld");echo(".js\" type=\"text/javascript\" async defer></script>");
  	echo('<noscript><p><img src="//analytics.testbirds.hu/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>');

  if($tld == 'cz'){
    echo('<!-- Start of Leadin Embed --><script type="text/javascript" src="//js.leadin.com/js/v1/2223448.js" id="LeadinEmbed-2223448" crossorigin="use-credentials" async defer></script><!-- End of Leadin Embed -->');
  }elseif ($tld == 'sk'){
   echo('<!-- Start of Leadin Embed --><script type="text/javascript" src="//js.leadin.com/js/v1/2326791.js" id="LeadinEmbed-2326791" crossorigin="use-credentials" async defer></script><!-- End of Leadin Embed -->');
  }else{
    echo('<!-- Start of Leadin Embed --><script type="text/javascript" src="//js.leadin.com/js/v1/1798051.js" id="LeadinEmbed-1798051" crossorigin="use-credentials" async defer></script><!-- End of Leadin Embed -->');
  }	
?>