<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>panel</title>
	<link rel="icon" type="image/png" sizes="16x16" href="./images/panel.ico">
	<link rel="stylesheet" href="<?php echo base_url("assets/shop/vendor/chartist/css/chartist.min.css") ?>">
	<link href="<?php echo base_url("assets/shop/vendor/bootstrap-select/dist/css/bootstrap-select.min.css") ?>" rel="stylesheet">
	<link href="<?php echo base_url("assets/shop/vendor/owl-carousel/owl.carousel.css") ?>" rel="stylesheet">
	<link href="<?php echo base_url("assets/shop/css/style.css") ?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body>
	<div id="preloader">
		<div class="sk-three-bounce">
			<div class="sk-child sk-bounce1"></div>
			<div class="sk-child sk-bounce2"></div>
			<div class="sk-child sk-bounce3"></div>
		</div>
	</div>
	<div id="main-wrapper">
		<div class="nav-header">
			<a href="<?php echo base_url("shopmanager")  ?>" class="w-100 text-center brand-logo">logo</a>

			<div class="nav-control">
				<div class="hamburger">
					<span class="line"></span><span class="line"></span><span class="line"></span>
				</div>
			</div>
		</div>
		<!-- Sepetim -->
		<!-- -->
		<div class="header">
			<div class="header-content">
				<nav class="navbar navbar-expand">
					<div class="collapse navbar-collapse justify-content-between">
						<div class="header-left">
							<div class="dashboard_bar">
								Anasayfa
							</div>
						</div>
						<!-- Bildirim Kutusu -->
						<?php require('navbar.php'); ?>
						<!-- -->
					</div>
				</nav>
			</div>
		</div>

		<div class="deznav">
			<div class="deznav-scroll">
				<ul class="metismenu" id="menu">
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-home-2"></i>
							<span class="nav-text">Site Adı</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="<?php echo base_url("shopmanager") ?>">Anasayfa</a></li>
						</ul>
					</li>
					<li><a class="ai-icon" href="<?php echo base_url("shopmanager/productlist") ?>" aria-expanded="false">
							<i class="flaticon-381-list"></i>
							<span class="nav-text">Ürün Listesi</span>
						</a>
					</li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-price-tag"></i>
							<span class="nav-text">Siparişlerim</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="<?php echo base_url("shopmanager/orders") ?>">Tüm Siparişlerim</a></li>
						</ul>
					</li>

					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notebook-4"></i>
							<span class="nav-text">Borç Kayıtları</span>
						</a>

						<ul aria-expanded="false">
							<li><a href="<?php echo base_url("shopmanager/borcbilgi") ?>">Borç Bilgileriniz</a></li>
						</ul>
					</li>

					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Destek</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="<?php echo base_url("shopmanager/mytickets") ?>">Taleplerim</a></li>
							<li><a href="<?php echo base_url("shopmanager/newticket") ?>">Talep oluştur</a></li>
						</ul>
					</li>
				</ul>
				<a href="<?php echo base_url("shopmanager/newticket") ?>">
					<div class="add-menu-sidebar">
						<svg width="125px" height="50px" viewBox="0 0 402 402">
							<g viewBox="0 0 402 402">
								<polygon style="fill: #ffffff;" points="0,318.5 0,83.5 400,83.5 402,83.5 382,112.87 402,142.241 382,171.615 402,200.99    382,230.366 402,259.741 382,289.121 402,318.5  "></polygon>
								<rect x="42.998" y="249.501" style="fill: #0b2a97;" width="108" height="34"></rect>
								<rect x="42.998" y="118.501" style="fill: #1234aac9;" width="108" height="136"></rect>
								<path style="fill: #ffffff;" d="M123,205.5H83c-2.409,0-4.69-1.085-6.209-2.955l-13-16c-2.786-3.429-2.265-8.468,1.164-11.254   c3.43-2.787,8.468-2.264,11.254,1.164L86.808,189.5H123c4.419,0,8,3.582,8,8C131,201.919,127.419,205.5,123,205.5z"></path>
								<path style="fill: #ffffff;" d="M89.992,227.501c-1.437,0-2.891-0.387-4.203-1.199c-3.757-2.326-4.917-7.256-2.591-11.013l13-21   c2.326-3.756,7.255-4.916,11.013-2.591c3.757,2.326,4.917,7.256,2.591,11.013l-13,21C95.289,226.156,92.671,227.501,89.992,227.501   z"></path>
								<path style="fill: #0b2a97;" d="M322,137.5H211c-4.418,0-8-3.581-8-8c0-4.418,3.582-8,8-8h111c4.418,0,8,3.582,8,8   C330,133.919,326.418,137.5,322,137.5z"></path>
								<path style="fill: #0b2a97;" d="M322,173.25H211c-4.418,0-8-3.581-8-8c0-4.418,3.582-8,8-8h111c4.418,0,8,3.582,8,8   C330,169.669,326.418,173.25,322,173.25z"></path>
								<path style="fill: #0b2a97;" d="M322,209H211c-4.418,0-8-3.581-8-8c0-4.418,3.582-8,8-8h111c4.418,0,8,3.582,8,8   C330,205.419,326.418,209,322,209z"></path>
								<path style="fill: #0b2a97;" d="M322,244.75H211c-4.418,0-8-3.581-8-8c0-4.418,3.582-8,8-8h111c4.418,0,8,3.582,8,8   C330,241.169,326.418,244.75,322,244.75z"></path>
								<path style="fill: #0b2a97;" d="M322,280.5H211c-4.418,0-8-3.582-8-8s3.582-8,8-8h111c4.418,0,8,3.582,8,8S326.418,280.5,322,280.5z   "></path>
							</g>
						</svg>
						<p class="font-w500 mb-0" style="line-height: 19px;">Yeni bir destek talebi oluştur</p>
					</div>
				</a>
				<div class="copyright text-center">
					<p><strong>Periwonen Yönetim Paneli</strong> © 2021 All Rights Reserved</p>
					<p>Made with <span class="heart"></span> by Wrix</p>
					<div class="row justify-content-center align-items-center">
						<a href=""><img class="trflag" src="<?php echo base_url("assets/tr.png") ?>" alt="Türkçe" title="Türkçe"></a>
						<a href=""><img class="nd-flag" src="<?php echo base_url("assets/nd.png") ?>" alt="Nederlands" title="Nederlands"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="content-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-4 col-lg-5">
						<div class="card">
							<div class="card-header p-3 border-0">
								<span class="p-3 mr-3 rounded bgl-success">
									<svg width="26" height="26" viewBox="0 0 492.097 492.097">
										<path d="M195.313,135.991c0.542,0.935,1.981,3.415,11.21,5.154c2.157,0.408,4.412,0.614,6.699,0.614c0.002,0,0.002,0,0.003,0    c7.598,0,14.741-2.218,21.647-4.363c6.545-2.031,12.727-3.951,18.936-3.951l0.264,0.002c9.247,0.082,17.892,2.941,27.042,5.97    c3.952,1.308,8.024,2.71,12.19,3.775c1.76,0.45,2.897-0.024,3.621-0.406c20.539-10.836,38.354-25.248,50.16-40.578    c5.874-7.625,10.861-17.876,15.247-31.34c2.021-6.217,4.257-15.493,0.314-24.243c-5.075-11.271-18.512-12.575-28.178-12.575    c-2.92,0-20.617,0.676-25.289,0.676c-11.814,0-25.637-0.892-38.562-7.506c-5.618-2.875-10.891-6.597-16.471-10.537    c-8.458-5.974-17.203-12.15-27.497-15.35C223.806,0.448,220.949,0,218.161,0c-19.494,0-31.228,21.691-35.083,28.818    c-5.563,10.281-11.954,24.152-12.01,40.299c-0.054,14.711,5.107,28.522,9.61,38.911    C185.012,118.022,190.073,126.958,195.313,135.991z" fill="#27BC48" />
										<path d="M404.995,273.639c-19.341-35.351-46.661-64.076-75.798-91.633c-8.092-7.65-15.632-14.367-23.485-21.011    c-7.088-2.542-21.558-2.571-30.146-5.419c-7.978-2.646-16.339-5.539-24.87-5.005c-7.813,0.49-15.129,3.287-22.688,5.08    c-8.488,2.013-16.675,2.582-25.279,0.959c0,0-11.689-1.687-39.319-22.164c-11.218-8.314-23.21-15.755-37.039-18.745    c-13.144-2.843-18.731,17.309-5.557,20.158c12.597,2.725,22.935,9.975,33.182,17.469c0.022,0.016,0.044,0.032,0.065,0.048    c-14.398,1.893-27.813,7.633-41.751,11.451c-12.986,3.558-7.466,23.726,5.558,20.158c14.106-3.865,28.101-10.595,42.866-11.317    c2.346-0.114,4.597,0.149,6.819,0.566c-32.937,27.116-63.351,57.013-85.055,94.276c-18.781,32.243-27.15,69.75-15.907,106.066    c6.578,21.255,19.204,40.11,33.923,56.573c12.858,14.383,27.273,27.338,44.387,36.374c30.861,16.298,66.854,22.868,101.429,24.31    c37.057,1.544,75.262-3.567,109.423-18.458c31.121-13.563,57.553-37.167,68.595-69.9    C438.91,360.285,426.121,312.244,404.995,273.639z M267.477,292.546c7.175,0,12.99,5.815,12.99,12.991    c0,7.175-5.815,12.99-12.99,12.99h-72.426c-0.113,1.603-0.174,3.219-0.174,4.849s0.061,3.246,0.174,4.848h72.426    c7.175,0,12.99,5.816,12.99,12.99c0,7.175-5.815,12.991-12.99,12.991h-65.285c11.32,22.455,34.594,37.896,61.41,37.896    c11.354,0,22.164-2.678,32.129-7.96c6.341-3.361,14.201-0.945,17.562,5.395c3.36,6.339,0.945,14.203-5.395,17.562    c-13.56,7.188-28.876,10.985-44.297,10.985c-41.432,0-76.729-26.746-89.551-63.878h-23.486c-7.176,0-12.99-5.816-12.99-12.991    c0-7.174,5.814-12.99,12.99-12.99h18.454c-0.081-1.604-0.124-3.222-0.124-4.848s0.043-3.242,0.124-4.849h-18.454    c-7.176,0-12.99-5.815-12.99-12.99c0-7.176,5.814-12.991,12.99-12.991h23.486c12.82-37.132,48.119-63.878,89.551-63.878    c15.421,0,30.737,3.799,44.297,10.986c6.34,3.36,8.755,11.223,5.395,17.562s-11.221,8.754-17.562,5.394    c-9.965-5.281-20.774-7.959-32.129-7.959c-26.816,0-50.09,15.439-61.41,37.896H267.477L267.477,292.546z" fill="#27BC48" />
									</svg>
								</span>
								<div class="mr-auto pr-3">
									<h4 class="text-black fs-20">Bakiye Bilgisi</h4>
									<p class="fs-13 mb-0 text-black">Toplam bakiyeniz: <b class="text-success"><?php echo number_format($user[0]["para_limit"], 0, ",", ".") ?>€</b></p>
								</div>
							</div>

						</div>
					</div>
					<div class="col-xl-4 col-lg-6">
						<div class="card">
							<div class="card-header p-3 border-0">
								<span class="p-3 mr-3 rounded bgl-primary">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M22.2363 3.06982C22.0806 2.91507 21.8978 2.83724 21.6855 2.83724C21.58 2.83724 21.3576 2.92382 21.0205 3.09469C20.682 3.26601 20.3218 3.45668 19.9442 3.66945C19.5651 3.88084 19.1166 4.07243 18.5985 4.24375C18.0813 4.41461 17.6028 4.5012 17.162 4.5012C16.7544 4.5012 16.3961 4.42382 16.0862 4.26862C15.0596 3.78781 14.1662 3.42904 13.4086 3.19232C12.6505 2.95606 11.8353 2.83724 10.9626 2.83724C9.45569 2.83724 7.73923 3.32726 5.81506 4.30546C5.41807 4.5035 5.13346 4.65686 4.94924 4.76923L4.7664 3.42858C5.17951 3.06982 5.44617 2.5471 5.44617 1.95714C5.44617 0.876234 4.57021 0.000274694 3.48931 0.000274681C2.4084 0.000274669 1.53198 0.876234 1.53198 1.95714C1.53198 2.66223 1.90871 3.27522 2.46781 3.61971L5.11135 23.0041C5.1901 23.5812 5.68381 23.9998 6.25074 23.9998C6.30232 23.9998 6.35482 23.9957 6.40779 23.9901C7.03782 23.9036 7.47902 23.3237 7.3929 22.6937L6.33042 14.9031C8.25826 13.9465 9.9259 13.4644 11.3287 13.4644C11.9242 13.4644 12.505 13.5523 13.071 13.7329C13.6374 13.9129 14.109 14.1073 14.4835 14.3187C14.8574 14.531 15.3 14.7272 15.8098 14.9054C16.3197 15.085 16.823 15.1748 17.32 15.1748C18.5754 15.1748 20.0782 14.7018 21.8315 13.7563C22.0516 13.6421 22.2124 13.5297 22.3146 13.4201C22.4168 13.3101 22.4675 13.153 22.4675 12.9499L22.4675 3.62017C22.4675 3.40878 22.3906 3.22502 22.2363 3.06982Z" fill="#0b2a97"></path>
									</svg>
								</span>
								<div class="mr-auto pr-3">
									<h4 class="text-black fs-20">Borç Bilgisi</h4>
									<p class="fs-13 mb-0 text-black">Toplam ödenmesi gereken borç tutarınız: <b class="text-primary"><?php echo number_format($user[0]["borc"], 0, ",", ".") ?>€</b></p>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center">
									<div class="col-xl-12 col-xxl-12 mr-auto">
										<div class="d-sm-flex d-block align-items-center">
											<i class="fa fa-question-circle ticket-gonder" aria-hidden="true"></i>
											<div>
												<h4 class="fs-20 text-black">Siparişleriniz veya başka birşey hakkında yardıma mı ihtiyacınız var?</h4>
												<p class="fs-14 mb-0">Yeni bir <b>Destek Talebi</b> oluşturarak, yetkililer ile görüşme sağlayabilirsiniz.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body" style="padding: 0rem 1.875rem 1.875rem 1.875rem;">
								<a href="<?php echo base_url("shopmanager/newticket") ?>">
									<button type="button" class="w-100 btn btn-success">Yeni bir destek talebi oluştur</button>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-3 col-lg-6 col-sm-6">
						<div class="card avtivity-card">
							<div class="card-body">
								<div class="media align-items-center">
									<span class="activity-icon bgl-warning  mr-md-4 mr-3">
										<svg height="40px" width="40px" viewBox="0 0 930.337 930.337">
											<g>
												<path d="M60,757.867h398.998c-9.753-27.547-14.707-56.405-14.707-86.012c0-34.819,6.826-68.613,20.289-100.442     c12.997-30.729,31.597-58.32,55.284-82.006c23.687-23.688,51.277-42.287,82.006-55.284     c31.83-13.463,65.624-20.289,100.442-20.289c34.819,0,68.613,6.826,100.442,20.289c3.116,1.317,6.192,2.709,9.242,4.142V338.2     V170.916c0-33.137-26.863-60-60-60h-62.354V70.458c0-22.091-17.908-40-40-40H595.3c-22.091,0-40,17.909-40,40v40.457h-82.127     V70.458c0-22.091-17.909-40-40-40h-54.345c-22.091,0-40,17.909-40,40v40.457h-82.127V70.458c0-22.091-17.909-40-40-40h-54.345     c-22.092,0-40,17.909-40,40v40.457H60c-33.137,0-60,26.863-60,60v167.285v359.667C0,731.003,26.863,757.867,60,757.867z      M45,170.916c0-8.271,6.729-15,15-15h62.355v24.357c0,22.091,17.908,40,40,40H216.7c22.091,0,40-17.909,40-40v-24.357h82.127     v24.357c0,22.091,17.909,40,40,40h54.345c22.091,0,40-17.909,40-40v-24.357h82.127v24.357c0,22.091,17.909,40,40,40h54.346     c22.092,0,40-17.909,40-40v-24.357h62.354c8.271,0,15,6.729,15,15v122.285h-722L45,170.916L45,170.916z" style="fill: #ffbc11;"></path>
												<path d="M930.337,671.855c0-86.173-47.806-161.171-118.337-199.944c-32.545-17.893-69.924-28.078-109.686-28.078     c-125.935,0-228.023,102.089-228.023,228.022c0,30.435,5.978,59.467,16.797,86.012     c33.953,83.295,115.728,142.012,211.228,142.012C828.248,899.878,930.337,797.789,930.337,671.855z M812,691.855h-82.577     c-6.112,8.34-15.976,13.758-27.107,13.758c-18.556,0-33.598-15.041-33.598-33.597c0-11.061,5.349-20.87,13.598-26.992V510.753     c0-11.046,8.953-20,20-20c11.046,0,20,8.954,20,20v134.271c2.604,1.935,4.923,4.235,6.872,6.829H812h51.415     c11.046,0,20,8.954,20,20c0,11.047-8.954,20-20,20L812,691.855L812,691.855z" style="fill: #ffbc11;"></path>
											</g>
										</svg>
									</span>
									<div class="media-body">

										<p class="fs-14 mb-2">Beklemedeki siparişlerim</p>
										<span class="title text-black font-w600"><?php echo count($beklemede) ?> stuk</span>
									</div>
								</div>
							</div>
							<div class="effect bg-warning"></div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-sm-6">
						<div class="card avtivity-card">
							<div class="card-body">
								<div class="media align-items-center">
									<span class="activity-icon bgl-primary  mr-md-4 mr-3">
										<svg width="40" height="40" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 244 244" style="enable-background:new 0 0 244 244;" xml:space="preserve">
											<g>
												<path d="M244,156.153V45.026c0-4.971-4.029-9-9-9H46.331l-5.487-15.089c-1.293-3.557-4.674-5.925-8.458-5.925H9   c-4.971,0-9,4.029-9,9s4.029,9,9,9h17.083L83.301,190.37c1.293,3.558,4.674,5.925,8.458,5.925h6.831   c-1.855,3.206-2.923,6.922-2.923,10.885c0,12.024,9.783,21.808,21.808,21.808c12.025,0,21.809-9.783,21.809-21.808   c0-3.963-1.068-7.679-2.923-10.885h66.946c-1.855,3.206-2.923,6.922-2.923,10.885c0,12.024,9.783,21.808,21.808,21.808   c12.025,0,21.809-9.783,21.809-21.808c0-4.628-1.454-8.922-3.922-12.456c2.368-1.621,3.922-4.342,3.922-7.429c0-4.971-4.029-9-9-9   H98.063l-4.779-13.142H235C239.971,165.153,244,161.124,244,156.153z M117.475,210.987c-2.1,0-3.808-1.708-3.808-3.808   s1.708-3.809,3.808-3.809s3.809,1.709,3.809,3.809S119.574,210.987,117.475,210.987z M222.191,210.987   c-2.1,0-3.808-1.708-3.808-3.808s1.708-3.809,3.808-3.809S226,205.08,226,207.18S224.291,210.987,222.191,210.987z    M126.475,109.794V91.385H170v18.409H126.475z M170,127.794v19.359h-43.525v-19.359H170z M73.161,109.811l-6.7-18.426h42.014   v18.409H73.5C73.385,109.794,73.274,109.807,73.161,109.811z M126.475,73.385V54.026H170v19.358H126.475z M188,91.385h38v18.409   h-38V91.385z M226,73.385h-38V54.026h38V73.385z M108.475,54.026v19.358H59.916l-7.039-19.358H108.475z M79.699,127.794h28.775   v19.359H86.739L79.699,127.794z M188,147.153v-19.359h38v19.359H188z" fill="#0b2a97" />
											</g>
										</svg>
									</span>
									<div class="media-body">
										<p class="fs-14 mb-2">Hazırlanan siparişlerim</p>
										<span class="title text-black font-w600"><?php echo count($hazirlanan) ?> stuk</span>
									</div>
								</div>
							</div>
							<div class="effect bg-primary"></div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-sm-6">
						<div class="card avtivity-card">
							<div class="card-body">
								<div class="media align-items-center">
									<span class="activity-icon bgl-success mr-md-4 mr-3">
										<svg width="40" height="40" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="256px" height="190px" viewBox="0 0 256 190" enable-background="new 0 0 256 190" xml:space="preserve">
											<path d="M48.12,27.903C48.12,13.564,59.592,2,74.023,2c14.339,0,25.903,11.564,25.903,25.903  C99.834,42.335,88.27,53.806,74.023,53.806C59.684,53.806,48.12,42.242,48.12,27.903z M191,139h-47V97c0-20.461-17.881-37-38-37H43  C20.912,60,1.99,79.14,2,98v77c-0.026,8.533,6.001,12.989,12,13c6.014,0.011,12-4.445,12-13v-75h8v88h78v-88h8l0.081,50.37  c-0.053,8.729,5.342,12.446,10.919,12.63h60C207.363,163,207.363,139,191,139z M229.571,89.055v25.009h-61.073V52.992h45.518  l12.249-12.215h-69.982v85.502h85.502V76.875L229.571,89.055z M199.076,102.274l-22.921-22.921l8.637-8.637l14.296,14.296  l46.287-46.141L254,47.521L199.076,102.274z" fill="#27BC48" />
										</svg>
									</span>
									<div class="media-body">
										<p class="fs-14 mb-2">Tamamlanan siparişlerim</p>
										<span class="title text-black font-w600"><?php echo count($tamam) ?> stuk</span>
									</div>
								</div>

							</div>
							<div class="effect bg-success"></div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-sm-6">
						<div class="card avtivity-card">
							<div class="card-body">
								<div class="media align-items-center">
									<span class="activity-icon bgl-danger mr-md-4 mr-3">
										<svg width="25" height="25" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 47.095 47.095" style="enable-background:new 0 0 47.095 47.095;" xml:space="preserve">
											<g>
												<path d="M45.363,36.234l-13.158-13.16l12.21-12.21c2.31-2.307,2.31-6.049,0-8.358c-2.308-2.308-6.05-2.307-8.356,0l-12.212,12.21   L11.038,1.906c-2.309-2.308-6.051-2.308-8.358,0c-2.307,2.309-2.307,6.049,0,8.358l12.81,12.81L1.732,36.831   c-2.309,2.31-2.309,6.05,0,8.359c2.308,2.307,6.049,2.307,8.356,0l13.759-13.758l13.16,13.16c2.308,2.308,6.049,2.308,8.356,0   C47.673,42.282,47.672,38.54,45.363,36.234z" fill="#FF3282" />
											</g>
										</svg>
									</span>
									<div class="media-body">
										<p class="fs-14 mb-2">İptal Edilen siparişlerim</p>
										<span class="title text-black font-w600"><?php echo count($iptal) ?> stuk</span>
									</div>
								</div>
							</div>
							<div class="effect bg-danger"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="copyright text-center">
				<p><strong>Periwonen Yönetim Paneli</strong> © 2021 All Rights Reserved</p>
			</div>
		</div>
	</div>

	<script src="<?php echo base_url("assets/shop/vendor/global/global.min.js") ?>"></script>
	<script src="<?php echo base_url("assets/shop/vendor/bootstrap-select/dist/js/bootstrap-select.min.js") ?>"></script>
	<script src="<?php echo base_url("assets/shop/vendor/chart.js/Chart.bundle.min.js") ?>"></script>
	<script src="<?php echo base_url("assets/shop/js/custom.min.js") ?>"></script>
	<script src="<?php echo base_url("assets/shop/js/deznav-init.js") ?>"></script>
	<script src="<?php echo base_url("assets/shop/vendor/owl-carousel/owl.carousel.js") ?>"></script>
	<script src="<?php echo base_url("assets/shop/vendor/peity/jquery.peity.min.js") ?>"></script>
	<script src="<?php echo base_url("assets/shop/vendor/apexchart/apexchart.js") ?>"></script>
	<script src="<?php echo base_url("assets/shop/js/dashboard/dashboard-1.js") ?>"></script>

	<script>
		function carouselReview() {
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.testimonial-one').owlCarousel({
				loop: true,
				autoplay: true,
				margin: 30,
				nav: false,
				dots: false,
				left: true,
				navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
				responsive: {
					0: {
						items: 1
					},
					484: {
						items: 2
					},
					882: {
						items: 3
					},
					1200: {
						items: 2
					},

					1540: {
						items: 3
					},
					1740: {
						items: 4
					}
				}
			})
		}
		jQuery(window).on('load', function() {
			setTimeout(function() {
				carouselReview();
			}, 1000);
		});
	</script>
</body>

</html>