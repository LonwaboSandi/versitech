<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding Medical Record</title>

    <style>
        body{background-color:bisque}
        h2{color:black; text-align: left;}
    </style>
</head>

<body>
<?php


include "databaseConnection.php";//copy code from databaseConnection.php file

//invokes the html form and populate the fields
//link fields in previous forms with variables in this form

$medicalProcedure_Id=$_POST['medicalProcedure_Id'];
$medicalProcedureDate=$_POST['medicalProcedureDate'];
$medicalVeterinaryName=$_POST['medicalVeterinaryName'];
$medicalProcedureType=$_POST['medicalProcedureType'];
$medicalProcedureStatus=$_POST['medicalProcedureStatus'];
$medicalProcedureNotes=$_POST['medicalProcedureNotes'];

//SQL statement to add to database table

//CREATE A RECORD IN dogrecords TABLE 

//values refer to the fields above obtained from form
$sql1="INSERT INTO medicalprocedure(medicalProcedure_Id,medicalProcedureDate,medicalVeterinaryName,medicalProcedureType,medicalProcedureStatus,medicalProcedureNotes)
VALUES('$medicalProcedure_Id','$medicalProcedureDate','$medicalVeterinaryName','$medicalProcedureType','$medicalProcedureStatus','$medicalProcedureNotes')";

echo "<br>";
$result=$conn->query($sql1); //execute query to make changes in table

if ($result == FALSE){
    die("Unable to create medical record.". $conn->connect_error); //exception if execution fails
} else {
    echo"<br> Medical Record successfully created."; //confirms record having been inserted into table
     //echo" <br> <p><a href= \"LoginForm.html\"><button>Back to Login</button></a></p>";
}

$conn->close(); //close connection everytime why?

//menu options for navigating to other forms 


echo"<p><input type=\"submit\"value=\"Update Current Medical Record\"></p>";
echo"<br> <p><a href= \"AddDogForm.html\"><button>Add Another Medical Procedure</button></a></p>";
echo"<br> <p><a href= \"displayAllMedicalRecords.php\"><button>Display All Medical Records</button></a></p>";
echo"<br> <p><a href= \"dogRecordSearchForm.html\"><button>Search a record</button></a></p>";
echo" <br> <p><a href= \"LoginForm.html\"><button>Back to Login</button></a></p>";

//echo"</body>";

?>

</body>
</html>