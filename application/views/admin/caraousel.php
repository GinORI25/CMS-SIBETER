<h2 class="mb-3">caraousel</h2> 
<div class="row">
	<div class="col-lg-12 mb-3">
		<div class="card p-3 mb-3 ">
	

			<form action="<?= base_url('admin/Caraousel/simpan')?>" method="post" enctype='multipart/form-data'>
				<div class="form-group row mt-3 ">
					<label class="col-sm-1 col-form-label ">Judul :</label>
					<div class="col-sm-11  mb-3 ">
						<input type="text" class="form-control" placeholder="Input judul" name="judul" required>
					</div>
					<label class="col-sm-1 col-form-label ">Caption :</label>
					<div class="col-sm-11  mb-3">
						<input type="text" class="form-control" placeholder="Input caption" name="caption" required>
					</div>
					<label class="col-sm-1 col-form-label">Foto :</label>
					<div class="col-sm-11">
						<input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
						<div class="form-control-static mt-2 text-danger"><b> <small>!! Pilih foto dengan ukuran ( 1:3 )
								Terimakasih :D</small></b>
						</div>
						<div class="modal-footer">
							<button type="submit" name="simpan" class="btn btn-primary">Simpan Caraousel</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	<?php foreach ($caraousel as $crs) { ?>
	<div class="col-lg-4">
		<div class="card p-3" style=";border:solid">
			<img src="<?= base_url('assets/upload/caraousel/') . $crs['foto']; ?>" class="card-img-top">
			<div class="card-body">
				<h4 class="card-title"><b><?= $crs['judul'];?></b></h4>
				<p class="card-text"><?= $crs['caption'];?></p>

				<a href="<?= base_url('admin/caraousel/delete/' . $crs['foto'])?>" class="btn  btn-danger rounded mr-1"
					onclick="return confirm('apakah anda yakin ingin menghapus ini')"
					style="background-color:#EC3305;border-color:#EC3305;">
					Hapus</a>


			</div>
		</div>
	</div>
	<?php } ?>
</div>
