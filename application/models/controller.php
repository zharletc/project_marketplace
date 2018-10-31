<?php

class create extends CI_Controller {
    //GENERAL HOME
    public function index() {
        $this->load->view('header');
       //manggil apa aja
    }
    //USER        
    public function create() {
        $data = array(
            'COLUMN1' => $this->input->post('var_post'),
            'COLUMN..N' => $this->input->post('var_post')
        );
        $this->db->insert('member', $data);   
    }
	public function select_where() {
        session_start();
        $this->load->model('model');
        $id_iklan = $this->uri->segment(3);
        $data['iklan'] = $this->model->get_select_where($variable)->row_array();
        $this->load->view('v_editIklan', $data);
    }
	public function update() {
        $id_iklan = $this->input->post('postt.....');
        $data = array(
            'JUDUL' => $this->input->post('judul'),
            'FOTO_BARANG' => $this->input->post('foto')
        );
        $this->db->where('COLUMn', $id_iklan);
        $this->db->update('table', $data);
        redirect('iklan/iklanku');
    }

    public function delete() {
        $this->load->model('model');
        $id_iklan = $this->uri->segment(3);
        $this->db->where('COLUMN', $var);
        $this->db->delete('table');
        redirect('market');
    }

}

?>