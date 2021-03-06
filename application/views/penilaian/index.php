<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<?php if ($this->session->flashdata('flash')): ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data Nilai <strong>Berhasil! </strong><?= $this->session->flashdata('flash'); ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<?php endif ?>
		<div class="card">
			<div class="card-body">
				<div class="clearfix">
					<form action="" method="get">
						
						<div class="input-group">
							
							<div class="col-md-6 mb-3">
								<select class="form-control" id="rombelMapel" name="r">
									<option value="" disabled selected>Pilih Rombel - Mapel</option>
									<?php foreach ($rombelMapel as $roma): ?>
									<?php if ($this->input->post('refresh') == 'submit'): ?>
									<?php if ($this->input->post('rombelMapel') == $roma['id']): ?>
									<option value="<?= $roma['id']; ?>" selected><?= $roma['roma']; ?></option>
									<?php else: ?>
									<option value="<?= $roma['id']; ?>"><?= $roma['roma']; ?></option>
									<?php endif ?>
									<?php else: ?>
									<option value="<?= $roma['id']; ?>"><?= $roma['roma']; ?></option>
									<?php endif ?>
									<?php endforeach ?>
								</select>
								
							</div>
							<div>
								<span class="input-group-btn">
									<button type="submit" name="refresh" value="s" class="btn btn-primary">Refresh</button>
								</span>
								<?php if ($this->input->get('r')): ?>
									<span class="input-group-btn">
										<a href="penilaian/printNilai/<?= $this->input->get('r') ?>" class="btn btn-success">Print</a>
									</span>
								<?php endif ?>
							</div>
							
							
						</div>
						
					</form>
				</div>
				<table id="table_id" class="table">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">NIS</th>
							<th scope="col">Nama Siswa</th>
							<th scope="col">Nilai Akhir</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = '1'; ?>
						<?php foreach ($siswa as $sis): ?>
						<tr>
							<td><?= $no; ?></td>
							<td><?= $sis['nis']; ?></td>
							<td><?= $sis['nama']; ?></td>
							<td>
								<?php
									if (isset($sis['nilai_akhir'])) {
										echo $sis['nilai_akhir'];
									} else {
										echo "Belum ada nilai";
									}
								?>
							</td>
							<td width="200">
								<?php if (isset($sis['id_nilai'])): ?>
								<a href="<?= site_url() ?>penilaian/edit/<?= $sis['id_nilai'] ?>/<?= $r ?>"><span class="badge badge-warning">Edit Nilai</span></a>
								<?php else: ?>
								<a href="<?= site_url() ?>penilaian/tambah/<?= $r ?>/<?= $sis['id'] ?> "><span class="badge badge-primary">Tambah Nilai</span></a>
								<?php endif ?>
								<a href="<?= site_url() ?>penilaian/detailSiswa/<?= $r ?>/<?= $sis['id'] ?>"><span class="badge badge-success">Detail</span></a>
							</td>
						</tr>
						<?php $no++ ?>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>