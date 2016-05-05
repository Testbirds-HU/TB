<?php echo '
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href=\'https://fonts.googleapis.com/css?family=Droid+Sans:400,700|Roboto:400,700&subset=latin,latin-ext\' rel=\'stylesheet\' type=\'text/css\'>
    <meta name="description" content="'?><?=writeText($lang,'head_description',$content);?><? echo '">
    <meta name="description" content="'?><?=writeText($lang,'head_description',$content);?><? echo '">
    <meta name="keywords" content="'?><?=writeText($lang,'head_keywords',$content);?><? echo '">
    <title>'?><?=writeText($lang,'head_title',$content);?><? echo '</title>
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="css/merge2.css" rel="stylesheet">
    <link href="css/'?><?=writeText($lang,'customcss',$content);?><? echo '" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css" media="screen">
    <script src="bower_components/jquery/dist/jquery.min.js">   </script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/snap.svg-min.js"></script>
    ';
 ?>