<h2 class="mb-3">Kategori Konten</h2>
<div class="card mt-3">
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
			<div class="col-lg-12">

			</div>
			<div class="col-lg-4">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-secondary rounded" data-toggle="modal"
					data-target="#tambahkategori">
					Tambah Kategori
				</button>

				<!-- Modal -->
				<div class="modal fade" id="tambahkategori" tabindex="-1" aria-labelledby="tambahkategoriLabel"
					aria-hidden="true">
					<div class="modal-dialog modal-md">

						<form action="<?= base_url('admin/Kategori/simpan')?>" method="post">
							<div class="modal-content">
								<div class="modal-header">
									<h3 class="modal-title" id="tambahkategoriLabel">+ Tambah Kategori</h3>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Nama Kategori : </label>
										<div class="col-sm-12">
											<input type="text"
												class="form-control form-control-capitalize form-control-round"
												placeholder="Masukan Nama" name="nama_kategori" required>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="submit" name="simpan" class="btn btn-primary">Simpan data</button>
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
</div>
<div class="card-block table-border-style">
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Kategori Konten</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
                    $no=1;
                    foreach ($kategori as $ktg) { ?>

				<tr>
					<th scope="row"><?= $no; ?></th>
					<td><?= $ktg['nama_kategori'] ?></td>
					<td>
						<a href="<?= base_url('admin/Kategori/delete/' . $ktg['id_kategori'])?>"
							class="btn btn-danger rounded mr-1"
							onclick="return confirm('apakah anda yakin ingin menghapus ini')"
							style="background-color:#EC3305;border-color:#EC3305;">
							<i class="ti-trash ml-1 mt-5"></i></a>
						<button type="button" class="btn  btn-danger rounded mr-1"
							style="background-color:#FFB012;border-color:#FFB012;" data-toggle="modal"
							data-target="#modalEdit<?= $ktg['id_kategori'] ?>">
							<i class="ti-marker-alt ml-1 mt-5"></i>
						</button>
					</td>

					<!-- Modal -->
					<div class="modal fade" id="modalEdit<?= $ktg['id_kategori'] ?>" tabindex="-1"
						aria-labelledby="modalEditLabel" aria-hidden="true">
						<div class="modal-dialog modal-md">

							<form action="<?= base_url('admin/Kategori/update')?>" method="post">
								<input type="hidden" name="id_kategori" value="<?= $ktg['id_kategori'] ?>">
								<div class="modal-content">
									<div class="modal-header">
										<h3 class="modal-title" id="modalEditLabel"><i
												class="ti-marker-alt ml-1 mt-5"></i> Update kategori</h3>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Nama Kategori :</label>
											<div class="col-sm-12">
												<input type="text"
													class="form-control form-control-capitalize form-control-round"
													placeholder="Masukan Nama" name="nama_kategori" required
													value="<?= $ktg['nama_kategori'] ?>">
											</div>
										</div>

									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary"
											data-dismiss="modal">Close</button>
										<button type="submit" name="simpan" class="btn btn-primary">Update Data</button>
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
