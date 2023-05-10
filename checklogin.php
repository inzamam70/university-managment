<?php

  $u = $_GET['username'];
  $p = $_GET['password'];
  $connection = mysqli_connect('localhost', 'root' , '' , 'abcuni' );

  $command = "Select * FROM profile WHERE username = '$u' ";
  $result = $connection->query($command);

  if($result->num_rows > 0){
      $command = "Select * FROM profile WHERE username = '$u' and password='$p'";
      $result = $connection->query($command);


     if($result->num_rows > 0){

        if(isset($_GET['rem'])){
            setcookie("user", $u , time()+36000);

        }
        else{
            setcookie("user", $u , time()+3600);
         }
         header('Location: dash.php');

     }
     else{
       setcookie('error' , 'Wrong Password' , time()+60000);
       header('Location: log.php');
     }
  }
  else{
     setcookie('error' , 'Wrong Username' , time()+600000);
     header('Location: log.php');
  }


?>
