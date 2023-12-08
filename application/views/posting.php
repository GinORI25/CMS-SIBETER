
	<main id="main">


		<section id="search-result" class="search-result">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h3 class="category-title">Posting</h3>
						<?php foreach ($konten as $ktn) { ?>
						<div class="d-md-flex post-entry-2 small-img border-bottom mb-5 ">
							<a href="<?= base_url('home/artikel/' . $ktn['slug']); ?>" class="me-4 thumbnail">
								<img src="<?= base_url('assets/upload/konten/') . $ktn['foto']; ?>" alt=""
									class="img-fluid">
							</a>
							<div>
								<div class="post-meta"><span class="date"><?= $ktn['nama_kategori']; ?></span> <span
										class="mx-1">•</span> <span><?= $ktn['tanggal']; ?></span></div>
								<h3><a href="<?= base_url('home/artikel/' . $ktn['slug']); ?>"><?= $ktn['judul']; ?></a>
								</h3>
								<div class="d-flex align-items-center author">
									<div class="photo"><img
											src="<?= base_url('assets/upload/profile/') . $ktn['image']; ?>" alt=""
											class="img-fluid">
									</div>
									<div class="name">
										<h3 class="m-0 p-0"><?= $ktn['nama']; ?></h3>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>

						
					</div>

					<div class="col-md-3">
						<!-- ======= Sidebar ======= -->

						<div class="aside-block">
							<h3 class="aside-title">Categories</h3>
							<ul class="aside-links list-unstyled">
								<?php foreach ($kategori as $kate) {?>
								<li><a href="<?= base_url('home/kategori/'. $kate['id_kategori'])?>"><i
											class="bi bi-chevron-right"></i> <?= $kate['nama_kategori']; ?></a>
								</li>

								<?php } ?>
							</ul>
						</div><!-- End Categories -->



						<div class="aside-block">
							<div class="col-lg-4">
								<h3 class="aside-title">Recent Posts</h3>

								<?php foreach ($recentPost as $rp) {?>
								<ul class="aside-links list-unstyled">
									<li>
										<a href="<?= base_url('home/artikel/' . $rp['slug']); ?>"
											class="d-flex align-items-center">
											<img src="<?= base_url('assets/upload/konten/') . $rp['foto']; ?>" alt=""
												class="img-fluid me-3">
											<div>
												<div class="post-meta d-block"><span class="mx-1"></span>
												</div>
												<span><?= $rp['judul']; ?></span>
											</div>
										</a>
									</li>
								</ul>
								<?php } ?>
							</div>
						</div>

					</div>

				</div>
			</div>
		</section>




		<!-- End Hero Slider Section -->
		<!-- <section>
			<div class="container aos-init aos-animate" data-aos="fade-up">
				<div class="row">
					<div class="col-12 text-center mb-5">
						<div class="row justify-content-center">
							<div class="col-lg-6">
								<h2 class="display-4">Posting</h2>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sint sed, fugit
									distinctio ad eius itaque deserunt doloribus harum excepturi laudantium sit officiis
									et eaque blanditiis. Dolore natus excepturi recusandae.</p>

							</div>
						</div>
					</div>
					<?php foreach ($konten as $ktn) { ?>
					<div class="col-lg-4 text-center mb-5">
						<img src="<?= base_url('assets/upload/konten/') . $ktn['foto']; ?>" alt=""
							class="img-fluid  w-50 mb-4">
						<h4><b><?= $ktn['judul']; ?></b></h4>
						<span class="d-block mb-3 text-uppercase"><?= $ktn['nama']; ?></span>
						<span class="d-block mb-3 text-uppercase"><i class="bi bi-book-half"></i>
							<?= $ktn['nama_kategori']; ?></span>
						<a href="<?= base_url('home/artikel/' . $ktn['slug']); ?>"
							class="btn btn-primary px-4 mx-auto my-2">Baca Selengkapnya <i
								class="bi bi-arrow-right-square-fill"></i> </a>
					</div>
					<?php } ?>
				</div>
			</div>
		</section> -->









		<!-- <center>
		<div class="text-start py-4">
              <div class="custom-pagination">
                <a href="#" class="prev">Prevous</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
          
                <a href="#" class="next">Next</a>
              </div>
            </div> 
					</center> -->
		<!-- ======= Footer ======= -->
		</main>