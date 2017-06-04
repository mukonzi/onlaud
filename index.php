<!--THE ONLAUD (WEBSITE) PROJECT CAN BE VIEWED LIVE AT https://onlaud.com-->

<?php
$title = "OnlAud | Online Auditions";
$description = "OnlAud conducts online auditions and rate candidates based on laud from our online panel of four judges. All candidate  have to do is to submit a short video for audition.";

	include "inc/headerA.php";// head, title  , scripts and stylesheets
	echo '<div id="wrapper">';
	include "inc/headerB.php"; // bootstrap nav bar
	
?>




<div class="row" id="redpic">

	    <!-- judges section-->
<div class="col-sm-6">
	<h2>Judges</h2>
			
	<div>
		<div class="slide">
			<img class="img-responsive" src="img/judges.gif" alt="">	
			<div class="photo-overlay">
				<h2>Judges</h2>
					<p>
					<ol>
					<li><h4>Stewart</h4>A songwriter and rapper</li>
					<li><h4>Simba</h4>A local music fan</li>
					<li><h4>Maria</h4>A music producer</li>
					<li><h4>Tannypee</h4><p>A vocalist and a beauty and cosmetics consultant</p></li>
					</ol>
					</p>
					<a href="acc.php?choice=judge" class="btn btn-info">Judge's login</a></li>	

			</div>
       </div>	
    </div>

</div>
<div class="col-sm-6">

					<!-- candidates registration form-->
					<?php include "forms/formC.php";?>


		</div>			
		
</div>


<div class="row">

	<!-- auditions form-->
		<div class="col-sm-4">
				<?php include "forms/formA.php";?>
		</div>
  
	
	
	<div class="col-sm-4">
		<!-- membership form-->
		<?php include "forms/formM.php";?>
	
	</div>
	
	<!-- the  bootstrap link below is for the following social media icons e.g the class  .fa fa-facebook-->
	
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	
<div class="col-sm-4">
			<h2>Contact</h2>
					
				 <p>Have a question or feedback? Contact us!</p>
				 <p><a href="+263733093131" ><i class="fa fa-phone"></i> Tel : +263733093131</a></p>
				<p><a href="" title="Contact us!"><i class="fa fa-envelope"></i> feedback@onlaud.com</a></p>
            <h3>Follow:</h3>
			
			
<a href="https://twitter.com/onlaud" id="gh" target="_blank" title="Twitter"><span class="fa-stack fa-lg">
  <i class="fa fa-square-o fa-stack-2x"></i>
  <i class="fa fa-twitter fa-stack-1x"></i>
</span>
Twitter</a>
<a href="https://facebook.com/onlaud" id="gh" target="_blank" title="Facebook"><span class="fa-stack fa-lg">
  <i class="fa fa-square-o fa-stack-2x"></i>
  <i class="fa fa-facebook fa-stack-1x"></i>
</span>
Facebook</a>
<a href=""  target="_blank" title="GitHub"><span class="fa-stack fa-lg">
  <i class="fa fa-square-o fa-stack-2x"></i>
  <i class="fa fa-github fa-stack-1x"></i>
</span>
GitHub</a>

		


		
			
			</div>

	</div>	
</div>


 <footer id="footer">
<hr>


 <div class="row">

 
	       <div class="col-sm-6">
			<h3><u>Coders</u></h3>
                				
				<p><i class="fa fa-code"></i> Web Design: Pride</p>
                <p><i class="fa fa-code"></i> Front-End: Simba<p>
				<p><i class="fa fa-code"></i> Back-End: Stewart</p>
				<p><i class="fa fa-android"></i> Android: Stewart</p>
				
            </div>

            <div class="col-sm-6">
			<h3><u>Downloads</u></h3>
   					<p>OnlAud moblie app 
						 <a href="https://onlaud.com/downloads/mobile.apk" class="btn btn-success btn-lg">
							<span class="glyphicon glyphicon-download"></span> Download 
						 </a>
					</p>
			</div>
</div>
		
                    <p>Copyright © OnlAud <?php echo date("Y"); ?> | <a href="policy.html">Privacy Policy</a> | <a href="sitemap.html">Site Map</a></p>
					
					

</footer>
	  
		


</div> <!--wrapper div closing tag-->
</div> <!--container div closing tag-->

<script src="js/jquery.js" type="text/javascript"  charset="utf-8"></script>
<script src="js/dynamic.js" type="text/javascript"  charset="utf-8"></script>
</body>

</html>
