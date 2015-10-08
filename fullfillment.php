<?php  

/**
 *  fullfillment.php
 *
 *  this page is where the user is redirected after 
 *  a order is fullfilled, it simply assures the customer that
 *  their order wnet through successfully.
 * 
 */


/** 
 * contains general variables and baseURL variables
 * to help ease site navigation linking.
 */
include 'includes/setup.inc.php';


/* 
*   variables to connect to sulley servers
*   to grab database items.
*/
include 'includes/config.inc.php';


/**
 * after database connect we can run a query for the page
 */

// mysql db connection
$mysqli = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

// conditional, output an error message if cannot connect to 
// database.
if (mysqli_connect_errno()) {
  // print error message using error css classes
  echo '<div class="alert alert-error">Failed to connect to mysql: ' . mysqli_connect_error() . '</div>';
  // exit out of php code.
  exit();
}



/**
 * local page variables
 */
$page_title = 'Fullfillment';

/**
 * grab header html part
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

/**
 * close connection
 */
mysqli_close($mysqli);


/**
 * add footer html
 */
include ('includes/footer.inc.php');