<?php

session_start();
if (!isset($_SESSION['admin'])) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Silahkan login !!')
                    window.location.href='cpanel';
                    </SCRIPT>");
}

class manage extends CI_Controller {

    //GENERAL HOME
    public function index() {
        $this->load->model('m_client');
        $this->load->view('v_market');
        $this->latestPost();
    }

    //USER
    public function deleteIklan() {
        $this->load->model('m_iklan');
        $id_iklan = $this->uri->segment(3);
        $this->db->where('ID_IKLAN', $id_iklan);
        $this->db->delete('iklan');
        redirect('manage/cekpost');
    }

    public function moderasiIklan() {
        $this->load->view('header');
        $this->load->model('m_iklan');
        $status = "Moderasi";
        $data['iklan'] = $this->m_iklan->getLatestIklan($status)->result();
        $this->load->view('v_moderasi_post', $data);
    }

    public function moderasiSubmit() {
        $id_iklan = $this->input->post('id');
        $data = array(
            'JUDUL' => $this->input->post('judul'),
            'FOTO_BARANG' => $this->input->post('foto'),
            'HARGA' => $this->input->post('harga'),
            'KATEGORI' => $this->input->post('kategori'),
            'DESKRIPSI' => $this->input->post('deskripsi'),
            'STATUS_BARANG' => $this->input->post('status')
        );
        $this->db->where('ID_IKLAN', $id_iklan);
        $this->db->update('iklan', $data);
        redirect('manage/moderasiIklan');
    }

    public function cekpost() {
        $this->load->view('header');

        $this->load->model('m_iklan');
        $data['iklan'] = $this->m_iklan->getIklan()->result();
        $this->load->view('v_cekpost', $data);
    }

    public function cekuser() {
        $this->load->view('header');
        $this->load->model('m_client');
        $data['member'] = $this->m_client->getUser()->result();
        $this->load->view('v_member', $data);
    }

    public function deleteuser() {
        $this->load->model('m_client');
        $user = $this->uri->segment(3);
        $this->db->where('USERNAME', $user);
        $this->db->delete('member');
        $this->db->where('USERNAME_MEMBER', $user);
        $this->db->delete('iklan');
        $this->db->where('USERNAME_MEMBER', $user);
        $this->db->delete('komentar');
        $this->db->where('TO_USERNAME', $user);
        $this->db->delete('pesan');
        redirect('manage/cekuser');
    }

}

?>