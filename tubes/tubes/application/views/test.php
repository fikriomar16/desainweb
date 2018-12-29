<!-- <pre class="m-3 p-3">
	<?php print_r($this->session->userdata('login')); ?>
</pre> -->
<div align="center" class="mt-5">
	<h1>Welcome</h1>
	<h4><?= $this->session->userdata('login')['fullname']; ?></h4>
	<h5 class="mt-lg-5">Last Login : <?= $this->session->userdata('login')['tglwaktu']; ?></h5>
</div>
<div class="fixed-bottom">
	<button type="button" class="btn btn-primary mb-2 float-left" onclick="swal('<?= $this->input->ip_address(); ?>');">
		<i class="fas fa-globe fa-lg"></i>&nbsp;&nbsp;Test IP
	</button>
	<button type="button" class="btn btn-info mb-2 float-left" onclick="swal('<?= $this->agent->platform(); ?>');">
		<i class="fas fa-laptop fa-lg"></i>&nbsp;&nbsp;CEK OS
	</button>
	<button type="button" class="btn btn-dark mb-2 float-left" onclick="swal('<?= $this->session->userdata('login')['email']; ?>');">
		<i class="fas fa-user fa-lg"></i>&nbsp;&nbsp;CEK USER
	</button>
	<a class="btn btn-light float-right aqua-gradient" href="https://git.io/tubesweb5150411175" target="_blank">
		<i class="fas fa-external-link-alt"></i>&nbsp;&nbsp;Link Project
	</a>
</div>