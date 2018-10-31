<?php
session_start();
class pesan extends CI_Controller {

    //GENERAL HOME
    public function index() {
        session_start();
        $this->load->view('v_create');
    }
    //USER    
    public function cekpesan() {
        	
        $this->load->view('header');
        $this->load->model('m_pesan');
        $to = $_SESSION['user'];
        $data['pesan'] = $this->m_pesan->getWLatestPesan($to)->result();
		$this->load_navigation();
		$this->kirimpesan();
        $this->load->view('v_pesanmasuk' , $data);    
    }
    public function bukapesan() {
        
        $from = $this->uri->segment(3);
        $to = $_SESSION['user'];
        $this->load->model('m_pesan');
        $data['pesan'] = $this->m_pesan->getBacaPesan($from , $to)->result();
        $this->load->view('v_bukapesan' , $data);
    }
     public function load_navigation() {
        $this->load->model('m_pesan');
        if(isset($_SESSION['user'])){
             $user = $_SESSION['user'];
            
        }else{
             $user = $this->uri->segment(3);
        }    
        $data = $this->m_pesan->getWLatestPesan($user)->result();
        return $data;
    }
    public function kirimpesan() {
        $to['pesan'] = $this->load_navigation();
        $this->load->view('header');
        $to['user'] = $this->uri->segment(3);
        $this->load->view('v_pesan', $to);
    }

    public function submit() {
        $user = $this->input->post('from');
        $data = array(
            'TO_USERNAME' => $this->input->post('to'),
            'FROM_USERNAME' => $user,
            'PESAN' => $this->input->post('pesan'),
            'STATUS' => 1            
        );
        $this->db->insert('pesan', $data);
        header('Location: ' . '../market');
    }

}

?>