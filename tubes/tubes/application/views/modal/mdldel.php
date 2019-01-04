<div class="modal fade right" id="mdldel" tabindex="-1" role="dialog" aria-labelledby="DialogModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-side modal-bottom-right modal-sm cascading-modal" role="document">
		<div class="modal-content">
			<div class="modal-header text-white bg-danger">
				<h5 id="mdladminhead" class="modal-title text-center col-12">Hapus Akun</h5>
			</div>
			<div class="modal-body md-form">
				<form id="form-del" method="POST" action="#">
					<h4 class="text-danger text-center mb-5">
						Yakin ingin menghapus data ini?
					</h4>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-user fa-lg animated rotateIn"></i></span>
							<input hidden type="text" name="id" class="form-control text-center mr-sm-2" placeholder="Masukkan Nama">
							<input disabled type="text" name="name" class="form-control text-center mr-sm-2" placeholder="">
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer form-group justify-content-center">
				<button onclick="del_user();" class="btn btn-sm btn-danger" type="button" data-dismiss="modal">
					<i class="fas fa-trash animated rotateIn"></i>&nbsp;&nbsp;Ya, Hapus
				</button>
				<button class="btn btn-sm btn-outline-danger" type="button" data-dismiss="modal">
					<i class="fas fa-times animated rotateIn"></i>&nbsp;&nbsp;Batal
				</button>
			</div>
		</div>
	</div>
</div>