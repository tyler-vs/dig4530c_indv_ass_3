<?php  


/**
 *  fullfillment.php
 * 
 * this page is where the user is redirected after 
 * a order is fullfilled, it simply assures the customer that
 * their order wnet through successfully.
 * 
 */

/**
 * includes environment variables
 */
include ('includes/config.inc.php');

/**
 * local file variables
 */
$page_title = 'Fullfillment';


/**
 * base head .html
 */
include ('includes/head.inc.php');


?>


  <!-- Fullfillment Template
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="fullfillment" class="section">
    <div class="container">
      <div class="row section-header">
        <!-- js randomize noun -->
        <h2 class="section-title">Success! <span class="text-muted">Fullfillment</span>.</h2>
      </div>

      <div class="row">
        <div class="six columns offset-by-three">
          <div class="alert alert-success" role="alert">Your Payment Went Through!</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo illum, fugit totam eius minus exercitationem non impedit, incidunt. Error omnis odit distinctio beatae, voluptate fuga nisi sit quia? Magni, debitis.</p>
        </div>
      </div>

    </div>
  </section>

  
<?php  

include ('includes/footer.inc.php');