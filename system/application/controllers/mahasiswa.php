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

    function delete($id) {
        $this->model_mahasiswa->delete($id);
        redirect('mahasiswa');
    }

    function form_update($id) {
        $data['mahasiswa'] = $this->model_mahasiswa->get_one($id);
        $this->load->view('form_update_mahasiswa', $data);
    }

    function update() {
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
        $id = $this->input->post('id');
        if ($this->form_validation->run() == True) {

            $data['nim'] = $this->input->post('nim');
            $data['nama'] = $this->input->post('nama');

            $this->model_mahasiswa->update($id, $data);
            redirect('mahasiswa');
        } else {
            $this->form_update($id);
        }
    }

}

?>
