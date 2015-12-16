<?php

require_once('lib/DBClass.php');

class Siswa{

	private $db;

	public function Siswa(){
		$this->db = new DBClass();
	}

	public function readAllSiswa(){
		$query = "Select * from siswa s join divisi d on
			s.kodedivisi = n.kodedivisi";
		return $this->db->getRows($query);	
	}

	public function readSiswa($id){
		$query = "Select * from siswa s join divisi d on
			s.kodedivisi = n.kodedivisi where NIS=".$NIS;
		return $this->db->getRows($query);		
	}

	public function createSiswa($NIS, $namasiswa, $jeniskelamin, $tanggallahir, $alamat, $agama, $namaortu, $kodedivisi){
		$query = "Insert into siswa (NIS, namasiswa, jeniskelamin, tanggallahir, alamat, agama, namaortu, kodedivisi)
			values('$namasiswa, $jeniskelamin, $tanggallahir, $alamat, $agama, $namaortu, $kodedivisi')";
		$this->db->putRows($query);	
	}

	public function updateSiswa($id, $data){
		$nis = $data['input_NIS'];
		$namasiswa = $data['input_namasiswa'];
		$jeniskelamin = $data['input_jeniskelamin'];
		$tanggallahir = $data['input_tanggallahir'];
		$alamat = $data['input_alamat'];
		$agama = $data['input_agama'];
		$namaortu = $data['input_namaortu'];
		$kodedivisi = $data['input_kodedivisi'];
		
		$query = "update siswa set NIS='$NIS', namasiswa='$namasiswa', jeniskelamin='$jeniskelamin', tanggallahir='$tanggallahir', alamat='$alamat', agama='$agama', namaortu='$namaortu', kodedivisi='$kodedivisi'";
		if($divisi>0) $query.=",kodedivisi='$divisi'";
		$query.= " where siswa=$NIS";
		$this->db->putRows($query);		
	}

	public function deleteSiswa($id){
		$sql = "Delete from siswa Where NIS=$NIS";
		$this->db->putRows($sql);		
	}


}