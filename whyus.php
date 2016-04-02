
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
    <link href="css/<?=writeText($lang,'customcss',$content);?>" rel="stylesheet">    
    <link rel="stylesheet" href="css/okayNav.css" media="screen">
    <link rel="stylesheet" href="css/header.css" media="screen">
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
    </div>
    <div class="container elonyok">
      <div class="articletitle">
        <div class="container">
          <h1><?=writeText($lang,'miertmi_cim',$content);?></h1>
          <h2><?=writeText($lang,'miertmi_cim2',$content);?></h2>
          <div class="row nr1">
            <div id="placeholder1" class="col-md-6"></div>
            <div class="col-md-6 text">
              <h2 class="one"><?=writeText($lang,'miertmi_elony1',$content);?><br></h2>
              <ul>
                <li><?=writeText($lang,'miertmi_elony1_1',$content);?></li>
              </ul>
              <ul>
                <li><?=writeText($lang,'miertmi_elony1_2',$content);?></li>
              </ul>
              <ul>
                <li><?=writeText($lang,'miertmi_elony1_3',$content);?></li>
              </ul>
              <ul>
                <li><?=writeText($lang,'miertmi_elony1_4',$content);?></li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div id="placeholder2" class="col-md-6"></div>
            <div class="col-md-6 text">
              <h2 class="two"><?=writeText($lang,'miertmi_elony2',$content);?><br></h2>
              <ul>
                <li><?=writeText($lang,'miertmi_elony2_1',$content);?></li>
              </ul>
              <ul>
                <li><?=writeText($lang,'miertmi_elony2_2',$content);?></li>
              </ul>
              <ul>
                <li><?=writeText($lang,'miertmi_elony2_3',$content);?></li>
              </ul>
              <ul>
                <li><?=writeText($lang,'miertmi_elony2_4',$content);?></li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div id="placeholder3" class="col-md-6"></div>
            <div class="col-md-6 text">
              <h2 class="three"><?=writeText($lang,'miertmi_elony3',$content);?><br></h2>
              <ul>
                <li><?=writeText($lang,'miertmi_elony3_1',$content);?>	</li>
              </ul>
              <ul>
                <li><?=writeText($lang,'miertmi_elony3_2',$content);?></li>
              </ul>
              <ul>
                <li><?=writeText($lang,'miertmi_elony3_3',$content);?></li>
              </ul>
              <ul>
                <li><?=writeText($lang,'miertmi_elony3_4',$content);?></li>
              </ul>
              <ul>
                <li><?=writeText($lang,'miertmi_elony3_5',$content);?></li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div id="placeholder4" class="col-md-6"></div>
            <div class="col-md-6 text">
              <h2 class="four"><?=writeText($lang,'miertmi_elony4',$content);?><br></h2>
              <ul>
                <li><?=writeText($lang,'miertmi_elony4_1',$content);?></li>
              </ul>
              <ul>
                <li><?=writeText($lang,'miertmi_elony4_2',$content);?></li>
              </ul>
              <ul>
                <li><?=writeText($lang,'miertmi_elony4_3',$content);?></li>
              </ul>
              <ul>
                <li><?=writeText($lang,'miertmi_elony4_4',$content);?></li>
              </ul>
            </div>
          </div>
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
              <div class="fbicon"></div></a><a href="facebook.com" class="ref">
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