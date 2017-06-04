<?php

/*THIS PAGE PROCCESSES REGISTRATION FORM SUBMISSIONS  FROM index.php*/

$group=$_POST['grp']; /* identifies form category */


function cand_num() {
	
	return mt_rand(1000,10000); /* for creating candidate number */
}


if($group=="new candidate"){
	$email =$_POST['email']; 
	$name =$_POST['name'];
	$surname=$_POST['surname'];
	$phone =$_POST['phone'];
	$id = cand_num();/*random number*/
	$payment_status="not paid";

	
    if(!empty($email)  /* check if important fields are not empty */
      || !empty($name)
	  || !empty($surname)
	   || !empty($phone)
      ){
	   
	   
    include "inc/connect.php"; /* open database */

	$sql   = "INSERT INTO candidate(candidate_number, first_name, last_name, payment_status, phone, email) VALUES";
	$value= '("'.$id .'","'.$name .'","'.$surname.'","'.$payment_status.'","'.$phone.'","'.$email.'")';


			if ($conn->query($sql.$value) === TRUE) {
	
			echo '<div class="jumbotron">';
			echo '<h2> New Candidate</h2><br>';
			echo 'Thank you for registering. You can now <a href="acc.php?choice=candidate">login</a> into your account';
			echo'You can now pay the audition fee of $5 (five dollars only) using the options listed below.</p>';
			echo "We have sent an email to you with the payment methods on this address: $email<br>";
			echo '</div>';
	
			} else {
					echo "Sorry $name";
					echo "Error: " . $sql . "<br>" . $conn->error;
					exit;
					}

			$conn->close(); /* close database and send email to candidate */



			$to = $email;
			$subject = "Candidate Number: $id";
			$txt =  "Hi, $name.
		Registration successful!.
		Visit https://onlaud.com/acc.php to check your registration details.
		If you did not send a request for an online audition please let us know via email.";
			$headers = "From: admin@onlaud.com" . "\r\n" .
			"CC: admin@onlaud.com";

			mail($to,$subject,$txt,$headers);





		}else{
			echo 'Failed! Fill in all details in the registration form.';
			
			}
	
}

if($group=="new artist"){
	
			$category =$_POST['category'];
			$usnm=$_POST['userid'];
			$email=$_POST['eaddress'] ;
			$pswrd =$_POST['pin'];
			$date=date("d-n-Y");
			$candidate_number=$_POST['candnum'];
				if(!empty($candidate_number)
				|| !empty($email)
				
			   ){
				   
			include "inc/connect.php"; /* open database */

			$sql   = "INSERT INTO member(category, username, password, bio, pic_url, candidate_number,reg_date) VALUES";
			$value= '("'.$category .'","'.$usnm .'","'.$pswrd.'","Hi, I am a '.$category.'","user.png","'.$code.'","'.$date.'")';


			if ($conn->query($sql.$value) === TRUE) {
				echo '<div class="jumbotron">';
				echo '<h2> New Account</h2><br>';
				echo 'Account successfully created. You can now <a href="profile.php">login</a> into your account';
				echo '</div>';
			} else {
				
				echo "Error: " . $sql . "<br>" . $conn->error;
				exit;
			}

			$conn->close();  /* close database and send email to candidate */



				$to = $email;
				$subject = "Membership";
				$txt =  "Hi,
			Registration successful!.
			Visit https://onlaud.com/profile.php to check your registration details.
			If you did not send a request for an online audition please let us know via email.";
				$headers = "From: admin@onlaud.com" . "\r\n" .
				"CC: admin@onlaud.com";

				mail($to,$subject,$txt,$headers);




			}else{
				echo 'Failed! Fill in all details in the registration form.';
				
				}
				
			}

if($group=="audition"){
	
		$email=$_POST['email'] ;
		$candidate_number=$_POST['candnum'];
		$url=$_POST['url'];


			if(!empty($candidate_number)
			|| !empty($email)
			){
		 
		include "inc/connect.php"; /* open database */

		$sql   = "INSERT INTO results(candidate_number, video_url, judge_1, judge_2, judge_3, judge_4, sent, comment) VALUES";
		$value= '("'.$candidate_number .'","'.$url .'",null, null,null,null,"not yet","Final results are not yet out.")';


		if ($conn->query($sql.$value) === TRUE) {
			echo '<div class="jumbotron">';
			echo '<h2>Video Audition</h2>';
			echo 'Video url has been submitted<br>';
			echo 'We shall send you a message with the results after the video audition.If our judges think you are talented 
			you stand a chance to register as an artist and start showcasing your talent.';
			echo '</div>';	
		} else {
			
			echo "Error: " . $sql . "<br>" . $conn->error;
			exit;
		}

		$conn->close(); /* close database and send email to candidate */



			$to = $email;
			$subject = "Audition";
			$txt =  "Hi,
		Video url was sent.
		Later visit https://onlaud.com/acc.php to login into your account and check your results. 
		If you did not send a request for an online audition please let us know via email.";
			$headers = "From: admin@onlaud.com" . "\r\n" .
			"CC: admin@onlaud.com";

			mail($to,$subject,$txt,$headers);




		}else{
			echo 'Failed! Fill in all details in the registration form.';
			
			}
	
}

?>