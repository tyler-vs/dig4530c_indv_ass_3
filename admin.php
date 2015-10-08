<?php  

/**
 *  admin_demo.php
 *
 *  demonstration of admin functionalities.
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
// $mysqli = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

// conditional, output an error message if cannot connect to 
// database.
// if (mysqli_connect_errno()) {
//   // print error message using error css classes
//   echo '<div class="alert alert-error">Failed to connect to mysql: ' . mysqli_connect_error() . '</div>';
//   // exit out of php code.
//   exit();
// } 
// else {
//   echo '<div class="alert alert-info">Connected to sulley db!</div>';
// }



/**
 * local page variables
 */
$page_title = 'Admin Page';

/**
 * grab header html part
 */
include ('includes/head.inc.php');


?>


  <section id="admin" class="section">
    <div class="container">
      <div class="row section-header">
        <h2 class="section-title"><?php echo $page_title; ?></h2>
      </div>
      <div class="row">
        <div class="four columns">
          <h3>Admin Options</h3>
          <ul class="">
            <li class=""><a class="text-muted" href="#">Add Product Item</a></li>
          </ul>
        </div>
        <form >
          <div class="eight columns">
            <h4>Add A Product Form</h4>
            <table class="u-full-width">
              <tr>
                <!-- product name -->
                <td><label for="product_name">Product name</label></td>
                <td><input class="u-full-width" type="text" placeholder="product name" id="product_name" name="product_name"></td>
              </tr>
              <tr>
                <!-- product Sku -->
                <td><label for="product_sku">Product sku</label></td>
                <td><input class="u-full-width" type="text" placeholder="product sku number" id="product_sku" name="product_sku"></td>
              </tr>
              <tr>
                <!-- product description -->
                <td><label for="product_description">Product description</label></td>
                <td>
                  <textarea class="u-full-width" placeholder="Product description ..." id="product_description" name="product_description"></textarea>
                </td>
              </tr>
              <tr>
                <!-- product sale price -->
                <td><label for="product_saleprice">Sale price</label></td>
                <td><input class="u-full-width" type="text" placeholder="100.00" id="product_saleprice" name="product_saleprice"></td>
              </tr>
              <tr>
                <!-- product MSRP -->
                <td><label for="product_msrp">Product msrp</label></td>
                <td><input class="u-full-width" type="text" placeholder="product msrp" id="product_msrp" name="product_msrp"></td>
              </tr>
              <tr>
                <!-- product stock -->
                <td><label for="product_stock">Product stock</label></td>
                <td><input class="u-full-width" type="text" placeholder="product stock" id="product_stock" name="product_stock"></td>
              </tr>
              <tr>
                <!-- product category -->
                <td><label for="product_category">Product category</label></td>
                <td>
                  <select class="u-full-width" id="product_category" name="product_category">
                    <option value="special">Special</option>
                    <option value="subscription">Subscription</option>
                    <option value="onetime">One Time Buys</option>
                    <option value="dlc">Downloadable Content</option>
                  </select>
                </td>
              </tr>

              <tr>
                <!-- reset form -->
                <td><strong class="text-warning">Reset Form</strong></td>
                <td>
                  <input type="reset" name="form_reset" value="Reset">
                </td>
              </tr>

              <tr>
                <!-- submit form -->
                <td><strong class="text-success">Submit Form</strong></td>
                <td>
                  <input type="submit" name="form_submit" value="Submit">
                </td>
              </tr>
            </table>     
            <!-- /end of table -->
          </div>
        </form>
        <!-- /end of form -->
      </div>
    </div>
  </section>

<?php  

/**
 * close connection
 */
// mysqli_close($mysqli);

/**
 * add footer html
 */
include ('includes/footer.inc.php');