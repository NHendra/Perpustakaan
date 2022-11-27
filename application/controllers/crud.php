<?php 
 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('./',$data);
	}
 
	function tambah(){
		$this->load->view('/tpustaka');
	}

	function tpustaka(){
		$isbn = $this->input->post('isbn');
		$no_klasifikasi = $this->input->post('no_klasifikasi');
		$judul = $this->input->post('judul');
		$pengarang = $this->input->post('pengarang');
		$tahun_terbit = $this->input->post('tahun_terbit');
		$tahun_pendaftaran = $this->input->post('tahun_pendaftaran');
		$keterangan = $this->input->post('keterangan');
		$asal = $this->input->post('asal');
		$jumlah = $this->input->post('jumlah');
		
 
		$data = array(
			'isbn' => $isbn,
			'judul' => $judul,
			'no_klasifikasi' => $no_klasifikasi,
			'pengarang' => $pengarang,
			'tahun_terbit' => $tahun_terbit,
			'tahun_pendaftaran' => $tahun_pendaftaran,
			'keterangan' => $keterangan,
			'asal' => $asal,
			'jumlah' => $jumlah
			
			);
		$this->m_data->input_data($data,'pustaka');
		$this->session->set_flashdata('something', 'Buku Berhasil Ditambahkan Ke Database');
		redirect('tpustaka');
	}

	function hapus($isbn){
		$where = array('isbn' => $isbn);
		$this->m_data->hapus_data($where,'pustaka');
		redirect('/dpustaka');
	}

	function edit($isbn){
		$where = array('isbn' => $isbn);
		$data['pustaka'] = $this->m_data->edit_data($where,'pustaka')->result();
		$this->load->view('epustaka',$data);
	}

	function update(){
		$isbn = $this->input->post('isbn');
		$no_klasifikasi = $this->input->post('no_klasifikasi');
		$judul = $this->input->post('judul');
		$pengarang = $this->input->post('pengarang');
		$tahun_terbit = $this->input->post('tahun_terbit');
		$tahun_pendaftaran = $this->input->post('tahun_pendaftaran');
		$keterangan = $this->input->post('keterangan');
		$asal = $this->input->post('asal');
		$jumlah = $this->input->post('jumlah');
	
		$data = array(
			'isbn' => $isbn,
			'judul' => $judul,
			'no_klasifikasi' => $no_klasifikasi,
			'pengarang' => $pengarang,
			'tahun_terbit' => $tahun_terbit,
			'tahun_pendaftaran' => $tahun_pendaftaran,
			'keterangan' => $keterangan,
			'asal' => $asal,
			'jumlah' => $jumlah
		);
	
		$where = array(
			'isbn' => $isbn
		);
	
		$this->m_data->update_data($where,$data,'pustaka');
		$this->session->set_flashdata('updatebuku', 'Buku Berhasil Di Update!');
		redirect('/dpustaka');
	}

	function tanggota(){
		$no_anggota = $this->input->post('no_anggota');
		$nama = $this->input->post('nama');
		$pekerjaan = $this->input->post('pekerjaan');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$tgl_lahir = $this->input->post('tgl_lahir');

 
		$data = array(
			'no_anggota' => $no_anggota,
			'nama' => $nama,
			'pekerjaan' => $pekerjaan,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
			'tgl_lahir' => $tgl_lahir
			
			);
		$this->m_data->input_data($data,'anggota');
		$this->session->set_flashdata('something', 'Buku Berhasil Ditambahkan Ke Database');
		redirect('tanggota');
	}

	function cetak($no_anggota){
		$where = array('no_anggota' => $no_anggota);
		$data['anggota'] = $this->m_data->edit_data2($where,'anggota')->result();
		$this->load->view('cetak',$data);
	}
	
	function hapusanggota($no_anggota){
		$where = array('no_anggota' => $no_anggota);
		$this->m_data->hapus_data($where,'anggota');
		redirect('/danggota');
	}

	function panggota(){
		$no_anggota = $this->input->post('no_anggota');
		$isbn = $this->input->post('isbn');

		$where = array('no_anggota' => $no_anggota);
		$data['anggota'] = $this->m_data->panggota($where,'anggota')->result();
		$where = array('no_anggota' => $no_anggota);
		$data['transaksi'] = $this->m_data->panggota($where,'transaksi')->result();
		$where = array('isbn' => $isbn);
		$data['buku'] = $this->m_data->pbuku($where,'pustaka')->result();
		$this->load->view('pinjam',$data);
	}
	function aksipinjam(){
		$isbn = $this->input->post('isbn');
		$no_anggota = $this->input->post('no_anggota');
		$tgl_pinjam = date("y-m-d");
		$tgl_kembali = date("y-m-d",strtotime('+7 days'));
		$status = 'Pinjam';
		$jumlah = $this->input->post('jumlah');
		$jumlah=$jumlah-1;
 
		$data = array(
			'isbn' => $isbn,
			'no_anggota' => $no_anggota,
			'tgl_pinjam' => $tgl_pinjam,
			'tgl_kembali' => $tgl_kembali,
			'status' => $status
			
			
		);

		$data2 = array(
			
			'jumlah' => $jumlah
		);

		$where = array(
				'isbn' => $isbn
		);

		$this->m_data->input_data($data,'transaksi');
		$this->m_data->update_data($where,$data2,'pustaka');
		$this->session->set_flashdata('something', 'Buku Berhasil Ditambahkan Ke Database');
		redirect('pinjam');
	}
	function kembali(){
		$no_anggota = $this->input->post('no_anggota');

		$where = array('no_anggota' => $no_anggota);

		$data['transaksi'] = $this->m_data->panggota($where,'transaksi')->result();
		$data['pustaka'] = $this->m_data->tampil_data()->result();
		$data['anggota'] = $this->m_data->tampil_data2()->result();
		$this->load->view('kembali',$data);
	}
	function kembalikan($kode_transaksi){
		$where = array('kode_transaksi' => $kode_transaksi);
		$data['transaksi'] = $this->m_data->panggota($where,'transaksi')->result();
		$data['pustaka'] = $this->m_data->tampil_data()->result();
		$data['anggota'] = $this->m_data->tampil_data2()->result();
		$this->load->view('ckembali',$data);
		
	}
	function aksikembali(){
		$isbn = $this->input->post('isbn');
		$kode_transaksi = $this->input->post('kode_transaksi');
		$no_anggota = $this->input->post('no_anggota');
		$tgl_dikembalikan = date("y-m-d");
		$status = 'Kembali';
		$jumlah = $this->input->post('jumlah');
		$jumlah=$jumlah+1;
 
		$data = array(

			'status' => $status,
			'tgl_dikembalikan' => $tgl_dikembalikan
			
			
		);

		$data2 = array(
			
			'jumlah' => $jumlah
		);

		$where1 = array(
			'kode_transaksi' => $kode_transaksi
	);

		$where = array(
				'isbn' => $isbn
		);

		$this->m_data->update_data($where1, $data,'transaksi');
		$this->m_data->update_data($where,$data2,'pustaka');
		$this->session->set_flashdata('something', 'Buku Berhasil Ditambahkan Ke Database');
		redirect('kembali');
	}
	function eanggota($no_anggota){
		$where = array('no_anggota' => $no_anggota);
		$data['anggota'] = $this->m_data->edit_data($where,'anggota')->result();
		$this->load->view('eanggota',$data);
	}
	function editanggota(){
		$no_anggota = $this->input->post('no_anggota');
		$nama = $this->input->post('nama');
		$pekerjaan = $this->input->post('pekerjaan');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$tgl_lahir = $this->input->post('tgl_lahir');

 
		$data = array(
			'nama' => $nama,
			'pekerjaan' => $pekerjaan,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
			'tgl_lahir' => $tgl_lahir,
			
			);
		$where = array(
				'no_anggota' => $no_anggota
			);
		$this->m_data->update_data($where,$data,'anggota');
		$this->session->set_flashdata('updatebuku', 'Buku Berhasil Di Update!');
		redirect('/danggota');
	}
	function ttamu(){
		$nama_pengunjung = $this->input->post('nama_pengunjung');
		$pesan = $this->input->post('pesan');
		$pekerjaan = $this->input->post('pekerjaan');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$minat = $this->input->post('minat');
		$tanggal=date("y-m-d");


 
		$data = array(
			'nama_pengunjung' => $nama_pengunjung,
			'pesan' => $pesan,
			'pekerjaan' => $pekerjaan,
			'alamat' => $alamat,
			'no_telp' => $no_hp,
			'minat' => $minat,
			'tanggal' => $tanggal
			
			);
		$this->m_data->input_data($data,'buku_tamu');
		$this->session->set_flashdata('something', 'Buku Berhasil Ditambahkan Ke Database');
		redirect('btamu');
	}

	


}