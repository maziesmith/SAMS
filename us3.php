<?php
session_start();
require 'dbconfig/congif.php';
?>
<!DOCTYPE html>
<html>
     <head>
     <title>Student Record</title>
     <link rel="stylesheet" href="css/style.css">
     </head>
     <body>
	 
    <div class="header2">
	<!--<div id="searcharea" class="header1"><input placeholder="Search here.." type="text" id="searchbox"/></div>-->
  <h3 style="color:black"><b>Welcome 
    <?php echo $_SESSION['name']?>  
   </h3>
    <center><h2 style="font-size:60px"><font color="black">Update Student's Record</font></h2></center>
   </div>
    <!--<center><img src="img/users.png" class="im1"/></center>-->
   <form class="myform" action="homepage.php" method="post">
   <!--<button type="button"><a href="r.php"><b>Profile</b></a></button>
   <input name="profile" type="submit" id="profile_btn" value="My Profile">-->
   <br>
   <p class="Go">
   <input name="logout" type="submit" id="logout_btn" value="Log Out"><br>
   </p>
   </form>
  
 <center><div class="notIE">
<span class="fancyArrow"></span>

</body>
   <style>
   body
{
	background-color:teal;
	background-repeat:no-repeat;
	background-size:100%;
}
.header2
{
background-color:white;
	height:180px;
	margin-top:0px;
	margin:0;
	background:cover;
	padding:0px 0px 0px 0px;
	background-repeat:no-repeat;
	background-size:1400px;

}
.Go input
{
width:200px;
height:50px;
background-color:black;
color:red;
border:2px,solid;	
border-radius:15px 50px 30px;
}
.Go input:hover
{
	background-color:red;
	color:white;
}
.er input{
	 display:inline-block;
	height:25px;
	width:435px;
	outline:none;
	color:#74646E;
	border:0px soft black;
	border-radius:0px;
	box-shadow: inset 0.5px 0.5px 0.5px #ddd8dc;
}
</style>

<?php
if(isset($_POST['logout']))
   {
   session_destroy();
   header('location:login.php');
   }
   ?>
   <br><br><br>
 <form class="myform" action="us3.php" method="post">
 <p class="er">
<input name="examrollno" type="text" placeholder="ENTER EXAM ROLLNO."><br><br> 
</p>
<p class="Go">
   <input name="get" type="submit" id="code_btn" value="Get Record"/>

</p>
</form>
<?php
	
if(isset($_POST['get']))
{
	$sid=$_POST['examrollno'];
	if($sid==''){
	echo "<script>alert('Enter Exam rollno.')</script>";
}
$query1="select * from student_info where examrollno='$sid'";
$query1_run=mysqli_query($con,$query1);
   if(mysqli_num_rows($query1_run)>0)
{
	$_SESSION['examrollno']=$sid;
header('location:us33.php');
}
else
	echo "<script>alert('No Such Student record exists!!')</script>";

}
?>
</html>