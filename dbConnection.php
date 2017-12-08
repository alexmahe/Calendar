<?php
    $servename = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'calendar';

    $connection = new mysqli($servename,$username,$password, $dbname);

    if ($connection->connect_error){
        die ("Connection failed : ".$connection->connect_error);
    }
?>