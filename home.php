<?php  

/**
 * home.php
 *
 * this is the main homepage for the website
 * and acts as a portal to other website areas.
 *
 * layout:
 * 
 * - include site variables, helper variables
 * - grab config that grabs sulley mysql connection variables
 * - declare local, or page variables
 * - create sql query [optional]
 * - include html head
 * - output sql data
 * - close with footer @ bottom
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
$mysqli = mysqli_connect("$db_servername", "$db_username", "$db_password", "$db_name");

// conditional, output an error message if cannot connect to 
// database.
if (mysqli_connect_errno()) {
  echo '<div class="alert alert-error"> Failed to connect to mysql: ' . mysqli_connect_error() . '</div>';
}



/*
*   local / page variables
*/
$page_title = 'Homepage';

/*    head .html
*/
include ('includes/head.inc.php');


?>

  
  <section id="demo-welcome" class="section">
    <div class="container">
      <div class="row section-header">
        <h2 class="section-title"><?php echo $page_title; ?></h2>
      </div>
      <div class="row">
        <p>
          <strong>Welcome to Hexia Monthly Subscriptions!</strong><br>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga amet quae ducimus sed quasi itaque architecto recusandae aspernatur nihil excepturi, non id maiores officia repellat debitis tempore, velit sunt voluptatibus.
        </p>
        <p><button class="button-primary">Demo</button></p>
      </div>
    </div>
  </section>


  <!-- Featured Item Template
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="featured" class="section">
    <div class="container">
      <div class="row section-header">
        <h1 class="section-title">Featured Item</h1>
      </div>

      <?php  

      if ( $result = mysqli_query($mysqli, "SELECT * FROM `products` WHERE Featured=1 LIMIT 1")) { 

        if ( $row = mysqli_fetch_assoc($result) ) {
          echo '
            <div class="row">
              <div class="seven columns featured-item">
                <h2 class="featured-item_title">' . $row['Name'] . ' <span class="text-muted">100% Headshots.</span></h2>
                <p>' . $row['Description'] . ' <a href="product.php?' . $row['Id'] . '">See Product Specs</a>.
                </p>
                <p>
                  <span class="old-price"> $' . $row['MSRP'] . '</span> <strong class="new-price"> $' . $row['Sale'] . '</strong>
                </p>
              </div>
              <div class="five columns">
                <a href="product.php?' . $row['Id'] . '">
                  <img src="' . $row['Image'] . '" alt="an image of a cool product." class="u-max-full-width" />
                </a>
              </div>
            </div>';


        } 
      } else {
        echo '<div class="alert alert-error">No Featured Items.</div>';
      }


      ?>
      
    </div>
  </section>


<?php


include ('includes/footer.inc.php');