<?php
session_start();
$check=$_SESSION['VOTER'];
$con = mysqli_connect('localhost','root','6991');                        //code for database connectivity                     
    if(!$con) echo 'cannot connect';
    if(!mysqli_select_db($con,'dvs'))                                      //code for selecting database
        echo 'cannot connect';


        //$query="insert into voter_table()values(11,'$name') ";
        
        $star="select FNAME,LNAME,MNAME,PHOTO 
               from voter_table 
               where VOTER_ID='$check' ";                                  //query for selecting  RO
        if($result=mysqli_query($con,$star))
        {       
            $row=mysqli_fetch_array($result);                              //to fetch records into a 'row' variable
            
               
                $_SESSION['FNAME']=$row['FNAME'];                  
                $_SESSION['MNAME']=$row['MNAME']; 
                $_SESSION['LNAME']=$row['LNAME']; 
            
        }
        else
            {   echo "use correct identifier";
                header("refresh:2; url=ro_login.php");                    //load ro_login.php after refresh
            }

?>
<html>

<head>
<meta name="viewport" content="width=device-width initial-scale=1.0">
    
    <link rel="shortcut icon" href="India.ico" />
<link rel="stylesheet" type="text/css" href="hamburger.css">
<style>
 header {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}
footer{
       padding: 1em;
    color: white;
    background-color: black;
    clear: left;
   /* width:100%;*/
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    width: 150px;
    border-radius: 8px;
}
.button1 {
    background-color: rgb(255,40,40); 
    color: white; 
    border: 2px solid rgb(255,0,0);
    margin-left: 400px;
}

.button1:hover {
    background-color: rgb(255,0,0);
    color: white;
}
</style>
</head>
<body background="shade.png" style="background-position: center; background-size:100%;">
<div id="heads">
    <header>
    <img src="eci.png" align="left" height="60px" width="60px;" style="margin-left: 10px;">
    <h2>ELECTION COMMISSION OF INDIA</h2>
    </header>
</div>

<!--<div id=logout>
<button class="button button1" style="position:absolute;top:10px;right:10px;" onclick=retdirect()>LOGOUT</button>
</div>-->


<div id="ham">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<br>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="candidate_registration_inter.php">Register Candidate</a>
  <a href="update_candidate.php">Update Candidate </a>
  <a href="delete_candidate.php">Delete Candidate</a>
</div>
</div>

<!--<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
-->
<div style="position: absolute;top: 200px;right: 300px;left: 300px;">
    <table style="font-weight: bold; font-size: 20px;" align="center" cellspacing="20px" cellpadding="10px">
        <tr><td align="center" colspan="2"><u>WELCOME</u></td></tr>
        <tr>
            <td align="right">RO_ID : </td><td><?php echo $_SESSION['RO_ID']; ?></td>
        </tr>
        <tr>
            <td align="right">CONS_ID : </td><td><?php echo $_SESSION['CONSM_ID']; ?></td>
        </tr>
        <tr>
            <td align="right">Full Name : </td>
            <td><?php $result=$_SESSION['FNAME'].' '.$_SESSION['MNAME'].' '.$_SESSION['LNAME']; echo $result ;?></td>
        </tr>
        <tr>
            <td align="center" colspan="2"><img src="getImage.php?id=<?php echo $check ?>"  width="150" height="150" border="1px";/></td>
        </tr>
    </table>
</div>
<div id=logout>
<button class="button button1" style="position:absolute;top:110px;right:10px;" onclick="redirect()">LOGOUT</button>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.height = "500px";
    document.getElementById("mySidenav").style.width = "225px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

function redirect(){
	
window.location.href="logout.php";
}

</script>
<br><br><br><br>
<footer style="height:40px;width: 96.5%;position:absolute;margin-top:500;">
    <h2>©Election Commission of India</h2>
</footer>
     
</body>
</html> 
