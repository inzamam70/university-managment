<?php 
   if(isset($_COOKIE['user'])){
      header('Location: home.php');
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

   
<div class="container base">


<form class="loginform userinfo" action="checkreg.php" method="get">
<h1>Registration</h1>
 <input type="text" name="username" placeholder="Username" autocomplete="off" required>
 <input type="password" name="password" placeholder="Password" autocomplete="off" required>
 <div class="genderList">
    <p>Select your Gender</p>
    <div>  
      <div><input type="radio" name="gender" value="M"> Male</div>
      <div><input type="radio" name="gender" value="F"> Female</div>
    </div>
  </div>
   <select name="dept">
     <option value="none" disabled selected>Department</option>
     <option value="CSE">CSE</option>
     <option value="EEE">EEE</option>
     <option value="IT">IT</option>
     <option value="ENGLISH">ENG</option>
   </select>
  <button type="submit">Sign Up</button>
  <a href="log.php">Already Have an Account? Login</a>
</form>

</div>

</body>


</html>