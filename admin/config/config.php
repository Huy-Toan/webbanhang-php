<?php
    $mysqli = new mysqli("localhost:3307","root","","webbanxemay");

// Check connection
    if($mysqli->connect_errno){
        echo "Kết nối MySQLi lỗi " . $mysqli->connect_error;
        exit();
    }
?>