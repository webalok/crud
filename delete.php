<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

$data = array('success' => true, 'message' => 'Removed', 'Deleted Id' => $_GET['ID']);
echo json_encode($data);

?> 