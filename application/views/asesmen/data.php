<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="clearfix">
			<div class="card">
				<div class="card-body">
					<?php if ($this->session->flashdata('flash')): ?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						Data Asesmen <strong>Berhasil! </strong><?= $this->session->flashdata('flash'); ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<?php endif ?>
					<h5 class="mb-3"><?= $roma ?></h5>
					<h5 class="mb-3"><?= $siswa ?></h5>

					<div class="clearfix">
						<a class="btn btn-primary mb-3 float-right" href="<?= site_url() ?>asesmen/tambah/<?= $id_mengajar ?>/<?= $id_siswa ?>">Tambah Asesmen</a>
						<a class="btn btn-success mr-3 float-right" href="<?= site_url() ?>asesmen/print/<?= $id_mengajar ?>/<?= $id_siswa ?>">Print</a>
					</div>
					<table id="table_id" class="table table-hover">
						<thead>
							<tr>
								<th scope="col">Aspek</th>
								<th scope="col">Deskripsi</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($asesmen as $ases): ?>
							<tr>
								<td><?= $ases['aspek']; ?></td>
								<td><?= $ases['deskripsi']; ?></td>
								<td width="200">
									<a href="<?= site_url() ?>asesmen/ubah/<?= $id_mengajar ?>/<?= $id_siswa ?>/<?= $ases['id'] ?>"><span class="badge badge-warning">Edit</span></a>
									<a href="<?= site_url() ?>asesmen/hapus/<?= $id_mengajar ?>/<?= $id_siswa ?>/<?= $ases['id'] ?>" onclick="return confirm('yakin?')"><span class="badge badge-danger">Hapus</span></a>
								</td>
							</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
			<a href="<?= site_url('asesmen/siswa') ?>/<?= $id_mengajar ?>" type="button" class="btn btn-success float-right mr-3">Kembali</a>
		</div>
	</div>
</section>