<?php
	$content = json_decode(file_get_contents('lang.json',true),true);	
	function writeText($lang,$text,$json){
		echo $json[$lang][$text];
	}

  $tld = strrchr ( $_SERVER['SERVER_NAME'], "." );
  $tld = substr ( $tld, 1 );

  echo "TLD is $tld";

  if($tld == 'cz'){
    $lang = 'Czech';
  }elseif ($tld == 'sk'){
    $lang = 'Slovak';
  }else{
    $lang = 'Hungarian';
  }	

?>
