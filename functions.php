<?php

/*if(isset($_POST['add']))
{*/
	$name = $_GET['q'];
	$quan = $_GET['qt'];
	addtocart($name,$quan);
//}

function addtocart($name, $quan)
{
	session_start();

    if($_SESSION['idcust']===NULL||$_SESSION['idcust']==="")
	{
		header("Location: login.php");
		ob_end_flush();
		exit;
	}
	else{
		
		//$_SESSION['item'] = array();
		//array_push($_SESSION['item'], $name);
		$_SESSION['item'][] = $name;
		$_SESSION['quan'][] = $quan;
		$_SESSION['harga'][] = "15000";
		//header("Location: cart.php?nama=$name")
		echo json_encode(array('nama'=>$_SESSION['item'],'harga'=>$_SESSION['harga'], 'quan'=>$_SESSION['quan']));
	}

}
?>
