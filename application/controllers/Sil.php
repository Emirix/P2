<?php


class Sil extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

    }

	public function reseller()
	{
        $this->load->view("sil");
    }

    function onayreseller(){
        $this->db->where('id', $_POST["id"]);
        $this->db->delete('reseller_hesap');

       
        header("Location: ".base_url("admin/allaccount"));

    }

    function onaysm(){
        $this->db->where('id', $_POST["id"]);
        $this->db->delete('sm_hesap');

        header("Location: " . base_url("admin/allaccount"));
    }

    function onaystaff(){
        $this->db->where('id', $_POST["id"]);
        $this->db->delete('staff_hesap');

        header("Location: " . base_url("admin/allaccount"));
    }
}
