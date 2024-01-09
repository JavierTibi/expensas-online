<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PlanSubscriptionController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('PlanSubscriptionModel');
    }

    public function createSubscription() {
        $customer_id = $this->input->post('customer_id');
        $plan_id = $this->input->post('plan_id');
        $active = $this->input->post('active');

        $data = array(
            'customer_id' => $customer_id,
            'plan_id' => $plan_id,
            'active' => $active
        );

        $this->PlanSubscriptionModel->insertPlanSubscription($data);

    }

    public function getActiveSubscriptions() {
        $activeSubscriptions = $this->PlanSubscriptionModel->getActiveSubscriptions();

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($activeSubscriptions));
    }
}
