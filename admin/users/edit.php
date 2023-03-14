<?php include("../../path.php") ?>
<?php include( ROOT_PATH."/app/includes/admin/header.php") ?>
<?php include(ROOT_PATH."/app/controllers/users.php");
adminOnly();
?>
<?php include( ROOT_PATH."/app/includes/admin/sidebar.php") ?>

	<div id="content">
      
      <form action="edit.php" method="post">
       <h1>Edit Users</h1>
       <?php include(ROOT_PATH."/app/helpers/formErrors.php")?>
        <div class="btns">
        <a class="btn" href="<?php echo BASE_URL ."/admin/users/index.php" ?>">manage users</a>
        <a class="btn" href="<?php echo BASE_URL ."/admin/users/create.php" ?>">add users</a>
        </div>
      
        <div>
        <input type="hidden"  value="<?php echo $id?>"  name="id">
        <label for="">username</label> <br>
       <input type="text" class="input" value="<?php echo $username; ?>"  placeholder="username" name="username">
       </div>
       <div>
        <label for="">email</label> <br>
        <input type="email" value="<?php echo $email; ?>"  class="input" placeholder="email" name="email">
       </div>
       <div>
        <label for="">password</label> <br>
        <input type="password" value="<?php echo $password; ?>"  class="input" placeholder="password" name="password">
       </div>
       <div>
        <label for="">confirm password</label> <br>
        <input type="password" value="<?php echo $password_confirmation?>"  class="input" placeholder="password" name="password_confirmation">
       </div>
       
       <div>
        <label for="">make admin</label> <br>
        <?php if(isset($admin) && $admin==1) :?>
            <input type="checkbox" name="admin" checked >
       <?php else : ?>
        <input type="checkbox" name="admin" >
        <?php endif ; ?>
        
       </div>

       <button name="update-admin">Update</button>
      </form>
     </div>
     <?php include( ROOT_PATH."/app/includes/admin/bottom.php") ?>