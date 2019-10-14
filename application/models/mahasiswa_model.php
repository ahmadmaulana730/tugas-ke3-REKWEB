<?php

class Mahasiswa_model extends CI_model
{
    public function getAllMahasiswa()
    {
        // memanggil data dari database sekalian menampilkan data 
        return $this->db->get('mahasiswa')->result_array();

    }
}