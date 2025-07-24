<html>
    <head>
        <title>
            Adding dog records
        </title>
    </head>

    <body>
        <!-- to still be edited--> 
        <?php

        include 'databaseconnection.php' ;

        $did = $_REQUEST['didnum'] ;
        $dname = $_REQUEST['dname'] ;
        $dgender = $_REQUEST['agender'] ;
        $dspecies = $_REQUEST['aSpecies'] ;
        $dage = $_REQUEST['dage'] ;
        $dbreed = $_REQUEST['abreed'] ;
        $darescueDetail = $_REQUEST['arescueDetails'] ;
        $dbreed = $_REQUEST['dbreed'] ;
        $dhealthStatus = $_REQUEST['ahealthStatus'] ;
        $dweight = $_REQUEST['aweight'] ;
        $dheight = $_REQUEST['aheight'] ;
        $picture = $_FILES['picture']['name']; //image selection
        
        $destination = "dogs/".$picture ;
        move_uploaded_file($_FILES['picture']['tmp_name'],$destination) ; //image uploaded

        //sql to add to the database table:
        $sql1="INSERT INTO dogsrecords(didnum, dname, agender, abreed, dage, dcolor, dheight, dweight, picture)
                VALUES('$did','$dname','$dgender','$dbreed','$dage','$dcolor','$dheight','$dweight','$picture') ";


        $result = $conn->query($sql1) ; // queery statement to execute SQL
        
        if($result ==  FALSE){
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

        echo "</body>" ;

    

            
            
            





        

    

 





<?php
    /*

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width ,initial-scale=1.0">
    <title>Animal Intake and registration</title>
    <link rel="stylesheet" href="Animalntake.css">
</head>
<body>
    <form action="animalIntake.php" method="post">
      <table>
        <tr><th1 colspan="6">Animal Intake And Registration Form:</th1>
        <tr><td>Animal ID:</td><td><input type="INT" value="" required></td></tr>
        <tr><td>Name:</td><td><input type="text" size="30" value="" required></td></tr>
        <tr><td>Species:</td><td><input type="text" size="30" value="" required></td></tr>
        <tr></tr><td>Species:</td><td>
            <select name="aSpecies" id="aSpecies" required>
              <option value="">None</option>
              <option value="Dog">Dog</option>
              <option value="Donkey ">Donkey</option>
              <option value="Cat">Cat</option>
              <option value="Sheep">Sheep</option>
              <option value="Pigs">Pigs</option>
              <option value="Goat">Goat</option>
              <option value="Horses">Horses</option>
             </select></td></tr>
        <tr></tr><td>Breed:</td><td>
          <select name="aBreed" id="abreed" required >

            <option value="">None</option>
            <option value="Afferpinscher">Afferpinscher</option>
            <option value="Aktla">Aktla</option>
            <option value="Basset Hound">Basset Hound</option>
            <option value="Beagle">Beagle</option>
            <option value="Bernese Mountain Dog">Bernese Mountain Dog</option>
            <option value="Bloodhound">Bloodhound</option>
            <option value="Boerboel">Boerboel</option>
            <option value="Border Collie">Border Colli</option>
            <option value="German Shepherd">German Shepherd</option>
            <option value="Labrador Retriever">Labrador Retriever</option>
            <option value=" Rhodesian Ridgeback">Rhodesian Ridgeback</option></select>

        <tr><td>Age:</td><td><input type="INT"  value="" required></td></tr>
        <tr></tr><td>Gender:</td><td>
          <select name="agender" id="agender" required >
            <option value="Female">Female</option>
            <option value="Male">Male</option>
          </select>
        
        <tr><td>Rescue Details:</td><td><input type="text" size="70" value="" required></td></tr>
        <tr><td>Health Status:</td><td><input type="text" size="20" value="" required></td></tr>
        <tr><td>Height:</td><td><input type="INT"  value="" required></td></tr>
        <tr><td>Weight:</td><td><input type="INT"  value="" required></td></tr>
        <tr><td>Image:</td><td><input type="image" size="100" value="" required></td></tr>
   
      </table>
</body>
</html>

    */
</html>
