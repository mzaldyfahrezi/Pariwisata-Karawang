<?php

class Dashboard extends CI_Controller
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
        $this->load->model('Pariwisata_model');
        $data2['content'] = $this->Pariwisata_model->getsata();

        $this->load->model('Admin_model');
        $dataA['admin'] = $this->Admin_model->getData();

        $this->load->view('template/header');
        $this->load->view('template/sidebar', $dataA);
        $this->load->view('dashboard/v_pariwisata', $data2);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['pariwisata'] = $this->Pariwisata_model->edit_data($where, 'pariwisata')->result();

        $this->load->model('Admin_model');
        $dataA['admin'] = $this->Admin_model->getData();

        $this->load->view('template/header');
        $this->load->view('template/sidebar', $dataA);
        $this->load->view('dashboard/v_edit', $data);
        $this->load->view('template/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama_tempat = $this->input->post('nama_tempat');
        $lokasi = $this->input->post('lokasi');
        $deskripsi = $this->input->post('deskripsi');
        // $image = $this->input->post('image');
        $image     = $_FILES['image'];
        if ($image = '') {
        } else {
            $config['upload_path']      = 'assets/upload';
            $config['allowed_types']    = 'jpg|png|gif';

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                echo "Gagal Upload Gambar!";
                die();
            } else {
                $image = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_tempat'       => $nama_tempat,
            'lokasi'            => $lokasi,
            'deskripsi'         => $deskripsi,
            'image'             => $image
        );

        $where = array(
            'id' => $id
        );

        $this->Pariwisata_model->update_data($where, $data, 'pariwisata');
        redirect('Dashboard/index');
    }

    public function hapus($id)
    {
        $data = array('id' => $id);
        $this->Pariwisata_model->hapus_data($data, 'pariwisata');
        redirect('Dashboard/index');
    }
}