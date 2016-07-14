<noscript>
    <p><img src="//analytics.testbirds.hu/piwik.php?idsite=1" style="border:0;" alt="" /></p>
</noscript>
<?php echo("<script src=\"/res/js/stats-");echo("$components->tld");echo(".js\" type=\"text/javascript\"></script>"); 

  if($tld == 'cz'){
    echo('<!-- Start of Leadin Embed --><script data-no-instant type="text/javascript" src="//js.leadin.com/js/v1/2223448.js" id="LeadinEmbed-2223448" crossorigin="use-credentials"></script><!-- End of Leadin Embed -->');
  }elseif ($tld == 'sk'){
   echo('<!-- Start of Leadin Embed --><script data-no-instant type="text/javascript" src="//js.leadin.com/js/v1/2326791.js" id="LeadinEmbed-2326791" crossorigin="use-credentials"></script><!-- End of Leadin Embed -->');
  }else{
    echo('<!-- Start of Leadin Embed --><script data-no-instant type="text/javascript" src="//js.leadin.com/js/v1/1798051.js" id="LeadinEmbed-1798051" crossorigin="use-credentials"></script><!-- End of Leadin Embed -->');
  }	
?>
