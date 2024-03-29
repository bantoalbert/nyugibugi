<?php
    require('includes/dbcon.php');
    $value1 = ""; 
    $value2 = ""; 
    $value3 = ""; 
    $value4 = ""; 
    $value5=""; 
    $value6="";
    $value7="";
    $ErrorFlag=false;

    if(isset($_POST["nev"])){
        if($_POST["nev"] != ""){
            $value1 = $_POST["nev"];
            echo "1";
        } 
    }
    if(isset($_POST["email"])){
        if($_POST["email"] != ""){
            $value2 = $_POST["email"];
            echo "2";
        } 
    }
    if(isset($_POST["telefonszam"])){
        if($_POST["telefonszam"] != ""){
            $value3 = $_POST["telefonszam"];
            echo "3";
        }
    }

    if(isset($_POST["honnan"])){
        if($_POST["honnan"] != ""){
            $value4 = $_POST["honnan"];
            echo "4";
        }
    }
    if(isset($_POST["hova"])){
        if($_POST["hova"] != ""){
            $value5 = $_POST["hova"];
            echo "5";
        }
    }

   if(isset($_POST["datum"])){
        if($_POST["datum"] != ""){
            $value6 = $_POST["datum"];
            echo "6";
        }
    }

    if(isset($_POST["uzenet"])){
        if($_POST["uzenet"] != ""){
            $value7 = $_POST["uzenet"];
            echo "7";
        }
    }

    if(isset($_POST["submit"])){
        if($ErrorFlag == false){
            $query    = "INSERT into `megrendelolap` (`nev`,`email`,`telefonszam`,`honnan`,`hova`,`datum`,`uzenet`)
            VALUES ('$value1', '$value2', '$value3','$value4','$value5','$value6','$value7')";
            $result   = mysqli_query($conn, $query);
            if ($result) {
                header("location: index.php");
            } else {
                echo "Hiba";
            }
        }
    } 
?>