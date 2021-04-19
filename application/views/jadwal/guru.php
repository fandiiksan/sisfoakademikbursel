<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="card">
			<div class="card-body">
				<table id="table_jadwal" class="table">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Tahun Ajar</th>
							<th scope="col">Hari</th>
							<th scope="col">Jam</th>
							<th scope="col">Mapel</th>
							<th scope="col">Rombel</th>
							<th scope="col">Ruangan</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = '1'; ?>
						<?php foreach ($jadwal as $jad): ?>
						<tr>
							<td><?= $no; ?></td>
							<td><?= $jad['thn_ajar']; ?></td>
							<td><?= $jad['hari']; ?></td>
							<td><?= $jad['jam']; ?></td>
							<td><?= $jad['nama_mapel']; ?></td>
							<td><?= $jad['nama_rombel']; ?></td>
							<td><?= $jad['nama_ruangan']; ?></td>
						</tr>
						<?php $no++ ?>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>