<?php 
// variable declaration 

$serverName = "is3-dev.ict.ru.ac.za" ;
$user = "VersiTech" ; // username
$password = "V3rs1t3ch" ; // password
$database = "versitech" ; // Schema name in workbench

//connection string : for oop ;
$currenttime = date('y-m/d h:i:s A') ;

$conn = new mysqli($serverName, $user, $password, $database) ;

if($conn -> connect_error){

die("connection to server and database failed".$conn -> connect_error) ;

} else {
    echo "Oratile Diale connected to server on $currenttime <br>" ; 

}

?>