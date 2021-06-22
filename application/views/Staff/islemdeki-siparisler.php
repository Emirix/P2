<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>panel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url("assets/staff/images/panel.ico")?>">
	<link href="<?php echo base_url("assets/staff/vendor/sweetalert2/dist/sweetalert2.min.css") ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url("assets/staff/vendor/chartist/css/chartist.min.css") ?>">
    <link href="<?php echo base_url("assets/staff/vendor/bootstrap-select/dist/css/bootstrap-select.min.css") ?>" rel="stylesheet">
	<link href="<?php echo base_url("assets/staff/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/staff/css/style.css") ?>" rel="stylesheet">
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
			<a href="<?php echo base_url() ?>" class="w-100 text-center brand-logo">logo</a>

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
							İşlemdeki Siparişler
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
							<i class="flaticon-381-price-tag"></i>
							<span class="nav-text">Sipariş Takip</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="<?php echo base_url() ?>">İşlemdeki Siparişler</a></li>
							<li><a href="<?php echo base_url("staff/allorders") ?>">Tüm Siparişler</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Destek</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url("staff/alltickets") ?>">Tüm Talepler</a></li>
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
							<li class="breadcrumb-item"><a href="javascript:void(0)">Sipariş Yönetimi</a></li>
							<li class="breadcrumb-item active"><a href="javascript:void(0)">İşlemdeki Siparişler</a></li>
						</ol>
					</div>
					<div class="row">
						<div class="col-xl-12 col-xxl-12">
							<div class="row">
								<div class="col-xl-12">
									<div class="card plan-list">
										<div class="card-header d-sm-flex flex-wrap d-block pb-0 border-0">
											<div class="mr-auto pr-3 mb-3">
												<h4 class="text-black fs-20">İşlemdeki Siparişler</h4>
												<p class="fs-13 mb-0 text-black">Listedeki ürünler şuan işlemdeki siparişlerdir.</p>
												<p class="fs-13 mb-0 p-0 text-primary col-xl-12 col-xxl-10 col-lg-12 col-sm-12" style="font-weight: 500;">Bu listedeli siparişler (Tüm Siparişler) Sayfasında bulunmaz çünkü sipariş henüz tamamlanmadı.</p>
											</div>
											<a href="<?php echo base_url("staff/allorders")?>" class="btn rounded btn-primary mb-3">
												<svg class="mr-2" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M3.31615 6H14.4744C14.4744 6.53043 14.6882 7.03914 15.0686 7.41421C15.4491 7.78929 15.9651 8 16.5032 8H18.532C19.07 8 19.5861 7.78929 19.9665 7.41421C20.347 7.03914 20.5607 6.53043 20.5607 6H21.5751C21.8442 6 22.1022 5.89464 22.2924 5.70711C22.4827 5.51957 22.5895 5.26522 22.5895 5C22.5895 4.73478 22.4827 4.48043 22.2924 4.29289C22.1022 4.10536 21.8442 4 21.5751 4H20.5607C20.5607 3.46957 20.347 2.96086 19.9665 2.58579C19.5861 2.21071 19.07 2 18.532 2H16.5032C15.9651 2 15.4491 2.21071 15.0686 2.58579C14.6882 2.96086 14.4744 3.46957 14.4744 4H3.31615C3.04711 4 2.7891 4.10536 2.59887 4.29289C2.40863 4.48043 2.30176 4.73478 2.30176 5C2.30176 5.26522 2.40863 5.51957 2.59887 5.70711C2.7891 5.89464 3.04711 6 3.31615 6ZM16.5032 4H18.532V5V6H16.5032V4ZM21.5751 11H12.4456C12.4456 10.4696 12.2319 9.96086 11.8514 9.58579C11.471 9.21071 10.9549 9 10.4169 9H8.38809C7.85002 9 7.334 9.21071 6.95353 9.58579C6.57306 9.96086 6.35931 10.4696 6.35931 11H3.31615C3.04711 11 2.7891 11.1054 2.59887 11.2929C2.40863 11.4804 2.30176 11.7348 2.30176 12C2.30176 12.2652 2.40863 12.5196 2.59887 12.7071C2.7891 12.8946 3.04711 13 3.31615 13H6.35931C6.35931 13.5304 6.57306 14.0391 6.95353 14.4142C7.334 14.7893 7.85002 15 8.38809 15H10.4169C10.9549 15 11.471 14.7893 11.8514 14.4142C12.2319 14.0391 12.4456 13.5304 12.4456 13H21.5751C21.8442 13 22.1022 12.8946 22.2924 12.7071C22.4827 12.5196 22.5895 12.2652 22.5895 12C22.5895 11.7348 22.4827 11.4804 22.2924 11.2929C22.1022 11.1054 21.8442 11 21.5751 11ZM8.38809 13V11H10.4169V12V13H8.38809ZM21.5751 18H18.532C18.532 17.4696 18.3182 16.9609 17.9378 16.5858C17.5573 16.2107 17.0413 16 16.5032 16H14.4744C13.9364 16 13.4203 16.2107 13.0399 16.5858C12.6594 16.9609 12.4456 17.4696 12.4456 18H3.31615C3.04711 18 2.7891 18.1054 2.59887 18.2929C2.40863 18.4804 2.30176 18.7348 2.30176 19C2.30176 19.2652 2.40863 19.5196 2.59887 19.7071C2.7891 19.8946 3.04711 20 3.31615 20H12.4456C12.4456 20.5304 12.6594 21.0391 13.0399 21.4142C13.4203 21.7893 13.9364 22 14.4744 22H16.5032C17.0413 22 17.5573 21.7893 17.9378 21.4142C18.3182 21.0391 18.532 20.5304 18.532 20H21.5751C21.8442 20 22.1022 19.8946 22.2924 19.7071C22.4827 19.5196 22.5895 19.2652 22.5895 19C22.5895 18.7348 22.4827 18.4804 22.2924 18.2929C22.1022 18.1054 21.8442 18 21.5751 18ZM14.4744 20V18H16.5032V19V20H14.4744Z" fill="#fff"></path>
												</svg>
											Tümünü Görüntüle</a>
										</div>
										<div class="card-body tab-content pt-2">
											<div class="tab-pane active show fade">
											<?php foreach($orders as $key=>$order) {
												if($order["durum"] == "tamam" || $order["durum"] =="iptal") {
												}else{
												?>
												<div class="d-flex flex-wrap pt-3 list-row align-items-center mb-2 border-bottom">
													<div class="col-xl-5 col-xxl-8 col-lg-6 col-sm-8 d-flex align-items-center">
														<div class="list-icon bgl-primary mr-3 mb-3">
															<p class="fs-24 text-primary mb-0 mt-2"><?php echo date("d",strtotime($order["tarih"])) ?></p>
															<span class="fs-14 text-primary"><?php echo date("m/Y",strtotime($order["tarih"])) ?></span>
														</div>
														<div class="info mb-3">
															<h4 class="fs-20 "><a class="text-black"><?php echo $urunler[$key][0]["ad"] ?></a></h4>
															<span class="text-primary font-w600"><?php echo $magazalar[$key][0]["magaza_adi"] ?></span>
														</div>
													</div>
													<div class="col-xl-2 col-xxl-4 col-lg-2 col-sm-4 activities mb-3 mr-auto pl-3 pr-3 text-sm-center">
													<?php
														if($order["durum"]=="onay_beklemede"){
															echo '<span class="badge badge-secondary">Onay Bekliyor<span class="ml-1 fa fa-hourglass-end"></span></span>';
														} 
														if($order["durum"]=="beklemede"){
															echo '<span class="badge badge-warning">Beklemede<span class="ml-1 fa fa-hourglass-end"></span></span>';
														}
	
														if($order["durum"]=="hazirlaniyor"){
															echo '<span class="badge badge-primary">Hazırlanıyor<span class="ml-1 fa fa-shopping-cart"></span></span>';
														}
	
														if($order["durum"]=="tamam"){
															echo '<span class="badge badge-success">Tamamlandı<span class="ml-1 fa fa-check"></span></span>';
														}
	
														if($order["durum"]=="iptal"){
															echo '<span class="badge badge-danger">İptal Edildi<span class="ml-1 fa fa-close"></span></span>';
														}

														if($order["durum"]=="kargo"){
															echo '<div class="badge light badge-dark cblack">
															<i class="fa fa-circle text-black mr-1"></i>Sipariş Kargoda
														</div>	';
														}
														?>
														
															
													
													</div>
													<div class="col-xl-5 col-xxl-12 col-lg-4 col-sm-12 d-flex align-items-center">
														<?php
													if($order["durum"]=="onay_beklemede"){ ?>
														<a href="<?php echo base_url("staff/siparisonayla/".$order["id"]) ?>" class="btn mb-3 play-button rounded mr-3 siparis-onaylandi">
															<i class="las la-caret-right scale-2 mr-3"></i>
															Siparişi Onayla
														</a>
														<?php	}else{ ?>
															<a href="#"  style="opacity:0"class="btn mb-3 play-button rounded mr-3 siparis-onaylandi">
															<i class="las la-caret-right scale-2 mr-3"></i>
															Siparişi Onayla
														</a>
														<?php }
														?>
														
														<div class="dropdown mb-3 ">
															<a href="javascript:void(0)" class="more-button" data-toggle="dropdown" aria-expanded="false">
																<svg width="6" height="26" viewBox="0 0 6 26" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M6 3C6 4.65685 4.65685 6 3 6C1.34315 6 0 4.65685 0 3C0 1.34315 1.34315 0 3 0C4.65685 0 6 1.34315 6 3Z" fill="#585858"></path>
																	<path d="M6 13C6 14.6569 4.65685 16 3 16C1.34315 16 0 14.6569 0 13C0 11.3431 1.34315 10 3 10C4.65685 10 6 11.3431 6 13Z" fill="#585858"></path>
																	<path d="M6 23C6 24.6569 4.65685 26 3 26C1.34315 26 0 24.6569 0 23C0 21.3431 1.34315 20 3 20C4.65685 20 6 21.3431 6 23Z" fill="#585858"></path>
																</svg>
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="<?php echo base_url("staff/orderdetail/".$order["id"]."/".$order["aldigi_urun"])?>">Ürün Bilgisi</a>
																<hr class="m-1">
																<a class="dropdown-item text-success" href="<?php echo base_url("staff/urundurum/".$order["id"]."/1/".$order["alan"]."/".$order["aldigi_urun"])?>">Ürün Teslim Edildi</a>
																<a class="dropdown-item text-warning" href="<?php echo base_url("staff/urundurum/".$order["id"]."/2/".$order["alan"]."/".$order["aldigi_urun"]."/?d=hazirlaniyor")?>">Ürün Hazırlanıyor</a> 
																<a class="dropdown-item text-black" href="<?php echo base_url("staff/urundurum/".$order["id"]."/2/".$order["alan"]."/".$order["aldigi_urun"]."/?d=kargo")?>">Ürün Kargoda</a>
																<a class="dropdown-item text-danger" href="<?php echo base_url("staff/cancelorderback/".$order["id"]."/".$order["alan"]."/".$order["aldigi_urun"])?>">Siparişi İptal Et</a>
															</div>
														</div>
													</div> 
												</div>
											<?php }} ?>
											<!--	<div class="d-flex flex-wrap pt-3 list-row align-items-center mb-2 border-bottom">
													<div class="col-xl-5 col-xxl-8 col-lg-6 col-sm-8 d-flex align-items-center">
														<div class="list-icon bgl-primary mr-3 mb-3">
															<p class="fs-24 text-primary mb-0 mt-2">4</p>
															<span class="fs-14 text-primary">Months</span>
														</div>
														<div class="info mb-3">
															<h4 class="fs-20 "><a class="text-black">Sipariş edilen Ürün Adı</a></h4>
															<span class="text-primary font-w600">Mağaza Adı</span>
														</div>
													</div>
													<div class="col-xl-2 col-xxl-4 col-lg-2 col-sm-4 activities mb-3 mr-auto pl-3 pr-3 text-sm-center">
														<div class="badge light badge-dark cblack">
															<i class="fa fa-circle text-black mr-1"></i>Sipariş Kargoda
														</div>													
													</div>
													<div class="col-xl-5 col-xxl-12 col-lg-4 col-sm-12 d-flex align-items-center">
														<a href="javascript:void(0);" class="btn mb-3 play-button rounded mr-3 siparis-onaylandi">														<i class="las la-caret-right scale-2 mr-3"></i>
															Siparişi Onayla
														</a>
														<div class="dropdown mb-3">
															<a href="javascript:void(0)" class="more-button" data-toggle="dropdown" aria-expanded="false">
																<svg width="6" height="26" viewBox="0 0 6 26" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M6 3C6 4.65685 4.65685 6 3 6C1.34315 6 0 4.65685 0 3C0 1.34315 1.34315 0 3 0C4.65685 0 6 1.34315 6 3Z" fill="#585858"></path>
																	<path d="M6 13C6 14.6569 4.65685 16 3 16C1.34315 16 0 14.6569 0 13C0 11.3431 1.34315 10 3 10C4.65685 10 6 11.3431 6 13Z" fill="#585858"></path>
																	<path d="M6 23C6 24.6569 4.65685 26 3 26C1.34315 26 0 24.6569 0 23C0 21.3431 1.34315 20 3 20C4.65685 20 6 21.3431 6 23Z" fill="#585858"></path>
																</svg>
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="siparis-detay.php">Ürün Bilgisi</a>
																<hr class="m-1">
																<a class="dropdown-item text-success" href="javascript:void(0);">Ürün Teslim Edildi</a>
																<a class="dropdown-item text-warning" href="javascript:void(0);">Ürün Hazırlanıyor</a>
																<a class="dropdown-item text-black" href="javascript:void(0);">Ürün Kargoda</a>
																<a class="dropdown-item text-danger" href="javascript:void(0);">Siparişi İptal Et</a>
															</div>
														</div>
													</div>
												</div>
												<div class="d-flex flex-wrap pt-3 list-row align-items-center mb-2 border-bottom">
													<div class="col-xl-5 col-xxl-8 col-lg-6 col-sm-8 d-flex align-items-center">
														<div class="list-icon bgl-primary mr-3 mb-3">
															<p class="fs-24 text-primary mb-0 mt-2">4</p>
															<span class="fs-14 text-primary">Months</span>
														</div>
														<div class="info mb-3">
															<h4 class="fs-20 "><a class="text-black">Sipariş edilen Ürün Adı</a></h4>
															<span class="text-primary font-w600">Mağaza Adı</span>
														</div>
													</div>
													<div class="col-xl-2 col-xxl-4 col-lg-2 col-sm-4 activities mb-3 mr-auto pl-3 pr-3 text-sm-center">
														<div class="badge light badge-primary cprimary">
															<i class="fa fa-circle text-primary mr-1"></i>Beklemede
														</div>													
													</div>
													<div class="col-xl-5 col-xxl-12 col-lg-4 col-sm-12 d-flex align-items-center">
														<a href="javascript:void(0);" class="btn mb-3 play-button rounded mr-3 siparis-onaylandi">														<i class="las la-caret-right scale-2 mr-3"></i>
															Siparişi Onayla
														</a>
														<div class="dropdown mb-3">
															<a href="javascript:void(0)" class="more-button" data-toggle="dropdown" aria-expanded="false">
																<svg width="6" height="26" viewBox="0 0 6 26" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M6 3C6 4.65685 4.65685 6 3 6C1.34315 6 0 4.65685 0 3C0 1.34315 1.34315 0 3 0C4.65685 0 6 1.34315 6 3Z" fill="#585858"></path>
																	<path d="M6 13C6 14.6569 4.65685 16 3 16C1.34315 16 0 14.6569 0 13C0 11.3431 1.34315 10 3 10C4.65685 10 6 11.3431 6 13Z" fill="#585858"></path>
																	<path d="M6 23C6 24.6569 4.65685 26 3 26C1.34315 26 0 24.6569 0 23C0 21.3431 1.34315 20 3 20C4.65685 20 6 21.3431 6 23Z" fill="#585858"></path>
																</svg>
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="siparis-detay.php">Ürün Bilgisi</a>
																<hr class="m-1">
																<a class="dropdown-item text-success" href="javascript:void(0);">Ürün Teslim Edildi</a>
																<a class="dropdown-item text-warning" href="javascript:void(0);">Ürün Hazırlanıyor</a>
																<a class="dropdown-item text-black" href="javascript:void(0);">Ürün Kargoda</a>
																<a class="dropdown-item text-danger" href="javascript:void(0);">Siparişi İptal Et</a>
															</div>
														</div>
													</div>
												</div>
												<div class="d-flex flex-wrap pt-3 list-row align-items-center mb-2 border-bottom">
													<div class="col-xl-5 col-xxl-8 col-lg-6 col-sm-8 d-flex align-items-center">
														<div class="list-icon bgl-primary mr-3 mb-3">
															<p class="fs-24 text-primary mb-0 mt-2">4</p>
															<span class="fs-14 text-primary">Months</span>
														</div>
														<div class="info mb-3">
															<h4 class="fs-20 "><a class="text-black">Sipariş edilen Ürün Adı</a></h4>
															<span class="text-primary font-w600">Mağaza Adı</span>
														</div>
													</div>
													<div class="col-xl-2 col-xxl-4 col-lg-2 col-sm-4 activities mb-3 mr-auto pl-3 pr-3 text-sm-center">
														<div class="badge light badge-warning cwarning">
															<i class="fa fa-circle text-warning mr-1"></i>Hazırlanıyor
														</div>													
													</div>
													<div class="col-xl-5 col-xxl-12 col-lg-4 col-sm-12 d-flex align-items-center">
														<a href="javascript:void(0);" class="btn mb-3 play-button rounded mr-3 siparis-onaylandi">
															<i class="las la-caret-right scale-2 mr-3"></i>
															Siparişi Onayla
														</a>
														<div class="dropdown mb-3">
															<a href="javascript:void(0)" class="more-button" data-toggle="dropdown" aria-expanded="false">
																<svg width="6" height="26" viewBox="0 0 6 26" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M6 3C6 4.65685 4.65685 6 3 6C1.34315 6 0 4.65685 0 3C0 1.34315 1.34315 0 3 0C4.65685 0 6 1.34315 6 3Z" fill="#585858"></path>
																	<path d="M6 13C6 14.6569 4.65685 16 3 16C1.34315 16 0 14.6569 0 13C0 11.3431 1.34315 10 3 10C4.65685 10 6 11.3431 6 13Z" fill="#585858"></path>
																	<path d="M6 23C6 24.6569 4.65685 26 3 26C1.34315 26 0 24.6569 0 23C0 21.3431 1.34315 20 3 20C4.65685 20 6 21.3431 6 23Z" fill="#585858"></path>
																</svg>
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="siparis-detay.php">Ürün Bilgisi</a>
																<hr class="m-1">
																<a class="dropdown-item text-success" href="javascript:void(0);">Ürün Teslim Edildi</a>
																<a class="dropdown-item text-warning" href="javascript:void(0);">Ürün Hazırlanıyor</a>
																<a class="dropdown-item text-black" href="javascript:void(0);">Ürün Kargoda</a>
																<a class="dropdown-item text-danger" href="javascript:void(0);">Siparişi İptal Et</a>
															</div>
														</div>
													</div>
												</div> -->
											</div>
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
    <script src="<?php echo base_url("assets/staff/vendor/global/global.min.js") ?>"></script>
	<script src="<?php echo base_url("assets/staff/vendor/bootstrap-select/dist/js/bootstrap-select.min.js") ?>"></script>
	<script src="<?php echo base_url("assets/staff/vendor/chart.js/Chart.bundle.min.js") ?>"></script>
	<script src="<?php echo base_url("assets/staff/vendor/bootstrap-datetimepicker/js/moment.js") ?>"></script>
	<script src="<?php echo base_url("assets/staff/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/staff/js/custom.min.js") ?>"></script>
	<script src="<?php echo base_url("assets/staff/js/deznav-init.js") ?>"></script>
	<script>
		$(function () {
			$('#datetimepicker1').datetimepicker({
				inline: true,
			});
		});
	</script>
	    <script src="<?php echo base_url("assets/staff/vendor/sweetalert2/dist/sweetalert2.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/staff/js/plugins-init/sweetalert.init.js") ?>"></script>

</body>
</html>