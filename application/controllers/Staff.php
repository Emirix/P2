<?php



class Staff extends CI_Controller {
    var $bildirimler;
    var $user;

    public function __construct()
    {
        
        parent::__construct();
        if($this->session->userdata('rank') == "admin"  ||$this->session->userdata('rank') == "staff" && $this->session->userdata('rank'))
        {
           
        }else{
            echo "Erişim izni yok";
            die();
        }

        $this->bildirimler = $this->db->order_by('id', 'DESC');
        $this->bildirimler = $this->db->get("staff_bildirim")->result_array();

        
        $this->user = $this->db->where("id",$this->session->userdata("staff_id"));
        $this->user = $this->db->get("staff_hesap")->result_array();
    }

	public function index()
	{
        $orders = $this->db->get("siparisler")->result_array();

		$aldiklari = [];
        $magazalar = [];

        foreach($orders as $id){
            $i = $this->db->where("id",$id["aldigi_urun"]);
            $i = $this->db->get("urunler")->result_array();
            array_push($aldiklari,$i);
        }

        foreach($orders as $x){
            $i = $this->db->where("id",$id["alan"]);
            $i = $this->db->get("sm_hesap")->result_array();
            array_push($magazalar,$i);
        }

        


		$this->load->view('Staff/islemdeki-siparisler',[
            "bildirimler" => $this->bildirimler,
            "user" => $this->user,
            "orders"=>$orders,
			"urunler"=>$aldiklari,
            "magazalar"=>$magazalar
        ]);
	}

    function urundurum($id,$durum,$alan,$urun){
        if($durum==1){
            $this->db->set("durum","tamam");
            $this->db->set("teslimat",date("Y-m-d H:m:s"));
            $this->db->where("id",$id);
            $this->db->update("siparisler");

            
            $this->db->insert("sm_bildirim",[
                "to_id"=>$alan,
                "type"=>"tamam",
                "siparisId"=>$id,
                "urun"=>$urun,
            ]);

                $oku = $this->db->set("okundu",0);
                $oku = $this->db->where("id",$alan);
                $oku =  $this->db->update("sm_hesap");
    
            

            header("Location: ".base_url("staff/allorders"));
        }
        
        if($durum== 2){
            if(!isset($_GET)){
                echo "Hata lütfen doğru link kullanınız";
                die();
            }

            if($_GET["d"] == "kargo"){

                $this->db->insert("sm_bildirim",[
                    "to_id"=>$alan,
                    "type"=>"kargo",
                    "siparisId"=>$id,
                    "urun"=>$urun,
                ]);

            }

            if($_GET["d"] == "hazirlaniyor"){
                
            $this->db->insert("sm_bildirim",[
                "to_id"=>$alan,
                "type"=>"hazirlaniyor",
                "siparisId"=>$id,
                "urun"=>$urun,
            ]);

            }
            $this->db->set("durum",$_GET["d"]);
            //$this->db->set("teslimat",date("Y-m-d H:m:s"));
            $this->db->where("id",$id);
            $this->db->update("siparisler");


            
            $oku = $this->db->set("okundu",0);
            $oku = $this->db->where("id",$alan);
            $oku =  $this->db->update("sm_hesap");


            header("Location: ".base_url("staff/"));
        }
    }

    public function orderdetail($id,$urunId)
	{
        
		$product = $this->db->where("id",$urunId);
        $product = $this->db->get("urunler")->result_array();

        $order = $this->db->where("id",$id);
        $order = $this->db->get("siparisler")->result_array();
		$this->load->view('Staff/siparis-detay',[
            "bildirimler" => $this->bildirimler,
            "user" => $this->user,
            "urun"=>$product,
            "order"=>$order,
            "id"=>$id,
            "urunId"=>$urunId
        ]);
	}

    function siparisonayla($id){
        $this->db->set("durum","beklemede");
        $this->db->where("id",$id);
        $this->db->update("siparisler");
    
        header("Location: ".base_url("staff/"));
    }
    

    public function allorders()
	{
      
        
        $orders = $this->db->get("siparisler")->result_array();

       
		$urunler = $this->db->get("urunler")->result_array();

       
		$magazalar = $this->db->get("sm_hesap")->result_array();

        $alanlar = [];
        $alinanlar = [];

        foreach($orders as $o){
            
            $i = $this->db->where("id",$o["alan"]);
            $i = $this->db->get("sm_hesap")->result_array();
            array_push($alanlar,$i);

        }

        foreach($orders as $o){
            
            $i = $this->db->where("id",$o["aldigi_urun"]);
            $i = $this->db->get("urunler")->result_array();
            array_push($alinanlar,$i);

        }

       /*print_r($orders);
        print_r($urunler);
        print_r($magazalar);
        die();*/


		$this->load->view('Staff/tum-siparisler',[
            "bildirimler" => $this->bildirimler,
            "user" => $this->user,
            "orders"=>$orders,
			"urunler"=>$alinanlar,
            "magazalar"=>$alanlar
        ]);
	}

    public function alltickets()
	{       
        $tickets = $this->db->order_by("guncelleme","DESC");
        $tickets = $this->db->get("ticket")->result_array();

		$this->load->view('Staff/tum-talepler',[
            "tickets"=>$tickets,
            "bildirimler" => $this->bildirimler,
            "user" => $this->user,
        ]);
	}

    public function viewticket()
	{   
        if(!isset($_GET["ticketId"])){
            echo "hata";
            die();
        }
        
        $cevaplar = $this->db->where("to_id",$_GET["ticketId"]);
        $cevaplar = $this->db->order_by('id', 'DESC');
        $cevaplar = $this->db->get("ticket_yanit")->result_array();

        $ticketInfo = $this->db->where("id",$_GET["ticketId"]);
        $ticketInfo = $this->db->get("ticket")->result_array();


        /*** */


		$this->load->view('Staff/viewticket',[
            "cevaplar"=>$cevaplar,
            "ticketx"=>$ticketInfo,
            "user"=>$this->user,
            "bildirimler" => $this->bildirimler,
          
        ]);
	}


	function updateaccount(){
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
                "ad_soyad" => $_POST["val-adsoyad"],
                "telefon1" => $_POST["val-phone"],
                "telefon2" => $_POST["val-phone2"],
                "eposta" => $_POST["val-email"],
               
                "fotograf"=>$resimData["upload_data"]["file_name"],

            ]);
            if(!$sifrebos){
                $this->db->set("sifre",md5($_POST["val-password"]));
            }
            $this->db->where('id', $_POST["id"]);
            $this->db->update('staff_hesap');

        }
        else{
            $this->db->set([
                "ad_soyad" => $_POST["val-adsoyad"],
                "telefon1" => $_POST["val-phone"],
                "telefon2" => $_POST["val-phone2"],
                "eposta" => $_POST["val-email"],
              
                ]);
                if(!$sifrebos){
                    $this->db->set("sifre",md5($_POST["val-password"]));
                }
            $this->db->where('id', $_POST["id"]);
            $this->db->update('staff_hesap');
        }
        
        header("Location:" . base_url("admin/createaccount"));

	}
	
	function addaccount(){

        $epostaKontrol = $this->db->where("eposta",$_POST["val-email"]);
        $epostaKontrol = $this->db->get("staff_hesap")->result_array();
        
        if(!empty($epostaKontrol)){
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

    


        $this->db->insert("staff_hesap",[
            "ad_soyad"=>$_POST["val-adsoyad"],
            
            "telefon1"=>$_POST["val-phone"],
            "telefon2"=>$_POST["val-phone2"],
           
            "fotograf"=>$resimData["upload_data"]["file_name"],
            
            "eposta"=>$_POST["val-email"],
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
            "yetki" =>"Admin",
            "to_id"=>$_POST["toid"],
            "dosyalar"=>substr($dosyalar,0,-1),
            "ad_soyad" => $_POST["valo"]
        ]);




     
      

            $u = $this->db->set('guncelleme', date('Y-m-d H:i:s'));
            $u = $this->db->where('id', $_POST["toid"]);
            $u = $this->db->update('ticket');

           

            $this->db->insert("sm_bildirim",[
                "to_id"=>$_POST["user_id"],
                "type"=>"talep_yanit",
                "talep_id"=>$_POST["toid"]
            ]);


            $oku = $this->db->set("okundu",0);
            $oku = $this->db->where("id",$_POST["user_id"]);
            $oku =  $this->db->update("sm_hesap");


            $this->db->set("durum","Yanit");
            $this->db->where("id",$_POST["toid"]);
            $this->db->update("ticket");

  

          
            header("Location: " . base_url("staff/viewticket?ticketId=".$_POST["toid"]));
    
        
    }


    function oku(){
        $this->db->set("okundu",1);
        $this->db->where("id",$this->session->userdata("staff_id"));
        $this->db->update("staff_hesap");
    }

    
    function kapat(){
        $this->db->set("durum","Kapalı");
        $this->db->where("id",$_GET["id"]);
        $this->db->update("ticket");
        
             
        $u = $this->db->set('guncelleme', date('Y-m-d H:i:s'));
        $u = $this->db->where('id', $_GET["id"]);
        $u = $this->db->update('ticket');
        header("Location: ".base_url("/staff/alltickets"));

    }

    function cancelorder($id,$alan,$urun){
        $this->db->set("durum","iptal");
        $this->db->set("teslimat","1999-09-09 00:00:00");
        $this->db->where("id",$id);
        $this->db->update("siparisler");	


        $this->db->insert("sm_bildirim",[
            "to_id"=>$alan,
            "type"=>"iptal",
            "siparisId"=>$id,
            "urun"=>$urun,
           
        ]);

        
        $oku = $this->db->set("okundu",0);
        $oku = $this->db->where("id",$alan);
        $oku =  $this->db->update("sm_hesap");



         

        header("Location: ".base_url("staff/allorders"));
    
    }
    
    function cancelorderback($id,$alan,$urun){
        $this->db->set("durum","iptal");
        $this->db->set("teslimat","1999-09-09 00:00:00");
        $this->db->where("id",$id);
        $this->db->update("siparisler");

        $this->db->insert("sm_bildirim",[
            "to_id"=>$alan,
            "type"=>"iptal",
            "siparisId"=>$id,
            "urun"=>$urun,
           
        ]);

    

        $oku = $this->db->set("okundu",0);
        $oku = $this->db->where("id",$alan);
        $oku =  $this->db->update("sm_hesap");


        header("Location: ".base_url("staff/allorders"));
    
    }
    
}
