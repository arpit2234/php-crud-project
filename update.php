

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="updatedata.php" method="POST">

<?php
include 'connection.php';

$ids=$_GET['id'];

$Showquery= "select * from `registration`.`registration` where SrNo={$ids}";

$show=mysqli_query($con,$Showquery);
$arrdata=mysqli_fetch_array($show);





?>


<input type="hidden" name='id' value="<?php echo $arrdata['SrNo'];  ?>">
  <label for="fname" >First Name</label>
  <input type="text" id="fname" name="firstname" value="<?php echo $arrdata['fname'];  ?>">

  <label for="lname">Last Name</label>
  <input type="text" id="lname" name="lastname" value="<?php echo $arrdata['lname'];  ?>">
  <label for="Email">Email</label>
  <input type="text" id="Email" name="Email" value="<?php echo $arrdata['Email'];  ?>">
  <label for="Mob">Mob No.</label>
  <input type="text" id="Mob" name="Mob" value="<?php echo $arrdata['Mob'];  ?>">
  <label for="Qualification">Qualification</label>
  <input type="text" id="Qualification" name="Qualification" value="<?php echo $arrdata['Qualification'];  ?>">


  <label for="country">Gender</label >
  <select id="country" name="Gender"value="<?php echo $arrdata['Gender'];  ?>">
    <option value="Male">Male</option>
    <option value="Female">Female</option>  
  </select>
  
<label for="bday">Birth date :</label>
<input type="date" name="bday" id="" value="<?php echo $arrdata['bday'];?>">

<input type="submit" value="Update">
</form>
<a href="showdata.php"><input type="submit" value="Show data" ></a>


    
</body>
</html>




