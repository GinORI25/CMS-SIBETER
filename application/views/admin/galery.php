<h3 class="mb-3">Galery</h3>
<div class="row">
	<div class="col-lg-12 mb-3">
		<div class="card p-3 mb-3">
		
			<form action="<?= base_url('admin/galery/simpan')?>" method="post" enctype='multipart/form-data'>
				<div class="form-group row mt-3">
					<label class="col-sm-1 col-form-label ">name :</label>
					<div class="col-sm-11  mb-3">
						<input type="text" class="form-control" placeholder="Input name" name="name" value="img" required>
					</div>
					<label class="col-sm-1 col-form-label">Foto :</label>
					<div class="col-sm-11">
						<input type="file" name="foto" class="form-control" accept="image/png,image/jpeg">
						<div class="form-control-static mt-2 text-danger"><small><b> !! Pilih foto dengan ukuran ( 1:3 )
								Terimakasih :D</small></b>
						</div>
						<div class="modal-footer">
							<button type="submit" name="simpan" class="btn btn-primary">Simpan galery</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	<?php foreach ($galery as $glr) { ?>
	<div class="col-lg-4">
		<div class="card p-3" style=";border:solid">
			<img src="<?= base_url('assets/upload/galery/') . $glr['foto']; ?>" class="card-img-top">
			<div class="card-body">
			
				<p class="card-text"><?= $glr['name'];?></p>

				<a href="<?= base_url('admin/galery/delete/' . $glr['foto'])?>" class="btn  btn-danger rounded mr-1"
					onclick="return confirm('apakah anda yakin ingin menghapus ini')"
					style="background-color:#EC3305;border-color:#EC3305;">
					Hapus</a>


			</div>
		</div>
	</div>
	<?php } ?>
</div>
