<?php


include 'includes/connection.php';
$pwd = $_POST['password'];
$con=mysqli_connect("localhost","root","123456","phl");
$result = mysqli_query($con,"SELECT * FROM tbladministrator WHERE pass='$pwd'");
                
$num = mysqli_num_rows($result);

if($num==1)
{
  session_start();
  $_SESSION['pwd'] = $pwd;
  header('location:index.php');
}
else
{
  session_start();
  $_SESSION['msg'] = '<h2>Invalid username or password!</h2>';
  header('location:login.php');
}

?>
