<?php include("../path.php") ?>
<?php include(ROOT_PATH."/app/controllers/posts.php");
adminOnly();
?>
<?php include( ROOT_PATH."/app/includes/admin/header.php") ?>

<?php include( ROOT_PATH."/app/includes/admin/sidebar.php") ?>

	<div id="content">
    <h1>Dashboard</h1>
       <?php include(ROOT_PATH. "/app/includes/message.php") ?>

     </div>
     <?php include( ROOT_PATH."/app/includes/admin/bottom.php") ?>

     <style>
      .select{
         width: 100%;
         margin: 20px 0px;
         min-height: 40px;
      }
     </style>