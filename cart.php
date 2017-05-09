<?php
session_start();
include 'head.php';
echo "<div style='margin-top:100px'>";
echo "<div class='w3-third w3-container' style='width:100px'>";

echo "ID <br>";
foreach ($_SESSION['id'] as $key=>$value1){echo "{$value1} <br>";}
echo "</div>";

echo "<div class='w3-third w3-container' style='width:200px'>";
echo "HARGA <br>";
foreach ($_SESSION['harga'] as $key=>$value2){echo "{$value2} <br>";}
echo "</div>";

echo "<div class='w3-third w3-container' style='width:100px'>";
echo "QUANTITY <br>";
foreach ($_SESSION['quan'] as $key=>$value3){echo "{$value3} <br>";}
echo "</div>";

echo "SUBTOTAL <br>";
foreach ($_SESSION['sub'] as $key=>$value4){echo "{$value4} <br>";}
echo "</div>";

echo "</div>";
echo "<br><br><br><br><br>";
echo "<button id='bayar' style='margin-left:300px'>Pembayaran</button>";
?>