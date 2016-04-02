
<?
  include('lang.php');
  $url = "https://$_SERVER[HTTP_HOST]";
  $pos = strrpos($url,'.');
  #$url = substr($url, $pos,strlen($url)-$pos);
  if($url == 'https://staging.testbirds.cz'){
    $lang = 'Czech';
  }elseif ($url == 'https://staging.testbirds.sk'){
    $lang = 'Slovak';
  }else{
    $lang = 'Hungarian';
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
    <title><?=writeText($lang,'head_title',$content);?></title>
    <link href="https://www.google.com/fonts#UsePlace:use/Collection:Droid+Sans:400,700" rel="stylesheet" type="text/css">
    <meta name="description" content="<?=writeText($lang,'head_description',$content);?>">
    <meta name="keywords" content="<?=writeText($lang,'head_keywords',$content);?>">
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="css/merge.css" rel="stylesheet">
    <link rel="stylesheet" href="css/okayNav.css" media="screen">
    <link rel="stylesheet" href="css/header.css" media="screen">
    <link rel="stylesheet" href="css/flickity.css" media="screen">
    <link href="css/<?=writeText($lang,'customcss',$content);?>" rel="stylesheet">    
    <script src="js/flickity.pkgd.min.js"></script>
    <script src="bower_components/jquery/dist/jquery.min.js">   </script>
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
      <div class="container">
        <div class="cover">
          <div class="row">
            <div class="col-md-6 text">
              <h1><?=writeText($lang,'fooldal_Focim',$content);?></h1>
              <h2><?=writeText($lang,'fooldal_Focim2',$content);?></h2>
              <h6><?=writeText($lang,'fooldal_Focim3',$content);?></h6>
            </div>
            <div class="col-md-6 kep"></div>
          </div>
          <div class="row">
            <div id="arrow" class="scrollholder"><img src="img/scroll_icon.png"></div>
          </div>
        </div>
        <div class="csatlakozz">
          <div class="row">
            <p><?=writeText($lang,'fooldal_legytesztelo',$content);?><a href="//nest.testbirds.com" target="_blank">&nbsp;<?=writeText($lang,'fooldal_legytesztelo2',$content);?></a></p>
          </div>
        </div>
        <div id="top" class="tesztek">
          <div class="row"><a href="funkcionalis.php" class="pageload-link">
              <div class="col-md-6 teszt1">
                <h2><?=writeText($lang,'fooldal_funkcionalis',$content);?></h2>
                <p><?=writeText($lang,'fooldal_funkcionalis2',$content);?></p>
                <div class="imgholder"></div>
                <div class="navigator">
                  <p class="more">></p>
                </div>
              </div></a><a href="felhasznaloi.php" class="pageload-link">
              <div class="col-md-6 teszt2">
                <h2><?=writeText($lang,'fooldal_felhasznaloi',$content);?></h2>
                <p><?=writeText($lang,'fooldal_felhasznaloi2',$content);?></p>
                <div class="imgholder"></div>
                <div class="navigator">
                  <p class="more">></p>
                </div>
              </div></a></div>
        </div>
        <div class="Elonyok">
          <div class="row">
            <div class="col-md-12">
              <h2 id="ctelonyei"><?=writeText($lang,'fooldal_miertmi',$content);?></h2>
              <div class="row list"><a href="elonyok.php" class="pageload-link">
                  <div class="col-md-3 col-sm-6 col-xs-12 el1">
                    <h2><?=writeText($lang,'fooldal_miertmi2',$content);?></h2>
                    <div class="navigator">
                      <p class="more">>								</p>
                    </div>
                  </div></a><a href="elonyok.php" class="pageload-link">
                  <div class="col-md-3 col-sm-6 col-xs-12 el2">
                    <h2><?=writeText($lang,'fooldal_miertmi3',$content);?></h2>
                    <div class="navigator">
                      <p class="more">>								</p>
                    </div>
                  </div></a><a href="elonyok.php" class="pageload-link">
                  <div class="col-md-3 col-sm-6 col-xs-12 el3">
                    <h2><?=writeText($lang,'fooldal_miertmi4',$content);?></h2>
                    <div class="navigator">
                      <p class="more">></p>
                    </div>
                  </div></a><a href="elonyok.php" class="pageload-link">
                  <div class="col-md-3 col-sm-6 col-xs-12 el4">
                    <h2><?=writeText($lang,'fooldal_miertmi5',$content);?></h2>
                    <div class="navigator">
                      <p class="more">></p>
                    </div>
                  </div></a></div>
            </div>
          </div>
        </div>
        <div class="miket">
          <div class="row">
            <div class="col-md-12">
              <h2><?=writeText($lang,'fooldal_miket',$content);?></h2>
              <div class="row ikonok">
                <div id="device1" class="col-md-3">
                  <h6><?=writeText($lang,'fooldal_miket2',$content);?></h6>
                </div>
                <div id="device2" class="col-md-3">
                  <h6><?=writeText($lang,'fooldal_miket3',$content);?></h6>
                </div>
                <div id="device3" class="col-md-3">
                  <h6><?=writeText($lang,'fooldal_miket4',$content);?></h6>
                </div>
                <div id="device4" class="col-md-3">
                  <h6><?=writeText($lang,'fooldal_miket5',$content);?></h6>
                </div>
              </div>
              <div class="row miketmob">
                <div class="carousel js-flickity">
                  <div class="carousel-cell">
                    <div id="device1">
                      <h6><?=writeText($lang,'fooldal_miket2',$content);?></h6>
                    </div>
                  </div>
                  <div class="carousel-cell">
                    <div id="device2">
                      <h6><?=writeText($lang,'fooldal_miket3',$content);?></h6>
                    </div>
                  </div>
                  <div class="carousel-cell">
                    <div id="device3">
                      <h6><?=writeText($lang,'fooldal_miket4',$content);?></h6>
                    </div>
                  </div>
                  <div class="carousel-cell">
                    <div id="device4">
                      <h6><?=writeText($lang,'fooldal_miket5',$content);?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="folyamat">
          <div class="row">
            <div class="col-md-12">
              <h2><?=writeText($lang,'fooldal_folyamat',$content);?></h2>
            </div>
            <div class="col-md-4">
              <div class="circle elso"><img></div>
              <h2><?=writeText($lang,'fooldal_folyamat2',$content);?></h2>
              <p><?=writeText($lang,'fooldal_folyamat3',$content);?></p>
            </div>
            <div class="col-md-4">
              <div class="circle masodik"><img></div>
              <h2><?=writeText($lang,'fooldal_folyamat4',$content);?></h2>
              <p><?=writeText($lang,'fooldal_folyamat5',$content);?></p>
            </div>
            <div class="col-md-4">
              <div class="circle harmadik"><img></div>
              <h2><?=writeText($lang,'fooldal_folyamat6',$content);?></h2>
              <p><?=writeText($lang,'fooldal_folyamat7',$content);?></p>
            </div>
            <div class="col-md-12">
              <div class="circlewoman"></div>
              <h3><?=writeText($lang,'fooldal_ajanlat',$content);?></h3><a href="kapcsolat.php" class="pageload-link">
                <div class="btn-primary"><?=writeText($lang,'fooldal_ajanlat2',$content);?></div></a>
            </div>
          </div>
        </div>
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
          <!--<div class="col-md-4">
            <h5><?=writeText($lang,'footer_blog',$content);?></h5><a href="<?=writeText($lang,'blogurl2',$content);?>" class="pageload-link"><?=writeText($lang,'footer_blog2',$content);?><br></a><a href="<?=writeText($lang,'blogurl3',$content);?>" class="pageload-link"><?=writeText($lang,'footer_blog3',$content);?><br></a><a href="<?=writeText($lang,'blogurl4',$content);?>" class="pageload-link"><?=writeText($lang,'footer_blog4',$content);?><br></a><a href="<?=writeText($lang,'blogurl5',$content);?>" class="pageload-link"><?=writeText($lang,'footer_blog5',$content);?><br></a><a href="<?=writeText($lang,'blogurl6',$content);?>" class="pageload-link"><?=writeText($lang,'footer_blog6',$content);?><br></a>
          </div>
          <div class="col-md-2"></div>-->
          <div class="col-md-3">
            <h5><?=writeText($lang,'footer_oldalterkep',$content);?></h5><a href="rolunk.php" class="pageload-link"><?=writeText($lang,'footer_oldalterkep2',$content);?><br></a><a href="whyus.php" class="pageload-link"><?=writeText($lang,'footer_oldalterkep3',$content);?><br></a><a href="functional.php" class="pageload-link"><?=writeText($lang,'footer_oldalterkep4',$content);?><br></a><a href="ux.php" class="pageload-link"><?=writeText($lang,'footer_oldalterkep5',$content);?><br></a><a href="contact.php" class="pageload-link"><?=writeText($lang,'footer_oldalterkep6',$content);?><br></a>
          </div>
          <div class="col-md-3">
            <h5><?=writeText($lang,'footer_kapcsolat',$content);?></h5>
            <p><?=writeText($lang,'footer_kapcsolat2',$content);?></p>
            <p><?=writeText($lang,'footer_kapcsolat3',$content);?></p>
            <p><?=writeText($lang,'footer_kapcsolat4',$content);?></p>
            <p><?=writeText($lang,'footer_kapcsolat5',$content);?></p>
          </div>
          <div class="col-md-4" id="social">
          <a href="https://www.facebook.com/testbirds.hu/?fref=ts">
          <img src="img/fb_icon.png" alt="Testbirds on Facebook" width="42" height="42" border="0">
          </a>
          <a href="http://www.w3schools.com">
          <img src="smiley.gif" alt="Go to W3Schools!" width="42" height="42" border="0">
          </a>
          </div>
        </div>
      </footer>

      <div id="loader" class="pageload-overlay">
        <svg id="loaderSvg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 80 60">
          <path id="loaderPath"></path>
        </svg>
      </div>
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
