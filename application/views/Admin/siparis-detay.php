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
	<link rel="stylesheet" type="text/css" href="vendor/star-rating/star-rating-svg.css") ?> ">
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
							Sipariş Detayı
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
        <img class="trflag" src="<?php echo base_url("assets/tr.png") ?>" alt="Türkçe" title="Türkçe">
        <img class="nd-flag" src="<?php echo base_url("assets/nd.png") ?>" alt="Nederlands" title="Nederlands">
    </div>
</div>
			</div>
        </div>
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                <?php $fotograflar = explode(",",$urun[0]["fotograflar"]); ?>
                                    <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade show active" id="first">
                                                <img class="img-fluid" src="<?php echo base_url($fotograflar[0]) ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
                                            <!-- Nav tabs -->
											<ul class="nav slide-item-list mt-3" role="tablist" id="lightgallery" >
                                            <?php 
												foreach ($fotograflar as $foto){ ?>
 													<a class="detay-lgl mb-2" href="<?php echo base_url($foto) ?>" data-exthumbimage="<?php echo base_url($foto) ?>" data-src="<?php echo base_url($foto) ?>" >
                                                    	<img class="img-fluid" src="<?php echo base_url($foto) ?>" alt="" width="50">
                                               		 </a>
												<?php } ?>  
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Tab slider End-->
                                    <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                        <div class="product-detail-content">
                                            <!--Product details-->
                                            <div class="new-arrival-content pr">
                                                <h4><?php echo $urun[0]["ad"] ?></h4>
												<hr>
                                                <p>Sipariş durumu: 

                                                <?php 
												if($order[0]["durum"]=="onay_beklemede"){
													echo '<span class="badge badge-secondary">Onay Bekliyor<span class="ml-1 fa fa-hourglass-end"></span></span>';
												} 
													if($order[0]["durum"]=="beklemede"){
														echo '													<span class="item text-warning">Beklemede</span>
                                                        ';
													}

													if($order[0]["durum"]=="hazirlaniyor"){
														echo '<span class="item text-primary">Hazırlanıyor</span>';
													}

													if($order[0]["durum"]=="tamam"){
														echo '<span class="item text-success">Tamamlandı</span>';
													}
													if($order[0]["durum"]=="iptal"){
														echo '<span class="item text-danger">İptal Edildi</span>';
													}

													if(	$order[0]["durum"]=="kargo"){
														echo '<span class="item text-secondary">Kargo</span>';
													}
													?>
													<!--<span class="item text-danger">İptal Edildi</span>
													<span class="item text-black">Kargo Yolda</span>
													<span class="item text-success">Tamamlandı</span>
													<span class="item text-primary">Hazırlanıyor</span> -->
                                                </p>
                                                <p>Ürün kodu: <span class="item"><?php echo $urun[0]["urun_kodu"] ?></span> </p>
												<?php

if($urun[0]["bekleme"] == "true"){
	echo "<p>Bekleme süresi: <span class='item text-success'>".$urun[0]["bekleme_suresi"]."</span></p>";
}

?>
												<p>Marka: <span class="item"><?php echo $urun[0]["marka"] ?></span></p>
												<p>İstenilen Adet: <span class="item"><?php echo $order[0]["adet"] ?></span></p>
												<p>Ürün açıklaması: <span class="item"><?php echo nl2br($urun[0]["aciklama"]) ?></span></p>
												<div class="filtaring-area mb-3">
													<hr>
                                                    <div class="size-filter">
														<p>Yatak boyutu:</p>
														<div class="input-group mb-3 input-success-o">
															<input type="text" value="" class="col-xl-6 col-lg-12 col-md-12 col-xxl-8 col-sm-12 yukseklik40 form-control input-default input-kapali" placeholder="Seçilen yatak boyutu" disabled="disabled">
                                        				</div>
                                                    </div>
													<hr>
                                                    <div class="size-filter">
														<p>Kumaş markası:</p>
														<div class="input-group mb-3 input-success-o">
															<input type="text" value="<?php echo $order[0]["kumastitle"] ?>" class="col-xl-6 col-lg-12 col-md-12 col-xxl-8 col-sm-12 yukseklik40 form-control input-default input-kapali" placeholder="Seçilen kumaş markası (örn. Amsterdam vs.)" disabled="disabled">
                                        				</div>
                                                    </div>
                                                    <div class="size-filter">
														<p>Kumaş renk kodu:</p>
														<div class="input-group mb-3 input-success-o">
															<input type="text"  value="<?php echo $order[0]["renk"] ?>" class="col-xl-6 col-lg-12 col-md-12 col-xxl-8 col-sm-12 yukseklik40 form-control input-default input-kapali" placeholder="Seçilen renk kodu" disabled="disabled">
                                        				</div>
                                                    </div>
													<hr>
                                                    <div class="size-filter">
														<p>Seçilen Matras:</p>
														<div class="input-group mb-1 input-success-o">
															<input type="text"  value="<?php if($order[0]["matras"] != "undefined"){ echo $order[0]["matras"]; }else{ echo "Seçim yapılmadı"; } ?>" class="col-xl-6 col-lg-12 col-md-12 col-xxl-8 col-sm-12 yukseklik40 form-control input-default input-kapali" placeholder="Seçilen Matras (örn. 60x100)" disabled="disabled">
                                        				</div>
														<?php

															if($order[0]["kumasli_mi"] == "true"){
																echo '<p class="text-danger m-0">DIKKAT! Matras kumaşlı olacak</p>';
															}

														?>
														<div class="size-filter">
															<p>Matras parça adet:</p>
															<div class="input-group mb-3 input-success-o">
																<input type="text" value="" class="col-xl-6 col-lg-12 col-md-12 col-xxl-8 col-sm-12 yukseklik40 form-control input-default input-kapali" placeholder="Seçilen parça adeti" disabled="disabled">
															</div>
														</div>
                                                    </div>
													<hr>
                                                    <div class="size-filter">
														<p>Seçilen Topper:</p>
														<div class="input-group mb-3 input-success-o">
															<input value="<?php if($order[0]["topper"] != "undefined"){ echo $order[0]["topper"]; }else{ echo "Seçim yapılmadı"; } ?>"  type="text" class="col-xl-6 col-lg-12 col-md-12 col-xxl-8 col-sm-12 yukseklik40 form-control input-default input-kapali" placeholder="Seçilen Topper (örn. 60x100)" disabled="disabled">
                                        				</div>
                                                    </div>
													<hr>
                                                    <div class="size-filter">
														<p>Seçilen Voeteinde:</p>
														<?php 

															$vods = explode(",",$order[0]["vods"]);
															
															foreach($vods as $vod){ ?>
																	<div class="input-group mb-3 input-success-o">
                                                            			<input value="<?php echo $vod ?>" type="text" class="col-xl-6 col-lg-12 col-md-12 col-xxl-8 col-sm-12 yukseklik40 form-control input-default input-kapali" placeholder="Seçim Yapılmadı" disabled="disabled">
                                        							</div>
															<?php }

														?>
														
                                                       
                                                    
                                                        <!-- voeteinde eğer birden fazla seçtiyse inputlar ona göre fazla olacak yani tüm veotiende seçenekleri 1 inputta yazmayacak!!! -->
														
													</div>
													<hr>
                                                </div>
												<div class="col-12 px-0">
 													<span><a href="<?php echo base_url("admin/siparisfatura/".$id."/".$urunId) ?>">
														 <div class="btn-group">
															<button class="btn btn-primary btn-sm" type="button">
																Siparişin faturası için tıklayınız
															</button>	
														</div>
													</a></span>
												</div>
                                            </div>
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