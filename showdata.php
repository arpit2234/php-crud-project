<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="showdatastyle.css">
    <?php include 'connection.php' ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
</head>
<body>
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">Sr. No</th>
								<th class="column100 column2" data-column="column2">First Name</th>
								<th class="column100 column3" data-column="column3">Last Name</th>
								<th class="column100 column4" data-column="column4">Email</th>
								<th class="column100 column5" data-column="column5">Mob No.</th>
								<th class="column100 column6" data-column="column6">Qualification</th>
								<th class="column100 column7" data-column="column7">Gender</th>
								<th class="column100 column8" data-column="column8">Birth Date</th>
                                <th class="column100 column7" data-column="column7">Time</th>
                                <th class="column100 column7" data-column="column7">Operation</th>
								
							</tr>
						</thead>
                        <?php  
                        $selectquery = " select * from `registration`.`registration` ";
                        $query = mysqli_query($con,$selectquery);
                        
                        while ($res =mysqli_fetch_array($query)) {
                        
                        ?>
						<tbody>
							<tr class="row100">
								<td class="column100 column1" data-column="column1"><?php echo $res['SrNo'];  ?></td>
                                <td class="column100 column1" data-column="column1"><?php echo $res['fname'];  ?></td>
                                <td class="column100 column1" data-column="column1"><?php echo $res['lname'];  ?></td>
                                <td class="column100 column1" data-column="column1"><?php echo $res['Email'];  ?></td>
                                <td class="column100 column1" data-column="column1"><?php echo $res['Mob'];  ?></td>
                                <td class="column100 column1" data-column="column1"><?php echo $res['Qualification'];  ?></td>
                                <td class="column100 column1" data-column="column1"><?php echo $res['Gender'];  ?></td>
                                <td class="column100 column1" data-column="column1"><?php echo $res['bday'];  ?></td>
                                <td class="column100 column1" data-column="column1"><?php echo $res['dt'];  ?></td>
                                <td><a href="update.php?id=<?php echo  $res['SrNo'];  ?>"><i class="fas fa-pen-alt"></i></a></td>
                                <td><a href="delete.php?idth=<?php echo  $res['SrNo'];  ?>"><i class="fas fa-trash-alt"></i></td>

							
							</tr>
                            <?php
                        }
                        ?>

							
						</tbody>
					</table>
				</div>

    
</body>
</html>