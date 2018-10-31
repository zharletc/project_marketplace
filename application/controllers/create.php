<?php

class create extends CI_Controller {
    //GENERAL HOME
    public function index() {
        $this->load->view('header');
        $this->load->view('v_create');
    }
    //USER        
    public function createAccountSubmit() {
        $data = array(
            'NAMA' => $this->input->post('nama'),
            'EMAIL' => $this->input->post('email'),
            'USERNAME' => $this->input->post('user'),
            'PASSWORD' => md5($this->input->post('pass')),
        );
        $this->db->insert('member', $data);   
        redirect('home');
    }

}

?>