<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perangkat extends AUTH_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_perangkat');
    }

    public function index()
    {
        $data['userdata']     = $this->userdata;
        $data['dataPerangkat']     = $this->M_perangkat->select_all();

        $data['page']         = "perangkat";
        $data['judul']         = "Data Perangkat";
        $data['deskripsi']     = "Manage Data Perangkat";

        $data['modal_tambah_perangkat'] = show_my_modal('modals/modal_tambah_perangkat', 'tambah-perangkat', $data);

        $this->template->views('perangkat/home', $data);
    }

    public function tampil()
    {
        $data['dataPerangkat'] = $this->M_perangkat->select_all();
        $this->load->view('perangkat/list_data', $data);
    }

    public function detail()
    {
        $data['userdata']     = $this->userdata;

        $id                 = trim($_POST['id']);
        $data['perangkat'] = $this->M_perangkat->select_by_id($id);

        echo show_my_modal('modals/modal_detail_perangkat', 'detail-perangkat', $data, 'lg');
    }

    public function prosesUpdate()
    {
        $this->form_validation->set_rules('nama', 'Perangkat', 'trim|required');
        $this->form_validation->set_rules('ip_address', 'IP', 'trim|required');
        $this->form_validation->set_rules('detail', 'Detail', 'trim|required');

        $data = $this->input->post();
        if ($this->form_validation->run() == TRUE) {
            $result = $this->M_perangkat->update($data);

            if ($result > 0) {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data Perangkat Berhasil diupdate', '20px');
            } else {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data Perangkat Gagal diupdate', '20px');
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
        $this->form_validation->set_rules('ip_address', 'IP', 'trim|required');
        $this->form_validation->set_rules('detail', 'Detail', 'trim|required');
        $this->form_validation->set_rules('bts', 'bts', 'trim|required');

        $data = $this->input->post();
        if ($this->form_validation->run() == TRUE) {
            $result = $this->M_perangkat->insert($data);

            if ($result > 0) {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data Perangkat Berhasil ditambahkan', '20px');
            } else {
                $out['status'] = '';
                $out['msg'] = show_err_msg('Data Perangkat Gagal ditambahkan', '20px');
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
        $result = $this->M_perangkat->delete($id);
        header("Refresh:0");

        if ($result > 0) {
            echo show_succ_msg('Data Perangkat Berhasil dihapus', '20px');
        } else {
            echo show_err_msg('Data Perangkat Gagal dihapus', '20px');
        }
    }

    public function export()
	{
		error_reporting(E_ALL);

		include_once './assets/phpexcel/Classes/PHPExcel.php';
		$objPHPExcel = new PHPExcel();

		$data = $this->M_perangkat->select_all();

		$objPHPExcel = new PHPExcel();
		$objPHPExcel->setActiveSheetIndex(0);

		$objPHPExcel->getActiveSheet()->SetCellValue('', "ID");
		$objPHPExcel->getActiveSheet()->SetCellValue('', "Perangkat");
		$objPHPExcel->getActiveSheet()->SetCellValue('', "IP Address");
		$objPHPExcel->getActiveSheet()->SetCellValue('', "BTS");

		$rowCount = 2;
		foreach ($data as $value) {
			$objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $value->id);
			$objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $value->nama);
			$objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $value->ip_address);
			$objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $value->bts);
			$rowCount++;
		}

		$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
		$objWriter->save('./assets/excel/Data Kota.xlsx');

		$this->load->helper('download');
		force_download('./assets/excel/Data Kota.xlsx', NULL);
	}

}

/* End of file Kota.php */
/* Location: ./application/controllers/Kota.php */