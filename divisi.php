<?php

require_once('lib/view.php');

$data['title'] = "DIVISI";
$data['page'] = "v_divisi.php";
require_once View::getView('dashboard.php', $data);