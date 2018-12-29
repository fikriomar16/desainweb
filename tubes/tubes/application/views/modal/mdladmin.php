<div class="modal fade" id="mdladmin" tabindex="-1" role="dialog" aria-labelledby="DialogModalLabel" aria-hidden="true">
	<div class="modal-dialog cascading-modal" role="document">
		<div class="modal-content">
			<div id="mdlhead" class="modal-header blue-gradient text-white">
				<h5 id="mdladminhead" class="modal-title text-center col-12">Tambah Akun</h5>
			</div>
			<form id="form-admin" method="POST" action="<?= base_url('admin/add_update') ?>">
				<div class="modal-body md-form">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-user fa-lg animated rotateIn"></i></span>
							<input hidden type="text" name="idadmin" class="form-control text-center mr-sm-2" placeholder="Masukkan Nama">
							<input type="text" name="adduser" class="form-control text-center mr-sm-2" placeholder="Masukkan Nama">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-mail-bulk fa-lg animated rotateIn"></i></span>
							<input type="email" name="addmail" class="form-control text-center mr-sm-2" placeholder="Masukkan E-Mail">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-lock fa-lg animated rotateIn"></i></span>
							<input type="password" name="addpass" class="form-control text-center mr-sm-2" placeholder="Masukkan Password">
						</div>
					</div>
				</div>
				<div class="modal-footer form-group justify-content-center">
					<button class="btn btn-sm btn-success blue-gradient" type="submit">
						<i class="fas fa-save animated rotateIn"></i>&nbsp;Simpan
					</button>
					<button class="btn btn-sm btn-danger" type="button" data-dismiss="modal">
						<i class="fas fa-window-close animated rotateIn"></i>&nbsp;Batal
					</button>
				</div>
			</form>
		</div>
	</div>
</div>