<?php get_header(); ?>

<section id="header">
  <div class="container">
    <div class="row">
      <div class="col">
        
        <h1>IT'S TIME<br/> FOR HIKING</h1>
        <h2>LOREMIMPSUM DOLOR</h2>
        <button type="button" class="btn headerbtn">READ MORE</button>
        <p><?php the_field('header_desc');?></p>
      </div>

    </div>
  </div>
</section>

<section id="letsgo">
  <div class="container text-center">

    <div class="row">
      <div class="col">
        <h1><?php the_field('letsgo_title');?></h1>
         <p class="utitle"><?php the_field('letsgo_desc');?></p>
      </div>
    </div>

    <div class="row">

      <div class="col-md-4">
        <div class="card">
          <a href="">
          <div class="card-img">
          <img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri();?>/img/letsgo1.png">
        </div>

        <div class="card-body">
          <h3>Lorem Ipsum</h3>
          <p class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
        </div>
          </a>
        </div>
      </div>


      <div class="col-md-4">
        <div class="card">
          <a href="">
            <div class="card-img">
              <img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri();?>/img/letsgo2.png">
            </div>

            <div class="card-body">
              <h3>Lorem Ipsum</h3>
              <p class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
            </div>
          </a>
        </div>
      </div>


      <div class="col-md-4">
        <div class="card">
          <a href="">
            <div class="card-img">
              <img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri();?>/img/letsgo3.png">
            </div>

            <div class="card-body">
              <h3>Lorem Ipsum</h3>
              <p class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
            </div>
          </a>
        </div>

      </div>
    </div>
    </div>



    <div class="row text-center">
      <div class="col">
        <button type="button" class="btn letsgobtn">SHOW MORE</button>
      </div>
    </div>

  </div>


</section>



<section id="promo">
  <div class="container">
    
    <div class="row">
      
      <div class="d-none d-lg-block col-lg-6 promoimg">
        <img src="<?php echo get_template_directory_uri();?>/img/discountImg.png" class="img-fluid discountImg" >
      </div>

      <div class="col-lg-6 promodisco">
        
        <h2>Discount up to<br/> 50% All Excursions</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eros nisl, tempor vitae volutpat ac, maximus scelerisque lectus. Aliquam in auctor diam. Nam molestie gravida lacus, consectetur eleifend sem mattis a.</p>
        <button type="button" class="btn promobtn1">READ MORE</button>

      </div>

    </div>


    <div class="row">

      <div class="col-lg-6 promodisco2">
        <h2>January's Promo:<br/> Buy 1 Get 1 Free!</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eros nisl, tempor vitae volutpat ac, maximus scelerisque lectus. Aliquam in auctor diam. Nam molestie gravida lacus, consectetur eleifend sem mattis a.</p>
        <button type="button" class="btn promobtn2">READ MORE</button>
      </div>

      <div class="d-none d-lg-block col-lg-6 promoimg">
        <img src="<?php echo get_template_directory_uri();?>/img/promoImg.png" class="img-fluid discountImg2">
      </div>

    </div>

</div>
</section>




<section id="hiking">
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <h1><?php the_field('hm_title');?></h1>
        <p><?php the_field('hm_desc');?></p>
      </div>
    </div>
  </div>
</section>

<section id="explore">
  <div class="container">
    <div class="row">
      <div class="col text-right">
        <h2><span class="exploreTitle">EXPLORE</span><br/></span> THE WORLD</h2>
      </div>
    </div>
  </div>
</section>


<section id="testimonials">
  <div class="container">

    <div class="row">
      <div class="col-md-4">
        <h3>Lorem ipsum</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eros nisl, tempor vitae volutpat ac, maximus scelerisque lectus. Aliquam</p>
      </div>
      <div class="col-md-4">
        <h3>Lorem ipsum</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eros nisl, tempor vitae volutpat ac, maximus scelerisque lectus. Aliquam</p>
      </div>
      <div class="col-md-4">
        <h3>Lorem ipsum</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eros nisl, tempor vitae volutpat ac, maximus scelerisque lectus. Aliquam</p>
      </div>
    </div>

    <div class="row text-center">
      <div class="col">
        <img src="<?php echo get_template_directory_uri();?>/img/quotes.png">

      <p class="quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eros nisl, tempor vitae volutpat ac, maximus scelerisque lectus. Aliquam Nam molestie gravida lacus, consectetur eleifend sem</p>
      <p class="author">Lorem Ipsum</p>

      </div>
      

    </div>

</div>
</section>

<section id="subscribe">
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <h2>Title Here</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eros nisl, tempor vitae volutpat ac, maximus scelerisque lectus</p>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div>

                  <input  class="subinput" type="email" name="" value="Your Email">

                  <span class="input-group-btn"><button class="subbtn" type="button">SUBSCRIBE</button></span>
      
        </div>
      </div>
    </div>
</div>

</section>

<?php get_footer() ?>