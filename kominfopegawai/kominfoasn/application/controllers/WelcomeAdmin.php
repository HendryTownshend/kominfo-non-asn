<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WelcomeAdmin extends CI_Controller
{

	//admin kan gak boleh masuk sebelum login
	//fungsi construct ini dijalankan ketika pertama kali controller ini diakses

	public function __construct()
	{
		parent::__construct();
		// is_logged_in();
	}

	public function index() //dashboard
	{
		$data['title'] = 'Dashboard Admin';
		//saya ingin mengambil data di tabel user_pengguna berdasarkan username yang ada di session
		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['username' =>
		$this->session->userdata('username')])->row_array();
		// echo 'Selamat Datang'. $data['user_pengguna']['username']; //ini hanya mencoba memanggil
		$this->load->view('headerandfooter/header', $data);
		$this->load->view('leftsidebar/sidemenu', $data);
		$this->load->view('navbar/navbar', $data);
		$this->load->view('adminpage/dashboardadmin/index', $data);
		$this->load->view('headerandfooter/footer');
	}

	public function role()
	{
		$data['title'] = 'Role';

		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['username' =>
		$this->session->userdata('username')])->row_array();

		$data['role'] = $this->db->get('user_role')->result_array();

		$this->load->view('headerandfooter/header', $data);
		$this->load->view('leftsidebar/sidemenu', $data);
		$this->load->view('navbar/navbar', $data);
		$this->load->view('adminpage/rolepage/role', $data);
		$this->load->view('headerandfooter/footer');
	}

	public function roleAccess($role_id)
	{
		$data['title'] = 'Role Access';

		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['username' =>
		$this->session->userdata('username')])->row_array();

		$data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

		$this->db->where('id !=', 1);
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->load->view('headerandfooter/header', $data);
		$this->load->view('leftsidebar/sidemenu', $data);
		$this->load->view('navbar/navbar', $data);
		$this->load->view('adminpage/rolepage/role-access', $data);
		$this->load->view('headerandfooter/footer');
	}

	public function changeAccess()
	{
		$menu_id = $this->input->post('menuId');
		$role_id = $this->input->post('roleId');

		$data = [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		];

		$result = $this->db->get_where('user_access_menu', $data);

		if ($result->num_rows() < 1) {
			$this->db->insert('user_access_menu', $data);
		} else {
			$this->db->delete('user_access_menu', $data);
		}
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		<strong>Congratulation!</strong> Access Change !</div>');
	}
}
