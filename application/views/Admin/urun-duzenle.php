<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>panel</title>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url("assets/admin/images/panel.ico")?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/admin/vendor/select2/css/select2.min.css")?>" >
	<link href="<?php echo base_url("assets/admin/vendor/dropzone/dist/dropzone.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/admin/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css")?>" rel="stylesheet">
	<link href="<?php echo base_url("assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/admin/css/style.css")?>" rel="stylesheet">
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
							Ürünü Düzenle
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
                    <li class="mm-active"><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-presentation"></i>
							<span class="nav-text">Ürün Yönetimi</span>
						</a>
                        <ul aria-expanded="false">
							<li class="mm-active"><a href="#" class="mm-active">Ürünü Düzenle</a></li>
							<li><a href="<?php echo base_url("admin/productlist") ?>">Eklenen Ürünler</a></li><li><a href="<?php echo base_url("admin/store")?>">Ürün Liste</a></li>

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
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Ürün Düzenle</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ürün Düzenle</h4>
                            </div>
                            <div class="card-body">
								<div id="smartwizard" class="form-wizard order-create">
									<ul class="nav nav-wizard">
										<li><a class="nav-link" href="#urun_GenelBilgi"> 
											<span>1</span> 
										</a></li>
										<li><a class="nav-link" href="#urun_StokDurumu">
											<span>2</span>
										</a></li>
										<li><a class="nav-link" href="#urun_Fotograflar">
											<span>3</span>
										</a></li>
									</ul>
									<div action="#" class=" tab-content urunekletab">
										<div id="urun_GenelBilgi" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-6 mb-2">
													<div class="form-group">
														<label class="text-label">Ürün Adı <span class="text-danger">*</span></label>
														<input value="<?php echo $urun[0]["ad"] ?>" id="val-urunad" type="text" class="form-control" placeholder="Ürün adını yazınız..">
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="form-group">
														<label class="text-label">Ürün Markası <span class="text-danger">*</span></label>
														<input value="<?php echo $urun[0]["marka"] ?>" id="val-urunmarka" type="text"  class="form-control" placeholder="Ürün markasını yazınız..">
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="form-group">
														<label class="text-label">Ürün Kodu <span class="text-danger">*</span></label>
														<input value="<?php echo $urun[0]["urun_kodu"] ?>" id="val-urunkod" type="number" class="form-control" placeholder="0000">
													</div>
												</div>
												
												<div class="col-lg-12 mb-3">
													<div class="form-group">
														<label class="text-label">Ürün Açıklaması <span class="text-danger">*</span></label>
														<textarea value="" id="val-aciklama" type="text" class="height-100 form-control"><?php echo $urun[0]["aciklama"] ?></textarea>
													</div>
												</div>
											</div>
										</div>
										<div id="urun_StokDurumu" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-12 mb-2">
													<div class="form-group">
														<label class="text-label">Stok Durumu <span class="text-danger">*</span></label>
														<input value="<?php echo $urun[0]["stok"] ?>" id="val-stok" type="number" class="form-control" placeholder="Stok sınırlıysa lütfen kalan stok sayısını buraya giriniz!" required>
													</div>
													<div class="custom-control custom-checkbox checkbox-primary check-lg mr-3">
														<input 
														<?php 
														if($urun[0]["stoknp"] == "true"){
															echo "checked";
														}
														?>
														 id="checkAll" type="checkbox" class="val-stoknp custom-control-input"  required="">
														<label  class="custom-control-label stokvar" for="checkAll">Stok sorunu yoksa lütfen işaretleyin</label>
													</div>
												</div>

												<div class="col-lg-12 mb-2 mt-3">
													<div class="form-group">
														<label class="text-label">Ürün Fiyatı <span class="text-danger">*</span></label>
														<div class="input-group mb-3">
															<div class="input-group-prepend">
																<span class="input-group-text">€</span>
															</div>
                                            				<input id="val-urunfiyat" value="<?php echo $urun[0]["fiyat"] ?>" type="number" class="form-control">
                                        				</div>
													</div>
												</div>

												<div class="col-lg-12 mb-2 mt-0">
													<hr class="mt-0">
													<div class="form-group">
														<label class="text-label">Ürün seçimi</label>
														<select class="js-example-disabled" id="urunsecimi">
															<option value="Normal">Normal</option>
															<option value="Matras">Matras</option>
															<option value="Topper">Topper</option>
														</select>
													</div>
												</div>

											</div>
										</div>
										<div id="urun_Fotograflar" class="tab-pane" role="tabpanel">
											<div class="compose-content">
												<h5 class="mb-3"><i class="fa fa-paperclip"></i> Ürün Fotoğrafları Yükle</h5>
												<p class="urunfoto-uyari">Eğer fotoyu güncellemek istemiyosanız boş bırakın.İlk seçilen fotoğraf ürünün kapak fotoğrafıdır. Lütfen ilk seçeceğiniz fotoğrafı kapak fotoğrafı olarak seçiniz.</p>
												<form enctype="multipart/form-data" method="post" action="#"  class="dropzone">
													<div class="fallback">
														<input  name="files[]" id="files" type="file" multiple />
													</div>
												</form>
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
    <script src="<?php echo base_url("assets/admin/vendor/jquery-steps/build/jquery.steps.min.js") ?> "></script>
    <script src="<?php echo base_url("assets/admin/vendor/jquery-validation/jquery.validate.min.js") ?> "></script>
    <script src="<?php echo base_url("assets/admin/js/plugins-init/jquery.validate-init.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/vendor/dropzone/dist/dropzone.js") ?> "></script>
	<script src="<?php echo base_url("assets/admin/vendor/select2/js/select2.full.min.js") ?> "></script>
    <script src="<?php echo base_url("assets/admin/js/plugins-init/select2-init.js") ?> "></script>
	<script>
	    Dropzone.autoDiscover = false;

		var x = 0;


		$(document).ready(function(){
			
			$('#smartwizard').smartWizard(); 
			$("#yeteramk").hide();
			

			$(".sw-btn-prev").click(function(){
				x--;

				if(x<0){
					x=0;
					//$(".sw-btn-next").addClass("disabled");

				}

				$(".sw-btn-next").text("İleri");
			})
			 	
			
			$(".sw-btn-next").click(function(){
				x++;
				if(x>3){
					x=0;
				}
					
					if(x>=2){
					$(".sw-btn-next").text("Tamam");
					$(".sw-btn-next").removeClass("disabled");
					}else{
					//$(".sw-btn-next").text("İleri");
					}
				
				
				if(x>=3){
					
				
					
					var form = new FormData();
					const urunBilgi = {
						ad: $("#val-urunad").val(),
						marka:$("#val-urunmarka").val(),
						kod:$("#val-urunkod").val(),
						etiket:"",
						aciklama:$("#val-aciklama").val(),
						stok:$("#val-stok").val(),
						stoknp:$(".val-stoknp").prop("checked"),
						fiyat:$("#val-urunfiyat").val(),
						topper:$("#topper").val(),
						matras:$("#matras").val(),
						surevarmi:$("#surevarmi").prop("checked"),
						sureler:$("#sureler").val(),
					}
					var totalfiles = document.getElementById('files').files.length;

					if(totalfiles == 0){
						alert("Resim seçilmedi");
						x=3;
						
					}else{

					for (var index = 0; index < totalfiles; index++) {
						  form.append("files[]", document.getElementById('files').files[index]);
					}	

					$("#yeteramk").show();
					form.append("val-urunad",urunBilgi.ad);
					form.append("val-marka",urunBilgi.marka);
					form.append("val-kod",urunBilgi.kod);
					form.append("val-etiket",urunBilgi.etiket);
					form.append("val-aciklama",urunBilgi.aciklama);
					form.append("val-stok",urunBilgi.stok);
					form.append("val-stoknp",urunBilgi.stoknp);
					form.append("val-fiyat",urunBilgi.fiyat);
					form.append("val-topper",urunBilgi.topper);
					form.append("val-matras",urunBilgi.matras);
					form.append("val-surevarmi",urunBilgi.surevarmi);
					form.append("val-sureler",urunBilgi.sureler);
					form.append("val-urunid","<?php echo $urun[0]["id"] ?>");
					//form.append("val-",urunBilgi.);

				
					
					$.ajax({
					url:"<?php echo base_url('admin/editproduct') ?>",
					type:"post",
					data:form,
					processData: false,  
					contentType: false,  
					success : function(data) {
						alert("Ürün başarıyla eklendi");
						window.location = "<?php echo base_url("admin/productlist") ?>"
						   console.log(data);
					}
						
					})
				
				}

			
				}
			
			})

			

			
		})
	</script>

</body>

</html>