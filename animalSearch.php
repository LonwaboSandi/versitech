<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<?php 
require 'animalSearch.html';
require 'databaseConn.php';
//
$searchAni = $_POST["searchAni"];                                               //getting the animal id to serach with and make the link with 

$sql = "SELECT * FROM animalintake WHERE animalId = '$searchAni'"; // will change name when i get the table name from SQL
$result = $conn -> query($sql); //database stuff - the link with the connection in databaseConn and this php script code

if($result->num_rows == 1){       //checks if matching record if found)
    echo"<h2>Matching record found</h2>";

    echo" <h3> -----------Record in uneditable format---------<h3/>";
    $row = $result-> fetch_assoc();


    echo"<br>Animal ID Number: $row[animalId]</br>";
    echo"<br> Name: $row[aName]</br>";
    echo "<br> Species: $row[aSpecies]</br>";
    echo "<br> Gender:$row[aGender]</br>";
    echo "<br> Breed:$row[aBreed]</br>";
    echo "<br>Age:$row[aAge]</br>";
    echo "<br>Height:$row[aniheight]</br>";
    echo "<br>Weight: $row[aniweight]</br>";
    echo "<br>Image: $row[aImage]</br>";
    echo "<br> Rescue Details: $row[aRescueDetails]</br>";
    echo "<br> Health Status: $row[aHealthStatus]</br>";
    echo    "</br";
}

else{
    echo"<h3>No matching record found. Try again using another ID </h3>";
}

    echo" <h3> -----------Details in editable format---------<h3/>";
    ?>


    <form action = "animalUpdate.php" method= "POST" enctype= "multipart/form-data">         <!--form not added yet--->
    <br>Animal ID Number: <input type="text" name = "animalId" value="<?php echo $row["animalId"]; ?>"></br> 
    <br>Name: <input type="text" name="aName" value="<?php echo $row["aName"];?>"></br>
    <br> Species : <input type = "text" name ="aSpecies" value = "<?php echo $row["aSpecies"];?>"></br>
    <br>Gender: <input type="text" name="aGender" value="<?php echo $row ["aGender"]; ?>"></br>
    <br> Breed: <input type="text" name="aBreed" value="<?php echo $row["aBreed"]; ?>"></br>
    <br>Age: <input type="text" name="aAge" value="<?php echo $row["aAge"]; ?>"></br>
    <br>Height : <input type="text" name="aHeight" value="<?php echo $row["aHeight"]; ?>"></br>
    <br>Weight: <input type="text" name="aWeight" value="<?php echo $row["aWeight"]; ?>"></br>
    <br> Health Status: <input type="text" name="aHealthStatus" value="<?php echo $row["aHealthStatus"]; ?>"></br>
    <br> Rescue Details: <input type="text" name="aRescueDetails" value="<?php echo $row["aRescueDetails"]; ?>"></br>



    </form>
    </br>
    </br>

</html>