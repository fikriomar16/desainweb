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