<!--THE ONLAUD (WEBSITE) PROJECT CAN BE VIEWED LIVE AT https://onlaud.com-->

<?php
include "inc/headerA.php"; // head, title  , scripts and stylesheets
include "inc/headerB.php"; // bootstrap nav bar

$pic=$_POST['pic'];
$pass =$_POST['pass'];
$em=$_POST['aka'];
$usnm=$_POST['srch'];
$bio=$_POST['bio'];
	
if(!isset($pass)){
	
echo '<div class="jumbotron" >';
echo '<h3>Sign In</h3>';

echo '<form method="post" action="profile.php">

			<div class="form-group">
			<input type="text" placeholder="email" name="aka" id="aka" size="10">
			</div>
			<div class="form-group">
			<input type="password" placeholder="password" name="pass" id="pass" size="10">
			</div>
			<div class="form-group">
			<input class="btn btn-success" type="submit" value="Sign In" name="clicked" id="clicked">
			</div>
			<div class="form-group">
			</form>';

echo '</div>';

exit;  //stop running of script to the bottom
 
}


if(!empty($pass) || isset($usnm)){

		
	/*checking pic url and verifying email*/
		if(!isset($bio)){
						 include "inc/connect.php";

						$sql   = 'SELECT * FROM candidate WHERE email="'.$em.'"';
						$result = $conn->query($sql);
						  
						if ($result->num_rows > 0) {
							
						while($row = $result->fetch_assoc()) {
						$pic=$row['pic_url'];
						$bio=$row['bio'];
						$category=$row['category'];


								if(empty($pic)){
										$pic="user.png";
									
								}

						}

						}else{
							
							echo 'Account associated with that email was not Found';
							$conn->close();
							exit;
						}

		}

					/* continue to User Account if it exists*/
echo '<div class="row">';
echo '<div class="col-sm-6">';				
echo '<div class="jumbotron" >';
		echo '<h3>Profile</h3><br>';
		echo '<div>';

		echo '<img src="uploads/'.$pic.'" alt="Profile Photo">';

		echo '</div>';
 		echo '<h4>Bio: '.$bio.' </h4><br>';
		echo ' ';
		echo ' ';
		echo ' ';
		echo '<a href="changes.php?account='.$em.'" id="edit" class="btn btn-default" >Edit Profile</a><br>';
 		echo '<br>';

		
		echo '<form action="profile.php" method="post">
		<div class="form-group">
		<h4>Find other artists</h4><br>
		</div>
		<div class="form-group">
		<input type="text" name="srch" placeholder="Search by first name">
		</div>
		<div class="form-group">
		<input type="submit" value="Search">
		</div>';
		/*hidden values to store and identify current user*/
		
		echo '<p><input type="hidden" value="'.$pic.'" name="pic" id="profpic"></p>
		<p><input type="hidden" value="'.$pass.'" name="pass" id="secured"></p>
	    <p><input type="hidden" value="'.$bio.'" name="bio" id="aboutuser"></p>
		<p><input type="hidden" value="'.$em.'" name="aka" id="theid"></p>
		</form>';
echo '</div>';		
echo '</div>';	
				/*return search results from db*/
				
		
				
echo '<div class="col-sm-6">';	
  if(!empty($usnm)){	
  	echo '<h2>Search Results</h2>';
			include "inc/connect.php";

						$sql   = 'SELECT * FROM candidate WHERE first_name="'.$usnm.'"';
						$result = $conn->query($sql);
						  
						if ($result->num_rows > 0) {
		
									
						  echo '<table class="table table-striped">
							<thead>
							  <tr>
								<th>Name</th>
								<th>Surname</th>
								<th>Phone</th>
							  </tr>
							</thead>
							<tbody>';
							while($row = $result->fetch_assoc()) {
							  echo '<tr>							
								<td>'.$row["first_name"].'</td>
								<td>'.$row["last_name"].'</td>
								<td>'.$row["phone"].'</td>
							  </tr>';

										}
						  echo '</tbody>
								</table>
								</div>';	
 
						}else{
							echo 'no results where found';
						}
  }
 
echo '</div>';
echo '</div>';





}else{
	
	echo 'Please, fill in all the details. email and password';
}




?>

	<!--header's closing tags-->
	</div>
	</body>
	</html>






