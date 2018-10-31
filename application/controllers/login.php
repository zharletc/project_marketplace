<?php

session_start();
if (isset($_SESSION['user'])) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Anda Sudah Login BOSS !!')
                    window.location.href='market';
                    </SCRIPT>");
}

class login extends CI_Controller {

    //GENERAL HOME

    public function index() {
        $this->load->model('m_client');
        $this->load->view('v_login');
    }

    //USER

    public function loginValidate() {
        $this->load->model('m_client');
        $user = $this->input->post('user');
        $pass = md5($this->input->post('pass'));
        $data = $this->m_client->getWUser($user)->row_array();
        $vpass = $data['PASSWORD'];
        $vuser = $data['USERNAME'];
        if ($user == $vuser) {
            if ($pass == $vpass) {
                session_start();
                $_SESSION['user'] = $user;
                header('Location: ../market');
            } else {
                echo "Login Gagal!";
            }
        } else {
            echo "Salah";
        }
    }

    public function email() {
        $email = $this->input->post('email');
        $this->load->model('m_client');
        $data = $this->m_client->getWEmail($email)->row_array();
        $vuser = $data['EMAIL'];
        if ($email == $vuser) {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Email Benar , silahkan masukan password')
                    ;
                    </SCRIPT>");
            $this->inputpassword($vuser);
           
        } else {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Email Salah !!')
                   window.location.href='resetpassword';
                    </SCRIPT>");
        }
    }

    public function resetpassword() {
        $this->load->view('v_inputmail');
    }

    public function inputpassword($email) {
        $data['email'] = $email;
        $this->load->view('v_inputpass', $data);
    }

    public function passwordsubmit() {
        $email = $this->input->post('email');
        $data = md5($this->input->post('pass'));
        $this->load->model('m_client');
        $this->m_client->submitreset($email,$data);
        redirect('login');
    }

}

?>