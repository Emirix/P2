<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Bill</title>
    <!-- Favicon icon -->
	<link href="<?php  echo base_url("assets/shop/vendor/lightgallery/css/lightgallery.min.css") ?> " rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php  echo base_url("assets/shop/images/panel.ico")?>">
	<link href="<?php  echo base_url("assets/shop/vendor/bootstrap-select/dist/css/bootstrap-select.min.css") ?> " rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="vendor/star-rating/star-rating-svg.css") ?> ">
	<link rel="stylesheet" href="<?php  echo base_url("assets/shop/vendor/select2/css/select2.min.css") ?> ">
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
								Sipariş Fatura Bilgileri
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
                        <li><a href="<?php echo base_url("shopmanager") ?>">Anasayfa</a></li>                        </ul>
					</li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-list"></i>
							<span class="nav-text">Mağaza</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="<?php echo base_url("shopmanager/productlist") ?>">Ürün Listesi</a></li>
                        </ul>
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
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-header"> 
                                Fatura 
                                <strong><?php echo $user[0]["magaza_adi"] ?></strong> 
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
                                        <div><b>Mağaza Adı:</b> <?php echo $user[0]["magaza_adi"] ?></div>
                                        <div><b>KvK:</b> <?php echo $user[0]["kvk"] ?></div>
                                        <div><b>Adres:</b> <?php echo $user[0]["adres"] ?></div>
                                        <div><b>Email:</b> <?php echo $user[0]["eposta"] ?></div>
                                    </div>
                                    <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12"></div>
                                    <div class="mt-3 col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex justify-content-lg-end justify-content-md-center justify-content-xs-start">
                                        <div class="row align-items-center">
											<div class="col-sm-9"> 
												<div class="brand-logo mb-3">
                                                <div class="faturalogo"><i class="flaticon-381-file-1" style="font-weight: 500;"></i> Factuur</div>
												</div>
                                                <span>Toplam tutar: <b class="d-block float-right">€<?php echo $order[0]["orj_fiyat"]?></b></span><br>
                                                <?php  if($alan[0]["kdv"] == "var"){ ?>
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
                                                <td class="right">€<?php echo $order[0]["orj_fiyat"]?></td>
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
                    <!--<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ödenen Borç Detayları</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Ad Soyad</th>
                                                <th>Durum</th>
                                                <th>Tarih</th>
                                                <th>Tutar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                   
                                           <?php foreach($borclar as $key=>$borc) {
                                                ?>
                                            <tr>
                                                <th><?php echo $key+1?></th>
                                                <td><?php echo $alan[0]["ad_soyad"]?></td>
                                                <td><span class="badge badge-success">Ödeme Yapıldı</span>
                                                </td>
                                                <td><?php echo $borc["tarih"] ?></td>
                                                <td class="color-danger"><?php echo $borc["tutar"] ?>€</td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
		
        <div class="footer">
            <div class="copyright text-center">
				<p><strong>Periwonen Yönetim Paneli</strong> © 2021 All Rights Reserved</p>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url("assets/shop/vendor/global/global.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/shop/vendor/bootstrap-select/dist/js/bootstrap-select.min.js") ?> "></script>
    <script src="<?php echo base_url("assets/shop/js/custom.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/shop/js/deznav-init.js") ?> "></script>
    <script src="<?php echo base_url("assets/shop/vendor/highlightjs/highlight.pack.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/shop/vendor/star-rating/jquery.star-rating-svg.js") ?> "></script>
    <script src="<?php echo base_url("assets/shop/vendor/lightgallery/js/lightgallery-all.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/shop/vendor/select2/js/select2.full.min.js") ?> "></script>
    <script src="<?php echo base_url("assets/shop/js/plugins-init/select2-init.js") ?> "></script>
	

	<script>
		$('#lightgallery').lightGallery({
			loop:true,
			thumbnail:true,
			exThumbImage: 'data-exthumbimage'
		});
	</script>

</body>


</html>