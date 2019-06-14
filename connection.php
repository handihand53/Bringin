<?php
    $username="bringin";
    $password="bringindata";
    $server="bringindb.ckjxbiofscqp.us-east-1.rds.amazonaws.com"
    $database="bringinDb";

    $con = mysqli_connect($server, $username, $password, $database) or die("Connection error");
?>