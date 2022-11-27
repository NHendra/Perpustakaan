<?php 

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('pustaka');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function tampil_data2(){
		return $this->db->get('anggota');
	}
	
	function edit_data2($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	function m_buku() {
		$buku = $this->db->get('pustaka');
		return $buku->result();
	}
	
	function m_anggota() {
		$anggota = $this->db->get('anggota');
		return $anggota->result();
	}

	function panggota($where,$table){
		return $this->db->get_where($table,$where);
	}
	function pbuku($where,$table){
		return $this->db->get_where($table,$where);
	}
	function tampil_data3(){
		return $this->db->get('transaksi');
	}
	function tampil_data4(){
		return $this->db->query('SELECT * FROM transaksi WHERE tgl_kembali < now();');
	}
	function tampil_data5(){
		return $this->db->get('anggota');
	}
	function tampil_data6(){
		return $this->db->get('buku_tamu');
	}
}