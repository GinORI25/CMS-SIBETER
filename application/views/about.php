<main id="main">
    <section>
      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h1 class="page-title">About us</h1>
          </div>
        </div>

        <div class="row mb-5">

          <div class="d-md-flex post-entry-2 half mb-5">
            <a href="<?= base_url('assets/upload/about/orvill2.png') ?>" class="me-4 thumbnail fancybox"
							data-fancybox="gallery">
              <img src="<?= base_url('assets/upload/about/orvill2.png') ?>" alt="" class="img-fluid">
            </a>
            <div class="ps-md-5 mt-4 mt-md-0">

              <p><?= $konfig->profil_website; ?></p>
              </div>
          </div>

          <div class="d-md-flex post-entry-2 half mt-5">
            <a href="<?= base_url('assets/upload/about/ndv.jpg') ?>" class="me-4 thumbnail order-2 fancybox" data-fancybox="gallery">
              <img src="<?= base_url('assets/upload/about/ndv.jpg') ?>" alt="" class="img-fluid">
            </a>
            <div class="pe-md-5 mt-4 mt-md-0">
              <h2 class="mb-4 display-4">About Me</h2>

              <p><?= $konfig->about_me; ?></p>
             </div>
          </div>

        </div>

      </div>
    </section>

    <section class="mb-5 bg-light">
     
	<main id="main">
		<!-- End Hero Slider Section -->
		<section>
			<div class="container aos-init aos-animate" data-aos="fade-up">
				<div class="row">
					<div class="col-12 text-center mb-5">
						<div class="row justify-content-center">
							<div class="col-lg-6">
								<h2 class="display-4">Galery </h2>
								<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sint sed, fugit
									distinctio ad eius itaque deserunt doloribus harum excepturi laudantium sit officiis
									et eaque blanditiis. Dolore natus excepturi recusandae.</p> -->
							</div>
						</div>
					</div>
					<?php foreach ($galery as $gl) { ?>
					<div class="col-lg-4 text-center mb-5">


						<a class="d-flex align-items-center"
							href="<?= base_url('assets/upload/galery/') . $gl['foto']; ?>" class="fancybox"
							data-fancybox="gallery">
							<!-- <i class="ri-gallery-fill"></i> -->
							<img src="<?= base_url('assets/upload/galery/') . $gl['foto']; ?>" alt="" class="img-fluid">
						</a>
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
		<!-- ======= Footer ======= -->
		</main>
    </section>

  </main>