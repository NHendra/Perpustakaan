<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class C_excelp extends CI_Controller {
 
      //constructor class C_excel
      public function __construct() {
           parent::__construct();
           //load helper url
           $this->load->helper('url');
           //load model 'model_buku'
           $this->load->model('model_pengunjung');
      }
 
      //halaman awal untuk menampilkan tabel
      public function index() {
 
           $data = array( 'title' => 'Data Pengunjung '.date("d-m-Y"),
                'pengunjung' => $this->model_pengunjung->getAll());
 
           $this->load->view('vwexcelp',$data);
      }
 
      //export ke dalam format excel
      public function export_excel(){
           $data = array( 'title' => 'Laporan Pengunjung Excel '.date("d-m-Y"),
                'pengunjung' => $this->model_pengunjung->getAll());
 
           $this->load->view('vw_laporan_excelp',$data);
      }
 
 }
 
 /* End of file C_excel.php */
 /* Location: ./application/controllers/C_excel.php */

 // no judul pengarang tahun_terbit tahun_daftar asal no_class jumlah