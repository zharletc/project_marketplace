<?php

class m_client extends CI_Model {

    public function getUser() {
        $value = $this->db->get('member');
        return $value;
    }

    public function getUserLogin() {
        $value = $this->db->get('member');
        return $value;
    }

    public function getWUser($user) {
        return $this->db->get_where('member', array('USERNAME' => $user));
    }
     public function getWEmail($email) {
        return $this->db->get_where('member', array('EMAIL' => $email));
    }
    public function submitreset($email , $data){
        $this->db->where('EMAIL', $email);
        $this->db->update('member', array('PASSWORD'=> $data));
    }


}
