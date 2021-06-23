<?php 

?>
<!DOCTYPE html>
<html lang="en">

<head>
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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>panel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url("assets/shop/images/panel.ico")?>">
	<link href="<?php echo base_url("assets/shop/vendor/bootstrap-select/dist/css/bootstrap-select.min.css")?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/shop/icons/flaticon/_flaticon.scss")?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/shop/vendor/star-rating/star-rating-svg.css")?>">
    <link href="<?php echo base_url("assets/shop/css/style.css")?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<style>
    .sepet_urunbilgi:after {
        font-size: 13px;
        color: #0000001c;
        margin-left: 0.3rem;
        content: "•";
    }
    .sepet_urunbilgi:nth-child(3):after {
        display: none;
    }
    .urun-kisa-aciklama {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .urun-fiyat {
        font-weight: 600;
        color: #0B2A97;
        font-size: 20px;
    }
    .sepet_uyari {
        border: solid 1px #f7ddff;
        background-color: #fdf6ff;
        font-size: 13px;
        color: #693597;
        padding: 10px 20px;
        border-radius: 5px;
    }
</style>
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
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
								Sepetim
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
                            <li><a href="<?php echo base_url("shopmanager")  ?>">Anasayfa</a></li>
                        </ul>
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
				<a href="shopmanager/newticket">
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
					<div class="<?php if(count($sepet->contents()) != 0) {echo "col-xl-9 col-xxl-8";}else{echo"col-xl-12 col-xxl-12";} ?>">
						<div class="row">	
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header d-block pb-0 border-bottom">
										<div class="d-sm-flex flex-wrap align-items-center d-block mb-md-1 mb-0">
											<div class="mr-auto pr-3 mb-1">
												<h4 class="text-black fs-20">Sepetim</h4>
												<p class="fs-13 mb-0 text-black"><?php if(count($sepet->contents()) != 0) {echo "Lütfen sepeti kontrol etmeyi unutmayın, iyi alışverişler!";}else{echo"Sepetiniz boş.";} ?></p>
											</div>
                                            <?php
                                    if(count($sepet->contents()) != 0 ){ ?>

                                    
                                          <a href="<?php echo base_url("shopmanager/sepetclear") ?>" class="btn rounded btn-danger mb-3">Sepeti Temizle</a><?php } ?>  
										</div>
									</div>
                                    <?php
                                    if(count($sepet->contents()) != 0 ){ ?>

                                        
                                       
                                    
                                    
                                  
									<div class="card-body loadmore-content dz-scroll">

                    
                                        <?php foreach($sepet->contents() as $item) { ?> 
                                        <div class="media border-bottom mb-3 pb-3 d-lg-flex d-block menu-list">
											<a href="ürün_linki">
                                                <img class="rounded mr-3 mb-md-0 mb-3" src="<?php echo base_url($item["resim"]) ?>" width="120" height="120">
                                            </a>
											<div class="media-body col-lg-8 pl-0">
												<h6 class="fs-16 font-w600 mb-1">
                                                    <a href="ürün_linki" target="_blank" class="text-black"><?php echo $item["name"] ?></a>
                                                </h6>
												<div class="d-flex mt-0 mb-0">
                                                    <div class="fs-13 cblack sepet_urunbilgi">Ürün Markası: <span class="text-orange"><?php echo $item["marka"] ?></span></div>&nbsp;
                                                    <div class="fs-13 cblack sepet_urunbilgi">Renk: <span class="text-primary"><?php echo $item["options"]["Renk"] ?></span></div>&nbsp;
                                                    <div class="fs-13 cblack sepet_urunbilgi">Adet: <span class="text-success"><?php echo $item["qty"] ?></span></div>
                                                </div>
                                                <p class="fs-14 mt-0 mb-0 urun-kisa-aciklama"><?php  echo $item["aciklama"] ?></p>
                                                <p class="mt-0 mb-0 urun-fiyat">€<?php echo $item["subtotal"] ?> <span class="badge badge-sm light badge-primary" style="position:relative;top:-4px">+ KDV</span></p>
                                                
                                                <div class="d-flex flex-wrap align-items-center">
													<ul class="d-flex flex-wrap mb-sm-0 mb-2">
														<li class="mb-2 mr-4 text-nowrap"><i class="las la-truck text-success scale5 mr-2"></i><span class="fs-14 text-success text-nowrap font-w500"> Kargo Bedava</span></li>
														<li class="text-nowrap mb-2"><i class="fa fa-star-o mr-2 scale5 text-warning" aria-hidden="true"></i><span class="text-nowrap fs-14 text-black font-w500"><?php echo $item["yorum"] ?> değerlendirme</span></li>
                                                    </ul>
												</div>
											</div>
                                            <a href="<?php echo base_url("shopmanager/sepetsil/".$item["rowid"]) ?>" class="btn btn-danger light btn-md ml-auto"><i class="fa fa-times scale5"></i></a>
										</div>
                                        
                                        <?php } ?>

                                    
									</div>
                                    <?php } ?>
								</div>
							</div>
						</div>
					</div>

                    <?php
                                    if(count($sepet->contents()) == 0 ){

                                        
                                       
                                    
                                     
                                    } else { ?> 
					<div class="col-xl-3 col-xxl-4">
						<div class="row">
							<div class="col-xl-12 col-md-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<div class="mr-auto">
											<h4 class="fs-15 w-100 mb-0">ÖDENECEK TUTAR</h4>
											<h4 class="text-black fs-20">€ <?php echo (($sepet->total() / 100) * 21) +  $sepet->total()  ?></h4>
										</div>
									</div>
                                    <div class="card-body pt-0 pb-0">
                                        <div class="sepet_uyari mb-3">Sepetteki ürünleri sipariş ettikten 24 saat içerisinde ürünü iptal edebilirsiniz!</div>
                                    </div>
                                    <div class="card-body pt-0 pb-3">
										<ul class="m-md-auto mt-2 pr-4">
											<li class="mb-2 text-nowrap"><i class="las la-truck text-primary scale5 mr-3"></i><span class="fs-14 text-black text-nowrap font-w500">Kargo: Ücretsiz</span></li>
											<li class="mb-2 text-nowrap"><i class="las la-money-bill-wave-alt text-success scale5 mr-3"></i><span class="fs-14 text-black  font-w500">Toplam: € <?php echo $sepet->total() ?></span></li>
                                            <li class="mb-2 text-nowrap"><i class="las la-plus-circle text-info scale5 mr-3"></i><span class="fs-14 text-black  font-w500">KDV'li Toplam: €<?php echo (($sepet->total() / 100) * 21) +  $sepet->total()  ?></span></li>
											<li class="mb-2 text-nowrap"><i class="las la-archive text-warning scale5 mr-3"></i><span class="fs-14 text-black  font-w500">Toplam adet: <?php echo $sepet->total_items() ?></span></li>
                                        </ul>
									</div>
                                    <div class="card-footer text-center border-0 pt-0 pb-4">
                                        <?php
                                            if($sepet->total() > $user[0]["para_limit"]){
                                                echo '<button type="button" class="btn btn-warning light" data-toggle="modal" data-target="#yetersizLimit">Sepeti Onayla</button>';
                                            }else{
                                                echo'<a href="'.base_url("shopmanager/buy").'" type="button" class="btn btn-warning light">Sepeti Onayla</a>
                                                ';
                                            }
                                        ?>
                                        
									</div>
								</div>
							</div>
						</div>
					</div>
                    <?php  } ?>

				</div>
            </div>
        </div>
       <div class="modal fade" id="siparisVerildi">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body pb-0">
                        <p class="text-success siparis-yes">Sipariş Başarıyla verildi!</p>
                    </div>
                    <div class="card-footer text-center border-0 pt-0 pb-4">
                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="yetersizLimit">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body pb-0">
                        <p class="text-danger siparis-yes">Yetersiz Hesap Limiti!</p>
                    </div>
                    <div class="card-footer text-center border-0 pt-0 pb-4">
                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
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
    <script src="<?php echo base_url("assets/shop/vendor/global/global.min.js")?>"></script>
	<script src="<?php echo base_url("assets/shop/vendor/bootstrap-select/dist/js/bootstrap-select.min.js")?>"></script>
    <script src="<?php echo base_url("assets/shop/js/custom.min.js")?>"></script>
	<script src="<?php echo base_url("assets/shop/js/deznav-init.js")?>"></script>
    <script src="<?php echo base_url("assets/shop/vendor/highlightjs/highlight.pack.min.js")?>"></script>
	<script src="<?php echo base_url("assets/shop/vendor/star-rating/jquery.star-rating-svg.js")?>"></script>
	

</body>

</html>