<?php

require_once('lib/view.php');
require_once('models/m_siswa.php');
require_once('models/m_divisi.php');

$siswa = new Siswa();
$divisi = new Divisi();

$data['title'] = "Edit Siswa";
$data['page'] = "v_edit_siswa.php";
$data['divisi'] = $divisi->readAllDivisi();

$NIS = $_GET['NIS'];
$s = $siswa->readSiswa($NIS);

if(!empty($_POST)){

	$siswa->updateSiswa($NIS, $_POST);
	$success = "Data Berhasil di Update";

}	

$data['st'] = $s[0];

require_once View::getView('dashboard.php', $data);

