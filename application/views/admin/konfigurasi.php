<h2></h2>
<div class="col-lg-12 mt-2" id="hilang">
			<?= $this->session->flashdata('alert') ?>
		</div>
<form action="<?= base_url('admin/konfigurasi/update')?>" method="post">
	<div class="modal-content">
		<div class="modal-header">
			<h3 class="modal-title" id="tambahkategoriLabel">Konfigurasi</h3>
			
		</div>
		<div class="modal-body">
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">Judul website </label>
				<div class="col-sm-12">
					<input type="text" class="form-control form-control-capitalize form-control-round"
						placeholder="Masukan judul konten" name="judul_website" value="<?= $konfig->judul_website; ?>">
				</div>
			</div>
		
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">Profil :</label>
				<div class="col-sm-12">
					<textarea type="text" class="form-control form-control-capitalize " placeholder="Masukan deskripsi"
						name="profil_website" required><?= $konfig->profil_website;?></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">About Me :</label>
				<div class="col-sm-12">
					<textarea type="text" class="form-control form-control-capitalize " placeholder="Masukan deskripsi"
						name="about_me" required><?= $konfig->about_me;?></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">XTwitter </label>
				<div class="col-sm-12">
					<input type="text" class="form-control form-control-capitalize form-control-round"
						 name="xtwitter" value="<?= $konfig->xtwitter; ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">FACEBOOK </label>
				<div class="col-sm-12">
					<input type="text" class="form-control form-control-capitalize form-control-round"
						 name="facebook" value="<?= $konfig->facebook; ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">INSTAGRAM : </label>
				<div class="col-sm-12">
					<input type="text" class="form-control form-control-capitalize form-control-round"
						 name="instagram" value="<?= $konfig->instagram; ?>">
				</div>
			</div>
		
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">Github </label>
				<div class="col-sm-12">
					<input type="text" class="form-control form-control-capitalize form-control-round"
						 name="github" value="<?= $konfig->github; ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">EMAIL :</label>
				<div class="col-sm-12">
					<input type="text" class="form-control form-control-capitalize form-control-round"
						 name="email" value="<?= $konfig->email; ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">ALAMAT :</label>
				<div class="col-sm-12">
					<input type="text" class="form-control form-control-capitalize form-control-round"
						 name="alamat" value="<?= $konfig->alamat; ?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">whatsApp :</label>
				<div class="col-sm-12">
					<input type="text" class="form-control form-control-capitalize form-control-round"
						 name="no_wa" value="<?= $konfig->no_wa; ?>">
				</div>
			</div>



		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" name="simpan" class="btn btn-primary">Simpan data</button>
		</div>
</form>
