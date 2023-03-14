<?php include("path.php") ?>
<?php include(ROOT_PATH."/app/controllers/topics.php")?> 

<?php include(ROOT_PATH."/app/includes/toplinks.php") ?>

<?php

//  dd($posts);

$title="All Posts";
$title1= selectOne("topics",["id"=>6]);
$title2= selectOne("topics",["id"=>7]);
$title3= selectOne("topics",["id"=>8]);
$mainpost=getMainPost();


$twop="";

//  dd($posts);
if(isset($_GET["t_id"])){
$posts=getPublishedPostsAndTopics($_GET["t_id"]);
$twoposts= $topic1 =$topic2=$topic3= array();
$title1=$title2=$title3= [
    "name"=>""
];
$title=" You Filtered Topic "." ' " .$_GET["name"]. " ' ";
}
else if(isset($_POST["search-term"])){
    
    $searchTerm=searchPosts($_POST["search-term"]);
    $title=" You searched for "." ' " .$_POST["search-term"]. " ' ";
    $twop=$title;
   $posts=$searchTerm;
   $twoposts=$searchTerm;
   //  dd($twoposts);
   $twoposts= $topic1 =$topic2=$topic3= array();
   

}else{
    $posts=getPublishedPosts();
    $twoposts=getTwoPosts();
    //  dd($twoposts);
    $topic1= getPublishedTopics1();
     $topic2=getPublishedTopics2();
     $topic3=getPublishedTopics3();
    
}
// dd($topic1);

?>

<body class=" ">

<div class="content-wrapper">
    
    <!-- Include:Header -->
    <?php include(ROOT_PATH. "/app/includes/header.php") ?>
    <?php include(ROOT_PATH. "/app/includes/message.php") ?>
    <div class="header-spacer"></div>

    <?php include("index/mainpost.php") ?>

    <div class="container-fluid">
     <div class="container">
     <?php include("index/posts.php") ?>
     </div>
    </div>

    <div class="container-fluid">
        <div class="row medium-padding120 bg-border-color">
            <div class="container">
            <div class="col-lg-12">
                <?php include("index/topic.php") ?>
                <div class="padded-50"></div>
                <?php include("index/topic2.php") ?>
                <div class="padded-50"></div>
                <?php include("index/topic3.php") ?>
                <div class="padded-50"></div>
            </div>
            </div>
        </div>
    </div>


</div>



<!-- Footer -->

<!-- Include: Footer -->
<?php include("app/includes/footer.php") ?>

<!-- End Footer -->



<!-- Overlay Search -->
<?php include(ROOT_PATH."/app/includes/search.php") ?>


<!-- End Overlay Search -->

<?php include(ROOT_PATH."/app/includes/bottomlinks.php") ?>
