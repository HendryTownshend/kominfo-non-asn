<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthAdmin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index() //loginAdmin
	{ //start mengirimkan data title
		$data['title'] = 'Login';
		$this->load->view('headerandfooter/header', $data);
		//end mengirimkan data title
		$this->load->view('login/loginadmin/index');
		$this->load->view('headerandfooter/footer');
	}

	public function registeradmin()
	{
		//start mengirimkan data title
		$data['title'] = 'Register';
		$this->load->view('headerandfooter/header', $data);
		//end mengirimkan data title

		//Start Buat Admin Rulesnya
		$this->form_validation->set_rules('email_admin', 'Email', 'required|trim|valid_email|is_unique[user_admin.email]', [
			'is_unique' => 'This Email has Already Registered!'
		]); //kasus ku is_unique ada 2
		$this->form_validation->set_rules('username_admin', 'Username', 'required|trim|is_unique[user_admin.username]', [
			'is_unique' => 'This Username has Already Registered!'
		]); // |valid_username
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
			'matches' => 'Password dont match!',
			'min_length' => 'Password to short!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
		//End Buat Admin Rulesnya

		if ($this->form_validation->run() == false) {
			$this->load->view('register/registeradmin/index');
		} else {
			$data = [
				'email' => htmlspecialchars($this->input->post('email_admin', true)),
				'username' => htmlspecialchars($this->input->post('username_admin', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 1,
				'is_active' => 1,
				'date_created' => time()
			];
			//harusnya pakai model (karena hanya satu baris jadi dibuat INSERT satu baris)
			$this->db->insert('user_admin', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">
			<strong>Congratulation!</strong> Your Account Has Been Created. Please Login</div>');
			redirect('AuthAdmin/index');
		}
		$this->load->view('headerandfooter/footer');
	}
}
