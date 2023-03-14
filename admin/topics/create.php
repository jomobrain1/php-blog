<?php include("../../path.php") ?>
<?php include(ROOT_PATH."/app/controllers/topics.php");
adminOnly();
?>
<?php include( ROOT_PATH."/app/includes/admin/header.php") ?>

<?php include( ROOT_PATH."/app/includes/admin/sidebar.php") ?>


	<div id="content">
      
      <form action="create.php" method="post">
      
     
       <h1>Add Topics</h1>
       <?php include(ROOT_PATH."/app/helpers/formErrors.php")?>
        <div class="btns">
        <a class="btn" href="<?php echo BASE_URL ."/admin/topics/index.php" ?>">manage topics</a>
        <a class="btn" href="">add topics</a>
        </div>
       <div>
        <label for="">Name</label> <br>
       <input type="text" class="input" value="<?php echo $name?>" placeholder="Name" name="name">
       </div>
       <div>
        <label for="">Description</label> <br>
        <textarea class="input" name="description" placeholder="description" cols="30" rows="10">
        <?php echo $description?>
        </textarea>
       </div>

       <button name="add-topic">Add Topic</button>
      </form>
     </div>
     <?php include( ROOT_PATH."/app/includes/admin/bottom.php") ?>