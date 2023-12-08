
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