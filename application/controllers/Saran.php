<?php

class Saran extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }

    public function index()
    {
        $this->load->model('Saran_model');
        $data2['saran'] = $this->Saran_model->getsata();

        $this->load->model('Admin_model');
        $dataA['admin'] = $this->Admin_model->getData();

        $this->load->view('template/header');
        $this->load->view('template/sidebar', $dataA);
        $this->load->view('dashboard/v_saran', $data2);
        $this->load->view('template/footer');
    }

    public function hapus_saran($id)
    {
        $data = array('id' => $id);
        $this->Saran_model->hapus_data($data, 'saran');
        redirect('Saran/index');
    }
}