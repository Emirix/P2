<?php

class MyController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();

       
		$this->lang->load("tr","tr");
    }
}