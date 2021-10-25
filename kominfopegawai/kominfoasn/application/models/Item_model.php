<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Item_model extends CI_Model
{
    public function get()
    {
        $query = $this->db->query("SELECT * FROM kegiatan ");
        return $query->num_rows();
    }

    public function get_user_activation()
    {
        $role_id = 2;
        $is_active = 1;
        $query = $this->db->query("SELECT * FROM user_pengguna WHERE (role_id = $role_id) AND is_active = $is_active ORDER BY id ASC");
        return $query->num_rows();
    }

    public function get_user()
    {
        $role_id = 2;
        $query = $this->db->query("SELECT * FROM user_pengguna WHERE role_id = $role_id ORDER BY id ASC");
        return $query->num_rows();
    }

    public function get_bulan_kegiatan()
    {
        $tanggal_pengerjaan = '2021-08-10';
        $query = $this->db->query("SELECT * FROM `kegiatan` WHERE tanggal_pengerjaan = $tanggal_pengerjaan;");
        return $query->num_rows();
    }
}
