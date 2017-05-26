<?php 

if(isset($_GET['js'])){
  $js = $_GET['js'];
  $jhrg = $_GET['hrg'];
  $qty = $_GET['qty'];
  addJs($js,$jhrg,$qty);
}
else{
  $id = $_GET['q'];
  $quan = $_GET['qt'];
  $hrg = $_GET['prc'];
  $nama = $_GET['nm'];
  addtocart($id,$quan,$hrg,$nama);  
}

function addtocart($id, $quan, $hrg, $nama)
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
    
    $_SESSION['total'] += $harga;
    $_SESSION['id'][] = $id;
    $_SESSION['nama'][] = $nama;
    $_SESSION['quan'][] = $quan;
    $_SESSION['harga'][] = $hrg;
    $_SESSION['sub'][] = $harga;
    
    echo json_encode(array('id'=>$_SESSION['id'], 'nama'=>$_SESSION['nama'],'harga'=>$_SESSION['harga'], 'quan'=>$_SESSION['quan'], 'subtotal'=>$_SESSION['sub']));
  }

}

function addJs($js,$jhrg,$qty)
{
  session_start();
  if($_SESSION['idcust']===NULL||$_SESSION['idcust']==="")
  {
    header("Location: login.php");
    ob_end_flush();
    exit;
  }
  else{
    $sub = $qty * $jhrg;

    $_SESSION['total'] += $sub;
    $_SESSION['id'][] = '';
    $_SESSION['nama'][] = $js;
    $_SESSION['quan'][] = $qty;
    $_SESSION['harga'][] = $jhrg;
    $_SESSION['sub'][] = $sub;
    echo json_encode(array('id'=>$_SESSION['id'], 'nama'=>$_SESSION['nama'],'harga'=>$_SESSION['harga'], 'quan'=>$_SESSION['quan'], 'subtotal'=>$_SESSION['sub']));
  }
}
 ?>
 