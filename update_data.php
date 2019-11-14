<?php
$autoid = $_POST['hid'];
$un = $_POST['txtusername'];
$pw = $_POST['txtpassword'];
$fn = $_POST['txtfirstname'];
$ln = $_POST['txtlastname'];
$email = $_POST['txtemail'];

include('includes/connection.php');

$sql = "UPDATE tblusers SET Username='$un', Password='$pw', Firstname='$fn', Lastname='$ln', Email='$email' WHERE id='$autoid'";

if(mysql_query($sql))
{
	header('location:users.php');
}
else
{
	die('Unable to update record: ' .mysql_error());
}
?>