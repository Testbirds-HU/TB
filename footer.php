<?php echo('
            <footer class="container-fluid">
                <div class="row">
                    <div class="col-md-12 contact">
                        <h5>')?><?=writeText($lang,'footer_kapcsolat',$content);?><?php echo('</h5>
                        <p>
                            ')?><?=writeText($lang,'footer_kapcsolat2',$content);?><?php echo('<br></p>
                        <p>
                            ')?><?=writeText($lang,'footer_kapcsolat3',$content);?><?php echo('<br></p>
                        <p>
                            ')?><?=writeText($lang,'footer_kapcsolat4',$content);?><?php echo('
                        </p>
                        <p>
                            ')?><?=writeText($lang,'footer_kapcsolat5',$content);?><?php echo('
                        </p>
                        <a href="https://www.facebook.com/testbirds.hu/" class="ref" target="_blank">
                            <div class="fbicon"></div>
                        </a>
                        <a href="https://www.linkedin.com/company/testbirds-magyarorsz-g" class="ref" target="_blank">
                            <div class="inicon"></div>
                        </a>
                    </div>
                </div>
            </footer>
    ');
?>