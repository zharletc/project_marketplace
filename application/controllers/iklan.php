<?php

class iklan extends CI_Controller {

    //GENERAL HOME
    public function index() {
        session_start();
        $this->load->model('m_client');
        $this->load->view('v_market');
    }

    //USER
    public function pasangiklan() {
        session_start();
        $this->load->view('header');
        $this->load->view('v_pasangiklan');
    }

    public function pasangiklanSubmit() {
        $getdir = $this->do_upload();
        $data = array(
            'USERNAME_MEMBER' => $this->input->post('user'),
            'JUDUL' => $this->input->post('judul'),
            'FOTO_BARANG' => $getdir,
            'HARGA' => $this->input->post('harga'),
            'KATEGORI' => $this->input->post('kategori'),
            'DESKRIPSI' => $this->input->post('deskripsi'),
            'STATUS_BARANG' => "Moderasi"
        );
        $this->db->insert('iklan', $data);
        redirect('iklan/iklanku');
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
            $string = "Tidak ada foto";
        } else {
            $data = $this->upload->data();
            $getfullpath = $data['full_path'];
            $string = str_replace("C:/xampp/htdocs/", "http://localhost/", $getfullpath);
        }

        return $string;
    }

    public function editIklan() {
        session_start();

        $this->load_navigation();
        $this->load->model('m_iklan');
        $this->load->view('header');
        $user = $_SESSION['user'];
        $id_iklan = $this->uri->segment(3);
        $data['iklan'] = $this->m_iklan->getWEditIklan($id_iklan, $user)->row_array();
        $this->load->view('v_editIklan', $data);
    }

    public function deleteIklan() {
        $this->load->model('m_iklan');
        $id_iklan = $this->uri->segment(3);
        $this->db->where('ID_IKLAN', $id_iklan);
        $this->db->delete('iklan');
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function load_navigation() {
        $this->load->model('m_pesan');
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
        } else {
            $user = $this->uri->segment(3);
        }
        $data['count'] = $this->getNotif();
        $data['pesan'] = $this->m_pesan->getWLatestPesan($user)->result();
        $this->load->view('v_iklan', $data);
    }

    public function editIklanSubmit() {
        $getdir = $this->do_upload();
        $id_iklan = $this->input->post('id');
        if (stripos($getdir, "http://localhost") !== false) {
            $getdir = $getdir;
        } else {
            $getdir = $this->input->post('foto');
        }
        $data = array(
            'JUDUL' => $this->input->post('judul'),
            'FOTO_BARANG' => $getdir,
            'HARGA' => $this->input->post('harga'),
            'KATEGORI' => $this->input->post('kategori'),
            'DESKRIPSI' => $this->input->post('deskripsi'),
            'STATUS_BARANG' => $this->input->post('status')
        );
        $this->db->where('ID_IKLAN', $id_iklan);
        $this->db->update('iklan', $data);
        redirect('iklan/iklanku');
    }

    public function deleteFoto() {
        $id_iklan = $this->uri->segment(3);
        $value = array(
            'FOTO_BARANG' => "NULL",
        );
        $this->load->model('m_iklan');
        $this->m_iklan->deletefoto($id_iklan, $value);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function komentarSubmit() {
        $user = $this->input->post('user');
        $status = '0';
        $id = $this->input->post('id');
        $this->load->model('m_iklan');
        $coba = $this->m_iklan->getWLihatIklan($id , "Ready")->row_array();
        $userown = $coba['USERNAME_MEMBER'];
        if($user == $userown){
            $status = '0';
        }else{
            $status = '1' ;
        }
        $data = array(
            'ID_IKLAN' => $id,
            'USERNAME_MEMBER' => $user,
            'KOMENTAR' => $this->input->post('komentar'),
            'STATUS' => $status
        );
        $this->db->insert('komentar', $data);
        redirect('market/lihatiklan/' . $id);
    }

    public function deletekomentar() {
        session_start();
        $id = $this->uri->segment(3);
        if (isset($_SESSION['user'])) {
            $this->load->model('m_komentar');
            $this->m_komentar->deletekomentar($id);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

    public function editkomentar() {
        session_start();
        $id = $this->uri->segment(3);
        $this->load->model('m_komentar');
        $data['komentar'] = $this->m_komentar->getIDkomentar($id)->row_array();
        $this->load->view('v_editkomentar', $data);
        $link = $data['komentar']['ID_IKLAN'];
        $_SESSION['link'] = "market/lihatiklan/$link";
        
    }

    public function editkomentarsubmit() {
        session_start();
        $this->load->model('m_komentar');
        $id = $this->input->post('id');
        $data = array(
            'KOMENTAR' => $this->input->post('komentar')
        );
        $link = $_SESSION['link'];
        $this->m_komentar->editkomentar($id, $data);
        redirect($link);
    }

    public function iklanku() {
        session_start();
        $user = $_SESSION['user'];
        $this->load->view('header');
        $this->load->model('m_iklan');
        $this->load_navigation();
        $data['iklan'] = $this->m_iklan->getWIklan($user)->result();
       
        $this->load->view('v_iklanku', $data);
    }

    public function iklanuser() {
        session_start();
        $user = $this->uri->segment(3);
        $this->load->view('header');
        $this->load->model('m_iklan');
        $this->load_navigation();
        $data['iklan'] = $this->m_iklan->getWIklan($user)->result();
        $this->load->view('v_iklanuser', $data);
    }

    public function search() {
        //$search = $this->uri->segment(3);
        $this->load->model('m_iklan');
        $data['cari'] = $this->input->post('inputsearch');
        $data['judul'] = $this->m_iklan->getIklan()->result();
        $this->load->view('v_resultiklan', $data);
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