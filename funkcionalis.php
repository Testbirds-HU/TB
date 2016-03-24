<?
  include('lang.php');
  $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  if($url == 'https://testbirds.cz'){
    $lang = 'Czech';
  }elseif ($url == 'https://testbirds.sk'){
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
    <link href="https://www.google.com/fonts#UsePlace:use/Collection:Droid+Sans:400,700" rel="stylesheet" type="text/css">
    <meta name="description" content="whatever">
    <meta name="keywords" content="html5 template, css3, one page, animations, agency, portfolio, web design">
    <meta name="author" content="Kristof Vizy">
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/basic-styles.css" media="screen">
    <link href="css/merge.css" rel="stylesheet">
    <link rel="stylesheet" href="css/okayNav.css" media="screen">
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
    <script src="bower_components/jquery/dist/jquery.min.js">		</script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/snap.svg-min.js"></script>
  </head>
  <body>
    <div id="pagewrap">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="index.php" class="pageload-link navbar-brand"> </a>
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
      <div class="articletitle">
        <div class="container">
          <h1><?=writeText($lang,'funkcionalis_cim1',$content);?></h1>
          <h2><?=writeText($lang,'funkcionalis_cim2',$content);?></h2>
          <h6><?=writeText($lang,'funkcionalis_cim3',$content);?>
            <ul>
              <li><?=writeText($lang,'funkcionalis_cim4',$content);?></li>
              <li><?=writeText($lang,'funkcionalis_cim5',$content);?></li>
              <li><?=writeText($lang,'funkcionalis_cim6',$content);?></li>
              <li><?=writeText($lang,'funkcionalis_cim7',$content);?></li>
            </ul>
          </h6>
        </div>
      </div>
      <div class="articlecover_funkc"></div>
      <div class="articlebody_g">
        <div class="container">
          <h6><?=writeText($lang,'funkcionalis_leiras1',$content);?> </h6>
          <p><?=writeText($lang,'funkcionalis_leiras2',$content);?><br><br></p>
          <h6><?=writeText($lang,'funkcionalis_leiras3',$content);?><br></h6>
          <p><?=writeText($lang,'funkcionalis_leiras4',$content);?><br><br></p>
          <h6><?=writeText($lang,'funkcionalis_leiras5',$content);?><br></h6>
          <p><?=writeText($lang,'funkcionalis_leiras6',$content);?><br><br></p>
          <h6><?=writeText($lang,'funkcionalis_leiras7',$content);?><br></h6>
          <p><?=writeText($lang,'funkcionalis_leiras8',$content);?><br></p>
        </div>
      </div>
      <div class="articlebody_w">
        <div class="container">
          <h2><?=writeText($lang,'funkcionalis_folyamat1',$content);?><br><br></h2>
          <p><?=writeText($lang,'funkcionalis_folyamat2',$content);?><br><br></p>
          <h6><?=writeText($lang,'funkcionalis_folyamat3',$content);?><br></h6>
          <p><?=writeText($lang,'funkcionalis_folyamat4',$content);?><br><br></p>
          <h6><?=writeText($lang,'funkcionalis_folyamat5',$content);?></h6>
          <p><?=writeText($lang,'funkcionalis_folyamat6',$content);?><br><br></p>
          <h6><?=writeText($lang,'funkcionalis_folyamat7',$content);?></h6>
          <p><?=writeText($lang,'funkcionalis_folyamat8',$content);?></p>
        </div>
      </div>
      <div class="quote">
        <div class="col-md-12">
          <h3><?=writeText($lang,'funkcionalis_idezet1',$content);?><br></h3>
          <h3><?=writeText($lang,'funkcionalis_ideze2',$content);?></h3>
        </div>
      </div>
        <div class="col-md-12 companies">
          <div class="col-md-2 col-sm-4 col-xs-6 col-xs-6"><img src="img/companies/1.png"></div>
          <div class="col-md-2 col-sm-4 col-xs-6 col-xs-6"><img src="img/companies/2.png"></div>
          <div class="col-md-2 col-sm-4 col-xs-6 col-xs-6"><img src="img/companies/3.png"></div>
          <div class="col-md-2 col-sm-4 col-xs-6 col-xs-6"><img src="img/companies/4.png"></div>
          <div class="col-md-2 col-sm-4 col-xs-6 col-xs-6"><img src="img/companies/5.png"></div>
          <div class="col-md-2 col-sm-4 col-xs-6 col-xs-6"><img src="img/companies/6.png"></div>
          <div class="col-md-2 col-sm-4 col-xs-6 col-xs-6"><img src="img/companies/7.png"></div>
          <div class="col-md-2 col-sm-4 col-xs-6 col-xs-6"><img src="img/companies/8.png"></div>
          <div class="col-md-2 col-sm-4 col-xs-6 col-xs-6"><img src="img/companies/9.png"></div>
          <div class="col-md-2 col-sm-4 col-xs-6 no"><img src="img/companies/10.png"></div>
          <div class="col-md-2 col-sm-4 col-xs-6 no"><img src="img/companies/11.png"></div>
          <div class="col-md-2 col-sm-4 col-xs-6 no"><img src="img/companies/12.png"></div>
          <div class="col-md-2 col-sm-4 col-xs-6"><img src="img/companies/13.png"></div>
          <div class="col-md-2 col-sm-4 col-xs-6"><img src="img/companies/14.png"></div>
          <div class="col-md-2 col-sm-4 col-xs-6"><img src="img/companies/15.png"></div>
          <div class="col-md-2 col-sm-4 col-xs-6"><img src="img/companies/16.png"></div>
          <div class="col-md-2 col-sm-4 col-xs-6 no"><img src="img/companies/17.png"></div>
          <div class="col-md-2 col-sm-4 col-xs-6 no"><img src="img/companies/18.png"></div>
          <div class="col-md-2 col-sm-4 col-xs-6"><img src="img/companies/19.png"></div>
          <div class="col-md-2 col-sm-4 col-xs-6"><img src="img/companies/20.png"></div>
          <div class="col-md-2 col-sm-4 col-xs-6 no"><img src="img/companies/21.png"></div>
          <div class="col-md-2 col-sm-4 col-xs-6 no"><img src="img/companies/22.png"></div>
          <div class="col-md-2 col-sm-4 col-xs-6 no"><img src="img/companies/23.png"></div>
          <div class="col-md-2 col-sm-4 col-xs-6 no"><img src="img/companies/24.png"></div>
        </div>

    </div>
    <footer class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <h5><?=writeText($lang,'footer_blog',$content);?></h5><a href="<?=writeText($lang,'blogurl2',$content);?>" class="pageload-link"><?=writeText($lang,'footer_blog2',$content);?><br></a><a href="<?=writeText($lang,'blogurl3',$content);?>" class="pageload-link"><?=writeText($lang,'footer_blog3',$content);?><br></a><a href="<?=writeText($lang,'blogurl4',$content);?>" class="pageload-link"><?=writeText($lang,'footer_blog4',$content);?><br></a><a href="<?=writeText($lang,'blogurl5',$content);?>" class="pageload-link"><?=writeText($lang,'footer_blog5',$content);?><br></a><a href="<?=writeText($lang,'blogurl6',$content);?>" class="pageload-link"><?=writeText($lang,'footer_blog6',$content);?><br></a>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-3">
          <h5><?=writeText($lang,'footer_oldalterkep',$content);?></h5><a href="rolunk.php" class="pageload-link"><?=writeText($lang,'footer_oldalterkep2',$content);?><br></a><a href="elonyok.php" class="pageload-link"><?=writeText($lang,'footer_oldalterkep3',$content);?><br></a><a href="funkcionalis.php" class="pageload-link"><?=writeText($lang,'footer_oldalterkep4',$content);?><br></a><a href="felhasznaloi.php" class="pageload-link"><?=writeText($lang,'footer_oldalterkep5',$content);?><br></a><a href="kapcsolat.php" class="pageload-link"><?=writeText($lang,'footer_oldalterkep6',$content);?><br></a>
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
      linkTag = $(ev.target).is('a')? $(ev.target) : $(ev.target).parents('a');
      link = $(linkTag).attr('href');
      document.location.href = link;
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