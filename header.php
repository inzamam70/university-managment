<li><a href="home.php">Home</a></li>
<li><a href="about.php">About</a></li>

<?php
   if(isset($_COOKIE['user'])){
       echo '<li><a href="dash.php">Dashboard</a></li>';
       echo '<li><a href="courses.php">Courses</a></li>';
       echo '<li class="logbtn"><a href="logout.php"><button class="lginbtn">Log Out</button></a></li>';
   }
   else{
     echo '<li class="logbtn"><a href="log.php"><button class="lginbtn">Login</button></a></li>';
   }
?>