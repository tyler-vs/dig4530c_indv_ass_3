<?php  

/**
 *  cart.php
 *
 *  cart will show all the products that a signed in 
 *  user has acquired in their online shopping experience
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
$page_title = 'Shopping Cart';

/**
 * grab header html part
 */
include ('includes/head.inc.php');

?>



  <!-- Shopping Cart Template
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="shopping-cart" class="section">
    <div class="container">

      <div class="row section-header">
        <h2 class="section-title"><?php echo $page_title; ?></h2>
      </div>
      
      <form>
        <div class="row">
          <div class="six columns">
            <button class="button-primary">Conintue shopping</button>
            <button class="button">Clear Cart</button>
          </div>
          
          <div class="six columns">
            <button class="button-primary">Recalculate</button> 
            <button class="button">Proceed to checkout &rarr;</button>
          </div>
        </div>
      </form>
      
      <div class="row">
        <table class="u-full-width">
          <thead>
            <tr>
              <th>Product</th>
              <th>MSRP price</th>
              <th>Quantity</th>
              <th>Total price</th>
            </tr>
          </thead>
          <tbody>
              
              <?php  

                if ($result = mysqli_query($mysqli, "SELECT * FROM `products_demo` LIMIT 4")) {

                  while( $row = mysqli_fetch_assoc($result) ) {
                    echo '<tr>
                          <td>
                            <div class="cart-item_info u-cf">
                              <a href="#" title="">
                                <img src="img/products/' . $row['Image'] . '" alt="" class="" />
                              </a>
                              <div class="cart-item_details">
                                <h3><a href="product.php?' . $row['Id'] . '">' . $row['Name'] . '</a></h3>
                                <span>Sku: #' . $row['Sku'] . '</span>
                              </div>
                            </div>
                          </td>
                          <td>' . $row['MSRP'] . '</td>
                          <td>
                            <form>
                              <input type="number" name="quantity" min="0" max="' . $row['Stock'] . '" value="1" />
                            </form>
                          </td>
                          <td>' . $row['SalePrice'] . '</td>
                        </tr>';
                  }
                } else {
                  echo '<div class="alert alert-error">Sorry your shopping cart is empty or sql error occurred.</div>';
                }

              ?>
          </tbody>
        </table>
      </div>
      
      <div class="row">
        <table class="u-full-width cart-total">
          <tr>
            <td>Apply Coupon</td>
            <td>Subtotal</td>
            <td>$499.99</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>Shipping cost</td>
            <td><a href="#">Calculate</a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>Total cost</td>
            <td><strong>$499.99</strong></td>
          </tr>
        </table>
      </div>
      
      <form>
        <div class="row">

          <div class="six columns">
            <button class="button-primary">Conintue shopping</button>
          </div>
          
          <div class="six columns">
            <button class="button-primary">Recalculate</button> 
            <button class="button">Proceed to checkout &rarr;</button>
          </div>
        </div>
      </form>

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