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

?>
<!DOCTYPE html>
<!--if lt IE 7html.no-js.lt-ie9.lt-ie8.lt-ie7  
-->
<!--if IE 7html.no-js.lt-ie9.lt-ie8  
-->
<!--if IE 8html.no-js.lt-ie9  
-->
<!-- [if gt IE 8] <!-->
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
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
            <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="index.html" class="navbar-brand"> </a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling-->
          <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="rolunk.html" class="pageload-link">Rólunk</a></li>
              <li><a href="elonyok.html" class="pageload-link">Miért mi?</a></li>
              <li><a href="funkcionalis.html" class="pageload-link">Funkcionális tesztelés</a></li>
              <li><a href="felhasznaloi.html" class="pageload-link">Felhasználói élmény kutatás</a></li>
              <li><a href="kapcsolat.html" class="pageload-link">Kapcsolat</a></li>
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
        
          <h1>Lépj kapcsolatba velünk!</h1>
          <h2>ALIG VÁRJUK, HOGY EGYÜTT DOLGOZHASSUNK VELED!</h2>
          <p>A crowdtesting nem dobozos szolgáltatás. Minden ügyfelünknek igényeire szabott, egyedi ajánlatot készítünk, egy ingyenes, igényfelmérő beszélgetést követően. Kérjük, add meg pár adatodat, hogy Kata felvehesse veled a kapcsolatot és beszélgethessetek a projektedről!</p>
          <form method="post" action="">
          <div class="row form">
            
            <div class="col-md-6">
              <div class="form-group">
                <input id="usr" type="text" name="nev" placeholder="Név" required class="form-control">
              </div>
              <div class="form-group">
                <input id="usr" type="email" name="email" placeholder="Email cím" required class="form-control">
              </div>
              <div class="form-group">
                <input id="usr" type="tel" name="telefonszam" placeholder="Telefonszám" required class="form-control">
              </div>
              <div class="form-group">
                <input id="usr" type="text" name="cegnev" placeholder="Cégnév" required class="form-control">
              </div>
            </div>
            <div class="col-md-6 message">
              <div class="form-horizontal">
                <div class="form-group">
                  <div class="col-md-12">
                    <textarea rows="3" placeholder="Mesélj a projektedről!" required="" name="projekt" class="form-control"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row send">
            <input class="btn-primary" type="submit" value="Küldés">
          </div>
          </form>
          <div style="border-top: 1px solid rgba(255, 255, 255, 0.49); margin-right: 15px; margin-top: 40px; padding-top: 40px; text-align: center; opacity: 0.5" class="row">
            <p>Testbirds kft.</p>
            <p>1118 Budapes, Himfy utca 1. </p>
            <p>(30) 569 5988</p>
          </div>
        <?} else {
        ?>
          <h1>Köszönjük a leveledet, amint tudunk válaszolunk!</h1>
        <? } ?>
        </div>
      </div>

    </div>
    <footer class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <h5>Legutóbbi blogbejegyzések</h5><a>Etikus design – Az AMUSE konferencián jártunk<br></a><a>Szek.org: Hogyan javítsuk online felületünket?<br></a><a>UX teszt: A kutatási kérdések tisztázása<br></a><a>UX teszt: A célok tisztázása<br></a><a>UX teszt: Az elvárások tisztázása<br></a>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-3">
          <h5>Oldaltérkép</h5><a>Rólunk<br></a><a>Funkcionális tesztelés?<br></a><a>Felhasználói élmény kutatás<br></a><a>Ajánlatkérés<br></a><a>Kapcsolat<br></a>
        </div>
        <div class="col-md-3">
          <h5>Kapcsolat</h5>
          <p>1118 Budapest,<br></p>
          <p>Himfy utca 1.<br></p>
          <p>(30) 569 5988</p>
          <p>info@testbirds.hu</p>
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
      docInteractive('lazy_stretch');
      var pageWrap = document.getElementById( 'pagewrap' ),
      triggerLoading = [].slice.call( pageWrap.querySelectorAll( 'a.pageload-link' ) ),
      loader = new SVGLoader( document.getElementById( 'loader' ), { speedIn : 100 } );
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