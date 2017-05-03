<?php
session_start();

$i = 0;

//$quantity = $_SESSION['quan'];

foreach ($_SESSION['item'] as $key => $value1) {
  echo "<h3>$value1 </h3>";
}

//kmrn bbem nambahin echo2 itu. tapi malah error >.<

/*foreach ($_SESSION['item'] as $key => $value1) {
  foreach ($_SESSION['harga'] as $key => $value2) {
   // $value1 = $value1*$quan;
  echo "<h3>$value1 </h3>";
  echo "<form class='update-quantity-form w-200-px'>";
      echo "<div class='product-id' style='display:none;'>$id</div>";
      echo "<input type='number' value='$quantity' name='quantity' class='form-control cart-quantity m-b-10px cart-quantity-dropdown' min='1' />";
  echo "<button id='update' class='btn btn-default update-quantity' type='submit'>Update</button>";
  echo "<button id='hapus' class='btn btn-default update-quantity' type='submit'>Hapus</button>";
  echo "</form>";
  
  echo "<h3>{$value2} </h3>";


  }
  break;
}*/

?>