<h2>User</h2>


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
			<div class="col-lg-12 mt-4">
			</div>
			<div class="col-lg-4">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-secondary rounded" data-toggle="modal" data-target="#exampleModal">
					Tambah User
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
					aria-hidden="true">
					<div class="modal-dialog modal-md">

						<form action="<?= base_url('admin/User/simpan')?>" method="post">
							<div class="modal-content">
								<div class="modal-header">
									<h3 class="modal-title" id="exampleModalLabel">+ Tambah user</h3>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Username : </label>
										<div class="col-sm-12">
											<input type="text"
												class="form-control form-control-variant form-control-round"
												placeholder="Username" name="username" required>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Nama :</label>
										<div class="col-sm-12">
											<input type="text"
												class="form-control form-control-capitalize form-control-round"
												placeholder="Masukan Nama" name="nama" required>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Password :</label>
										<div class="col-sm-12">
											<input type="password" class="form-control form-control-round"
												placeholder="Password input" name="password" required>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Level :</label>
										<div class="col-sm-12">
											<select type="text"
												class="form-control form-control-normal form-control-round"
												placeholder=".form-control-normal" name="level">
												<option value="Admin">Admin</option>
												<option value="Kontributor">Kontributor</option>
											</select>
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
					<th>Username</th>
					<th>Name</th>
					<th>Foto</th>
					<th>Level</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
                    $no=1;
                    foreach ($user2 as $usr) { ?>

				<tr>
					<th scope="row"><?= $no; ?></th>
					<td><?= $usr['username'] ?></td>
					<td><?= $usr['nama'] ?></td>
					<td><a  href="<?= base_url('assets/upload/profile/') . $usr['image']; ?>" class="fancybox" data-fancybox="gallery1">
								<img src="<?= base_url('assets/upload/profile/') . $usr['image']; ?>" class="rounded-circle" style="width:2.5rem"  data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="Lihat Foto"></a> 
					</td>
					<td><?= $usr['level'] ?></td>
					<td>
						<a href="<?= base_url('admin/user/delete/' . $usr['id_user'])?>"
							class="btn  btn-danger rounded mr-1"
							onclick="return confirm('apakah anda yakin ingin menghapus ini')"
							style="background-color:#EC3305;border-color:#EC3305;">
							<i class="ti-trash ml-1 mt-5"></i></a>
						<button type="button" class="btn  btn-danger rounded mr-1"
							style="background-color:#FFB012;border-color:#FFB012;" data-toggle="modal"
							data-target="#modalEdit<?= $usr['id_user'] ?>">
							<i class="ti-marker-alt ml-1 mt-5"></i>
						</button>

						<!-- Modal -->
						<div class="modal fade" id="modalEdit<?= $usr['id_user'] ?>" tabindex="-1"
							aria-labelledby="modalEditLabel" aria-hidden="true">
							<div class="modal-dialog modal-md">

								<form action="<?= base_url('admin/User/update')?>" method="post">
									<input type="hidden" name="id_user" value="<?= $usr['id_user'] ?>">
									<div class="modal-content">
										<div class="modal-header">
											<h3 class="modal-title" id="modalEditLabel"><i
													class="ti-marker-alt ml-1 mt-5"></i> Edit Nama User</h3>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Username : </label>
												<div class="col-sm-12">
													<input type="text"
														class="form-control form-control-variant form-control-round"
														placeholder="Username" name="username" readonly
														value="<?= $usr['username'] ?>">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Nama :</label>
												<div class="col-sm-12">
													<input type="text"
														class="form-control form-control-capitalize form-control-round"
														placeholder="Masukan Nama" name="nama" required
														value="<?= $usr['nama'] ?>">
												</div>
											</div>

										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary"
												data-dismiss="modal">Close</button>
											<button type="submit" name="simpan" class="btn btn-primary">Update
												Data</button>
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
