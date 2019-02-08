<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        // establish database connection
        $conn = new PDO("mysql:host=$servername;dbname=bazaar", $username, $password);
        
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>