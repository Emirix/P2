<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>panel</title>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php  echo base_url("assets/admin/images/panel.ico")?>">
    <link href="<?php  echo base_url("assets/admin/vendor/dropzone/dist/dropzone.css") ?> " rel="stylesheet">
	<link href="<?php  echo base_url("assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css") ?> " rel="stylesheet">
    <link href="<?php  echo base_url("assets/admin/css/style.css") ?> " rel="stylesheet">
    <link href="<?php  echo base_url("assets/admin/css/fotografsec.scss")?>" rel="stylesheet">
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
							Hesap (Staff)
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
							<span class="nav-text">Site Ad??</span>
						</a>
						<ul aria-expanded="false">
                        <li><a href="<?php echo base_url("admin") ?>">Anasayfa</a></li>
                        </ul>
					</li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-user"></i>
							<span class="nav-text">Hesap Y??netimi</span>
						</a>
                        <ul aria-expanded="false">
                        <li><a href="<?php echo base_url("admin/createaccount") ?>">Hesap Olu??tur</a></li>
							<li><a href="<?php echo base_url("admin/allaccount") ?>">T??m Hesaplar</a></li>
                         <li><a href="<?php echo base_url("admin/createstaff") ?>" style="color: green;">Staff Olu??tur/D??zenle</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-presentation"></i>
							<span class="nav-text">??r??n Y??netimi</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="<?php echo base_url("admin/addproduct")?>">??r??n Ekle</a></li>
														<li><a href="<?php echo base_url("admin/productlist") ?>">Eklenen ??r??nler</a></li><li><a href="<?php echo base_url("admin/store")?>">??r??n Liste</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-presentation"></i>
							<span class="nav-text">??r??n Y??netimi</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="<?php echo base_url("admin/addproduct")?>">??r??n Ekle</a></li>
							<li><a href="<?php echo base_url("admin/productlist")?>">Eklenen ??r??nler</a></li>
							<li><a href="<?php echo base_url("admin/store")?>">??r??n Liste</a></li>
                        </ul>
                    </li>
                    </li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-price-tag"></i>
							<span class="nav-text">Sipari?? Takip</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="<?php echo base_url("admin/ioproducts") ?>">????lemdeki Sipari??ler</a></li>
							<li><a href="<?php echo base_url("admin/tumsiparisler") ?>">T??m Sipari??ler</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
        <i class="flaticon-381-folder-19"></i>
        <span class="nav-text">Bor?? Kay??tlar??</span>
    </a>
    <ul aria-expanded="false">
        <li><a href="<?php echo base_url("admin/borc") ?>">Bor?? Sil</a></li>
    </ul>
</li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Destek</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url("admin/alltickets") ?>">T??m Talepler</a></li>
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
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Hesap Y??netimi</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Hesap Olu??tur/D??zenle (Staff)</a></li>
					</ol>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Kullan??c?? Bilgileri</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-valide" action="<?php if(isset($_GET["edit"])) { echo base_url("staff/updateaccount"); } else{echo base_url("staff/addaccount");} ?>" enctype="multipart/form-data" method="post">
                                    <input type="hidden" name="id" value="<?php if(isset($_GET["edit"])) { echo $_GET["id"]; } ?>" >
                                    <div class="basic-form">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Ad Soyad <span class="text-danger">*</span></label>
                                                <div><input value="<?php if(isset($_GET["edit"])) {  echo  $_GET["ad_soyad"]; } ?>" type="text" class="form-control" id="val-adsoyad" name="val-adsoyad" placeholder="Ad Soyad"></div>
                                            </div>
                                            <div class="form-group col-md-6 userpp">
                                                <label>Foto??raf se??</label>
                                                <input type="file" name="userfile" class="fotografsec form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label  for="val-phone">Telefon 1 <span class="text-danger">*</span></label>
                                                <div><input type="text" value="<?php if(isset($_GET["edit"])) {  echo $_GET["telefon1"]; } ?>" class="form-control" id="val-phone" name="val-phone" placeholder="000-000-0000"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Telefon 2</label>
                                                <input type="tel"value="<?php  if(isset($_GET["edit"])) { echo $_GET["telefon2"]; }  ?>" class="form-control" id="val-phone2" name="val-phone2" placeholder="0000000">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="basic-form">
                                        <div class="form-group">
                                            <label class="text-label" for="val-email">E-Posta <span class="text-danger">*</span></label>
                                            <div class="input-group ">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                </div>
                                                <input type="text" class="form-control" value="<?php if(isset($_GET["edit"])) { echo $_GET["eposta"];} ?>" id="val-email" name="val-email" placeholder="Ge??erli bir e-posta adresi yaz??n??z..">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="text-label">Password <span class="text-danger">*</span></label>
                                            <div class="input-group transparent-append">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                </div>
                                                <input type="password" value="<?php if(isset($_GET["edit"])) { echo $_GET["sifre"];} ?>" class="form-control" id="dz-password" name="val-password" placeholder="Korunakl?? bir ??ifre giriniz.">
                                                <div class="input-group-append show-pass ">
                                                    <span class="input-group-text "> 
                                                        <i class="fa fa-eye-slash"></i>
                                                        <i class="fa fa-eye"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn mr-2 btn-primary">Tamamla</button>
                                        <a href="<?php echo base_url("admin/createaccount") ?>" class="btn btn-light">??ptal</a>
                                    </div>
                                </form>
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
    <script src="<?php echo base_url("assets/admin/vendor/global/global.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js") ?> "></script>
    <script src="<?php echo base_url("assets/admin/js/custom.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/js/deznav-init.js") ?> "></script>
    <script src="<?php echo base_url("assets/admin/vendor/dropzone/dist/dropzone.js") ?> "></script>
    <!-- Jquery Validation -->
    <script src="<?php echo base_url("assets/admin/vendor/jquery-validation/jquery.validate.min.js") ?> "></script>
    <!-- Form validate init -->
    <script src="<?php echo base_url("assets/admin/js/plugins-init/jquery.validate-init.js") ?> "></script>

	<script>
	jQuery(document).ready(function(){
		
		jQuery('.show-pass').on('click',function(){
			jQuery(this).toggleClass('active');
			if(jQuery('#dz-password').attr('type') == 'password'){
				jQuery('#dz-password').attr('type','text');
			}else if(jQuery('#dz-password').attr('type') == 'text'){
				jQuery('#dz-password').attr('type','password');
			}
		});
		
		

	});
	</script>	

</body>
</html>