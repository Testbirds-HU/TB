<?
  include('lang.php');
  $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  if($url == 'http://www.testbirds.cz'){
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
    <div class="container rolunk">
      <div class="articletitle">
        <div class="container">
          <h1><?=writeText($lang,'rolunk_cim1',$content);?></h1>
          <h2><?=writeText($lang,'rolunk_cim2',$content);?></h2>
        </div>
      </div>
      <div class="articlecover">
        <div class="container"></div>
      </div>
      <div class="articlebody_w">
        <div class="container">
          <p><?=writeText($lang,'rolunk_cim3',$content);?></p>
        </div>
      </div>
      <div class="team">
        <div class="container-fluid">
          <h2>A csapat</h2>
          <div class="col-lg-8 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-1">
            <div class="container-fluid">
            <!-- 1. -->
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div id="ph1" class="col-lg-12">
                </div>
                <div id="ph1_2" class="col-lg-12">
                  <p data-desc="<h6>Csíkos Ádám<h1><p>Első paragraph<br><br></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>">Csíkos Ádám</p>
                </div>
              </div>
              <!-- 1. -->
                 <div class="col-xs-12 infoBox hidden-lg hidden-md hidden-sm"></div>
              
              <!-- 2. -->
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div id="ph2" class="col-lg-12"></div>
                <div id="ph2_2" class="col-lg-12">
                  <p data-desc="<h6>Fónagy Balázs<h1><p>Első paragraph<br><br></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>">Fónagy Balázs</p>
                </div>      
              </div>
             <!-- 2. -->
               <div class="col-xs-12 infoBox hidden-lg" id='_1'></div>
              
              <!-- 3. -->
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div id="ph3" class="col-lg-12"></div>
                <div id="ph3_2" class="col-lg-12">
                  <p data-desc="<h6>Csíkos Ádám<h1><p>Első paragraph<br><br></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>">Csankovszki Kata</p>
                </div>
              </div>
               <!-- 3. -->
             <div class="col-xs-12 infoBox hidden-md hidden-sm" id='_2'></div>
             
               <!-- 4. -->
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div id="ph4" class="col-lg-12"></div>
                <div id="ph4_2" class="col-lg-12">
                  <p data-desc="<h6>Michal Matus<h1><p>Első paragraph<br><br></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>">Michal Matus</p>
                </div>
              </div>
               <!-- 4. -->
                 <div class="col-xs-12 infoBox hidden-lg " id='_3'></div>
              
              <!-- 5. -->
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div id="ph5" class="col-lg-12"></div>
                <div id="ph5_2" class="col-lg-12">
                  <p data-desc="<h6>Lichter Tamás<h1><p>Első paragraph<br><br></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>">Lichter Tamás</p>
                </div>
              </div>
              <!-- 5. -->
              <div class="col-xs-12 infoBox hidden-lg hidden-md hidden-sm" id='_5'></div>
              
                           
              <!-- 6. -->
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div id="ph6" class="col-lg-12"></div>
                <div id="ph6_2" class="col-lg-12">
                  <p data-desc="<h6>Bartha Gizella<h1><p>Első paragraph<br><br></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>">Bartha Gizella</p>
                </div>
               
              </div>
              <!-- 6. -->
               <div class="col-xs-12 infoBox" id='_4'></div>

              
            </div>
          </div>

        </div>
      </div>
      <div id="loader" class="pageload-overlay">
        <svg id="loaderSvg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 80 60">
          <path id="loaderPath"></path>
        </svg>
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
    <script>
      $(function(){
        
        $('html').click(function(){
           $('.infoBox').each(function(){
          $(this).removeClass('active');
        $(this).php('');
        });
         $('.team .col-lg-4.col-md-6.col-sm-6').each(function(){
          $(this).children('.col-lg-12:first').css('opacity','1');
          $(this).children('.col-lg-12:nth-child(2)').css('opacity','1');
        });
        })
        
        
        $('.team p').click(function(){
          event.stopPropagation();
        var nev = $(this).text();
        var desc = $(this).data('desc');
        var next = $(this).parent().parent().find('.infoBox').first();
        
        $('.infoBox').each(function(){
          $(this).removeClass('active');
        $(this).php('');
        });
        
        $('.team .col-lg-4.col-md-6.col-sm-6').each(function(){
          console.log(this);
          $(this).children('.col-lg-12:first').css('opacity','1');
          $(this).children('.col-lg-12:nth-child(2)').css('opacity','1');
        });
        
        $(this).parent().css('opacity','0');
        $(this).parent().parent().nextAll('.col-lg-12:first').css('opacity','1');
        //var next =  $(this).parent().parent().nextAll('.infoBox:visible:first');
        
        $(this).parent().parent().nextAll('.infoBox:visible:first').addClass('active');
        $(this).parent().parent().nextAll('.infoBox:visible:first').php(desc);
      });
      });     
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- build:js js/jquery.okayNav-min.js-->
    <script src="js/jquery.okayNav.js"></script>
    <!-- endbuild-->
    <script type="text/javascript">var navigation = $('#nav-main').okayNav();</script>
  </body>
</html>