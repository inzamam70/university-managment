<?php
  $username = $_GET['username'];
  $password = $_GET['password'];
  $gender = $_GET['gender'];
  $dept = $_GET['dept'];

  $connection = mysqli_connect('localhost', 'root' , '' , 'abcuni' );

  $command = "INSERT INTO profile VALUES (null, '$username', '$password','$gender', '$dept')";




  if($connection->query($command) == TRUE){
              setcookie("user", $u , time()+3600);
               header('Location: log.php');
  }
  else{
     echo  $connection->error;
  }


?>
