<?php include("../../path.php") ?>

<?php include( ROOT_PATH."/app/includes/admin/header.php") ?>

<?php include( ROOT_PATH."/app/includes/admin/sidebar.php") ?>

	<div id="content">
      
      <form action="edit.php" method="post">
      
      <?php include(ROOT_PATH."/app/controllers/topics.php");
      adminOnly();
      ?>
       <h1>Edit Topics</h1>
       <?php include(ROOT_PATH."/app/helpers/formErrors.php")?>
        <div class="btns">
        <a class="btn" href="<?php echo BASE_URL ."/admin/topics/index.php" ?>">manage topics</a>
        <a class="btn" href="<?php echo BASE_URL ."/admin/topics/create.php" ?>">add topics</a>
        </div>
       <div>
       <input type="hidden" class="input" value="<?php echo $id ?>"name="id">
        <label for="">Name</label> <br>
       <input type="text" class="input" value="<?php echo $name ?>"name="name">
       </div>
       <div>
        <label for="">Description</label> <br>
        <textarea class="input"  name="description" cols="30" rows="10">
        <?php echo $description ?>
        </textarea>
       </div>

       <button name="update-topic">update Topic</button>
      </form>
     </div>
     <?php include( ROOT_PATH."/app/includes/admin/bottom.php") ?>