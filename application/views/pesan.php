
	<main id="main">
		<!-- End Hero Slider Section -->
		<section id="contact" class="contact mb-5">
			<div class="container aos-init aos-animate" data-aos="fade-up">

				<div class="row">
					<div class="col-lg-12 text-center mb-5">
						<h1 class="page-title">Message for Creator</h1>
					</div>
				</div>

				<div class="row gy-4">

					<div class="col-md-4">
						<div class="info-item">
							<i class="bi bi-geo-alt"></i>
							<h3>Address</h3>
							<address>
								<p><?= $konfig->alamat; ?></p>
							</address>
						</div>
					</div><!-- End Info Item -->

					<div class="col-md-4">
						<div class="info-item info-item-borders">
							<i class="bi bi-phone"></i>
							<h3>Phone Number</h3>
							<p><a href="#">
									<p><b>+62 - </b> <?= $konfig->no_wa; ?> </p>
								</a></p>
						</div>
					</div><!-- End Info Item -->

					<div class="col-md-4">
						<div class="info-item">
							<i class="bi bi-envelope"></i>
							<h3>Email</h3>
							<p><a href="mailto:info@example.com"><?= $konfig->email; ?></a></p>
						</div>
					</div><!-- End Info Item -->

				</div>

				<div class="form mt-5">
					<div class="card p-5 " style="box-shadow:2px">
						<form action="<?= base_url('Home/pesanSimpan')?>" method="post">
							<div class="row">
								<div class="form-group col-md-6">
									<input type="text" name="nama" class="form-control mb-2" id="nama"
										placeholder="Your name" required="true">
								</div>
								<div class="form-group col-md-6">
									<input type="email" class="form-control mb-2" name="email" id="email"
										placeholder="Your Email" required="true">
								</div>
							</div>
							<div class="form-group">
								<textarea class="form-control mt-3" name="pesan" rows="5"
									placeholder="Message for this web" required=""></textarea>
							</div>
							<div class="my-3">
								<div class="col-lg-12 mt-2" id="hilang">
									<?= $this->session->flashdata('alert') ?>
								</div>
							</div>
							<div class="text-center"><button type="submit" class="btn btn-dark px-4 mx-auto my-2">Send
									Message</button></div>
						</form>
					</div>

				</div><!-- End Contact Form -->

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