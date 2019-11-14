<?php
$id = $_GET['delID'];

include('includes/connection.php');

$sql = "DELETE FROM tblUsers WHERE id=$id";
if(mysql_query($sql))
{
	header('location:users.php');
}
else
{
	die('Could not delete record:' .mysql_error());
}
?>