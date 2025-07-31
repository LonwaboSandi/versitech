<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding Donation Record</title>
  <link rel="stylesheet" href="donation.css">
   
</head>

<body>
<?php

include "databaseConnection.php";//copy database code from databaseConnection.php file

// create php variables which store data sent from html form textfield inputs

// $donationID = $_POST['donationID']; 
/*We do NOT get donationID from POST because it's auto-incremented by the database
 If we allow manual data insertion of the donationID - it may cause errors or duplicate key issues
 The database automatically assigns a unique donationID for each new record*/

$donorFullName=$_POST['donorFullName'];
$donorEmail=$_POST['donorEmail'];
$donationDate=$_POST['donationDate'];
$donationFrequency=$_POST['donationFrequency'];
$donationAmount=$_POST['donationAmount'];
$donationCauseType=$_POST['donationCauseType'];
$paymentMethod=$_POST['paymentMethod'];
$donationNotes=$_POST['donationNotes'];
//$acknowledgementOptIn=$_POST['acknowledgementOptIn'];will not be sent in $_POST if left unchecked.

// Check if the acknowledgement checkbox was checked
if (isset($_POST['acknowledgementOptIn'])) {
    // Checkbox was checked, set flag to 1 (true)
    $acknowledgementOptIn = 1;
} else {
    // Checkbox was not checked, set flag to 0 (false)
    $acknowledgementOptIn = 0;
}


/*$termsAccepted=$_POST['termsAccepted']; even if HTML has required attribute validation ; 
Validate AGAIN in PHP server by checking if it’s set via isset($_POST['termsAccepted'])
This is because client-side validation (HTML required attribute) can be bypassed or disabled by users or bots
*/

// Check if the terms accepted checkbox was checked
if (isset($_POST['termsAccepted'])) {
    // Checkbox was checked, set flag to 1 (true)
    $termsAccepted = 1;
} else {
    // Checkbox was not checked, set flag to 0 (false)
    $termsAccepted = 0;
}

// Store sql query inside sql php variable to insert the variable data into the relevant fields within the database table 
$sql1="INSERT INTO donation (donorFullName,donorEmail,donationDate,donationFrequency,donationAmount,donationCauseType,paymentMethod,donationNotes,acknowledgementOptIn,termsAccepted)
VALUES('$donorFullName','$donorEmail','$donationDate','$donationFrequency','$donationAmount','$donationCauseType','$paymentMethod','$donationNotes','$acknowledgementOptIn','$termsAccepted')";
// donationID is not included here because it is auto-incremented by the database

//execute sql query to make changes in database table

$result=$conn->query($sql1); 

//create validation logic to validate if the sql query execution was successful or unsuccessful 
if ($result == FALSE){
    die("<br> Oops! Something went wrong: ". $conn->connect_error); //throws an exception showing that record insertion was unsuccessful
} else {

        
    echo "<br> Thank you! Your donation has been recorded successfully.";
    echo "<br> You will be redirected to the homepage shortly...";

    // Redirect to public homepage after 5 seconds
    header("Refresh: 5; URL=publicUserHomePage.php");
    
}

$conn->close(); //close connection everytime why? data will be retained 

//menu options for navigating to other public menu pages 

echo "<br> <p><a href=\"addDonationRecordForm.php\"><button>Make Another Contribution</button></a></p>";

/*
echo "<br> <p><a href=\"home.html\"><button>Home</button></a></p>";
echo "<br> <p><a href=\"about.html\"><button>About Us</button></a></p>";
echo "<br> <p><a href=\"volunteer.html\"><button>Volunteer</button></a></p>";
echo "<br> <p><a href=\"ContactUs.html\"><button>Contact Us</button></a></p>";*/

?>

</body>
<script src="donation.js"></script>
</html>