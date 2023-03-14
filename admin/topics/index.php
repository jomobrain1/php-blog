<?php include("../../path.php") ?>
<?php include(ROOT_PATH."/app/controllers/topics.php");
adminOnly();
?> 
<?php include( ROOT_PATH."/app/includes/admin/header.php") ?>

<?php include( ROOT_PATH."/app/includes/admin/sidebar.php") ?>

	<div id="content">
  
      <div class="container">

      <h1> Topics</h1>
      <?php include(ROOT_PATH. "/app/includes/message.php") ?>
        <div class="btns">
        <a class="btn" href="<?php echo BASE_URL ."/admin/topics/index.php" ?>">manage topics</a>
        <a class="btn" href="<?php echo BASE_URL ."/admin/topics/create.php" ?>">add topics</a>
        </div>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">#</div>
      <div class="col col-2">Name</div>
      <div class="col col-3">Action</div>
      <div class="col col-4">Delete</div>
    </li>
      <?php foreach ($topics as $key=> $topic) : ?>
      <li class="table-row">
      <div class="col col-1" data-label="Job Id"><?php echo $key+1 ?></div>
      <div class="col col-2" > <?php echo $topic[1] ?> </div>
      <div class="col col-3"class="edit"> 
        <a href="edit.php?id=<?php echo $topic[0] ?>">edit </a>
      </div>
      <div class="col col-4" data-label="Payment Status">
      <a href="index.php?del_id=<?php echo $topic[0] ?>" class="delete">delete </a>
      </div>
     </li>
   
      <?php endforeach ; ?>

  </ul>
</div>
     </div>
     <?php include( ROOT_PATH."/app/includes/admin/bottom.php") ?>