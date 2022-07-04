<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UpCust extends AUTH_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_cust');
    }

    public function index()
    {
        $data['userdata']     = $this->userdata;
        $data['dataCust']     = $this->M_cust->select_all();

        $data['page']         = "upcust";
        $data['judul']         = "Data Customer";
        $data['deskripsi']     = "Manage Data Customer";

        $data['modal_tambah_cust'] = show_my_modal('modals/modal_tambah_cust', 'tambah-cust', $data);

        $this->template->views('update/update-cust', $data);
    }
}

/* End of file Kota.php */
/* Location: ./application/controllers/Kota.php */