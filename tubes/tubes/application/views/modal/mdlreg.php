<div class="modal fade" id="mdlreg" tabindex="-1" role="dialog" aria-labelledby="DialogModalLabel" aria-hidden="true">
	<div class="modal-dialog cascading-modal" role="document">
		<div class="modal-content">
			<div class="modal-header text-white morpheus-den-gradient">
				<h5 class="modal-title text-center col-12">Registrasi Akun</h5>
			</div>
			<div class="modal-body md-form">
				<form id="form-reg" method="POST" action="#">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-user fa-lg animated rotateIn"></i></span>
							<input type="text" name="reguser" id="reguser" class="form-control text-center mr-sm-2" placeholder="Masukkan Nama Anda">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-mail-bulk fa-lg animated rotateIn"></i></span>
							<input type="email" name="regmail" id="regmail" class="form-control text-center mr-sm-2" placeholder="Masukkan E-Mail Anda">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-lock fa-lg animated rotateIn"></i></span>
							<input type="password" name="regpass" id="regpass" class="form-control text-center mr-sm-2" placeholder="Masukkan Password Anda">
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer form-group justify-content-center">
				<button onclick="reg_acc();" class="btn btn-sm btn-success morpheus-den-gradient" type="button" data-dismiss="modal">
					<i class="fas fa-save animated rotateIn"></i>&nbsp;Daftar
				</button>
				<button class="btn btn-sm btn-danger" type="button" data-dismiss="modal">
					<i class="fas fa-window-close animated rotateIn"></i>&nbsp;Batal
				</button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function reg_acc() {
		$.ajax({
			type : "POST",
			url : "<?= base_url('registrasi') ?>",
			data: $('#form-reg').serialize(),
			async: false,
			dataType : 'JSON',
			cache: false,
			success: function(response){
				if (response.success) {
					gagal_reg();
				}
			},
			error: function (err){
				console.log(err);
				sukses_reg();
			}
		});
	}
</script>