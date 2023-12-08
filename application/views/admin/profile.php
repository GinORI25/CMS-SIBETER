<h2>My Profile</h2>


<body>


	<main id="main" class="main">

		<div class="pagetitle">
			<nav>
				<ol class="breadcrumb">

					<li class="breadcrumb-item">user</li>
					<li class="breadcrumb-item active">Profile</li>
				</ol>
			</nav>
		</div><!-- End Page Title -->

		<div class="col-lg-12 mt-2" id="hilang">
			<?= $this->session->flashdata('alert') ?>
		</div>

		<section class="section profile">
			<div class="row">
				<div class="col-xl-4">

					<div class="card">

						<div class="card-body profile-card pt-5 d-flex flex-column ">
							<center>
								
						

							<a href="<?= base_url('assets/upload/profile/') . $user['image']; ?>" class="fancybox"
								data-fancybox="gallery1" data-placement="right" data-trigger="hover"
								data-toggle="tooltip" title="" data-original-title="Lihat foto"><img src="<?= base_url('assets/upload/profile/') . $user['image']; ?>" alt=""
									class="rounded-circle mb-4" style="width:19rem;">
						</a>
						</center>

							<div class="form-group row ml-4 mt-3">

								<label class="col-sm-6 text-purple"><b>Username | Nama </b></label>
								<div class="col-sm-6">
									<div class="form-control-static"><?= $user['username']; ?> |
										<?= $user['nama']; ?>
									</div>
								</div>
								<label class="col-sm-6 text-purple"><b>posisi</b> </label>
								<div class="col-sm-6">
									<div class="form-control-static"><?= $user['level']; ?>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>




				<div class="col-lg-8 ">
					<!-- <h6 class="sub-title">Tab With Icon</h6> -->
					<div class="card p-4">
						<div class="sub-title"><i class="icofont icofont-ui-user mr-2"></i> Profile Details</div>

						<!-- Tab panes -->
						<div class="tab-content card-block">

							<div class="tab-pane active" id="profile1" role="tabpanel" aria-expanded="true">
								<form action="<?= base_url('admin/Profile/update') ; ?>" method="post"
									enctype="multipart/form-data">
									<input type="text" name="id_user" value="<?= $user['id_user']; ?>" hidden>
									<div class="row mb-3">
										<label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile
											Image</label>
										<div class="col-md-8 col-lg-9">
											<img src="<?= base_url('assets/upload/profile/') . $user['image']; ?>"
												alt="profile" class="img-fluid" style="width:8rem;">
											<div class="pt-2">
												<input type="file" name="image" class="mb-3"
													title="Upload new profile image">
											</div>
										</div>

										<div class="row mb-3">
											<label for="fullName"
												class="col-md-4 col-lg-3 col-form-label  mb-3">username</label>
											<div class="col-md-8 col-lg-9 mb-3">
												<input name="username" type="text" class="form-control" id="username"
													value="<?= $user['username']; ?>" disabled>
											</div>


											<label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama</label>
											<div class="col-md-8 col-lg-9">
												<input name="nama" type="text" class="form-control" id="nama"
													value="<?= $user['nama']; ?>">
											</div>
										</div>
										<div class="text-center">
											<button type="submit" class="btn btn-primary ml-3">Save Changes</button>
										</div>
								</form><!-- End Profile Edit Form -->

							</div>

						</div>
					</div>
				</div>







		</section>

	</main><!-- End #main -->
