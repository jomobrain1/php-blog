<?php include("path.php") ?>
<?php include(ROOT_PATH."/app/controllers/users.php");
guestOnly();
?>

<link rel="stylesheet" href="assets/css/login.css">
<div class="login-page">
  <div class="form">
    
  
  <form action="register.php" method="post" class="register-form">
      
  <?php include(ROOT_PATH."/app/helpers/formErrors.php")?>

      <input type="text" placeholder="username"  value="<?php echo $username; ?>" name="username" />
      <input type="text" placeholder="email address" value="<?php echo $email; ?>" name="email"/>
      <input type="password" placeholder="password" value="<?php echo $password; ?>" name="password"/>
      <input type="password" placeholder="confirm password" value="<?php echo $password_confirmation; ?>" name="password_confirmation"/>
      
      <button name="register-btn">Register</button>
      <p class="message">Already registered? <a href="<?php echo BASE_URL."/login.php" ?>">Sign In</a></p>
    </form>
  
  </div>
</div>

