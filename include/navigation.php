<div id="header" style="display: inline-flex;">
    <a class="site-logo" href="/index.php">
        <div class="spriteholder">
            <div class="icon icon-headerlogo"></div>
        </div>
    </a>
    <nav id="nav-main">
        <ul class="nav navbar-nav">
            <li id="menu1">
                <a href="about.php">
                    <?php writeText($lang,'Menu1',$content);?>
                </a>
            </li>
            <li id="menu2">
                <a href="whyus.php">
                    <?php writeText($lang,'Menu2',$content);?>
                </a>
            </li>
            <li id="menu3">
                <a href="functional.php">
                    <?php writeText($lang,'Menu3',$content);?>
                </a>
            </li>
            <li id="menu4">
                <a href="ux.php">
                    <?php writeText($lang,'Menu4',$content);?>
                </a>
            </li>
            <li id="menu5">
                <a href="<?php writeText($lang,'menublogurl',$content);?>">
                    <?php writeText($lang,'Menu6',$content);?>
                </a>
            </li>
            <li id="menu6">
                <a href="contact.php">
                    <?php writeText($lang,'Menu5',$content);?>
                </a>
            </li>
        </ul>
    </nav>
</div>
