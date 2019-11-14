<?php
if(isset($_POST["SubmitBtn"])){

  $fileName=$_FILES["resume"]["name"];
  $fileSize=$_FILES["resume"]["size"]/1024;
  $fileType=$_FILES["resume"]["type"];
  $fileTmpName=$_FILES["resume"]["tmp_name"];  

  if($fileType=="application/vnd.openxmlformats-officedocument.wordprocessingml.document"){
    if($fileSize<=200000000000){

      //New file name
      $random=rand(1111,9999);
      $newFileName=$random.$fileName;

      //File upload path
      $uploadPath="Uploads/".$newFileName;

      //function for upload file
      if(move_uploaded_file($fileTmpName,$uploadPath)){
       // echo "Successful"; 
//echo "File Name :".$newFileName; 
       // echo "File Size :".$fileSize." kb"; 
        //echo "File Type :".$fileType; 
        include('includes/connection.php');
        $un = $_POST['txtfilename'];
        $con=mysqli_connect("localhost","root","123456","phl");
        $sql = mysqli_query($con,"INSERT INTO tbldocument VALUES(NULL,'$newFileName','$txtfilename')");

        if ($sql)
{
	header('location:documents.php');
}
else
{
	die('Unable to insert data:' .mysql_error());
}
      }
    }
    else{
      echo "Maximum upload file size limit is 200 kb";
    }
  }
  else{
    echo "You can only upload a Word doc file.";
  }  
}
?> 