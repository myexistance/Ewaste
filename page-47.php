<?php get_header(); ?>

<!-- <h1>This is from our index.php file</h1> -->

<?php if( have_posts() ): ?>
  <div class="col <?php echo $contentorder; ?>">
    <div id="postList" class="row cardList">
    <?php while( have_posts() ): the_post() ?>
        <div class="col-12">
            <!-- <h2><?php the_title(); ?></h2> -->

            <div class="content">
              <main role="main" id="fh5co-main">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-3" id="fh5co-sidebar">
                        <div class="fh5co-side-block">
            <h2>Redeployment</h2>
<p>Does your business have IT assets less than 4 years old?<br><br> There is potential for these assets to be refurbished and on-sold to return value to your business</p>

<img src="<?php echo get_template_directory_uri(); ?>/img/laptops.jpg ?>" width="100%" height="282">



          </div>
                        <div class="fh5co-side-block">
                          <h3>Notes:</h3>
                          <p>If a type of electronic is not mentioned above, please feel free to <a href="contact.html">contact us</a> to find out our policy on your particular item.<br><br>Pricing based on Pickups. Discounts apply for drop offs to our warehouse.</p>
                        </div>

                      </div>
                      <div class="col-md-8 col-md-push-1" id="fh5co-content">

                        <div class="row">
                          <div class="col-md-12"><h2><?php the_title(); ?></h2></div>
                          <div class="col-md-12">
                            <p><?php the_content(); ?></p>
                          </div>
                          <!-- <div class="col-md-6">
                            <p><?php the_content(); ?></p>
                          </div> -->
                        </div>

                  </div>
                </main>

            </div>

        </div>
    <?php endwhile; ?>

<?php else: ?>
    <p>There is no post</p>
  </div>
  </div>
<?php endif; ?>


<?php get_footer(); ?>
