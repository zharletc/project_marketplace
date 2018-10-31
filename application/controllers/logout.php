<?php

class logout extends CI_Controller {

    //GENERAL HOME

    public function index() {
        session_start();
        session_destroy();
        redirect('login');
    }

    //USER

}

?>