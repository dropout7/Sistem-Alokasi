<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cust extends AUTH_Controller
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
        $data['dataCustLit']     = $this->M_cust->select_all_little();

        $data['page']         = "cust";
        $data['judul']         = "Data Customer";
        $data['deskripsi']     = "Manage Data Customer";

        $data['modal_tambah_cust'] = show_my_modal('modals/modal_tambah_cust', 'tambah-cust', $data);

        $this->template->views('cust/home', $data);
    }

    public function tampil()
    {
        $data['dataCust'] = $this->M_cust->select_all();
        $data['dataCustLit'] = $this->M_cust->select_all_little();
        $this->load->view('cust/list_data', $data);
    }

    public function detail()
    {
        $data['userdata']     = $this->userdata;
        $id                 = trim($_POST['id']);
        $data['cust'] = $this->M_cust->select_by_id($id);

        echo show_my_modal('modals/modal_detail_cust1', 'detail-cust', $data, 'lg');
    }

    public function prosesUpdate()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('ip_publik', 'IP', 'trim|required');
        $this->form_validation->set_rules('detail', 'Detail', 'trim|required');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');

        $data = $this->input->post();
        if ($this->form_validation->run() == TRUE) {
            $result = $this->M_cust->update($data);

            if ($result > 0) {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data Customer Berhasil diupdate', '20px');
            } else {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data Customer Gagal diupdate', '20px');
            }
        } else {
            $out['status'] = 'form';
            $out['msg'] = show_err_msg(validation_errors());
        }

        echo json_encode($out);
    }

    public function prosesTambah()
    {
        $this->form_validation->set_rules('nama', 'Customer', 'trim|required');
        $this->form_validation->set_rules('ip_publik', 'IP', 'trim|required');
        $this->form_validation->set_rules('detail', 'Detail', 'trim|required');

        $data = $this->input->post();
        if ($this->form_validation->run() == TRUE) {
            $result = $this->M_cust->insert($data);

            if ($result > 0) {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data Customer Berhasil ditambahkan', '20px');
            } else {
                $out['status'] = '';
                $out['msg'] = show_err_msg('Data Customer Gagal ditambahkan', '20px');
            }
        } else {
            $out['status'] = 'form';
            $out['msg'] = show_err_msg(validation_errors());
        }

        echo json_encode($out);
    }

    public function delete()
    {
        $id = $_POST['id'];
        $result = $this->M_cust->delete($id);

        if ($result > 0) {
            echo show_succ_msg('Data Customer Berhasil dihapus', '20px');
        } else {
            echo show_err_msg('Data Customer Gagal dihapus', '20px');
        }
    }
}

/* End of file Kota.php */
/* Location: ./application/controllers/Kota.php */