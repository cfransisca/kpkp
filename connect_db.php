<?php
$mysql = new mysqli("localhost", "root", "", "petcart");
if ($mysql->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysql->connect_error;
}
?>