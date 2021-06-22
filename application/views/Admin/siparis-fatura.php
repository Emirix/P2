<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>panel</title>
    <!-- Favicon icon -->
	<link href="<?php  echo base_url("assets/admin/vendor/lightgallery/css/lightgallery.min.css") ?> " rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php  echo base_url("assets/admin/images/panel.ico")?>">
	<link href="<?php  echo base_url("assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css") ?> " rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url("assets/admin/vendor/star-rating/star-rating-svg.css") ?> ">
	<link rel="stylesheet" href="<?php  echo base_url("assets/admin/vendor/select2/css/select2.min.css") ?> ">
    <link href="<?php  echo base_url("assets/admin/css/style.css") ?> " rel="stylesheet">
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
							Sipariş Fatura
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
<li><a href="<?php echo base_url("admin/createaccount") ?>">Hesap Oluştur</a></li>							<li><a href="<?php echo base_url("admin/allaccount") ?>">Tüm Hesaplar</a></li>
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
            <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-header"> 
                                Fatura 
                                <strong><?php echo $alan[0]["magaza_adi"] ?></strong> 
                                <span class="float-right">
                                    <strong>Durum:</strong>   
                                                                                  <?php 
                                                                                  if($order[0]["durum"]=="onay_beklemede"){
                                                                                    echo 'Onay Bekliyor';
                                                                                } 
													if($order[0]["durum"]=="beklemede"){
														echo 'Beklemede	';
													}

													if($order[0]["durum"]=="hazirlaniyor"){
														echo 'Hazırlanıyor';
													}

													if($order[0]["durum"]=="tamam"){
														echo 'Tamamlandı';
													}
                                                    
													if($order[0]["durum"]=="iptal"){
														echo 'İptal Edildi';
													}

                                                    if($order[0]["durum"]=="kargo"){
														echo 'Kargo';
													}
													?>
                                </span> 
                            </div>
                            <div class="card-body">
                                <div class="row mb-5">
                                    <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                        <h6>Alıcı:</h6>
                                        <div><b>Mağaza Adı:</b> <?php echo $alan[0]["magaza_adi"] ?></div>
                                        <div><b>KvK:</b> <?php echo $alan[0]["kvk"] ?></div>
                                        <div><b>Adres:</b> <?php echo $alan[0]["adres"] ?></div>
                                        <div><b>Email:</b> <?php echo $alan[0]["eposta"] ?></div>
                                    </div>
                                    <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12"> </div>
                                    <div class="mt-3 col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex justify-content-lg-end justify-content-md-center justify-content-xs-start">
                                        <div class="row align-items-center">
											<div class="col-sm-9"> 
												<div class="brand-logo mb-3">
                                                <div class="faturalogo"><i class="flaticon-381-file-1" style="font-weight: 500;"></i> Factuur</div>
												</div>
                                                <span>Toplam tutar: <b class="d-block float-right">€<?php echo $order[0]["orj_fiyat"]?></b></span><br>
                                                <?php
                                                    
                                                    if($alan[0]["kdv"] == "var"){ ?>
                                                <span>KDV: <b class="d-block float-right">%21</b></span>
                                                <br>
                                                <?php } ?>
                                             
                                                <small class="text-muted">Bu bilgiler sadece bu faturada yer alan ürün için geçerlidir!</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Ürün Adı</th>
                                                <th>Ürün Açıklaması</th>
                                                <th class="center">Adet</th>
                                                <th class="right">Toplam</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#1</td>
                                                <td class="left strong"><?php echo $urun[0]["ad"]?></td>
                                                <td class="left"><?php echo $urun[0]["aciklama"]?></td>
                                                <td class="center"><?php echo $order[0]["adet"]?></td>
                                                <td class="right"><?php echo $order[0]["orj_fiyat"]?>€</td>
                                            </tr>
                                            <tr>
                                                <td>#2</td>
                                                <td class="left">Müşteri Hizmetleri</td>
                                                <td class="left">Kurulum ve Özelleştirme</td>
                                                <td class="center">1</td>
                                                <td class="right">€0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5"> </div>
                                    <div class="col-lg-4 col-sm-5 ml-auto">
                                        <table class="table table-clear">
                                            <tbody>
                                                <tr>
                                                    <td class="left"><strong>Ürün tutarı</strong></td>
                                                    <td class="right"><?php echo $order[0]["orj_fiyat"]?>€</td>
                                                </tr>
                                                <tr>
                                                    <td class="left"><strong>Hizmet bedeli</strong></td>
                                                    <td class="right">€0</td>
                                                </tr>
                                                <?php
                                                    
                                                    if($alan[0]["kdv"] == "var"){ ?>
                                                <tr>
                                                    <td class="left"><strong>KDV</strong></td>
                                                    <td class="right">%21</td>
                                                </tr>

                                                <?php } ?>
                                                <tr>
                                                    <td class="left"><strong class="cblack">Toplam</strong></td>
                                                    <td class="right"><strong class="cblack">€<?php echo $order[0]["orj_fiyat"]?></strong>
                                                </tr>
                                                <?php
                                                    
                                                    if($alan[0]["kdv"] == "var"){ ?>
                                                <tr>
                                                    <td class="left"><strong class="cblack">(KDV) Toplam</strong></td>
                                                    <td class="right"><strong class="cblack"><span>€</span> <?php echo ($order[0]["orj_fiyat"] / 100) * 21  ?></strong>
                                                </tr>
                                                <?php }  ?>

                                               
                                               
                                            </tbody>
                                        </table>
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
    <script src="<?php echo base_url("assets/admin/vendor/global/global.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js") ?> "></script>
    <script src="<?php echo base_url("assets/admin/js/custom.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/js/deznav-init.js") ?> "></script>
    <script src="<?php echo base_url("assets/admin/vendor/highlightjs/highlight.pack.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/vendor/star-rating/jquery.star-rating-svg.js") ?> "></script>
    <script src="<?php echo base_url("assets/admin/vendor/lightgallery/js/lightgallery-all.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/vendor/select2/js/select2.full.min.js") ?> "></script>
    <script src="<?php echo base_url("assets/admin/js/plugins-init/select2-init.js") ?> "></script>
	

	<script>
		$('#lightgallery').lightGallery({
			loop:true,
			thumbnail:true,
			exThumbImage: 'data-exthumbimage'
		});
	</script>

</body>


</html>