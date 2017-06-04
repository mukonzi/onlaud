 <?php


  echo '<div>
		     <h2 id="register"> Register</h2>
	         <h4><span class="label label-default">Step 1</span></h4>
			 <p> If you want to participate in video auditions and subsequently showcase your talent on our site
			 , the first step is to register and get a candidate number.
			 </p>	
	    		
			 <p>
				 <button  id="regbtn" class="btn-info" >Register Now! </button>
			 </p>
	   </div>
	   
		<div id="regform">
				 <form method="post" action="forms.php">
				  
						  <div class="form-group">
							<label for="name">First Name:</label>
							<input type="text" class="form-control" name="name" id="name" required>
						  </div>
						  
						  <div class="form-group">
							<label for="surname">Last Name:</label>
							<input type="text" class="form-control" name="surname" id="surname" required>
						  </div>

						  <div class="form-group">
							<label for="email">Email address:</label>
							<input type="email" class="form-control" name="email" id="email" required>
						  </div>
						  
						  <div class="form-group">
							<label for="phone">Phone Number:</label>
							<input type="number" class="form-control" name="phone" id="phone" required>
						  </div>
						  
							<p><input type="hidden" value="new candidate" name="grp" id="grp"></p>
							<p><input type="hidden" value="reg" name="cat" id="cat"></p>
							<p><input  class="btn btn-success" type="submit" value="Register"></p>
									
				  
				 </form>';
	  echo '</div>';
	
	  
?>	  