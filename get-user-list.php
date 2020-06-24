<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

$arr = 
 array(
     "id" => 1,
     "firstName" => "Love",
     "lastName" => "Byte",
     "email" => "loveByte@gmail.com"
);
header('Content-type: application/json');
echo json_encode($arr);
?> 