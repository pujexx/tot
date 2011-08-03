<?php

class model_mahasiswa extends Model {

    function model_mahasiswa() {
        parent::Model();
    }

    function get() {
        $this->db->select('id,nim,nama');
        $result = $this->db->get('mahasiswa');
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
    }

    function insert($data) {
        $this->db->insert('mahasiswa', $data);
    }

    function get_one($id) {
        $this->db->where('id', $id);
        $result = $this->db->get('mahasiswa');
        if($result->num_rows()==1){
            return $result->row_array();
        }
    }

    function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('mahasiswa', $data);
    }
    function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('mahasiswa');
    }

}

?>
