<?php

require_once('lib/view.php');

$data['title'] = "Orang Tua";
$data['page'] = "v_orangtua.php";
require_once View::getView('dashboard.php', $data);