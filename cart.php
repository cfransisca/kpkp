<?php
session_start();

$i = 0;

foreach ($_SESSION['harga'] as $key => $value1) {
  foreach ($_SESSION['item'] as $key => $value2 ) {
   // $value1 = $value1*$quan;
  echo "<h3>$value1 </h3>";
  echo "<h3>{$value2} </h3>";

  }
  break;
}
  
?>