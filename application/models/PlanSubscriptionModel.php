<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PlanSubscriptionModel extends CI_Model {

    public function insertPlanSubscription($data) {
        $this->db->insert('plans_subscriptions', $data);
    }

    public function getActiveSubscriptions() {
        $this->db->where('active', true);
        return $this->db->get('plans_subscriptions')->result();
    }
}
