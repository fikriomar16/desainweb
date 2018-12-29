<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?></title>
	<link rel="icon" href="<?= base_url('assets/img/uty.png') ?>">
	<!-- <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css"> -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/datatable/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/mdb.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/awesome550/css/all.css">
	<!-- <link rel="stylesheet" href="<?= base_url() ?>assets/css/addons/datatables.css"> -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/datatable/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/sweetalert/dist/sweetalert2.css">
	<script src="<?= base_url() ?>assets/sweetalert/dist/sweetalert2.js"></script>
	<script type="text/javascript">
		function exit() {
		swal({
			confirmButtonClass: 'btn btn-success',
			cancelButtonClass: 'btn btn-danger',
			buttonsStyling: false,
			title: 'Yakin ingin logout ?',
			type: 'warning',
			showCancelButton: true,
			confirmButtonText: 'Ya !',
			cancelButtonText: 'Batal'
		}).then((result) => {
			if (result.value) {
				window.location.replace('<?= base_url('Login/keluar') ?>');
				// window.location.replace('admin/delete');
			}
		})
	}
	</script>
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
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark special-color-dark">
		<!-- Navbar brand -->
		<a class="navbar-brand text-uppercase" href="<?= base_url() ?>">DESAIN WEB</a>
		<!-- Collapse button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#admincontent" aria-controls="admincontent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- Collapsible content -->
		<div class="collapse navbar-collapse" id="admincontent">
			<!-- Links -->
			<ul class="navbar-nav mr-auto">
				<!-- Features -->
				<li class="nav-item dropdown mega-dropdown active">
					<a class="nav-link dropdown-toggle text-uppercase" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-user-circle animated rotateIn"></i>&nbsp;&nbsp;<?php print_r($this->session->userdata('login')['fullname']); ?>
						<span class="sr-only">(current)</span>
					</a>
					<div class="dropdown-menu mega-menu z-depth-1 special-color-dark py-5 px-5" aria-labelledby="navbarDropdownMenuLink2" style="width: 700px;">
						<div class="row">
							<!-- <div class="col-md-6">
								<img style="width: 100px;height: auto;" src="<?= base_url('assets/img/uty.png') ?>">
							</div> -->
							<div class="col-md-4 mb-xl-0">
								<h6 class="sub-title text-uppercase font-weight-bold white-text">MENU UTAMA</h6>
								<ul class="nav flex-column list-unstyled">
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url('Admin') ?>">Manajemen Admin</a>
									</li>
								</ul>
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="">Data Lainnya</a>
									</li>
								</ul>
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url('Riwayat') ?>">Riwayat</a>
									</li>
								</ul>
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url('Terhapus') ?>">Data Terhapus</a>
									</li>
								</ul>
							</div>
							<div class="col-md-4 mb-xl-0">
								<h6 class="sub-title text-uppercase font-weight-bold white-text">MENU PENGATURAN</h6>
								<ul class="nav flex-column list-unstyled">
									<li class="nav-item">
										<a class="nav-link" href="">MENU SATU</a>
									</li>
								</ul>
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="">MENU DUA</a>
									</li>
								</ul>
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="">MENU TIGA</a>
									</li>
								</ul>
							</div>
							<div class="col-md-4 mb-xl-0">
								<h6 class="sub-title text-uppercase font-weight-bold white-text">MENU JUGA</h6>
								<ul class="nav flex-column list-unstyled">
									<li class="nav-item">
										<a class="nav-link" href="">MENU EMPAT</a>
									</li>
								</ul>
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="">MENU LIMA</a>
									</li>
								</ul>
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="">MENU ENAM</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</li>
				<li class="nav-item dropdown mega-dropdown">
					<a class="nav-link dropdown-toggle text-uppercase" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						LAINNYA
						<span class="sr-only">(current)</span>
					</a>
					<div class="dropdown-menu mega-menu z-depth-1 special-color-dark py-5 px-5" aria-labelledby="navbarDropdownMenuLink2" style="width: 400px;">
						<div class="row">
							<div class="col-md-6 mb-xl-0">
								<h6 class="sub-title text-uppercase font-weight-bold white-text">MENU LAINNYA</h6>
								<ul class="nav flex-column list-unstyled">
									<li class="nav-item">
										<a class="nav-link" href="">MENU SATU</a>
									</li>
								</ul>
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="">MENU DUA</a>
									</li>
								</ul>
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="">MENU TIGA</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</li>
			</ul>
			<p class="float-right mr-3 my-auto text-white">
				<i class="fas fa-calendar"></i>&nbsp;&nbsp;<?= date('d/m/Y'); ?>
			</p>
			<p class="float-right mr-3 my-auto text-white">
				<i class="fas fa-clock"></i>&nbsp;&nbsp;<?= date('H:m - A'); ?>
			</p>
			<a onclick="exit();" class="btn btn-sm btn-warning float-right">
				<i class="fas fa-sign-in-alt animated rotateIn"></i>&nbsp;&nbsp;Logout
			</a>
		</div>
	</nav>
	<div class="container-fluid">