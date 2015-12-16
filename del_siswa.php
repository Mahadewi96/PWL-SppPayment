<?php

require_once('lib/view.php');
require_once('models/m_siswa.php');
require_once('models/m_divisi.php');

$siswa = new Siswa();
$divisi = new divisi();

$NIS = $_GET['NIS'];

if(!empty($NIS)){
	$siswa->deleteSiswa($NIS);
	$success = "Data Berhasil di Hapus";
}

$data['title'] = "Siswa";
$data['page'] = "v_siswa.php";
$data['siswa'] = $siswa->readAllSiswa();
$data['nat'] = $nat->readAllNationality();

require_once View::getView('dashboard.php', $data);

