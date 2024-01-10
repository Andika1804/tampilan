<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class m_kepegawaian extends CI_Model{

    public function getDataKepegawaian(){
        $this->db->select('*');
        $this->db->from('pegawai');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insertDataKepegawaian(){
        $data = array(
            'id_pegawai' => $this->input->post('IDPegawai', true),
            'nama' => $this->input->post('Nama', true),
            'alamat' => $this->input->post('Alamat', true),
            'golongan' => $this->input->post('Gol', true),
    );
    
    $this->db->insert('pegawai', $data);
    }

    public function updateDataKepegawaian(){
        $data = array(
            'nama' => $this->input->post('Nama', true),
            'alamat' => $this->input->post('Alamat', true),
            'golongan' => $this->input->post('Gol', true),
    );

    $this->db->where('id_pegawai', $this->input->post('IDPegawai', true));
    $this->db->update('pegawai', $data);

    }

    public function getDataKepegawaianById($id) {
        $this->db->where('id_pegawai', $id);
        $query = $this->db->get('pegawai');
        return $query->result_array();
    }

    public function hapusDataKepegawaian($id) {
        $this->db->where('id_pegawai', $id);
        $this->db->delete('pegawai');
    }

    









}