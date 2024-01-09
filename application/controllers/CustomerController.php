<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('CustomersModel');
    }

    public function create() {

        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $charge_type = $this->input->post('charge_type');

        $data = array(
            'customer_id' => $name,
            'plan_id' => $email,
            'active' => $charge_type
        );

        $this->CustomersModel->insert($data);

    }
}
