<?php

class m_iklan extends CI_Model {

    public function getIklan() {
        $value = $this->db->get('iklan');
        return $value;
    }

    public function getLatestIklan($status) {
        $value = $this->db->get_where('latest_iklan', array('STATUS_BARANG' => $status));
        return $value;
    }

    public function getWIklan($user) {
        $value = $this->db->get_where('latest_iklan', array('USERNAME_MEMBER' => $user));
        return $value;
    }

    public function getWLihatiklan($id_iklan, $status) {
        $value = $this->db->get_where('latest_iklan', array('ID_IKLAN' => $id_iklan, 'STATUS_BARANG' => $status));
        return $value;
    }

    public function getWEditIklan($id_iklan, $user) {
        $value = $this->db->get_where('latest_iklan', array('ID_IKLAN' => $id_iklan, 'USERNAME_MEMBER' => $user));
        return $value;
    }

    public function getJudulIklan() {
        $this->db->select('JUDUL');
        $this->db->from('iklan');
        return $this->db->get()->result();
    }

    public function deletefoto($id_iklan , $value) {
        $this->db->where('ID_IKLAN', $id_iklan);
        $this->db->update('iklan', $value);
    }
    
    

}
