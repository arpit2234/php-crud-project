<?php
include 'connection.php';


$id =$_GET['idth'];

$delete =" delete from `registration`.`registration` where SrNo=$id";


$res=mysqli_query($con,$delete);

header ('location:showdata.php');



?>