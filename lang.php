<?php
	$content = json_decode(file_get_contents('lang.json',true),true);	
	function writeText($lang,$text,$json){
		echo $json[$lang][$text];
	}

  $url = substr($domain, strrpos($domain, ".")+1);
  if($url == 'cz'){
    $lang = 'Czech';
  }elseif ($url == 'sk'){
    $lang = 'Slovak';
  }else{
    $lang = 'hu';
  }	

?>
