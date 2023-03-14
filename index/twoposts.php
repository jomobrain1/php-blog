<div class="row">
    <h4 class="h4"><?php echo $twop ?></h4>
<?php foreach($twoposts as $post) : ?>  
            <div class="col-lg-6">
              
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
            
            
        </div>


        <style>
            .h4{
                text-align: center;
                margin-bottom: 30px;
            }
        </style>