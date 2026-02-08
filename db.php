<?php

$conn = mysqli_connect("localhost", "root", "", "training_center");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

?>