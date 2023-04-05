<?php
$serverName="localhost";
$userName="root";
$password="";
$database="news-site";
$conn= new mysqli($serverName,$userName,$password,$database);
if ($conn->connect_error) {
    # code...
    die("connection failed");
} else {
    # code...
    echo ("Connection was established successfully.");
    $conn->close();
}

?>