<?php include("path.php") ?>
<?php include(ROOT_PATH."/app/controllers/users.php");
guestOnly();

?>
<link rel="stylesheet" href="assets/css/login.css">
<div class="login-page">
  <div class="form">
  
    <form action="login.php" method="post" class="login-form">
    <?php include(ROOT_PATH."/app/helpers/formErrors.php")?>
      <input type="text" placeholder="username" value="<?php echo $email ?>" name="email"/>
      <input type="password" placeholder="password" value="<?php echo $password; ?>"  name="password"/>
      <button name="login-btn">login</button>
      <p class="message">Not registered? <a href="<?php echo BASE_URL."/register.php" ?>">Create an account</a></p>
    </form>
  </div>
</div>