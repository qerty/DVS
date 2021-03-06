<!DOCTYPE html>
<html>
 <head>
    <title>Registeration Portal</title>
<meta name="viewport" content="width=device-width initial-scale=1.0">
    
    <link rel="shortcut icon" href="India.ico" />
<style>

/* Full-width input fields */
header{
    padding: 1em;
    background-color: black;
    clear: left;
    text-align: center;
    color: white;   
}
footer{
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
   
}
input[type=text],[type=password],[type=number] ,[type=tel]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-radius: 4px;
}

/* Set a style for all buttons */
button {
    background-color: rgb(30,30,255);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.8;
    border-radius: 4px;
    border:2px solid rgb(0,0,255);
}

button:hover {
    opacity: 1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: rgb(255,0,0);
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
    border-radius: 8px; 
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.5); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: rgba(255,255,255,0.9);
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 4px solid #fff;
    width: 35%; /* Could be more or less, depending on screen size */
    border-radius: 8px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

.button {
     box-shadow: 10px 10px 8px #888888;

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
    background-color: rgb(0,161,255); 
    color: white; 
    border: 2px solid rgb(0,131,255);
    margin-left: 400px;
}

.button1:hover {
    background-color: rgb(0,131,255);
    color: white;
}

</style>
<script type="text/javascript">
        function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

</script>
</head>
<body background="shade.png" style="background-position: center; background-size:150%;">
<div  >
   <header>
    <img src="eci.png" align="left" height="60px" width="60px;" style="margin-left: 10px;">
    <h2>ELECTION COMMISSION OF INDIA</h2>
    </header>


<button class="button button1" style="font-size:25px;position: absolute;top: 270px;margin-left: 300px;width: 20%" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><b>Returning Officer Login</b></button>

<button class="button button1" style="font-size:25px;position: absolute;top: 270px;left: 400px;width: 20%" onclick="document.getElementById('id02').style.display='block'" style="width:auto;"><b>Field Officer Login</b></button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" name="ro_login" action="ro_login.php " method ="post" autocomplete="off">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="avatar.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Returning Officer ID</b></label>
      <input type="text" minlength="4" maxlength="4" placeholder="Enter RO_ID" name="ID" onkeypress="return isNumberKey(event)" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="PASS" required>
        
      <button type="submit">Login</button>
    </div>
    <div class="container" style="background-color: rgba(153,153,153,0.4);">
      <button style="position: relative;left: 175px;border:2px solid rgb(255,0,0);" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>


<div id="id02" class="modal"> 
  <form class="modal-content animate" name="fo_login" action="fo_login.php" method ="post" autocomplete="off">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="avatar.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Field Officer ID</b></label>
      <input type="text" minlength="6" maxlength="6" placeholder="Enter Field Officer ID" name="ID" onkeypress="return isNumberKey(event)" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="PASS" required>
        
      <button type="submit">Login</button>
    </div>
    <div class="container" style="background-color: rgba(153,153,153,0.4);">
      <button style="position: relative;left: 175px;border:2px solid rgb(255,0,0);" type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
</script>
<footer style="height:40px;width: 96.5%;position:absolute;bottom:0;">
    <h2>©Election Commission of India</h2>
</footer>
</div>

</body>
</html>
