<style>
  .navbar-default .navbar-nav>li>a { color: white !important }
</style>
<nav class="navbar navbar-default navbar-fixed-top" style="z-index: 4;">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
class="icon-bar"></span><span class="icon-bar"></span></button><a href="index.php" class="pageload-link navbar-brand"> </a>
          </div>
          <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li id="menu1"><a href="about.php" class="pageload-link"><?php writeText($lang,'Menu1',$content);?></a></li>
              <li id="menu2"><a href="whyus.php" class="pageload-link"><?php writeText($lang,'Menu2',$content);?></a></li>
              <li id="menu3"><a href="functional.php" class="pageload-link"><?php writeText($lang,'Menu3',$content);?></a></li>
              <li id="menu4"><a href="ux.php" class="pageload-link"><?php writeText($lang,'Menu4',$content);?></a></li>
              <li id="menu5"><a href="<?php writeText($lang,'menublogurl',$content);?>" class="pageload-link"><?=writeText($lang,'Menu6',$content);?></a></li>
              <li id="menu6"><a href="contact.php" class="pageload-link"><?php writeText($lang,'Menu5',$content);?></a></li>
            </ul>
          </div>
        </div>
      </nav>
