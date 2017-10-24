<html>
<head>
	<meta charset="UTF-8">
	<title>PLG</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<?php include 'inc/style.php'; ?>
<body>
	<section class="container-fluid contact-logo">
		<div class="container" style="padding-top: 5px; padding-bottom: 5px;">
			<div class="row" style="padding-top: 10px;">
				<div class="col-md-3"><span style="text-align: left; display: block; margin-top: 20%;"><i class="fa fa-phone" style="color:#1B75BC; "></i>1234678900</span></div>
				<div class="col-md-6"><span><img src="img/logo.png" style=" display: block; margin:auto;" alt=""></span></div>
				<div class="col-md-3"><span style="text-align: right; display: block; margin-top: 20%;"><i class="fa fa-envelope-o" style="color:#1B75BC; "></i> example@gmail.com</span><br>
				<span class="lang-sect"><a href=""><img class="lang-ico" src="img/en.ico" alt="English"></a><div class="space"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></div> <a href="es"><img class="lang-ico" src="img/es.ico" alt=""></a></span>
			</div></div>
				<div class="col-md-12" style="width: 100%; margin-top: -5px;"><hr></div>
			</div>
		</div>
	</section>
	<section class="container-fluid main-menu">
		<div class="container">
			<div class="row">
				<div class="col-md-12"><?php include 'nav.php'; ?></div>
			</div>
		</div>
	</section>
	<section class="container-fluid lang fixed-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12"><span style="float: left; padding-bottom: 5px;">
					<select class="selectpicker btn-info" onchange="location = this.options[this.selectedIndex].value;">
						<option value="/">English</option>
						<option value="es">Español</option>
					</select></span>
				</div>
			</div>
		</section>