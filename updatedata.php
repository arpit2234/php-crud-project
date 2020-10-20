<?php
include 'connection.php';




if(isset($_POST['id'])){

$idupdate=$_POST['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$Email=$_POST['Email'];
$Mob=$_POST['Mob'];
$Qualification=$_POST['Qualification'];
$Gender=$_POST['Gender'];
$bday=$_POST['bday'];



 $update ="UPDATE `registration`.`registration` SET fname='$firstname',lname='$lastname',Email='$Email',Mob='$Mob',Qualification='$Qualification',Gender='$Gender',bday='$bday' WHERE SrNo='$idupdate'";

 $res=mysqli_query($con,$update);
}





?>