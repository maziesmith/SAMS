<?php
session_start();
$sid=$_SESSION['sub_id'];
if(isset($_POST['do']))
{
	header('location:r3.php');
}
if(isset($_POST['view1']))
{
	header('location:del2.php');
}
if(isset($_POST['add']))
{
	header('location:r1.php');
}
if(isset($_POST['view2']))
{
	header('location:del3.php');
}
if(isset($_POST['do1']))
{
	header('location:ut1.php');
}
if(isset($_POST['do2']))
{
	header('location:us2.php');
}
if(isset($_POST['do3']))
{
	header('location:us3.php');
}
?>