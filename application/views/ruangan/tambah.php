<section class="content">
	<div class="container-fluid">
		<div class="card">
			<div class="card-body col-md-6">
				<form action="" method="post" class="mt-5">
					<div class="form-group">
						<label for="nama_ruangan">Nama Ruangan</label>
						<input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan">
						<small class="form-text text-danger"><?= form_error('nama_ruangan') ?></small>
					</div>
					<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah</button>
				</form>
				<a href="<?= site_url('ruangan') ?>" type="button" class="btn btn-success float-right mr-3">Kembali</a>
			</div>
		</div>
	</div>
</section>