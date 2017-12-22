<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Mitrapos | Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #3 for " name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="<?php echo base_url('assets/global/plugins/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url('assets/global/plugins/sweetalert2/sweetalert2.min.css') ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('assets/global/plugins/bootstrap-toastr/toastr.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url('assets/global/css/components-md.min.css') ?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url('assets/global/css/plugins-md.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="<?php echo base_url('assets/global/img/mitrasi.ico') ?>" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <div class="row" style="margin: 0px !important; height: 100vh">
			<!--div class="hidden-xs col-sm-12 col-md-6" style="height: 100%" id="slideimages">
			
			</div-->
			
			<div class="col-sm-12 col-md-offset-4 col-md-4" style="height: 100vh">
				<div class="login-content" style="margin-top:20%;width: 100%"> 
					<div class="row center">
						<div class="col-md-12" style="text-align:center">
							<img src="<?php echo base_url('assets/pages/img/dwikreasijaya.png')?>" width="400px"> 	
						</div> 
						<br>
						<div class="col-md-12">
							<h5 style="font-size:16px;text-align:center;"><font color="#000"><b>MITRA</b></font><font color="#217EBD"><b>POS</b></font></h5>
						</div> 
					</div>

					<div class="tabbable-custom">
						<div class="tab-content">
							<div class="tab-pane active" id="tab_utama">
								<p id="spacer_utama" style="display: none;">&nbsp;</p>
								<form action="<?php echo site_url('Auth/login_action') ?>" class="login-form" style="margin-top:-20px;margin-bottom:1px" id="utama_form" method="post">
									<div class="alert alert-danger" id="alert_utama" style="display: none;">
										<button class="close" id="close_utama" data-close="alert"></button>
										<span>Masukkan username dan password. </span>
									</div>
									<p id="ket_utama" style="font-size: 12px; text-align: justify; display: block;"></p>
									<div class="row">
										<div class="col-xs-12">
											<input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Username" id="utama_username" name="login_username" autofocus="" required=""> 
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12"> 
											<input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Password" id="utama_password" name="login_password" required=""> 
										</div>
									</div>
									<div class="row"> 
										<div class="col-xs-12"> 
											<button class="btn dark btn-block uppercase" type="submit" id="btn_login_utama">Login</button> 
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="row"> 
						<div class="col-md-7" style="font-size:12px;"> 
							<div style="float:left;margin-left:-40px"> 
								<style> 
									.list-item-content-custom{
									padding:0 0 0 20px;
									}
									i{margin-top:2px;}
									li{ list-style: none;}
								</style>
								<div class="mt-list-container list-simple">
									<ul>
										<li>Developed By: <strong><a target="_blank" href="http://www.mitrasi.com/">Mitra Semesta Informatika</a><br>support@mitrapos.id</strong></li>
									</ul>
								</div>
							</div>
						</div> 

						<div class="col-md-5" style="margin-top:-25px"> 
							<div class="  text-right">
								<p style="font-size:12px;">Copyright © 2017 <br><a href="#">Mitra Semesta Informatika</a></p>
							</div>
						</div>
					</div> 
					<div class="row">
						<div class="col-md-12" style="text-align:center">
						<img align="middle" src="<?php echo base_url("assets/pages/img/mitrasi.png")?>" width="70">
						<img align="middle" src="<?php echo base_url("assets/pages/img/comodo_secure_seal.png")?>" width="70">
						</div>
					</div>
				</div>
			</div>
		</div>
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url('assets/global/plugins/jquery.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/js.cookie.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/jquery.blockui.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') ?>" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/jquery-validation/js/additional-methods.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/sweetalert2/sweetalert2.min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo base_url('assets/global/plugins/bootstrap-toastr/toastr.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/bootstrap-growl/jquery.bootstrap-growl.min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo base_url('assets/global/plugins/backstretch/jquery.backstretch.min.js')?>"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url('assets/global/scripts/app.min.js') ?>" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
		<!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url('assets/global/scripts/main.js') ?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>
	<script>
		$(".login-form").submit(function(e) {
			e.preventDefault();
			main.submitAjaxModal($(this));
		});
	</script>
</html>
