<center>
	<h4 class="mt-3">Data Terhapus</h4>
</center>
<div class="table-responsive text-white">
	<table class="table table-hover table-dark" id="tabhapus">
		<thead class="thead-light">
			<tr>
				<th>No.</th>
				<th>Fullname</th>
				<th>E-Mail</th>
				<th>Password</th>
				<th>Last Activity</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$i = 1;
			foreach ($buang_list as $key => $row){
			?>
			<tr>
				<td><?= $i ?></td>
				<td><?= $row->fullname ?></td>
				<td><?= $row->email ?></td>
				<td><?= $row->password ?></td>
				<td><?= $row->tglwaktu ?></td>
				<td><?= $row->active ?></td>
			</tr>
			<?php
			$i++;
			}
			?>
		</tbody>
	</table>
</div>