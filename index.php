<?php


  $firstname=$_REQUEST['name'];
  $email=$_REQUEST['email'];
  $message=$_REQUEST['msg'];


  if(isset($_POST['btnsubmit']))
  {
    $host="localhost";
    $user="root";
    $password="";
    $database="bishub";

    

   $connect= mysqli_connect($host, $user, $password, $database);
    
   

   $insert="insert into students values('$firstname', '$email', '$message')"; 

    
   mysqli_query($connect, $insert);

   if($connect)
   {
    print(" <h1> Registered Sucessfully </h1>");
   }

  else {
    echo("failed to register your data");
  }

  }


?>