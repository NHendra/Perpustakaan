<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class C_excel extends CI_Controller {
 
      //constructor class C_excel
      public function __construct() {
           parent::__construct();
           //load helper url
           $this->load->helper('url');
           //load model 'model_buku'
           $this->load->model('model_buku');
      }
 
      //halaman awal untuk menampilkan tabel
      public function index() {
 
           $data = array( 'title' => 'Data Buku '.date("d-m-Y"),
                'buku' => $this->model_buku->getAll());
 
           $this->load->view('vwexcel',$data);
      }
 
      //export ke dalam format excel
      public function export_excel(){
           $data = array( 'title' => 'Laporan Buku Excel '.date("d-m-Y"),
                'buku' => $this->model_buku->getAll());
 
           $this->load->view('vw_laporan_excel',$data);
      }
 
 }
 
 /* End of file C_excel.php */
 /* Location: ./application/controllers/C_excel.php */

 // no judul pengarang tahun_terbit tahun_daftar asal no_class jumlah