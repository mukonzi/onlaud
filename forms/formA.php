<?php
echo '<h2 id="audition">Audition</h2>
	      <div>
			  <h4><span class="label label-default">Step 2</span></h4>
			  <p>Upload your video to Google Drive or to a video site like YouTube,
				Facebook,Vine, Vid.me, Vimeo etc and then send us the link to your video.
			  </p>
				<p><button  id="audbtn" class="btn-info" >Audition</button></p>
		  </div>
		<div id="audform">

				<form method="post" action="forms.php">
					  <div class="form-group">
						<label for="email">Email address:</label>
						<input type="email" class="form-control" id="email" name="email" required>
					  </div>
					  
					  <div class="form-group">
						<label for="candnum">Candidate Number:</label>
						<input type="number" class="form-control" id="candnum" name="candnum" required>
					  </div>
					  
					  <div class="form-group">
						<label for="url">Video Url:</label>
						<input type="url" class="form-control" id="url" name="url" required>
					  </div>
					  
					 
						<p><input type="hidden" value="aud" name="cat" id="cat"></p>
						<p><input type="hidden" value="audition" name="grp" id="grp"></p>
						<button type="submit" class="btn btn-success">Submit</button>
				 </form>
		   
		</div>';
					
  
  ?>