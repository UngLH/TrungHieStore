<?php
    $mysqli = new mysqli("localhost","root","","mstorebuy");
    //todo check connection
    if($mysqli->connect_error){
        echo "Kết nối lỗi" . $mysqli->connect_error;
        exit();
    }
?>