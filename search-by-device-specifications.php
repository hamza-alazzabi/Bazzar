<?php
    try{
        require 'database-connect.php';
        
        
    }
    catch(PDOException $e){
                echo "Connection failed: " . $e->getMessage();
    }
?>