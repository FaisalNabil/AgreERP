<?php 

$conn = mysqli_connect("localhost", "root", "", "agrierp");
    if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
    }

?>