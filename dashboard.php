<?php

require_once('lib/view.php');

$data['title'] = "Dashboard Admin";
$data['page'] = "v_admin.php";
require_once View::getView('dashboard.php', $data);