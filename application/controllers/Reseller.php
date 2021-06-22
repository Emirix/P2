<?php


class Reseller extends CI_Controller
{
    var $bildirimler;
    var $user;

    public function __construct()
    {
       
        parent::__construct();
        $this->load->model("dbx");
        $this->load->helper(array('form', 'url'));

        if( $this->session->userdata('rank') == "admin"  ||$this->session->userdata('rank') == "reseller" && $this->session->userdata('rank'))
        {
           
        }else{
            echo "Erişim izni yok";
            die();
        }


        $this->bildirimler = $this->db->order_by('id', 'DESC');
        $this->bildirimler = $this->db->get("staff_bildirim")->result_array();
   
        $this->user = $this->db->where("id", $this->session->userdata("reseller_id"));
        $this->user = $this->db->get("reseller_hesap")->result_array();
    }

    public function index()
    {
        $id = $this->session->userdata("reseller_id");

        $user = $this->db->where("id",$id);
        $user = $this->db->get("reseller_hesap")->result_array();

        $erisim = $this->db->where("id",$id);
        $erisim = $this->db->get("reseller_hesap")->result_array(); 
        
        $erisimKey = explode(",",$erisim[0]["erisim"]);
        $erisilenMagazalar = [];

        foreach($erisimKey as $key){
            $magaza = $this->db->where("id",$key);
            $magaza = $this->db->get("sm_hesap")->result_array();
            array_push($erisilenMagazalar,$magaza);
        }

       
       
        $this->load->view('reseller',[
            "user"=>$user,
            "erisim"=>$erisilenMagazalar,
            "bildirimler"=> $this->bildirimler
        ]);
    }

    public function apiupdatereseller()
    {
        $sifrebos = false;
        if(empty($_POST["val-password"])){
            $sifrebos = true;
        }

        
        $erisimler = [];
        foreach( $_POST["erisim"] as $c){
            array_push($erisimler,$c.",");
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
                "erisim"=>substr(implode("",$erisimler) , 0, -1)    

            ]);
            if(!$sifrebos){
                $this->db->set("sifre",md5($_POST["val-password"]));
            }
            $this->db->where('id', $_POST["id"]);
            $this->db->update('reseller_hesap');

        }
        else{
            $this->db->set([
                "ad_soyad" => $_POST["val-adsoyad"],
                "telefon1" => $_POST["val-phone"],
                "telefon2" => $_POST["val-phone2"],
                "eposta" => $_POST["val-email"],
                
                "erisim"=>substr(implode("",$erisimler) , 0, -1)    
                ]);
                if(!$sifrebos){
                    $this->db->set("sifre",md5($_POST["val-password"]));
                }
            $this->db->where('id', $_POST["id"]);
            $this->db->update('reseller_hesap');
        }
        





      

        header("Location: " . base_url("admin/createaccount"));
    }

    public function apicreatereseller()
    {
        $epostaKontrol = $this->db->where("eposta",$_POST["val-email"]);
        $epostaKontrol = $this->db->get("reseller_hesap")->result_array();
        
        if( !empty($epostaKontrol) ){
            echo "Bu eposta zaten kullanımda";
            die();
        }
        if(!isset($_POST["erisim"])){
            echo "Erişim vermediniz. Hesap eklenmedi";
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

        $erisimler = [];
        foreach($_POST["erisim"] as $c){
            array_push($erisimler,$c.",");
        }

       




    
        if(isset($_FILES["userfile"])){
            $config["upload_path"] = "./assets/pp/";
            $config['allowed_types'] = 'jpg|png|jpeg|gif|bmp|ico';
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
                "sifre" => md5($_POST["val-password"]),
                "fotograf"=>$resimData["upload_data"]["file_name"],
                "erisim"=>substr(implode("",$erisimler) , 0, -1)    

            ]);

            
            $this->db->where('id', $_POST["id"]);
            $this->db->update('reseller_hesap');

       

       

            $this->db->insert("reseller_hesap",[
                "ad_soyad" => $_POST["val-adsoyad"],
                "telefon1" => $_POST["val-phone"],
                "telefon2" => $_POST["val-phone2"],
                "eposta" => $_POST["val-email"],
                "sifre" => md5($_POST["val-password"]),
                "fotograf"=>$resimData["upload_data"]["file_name"],
                "erisim"=>substr(implode("",$erisimler) , 0, -1)    
            ]);
 
       
        header("Location:" . base_url("admin/createaccount"));
}

    }


    function getmagaza($id){
        
            $siparisler = $this->db->where("alan",$id);
            $siparisler = $this->db->get("siparisler")->result_array();

            $magazalar = $this->db->where("id",$id);
            $magazalar = $this->db->get("sm_hesap")->result_array();

            echo json_encode([
                "siparis"=>$siparisler,
                "magazalar"=>$magazalar
            ]);
        }


    function product($id,$urunId){
        
        $product = $this->db->where("id",$urunId);
        $product = $this->db->get("urunler")->result_array();

        $order = $this->db->where("id",$id);
        $order = $this->db->get("siparisler")->result_array();





        $this->load->view('product',[
            "bildirimler"=>$this->bildirimler,
            "user"=>$this->user,
            "urun"=>$product,
            "order"=>$order,
            "id"=>$id,
            "urunId"=>$urunId,
        ]);
    }

    function oku(){
        $this->db->set("okundu",1);
        $this->db->where("id",$this->session->userdata("reseller_id"));
        $this->db->update("reseller_hesap");
    }
}
