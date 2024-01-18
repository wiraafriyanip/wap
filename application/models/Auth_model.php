<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_model {

    // fungsi simpan data register
    public function simpan_register($data) {

        return $this->db->insert("tbl_users", $data);

    }
}