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
        <style>
        div.col-md-5.col-xxl-12 > div > a > div > img{
    height:300px;
    object-fit:cover;

        }</style>
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
                            <li><a href="<?php echo base_url("shopmanager") ?>">Anasayfa</a></li>                        </ul>
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
                                                        <a class="nav-link <?php if(isset($_GET["filtre"]) && $_GET["filtre"] == "all") { echo "active"; }  ?>" data-toggle="tumUrunler" href="<?php echo base_url("shopmanager/productlist/?filtre=all") ?>" role="tab">Tümü</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link <?php if(isset($_GET["filtre"]) && $_GET["filtre"] == "matras") { echo "active"; } ?>" data-toggle="matrasUrunler" href="<?php echo base_url("shopmanager/productlist/?filtre=matras") ?>" role="tab">Matras</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link <?php if(isset($_GET["filtre"]) && $_GET["filtre"] == "topper") { echo "active"; } ?>" data-toggle="topperUrunler" href="<?php echo base_url("shopmanager/productlist/?filtre=topper") ?>" role="tab">Topper</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> <!-- burası -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="pag">

                        <?php foreach($urunler as $key=>$urun) { 
                        
                        $kapak = explode(",",$urun["fotograflar"])[0];
                        
                        ?> 
                        <div class="col-lg-12 col-xl-6 it" >
                            <div class="card">
                                <div class="card-body">
                                    <div class="row m-b-30">
                                        <div class="col-md-5 col-xxl-12">
                                            <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                                <a href="<?php 

                                                    if($urun["kategori"] == "urun-topper")
                                                    {
                                                        echo base_url("shopmanager/topper/".$urun["id"]);
                                                    }else{
                                                        echo base_url("shopmanager/productdetail/".$urun["id"]);
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
    echo base_url("shopmanager/topper/".$urun["id"]);
}else{
    echo base_url("shopmanager/productdetail/".$urun["id"]);
}
?>"><?php echo $urun["ad"]; ?></a></h4>
                                                <div class="comment-review star-rating">
                                                    <ul>
                                                        
                                                    <?php 
                                                    $ort = 5;
                                                    if($yildizvarmi){
                                                            $ort = 5;
                                                    }else{
                                                        $ort =  round((count($yildiz5) * 5 + count($yildiz4) * 4 + count($yildiz3) * 3 + count($yildiz2) * 2 + count($yildiz1) * 1) / (count($yildiz5) +count($yildiz4) +count($yildiz3) +count($yildiz2) +count($yildiz1)),0);
                                                    }
                                                
                                                    for($i = 0; $i < $ort;$i++){
                                                        echo '<li><i class="fa fa-star"></i></li>';
                                                    }

                                                    for($i = 0; $i < (5 - $ort ) ;$i++){
                                                        echo '                                                    
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        ';
                                                    }
                                                    ?>
                                                        
                                                        
                                                    </ul>
                                                    <span class="review-text">
                                                    
                                                    <?php
                                                    $x = 0;
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
                        <!-- review -->
                    
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

        </div>
        <script src="<?php echo base_url("assets/shop/vendor/global/global.min.js") ?> "></script>
        <script src="<?php echo base_url("assets/shop/vendor/bootstrap-select/dist/js/bootstrap-select.min.js") ?> "></script>
        <script src="<?php echo base_url("assets/shop/js/custom.min.js") ?> "></script>
        <script src="<?php echo base_url("assets/shop/js/deznav-init.js") ?> "></script>
        <script src="<?php echo base_url("assets/shop/vendor/ highlightjs/highlight.pack.min.js") ?> "></script>
        <script src="<?php echo base_url("assets/shop/vendor/star-rating/jquery.star-rating-svg.js") ?> "></script>
       
        
        
        <script>
            $("li.star").click(function(){
                $("#star").val($(this).attr("data-value"))
            })
        </script>

    <script src="<?php echo base_url("assets/shop/vendor/pagin.js") ?> "></script>
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