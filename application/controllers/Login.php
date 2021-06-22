<?php


class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('rank')){
            if($this->session->userdata('rank') == "admin"){
                header("Location: ".base_url("admin"));
            }

            if($this->session->userdata('rank') == "sm"){
                header("Location: ".base_url("shopmanager"));
            }

            
            if($this->session->userdata('rank') == "staff"){
                header("Location: ".base_url("staff"));
            }

            
            if($this->session->userdata('rank') == "reseller"){
                header("Location: ".base_url("reseller"));
            }
        }

    }

	public function index()
	{
		$this->load->view('Login');
	}

    function logout(){
        $this->session->sess_destroy();
        header("Location: ".base_url());
    }

    public function log(){
        $rank = "";    
        $sifre = $_POST["sifre"];
        $mail = $_POST["mail"];

        $a = $this->db->where("sifre",md5($sifre));
        $a = $this->db->where("eposta",$mail);
        $a = $this->db->get("admin")->num_rows();

        $r = $this->db->where("sifre",md5($sifre));
        $r = $this->db->where("eposta",$mail);
        $r = $this->db->get("reseller_hesap")->num_rows();

        

        $sm =$this->db->where("sifre",md5($sifre));
        $sm =$this->db->where("eposta",$mail);
        $sm = $this->db->get("sm_hesap")->num_rows();

        $s =$this->db->where("sifre",md5($sifre));
        $s =$this->db->where("eposta",$mail);
        $s = $this->db->get("staff_hesap")->num_rows();
        
        if($a == 1){
            $rank = "admin";   
        }

        if($r == 1){
            $rank = "reseller";   
        }

        if($sm == 1){
            $rank = "sm";   
        }

        if($s == 1){
            $rank = "staff";   
        }

        if($s == 0 || $sm == 0 || $r == 0 || $a == 0 ){
            header("Location: ".base_url("/?error=Hatalı Bilgiler"));
        }

        


        if($rank == 'admin' ){
            $bilgiler = $this->db->where("eposta",$mail);
            $bilgiler = $this->db->where("sifre",md5($sifre));
            $bilgiler = $this->db->get("admin")->result_array();

            if( md5($sifre) == $bilgiler[0]["sifre"] && $mail == $bilgiler[0]["eposta"] ) {
                $this->session->set_userdata('rank', 'admin');
                $this->session->set_userdata('admin_id', $bilgiler[0]["id"]);


                header("Location: ".base_url("admin"));
            }else{
                header("Location: ".base_url("/?error=Hatalı Bilgiler"));
            }
        }

        if($rank == 'sm' ){
            $bilgiler = $this->db->where("eposta",$mail);
            $bilgiler = $this->db->where("sifre",md5($sifre));
            $bilgiler = $this->db->get("sm_hesap")->result_array();

            if( md5($sifre) == $bilgiler[0]["sifre"] && $mail == $bilgiler[0]["eposta"] ) {
                $this->session->set_userdata('sm_id', $bilgiler[0]["id"]);
                $this->session->set_userdata('rank', 'sm');

                header("Location: ".base_url("shopmanager"));
            }else{
                header("Location: ".base_url("/?error=Hatalı Bilgiler"));
            }
        }

         
        if($rank == 'reseller' ){
            $bilgiler = $this->db->where("eposta",$mail);
            $bilgiler = $this->db->where("sifre",md5($sifre));
            $bilgiler = $this->db->get("reseller_hesap")->result_array();
            if( md5($sifre) == $bilgiler[0]["sifre"] && $mail == $bilgiler[0]["eposta"] ) {
                $this->session->set_userdata('rank', 'reseller');
                $this->session->set_userdata('reseller_id', $bilgiler[0]["id"]);
                header("Location: ".base_url("reseller"));
            }else{
                header("Location: ".base_url("/?error=Hatalı Bilgiler"));
            }
        }

        if($rank == 'staff' ){
            $bilgiler = $this->db->where("eposta",$mail);
            $bilgiler = $this->db->where("sifre",md5($sifre));
            $bilgiler = $this->db->get("staff_hesap")->result_array();

            if( md5($sifre) == $bilgiler[0]["sifre"] && $mail == $bilgiler[0]["eposta"] ) {
                $this->session->set_userdata('rank', 'staff');
                $this->session->set_userdata('staff_id',  $bilgiler[0]["id"]);

                header("Location: ".base_url("staff"));
            }else{
                header("Location: ".base_url("/?error=Hatalı Bilgiler"));
            }
        }

    }
}
