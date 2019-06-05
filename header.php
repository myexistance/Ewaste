<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >
        <!-- <p>This is from header.php</p> -->
        <div class="container-fluid p-0">
        <!-- <header id="fh5co-header" role="banner"> -->

            <nav class="navbar navbar-expand-md navbar-light custom_nav" role="navigation">

              <div class="container">
                <a href="/Ewaste/"></a>
            	<!-- Brand and toggle get grouped for better mobile display -->



            	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
            		<span class="navbar-toggler-icon"></span>
            	</button>
              <?php the_custom_logo(); ?>



            		<?php

            		wp_nav_menu( array(
            			'theme_location'    => 'header_menu',
            			'depth'             => 1,
            			'container'         => 'div',
            			'container_class'   => 'collapse navbar-collapse',
            			'container_id'      => 'bs-example-navbar-collapse-1',
            			'menu_class'        => 'nav navbar-nav',
            			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            			'walker'            => new WP_Bootstrap_Navwalker(),
            		) );
            		?>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="/Ewaste/refurbish-2/contact-us/" class="btn btn-primary">Request a pickup</a></li>
                </ul>
            	</div>

            </nav>
            <!-- </header> -->


<?php if ( get_header_image() ) : ?>
    <div id="site-header">
      <!-- <div class="container">
        <div class="col-md-8 col-md-offset-2">
        <img src="img/LogoLarge1.png" alt="Logo" align="left">

        </div>
      </div> -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>"width="100%" height="220px" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
            <div class="overlay"></div>

        </a>
    </div>
<?php endif; ?>
