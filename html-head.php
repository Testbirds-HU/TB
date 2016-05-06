<?php echo '
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href=\'https://fonts.googleapis.com/css?family=Droid+Sans:400,700|Roboto:400,700&subset=latin,latin-ext\' rel=\'stylesheet\' type=\'text/css\'>
    <meta name="description" content="'?><?=writeText($lang,'head_description',$content);?><? echo '">
    <meta name="description" content="'?><?=writeText($lang,'head_description',$content);?><? echo '">
    <meta name="keywords" content="'?><?=writeText($lang,'head_keywords',$content);?><? echo '">
    <title>'?><?=writeText($lang,'head_title',$content);?><? echo '</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="css/combined.css" rel="stylesheet" async defer>
    ';
 ?>