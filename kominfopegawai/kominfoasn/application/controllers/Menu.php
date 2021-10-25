<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
	//admin kan gak boleh masuk sebelum login
	//fungsi construct ini dijalankan ketika pertama kali controller ini diakses
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	is_logged_in();
	// }

	public function index() //ini index di MENU
	{
		$data['title'] = 'Menu Management';

		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['username' =>
		$this->session->userdata('username')])->row_array();

		//Kita ngambil data menu dari tabel user menu,untuk lebih jelas sambil lihat databasenya ya
		$data['menu'] = $this->db->get('user_menu')->result_array(); //bacanya ambil data menu dari tabel user_menu dan hasilnya berupa array,karena banyak jadi pakai result_array

		$this->form_validation->set_rules('menu', 'Menu', 'required');


		if ($this->form_validation->run() == false) {
			$this->load->view('headerandfooter/header', $data);
			$this->load->view('leftsidebar/sidemenu', $data);
			$this->load->view('navbar/navbar', $data);
			$this->load->view('menu/index', $data);
			$this->load->view('headerandfooter/footer');
		} else {
			//kalau berhasil tambahkan data baru
			$this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			New Menu Added!</div>');
			redirect('menu');
		}
	}

	public function submenu()
	{
		$data['title'] = 'Submenu Management';

		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['username' =>
		$this->session->userdata('username')])->row_array();
		$this->load->model('Menu_model', 'menu'); //bacanya nama Menu_model jadi 'menu' biar gampang

		$data['subMenu'] = $this->menu->getSubMenu(); // untuk menjoinkan tabel saya gunakan MODEL,karena disini ngambil foregenkeynya
		$data['menu'] = $this->db->get('user_menu')->result_array(); //Ngambil data menunya disini

		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('menu_id', 'Menu', 'required');
		$this->form_validation->set_rules('url', 'URL', 'required');
		$this->form_validation->set_rules('icon', 'Icon', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('headerandfooter/header', $data);
			$this->load->view('leftsidebar/sidemenu', $data);
			$this->load->view('navbar/navbar', $data);
			$this->load->view('menu/submenu', $data);
			$this->load->view('headerandfooter/footer');
		} else {
			$data = [
				'title' => $this->input->post('title'),
				'menu_id' => $this->input->post('menu_id'),
				'url' => $this->input->post('url'),
				'icon' => $this->input->post('icon'),
				'is_active' => $this->input->post('is_active')
			];
			$this->db->insert('user_sub_menu', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			New Sub Menu Added!</div>');
			redirect('menu/submenu');
		}
	}
}
