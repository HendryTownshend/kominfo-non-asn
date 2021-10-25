<?php class M_laporan extends CI_Model
{
    function tampil_data($vtanggal)
    {
        $vbulan = date("m", strtotime($vtanggal));
        $this->db->select('*');
        $this->db->from('kegiatan');
        $this->db->where('month(tanggal_pengerjaan)', $vbulan);
        $this->db->where('year(tanggal_pengerjaan)', $vtanggal);
        $query = $this->db->get();
        return $query;
    }
}
