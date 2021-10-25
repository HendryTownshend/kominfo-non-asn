<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function index()
    {
        $data['user_pengguna'] = $this->db->get_where('user_pengguna', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->model('Kegiatan_model', 'harian');
        $data['harian'] = $this->db->get('kegiatan')->result_array();

        // panggil library yang kita buat sebelumnya yang bernama Mypdf
        $this->load->library('Mypdf');
        $this->mypdf->generate('userpage/laporanuser/print_laporan');
    }
}
