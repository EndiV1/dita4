<?php
get_header();
?>

<div class="container">

<?php

if(have_posts()):
    while(have_posts()):the_post();

?>

<article id="post" <?php the_ID(); ?>
    calss=<?php post_class();?>
    >

    <?php the_title();?>
    <?php the_content();?>
    <div>
        <?php the_post_thumbnail("medium");?>
    </div>

    <small><?php the_category();  edit_post_link();?></small>

    <?php
    if(comments_open()){
        comments_template();
    }
    else{
        echo"komentet nuk i kemi te lejuara";
    }



?>

</article>



<?php
endwhile;
endif;
?>

</div>



<?php
get_footer();
?>