<?php

require_once('lib/view.php');

$data['title'] = "Payment History";
$data['page'] = "v_history.php";
require_once View::getView('dashboard.php', $data);