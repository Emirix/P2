
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
    <link rel="icon" type="image/png" sizes="16x16" href="<?php  echo base_url("assets/shop/images/panel.ico") ?>">
	<link rel="stylesheet" href="<?php  echo base_url("assets/shop/vendor/select2/css/select2.min.css") ?>">
	<link href="<?php  echo base_url("assets/shop/vendor/bootstrap-select/dist/css/bootstrap-select.min.css") ?>" rel="stylesheet">
	<link href="<?php  echo base_url("assets/shop/vendor/dropzone/dist/dropzone.css") ?>" rel="stylesheet">
	<link href="<?php  echo base_url("assets/shop/css/style.css") ?>" rel="stylesheet">
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
								Destek Talebi Oluştur
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
					<li><a class="ai-icon" href="<?php echo base_url("shopmanager") ?>" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Anasayfa</span>
						</a>
					</li>
                    <li><a class="ai-icon" href="<?php echo base_url("shopmanager/productlist")  ?>" aria-expanded="false">
							<i class="flaticon-381-list"></i>
							<span class="nav-text">Ürün Listesi</span>
						</a>
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
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Destek</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Talep Oluştur</a></li>
					</ol>
                </div>

                <div class="row">
					<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Talep Oluştur</h4>
                            </div>
                            <div class="card-body">
							<form enctype="multipart/form-data" action="<?php echo base_url("shopmanager/ticket_ekle") ?>" method="post"	>
								<input type="hidden" name="kim-id" value="<?php echo $user[0]['id']?>">
								<input type="hidden" name="valo" value="<?php echo $user[0]["ad_soyad"] ?>">
								<input type="hidden" name="magaza_adi" value="<?php echo $user[0]["magaza_adi"] ?>">


								<div class="row">
									<div class="col-6">
										<p class="m-1">Ad Soyad</p>
										<input type="text"  value="<?php echo $user[0]["ad_soyad"] ?>" class="max-yukseklik form-control input-default input-kapali" placeholder="Talep Oluşturan Kişinin Ad ve Soyadı" disabled="disabled">
									</div>
									<div class="col-6">
										<p class="m-1">E-Posta Adresi</p>
										<input type="text" name="val-eposta" value="<?php echo $user[0]["eposta"] ?>" class="max-yukseklik form-control input-default input-kapali" placeholder="Talep Oluşturan Kişinin E-Posta Adresi" disabled="disabled">
									</div>
								</div>
								<div class="row mt-3">
									<div class="col-12">
										<p class="m-1 cblack">Konu Başlığı <span class="badge badge-xs light badge-danger" style="position: relative;top: -2px;">zorunlu</span></p>
										<input type="text" name="val-baslik" class="max-yukseklik form-control input-default" placeholder="Lütfen konu hakkında kısa bir başlık yazınız.">
									</div>
								</div>
								<div class="row mt-3">
									<div class="col-7">
									<?php
	
									?>
										<p class="m-1 cblack">İlişkili Hizmet <span class="badge badge-xs light badge-danger" style="position: relative;top: -2px;">zorunlu</span></p>
										<select id="single-select" name="val-hizmet" class="max-yukseklik">
											<?php foreach($siparisler as $key=>$siparis) {?> 
											<option value="<?php echo $aldiklari[$key][0]["ad"] ?>"><?php echo $aldiklari[$key][0]["ad"] ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-5">
										<p class="m-1 cblack">Öncelik</p>
										<select name="val-oncelik" class="disabling-options" class="max-yukseklik">
											<option value="Yüksek">Yüksek</option>
											<option value="Orta" selected>Orta</option>
											<option value="Düşük">Düşük</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-12 mt-3">
										<p class="m-1 cblack">Talep Açıklamasını yazınız</p>
                                        <textarea  name="val-aciklama" class="form-control" rows="4" id="comment"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-12 mt-3">
										<div class="compose-content">
											<p class="m-1 cblack"><i class="fa fa-paperclip"></i> Dosya yükle</p>
											
												<div class="fallback">
													<input name="files[]" type="file" multiple />
												</div>
											
											
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12 mt-2">
										<div class="text-left mt-4 mb-2">
											<button class="btn btn-primary btn-sl-sm mr-2" type="submit"><span class="mr-2"><i class="fa fa-paper-plane"></i></span>Gönder</button>
											
												<a class="btn btn-danger light btn-sl-sm" ><span class="mr-2"><i class="fa fa-times" aria-hidden="true"></i></span>İptal</a>
											
										</div>
									</div>
								</div>
								</form></div>
							
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
    <script src="<?php echo base_url("assets/shop/vendor/global/global.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/shop/js/custom.min.js") ?>"></script>
	<script src="<?php echo base_url("assets/shop/js/deznav-init.js") ?>"></script>
	

    <script src="<?php echo base_url("assets/shop/vendor/select2/js/select2.full.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/shop/js/plugins-init/select2-init.js") ?>"></script>
	<script src="<?php echo base_url("assets/shop/vendor/dropzone/dist/dropzone.js") ?>"></script>

</body>
</html>