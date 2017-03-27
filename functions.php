<?php

if(isset($_POST['add']))
{
	$name = $_POST['add'];
	addtocart($name);
}

function addtocart($name)
{
	session_start();

    if($_SESSION['idcust']===NULL||$_SESSION['idcust']==="")
	{
		header("Location: login.php");
		ob_end_flush();
		exit;
	}
	else{
		
		$_SESSION['item'] = array();
		array_push($_SESSION['item'], $name);
	}
}
?>
