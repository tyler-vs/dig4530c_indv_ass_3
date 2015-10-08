<?php  
/**
 *  featured_item.php
 *
 *  this is the demo featured item page.
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
// else {
//   echo '<div class="alert alert-info">Connected to sulley db!</div>';
// }



/**
 * local page variables
 */
$page_title = 'Featured Item';

/**
 * grab header html part
 */
include ('includes/head.inc.php');

?>

  <!-- Featured Item Template
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="featured" class="section">
    <div class="container">
      <div class="row section-header">
        <h1 class="section-title"><?php echo $page_title; ?></h1>
      </div>

      <?php  

      /**
       * run a sql query to grab the featured item, 
       * this query is a demo and will instead limit itself
       * to grab just one product to demo the featured item.
       */
      

      // generate the query with the `$result` variables

      if ( $result = mysqli_query($mysqli, "SELECT * FROM `products_demo` WHERE Featured=1 LIMIT 1")) { 

        // if a result exists then output that data into 
        // this html template for featured item(s).
        while ( $row = mysqli_fetch_assoc($result) ) {
          echo '
            <div class="row">
              <div class="seven columns featured-item">
                <h2 class="featured-item_title">' . $row['Name'] . ' <span class="text-muted">100% Headshots.</span></h2>
                <p>' . $row['Description'] . ' <a href="product.php?' . $row['Id'] . '">See Product Specs</a>.
                </p>
                <p>
                  <span class="old-price">' . $row['SalePrice'] . '</span> <strong class="new-price"> $' . $row['MSRP'] . '</strong>
                </p>
              </div>
              <div class="five columns">
                <a href="product.php?' . $row['Id'] . '">
                  <img src="img/products/' . $row['Image'] . '" alt="an image of a cool product." class="u-max-full-width" />
                </a>
              </div>
            </div>';


        } 
      } else {
        /**
         * if an error occurs then we output an error message
         */
        echo '<div class="alert alert-error">No Featured Items.</div>';
      }

      ?>
      
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