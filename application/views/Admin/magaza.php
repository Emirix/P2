<!DOCTYPE html>
<html lang="en">

<head>
<style>
#index_native select{
	display: none !important;
}

#index_native span{
	display: none !important;
}

#index_native div{
	display: flex !important;
}
#index_native button:first-child:hover,#index_native button:last-child:hover{
	background: #d8e0fc !important;
    border-color: #d8e0fc !important;
    color: #0B2A97!important;
}
#index_native button:first-child , #index_native button:last-child{

	background: #d8e0fc !important;
    border-color: #d8e0fc !important;
    color: #0B2A97!important;
   
    border-radius: 9in!important;
    padding:  .8rem!important;
    font-size: 14px!important;
}

#index_native button.active{
	
    display: block !important;
    margin-left: -1px !important;
    line-height: 1.25 !important;
    text-align: center !important;
    z-index: 2 !important;
    padding: 0.55rem 1rem !important;
    font-size: 1rem !important;
    border: 1px solid #f0f1f5 !important;
    transition: all 0.5s !important;
    border-radius: 9in !important;
    color: #fff !important;
    background: #0B2A97 !important;
    border-color: #0B2A97 !important;
    box-shadow: 0 10px 20px 0px rgba(11, 42, 151, 0.2) !important;
}
#index_native button:hover{
	color: white !important;
	background: #0B2A97 !important;

}
#index_native button{
	height: 50px;
    width: 50px;
    color: #7e7e7e!important;
	border: none ;
    box-sizing: border-box!important;
    outline: none!important;
    padding: 0!important;
	border-radius: 9in !important;
transition: .3s !important;
    list-style: none!important;
	margin-right: 1rem!important;
	color: #0B2A97 !important;
	background-color: transparent !important;
}
</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>panel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php  echo base_url("assets/shop/images/panel.ico")?>">
	<link href="<?php  echo base_url("assets/shop/vendor/bootstrap-select/dist/css/bootstrap-select.min.css") ?> " rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="icons/flaticon/_flaticon.scss">
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url("assets/shop/vendor/star-rating/star-rating-svg.css") ?> ">
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
			<a href="<?php echo base_url("admin")?>" class="w-100 text-center brand-logo">logo</a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
		<!-- Sepetim -->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
								Ürün Listesi
                            </div>
                        </div>
						<!-- Bildirim Kutusu -->
						<?php require('navbar.php'); ?>
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
						<div class="row">
							<div class="col-xl-12">
								<div class="card plan-list">
									<div class="card-header d-sm-flex flex-wrap d-block pb-0 border-0">
										<div class="mr-auto pr-3 mb-3">
											<h4 class="text-black fs-20">Ürünleri Filtrele</h4>
											<p class="fs-13 mb-0 text-black">Aradığınız ürünü bulamadıysanız filtreleme yapabilirsiniz.</p>
										</div>
										<div class="card-action card-tabs mt-3 mt-sm-0 mb-4">
											<ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                        <a class="nav-link <?php if(isset($_GET["filtre"]) && $_GET["filtre"] == "all") { echo "active"; }  ?>" data-toggle="tumUrunler" href="<?php echo base_url("admin/store/?filtre=all") ?>" role="tab">Tümü</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link <?php if(isset($_GET["filtre"]) && $_GET["filtre"] == "matras") { echo "active"; } ?>" data-toggle="matrasUrunler" href="<?php echo base_url("admin/store/?filtre=matras") ?>" role="tab">Matras</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link <?php if(isset($_GET["filtre"]) && $_GET["filtre"] == "topper") { echo "active"; } ?>" data-toggle="topperUrunler" href="<?php echo base_url("admin/store/?filtre=topper") ?>" role="tab">Topper</a>
                                                    </li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                
                <div class="row" id="pag">

                <?php foreach($urunler as $key=>$urun) { 
                    
                    $kapak = explode(",",$urun["fotograflar"])[0];
                    
                    ?> 
                    <div class="col-lg-12 col-xl-6 it">
                        <div class="card">
                            <div class="card-body">
                                <div class="row m-b-30">
                                    <div class="col-md-5 col-xxl-12">
                                        <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                            <a href="<?php 

if($urun["kategori"] == "urun-topper")
{
    echo base_url("admin/topper/".$urun["id"]);
}else{
    echo base_url("admin/productdetail/".$urun["id"]);
}
?>">
												<div class="new-arrivals-img-contnent">
                                                	<img class="img-fluid" src="<?php echo base_url($kapak) ?>" alt="">
                                            	</div>
											</a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-xxl-12">
                                        <div class="new-arrival-content position-relative">
                                            <h4><a href="<?php 

if($urun["kategori"] == "urun-topper")
{
    echo base_url("admin/topper/".$urun["id"]);
}else{
    echo base_url("admin/productdetail/".$urun["id"]);
}
?>"><?php echo $urun["ad"]; ?></a></h4>
                                            <div class="comment-review star-rating">
                                                <ul>
													<?php 
													for($i = 0; $i < $urun["yildiz"];$i++){
														echo '<li><i class="fa fa-star"></i></li>';
													}

													for($i = 0; $i < (5 - $urun["yildiz"] ) ;$i++){
														echo '                                                    
														<li><i class="fa fa-star-o"></i></li>
														';
													}
													?>
                                                    
                                                    
                                                </ul>
                                                <span class="review-text">
												
												<?php
												$x = 0;
												if($yorumlar[$key])
												for($i = 0; $i < count($yorumlar);$i++){
													if($yorumlar[$i]["to_id"] == $urun["id"]){
														$x += 1;
													}
												}

												echo "($x değerlendirme)";
												?>
												
												
												</span>
												<p class="price"><?php echo $urun["fiyat"]; ?>€</p>
                                            </div>
                                            <p>Stok durumu:
											<?php
											if($urun["stoknp"]=="true"){
												echo '<span class="item text-success"> Stokta var <i class="fa fa-check-circle text-success"></i></span>';
											}else{
												echo '<span class="item text-danger"> Sokta '.$urun["stok"].' ürün kaldı <i class="fa  fa-exclamation-circle text-danger"></i></span>';
											}
											?>
											</p>
                                            <?php

if($urun["bekleme"] == "true"){
    echo "<p>Bekleme süresi: <span class='item text-success'>".$urun["bekleme_suresi"]."</span></p>";
}

?>
                                            <p>Ürün kodu: <span class="item"><?php echo $urun["urun_kodu"] ?></span> </p>
                                            <p>Marka: <span class="item"><?php echo $urun["marka"] ?></span></p>
                                            <p class="text-content urunliste-aciklama"><?php echo $urun["aciklama"] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					
				
                <?php } ?>	
					
				<div class="col-xl-12 col-lg-12">
						<div class="card">
							<div class="card-body yunus-center">
								<nav>
                                    <ul id="index_native" class="pagination pagination-gutter pagination-primary no-bg mb-0">
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void()">
                                                <i class="la la-angle-left"></i></a>
                                        </li>
                                        <li class="page-item "><a class="page-link" href="javascript:void()">1</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void()">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void()">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void()">4</a></li>
										<input class="urunliste-kendinyaz" placeholder="...">
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void()">
                                                <i class="la la-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
							</div>
						</div>
					</div>
					</div>
					<!-- review -->
			
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
	<script>
		$("li.star").click(function(){
			$("#star").val($(this).attr("data-value"))
		})
	</script>
    
<script src="<?php echo base_url("assets/admin/vendor/pagin.js") ?> "></script>
<script>

   $(function(){
    paginator({
        get_rows: function () {
        return document.getElementById("pag").getElementsByClassName("it");
    },
          box: document.getElementById("index_native"),
          rows_per_page:10
    });


   })

</script>

</body>

</html>