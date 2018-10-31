<?php

session_start();

class market extends CI_Controller {

    //GENERAL HOME
    public function index() {
        if (!isset($_SESSION['user'])) {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Silahkan Login Terlebih Dahulu !!')
                    window.location.href='login';
                    </SCRIPT>");
        }
        $this->load->view('header');
        $this->load->model('m_client');
        $this->load_market();
        $this->latestPost();
    }

    //USER
    public function load_market() {
        $this->load->model('m_pesan');
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $data['pesan'] = $this->m_pesan->getWLatestPesan($user)->result();
            $data['count'] = $this->getNotif();
            $this->load->view('v_market', $data);
        }
    }

    public function pasangiklan() {
        session_start();
        $this->load->view('v_pasangiklan');
    }

    public function notification() {
        $id = $_SESSION['user'];
        $data = array(
            'STATUS' => '0'
        );
        $this->db->where('TO_USERNAME', $id);
        $this->db->update('pesan', $data);
        redirect('pesan/cekpesan');
    }
    public function cekkomment() {
        $id = $this->uri->segment(3);
        $data = array(
            'STATUS' => '0'
        );
        $this->db->where('ID_IKLAN', $id);
        $this->db->update('komentar', $data);
        redirect('market/lihatiklan/'.$id);
    }

    public function komentarmasuk() {
        $this->load->model('m_komentar');
        $this->load->model('m_iklan');
        $user = $_SESSION['user'];
        $data = $this->m_komentar->getStatusKomentar($user)->result();
        $iklan = $this->m_iklan->getWIklan($user)->result();
        foreach ($iklan as $output2) {
            $temp = $output2->ID_IKLAN;
            foreach ($data as $output) {
                $temp2 = $output->ID_IKLAN;
                if ($temp2 == $temp) {
                   $temp3[] = $output2;
                }
            }
        }
        $simpan['iklan'] = $temp3;
        if(!isset($temp3)){
              echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Tidak ada Notifikasi Komentar Masuk')
                    window.history.back();
                    </SCRIPT>");
        }else{
            $this->load->view('v_notifkommentar' , $simpan);
        }        
    }

    public function latestPost() {
        $this->load->model('m_iklan');
        $status = "Ready";
        $data['iklan'] = $this->m_iklan->getLatestIklan($status)->result();
        $this->load->view('v_latestpost', $data);
    }

    public function lihatiklan() {

        $this->load->view('header');
        $this->load->model('m_iklan');
        $id_iklan = $this->uri->segment(3);

        $this->load_market();
        $status = "Ready";
        $data['iklan'] = $this->m_iklan->getWLihatiklan($id_iklan, $status)->result();
        $data['komentar'] = $this->komentar($id_iklan);
        $this->load->view('v_lihatiklan', $data);
    }

    public function komentar($id_iklan) {
        $this->load->model('m_komentar');
        $data = $this->m_komentar->getWKomentar($id_iklan)->result();
        return $data;
    }

    public function getNotif() {
        $this->load->model('m_komentar');
        $this->load->model('m_iklan');
        $user = $_SESSION['user'];
        $data = $this->m_komentar->getStatusKomentar($user)->result();
        $iklan = $this->m_iklan->getWIklan($user)->result();
        $counter = 0;
        foreach ($iklan as $output2) {
            $temp = $output2->ID_IKLAN;
            foreach ($data as $output) {
                $temp2 = $output->ID_IKLAN;
                if ($temp2 == $temp) {
                    $counter++;
                }
            }
        }
        return $counter;
    }

}

?>