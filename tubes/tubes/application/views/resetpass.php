<script type="text/javascript">
	$(document).ready(function () {
		// body...
		$('[name="email"]').val('<?= $this->uri->segment(2); ?>');
	})
</script>
<div class="card col-lg-5 m-auto mt-lg-5 p-lg-3">
	<form method="POST" action="<?= base_url('reset_pass') ?>" id="formpass">
		<h2 class="bg-primary text-white text-center rounded mb-4 z-depth-1 p-2">Silahkan Reset Password Anda</h2>		
		<input hidden type="text" name="email" class="form-control text-center mr-sm-2" value="<?= $this->uri->segment(2); ?>">
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fas fa-lock fa-lg animated rotateIn"></i></span>
				<input type="password" name="password" class="form-control text-center mr-sm-2" placeholder="password">
			</div>
		</div>
		<button class="btn btn-sm btn-success" type="submit">
			<i class="fas fa-check"></i>&nbsp;&nbsp;Konfirmasi
		</button>
		<button class="btn btn-sm btn-primary float-right" type="button" onclick="$('#formpass')[0].reset();">
			<i class="fas fa-eraser"></i>&nbsp;&nbsp;Clear
		</button>
	</form>
	<div class="card-footer">
		<a class="btn btn-info btn-block" href="../">
			<i class="fas fa-home"></i> Back to dashboard
		</a>
	</div>
</div>