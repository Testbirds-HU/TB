<?php
require 'lib/tldx/tldextract.php';
	
	$content = json_decode(file_get_contents('lang.json',true),true);	
	function writeText($lang,$text,$json){
		echo $json[$lang][$text];
	}
  $components = tldextract("$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
  $tld="$components->tld";

  if($tld == 'cz'){
    $lang = 'Czech';
  }elseif ($tld == 'sk'){
    $lang = 'Slovak';
  }else{
    $lang = 'Hungarian';
  }	

?>
