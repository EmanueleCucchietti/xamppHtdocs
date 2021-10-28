<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "test1db";

    if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
        die("Connessione al database fallita");
?>