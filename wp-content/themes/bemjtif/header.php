<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head($args); ?>
        <link href="./css/bootstrap.css" rel="stylesheet">
        <style>
            link {
                display: block;
            }
        </style>
    </head>
    <body>
        <header>
        <!-- 	<h1><a href="<?php echo home_url(); ?>"> <?php bloginfo('name')?> </a></h1>
        	<h2><?php bloginfo('description');?></h2> -->
        	
            <nav class="navbar navbar-custom navbar-fixed-top">
                  <div class="container-fluid">
                    
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">Brand</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                      
                      </ul>
                      <form class="navbar-form navbar-left">
                      </form>
                      <ul class="nav navbar-nav navbar-right">
                       <!--  <li><?php get_search_form(); ?></li> -->
                       <?php
                        $args = wp_nav_menu( array(
                          'menu'            =>  'primary',
                          'theme_location'  =>  'primary',
                          'depth'           => 2,
                          'container'       => 'div',
                          'container_class' => 'collapse navbar-collapse',
                          'container_id'    => 'bs-example-navbar-collapse-1',
                          'menu_class'      => 'nav navbar-nav',
                          'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                          'walker'          => new wp_bootstrap_navwalker()
                          ));
                      ?>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
        	</nav>

        </header>

