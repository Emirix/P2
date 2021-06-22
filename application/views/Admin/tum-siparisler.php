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
    <link rel="icon" type="image/png" sizes="16x16" href="<?php  echo base_url("assets/admin/images/panel.ico")?>">
	<link href="<?php  echo base_url("assets/admin/vendor/sweetalert2/dist/sweetalert2.min.css") ?> " rel="stylesheet">
	<link rel="stylesheet" href="<?php  echo base_url("assets/admin/vendor/chartist/css/chartist.min.css") ?> ">
    <link href="<?php  echo base_url("assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css") ?> " rel="stylesheet">
	<link href="<?php  echo base_url("assets/admin/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css") ?> " rel="stylesheet">
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
							Tüm Siparişler
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
						<li class="breadcrumb-item"><a href="javascript:void(0)">Sipariş Yönetimi</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Tüm Siparişler</a></li>
					</ol>
                </div>
                <div class="row">
					<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tüm Siparişler</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md" id="pag">
                                        <thead>
                                            <tr class="cblack">
                                                <th class="width80">ID</th>
                                                <th>Ürün</th>
                                                <th>Mağaza Adı</th>
                                                <th>Oluşturma</th>
                                                <th>Durum</th>
                                                <th>Teslimat Tarihi</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="cblack2">
                                           
                                        <?php foreach($orders as $key=>$order){
											 if($order["durum"]=="tamam" || $order["durum"]=="iptal"){ 
                                             ?>
                                         <tr>
                                                 <td><b>#<?php echo $order["id"] ?></b></td>
                                                 <td><?php echo $urunler[$key][0]["ad"]// echo $urunler[0][$key]["ad"] ?></td>
                                                 <td><?php echo $magazalar[$key][0]["magaza_adi"] ?></td>
                                                 <td><?php echo $order["tarih"] ?></td>
                                                 <td>
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
                                                     ?>
                                                     
                                                 
                                                 </td>
                                                 <td><?php
                                                 if($order["teslimat"] == "1999-09-09 00:00:00"){
                                                     echo "İptal";
                                                 }else{
                                                     echo $order["teslimat"];
                                                 }
                                                 ?></td>
                                                 <td>
                                                     <div class="dropdown">
                                                         <button type="button" class="btn btn-dark light sharp" data-toggle="dropdown">
                                                             <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                                         </button>
                                                         <div class="dropdown-menu">
                                                             <a class="dropdown-item text-success" href="<?php echo base_url("admin/orderdetail/".$order["id"]."/".$order["aldigi_urun"])?>">Ürün Detayları</a>
                                                           
                                                         
                                                            
                                                             
                                                         </div>
                                                     </div>
                                                 </td>
                                             </tr>
                                         <?php }} ?>
 

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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
			</div>
    	</div>
	<div class="footer">
		<div class="copyright text-center">
			<p><strong>Periwonen Yönetim Paneli</strong> © 2021 All Rights Reserved</p>
		</div>
	</div>
    <script src="<?php echo base_url("assets/admin/vendor/global/global.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/vendor/chart.js/Chart.bundle.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/vendor/bootstrap-datetimepicker/js/moment.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js") ?> "></script>
    <script src="<?php echo base_url("assets/admin/js/custom.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/js/deznav-init.js") ?> "></script>
	<script>
		$(function () {
			$('#datetimepicker1').datetimepicker({
				inline: true,
			});
		});
	</script>
	    <script src="<?php echo base_url("assets/admin/vendor/sweetalert2/dist/sweetalert2.min.js") ?> "></script>
    <script src="<?php echo base_url("assets/admin/js/plugins-init/sweetalert.init.js") ?> "></script>
	<script src="<?php echo base_url("assets/shop/vendor/pagin.js") ?> "></script>

	<script>

       $(function(){
		paginator({
  			table: document.getElementById("pag"),
  			box: document.getElementById("index_native"),
		});


	   })

	</script>
</body>
</html>



