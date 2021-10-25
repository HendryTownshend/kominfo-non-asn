<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WelcomeKominfoIndex extends CI_Controller
{
	public function index() //dashboard
	{
		//start mengirimkan data title
		$data['title'] = 'Welcome Kominfo';
		$this->load->view('headerandfooter/header', $data);
		//End load view 
		$this->load->view('login/index');
		$this->load->view('headerandfooter/footer');
	}

	public function logout()
	{
		//start mengirimkan data title
		$data['title'] = 'Welcome Kominfo';
		$this->load->view('headerandfooter/header', $data);
		//end mengirimkan data title
		$this->load->view('login/index');
		$this->load->view('headerandfooter/footer');
	}
}
