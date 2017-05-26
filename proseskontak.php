<?php

require "connect_db.php";

$nama = $_GET['nm'];
$email= $_GET['em'];
$pesan = $_GET['msg'];

$sql = "INSERT INTO comments (name,email,comments) VALUES ('$nama','$email','$pesan')";
$result = mysqli_query($mysql,$sql);
?>