<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	
	public function __construct()
	{
			parent::__construct();
			if(!$this->session->userdata("userCode")){
				redirect('/login', 'refresh');
			}
			// print_r($user_logged_in);
			
	}
public function index(){
		$data["titlepage"] = "HOME";
		$this->load->view('frond/header');
		$this->load->view('user/setting', $data);
		$this->load->view('frond/footer');
	}

}