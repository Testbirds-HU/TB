<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php writeText($lang,'head_description',$content);?>">
<meta name="description" content="<?php writeText($lang,'head_description',$content);?>">
<meta name="keywords" content="<?php writeText($lang,'head_keywords',$content);?>">
<title>
    <?php writeText($lang,'head_title',$content);?>
</title>
<link rel="shortcut icon" href="favicon.ico">
<link href="/res/css/dist/critical.min.css" rel="stylesheet">
<link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    .loading .container,
    .loading .row,
    .loading footer.container-fluid {
        display: none;
    }
    body.loading {
        background-image: url("/res/img/src/loader.svg") !important;
        background-position: center;
        background-size: 100px 100px;
        background-repeat: no-repeat;
    }
</style>
</head>
<body class="loading">
<script type="text/javascript">
    document.getElementsByTagName('body')[0].style.height = window.innerHeight + 'px' ;
</script>