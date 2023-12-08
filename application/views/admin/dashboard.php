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
				<marquee>
					<h5>Selamat datang kak <b>
							<?= $this->session->userdata('nama'); ?></b> anda berhasil Login sebagai
						<i><?= $this->session->userdata('level'); ?></i> :D</h5>
				</marquee>
				<div class="row mt-4">
					<!-- card1 start -->
					<div class="col-md-6 col-xl-2">
						<div class="card widget-card-1">
							<div class="card-block-small">
								<i class="ti-layers bg-c-blue card1-icon"></i>
								<span class="text-c-blue f-w-600">Caraousel</span>
								<h4><?= $caraousel; ?></h4>
								<div>
								</div>
							</div>
						</div>
					</div>
					<!-- card1 end -->
					<!-- card1 start -->
					<div class="col-md-6 col-xl-2">
						<div class="card widget-card-1">
							<div class="card-block-small">
								<i class="ti-gallery bg-c-pink card1-icon"></i>
								<span class="text-c-pink f-w-600">Galery</span>
								<h4><?= $galery; ?></h4>
								<div>
								</div>
							</div>
						</div>
					</div>
					<!-- card1 end -->
					<!-- card1 start -->
					<div class="col-md-6 col-xl-2">
						<div class="card widget-card-1">
							<div class="card-block-small">
								<i class="ti-direction-alt bg-c-green card1-icon"></i>
								<span class="text-c-green f-w-600">Kategori</span>
								<h4><?= $galery; ?></h4>
								<div>
								</div>
							</div>
						</div>
					</div>
					<!-- card1 end -->
					<!-- card1 start -->
					<div class="col-md-6 col-xl-2">
						<div class="card widget-card-1">
							<div class="card-block-small">
								<i class="ti-notepad bg-c-yellow card1-icon"></i>
								<span class="text-c-yellow f-w-600">Konten</span>
								<h4><?= $konten; ?></h4>
								<div>
								</div>
							</div>
						</div>
					</div>
					<!-- card1 end -->
					<!-- card1 start -->
					<div class="col-md-6 col-xl-2">
						<div class="card widget-card-1">
							<div class="card-block-small">
								<i class="ti-user bg-secondary card1-icon"></i>
								<span class="text-c-yellow f-w-600">User</span>
								<h4><?= $usere; ?></h4>
								<div>
								</div>
							</div>
						</div>
					</div>
					<!-- card1 end -->
					<!-- card1 start -->
					<div class="col-md-6 col-xl-2">
						<div class="card widget-card-1">
							<div class="card-block-small">
								<i class="ti-comment-alt bg-dark card1-icon"></i>
								<span class="text-c-yellow f-w-600">Pesan</span>
								<h4><?= $pesan; ?></h4>
								<div>
								</div>
							</div>
						</div>
					</div>
					<!-- card1 end -->
				</div>
			</div>
		</div>
	</div>
</div>
