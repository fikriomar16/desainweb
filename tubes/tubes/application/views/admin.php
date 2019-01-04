<script type="text/javascript">
	function mdladmin() {
		document.getElementById("mdlhead").classList.remove('bg-secondary');
		document.getElementById("mdlhead").classList.add('blue-gradient');
		$('#mdladmin').modal('show');
		$('#mdladminhead').text('Tambah Akun');
		$('#form-admin')[0].reset();
	}
	function mdladminedt(idadmin,adduser,addmail,addpass) {
		document.getElementById("mdlhead").classList.remove('blue-gradient');
		document.getElementById("mdlhead").classList.add('bg-secondary');
		$('#mdladmin').modal('show');
		$('#mdladminhead').text('Edit Akun');
		$('[name="idadmin"]').val(idadmin);
		$('[name="adduser"]').val(adduser);
		$('[name="addmail"]').val(addmail);
		$('[name="addpass"]').val(addpass);
	}
	function del(id,name) {
		swal({
			confirmButtonClass: 'btn btn-success',
			cancelButtonClass: 'btn btn-danger',
			buttonsStyling: false,
			title: 'Yakin ingin menghapus ini?\n('+name+ ')',
			text: "Setelah menghapus, data tidak dapat dikembalikan!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonText: 'Ya, Hapus!'
		}).then((result) => {
			if (result.value) {
				swal("Sukses Hapus");
			}
		})
	}
	function mdldel(id,name) {
		$('#mdldel').modal('show');
		$('[name="id"]').val(id);
		$('[name="name"]').val(name);
	}
	function notif_hapus() {
		swal({
			title: "Data Telah Terhapus",
			type: "success",
			showConfirmButton: false,
			timer: 2500
		});
	};
	function reloadtab() {
		//$('#tabadmin').DataTable().fnDraw();
		var tabadmin = document.getElementById("tabadmin");
		tabadmin.refresh();
	}
</script>
<center>
	<h4 class="mt-3">Manajemen Admin</h4>
</center>
<button type="button" class="btn btn-success mb-2 float-left" onclick="mdladmin();" data-toggle="tooltip" data-placement="left" title="Tambah Data">
	<i class="fas fa-plus-square fa-lg"></i>&nbsp;&nbsp;Tambah Data
</button>
<!-- <button class="btn btn-light" onclick="reloadtab()">Reload</button> -->
<div class="table-responsive text-white">
	<table class="table table-hover table-dark" id="tabadmin">
		<thead class="thead-light">
			<tr>
				<th>No.</th>
				<th>Fullname</th>
				<th>E-Mail</th>
				<th>Password</th>
				<th>Last Activity</th>
				<th>Status</th>
				<th class="text-center">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$i=1;
			foreach ($admin_list as $key => $row){
			?>
			<tr>
				<td><?= $i ?></td>
				<td><?= $row->fullname ?></td>
				<td><?= $row->email ?></td>
				<td><?= $row->password ?></td>
				<td><?= $row->tglwaktu ?></td>
				<td><?= $row->active ?></td>
				<td class="text-center">
					<button type="button" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit Data" onclick="mdladminedt('<?= $row->id_admin ?>','<?= $row->fullname ?>','<?= $row->email ?>','<?= $row->password ?>');">
						<i class="fas fa-edit"></i>
					</button>
					<button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus Data" onclick="mdldel('<?= $row->id_admin ?>','<?= $row->fullname ?>');">
						<i class="fas fa-trash"></i>
					</button>
				</td>
			</tr>
			<?php
			$i++;
			}
			?>
		</tbody>
	</table>
</div>