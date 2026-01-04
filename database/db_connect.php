<?php
$servername = "sql103.infinityfree.com";
$username  = "if0_38816234";
$password = "ulqSbSeFyPVZBla";
$dbname = "if0_38816234_foodieland_db";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed:". $conn->connect_error);
} 
return $conn;
?>