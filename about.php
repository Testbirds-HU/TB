<?
  include('lang.php');
?>
    <!DOCTYPE html>
    <html class="no-js">
    <!-- <![endif]-->

    </html>
    <html>

    <head>
        <? include('html-head.php'); ?>
    </head>

    <body>
    <style>
    	* {
    		outline: 1px red solid;
    	}
    </style>
        <div id="pagewrap">
            <?php include('navigation.php'); ?> </div>
        <div class="container rolunk">
            <div class="articletitle">
                <div class="container">
                    <h1><?=writeText($lang,'rolunk_cim1',$content);?></h1>
                    <h2><?=writeText($lang,'rolunk_cim2',$content);?></h2> </div>
            </div>
            <div class="articlecover">
                <div class="container"></div>
            </div>
            <div class="articlebody_w">
                <div class="container">
                    <p>
                        <?=writeText($lang,'rolunk_cim3',$content);?>
                    </p>
                </div>
            </div>
            <div class="team">
                <div class="container-fluid">
                    <h2>A csapat</h2>
                    <div class="container-fluid">
                    	<div class="row">
                        	<div class="col-md-3">
                            	
                    		</div>
                    	</div>
                	</div>
            </div>
        </div>
        <?php
            include ('footer.php');
        ?>
        <?php
            include('analytics.php');
            include('bottom-components.php');
        ?>
        </body>

    </html>