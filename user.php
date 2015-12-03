<?php

require_once('lib/view.php');

$data['title'] = "User Admin";
$data['page'] = "v_user.php";
require_once View::getView('dashboard.php', $data);