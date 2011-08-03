<?php

class Mahasiswa extends Controller {

    function Mahasiswa() {
        parent::Controller();
        $this->load->model('model_mahasiswa');
    }

    function index() {
        $data['mahasiswas']=$this->model_mahasiswa->get();
        $this->load->view('tampil_mahasiswa',$data);
    }

}
?>
