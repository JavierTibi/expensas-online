<?php

class LoteCobroController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('PlanSubscriptionModel');
        $this->load->model('LoteCobroModel');
    }

    public function generateLoteCobro() {
        $activeSubscriptions = $this->PlanSubscriptionModel->getActiveSubscriptions();

        if (!empty($activeSubscriptions)) {
            // Crear un lote de cobro con las suscripciones activas
            $this->LoteCobroModel->createLoteCobro($activeSubscriptions);
        } else {
            echo 'No hay suscripciones activas para procesar en el lote de cobro.';
        }
    }

    public function getLoteCobroDetail($period) {
        $loteCobroDetail = $this->LoteCobroModel->getLoteCobroDetail($period);

        // Responder en formato JSON
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($loteCobroDetail));
    }

    public function getLoteCobroSummary() {
        $loteCobroSummary = $this->LoteCobroModel->getLoteCobroSummary();

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($loteCobroSummary));
    }

}
