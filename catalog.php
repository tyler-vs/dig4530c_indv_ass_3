<?php  

# =========================================
# 
# name:     catalog.php
# 
# =========================================
# 
# purpose:  a page that shows all available 
#           items in the `products` table.
#           
#           
# 
# ========================================= #/

# php config file
include ('includes/config.inc.php');






# local / page variables
$page_title = 'Catalog';

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

          $result = mysqli_query($mysqli, "SELECT * FROM `products`");

          // $row = mysqli_fetch_assoc($result);


          while( $row = mysqli_fetch_assoc($result) ) {
            echo '<li class="four columns catalog-item panel">
              <!-- product image -->
              <a href="product.php?' . $row['Id'] . '">
                <img src="' . $row['Image'] . '" alt="" class="u-max-full-width" />
              </a>
              <div class="catalog-item_detail">
                <div>
                  <a href="product.php?' . $row['Id'] . '"> ' . $row['Name'] . '</a>
                </div>
                <div class="price-tag">
                  <span class="old-price"> $' . $row['MSRP'] . '</span> <strong class="new-price"> $' . $row['Sale'] . '</strong>
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

# close connection
mysqli_close($mysqli);

include ('includes/footer.inc.php');