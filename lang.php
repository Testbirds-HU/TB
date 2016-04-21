<?php
	$content = json_decode(file_get_contents('lang2.json',true),true);	
	function writeText($lang,$text,$json){
		echo $json[$lang][$text];
	}
	
	
?>
