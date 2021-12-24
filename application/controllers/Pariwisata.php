<?php

class Pariwisata extends CI_Controller
{

    public function index()
    {
        $this->load->model('Pariwisata_model');
        $data['satasa'] = $this->Pariwisata_model->getsata();

        $this->load->view('index/index', $data);
        $this->load->view('index/sejarah', $data);
        $this->load->view('index/wisata', $data);
        $this->load->view('index/team', $data);
        $this->load->view('index/footer');
    }

    public function insertWisata()
    {
        $nama_tmp   = $this->input->post('nama_tempat');
        $lokasi     = $this->input->post('lokasi');
        $desk       = $this->input->post('deskripsi');
        $image      = $_FILES['image'];
        if ($image = '') {
        } else {
            $config['upload_path']      = 'assets/upload';
            $config['allowed_types']    = 'jpg|png|gif';

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('image')) {
                echo "<script>alert('Gagal Upload Gambar!'); history.go(-1);</script>";
                die();
            } else {
                $image = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_tempat'       => $nama_tmp,
            'lokasi'            => $lokasi,
            'deskripsi'         => $desk,
            'image'             => $image
        );

        $this->Pariwisata_model->inputWisata($data, 'pariwisata');
        redirect('dashboard');
    }

    public function insertDataSaran()
    {
        $nama   = $this->input->post('nama');
        $email  = $this->input->post('email_user');
        $hp     = $this->input->post('nohp');
        $pesan  = $this->input->post('pesan');

        $data = array(
            'nama'          => $nama,
            'email_user'    => $email,
            'nohp'          => $hp,
            'pesan'         => $pesan
        );

        $this->Pariwisata_model->inputSaran($data, 'saran');

        redirect('#contact');
    }
}