<?php

class Mahasiswa extends Controller {

    function Mahasiswa() {
        parent::Controller();
        $this->load->model('model_mahasiswa');
    }

    function index() {
        $data['mahasiswas'] = $this->model_mahasiswa->get();
        $this->load->view('tampil_mahasiswa', $data);
    }

    function tambah() {
        $config = array(
            array(
                'field' => "nim",
                'label' => "Nim",
                "rules" => "required"
            ),
            array(
                'field' => "nama",
                'label' => "Nama",
                "rules" => "required"
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == True) {
            $data['nim'] = $this->input->post('nim');
            $data['nama'] = $this->input->post('nama');
            
            $this->model_mahasiswa->insert($data);
            redirect('mahasiswa');
        }
        $this->load->view('form_mahasiswa');
    }

}

?>
