<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>panel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url("assets/staff/images/panel.ico")?>">
    <link href="<?php echo base_url("assets/staff/vendor/dropzone/dist/dropzone.css")?>" rel="stylesheet">
	<link href="<?php echo base_url("assets/staff/vendor/bootstrap-select/dist/css/bootstrap-select.min.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/staff/css/style.css")?>" rel="stylesheet">
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
			<a href="<?php echo base_url() ?>" class="w-100 text-center brand-logo">logo</a>

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
							Bileti Görüntüle
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
							<i class="flaticon-381-price-tag"></i>
							<span class="nav-text">Sipariş Takip</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="<?php echo base_url() ?>">İşlemdeki Siparişler</a></li>
							<li><a href="<?php echo base_url("staff/allorders") ?>">Tüm Siparişler</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Destek</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url("staff/alltickets") ?>">Tüm Talepler</a></li>
                            <li><a href="<?php echo base_url("staff/viewticket?ticketId=".$_GET["ticketId"]) ?> ">Bileti Görüntüle, ID : <?php echo $_GET["ticketId"] ?></a></li>
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
                                                echo '<span class="badge badge-xs light badge-warning">Müşteri Yanıtı</span>
';
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
                                                        <a href="<?php echo base_url("staff/kapat?id=".$ticketx[0]["id"]) ?>" class="col-12 badge badge-sm badge-danger cursor-pointer">
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

                                                        <?php foreach($cevaplar as  $cevap) {?> 
                                                            <div class="ticket-reply mb-3 <?php if($cevap["yetki"]=="Admin"){echo "imadmin";} ?>">
                                                                <div class="ticket-user-message">
                                                                    <div class="user">
                                                                        <div class="ticketuserico">
                                                                            <i class="flaticon-381-user-7"></i>
                                                                        </div>
                                                                        <p class="name"><?php echo $cevap["ad_soyad"] ?></p>
                                                                        <p class="rank"><?php  if($cevap["yetki"] == "Admin"){echo "Staff";}else{echo "Shop Manager";} ?></p>
                                                                    </div>
                                                                    <div class="date">
                                                                    <?php echo $cevap["tarih"] ?>    
                                                                    </div>
                                                                </div>
                                                                <div class="message">
                                                                <?php echo nl2br($cevap["mesaj"]) ?>
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
                <form enctype="multipart/form-data" action="<?php echo base_url("staff/cevap") ?>" method="post" >    <div class="modal-body pt-2 pb-3 pl-3 pr-3">
                    <input type="hidden" name="toid" value="<?php echo $_GET["ticketId"] ?>">
                    <input type="hidden" name="valo" value="<?php echo $user[0]["ad_soyad"]?>">		
                    <input type="hidden" name="user_id" value="<?php echo $ticketx[0]["kim"]?>">		
                                                                                
                <div class="p-0 col-12">
							<p class="m-1 font-15">Ad Soyad</p>
							<input name="val-adsoyad" value="<?php echo $user[0]["ad_soyad"] ?>" type="text" class="bradius-025 max-yukseklik form-control input-default input-kapali" placeholder="Talep Oluşturan Kişinin Ad ve Soyadı" disabled="disabled">
						</div>		
                        <div class="p-0 col-12">
							<p class="m-1 cblack font-15">Mesaj</p>
                            <textarea name="val-mesaj" class="form-control bradius-025" rows="4" id="comment"></textarea>
						</div>
                        <div class="p-0 col-12">
							<div class="compose-content">
								<p class="m-1 cblack font-15"><i class="fa fa-paperclip"></i> Dosya yükle</p>
								<div class="dropzone font-15 yunus-dropzone">
									<div class="fallback">
										<input name="files[]" type="file" multiple class="bradius-025"/>
									</div>
								</div>
								
							</div>
		    			</div>
                    </div>
                    <div class="modal-footer border-0 pl-3 pr-3">
                    <a class="btn btn-danger light btn-sl-sm modal-buton-yunus" data-dismiss="modal"><span class="mr-2"><i class="fa fa-times" aria-hidden="true" style="display: flex;
    justify-content: center;
    align-items: center;"></i></span>İptal</a>
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
    <script src="<?php echo base_url("assets/staff/vendor/global/global.min.js")?>"></script>
	<script src="<?php echo base_url("assets/staff/vendor/bootstrap-select/dist/js/bootstrap-select.min.js")?>"></script>
    <script src="<?php echo base_url("assets/staff/js/custom.min.js")?>"></script>
	<script src="<?php echo base_url("assets/staff/js/deznav-init.js")?>"></script>
    <script src="<?php echo base_url("assets/staff/vendor/dropzone/dist/dropzone.js")?>"></script>

</body>
</html>