<?php


function getDBConnection(){

    echo 'this line is from function.php';


                    $server = "localhost"; // 192.168.15.22
                    $username = "root";
                    $password = "123";
                    $dbname = "smsvijedb";

                    $conn =  mysqli_connect($server,$username,$password,$dbname);

                    return $conn;
}
