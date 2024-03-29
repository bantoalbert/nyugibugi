<?php
   
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "megrendeles";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            die("Nem sikerült csatlalakozni az adatbázishoz!");
            }