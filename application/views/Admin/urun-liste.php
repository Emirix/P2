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

    border: 1px solid #eee;
    color: #0B2A97!important;
   
    padding:  .8rem!important;
    font-size: 14px!important;
}

#index_native button.active{
	
    height: 30px !important;
    width: 30px !important;
    display: flex !important;
    align-items: center;
    justify-content: center!important;
    margin-left: -1px !important;
    line-height: 1.25 !important;
    text-align: center !important;
    z-index: 2 !important;
    padding: 0.55rem 1rem !important;
    font-size: 1rem !important;
    border: 1px solid #f0f1f5 !important;
    transition: all 0.5s !important;
    color: #fff !important;
    background: #0B2A97 !important;
    border-color: #0B2A97 !important;
    height: 30px;
    width: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 10px 20px 0px rgba(11, 42, 151, 0.2) !important;
}
#index_native button:hover{
	color: white !important;
	background: #0B2A97 !important;

}
#index_native button{
    border-top: 1px solid #eee !important;
    border-bottom: 1px solid #eee !important;

	height: 30px;
    width: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #7e7e7e!important;
	border: none ;
    box-sizing: border-box!important;
    outline: none!important;
    padding: 0!important;
    transition: .3s !important;
    list-style: none!important;
	color: #0B2A97 !important;
	background-color: transparent !important;
}
</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>panel</title>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url("assets/admin/images/panel.ico")?>">
    <!-- Custom Stylesheet -->
    <link href="<?php echo base_url("assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/admin/css/style.css") ?>" rel="stylesheet">
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
							Ürün Listesi
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
						<li class="breadcrumb-item"><a href="javascript:void(0)">Ürün Yönetimi</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Eklenen Ürünler</a></li>
					</ol>
                </div>

                <div class="row">
					<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ürün Listesi</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md" id="pag">
                                        <thead>
                                            <tr class="cblack">
                                                <th>Ürün</th>
                                                <th>Marka</th>
                                                <th>Ürün ID</th>
                                                <th>Stok</th>
                                                <th>Eklenme Tarihi</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="cblack2">

                                        <?php  foreach($urunler as $urun) { ?> 
                                            <tr>
                                                <td><?php echo $urun["ad"] ?></td>
                                                <td><?php echo $urun["marka"] ?></td>
                                                <td><?php echo $urun["urun_kodu"] ?></td>
                                                <td>
                                                <?php 
                                                     if($urun["stoknp"] != "true"){
                                                        echo '<span class="badge light badge-danger"><i class="fa fa-circle text-danger mr-1"></i>Sınırlı Stok</span>';
                                                    }else{
                                                        echo '<span class="badge light badge-success"><i class="fa fa-circle text-success mr-1"></i>Stok Var</span>';    
                                                    }
                                                ?>
                                                </td>
                                                <td><?php echo $urun["tarih"] ?></td>
                                                <td>
													<div class="d-flex floatr">
														<a href="<?php echo base_url("admin/urunduzenle?urunId=".$urun["id"]) ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="<?php echo base_url("admin/urunsil?urunId=".$urun["id"]) ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <?php }?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-12">
                                    <nav>
                                        <ul id="index_native" class="pagination float-right">
                                        <li class="page-item page-indicator">
                                                    <a class="page-link" href="javascript:void()">
                                                    <i class="la la-angle-left"></i></a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="javascript:void()">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void()">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void()">3</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void()">4</a></li>
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
    <script src="<?php echo base_url("assets/admin/vendor/pagin.js") ?> "></script>

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