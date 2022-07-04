<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catatan extends AUTH_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_catatan');
    }


    public function tampil()
    {
        $data['dataCatatanNotif'] = $this->M_catatan->select_notif();
        $data['dataCatatan'] = $this->M_catatan->select_all();
        $this->load->view('list_catatan', $data);
    }

    public function detail()
    {
        $data['userdata']     = $this->userdata;

        $id                 = trim($_POST['id']);
        $data['catatan'] = $this->M_catatan->select_by_id($id);

        echo show_my_modal('modals/modal_detail_catatan', 'detail-catatan', $data, 'lg');
    }

    public function prosesTambah()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('detail', 'detail', 'trim|required');

        $data = $this->input->post();
        if ($this->form_validation->run() == TRUE) {
            $result = $this->M_catatan->insert($data);

            if ($result > 0) {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data Catatan Berhasil ditambahkan', '20px');
            } else {
                $out['status'] = '';
                $out['msg'] = show_err_msg('Data Catatan Gagal ditambahkan', '20px');
            }
        } else {
            $out['status'] = 'form';
            $out['msg'] = show_err_msg(validation_errors());
        }
        // Keep the old input values upon redirect so they can be used by the `old()` function
        return redirect()->back()->withInput(); 
    }

    public function delete($id)
    {

        $where = array('id' => $id);
		$this->M_catatan->delete($where,'catatan');
		redirect('Home/');
    }

    function tambah_status($id){
        $where = array('id' => $id);
		$this->M_catatan->input_status($where);
		redirect('Home/');
	}

    function update_status($id){
        $where = array('id' => $id);
		$this->M_catatan->input_status0($where);
		redirect('Home/');
	}
    
}

/* End of file .php */
/* Location: ./application/controllers/.php */