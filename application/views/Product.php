
<?php
$type = "";
if($urun[0]["kategori"] == "urun-topper"){
	$type="topper";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>panel</title>
    <!-- Favicon icon -->
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
    <link rel="icon" type="image/png" sizes="16x16" href="./images/panel.ico">
	<link href="<?php echo base_url("assets/reseller/vendor/bootstrap-select/dist/css/bootstrap-select.min.css") ?> " rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/reseller/vendor/star-rating/star-rating-svg.css") ?>">
    <link href="<?php echo base_url("assets/reseller/vendor/lightgallery/css/lightgallery.min.css") ?>"  rel="stylesheet">
    <link href="<?php echo base_url("assets/reseller/css/style.css" ) ?>" rel="stylesheet">
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
			<a href="<?php echo base_url("reseller") ?>" class="w-100 text-center brand-logo">logo</a>

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
								??r??n ??nceleme
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M22.75 15.8385V13.0463C22.7471 10.8855 21.9385 8.80353 20.4821 7.20735C19.0258 5.61116 17.0264 4.61555 14.875 4.41516V2.625C14.875 2.39294 14.7828 2.17038 14.6187 2.00628C14.4546 1.84219 14.2321 1.75 14 1.75C13.7679 1.75 13.5454 1.84219 13.3813 2.00628C13.2172 2.17038 13.125 2.39294 13.125 2.625V4.41534C10.9736 4.61572 8.97429 5.61131 7.51794 7.20746C6.06159 8.80361 5.25291 10.8855 5.25 13.0463V15.8383C4.26257 16.0412 3.37529 16.5784 2.73774 17.3593C2.10019 18.1401 1.75134 19.1169 1.75 20.125C1.75076 20.821 2.02757 21.4882 2.51969 21.9803C3.01181 22.4724 3.67904 22.7492 4.375 22.75H9.71346C9.91521 23.738 10.452 24.6259 11.2331 25.2636C12.0142 25.9013 12.9916 26.2497 14 26.2497C15.0084 26.2497 15.9858 25.9013 16.7669 25.2636C17.548 24.6259 18.0848 23.738 18.2865 22.75H23.625C24.321 22.7492 24.9882 22.4724 25.4803 21.9803C25.9724 21.4882 26.2492 20.821 26.25 20.125C26.2486 19.117 25.8998 18.1402 25.2622 17.3594C24.6247 16.5786 23.7374 16.0414 22.75 15.8385ZM7 13.0463C7.00232 11.2113 7.73226 9.45223 9.02974 8.15474C10.3272 6.85726 12.0863 6.12732 13.9212 6.125H14.0788C15.9137 6.12732 17.6728 6.85726 18.9703 8.15474C20.2677 9.45223 20.9977 11.2113 21 13.0463V15.75H7V13.0463ZM14 24.5C13.4589 24.4983 12.9316 24.3292 12.4905 24.0159C12.0493 23.7026 11.716 23.2604 11.5363 22.75H16.4637C16.284 23.2604 15.9507 23.7026 15.5095 24.0159C15.0684 24.3292 14.5411 24.4983 14 24.5ZM23.625 21H4.375C4.14298 20.9999 3.9205 20.9076 3.75644 20.7436C3.59237 20.5795 3.50014 20.357 3.5 20.125C3.50076 19.429 3.77757 18.7618 4.26969 18.2697C4.76181 17.7776 5.42904 17.5008 6.125 17.5H21.875C22.571 17.5008 23.2382 17.7776 23.7303 18.2697C24.2224 18.7618 24.4992 19.429 24.5 20.125C24.4999 20.357 24.4076 20.5795 24.2436 20.7436C24.0795 20.9076 23.857 20.9999 23.625 21Z" fill="#0B2A97"/>
									</svg>
									<div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu rounded dropdown-menu-right" style="padding: 0 !important;">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-warning">
														<i class="fa fa-hourglass-end"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">??r??n sipari?? edildi</h6>
														<small class="d-block">Ma??azan??n Ad??</small>
														<small class="d-block">01.01.2021 12:00</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-danger">
														<i class="fa fa-close"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Personel taraf??ndan ??r??n iptal edildi</h6>
														<small class="d-block">Ma??azan??n Ad??</small>
														<small class="d-block">01.01.2021 12:00</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-info">
														<i class="fa fa-shopping-cart"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">??r??n ??imdi haz??rlan??yor.</h6>
														<small class="d-block">Ma??azan??n Ad??</small>
														<small class="d-block">01.01.2021 12:00</small>
													</div>
												</div>
											</li>
											 <li>
												<div class="timeline-panel">
													<div class="media mr-2 media-success">
														<i class="fa fa-check"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">??r??n tamamland??</h6>
														<small class="d-block">Ma??azan??n Ad??</small>
														<small class="d-block">01.01.2021 12:00</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
                                
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <img src="<?php echo base_url("assets/pp/".$user[0]["fotograf"]) ?>" width="20" alt="" />
                                    <div class="header-info">
                                        <span class="text-black"><strong><?php echo $user[0]["ad_soyad"] ?></strong></span>
                                        <p class="fs-12 mb-0">Reseller</p>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="<?php echo base_url("login/logout")?>" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ml-2">????k???? yap</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li class="mm-active"><a class="has-arrow ai-icon" href="<?php echo base_url("reseller") ?>" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Reseller</span>
						</a>
                        <ul aria-expanded="false" class="mm-collapse mm-show">
                            <li><a href="<?php echo base_url("reseller") ?>">Anasayfa</a></li>
                        </ul>
                        <ul aria-expanded="false" class="mm-collapse mm-show">
                            <li class="mm-active"><a href="javascript:void()" class="mm-active">??r??n ??nceleme</a></li>
                        </ul>
                    </li>
				</ul>
<div class="copyright text-center">
    <p><strong>Periwonen Y??netim Paneli</strong> ?? 2021 All Rights Reserved</p>
    <p>Made with <span class="heart"></span> by Wrix</p>
    <div class="row justify-content-center align-items-center">
        <a href=""><img class="trflag" src="<?php echo base_url("assets/tr.png") ?>" alt="T??rk??e" title="T??rk??e"></a>
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
                                                <p>Sipari?? durumu: 

                                                <?php 
												if($order[0]["durum"]=="onay_beklemede"){
													echo '<span class="badge badge-secondary">Onay Bekliyor<span class="ml-1 fa fa-hourglass-end"></span></span>';
												} 
													if($order[0]["durum"]=="beklemede"){
														echo '													<span class="item text-warning">Beklemede</span>
                                                        ';
													}

													if($order[0]["durum"]=="hazirlaniyor"){
														echo '<span class="item text-primary">Haz??rlan??yor</span>';
													}

													if($order[0]["durum"]=="tamam"){
														echo '<span class="item text-success">Tamamland??</span>';
													}
													if($order[0]["durum"]=="iptal"){
														echo '<span class="item text-danger">??ptal Edildi</span>';
													}

													if(	$order[0]["durum"]=="kargo"){
														echo '<span class="item text-secondary">Kargo</span>';
													}
													?>
													    											<p> <?php

if($urun[0]["bekleme"] == "true"){
	echo "Bekleme s??resi: <span class='item text-success'>".$urun[0]["bekleme_suresi"]."</span>";
}

?></p>
                                                <p>??r??n kodu: <span class="item"><?php echo $urun[0]["urun_kodu"] ?></span> </p>
                                            	<p>Marka: <span class="item"><?php echo $urun[0]["marka"] ?></span></p>
												<p>??stenilen Adet: <span class="item"><?php echo $order[0]["adet"] ?></span></p>
												<p>??r??n a????klamas??: <span class="item"><?php echo nl2br($urun[0]["aciklama"]) ?></span></p>
												<div class="filtaring-area mb-3">
												<?php if($urun[0]["kategori"] != "urun-matras" && $urun[0]["kategori"] != "urun-topper" ) { ?>
													<hr>
                                                    <div class="size-filter">
														<p>Yatak boyutu:</p>
														<div class="input-group mb-3 input-success-o">
															<input type="text" value="<?php echo $order[0]["yatak_boyutu"] ?>" class="col-xl-6 col-lg-12 col-md-12 col-xxl-8 col-sm-12 yukseklik40 form-control input-default input-kapali" placeholder="Se??ilen yatak boyutu" disabled="disabled">
                                        				</div>
                                                    </div>
												

													<?php } ?>
													<hr/>
													<?php if($type != "topper"){ ?>
                                                    <div class="size-filter">
														<p>Kuma?? markas??:</p>
														<div class="input-group mb-3 input-success-o">
															<input type="text" value="<?php echo $order[0]["kumastitle"] ?>" class="col-xl-6 col-lg-12 col-md-12 col-xxl-8 col-sm-12 yukseklik40 form-control input-default input-kapali" placeholder="Se??ilen kuma?? markas?? (??rn. Amsterdam vs.)" disabled="disabled">
                                        				</div>
                                                    </div>
                                                    <div class="size-filter">
														<p>Kuma?? renk kodu:</p>
														<div class="input-group mb-3 input-success-o">
															<input type="text"  value="<?php echo $order[0]["renk"] ?>" class="col-xl-6 col-lg-12 col-md-12 col-xxl-8 col-sm-12 yukseklik40 form-control input-default input-kapali" placeholder="Se??ilen renk kodu" disabled="disabled">
                                        				</div>
                                                    </div>
													<hr>
                                                    <div class="size-filter">
														<p>Se??ilen Matras:</p>
														<div class="input-group mb-1 input-success-o">
															<input type="text"  value="<?php
															if($order[0]["matras"] != "undefined"){
																if($order[0]["kategori"]!= "urun-matras"){
																	echo $order[0]["matras"]." ( ".$order[0]["matras_boyut"]." ) ";
																}else{
																	echo $order[0]["matras"];

																}
																	
															} ?>" class="col-xl-6 col-lg-12 col-md-12 col-xxl-8 col-sm-12 yukseklik40 form-control input-default input-kapali" placeholder="Se??ilen Matras (??rn. 60x100)" disabled="disabled">
                                        				</div>
														<?php

															if($order[0]["kumasli_mi"] == "true"){
																echo '<p class="text-danger m-0">DIKKAT! Matras kuma??l?? olacak</p>';
															}

														?>


                                                    </div>

													
													<?php if($urun[0]["kategori"] != "urun-matras"){?> 
														<div class="size-filter">
															<p>Matras par??a adet:</p>
															<div class="input-group mb-3 input-success-o">
																<input type="text" value="<?php echo $order[0]["parca"] ?>" class="col-xl-6 col-lg-12 col-md-12 col-xxl-8 col-sm-12 yukseklik40 form-control input-default input-kapali" placeholder="Se??ilen par??a adeti" disabled="disabled">
															</div>
														</div>
														<?php } ?>
														<hr>
														<?php } ?>
													
													<?php if($order[0]["kategori"] == "urun-topper" || $order[0]["kategori"] == "urun-normal" )  { ?>
                                                    <div class="size-filter">
														<p>Se??ilen Topper:</p>
														<div class="input-group mb-3 input-success-o">
															<input value="<?php if($order[0]["topper"] != "undefined"){
																if($order[0]["kategori"]!= "urun-topper"){
																	echo $order[0]["topper"]." ( ".$order[0]["topper_boyut"]." ) ";
																}else{
																	echo $order[0]["topper"];

																}
																
																}else{ echo "Se??im yap??lmad??"; } ?>"  type="text" class="col-xl-6 col-lg-12 col-md-12 col-xxl-8 col-sm-12 yukseklik40 form-control input-default input-kapali" placeholder="Se??ilen Topper (??rn. 60x100)" disabled="disabled">
                                        				</div>
                                                    </div>
												
												    
													<?php
														if($type != "topper") { ?> 
													
                                                    <div class="size-filter">
														<p>Se??ilen Voeteinde:</p>
														<?php 

															$vods = explode(",",$order[0]["vods"]);
															
															foreach($vods as $vod){ ?>
																	<div class="input-group mb-3 input-success-o">
                                                            			<input value="<?php echo $vod ?>" type="text" class="col-xl-6 col-lg-12 col-md-12 col-xxl-8 col-sm-12 yukseklik40 form-control input-default input-kapali" placeholder="Se??im Yap??lmad??" disabled="disabled">
                                        							</div>
															<?php }

														?>
								
														
													</div><?php } ?>
													<?php } ?>
													
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
				<p><strong>Periwonen Y??netim Paneli</strong> ?? 2021 All Rights Reserved</p>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url("assets/reseller/vendor/global/global.min.js") ?>"></script>
	<script src="<?php echo base_url("assets/reseller/vendor/bootstrap-select/dist/js/bootstrap-select.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/reseller/js/custom.min.js") ?>"></script>
	<script src="<?php echo base_url("assets/reseller/js/deznav-init.js") ?>"></script>
    <script src="<?php echo base_url("assets/reseller/vendor/highlightjs/highlight.pack.min.js") ?>"></script>
	<script src="<?php echo base_url("assets/reseller/vendor/star-rating/jquery.star-rating-svg.js") ?>"></script>
	
    <script src="<?php echo base_url("assets/admin/vendor/lightgallery/js/lightgallery-all.min.js") ?>"></script>
	<script>
		$('#lightgallery').lightGallery({
			loop:true,
			thumbnail:true,
			exThumbImage: 'data-exthumbimage'
		});
	</script>
</body>

</html>