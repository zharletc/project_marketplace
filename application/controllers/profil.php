<?php

class profil extends CI_Controller {

    public function index() {
        session_start();
        $this->load->model('m_client');
    }

    private function load_market() {
        $this->load->model('m_pesan');
        $user = $_SESSION['user'];
        $data = $this->m_pesan->getWLatestPesan($user)->result();
        return $data;
    }

    public function profilku() {
        session_start();
        $this->load->view('header');
        $this->load->model('m_client');
        $user = $_SESSION['user'];
        $data['user'] = $this->m_client->getWUser($user)->row_array();
        $data['pesan'] = $this->load_market();
        $data['count'] = $this->getNotif();
        $this->load->view('v_profilku', $data);
    }

    public function lihatprofil() {
        session_start();
        $this->load->view('header');
        $this->load->model('m_client');
        $user = $this->uri->segment(3);
        $data['user'] = $this->m_client->getWUser($user)->row_array();
        if (isset($_SESSION['user'])) {
            $data['pesan'] = $this->load_market();
        }

        $this->load->view('v_lihatprofil', $data);
    }

    public function editProfilSubmit() {
        session_start();
        $id = $_SESSION['user'];
        $getdir = $this->do_upload();
        $data = array(
            'NAMA' => $this->input->post('nama'),
            'EMAIL' => $this->input->post('email'),
            'USERNAME' => $this->input->post('user'),
            'TANGGAL_LAHIR' => $this->input->post('tgl_lahir'),
            'FOTO_PROFIL' => $getdir,
            'NO_HAPE' => $this->input->post('no_hape'),
        );
        $this->db->where('USERNAME', $id);
        $this->db->update('member', $data);
        redirect('market');
    }

    public function do_upload() {
        $config['upload_path'] = './assets/image/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 2000;
        $config['max_height'] = 2000;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $getfullpath = array('error' => $this->upload->display_errors());
        } else {
            $data = $this->upload->data();
            $getfullpath = $data['full_path'];
            $string = str_replace("C:/xampp/htdocs/", "http://localhost/", $getfullpath);
        }

        return $string;
    }

    public function editProfil() {
        session_start();
        $this->load->view('header');
        $this->load->model('m_client');
        $user = $_SESSION['user'];
        $data['pesan'] = $this->load_market();
        $data['user'] = $this->m_client->getWUser($user)->row_array();
        $data['count'] = $this->getNotif();
        $this->load->view('v_editProfil', $data);
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