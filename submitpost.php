<?php
   $connection = mysqli_connect('localhost', 'root' , '' , 'abcuni' );

   $course_id = $_POST['course'];
   $username = $_COOKIE['user'];

   if($course_id){

      $command = "Select * FROM all_course WHERE id = '$course_id'";
      $query = mysqli_query($connection, $command);
      $result = mysqli_fetch_assoc($query);
      $course = $result['course'];

      $command = "Select * from courses WHERE user = '$username' AND course = '$course'";
      $result = $connection->query($command);

      if($connection->query($command) == TRUE){
         if($result->num_rows > 0){
               header('Location: courses.php');
         } else {
               $command = "INSERT INTO courses VALUES (null, '$course', '$username')";
               if($connection->query($command) == TRUE){
                        header('Location: dash.php');
               }
               else{
               echo  $connection->error;
               }
         }
      }
   } else {
      header('Location: courses.php');
   }

   
?>
