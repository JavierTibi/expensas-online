<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class CustomersModel extends CI_Model
{
    public function insert($data) {
        try {
            $this->db->insert('customers', $data);
        } catch (\Exception $exception) {
            print_r($exception);
        }

    }
}
