<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class LaporanUser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Kegiatan_model');
    }

    public function tampil_laporan()
    {
        $data['title'] = 'Laporan Bulanan';

        $data['user_pengguna'] = $this->db->get_where('user_pengguna', ['username' =>
        $this->session->userdata('username')])->row_array();

        $vtanggal = $this->input->post('vtanggal');
        $this->load->model('Kegiatan_model', 'bulanan');
        $data['bulanan'] = $this->db->get('kegiatan')->result_array();

        $data['bulanan'] = $this->bulanan->tampil_data_laporan($vtanggal)->result();
        $this->load->view('userpage/laporanuser/tampilan_laporan', $data);
    }
}
