<?php
    // get_header() pulls your header.php file 
    get_header();
    // Fecthing the URL of the featured image for use as a backgroynd-image
    $featuredImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
?>
<section class="post-masthead" style="background: url('<?php echo $featuredImg[0]; ?>')"></section>
<div>
    <h1><?php the_title(); ?></h1>
</div>
</section>

<section class="main-body">
    <?php get_the_content(); ?>
</section>
<?php 
    get_footer();
?>