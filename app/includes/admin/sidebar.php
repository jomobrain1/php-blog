<ul class="menu">
  <p>
    <p> <a href="<?php echo BASE_URL ?>">Dashboard</a></p>
  </p>
			<li>
        <a href="<?php echo BASE_URL ."/admin/topics/index.php" ?>">Topics</a>
      </li>
      <li ><a href="<?php echo BASE_URL ."/admin/users/index.php" ?>">Users</a></li>
           
      <li><a href="<?php echo BASE_URL ."/admin/posts/index.php" ?>">Posts</a></li>
          
          
        <p class="log">
           <?php if(isset($_SESSION["id"])):?>
            <li><b href=""><?php echo $_SESSION["username"] ?></b></li>
            <a href="<?php echo BASE_URL . "/logout.php" ?>">Logout</a>
           <?php endif; ?>
        </p>
            
			
		</ul> 
	</div>


    <style>
      .log{

        margin-top: 140%;
  
}
      .publish{
    background: #669900;
    color: #fff;
    padding: 5px 15px;
}
.unpublish{
    background: #f3f3;
    color: #d43;
    padding: 5px 15px;
}
.edit{
  color: orange;
  background: #f3f3f3;
  padding: 5px 10px;
  font-weight: 600;
}
    </style>