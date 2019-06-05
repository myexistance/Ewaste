<?php get_header(); ?>

<!-- <h1>This is from our index.php file</h1> -->

<?php if( have_posts() ): ?>
  <div class="col <?php echo $contentorder; ?>">
    <div id="postList" class="row cardList">
    <?php while( have_posts() ): the_post() ?>
        <div class="card col mr-3 ml-3">
            <h2><?php the_title(); ?></h2>

            <div class="content">
                <?php get_template_part( 'content', get_post_format() ); ?>
            </div>
            <a class="btn btn-primary" href="http://localhost:8888/Ewaste/refurbish-2/contact-us/">Request A Pickup</a>
            <hr>
        </div>
    <?php endwhile; ?>

<?php else: ?>
    <p>There is no post</p>
  </div>
  </div>
<?php endif; ?>


<?php get_footer(); ?>
