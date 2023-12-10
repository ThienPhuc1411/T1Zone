<?php
    function connectdb(){
        $servername = "localhost";
        $username = "abz4ps6gmkfv_t1zone";//xampp có username là root
        $password = "T1zone@123";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=abz4ps6gmkfv_t1zone", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
            return $conn;
        } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }
    }
?>