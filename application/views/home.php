

	<main id="main">

		<!-- ======= Hero Slider Section ======= -->
		<section id="hero-slider" class="hero-slider">
			<div class="container-md" data-aos="fade-in">
				<div class="row">
					<div class="col-12">
						<div class="swiper sliderFeaturedPosts">
							<div class="swiper-wrapper">
								<?php foreach ($caraousel as $cara) { ?>
								<div class="swiper-slide">
									<a href="#" class="img-bg d-flex align-items-end"
										style="background-image: url(<?= base_url('assets/upload/caraousel/' . $cara['foto']); ?>); ">
										<div class="img-bg-inner">
											<h2><?= $cara['judul']; ?></h2>
											<p><?= $cara['caption']; ?></p>
										</div>
									</a>
								</div>
								<?php } ?>

							</div>
							<div class="custom-swiper-button-next">
								<span class="bi-chevron-right"></span>
							</div>
							<div class="custom-swiper-button-prev">
								<span class="bi-chevron-left"></span>
							</div>

							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- End Hero Slider Section -->



		<section class="category-section">
			<div class="container aos-init aos-animate" data-aos="fade-up">

				<div class="section-header d-flex justify-content-between align-items-center mb-5">
					<h2>Content</h2>
					<div><a href="<?= base_url('home/posting')?>" class="more">More Content</a></div>
					<!--<form action="<?= base_url('home');?>" method="post">
					<input type="text" name="search" autocomplete="off">
						<input type="text" placeholder="Search keyword..." class="" nama="keword"
							autocomplete="off"> 
						<input type="submit" class="btn btn-danger" nama="submit" value="Search!!">
					</form> -->
				</div> 

				<div class="row g-5">
					<div class="col-lg-4">
						<?php foreach ($kontenLimit1 as $ktn) { ?>
						<div class="post-entry-1 lg">
							<a href="<?= base_url('home/artikel/' . $ktn['slug']); ?>"><img
									src="<?= base_url('assets/upload/konten/') . $ktn['foto']; ?>" alt=""
									class="img-fluid"></a>
							<div class="post-meta"><span class="date"><?= $ktn['nama_kategori']; ?></span> <span
									class="mx-1">•</span> <span><?= $ktn['tanggal']; ?></span></div>
							<h2><a href="<?= base_url('home/artikel/' . $ktn['slug']); ?>"><?= $ktn['judul']; ?></a>
							</h2>
							<div class="post-meta"> <i class="bi bi-person-square"></i>Pembuat :<span class="date">
									<?= $ktn['nama']; ?></span></div>
						<p class="mb-4 d-block"><?= word_limiter($ktn['keterangan'],80); ?></p>

							<div class="d-flex align-items-center author">
								<div class="photo"><img src="assets/img/person-7.jpg" alt="" class="img-fluid"></div>
								<div class="name">

								</div>
							</div>
						</div>
						<?php } ?>
					</div>

					<div class="col-lg-8">
						<div class="row g-5">
							<?php foreach ($konten as $ktn1) { ?>
							<div class="col-lg-4 border-start custom-border text-center">
								<div class="post-entry-1">
									<a href="<?= base_url('home/artikel/' . $ktn1['slug']); ?>"><img
											src="<?= base_url('assets/upload/konten/') . $ktn1['foto']; ?>" alt=""
											class="img-fluid"></a>
									<h4><b><?= $ktn1['judul']; ?></b></h4>
									<div class="post-meta"><i class="bi bi-book-half"></i>Category :<span class="date">
											<?= $ktn1['nama_kategori']; ?></span></div>
									<div class="post-meta"> <i class="bi bi-person-square"></i>Pembuat :<span
											class="date">
											<?= $ktn1['nama']; ?></span></div>
									<div class="post-meta"><span class="date"><?= $ktn1['tanggal']; ?></span></div>
									<a href="<?= base_url('home/artikel/' . $ktn1['slug']); ?>"
										class="btn btn-primary px-4 mx-auto my-2">Baca Selengkapnya <i
											class="bi bi-arrow-right-square-fill"></i> </a>
								</div>
							</div>
							<?php } ?>
						</div>
					</div> <!-- End .row -->
				</div>

			
					<?= $this->pagination->create_links(); ?>
					
		</section>
		<!-- 
		<section>
			<div class="container aos-init aos-animate" data-aos="fade-up">
				<div class="row">
					<div class="col-12 text-center mb-5">
						<div class="row justify-content-center">
							<div class="col-lg-6">
								<h2 class="display-4">Latest articles form blog</h2>
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
					</main>