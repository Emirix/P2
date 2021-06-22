<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>panel</title>
    <style>
            .trflag {
        width: 35px;
        height: 25px;
        margin: 0px 10px;
        cursor: pointer;
    }
    .nd-flag {
        width: 35px;
        height: 24px;
        margin: 0px 10px;
        cursor: pointer;
    }   
    </style>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php  echo base_url("assets/shop/images/panel.ico")?>">
    <link href="<?php  echo base_url("assets/shop/vendor/dropzone/dist/dropzone.css") ?> " rel="stylesheet">
	<link href="<?php  echo base_url("assets/shop/vendor/bootstrap-select/dist/css/bootstrap-select.min.css") ?> " rel="stylesheet">
    <link href="<?php  echo base_url("assets/shop/css/style.css") ?> " rel="stylesheet">
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
			<a href="<?php echo base_url("admin") ?>" class="w-100 text-center brand-logo">logo</a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
		</div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
							Hesap Yönetimi
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
                        <li><a href="<?php echo base_url("admin") ?>">Anasayfa</a></li>
                        </ul>
					</li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-user"></i>
							<span class="nav-text">Hesap Yönetimi</span>
						</a>
                        <ul aria-expanded="false">
                        <li><a href="<?php echo base_url("admin/createaccount") ?>">Hesap Oluştur</a></li>
							<li><a href="<?php echo base_url("admin/allaccount") ?>">Tüm Hesaplar</a></li>
             
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-presentation"></i>
							<span class="nav-text">Ürün Yönetimi</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="<?php echo base_url("admin/addproduct")?>">Ürün Ekle</a></li>
							<li><a href="<?php echo base_url("admin/productlist") ?>">Eklenen Ürünler</a></li><li><a href="<?php echo base_url("admin/store")?>">Ürün Liste</a></li>

                        </ul>
                    </li>
                    </li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-price-tag"></i>
							<span class="nav-text">Sipariş Takip</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="<?php echo base_url("admin/ioproducts") ?>">İşlemdeki Siparişler</a></li>
							<li><a href="<?php echo base_url("admin/tumsiparisler") ?>">Tüm Siparişler</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
        <i class="flaticon-381-folder-19"></i>
        <span class="nav-text">Borç Kayıtları</span>
    </a>
    <ul aria-expanded="false">
        <li><a href="<?php echo base_url("admin/borc") ?>">Borç Sil</a></li>
    </ul>
</li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Destek</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url("admin/alltickets") ?>">Tüm Talepler</a></li>
                        </ul>
                    </li>
                </ul>
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
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Hesap Yönetimi</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Hesap Oluştur</a></li>
					</ol>
                </div>
                <div class="row">
					<div class="col-xl-4 col-lg-6">
						<div class="card">
                            <div class="card-header pt-3 pl-3 pr-3 pb-0 border-0">
								<span class="p-3 mr-3 rounded bgl-success" style="width: 56px;height: 56px;padding: 13px !important;">
                                    <svg viewBox="0 0 256 253" width="30" height="30" viewBox="0 0 24 24" fill="#27bc48">
                                        <path d="M143.913,143.858l-18.104,25.013l-11.577-12.578c-1.286-1.429-1.239-3.573,0.143-4.955c1.429-1.286,3.573-1.239,4.955,0.143  l5.86,6.337l13.054-18.009c1.143-1.525,3.287-1.953,4.907-0.81C144.675,140.094,145.056,142.333,143.913,143.858z M171.451,161.486  c2.382,2.287,1.286,6.289-1.858,7.051l-10.958,2.811l3.097,10.863c0.858,3.144-2.096,6.051-5.193,5.193l-10.672-3.049l15.246,30.349  l-12.721-3.621l-3.526,11.768L128,189.214l-16.866,33.636l-3.526-11.768l-12.721,3.621l15.246-30.349l-10.672,3.049  c-3.144,0.858-6.051-2.096-5.193-5.193l3.097-10.863l-10.958-2.811c-3.144-0.762-4.24-4.764-1.858-7.051l8.004-7.861l-8.052-7.861  c-2.382-2.287-1.286-6.289,1.858-7.051l10.958-2.811l-3.097-10.863c-0.858-3.144,2.096-6.051,5.193-5.193l10.863,3.097l2.811-10.958  c0.762-3.144,4.86-4.193,7.051-1.858l7.861,8.099l7.861-8.099c2.239-2.382,6.289-1.239,7.051,1.858l2.811,10.958l10.863-3.097  c3.144-0.858,6.051,2.096,5.193,5.193l-3.097,10.863l10.958,2.811c3.144,0.762,4.24,4.764,1.858,7.051l-8.052,7.861L171.451,161.486  z M155.3,153.624c0-14.579-11.863-26.347-26.347-26.347c-14.579,0-26.347,11.816-26.347,26.394s11.768,26.347,26.347,26.347  S155.3,168.203,155.3,153.624z M2,69c0,13.678,9.625,25.302,22,29.576V233H2v18h252v-18h-22V98.554  c12.89-3.945,21.699-15.396,22-29.554v-8H2V69z M65.29,68.346c0,6.477,6.755,31.47,31.727,31.47  c21.689,0,31.202-19.615,31.202-31.47c0,11.052,7.41,31.447,31.464,31.447c21.733,0,31.363-20.999,31.363-31.447  c0,14.425,9.726,26.416,22.954,30.154V233H42V98.594C55.402,94.966,65.29,82.895,65.29,68.346z M222.832,22H223V2H34v20L2,54h252  L222.832,22z"/>
                                    </svg>
								</span>
								<div class="mr-auto pr-3">
									<h4 class="text-black fs-20 mb-0">Reseller</h4>
									<p class="fs-13 mb-0 text-black">Hesabı oluşturmak için lütfen butona tıklayınız.</p>
								</div>
							</div>
                            <div class="card-body p-3 border-0">
                                <a href="<?php echo base_url("admin/createreseller") ?>"><button type="button" class="w-100 btn btn-success" style="height: 45px;padding: 10px 20px;">Hesap Oluştur</button></a>
                            </div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6">
						<div class="card">
                            <div class="card-header pt-3 pl-3 pr-3 pb-0 border-0">
								<span class="p-3 mr-3 rounded bgl-primary" style="width: 56px;height: 56px;padding: 13px !important;">
                                    <svg width="30" height="30" viewBox="0 0 612.006 612.006" fill="#0b2a97">
                                        <path d="M225.71,372.743h308.2c17.543,0,26.963-18.847,31.886-35.805l46.21-216.475H147.627l46.198,216.475     C197.498,354.099,208.174,372.743,225.71,372.743z M485.233,317.476l31.886-150.113c1.827-8.608,10.27-14.115,18.903-12.282     c8.608,1.827,14.109,10.294,12.282,18.903l-31.886,150.113c-1.594,7.495-8.208,12.632-15.58,12.632     c-1.095,0-2.209-0.117-3.323-0.351C488.9,334.551,483.411,326.09,485.233,317.476z M405.217,319.66l10.633-150.113     c0.615-8.781,8.214-15.389,17.026-14.774c8.781,0.621,15.395,8.245,14.774,17.032l-10.633,150.113     c-0.591,8.399-7.587,14.817-15.881,14.817c-0.381,0-0.757-0.012-1.144-0.037C411.21,336.064,404.595,328.441,405.217,319.66z      M324.346,154.768c8.713-0.634,16.41,5.993,17.026,14.774l10.627,150.113c0.628,8.781-5.999,16.404-14.774,17.032     c-0.388,0.025-0.763,0.037-1.144,0.037c-8.294,0-15.291-6.418-15.881-14.817l-10.626-150.106     C308.944,163.019,315.565,155.389,324.346,154.768z M221.2,155.081c8.621-1.827,17.069,3.673,18.903,12.282l31.886,150.113     c1.828,8.608-3.667,17.075-12.288,18.903c-1.114,0.24-2.227,0.351-3.323,0.351c-7.365,0-13.986-5.138-15.58-12.632     l-31.886-150.113C207.085,165.369,212.586,156.909,221.2,155.081z"/>
                                        <path d="M245.88,459.608c-30.071,0-54.449,24.379-54.449,54.449c0,30.07,24.379,54.449,54.449,54.449     s54.449-24.379,54.449-54.449C300.33,483.986,275.951,459.608,245.88,459.608z M245.88,534.473     c-11.279,0-20.416-9.137-20.416-20.416c0-11.273,9.137-20.416,20.416-20.416s20.416,9.144,20.416,20.416     C266.303,525.336,257.159,534.473,245.88,534.473z"/>
                                        <path d="M504.517,459.608c-30.077,0-54.456,24.379-54.456,54.449c0,30.07,24.379,54.449,54.456,54.449     c30.071,0,54.449-24.379,54.449-54.449C558.966,483.986,534.587,459.608,504.517,459.608z M504.517,534.473     c-11.279,0-20.416-9.137-20.416-20.416c0-11.273,9.137-20.416,20.416-20.416c11.273,0,20.416,9.144,20.416,20.416     C524.939,525.336,515.789,534.473,504.517,534.473z"/>
                                        <path d="M586.987,437.401H174.873c-14.829,0-27.523-10.091-30.864-24.533L66.91,80.419h-48.45C8.264,80.419,0,72.155,0,61.959    S8.264,43.5,18.459,43.5h52.616c14.817,0,27.511,10.085,30.864,24.514l77.105,332.468h407.949c10.196,0,18.459,8.264,18.459,18.46    C605.447,429.143,597.189,437.401,586.987,437.401z"/>
                                    </svg>
								</span>
								<div class="mr-auto pr-3">
									<h4 class="text-black fs-20 mb-0">Shop Manager</h4>
									<p class="fs-13 mb-0 text-black">Hesabı oluşturmak için lütfen butona tıklayınız.</p>
								</div>
							</div>
                            <div class="card-body p-3 border-0">
                                <a href="<?php echo base_url("admin/createmanager") ?>"><button type="button" class="w-100 btn btn-primary" style="height: 45px;padding: 10px 20px;">Hesap Oluştur</button></a>
                            </div>
                        </div>
					</div>
					<div class="col-xl-4">
						<div class="card">
                            <div class="card-header pt-3 pl-3 pr-3 pb-0 border-0">
								<span class="p-3 mr-3 rounded bgl-warning" style="width: 56px;height: 56px;padding: 13px !important;">
									<svg width="30" height="30" viewBox="0 0 162.276 162.275" fill="#ffbc11">
									    <path xmlns="http://www.w3.org/2000/svg" d="M134.37,110.516c-10.078-11.101-24.509-20.648-41.218-24.893c13.518-9.098,22.834-27.03,22.834-43.178   c0-22.789-18.48-41.272-41.263-41.272c-22.789,0-41.272,18.475-41.272,41.272c0,16.148,9.31,34.081,22.834,43.178   C23.955,93.825,0,121.89,0,142.685c0,12.294,37.348,18.426,74.699,18.419l-20.914-20.916l17.622-42.6h-0.183l-6.847-7.849   c3.318,1.188,6.765,1.905,10.346,1.905c3.574,0,7.015-0.718,10.317-1.899l-6.838,7.837h-0.176l16.648,40.243v3.331l-19.939,19.941   c13.125,0,26.247-0.761,37.756-2.277h49.785v-38.69v-9.614H134.37z M156.041,152.592H100.91v-30.465l27.56,17.915l27.56-17.915   v30.465H156.041z M128.481,134.671l-27.56-17.92h55.119L128.481,134.671z"/>
                                    </svg>
								</span>
								<div class="mr-auto pr-3">
									<h4 class="text-black fs-20 mb-0">Staff</h4>
									<p class="fs-13 mb-0 text-black">Hesabı oluşturmak için lütfen butona tıklayınız.</p>
								</div>
							</div>
                            <div class="card-body p-3 border-0">
                                <a href="<?php echo base_url("admin/createstaff") ?>"><button type="button" class="w-100 btn btn-warning" style="height: 45px;padding: 10px 20px;">Hesap Oluştur</button></a>
                            </div>
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
    <script src="<?php echo base_url("assets/admin/vendor/global/global.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js") ?> "></script>
    <script src="<?php echo base_url("assets/admin/js/custom.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/js/deznav-init.js") ?> "></script>
    <script src="<?php echo base_url("assets/admin/vendor/dropzone/dist/dropzone.js") ?> "></script>

</body>
</html>