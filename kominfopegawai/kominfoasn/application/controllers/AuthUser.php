<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthUser extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index() //loginUser
	{
		if ($this->session->userdata('username')) {
			redirect('WelcomeUser');
		}

		$data['title'] = 'Login';
		$this->load->view('headerandfooter/header', $data);

		//Set Rulesnya Login
		$this->form_validation->set_rules('username_user', 'Username', 'trim|required'); //|valid_username
		$this->form_validation->set_rules('password_user', 'Password', 'trim|required');

		//End Rulesnya Login

		//Start Validation
		if ($this->form_validation->run() == false) {

			$this->load->view('login/loginuser/index');
		} else {
			//ketika validasinya success
			$this->_login();
		}
		//End validation

		$this->load->view('headerandfooter/footer');
	}

	private function _login()
	{
		$username = $this->input->post('username_user');
		$password = $this->input->post('password_user');

		$user_pengguna = $this->db->get_where('user_pengguna', ['username' => $username])->row_array();

		//Start Jika Usernya Ada
		if ($user_pengguna) {
			//Start Jika user aktif
			if ($user_pengguna['is_active'] == 1) {
				//Start Jika Passwordnya sama,cek passwordnya benar tidak
				if (password_verify($password, $user_pengguna['password'])) {
					$data = [
						'id' => $user_pengguna['id'], // ketambah id
						'username' => $user_pengguna['username'],
						'role_id' => $user_pengguna['role_id'] // untuk menentukan menunya nanti,kalau admin pastinya lebih banyak menunya
					];
					$this->session->set_userdata($data); // waktu kita login,kita menyimpan data di session atau data sementara
					if ($user_pengguna['role_id'] == 1) {
						redirect('WelcomeAdmin'); // kita arahkan ke view yang kita mau/ ini berarti DASHBOARD
					} else {
						redirect('WelcomeUser'); // kita arahkan ke view yang kita mau/ ini berarti JABATAN DAN ATASAN
					}

					//End Jika Passwordnya sama,cek passwordnya benar tidak
				} else { //Jika Passwordnya Salah
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			<strong>Warning!</strong> Wrong Password,Please Try Again!</div>');
					redirect('AuthUser');
				}
				//End Jika Usernya Aktif
			} else { //Jika User Tidak Aktif
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			<strong>Warning!</strong> This Username is not Activated!</div>');
				redirect('AuthUser');
			}
			//End Jika usernya ada
		} else { //jika user gak ada atau belum buat akun
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			<strong>Warning!</strong> Username is not Registered!</div>');
			redirect('AuthUser');
		}
	}

	public function registeruser()
	{
		if ($this->session->userdata('username')) {
			redirect('WelcomeUser');
		}

		$data['title'] = 'Register';
		$this->load->view('headerandfooter/header', $data);

		//Rules User
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email_user', 'Email_user', 'required|trim|valid_email|is_unique[user_pengguna.email]', [
			'is_unique' => 'This Email has Already Registered!'
		]); //Email_user adalah nama lain jika ada pesan eroor
		$this->form_validation->set_rules('username_user', 'Username_user', 'required|trim|is_unique[user_pengguna.username]', [
			'is_unique' => 'This Username has Already Registered!'
		]); //|valid_username
		$this->form_validation->set_rules('password3', 'Password', 'required|trim|min_length[8]|matches[password4]', [
			'matches' => 'Password dont match!',
			'min_length' => 'Password to short!'
		]);
		$this->form_validation->set_rules('password4', 'Password', 'required|trim|matches[password3]');
		//End Rules User

		if ($this->form_validation->run() == false) {
			$this->load->view('register/registeruser/index');
		} else {
			$email = $this->input->post('email_user', true);
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($email),
				'username' => htmlspecialchars($this->input->post('username_user', true)),
				'image' => 'default.png', //untuk profile picture awal user
				'password' => password_hash($this->input->post('password3'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 0,
				'date_created' => time()
			];

			//siapkan token
			$token = base64_encode(random_bytes(32));
			$user_token = [
				'email' => $email,
				'token' => $token,
				'date_created' => time()
			];

			//SEBAIKNYA PAKAI MODEL
			$this->db->insert('user_pengguna', $data);
			$this->db->insert('user_token', $user_token);

			$this->_sendEmail($token, 'verify');

			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">
			<strong>Congratulation!</strong> Your Account Has Been Created. Please Activated Your Account</div>');
			redirect('AuthUser');
		}

		$this->load->view('headerandfooter/footer');
	}

	private function _sendEmail($token, $type)
	{
		$config = [
			'protocol' 	=> 'smtp', //simple mail transfer protocol
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'pekalongankominfo@gmail.com',
			'smtp_pass' => 'fuckingpassword',
			'smtp_port' => 465, //port smtp nya google
			'mailtype' 	=> 'html',
			'charset' 	=> 'utf-8',
			'newline' 	=> "\r\n"
		];
		$this->load->library('email', $config);
		$this->email->initialize($config);

		$this->email->from('pekalongankominfo@gmail.com', 'Dinas Komunikasi dan Informatika'); //ini pengirim
		$this->email->to($this->input->post('email_user')); //ini alamat yang dituju 

		if ($type == 'verify') {
			$this->email->subject('Account Verification');
			$this->email->message('Click this link to verify yout account : <a href="' . base_url() . 'AuthUser/verify?email=' . $this->input->post('email_user') . '&token=' . urlencode($token) . '">Activate</a>');
		}

		if ($this->email->send()) {  // ini kirim
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}

	public function verify()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('user_pengguna', ['email' => $email])->row_array();

		if ($user) {
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

			if ($user_token) {
				if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
					$this->db->set('is_active', 1);
					$this->db->where('email', $email);
					$this->db->update('user_pengguna');

					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					' . $email . ' Has Been Activated! Please Login.</div>');
					redirect('AuthUser');
				} else {
					$this->db->delete('user_pengguna', ['email' => $email]);
					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					Account Activation Failed! Token Expired</div>');
					redirect('AuthUser');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Account Activation Failed! Invalid Token</div>');
				redirect('AuthUser');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Account Activation Failed! Wrong Email</div>');
			redirect('AuthUser');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username'); //untuk membersihkan data session
		$this->session->unset_userdata('role_id'); //untuk membersihkan data session

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		<strong>Congratulation!</strong> You Have Been Logged Out!</div>');
		redirect('AuthUser');
	}

	public function blocked()
	{
		echo 'Access Blocked!';
	}
}
