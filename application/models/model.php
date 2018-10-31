<?php

class m_admin extends CI_Model{
	public function fungsi_select(){
		$value = $this->db->get('table...');
		return $value;
	}
	public function fungsi_select_where($var){
		return $this->db->get_where('table..', array('COLUMN' => $var));
	}
}