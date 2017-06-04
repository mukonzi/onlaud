<!--THE ONLAUD (WEBSITE) PROJECT CAN BE VIEWED LIVE AT https://onlaud.com-->

<?php
include "inc/headerA.php"; // head, title  , scripts and stylesheets
include "inc/headerB.php"; // bootstrap nav bar


$mark=$_POST['score'];
$user=$_POST['useracc'];
$judge=$_POST['who'];
if(!isset($mark)){
		header('location:acc.php?choice=judge'); /*redirect to the judge page*/
			exit;
	
	
}
		include "inc/header3.php";
		
		/*update score in results database*/
		include "inc/connect.php";
			
		$sql   = 'UPDATE results SET judge_'.$judge.'="'.$mark.'" Where candidate_number="'.$user.'"';
		  $result = $conn->query($sql);
						  
						  
		$conn->close();
		
		echo '<div class="jumbotron" >';
		echo '<h4>Judge '.$judge.' </h4>';
		echo '#Results for Candindate Number '.$user.' were submitted successfully.<br>';
		echo '#Go back and refresh the previous page to see the changes';


		echo '</div>';



?>	
<!--header's closing tags-->
	</div>
	</body>
	</html>