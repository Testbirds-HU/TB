
<?
  include('lang.php');
  $url = "https://$_SERVER[HTTP_HOST]";
  $pos = strrpos($url,'.');
  #$url = substr($url, $pos,strlen($url)-$pos);
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
    <title><?=writeText($lang,'head_title',$content);?></title>
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700|Roboto:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>    <meta name="description" content="<?=writeText($lang,'head_description',$content);?>">
    <meta name="description" content="<?=writeText($lang,'head_description',$content);?>">
    <meta name="keywords" content="<?=writeText($lang,'head_keywords',$content);?>">
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="css/merge.css" rel="stylesheet">
    <link href="css/<?=writeText($lang,'customcss',$content);?>" rel="stylesheet">    
    <link rel="stylesheet" href="css/header.css" media="screen">
    <script src="bower_components/jquery/dist/jquery.min.js">   </script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script src="js/scripts.js"></script>
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
              <li id="menu1"><a href="about.php" class="pageload-link"><?=writeText($lang,'Menu1',$content);?></a></li>
              <li id="menu2"><a href="whyus.php" class="pageload-link"><?=writeText($lang,'Menu2',$content);?></a></li>
              <li id="menu3"><a href="functional.php" class="pageload-link"><?=writeText($lang,'Menu3',$content);?></a></li>
              <li id="menu4"><a href="ux.php" class="pageload-link"><?=writeText($lang,'Menu4',$content);?></a></li>
              <li id="menu5"><a href="<?=writeText($lang,'menublogurl',$content);?>" class="pageload-link"><?=writeText($lang,'Menu6',$content);?></a></li>                            
              <li id="menu6"><a href="contact.php" class="pageload-link"><?=writeText($lang,'Menu5',$content);?></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="container">
      <div class="articletitle">
        <div class="container">
          <h1><?=writeText($lang,'felhasznaloi_cim1',$content);?></h1>
          <h2><?=writeText($lang,'felhasznaloi_cim2',$content);?></h2>
          <h6><?=writeText($lang,'felhasznaloi_cim3',$content);?>
            <ul>
              <li><?=writeText($lang,'felhasznaloi_cim4',$content);?></li>
              <li><?=writeText($lang,'felhasznaloi_cim5',$content);?></li>
              <li><?=writeText($lang,'felhasznaloi_cim6',$content);?></li>
              <li><?=writeText($lang,'felhasznaloi_cim7',$content);?></li>
            </ul>
          </h6>
        </div>
      </div>
      <div class="articlecover_felh"></div>
      <div class="articlebody_g">
        <div class="container">
          <h6><?=writeText($lang,'felhasznaloi_leiras1',$content);?></h6>
          <p><?=writeText($lang,'felhasznaloi_leiras2',$content);?></p><br><br>
          <h6><?=writeText($lang,'felhasznaloi_leiras3',$content);?></h6>
          <p><?=writeText($lang,'felhasznaloi_leiras4',$content);?><br><br></p>
          <h6><?=writeText($lang,'felhasznaloi_leiras4.1',$content);?><br></h6>
          <p><?=writeText($lang,'felhasznaloi_leiras5',$content);?><br><br></p>
          <ul>
            <li><?=writeText($lang,'felhasznaloi_leiras6',$content);?></li>
            <li><?=writeText($lang,'felhasznaloi_leiras7',$content);?><br></li>
            <li><?=writeText($lang,'felhasznaloi_leiras8',$content);?><br><br></li>
          </ul>
          <h6><?=writeText($lang,'felhasznaloi_leiras9',$content);?><br></h6>
          <p><?=writeText($lang,'felhasznaloi_leiras10',$content);?><br></p>
        </div>
      </div>
      <div class="articlebody_w">
        <div class="container">
          <h2><?=writeText($lang,'felhasznaloi_folyamat1',$content);?><br><br></h2>
          <p><?=writeText($lang,'felhasznaloi_folyamat2',$content);?><br><br></p>
          <h6><?=writeText($lang,'felhasznaloi_folyamat3',$content);?><br></h6>
          <p><?=writeText($lang,'felhasznaloi_folyamat4',$content);?><br><br></p>
          <h6><?=writeText($lang,'felhasznaloi_folyamat5',$content);?></h6>
          <p><?=writeText($lang,'felhasznaloi_folyamat6',$content);?><br><br></p>
          <h6><?=writeText($lang,'felhasznaloi_folyamat7',$content);?></h6>
          <p><?=writeText($lang,'felhasznaloi_folyamat8',$content);?></p>
        </div>
      </div>
      <!-- <div class="quote">
        <div class="col-md-12">
          <h3><?=writeText($lang,'felhasznaloi_idezet',$content);?><br></h3>
          <h3><?=writeText($lang,'felhasznaloi_idezet2',$content);?></h3>
        </div>
      </div>-->
        <div class="col-md-12 companies">
        <div class="row">

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

      </div>
      <footer class="container-fluid">
        <div class="row">
          <div class="col-md-12 contact">
            <h5><?=writeText($lang,'footer_kapcsolat',$content);?></h5>
            <p><?=writeText($lang,'footer_kapcsolat2',$content);?><br></p>
            <p><?=writeText($lang,'footer_kapcsolat3',$content);?><br></p>
            <p><?=writeText($lang,'footer_kapcsolat4',$content);?></p>
            <p><?=writeText($lang,'footer_kapcsolat5',$content);?></p><a href="facebok.com" class="ref">
            <a href="https://www.facebook.com/testbirds.hu/" class="ref">
              <div class="fbicon"></div></a>
            <a href="https://www.linkedin.com/company/testbirds-magyarorsz-g" class="ref">
              <div class="inicon"></div></a>
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