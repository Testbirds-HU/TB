<?php echo('
            <footer class="container-fluid">
                <div class="row">
                    <div class="col-md-12 contact">
                        <h5>')?><?=writeText($lang,'footer_kapcsolat',$content);?><? echo('</h5>
                        <p>
                            ')?><?=writeText($lang,'footer_kapcsolat2',$content);?><? echo('<br></p>
                        <p>
                            ')?><?=writeText($lang,'footer_kapcsolat3',$content);?><? echo('<br></p>
                        <p>
                            ')?><?=writeText($lang,'footer_kapcsolat4',$content);?><? echo('
                        </p>
                        <p>
                            ')?><?=writeText($lang,'footer_kapcsolat5',$content);?><? echo('
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