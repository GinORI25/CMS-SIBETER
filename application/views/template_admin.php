<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $title; ?></title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="CodedThemes">
	<meta name="keywords"
		content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
	<meta name="author" content="CodedThemes">
	<!-- Favicon icon -->
	<link rel="icon" href="<?= base_url('assets/admin/guruable2/')?>assets/images/favicon.ico" type="image/x-icon">
	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
	<!-- Required Fremwork -->
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('assets/admin/guruable2/')?>assets/css/bootstrap/css/bootstrap.min.css">
	<!-- themify-icons line icon -->
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('assets/admin/guruable2/')?>assets/icon/themify-icons/themify-icons.css">
	<!-- ico font -->
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('assets/admin/guruable2/')?>assets/icon/icofont/css/icofont.css">
	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/guruable2/')?>assets/css/style.css">
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('assets/admin/guruable2/')?>assets/css/jquery.mCustomScrollbar.css">
	<!-- Google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap" rel="stylesheet">
	<!-- end google font -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<!-- Place the first <script> tag in your HTML's <head> -->
	<script src="https://cdn.tiny.cloud/1/aq37vou6o6fl7r2lfo92721t18z6173r03hevnh6qpu52i0f/tinymce/6/tinymce.min.js"
		referrerpolicy="origin"></script>


</head>

<body>
	<!-- Pre-loader start -->
	<div class="theme-loader">
		<div class="ball-scale">
			<div class='contain'>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">

					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
				<div class="ring">
					<div class="frame"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- Pre-loader end -->
	<div id="pcoded" class="pcoded">
		<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">

			<nav class="navbar header-navbar pcoded-header">
				<div class="navbar-wrapper">
					<div class="navbar-logo">
						<a href="#" class="mt-3 text-warning" id="mobile-collapse" style="font-family: 'Poppins', sans-serif; margin-right:14rem;">
					<h3><i class="ti-align-justify mr-2 text-light"></i>Orvills</h3>
						</a>
						<a class="mobile-options">
							<i class="ti-more btn-lg"></i>
						</a>
					</div>

				
					<div class="navbar-container container-fluid">
						<ul class="nav-left">
							<li>

							<button class="btn btn-out btn-inverse btn-square"><?= $title; ?></button>
								
							</li>
						</ul>
						<ul class="nav-right">

							<li>
								<div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
								</div>
							</li>

							<li>
								<a href="#!" onclick="javascript:toggleFullScreen()">
									<i class="ti-fullscreen"></i>
								</a>
							</li>

							<?php if($this->session->userdata('level')=='Admin'){ ?>
							<li class="header-notification">
								<a href="<?= base_url('admin/Pesan');?>">
									<i class="ti-bell"></i>
								</a>
							</li>
							<?php } ?>
							<li class="user-profile header-notification">
								<a href="#!">
									<span class="mr-2"><?= $user['nama']; ?></span>

									<img src="<?= base_url('assets/upload/profile/') . $user['image']; ?>"
										class="img-radius" alt="User-Profile-Image">
								</a>

								<ul class="show-notification profile-notification">
									<li>
										<div class="media-body" align="center">
											<img align="center" class="rounded-circle mt-4 mb-3 " style="width:8rem;"
												src="<?= base_url('assets/upload/profile/') . $user['image']; ?>">
											<h5 class="notification-user"><?= $user['nama']; ?></h5>
											<small><?= $user['level']; ?></small>
										</div>

									</li>
									<li>
										<a href="<?= base_url('assets/upload/profile/') . $user['image']; ?>"
											class="fancybox" data-fancybox="gallery1">
											<i class="ti-image"></i> Lihat foto
										</a>
									</li>
									<li>
										<a href="<?= base_url('admin/Profile');?>">
											<i class="ti-user"></i> Profile
										</a>
									</li>
									<li>
										<a href="<?= base_url('admin/auth/logout')?>">
											<i class="ti-shift-right"></i> Logout
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="pcoded-main-container">
				<div class="pcoded-wrapper">
					<nav class="pcoded-navbar">
						<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
						<div class="pcoded-inner-navbar main-menu">



							<div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation"></div>
							<ul class="pcoded-item pcoded-left-item">
								<li class="active">
									<a href="<?= base_url('admin/Dashboard');?>">
										<span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
										<span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
								<li class="active">
									<a href="<?= base_url('admin/Caraousel');?>">
										<span class="pcoded-micon"><i class="ti-layers"></i><b>D</b></span>
										<span class="pcoded-mtext" data-i18n="nav.dash.main">Caraousel</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
								<li class="active">
									<a href="<?= base_url('admin/Galery');?>">
										<span class="pcoded-micon"><i class="ti-gallery"></i><b>D</b></span>
										<span class="pcoded-mtext" data-i18n="nav.dash.main">Galery</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
								<li class="active">
									<a href="<?= base_url('admin/Kategori');?>">
										<span class="pcoded-micon"><i class="ti-direction-alt"></i><b>D</b></span>
										<span class="pcoded-mtext" data-i18n="nav.dash.main">Kategori Konten</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
								<li class="active">
									<a href="<?= base_url('admin/Konten');?>">
										<span class="pcoded-micon"><i class="ti-notepad"></i><b>D</b></span>
										<span class="pcoded-mtext" data-i18n="nav.dash.main">Konten</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>
								<?php if($this->session->userdata('level')=='Admin'){ ?>
								<li class="active">
									<a href="<?= base_url('admin/User');?>">
										<span class="pcoded-micon"><i class="ti-user"></i><b>FC</b></span>
										<span class="pcoded-mtext" data-i18n="nav.form-components.main">User</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>

								<li class="active">
									<a href="<?= base_url('admin/Konfigurasi');?>">
										<span class="pcoded-micon"><i class="ti-rss"></i><b>FC</b></span>
										<span class="pcoded-mtext"
											data-i18n="nav.form-components.main">Konfigurasi</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>

								<?php } ?>
							</ul>

							<div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">User</div>
							<ul class="pcoded-item pcoded-left-item">
								<li class="active">
									<a href="<?= base_url('admin/Profile');?>">
										<span class="pcoded-micon"><i class="ti-user"></i><b>FC</b></span>
										<span class="pcoded-mtext" data-i18n="nav.form-components.main">Profile</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>


							</ul>
					</nav>

				</div>
				<div class="pcoded-content">
					<div class="card-block">

						<h2 class=""><?= $contents; ?></h2>
					</div>
				</div>
			</div>
		</div>


		<!-- Warning Section Starts -->
		<!-- Older IE warning message -->
		<!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="<?= base_url('assets/admin/guruable2/')?>assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="<?= base_url('assets/admin/guruable2/')?>assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="<?= base_url('assets/admin/guruable2/')?>assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="<?= base_url('assets/admin/guruable2/')?>assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="<?= base_url('assets/admin/guruable2/')?>assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
		<!-- Warning Section Ends -->
		<!-- Required Jquery -->
		<script type="text/javascript" src="<?= base_url('assets/admin/guruable2/')?>assets/js/jquery/jquery.min.js">
		</script>
		<script type="text/javascript"
			src="<?= base_url('assets/admin/guruable2/')?>assets/js/jquery-ui/jquery-ui.min.js"></script>
		<script type="text/javascript" src="<?= base_url('assets/admin/guruable2/')?>assets/js/popper.js/popper.min.js">
		</script>
		<script type="text/javascript"
			src="<?= base_url('assets/admin/guruable2/')?>assets/js/bootstrap/js/bootstrap.min.js"></script>
		<!-- jquery slimscroll js -->
		<script type="text/javascript"
			src="<?= base_url('assets/admin/guruable2/')?>assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
		<!-- modernizr js -->
		<script type="text/javascript" src="<?= base_url('assets/admin/guruable2/')?>assets/js/modernizr/modernizr.js">
		</script>
		<!-- am chart -->
		<script src="<?= base_url('assets/admin/guruable2/')?>assets/pages/widget/amchart/amcharts.min.js"></script>
		<script src="<?= base_url('assets/admin/guruable2/')?>assets/pages/widget/amchart/serial.min.js"></script>
		<!-- Todo js -->
		<script type="text/javascript " src="<?= base_url('assets/admin/guruable2/')?>assets/pages/todo/todo.js ">
		</script>
		<!-- Custom js -->
		<script type="text/javascript"
			src="<?= base_url('assets/admin/guruable2/')?>assets/pages/dashboard/custom-dashboard.js"></script>
		<script type="text/javascript" src="<?= base_url('assets/admin/guruable2/')?>assets/js/script.js"></script>
		<script type="text/javascript " src="<?= base_url('assets/admin/guruable2/')?>assets/js/SmoothScroll.js">
		</script>
		<script src="<?= base_url('assets/admin/guruable2/')?>assets/js/pcoded.min.js"></script>
		<script src="<?= base_url('assets/admin/guruable2/')?>assets/js/demo-12.js"></script>
		<script src="<?= base_url('assets/admin/guruable2/')?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
		<script>
			var $window = $(window);
			var nav = $('.fixed-button');
			$window.scroll(function () {
				if ($window.scrollTop() >= 200) {
					nav.addClass('active');
				} else {
					nav.removeClass('active');
				}
			});

		</script>
		<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

		<script>
			$('#hilang').delay('slow').slideDown('slow').delay(3000).slideUp(600);

		</script>

		<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
		<script>
			tinymce.init({
				selector: 'textarea',
				plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
				toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
			});

		</script>

</body>

</html>
