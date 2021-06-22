<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>panel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/panel.ico">
    <link href="<?php echo base_url("assets/css-index/style.css") ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
    .hatalibilgi {
        width: 100%;
        background: #ffffff;
        border-radius: 10px;
        text-align: center;
        color: #f44336;
        font-weight: bold;
        font-size: 15px;
        box-shadow: 0px 12px 23px 0px rgb(160 44 250 / 4%);
    }
    </style>
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                
                                    <h4 class="text-center mb-4 ">Hesabınızda oturum açın</h4>
                                    <form  method="post" action="<?php echo base_url("login/log") ?>">

                                        <div class="form-group">
                                            <label class="mb-1 "><strong>E-Posta</strong></label>
                                            <input name="mail" type="email" class="form-control" placeholder="merhaba@hotmail.com">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 "><strong>Parola</strong></label>
                                            <input name="sifre" type="password" class="form-control" placeholder="*******">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox ml-1 ">
                                                    <input  type="checkbox" class="custom-control-input"
                                                        id="basic_checkbox_1" checked>
                                                    <label class="custom-control-label" for="basic_checkbox_1">
                                                        <p style="margin: 0;">Beni hatırla</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="text-center">
                                            <button type="submit" class="btn bg-primary text-white btn-block">Güvenli giriş yapın!</button>
                                        </div>
 
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <?php if(isset($_GET["error"])){echo "<p class='mt-2 p-2 hatalibilgi'>".$_GET["error"]."</p>"; } ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>