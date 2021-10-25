<?php

defined('BASEPATH') or exit('No direct script access allowed');

class sertifikasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_test');
    }

    

    public function index()
    {
        
        $data['title'] = "Sertifikasi";
        $this->load->view('header', $data);
        $this->load->view('sertifikasi/sidebar');
        $this->load->view('sertifikasi/dashboard');
        $this->load->view('footer');
    }

    public function test()
    {
        $data['title'] = "Sertifikasi";
        $this->load->view('header', $data);
        $this->load->view('sertifikasi/sidebar');
        $this->load->view('sertifikasi/dashboard');
        $this->load->view('footer');
    }

    public function post()
    {
        $data['title'] = "Sertifikasi || POST";
        $this->load->view('header', $data);
        $this->load->view('sertifikasi/sidebar');
        $this->load->view('sertifikasi/post');
        $this->load->view('footer');
        
    }

    public function lihat()
    {
        $data['title'] = "Sertifikasi || LIHAT";
        $data['id'] = $this->input->get('id');
        $this->load->view('header', $data);
        $this->load->view('sertifikasi/sidebar');
        $this->load->view('sertifikasi/lihat', $data);
        $this->load->view('footer');
    }

    public function about()
    {
        $data['title'] = "Sertifikasi || ABOUT";
        $this->load->view('header', $data);
        $this->load->view('sertifikasi/sidebar');
        $this->load->view('sertifikasi/about');
        $this->load->view('footer');
    }

    function download($nama)
    {
        $this->load->helper('download');
        force_download('./uploads/'.$nama, NULL);
    }

    public function hapus()
    {
        $id = $this->input->get('id');
        $this->model_test->hapus($id);
        redirect('sertifikasi/test','refresh');
    }

    // upload pdf
    public function insert()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'pdf';
                $config['max_size']             = 0;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('namaFile'))
                {
                        $this->session->set_flashdata('error','File harus PDF!');

                        $this->post();
                }
                else
                {
                        $upload_data = $this->upload->data();
                        $data = array(
                            'nomor' => $this->input->post('nomor'),
                            'kategori' => $this->input->post('kategori'),
                            'judul' => $this->input->post('judul'),
                            'namaFile' => $upload_data['file_name']
                        );

                        $this->session->set_flashdata('success','Data Berhasil Disimpan');
                        $this->model_test->insert($data);
                        redirect('sertifikasi/test','refresh');
                        

                }
        }
    
}
