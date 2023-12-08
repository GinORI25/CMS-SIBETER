<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title><?= $title; ?></title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?= base_url('assets/public/ZenBlog/')?>assets/img/favicon.png" rel="icon">
	<link href="<?= base_url('assets/public/ZenBlog/')?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
		rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url('assets/public/ZenBlog/')?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/public/ZenBlog/')?>assets/vendor/bootstrap-icons/bootstrap-icons.css"
		rel="stylesheet">
	<link href="<?= base_url('assets/public/ZenBlog/')?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/public/ZenBlog/')?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/public/ZenBlog/')?>assets/vendor/aos/aos.css" rel="stylesheet">

	<!-- Template Main CSS Files -->
	<link href="<?= base_url('assets/public/ZenBlog/')?>assets/css/variables.css" rel="stylesheet">
	<link href="<?= base_url('assets/public/ZenBlog/')?>assets/css/main.css" rel="stylesheet">

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<!-- =======================================================
  * Template Name: ZenBlog
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="header d-flex align-items-center fixed-top">
		<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

			<a href="#" class="logo d-flex align-items-center">
			<h4><?= $konfig->judul_website;?></h4>
			</a>

			<nav id="navbar" class="navbar">
				<ul>
					<li><a href="<?= base_url('Home')?>">Home</a></li>
				

					<li class="dropdown"><a href="#"><span>Categories</span> <i
								class="bi bi-chevron-down dropdown-indicator"></i></a>
						<ul>
							<?php foreach ($kategori as $kate) {?>
							<li><a href="<?= base_url('home/kategori/'. $kate['id_kategori'])?>">
									<?= $kate['nama_kategori']; ?></a></li>

							<?php } ?>
						</ul>
					</li>
<!-- 

					<li><a href="<?= base_url('home/galery')?>">Galery</a></li> -->
					<li><a href="<?= base_url('home/about')?>">About</a></li>
					<li><a href="<?= base_url('home/pesan')?>">Pesan</a></li>
					<li><a href="<?= base_url('admin/auth')?>"><b>Login</b></a></li>
					
				</ul>
			</nav><!-- .navbar -->
			<!-- .navbar -->

			<div class="position-relative">

				<a href="<?= base_url('auth')?>" class="mx-2 js-search-open"></a>

				<!-- ======= Search Form ======= -->
				<div class="search-form-wrap js-search-form-wrap">
					<form action="<?= base_url('home'); ?>" method="post" class="search-form">
						<span class="icon bi-search"></span>
						<input type="text" placeholder="Search keyword..." class="form-control" nama="keword"
							autocomplete="off ">
						<input type="submit" class="btn" nama="submit" value="Search!!">
						<button class="btn js-search-close"><span class="bi-x"></span></button>
					</form>
				</div><!-- End Search Form -->

				<i class="bi bi-list  mobile-nav-toggle"></i>

			</div>

		</div>

	</header><!-- End Header -->

	<main id="main">
		<?= $contents; ?>
	</main>
	<!-- ======= Footer ======= -->
	<footer id="footer" class="footer">

		<div class="footer-content">
			<div class="container">

				<div class="row g-5">
					<div class="col-lg-4">
					<img src="<?= base_url('assets/upload/about/')?>orvill3.png" alt="" style="width:9rem;">
						<p><?= word_limiter($konfig->profil_website,30); ?></p>
						<p><a href="<?= base_url('home/about')?>" class="btn btn-light px-4 mx-auto my-2" style="margin-bottom:1.5rem;">Lear
								More <i class="bi bi-arrow-right-square-fill"></i></a></p>

					</div>

					<div class="col-lg-2">

						<div class="alamat">
							<h5><i class="bi bi-geo-alt-fill "></i> Alamat : </h5>
							<p><?= $konfig->alamat; ?></p>
						</div>
						<div class="wa">
							<h5><i class="bi bi-telephone-fill"></i> whatsApp : </h5>
							<p>+62 - <?= $konfig->no_wa; ?></p>
						</div>
					</div>
					<div class="col-6 col-lg-2">
						<h3 class="footer-heading">Categories</h3>
						<ul class="footer-links list-unstyled">
							<?php foreach ($kategori as $kate) {?>
							<li><a href="<?= base_url('home/kategori/'. $kate['id_kategori'])?>"><i
										class="bi bi-chevron-right"></i> <?= $kate['nama_kategori']; ?></a>
							</li>

							<?php } ?>
						</ul>
					</div>

					<div class="col-lg-4">
						<h3 class="footer-heading">Recent Posts</h3>

						<?php foreach ($recentPost as $rp) {?>
						<ul class="footer-links footer-blog-entry list-unstyled">
							<li>
								<a href="<?= base_url('home/artikel/' . $rp['slug']); ?>"
									class="d-flex align-items-center">
									<img src="<?= base_url('assets/upload/konten/') . $rp['foto']; ?>" alt=""
										class="img-fluid me-3">
									<div>
										<div class="post-meta"><span class="date"><?= $rp['nama_kategori']; ?></span>
											<span class="mx-1">•</span> <span><?= $rp['tanggal']; ?></span></div>
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

		<div class="footer-legal">
			<div class="container">

				<div class="row justify-content-between">
					<div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
						<div class="copyright">
							© Copyright <strong><span>SIBETER</span></strong>. All Rights Reserved
						</div>

						<div class="credits">
							<!-- All the links in the footer should remain intact. -->
							<!-- You can delete the links only if you purchased the pro version. -->
							<!-- Licensing information: https://bootstrapmade.com/license/ -->
							<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
							Designed by <a href="#">Orvills</a>
						</div>

					</div>

					<div class="col-md-6">
						<div class="social-links mb-3 mb-lg-0 text-center text-md-end">
							<a href="<?= $konfig->xtwitter; ?>" class="xtwittr"><i class="bi bi-twitter"></i></a>
							<a href="<?= $konfig->facebook; ?>" class="facebook"><i class="bi bi-facebook"></i></a>
							<a href="<?= $konfig->instagram; ?>" class="instagram"><i class="bi bi-instagram"></i></a>
							<a href="<?= $konfig->github; ?>" class="google-plus"><i class="bi bi-github"></i></a>
						</div>

					</div>

				</div>

			</div>
		</div>

	</footer>

	<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
			class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="<?= base_url('assets/public/ZenBlog/')?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js">
	</script>
	<script src="<?= base_url('assets/public/ZenBlog/')?>assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="<?= base_url('assets/public/ZenBlog/')?>assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="<?= base_url('assets/public/ZenBlog/')?>assets/vendor/aos/aos.js"></script>
	<script src="<?= base_url('assets/public/ZenBlog/')?>assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="<?= base_url('assets/public/ZenBlog/')?>assets/js/main.js"></script>

</body>

</html>
