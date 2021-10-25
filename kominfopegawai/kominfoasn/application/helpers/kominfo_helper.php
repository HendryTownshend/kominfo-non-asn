<?php

use Dompdf\Dompdf;

require_once('assets/dompdf/autoload.inc.php');

function generatePdf($html = '', $filename = 'document', $size = 'A4', $orientation = 'portrait', $attachment = false)
{
	// instantiate and use the dompdf class
	$dompdf = new Dompdf();
	$dompdf->loadHtml($html);

	// (Optional) Setup the paper size and orientation
	$dompdf->setPaper($size, $orientation);

	// Render the HTML as PDF
	$dompdf->render();

	// Output the generated PDF to Browser
	$dompdf->stream($filename, ['Attachment' => $attachment]);
}

//di dalam helper ini tidak mengenal $this
function is_logged_in()
{
	$ci = get_instance(); //fungsinya untuk memanggil library yang ada di CI
	if (!$ci->session->userdata('username')) {
		redirect('AuthUser');
	} else { //kalau udah login
		$role_id = $ci->session->userdata('role_id'); //cek rolenya apa
		$menu = $ci->uri->segment(1); //kita ada di menu mana

		$queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array(); //dari sini namanya dapet role_id nya dapet
		$menu_id = $queryMenu['id'];

		$userAccess = $ci->db->get_where('user_access_menu', [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		]);

		if ($userAccess->num_rows() < 1) {
			redirect('AuthUser/blocked');
		}
	}
}

function check_access($role_id, $menu_id) //method ini menerima parameter role_id dan menu_id
{
	$ci = get_instance();

	$ci->db->where('role_id', $role_id);
	$ci->db->where('menu_id', $menu_id);
	$result = $ci->db->get('user_access_menu'); //cari semua data dari tabel user_access_menuyang role_id nya berapa, menu_id nya berapa

	if ($result->num_rows() > 0) {
		return "checked ='checked'";
	}
}

function count_item()
{
	$ci = get_instance();

	$ci->load->model('item_model');
	return $ci->item_model->get();
}

function count_user_activation()
{
	$ci = get_instance();

	$ci->load->model('item_model');
	return $ci->item_model->get_user_activation();
}

function count_user()
{
	$ci = get_instance();

	$ci->load->model('item_model');
	return $ci->item_model->get_user();
}
