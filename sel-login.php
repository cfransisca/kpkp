<?php  
session_start();
    require 'connect_db.php';

	
	$email=$_POST['email'];
	$pass = base64_encode($_POST['pass']);
	
	$sqll="SELECT id_customer FROM customer WHERE email='$email' && password = '$pass'";
	$results=mysqli_query($mysql,$sqll);
	if(mysqli_num_rows($results)==0){
		echo 'null';
	} else {
		while ($row=$results->fetch_assoc()) {
		$id=$row['id_customer'];
		}
		$_SESSION['idcust']=$id;
		
		header("Location: index.php");
		ob_end_flush();
		exit;
	}
	
	
?>