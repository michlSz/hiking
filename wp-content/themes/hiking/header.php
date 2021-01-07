<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <?php wp_head(); ?>

  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <a class="nav-link" href="#"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-link" href="#">HOME</a>
      <a class="nav-link" href="#">MENU</a>
      <a class="nav-link" href="#">OUR STORY</a>
      <a class="nav-link" href="#" >CONTACT US</a>
    </div>
    <form class="form-inline my-2 my-lg-0">
      <input class="searchinput" type="search" placeholder="" aria-label="Search">
      <button class="btn searchimg" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/img/lens.png"></button>
    </form>
  </div>
</nav>