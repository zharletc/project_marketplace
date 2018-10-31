<?php

class m_komentar extends CI_Model {
    
    public function getKomentar() {
        $value = $this->db->get('komentar');
        return $value;
    }

    public function getWKomentar($id_iklan) {
        $value = $this->db->get_where('komentar', array('ID_IKLAN' => $id_iklan));
        return $value;
    }
    public function getStatusKomentar($user) {
        $value = $this->db->get_where('KOMENTAR', array('STATUS' => '1'));
        return $value;
    }

    public function deletekomentar($id) {
        $this->db->where('ID_KOMENTAR', $id);
        $this->db->delete('komentar');
    }

    public function getIDkomentar($id) {
        $value = $this->db->get_where('komentar', array('ID_KOMENTAR' => $id));
        return $value;
    }

    public function editkomentar($id, $data) {
        $this->db->where('ID_KOMENTAR', $id);
        $this->db->update('komentar', $data);
    }

}
