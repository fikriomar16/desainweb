	</div>
	<script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
	<script src="<?= base_url() ?>assets/js/bootstrap.js"></script>
	<script src="<?= base_url() ?>assets/js/mdb.js"></script>
	<script src="<?= base_url() ?>assets/awesome550/js/all.js"></script>
	<script src="<?= base_url() ?>assets/js/addons/datatables.js"></script>
	<!-- <script src="<?= base_url() ?>assets/js/addons/fnReloadAjax.js"></script> -->
	<script type="text/javascript">
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();
			$('#tablog').DataTable({
				"lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]],
				"oLanguage": {
					"oPaginate": {					
						"sFirst": "Awal",
						"sLast": "Akhir",
						"sNext": "Selanjutnya",
						"sPrevious": "Sebelumnya"
					},
					"sSearch": "Cari :",
					"sSearchPlaceholder": "",
					"sZeroRecords": "Data Tidak Ditemukan",
					"sLengthMenu": "Tampilkan _MENU_ data",
					"sInfo": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
					"sInfoEmpty": "Tidak Ada Data Ditemukan",
					"sInfoFiltered": "(disaring dari _MAX_ total data)"
				}				
			});
			$('#tabadmin').DataTable({
				"lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]],
				"oLanguage": {
					"oPaginate": {					
						"sFirst": "Awal",
						"sLast": "Akhir",
						"sNext": "Selanjutnya",
						"sPrevious": "Sebelumnya"
					},
					"sSearch": "Cari :",
					"sSearchPlaceholder": "",
					"sZeroRecords": "Data Tidak Ditemukan",
					"sLengthMenu": "Tampilkan _MENU_ data",
					"sInfo": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
					"sInfoEmpty": "Tidak Ada Data Ditemukan",
					"sInfoFiltered": "(disaring dari _MAX_ total data)"
				}			
			});
			$('#tabhapus').DataTable({
				"lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]],
				"oLanguage": {
					"oPaginate": {					
						"sFirst": "Awal",
						"sLast": "Akhir",
						"sNext": "Selanjutnya",
						"sPrevious": "Sebelumnya"
					},
					"sSearch": "Cari :",
					"sSearchPlaceholder": "",
					"sZeroRecords": "Data Tidak Ditemukan",
					"sLengthMenu": "Tampilkan _MENU_ data",
					"sInfo": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
					"sInfoEmpty": "Tidak Ada Data Ditemukan",
					"sInfoFiltered": "(disaring dari _MAX_ total data)"
				}				
			});
		});
		function add_update() {
			// body...
			$.ajax({});
		}
		function del_user() {
			// body...
			$.ajax({
				type: "POST",
				url: "<?= base_url('admin/delete') ?>",
				data: $("#form-del").serialize(),
				cache: false,
				dataType: "json",
				success: function(data){
					swal('Gagal');
				},
				error: function (err){
					console.log(err);
					notif_hapus();
				}
			});
			$("#tabadmin").DataTable().fnReloadAjax();
		}
	</script>
</body>
</html>