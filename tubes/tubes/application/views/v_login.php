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
		<div class="card" style="width: 30%; margin: 12% auto;">
			<div class="card-header blue-gradient text-white">
				<h3 align="center">Login Admin</h3>
			</div>
			<div class="card-body">
				<form method="POST" action="<?= base_url('Login/masuk') ?>">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-mail-bulk fa-lg"></i></span>
							<input type="email" name="username" class="form-control text-center mr-sm-2" placeholder="e-mail">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-lock fa-lg"></i></span>
							<input type="password" name="password" class="form-control text-center mr-sm-2" placeholder="password">
						</div>
					</div>
					<button class="btn btn-primary btn-block" id="signin" name="signin" type="submit">
						<i class="fas fa-lg fa-sign-in-alt"></i>&nbsp;&nbsp;Login
					</button>
					<div class="row mt-3">
						<div class="col">
							<button class="btn btn-sm btn-outline-secondary btn-block" type="button" onclick="mdlreg();">
								<i class="fas fa-lg fa-address-book"></i>&nbsp;&nbsp;Daftar
							</button>
						</div>
						<div class="col">
							<button class="btn btn-sm btn-outline-info btn-block" type="button" onclick="mdlpass();">
								<i class="fas fa-lg fa-question"></i>&nbsp;&nbsp;Lupa Password
							</button>
						</div>
					</div>
				</form>
			</div>
			<div class="card-footer"></div>
		</div>
	</div>
	<script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
	<script src="<?= base_url() ?>assets/js/bootstrap.js"></script>
	<script src="<?= base_url() ?>assets/js/mdb.js"></script>
	<script src="<?= base_url() ?>assets/awesome550/js/all.js"></script>
</body>
</html>