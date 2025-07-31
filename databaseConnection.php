<?php

//variable declaration

$serverName="is3-dev.ict.ru.ac.za";
$user="VersiTech";
$password="V3rs1t3ch";
$database="versitech"; // schema name in mysql db is=versitech

//connection string / statement for MySQLi OOP

$conn= new mysqli($serverName,$user,$password,$database);

// conditional statement  to test connection -MySQLi Object-Oriented

If($conn->connect_error){
    die("Connection to server and database failed" . $conn->connect_error);
} else{
   echo "VersiTech Team connected to the server on ". date("d/m/Y h:i:s a") ; //delete when connection is established
}

//$conn->close();

?>