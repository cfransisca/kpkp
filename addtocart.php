<?php 
$id = $_GET['q'];
$quan = $_GET['qt'];
$hrg = $_GET['prc'];
addtocart($id,$quan,$hrg);
function addtocart($id, $quan, $hrg)
{
  session_start();

    if($_SESSION['idcust']===NULL||$_SESSION['idcust']==="")
  {
    header("Location: login.php");
    ob_end_flush();
    exit;
  }
  else{
    $harga = $quan * $hrg;
    
    $_SESSION['id'][] = $id;
    $_SESSION['quan'][] = $quan;
    $_SESSION['harga'][] = $hrg;
    $_SESSION['sub'][] = $harga;
    
    echo json_encode(array('id'=>$_SESSION['id'],'harga'=>$_SESSION['harga'], 'quan'=>$_SESSION['quan'], 'subtotal'=>$_SESSION['sub']));
  }

}
 ?>
 