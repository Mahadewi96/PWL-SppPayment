<?php

require_once('lib/view.php');

$data['title'] = "SELAMAT DATANG";
$data['page'] = "v_profile.php";
require_once View::getView('dashboard.php', $data);