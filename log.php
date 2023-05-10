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
<?php
   if(isset($_COOKIE['error'])){
      echo '<p style="color:red">'.$_COOKIE['error'].'</p>';
      setcookie('error' , '', time()-10);
   }
?>

<div class="container base">

   <form class="loginform userinfo" method="get" action="checklogin.php">
      <h1>Login</h1>
      <input type="text" name="username" placeholder="Username" autocomplete="off" required>
      <input type="password" name="password" placeholder="Password" autocomplete="off" required>
      <div><input type="checkbox" name="rem"> Remember me</div>
      <button type="submit">Login</button>
      <a href="reg.php">Not Have an Account? Register</a>
   </form>

</div>

</body>


</html>