<?php

require_once('lib/view.php');

$data['title'] = "Siswa";
$data['page'] = "v_siswa.php";
require_once View::getView('dashboard.php', $data);