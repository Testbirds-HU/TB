<?php
	$content = json_decode(file_get_contents('lang.json',true),true);	
	function writeText($lang,$text,$json){
		echo $json[$lang][$text];
	}

  $url = "https://$_SERVER[HTTP_HOST]";
  $pos = strrpos($url,'.');
  $url = substr($url, $pos,strlen($url)-$pos);
  if($url == 'cz'){
    $lang = 'Czech';
  }elseif ($url == 'sk'){
    $lang = 'Slovak';
  }else{
    $lang = 'hu';
  }	

header('DLang: $lang');

?>
