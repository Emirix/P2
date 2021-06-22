

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>panel</title>
    <!-- Favicon icon -->
	<link href="<?php  echo base_url("assets/shop/vendor/lightgallery/css/lightgallery.min.css") ?> " rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php  echo base_url("assets/shop/images/panel.ico")?>">
	<link href="<?php  echo base_url("assets/shop/vendor/bootstrap-select/dist/css/bootstrap-select.min.css") ?> " rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url("assets/shop/vendor/star-rating/star-rating-svg.css") ?> ">
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
								Ürün detayları
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
							<?php
							$fotograflar = explode(",",$urun[0]["fotograflar"]);
							?>
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade show active" id="first">
                                                <img class="img-fluid" src="<?php echo base_url($fotograflar[0]) ?>" alt="">
												<?php
											if($urun[0]["stoknp"]=="true"){
												
											}else{
												echo '<span class="badge badge-danger sinirli-stok">Sınırlı stok</span>';
											}
											?>
												
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
                                                <div class="comment-review star-rating">
													<ul>
													<?php 
													for($i = 0; $i < $urun[0]["yildiz"];$i++){
														echo '<li><i class="fa fa-star"></i></li>';
													}

													for($i = 0; $i < (5 - $urun[0]["yildiz"] ) ;$i++){
														echo '                                                    
														<li><i class="fa fa-star-o"></i></li>
														';
													}
													?>
													</ul>
													<span class="review-text">(<?php echo count($yorumlar) ?>) / </span><a class="product-review" href=""  data-toggle="modal" data-target="#reviewModal">Yorum yaz?</a>
												</div>
												<div class="d-table mb-2">
													<p class="price float-left d-block" id="fiyat">€<?php echo $urun[0]["fiyat"] ?></p>
                                                </div>
                                                <p>Stok durumu: 
												<?php
											if($urun[0]["stoknp"]=="true"){
												echo '<span class="item text-success"> Stokta var <i class="fa fa-check-circle text-success"></i></span>';
											}else{
												echo '<span class="item text-danger"> Stokta '.$urun[0]["stok"].' ürün kaldı <i class="fa  fa-exclamation-circle text-danger"></i></span>';
											}
											?></p>
											 <p>
											 <?php

												if($urun[0]["bekleme"] == "true"){
													echo "Bekleme süresi: <span class='item text-success'>".$urun[0]["bekleme_suresi"]."</span>";
												}

											?>
                                              
                                            </p>
                                                <p>Ürün kodu: <span class="item"><?php echo $urun[0]["urun_kodu"] ?></span> </p>
                                            	<p>Marka: <span class="item"><?php echo $urun[0]["marka"]?> </span></p>
                                               
												<p>Ürün açıklaması: <span class="item"><?php echo $urun[0]["aciklama"]?></span></p>
												<div class="filtaring-area mb-3">
												<?php 
													if($urun[0]["kategori"] != "urun-matras") { 
												?>
													<hr>
													<p>Yatak boyutu: <span class="badge badge-xs light badge-danger" style="position: relative;top: -2px;">zorunlu</span>
														<span><div class="btn-group">
																<button id="yatakboyuttitle" class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
																Lütfen seçim yapınız.
																</button>
																<div class="dropdown-menu" id="yatakboyutdown">
																	<div class="dropdown-item" data-yatakboyut="120x200">120x200</div>
																	<div class="dropdown-item" data-yatakboyut="120x210">120x210</div>
																	<div class="dropdown-item" data-yatakboyut="120x220">120x220</div>
																	<div class="dropdown-item" data-yatakboyut="140x200">140x200</div>
																	<div class="dropdown-item" data-yatakboyut="140x210">140x210</div>
																	<div class="dropdown-item" data-yatakboyut="140x220">140x220</div>
																	<div class="dropdown-item" data-yatakboyut="160x200">160x200</div>
																	<div class="dropdown-item" data-yatakboyut="160x210">160x210</div>
																	<div class="dropdown-item" data-yatakboyut="160x220">160x220</div>
																	<div class="dropdown-item" data-yatakboyut="180x200">180x200</div>
																	<div class="dropdown-item" data-yatakboyut="180x210">180x210</div>
																	<div class="dropdown-item" data-yatakboyut="180x220">180x220</div>
																	<div class="dropdown-item" data-yatakboyut="200x200">200x200</div>
																	<div class="dropdown-item" data-yatakboyut="200x210">200x210</div>
																	<div class="dropdown-item" data-yatakboyut="200x220">200x220</div>
																</div>
															</div>
														</span>
													</p>
													<hr>
													<?php } ?>
													<p>Kumaş seçimi: <span class="badge badge-xs light badge-danger" style="position: relative;top: -2px;">zorunlu</span>
														<span><div class="btn-group">
																<button id="kumastitle" class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
																Lütfen seçim yapınız.
																</button>
																<div class="dropdown-menu" id="kumasdown">
																	<div class="dropdown-item" data-kumas="Amsterdam">Amsterdam</div>
																	<div class="dropdown-item" data-kumas="Verona">Verona</div>
																	<div class="dropdown-item" data-kumas="Riviera">Riviera</div>
																	<div class="dropdown-item" data-kumas="Bravo">Bravo</div>
																</div>
															</div>
														</span>
													</p>
                                                    <div class="size-filter">
														<p>Kumaş renk kodu: <span class="badge badge-xs light badge-danger" style="position: relative;top: -2px;">zorunlu</span></p>
														<div class="input-group mb-3 input-success-o">
                                            				<textarea id="val-renk" type="text" class="col-lg-6 col-xxl-6 col-xl-3 form-control" placeholder="Lütfen renk seçiminizi buraya yazınız." style="min-height: 30px;"></textarea>
                                        				</div>
                                                    </div>
													<hr>
                                                </div>

												<div class="col-12 px-0">
													<p>Matras: 
														<span><div class="btn-group">
																<button id="matrastitle" class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
																Lütfen seçim yapınız.
																</button>
																<div class="dropdown-menu" id="matrasdown">
																
																<?php if($urun[0]["matras"] == "Polyether Matras"){
																	foreach ($polyetherMatras as $matras) {
																		$f = explode("€",$matras["matras"]);
																	?>																	
																	<a data-matras="<?php echo $matras["matras"] ?>" class="dropdown-item" data-fiyat="<?php echo $f[1]?>">
																	<span class="badge badge-primary light">+<?php
																	echo $f[1];
																	?>€</span>
																	&nbsp; <?php echo $matras["matras"]?>
																	</a>
																<?php }} ?>

																<?php if($urun[0]["matras"] == "Pocket Poly Matras"){
																	foreach ($pocketPolyMatras as $matras) {
																		$f = explode("€",$matras["matras"]);
																	?>																	
																	<a data-matras="<?php echo $matras["matras"] ?>" class="dropdown-item" data-fiyat="<?php echo $f[1]?>">
																	<span class="badge badge-primary light">+<?php
																	
																	echo $f[1];
																	?>€</span>
																	&nbsp; <?php echo $matras["matras"]?>
																	</a>
																<?php }} ?>


																<?php if($urun[0]["matras"] == "Pocket HR Matras"){
																	foreach ($pocketHrMatras as $matras) {
																		$f = explode("€",$matras["matras"]);
																	?>																	
																	<a data-matras="<?php echo $matras["matras"] ?>" class="dropdown-item" data-fiyat="<?php echo $f[1]?>">
																	<span class="badge badge-primary light">+<?php
																	
																	echo $f[1];
																	?>€</span>
																	&nbsp; <?php echo $matras["matras"]?>
																	</a>
																<?php }} ?>


																<?php if($urun[0]["matras"] == "HR Matras"){
																	foreach ($hrMatras as $matras) {
																		$f = explode("€",$matras["matras"]);
																	?>																	
																	<a data-matras="<?php echo $matras["matras"] ?>" class="dropdown-item" data-fiyat="<?php echo $f[1]?>">
																	<span class="badge badge-primary light">+<?php
																	
																	echo $f[1];
																	?>€</span>
																	&nbsp; <?php echo $matras["matras"]?>
																	</a>
																<?php }} ?>

																<?php if($urun[0]["matras"] == "Pocket HR 2x5"){
																	foreach ($pocketHr25 as $matras) {
																		$f = explode("€",$matras["matras"]);
																	?>																	
																	<a data-matras="<?php echo $matras["matras"] ?>" class="dropdown-item" data-fiyat="<?php echo $f[1]?>">
																	<span class="badge badge-primary light">+<?php
																	
																	echo $f[1];
																	?>€</span>
																	&nbsp; <?php echo $matras["matras"]?>
																	</a>
																<?php }} ?>
																	
																	
																</div>
															</div>
														</span><br>
														<label class="mt-2">
															<input type="checkbox" id="xx31">
															<span>Matras kumaşlı olacaksa lütfen tıklayın <span class="badge badge-sm light badge-primary">+€50</span></span>
														</label>
													</p>

													<p>Parça adet: 
														<span><div class="btn-group">
																<button id="parcatitle" class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
																Lütfen seçim yapınız.
																</button>
																<div class="dropdown-menu" id="parcadown">												
																	<a class="dropdown-item">1 parça</a>
																	<a class="dropdown-item">2 parça</a>
																</div>
															</div>
														</span><br>
													</p>
													<hr>
													<p>Topper: 
														<span><div class="btn-group">
																<button id="toppertitle" class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
																Lütfen seçim yapınız.
																</button>
																<div class="dropdown-menu" id="topperdown">


																	<?php if($urun[0]["topper"] == "Polyether Topper"){
																	foreach ($polyetherTopper as $matras) {
																		$f = explode("€",$matras["topper"]);
																	?>																	
																	<a data-matras="<?php echo $matras["topper"] ?>" class="dropdown-item" data-fiyat="<?php echo $f[1]?>">
																	<span class="badge badge-primary light">+<?php
																	
																	echo $f[1];
																	?>€</span>
																	&nbsp; <?php echo $matras["topper"]?>
																	</a>
																<?php }} ?>


																<?php if($urun[0]["topper"] == "Nasa Topper"){
																	foreach ($nasaTopper as $matras) {
																		$f = explode("€",$matras["topper"]);
																	?>																	
																	<a data-matras="<?php echo $matras["topper"] ?>" class="dropdown-item" data-fiyat="<?php echo $f[1]?>">
																	<span class="badge badge-primary light">+<?php
																	
																	echo $f[1];
																	?>€</span>
																	&nbsp; <?php echo $matras["topper"]?>
																	</a>
																<?php }} ?>

																<?php if($urun[0]["topper"] == "HR Topper"){
																	foreach ($hrTopper as $matras) {
																		$f = explode("€",$matras["topper"]);
																	?>																	
																	<a data-matras="<?php echo $matras["topper"] ?>" class="dropdown-item" data-fiyat="<?php echo $f[1]?>">
																	<span class="badge badge-primary light">+<?php
																	
																	echo $f[1];
																	?>€</span>
																	&nbsp; <?php echo $matras["topper"]?>
																	</a>
																<?php }} ?>
																	
																</div>
															</div>
														</span>
													</p>
													<hr>
													<p>Voeteinde: 
														<span><div class="btn-group">
																<button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
																Lütfen seçim yapınız.
																</button>
																<div class="dropdown-menu" id="vod">
																	<label class="w-100"><div class="dropdown-item" >
																		<input data-fiyat="225" type="checkbox" value="Dekenkist 125cm breed (+€225)">&nbsp; 
																		<span class="badge badge-primary light">+€225</span>
																		&nbsp; Dekenkist 125cm breed
																	</div></label>
																	<label class="w-100"><div class="dropdown-item">
																		<input data-fiyat="305" type="checkbox" value="Dekenkist breedte bed (+€305)">&nbsp; 
																		<span class="badge badge-primary light">+€305</span>
																		&nbsp; Dekenkist breedte bed
																	</div></label>
																	<label class="w-100"><div class="dropdown-item">
																		<input data-fiyat="205" type="checkbox" value="Voetenbank 125cm breed (+€205)">&nbsp; 
																		<span class="badge badge-primary light">+€205</span>
																		&nbsp; Voetenbank 125cm breed
																	</div></label>
																	<label class="w-100"><div class="dropdown-item">
																		<input data-fiyat="225" type="checkbox" value="Voetenbank breedte bed (+€225)">&nbsp; 
																		<span class="badge badge-primary light">+€225</span>
																		&nbsp; Voetenbank breedte bed
																	</div></label>
																	<label class="w-100"><div class="dropdown-item">
																		<input data-fiyat="525" type="checkbox" value="TV-lift vlak (+€525)">&nbsp; 
																		<span class="badge badge-primary light">+€525</span>
																		&nbsp; TV-lift vlak
																	</div></label>
																	<label class="w-100"><div class="dropdown-item">
																		<input data-fiyat="625" type="checkbox" value="TV-lift patroon (+€625)">&nbsp; 
																		<span class="badge badge-primary light">+€625</span>
																		&nbsp; TV-lift patroon
																	</div></label>
																	<label class="w-100"><div class="dropdown-item">
																		<input data-fiyat="180" type="checkbox" value="Voetbord Vlak (+€180)">&nbsp; 
																		<span class="badge badge-primary light">+€180</span>
																		&nbsp; Voetbord Vlak
																	</div></label>
																	<label class="w-100"><div class="dropdown-item">
																		<input data-fiyat="305" type="checkbox" value="Voetbord Patroon (+€305)">&nbsp; 
																		<span class="badge badge-primary light">+€305</span>
																		&nbsp; Voetbord Patroon
																	</div></label>
																</div>
															</div>
														</span>
													</p>
													<hr>
                                                </div>

												<div class="col-12 px-0">
													<p>Ürün adet seçimi: 
														<span><div class="btn-group">
																<button class="btn btn-primary btn-sm dropdown-toggle" id="kac-adet" type="button" data-toggle="dropdown">
																	Adet seçimi yapılmadı
																</button>
																<div class="dropdown-menu" id="adetler">
																	<a class="dropdown-item" data-value="1">1 adet</a>
																	<a class="dropdown-item" data-value="2">2 adet</a>
																	<a class="dropdown-item" data-value="3">3 adet</a>
																</div>
															</div>
														</span>
													</p>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<!-- review -->
					<div class="modal fade" id="reviewModal">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Bu ürünü değerlendir</h5>
									<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form action="<?php echo base_url("admin/yorumekle"); ?>" method="post">
										<div class="text-center mb-4">
										<img class="img-fluid rounded" width="78" src="<?php echo base_url("assets/pp/".$user[0]["fotograf"]) ?>" >
										</div>
										<div class="form-group">
											<div class="rating-widget mb-4 text-center">
											<input type="hidden" id="star" name="star" value="5">
											<input type="hidden" name="ad_soyad" value="<?php echo $user[0]["isim"]?>"> 
											<input type="hidden" name="urun_id" value="<?php echo $id?>">
											<input type="hidden" name="back" value="<?php echo $id?>">
											<input type="hidden" name="foto" value="<?php echo $user[0]["fotograf"]?>">
											
												<div class="rating-stars">
													<ul id="stars">
														<li class="star" title="Poor" data-value="1">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="Fair" data-value="2">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="Good" data-value="3">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="Excellent" data-value="4">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="WOW!!!" data-value="5">
															<i class="fa fa-star fa-fw"></i>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="form-group">
											<textarea name="yorum" class="form-control" placeholder="Yorumunuz.." rows="5"></textarea>
										</div>
										<button class="btn btn-success btn-block">PAYLAŞ</button>
									</form>
								</div>
							</div>
						</div>
					</div>
                </div>
				
				<div class="row">
					<div class="col-12">
						<div class="row">	
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header d-block pb-0 border-bottom">
										<div class="d-sm-flex flex-wrap align-items-center d-block mb-md-3 mb-0">
											<div class="mr-auto pr-3">
												<h4 class="text-black fs-20"><?php echo $urun[0]["ad"];?> ürününe yapılan tüm yorumlar!</h4>
												<p class="fs-13 mb-0 text-black">Ürün inceleme sayfasından sende ürünü değerlendirebilirsin!</p>
											</div>
										</div>
									</div>
									<div class="card-body">

									<?php foreach($yorumlar as $yorum) {?>
										<div class="media border-bottom mb-3 pb-3 d-lg-flex d-block menu-list">
											<img class="rounded mr-3 mb-md-0 mb-3" src="<?php echo base_url("assets/pp/".$yorum["fotograf"]) ?>" height="75" width="75">
											<div class="media-body col-lg-12 pl-0">
												<h6 class="fs-16 font-w600"><a href="ecom-product-detail.html" class="text-black">Bu ürünü <?php echo $yorum["ad_soyad"] ?> değerlendirdi!</a></h6>
												<p class="fs-14"><?php echo nl2br($yorum["yorum"]) ?></p>

												<!-- ürünü satın aldıysa bu çıkacak -->
												<?php
												
												if($yorum["durum"]=="almadi"){
													echo '<span class="badge badge-sm light badge-danger mb-2">Ürünü satın almadı!</span>';
												}else{
													echo '<span class="badge badge-sm light badge-success mb-2">Ürünü satın aldı!</span>';
												}
												?>
												

												<!-- ürünü satın ALMADOYSA bu çıkacak -->
												<!-- BİLİYOZ AMK NE YAZION BURAYA -->

												<div class="d-flex flex-wrap align-items-center">
													<ul class="d-flex flex-wrap mb-sm-0 mb-2">
														<li class="mb-2 mr-3 text-nowrap"><i class="las la-clock scale5 mr-2"></i><span class="fs-14 text-black text-nowrap font-w500"><?php echo $yorum["tarih"] ?></span></li>
														
														<li class="text-nowrap mb-2">
														<?php 
													for($i = 0; $i < $yorum["yildiz"];$i++){
														echo '<li><i class="fa fa-star mr-2 scale5 text-warning"></i></li>';
													}

													for($i = 0; $i < (5 - $yorum["yildiz"] ) ;$i++){
														echo '                                                    
														<li><i class="fa fa-star-o mr-2 scale5 text-warning"></i></li>
														';
													}
													?>
													
													</li>
													
													
													</ul>
												</div>
											</div>
										</div>
									<?php } ?>
										
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


		$("li.star").click(function(){
			$("#star").val($(this).attr("data-value"))
		})

		var vods = [];
		var kumasSecim = false;
		var matrasSecim = false;
		var topperSecim = false;

		var fiyat = <?php echo $urun[0]["fiyat"];?>;
        var e1 = 0;
        var e2 = 0;
        var e3 = 0;
        var e4 = 0;
        var e5 = 0;
        var e7 = 1;

		function topla(){
          return (fiyat + parseInt(e1) + parseInt(e2) + parseInt(e3) + parseInt(e4) + parseInt(e5)) * parseInt(e7) 
        }


		const urun = {}
		
		$("#kumasdown div").click(function(){
			kumasSecim = true
			$("#kumastitle").text($(this).attr("data-kumas"))
			urun.kumastitle = $(this).attr("data-kumas");
			
		})
		
		$("#matrasdown a").click(function(){
			matrasSecim = true;
			$("#matrastitle").text($(this).attr("data-matras"))
			urun.matras = $(this).attr("data-matras");
			e1 = $(this).attr("data-fiyat")
			$("#fiyat").text(topla())
		})

		$("#topperdown a").click(function(){
			// urun.matras = $(this).attr("data-matras");

			
			$("#toppertitle").text($(this).attr("data-matras"))
			urun.topper = $(this).attr("data-matras");

			e2 = $(this).attr("data-fiyat")
			$("#fiyat").text(topla())

		})

		$("#xx31").change(function(){
			if($(this).prop("checked")){
				e3 = "50";
			}else{
				e3 = "0";				
			}

			$("#fiyat").text(topla())
		})

		$("#vod input").change(function(){
			
			
			if($(this).prop("checked")){
				e5 += parseInt($(this).attr("data-fiyat"))	
				vods.push($(this).val())
				$("#fiyat").text(topla())

				
			}else{
				e5 -= $(this).attr("data-fiyat");
				const index = vods.indexOf($(this).val());
				$("#fiyat").text(topla())

				if (index > -1) {
  					vods.splice(index, 1);
				}

			}


		})




	</script>

</body>


</html>