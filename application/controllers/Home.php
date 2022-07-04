<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends AUTH_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_perangkat');
		$this->load->model('M_cust');
		$this->load->model('M_catatan');
	}

	public function index()
	{
		$data['jml_perangkat'] 	= $this->M_perangkat->total_rows();
		$data['jml_cust'] 	= $this->M_cust->total_rows();
		$data['jml_catatan'] = $this->M_catatan->total_rows();
		$data['userdata'] 		= $this->userdata;

		$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');


		$data['dataCatatan'] = $this->M_catatan->select_all();
		$data['dataCust'] = $this->M_cust->select_all();
		$data['dataCustLit'] = $this->M_cust->select_all_little();
		$data['dataPerangkatLit'] = $this->M_perangkat->select_all_little();
		$data['dataCatatanNotif'] = $this->M_catatan->select_notif();

		$data['page'] 			= "home";
		$data['judul'] 			= "Beranda";
		$data['deskripsi'] 		= "Manage Data CRUD";
		$this->template->views('home', $data);
	}
	public function tampilCatatan()
    {
        $data['dataCatatan'] = $this->M_catatan->select_all();
        $this->load->view('list_catatan', $data);
    }
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */