<?php
	session_start();
    require 'connect_db.php';

	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$telp=$_POST['telp'];
	$email=$_POST['email'];
	$pass = base64_encode($_POST['pass']);
	//$pass = $_POST['pass'];

	$sql="INSERT INTO customer (email, nama, alamat, telepon, password) VALUES('$email','$nama','$alamat','$telp', '$pass')";
	$result=mysqli_query($mysql,$sql);
	echo $result;
	$sqll="SELECT id_customer FROM customer WHERE email='$email'";
	$results=mysqli_query($mysql,$sqll);
	while ($row=$results->fetch_assoc()) {
		$id=$row['id_customer'];
	}
	$_SESSION['idcust']=$id;
	header("Location: index.php");
	ob_end_flush();
	exit;
?>