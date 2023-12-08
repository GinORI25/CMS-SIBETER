
	<main id="main">
		<!-- End Hero Slider Section -->
		<section>
			<div class="container aos-init aos-animate" data-aos="fade-up">
				<div class="row">
					<div class="col-12 text-center mb-5">
						<div class="row justify-content-center">
							<div class="col-lg-6">
								<h2 class="display-4"><?= $jeneng;?></h2>
		
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
		</section>
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