<?php include("path.php") ?>
<?php include(ROOT_PATH."/app/controllers/posts.php")?>
<?php include(ROOT_PATH."/app/includes/toplinks.php") ?>

<?php
if(isset($_GET["id"])){
    $post=selectOne("posts",["id"=>$_GET['id']]);
    //  dd($post);
}


?>
<body class=" ">

<!-- Header -->

<!-- Include:Header -->
    <?php include(ROOT_PATH."/app/includes/header.php") ?>

<!-- ... End Header -->

<div class="content-wrapper">

<!-- Stunning Header -->

<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title"><?php echo $post["title"] ?></h1>
    </div>
</div>

<!-- End Stunning Header -->

<!-- Post Details -->


<div class="container">
    <div class="row medium-padding120">
        <main class="main">
            <div class="col-lg-10 col-lg-offset-1">
                <article class="hentry post post-standard-details">

                    <div class="post-thumb">
                        <img src="<?php echo BASE_URL . "/assets/images/".$post["image"]?>" alt="seo">
                    </div>

                    <div class="post__content">


                        <div class="post-additional-info">

                            <div class="post__author author vcard">
                                Posted by

                                <div class="post__author-name fn">
                                <?php $author=selectOne("users",["id"=>$post["user_id"] ]); ?>
                                 <b class="by"><?php echo $author["username"]?> </b>
                                </div>

                            </div>

                            <span class="post__date">

                                <i class="seoicon-clock"></i>

                                <time class="published" datetime="2016-03-20 12:00:00">
                                <?php echo $post["created_at"] ; ?>
                                </time>

                            </span>

                            

                        </div>

                        <div class="post__content-info">

                            


                          

                            <h4 class="mb30"><?php echo html_entity_decode($post["title"] ); ?></h4>

                            <p class="post__text"><?php echo html_entity_decode($post["body"] ); ?>
                            </p>

                            

                          

                        </div>
                    </div>

                    

                </article>


                

               

               


            </div>

            <!-- End Post Details -->

            <!-- Sidebar-->

           

            <!-- End Sidebar-->

        </main>
    </div>
</div>



</div>

<!-- Footer -->
<!-- Include: Footer -->
<?php include(ROOT_PATH."/app/includes/footer.php") ?>
<!-- End Footer -->


<?php include(ROOT_PATH."/app/includes/bottomlinks.php") ?>
