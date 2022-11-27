<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Model_pengunjung extends CI_Model {
 
      //constructor untuk class Model_buku
      public function __construct(){
           //load constructor CI_Model
           parent::__construct();
 
           //load database
           $this->load->database();
      }
 
      // ambil data dari tabel 'tbl_buku'
      public function getAll() {
           $this->db->select('*');
           $this->db->from('buku_tamu');
           $query = $this->db->get();
           return $query->result();
      }
 
 }
 
 /* End of file Model_buku.php */
 /* Location: ./application/models/Model_buku.php */