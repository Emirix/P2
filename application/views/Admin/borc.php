<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>panel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url("assets/admin/images/panel.ico") ?>">
	<link href="<?php echo base_url("assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css") ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url("assets/admin/vendor/select2/css/select2.min.css") ?>">
    <link href="<?php echo base_url("assets/admin/css/style.css") ?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
        .input-kapali {
            cursor: no-drop;
            background: #e9ecef !important;
            border: 1px solid #00000014 !important;
            color: #aaacafcf;
            font-weight: 500;
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
							Borç Kayıtları
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
							<li><a href="<?php echo base_url("admin/addproduct") ?>">Ürün Ekle</a></li>
							<li><a href="<?php echo base_url("admin/productlist") ?>">Eklenen Ürünler</a></li>
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
                <div class="row">
					<div class="col-xl-9 col-xxl-8">
						<div class="row">	
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header d-block pb-0 border-0">
										<div class="d-sm-flex flex-wrap align-items-center d-block mb-md-1 mb-0">
											<div class="mr-auto pr-3 mb-1">
												<h4 class="text-black fs-20">Borç Kayıtları</h4>
												<p class="fs-13 mb-0 text-black">Lütfen borcunu silmek istediğiniz Mağazayı seçiniz.</p>
											</div>
										</div>
									</div>
									<div class="card-body pt-2 pb-2">
                                        <div class="mb-3">
                                            <p class="mt-1 mb-2 fs-14">Mağaza seçin</p>
                                            <select class="js-example-disabled " id="magazaListesi">
                                            <option value="099">Lütfen seçim yapınız.</option>

                                            <?php foreach($magazalar as $magaza){ ?>
                                                <option value="<?php echo $magaza["id"]?>"><?php echo $magaza["magaza_adi"] ?></option>
                                            <?php } ?>
                                            </select>
                                            
                                         
                                        </div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4">
						<div class="row">
							<div class="col-xl-12 col-md-6">
								<div class="card">
									<div class="card-header border-0">
										<div class="mr-auto">
											<h4 class="fs-15 w-100 mb-0">Sistemdeki Toplam Borç</h4>
											<h4 class="text-black fs-20" style="float: left;padding-right: 5px;">€</h4>
                                            <h4 id="ub" class="text-black fs-20"> <?php echo number_format($toplamBorc,0,",",".") ?></h4>
										</div>
                                        <div class="plus-icon text-primary rounded"><i class="las la-file-invoice-dollar scale-2"></i></div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
                <div class="row">
					<div class="col-xl-9 col-xxl-8">
						<div class="row">	
							<div class="col-xl-12">
								<div class="card" >
									<div class="card-body" id="gozukme">
                                        <div class="row">
                                            <div class="col-md-6 col-xl-6 col-xxl-6">
                                                <label>Mağazanın toplam borcu</label>
                                                <div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
                                                    <input type="text" class="input-kapali form-control" id="mtborc" disabled> 
                                                    <span class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-money"></i></span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-6 col-xxl-6 mb-3">
                                                <label>Borç kapat</label>
                                                <div class="input-group">
                                                    <input class="form-control" id="kapatilacak" type="number" placeholder="Tutar">
                                                    <div class="input-group-append">
                                                        <button id="kapat-button" type="button" id="check-minutes" class="btn waves-effect waves-light btn-ft btn-success">Tamam</button>
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
    	</div>

        <div class="footer">
            <div class="copyright text-center">
				<p><strong>Periwonen Yönetim Paneli</strong> © 2021 All Rights Reserved</p>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url("assets/admin/vendor/global/global.min.js")?>"></script>
    <script src="<?php echo base_url("assets/admin/js/custom.min.js")?>"></script>
	<script src="<?php echo base_url("assets/admin/js/deznav-init.js")?>"></script>

    <script src="<?php echo base_url("assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js")?>"></script>
    <script src="<?php echo base_url("assets/admin/vendor/select2/js/select2.full.min.js")?>"></script>
    <script src="<?php echo base_url("assets/admin/js/plugins-init/select2-init.js")?>"></script>
    <script>
    $(function(){

        var magazaInfo;
        var magazaId;
        var toplamBorc;
        $("#gozukme").hide();

        $("#magazaListesi").change(function(){
            magazaId = $(this).val();
            if(magazaId == "099"){
                $("#gozukme").slideUp(200);
                return
            }


            $.get("<?php echo base_url("admin/getmagaza/") ?>" + magazaId,function(data){
                $("#gozukme").slideDown(200);
                magazaInfo = JSON.parse(data);
                $("#mtborc").val(magazaInfo.magaza[0].borc.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));
            })
        })

        $("#kapat-button").click(function(){
            if($("#kapatilacak").val().replace(/\s/g,"") == "" || $("#kapatilacak").val() == 0 ){
                alert("Lütfen kapatılacak borcu giriniz")
                return
            }

            if(magazaInfo.magaza[0].borc == 0  || parseInt($("#kapatilacak").val().split('.').join("")) > parseInt($("#mtborc").val().split('.').join("")) ){
                alert("Mağazanın borcu zaten 0 veya borcundan fazla miktar girdiniz.");
               
            }else{
            $.ajax({
                type:"post",
                url:"<?php echo base_url("admin/borckapat/") ?>",
                data:{
                    sil:$("#kapatilacak").val(),
                    id:magazaId
                },
                success:function(data){
                    var borcData = JSON.parse(data)
                    $("#ub").text(borcData.toplamBorc.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."))
                    console.log(borcData)
                    $("#kapatilacak").val("")
                    $("#mtborc").val(borcData.magazaBorc[0].borc.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."))
                }
            })
        }
        })

           
             

        
    })
       
    </script>
</body>
</html>