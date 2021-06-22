<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>panel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url("assets/admin/images/panel.ico")?>">
    <link href="<?php echo base_url("assets/admin/vendor/dropzone/dist/dropzone.css")?>" rel="stylesheet">
	<link href="<?php echo base_url("assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/admin/css/style.css")?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<style>

.ticket-gonder {
    font-size: 45px;
    color: #27bc48;
    margin-right: 20px;
}

</style>
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
							<?php echo $this->lang->line("anasayfa") ?>
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
								<li><a href="<?php echo base_url("admin/productlist")?>">Eklenen Ürünler</a></li>
								<li><a href="<?php echo base_url("admin/store")?>">Ürün Liste</a></li>
							</ul>
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
                            <li><a href="<?php  echo base_url("admin/alltickets") ?>">Tüm Talepler</a></li>
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
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center">
									<div class="col-xl-12 col-xxl-12 mr-auto">
										<div class="d-sm-flex d-block align-items-center">
											<i class="fa fa-question-circle ticket-gonder" aria-hidden="true"></i>
											<div>
												<h4 class="fs-20 text-black">Müşterilerin siparişleri ile ilgili sorunları olabilir, talepleri kontrol et!</h4>
												<p class="fs-14 mb-0">Lütfen destek sayfasını sürekli kontrol etmeyi unutma, cevap bekleyen talepler olabilir.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body" style="padding: 0rem 1.875rem 1.875rem 1.875rem;">
								<a href="<?php echo base_url("admin/alltickets") ?>">
									<button type="button" class="w-100 btn btn-success">Tüm Yardım Taleplerini Kontrol Et ve Cevapla</button>
								</a>
							</div>
						</div>
					</div>
                </div>
				<div class="row">
				<div class="col-xl-3 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-dark">
							<div class="card-body  p-4">
								<div class="media">
									<span class="mr-3">
                                        <i class="flaticon-381-clock-1"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Onay Bekleyen</p>
										<h3 class="text-white mb-1"><?php echo count($o) ?> bestellen</h3>
										<div class="progress mb-1 bg-secondary">
                                            
											</div>
										<small>Onay bekleyen olan siparişler</small>
									</div>
								</div>
							</div>
						</div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-primary">
							<div class="card-body  p-4">
								<div class="media">
									<span class="mr-3">
                                        <i class="flaticon-381-clock-1"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Beklemede</p>
										<h3 class="text-white mb-1"><?php echo count($bk) ?> bestellen</h3>
										<div class="progress mb-1 bg-secondary">
                                            
											</div>
										<small>Beklemede olan siparişler</small>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-warning">
							<div class="card-body p-4">
								<div class="media">
									<span class="mr-3">
                                        <i class="flaticon-381-calendar"></i>									
                                    </span>
									<div class="media-body text-white">
										<p class="mb-1">Hazırlanıyor</p>
										<h3 class="text-white mb-1"><?php echo count($hazirl)  ?> bestellen</h3>
										<div class="progress mb-1 bg-secondary">
                                            
											</div>
                                        <small>İşlemdeki siparişler</small>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-dark">
							<div class="card-body p-4">
								<div class="media">
									<span class="mr-3">
                                        <i class="flaticon-381-location-3"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Kargoda</p>
										<h3 class="text-white mb-1"><?php echo count($kargo) ?> bestellen</h3>
										<div class="progress mb-1 bg-secondary">
                                            
											</div>
										<small>Siparişler yola çıktı</small>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-danger ">
							<div class="card-body p-4">
								<div class="media">
									<span class="mr-3">
                                        <i class="flaticon-381-multiply"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">İptal Edildi</p>
										<h3 class="text-white mb-1"><?php echo count($iptal) ?> bestellen</h3>
										<div class="progress mb-1 bg-secondary">
                                            
											</div>
										<small>Bu siparişler iptal</small>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-success ">
							<div class="card-body p-4">
								<div class="media">
									<span class="mr-3">
                                        <i class="flaticon-381-like"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Tamamlandı</p>
										<h3 class="text-white mb-1"><?php echo count($tamam)?> bestellen</h3>
										<div class="progress mb-1 bg-secondary">
                                            
											</div>
										<small>Teslim edilen siparişler</small>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-secondary ">
							<div class="card-body p-4">
								<div class="media">
									<span class="mr-3">
										<i class="la la-euro"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Toplam Borç</p>
										<h3 class="text-white mb-1">€<?php echo number_format($toplamBorc,0,",",".") ?></h3>
										<div class="progress mb-1 bg-secondary">
                                            
											</div>
										<small>Sistemdeki toplam borçlar</small>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-info ">
							<div class="card-body p-4">
								<div class="media">
									<span class="mr-3">
                                        <i class="la la-users"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Toplam Hesap</p>
										<h3 class="text-white mb-1"><?php echo $toplam_hesap ?></h3>
										<div class="progress mb-1 bg-secondary">
                                            
                                        </div>
										<small>Oluşturulan hesap sayısı</small>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-danger" style="background-color: var(--teal) !important;">
							<div class="card-body p-4">
								<div class="media">
									<span class="mr-3">
										<i class="la la-box"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Toplam Ürünler</p>
										<h3 class="text-white mb-1"><?php echo $toplam_urun ?></h3>
										<div class="progress mb-1 bg-secondary">
                                            
											</div>
										<small>Sistemdeki toplam ürünler</small>
									</div>
								</div>
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
    <script src="<?php echo base_url("assets/admin/vendor/global/global.min.js") ?>"></script>
	<script src="<?php echo base_url("assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/admin/js/custom.min.js") ?>"></script>
	<script src="<?php echo base_url("assets/admin/js/deznav-init.js") ?>"></script>
    <script src="<?php echo base_url("assets/admin/vendor/dropzone/dist/dropzone.js") ?>" ></script>

</body>
</html>