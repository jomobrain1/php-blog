<?php include("../../path.php") ;?>
<?php include(ROOT_PATH."/app/controllers/posts.php");?>
<?php adminOnly(); ?>
<?php include( ROOT_PATH."/app/includes/admin/header.php"); ?>
<?php include( ROOT_PATH."/app/includes/admin/sidebar.php"); ?>

	<div id="content">
      
      <div class="container">
      <h1> manage posts</h1>
      <?php include(ROOT_PATH. "/app/includes/message.php") ?>
        <div class="btns">
        <a class="btn" href="<?php echo BASE_URL ."/admin/posts/index.php" ?>">manage posts</a>
        <a class="btn" href="<?php echo BASE_URL ."/admin/posts/create.php" ?>">add posts</a>
        </div>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">#</div>
      <div class="col col-2">Title</div>
      <div class="col col-3">Author</div>
      <div class="col col-4">Action</div>
      <div class="col col-4">Delete</div>
      <div class="col col-4">Status</div>
    </li>
    <?php foreach ($posts as $key=> $topic) : ?>
      <li class="table-row">
      <div class="col col-1" data-label="Serial"><?php echo $key+1 ?></div>
      <div class="col col-2" > <?php echo $topic[3] ?> </div>
      <?php $author=selectOne("users",["id"=>$topic[1] ]); ?>
      <div class="col col-3" data-label="author"> <?php echo $author["username"]?> </div>
      <div class="col col-3" data-label="action">
        <a href="edit.php?id=<?php echo $topic[0] ?>" class="edit">
          edit
        </a>
      </div>
      <div class="col col-3" data-label="action">
        <a href="edit.php?delete_id=<?php echo $topic[0] ?>"  class="delete">Delete</a>
      </div>
      <div class="col col-4" data-label="Status">
        <?php if($topic[6]) : ?>
         
          <a href="edit.php?published=0&p_id=<?php echo $topic[0] ?>" class="unpublish">unpublish</a>
        <?php else: ?>
          <a href="edit.php?published=1&p_id=<?php echo $topic[0] ?>" class="publish">publish</a>
        <?php endif ; ?>
      </div>
     </li>
   
      <?php endforeach ; ?>
  
   
  </ul>
</div>
     </div>
     <?php include( ROOT_PATH."/app/includes/admin/bottom.php") ?>
