<?php
session_start();
require "connect_db.php";
date_default_timezone_set("Asia/Jakarta");
$tdate = date("Y-m-d H:i:s");
$id = $_GET['id'];
$total = $_SESSION['total'];

$sql = "INSERT INTO nota (id_admin,id_customer,tanggal,total_harga,status) VALUES ('1','$id','$tdate','$total','on process')";
$result=mysqli_query($mysql,$sql);

header("Location: nota.php");
ob_end_flush();
?>