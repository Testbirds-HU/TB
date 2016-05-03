<?
  include('lang.php');
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
    <link href="css/merge2.css" rel="stylesheet">
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
            <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="index.php" class="navbar-brand"> </a>
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

    <script src="js/classie.js"></script>
    <script src="js/loader.js"></script>
    <script src="js/svgLoader.js"></script>
    <script src="js/pageload.js"></script>
    <script>
      $(function(){
        
        $('html').click(function(){
           $('.infoBox').each(function(){
          $(this).removeClass('active');
        $(this).html('');
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
        $(this).html('');
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
        $(this).parent().parent().nextAll('.infoBox:visible:first').html(desc);
      });
      });     
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- build:js js/jquery.okayNav-min.js-->
    <script src="js/jquery.okayNav.js"></script>
    <!-- endbuild-->
    <script type="text/javascript">var navigation = $('#nav-main').okayNav();</script>
    <?php include('analytics.php'); ?>
  </body>
</html>
