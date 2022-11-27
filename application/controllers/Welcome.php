<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

		
		
 
	}


	public function index()
	{
		$this->load->view('btamu');

	}

	public function dashboard()
	{
		$status = 'Pinjam';
		
		$where = array(
			'status' => $status
		);
		
		$data['pustaka'] = $this->m_data->tampil_data()->result();
		$data['transaksi'] = $this->m_data->tampil_data3()->result();
		$data['telat'] = $this->m_data->tampil_data4()->result();
		$data['jmlhm'] = $this->m_data->tampil_data5()->result();
		$this->load->view('dashboard',$data);

	}


	public function tpustaka()
	{
		$this->load->view('tpustaka');
	}

	public function dpustaka()
	{
		$data['pustaka'] = $this->m_data->tampil_data()->result();
		$this->load->view('dpustaka',$data);
	}

	function bikin_barcode($kode)
		{
		//kita load library nya ini membaca file Zend.php yang berisi loader
		//untuk file yang ada pada folder Zend
		$this->load->library('zend');
		
		//load yang ada di folder Zend
		$this->zend->load('Zend/Barcode');
		
		//generate barcodenya
		//$kode = 12345abc;
		Zend_Barcode::render('code128', 'image', array('text'=>$kode), array());
	}
	//end of class

	public function tanggota()
	{
		$this->load->view('tanggota');
	}

	public function danggota()
	{
		$data['anggota'] = $this->m_data->tampil_data2()->result();
		$this->load->view('danggota',$data);
	}

	public function pinjam()
	{
    $this->load->view('pinjam');
	}
	public function kembali()
	{
    $this->load->view('kembali');
	}
	public function btamu()
	{
    $this->load->view('btamu');
	}
	public function dtamu()
	{
		$data['dtamu'] = $this->m_data->tampil_data6()->result();
		$this->load->view('dtamu',$data);
	}
	function dpinjam(){


		$data['transaksi'] = $this->m_data->tampil_data3()->result();
		$data['pustaka'] = $this->m_data->tampil_data()->result();
		$data['anggota'] = $this->m_data->tampil_data2()->result();
		$this->load->view('dpinjam',$data);
	}

}
