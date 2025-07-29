<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> All animal records results </title>
    <style>
        body {
            background-color:lightpink;
        }

        h2{
            color:red;
        }

        table, th, td {
            padding: 15px;
            text-align: left;
            background-origin: padding-box;
        }
    </style>
</head>
<body>

<?php
    require 'databaseConnection.php'; // copies all the code from the file to this section
    //query to search a record matching login details

    $sql = "SELECT * FROM animalintake"; //selects all records from the animalintake table

    $result = $conn->query($sql); //executes a query as store results in variable

    if($result->num_rows > 0) { // checks if a matching record is found using the mysql num_rows property

        //Display all matching records
        echo "<p><h2>All dog record(s) in the system </h2> </p>";
        echo "<center><table width = '75%' bgcolor = ''><tr bgcolor = 'peachpuff'>
        <th>animal Id</th><th>Name</th><th>Species</th><th>Breed</th><th>Age</th><th>Gender</th>
        <th>Rescue Details</th><th>Health Details</th><th>Height</th><th>Weight</th><th>Image</th>
        <th>Update</th><th> Medication </th><th>Delete</th>
        </tr>";

        while( $row = $result->fetch_assoc() ) { ?>

        <tr>
            <td>
                <?php echo $row["animalId"] ; ?>
            </td>

            <td>
                <?php echo $row["aName"] ; ?>
            </td>

            <td>
                <?php echo $row["aSpecies"] ; ?>
            </td>

            
            <td>
                <?php echo $row["aBreed"] ; ?>
            </td>
            <td>
                <?php echo $row["aAge"] ; ?>
            </td>

            <td>
                <?php echo $row["aGender"] ; ?>
            </td>


            <td>
                <?php echo $row["aRescueDetails"] ; ?>
            </td>

            <td>
                <?php echo $row["aHealthStatus"] ; ?>
            </td>


            <td>
                <?php echo $row["aHeight"] ; ?>
            </td>

            <td>
                <?php echo $row["aWeight"] ; ?>
            </td>

            <td>
                <img src="dogs/<?php echo $row["aImage"] ; ?>" width="80" height="80"> <!-- altered-->
            </td>

           

            <td> <!------------- code to create buttons and display the idnumber on URL of a referenced form --> 

            <a href = "dogsUpdaterecord.php?didnum=<?php echo $row["animalId"] ?>"><button> Update </button></a>
        </td>
        
       <td>
        <a href = "dogsMedicationrecord.php?didnum=<?php echo $row["didnum"] ?>"><button> Medication </button></a>
        </td> 
        <td>
        <a href = "dogsDeleteRecord.php?didnum=<?php echo $row["didnum"] ?>"><button> Delete </button></a>

        </td>
        </tr>

        <?php }

       /* $sql2= "SELECT dgender, gendercount FROM dogbygender Where dgender = 'female'" ;
        $sql3 = "SELECT dgender, gendercount FROM DGENDER = 'MALE'" ;

        $resultgF= $conn->query($sql2) ;
        $resultgM= $conn->query($sql3) ;
        $row1= $resultgF->fetch_assoc() ; //altered
        $row2= $resultgM->fetch_assoc() ; //altered 


        echo "<tr><td>&nbsp;</td><td>".$row1['dgender']. " dogs: " . $row1['gendercount']."</br>" 
		.$row2['dgender']. " dogs: " . $row2['gendercount']."</td><td colspan=\" 8\">&nbsp;</td></tr>";

*/	} else {

		echo "<p>No matching record found. Try using other search criteria </p>";
	}

	$conn->close();
	echo "</table></center>";
	echo "<p><a href =\"AddDogForm.html\"><button>Add another dog </button></a></p>" ;
	echo " <p> <a href = \"displayAllrecords.php\"><button>Display All dog Records  </button></a></p>" ;
	echo "<p><a href = \"dogRecordSearchForm.html\"><button> Search another dog record </button></a></p>";
	echo " <p> <a href= \"loginForm.html\"><button>Back to Login </button></a></p>" ;

    ?>

</body>
</html>

