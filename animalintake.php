<html>
    <head>
        <title>
            Adding dog records CORRECT!
        </title>
    </head>

    <body>
        <?php

        include 'databaseconnection.php' ; // include database connection file

        // getting form data:
        $aId = $_REQUEST['aId'] ;
        $aName = $_REQUEST['aName'] ;
        $aSpecies = $_REQUEST['aSpecies'] ;
        $aBreed = $_REQUEST['abreed'] ;
        $aAge = $_REQUEST['aAge'] ;
        $aGender = $_REQUEST['aGender'] ;
        $aRescueDetail = $_REQUEST['aRescueDetail'] ;
        $aHealthStatus = $_REQUEST['aHealthStatus'] ;
        $aHeight = $_REQUEST['aHeight'] ;
        $aWeight = $_REQUEST['aWeight'] ;
        $apicture = $_FILES['aPicture']['name']; //image selection

        $destination = "animal/".$apicture ; // will store images in the animals folder
        move_uploaded_file($_FILES['aPicture']['tmp_name'],$destination) ; //image uploaded

        //sql to add to the database table:
        $sql1="INSERT INTO animalintake(animalId, aName, aSpecies, aBreed, aAge, aGender, aRescueDetails, aHealthStatus, aHeight, aWeight, aImage)
                VALUES('$aId','$aName','$aSpecies','$aBreed','$aAge','$aGender','$aRescueDetail','$aHealthStatus','$aHeight','$aWeight','$apicture') ";


        $result = $conn->query($sql1) ; // query statement to execute SQL

        if($result ==  FALSE){          // if query fails
            die("unable to create the record".$conn->error) ;

        } else{
            echo "<br></br> Dog record successfullly created" ;
        }

        $conn->close(); 

            //menu options for navigating to other forms:
            echo"<p> <a href=\"AddDogForm.html\"> <button> Add another dog </button></a> </p>" ;
            echo"<p><input type = \"submit\" value = \"Update dog record\" </p>" ;
            echo"<p> <a href=\"displayAllrecords.html\"> <button> Display All Records </button></a> </p>" ;
            echo"<p> <a href=\"dogRecordsearchform.html\"> <button> Search a record </button></a> </p>" ;
            echo"<p> <a href=\"loginForm.html\"> <button> Back to Login </button></a> </p>" ;

        //echo "</body>" ;

    


        ?>
    </body>

</html>

  
