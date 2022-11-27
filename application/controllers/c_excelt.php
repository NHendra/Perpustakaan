<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class C_excelt extends CI_Controller {
 
      //constructor class C_excel
      public function __construct() {
           parent::__construct();
           //load helper url
           $this->load->helper('url');
           //load model 'model_buku'
           $this->load->model('m_data');
      }
 
      //halaman awal untuk menampilkan tabel
      public function index() {
          $data = array( 'title' => 'Data Peminjaman '.date("d-m-Y"));
          $data['transaksi'] = $this->m_data->tampil_data3()->result();
		$data['pustaka'] = $this->m_data->tampil_data()->result();
		$data['anggota'] = $this->m_data->tampil_data2()->result();
		$this->load->view('vwexcelt',$data);
      }
 
      //export ke dalam format excel
      public function export_excelt(){
          $data = array( 'title' => 'Data Peminjaman '.date("d-m-Y"));
          $data['transaksi'] = $this->m_data->tampil_data3()->result();
		$data['pustaka'] = $this->m_data->tampil_data()->result();
		$data['anggota'] = $this->m_data->tampil_data2()->result();
 
           $this->load->view('vw_laporan_excelt',$data);
      }
 
 }
 
 /* End of file C_excel.php */
 /* Location: ./application/controllers/C_excel.php */

 // no judul pengarang tahun_terbit tahun_daftar asal no_class jumlah