<!--THE ONLAUD (WEBSITE) PROJECT CAN BE VIEWED LIVE AT https://onlaud.com-->

<?php

/*to increase website load speed this page caters for two accounts the candidates' and judges' accs*/
/*this page handles forms from the home page, it also acts as a standalone page for improved UX*/


$user=$_GET['choice'];
$username= $_POST['usnm'];
$password=$_POST['passcode'];
$judge=$_POST['judgenum'];
$email= $_POST['mail'];
$id=$_POST['candid'];


if($user=="admin"){
		header('location:admnpg.php'); /*redirect to the admin's dashboard */
			exit;
	
	
}

		include "inc/headerA.php"; // head, title  , scripts and stylesheets
		include "inc/headerB.php"; // bootstrap nav bar

if(isset($email) || isset($username)){ /*for bypassing following logic gate*/
	
	$user="";
	
}


if(!isset($user)){
	/* acc.php page initial display*/
	
		echo '<div class="jumbotron">
			  
			  
				  <form method="get" action="acc.php" class="form-group">
						 <label for "user"><h2>Select User</h2></label><br>
							<input type="radio" name="choice" value="candidate"> Candidate<br>
							<input type="radio" name="choice" value="judge"> Judge<br>
							<input type="radio" name="choice" value="admin"> Administrator<br>
							<input class="btn btn-info" type="submit"  value="Continue"><br>
									  
				  </form>
			  
			</div>';
			
	
			exit;
}


			/*candidate's login form*/

		if($user=="candidate"){
						echo '<div class="jumbotron" >';
						echo '<h4>Candidates Sign In</h4>';
						echo '<form method ="post" action="acc.php">';
						echo '<div class="form-group">';
						echo '<input name="mail" id="mail" type="email" placeholder="email" required>';
						echo '</div>';
						echo '<div class="form-group">';
						echo '<input name="candid" id="candid" type="number" placeholder="candidate number" required>';
						echo '</div>';
						echo '<div class="form-group">';
						echo '<button class="btn btn-success">Log in</button>';
						echo'</div>';
						echo '</form>';
						echo '</div>';
					exit;
		}
		
		
if(!empty($email)
	|| !empty($id)
	
	){
			/*candidate's account*/
		echo '<div class="row">';
		
		echo '<div class="col-sm-6">';		
			
		echo '<h2>Candidate\'s Details</h2>';
		
		  /*show account info*/
		include "inc/connect.php";
				
		$sql = 'SELECT * FROM candidate WHERE candidate_number="'.$id.'"';
						 $result = $conn->query($sql);
						 
						if ($result->num_rows > 0) {
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
				   }else{
					   echo 'Candidate number not found. Register to get a candidate number or try again.';
					   $conn->close(); /* close the database */
					   exit;
				   }		  
				  
			  
				
		echo '</div>';
		
		/* right column for audition results */
		
		echo '<div class="col-sm-6">';			
		echo '<h2>Audition Results</h2>';
		
		/* database is still open for queries */
		
		$sql = 'SELECT * FROM results WHERE candidate_number="'.$id.'"';
						 $result = $conn->query($sql);
						 
						if ($result->num_rows > 0) {
												
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
															
				
			}else{
					echo 'You have not yet submitted a video for auditions.';
					
				 }
							 
		        $conn->close(); /*close the database*/
				echo '</div>'; /*closing tag for the row div*/
				exit;
		 }			
		
		
		
		
	   
	   
	   
	   
					/* Judges's login form*/
		if($user=="judge"){

				echo '<div class="jumbotron" >';
				echo 'Only judges can sign in here.<br>';

						echo '<div>';
						echo '<form method ="post" action="acc.php">';
						echo '<div class="form-group">';
						echo '<input name="usnm" id="usnm" type="text" placeholder="username" required>';
						echo '</div>';
						echo '<div class="form-group">';
						echo '<input name="passcode" id="passcode" type="password" placeholder="password" required>';
						echo '</div>';
						echo '<div class="form-group">';
						echo '<input name="judgenum" id="judgenum" type="number" placeholder="ID" size="2" required>';
						echo '</div>';
						echo '<div class="form-group">';
						echo '<button class="btn btn-success">Sign In</button>';
						echo '</div>';
						
						echo '</form>';
						echo '</div>';
						echo '</div>';
					exit;	
		}
	
		
			/* Judges's account*/
			
		if(!empty($username)
		|| !empty($password)
	    || !empty($judge)
				   ){
					   $acc="";
					   
					   /*check for hardwired passwords*/
					 if($password ="1stjdg"
					 || $password ="2ndjdg"
					 || $password ="3rdjdg"
					 || $password ="4thjdg"
					 ){
						 $acc="verified";
						 
					 } 
						if(empty($acc)){ 
						 
						 echo 'Wrong Password.Try again!';
						 exit;
					 }  
					   
						include "inc/connect.php"; 
						
						
						  $sql = "SELECT * FROM results WHERE judge_$judge IS NULL";
						  $result = $conn->query($sql);


							if ($result->num_rows > 0) {
													// output data of each row
																				
						 echo '<div class="container">';
						 echo "<h2>Pending Video Auditions  For  Judge $judge</h2>";
									
						  echo '<table class="table table-striped">
							<thead>
							  <tr>
							    <th>CANDIDATE ID</th>
								<th>VIDEO URL</th>
								<th>SCORE</th>
								<th>ACTION</th>
							  </tr>
							</thead>
							<tbody>';
							while($row = $result->fetch_assoc()) {
							  echo '<form method="post" action="score.php">';
							  echo '<tr>
								<td>'.$row["candidate_number"].'</td>
								<td><a href="'.$row["video_url"].'">'.$row["video_url"].'</a> </td>
								<td><input name="score" id="score" type="number" size="2"></td>
								<td><input class="btn btn-success"  type="submit" ></td>
							  </tr>';
							  
							  /* hidden values for updating correct colums in the results table */
							  
							echo '<p><input type="hidden" value="'.$row["candidate_number"].'" name="useracc" id="useracc"></p>';
							echo '<p><input type="hidden" value="'.$judge.'" name="who" id="who"></p>';
							echo '</form>';
										}
						  echo '</tbody>
								</table>
								</div>';
												} else {
													echo "No candidates are auditioning so far or your credentials are wrong.";
												}
												
											$conn->close(); /* close the database */
											exit;
				   
				   }
	
	
?>
	<!--header's closing tags-->
	</div>
	</body>
	</html>

