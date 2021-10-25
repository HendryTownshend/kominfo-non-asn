<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WelcomeUser extends CI_Controller
{
	//admin kan gak boleh masuk sebelum login
	//fungsi construct ini dijalankan ketika pertama kali controller ini diakses

	// public function dashboard()
	// {
	// 	$data['title'] = 'Dashboard';
	// 	//saya ingin mengambil data di tabel user_pengguna berdasarkan username yang ada di session
	// 	$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['username' =>
	// 	$this->session->userdata('username')])->row_array();
	// 	// echo 'Selamat Datang'. $data['user_pengguna']['username']; //ini hanya mencoba memanggil


	// 	$this->load->view('headerandfooter/header', $data);
	// 	$this->load->view('leftsidebar/sidemenu', $data);
	// 	$this->load->view('navbar/navbar', $data);
	// 	$this->load->view('userpage/dashboarduser/dashboard', $data);
	// 	$this->load->view('headerandfooter/footer');
	// }
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	is_logged_in();
	// }

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Kegiatan_model');
	}

	public function index() //jabatan dan atasan ini bagian awal menu USER
	{
		$data['title'] = 'Jabatan dan Atasan';

		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['username' =>
		$this->session->userdata('username')])->row_array();

		$this->load->view('headerandfooter/header', $data);
		$this->load->view('leftsidebar/sidemenu', $data);
		$this->load->view('navbar/navbar', $data);
		$this->load->view('userpage/jabatanuser/index', $data);
		$this->load->view('headerandfooter/footer');
	}

	public function harian()
	{
		$data['title'] = 'Kegiatan Harian';

		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['username' =>
		$this->session->userdata('username')])->row_array();

		$this->load->model('Kegiatan_model', 'harian');
		$data['harian'] = $this->db->get('kegiatan')->result_array();
		$data['harian'] = $this->harian->harian_user();

		$this->form_validation->set_rules('input_kegiatan_harian', 'Input Kegiatan Harian', 'required');
		$this->form_validation->set_rules('input_keterangan', 'Input Keterangan', 'required');

		$role_pengguna = $this->session->userdata('role_id');
		if ($role_pengguna == 1) {
			$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['username' =>
			$this->session->userdata('username')])->row_array();

			$this->load->model('Kegiatan_model', 'harian');
			$data['harian'] = $this->db->get('kegiatan')->result_array();

			$this->load->view('headerandfooter/header', $data);
			$this->load->view('leftsidebar/sidemenu', $data);
			$this->load->view('navbar/navbar', $data);
			$this->load->view('userpage/kegiatanharianuser/index', $data);
			$this->load->view('headerandfooter/footer');
		} elseif ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');

			$this->load->model('Kegiatan_model', 'harian');
			$data['harian'] = $this->db->get('kegiatan')->result_array();

			$data['harian'] = $this->harian->search($data['keyword']);

			$this->load->view('headerandfooter/header', $data);
			$this->load->view('leftsidebar/sidemenu', $data);
			$this->load->view('navbar/navbar', $data);
			$this->load->view('userpage/kegiatanharianuser/index', $data);
			$this->load->view('headerandfooter/footer');
		} elseif ($this->form_validation->run() == false) {
			$this->load->view('headerandfooter/header', $data);
			$this->load->view('leftsidebar/sidemenu', $data);
			$this->load->view('navbar/navbar', $data);
			$this->load->view('userpage/kegiatanharianuser/index', $data);
			$this->load->view('headerandfooter/footer');
		} else {
			$data = [
				'kegiatan_harian' => $this->input->post('input_kegiatan_harian'),
				'kuantitas' => $this->input->post('input_kuantitas'),
				'tanggal_pengerjaan' => $this->input->post('input_tanggal_pengerjaan'),
				'jam_mulai' => $this->input->post('input_jam_pengerjaan'),
				'jam_selesai' => $this->input->post('input_jam_selesai'),
				'keterangan' => $this->input->post('input_keterangan')
			];
			$this->harian->simpan_data($data);

			// $this->db->insert('kegiatan', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Kegiatan Added!</div>');
			redirect('WelcomeUser/harian');
		}
	}

	// public function editkegiatan()
	// {

	// 	$this->load->model('Kegiatan_model', 'harian');
	// 	$data['harian'] = $this->db->get('kegiatan')->result_array();

	// 	$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['username' =>
	// 	$this->session->userdata('username')])->row_array();

	// 	$this->load->view('headerandfooter/header', $data);
	// 	$this->load->view('leftsidebar/sidemenu', $data);
	// 	$this->load->view('navbar/navbar', $data);
	// 	$this->load->view('userpage/kegiatanharianuser/editkegiatan');
	// 	$this->load->view('headerandfooter/footer');
	// }

	public function search()
	{
		$data['title'] = 'Kegiatan Harian';

		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['username' =>
		$this->session->userdata('username')])->row_array();

		//pencarian
		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->load->model('Kegiatan_model', 'kegiatan_search');
			$this->kegiatan_search->search('kegiatan_search', $data['keyword']);
		} else {
			$data['keyword'] = null;
		}

		$keyword = $this->input->post('tanggal_kegiatan_harian');
		$this->load->model('Kegiatan_model', 'kegiatan');
		$this->kegiatan->get_keyword($keyword);
		$data['kegiatan'] = $this->kegiatan->get_keyword($keyword);

		$this->load->view('headerandfooter/header', $data);
		$this->load->view('leftsidebar/sidemenu', $data);
		$this->load->view('navbar/navbar', $data);
		$this->load->view('userpage/kegiatanharianuser/index', $data);
		$this->load->view('headerandfooter/footer');
	}

	public function bulanan()
	{
		$data['title'] = 'Laporan Bulanan';

		$this->load->model('Kegiatan_model', 'bulanan');
		$data['bulanan'] = $this->db->get('kegiatan')->result_array();
		$data['bulanan'] = $this->bulanan->bulanan_user();

		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['username' =>
		$this->session->userdata('username')])->row_array();

		$role_pengguna = $this->session->userdata('role_id');
		if ($role_pengguna == 1) {
			$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['username' =>
			$this->session->userdata('username')])->row_array();

			$this->load->model('Kegiatan_model', 'bulanan');
			$data['bulanan'] = $this->db->get('kegiatan')->result_array();
		} else {
			$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['username' =>
			$this->session->userdata('username')])->row_array();

			$this->load->model('Kegiatan_model', 'bulanan');
			$data['bulanan'] = $this->db->get('kegiatan')->result_array();
			$data['bulanan'] = $this->bulanan->bulanan_user();
		}

		if ($this->input->post('submit')) {
			if ($role_pengguna == 1) {
				$vtanggal = $this->input->post('vtanggal');

				$this->load->model('Kegiatan_model', 'bulanan');
				$data['bulanan'] = $this->db->get('kegiatan')->result_array();

				$data['bulanan'] = $this->bulanan->tampil_data_laporan_admin($vtanggal);

				$this->load->view('headerandfooter/header', $data);
				$this->load->view('leftsidebar/sidemenu', $data);
				$this->load->view('navbar/navbar', $data);
				$this->load->view('userpage/laporanuser/tampil_laporan', $data);
				$this->load->view('headerandfooter/footer');
			} else {
				$vtanggal = $this->input->post('vtanggal');

				$this->load->model('Kegiatan_model', 'bulanan');
				$data['bulanan'] = $this->db->get('kegiatan')->result_array();

				$data['bulanan'] = $this->bulanan->tampil_data_laporan($vtanggal);

				$this->load->view('headerandfooter/header', $data);
				$this->load->view('leftsidebar/sidemenu', $data);
				$this->load->view('navbar/navbar', $data);
				$this->load->view('userpage/laporanuser/tampil_laporan', $data);
				$this->load->view('headerandfooter/footer');
			}
		} else {
			$this->load->view('headerandfooter/header', $data);
			$this->load->view('leftsidebar/sidemenu', $data);
			$this->load->view('navbar/navbar', $data);
			$this->load->view('userpage/laporanuser/index', $data);
			$this->load->view('headerandfooter/footer');
		}
		// $this->load->view('headerandfooter/header', $data);
		// $this->load->view('leftsidebar/sidemenu', $data);
		// $this->load->view('navbar/navbar', $data);
		// $this->load->view('userpage/laporanuser/index');
		// $this->load->view('headerandfooter/footer');
	}

	public function tampil_data()
	{
		$vtanggal = $this->input->post('vtanggal');

		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['username' =>
		$this->session->userdata('username')])->row_array();

		$this->load->model('Kegiatan_model', 'laporan');
		$data['laporan'] = $this->db->get('kegiatan')->result_array();

		$data['laporan'] = $this->laporan->tampil_data_laporan($vtanggal)->result();

		$this->load->view('headerandfooter/header', $data);
		$this->load->view('leftsidebar/sidemenu', $data);
		$this->load->view('navbar/navbar', $data);
		$this->load->view('userpage/laporanuser/tampil_laporan');
		$this->load->view('headerandfooter/footer');
	}

	// public function tampil_laporan()
	// {
	// 	$data['title'] = 'Laporan Bulanan';

	// 	$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['username' =>
	// 	$this->session->userdata('username')])->row_array();

	// 	$vtanggal = $this->input->post('vtanggal');
	// 	$this->load->model('Kegiatan_model', 'bulanan');
	// 	// $data['bulanan'] = $this->db->get('kegiatan')->result_array();

	// 	$data['bulanan'] = $this->bulanan->tampil_data_laporan($vtanggal)->result_array();

	// 	$this->load->view('headerandfooter/header', $data);
	// 	$this->load->view('navbar/navbar', $data);
	// 	$this->load->view('userpage/laporanuser/index', $data);
	// 	$this->load->view('headerandfooter/footer');
	// }

	public function export($jenis = 'pdf')
	{
		$data['title'] = 'Data Kegiatan Laporan Bulanan';

		if ($jenis == 'pdf') {

			$this->load->model('Kegiatan_model', 'bulanan');
			$data['bulanan'] = $this->db->get('kegiatan')->result_array();

			$html = $this->load->view('userpage/laporanuser/print_laporan', $data, TRUE);
			// echo $html;
			generatePdf($html, 'Data Kegiatan Bulanan', 'A4', 'landscape');
		}
	}

	public function exportpdf($jenis = 'pdf')
	{
		$data['title'] = 'Data Kegiatan Laporan Bulanan';

		// if ($jenis == 'pdf') {

		// 	$this->load->model('Kegiatan_model', 'bulanan');
		// 	$data['bulanan'] = $this->db->get('kegiatan')->result_array();

		// 	$html = $this->load->view('userpage/laporanuser/print_laporan', $data, TRUE);
		// 	// echo $html;
		// 	generatePdf($html, 'Data Kegiatan Bulanan', 'A4', 'landscape');
		// }
		$role_pengguna = $this->session->userdata('role_id');
		if ($jenis == 'pdf') {
			if ($this->input->post('cetak_rentang_laporan')) {
				if ($role_pengguna == 1) {
					$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['username' =>
					$this->session->userdata('username')])->row_array();

					$this->load->model('Kegiatan_model', 'laporan');
					$data['laporan'] = $this->db->get('kegiatan')->result_array();

					$tgl_a = $this->input->post('tgl_a');
					$tgl_b = $this->input->post('tgl_b');

					$data['laporan'] = $this->laporan->tampil_tanggal_laporan_admin($tgl_a, $tgl_b);

					$html = $this->load->view('userpage/laporanuser/print_laporan', $data, TRUE);
					generatePdf($html, 'Data Kegiatan Bulanan', 'A4', 'landscape');
				} else {
					$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['username' =>
					$this->session->userdata('username')])->row_array();

					$this->load->model('Kegiatan_model', 'laporan');
					$data['laporan'] = $this->db->get('kegiatan')->result_array();

					$tgl_a = $this->input->post('tgl_a');
					$tgl_b = $this->input->post('tgl_b');

					$data['laporan'] = $this->laporan->tampil_tanggal_laporan($tgl_a, $tgl_b);

					$html = $this->load->view('userpage/laporanuser/print_laporan', $data, TRUE);
					generatePdf($html, 'Data Kegiatan Bulanan', 'A4', 'landscape');
				}
			}
		}
	}

	public function print()
	{
		$data['title'] = 'Print Laporan';

		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['username' =>
		$this->session->userdata('username')])->row_array();

		$this->load->model('Kegiatan_model', 'harian');
		$data['harian'] = $this->db->get('kegiatan')->result_array();

		$this->load->view('userpage/laporanuser/print_laporan', $data);
	}

	public function setting()
	{
		$data['title'] = 'Setting';

		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['username' =>
		$this->session->userdata('username')])->row_array();

		$this->load->view('headerandfooter/header', $data);
		$this->load->view('leftsidebar/sidemenu', $data);
		$this->load->view('navbar/navbar', $data);
		$this->load->view('userpage/fsettinguser/index', $data);
		$this->load->view('headerandfooter/footer');
	}

	public function edit()
	{
		$data['title'] = 'Edit Profile';

		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['username' =>
		$this->session->userdata('username')])->row_array();

		$this->form_validation->set_rules('name', 'Full Name', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('headerandfooter/header', $data);
			$this->load->view('leftsidebar/sidemenu', $data);
			$this->load->view('navbar/navbar', $data);
			$this->load->view('userpage/fsettinguser/editprofile', $data);
			$this->load->view('headerandfooter/footer');
		} else {
			$name = $this->input->post('name');
			$email = $this->input->post('email');

			//cek jika ada gambarnya yang akan di upload
			$upload_image = $_FILES['image']['name'];

			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets/images/users/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$old_image = $data['user_pengguna']['image'];
					if ($old_image != 'default.png') {
						unlink(FCPATH . 'assets/images/users/' . $old_image);
					}

					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
					redirect('WelcomeUser');
				}
			}

			$this->db->set('name', $name);
			$this->db->where('email', $email);
			$this->db->update('user_pengguna');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		<strong>Congratulation!</strong> You Profile Has Been Updated!</div>');
			redirect('WelcomeUser/setting');
		}
	}

	public function editkegiatan()
	{
		$data['title'] = 'Edit Kegiatan';

		$id = $this->input->post('id');
		$data = [
			'id' => $this->input->post('id'),
			'kegiatan_harian' => $this->input->post('edit_kegiatan_harian'),
			'kuantitas' => $this->input->post('edit_kuantitas'),
			'tanggal_pengerjaan' => $this->input->post('edit_tanggal_pengerjaan'),
			'jam_mulai' => $this->input->post('edit_jam_pengerjaan'),
			'jam_selesai' => $this->input->post('edit_jam_selesai'),
			'keterangan' => $this->input->post('edit_keterangan')
		];
		$this->db->where('id', $id);
		$this->db->update('kegiatan', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		<strong>Congratulation!</strong> You Activity Has Been Updated!</div>');
		redirect('WelcomeUser/harian');
	}

	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->load->model('Kegiatan_model', 'kegiatan');
		$this->kegiatan->hapusDataKegiatan($where, 'kegiatan');

		$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
			Data Succesfuly Deleted!</div>');
		redirect('WelcomeUser/harian');
	}

	public function changePassword() //jabatan dan atasan ini bagian awal menu USER
	{
		$data['title'] = 'Ganti Password';

		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['username' =>
		$this->session->userdata('username')])->row_array();

		$this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
		$this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[8]|matches[new_password2]');
		$this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[8]|matches[new_password1]');

		if ($this->form_validation->run() == false) {
			$this->load->view('headerandfooter/header', $data);
			$this->load->view('leftsidebar/sidemenu', $data);
			$this->load->view('navbar/navbar', $data);
			$this->load->view('userpage/changepasswordpage/changepassword', $data);
			$this->load->view('headerandfooter/footer');
		} else {
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');
			if (!password_verify($current_password, $data['user_pengguna']['password'])) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Wrong Current Password!</div>');
				redirect('WelcomeUser/changePassword');
			} else {
				if ($current_password == $new_password) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					New Password Cannot Be The Same as Current Password!</div>');
					redirect('WelcomeUser/changePassword');
				} else {
					//password sudah ok
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

					$this->db->set('password', $password_hash);
					$this->db->where('username', $this->session->userdata('username'));
					$this->db->update('user_pengguna');
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					Password Changed!</div>');
					redirect('WelcomeUser/changePassword');
				}
			}
		}
	}
}
