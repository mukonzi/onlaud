<!--THE ONLAUD (WEBSITE) PROJECT CAN BE VIEWED LIVE AT https://onlaud.com-->

<?php
		$cat=$_POST['cat'];
		$user=$_GET['user'];
		$choice=$_GET['choice'];


		if($user=="sign in"){/*headers should be sent before any other element is displayed*/
			
			
			header('location:acc.php'); /*redirect to the sign in page */
			exit;
		}

		/* page header for form.php */
		include "inc/headerA.php"; // head, title  , scripts and stylesheets
		include "inc/headerB.php"; // bootstrap nav bar

				
			

		if ($cat=="reg"){
				
				
				include "inc/newreg.php"; /*new registrations*/
				exit;
			}
			
			if($cat=="aud"){
				
				
			   include "inc/newreg.php"; /*new video audition*/
			   


				exit;
			}
			if ($cat=="join"){
				
				include "inc/newreg.php"; /*new registration*/
				exit;
			}
			
			
			
		if($user=="register"){
			echo '<div class="jumbotron">';	
			echo '<form method="get" action="forms.php" class="form-group">
					  <label for "user">Register As</label><br>
						  <input type="radio" name="choice" value="candidate"> Candidate<br>
						  <input type="radio" name="choice" value="artist"> Artist<br>
						  <input class="btn btn-info" type="submit"  value="Continue"><br>
					  
				 </form>';
			echo '</div>';
			exit;
		}





		if($user=="audition"){ /*audition formA.php*/
			include "forms/formA.php";
			exit;
		}
		  
		  
		if($choice=="candidate"){/*candidates formC.php*/
			include "forms/formC.php";
			exit;
		  }
		  
		if($choice=="artist"){/*membership formM.php*/
			 include "forms/formM.php";
			 exit;
		   }
		   
		   
		   
		if(!isset($cat)){
			
			/*form.php page initial display*/
			echo '<div class="jumbotron">
				  <p>What would you like to do?</p>


					  <form method="get" action="forms.php" class="form-group">


						  <input type="radio" name="user" value="register"> Register<br>
						  <input type="radio" name="user" value="audition"> Audition<br>
						  <input type="radio" name="user" value="sign in"> Sign In<br>
						  <input class="btn btn-info" type="submit"  value="Continue"><br>
						  
					  </form>';
			echo '</div>';
			exit;
		}

   ?>
	  
	  
	  	<!--header's closing tags-->
	</div>
	</body>
	</html>
	  
	  
	  
	  
	  
	  
	  
