<?php  ?>

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
    <link rel="icon" type="image/png" sizes="16x16" href="<?php  echo base_url("assets/shop/images/panel.ico")?>">
    <link href="<?php  echo base_url("assets/shop/vendor/dropzone/dist/dropzone.css") ?> " rel="stylesheet">
	<link href="<?php  echo base_url("assets/shop/vendor/bootstrap-select/dist/css/bootstrap-select.min.css") ?> " rel="stylesheet">
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
								Destek Taleplerim
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
                            <li><a href="<?php echo base_url("shopmanager/mytickets")  ?>">Taleplerim</a></li>
                            <li><a href="<?php echo base_url("shopmanager/newticket") ?>">Talep oluştur</a></li>
                            <li><a href="<?php echo base_url("shopmanager/ticket?ticketId=".$_GET["ticketId"]) ?> ">Bileti Görüntüle, ID : <?php echo $_GET["ticketId"] ?></a></li>
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
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Bileti Görüntüle</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="email-left-box generic-width px-0 mb-5">
                                    <div class="ticket-admin">
                                        <div class="list-group-item active"><i class="flaticon-381-file font-18 align-middle mr-1"></i>Bildirim Detayı </div>
                                        <div class="list-group-item">
                                            <div class="ticket-konu-adi"><?php echo $ticketx[0]["baslik"] ?></div>
                                            <?php 
                                            if($ticketx[0]["durum"] == "Açık"){
                                                echo '<span class="badge badge-xs light badge-primary">Açık</span>';
                                            }

                                            if($ticketx[0]["durum"] == "MYanit"){
                                                echo '<span class="badge badge-xs light badge-warning">Müşteri Yanıtı</span>';
                                            }

                                            if($ticketx[0]["durum"] == "Yanit"){
                                                echo '<span class="badge badge-xs light badge-success">Yanıtlandı</span>';
                                            }

                                            if($ticketx[0]["durum"] == "Kapalı"){
                                                echo '<span class="badge badge-xs light badge-dark cblack">Kapalı</span>';
                                            }
                                            ?>
                                           
                                           
                                            
                                        </div>
                                        <div class="list-group-item">
                                            <div class="ticket-category">Departman</div>
                                            <div class="ticket-description"><?php echo $ticketx[0]["hizmet"] ?></div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="ticket-category">Son Güncelleme</div>
                                            <div class="ticket-description"><?php echo $ticketx[0]["guncelleme"] ?></div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="ticket-category">Öncelik</div>
                                            <div class="ticket-description"><?php echo $ticketx[0]["oncelik"] ?></div>
                                        </div>
                                        <div class="list-group-item ticket-yonetimi">
                                            <div class="row">
                                                <div class="col-6 pt-0 pb-0 pr-2 pl-2">
                                                    <div class="p-0" data-toggle="modal" data-target="#exampleModalCenter">
                                                        <span class="col-12 badge badge-sm badge-success cursor-pointer">
                                                            <i class="flaticon-381-edit-1 ticket-icon-size align-middle cwhite"></i>
                                                            Yanıtla
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-6 pt-0 pb-0 pr-2 pl-2">
                                                    <div class="p-0">
                                                        <a href="<?php echo base_url("shopmanager/kapat?id=".$ticketx[0]["id"]) ?>" class="col-12 badge badge-sm badge-danger cursor-pointer">
                                                            <i class="flaticon-381-multiply-1 ticket-icon-size align-middle cwhite"></i>
                                                            Kapat
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="email-right-box clear-both ml-0 ml-sm-4 ml-sm-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="right-box-padding">
                                                <div class="toolbar mb-4" role="toolbar">
                                                <?php 
                                                    if($ticketx[0]["durum"] == "Kapalı"){
                                                    echo '<div class="col-12 talepkapali-bilgi">Bu destek talebi kapalı. Destek talebine tekrar cevap vererek açabilirsiniz</div>
                                                    ';
                                                }
                                                else{
                                                    echo ' <div class="col-12 talepacik-bilgi cursor-pointer" data-toggle="modal" data-target="#exampleModalCenter">
                                                    Bu destek talebi şuan açık. Konuşmaya devam etmek için lütfen buraya tıkla.
                                                </div>';
                                                }
                                                ?>
       
												</div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="read-content mb-4">

                                                            <?php foreach($cevaplar as $cevap) { ?> 
                                                            <div class="ticket-reply mb-3 <?php if($cevap["yetki"] == "Admin") { echo "imadmin"; }  ?>">
                                                                <div class="ticket-user-message">
                                                                    <div class="user">
                                                                        <div class="ticketuserico">
                                                                            <i class="flaticon-381-user-7"></i>
                                                                        </div>
                                                                        <p class="name"><?php echo htmlspecialchars($cevap["ad_soyad"]) ?></p>
                                                                        <p class="rank"><?php echo $cevap["yetki"] ?></p>
                                                                    </div>
                                                                    <div class="date">
                                                                    <?php echo $cevap["tarih"] ?>
                                                                    </div>
                                                                </div>
                                                                <div class="message">
                                                                <?php echo htmlspecialchars(nl2br($cevap["mesaj"])) ?>
                                                                </div>
                                                                <?php 
                                                                
                                                                if(!$cevap["dosyalar"]==""){ ?>
                                                                    <div class="ticket-attachment">
                                                                    <h6 class="m-0">
                                                                        <i class="fa fa-download mb-2"></i> 
                                                                        Eklentiler
                                                                        <span>

                                                                           
                                                                             

                                                                              
                                                                                <?php echo "(".count(explode("|",$cevap["dosyalar"])).")";
                                                                            ?>
                                                                                
                                                                            
                                                                          </span>
                                                                    </h6>
                                                                    <div class="row attachment">
                                                                    <?php 
                                                                            foreach(explode("|",$cevap["dosyalar"]) as $dosya){ ?>
                                                                        <div class="col-auto pl-1 pr-1">
                                                                            <a href="<?php echo base_url("assets/ticket/".$dosya) ?>" target="_blank" class="text-muted"><?php echo $dosya ?></a>
                                                                        </div>
                                                                          <?php  }
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                                <?php }?>
                                                                
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalCenter">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form enctype="multipart/form-data" action="<?php echo base_url("shopmanager/cevap") ?>" method="post">
                    <input type="hidden" name="toid" value="<?php echo $_GET["ticketId"] ?>">
                    <input type="hidden" name="valo" value="<?php echo $user[0]["ad_soyad"]?>">
                    <input type="hidden" name="magaza_adi" value="<?php echo $user[0]["magaza_adi"]?>">
                                                                                
                     <div class="modal-body pt-2 pb-3 pl-3 pr-3">
						<div class="p-0 col-12">
							<p class="m-1 font-15">Ad Soyad</p>
							<input name="val-x" value="<?php echo $user[0]["ad_soyad"]?>" type="text" class="bradius-025 max-yukseklik form-control input-default input-kapali"  disabled="disabled">
						</div>		
                        <div class="p-0 col-12">
							<p class="m-1 cblack font-15">Mesaj</p>
                            <textarea name="val-mesaj" class="form-control bradius-025" rows="4" id="comment"></textarea>
						</div>
                        <div class="p-0 col-12">
							<div class="compose-content">
								<p class="m-1 cblack font-15"><i class="fa fa-paperclip"></i> Dosya yükle</p>
								<div  class="dropzone font-15 yunus-dropzone">
									<div class="fallback">
										<input name="files[]" type="file" multiple class="bradius-025"/>
									</div>
								</div>
								
							</div>
                   	</div>
                    </div>
                
                    <div class="modal-footer border-0 pl-3 pr-3">
                    <a class="btn btn-danger light btn-sl-sm modal-buton-yunus"  data-dismiss="modal" style="display: flex;
    justify-content: center;
    align-items: center;"><span class="mr-2"><i class="fa fa-times" aria-hidden="true"></i></span>İptal</a>
                        <button class="btn btn-primary btn-sl-sm mr-2 modal-buton-yunus" ><span class="mr-2"><i class="fa fa-paper-plane"></i></span>Gönder</button>
                        </form>   </div> 
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
    <script src="<?php echo base_url("assets/shop/vendor/dropzone/dist/dropzone.js") ?> "></script>

</body>
</html>