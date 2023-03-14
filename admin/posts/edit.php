<?php include("../../path.php") ?>

<?php include( ROOT_PATH."/app/includes/admin/header.php") ?>
<?php include(ROOT_PATH."/app/controllers/posts.php");
adminOnly();
?>
<?php include( ROOT_PATH."/app/includes/admin/sidebar.php") ?>

	<div id="content">
      
      <form action="edit.php" method="post" enctype="multipart/form-data">
      
      <input type="hidden"  value="<?php echo $id?>"  name="id">
       <h1>Edit Posts</h1>
       <?php include(ROOT_PATH."/app/helpers/formErrors.php")?>
        <div class="btns">
        <a class="btn" href="<?php echo BASE_URL ."/admin/posts/index.php" ?>">manage posts</a>
        <a class="btn" href="<?php echo BASE_URL ."/admin/posts/create.php" ?>">add post</a>
        </div>
      
       
      
       
        <div>
        <label for="">title</label> <br>
       <input type="text" class="input" value="<?php echo $title ?>" placeholder="title" name="title">
      
       </div>
       <div>
        <label for="">body</label> <br>
        <textarea  class="input" cols="30" rows="10"  name="body">
        <?php echo trim( $body); ?>
        </textarea >
        
       </div>
       <div>
        <label for="">choose image</label> <br>
        <input type="file" class="input" name="image">
       </div>
      
       
       <div>
        <label for="">Topic</label> <br>
       
       
        <select name="topic_id" class="select">
            
             <?php foreach($topics as $key=>$topic):  ?>
               <?php if(!empty($topic_id) && $topic_id==$topic[0]) :?>
                  <option selected value="<?php echo $topic[0] ?>"><?php echo $topic[1] ?></option>

                 <?php else :?>
                  <option  value="<?php echo $topic[0] ?>"><?php echo $topic[1] ?></option>
               <?php endif; ?> 
                
             <?php endforeach;?>
        </select>
       </div>
        <div>
        <?php if(empty($published) && $published==0): ?>
         <label for="">
            <input type="checkbox" name="published" > Publish
         </label>
         <?php else : ?>
            <label for="">
            <input type="checkbox" name="published" checked > Publish
         </label>
         <?php endif ; ?>
        </div>
      
        
        <div class="submit" ><button name="update-post">update</button></div>
      </form>
     </div>
     <?php include( ROOT_PATH."/app/includes/admin/bottom.php") ?>