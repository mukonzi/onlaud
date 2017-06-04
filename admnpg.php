<!--THE ONLAUD (WEBSITE) PROJECT CAN BE VIEWED LIVE AT https://onlaud.com-->

<?php
$code = "1234"; /* hardwired (not actual value for our live website)*/


$pass =$_POST['pass'];

$guest=$_POST['vip'];
$term=$_POST['srch'];

include "inc/headerA.php"; // head, title  , scripts and stylesheets
include "inc/headerB.php"; // bootstrap nav bar


if(!isset($pass)){
	
		echo '<div class="jumbotron">';
		echo 'Only Administrators are allowed to use this page. Do not attempt to login without permission.<br>';
		echo '<form method="post" action="admnpg.php">';
		echo '<div class="form-group">';
		echo '<input type="password" placeholder="password" name="pass" id="pass" size="10">';
		echo '<input class="btn btn-danger" type="submit" value="Log in" name="clicked" id="clicked">';
		echo '</div>';
        echo '</form>';
		echo '</div>';
        exit;  //stop running of script to the bottom
 
}




if($pass ==$code || $guest=="vip"){

						echo '<div class="jumbotron">';
						echo'<h2>Admin Page</h2>';
						
						echo '<form method="post" action="admnpg.php">
                            <div class="form-group">
							<input size="10" type="text" placeholder="table name" id="srch" name="srch">
							<input class="btn btn-warning" type="submit" value="View" name="vu" id="vu">
							</div>
                            <p><input type="hidden" value="vip" name="vip" id="vip"></p>
                             <p><input type="hidden" value="'.$code.'" name="pass" id="pass"></p>
							<p><input type="hidden" value="'.$count.'" name="bar" id="bar"></p>
							</form>';
						echo '</div>';

	if(!isset($term)){
					
					exit; //stop running of script to the bottom
		}else{



					



				if($term=="scoresheet"){   //code word for results
					
						include "inc/connect.php"; 
						
						  $sql = "SELECT * FROM results";
						  $result = $conn->query($sql);


							if ($result->num_rows > 0) {
													// output data of each row
																				
						 echo '<div class="container">';
						 echo '<h2>Results</h2>';
									
						  echo '<table class="table table-striped">
							<thead>
							  <tr>
							    <th>CANDIDATE ID</th>
								<th>VIDEO URL</th>
								<th>JUDGE 1</th>
								<th>JUDGE 2</th>
								<th>JUDGE 3</th>
								<th>JUDGE 4</th>
							  </tr>
							</thead>
							<tbody>';
							while($row = $result->fetch_assoc()) {
							  echo '<tr>
								<td>'.$row["candidate_number"].'</td>
								<td>'.$row["video_url"].'</td>
								<td>'.$row["judge_1"].'</td>
								<td>'.$row["judge_2"].'</td>
								<td>'.$row["judge_3"].'</td>
								<td>'.$row["judge_4"].'</td>
							  </tr>';

										}
						  echo '</tbody>
								</table>
								</div>';
												} else {
													echo "No candidates are auditioning so far.";
												}
												
												$conn->close();
												exit;
				}
				if($term=="panel"){     //code word for judges

						include "inc/connect.php"; 
				
						
						  $sql = "SELECT * FROM judge";
						  $result = $conn->query($sql);


				if ($result->num_rows > 0) {
					// output data of each row
							
						 echo '<div class="container">';
						 echo '<h2>Judges</h2>';
									
						  echo '<table class="table table-striped">
							<thead>
							  <tr>
								<th>Judge ID</th>
								<th>Username</th>
							  </tr>
							</thead>
							<tbody>';								
							while($row = $result->fetch_assoc()) {
							  echo '<tr>
								<td>'.$row["id"].'</td>
								<td>'.$row["username"].'</td>
							  </tr>';

										}
						  echo '</tbody>
								</table>
								</div>';



							} else {
									echo "No judges have registered so far.";
												}
												
								$conn->close();
								exit;
						}
						
						
					if($term=="clients"){ //code word for candidates
					
								include "inc/connect.php"; 
								
						  $sql = "SELECT * FROM candidate";
						  $result = $conn->query($sql);


				if ($result->num_rows > 0) {
											// output data of each row
														
						 echo '<div class="container">';
						 echo '<h2>Candidates</h2>';
									
						  echo '<table class="table table-striped">
							<thead>
							  <tr>
							    <th>ID</th>
								<th>Name</th>
								<th>Surname</th>
								<th>E-mail</th>
								<th>Payment Status</th>
								<th>Phone</th>
							  </tr>
							</thead>
							<tbody>';
							while($row = $result->fetch_assoc()) {
							  echo '<tr>
								<td>'.$row["candidate_number"].'</td>
								<td>'.$row["first_name"].'</td>
								<td>'.$row["last_name"].'</td>
								<td>'.$row["email"].'</td>
								<td>'.$row["payment_status"].'</td>
								<td>'.$row["phone"].'</td>
							  </tr>';

										}
						  echo '</tbody>
								</table>
								</div>';												
												
												} else {
													echo "No candidates have registered so far.";
												}
												
												$conn->close();
												exit;
												  
				}

				if($term=="stars") { //code word for artists 
				  
					
						include "inc/connect.php"; 
			
						
						  $sql = "SELECT * FROM member";
						  $result = $conn->query($sql);


				if ($result->num_rows > 0) {
								// output data of each row

															
						 echo '<div class="container">';
						 echo '<h2>Members</h2>';
									
						  echo '<table class="table table-striped">
							<thead>
							  <tr>
								<th>Username</th>
								<th>Category</th>
								<th>Photo</th>
								<th>Joined</th>
								<th>About</th>
							  </tr>
							</thead>
							<tbody>';
							while($row = $result->fetch_assoc()) {
							  echo '<tr>
								<td>'.$row["username"].'</td>
								<td>'.$row["category"].'</td>
								<td>'.$row["pic_url"].'</td>
								<td>'.$row["reg_date"].'</td>
								<td>'.$row["bio"].'</td>
							  </tr>';

										}
						  echo '</tbody>
								</table>
								</div>';			
															
							
									
				} else {
						echo "No artists have registered so far.";
					}
												
				$conn->close();
				exit;
				}
				


		}			

}else{
	echo 'Wrong password! Try again.';
	
	}
		

?>

	<!--header's closing tags-->
	</div>
	</body>
	</html>




