<?php
	$content = json_decode(file_get_contents('lang.json',true),true);	
	function writeText($lang,$text,$json){
		echo $json[$lang][$text];
	}
	
	
?>
