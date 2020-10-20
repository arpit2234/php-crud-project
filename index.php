

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="savedata.php" method="POST">
  <label for="fname">First Name</label>
  <input type="text" id="fname" name="firstname" placeholder="Your name..">

  <label for="lname">Last Name</label>
  <input type="text" id="lname" name="lastname" placeholder="Your last name..">
  <label for="Email">Email</label>
  <input type="text" id="Email" name="Email" placeholder="Your Email">
  <label for="Mob">Mob No.</label>
  <input type="text" id="Mob" name="Mob" placeholder="Your Mob No.">
  <label for="Qualification">Qualification</label>
  <input type="text" id="Qualification" name="Qualification" placeholder="Your Qualification">


  <label for="country">Gender</label>
  <select id="country" name="Gender">
    <option value="Male">Male</option>
    <option value="Female">Female</option>  
  </select>
  
<label for="bday">Birth date :</label>
<input type="date" name="bday" id="">
  <input type="submit" value="Submit">
</form>
<a href="showdata.php"><input type="submit" value="Show data" ></a>


    
</body>
</html>




