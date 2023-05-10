<?php 
   if(!isset($_COOKIE['user'])){
      header('Location: log.php');
   }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ABC University</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='statics/css/main.css'>
</head>
<body>
    <header>
        <h2><a href="home.php">ABC University</a></h2>
        <ul class="nav">
            <?php
               include 'header.php';
            ?>
        </ul>
    </header>
    <?php
      $u = $_COOKIE['user'];
      $connection = mysqli_connect('localhost', 'root' , '' , 'abcuni' );
      $command = "Select * FROM profile WHERE username = '$u'";
      $query = mysqli_query($connection, $command);
      $result = mysqli_fetch_assoc($query);
   ?>
    <div class="container base">
        <div class="userinfo w550">
           <h2>Dept. of <span><?php echo $result['dept']; ?></span></h2>
         </div>
         <div class="course-list w550">
            <p>Courses of <span><?php echo $result['dept']; ?>:</p>
            <ul>
               <?php 
                  $dept = $result['dept'];
                  $command = "Select * from all_course WHERE dept = '$dept'";
                  $result = $connection->query($command);

                  if($connection->query($command) == TRUE){
                     if($result->num_rows > 0){
                        while($x = mysqli_fetch_assoc($result)){
                           echo '<li id=cid-'.$x['id'].'>'.$x["course"].'</li>';
                        }
                     } else {
                        echo '<h3>No Courses Purchased Yet.</h3>';
                     }
                  }
                  else{
                     echo  $connection->error;
                  }
               ?>
            </ul>
         </div>

         <form class="course-list w550 flex-inline" method="post" action="submitpost.php"  enctype="multipart/form-data">
            <select name="course" required>
                <option value="none" disabled selected>Add Course</option>
               <?php 
                  $command = "Select * from all_course WHERE dept = '$dept'";
                  $result = $connection->query($command);

                  if($connection->query($command) == TRUE){
                     if($result->num_rows > 0){
                        while($x = mysqli_fetch_assoc($result)){
                           echo '<option value='.$x['id'].'>'.$x["course"].'</option>';
                        }
                     } 
                  }
                  else{
                     echo  $connection->error;
                  }
               ?>
               </select>
                <button class="sbtn" type="submit">Submit</button>
            </form>
            <div class="course-list w550">
            <p>Your  Courses:</p>

            <ul>
               <?php 
                  $u = $_COOKIE['user'];
                  $connection = mysqli_connect('localhost', 'root' , '' , 'abcuni');      
                  $command = "Select * from courses WHERE user = '$u'";
                  $result = $connection->query($command);

                  if($connection->query($command) == TRUE){
                     if($result->num_rows > 0){
                        while($x = mysqli_fetch_assoc($result)){
                           echo '<li>'.$x["course"].'</li>';
                        }
                     } else {
                        echo '<h3>No Courses Purchased Yet.</h3>';
                     }
                  }
                  else{
                     echo  $connection->error;
                  }
               ?>
            </ul>
         </div>
         </div>

        
     
   

    </div>
</body>


</html>