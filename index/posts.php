             <div class="offers">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="heading">
                                <h4 class="h1 heading-title"><?php echo $title ?></h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="case-item-wrap">
                        <?php foreach($posts as $post) : ?>   
            
                        <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                            <div class="case-item">
                                <div class="case-item__thumb mouseover poster-3d lightbox shadow animation-disabled" data-offset="5">
                                    <img src="<?php echo BASE_URL . "/assets/images/".$post[4]?>" alt="our case">
                                </div>
                                <h6 class="case-item__title">
                                    <a href="single.php?id=<?php echo $post[0] ; ?>"><?php echo $post[3] ; ?></a>
                                </h6>
                                <small><b><?php echo date('F j, Y',strtotime($post[7] )) ?></b></small>
                                <p>By : <b><?php echo $post[8] ; ?> </b></p>
                            </div>
                        </div>
                    <?php endforeach ; ?> 

                          
                        </div>
                    </div>
                </div>