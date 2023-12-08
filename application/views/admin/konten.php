<h2>Konten</h2>

<div class="card">
	<div class="card-header">
		<div class="card-header-right">
			<ul class="list-unstyled card-option">
				<li><i class="icofont icofont-simple-left "></i></li>
				<li><i class="icofont icofont-maximize full-card"></i></li>
				<li><i class="icofont icofont-minus minimize-card"></i></li>
				<li><i class="icofont icofont-refresh reload-card"></i></li>
				<!-- <li><i class="icofont icofont-error close-card"></i></li>   -->
			</ul>
		</div>
		<div class="row">
			<div class="col-lg-12 ">
			</div>
			<div class="col-lg-4">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-secondary rounded" data-toggle="modal"
					data-target="#tambahkategori">
					Tambah Konten
				</button>

				<!-- Modal -->
				<div class="modal fade" id="tambahkategori" tabindex="-1" aria-labelledby="tambahkategoriLabel"
					aria-hidden="true">
					<div class="modal-dialog modal-lg">

						<form action="<?= base_url('admin/konten/simpan')?>" method="post"
							enctype='multipart/form-data'>
							<div class="modal-content">
								<div class="modal-header">
									<h3 class="modal-title" id="tambahkategoriLabel">+ Tambah Konten</h3>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Judul Konten </label>
										<div class="col-sm-12">
											<input type="text"
												class="form-control form-control-capitalize form-control-round"
												placeholder="Masukan judul konten" name="judul" required>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Kategori : </label>
										<div class="col-sm-12">
											<select name="id_kategori" class="form-control">
												<?php foreach ($kategori as $ktg) { ?>
												<option value="<?= $ktg['id_kategori'] ?>"><?= $ktg['nama_kategori'] ?>
												</option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Keterangan :</label>
										<div class="col-sm-12">
											<textarea type="text" placeholder="Masukan isi konten"
												name="keterangan"></textarea>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Foto :</label>
										<div class="col-sm-12">
											<input type="file" name="foto" class="form-control"
												accept="image/png, image/jpeg">
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="submit" name="simpan" class="btn btn-primary">Simpan data</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-12 mt-2" id="hilang">
			<?= $this->session->flashdata('alert') ?>
		</div>
	</div>

<div class="card-block table-border-style">
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>judul Konten</th>
					<th>Kategori Konten</th>
					<th>Tanggal</th>
					<th>Kreator</th>
					<th>Foto</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
                    $no=1;
                    foreach ($konten as $ktn) { ?>

				<tr>
					<th scope="row"><?= $no; ?></th>
					<td><?= $ktn['judul'] ?></td>
					<td><?= $ktn['nama_kategori'] ?></td>
					<td><?= $ktn['tanggal'] ?></td>
					<td><?= $ktn['nama'] ?></td>
					<td>

						<a class="dropdown-item d-flex align-items-center"
							href="<?= base_url('assets/upload/konten/') . $ktn['foto']; ?>" class="fancybox"
							data-fancybox="gallery1">
							<i class="ti-image mr-1"></i>
							<span>Lihat Foto</span>
						</a>
					</td>
					<td>

						<a href="<?= base_url('admin/konten/delete/' . $ktn['foto'])?>"
							class="btn btn-danger rounded mr-1"
							onclick="return confirm('apakah anda yakin ingin menghapus ini')"
							style="background-color:#EC3305;border-color:#EC3305;">
							<i class="ti-trash ml-1 mt-5"></i></a>
						<button type="button" class="btn btn-secondary rounded" data-toggle="modal"
							data-target="#updatekategori<?= $no; ?>"
							style="background-color:#FFB012;border-color:#FFB012;">
							<i class="ti-marker-alt ml-1 mt-5"></i>
						</button>

						<!-- Modal -->
						<div class="modal fade" id="updatekategori<?= $no; ?>" tabindex="-1"
							aria-labelledby="updatekategoriLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg">

								<form action="<?= base_url('admin/konten/update')?>" method="post"
									enctype='multipart/form-data'>
									<input type="hidden" name="nama_foto" value="<?= $ktn['foto'] ?>">
									<div class="modal-content">
										<div class="modal-header">
											<h3 class="modal-title" id="updatekategoriLabel"><b><?= $ktn['judul'] ?></b>
											</h3>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Judul Konten </label>
												<div class="col-sm-12">
													<input type="text"
														class="form-control form-control-capitalize form-control-round"
														placeholder="Masukan judul konten" name="judul"
														value="<?= $ktn['judul'] ?>">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Kategori : </label>
												<div class="col-sm-12">
													<select name="id_kategori" class="form-control">
														<?php foreach ($kategori as $ktg) { ?>
														<option
															<?php if($ktg['id_kategori'] == $ktn['id_kategori'] ){echo "selected";} ?>
															value="<?= $ktg['id_kategori'] ?>">
															<?= $ktg['nama_kategori'] ?></option>
														<?php } ?>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Keterangan :</label>
												<div class="col-sm-12">
													<textarea type="text" class="form-control form-control-capitalize"
														placeholder="Masukan isi konten"
														name="keterangan"> <?= $ktn['keterangan'] ?></textarea>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Foto :</label>
												<div class="col-sm-12">
													<input type="file" name="foto" class="form-control"
														accept="image/png, image/jpeg">
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary"
												data-dismiss="modal">Close</button>
											<button type="submit" name="simpan" class="btn btn-primary">Simpan
												data</button>
										</div>
								</form>
							</div>
						</div>
					</td>
				</tr>
				<?php $no++; }  ?>
			</tbody>
		</table>
	</div>
</div>
</div>