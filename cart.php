<?php
session_start();
include 'head.php';

$total = $_SESSION['total'];
echo "<div style='margin-top:100px'>";
echo "<div class='w3-third w3-container' style='width:200px'>";
echo "NAMA ITEM <br>";
foreach ($_SESSION['nama'] as $key=>$value1){echo "{$value1} <br>";}
echo "</div>";

echo "<div class='w3-third w3-container' style='width:150px'>";
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
echo "<br><br>";
echo "<div style='margin-left:400px'>TOTAL : $total</div>";
echo "<br>";
echo "<button id='bayar' style='margin-left:420px'>Pembayaran</button>";
?>