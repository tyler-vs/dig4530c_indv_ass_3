<?php  

/**
 *  catalog.php
 *
 *  this page will output all the inventory
 *  from the products_demo database.
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
$page_title = 'Catalog';

/**
 * grab header html part
 */
include ('includes/head.inc.php');

?>


  <!-- Catalog Template
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="catalog" class="section">
    <div class="container">
      <div class="row section-header">
        <h1 class="section-title"><?php echo $page_title; ?></h1>
      </div>

      <div class="row">
        <ul class="catalog-list u-cf">

          <?php  

          

          // $row = mysqli_fetch_assoc($result);

          if ($result = mysqli_query($mysqli, "SELECT * FROM `products_demo`")) {



          while( $row = mysqli_fetch_assoc($result) ) {
            echo '<li class="four columns catalog-item panel">
              <!-- product image -->
              <a href="product.php?' . $row['Id'] . '">
                <img src="img/products/' . $row['Image'] . '" alt="" class="u-max-full-width" />
              </a>
              <div class="catalog-item_detail">
                <div>
                  <a href="product.php?' . $row['Id'] . '"> ' . $row['Name'] . '</a>
                </div>
                <div class="price-tag">
                  <span class="old-price"> $' . $row['SalePrice'] . '</span> <strong class="new-price"> $' . $row['MSRP'] . '</strong>
                </div>
                <p>' . $row['Description'] .' <a href="product.php?' . $row['Id'] . '">Product Page</a>.</p>
                <ul class="stats u-full-width">
                  <li><a href="#">1,056 <span>Likes</span></a></li>
                  <li><a href="#">5 <i class="fa fa-star"></i> <span>Rating</span></a></li>
                  <li><a href="#">316 <span>Reviews</span></a></li>
                </ul>
              </div>
            </li>';  
            }
          } else {
            echo '<div class="alert alert-error">Sorry no items to display</div>';
          }

          ?>

          

          <!-- <li class="four columns catalog-item panel">
            <a href="#">
              <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/307033/10.jpg" alt="" class="u-max-full-width" />
            </a>
            <div class="catalog-item_detail">
              <div>
                <a href="#">3 Month Subscription</a>
              </div>
              <div class="price-tag">
                <span class="old-price">$55.00</span> <strong class="new-price"><sup>$</sup>49.99</strong>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione consequatur temporibus asperiores, qui ipsa ab eius, laborum.</p>
              <p>
                <button class="button-primary u-full-width">Product Page</button>
              </p>
              <ul class="stats u-full-width">
                <li><a href="#">1,056 <span>Likes</span></a></li>
                <li><a href="#">5 <i class="fa fa-star"></i> <span>Rating</span></a></li>
                <li><a href="#">316 <span>Reviews</span></a></li>
              </ul>
            </div>
          </li> -->

        </ul>
      </div>
      <!-- pagination here -->
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