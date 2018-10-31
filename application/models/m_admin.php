<?php

class m_admin extends CI_Model{
	public function getUserLogin(){
		$value = $this->db->get('member');
		return $value;
	}
	public function getAdminLogin(){
		$value = $this->db->get('admin');
		return $value;
	}
	public function getWAdmin($admin){
		return $this->db->get_where('admin', array('USERNAME' => $admin));
	}
}