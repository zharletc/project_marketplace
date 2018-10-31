<?php

class m_pesan extends CI_Model{
	public function getPesan(){
		$value = $this->db->get('pesan');
		return $value;
	}
        public function getWLatestPesan($user){
		$value = $this->db->get_where('latest_pesan' , array('TO_USERNAME' => $user));
		return $value;
	}
        public function getBacaPesan($from,$to){
		$value = $this->db->get_where('latest_pesan' , array('FROM_USERNAME' => $from ,'TO_USERNAME' => $to ));
		return $value;
	}
        
}
