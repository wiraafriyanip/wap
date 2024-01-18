<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index()
    {
        //load view form register
        $this->load->view('auth/register_view');
    }

    public function simpan()
    {
        //load model M_user
        $this->load->model('Auth_model');

        $data = array(
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'username'       => $this->input->post('username'),
            'email'       => $this->input->post('email'),
            'password'       => password_hash($this->input->post('password'), PASSWORD_DEFAULT),    
        );

        //insert data via model
        $register = $this->Auth_model->simpan_register($data);

        //cek apakah data berhasil tersimpan
        if($register) {

            echo "success";

        } else {

            echo "error";

        }

    }

}