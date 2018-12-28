<script type="text/javascript">
	function mdladmin() {
		$('#mdladmin').modal('show');
		$('#mdladminhead').text('Tambah Akun');
		$('#form-admin')[0].reset();
	}
	function mdladminedt(idadmin,adduser,addmail,addpass) {
		$('#mdladmin').modal('show');
		$('#mdladminhead').text('Edit Akun');
		$('[name="idadmin"]').val(idadmin);
		$('[name="adduser"]').val(adduser);
		$('[name="addmail"]').val(addmail);
		$('[name="addpass"]').val(addpass);
	}
</script>
<center>
	<h4 class="mt-3">Manajemen Admin</h4>
</center>
<button type="button" class="btn btn-sm btn-success mb-2 float-left" onclick="mdladmin();" data-toggle="tooltip" data-placement="left" title="Tambah Data">
	<i class="fas fa-plus-square fa-lg"></i>&nbsp;&nbsp;Tambah Data
</button>
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
					<button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus Data">
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