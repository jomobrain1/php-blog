<?php include("../../path.php"); ?>
<?php include(ROOT_PATH."/app/controllers/users.php");?>
<?php adminOnly();?>
<?php include( ROOT_PATH."/app/includes/admin/header.php"); ?>

<?php include( ROOT_PATH."/app/includes/admin/sidebar.php") ;?>

	<div id="content">
      
      <div class="container">
      <h1> Manage Users</h1>
      <?php include(ROOT_PATH. "/app/includes/message.php") ?>
        <div class="btns">
        <a class="btn" href="<?php echo BASE_URL ."/admin/users/index.php" ?>">manage users</a>
        <a class="btn" href="<?php echo BASE_URL ."/admin/users/create.php" ?>">add users</a>
        </div>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">#</div>
      <div class="col col-2">Username</div>
     
      <div class="col col-4">Action</div>
      <div class="col col-4">Delete</div>
    </li>
   
    <?php foreach ($admins as $key=> $admin) : ?>
      <li class="table-row">
      <div class="col col-1" data-label="Id"><?php echo $key+1?></div>
      <div class="col col-2" data-label="Name"><?php echo $admin[2] ?></div>      
      <div class="col col-4" data-label="Edit">
        <a href="edit.php?id=<?php echo $admin[0] ?>"  class="edit">Edit</a>
      </div>
      <div class="col col-4" data-label="Remove">
        <a  href="index.php?delete_id=<?php echo $admin[0] ?>" class="delete">Delete</a>
      </div>
      </li>
    <?php endforeach ; ?>
  </ul>
</div>
     </div>
     <?php include( ROOT_PATH."/app/includes/admin/bottom.php") ?>