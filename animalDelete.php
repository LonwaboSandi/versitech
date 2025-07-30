<?php 
include 'databaseConn.php';



if (isset($_GET['animalId'])){
    $animal_Id = $_GET['animalId']; //Extracts the idnumber from the url
    $sql_delete = "DELETE FROM animalintake WHERE animalId = '$animal_Id'";

    $query_delete = $conn -> query($sql_delete);

    if($query_delete)

    echo "<script> alert('Record successfully deleted') <scripts>";
    //header("Location: displayAllrecords.php");  //we dont have this yet

    $conn -> close();

} else{
    echo "<script>alert('Record could not be deleted. Retry')</script>";
    //header("Location: displayAllrecords.php");
}

$conn -> close();

?>