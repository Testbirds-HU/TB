<?php
echo '      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
class="icon-bar"></span><span class="icon-bar"></span></button><a href="index.php" class="pageload-link navbar-brand"> </a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling-->
          <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li id="menu1"><a href="about.php" class="pageload-link">'?><?=writeText($lang,'Menu1',$content);?><? echo'</a></li>
              <li id="menu2"><a href="whyus.php" class="pageload-link">'?><?=writeText($lang,'Menu2',$content);?><?echo '</a></li>
              <li id="menu3"><a href="functional.php" class="pageload-link">'?><?=writeText($lang,'Menu3',$content);?><? echo'</a></li>
              <li id="menu4"><a href="ux.php" class="pageload-link">'?><?=writeText($lang,'Menu4',$content);?><? echo'</a></li>
              <li id="menu5"><a href="'?><?=writeText($lang,'menublogurl',$content);?><? echo'" class="pageload-link">'?><?=writeText($lang,'Menu6',$content);?><? echo'</a></li>
              <li id="menu6"><a href="contact.php" class="pageload-link">'?><?=writeText($lang,'Menu5',$content);?><?echo '</a></li>
            </ul>
          </div>
        </div>
      </nav>
';
?>
