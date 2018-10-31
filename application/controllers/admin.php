<?php

class admin extends CI_Controller {

    //GENERAL HOME

    public function index() {
        session_start();

        $this->load->model('models');
        $this->load->view('cpanel');
    }

    //ADMIN
    public function adminValidate() {
        $this->load->model('m_admin');
        $admin = $this->input->post('admin');
        $pass = $this->input->post('pass');
        $data = $this->m_admin->getWAdmin($admin)->row_array();
        $vpass = $data['PASSWORD'];
        $vadmin = $data['USERNAME'];
        if ($admin == $vadmin) {
            if ($pass == $vpass) {
                session_start();
                $_SESSION['admin'] = $admin;
                redirect('admin/admin_panel');
            } else {
                echo "Salah";
            }
        } else {
            echo "Salah";
        }
    }

    public function cpanel() {
        session_start();
        if (isset($_SESSION['admin'])) {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Anda Sudah Login !!')
                    window.location.href='../admin/admin_panel';
                    </SCRIPT>");
        }
        $this->load->view('cpanel');
    }

    public function admin_panel() {
        session_start();
        if (!isset($_SESSION['admin'])) {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Silahkan login !!')
                    window.location.href='cpanel';
                    </SCRIPT>");
        } else {
            $this->load->view('header');
            $this->load->view('v_admin_panel');
        }
    }

    public function post_moderasi() {
        $this->load->view('v_moderasi_post');
    }
	public function logout(){
		session_start();
		session_destroy();
		redirect ('admin/cpanel');
	}

}

?>