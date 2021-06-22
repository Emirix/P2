


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
    <title>Silme Onay</title>
    <style>
body {
    margin: 0;
    font-family: "Roboto", sans-serif;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
    background-color: #F9F9F9;
    width: 100%;
    height: 100%;
    color: #595959;
    user-select: none;
}

p {
    justify-content: center;
    margin: 0;
    padding: 5px;
    color: #545454;
    font-size: 1.125em;
    line-height: normal;
    z-index: 1;
    word-wrap: break-word;
}


.main {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    flex-direction: column;
}
.box {
    width: 510px;
    height: 320px;
    background: white;
    border-radius: 10px;
    filter: drop-shadow(2px 4px 6px #00000005);
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    flex-direction: column;
}

svg {
    width: 75px;
    color: #f8bb86;
    margin: 0px 15px 15px;
}

h5 {
    display: block;
    position: relative;
    max-width: 100%;
    margin: 0;
    padding: 0;
    font-size: 1.875em;
    font-weight: 600;
    text-align: center;
    text-transform: none;
    word-wrap: break-word;}button {border: 0;border-radius: .25em;color: #fff;font-size: 17px;font-weight: bold;background-color: rgb(221, 107, 85);width: 190px;height: 45px;cursor: pointer;}button:hover {background-color: rgb(203 97 77);}button:active {background-color: rgb(221, 107, 85);}.iptal {border: 0;border-radius: .25em;color: #fff;font-size: 17px;font-weight: bold;background-color: #aaaaaa;width: auto;cursor: pointer;float: right;text-align: center;padding: 10px 40px;margin-left: 10px;}.iptal:hover {background-color: #9e9b9b;}.iptal:active {background-color: #aaaaaa;}</style>
</head>
<body>
    <form action='
        <?php 
            if($_POST["rank"]=="reseller"){
                echo base_url("sil/onayreseller");
            }

            if($_POST["rank"]=="sm"){
                echo base_url("sil/onaysm");
            }

            if($_POST["rank"]=="staff"){
                echo base_url("sil/onaystaff");
            }
        ?>
    ' method='post'>
    <div class="main">
        <div class="box">
            <svg viewBox="0 0 512 512"><path d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-11.49 120h22.979c6.823 0 12.274 5.682 11.99 12.5l-7 168c-.268 6.428-5.556 11.5-11.99 11.5h-8.979c-6.433 0-11.722-5.073-11.99-11.5l-7-168c-.283-6.818 5.167-12.5 11.99-12.5zM256 340c-15.464 0-28 12.536-28 28s12.536 28 28 28 28-12.536 28-28-12.536-28-28-28z" fill="currentColor"></path></svg>
            <h5>Silmeyi Onaylıyor musun?</h5>
            <p><b>Silinecek Isim:</b> <?php echo $_POST["ad_soyad"] ?></p>
            <p style="padding-bottom: 15px;"><b>Silinecek Id:</b> <?php echo $_POST["id"] ?></p>
            <input type="hidden" name="id" value="<?php echo $_POST["id"] ?>">
            <div class="button-main">
                <button>Silmeyi Onayla</button>
                <a href="<?php echo base_url("admin/allaccount")?>" class="iptal">İptal</a>
            </div>

        </div>

    </div>

    
</body>

</html>