<?php
  if(!empty($_POST)){
    // multiple recipients
    $to  = 'emaerka@gmail.com';
    
    // subject
    $subject = 'Üzenet a TestBirds oldalról.';
    
    // message
    $message = '
    <html>
    <head>
      <title>Üzenet a TestBirds oldalról.!</title>
    </head>
    <body>
      <p>Új üzeneted érkezett a TestBirds oldaláról!</p>
      <table>
        <tr>
          <td>Név</td><td>'.$_POST['nev'].'</td>
        </tr>
      <tr>
          <td>Email</td><td>'.$_POST['email'].'</td>
        </tr>
        <tr>
          <td>Telefonszám</td><td>'.$_POST['telefonszam'].'</td>
        </tr>
        <tr>
          <td>Cégnév</td><td>'.$_POST['cegnev'].'</td>
        </tr>
        <tr>
          <td>Projektről</td><td>'.$_POST['projekt'].'</td>
        </tr>
      </table>
    </body>
    </html>
    ';
    
    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    // Mail it
    mail($to, $subject, $message, $headers);
    
  }
include('lang.php');
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  if($url == 'http://testbirds.cz'){
    $lang = 'Czech';
  }elseif ($url == 'http://testbirds.sk'){
    $lang = 'Slovak';
  }else{
    $lang = 'Hungarian';
  }
?>
<!DOCTYPE html>
<html class="no-js">
  <!-- <![endif]-->
  <html lang="en" class="no-js"></html>
</html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testbirds</title>
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" type="text/css">
    <meta name="description" content="whatever">
    <meta name="keywords" content="html5 template, css3, one page, animations, agency, portfolio, web design">
    <meta name="author" content="Kristof Vizy">
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/basic-styles.css" media="screen">
    <link href="css/merge.css" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css" media="screen">
    <!-- Facebook and Twitter integration-->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:image" content="">
    <meta name="twitter:url" content="">
    <meta name="twitter:card" content="">
    <script src="bower_components/jquery/dist/jquery.js">   </script>
    <script src="bower_components/jquery/dist/jquery.min.js">   </script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/snap.svg-min.js"></script>
  </head>
  <body>
    <div id="pagewrap">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="index.php" class="navbar-brand"> </a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling-->
          <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="rolunk.php" class="pageload-link"><?=writeText($lang,'Menu1',$content);?></a></li>
              <li><a href="elonyok.php" class="pageload-link"><?=writeText($lang,'Menu2',$content);?></a></li>
              <li><a href="funkcionalis.php" class="pageload-link"><?=writeText($lang,'Menu3',$content);?></a></li>
              <li><a href="felhasznaloi.php" class="pageload-link"><?=writeText($lang,'Menu4',$content);?></a></li>
              <li><a href="<?=writeText($lang,'menublogurl',$content);?>" class="pageload-link"><?=writeText($lang,'Menu6',$content);?></a></li>                            
              <li><a href="kapcsolat.php" class="pageload-link"><?=writeText($lang,'Menu5',$content);?></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="container">
      <div class="articlebody_g kapcsolat">
        <div class="container">
        <? if(empty($_POST) ){
         
        ?>
        
          <h1><?=writeText($lang,'kapcsolat_cim1',$content);?></h1>
          <h2><?=writeText($lang,'kapcsolat_cim2',$content);?></h2>
          <p><?=writeText($lang,'kapcsolat_cim3',$content);?></p>
          <form method="post" action="">
          <div class="row form">
            
            <div class="col-md-6">
              <div class="form-group">
                <input id="usr" type="text" name="nev" placeholder="<?=writeText($lang,'kapcsolat_form1',$content);?>" required class="form-control">
              </div>
              <div class="form-group">
                <input id="usr" type="email" name="email" placeholder="<?=writeText($lang,'kapcsolat_form2',$content);?>" required class="form-control">
              </div>
              <div class="form-group">
                <input id="usr" type="tel" name="telefonszam" placeholder="<?=writeText($lang,'kapcsolat_form3',$content);?>" required class="form-control">
              </div>
              <div class="form-group">
                <input id="usr" type="text" name="cegnev" placeholder="<?=writeText($lang,'kapcsolat_form4',$content);?>" required class="form-control">
              </div>
            </div>
            <div class="col-md-6 message">
              <div class="form-horizontal">
                <div class="form-group">
                  <div class="col-md-12">
                    <textarea rows="3" placeholder="<?=writeText($lang,'kapcsolat_form5',$content);?>" required="" name="projekt" class="form-control"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="row send col-md-12">
            <input class="btn-primary" type="submit" value="<?=writeText($lang,'kapcsolat_form6',$content);?>">
          </div>
          </div>

          </form>
          <div style="border-top: 1px solid rgba(255, 255, 255, 0.49); margin-right: 15px; margin-top: 40px; padding-top: 40px; text-align: center; opacity: 0.5" class="row">
            <p><?=writeText($lang,'kapcsolat_kapcsolat1',$content);?></p>
            <p><?=writeText($lang,'kapcsolat_kapcsolat2',$content);?></p>
            <p><?=writeText($lang,'kapcsolat_kapcsolat3',$content);?></p>
            <p><?=writeText($lang,'kapcsolat_kapcsolat4',$content);?></p>            
          </div>
        <?} else {
        ?>
          <p class="thankyou"><?=writeText($lang,'kapcsolat_kapcsolat5',$content);?></p>
        <? } ?>
        </div>
      </div>

    </div>
    </div>
    <footer class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <h5><?=writeText($lang,'footer_blog',$content);?></h5><a href="<?=writeText($lang,'blogurl2',$content);?>" class="pageload-link"><?=writeText($lang,'footer_blog2',$content);?><br></a><a href="<?=writeText($lang,'blogurl3',$content);?>" class="pageload-link"><?=writeText($lang,'footer_blog3',$content);?><br></a><a href="<?=writeText($lang,'blogurl4',$content);?>" class="pageload-link"><?=writeText($lang,'footer_blog4',$content);?><br></a><a href="<?=writeText($lang,'blogurl5',$content);?>" class="pageload-link"><?=writeText($lang,'footer_blog5',$content);?><br></a><a href="<?=writeText($lang,'blogurl6',$content);?>" class="pageload-link"><?=writeText($lang,'footer_blog6',$content);?><br></a>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-3">
          <h5><?=writeText($lang,'footer_oldalterkep',$content);?></h5><a href="rolunk.html" class="pageload-link"><?=writeText($lang,'footer_oldalterkep2',$content);?><br></a><a href="elonyok.html" class="pageload-link"><?=writeText($lang,'footer_oldalterkep3',$content);?><br></a><a href="funkcionalis.html" class="pageload-link"><?=writeText($lang,'footer_oldalterkep4',$content);?><br></a><a href="felhasznaloi.html" class="pageload-link"><?=writeText($lang,'footer_oldalterkep5',$content);?><br></a><a href="kapcsolat.html" class="pageload-link"><?=writeText($lang,'footer_oldalterkep6',$content);?><br></a>
        </div>
        <div class="col-md-3">
          <h5><?=writeText($lang,'footer_kapcsolat',$content);?></h5>
          <p><?=writeText($lang,'footer_kapcsolat2',$content);?><br><br></p>
          <p><?=writeText($lang,'footer_kapcsolat3',$content);?><br></p>
          <p><?=writeText($lang,'footer_kapcsolat4',$content);?></p>
          <p><?=writeText($lang,'footer_kapcsolat5',$content);?></p>
        </div>
      </div>
    </footer>
      <div id="loader" class="pageload-overlay">
        <svg id="loaderSvg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 80 60">
          <path id="loaderPath"></path>
        </svg>
      </div>
    <script src="js/classie.js"></script>
    <script src="js/loader.js"></script>
    <script src="js/svgLoader.js"></script>
    <script>
      (function() {
      docInteractive('spill');
      var pageWrap = document.getElementById( 'pagewrap' ),
      triggerLoading = [].slice.call( pageWrap.querySelectorAll( 'a.pageload-link' ) ),
      loader = new SVGLoader( document.getElementById( 'loader' ), { speedIn : 450 } );
      function init() {
      triggerLoading.forEach( function( trigger ) {
      trigger.addEventListener( 'click', function( ev ) {
      ev.preventDefault();
      loader.show();
      setTimeout( function() {
      loader.hide();
      document.location.href= ev.target.href;
      }, 1000 );
      } );
      } );
      }
      init();
      })(); 
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- build:js js/jquery.okayNav-min.js-->
    <script src="js/jquery.okayNav.js"></script>
    <!-- endbuild-->
    <script type="text/javascript">var navigation = $('#nav-main').okayNav();</script>
  </body>
</html>