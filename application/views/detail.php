<main id="main">


	<section class="single-post-content">
		<div class="container">
			<div class="row">
				<div class="col-md-9 post-content" data-aos="fade-up">
					<?php
					if($konten == null){
						echo '<h1>konten tidak ada</h1>';
					} else {
					?>
					<!-- ======= Single Post Content ======= -->
					<div class="single-post">
						<h1 class="mb-5"><?= $konten->judul; ?></h1>
						<div class="post-meta"><i class="bi bi-book-half"></i>Category :<span class="date">
								<?= $konten->nama_kategori; ?></span></div>
						<div class="post-meta"> <i class="bi bi-person-square"></i>Pembuat :<span class="date">
								<?= $konten->nama; ?></span></div>

						<div class="container">
							<div class="foto">
								<figure class="my-4">
									<a href="<?= base_url('assets/upload/konten/') . $konten->foto ; ?>" class="fancybox" data-fancybox="gallery"><img
											src="<?= base_url('assets/upload/konten/') . $konten->foto ; ?>"
											 style="max-width:100%"></a>
									<figcaption><i>Foto Terkait dengan <b><?= $konten->judul; ?></b></i>
									</figcaption>
								</figure>
							</div>
						</div>

						<p><span class="firstcharacter">|</span> <?= $konten->keterangan; ?></p>

					</div><!-- End Single Post Content -->
						<?php }?>
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
</main>
