<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan_model extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('kegiatan');
	}

	public function hapusDataKegiatan($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function get_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('kegiatan');
		$this->db->like('tanggal_pengerjaan');

		return $this->db->get()->result();
	}

	public function search($keyword = null)
	{
		$pengguna_id = $this->session->userdata('id');
		if ($keyword) {
			$this->db->where('pengguna_id', $pengguna_id);
			$this->db->like('tanggal_pengerjaan', $keyword);
		}
		return $this->db->get('kegiatan')->result_array();
	}

	public function searchMonth($keywordMonth = null)
	{
		if ($keywordMonth) {
			$this->db->like('tanggal_pengerjaan', $keywordMonth);
		}
		return $this->db->get('kegiatan')->result_array();
	}

	function tampil_data_laporan($vtanggal)
	{
		$pengguna_id = $this->session->userdata('id');
		if ($vtanggal) {
			$vtanggal = explode("-", $vtanggal);
			$month = $vtanggal[1];
			$year = $vtanggal[0];
			$newDate = $year . '-' . $month;
			$this->db->where('pengguna_id', $pengguna_id);
			$this->db->like('tanggal_pengerjaan', $newDate);
		}
		return $this->db->get('kegiatan')->result_array();
	}

	function tampil_data_laporan_admin($vtanggal)
	{

		if ($vtanggal) {
			$vtanggal = explode("-", $vtanggal);
			$month = $vtanggal[1];
			$year = $vtanggal[0];
			$newDate = $year . '-' . $month;
			$this->db->like('tanggal_pengerjaan', $newDate);
		}
		return $this->db->get('kegiatan')->result_array();
	}

	function get_harian_user()
	{
		$query = $this->db->query("SELECT * FROM kegiatan WHERE user_pengguna_id ORDER BY user_pengguna_id DESC ");
		return $query->result();
	}

	function bulanan_user()
	{
		// <!-- QUERY KEGIATAN -->

		$pengguna_id = $this->session->userdata('id');
		$queryKegiatan = "SELECT `kegiatan`.`id`,`kegiatan_harian`,`kuantitas`,`tanggal_pengerjaan`,`jam_mulai`,`jam_selesai`,`keterangan`
							FROM `kegiatan` JOIN `user_pengguna`
							ON `user_pengguna`.`id` = `kegiatan`.`pengguna_id`
							WHERE `user_pengguna`.`id` = $pengguna_id
							ORDER BY `kegiatan`.`pengguna_id` ASC
							";
		return $this->db->query($queryKegiatan)->result_array();
	}

	function tampil_tanggal_laporan($tgl_1, $tgl_2)
	{
		$pengguna_id = $this->session->userdata('id');
		$query = $this->db->query("SELECT * FROM kegiatan WHERE (tanggal_pengerjaan BETWEEN '$tgl_1' and '$tgl_2') AND pengguna_id = '$pengguna_id' ORDER BY tanggal_pengerjaan ASC");
		$query2 = $query->result();
		return $query2;
		// return $query2;

	}

	function tampil_tanggal_laporan_admin($tgl_1, $tgl_2)
	{

		$query = $this->db->query("SELECT * FROM kegiatan WHERE tanggal_pengerjaan BETWEEN '$tgl_1' and '$tgl_2'  ORDER BY tanggal_pengerjaan ASC");
		$query2 = $query->result();
		return $query2;
	}

	function harian_user()
	{
		// <!-- QUERY KEGIATAN -->

		$pengguna_id = $this->session->userdata('id');
		$queryKegiatan = "SELECT `kegiatan`.`id`,`kegiatan_harian`,`kuantitas`,`tanggal_pengerjaan`,`jam_mulai`,`jam_selesai`,`keterangan`
						FROM `kegiatan` JOIN `user_pengguna`
						ON `user_pengguna`.`id` = `kegiatan`.`pengguna_id`
						WHERE `user_pengguna`.`id` = $pengguna_id
						ORDER BY `kegiatan`.`pengguna_id` ASC
						";
		return $this->db->query($queryKegiatan)->result_array();
		// var_dump($kegiatan);
		// die;
	}

	function simpan_data($data)
	{
		// $this->db->where('pengguna_id', $id);
		// $this->db->insert('kegiatan', $data);
		$pengguna_id = $this->session->userdata('id');
		$arr = array_values($data);
		$kegiatan_harian = $arr[0];
		$kuantitas = $arr[1];
		$tanggal_pengerjaan = $arr[2];
		$jam_mulai = $arr[3];
		$jam_selesai = $arr[4];
		$keterangan = $arr[5];
		$data2 = [
			'pengguna_id' => $pengguna_id,
			'kegiatan_harian' => $kegiatan_harian,
			'kuantitas' => $kuantitas,
			'tanggal_pengerjaan' => $tanggal_pengerjaan,
			'jam_mulai' => $jam_mulai,
			'jam_selesai' => $jam_selesai,
			'keterangan' => $keterangan
		];
		$this->db->insert('kegiatan', $data2);
	}

	public function edit_data()
	{
		$data = [
			'kegiatan_harian' => $this->input->post('edit_kegiatan_harian'),
			'kuantitas' => $this->input->post('edit_kuantitas'),
			'tanggal_pengerjaan' => $this->input->post('edit_tanggal_pengerjaan'),
			'jam_mulai' => $this->input->post('edit_jam_pengerjaan'),
			'jam_selesai' => $this->input->post('edit_jam_selesai'),
			'keterangan' => $this->input->post('edit_keterangan')
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('kegiatan', $data);
	}

	function fixdate($date)
	{
		return date('d-m-Y', strtotime($date));
	}

	public function input($table, $data)
	{
		return $this->db->insert($table, $data);
	}

	public function get_vharian()
	{
		$this->db->select('*');
		$this->db->from('kegiatan'); //ini tabel
		return $this->db->get();
	}
}
