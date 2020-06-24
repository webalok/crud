<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
$arr = array(
    array("id" => 1,"firstName" => "Garry","lastName" => "Sandhu","email" => "garry@gmail.com"),
    array("id" => 2,"firstName" => "Guddu","lastName" => "Shukla","email" => "guddu@gmail.com"),
    array("id" => 3,"firstName" => "Sippy","lastName" => "Saha","email" => "Sippy@gmail.com"),
    array("id" => 4,"firstName" => "Sippy","lastName" => "Saha","email" => "Sippy@gmail.com"),
    array("id" => 5,"firstName" => "Sippy","lastName" => "Saha","email" => "Sippy@gmail.com"),
    array("id" => 6,"firstName" => "Sippy","lastName" => "Saha","email" => "Sippy@gmail.com"),
    array("id" => 7,"firstName" => "Sippy","lastName" => "Saha","email" => "Sippy@gmail.com"),
    array("id" => 8,"firstName" => "Sippy","lastName" => "Saha","email" => "Sippy@gmail.com"),
    array("id" => 9,"firstName" => "Sippy","lastName" => "Saha","email" => "Sippy@gmail.com"),
    array("id" => 10,"firstName" => "Sippy","lastName" => "Saha","email" => "Sippy@gmail.com"),
    array("id" => 11,"firstName" => "Sippy","lastName" => "Saha","email" => "Sippy@gmail.com"),
    array("id" => 12,"firstName" => "Sippy","lastName" => "Saha","email" => "Sippy@gmail.com"),
    array("id" => 13,"firstName" => "Sippy","lastName" => "Saha","email" => "Sippy@gmail.com")
);
header('Content-type: application/json');
echo json_encode($arr);
?>