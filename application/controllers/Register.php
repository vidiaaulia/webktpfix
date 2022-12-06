<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('ktp/registrasi');
    }

    public function proses()
    {
        $this->form_validation->set_rules('nama', 'nama', 'trim|required|min_length[1]|max_length[255]');
        if ($this->form_validation->run() == true) {     
            		'nik'					=> $_POST['nik'],
					'nama'					=> $_POST['nama'],
					'tempat_tanggal_lahir'	=> $_POST['tempat_tanggal_lahir'],
					'id_kategori'			=> $_POST['id_kategori'],
					'goldar'				=> $_POST['goldar'],
					'rt_rw'					=> $_POST['rt_rw'],
					'kel_desa'				=> $_POST['kel_desa'],
					'kecamatan'				=> $_POST['kecamatan'],
					'agama'					=> $_POST['agama'],
					'status_perkawinan'		=> $_POST['status_perkawinan'],
					'pekerjaan'				=> $_POST['pekerjaan'],
					'kewarganegaraan'		=> $_POST['kewarganegaraan'],
					'berlaku_hingga'		=> $_POST['berlaku_hingga'],
					'scan_kk'				=> $upload_data['orig_name'],
					'scan_surat'			=> $upload_data['orig_name'],

            $this->M_regis->register($nik, $nama, $tempat_tanggal_lahir, $id_kategori, $goldar );

            $this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
            redirect('Auth');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('Register');
        }
    }
}