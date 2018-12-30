<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?></title>
	<link rel="icon" href="<?= base_url('assets/img/uty.png') ?>">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/mdb.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/awesome550/css/all.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/sweetalert/dist/sweetalert2.css">
	<script src="<?= base_url() ?>assets/sweetalert/dist/sweetalert2.js"></script>
	<style type="text/css">
		body{
			/*background: #e7e8eb;*/
			background: url('<?= base_url() ?>assets/img/bg2.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment:fixed;
			opacity: 0.95;
		}
	</style>
	<script type="text/javascript">
		function mdlpass() {
			$('#mdlpass').modal('show');
			$('#usermail').val('');
		}
		function mdlreg() {
			$('#mdlreg').modal('show');
			$('#reguser').val('');
			$('#regmail').val('');
			$('#regpass').val('');
		}
	</script>
</head>
<body>
	<div class="container-fluid md-form">
		<center>
			<img class="img-fluid mx-auto mt-3" style="width: 140px;" src="<?= base_url('assets/img/uty.png') ?>">
		</center>
		<div class="card col-lg-4 m-auto mt-lg-4">
			<div class="card-header blue-gradient text-white rounded z-depth-3 m-lg-3">
				<h3 align="center">Login Admin</h3>
			</div>
			<div class="card-body card-body-cascade">
				<form method="POST" action="<?= base_url('Login/masuk') ?>">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-mail-bulk fa-lg animated rotateIn"></i></span>
							<input type="email" name="username" class="form-control text-center mr-sm-2" placeholder="e-mail">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-lock fa-lg animated rotateIn"></i></span>
							<input type="password" name="password" class="form-control text-center mr-sm-2" placeholder="password">
						</div>
					</div>
					<button class="btn btn-primary btn-block" id="signin" name="signin" type="submit">
						<i class="fas fa-lg fa-sign-in-alt"></i>&nbsp;&nbsp;Login
					</button>
					<div class="row mt-3">
						<div class="col">
							<button class="btn btn-sm btn-outline-secondary btn-block" type="button" onclick="mdlreg();">
								<i class="fas fa-lg fa-address-book animated rotateIn"></i>&nbsp;&nbsp;Daftar
							</button>
						</div>
						<div class="col">
							<button class="btn btn-sm btn-outline-info btn-block" type="button" onclick="mdlpass();">
								<i class="fas fa-lg fa-question animated rotateIn"></i>&nbsp;&nbsp;Lupa Password
							</button>
						</div>
					</div>
				</form>
			</div>
			<div class="card-footer"></div>
		</div>
		<div class="fixed-bottom p-3">
			<center>
				<a class="btn btn-sm btn-dark aqua-gradient" href="https://git.io/tubesweb5150411175" target="_blank">
					<i class="fas fa-external-link-alt"></i>&nbsp;&nbsp;Link Project
				</a>
			</center>
		</div>