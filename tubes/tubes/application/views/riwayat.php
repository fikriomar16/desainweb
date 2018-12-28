<center>
	<h4 class="mt-3">Riwayat Kegiatan</h4>
</center>
<div class="table-responsive text-white">
	<table class="table table-hover table-dark" id="tablog">
		<thead class="thead-light">
			<tr>
				<th>Admin</th>
				<th>Waktu</th>
				<th>IP</th>
				<th>OS</th>
				<th>User</th>
				<th>Keterangan</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($riwayat_list as $key => $row){
			?>
			<tr>
				<td><?= $row->admin ?></td>
				<td><?= $row->tanggal ?></td>
				<td><?= $row->ip_address ?></td>
				<td><?= $row->os ?></td>
				<td><?= $row->user ?></td>
				<td><?= $row->ket ?></td>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
</div>