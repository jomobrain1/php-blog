<?php if($title1["name"] !=="" && !empty($topic1 )): ?>
<div class="container">       
     <?php include("alltopics.php") ?>
        <div class="row">
            <div class="col-lg-2"></div>
            <?php if($title3["name"] !==""): ?>
            <?php foreach($mainpost as $post) : ?>  
            <div class="col-lg-8">
                <article class="hentry post post-standard has-post-thumbnail sticky">

                        <div class="post-thumb">
                            <img src="<?php echo BASE_URL . "/assets/images/".$post[4]?>" alt="seo">
                            <div class="overlay"></div>
                            <a href="<?php echo BASE_URL . "/assets/images/".$post[4]?>" class="link-image js-zoom-image">
                                <i class="seoicon-zoom"></i>
                            </a>
                            <a href="#" class="link-post">
                                <i class="seoicon-link-bold"></i>
                            </a>
                        </div>

                        <div class="post__content">

                            <div class="post__content-info">

                                    <h2 class="post__title entry-title ">
                                    <a href="single.php?id=<?php echo $post[0] ; ?>"><?php echo $post[3] ; ?></a>
                                    </h2>

                                    <div class="post-additional-info">

                                        <span class="post__date">

                                            <i class="seoicon-clock"></i>

                                            <time class="published" datetime="2016-04-17 12:00:00">
                                            <?php echo date('F j, Y',strtotime($post[7] )) ?>
                                            </time>

                                            <small>by: <b><?php echo $post[8] ; ?></b></small>

                                        </span>


                                    </div>
                            </div>
                        </div>

                </article>
            </div>
            <?php endforeach ; ?> 
            <?php endif ; ?>   
            <div class="col-lg-2"></div>
        </div>

        <?php include("twoposts.php") ?>
    </div>
<?php endif ?>