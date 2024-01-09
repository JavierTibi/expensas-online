<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class LoteCobroModel extends CI_Model
{
    public function createLoteCobro($subscriptions) {
        foreach ($subscriptions as $subscription) {
            $data = array(
                'subscription_id' => $subscription->subscription_id,
                'period' => date('Y-m'),
                'amount' => $subscription->amount,
                'status' => 'generado'
            );

            $this->db->insert('lote_cobro', $data);
        }
    }

    public function getLoteCobroDetail($period) {
        $this->db->where('period', $period);
        return $this->db->get('lote_cobro')->result();
    }

    public function getLoteCobroSummary() {
        $this->db->select('lote_cobro_id, SUM(amount) as total_amount, COUNT(*) as total_cobros');
        $this->db->group_by('lote_cobro_id');
        return $this->db->get('lote_cobro')->result();
    }
}
