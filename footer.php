<div class="container-fluid company-info-footer">
  <?php if (get_theme_mod('lawyer_footer_callout_display') == "Yes") { ?>
    <!-- <div class="mx-3">
      <p>
        <h3>Address</h3>
        <div>
          <?php
            echo get_theme_mod('street-address');
          ?>  
        </div>
        <div>
          <?php
            echo get_theme_mod('city-state-zip-address');
          ?>
        </div>
      </p>
    </div> -->
  

    <div class="mx-3 contact">
      <p>
        <h3>Contact</h3>
        <button
          type="button"
          class="idle mainButtons btn btn-outline-light mt-4"
          href="mailto:
            <?php
            echo get_theme_mod('email');
            ?>">Email Us
        </button>
    <div class="pt-4 mr-4">
    <a href="https://www.facebook.com/"> <i class="fa fa-facebook-f contactIcon grow"></i></a>
    <a href="http://instagram.com/"> <i class="fa fa-instagram contactIcon grow"></i></a>
    <a href="http://twitter.com/"> <i class="fa fa-twitter contactIcon grow"></i></a>

    </div>
      </p>
    </div>


    <!-- <div class="mx-3">
      <p>
        <h3>Phone</h3>
        <?php
          echo get_theme_mod('phone');
        ?>
      </p>
    </div> -->
    
  <?php } ?>
</div>

<!-- option to display on CMS -->

<div class="footer container-fluid">

  <!-- add copyright php here -->
  <div class="container">
  <?php
   echo get_theme_mod('copyright')
 ?>
  </div>
</div>


<?php
    wp_footer();
?>

</body>
</html>
