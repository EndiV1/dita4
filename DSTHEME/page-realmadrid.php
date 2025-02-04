<?php
    /*
        Template Name: Real Madrid baba
    */
?>
<?php get_header();?>
<h1>This Is Real Madrid Template</h1>
<?php

    $args = [
        "posts_per_page" => 3,
        // "category_name" => "sports"
         "category_in" => ["MBAPPE","VINII","Bellingham"]
       // "cat" => 3
    ];

    $query = new WP_Query($args);

if($query -> have_posts() ):
    while($query -> have_posts() ):$query-> the_post();?>
     <div>
        <?php the_post_thumbnail("medium");?>
    </div>

        <h1><?php the_title(); ?></h1>
        <p><?php the_content();?></p>
        <small><?php the_date(); ?></small>
        <br>
        
    <?php endwhile;
endif;
?>
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php bloginfo("template_directory");?> ./images/1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo("template_directory");?> ./images/2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo("template_directory");?> ./images/3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<?php get_footer(); ?>