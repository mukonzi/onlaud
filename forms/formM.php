<?php
 
	echo '<h2 id="join">Join</h2>
				<h4><span class="label label-default">Step 3</span></h4>
				
				<p>Succesful candidates can register as artists to start exhibiting
				their talents or to link and share with other OnlAud users.
				</p>
				
				<p><button id="joinbtn" class="btn-info" >Join</button></p>
			
				

		
		
		<div id="joinform">
		
			  
					  <form method="post" action="forms.php">
							  <div class="form-group">
								<label for="userid">Username:</label>
								<input type="text" class="form-control" id="userid" name="userid" required>
							  </div>
							  
							  <div class="form-group">
								<label for="category">Category:</label>
								<input type="text" class="form-control" id="category" name="category" required>
							  </div>

							  <div class="form-group">
								<label for="eaddress">Email address:</label>
								<input type="email" class="form-control" id="eaddress" name="eaddress" required>
							  </div>
							  
							  <div class="form-group">
							  <label for="candnum">Candidate Number:</label>
								<input type="number" class="form-control" id="candnum" name="candnum" required>
							  </div>
							  
							  <div class="form-group">
							   <label for="pin">Password:</label>
							   <input type="password" class="form-control" id="pin" name="pin" required>
							  </div>
							  
								<p><input type="hidden" value="new artist" name="grp" id="grp"></p>
								<p><input class="btn btn-success" type="submit" value="Submit" name="submit"></p>
								<p><input type="hidden" value="join" name="cat" id="cat"></p>
						</form>
		</div>';
	
		
		
	?>	
		
		