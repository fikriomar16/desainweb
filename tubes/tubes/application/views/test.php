<pre class="m-3 p-3">
	<?php print_r($this->session->userdata('login')); ?>
</pre>
<button type="button" class="btn btn-primary mb-2 float-left" onclick="swal('<?= $this->input->ip_address(); ?>');">
	<i class="fas fa-globe fa-lg"></i>&nbsp;&nbsp;Test IP
</button>
<button type="button" class="btn btn-info mb-2 float-left" onclick="swal('<?= $this->agent->platform(); ?>');">
	<i class="fas fa-laptop fa-lg"></i>&nbsp;&nbsp;CEK OS
</button>
<button type="button" class="btn btn-dark mb-2 float-left" onclick="swal('<?= $this->session->userdata('login')['email']; ?>');">
	<i class="fas fa-user fa-lg"></i>&nbsp;&nbsp;CEK ADMIN
</button>