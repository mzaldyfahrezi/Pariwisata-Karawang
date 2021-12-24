<?php

class Home extends CI_Controller
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
        $this->load->model('Admin_model');
        $dataA['admin'] = $this->Admin_model->getData();

        $this->load->view('template/header');
        $this->load->view('template/sidebar', $dataA);
        $this->load->view('dashboard/index');
        $this->load->view('template/footer');
    }
}