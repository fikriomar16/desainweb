	</div>
	<script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
	<script src="<?= base_url() ?>assets/js/bootstrap.js"></script>
	<script src="<?= base_url() ?>assets/js/mdb.js"></script>
	<script src="<?= base_url() ?>assets/awesome550/js/all.js"></script>
	<script src="<?= base_url() ?>assets/js/addons/datatables.js"></script>
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
			// $('#tabadmin').find('label').each(function () {
			// 	$(this).parent().append($(this).children());
			// });
			// $('#tabadmin .dataTables_filter').find('input').each(function () {
			// 	$('input').attr("placeholder", "Cari");
			// 	$('input').removeClass('form-control-sm');
			// });
			// $('#tabadmin .dataTables_length').addClass('d-flex flex-row');
			// $('#tabadmin .dataTables_filter').addClass('md-form');
			// $('#tabadmin select').removeClass('custom-select custom-select-sm form-control form-control-sm');
			// $('#tabadmin select').addClass('mdb-select md-form');
			// $('#tabadmin .dataTables_filter').find('label').remove();
			$('#tabadmin .mdb-select').materialSelect();
			$('.mdb-select').materialSelect();
		});
	</script>
</body>
</html>