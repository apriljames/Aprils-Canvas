<?php

    class Db // database access class. Other classes inherit from this
    {
        public function connect()
        {
            $servername = "tristanluther.com";
            $database = "aprilscanvas_shop";
            $username = "bun";
            $password = "Carroteater20!";
            try 
            {
                $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            } 
            catch(PDOException $e) 
            {
                echo "Connection failed: " . $e->getMessage();
            }
        }
    }

?>