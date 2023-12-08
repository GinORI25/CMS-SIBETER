			<h2>Pesan</h2>
			<div class="card p-5">
				<div class="row">
					<?php foreach ($pesan as $psn) { ?>
					<div class="col-lg-6">
						<div class="card ">
							<div class="card-body " style="background-color:#E1E7E7">
							
									<div class="col-sm-12 ">
										<h4 class="sub-title"> <b><i class="ti-comments mr-2"></i> Message for creator</b></h4>
										<dl class="dl-horizontal row">
											<dt class="col-sm-4">Nama pengirim</dt>
											<dd class="col-sm-8"><?= $psn['nama'];?></dd>
											<dt class="col-sm-4">Email</dt>
											<dd class="col-sm-8"><?= $psn['email'];?>.</dd>
											<dt class="col-sm-4">Pesan</dt>
											<dd class="col-sm-8"><?= $psn['pesan'];?>.</dd>
										</dl>
										<a href="<?= base_url('admin/pesan/delete/' . $psn['id'])?>" class="btn btn-danger rounded mr-1"
									onclick="return confirm('apakah anda yakin ingin menghapus ini')"
									style="background-color:#EC3305;border-color:#EC3305;">
									Hapus</a>
									</div>

						

							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
