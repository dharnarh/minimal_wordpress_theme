<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Google Fonts CSS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto" rel="stylesheet">
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <?php wp_head(); ?>
  </head>
  <body>
    
    <!-- Navbar section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="<?php echo get_bloginfo( 'wpurl' );?>" class="navbar-brand">Umar Farouq</a>

        <div class="collapse navbar-collapse justify-content-end" id="navbarToggler">
            <ul class="navbar-nav roboto">
                <?php
                    wp_nav_menu (
                        array(
                            'theme_location' => 'header-menu',
                            'container' => false,
                            'menu' => false,
                            'fallback_cb' => false
                        )
                    );
                ?>
                <li class="nav-item" data-toggle="modal" data-target="#searchModal">
                    <span id="search" href="#search" class="nav-link"><span class="fa fa-search"></span></span>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <!--Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="ModalSearch" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalSearch">Search for Article</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="text" placeholder="Search Article" class="form-control roboto"/>
                        </div>
                    </form>
                    <div id="searchresult"></div>
                </div>
            </div>
        </div>
    </div>