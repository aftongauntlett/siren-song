<?php
get_header();
?>
<div class="main-image">
  <div class="pimg1" style="background-image: url(<?php echo wp_get_attachment_url(get_theme_mod('lawyer_background_image')) ?>) ">
   <div class="ptext">
    <span class="border mainText">
      <span style="color: #60C1A2">S</span>iren <span style="color: #60C1A2">S</span>ong
    </span>
  </div>

  </div>


  <div class="ptext">
    <div>
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('lawyer_center_logo_image')) ?>" alt="">
    </div>
  </div>
  
</div>


<section class="section section-light">

  <?php
    echo get_theme_mod('middle_image')
  ?> 


  <div class="row row-cols-1 row-cols-lg-3 m-3 pt-3">
    <div class="col mb-4">
      <div class="card h-100 module">
        <a class="aCard" href="<?php echo site_url('/shop') ?>">
          <div class="m-3 p-3 card-body">
            <i class="lawIcon fa fa-shopping-basket pr-5"></i>
            <h5 class="pb-2 card-title">

              <!-- Finish setting up CARD PHP here -->
              
              <?php
                echo get_theme_mod('card-one-title')
              ?>  
            
            </h5>
            <p class="card-text">

              <?php
                echo get_theme_mod('card-one-info')
              ?> 
            
            </p>
          </div>
        </a>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card h-100 module">
        <a class="aCard" href="<?php echo site_url('/featured') ?>">
          <div class="m-3 p-3 card-body">
            <i class="lawIcon fa fa-star pr-5"></i>
            <h5 class="card-title pb-2">

            <?php
              echo get_theme_mod('card-two-title')
            ?>  

            </h5>
            <p class="card-text">

            <?php
              echo get_theme_mod('card-two-info')
            ?>  

            </p>
          </div>
        </a>
      </div>
    </div>
    <div class="col mb-4">
      <div class="card h-100 module">
        <a class="aCard" href="<?php echo site_url('/about') ?>">
          <div class="m-3 p-3 card-body">
            <i class="lawIcon fa fa-anchor pr-5"></i>
            <h5 class="pb-2 card-title">
              <?php
              echo get_theme_mod('card-three-title')
              ?>  
            </h5>
            <p class="card-text">
            <?php
              echo get_theme_mod('card-three-info')
            ?>  
            </p>
          </div>
        </a>
      </div>
    </div>
  </div>
  </div>
</section>

<div class="quoteBackground container-fluid">
  <div class="quote container">
    <h2 class="mainQuote mb-3">
            <?php
            echo get_theme_mod('quote_title')
            ?>  
    </h2>
    <div class="pb-4 quoteText">
            <?php
              echo get_theme_mod('quote')
            ?>  
    </div>
    <div class="quoteText">- <i>
           <?php
              echo get_theme_mod('quote_name')
            ?>  
    </i></div>
  </div>
</div>

<!-- add image PHP here -->

<div class="pimg2 pimg-bottom" style="background-image: url(<?php echo wp_get_attachment_url(get_theme_mod('lawyer_bottom_image')) ?>) "></div>

           
          

<?php 
get_footer();
?>