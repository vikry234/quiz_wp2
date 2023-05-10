<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiswaController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('SiswaModel'); // Memuat model SiswaModel
    }

    public function index()
    {
        $this->load->view('siswa/form_input');
    }

    public function simpanData()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama')
        );

        $this->SiswaModel->simpanDataSiswa($data); // Memanggil method simpanDataSiswa pada model

        $this->load->view('siswa/berhasil', $data);
    }

}
