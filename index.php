<?php session_start(); include 'head.php';?>

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.js"></script>

<body>
<!-- banner -->
	<div class="banner">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a class="navbar-brand" href="index.html">CALL BILLING SYSTEM</a></h1>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li class="active"><a href="./"><span data-hover="Home">Home</span></a></li>
						<li><a href="#" data-toggle="modal" data-target="#mtn"><span data-hover="MTN">MTN</span></a></li>
						<li><a href="#" data-toggle="modal" data-target="#glo"><span data-hover="GLO">GLO</span></a></li>
						<li><a href="#" data-toggle="modal" data-target="#airtel"><span data-hover="AIRTEL">AIRTEL</span></a></li>
						<li><a href="#" data-toggle="modal" data-target="#nmobile"><span data-hover="ETISALAT">ETISALAT</span></a></li>
					</ul>
				</nav>
			</div>
		</nav>
		</div>
<!--page body-->
<div id="exampleSlider" class="black_bg">
		<div><h3></h3></div>
		<div><h3><span></span></h3></div>
		<div><h3><span></span></h3></div>
		 <div><h3></span></h3></div>
</div>
<!--End of page body-->
<div class="row">

</div>
<!-- footer -->
<div class="wthree_copy_right">
  <div class="agileits-social">
      <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        </ul>
    </div>
	<div class="container">
		<p>© <?php echo date('Y'); ?> All rights reserved | </a></p>
	</div>
</div>
<!-- //footer -->

<!--MTN MODAL-->
<div class="modal fade" id="mtn" tabindex="-1" role="dialog">
			<div class="modal-dialog">
			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<br>
						<div class="signin-form profile">
						<h3 class="agileinfo_sign">MTN</h3>
								<div class="login-form">
									<form method="post" onsubmit="calc('mtnForm')" name="mtnForm">
										<input type="number" name="time" placeholder="Length of call in seconds" required>
										<select class="" name="tariff" required>
											<option value="">select tarrif plan</option>
											<option value="20,20">True talk</option>
											<option value="30,15">Super saver</option>
											<option value="20,11">Pulse</option>
											<option value="15,15">XtraSpecial High Value</option>
											<option value="40,40">MTN JARA PLUS</option>
											<option value="15,15">BizPlus</option>
											<option value="40,15">BizClass</option>
											<option value="40,13">Yello Life Plus</option>
										</select>
										<div class="tp">
											<input type="submit" name="usrlogin" value="SUBMIT">
										</div>
									</form>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Modal1 -->

		<!--AIRTEL MODAL-->
		<div class="modal fade" id="airtel" tabindex="-1" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<br>
								<div class="signin-form profile">
								<h3 class="agileinfo_sign">AIRTEL</h3>
										<div class="login-form">
											<form  method="post" onsubmit="calc('airtelForm')" name="airtelForm">
												<input type="number" name="time" placeholder="Length of call in seconds" required>
												<select class="" name="tariff" required>
													<option value="">select tarrif plan</option>
													<option value="40,40">One SIM</option>
													<option value="19,19">Airtel Connect</option>
													<option value="40,13">Airtel Vogue</option>
													<option value="18,18">2good Classic</option>
													<option value="18,18">Big Family Plus</option>
													<option value="18,18">Smartbytes</option>
													<option value="40,20">2good</option>
													<option value="42,20">Club Zone</option>
													<option value="40,20">Trybe</option>
													<option value="42,20">Dashie Dashie</option>
													<option value="22,22">Today Today</option>
													<option value="15,15">Smart Talk</option>
													<option value="40,12">@ Good Premier</option>
													<option value="40,11">Smart Premier</option>
													<option value="12,12">Aggressor</option>
													<option value="12,12">Optimizer</option>
													<option value=40,12"">Trybe junior</option>
												</select>
												<div class="tp">
													<input type="submit" name="usrlogin" value="SUBMIT">
												</div>
											</form>
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>
				<!-- //Modal1 -->

				<!--GLO MODAL-->
				<div class="modal fade" id="glo" tabindex="-1" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<br>
										<div class="signin-form profile">
										<h3 class="agileinfo_sign">GLOBACOM</h3>
												<div class="login-form">
													<form  method="post" name="gloForm" onsubmit="calc('gloForm')">
														<input type="number" name="time" placeholder="Length of call in seconds" required>
														<select class="" name="tariff" required>
															<option value="">select tarrif plan</option>
															<option value="20,20">Infinito</option>
															<option value="18,18">TalkFree</option>
															<option value="18,18">Ofala</option>
															<option value="25,25">1derful</option>
															<option value="30,30">Big 5</option>
															<option value="50,50">Bumpa</option>
															<option value="11,11">G-Bam</option>
															<option value="30,30">Overload</option>
															<option value="20,20">Community Plan1</option>
															<option value="22,22">Community Plan2</option>
														</select>
														<div class="tp">
															<input type="submit" name="usrlogin" value="SUBMIT">
														</div>
													</form>
												</div>
											</div>
									</div>
								</div>
							</div>
						</div>
						<!-- //Modal1 -->

						<!--9MOBILE MODAL-->
						<div class="modal fade" id="nmobile" tabindex="-1" role="dialog">
									<div class="modal-dialog">
									<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<br>
												<div class="signin-form profile">
												<h3 class="agileinfo_sign">9 Mobile</h3>
														<div class="login-form">
															<form  method="post" onsubmit="calc('mobileForm') "name="mobileForm">
																<input type="number" name="time" placeholder="Length of call in seconds" required>
																<select class="" name="tariff" required>
																	<option value="">select tarrif plan</option>
																	<option value="40,20">Easy Starter</option>
																	<option value="40,20">Easy Cliq</option>
																	<option value="40,20">Cliqlite</option>
																	<option value="11,11">EasyLife</option>
																</select>
																<div class="tp">
																	<input type="submit" name="usrlogin" value="SUBMIT">
																</div>
															</form>
														</div>
													</div>
											</div>
										</div>
									</div>
								</div>
								<!-- //Modal1 -->

<!-- js -->
<script type="text/javascript" src="js/calc.js"></script>
<script src="js/mainScript.js"></script>
<script type="text/javascript" src="js/rgbSlide.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!-- //js -->
</body>
</html>
