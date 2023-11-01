<?php

$host = "localhost";
$user = "u484908010_Rahul";
$pass = "Rahul123";
$db = "u484908010_FoodSurfers";


$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn)
{
    $response['message'] = "connection_error";
    echo json_encode($response);
}

?>