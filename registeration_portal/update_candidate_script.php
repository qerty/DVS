<?php
	
	session_start();
	if(!isset($_POST['UP_CANDIDATE_ID']) || trim($_POST['UP_CANDIDATE_ID'])== '')						//handle empty request
	{
		header("refresh:0;url=update_candidate.php");
			echo "is empty";
		
	}
	else
	{
	//echo "<br> UP_CANDIDATE_ID";
	//echo $_POST['UP_CANDIDATE_ID'];

	$_SESSION['UP_CANDIDATE_ID']=$_POST['UP_CANDIDATE_ID'];												 

	//echo $_SESSION['UP_CANDIDATE_ID'];
	$con = mysqli_connect('localhost','root','6991');												     //code for database connectivity
	if(!$con) echo 'cannot connect';
	if(!mysqli_select_db($con,'dvs'))																	 //code for selecting database		
		echo 'cannot connect';

				$check=$_POST['UP_CANDIDATE_ID'];	
				
				$star="select * from candidate_table where CAND_ID='$check'";							 //query for selecting candidate 
					
				//echo "<br><br><br>into main code";

					$result=mysqli_query($con,$star); 													 //to execute query on database and store rsult in 'result'
					$row=mysqli_fetch_array($result);													 //to fetch records from 'result' vaariable
					if($row['CAND_ID']===$check)
					{		
						
					//	echo "<br>in if..... ";

						//$_SESSION['TITLE']=$row['TITLE'];
						$_SESSION['FNAME']=$row['FNAME'];
						$_SESSION['MNAME']=$row['MNAME'];
						$_SESSION['LNAME']=$row['LNAME'];
						
					    $_SESSION['VOTER_ID']=$row['VOTER_ID'];

				       /*
				        $_SESSION['SEX']=$row['SEX'];
				        $_SESSION['DOB']=$row['DOB'];
				        $_SESSION['AADHAAR']=$row['AADHAAR'];
						
				        $_SESSION['STREET_ADD']=$row['STREET_ADD'];
				        $_SESSION['DISTRICT']=$row['DISTRICT'];
				        $_SESSION['STATE']=$row['STATE'];
				        $_SESSION['PINCODE']=$row['PINCODE'];
				        $_SESSION['POB']=$row['POB'];
						*/
				        $_SESSION['EDU_LEVEL']=$row['EDU_LEVEL'];

				        /*$_SESSION['CASTE']=$row['CASTE'];
				        $_SESSION['RELIGION']=$row['RELIGION'];
				        $_SESSION['NATIVE_LANG']=$row['NATIVE_LANG'];
				        $_SESSION['INCOME']=$row['INCOME'];
				        $_SESSION['PHY_CHAL']=$row['PHY_CHAL'];
				        $_SESSION['OCCP']=$row['OCCP'];
				        $_SESSION['MOB_NO']=$row['MOB_NO'];
				        $_SESSION['EMAIL']=$row['EMAIL'];
						//$_SESSION['AADHAAR_PROOF']=$row['AADHAAR_PROOF'];
				       // $_SESSION['PHOTO']=$row['PHOTO'];
				       // $_SESSION['RESIDENT_PROOF']=$row['RESIDENT_PROOF'];
				        //$_SESSION['FO_ID']=$row['FO_ID'];
				        //$_SESSION['POLL_ID']=$row['POLL_ID'];
				        //$_SESSION['STATUS']=$row['STATUS'];
				        $_SESSION['OSE']=$row['OSE'];
				        //$_SESSION['P_VID']=$row['P_VID'];
				        $_SESSION['CITY']=$row['CITY'];
						
						echo "<br>";				
						echo $_SESSION['FNAME']."<br>";
						echo $_SESSION['MNAME']."<br>";
						echo $_SESSION['LNAME']."<br>";*/
						
						$_SESSION['PARTY_NAME']=$row['PARTY_NAME'];
						$_SESSION['WORK_EXP']=$row['WORK_EXP'];
						$_SESSION['POL_EXP']=$row['POL_EXP'];
						$_SESSION['ACHIEVEMENTS']=$row['ACHIEVEMENTS'];
						$_SESSION['PROP_AFF']=$row['PROP_AFF'];
						$_SESSION['BUSS_AFF']=$row['BUSS_AFF'];
						$_SESSION['CRIM_AFF']=$row['CRIM_AFF'];
						?>

<html>
	<head>
		<meta name="viewport" content="width=device-width initial-scale=1.0">
	
	<link rel="shortcut icon" href="India.ico" />
		<style type="text/css">
			.loader {
    border: 16px solid #f3f3f3; /* Light grey */
    border-top: 16px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
    position :absolute;
    right: 0;
    left: 0;
    top:0;
    bottom: 0;
    margin :auto;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
		</style>
	</head>
	<body>
		<div class="loader"></div>
	</body>
</html>

						<?php	
						header("refresh:5;url=update_candidate_in_form.php");								//load update_candidate_in_form.php after refresh 
					}
				
				else
					{
						echo '<script>alert("not found" )</script>';
						header("refresh:0;url=update_candidate.php");										//load update_candidate.php after refresh 
					
					}
			
			
				
    }
	?>