<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
$postdata = file_get_contents("php://input");
$request  = json_decode($postdata);

$data = array('success' => true, 'message' => 'Thank you for contacting us! We will get back to you soon.');
echo json_encode($data);

?> 