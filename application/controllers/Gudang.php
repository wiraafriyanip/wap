<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gudang extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index() {
        $keyword = $this->input->get('q');
        $data['barang'] = $this->Barang_model->get_barang($keyword);
        $this->load->view('gudang/index', $data);
    }

    public function tambah_barang() {
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('kategori_barang', 'Kategori', 'required');
        $this->form_validation->set_rules('stok_barang', 'stok', 'required');
        $this->form_validation->set_rules('harga_grosir', 'Harga Grosir', 'required|numeric');
        $this->form_validation->set_rules('harga_ecer', 'Harga Ecer', 'required|numeric');
        $this->form_validation->set_rules('harga_sales', 'Harga sales', 'required|numeric');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('gudang/tambah_barang');
        } else {
            $data = array(
                'nama_barang' => $this->input->post('nama_barang'),
                'kategori_barang' => $this->input->post('kategori_barang'),
                'stok_barang' => $this->input->post('stok_barang'),
                'harga_grosir' => $this->input->post('harga_grosir'),
                'harga_ecer' => $this->input->post('harga_ecer'),
                'harga_sales' => $this->input->post('harga_sales')
                
                
            );
            $this->Barang_model->tambah_barang($data);
            redirect('gudang');
        }
    }

    public function edit_barang($id) {
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('kategori_barang', 'Kategori', 'required');
        $this->form_validation->set_rules('stok_barang', 'stok', 'required');
        $this->form_validation->set_rules('harga_grosir', 'Harga Grosir', 'required|numeric');
        $this->form_validation->set_rules('harga_ecer', 'Harga Ecer', 'required|numeric');
        $this->form_validation->set_rules('harga_sales', 'Harga sales', 'required|numeric');

        if ($this->form_validation->run() === FALSE) {
            $data['barang'] = $this->Barang_model->get_barang_by_id($id);
            $this->load->view('gudang/edit_barang', $data);
        } else {
            $data = array(
                'nama_barang' => $this->input->post('nama_barang'),
                'kategori_barang' => $this->input->post('kategori_barang'),
                'stok_barang' => $this->input->post('stok_barang'),
                'harga_grosir' => $this->input->post('harga_grosir'),
                'harga_ecer' => $this->input->post('harga_ecer'),
                'harga_sales' => $this->input->post('harga_sales')
            );
            $this->Barang_model->edit_barang($id, $data);
            redirect('gudang');
        }
    }

    public function hapus_barang($id) {
        $data = array(
            'status_hapus' => 1
        );
        $this->Barang_model->hapus_barang($id, $data);
        redirect('gudang');
    }
}
