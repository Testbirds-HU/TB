<html lang="<?php writeText($tld);?>" xml:lang="<?php writeText($tld);?>" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php writeText($lang,'head_description',$content);?>">
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
            display: none
        }
        
        .loaderholder {
            position: absolute;
            width: 100px;
            height: 100px;
            opacity: 1;
            transition: opacity 1s;
        }
        
        body:not(.loading) .loaderholder {
            opacity: 0;
        }
        
        .loading {
            overflow: hidden;
        }
        
        [data-loader='circle'] {
            position: absolute;
            width: 100px;
            height: 100px;
            margin: auto;
            -webkit-animation: circle infinite 1s linear;
            -moz-animation: circle infinite 1s linear;
            -o-animation: circle infinite 1s linear;
            animation: circle infinite 1s linear;
            border: 20px solid transparent;
            border-top-color: #1f777a;
            border-bottom-color: #82b999;
            border-radius: 100%;
        }
        
        @-webkit-keyframes circle {
            0% {
                -webkit-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
            100% {
                -webkit-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
            }
        }
        
        @-moz-keyframes circle {
            0% {
                -webkit-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
            100% {
                -webkit-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
            }
        }
        
        @-o-keyframes circle {
            0% {
                -webkit-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
            100% {
                -webkit-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
            }
        }
        
        @keyframes circle {
            0% {
                -webkit-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
            100% {
                -webkit-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
            }
        }
    </style>
</head>

<body class="loading">
    <div class="loaderholder">
        <div data-loader="circle"></div>
    </div>
    <script type="text/javascript">
        document.getElementsByTagName('body')[0].style.height = window.innerHeight + 'px';
        document.getElementsByClassName('loaderholder')[0].style.top = (window.innerHeight - 50) / 2 + 'px';
        document.getElementsByClassName('loaderholder')[0].style.left = (window.innerWidth - 50) / 2 + 'px';
    </script>
