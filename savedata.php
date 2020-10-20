<?php
include "connection.php";

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$Email=$_POST['Email'];
$Mob=$_POST['Mob'];
$Qualification=$_POST['Qualification'];
$Gender=$_POST['Gender'];
$bday=$_POST['bday'];

// echo $bday;
$bday=date("Y-m-d",strtotime($bday));

$sql = "INSERT INTO `registration`.`registration` ( `fname`, `lname`,  `Email`, `Mob`, `Qualification`,`Gender`,`bday`, `dt`) VALUES ('$firstname','$lastname', '$Email','$Mob', '$Qualification' , '$Gender','$bday', current_timestamp());";

if($con->query($sql)==true){
    ?>
    <script>
    alert("Data saved sucessfully")
    </script>
    <?php
}
else
{
    ?>
    <script>
    alert("Data not saved sucessfully")
    </script>
    <?php
}




$con->close();


?>
