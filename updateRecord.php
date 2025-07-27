
<?php
include 'databaseConnection.php';

$dog_Id = $_GET['didnum']; //Extract idnumber from the url (e.g., page.php?didnum=5)

$sql_select = "SELECT * FROM medicalprocedure where didnum = '$dog_Id' ";
$result = $conn->query($sql_select);
$row2 = $result->fetch_assoc();

echo "dog idnumber = ". $dog_Id. " extracted from the URL using GET<br/>"; //

echo "dog idnumber = ". $row2['didnum']. " extracted from database using query";

//if($_SERVER['REQUEST_METHOD'] =="POST")
if(isset($_POST['update'])){ //update is name of submit button
   $dog_Id = $_GET['medicalprocedure_id'];
   $Med_Type = $_POST['medicalprocedureType'];
   $Med_Date = $_POST['medicalprocedureDate'];
   $Med_Notes = $_POST['medicalProcedureNotes'];
   $Med_Status = $_POST['medicalProcedureStatus'];
   

   $sql_update = "UPDATE medicalprocedure SET  medicalprocedureType = '$Med_Type',
      medicalprocedureDate = '$Med_Date',
      medicalProcedureNotes = '$Med_Notes',
      medicalProcedureStatus = '$Med_Status', WHERE  didnum = '$dog_Id'";
                                           
   $query_execute = $conn->query($sql_update);

   if($query_execute){
   // echo "<script>alert('Record successfully updated')</script>";
   header("Location:displayAllrecords.php");
   
   $conn->close();
   } else {
      echo "<script>alert('Record could update failed. Retry')</script>";
      header("Location:displayAllrecords.php");
   }

      }
   ?>
   <!DOCTYPE html>

   <html>
      <head>
   <title></title>

   <style>
   body{
      background-color: lightblue;
   }
   h2 {
      color: blue;
   }
      </style>

   <head>

   <body>

   <h2>Dog Medical records update form</h2>
   <hr>

   <form action="" method="POST" enctype="multipart/form-data">
    <table width="50%">
        <!-- Hidden ID field -->
        <input type="hidden" name="didnum" value="<?php echo $row2['didnum']; ?>">

        <tr>
            <td>Medical Procedure Type:</td>
            <td><input type="text" name="medicalprocedureType" value="<?php echo $row2['medicalprocedureType']; ?>"></td>
        </tr>

        <tr>
            <td>Medical Procedure Date:</td>
            <td><input type="date" name="medicalprocedureDate" value="<?php echo $row2['medicalprocedureDate']; ?>"></td>
        </tr>

        <tr>
            <td>Procedure Notes:</td>
            <td><input type="text" name="medicalProcedureNotes" value="<?php echo $row2['medicalProcedureNotes']; ?>"></td>
        </tr>

        <tr>
            <td>Procedure Status:</td>
            <td><input type="text" name="medicalProcedureStatus" value="<?php echo $row2['medicalProcedureStatus']; ?>"></td>
        </tr>

        

        <tr>
            <td colspan="2">
                <input type="submit" name="update" value="Update Dog Record">
            </td>
        </tr>
    </table>
</form>


<hr>

</body>
</html>




