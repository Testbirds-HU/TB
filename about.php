<!DOCTYPE html>
<?php include('include/lang.php'); ?>
    <?php include('include/html-head.php'); ?>
        <?php include('include/navigation.php'); ?>
            <div class="container rolunk">
                <div class="articletitle">
                    <div class="container">
                        <h1>{{rolunk_cim1}}</h1>
                        <h2>{{rolunk_cim2}}</h2> </div>
                </div>
                <div class="articlecover">
                    <div class="container"></div>
                </div>
                <div class="articlebody_w">
                    <div class="container">
                        <p>
                            {{rolunk_cim3}}
                        </p>
                    </div>
                </div>
                <div class="team container-fluid alternating">
                    <div class="container">
                        <h2>A csapat</h2>
                        <!-- TEMPLATE:
					<div class="row">
						<div class="col-md-3">
						</div>
						<div class="col-md-9">
							<h2 class="text-centered">NÉV</h2>
							<div>
								<p>
									LEÍRÁS
								</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3 col-md-push-9">
						</div>
						<div class="col-md-9 col-md-pull-3">
							<h2 class="text-centered">NÉV</h2>
							<div>
								<p>
									LEÍRÁS
								</p>
							</div>
						</div>
					</div>
-->
              <div id="team-template"></div>
               </div>
                </div>
            </div>
            <?php
            include ('include/footer.php');
            include('include/analytics.php');
            include('include/bottom-components.php');
        ?>
                </body>

                </html>