    <?php


    class Shopmanager extends MyController {


        var $bildirimler;
        var $user;

        public function __construct()
        {
            parent::__construct();
            $this->load->library('cart');

            if($this->session->userdata('rank') == "admin"  || $this->session->userdata('rank') == "sm" && $this->session->userdata('rank'))
            {
                
            }else{
                echo "Erişim izni yok";
                die();
            }

        $this->bildirimler = $this->db->where("to_id",$this->session->userdata("sm_id"));
        $this->bildirimler = $this->db->order_by('id', 'DESC');
        $this->bildirimler = $this->db->get("sm_bildirim")->result_array();

        $this->user = $this->db->where("id", $this->session->userdata("sm_id"));
        $this->user = $this->db->get("sm_hesap")->result_array();
        }

        function basket(){
            $this->load->view("shopmanager/sepetim",[
                "bildirimler"=>$this->bildirimler,
                "user"=>$this->user,
                "sepet"=>$this->cart
            ]);
        }

        function ticket_ekle(){
            
        

            $data = array();
            $last = 0;
            // Count total files
            $countfiles = count($_FILES['files']['name']);
    
            // Looping all files
            for($i=0;$i<$countfiles;$i++){
    
            if(!empty($_FILES['files']['name'][$i])){
    
                // Define new $_FILES array - $_FILES['file']
                $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                $_FILES['file']['size'] = $_FILES['files']['size'][$i];
    
            
                $config['upload_path'] = './assets/ticket/'; 
                $config['allowed_types'] = '*';
                $config['max_size'] = '5000'; // max_size in kb
                $config['file_name'] = rand(0,6000).$_FILES['files']['name'][$i];
    
                //Load upload library
                $this->upload->initialize($config);

    
                // File upload
                if($this->upload->do_upload('file')){
                // Get data about the file
                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];
    
                // Initialize array
                $data['filenames'][] = $filename;

                $this->db->insert("ticket",[
                    "baslik" => $_POST["val-baslik"],
                    "hizmet" =>$_POST["val-hizmet"],
                    "oncelik" =>$_POST["val-oncelik"],
                    "aciklama" =>$_POST["val-aciklama"],
                    "kim" =>    $_POST["kim-id"],
                    "ad_soyad" =>$_POST["valo"],
                    "dosyalar"=>implode(",",$data["filenames"])
                ]);

                
        

            $last = $this->db->insert_id();

            $this->db->insert("ticket_yanit",[
                "mesaj" => $_POST["val-aciklama"],
                "yetki" =>"Shop Manager",
            
                "to_id"=>  $this->db->insert_id(),           
                "dosyalar"=>implode(",",$data["filenames"]),
                "ad_soyad" => $_POST["valo"]
            ]);

                }
            }else{
                $this->db->insert("ticket",[
                    "baslik" => $_POST["val-baslik"],
                    "hizmet" =>$_POST["val-hizmet"],
                    "oncelik" =>$_POST["val-oncelik"],
                    "aciklama" =>$_POST["val-aciklama"],
                    "kim" =>    $_POST["kim-id"],
                    "ad_soyad" =>$_POST["valo"],
                    "dosyalar"=>""
                ]);

                
            $last = $this->db->insert_id();

            $this->db->insert("ticket_yanit",[
                "mesaj" => $_POST["val-aciklama"],
                "yetki" =>"Shop Manager",
            
                "to_id"=>  $this->db->insert_id(),           
                "dosyalar"=>"",
                "ad_soyad" => $_POST["valo"]
            ]);
            }

            }

            


            $u = $this->db->set('guncelleme', date('Y-m-d H:i:s'));
            $u = $this->db->where('id', $_POST["kim-id"]);
            $u = $this->db->update('ticket');





            $this->db->insert("staff_bildirim",[
                "type"=>"talep_olustu",
                "magaza_adi"=>$_POST["magaza_adi"],
                "hangi_talep"=>$last
            ]);

            $oku = $this->db->set("okundu",0);
            $oku =  $this->db->update("staff_hesap");

            

            header("Location: " . base_url("shopmanager/ticket?ticketId=".$last));
        }

        public function index()
        {

        // $beklemede = $this->db->where("alan",$this->session->userdata("sm_id"));
        // $beklemede = $this->db->get("siparisler")->result_array();
            
            $beklemede = $this->db->query("SELECT * FROM siparisler WHERE alan = ".$this->session->userdata('sm_id')." AND durum = 'beklemede'" )->result_array();
            $hazirlanan = $this->db->query("SELECT * FROM siparisler WHERE alan = ".$this->session->userdata('sm_id')." AND durum = 'hazirlaniyor'" )->result_array();
            $tamam = $this->db->query("SELECT * FROM siparisler WHERE alan = ".$this->session->userdata('sm_id')." AND durum = 'tamam'" )->result_array();
            $iptal = $this->db->query("SELECT * FROM siparisler WHERE alan = ".$this->session->userdata('sm_id')." AND durum = 'iptal'" )->result_array();

            $this->load->view('ShopManager/index',[
                "bildirimler"=>$this->bildirimler,
                "user"=>$this->user,
                "sepet"=>$this->cart,
                "beklemede"=>$beklemede,
                "hazirlanan"=>$hazirlanan,
                "tamam"=>$tamam,
                "iptal"=>$iptal,
            ]);
        }

        public function newticket(){


            $orders = $this->db->where("alan",$this->session->userdata("sm_id"));
            $orders = $this->db->order_by("id","DESC");

            $orders = $this->db->get("siparisler")->result_array();
            $aldiklari = [];

            foreach($orders as $id){
                $i = $this->db->where("id",$id["aldigi_urun"]);
                $i = $this->db->get("urunler")->result_array();
                array_push($aldiklari,$i);
            }

        
        

            

        
            $this->load->view('ShopManager/talep-olustur',[
                "user"=>$this->user,
                "bildirimler"=>$this->bildirimler,"sepet"=>$this->cart,
                "aldiklari"=>$aldiklari,
                "siparisler"=>$orders
    
            ]);

        }
        public function mytickets(){
            $talepler = $this->db->where("kim", $this->session->userdata("sm_id"));
            $talepler = $this->db->order_by("guncelleme","DESC");
            $talepler = $this->db->get("ticket")->result_array();
            $this->load->view('ShopManager/destek-taleplerim',[
                "talepler"=>$talepler,
                "bildirimler"=>$this->bildirimler,"user"=>$this->user,
                "sepet"=>$this->cart
            ]);
        }

        public function orders(){
            $orders = $this->db->where("alan",$this->session->userdata("sm_id"));
            $orders = $this->db->order_by("id","DESC");

            $orders = $this->db->get("siparisler")->result_array();
            $aldiklari = [];
            $magazalar = [];

           

            foreach($orders as $id){
                $i = $this->db->where("id",$id["aldigi_urun"]);
                $i = $this->db->get("urunler")->result_array();
                array_push($aldiklari,$i);
            }

           

            foreach($orders as $x){
                $i = $this->db->where("id",$x["alan"]); //
                $i = $this->db->get("sm_hesap")->result_array();
                array_push($magazalar,$i);
            }

          
        

            $this->load->view('ShopManager/siparislerim',[
                "bildirimler"=>$this->bildirimler,
                "user"=>$this->user,
                "orders"=>$orders,
                "urunler"=>$aldiklari,
                "magazalar"=>$magazalar,
                "sepet"=>$this->cart
                
            ]);
        }

        public function bill($id,$urunId){
            $product = $this->db->where("id",$urunId);
            $product = $this->db->get("urunler")->result_array();

            $order = $this->db->where("id",$id);
            $order = $this->db->get("siparisler")->result_array();

            $alan = $this->db->where("id",$order[0]["alan"]);
            $alan = $this->db->get("sm_hesap")->result_array();

        $borc = $this->db->where("fatura",$id);
        $borc = $this->db->get("borclar")->result_array();

    
            $this->load->view('ShopManager/siparis-fatura',[
                "bildirimler"=>$this->bildirimler,
                "user"=>$this->user,
                "urun"=>$product,
                "order"=>$order,
                "sepet"=>$this->cart,
                "borclar"=>$borc,
                "alan"=>$alan
            ]);
        }

        
        public function ticket(){

            if(!isset($_GET["ticketId"])){
                echo "Hata";
                die();
            }

            $cevaplar = $this->db->where("to_id",$_GET["ticketId"]);
            $cevaplar = $this->db->order_by('id', 'DESC');
            $cevaplar = $this->db->get("ticket_yanit")->result_array();

            $ticketInfo = $this->db->where("id",$_GET["ticketId"]);
            $ticketInfo = $this->db->get("ticket")->result_array();


            $user = $this->db->where("id",$this->session->userdata("sm_id"));
            $user = $this->db->get("sm_hesap")->result_array();


            $this->load->view('ShopManager/viewticket',[
                "user"=>$this->user,
                "cevaplar"=>$cevaplar,
                "ticketx"=>$ticketInfo,
                "bildirimler"=>$this->bildirimler,
                "sepet"=>$this->cart
            ]);
        }

        public function orderdetail($id,$urunId){
            $product = $this->db->where("id",$urunId);
            $product = $this->db->get("urunler")->result_array();

            $order = $this->db->where("id",$id);
            $order = $this->db->get("siparisler")->result_array();

 
            $this->load->view('ShopManager/siparis-detay',[
                "bildirimler"=>$this->bildirimler,
                "user"=>$this->user,
                "urun"=>$product,
                "order"=>$order,
                "id"=>$id,
                "urunId"=>$urunId,
                "sepet"=>$this->cart
            ]);
        }

        public function productdetail($id){
   

            $urun = $this->db->where("id",$id);
            $urun = $this->db->get("urunler")->result_array();

            $yorumlar = $this->db->where("to_id",$id);
            $yorumlar = $this->db->get("yorumlar")->result_array();

            $polyetherMatras = $this->db->where("type","Polyether Matras");
            $polyetherMatras = $this->db->get("matras")->result_array();

            $pocketPolyMatras = $this->db->where("type","Pocket Poly Matras");
            $pocketPolyMatras = $this->db->get("matras")->result_array();

            $pocketHrMatras = $this->db->where("type","Pocket HR Matras");
            $pocketHrMatras = $this->db->get("matras")->result_array();

            $hrMatras = $this->db->where("type","HR Matras");
            $hrMatras = $this->db->get("matras")->result_array();

            $pocketHr25 = $this->db->where("type","Pocket HR 2x5");
            $pocketHr25 = $this->db->get("matras")->result_array();

            $polyetherTopper = $this->db->where("type","Polyether Topper");
            $polyetherTopper = $this->db->get("topper")->result_array();

            $nasaTopper  = $this->db->where("type","Nasa Topper");
            $nasaTopper  = $this->db->get("topper")->result_array();

            $hrTopper  = $this->db->where("type","HR Topper");
            $hrTopper  = $this->db->get("topper")->result_array();

      

           

            $yildiz = $this->db->where("to_id",$id);
            $yildiz = $this->db->get("yorumlar")->result_array();

            $yildiz3 = [];
            $yildiz2 = [];
            $yildiz1 = [];
            $yildiz4 = [];
            $yildiz5 = [];
            $yildizyok = false;
            foreach($yildiz as $key=>$y){
                if($y["yildiz"]=="3"){
                    array_push($yildiz3,$y["yildiz"]);
                }

                if($y["yildiz"]=="2"){
                    array_push($yildiz2,$y["yildiz"]);
                }

                if($y["yildiz"]=="1"){
                    array_push($yildiz1,$y["yildiz"]);
                }
                if($y["yildiz"]=="4"){
                    array_push($yildiz4,$y["yildiz"]);
                }
                if($y["yildiz"]=="5"){
                    array_push($yildiz5,$y["yildiz"]);
                }
            }

            if((count($yildiz1) + count($yildiz2) + count($yildiz3) + count($yildiz4) + count($yildiz5)) == 0){
                $yildizyok = true;
            }

           
        
            
            $this->load->view('ShopManager/urun-detay',[
                "bildirimler"=>$this->bildirimler,
                "user"=>$this->user,
                "urun"=>$urun,
                "id"=>$id,
                "yorumlar"=>$yorumlar,
                "sepet"=>$this->cart,
                "polyetherMatras"=>$polyetherMatras,
                "pocketPolyMatras"=>$pocketPolyMatras,
                "pocketHrMatras"=>$pocketHrMatras,
                "hrMatras"=>$hrMatras,
                "pocketHr25"=>$pocketHr25,
                "polyetherTopper"=>$polyetherTopper,
                "nasaTopper"=>$nasaTopper,
                "hrTopper"=>$hrTopper,
                "yildiz3"=>$yildiz3 ,
                "yildiz2"=>$yildiz2 ,
                "yildiz1"=>$yildiz1, 
                "yildiz4"=>$yildiz4 ,
                "yildiz5"=>$yildiz5 ,
                "yildizvarmi"=>$yildizyok
            ]);
        }



        public function topper($id){
   

            $urun = $this->db->where("id",$id);
            $urun = $this->db->get("urunler")->result_array();

            $yorumlar = $this->db->where("to_id",$id);
            $yorumlar = $this->db->get("yorumlar")->result_array();

          


            $polyetherTopper = $this->db->where("type","Polyether Topper");
            $polyetherTopper = $this->db->get("topper")->result_array();

            $nasaTopper  = $this->db->where("type","Nasa Topper");
            $nasaTopper  = $this->db->get("topper")->result_array();

            $hrTopper  = $this->db->where("type","HR Topper");
            $hrTopper  = $this->db->get("topper")->result_array();

      

           

            $yildiz = $this->db->where("to_id",$id);
            $yildiz = $this->db->get("yorumlar")->result_array();

            $yildiz3 = [];
            $yildiz2 = [];
            $yildiz1 = [];
            $yildiz4 = [];
            $yildiz5 = [];
            $yildizyok = false;
            foreach($yildiz as $key=>$y){
                if($y["yildiz"]=="3"){
                    array_push($yildiz3,$y["yildiz"]);
                }

                if($y["yildiz"]=="2"){
                    array_push($yildiz2,$y["yildiz"]);
                }

                if($y["yildiz"]=="1"){
                    array_push($yildiz1,$y["yildiz"]);
                }
                if($y["yildiz"]=="4"){
                    array_push($yildiz4,$y["yildiz"]);
                }
                if($y["yildiz"]=="5"){
                    array_push($yildiz5,$y["yildiz"]);
                }
            }

            if((count($yildiz1) + count($yildiz2) + count($yildiz3) + count($yildiz4) + count($yildiz5)) == 0){
                $yildizyok = true;
            }

           
        
            
            $this->load->view('ShopManager/topper-detay',[
                "bildirimler"=>$this->bildirimler,
                "user"=>$this->user,
                "urun"=>$urun,
                "id"=>$id,
                "yorumlar"=>$yorumlar,
                "sepet"=>$this->cart,
         
                "polyetherTopper"=>$polyetherTopper,
                "nasaTopper"=>$nasaTopper,
                "hrTopper"=>$hrTopper,
                "yildiz3"=>$yildiz3 ,
                "yildiz2"=>$yildiz2 ,
                "yildiz1"=>$yildiz1, 
                "yildiz4"=>$yildiz4 ,
                "yildiz5"=>$yildiz5 ,
                "yildizvarmi"=>$yildizyok
            ]);
        }

        public function productlist(){

            $listelencekUrunler = null;

            if(!isset($_GET["filtre"])){
                header("Location: ".base_url("shopmanager/productlist/?filtre=all"));
            }

            if($_GET["filtre"] == "all"){
                
                $listelencekUrunler = $this->db->get("urunler")->result_array();
            }

            if($_GET["filtre"] == "matras"){
                $listelencekUrunler = $this->db->where("kategori","urun-matras");
                $listelencekUrunler = $this->db->get("urunler")->result_array();
            }

            if($_GET["filtre"] == "topper"){
                $listelencekUrunler = $this->db->where("kategori","urun-topper");
                $listelencekUrunler = $this->db->get("urunler")->result_array();
            }

           
            $yildiz = $this->db->get("yorumlar")->result_array();

            $yildiz3 = [];
            $yildiz2 = [];
            $yildiz1 = [];
            $yildiz4 = [];
            $yildiz5 = [];
            $yildizyok = false;
            foreach($yildiz as $key=>$y){
                

                if($y["yildiz"]=="3"){
                    array_push($yildiz3,$y["yildiz"]);
                }

                if($y["yildiz"]=="2"){
                    array_push($yildiz2,$y["yildiz"]);
                }

                if($y["yildiz"]=="1"){
                    array_push($yildiz1,$y["yildiz"]);
                }
                if($y["yildiz"]=="4"){
                    array_push($yildiz4,$y["yildiz"]);
                }
                if($y["yildiz"]=="5"){
                    array_push($yildiz5,$y["yildiz"]);
                }
            }

            if((count($yildiz1) + count($yildiz2) + count($yildiz3) + count($yildiz4) + count($yildiz5)) == 0){
                $yildizyok = true;
            }

            $this->load->view('ShopManager/urun-liste',[
                "bildirimler"=>$this->bildirimler,
                "user"=>$this->user,
                "urunler"=>$listelencekUrunler,
                "yorumlar"=>$this->db->get("yorumlar")->result_array(),
                "sepet"=>$this->cart,
                "yildiz3"=>$yildiz3 ,
                "yildiz2"=>$yildiz2 ,
                "yildiz1"=>$yildiz1, 
                "yildiz4"=>$yildiz4 ,
                "yildiz5"=>$yildiz5 ,
                "yildizvarmi"=>$yildizyok
            ]);
        }

        /************/

        function updateaccount(){
            $kdv = "";
            if(isset($_POST["kdv"])){
                $kdv = "var";
            }else{
                $kdv = "yok";
            }

            $sifrebos = false;
            if(empty($_POST["val-password"])){
                $sifrebos = true;
            }

            if(isset($_FILES["userfile"])){
                $config['upload_path'] = "./assets/pp/";
                $config['allowed_types'] = '*';
                $config['max_size'] = 5000;
                $config['max_width'] = 3000;
                $config['max_height']  = 3000;
                $config['file_name'] = rand(0,15000)."_PROFILE_FOTOSU_".rand(0,15000)."_";
                $resimData = [];

                $this->upload->initialize($config);

                if (!$this->upload->do_upload('userfile')) {
                    $error = array('error' => $this->upload->display_errors());
        
                    $resimData = ["upload_data"=>["file_name"=>"default.jpg"]];

        
                } else {
                    $data = array('upload_data' => $this->upload->data());
        
                    $resimData = $data;
                }
                

                $this->db->set([
                    "ad_soyad"=>$_POST["val-adsoyad"],
                    "magaza_adi"=>$_POST["val-magaza"],
                    "telefon1"=>$_POST["val-phone"],
                    "telefon2"=>$_POST["val-phone2"],
                    "website"=>$_POST["val-website"],
                    "kvk"=>$_POST["val-kvk"],
                    "para_limit"=>$_POST["val-currency"],
                    "adres"=>$_POST["val-magaza-adres"],
                    "eposta"=>$_POST["val-email"],
                    "kdv"=>$kdv,
                    "foto"=>$resimData["upload_data"]["file_name"]
                ]);
                if(!$sifrebos){
                    $this->db->set("sifre",md5($_POST["val-password"]));
                }
                $this->db->where('id', $_POST["id"]);
                $this->db->update('sm_hesap');

            }
            else{
                $this->db->set([
                    "ad_soyad"=>$_POST["val-adsoyad"],
                    "magaza_adi"=>$_POST["val-magaza"],
                    "telefon1"=>$_POST["val-phone"],
                    "telefon2"=>$_POST["val-phone2"],
                    "website"=>$_POST["val-website"],
                    "kvk"=>$_POST["val-kvk"],
                    "para_limit"=>$_POST["val-currency"],
                    "adres"=>$_POST["val-magaza-adres"],
                    "eposta"=>$_POST["val-email"],
                    "kdv"=>$_POST["kdv"],
                ]);
                if(!$sifrebos){
                    $this->db->set("sifre",md5($_POST["val-password"]));
                }

                $this->db->where('id', $_POST["id"]);
                $this->db->update('sm_hesap');
            }
            





        

            header("Location: " . base_url("admin/createaccount"));
    
        }

        function addaccount(){
            $kdv = "";
            if(isset($_POST["kdv"])){
                $kdv = "var";
            }else{
                $kdv = "yok";
            }

       



            $epostaKontrol = $this->db->where("eposta",$_POST["val-email"]);
            $epostaKontrol = $this->db->get("sm_hesap")->result_array();
            
            if( !empty($epostaKontrol) ){
                echo "Bu eposta zaten kullanımda";
                die();
            }

            if(strlen($_POST["val-password"]) < 10 || empty($_POST["val-password"])){
                echo "Şifre 10 karakterden küçük veya boş olamaz";
                die();
            }
    
            if(strlen($_POST["val-adsoyad"]) < 3 || empty($_POST["val-adsoyad"])){
                echo "Ad soyad 3 karakterden küçük veya boş olamaz";
                die();
            }
    
            if(empty($_POST["val-phone"])){
                echo "Telefon boş olamaz.";
                die();
            }
            
            $config['upload_path'] = "./assets/pp/";
            $config['allowed_types'] = '*';
            $config['max_size'] = 5000;
            $config['max_width'] = 3000;
            $config['max_height']  = 3000;
            $config['file_name'] = rand(0,1500)."_SHOPMANAGER_FOTOSU_".rand(0,1500)."_";
            $resimData = [];
            $this->upload->initialize($config);




        

            if (!$this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());
                $resimData = ["upload_data"=>["file_name"=>"default.jpg"]];


            } else {
                $data = array('upload_data' => $this->upload->data());

                $resimData = $data;
            }

    


            $this->db->insert("sm_hesap",[
                "ad_soyad"=>$_POST["val-adsoyad"],
                "magaza_adi"=>$_POST["val-magaza"],
                "telefon1"=>$_POST["val-phone"],
                "telefon2"=>$_POST["val-phone2"],
                "website"=>$_POST["val-website"],
                "kvk"=>$_POST["val-kvk"],
                "para_limit"=>$_POST["val-currency"],
                "foto"=>$resimData["upload_data"]["file_name"],
                "adres"=>$_POST["val-magaza-adres"],
                "eposta"=>$_POST["val-email"],
                "kdv"=>$kdv,
                "sifre" => md5($_POST["val-password"]),
            ]);

            header("Location: " . base_url("admin/createaccount"));

        }



        function cevap(){
            
            $data = array();
            
            $dosyalar = "";
        

            if(isset($_FILES["files"]["name"])){
                $number_of_files = sizeof($_FILES['files']["tmp_name"]);
                $files = $_FILES["files"];
                $config["upload_path"] = "./assets/ticket/";
                $config["allowed_types"] = "*";

                for($i = 0;$i < $number_of_files;$i++){
                    $_FILES["files"]["name"] = $files["name"][$i];
                    $_FILES["files"]["type"] = $files["type"][$i];
                    $_FILES["files"]["tmp_name"] = $files["tmp_name"][$i];
                    $_FILES["files"]["error"] = $files["error"][$i];
                    $_FILES["files"]["size"] = $files["size"][$i];

                    $this->upload->initialize($config);
                    if($this->upload->do_upload("files",$config)){
                        $data = $this->upload->data();
                        $dosyalar = $dosyalar.$data["file_name"]."|";
                    }
                }
            }

        
            
        
    
            
            
                $this->db->insert("ticket_yanit",[
                    "mesaj" => $_POST["val-mesaj"],
                    "yetki" =>"Shop Manager",   
                    "to_id"=>$_POST["toid"],
                    "dosyalar"=>substr($dosyalar,0,-1),
                    "ad_soyad" => $_POST["valo"],
                    ]);
                
                

        
        

                $u = $this->db->set('guncelleme', date('Y-m-d H:i:s'));
                $u = $this->db->where('id', $_POST["toid"]);
                $u = $this->db->update('ticket');

                $this->db->set("durum","MYanit");
                $this->db->where("id",$_POST["toid"]);
                $this->db->update("ticket");

                
            $this->db->insert("staff_bildirim",[
                "type"=>"talep_yanit",
                "talep_id"=>$_POST["toid"]
            ]);

            $oku = $this->db->set("okundu",0);
            $oku =  $this->db->update("staff_hesap");


            
            header("Location: " . base_url("shopmanager/ticket?ticketId=".$_POST["toid"]));
        
            
        


            }


        function oku(){
            $this->db->set("okundu",1);
            $this->db->where("id",$this->session->userdata("sm_id"));
            $this->db->update("sm_hesap");
        }

        function kapat(){
            $this->db->set("durum","Kapalı");
            $this->db->where("id",$_GET["id"]);
            $this->db->update("ticket");
            
            $u = $this->db->set('guncelleme', date('Y-m-d H:i:s'));
            $u = $this->db->where('id', $_GET["id"]);
            $u = $this->db->update('ticket');
            header("Location: ".base_url("/shopmanager/mytickets"));

        }

        function yorumekle($x){

            $aldiklari = explode("yawhe",$this->user[0]["aldiklari"]);
            $aldimi ="";
            if(in_array($_POST["urun_id"],$aldiklari)){
                $aldimi ="aldi";
            }else{
                $aldimi ="almadi";
            }

            

            
            $this->db->insert("yorumlar",[

                "to_id"=>$_POST["urun_id"],
                "yildiz"=>$_POST["star"],
                "ad_soyad"=>$_POST["ad_soyad"],
                "yorum"=>$_POST["yorum"],
                "durum"=>$aldimi,
                "fotograf"=>$_POST["foto"]

            ]);
            if($x == 1){
                header("Location: ".base_url("/shopmanager/topper/".$_POST["back"]));
            }else {
                header("Location: ".base_url("/shopmanager/productdetail/".$_POST["back"]));

            }

        }

        function sepetsil($id){
            $this->cart->remove($id);
            header("Location: ".base_url("shopmanager/basket"));

        }

        function sepetekle(){
        
            
            $data = array(
                'id'      => $_POST["id"],
                'qty'     => $_POST["adet"],
                'price'   => $_POST["fiyat"], 
                'name'    => $_POST["ad"],
                "resim"   => $_POST["resim"],
                "aciklama" => $_POST["aciklama"],
                "yorum"   => $_POST["yorum"],
                
                "marka"   => $_POST["marka"],
                "topper"=>$_POST["topper"],
                "kumasli_mi"=>$_POST["kumaslimi"],
                "kumastitle"=>$_POST["kumastitle"],
                "vods"=>$_POST["vods"],



                'options' => array(
                    "Renk"=>$_POST["renk"],
                    "Matras"=>$_POST["matras"],
                    
                )
        );
        
            $this->cart->insert($data);
            echo json_encode($this->cart->contents());
        }

        function sepetclear(){
            $this->cart->destroy();
            header("Location: ".base_url("shopmanager/basket"));
        }


        function buy(){
         

            $kdv = false;
            
            $toplam = null;

            if($this->user[0]["kdv"] == "var"){
                //$fiyat = $this->cart->total() + (($this->cart->total() / 100) * 21);
                $kdv = true;
                $toplam = $this->cart->total() + (($this->cart->total() / 100) * 21);
            }else{
              //  $fiyat = $this->cart->total() ;
                $kdv = false;
                $toplam = $this->cart->total();
            }

            $limit = $this->user[0]["para_limit"];
            $iptalTarihi = date("Y-m-d h:i:sa", strtotime("+2 Days"));
              
            
            // LİMİTTEN DÜŞMÜUOR


            foreach($this->cart->contents() as $item){
                $fiyat = 0;
                if($kdv){
                    $fiyat = $item["subtotal"] + (( $item["subtotal"] / 100) * 21);
                }else{
                    $fiyat = $item["subtotal"];
                }

                $stok = $this->db->where("id",$item["id"]);
                $stok = $this->db->get("urunler")->result_array();
                //$item["qty"] > $stok[0]["stok"] || $stok[0]["stok"] == 0
                if($stok[0]["stoknp"]=="false" && $item["qty"] > $stok[0]["stok"] || $stok[0]["stok"] == 0){
                   
                    echo "Niet genoeg artikelen op voorraad<br>Stokta yeterli ürün yok";
                }else{
                if($toplam <= $limit){
                    $this->db->insert("siparisler",[
                        "alan"=>$this->session->userdata("sm_id"),
                        "aldigi_urun"=>$item["id"],
                        "durum"=>"onay_beklemede",
                        "renk"=>$item["options"]["Renk"],
                        "matras"=>$item["options"]["Matras"],
                        "adet"=>$item["qty"],
                        "fiyat"=>$item["subtotal"],
                        "orj_fiyat"=>$fiyat,
                        "iptal"=>$iptalTarihi,
                        "kdvsiz_fiyat"=>$this->cart->total(),
                        "marka"   => $item["marka"],
                        "topper"=>$item["topper"],
                        "kumasli_mi"=>$item["kumasli_mi"],
                        "kumastitle"=>$item["kumastitle"],
                        "vods"=>$item["vods"],
                        
        
                    ]);
                    $last = $this->db->insert_id();

                    $this->db->insert("staff_bildirim",[
                        "type"=>"siparis",
                        "magaza_adi"=>$this->user[0]["magaza_adi"],
                        "siparisId"=>$last,
                        "magazaId"=>$this->user[0]["id"],
                        "urun"=>$item["id"],                  
                    ]);

                    $oku = $this->db->set("okundu",0);
                    $oku =  $this->db->update("staff_hesap");
        

                    $this->db->insert("sm_bildirim",[
                        "to_id"=>$this->user[0]["id"],
                        "type"=>"siparis",
                     
                        "siparisId"=>$last,
                        "urun"=>$item["id"],                  
                    ]);

                    $this->db->set("stok","stok-".$item["qty"],FALSE);
                    $this->db->where("id",$item["id"]);
                    $this->db->update("urunler");

                    $aldiklari = $this->user[0]["aldiklari"];


                    $this->db->set("okundu",0);
                    $this->db->where("id",$this->session->userdata("sm_id"));
                    $this->db->update("sm_hesap");

                    
        
                    

                    $this->db->set("borc","borc+$toplam",FALSE);
                    $this->db->set("para_limit","para_limit-$toplam",FALSE);
                    $this->db->set("aldiklari",$aldiklari."yawhe".strval($item["id"]));

                    $this->db->where("id",$this->session->userdata("sm_id"));
                    $this->db->update("sm_hesap");
                    $this->cart->destroy();
                    header("Location: ".base_url("shopmanager/orders"));
                }{
                    echo "Hesabınızda yeterli limit yok<br/>Je hebt niet genoeg limieten op je account";
                }
            }

            }

            

        }

        function borcbilgi(){
            $borclar =  $this->db->where("alan",$this->user[0]["id"]);
            $borclar =  $this->db->get("borclar")->result_array();
            $this->load->view("shopmanager/borcbilgi",[
                "bildirimler"=>$this->bildirimler,
                "user"=>$this->user,
                "sepet"=>$this->cart,
                "borclar"=>$borclar
            ]);
        }

        function cancelorder($id){
            $this->db->set("durum","iptal");
            $this->db->set("teslimat","1999-09-09 00:00:00");

            $this->db->where("id",$id);
            $this->db->update("siparisler");

            header("Location: ".base_url("shopmanager/orders"));
        }



        function getmatras(){
            $matras =$this->db->where("type",$_GET["matras"]);
            $matras =$this->db->get("matras")->result_array();

            echo json_encode(
                $matras
            );
        }

       
    }
